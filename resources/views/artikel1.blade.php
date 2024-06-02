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

    <div class="container-fluid" style="margin-top: 100px">
        <div class="row mt-5 text-center">
            <div class="col-12">
                <img src="asset/img/artikel1.png" alt="" style="height: 311px;width:530px;margin-bottom:30px">
                <h1 style="text-align: center">SQL Injection</h1>
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
                    SQL Injection adalah salah satu teknik serangan siber yang memanfaatkan kelemahan dalam aplikasi web
                    yang berkomunikasi dengan basis data. Serangan ini terjadi ketika penyerang menyisipkan atau
                    "menyuntikkan" kode SQL berbahaya ke dalam input aplikasi web yang kemudian dieksekusi oleh basis
                    data. Tujuan utama dari serangan SQL Injection adalah untuk mendapatkan akses yang tidak sah ke
                    data, mengubah atau menghapus data, atau bahkan mengendalikan sistem yang menjalankan basis data
                    tersebut.
                </p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-10 offset-1 py-2"
                style="background-image: linear-gradient(to right, #63c0c8, #42cfad); font-size:30px;color:white;font-weight:500;margin-top:40px;margin-bottom:60px">
                CARA KERJA</div>
        </div>
        <div class="row mt-1">
            <div class="col-10 offset-1" style="text-align: justify; font-size: 20px">
                <p>
                <p>
                    Pada intinya, SQL Injection memanfaatkan cara aplikasi web menangani input pengguna. Ketika aplikasi
                    web mengambil input pengguna dan menggabungkannya langsung ke dalam query SQL tanpa validasi atau
                    sanitasi yang memadai, penyerang dapat menyisipkan perintah SQL yang akan dieksekusi oleh basis
                    data.
                </p>

                <p class="col-6" style="background-color:black;color:white;font-size:16px;padding:10px">
                    SELECT * FROM users WHERE username = '' OR '1'='1' AND password = '';
                </p>

                <p>
                    Jika input pengguna tidak divalidasi, penyerang dapat menyisipkan kode SQL berbahaya, seperti:
                </p>

                <p class="col-1" style="background-color:black;color:white;font-size:16px;padding:10px">
                    ' OR '1'='1
                </p>

                <p>
                    Jika kode SQL sudah disisipkan akan masuk kedalam query. Query ini selalu bernilai benar,
                    memungkinkan penyerang untuk melewati mekanisme otentikasi.
                </p>
                </p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-10 offset-1 py-2"
                style="background-image: linear-gradient(to right, #63c0c8, #42cfad); font-size:30px;color:white;font-weight:500;margin-top:40px;margin-bottom:60px">
                LANGKAH - LANGKAH</div>
        </div>
        <div class="row mt-1">
            <div class="col-10 offset-1" style="text-align: justify; font-size: 20px">
                <p>

                <ol type="1" style="font-size: 20px">
                    <li>
                        Penyerang pertama-tama mencoba menemukan titik masuk yang rentan di aplikasi web. Ini biasanya
                        melibatkan pengujian berbagai formulir input, parameter URL, atau area lain di mana data
                        pengguna diterima. Misalnya, penyerang mungkin memasukkan karakter khusus seperti ', ", ;, atau
                        kata kunci SQL seperti SELECT, INSERT, atau UPDATE untuk melihat bagaimana aplikasi merespons.
                        Contoh: Menyuntikkan ' OR '1'='1 ke dalam input login.
                    </li> <br>
                    <li>
                        Setelah menemukan titik yang rentan, penyerang dapat menyisipkan perintah SQL berbahaya untuk
                        mengeksploitasi celah tersebut, pengguna menyisipkan kode SQL berbahaya diatas
                    </li> <br>
                    <li>
                        Penyerang dapat melanjutkan serangan dengan menjalankan berbagai perintah SQL berbahaya yang
                        memungkinkannya seperti mengambil data sensitif seperti username dan password, memanipulasi
                        data, seperti mengubah harga produk atau menambah saldo rekening, menghapus data penting atau
                        menjatuhkan tabel.
                    </li> <br>
                    <li>
                        Penyerang pertama-tama mencoba menemukan titik masuk yang rentan di aplikasi web. Ini biasanya
                        melibatkan pengujian berbagai formulir input, parameter URL, atau area lain di mana data
                        pengguna diterima. Misalnya, penyerang mungkin memasukkan karakter khusus seperti ', ", ;, atau
                        kata kunci SQL seperti SELECT, INSERT, atau UPDATE untuk melihat bagaimana aplikasi merespons.
                        Contoh: Menyuntikkan ' OR '1'='1 ke dalam input login.
                    </li> <br>
                    <li>
                        Untuk menghindari deteksi, penyerang mungkin menghapus log aktivitas atau menggunakan teknik
                        lain untuk menyamarkan tindakan mereka, seperti menggunakan alamat IP anonim atau VPN.
                    </li> <br>
                </ol>
                </p>
            </div>
        </div>


        <div class="row text-center">
            <div class="col-10 offset-1 py-2"
                style="background-image: linear-gradient(to right, #63c0c8, #42cfad); font-size:30px;color:white;font-weight:500;margin-top:40px;margin-bottom:60px">
                PENCEGAHAN</div>
        </div>
        <div class="row mt-1" style="margin-bottom: 70px">
            <div class="col-10 offset-1">
                <p style="text-align: justify; font-size: 20px">
                <ol type="1" style="font-size: 20px">
                    <li>
                        Penggunaan Prepared statements memisahkan kode SQL dari data pengguna, sehingga input pengguna
                        tidak dapat diinterpretasikan sebagai kode SQL.
                    </li> <br>
                    <li>
                        Selalu validasi dan sanitasi input pengguna untuk memastikan bahwa hanya data yang diharapkan
                        yang diterima. Misalnya, jika input harus berupa angka, pastikan hanya angka yang diperbolehkan.
                    </li> <br>
                    <li>
                        ORM menyediakan abstraksi yang mengurangi kebutuhan untuk menulis query SQL mentah, sehingga
                        mengurangi risiko SQL injection.
                    </li> <br>
                    <li>
                        Batasi hak akses akun database yang digunakan oleh aplikasi hanya pada apa yang diperlukan.
                        Misalnya, jika aplikasi hanya perlu membaca data, gunakan akun dengan hak akses baca-saja.
                    </li> <br>
                    <li>
                        Web Application Firewall dapat membantu mendeteksi dan memblokir serangan SQL injection dengan
                        memantau dan menganalisis lalu lintas HTTP untuk pola serangan yang umum.
                    </li> <br>
                </ol>
                </p>
            </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>