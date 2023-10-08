-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
-- Počítač: Top.secret.cz
-- Verze serveru: 10.3.32-MariaDB-log
-- Verze PHP: 5.4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `db_name`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `objednavka`
--

CREATE TABLE IF NOT EXISTS `objednavka` (
  `id_objednavka` int(11) NOT NULL AUTO_INCREMENT,
  `jmeno` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_czech_ci NOT NULL,
  `ulice` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_czech_ci NOT NULL,
  `mesto` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_czech_ci NOT NULL,
  `PSC` int(11) NOT NULL,
  `id_produkt` int(11) NOT NULL,
  PRIMARY KEY (`id_objednavka`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabulky `produkt`
--

CREATE TABLE IF NOT EXISTS `produkt` (
  `id_produkt` int(11) NOT NULL AUTO_INCREMENT,
  `nazev` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `popis` varchar(1000) COLLATE utf8_czech_ci NOT NULL,
  `cena` decimal(15,0) NOT NULL,
  PRIMARY KEY (`id_produkt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabulky `uzivatele`
--

CREATE TABLE IF NOT EXISTS `uzivatele` (
  `id_uzivatele` int(11) NOT NULL AUTO_INCREMENT,
  `jmeno` varchar(150) COLLATE utf8_czech_ci NOT NULL,
  `prijmeni` varchar(150) COLLATE utf8_czech_ci NOT NULL,
  `login` varchar(80) COLLATE utf8_czech_ci NOT NULL,
  `heslo` varchar(80) COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id_uzivatele`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
