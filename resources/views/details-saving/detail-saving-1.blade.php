@extends('template')
@push('styles')
      <style>
        .detail-h{
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
            max-width: 800px;
            align-items: flex-start;
        }
        .detail-h-img{
            padding: 30px;
        }
        .jumbotron{
            background-color: rgb(241, 241, 241);
            width: 100%;
              /* align-items: center; */
        }
        .detail-desc{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .nav-item{
            width: 500px
        }
        .tab-pane{
            width: 1000px;
        }

    @media (max-width: 1000px) {
       .detail-h-img{
             display: none;
        }
         .jumbotron{
            background-color: rgb(250,234,3);
            width: 100%;
              /* align-items: center; */
        }
        .detail-desc{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .card-text{
            line-height: 1.3;
            font-size: 10pt;
        }
        .nav-item{
            width: 150px;
        }
        .tab-pane{
            width: 100%;
        }
    }
</style>
@endpush
@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="detail-h">
        <div class="detail-h-img">
            <img class="img-responsive" src="https://bukarekening.bri.co.id/digital-saving/assets/images/simpedes-umum2.png">
        </div>
        <div class="detail-h-info">
            <h3> <strong> Tabungan Umum</strong></h3>
            <p align="justify" class="card-text">Produk tabungan yang memberikan beragam kemudahan dalam melakukan transaksi perbankan dengan didukung fasilitas e-banking dan sistem real time online yang akan memungkinkan nasabah untuk bertransaksi kapanpun dan dimanapun.</p>
            <a href="{{ url('#') }}" class="btn btn-success">Pilih Rekening<i class="bi bi-arrow-right-short" style="font-size: 1rem; color: white; margin-left: 0.5rem;"></i></a>
        </div>
    </div>
</div>
<div class="detail-desc">
    
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Persyaratan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Keuntungan</a>
        </li>
    </ul>

 <div class="tab-content mt-3" id="myTabContent" >
        <div class="tab-pane fade show active p-4" id="home" role="tabpanel" aria-labelledby="home-tab">
            <p class="fs-5"> <strong>Syarat & Ketentuan</strong></p>
            <p class="card-text">Untuk Membuka Rekening Tabungan Umum di Bank Gresik, Berikut Adalah Persyaratan Umum yang Harus Disiapkan, Seperti:</p>
            <ol>
  <li><strong>Fotokopi KTP Suami & Istri yang berlaku (4 Lembar):</strong>
<p class="card-text">Diperlukan fotokopi KTP suami dan istri yang masih berlaku. Hal ini bertujuan untuk mengidentifikasi peminjam dan memastikan keabsahan data pribadi.</p></li>
<li><strong>Fotokopi Kartu Keluarga (2 Lembar):</strong>
<p class="card-text">Dibutuhkan fotokopi Kartu Keluarga (KK) dalam jumlah yang ditentukan. KK digunakan untuk memverifikasi hubungan keluarga dan memberikan bukti bahwa peminjam adalah bagian dari sebuah keluarga.</p></li>
<li><strong>Setoran awal Rp. 100.000,-</strong></li>
<li><strong>Biaya Administrasi Rp. 500,- / Bulan</strong></li>
<li><strong>Bunga Tabungan sebesar 3%.</strong></li>
<li><strong>Saldo Minimum Tabungan Rp 25.000,-</strong></li>
<li><strong>Setoran Minimum Tabungan Rp 100.000,-</strong></li>

</ol>

        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            Untung
        </div>
    </div>
   
</div>


@endsection


@push('script-end')
     <script>
    $('#myTab a').on('click', function (e) {
    e.preventDefault()
    $(this).tab('show')
  })
  </script>
@endpush

