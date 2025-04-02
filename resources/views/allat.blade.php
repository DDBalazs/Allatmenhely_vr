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
                <img src="{{asset('img/allatok/k/k'.$lekertallat->allat_id.'.png')}}" alt="{{$lekertallat->allat_id}}" class="w-auto h-auto">
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
                <button class="btn btn-secondary w-50 h-50 d-incline-block">Foglalj</button>
                @if (count($foglalte)>0)
                    <div class="foglalilehetoseg">

                        <p>Dátumok:</p>
                        @foreach ($foglalte as $fog)
                            <a href="foglalas/{{$fog->allat_id}}">{{$fog->datum}}</a>
                        @endforeach

                    </div>
                @else

                @endif

            </div>
        </div>
    </div>
</main>

@endsection
