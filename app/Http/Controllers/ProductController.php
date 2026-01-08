<?php

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        // validasi dasar
        $request->validate([
            'product_name' => 'required',
            'image_product' => 'image|mimes:jpg,png,jpeg',
            'harga_normal' => 'required|numeric',
            'harga_spesial' => 'required|numeric',
        ]);

        // upload image
        $imageProduct = null;
        if ($request->hasFile('image_product')) {
            $imageProduct = $request->file('image_product')->store('products', 'public');
        }

        Product::create([
            'product_name' => $request->product_name,
            'subheadline_description' => $request->subheadline_description,
            'image_product' => $imageProduct,

            'judul_poin' => $request->judul_poin,
            'subheadline_poin' => $request->subheadline_poin,

            // array → json
            'poin' => json_encode($request->poin),

            'total_benefit' => $request->total_benefit,
            'harga_normal' => $request->harga_normal,
            'harga_spesial' => $request->harga_spesial,
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }
}
