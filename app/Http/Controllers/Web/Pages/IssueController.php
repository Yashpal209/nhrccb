<?php

namespace App\Http\Controllers\Web\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    public function HumanRights(){
        return view('web.pages.issue.humanrights');
    }

    public function WomenRights(){
        return view('web.pages.issue.womenrights');
    }
    public function ChildRights(){
        return view('web.pages.issue.childrights');
    }
    public function ConsumerRights(){
        return view('web.pages.issue.consumerrights');
    }
    public function RTI(){
        return view('web.pages.issue.righttoinformation');
    }
    public function DisabilityRights() {
        return view('web.pages.issue.disabilityrights');
    }

    public function RightToEducation() {
        return view('web.pages.issue.righttoeducation');
    }

    public function AdvocateRights() {
        return view('web.pages.issue.advocaterights');
    }

    public function LGBTRights() {
        return view('web.pages.issue.lgbtrights');
    }

    public function DoctorRights() {
        return view('web.pages.issue.doctorrights');
    }

    public function TribalRights() {
        return view('web.pages.issue.tribalrights');
    }

    public function PressRights() {
        return view('web.pages.issue.pressrights');
    }

    public function CrimeControlAct() {
        return view('web.pages.issue.crimecontrolact');
    }
}
