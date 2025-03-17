<?php

namespace App\Http\Controllers\Web\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    public function national_level(){
        return view('web.pages.awards.nationalAwards');
    }

    public function state_level(){
        return view('web.pages.awards.stateAwards');
    }

    public function district_level(){
        return view('web.pages.awards.districtAwards');
    }
    public function community_level(){
        return view('web.pages.awards.communityAwards');
    }
    public function international_level(){
        return view('web.pages.awards.internationalAwards');
    }
}
