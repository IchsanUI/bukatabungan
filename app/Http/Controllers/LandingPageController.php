<?php

namespace App\Http\Controllers;
use App\Models\Kantor;
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
    public function detail_2()
    {
        return view('details-saving.detail-saving-2');
    }
    public function detail_3()
    {
        return view('details-saving.detail-saving-3');
    }
    public function uker_choose()
    {
        return view('uker-choose');
    }
    public function info_ktp()
    {
        return view('info-ktp');
    }
    public function getKantorOptions()
    {
    $kantors = Kantor::all();
    return response()->json($kantors);
    }
    public function getUkerData($id)
    {
    $ukerData = Kantor::find($id); // Ganti 'Kantor' dengan model yang sesuai
    return response()->json($ukerData);
    }

}
