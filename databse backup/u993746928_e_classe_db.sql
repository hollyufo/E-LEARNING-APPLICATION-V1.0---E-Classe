-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 04, 2022 at 03:34 PM
-- Server version: 10.5.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u993746928_e_classe_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `creator` varchar(255) DEFAULT NULL,
  `created` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `cname`, `creator`, `created`, `duration`, `link`) VALUES
(6, 'Kendall Mclaughlin', 'tudi@mailinator.com', '1972-03-07', '10', 'Anim cum sint hic d'),
(7, 'Jerome Boyle', 'mazozevi@mailinator.com', '1972-01-02', '90', 'Commodo reiciendis v'),
(8, 'Kermit Gomez', 'hyjom@mailinator.com', '2019-03-26', '50', 'Facilis qui illo occ'),
(9, 'Cora Franklin', 'fedyta@mailinator.com', '1997-04-04', '85', 'Facere repellendus ');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `ID` int(11) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `PaymentSchedule` varchar(255) DEFAULT NULL,
  `BillNumber` varchar(255) DEFAULT NULL,
  `AmountPaid` varchar(255) DEFAULT NULL,
  `Blanaceamount` varchar(255) DEFAULT NULL,
  `tDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`ID`, `fName`, `PaymentSchedule`, `BillNumber`, `AmountPaid`, `Blanaceamount`, `tDate`) VALUES
(1, 'Mechelle Colon', 'zumuxe@mailinator.com', '671', '92', '5', '1978-07-28'),
(2, 'Hiram Leach', 'godat@mailinator.com', '964', '73', '81', '1980-08-22'),
(3, 'Ferdinand Crosby', 'tewexahi@mailinator.com', '102', '83', '11', '2013-01-13'),
(4, 'imrane', 'matutit@mailinator.com', '490', '58', '26', '1991-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(11) NOT NULL,
  `fName` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `EnrollNumber` varchar(255) DEFAULT NULL,
  `AdmissionDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `fName`, `Email`, `Phone`, `EnrollNumber`, `AdmissionDate`) VALUES
(6, 'Winifred Barber', 'zesite@mailinator.com', '+1 (988) 954-1213', 'Et dolor ad eum cons', '17-Jul-1987'),
(7, 'Kadeem Kelly', 'pykymonezu@mailinator.com', '+1 (493) 976-7877', '29', '1999-08-28'),
(8, 'Leah Evans', 'xihyfawy@mailinator.com', '+1 (461) 612-5971', '95', '2014-05-10'),
(9, 'Katell Estes', 'zamubykomo@mailinator.com', '+1 (437) 167-7637', '46', '1990-10-29'),
(10, 'imran', 'jovagyqow@mailinator.com', '+1 (594) 106-6255', '26', '1972-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobilenumber` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `is_active` enum('0','1') NOT NULL,
  `date_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `mobilenumber`, `password`, `token`, `is_active`, `date_time`) VALUES
(1, 'imrane', 'chaibi', 'imranchaibi1@gmail.com', '0632823950', '$2y$10$Mcm9e6Q/hbiO5enr47IMgeSKF03R87Ljdyxm20slOcPLoheqyrJf.', '5fb943ab2b34416fd5df62dac158d341', '1', '2022-02-04'),
(2, 'riad', 'riad', 'riadabdelaziz40@gmail.com', '0618348558', '$2y$10$McTrb3vRHVrvsaYTF/lkEuM3EmLa1w6QLDNZFbhGZooWaQns4oCr.', 'ebfcf3cb89eafb19b8b779c4c69f3aae', '0', '2022-02-04'),
(6, 'vpv', 'team', 'vpvteam0@gmail.com', '0632823950', '$2y$10$jUkGtgSH2ls5Qgqqhm./M.zyHzQsnF47Q4CMBPmOdn9qYa6o3Q1NK', '9d232e7ce0106c6ca80325f8f0c80d56', '1', '2022-02-04'),
(7, 'ash', 'sd', 'ash-sd@pm.me', '0694799286', '$2y$10$KB8RRm6QybvjDSGxowBG2..qczQzfd4C5ngq/6I.Pih5AiKxgWvEq', '56d6ebdf0635c31c049c1ac00cb88d3d', '1', '2022-02-04'),
(8, 'imrane', 'chaibi', 'parey54770@chinamkm.com', '0632823959', '$2y$10$RVoA7ZJlVX47G6Ssz/eUS.8yzp46L0OVjEsSvVLtmwfhX7ebqFLGG', '17e7f1388cf8a5d206e837d9169700cd', '1', '2022-02-04'),
(9, 'SAM', 'LOOK', 'samlook00@gmail.com', '0680152455', '$2y$10$17XAh4ihQmdUXXcWH6yScetv5cPA7bW4tIFgrmn6hgZER8zQhv4e.', 'e72610c5c90ee5d9717bfcff2ed592cc', '1', '2022-02-04'),
(10, 'Oussama', 'Elkhaldaoui', 'oussama.elkhaldaoui@gmail.com', '0611848302', '$2y$10$krTFYsa6NAYUwThzERShe.tZxd1WyL/iDN7MqeT82prIh0SJrZxtK', '6bc2d349fb764e42031ee899589bd279', '1', '2022-02-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
