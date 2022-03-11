-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 11. Mrz 2022 um 11:57
-- Server-Version: 10.4.22-MariaDB
-- PHP-Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `sot`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `titel` text NOT NULL,
  `text` text NOT NULL,
  `rolle` text NOT NULL,
  `textImage` text NOT NULL,
  `imageName` varchar(255) NOT NULL,
  `lizens` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `posts`
--

INSERT INTO `posts` (`post_id`, `titel`, `text`, `rolle`, `textImage`, `imageName`, `lizens`) VALUES
(2, '', 'atunthihgfggggggggxsss', 'Shitpost', 'negaman', '8.png', 'cc0'),
(3, '<h1 color=\"red\">haha lul</h1>', '', 'Shitpost', 'lol nega :)', '9.png', 'cc0'),
(4, 'scheiss', 'hahaha', 'Recipy', 'agg', '10.png', 'cc0'),
(5, 's', 'sadsad', 'Recipy', 'aasdsad', '11.png', 'cc-by-nc');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `session` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `session`) VALUES
(1, 'jooaoribcorreia@gmail.com', '$2y$10$YcWh8ydqo9Xgz0Va4eBD8em9wqxwF4PkxIfL/Qcd5RqYdzxJG7nAK', '50r43ndv5hbq1gdko9ph7jqq2d'),
(2, 'he@gmail.com', '$2y$10$CR3vX4xyttO2N5RIfsh76.SlqbmisNGL3y.eCeGxXpI3qsBmiae/G', ''),
(3, 'hi@gmail.com', '$2y$10$WqjtpjW0x/qEJ2J89lnpM.JLHaaTuVTddp41c/y6VPLBRF4RfKSYy', '');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
