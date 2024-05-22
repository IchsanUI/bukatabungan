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

        .tab-pane {
            width: 1000px;
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
                <h3>Tabungan Umum</h3>
                <p align="justify" class="card-text">Produk tabungan yang memberikan beragam kemudahan dalam melakukan
                    transaksi perbankan dengan didukung fasilitas e-banking dan sistem real time online yang akan
                    memungkinkan nasabah untuk bertransaksi kapanpun dan dimanapun.</p>
                <a href="{{ url('#') }}" class="btn btn-success">Pilih Rekening<i class="bi bi-arrow-right-short"
                        style="font-size: 1rem; color: white; margin-left: 0.5rem;"></i></a>
            </div>
        </div>
    </div>
    <div class="detail-desc">

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                    aria-controls="home" aria-selected="true">Persyaratan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                    aria-controls="profile" aria-selected="false">Keuntungan</a>
            </li>
        </ul>

        <!-- Tabs -->
        <section id="tabs">
            <div class="container">
                <h6 class="section-title h1">Tabs</h6>
                <div class="row">
                    <div class="col-xs-12 ">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                    role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                    role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                    role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
                                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about"
                                    role="tab" aria-controls="nav-about" aria-selected="false">About</a>
                            </div>
                        </nav>
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim
                                occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
                                dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse
                                consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod
                                tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa
                                non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis
                                occaecat ex.
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim
                                occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
                                dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse
                                consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod
                                tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa
                                non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis
                                occaecat ex.
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim
                                occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
                                dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse
                                consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod
                                tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa
                                non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis
                                occaecat ex.
                            </div>
                            <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim
                                occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
                                dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse
                                consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod
                                tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa
                                non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis
                                occaecat ex.
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

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
