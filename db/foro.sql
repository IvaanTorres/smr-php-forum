-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 12:17 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foro`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(8) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `nick` varchar(250) NOT NULL,
  `correo` varchar(250) NOT NULL,
  `contrasenya` varchar(250) NOT NULL,
  `login` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `nombre`, `nick`, `correo`, `contrasenya`, `login`) VALUES
(2, 'Monica Garcia Urban', 'Monike14', 'Mogaur@hotmail.com', '246fbf2a0c2285af3b86f9f2efed5243', 1),
(5, 'jeremi', 'jeremipr', 'jeremipr19@gmail.com', 'ccee5504c9d889922b101124e9e43b71', 1),
(17, 'Carmen', 'Carmen1955', 'carmen.velasco.guijarro@gmail.com', '$2y$10$1BKywseuHHei/39Bp0Cnp.Mrm8tyLdD5AbRo8IIWd/WY/eZxW67Iq', 1),
(18, 'Juan', 'TorresVelasco', 'itoga22.it@gmail.com', '$2y$10$00iUfw32o2Rs.hngm0NFOem4IRTzkWbyGnfnS2lzidIBs0WL7ACmq', 0);

-- --------------------------------------------------------

--
-- Table structure for table `paises`
--

CREATE TABLE `paises` (
  `ID` int(10) NOT NULL,
  `pais` varchar(150) NOT NULL,
  `paisLimpio` varchar(150) NOT NULL,
  `continente` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paises`
--

INSERT INTO `paises` (`ID`, `pais`, `paisLimpio`, `continente`) VALUES
(1, 'albania', 'Albania', 'europa'),
(2, 'alemania', 'Alemania', 'europa'),
(3, 'andorra', 'Andorra', 'europa'),
(6, 'armenia', 'Armenia', 'europa'),
(7, 'austria', 'Austria', 'europa'),
(8, 'italia', 'Italia', 'europa'),
(9, 'kazajistan', 'Kazajistán', 'europa'),
(10, 'letonia', 'Letonia', 'europa'),
(11, 'liechtenstein', '', 'europa'),
(12, 'lituania', '', 'europa'),
(20, 'azerbaiyan', '', 'europa'),
(21, 'belgica', '', 'europa'),
(22, 'bielorusia', '', 'europa'),
(23, 'bosnia', '', 'europa'),
(24, 'bulgaria', '', 'europa'),
(25, 'luxemburgo', '', 'europa'),
(26, 'macedonia', '', 'europa'),
(27, 'malta', '', 'europa'),
(28, 'moldavia', '', 'europa'),
(29, 'monaco', '', 'europa'),
(30, 'chipre', '', 'europa'),
(31, 'vaticano', '', 'europa'),
(32, 'croacia', '', 'europa'),
(33, 'dinamarca', '', 'europa'),
(34, 'eslovaquia', '', 'europa'),
(35, 'montenegro', '', 'europa'),
(36, 'noruega', '', 'europa'),
(37, 'paisesBajos', '', 'europa'),
(38, 'polonia', '', 'europa'),
(39, 'portugal', '', 'europa'),
(40, 'eslovenia', '', 'europa'),
(41, 'espana', '', 'europa'),
(42, 'estonia', '', 'europa'),
(43, 'finlandia', '', 'europa'),
(44, 'francia', '', 'europa'),
(45, 'reinoUnido', '', 'europa'),
(52, 'repCheca', '', 'europa'),
(53, 'rumania', '', 'europa'),
(54, 'rusia', '', 'europa'),
(55, 'sanMarino', '', 'europa'),
(56, 'georgia', '', 'europa'),
(57, 'grecia', '', 'europa'),
(58, 'hungria', '', 'europa'),
(59, 'irlanda', '', 'europa'),
(60, 'islandia', '', 'europa'),
(61, 'serbia', '', 'europa'),
(62, 'suecia', '', 'europa'),
(63, 'suiza', '', 'europa'),
(64, 'turquia', '', 'europa'),
(65, 'ucrania', '', 'europa'),
(66, 'antigua', '', 'america'),
(67, 'argentina', '', 'america'),
(68, 'bahamas', '', 'america'),
(69, 'barbados', '', 'america'),
(70, 'belice', '', 'america'),
(71, 'bolivia', '', 'america'),
(72, 'brasil', '', 'america'),
(73, 'canada', '', 'america'),
(74, 'chile', '', 'america'),
(75, 'colombia', '', 'america'),
(76, 'costaRica', '', 'america'),
(77, 'cuba', '', 'america'),
(78, 'dominica', '', 'america'),
(79, 'ecuador', '', 'america'),
(80, 'salvador', '', 'america'),
(81, 'estadosUnidos', '', 'america'),
(82, 'granada', '', 'america'),
(83, 'guatemala', '', 'america'),
(84, 'guyana', '', 'america'),
(85, 'haiti', '', 'america'),
(86, 'honduras', '', 'america'),
(87, 'jamaica', '', 'america'),
(88, 'mexico', '', 'america'),
(89, 'nicaragua', '', 'america'),
(90, 'panama', '', 'america'),
(91, 'paraguay', '', 'america'),
(92, 'peru', '', 'america'),
(93, 'repDominicana', '', 'america'),
(94, 'cristobalNieves', '', 'america'),
(95, 'sanVicente', '', 'america'),
(96, 'santaLucia', '', 'america'),
(97, 'surinam', '', 'america'),
(98, 'trinidad', '', 'america'),
(99, 'uruguay', '', 'america'),
(100, 'venezuela', '', 'america');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `ID` int(11) NOT NULL,
  `usuario` varchar(150) NOT NULL,
  `pais` varchar(150) NOT NULL,
  `continente` varchar(150) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `tituloPost` varchar(150) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`ID`, `usuario`, `pais`, `continente`, `fecha`, `hora`, `tituloPost`, `comentario`) VALUES
