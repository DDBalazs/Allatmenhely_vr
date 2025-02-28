@extends('layout')
@section('content')
<main class="mypage">
    @if(session('newpasserror'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Sikertelen művelet!',
                text: '{{session('newpasserror')}}',
                confirmButtonText: 'Ok'
            })
        </script>
    @endif
    <div class="container mypagebg">
        <div class="py-2">
            <h2><b>Jelszó módosítás</b></h2>
        </div>
        <form action="/newpass" method="POST">
            @csrf
            <div class="py-2">
                <label for="oldpassword">Régi jelszó:</label>
                <input type="password" name="oldpassword" id="oldpassword">
            </div>
            <div class="py-2">
                <label for="newpassword">Új jelszó:</label>
                <input type="password" name="newpassword" id="newpassword">
            </div>
            <div class="py-2">
                <label for="newpassword_confirmation">Új jelszó mégegyszer:</label>
                <input type="password" name="newpassword_confirmation" id="newpassword_confirmation">
            </div>
            <button type="submit" class="buttn" >Jelszó módosítása</button>
        </form>
        <a href="/mypage" class="btn btn-dark">Visszalépés</a>
    </div>


</main>
@endsection

