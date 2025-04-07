@extends('layout')
@section('content')

<main class="allat">
    <hr>
    <div class="allathead">
        <h1 class="text-center">Állataink</h1>
    </div>
    <hr class="w-75 mx-auto border border-dark my-2">
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
                <button class="btn btn-secondary w-50 h-50 d-incline-block" onclick="Foglalas()">Foglalj</button>
                    <div class="foglalilehetoseg" id="foglalasdiv">
                        <hr class="w-75 mx-auto border border-dark my-2">
                        <form action="foglalas" method="POST">
                            @csrf
                            <h3 class="text-center">Önkéntes tevékenységeket minden nap a látogatási idő után 14 és 18 óra között lehetséges</h3>
                            
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
