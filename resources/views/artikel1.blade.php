<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap"
            rel="stylesheet"
        />
        <link rel="icon" href="{{url('asset/img/logo.png')}}" />
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=League+Spartan:wght@100..900&display=swap"
            rel="stylesheet"
        />

        <title>BikinBisa</title>
        <style>
            .navbar {
                background-image: linear-gradient(to right, #63c0c8, #42cfad);
                margin-bottom: 0;
                border-bottom: none;
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
                <img
                    src="{{url('asset/img/logo.png')}}"
                    alt="Logo"
                    style="height: 30px; width: 30px; margin-right: 10px"
                />
                <a
                    class="navbar-brand"
                    href="{{route('home')}}"
                    style="font-family: 'Julius Sans One'"
                    >BIKINBISA</a
                >
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent"
                >
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 md-4">
                        <li class="nav-item mx-2">
                            <a
                                class="nav-link active"
                                aria-current="page"
                                href="home.html"
                                style="font-family: 'League Spartan'"
                                >Home</a
                            >
                        </li>
                        <li class="nav-item mx-2">
                            <a
                                class="nav-link"
                                href="#"
                                style="font-family: 'League Spartan'"
                                >Beli Paket</a
                            >
                        </li>

                        <li class="nav-item mx-2">
                            <a
                                class="nav-link"
                                href="{{route('literasi')}}"
                                style="font-family: 'League Spartan'"
                                >Literasi</a
                            >
                        </li>

                        <li class="nav-item mx-2">
                            <a
                                class="nav-link"
                                href="{{route('tentang-kami')}}"
                                style="font-family: 'League Spartan'"
                                >Tentang Kami</a
                            >
                        </li>
                    </ul>
                    <form class="d-flex ms-auto mx-4" role="search">
                        <div class="input-group">
                            <input
                                class="form-control align-self-center"
                                type="search"
                                placeholder="Search"
                                aria-label="Search"
                                style="
                                    height: 40px;
                                    font-family: 'League Spartan';
                                "
                            />
                        </div>
                    </form>
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li
                            class="btn-logout nav-item dropdown ms-auto align-self-center rounded-circle avatar"
                        >
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                <i class="far fa-user"></i>
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-end"
                                aria-labelledby="navbarDropdown"
                                data-bs-boundary="viewport"
                            >
                                <a
                                    class="dropdown-item"
                                    href="{{route('profile')}}"
                                    >Manage Profile</a
                                >
                                <div class="dropdown-divider"></div>
                                <a
                                    class="dropdown-item"
                                    href="{{route('logout')}}"
                                    style="color: red"
                                    >Logout</a
                                >
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid" >
            <div class="row mt-5 text-center">
                <div class="col-12">
                    <img src="asset/img/artikel1.png" alt="" style="height: 311px;width:530px;margin-bottom:30px">
                    <h1 style="text-align: center">SQL Injection</h1>
                </div>
            </div>
            <div class="row text-center mt-3">
                <div class="col-10 offset-1 py-2" style="background-image: linear-gradient(to right, #63c0c8, #42cfad); font-size:30px;color:white;font-weight:500;margin-top:40px;margin-bottom:60px">
                PENGERTIAN</div>
            </div>
            <div class="row mt-1" >
                <div class="col-10 offset-1" >
                    <p style="text-align: justify; font-size: 20px  ">
                        SQL Injection merupakan salah satu jenis kejahatan baru
                        karena perkembangan teknologi digital. SQL Injection ini
                        bahkan masuk ke dalam kategori cybercrime, yaitu aksi
                        ilegal yang dilakukan oleh seseorang untuk melakukan
                        pencurian data. <br />
                        <br />
                        Serangan SQL injection ini dapat mencakup pencurian
                        serta manipulasi pada database. Bayangkan jika database
                        yang dibobol adalah database dari aplikasi finansial
                        yang kita gunakan, tentu bukan masalah yang sulit untuk
                        mendapatkan email, password, dan data pribadi lainnya.
                        <br />
                        <br />
                        Hacker dapat melakukan otentikasi dan otorisasi halaman
                        web atau aplikasi web dan mengambil konten dari seluruh
                        database SQL. Mereka juga dapat menggunakan SQL
                        Injection untuk menambah, mengubah, dan menghapus
                        catatan dalam database. Serangan SQL Injection ini dapat
                        menarget semua website yang memanfaatkan SQL database,
                        seperti MySQL, PostgreSQL, SQL Server, dan lainnya.
                        <br><br>
                    </p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-10 offset-1 py-2" style="background-image: linear-gradient(to right, #63c0c8, #42cfad); font-size:30px;color:white;font-weight:500;margin-top:40px;margin-bottom:60px">
                ALUR</div>
            </div>
            <div class="row mt-1">
                <div class="col-10 offset-1">
                    <p style="text-align: justify; font-size: 20px">
                        <ol type="1" style="font-size: 20px" >
                            <li>
                                Hacker akan mencari celah keamanan database. Biasanya celah keamanan terhadap SQL Injection terdapat pada form login. Misalkan seorang pengguna memiliki username andini dan passwordnya adalah andinicantik123. Ketika pengguna ini melakukan login, maka website akan melakukan validasi dengan query berikut:
                            </li>
                            <li>
                                Validasi input data. Input data terbagi menjadi 2 jenis, yaitu whitelisting (menyaring data dengan menerima inputan data yang sudah pasti aman), dan blacklistening (menolak input data yang diketahui berbahaya, seperti penggunaan karakter tertentu).
                            </li>
                            <li>
                                Menggunakan parameterized SQL query. Tujuannya adalah untuk membedakan antara SQL query dengan data input pengguna.   
                            </li>
                            <li>
                                Menggunakan SQL Escape String, dimana kita akan menggunakan rangkaian kode yang berfungsi untuk menambahkan karakter escape atau mengubah karakter yang dianggap berbahaya menjadi karakter lainnya. 
                            </li>
                            <li>
                                Mematikan notifikasi error. Fitur ini dapat dimanfaatkan oleh hacker untuk mencari celah dari website yang kita miliki.  
                            </li>
                            <li>
                                Menggunakan WAF (Web Application Firewall) dan IPS (Intrusion Prevention System).  
                            </li>
                        </ol>
                    </p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-10 offset-1 py-2" style="background-image: linear-gradient(to right, #63c0c8, #42cfad); font-size:30px;color:white;font-weight:500;margin-top:40px;margin-bottom:60px">
                PENCEGAHAN</div>
            </div>
            <div class="row mt-1">
                <div class="col-10 offset-1">
                    <p style="text-align: justify; font-size: 20px">
                        <ol type="1" style="font-size: 20px" >
                            <li>
                                Mengatur format pengisian. Misalkan kita bisa membuat agar form diisi dengan tipe data tertentu, selain itu kita bisa melakukan pembatasan karakter maksimal yang bisa dimasukkan. Contohnya form nama yang hanya boleh menggunakan huruf dan dibatasi hurufnya hanya 15 karakter.
                            </li>
                            <li>
                                Validasi SQL query yang digunakan. Query yang digunakan oleh hacker akan membuat database melakukan validasi perintah. Sehingga sistem akan membiarkan hacker ini login sebagai andini tanpa mengecek password nya.
                            </li>
                            <li>
                                Database berhasil diakses.Jika sudah sampai pada tahap ini, berarti hacker berhasil masuk ke website tanpa verifikasi. Saat ini hacker bahkan bisa mengubah dirinya menjadi administrator, sehingga bisa dengan mudah mengakses semua data yang ada bahkan melakukan modifikasi.    
                            </li>
                        </ol>
                    </p>
                </div>
            </div>
            
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
