<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
  <link rel="icon" href="asset/img/logo.png">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=League+Spartan:wght@100..900&display=swap"
    rel="stylesheet">
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

    .navbar-nav li {
      font-size: 20px;
    }

    .dropdown-menu .dropdown-item {
      font-size: 15px;
    }

    .sidebar {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1000;
      top: 14.5px;
      left: 0;
      background-color: whitesmoke;
      box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 40px;
    }

    .sidebar a {
      padding: 10px 15px;
      text-decoration: none;
      color: #818181;
      display: block;
      transition: 0.3s;
    }

    .sidebar a:hover {
      color: #f1f1f1;
    }

    .sidebar .closebtn {
      display: none;
    }

    @media screen and (max-height: 450px) {
      .sidebar {
        padding-top: 15px;
      }

      .sidebar a {
        font-size: 18px;
      }
    }

    .task-icon {
      display: flex;
      align-items: center;
    }

    .task-icon a {
      margin-right: 5px;
    }

    .task-icon a {
      margin-left: 5px;
    }

    .main-content {
      transition: margin-left 0.5s;
      margin-top: 120px;
      margin-left: 250px;
      position: absolute;
      overflow-y: auto;

    }

    .task-content {
      transition: margin-left 0.5s;
    }

    .question {
      margin-bottom: 20px;
    }

    .home-content {
      transition: margin-left 0.5s;
    }

    .materi-content {
      transition: margin-left 0.5s;
    }

    .task-content ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    /* Menambahkan spasi antara checkbox dan teks */
    .task-content ul li {
      margin-bottom: 10px;
    }
  </style>
</head>

