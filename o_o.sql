-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Kwi 2023, 22:23
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `o_o`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty`
--

CREATE TABLE `produkty` (
  `ID` int(255) NOT NULL,
  `Kogo_produkt` int(255) NOT NULL,
  `Opis` longtext NOT NULL,
  `Tytul` varchar(255) NOT NULL,
  `Data_dodania` date NOT NULL,
  `Zdjecie` varchar(255) NOT NULL,
  `Cena` double NOT NULL,
  `Tagi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `produkty`
--

INSERT INTO `produkty` (`ID`, `Kogo_produkt`, `Opis`, `Tytul`, `Data_dodania`, `Zdjecie`, `Cena`, `Tagi`) VALUES
(32, 27, 'super jest', 'ewe', '2023-04-08', '.png', 32, 'Le , de , aa\r\n'),
(33, 27, 'qqq', 'qqq', '2023-04-08', '32.jfif', 22, 'qq , nowe , fajne'),
(34, 27, 'qqq', 'qqq', '2023-04-08', '33.jpg', 22, 'www'),
(35, 27, 'www', 'www', '2023-04-08', '34.gif', 22, 'www'),
(36, 27, 'www', 'qqq', '2023-04-08', '35.png', 22, 'wqq'),
(37, 27, '222', '222', '2023-04-08', '36.png', 222, '222'),
(38, 27, '222', '222', '2023-04-08', '37.gif', 222, '222'),
(39, 27, '222', '222', '2023-04-08', '38.gif', 222, '222'),
(40, 27, '222', '222', '2023-04-08', '39.jpg', 222, '222');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sesje`
--

CREATE TABLE `sesje` (
  `Id` int(255) NOT NULL,
  `Kto` int(255) NOT NULL,
  `Kiedy` datetime(6) NOT NULL,
  `Do_kiedy` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `sesje`
--

INSERT INTO `sesje` (`Id`, `Kto`, `Kiedy`, `Do_kiedy`) VALUES
(51, 27, '2023-04-06 15:59:57.000000', '2023-04-06 16:59:57.000000'),
(52, 27, '2023-04-06 16:36:51.000000', '2023-04-06 17:36:51.000000'),
(53, 27, '2023-04-06 16:45:28.000000', '2023-04-06 17:45:28.000000'),
(54, 28, '2023-04-06 16:47:54.000000', '2023-04-06 17:47:54.000000'),
(55, 27, '2023-04-06 16:48:03.000000', '2023-04-06 17:48:03.000000'),
(56, 27, '2023-04-06 16:53:43.000000', '2023-04-06 17:53:43.000000'),
(57, 27, '2023-04-06 16:55:39.000000', '2023-04-06 17:55:39.000000'),
(58, 27, '2023-04-06 18:05:58.000000', '2023-04-06 19:05:58.000000'),
(59, 27, '2023-04-06 18:07:44.000000', '2023-04-06 19:07:44.000000'),
(60, 27, '2023-04-06 18:08:02.000000', '2023-04-06 19:08:02.000000'),
(61, 27, '2023-04-06 18:33:44.000000', '2023-04-06 19:33:44.000000'),
(62, 27, '2023-04-06 18:49:17.000000', '2023-04-06 19:49:17.000000'),
(63, 27, '2023-04-06 21:10:21.000000', '2023-04-06 22:10:21.000000'),
(64, 28, '2023-04-06 21:15:51.000000', '2023-04-06 22:15:51.000000'),
(65, 27, '2023-04-06 21:33:45.000000', '2023-04-06 22:33:45.000000'),
(66, 28, '2023-04-06 21:46:01.000000', '2023-04-06 22:46:01.000000'),
(67, 27, '2023-04-07 12:59:39.000000', '2023-04-07 13:59:39.000000'),
(68, 27, '2023-04-07 13:15:38.000000', '2023-04-07 14:15:38.000000'),
(69, 27, '2023-04-07 14:16:19.000000', '2023-04-07 15:16:19.000000'),
(70, 27, '2023-04-07 16:07:01.000000', '2023-04-07 17:07:01.000000'),
(71, 28, '2023-04-07 16:19:19.000000', '2023-04-07 17:19:19.000000'),
(72, 27, '2023-04-08 01:09:30.000000', '2023-04-08 02:09:30.000000'),
(73, 27, '2023-04-08 13:22:58.000000', '2023-04-08 14:22:58.000000'),
(74, 27, '2023-04-08 23:39:29.000000', '2023-04-09 00:39:29.000000'),
(75, 27, '2023-04-09 01:31:01.000000', '2023-04-09 02:31:01.000000'),
(76, 27, '2023-04-10 13:05:15.000000', '2023-04-10 14:05:15.000000'),
(77, 27, '2023-04-10 17:01:56.000000', '2023-04-10 18:01:56.000000'),
(78, 27, '2023-04-10 18:44:30.000000', '2023-04-10 19:44:30.000000'),
(79, 27, '2023-04-11 01:47:42.000000', '2023-04-11 02:47:42.000000'),
(80, 29, '2023-04-11 13:49:42.000000', '2023-04-11 14:49:42.000000'),
(81, 29, '2023-04-11 13:49:52.000000', '2023-04-11 14:49:52.000000'),
(82, 29, '2023-04-11 15:36:43.000000', '2023-04-11 16:36:43.000000'),
(83, 27, '2023-04-11 15:36:52.000000', '2023-04-11 16:36:52.000000');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `Id` int(255) NOT NULL,
  `Login` longtext NOT NULL,
  `Haslo` longtext NOT NULL,
  `Nazwa` varchar(255) NOT NULL,
  `Data_dolaczenia` date NOT NULL DEFAULT current_timestamp(),
  `Profilowe` varchar(255) NOT NULL,
  `Rola` enum('użytkownik','administrator','pracownik') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`Id`, `Login`, `Haslo`, `Nazwa`, `Data_dolaczenia`, `Profilowe`, `Rola`) VALUES
(27, 'a95bc16631ae2b6fadb455ee018da0adc2703e56d89e3eed074ce56d2f7b1b6a', 'a95bc16631ae2b6fadb455ee018da0adc2703e56d89e3eed074ce56d2f7b1b6a', 'qqq', '2023-04-06', '', 'użytkownik'),
(28, '7c2ecd07f155648431e0f94b89247d713c5786e1e73e953f2fe7eca39534cd6d', '7c2ecd07f155648431e0f94b89247d713c5786e1e73e953f2fe7eca39534cd6d', 'www', '2023-04-06', '', 'użytkownik'),
(29, '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'admin', '2023-04-11', '', 'administrator');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wnioski`
--

