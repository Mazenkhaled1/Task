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
        Schema::create('about_us_headers', function (Blueprint $table) {
            $table->id();  // Primary key ID
            $table->string('name');  // Column to store the name
            $table->string('title');  // Column to store the title
            $table->text('description');  // Column to store the description (use text for longer content)
            $table->timestamps();  // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us_headers');
    }
};
