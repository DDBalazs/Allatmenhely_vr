@extends('layout')
@section('content')
<main class="mypage">

    <div class="container mypagebg">
        <div class="py-2">
            <h2><b>Profilod</b></h2>
        </div>
        <div class="py-2">
            <p><b>Neved címed:</b> {{Auth::user()->nev}}</p>
        </div>
        <div class="py-2">
            <p><b>E-Mail címed:</b> {{Auth::user()->email}}</p>
        </div>
        <div class="py-2">
            <p><b>Jelszavad:</b>**********</p>
        </div>
        <div class="py-2">
            <label for="tel" class="form-label"><p>Telefonszáma:</p></label>
            <input type="text" name="tel" id="tel" class="form-control w-50 mx-auto">
            <a href="" class="btn btn-dark w-25 mt-2">Mentés</a>
        </div>
        <div class="py-2">
            <a href="/newpass" class="btn btn-dark">Jelszó módosítás</a>
            <a href="/logout" class="btn btn-dark">Kijelentkezés</a>
        </div>
    </div>


</main>
@endsection

