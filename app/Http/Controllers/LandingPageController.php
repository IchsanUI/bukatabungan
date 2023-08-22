<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('digital-saving');
    }
    public function info()
    {
        return view('info');
    }
}
