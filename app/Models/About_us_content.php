<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About_us_content extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'image'];
}
