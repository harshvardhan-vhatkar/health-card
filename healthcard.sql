-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2022 at 05:50 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthcard`
--

-- --------------------------------------------------------

--
-- Table structure for table `hosp_signup`
--

CREATE TABLE `hosp_signup` (
  `id` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hosp_signup`
--

INSERT INTO `hosp_signup` (`id`, `Username`, `email`, `password`) VALUES
(1, '999', '999@999.vom', 'afc97ea131fd7e2695a98ef34013608f97f34e1d'),
(2, '9991', '9991@999.vom', 'ed47eee2e28adfb650351a89bd318ad2be3cdef6');

-- --------------------------------------------------------

--
-- Table structure for table `patient_signup`
--

CREATE TABLE `patient_signup` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `unique_id` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `bgrp` varchar(100) DEFAULT NULL,
  `ephone` varchar(100) DEFAULT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `uploaded_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_signup`
--

INSERT INTO `patient_signup` (`id`, `username`, `email`, `password`, `unique_id`, `name`, `gender`, `dob`, `phone`, `address`, `bgrp`, `ephone`, `file_name`, `uploaded_on`) VALUES
(15, '', '', '', NULL, 'Harshvardhan Vhatkar', NULL, NULL, NULL, NULL, NULL, NULL, 'PHOTO-2019-06-06-21-06-01.jpg', '2022-03-20 21:40:45'),
(14, '1234', '1234@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PHOTO-2019-06-06-21-06-01.jpg', '2022-03-20 21:40:45'),
(4, 'aaa', 'aaa@aa', '97b0faa608db447e6406d215ab48cec453a32b46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PHOTO-2019-06-06-21-06-01.jpg', '2022-03-20 21:40:45'),
(3, 'dad', 'adada@gam.com', 'bd8b15a81efb4f23f3a4a55e994b79e7b1fd8dac', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PHOTO-2019-06-06-21-06-01.jpg', '2022-03-20 21:40:45'),
(2, 'AADA', 'adda@ada.com', '46dde8a617286a68e1895bcd6f4f8bd43f329a51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PHOTO-2019-06-06-21-06-01.jpg', '2022-03-20 21:40:45'),
(7, 'harshu#@eawe.com', 'dada@fhjunedrkg.coim', '4e8052a9f757ed8ef1539bc439f818e0dcb86486', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PHOTO-2019-06-06-21-06-01.jpg', '2022-03-20 21:40:45'),
(5, 'fadfad', 'dadada@dada', '46dde8a617286a68e1895bcd6f4f8bd43f329a51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PHOTO-2019-06-06-21-06-01.jpg', '2022-03-20 21:40:45'),
(9, 'h', 'h@gmail.com', '27d5482eebd075de44389774fce28c69f45c8a75', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PHOTO-2019-06-06-21-06-01.jpg', '2022-03-20 21:40:45'),
(8, 'harh', 'harsh@gmail.com', '4e8052a9f757ed8ef1539bc439f818e0dcb86486', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PHOTO-2019-06-06-21-06-01.jpg', '2022-03-20 21:40:45'),
(13, 'harshu022', 'harshu111@gmail.com', 'a9b4966679fe3e371e6fb77e9016ec754d2f4457', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PHOTO-2019-06-06-21-06-01.jpg', '2022-03-20 21:40:45'),
(12, 'harshu02', 'harshu11@gmail.com', '97d9ff4d1e9ab02ada24ba0f488bea324971d19d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PHOTO-2019-06-06-21-06-01.jpg', '2022-03-20 21:40:45'),
(1, 'harshvardhan', 'harshu@gmail.com', '97b0faa608db447e6406d215ab48cec453a32b46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PHOTO-2019-06-06-21-06-01.jpg', '2022-03-20 21:40:45'),
(6, 'harshu', 'harshu@har.com', '4e8052a9f757ed8ef1539bc439f818e0dcb86486', NULL, 'Harshvardhan Vhatkar', 'male', '2001-08-20', '7900036591', 'Panvel, MH', 'AB+', '8850520182', 'PHOTO-2019-06-06-21-06-01.jpg', '2022-03-20 21:40:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hosp_signup`
--
ALTER TABLE `hosp_signup`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `patient_signup`
--
ALTER TABLE `patient_signup`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hosp_signup`
--
ALTER TABLE `hosp_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient_signup`
--
ALTER TABLE `patient_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
