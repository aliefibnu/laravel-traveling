<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{ asset('files/css/form.css') }}">
    <link rel="stylesheet" href="{{ asset('files/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css') }}">
    <script src="{{ asset('files/fontawesome-free-6.6.0-web/js/all.min.js') }}"></script>
  </head>

  <body>
    <main>
      <div class="left">
        <img src="{{ asset('files/img/form/signup.svg') }}" alt="Logo">
      </div>
      <div class="right">
        <div class="wrapperForm">
          <div class="header">
            <h1>Welcome Traveler's!</h1>
          </div>
          @if ($errors->any())
            <div class="error-invalid">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <form action="{{ route('user_store') }}" method="post">
            @csrf
            <div class="field @error('name') is-invalid @enderror" id="fieldname">
              <label for="name"><i class="bi bi-person-vcard-fill"></i></label>
              <input type="text" name="name" id="name" placeholder="Masukkan Nama"
                value="{{ old('name') }}" required>
            </div>
            <div class="field @error('username') is-invalid @enderror" id="fieldusername">
              <label for="username"><i class="bi bi-person-circle"></i></label>
              <input type="text" name="username" id="username" placeholder="Masukkan Username"
                value="{{ old('username') }}" required>
            </div>
            <div class="field @error('password') is-invalid @enderror" id="fieldpassword">
              <label for="password"><i class="bi bi-person-fill-lock"></i></label>
              <input type="password" name="password" id="password" placeholder="Masukkan Password" required>
            </div>
            <div class="info">
              Sudah punya akun ?<a href="{{ route('login') }}"> Login Disini</a>
            </div>
            <div class="button">
              <button type="submit">Daftar</button>
            </div>
          </form>
        </div>
      </div>
    </main>
    <script src="{{ asset('files/js/form.js') }}"></script>
  </body>

</html>
