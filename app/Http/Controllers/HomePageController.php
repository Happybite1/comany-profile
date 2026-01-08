<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomePage;

class HomePageController extends Controller
{
    public function edit()
    {
        $home = HomePage::first(); // CMS 1 halaman saja
        return view('dashbord', compact('home'));
    }

    public function update(Request $request)
    {
        // Ambil data pertama atau buat baru
        $home = HomePage::first() ?? new HomePage();

        // =====================
        // VALIDATION
        // =====================
        $rules = [
            'hero_title' => 'required',
            'hero_subtitle' => 'required',
            'youtube_title_1' => 'required',
            'youtube_link_1' => 'required|url',
            'youtube_title_2' => 'required',
            'youtube_link_2' => 'required|url',
            'nama_logo' => 'required',
        ];

        // Image WAJIB saat pertama input
        if (!$home->exists) {
            $rules['hero_image'] = 'required|image';
            for ($i = 1; $i <= 7; $i++) {
                $rules['participant_image_'.$i] = 'required|image';
            }
        }

        $request->validate($rules);

        // =====================
        // SIMPAN DATA TEXT
        // =====================
        $home->fill($request->except([
            'hero_image',
            'participant_image_1',
            'participant_image_2',
            'participant_image_3',
            'participant_image_4',
            'participant_image_5',
            'participant_image_6',
            'participant_image_7',
            'logo_image',
        ]));

        // =====================
        // HERO IMAGE
        // =====================
        if ($request->hasFile('hero_image')) {
            $home->hero_image = $request->file('hero_image')->store('img', 'public');
        }

        // =====================
        // LOGO IMAGE
        // =====================
        if ($request->hasFile('logo_image')) {
            $home->logo_image = $request->file('logo_image')->store('img', 'public');
        }

        // =====================
        // PARTICIPANT IMAGES
        // =====================
        for ($i = 1; $i <= 7; $i++) {
            $field = 'participant_image_'.$i;
            if ($request->hasFile($field)) {
                $home->$field = $request->file($field)->store('img', 'public');
            }
        }

        $home->save();

        return back()->with('success', 'Home Page berhasil disimpan');
    }
}
