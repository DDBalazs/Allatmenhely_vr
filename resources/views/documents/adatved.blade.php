@extends('layout')
@section('content')

<main class="documents">
    <hr>
    <div class="container">
        <div class="py-2">
            <h1 class="text-center"><a href="/information" class="d-flex"><i class='bx bx-left-arrow-alt' ></i>Lépj vissza!</a>Adatvédelmi Tájékoztató</h1>
            <hr class="w-75 mx-auto border border-dark my-2">
        </div>
        <div class="py-2">
            <h2>1. Bevezetés</h2>
            <hr class="w-25 border border-dark my-2">
            <p>Köszönjük, hogy felkereste Boldog Menhely weboldalát! Ezen az oldalon tájékoztatjuk Önt arról, hogy milyen személyes adatokat gyűjtünk, hogyan kezeljük azokat, és milyen jogai vannak az adatkezeléssel kapcsolatban.</p>
        </div>
        <div class="py-2">
            <h2>2. Az Adatkezelő Adatai</h2>
            <hr class="w-25 border border-dark my-2">
            <li>Az adatkezelő neve: Boldog Menhely</li>
            <li>Székhely: 1234 Boldog Város, Állatbarát utca 7.</li>
            <li>Kapcsolattartási e-mail: info@boldogmenhely.hu</li>
            <li>Telefonszám: +36 1 234 5678</li>
        </div>
        <div class="py-2">
            <h2>3. Milyen Adatokat Gyűjtünk?</h2>
            <hr class="w-25 border border-dark my-2">
            <h3>A weboldalon keresztül a következő adatokat gyűjtjük:</h3>
            <li>Név</li>
            <li>E-mail cím</li>
            <li>Telefonszám</li>
            <li>Adományozási információk (pl. összeg, számlázási adatok)</li>
            <li>Böngészési adatok (pl. IP-cím, böngésző típusa)</li>
        </div>
        <div class="py-2">
            <h2>4. Az Adatkezelés Célja</h2>
            <hr class="w-25 border border-dark my-2">
            <li>Örökbefogadási folyamat lebonyolítása</li>
            <li>Adományozási folyamat kezelése</li>
            <li>Hírlevelek küldése</li>
            <li>Weboldal használatának elemzése és fejlesztése</li>
        </div>
        <div class="py-2">
            <h2>6. Az Adatok Tárolási Ideje</h2>
            <hr class="w-25 border border-dark my-2">
            <h3>Az adatokat a következő ideig tároljuk:</h3>
            <li>Örökbefogadási adatok: 2 évig</li>
            <li>Adományozási adatok: 5 évig</li>
        </div>
        <div class="py-2">
            <h2>7. Adatátadás Harmadik Félnek</h2>
            <hr class="w-25 border border-dark my-2">
            <p>Az adatokat csak a szükséges harmadik felekkel osztjuk meg (pl. bankszámla kezelése, szállítási partnerek). Az adatokat nem adjuk el vagy nem osztjuk meg harmadik felekkel reklámcélokra.</p>
        </div>
        <div class="py-2">
            <h2>8. Az Adatbiztonság</h2>
            <hr class="w-25 border border-dark my-2">
            <p>Az adatokat modern technológiákkal védjük, hogy biztosítsuk azok biztonságát. Csak korlátozott számú munkatársunk fér hozzá az adatokhoz.</p>
        </div>
        <div class="py-2">
            <h2>9. A Felhasználó Jogai</h2>
            <hr class="w-25 border border-dark my-2">
            <h3>Önnek joga van:</h3>
            <li>Hozzáférni a személyes adataihoz</li>
            <li>Kérni az adatok helyesbítését vagy törlését</li>
            <li>Korlátozni az adatkezelést</li>
            <li>Kifogást emelni az adatkezelés ellen</li>
            <li>Adathordozhatósági jog gyakorlása</li>
            <li>Visszavonni a hozzájárulását bármikor</li>
        </div>
        <div class="py-2">
            <h2>10. Kapcsolatfelvétel</h2>
            <hr class="w-25 border border-dark my-2">
            <h3>Ha kérdése van az adatkezeléssel kapcsolatban, kérjük, lépjen kapcsolatba velünk az alábbi elérhetőségeken:</h3>
            <li>E-mail: info@boldogmenhely.hu</li>
            <li>Telefonszám: +36 1 234 5678</li>
        </div>
        <div class="py-2">
            <h2>11. Cookie-k Használata</h2>
            <hr class="w-25 border border-dark my-2">
            <p>A weboldal cookie-kat használ a felhasználói élmény javítása és a weboldal forgalmának elemzése érdekében. A cookie-kat letilthatja a böngésző beállításaiban.</p>
        </div>
        <div class="py-2">
            <h2>12. Dokumentum Frissítése</h2>
            <hr class="w-25 border border-dark my-2">
            <p>Ezt a dokumentumot időnként frissíthetjük. Az utolsó frissítés dátuma: 2025.03.16.</p>
        </div>
    </div>
</main>

@endsection
