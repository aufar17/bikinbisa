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
                        <a class="nav-link" href="#" style="font-family: 'League Spartan'">Beli Paket</a>
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
                <h1 style="text-align: center">PENGETAHUAN KUANTITATIF</h1>
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
                    <strong>Pengetahuan Kuantitatif</strong> merujuk pada pengetahuan
                    yang terkait dengan angka, data, dan ukuran. Ini mencakup pemahaman tentang konsep-konsep
                    matematika, statistik, dan pengukuran, serta kemampuan untuk menggunakan dan memahami data numerik
                    dalam konteks yang berbeda.
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
                    <strong>Operasi Aritmatika</strong>
                </p>
                <p>
                    Kemampuan untuk melakukan operasi matematika dasar seperti penjumlahan, pengurangan, perkalian, dan
                    pembagian merupakan contoh pengetahuan kuantitatif. Misalnya, memahami bahwa 5 + 3 = 8 atau 4 × 6 =
                    24
                </p>

                <p class="col-6">
                    <strong>Statistik</strong>
                </p>

                <p>
                    Memahami konsep statistik dan dapat menganalisis data numerik juga merupakan contoh pengetahuan
                    kuantitatif. Misalnya, memahami konsep rata-rata, median, dan modus dalam satu set data, serta
                    kemampuan untuk menghitungnya.
                </p>

                <p class="col-6">
                    <strong>Geometri</strong>
                </p>

                <p>
                    Pengetahuan tentang konsep geometri seperti sifat-sifat bangun datar dan ruang, menghitung luas,
                    volume, dan sudut adalah contoh pengetahuan kuantitatif. Misalnya, memahami bahwa luas segitiga
                    adalah ½ × alas × tinggi atau rumus untuk menghitung volume kubus adalah sisi × sisi × sisi.
                </p>
            </div>
            <div class="row mt-1">
                <div class="col-10 offset-1" style="text-align: justify; font-size: 20px">
                    <p class="col-6">
                        <strong>Ekonomi</strong>
                    </p>
                    <p>
                        Dalam bidang ekonomi, memahami konsep-konsep seperti inflasi, pertumbuhan ekonomi, suku bunga,
                        dan perbandingan antara harga barang dan layanan adalah contoh pengetahuan kuantitatif.
                        Misalnya, memahami bahwa suku bunga 5% artinya 5% dari jumlah uang yang dipinjam.
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
                            <strong>Identifikasi Masalah dengan Jelas</strong>
                            Sebelum mencari solusi, pastikan Anda memahami masalahnya
                            dengan baik. Identifikasi sumber masalah dan akar penyebabnya secara tepat.
                        </li> <br>
                        <li>
                            <strong>Pikirkan Solusi Alternatif</strong>
                            Jangan terpaku pada satu solusi. Pikirkan beberapa solusi alternatif yang mungkin dan
                            pertimbangkan kelebihan dan kekurangannya.
                        </li> <br>
                        <li>
                            <strong>Prioritaskan Solusi</strong>
                            Evaluasi setiap solusi berdasarkan pada keefektifan, biaya, waktu, dan sumber daya yang
                            tersedia. Pilih solusi yang paling sesuai dengan situasi dan kebutuhan Anda.
                        </li> <br>
                        <li>
                            <strong>Bekerja dengan Sistematis</strong>
                            Ikuti langkah-langkah yang terorganisir dan sistematis dalam menyelesaikan masalah. Jangan
                            terburu-buru, tetapi juga jangan menunda-nunda.
                        </li> <br>
                        <li>
                            <strong>Evaluasi dan Pelajari dari Pengalaman</strong>
                            Setelah menyelesaikan masalah, evaluasi hasilnya dan pelajari dari pengalaman tersebut.
                            Identifikasi apa yang berhasil dan apa yang tidak, dan gunakan pengalaman tersebut untuk
                            meningkatkan kemampuan Anda di masa depan.
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