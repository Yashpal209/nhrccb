<?php

namespace App\Models\Admin\Notification;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatestUpdate extends Model
{
    use HasFactory;
    protected $table = 'latestupdate';
}