(52, 'Itoga21.it@gmail.com', 'espana', 'europa', '2020-02-09', '01:59:56', 'ihvfeouhvouebfvu', 'ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg'),
(65, 'Itoga21.it@gmail.com', 'espana', 'europa', '2020-02-09', '02:16:18', 'ihvirphvithrgbi', 'ihiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii'),
(66, 'carmen.velasco.guijarro@gmail.com', 'espana', 'europa', '2020-02-09', '02:18:06', 'j bfljvbfdkbk fdn', 'jcbdjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj'),
(67, 'carmen.velasco.guijarro@gmail.com', 'espana', 'europa', '2020-02-09', '02:19:15', 'j bfljvbfdkbk fdn', 'jcbdjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj'),
(68, 'carmen.velasco.guijarro@gmail.com', 'espana', 'europa', '2020-02-09', '02:25:44', 'j bfljvbfdkbk fdn', 'jcbdjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj'),
(69, 'carmen.velasco.guijarro@gmail.com', 'espana', 'europa', '2020-02-09', '02:25:49', 'j bfljvbfdkbk fdn', 'jcbdjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj'),
(70, 'carmen.velasco.guijarro@gmail.com', 'espana', 'europa', '2020-02-09', '02:29:08', 'j bfljvbfdkbk fdn', 'jcbdjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj'),
(71, 'carmen.velasco.guijarro@gmail.com', 'espana', 'europa', '2020-02-09', '02:29:16', 'j bfljvbfdkbk fdn', 'jcbdjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj'),
(72, 'carmen.velasco.guijarro@gmail.com', 'espana', 'europa', '2020-02-09', '02:29:26', 'j bfljvbfdkbk fdn', 'jcbdjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj'),
(73, 'carmen.velasco.guijarro@gmail.com', 'espana', 'europa', '2020-02-09', '02:30:36', 'j bfljvbfdkbk fdn', 'jcbdjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj'),
(81, 'Itoga21.it@gmail.com', 'alemania', 'europa', '2020-02-09', '04:15:32', 'iguguguil', 'Holaygreygviyrevygevyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy'),
(82, 'Itoga21.it@gmail.com', 'espana', 'europa', '2020-02-09', '04:20:21', 'furgfiueroi', 'iodhiogÂ´teiojjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj'),
(83, 'Itoga21.it@gmail.com', 'espana', 'europa', '2020-02-09', '04:22:21', 'furgfiueroi', 'iodhiogÂ´teiojjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj'),
(84, 'Itoga21.it@gmail.com', 'espana', 'europa', '2020-02-09', '04:23:00', 'furgfiueroi', 'iodhiogÂ´teiojjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj'),
(85, 'Itoga21.it@gmail.com', 'espana', 'europa', '2020-02-09', '04:24:02', 'furgfiueroi', 'iodhiogÂ´teiojjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj'),
(86, 'Itoga21.it@gmail.com', 'espana', 'europa', '2020-02-09', '05:00:40', 'fbuwrbvufb', 'adiosyceviuervhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(87, 'Itoga21.it@gmail.com', 'alemania', 'europa', '2020-02-09', '05:06:27', 'vjfbvbgoub', 'alemania9gregvuehrvuhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(88, 'Itoga21.it@gmail.com', 'alemania', 'europa', '2020-02-09', '05:07:41', 'vffdvfd', 'gsuvvvvvvsidvgugsduggvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv'),
(89, 'Itoga21.it@gmail.com', 'alemania', 'europa', '2020-02-09', '05:07:50', 'vffdvfd', 'gsuvvvvvvsidvgugsduggvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv'),
(90, 'Itoga21.it@gmail.com', 'austria', 'europa', '2020-02-09', '05:11:02', 'erregre', 'ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg'),
(91, 'Itoga21.it@gmail.com', 'suecia', 'europa', '2020-02-09', '05:22:49', 'frfregreg', 'sueciajjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj'),
(92, 'Itoga21.it@gmail.com', 'ucrania', 'europa', '2020-02-09', '05:23:17', 'ergverg', 'ucraniahhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(93, 'Itoga21.it@gmail.com', 'paisesBajos', 'europa', '2020-02-09', '05:23:46', 'dwedrfref', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj'),
(94, 'Itoga21.it@gmail.com', 'liechtenstein', 'europa', '2020-02-09', '05:24:14', 'edewfreferfre', 'rarohhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(95, 'Itoga21.it@gmail.com', 'reinoUnido', 'europa', '2020-02-09', '05:24:44', 'freferfwfr', 'runidohhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(96, 'Itoga21.it@gmail.com', 'repCheca', 'europa', '2020-02-09', '05:25:04', 'rjferjvbre', 'repchecahhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(97, 'Itoga21.it@gmail.com', 'repCheca', 'europa', '2020-02-09', '05:26:28', 'rjferjvbre', 'repchecahhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(98, 'Itoga21.it@gmail.com', 'repCheca', 'europa', '2020-02-09', '06:30:58', 'rjferjvbre', 'repchecahhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(99, '', 'letonia', 'europa', '2020-02-10', '08:13:53', 'Jere pollo', 'fugrwufgourwgfourgufrugeryyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy'),
(100, 'Itoga21.it@gmail.com', 'albania', 'europa', '2020-02-10', '08:19:55', 'POLLOae', 'Mi experiencia es que el administrador es un tonto, y nunca te atiende como deberÃ­a, ademÃ¡s su compaÃ±ero de al lado, llamado jeremy es un tontoasfasfasdfsssssssssssssssssssssssssssssssssss'),
(101, '', 'bulgaria', 'europa', '2020-02-12', '09:53:08', 'wrgrherher', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(102, 'Itoga21.it@gmail.com', 'albania', 'europa', '2020-03-04', '10:32:57', 'cerogofege', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj'),
(103, 'Itoga21.it@gmail.com', 'finlandia', 'europa', '2020-09-17', '12:24:11', 'Una tonteria', 'ewiogfÃ±herihgqergyerighoierhggerfreeeeeeeeeeeeeeeeeeeeee'),
(104, 'Itoga21.it@gmail.com', 'finlandia', 'europa', '2020-09-17', '12:46:58', 'cjbjkvb', 'jkcvdcvhjvdchjusddddddddddddddddddddddddddrbbbbbbbbbbbbbbbb'),
(105, 'Itoga21.it@gmail.com', 'finlandia', 'europa', '2020-09-17', '12:47:12', 'cjbjkvb', 'jkcvdcvhjvdchjusddddddddddddddddddddddddddrbbbbbbbbbbbbbbbb'),
(106, '', 'polonia', 'europa', '2020-09-22', '01:34:15', 'Polonia', 'diufguewgfuiwgeuifgwuegfuwgeufgewurfguiervgeiuvgiuegwviugeriugviuwegivugeiugviugweiuvwerv'),
(107, 'Itoga21.it@gmail.com', '', '', '2020-09-22', '01:36:40', 'cbwjvow', 'bcjwbvbworgvouegbuivbuegbvouwgeruogvouegvuwgoerugvougeruogvoerverbe'),
(108, 'ivantorresgarcia.02@gmail.com', 'espana', 'europa', '2021-03-26', '03:55:04', 'Holadedede', 'Que taldddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd'),
(109, 'ivantorresgarcia.02@gmail.com', '', '', '2021-03-26', '03:56:33', 'HOLAAAAAAAAAAAAAAAAAAA', 'dedeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee'),
(110, 'ivantorresgarcia.02@gmail.com', '', '', '2021-03-26', '03:56:44', 'HOLAAAAAAAAAAAAAAAAAAA', 'dedeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee'),
(111, '', '', '', '2021-06-16', '01:02:42', 'dewdewdw', 'eddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd'),
(112, '', '', '', '2021-06-16', '01:02:50', 'dewdewdw', 'eddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd');

-- --------------------------------------------------------

--
-- Table structure for table `problemas`
--

CREATE TABLE `problemas` (
  `id_problema` int(8) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `problema` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `problemas`
--

INSERT INTO `problemas` (`id_problema`, `usuario`, `fecha`, `hora`, `problema`) VALUES
(1, 'carmen.velasco.guijarro@gmail.com', '2020-02-08', '16:49:03', 'Hola soy Carmen \r\nhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(2, 'Itoga21.it@gmail.com', '2020-03-04', '10:29:30', 'gfourwgowhoiugeroigboierhoighberoigbvehrbheohooteboongrnthyntnrtnr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `problemas`
--
ALTER TABLE `problemas`
  ADD PRIMARY KEY (`id_problema`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `paises`
--
ALTER TABLE `paises`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `problemas`
--
ALTER TABLE `problemas`
  MODIFY `id_problema` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
