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
      html,
      body {
        overflow-x: hidden;
        margin: 0;
        padding: 0;
        font-family: 'League Spartan', sans-serif;
      }

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

      .col-md-4 .mb-3 input,
      .col-md-4 .mb-3 textarea,
      .col-md-4 .mb-3 select {
        background-color: #f2f2f2;
        box-shadow: 2px 1px 2px 1px #cecece;
      }

      .row button {
        margin-top: 20px;
        width: 80px;
        font-size: 16px;
        align-self: flex-end;

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

      .biodata{
        font-size: 18px
      }

      
         
      

      
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary px-3">
      <div class="container-fluid">
        <img
          src="{{url('asset/img/logo.png')}}"
          alt="Logo"
          style="height: 30px; width: 30px; margin-right: 10px; margin-left: 100px;"
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

      <div class="col-12" style="margin-top: 30px ">
        <h2 class="text-center" style="font-family: 'League Spartan'">
          PROFILE
        </h2>
      </div>
    </div>
    <form action="{{route('profile-action')}}" method="post">

      <div class="row">
        <div class="col-md-3 justify-content-center offset-1"style="margin-top:50px;padding-top:30px;box-shadow:2px 2px 7px 3px grey;border-radius:10px"  >
          <div class="row ">
            <div class="col-md-1 offset-5 avatar">
              <i class="far fa-user" style="font-size: 30px"></i>
            </div>
          </div>
          <div class="row ">
            <div class="col-md-12 mt-4 text-center">
              <h5>{{ $profile['nama'] }}</h5>  
            </div>
          </div>
          <div class=" biodata row mx-1" style="margin-top: 50px">
            <div class="col-md-12" style="border-bottom: 1px solid grey">
              <p>Username 
                <span class="float-end">
                  {{ $profile['username'] }}
                </span></p>  
            </div>
            <div class="col-md-12" style="margin-top:10px;border-bottom: 1px solid grey">
              <p>Email 
                <span class="float-end">
                  {{ $profile['email'] }}
                </span></p>  
            </div>
            <div class="col-md-12" style="margin-top:10px;border-bottom: 1px solid grey">
              <p>Institusi 
                <span class="float-end">
                  {{ $profile['institusi'] }}
                </span></p>  
            </div>
            
          </div>
        </div>
          
          <div class="col-md-6 offset-1"style="margin-top:50px;padding:0 30px 30px 30px ;box-shadow:2px 2px 7px 3px grey;border-radius:10px" >
              <div class="col-12 text-center py-2" style=";background-image: linear-gradient(to right, #63c0c8, #42cfad); font-size:30px;color:white;font-weight:500;margin-top:20px;margin-bottom:30px">
                UBAH PROFILE
              </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Username</label>
              <input name="username" type="text" class="form-control" id="exampleFormControlInput1" value="{{ $profile['username'] }}" readonly>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" value="{{ $profile['email'] }}" >
        </div>
          <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" value="{{ $profile['nama'] }}">
          </div>
          <div class="mb-3">
              <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
              <input type="date" class="form-control" id="tanggal_lahir" name="tgl_lahir" value="{{ $profile['tgl_lahir'] }}">
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3" name="alamat">{{ $profile['alamat'] }}</textarea>
          </div>
            <div class="mb-3">
                <label for="jenjang" class="form-label">Jenjang</label>
                <select class="form-select" id="jenjang" name="jenjang">
                    <option selected disabled hidden>Pilih</option>
                    <option value="SD" {{ $profile['jenjang'] == 'SD' ? 'selected' : '' }}>SD</option>
                    <option value="SMP" {{ $profile['jenjang'] == 'SMP' ? 'selected' : '' }}>SMP</option>
                    <option value="SMA" {{ $profile['jenjang'] == 'SMA' ? 'selected' : '' }}>SMA</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="institusi" class="form-label">Institusi</label>
                <input type="text" class="form-control" id="institusi" name="institusi" value="{{ $profile['institusi'] }}">
            </div>
          </div>
    </div>
    <div class="row" style="margin-bottom: 50px;margin-top:30px ">
      <div class="col-6 offset-5" style="display:flex;justify-content: end;width=100%;position:relative">
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{route('home')}}">
          <button type="submit" class="btn btn-danger"  style="margin-left: 5px">Cancel</button>
        </a>
      </div>
    </div>
</form>


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
