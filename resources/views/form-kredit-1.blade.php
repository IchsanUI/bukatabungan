@extends('template')
@push('styles')
    <style>
        body {
            background-image: url("{{ asset('img/Back3.jpg') }}");
            background-position: center;
            background-size: cover;
        }

        .form-section {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }

        .kd-form {
            display: flex;
            flex-direction: column;
            padding: 30px;
            margin-bottom: 50px;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            width: 700px;
            background: linear-gradient(white, white) padding-box,
                linear-gradient(to right, rgb(184, 184, 184), rgb(255, 255, 255)) border-box;
            border-radius: 12px;
            border: 2px solid transparent;
            background-color: rgb(255, 255, 255);
            box-shadow: 15px 15px 20px -6px rgba(0, 0, 0, 0.14);
            -webkit-box-shadow: 15px 15px 20px -6px rgba(0, 0, 0, 0.14);
            -moz-box-shadow: 15px 15px 20px -6px rgba(0, 0, 0, 0.14);
        }

        .info_btn {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin-top: 40px
        }


        .info_btn button {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }


        .kd-form {
            display: none;
        }

        .kd-form.active {
            display: block;
        }

        .btn-cq-submit {
            background: rgb(17, 168, 0);
            background: linear-gradient(71deg, rgba(17, 168, 0, 1) 100%, rgba(0, 255, 98, 1) 100%);
        }

        #buttonCloseModal {
            background: rgb(238, 238, 238);
            background: linear-gradient(90deg, rgba(238, 238, 238, 1) 0%, rgba(226, 226, 226, 1) 100%);
        }

        .info_ktp {
            display: flex;
            flex-direction: column;
            padding: 20px;
            /* margin-bottom: 50px; */
            justify-content: center;
            align-items: center;
        }

        .info_ktp .info_img {
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding-bottom: 30px;
        }

        .info_ktp .info_decs {
            font-size: 9pt;
        }

        .loader {
            display: none;
            border: 3px solid #f3f3f3;
            border-top: 3px solid #3498db;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .modal-footer #confirmSend {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 5px;
        }

        @media (max-width: 1000px) {
            .form-section {
                font-size: 10.5pt;
                padding: 15px;
            }

            .kd-form {
                display: flex;
                flex-direction: column;
                padding: 30px;
                margin-bottom: 25px;
                justify-content: center;
                align-items: center;
                margin-top: 0px;
                width: 100%;
                background: linear-gradient(white, white) padding-box,
                    linear-gradient(to right, rgb(194, 180, 255), rgb(255, 255, 255)) border-box;
                border-radius: 12px;
                border: 1, 5px solid transparent;
                background-color: rgb(255, 255, 255);
                box-shadow: 15px 15px 20px -6px rgba(25, 3, 104, 0.14);
                -webkit-box-shadow: 15px 15px 20px -6px rgba(0, 0, 0, 0.14);
                -moz-box-shadow: 15px 15px 20px -6px rgba(0, 0, 0, 0.14);
            }

            /* .kd-form {
                                                                                        display: none;
                                                                                    }

                                                                                    .kd-form.active {
                                                                                        display: block;
                                                                                    } */
        }
    </style>
