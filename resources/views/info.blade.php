<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
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
        justify-content: flex-start;
        /* align-items: center; */
    }

    .card-info h5 {
        font-size: 20pt;
    }

    .card-info p {
        font-size: 10pt;
    }
</style>

<body class="blue-body">
    <nav class="flex-container">
        <div class="flex-items" style="display: flex;justify-content: center;align-items: center;">
            <img class="data-img " src="{{ asset('img/LogoB.png') }}" style="width: 18vh; padding: 5px 0px;" />
        </div>
    </nav>

    <div class="container mt-5">
        <div class="card-items mb-5">
            <div class="card">
                <div class="card-body">
                    <div class="card-img">
                        <img class="img-responsive " src="https://bukarekening.bri.co.id/digital-saving/assets/images/simpedes-umum2.png">
                    </div>
                    <div class="card-info">
                        <h5 class="card-title">Tabungan Umum</h5>
                        <p class="card-text">Produk tabungan yang memberikan beragam kemudahan dalam melakukan transaksi perbankan dengan didukung fasilitas e-banking dan sistem real time online yang akan memungkinkan nasabah untuk bertransaksi kapanpun dan dimanapun.</p>
                        <a href="#" class="btn btn-primary">Detail Tabungan<i class="bi bi-arrow-right-short" style="font-size: 1rem; color: white; margin-left: 0.5rem;"></i></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="card-img">
                        <img class="img-responsive " src="https://bukarekening.bri.co.id/digital-saving/assets/images/britamaxbasketball-front.png">
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
    <footer class="bg-light text-center text-lg-start">
        <div class="text-center " style="background-color: rgba(0, 0, 0, 0.1);">
            <small style="font-size: 8pt;">©<a class="text-dark" style="text-decoration: none;" href="https://bankgresik.co.id/">PERUMDA BPR Bank Gresik.</a> | All Rights Reserved.
            </small>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+YmEKz3EBqcWOkrM1aiPo6Upb8g1r0Z1j5l2HDI27JGMcJC" crossorigin="anonymous"></script>
</body>

</html>