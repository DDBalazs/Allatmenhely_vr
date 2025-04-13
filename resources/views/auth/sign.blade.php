@extends('layout')
@section('content')

    <main class="reg">
        <div class="container sign">
            <div class="form-box">
                {{-- LOGIN --}}
                <form action="/login" method="POST" class="LoginForm">
                    @csrf
                    <h2>Belépés</h2>
                    <div class="input-box">
                        <input type="text" name="email" id="email" value="{{old('email')}}">
                        <label for="email">E-mail cím</label>
                        <i class="bx bxs-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" id="password">
                        <label for="password">Jelszó</label>
                        <i class="bx bxs-lock-alt"></i>
                    </div>
                    {{-- <div class="forget-section">
                        <a href="">Elfelejtette a jelszavát?</a>
                    </div> --}}
                    <button class="buttn" type="submit">Bejelentkezés</button>
                    <div class="account-creation">
                        <span>Nincs még fiókod? <a href="" class="RegisterLink">Regisztrálj</a></span><br>
                        @if ($errors->any)
                            @foreach ($errors->all() as $sv)
                                <strong><span class="text-danger text-center mx-auto">{{$sv}}</span></strong><br>
                            @endforeach
                        @endif
                    </div>
                </form>

                {{-- REGISTER --}}
                <form action="/register" method="POST" class="RegisterForm">
                    @csrf
                    <h2>Regisztráció</h2>
                    <div class="input-box">
                        <input type="text" name="nev" id="nev" value="{{old('nev')}}">
                        <label for="nev">Név</label>
                        <i class="bx bxs-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="email" name="email" id="email" value="{{old('email')}}">
                        <label for="email">E-Mail</label>
                        <i class='bx bxs-envelope'></i>
                    </div>
                    <div class="input-box">
                        <div class="password-header">
                            <label for="password1" class="password-label">Jelszó</label>
                            <span class="password-info-icon">i
                                <span class="password-tooltip">
                                    A jelszónak tartalmaznia kell:
                                    <ul>
                                        <li>Minimum 8 karakter</li>
                                        <li>Legalább 1 nagybetű (A-Z)</li>
                                        <li>Legalább 1 kisbetű (a-z)</li>
                                        <li>Legalább 1 szám (0-9)</li>
                                        <li>Legalább 1 speciális karakter (!@#$%^&*)</li>
                                    </ul>
                                </span>
                            </span>
                        </div>
                        <input type="password" name="password" id="password1">
                        {{-- <img src="{{asset('img/visibility_off.png')}}" alt="visibilityoff" id="eyeicon"> --}}
                        <i class="bx bxs-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password_confirmation" id="password_confirmation">
                        <label for="password_confirmation">Jelszó mégegyszer</label>
                        <i class="bx bxs-lock-alt"></i>
                    </div>
                    <button class="buttn" type="submit">Regisztráció</button>
                    <div class="account-creation">
                        <span>Van már fiókod?<a href="" class="LoginLink">Jelentkezz be!</a></span><br>
                        @if ($errors->any)
                            @foreach ($errors->all() as $sv)
                                <strong><span class="text-danger text-center mx-auto">{{$sv}}</span></strong><br>
                            @endforeach
                        @endif
                    </div>
                </form>
            </div>
        </div>

        {{-- <script>
            let eyeicon = document.getElementById('eyeicon');
            let password = document.getElementById('password1');

            eyeicon.onclick = function(){
            if(password.type == "password"){
                password.type = "text";
                eyeicon.src = "{{asset('img/visibility_off.png')}}";
            }
            else{
                password.type = "password";
                eyeicon.src = "{{asset('img/visibility.png')}}";
            }
            }
        </script> --}}

    </main>

@endsection
