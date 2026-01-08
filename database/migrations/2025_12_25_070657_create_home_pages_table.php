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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();

            // Hero Section
            $table->string('hero_title');
            $table->text('hero_subtitle');
            $table->string('hero_image');

            // Testimoni
            $table->string('testimonial_name_1');
            $table->text('testimonial_description_1');

            $table->string('testimonial_name_2');
            $table->text('testimonial_description_2');

            $table->string('testimonial_name_3');
            $table->text('testimonial_description_3');

            $table->string('testimonial_name_4');
            $table->text('testimonial_description_4');

            // Youtube
            $table->string('youtube_title_1');
            $table->string('youtube_link_1');

            $table->string('youtube_title_2');
            $table->string('youtube_link_2');

            // Image Peserta
            $table->string('participant_image_1')->nullable();
            $table->string('participant_image_2')->nullable();
            $table->string('participant_image_3')->nullable();
            $table->string('participant_image_4')->nullable();
            $table->string('participant_image_5')->nullable();
            $table->string('participant_image_6')->nullable();
            $table->string('participant_image_7')->nullable();

            // Logo
            $table->string('logo_image')->nullable();
            $table->string('nama_logo')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};
