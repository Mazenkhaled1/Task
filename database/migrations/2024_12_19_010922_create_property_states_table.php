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
        Schema::create('property_states', function (Blueprint $table) {
            $table->id(); // حقل id فريد لكل سجل
            $table->string('image_path_1'); // حقل للصورة الأولى
            $table->integer('apartments_count'); // عدد الشقق
            $table->string('image_path_2'); // حقل للصورة الثانية
            $table->integer('floors_count'); // عدد الطوابق
            $table->timestamps(); // حقلين للتاريخ: created_at و updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_states');
    }
};
