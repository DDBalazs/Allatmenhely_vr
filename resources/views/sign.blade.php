@extends('layout')
@section('content')
{{-- https://www.youtube.com/watch?v=d-VIORM1X2o --}}

    <main class="reg">
        <div class="container sign">
            <div class="form-box">
                <form action="">
                    <h2>Belépés</h2>
                    <div class="input-box">
                        <input type="text" required>
                        <label for="">Név</label>
                    </div>
                    <div class="input-box">
                        <input type="text" required>
                        <label for="">E-Mail</label>
                    </div>
                    <div class="input-box">
                        <input type="text" required>
                        <label for="">Jelszó</label>
                    </div>
                    <div class="forget-section">
                        <p>
                            <input type="checkbox" name="" id="">
                            Remember me
                        </p>
                        <a href="">Elfelejtette a jelszavát?</a>
                    </div>
                    <button class="btn">Bejelentkezés</button>
                    <div class="account-creation">
                        <span>Nincs még fiókod?<a href="">Regisztrálj</a></span>
                    </div>
                </form>
            </div>
        </div>
    </main>

@endsection
