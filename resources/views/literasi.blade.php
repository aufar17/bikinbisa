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

      .nav-item{
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
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 md-4 ">
            <li class="nav-item mx-2">
              <a
                class="nav-link active"
                aria-current="page"
                href="{{route('home')}}"
                style="font-family: 'League Spartan'"
                >Home</a
              >
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#" style="font-family: 'League Spartan'"
                >Beli Paket</a
              >
            </li>
            
            <li class="nav-item mx-2">
              <a class="nav-link" href="{{route('literasi')}}" style="font-family: 'League Spartan'"
                >Literasi</a>
            </li>

            <li class="nav-item mx-2">
              <a class="nav-link" href="{{route('tentang-kami')}}" style="font-family: 'League Spartan'"
                >Tentang Kami</a>
            </li>
          </ul>
          <form class="d-flex ms-auto mx-4" role="search">
            <div class="input-group">
              <input
                class="form-control align-self-center"
                type="search"
                placeholder="Search"
                aria-label="Search"
                style="height: 40px; font-family: 'League Spartan'"
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
                <a class="dropdown-item" href="{{route('profile')}}">Manage Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('logout')}}" style="color: red"
                  >Logout</a
                >
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-10 offset-1" style="margin-top: 30px">
                <div class="h1">LITERASI</div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-10 offset-1 py-2" style="background-image: linear-gradient(to right, #63c0c8, #42cfad); font-size:30px;color:white;font-weight:500;margin-top:40px;margin-bottom:60px;padding-left:20px">
            TEKNOLOGI</div>
        </div>
    </div>

    <div class="container my-4">
            <div id="cardCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row ">
                            <div class="col-6">
                                <div class="card mb-3">
                                    <a href="{{route('artikel1')}}" style="text-decoration: none;color:black">
                                        <img src="asset/img/artikel1.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">SQL Injection</h5>
                                            <p class="card-text">SQL Injection dan pencegahannya</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card mb-3">
                                    <a href="{{route('artikel2')}}" style="text-decoration: none;color:black">
                                        <img src="asset/img/artikel2.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Laravel</h5>
                                            <p class="card-text">Apa itu Laravel?</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row ">
                            <div class="col-6">
                                <div class="card mb-3">
                                    <a href="{{route('artikel2')}}" style="text-decoration: none;color:black">
                                        <img src="asset/img/artikel2.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Laravel</h5>
                                            <p class="card-text">Apa itu Laravel?</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card mb-3">
                                    <a href="{{route('artikel1')}}" style="text-decoration: none;color:black">
                                        <img src="asset/img/artikel1.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">SQL Injection</h5>
                                            <p class="card-text">Kenali SQL Injection dan Pencegahannya Sebelum Terlambat</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tambahkan carousel-item tambahan sesuai kebutuhan -->
                </div>
                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    <div
      class="container"
      style="background-image: linear-gradient(#63c0c8, #42cfad)"
    >
      <div class="row">
        <div class="col-12"></div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    
    <script>
        $(document).ready(function(){
            $('#cardCarousel').carousel({
                interval: 1000 
            });
        });
    </script>
  </body>
</html>
