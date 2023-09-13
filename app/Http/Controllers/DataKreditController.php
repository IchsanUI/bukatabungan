<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Crypt;

class DataKreditController extends Controller
{
    public function saveData(Request $request)
    {
        // Mengambil data dari permintaan Ajax
        $dataToEncrypt = $request->all();

        // Melakukan enkripsi data
        // $encryptedData = Crypt::encryptString(json_encode($dataToEncrypt));

        // // Tampilkan hasil enkripsi untuk pemeriksaan (gunakan dd() hanya untuk debugging)
        dd($dataToEncrypt);

        return response()->json(['encryptedData' => $dataToEncrypt]);
    }
}
