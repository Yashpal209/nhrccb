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
}
