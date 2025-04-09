@extends('layout')
@section('content')

<main class="allat">
    <div class="allathead">
        <h1 class="text-center">Állataink</h1>
    </div>
    <hr class="w-75 mx-auto my-2">
    <div class="container">
        <div class="row">
            <div class="col mx-auto text-center">
                @if ($lekertallat->faj == "kutya")
                    <img src="{{asset('img/allatok/k/k'.$lekertallat->allat_id.'.png')}}" alt="{{$lekertallat->allat_id}}" class="w-100 h-100">
                @else
                    <img src="{{asset('img/allatok/c/c'.$lekertallat->allat_id.'.png')}}" alt="{{$lekertallat->allat_id}}" class="w-100 h-100">
                @endif
            </div>
            <div class="col">
                <p class="px-3 fs-3"><strong>{{$lekertallat->nev}}</strong></p>
                <p>{{$lekertallat->megjegyzes}}</p>
                <p>Születési ideje: {{$lekertallat->szuldatum}}</p>
                <p>Bekerülési ideje: {{$lekertallat->beerkezes_datuma}}</p>
                @foreach ($merete as $kat)
                    <p>Mérete: {{$kat->kategoria}}</p>
                @endforeach
                @foreach ($fajtaja as $faj)
                    <p>Fajtája: {{$faj->pontos_fajta}}</p>
                @endforeach
                @if ($lekertallat->nem ==  1)
                    <p>Nem: fiú</p>
                @else
                    <p>Nem: lány</p>
                @endif
                <p>Szín: {{$lekertallat->szin}}</p>
            </div>
        </div>
    </div>
    <hr class="w-75 mx-auto border border-dark my-2">
    <div class="container">
        <div class="foglalas">
            <h2 class="text-center">Foglalj időpontot</h2>
            <h4 class="text-center">Szeretnél időpontot foglalni önkéntes sétáltatásához vagy esetleg, hogy csak meglátogasd és segítsd a munkánkat?</h4>
            <div class="mx-auto text-center">
                @if (Auth::check())
                    <button class="btn btn-secondary w-50 h-50 d-incline-block" onclick="Foglalas()">Foglalj</button>
                @else
                    <a href="/sign" class="btn btn-secondary w-50 h-50 d-incline-block">Nem vagy bejelentkezve, kattints ide és jelenkezz be</a>
                @endif
                @if(count($foglalte)>0)
                    <h5 class="py-2">Foglalt dátumok:</h5>
                @foreach ($foglalte as $fog)
                    <p>{{$fog->datum}}</p>
                @endforeach
                @endif
                    <div class="foglalilehetoseg" id="foglalasdiv">
                        <form action="/allatok/{{$lekertallat->allat_id}}/foglalas" method="POST">
                            @csrf
                            <h3 class="text-center">Önkéntes tevékenységeket minden nap a látogatási idő után 14 és 18 óra között lehetséges</h3>
                            <label for="idopont">Válassz időpontot</label>
                            <input type="date" class="form-control w-50 mx-auto" name="idopont" id="idopont" value="idopont">
                            <button type="submit" class="btn btn-dark my-2">Foglalás</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</main>

    <script>
        document.getElementById('foglalasdiv').style.visibility = "hidden";
        function Foglalas(){
            document.getElementById('foglalasdiv').style.visibility = "visible";
        }
    </script>
@endsection
