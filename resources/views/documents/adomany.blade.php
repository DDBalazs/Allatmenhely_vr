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
                <h1 class="text-center mb-0">Adományozási Szabályzat</h1>
                <div style="width: 120px;"></div>
            </div>
            <hr class="w-100 my-2 mx-auto">
        </div>
        <div class="py-2">
            <h2>1. Bevezetés</h2>

            <p>Köszönjük, hogy támogatja Boldog Menhely munkáját! Ezen az oldalon tájékoztatjuk Önt az adományozási folyamatról, az elfogadott adományok típusairól, valamint arról, hogyan használjuk fel az adományokat.</p>
        </div>
        <div class="py-2">
            <h2>2. Milyen Adományokat Fogadunk El?</h2>

            <h4>A menhely a következő típusú adományokat fogadja el:</h4>
            <li>Pénzbeli adományok: Banki átutalással vagy online fizetéssel.</li>
            <li>Tárgyi adományok: Takarók, állati tápok, játékok, orvosi eszközök.</li>
            <li>Szolgáltatási adományok: Önkéntes munka, szakmai segítségnyújtás.</li>
        </div>
        <div class="py-2">
            <h2>3. Hogyan Lehet Adományozni?</h2>

            <li>Pénzbeli adományok: Az adományokat banki átutalással vagy online fizetéssel lehet leadni.</li>
            <li>Tárgyi adományok: A tárgyi adományokat személyesen lehet leadni a menhelyen.</li>
            <li>Szolgáltatási adományok: Az önkéntes munkáról a profil oldalon található információ.</li>
        </div>
        <div class="py-2">
            <h2>4. Mire Használják Fel az Adományokat?</h2>

            <h4>Az adományokat a következő célokra fordítjuk:</h4>
            <li>Az állatok táplálása és gondozása.</li>
            <li>Orvosi kezelések és oltások.</li>
            <li>A menhely fenntartása és fejlesztése.</li>
            <li>Ismeretterjesztő programok szervezése.</li>
        </div>
        <div class="py-2">
            <h2>5. Adományozás Utáni Nyugta</h2>

            <p>Minden pénzbeli adományozás után elektronikus nyugtát küldünk.</p>
        </div>
        <div class="py-2">
            <h2>6. Adatvédelmi Nyilatkozat</h2>

            <p>Az adományozó személyes adatait kizárólag az adományozási folyamat lebonyolítására és a nyugta kiállítására használjuk.</p>
        </div>
        <div class="py-2">
            <h2>7. Kapcsolatfelvétel</h2>

            <h4>Ha kérdése van az adományozással kapcsolatban, kérjük, lépjen kapcsolatba velünk az alábbi elérhetőségeken:</h4>
            <li>E-mail: info@boldogmenhely.hu</li>
            <li>Telefonszám: +36 1 234 5678</li>
        </div>
        <div class="py-2">
            <h2>8. Változtatások a Szabályzatban</h2>

            <p>Ezt az Adományozási Szabályzatot időnként frissíthetjük. Az utolsó frissítés dátuma: 2025.03.17.</p>

        </div>
    </div>
</main>

@endsection
