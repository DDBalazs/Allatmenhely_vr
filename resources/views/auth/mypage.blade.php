@extends('layout')
@section('content')
<main class="mypage">
    <div class="container mypagebg">
        <div class="py-2">
            <h2><b>Profilod</b></h2>
        </div>
        <hr class="w-75 mx-auto my-2">
        <div class="py-2 profdata">
            <p class="text-start">Neved: {{Auth::user()->nev}}</p>
        </div>
        <div class="py-2 profdata">
            <p class="text-start">E-Mail címed: {{Auth::user()->email}}</p>
        </div>
        <div class="py-2 profdata">
            <div class="d-flex align-items-center">
                <p class="text-start mb-0 me-2">Telefonszáma: </p>
                @if (Auth::user()->tel != NULL)
                    <form action="/mypage/tel/del" method="POST" class="d-flex align-items-center">
                        @csrf
                        @method('DELETE')
                        <p class="text-start mb-0 me-2"> {{Auth::user()->tel}}</p>
                        <button class="btn btn-dark w-auto" type="submit">Telefonszám törlése</button>
                    </form>
                @else
                    <form action="/mypage/tel" method="POST" class="d-flex align-items-center flex-grow-1">
                        @csrf
                        <input type="text" name="tel" id="tel" class="form-control me-2" placeholder="Pl.: 30 123 4567">
                        <button class="btn save w-auto mx-2" type="submit">Mentés</button>
                    </form>
                    @if ($errors->any)
                        @foreach ($errors->all() as $sv)
                            <strong><span class="text-danger text-center mx-auto">{{$sv}}</span></strong><br>
                        @endforeach
                    @endif
                @endif
            </div>
        </div>
        <div class="py-2">
            <a href="/mypage/newpass" class="btn change">Jelszó módosítás</a>
            <a href="/mypage/logout" class="btn kij">Kijelentkezés</a>
        </div>
        <div class="py-2">
            @if (count($foglalasaim)>0)
            <h1 class="text-center">Foglalásaid</h1>
                <table class="mx-auto text-center table table-stripped table-bordered">
                    <thead>
                        <tr>
                            <th>Állat neve</th>
                            <th>Foglalás dátuma</th>
                            <th>Elfogadási státusz</th>
                            <th>Teljesítési státusz</th>
                            <th>Lemondás</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($foglalasaim as $db)
                            <tr>
                                <td>{{$db->nev}}</td>
                                <td>{{$db->datum}}</td>
                                @if ($db->elfogadas == "n")
                                    <td>Elutasítva</td>
                                    <td></td>
                                @elseif($db->elfogadas == "i")
                                    <td>Elfogadva</td>
                                    @if ($db->teljesitve == 0)
                                        <td>Még nincs teljesítve</td>
                                    @else
                                        <td>Teljesítve</td>
                                    @endif
                                @else
                                    <td>Elfogadásra vár</td>
                                    <td></td>
                                @endif
                                <td>
                                    <form action="/mypage/{{$db->foglalt_id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger w-auto mx-2" type="submit">Foglalás lemondása</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>


</main>
@endsection

