<?php

namespace App\Models\Admin\WebManage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'link',
        'image',
    ];
}
