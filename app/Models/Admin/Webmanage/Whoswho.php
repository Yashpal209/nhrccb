<?php

namespace App\Models\Admin\Webmanage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whoswho extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'name',
        'post',
        'position',
        'image',
    ];
}
