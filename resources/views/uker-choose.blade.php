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

        /* Tabs*/
        /* section {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            padding: 60px 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        } */


        @media (max-width: 1000px) {
            body {
                background-color: rgb(219, 219, 219);
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
                <h3> <strong>Pilih Kantor</strong></h3>
                <p align="justify" class="card-text">Silakan pilih Kantor PERUMDA BPR Bank Gresik yang akan Anda pilih untuk
                    mengelola
                    rekening Anda.</p>
            </div>

        </div>
    </div>
    <div class="select-section">
        <select class="form-select">
            <option>-- Pilih Kantor --</option>
            <option>Kantor Pusat - Jl. Basuki Rahmat No. 18, Gresik.</option>
            <option>KAS Bunga - Jl. Raya Bungah No.51, Bungah, Gresik.</option>
            <option>KAS Menganti - Jl. Raya Menganti Karangturi No.200, Menganti, Gresik.</option>
        </select>
    </div>
@endsection


@push('script-end')
    <script>
        $('#myTab a').on('click', function(e) {
            e.preventDefault()
            $(this).tab('show')
        })
    </script>
@endpush
