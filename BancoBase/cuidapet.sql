-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Nov-2018 às 07:13
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cuidapet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(14) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `hood` varchar(100) NOT NULL,
  `zip_code` int(8) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone` int(13) NOT NULL,
  `mobile` int(13) NOT NULL,
  `ie` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `customers`
--

INSERT INTO `customers` (`id`, `name`, `cpf_cnpj`, `birthdate`, `address`, `hood`, `zip_code`, `city`, `state`, `phone`, `mobile`, `ie`, `created`, `modified`) VALUES
(1, 'Fulano de Tal', '123.456.789-00', '1989-01-01', 'Rua da Web, 123', 'Internet', 1234568, 'Teste', 'Teste', 5555555, 55555555, 123456, '2016-05-24 00:00:00', '2018-10-27 22:37:32'),
(4, 'Roger de Souza Bif', '', '0000-00-00', 'Rua Belem 345', '', 92500000, 'Guaiba', 'RS', 2147483647, 0, 0, '2018-10-28 19:52:17', '2018-10-28 19:52:17'),
(5, 'Roger de Souza Bif', '', '0000-00-00', 'Rua Belem 345', '', 92500000, 'Guaiba', 'RS', 2147483647, 0, 0, '2018-10-28 19:52:22', '2018-10-28 19:52:22'),
(6, 'Roger de Souza Bif', '99673231087', '0000-00-00', 'Rua Belem 345', 'Sta Rita', 92500000, 'Guaiba', 'RS', 2147483647, 2147483647, 0, '2018-10-28 19:52:56', '2018-10-28 19:52:56');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `body` text COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `class` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'event-important',
  `start` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `end` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `inicio_normal` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `final_normal` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `title`, `body`, `url`, `class`, `start`, `end`, `inicio_normal`, `final_normal`) VALUES
(2, 'teste 2', 'Teste', 'http://localhost/cuidapet/agenda/descripcion_evento.php?id=2', 'event-special', '1541858400000', '1539144000000', '10/11/2018 12:00 PM', '10/10/2018 1:00 PM'),
(3, 'teste', 'teste', 'http://localhost/cuidapet/agenda/descripcion_evento.php?id=3', 'event-info', '1539174180000', '1539177780000', '10/10/2018 9:23 PM', '10/10/2018 10:23 PM'),
(4, 'teste 3', 'teste 3', 'http://localhost/cuidapet/agenda/descripcion_evento.php?id=4', 'event-info', '1541840400000', '1539175740000', '10/11/2018 7:00 PM', '10/10/2018 9:49 PM'),
(6, 'a', 'a', 'http://localhost/cuidapet/agenda/descripcion_evento.php?id=6', 'event-warning', '1539175860000', '1539175860000', '10/10/2018 9:51 PM', '10/10/2018 9:51 PM'),
(8, 'c', 'c', 'http://localhost/cuidapet/agenda/descripcion_evento.php?id=8', 'event-info', '1539263220000', '1539266820000', '11/10/2018 10:07', '11/10/2018 11:07'),
(9, 'AD', 'AD', 'http://localhost/cuidapet/agenda/descripcion_evento.php?id=9', 'event-info', '1539277200000', '1539280800000', '11/10/2018 14:00', '11/10/2018 15:00'),
(10, 'AA', 'AAA', 'http://localhost/cuidapet/agenda/descripcion_evento.php?id=10', 'event-info', '1539273600000', '1539277200000', '11/10/2018 13:00', '11/10/2018 14:00'),
(11, 'BBB', 'BB', 'http://localhost/cuidapet/agenda/descripcion_evento.php?id=11', 'event-info', '1539271800000', '1539273600000', '11/10/2018 12:30', '11/10/2018 13:00'),
(12, 'AAAAA', 'AAAA', 'http://localhost/cuidapet/agenda/descripcion_evento.php?id=12', 'event-info', '1539619200000', '1539622800000', '15/10/2018 13:00', '15/10/2018 14:00'),
(13, 'BBBBB', 'BBBBBB', 'http://localhost/cuidapet/agenda/descripcion_evento.php?id=13', 'event-info', '1539604800000', '1539608400000', '15/10/2018 09:00', '15/10/2018 10:00'),
(14, 'Teste 16', 'Teste 16', 'http://localhost/cuidapet/agenda/descripcion_evento.php?id=14', 'event-success', '1539707220000', '1539710820000', '16/10/2018 13:27', '16/10/2018 14:27'),
(15, 'TEste', 'TEsteTEste', 'http://localhost/cuidapet/agenda/descripcion_evento.php?id=15', 'event-special', '1540656000000', '1540659600000', '27/10/2018 13:00', '27/10/2018 14:00'),
(16, 'testett', 'teste', 'http://localhost/cuidapet/agenda/descripcion_evento.php?id=16', 'event-info', '1515679200000', '1515682800000', '11/01/2018 12:00', '11/01/2018 13:00'),
(17, 'teste', 'teste', 'http://localhost/cuidapet/agenda/descripcion_evento.php?id=17', 'event-warning', '1515708000000', '1515711600000', '11/01/2018 20:00', '11/01/2018 21:00'),
(23, 'aaaaaa', 'aaaaaaa', 'http://localhost/cuidapet/agenda/descripcion_evento.php?id=23', 'event-info', '1541135460000', '1541135460000', '02/11/2018 02:11', '02/11/2018 02:11'),
(24, 'aaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaa', 'http://localhost/cuidapet/agenda/descripcion_evento.php?id=24', 'event-info', '1541171460000', '1541175060000', '02/11/2018 12:11', '02/11/2018 13:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pets`
--

CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `owner` int(11) NOT NULL,
  `species` varchar(14) NOT NULL,
  `breed` varchar(14) NOT NULL,
  `fur` varchar(14) NOT NULL,
  `color` varchar(14) NOT NULL,
  `sex` varchar(14) NOT NULL,
  `castrated` tinyint(1) NOT NULL,
  `birthdate` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pets`
--

INSERT INTO `pets` (`id`, `name`, `owner`, `species`, `breed`, `fur`, `color`, `sex`, `castrated`, `birthdate`, `created`, `modified`) VALUES
(1, 'Laica', 0, 'Cachorro', 'Pastor AlemÃ£o', 'Curto', 'Preto', 'Femea', 0, '0000-00-00', '2018-10-28 22:43:25', '2018-10-28 22:43:25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(2, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'roger', 'rogerbif@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
