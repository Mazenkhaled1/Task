<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_state extends Model
{
    use HasFactory;
    protected $fillable = [
        'label',        // اسم التصنيف
        'count_value',  // القيمة الخاصة بالتصنيف
        'image_url',    // مسار الصورة
    ];
}
