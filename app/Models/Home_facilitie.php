<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_facilitie extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'icon'];

}
