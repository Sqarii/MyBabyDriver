-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 18 Mar 2022, 19:58
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `mybabydriver`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `age` date NOT NULL,
  `email` varchar(254) NOT NULL,
  `password` varchar(254) NOT NULL,
  `driver_id` int(5) NOT NULL,
  `description` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `drivers`
--

INSERT INTO `drivers` (`id`, `first_name`, `last_name`, `age`, `email`, `password`, `driver_id`, `description`) VALUES
(1, 'Mateusz', 'Szymborski', '0000-00-00', 'mateusz@mail.com', '!Haslo123', 10001, 'Mateusz Szymborski is a professional rally driver from Poland. He finished on the podium 19 times. He is a five-time winner of the Polish national rally championship.'),
(2, 'Hubert', 'Seklecki', '0000-00-00', 'hubert@mail.com', '!Haslo123', 10002, 'Hubert Seklecki was a mechanic in a police garage in Brussels. He became a notorious driver of street racing cars. An international drug war was fought on his tracks. to know how smoking stopped him, read the article.'),
(3, 'Miłosz', 'Czech', '0000-00-00', 'miłosz@mail.com', '!Haslo123', 10003, 'Miłosz Czech is an experienced driver of the brand Dodge Ram. He has many years of experience, earning him the title of \"The Expert\". This is a first-hand account of what it\'s like to drive a Dodge Ram.'),
(4, 'Filip', 'Jędrzejewski', '0000-00-00', 'filip@mail.com', '!Haslo123', 10004, 'Filip is a Polish CSGO gamer who started to work as a virtual driver in 2016. He is the first gamer to work for the G2 Esports organization representing them in different tournaments. He plays for the Polish team of Planetkey Dynamics and the Team Singul'),
(5, 'Mateusz', 'Jarmużek', '0000-00-00', 'jarmuz@mail.com', '!Haslo123', 10005, 'A man draws a picture of Jack Sparrow and makes the drawing look like he is actually in the sea of thieves.  The drawing is caused by the combination of the effects of cannabis and CBD.'),
(6, 'Kacper', 'Wojciechowski', '0000-00-00', 'kacper@mail.com', '!Haslo123', 10006, 'Kacper Wojciechowski is a football player from the University of Michigan. He plays as a linebacker for the Michigan Wolverines. Wojciechowski was selected by the San Francisco 49ers in the third round of the 2016 NFL Draft.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rates`
--

CREATE TABLE `rates` (
  `id` int(11) NOT NULL,
  `driver_id` int(5) NOT NULL,
  `nick` varchar(100) NOT NULL,
  `rate` int(1) NOT NULL,
  `note` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `rates`
--

INSERT INTO `rates` (`id`, `driver_id`, `nick`, `rate`, `note`, `date`) VALUES
(4, 10004, '', 4, 'test1', '0000-00-00 00:00:00'),
(5, 10004, 'guest', 4, 'test1', '0000-00-00 00:00:00'),
(6, 10004, 'anonymous', 4, 'test1', '0000-00-00 00:00:00'),
(7, 10002, 'hubciobubcio', 5, '60!', '0000-00-00 00:00:00'),
(8, 10006, 'jd', 4, 'polecam', '0000-00-00 00:00:00'),
(9, 10006, 'jd', 4, 'test', '0000-00-00 00:00:00'),
(10, 10006, 'jd', 4, 'test', '0000-00-00 00:00:00'),
(11, 10001, 'anonymous', 4, 'Nie polecam jk', '0000-00-00 00:00:00'),
(12, 10003, 'test', 1, '', '0000-00-00 00:00:00'),
(13, 10002, 'jebac disa', 5, 'yestlasdl', '2022-03-12 08:09:01'),
(14, 10001, 'test', 1, '', '2022-03-12 08:11:11'),
(15, 10001, 'test', 1, '', '2022-03-12 20:11:53'),
(16, 10003, 'anonymous', 1, 'chujowy kierowca', '2022-03-12 20:15:47'),
(17, 10002, 'anonymous', 5, 'good job my friend!', '2022-03-12 21:52:48'),
(18, 10001, 'anonymous', 1, '', '2022-03-12 21:57:12'),
(19, 10001, 'test', 1, 'test1', '2022-03-12 22:07:01'),
(20, 10001, 'guest1', 2, 'test1', '2022-03-13 19:03:06'),
(21, 10001, 'guest2', 3, 'test2', '2022-03-13 19:05:35'),
(22, 10001, 'guest3', 5, 'test3', '2022-03-13 19:05:42'),
(23, 10001, 'guest4', 1, 'test4', '2022-03-13 19:05:50'),
(24, 10001, 'guest5', 2, 'test5', '2022-03-13 19:05:56'),
(25, 10001, 'guest6', 4, 'test6', '2022-03-13 19:06:03'),
(26, 10001, 'guest7', 3, 'test7', '2022-03-13 19:06:12'),
(27, 10001, 'guest8', 1, 'test8', '2022-03-13 19:06:17'),
(28, 10001, 'guest9', 5, 'test9', '2022-03-13 19:06:24'),
(29, 10001, 'guest10', 5, 'test10', '2022-03-13 19:06:30'),
(30, 10001, 'anonymous', 5, 'supcio', '2022-03-13 19:33:33'),
(32, 10003, 'guest', 3, 'Nie polecam serdercznie', '2022-03-13 23:06:55'),
(33, 10005, 'guest1', 1, 'test1', '2022-03-13 23:10:46'),
(34, 10005, 'guest2', 2, 'test2', '2022-03-13 23:10:51'),
(35, 10005, 'guest3', 3, 'test3', '2022-03-13 23:10:56'),
(36, 10005, 'guest4', 4, 'test4', '2022-03-13 23:11:02'),
(37, 10005, 'guest5', 5, 'test5', '2022-03-13 23:11:06'),
(38, 10005, 'guest6', 1, 'test6', '2022-03-13 23:11:13'),
(39, 10005, 'guest7', 2, 'test7', '2022-03-13 23:11:19'),
(40, 10005, 'guest8', 3, 'test8', '2022-03-13 23:11:25');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`driver_id`),
  ADD KEY `driver_id` (`driver_id`),
  ADD KEY `driver_id_2` (`driver_id`),
  ADD KEY `id` (`id`);

--
-- Indeksy dla tabeli `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `driver_id` (`driver_id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `rates`
--
ALTER TABLE `rates`
  ADD CONSTRAINT `rates_ibfk_1` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`driver_id`),
  ADD CONSTRAINT `rates_ibfk_2` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`driver_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
