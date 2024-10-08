<table {{ $attributes }}>
  <tr>
    <th class="sticky">Maskapai</th>
    <th class="sticky">Kelas Tempat Duduk</th>
    <th rowspan="{{ count(json_decode($maskapai[0]->kelas_kursi)) + 2 }}" class="panorama"
      style="
                  background-image: url({{ $maskapai[0]->url_foto }});
              ">
    </th>
  </tr>

  @foreach ($maskapai as $m)
    @php
      $kelas_kursi = json_decode($m->kelas_kursi); // Mengubah JSON menjadi array
    @endphp

    {{-- . <tr id="data{{$m->id_maskapai}}"> --}}
    <tr>
      <td rowspan="{{ count($kelas_kursi) }}">{{ $m->nama_maskapai }}</td>
      <td>{{ $kelas_kursi[0] }}</td>
      @if ($m->id_maskapai !== 1)
        <td rowspan="{{ count($kelas_kursi) + 1 }}" class="panorama" style="background-image: url('{{ $m->url_foto }}');">
        </td>
      @endif
    </tr>

    @foreach (array_slice($kelas_kursi, 1) as $kelas)
      <tr>
        <td>{{ $kelas }}</td>
      </tr>
    @endforeach

    <tr>
      <td colspan="2">{{ $m->deskripsi_maskapai }}</td>
    </tr>
  @endforeach
</table>
