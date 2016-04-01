<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LandingPageControlller extends Controller
{
    public function home(){
        return view('LandingPage.home1');
    }
}
