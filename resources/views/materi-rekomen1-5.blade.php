<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet" />
    <link rel="icon" href="{{url('asset/img/logo.png')}}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=League+Spartan:wght@100..900&display=swap"
        rel="stylesheet" />

    <title>BikinBisa</title>
    <style>
        .navbar {
            position: fixed;
            /* Tambahkan ini */
            top: 0;
            /* Menempatkan navbar di bagian atas */
            width: 100%;
            /* Membuat navbar menempati seluruh lebar layar */
            z-index: 1000;
            /* Menetapkan z-index agar navbar muncul di atas konten lain */
            background-image: linear-gradient(to right, #63c0c8, #42cfad);
            margin-bottom: 0;
            border-bottom: none;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
        }

        .nav-item {
            transition: transform 0.3s ease-in-out;
        }

        .nav-item:hover {
            height: 100%;
            transform: scale(1.1);
        }

        .form-control:focus {
            outline: 2px solid #42cfad;
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
        }

        .btn-logout .dropdown-menu {
            right: 0;
            left: auto;
        }

        ul li {
            font-size: 20px;
        }

        .dropdown-menu .dropdown-item {
            font-size: 15px;
        }
    </style>
</head>

<body style="font-family: league spartan">
    <nav class="navbar navbar-expand-lg bg-body-tertiary px-3">
        <div class="container-fluid">
            <img src="{{url('asset/img/logo.png')}}" alt="Logo"
                style="height: 30px; width: 30px; margin-right: 10px; margin-left: 100px;" />
            <a class="navbar-brand" href="{{route('home')}}" style="font-family: 'Julius Sans One'">BIKINBISA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 md-4">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" aria-current="page" href="{{route('home')}}"
                            style="font-family: 'League Spartan'">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="{{route('beli-paket')}}" style="font-family: 'League Spartan'">Beli Paket</a>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link" href="{{route('literasi')}}"
                            style="font-family: 'League Spartan'">Literasi</a>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link" href="{{route('tentang-kami')}}"
                            style="font-family: 'League Spartan'">Tentang Kami</a>
                    </li>
                </ul>
                <form class="d-flex ms-auto mx-4" role="search">
                    <div class="input-group">
                        <input class="form-control align-self-center" type="search" placeholder="Search"
                            aria-label="Search" style="
                                    height: 40px;
                                    font-family: 'League Spartan';
                                " />
                    </div>
                </form>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="btn-logout nav-item dropdown ms-auto align-self-center rounded-circle avatar">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="far fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"
                            data-bs-boundary="viewport">
                            <a class="dropdown-item" href="{{route('profile')}}">Manage Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('logout')}}" style="color: red">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="position-absolute" style="margin-left: 140px;">
        <a href="{{route('paket-rekomen1')}}" class="btn" style="background-image: linear-gradient(#63c0c8, #42cfad); max-width: 150px;">Kembali</a>
    </div>

    <div class="container-fluid" style="margin-top: 100px">
        <div class="row mt-5 text-center">
            <div class="col-12">
                <img src="asset/img/artikel1.png" alt="" style="height: 311px;width:530px;margin-bottom:30px">
                <h1 style="text-align: center">BAHASA INDONESIA & BAHASA INGGRIS</h1>
            </div>
        </div>
        <div class="row text-center mt-3">
            <div class="col-10 offset-1 py-2"
                style="background-image: linear-gradient(to right, #63c0c8, #42cfad); font-size:30px;color:white;font-weight:500;margin-top:40px;margin-bottom:60px">
                PENGERTIAN</div>
        </div>
        <div class="row mt-1">
            <div class="col-10 offset-1">
                <p style="text-align: justify; font-size: 20px  ">
                    <strong>Bahasa Indonesia & Bahasa Inggris</strong> merujuk pada pengetahuan
                    mengacu pada bahan pembelajaran yang berkaitan dengan pengajaran dan pembelajaran Bahasa Indonesia
                    dan Bahasa Inggris, masing-masing.
                </p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-10 offset-1 py-2"
                style="background-image: linear-gradient(to right, #63c0c8, #42cfad); font-size:30px;color:white;font-weight:500;margin-top:40px;margin-bottom:60px">
                MATERI</div>
        </div>
        <div class="row mt-1">
            <div class="col-10 offset-1" style="text-align: justify; font-size: 20px; margin-top: -40px;">
                <p>
                <p class="col-6">
                    <strong>Tata bahasa</strong>
                </p>
                <p>
                    Penjelasan tentang tata bahasa dasar Bahasa Indonesia, termasuk penggunaan kata benda, kata kerja,
                    kata sifat, dan lain-lain.
                    Contoh penggunaan tenses dalam Bahasa, seperti present tense, past tense, dan future
                    tense.
                </p>

                <p class="col-6">
                    <strong>Kosa kata</strong>
                </p>

                <p>
                    Daftar kata-kata umum dalam Bahasa Indonesia beserta artinya dalam Bahasa Inggris.
                    Latihan untuk memperluas kosa kata dengan tema-tema tertentu, seperti makanan, transportasi, atau
                    profesi.

                </p>

                <p class="col-6">
                    <strong>Materi Bacaan</strong>
                </p>

                <p>
                    Artikel berita singkat tentang topik-topik aktual dalam Bahasa Indonesia, diikuti dengan pertanyaan
                    pemahaman bacaan.
                    Cerita pendek atau dongeng dalam Bahasa untuk meningkatkan pemahaman tentang struktur
                    naratif.
                </p>
            </div>
            <div class="row mt-1">
                <div class="col-10 offset-1" style="text-align: justify; font-size: 20px">
                    <p class="col-6">
                        <strong>Materi Penulisan</strong>
                    </p>
                    <p>
                        Latihan menulis esai pendek tentang topik-topik tertentu, seperti lingkungan, pendidikan, atau
                        kebudayaan.
                        Panduan tentang cara menulis surat formal atau tidak formal dalam Bahasa.
                </div>
            </div>
            <div class="row text-center">
                <div class="col-10 offset-1 py-2"
                    style="background-image: linear-gradient(to right, #63c0c8, #42cfad); font-size:30px;color:white;font-weight:500;margin-top:40px;margin-bottom:60px">
                    TIPS DAN TRIK PENYELESAIAN</div>
            </div>
            <div class="row mt-1">
                <div class="col-10 offset-1" style="text-align: justify; font-size: 20px">
                    <p>

                    <ol type="1" style="font-size: 20px">
                        <li>
                            <strong>Pahami Tugas atau Masalah dengan Jelas</strong>
                            Sebelum memulai, pastikan Anda memahami dengan jelas apa yang diminta dalam tugas atau
                            masalah tersebut. Baca petunjuknya dengan cermat dan identifikasi masalah atau tujuan
                            utamanya.
                        </li> <br>
                        <li>
                            <strong>Buat Rencana Tindakan</strong>
                            Buatlah rencana tindakan yang jelas untuk menyelesaikan tugas atau masalah tersebut.
                            Tentukan langkah-langkah yang perlu Anda ambil dan urutannya.
                        </li> <br>
                        <li>
                            <strong>Bagi Tugas menjadi Bagian-Bagian Lebih Kecil</strong>
                            Jika tugas atau masalah terasa besar atau rumit, bagi menjadi bagian-bagian yang lebih kecil
                            dan lebih mudah dikelola. Fokuslah pada menyelesaikan satu bagian pada satu waktu.
                        </li> <br>
                    </ol>
                    </p>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                crossorigin="anonymous"></script>
</body>

</html>