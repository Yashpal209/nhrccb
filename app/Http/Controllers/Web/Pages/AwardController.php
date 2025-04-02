<?php

namespace App\Http\Controllers\Web\Pages;

use App\Http\Controllers\Controller;
use App\Models\Admin\OurAwardee;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    public function nelsonmandelahumanrights(){
        $awards = OurAwardee::where('award_sub_category', 'NELSON MANDELA HUMAN RIGHTS AWARD')->orderBy('created_at', 'desc')->paginate(10);
        return view('web.pages.awards.nelson', compact('awards'));
    }

    public function nhra(){
        $awards = OurAwardee::where('award_sub_category', 'NHRCCB HUMAN RIGHTS AWARD')->orderBy('created_at', 'desc')->paginate(10);
        return view('web.pages.awards.nhra', compact('awards'));
    }

    public function district_level(){
        $awards = OurAwardee::where('award_sub_category', 'District')->orderBy('created_at', 'desc')->paginate(10);
        return view('web.pages.awards.districtAwards', compact('awards'));
    }
    public function community_level(){
        $awards = OurAwardee::where('award_sub_category', 'COMMUNITY AWARD')->orderBy('created_at', 'desc')->paginate(10);
        return view('web.pages.awards.communityAwards', compact('awards'));
    }
    public function international_level(){
        $awards = OurAwardee::where('award_sub_category', 'International')->orderBy('created_at', 'desc')->paginate(10);
        return view('web.pages.awards.internationalAwards', compact('awards'));
    }
}
