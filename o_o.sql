-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Kwi 2023, 19:04
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
  `Tagi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `produkty`
--

INSERT INTO `produkty` (`ID`, `Kogo_produkt`, `Opis`, `Tytul`, `Data_dodania`, `Zdjecie`, `Cena`, `Tagi`) VALUES
(41, 30, 'bulbulaturuje super bomble bul bul', 'bulbulator', '2023-04-15', '.jpg', 32, 'bulbulator , nowy , superancki'),
(49, 30, 'Kamień Rzeczywistości – jeden z sześciu Kamieni Nieskończoności. Został stworzony przez Kosmiczne Byty. Początkowo był w posiadaniu Mrocznych Elfów między innymi: Malekith, następnie był w rękach Asów. Po wiekach spędzonych w ukryciu, kamień dostał się w posiadanie Jane Foster. Kamień jako osłonę miał płynną substancję (Jako jedyny z kamieni miał płynną osłonę, inne miały osłonki jako ciał stałe) Ether. W 2023 roku,Thor i Rocket podróżowali w czasie do 2013 aby móc przywrócić do życia wszystkich zmarłych poprzez pstryknięcie Thanosa.', 'kamień rzeczywistości', '2023-04-15', '48.jpg', 2, 'Nowe , Nieśmigane , superancki');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sesje`
--

CREATE TABLE `sesje` (
  `Id` int(255) NOT NULL,
  `Kto` int(255) NOT NULL,
  `Kiedy` datetime(6) NOT NULL,
  `Do_kiedy` datetime(6) NOT NULL,
  `IP` varchar(255) NOT NULL
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
(83, 27, '2023-04-11 15:36:52.000000', '2023-04-11 16:36:52.000000'),
(84, 27, '2023-04-13 17:41:45.000000', '2023-04-13 18:41:45.000000'),
(85, 29, '2023-04-13 18:38:21.000000', '2023-04-13 19:38:21.000000'),
(86, 27, '2023-04-13 19:33:10.000000', '2023-04-13 20:33:10.000000'),
(87, 27, '2023-04-14 20:44:16.000000', '2023-04-14 21:44:16.000000'),
(88, 27, '2023-04-15 00:55:27.000000', '2023-04-15 01:55:27.000000'),
(89, 30, '2023-04-15 00:57:57.000000', '2023-04-15 01:57:57.000000'),
(90, 27, '2023-04-15 03:28:37.000000', '2023-04-15 04:28:37.000000'),
(91, 27, '2023-04-15 12:37:34.000000', '2023-04-15 13:37:34.000000'),
(92, 29, '2023-04-15 12:37:43.000000', '2023-04-15 13:37:43.000000'),
(93, 30, '2023-04-15 12:38:00.000000', '2023-04-15 13:38:00.000000'),
(94, 28, '2023-04-15 13:04:17.000000', '2023-04-15 14:04:17.000000'),
(95, 27, '2023-04-15 13:05:00.000000', '2023-04-15 14:05:00.000000'),
(96, 28, '2023-04-15 13:05:48.000000', '2023-04-15 14:05:48.000000'),
(97, 28, '2023-04-15 15:40:46.000000', '2023-04-15 16:40:46.000000'),
(98, 31, '2023-04-15 15:43:01.000000', '2023-04-15 16:43:01.000000'),
(99, 27, '2023-04-15 16:23:08.000000', '2023-04-15 17:23:08.000000'),
(100, 31, '2023-04-15 16:23:41.000000', '2023-04-15 17:23:41.000000'),
(101, 31, '2023-04-15 19:21:30.000000', '2023-04-15 20:21:30.000000'),
(102, 31, '2023-04-15 19:28:15.000000', '2023-04-15 20:28:15.000000'),
(103, 31, '2023-04-15 19:30:47.000000', '2023-04-15 20:30:47.000000'),
(104, 31, '2023-04-15 19:35:50.000000', '2023-04-15 20:35:50.000000'),
(105, 31, '2023-04-15 19:37:22.000000', '2023-04-15 20:37:22.000000'),
(106, 31, '2023-04-15 21:13:37.000000', '2023-04-15 22:13:37.000000'),
(107, 31, '2023-04-16 12:08:10.000000', '2023-04-16 13:08:10.000000'),
(108, 31, '2023-04-16 12:09:48.000000', '2023-04-16 13:09:48.000000'),
(109, 31, '2023-04-16 13:31:22.000000', '2023-04-16 14:31:22.000000'),
(110, 31, '2023-04-16 13:32:49.000000', '2023-04-16 14:32:49.000000'),
(111, 31, '2023-04-16 14:01:53.000000', '2023-04-16 15:01:53.000000'),
(112, 31, '2023-04-16 14:05:52.000000', '2023-04-16 15:05:52.000000'),
(113, 31, '2023-04-16 14:07:13.000000', '2023-04-16 15:07:13.000000'),
(114, 31, '2023-04-16 14:13:31.000000', '2023-04-16 15:13:31.000000'),
(115, 27, '2023-04-16 14:23:48.000000', '2023-04-16 15:23:48.000000'),
(116, 27, '2023-04-16 17:17:02.000000', '2023-04-16 18:17:02.000000'),
(117, 31, '2023-04-16 18:59:44.000000', '2023-04-16 19:59:44.000000'),
(118, 29, '2023-04-16 18:59:58.000000', '2023-04-16 19:59:58.000000');

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
  `Rola` enum('użytkownik','administrator','pracownik') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`Id`, `Login`, `Haslo`, `Nazwa`, `Data_dolaczenia`, `Rola`) VALUES
(27, 'a95bc16631ae2b6fadb455ee018da0adc2703e56d89e3eed074ce56d2f7b1b6a', 'a95bc16631ae2b6fadb455ee018da0adc2703e56d89e3eed074ce56d2f7b1b6a', 'qqq', '2023-04-06', 'pracownik'),
(28, '7c2ecd07f155648431e0f94b89247d713c5786e1e73e953f2fe7eca39534cd6d', '7c2ecd07f155648431e0f94b89247d713c5786e1e73e953f2fe7eca39534cd6d', 'www', '2023-04-06', 'użytkownik'),
(29, '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'admin', '2023-04-11', 'administrator'),
(30, '91617f4849abe274fbd0c4f4c3b3b6e68a99e40e077f2c51aa9428689926a058', '91617f4849abe274fbd0c4f4c3b3b6e68a99e40e077f2c51aa9428689926a058', 'Ten', '2023-04-15', 'użytkownik'),
(31, 'e4432baa90819aaef51d2a7f8e148bf7e679610f3173752fabb4dcb2d0f418d3', 'e4432baa90819aaef51d2a7f8e148bf7e679610f3173752fabb4dcb2d0f418d3', 'ten', '2023-04-15', 'użytkownik');

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
(7, 49, 'Poznańska 9 Poznań', 2, '2023-04-15', 'dostarczono', 28),
(8, 41, 'Poznańska 9 Poznań', 32, '2023-04-15', 'dostarczono', 28),
(9, 49, 'Poznańska 11 Poznań', 2, '2023-04-15', 'dostarczono', 31),
(10, 41, 'Poznańska 11 Poznań', 32, '2023-04-15', 'dostarczono', 31),
(11, 49, 'Poznańska 9 Poznań', 2, '2023-04-16', 'dostarczono', 31),
(12, 49, 'Poznańska 9 Poznań', 2, '2023-04-16', 'dostarczono', 27);

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
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT dla tabeli `sesje`
--
ALTER TABLE `sesje`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT dla tabeli `wnioski`
--
ALTER TABLE `wnioski`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
