<div class="topNav">
  <i class="bi bi-send-fill"></i>
  <h2>Hello, {{ Auth::user()->name ?? 'Traveler\'s' }} !</h2>
</div>
<div class="bottomNav" id="navigation">
  <a href="{{ route('tiket_pesawat_show', 'lihat_maskapai') }}">
    <p class="nav1 nav {{ $page == 'maskapai' ? 'navActive' : '' }}" id="maskapai">
      <i class="bi bi-airplane-fill" id="maskapai"></i> Lihat Maskapai
    </p>
  </a>
  <a href="{{ route('tiket_pesawat_show', 'cek_harga_tiket') }}">
    <p class="nav2 nav {{ $page == 'hargaTiket' ? 'navActive' : '' }}" id="harga">
      <i class="bi bi-currency-dollar" id="harga"></i> Harga Tiket
    </p>
  </a>
  <a href="{{ route('tiket_pesawat_show', 'table_beli') }}">
    <p class="nav4 nav {{ $page == 'beli' ? 'navActive' : '' }}" id="beli">
      <i class="bi bi-cart-fill" id="beli"></i> Beli Tiket
    </p>
  </a>
  <a href="{{ route('tiket_pesawat_show', 'cek_durasi') }}">
    <p class="nav3 nav {{ $page == 'durasi' ? 'navActive' : '' }}" id="durasi">
      <i class="bi bi-clock-fill" id="durasi"></i> Durasi Penerbangan
    </p>
  </a>
</div>
