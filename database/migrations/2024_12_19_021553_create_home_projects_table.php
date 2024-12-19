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
        Schema::create('home_projects', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // اسم المشروع
            $table->string('title'); // عنوان المشروع
            $table->text('description'); // وصف المشروع
            $table->string('image_1'); // صورة 1
            $table->string('image_2'); // صورة 2
            $table->timestamps();
   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_projects');
    }
};
