<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beli Tiket {{ $maskapai->nama_maskapai }}</title>
    <link rel="stylesheet" href="{{ asset('files/css/form.css') }}">
    <script src="{{ asset('files/js/form.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('files/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css') }}">
    <script src="{{ asset('files/fontawesome-free-6.6.0-web/js/all.min.js') }}"></script>
  </head>

  <body>
    <main>
      <div class="left">
        <img src="{{ asset('files/img/form/beli_tiket.svg') }}" alt="Logo">
      </div>
      <div class="right">
        <div class="wrapperForm">
          @if (!$errors->any())
            <div class="header">
              <h1>Beli Tiket {{ $maskapai->nama_maskapai }}</h1>
            </div>
          @endif
          @if ($errors->any())
            <div class="error-invalid">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <form action="{{ route('beli_tiket_store') }}" method="post">
            @csrf
            <div class="field @error('id_maskapai') is-invalid @enderror">
              <label for="id_maskapai"><i class="bi bi-pin-map-fill"></i></label>
              <select name="id_maskapai" id="id_maskapai">
                <option value="1" {{ $maskapai->id_maskapai !== '1' ? 'Selected' : '' }}>Etihad Airways</option>
                <option value="2" {{ $maskapai->id_maskapai !== '2' ? 'Selected' : '' }}>Qatar Airways</option>
                <option value="3" {{ $maskapai->id_maskapai !== '3' ? 'Selected' : '' }}>Singapore Airlines
                </option>
                <option value="4" {{ $maskapai->id_maskapai !== '4' ? 'Selected' : '' }}>Turkish Airlines</option>
              </select>
            </div>
            <div class="field @error('name') is-invalid @enderror">
              <label for="name"><i class="bi bi-person-vcard-fill"></i></label>
              <input type="text" name="name" id="name" placeholder="Masukkan Nama"
                value="{{ old('name') }}" required>
            </div>
            <div class="wrapperFields">
              <div class="field @error('tempat_lahir') is-invalid @enderror">
                <label for="tempat_lahir"><i class="bi bi-geo-alt-fill"></i></i></label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir"
                  value="{{ old('tempat_lahir') }}" required>
              </div>
              <div class="field @error('tanggal_lahir') is-invalid @enderror">
                <label for="tanggal_lahir"><i class="bi bi-calendar-heart"></i></label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir"
                  value="{{ old('tanggal_lahir') }}" required>
              </div>
            </div>
            <div class="wrapperFields">
              <div class="field @error('email') is-invalid @enderror">
                <label for="email"><i class="bi bi-envelope-at-fill"></i></label>
                <input type="email" name="email" id="email" placeholder="Masukkan Email"
                  value="{{ old('email') }}" required>
              </div>
              <div class="field @error('gender') is-invalid @enderror">
                <label for="gender"><i class="bi bi-gender-ambiguous"></i></label>
                <input type="radio" name="gender" id="pria" {{ old('gender') == 'pria' ? 'checked' : '' }}
                  value="pria" required>
                <label for="pria" class="labelRadio">Pria</label>
                <input type="radio" name="gender" id="wanita" value="wanita"
                  {{ old('gender') == 'wanita' ? 'checked' : '' }} required>
                <label for="wanita" class="labelRadio">Wanita</label>
              </div>
            </div>
            <div class="field @error('alamat') is-invalid @enderror">
              <label for="alamat"><i class="bi bi-map-fill"></i></label>
              <textarea name="alamat" id="alamat" placeholder="Masukkan Alamat">{{ old('alamat') }}</textarea>
            </div>
            <div class="field @error('kota') is-invalid @enderror">
              <label for="kota"><i class="bi bi-pin-map-fill"></i></label>
              <select name="kota" id="kota">
                <option disabled {{ old('gender') == '' ? 'Selected' : '' }}>Pilih Kota</option>
                <option value="palembang" {{ old('kota') == 'palembang' ? 'Selected' : '' }}>Palembang</option>
                <option value="batam" {{ old('kota') == 'batam' ? 'Selected' : '' }}>Batam</option>
                <option value="tanjung_pinang" {{ old('kota') == 'tanjung_pinang' ? 'Selected' : '' }}>Tanjung Pinang
                </option>
                <option value="bintan" {{ old('kota') == 'bintan' ? 'Selected' : '' }}>Bintan</option>
                <option value="jakarta" {{ old('kota') == 'jakarta' ? 'Selected' : '' }}>Jakarta</option>
                <option value="new_york" {{ old('kota') == 'new_york' ? 'Selected' : '' }}>New York</option>
                <option value="bandung" {{ old('kota') == 'bandung' ? 'Selected' : '' }}>Bandung</option>
                <option value="medan" {{ old('kota') == 'medan' ? 'Selected' : '' }}>Medan</option>
                <option value="kalimantan" {{ old('kota') == 'kalimantan' ? 'Selected' : '' }}>Kalimantan</option>
              </select>
            </div>
            <div class="button">
              <a href="{{ route('tiket_pesawat_show', 3) }}"><button type="button">Kembali</button></a>
              <button type="submit">Daftar</button>
            </div>
          </form>
        </div>
      </div>
    </main>
    <script src="{{ asset('files/js/form.js') }}"></script>
  </body>

</html>
