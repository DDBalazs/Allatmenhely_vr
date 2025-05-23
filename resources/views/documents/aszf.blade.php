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
                <h1 class="text-center mb-0">Általános Szerződési Feltételek (ÁSZF)</h1>
                <div style="width: 120px;"></div>
            </div>
            <hr class="w-100 my-2 mx-auto">
        </div>
        <div class="py-2">
            <h2>1. Bevezetés</h2>

            <p>Köszönjük, hogy felkereste Boldog Menhely weboldalát. Az Általános Szerződési Feltételek (ÁSZF) célja, hogy meghatározza a weboldal használatának feltételeit, valamint az adományozási és örökbefogadási folyamatokra vonatkozó szabályokat. Kérjük, figyelmesen olvassa el ezeket a feltételeket, mivel a weboldal használata automatikusan jelenti azok elfogadását.</p>
        </div>
        <div class="py-2">
            <h2>2. Szolgáltatások</h2>

            <h3>A weboldalon keresztül a következő szolgáltatások érhetők el:</h3>
            <li>Adományozás: Lehetőség van pénzbeli vagy tárgyi adományok leadására a menhely támogatására.</li>
            <li>Örökbefogadás: Lehetőség van állatok örökbefogadására, amelyhez szükséges az örökbefogadási jelentkezés kitöltése és a menhely által meghatározott feltételek teljesítése.</li>
        </div>
        <div class="py-2">
            <h2>3. Adatkezelés</h2>

            <p>A weboldal használata során személyes adatokat gyűjthetünk, amelyek kezeléséről részletes tájékoztatást az Adatvédelmi Tájékoztatóban talál. Az adatkezelés célja a szolgáltatások nyújtása, valamint a felhasználók tájékoztatása a menhely tevékenységéről.</p>
        </div>
        <div class="py-2">
            <h2>4. Fizetési feltételek</h2>

            <p>Az adományozási folyamat során a fizetés bankkártyával vagy más, a weboldalon elérhető fizetési módon történhet. A fizetési tranzakciók biztonságát a legmodernebb technológiákkal biztosítjuk.</p>
        </div>
        <div class="py-2">
            <h2>5. Visszatérítési feltételek</h2>

            <p>Az adományok önkéntes jellegűek, és nem jogosítanak visszatérítésre. Az örökbefogadási folyamat során keletkező költségek visszatérítésére vonatkozó feltételek az örökbefogadási szerződésben kerülnek meghatározásra.</p>
        </div>
        <div class="py-2">
            <h2>6. Felelősség</h2>

            <p>A menhely minden tőle telhetőt megtesz az állatok egészségének és jólétének biztosításáért. Az örökbefogadott állatok egészségi állapotáról a lehető legpontosabb információkat közöljük, azonban a menhely nem vállal felelősséget az állatok jövőbeli egészségi problémáiért.</p>
        </div>
        <div class="py-2">
            <h2>7. Jogi határokozások</h2>

            <p>A weboldal használatára és az itt nyújtott szolgáltatásokra vonatkozóan a magyar jogi rendelkezések az irányadóak. A felmerülő jogi vitákra a Budapest bíróságainak kizárólagos joghatósága vonatkozik.</p>
        </div>
        <div class="py-2">
            <h2>8. Kapcsolat</h2>

            <p>Ha bármilyen kérdése van az ÁSZF-vel kapcsolatban, kérjük, lépjen kapcsolatba velünk az elérhetőségek fülön található információk alapján.</p>
        </div>
    </div>
</main>

@endsection
