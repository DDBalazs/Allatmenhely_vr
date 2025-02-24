@extends('layout')
@section('content')

    <main class="reg">
        <div class="container sign">
            <div class="form-box">
                {{-- LOGIN --}}
                <form action="" class="LoginForm">
                    <h2>Belépés</h2>
                    <div class="input-box">
                        <input type="text" required>
                        <label for="">Név</label>
                        <i class="bx bxs-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" required>
                        <label for="">E-Mail</label>
                        <i class='bx bxs-envelope'></i>
                    </div>
                    <div class="input-box">
                        <input type="text" required>
                        <label for="">Jelszó</label>
                        <i class="bx bxs-lock-alt"></i>
                    </div>
                    <div class="forget-section">
                        <a href="">Elfelejtette a jelszavát?</a>
                    </div>
                    <button class="buttn">Bejelentkezés</button>
                    <div class="account-creation">
                        <span>Nincs még fiókod?<a href="" class="RegisterLink">Regisztrálj</a></span>
                    </div>
                </form>

                {{-- REGISTER --}}
                <form action="" class="RegisterForm">
                    <h2>Regisztráció</h2>
                    <div class="input-box">
                        <input type="text" required>
                        <label for="">Név</label>
                        <i class="bx bxs-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" required>
                        <label for="">E-Mail</label>
                        <i class='bx bxs-envelope'></i>
                    </div>
                    <div class="input-box">
                        <input type="text" required>
                        <label for="">Jelszó</label>
                        <i class="bx bxs-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" required>
                        <label for="">Jelszó mégegyszer</label>
                        <i class="bx bxs-lock-alt"></i>
                    </div>
                    <div class="forget-section">
                        <a href="">Elfelejtette a jelszavát?</a>
                    </div>
                    <button class="buttn">Regisztráció</button>
                    <div class="account-creation">
                        <span>Van már fiókod?<a href="" class="LoginLink">Jelentkezz be!</a></span>
                    </div>
                </form>
            </div>
        </div>
    </main>

@endsection
