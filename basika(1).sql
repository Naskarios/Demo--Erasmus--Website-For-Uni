-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2023 at 12:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basika`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `app_id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `a_m` text NOT NULL,
  `percentClass` float NOT NULL,
  `moClass` float NOT NULL,
  `cert` text NOT NULL,
  `extra` tinyint(1) NOT NULL,
  `uni1` text NOT NULL,
  `uni2` text NOT NULL,
  `uni3` text NOT NULL,
  `classFile` text NOT NULL,
  `certFile` text NOT NULL,
  `extraFile` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `approval` tinyint(1) DEFAULT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`app_id`, `fname`, `lname`, `a_m`, `percentClass`, `moClass`, `cert`, `extra`, `uni1`, `uni2`, `uni3`, `classFile`, `certFile`, `extraFile`, `user_id`, `approval`, `username`) VALUES
(3, 'asd', 'asd', '2', 2.3, 3.2, '2', 1, '2', '2', '3', '', '', '', 1, 1, 'asd'),
(7, 'aaaaa', 'sssss', '1212', 70, 70.3, '123123', 12, 'Bristol', 'Papel', 'Hustlers', '', '', '', 0, 1, 'alter'),
(9, 'zxc', 'cc', '0', 80.1, 80.2, 'asdsaadscx', 0, 'Hustlers', 'Harvard', 'Oxford', '', '', '', 0, 1, 'alter2'),
(10, 'zxc', 'vbn', '0', 35.5, 35, 'mbn', 0, 'Akardia', 'Zimbabue', 'Kserwgw', '', '', '', 0, 1, 'pp'),
(13, 'wer', 'werwer', '0', 22.3, 90.5, '123', 0, 'yunan', 'Oxford', 'Hustlers', '', '', '', 0, 1, 'naskarios'),
(15, 'asd', 'asd', '2', 2.3, 3.2, '2', 1, '2', 'ekpa\r\n', '3', '', '', '', 1, 1, 'asd'),
(16, 'asd', 'asd', '2', 2.3, 3.2, '2', 1, '2', 'kampana', '3', '', '', '', 1, 1, 'asd'),
(34, 'nasos', 'karras', '2022202000082', 2, 2, 'radioA1', 0, 'yunan', 'Oxford', 'Hustlers', './applications/naskarios/Athanasios_Karras_CV.pdf', './applications/naskarios/DIKAIWMATA.pdf', '0', 0, NULL, ''),
(43, 'nasos', 'karras', '', 0, 0, '', 0, '', '', '', './applications/naskarios/<br>', './applications/naskarios/', '0', 0, NULL, 'naskarios'),
(44, 'nasos', 'karras', '', 0, 0, '', 0, '', '', '', './applications/naskarios/<br>', './applications/naskarios/', '0', 0, NULL, 'naskarios');

-- --------------------------------------------------------

--
-- Table structure for table `dates`
--

CREATE TABLE `dates` (
  `date_id` int(11) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `dates`
--

INSERT INTO `dates` (`date_id`, `startDate`, `endDate`) VALUES
(1, '2023-06-06', '2023-06-13'),
(3, '2023-06-13', '2023-06-16'),
(7, '2014-06-03', '2015-06-19'),
(15, '2023-06-26', '2023-06-27'),
(26, '2023-05-08', '2023-05-31'),
(33, '2023-07-05', '2023-07-08'),
(34, '2023-06-29', '2023-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `university_id` int(11) NOT NULL,
  `university_name` text NOT NULL,
  `country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`university_id`, `university_name`, `country`) VALUES
(4, 'yunan', 'turkistan'),
(25, 'Hustlers', 'USA?'),
(26, 'Harvard', 'Ellas'),
(27, 'Oxford', 'Africa'),
(31, 'ekpa', 'skg'),
(32, 'bell ', 'labs'),
(33, 'kampana', 'studio'),
(39, 'elladistan', 'agglia');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `a_m` text NOT NULL,
  `tel` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `user_type_id` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `a_m`, `tel`, `username`, `password`, `user_type_id`, `email`) VALUES
(2, 'alternativas', 'dealeras', '2022202000081', '6938337720', 'alter', 'gamw2!', 0, 'dit20081@go.uop.gr'),
(3, 'nasos', 'karras', '2022202000082', '6938337721', 'naskarios', 'gamw', 1, 'dit20082@go.uop.gr'),
(5, 'nikolaos', 'tselikas', '2022202000068', '6947721501', 'Kyrie', 'perasteme!', 0, 'ntsel@go.uop.gr'),
(12, 'mpap', 'dronos', '2022999999999', '6947721501', 'dronoMaster', 'secret', 1, 'dronoMasterOMG@gmail.com'),
(13, '', '', '2022999999999', '', '', '', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`date_id`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`university_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `dates`
--
ALTER TABLE `dates`
  MODIFY `date_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `university_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
