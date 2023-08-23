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
        <select class="form-select" id="kantorSelect">
            <option>-- Pilih Kantor --</option>
        </select>
    </div>


    <div class="uker-section">
        <div class="card ">
            <img class="card-img-top" src="{{ asset('img/img_kas_bunga.png') }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Kas Bunga</h5>
                {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p> --}}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Lokasi :
                    <small><small>Jl. Raya Bungah No.51, Bungah, Gresik
                            61152, Jawa Timur</small></small>
                </li>
                <li class="list-group-item">Jam Operasional :<small><small> Senin–Sabtu: 8:00 pagi–6:00 sore Minggu:
                            TUTUP</small></small>
                </li>
            </ul>
            <div class="card-body">
                <div class="button">
                    <a href="{{ url('detail-saving-1') }}" class="btn btn-primary">Lokasi<i class="bi bi-geo-alt-fill"
                            style="font-size: 1rem; color: white; margin-left: 0.5rem;"></i></a>
                    <a href="{{ url('detail-saving-1') }}" class="btn  btn-primary choose-uker-btn">Pilih Kantor<i
                            class="bi bi-bank" style="font-size: 1rem; color: white; margin-left: 0.5rem;"></i></a>
                </div>
            </div>
        </div>
        <div class="card ">
            <img class="card-img-top" src="{{ asset('img/img_kas_bunga.png') }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Kas Bunga</h5>
                {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p> --}}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Lokasi : </li>
                <li class="list-group-item">Jam Operasional :</li>
            </ul>
            <div class="card-body">
                <div class="button">
                    <a href="{{ url('detail-saving-1') }}" class="btn btn-primary">Lokasi<i class="bi bi-geo-alt-fill"
                            style="font-size: 1rem; color: white; margin-left: 0.5rem;"></i></a>
                    <a href="{{ url('detail-saving-1') }}" class="btn btn-primary ">Pilih Kantor<i
                            class="bi bi-arrow-right-short"
                            style="font-size: 1rem; color: white; margin-left: 0.5rem;"></i></a>
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
                                .nama // Ganti dengan nama field yang sesuai di model Kantor
                        }));
                    });
                }
            });
        });
    </script>
@endpush
