<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanQRIS;

class PengajuanQRISController extends Controller
{
    public function checkPengajuanQRIS(Request $request)
    {
        $kodePengajuanQRIS = $request->input('kodepengajuan_qris');

        // Cari data pengajuan berdasarkan kodePengajuanQRIS
        $pengajuan = PengajuanQRIS::where('kodePengajuanQRIS', $kodePengajuanQRIS)->first();

        if (!$pengajuan) {
            $response = [
                'status' => 'error',
                'message' => 'Kode Pengajuan QRIS tidak ditemukan.'
            ];
        } else {
            if ($pengajuan->status == 0) {
                $statusMessage = 'Belum Terbit';
            } elseif ($pengajuan->status == 1) {
                $statusMessage = 'Telah Terbit';
            } else {
                $statusMessage = 'Status tidak valid'; // Atur pesan sesuai kebutuhan Anda
            }

            $response = [
                'status' => 'success',
                'message' =>  $statusMessage
            ];
        }

        return response()->json($response);
    }
}
