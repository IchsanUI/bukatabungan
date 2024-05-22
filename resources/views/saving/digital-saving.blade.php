@extends('template')
@push('styles')
    <style>
        @media only screen and (max-width: 767px) {

            body {
                font-size: 70%;
            }

            .container {
                width: 90%;
            }
        }

        @media only screen and (min-width: 768px) {

            body {
                font-size: 100%;
            }

            .container {
                width: 70%;
            }
        }
    </style>
@endpush
@section('content')
    <div class="container mt-5">
        <h5 class="card-title"><strong>Buka Rekening Baru</strong></h5>
        <p class="card-text p-2">Nikmati 3 Langkah mudah Buka Rekening Bank Gresik dimanapun, dan kapanpun .</p>
        <div class="card text-left mt-4" style="background-color:rgb(248, 248, 248)">
            <div class="card-body">
                <div style="display: flex; align-items: center;">
                    <i class="bi bi-file-earmark-check"
                        style="font-size: 3rem; color: cornflowerblue; margin-right: 1rem;"></i>
                    <div>
                        <h6 class="card-title">1. Siakan Dokumen</h6>
                        <p class="card-text"><small>Siapkan KTP, NPWP (opsional), Data Diri</small></p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="card-body">
                <div style="display: flex; align-items: center;">
                    <i class="bi bi-cash-stack" style="font-size: 3rem; color: cornflowerblue; margin-right: 1rem;"></i>
                    <div>
                        <h6 class="card-title">2. Setoran Awal</h6>
                        <p class="card-text"><small>Aktifkan Rekening barumu dengan melakukan setoran awal.</small></p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="card-body">
                <div style="display: flex; align-items: center;">
                    <i class="bi bi-camera-video" style="font-size: 3rem; color: cornflowerblue; margin-right: 1rem;"></i>
                    <div>
                        <h6 class="card-title">3. Verifikasi Diri</h6>
                        <p class="card-text"><small>Lakukan Video Recording untuk meverifikasi diri Anda.</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5" style="margin-bottom: 100px;">
            <a href="{{ url('info') }}"> <button type="button" class="btn btn-rounded text-white "
                    style="padding: 10px 90px;background-color: rgb(14, 14, 114);">Buka Rekening</button></a>
        </div>
    </div>
@endsection
