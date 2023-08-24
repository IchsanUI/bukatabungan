@extends('template')

@push('styles')
    <style>
        .container {
            width: 700px;
            margin-top: 50px;
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
            justify-content: center;
            align-items: center;
        }

        .info_img {
            display: flex;
            flex-direction: row;
            padding: 20px;
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
            margin-top: 20px;
            gap: 10px;
        }

        .info_btn_ulang button {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            gap: 10px;
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


        @media (max-width: 1000px) {
            .container {
                width: 100%;
                /* margin-top: 50px; */
            }

            .video {
                width: 100%;
            }

            .info_head {
                text-align: center;
            }

            .info_img {
                width: 100%;
            }

        }
    </style>
@endpush

@section('content')
    <div class="container">
        <div class="info_ktp">
            <div class="info_head">
                <h3>Foto e-KTP</h3>
                <p>Ambil foto e-KTP sebagai bukti identitas diri.</p>
            </div>
            <div class="camera-open" style="display: none">
                <div class="camera-frame">
                    <video id="videoElement" autoplay width="100%"></video>
                    <img id="resultImage" style="display: none;" /> <!-- Menempatkan elemen img resultImage di sini -->
                    <canvas id="canvasElement" style="display: none;"></canvas> <!-- Menambahkan elemen canvas -->
                    <div class="frame-overlay" id="frameOverlay"></div>
                </div>
                <small style="font-size: 8pt">*Pastikan KTP Tepat Berada di Dalam Bingkai yang Tersedia.</small>
                <div class="info_btn">
                    <button class="btn btn-primary" id="takePicture">Ambil Gambar <i class="bi bi-camera-fill"
                            style="font-size: 1rem; color: rgb(255, 255, 255); margin-left: 0.5rem;"></i>
                        <div class="loader" style="display: none;">
                    </button>
                </div>
                <div class="info_btn_ulang">
                    <button class="btn btn-light" style="display: none" id="retakeButton"> <i class="bi bi-arrow-repeat"
                            style="font-size: 1rem; color: rgb(0, 0, 0); margin-right: 0.5rem;"></i> Ulangi Foto</button>
                    <button class="btn btn-primary" style="display: none" id="submitButton">Gunakan <i
                            class="bi bi-arrow-right-short"
                            style="font-size: 1rem; color: white; margin-left: 0.5rem;"></i></button>
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
                    <h4>Perhatikan hal-hal berikut :</h4>
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
        </div>
    </div>
    </div>
@endsection

@push('script-end')
    {{-- <script>
        // JavaScript
        document.addEventListener("DOMContentLoaded", function() {
            var videoElement = document.getElementById('videoElement');
            var startButton = document.getElementById('startButton');
            var loader = document.querySelector('.loader');

            // Fungsi untuk memulai feed webcam
            function startWebcam() {
                loader.style.display = 'block'; // Menampilkan loader

                navigator.mediaDevices.getUserMedia({
                        video: true
                    })
                    .then(function(stream) {
                        loader.style.display = 'none'; // Menyembunyikan loader setelah kamera terbuka
                        videoElement.srcObject = stream;
                    })
                    .catch(function(error) {
                        loader.style.display = 'none'; // Menyembunyikan loader jika terjadi error
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
        });
    </script> --}}
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
            // Fungsi untuk memulai feed webcam
            function startWebcam() {
                loader.style.display = 'block'; // Menampilkan loader
                navigator.mediaDevices.getUserMedia({
                        video: true
                    })
                    .then(function(stream) {
                        loader.style.display = 'none'; // Menyembunyikan loader jika terjadi error
                        videoElement.srcObject = stream;
                    })
                    .catch(function(error) {
                        loader.style.display = 'none'; // Menyembunyikan loader jika terjadi error
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
        });
    </script>
@endpush
