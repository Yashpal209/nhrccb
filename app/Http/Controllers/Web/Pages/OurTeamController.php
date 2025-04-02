<?php

namespace App\Http\Controllers\Web\Pages;

use App\Http\Controllers\Controller;
use App\Models\Admin\OurTeam\BlockTeam;
use App\Models\Admin\OurTeam\DistrictTeam;
use App\Models\Admin\OurTeam\DivisionTeam;
use App\Models\Admin\OurTeam\NationalTeam;
use App\Models\Admin\OurTeam\StateTeam;
use App\Models\Admin\OurTeam\ZoneTeam;
use App\Models\Admin\OurTeam\Intern;
use App\Models\Admin\OurTeam\Volunteer;
use App\Models\Web\Pages\JoinUs;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    public function ZoneTeam()
    {
        $zoneteam = ZoneTeam::orderby('created_at', 'desc')->paginate(10);
        return view('web.pages.ourteam.ZoneTeam', compact('zoneteam'))->with('no', 1);
    }

    public function StateTeam()
    {
        $stateteam = StateTeam::orderby('created_at', 'desc')->paginate(10); // Added pagination
        return view('web.pages.ourteam.StateTeam', compact('stateteam'))->with('no', 1);
    }
    public function NationalTeam()
    {
        $nationalteam = NationalTeam::orderby('created_at', 'desc')->paginate(10); // Added pagination
        return view('web.pages.ourteam.NationalTeam', compact('nationalteam'))->with('no', 1);
    }

    // public function DivisionTeam()
    // {
    //     $divisionteam = DivisionTeam::orderby('created_at', 'desc')->paginate(10); // Added pagination
    //     return view('web.pages.ourteam.DivisionTeam', compact('divisionteam'))->with('no', 1);
    // }
    public function DivisionTeam()
    {
        $divisionteam = DivisionTeam::orderBy('created_at', 'desc')->paginate(10);
        $joinUs = JoinUs::where('level', 'DIVISION TEAM')->get();

        return view('web.pages.ourteam.DivisionTeam', compact('divisionteam', 'joinUs'))->with('no', 1);
    }


    public function DistrictTeam()
    {
        $districtteam = DistrictTeam::orderby('created_at', 'desc')->paginate(10); // Added pagination
        return view('web.pages.ourteam.DistrictTeam', compact('districtteam'))->with('no', 1);
    }

    public function interns()
    {
        $interns = Intern::orderby('created_at', 'desc')->paginate(10);
        return view('web.pages.ourteam.interns', compact('interns'))->with('no', 1);
    }

    public function volunteer()
    {
        $volunteers = Volunteer::orderby('created_at', 'desc')->paginate(10);
        return view('web.pages.ourteam.Volunteer', compact('volunteers'))->with('no', 1);
    }

    public function BlockTeam()
    {
        $blockteam = BlockTeam::orderby('created_at', 'desc')->paginate(10);
        return view('web.pages.ourteam.BlockTeam', compact('blockteam'))->with('no', 1);
    }
    public function activemember()
    {
        $team = Joinus::where('level', 'DIVISION TEAM')->orderby('created_at', 'desc')->paginate(10);
        // dd($team);
        return view('web.pages.ourteam.activemember', compact('team'))->with('no', 1);
    }
}
