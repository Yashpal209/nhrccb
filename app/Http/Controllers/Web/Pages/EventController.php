<?php

namespace App\Http\Controllers\Web\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{

 public function international_event(){
    return view('web.pages.event.international_event');
 }

 public function national_event(){
    return view('web.pages.event.national_event');
 }

 public function state_event(){
    return view('web.pages.event.state_event');
 }

 public function award_ceremony(){
    return view('web.pages.event.award_ceremony');
 }
 public function special_event(){
    return view('web.pages.event.special_event');
 }
 public function awareness_programme(){
    return view('web.pages.event.awareness_programme');
 }

}
