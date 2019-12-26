-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2019 at 01:24 PM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `mch`
--

CREATE TABLE `mch` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` text NOT NULL,
  `mailid` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `coffee` int(6) NOT NULL,
  `tea` int(6) NOT NULL,
  `milk` int(6) NOT NULL,
  `paalkova` int(6) NOT NULL,
  `kajukatli` int(6) NOT NULL,
  `gulabjamun` int(6) NOT NULL,
  `cake` int(6) NOT NULL,
  `brownnie` int(6) NOT NULL,
  `puff` int(6) NOT NULL,
  `samosa` int(6) NOT NULL,
  `sundal` int(6) NOT NULL,
  `verkadalai` int(6) NOT NULL,
  `cocktail` int(6) NOT NULL,
  `mchcookies` int(6) NOT NULL,
  `mixture` int(6) NOT NULL,
  `restotal` int(9) NOT NULL,
  `payment_id` varchar(100) NOT NULL,
  `payment_request_id` varchar(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mch`
--

INSERT INTO `mch` (`id`, `name`, `mobile`, `mailid`, `address`, `coffee`, `tea`, `milk`, `paalkova`, `kajukatli`, `gulabjamun`, `cake`, `brownnie`, `puff`, `samosa`, `sundal`, `verkadalai`, `cocktail`, `mchcookies`, `mixture`, `restotal`, `payment_id`, `payment_request_id`, `payment_status`) VALUES
(89000, 'Tiwin', '9842259924', 'tiwinkumar.tk@gmail.com', 'Coimbatore', 23, 11, 7, 13, 14, 17, 15, 24, 9, 13, 13, 13, 16, 12, 0, 6380, 'MOJO9812J05N77276479', 'ccdf922211e44bcf93beb6a657531931', 'Credit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mch`
--
ALTER TABLE `mch`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
