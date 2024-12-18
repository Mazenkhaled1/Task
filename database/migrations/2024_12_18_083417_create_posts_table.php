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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('category'); // الكاتيجوري
            $table->string('title'); // العنوان
            $table->text('description'); // الوصف
            $table->string('author_name'); // اسم المؤلف
            $table->string('author_image'); // صورة المؤلف
            $table->string('image'); // رابط الصورة
            $table->timestamps(); // سيتم إنشاء created_at و updated_at بشكل تلقائي
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
