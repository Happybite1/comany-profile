<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ws;

class WsController extends Controller
{
    public function store(Request $request)
    {
        // =======================
        // VALIDATION (SEMUA REQUIRED)
        // =======================
        $request->validate([
            'product_name' => 'required|string',
            'subheadline_description' => 'required|string',
            'image_product' => 'required|image|mimes:jpg,jpeg,png',

            'judul_poin' => 'required|string',
            'subheadline_poin' => 'required|string',
            'poin.*' => 'required|string|max:255',

            'judul_poin2' => 'required|string',
            'subheadline_poin2' => 'required|string',
            'poin_2.*' => 'required|string|max:255',

            'image_lokasi' => 'required|image',
            'nama_lokasi' => 'required|string',

            'image_waktu' => 'required|image',
            'tanggal_waktu' => 'required|string',

            'total_benefit' => 'required|integer',
            'harga_normal' => 'required|integer',
            'harga_spesial' => 'required|integer',
        ]);

        // =======================
        // UPLOAD IMAGE
        // =======================
        $imageProduct = $request->file('image_product');
        $imageLokasi  = $request->file('image_lokasi');
        $imageWaktu   = $request->file('image_waktu');

        $namaProduct = time().'_product.'.$imageProduct->extension();
        $namaLokasi  = time().'_lokasi.'.$imageLokasi->extension();
        $namaWaktu   = time().'_waktu.'.$imageWaktu->extension();

        $imageProduct->move(public_path('img'), $namaProduct);
        $imageLokasi->move(public_path('img'), $namaLokasi);
        $imageWaktu->move(public_path('img'), $namaWaktu);


        // =======================
        // GABUNGKAN MATERI
        // =======================
        $materi = [];

        for ($i = 1; $i <= 6; $i++) {
            $judul = $request->input("judul_materi{$i}");
            $isi   = $request->input("poin_materi{$i}");

            if ($judul && is_array($isi)) {
                $materi[] = [
                    'judul' => $judul,
                    'isi'   => array_values(array_filter($isi))
                ];
            }
        }

        if (count($materi) === 0) {
            return back()->withErrors(['materi' => 'Materi wajib diisi']);
        }

        // =======================
        // INSERT KE DATABASE
        // =======================
        Ws::create([
            'product_name' => $request->product_name,
            'subheadline_description' => $request->subheadline_description,
            'image_product' => $namaProduct,

            'judul_poin' => $request->judul_poin,
            'subheadline_poin' => $request->subheadline_poin,
            'poin' => array_values(array_filter($request->poin)),

            'judul_poin2' => $request->judul_poin2,
            'subheadline_poin2' => $request->subheadline_poin2,
            'poin_2' => array_values(array_filter($request->poin_2)),

            'image_lokasi' => $namaLokasi,
            'nama_lokasi' => $request->nama_lokasi,

            'image_waktu' => $namaWaktu,
            'tanggal_waktu' => $request->tanggal_waktu,

            'materi' => $materi,

            'total_benefit' => $request->total_benefit,
            'harga_normal' => $request->harga_normal,
            'harga_spesial' => $request->harga_spesial,
        ]);

        return redirect()->back()->with('success', 'Data WS berhasil disimpan');
    }
}
