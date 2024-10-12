<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login !</title>
    <link rel="stylesheet" href="{{ asset('files/css/login.css') }}">
    <script src="{{ asset('files/js/login-signup.js') }}"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>

  <body style="background-image: url('{{ asset('files/img/form/vector bg.jpg') }}')">
    <div class="wrapper">
      <form action="{{ route('login.store') }}" method="POST">
        @csrf
        <h1>Login</h1>
        @session('succesSignup')
          <div class="info-group">
            <div class="alert alert-success alert-username">Berhasil daftar, silahkan login !</div>
          </div>
        @endsession
        <div class="info-group">
          @if ($errors->any())
            <div class="alert alert-error alert-username">Username atau password salah !</div>
          @endif
        </div>
        <div class="input-box input-box-2">
          <input type="text" placeholder="Username" name="username"
            @if ($errors->any()) class="input-error" @endif value="{{ old('username') }}" required>
          <i class='bx bx-user-circle'></i>
        </div>
        <div class="input-box input-box-2">
          <input type="password" placeholder="Password" name="password" value="{{ old('password') }}" required>
          <i class='bx bx-lock'></i>
        </div>
        <div class="remember-forgot">
          <label>
            <input type="checkbox" name="remember">
            Remember me
          </label>
          <a href="{{ route('lupa_password') }}">Lupa password?</a>
        </div>
        <button type="submit" class="btn">Login</button>
        <div class="register-link">
          <p>Belum punya akun? <a href="{{ route('signup') }}"> Daftar Disini</a></p>
        </div>
      </form>
    </div>
  </body>

</html>
