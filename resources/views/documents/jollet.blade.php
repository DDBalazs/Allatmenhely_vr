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
                <h1 class="text-center mb-0">Állatjóléti Szabályzat</h1>
                <div style="width: 120px;"></div>
            </div>
            <hr class="w-100 my-2 mx-auto">
        </div>
        <div class="py-2">
            <h2>1. Bevezetés</h2>

            <p>A Boldog Menhely elkötelezett az állatok jóléte és gondoskodása mellett. Ezen a szabályzaton keresztül tájékoztatjuk Önt arról, hogy milyen elveket és gyakorlatokat követünk az állatok egészségének és jólétének biztosítása érdekében.</p>
        </div>
        <div class="py-2">
            <h2>2. Az Állatok Jólétének Elvei</h2>

            <h4>Az állatok jóléte számunkra elsődleges szempont. Az alábbi alapelveket követjük:</h4>
            <li>Megfelelő táplálék és víz: Minden állat számára biztosítjuk a megfelelő mennyiségű és minőségű táplálékot és vizet.</li>
            <li>Megfelelő szállás: Az állatok számára biztosítunk tiszta, kényelmes és biztonságos szállást.</li>
            <li>Orvosi ellátás: Minden állat rendszeres orvosi ellátásban részesül, beleértve az oltásokat és a szükséges gyógykezeléseket.</li>
            <li>Szocializáció és mozgás: Az állatok számára lehetőséget biztosítunk a mozgásra és a szocializációra.</li>
        </div>
        <div class="py-2">
            <h2>3. Az Állatok Gondozása</h2>

            <li>Napi rutin: Az állatok napi rutinja tartalmazza az etetést, a takarítást, a mozgást és a szocializációt.</li>
            <li>Egészségügyi ellátás: Minden állat rendszeresen orvosi vizsgálaton esik át, és megkapja a szükséges oltásokat és gyógykezeléseket.</li>
            <li>Különleges igények: Az idős, beteg vagy fogyatékos állatok számára különleges gondoskodást biztosítunk.</li>
        </div>
        <div class="py-2">
            <h2>4. Az Állatok Szocializációja</h2>

            <li>Emberi kapcsolat: Az állatok rendszeresen kapnak lehetőséget az emberi kapcsolatra, hogy biztonságban érezzék magukat.</li>
            <li>Állatközi kapcsolat: Az állatok számára lehetőséget biztosítunk más állatokkal való interakcióra, hogy szocializálódjanak.</li>
        </div>
        <div class="py-2">
            <h2>5. Az Állatok Egészségügyi Ellátása</h2>

            <li>Rendszeres orvosi vizsgálatok: Minden állat rendszeresen orvosi vizsgálaton esik át.</li>
            <li>Oltások: Az állatok megkapják a szükséges oltásokat.</li>
            <li>Gyógykezelések: Beteg vagy sérült állatok esetében a szükséges gyógykezeléseket biztosítjuk.</li>
        </div>
        <div class="py-2">
            <h2>6. Az Állatok Örökbefogadása</h2>

            <li>Örökbefogadási folyamat: Az örökbefogadás előtt részletes tájékoztatást adunk az örökbefogadóknak az állat igényeiről és gondozásáról.</li>
            <li>Visszajelzés: Az örökbefogadóktól rendszeres visszajelzést kérünk az állat állapotáról.</li>
        </div>
        <div class="py-2">
            <h2>7. Kapcsolatfelvétel</h2>

            <h4>Ha kérdése van az állatjóléti szabályzattal kapcsolatban, kérjük, lépjen kapcsolatba velünk az alábbi elérhetőségeken:</h4>
            <li>E-mail: <a href="mailto:info@boldogmenhely.hu" class="kat">info@boldogmenhely.hu</a></li>
            <li>Telefonszám: <a href="tel:+3612345678" class="kat">+36 1 234 5678</a></li>
        </div>
        <div class="py-2">
            <h2>8. Változtatások a Szabályzatban</h2>

            <p>Ezt az Állatjóléti Szabályzatot időnként frissíthetjük. Az utolsó frissítés dátuma: 2025.03.17.</p>
        </div>

    </div>
</main>

@endsection
