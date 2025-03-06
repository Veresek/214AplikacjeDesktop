-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2025 at 02:11 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `szkola`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uczniowie`
--

CREATE TABLE `uczniowie` (
  `id` int(11) NOT NULL,
  `imie` varchar(50) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `klasa` varchar(10) NOT NULL,
  `srednia_ocen` float NOT NULL,
  `rok_urodzenia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uczniowie`
--

INSERT INTO `uczniowie` (`id`, `imie`, `nazwisko`, `klasa`, `srednia_ocen`, `rok_urodzenia`) VALUES
(2, 'Jan', 'Kowalski', '1PRO', 4.5, 2006),
(3, 'Anna', 'Nowak', '2INF', 4.2, 2005),
(4, 'Piotr', 'Wiśniewski', '3BUD', 3.8, 2004),
(5, 'Maria', 'Dąbrowska', '1INF', 4.7, 2006),
(6, 'Krzysztof', 'Lewandowski', '2PRO', 4, 2005),
(7, 'Agnieszka', 'Wójcik', '3INF', 4.3, 2004),
(8, 'Marek', 'Kamiński', '1BUD', 3.9, 2006),
(9, 'Ewa', 'Kowalczyk', '2BUD', 4.6, 2005),
(10, 'Tomasz', 'Zieliński', '3PRO', 4.1, 2004),
(11, 'Magdalena', 'Szymańska', '1PRO', 4.4, 2006),
(12, 'Adam', 'Woźniak', '2INF', 3.7, 2005),
(13, 'Barbara', 'Kozłowska', '3BUD', 4.8, 2004),
(14, 'Paweł', 'Jankowski', '1INF', 4, 2006),
(15, 'Katarzyna', 'Mazur', '2PRO', 4.5, 2005),
(16, 'Michał', 'Majewski', '3INF', 3.6, 2004),
(17, 'Joanna', 'Wojciechowska', '1BUD', 4.2, 2006),
(18, 'Grzegorz', 'Kwiatkowski', '2BUD', 4.3, 2005),
(19, 'Monika', 'Krawczyk', '3PRO', 4.7, 2004),
(20, 'Andrzej', 'Piotrowski', '1PRO', 3.8, 2006),
(21, 'Elżbieta', 'Grabowska', '2INF', 4.1, 2005),
(22, 'Robert', 'Nowicki', '3BUD', 4.4, 2004),
(23, 'Aleksandra', 'Pawlak', '1INF', 4, 2006),
(24, 'Dariusz', 'Michalski', '2PRO', 3.9, 2005),
(25, 'Iwona', 'Adamczyk', '3INF', 4.6, 2004),
(26, 'Stanisław', 'Dudek', '1BUD', 4.2, 2006),
(27, 'Beata', 'Stępień', '2BUD', 4.3, 2005),
(28, 'Marcin', 'Wróbel', '3PRO', 3.8, 2004),
(29, 'Halina', 'Olszewska', '1PRO', 4.5, 2006),
(30, 'Rafał', 'Jaworski', '2INF', 4.1, 2005),
(31, 'Dorota', 'Malinowska', '3BUD', 4.7, 2004),
(32, 'Wojciech', 'Czarnecki', '1INF', 3.7, 2006),
(33, 'Renata', 'Sikora', '2PRO', 4.8, 2005),
(34, 'Mariusz', 'Baran', '3INF', 4, 2004),
(35, 'Grażyna', 'Rutkowska', '1BUD', 4.4, 2006),
(36, 'Kazimierz', 'Szewczyk', '2BUD', 3.6, 2005),
(37, 'Urszula', 'Wilk', '3PRO', 4.2, 2004),
(38, 'Jerzy', 'Lis', '1PRO', 4.3, 2006),
(39, 'Sylwia', 'Kucharska', '2INF', 4.7, 2005),
(40, 'Leszek', 'Makowski', '3BUD', 3.8, 2004),
(41, 'Wanda', 'Zając', '1INF', 4.1, 2006),
(42, 'Tadeusz', 'Kaczmarek', '2PRO', 4.5, 2005),
(43, 'Lucyna', 'Wróblewska', '3INF', 4.2, 2004),
(44, 'Henryk', 'Sobczak', '1BUD', 3.8, 2006),
(45, 'Danuta', 'Czerwińska', '2BUD', 4.7, 2005),
(46, 'Zbigniew', 'Andrzejewski', '3PRO', 4, 2004),
(47, 'Edyta', 'Chmielewska', '1PRO', 4.3, 2006),
(48, 'Wiesław', 'Górski', '2INF', 3.9, 2005),
(49, 'Genowefa', 'Sokołowska', '3BUD', 4.6, 2004),
(50, 'Mieczysław', 'Rogowski', '1INF', 4.1, 2006),
(51, 'Irena', 'Mazurek', '2PRO', 4.4, 2005),
(52, 'Stefan', 'Włodarczyk', '3INF', 3.7, 2004),
(53, 'Bożena', 'Borkowska', '1BUD', 4.8, 2006),
(54, 'Władysław', 'Głowacki', '2BUD', 4, 2005),
(55, 'Alina', 'Zawadzka', '3PRO', 4.5, 2004),
(56, 'Ryszard', 'Brzeziński', '1PRO', 3.6, 2006),
(57, 'Jadwiga', 'Domańska', '2INF', 4.2, 2005),
(58, 'Wacław', 'Chojnacki', '3BUD', 4.3, 2004),
(59, 'Helena', 'Kubiak', '1INF', 4.7, 2006),
(60, 'Grzegorz', 'Brzęczyszczykowski', '2PRO', 3.8, 2005),
(61, 'Marzena', 'Krajewska', '3INF', 4.1, 2004),
(62, 'Kamil', 'Nowak', '1BUD', 4.5, 2006),
(63, 'Oliwia', 'Kowalska', '2BUD', 4.2, 2005),
(64, 'Filip', 'Wiśniewski', '3PRO', 3.8, 2004),
(65, 'Zuzanna', 'Dąbrowska', '1PRO', 4.7, 2006),
(66, 'Bartosz', 'Lewandowski', '2INF', 4, 2005),
(67, 'Julia', 'Wójcik', '3BUD', 4.3, 2004),
(68, 'Kacper', 'Kamiński', '1INF', 3.9, 2006),
(69, 'Natalia', 'Kowalczyk', '2PRO', 4.6, 2005),
(70, 'Mikołaj', 'Zieliński', '3INF', 4.1, 2004),
(71, 'Wiktoria', 'Szymańska', '1BUD', 4.4, 2006),
(72, 'Szymon', 'Woźniak', '2BUD', 3.7, 2005),
(73, 'Amelia', 'Kozłowska', '3PRO', 4.8, 2004),
(74, 'Jakub', 'Jankowski', '1PRO', 4, 2006),
(75, 'Lena', 'Mazur', '2INF', 4.5, 2005),
(76, 'Antoni', 'Majewski', '3BUD', 3.6, 2004),
(77, 'Hanna', 'Wojciechowska', '1INF', 4.2, 2006),
(78, 'Franciszek', 'Kwiatkowski', '2PRO', 4.3, 2005),
(79, 'Laura', 'Krawczyk', '3INF', 4.7, 2004),
(80, 'Aleksander', 'Piotrowski', '1BUD', 3.8, 2006),
(81, 'Maja', 'Grabowska', '2BUD', 4.1, 2005),
(82, 'Dominik', 'Nowicki', '3PRO', 4.4, 2004),
(83, 'Karolina', 'Pawlak', '1PRO', 4, 2006),
(84, 'Hubert', 'Michalski', '2INF', 3.9, 2005),
(85, 'Martyna', 'Adamczyk', '3BUD', 4.6, 2004),
(86, 'Patryk', 'Dudek', '1INF', 4.2, 2006),
(87, 'Kinga', 'Stępień', '2PRO', 4.3, 2005),
(88, 'Adrian', 'Wróbel', '3INF', 3.8, 2004),
(89, 'Gabriela', 'Olszewska', '1BUD', 4.5, 2006),
(90, 'Sebastian', 'Jaworski', '2BUD', 4.1, 2005),
(91, 'Nikola', 'Malinowska', '3PRO', 4.7, 2004),
(92, 'Damian', 'Czarnecki', '1PRO', 3.7, 2006),
(93, 'Weronika', 'Sikora', '2INF', 4.8, 2005),
(94, 'Krystian', 'Baran', '3BUD', 4, 2004),
(95, 'Paulina', 'Rutkowska', '1INF', 4.4, 2006),
(96, 'Radosław', 'Szewczyk', '2PRO', 3.6, 2005),
(97, 'Nina', 'Wilk', '3INF', 4.2, 2004),
(98, 'Arkadiusz', 'Lis', '1BUD', 4.3, 2006),
(99, 'Patrycja', 'Kucharska', '2BUD', 4.7, 2005),
(100, 'Mirosław', 'Makowski', '3PRO', 3.8, 2004),
(101, 'Ilona', 'Zając', '1PRO', 4.1, 2006);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `uczniowie`
--
ALTER TABLE `uczniowie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uczniowie`
--
ALTER TABLE `uczniowie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
