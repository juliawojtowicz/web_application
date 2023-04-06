-- phpMyAdmin SQL Dump
-- version 5.0.4deb2+deb11u1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Czas generowania: 05 Kwi 2023, 17:56
-- Wersja serwera: 10.5.18-MariaDB-0+deb11u1
-- Wersja PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `juliawo1`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `admini`
--

CREATE TABLE `admini` (
  `imienazwisko` varchar(100) DEFAULT NULL,
  `login` varchar(100) NOT NULL,
  `haslo` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `admini`
--

INSERT INTO `admini` (`imienazwisko`, `login`, `haslo`) VALUES
('Julia Wójtowicz', 'juliawojtowicz', 'julia122');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orders`
--

CREATE TABLE `orders` (
  `imie` varchar(100) DEFAULT NULL,
  `nazwisko` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `numer` varchar(100) DEFAULT NULL,
  `ulica` varchar(100) DEFAULT NULL,
  `numerdomu` varchar(100) DEFAULT NULL,
  `kod` varchar(100) DEFAULT NULL,
  `wojewodztwo` varchar(100) DEFAULT NULL,
  `miasto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `orders`
--

INSERT INTO `orders` (`imie`, `nazwisko`, `email`, `numer`, `ulica`, `numerdomu`, `kod`, `wojewodztwo`, `miasto`) VALUES
('Marysia', 'Malina', 'mmalina@gmail.com', '333555577', 'Wesoła', '10a', '33-400', NULL, 'Kraków'),
('ala', 'alanowicz', 'alal@op.pl', '3244344333', 'Dobra', '3', '22-888', NULL, 'Warszawa');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `imienazwisko` varchar(100) DEFAULT NULL,
  `login` varchar(100) NOT NULL,
  `haslo` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`imienazwisko`, `login`, `haslo`) VALUES
('Ala Alinowicz', 'alal', '6430532147b1a5d0f549e7f7430ae1c6eab56d6076d92521b29f2d004fe5f81cfdfa0bf44eea164a2d15a9b87d18faa8de49206ecb79ad6ea52af05dd126d5d7'),
('Marysia Malina', 'mmalina', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `admini`
--
ALTER TABLE `admini`
  ADD PRIMARY KEY (`login`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
