@extends('template')
@push('styles')
    <style>
    .card-items {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
        gap: 20px;
    }

    .card {
        max-width: 800px;
    }

    .card-body {
        display: flex;
        flex-direction: row;
        gap: 20px;
        padding: 20px;
    }

    .card-info {
        display: flex;
        flex-direction: column;
        justify-content: center;
        /* align-items: center; */
    }

    .card-info h5 {
        font-size: 20pt;
    }

    .card-info p {
        font-size: 10pt;
    }

    @media (max-width: 768px) {
        .card {
            display: flex;
            width: 10mv;
            flex-direction: row;
        }

        .card-body {
            display: flex;
            flex-direction: column;
        }

        .card-img .img-responsive {
            width: 90%;
        }
    }
</style>
@endpush

@section('content')

<div class="container mt-5">
    <div class="card-items mb-5">
        <h5 class="card-title "><strong>Pilih Jenis tabungan</strong></h5>
        <p class="card-text p-2">Pilih produk tabungan yang anda inginkan</p>

        <div class="card">
            <div class="card-body">
                <div class="card-img">
                    <img class="img-responsive" src="https://bukarekening.bri.co.id/digital-saving/assets/images/simpedes-umum2.png">
                </div>
                <div class="card-info">
                    <h5 class="card-title">Tabungan Umum</h5>
                    <p align="justify" class="card-text">Produk tabungan yang memberikan beragam kemudahan dalam melakukan transaksi perbankan dengan didukung fasilitas e-banking dan sistem real time online yang akan memungkinkan nasabah untuk bertransaksi kapanpun dan dimanapun.</p>
                    <a href="#" class="btn btn-primary">Detail Tabungan<i class="bi bi-arrow-right-short" style="font-size: 1rem; color: white; margin-left: 0.5rem;"></i></a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="card-img">
                    <img class="img-responsive " src="https://bukarekening.bri.co.id/digital-saving/assets/images/britamabisnis_image_url.png">
                </div>
                <div class="card-info">
                    <h5 class="card-title">Tabungan Umum</h5>
                    <p class="card-text">Produk tabungan yang memberikan beragam kemudahan dalam melakukan transaksi perbankan dengan didukung fasilitas e-banking dan sistem real time online yang akan memungkinkan nasabah untuk bertransaksi kapanpun dan dimanapun.</p>
                    <a href="#" class="btn btn-primary">Detail Tabungan<i class="bi bi-arrow-right-short" style="font-size: 1rem; color: white; margin-left: 0.5rem;"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection