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
        Schema::create('speakers', function (Blueprint $table) {
            $table->integer('id_speakers', 15);
            $table->string('name', 50);
            $table->string('position', 50);
            $table->string('biography');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('speakers');
    }
};
