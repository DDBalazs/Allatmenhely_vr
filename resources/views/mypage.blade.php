@extends('layout')
@section('content')
<main class="mypage">
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
    @endif
    <div class="container mypagebg">
        <div class="py-2">
            <h2><b>Profilod</b></h2>
        </div>
        <hr class="w-75 mx-auto border border-dark my-2">
        <div class="py-2 profdata">
            <p class="text-start">Neved címed: {{Auth::user()->nev}}</p>
        </div>
        <div class="py-2 profdata">
            <p class="text-start">E-Mail címed: {{Auth::user()->email}}</p>
        </div>
        <div class="py-2 profdata d-flex align-items-center">
            <p class="text-start">Telefonszáma: </p>
            @if (Auth::user()->tel == !0)
                <p class="text-start"> {{Auth::user()->tel}}</p>
                <a href="" class="btn btn-dark w-25 mx-2">Telefonszám módosítása</a>
            @else
                <input type="text" name="tel" id="tel" class="form-control flex-grow-1 me-2 w-50">
                <a href="" class="btn btn-dark w-25 mx-2">Mentés</a>
            @endif
        </div>
        <div class="py-2">
            <a href="/newpass" class="btn btn-dark">Jelszó módosítás</a>
            <a href="/logout" class="btn btn-dark">Kijelentkezés</a>
        </div>
    </div>


</main>
@endsection

