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
    <link rel="icon" href="{{url('asset/img/logo.png')}}" />
    <link
      href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=League+Spartan:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <title>BikinBisa</title>
  </head>
  <body style="font-family: League Spartan">
    <div class="container-fluid text-center px-4" style="margin-top: 90px">
      <div class="row justify-content-center align-items-center">
        <div
          class="col-4 md-4 text-center"
          style="
            border-radius: 10px;
            background-image: linear-gradient(#63c0c8, #42cfad);
            padding: 50px 30px 10px 30px;
            box-shadow: 5px 5px 5px #cecece;
            margin-left: 50px;
          "
        >
          <h2 class="p-3">SIGN UP</h2>
          <div class="text-start">
            <form action="data-signup.php" method="post">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input
                  autofocus
                  type="email"
                  name="email"
                  class="form-control"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                  style="
                    background-color: #e5e5e5;
                    box-shadow: 2px 2px 2px gray;
                  "
                />
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"
                  >Username</label
                >
                <input
                  autofocus
                  type="text"
                  name="username"
                  class="form-control"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                  style="
                    background-color: #e5e5e5;
                    box-shadow: 2px 2px 2px gray;
                  "
                />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"
                  >Password</label
                >
                <input
                  type="password"
                  name="password"
                  class="form-control"
                  id="exampleInputPassword1"
                  style="
                    background-color: #e5e5e5;
                    box-shadow: 2px 2px 2px gray;
                  "
                />
              </div>
              <div class="d-flex justify-content-end">
                <button type="submit" name="submit" class="btn btn-dark my-2">
                  Sign Up
                </button>
              </div>
            </form>

            <div class="create-account">
              <div class="row align-items-center">
                <div class="col-12 py-4">
                  <h7>Already have an account?</h7>
                  <a href="index.html" style="color: white; font-weight: 500"
                    >Sign In</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 md-4 text-center offset-1">
          <img class="py-3" src="{{url('asset/img/logo.png')}}" alt="" />
          <h1 style="font-family: Julius Sans One">BIKINBISA</h1>
          <h4 class="py-4" style="font-family: league spartan">
            Turning Dreams into Reality Through Education
          </h4>
          <p
            class="keterangan"
            style="font-family: league spartan; font-style: italic"
          >
            Through our innovative learning approaches and dedicated support, we
            inspire and guide our students every step of the way, helping them
            achieve their dreams and make tangible impacts in their chosen
            fields.
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
