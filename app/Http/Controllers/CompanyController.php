<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function edit()
    {
        $company = Company::first();
        return view('dashbord', compact('company'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'company_description' => 'required',
            'image_company' => 'required|image|mimes:jpg,png,jpeg,|max:2048',
            'image_peserta1' => 'required|image|mimes:jpg,png,jpeg,|max:2048',
            'image_peserta2' => 'required|image|mimes:jpg,png,jpeg,|max:2048',
            'image_peserta3' => 'required|image|mimes:jpg,png,jpeg,|max:2048',
            'image_peserta4' => 'required|image|mimes:jpg,png,jpeg,|max:2048',
        ]);

        // ambil data lama (kalau ada)
        $company = Company::first();

        $data = [
            'company_name' => $request->company_name,
            'company_description' => $request->company_description,
        ];

        $images = [
            'image_company',
            'image_peserta1',
            'image_peserta2',
            'image_peserta3',
            'image_peserta4',
        ];

        foreach ($images as $img) {
            if ($request->file($img)) {
                // upload baru
                $data[$img] = $request->file($img)->store('company', 'public');
            } else {
                // PAKSA tetap ada isinya
                $data[$img] = $company?->$img ?? 'default.png';
            }
        }

        Company::updateOrCreate(
            ['id_company' => 1],
            $data
        );

        return back()->with('success', 'Company profile berhasil diupdate');
    }
}
