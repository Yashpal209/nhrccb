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

    public function acknowledgement()
    {
        $Acknowledgement = Acknowledgement::paginate(13);
        return view('web.pages.gallery.acknowledgement', compact('Acknowledgement'));
    }
    public function GovtLetter()
    {
        $govtletters = GovtLetter::OrderBy('created_at', 'desc')->get();
        $acntknbydpts = ActionTknByDept::OrderBy('created_at', 'desc')->get();
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



    public function Photos()
    {
        $viewPhoto = Photo::orderBy('created_at', 'desc')->paginate(12);
        return view('web.pages.gallery.photos', compact('viewPhoto'));
    }
    public function PrintMedia()
    {
        $printmedia = PrintMedia::orderBy('date', 'desc')->paginate(12);
        return view('web.pages.gallery.printMedia', compact('printmedia'));
    }
    public function OfficerInteraction()
    {
        $officerinteraction = OfficerInteraction::orderBy('created_at', 'desc')->paginate(10);
        return view('web.pages.gallery.officerInteraction', compact('officerinteraction'));
    }

    public function ActionTakRepo()
    {
        $actntknrprt = ActionTakReport::orderBy('created_at', 'desc')->paginate(12); // 12 items per page
        return view('web.pages.gallery.actionTakenRepo', compact('actntknrprt'));
    }


    public function ElecMedia()
    {
        $elecmedia = ElectronicMedia::orderBy('created_at', 'desc')->paginate(10);
        return view('web.pages.gallery.ElecMedia', compact('elecmedia'))->with('no', 1);
    }

    public function WebMedia()
    {
        $webmedia = WebMedia::orderBy('created_at', 'desc')->paginate(10);
        return view('web.pages.gallery.WebMedia', compact('webmedia'))->with('no', 1);
    }

    public function PressRelease()
    {
        return view('web.pages.gallery.pressrelease');
    }
    
    public function interview()
    {
        return view('web.pages.gallery.interview');
    }

    public function PoliceLetter()
    {
        $policeletter = PoliceLetter::OrderBy('created_at', 'desc')->get();
        $data = compact('policeletter');
        return view('web.pages.gallery.PoliceLetter')->with($data)->with('no', '1');
    }
    public function VideoGallery()
    {
        $videogallery = VideoGallery::orderBy('created_at', 'desc')->paginate(9); // Show 9 videos per page
        return view('web.pages.gallery.videoGallery', compact('videogallery'));
    }
    }