<body style="font-family: league spartan">
  <nav class="navbar navbar-expand-lg bg-body-tertiary px-3">
    <button class="btn mx-5" onclick="toggleNav()">☰</button>
    <div class="container-fluid">
      <img src="{{url('asset/img/logo.png')}}" alt="Logo"
        style="height: 30px; width: 30px; margin-right: 10px; margin-left: -30px;" />
      <a class="navbar-brand" href="{{route('home')}}" style="font-family: 'Julius Sans One'">BIKINBISA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
            <a class="nav-link" href="{{route('literasi')}}" style="font-family: 'League Spartan'">Literasi</a>
          </li>

          <li class="nav-item mx-2">
            <a class="nav-link" href="{{route('tentang-kami')}}" style="font-family: 'League Spartan'">Tentang Kami</a>
          </li>
        </ul>
        <form class="d-flex ms-auto mx-4" role="search">
          <div class="input-group">
            <input class="form-control align-self-center" type="search" placeholder="Search" aria-label="Search"
              style="height: 40px; font-family: 'League Spartan'" />
          </div>
        </form>
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="btn-logout nav-item dropdown ms-auto align-self-center rounded-circle avatar">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

              <i class="far fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" data-bs-boundary="viewport">
              <a class="dropdown-item" href="{{route('profile')}}">Manage Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{route('logout')}}" style="color: red">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Sidebar -->

  <div class="container">
    <div class="row">
      <div class="col">
        <div id="mySidebar" class="sidebar mt-5">
          <h5 class="offset-2">Bar Menu</h5>
          <div class="mx-3">
            <div class="task-icon">
              <a href="#" class="fa-solid fa-dashboard"></a>
              <a href="#" class="home-link mt-1">Dashboard</a>
            </div>
            <div class="task-icon">
              <a href="#" class="fa-solid fa-book"></a>
              <a href="#" class="materi-link">Materi</a>
            </div>
            <div class="task-icon">
              <a href="#" class="fa-solid fa-list-check"></a>
              <a href="#" class="task-link">Task 1</a>
            </div>
            <div class="task-icon">
              <a href="#" class="fa-solid fa-list-check"></a>
              <a href="#" class="task2-link">Task 2</a>
            </div>
            <div class="task-icon">
              <a href="#" class="fa-solid fa-list-check"></a>
              <a href="#" class="task3-link">Task 3</a>
            </div>
            <div class="task-icon">
              <a href="#" class="fa-solid fa-calendar"></a>
              <a href="#" class="jadwal-link">Jadwal</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="main-content">
    <div class="container mt-5">
      <div class="row">
        <div class="col">
          <h1>Welcome to BikinBisa</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet magna vehicula, laoreet est ac,
            ultricies leo. Integer condimentum magna eget ultrices condimentum. Nullam sit amet nisl tortor. Aliquam
            placerat a lectus sit amet aliquam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
            cubilia Curae; Nullam eget leo in tortor lacinia laoreet. Suspendisse potenti. Proin euismod justo in
            consequat fringilla. Fusce bibendum, dolor a dignissim interdum, orci arcu viverra mauris, nec auctor eros
            arcu sed turpis. Nam sit amet diam dignissim, mattis orci ut, tempor enim.</p>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script>
    function toggleNav() {
      var sidebarWidth = document.getElementById("mySidebar").style.width;
      if (sidebarWidth === "250px") {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementsByClassName("main-content")[0].style.marginLeft = "250px";
      } else {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementsByClassName("main-content")[0].style.marginLeft = "300px";
      }
    }

    function showTask1Content() {
      // Clear existing content
      document.querySelector(".main-content").innerHTML = "";

      // Content for Task 1 - Latihan UTBK TPS
      var task1Content = `
      <div class="task-content">
        <div class="container mt-5>
          <div class="row">
            <div class="col">
              <h2>Task 1 - Latihan UTBK TPS</h2>
            <p>Ini adalah latihan untuk Tes Potensi Skolastik (TPS) UTBK.</p>
            <div class="question">
              <h3>Soal 1</h3>
              <p>Jika A = {1, 2, 3} dan B = {3, 4, 5}, berapakah jumlah anggota himpunan A ∪ B?</p>
              <ul>
                <li><input type="checkbox" name="answer1" value="A"> A. 3</li>
                <li><input type="checkbox" name="answer1" value="B"> B. 5</li>
                <li><input type="checkbox" name="answer1" value="C"> C. 6</li>
                <li><input type="checkbox" name="answer1" value="D"> D. 7</li>
              </ul>
            </div>
            <div class="question">
              <h3>Soal 2</h3>
              <p>Suatu segitiga memiliki panjang sisi-sisi 6 cm, 8 cm, dan 10 cm. Apakah segitiga tersebut merupakan segitiga siku-siku?</p>
              <ul>
                <li><input type="checkbox" name="answer2" value="A"> A. Ya</li>
                <li><input type="checkbox" name="answer2" value="B"> B. Tidak</li>
              </ul>
            </div>
            <div class="question">
              <h3>Soal 3</h3>
              <p>Diketahui bahwa (x - 2)(x + 3) = x^2 + 4x - 6. Berapakah nilai dari x?</p>
              <ul>
                <li><input type="checkbox" name="answer3" value="A"> A. -2</li>
                <li><input type="checkbox" name="answer3" value="B"> B. 2</li>
                <li><input type="checkbox" name="answer3" value="C"> C. 3</li>
                <li><input type="checkbox" name="answer3" value="D"> D. 6</li>
              </ul>
            </div>
            <div class="question">
              <h3>Soal 4</h3>
              <p>Jika suatu segitiga memiliki tinggi 10 cm dan luas 30 cm², berapakah panjang alasnya?</p>
              <ul>
                <li><input type="checkbox" name="answer4" value="A"> A. 3 cm</li>
                <li><input type="checkbox" name="answer4" value="B"> B. 6 cm</li>
                <li><input type="checkbox" name="answer4" value="C"> C. 9 cm</li>
                <li><input type="checkbox" name="answer4" value="D"> D. 12 cm</li>
              </ul>
            </div>
            <div class="question">
              <h3>Soal 5</h3>
              <p>Jika harga satu buah pensil adalah Rp 500,-, berapakah harga 5 buah pensil?</p>
              <ul>
                <li><input type="checkbox" name="answer5" value="A"> A. Rp 1000,-</li>
                <li><input type="checkbox" name="answer5" value="B"> B. Rp 2000,-</li>
                <li><input type="checkbox" name="answer5" value="C"> C. Rp 2500,-</li>
                <li><input type="checkbox" name="answer5" value="D"> D. Rp 3000,-</li>
              </ul>
            </div>
            <div class="question">
              <h3>Soal 6</h3>
              <p>Jika panjang diagonal sebuah persegi adalah 10 cm, berapakah luas persegi tersebut?</p>
              <ul>
                <li><input type="checkbox" name="answer6" value="A"> A. 25 cm²</li>
                <li><input type="checkbox" name="answer6" value="B"> B. 50 cm²</li>
                <li><input type="checkbox" name="answer6" value="C"> C. 75 cm²</li>
                <li><input type="checkbox" name="answer6" value="D"> D. 100 cm²</li>
              </ul>
            </div>
            <div class="question">
              <h3>Soal 7</h3>
              <p>Jika 2x - 5 = 7, berapakah nilai x?</p>
              <ul>
                <li><input type="checkbox" name="answer7" value="A"> A. 1</li>
                <li><input type="checkbox" name="answer7" value="B"> B. 3</li>
                <li><input type="checkbox" name="answer7" value="C"> C. 6</li>
                <li><input type="checkbox" name="answer7" value="D"> D. 8</li>
              </ul>
            </div>
            <div class="question">
              <h3>Soal 8</h3>
              <p>Jika sebuah trapesium memiliki panjang sisi sejajar 5 cm dan 10 cm serta tinggi 8 cm, berapakah luasnya?</p>
              <ul>
                <li><input type="checkbox" name="answer8" value="A"> A. 30 cm²</li>
                <li><input type="checkbox" name="answer8" value="B"> B. 40 cm²</li>
                <li><input type="checkbox" name="answer8" value="C"> C. 50 cm²</li>
                <li><input type="checkbox" name="answer8" value="D"> D. 60 cm²</li>
              </ul>
            </div>
            <div class="question">
              <h3>Soal 9</h3>
              <p>Jika harga 3 kg beras adalah Rp 15.000,-, berapakah harga 5 kg beras?</p>
              <ul>
                <li><input type="checkbox" name="answer9" value="A"> A. Rp 20.000,-</li>
                <li><input type="checkbox" name="answer9" value="B"> B. Rp 25.000,-</li>
                <li><input type="checkbox" name="answer9" value="C"> C. Rp 30.000,-</li>
                <li><input type="checkbox" name="answer9" value="D"> D. Rp 35.000,-</li>
              </ul>
            </div>
            <div class="question">
              <h3>Soal 10</h3>
              <p>Jika suatu bilangan jika dikurangi 5 menghasilkan hasil yang sama jika dikalikan 4, berapakah bilangan tersebut?</p>
              <ul>
                <li><input type="checkbox" name="answer10" value="A"> A. 4</li>
                <li><input type="checkbox" name="answer10" value="B"> B. 5</li>
                <li><input type="checkbox" name="answer10" value="C"> C. 6</li>
                <li><input type="checkbox" name="answer10" value="D"> D. 7</li>
              </ul>
            </div>
            </div>
          </div>
        </div>
      </div>
      `;

      // Display Task 1 content
      document.querySelector(".main-content").innerHTML = task1Content;

      // Add event listener to handle checkbox selection
      document.querySelectorAll('.question input[type="checkbox"]').forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
          // Deselect all checkboxes in the same question
          document.querySelectorAll('input[name="' + this.name + '"]').forEach(function (checkbox) {
            checkbox.checked = false;
          });
          // Select the clicked checkbox
          this.checked = true;
        });
      });
    }

    function showTask2Content() {
      // Clear existing content
      document.querySelector(".main-content").innerHTML = "";

      // Content for Task 1 - Latihan UTBK TPS
      var task2Content = `
      <div class="task-content"">
        <div class="container mt-5">
          <div class="row">
            <div class="col">
              <h2>Task 2 - Latihan UTBK TPS</h2>
            <p>Ini adalah latihan untuk Tes Potensi Skolastik (TPS) UTBK.</p>
            <div class="question">
              <h3>Soal 1</h3>
              <p>Jika A = {1, 2, 3} dan B = {3, 4, 5}, berapakah jumlah anggota himpunan A ∪ B?</p>
              <ul>
                <li><input type="checkbox" name="answer1" value="A"> A. 3</li>
                <li><input type="checkbox" name="answer1" value="B"> B. 5</li>
                <li><input type="checkbox" name="answer1" value="C"> C. 6</li>
                <li><input type="checkbox" name="answer1" value="D"> D. 7</li>
              </ul>
            </div>
            <div class="question">
              <h3>Soal 2</h3>
              <p>Suatu segitiga memiliki panjang sisi-sisi 6 cm, 8 cm, dan 10 cm. Apakah segitiga tersebut merupakan segitiga siku-siku?</p>
              <ul>
                <li><input type="checkbox" name="answer2" value="A"> A. Ya</li>
                <li><input type="checkbox" name="answer2" value="B"> B. Tidak</li>
              </ul>
            </div>
            <div class="question">
              <h3>Soal 3</h3>
              <p>Diketahui bahwa (x - 2)(x + 3) = x^2 + 4x - 6. Berapakah nilai dari x?</p>
              <ul>
                <li><input type="checkbox" name="answer3" value="A"> A. -2</li>
                <li><input type="checkbox" name="answer3" value="B"> B. 2</li>
                <li><input type="checkbox" name="answer3" value="C"> C. 3</li>
                <li><input type="checkbox" name="answer3" value="D"> D. 6</li>
              </ul>
            </div>
            <div class="question">
              <h3>Soal 4</h3>
              <p>Jika suatu segitiga memiliki tinggi 10 cm dan luas 30 cm², berapakah panjang alasnya?</p>
              <ul>
                <li><input type="checkbox" name="answer4" value="A"> A. 3 cm</li>
                <li><input type="checkbox" name="answer4" value="B"> B. 6 cm</li>
                <li><input type="checkbox" name="answer4" value="C"> C. 9 cm</li>
                <li><input type="checkbox" name="answer4" value="D"> D. 12 cm</li>
              </ul>
            </div>
            <div class="question">
              <h3>Soal 5</h3>
              <p>Jika harga satu buah pensil adalah Rp 500,-, berapakah harga 5 buah pensil?</p>
              <ul>
                <li><input type="checkbox" name="answer5" value="A"> A. Rp 1000,-</li>
                <li><input type="checkbox" name="answer5" value="B"> B. Rp 2000,-</li>
                <li><input type="checkbox" name="answer5" value="C"> C. Rp 2500,-</li>
                <li><input type="checkbox" name="answer5" value="D"> D. Rp 3000,-</li>
              </ul>
            </div>
            <div class="question">
              <h3>Soal 6</h3>
              <p>Jika panjang diagonal sebuah persegi adalah 10 cm, berapakah luas persegi tersebut?</p>
              <ul>
                <li><input type="checkbox" name="answer6" value="A"> A. 25 cm²</li>
                <li><input type="checkbox" name="answer6" value="B"> B. 50 cm²</li>
                <li><input type="checkbox" name="answer6" value="C"> C. 75 cm²</li>
                <li><input type="checkbox" name="answer6" value="D"> D. 100 cm²</li>
              </ul>
            </div>
            <div class="question">
              <h3>Soal 7</h3>
              <p>Jika 2x - 5 = 7, berapakah nilai x?</p>
              <ul>
                <li><input type="checkbox" name="answer7" value="A"> A. 1</li>
                <li><input type="checkbox" name="answer7" value="B"> B. 3</li>
                <li><input type="checkbox" name="answer7" value="C"> C. 6</li>
                <li><input type="checkbox" name="answer7" value="D"> D. 8</li>
              </ul>
            </div>
            <div class="question">
              <h3>Soal 8</h3>
              <p>Jika sebuah trapesium memiliki panjang sisi sejajar 5 cm dan 10 cm serta tinggi 8 cm, berapakah luasnya?</p>
              <ul>
                <li><input type="checkbox" name="answer8" value="A"> A. 30 cm²</li>
                <li><input type="checkbox" name="answer8" value="B"> B. 40 cm²</li>
                <li><input type="checkbox" name="answer8" value="C"> C. 50 cm²</li>
                <li><input type="checkbox" name="answer8" value="D"> D. 60 cm²</li>
              </ul>
            </div>
            <div class="question">
              <h3>Soal 9</h3>
              <p>Jika harga 3 kg beras adalah Rp 15.000,-, berapakah harga 5 kg beras?</p>
              <ul>
                <li><input type="checkbox" name="answer9" value="A"> A. Rp 20.000,-</li>
                <li><input type="checkbox" name="answer9" value="B"> B. Rp 25.000,-</li>
                <li><input type="checkbox" name="answer9" value="C"> C. Rp 30.000,-</li>
                <li><input type="checkbox" name="answer9" value="D"> D. Rp 35.000,-</li>
              </ul>
            </div>
            <div class="question">
              <h3>Soal 10</h3>
              <p>Jika suatu bilangan jika dikurangi 5 menghasilkan hasil yang sama jika dikalikan 4, berapakah bilangan tersebut?</p>
              <ul>
                <li><input type="checkbox" name="answer10" value="A"> A. 4</li>
                <li><input type="checkbox" name="answer10" value="B"> B. 5</li>
                <li><input type="checkbox" name="answer10" value="C"> C. 6</li>
                <li><input type="checkbox" name="answer10" value="D"> D. 7</li>
              </ul>
            </div>
            </div>
          </div>
        </div>
      </div>
      `;

      // Display Task 1 content
      document.querySelector(".main-content").innerHTML = task2Content;

      // Add event listener to handle checkbox selection
      document.querySelectorAll('.question input[type="checkbox"]').forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
          // Deselect all checkboxes in the same question
          document.querySelectorAll('input[name="' + this.name + '"]').forEach(function (checkbox) {
            checkbox.checked = false;
          });
          // Select the clicked checkbox
          this.checked = true;
        });
      });
    }

    function showTask3Content() {
      // Clear existing content
      document.querySelector(".main-content").innerHTML = "";

      // Content for Task 1 - Latihan UTBK TPS
      var task3Content = `
      <div class="task-content">
        <div class="container mt-5">
          <div class="row">
            <div class="col">
              <h2>Task 3 - Latihan UTBK TPS</h2>
            <p>Ini adalah latihan untuk Tes Potensi Skolastik (TPS) UTBK.</p>
            <div class="question">
              <h3>Soal 1</h3>
              <p>Jika A = {1, 2, 3} dan B = {3, 4, 5}, berapakah jumlah anggota himpunan A ∪ B?</p>
              <ul>
                <li><input type="checkbox" name="answer1" value="A"> A. 3</li>
                <li><input type="checkbox" name="answer1" value="B"> B. 5</li>
                <li><input type="checkbox" name="answer1" value="C"> C. 6</li>
                <li><input type="checkbox" name="answer1" value="D"> D. 7</li>
              </ul>
            </div>
            <div class="question">
              <h3>Soal 2</h3>
              <p>Suatu segitiga memiliki panjang sisi-sisi 6 cm, 8 cm, dan 10 cm. Apakah segitiga tersebut merupakan segitiga siku-siku?</p>
              <ul>
                <li><input type="checkbox" name="answer2" value="A"> A. Ya</li>
                <li><input type="checkbox" name="answer2" value="B"> B. Tidak</li>
              </ul>
            </div>
            <div class="question">
              <h3>Soal 3</h3>
              <p>Diketahui bahwa (x - 2)(x + 3) = x^2 + 4x - 6. Berapakah nilai dari x?</p>
              <ul>
                <li><input type="checkbox" name="answer3" value="A"> A. -2</li>
                <li><input type="checkbox" name="answer3" value="B"> B. 2</li>
                <li><input type="checkbox" name="answer3" value="C"> C. 3</li>
                <li><input type="checkbox" name="answer3" value="D"> D. 6</li>
              </ul>
            </div>
            <div class="question">
              <h3>Soal 4</h3>
              <p>Jika suatu segitiga memiliki tinggi 10 cm dan luas 30 cm², berapakah panjang alasnya?</p>
              <ul>
                <li><input type="checkbox" name="answer4" value="A"> A. 3 cm</li>
                <li><input type="checkbox" name="answer4" value="B"> B. 6 cm</li>
                <li><input type="checkbox" name="answer4" value="C"> C. 9 cm</li>
                <li><input type="checkbox" name="answer4" value="D"> D. 12 cm</li>
              </ul>
            </div>
            <div class="question">
              <h3>Soal 5</h3>
              <p>Jika harga satu buah pensil adalah Rp 500,-, berapakah harga 5 buah pensil?</p>
              <ul>
                <li><input type="checkbox" name="answer5" value="A"> A. Rp 1000,-</li>
                <li><input type="checkbox" name="answer5" value="B"> B. Rp 2000,-</li>
                <li><input type="checkbox" name="answer5" value="C"> C. Rp 2500,-</li>
                <li><input type="checkbox" name="answer5" value="D"> D. Rp 3000,-</li>
              </ul>
            </div>
            <div class="question">
              <h3>Soal 6</h3>
              <p>Jika panjang diagonal sebuah persegi adalah 10 cm, berapakah luas persegi tersebut?</p>
              <ul>
                <li><input type="checkbox" name="answer6" value="A"> A. 25 cm²</li>
                <li><input type="checkbox" name="answer6" value="B"> B. 50 cm²</li>
                <li><input type="checkbox" name="answer6" value="C"> C. 75 cm²</li>
                <li><input type="checkbox" name="answer6" value="D"> D. 100 cm²</li>
              </ul>
            </div>
            <div class="question">
              <h3>Soal 7</h3>
              <p>Jika 2x - 5 = 7, berapakah nilai x?</p>
              <ul>
                <li><input type="checkbox" name="answer7" value="A"> A. 1</li>
                <li><input type="checkbox" name="answer7" value="B"> B. 3</li>
                <li><input type="checkbox" name="answer7" value="C"> C. 6</li>
                <li><input type="checkbox" name="answer7" value="D"> D. 8</li>
              </ul>
            </div>
            <div class="question">
              <h3>Soal 8</h3>
              <p>Jika sebuah trapesium memiliki panjang sisi sejajar 5 cm dan 10 cm serta tinggi 8 cm, berapakah luasnya?</p>
              <ul>
                <li><input type="checkbox" name="answer8" value="A"> A. 30 cm²</li>
                <li><input type="checkbox" name="answer8" value="B"> B. 40 cm²</li>
                <li><input type="checkbox" name="answer8" value="C"> C. 50 cm²</li>
                <li><input type="checkbox" name="answer8" value="D"> D. 60 cm²</li>
              </ul>
            </div>
            <div class="question">
              <h3>Soal 9</h3>
              <p>Jika harga 3 kg beras adalah Rp 15.000,-, berapakah harga 5 kg beras?</p>
              <ul>
                <li><input type="checkbox" name="answer9" value="A"> A. Rp 20.000,-</li>
                <li><input type="checkbox" name="answer9" value="B"> B. Rp 25.000,-</li>
                <li><input type="checkbox" name="answer9" value="C"> C. Rp 30.000,-</li>
                <li><input type="checkbox" name="answer9" value="D"> D. Rp 35.000,-</li>
              </ul>
            </div>
            <div class="question">
              <h3>Soal 10</h3>
              <p>Jika suatu bilangan jika dikurangi 5 menghasilkan hasil yang sama jika dikalikan 4, berapakah bilangan tersebut?</p>
              <ul>
                <li><input type="checkbox" name="answer10" value="A"> A. 4</li>
                <li><input type="checkbox" name="answer10" value="B"> B. 5</li>
                <li><input type="checkbox" name="answer10" value="C"> C. 6</li>
                <li><input type="checkbox" name="answer10" value="D"> D. 7</li>
              </ul>
            </div>
            </div>
          </div>
        </div>
      </div>
      `;

      // Display Task 1 content
      document.querySelector(".main-content").innerHTML = task3Content;

      // Add event listener to handle checkbox selection
      document.querySelectorAll('.question input[type="checkbox"]').forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
          // Deselect all checkboxes in the same question
          document.querySelectorAll('input[name="' + this.name + '"]').forEach(function (checkbox) {
            checkbox.checked = false;
          });
          // Select the clicked checkbox
          this.checked = true;
        });
      });
    }

    function showMateriContent() {
      // Clear existing content
      document.querySelector(".main-content").innerHTML = "";

      // Initial content
      var materiContent = `
      <div class="materi-content">
        <div class="container mt-5">
          <div class="row">
            <div class="col">
              <h4>Materi</h4>
            </div>
          </div>
        </div> 
        <div class="container mt-5">
          <div class="row">
            <div class="col-md">
              <div class="card" style="width: 18rem;">
                <img src="./asset/img/paket.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card" style="width: 18rem;">
                <img src="./asset/img/indo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card" style="width: 18rem;">
                <img src="./asset/img/paket.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card" style="width: 18rem;">
                <img src="./asset/img/paket.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container mt-5">
          <div class="row">
            <div class="col-md">
              <div class="card" style="width: 18rem;">
                <img src="./asset/img/paket.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card" style="width: 18rem;">
                <img src="./asset/img/paket.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card" style="width: 18rem;">
                <img src="./asset/img/paket.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card" style="width: 18rem;">
                <img src="./asset/img/paket.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      `;

      // Display initial content
      document.querySelector(".main-content").innerHTML = materiContent;
    }

    function showJadwalContent() {
      // Clear existing content
      document.querySelector(".main-content").innerHTML = "";

      // Initial content
      var jadwalContent = `
      <div class="jadwal-content">
        <div class="container mt-5">
          <div class="row">
            <div class="col">
              <h3>Jadwal</h3>
            </div>
          </div>
        </div>
        <div class="container mt-5>
          <div class="row">
            <div class="col">
              <table id="example" class="table table-striped" style="width:100%">
                <thead>
                  <tr>
                    <th>Hari</th>
                    <th>Jam</th>
                    <th>Aktivitas</th>
                    <th>Pelajaran</th>
                    <th>Ruang</th>
                    <th>Mentor</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Senin</td>
                    <td>13.00-15.00</td>
                    <td>Belajar</td>
                    <td>Matematika</td>
                    <td>2-3</td>
                    <td>Tanzano</td>
                  </tr>
                  <tr>
                    <td>Senin</td>
                    <td>13.00-15.00</td>
                    <td>Belajar</td>
                    <td>Matematika</td>
                    <td>2-3</td>
                    <td>Tanzano</td>
                  </tr>
                  <tr>
                    <td>Senin</td>
                    <td>13.00-15.00</td>
                    <td>Belajar</td>
                    <td>Matematika</td>
                    <td>2-3</td>
                    <td>Tanzano</td>
                  </tr>
                  <tr>
                    <td>Senin</td>
                    <td>13.00-15.00</td>
                    <td>Belajar</td>
                    <td>Matematika</td>
                    <td>2-3</td>
                    <td>Tanzano</td>
                  </tr>
                  <tr>
                    <td>Senin</td>
                    <td>13.00-15.00</td>
                    <td>Belajar</td>
                    <td>Matematika</td>
                    <td>2-3</td>
                    <td>Tanzano</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      `;

      // Display initial content
      document.querySelector(".main-content").innerHTML = jadwalContent;
    }

    function showHomeContent() {
      // Clear existing content
      document.querySelector(".main-content").innerHTML = "";

      // Initial content
      var homeContent = `
      <div class="home-content">
        <div class="container mt-5">
          <div class="row">
            <div class="col">
              <h1>Welcome to BikinBisa</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet magna vehicula, laoreet est ac, ultricies leo. Integer condimentum magna eget ultrices condimentum. Nullam sit amet nisl tortor. Aliquam placerat a lectus sit amet aliquam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam eget leo in tortor lacinia laoreet. Suspendisse potenti. Proin euismod justo in consequat fringilla. Fusce bibendum, dolor a dignissim interdum, orci arcu viverra mauris, nec auctor eros arcu sed turpis. Nam sit amet diam dignissim, mattis orci ut, tempor enim.</p>
            </div>
          </div>
        </div>
      </div>
      `;

      // Display initial content
      document.querySelector(".main-content").innerHTML = homeContent;
    }

    // Add event listener for Task link
    document.querySelector(".task-link").addEventListener("click", function (event) {
      event.preventDefault();
      showTask1Content();
    });

    document.querySelector(".task2-link").addEventListener("click", function (event) {
      event.preventDefault();
      showTask2Content();
    });

    document.querySelector(".task3-link").addEventListener("click", function (event) {
      event.preventDefault();
      showTask3Content();
    });

    // Add event listener for Home link
    document.querySelector(".home-link").addEventListener("click", function (event) {
      event.preventDefault();
      showHomeContent();
    });

    document.querySelector(".materi-link").addEventListener("click", function (event) {
      event.preventDefault();
      showMateriContent();
    });

    document.querySelector(".jadwal-link").addEventListener("click", function (event) {
      event.preventDefault();
      showJadwalContent();
    });

    new DataTable('#example');
  </script>
</body>

</html>