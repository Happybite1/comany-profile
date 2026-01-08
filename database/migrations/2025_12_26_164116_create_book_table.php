<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('book', function (Blueprint $table) {
            $table->increments('id_book');
            $table->string('product_name');
            $table->string('subheadline_description');
            $table->string('image_product');
            $table->string('link_youtube');
            $table->string('testimoni1');
            $table->string('testimoni2');
            $table->string('harga_coret1');
            $table->string('harga_coret2');
            $table->string('benefit_1');
            $table->string('benefit_2');
            $table->string('harga_utama1');
            $table->string('benefit_3');
            $table->string('benefit_4');
            $table->string('harga_utama2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book');
    }
};
