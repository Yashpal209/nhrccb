<?php

namespace App\Models\Admin\WebManage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class president extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'text',
    ];
}
