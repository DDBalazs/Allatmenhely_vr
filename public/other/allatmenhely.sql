-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2025. Ápr 07. 11:41
-- Kiszolgáló verziója: 10.4.27-MariaDB
-- PHP verzió: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `db_allatmenhely`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `alkalmazott`
--

CREATE TABLE `alkalmazott` (
  `alkalmazott_id` int(11) NOT NULL,
  `nev` varchar(30) NOT NULL,
  `tel` varchar(12) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `alkalmazott_user`
--

CREATE TABLE `alkalmazott_user` (
  `alkalmazott_id` int(11) NOT NULL,
  `felhasznalo` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `beosztas` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `allat`
--

CREATE TABLE `allat` (
  `allat_id` int(11) NOT NULL,
  `nev` varchar(30) NOT NULL,
  `fajta_id` int(11) NOT NULL,
  `chip_sorszam` varchar(60) DEFAULT NULL,
  `szuldatum` date NOT NULL,
  `meret_id` int(11) NOT NULL,
  `szin` varchar(30) NOT NULL,
  `nem` tinyint(1) NOT NULL,
  `ivartalanitott` tinyint(1) NOT NULL,
  `orokbefogadhato` tinyint(1) NOT NULL,
  `beerkezes_datuma` date NOT NULL,
  `megjegyzes` text DEFAULT NULL,
  `aktiv` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `allat`
--

INSERT INTO `allat` (`allat_id`, `nev`, `fajta_id`, `chip_sorszam`, `szuldatum`, `meret_id`, `szin`, `nem`, `ivartalanitott`, `orokbefogadhato`, `beerkezes_datuma`, `megjegyzes`,`aktiv`) VALUES
(1, 'Morgó', 1, '123456789hh', '2023-02-14', 2, 'fekete', 1, 1, 1, '2024-03-31', 'Morgó egy igazi kis karakter, aki színes személyiségével hamar felkelti mindenki figyelmét. Bár első ránézésre úgy tűnhet, hogy ő a tipikus \"morcos\" kutya, valójában egy igazán kedves és hűséges társ. Morgó szeret mindenkit figyelemmel kísérni, de inkább a csendesebb pillanatokra vágyik, mintsem hogy folyamatosan a figyelem középpontjában legyen.\r\n\r\nMorgó kistestű, de tele van energiával, és bár nem a legnagyobb pórázhúzó, mégis szeret felfedezni. Séták során érdeklődő, de sosem túl tolakodó. Ha egyszer megszokja a gazdáját, igazán ragaszkodó és szeretetteljes kutya lesz, aki mindig ott van melletted, ha szükséged van egy kis társaságra. Bár eleinte kicsit tartózkodó lehet az idegenekkel, de ha egyszer megbízik benned, akkor a legjobb barátod lesz.\r\n\r\nIdeális gazda:\r\nMorgó olyan gazdát keres, aki képes megérteni és tiszteletben tartani a határait, miközben szeretettel és türelemmel foglalkozik vele. Kisebb lakásba vagy olyan környezetbe ajánlott, ahol nyugodt körülmények között érezheti jól magát, és gazdája biztosítani tudja számára a szükséges figyelmet és mozgást. Olyan gazdák számára ideális, akik ismerik a kutyák személyiségét és képesek alkalmazkodni a kisebb szociális távolságokkal rendelkező kutyák igényeihez.\r\n\r\nEgyéb információk:\r\nMorgó igazi kis különc, aki lassan nyílik meg, de ha egyszer megszeret, akkor a legjobb társ lesz. Részletes szocializációra van szüksége más kutyákkal, de a megfelelő tréninggel és türelemmel könnyen alkalmazkodik. Bár nem egy túlságosan aktív kutya, azért egy-két rövid séta és a gazdi közelében töltött idő tökéletesen boldoggá teszi.','1'),
(2, 'Blöki', 2, '987654321pe', '2019-04-18', 4, 'ordas', 0, 1, 1, '2020-09-28', 'Blöki egy igazi hős kutya, aki nehéz múltja ellenére rendkívül szeretetteljes és hűséges társ. A németjuhászok intelligenciájával és lelkesedésével megáldott kutya, aki a gazdája számára mindent megtenne. Kicsit tartózkodó lehet az idegenekkel, de amint megszokja az új környezetét, észre fogjuk venni, hogy igazán ragaszkodó és játékos kutyává válik.\r\n\r\nBlöki nagy energiaigényű kutya, aki szívesen futkározik a szabadban, ezért ideális számára egy aktív gazda, aki sok időt tud neki szentelni. Séták, futások és szellemi kihívások teszik boldoggá. Szívesen tanul új trükköket és parancsokat, ezért egy tapasztalt kutyás gazda, aki szeretne közös munkát végezni kutyájával, tökéletes választás számára.\r\n\r\nBlöki jó családi kutya is lehet, azonban fontos, hogy az új gazda tisztában legyen a németjuhász fajtára jellemző igényekkel: a kutya szocializációja és megfelelő tréningje elengedhetetlen a boldog és kiegyensúlyozott élethez.\r\n\r\nIdeális gazda:\r\nBlöki olyan gazdát keres, aki szívesen foglalkozik egy aktív, okos kutyával, és aki biztosítani tudja számára a szükséges mozgást és mentális stimulációt. Olyan személyek számára ideális, akik kellő türelemmel rendelkeznek, és szívesen dolgoznak kutyájukkal, hogy még inkább összeszokjanak. Kerttel rendelkező családoknak különösen ajánlott, mivel Blöki imád a szabadban lenni.\r\n\r\nEgyéb információk:\r\nBlöki erőteljes, de nem agresszív kutya. Kisebb szocializációs kihívásokkal szembesülhet más kutyákkal, de megfelelő tréninggel könnyen alkalmazkodik. Egyértelmű határok és következetes nevelés szükséges ahhoz, hogy a legjobb formáját hozza. Blöki erősen kötődik gazdájához, és mindent megtesz a közös élmények és a gazdi szeretetéért.','1'),
(3, 'Pamacs', 3, NULL, '2017-01-01', 3, 'barna', 0, 1, 0, '2020-02-06', 'Pamacs egy igazi túlélő. Nehéz múlttal érkezett hozzánk, de minden nap bizonyítja, hogy a szeretet meggyógyít. Közepes-nagy testű, erőteljes felépítésű, de valójában egy nagyra nőtt kölyök a lelke mélyén. Kedves, hűséges és nagyon ragaszkodó azokhoz, akiket megszeret – ha megnyílik valakinek, örökre a társa lesz.\r\n\r\nSzereti a sétákat, az apportozást és főleg az ember közelségét. Olyan gazdira vágyik, aki határozott, de szeretetteljes, és tud neki biztonságot, napi rutint és türelmet adni. Más kutyákkal szelektív, ezért inkább egyedüli kutyának ajánljuk, vagy jól kontrollált, tapasztalt kutyás közegbe.\r\n\r\nTökéletes társ lehet annak, aki nem fél egy kis kihívástól, és cserébe egy életre szóló, feltétel nélküli barátságot keres.\r\nPamacs már készen áll – csak egy esélyt kér.\r\nJelenleg ideiglenes örökbefogadónál tengeti mindennapjait, de várja az álomgazdit!','1'),
(4, 'Füge', 4, NULL, '2019-01-01', 3, 'Csokibarna', 0, 1, 0, '2022-02-06', 'Füge az a kutya, aki már az első pillantásoddal belopja magát a szívedbe. Vidám, kedves, lelkes – tipikus labrador szív, mindig készen áll egy új kalandra vagy egy nagy ölelésre. Közepes-nagy termetű, fényezett csokiszín bundájával és nagy, ragyogó szemével igazi figyelemfelkeltő jelenség.\r\n\r\nImád sétálni, pancsolni, labdázni, de legfőképp: emberek között lenni. Ragaszkodó, tanulékony és jól motiválható, így ideális választás akár aktívabb családba, akár első kutyás gazdinak is. Más kutyákkal általában jól kijön, de a bemutatást mindig fokozatosan érdemes intézni.\r\n\r\nFüge minden nap örömmel, farokcsóválva fogadja a menhelyi gondozókat – csak egy saját ember hiányzik az életéből. Lehet, hogy pont te vagy az?','1'),
(5, 'Cirmi', 5, '432576215HR', '2020-01-01', 2, 'cirmos', 0, 1, 0, '2023-02-06', 'Cirmos egy igazi úriember – kecses mozgásával, dús, selymes bundájával és nagy, kíváncsi szemeivel pillanatok alatt levesz mindenkit a lábáról. Nyugodt, kiegyensúlyozott cicus, aki szereti a finom falatokat, a kényelmes fekhelyet és persze a simogatásokat (csak ne túl tolakodóan – a méltóság fontos!).\r\n\r\nEmberekkel kedves, dorombolós, de először óvatosan közeledik. Ha megérzi a türelmes szeretetet, hamar bújós, hűséges társ lesz belőle. Más macskákkal kijön, de nem tolakodó – inkább a békés együttélés híve.\r\n\r\nCirmos olyan otthonra vágyik, ahol értékelik a csendes pillanatokat, és van idő egy kis közös szundikálásra egy napos ablakpárkányon.\r\n\r\nBundáját rendszeres fésülés mellett csodás állapotban lehet tartani.\r\n\r\nLakáscicának adjuk örökbe, biztonságos környezetbe.','1'),
(6, 'Kalóz', 6, NULL, '2018-01-01', 2, 'fekete', 0, 1, 0, '2020-02-06', 'Nem kell két szem ahhoz, hogy valaki igazán lásson. Kalóz, ez a különleges kis túlélő, félszemmel is tökéletesen eligazodik a világban – sőt, többet lát a szeretetből, mint sokan két szemmel.\r\n\r\nKalóz igazi egyéniség: bátor, kedves, dorombolós, de ha kell, tud nagyon vagány is lenni. A múltban komoly megpróbáltatásai voltak – elvesztette az egyik szemét –, de ő ebből csak erősebb lett. Most már csak egy dolog hiányzik az életéből: egy végleges, szerető otthon.\r\n\r\nImád simogatást kapni, szeret lustálkodni és az ablakon át nézelődni. Más cicákkal jól kijön, de ha egyedül lehet a figyelem középpontjában, azt sem bánja. Kalóz nem különleges bánásmódot kér – csak esélyt arra, hogy valaki ne a külseje, hanem a lelke alapján szeressen bele.\r\nFélszemű, de teljes szívű!','1'),
(7, 'Alfréd', 7, '547693857hg', '2024-04-20', 2, 'foltos', 1, 0, 1, '2024-04-20', 'Alfréd nem csak egy cica – ő egy személyiség. Fekete-fehér mintázata olyan, mintha szmokingot viselne, és pont olyan stílusosan is viselkedik: mindig udvarias, mindig kíváncsi, és sosem jön el túl korán a vacsorára (de késni sem szokott!).\r\n\r\nSzereti, ha figyelnek rá, de nem tolakodó. Egy igazi társ, aki ott ül melletted, amikor dolgozol, és odabújik, ha épp kedved van simogatni. Játékos, de nem zabolátlan, kedves, de nem nyomulós – pont olyan, amilyennek egy ideális szobacica lenni szeretne.\r\n\r\nAlfréd jól kijön más cicákkal is, de leginkább az embertársaságot kedveli. Ha van egy kis ablakpárkány, egy puha pléd és egy simogató kéz, ő már boldog is.','1'),
(9, 'Boo', 6, '23435456654', '2025-01-22', 3, 'fekete', 0, 0, 1, '2025-04-07', 'Boo egy igazi \"kanapé királynő\", aki mindenkinek megmutatja, hogyan kell élvezni az életet a legnagyobb kényelmesen. Lusta, pihentető típus, aki szeret napközben hosszú órákat pihenni, vagy egy kényelmes helyen lustálkodni, de ne hagyjuk, hogy ez megtévesszen minket! Ha egy kis figyelmet kap, Boo biztosan megmutatja, hogy egy igazán kedves, szeretetteljes társaság.\r\n\r\nBár nem egy szuperaktív cica, Boo a legjobb barátja lesz annak, aki szereti a nyugodt, pihenős életmódot. Imádja, ha simogatják, és egy-egy kis fülvakargatásért képes hosszú órákig pihenni a gazdi ölében. Ha úgy érzed, hogy egy csendes, szeretetteljes macskára van szükséged, aki nem igényel túl sok figyelmet, Boo lesz a tökéletes választás!\r\n\r\nIdeális gazda:\r\nBoo számára ideális gazda az, aki szeretne egy csendes, pihentető társaságot, akinek nem szükséges mindennap aktív játékra, és aki örömmel biztosít neki egy nyugodt, kényelmes otthont. Egyedülállók vagy olyan családok számára lehet tökéletes választás, akik nem keresnek túlságosan játékos, energikus cicát.','1'),
(10, 'Bolyhos', 1, '623646526KK', '2016-07-21', 4, 'fekete', 1, 1, 0, '2025-01-24', 'Bolyhos egy hatalmas, de rendkívül kedves és barátságos kutya, aki imádja a figyelmet és az emberi társaságot. Bár első ránézésre kicsit ijesztőnek tűnhet mérete miatt, valójában egy igazi szelíd óriás, aki szeret a gazdájával játszani, és minden percet élvezni, amit az emberek társaságában tölthet.\r\n\r\nBolyhos energikus kutya, aki imád a szabadban futkosni, és szüksége van egy aktív gazdára, aki segít levezetni a felesleges energiáit. Könnyen tanul, jól motiválható, és szeret új trükköket elsajátítani, ezért ideális választás lehet olyan gazdik számára, akik szívesen foglalkoznak kutyáikkal és szeretnének közös programokat.\r\n\r\nBár nem agresszív, Bolyhosnak még szüksége van szocializálásra, hogy biztosan barátságos legyen más kutyákkal is. A menhelyi gondozók szerint ő egy rendkívül hűséges kutya, aki csak arra vár, hogy szerető otthonra leljen.\r\n\r\nIdeális gazda:\r\nBolyhos számára ideális gazda olyan személy lehet, aki rendelkezik elegendő türelemmel és idővel a nevelésére, valamint szeretne egy aktív kutyát, akivel együtt fedezhetik fel a világot. Kerttel rendelkező gazdik számára különösen megfelelő, mivel szeret kinti mozgásban lenni.','1'),
(11, 'Lufi', 4, '527395264LL', '2022-09-27', 3, 'zsemle', 0, 1, 1, '2025-02-13', 'Lufi egy igazi kis boldogsággombóc! Közepes termetű, pihe-puha bundájú kutyus, aki mindenkit mosolyogva üdvözöl. Emberszerető, bújós természetű, és nagyon okos – már most is tud pár vezényszót, és szívesen tanul új dolgokat. Más kutyákkal jól kijön, cicákkal is barátságos. Ideális választás első kutyás gazdiknak is.','1'),
(12, 'Kópé', 3, NULL, '2025-04-08', 3, 'barna foltos', 1, 1, 0, '2025-02-13', 'Kópé nem véletlenül kapta a nevét – állandóan pörög, ugrál, és mindig valami huncutságon töri a fejét! Aktív, játékos természetű kutyus, aki szeret szaladgálni, labdázni, és minden új élményért lelkesedik. Olyan gazdit keres, aki bírja a tempóját, és szívesen járna vele hosszabb sétákra, kirándulni. Gyerekekkel is jól kijön!','1'),
(13, 'Maci', 1, '423792739AE', '2019-11-09', 5, 'fekete foltos', 1, 1, 0, '2025-02-13', 'Maci egy komoly, de szelíd óriás, aki hűségesen őrzi azokat, akiket megszeret. Korábban házőrzőként élt, de a menhelyen megtapasztalta, milyen jó is a simogatás és a törődés. Kissé visszafogott, de ha egyszer megnyílik, örök barát lesz belőle. Tapasztalt kutyás gazdának ajánljuk, aki értékeli egy érett, nyugodt kutya társaságát.','1'),
(14, 'Bodza', 1, '523479186NM', '2023-04-15', 2, 'fehér', 0, 1, 1, '2025-04-08', 'Bodza egy tündéri, kicsit szeleburdi kislány, aki szeret a figyelem középpontjában lenni. Bundáját rendszeresen ápolni kell, de ő ezt türelemmel viseli, főleg ha utána kap egy kis jutifalit. Lakásba ideális, szobatiszta, pórázon ügyesen sétál. Inkább felnőtt gazdi mellé ajánljuk, mert a túl sok zaj megijesztheti.','1'),
(15, 'Huba', 2, '153658423HJ', '2015-12-12', 4, 'zsemle', 1, 1, 1, '2023-08-08', 'Huba már sokat látott az életben, de még mindig vágyik egy szerető otthonra. Nyugodt, kiegyensúlyozott, szépen sétál pórázon, és imád a napon heverészni. Kiváló társ idős gazdik mellé, vagy olyan családba, ahol értékelik a nyugalmat és a hűséget. Más kutyákkal barátságos, nem túl aktív, de a simogatásokat sosem unja meg.','1'),
(16, 'Menta', 5, '523467352AA', '2024-03-14', 2, 'fekete', 0, 1, 1, '2024-03-14', 'Menta egy gyönyörű, éjfekete bundájú fiatal cicahölgy, aki elsőre félénk, de ha egyszer bizalmat szavaz neked, többé nem mozdul mellőled. Finoman követ a lakásban, mint egy csendes kis árnyék, és dorombol, ha leülsz mellé.\r\nTürelmes, nyugodt gazdit keres, aki értékeli a csendes ragaszkodást.','1'),
(17, 'Bandi', 5, '263435233AA', '2019-03-26', 3, 'cirmos', 1, 1, 1, '2024-04-20', 'Bandi méltóságteljes, nagytestű kandúr, aki pontosan tudja, hogy ő az udvar igazi ura – még ha most épp menhelyen is él. Szelíd, jóindulatú és igényli az ember társaságát. Imád pihengetni, de egy kis játékra is mindig kapható.\r\nTapasztalt, cicához értő gazdinál lenne igazán boldog, akár kertes házban is.','1'),
(18, 'Lencse', 7, NULL, '2025-01-24', 2, 'trikolor', 0, 0, 0, '2025-02-13', 'Lencse egy játékos, kíváncsi, energiával teli kiscica, aki még csak most fedezi fel a világot. Minden újdonság izgalmas számára, és örömmel fedez fel új játékokat, zugokat és ölöket.\r\nOlyan otthont keres, ahol figyelnek rá, és ahová igazi családtagként illeszkedhet be.','1'),
(19, 'Szotyi', 7, '514364534KA', '2022-01-08', 2, 'fehér-cirmos', 1, 1, 1, '2022-12-17', 'Szotyi egy valódi társasági lélek. Mindig van egy nyávogása, egy odabújása vagy egy „mondanivalója”. Igényli az ember közelségét, és szeret aktívan részt venni a mindennapokban – akár a reggeli kávéfőzésnél is.\r\nLakásba ajánlott, ahol van idő és tér a beszélgetésre – és persze simogatásra.','1'),
(20, 'Panna', 7, '453475416IU', '2017-03-08', 2, 'teknőctarka', 0, 1, 1, '2019-04-07', 'Panna egy idősebb, tapasztalt cicalány, aki már túl van a rohangálós korszakon. Szereti a nyugodt, csendes környezetet, és örömmel pihen az ablakban vagy egy meleg pokrócon. Kedves, szelíd, de nem tolakodó.\r\nTökéletes társ egy nyugodt háztartásba, idősebb gazdi mellé is ideális.','1');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `fajta`
--

CREATE TABLE `fajta` (
  `fajta_id` int(11) NOT NULL,
  `faj` varchar(30) NOT NULL,
  `pontos_fajta` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `fajta`
--

INSERT INTO `fajta` (`fajta_id`, `faj`, `pontos_fajta`) VALUES
(1, 'kutya', 'keverék'),
(2, 'kutya', 'németjuhász jellegű'),
(3, 'kutya', 'pitbull jellegű'),
(4, 'kutya', 'labrador jellegű'),
(5, 'macska', 'hosszúszőrű házimacska'),
(6, 'macska', 'rövidszőrű házimacska'),
(7, 'macska', 'foltos házimacska'),
(8, 'kutya', 'ismeretlen'),
(9, 'macska', 'ismeretlen');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `foglalt`
--

CREATE TABLE `foglalt` (
  `foglalt_id` INT PRIMARY KEY AUTO_INCREMENT,
  `allat_id` int(11) NOT NULL,
  `datum` date NOT NULL,
  `onkentes_id` int(11) DEFAULT NULL,
  `elfogadas` char(1) NOT NULL,
  `teljesitve` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `meret`
--

CREATE TABLE `meret` (
  `meret_id` int(11) NOT NULL,
  `kategoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `meret`
--

INSERT INTO `meret` (`meret_id`, `kategoria`) VALUES
(1, 'XS'),
(2, 'S'),
(3, 'M'),
(4, 'L'),
(5, 'XL');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `oltas`
--

CREATE TABLE `oltas` (
  `chip_sorszam` varchar(60) DEFAULT NULL,
  `oltas_tipusa` varchar(30) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `oltas`
--

INSERT INTO `oltas` (`chip_sorszam`, `oltas_tipusa`, `datum`) VALUES
('123456789hh', 'Veszettség', '2024-12-13'),
('123456789hh', 'Parvo', '2024-12-28'),
('987654321pe', 'Veszettség', '2024-12-13'),
('547693857hg', 'Veszettség', '2024-07-20'),
('23435456654', '', '2025-04-07');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `onkentes`
--

CREATE TABLE `onkentes` (
  `onkentes_id` int(11) NOT NULL,
  `nev` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` text NOT NULL,
  `tel` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `alkalmazott`
--
ALTER TABLE `alkalmazott`
  ADD PRIMARY KEY (`alkalmazott_id`);

--
-- A tábla indexei `alkalmazott_user`
--
ALTER TABLE `alkalmazott_user`
  ADD PRIMARY KEY (`alkalmazott_id`);

--
-- A tábla indexei `allat`
--
ALTER TABLE `allat`
  ADD PRIMARY KEY (`allat_id`),
  ADD UNIQUE KEY `chip_sorszam` (`chip_sorszam`),
  ADD KEY `fajta_id` (`fajta_id`),
  ADD KEY `meret_id` (`meret_id`);

--
-- A tábla indexei `fajta`
--
ALTER TABLE `fajta`
  ADD PRIMARY KEY (`fajta_id`);

--
-- A tábla indexei `foglalt`
--
ALTER TABLE `foglalt`
  ADD KEY `allat_id` (`allat_id`),
  ADD KEY `onkentes_id` (`onkentes_id`);

--
-- A tábla indexei `meret`
--
ALTER TABLE `meret`
  ADD PRIMARY KEY (`meret_id`);

--
-- A tábla indexei `oltas`
--
ALTER TABLE `oltas`
  ADD KEY `chip_sorszam` (`chip_sorszam`);

--
-- A tábla indexei `onkentes`
--
ALTER TABLE `onkentes`
  ADD PRIMARY KEY (`onkentes_id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `allat`
--
ALTER TABLE `allat`
  MODIFY `allat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT a táblához `onkentes`
--
ALTER TABLE `onkentes`
  MODIFY `onkentes_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `alkalmazott_user`
--
ALTER TABLE `alkalmazott_user`
  ADD CONSTRAINT `alkalmazott_user_ibfk_1` FOREIGN KEY (`alkalmazott_id`) REFERENCES `alkalmazott` (`alkalmazott_id`);

--
-- Megkötések a táblához `allat`
--
ALTER TABLE `allat`
  ADD CONSTRAINT `allat_ibfk_1` FOREIGN KEY (`fajta_id`) REFERENCES `fajta` (`fajta_id`),
  ADD CONSTRAINT `allat_ibfk_2` FOREIGN KEY (`meret_id`) REFERENCES `meret` (`meret_id`);

--
-- Megkötések a táblához `foglalt`
--
ALTER TABLE `foglalt`
  ADD CONSTRAINT `foglalt_ibfk_1` FOREIGN KEY (`allat_id`) REFERENCES `allat` (`allat_id`),
  ADD CONSTRAINT `foglalt_ibfk_2` FOREIGN KEY (`onkentes_id`) REFERENCES `onkentes` (`onkentes_id`);

--
-- Megkötések a táblához `oltas`
--
ALTER TABLE `oltas`
  ADD CONSTRAINT `oltas_ibfk_1` FOREIGN KEY (`chip_sorszam`) REFERENCES `allat` (`chip_sorszam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
