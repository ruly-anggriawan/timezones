<?php

namespace Rulyanggriawan\Timezones;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezonesController extends Controller{
    public function index($timezone = NULL){
        
        $current_time = ($timezone)? Carbon::now(str_replace('-','/',$timezone)): Carbon::now();
        
        return view('rulyanggriawan.timezones.time')->with('current_time', $current_time);
    }
}


