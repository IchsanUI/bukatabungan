<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class DataKreditController extends Controller
{
    public function saveData(Request $request)
    { // Mengambil data yang dikirimkan melalui permintaan POST
        $encryptedData = $request->input('Data');
        // Kunci enkripsi yang sama yang digunakan di sisi klien
        $encryptionKey = "sdada";
        try {

            $decryptedData = Crypt::decryptString($encryptedData, $encryptionKey);

            return response()->json(['status' => 'success', 'message' => 'Data berhasil disimpan', 'decryptedData' => $decryptedData]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }
    public function successSend()
    {
        return view('successKredit');
    }
}
