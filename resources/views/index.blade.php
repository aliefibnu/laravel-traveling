{{-- @dd($maskapai) --}}

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Travel To NYC</title>
    <link rel="stylesheet" href="{{ asset('files/css/index.css') }}" />
    <script src="{{ asset('files/js/function.js') }}"></script>
    <script src="{{ asset('files/fontawesome-free-6.6.0-web/js/all.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('files/animate-css/animate.min.css') }}" />
    <script src="{{ asset('files/wow/wow.min.js') }}"></script>

    <script>
      new WOW().init()
    </script>
  </head>

  <body>
    <header>
      <h3><a href="#home" id="anchor1" onclick="updateSizeJudul()">Home</a></h3>
      <h3><a href="#detail">Detail</a></h3>
      <h3><a href="#destinasi">Destinasi</a></h3>
      <h3><a href="#video">Video</a></h3>
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
            <div class="mediaImgSelengkapnya wow animate__animated animate__fadeInLeft"></div>
            <h1 class="deskripsi">City Landscape</h1>
          </div>
        </div>
        <div class="right-bottom">
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
          <div class="buttons">
            <a href={{ route('tiket_pesawat') }} target="_blank"
              class="button wow animate__animated animate__fadeInBottom">Cek Tiket Pesawat <i
                class="fas fa-plane"></i></a>
          </div>
        </div>
      </div>
      <div class="content c3" id="destinasi">
        <div class="left-top">
          <div class="slider" id="slider">
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
              <li>
                <b>Museum Seni Metropolitan (Met):</b> Rumah bagi seni klasik
                hingga kontemporer dari seluruh dunia.
              </li>
              <li>
                <b>High Line:</b> Taman yang unik, terletak di jalur rel bekas
                dengan pemandangan indah kota.
              </li>
              <li>
                <b>Belanja di Fifth Avenue:</b> Temukan butik mewah dan toko
                brand ternama.
              </li>
              <li>
                <b>Brooklyn Bridge:</b> Jalan kaki melintasi jembatan ini untuk
                pemandangan menakjubkan Manhattan.
              </li>
              <li>
                <b>Distrik SoHo:</b> Tempat yang sempurna untuk belanja, kafe,
                dan galeri seni.
              </li>
            </ul>
            <h2>Saran Agenda</h2>
            <ol>
              <li>
                Kunjungi Patung Liberty dan nikmati pemandangan ikonik dari
                pelabuhan New York.
              </li>
              <li>
                Jelajahi Empire State Building dan nikmati panorama menakjubkan
                dari puncak gedung.
              </li>
              <li>
                Berjalan-jalan di Central Park, oase hijau di tengah hiruk-pikuk
                kota.
              </li>
              <li>
                Saksikan pertunjukan Broadway yang memukau di distrik teater
                terbaik dunia.
              </li>
              <li>
                Nikmati kuliner di Times Square yang selalu hidup, siang dan
                malam.
              </li>
            </ol>
          </div>
        </div>
      </div>
      <div class="content c4 video" id="video">
        <div class="wrapper">
          <br /><br /><br />
          <video id="pauseEffect" controls src="./files/video/Cinematic Video1.mp4"></video>
          <h1>The NYC</h1>
        </div>
      </div>
    </main>
    <script src="./files/js/index.js"></script>
  </body>

</html>
