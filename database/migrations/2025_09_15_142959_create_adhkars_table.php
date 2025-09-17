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
        Schema::create('adhkars', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('arabic_text');
            $table->text('translation')->nullable();
            $table->text('transliteration')->nullable();
            $table->string('category')->default('daily'); // daily, morning, evening, etc.
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adhkars');
    }
};
