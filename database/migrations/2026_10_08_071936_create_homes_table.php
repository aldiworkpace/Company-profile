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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->text('deskripsi_1');
            $table->text('deskripsi_2');
            $table->text('deskripsi_3');
            $table->string('cta_judul_1');
            $table->string('cta_judul_2');
            $table->string('cta_judul_3');
            $table->text('cta_desc1');
            $table->text('cta_desc2');
            $table->text('cta_desc3');
            $table->string('hero_image');
            $table->string('image_1');
            $table->string('image_2');
            $table->string('image_3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
