<?php

namespace App\Http\Controllers\Web\Pages;

use App\Http\Controllers\Controller;
use App\Models\Admin\CellUnit\AntHumanTrf;
use App\Models\Admin\CellUnit\AntiCorruption;
use App\Models\Admin\CellUnit\ChildRightCell;
use App\Models\Admin\CellUnit\CrimeControl;
use App\Models\Admin\CellUnit\DoctorCell;
use App\Models\Admin\CellUnit\EducationalCell;
use App\Models\Admin\CellUnit\LegalCell;
use App\Models\Admin\CellUnit\MediaCell;
use App\Models\Admin\CellUnit\RtiCell;
use App\Models\Admin\CellUnit\TribalRight;
use Illuminate\Http\Request;

class CellUnitController extends Controller
{
    public function LegalCell(){
        $legalcell = LegalCell::orderby('created_at','desc')->get();
        $data = compact('legalcell');
        return view('web.pages.cellunit.LegalCell')->with($data)->with('no', '1');
    }
    public function EducationalCell(){
        $educationalcell = EducationalCell::orderby('created_at','desc')->get();
        $data = compact('educationalcell');
        return view('web.pages.cellunit.EducationalCell')->with($data)->with('no', '1');
    }
    public function DoctorCell(){
        $doctorcell =  DoctorCell::orderby('created_at','desc')->get();
       $data = compact('doctorcell');
        return view('web.pages.cellunit.DoctorCell')->with($data)->with('no', '1');
    }
    public function ChildRightsProCell(){
        $childrightcell =  ChildRightCell::orderby('created_at','desc')->get();
       $data = compact('childrightcell');
        return view('web.pages.cellunit.ChildRightsProCell')->with($data)->with('no', '1');
    }
    public function RtiCell(){
        $rticell =  RtiCell::orderby('created_at','desc')->get();
       $data = compact('rticell');
        return view('web.pages.cellunit.RtiCell')->with($data)->with('no', '1');
    }
    public function MediaCell(){
        $mediacell =  MediaCell::orderby('created_at','desc')->get();
        $data = compact('mediacell');
        return view('web.pages.cellunit.MediaCell')->with($data)->with('no', '1');
    }
    public function TRProCell(){
        $tribalcell =  TribalRight::orderby('created_at','desc')->get();
        $data = compact('tribalcell');
        return view('web.pages.cellunit.TribalPro')->with($data)->with('no', '1');
    }
    public function CrimeControlUnit(){
        $crimecontrol =  CrimeControl::orderby('created_at','desc')->get();
        $data = compact('crimecontrol');
        return view('web.pages.cellunit.CrimeControlUnit')->with($data)->with('no', '1');
    }
    public function AntiCorruptionCell(){
        $anticorruption =  AntiCorruption::orderby('created_at','desc')->get();
        $data = compact('anticorruption');
        return view('web.pages.cellunit.AntiCorruptionUnit')->with($data)->with('no', '1');
    }
    public function AntiHumanTrfCell(){
        $antihuman =  AntHumanTrf::orderby('created_at','desc')->get();
       $data = compact('antihuman');
        return view('web.pages.cellunit.AntiHumanTrfCell')->with($data)->with('no', '1');
    }
}
