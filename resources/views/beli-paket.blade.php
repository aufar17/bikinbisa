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
  <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=League+Spartan:wght@100..900&display=swap"
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

    .card {
      transition: transform 0.4s, box-shadow 0.4s;
      /* Animasi transisi pada keadaan normal */
    }

    .card:hover {
      transform: scale(1.05);
      /* Membesarkan card saat hover */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      /* Menambahkan bayangan */
    }

    .btn:hover {
      color: white;
      /* Mengubah warna teks tombol saat hover */
      transform: scale(1.05);
      /* Membesarkan tombol saat hover */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      /* Menambahkan bayangan */
      transition: transform 0.2s, box-shadow 0.2s;
      /* Animasi transisi */
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
                  class="nav-link"
                  aria-current="page"
                  href="{{route('home')}}"
                  style="font-family: 'League Spartan'"
                  >Home</a
                >
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link active" href="#" style="font-family: 'League Spartan'"
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
                  >Logout</a>
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
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
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
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col">
                <h2>Beli Paket</h2>
                <h4>Jangan lewatkan kesempatan untuk membuka pintu menuju kesuksesan dan pencapaian pribadi Anda! Dengan paket belajar kami, Anda akan memiliki alat yang tepat untuk memperluas wawasan Anda, mengasah keterampilan, dan mempersiapkan diri untuk menghadapi tantangan masa depan dengan percaya diri dan keyakinan!</h4>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->
  <div class="container" style="margin-top: 50px;">
    <div class="row">
      <div class="col d-flex align-items-center">
        <h3 style="margin-right: 20px;">Pilih Paket Terbaikmu</h3>
        <button id="dropdownButton" class="btn dropdown-toggle mb-2"
          style="background-image: linear-gradient(#63c0c8, #42cfad); width: 100px;" type="button"
          data-bs-toggle="modal" data-bs-target="#exampleModal">
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
          <button class="btn my-2 mx-4" style="width: 100px; background-image: linear-gradient(#63c0c8, #42cfad);"
            onclick="selectOption('SD')">SD</button>
          <button class="btn my-2 mx-4" style="width: 100px; background-image: linear-gradient(#63c0c8, #42cfad);"
            onclick="selectOption('SMP')">SMP</button>
          <button class="btn my-2 mx-4" style="width: 100px; background-image: linear-gradient(#63c0c8, #42cfad);"
            onclick="selectOption('SMA')">SMA</button>
          <div id="classButtons" class="mt-3"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row my-3 mt-3 mb-5" id="mainCardContainer">
      <div class="col-md">
        <div class="card h-100" style="width: 17rem;">
          <img src="./asset/img/best seller.png" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Paket UTBK Basic</h5>
            <p class="card-text">Program persiapan Ujian Tulis Berbasis Komputer (UTBK) yang dirancang untuk membantu
              hasil optimal dalam ujian seleksi masuk perguruan tinggi.</p>
            <div class="mt-auto">
              <h5>Rp 1,000,000</h5>
              <a href="#" class="btn mt-auto" style="background-image: linear-gradient(#63c0c8, #42cfad); max-width: 150px;">Beli Sekarang</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card h-100" style="width: 17rem;">
          <img src="./asset/img/paket.png" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Paket UTBK 2.0</h5>
            <p class="card-text">Program persiapan lanjutan, ingin
              meningkatkan kemampuan mereka secara signifikan dan mencapai hasil yang lebih baik dalam
              ujian seleksi masuk perguruan tinggi.</p>
            <div class="mt-auto">
              <h5>Rp 1,250,000</h5>
              <a href="#" class="btn mt-auto" style="background-image: linear-gradient(#63c0c8, #42cfad); max-width: 150px;">Beli Sekarang</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card h-100" style="width: 17rem;">
          <img src="./asset/img/paket.png" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Paket Private UTBK</h5>
            <p class="card-text">Program persiapan eksklusif menawarkan
              pendekatan belajar personal dan intensif, hasil terbaik dalam ujian seleksi masuk
              perguruan tinggi.</p>
            <div class="mt-auto">
              <h5>Rp 1,999,000</h5>
              <a href="#" class="btn mt-auto" style="background-image: linear-gradient(#63c0c8, #42cfad); max-width: 150px;">Beli Sekarang</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card h-100" style="width: 17rem;">
          <img src="./asset/img/paket.png" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Paket Premium Semester</h5>
            <p class="card-text">program bimbingan belajar eksklusif yang dirancang untuk mendukung siswa mencapai
              prestasi akademik optimal selama satu semester penuh.</p>
            <div class="mt-auto">
              <h5>Rp 2,500,000</h5>
              <a href="#" class="btn mt-auto" style="background-image: linear-gradient(#63c0c8, #42cfad); max-width: 150px;">Beli Sekarang</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row my-3 mt-3 mb-5" id="cardContainer">

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
        { title: "Paket memahami ", text: "Pendidikan yang dirancang untuk membantu siswa memahami konsep-konsep kunci dalam berbagai mata pelajaran.", price: "Rp 350,000" },
        { title: "Paket menggapai", text: "Pembelajaran yang bertujuan untuk membantu siswa mencapai potensi maksimal mereka dalam pendidikan.", price: "Rp 350,000" },
        { title: "Paket meraih impian", text: "Program pembelajaran yang dirancang untuk membantu individu mencapai tujuan dan impian.", price: "Rp 350,000" },
        { title: "Paket masa depan", text: "layanan dan sumber daya yang dirancang untuk membantu individu atau organisasi mempersiapkan diri menghadapi tantangan dan peluang di masa yang akan datang.", price: "Rp 350,000" },
      ],
      "SD-2": [
        { title: "Paket mengenal konsep dasar", text: "memberikan pengantar yang menyenangkan tentang konsep-konsep dasar dalam mata pelajaran seperti matematika, bahasa Indonesia, dan sains sesuai dengan kurikulum.", price: "Rp 429,000" },
        { title: "Paket bahasa", text: "pembelajaran yang dirancang khusus untuk meningkatkan kemampuan berbahasa pada siswa.", price: "Rp 429,000" },
        { title: "Paket  matematika dasar", text: "pembelajaran yang bertujuan untuk memperkenalkan konsep dasar matematika kepada siswa. Materi-materi dalam paket ini dirancang untuk mengajarkan konsep-konsep seperti penjumlahan, pengurangan, perkalian, pembagian, bilangan bulat, pecahan, dan geometri dasar.", price: "Rp 479,000" },
        { title: "Paket sains", text: "Pembelajaran yang dirancang untuk mengenalkan konsep-konsep sains dasar kepada siswa. Materi-materi dalam paket ini mencakup berbagai topik sains seperti fisika, kimia, biologi, dan ilmu bumi.", price: "Rp 479,000" },
      ],
      "SD-3": [
        { price:"Rp 439,000", title: "Paket ilmu pengetahuan sosial", text: "Memberikan pemahaman tentang lingkungan sosial dan sejarah, tetapi juga untuk merangsang minat belajar siswa terhadap materi-materi yang diajarkan." },
        { price:"Rp 459,000", title: "Paket memahami seni", text: "memberikan pemahaman yang komprehensif tentang berbagai jenis seni, serta mengembangkan keterampilan dan apresiasi seni pada tingkat dasar." },
        { price:"Rp 459,000", title: "Paket mengenal alam", text: "menginspirasi minat dan rasa ingin tahu siswa tentang alam, serta membangun kesadaran mereka tentang pentingnya menjaga keberlangsungan lingkungan alam untuk masa depan yang lebih baik." },
        { price:"Rp 459,000", title: "Paket bernegara", text: "membentuk sikap dan perilaku positif siswa sebagai anggota masyarakat yang bertanggung jawab dan peduli terhadap negara dan lingkungannya. Melalui pendekatan yang interaktif dan inklusif, diharapkan siswa dapat memahami pentingnya peran individu dalam menciptakan kemajuan dan kesejahteraan bersama dalam kehidupan berbangsa dan bernegara." },
      ],
      "SD-4": [
        { price:"Rp 476,000", title: "Paket listerasi bahasa", text: "kemampuan dalam memahami dan menggunakan bahasa Indonesia dengan baik dan benar. Melalui beragam materi, untuk mengembangkan keterampilan membaca, menulis, mendengarkan, dan berbicara." },
        { price:"Rp 479,000", title: "Paket kebudayaan nusantara", text: "Memperkenalkan dan memahamkan siswa tentang keberagaman budaya yang dimiliki oleh nusantara Indonesia. Melalui berbagai materi dan aktivitas, siswa akan diajak untuk menjelajahi warisan budaya dari berbagai daerah di Indonesia, seperti seni, tradisi, adat istiadat, bahasa, musik, tarian, dan masakan khas setiap daerah." },
        { price:"Rp 469,000", title: "Paket mengenal lingkungan", text: "Memperkenalkan konsep dan pentingnya menjaga lingkungan hidup kepada siswa. Melalui berbagai kegiatan dan materi, belajar tentang ekosistem, keanekaragaman hayati, polusi, daur ulang, konservasi sumber daya alam, dan peran individu dalam melestarikan lingkungan." },
        { price:"Rp 459,000", title: "Paket mengenal organisme", text: "Memperkenalkan pada berbagai jenis organisme yang hidup di sekitar mereka. Melalui pendekatan yang interaktif dan beragam materi, paket ini memahami karakteristik, sifat, dan peran organisme dalam ekosistem." },
      ],
      "SD-5": [
        { price:"Rp 449,000", title: "Paket mengenal diri", text: "Membantu memahami diri mereka sendiri dengan lebih baik. Melalui berbagai aktivitas refleksi, diskusi, dan latihan praktis, akan diajak untuk menjelajahi berbagai aspek diri, termasuk kepribadian, minat, bakat, dan nilai-nilai yang dimiliki." },
        { price:"Rp 459,000", title: "Paket ekspresi kreatif", text: "Menggali potensi kreativitas melalui berbagai aktivitas seni dan ekspresi. Dengan fokus pada pengembangan keterampilan seni dan pemahaman tentang ekspresi diri, paket ini memberikan pelajaran tentang seni rupa, musik, tari, teater, dan literasi visual." },
        { price:"Rp 419,000", title: "Paket menulis cerpen", text: "Memahami struktur cerpen, mulai dari pengenalan tokoh, latar, konflik, sampai pada puncak dan penyelesaian cerita. Mereka juga akan belajar teknik-teknik penulisan yang melibatkan deskripsi, dialog, dan narasi untuk menghasilkan cerpen yang menarik dan berkesan." },
        { price:"Rp 519,000", title: "Paket menghitung cermat", text: "Mengasah kemampuan hitung cepat dan tepat. Melalui berbagai latihan dan tantangan,diajak untuk menguasai konsep-konsep dasar matematika seperti penjumlahan, pengurangan, perkalian, dan pembagian dengan lebih baik." },
      ],
      "SD-6": [
        { price:"Rp 540,000", title: "Paket mengenal kemampuan", text: "Mengenal dan mengembangkan berbagai kemampuan yang penting dalam kehidupan sehari-hari serta mempersiapkan mereka untuk melangkah ke jenjang pendidikan yang lebih tinggi" },
        { price:"Rp 540,000", title: "Paket kemampuan penalaran", text: "Mengembangkan kemampuan penalaran logis mereka. Materi yang diajarkan dalam paket ini bertujuan untuk melatih siswa dalam berpikir secara sistematis, menganalisis informasi, dan menarik kesimpulan yang tepat." },
        { price:"Rp 550,000", title: "Paket mengasah logika", text: "Meningkatkan kemampuan logika mereka. Materi dalam paket ini dirancang untuk melatih siswa dalam berpikir secara sistematis, menganalisis informasi, dan menyelesaikan masalah dengan pendekatan yang logis." },
        { price:"Rp 599,000", title: "Paket persiapan ujian", text: "Mempersiapkan diri dengan baik untuk menghadapi ujian. Materi dalam paket ini dirancang khusus untuk mengulang kembali konsep-konsep penting yang telah dipelajari selama tahun ajaran, serta memberikan latihan soal-soal yang sesuai dengan format ujian yang akan dihadapi." },
      ],
      "SMP-7": [
        { price:"Rp 501,000", title: "Paket pengetahuan simbiosis", text: "Memperkenalkan konsep-konsep dasar tentang hubungan simbiosis dalam ekologi. Melalui paket ini, siswa akan mempelajari berbagai jenis simbiosis." },
        { price:"Rp 509,000", title: "Paket warga negara", text: "Memahami konsep-konsep dasar kewarganegaraan dan tanggung jawab sebagai anggota masyarakat. Paket ini bertujuan untuk membentuk kesadaran warga negara yang aktif, partisipatif, dan bertanggung jawab terhadap negara dan masyarakatnya." },
        { price:"Rp 510,000", title: "Paket mengembangkan diri", text: "Mengembangkan potensi diri mereka secara menyeluruh, baik dari segi fisik, mental, emosional, maupun sosial. Dengan fokus pada pengembangan keterampilan personal dan interpersonal, paket ini bertujuan untuk membantu menjadi individu yang lebih percaya diri, mandiri, dan mampu beradaptasi dalam berbagai situasi kehidupan." },
        { price:"Rp 501,000", title: "Paket budaya lokal", text: "Melalui pemahaman dan apresiasi terhadap budaya lokal, diharapkan dapat mengembangkan rasa bangga akan identitas lokal mereka dan memperkuat hubungan dengan masyarakat sekitar." },
      ],
      "SMP-8": [
        { price:"Rp 505,000", title: "Paket tujuan masa depan", text: "Mengembangkan pemahaman tentang tujuan masa depan mereka dan memberikan mereka alat dan keterampilan yang diperlukan untuk mencapainya. Dengan fokus pada pemahaman diri, pengembangan keterampilan, dan perencanaan karir." },
        { price:"Rp 530,000", title: "Paket cermat logika", text: "Mengasah kemampuan logika dan pemecahan masalah mereka. Dengan fokus pada pemikiran kritis, analisis, dan evaluasi, paket ini bertujuan untuk membantu mengembangkan keterampilan berpikir yang sistematis dan efektif." },
        { price:"Rp 510,000", title: "Paket Anatomi", text: "Memberikan pemahaman mendalam tentang struktur dan fungsi tubuh manusia. Dengan fokus pada sistem organ dan jaringan, paket ini mengajarkan siswa tentang kompleksitas tubuh manusia dan bagaimana setiap bagian bekerja secara individual maupun bersama-sama." },
        { price:"Rp 509,000", title: "Paket pengetahuan lingkungan kota", text: "Memberikan pemahaman yang lebih baik tentang lingkungan perkotaan. Melalui berbagai topik dan konten yang disajikan, siswa akan mempelajari tentang berbagai aspek lingkungan yang terkait dengan kehidupan di kota." },
      ],
      "SMP-9": [
        { price:"Rp 609,000", title: "Paket fisika dasar", text: "Memberikan pemahaman awal tentang konsep-konsep dasar dalam ilmu fisika kepada siswa. Melalui pendekatan yang berbasis konsep dan aplikasi praktis, siswa akan diperkenalkan pada berbagai topik dalam fisika yang mendasar." },
        { price:"Rp 629,000", title: "Paket kimia dasar", text: "Memberikan pemahaman dasar tentang prinsip-prinsip kimia kepada siswa. Dengan pendekatan yang interaktif dan aplikatif, siswa akan diperkenalkan pada konsep-konsep penting dalam kimia yang membentuk dasar pemahaman mereka tentang materi dan reaksi kimia." },
        { price:"Rp 669,000", title: "Paket logika dan penalaran", text: "Mengembangkan kemampuan siswa dalam berpikir logis, menganalisis informasi, dan membuat kesimpulan yang tepat. Dengan menggunakan berbagai pendekatan dan latihan yang menantang, paket ini membantu siswa meningkatkan keterampilan berpikir kritis mereka." },
        { price:"Rp 699,000", title: "Paket persiapan ujian", text: "Membantu siswa mempersiapkan diri dengan baik untuk menghadapi berbagai jenis ujian. Dengan fokus pada strategi belajar yang efektif dan pemahaman yang mendalam tentang materi ujian, paket ini bertujuan untuk meningkatkan kesempatan kesuksesan siswa dalam menghadapi ujian." },
      ],
      "SMA-10": [
        { price:"Rp 720,000", title: "Paket fisika dasar", text: "Memberikan pemahaman awal tentang konsep-konsep dasar dalam ilmu fisika kepada siswa. Melalui pendekatan yang berbasis konsep dan aplikasi praktis, siswa akan diperkenalkan pada berbagai topik dalam fisika yang mendasar." },
        { price:"Rp 729,000", title: "Paket kimia dasar", text: "Memberikan pemahaman dasar tentang prinsip-prinsip kimia kepada siswa. Dengan pendekatan yang interaktif dan aplikatif, siswa akan diperkenalkan pada konsep-konsep penting dalam kimia yang membentuk dasar pemahaman mereka tentang materi dan reaksi kimia." },
        { price:"Rp 700,000", title: "Paket budaya lokal", text: "Melalui pemahaman dan apresiasi terhadap budaya lokal, diharapkan dapat mengembangkan rasa bangga akan identitas lokal mereka dan memperkuat hubungan dengan masyarakat sekitar." },
        { price:"Rp 700,000", title: "Paket warga negara", text: "Memahami konsep-konsep dasar kewarganegaraan dan tanggung jawab sebagai anggota masyarakat. Paket ini bertujuan untuk membentuk kesadaran warga negara yang aktif, partisipatif, dan bertanggung jawab terhadap negara dan masyarakatnya." },
      ],
      "SMA-11": [
        { price:"Rp 769,000", title: "Paket pengetahuan simbiosis", text: "Memperkenalkan konsep-konsep dasar tentang hubungan simbiosis dalam ekologi. Melalui paket ini, siswa akan mempelajari berbagai jenis simbiosis." },
        { price:"Rp 750,000", title: "Paket warga negara", text: "Memahami konsep-konsep dasar kewarganegaraan dan tanggung jawab sebagai anggota masyarakat. Paket ini bertujuan untuk membentuk kesadaran warga negara yang aktif, partisipatif, dan bertanggung jawab terhadap negara dan masyarakatnya." },
        { price:"Rp 759,000", title: "Paket mengembangkan diri", text: "Mengembangkan potensi diri mereka secara menyeluruh, baik dari segi fisik, mental, emosional, maupun sosial. Dengan fokus pada pengembangan keterampilan personal dan interpersonal, paket ini bertujuan untuk membantu menjadi individu yang lebih percaya diri, mandiri, dan mampu beradaptasi dalam berbagai situasi kehidupan." },
        { price:"Rp 720,000", title: "Paket budaya lokal", text: "Melalui pemahaman dan apresiasi terhadap budaya lokal, diharapkan dapat mengembangkan rasa bangga akan identitas lokal mereka dan memperkuat hubungan dengan masyarakat sekitar." },
      ],
      "SMA-12": [
        { price:"Rp 850,000", title: "Paket penalaran", text: "Mengembangkan kemampuan penalaran logis dan kritis siswa. Paket ini bertujuan untuk membantu mengasah keterampilan berpikir mereka agar lebih analitis, sistematis, dan kritis." },
        { price:"Rp 870,000", title: "Paket logika dan matematika", text: "Mengembangkan keterampilan logis dan matematis secara bersamaan. Melalui kombinasi konsep-konsep logika dan matematika, paket ini bertujuan untuk melatih siswa dalam berpikir secara sistematis, analitis, dan kritis." },
        { price:"Rp 890,000", title: "Paket pengetahuan umum", text: "Memberikan pemahaman yang luas tentang berbagai topik yang relevan dalam kehidupan sehari-hari." },
        { price:"Rp 959,000", title: "Paket persiapan UTBK", text: "Membantu mempersiapkan diri dengan baik untuk menghadapi berbagai jenis ujian. Dengan fokus pada strategi belajar yang efektif dan pemahaman yang mendalam tentang materi ujian, paket ini bertujuan untuk meningkatkan kesempatan kesuksesan siswa dalam menghadapi ujian." },
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
            <div class="card h-100" style="width: 17rem;">
              <img src="${index === 0 ? './asset/img/best seller.png' : './asset/img/paket.png'}" class="card-img-top" alt="...">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">${card.title}</h5>
                <p class="card-text">${card.text}</p>
                <div class="mt-auto">
                  <h5>${card.price}</h5>
                  <a href="${getCardLink(classLevel, index)}" class="btn" style="background-image: linear-gradient(#63c0c8, #42cfad); max-width: 150px;">Beli Sekarang</a>
                </div>
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
        if (cardIndex === 0) return '#';
        else if (cardIndex === 1) return '#';
        else if (cardIndex === 2) return '#';
        else if (cardIndex === 3) return '#';
      }
      if (classLevel === 'SD-2') {
        if (cardIndex === 0) return '#';
        else if (cardIndex === 1) return '#';
        else if (cardIndex === 2) return '#';
        else if (cardIndex === 3) return '#';
      }
      if (classLevel === 'SD-3') {
        if (cardIndex === 0) return '#';
        else if (cardIndex === 1) return '#';
        else if (cardIndex === 2) return '#';
        else if (cardIndex === 3) return '#';
      }
      if (classLevel === 'SD-4') {
        if (cardIndex === 0) return '#';
        else if (cardIndex === 1) return '#';
        else if (cardIndex === 2) return '#';
        else if (cardIndex === 3) return '#';
      }
      if (classLevel === 'SD-5') {
        if (cardIndex === 0) return '#';
        else if (cardIndex === 1) return '#';
        else if (cardIndex === 2) return '#';
        else if (cardIndex === 3) return '#';
      }
      if (classLevel === 'SD-6') {
        if (cardIndex === 0) return '#';
        else if (cardIndex === 1) return '#';
        else if (cardIndex === 2) return '#';
        else if (cardIndex === 3) return '#';
      }
      if (classLevel === 'SMP-7') {
        if (cardIndex === 0) return '#';
        else if (cardIndex === 1) return '#';
        else if (cardIndex === 2) return '#';
        else if (cardIndex === 3) return '#';
      }
      if (classLevel === 'SMP-8') {
        if (cardIndex === 0) return '#';
        else if (cardIndex === 1) return '#';
        else if (cardIndex === 2) return '#';
        else if (cardIndex === 3) return '#';
      }
      if (classLevel === 'SMP-9') {
        if (cardIndex === 0) return '#';
        else if (cardIndex === 1) return '#';
        else if (cardIndex === 2) return '#';
        else if (cardIndex === 3) return '#';
      }
      if (classLevel === 'SMA-10') {
        if (cardIndex === 0) return '#';
        else if (cardIndex === 1) return '#';
        else if (cardIndex === 2) return '#';
        else if (cardIndex === 3) return '#';
      }
      if (classLevel === 'SMA-11') {
        if (cardIndex === 0) return '#';
        else if (cardIndex === 1) return '#';
        else if (cardIndex === 2) return '#';
        else if (cardIndex === 3) return '#';
      }
      if (classLevel === 'SMA-12') {
        if (cardIndex === 0) return '#';
        else if (cardIndex === 1) return '#';
        else if (cardIndex === 2) return '#';
        else if (cardIndex === 3) return '#';
      }
    }

  </script>
  </body>
</html>
