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
        Schema::create('dura_projects', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // العنوان
            $table->text('description'); // النصوص
            $table->string('main_image'); // الصورة الرئيسية
            $table->string('secondary_image'); // الصورة الثانوية
            $table->timestamps(); // تاريخ الإنشاء والتعديل
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dura_projects');
    }
};
