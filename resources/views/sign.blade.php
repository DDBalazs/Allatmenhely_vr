@extends('layout')
@section('content')

    <main class="reg">
        @if (session('logerror'))
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
        @endif
        <div class="container sign">
            <div class="form-box">
                {{-- LOGIN --}}
                <form action="/login" method="POST" class="LoginForm">
                    @csrf
                    <h2>Belépés</h2>
                    <div class="input-box">
                        <input type="text" name="candicate" id="candicate" value="{{old('candicate')}}">
                        <label for="candicate">Név vagy E-mail cím</label>
                        <i class="bx bxs-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" id="password">
                        <label for="password">Jelszó</label>
                        <i class="bx bxs-lock-alt"></i>
                    </div>
                    <div class="forget-section">
                        <a href="">Elfelejtette a jelszavát?</a>
                    </div>
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
                        <input type="password" name="password" id="password1">
                        <label for="password">Jelszó</label>
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


    </main>

@endsection
