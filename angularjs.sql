-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2016 at 03:13 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mohsin_patwary`
--

-- --------------------------------------------------------

--
-- Table structure for table `airline`
--

CREATE TABLE `airline` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airline`
--

INSERT INTO `airline` (`id`, `name`) VALUES
(3, 'British Airways'),
(7, 'Delta Airlines'),
(8, 'American Air Ways'),
(22, 'Alaska Airlines'),
(23, 'Allegiant Air'),
(24, 'American Airlines'),
(25, 'Frontier Airlines'),
(26, 'Hawaiian Airlines'),
(27, 'JetBlue Airways');

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

CREATE TABLE `airport` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`id`, `name`) VALUES
(3, 'Sahjalal Internationl Airport Dhaka'),
(4, 'Hartsfield Jackson Atlanta International'),
(5, 'Beijing Capital International'),
(6, 'London Heathrow'),
(7, 'Tokyo International'),
(8, 'Chicago Oâ€™Hare International'),
(9, 'Los Angeles International'),
(10, 'Charles de Gaulle International'),
(11, 'Dallas Fort Worth International'),
(12, ''),
(13, 'kjtkt'),
(14, 'kjtkt'),
(15, 'kjtkt'),
(16, 'dhdh'),
(17, 'dhdh'),
(18, 'dhdh'),
(19, 'g');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `sheduleTime` time DEFAULT NULL,
  `estimatedTime` time DEFAULT NULL,
  `flightid` int(11) DEFAULT NULL,
  `fromid` int(11) DEFAULT NULL,
  `presentLocationid` int(11) DEFAULT NULL,
  `destinationid` int(11) DEFAULT NULL,
  `terminalid` int(11) DEFAULT NULL,
  `status` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `airlineid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`id`, `name`, `airlineid`) VALUES
(1, 'DH4545', 27),
(2, 'BD45321', 24);

-- --------------------------------------------------------

--
-- Table structure for table `gate_no`
--

CREATE TABLE `gate_no` (
  `id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `terminalid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `email`, `password`, `address`, `contact`) VALUES
(1, 'Mohsin', 'Patwary', 'patwarydk@gmail.com', '01670871877', 'Dhaka', '01775266433'),
(3, 'Hemel', 'Ahmed', 'facebook.mohsin@gmail.com', '12345', 'Dhaka', '01670871877');

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE `rute` (
  `id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `flightid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `terminal`
--

CREATE TABLE `terminal` (
  `id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `airportid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airline`
--
ALTER TABLE `airline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airport`
--
ALTER TABLE `airport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `terminalid` (`terminalid`),
  ADD KEY `flightid` (`flightid`),
  ADD KEY `fromid` (`fromid`),
  ADD KEY `presentLocationid` (`presentLocationid`),
  ADD KEY `destinationid` (`destinationid`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`id`),
  ADD KEY `airlineid` (`airlineid`);

--
-- Indexes for table `gate_no`
--
ALTER TABLE `gate_no`
  ADD PRIMARY KEY (`id`),
  ADD KEY `terminalid` (`terminalid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `flightid` (`flightid`);

--
-- Indexes for table `terminal`
--
ALTER TABLE `terminal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `airportid` (`airportid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airline`
--
ALTER TABLE `airline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `airport`
--
ALTER TABLE `airport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gate_no`
--
ALTER TABLE `gate_no`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `terminal`
--
ALTER TABLE `terminal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `details_ibfk_1` FOREIGN KEY (`terminalid`) REFERENCES `terminal` (`id`),
  ADD CONSTRAINT `details_ibfk_2` FOREIGN KEY (`flightid`) REFERENCES `flight` (`id`),
  ADD CONSTRAINT `details_ibfk_3` FOREIGN KEY (`fromid`) REFERENCES `airport` (`id`),
  ADD CONSTRAINT `details_ibfk_4` FOREIGN KEY (`presentLocationid`) REFERENCES `airport` (`id`),
  ADD CONSTRAINT `details_ibfk_5` FOREIGN KEY (`destinationid`) REFERENCES `airport` (`id`);

--
-- Constraints for table `flight`
--
ALTER TABLE `flight`
  ADD CONSTRAINT `flight_ibfk_1` FOREIGN KEY (`airlineid`) REFERENCES `airline` (`id`);

--
-- Constraints for table `gate_no`
--
ALTER TABLE `gate_no`
  ADD CONSTRAINT `gate_no_ibfk_1` FOREIGN KEY (`terminalid`) REFERENCES `terminal` (`id`);

--
-- Constraints for table `rute`
--
ALTER TABLE `rute`
  ADD CONSTRAINT `rute_ibfk_1` FOREIGN KEY (`flightid`) REFERENCES `flight` (`id`);

--
-- Constraints for table `terminal`
--
ALTER TABLE `terminal`
  ADD CONSTRAINT `terminal_ibfk_1` FOREIGN KEY (`airportid`) REFERENCES `airport` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
