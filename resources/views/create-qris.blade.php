@extends('template')
@push('styles')
    <style>
        body {
            background-position: center;
            background-size: cover;
        }

        .cq-form {
            display: flex;
            flex-direction: column;
            padding: 30px;
            margin-bottom: 50px;
            justify-content: center;
            align-items: center;
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

        .step_2 {
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
    </style>
@endpush
@section('content')
    <div class="cq-form active">
        <div class="cq-first">
            <h3><strong>Indentitas Pemilik</strong></h3>
            <p>Isi data utama untuk mempermudah pembukaan rekening. pastikan data diisi dengan benar.</p>
            <div class="cq-form-1">
                <div class="img_file">
                    <img id="ElementresultImage" width="100%">
                </div>
                <div class="form_file">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">No. Rekening Bank Gresik</label>
                        <input type="text" class="form-control" id="norek_bg" placeholder="" maxlength="12">
                        <div id="" class="form-text">
                            <small>Contoh : 01.10.001234.01</small>
                        </div>
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
                        <input type="text" class="form-control" id="ktp" placeholder="" required maxlength="16">
                        <div id="" class="form-text">
                            <small>Contoh : 3525121312590001</small>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                        <input type="address" class="form-control" id="alamat" placeholder="" required>
                        <div id="" class="form-text">
                            <small>Contoh : Jl. Basuki Rahmat No.18</small>
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
                        <input type="number" class="form-control" id="no_wa" placeholder="" required>
                        <div id="" class="form-text">
                            <small>Contoh : 62xxxxxxxxxx</small>
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
                        <label for="exampleFormControlInput1" class="form-label">Kode Pos</label>
                        <input type="text" class="form-control" id="kode_pos" placeholder="" required maxlength="5">
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
            <h3><strong>Data Merchant</strong></h3>
            <p>Isi Data Merchant untuk mempermudah penerbitan QRIS anda. pastikan data diisi dengan benar.</p>
            <div class="cq-form-1">
                <div class="img_file">
                    <img id="ElementresultImage" width="100%">
                </div>
                <div class="form_file">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Merchant / Nama Display</label>
                        <input type="text" class="form-control" id="nama_merchant" placeholder="">
                        <div id="" class="form-text">
                            <small>Contoh : 01.10.001234.01</small>
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
                            <option value="">Badan Usaha</option>
                            <option value="">Perorangan</option>
                        </select>
                        <div id="provDescription" class="form-text">
                            <small>Pilih provinsi tempat Anda tinggal.</small>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="prov" class="form-label">Merchant Criteria</label>
                        <select class="form-select" id="kriteria_merchant" required>
                            <option value="" disabled selected>Pilih Merchant Criteria</option>
                            <option value="">Usaha Kecil</option>
                            <option value="">Usaha Menengah</option>
                            <option value="">Usaha Besar</option>
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
            <div class="info_btn step_2">
                <button class="btn btn-light btn-back" id="buttonBack">
                    <i class="bi bi-arrow-left-short icon_submit"
                        style="font-size: 1rem; color: rgb(0, 0, 0); margin-right: 0.5rem;"></i>
                    <span class="button-text-submit">Kembali </span>
                    <div class="loader" id="loader_Submit"></div>
                </button>
                <button class="btn btn-primary" id="buttonNext">
                    <span class="button-text-submit">Lanjut</span><i class="bi bi-arrow-right-short icon_submit"
                        style="font-size: 1rem; color: white; margin-left: 0.5rem;"></i>
                    <div class="loader" id="loader_Submit"></div>
                </button>
            </div>
        </div>
    </div>
    <div class="cq-form">
        <div class="cq-third">
            <h3><strong>Upload Data Legalitas</strong></h3>
            <p>Isi Data Legalitas untuk mempermudah penerbitan QRIS anda,pastikan data diisi dengan benar.</p>
            <div class="cq-form-1">
                <div class="form_file mt-5">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload KTP</label>
                        <input class="form-control" type="file" id="formFile" accept="image/*" capture="camera">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Foto Selfie + KTP</label>
                        <input class="form-control" type="file" id="formFile" accept="image/*" capture="user">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Foto Lokasi Merchant</label>
                        <input class="form-control" type="file" id="formFile" accept="image/*" capture="camera">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload NPWP</label>
                        <input class="form-control" type="file" id="formFile" accept="image/*" capture="camera">
                    </div>
                </div>
            </div>
            <div class="info_btn">
                <button class="btn btn-success btn-cq-submit" id="buttonSubmit">
                    <span class="button-text-submit">Submit</span><i class="bi bi-arrow-right-short icon_submit"
                        style="font-size: 1rem; color: white; margin-left: 0.5rem;"></i>
                    <div class="loader" id="loader_Submit"></div>
                </button>
            </div>
        </div>
    </div>
@endsection
@push('script-end')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const formSteps = document.querySelectorAll(".cq-form");
            const nextButtons = document.querySelectorAll(".info_btn #buttonNext");
            const backButton = document.querySelector(".info_btn #buttonBack");

            nextButtons.forEach((button, index) => {
                button.addEventListener("click", function() {
                    formSteps[index].classList.remove("active");
                    formSteps[index + 1].classList.add("active");
                });
            });

            backButton.addEventListener("click", function() {
                const currentStep = document.querySelector(".cq-form.active");
                const currentStepIndex = Array.from(formSteps).indexOf(currentStep);

                currentStep.classList.remove("active");
                formSteps[currentStepIndex - 1].classList.add("active");
            });
        });
    </script>

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
    <script>
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
    </script>
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
@endpush
