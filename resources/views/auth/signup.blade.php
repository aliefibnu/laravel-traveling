<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar !</title>
    <link rel="stylesheet" href="{{ asset('files/css/login.css') }}">
    <script src="{{ asset('files/js/login-signup.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('files/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css') }}">
  </head>

  <body style="background-image: url('{{ asset('files/img/form/vector bg.jpg') }}')">
    <div class="wrapper">
      <form action="{{ route('signup.store') }}" method="POST">
        @csrf
        <h1>Daftar</h1>
        <div class="info-group">
          @error('name')
            <div class="alert alert-error alert-name">{{ $message }}</div>
          @enderror
        </div>
        <div class="input-box input-box-1 input-box-2">
          <input type="text" placeholder="Nama" name="name" @error('name') class="input-error" @enderror
            value="{{ old('name') }}" required>
          <i class="bi bi-person-vcard-fill"></i>
        </div>
        <div class="info-group">
          @error('username')
            <div class="alert alert-error alert-username">{{ $message }}</div>
          @enderror
        </div>
        <div class="input-box input-box-2">
          <input type="text" placeholder="Username" name="username" @error('username') class="input-error" @enderror
            value="{{ old('username') }}" required>
          <i class="bi bi-person-circle"></i>
        </div>
        <div class="info-group">
          @error('password')
            <div class="alert alert-error alert-password">{{ $message }}</div>
          @enderror
        </div>
        <div class="input-box input-box-2">
          <input type="password" placeholder="Password" name="password" @error('password') class="input-error" @enderror
            required>
          <i class="bi bi-person-fill-lock"></i>
        </div>

        <button type="submit" class="btn">Daftar</button>
        <div class="register-link">
          <p>Sudah punya akun? <a href="{{ route('login') }}"> Login Disini</a></p>
        </div>
      </form>
    </div>
  </body>

</html>
