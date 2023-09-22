<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class DataQRISController extends Controller
{
    // public function saveData(Request $request)
    // {
    //     // Mengambil secret key dari variabel .env
    //     $encryptionKey = env('ENCRYPTION_KEY');

    //     // Mendapatkan data terenkripsi dari permintaan POST
    //     $encryptedData = $request->input('encrypted_data'); // Pastikan 'encrypted_data' adalah string base64

    //     // Mendekripsi data menggunakan secret key dari .env
    //     $decryptedData = decrypt($encryptedData, $encryptionKey);

    //     return response()->json($decryptedData);
    // }
    // public function saveData(Request $request)
    // {
    //     // Dapatkan data terenkripsi dari permintaan POST
    //     $encryptedData = $request->input('Data'); // Gantilah 'encrypted_data' sesuai dengan nama field yang sesuai
    //     $encryptionKey = "KunciPublic";
    //     try {
    //         // Mendekripsi data menggunakan kunci privat
    //         $decryptedData = Crypt::decryptString($encryptedData, $encryptionKey);

    //         // Lakukan tindakan selanjutnya dengan data yang telah didekripsi

    //         return response()->json($decryptedData, 200);
    //     } catch (\Exception $e) {
    //         // Tangani exception jika terjadi kesalahan dalam dekripsi
    //         return response()->json(['error' => 'Gagal mendekripsi data.'], 400);
    //     }
    // }
    public function createQris()
    {
        return view('qris/create-qris');
    }
    public function saveData(Request $request)
    {

        $decryptedData = Crypt::decrypt($request->input('data'));

        // $encryptedData = "Hasil enkripsi sebelumnya";
        // dd($decryptedData);
        return response()->json(['message' => 'Data berhasil disimpan']);
    }
}
