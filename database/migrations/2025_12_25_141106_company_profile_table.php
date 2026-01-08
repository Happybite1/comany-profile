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
        Schema::create('company_profile', function (Blueprint $table) {
            $table->increments('id_company',);
            $table->string('company_name',);
            $table->text('company_description');
            $table->string('image_company');
            $table->string('image_peserta1');
            $table->string('image_peserta2');
            $table->string('image_peserta3');
            $table->string('image_peserta4');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('company_profile');
    }
};
