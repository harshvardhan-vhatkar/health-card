-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 07:12 PM
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
-- Table structure for table `fam_med_history`
--

CREATE TABLE `fam_med_history` (
  `user` varchar(255) DEFAULT NULL,
  `smoking` varchar(255) DEFAULT NULL,
  `alcohol` varchar(255) DEFAULT NULL,
  `drugs` varchar(255) DEFAULT NULL,
  `bp` varchar(255) DEFAULT NULL,
  `autism` varchar(255) DEFAULT NULL,
  `birthdefects` varchar(255) DEFAULT NULL,
  `bloodclots` varchar(255) DEFAULT NULL,
  `diabetes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fam_med_history`
--

INSERT INTO `fam_med_history` (`user`, `smoking`, `alcohol`, `drugs`, `bp`, `autism`, `birthdefects`, `bloodclots`, `diabetes`) VALUES
('123', 'NO', 'DONTKNOW', 'NO', 'YES', 'YES', 'NO', 'DONTKNOW', 'DONTKNOW');

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
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `user` varchar(255) DEFAULT NULL,
  `name_ins` varchar(255) DEFAULT NULL,
  `ins_company` varchar(255) DEFAULT NULL,
  `validity` varchar(255) DEFAULT NULL,
  `ins_id` varchar(255) DEFAULT NULL,
  `ins_copy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`user`, `name_ins`, `ins_company`, `validity`, `ins_id`, `ins_copy`) VALUES
('123', 'max bupa22', 'ins11122', '11m12', 'shivangi12', '');

-- --------------------------------------------------------

--
-- Table structure for table `last_app`
--

CREATE TABLE `last_app` (
  `user` varchar(255) DEFAULT NULL,
  `doc_name` varchar(50) DEFAULT NULL,
  `speciality` varchar(50) DEFAULT NULL,
  `reason` varchar(50) DEFAULT NULL,
  `medicine` varchar(50) DEFAULT NULL,
  `dosage` varchar(50) DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `visit_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `last_app`
--

INSERT INTO `last_app` (`user`, `doc_name`, `speciality`, `reason`, `medicine`, `dosage`, `duration`, `visit_date`) VALUES
('ss1', 'doc1', 's', 'shivangi', 'nothing', '1ml', '20days', '1JAN'),
('HV1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('hhh', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('123', 'doc1', 's', 'adadad', 'dad', 'adada', 'adasa', 'adadsa'),
('shivangi24', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('shivangi2400', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('001', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('a', 'Shivangi', 'Dentist', 'Root Canal', 'Brushing', 'twice daily', '4 years', '03 March 2022');

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `user` varchar(255) DEFAULT NULL,
  `medication` varchar(255) DEFAULT NULL,
  `dosage_freq` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `doctor` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `allergy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(15, '', '', '', NULL, 'Harshvardhan Vhatkar', NULL, NULL, NULL, NULL, NULL, NULL, 'pp.jpg', '2022-03-20 21:40:45'),
(36, '001', '001@gmail.com', 'e193a01ecf8d30ad0affefd332ce934e32ffce72', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pp.jpg', NULL),
(14, '1234', '1234@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pp.jpg', '2022-03-20 21:40:45'),
(30, 'harshvardhan', '123@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, 'Harshvardhan Vhatkar', 'male', '2022-04-01', '7900036591', 'Panvel, MH', 'AB+', '8850520182', 'pp.jpg', NULL),
(37, 'a', 'a@gmail.com', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', NULL, 'Harshvardhan Vhatkar', 'male', '2022-04-07', '7900036591', 'Panvel', 'AB+', '8850520182', 'pp.jpg', NULL),
(4, 'aaa', 'aaa@aa', '97b0faa608db447e6406d215ab48cec453a32b46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pp.jpg', '2022-03-20 21:40:45'),
(3, 'dad', 'adada@gam.com', 'bd8b15a81efb4f23f3a4a55e994b79e7b1fd8dac', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pp.jpg', '2022-03-20 21:40:45'),
(25, 'h1', 'h11111@gmail.com', 'ac4ae97285c19b13201deb9b192d921316db3447', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pp.jpg', NULL),
(24, 'h', 'h@gmail.com', '27d5482eebd075de44389774fce28c69f45c8a75', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pp.jpg', NULL),
(21, 'harshu1', 'harshu@gmail.com', 'd28d6c39092484046c49e4be38768702807eeabb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pp.jpg', NULL),
(6, 'harshu', 'harshu@har.com', '4e8052a9f757ed8ef1539bc439f818e0dcb86486', NULL, 'Harshvardhan Vhatkar', 'male', '2001-08-20', '7900036591', 'Panvel, MH', 'AB+', '8850520182', 'pp.jpg', '2022-03-20 21:40:45'),
(29, 'hhh', 'hhh@gmail.com', 'effdb5f96a28acd2eb19dcb15d8f43af762bd0ae', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pp.jpg', NULL),
(28, 'HV1', 'hv1@gmail.com', '3e35f1ae01bdb1f29bb7b06077ae9960bd6e5d25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pp.jpg', NULL),
(35, '00', 's2400@gmail.com', 'fb96549631c835eb239cd614cc6b5cb7d295121a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pp.jpg', NULL),
(32, 'shivangi2400', 'shivangi2400@gmail.com', 'fb96549631c835eb239cd614cc6b5cb7d295121a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pp.jpg', NULL),
(31, 'shivangi24', 'shivangi24@gmail.com', '19d07d0cb71d33c2f021e42bf218ef7dc41b75a6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pp.jpg', NULL),
(26, 'shivangi', 'shivangi@gmail.com', 'f76db68c5fc3ea8b504a9eb79f56c58d1f102f5d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pp.jpg', NULL),
(27, 'ss1', 'SS1@GMAIL.COM', 'db8779f763df39666596490e1ad4646018e65440', NULL, 'da', 'male', '', '', '', '', '', 'pp.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `user` varchar(255) DEFAULT NULL,
  `report_doc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_files`
--

CREATE TABLE `tbl_files` (
  `id` int(9) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_files`
--

INSERT INTO `tbl_files` (`id`, `filename`, `created`, `username`) VALUES
(1, '1-CSSL_Lab Manual_21_22 (1).pdf', '2022-04-03 11:55:49', NULL),
(2, '1-exp1css.pdf', '2022-04-03 11:56:39', NULL),
(3, '1-SEM 2 result.pdf', '2022-04-03 12:26:16', 'ss1'),
(4, '1-SEM 2 result.pdf', '2022-04-03 12:36:23', '123'),
(5, '1-sem 1 result-converted.pdf', '2022-04-03 14:54:37', '123'),
(6, '1-SEM 2 result.pdf', '2022-04-03 15:05:25', 'a'),
(7, '1-ccl ass 2.pdf', '2022-04-03 15:09:59', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fam_med_history`
--
ALTER TABLE `fam_med_history`
  ADD UNIQUE KEY `user` (`user`);

--
-- Indexes for table `hosp_signup`
--
ALTER TABLE `hosp_signup`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `last_app`
--
ALTER TABLE `last_app`
  ADD UNIQUE KEY `user` (`user`);

--
-- Indexes for table `patient_signup`
--
ALTER TABLE `patient_signup`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD UNIQUE KEY `user` (`user`);

--
-- Indexes for table `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
