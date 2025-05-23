@extends('layout')
@section('content')

<main class="documents">
    <div class="container">
        <div class="py-2">
            <div class="d-flex align-items-center justify-content-between mt-3">
                <a href="/information" class="d-inline-flex align-items-center custom-link">
                    <i class='bx bx-left-arrow-alt me-2'></i>
                    <span>Lépj vissza!</span>
                </a>
                <h1 class="text-center mb-0">Gyakran Ismételt Kérdések (GYIK)</h1>
                <div style="width: 120px;"></div>
            </div>
            <hr class="w-100 my-2 mx-auto">
        </div>
        <div class="py-2">
            <h2>1. Általános Kérdések</h2>

            <h4>Mi a menhely missziója?</h4>
            <p>A menhely célja, hogy menedéket és gondoskodást biztosítsunk az elhagyott és sérült állatoknak, és segítsünk nekik új otthonra találni.</p>
            <br>
            <h4>Hol található a menhely?</h4>
            <p>A menhely címe: 1234 Boldog Város, Állatbarát utca 7.. Nyitvatartási idő: <a href="/contact">KATT IDE</a>Az adott helyen tudja megnézni.</p>
        </div>
        <div class="py-2">
            <h2>2. Örökbefogadással Kapcsolatos Kérdések</h2>

            <h4>Hogyan lehet örökbefogadni egy állatot?</h4>
            <p>Az örökbefogadáshoz töltse ki az online jelentkezési űrlapot, majd vegye fel a kapcsolatot velünk személyesen vagy telefonon.</p>
            <br>
            <h4>Milyen állatok vannak örökbefogadásra?</h4>
            <p>Az örökbefogadható állatok listáját az "Állataink" oldalon találja vagy <a href="/allatok">KATT IDE</a>.</p>
        </div>
        <div class="py-2">
            <h2>3. Adományozással Kapcsolatos Kérdések</h2>

            <h4>Hogyan lehet adományozni?</h4>
            <p>Adományozni online banki átutalással vagy személyesen is lehet.</p>
            <br>
            <h4>Mire használják fel az adományokat?</h4>
            <p>Az adományokat az állatok ellátására, gyógykezelésére és a menhely fenntartására fordítjuk.</p>
        </div>
        <div class="py-2">
            <h2>4. Önkéntes Munkával Kapcsolatos Kérdések</h2>

            <h4>Hogyan lehet önkéntesként segíteni?</h4>
            <p>Jelentkezzen a profilnál!</a>.</p>
            <br>
            <h4>Milyen feladatok vannak az önkéntesek számára?</h4>
            <p>Az önkéntesek feladatai közé tartozik az állatok etetése, sétáltatása, takarítása.</p>
        </div>
        <div class="py-2">
            <h2>5. Állatokkal Kapcsolatos Kérdések</h2>

            <h4>Milyen állatok vannak a menhelyen?</h4>
            <p>A menhelyen kutyák, macskák és egyéb kisállatok találhatók.</p>
            <br>
            <h4>Hogyan kerülnek az állatok a menhelyre?</h4>
            <p>Az állatok többsége elhagyott vagy sérült állatként kerül hozzánk.</p>
        </div>
        <div class="py-2">
            <h2>6. Egyéb Kérdések</h2>

            <h4>Hogyan lehet kapcsolatba lépni a menhellyel?</h4>
            <p>Kapcsolatba léphet velünk az <a href="mailto:info@boldogmenhely.hu" class="kat">info@boldogmenhely.hu</a> e-mail címen vagy a <a href="tel:+3612345678" class="kat">+36 1 234 5678</a> telefonszámon.</p>
            <br>
            <h4>Szerveztek-e nyílt napokat vagy eseményeket?</h4>
            <p>Igen, rendszeresen szervezünk nyílt napokat és eseményeket.Lásd a programjain fülben.</p>
        </div>
    </div>
</main>

@endsection
