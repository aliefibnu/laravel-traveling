<form action="{{ route('store.beli-tiket.detail-pribadi', ['id' => $id]) }}" method="post">
  @csrf
  <div class="field @error('name') is-invalid @enderror">
    <label for="name"><i class="bi bi-person-vcard-fill"></i></label>
    <input type="text" name="name" id="name" placeholder="Masukkan Nama"
      value="{{ old('name') ?? Auth::user()->name }}" required>
  </div>
  <div class="field @error('email') is-invalid @enderror">
    <label for="email"><i class="bi bi-envelope-at-fill"></i></label>
    <input type="text" name="email" id="email" placeholder="Masukkan Email" value="{{ old('email') }}"
      required>
  </div>
  <div class="field @error('phone') is-invalid @enderror">
    <label for="phone"><i class="bi bi-telephone-fill"></i></label>
    <input type="tel" name="phone" id="phone" placeholder="Masukkan No Hp" value="{{ old('phone') }}"
      required>
  </div>
  <div class="button">
    <a href="{{ route('tiket_pesawat_show', 3) }}"><button type="button">Kembali</button></a>
    <button type="submit">Daftar</button>
  </div>
</form>
