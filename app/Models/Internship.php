<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    protected $table = 'internships'; 

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'education',
        'type',
        'university',
        'reason',
        'resume', 
    ];
}