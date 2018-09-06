<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemporalPageController extends Controller
{
    public function index(){

        return view('temporalpage');
    }
}
