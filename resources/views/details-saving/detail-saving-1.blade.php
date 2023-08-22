@extends('template')
@push('styles')
      <style>
        .detail{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding : 20px;
        }
        .detail-h-info{
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            max-width: 900px;
            align-items: flex-start;
        }
        .detail-h-img{
            padding: 20px;
        }
        .jumbotron{
            background-color: rgb(241, 241, 241);
            width: 100%;
              /* align-items: center; */
        }

    @media (max-width: 768px) {
       
    }
</style>
@endpush
@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="detail">
<div class="detail-h-img">
 <img class="img-responsive" src="https://bukarekening.bri.co.id/digital-saving/assets/images/simpedes-umum2.png">
        </div>
        <div class="detail-h-info">
                    <h3 >Tabungan Umum</h5>
                    <p align="justify" class="card-text">Produk tabungan yang memberikan beragam kemudahan dalam melakukan transaksi perbankan dengan didukung fasilitas e-banking dan sistem real time online yang akan memungkinkan nasabah untuk bertransaksi kapanpun dan dimanapun.</p>
                     <a href="{{ url('detail-saving-1') }}" class="btn btn-success">Pilih Rekening<i class="bi bi-arrow-right-short" style="font-size: 1rem; color: white; margin-left: 0.5rem;"></i></a>
        </div>
    </div>
</div>

@endsection

