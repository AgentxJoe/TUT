-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 09:22 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tut`
--

-- --------------------------------------------------------

--
-- Table structure for table `TUT_TB`
--

CREATE TABLE `tut_tb` (
  `RID` int(11) NOT NULL,
  `INPUT_1` varchar(70) NOT NULL,
  `INPUT_2` int(11) NOT NULL,
  `CREATED_AT` datetime NOT NULL DEFAULT current_timestamp(),
  `CREATED_BY` varchar(11) NOT NULL,
  `UPDATED_AT` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `UPDATED_BY` varchar(11) NOT NULL,
  `DELETED_AT` datetime DEFAULT NULL,
  `DELETED_BY` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `TUT_TB`
--

INSERT INTO `TUT_TB` (`RID`, `INPUT_1`, `INPUT_2`, `CREATED_AT`, `CREATED_BY`, `UPDATED_AT`, `UPDATED_BY`, `DELETED_AT`, `DELETED_BY`) VALUES
(1, '0', 123, '2022-09-19 14:56:37', '', NULL, '', NULL, ''),
(2, 'text', 123, '2022-09-19 14:57:16', '', NULL, '', NULL, ''),
(3, 'text', 123, '2022-09-19 14:57:24', '', NULL, '', NULL, ''),
(4, 'text123', 1, '2022-09-19 15:01:33', '', NULL, '', NULL, ''),
(5, 'TEST123', 123, '2022-09-19 15:03:22', '', NULL, '', NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `TUT_TB`
--
ALTER TABLE `TUT_TB`
  ADD PRIMARY KEY (`RID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `TUT_TB`
--
ALTER TABLE `TUT_TB`
  MODIFY `RID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
