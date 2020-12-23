-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2020 at 10:48 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `enrollment` int(10) NOT NULL,
  `name` varchar(60) NOT NULL,
  `father_name` varchar(60) DEFAULT NULL,
  `mother_name` varchar(60) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `address` varchar(300) DEFAULT NULL,
  `mobile` int(11) NOT NULL,
  `category` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`enrollment`, `name`, `father_name`, `mother_name`, `email`, `password`, `address`, `mobile`, `category`, `dob`, `gender`, `image`) VALUES
(19430, 'Abhash Kumar', 'Bhupendra Kumar Thakur', 'Ranjana Kumari', 'raghababhash@gmail.com', 'fb031db8f7988c5649286b1556ca4a9b', 'Nawratan Chowk , Purnea City , Purnea', 2147483647, 'OBC', '1998-03-21', 'Others', ''),
(194676, 'Agnivesh Singh', 'Durga Prasad Rawat', 'Maya Tyagi', 'agnivesh.bhumca19@gmail.com', '0eb0b7dc0d7e58c1ca8b30120a84d80c', 'Bhilai Pahadi , Agra , UttarPradesh', 2147483647, 'ST', '1997-07-21', 'male', ''),
(194679, 'Abhilash Tyagi', 'Rakesh Tyagi', 'Maya Tyagi', 'abhilash.bhumca19@gmail.com', '399ab9be8873f0012a32f131f43be9bc', 'Haridwar Pahadi ke upar , Uttarakhand ,India', 2147483647, 'General', '1996-07-21', 'male', ''),
(417483, 'Anurag Rawat', 'Ganesh Prasad Rawat', 'Shashi Devi', 'anurag.bhumca19@gmail.com', 'b3948c5c2d57cbaada2912e26f33f615', 'Raj ghat Varanasi , Uttar Pradesh ,India', 2147483647, 'SC', '1999-09-26', 'male', ''),
(417484, 'Megha Kumari', 'Rakesh Tyagi', 'Nilam Shukla', 'megha.bhumca19@gmail.com', 'ca1e27aee47dce3413e8a70895bd73fc', 'Muzzafarpur,Bihar , India', 2147483647, 'ST', '2000-02-29', 'female', ''),
(417486, 'Vishok Shukla', 'Vinod Kumar Shukla', 'Nilam Shukla', 'vishok.bhumca19@gmail.com', '4794e8f1d4fc40a6c167b87358d5c5e5', 'Lucknow, Uttar Pradesh , Pakistan', 2147483647, 'General', '1997-10-12', 'male', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`enrollment`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
