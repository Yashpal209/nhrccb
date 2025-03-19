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
    public function RtiCell()
    {
        $rticell = RtiCell::orderby('created_at', 'desc')->paginate(10);
        return view('web.pages.cellunit.RtiCell', compact('rticell'))->with('no', 1);
    }
    public function LegalCell()
    {
        $legalcell = LegalCell::orderby('created_at', 'desc')->paginate(10);
        return view('web.pages.cellunit.LegalCell', compact('legalcell'))->with('no', 1);
    }
    public function DoctorCell()
    {
        $doctorcell = DoctorCell::orderby('created_at', 'desc')->paginate(10);
        return view('web.pages.cellunit.DoctorCell', compact('doctorcell'))->with('no', 1);
    }
    public function MediaCell()
    {
        $mediacell = MediaCell::orderby('created_at', 'desc')->paginate(10);
        return view('web.pages.cellunit.MediaCell', compact('mediacell'))->with('no', 1);
    }

    public function EducationalCell()
    {
        $educationalcell = EducationalCell::orderby('created_at', 'desc')->paginate(10);
        return view('web.pages.cellunit.EducationalCell', compact('educationalcell'))->with('no', 1);
    }

    public function CrimeControlUnit()
    {
        $crimecontrol = CrimeControl::orderby('created_at', 'desc')->paginate(10);
        return view('web.pages.cellunit.CrimeControlUnit', compact('crimecontrol'))->with('no', 1);
    }

    public function AntiCorruptionCell()
    {
        $anticorruption = AntiCorruption::orderby('created_at', 'desc')->paginate(10);
        return view('web.pages.cellunit.AntiCorruptionUnit', compact('anticorruption'))->with('no', 1);
    }

    public function ChildRightsProCell()
    {
        $childrightcell = ChildRightCell::orderby('created_at', 'desc')->paginate(10); // Pagination added
        return view('web.pages.cellunit.ChildRightsProCell', compact('childrightcell'))->with('no', 1);
    }

    public function TRProCell()
    {
        $tribalcell = TribalRight::orderby('created_at', 'desc')->paginate(10); // Pagination added
        return view('web.pages.cellunit.TribalPro', compact('tribalcell'))->with('no', 1);
    }

    public function AntiHumanTrfCell()
    {
        $antihuman = AntHumanTrf::orderby('created_at', 'desc')->paginate(10); // Pagination added
        return view('web.pages.cellunit.AntiHumanTrfCell', compact('antihuman'))->with('no', 1);
    }
}
