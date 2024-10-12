{{-- @dd($maskapai) --}}

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Travel To NYC</title>
    <link rel="stylesheet" href="{{ asset('files/css/index.css') }}" />
    <script src="{{ asset('files/js/function.js') }}"></script>
    <script src="{{ asset('files/lib/fontawesome-free-6.6.0-web/js/all.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('files/lib/animate-css/animate.min.css') }}" />
    <script src="{{ asset('files/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('files/lib/sweet-alert/sweetalert2.js') }}"></script>
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
            <button class="dropbtn" id="dropbtn" onclick="myFunction()">
              <i id="dropbtn" class="fa-regular fa-user"></i>
              <h3 id="dropbtn">{{ Str::limit(Auth::user()->name, 7, '...') }}</h3>
            </button>
            <div class="dropdown-content" id="myDropdown">
              <a href="{{ route('tiket_pesawat_show', 3) }}">
                <i class="fa-solid fa-cart-shopping"></i>
                Beli Tiket
              </a>
              <a href="{{ route('logout_get') }}">
                <i class="fa-solid fa-right-from-bracket"></i>
                Logout
              </a>
            </div>
          </div>
        @else
          <div class="dropdown">
            <button class="dropbtn" id="dropbtn" onclick="myFunction()">
              <i id="dropbtn" class="fa-solid fa-angles-down"></i>
              <h3 id="dropbtn">Masuk</h3>
            </button>
            <div class="dropdown-content" id="myDropdown">
              <a href="{{ route('login') }}">
                <i class="fa-solid fa-right-to-bracket"></i>
                Login
              </a>
              <a href="{{ route('signup') }}">
                <i class="fa-solid fa-user-plus"></i>
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
        <div class="left-top">
          <div class="wrapper">
            <div class="mediaImgSelengkapnya wow animate__animated animate__flipInX"></div>
            <h1 class="deskripsi">City Landscape</h1>
          </div>
        </div>
        <div class="right-bottom wow animate__animated animate__fadeInDown">
          <h2>Tentang NYC</h2>
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
                class="fas fa-plane"></i></a>
          </div>
        </div>
      </div>
      <div class="content c3" id="destinasi">
        <div class="left-top">
          <div class="slider wow animate__animated animate__fadeInLeft" id="slider">
            <div class="wrapper">
              <img loading="lazy" src="{{ asset('files/img/index/city-landscape1.webp') }}" alt="CityLandscape"
                class="slidesImg" />
              <h3 class="deskripsi">City Landscape</h3>
            </div>
            <div class="wrapper">
              <img loading="lazy" src="./files/img/index/liberty.webp" alt="Liberty" class="slidesImg" />
              <h3 class="deskripsi">Patung Liberty</h3>
            </div>
            <div class="wrapper">
              <img loading="lazy" src="./files/img/index/empire-state2.webp" alt="EmpireState" class="slidesImg" />
              <h3 class="deskripsi">Empire State Of Building</h3>
            </div>
            <div class="wrapper">
              <img loading="lazy" src="./files/img/index/central-park.webp" alt="Central Park" class="slidesImg" />
              <h3 class="deskripsi">Central Park</h3>
            </div>
            <div class="wrapper">
              <img loading="lazy" src="./files/img/index/broadway.webp" alt="BroadWay" class="slidesImg" />
              <h3 class="deskripsi">BroadWay</h3>
            </div>
            <div class="wrapper">
              <img loading="lazy" src="./files/img/index/times-square.webp" alt="TimesSquare" class="slidesImg" />
              <h3 class="deskripsi">TImes Square</h3>
            </div>
          </div>
        </div>
        <div class="right-bottom punchline">
          <div class="wrapperRb">
            <h2>Ada Apa Saja Di NYC?</h2>
            <ul>
              <li class=" wow animate__animated animate__fadeInRight">
                <b>Museum Seni Metropolitan (Met):</b> Rumah bagi seni klasik
                hingga kontemporer dari seluruh dunia.
              </li>
              <li class=" wow animate__animated animate__fadeInRight">
                <b>High Line:</b> Taman yang unik, terletak di jalur rel bekas
                dengan pemandangan indah kota.
              </li>
              <li class=" wow animate__animated animate__fadeInRight">
                <b>Belanja di Fifth Avenue:</b> Temukan butik mewah dan toko
                brand ternama.
              </li>
              <li class=" wow animate__animated animate__fadeInRight">
                <b>Brooklyn Bridge:</b> Jalan kaki melintasi jembatan ini untuk
                pemandangan menakjubkan Manhattan.
              </li>
              <li class=" wow animate__animated animate__fadeInRight">
                <b>Distrik SoHo:</b> Tempat yang sempurna untuk belanja, kafe,
                dan galeri seni.
              </li>
            </ul>
            <h2>Saran Agenda</h2>
            <ol>
              <li class=" wow animate__animated animate__fadeInRight">
                Kunjungi Patung Liberty dan nikmati pemandangan ikonik dari
                pelabuhan New York.
              </li>
              <li class=" wow animate__animated animate__fadeInRight">
                Jelajahi Empire State Building dan nikmati panorama menakjubkan
                dari puncak gedung.
              </li>
              <li class=" wow animate__animated animate__fadeInRight">
                Berjalan-jalan di Central Park, oase hijau di tengah hiruk-pikuk
                kota.
              </li>
              <li class=" wow animate__animated animate__fadeInRight">
                Saksikan pertunjukan Broadway yang memukau di distrik teater
                terbaik dunia.
              </li>
              <li class=" wow animate__animated animate__fadeInRight">
                Nikmati kuliner di Times Square yang selalu hidup, siang dan
                malam.
              </li>
            </ol>
          </div>
        </div>
      </div>
      <div class="slider " id="slider">
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
