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
        background-image: linear-gradient(#63c0c8, #42cfad);
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
        <p
          class="navbar-brand me-auto mb-2 mb-lg-0"
          style="font-family: julius sans one"
        >
          BIKINBISA
        </p>
      </div>
    </nav>

    <div class="row my-4">
      <div class="col-12 text-center">
        <h2>Yuk lengkapi data dirimu!</h2>
      </div>
    </div>

    <form action="data-register-profile.php" method="post">
      <div class="row">
        <div class="col-md-4 offset-1 py-2 mt-3">
        <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Username</label>
                <input
                    name="username"
                    type="email"
                    class="form-control"
                    id="exampleFormControlInput1"
                    value="<?php echo $username; ?>"
                />
            </div>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input
              type="text"
              class="form-control"
              id="nama"
              name="nama"
              name="nama"
            />
          </div>
          <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input
              type="date"
              class="form-control"
              id="tanggal_lahir"
              name="tanggal_lahir"
            />
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea
              class="form-control"
              id="alamat"
              rows="3"
              name="alamat"
            ></textarea>
          </div>
        </div>
        <div class="col-md-4 offset-1 py-2 mt-3">
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
            <input
              type="text"
              class="form-control"
              id="institusi"
              name="institusi"
            />
          </div>
          <button type="submit" name="submit" class="btn btn-primary my-3">
            Simpan
          </button>
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



