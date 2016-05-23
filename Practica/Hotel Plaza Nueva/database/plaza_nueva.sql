-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Creato il: Mag 15, 2016 alle 17:02
-- Versione del server: 10.1.10-MariaDB
-- Versione PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plaza_nueva`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `hab_hotel`
--

CREATE TABLE `hab_hotel` (
  `cod_hab` varchar(5) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `menu`
--

CREATE TABLE `menu` (
  `cod` tinyint(4) NOT NULL,
  `text` text NOT NULL,
  `url` text NOT NULL,
  `span-class` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `menu`
--

INSERT INTO `menu` (`cod`, `text`, `url`, `span-class`) VALUES
(0, 'Hotel', 'home', 'fa-home'),
(1, 'Fotos', 'fotos', 'fa-photo'),
(2, 'Mas Informacion', 'info', 'fa-info'),
(3, 'Habitaciones', 'habs', 'fa-bed'),
(4, 'Promociones', 'proms', 'fa-exclamation-circle'),
(5, 'Contacto y Mapa', 'contact', 'fa-map'),
(6, 'Reservar', 'reserva', 'fa-calendar');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `username` varchar(32) NOT NULL,
  `password` text NOT NULL,
  `mail` varchar(32) NOT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `nombre` varchar(20) NOT NULL,
  `appelidos` varchar(32) NOT NULL,
  `role` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`username`, `password`, `mail`, `fecha`, `nombre`, `appelidos`, `role`) VALUES
('admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', 'mynewmailfortests@gmail.com', '2016-05-10 17:27:34', 'Administrator', 'Del Sistema', 'A'),
('ciao', 'ee26b0dd4af7e749aa1a8ee3c10ae9923f618980772e473f8819a5d4940e0db27ac185f8a0e1d5f84f88bc887fd67b143732c304cc5fa9ad8e6f57f50028a8ff', 'dave@ugr.es', '2016-05-10 17:25:50', 'Test', 'Dave', 'U');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `hab_hotel`
--
ALTER TABLE `hab_hotel`
  ADD PRIMARY KEY (`cod_hab`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `mail` (`mail`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
