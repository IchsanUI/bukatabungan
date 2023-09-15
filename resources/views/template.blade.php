<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Buka Tabungan - Bank Gresik</title>
    <link rel="icon" href="{{ url('img/System_Logo1.png') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    @stack('styles')
    @vite([])
    {{-- Wajib Dimatikan Ketika Push --}}
</head>

<body>
    <nav class="flex-container">
        <div class="flex-items" style="display: flex;justify-content: center;align-items: center;">
            <a href="{{ url('') }}"><img class="data-img " src="{{ asset('img/LogoB.png') }}"
                    style="width: 18vh; padding: 5px 0px;" /></a>

        </div>
    </nav>



    @yield('content')


    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center " style="background-color: rgba(0, 0, 0, 0.1);">
            <small style="font-size: 8pt;">©<a class="text-dark" style="text-decoration: none;"
                    href="https://bankgresik.co.id/">PERUMDA BPR Bank Gresik.</a> | All Rights Reserved.
            </small>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @stack('script-end')
</body>

</html>
