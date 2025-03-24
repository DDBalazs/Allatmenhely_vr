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
  `allat_id` INT NOT NULL,
  FOREIGN KEY (`allat_id`) REFERENCES `allat` (`allat_id`),
  `datum` DATE NOT NULL,
  `onkentes_id` INT,
  FOREIGN KEY (`onkentes_id`) REFERENCES `onkentes` (`onkentes_id`),
  `teljesitve` BOOLEAN
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
