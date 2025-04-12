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
                <h1 class="text-center mb-0">Cookie Tájékoztató</h1>
                <div style="width: 120px;"></div>
            </div>
            <hr class="w-100 my-2 mx-auto">
        </div>
        <div class="py-2">
            <h2>1. Bevezetés</h2>

            <p>Köszönjük, hogy felkereste Boldog Menhely weboldalát! Ezen az oldalon tájékoztatjuk Önt arról, hogy milyen cookie-kat használunk, miért használjuk őket, és hogyan kezelheti azokat.</p>
        </div>
        <div class="py-2">
            <h2>2. Mi az a Cookie?</h2>

            <p>A cookie-k kis szöveges fájlok, amelyeket a weboldal helyez el a felhasználó eszközén (pl. számítógép, mobiltelefon). Ezek a fájlok segítenek a weboldal működésében és a felhasználói élmény javításában.</p>
        </div>
        <div class="py-2">
            <h2>3. Milyen Cookie-kat Használunk?</h2>

            <h4>A weboldal a következő típusú cookie-kat használja:</h4>
            <li>Szükséges cookie-k: Ezek nélkülözhetetlenek a weboldal alapvető funkcióinak működéséhez.</li>
            <li>Teljesítmény cookie-k: Ezek segítenek a weboldal teljesítményének elemzésében.</li>
            <li>Funkcionalitás cookie-k: Ezek lehetővé teszik, hogy a weboldal emlékezzen a felhasználó preferenciáira.</li>
            <li>Marketing cookie-k: Ezeket harmadik felek használják, hogy releváns hirdetéseket jelenítsenek meg.</li>
        </div>
        <div class="py-2">
            <h2>4. Miért Használunk Cookie-kat?</h2>

            <h4>A cookie-kat a következő célokra használjuk:</h4>
            <li>A weboldal működésének biztosítása</li>
            <li>A felhasználói élmény javítása</li>
            <li>A weboldal forgalmának elemzése</li>
            <li>Releváns hirdetések megjelenítése</li>
        </div>
        <div class="py-2">
            <h2>5. Harmadik Fél Cookie-k</h2>

            <p>A weboldalon harmadik felek (pl. Google Analytics, Facebook) is használhatnak cookie-kat, hogy elemzéseket készítsenek és releváns hirdetéseket jelenítsenek meg.</p>
        </div>
        <div class="py-2">
            <h2>6. Cookie-k Kezelése</h2>

            <p>A cookie-kat a böngésző beállításaiban lehet letiltani vagy törölni. Kérjük, vegye figyelembe, hogy a szükséges cookie-k letiltása hatással lehet a weboldal működésére.</p>
        </div>
        <div class="py-2">
            <h2>7. Változtatások a Cookie Tájékoztatóban</h2>

            <p>Ezt a Cookie Tájékoztatót időnként frissíthetjük. Az utolsó frissítés dátuma: 2025.03.16.</p>
        </div>
        <div class="py-2">
            <h2>8. Kapcsolatfelvétel</h2>

            <h4>Ha kérdése van a cookie-kkal kapcsolatban, kérjük, lépjen kapcsolatba velünk az alábbi elérhetőségeken:</h4>
            <li>E-mail: <a href="mailto:info@boldogmenhely.hu" class="kat">info@boldogmenhely.hu</a></li>
            <li>Telefonszám: <a href="tel:+3612345678" class="kat">+36 1 234 5678</a></li>
        </div>
    </div>
</main>

@endsection
