@props(['maskapai' => false])
<table {{ $attributes }}>
  <tr>
    <th class="sticky">No</th>
    <th class="sticky">Nama Maskapai</th>
    <th colspan="2" class="sticky">Aksi</th>
  </tr>
  @foreach ($maskapai as $m)
    <tr>
      <td>{{ $m->id_maskapai }}</td>
      <td>{{ $m->nama_maskapai }}</td>
      <td>
        <a href="{{ route('tiket_pesawat') }}#data{{ $m->id_maskapai }}">Lihat Detail</a>
      </td>
      <td><a href="{{ route('beli_tiket', $m->id_maskapai) }}">Beli Tiket</a></td>
    </tr>
  @endforeach
</table>
