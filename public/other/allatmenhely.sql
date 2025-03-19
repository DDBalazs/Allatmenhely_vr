CREATE TABLE `allat` (
  `allat_id` INT PRIMARY KEY AUTO_INCREMENT,
  `nev` VARCHAR(30) NOT NULL,
  `fajta_id` INT NOT NULL,
  `chip_sorszam` VARCHAR(60) UNIQUE,
  `szuldatum` DATE NOT NULL,
  `meret_id` INT NOT NULL,
  `szin` VARCHAR(30) NOT NULL,
  `nem` BOOLEAN NOT NULL,
  `ivartalanitott` BOOLEAN NOT NULL,
  `orokbefogadhato` BOOLEAN NOT NULL,
  `megjegyzes` TEXT
);

CREATE TABLE `meret` (
  `meret_id` INT PRIMARY KEY NOT NULL,
  `kategoria` VARCHAR(30) NOT NULL
);

CREATE TABLE `oltas` (
  `chip_sorszam` VARCHAR(60),
  `oltas_tipusa` VARCHAR(30) NOT NULL,
  `datum` DATE NOT NULL
);

CREATE TABLE `foglalt` (
  `allat_id` INT NOT NULL,
  `datum` DATE NOT NULL,
  `onkentes_id` INT,
  `teljesitve` BOOLEAN
);

CREATE TABLE `onkentes` (
  `onkentes_id` INT PRIMARY KEY AUTO_INCREMENT,
  `nev` VARCHAR(30) NOT NULL,
  `email` VARCHAR(60) NOT NULL,
  `password` TEXT NOT NULL,
  `tel` VARCHAR(30)
);

CREATE TABLE `fajta` (
  `fajta_id` INT PRIMARY KEY NOT NULL,
  `faj` VARCHAR(30) NOT NULL,
  `pontos_fajta` VARCHAR(30) NOT NULL
);

CREATE TABLE `alkalmazott` (
  `alkalmazott_id` INT PRIMARY KEY,
  `nev` VARCHAR(30) NOT NULL,
  `tel` VARCHAR(12) NOT NULL,
  `email` VARCHAR(60) NOT NULL
);

CREATE TABLE `alkalmazott_user` (
  `alkalmazott_id` INT PRIMARY KEY,
  `felhasznalo` VARCHAR(30) NOT NULL,
  `password` TEXT NOT NULL,
  `beosztas` VARCHAR(12) NOT NULL
);


ALTER TABLE `allat`
ADD CONSTRAINT `fajta_allat_id_fkey` FOREIGN KEY (`fajta_id`) REFERENCES `fajta` (`fajta_id`)
ON DELETE RESTRICT ON UPDATE CASCADE;

ALTER TABLE `allat`
ADD CONSTRAINT `allat_meret_id_fkey` FOREIGN KEY (`meret_id`) REFERENCES `meret` (`meret_id`)
ON DELETE RESTRICT ON UPDATE CASCADE;

ALTER TABLE `foglalt`
ADD CONSTRAINT `allat_foglalt_id_fkey` FOREIGN KEY (`allat_id`) REFERENCES `allat` (`allat_id`)
ON DELETE RESTRICT ON UPDATE CASCADE;

ALTER TABLE `foglalt`
ADD CONSTRAINT `onkentes_foglalt_id_fkey` FOREIGN KEY (`onkentes_id`) REFERENCES `onkentes` (`onkentes_id`)
ON DELETE RESTRICT ON UPDATE CASCADE;

ALTER TABLE `alkalmazott_user`
ADD CONSTRAINT `alkalmazott_user_id_fkey` FOREIGN KEY (`alkalmazott_id`) REFERENCES `alkalmazott` (`alkalmazott_id`)
ON DELETE RESTRICT ON UPDATE CASCADE;

ALTER TABLE `oltas`
ADD CONSTRAINT `allat_oltas_id_fkey` FOREIGN KEY (`chip_sorszam`) REFERENCES `allat` (`chip_sorszam`)
ON DELETE RESTRICT ON UPDATE CASCADE;
