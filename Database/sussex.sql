-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 06:09 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sussex`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `membership_number` varchar(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_startdate` datetime NOT NULL,
  `event_enddate` datetime NOT NULL,
  `event_description` varchar(500) NOT NULL,
  `event_price` varchar(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `event_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_name`, `event_startdate`, `event_enddate`, `event_description`, `event_price`, `photo`, `event_status`) VALUES
(20, 'DJ Party', '2021-03-22 19:45:00', '2021-03-22 11:13:00', 'This is the largest DJ Event of the Year', '2000', 'dj-party-vector-87905.jpg', 'Pending'),
(21, 'EDM Night', '2021-03-23 18:45:00', '2021-03-24 02:25:00', 'Sri Lanka Largest EDM Event in this year', '4000', 'dj-party-vector-87905.jpg', 'Pending'),
(22, 'EDM Night', '2021-04-23 18:45:00', '2021-04-23 20:25:00', 'Largest EDM Event in this year', '4000', 'dj-party-vector-87905.jpg', 'Pending'),
(24, 'Sinhala and Tamil New Year 2021', '2021-04-13 09:00:00', '2021-04-15 12:00:00', 'Sinhalese New Year, generally known as Aluth Avurudda in Sri Lanka, is a Sri Lankan holiday that celebrates the traditional New Year of the Sinhalese people in Sri Lanka. It is a major anniversary celebrated by not only the Sinhalese people but by most Sri Lankans.', '20', 's&t_newYear.jpg', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `friendEmail` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` varchar(5) NOT NULL,
  `personalityType` varchar(20) NOT NULL,
  `hobbies` varchar(500) NOT NULL,
  `games` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `email`, `phone`, `friendEmail`, `name`, `age`, `personalityType`, `hobbies`, `games`, `image`) VALUES
(22, 'meena@gmail.com', '0775236547', 'john@gmail.com', 'Mr. John Doe', '52', 'Entrepreneur', 'Community service, Playing an instrument', 'Basketball, Swimming', 'janz.png');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `game_id` int(11) NOT NULL,
  `game_name` varchar(255) NOT NULL,
  `game_description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`game_id`, `game_name`, `game_description`) VALUES
(1, 'Archery', ''),
(2, 'Badminton', ''),
(3, 'Baseball', ''),
(4, 'Basketball', ''),
(5, 'Bodybuilding', ''),
(6, 'Football', ''),
(7, 'Swimming', ''),
(8, 'Computer Games', ''),
(9, 'Cricket', ''),
(10, 'Kite flying', ''),
(11, 'Martial arts', '');

-- --------------------------------------------------------

--
-- Table structure for table `hobby`
--

CREATE TABLE `hobby` (
  `hobby_id` int(11) NOT NULL,
  `hobby_name` varchar(255) NOT NULL,
  `hobby_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hobby`
--

INSERT INTO `hobby` (`hobby_id`, `hobby_name`, `hobby_description`) VALUES
(1, 'Art', ''),
(2, 'Cooking or baking', ''),
(3, 'Exercising and healthcare', ''),
(4, 'Playing an instrument', ''),
(5, 'Travel', ''),
(6, 'Writing or blogging', ''),
(7, 'Outdoor activities', ''),
(8, 'Community service', ''),
(9, 'Team or individual sports', '');

-- --------------------------------------------------------

--
-- Table structure for table `intrest`
--

CREATE TABLE `intrest` (
  `intrest_id` int(11) NOT NULL,
  `intrest_name` varchar(255) NOT NULL,
  `intrest_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `title` varchar(10) DEFAULT NULL,
  `firstName` varchar(20) DEFAULT NULL,
  `lastName` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `nic` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `personalityType` varchar(20) DEFAULT NULL,
  `hobies` varchar(200) DEFAULT NULL,
  `games` varchar(500) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `title`, `firstName`, `lastName`, `dob`, `nic`, `phone`, `email`, `password`, `personalityType`, `hobies`, `games`, `join_date`, `end_date`, `image`) VALUES
(26, 'Mr.', 'John', 'Doe', '1968-07-18', '685896547V', '0775236547', 'john@gmail.com', 'e99a18c428cb38d5f260853678922e03', 'Entrepreneur', 'Community service, Playing an instrument', 'Basketball, Swimming', '2021-04-09', '2021-05-09', 'janz.png'),
(27, 'Mrs.', 'Meena', 'William', '1970-01-14', '70523698V', '0712563247', 'meena@gmail.com', 'e99a18c428cb38d5f260853678922e03', 'Entrepreneur', 'Art, Cooking or baking, Community service', 'Badminton, Archery', '2021-04-09', '2021-08-09', 'meena.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `membershippayment`
--

CREATE TABLE `membershippayment` (
  `id` int(20) NOT NULL,
  `pId` varchar(100) NOT NULL,
  `cus_email` varchar(100) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `pay_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membershippayment`
--

INSERT INTO `membershippayment` (`id`, `pId`, `cus_email`, `nic`, `phone`, `amount`, `pay_time`, `status`) VALUES
(12, '1617982343', 'john@gmail.com', '685896547V', '0775236547', '5', '2021-04-09 12:06:08', 'valid'),
(13, '1617982593', 'meena@gmail.com', '70523698V', '0712563247', '5', '2021-04-09 12:09:54', 'valid'),
(14, '1617983234', 'meena@gmail.com', '70523698V', '0712563247', '5', '2021-04-09 12:17:58', 'valid'),
(18, '1617984295', 'meena@gmail.com', '70523698V', '0712563247', '5', '2021-04-09 12:35:39', 'valid'),
(19, '1617984422', 'meena@gmail.com', '70523698V', '0712563247', '5', '2021-04-09 12:37:43', 'valid');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `orderno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `event` varchar(100) NOT NULL,
  `edate` timestamp NULL DEFAULT NULL,
  `payment_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `nic`, `orderno`, `email`, `phone`, `amount`, `event`, `edate`, `payment_time`, `status`) VALUES
(121, '70523698V', '1617983156', 'meena@gmail.com', '0712563247', '20', 'Sinhala and Tamil New Year 2021', '2021-04-13 03:30:00', '2021-04-09 15:46:05', 'valid');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `rate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `description`, `rate`) VALUES
(3, 'model', '100');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(300) NOT NULL,
  `position` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `position`) VALUES
(1, 'admin', 'admin123', 'Admin', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `hobby`
--
ALTER TABLE `hobby`
  ADD PRIMARY KEY (`hobby_id`);

--
-- Indexes for table `intrest`
--
ALTER TABLE `intrest`
  ADD PRIMARY KEY (`intrest_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membershippayment`
--
ALTER TABLE `membershippayment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hobby`
--
ALTER TABLE `hobby`
  MODIFY `hobby_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `intrest`
--
ALTER TABLE `intrest`
  MODIFY `intrest_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `membershippayment`
--
ALTER TABLE `membershippayment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
