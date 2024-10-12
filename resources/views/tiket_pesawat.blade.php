<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Cek Tiket Pesawat</title>
    <script src="{{ asset('files/lib/fontawesome-free-6.6.0-web/js/all.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('files/css/tiket_pesawat.css') }}" />
  </head>

  <body>
    <div class="header">
      <header>
        <h1 id="headerText">{{ $headerText }}</h1>
      </header>
    </div>
    <nav class="sideNav">
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
  </body>

</html>
