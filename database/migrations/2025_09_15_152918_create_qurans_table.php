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
        Schema::create('qurans', function (Blueprint $table) {
            $table->id();
            $table->integer('surah_number');
            $table->integer('ayah_number');
            $table->text('arabic_text');
            $table->text('translation');
            $table->text('transliteration');
            $table->timestamps();
            
            $table->index(['surah_number', 'ayah_number']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qurans');
    }
};
