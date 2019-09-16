-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2017 at 12:14 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fan_vote_count`
--

-- --------------------------------------------------------

--
-- Table structure for table `celeb_info`
--

CREATE TABLE IF NOT EXISTS `celeb_info` (
`id` int(11) NOT NULL,
  `celeb_name` varchar(255) NOT NULL,
  `celeb_img` text NOT NULL,
  `celeb_vote` int(12) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `celeb_info`
--

INSERT INTO `celeb_info` (`id`, `celeb_name`, `celeb_img`, `celeb_vote`) VALUES
(34, 'Shahrukh_khan', 'Shahrukh_khan1.jpg', 8),
(35, 'Tom_cruise', 'tom_cruise2.jpg', 17),
(37, 'Ranveer Singh', 'Ranveer_Singh2.jpg', 16),
(38, 'Zayn malik', 'Zayn_malik1.jpg', 21),
(39, 'Robert pattionsion', 'robert_pattionson1.jpg', 11),
(40, 'Johnny depp', 'Johnny_depp.jpg', 13),
(41, 'Hrithik roshan', 'Hrithik_roshan.jpg', 17),
(42, 'leonardo_dicaprio', 'leonardo_dicaprio1.jpg', 12),
(43, 'Ranbir kapoor', 'Ranbir_kapoor.jpg', 16),
(44, 'Christian_Bale', 'Christian_Bale.jpg', 8),
(45, 'George_Clooney', 'George_Clooney.jpg', 15),
(46, 'Brad_pitt', 'Brad_pitt.jpg', 13),
(47, 'Henry_cavil', 'Henry_cavil.jpg', 10),
(48, 'Tobey_maguire', 'Tobey_maguire.jpg', 12),
(49, 'shahid_kapoor', 'shahid_kapoor.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `celeb_info`
--
ALTER TABLE `celeb_info`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `celeb_info`
--
ALTER TABLE `celeb_info`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
