<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Állatmenhely</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/lightstyle.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/darkstyle.css')}}"> --}}
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/style.js')}}"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="png" href="{{asset('img/weblogo.png')}}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

{{-- SWALFIREEK --}}
    @if (session('logsuccess'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sikeres művelet!',
                text: '{{session('logsuccess')}}',
                confirmButtonText: 'Ok'
            });
        </script>
    @elseif (session('loggederror'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Sikertelen művelet!',
                text: '{{session('loggederror')}}',
                confirmButtonText: 'Ok'
            })
        </script>
    @elseif (session('newpasssuccess'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sikeres művelet!',
                text: '{{session('newpasssuccess')}}',
                confirmButtonText: 'Ok'
            })
        </script>
    @elseif (session('deltel'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sikeres művelet!',
                text: '{{session('deltel')}}',
                confirmButtonText: 'Ok'
            })
        </script>
    @elseif(session('newpasserror'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Sikertelen művelet!',
                text: '{{session('newpasserror')}}',
                confirmButtonText: 'Ok'
            })
        </script>
    @elseif (session('logerror'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Sikertelen bejelentkezés!',
                text: '{{session('logerror')}}',
                confirmButtonText: 'Ok'
            });
        </script>
    @elseif (session('regsuccess'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sikeres művelet!',
                text: '{{session('regsuccess')}}',
                confirmButtonText: 'Ok'
            });
        </script>
    @elseif (session('unloggederror'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sikeres regisztráció!',
                text: '{{session('regsuccess')}}',
                confirmButtonText: 'Ok'
            });
        </script>
    @elseif(session('logout'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Sikeres művelet!',
            text: '{{session('logout')}}',
            confirmButtonText: 'Ok'
        })
    </script>
    @elseif(session('foglalas'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sikeres időpont foglalás',
                text: '{{session('foglalas')}}',
                confirmButtonText: 'Ok'
            });
        </script>
    @elseif(session('fogerr'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sikeres időpont foglalás',
                text: '{{session('fogerr')}}',
                confirmButtonText: 'Ok'
            });
        </script>
    @elseif(session('delfog'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sikeres foglalás törlés',
                text: '{{session('delfog')}}',
                confirmButtonText: 'Ok'
            });
        </script>
    @endif

  <!--NAV-bar-->
  <nav class="container-fluid nav-bg navbar navbar-expand-lg" aria-label="Thirteenth navbar example"  id="stickyNav">
  <div class="container-fluid nav-bg navbar-dark d-flex justify-content-center">
    <a class="navbar-brand me-0" href="/"><img src="{{asset('img/layout/logo.png')}}" alt="logo" class="logo"></a>
    <div class="d-flex flex-lg-row-reverse justify-content-between w-lg-100 w-75">
        <div class="d-lg-flex justify-content-end">
                <a href=""><i class='bx bx-sun'></i></a>
                <a href=""><i class='bx bx-moon' ></i></a>
            @if (Auth::check())
                <a class="nav-link" style="display: flex; flex-direction: column; align-items: flex-end; margin-left: 20px;" href="/mypage"><img src="{{asset('img/layout/auth.png')}}" alt="profile" class="logo">Fiókod</a>
            @else
                <a class="nav-link" style="display: flex; flex-direction: column; align-items: flex-end; margin-left: 20px;" href="/sign"><img src="{{asset('img/layout/auth.png')}}" alt="profile" class="logo">Lépj be</a>
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
