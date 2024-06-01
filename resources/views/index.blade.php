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
        background-image: linear-gradient(#63c0c8, #42cfad);
      }
      .nav-item:hover {
        background-image: linear-gradient(to right, #e5e5e5, #f2f2f2);
        height: 100%; /* Ensures the hover covers the full height */
      }
      .form-control:focus {
        outline: 2px solid #42cfad;
        box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
      }
      .btn-logout .dropdown-menu {
        right: 0;
        left: auto;
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
        <a class="navbar-brand" href="#" style="font-family: 'Julius Sans One'"
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
                href="#"
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
              >
                <i class="far fa-user"></i>
              </a>
              <div
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdown"
                data-bs-boundary="viewport"
              >
                <a class="dropdown-item" href="profile.php">Profile</a>
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
  </body>
</html>
