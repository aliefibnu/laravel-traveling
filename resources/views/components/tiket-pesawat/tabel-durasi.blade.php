@props(['durasi' => false])
<table {{ $attributes }}>
  <tr>
    <th class="sticky" rowspan="2">No</th>
    <th class="sticky" rowspan="2">Nama Maskapai</th>
    <th class="sticky" colspan="2">Durasi Penerbangan</th>
  </tr>
  <tr>
    <th class="sticky">Paling Cepat</th>
    <th class="sticky">Kisaran Normal</th>
  </tr>
  @foreach ($durasi as $d)
    <tr>
      <td>{{ $d->maskapai->id_maskapai }}</td>
      <td>{{ $d->maskapai->nama_maskapai }}</td>
      <td>{{ $d->paling_cepat }}</td>
      <td>{{ $d->kisaran_normal }}</td>
    </tr>
  @endforeach
</table>
