<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Form Tidak Valid' }}</title>
    <link rel="stylesheet" href="{{ asset('files/css/form.css') }}">
    <script src="{{ asset('files/js/form.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('files/lib/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css') }}">
    <script src="{{ asset('files/lib/fontawesome-free-6.6.0-web/js/all.min.js') }}"></script>
  </head>

  <body>
    <main>
      <div class="left">
        <img src="{{ asset($icon ?? 'files/img/form/beli_tiket.svg') }}" alt="Logo">
      </div>
      <div class="right">
        <div class="wrapperForm">
          @if (!$errors->any())
            <div class="header">
              <h1>{{ $title }}</h1>
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
          @if (!isset($page))
            <h1>Request not valid</h1>
          @elseif ($page == 1)
            <x-beli-tiket.form-info-pribadi :id="$id"></x-beli-tiket.form-info-pribadi>
          @elseif ($page == 2)
            <x-beli-tiket.form-detail-penerbangan :id="$id"></x-beli-tiket.form-detail-penerbangan>
          @elseif ($page == 3)
            <x-beli-tiket.form-info-pembayaran :id="$id"></x-beli-tiket.form-info-pembayaran>
          @else
            <h1>Request not valid</h1>
          @endif
        </div>
      </div>
    </main>
  </body>

</html>
