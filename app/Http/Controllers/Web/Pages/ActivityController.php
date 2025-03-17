<?php

namespace App\Http\Controllers\Web\Pages;

use App\Http\Controllers\Controller;
use App\Models\Admin\Activities\Covid19;
use App\Models\Admin\Activities\EducationalAwareness;
use App\Models\Admin\Activities\RuralAwareness;
use App\Models\Admin\Activities\Seminar;
use App\Models\Admin\Activities\SocialWork;
use App\Models\Admin\Activities\StandwithNation;
use App\Models\Admin\Activities\Workshop;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function Awards(){
        return view('web.pages.activities.awards');
    }

    public function Seminar(){
        $seminar = Seminar::orderBy('created_at', 'desc')->get();
        $data = compact('seminar');
        return view('web.pages.activities.seminar')->with($data);
    }

    public function workshop(){
        $workshop = Workshop::OrderBy('created_at', 'desc')->get();
        $data = compact('workshop');
        return view('web.pages.activities.workshop')->with($data);
    }

    public function standWithNation(){
        $standwithnation = StandwithNation::OrderBy('created_at', 'desc')->get();
        $data = compact('standwithnation');
        return view('web.pages.activities.standWithNation')->with($data);
    }

    public function RuralAwareness(){
        $ruralawareness = RuralAwareness::OrderBy('created_at', 'desc')->get();
        $data = compact('ruralawareness');
        return view('web.pages.activities.ruralAwareness')->with($data);
    }

    public function EducationalAwareness(){
        $eduawareness = EducationalAwareness::OrderBy('created_at', 'desc')->get();
        $data = compact('eduawareness');
        return view('web.pages.activities.educationalAwareness')->with($data);
    }

    public function Covid19(){
        $covid19 = Covid19::OrderBy('created_at', 'desc')->get();
        $data = compact('covid19');
        return view('web.pages.activities.covid19')->with($data);
    }

    public function SocialWork(){
        $socialwork = SocialWork::OrderBy('created_at', 'desc')->get();
        $data = compact('socialwork');
        return view('web.pages.activities.socialwork')->with($data);
    }
}
