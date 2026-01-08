<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Speaker;
use App\Models\Ws;
use App\Models\Seminar;
use App\Models\HomePage;

class SpeakerController extends Controller
{

    public function index()
    {
        $speakers = Speaker::all();
        $ws = Ws::all();
        $Seminar = Seminar::all();
        $home = HomePage::all();

        return view('dashbord', compact('speakers', 'ws', 'Seminar', 'home'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
        'name' => 'required|max:50',
        'position' => 'required|max:50',
        'biography' => 'required',
        'image' => 'required|image|mimes:jpg,png,jpeg'
    ]);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')
            ->store('speakers', 'public');
    }

    Speaker::create($data);

    return back()->with('success', 'Speaker berhasil disimpan');
    }
}
