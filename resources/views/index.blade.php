<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Travel To NYC</title>
    <link rel="stylesheet" href="{{ asset('files/css/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('files/lib/animate-css/animate.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="{{ asset('files/lib/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('files/js/function.js') }}"></script>
    <script src="{{ asset('files/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('files/js/alert.js') }}"></script>
    <script>
      new WOW().init()
    </script>
  </head>

  <body>
    <header>
      <div class="left">
        <img src="{{ asset('files/img/logo.svg') }}" alt="Logo">
      </div>
      <div class="right">
        <h3><a href="#home" id="anchor1" onclick="updateSizeJudul()">Home</a></h3>
        <h3><a href="#detail">Detail</a></h3>
        <h3><a href="#destinasi">Destinasi</a></h3>
        <h3><a href="#video">Video</a></h3>
        @if (Auth::check())
          <div class="dropdown">
            <div class="dropbtn" id="dropbtn" onclick="myFunction()">
              <h3 id="dropbtn">
                <i id="dropbtn" class="bi bi-person-circle"></i>
                {{ Str::limit(Auth::user()->username, 7, '...') }}
              </h3>
            </div>
            <div class="dropdown-content" id="myDropdown">
              <a href="{{ route('tiket_pesawat_show', 3) }}">
                <i class="bi bi-cart-plus-fill"></i>
                Beli Tiket
              </a>
              <a
                onclick="return swal_confirm('Anda yakin ingin keluar?','', 'error').then(act=>{act.isConfirmed?window.location='{{ route('logout_get') }}':''})">
                <i class="bi bi-box-arrow-left"></i>
                Logout
              </a>
            </div>
          </div>
        @else
          <div class="dropdown">
            <div class="dropbtn" id="dropbtn" onclick="myFunction()">
              <h3 id="dropbtn">
                <i id="dropbtn" class="bi bi-chevron-double-down"></i>
                Masuk
              </h3>
            </div>
            <div class="dropdown-content" id="myDropdown">
              <a href="{{ route('login') }}">
                <i class="bi bi-person-circle"></i>
                Login
              </a>
              <a href="{{ route('signup') }}">
                <i class="bi bi-person-plus-fill"></i>
                Daftar
              </a>
            </div>
          </div>
        @endif
      </div>
    </header>
    <main>
      <div class="content c1" id="home">
        <video src="{{ asset('files/video/bg_home.mp4') }}" class="bg_home" muted autoplay loop></video>
        <div class="judul" id="wrapperTitle">
          <h1>New York</h1>
        </div>
      </div>
      <div class="content c2" id="detail">
        <div class="left-top content-center">
          <div class="wrapper">
            <div class="mediaImgSelengkapnya wow animate__animated animate__flipInX"></div>
            <h3 class="deskripsi">City Landscape</h3>
          </div>
        </div>
        <div class="right-bottom wow animate__animated animate__fadeInDown">
          <h1>Tentang NYC</h1>
          <p class="wow animate__animated animate__fadeInRight">
            New York City, pusat energi global yang tak pernah tidur, menawarkan
            pengalaman yang tak terlupakan bagi setiap pengunjungnya. Dari
            gemerlap Times Square, landmark ikonik seperti Patung Liberty dan
            Empire State Building, hingga seni kelas dunia di Museum
            Metropolitan, New York adalah destinasi yang memadukan sejarah,
            budaya, dan hiburan dalam satu kota. Nikmati berjalan-jalan di
            Central Park yang hijau atau jelajahi berbagai restoran dengan cita
            rasa internasional di setiap sudut kota. Tidak ada yang seperti kota
            ini – tempat di mana mimpi besar menjadi kenyataan dan setiap detik
            dipenuhi dengan petualangan baru.
          </p>
          <div class="buttons wow animate__animated animate__fadeInRight">
            <a href={{ route('tiket_pesawat') }} target="_blank" class="button">Cek Tiket Pesawat <i
                class="bi bi-airplane-fill"></i></a>
          </div>
        </div>
      </div>
      <div class="content c3" id="destinasi">
        <div class="c3-center content-center">
          <div class="card" data-idcard="1">
            <div class="wrapper-img">
              <img src="{{ asset('files/img/index/liberty.webp') }}" alt="Liberty">
            </div>
            <div class="title">
              <h3>Patung Liberty</h3>
            </div>
            <div class="desc">
              <p>Patung Liberty berdiri megah di Pulau Liberty sebagai simbol kebebasan dan harapan. Diberikan oleh
                Prancis pada tahun 1886, patung ini menawarkan pemandangan indah pelabuhan New York. Pengunjung dapat
                menjelajahi pulau dan bahkan naik ke mahkota patung untuk menikmati panorama kota.
              </p>
            </div>
          </div>
          <div class="card" data-idcard="2">
            <div class="wrapper-img">
              <img src="{{ asset('files/img/index/broadway.webp') }}" alt="Liberty">
            </div>
            <div class="title">
              <h3>Broadway</h3>
            </div>
            <div class="desc">
              <p>Broadway adalah pusat teater dunia yang terkenal dengan pertunjukan musikal dan drama berkualitas
                tinggi. Suasana semarak dengan lampu neon yang menyala di malam hari menjadikan Broadway sebagai
                destinasi wajib bagi pecinta seni dan budaya.
              </p>
            </div>
          </div>
          <div class="card card-active" data-idcard="3">
            <div class="wrapper-img">
              <img src="{{ asset('files/img/index/central-park.webp') }}" alt="Central Park">
            </div>
            <div class="title">
              <h3>Central Park</h3>
            </div>
            <div class="desc">
              <p>Central Park adalah oasis hijau seluas 341 hektar di tengah Manhattan. Taman ini menawarkan berbagai
                aktivitas, mulai dari piknik hingga bersepeda, serta pemandangan yang indah. Dengan danau dan jalur
                setapak, Central Park adalah tempat ideal untuk bersantai dari kesibukan kota.
              </p>
            </div>
          </div>
          <div class="card" data-idcard="4">
            <div class="wrapper-img">
              <img src="{{ asset('files/img/index/empire-state2.webp') }}" alt="Empire State Building">
            </div>
            <div class="title">
              <h3>Empire State Building</h3>
            </div>
            <div class="desc">
              <p>Empire State Building adalah gedung pencakar langit ikonik setinggi 381 meter yang menawarkan dek
                observasi dengan pemandangan 360 derajat kota New York. Dari ketinggian ini, pengunjung dapat menikmati
                panorama berbagai landmark terkenal.
              </p>
            </div>
          </div>
          <div class="card" data-idcard="5">
            <div class="wrapper-img">
              <img src="{{ asset('files/img/index/times-square.webp') }}" alt="Times Square">
            </div>
            <div class="title">
              <h3>Times Square</h3>
            </div>
            <div class="desc">
              <p>Times Square adalah pusat kehidupan malam dan hiburan di New York, terkenal dengan lampu neon yang
                gemerlap dan suasana ramai. Sebagai "Persimpangan Dunia," area ini menawarkan beragam restoran dan toko,
                serta menjadi lokasi acara besar, seperti perayaan Tahun Baru.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="content c4 video " id="video">
        <div class="wrapper">
          <br /><br /><br />
          <video id="pauseEffect" class="wow animate__animated animate__bounceInLeft" controls
            src="./files/video/Cinematic Video1.mp4"></video>
          <h1>The NYC</h1>
        </div>
      </div>
    </main>
    <script src="./files/js/index.js"></script>
  </body>

</html>
