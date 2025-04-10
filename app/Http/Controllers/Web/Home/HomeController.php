<?php

namespace App\Http\Controllers\Web\Home;

use App\Http\Controllers\Controller;
use App\Models\Admin\Gallery\Photo;
use App\Models\Admin\Notification;
use App\Models\Admin\Notification\LatestUpdate;
use App\Models\Admin\Gallery\ElectronicMedia;
use App\Models\Admin\Webmanage\Banner;
use App\Models\Admin\Gallery\Acknowledgement;
use App\Models\Admin\Gallery\GovtLetter;
use App\Models\Admin\Publication\MonthlyReport;
use App\Models\Admin\Gallery\PrintMedia;
use App\Models\Admin\Gallery\VideoGallery;
use Illuminate\Http\Request;


use function Laravel\Prompts\alert;

class HomeController extends Controller
{

    public function index()
    {
        $title ='Home';
        $notifications = Notification::orderBy('date', 'desc')->get();
        // $latestUpdate = LatestUpdate::orderBy('date', 'desc')->get();
        $ElectronicMedia = ElectronicMedia::orderBy('created_at', 'desc')->get();
        $Banner = Banner::orderBy('created_at', 'desc')->get();
        $acknowledgement = Acknowledgement::orderBy('created_at', 'desc')->limit(6)->get();
        $govtLetter = GovtLetter::orderBy('created_at', 'desc')->limit(6)->get();
        $monthlyReport = MonthlyReport::orderBy('date', 'desc')->limit(3)->get();
        $PrintMedia = PrintMedia::orderBy('created_at', 'desc')->limit(6)->get();
        $VideoGallery = VideoGallery::orderBy('created_at', 'desc')->limit(1)->get();
        // return $GovtLetter;
        $viewPhotos = Photo::orderBy('created_at', 'desc')->limit(6)->get();
        $data = compact('notifications', 'viewPhotos','ElectronicMedia' ,'Banner','title','govtLetter','acknowledgement','monthlyReport','PrintMedia','VideoGallery');
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
