@extends('template')
@push('styles')
    <style>
        .detail-h {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .detail-h-info {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            max-width: 800px;
            align-items: flex-start;
        }

        .detail-h-img {
            padding: 30px;
        }

        .jumbotron {
            background-color: rgb(241, 241, 241);
            width: 100%;
            /* align-items: center; */
        }

        .detail-desc {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .nav-item {
            width: 500px
        }

        /* Tabs*/
        /* section {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                padding: 60px 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            } */



        #tabs {
            background: #ffffff;
        }

        #tabs h6.section-title {
            color: #000000;
        }

        #tabs .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #000000;
            background-color: transparent;
            border-color: transparent transparent #000000;
            border-bottom: 4px solid !important;
            font-size: 18px;
            font-weight: bold;
        }

        #tabs .nav-tabs .nav-link {
            border: 1px solid transparent;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
            color: #000000;
            font-size: 17px;
        }

        .btn-detail {
            background: rgb(0, 65, 255);
            background: linear-gradient(90deg, rgba(0, 65, 255, 1) 0%, rgba(31, 31, 215, 1) 100%, rgba(9, 9, 121, 1) 100%);
        }

        #buttonCloseModal {
            background: rgb(238, 238, 238);
            background: linear-gradient(90deg, rgba(238, 238, 238, 1) 0%, rgba(226, 226, 226, 1) 100%);
        }

        /* Styles for loader */
        .loader {
            border: 3.5px solid #f3f3f3;
            border-top: 3.5px solid #3498db;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            animation: spin 2s linear infinite;
            position: relative;
            /* margin-left: 10px; */
            /* Sesuaikan margin sesuai kebutuhan */
            display: inline-block;
            /* Menampilkan loader dalam baris yang sama dengan tombol */
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .modal-footer a {
            display: flex;
            justify-content: baseline;
            align-items: center;
            gap: 7px
        }

        @media (max-width: 1000px) {
            .detail-h-img {
                display: none;
            }

            .jumbotron {
                background-color: rgb(250, 234, 3);
                width: 100%;
                /* align-items: center; */
            }

            .detail-desc {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                font-size: 10pt
            }

            .card-text {
                line-height: 1.3;
                font-size: 10pt;
            }

            .nav-item {
                width: 150px;
            }

            .tab-pane {
                width: 100%;
            }
        }
    </style>
@endpush
@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="detail-h">
            <div class="detail-h-img">
                <img class="img-responsive"
                    src="https://bukarekening.bri.co.id/digital-saving/assets/images/simpedes-umum2.png">
            </div>
            <div class="detail-h-info">
                <h3> <strong> Kredit Umum</strong></h3>
                <p align="justify" class="card-text">Produk tabungan yang memberikan beragam kemudahan dalam melakukan
                    transaksi perbankan dengan didukung fasilitas e-banking dan sistem real time online yang akan
                    memungkinkan nasabah untuk bertransaksi kapanpun dan dimanapun.</p>
                <button type="button" class="btn btn-success btn-detail" data-toggle="modal"
                    data-target="#exampleModalCenter">
                    Ajukan Kredit Sekarang <i class="bi bi-arrow-right-short"
                        style="font-size: 1rem; color: rgb(255, 255, 255); margin-left: 0.5rem;"></i>
                </button>
                {{-- <a href="{{ route('form-kredit-1') }}" class="btn btn-success btn-detail"> Pilih Kredit<i
                        class="bi bi-arrow-right-short"
                        style="font-size: 1rem; color: rgb(255, 255, 255); margin-left: 0.5rem;"></i></a> --}}
            </div>
        </div>
    </div>
    <!-- Tabs -->
    <section id="tabs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 ">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                role="tab" aria-controls="nav-home" aria-selected="true">Persyaratan</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                role="tab" aria-controls="nav-profile" aria-selected="false">Keuntungan</a>
                        </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade show active text-dark" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="detail-decs">
                                <p class="fs-5"> <strong>Syarat & Ketentuan</strong></p>
                                <p class="lh-2">Untuk Membuka Rekening Tabungan Umum di Bank Gresik, Berikut adalah
                                    Persyaratan Umum yang Harus Disiapkan, Seperti:</p>
                                <ol>
                                    <li><strong>Fotokopi KTP Suami & Istri yang berlaku (4 Lembar):</strong>
                                        <p>Diperlukan fotokopi KTP suami dan istri yang masih berlaku. Hal ini bertujuan
                                            untuk
                                            mengidentifikasi peminjam dan memastikan keabsahan data pribadi.</p>
                                    </li>
                                    <li><strong>Fotokopi Kartu Keluarga (2 Lembar):</strong>
                                        <p>Dibutuhkan fotokopi Kartu Keluarga (KK) dalam jumlah yang ditentukan. KK
                                            digunakan
                                            untuk memverifikasi hubungan keluarga dan memberikan bukti bahwa peminjam adalah
                                            bagian dari sebuah keluarga.</p>
                                    </li>
                                    <li><strong>Setoran awal Rp. 100.000,-</strong></li>
                                    <li><strong>Biaya Administrasi Rp. 500,- / Bulan</strong></li>
                                    <li><strong>Bunga Tabungan sebesar 3%.</strong></li>
                                    <li><strong>Saldo Minimum Tabungan Rp 25.000,-</strong></li>
                                    <li><strong>Setoran Minimum Tabungan Rp 100.000,-</strong></li>

                                </ol>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim
                            occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
                            dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse
                            consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod
                            tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non
                            adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat
                            ex.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Pengajuan</h5>
                </div>
                <div class="modal-body">
                    <div class="title-question">
                        Apakah Anda Yakin Ingin Mengajukan Kredit Sekarang ?
                    </div>
                    <div class="desc-question" style="line-height: 0.9;margin-top: 6px">
                        <small style="font-size: 9pt;">Pastikan Anda Sudang Membaca Persyaratan dan
                            Kententuan
                            dalam Pengajuan
                            Kredit. Jika Anda sudah
                            yakin klik <b>"Yakin"</b> untuk Melanjutkan Proses Pengajuan.</small>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-ligth" id="buttonCloseModal" data-dismiss="modal"
                        style="color:#000000"> <i class="bi bi-x"></i>
                        Belum</button>
                    <a href="{{ route('form-kredit-1') }}" class="btn btn-success " id="buttonYakin"
                        onclick="handleButtonClick()">Yakin <i class="bi bi-arrow-right-short iconYakin"
                            style="font-size: 1rem; color: rgb(255, 255, 255); margin-left: 0.5rem;"></i>
                        <div class="loader" id="loader_Yakin"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('script-end')
    <script>
        $('#myTab a').on('click', function(e) {
            e.preventDefault()
            $(this).tab('show')
        })
    </script>
    <script>
        // Menghilangkan loader ketika halaman dimuat
        window.addEventListener('load', function() {
            // Menghilangkan loader
            const loader = document.querySelector("#loader_Yakin");
            if (loader) {
                loader.style.display = "none";
            }
        });

        function handleButtonClick() {
            // Menyembunyikan ikon check
            const checkIcon = document.querySelector(".iconYakin");
            if (checkIcon) {
                checkIcon.style.display = "none";
            }

            // Menampilkan loader
            const loader = document.querySelector("#loader_Yakin");
            if (loader) {
                loader.style.display = "block";
            }

            // Menonaktifkan kedua tombol
            const closeButton = document.querySelector("#buttonCloseModal");
            const yakinButton = document.querySelector("#buttonYakin");

            if (closeButton) {
                closeButton.disabled = true;
            }

            if (yakinButton) {
                yakinButton.classList.add("disabled");
            }

        }
    </script>
@endpush
