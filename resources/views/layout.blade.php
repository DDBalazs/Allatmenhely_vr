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
    <link rel="icon" type="png" href="{{asset('img/weblogo.png')}}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

  <!--NAV-bar-->
  <nav class="container-fluid nav-bg navbar navbar-expand-lg" aria-label="Thirteenth navbar example"  id="stickyNav">
  <div class="container nav-bg navbar-dark d-flex justify-content-start">
    <a class="navbar-brand me-0" href="/"><img src="{{asset('img/layout/logo.png')}}" alt="logo" class="logo"></a>
    <div class="d-flex flex-lg-row-reverse justify-content-between w-lg-100 w-75">
        <div class="d-lg-flex justify-content-end">
            @if (Auth::check())
                <a class="nav-link" href="/mypage">Fiókod<img src="{{asset('img/layout/auth.png')}}" alt="profile" class="logo"></a>
            @else
                <a class="nav-link" href="/sign">Lépj be<img src="{{asset('img/layout/auth.png')}}" alt="profile" class="logo"></a>
            @endif
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-lg-flex justify-content-start justify-content-column" id="navbarsExample11">
          <ul class="navbar-nav justify-content-lg-left">
            <li class="nav-item">
              <a class="nav-link active text-dark" aria-current="page" href="/">Főoldal</a>
            </li>
            <div class="vr"></div>
            <li class="nav-item">
              <a class="nav-link active text-dark" aria-current="page" href="/allatok">Állataink</a>
            </li>
            <div class="vr"></div>
            <li class="nav-item">
              <a class="nav-link active text-dark" aria-current="page" href="/programok">Programjaink</a>
            </li>
            <div class="vr"></div>
            <li class="nav-item">
              <a class="nav-link active text-dark" aria-current="page" href="/information">Gyakori kérdések és szabályzatok</a>
            </li>
            <div class="vr"></div>
            <li class="nav-item">
              <a class="nav-link active text-dark" aria-current="page" href="/contact">Elérhetőségeink</a>
            </li>
            @if (Auth::check())
            <div class="vr"></div>
            <li class="nav-item">
              <a class="nav-link active text-dark" aria-current="page" href="/allatok/foglalas">Foglalj időpontot</a>
            </li>
            @endif
          </ul>
        </div>
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
          <p><i class='bx bx-mail-send'></i><a href="mailto:info@boldogmenhely.hu">Email: info@boldogmenhely.hu</a></p>
          <p><i class='bx bx-current-location'></i><a href="https://maps.app.goo.gl/1fQM3uQHkHQVvYU27" target="_blank">Cím: 1234 Boldog Város, Állatbarát utca 7.</a></p>
        </div>
        <div class="col text-center pt-4">
          <h2>Közösségi média</h2>
          <p><i class='bx bxl-facebook-square'></i><a href="https://www.facebook.com/boldogmenhely" target="_blank">Boldog Menhely Facebook</a></p>
          <p><i class='bx bxl-instagram' ></i><a href="https://www.instagram.com/boldogmenhely" target="_blank">Boldog Menhely Instagram</a></p>
          <p><i class='bx bxl-youtube' ></i><a href="https://www.youtube.com/@boldogmenhely" target="_blank">Boldog Menhely Youtube</a></p>
        </div>
      </div>
      <hr class="w-75 mx-auto border border-secondary my-2">
      <p class="text-center">2025 © Copyright Boldog Menhely. All Rights Reserved</p>
    </div>
  </footer>
</body>
</html>
