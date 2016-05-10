-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Creato il: Mag 10, 2016 alle 17:59
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
  `password` varchar(16) NOT NULL,
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
('dave95', 'test', 'davidegallitelli@gmail.com', '2016-05-10 11:53:12', 'Davide', 'Gallitelli', 'U');

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
