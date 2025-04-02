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
    public function nla(){
        $awards = OurAwardee::where('award_sub_category', 'NHRCCB LEADERSHIP AWARD')->orderBy('created_at', 'desc')->paginate(10);
        return view('web.pages.awards.nla', compact('awards'));
    }
    public function nsa(){
        $awards = OurAwardee::where('award_sub_category', 'NHRCCB SPECIAL AWARD')->orderBy('created_at', 'desc')->paginate(10);
        return view('web.pages.awards.nsa', compact('awards'));
    }
    public function shra(){
        $awards = OurAwardee::where('award_sub_category', 'STATE HUMAN RIGHTS AWARD')->orderBy('created_at', 'desc')->paginate(10);
        $title = 'STATE HUMAN RIGHTS AWARD';
        return view('web.pages.awards.state', compact('awards','title'));
    }
    public function mghra(){
        $awards = OurAwardee::where('award_sub_category', 'MAHATAMA GANDHI HUMAN RIGHTS AWARD')->orderBy('created_at', 'desc')->paginate(10);
        $title = 'MAHATAMA GANDHI HUMAN RIGHTS AWARD';
        return view('web.pages.awards.national', compact('awards','title'));
    }
    public function braa(){
        $awards = OurAwardee::where('award_sub_category', 'BHIM RAO AMBEDKAR HUMAN RIGHTS AWARDS')->orderBy('created_at', 'desc')->paginate(10);
        $title = 'BHIM RAO AMBEDKAR HUMAN RIGHTS AWARDS';
        return view('web.pages.awards.national', compact('awards','title'));
    }
    public function nirpd(){
        $awards = OurAwardee::where('award_sub_category', 'NHRCCB INDIA PRIDE AWARD')->orderBy('created_at', 'desc')->paginate(10);
        $title = 'NHRCCB INDIA PRIDE AWARD';
        return view('web.pages.awards.national', compact('awards','title'));
    }
    public function sla(){
        $awards = OurAwardee::where('award_sub_category', 'STATE LEADERSHIP AWARD')->orderBy('created_at', 'desc')->paginate(10);
        $title = 'STATE LEADERSHIP AWARD';
        return view('web.pages.awards.state', compact('awards','title'));
    }
    public function ssa(){
        $awards = OurAwardee::where('award_sub_category', 'STATE SPECIAL AWARD')->orderBy('created_at', 'desc')->paginate(10);
        $title = 'STATE SPECIAL AWARD';
        return view('web.pages.awards.state', compact('awards','title'));
    }

    public function district_level(){
        $awards = OurAwardee::where('award_sub_category', 'DISTRICT AWARD')->orderBy('created_at', 'desc')->paginate(10);
        $title = 'DISTRICT AWARD';
        return view('web.pages.awards.districtAwards', compact('awards','title'));
    }
    public function community_level(){
        $awards = OurAwardee::where('award_sub_category', 'COMMUNITY AWARD')->orderBy('created_at', 'desc')->paginate(10);
        return view('web.pages.awards.communityAwards', compact('awards'));
    }
  
}
