-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Gostitelj: localhost
-- Čas nastanka: 30. mar 2016 ob 22.46
-- Različica strežnika: 5.5.47-0ubuntu0.14.04.1
-- Različica PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Zbirka podatkov: `preskok`
--

-- --------------------------------------------------------

--
-- Struktura tabele `prodajalci`
--

CREATE TABLE IF NOT EXISTS `prodajalci` (
  `ID_zaposlenega` varchar(6) COLLATE utf8_slovenian_ci NOT NULL DEFAULT '',
  `ime` varchar(20) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `priimek` varchar(20) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `registriran` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_zaposlenega`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Odloži podatke za tabelo `prodajalci`
--

INSERT INTO `prodajalci` (`ID_zaposlenega`, `ime`, `priimek`, `registriran`) VALUES
('BojKeg', 'Bojan', 'Kegl', '2016-03-28 18:13:23'),
('DavAst', 'David', 'Aster', '2016-03-28 18:13:23'),
('DomVel', 'Domen', 'Veliki', '2016-03-28 18:14:24'),
('GajTer', 'Gaja', 'Ternovska', '2016-03-29 11:41:24'),
('IneKeg', 'Ines', 'Kegl', '2016-03-28 18:15:26'),
('ManFer', 'Manuela', 'Hribar', '2016-03-28 18:14:24'),
('MarHro', 'Marjetka', 'Hrovat', '2016-03-28 18:15:26');

-- --------------------------------------------------------

--
-- Struktura tabele `racun`
--

CREATE TABLE IF NOT EXISTS `racun` (
  `ID_racuna` int(6) NOT NULL,
  `ID_zaposlenega` varchar(6) COLLATE utf8_slovenian_ci NOT NULL,
  `ID_artikla` varchar(40) COLLATE utf8_slovenian_ci NOT NULL,
  `mesec` varchar(15) COLLATE utf8_slovenian_ci NOT NULL,
  `kolicina` int(5) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=33 ;

--
-- Odloži podatke za tabelo `racun`
--

INSERT INTO `racun` (`ID_racuna`, `ID_zaposlenega`, `ID_artikla`, `mesec`, `kolicina`, `ID`) VALUES
(101, 'DomVel', 'korito', 'november', 15, 22),
(16515, 'DavAst', 'grablje', 'december', 15, 23),
(1515, 'DomVel', 'kosilnica', 'november', 3, 24),
(102, 'BojKeg', 'kad', 'maj', 1, 28),
(101, 'GajTer', 'skarje', 'maj', 6, 29),
(145, 'MarHro', 'vrtniPribor', 'marec', 4, 30),
(14, 'IneKeg', 'sod', 'januar', 14, 31),
(52, 'ManFer', 'traktor', 'april', 1, 32);

--
-- Sprožilci `racun`
--
DROP TRIGGER IF EXISTS `zaloga`;
DELIMITER //
CREATE TRIGGER `zaloga` AFTER INSERT ON `racun`
 FOR EACH ROW UPDATE skladisce set zaloga_artikla = (zaloga_artikla - NEW.kolicina) where ID_artikla=(select ID_artikla from racun where ID_artikla=new.ID_artikla)
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktura tabele `skladisce`
--

CREATE TABLE IF NOT EXISTS `skladisce` (
  `ID_artikla` varchar(40) COLLATE utf8_slovenian_ci NOT NULL,
  `naziv_artikla` varchar(40) COLLATE utf8_slovenian_ci NOT NULL,
  `cena_artikla` int(11) NOT NULL DEFAULT '0',
  `zaloga_artikla` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID_artikla`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Odloži podatke za tabelo `skladisce`
--

INSERT INTO `skladisce` (`ID_artikla`, `naziv_artikla`, `cena_artikla`, `zaloga_artikla`) VALUES
('grablje', 'Grablje', 30, 220),
('kad', 'Vinogradniška kad', 160, 90),
('korito', 'Korito', 15, 32),
('kosilnica', 'Kosilnica Kercher', 550, 62),
('lopata', 'Lopata', 25, 174),
('pihalnik', 'Pihalnik za listje', 250, 110),
('skarje', 'Vrtne škarje', 40, 41),
('sod', 'Sod grozdni', 300, 86),
('traktor', 'Traktor', 1300, 94),
('vrtniPribor', 'Vrtni Pribor', 40, 76);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
