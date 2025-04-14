@extends('layout')
@section('content')

<main class="allat">
    <div class="allathead">
        <h1 class="text-center">Állataink</h1>
    </div>
    <hr class="felso">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2  asd">
            <div class="col mx-auto text-center">
                @if ($lekertallat->faj == "kutya")
                    <img src="{{asset('img/allatok/k/k'.$lekertallat->allat_id.'.png')}}" alt="{{$lekertallat->allat_id}}">
                @else
                    <img src="{{asset('img/allatok/c/c'.$lekertallat->allat_id.'.png')}}" alt="{{$lekertallat->allat_id}}">
                @endif
            </div>
            <div class="col">
                <p class="fs-3"><strong>{{$lekertallat->nev}}</strong></p>
                <p class="megjegy">{{$lekertallat->megjegyzes}}</p>
                <div class="top-0 start-0">
                    <p>Születési ideje: {{date_format(date_create($lekertallat->szuldatum),'Y.m.d.')}}</p>
                    <p>Bekerülési ideje: {{date_format(date_create($lekertallat->beerkezes_datuma),'Y.m.d.')}}</p>
                    @foreach ($merete as $kat)
                        @if ($kat->kategoria == "XS")
                                <p>Mérete: Törpe méretű</p>
                            @elseif ($kat->kategoria == "S")
                                <p>Mérete: Kis méretű</p>
                            @elseif ($kat->kategoria == "M")
                                <p>Mérete: Közepes méretű</p>
                            @elseif ($kat->kategoria == "L")
                                <p>Mérete: Nagy méretű</p>
                            @else
                                <p>Mérete: Óriás méretű</p>
                            @endif
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
                    @if($lekertallat->orokbefogadhato == 1)
                        <p>Örökbefogadhatósága: Az állat örökbefogadható</p>
                    @else
                        <p>Örökbefogadhatósága: Az állat átmenetileg <span class="text-danger">NEM</span> fogadható örökbe.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <hr class="w-75 mx-auto border border-dark my-2">
    <div class="container">
        <div class="foglalas">
            <h2 class="text-center">Foglalj időpontot</h2>
            <h4 class="text-center" style="padding-bottom: 20px">Szeretnél időpontot foglalni önkéntes sétáltatásához vagy esetleg, hogy csak meglátogasd és segítsd a munkánkat?</h4>
            <div class="mx-auto text-center">
                @if (Auth::check())
                    <button class="btn w-50 h-50 d-incline-block" onclick="Foglalas()">Foglalj</button>
                @else
                    <a href="/sign" class="btn w-50 h-50 d-incline-block">Nem vagy bejelentkezve, kattints ide és jelenkezz be</a>
                @endif
                @if(count($foglalte)>0)
                    <h5 class="py-2">Foglalt dátumok:</h5>
                    <p class="text-danger">
                @foreach ($foglalte as $fog)
                    {{date_format(date_create($fog->datumido),'Y.m.d.')}}
                @endforeach
                    </p>
                @endif
                    <div class="foglalilehetoseg" id="foglalasdiv">
                        <form action="/allatok/{{$lekertallat->allat_id}}/foglalas" method="POST">
                            @csrf
                            <h3 class="text-center">Önkéntes tevékenységeket <strong>kedden</strong> és <strong>vasárnapon</strong> kívül minden nap a látogatási idő után 14 és 18 óra között lehetséges</h3>
                            <label for="idopont">Válassz időpontot</label>
                            <input type="date" class="form-control w-50 mx-auto" name="idopont" id="idopont" value="{{ date('Y-m-d') }}">
                            <button type="submit" class="btn btn-dark my-2">Foglalás</button>
                        </form>
                        @if ($errors->any)
                                @foreach ($errors->all() as $sv)
                                    <strong><span class="text-danger text-center mx-auto">{{$sv}}</span></strong><br>
                                @endforeach
                            @endif
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
