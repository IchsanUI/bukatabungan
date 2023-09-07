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

        @media (max-width: 1000px) {
            .form-section {
                font-size: 10.5pt;
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
                border-radius: 0px;
                border: 0px solid transparent;
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
                            <input type="text" class="form-control" id="nama_pemilik" placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <label for="kab" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="kab" required>
                                <option value="" disabled selected>Pilih Kelamin</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label> <small
                                class="text-danger">*Wajib
                                Diisi</small>
                            <input type="address" class="form-control" id="alamat" placeholder="" required>
                            <div id="" class="form-text">
                                <small>Isi sesuai dengan data KTP anda.</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label> <small
                                class="text-danger">*Wajib
                                Diisi</small>
                            <input type="date" class="form-control" id="tanggal" placeholder="">
                            <div id="" class="form-text">
                                <small>Contoh : 06-07-2000 /Pastikan Anda Sudah Memiliki KTP</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">No. Telp / WhatsApp </label>
                            <input type="text" class="form-control" id="no_wa" placeholder="" required
                                maxlength="17">
                            <div id="" class="form-text">
                                <small>Contoh : +62xxxxxxxxxx</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Ibu Kandung</label> <small
                                class="text-danger">*Wajib
                                Diisi</small>
                            <input type="text" class="form-control" id="no_wa" placeholder="" required
                                maxlength="17">
                        </div>
                        <div class="card bg-light mb-3" style="padding: 20px; margin-top: 40px">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">No. KTP </label> <small
                                    class="text-danger">*Wajib
                                    Diisi</small>
                                <input type="text" class="form-control" id="ktp" placeholder="" required
                                    maxlength="16">
                                <div id="" class="form-text">
                                    <small>Contoh : 3525121312590001 / 16 Digit Angka</small>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="formFile" class="form-label">Upload Foto KTP </label> <small
                                    class="text-danger">*Wajib
                                    Diisi</small>
                                <input class="form-control" type="file" id="formFile" accept="image/*" capture="camera">

                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">No. Kartu Keluarga
                                </label> <small class="text-danger">*Wajib
                                    Diisi</small>
                                <input type="text" class="form-control" id="ktp" placeholder="" required
                                    maxlength="16">
                                <div id="" class="form-text">
                                    <small>Contoh : 3525121312590001 / 16 Digit Angka</small>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="formFile" class="form-label">Upload Kartu Keluarga </label> <small
                                    class="text-danger">*Wajib
                                    Diisi</small>
                                <input class="form-control" type="file" id="formFile" accept="image/*"
                                    capture="camera">
                            </div>
                            <div id="" class="form-text">
                                <a href=""> <i class="bi bi-info-circle-fill"
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
                        <div class="loader" id="loader_Submit1"></div>
                    </button>
                </div>
            </div>
        </div>
        <div class="kd-form">
            <div class="secondStep">
                <h3> <i class="bi bi-2-circle-fill"></i><strong> DATA PASANGAN <small><i>(Optional)</i></small></strong>
                </h3>
                <p>Isi data utama untuk mempermudah pembukaan rekening. pastikan data diisi dengan benar.</p>
                <hr>
                <div class="cq-form-1">
                    <div class="img_file">
                        <img id="ElementresultImage" width="100%">
                    </div>
                    <div class="form_file">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Pasangan</label>
                            <input type="text" class="form-control" id="nama_pemilik" placeholder="" required>
                            <div id="" class="form-text">
                                <small>Contoh : Toko Bang Gilman</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="kab" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="kab" required>
                                <option value="" disabled selected>Pilih Kelamin</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                            <input type="address" class="form-control" id="alamat" placeholder="" required>
                            <div id="" class="form-text">
                                <small>Contoh : Jl. Basuki Rahmat No.18 Gresik - Jawa Timur</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label> <small
                                class="text-danger">*Wajib
                                Diisi</small>
                            <input type="date" class="form-control" id="tanggal1" placeholder="">
                            <div id="" class="form-text">
                                <small>Contoh : 06-07-2000 / Pastikan Anda Sudah Memiliki KTP</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Ibu Kandung</label>
                            <input type="text" class="form-control" id="no_wa" placeholder="" required
                                maxlength="17">
                            <div id="" class="form-text">
                                <small>Contoh : +62xxxxxxxxxx</small>
                            </div>
                        </div>
                        <div class="card bg-light mb-3" style="padding: 20px; margin-top: 40px">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">No. KTP <i>Pasangan</i></label>
                                <input type="text" class="form-control" id="ktp" placeholder="" required
                                    maxlength="16">
                                <div id="" class="form-text">
                                    <small>Contoh : 3525121312590001 / 16 Digit Angka</small>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="formFile" class="form-label">Upload Foto KTP <i>Pasangan</i></label>
                                <input class="form-control" type="file" id="formFile" accept="image/*"
                                    capture="camera">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">No. Kartu Keluarga
                                    <i>Pasangan</i></label>
                                <input type="text" class="form-control" id="ktp" placeholder="" required
                                    maxlength="16">
                                <div id="" class="form-text">
                                    <small>Contoh : 3525121312590001 / 16 Digit Angka</small>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="formFile" class="form-label">Upload Kartu Keluarga <i>Pasangan</i></label>
                                <input class="form-control" type="file" id="formFile" accept="image/*"
                                    capture="camera">
                            </div>
                            <div id="" class="form-text">
                                <a href=""> <i class="bi bi-info-circle-fill"
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
                        <div class="loader" id="loader_Submit1"></div>
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
                                <input type="text" class="form-control" id="ubahRupiah1" required>
                            </div>
                            <div id="" class="form-text">
                                <small>Contoh : 10.000.000 / 20.000.0000 dst</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Akan digunakan untuk apa pinjaman
                                ini </label>
                            <input type="text" class="form-control" id="nama_pemilik" placeholder="" required>
                            <div id="" class="form-text">
                                <small>Contoh : Keperluan Usaha / Kebutuhan mendesak. / Investasi dalam pendidikan atau
                                    bisnis.</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Agunan / Jaminan</label> <small
                                class="text-danger">*Wajib
                                Diisi</small>
                            <input type="address" class="form-control" id="alamat" placeholder="" required>
                            <div id="" class="form-text">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Pekerjaan / Usaha</label> <small
                                class="text-danger">*Wajib
                                Diisi</small>
                            <input type="text" class="form-control" id="email" placeholder="" required>
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
                                <input type="text" class="form-control" id="ubahRupiah2" required>
                            </div>
                            <div id="" class="form-text">
                                <small>Contoh : 10.000.000 / 20.000.0000 dst</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Kode Referral</label>
                            <input type="text" class="form-control" id="no_wa" placeholder="" required
                                maxlength="17">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Mitra Gresik Pay</label>
                            <input type="text" class="form-control" id="no_wa" placeholder="" required
                                maxlength="17">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">No. HP Mitra Gresik Pay</label>
                            <input type="text" class="form-control" id="no_wa" placeholder="" required
                                maxlength="17">
                            <div id="" class="form-text">
                                <small>Contoh : +62xxxxxxxxxx</small>
                            </div>
                        </div>
                        <div class="card bg-light mb-3" style="padding: 20px">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <small class="lh-1">Dengan ini saya menyetujui <i> <a href="#"
                                                style="text-decoration: none"> <b>Kebijakan dan
                                                    Ketentuan Layanan Pembukaan Tabungan Online</b></a></i> Bank
                                        Gresik.</small>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info_btn">
                    <button class="btn btn-success btn-cq-submit" id="buttonSubmit">
                        <span class="button-text-submit">Submit</span><i class="bi bi-arrow-right-short icon_submit"
                            style="font-size: 1rem; color: white; margin-left: 0.5rem;"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script-end')
    {{-- NavControl --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const formSteps = document.querySelectorAll(".kd-form");
            const nextButtons = document.querySelectorAll(".info_btn #buttonNext");
            const backButton = document.querySelectorAll(".info_btn .btn-back");

            nextButtons.forEach((button, index) => {
                button.addEventListener("click", function() {
                    const currentStep = formSteps[index];
                    if (validateForm(currentStep)) {
                        currentStep.classList.remove("active");
                        formSteps[index + 1].classList.add("active");
                    } else {
                        alert("Harap isi semua form sebelum melanjutkan.");
                    }
                });
            });

            backButton.forEach((button, index) => {
                button.addEventListener("click", function() {
                    const currentStep = document.querySelector(".kd_form.active");
                    const currentStepIndex = Array.from(formSteps).indexOf(currentStep);

                    currentStep.classList.remove("active");
                    formSteps[currentStepIndex - 1].classList.add("active");
                });
            });

            function validateForm(step) {
                const inputs = step.querySelectorAll("input, select"); // Menyesuaikan dengan input dan select
                let isValid = true;

                inputs.forEach(input => {
                    if (input.value.trim() === "") {
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
        });
    </script>
    {{-- Change Number Input KTP and NoPhone --}}
    <script>
        const ktpInput = document.getElementById("ktp");
        const no_waInput = document.getElementById("no_wa");

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
        document.getElementById('tanggal').max = maxDateString;
        document.getElementById('tanggal1').max = maxDateString;
        document.getElementById('tanggal').value = maxDateString;
        document.getElementById('tanggal1').value = maxDateString;
    </script>
    {{-- Ruoiah --}}
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
        var ubahRupiah1 = document.getElementById('ubahRupiah1');
        ubahRupiah1.addEventListener('keyup', function(e) {
            this.value = formatRupiah(this.value, '');
        });

        /* Event listener untuk input kedua */
        var ubahRupiah2 = document.getElementById('ubahRupiah2');
        ubahRupiah2.addEventListener('keyup', function(e) {
            this.value = formatRupiah(this.value, '');
        });
    </script>
@endpush
