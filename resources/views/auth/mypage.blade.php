@extends('layout')
@section('content')
<main class="mypage">
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
            @if (Auth::user()->tel != NULL)
                <form action="/mypage/deltel" method="POST">
                    @csrf
                    @method('DELETE')
                    <p class="text-start"> {{Auth::user()->tel}}</p>
                    <button class="btn btn-dark w-auto mx-2" type="submit">Telefonszám törlése</button>
                </form>
            @else
                <form action="/mypage/tel" method="POST">
                    @csrf
                    <input type="text" name="tel" id="tel" class="form-control flex-grow-1 me-2 w-100" placeholder="Pl.: 30 123 4567">
                    <button class="btn btn-dark w-auto mx-2" type="submit">Mentés</button>
                </form>
                @if ($errors->any)
                    @foreach ($errors->all() as $sv)
                        <strong><span class="text-danger text-center mx-auto">{{$sv}}</span></strong><br>
                    @endforeach
                @endif
            @endif
        </div>
        <div class="py-2">
            <a href="/mypage/newpass" class="btn btn-dark">Jelszó módosítás</a>
            <a href="/mypage/logout" class="btn btn-dark">Kijelentkezés</a>
        </div>
    </div>


</main>
@endsection