@endpush
@section('content')
    <div class="form-section">
        <div class="kd-form active">
            <div class="firstStep">
                <h3> <i class="bi bi-1-circle-fill"></i><strong> DATA CALON DEBITUR</strong></h3>
                <p>Isi data utama untuk mempermudah pembukaan rekening. pastikan data diisi dengan benar.</p>
                <hr>
                <div class="kd-form-1">
                    <div class="img_file">
                        <img id="ElementresultImage" width="100%">
                    </div>
                    <div class="form_file">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Calon Debitur</label> <small
                                class="text-danger">*Wajib
                                Diisi</small>
                            <input type="text" class="form-control wajib" id="namacalonDebitur" placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin </label> <small
                                class="text-danger">*Wajib
                                Diisi</small>
                            <select class="form-select" id="jenis_kelamin" required>
                                <option value="" disabled selected>Pilih Kelamin</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label> <small
                                class="text-danger">*Wajib
                                Diisi</small>
                            <input type="address" class="form-control" id="tempatLahir" placeholder="" required>
                            <div id="" class="form-text">
                                <small>Isi sesuai dengan data KTP anda.</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label> <small
                                class="text-danger">*Wajib
                                Diisi</small>
                            <input type="date" class="form-control" id="tanggaLahir" placeholder="" required>
                            <div id="" class="form-text">
                                <small>Contoh : 06-07-2000 /Pastikan Anda Sudah Memiliki KTP</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">No. Telp / WhatsApp </label>
                            <input type="text" class="form-control" id="noWA" placeholder="" maxlength="17"
                                required>
                            <div id="" class="form-text">
                                <small>Contoh : +62xxxxxxxxxx</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Ibu Kandung</label> <small
                                class="text-danger">*Wajib
                                Diisi</small>
                            <input type="text" class="form-control" id="namaIbu" placeholder="" required
                                maxlength="17">
                        </div>
                        <div class="card bg-light mb-3" style="padding: 20px; margin-top: 40px">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">No. KTP </label> <small
                                    class="text-danger">*Wajib
                                    Diisi</small>
                                <input type="text" class="form-control" id="noKTP" placeholder="" required
                                    maxlength="16">
                                <div id="" class="form-text">
                                    <small>Contoh : 3525121312590001 / 16 Digit Angka</small>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="formFile" class="form-label">Upload Foto KTP </label> <small
                                    class="text-danger">*Wajib
                                    Diisi</small>
                                <input class="form-control" type="file" id="fileKTP" accept="image/*" capture="camera"
                                    required>

                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">No. Kartu Keluarga
                                </label> <small class="text-danger">*Wajib
                                    Diisi</small>
                                <input type="text" class="form-control" id="noKK" placeholder="" required
                                    maxlength="16">
                                <div id="" class="form-text">
                                    <small>Contoh : 3525121312590001 / 16 Digit Angka</small>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="formFile" class="form-label">Upload Kartu Keluarga </label> <small
                                    class="text-danger">*Wajib
                                    Diisi</small>
                                <input class="form-control" type="file" id="fileKK" accept="image/*"
                                    capture="camera" required>
                            </div>
                            <div id="" class="form-text">
                                <a style=" color: rgb(0, 4, 252);" data-toggle="modal" data-target="#infoKTPModalCenter">
                                    <i class="bi bi-info-circle-fill"
                                        style="font-size: 0.8rem; color: rgb(44, 4, 187); margin-left: 0.5rem;"></i>
                                    Panduan
                                    Mengambil
                                    Gambar KTP / KK.
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="info_btn">
                    <button class="btn btn-primary" id="buttonNext">
                        <span class="button-text-submit">Lanjut</span>
                        <i class="bi bi-arrow-right-short icon_submit"
                            style="font-size: 1rem; color: white; margin-left: 0.5rem;"></i>

                        {{-- <div class="loader" id="loader_Submit1"></div> --}}
                    </button>
                </div>
            </div>
        </div>
        <div class="kd-form">
            <div class="secondStep">
                <h3> <i class="bi bi-2-circle-fill"></i><strong> DATA PASANGAN
                        <small><i>(Optional)</i></small></strong>
                </h3>
                <p>Isi data utama untuk mempermudah pembukaan rekening. pastikan data diisi dengan benar.</p>
                <hr>
                <div class="cq-form-1">
                    <div class="img_file">
                        <img id="ElementresultImage" width="100%">
                    </div>
                    <div class="form_file">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama <i>Pasangan</i></label>
                            <input type="text" class="form-control" id="namaPasangan" placeholder="">
                            <div id="" class="form-text">
                                <small>Contoh : Toko Bang Gilman</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kelamin_pasangan" class="form-label">Jenis Kelamin <i>Pasangan</i></label>
                            <select class="form-select" id="jeniskelaminPasangan">
                                <option value="" disabled selected>Pilih Kelamin</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tempat Lahir <i>Pasangan</i></label>
                            <input type="address" class="form-control" id="tempatlahirPasangan" placeholder="">
                            <div id="" class="form-text">
                                <small>Contoh : Jl. Basuki Rahmat No.18 Gresik - Jawa Timur</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="tanggallahirPasangan" class="form-label">Tanggal Lahir <i>Pasangan</i></label>
                            <small class="text-danger">*Wajib
                                Diisi</small>
                            <input type="date" class="form-control" id="tanggallahirPasangan" placeholder="">
                            <div id="" class="form-text">
                                <small>Contoh : 06-07-2000 / Pastikan Anda Sudah Memiliki KTP</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="namaibuPasangan" class="form-label">Nama Ibu Kandung <i>Pasangan</i></label>
                            <input type="text" class="form-control" id="namaibuPasangan" placeholder=""
                                maxlength="17">
                            <div id="" class="form-text">
                                <small>Contoh : +62xxxxxxxxxx</small>
                            </div>
                        </div>
                        <div class="card bg-light mb-3" style="padding: 20px; margin-top: 40px">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">No. KTP <i>Pasangan</i></label>
                                <input type="text" class="form-control" id="noKTPPasangan" placeholder=""
                                    maxlength="16">
                                <div id="" class="form-text">
                                    <small>Contoh : 3525121312590001 / 16 Digit Angka</small>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="formFile" class="form-label">Upload Foto KTP <i>Pasangan</i></label>
                                <input class="form-control" type="file" id="fileKTPPasangan" accept="image/*"
                                    capture="camera">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">No. Kartu Keluarga
                                    <i>Pasangan</i></label>
                                <input type="text" class="form-control" id="noKKPasangan" placeholder=""
                                    maxlength="16">
                                <div id="" class="form-text">
                                    <small>Contoh : 3525121312590001 / 16 Digit Angka</small>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="formFile" class="form-label">Upload Kartu Keluarga <i>Pasangan</i></label>
                                <input class="form-control" type="file" id="fileKKPasangan" accept="image/*"
                                    capture="camera">
                            </div>
                            <div id="" class="form-text">
                                <a style=" color: rgb(0, 4, 252);" data-toggle="modal" data-target="#infoKTPModalCenter">
                                    <i class="bi bi-info-circle-fill"
                                        style="font-size: 0.8rem; color: rgb(44, 4, 187); margin-left: 0.5rem;"></i>
                                    Panduan
                                    Mengambil
                                    Gambar KTP / KK.
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info_btn">
                    <button class="btn btn-primary" id="buttonNext">
                        <span class="button-text-submit">Lanjut</span><i class="bi bi-arrow-right-short icon_submit"
                            style="font-size: 1rem; color: white; margin-left: 0.5rem;"></i>
                        {{-- <div class="loader" id="loader_Submit1"></div> --}}
                    </button>
                </div>
            </div>
        </div>
        <div class="kd-form">
            <div class="thirdStep">
                <h3> <i class="bi bi-3-circle-fill"></i><strong> INFORMASI KREDIT</strong>
                </h3>
                <p>Formulir ini berisi data dan informasi yang diperlukan oleh pemberi pinjaman untuk menilai kelayakan
                    peminjam dan memproses permohonan kredit.</p>
                <hr>
                <div class="cq-form-1">
                    <div class="img_file">
                        <img id="ElementresultImage" width="100%">
                    </div>
                    <div class="form_file">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Jumlah yang Diinginkan</label> <small
                                class="text-danger">*Wajib
                                Diisi</small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="text" class="form-control" id="rupiahDiinginkan" required>
                            </div>
                            <div id="" class="form-text">
                                <small>Contoh : 10.000.000 / 20.000.0000 dst</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Akan digunakan untuk apa pinjaman
                                ini </label> <small class="text-danger">*Wajib
                                Diisi</small>
                            <textarea class="form-control" id="keperluan" rows="5" required></textarea>
                            <div id="" class="form-text">
                                <small>Contoh : Keperluan Usaha / Kebutuhan mendesak. / Investasi dalam pendidikan atau
                                    bisnis.</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="jaminan" class="form-label">Agunan / Jaminan</label> <small
                                class="text-danger">*Wajib
                                Diisi</small>
                            <select class="form-select" id="dataJaminan" required>
                                <option value="" disabled selected>Pilih Jenis Jaminan </option>
                            </select>
                            <div id="provDescription" class="form-text">
                                <small>Contoh Agunan Bergerak Adalah Kendaraan Bermotor seperti Mobil, Motor, Kapal, dan
                                    lainnya</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Pekerjaan / Usaha</label> <small
                                class="text-danger">*Wajib
                                Diisi</small>
                            <input type="text" class="form-control" id="pekerjaan" placeholder="" required>
                            <div id="" class="form-text">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Pendapatan Bersih per
                                Bulan</label> <small class="text-danger">*Wajib
                                Diisi</small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="text" class="form-control" id="pendapatanBersih" required>
                            </div>
                            <div id="" class="form-text">
                                <small>Contoh : 10.000.000 / 20.000.0000 dst</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Kode Referral</label>
                            <input type="text" class="form-control" id="kodeReferral" placeholder="" maxlength="17">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Mitra GresiKita</label>
                            <input type="text" class="form-control" id="namaMitraGKita" placeholder=""
                                maxlength="17">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">No. HP Mitra Gresik Pay</label>
                            <input type="text" class="form-control" id="noWAMitra" placeholder="" maxlength="17">
                            <div id="" class="form-text">
                                <small>Contoh : +62xxxxxxxxxx</small>
                            </div>
                        </div>
                        <div class="card bg-light mb-3" style="padding: 20px">

                            {{-- <div class="card bg-light mb-3" style="padding: 20px"> --}}

                            <div class="cf-turnstile" data-sitekey="0x4AAAAAAAKM8R08eNa06_mz"
                                data-callback="javascriptCallback" style="width: 10%" data-theme="light"
                                data-size="normal" data-language="id">
                            </div>
                            {{-- <div class="form-group row">
                                    <label for="captcha" class="col-md-4 col-form-label text-md-right">Captcha</label>
                                    <div class="col-md-6 captcha">
                                        <span>{!! captcha_img() !!}</span>
                                        <button type="button" class="btn btn-danger" class="reload" id="reload">
                                            &#x21bb;
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="captcha" class="col-md-4 col-form-label text-md-right">Enter
                                        Captcha</label>
                                    <div class="col-md-6">
                                        <input id="captcha" type="text" class="form-control"
                                            placeholder="Enter Captcha" name="captcha" required>
                                    </div>
                                </div> --}}
                            {{-- </div> --}}
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" id="PersetujuanSK" required>
                                <label class="form-check-label" for="PersetujuanSK">
                                    <small class="lh-1">Dengan ini saya menyetujui <i> <a href="#"
                                                style="text-decoration: none"> Kebijakan dan
                                                Ketentuan Layanan Pembukaan Tabungan Online</a></i> Bank
                                        Gresik.</small>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info_btn">
                    <button class="btn btn-success btn-cq-submit " id="buttonSubmit">
                        <span class="button-text-submit">Submit</span><i class="bi bi-arrow-right-short icon_submit"
                            style="font-size: 1rem; color: white; margin-left: 0.5rem;"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="infoKTPModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Panduan Mengambil Gambar KTP / KK.</h5>
                </div>
                <div class="modal-body">
                    <div class="info_ktp">
                        <div class="info_img">
                            <h6>Contoh Kartu Tanda Penduduk.</h6>
                            <div class="info_img_1">
                                <img width="100%" class="data-img" src="{{ asset('img/guide_takePicture/KTPC.png') }}">
                            </div>
                            <h6>Contoh Kartu Keluarga.</h6>
                            <div class="info_img_1">
                                <img width="100%" class="data-img" src="{{ asset('img/guide_takePicture/KKC.png') }}">
                            </div>
                        </div>
                        <div class="info_decs">
                            <h6>Perhatikan hal-hal berikut :</h6>
                            <ol>
                                <li>Pastikan kamu upload foto KTP/KK asli. Bukan hasil scan atau fotokopi.</li>
                                <li>Pastikan KTP kamu masih berlaku (khusus non e-KTP).</li>
                                <li>Pastikan KTP/KK terlihat jelas tulisan maupun gambar wajah.</li>
                                <li>Pastikan foto yang kamu upload tidak blur dan pencahayaannya bagus.</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-ligth" id="buttonCloseModal" data-dismiss="modal"
                        style="color:#000000"> <i class="bi bi-x"></i>
                        Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Tambahkan modal Cofirm -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Konfirmasi Pengiriman Data</h5>
                </div>
                <div class="modal-body">
                    <div>Apakah Anda yakin ingin mengirim data?</div>
                    <small style="font-size: 9pt"> Pastikan Data Sudah diisi dengan Baik dan Benar.</small>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-ligth" id="buttonCloseModal"
                        data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="confirmSend">
                        <div class="loader" id="loaderID"></div><span class="textKirim">Kirim</span>
                    </button>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('script-end')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>

    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js?onload=onloadTurnstileCallback" defer></script>
    <script>
        // if using synchronous loading, will be called once the DOM is ready
        window.onloadTurnstileCallback = function() {
            turnstile.render('#example-container', {
                sitekey: '0x4AAAAAAAKM8R08eNa06_mz',
                theme: "light",
                size: "Compact",
                callback: function(token) {
                    console.log(`Challenge Success ${token}`);
                },
            });
        };
    </script>

    <script type="text/javascript">
        $('#reload').click(function() {
            $.ajax({
                type: 'GET',
                url: "{{ route('get.reloadCaptcha') }}",
                success: function(data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    </script>

    {{-- NavControl --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const formSteps = document.querySelectorAll(".kd-form");
            const nextButtons = document.querySelectorAll(".info_btn #buttonNext");
            const submitButton = document.querySelectorAll(".info_btn #buttonSubmit");

            nextButtons.forEach((button, index) => {

                button.addEventListener("click", function() {
                    const currentStep = formSteps[index];
                    if ((index === 0 || index === 2) && !validateForm(currentStep)) {
                        alert("Harap isi Semua Form Sebelum Melanjutkan.");
                        window.scrollTo({
                            top: 0,
                            behavior: 'smooth'
                        });
                        return; // Jika form 1 atau 3 tidak valid, jangan lanjutkan
                    }

                    currentStep.classList.remove("active");
                    formSteps[index + 1].classList.add("active");
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });

                });
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            function validateForm(step) {
                const inputs = step.querySelectorAll(
                    "input:required, select:required, textarea:required, #PersetujuanSK ,#gcha"
                ); // Menyesuaikan dengan input dan select
                let isValid = true;

                inputs.forEach(input => {
                    if (input.type === "checkbox") {
                        if (!input.checked) {
                            isValid = false;
                            input.classList.add("is-invalid");
                            input.addEventListener("change", function() {
                                if (input.checked) {
                                    input.classList.remove("is-invalid");
                                }
                            });
                        } else {
                            input.classList.remove("is-invalid");
                        }
                    } else if (input.value.trim() === "") {
                        isValid = false;
                        input.classList.add("is-invalid");
                        input.addEventListener("input", function() {
                            if (input.value.trim() !== "") {
                                input.classList.remove("is-invalid");
                            }
                        });
                    } else {
                        input.classList.remove("is-invalid");
                    }
                });

                return isValid;
            }
            submitButton.forEach(button => {
                button.addEventListener("click", function(event) {
                    event.preventDefault(); // Menghentikan perilaku default tombol submit

                    // Validasi form terakhir sebelum mengirim data
                    const lastStep = formSteps[formSteps.length - 1];
                    if (!validateForm(lastStep)) {
                        alert("Harap isi Semua Form Terakhir Dengan Benar.");
                        return;
                    } else {
                        showModal();
                    }


                    function showModal() {
                        $('#confirmationModal').modal('show');
                    }
                    // Event listener untuk tombol "confirmSend"
                    $(document).ready(function() {
                        $('#confirmSend').on('click', function() {
                            $('#loaderID').show();
                            const closeButton = document.querySelector(
                                "#buttonCloseModal");
                            const yakinButton = document.querySelector(
                                "#confirmSend");
                            const textKirim = document.querySelector(
                                ".textKirim");
                            textKirim.textContent =
                                'Mengirim Data...';

                            closeButton.classList.add("disabled");
                            yakinButton.classList.add("disabled");
                            // Mengumpulkan data dari semua langkah
                            var csrfToken = $('meta[name="csrf-token"]').attr(
                                'content');
                            // Membuat objek FormData yang akan diisi dengan data
                            var formData = new FormData();

                            // Menambahkan token CSRF ke dalam FormData
                            formData.append('_token', csrfToken);
                            formSteps.forEach((step, index) => {
                                const inputs = step.querySelectorAll(
                                    "input, select, textarea, #PersetujuanSK"
                                );

                                inputs.forEach(input => {
                                    formData.append(input.id, input
                                        .value);
                                });
                            });
                            // Mengkonversi FormData ke dalam format string JSON
                            var formDataJSON = JSON.stringify(Object.fromEntries(
                                formData.entries()));
                            var encryptedData = CryptoJS.AES.encrypt(formDataJSON,
                                    "sdada")
                                .toString();
                            var decryptedBytes = CryptoJS.AES.decrypt(encryptedData,
                                "sdada");
                            var decryptedData = decryptedBytes.toString(CryptoJS.enc
                                .Utf8);

                            $.ajax({
                                headers: {
                                    'X-CSRF-TOKEN': $(
                                        'meta[name="csrf-token"]').attr(
                                        'content')
                                },
                                method: 'POST',
                                url: "{{ route('post.dataKredit.API') }}",
                                data: {
                                    Data: encryptedData,
                                },
                                dataType: 'json',
                                success: function(response) {
                                    // Menggunakan data terenkripsi yang diterima dari Laravel
                                    // console.log(
                                    //     'Sebelum di Encrypted Data:',
                                    //     decryptedData);
                                    // console.log('encryptedData:',
                                    //     encryptedData);
                                    // alert(
                                    //     "Data Anda Berhasil Terkirim: "
                                    //     );
                                    window.location.href =
                                        "{{ route('success.dataKredit.API') }}";
                                    $('#loaderID').hide();
                                },
                                error: function(error) {
                                    // console.log('Error:', error);
                                    alert("Terjadi kesalahan saat mengirim data: " +
                                        error
                                        .statusText);
                                }
                            });
                        });
                    });

                });
            });
        });
    </script>
    {{-- Change Number Input KTP and NoPhone --}}
    <script>
        const ktpInput = document.getElementById("noKTP");
        const no_waInput = document.getElementById("noWA");

        ktpInput.addEventListener("input", formatToNumber);
        no_waInput.addEventListener("input", formatPhoneNumber);

        function formatToNumber(event) {
            const inputElement = event.target;
            let inputValue = inputElement.value;

            // Hanya menghapus karakter selain angka
            inputValue = inputValue.replace(/[^0-9]/g, '');
            inputElement.value = inputValue;
        }

        function formatPhoneNumber(event) {
            const inputElement = event.target;
            let inputValue = inputElement.value;

            // Menghapus semua karakter kecuali angka
            // inputValue = inputValue.replace(/[^0-9]/g, '');

            // Jika input diawali dengan "08", ubah menjadi "+62"
            if (inputValue.startsWith("08")) {
                inputValue = "+628" + inputValue.slice(2);
            }

            inputElement.value = inputValue;
        }
    </script>
    {{-- Maksimum (17 tahun yang lalu) --}}
    <script>
        // Menghitung tanggal maksimum (17 tahun yang lalu dari hari ini)
        var today = new Date();
        var maxDate = new Date(today);
        maxDate.setFullYear(maxDate.getFullYear() - 17);

        // Format tanggal ke dalam string 'YYYY-MM-DD' untuk input tanggal
        var maxDateString = maxDate.toISOString().slice(0, 10);

        // Set nilai max pada elemen input tanggal
        document.getElementById('tanggaLahir').max = maxDateString;
        document.getElementById('tanggallahirPasangan').max = maxDateString;
        // document.getElementById('tanggal').value = maxDateString;
        // document.getElementById('tanggal1').value = maxDateString;
    </script>
    {{-- Rupiah --}}
    <script>
        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? '' + prefix + rupiah : '');
        }

        /* Event listener untuk input pertama */
        var ubahRupiah1 = document.getElementById('rupiahDiinginkan');
        ubahRupiah1.addEventListener('keyup', function(e) {
            this.value = formatRupiah(this.value, '');
        });

        /* Event listener untuk input kedua */
        var ubahRupiah2 = document.getElementById('pendapatanBersih');
        ubahRupiah2.addEventListener('keyup', function(e) {
            this.value = formatRupiah(this.value, '');
        });
    </script>
    {{-- APIdataJaminan --}}
    <script>
        $(document).ready(function() {
            $.ajax({
                url: "{{ route('get.dataJaminan.API') }}",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    var kategorySelect = $('#dataJaminan');
                    $.each(data, function(index, jaminan) {
                        kategorySelect.append($('<option>', {
                            value: jaminan.kode_jaminan,
                            text: jaminan
                                .nama_jaminan // Ganti dengan nama field yang sesuai di model Kantor
                        }));
                    });
                }
            });
        });
    </script>
    <script></script>
@endpush
