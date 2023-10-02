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
            width: 25rem;
            height: 100%;

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

        #createdNew {
            background: rgb(51, 255, 0);
            background: linear-gradient(90deg,
                    rgb(208, 12, 12) 0%,
                    rgb(255, 14, 14) 100%,
                    rgb(251, 0, 0) 100%);
        }

        #checkPengajuan {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px
        }

        .loader {
            display: none;
            border: 3px solid #f3f3f3;
            border-top: 3px solid #3498db;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            animation: spin 1s linear infinite;
            /* Default: sembunyikan loader */
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }


        @media (max-width: 1000px) {
            body {
                background-position: left bottom;
            }


            .head {
                display: flex;
                justify-content: center;
                align-items: center;
                color: white;
                text-align: center;
                padding: 30px 50px 10px 50px;
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
                height: 100%;

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
            }


        }
    </style>
@endpush
@section('content')
    <div class="head">
        <h1>Penerbitan <img src="{{ asset('img/QRIS_logo.png') }}" alt="" style="width:190px"></h1>
        <p><i>" Satu QRIS untuk Semua Payment "</i> </p>
    </div>
    <div class="wall_service">
        <div class="card text-center">
            <div class="card-body">
                <div class="title-card">
                    <h3 style="margin: 0;margin-top:10px">Check QRIS Saya.</h3>
                    <p class="card-text" style="font-size: 9pt">Check QRIS yang Sudah Kamu Ajukan.</p>
                </div>
                <div class="content-card">
                    <img src="{{ asset('img/qrcode-example.png') }}" width="100%" style="padding:40px" alt="">

                </div>
                <div class="button-card">
                    <div style="font-size: 10pt;margin-bottom:30px">
                        <label for="codeQRIS" class="form-label">Masukan Kode Pengajuan QRIS Anda.</label>
                        <input type="text" style="text-align:center;" class="form-control" id="codepengajuan_qris"
                            placeholder="QRBGXXXXXXX" required>
                    </div>
                    <a href="" class="btn btn-primary" id="checkPengajuan">Check Pengajuan
                        QRIS <div id="loader" class="loader"></div> </a>

                    <hr>
                    <a href="{{ route('create.qris') }}" class="btn btn-danger" id="createdNew">Buat QRIS Baru <img
                            src="{{ asset('img/QRIS_logo.png') }}" alt="" style="width:100px"></a>
                </div>
            </div>
        </div>
        <img src="{{ asset('img/kerja-sama-qris.png') }}" width="280px">
    </div>
@endsection
@push('script-end')
    <script>
        $(document).ready(function() {
            // Menangani klik pada tautan "Check Pengajuan QRIS" (dengan id "checkPengajuan")
            $("#checkPengajuan").click(function(event) {
                event.preventDefault(); // Mencegah tindakan default dari tautan

                // Menampilkan loader dan menonaktifkan tautan
                $("#loader").show();
                $("#checkPengajuan").addClass(
                    "disabled"); // Menambahkan kelas "disabled" untuk menonaktifkan tautan

                var kodePengajuanQRIS = $("#codepengajuan_qris").val(); // Ambil nilai input kode pengajuan

                // Hapus kelas 'is_invalid' dari input sebelum validasi
                $("#codepengajuan_qris").removeClass("is-invalid");

                // Validasi kode pengajuan
                if (!kodePengajuanQRIS) {
                    // Jika kode pengajuan kosong, tambahkan kelas 'is_invalid' pada input
                    $("#codepengajuan_qris").addClass("is-invalid");

                    // Sembunyikan loader dan aktifkan tautan kembali
                    $("#loader").hide();
                    $("#checkPengajuan").removeClass(
                        "disabled"); // Menghapus kelas "disabled" untuk mengaktifkan tautan kembali

                    return; // Hentikan proses jika kode pengajuan kosong
                }

                // Lakukan permintaan Ajax
                $.ajax({
                    url: "/check-pengajuan-qris", // Mengarahkan ke rute yang telah Anda buat
                    type: "GET",
                    dataType: "json",
                    data: {
                        kodepengajuan_qris: kodePengajuanQRIS
                    }, // Kirim kode pengajuan sebagai data
                    success: function(response) {
                        // Tangani respons dari server di sini
                        if (response.status === "success") {
                            // Data pengajuan valid
                            alert("Status Pengajuan QRIS: " + response.message);
                        } else {
                            // Data pengajuan tidak valid
                            alert("Error: " + response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        // Tangani kesalahan jika ada
                        console.error("Terjadi kesalahan: " + error);
                    },
                    complete: function() {
                        // Sembunyikan loader dan aktifkan tautan kembali setelah permintaan selesai
                        $("#loader").hide();
                        $("#checkPengajuan").removeClass(
                            "disabled"
                        ); // Menghapus kelas "disabled" untuk mengaktifkan tautan kembali
                    }
                });
            });
        });

        function formatInput() {
            let inputElement = document.getElementById('codepengajuan_qris');
            let inputValue = inputElement.value;

            // Hapus karakter selain angka
            inputValue = inputValue.replace(/\D/g, '');

            // Pastikan panjang angka tidak lebih dari 6 digit
            inputValue = inputValue.slice(0, 6);

            // Tambahkan "QRBG-" di awal
            inputValue = "QRBG" + inputValue;

            // Update nilai input
            inputElement.value = inputValue;
        }

        // Tambahkan event listener untuk memanggil fungsi formatInput saat nilai input berubah
        document.getElementById('codepengajuan_qris').addEventListener('input', formatInput);
    </script>
@endpush
