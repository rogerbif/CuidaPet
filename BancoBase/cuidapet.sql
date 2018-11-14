-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Nov-2018 às 15:50
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.8

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
(1, 'Tavico das Guria', '123.456.789-00', '1989-01-01', 'Rua da Web, 123', 'Internet', 1234568, 'Teste', 'Teste', 5555555, 55555555, 123456, '2016-05-24 00:00:00', '2018-11-01 12:48:01'),
(4, 'Eduardo Bujak', '', '0000-00-00', 'Rua Belem 345', '', 92500000, 'Guaiba', 'RS', 2147483647, 0, 0, '2018-10-28 19:52:17', '2018-11-01 12:37:34'),
(5, 'Raquel Kayser', '', '0000-00-00', 'Rua Belem 345', '', 92500000, 'Guaiba', 'RS', 2147483647, 0, 0, '2018-10-28 19:52:22', '2018-11-01 12:39:07'),
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
(16, 'Teste', 'Teste', 'http://localhost/cuidapet/agenda/descripcion_evento.php?id=16', 'event-special', '1515672000000', '1515679200000', '11/01/2018 10:00', '11/01/2018 12:00'),
(17, 'TESTE', 'TESTE', 'http://localhost/cuidapet/agenda/descripcion_evento.php?id=17', 'event-info', '1541430000000', '1541433600000', '05/11/2018 13:00', '05/11/2018 14:00'),
(18, 'TESTE2', 'TESTE2', 'http://localhost/cuidapet/agenda/descripcion_evento.php?id=18', 'event-important', '1541433600000', '1541437200000', '05/11/2018 14:00', '05/11/2018 15:00');

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
(1, 'Laica', 4, 'Cachorro', 'Pastor AlemÃ£o', 'Curto', 'Preto', 'Femea', 0, '0000-00-00', '2018-10-28 22:43:25', '2018-11-01 12:37:19'),
(2, 'Amora', 5, 'Cachorro', 'Vira-Lata', 'Longo', 'Preto', 'Femea', 1, '2011-01-01', '2018-11-01 12:40:49', '2018-11-01 12:40:49'),
(3, 'Vagabundinho', 1, 'Crocodilo', 'Vira-Lata', 'Curto', 'Verde-Godzilla', 'Femea', 0, '2001-01-01', '2018-11-01 12:49:05', '2018-11-01 12:49:15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `registros`
--

CREATE TABLE `registros` (
  `id` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `usuario` varchar(14) NOT NULL,
  `observacoes` varchar(255) NOT NULL,
  `diagnostico` varchar(255) NOT NULL,
  `customerId` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `registros`
--

INSERT INTO `registros` (`id`, `data`, `usuario`, `observacoes`, `diagnostico`, `customerId`, `created`, `modified`) VALUES
(4, '0000-00-00 00:00:00', 'admin', 'Teste', 'Teste', 4, '2018-11-14 12:49:02', '2018-11-14 12:49:02');

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
(3, 'roger', 'rogerbif@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'teste', 'teste@teste.com', '202cb962ac59075b964b07152d234b70');

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
-- Indexes for table `registros`
--
ALTER TABLE `registros`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
