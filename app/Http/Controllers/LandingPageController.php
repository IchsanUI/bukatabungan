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
        return view('info-saving');
    }
    public function detail_1()
    {
        return view('details-saving.detail-saving-1');
    }
}
