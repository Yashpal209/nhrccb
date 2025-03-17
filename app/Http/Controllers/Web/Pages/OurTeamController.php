<?php

namespace App\Http\Controllers\Web\Pages;

use App\Http\Controllers\Controller;
use App\Models\Admin\OurTeam\BlockTeam;
use App\Models\Admin\OurTeam\DistrictTeam;
use App\Models\Admin\OurTeam\DivisionTeam;
use App\Models\Admin\OurTeam\NationalTeam;
use App\Models\Admin\OurTeam\StateTeam;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    public function NationalTeam(){
        $nationalteam = NationalTeam::orderby('created_at','desc')->get();
        $data = compact('nationalteam');
        return view('web.pages.ourteam.NationalTeam')->with($data)->with('no', '1');
    }
    public function StateTeam(){
        $stateteam = StateTeam::orderby('created_at','desc')->get();
       $data = compact('stateteam');
        return view('web.pages.ourteam.StateTeam')->with($data)->with('no', '1');
    }
    public function DivisionTeam(){
        $divisionteam = DivisionTeam::orderby('created_at','desc')->get();
        $data = compact('divisionteam');
        return view('web.pages.ourteam.DivisionTeam')->with($data)->with('no', '1');
    }
    public function DistrictTeam(){
        $districtteam = DistrictTeam::orderby('created_at','desc')->get();
        $data = compact('districtteam');
        return view('web.pages.ourteam.DistrictTeam')->with($data)->with('no', '1');
    }
    public function BlockTeam(){
        $blockteam = BlockTeam::orderby('created_at','desc')->get();
        $data = compact('blockteam');
        return view('web.pages.ourteam.BlockTeam')->with($data)->with('no', '1');
    }
    public function ZoneTeam(){
        return view('web.pages.ourteam.ZoneTeam');
    }
    public function volunteer(){
        return view('web.pages.ourteam.Volunteer');
    }
    public function interns(){
        return view('web.pages.ourteam.interns');
    }
}
