<?php

namespace App\Http\Controllers\Web\Pages;

use App\Http\Controllers\Controller;
use App\Models\Admin\Gallery\ActionTakReport;
use App\Models\Admin\Gallery\ActionTknByDept;
use App\Models\Admin\Gallery\ElectronicMedia;
use App\Models\Admin\Gallery\GovtLetter;
use App\Models\Admin\Gallery\OfficerInteraction;
use App\Models\Admin\Gallery\Photo;
use App\Models\Admin\Gallery\PoliceLetter;
use App\Models\Admin\Gallery\PrintMedia;
use App\Models\Admin\Gallery\VideoGallery;
use App\Models\Admin\Gallery\WebMedia;
use App\Models\Admin\Gallery\Acknowledgement;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function GovtLetter(){
        $govtletters = GovtLetter::OrderBy('date', 'desc')->get();
        $acntknbydpts = ActionTknByDept::OrderBy('date', 'desc')->get();
        $data = [
            'govtletters' => $govtletters,
            'acntknbydpts' => $acntknbydpts,
            'no' => '1'
        ];
        return view('web.pages.gallery.govtLetters')->with($data)->with('no', '1');
    }
    // public function GovtLetter(){
    //     $govtletters = GovtLetter::OrderBy('date', 'desc')->get();
    //     $data = compact('govtletters');
    //     return view('web.pages.gallery.govtLetters')->with($data)->with('no', '1');
    // }

    // public function viewActnTknByDepts(){
    //     $acntknbydpts = ActionTknByDept::OrderBy('date', 'desc')->get();
    //     $data = compact('acntknbydpts');
    //     return view('web.pages.gallery.acntknbydpts')->with($data)->with('no', '1');
    // }

    public function PrintMedia(){
        $printmedia = PrintMedia::OrderBy('date', 'desc')->get();
        $data = compact('printmedia');
        return view('web.pages.gallery.printMedia')->with($data)->with('no', '1');
    }

    public function Photos(){
        $viewPhoto = Photo::Orderby('created_at', 'desc')->get();
        $data = compact('viewPhoto');
        return view('web.pages.gallery.photos')->with($data)->with('no','1');
    }

    public function OfficerInteraction(){
        $officerinteraction = OfficerInteraction::orderBy('created_at','desc')->get();
        $data = compact('officerinteraction');
        return view('web.pages.gallery.officerInteraction')->with($data)->with('no','1');
    }

    public function ActionTakRepo(){
        $actntknrprt = ActionTakReport::OrderBy('created_at', 'desc')->get();
        $data = compact('actntknrprt');
        return view('web.pages.gallery.actionTakenRepo')->with($data)->with('no', '1');
    }

    public function ElecMedia(){
        $elecmedia = ElectronicMedia::OrderBy('created_at', 'desc')->get();
        $data = compact('elecmedia');
        return view('web.pages.gallery.ElecMedia')->with($data)->with('no', '1');
    }

    public function WebMedia(){
        $webmedia = WebMedia::OrderBy('created_at', 'desc')->get();
            $data = compact('webmedia');
        return view('web.pages.gallery.WebMedia')->with($data)->with('no', '1');
    }
    public function PressRelease(){  
        return view('web.pages.gallery.pressrelease');
    }
    public function acknowledgement(){  
        $Acknowledgement = Acknowledgement::paginate(10);
        return view('web.pages.gallery.acknowledgement', compact('Acknowledgement'));
    }
    public function interview(){  
        return view('web.pages.gallery.interview');
    }

    public function PoliceLetter(){
        $policeletter = PoliceLetter::OrderBy('created_at', 'desc')->get();
        $data = compact('policeletter');
        return view('web.pages.gallery.PoliceLetter')->with($data)->with('no', '1');
    }
    public function VideoGallery(){
        $videogallery = VideoGallery::OrderBy('created_at', 'desc')->get();
        $data = compact('videogallery');
        return view('web.pages.gallery.videoGallery')->with($data)->with('no', '1');
    }

}
