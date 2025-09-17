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
        Schema::create('sermons', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('speaker');
            $table->text('summary')->nullable();
            $table->json('tags')->nullable(); // Array of tags
            $table->string('media_url')->nullable(); // S3 URL for audio/video
            $table->string('media_type')->default('audio'); // audio, video
            $table->integer('duration')->nullable(); // Duration in seconds
            $table->string('thumbnail_url')->nullable();
            $table->boolean('is_published')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sermons');
    }
};