CREATE TABLE `wnioski` (
  `ID` int(255) NOT NULL,
  `Uzytkownik` varchar(255) NOT NULL,
  `Kilka_slow` varchar(255) NOT NULL,
  `Czemu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `id` int(11) NOT NULL,
  `produkt` int(255) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `cena` double NOT NULL,
  `data` date NOT NULL,
  `status` enum('w trakcie pakowania','kurier już biegnie','dostarczono') NOT NULL,
  `kogo` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `zamowienia`
--

INSERT INTO `zamowienia` (`id`, `produkt`, `adres`, `cena`, `data`, `status`, `kogo`) VALUES
(3, 32, 'qqq', 32, '2023-04-10', 'w trakcie pakowania', 27),
(4, 33, 'qqq', 22, '2023-04-10', 'w trakcie pakowania', 27),
(5, 32, 'qqq', 32, '2023-04-10', 'w trakcie pakowania', 27),
(6, 35, 'qqq', 22, '2023-04-10', 'w trakcie pakowania', 27);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `sesje`
--
ALTER TABLE `sesje`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `wnioski`
--
ALTER TABLE `wnioski`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `produkty`
--
ALTER TABLE `produkty`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT dla tabeli `sesje`
--
ALTER TABLE `sesje`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT dla tabeli `wnioski`
--
ALTER TABLE `wnioski`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
