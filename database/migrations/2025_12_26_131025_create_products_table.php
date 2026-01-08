<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ws', function (Blueprint $table) {
            $table->increments('id_ws');

            // =======================
            // PRODUCT
            // =======================
            $table->string('product_name');
            $table->string('subheadline_description');
            $table->string('image_product');

            // =======================
            // POIN SECTION 1
            // =======================
            $table->string('judul_poin');
            $table->string('subheadline_poin');
            $table->json('poin');

            // =======================
            // POIN SECTION 2
            // =======================
            $table->string('judul_poin2');
            $table->string('subheadline_poin2');
            $table->json('poin_2');

            // =======================
            // LOKASI & WAKTU
            // =======================
            $table->string('image_lokasi');
            $table->string('nama_lokasi');
            $table->string('image_waktu');
            $table->string('tanggal_waktu');

            // =======================
            // MATERI (SEMUA DISATUKAN)
            // =======================
            $table->json('materi');

            // =======================
            // HARGA
            // =======================
            $table->integer('total_benefit');
            $table->integer('harga_normal');
            $table->integer('harga_spesial');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ws');
    }
};
