-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 04, 2020 at 11:58 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updation_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `reg_date`, `updation_date`) VALUES
(1, 'admin', 'xyz@gmail.com', 'testxyz', '2016-04-04 15:01:45', '2016-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

DROP TABLE IF EXISTS `complaints`;
CREATE TABLE IF NOT EXISTS `complaints` (
  `complaint_date` date NOT NULL,
  `Student_Id` varchar(15) NOT NULL,
  `phoneno` varchar(11) NOT NULL,
  `roomno` varchar(50) NOT NULL,
  `complaint_type` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`Student_Id`,`complaint_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`complaint_date`, `Student_Id`, `phoneno`, `roomno`, `complaint_type`, `description`) VALUES
('2020-04-20', 'AP17110010123', '1234567890', 'T1-209', 'Cleaning/housekeeping issue', 'my room hasnot been cleaned since 2 weeks'),
('2020-03-23', 'AP17110010123', '1234567890', 'T1-209', 'Electricity issue', 'there is power cut in my room from yesterday'),
('2019-06-25', 'AP17110010133', '9441684553', 'T1-509', 'Electricity issue', 'There is tubelight problem. Beside that socket at study table also doesnot work'),
('2020-11-23', 'AP17110010133', '9441684553', 'T1-509', 'Mess food issue', 'Food quality is degrading day by day');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `Student_Id` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `roomno` varchar(50) NOT NULL,
  PRIMARY KEY (`Student_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Student_Id`, `username`, `email`, `password`, `roomno`) VALUES
('AP17110010123', 'Surya', 'surya24@gmail.com', 'surya24', 'T1-209'),
('AP17110010133', 'Bijay Adhikari', 'bj555@gmail.com', '39b9df3a0fb3356d11a63e22260e96ab', 'T1-509');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `Staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `staffname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(11) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `department` varchar(50) NOT NULL,
  PRIMARY KEY (`Staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staff_id`, `staffname`, `email`, `phone_no`, `reg_date`, `department`) VALUES
(3, 'Maya Des', 'maya12@gmail.com', '9823765618', '2020-05-26 03:17:25', 'Carpentry issue'),
(4, 'Ramu Kumar', 'ramuk@gmail.com', '1285720900', '2020-05-26 03:18:40', 'Electricity issue'),
(5, 'Hari Lal', 'hari43@gmail.com', '9823147569', '2019-05-25 21:21:53', 'leakage issue'),
(6, 'Krishnan Iyer', 'krisnan101@gmail.com', '9842603310', '2020-08-13 03:23:07', 'Cleaning/housekeeping issue'),
(7, 'bijay Da', 'bj23@gmail.com', '9821348574', '2018-11-12 01:06:35', 'Mess food issue'),
(8, 'biken', 'biken_aw@gmail.com', '9762361646', '2020-07-04 06:17:25', 'Carpentry issue');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `fk_foreign_key_name` FOREIGN KEY (`Student_Id`) REFERENCES `registration` (`Student_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
