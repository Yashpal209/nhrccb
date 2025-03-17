<?php

namespace App\Http\Controllers\Web\Home;

use App\Http\Controllers\Controller;
use App\Models\Admin\Notification;
use App\Models\Admin\Notification\LatestUpdate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function notification(){
        $notifications = Notification::orderBy('date', 'desc')->get();
        $data = compact('notifications');
        return view('web.index')->with($data);
    }
    public function latestUpdate(){
        $latestUpdates = LatestUpdate::orderBy('date', 'desc')->get();
        $data = compact('latestUpdates');
        return view('web.index')->with($data);
    }

}
