-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 19, 2021 at 11:46 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g21`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `pdescription` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image`, `description`, `pdescription`) VALUES
(48, 'Beans.jpeg', 'Beans 10% off', '1kg Rs.250\r\n'),
(49, 'tomato.jpeg', 'Tomato 15% off', '1kg Rs.220'),
(50, 'Fish.jpeg', 'Fish 12% off', 'On any type of fish(per kg)'),
(51, 'Vegetables.jpeg', 'Vegetables 25% off', 'For Rs.2500 or above');

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

DROP TABLE IF EXISTS `points`;
CREATE TABLE IF NOT EXISTS `points` (
  `user_name` varchar(255) NOT NULL,
  `points` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`user_name`, `points`) VALUES
('shakir12', 1000),
('Yashoda32', 100);

-- --------------------------------------------------------

--
-- Table structure for table `sales_inf`
--

DROP TABLE IF EXISTS `sales_inf`;
CREATE TABLE IF NOT EXISTS `sales_inf` (
  `saleid` int(6) NOT NULL AUTO_INCREMENT,
  `totalcost` int(11) DEFAULT NULL,
  `user_name` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`saleid`),
  KEY `sales_inf_ibfk_1` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_inf`
--

INSERT INTO `sales_inf` (`saleid`, `totalcost`, `user_name`, `date`) VALUES
(1, 2000, 'shakir12', '2021-02-11 11:26:06'),
(2, 5000, 'shakir12', '2021-02-11 11:32:16'),
(3, 2000, 'shakir12', '2021-02-11 11:32:30'),
(4, 5600, 'Yashoda32', '2021-02-19 09:21:06'),
(5, 6000, 'Yashoda32', '2021-02-19 09:24:11');

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

DROP TABLE IF EXISTS `users_info`;
CREATE TABLE IF NOT EXISTS `users_info` (
  `user_name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nic` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`user_name`, `role`, `fname`, `lname`, `password`, `email`, `nic`, `mobile`, `city`, `country`) VALUES
('Ayisha', 'C', 'Ayisha', 'Siddequa', 'ss123', 'ayisha@gmail.com', '987654321V', '0765432134', 'Kandy', 'Srilanka'),
('cr7', 'W', 'c', 'r', '123', 'cr7@gmail.com', '87907090', '6869', 'honkong', 'srilanka'),
('sahani123', 'C', 'Sahani', 'Silva', '123sd', 'sahani123@gmail.com', '987654321V', '0775844132', 'Homagama', 'SriLanka'),
('shakir12', 'C', 'Shakir', 'Saheel', '1234', 'shakir12@gmail.com', '9974893076V', '0778965432', 'Maggona', 'SriLanka'),
('ucsc', 'A', 'University', 'Colombo', 'ucsc', 'ucsc@gmail.com', '786543210V', '0778965432', 'Colombo', 'SriLanka'),
('worker23', 'W', 'Mahesh', 'Kodithuwakku', 'ss567', 'worker@gmail.com', '923456742V', '0779865432', 'Borella', 'Colombo'),
('Yashoda32', 'C', 'Yashoda', 'Subasinghe', '12345', 'yashoda32@gmail.com', '9974893090V', '0765432189', 'Kurunegala', 'SriLanka');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sales_inf`
--
ALTER TABLE `sales_inf`
  ADD CONSTRAINT `sales_inf_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `users_info` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
