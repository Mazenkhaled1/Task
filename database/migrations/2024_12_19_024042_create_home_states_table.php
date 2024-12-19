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
        Schema::create('home_states', function (Blueprint $table) {
            $table->id();
            $table->string('image_url'); // لتمثيل الرابط الخاص بالصورة
            $table->integer('count_value'); // القيمة التي تظهر في العدادات
            $table->string('label'); // مثل "طابق"، "شقة"، إلخ
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_states');
    }
};
