CREATE TABLE `meret` (
  `meret_id` INT PRIMARY KEY NOT NULL,
  `kategoria` VARCHAR(30) NOT NULL
);

CREATE TABLE `fajta` (
  `fajta_id` INT PRIMARY KEY NOT NULL,
  `faj` VARCHAR(30) NOT NULL,
  `pontos_fajta` VARCHAR(30) NOT NULL
);

CREATE TABLE `allat` (
  `allat_id` INT PRIMARY KEY AUTO_INCREMENT,
  `nev` VARCHAR(30) NOT NULL,
  `fajta_id` INT NOT NULL,
  FOREIGN KEY (`fajta_id`) REFERENCES `fajta` (`fajta_id`),
  `chip_sorszam` VARCHAR(60) UNIQUE,
  `szuldatum` DATE NOT NULL,
  `meret_id` INT NOT NULL,
  FOREIGN KEY (`meret_id`) REFERENCES `meret` (`meret_id`),
  `szin` VARCHAR(30) NOT NULL,
  `nem` BOOLEAN NOT NULL,
  `ivartalanitott` BOOLEAN NOT NULL,
  `orokbefogadhato` BOOLEAN NOT NULL,
  `beerkezes_datuma` DATE not NULL,
  `megjegyzes` TEXT
);

CREATE TABLE `oltas` (
  `chip_sorszam` VARCHAR(60),
  FOREIGN KEY (`chip_sorszam`) REFERENCES `allat` (`chip_sorszam`),
  `oltas_tipusa` VARCHAR(30) NOT NULL,
  `datum` DATE NOT NULL
);

CREATE TABLE `onkentes` (
  `onkentes_id` INT PRIMARY KEY AUTO_INCREMENT,
  `nev` VARCHAR(30) NOT NULL,
  `email` VARCHAR(60) NOT NULL,
  `password` TEXT NOT NULL,
  `tel` VARCHAR(30)
);

CREATE TABLE `foglalt` (
  `foglalt_id` INT PRIMARY KEY AUTO_INCREMENT,
  `allat_id` INT NOT NULL,
  FOREIGN KEY (`allat_id`) REFERENCES `allat` (`allat_id`),
  `datum` DATE NOT NULL,
  `onkentes_id` INT,
  FOREIGN KEY (`onkentes_id`) REFERENCES `onkentes` (`onkentes_id`),
  `elfogadas` char(1) NOT NULL,
  `teljesitve` BOOLEAN NOT NULL
);

CREATE TABLE `alkalmazott` (
  `alkalmazott_id` INT PRIMARY KEY,
  `nev` VARCHAR(30) NOT NULL,
  `tel` VARCHAR(12) NOT NULL,
  `email` VARCHAR(60) NOT NULL
);

CREATE TABLE `alkalmazott_user` (
  `alkalmazott_id` INT PRIMARY KEY,
  FOREIGN KEY (`alkalmazott_id`) REFERENCES `alkalmazott` (`alkalmazott_id`),
  `felhasznalo` VARCHAR(30) NOT NULL,
  `password` TEXT NOT NULL,
  `beosztas` VARCHAR(12) NOT NULL
);

insert into meret(meret_id, kategoria)
values
(1, 'mini pl.: csivava'),
(2, 'kistestű pl.: francia bulldog'),
(3, 'közepestestű pl.: beagle'),
(4, 'nagytestű pl.: labrador'),
(5, 'Óriás kutyák pl.: masztiffok'),
(6, 'törpe macskák'),
(7, 'átlagos házimacska'),
(8, 'nagy házimacska pl. :Main coon');

insert into fajta(fajta_id, faj, pontos_fajta)
values
(1, 'kutya', 'keverék'),
(2, 'kutya', 'németjuhász jellegű'),
(3, 'kutya','pitbull jellegű'),
(4, 'kutya', 'labrador jellegű'),
(5, 'macska', 'hosszúszőrű házimacska'),
(6, 'macska', 'rövidszőrű házimacska'),
(7, 'macska', 'foltos házimacska');


insert into allat(allat_id, fajta_id, nev, chip_sorszam, szuldatum, meret_id, szin, nem, ivartalanitott, orokbefogadhato, beerkezes_datuma ,megjegyzes)
values
(1, 1, 'Morgó', '123456789hh', '2023-02-14', 4, 'fekete', 1, 1, 1, '2024-03-31' ,'Eskü nem harap'),
(2, 2, 'Blöki', '987654321pe', '2019-04-18', 2, 'zsemle', 0, 1, 1, '2020-09-28' ,'Mentett kutyus'),
(3, 3, 'Pamacs', NULL, '2017-01-01', 6, 'cirmos', 0, 1, 0, '2020-02-06' ,"Mentett kutyus"),
(4, 4, 'Füge', NULL, '2019-01-01', 6, 'szurke', 0, 1, 0, '2022-02-06' ,"Játékos"),
(5, 5, 'Cirmi', NULL, '2020-01-01', 6, 'cirmos', 0, 1, 0, '2023-02-06' ,"Mentett cica"),
(6, 6, 'Kalóz', NULL, '2018-01-01', 6, 'fekete', 0, 1, 0, '2020-02-06' ,"Félszemű"),
(7, 7, 'Alfréd', '547693857hg', '2024-04-20', 7, 'foltos', 1, 0, 1, '2024-04-20', 'Itt született nálunk a mi kis Alfrédunk, nagyon kedves jó szívű macska. Jól kijön mint állattal mint emberekkel.');


insert into oltas(chip_sorszam, oltas_tipusa, datum)
values
('123456789hh', 'Veszettség', '2024-12-13'),
('123456789hh', 'Parvo', '2024-12-28'),
('987654321pe', 'Veszettség', '2024-12-13'),
('547693857hg', 'Veszettség', '2024-07-20');
