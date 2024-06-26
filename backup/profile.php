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
    <link rel="icon" href="asset/img/logo.png" />
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

      .nav-item:hover {
        background-image: linear-gradient(to right, #e5e5e5, #f2f2f2);
        height: 100%;
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
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary px-3">
      <div class="container-fluid">
        <img
          src="asset/img/logo.png"
          alt="Logo"
          style="height: 30px; width: 30px; margin-right: 10px"
        />
        <a
          class="navbar-brand"
          href="home.html"
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
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
              <a class="nav-link" href="#" style="font-family: 'League Spartan'"
                >Link</a
              >
            </li>
            <li class="nav-item dropdown mx-2">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                style="font-family: 'League Spartan'"
                >Dropdown</a
              >
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
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
                value="<?php echo $data['username']; ?>"
              >
              
                <i class="far fa-user"></i>
              </a>
              <div
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdown"
                data-bs-boundary="viewport"
              >
                <a class="dropdown-item" href="#">Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.html" style="color: red"
                  >Logout</a
                >
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div
      class="row"
    >
      <div class="col-12 my-3">
        <h2 class="text-center" style="font-family: 'League Spartan'">
          PROFILE
        </h2>
      </div>
    </div>
    <form action="data-profile.php" method="post">

    <div class="row" style="margin: 0">
        <div class="col-md-4 offset-1 py-5 mt-3">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Username</label>
                <input name="username" type="email" class="form-control" id="exampleFormControlInput1" value="<?php echo $_SESSION['username']; ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
            </div>
        </div>
        <div class="col-md-4 offset-1 py-5 mt-3">
            <div class="mb-3">
                <label for="jenjang" class="form-label">Jenjang</label>
                <select class="form-select" id="jenjang" name="jenjang">
                    <option selected disabled hidden>Pilih</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="institusi" class="form-label">Institusi</label>
                <input type="text" class="form-control" id="institusi" name="institusi">
            </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
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
