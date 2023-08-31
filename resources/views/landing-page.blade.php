@extends('template')
@push('styles')
    <style>
        body {
            background-image: url("{{ asset('img/Back2.jpg') }}");
            background-position: center;
            background-size: cover;
        }

        .well_head {
            margin-top: 100px;
            padding: 20px;
            width: 100%;
            /* height: 100vh; */
        }

        .well_title {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: white;
            line-height: 0.5;
        }

        .well_title h1 {
            font-size: 40pt;
            text-align: center;
            line-height: 50px;
            margin-bottom: 10px;
        }

        .well_service {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            gap: 40px;
        }

        .well_service .card {
            width: 22rem;
            /* height: 23rem; */
        }

        .well_footer {
            position: fixed;
            bottom: 15px;
            width: 100%;
            height: 100px;
        }

        .well_footer_content {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card .icon-head {
            font-size: 3rem;
            margin-bottom: -20px;
        }

        .card {
            padding: 4px;
        }

        /* Tambahkan style ini ke dalam CSS Anda */
        .well_service .card {
            transition: transform 0.10s ease;
        }

        .well_service .card:hover,
        .well_service .card:focus {
            transform: translateY(10px);
            /* Atur jarak mengangkat sesuai keinginan */
        }

        @media (max-width: 1100px) {
            .well_head {
                margin-top: 0px;
                padding: 20px;
                width: 100%;
                /* height: 100vh; */
            }

            .well_title h1 {
                font-size: 30pt;
                text-align: center;
                line-height: 50px;
                margin-bottom: 10px;
            }

            .well_service {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin-top: 20px;
                gap: 20px;
                margin-bottom: 50px
            }

            .well_service .card {
                width: 22rem;

            }

            .card .icon-head {
                /* display: none; */
            }

            .card {
                padding: 4px;
            }

            .well_footer {
                display: none;
            }

            /* Tambahkan style ini ke dalam CSS Anda */
            .well_service .card {
                transition: transform 0.10s ease;
            }

            .well_service .card:hover,
            .well_service .card:focus {
                transform: translateY(-10px);
                /* Atur jarak mengangkat sesuai keinginan */
            }

        }
    </style>
@endpush
@section('content')
    <div class="well_head">
        <div class="well_title">
            <h1>Selamat Datang</h1>
            <p>Di Layanan Digital <span class="text-warning">Bank Gresik</span></p>
            <small class="text-light" style="margin-top: 30px">Pilih Salah Satu Layanan :</small>
        </div>
        <div class="well_service">
            <div class="card text-center">
                <i class="bi bi-piggy-bank icon-head" style="color: rgb(0, 0, 0); margin-right: 1rem;"></i>
                <div class="card-body lh-1">
                    <h5 class="card-title">Pembukaan Rekening Tabungan</h5>
                    <p class="card-text" style="font-size: 9pt">With supporting text below as a natural lead-in to
                        additional content.</p>
                </div>
                <a href="{{ url('digital-saving') }}" class="btn btn-primary">Pilih<i class="bi bi-arrow-right-short"
                        style="font-size: 1rem; color: white; margin-left: 0.5rem;"></i></a>
            </div>
            <div class="card text-center">
                <i class="bi bi bi-cash-stack icon-head" style=" color: rgb(0, 0, 0)"></i>
                <div class="card-body  lh-1">
                    <h5 class="card-title">Pengajuan Pinjaman Kredit</h5>
                    <p class="card-text" style="font-size: 9pt">With supporting text below as a natural lead-in to
                        additional content.</p>
                </div>
                <a href="#" class="btn btn-primary">Pilih <i class="bi bi-arrow-right-short"
                        style="font-size: 1rem; color: white; margin-left: 0.5rem;"></i></a>
            </div>
            <div class="card text-center">
                <i class="bi bi-qr-code-scan icon-head" style=" color: rgb(0, 0, 0)"></i>
                <div class="card-body ">
                    <h5 class="card-title">Penerbitan QRIS</h5>
                    <p class="card-text lh-1" style="font-size: 9pt">With supporting text below as a natural lead-in to
                        additional content.</p>
                </div>
                <a href="{{ url('createqris') }}" class="btn btn-primary">Pilih <i class="bi bi-arrow-right-short"
                        style="font-size: 1rem; color: white; margin-left: 0.5rem;"></i></a>
            </div>
        </div>
    </div>
    <div class="well_footer">
        <div class="well_footer_content">
            <img style="width: 60px" src="{{ asset('img/bumd.png') }}" alt="">
            <img style="width: 220px" src="{{ asset('img/awasi.png') }}" alt="">
        </div>
    </div>
@endsection
