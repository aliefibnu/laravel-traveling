<div class="topNav">
  <i class="fas fa-plane"></i>
  <h2>Hello, Traveler's !</h2>
</div>
<div class="bottomNav" id="navigation">
  <a href="{{ route('tiket_pesawat_show', 1) }}">
    <p class="nav1 nav {{ $page == 'maskapai' ? 'navActive' : '' }}" id="maskapai">
      <i class="fa-solid fa-plane" id="maskapai"></i> Lihat Maskapai
    </p>
  </a>
  <a href="{{ route('tiket_pesawat_show', 2) }}">
    <p class="nav2 nav {{ $page == 'hargaTiket' ? 'navActive' : '' }}" id="harga">
      <i class="fa-solid fa-money-check-dollar" id="harga"></i> Harga Tiket
    </p>
  </a>
  <a href="{{ route('tiket_pesawat_show', 3) }}">
    <p class="nav4 nav {{ $page == 'beli' ? 'navActive' : '' }}" id="beli">
      <i class="fa-solid fa-cart-shopping" id="beli"></i> Beli Tiket
    </p>
  </a>
  <a href="{{ route('tiket_pesawat_show', 4) }}">
    <p class="nav3 nav {{ $page == 'durasi' ? 'navActive' : '' }}" id="durasi">
      <i class="fa-regular fa-clock" id="durasi"></i> Durasi Penerbangan
    </p>
  </a>
</div>
