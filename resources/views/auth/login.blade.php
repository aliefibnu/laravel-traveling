<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('files/css/form.css') }}">
    <link rel="stylesheet" href="{{ asset('files/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css') }}">
    <script src="{{ asset('files/fontawesome-free-6.6.0-web/js/all.min.js') }}"></script>
  </head>

  <body>
    <main>
      <div class="right">
        <div class="wrapperForm">
          <div class="header">
            <h1>Silahkan Login Traveler's!</h1>
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
          @if (session('succesSignup'))
            <div class="alert alert-success">
              <ul>
                <li>Berhasil Daftar, Silahkan Login! </li>
              </ul>
            </div>
          @endif
          <form action="{{ route('login.store') }}" method="post">
            @csrf
            <div class="field @error('username') is-invalid @enderror" id="fieldusername">
              <label for="username"><i class="bi bi-person-circle"></i></label>
              <input type="text" name="username" id="username" placeholder="Masukkan Username"
                value="{{ old('username') }}" required>
            </div>
            <div class="field @error('password') is-invalid @enderror" id="fieldpassword">
              <label for="password"><i class="bi bi-person-fill-lock"></i></label>
              <input type="password" name="password" id="password" placeholder="Masukkan Password"
                value="{{ old('password') }}" required>
            </div>
            <div class="info">
              Belum punya akun ?<a href="{{ route('signup') }}"> Daftar Disini</a>
            </div>
            <div class="button">
              <button type="submit">Login !</button>
            </div>
          </form>
        </div>
      </div>
      <div class="left">
        <img src="{{ asset('files/img/form/signup.svg') }}" alt="Logo">
      </div>
    </main>
    <script src="{{ asset('files/js/form.js') }}"></script>
  </body>

</html>
