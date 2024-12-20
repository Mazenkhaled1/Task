<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_Us extends Model
{
    use HasFactory;
    protected $table = 'Contact_Us';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'unit_type',
        'message'
    ];
}
