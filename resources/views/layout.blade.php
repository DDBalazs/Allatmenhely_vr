<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Állatmenhely</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/style.js')}}"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

  <!--NAV-bar-->
  <nav class="container-fluid nav-bg navbar navbar-expand-lg" aria-label="Thirteenth navbar example"  id="stickyNav">
  <div class="container nav-bg navbar-dark">
    <a class="navbar-brand me-0" href="/"><img src="{{asset('img/layout/logo.png')}}" alt="logo" class="logo"></a>
    <div class="d-lg-flex justify-content-end">
        @if (Auth::check())
            <a class="nav-link" href="/mypage"><img src="{{asset('img/layout/auth.png')}}" alt="profile" class="logo"></a>
        @else
            <a class="nav-link" href="/sign"><img src="{{asset('img/layout/auth.png')}}" alt="profile" class="logo"></a>
        @endif
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarsExample11">
      <ul class="navbar-nav justify-content-lg-left">
        <li class="nav-item">
          <a class="nav-link active text-dark" aria-current="page" href="/">Főoldal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-dark" aria-current="page" href="adatlap.html">Állataink</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-dark" aria-current="page" href="#">Programjaink</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-dark" aria-current="page" href="#">Tudnivalók</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-dark" aria-current="page" href="#">Kapcsolat</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>

  @yield('content')

<footer>
    <hr>
    <div class="container">
      <div class="row">
        <div class="col text-center py-4">
          <h2>Elérhetőségeink</h2>
          <p><i class='bx bxs-mobile'></i>Telefon: +36 1 234 5678</p>
          <p><i class='bx bx-mail-send'></i></i><a href="mailto:info@boldogmenhely.hu">Email: info@boldogmenhely.hu</a></p>
          <p><i class='bx bx-current-location'></i><a href="https://maps.app.goo.gl/1fQM3uQHkHQVvYU27" target="_blank">Cím: 1234 Boldog Város, Állatbarát utca 7.</a></p>
        </div>
        <div class="col text-center pt-4">
          <h2>Közösségi média</h2>
          <p><i class='bx bxl-facebook-square'></i><a href="" target="_blank">Boldog Menhely Facebook</a></p>
          <p><i class='bx bxl-instagram' ></i><a href="" target="_blank">Boldog Menhely Instagram</a></p>
          <p><i class='bx bxl-youtube' ></i><a href="" target="_blank">Boldog Menhely Youtube</a></p>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
