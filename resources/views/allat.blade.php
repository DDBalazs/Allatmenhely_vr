@extends('layout')
@section('content')

<main class="allat">
    <hr>
    <div class="allathead">
        <h1 class="text-center">Ő itt: <strong>{{$lekertallat->nev}}</strong></h1>
    </div>
    <hr class="w-75 mx-auto border border-dark my-2">
    <div class="container">
        <div class="row">
            <div class="col mx-auto text-center">
                <img src="{{asset('img/allatok/k/k'.$lekertallat->allat_id.'.png')}}" alt="{{$lekertallat->allat_id}}" class="w-auto h-auto">
            </div>
            <div class="col">
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
</main>

@endsection