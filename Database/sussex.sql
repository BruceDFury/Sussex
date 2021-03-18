-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2021 at 10:09 PM
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
  `event_name` varchar(255) DEFAULT NULL,
  `event_startdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `event_enddate` date NOT NULL,
  `event_starttime` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `event_description` varchar(500) CHARACTER SET utf8mb4 NOT NULL,
  `event_price` varchar(11) CHARACTER SET utf8mb4 NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_name`, `event_startdate`, `event_enddate`, `event_starttime`, `event_description`, `event_price`, `photo`) VALUES
(1, 'nnnnnbcgcgc', '2021-03-18 09:45:13', '0000-00-00', '21:30', 'mmmm', '2000', ''),
(2, 'nnnnncghfhfh', '2021-03-18 09:45:18', '2021-10-21', '21:30', 'mmmm', '2000', ''),
(3, 'position', '2021-09-20 18:30:00', '2021-10-21', '21:30', 'mmmm', '2000', ''),
(4, 'nnnnn', '2021-09-20 18:30:00', '2021-10-21', '21:30', 'mmmm', '2000', '');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `event_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `event_date`) VALUES
(1, 'Walk-In', '2018-06-05 05:37:27'),
(2, 'Online Booking', '2018-06-05 21:07:05'),
(3, 'Facebook Booking', '2018-06-06 22:31:00');

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

-- --------------------------------------------------------

--
-- Table structure for table `hobby`
--

CREATE TABLE `hobby` (
  `hobby_id` int(11) NOT NULL,
  `hobby_name` varchar(255) NOT NULL,
  `hobby_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `games` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `title`, `firstName`, `lastName`, `dob`, `nic`, `phone`, `email`, `password`, `personalityType`, `hobies`, `games`, `image`) VALUES
(11, 'Mr.', 'Janz', 'Clinston', '1968-11-19', '123456789V', '1234567890', 'user@gmail.com', 'e99a18c428cb38d5f260853678922e03', 'Driver', 'Laravel, PHP, Example', 'Ping Pong', 'janz.png'),
(12, 'Mr.', 'Ishak ', 'khan', '1968-05-18', '029380213v', '0764531144', 'ishak@gmail.com', '0192023a7bbd73250516f069df18b500', 'Driver', 'Laravel 5', 'Ping Pong', '516B5WsSOeL._AC_.jpg'),
(13, 'Mrs.', 'Kithimini', 'Prabodh', '1966-01-20', '92837127v', '0776562110', 'kithmi@gmail.com', '0192023a7bbd73250516f069df18b500', 'Driver', 'Laravel 5', 'Ping Pong', 'mercedes.jpg'),
(14, 'Mr.', 'Mohammed', 'Rifkhan', '1965-06-01', '09743984623v', '0778675643', 'mohamed@gmail.com', '0192023a7bbd73250516f069df18b500', 'Analytical', 'Pagination', 'puzzle', 'png.png'),
(15, 'Mr.', 'Jim', 'Alton', '1966-02-15', '938473483v', '0764541155', 'jim@gmail.com', '0192023a7bbd73250516f069df18b500', 'Analytical', 'Pagination', 'puzzle', 'wallpaper2you_13001.jpg');

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
(89, '123456789V', '1616101268', 'user@gmail.com', '1234567890', '228', 'Rock Climbing', '2021-03-21 19:35:03', '2021-03-18 21:01:41', 'valid'),
(90, '123456789V', '1616101409', 'user@gmail.com', '1234567890', '228', 'Rock Climbing', '2021-03-21 19:35:03', '2021-03-18 21:03:30', '');

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
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hobby`
--
ALTER TABLE `hobby`
  MODIFY `hobby_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `intrest`
--
ALTER TABLE `intrest`
  MODIFY `intrest_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

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
