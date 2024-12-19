<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_service extends Model
{
    use HasFactory;

    protected $fillable  = ['name' , 'description' , 'image'] ;
}
