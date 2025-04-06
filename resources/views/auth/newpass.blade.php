@extends('layout')
@section('content')
<main class="mypage">
    <div class="container mypagebg">
        <div class="py-2">
            <h2><b>Jelszó módosítás</b></h2>
        </div>
        <hr class="w-75 mx-auto border border-dark my-2">
        <form action="/newpass" method="POST">
            @csrf
            <div class="py-2 profdata d-flex align-items-center">
                <p class="text-start">Régi jelszó:</p>
                <input type="password" name="oldpassword" id="oldpassword" class="form-control w-50 me-2">
            </div>
            <div class="py-2 profdata d-flex align-items-center">
                <p class="text-start">Új jelszó:</p>
                <input type="password" name="newpassword" id="newpassword" class="form-control w-50 me-2">
            </div>
            <div class="py-2 profdata d-flex align-items-center">
                <p class="text-start">Új jelszó megerősítése:</p>
                <input type="password" name="newpassword_confirmation" id="newpassword_confirmation" class="form-control flex-grow-1 me-2 w-50">
            </div>
            <button type="submit" class="btn btn-dark" >Jelszó módosítása</button>
        </form>
        <a href="/mypage" class="btn btn-dark my-2">Visszalépés</a>
        @if ($errors->any)
            @foreach ($errors->all() as $sv)
                <strong><span class="text-danger text-center mx-auto">{{$sv}}</span></strong><br>
            @endforeach
        @endif
    </div>


</main>
@endsection

