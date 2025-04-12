@extends('layout')
@section('content')

<main class="program">
    <div class="container">
        <div class="kiemelt">
            <div class="py-4">
                <h1 class="text-center">Programjaink</h1>
                <hr class="w-75 mx-auto">
                <h5 class="text-center">Csatlakozz tevékenységeinkhez, és segíts nekünk, hogy az állatmenhelyünkön élő kutyák és macskák boldogabb életet élhessenek! Ismerd meg programjainkat, és válaszd ki, hogyan szeretnél részt venni.</h5>
            </div>
            <div class="py-4">
                <h2>Kiemelt programjaink</h2>
                <hr class="w-25">
                <h3>Kutyasétáltatás</h3>
                <h5>Szeretnél segíteni, de nincs lehetőséged örökbe fogadni? Csatlakozz kutyasétáltatási programunkhoz! Heti rendszerességgel lehetőséged van sétáltatni menhelyi kutyáinkat, ezzel is hozzájárulva boldogabb életükhöz.</h5>
                <li>Időpontok: Minden héten, minden nap <b>kedden</b> és <b>szerdán</b> kívül.</li>
                <li>Helyszín: Változó álltalában</li>
                @if (Auth::check())
                    <li>Jelentkezési lehetőség: <a href="/sign">Regisztrálj most!</a></li>
                @else
                    <li>Jelentkezési lehetőség: <a href="/sign">Jelentkezz most!</a></li>
                @endif
            </div>
            <div class="py-4">
                <h3>Nyílt napok</h3>
                <h5>Látogass el hozzánk, és ismerd meg menhelyünk működését! Nyílt napjainkon bemutatjuk állatainkat, és lehetőséged van találkozni leendő társaddal</h5>
                <li>Időpont: Minden hónapban az első vasárnap.</li>
                <li>Programok: Állatbemutató, túra a menhelyen, önkéntes lehetőségek bemutatása</li>
                <li>Jelentkezés: <b>NEM</b> szükséges előre jelentkezni</li>
            </div>
            <div class="py-4">
                <h3>Önkéntes programok</h3>
                <h5>Szeretnél aktívan részt venni a menhely munkájában? Csatlakozz önkénteseink csapatához! Lehetőséged van takarítani, etetni, vagy akár segíteni az állatok oltásában.</h5>
                <li>Időpontok: Heti rendszerességgel</li>
                <li>Feladatok: Takarítás, etetés, állatok gondozása, sétáltatásuk</li>
                <li>Jelentkezés: <a href="/sign">Regisztrálj</a></li>
            </div>
        </div>
        <div class="galeria py-4">
                <h1 class="text-center">Galéria</h1>
                <hr class="w-75 mx-auto">
            <div class="row mx-auto text-center">
                <div class="col"><img src="{{asset('img/programok/elso.png')}}" alt="elso"></div>
                <div class="col"><img src="{{asset('img/programok/masodik.png')}}" alt="masodik"></div>
                <div class="col"><img src="{{asset('img/programok/harmadik.png')}}" alt="harmadik"></div>
            </div>
        </div>
        <div class="gyik">
            <div class="py-4">
                <h1 class="text-center">Gyakran ismételt kérdések</h1>
                <hr class="w-75 mx-auto">
                <h5>Kell-e előzetesen jelentkeznem a kutyasétáltatásra?</h5>
                <p>Igen kell előzetesen jeletkezni, ha van már fiókod akkor a Időpontfoglalás fűlben, ha még nincs akkor a fiók fülön tudsz regisztrálni.</p>
                <br>
                <h5>Mit kell hozni a nyíltnapra?</h5>
                <p>Nem kell semmi konkrétat hozni a nyíltnapokra. A szerelésed legyen kényelmes öltözék, illetve olyanok ami nem probléma ha kicsit koszos lesz az állatok álltal.</p>
                <br>
                <h5>Hogyan lehet önkéntes lenni?</h5>
                <p>Regisztrálni tudsz a progil fülön belül.</p>
                <h4><a href="/information/gyik">További kérdésekért kattints ide!</a></h4>
            </div>
        </div>
    </div>
</main>

@endsection
