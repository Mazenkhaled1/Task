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
        Schema::create('about_us_mains', function (Blueprint $table) {
            $table->id();  // Primary key ID
            $table->string('image');  // Column to store the image URL or filename
            $table->string('title');  // Column to store the title
            $table->string('subtitle');  // Column to store the subtitle
            $table->timestamps();  // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us_mains');
    }
};
