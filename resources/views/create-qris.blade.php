@extends('template')
@push('styles')
    <style>
        body {
            background-image: url("{{ asset('img/Back3.jpg') }}");
            background-position: center;
            background-size: cover;
        }

        .cq-section {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }

        .cq-form {
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

        .with_back {
            gap: 20px;
        }

        #map {
            width: 100%;
            height: 400px;
            /* Atur sesuai kebutuhan */
        }

        .btn-cq-submit {
            background: rgb(17, 168, 0);
            background: linear-gradient(71deg, rgba(17, 168, 0, 1) 100%, rgba(0, 255, 98, 1) 100%);
        }

        .cq-form {
            display: none;
        }

        .cq-form.active {
            display: block;
        }

        .btn-back {
            background: rgb(238, 238, 238);
            background: linear-gradient(90deg, rgba(238, 238, 238, 1) 0%, rgba(226, 226, 226, 1) 100%);
        }

        #buttonCloseModal {
            background: rgb(238, 238, 238);
            background: linear-gradient(90deg, rgba(238, 238, 238, 1) 0%, rgba(226, 226, 226, 1) 100%);
        }

        @media (max-width: 1000px) {
            .cq-section {
                font-size: 10.5pt;
            }

            .cq-form {
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

            /* .cq-form {
                                                                                                                                                                                                    display: none;
                                                                                                                                                                                                }

                                                                                                                                                                                                .cq-form.active {
                                                                                                                                                                                                    display: block;
                                                                                                                                                                                                } */
        }
    </style>
@endpush
@section('content')
    <div class="cq-section">
        <div class="cq-form active">
            <div class="cq-first">
                <h3> <i class="bi bi-1-circle-fill"></i><strong> Indentitas Pemilik</strong></h3>
                <p>Isi data utama untuk mempermudah pembukaan rekening. pastikan data diisi dengan benar.</p>
                <hr>
                <div class="cq-form-1">
                    <div class="img_file">
                        <img id="ElementresultImage" width="100%">
                    </div>
                    <div class="form_file">

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">No. Rekening Bank Gresik</label>
                            <input type="text" class="form-control" id="norek_bg" placeholder="" maxlength="12"
                                required>
                            <div id="" class="form-text">
                                <small>Contoh : 01.10.001234.01</small>
                            </div>
                        </div>
                        <div class="alert alert-info" role="alert">
                            <i class="bi bi-info-circle-fill"></i> <small>Jika Anda Belum Memiliki Rekening
                                Bank Gresik. <a href="{{ url('digital-saving') }}"><i>Daftar
                                        Sekarang.</i></a></small>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Pemilik </label>
                            <input type="text" class="form-control" id="nama_pemilik" placeholder="" required>
                            <div id="" class="form-text">
                                <small>Contoh : Toko Bang Gilman</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">No. KTP</label>
                            <input type="text" class="form-control" id="ktp" placeholder="" required
                                maxlength="16">
                            <div id="" class="form-text">
                                <small>Contoh : 3525121312590001 / 16 Digit Angka</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                            <input type="address" class="form-control" id="alamat" placeholder="" required>
                            <div id="" class="form-text">
                                <small>Contoh : Jl. Basuki Rahmat No.18 Gresik - Jawa Timur</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="" class="form-control" id="email" placeholder="" required>
                            <div id="" class="form-text">
                                <small>Contoh : bg@gmail.com</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nomor WhatsApp</label>
                            <input type="text" class="form-control" id="no_wa" placeholder="" required
                                maxlength="17">
                            <div id="" class="form-text">
                                <small>Contoh : +62xxxxxxxxxx</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="prov" class="form-label">Provinsi</label>
                            <select class="form-select" id="prov" required>
                                <option value="" disabled selected>Pilih Provinsi</option>
                            </select>
                            <div id="provDescription" class="form-text">
                                <small>Pilih provinsi tempat Anda tinggal.</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="kab" class="form-label">Kabupaten / Kota</label>
                            <select class="form-select" id="kab" required>
                                <option value="" disabled selected>Pilih Kabupaten / Kota</option>
                            </select>
                            <div id="kabDescription" class="form-text">
                                <small>Pilih kabupaten atau kota tempat Anda tinggal.</small>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="kode_pos" class="form-label">Kode Pos</label>
                            <input type="text" class="form-control" id="kode_pos" placeholder="" maxlength="5"
                                required>
                            <div id="" class="form-text">
                                <small></small>
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
        <div class="cq-form ">
            <div class="cq-second">
                <h3> <i class="bi bi-2-circle-fill"></i><strong> Data Merchant</strong></h3>
                <p>Isi Data Merchant untuk mempermudah penerbitan QRIS anda. pastikan data diisi dengan benar.</p>
                <hr>
                <div class="cq-form-2">
                    <div class="img_file">
                        <img id="ElementresultImage" width="100%">
                    </div>
                    <div class="form_file">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Merchant / Nama Display</label>
                            <input type="text" class="form-control" id="nama_merchant" placeholder="" required>
                            <div id="" class="form-text">
                                <small>Contoh : Toko Kelonotong Haji Gilman</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="prov" class="form-label">Merchant Category</label>
                            <select class="form-select" id="kategori_merchant" required>
                                <option value="" disabled selected>Pilih Merchant Category</option>
                            </select>
                            <div id="provDescription" class="form-text">
                                <small>Pilih provinsi tempat Anda tinggal.</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="prov" class="form-label">Merchant Type</label>
                            <select class="form-select" id="type_merchant" required>
                                <option value="" disabled selected>Pilih Merchant Type</option>
                                <option value="BU">Badan Usaha</option>
                                <option value="PR">Perorangan</option>
                            </select>
                            <div id="provDescription" class="form-text">
                                <small>Pilih provinsi tempat Anda tinggal.</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="prov" class="form-label">Merchant Criteria</label>
                            <select class="form-select" id="kriteria_merchant" required>
                                <option value="" disabled selected>Pilih Merchant Criteria</option>
                                <option value="UKE">Usaha Kecil</option>
                                <option value="UME">Usaha Menengah</option>
                                <option value="UBE">Usaha Besar</option>
                            </select>
                            <div id="provDescription" class="form-text">
                                <small>Pilih provinsi tempat Anda tinggal.</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nomor NPWP</label>
                            <input type="text" class="form-control" id="no_npwp" placeholder="" maxlength="15"
                                required>
                            <div id="" class="form-text">

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Koordinat Google Maps</label>
                            <input type="text" class="form-control" id="no_wa" placeholder="" required>
                        </div>

                        <div id="map"></div>
                        <div id="" class="form-text">
                            <small>Contoh : bg@gmail.com</small>
                        </div>

                    </div>
                </div>
                <div class="info_btn with_back">
                    <button class="btn btn-light btn-back" id="buttonBack">
                        <i class="bi bi-arrow-left-short icon_submit"
                            style="font-size: 1rem; color: rgb(0, 0, 0); margin-right: 0.5rem;"></i>
                        <span class="button-text-submit">Kembali </span>
                    </button>
                    <button class="btn btn-primary" id="buttonNext">
                        <span class="button-text-submit">Lanjut</span><i class="bi bi-arrow-right-short icon_submit"
                            style="font-size: 1rem; color: white; margin-left: 0.5rem;"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="cq-form">
            <div class="cq-third">
                <h3> <i class="bi bi-3-circle-fill"></i><strong> Upload Data Legalitas</strong></h3>
                <p>Isi Data Legalitas untuk mempermudah penerbitan QRIS anda,pastikan data diisi dengan benar.</p>
                <hr>
                <div class="cq-form-3">
                    <div class="form_file mt-3">
                        <div class="mb-4">
                            <label for="formFile" class="form-label">Upload KTP</label>
                            <input class="form-control" type="file" id="formFile" accept="image/*" capture="camera"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="formFile" class="form-label">Upload Foto Selfie + KTP</label>
                            <input class="form-control" type="file" id="formFile" accept="image/*" capture="user"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="formFile" class="form-label">Upload Foto Lokasi Merchant</label>
                            <input class="form-control" type="file" id="formFile" accept="image/*"
                                capture="camera"required>
                        </div>
                        <div class="mb-4">
                            <label for="formFile" class="form-label">Upload NPWP</label>
                            <input class="form-control" type="file" id="formFile" accept="image/*" capture="camera"
                                required>
                        </div>
                        <div class="card bg-light mb-3" style="padding: 20px">
                            {{-- <div class="cf-turnstile" data-sitekey="0x4AAAAAAAKM8R08eNa06_mz"
                                data-callback="javascriptCallback" style="width: 10%" data-theme="light"
                                data-size="normal" data-language="id">
                            </div> --}}
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
                <div class="info_btn with_back">
                    <button class="btn btn-light btn-back" id="buttonBack">
                        <i class="bi bi-arrow-left-short icon_submit"
                            style="font-size: 1rem; color: rgb(0, 0, 0); margin-right: 0.5rem;"></i>
                        <span class="button-text-submit">Kembali </span>
                    </button>
                    <button class="btn btn-success btn-cq-submit" id="buttonSubmit">
                        <span class="button-text-submit">Submit</span><i class="bi bi-arrow-right-short icon_submit"
                            style="font-size: 1rem; color: white; margin-left: 0.5rem;"></i>
                    </button>
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
    {{-- Turnstile --}}
    {{-- <script src="https://challenges.cloudflare.com/turnstile/v0/api.js?onload=onloadTurnstileCallback" defer></script>
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
    </script> --}}


    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>

    {{-- NavControl --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const formSteps = document.querySelectorAll(".cq-form");
            const nextButtons = document.querySelectorAll(".info_btn #buttonNext");
            const submitButtons = document.querySelectorAll(".info_btn #buttonSubmit");
            const backButton = document.querySelectorAll(".info_btn .btn-back");

            nextButtons.forEach((button, index) => {
                button.addEventListener("click", function() {
                    const currentStep = formSteps[index];
                    if (validateForm(currentStep)) {
                        currentStep.classList.remove("active");
                        formSteps[index + 1].classList.add("active");
                        window.scrollTo({
                            top: 0,
                            behavior: 'smooth'
                        });
                    } else {
                        alert("Harap isi semua form sebelum melanjutkan.");
                        window.scrollTo({
                            top: 0,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            backButton.forEach((button, index) => {
                button.addEventListener("click", function() {
                    const currentStep = document.querySelector(".cq-form.active");
                    const currentStepIndex = Array.from(formSteps).indexOf(currentStep);

                    currentStep.classList.remove("active");
                    formSteps[currentStepIndex - 1].classList.add("active");
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            });

            function validateForm(step) {
                const inputs = step.querySelectorAll(
                    "input:required, select:required, textarea:required, #PersetujuanSK"
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
            submitButtons.forEach(button => {
                button.addEventListener("click", function(event) {
                    event.preventDefault();

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
                    $(document).ready(function() {
                        $('#confirmSend').on('click', function() {
                            var csrfToken = $('meta[name="csrf-token"]').attr(
                                'content');
                            // Membuat objek FormData yang akan diisi dengan data
                            var formData = new FormData();
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
                            var formDataJSON = JSON.stringify(Object.fromEntries(
                                formData.entries()));

                            $.ajax({
                                headers: {
                                    'X-CSRF-TOKEN': $(
                                        'meta[name="csrf-token"]').attr(
                                        'content')
                                },
                                type: 'POST',
                                url: "{{ route('post.dataQRIS.API') }}", // Gantilah 'URL_tujuan' dengan URL endpoint tujuan
                                data: {
                                    data: formDataJSON
                                },
                                dataType: 'json',
                                success: function(response) {
                                    // Tindakan yang perlu dilakukan setelah berhasil mengirim data
                                    console.log(response);
                                    // Misalnya, menampilkan pesan sukses atau mengarahkan pengguna ke halaman lain
                                },
                                error: function(xhr, status, error) {
                                    // Tindakan yang perlu dilakukan jika terjadi kesalahan
                                    console.error(error);
                                    // Misalnya, menampilkan pesan kesalahan kepada pengguna
                                }
                            });


                        });
                    });


                });
            });
        });
    </script>

    {{-- confForMap --}}
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUJ_0vn4u0eFDwQlk_340b1Uy5dyiwlJI&callback=initMap" async
        defer></script>
    <script>
        function initMap() {
            const map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: -7.154741166139677,
                    lng: 112.6569853141966
                }, // Koordinat pusat peta
                zoom: 8, // Level zoom
            });
        }
    </script>

    {{-- APIKabProv --}}
    <script>
        async function populateDropdown(elementId, apiUrl) {
            const dropdown = document.getElementById(elementId);
            try {
                const response = await fetch(apiUrl);
                const data = await response.json();

                data.forEach(item => {
                    const option = document.createElement("option");
                    option.value = item.id;
                    option.textContent = item.name;
                    dropdown.appendChild(option);
                });
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        }

        const provDropdown = document.getElementById("prov");
        const kabDropdown = document.getElementById("kab");

        provDropdown.addEventListener("change", async () => {
            const selectedProvId = provDropdown.value;
            kabDropdown.innerHTML = ""; // Menghapus opsi sebelumnya

            if (selectedProvId) {
                const kabUrl =
                    `https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${selectedProvId}.json`;
                populateDropdown("kab", kabUrl);
            }
        });

        populateDropdown("prov", "https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json");
    </script>

    {{-- <script>
        const buttonNext1 = document.getElementById("buttonNext1");
        const noWaInput = document.getElementById("kode_pos"); // Ganti dengan ID input nomor WhatsApp

        // Fungsi untuk memeriksa apakah input nomor WhatsApp sudah diisi
        function checkUserInput() {
            if (noWaInput.value.trim() === "") {
                buttonNext1.disabled = true;
            } else {
                buttonNext1.disabled = false;
            }
        }

        // Menambahkan event listener untuk memeriksa input nomor WhatsApp setiap kali nilainya berubah
        noWaInput.addEventListener("input", checkUserInput);
    </script> --}}
    {{-- NumberRekening --}}
    <script>
        const norekInput = document.getElementById("norek_bg");

        norekInput.addEventListener("input", function() {
            const inputValue = norekInput.value;
            const formattedValue = formatRekeningNumber(inputValue);
            norekInput.value = formattedValue;
        });

        function formatRekeningNumber(value) {
            const cleanValue = value.replace(/\D/g, "");

            // Menggabungkan nilai dengan tanda titik pada posisi yang diinginkan
            const formattedValue = cleanValue.replace(/^(\d{2})(\d{2})(\d{6})(\d{2})$/, "$1.$2.$3.$4");

            return formattedValue;
        }
    </script>
    {{-- CatergoryMerchFetch --}}
    <script>
        $(document).ready(function() {
            $.ajax({
                url: "{{ route('get.categoryMerchant.options') }}",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    var kategorySelect = $('#kategori_merchant');
                    $.each(data, function(index, category) {
                        kategorySelect.append($('<option>', {
                            value: category.id,
                            text: category
                                .category // Ganti dengan nama field yang sesuai di model Kantor
                        }));
                    });
                }
            });
        });
    </script>

    {{-- Change Number Input --}}
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
@endpush
