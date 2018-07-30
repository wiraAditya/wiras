-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2018 at 02:35 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pertanahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `analisa`
--

CREATE TABLE `analisa` (
  `idAnalisa` int(11) NOT NULL,
  `idTanaman` int(11) NOT NULL,
  `idJenis` int(11) NOT NULL,
  `idPh` int(11) NOT NULL,
  `idSuhu` int(11) NOT NULL,
  `idKedalaman` int(11) NOT NULL,
  `kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `analisa`
--

INSERT INTO `analisa` (`idAnalisa`, `idTanaman`, `idJenis`, `idPh`, `idSuhu`, `idKedalaman`, `kelas`) VALUES
(1, 1, 4, 2, 1, 1, 'Tidak Cocok'),
(2, 1, 4, 1, 1, 1, 'Tidak Cocok'),
(3, 1, 4, 3, 1, 1, 'Tidak Cocok'),
(4, 1, 4, 4, 1, 1, 'Tidak Cocok'),
(5, 1, 4, 5, 1, 1, 'Tidak Cocok'),
(6, 1, 4, 2, 2, 1, 'Tidak Cocok'),
(7, 1, 4, 1, 2, 1, 'Tidak Cocok'),
(8, 1, 4, 3, 2, 1, 'Tidak Cocok'),
(9, 1, 4, 4, 2, 1, 'Tidak Cocok'),
(10, 1, 4, 5, 2, 1, 'Tidak Cocok'),
(11, 1, 4, 2, 3, 1, 'Tidak Cocok'),
(12, 1, 4, 1, 3, 1, 'Tidak Cocok'),
(13, 1, 4, 3, 3, 1, 'Tidak Cocok'),
(14, 1, 4, 4, 3, 1, 'Tidak Cocok'),
(15, 1, 4, 5, 3, 1, 'Tidak Cocok'),
(16, 1, 4, 2, 1, 2, 'Cocok'),
(17, 1, 4, 1, 1, 2, 'Tidak Cocok'),
(18, 1, 4, 3, 1, 2, 'Cocok'),
(19, 1, 4, 4, 1, 2, 'Cocok'),
(20, 1, 4, 5, 1, 2, 'Tidak Cocok'),
(21, 1, 4, 2, 2, 2, 'Cocok'),
(22, 1, 4, 1, 2, 2, 'Tidak Cocok'),
(23, 1, 4, 3, 2, 2, 'Cocok'),
(24, 1, 4, 4, 2, 2, 'Cocok'),
(25, 1, 4, 5, 2, 2, 'Tidak Cocok'),
(26, 1, 4, 2, 3, 2, 'Cocok'),
(27, 1, 4, 1, 3, 2, 'Tidak Cocok'),
(28, 1, 4, 3, 3, 2, 'Cocok'),
(29, 1, 4, 4, 3, 2, 'Cocok'),
(30, 1, 4, 5, 3, 2, 'Tidak Cocok'),
(31, 1, 4, 2, 1, 3, 'Cocok'),
(32, 1, 4, 1, 1, 3, 'Tidak Cocok'),
(33, 1, 4, 3, 1, 3, 'Cocok'),
(34, 1, 4, 4, 1, 3, 'Cocok'),
(35, 1, 4, 5, 1, 3, 'Tidak Cocok'),
(36, 1, 4, 2, 2, 3, 'Cocok'),
(37, 1, 4, 1, 2, 3, 'Tidak Cocok'),
(38, 1, 4, 3, 2, 3, 'Cocok'),
(39, 1, 4, 4, 2, 3, 'Cocok'),
(40, 1, 4, 5, 2, 3, 'Tidak Cocok'),
(41, 1, 4, 2, 3, 3, 'Cocok'),
(42, 1, 4, 1, 3, 3, 'Tidak Cocok'),
(43, 1, 4, 3, 3, 3, 'Cocok'),
(44, 1, 4, 4, 3, 3, 'Cocok'),
(45, 1, 4, 5, 3, 3, 'Tidak Cocok'),
(46, 1, 1, 2, 1, 1, 'Tidak Cocok'),
(47, 1, 1, 1, 1, 1, 'Tidak Cocok'),
(48, 1, 1, 3, 1, 1, 'Tidak Cocok'),
(49, 1, 1, 4, 1, 1, 'Tidak Cocok'),
(50, 1, 1, 5, 1, 1, 'Tidak Cocok'),
(51, 1, 1, 2, 2, 1, 'Tidak Cocok'),
(52, 1, 1, 1, 2, 1, 'Tidak Cocok'),
(53, 1, 1, 3, 2, 1, 'Tidak Cocok'),
(54, 1, 1, 4, 2, 1, 'Tidak Cocok'),
(55, 1, 1, 5, 2, 1, 'Tidak Cocok'),
(56, 1, 1, 2, 3, 1, 'Tidak Cocok'),
(57, 1, 1, 1, 3, 1, 'Tidak Cocok'),
(58, 1, 1, 3, 3, 1, 'Tidak Cocok'),
(59, 1, 1, 4, 3, 1, 'Tidak Cocok'),
(60, 1, 1, 5, 3, 1, 'Tidak Cocok'),
(61, 1, 1, 2, 1, 2, 'Tidak Cocok'),
(62, 1, 1, 1, 1, 2, 'Tidak Cocok'),
(63, 1, 1, 3, 1, 2, 'Tidak Cocok'),
(64, 1, 1, 4, 1, 2, 'Tidak Cocok'),
(65, 1, 1, 5, 1, 2, 'Tidak Cocok'),
(66, 1, 1, 2, 2, 2, 'Tidak Cocok'),
(67, 1, 1, 1, 2, 2, 'Tidak Cocok'),
(68, 1, 1, 3, 2, 2, 'Tidak Cocok'),
(69, 1, 1, 4, 2, 2, 'Tidak Cocok'),
(70, 1, 1, 5, 2, 2, 'Tidak Cocok'),
(71, 1, 1, 2, 3, 2, 'Tidak Cocok'),
(72, 1, 1, 1, 3, 2, 'Tidak Cocok'),
(73, 1, 1, 3, 3, 2, 'Tidak Cocok'),
(74, 1, 1, 4, 3, 2, 'Tidak Cocok'),
(75, 1, 1, 5, 3, 2, 'Tidak Cocok'),
(76, 1, 1, 2, 1, 3, 'Tidak Cocok'),
(77, 1, 1, 1, 1, 3, 'Tidak Cocok'),
(78, 1, 1, 3, 1, 3, 'Tidak Cocok'),
(79, 1, 1, 4, 1, 3, 'Tidak Cocok'),
(80, 1, 1, 5, 1, 3, 'Tidak Cocok'),
(81, 1, 1, 2, 2, 3, 'Tidak Cocok'),
(82, 1, 1, 1, 2, 3, 'Tidak Cocok'),
(83, 1, 1, 3, 2, 3, 'Tidak Cocok'),
(84, 1, 1, 4, 2, 3, 'Tidak Cocok'),
(85, 1, 1, 5, 2, 3, 'Tidak Cocok'),
(86, 1, 1, 2, 3, 3, 'Tidak Cocok'),
(87, 1, 1, 1, 3, 3, 'Tidak Cocok'),
(88, 1, 1, 3, 3, 3, 'Tidak Cocok'),
(89, 1, 1, 4, 3, 3, 'Tidak Cocok'),
(90, 1, 1, 5, 3, 3, 'Tidak Cocok'),
(91, 1, 2, 2, 1, 1, 'Tidak Cocok'),
(92, 1, 2, 1, 1, 1, 'Tidak Cocok'),
(93, 1, 2, 3, 1, 1, 'Tidak Cocok'),
(94, 1, 2, 4, 1, 1, 'Tidak Cocok'),
(95, 1, 2, 5, 1, 1, 'Tidak Cocok'),
(96, 1, 2, 2, 2, 1, 'Tidak Cocok'),
(97, 1, 2, 1, 2, 1, 'Tidak Cocok'),
(98, 1, 2, 3, 2, 1, 'Tidak Cocok'),
(99, 1, 2, 4, 2, 1, 'Tidak Cocok'),
(100, 1, 2, 5, 2, 1, 'Tidak Cocok'),
(101, 1, 2, 2, 3, 1, 'Tidak Cocok'),
(102, 1, 2, 1, 3, 1, 'Tidak Cocok'),
(103, 1, 2, 3, 3, 1, 'Tidak Cocok'),
(104, 1, 2, 4, 3, 1, 'Tidak Cocok'),
(105, 1, 2, 5, 3, 1, 'Tidak Cocok'),
(106, 1, 2, 2, 1, 2, 'Cocok'),
(107, 1, 2, 1, 1, 2, 'Tidak Cocok'),
(108, 1, 2, 3, 1, 2, 'Cocok'),
(109, 1, 2, 4, 1, 2, 'Cocok'),
(110, 1, 2, 5, 1, 2, 'Tidak Cocok'),
(111, 1, 2, 2, 2, 2, 'Cocok'),
(112, 1, 2, 1, 2, 2, 'Tidak Cocok'),
(113, 1, 2, 3, 2, 2, 'Cocok'),
(114, 1, 2, 4, 2, 2, 'Cocok'),
(115, 1, 2, 5, 2, 2, 'Tidak Cocok'),
(116, 1, 2, 2, 3, 2, 'Cocok'),
(117, 1, 2, 1, 3, 2, 'Tidak Cocok'),
(118, 1, 2, 3, 3, 2, 'Cocok'),
(119, 1, 2, 4, 3, 2, 'Cocok'),
(120, 1, 2, 5, 3, 2, 'Tidak Cocok'),
(121, 1, 2, 2, 1, 3, 'Cocok'),
(122, 1, 2, 1, 1, 3, 'Tidak Cocok'),
(123, 1, 2, 3, 1, 3, 'Cocok'),
(124, 1, 2, 4, 1, 3, 'Cocok'),
(125, 1, 2, 5, 1, 3, 'Tidak Cocok'),
(126, 1, 2, 2, 2, 3, 'Cocok'),
(127, 1, 2, 1, 2, 3, 'Tidak Cocok'),
(128, 1, 2, 3, 2, 3, 'Cocok'),
(129, 1, 2, 4, 2, 3, 'Cocok'),
(130, 1, 2, 5, 2, 3, 'Tidak Cocok'),
(131, 1, 2, 2, 3, 3, 'Cocok'),
(132, 1, 2, 1, 3, 3, 'Tidak Cocok'),
(133, 1, 2, 3, 3, 3, 'Cocok'),
(134, 1, 2, 4, 3, 3, 'Cocok'),
(135, 1, 2, 5, 3, 3, 'Tidak Cocok'),
(136, 1, 3, 2, 1, 1, 'Tidak Cocok'),
(137, 1, 3, 1, 1, 1, 'Tidak Cocok'),
(138, 1, 3, 3, 1, 1, 'Tidak Cocok'),
(139, 1, 3, 4, 1, 1, 'Tidak Cocok'),
(140, 1, 3, 5, 1, 1, 'Tidak Cocok'),
(141, 1, 3, 2, 2, 1, 'Tidak Cocok'),
(142, 1, 3, 1, 2, 1, 'Tidak Cocok'),
(143, 1, 3, 3, 2, 1, 'Tidak Cocok'),
(144, 1, 3, 4, 2, 1, 'Tidak Cocok'),
(145, 1, 3, 5, 2, 1, 'Tidak Cocok'),
(146, 1, 3, 2, 3, 1, 'Tidak Cocok'),
(147, 1, 3, 1, 3, 1, 'Tidak Cocok'),
(148, 1, 3, 3, 3, 1, 'Tidak Cocok'),
(149, 1, 3, 4, 3, 1, 'Tidak Cocok'),
(150, 1, 3, 5, 3, 1, 'Tidak Cocok'),
(151, 1, 3, 2, 1, 2, 'Tidak Cocok'),
(152, 1, 3, 1, 1, 2, 'Tidak Cocok'),
(153, 1, 3, 3, 1, 2, 'Tidak Cocok'),
(154, 1, 3, 4, 1, 2, 'Tidak Cocok'),
(155, 1, 3, 5, 1, 2, 'Tidak Cocok'),
(156, 1, 3, 2, 2, 2, 'Tidak Cocok'),
(157, 1, 3, 1, 2, 2, 'Tidak Cocok'),
(158, 1, 3, 3, 2, 2, 'Tidak Cocok'),
(159, 1, 3, 4, 2, 2, 'Tidak Cocok'),
(160, 1, 3, 5, 2, 2, 'Tidak Cocok'),
(161, 1, 3, 2, 3, 2, 'Tidak Cocok'),
(162, 1, 3, 1, 3, 2, 'Tidak Cocok'),
(163, 1, 3, 3, 3, 2, 'Tidak Cocok'),
(164, 1, 3, 4, 3, 2, 'Tidak Cocok'),
(165, 1, 3, 5, 3, 2, 'Tidak Cocok'),
(166, 1, 3, 2, 1, 3, 'Tidak Cocok'),
(167, 1, 3, 1, 1, 3, 'Tidak Cocok'),
(168, 1, 3, 3, 1, 3, 'Tidak Cocok'),
(169, 1, 3, 4, 1, 3, 'Tidak Cocok'),
(170, 1, 3, 5, 1, 3, 'Tidak Cocok'),
(171, 1, 3, 2, 2, 3, 'Tidak Cocok'),
(172, 1, 3, 1, 2, 3, 'Tidak Cocok'),
(173, 1, 3, 3, 2, 3, 'Tidak Cocok'),
(174, 1, 3, 4, 2, 3, 'Tidak Cocok'),
(175, 1, 3, 5, 2, 3, 'Tidak Cocok'),
(176, 1, 3, 2, 3, 3, 'Tidak Cocok'),
(177, 1, 3, 1, 3, 3, 'Tidak Cocok'),
(178, 1, 3, 3, 3, 3, 'Tidak Cocok'),
(179, 1, 3, 4, 3, 3, 'Tidak Cocok'),
(180, 1, 3, 5, 3, 3, 'Tidak Cocok'),
(181, 1, 5, 2, 1, 1, 'Tidak Cocok'),
(182, 1, 5, 1, 1, 1, 'Tidak Cocok'),
(183, 1, 5, 3, 1, 1, 'Tidak Cocok'),
(184, 1, 5, 4, 1, 1, 'Tidak Cocok'),
(185, 1, 5, 5, 1, 1, 'Tidak Cocok'),
(186, 1, 5, 2, 2, 1, 'Tidak Cocok'),
(187, 1, 5, 1, 2, 1, 'Tidak Cocok'),
(188, 1, 5, 3, 2, 1, 'Tidak Cocok'),
(189, 1, 5, 4, 2, 1, 'Tidak Cocok'),
(190, 1, 5, 5, 2, 1, 'Tidak Cocok'),
(191, 1, 5, 2, 3, 1, 'Tidak Cocok'),
(192, 1, 5, 1, 3, 1, 'Tidak Cocok'),
(193, 1, 5, 3, 3, 1, 'Tidak Cocok'),
(194, 1, 5, 4, 3, 1, 'Tidak Cocok'),
(195, 1, 5, 5, 3, 1, 'Tidak Cocok'),
(196, 1, 5, 2, 1, 2, 'Cocok'),
(197, 1, 5, 1, 1, 2, 'Tidak Cocok'),
(198, 1, 5, 3, 1, 2, 'Cocok'),
(199, 1, 5, 4, 1, 2, 'Cocok'),
(200, 1, 5, 5, 1, 2, 'Tidak Cocok'),
(201, 1, 5, 2, 2, 2, 'Cocok'),
(202, 1, 5, 1, 2, 2, 'Tidak Cocok'),
(203, 1, 5, 3, 2, 2, 'Cocok'),
(204, 1, 5, 4, 2, 2, 'Cocok'),
(205, 1, 5, 5, 2, 2, 'Tidak Cocok'),
(206, 1, 5, 2, 3, 2, 'Cocok'),
(207, 1, 5, 1, 3, 2, 'Tidak Cocok'),
(208, 1, 5, 3, 3, 2, 'Cocok'),
(209, 1, 5, 4, 3, 2, 'Cocok'),
(210, 1, 5, 5, 3, 2, 'Tidak Cocok'),
(211, 1, 5, 2, 1, 3, 'Cocok'),
(212, 1, 5, 1, 1, 3, 'Tidak Cocok'),
(213, 1, 5, 3, 1, 3, 'Tidak Cocok'),
(214, 1, 5, 4, 1, 3, 'Cocok'),
(215, 1, 5, 5, 1, 3, 'Tidak Cocok'),
(216, 1, 5, 2, 2, 3, 'Cocok'),
(217, 1, 5, 1, 2, 3, 'Tidak Cocok'),
(218, 1, 5, 3, 2, 3, 'Cocok'),
(219, 1, 5, 4, 2, 3, 'Cocok'),
(220, 1, 5, 5, 2, 3, 'Tidak Cocok'),
(221, 1, 5, 2, 3, 3, 'Cocok'),
(222, 1, 5, 1, 3, 3, 'Tidak Cocok'),
(223, 1, 5, 3, 3, 3, 'Cocok'),
(224, 1, 5, 4, 3, 3, 'Cocok'),
(225, 1, 5, 5, 3, 3, 'Tidak Cocok'),
(226, 1, 6, 2, 1, 1, 'Tidak Cocok'),
(227, 1, 6, 1, 1, 1, 'Tidak Cocok'),
(228, 1, 6, 3, 1, 1, 'Tidak Cocok'),
(229, 1, 6, 4, 1, 1, 'Tidak Cocok'),
(230, 1, 6, 5, 1, 1, 'Tidak Cocok'),
(231, 1, 6, 2, 2, 1, 'Tidak Cocok'),
(232, 1, 6, 1, 2, 1, 'Tidak Cocok'),
(233, 1, 6, 3, 2, 1, 'Tidak Cocok'),
(234, 1, 6, 4, 2, 1, 'Tidak Cocok'),
(235, 1, 6, 5, 2, 1, 'Tidak Cocok'),
(236, 1, 6, 2, 3, 1, 'Tidak Cocok'),
(237, 1, 6, 1, 3, 1, 'Tidak Cocok'),
(238, 1, 6, 3, 3, 1, 'Tidak Cocok'),
(239, 1, 6, 4, 3, 1, 'Tidak Cocok'),
(240, 1, 6, 5, 3, 1, 'Tidak Cocok'),
(241, 1, 6, 2, 1, 2, 'Cocok'),
(242, 1, 6, 1, 1, 2, 'Tidak Cocok'),
(243, 1, 6, 3, 1, 2, 'Cocok'),
(244, 1, 6, 4, 1, 2, 'Cocok'),
(245, 1, 6, 5, 1, 2, 'Tidak Cocok'),
(246, 1, 6, 2, 2, 2, 'Cocok'),
(247, 1, 6, 1, 2, 2, 'Tidak Cocok'),
(248, 1, 6, 3, 2, 2, 'Cocok'),
(249, 1, 6, 4, 2, 2, 'Cocok'),
(250, 1, 6, 5, 2, 2, 'Tidak Cocok'),
(251, 1, 6, 2, 3, 2, 'Cocok'),
(252, 1, 6, 1, 3, 2, 'Tidak Cocok'),
(253, 1, 6, 3, 3, 2, 'Cocok'),
(254, 1, 6, 4, 3, 2, 'Cocok'),
(255, 1, 6, 5, 3, 2, 'Tidak Cocok'),
(256, 1, 6, 2, 1, 3, 'Cocok'),
(257, 1, 6, 1, 1, 3, 'Tidak Cocok'),
(258, 1, 6, 3, 1, 3, 'Cocok'),
(259, 1, 6, 4, 1, 3, 'Cocok'),
(260, 1, 6, 5, 1, 3, 'Tidak Cocok'),
(261, 1, 6, 2, 2, 3, 'Cocok'),
(262, 1, 6, 1, 2, 3, 'Tidak Cocok'),
(263, 1, 6, 3, 2, 3, 'Cocok'),
(264, 1, 6, 4, 2, 3, 'Cocok'),
(265, 1, 6, 5, 2, 3, 'Tidak Cocok'),
(266, 1, 6, 2, 3, 3, 'Cocok'),
(267, 1, 6, 1, 3, 3, 'Tidak Cocok'),
(268, 1, 6, 3, 3, 3, 'Cocok'),
(269, 1, 6, 4, 3, 3, 'Cocok'),
(270, 1, 6, 5, 3, 3, 'Tidak Cocok'),
(271, 1, 7, 2, 1, 1, 'Tidak Cocok'),
(272, 1, 7, 1, 1, 1, 'Tidak Cocok'),
(273, 1, 7, 3, 1, 1, 'Tidak Cocok'),
(274, 1, 7, 4, 1, 1, 'Tidak Cocok'),
(275, 1, 7, 5, 1, 1, 'Tidak Cocok'),
(276, 1, 7, 2, 2, 1, 'Tidak Cocok'),
(277, 1, 7, 1, 2, 1, 'Tidak Cocok'),
(278, 1, 7, 3, 2, 1, 'Tidak Cocok'),
(279, 1, 7, 4, 2, 1, 'Tidak Cocok'),
(280, 1, 7, 5, 2, 1, 'Tidak Cocok'),
(281, 1, 7, 2, 3, 1, 'Tidak Cocok'),
(282, 1, 7, 1, 3, 1, 'Tidak Cocok'),
(283, 1, 7, 3, 3, 1, 'Tidak Cocok'),
(284, 1, 7, 4, 3, 1, 'Tidak Cocok'),
(285, 1, 7, 5, 3, 1, 'Tidak Cocok'),
(286, 1, 7, 2, 1, 2, 'Tidak Cocok'),
(287, 1, 7, 1, 1, 2, 'Tidak Cocok'),
(288, 1, 7, 3, 1, 2, 'Tidak Cocok'),
(289, 1, 7, 4, 1, 2, 'Tidak Cocok'),
(290, 1, 7, 5, 1, 2, 'Tidak Cocok'),
(291, 1, 7, 2, 2, 2, 'Tidak Cocok'),
(292, 1, 7, 1, 2, 2, 'Tidak Cocok'),
(293, 1, 7, 3, 2, 2, 'Tidak Cocok'),
(294, 1, 7, 4, 2, 2, 'Tidak Cocok'),
(295, 1, 7, 5, 2, 2, 'Tidak Cocok'),
(296, 1, 7, 2, 3, 2, 'Tidak Cocok'),
(297, 1, 7, 1, 3, 2, 'Tidak Cocok'),
(298, 1, 7, 3, 3, 2, 'Tidak Cocok'),
(299, 1, 7, 4, 3, 2, 'Tidak Cocok'),
(300, 1, 7, 5, 3, 2, 'Tidak Cocok'),
(301, 1, 7, 2, 1, 3, 'Tidak Cocok'),
(302, 1, 7, 1, 1, 3, 'Tidak Cocok'),
(303, 1, 7, 3, 1, 3, 'Tidak Cocok'),
(304, 1, 7, 4, 1, 3, 'Tidak Cocok'),
(305, 1, 7, 5, 1, 3, 'Tidak Cocok'),
(306, 1, 7, 2, 2, 3, 'Tidak Cocok'),
(307, 1, 7, 1, 2, 3, 'Tidak Cocok'),
(308, 1, 7, 3, 2, 3, 'Tidak Cocok'),
(309, 1, 7, 4, 2, 3, 'Tidak Cocok'),
(310, 1, 7, 5, 2, 3, 'Tidak Cocok'),
(311, 1, 7, 2, 3, 3, 'Tidak Cocok'),
(312, 1, 7, 1, 3, 3, 'Tidak Cocok'),
(313, 1, 7, 3, 3, 3, 'Tidak Cocok'),
(314, 1, 7, 4, 3, 3, 'Tidak Cocok'),
(315, 1, 7, 5, 3, 3, 'Tidak Cocok'),
(316, 2, 4, 2, 1, 1, 'Cocok'),
(317, 2, 4, 1, 1, 1, 'Tidak Cocok'),
(318, 2, 4, 3, 1, 1, 'Cocok'),
(319, 2, 4, 4, 1, 1, 'Tidak Cocok'),
(320, 2, 4, 5, 1, 1, 'Tidak Cocok'),
(321, 2, 4, 2, 2, 1, 'Cocok'),
(322, 2, 4, 1, 2, 1, 'Tidak Cocok'),
(323, 2, 4, 3, 2, 1, 'Cocok'),
(324, 2, 4, 4, 2, 1, 'Tidak Cocok'),
(325, 2, 4, 5, 2, 1, 'Tidak Cocok'),
(326, 2, 4, 2, 3, 1, 'Tidak Cocok'),
(327, 2, 4, 1, 3, 1, 'Tidak Cocok'),
(328, 2, 4, 3, 3, 1, 'Tidak Cocok'),
(329, 2, 4, 4, 3, 1, 'Tidak Cocok'),
(330, 2, 4, 5, 3, 1, 'Tidak Cocok'),
(331, 2, 4, 2, 1, 2, 'Cocok'),
(332, 2, 4, 1, 1, 2, 'Tidak Cocok'),
(333, 2, 4, 3, 1, 2, 'Cocok'),
(334, 2, 4, 4, 1, 2, 'Tidak Cocok'),
(335, 2, 4, 5, 1, 2, 'Tidak Cocok'),
(336, 2, 4, 2, 2, 2, 'Cocok'),
(337, 2, 4, 1, 2, 2, 'Tidak Cocok'),
(338, 2, 4, 3, 2, 2, 'Cocok'),
(339, 2, 4, 4, 2, 2, 'Tidak Cocok'),
(340, 2, 4, 5, 2, 2, 'Tidak Cocok'),
(341, 2, 4, 2, 3, 2, 'Tidak Cocok'),
(342, 2, 4, 1, 3, 2, 'Tidak Cocok'),
(343, 2, 4, 3, 3, 2, 'Tidak Cocok'),
(344, 2, 4, 4, 3, 2, 'Tidak Cocok'),
(345, 2, 4, 5, 3, 2, 'Tidak Cocok'),
(346, 2, 4, 2, 1, 3, 'Tidak Cocok'),
(347, 2, 4, 1, 1, 3, 'Tidak Cocok'),
(348, 2, 4, 3, 1, 3, 'Tidak Cocok'),
(349, 2, 4, 4, 1, 3, 'Tidak Cocok'),
(350, 2, 4, 5, 1, 3, 'Tidak Cocok'),
(351, 2, 4, 2, 2, 3, 'Tidak Cocok'),
(352, 2, 4, 1, 2, 3, 'Tidak Cocok'),
(353, 2, 4, 3, 2, 3, 'Tidak Cocok'),
(354, 2, 4, 4, 2, 3, 'Tidak Cocok'),
(355, 2, 4, 5, 2, 3, 'Tidak Cocok'),
(356, 2, 4, 2, 3, 3, 'Tidak Cocok'),
(357, 2, 4, 1, 3, 3, 'Tidak Cocok'),
(358, 2, 4, 3, 3, 3, 'Tidak Cocok'),
(359, 2, 4, 4, 3, 3, 'Tidak Cocok'),
(360, 2, 4, 5, 3, 3, 'Tidak Cocok'),
(361, 2, 1, 2, 1, 1, 'Tidak Cocok'),
(362, 2, 1, 1, 1, 1, 'Tidak Cocok'),
(363, 2, 1, 3, 1, 1, 'Tidak Cocok'),
(364, 2, 1, 4, 1, 1, 'Tidak Cocok'),
(365, 2, 1, 5, 1, 1, 'Tidak Cocok'),
(366, 2, 1, 2, 2, 1, 'Tidak Cocok'),
(367, 2, 1, 1, 2, 1, 'Tidak Cocok'),
(368, 2, 1, 3, 2, 1, 'Tidak Cocok'),
(369, 2, 1, 4, 2, 1, 'Tidak Cocok'),
(370, 2, 1, 5, 2, 1, 'Tidak Cocok'),
(371, 2, 1, 2, 3, 1, 'Tidak Cocok'),
(372, 2, 1, 1, 3, 1, 'Tidak Cocok'),
(373, 2, 1, 3, 3, 1, 'Tidak Cocok'),
(374, 2, 1, 4, 3, 1, 'Tidak Cocok'),
(375, 2, 1, 5, 3, 1, 'Tidak Cocok'),
(376, 2, 1, 2, 1, 2, 'Tidak Cocok'),
(377, 2, 1, 1, 1, 2, 'Tidak Cocok'),
(378, 2, 1, 3, 1, 2, 'Tidak Cocok'),
(379, 2, 1, 4, 1, 2, 'Tidak Cocok'),
(380, 2, 1, 5, 1, 2, 'Tidak Cocok'),
(381, 2, 1, 2, 2, 2, 'Tidak Cocok'),
(382, 2, 1, 1, 2, 2, 'Tidak Cocok'),
(383, 2, 1, 3, 2, 2, 'Tidak Cocok'),
(384, 2, 1, 4, 2, 2, 'Tidak Cocok'),
(385, 2, 1, 5, 2, 2, 'Tidak Cocok'),
(386, 2, 1, 2, 3, 2, 'Tidak Cocok'),
(387, 2, 1, 1, 3, 2, 'Tidak Cocok'),
(388, 2, 1, 3, 3, 2, 'Tidak Cocok'),
(389, 2, 1, 4, 3, 2, 'Tidak Cocok'),
(390, 2, 1, 5, 3, 2, 'Tidak Cocok'),
(391, 2, 1, 2, 1, 3, 'Tidak Cocok'),
(392, 2, 1, 1, 1, 3, 'Tidak Cocok'),
(393, 2, 1, 3, 1, 3, 'Tidak Cocok'),
(394, 2, 1, 4, 1, 3, 'Tidak Cocok'),
(395, 2, 1, 5, 1, 3, 'Tidak Cocok'),
(396, 2, 1, 2, 2, 3, 'Tidak Cocok'),
(397, 2, 1, 1, 2, 3, 'Tidak Cocok'),
(398, 2, 1, 3, 2, 3, 'Tidak Cocok'),
(399, 2, 1, 4, 2, 3, 'Tidak Cocok'),
(400, 2, 1, 5, 2, 3, 'Tidak Cocok'),
(401, 2, 1, 2, 3, 3, 'Tidak Cocok'),
(402, 2, 1, 1, 3, 3, 'Tidak Cocok'),
(403, 2, 1, 3, 3, 3, 'Tidak Cocok'),
(404, 2, 1, 4, 3, 3, 'Tidak Cocok'),
(405, 2, 1, 5, 3, 3, 'Tidak Cocok'),
(406, 2, 2, 2, 1, 1, 'Tidak Cocok'),
(407, 2, 2, 1, 1, 1, 'Tidak Cocok'),
(408, 2, 2, 3, 1, 1, 'Tidak Cocok'),
(409, 2, 2, 4, 1, 1, 'Tidak Cocok'),
(410, 2, 2, 5, 1, 1, 'Tidak Cocok'),
(411, 2, 2, 2, 2, 1, 'Tidak Cocok'),
(412, 2, 2, 1, 2, 1, 'Tidak Cocok'),
(413, 2, 2, 3, 2, 1, 'Tidak Cocok'),
(414, 2, 2, 4, 2, 1, 'Tidak Cocok'),
(415, 2, 2, 5, 2, 1, 'Tidak Cocok'),
(416, 2, 2, 2, 3, 1, 'Tidak Cocok'),
(417, 2, 2, 1, 3, 1, 'Tidak Cocok'),
(418, 2, 2, 3, 3, 1, 'Tidak Cocok'),
(419, 2, 2, 4, 3, 1, 'Tidak Cocok'),
(420, 2, 2, 5, 3, 1, 'Tidak Cocok'),
(421, 2, 2, 2, 1, 2, 'Tidak Cocok'),
(422, 2, 2, 1, 1, 2, 'Tidak Cocok'),
(423, 2, 2, 3, 1, 2, 'Tidak Cocok'),
(424, 2, 2, 4, 1, 2, 'Tidak Cocok'),
(425, 2, 2, 5, 1, 2, 'Tidak Cocok'),
(426, 2, 2, 2, 2, 2, 'Tidak Cocok'),
(427, 2, 2, 1, 2, 2, 'Tidak Cocok'),
(428, 2, 2, 3, 2, 2, 'Tidak Cocok'),
(429, 2, 2, 4, 2, 2, 'Tidak Cocok'),
(430, 2, 2, 5, 2, 2, 'Tidak Cocok'),
(431, 2, 2, 2, 3, 2, 'Tidak Cocok'),
(432, 2, 2, 1, 3, 2, 'Tidak Cocok'),
(433, 2, 2, 3, 3, 2, 'Tidak Cocok'),
(434, 2, 2, 4, 3, 2, 'Tidak Cocok'),
(435, 2, 2, 5, 3, 2, 'Tidak Cocok'),
(436, 2, 2, 2, 1, 3, 'Tidak Cocok'),
(437, 2, 2, 1, 1, 3, 'Tidak Cocok'),
(438, 2, 2, 3, 1, 3, 'Tidak Cocok'),
(439, 2, 2, 4, 1, 3, 'Tidak Cocok'),
(440, 2, 2, 5, 1, 3, 'Tidak Cocok'),
(441, 2, 2, 2, 2, 3, 'Tidak Cocok'),
(442, 2, 2, 1, 2, 3, 'Tidak Cocok'),
(443, 2, 2, 3, 2, 3, 'Tidak Cocok'),
(444, 2, 2, 4, 2, 3, 'Tidak Cocok'),
(445, 2, 2, 5, 2, 3, 'Tidak Cocok'),
(446, 2, 2, 2, 3, 3, 'Tidak Cocok'),
(447, 2, 2, 1, 3, 3, 'Tidak Cocok'),
(448, 2, 2, 3, 3, 3, 'Tidak Cocok'),
(449, 2, 2, 4, 3, 3, 'Tidak Cocok'),
(450, 2, 2, 5, 3, 3, 'Tidak Cocok'),
(451, 2, 3, 2, 1, 1, 'Cocok'),
(452, 2, 3, 1, 1, 1, 'Tidak Cocok'),
(453, 2, 3, 3, 1, 1, 'Cocok'),
(454, 2, 3, 4, 1, 1, 'Tidak Cocok'),
(455, 2, 3, 5, 1, 1, 'Tidak Cocok'),
(456, 2, 3, 2, 2, 1, 'Cocok'),
(457, 2, 3, 1, 2, 1, 'Tidak Cocok'),
(458, 2, 3, 3, 2, 1, 'Cocok'),
(459, 2, 3, 4, 2, 1, 'Tidak Cocok'),
(460, 2, 3, 5, 2, 1, 'Tidak Cocok'),
(461, 2, 3, 2, 3, 1, 'Tidak Cocok'),
(462, 2, 3, 1, 3, 1, 'Tidak Cocok'),
(463, 2, 3, 3, 3, 1, 'Tidak Cocok'),
(464, 2, 3, 4, 3, 1, 'Tidak Cocok'),
(465, 2, 3, 5, 3, 1, 'Tidak Cocok'),
(466, 2, 3, 2, 1, 2, 'Cocok'),
(467, 2, 3, 1, 1, 2, 'Tidak Cocok'),
(468, 2, 3, 3, 1, 2, 'Cocok'),
(469, 2, 3, 4, 1, 2, 'Tidak Cocok'),
(470, 2, 3, 5, 1, 2, 'Tidak Cocok'),
(471, 2, 3, 2, 2, 2, 'Cocok'),
(472, 2, 3, 1, 2, 2, 'Tidak Cocok'),
(473, 2, 3, 3, 2, 2, 'Cocok'),
(474, 2, 3, 4, 2, 2, 'Tidak Cocok'),
(475, 2, 3, 5, 2, 2, 'Tidak Cocok'),
(476, 2, 3, 2, 3, 2, 'Tidak Cocok'),
(477, 2, 3, 1, 3, 2, 'Tidak Cocok'),
(478, 2, 3, 3, 3, 2, 'Tidak Cocok'),
(479, 2, 3, 4, 3, 2, 'Tidak Cocok'),
(480, 2, 3, 5, 3, 2, 'Tidak Cocok'),
(481, 2, 3, 2, 1, 3, 'Tidak Cocok'),
(482, 2, 3, 1, 1, 3, 'Tidak Cocok'),
(483, 2, 3, 3, 1, 3, 'Tidak Cocok'),
(484, 2, 3, 4, 1, 3, 'Tidak Cocok'),
(485, 2, 3, 5, 1, 3, 'Tidak Cocok'),
(486, 2, 3, 2, 2, 3, 'Tidak Cocok'),
(487, 2, 3, 1, 2, 3, 'Tidak Cocok'),
(488, 2, 3, 3, 2, 3, 'Tidak Cocok'),
(489, 2, 3, 4, 2, 3, 'Tidak Cocok'),
(490, 2, 3, 5, 2, 3, 'Tidak Cocok'),
(491, 2, 3, 2, 3, 3, 'Tidak Cocok'),
(492, 2, 3, 1, 3, 3, 'Tidak Cocok'),
(493, 2, 3, 3, 3, 3, 'Tidak Cocok'),
(494, 2, 3, 4, 3, 3, 'Tidak Cocok'),
(495, 2, 3, 5, 3, 3, 'Tidak Cocok'),
(496, 2, 5, 2, 1, 1, 'Cocok'),
(497, 2, 5, 1, 1, 1, 'Tidak Cocok'),
(498, 2, 5, 3, 1, 1, 'Cocok'),
(499, 2, 5, 4, 1, 1, 'Tidak Cocok'),
(500, 2, 5, 5, 1, 1, 'Tidak Cocok'),
(501, 2, 5, 2, 2, 1, 'Cocok'),
(502, 2, 5, 1, 2, 1, 'Tidak Cocok'),
(503, 2, 5, 3, 2, 1, 'Cocok'),
(504, 2, 5, 4, 2, 1, 'Tidak Cocok'),
(505, 2, 5, 5, 2, 1, 'Tidak Cocok'),
(506, 2, 5, 2, 3, 1, 'Tidak Cocok'),
(507, 2, 5, 1, 3, 1, 'Tidak Cocok'),
(508, 2, 5, 3, 3, 1, 'Tidak Cocok'),
(509, 2, 5, 4, 3, 1, 'Tidak Cocok'),
(510, 2, 5, 5, 3, 1, 'Tidak Cocok'),
(511, 2, 5, 2, 1, 2, 'Cocok'),
(512, 2, 5, 1, 1, 2, 'Tidak Cocok'),
(513, 2, 5, 3, 1, 2, 'Cocok'),
(514, 2, 5, 4, 1, 2, 'Tidak Cocok'),
(515, 2, 5, 5, 1, 2, 'Tidak Cocok'),
(516, 2, 5, 2, 2, 2, 'Cocok'),
(517, 2, 5, 1, 2, 2, 'Tidak Cocok'),
(518, 2, 5, 3, 2, 2, 'Cocok'),
(519, 2, 5, 4, 2, 2, 'Tidak Cocok'),
(520, 2, 5, 5, 2, 2, 'Tidak Cocok'),
(521, 2, 5, 2, 3, 2, 'Tidak Cocok'),
(522, 2, 5, 1, 3, 2, 'Tidak Cocok'),
(523, 2, 5, 3, 3, 2, 'Tidak Cocok'),
(524, 2, 5, 4, 3, 2, 'Tidak Cocok'),
(525, 2, 5, 5, 3, 2, 'Tidak Cocok'),
(526, 2, 5, 2, 1, 3, 'Tidak Cocok'),
(527, 2, 5, 1, 1, 3, 'Tidak Cocok'),
(528, 2, 5, 3, 1, 3, 'Tidak Cocok'),
(529, 2, 5, 4, 1, 3, 'Tidak Cocok'),
(530, 2, 5, 5, 1, 3, 'Tidak Cocok'),
(531, 2, 5, 2, 2, 3, 'Tidak Cocok'),
(532, 2, 5, 1, 2, 3, 'Tidak Cocok'),
(533, 2, 5, 3, 2, 3, 'Tidak Cocok'),
(534, 2, 5, 4, 2, 3, 'Tidak Cocok'),
(535, 2, 5, 5, 2, 3, 'Tidak Cocok'),
(536, 2, 5, 2, 3, 3, 'Tidak Cocok'),
(537, 2, 5, 1, 3, 3, 'Tidak Cocok'),
(538, 2, 5, 3, 3, 3, 'Tidak Cocok'),
(539, 2, 5, 4, 3, 3, 'Tidak Cocok'),
(540, 2, 5, 5, 3, 3, 'Tidak Cocok'),
(541, 2, 6, 2, 1, 1, 'Cocok'),
(542, 2, 6, 1, 1, 1, 'Tidak Cocok'),
(543, 2, 6, 3, 1, 1, 'Cocok'),
(544, 2, 6, 4, 1, 1, 'Tidak Cocok'),
(545, 2, 6, 5, 1, 1, 'Tidak Cocok'),
(546, 2, 6, 2, 2, 1, 'Cocok'),
(547, 2, 6, 1, 2, 1, 'Tidak Cocok'),
(548, 2, 6, 3, 2, 1, 'Cocok'),
(549, 2, 6, 4, 2, 1, 'Tidak Cocok'),
(550, 2, 6, 5, 2, 1, 'Tidak Cocok'),
(551, 2, 6, 2, 3, 1, 'Tidak Cocok'),
(552, 2, 6, 1, 3, 1, 'Tidak Cocok'),
(553, 2, 6, 3, 3, 1, 'Tidak Cocok'),
(554, 2, 6, 4, 3, 1, 'Tidak Cocok'),
(555, 2, 6, 5, 3, 1, 'Tidak Cocok'),
(556, 2, 6, 2, 1, 2, 'Cocok'),
(557, 2, 6, 1, 1, 2, 'Tidak Cocok'),
(558, 2, 6, 3, 1, 2, 'Cocok'),
(559, 2, 6, 4, 1, 2, 'Tidak Cocok'),
(560, 2, 6, 5, 1, 2, 'Tidak Cocok'),
(561, 2, 6, 2, 2, 2, 'Cocok'),
(562, 2, 6, 1, 2, 2, 'Tidak Cocok'),
(563, 2, 6, 3, 2, 2, 'Cocok'),
(564, 2, 6, 4, 2, 2, 'Tidak Cocok'),
(565, 2, 6, 5, 2, 2, 'Tidak Cocok'),
(566, 2, 6, 2, 3, 2, 'Tidak Cocok'),
(567, 2, 6, 1, 3, 2, 'Tidak Cocok'),
(568, 2, 6, 3, 3, 2, 'Tidak Cocok'),
(569, 2, 6, 4, 3, 2, 'Tidak Cocok'),
(570, 2, 6, 5, 3, 2, 'Tidak Cocok'),
(571, 2, 6, 2, 1, 3, 'Tidak Cocok'),
(572, 2, 6, 1, 1, 3, 'Tidak Cocok'),
(573, 2, 6, 3, 1, 3, 'Tidak Cocok'),
(574, 2, 6, 4, 1, 3, 'Tidak Cocok'),
(575, 2, 6, 5, 1, 3, 'Tidak Cocok'),
(576, 2, 6, 2, 2, 3, 'Tidak Cocok'),
(577, 2, 6, 1, 2, 3, 'Tidak Cocok'),
(578, 2, 6, 3, 2, 3, 'Tidak Cocok'),
(579, 2, 6, 4, 2, 3, 'Tidak Cocok'),
(580, 2, 6, 5, 2, 3, 'Tidak Cocok'),
(581, 2, 6, 2, 3, 3, 'Tidak Cocok'),
(582, 2, 6, 1, 3, 3, 'Tidak Cocok'),
(583, 2, 6, 3, 3, 3, 'Tidak Cocok'),
(584, 2, 6, 4, 3, 3, 'Tidak Cocok'),
(585, 2, 6, 5, 3, 3, 'Tidak Cocok'),
(586, 2, 7, 2, 1, 1, 'Tidak Cocok'),
(587, 2, 7, 1, 1, 1, 'Tidak Cocok'),
(588, 2, 7, 3, 1, 1, 'Tidak Cocok'),
(589, 2, 7, 4, 1, 1, 'Tidak Cocok'),
(590, 2, 7, 5, 1, 1, 'Tidak Cocok'),
(591, 2, 7, 2, 2, 1, 'Tidak Cocok'),
(592, 2, 7, 1, 2, 1, 'Tidak Cocok'),
(593, 2, 7, 3, 2, 1, 'Tidak Cocok'),
(594, 2, 7, 4, 2, 1, 'Tidak Cocok'),
(595, 2, 7, 5, 2, 1, 'Tidak Cocok'),
(596, 2, 7, 2, 3, 1, 'Tidak Cocok'),
(597, 2, 7, 1, 3, 1, 'Tidak Cocok'),
(598, 2, 7, 3, 3, 1, 'Tidak Cocok'),
(599, 2, 7, 4, 3, 1, 'Tidak Cocok'),
(600, 2, 7, 5, 3, 1, 'Tidak Cocok'),
(601, 2, 7, 2, 1, 2, 'Tidak Cocok'),
(602, 2, 7, 1, 1, 2, 'Tidak Cocok'),
(603, 2, 7, 3, 1, 2, 'Tidak Cocok'),
(604, 2, 7, 4, 1, 2, 'Tidak Cocok'),
(605, 2, 7, 5, 1, 2, 'Tidak Cocok'),
(606, 2, 7, 2, 2, 2, 'Tidak Cocok'),
(607, 2, 7, 1, 2, 2, 'Tidak Cocok'),
(608, 2, 7, 3, 2, 2, 'Tidak Cocok'),
(609, 2, 7, 4, 2, 2, 'Tidak Cocok'),
(610, 2, 7, 5, 2, 2, 'Tidak Cocok'),
(611, 2, 7, 2, 3, 2, 'Tidak Cocok'),
(612, 2, 7, 1, 3, 2, 'Tidak Cocok'),
(613, 2, 7, 3, 3, 2, 'Tidak Cocok'),
(614, 2, 7, 4, 3, 2, 'Tidak Cocok'),
(615, 2, 7, 5, 3, 2, 'Tidak Cocok'),
(616, 2, 7, 2, 1, 3, 'Tidak Cocok'),
(617, 2, 7, 1, 1, 3, 'Tidak Cocok'),
(618, 2, 7, 3, 1, 3, 'Tidak Cocok'),
(619, 2, 7, 4, 1, 3, 'Tidak Cocok'),
(620, 2, 7, 5, 1, 3, 'Tidak Cocok'),
(621, 2, 7, 2, 2, 3, 'Tidak Cocok'),
(622, 2, 7, 1, 2, 3, 'Tidak Cocok'),
(623, 2, 7, 3, 2, 3, 'Tidak Cocok'),
(624, 2, 7, 4, 2, 3, 'Tidak Cocok'),
(625, 2, 7, 5, 2, 3, 'Tidak Cocok'),
(626, 2, 7, 2, 3, 3, 'Tidak Cocok'),
(627, 2, 7, 1, 3, 3, 'Tidak Cocok'),
(628, 2, 7, 3, 3, 3, 'Tidak Cocok'),
(629, 2, 7, 4, 3, 3, 'Tidak Cocok'),
(630, 2, 7, 5, 3, 3, 'Tidak Cocok');

-- --------------------------------------------------------

--
-- Table structure for table `coba`
--

CREATE TABLE `coba` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coba`
--

INSERT INTO `coba` (`id`, `nama`, `alamat`) VALUES
(2, 'halo', 'halo'),
(3, 'wira', 'wiraaaa');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_tanah`
--

CREATE TABLE `jenis_tanah` (
  `idJenis` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_tanah`
--

INSERT INTO `jenis_tanah` (`idJenis`, `jenis`) VALUES
(1, 'Regosol'),
(2, 'Tanah Humus'),
(3, 'Gambut'),
(4, 'Latosol'),
(5, 'Alluvial'),
(6, 'Podzolik'),
(7, 'Litosol');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_tanaman`
--

CREATE TABLE `jenis_tanaman` (
  `idTanaman` int(11) NOT NULL,
  `tanaman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_tanaman`
--

INSERT INTO `jenis_tanaman` (`idTanaman`, `tanaman`) VALUES
(1, 'Padi'),
(2, 'Kelapa Sawit');

-- --------------------------------------------------------

--
-- Table structure for table `kedalaman`
--

CREATE TABLE `kedalaman` (
  `idKedalaman` int(11) NOT NULL,
  `kedalaman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kedalaman`
--

INSERT INTO `kedalaman` (`idKedalaman`, `kedalaman`) VALUES
(1, 'Dalam'),
(2, 'Sedang'),
(3, 'Dangkal');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `idNews` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `dateCreate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `img` varchar(255) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`idNews`, `judul`, `content`, `dateCreate`, `img`, `idUser`) VALUES
(1, 'Nenek 76 Tahun Asal Palembang Bisikkan Permintaan Khusus ke Jokowi', '<p>Kedatangan Presiden RI Joko Widodo (Jokowi) ke Palembang, ternyata menjadi jawaban dari keinginan Masayu Ida, salah satu warga Palembang, Sumatera Selatan (Sumsel). Nenek berusia 76 tahun itu tak segan membisikkan permintaan khusus ke orang nomor satu di Indonesia ini.</p>\r\n</br>\r\n<p>Pertemuan Nenek Ida, panggilan akrabnya, dengan Jokowi secara langsung terjadi pada acara pembagian sertifikat tanah oleh Presiden RI Joko Widodo melalui Kementerian Agraria dan Tata Negara serta Badan Pertahanan Nasional (BPN) Sumsel.</p>\r\n</br>\r\n<p>Presiden RI yang selalu memberi pertanyaan kepada para warganya saat berkunjung, meminta salah satu penerima sertifikat tanah yang berusia sekitar 70 tahun untuk maju ke panggung.</p>\r\n</br>\r\n<p>Nenek Ida langsung maju, karena merasa usianya lebih dari 70 tahun dan sudah lama tinggal di Palembang. Dengan membawa surat sertifikat tanah, yang baru saja dibagikan oleh BPN Sumsel, nenek Ida berdiri tepat di samping kiri Jokowi.</p>\r\n</br>\r\n<p>Ada tiga warga yang mendapatkan kesempatan maju dan berdiri di samping Jokowi. Setelah dua warga asal Palembang dan Kabupaten Banyuasin menjawab pertanyaan Presiden RI, giliran Nenek Ida yang mendapat giliran.</p>\r\n</br>\r\n<p>\"Ibu, mau pertanyaan gampang apa mudah,\" ujar Jokowi di depan para penerima sertifikat tanah, di Plasa Benteng Kuto Besak (BKB) Palembang, Jumat, 11 Juli 2018.</p>\r\n</br>\r\n<p>Nenek Ida langsung ditanya siapa nama Presiden RI yang berada di hadapannya. Warga Kelurahan 2 Ilir Palembang ini menjawab dengan benar meskipun terbata-bata. Dia bersama dua warga lainnya langsung mendapatkan sepeda dari Presiden RI.</p>\r\n', '2018-07-20 20:13:13', '1.jpg', 1),
(2, 'Jokowi Bagikan 6 Ribu Sertifikat Tanah ke Warga Sumsel', 'Presiden Joko Widodo (Jokowi) menargetkan akan merampungkan pembagian sertifikat tanah ke 37 ribu warga di Sumatera Selatan (Sumsel) di tahun ini. Pada Juli 2018 menjadi kali kedua Presiden RI membagikan sertifikat tanah, dengan jumlah 6.000 sertifikat.\r\n\r\nPembagian sertifikat tanah secara resmi ini menjadi salah satu program pemerintah pusat melalui Badan Pertanahan Nasional (BPN) Sumsel.\r\n\r\n\"Saya selalu mendengar banyak masalah sengketa lahan dan tanah di mana-mana, di semua provinsi, baik dengan tetangga, antarmasyarakat, pemerintah, perusahaan, dan Badan Usaha Milik Negara (BUMN),\" ujarnya kepada ribuan penerima sertifikat tanah di Plasa Benteng Kuto Besak (BKB) Palembang, Sumsel, Jumat (13/7/2018).\r\n\r\nDengan bantuan dari pemerintah ini, Jokowi mengharapkan tidak ada lagi sengketa tanah dan lahan di Indonesia. Saat ini baru 46 Juta warga Indonesia yang mendapatkan sertifikat tanah, sebanyak 80 juta lagi belum diberikan.\r\n\r\nJokowi memerintahkan tahun ini, Kementerian Tata Ruang dan BPN di tiap daerah memenuhi target pembuatan 7 juta sertifikat tanah. Tahun depan, targetnya akan meningkat hingga 9 juta sertifikat.\r\n\r\n\"Kalau yang lalu cuma 500 ribu diberikan, masyarakat harus menunggu bahkan sampai 160 tahun lagi baru dapat sertifikat. Tahun lalu saya minta kepada Menteri BUMN, pada tahun 2017 tidak mau menerbitkan hanya 500 ribu, tapi 5 juta sertifikat,\" katanya.\r\n\r\nPresiden RI akan memantau dan menindak tegas Kementerian Tata Ruang dan BPN di tiap provinsi, termasuk BPN Sumsel, jika target tersebut tidak terealisasi.', '2018-07-21 13:23:43', '2.jpg', 1),
(3, 'Ini Rincian Biaya Pembuatan Sertifikat Tanah', '<p>Ternyata salah satu alasan masih banyak orang yang belum mengurus sertifikat tanahnya lebih karena takut biaya pembuatan sertifikat tanahnya mahal. Untuk itulah Pemerintah selalu mengimbau masyarakat untuk mengurus pembuatan sertifikat tanah langsung ke Badan Pertanahan Nasional.</p>\r\n<br>\r\n\r\n<p>Imbauan ini ditujukan guna menghindari masyarakat dari pungutan liar (pungli) saat mengurus pembuatan sertifikat tanahnya. Seluruh besaran biaya layanan pertanahan pun telah diatur dalam Peraturan Pemerintah Nomor 128 Tahun 2015, tentang jenis Penerimaan Negara bukan pajak yang berlaku pada Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional.</p>\r\n\r\n<br>\r\n<p>Kasus penipuan dalam hal pengurusan sertifikat tanah hingga kini memang masih kerap menimpa masyarakat. Terutama bagi mereka yang awam soal prosedur pengurusan pembuatan sertifikat tanah. Bahkan sampai ada yang mengaku dikenai biaya Rp1 juta untuk pembuatan sertifikasi tanah. Padahal, menurut Penerimaan Negara Bukan Pajak (PNBP) biayanya hanya Rp50 ribu saja.</p>', '2018-07-21 13:28:39', '4.jpg', 1),
(4, 'Terganjal Aturan, Baru 4 Situ Pencegah Banjir yang Tersertifikasi', '<p>Pemerintah melalui Kementerian Pekerjaan Umum dan Perumahan Rakyat (PUPR) terus berupaya melakukan sertifikasi situ sebagai aset pencegah terjadinya banjir Jakarta. Namun begitu, ada beberapa kendala yang harus dihadapi, mulai dari regulasi hingga permasalahan lahan.</p>\r\n</br>\r\n<p>Kepala Balai Besar Wilayah Sungai (BBWS) Ciliwung-Cisadane Direktorat Jenderal Sumber Daya Air (SDA) Kementerian PUPR, Jarot Widyoko menyatakan, dari total 206 situ yang ada di Jabodetabek, baru empat saja yang berhasil disertifikasi.</p>\r\n</br>\r\n\r\n<p>Sertifikat untuk situ, ujarnya, memiliki syarat-syarat yang sama seperti aset negara lainnya, semisal tanah. Hal itu dimaksudkan agar bisa aman dari usaha pengambilan lahan oleh pihak lain.</p>\r\n</br>\r\n<p>Kementerian PUPR sejak tahun lalu sudah mendata dan melakukan pengadministrasian keberadaan situ di area Jabodetabek. Upaya itu mendapatkan hasil, di mana ada sebanyak 206 situ yang tersebar, di mana mayoritas berlokasi di Kabupaten Bogor, yakni sebanyak 96 situ.</p>\r\n</br>\r\n<p>Jarot menyatakan, pada tahun ini, Kementerian PUPR sedang berusaha memroses 32 situ untuk mendapatkan sertifikat. Dari jumlah tersebut, sebanyak 26 situ berada di Jawa Barat, serta enam lainnya di Banten.</p>\r\n</br>\r\n<p>Namun begitu, dia mengaku, pemerintah masih harus menemui beberapa kendala, seperti regulasi sampai ketakutan akan tuntutan hukum dari pihak yang merasa lahannya diambil alih.</p>\r\n</br>\r\n<p>\"Seperti ketika mengajukan sertifikat situ ke Badan Pertanahan Nasional. Syaratnya ternyata sama dengan warga yang hendak mengajukan sertifikat, seperti perlu adanya surat pernyataan, tidak dalam sengketa,\" pungkas Jarot.</p>\r\n </br>', '2018-07-20 13:28:39', '5.jpg', 1),
(5, 'asd', 'ads', '2018-07-21 08:31:04', '', 1),
(6, 'asdasddasd', '<p>qwe asda<s>sdasdaasd ads asdasdsadasdadsdasdasdasdadsd&nbsp;<strong>asdasdsad</strong></s></p>\r\n\r\n<p>asasd</p>\r\n', '2018-07-22 08:32:38', '20180722101225.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ph`
--

CREATE TABLE `ph` (
  `idPh` int(11) NOT NULL,
  `ph` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ph`
--

INSERT INTO `ph` (`idPh`, `ph`) VALUES
(1, 'Sangat Masam'),
(2, 'Masam'),
(3, 'Netral'),
(4, 'Basa'),
(5, 'Sangat Basa');

-- --------------------------------------------------------

--
-- Table structure for table `suhu`
--

CREATE TABLE `suhu` (
  `idSuhu` int(11) NOT NULL,
  `suhu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suhu`
--

INSERT INTO `suhu` (`idSuhu`, `suhu`) VALUES
(1, 'Panas'),
(2, 'Sedang'),
(3, 'Dingin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL,
  `aktif` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `nama`, `alamat`, `telp`, `username`, `password`, `role`, `aktif`) VALUES
(1, 'admin', 'admin', '082', 'admin', 'admin', 1, '1'),
(2, 'wira', 'lkn\r\n', 'wira', 'wira', 'wira', 2, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analisa`
--
ALTER TABLE `analisa`
  ADD PRIMARY KEY (`idAnalisa`);

--
-- Indexes for table `coba`
--
ALTER TABLE `coba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_tanah`
--
ALTER TABLE `jenis_tanah`
  ADD PRIMARY KEY (`idJenis`);

--
-- Indexes for table `jenis_tanaman`
--
ALTER TABLE `jenis_tanaman`
  ADD PRIMARY KEY (`idTanaman`);

--
-- Indexes for table `kedalaman`
--
ALTER TABLE `kedalaman`
  ADD PRIMARY KEY (`idKedalaman`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`idNews`);

--
-- Indexes for table `ph`
--
ALTER TABLE `ph`
  ADD PRIMARY KEY (`idPh`);

--
-- Indexes for table `suhu`
--
ALTER TABLE `suhu`
  ADD PRIMARY KEY (`idSuhu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analisa`
--
ALTER TABLE `analisa`
  MODIFY `idAnalisa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=631;

--
-- AUTO_INCREMENT for table `coba`
--
ALTER TABLE `coba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_tanah`
--
ALTER TABLE `jenis_tanah`
  MODIFY `idJenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jenis_tanaman`
--
ALTER TABLE `jenis_tanaman`
  MODIFY `idTanaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kedalaman`
--
ALTER TABLE `kedalaman`
  MODIFY `idKedalaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `idNews` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ph`
--
ALTER TABLE `ph`
  MODIFY `idPh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `suhu`
--
ALTER TABLE `suhu`
  MODIFY `idSuhu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
