-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2020 at 07:08 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Mname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Bloodgroup` varchar(255) NOT NULL,
  `Bdate` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Dondate` varchar(255) NOT NULL,
  `Stats` varchar(255) NOT NULL,
  `Temp` varchar(255) NOT NULL,
  `Pulse` varchar(255) NOT NULL,
  `Bp` varchar(255) NOT NULL,
  `Weight` int(255) NOT NULL,
  `Hemoglobin` varchar(255) NOT NULL,
  `Hbsag` varchar(255) NOT NULL,
  `Aids` varchar(255) NOT NULL,
  `MalariaSmear` varchar(255) NOT NULL,
  `Hematocrit` varchar(255) NOT NULL,
  `Mobile1` varchar(255) NOT NULL,
  `Mobile2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `Username`, `Fname`, `Mname`, `Lname`, `Gender`, `Bloodgroup`, `Bdate`, `Address`, `City`, `Dondate`, `Stats`, `Temp`, `Pulse`, `Bp`, `Weight`, `Hemoglobin`, `Hbsag`, `Aids`, `MalariaSmear`, `Hematocrit`, `Mobile1`, `Mobile2`) VALUES
(1, '	 Abhi_Maru', 'Abhishek', 'Pankajbhai', 'Maru', 'male', 'B+', '2003-09-15', 'Near old police station, aadityana,porbandat,360575', 'JAMNAGAR', '2020-09-28', 'Normal', '34', '79', '80|120', 55, '67', 'NEGATIVE\r\n', 'NEGATIVE\r\n', 'NEGATIVE\r\n', '67', '1234567890', '987654321'),
(2, '	 xyz', 'i', 'am', 'xyz', 'male', 'O+', '1111-11-11', 'Unknown User2', 'RAJKOT', '1111-11-11', 'Normal', '56', '65', '11|120', 54, '89', 'NEGATIVE\r\n', 'NEGATIVE\r\n', 'NEGATIVE\r\n', '89', '1234967689', '1234962289'),
(30, 'abc2', 'i ', 'am', 'abc2', 'female', 'O+', '1111-11-11', 'Xyz place', 'PORBANDAR', '1111-11-11', 'Normal', '76', '77', '7|11', 77, '88', 'NEGATIVE', 'NEGATIVE', 'NEGATIVE', '11', '0101010110', '9199191999'),
(41, 'RajM', 'I', 'am ', 'Raj', 'male', 'O-', '2003-05-15', 'xyz.........................', 'PORBANDAR', '2020-12-10', 'Normal', '38', '60', '10|80', 57, '66', 'NEGATIVE', 'NEGATIVE', 'NEGATIVE', '100%', '1010100010', '0101010010'),
(76, 'Jay', 'i ', 'am ', 'jay', 'male', 'B+', '1111-11-11', '123\r\n\r\n', 'JAMNAGAR', '1010-09-19', 'Normal', '28', '37', '88', 66, '27', 'NEGATIVE', 'NEGATIVE', 'NEGATIVE', '63%', '9818922182', '9832982333');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Username`, `Password`) VALUES
(3, 'Abhi_Maru', '$2y$10$p6WdVP6aiFCdF1rEJsUFI.X8Cy1wd76MvEI8Ccsj0Qgvr1inFshkm'),
(7, 'xyz', '$2y$10$ivaAgeetO1DEpc094716t.vFmEBkwHGPYFVWblmPAsgFlKtkiETGK'),
(20, 'abc2', '$2y$10$lvYEJTOzsaMglg/zx47HN.BtKxQ9pYUa9GnF6qNSQBeMsrB/eDlNO'),
(28, 'Jay', '$2y$10$zi5pw3BAhcPwS/cXUVhDr.oebTCY1ruWRMgUPNuL8KfMAw6EGCeCS'),
(32, 'RajM', '$2y$10$/CFgkTPnBDSElYTAkp9cxupDFabhIA3D9jDLmHJKSOdE0A0PcNZvC'),
(43, 'Darshan', '$2y$10$dSx0z69tRNqZdIOntJ5fQ.ZL9XFmTEuuPqk3xvS8OaXg.1Ma7EHrm'),
(54, 'user_abc', '$2y$10$NxDkAxG1e3VzK3NQl4o.PuyfTpLdbX0Ine36rGgNVGYDVz2Wdv2/W');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
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
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
