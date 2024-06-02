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
        position: fixed; /* Tambahkan ini */
        top: 0; /* Menempatkan navbar di bagian atas */
        width: 100%; /* Membuat navbar menempati seluruh lebar layar */
        z-index: 1000; /* Menetapkan z-index agar navbar muncul di atas konten lain */
        background-image: linear-gradient(to right, #63c0c8, #42cfad);
        margin-bottom: 0;
        border-bottom: none;
        box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
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
      .card {
        transition: transform 0.4s, box-shadow 0.4s; /* Animasi transisi pada keadaan normal */
      }
      .card:hover:not(.no-hover) {
        transform: scale(1.05); /* Membesarkan card saat hover */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Menambahkan bayangan */
      }
      .btn:hover:not(.no-hover) {
        color: white; /* Mengubah warna teks tombol saat hover */
        transform: scale(1.05); /* Membesarkan tombol saat hover */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Menambahkan bayangan */
        transition: transform 0.2s, box-shadow 0.2s; /* Animasi transisi */
      }
    </style>
  </head>
  <body style="font-family: league spartan">
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
    
    <div class="container" style="margin-top: 100px;">
    <!-- Carousel untuk iklan -->
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators mb-5">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="3000">
            <img src="./asset/img/iklan.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="./asset/img/iklan.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="./asset/img/iklan.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!-- Button trigger modal -->
    <div class="container">
      <div class="row">
        <div class="col">
          <button id="dropdownButton" class="btn dropdown-toggle"
            style="background-image: linear-gradient(#63c0c8, #42cfad); width: 100px;"
            type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Pilih
          </button>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Pilih Jenjang Sekolah</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <button class="btn my-2" style="width: 100px; background-image: linear-gradient(#63c0c8, #42cfad);" onclick="selectOption('SD')">SD</button>
            <button class="btn my-2" style="width: 100px; background-image: linear-gradient(#63c0c8, #42cfad);" onclick="selectOption('SMP')">SMP</button>
            <button class="btn my-2" style="width: 100px; background-image: linear-gradient(#63c0c8, #42cfad);" onclick="selectOption('SMA')">SMA</button>
            <div id="classButtons" class="mt-3"></div>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container">
      <div class="row my-3 mt-3" id="mainCardContainer">
        <div class="col-md">
          <div class="card" style="width: 17rem;">
            <img src="./asset/img/paket.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Paket UTBK Basic</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="{{route('paket-rekomen1')}}" class="btn" style="background-image: linear-gradient(#63c0c8, #42cfad);">Go somewhere</a>
            </div>
          </div>  
        </div>
        <div class="col-md">
          <div class="card" style="width: 17rem;">
            <img src="./asset/img/paket.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Paket UTBK 2.0</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="paket-rekomen2.html" class="btn" style="background-image: linear-gradient(#63c0c8, #42cfad);">Go somewhere</a>
            </div>
          </div>  
        </div>
        <div class="col-md">
          <div class="card" style="width: 17rem;">
            <img src="./asset/img/paket.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Paket Private UTBK</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="paket-rekomen3.html" class="btn" style="background-image: linear-gradient(#63c0c8, #42cfad);">Go somewhere</a>
            </div>
          </div>  
        </div>
        <div class="col-md">
          <div class="card" style="width: 17rem;">
            <img src="./asset/img/paket.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Paket Premium Semester</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="paket-rekomen4.html" class="btn" style="background-image: linear-gradient(#63c0c8, #42cfad);">Go somewhere</a>
            </div>
          </div>  
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row my-3 mt-3" id="cardContainer">

      </div>
    </div>
    
    <div class="container">
      <div class="row">
        <div class="col">
          <h4>Kenalan dengan mentor andalan yuk!</h4>
        </div>
      </div>
    </div>
    

    <!-- Carousel mentor -->
    <div class="container">
      <div id="carouselExampleControls" class="carousel carousel-dark slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row my-3">
              <div class="col-md-6">
                <div class="card mb-3 no-hover">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="./asset/img/paket.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card mb-3 no-hover">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="./asset/img/paket.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row my-3">
              <div class="col-md-6">
                <div class="card mb-3 no-hover">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="./asset/img/paket.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card mb-3 no-hover">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="./asset/img/paket.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         <!-- Add more carousel items as needed -->
        </div>
        <div class="row">
          <div class="col-md-6">
            <button class="carousel-control-prev" type="button" style="margin-left: -180px;" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
          </div>
          <div class="col-md-6">
            <button class="carousel-control-next" type="button" style="margin-right: -180px;" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <footer class="bg-body-tertiary text-center py-4">
      &copy; 2024 BikinBisa. All Rights Reserved.
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script>
    const cardData = {
      "SD-1": [
        { title: "SD-1 Card 1", text: "Content for SD-1 Card 1" },
        { title: "SD-1 Card 2", text: "Content for SD-1 Card 2" },
        { title: "SD-1 Card 3", text: "Content for SD-1 Card 3" },
        { title: "SD-1 Card 4", text: "Content for SD-1 Card 4" },
      ],
      "SD-2": [
        { title: "SD-2 Card 1", text: "Content for SD-2 Card 1" },
        { title: "SD-2 Card 2", text: "Content for SD-2 Card 2" },
        { title: "SD-2 Card 3", text: "Content for SD-2 Card 3" },
        { title: "SD-2 Card 4", text: "Content for SD-2 Card 4" },
      ],
      "SD-3": [
        { title: "SD-3 Card 1", text: "Content for SD-3 Card 1" },
        { title: "SD-3 Card 2", text: "Content for SD-3 Card 2" },
        { title: "SD-3 Card 3", text: "Content for SD-3 Card 3" },
        { title: "SD-3 Card 4", text: "Content for SD-3 Card 4" },
      ],
      "SD-4": [
        { title: "SD-4 Card 1", text: "Content for SD-4 Card 1" },
        { title: "SD-4 Card 2", text: "Content for SD-4 Card 2" },
        { title: "SD-4 Card 3", text: "Content for SD-4 Card 3" },
        { title: "SD-4 Card 4", text: "Content for SD-4 Card 4" },
      ],
      "SD-5": [
        { title: "SD-5 Card 1", text: "Content for SD-5 Card 1" },
        { title: "SD-5 Card 2", text: "Content for SD-5 Card 2" },
        { title: "SD-5 Card 3", text: "Content for SD-5 Card 3" },
        { title: "SD-5 Card 4", text: "Content for SD-5 Card 4" },
      ],
      "SD-6": [
        { title: "SD-6 Card 1", text: "Content for SD-6 Card 1" },
        { title: "SD-6 Card 2", text: "Content for SD-6 Card 2" },
        { title: "SD-6 Card 3", text: "Content for SD-6 Card 3" },
        { title: "SD-6 Card 4", text: "Content for SD-6 Card 4" },
      ],
      "SMP-7": [
        { title: "SMP-7 Card 1", text: "Content for SMP-7 Card 1" },
        { title: "SMP-7 Card 2", text: "Content for SMP-7 Card 2" },
        { title: "SMP-7 Card 3", text: "Content for SMP-7 Card 3" },
        { title: "SMP-7 Card 4", text: "Content for SMP-7 Card 4" },
      ],
      "SMP-8": [
        { title: "SMP-8 Card 1", text: "Content for SMP-8 Card 1" },
        { title: "SMP-8 Card 2", text: "Content for SMP-8 Card 2" },
        { title: "SMP-8 Card 3", text: "Content for SMP-8 Card 3" },
        { title: "SMP-8 Card 4", text: "Content for SMP-8 Card 4" },
      ],
      "SMP-9": [
        { title: "SMP-9 Card 1", text: "Content for SMP-9 Card 1" },
        { title: "SMP-9 Card 2", text: "Content for SMP-9 Card 2" },
        { title: "SMP-9 Card 3", text: "Content for SMP-9 Card 3" },
        { title: "SMP-9 Card 4", text: "Content for SMP-9 Card 4" },
      ],
      "SMA-10": [
        { title: "SMA-10 Card 1", text: "Content for SMA-10 Card 1" },
        { title: "SMA-10 Card 2", text: "Content for SMA-10 Card 2" },
        { title: "SMA-10 Card 3", text: "Content for SMA-10 Card 3" },
        { title: "SMA-10 Card 4", text: "Content for SMA-10 Card 4" },
      ],
      "SMA-11": [
        { title: "SMA-11 Card 1", text: "Content for SMA-11 Card 1" },
        { title: "SMA-11 Card 2", text: "Content for SMA-11 Card 2" },
        { title: "SMA-11 Card 3", text: "Content for SMA-11 Card 3" },
        { title: "SMA-11 Card 4", text: "Content for SMA-11 Card 4" },
      ],
      "SMA-12": [
        { title: "SMA-12 Card 1", text: "Content for SMA-12 Card 1" },
        { title: "SMA-12 Card 2", text: "Content for SMA-12 Card 2" },
        { title: "SMA-12 Card 3", text: "Content for SMA-12 Card 3" },
        { title: "SMA-12 Card 4", text: "Content for SMA-12 Card 4" },
      ],
    };

    function selectOption(level) {
      const classButtons = document.getElementById('classButtons');
      classButtons.innerHTML = '';

      const classRanges = {
        'SD': [1, 6],
        'SMP': [7, 9],
        'SMA': [10, 12]
      };
    
      const buttonWidth = (document.querySelector('.modal-dialog').offsetWidth - 40) / 3; // Lebar tombol disesuaikan dengan lebar modal

      let count = 0; // Menghitung jumlah tombol yang telah ditambahkan
      for (let i = classRanges[level][0]; i <= classRanges[level][1]; i++) {
        const button = document.createElement('button');
        button.className = 'btn my-2 mx-3'; // Tambahkan kelas "my-2" untuk jarak antar tombol
        button.style.width = '120px'; // Atur lebar tombol
        button.style.backgroundImage = 'linear-gradient(#63c0c8, #42cfad)'; // Setel latar belakang
        button.innerText = i;
        button.onclick = () => selectClass(level + '-' + i);

        classButtons.appendChild(button);
        count++;

      // Jika sudah menambahkan 3 tombol, tambahkan baris baru
        if (count === 3) {
          classButtons.appendChild(document.createElement('br'));
          count = 0; // Reset hitungan tombol
        }
      }
    }


    function selectClass(classLevel) {
      document.getElementById('dropdownButton').innerText = classLevel;
      const modal = bootstrap.Modal.getInstance(document.getElementById('exampleModal'));
      modal.hide();
      displayCards(classLevel);
    }

    function displayCards(classLevel) {
      const cardContainer = document.getElementById('cardContainer');
      cardContainer.innerHTML = '';

      const cards = cardData[classLevel];
      if (cards) {
        cards.forEach((card, index) => {
          const cardElement = document.createElement('div');
          cardElement.className = 'col-md';
          cardElement.innerHTML = `
            <div class="card" style="width: 17rem;">
              <img src="./asset/img/paket.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">${card.title}</h5>
                <p class="card-text">${card.text}</p>
                <a href="${getCardLink(classLevel, index)}" class="btn" style="background-image: linear-gradient(#63c0c8, #42cfad);">Go somewhere</a>
              </div>
            </div>`;
          cardContainer.appendChild(cardElement);
        });
      }

      // Hide the main UTBK package cards after selecting the school level
      document.getElementById('mainCardContainer').style.display = 'none';
    }

    function getCardLink(classLevel, cardIndex) {
      if (classLevel === 'SD-1') {
        if (cardIndex === 0) return 'paket-sd1-1.html';
        else if (cardIndex === 1) return 'paket-sd1-2.html';
        else if (cardIndex === 2) return 'paket-sd1-3.html';
        else if (cardIndex === 3) return 'paket-sd1-4.html';
      }
      if (classLevel === 'SD-2') {
        if (cardIndex === 0) return 'paket-sd2-1.html';
        else if (cardIndex === 1) return 'paket-sd2-2.html';
        else if (cardIndex === 2) return 'paket-sd2-3.html';
        else if (cardIndex === 3) return 'paket-sd2-4.html';
      }
      if (classLevel === 'SD-3') {
        if (cardIndex === 0) return 'paket-sd3-1.html';
        else if (cardIndex === 1) return 'paket-sd3-2.html';
        else if (cardIndex === 2) return 'paket-sd3-3.html';
        else if (cardIndex === 3) return 'paket-sd3-4.html';
      }
      if (classLevel === 'SD-4') {
        if (cardIndex === 0) return 'paket-sd4-1.html';
        else if (cardIndex === 1) return 'paket-sd4-2.html';
        else if (cardIndex === 2) return 'paket-sd4-3.html';
        else if (cardIndex === 3) return 'paket-sd4-4.html';
      }
      if (classLevel === 'SD-5') {
        if (cardIndex === 0) return 'paket-sd5-1.html';
        else if (cardIndex === 1) return 'paket-sd5-2.html';
        else if (cardIndex === 2) return 'paket-sd5-3.html';
        else if (cardIndex === 3) return 'paket-sd5-4.html';
      }
      if (classLevel === 'SD-6') {
        if (cardIndex === 0) return 'paket-sd6-1.html';
        else if (cardIndex === 1) return 'paket-sd6-2.html';
        else if (cardIndex === 2) return 'paket-sd6-3.html';
        else if (cardIndex === 3) return 'paket-sd6-4.html';
      }
      if (classLevel === 'SMP-7') {
        if (cardIndex === 0) return 'paket-smp7-1.html';
        else if (cardIndex === 1) return 'paket-smp7-2.html';
        else if (cardIndex === 2) return 'paket-smp7-3.html';
        else if (cardIndex === 3) return 'paket-smp7-4.html';
      }
      if (classLevel === 'SMP-8') {
        if (cardIndex === 0) return 'paket-smp8-1.html';
        else if (cardIndex === 1) return 'paket-smp8-2.html';
        else if (cardIndex === 2) return 'paket-smp8-3.html';
        else if (cardIndex === 3) return 'paket-smp8-4.html';
      }
      if (classLevel === 'SMP-9') {
        if (cardIndex === 0) return 'paket-smp9-1.html';
        else if (cardIndex === 1) return 'paket-smp9-2.html';
        else if (cardIndex === 2) return 'paket-smp9-3.html';
        else if (cardIndex === 3) return 'paket-smp9-4.html';
      }
      if (classLevel === 'SMA-10') {
        if (cardIndex === 0) return 'paket-sma10-1.html';
        else if (cardIndex === 1) return 'paket-sma10-2.html';
        else if (cardIndex === 2) return 'paket-sma10-3.html';
        else if (cardIndex === 3) return 'paket-sma10-4.html';
      }
      if (classLevel === 'SMA-11') {
        if (cardIndex === 0) return 'paket-sma11-1.html';
        else if (cardIndex === 1) return 'paket-sma11-2.html';
        else if (cardIndex === 2) return 'paket-sma11-3.html';
        else if (cardIndex === 3) return 'paket-sma11-4.html';
      }
      if (classLevel === 'SMA-12') {
        if (cardIndex === 0) return 'paket-sma12-1.html';
        else if (cardIndex === 1) return 'paket-sma12-2.html';
        else if (cardIndex === 2) return 'paket-sma12-3.html';
        else if (cardIndex === 3) return 'paket-sma12-4.html';
      }
    }

  </script>
  </body>
</html>
