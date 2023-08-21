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

<body class="blue-body">
    <nav class="flex-container">
        <div class="flex-items" style="display: flex;
justify-content: center;
  align-items: center;">
            <img class="data-img " src="{{ asset('img/Logo.png') }}" style="width: 80%;" />
        </div>
    </nav>

    <div class="container mt-5">
        <h5 class="card-title "><strong>Buka Rekening Baru</strong></h5>
        <p class="card-text p-2">Nikmati 3 Langkah mudah Buka Rekening Bank Gresik dimanapun, dan kapanpun .</p>
        <div class="card text-left mt-4" style="background-color:rgb(248, 248, 248)">
            <div class="card-body">
                <div style="display: flex; align-items: center;">
                    <i class="bi bi-file-earmark-check" style="font-size: 3rem; color: cornflowerblue; margin-right: 1rem;"></i>
                    <div>
                        <h6 class="card-title">1. Siakan Dokumen</h6>
                        <p class="card-text"><small>Siapkan KTP, NPWP (opsional), Data Diri</small></p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="card-body">
                <div style="display: flex; align-items: center;">
                    <i class="bi bi-cash-stack" style="font-size: 3rem; color: cornflowerblue; margin-right: 1rem;"></i>
                    <div>
                        <h6 class="card-title">2. Setoran Awal</h6>
                        <p class="card-text"><small>Aktifkan Rekening barumu dengan melakukan setoran awal.</small></p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="card-body">
                <div style="display: flex; align-items: center;">
                    <i class="bi bi-camera-video" style="font-size: 3rem; color: cornflowerblue; margin-right: 1rem;"></i>
                    <div>
                        <h6 class="card-title">3. Verifikasi Diri</h6>
                        <p class="card-text"><small>Lakukan Video Recording untuk meverifikasi diri Anda.</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5" style="margin-bottom: 100px;">
            <button type="button" class="btn btn-rounded text-white " style="padding: 10px 90px;background-color: rgb(14, 14, 114);">Buka Rekening</button>
        </div>
    </div>
    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.1);">
            <small>Copyright © 2023
                <a class="text-dark" href="https://bankgresik.co.id/">PERUMDA BPR Bank Gresik</a>
            </small>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+YmEKz3EBqcWOkrM1aiPo6Upb8g1r0Z1j5l2HDI27JGMcJC" crossorigin="anonymous"></script>
</body>

</html>