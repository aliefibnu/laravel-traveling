<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <title>Travel To NYC</title>
    <link rel="stylesheet" href="{{ asset('files/css/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('files/css/index-responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('files/lib/animate-css/animate.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="{{ asset('files/lib/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('files/js/function.js') }}"></script>
    <script src="{{ asset('files/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('files/js/alert.js') }}"></script>
    <script src="{{ asset('files/js/data_destinasi.js') }}"></script>
    <script src="{{ asset('files/lib/locomotive-scroll/locomotive-scroll.min.js') }}"></script>
    <script src="{{ asset('files/lib/gsap/gsap.min.js') }}"></script>
    <script src="{{ asset('files/lib/gsap/ScrollTrigger.min.js') }}"></script>
    <script>
      new WOW().init();
      const panoramaLink = [
        "{{ asset('files/img/index/liberty.webp') }}",
        "{{ asset('files/img/index/broadway.webp') }}",
        "{{ asset('files/img/index/central-park.webp') }}",
        "{{ asset('files/img/index/empire-state2.webp') }}",
        "{{ asset('files/img/index/times-square.webp') }}"
      ];
    </script>
  </head>

  <body>
    <div class="loader-wrapper" id="loaderWrapper">
      <link rel="stylesheet" href="{{ asset('files/lib/loader/loader.css') }}">
      <script src="{{ asset('files/lib/loader/loader.js') }}"></script>
      <div class="loader"></div>
    </div>
    <header id="header">
      <div class="left">
        <a href="#home" onclick="updateSizeJudul()">
          <img src="{{ asset('files/img/logo.svg') }}" alt="Logo">
        </a>
      </div>
      <div class="right">
        <h3>
          <a href="#home" id="anchor1" onclick="updateSizeJudul()">Home</a>
        </h3>
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
              <a href="{{ route('tiket_pesawat_show', 'table_beli') }}">
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
      <div class="mobile-hamburger" id="mobileHamburger">
        <i class="bi bi-list"></i>
      </div>
    </header>
    <div class="cover-for-side-nav" id="coverForSideNav"></div>
    <nav class="sideNav" id="sideNav">
      <div class="header-nav div-nav" id="headerNav">
        <i class="bi bi-x-lg"></i>
      </div>
      <div class="content-nav div-nav">
        <h3>
          <a href="#home" id="anchor1" onclick="updateSizeJudul()">Home</a>
        </h3>
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
              <a href="{{ route('tiket_pesawat_show', 'table_beli') }}">
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
                <i class="bi bi-chevron-double-down" id="dropBtnIcon"></i> Masuk
              </h3>
            </div>
            <div class="dropdown-content" id="dropDownContentMobile">
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

    </nav>
    <main>
      <div class="content c1 home" id="home">
        <video src="{{ asset('files/video/bg_home.mp4') }}" class="bg_home" muted autoplay loop></video>
        <div class="judul" id="wrapperTitle">
          <h1 id="titleHome">New York</h1>
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
        <div class="c3-center content-center" id="c3Center">
          <div class="card">
            <div class="wrapper-img">
              <img src="{{ asset('files/img/index/liberty.webp') }}" alt="Liberty" />
            </div>
            <div class="title">
              <h3>Patung Liberty</h3>
            </div>
            <div class="desc">
              <p>
                Patung Liberty di Pulau Liberty adalah simbol kebebasan yang
                diberikan oleh Prancis pada tahun 1886.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="wrapper-img">
              <img src="{{ asset('files/img/index/broadway.webp') }}" alt="Liberty" />
            </div>
            <div class="title">
              <h3>Broadway</h3>
            </div>
            <div class="desc">
              <p>
                Broadway adalah pusat teater dunia yang terkenal dengan
                pertunjukan berkualitas dan lampu neon yang gemerlap.
              </p>
            </div>
          </div>
          <div class="card card-active">
            <div class="wrapper-img">
              <img src="{{ asset('files/img/index/central-park.webp') }}" alt="Central Park" />
            </div>
            <div class="title">
              <h3>Central Park</h3>
            </div>
            <div class="desc">
              <p>
                Central Park adalah taman seluas 341 hektar di Manhattan, tempat
                ideal untuk bersantai dan menikmati alam.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="wrapper-img">
              <img src="{{ asset('files/img/index/empire-state2.webp') }}" alt="Empire State Building" />
            </div>
            <div class="title">
              <h3>Empire State Building</h3>
            </div>
            <div class="desc">
              <p>
                Empire State Building adalah gedung ikonik setinggi 381 meter
                dengan dek observasi kota New York.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="wrapper-img">
              <img src="{{ asset('files/img/index/times-square.webp') }}" alt="Times Square" />
            </div>
            <div class="title">
              <h3>Times Square</h3>
            </div>
            <div class="desc">
              <p>
                Times Square adalah pusat hiburan New York yang terkenal dengan
                lampu neon dan suasana meriah.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="content popup popup-card" id="popup">
        <div class="left-top">
          <div class="wrapperPanorama panoramaPopup" id="panoramaPopup"></div>
          <div class="rating" id="ratingPopup">
            <b>Rating : </b>
            <p id="rating"></p>
          </div>
        </div>
        <div class="right-bottom">
          <div class="close-popup-area">
            <div class="close-popup" id="closePopup">&times;</div>
          </div>
          <table cellpadding="10" id="tablePopup">
            <tr>
              <th colspan="3" id="judulPopup" class="judul-popup"></th>
            </tr>
            <tr>
              <td colspan="3" id="paragrafPopup" class="paragraf"></td>
            </tr>
            <tr>
              <th>Waktu Operasional</th>
              <td class="equal-cell">:</td>
              <td id="waktuOperasionalPopup" class="waktu-operasional"></td>
            </tr>
            <tr>
              <th>Saran Waktu</th>
              <td class="equal-cell">:</td>
              <td id="saranWaktuPopup" class="saran-waktu"></td>
            </tr>
            <tr>
              <th>Harga</th>
              <td class="equal-cell">:</td>
              <td id="hargaPopup" class="harga"></td>
            </tr>
          </table>
        </div>
      </div>
      <div class="content c4 video" id="video">
        <div class="wrapper">
          <br /><br /><br />
          <video id="pauseEffect" class="wow animate__animated animate__bounceInLeft" controls
            src="{{ asset('files/video/Cinematic Video1.mp4') }}"></video>
          <h1>The NYC</h1>
        </div>
      </div>
    </main>
    <footer class="footer">
      <div class="left-top">
        <div class="footer-header">
          <img src="{{ asset('files/img/logo.svg') }}" alt="Logo" />
          <h1>: About Us</h1>
        </div>
        <div class="footer-content">
          <p>
            Kami adalah platform perjalanan yang membantu Anda menemukan
            destinasi impian, pengalaman unik, dan tips perjalanan terbaik.
            Jelajahi dunia, temukan keindahan yang belum Anda lihat, dan buat
            kenangan tak terlupakan bersama kami.
          </p>
        </div>
      </div>
      <div class="right-bottom">
        <h3>Our Social Media</h3>
        <div class="social-media">
          <a href="https://instagram.com/fture_star" target="_blank">
            <section>
              <i class="bi bi-instagram"></i>
              fture_star
            </section>
          </a>
          <a href="https://t.me/fture_star" target="_blank">
            <section>
              <i class="bi bi-telegram"></i>
              fture_star
            </section>
          </a>
          <a href="https://www.tiktok.com/@ftre_starr" target="_blank">
            <section>
              <i class="bi bi-tiktok"></i>
              ftre_starr
            </section>
          </a>
          <a href="https://github.com/aliefibnu/" target="_blank">
            <section>
              <i class="bi bi-github"></i>
              aliefibnu
            </section>
          </a>
          <a href="mailto:google@gmail.com">
            <i class="bi bi-envelope-at-fill"></i>
            E-Mail
          </a>
        </div>
      </div>
      <div class="turbine">
        <img src="{{ asset('files/img/index/turbine.svg') }}" alt="turbine" />
      </div>
    </footer>
    <script src="{{ asset('files/js/index.js') }}"></script>
  </body>

</html>
