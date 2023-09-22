@extends('template')
@push('styles')
    <style>
        body {
            background-image: url("{{ asset('img/Back5.jpg') }}");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .head {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            padding: 50px 50px 10px 50px;
        }

        .wall_service {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /* margin-top: 20px; */
            gap: 20px;
            margin-bottom: 50px
        }

        .wall_service .card {
            width: 22rem;
            height: 60vh;

        }

        .button-card a {
            width: 100%;
            font-size: 10pt;
        }


        .wall_service #checkPengajuan {
            margin-bottom: 8px;
        }

        .content-qr {
            width: 100%;
        }

        .content-qr img {
            display: flex;
            align-items: center;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            /* padding: 10px; */
        }

        @media (max-width: 768px) {
            body {
                background-position: left bottom;
            }

            .head {
                display: flex;
                justify-content: center;
                align-items: center;
                color: white;
                /* padding: 50px; */
            }

            .wall_service {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                /* margin-top: 20px; */
                gap: 20px;
                margin-bottom: 50px
            }

            .wall_service .card {
                width: 22rem;
                height: 60vh;

            }

            .button-card a {
                width: 100%;
                font-size: 10pt;
            }


            .wall_service #checkPengajuan {
                margin-bottom: 8px;
            }

            .content-qr {
                width: 100%;
            }

            .content-qr img {
                display: flex;
                align-items: center;

            }

            .card-body {
                display: flex;
                flex-direction: column;
                justify-content: space-between
            }
        }
    </style>
@endpush
@section('content')
    <div class="head">
        <h1>Penerbitan <img src="{{ asset('img/QRIS_logo.png') }}" alt="" style="width:190px"></h1>
        <p>" Satu QR Code untuk Semua Payment "</p>
    </div>
    <div class="wall_service">
        <div class="card text-center">
            <div class="card-body">
                <div class="title-card">
                    <h3 style="margin: 0;margin-top:10px">Check QRIS Saya.</h3>
                    <p class="card-text" style="font-size: 9pt">Check QRIS yang Sudah Kamu Ajukan.</p>
                </div>
                <div class="content-card">
                    <img src="{{ asset('img/qrcode-example.png') }}" width="200px" alt="">
                </div>
                <div class="button-card">
                    <div class="mb-3" style="font-size: 10pt;">
                        <label for="codeQRIS" class="form-label">Masukan Kode Pengajuan QRIS Anda.</label>
                        <input type="text" class="form-control" id="norek_bg" placeholder="" maxlength="12" required>
                        <div id="" class="form-text">
                            <small>Contoh : QRBGXXXXXX</small>
                        </div>
                    </div>
                    <a href="{{ route('maintenance') }}" class="btn btn-primary" id="checkPengajuan">Check Pengajuan
                        QRIS</a>
                    <a href="{{ route('create.qris') }}" class="btn btn-primary">Buat QRIS Baru <i class="bi bi-qr-code"
                            style="font-size: 1rem; color: white; margin-left: 0.3rem;"></i></a>
                </div>
            </div>

            {{-- <div class="card-body lh-1">
                <h3 class="card-title">Check QRIS Saya.</h3>
                <p class="card-text" style="font-size: 9pt">With supporting text below as a natural lead-in to
                    additional content.</p>
            </div>
            <div class="content-qr">
                <img src="{{ asset('img/qrcode-example.png') }}" alt="">
            </div>
            <div class="button-card">
                <div class="mb-3" style="font-size: 10pt;">
                    <label for="codeQRIS" class="form-label">Masukan Kode QRIS Anda.</label>
                    <input type="text" class="form-control" id="norek_bg" placeholder="" maxlength="12" required>
                    <div id="" class="form-text">
                        <small>Contoh : 01.10.001234.01</small>
                    </div>
                </div>
                <a href="{{ route('maintenance') }}" class="btn btn-primary" id="checkPengajuan">Check Pengajuan QRIS</a>
                <a href="{{ route('maintenance') }}" class="btn btn-primary">Buat QRIS Baru</a>
            </div> --}}
        </div>
    </div>
@endsection
