-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2018 at 04:06 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysql_test`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetAllUsers` ()  BEGIN
SELECT * from users;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `type` varchar(60) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `city` varchar(60) DEFAULT NULL,
  `street` varchar(60) DEFAULT NULL,
  `country` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `type`, `user_id`, `city`, `street`, `country`) VALUES
(1, 'billing', 1, 'coimbatore', 'tamilnadu', 'india'),
(2, 'billing', 2, 'vellore', 'tamilnadu', 'india'),
(3, 'delivery', 1, 'chennai', 'tamilnadu', 'india'),
(4, 'delivery', 2, 'vellore_ponnai', 'taminadu', 'india'),
(7, 'communication', 2, 'alandur', 'tamilnadu', 'india'),
(8, 'billing', 3, 'coimbatore', 'tamilnadu', 'india');

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE `rewards` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `amount` double(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rewards`
--

INSERT INTO `rewards` (`id`, `user_id`, `amount`) VALUES
(1, 1, 26.00),
(2, 2, 15.50),
(3, 1, 25.50),
(4, 2, 55.00),
(5, 2, 95.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(60) DEFAULT NULL,
  `firstname` varchar(60) DEFAULT NULL,
  `surname` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `surname`) VALUES
(1, 'sathiya', 'SathiyaRaj', 'Prakash'),
(2, 'punitha', 'Punitha', 'Prakash'),
(3, 'prakash', 'prakash', 'kalappan');

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_shipping_details`
-- (See below for the actual view)
--
CREATE TABLE `user_shipping_details` (
`id` int(11)
,`username` varchar(60)
,`firstname` varchar(60)
,`surname` varchar(60)
,`b_city` varchar(60)
,`b_state` varchar(60)
,`b_country` varchar(60)
,`d_city` varchar(60)
,`d_state` varchar(60)
,`d_country` varchar(60)
);

-- --------------------------------------------------------

--
-- Structure for view `user_shipping_details`
--
DROP TABLE IF EXISTS `user_shipping_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_shipping_details`  AS  select `users`.`id` AS `id`,`users`.`username` AS `username`,`users`.`firstname` AS `firstname`,`users`.`surname` AS `surname`,`ab`.`city` AS `b_city`,`ab`.`street` AS `b_state`,`ab`.`country` AS `b_country`,`ad`.`city` AS `d_city`,`ad`.`street` AS `d_state`,`ad`.`country` AS `d_country` from ((`users` left join `address` `ab` on(((`ab`.`user_id` = `users`.`id`) and (`ab`.`type` = 'billing')))) left join `address` `ad` on(((`ad`.`user_id` = `users`.`id`) and (`ad`.`type` = 'delivery')))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `constraint_name` (`user_id`,`type`);

--
-- Indexes for table `rewards`
--
ALTER TABLE `rewards`
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
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rewards`
--
ALTER TABLE `rewards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
