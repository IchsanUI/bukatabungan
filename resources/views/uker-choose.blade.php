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

        .select-section {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }

        .form-select {
            width: 1000px;
            margin-top: -25px;
            height: 47px;
        }

        .card {
            display: flex;

            width: 18rem;
        }

        .uker-section {
            display: flex;
            justify-content: center;
            position: relative;

        }



        /* Styles for overlay */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Semi-transparent black background */
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            /* Ensure it's on top of other elements */
        }

        /* Styles for loader */
        .loader {
            margin: 100px;
            border: 5px solid #f3f3f3;
            border-top: 5px solid #3498db;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            animation: spin 2s linear infinite;
            /* Pusatkan secara vertikal dan horizontal */
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -25px 0 0 -25px;
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
                background-color: rgb(241, 241, 241);
            }

            .detail-h {
                padding-top: 30px;
            }

            .detail-h-img {
                display: none;
            }

            .jumbotron {
                background-color: rgb(250, 234, 3);
                width: 100%;
                height: 150px;
                /* align-items: center; */
            }

            .uker-section {
                padding: 20px;
                display: flex;
                flex-direction: column;
                gap: 10px;
                margin-bottom: 10px;
                position: relative;
            }

            .card {
                display: flex;
                flex-direction: column;
                /* padding: 20px; */
                width: 100%;
            }

            .card-body .button {
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-content: center;
                /* width: 100%; */
                gap: 10px
            }

            .card-body .button .choose-uker-btn {
                background: rgb(6, 105, 27);
                background: linear-gradient(90deg, rgb(9, 77, 37) 0%, rgb(2, 77, 21) 100%, rgbrgb(196, 192, 8)0%);
            }

            .card-body .button a {
                width: 100%;
            }

            .form-select {
                width: 380px;
                margin-top: -25px;
                height: 47px;
            }

            .card-text {
                line-height: 1.3;
                font-size: 10pt;
            }


        }
    </style>
@endpush
@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="detail-h">
            <div class="detail-h-img">
                <i class="bi bi-building-check" style="font-size: 3rem; color: cornflowerblue; margin-right: 1rem;"></i>
            </div>
            <div class="detail-h-info">
                <h3> <strong>Pilih Unit Kantor</strong></h3>
                <p align="justify" class="card-text">Silakan pilih Kantor PERUMDA BPR Bank Gresik yang akan Anda pilih untuk
                    mengelola
                    rekening Anda.</p>
            </div>

        </div>
    </div>


    <div class="select-section">
        <select class="form-select" id="kantorSelect" required>
            <option value="">-- Pilih Kantor --</option>
        </select>
    </div>

    <div class="uker-section">
        <div class="overlay" id="loaderOverlay">
            <div class="loader"></div>
        </div>
        <div class="card" style="display: none;">
            <img class="card-img-top" src="" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"></h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Lokasi :
                    <small><small class="alamat"></small></small>
                </li>
            </ul>
            <div class="card-body">
                <div class="button">
                    <a href="{{ url('detail-saving-1') }}" class="btn btn-primary lokasi">Lokasi<i
                            class="bi bi-geo-alt-fill" style="font-size: 1rem; color: white; margin-left: 0.5rem;"></i></a>
                    <a href="{{ url('detail-saving-1') }}" class="btn  btn-primary choose-uker-btn">Pilih Kantor<i
                            class="bi bi-bank" style="font-size: 1rem; color: white; margin-left: 0.5rem;"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('script-end')
    <script>
        $(document).ready(function() {
            $.ajax({
                url: "{{ route('get.kantor.options') }}",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    var kantorSelect = $('#kantorSelect');
                    $.each(data, function(index, kantor) {
                        kantorSelect.append($('<option>', {
                            value: kantor.id,
                            text: kantor
                                .office_name // Ganti dengan nama field yang sesuai di model Kantor
                        }));
                    });
                }
            });
        });

        $(document).ready(function() {
            var loaderOverlay = $('#loaderOverlay');
            var kantorSelect = $('#kantorSelect');
            var ukerSection = $('.uker-section');
            var cardSection = ukerSection.find('.card');

            kantorSelect.on('change', function() {
                var selectedKantorId = $(this).val();

                if (selectedKantorId === "") {
                    cardSection.hide();
                    return;
                }

                // Menampilkan loader dan overlay saat permintaan sedang berlangsung
                loaderOverlay.show();

                $.ajax({
                    url: "/get-uker-data/" + selectedKantorId,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        // Sembunyikan loader dan overlay serta tampilkan card-section
                        loaderOverlay.hide();
                        cardSection.show();
                        updateCardData(data);
                    }
                });
            });

            function updateCardData(data) {
                cardSection.find('.card-title').text(data.office_name);
                cardSection.find('.alamat').text(data.address);

                var img = cardSection.find('.card-img-top');
                img.attr('src', "{{ asset('img/') }}" + data.office_pic);
                // Update data lokasi kantor pada tautan Lokasi
                var lokasiLink = cardSection.find('.btn.btn-primary.lokasi');
                lokasiLink.attr('href', data.maps_link);
            }
        });
    </script>
@endpush
