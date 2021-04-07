-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 07:11 PM
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
(16, 'user1@gmail.com', '1234567890', 'user@gmail.com', 'Mr. Janz Clinston', '52', 'Driver', 'Laravel, PHP, Example', 'Ping Pong', 'janz.png'),
(17, 'user1@gmail.com', '0778675643', 'mohamed@gmail.com', 'Mr. Mohammed Rifkhan', '55', 'Analytical', 'Pagination', 'puzzle', 'png.png'),
(18, 'user1@gmail.com', '0764541155', 'jim@gmail.com', 'Mr. Jim Alton', '55', 'Analytical', 'Pagination', 'puzzle', 'wallpaper2you_13001.jpg'),
(19, 'ruwan@gmail.com', '0712365478', 'saman@gmail.com', 'Mr. Saman Kumara', '54', 'Analytical', 'Writing or blogging, Art', 'Bodybuilding', 'janz.png'),
(21, 'meena@gmail.com', '0786589741', 'ruwan@gmail.com', 'Mr. Ruwan Jayasinghe', '55', 'Analytical', 'Writing or blogging, Playing an instrument', 'Kite flying, Archery', 'janz.png');

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
(22, 'Mr.', 'John', 'Doe', '1968-02-07', '688547865V', '0782568974', 'John@gmail.com', 'e99a18c428cb38d5f260853678922e03', 'Driver', 'Travel, Exercising and healthcare', 'Cricket', '2021-04-05', '2021-05-05', 'janz.png'),
(23, 'Mr.', 'Ruwan', 'Jayasinghe', '1966-03-09', '665897413V', '0786589741', 'ruwan@gmail.com', 'e99a18c428cb38d5f260853678922e03', 'Analytical', 'Writing or blogging, Playing an instrument', 'Kite flying, Archery', '2021-04-06', '2021-04-06', 'janz.png'),
(24, 'Mr.', 'Saman', 'Kumara', '1966-07-12', '667842129V', '0712365478', 'saman@gmail.com', 'e99a18c428cb38d5f260853678922e03', 'Analytical', 'Writing or blogging, Art', 'Bodybuilding', '2021-04-06', '2021-05-06', 'janz.png'),
(25, 'Mrs.', 'Meena', 'Ann', '1970-06-17', '704589745V', '0775689742', 'meena@gmail.com', 'e99a18c428cb38d5f260853678922e03', 'Expressive', 'Playing an instrument', 'Swimming', '2021-04-07', '2021-06-07', 'meena.jpg');

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
(1, '1616170403', 'user1@gmail.com', '681256987V', '0772569874', '5', '2021-03-19 16:37:14', 'valid'),
(2, '1616171538', 'user1@gmail.com', '681256987V', '0772569874', '5', '2021-03-19 16:37:20', 'valid'),
(3, '1616171763', 'user1@gmail.com', '681256987V', '0772569874', '5', '2021-03-19 12:07:01', 'valid'),
(4, '1617605214', 'John@gmail.com', '688547865V', '0782568974', '5', '2021-04-05 03:29:50', 'valid'),
(5, '1617723038', 'ruwan@gmail.com', '665897413V', '0786589741', '5', '2021-04-06 12:07:22', 'valid'),
(6, '1617724022', 'saman@gmail.com', '667842129V', '0712365478', '5', '2021-04-06 12:20:34', 'valid'),
(7, '1617724409', 'John@gmail.com', '688547865V', '0782568974', '5', '2021-04-06 12:24:19', 'valid'),
(8, '1617811476', 'meena@gmail.com', '704589745V', '0775689742', '5', '2021-04-07 12:35:38', 'valid'),
(9, '1617813129', 'meena@gmail.com', '704589745V', '0775689742', '', '2021-04-07 13:03:26', 'valid'),
(10, '1617813129', 'meena@gmail.com', '704589745V', '0775689742', '', '2021-04-07 13:04:37', 'valid'),
(11, '1617813129', 'meena@gmail.com', '704589745V', '0775689742', '5', '2021-04-07 13:05:25', 'valid');

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
(113, '681256987V', '1616195209', 'user1@gmail.com', '0772569874', '2000', 'DJ Party', '2021-03-22 14:15:00', '2021-03-19 23:06:50', 'valid'),
(114, '681256987V', '1616195300', 'user1@gmail.com', '0772569874', '4000', 'EDM Night', '2021-04-23 13:15:00', '2021-03-19 23:08:22', 'valid'),
(115, '681256987V', '1616195423', 'user1@gmail.com', '0772569874', '4000', 'EDM Night', '2021-03-23 13:15:00', '2021-03-19 23:10:33', ''),
(116, '681256987V', '1616195443', 'user1@gmail.com', '0772569874', '4000', 'EDM Night', '2021-03-23 13:15:00', '2021-03-19 23:10:49', 'valid'),
(117, '665897413V', '1617723886', 'ruwan@gmail.com', '0786589741', '20', 'Sinhala and Tamil New Year 2021', '2021-04-13 03:30:00', '2021-04-06 15:44:52', ''),
(118, '665897413V', '1617723902', 'ruwan@gmail.com', '0786589741', '20', 'Sinhala and Tamil New Year 2021', '2021-04-13 03:30:00', '2021-04-06 15:45:07', 'valid'),
(119, '704589745V', '1617812333', 'meena@gmail.com', '0775689742', '20', 'Sinhala and Tamil New Year 2021', '2021-04-13 03:30:00', '2021-04-07 16:19:00', ''),
(120, '704589745V', '1617812537', 'meena@gmail.com', '0775689742', '20', 'Sinhala and Tamil New Year 2021', '2021-04-13 03:30:00', '2021-04-07 16:22:20', 'valid');

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
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `membershippayment`
--
ALTER TABLE `membershippayment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

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
