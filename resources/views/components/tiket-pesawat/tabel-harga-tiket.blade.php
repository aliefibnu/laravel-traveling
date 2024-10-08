@props(['hargaTiket' => false, 'usdToIdr' => false])
<table {{ $attributes }}>
  <tr>
    <th colspan="3" class="sticky">Daftar Harga</th>
  </tr>
  @foreach ($hargaTiket as $tiket)
    <tr>
      <td class="panorama" rowspan="3"
        style="
          background-image: url({{ $tiket->maskapai->url_foto }});
        ">
      </td>
      <td>Nama Maskapai</td>
      <td>{{ $tiket->maskapai->nama_maskapai }}</td>
    </tr>
    <tr>
      <td>Harga</td>
      <td class="teksHarga">
        {{ "$" . number_format($tiket->harga_low) . " - $" . number_format($tiket->harga_top) . ' IDR(' . number_format($tiket->harga_low * $usdToIdr) . ' - ' . number_format($tiket->harga_top * $usdToIdr) . ')' }}
      </td>
    </tr>
    <tr>
      <td>Rute Penerbangan</td>
      <td>
        <ul>
          <li>Jakarta (CGK)</li>
          <li>{{ $tiket->lokasi_transit }}</li>
          <li>New York (JFK)</li>
        </ul>
      </td>
    </tr>
  @endforeach
</table>
