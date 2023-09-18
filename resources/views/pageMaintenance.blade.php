<!doctype html>
<title>Site Maintenance</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<style>
    html,
    body {
        padding: 0;
        margin: 0;
        width: 100%;
        height: 100%;
    }

    * {
        box-sizing: border-box;
        font-family: "Rubik", sans-serif;
        font-size: 10pt;
    }

    body {
        text-align: center;
        padding: 0;
        background: #d6433b;
        color: #fff;
        font-family: Open Sans;
    }

    h1 {
        font-size: 50px;
        font-weight: 100;
        text-align: center;
    }

    body {
        font-family: Open Sans;
        font-weight: 100;
        font-size: 20px;
        color: #fff;
        text-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    article {
        display: block;
        width: 700px;
        padding: 50px;
        margin: 0 auto;
    }

    a {
        color: #fff;
        font-weight: bold;
    }

    a:hover {
        text-decoration: none;
    }

    svg {
        width: 75px;
        margin-top: 1em;
    }

    #judul {
        font-weight: bold;
    }
</style>

<article>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 202.24 202.24">
        <defs>
            <style>
                .cls-1 {
                    fill: #bbff00;
                }
            </style>
        </defs>
        <title>Asset 3</title>
        <g id="Layer_2" data-name="Layer 2">
            <g id="Capa_1" data-name="Capa 1">
                <path class="cls-1"
                    d="M101.12,0A101.12,101.12,0,1,0,202.24,101.12,101.12,101.12,0,0,0,101.12,0ZM159,148.76H43.28a11.57,11.57,0,0,1-10-17.34L91.09,31.16a11.57,11.57,0,0,1,20.06,0L169,131.43a11.57,11.57,0,0,1-10,17.34Z" />
                <path class="cls-1"
                    d="M101.12,36.93h0L43.27,137.21H159L101.13,36.94Zm0,88.7a7.71,7.71,0,1,1,7.71-7.71A7.71,7.71,0,0,1,101.12,125.63Zm7.71-50.13a7.56,7.56,0,0,1-.11,1.3l-3.8,22.49a3.86,3.86,0,0,1-7.61,0l-3.8-22.49a8,8,0,0,1-.11-1.3,7.71,7.71,0,1,1,15.43,0Z" />
            </g>
        </g>
    </svg>
    <h1 id="judul">Mode Pemeliharaan.</h1>
    <div>
        <p id="pesan">Maaf atas ketidaknyamanan ini. Kami sedang melakukan Pemeliharaan Website saat ini.
            Jika Anda
            membutuhkan, Anda dapat menghubungi kami di Social Media,
            untuk informasi lebih lanjut.</p>
        <p>&mdash; <b>Tim Bank Gresik</b> &mdash;</p>
    </div>

    <button class="btn btn-warning mt-5" onclick="gantiBahasa()" style="">Ubah ke Bahasa Inggris</button>
</article>


<script>
    function gantiBahasa() {
        const judul = document.getElementById('judul');
        const pesan = document.getElementById('pesan');
        const tombol = document.querySelector('button');

        if (judul.textContent === 'Mode Pemeliharaan.') {
            judul.textContent = 'Maintenance Mode.';
            pesan.textContent =
                'Sorry for the inconvenience. We\'re performing some maintenance at the moment. If you need to you can always follow us on Social Media for updates, otherwise we\'ll be back up shortly!';
            tombol.textContent = 'Switch to Indonesia Language';
        } else {
            judul.textContent = 'Mode Pemeliharaan.';
            pesan.textContent =
                'Maaf atas ketidaknyamanan ini. Kami sedang melakukan Pemeliharaan Website saat ini. Jika Anda membutuhkan, Anda dapat menghubungi kami di Social Media, untuk informasi lebih lanjut.';
            tombol.textContent = 'Ubah ke Bahasa Inggris';
        }
    }
</script>
