<?php

namespace App\Http\Controllers\Web\Pages;

use App\Http\Controllers\Controller;
use App\Models\Admin\OurAwardee;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    public function national_level(){
        $awards = OurAwardee::where('award_sub_category', 'National')->orderBy('created_at', 'desc')->paginate(10);
        return view('web.pages.awards.nationalAwards', compact('awards'));
    }

    public function state_level(){
        $awards = OurAwardee::where('award_sub_category', 'State')->orderBy('created_at', 'desc')->paginate(10);
        return view('web.pages.awards.stateAwards', compact('awards'));
    }

    public function district_level(){
        $awards = OurAwardee::where('award_sub_category', 'District')->orderBy('created_at', 'desc')->paginate(10);
        return view('web.pages.awards.districtAwards', compact('awards'));
    }
    public function community_level(){
        $awards = OurAwardee::where('award_sub_category', 'Community')->orderBy('created_at', 'desc')->paginate(10);
        return view('web.pages.awards.communityAwards', compact('awards'));
    }
    public function international_level(){
        $awards = OurAwardee::where('award_sub_category', 'International')->orderBy('created_at', 'desc')->paginate(10);
        return view('web.pages.awards.internationalAwards', compact('awards'));
    }
}
