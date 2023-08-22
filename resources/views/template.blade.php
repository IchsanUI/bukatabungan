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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    @stack('styles')
</head>

<body>
    <nav class="flex-container">
        <div class="flex-items" style="display: flex;justify-content: center;align-items: center;">
            <img class="data-img " src="{{ asset('img/LogoB.png') }}" style="width: 18vh; padding: 5px 0px;" />
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
