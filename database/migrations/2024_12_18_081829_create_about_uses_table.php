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
        Schema::create('about_uses', function (Blueprint $table) {
            $table->id();
            $table->string('main_title'); // العنوان الرئيسي (عن الدرة)
            $table->string('breadcrumb_home'); // رابط الصفحة الرئيسية
            $table->string('breadcrumb_active'); // اسم الصفحة الحالي (عن الدرة)
            $table->text('who_we_are_title'); // عنوان "من نحن"
            $table->text('who_we_are_description'); // وصف "من نحن"
            $table->string('background_image'); // صورة الخلفية الرئيسية
            $table->json('secondary_images')->nullable(); // الصور الثانوية
            $table->json('statistics')->nullable(); // الإحصائيات (شقة، طابق)
            $table->text('vision_title'); // عنوان الرؤية
            $table->text('vision_description'); // وصف الرؤية
            $table->text('mission_title'); // عنوان المهمة
            $table->text('mission_description'); // وصف المهمة
            $table->text('goals_title'); // عنوان الأهداف
            $table->json('goals_description')->nullable(); // قائمة الأهداف
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_uses');
    }
};
