@extends('layout')
@section('content')

<main class="contact">
    <hr>
    <div class="container">
        <div class="py-2 text-center">
            <h1><b>Nyitvatartásunk</b></h1>
            <h3><b>Kutyák és macskák látogatási ideje</b></h3>
        </div>
        <hr class="w-75 mx-auto border border-dark my-2">
        <h3 class="text-center py-2"><b>Címünk:</b> 1234 Boldog Város, Állatbarát utca 7.</h3>
        <div class="py-4">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th class="col"></th>
                        <th class="col">Hétfő</th>
                        <th class="col">Kedd</th>
                        <th class="col">Szerda</th>
                        <th class="col">Csütörtök</th>
                        <th class="col">Péntek</th>
                        <th class="col">Szombat</th>
                        <th class="col">Vasárnap</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="col">Kutyák</th>
                        <td class="col">8-14</td>
                        <th class="col">Zárva</th>
                        <td class="col">8-16</td>
                        <td class="col">14-16</td>
                        <td class="col">10-16</td>
                        <td class="col">10-16</td>
                        <th class="col">Zárva</th>
                    </tr>
                    <tr>
                        <th class="col">Macska</th>
                        <td class="col">13-16</td>
                        <th class="col">Zárva</th>
                        <td class="col">10-16</td>
                        <td class="col">14-16</td>
                        <td class="col">10-16</td>
                        <td class="col">11-16</td>
                        <th class="col">Zárva</th>
                    </tr>
                </tbody>
            </table>
            <div>
                <p class="text">Az adott időpontban bármiféle előre lebeszéltek nélkül nyugodtan jöhetnek megnézni az állatokat. A bármiféle kérdésük lenne kérem hívjon fel minket az adott telefonszámon és/vagy írjon nekünk E-Mailt. Amennyiben telefonon szeretne hívni minket kedden és vasárnap <strong>NEM</strong> vagyunk nyitva. A többi napon reggel 7:30 és 18:30 között nagyon szívesen fogadjuk a hívásukat.</p>
                <div class="row mx-auto text-center">
                    <div class="col"><p class="ikonok"><i class='bx bxs-mobile'></i><br>+36 1 234 5678</p></div>
                    <div class="col"><p class="ikonok"><i class='bx bx-mail-send'></i><br><a href="mailto:info@boldogmenhely.hu">info@boldogmenhely.hu</a></p></div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="donation">
        <div class="container">
            <div class="py-2 text-center">
                <h1 class="py-2">Adományozási lehetőségek – Segíts, hogy segíthessünk!</h1>
                <hr class="w-75 mx-auto border border-dark my-4">
                <h4>Menhelyünk működését és az állatok ellátását kizárólag támogatásokból tudjuk fenntartani. Ha szeretnél hozzájárulni a mentett állatok gondozásához, az alábbi módokon támogathatsz minket</h4>
            </div>
            <div class="row text-center mx-auto">
                <div class="col">
                    <h5><i class='bx bxs-bank'></i>Banki átutalás</h5>
                    <p><b>Számlatulajdonos:</b> BoldogMenhely</p>
                    <p><b>Bankszámlaszám:</b> 1145634567129576</p>
                    <p><b>Közlemény:</b> "Adomány"</p>
                </div>
                <div class="col">
                    <h5>Online támogatás</h5>
                    <p><i class='bx bxl-paypal' ></i><b>PayPal:</b> <a href="https://www.paypal.me/BoldogMenhely">https://www.paypal.me/BoldogMenhely</a></p>
                    <p><i class='bx bxl-patreon' ></i><b>Patreon:</b> <a href="https://www.patreon.com/boldogmenhely">https://www.patreon.com/boldogmenhely</a></p>
                </div>
                <div class="col">
                    <h5><i class='bx bx-gift' ></i>Tárgyi adományok</h5>
                    <p>Szívesen fogadunk kutya- és macskaeledelt, takarókat, fekhelyeket, játékokat és egyéb hasznos eszközöket. Kérjük, hogy tárgyi adomány felajánlás esetén előzetesen egyeztess velünk!</p>
                </div>
                <h2 class="py-2">Köszönjük, hogy támogatásoddal hozzájárulsz az állatok jobb életéhez!</h2>
            </div>
        </div>
    </div>
    <hr>
    <div class="tamogatok">
        <div class="container">
            <div class="py-2 text-center">
                <h1>Támogatóink</h1>
                <hr class="w-75 mx-auto border border-dark my-4">
                <h3>Főbb támogatóink</h3>
            </div>
            <div class="row text-center mx-auto">
                <div class="col supporterek">
                    <img src="{{asset('img/supporters/paycare.png')}}" alt="pawcare">
                    <h5>PawCare Foundation</h5>
                </div>
                <div class="col supporterek">
                    <img src="{{asset('img/supporters/greenpaws.png')}}" alt="greenpaws">
                    <h5>GreenPaws Pet Supplies</h5>
                </div>
                <div class="col supporterek">
                    <img src="{{asset('img/supporters/happytails.png')}}" alt="happytails">
                    <h5>Happy Tails Vet Clinic</h5>
                </div>
                <div class="col supporterek">
                    <img src="{{asset('img/supporters/furryfriends.png')}}" alt="furryfriends">
                    <h5>Furry Friends Transport</h5>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="surgos">
        <div class="container">
            <div class="py-2 text-center">
                <h1>Sürgős esetek elérhetősége</h1>
                <hr class="w-75 mx-auto border border-white my-4">
                <h3>Ha talált vagy bajba jutott állatról szeretne bejelentést tenni, kérjük, az alábbi elérhetőségeken vegye fel velünk a kapcsolatot</h3>
            </div>
            <div class="row mx-auto text-center">
                <div class="col"><p class="sosikonok"><i class='bx bxs-mobile'></i><br>+36 2 345 6789</p></div>
                <div class="col"><p class="sosikonok"><i class='bx bx-mail-send'></i><br><a href="mailto:info@boldogmenhely.hu">surgos@boldogmenhely.hu</a></p></div>
            </div>
            <p class="py-2">Kérjük, hogy a bejelentésben adja meg az állat pontos helyét, állapotát, és ha lehetséges, mellékeljen képet is. Köszönjük, hogy segít nekünk gondoskodni a rászoruló állatokról!</p>
        </div>
    </div>
</main>

@endsection
