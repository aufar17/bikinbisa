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
                    <h1 style="text-align: center">Laravel</h1>
                </div>
            </div>
            <div class="row text-center mt-3">
                <div class="col-10 offset-1 py-2" style="background-image: linear-gradient(to right, #63c0c8, #42cfad); font-size:30px;color:white;font-weight:500;margin-top:40px;margin-bottom:60px">
                PENDAHULUAN</div>
            </div>
            <div class="row mt-1" >
                <div class="col-10 offset-1" >
                    <p style="text-align: justify; font-size: 20px  ">
                        Laravel adalah salah satu framework PHP yang paling populer dan banyak digunakan di dunia pengembangan web. Diciptakan oleh Taylor Otwell pada tahun 2011, Laravel bertujuan untuk membuat proses pengembangan aplikasi web lebih mudah dan menyenangkan, dengan menyediakan berbagai alat dan fitur yang dirancang untuk meningkatkan produktivitas pengembang. Artikel ini akan membahas apa itu Laravel, fitur utamanya, serta keuntungan yang ditawarkannya bagi para pengembang.
                    </p>
                </div>
            </div>
            <div class="row text-center mt-3">
                <div class="col-10 offset-1 py-2" style="background-image: linear-gradient(to right, #63c0c8, #42cfad); font-size:30px;color:white;font-weight:500;margin-top:40px;margin-bottom:60px">
                PENGERTIAN</div>
            </div>
            <div class="row mt-1" >
                <div class="col-10 offset-1" >
                    <p style="text-align: justify; font-size: 20px  ">
                        Laravel adalah framework PHP open-source yang mengikuti pola arsitektur Model-View-Controller (MVC). Laravel menyediakan struktur dan tata letak yang konsisten untuk membangun aplikasi web, memungkinkan pengembang untuk fokus pada logika bisnis dan fungsionalitas aplikasi, daripada menghabiskan waktu mengatasi masalah infrastruktur dan boilerplate code.
                    </p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-10 offset-1 py-2" style="background-image: linear-gradient(to right, #63c0c8, #42cfad); font-size:30px;color:white;font-weight:500;margin-top:40px;margin-bottom:60px">
                FITUR UTAMA</div>
            </div>
            <div class="row mt-1">
                <div class="col-10 offset-1" style="text-align: justify; font-size: 20px">
                    <p>
                        <ol type="1" style="font-size: 20px" >
                            <li>
                                <p><strong>Blade Templating Engine</strong></p>
                                Penyerang pertama-tama mencoba menemukan titik masuk yang rentan di aplikasi web. Ini biasanya melibatkan pengujian berbagai formulir input, parameter URL, atau area lain di mana data pengguna diterima. Misalnya, penyerang mungkin memasukkan karakter khusus seperti ', ", ;, atau kata kunci SQL seperti SELECT, INSERT, atau UPDATE untuk melihat bagaimana aplikasi merespons.
                                Contoh: Menyuntikkan ' OR '1'='1 ke dalam input login. 
                            </li> <br>
                            <li>
                                <p><strong>Eloquent ORM</strong></p>
                                Eloquent adalah Object-Relational Mapper (ORM) Laravel yang memberikan pengembang cara yang elegan dan intuitif untuk bekerja dengan basis data. Dengan Eloquent, setiap tabel dalam basis data memiliki model yang terkait, yang memungkinkan pengembang untuk berinteraksi dengan tabel tersebut menggunakan objek PHP.
                            </li> <br>
                            <li>
                                <p><strong>Routing</strong></p>
                                Laravel menyediakan sistem routing yang fleksibel dan kuat, memungkinkan pengembang untuk mendefinisikan rute aplikasi mereka dengan mudah. Rute ini dapat mengarahkan permintaan ke controller tertentu atau mengeksekusi fungsi anonim, memberikan fleksibilitas penuh dalam penanganan permintaan HTTP.
                            </li> <br>
                            <li>
                                <p><strong>Middleware</strong></p>
                                Middleware adalah lapisan kode yang dapat dieksekusi sebelum atau sesudah permintaan HTTP diproses oleh aplikasi. Laravel menyediakan berbagai middleware bawaan seperti autentikasi dan verifikasi CSRF, serta memungkinkan pengembang untuk membuat middleware khusus sesuai kebutuhan aplikasi mereka.
                            </li> <br>
                            <li>
                                <p><strong>Artisan Console</strong></p>
                                Artisan adalah command-line interface (CLI) yang disertakan dengan Laravel. Artisan menyediakan berbagai perintah yang membantu pengembang dalam berbagai tugas pengembangan seperti migrasi basis data, pengelolaan paket, dan pembuatan kode boilerplate. Pengembang juga dapat membuat perintah Artisan khusus untuk mempercepat alur kerja mereka.
                            </li> <br>
                            <li>
                                <p><strong>Migration dan Seeding</strong></p>
                                Laravel menyediakan alat untuk mengelola skema basis data melalui migrasi. Dengan migrasi, pengembang dapat versi skema basis data mereka dan berbagi perubahan skema dengan tim. Selain itu, fitur seeding memungkinkan pengembang untuk mengisi basis data dengan data awal atau data uji dengan mudah.
                            </li> <br>
                            <li>
                                <p><strong>Queuing System</strong></p>
                                Laravel menyediakan sistem antrian yang kuat yang memungkinkan pengembang untuk menunda eksekusi tugas yang memakan waktu, seperti pengiriman email atau pemrosesan gambar. Sistem antrian ini membantu meningkatkan kinerja dan responsivitas aplikasi.
                            </li> <br>
                        </ol>
                    </p> 
                </div>
            </div>
            <div class="row text-center">
                <div class="col-10 offset-1 py-2" style="background-image: linear-gradient(to right, #63c0c8, #42cfad); font-size:30px;color:white;font-weight:500;margin-top:40px;margin-bottom:60px">
                KEUNTUNGAN</div>
            </div>
            <div class="row mt-1" style="margin-bottom: 70px">
                <div class="col-10 offset-1" style="text-align: justify; font-size: 20px">
                    <p>
                        <ol type="1" style="font-size: 20px" >
                            <li>
                                <p><strong>Produktivitas Tinggi</strong></p>
                                Dengan fitur-fitur seperti Blade, Eloquent, dan Artisan, Laravel memungkinkan pengembang untuk membangun aplikasi dengan cepat dan efisien. Alat-alat ini mengurangi jumlah kode yang harus ditulis dan memudahkan tugas-tugas umum dalam pengembangan web.
                            </li> <br>
                            <li>
                                <p><strong>Komunitas yang Besar dan Aktif</strong></p>
                                Laravel memiliki komunitas pengembang yang besar dan aktif, yang menyediakan banyak sumber daya seperti tutorial, paket, dan ekstensi yang dapat digunakan untuk mempercepat pengembangan. Komunitas yang kuat juga berarti dukungan dan bantuan tersedia dengan mudah.
                            </li> <br>
                            <li>
                                <p><strong>Keamanan</strong></p>
                                Laravel dilengkapi dengan berbagai fitur keamanan bawaan, seperti proteksi CSRF, validasi input, dan enkripsi data. Framework ini dirancang dengan keamanan dalam pikiran, membantu pengembang membangun aplikasi yang aman.
                            </li> <br>
                            <li>
                                <p><strong>Skalabilitas</strong></p>
                                Laravel dirancang untuk mendukung aplikasi dari berbagai skala, mulai dari proyek kecil hingga aplikasi enterprise. Dengan fitur seperti sistem antrian dan dukungan caching, Laravel dapat menangani beban kerja yang tinggi dan skala dengan mudah.
                            </li> <br>
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
