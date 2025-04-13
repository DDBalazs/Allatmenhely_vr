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
    <script type="text/javascript" src="{{asset('js/darkmode.js')}}" defer></script>
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
                icon: 'warning',
                title: 'Sikertelen időpont foglalás',
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
                <button id="theme-switch">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M480-280q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480q0 83-58.5 141.5T480-280ZM200-440H40v-80h160v80Zm720 0H760v-80h160v80ZM440-760v-160h80v160h-80Zm0 720v-160h80v160h-80ZM256-650l-101-97 57-59 96 100-52 56Zm492 496-97-101 53-55 101 97-57 59Zm-98-550 97-101 59 57-100 96-56-52ZM154-212l101-97 55 53-97 101-59-57Z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M480-120q-150 0-255-105T120-480q0-150 105-255t255-105q14 0 27.5 1t26.5 3q-41 29-65.5 75.5T444-660q0 90 63 153t153 63q55 0 101-24.5t75-65.5q2 13 3 26.5t1 27.5q0 150-105 255T480-120Z"/></svg>
                </button>
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
              <a class="nav-link" aria-current="page" href="/">Főoldal</a>
            </li>
            <div class="vr"></div>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/allatok">Állataink</a>
            </li>
            <div class="vr"></div>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/programok">Programjaink</a>
            </li>
            <div class="vr"></div>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/information">Gyakori kérdések és szabályzatok</a>
            </li>
            <div class="vr"></div>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/contact">Elérhetőségeink</a>
            </li>
          </ul>
        </div>
    </div>
    </div>
  </nav>
  <hr style="border: 10px solid black;opacity: 1;margin: 0px;">

  @yield('content')

<footer>
    <hr>
    <div class="container">
      <div class="row">
        <div class="col text-center py-4">
          <h2>Elérhetőségeink</h2>
          <p><i class='bx bxs-mobile'></i>Telefon: <a href="tel:+3612345678">+36 1 234 5678</a></p>
          <p><i class='bx bx-mail-send'></i>Email: <a href="mailto:info@boldogmenhely.hu">info@boldogmenhely.hu</a></p>
          <p><i class='bx bx-current-location'></i>Cím: <a href="https://maps.app.goo.gl/1fQM3uQHkHQVvYU27" target="_blank">1234 Boldog Város, Állatbarát utca 7.</a></p>
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
