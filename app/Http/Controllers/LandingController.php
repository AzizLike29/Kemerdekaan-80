<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $title = "17 Agustusan";
        return view('landing', compact('title'));
    }
}
