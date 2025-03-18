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
use App\Models\Admin\Activities\Awards;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function Awards(){
        $awards = Awards::orderBy('created_at', 'desc')->paginate(10);
        return view('web.pages.activities.awards', compact('awards'));
    }

    public function Seminar(){
        $seminar = Seminar::orderBy('created_at', 'desc')->paginate(10);
        return view('web.pages.activities.seminar', compact('seminar'));
    }

    public function workshop(){
        $workshop = Workshop::orderBy('created_at', 'desc')->paginate(10);
        return view('web.pages.activities.workshop', compact('workshop'));
    }

    public function standWithNation(){
        $standwithnation = StandwithNation::orderBy('created_at', 'desc')->paginate(10);
        return view('web.pages.activities.standWithNation', compact('standwithnation'));
    }

    public function RuralAwareness(){
        $ruralawareness = RuralAwareness::orderBy('created_at', 'desc')->paginate(10);
        return view('web.pages.activities.ruralAwareness', compact('ruralawareness'));
    }

    public function EducationalAwareness(){
        $eduawareness = EducationalAwareness::orderBy('created_at', 'desc')->paginate(10);
        return view('web.pages.activities.educationalAwareness', compact('eduawareness'));
    }

    public function Covid19(){
        $covid19 = Covid19::orderBy('created_at', 'desc')->paginate(10);
        return view('web.pages.activities.covid19', compact('covid19'));
    }

    public function SocialWork(){
        $socialwork = SocialWork::orderBy('created_at', 'desc')->paginate(10);
        return view('web.pages.activities.socialwork', compact('socialwork'));
    }
}
