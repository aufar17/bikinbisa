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

        .avatar img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .avatar img:hover {
            transform: scale(1.1);
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
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-2">
                        <a class="nav-link" aria-current="page" href="{{route('home')}}"
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
                        <a class="nav-link active" href="#" style="font-family: 'League Spartan'">Tentang Kami</a>
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

    <div class="container-fluid text-center px-4" style="margin-top: 100px;margin-bottom:100px;text-align:justify">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 md-4 text-center">
                <img class="py-3" src="{{url('asset/img/logo.png')}}" alt="" />
                <h1 style="font-family: Julius Sans One">BIKINBISA</h1>
            </div>

            <div class="row" style="margin-top: 50px; font-size: 20px">
                <div class="col-10 offset-1 md-4">
                    <p style="
                                text-align: justify;
                                line-height: 2;
                                justify-content: center;
                            ">
                        <strong>BikinBisa</strong> adalah lebih dari sekedar
                        lembaga pendidikan. Kami adalah komunitas yang
                        berdedikasi untuk membantu setiap individu meraih
                        impian mereka melalui pendekatan pembelajaran yang
                        inovatif dan dukungan yang penuh komitmen. Kami
                        percaya bahwa setiap orang memiliki potensi untuk
                        meraih sukses, dan kami hadir untuk memastikan bahwa
                        perjalanan mereka menuju pencapaian tersebut
                        didukung dengan baik.
                    </p>
                </div>
            </div>

            <div class="row" style="font-size: 20px">
                <div class="col-3 offset-1 md-4 text-start" style="margin-top: 50px">
                    <h3>Tagline :</h3>
                </div>
                <div class="col-9 offset-1 md-4" style="margin-top: 10px">
                    <p style="text-align: justify; line-height: 2">
                        Turning Dreams into Reality Through Education
                    </p>
                </div>
            </div>

            <div class="row" style="font-size: 20px">
                <div class="col-3 offset-1 md-4 text-start" style="margin-top: 50px">
                    <h3>Tujuan :</h3>
                </div>
                <div class="col-9 offset-1 md-4" style="margin-top: 10px">
                    <p style="text-align: justify; line-height: 2">
                        Through our innovative learning approaches and dedicated support, we
                        inspire and guide our students every step of the way, helping them
                        achieve their dreams and make tangible impacts in their chosen
                        fields.
                    </p>
                </div>
            </div>
            <div class="row" style="font-size: 20px">
                <div class="col-1 offset-1 md-4 text-start" style="margin-top: 50px">
                    <h3>Visi :</h3>
                </div>
                <div class="col-10 offset-1 md-4" style="margin-top: 10px">
                    <p style="text-align: justify; line-height: 2">
                        Visi kami adalah menciptakan lingkungan belajar yang
                        inspiratif di mana setiap siswa dapat mengembangkan
                        potensi mereka sepenuhnya dan berkontribusi secara
                        positif dalam bidang yang mereka pilih.
                    </p>
                </div>
            </div>

            <div class="row" style="font-size: 20px">
                <div class="col-1 offset-1 md-4 text-start" style="margin-top: 50px">
                    <h3>Misi :</h3>
                </div>
                <div class="col-10 offset-1 md-4 my-2">
                    <p style="text-align: justify; line-height: 2">
                        1. <strong>Inovasi dalam Pembelajaran </strong>:
                        Kami terus berinovasi dalam metode pengajaran kami
                        untuk memastikan bahwa setiap siswa menerima
                        pendidikan yang relevan dan terkini. Kami
                        memanfaatkan teknologi terbaru dan teknik pengajaran
                        yang terbukti efektif untuk meningkatkan pengalaman
                        belajar.
                    </p>
                </div>

                <div class="col-10 offset-1 md-4 my-2">
                    <p style="text-align: justify; line-height: 2">
                        2. <strong>Dukungan yang Penuh Dedikasi</strong>:
                        Kami memahami bahwa perjalanan pendidikan bisa penuh
                        tantangan. Oleh karena itu, kami menyediakan
                        dukungan yang komprehensif bagi siswa kami, mulai
                        dari bimbingan akademik hingga konseling pribadi.
                    </p>
                </div>

                <div class="col-10 offset-1 md-4">
                    <p style="text-align: justify; line-height: 2">
                        3. <strong>Menginspirasi Melalui Teladan</strong>:
                        Kami percaya bahwa inspirasi adalah kunci
                        keberhasilan. Dengan menghadirkan tokoh-tokoh sukses
                        dan kisah inspiratif dalam program kami, kami
                        memberikan motivasi tambahan bagi siswa untuk terus
                        maju dan mencapai tujuan mereka.
                    </p>
                </div>
            </div>

            <div class="row my-2" style="font-size: 20px">
                <div class="col-3 offset-1 md-4 text-start" style="margin-top: 50px">
                    <h3>Komitmen Kami :</h3>
                </div>
                <div class="col-10 offset-1 md-4" style="margin-top: 10px">
                    <p style="text-align: justify; line-height: 2">
                        BikinBisa berkomitmen untuk terus meningkatkan
                        kualitas pendidikan dan dukungan yang kami berikan.
                        Kami bertekad untuk menjadi mitra yang andal dalam
                        perjalanan pendidikan setiap siswa, membantu mereka
                        mengatasi tantangan, dan meraih kesuksesan yang
                        berkelanjutan. Dengan BikinBisa, impian Anda bukan
                        hanya akan tetap menjadi mimpi. Kami akan bekerja
                        sama dengan Anda, setiap langkahnya, untuk
                        memastikan bahwa Anda memiliki alat, sumber daya,
                        dan dukungan yang Anda butuhkan untuk mengubah
                        impian tersebut menjadi kenyataan. Bergabunglah
                        dengan kami di BikinBisa, di mana pendidikan tidak
                        hanya tentang belajar, tetapi juga tentang meraih
                        impian dan membuat dampak yang nyata. Bersama-sama,
                        kita akan menciptakan masa depan yang lebih baik dan
                        lebih cerah melalui pendidikan.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-10 offset-1 py-2"
                    style="background-image: linear-gradient(to right, #63c0c8, #42cfad); font-size:30px;color:white;font-weight:500;margin-top:40px;margin-bottom:60px">
                    OURS</div>
            </div>

            <div class="container">
                <div class="row" style="font-size: 20px; margin-top: 20px;">
                    <div class="col-1 offset-1 avatar">
                        <img src="{{ url('asset/img/jano.jpg') }}" alt="Avatar">
                    </div>
                    <div class="col-6 md-4">
                        <div class="row" style="margin-left: 20px;">
                            <div class="col-12 text-start">
                                <h3>Tanzano Mikail Arnanto</h3>
                            </div>
                        </div>
                        <div class="row" style="margin-left: 20px;">
                            <div class="col-12 text-start py-2">
                                <p style="line-height: 2;font-style:italic">Front End & Designer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="font-size: 20px; margin-top: 20px;">
                    <div class="col-1 offset-1 avatar">
                        <img src="{{ url('asset/img/aufar.jpg') }}" alt="Avatar">
                    </div>
                    <div class="col-6 md-4">
                        <div class="row" style="margin-left: 20px;">
                            <div class="col-12 text-start">
                                <h3>Muammar Aufar Prasetya</h3>
                            </div>
                        </div>
                        <div class="row" style="margin-left: 20px;">
                            <div class="col-12 text-start py-2">
                                <p style="line-height: 2;font-style:italic">Front End & Back End</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="font-size: 20px; margin-top: 20px;">
                    <div class="col-1 offset-1 avatar">
                        <img src="{{ url('asset/img/anung.jpg') }}" alt="Avatar">
                    </div>
                    <div class="col-6 md-4">
                        <div class="row" style="margin-left: 20px;">
                            <div class="col-12 text-start">
                                <h3>Tri Anung Nugroho</h3>
                            </div>
                        </div>
                        <div class="row" style="margin-left: 20px;">
                            <div class="col-12 text-start py-2">
                                <p style="line-height: 2;font-style:italic">Front End & Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>