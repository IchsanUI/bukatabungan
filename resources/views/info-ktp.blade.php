@extends('template')

@push('styles')
    <style>
        .container {
            width: 700px;
            margin-top: 20px;
        }

        .info_head {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .info_ktp {
            display: flex;
            flex-direction: column;
            padding: 20px;
            margin-bottom: 50px;
            justify-content: center;
            align-items: center;
        }

        .info_img {
            display: flex;
            flex-direction: row;
            padding: 20px 0 20px 0;
            gap: 30px;
            width: 600px;
        }

        .info_btn {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin-top: 20px
        }


        .info_btn button {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .info_btn_ulang {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            width: 100%;
            /* margin-top: 20px; */
            gap: 10px;
        }

        .info_btn_ulang button {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            gap: 10px;
        }

        .form_content {
            display: flex;
            flex-direction: row;
            gap: 30px;
            flex-grow: 4;
        }

        .img_file {
            width: 40%;
        }

        .form_file {
            width: 60%;
        }



        #retakeButton {
            background: rgb(238, 238, 238);
            background: linear-gradient(90deg, rgba(238, 238, 238, 1) 0%, rgba(226, 226, 226, 1) 100%);
        }

        .video {
            width: 100%;
        }

        /* Styles for the frame */
        .camera-frame {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .frame-overlay {
            position: absolute;
            top: 50%;
            /* Posisi vertikal di tengah */
            left: 50%;
            /* Posisi horizontal di tengah */
            transform: translate(-50%, -50%);
            /* Pusatkan bingkai */
            pointer-events: none;
            /* Biarkan feed webcam tetap interaktif */
            width: 8.6cm;
            height: 5.4cm;
        }

        .frame-overlay:before,
        .frame-overlay:after {
            content: "";
            position: absolute;
            border: 2px dashed white;
            /* Warna dan lebar garis putus-putus */
            width: 100%;
            height: 100%;
        }

        .frame-overlay:before {
            top: 0;
            left: 0;
        }

        .frame-overlay:after {
            bottom: 0;
            right: 0;
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
            margin-left: 10px;
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

        /* Teks dalam tombol ketika loader aktif */
        #takePicture.loading .button-text {
            display: none;
        }

        /* Loader dalam tombol */
        #takePicture.loading .loader {
            display: inline-block;
        }

        @media (max-width: 1000px) {
            .container {
                width: 100%;
                /* margin-top: 50px; */
            }

            .video {
                width: 100%;
            }

            .info_head {
                padding: 0;
                text-align: center;
            }

            .info_img {
                display: flex;
                flex-direction: row;
                justify-content: space-between;

                /* padding: 20px; */
                /* gap: 5px; */
                width: 100%;
            }

            .form_content {
                display: flex;
                flex-direction: column;
                gap: 30px;
                /* flex-grow: 4; */
            }

            .img_file {
                width: 100%;
            }

            .form_file {
                width: 100%;
            }

        }
    </style>
@endpush

@section('content')
    <div class="container">
        <div class="info_ktp">
            <div class="info_head">
                <h3><strong>Foto e-KTP</strong></h3>
                <p>Ambil foto e-KTP sebagai bukti identitas diri.</p>
            </div>
            <div class="camera-open" style="display: none">
                <div class="camera-frame">
                    <video id="videoElement" autoplay width="100%"></video>
                    <img id="resultImage" style="display: none;" width="100%" />
                    <!-- Menempatkan elemen img resultImage di sini -->
                    <canvas id="canvasElement" style="display: none;"></canvas>
                    <!-- Menambahkan elemen canvas -->
                    <div class="frame-overlay" id="frameOverlay"></div>
                </div>
                <small style="font-size: 8pt">*Pastikan KTP Tepat Berada di Dalam Bingkai yang Tersedia.</small>


                <div class="info_btn">
                    <button class="btn btn-primary" id="takePicture" disabled>
                        <span class="button-text">Ambil Gambar</span>
                        <i class="bi bi-camera-fill"
                            style="font-size: 1rem; color: rgb(255, 255, 255); margin-left: 0.5rem;"></i>
                        <div class="loader"></div>
                    </button>
                </div>
                <div class="info_btn_ulang">
                    <button class="btn btn-light" style="display: none" id="retakeButton"> <i class="bi bi-arrow-repeat"
                            style="font-size: 1rem; color: rgb(0, 0, 0); margin-right: 0.5rem;"></i> Ulangi Foto</button>
                    <button class="btn btn-primary" style="display: none" id="submitButton">Gunakan <i
                            class="bi bi-arrow-right-short" style="font-size: 1rem; color: white; margin-left: 0.5rem;"></i>
                    </button>
                </div>
            </div>
            <div class="info_contect">
                <div class="info_img">
                    <div class="info_img_1">
                        <img width="100%" class="data-img" src="{{ asset('img/info_ktp_true.png') }}">
                    </div>
                    <div class="info_img_2">
                        <img width="100%" class="data-img" src="{{ asset('img/info_ktp_false.png') }}">
                    </div>
                </div>
                <div class="info_decs">
                    <h6>Perhatikan hal-hal berikut :</h6>
                    <ol>
                        <li>Foto KTP harus difoto secara langsung, bukan fotokopi KTP atau lainnya</li>
                        <li>Pastikan seluruh KTP masuk ke dalam frame dan tidak terpotong</li>
                        <li>Usahakan foto dan data yang tertera pada KTP terbaca jelas <i>(tidak blur, tidak tertutup jari,
                                atau terkena pantulan cahaya)</i></li>
                    </ol>
                </div>
                <div class="info_btn">
                    <button class="btn btn-primary" id="startButton">Mulai Ambil <i class="bi bi-arrow-right-short"
                            style="font-size: 1rem; color: white; margin-left: 0.5rem;"></i>
                    </button>
                </div>
            </div>
            <div class="info_form" style="display: none">
                <h3><strong>Data Diri</strong></h3>
                <p>Isi data utama untuk mempermudah pembukaan rekening. pastikan data diisi dengan benar.</p>
                <div class="form_content">
                    <div class="img_file">
                        <img id="ElementresultImage" width="100%">
                    </div>
                    <div class="form_file">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">NIK</label>
                            <input type="number" class="form-control" id="" placeholder="">
                            <div id="passwordHelpBlock" class="form-text">
                                <small> Pastikan NIK sesuai KTP.</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="" placeholder="" required>
                            <div id="passwordHelpBlock" class="form-text">
                                <small>Pastikan Nama sesuai KTP.</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="" placeholder="" required>
                            <div id="passwordHelpBlock" class="form-text">
                                <small>Contoh : <i>DD/MM/YYYY.</i></small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">No HP</label>
                            <input type="text" class="form-control" id="" placeholder="" required>
                            <div id="passwordHelpBlock" class="form-text">
                                <small>Nomor akan digunakan untuk Verifikasi. (ex : 08xxxxxxxxxx)</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="" placeholder="" required>
                            <div id="passwordHelpBlock" class="form-text">
                                <small>Email Akan digunakan untuk Verifikasi.</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Gadis Ibu Kandung</label>
                            <input type="email" class="form-control" id="" placeholder="" required>
                            <div id="passwordHelpBlock" class="form-text">
                                <small>Pastikan Penulisan Ejaan Benar.</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Kode Pos</label>
                            <input type="email" class="form-control" id="" placeholder="" required>

                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                <small class="lh-1">Dengan ini saya menyetujui <i> <a href=" "
                                            style="text-decoration: none">Kebijakan dan
                                            Ketentuan Layanan
                                            Pembukaan
                                            Tabungan Online</a></i> Bank Gresik.</small>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="info_btn">
                    <button class="btn btn-primary" id="">Daftar Sekarang<i class="bi bi-arrow-right-short"
                            style="font-size: 1rem; color: white; margin-left: 0.5rem;"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@push('script-end')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var videoElement = document.getElementById('videoElement');
            var startButton = document.getElementById('startButton');
            var takePictureButton = document.getElementById('takePicture');
            var canvas = document.getElementById('canvasElement');
            var resultImage = document.getElementById('resultImage');
            var retakeButton = document.getElementById('retakeButton');
            var submitButton = document.getElementById('submitButton');
            var frameOverlay = document.getElementById('frameOverlay');
            var loader = document.querySelector('.loader');
            var buttonText = document.querySelector('.button-text'); // Menambahkan referensi untuk teks tombol
            var icon = document.querySelector('.bi-camera-fill'); // Menambahkan referensi untuk ikon tombol
            var infoHead = document.querySelector('.info_head');
            var infoForm = document.querySelector('.info_form');
            // Fungsi untuk memulai feed webcam
            function startWebcam() {
                loader.style.display = 'block'; // Menampilkan loader
                buttonText.textContent = 'Loading...'; // Mengubah teks tombol
                icon.style.display = 'none'; // Menyembunyikan ikon tombol
                navigator.mediaDevices.getUserMedia({
                        video: {
                            facingMode: 'environment' // Menggunakan kamera belakang
                        }
                    })
                    .then(function(stream) {
                        loader.style.display = 'none'; // Menyembunyikan loader jika terjadi error
                        takePictureButton.disabled = false; // Mengaktifkan tombol kembali
                        buttonText.textContent = 'Ambil Gambar'; // Mengembalikan teks tombol
                        icon.style.display = 'inline'; // Menampilkan ikon tombol
                        videoElement.srcObject = stream;
                    })
                    .catch(function(error) {
                        loader.style.display = 'none'; // Menyembunyikan loader jika terjadi error
                        takePictureButton.disabled = false; // Mengaktifkan tombol kembali
                        buttonText.textContent = 'Ambil Gambar'; // Mengembalikan teks tombol
                        icon.style.display = 'inline'; // Menampilkan ikon tombol
                        console.error('Error accessing webcam:', error);
                    });
            }

            // Event listener untuk tombol "Mulai Ambil"
            startButton.addEventListener('click', function() {
                // Menampilkan elemen kamera dan menyembunyikan info_contect
                document.querySelector('.camera-open').style.display = 'block';
                document.querySelector('.info_contect').style.display = 'none';

                // Memulai feed webcam
                startWebcam();
            });

            // Event listener untuk tombol "Ambil Gambar"
            takePictureButton.addEventListener('click', function() {
                canvas.width = videoElement.videoWidth;
                canvas.height = videoElement.videoHeight;
                canvas.getContext('2d').drawImage(videoElement, 0, 0, canvas.width, canvas.height);

                // Menampilkan gambar hasil di elemen <img>
                resultImage.src = canvas.toDataURL('image/jpeg');

                // Menampilkan elemen img dan menyembunyikan elemen video
                videoElement.style.display = 'none';
                canvas.style.display = 'none';
                frameOverlay.style.display = 'none';
                resultImage.style.display = 'block';

                // Menyembunyikan tombol "Ambil Gambar" dan menampilkan tombol "Ulangi Foto"
                takePictureButton.style.display = 'none';
                retakeButton.style.display = 'block';
                submitButton.style.display = 'block';
            });


            // Event listener untuk tombol "Ulangi Foto"
            retakeButton.addEventListener('click', function() {
                // Menghapus gambar hasil, mengembalikan tombol "Ambil Gambar", dan membuka kembali kamera
                resultImage.src = '';
                retakeButton.style.display = 'none';
                submitButton.style.display = 'none';
                takePictureButton.style.display = 'block';
                videoElement.style.display = 'block';
                frameOverlay.style.display = 'block';
            });

            submitButton.addEventListener('click', function() {

                document.querySelector('.camera-open').style.display = 'none';
                infoHead.style.display = 'none';
                infoForm.style.display = 'block';

                // Ambil elemen gambar
                var resultImageElement = document.getElementById('ElementresultImage');

                // Setel atribut src dengan data gambar dari canvas
                resultImageElement.src = canvas.toDataURL('image/jpeg');

                resultImageElement.style.display = 'block'; // Menampilkan gambar yang sudah diambil

                // Menampilkan elemen gambar
                // resultImageElement.style.display = 'block';

            });
        });
    </script>
@endpush
