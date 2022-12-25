-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2022 at 03:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_saving`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` varchar(9) NOT NULL,
  `account_name` varchar(200) NOT NULL,
  `account_date` datetime NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `account_name`, `account_date`, `staff_id`) VALUES
('ACC-00001', 'มูฮัมหมัดอาริฟ หยีดาโอะ', '2022-11-20 10:35:07', 1),
('ACC-00002', 'ซอฟียะห์ บากา', '2022-11-01 16:36:58', 2),
('ACC-00003', 'สุจิตรา ประดิษฐ์แก้ว', '2022-11-27 16:06:31', 2),
('ACC-00004', 'ชัชพล ระบิลคดี', '2022-12-18 16:16:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `list_id` int(11) NOT NULL,
  `list_date` datetime NOT NULL,
  `amount` float NOT NULL,
  `account_id` varchar(9) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `list_type` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`list_id`, `list_date`, `amount`, `account_id`, `staff_id`, `list_type`) VALUES
(1, '2022-11-27 17:25:43', 200, 'ACC-00001', 1, 1),
(2, '2022-11-27 17:26:10', 300, 'ACC-00001', 1, 1),
(3, '2022-11-27 17:26:39', 100, 'ACC-00002', 1, 1),
(4, '2022-11-27 17:28:07', 300, 'ACC-00002', 1, 1),
(5, '2022-11-27 17:28:17', 2000, 'ACC-00001', 1, 1),
(6, '2022-11-27 17:28:24', 500, 'ACC-00002', 1, 1),
(7, '2022-11-27 17:37:03', 200, 'ACC-00001', 1, 2),
(8, '2022-11-27 17:37:43', 100, 'ACC-00001', 1, 2),
(9, '2022-11-27 17:39:16', 1000, 'ACC-00003', 1, 2),
(10, '2022-12-18 13:22:02', 100, 'ACC-00002', 1, 1),
(11, '2022-12-18 13:22:42', 50, 'ACC-00001', 1, 2),
(12, '2022-12-18 13:41:47', 200, 'ACC-00002', 1, 2),
(13, '2022-12-18 13:46:15', 100, 'ACC-00002', 1, 2),
(14, '2022-12-18 15:14:32', 2000, 'ACC-00001', 1, 1),
(15, '2022-12-18 15:16:59', 1000000, 'ACC-00001', 1, 1),
(16, '2022-12-18 15:25:01', 2000, 'ACC-00001', 1, 2),
(17, '2022-12-25 09:45:55', 100, 'ACC-00001', 1, 1),
(18, '2022-12-25 09:46:04', 200, 'ACC-00002', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(100) NOT NULL,
  `staff_lname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `staff_lname`, `username`, `password`) VALUES
(1, 'สมชาย', 'ใจดี', 'somchai', '123456'),
(2, 'มานา', 'มานี', 'mana', '654321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`list_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
