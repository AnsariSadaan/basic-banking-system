-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 06:42 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noor_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `first_name`, `last_name`, `email_id`, `message`) VALUES
(7, 'ansari', 'sadaan', 'ansari@gmail.com', 'this is your message'),
(8, 'suraj', 'lohar', 'lohar@gmail.com', 'this is meeage'),
(9, 'khan', 'waseem', 'khanwaseem123@gmail.com', 'this is message'),
(10, 'ansari', 'sadaan', 'ansarisadan@gmail.com', 'this is message'),
(11, 'firoz', 'shaikh', 'firoz@gmail.com', 'this is message'),
(12, 'ansari', 'sadaan', 'ansarisadaan@gmail.com', 'this is message'),
(13, 'sameer', 'shaikh', 'sameer@gmail.com', 'this is message'),
(14, 'sajid', 'sayyed', 'sajid@gmail.com', 'this is message'),
(15, 'saad', 'ansari', 'saad@gmail.com', 'this is message');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sr no` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sr no`, `sender`, `receiver`, `balance`, `date`) VALUES
(1, 'sadaan', 'bilal', 1990, '2021-07-07 15:28:23'),
(2, 'bilal', 'sadaan', 1200, '2021-07-07 15:29:08'),
(3, 'sadaan', 'bilal', 2000, '2021-07-07 15:32:21'),
(4, 'jeet', 'bilal', 400000, '2021-07-07 16:06:28'),
(5, 'sohail', 'bilal', 1300, '2021-07-07 21:26:10'),
(6, 'afnan', 'sadaan', 12000, '2021-07-08 11:10:12'),
(7, 'khan', 'sadaan', 12000, '2021-07-08 11:34:28'),
(8, 'ansari', 'afnan', 1000, '2021-07-08 11:41:01'),
(9, 'aman', 'sadaan', 100000, '2021-07-08 15:09:34'),
(10, 'sadaanansari', 'aman', 12000, '2021-07-08 16:13:26'),
(11, 'abc', 'aman', 8900, '2021-07-08 16:23:43'),
(12, 'firoz', 'sohail', 3000, '2021-07-08 16:36:37'),
(13, 'ansari', 'firoz', 2000, '2021-07-08 16:46:34'),
(14, 'sameer', 'firoz', 4000, '2021-07-08 16:53:16'),
(15, 'sajid', 'sameer', 13000, '2021-07-08 21:38:49'),
(16, 'saad', 'abc', 1200, '2021-07-08 21:46:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email_id`, `balance`) VALUES
(4, 'sadaan', 'ansarisadaan72@gmail.com', 135210),
(5, 'bilal', 'bilal@gmail.com', 414090),
(6, 'jeet', 'jeetkori@gmail.com', 3600000),
(7, 'sohail', 'sohail@gmail.com', 81700),
(8, 'afnan', 'afnan123@gmail.com', 159000),
(9, 'khan', 'khan@gmail.com', 116900),
(10, 'ansari', 'ansari@gmail.com', 33000),
(11, 'aman', 'amanshaikh@gmail.com', 40900),
(12, 'sadaanansari', 'ansarisadaa72@gmail.com', 1188000),
(13, 'abc', 'abc@gmail.com', 72300),
(14, 'firoz', 'firoz@gmail.com', 33000),
(15, 'ansari', 'ansari@gmail.com', 29000),
(16, 'sameer', 'sameer@gmail.com', 49000),
(17, 'sajid', 'sajid@gmail.com', 127030),
(18, 'saad', 'saad@gmail.com', 28800);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sr no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sr no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
