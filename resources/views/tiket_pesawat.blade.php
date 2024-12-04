<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <title>Cek Tiket Pesawat</title>
    <link rel="stylesheet" href="{{ asset('files/lib/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('files/css/tiket_pesawat.css') }}" />
    <link rel="stylesheet" href="{{ asset('files/css/tiket_pesawat_responsive.css') }}">
  </head>

  <body>
    <div class="loader-wrapper" id="loaderWrapper">
      <link rel="stylesheet" href="{{ asset('files/lib/loader/loader.css') }}">
      <script src="{{ asset('files/lib/loader/loader.js') }}"></script>
      <div class="loader"></div>
    </div>
    <div class="header">
      <header>
        <h1 id="headerText">
          <i class="bi bi-list" id="headerIcon"></i>
          <i class="bi bi-list-nested" id="headerIconOpened"></i>
          {{ $headerText }}
        </h1>
      </header>
    </div>
    <nav class="sideNav" id="sideNav">
      <x-tiket-pesawat.side-nav class="side-nav" :page="$page"></x-tiket-pesawat>
    </nav>
    <main class="main">
      <div class="wrapperTable">
        @if ($page == 'maskapai')
          <div class="cTable1 cTable maskapai" id="maskapai">
            <x-tiket-pesawat.tabel-maskapai border="1" cellspacing="0" cellpadding="20"
              :maskapai="$maskapai"></x-tiket-pesawat.tabel-maskapai>
          </div>
        @endif
        @if ($page == 'hargaTiket')
          <div class="cTable2 cTable harga" id="harga">
            <x-tiket-pesawat.tabel-harga-tiket cellspacing="0" cellpadding="20" border="2" :hargaTiket="$hargaTiket"
              :usdToIdr="$usdToIdr"></x-tiket-pesawat.tabel-harga-tiket>
          </div>
        @endif
        @if ($page == 'beli')
          <div class="cTable3 cTable beli" id="beli">
            <x-tiket-pesawat.tabel-beli cellspacing="0" cellpadding="20" border="2"
              :maskapai="$maskapai"></x-tiket-pesawat.tabel-beli>
          </div>
        @endif
        @if ($page == 'durasi')
          <div class="cTable4 cTable durasi" id="durasi">
            <x-tiket-pesawat.tabel-durasi cellspacing="0" cellpadding="20" border="2"
              :durasi="$durasi"></x-tiket-pesawat.tabel-durasi>
          </div>
        @endif
      </div>
    </main>
    <script src="{{ asset('files/js/tiket_pesawat.js') }}"></script>
  </body>

</html>
