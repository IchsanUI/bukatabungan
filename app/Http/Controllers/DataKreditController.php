<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class DataKreditController extends Controller
{
    public function saveData(Request $request)
    { // Mengambil data yang dikirimkan melalui permintaan POST
        $dataKredit = $request->input('Data');

        try {

            // Mengonversi data JSON yang diterima menjadi array
            $dataArray = json_decode($dataKredit, true);

            // Mengambil data yang ingin dienkripsi
            $dataToEncrypt = [
                'tanggaLahir' => $dataArray['tanggaLahir'],
                'tempatLahir' => $dataArray['tempatLahir'],
                'tempatlahirPasangan' => $dataArray['tempatlahirPasangan'],
                'tanggallahirPasangan' => $dataArray['tanggallahirPasangan'],
                'noKTP' => $dataArray['noKTP'],
                'fileKTP' => $dataArray['fileKTP'],
                'noKK' => $dataArray['noKK'],
                'fileKK' => $dataArray['fileKK'],
                'noKTPPasangan' => $dataArray['noKTPPasangan'],
                'fileKTPPasangan' => $dataArray['fileKTPPasangan'],
                'noKKPasangan' => $dataArray['noKKPasangan'],
                'fileKKPasangan' => $dataArray['fileKKPasangan'],
                // Tambahkan data lain yang ingin Anda enkripsi di sini
            ];
            // Mengenkripsi data yang diinginkan
            foreach ($dataToEncrypt as $key => $value) {
                $dataToEncrypt[$key] = Crypt::encryptString($value);
            }

            // Menggabungkan data yang telah dienkripsi kembali ke dalam array
            foreach ($dataToEncrypt as $key => $value) {
                $dataArray[$key] = $value;
            }
            // Mengonversi array kembali ke JSON
            $encryptedData = json_encode($dataArray);
            // $datadecrypt = Crypt::decryptString($encryptedData);

            return response()->json(['status' => 'success', 'message' => 'Data berhasil disimpan', 'encryptedData' => $encryptedData]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }
    public function successSend()
    {
        return view('successKredit');
    }

    // Di dalam controller atau file yang sesuai
    public function getJobSuggestions(Request $request)
    {
        $query = $request->input('query');

        // Lakukan pencarian atau pengambilan saran pekerjaan/usaha berdasarkan $query
        // Contoh: Ambil dari database
        $suggestions = DB::table('jenis_pekerjaan')->where('jenis_pekerjaan', 'LIKE', '%' . $query . '%')->pluck('jenis_pekerjaan');

        return response()->json($suggestions);
    }

    // public function reloadCaptcha()
    // {
    //     return response()->json(['captcha' => captcha_img()]);
    // }
}
