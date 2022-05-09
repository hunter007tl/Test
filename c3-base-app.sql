-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2022 at 03:00 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `c3-base-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_activity`
--

CREATE TABLE IF NOT EXISTS `log_activity` (
  `log_code` int(225) NOT NULL,
  `log_user` varchar(15) NOT NULL,
  `log_date` date NOT NULL,
  `log_time` time NOT NULL,
  `log_action` varchar(50) NOT NULL,
  `log_description` mediumtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_activity`
--

INSERT INTO `log_activity` (`log_code`, `log_user`, `log_date`, `log_time`, `log_action`, `log_description`) VALUES
(4, 'IDUR0705250002', '2022-05-07', '18:29:47', 'Update User Record', 'IDUR0705250002-hunter07@gmail.com'),
(5, 'IDUR0705250002', '2022-05-07', '18:31:32', 'Change User Password', ''),
(6, 'IDUR0705250002', '2022-05-07', '18:33:42', 'Update User Record', 'IDUR0705250002-hunter@gmail.com'),
(21, 'IDUR0505180001', '2022-05-07', '21:31:32', 'Delete User Record', 'IDUR0705270002'),
(22, 'IDUR0505180001', '2022-05-07', '21:32:06', 'Delete User Record', 'IDUR0505180001'),
(23, 'IDUR0505180001', '2022-05-07', '21:32:55', 'Add User Record', 'IDUR0705080001-base@admin.com-Administrator-Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_list` int(25) NOT NULL,
  `user_id` varchar(15) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` mediumtext NOT NULL,
  `user_level` varchar(25) NOT NULL,
  `user_status` varchar(10) NOT NULL,
  `user_slug` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_list`, `user_id`, `user_name`, `user_password`, `user_level`, `user_status`, `user_slug`) VALUES
(16, 'IDUR0705080001', 'base@admin.com', '0192023a7bbd73250516f069df18b500', 'Administrator', 'Active', 'base-admin-com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_activity`
--
ALTER TABLE `log_activity`
  ADD PRIMARY KEY (`log_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_list`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_activity`
--
ALTER TABLE `log_activity`
  MODIFY `log_code` int(225) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_list` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
