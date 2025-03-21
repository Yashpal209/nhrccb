<?php

namespace App\Http\Controllers\Web\Home;

use App\Http\Controllers\Controller;
use App\Models\Admin\Gallery\Photo;
use App\Models\Admin\Notification;
use App\Models\Admin\Notification\LatestUpdate;
use App\Models\Admin\Webmanage\Banner;
use Illuminate\Http\Request;


use function Laravel\Prompts\alert;

class HomeController extends Controller
{

    public function index()
    {
        $notifications = Notification::orderBy('date', 'desc')->get();
        $latestUpdate = LatestUpdate::orderBy('date', 'desc')->get();
        $Banner = Banner::orderBy('created_at', 'desc')->get();
        // return $Banner;
        $viewPhotos = Photo::orderBy('created_at', 'desc')->limit(6)->get();
        $data = compact('notifications', 'viewPhotos', 'latestUpdate','Banner');
        return view('web.index')->with($data);
      
    }
    // public function ind()
    // {
    //     $notifications = Notification::orderBy('date', 'desc')->get();
    //     $viewPhotos = Photo::orderBy('created_at', 'desc')->limit(6)->get();
    //     $data = compact('notifications', 'viewPhotos');
    //     return view('web.index3')->with($data);
    // }
    // public function notification(){
    //     $notifications = Notification::orderBy('date', 'desc')->get();
    //     $data = compact('notifications');
    //     return view('web.index')->with($data);
    // }
    // public function photoGall(){
    //     $viewPhoto = Photo::Orderby('created_at', 'desc')->get();
    //     $data = compact('viewPhoto');
    //     return view('web.index')->with($data);
    // }
}
