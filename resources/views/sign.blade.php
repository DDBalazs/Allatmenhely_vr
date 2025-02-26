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
                        <input type="text" name="candicate" id="candicate" value="{{old('candicate')}}" required>
                        <label for="candicate">Név vagy Email cím</label>
                        <i class="bx bxs-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" id="password" required>
                        <label for="password">Jelszó</label>
                        <i class="bx bxs-lock-alt"></i>
                    </div>
                    <div class="forget-section">
                        <a href="">Elfelejtette a jelszavát?</a>
                    </div>
                    <button class="buttn" type="submit">Bejelentkezés</button>
                    <div class="account-creation">
                        <span>Nincs még fiókod?<a href="" class="RegisterLink">Regisztrálj</a></span>
                    </div>
                </form>

                {{-- REGISTER --}}
                <form action="/register" method="POST" class="RegisterForm">
                    @csrf
                    <h2>Regisztráció</h2>
                    <div class="input-box">
                        <input type="text" name="nev" id="nev" value="{{old('nev')}}" required>
                        <label for="nev">Név</label>
                        <i class="bx bxs-user"></i>
                        @error('nev')
                            <span class="text-error">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="input-box">
                        <input type="email" name="email" id="email" value="{{old('email')}}" required>
                        <label for="email">E-Mail</label>
                        <i class='bx bxs-envelope'></i>
                        @error('email')
                            <span class="text-error">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" id="password1" required>
                        <label for="password">Jelszó</label>
                        <i class="bx bxs-lock-alt"></i>
                        @error('password')
                            <span class="text-error">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="input-box">
                        <input type="password" name="password_confirmation" id="password_confirmation" required>
                        <label for="password_confirmation">Jelszó mégegyszer</label>
                        <i class="bx bxs-lock-alt"></i>
                        @error('password_confirmation')
                            <span class="text-error">{{$message}}</span>
                        @enderror
                    </div>
                    <button class="buttn" type="submit">Regisztráció</button>
                    <div class="account-creation">
                        <span>Van már fiókod?<a href="" class="LoginLink">Jelentkezz be!</a></span>
                    </div>
                </form>
            </div>
        </div>


    </main>

@endsection
