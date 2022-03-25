-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 04:00 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `prof_pic` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `admin_id`, `contact_no`, `email`, `password`, `prof_pic`) VALUES
('Tolusha Harindi', 1, 717437545, 'admin@gmail.com', 'admin@123', '');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `holder` varchar(50) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `code` int(10) NOT NULL,
  `account_no` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `worker_id`, `holder`, `bank_name`, `branch`, `code`, `account_no`) VALUES
(5, 14, 'Nitharsha', 'nsb bank', 'Trincomalee', 42, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category` varchar(30) NOT NULL,
  `logo` longtext NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category`, `logo`, `add_date`, `cat_id`) VALUES
('Plumber', 'plumber.png', '2022-01-19 17:58:07', 1),
('Masons', 'masons.png', '2022-01-19 19:57:22', 2),
('Tile', 'tile.png', '2022-01-19 20:08:52', 3),
('Carpenter', 'saw.png', '2022-01-19 20:19:02', 4),
('Painters', 'paintbrush.png', '2022-01-19 20:22:53', 5),
('CCTV repair', 'cctv.png', '2022-03-22 10:03:18', 6),
('Cleaner', 'cleaning.png', '2022-03-22 10:30:02', 7);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `reg_no` varchar(256) NOT NULL,
  `com_name` varchar(50) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `contact` text NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `address` varchar(50) NOT NULL,
  `prof_pic` blob NOT NULL,
  `experience` int(11) NOT NULL,
  `gs_certi` blob NOT NULL,
  `reg_certi` blob NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`reg_no`, `com_name`, `owner_name`, `contact`, `email`, `password`, `address`, `prof_pic`, `experience`, `gs_certi`, `reg_certi`, `status`) VALUES
('123456781', 'villams', '', '0784523781', 'villams@gmail.com', '$2y$10$pu5D.kc3vmPfQICtBW1V0el1Sh3dUL4t.IWM9r12TDYpQqnuw5YMG', '', '', 0, '', '', ''),
('123456787', 'villas', '', '0784523789', 'villas@gmail.com', '$2y$10$8lUIVVrJ48pX5LKF2l3ZieodwDAPz1yb1hH.jHLkfDwCBqDoFiHvy', '', '', 0, '', '', ''),
('123456788', 'villa', '', '0784523784', 'villa2@gmail.com', '$2y$10$JQ5oAVx6JzfRQD2lMkk1s.QDuCxMFJUGHur1Ycm.iRsvX5uidsxDm', '', '', 0, '', '', ''),
('123456789', 'Dreams2', '', '0784523784', 'dreams2@gmail.com', '$2y$10$usZphYwMxBniF9KZFh3PWe9mOkKsBMLuCXqoYC97TtQk4jLfAADRy', '', '', 0, '', '', ''),
('987654321', 'cart', '', '0718888888', 'cart@gmail.com', '$2y$10$4m5w1CT.5G21sFqGjkSc4.LpG39jEVgO6/a7fFcpDIcRMDhukfeAO', '', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `company_ads`
--

CREATE TABLE `company_ads` (
  `ads_id` int(11) NOT NULL,
  `reg_no` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `title` varchar(256) NOT NULL,
  `category` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `contact` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `budget` float NOT NULL,
  `work` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_ads`
--

INSERT INTO `company_ads` (`ads_id`, `reg_no`, `created_at`, `title`, `category`, `description`, `address`, `contact`, `start_date`, `end_date`, `budget`, `work`) VALUES
(1, '123456789', '2022-01-14 08:13:16', 'Need a Plumber', 'Pulmber', 'Experienced plumber', 'Nugegoda, Colombo', '0717777778', '2022-01-14', '2022-01-25', 2500, 'manager.png'),
(2, '123456787', '2022-01-14 00:00:00', 'Need a Mason', 'Mason', 'Experienced mason', 'Nugegoda, Colombo', '0789999999', '2022-01-21', '2022-01-26', 2700, 'worker.png'),
(3, '123456789', '2022-01-15 15:45:54', 'Need Electrician', 'Electrician', 'Well experienced Electrician', 'No 11, Galle', '0784523784', '2022-01-20', '2022-01-27', 3500, 'reg-2.png'),
(4, '123456789', '2022-01-15 15:48:35', 'Need a Cleaner', 'Cleaner', 'Well experienced Cleaner', 'No 11, Galle', '0784523784', '2022-01-19', '2022-01-22', 3500, 'w2.jpg'),
(5, '123456789', '2022-01-15 15:56:11', 'need a Plumber', 'Plumber', 'Well experineced Plumber', 'No 11, Galle', '0784523784', '2022-01-17', '2022-01-21', 2700, 'review.png'),
(6, '123456789', '2022-01-15 17:00:10', 'Need Electrician', 'Electrician', 'Well experienced Electrician', 'Nugegoda, Colombo', '0717437545', '2022-01-20', '2022-01-21', 2400, 'invite.png');

-- --------------------------------------------------------

--
-- Table structure for table `company_ads_request`
--

CREATE TABLE `company_ads_request` (
  `request_id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `ad_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `req_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `lname` varchar(256) NOT NULL,
  `contact` text NOT NULL,
  `email` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `prof_pic` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `fname`, `lname`, `contact`, `email`, `address`, `password`, `prof_pic`) VALUES
(1, 'Matheesha', '', '512323233', 'matheesha@gmail.com', '', '$2y$10$Y68', ''),
(2, 'Maleesha', '', '784523784', 'maleesha@gmail.com', '', '$2y$10$FEnNpNE6pmXTthemOEXi9OTcka0nxuRg3aN0OGoHfCZjNnklLCoBG', ''),
(3, 'Tolusha', 'Harindi', '0717437545', 'tolushaharindi@gmail.com', 'Weeragiri, Rathmale, Matara', '$2y$10$DVhreSxGFcxpFrC5jChdOOrWCPuVqU7/I6oXhQxPcjQjf2qJNpR7i', ''),
(4, 'Thisuri', 'Abeywardhana', '0112223334', 'thisu@gmail.com', 'bjbjcb,hjhjch,hjhjc', '$2y$10$e12x0axJ19h25jyQDGoijeExqEXs4QmlVWW1xaVm9GgvHWoL2iTvm', ''),
(5, 'Thisuri', 'Abeywardhana', '0784523784', 'thisu@gmail.com', 'Weeragiri, Rathmale, Matara', '$2y$10$WiN143Ol6CFSSUt6x6Beuel8lbVCS3.Zh5qc/hmf6oVtO4fbNIh/O', ''),
(6, 'Viranga', 'Gunarathne', '0784523784', 'vira@gmail.com', 'Weeragiri, Rathmale, Matara', '$2y$10$0ZlD6NiVJYmWvUpd4I7Yl.fSnw0Rii//ymG/JxRHKXqfWmmJXw3za', ''),
(7, 'Thushiyanthan', 'Sivanesan', '0754150879', 'thushiaara@gmail.com', '51, main street, Trincomalee', 'thushi06', ''),
(9, 'Krishanthan', 'Thevakumar', '0725090056', 'krish06@gmail.com', '147, College Street, Trincomalee', 'kichchu05', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer_ads`
--

CREATE TABLE `customer_ads` (
  `ads_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp(),
  `title` varchar(256) NOT NULL,
  `category` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `address` varchar(256) NOT NULL,
  `contact` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `budget` float NOT NULL,
  `work` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_ads`
--

INSERT INTO `customer_ads` (`ads_id`, `cus_id`, `post_date`, `title`, `category`, `description`, `address`, `contact`, `start_date`, `end_date`, `budget`, `work`) VALUES
(1, 3, '2022-01-13 00:00:00', 'Need a experienced Mason', 'Masons', 'urgent', 'No 11, galle road, Galle', '0714545456', '2022-01-14', '2022-01-16', 2500, 'work.jpg'),
(2, 3, '2022-01-15 14:13:13', 'need a Plumber', 'Plumber', 'Well experineced plimber', 'Weeragiri, Rathmale, Matara', '0784523784', '2022-01-14', '2022-01-20', 2500, 'admin.jpg'),
(3, 3, '2022-01-11 00:00:00', 'need a Plumber', 'Plumber', 'Well experineced plimber', 'Weeragiri, Rathmale, Matara', '0784523784', '2022-01-14', '2022-01-20', 2500, 'work.jpg'),
(4, 3, '2022-01-14 00:00:00', 'Need a carpenter', 'Carpenter', 'experienced carpenter', 'Nugegoda, Colombo', '0714545456', '2022-01-14', '2022-01-16', 2700, 'ad.png'),
(5, 6, '2022-01-14 00:00:00', 'need a Plumber', 'Plumber', 'Well experineced plimber', 'Nugegoda, Colombo', '0714545456', '2022-01-15', '2022-01-26', 2500, 'company.png'),
(6, 6, '2022-01-10 00:00:00', 'Need a person who can tile', 'Tile', 'experienced', 'Nugegoda, Colombo', '0714545456', '2022-01-15', '2022-01-17', 2700, 'ad.png'),
(7, 3, '2022-01-11 00:00:00', 'Need Mason', 'Mason', 'Well experineced mason', 'Nugegoda, Colombo', '0714545456', '2022-01-15', '2022-01-20', 2400, 'worker.png'),
(8, 3, '2022-01-16 17:21:14', 'Need  Electrician', 'Electrician', 'Professional Electrician', 'Nugegoda, Colombo', '0714545456', '2022-01-18', '2022-01-28', 2700, 'log-background.jpg'),
(9, 3, '2022-01-10 04:17:07', 'Need Mason', 'Mason', 'Well experineced mason', 'mamn, njcj, hjhjdhj', '0374567892', '2022-01-27', '2022-01-29', 2500, 'atm.png'),
(10, 3, '2022-01-15 10:18:20', 'Need Electrician', 'Electrician', 'Well experienced Electrician', 'No 11, Galle', '0784523784', '2022-01-21', '2022-01-24', 3500, 'reg-2.png');

-- --------------------------------------------------------

--
-- Table structure for table `customer_ads_request`
--

CREATE TABLE `customer_ads_request` (
  `request_id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `ad_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `req_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL,
  `question` mediumtext NOT NULL,
  `answer` mediumtext NOT NULL,
  `added_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `invite_company_jobs`
--

CREATE TABLE `invite_company_jobs` (
  `job_id` int(11) NOT NULL,
  `reg_no` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `time` time NOT NULL,
  `start_date` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `budget` float NOT NULL,
  `invite_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `invite_jobs`
--

CREATE TABLE `invite_jobs` (
  `job_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `time` time NOT NULL,
  `start_date` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `budget` float NOT NULL,
  `invite_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invite_jobs`
--

INSERT INTO `invite_jobs` (`job_id`, `cus_id`, `worker_id`, `time`, `start_date`, `address`, `budget`, `invite_at`, `status`) VALUES
(1, 2, 14, '15:30:34', '2022-03-25', '32, Vidyalayam Road, Trincomalee', 1000, '2022-03-23 10:17:52', ''),
(2, 3, 14, '19:00:14', '2022-03-31', '12, Main road, Muthoor, Trincomalee', 650, '2022-03-23 10:19:16', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `reg_no` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adm_nic` varchar(12) NOT NULL,
  `manager_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loguser`
--

CREATE TABLE `loguser` (
  `user_type` int(11) NOT NULL,
  `user_cat_id` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `name` varchar(50) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `nic` varchar(11) NOT NULL,
  `password` varchar(256) NOT NULL,
  `profile` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`name`, `manager_id`, `email`, `contact`, `address`, `nic`, `password`, `profile`) VALUES
('Kasun Perera', 1, 'manager@gmail.com', '0711234567', '123, Nugegoda, Colombo', '321456789V', 'manager@123', 'w3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `paid_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `cus_id`, `worker_id`, `fname`, `lname`, `contact_no`, `amount`, `paid_at`) VALUES
(1, 4, 14, 'Thisuri', 'Abeyavardhana', 761788922, 1400, '2022-03-23 07:55:30'),
(3, 6, 14, 'Viranga', 'Gunaratna', 774522849, 1000, '2022-03-23 07:55:40');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `rep_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `reg_no` varchar(20) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `comment` mediumtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `reg_no` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `worker_id` int(11) NOT NULL,
  `sender` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `review` text CHARACTER SET utf8mb4 NOT NULL,
  `ratings` smallint(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `worker_id`, `cus_id`, `cus_name`, `address`, `contact_no`, `date`, `start_time`, `end_time`, `created_at`, `status`) VALUES
(1, 14, 7, 'Thushiyanthan', '51, main street, Trincomalee', 754150879, '2022-03-30', '09:30:00', '11:30:00', '2022-03-23 21:01:05', ''),
(2, 14, 9, 'Krishanthan', '147, College Street, Trincomalee', 725090056, '2022-03-26', '10:00:00', '13:00:00', '2022-03-23 20:01:24', '');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `category` mediumtext NOT NULL,
  `working_city` longtext NOT NULL,
  `working_district` longtext NOT NULL,
  `working_days` longtext NOT NULL,
  `gs_certi` blob NOT NULL,
  `qualification` longblob NOT NULL,
  `exp_year` int(11) NOT NULL,
  `work_hour` time NOT NULL,
  `call_time` time NOT NULL,
  `experience` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `worker_id`, `category`, `working_city`, `working_district`, `working_days`, `gs_certi`, `qualification`, `exp_year`, `work_hour`, `call_time`, `experience`) VALUES
(2, 14, 'Painter', 'Trinco town', 'Trincomalee', 'Monday,Tuesday,Wednesday', '', '', 3, '00:00:09', '00:00:19', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`) VALUES
(1, 'admin'),
(2, 'manager'),
(3, 'worker'),
(4, 'customer'),
(5, 'company');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `worker_id` int(11) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `lname` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `contact` text NOT NULL,
  `password` varchar(256) NOT NULL,
  `verify_token` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `address` varchar(256) NOT NULL,
  `district` varchar(256) NOT NULL,
  `city` varchar(256) NOT NULL,
  `nic_front` blob NOT NULL,
  `nic_back` blob NOT NULL,
  `prof_pic` longtext NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`worker_id`, `nic`, `fname`, `lname`, `email`, `contact`, `password`, `verify_token`, `created_at`, `address`, `district`, `city`, `nic_front`, `nic_back`, `prof_pic`, `status`) VALUES
(14, '995960087V', 'Nitharsha', 'Thevakumar', 'nitharshathev@gmail.com', '0761680630', '$2y$10$.mnLvxbBsbX2YXuh3gRAcOEdGyfxRfuE1gK8VRRQqz1OqzZAujSLS', '3700a00be5f665bb94f19457c8981b0d', '2022-03-23 18:11:23', '11, College Lane, Trincomalee', 'Trincomalee', 'Trincomalee town', 0x3f504e470d0a1a0a0000000d494844520000012c0000003f08060000003f3f053f0000000173524742003f3f1c3f0000000467414d4100003f3f0b3f6105000000097048597300000e3f00000e3f013f6f3f6400001b0049444154785e3f3f09503f3f7d3f3f3f3f343f3f683a3f363f6c733f3f366932c9b469d3b44d333f69333f663f344d3f3f3f3f3f253f3f3f3f3f3f3f3f3f006c7c613fd7bb3f3f073f173f623f273f3618733f2040023f2521404248482f3f3f4d3f3f1e3f3f3f3f3f173f3f573f7b3f336b3f173f3f5d3f3f3f3f7a3f3f3f3f3f3f1330c69812703f18633f3f3f623f2906073f313f181c2cc69862703f18633f3f3f623f2906073f313f181c2cc69862703f18633f3f3f623f2906073f313f181c2cc69862703f18633f212b586363633f3f3f603f3fc69c3f110b3fce8c453f3f2e3f3f3f58413f732c0b295822543f3f113f0c3f3f3f1f3f493f3f363438503f3f583f3f3f760c0c3f3f3f6a3f282a3f3f3f344c3f7f3f0a1a2c113f21c7833f1e702c113fcabb7d3f3fc5a23f3f3f552c3f72773f5b543f3f3fc58a3f563f603f3f463f3f3f1a573f385a2c3f0c3f463f391a6b443f3f3f45493f0a1a2cc39032363f7b3f385a2c5a6c363b3f3f3f453f6029295a413f453d3f583f1d2c3f3f3f223f6c3f3f3f3f583f1e2c41093f0a182c713f3f7a3f3f3f0a3f3f3f623f641e516e3f3f583f563f074b68503f3f3f3f583f293d58422c472b213f25703f58243f433f3f5b3f3f62325a09132c3f3f3f665a3f044b3f3f6825543f043f163f493f142c21d6a23f703f12385a6c3f3f5b3f3f583f5642064b3f683d653f3f703f3f052c593f043f663f0a6a3fdcb93f3fc8805a3f3f3f5b3c064b3f3f68256c3f043f3f3f673f763f3f413f293f793fe6a1a93f3f3f3f44153f3f1262215a610d56473f0e3f3f7654353f67443f3f3f3b7b743fcf9e4a3f3f443f3f3f3f3f3f183f6addba753f3f3f2b2b2b4b3f3f31393f3f3f1b3f3f743f3f783f3f4b3f5a3f3f393fcf971b2c213f3f0a5b3f7a743f3f060b3f3f263f3f673f3f0f3f6a3f3f443f3fdebd7b3f10c9a13f3f3f3f763f733f0e5e7f3f753f542a3f3f782227583f1d3f3f733c3f44143f3f3f3f6009d18c56d8823f3f3f476e3f3f3f3f3f3f3f3f3f132c21513f3f753f563f3f3f3e7d1a3f3f3f7e3f3f3f792c2f7474743f3f3f223f253f133f3f3f3f3f3f323f424e3f3f5b3a3f3f773f3f3f1e3f3f174c3158423f3f153f60697b3f3fc69a095d7d7a3f3f3f3f3f4e6e583912315a3f3f3f3f3f213f73313f3f1e3f0b3f064b10273f6b6a6a3f3fe2819c603f3f353f3f1d6e3f6d3f3fcfbf5f52413f0e42153f683f3f1c3f3f3f3f3658383f3f773f3f5b1c3f7e583f3fdcb072245a3f221d2c61ce9c393f3f5ad4b24a2727583f7d3f3f6dd6903f3f703f693f3877263f3f5f3f3f4a3f063f3f743f3f1a2c416c1c717838133f3f6c783f3f3f46723fca9548d18a463f3fd9b3673f3f3f3f5c5e3f3f044b10273f3f290e3f3f3e6d3f3f3f773f5d103f3f6f3f2b265f037244325a610f56343f3f393f2a6ac88d2a573c453f3b16723f3f57283f123f3fc4982e3f3f3f243f3f115e7e3f651416167a7c3f3f3f0d563f693f3d3f68153f3f013922153f3f0a3f203f3fd8a2413f3f725c3f3f3fdcb83f3f3f68513f3f3f3f3f42095656563f3f323f3f3f3f4b3f7d3f3f3f3f2b3fd28225687b3f3f4727623f063f75103f48442b3f3fe5ada57d3f3f3f3f3f186a3f280d150a393f3f2b3f3f123f3f3f3c3f5fc994182c773f3fd5a63e3f523f38143f3f4b3f3f7d3f3f3f463f3f353f3f3f3f1d3f3f3f4c483f3f3f3f4a3f3f6009d3893f3f3f15cd933f3f4c255a1c3f713f3f154a3f3f7a3f73643f3f3f3f3f7d3f4738723f3f3f393f3f3f4a1753273f1d7a023f740f643f3f52543f3f393f2114723f152f3f0a245a3f121e3f7e3f5c563f3f044b443f263f3f1a3f3f4a3f14133f680f1c0d3f3f68713f7c3f2358274f3f243f3f07723f15ed81a33f3f1b2d3f044b3f7e520f6026501fcd91233f68713f7c4d37583f3f3f3f323f424e3f3f3fd19c50c9893f623f153f0f3f3f154a3f1221583f53cb8871533f3f3f7e6ddab43f63793f3f3f3f3f6f17573f2e5f3f4c3f1e4f3f042b3f1f7e3f233f68293f1c56343f3f3f3f603f4a3f603f3f3f3f03243fc2850b3f1300523f3f723f3f5d3f3fe591b73f1b393f1227dca3393f3f5c3f444b513f523f403f4a3f600d0d0d2139393f3f51283f3f3f3f3f75673f5a3f7f3f47723f3f443f3f3f3f3f007f3f4a3f60093f3f6e3fdab5643f3f3f3f7f3e3f5d3f463f5f223f3f60093f3f3f3f3f102a5a3f122c1731663f3f3f3f282929093f3f3f2a3f3f3f3f483f60093f3f3f3f3f203f68255a3f3f3f254a3f042a5a1c3f08733f16073fc995483f123f3f3f3f603f3f0d62247a533f36263f3f3f4319123f3f16073f3f2537583f5d6f3f4e1e3f7c3f3a3f7a3f323f3f3d5a3f093f783f540c3b703f36563f3f7a3f3f3f2b3f3f3f7a3f3f3f3f39425d7c3f4f7c3f593f793f3f3f4a2e3f3f3f044bc4807a3f3f1a4d572f3f3f3f5c3f524c3f3f3f3f3f503f723f3d326a3f24123f563f553f563f3f140a1b376e3f3f60203f37113f0956436b273f3f3f353f3f3c3f3f3f443f3f1c3f3f122e1c3f203f3f3f283f476e162c58403f3f3fd2a54b3f3334503f3f681239583f3f3c426e3f703f433f203f3f3f283f6d3f36193f575e793f793828463f0b3f3f3f733f163f3f5d1c26523f3f68123f3f3f45313f123fe5a4bb3b6a3f24023f77e58a91203f5f792f233f3f3f5d5c09473f3f3f5e263f243f4977773f0a563c3f3f4b2210173f703f683f3f3f3f32623f3f3f5e7b6d723971623f5a2e3f3f0d563f3f6045193f5d123f3f5b3f26433f613f06721961d1a2453f3f5554543f3f24120e16072b3f3f3f3f083858533f083f320c1a61343f3f3f753f623f3f3a4e3f7d343f3f1d3f3f3f0a3f3f2e3f4e3f3f3f3fc8980c3f3fc58b3f133f513f0f093f1d3b3f3f3f3f1d3f133f3f31583f3f410c3f3f3863243f403d3f483f6005416d3f78263e002d66627045482e3fc7a53f3f3f3f4e043f143f3f213f633f69343f3f72173f603f3f047e3f353f09003f3f12cfa63b3f3f505050403f77223f132c313f663f273f3f0a313e6c3f183f4b3f3f153f60456a3f3f3f724e3f3f3f3f3f12733f53113f233f3f3f2c3f3f60456a3f64393f3d3f3fdaa33f163f60453f22143f25676c093f5d3f19076b7a3f042b52173f083f3f3fd8a03f3f2a3f3f3f2a3f061f0c3f3f627f312e1b4a3f3f602534563f7c3f303f3f3f3f2e3f79273f31503f3f123f38583f2327583f3f3f57303f103f6a0d3f3f5e3f701b56683f3f773f3f3f3f4b5f3f474a7e463f3f3f243f6b3f763fecba843f3f3f3f3f3f7a0e2b1217523f2e3f17623f3f4b3c3f604d3f3f603f3f70303f17520d463f3f663f3f3f453f1c7b523f3f0f3f0f3f1b3f38053f3f3f2f634e4b264a4c3f3f3f3f153f600933793f3f3f3fcaa53f3f3f123f38583f2327583f383f2e4e51503fd7993fd9a33f683f58d58f743f6f6ad790213f3f056d47603f4f6f6069d883156f3f3f123fce9f3f4f46480e71592f3f3f133f3f60453f3f303f3f68153f183f3fddb93f3f3f3f64783f3f4b3f293f3d54433f3f50703f3f3f3f4b3c3f3f3f3f3fd9b33f103f3f3f575f457b7b3b79df8940293f1223d3a93f173f3f3f5b0f3f3f093f3f3f3f3f193f7d3f3f073f3f0a3f3f2ef1aeacac0c070f1e743f763f3fd0a143686c6c243f33512821583f3f0d3f443f5c3f1a2d0e56103f7661cc9f580f563f433f373f3f3f713f29225a57074a3f753f3f4f3f07416d173f3f3f3f3f3f3f267a3f3f3f4005193f605e3f7e033f69d9837f533f3f1f3f3f233f093f733f493f3f423f472d3f3f3f610d2c3f3f09563f3f353f4f793f3f3f3f3f1a3f0f3fd98a3f64503f3fcb9a153f33523f3f3f3f37703f3f7e3f3f386e3f13703f16653f2a3f673f3f095b3f783f28633f3f15e981a36d3f3d3f3a2f523f4d3fc49f6fd4ae3f3f7f3f133f3f3f536c55c98ed6b53f3272ddbc3f2d5862773f3f483f3f3f3f3f663f3f60453f3f393f613f31503f363f3f3f3fdab51369020a2d3f3f3f393f3fda933f7c32303f3f3f3f3f3f3f3f3f3f3f3f543f753f3f2d583f3f673f3f052b3f1f7e163f3f3f3f3f3f3f4206c49f3f6f3f303f243f3f613f3f5ecf94273f3f3f233f3f061c3f3f3f3f3f3c6e0f460c543f3f3f5d583f613f3f322c3f3f093f3f3f323f5f3f3f3f353fc4b95b6a7d3f3f5c4c3fc39f553f3d29d79f1f346d3f3f7d3f2e6f3f563fcfaa3f3f3f1e3f123f71721ddd8535583f3f3f2e3f3f2327583f243f3f7b5d3f473f3f70043f3f3b7b22473f3f3f563fdcbe3f3f3f6f3f3f3f1ec89f572d3f59476f1c3f203f3fc2983f3f1a2c6a3f7531703f0a472033193f3f2d3f393f3f663f3f743f3f0a3f3f2e3f3f133f3f123f653f755d3f3f1e190eca8b3f6f62566b06723f3f2672043f3f3a3f3f3f3f793f3f3f3f5b3f3f3f3f573f3f3f3f093f39430e56103f7661cc9f580c3f183f4e3f3f3f346e253f3f3f3f3f3f3f3f3f2713193f3fe7bea53f3f5f4a663f07e4baba703f3f3f3f0b633f3f623f3f7e3f3f77753f3f6878133fd9a73f47f3a49fbc5f3f363f05725d5d3f1a2c3f543d4b74723f153f4bd5abdabb3f753f763f735d4532583f3b3f3f7575095b3f3f5b3f623f003f3f6a2c113f3fc4ba523f3f426d173f3f3f132c313f3f7a3f3f5b4d133d062b3f594423192c313f323f3f2e610b563f367e383f193f456d17453f3f3f3f3f213fdebc3f3f773f503f313f3f763f3f3f453f23353f6e3f36491a466b3f3d3f3f3f4f3f4b3f3f153f3f4e0f3f3f3f3f3f06352a3f35304b3f3f4a242758627a623f3f196e3f3262d4ba3f473f1e321a3f22193f3f7d3f3f75753f6005416d173f3f6a1f3fd4be7d38713f363f4a3f505a741b3f3f3f40c6a9227459c7973f355fc29e633f613f3f213f513f3f3f3f163f42053f0e3f676e3f3f3f7c74d8bd6e3fd8863f515d3f3f3f1e40da9e3f48cdba073d076bc68d3f3f4e3f3f553f43463f5b243f252e74e1bd9e3f3f3f30086a3f283fd4877b473f3f6c3f3f3f1e3f343f3f736938723f1b763f3f530d3f3f3f2a324f3f3f3f133f3f3f1a3f3f2b3f3f5b38733f363f3f0318517f3f7d471337583f3f256f18343f3f6b3f6068533f442a583f333f3f3f613f3f3f3f4f3f07416d1745193f473f3f7750643f7d223f543fd89c2cc6a02318530b3f153f1733703f3f103f1e3f443f3f463f3f3f606c091e2c211227dd855e3f3f3f5e573f3f483f3f5b3f3f252e1fe6bd8e3f3f1a3f78446d17453f3f513f3f2e1c2f3f0e183f29053f5c3f733f3f1d3f3f3f3f0f3f3f747a366a463f6e0f3f3f15393f213f3d2c41cc92403f3f5d3f3f3f3f7d3f5c47771c3f203f3f3f34765d052e1ed8853f1357703f3f0d3f16626f4b043f3f653f37343a3f653f3f503f3f3f3f3f253f58760a693f3f274ed49b3f3f3f3f3f4c213f7c3f60453f783d7b3f3f3f6233150f773f08d6a74a3f3827123f5e3f6f1c3f203f3f3f483f095d353f3f763f283f763f3f3f3f3f513f354f3f45046b3f3f3fc8be74093f7c3fc3913f7b3d3f250d3f3f3f343f3f3f3f503f3f3e07693f3f1f623e3f3f3f3f3f755c3f3e2e3f3f3f3f3f4e3f60453f75743f677dc585523f5c3f3f3f3f4b243f3f3f763f673f281c3f203f3f3f783f03687b74054776673f6ad3b0335a720f09257d213f3f5d423fc4bb3f4e3f665c4a3b3f42313f411a4267432d6a6b3fd5b53f3d5d6e02072b3f063f1c161e3f3f49463f3f3f69064b3d3f273f3f453f6c57593f3f6f3f713f3f3f3f3f3f48663d3f3f3f513f3f6d3f3f0c763f3f3f1929793f3f3f3f3f216cd9913f733f3f3f1d5b703f764f483f3f1c3fc8a3666d107e183f733f3f723f623f3f3f3f3f3f3f3f1a3b3f3f3e3f3f3f3f073f713f3f3f3f3f3f38433f55001d11057b3f753f3f70035a3f3f60393f5e3f3f3f763f273f3f3e431c3f3f3f3f3f3f21133fde9d563d3e3b3f3f3f4c3f3f3f373f3f3f0f072b086a3f28caa81a3f333f703f51372c3f3f6e3f473f793f1ed2b5563f3a3f3f132c313f2a3f3f4d7451513f773fd6a13f3f3f64713f3f3f3f5e3f3f463f3fc99c3f783a3f523f181d561d3f2e3f703f023f39503f45696c3f3f3f7e623f23322770263f022e643f4456461a0e5f283f3f4877313f6a2f3f3f3f3f39ec93a03f77147b43183f3f3f3f0e313f543f3f3f3f3f62283f483f443f34563f3f3f3f040c3f3f333f0f3a113f073f69393f3f663f43473f0a3f3f4ee887833f01313f462c563f3f146b3f3f5c505510d1927b251d395e3f7a634a3f123f064b3c303f0127023f703f3f5a193f262e034f3d3f623f3f3f3bcfbb4b3f3f363f3f3f3f583f7614263f3f3f3f42153458363f3f7c3f3f3f6e0f3f3f263f28463f3f7c3e3f227f3f3f0431466b573f657c3f343f293f3f117b5537063fc89f23473f6009163f283f60e399953f3f37633f103f3f063f263f79156b3f3f3f363f3f4c0e3fc485210e3f3f393f6a433f3f1f715109315c223f503f3f3f3f5c21054b107b5a3f3f503c403f3f3f033f3f3f613f3f3f583f6d3f583f3f0b543f3f12273f3f3f5a2c116f2e513f3f29c5a626e7b8a93f2d3f3f6a3f327c3f742e3e5a323f39563f0f3f3f3f3b3f3f48717d3f3f74773f6a3f2f3f3f1d21073f31c6a23f3f3f18530c0e16634c3138583f313f3f60313f143f3f3f18530c0e16634c3138583f313f3f60313f14234c3f3f3f3f3f1a723f5c3f1521371779370b51523f3f29463f0e3f1954283f3f246f636c3f59503e70133f433d3f3f407a3f263f60693f593f1d3f3f3d403f49073f3f324f493f3e140e3c3f3f3f3f383f5f3f7b167a4659773f51352e19433f3fd8af3f613f1b1f3f6d3f6d1c703f3f3f563f1f3f1e67433f3f02372d3f3f3f483f3f653f3f3d733f6043263f1f3f3f743f3f3e3f583f183fcbb63f54513f733f383f7b673f64447b691e3fdbbb063f736661ce9e7b3f723f3f303f3f3c3f563f3f3f6a3f303f7e3f3fc5893f2d3f7c3f2e3f3f3f2c3f3f781b3f6f583f675b3e3f3d3f0f3f5b513f7f127f5d3f0a2f3f64615e3f493f533fe3abb53f3f3f3f42547a3f1c3f3f5033781b3fdbb63f3f3f0b3f3f3f623f3f651819793f794d3fc4973f3f3f3f7916c99a743f503f063f3f69463f3f3f3f763f1657743f3f3f633f3f572d3f3f1b3f1e3f4f47183f350f6b3f6b3f7e7b3f3f3f3f0c7e3f3f0419053f267c3f213f121c7d3309296b3f70323f043f673f611e073f453f3f193f3f363f7b3f3f3f633f603f3f613f563c3f3f3f433f3f5b3f763f6a593f173a1bdd963f3f1d383f3f3f3f3f3a3f3f3f3f4c3f3f3fdab21a3f775441ef8a873f023f68583f671d3f593f3f406e3f4e7c7a3f3f3f5a3f3f69153f3f3f023fdbbf3f3f3f3f7e3f463f617c3f39443f3f493c3f08d9b73f3f3f7f3f0aeb9a972929583f3f3f3f3f583f30c3b11b1b3f3f5a467b3f6e1f3f581f09dd9737703f581458703f6b1b3fd7943f463f363c3f1e2c3f0e3f3f3f3f3f3f3f3f360d3f3f3f355e403f6b3f496a3f3f3f553f3f5e473f3f1c7b3523793f4e3f1e3f755d7352d2a1726408363f3f123f7b774d3958163f297c3f3f7d3f3f393f63413f66353f3f3f3a393f3f3fda816a3f3f0f633fd8a93f6039483d3f3f793e523f3f6719741c3f3f7f3f773f3fc78a3f0b3f3f3f6a3f1e3f413f3f382e3f763f3f3f616c7d6b29523f533f6c3f1e3f773f453f3f310e163f0e3f3f253f553f3f38336a433f4f3f3f3f3f711d376c3f3f23583f673f5c3f39dc9b783f5b3f673f5c3f713f3f77713f312d763f3f3f2b066a723f3f053f643f3f3f3f3f3f3f3f363f5b3f1bf0a2b6993f0e5b3f3f7a62473f3f3f483f5734f1b584be07073f3f2f3f3f3f3f5a68074d183f6e3f3f535b3f28653b3f346e535d3f3b3f3f3f4578633f793c523f316c1e4447452ed2972d3f3f0b3f3f3f3f3f3f603f283f5a3f3f693d7e663040723f067c3f3f3f1d3f3f3f3f054d39063f5f4b683f4b3f2755373f3f753f28343f0b3f5f631d3f3f3f165e193f33333f723f25413f3f3f795b3fc7bf36153f603f621c28123f23dd973f3f3f3f5b484a3f433f3f373f3f3f3f0c243f3f2f3f5bdc977b3f513f193f3f453a0a3f3f3f4e3f603f481b45713f0e7c595d043f33323f073f6e3f3f1f3f3f3f663f6b1249113f6d3f643f430c792d1b3f3f083f3f363f617c3f3f2a1e3f3b3f51723f063edc8a793f103f3f3f1f6420693f693f3f3f5b3f70133b3f6f426e3f3816373f4146123f3f563fdeaf3f1d053f3f513f173f79310e163f3f11732e3f3f3f303f5b5d3f3f103f253f3f5d3f163f3f513f2d6747793f567c3f113f613f6543163f603f3f793f5e3f6e6c31073f3f4f3f3feabeb2113f3f3f3f3f3f1d3f6c3f5e543f433f3f3f3f3f55383f7a113f3f3b363fd4813f3f3f233f303f783f6038582c3f240d523f3f3f471e273f4308d6980e3f6b363f794d315a3d0e3feca88a3f3d2c3f3f115e6ed8803f1b3f370026293758563f1d493f3f3fd58e3f3f3f3f4a3e58423f7f3f3f3f3f66010e3c723c483f5e543f3f243f2b3f60313f3f3f3f67173e5377003f747771683f1d6c6c5b3f4f373f3f7e3f3f59435e3f383f4c3fd5b51dcfb63f3f3fcf913f043f2e033f547d08553f7358763f0a0b797b3f3f253f1a3f3f690d3f3f3f0d463f760f3f0d3f3f043f163f3f483f7807433f217f2b5edb9a4f5f3f3f5a3f23292b703f3f713f2e0d3f3f3fd7b0253f3f5c3f5c1c2c162966143f3f61713f192f3f3f723f6a7c3f3f20163a3f5e3f6f713f3f51543f3f3f171b3f3f3f3f3e3f611d3f3f5f3f663f7d3f1d453f31353f372d3f4f673f5d3f493f233f3fd6b53f4667353f43393f3f3f6049063f1e5d3f3f4d573f3e3f3f43eab8840d495b3f3f3f3f3f3f3f3f30162f393f0a3f49763b3f733f623f3f020c7a3f3f523f3f653f3f3f3f392c3f043f0e0925680c273f6243163f093f113f310d36363f3f3f3f764d3f3f3f64355f3f376b3f3f3f283f7a08433f3f3f38dbbe11cfa91f3f393f58093f0a3f64466f63213f3f5e3f3f153f3f3f3d4ed2a02362cbb0303f221a3f4f3f3f3f593fcca53fd89e3f3fdca33f3f0b3f3f78290e3f773f783f3f3f6b4f3f474a3f55743f7b3f3f03073f451b152c093fc68b3f767d1a3f0d073f3f3f6f3c3f3f3f6e433f403f3f3f773f3f026f363fc6b73f3f3f7c0631403f3f06513f3f3f3f234f7f3f646b3fd1bec7a8723f3fc686713f6b073f543f3f627f3f3f283f1d3f3978693f1ccc9d3b3f693f3f3f48593f3f3f3f0f3f3611d5b7763f3f3f3a3f243f3f3f763f613f3f35583f3f123f573f313f1121093f3f5c3f5d3f3f253f76202d6d377e3f22056f6e393f525d287b5702073f451b112c3f5e4b3f6a313e523f143f3f594e583f3f6b1b3fde9c3f43333f3f1f373f125f68dc831f3f1d3f3f3f363f3f3f3f3f3f3f1a3f3f3f3f09102c3f0e3f3fc59e3f763f3fc4a0d5af3f3f3f3f3f3fd797643f3f3f553f3f633f3a3ad4a6623f3f3f73263f6e3f3f3f6a503f3f3f14e5b5ad3f3307083f64427753054a4b2bd0a035067e773f3f783636023f3f193f072b3f3f3f033f523f3f3f3f2f3f3f623f3f50713f18633f3f3f623f2906073f313f181c2cc69862703f18633f3f3f623f2906073f313f181c2cc69862703f18633f3f3f623f2906073f313f181c2cc698423c3f3f034e123f3f3f3f513f0000000049454e443f42603f, 0x3f504e470d0a1a0a0000000d49484452000001360000003f08060000004a043f3f0000000173524742003f3f1c3f0000000467414d4100003f3f0b3f6105000000097048597300000e3f00000e3f013f6f3f6400001c5a49444154785e3f3f0970533f7dc79b3f3f3f3f3f243f6c3f3f643f243f3f3f3f3f4d363f3f3f343fc9a4334d66373f6e16c8b22c3f2e783f3f3f020b0b3f0a3f6d6e733f3f3f3f18033f05731b303f01dfb23f533f6dc9b6245b3f3f4c273f643f3f5f583f2c3f643f3f3f3f3f3f333f193f7b3f3f3f3f3f3f3f3f7f3f3f3fc9932760183f51132c363f6154073f3f61183f3f62631846753f3f183f511d2c363f6154073f3f61183f3f3fd8ac361b3f3f210c183f1147674f1f4646463f78333f742049123f3f160c3f3f3c3b3f743f3f3f7847333f3f263f203f3f207a3f3f114b3f3f093f3f1f3fdc983f603f62253f69243f57503f3f3f76323fd18a6c3f493f283f3f235b6a02213f2b3f3f3fdc9869271a3f263f3f103f78673f24373f62330f0d3f3f12693f3f3f72633f3f3f5147413f30403f3f483f2536353f4d3f3f3f3f3f3f4b72171bcb8d3f2e2c561b3f3f2311773f093f20373f623f1224123f143f3f3fc6843f3f610b3f3f23114f3f093f5d6e3f3f263f3f543f44223f3f042c37263f443f3f043f2c3f3f113f3f3fc6840b353f4d103f723f293f09586e4c38503f3f043f283f3f133f3f3fc6841a353f4d106d723f493f09586e4c28513f3f043f243f3f153f3f3f3f3f3f333f2a7a3f1e3f3f3f2828283f3f3f3f227475753f61303f143f205a3f163f62133fdc9e623fd9b07f3f7ecc9c39133f3f3f3f6c763fd8813f3f21323f58463f6213443f3f42263f3f3f3e3f763f3f3f0e473f3f3d054a3f26603f3d414a4a0a292e397c3f3f3f643f3f3f793f423f3f31353f546c3f7d063f3a3f3f1e0c3f1c3f533f1528153f203f3f16123f695b3a503f690e290d3f3f3f3f3f113f203f3f3f3f3f4861293f3f3f3f0c3f3f3f3f30366e3f083f3f421e571b4a3f3fd9a347657d0b3fcf8345655d3f3f3f413f3f1f3f0922596e41173f483c2a614341473f3f173f3f3f043f2a3fdbb76f4f3fd49b6f3f3fcd9b374f4a5c5cdc846b3f3f3fc9b05d083f3f3f443f2e163f3f4a3f563f3f4e3f3f603f696a233f3f3f3f043f2a3f3f3f4d147b3f440d053f3f3f793f5a6d333f053f25163f763fc68d093f5a3f7c39793f3b5b3f6c3f703fd9b3673f3f5c3f3f26583f7a354c2613793f5a50223f3f061d3f3f3f4d3f3f3f3f7f5e41193f2e3f25123f16743f753f3f3f440d361575cd8e7b793f1b343a123f4a7c25c49a3f3f2d363f3f152b303838483f3f063f3f3f513f493f3f60233f3f3f3f173f553f3f3f12224d6e2169633f753f3a7f1d3f3f0d06d58e3fdbba7a3f7b0b6ee797903f3f3f583f3f743f4d3f6c3f32180c063f3f68473f3f44c7813f4e053fd7833f3f3f3f3f503f3f363f3f7740293f243f3f3f6d3f3f6f6a25135e296a3f3f3f583f3f1e3f5462133f685a3f763f3f3f3f093f3f583f68117a7a7a265c3f063f3f2d123f2f794c3f034a3f143f3f526c024d630b723f3c20135f096a3f1b2516253f3f353f3f3f3f3f271c3f3f3f3f047476764e3f3eda89363f3f663f3f3f723f1d504a243f4d3f62133f6e3f2a4d033f1e553f3f71353f1f3f3f45757d333f2e3f062515253f3f154c3f093fcf9f3f3f3f3f096144333f2636173f6d3f283f3f413fe39da13f05393f3f3f383f3f543f3f0b553f3f1d3f263f6f1b3f3f3f4a3f683f123f123f3f0a3fd8923f3f613f3f3f3f1f3f6273213f54173f303f3f3f3f6d5e3f193f093f3f1b3f3f293f614d25363f463fc58b173f233f3f3f3f77673fdebdce99093f3f473b3f2e36412072533f3fc4900f31333f3f3f3d243f3f716a3f3f1c3f3f3f5a3f3f3f3f3f15151c3a74c8993f3f6b3f193f62133f523f5c523f3d601c3f52633e3f3f3f3f5427363f106238063f3f3f440c6a143f3f3f30154a3f3f623f2618623b7e3f38793f1a502236211d2a3f053f3f3f6e3f3f533f3f3f54273f707d490221282a0e72502237163f373f3f3fd4a9533f796a413f3f6a1b3f3f7c176c3f1d3f013f3f72502a37165b000422363f5c3fc59ad8962e5d3f3f1530193f3f3f133f51223f3f3f2c3f1c353f363f093fc88d3f3f7e1248553f1d3972533f3f3f3f3f27483f1f2e5d3f443f3f3f253f3f3f1c3f3f3f5053553f1d3f723f3f033f083f3f3f622a3f3f5d6c663fd9b93f3f3f3f3f3263c68c29670f3f3f3f7273733f636a442d3f0714723f3f4a3f45232263515f3f403f6213dcba753f29284a5c5331d592453f3f523f451b53c98d3f16413f3f5b2c3f4d3f3f3f233f623f3f673fc6ac593f263f3f373f3fdab56b3f3f3f03323f58473f62134c2637165b3f413f2d563f3f043f58103f3f3f3f586c113f3f3f586c3f5262456c024a6e2c3f083f5d6e2c3646293f24363f3f3f54293f502f341928532d543f3f2537161b3f1425621352083f423f3f323f423f2e3f3f3f3a3f3f6b693f40712e2d3e3f172510723f3f6b213f253f107b145c3f7cd9b93f3fdcb97331673f1ccc9b37cfb96d5f656525794d2c3f446c3f5a1a3c503f3f3f3f3f3f3f3f3f3a3f3f73333f403f3b3f47c88d4a3f58416c3f2724460d3f703f3f3f3f3f3f446c623f393f3f230d5f3f3f78223f3f3f3f3f3f59045d6c3f3f7e2f503a7a3f3f3350503f120b3f3f3f3f3f3f3f26653fc9b1633f3f30621125620b3f3f7b3f3f6b3f3e0a3f3f303f2e3f22246d6c3f3f3039507c6d3f3f0b2a5d623f3f3f3f71713f3f6b573f5c416f6f2f3f3f1ddfb3563b61323f183f2644483f136b28113f733f3f106f3f1c28623f3f0e1f1b2e533f526c025172733f623f3f503f053f3f3f2516103f692e715d3f7a3f3f3f583f76c992253f3f3f3b773f3f3f58443f3f043f3f263f463f3f3a3f383f3555c781273f153fdaa03f453f3f3f3f2e61097c3f074d4b4b1b3f3f3f3f3f3f393f3f523f3f0d165b3f403f3f3f113f3f3f3fe6ab9a793fc4893f735253533f73620d161b3f2d2a3f3f453f3f3f3f473f623f3f1f3f3f3f043f3f193f3f113f7e153f112e243f343f3d3f2c363f503f3f661a1a1a3f3f3f3f3f26163f143f3f7a121717377e3f3f3f3f2347543f3f3f3f3f4d6c3f3f01183f43513f3f723f3f4c3f74512b62173f3f3f7a6b3fd494224a7154d8b13f5a3a0f443f3f3f3f3f74003f3f3f4a483f3f3f3d3f1b31203f3f3f123f30102a3f58413f3f22713f3f3f3f3f3f3f173f3f22065d6c3c40373f696d6d25653f3fcd9b373f613f0a4a3f166903743f5c3f3f6e3f0f3f3f3f4d145f3fc48a443f2c3f4c3f3f5a613f053f123f45d2942a513f3fdb8e3f6e3fe3a2a1183f3f4e636e3f7e3f3f3fc2af1b76e39da6543f3f3f3f3f3f2a183f3f23c8a03f4d6d3f3f5d503f3f56586c3f3f446c3f32095e3f3f433d3f3b3a6b2f3f3f4e3fcb8f3f3f63c5af4d3f273f7f3f3f563fc4a13f1b183f3f643f3f20246d6c6a593f3f1d2a5d3f0a3f2d703f3f4d741c383f2d723f3f523f351c3f764c2e3f3f3f563f3f7e273e593f3a2930397c3f6c0e563f3fc4a07d3f3f4730093f3f3f083f2e6a3f3f16384a3f36dd98ccbe45233f4a3f3f71013f2e3f453f3f1f3f3f381e3f073f3f3f050b163f4c3f74512b5d5d5d3f3f3f3f633f0e323f58215a3f6618303a3f6f3f19441b3f0f3fd790720a060b3f3f3a3f493f3b50586c323f3f453f3f3f7bdfbe7d3f3f3f20163f3f3f3f26c38e153f456c3f3a0a3f3f5e2a5f440a293f3f0e3f50c88d3f26132a5dd48c3f3f3f3f3f5150503f3f3f3f22673f3f0a333f3f063f3f3852710f3f3f5c3f426e2c363f503f3f303f3f743f3f2a28153f3f513b3f533f3f145028793f353f3f3f3f3f446c62c887180f436e3f1f013f3f3f3f5e653f4b513f3f303f502a363f4b2f063f523f35140c3f3f0e3f3f6d67483f4c3f3f1f3f061f743fc6993f023f0f3fc79b3f3f3f3f3f19e4b9be103f420a3f1a324e3f10743f3f3f6b313f3f3f523f24c4a048253f3f513f3f303f50223631503fcaa33f420cc5a23f4a3f3f1b140b69493f3f3f3f7f3f033c3f0c7f183f3f353f3f6b7c3f3f3f3f180e3f583f3f3f2d3f5f522028193f463f0b3f3f423f3f6a1b3f3f3f192ac4b4472a3f3f3f594f0a3f173f3f473f34463f0d3f3f1d3f543f3f3f3f173b3a2e3f71530a3f3f78060a2a5d183f173f2c363f3f3f15df8a3f1652343f3fcb923f303f3f3f143f1f3f3f472cd4a53f3f3f5f3f3f3f3f703f3f3f3f733f3f652c223f3f3f3f1e27387d3f193f3f70553f78060a2a5d183f173f5a15153f3f3fefbca6433f687c313f69d7983f3fc4ae2c3f3f0f6d2d3f63427a7f5b363f3f3f643f184a3f382a3f3b0f64423f0b3f3f22523b0fdabb3f5e713f4a233f3f3f37483f3f6275473f535c3f3f6a4b3f3f756e3f281457475f3f3f3f15473f3f446c6a3f4a173f3f3f523f3f0b3f683f675c3f4d3f3f6026635d67e698b63f7f3f5e3f753f433f3fdfae3f3e3e193f3e3f3f3f3f52586c323fd285617c113f621b21661a3f3f3f4a0a6632422936413f3f3f114d2e2c363f503f3f303f3f543f3f773f333f622d354a2e143f3f4ee0bcb1047552d7983f3f3b3f353f602a3f3f3f71d1893f633f06324c3f733f423f782a3f3f26132a5d183f173f28363f210b15573f3f3c3f5a3f303f2a3f3f3f5237192e453f3f3e586c323fd285617c113f62133f3f51713f5e3f3f3f3fdfa858383f283f3f5a3f3f3f7029123fcf92713f4b483f3f0b4d323f3f123f3f2f34493f3f6052593f42c6953f26035e1a3f613f3f2d5c4b3f573f3f623f5b150d3f3f223f2aca9b3f4432563f3f1e3f3f3f1b3f7e3f0e0a2a5a603f3f1d3f1c253f3f22340f3f7d363f047363213f563f3f713f3f6a3f3f553f4f3f3e362956033f1f553f65283a3f793f3f123f3f7333172a3f723b0f3f293f3f3f3c3f3f3f22146b3b1e3f3fc2ae3f0b3f55503f3f3f02dcba700c29293f283f181b3f34523f3f3b0ee3be813f3f3f3f3f3f483f69203fd9a13fdd833f3f3f205727673f3f110c3f2a3f773f383f263f3f3fc4833f3f173f620b3f3f7bc38e78793f3f40772e29174f3f293f563f3f1b3f4c46483f3f783f3f4843423f3f433f793f3106273f3f240c563f41523f6d743f1d3f3f576c233f3f3f270d376e3f61cfa5463f781e3f643f0137333f713f61333f3f3f3fd1ae43312d3f706e3fdca33f3f403f3b40375c623f62240f3f1525373f3f3f233f0e47dca8384f063f2ed1830d35593fc5b10223243f63235a3f3f4e3f703f21163f3f663f64233f640906074b7032251b1a3f3f3f543f3f3f043f0341343f503f353f3f3f0f7a3f55ee94aa703f3f3f3f3f5e71544a3fc4a6363f743f1e243f0b3f613f3f7b3f3f4c3a7e3f6d083f673f713f3f3f3f6f331e3f4a46663f3f4d72596c61454f3f4d2067127c3f3f163f3f3f3f083f2e513f3f173f3f3f625b721a2e3f7d3f263f3f283f093f3fc5853f3f3f68341ed4a2347b3f3f3f246319d293cea0623f3f6148546d3f3f603fdb893f620b3b3f223f3f433f3f643f093f3f22763f223f423f4b3f213f3f513f7b3f337028692b3f3f3f3d721f3f633f2521213f3f3f70283f3cce9f3f3f4c3f6f3f733f3f240c141e4752560d2c3f3f2c353f4a3a3f3f6a3fc48e3f3f37713f3fd5a73f3e3f3f3f3f523f3fc28e3f1b153f1f3f4e3e3f231c623fd999433f4d292c363f503f123f3f3f3f543f3f3fdbb13f521d3f426e4a3f3f521f3f1d4e3f3f7a3f15233f3f3f3f3f3f3f3f1c2542093f6d3f3f3f3f7a4a75037a2c3f3f3f603f3f1d31033f2a153f3f1b275d1a3f3f3f773f143f3f3f54533f227a69703f423f4b3f200d3f3f3fefa9bc3c3f3f1f23633f113f0b3f29143f3f3f163f6fdc8a3f3f143f3f3f3f151b3f3f423f3f3f283f6d5a3f3f2f123f6f3f243f3f423f713f6d2c764e3f573f3f3f423f683f493f3f2c7e1d3f3f3a324e3f3f623f093f2e513f5358073f3f4b3f3fde8a3f3f3f3f7a3f5d3fd89e3f5d3f7d3f3f7b783f334c3f633f586cd3823f1d3f4a6d623f3f3f4e3f3f7b3f743f3f3f4b203f3f64423f4b3f60433f3f3d484a2f42e784aa3f083f3f671d253f3f683f393f3f446c623f5a3f3e3f3f3f3f65473f3f3f483f353f3f3f365d3f2a3f3f3f3f3f6a21253f50303f613f364c165009132b3f1a543f3f363f473f3f343f763f282d230b3f3f653f3f3f14241d383f623f661e3f3f6b3b0f3f413f3f3f3f3f7b173f763f183f3f623f363f3246763b3f3f3f3f5b283f263f2d363f3f48254e2c3f1f3f3f3f442523463fe89aa03f363f3f3f3c753f3f3f0b3f3f463f3f48433f6d3f4a2a10723f3f3f0f4821053fc78b7f3f452d3f4222353f6c3f3f3f3fc9843f05c4af2f3f260c3f0b213f3e473f3f3f4f3fc680510c3f3f3f1c623f3f4f3f3f22053f0f2f3c3f3fcd810a3f7e3f423f3f24693f396a3f4a1835333f2f1a3f4c3f68c3a23f5424621e3f7c3f483f3f0e3f693f143f143f3f3f3f3f3f3fd693183f0f3f3f08263f3f2610233fc58b4e253f1a310c183f513f0c2317353f4d3f663f3f5a5d063f3f2875513f3f3f133f2a3f3f553f703f3f663fc6a83f413f3f5c3f3f3f3f3f216711563f183f433f3f463f6767183f3fda8e79d88241133f3f22096a3f785f743f0c3f793f3f3f3f203f3f3f3f2360763f1e3f3f3f3f3f4b3f3b580d3f5d3f3f3f203f3f3f183f612219161b3f303f3f3f3f303f3f603f310c3f3a586c0cc3a80e161b3f303f3f3f3f303f3f603f310c3f3a586c0cc3a80e161b3f303f233f623f43577c1939172f3f3f202707576e3f4371753f3f5d3f423f646a43653f2d3f5e3f3f3f3f5a747b3f3f3f302141423f453fccbe3f3f3f7b1f3f3f6e3f3f7a3f33da8e3f3f6b3f3fed839e3f3f6e753f3f2c3f603f3f69673f3f3f323f3f3f1e3f17123fcc85483634413f796f7f19353f3f3f063f3f663f3fce9c3f513570033b3f3f71721d073f7d3f753f213f623f3f3f3f3f78673f1e1c3d7a3f3f3f3f5dd8ba3a013f3f6c417a41276c3f753f3f0add9d3f58316f013f261d445a3f613f4e5c3f3f3f4d3857633f3f3f304c103f3f714a3f195f3fde82575b333f3f3f383f3f6e253f3f663fea889b3f3f423f5a3f023f6f393f3f3f0c3f1c3f3f3f3f2f3f233f75233f543f0d3fd49d3f223f113f3f76193f6f3f08777d2c1a3f643f0f3f1a163f633f3f713f163f451d243f1d3f3f221e7fd598071d294b2b4e362dc2b33f3f3f2e3f4c3f3f3f3f495c171c42203f3958753f053f093f3f3f533f3f0d0e3f3f3f753f55263f3f0c3f7c7b1d3235263f3f2d683f3f3f3f3f693f523f6b393f3fc68e3f3f3f783f2e0b3f3f253f3f4c463f1a3c3f3f087a3f67426c3f5b3f7e783f3d226c78d0b9095f3f3f3f3f3f3f733f153f1a3f3f1b6d1a0c4f383f29763f353f473f1e3f687c1f3f3f3f3f3f6e3f3f3f3f3f1d783f3f083f3f3a09492e3f4e403f6d313f3f3f362d3f3f3f496c02093f653f3f787e0a3f3f073f57636a6c283f3f000b3f3f3f793f4b173f42ec99b71c3f3f3f3f071302465b3f3f3f3d3f663f5e7b3f6a3f3f4b3527713f3f3c23576c52353f3f7c3f3f463f3f7f4c3f3f3f453f391478353f3f51deb53f21d2873f393f793f3f322a023f3f3f3f617d3f2a3f1e303f6c3f2a7c3f3f57cc88cd81d4854b3f3f223f4a3f3f3f120c353f707c3f07583f301f3f0b5720715f163fdb89556b3f3f283d7f003f3f5f3f3f793f583f66077e773f613f3f3b0b3f2f1d3f3f723f3f315b253f2e5a3f3f352c3626043f0e3fdca8413f7b696d3f3f3f3f3f763f313f532c3f3a243f3f3f3f3f3f313f31035f3f3d3f3f3f3f3fd4843f3f353f1b743f4f3f72ccadd988553f3f4a3f3f6335673f5b0e315f763f3f3870025fd69c473f3f2c63496c3f5f3f3f3f2b103f3f603f3f127a3f3f623fdbab703f7a153f074c183f3f3f3f3f3f78377e0b3f3f3f3f0d656fc3b56d3f623f6fcfa23f3f0f3f3f013f1e3f20793f3b587b4e0b3f3f3d3f616f3fc4aa3f3f28343f3f1926340c3f6e3f263c3f523f4e3f0c6457457d613f3f3f2d783f3f213f3d3f0d1b4f3f3f3f0c3f740acf8a6b3f0f3f627b3f770d4636363f6e5b3f3f3f3f3e3f3f3a4a3f3f6b3f613f3f731d3f3f123f3f3f2b3f3f3f293f3f3f4d3f3f173f3f3f05063f76370b3f323f475ce295b14d77250c3f4b3f3f3f27503fd19b693f66603f3fc9b8673f3f3f3f48ddb83f23016b3f364c4b3f333f3fddaa45567f094e3f5dc5923f3f3fc7861c3f3f3f3c3f5c3f3f3d253f3f2f3f3f213f5b27173f3f7a1f3f3f6c3f3f213fda87053f753f3f3f3f3f3f1f7e3f3f0c5e743f3f3e3f2c3f3f453f3f6f6a3e3f523f3f5e36e4b5af3f0b3f4a3f3fd9a73f075f6f3f3f3f5e3f543f3f3f0d3f3f17763f3f5fdb84390e613f3f3f3f53103f3f143f3f0d3f63483f1b3f3a3f433f743f0c303f3f3f383f3f3f3f1d3f3f15793f3f283f3f3f6e673f3f3f06243f3b072d771c30613f623f3f3fcda9783f713b5e3f5e3f3f3f173f7c423f3f436c154b1d3f3b3f5f343f7a70183f3f363f713f666cd1aec6bf75357b771c3f4b313f3a113f3f573d3f063f3f593f593f3f37703f0c433f513f3f261b3f6e554f3f390b3f507d0c67273f3f426c0b3f193f2e3f3f3f4c3f783f3f163f3f733f4f3f3f3f79711d3f3f7a3f3f6f3b3f331d3f3f3f07743fd8ae45c68a773f3f3f51c495743f5e3317493f023f2d4a423f3f3d583f68173f763f3f033f61dc903f713f651d3f6f2e404b3f553f3f5e3f3f113f3f5b0a3f3f3f3f253f4b3f3f3f3f3f3fd18463763f3f3fd5a602747b5d33053f3f383f3f1e3f3f53373f3f35da820f3f3f3f2f3f3f6e353f3f3f3f5a513f1a3f05473f3f5b4f3f3f3f3f2b3f3f3f3f3f3f5c3f0e3f16397e3f1c3f3f3f3f713f55103f3f24182b4f62d5bb1b705e3b3d3f3f333f401a3f3f3f556dc3963f3f697e3f6dd4843f1d5b3f7c3f151411353f273f061c685c3f676a3f3f674d3f3f73377e3f5d3f672a3f20553f3f36c9963f3f562e3f573f3f263f3f3f3f7d3f413f423f4d3f5d3f316d3f243653313f3f1b3f3f522116093f3f4d786b532e0c547d3f5a3f3f3f65483f383f3f523f3f6f790b1b733d3f3f3f636d3f3f3f092b703f3f3f073f3221471a3f604f673e3f3f3f2d693f3f762d16183f1a3f153fcd863f3d3f3f154d062e133f3f023f3f3a7e583f150b3f3f3f5b3f3f3f483f5b3f1f2a1a3f2641db933f3fd49f463f57780e3f193f4e3f3f3f3f58113f6440e9a1a53f3f3f225a3f7e61243f793f3fdb882b443f3f547200090b0ee191b33f3f3fd6ac3f7867671e063c333f3f14073f24223f3f3f3f3fd4933f7d4b16213f763f3f2f3f61023f5e3f5f556d3f0a3f3f703f3f253f1d3f3f3f263f486c125a0c69783f3f203f597c3f2f3f3f6b2b3e3f73563f3f3f3f3f0e497d3f4a3f3f3f3f766c3f5f3f3f3f3f285c3feab1bf71295e3f6a1f133f3f3f260d3f5b730f673f2f41dcb2033f773f3f343f3f3f123f4fcc863f3f3f3f2d6d79d8b3781e3fe4b68f273f3f3f3f3f3f3f3f7b3f6d5a3f3f3f3f531f203e3f12743e7a792453154e3f4e3f3f3f7a725436c384060b6e3f6f3f173f3f71ddbd3f37da87733f0d783f3f015a5d523f2d36097a63365e3f493f663f243f323f3f583f593f57263f794d441a793f573f123fc6b4493f343f3f4e433f78cfa634523f433d25281f7b3f463f3fe39fab0ee0b88f123f330c3f017c6e7c4c3f3f3f3f06663f7a033f673f763f3fecb9885f3f3f7d3f3f6836113f623f213f3f1a3f3f5b3f0ddb933f733f2a243f2f473f3f1a0c4e3f3f043f26073b3f3fc382355b3f3f3f1d1b3f3f633f3f53283f3f3f3f3d3f3760d68c593f33772e3f12c4bd771255363f5a3f09103f1b3f3f3f783f7a2d3fdf983f3f69da8d3fd5ac3f4b4d573f3f39dca3221e3f3f583f67282a57236e3f516d754831593f3f3f552c3f672a3f122cc7b73f351830653fc5aa3f384d3f3f3f63c6993f1563633f6c3f3f3f013e3f3f3f3f31d98a013f7f5f3f13db87453c6d3fdbbe0ecfb63f3f791a183f283f563fc6b4093f2d3fc7a93f713f085fd6957b3f11243f2c363f3f1a3f5155563f3f553f3f193f252a073f093f753f505a3f083f3f463f5a32113f3fde834263052e0cd4a03f6a3f3c1b0622466c0c3f303f3f3f3f303f3f603f310c3f3a586c0cc3a80e161b3f303f3f3f3f303f3f603f310c3f3a586c0cc3a80e161b3f303f3f3f3f303f3f603f310c3f323f3f3f013f21523f3fc9be3f0000000049454e443f42603f, 'w3.jpg', '');
INSERT INTO `worker` (`worker_id`, `nic`, `fname`, `lname`, `email`, `contact`, `password`, `verify_token`, `created_at`, `address`, `district`, `city`, `nic_front`, `nic_back`, `prof_pic`, `status`) VALUES
(15, '995900567V', 'Nithushika', 'Megendran', 'nithuthev99@gmail.com', '0725090056', '$2y$10$28372pyetyGHPAzlTz8a3OxVKYTDERFoIZk686R5fw5v/8LT9j0kq', 'ee454571b2c3ccafbef662df903aac47', '2022-01-18 07:33:00', '147, College Street, Trincomalee', 'Trincomalee', 'Trinco Town', 0x89504e470d0a1a0a0000000d49484452000003ff000001ca0806000000552afb61000000017352474200aece1ce90000000467414d410000b18f0bfc6105000000097048597300000ec300000ec301c76fa86400005de749444154785eeddd69d01cc77de7f9793bef66de4dc41c31f366c3bb6b8f36c231313bb22d7b25af281f92edd13192adb565591e8dac83a20e0f87122552122f89a764f0a6c453bc041e200882277883220e82b848020440dc37f0dc47f7d3f5dfceacaceaccacaceeeaeeeaa7fba9e7fb61fc83cfd35d5d959599550f7e7d54ff330100000000009546f80700000000a0e208ff0000000000541ce11f00000000808a23fc03000000005071847f00000000002a8ef00f0000000040c511fe0100000000a838c23f00000000001547f80700000000a0e208ff0000000000541ce11f00000000808a23fc03000000005071847f00000000002a8ef00f0000000040c511fe0100000000a838c23f00000000001547f80700000000a0e208ff0000000000541ce11f00000000808a23fc03000000005071847f00000000002a8ef00f0000000040c511fe0100000000a838c23f00000000001547f80700000000a0e208ff0000000000541ce11f00000000808a23fc03000000005071847f00000000002a8ef00f0000000040c511fe0100000000a838c23f00000000001547f80700000000a0e208ff0000000000541ce11f00000000808a23fc03000000005071847f00000000002a8ef00f0000000040c511fe0100000000a838c23f00000000001547f8070000a89837affb6df9eddf4eea1a79d3dc2e724a1ef96aebbe6bde3037e77a53aef9edafc923c7cdafca1bd798c7bbb7ab6d765e1f00605808ff00000055a2c2f975adb8af9f0830bfeb9fbffa889c52bf1c7f44bee6077b870afe7ec8574f1e98dfededa87525eb05008c24c23f000015325b13393a26f2f61191d7768bac6d66b3fbd78bdcf46c24573c16c905f747f20f3f8fe42fff29923ff97124bf7351241fba24fef9e3d7c4b77ffea678996fdc1d2fff8387e2c75eb736d2eb79f035915777891c6826bd4664368cd1a55fa957affec7affadbafceab2703bef66820b2eb2706d4b2fe2bffea77f34e022bf0f3aa3f008c3ec23f00004bd4a949918d7b45ee7a597448fff3abe330bfd8f589eb22f9fa9d91fc647524f7be2af2e2db227b9b6171be6e1a8aa13af5e8d7ccabfde1f06fbf4b20cb0fff8157fed593006dd701001805847f00009680e36322afbd2b72df7a914b1f8de4b3d78783f8a8d55f5c1dc9576e8fe4ce97e277236091796fed77def69fbcadbfabf0df947ee63f793781ba3f7e6241dfce130100309208ff00008ca8bd27442e792492bfbf2592dfff61385c2fb5521f2fb87865246bb6881c3a6d76148391be75dffcae99c06fc2fb35796ffb4f05c2bf2d79f53ffdfcbff5ce0000c04821fc030030c24201ba53fdc94f22f9ec8af815f7ef3e10c9558f4772db3a9195af8b3cb74364f3bef88985b353f136ea0bf1b50226679bb74d8b9c9c10397a56e460339cef6b2eb7fb98c85b8745b61d6866bcf7449e6c66bc5bd745f2fd5f45f2773747f2e1cbc2ed28527f7363243f7d3292e7778a9c31ed4109f4abf39d4278f6630059edc27f2be8ab8f16244f22f0f97f00184d847f000046980af1a1d09cd427af8b43f803af896c3f681e34042ab8bfb95f647533f4ddf84c24df79a019ec6f88e4839784db1daa0ffc209273ef8c9fa878f79859f132a6de1d915c80f1a5b7cd8d45786ff5b73917f8d34f10d85f0318d226fca7aff6db3ff3ca3f008c2ac23f0000234c05e1241cffe1a5917ced8e486e792ed29fff9f99370b8db89d87456e7f51f43708d861bf53fdcf7b2379fc0d91a939b3a211b6eb6873ac9e2faf2e5f25f2ff36c73be98bcfdd58fc6b15f405fed2b7f6b7dee21fc774fb6dff6e48779e1848e5857ffff6d667fedb7f8c0000302c847f000046987a7bfeba9d22a727cd0d4bdcf84cbc3fea9b01d4bb16ecb09f57ea5b0cae5913e98f2b8c22f57189732e8fe4da27e2772d9451973d2afa9d10491fa8be0200a01f847f000030343b0f89dcf3b2c837ef8ee40f0a5cd4f04bb7c55f27a8ae49302ad4abf22ab097ed8e17e327003e7279248f6e34370200d023c23f00001809eadd0d4f6c1139ffbe70f0b74b5d4b407d6b80ba50e030a957fbcfbf7770afcaabeb286c3d607e0100a00f847f00002a485d804f5d346fc31e9127b78adcb75ee4faa723fdd581dfba27be889cfa0e7ef51582ead56515a6d55bd7d557f1fdd955917ce2da483efdb3f85b03d42bdbeaeb06bff4f3f8b13f5d1bbf12adaefc3fa82bf4ab6f1950af7c7ffee670f8b7eb0bcd65d4b50116db8b6f897cfc9a48bfed1f00805147f8070060099bab89bc7d24be32bcfa4abf2f34437a28200fb2d4dbd2bf786bfcc4c2dd2fc7a178ff49d3c012fcfaddf81a017ffa93f0f693faf22f227966bb79d080a90bfca9e0affe0f00c05240f8070060895017cb7bf380c8aa4d223f7b3292afde1e7f034028088f4a7de3ae48bfebe0dd12befa4dedff639b45be7d4f785b49a96d76f5d5785d52aff4ab77430ce3dd060000f48af00f00c0089bab4debff1f3c3d231fedf0caf7a8d77fbd2692cb5745f2d4569163637ab77ab6fb587c55fc3ffe71785baafed77d91bcbec73ca044ea1d0e3f7a98abef03009616c23f00002364a15197f9fa8c4ccd9e9597763e28d7aefabc7cf9c6dfd2f7a9cfe48742ee522d750d811b9e89e4955d22933d7e97ffe133223f7d32be7641681baa2e5a19e90be795e1fef5227f73039ff307002c3d847f0000866cbe3623f5857939397e501e7af54ab9ecc14feac06fd781133b0b5d057fa996bad0e0158f45f2da6ed3295d529fbdbf6c5578dd495df66824bbfbf88cbedac6399745726484be66100080a208ff00000c41236ac8f4dcb88c4f9f945fbd72857cef9e733281dfae95affc581e7cad1e0cb5552bf54d04ea4affeff570d140f50d04173e185eafaa3fba229295af9b85bba05ee957df80a02e660800c05244f807006011259fe1dff8ee13e95bfa8b947a37c0e1d313c1405be5bae0fe48d6be29325bd3dd56d82bef887ce3eef03a55a98f02a88f0c14f595db23fd9dfe00002c55847f000016417da126a7260ec95deb2e946ffdfcfdc180dfa9e66a7395fbdc7fd1525fab77ddda48b674f9d97d7571c12fde96b3ce6be327163a511716545f230800c05246f8070060806af5393974eaedae5ee5cfab770ebda6af341f0ab2cba9d455fc37ee351d5c90ba50df872f0bafef27ab23391bbf212363f3bef873fe5ce00f00b0d411fe01002859d4fc4f5db1ffc0c99da584fea4d4b501d6be39170cb0cbb17ef448246f1d369d5ec03b4744fef197e175fdf5f591bcf8b659d05017f653efb45017fa030060a923fc03005092286a48bd519337f73d5b6ae84f4a7deeffccd47430bc2ed7fabd8be3cfe21f3c6d06a1807b5e11f9e025e1f5ad782a92da42bcdce76e8cf43b060000a802c23f000025a82dccc9bee35b3b5eb5bfdf1a9f39abaf3a1f0aaecbb93e724524b73c17c9992933201dec38947f41c0ff715b24573d2e72febd7cce1f00501d847f0000faa042ffe4cc69b969edb9c1b05e766d7a772d9ffb6f53ea89915fbe2a325f3703d4c19d2f8afcfe0fc2ebbaafb91e0000aa82f00f00400f1a8d0599999f90b59b6f0e86f441d55debbe2bcf6e9b0c8655aa557f7343246bb698c1eae0cdfd225fbb23bc9e9b9ee5d57f00403510fe0100e8d27c7d56de3ab87ee06ff10f95dae66cad160caa54b62e7d3492e3e366e03af8f9f3125cc78f1ee6090000c0d247f80700a020f55dfd933367067231bf6e6a7cfa8cbe185d28a852d9fa6f3f8df4f7fd17f1d2db227f7c45761dea9d0100002c65847f00000a505fddb7f3c02bf2ad9fbf3f18c817b336ee5e23d7adcd0654aa7dfdf8b1484e4f9a016d437d0ce0d33fcb3e5edd76b6e0050501001835847f0000da505fdfa72eea77d7ba0b83417c18a52e2eb861cf44269c529debaf5644f2dc0e33b86d9c9c10f9e2add9c7abaf087ce788590800802584f00f00408e5a7d56f69fd83194cff6b72bf5ee83d9da7c269852c5ebea35918ccf98816ee31f7f197ebcfa780000004b09e11f00808085467dd1afe4df4d1d1f3b285fb93d1c4c93fab3ab22f9fa9d915cb432d21f13b8e34591473789bcf896c8d60322074e894cceaa773788ccd5e39fd5f7e41f1b1339785a64ef09d1af726f3b28b2799fc8639b456e7c2692ef3e10c9dfde14c9872f0b6f77a994fa4600d5179da80bfe851ebff275b30000004b00e11f00004f7d615e6e5efbf560e81e957a7edb2fe5e7cf37d220aa82be7a95fab675222fbf23727a913e9bae3e03af9e1c58fba6e86d87de2a3fea75df7ab3336ddcfe42f89b00ee7ac92c0000c08823fc03006034a205999c3d23973df8c960e01e85521f41b8f3b9efc889f1fd726cac265bf6ab8b119a1d181163d3a23f577fd9a391fcc5d5d9c03c8a75ed139dafe6ffe2dbe127009e2cf84d0200000c13e11f0080267551bfe363ef8dc4d5fcfd524f46acd978a39c1c3f280b8d9a7e67c252a23e62a05e39ffea1dd9e03c4a75fe7d9d9f00387c26fc04c0e6f7cc0200008c28c23f0060d99bafcfcac6779f0806ef61957a85ffc1572e978999d332579b9185859a69edd2f6de49d1d71ef8fc4dd9003d0af5b7374632d3e1b995da42f809809d87cc0200008c20c23f0060596b3416e4a1f5570503f830eaa6b55f935d873748bd19f697da2bfcdd5abf5be4f25591fcf115d9203dccfaa3667bd4c50edb393a167e0260cf71b30000002386f00f0058b6d415fdef79fefbc110be98a53e6af0ec9b77caf4dc78e5037f88fa8681873788fe668250a01e56addf651a9863fbc1ec13001fba24924367cc0200008c10c23f00605952c1ffeee7bf170ce38b552af43fbfed1efd397e91ce9f375f0ed45be72f7dd40dd4c32cf5a4443b2fbc957d02e02fff29929313660100004604e11f00b0eca8e07fd7ba0b83817c314a85fe755befd6a13f22f407bdf19ec8771f7043f5b0aad3d7f93db421fb0480bab8e1c4ac590000801140f807002c2b2a700f2bf8abd0ffe4e65b65b636255144e82fe2957744be79b71bac8751cf6c330dca71cb73d9c77cfb9e485f1c1000805140f807002c1bea227ac30afeb73cf975999a3d6bdee28f6e3ddd0cdf5ffa7936602f666dd96f1a93435dbcd07f8c7af7020000a380f00f005816e2b7fa7f3718cc0759ea2bfb0e9c7c4b6acbf0427e83b06a93c8c7afc986ecc5aab78f988604a837737cfb97d9c7a8af36040060d808ff0080ca53df933f8c8bfb3db7f52efda403ca75f88cc80f1eca86ecc5aaf74e9a8604a80bfd7dfea6ec635edb6d160000604808ff00804a9bafcfca865d8f07c3f9a0eab2073f2967268f4a236a985660101edd24f2b12bb3417bd0f5d1e636d5f7fce7d97a40f457fed98ff9dc8d918c4d9b0500001802c23f00a0b254f0dfb4e7c960401f543dfada357abb581cea55f80b1f7483f662d47fbf3592b36dc2fccad7b3df0070d92a3eff0f00181ec23f00a092ea8d9a1c3bbb575f613f14d2cb2eb59ddd4736f236ff21f9d5af45fee80a376c0fbabe717724b36daedf7845e002800f6f30770200b0c808ff0080ca515fa3777ae2f0a2057ff536ffc9d9b37c67ff90bd7b4ce4fcfbb2817b9075c1fdf9633e392bf2855bdce5cfb93c92b70e9b0500005844847f0040e5d467e76561ae26f73c7f5130ac9759ea2bfcd4f7f663745cf2881bb8075dd73f9dff04c0e6f744fee087eef25fbb23d2df0c0000c06222fc03002aa53e33270f7ff652b9f7a317e89f5fddf95030b497518fbc768d34a205b3658c926b9e7003f7a0ebd9ed66c3010fbc96fdfc7fbb270c00001804c23f00a03254d87fe3d6c7e5c7fff263ba6e7adf17e4cc9ec372e2d4fe6078efa7ded8fbb4d4f9eefe9176d3b36ee01e647de2da480e9d361b0e08bd1ba1dd13060000948df00f00a88468a121a7771f4a837f52d7fdfbcfc8bee736cbdcf4945c78f7878341be9b52d7113876765f33f8b7b9d21b46c6a31bb3afba0faabed3e6f3ffea9b01fef64677f94f5e17c9f171b30000000346f807005482fa9cbf7aa5df0fff49adbfea0159a8d5e5e74f7f3b18ea8b940afec7c7dee38afe4bcc96fd8bf704c09d2f998d066cd823f2bb17bbcbffec49defe0f00581c847f00c092977cce3f14faed52cbcc8e4dcaab6f757f1d0015fc4f8ced27f82f51ea95773b740fb27efdaed968c02f5f71dba19e0cd871d0dc0900c00011fe01004b9a7ac5ff8ddbd604c37ea86effc0b9327d724c0e1e7f2b18f243a583fff87e2eeeb7c4a9efe4b783f7a0ea733746fac9863c5fb9dd5dfe7b0ff2ea3f0060f008ff0080256de6d4b8fe5c7f28e8e7955afee8e65d323579b6e3750054f03f397e40a2a861b688a5ecd8d8e23c0170d9a3f981fea5b7b36d787ea7b91300800121fc0300962cf5767ff5957ea1805fa4b6fc62adcc4e4eb6bd0ec0d67deb08fe15f3ced1c5790260e5eb6683013f78c85df64b3fe7d57f00c06011fe01004b92ba78dfde673605437d37f5c4577f26f39333f2e4e65b33c17fe3ee35526f7055ff2a7a7dcfe09f00f8d39f4472e4acd9a0e79d23227ff02377f9075f337702003000847f00c092a43eebdfeddbfdf34a5d0740ad6fd7a1d7d3e07fcf0b17c97c7dd66c0d55f4f4b6c13f0170dddafc57f46f7cc65df613d746727ad2dc090040c908ff008025a73633276bbe7c5d30c8f75aea8984337b8fc8e9b123f2e8afafe5aafecbc4af7e3dd827007eefe248de3a6c36e6393b25f2a99fbacb5fff346fff07000c06e11f00b0e41cd9f84e30c09751fbd6bd21f579deeabf9cdcb66eb04f00a8cff7e751d705b097fdfd1f46f2f611732700002522fc0300969485b99adcf4be2f04837bbfa55efd9f3a7646a288575f979b6fffd20dec65d7fadd664301fe57ff5ddce6c90200007a45f807002c190bf335d9f9e00bc1e05e46ed796aa3fe4801969fbdc7453e76a51bc2cbac6fde9d1fe8435ffdf7ea2e732700002521fc0300968cfa5c7917f9f3ebd90b6e95da1417f85bced66c19ecdbffd7be693614e07ff5df0f79f51f005032c23f0060495057e35f7fe503c1e0de6fe9abfdcff1397f885cbdc60de165d6dfdd1c492327d3ef3c9cfdecff8153e64e00004a40f807002c09657eb59f5d7cce1fb6997991ff7eab1bdacbacfbd79b0d057ceb1e77d95fbc60ee0000a004847f00c0c89b9f9a95577e7c5f30bcf75b9b6f795cea7cce1f9637de13f9fd1fb841bcac52dfe57f66ca6cc8f3f81beeabff9f5d1109cf490100ca42f807008cbc9953e30379d55fbddd5f5d4410f0ddfbeae03eff7fd74b66239ed9e654544f0ed8cb3ebdcddc0900409f08ff008091363f39236bbe7c5d30bcf75ba7771f9228ef43d858f6befc0b378897557f7d7dfe9c5bf194bbecf9f7323f0100e520fc030046daa03eebaf3e46509be6edfec8f7c25b837bf5ffa9ad66231effc27faade6ade060040bf08ff008091b5305fd79fc90f85f77eeaa6f77d4166cf4e9aad00f9bef7a01bc4cbaa6fdf93ff8abe7fe1bf7f7a8a57ff0100fd23fc030046d6c25c4d07f55080efa7f63cb5511ab5bad90a906ffbc1c1bdfaffe67eb3118f7fe1bfbfb83a9229dea40200e813e11f00309aa248de5bb72518defba97b3f7a81be8e0050d4756bddd05e565db93afc8a7ee8c27f8f6c34770200d023c23f006024cd4d4ceba01e0af0fdd4e1d7df9268a161b6027476744ce46357ba61bc8c3ae7b2488e35d71de25ff8efab77f0d67f00407f08ff008091347de26c30bcf753eac984daf4acd90250dcdd2f0fe6edff795ffbc785ff00006523fc0300468eba0aff20bedeefe8e65d660b40776a0b227f7b931bc6cba8765ffbf78dbbdd65efcc79a20000802208ff008091a32ef457f6d7fba92713e627f8ac3f7a77efab8379f53fef6bffee79c5dd1e6ffd0700f483f00f001839075ede1e0cf0fdd4914dbcea8ffe1c1f1739e77237b89751795ffbf7f691ec930d47cf9a3b0100e812e11f00305206f196ffdb3f70aed4a6f8ac3ffaf7e3c7dc305e46fdfe0f23fdc442c8e76e74975df9bab90300802e11fe01002365106ff9dfb9f245aef08f526cda3b98b7feafd96236e0f9d993ee72e7dfcb5bff0100bd21fc030046ca8197b705037cafa59e4800caa43e7b6f07f232ea070f8543fdebefba4f367ce892485f7c1000806e11fe01002363106ff97fe58a7bf57a81b23cb2b1fc57ffffecaafc57f43f76a5bbecba9de60e0000ba40f807008c8cfa00def23f7d72ccac1d28c7e4acc85f5ced06f2326ac31eb301cfc52bdde57ef4086ffd0700748ff00f00181967f61c0906f85e4b5de8af3e336fd60e94c7ff2c7e19f5d3b5e150ffec76f79d06ea9d000000748bf00f0018098d8505d974d363c110df6bbd71db1a2ef48781d87eb0fcb7feffcd0de1505fab8bfceec5eeb2db0e983b01002888f00f001809736353f2f0672f0d86f85e6bfa54cef7a70125f8eb6658b703791975f88c59b9e79b77bbcbddf80caffe0300ba43f807008c8c323fef1fbfe59f0bfd61707e3a80b7feffead766e59e4736b8ef34f8c22d847f00407708ff0080917076dfd16088efb536dff2386ff9c740bde67d0d5f19f5ad7bc2a17eef09775b7f7829e11f00d01dc23f0060e8a246249b6f7e3c18e27b2daef28fc5f0e703b8ea7f1e7fb9634c7100401708ff0080a19b3d3b59eae7fd6f7adf1764415d250d18b01f3dec06f2326aff49b372cf6757b8cbbdb6dbdc01004001847f00c0d02dcc97fbfdfe6bbe7c9dd4a666cdda81c179f1edf2dffaffe25b66e59eef3ee02e77df7a730700000510fe010043579f9d0f86f85e6be7ca17cd9a81c1fbe0256e28efb7ee7ed9acd873db3af78986cb57f1b97f004071847f00c0d01ddfba3718e27b2d3eef8fc574e1836e78efb72e79241cea9fdbe186ffff711be11f00501ce11f0030749b6f2def627ffaf3fef37cde1f8b67e5ebe5bef5ff8bb78643bd7fc5ff8f5c4ef807001447f807000c556d7a4e9ebde0d66090efa5d48503e7c6a7cdda81c1dbbcafdcf0df2ed4fbcb9e9a34770000d001e11f003054ea4afff77ef4826090efa55eb9e25e115e10c5223a3b556ef85775a6b9ce10ff8aff1bf79a3b0000e880f00f0018aab2aff4bfffc537cd9a81c5f3273f714379bff5c67b66c51eff8affbffab5b90300800e08ff0080a12afb4aff63fb8f9b35038be72bb7bba1bcdf7a74a359b1c7bfe2ff95ab799b0b00a018c23f0060a84e6cdf170cf1bd16300c573dee86f77eeba76bc3a1debfe2bf7ad20100802208ff0080a13af6c6ee6088efa56effc0b9fa1a02c0622bfb8affdfba271ceab71f74b7f3b91b09ff00806208ff0080a17af38e278341be9752170e9c9f9c316b06164fd957fcfffc4de150bfff94bb9d4f5c4bf807001443f807000c95ba3a7f28c8f752af5c7eafd467e6cd9a81c553f615fff342fde949773be7f05dff00808208ff0080a15117fb53813d14e47b29fd357fc090fc3f3f72037c3ff5e1cbc2a17eae967d920100802208ff0080a1516fd17ff8b39706837c2fa53e42000ccb9f96fc757f79fef05277b9d99ab90300803608ff0080a1991b9bd29fd30f05f95e4a5d3c1018964fffcc0de5fdd6d49c59b1e7cfaf76973b3961ee0000a00dc23f006068d495f9cb0cffea6b038161f9bb9bdd50de6f1d3d6b56ecf9ffae7797db77c2dc0100401b847f00c0c899af8fc9ccdc4999993d25b333676476faac4c9d3d2187b76e93439bb6c9c1d7b6cafe97e27af6fc5bd29a3a919396804570ee9d6e28efb7de396256ecf9879fbbcb6d3b60ee0000a00dc23f0060a85e3af5f799da3cf603d93a7ea553bb267f21fb6756397560e67119afbf2b13f5bd32597fcfac11188e0bee774379bfb571af59b1e71f7fe92eb79e4fbb00000a20fc0300862a14fe7b2d60987ef4881bcafbade77698157b2e7ec85deee96de60e0000da20fc0300862a14e27b2d6098ae5ee386f27eebd18d66c59e2b1f77977b7883b90300803608ff0080a10a85f85e0b2ddbcce7cf9d17850f47f22dff369446bd4dffb6755169f5e67eb362cf0dcfb8e1ffae97cc1d0000b441f807000c5528c4f75a6849c2ffb7d6981b14c2ffc0edbaeaead20a00803211fe010043150af1bd165a54f8ff96aa66d87fecb0b9d10fff9bac5790af8de4b4b9d97eac7f9ff258f3f7e4713fdb646e84b6fa5fff9bd20a00803211fe010043150af1bd165a74805f23725a7d0ebdf9b366877ff37312de75a037cb391f19f096d3f725eb334f1ea44f2e2018e27b2d0000ca44f807000c5528c4f75a6849c2bf4833b827e1dd0eff2ab8dbafe89b20afee73027e937a62200effd6ba8cd67d504221bed70200a04c847f00c05085427caf558b26cd5ad10aff4d49d0b7c2bf7e47801dfeadfb9cc736f9e13f79cb7f52ce750596b1e903078221be977af27fff3fa4313f6fd60c0040ff08ff0080a1a947d3b279ec07c120df4b4d2d1c346b4628c0279fe32ff2ca7fbbf0cfdbfcc3c677ec0806f95e6afd273e29b5f171b3660000fa47f807000ccd4234235bc7af0c06f95e6ab2becfac197e804f5ed94f027ea7cffc87c37f7c9f7f0d01def61f6bcccdc9d8f6edba4ebefc8abc73d555ba767ceffbb2fee39fd0f5e287cf09867dbf08ff0080b211fe010043d388e664e7c48a6090efa50ece3c61d68c4cf86fd26ff54fc2bf625eedd765bd0ba05df857f41305e671fe3696b3a36313f2c4f6b775bdb677bfec3b7546d7b153a765e6cc195df356a05f989d4d9f2c38bb654bfa6441f28401e11f005026c23f00608822d93fb32a18e47b29b52eb54e6018d6bdf3ae7c7fd59385eb9a675e489f2c7869f7def4c90255736363b2303767d60c0040ff08ff0080a152afd687827c2fb56bf217b2101198301cdd86ff76a5d60500409908ff0080a11aabbd150cf2bd94ba7e80ba8e00b0d8666b75f9c52b1b8241be9722fc0300ca46f807000c95ba427f28c8f7522afcd7a209b36660f1ccd5eb72c3f3af06837c2f75749c790c002817e11f003054738dd3c120df6b01c3f28b575e97cb9e783618e6bb2dc23f00a06c847f00c0d085427caf35db3865d60a2c9eb97a4dc66726a5de68486d61418e8c8dcbebfb0ec813dbdfeae949010000ca46f807000c5d28c4f75a27e7379ab5028be78d775f958f7dff3feafabb6bce915b9eb842d6bff5acec3dba2bf3a4c09b878ec8bab7dfd54f0a5cf3cc8b99e0af9e280000a06c847f00c0502d44b3fab3faa120df4bed99ba5f1a52376b0706afb6302fb73ef1e334fce755de93028a7a5260fbe1a3fa4901f56e017501410000ca44f807000c55d40cea2ab087827c2fa59e48a8475366edc0e04dcd4ec805bff87c30f01729fb4981770e6e95a9b959a92d10fe0100e522fc0300864ebd553f14e47b2d60b185427dafb566c3fd66ad00009487f00f0018bad9c6c96088efb5d4fa80c572fceca16088efb5f61e7ddbac190080f210fe0100232114e27b2d2efa87c5f4ca8ea78221bed70200601008ff0080a12bfba27fbb267f218d68deac1d189ce9b949b9f4deaf07437c2f75ee0d9fd4eb0400a06c847f00c0d0957dd1bff5a7cf356b0606ef3397fd4e30c8f752ea5b0366e7a7cd9a0100280fe11f0030124ecd6f0a06f95e6bbcbedbac19189cdd877704437cafa53e420000c02010fe01002361b6712a18e27b2df54e824816ccda81f215fd7eff6e4a5d3c1000804120fc030046867abb7e28c8f7521bce9caf3f4e000c8a7a7bbefa8c7e28c4f752eae303b5859a593b0000e522fc030046423d9a969d132b8241bed752ef26000665be3e27e3d36764cdebf795f224c0750f5fc8c5fe00000343f807008c0cf5157da110df6b1d9879bcb9d646bc72a04491ccc9d8ec45726cf27765baf6b04ccd9eedfb89003eef0f001824c23f006064a8afe70b85f86e6bebd815726a7eb3440bf566f1b97f942f9279393cfeef65ffd97f9656e889804bee3d3718f443a5de490000c0a010fe010023a39feffb579ff13f3afba2d4ebd33af0cfee3920a7ee5f230be3bc8d1ae59b5fd8e8047fbfec2702e66ab3f2fcd6c7db3e11c0f7fb0300068df00f00181951f3bf23b3eb82e13eaf0eceac91d9da09fdf8f9c3c7e5ec9a17e4e88a7bd21a7b76bd44755efd4779a2685a4e4d7f2e18fa4355e489807bd7dd60d60e00c06010fe010023a5d69808867cbbde9abc59a66a07246a34f42bfb63cfbd26c76f7dd009fd49a9db79eb3fca1445b37270ec5f04837ea7ca7b2280aff803000c1ae11f00305216a239d93cf6834ce0d79fe39fdb2c51bd2e8dd93999dab45d4edcf94830f0fb35bd7db77a5b01508ae9f95f06837db7653f11b0d0e0092a00c06011fe010023a52175d93bf5800efce9e7f8e7a7e2cff1bfbb5f7f8e3f14f0db957a9220aaf19dffe85fe8427ffdd69999afebf502003048847f00c0c851dff93f3b6f3ec77fe868e673fcbd54edc469bd3ea01fd3b55f05037c3fb510c5731d00804122fc0300464fa32193af6fcdfd1c7f2f75fa9167b8f01ffa124593727cf20f8201bed73a3af17fe90b0802003068847f00c0e86986ffe96dbb8221be9fe2d57ff4a3d3d7fbf552eafa0100002c06c23f006024a957e94301be9fe2d57ff42a8ae6f567f34301be9f52df1c0000c06220fc03004692ba409ffa8efe5088efa778f51fbd983b5d97466352e6eaeb4b7bebffa9e9cf49231a335b000060b008ff008091b53036110cf0fd14affea35b8d5a24af7c6ebfacfd9d5d72e8b1f1f449807eaffaaf3e460000c06221fc03004696fa4eff5ebedaaf53d58e9f325b00da8bea911c78784c077fbb8ebf30a93f0a303dff604f4f02a8c7f0f57e0080c544f807008cae486476d77bc100df4fe9effd9faf998d00f916e62279e69c7733e15fd5f31fdf2b6736cfe82701a6e6efe9ea4900f5958100002c26c23f0060a4a9b7e897f9957f494d6ddc2ed1026fff47befa6443b65d722c18fced524f029cdd7e565fbcafc89300f1abfe73662b00002c0ec23f0060a4a9f03fb5615b30c0f75b8d190218f24dec9a0b86fdbcb29f04189fbd4c0e8efd8b60f8575fef170957f907002c2ec23f0060e40dead57f2efe873cf645feba2df524c0cc91e9e09300ea67bede0f00300c847f00c0c8536fcf576fd30f05f87e6beec0d1e60622b325200efea18bfc755bbffed2c1f44980b1d9efebe03f3e771917fa03000c05e11f00b0240cead57fb5cec61c610c2db5b185dc8bfcf552fa4980e3eae300eae280d3662b00002c2ec23f006049d0affe6f1accabffeaedffd268982d6139ebe7edfe9deac89313123578970900603808ff0080256350affeab9adabc83abff2f738db948debaee4430b8f75b2f7c629f34e609fe0080e121fc0300968c68a131b057ff55d54e9ce6f3ffcb54548fe4d8bac960702fa3c67670913f00c07011fe01004b8a7a02e0d4fd6b82e1bddf3afdd0d352aff3f6ffe568fa50add4cff9dbb5f9fc23bcea0f00183ac23f0060698922a91d3b150ceffdd4d8932febe07fdf23fba456e30980e5a43ed918d8e7fcd5130af367f838090060f808ff00802527aad765ecd9f5c110df4b4deddc23b3730bf2dfbef882fcf3ff70b77ce97fbe26d33375b33554d9c24c43b65d722c18dccba8bd779d9185599e4c02000c1fe11f00b0249575f1bf9953e3b2e7bd09f9cf7ff2b80efe49dd72cf2efd8400aa6b6e7e5e26f7ce07437b19a52ef2a7de550000c02820fc030096247565fee9edbb8281be489db8f311999eaac9cac7df937ff5be079ce09fd4a36b0fc8fc3ce1ad8aa66766e4f1e75f94d9a979fd157ca1f0de6f9d7a9deff407008c0ec23f0060c98a1a0dfd1dfda170dfae265edea443fdffba745330f427a59e147877df8434f86ef64aa9d5ebf2f42bafcabffdc01fcafffdc9bf9283fb8fcbd4fef9522ff8f7fa570e72913f00c04821fc030096b4fad9f160c0cfaba9770fc8cc6c5dcef9ccd3c1c0ef977a0260df81499e00a8083bf8db75e0e031993a38afdfaa1f0af3ddd6fc693e320200182d847f00c09216d5ea32bdadf3dbffd5dbfcc74f8ccbae3de3f21bbff77030e8e7957a0260ef7e9e0058ea54f0df73e0a0fc9f7ffce799f0afeaded56b64612eeafbcaff071e1ee3227f00809143f807002c79eaeaff67d7bc100cfdaa4e3ff4944c4ccccbfd8feecbfd7c7fa74a9e0058e0098025a953f04f6ac5ddf74a6d62417f377f28d8772af538f504020000a386f00f00a884bcabff4f6edcaeafdaffc57f5c1f0cf5dd947a02407d33c0c202e16e29291afc93fa878b7e248d5ad4f55700aa770ca8270e00001845847f0040354491d48e9f7282ffc4fe6332355dcf7c8d5f3fa59e00d8bd7742e6e609794b41ad56eb2af827f55fbffc75999da815fe260075b1c0e98335b3550000460fe11f005019ead5ffa98ddbf5e7fbc74e4dc95bbbc77a7e9b7fbb52eb7c68cd7efd8e028caed9b93979e499e782e1be48a96f02505f0578f4b9898edf0470e4a989e6fce31d210080d145f80700544ba32167cecec90d77bc1d0cee65d68f576c9799599e001845b55a5dbe71d98f83a1bedbd2df04d0e6ab00d5c7031666b8c01f0060b411fe01009533db0ce48378c53f54ea5a02f3f304bf51a25ef1ffd4d7be190cf2bdd6863776c8f4e15ae69b00d4efeafa0000008c3ac23f00a072a26616db7b6072d19e0050d71450ef00a8d77912609892cff7ff974ffd5530c0f75bfe5701aa7702cc9fe19d1f0080a581f00f00a8247545fee75f3d1a0ceb8328f544c3b32f1fe5630043927cbebfdb0bfb755b17fdf4faf49b004ebd3ecdabfe00802583f00f00a8acf95a4356aede1f0ceb83aaf32fd924e39335fdee032c8e7aad264fbef44a30ac0fa292af02e473fe0080a584f00f00a8b4b9b905f9ca777e1d0cea832af531803dfb27f4bb0f3040f3332247de9168f555325fabc9473effc560582fbb2eb8fabae6bc9a378d0000606920fc03002aaf5e8fe4d35f7a2118d407558f3d7540e6a74e4963417df73b4f0294aade0cdecd8ad6ae90c6c51fd415bdfc4b79efd0e181bfed5f05ff59823f00600922fc03009685e999babcffa36b8241bdecfad0279f94daec84bcbce243bac68f6e97466dd6b4047da9cd49b4f345695cf1b134f8273573e684dcf9c8aa60682fa3d457079e9d98300d0100606921fc0300968dc57a02607c6c52763d7b853c7de96fa4f5e6caaf4a6d66ccbc13005d534f9e4c9f95e88ef332a13fad6b3f2333b333a57fcd9f2a823f0060a923fc03009615f50480fa6efe50682fa3563d7940c68fee70827f52ebaefe4f7268f3bdd2a8cff1244051f5663fa9b7f8bfdcecb750e0f72a7a7285bef27f996fff57c1bf56af9b060100b03411fe0100cb4eadde18c81300f1dbfd27f55bfd43e13f2975ffb11d8f4ba3196a1b0b84ca207531bf24f45ff797c1a09f57737bb7c80baf6f0806f96e8be00f00a80ac23f0060591ac41300e36353b2f7951b83813f54fa49809d6ba4b1d00cb90d02a6a6dedeaf3ed7fffc1dc1cff517add9e929b9e867d707037dd122f80300aa84f00f0058b6ca7c0240bddd7ffaf4fe60c8ef54ea4980439befd31f0758989f36ad5b66662745a6c7257ae48a6098efba7e71ae8c4f4ef6fcf57f047f0040d510fe0100cb5a7d2192ef5cb63918e88b967abbbf7af5feb5dbfe3c18ee8b96ba26c08ed517c8ccd903b2509b91286a98565657a402766db6bcd06f55f4d6cbf2eefe03c170dfae56dc7d2fc11f005039847f00c0b23737bf202b1fdf1f0cf6456a7c6c5af6bd725330d0f75aea8984633b9f30d705a8d0f7ca479144d333d2383b2e33f7af96c98bafd39fed0f85f7324a7dfd9f0af3a190ef97ba48e0ea752ff03dfe00804a22fc0300d0345f6bc8e66da7e55fbdef8160c0cfab9fdcb05da6cf1c0806f8b24a7d4de0c9775fd04f02a88f062c45d1ec9c44cd503df7e40b327eeec572e2b7ce49ab71f2c4405ef9d775ed67f4abf89dbefeefbf7ceaaf64dfa143bce20f00a82cc23f0000c6422392f70e4ec97ffe93c78341dfafffed771f6e06f25adf6ff7efa6d4b60e6df995d4a259dde61919d7ff1f35d1d48cfeffc291e332bbf20939fbf96f3b81dfaee95bef1739b23b1cde4b28f5f57fa7ce9ecdfdfa3ff5c480fa7a400000aa8cf00f0080676e6e41cef9ccd3c1c06fd7f1e313b2efd59b83217d90f5d28a0fea767e5b7e53ae934fc91ab94676c9ab322567f4ed8bfd844054ab4934195fa870e1d051997960b57e75ffe4fb3f1e0cfba192b9e9aebfd2af9b9a3bbc2bf8f57fea1b0178b51f00b01c10fe010008a8d71b72e58ddb83a15f957ebbffd983c1703ee8daf7ea4db25fde94afc8bfcb54de1302ca5cf337f5c440527529f6d9f6686636fe9cfef8a4b9a579dbc4a4d477ef93993b56cac477af94339ffc8760a82f5af5d7374bb4615530b89755535393fa2afe2af4ab77013cfcd4b37cbe1f00b06c10fe0100c8313bb720bbf74dc86ffcdec34ef01fc6dbfded1a3bb95d56cac5c1f0dfaebe27efd74f0c24a5d6a19e2448ea90ecd095fcbe539e97c689533adcabb7edb77beb7ebf75f6afbfa1bfdf3f14da4bab5ffd5066e7e7f5dbfcd5b700f08a3f00603921fc0300d046a311c9d8f8bc7cf11fd7a7e1ff987abbfffa5b82c17c316a3e9a92cbe523c1805f66ad948ba4fed6ee60581f44354e1c1bdc85ff4c4587df36230b00c0f242f80700a080c9a9baac5d7758aebffd6d999f3eadbf933f14cc075d1beefc2ba9c96c30ac975d3afcefda130cea83287de1bf66380f85f6beebbabf1439b843643ebe10210000cb0de11f008082a66716246a2cc89e97fe2918cc17a30e6f7950de90c78361bdecd2e17fcf7bc1a03ea892857ae917fe8b9ebf4364b675bd0200009623c23f00005d5aa8cdc8d8a137e4e5151f0a06f441d6d8c41eb94bbe190ceb83282514d20755f5b7769576e1bfe88ef3444e1fd2d712000060b923fc0300d08368a1268dfa9cec79694530a40faad415fad585fb42417d10a58442faa0aa940bff5df13189363cca5bfc0100b010fe0100e8c3c2fc94cc4d9e908d77ff7530ac97595b1f3e4f26e55430a40faa9450481f644563677bbef05f74ff85f12bfd0b35dd7600001023fc03005002f5518053efbe30d08f029c78e7697949ee0a86f44195120ae883acd9954f747fe13f75413f75257f5eed07002088f00f004049a2465d1a0bf37274c7ea813c09303177486e96bf0f86f441d5c2f8989cf9e43f0443fa20abe885fff4e7fab98a3f00001d11fe01002859d4a8497d6e528eed78bcd42701946fcb6f0643faa06afeec0939fbf96f0703fa20abd385fff4dbfb8feee6627e00001444f807006040d2270176f6ff24c03b4f5f2a27655f30a00fb2e6274e0d25fce75df84f5d0b40264ff3d57d00007489f00f00c080a98f03a86b024c1cdd21db1f3b3f18ee3bd5f8e1adb246ae0906f441d6fcf499a1847f55e985ffd4d5fbd7fe93c8f498487ddef42a0000e806e11f008045a4de09b0509b95031befe9eadd00b38d31b94e3e150ce883aca99963327eeec5c1703ee89a7b7c9dc8c4c9f8adfd7ca61f0080be10fe010018027561c0fafc948c1fd9daf1dd002fadf8a07e4c289c0fbaf6ccbe2cd3d7df150ce783a893efffb84c5c748d2c1c3a2652af8b4491de770000d01fc23f000043a6de0dd0a8cfc9e9f7d6eb2702d65dfd9f9cf0bfefd59b6497bc1a0ce783aeddd1fa81877f1df8bf7b95d4ded821526b06fefa82e91900005016c23f000023445d1b4039736083bec89ffa68c0e4d87bb2522e0e86f341d76e6986ff9b7f190cedfdd4e973fe5a26be73a5d4366e9568be26910afd0000606008ff00008c28f56e80c6424d6a32271be461b94bbe2197cb4782217d50a5c2ffccedbf0a06f86e4abfbadf0cfb73cfbc2c8db3e312cdcc4a34c7c5fb0000582c847f000096883999965999d03f1f941df2a2dc39f0270456ca4552dbf67630d0b7abb37ffb2d99bcfc06997df849691c3da13fbf4fd80700607808ff00002c61794f085c2b9f926fcb6f06037d37a5c3ffce5dc180afdebaaf42fef8377f2433f73f26f577df93683cfefefd686a3afefc3e00001809847f00002a463d213023e35217f795f65372403f4190d4e372755abf6a867cf5844152ea7775fb4e59278d5367f4dbf5ebefec95857d07cdda9a161a047c00009608c23f0000d04f14a8270c92f29f380000004b1be11f00000000808a23fc03000000005071847f00000000002a8ef00f0000000040c511fe0100000000a838c23f00000000001547f80700000000a0e208ff0000000000541ce11f00000000808a23fc03000000005071847f00000000002a8ef00f0000000040c511fe0100000000a838c23f00000000001547f80700000000a0e208ff0000000000541ce11f00000000808a23fc03000000005071847f00000000002a8ef00f0000000040c511fe0100000000a838c23f00000000001547f80700000000a0e208ff0000000000541ce11f00000000808a23fc03000000005071847f00000000002a8ef00f0000000040c511fe0100000000a838c23f00000000001547f80700000000a0e208ff0000000000541ce11f00000000808a23fc03000000005071847f00000000002a8ef00f0000000040c511fe0100000000a838c23f00000000001547f80700000000a0e208ff0000000000541ce11f00000000808a23fc03000000005071847f00000000002a8ef00f0000000040c511fe0100000000a838c23f00000000001547f80700000000a0e208ff0000000000541ce11f00000000808a23fc03000000005071847f00000000002a8ef00f0000000040c511fe0100000000a838c23f00000000001547f80700000000a0e208ff0000000000541ce11f00000000808a23fc03000000005071847f00000000002a8ef00f0000000040c511fe0100000000a838c23f00000000001547f80700000000a0e208ff0000000000541ce11f00000000808a23fc03000000005071847f00000000002a8ef00f0000000040c511fe0100000000a838c23f00000000001547f80700000000a0e208ff0000000000541ce11f00000000808a23fc03000000005071847f00000000002a8ef00f0000000040c511fe0100000000a838c23f00000000001547f80700000000a0e208ff0000000000541ce11f00000000808a23fc03000000005071847f00000000002a8ef00f0000000040c511fe0100000000a838c23f00000000001547f80700000000a0e208ff0000000000541ce11f00000000808a23fc03000000005071847f00000000002a8ef00f0000000040c511fe0100000000a838c23f00000000001547f80700000000a0e208ff0000000000541ce11f00000000808a23fc03000000005071847f00000000002a8ef00f0000000040c511fe0100000000a838c23f00000000001547f80700000000a0e208ff0000000000541ce11f00000000808a23fc03000000005071847f00000000002a8ef00f0000000040c511fe0100000000a838c23f00000000001547f80700000000a0e208ff0000000000541ce11f00000000808a23fc03000000005071847f00000000002a8ef00f0000000040c511fe0100000000a838c27f8936efebadd09f5d8737f454c08197b6f554186d63b5777a2a8c86f943c77a2a2c0f2fac3fd653a17aceecff754f052c6784ff12fdce45514f95b549567cfa0bf291db3699df6347d75e98b96d50b6dcd6dcbe6a83aeeb658bb95dd1ed48ee2bd01eb5aef3d61e31bf356dbdde3cfe425975c2dcd6a4965bb1d5fcd2852fdff85b3d5596e977af8ab629b39f8b45f7a73b46224764d585d97dd175e16a39aa1ea3fe6f961e0cd59fee183b7d5c60fbd9396fed977dfb89d5725e0ffbf3e37ff9b19e2a436ddf1b83f8180adca6da6df57fdebc29773ec5fda6d717686b3742edb2cf099d8f97c0bc28f99cf0d2a9bfefa9f29979d7e97c678dab3377077cbcd963d2cbbc29764eb7cf8f831dbfa32beee9a932f45cf7cf4145fb281e73ddfe8ec78c7fbeedfdf82a532f7321cbffbb98ed4fd7e08fef7ffe1feeeea972a5ed8bcbeeb3561f5af3a1471dc7a34d3b7a13188b22dacc77e75ca1aac33931f3375caf3b7eacdd976ab95ef6f7e94b7fa3a70a51e3e3ec9baeb8ffba9d07edc63aff3eff586b6dbf7779eded7f3efbfcfeeb349e997e28f93c817c84ff1285827d91ca4a4e00ee019039890e8a3a00adede8033af95d1f9c49bbe29347bb033c3919b496518f318fb7b7a3fe20f4f88fe350b02f525971bf3b2719f387aac8892773225b2c7a4cdafc6353ef43bf7f40ba159ac3ee7c71e65540fa8f0c7b9974ce58f3a8a9d73f0ea1605fa4b2fc7f64c5ed3bcff9e31aefbfdfcec599376edff72a7b3c37d9f3afe35ccb9b17e6f792ce09a1605fa472e9765ddf6c7bf150e79cafd5e31729fc77cd1ebf9c39aa38c758e631e58e5f28d817a98c9cf9d8757fe9f5e48d7ddc6799f354177365504a39b7b4dd77dfe21cdfa1605fa482f458f9ed6df55b297d68b45d578776f4c6ffbb54509b31efa63f427fc3d5e3f579c4197fd5cede8e9750b02f5221aa6dce716ce9761eb45b3effbef8f8b1cfbfba0ffbfadb11cfa3d039bd5cdd6d47f7b5f36f89f2cf13c847f82f5128d817a9acf884bde236f7a0cf847ffdc7223e805acb9903b0f90fd5f43efb31faa46e6e2f7ab2d5db89970db6217860c6ed50cbba273aeb246f1dd46a995e4f4ea1605fa4b2b2275ec53ff9a67fd074c5272bfbb6745f83e393155a5f37e3182fd3662cf5b2de3f00ac718bc767b5def7643bad36b98f4b4ed8aaf2feb0256d5bb1359ec7adc77bbf5bf3caa7b7d36cdf16d50e6bbf55bb92eda673c69a47dd0a05fb221512f7a3e913d326b7fdd6dccff4bff538dd77d6edfab6eb6555ce98b49b67ba1ff5edcde0da9c4ff6fa927e0fcf3f5fdef16c1e9fee63bc9c7d7f2addb7d0bc28f79c100af6452a4fd2167fdfe3716ccec9a4ef9371b5c744f58db97d55321e56ffc7ebecfdf8b3c74fdde6b7d17e4ca83fd5fdddf7b33d86e58f5f28d817a90c3de7b273daee23fd73f31c9a9c4f5bc7903907ebf99af4616bdc527aacb3b7dbdb488f1fb39eb45ff4bc888fcdf83ed356ef18f5cf9d6addc9bafc6d9cd79c8feaf69ffcdc9d174a91c765c62c99d3e6d75c8b787c87827d91caca395f59fddf1ac7643ee825d2fd8dfbb335567af9c07cf28f5357e77628edc62ffb6f85f8f6f836351e661bce38dbcbf8fb66cfbf84d9568171d36d6deebbfb37503d3e991bad79a1fa26db27c584827d910ad16d4edbeaca9d07d6b95e8f8135bffdf3bad27e1ec4e71aa77ffdb1c899779ad596ec794cff629669cd077dbbd9c60a6b7ed96db0ff1ee95c12ec23ffb8cf136f57ada3d5a74af9e709e423fc972814ec8b54567210b907ad3e009383ce9c00e2fb5a0753fa7372e0a707bafac53db1e8135d7a82c8a7b76b9673daa0e8f587fe48b4b807b86a9f698f7aac5a97da177b9d5d0a05fb22951538f12ae6c4a8f7d1db5fdd87a6edce7eeac724fd6e8f8f27777d9dc731d9967e4cbb3170da62a8f55927d7f4f1665ed9fb94fc6ccf8364b9f627e5641e9b5fed7e5442edf204e75bda3ff163b734ff18b55b473ba1605fa482d2b6593fab7db4c730f0733a6fbcfe716f6f370ec9febbf34c2fe78d6b663baa1dde36d37dc891b6cb08fdde7e1ddebc18c0392114ec8b54986aafd58f49df2bbaffac7db1c6d599bb7ab9d0f9daf497374ece7de6e776c79f3d06f6cf4e1bec714f99be5f1bb74f57b27c3bcebc297ffc42c1be4865e87db6e75accef2fbfffed71d23f07fb2e668f511ebd4c3276f69cc99d17d6b615b59c3daf82f3c07e7c2c33170a3ecea61fa7e68529fb580f1bfcf11d0af6452a43f743767ed85a7d688f49fc3738191f7b7cf5cfc1f9e48e87a3403be271c89fa7c1f9e58c45787e041fa7d71f9aeff17eb7e643f898b039e7a026b54ddd6eb50dbdede63a9336f42014ec8b5488ee8f9c79d91abbbc79e08e835e57b7f3c09b578adb7ff1fdc963f53692be0bcd09fd38abbdd679c4b9dd3c367fbdf67c4ad6eb31eb48e746813175fb41b5c76ca7a4f304f211fe4b140af6452a4b1d60d641604e20ce49c039889bd2e5e203ba754085d7a5e983b5c3c9db39f09bf43a5abf3b27b81c99139d5e47f2b8e4808fdbad6feff2600f05fb2295953df16a6dfac91e137b3ff5edfef8143819b6d6d7661cfdf6741a477f0c15ab3d7a0cd33eb7b6d394df9ec0b866b8eb0acf3faf5d1e67ce6bad79a2b7add6a9ee4fe754fbf5f942c1be480559e3a0faa6f547386e93da97b4bfbcfe8f5f2170db9ef66fa69f5afdda6e9ef9e3e3aeaff37ccee3ae373c2fdaafc39b174a3a7eaa5d499fb5c6ba539b7ca1605fa4829239a6b5c653d3edb6fad2ea7fa72fbde5ecfbdcfeeaedf80bff1c3f26733e73983e4ee790da7ebbc7b4c6c46e4bd9e3170af6452a23e71ce3f757ab7d769f593fb73966ec7585d9eb54e2dff5630ace0b7f4ceded0de23e9bdd8eb81f3acda9c11fdfa1605fa432da8c6bc2ef27bdefdeb8d9eb71facb7e4c536b5d9eaeda116b6dc71f3fbbffed9ffde5dcb639f7e7b547dfde1a5bdd06fbef4f40e66f8a5e871af7783d6a1daa0d7a5deaf60eebf385827d910a49db605576ecac7e53f3c06eaff5bb5e57b7f3c09c7fdd3684e799668f47a82d7a59b3ede6bf31dc31b5dae48dabbd2e7ffc32e39948b7a7c4eb0e2e67c9f4835e47b2cf6a1daa4d665deaf60eeb437184ff1285827d91ca72ff782607887dd0e99fed033d3d295807b466ad2b3db0ecb20e789f3949b7d615d32735f378fb6d4e79f24f744daa4d6a9f92ffa7077c7c7711a1605fa4b2e213afbfbfc1939ad97f5d664cecfdd4e3632fa3cb3ef126f2d6d7691cad75f97f107cfe895d51ebb0fe48b5c6c79d7bad39176867dad63ceeba32ed0cb5cb93fb87464be64af2ffe64de93c2a2614ec8b5498dd9ed67eaafe55e398fc5ff3fa5f8da77a5bbf7d9ca4e39219df56bfe6cfb378bc3aaf2f5ece797c87fe4bd763847eef6a5ef892314cc7d21adf8242c1be4885e8fdb1fba759e9fe5ae3a859bf3b73d75bcebecfedbfde8e3f7b1dad9fd5ba02e73347bc5e7b99cee3a764e757aa84f10b05fb229591738e09f79762f787f573e6186ce9dc5fd97148b7d9665eb4eeb3e744dca6f03cb0db1e6bed5b778f6ba7d8feb619ef12e64728d817a98c027f83fc3ed4fda4daeef7a5594f6b79c5ed5bf73e4bc776c4ebb11feb9f1b5ae367f77f76eeb8cbb9e39eb6afcd7c7714e83f674efbd4e3d51c4ffedfbc49b5c16e5327a1605fa442d4b6f3dada1abb563fea7db38e5ffb7876c7bae03c088c89d3c77adeb5f9b780dd96740ce36dabfbd4c7ce5aebb6da942e6b78fb61f749dbf1b465da9a95df0f4deaf16a3bc9ff757bdbcf351447f82f5128d817a92cfb84dd640e7ee7b336d6c1a9a5079a7b9271d6e53fa61dbdbece075a911341fe01de3a98d57a9265d4f2cec9af8350b02f525981136f937d52f54fb0f6fedbfb59a45f94fcf5b51947ff44edffee33f3c7194b6b2eb8e3e3cebdfcf614e1cd63fff774cee66bdb8feaf1fa3eb55eb31eb5af45e7785328d817a93caabdfa1976bb0dcd769eb77653b3ffac7d0df6bfdb3fe9edfef859bfb7eb1f775cfdf5c56dd18f0fcebf7cfe7addc7c4f3c4be3fcb9f17b672ce09a1605fa43242c78ed57ff6386ad6ef4ebf78cbd9f7b9fde9f64d6bb9f6c79fbd8ed6cfc58e597f3cd5ef9de680125eae9cf10b05fb2295159a6bee1c75f7dfee33eb677bcc7d6a6c03f7b5f6df1f076bfb6de645daf6adcd6da7cbf8ebb265ef6bed5b778f6bc7edaf90c11fdfa1605fa4b2e27dcfee8fda87784c837de81ff796fcf9d4aeefba69474cfd1e3e37d8fd6fffec2f17fe5d6fa3dd7cb71558ce9dd32eb50f697f9a65ec79514428d817a990569f66b5fadfea377f1e58bfbbe3e5f6b57b9f4d8d973d268af558bfbff5ef667c436dd1cbe63dbecd7aad75f9e3d76e3c1d7e7b02f2fb41b5adfff304f211fe4b140af6452acb3e61c7f401a79e5d4e0e3a7db02607427c10c7f75907b4e6ff2168dd17af3370e2b64f283ee7800e9da8b2720f70b5ae647fd29f5b077d51a1605fa4b202fbe3f4b3e9336fff937d70f6d3eb43755fe84498bfbe76e318df679f10db86e8d0785ae3e88e8fbd1dd33eb37fa1b606c735e5ae2bd8ee64fc73d8db77d9f3c4fad99e530584827d91cad5dcbebaa092d32faaff6f5317d3b1da95d3fff6fea6b79b39e82c938c43bb79a6b691cc0b7b1dfae7f8f6d09876ea3f77be3465b6638f79883f2f2cf6f8a53fdb635d4c28d817299fdb3f89b89ff4b1698da366fdeecc5d6fb9e0386b6edfd8cb85c62a799cbd0effe7b40d796363b7cdcc93ec393d3e76ddf35160b974ccec9fbb1fbf50b02f525971bbd33629aa5dde31d3ea7f7b3fad9fad6326abd836d23eb6ef533fe7cc0b453fce1a67257f1ed86d8fd9fbd6cde35abcfb46e4f80e05fb2215e48d953f9ead3eb4fbc29dffba6fcdfcc89f4ffe7d9e0eedb0b7e11ea7ee36dcfeb77ff69733f32b342ff3e6bb5ac69aaffaf1d67c0df1e7744a6d235997f5b35aa7ddc64e42c1be4885b4db9fd6d8e5cd03335ed67e743f0fdc79a539c75c7c7ff258dd5ebb0ffdb6e87dc9dbb675bb3fdef63807b61fea23779ce37587f7b125b71fd4f69375a53fab7526ed40bf08ff250a05fb2295659fb013f6c16ce89375f33655c981ea1de89975991384fd36355ffc47265926a9d689419f70ccedf6819b7720876ff7f7d1ec9fb7ce2242c1be486599139b57ce89d859a6d927d64932e9b7b4fdf6f884fe906a79eb2b3e8ef1e7c5f3d6dfe49cbc0dabddeef8b8dbf1ff70db63efccc520afcd9ab5bfe99c6df2fff81879ff70c8dc9ef6759b7e080805fb22952fde3f77cec463e9ccebdcfe6f8d7b7abbe99bd69578bd7d6c33cf5ae3657dacc0e96b6b3cd46d56bbf2b8ed8dd9e78cdc399b2a7a7befe78450b02f52aec0b819ba5f553ff9fd65ff9e8c8b9aa7de72f6fc75fbd3ed83a2c75fd2ff6a3deefa5a7da8ca9d972df6f8d9fb9b6d5b6b5df672b1f2c62f14ec8b5498db07fedfbd507fc5fd64ff9cec7bdef9a5fd36fcfbd37168332f343d87fc75e5cd03bbbd317b5e28451fe772c7dd5eceedbb843f0f12e5cd8f50b02f52b992633529ef988bdbe7f593f537d81ea3fcf9941d8f8c36ed50ecf1cbdb86dbcf491fabdffde594e4feb8dc7d0bcf75fb5cd176ee1ae1dbb36d49f72db08e7642c1be4885e836e46c3f771ea463d6ec6375e154d327bdcd03f7584bca193367de796364cf9f746cfcbe4ee68775bb3fde6a3dfed89aede96f1d6ad347e9f6ad65dcbe6809df5ede7902f908ff250a05fb2285fe84827d910242c1be482daa36ff10435828d817298c8650b02f52581e42c1be48a17a42c1be480d820ebf5d3e79b1b4c4419c10bef411fe4bb4795f6f85feec3abca1a7020ebcb4ada75a5484ffae8dd5dee9a9301ae60f1deba9b03cbcb0fe584f85ea39b3ffd73d55299c57e19b65bd5a5e191dde8d82a589f00f0000000040c511fe0100000000a838c23f00000000001547f80700000000a0e208ff0000000000541ce11f00000000808a23fc03000000005071847f00000000002a8ef00f0000000040c511fe0100000000a838c23f00000000001547f80700000000a0e208ff0000000000541ce11f00000000808a23fc030000000050717d87ff5db2bea702ca54dbf0664f8511b16f4b6f052c51ebdfd8d253c1757af34c4f85c5375b5fd75301cab67d1b7a2a8cb67da74ef754e85ddfe1ff2bf2ef7aaa3c47d75e281ff9f417d23a6fed11738fb9efb64de6b741d8242b9adb5cb1d5fc6ad9725bab4dadba5e16e39f62c9b633edda7a7ddc8e027da2d661f76548916562713fb5fae1425975c2dc15a496f79649daeeddaeda10eaff4e4efcd6393d5596bf6f71d96deab62f8bf7eb6219bdf16b5cfcc19e2ae3c46a394fb5ebc2d572d4dc143b22ab2e2cb2aff97a1bc764bb49d9e78cf8be5efacba1f77971ce45367d3ecef4b3259d23a17d5f64c9bce8d80e7bbcb2735bdfeeecb33a367adbaf7ffb813feca93272ff0e24c77999fd6e9f3bda1f4b697f35cb3f7f96d98f6b7f67574f95c7ff3748a1e3b3ec63508f69ffebb3c7a0edb9cb3e56ed79641d37763fa83eeae56fdafeb3ffaca70ab1f7cdae41fdad55db4bd66dff5c0ae7fcd4ac76e7554be9edb079e7efdce3c06f7b3a6fad73a93fa70aee9fef63dfff8f3d952ff4b72b39eefbfe7bdc464fe355d2b920d5f7b85ac75e49e7f0efaf7ab2a77264dadb2ad5e7033d56f2e836b5e913a7cdf672e51f3bbe910afff1c1677740fc0f8d64c0f4fd05826eefe2ed850e063dd9bd6d0fbe3d313d692fcc6e2beff6902213bff0c1d169423b927f2cdaff505413dbfcae4e4449fbfb98d8a1605fa4b20273c01ca0ddfc5128dc97c33082e3170af6452a43ef5bf31fa649fb12ba6dcddb3b0496729913b87d7c3a7fc8e3fbfbfec74657e3599ed03fa012f1b9dcedeb76cb0f96355f9bdab5431db7e978d96365cd6db54c32666a5dbd1ee7a1605fa432543bf5dcf6e640deed7db0f7dd9dcb2ea78fcd31a9fb7f00fd180af6452a44b7dbd9a7fc7f1338ca3e06dbf46d616a1de9b9a7cd7ed8e363ce49c958a463648d5bbcaededa160af6452ac439561781dade40fea6ebfe77c746ef5bce39ca36b036f963dc6e3eeaf34ca0ade9fc73cfbfe99cea4128d817299fff37207bdc0f464fe355c6b92055c2b80ee01c1e0af6452a8f3fbe43618eebfcb16bf3ef92011c3bbe910aff6ac7fc9379da217a92aa8eb496b16fb3065a1f60cd0e53b7db7fc49265dd091affb1d3f7dd767dee1fc850dbdc8323fee39a6cc35e363eb1a8db2f9415b7357fb6eecb6f578bde9fb5abbd3fb8f141bc4aad3b5d9fb52faa4cdb5adb6f6d23745b6b3be6f1fefe26f24e0abef48f9a6a6b6b023b27a09c1349b742c1be4865c5e3e8b7c33e30e37e6a8d953d86ea717edfbacbbb63946e47f75573fe79eb8a85c735b93d99eb2b1ef5c6c5ea5bc7088e5f28d817a90cd38feab8b0c7488d493cb7cd7e98e5d2e3c9ee13b3df717fbb27de76e39ea1cf4fd9137f6b3df1f8ad68b62bd99ebdfef8f1816de8b6aa50d7bcfdc29be527e932f1b6ec76e51ec379e72bd32fe179d894b6c99ccb82f3287c0cc5b75bf3c8e9677f2c9a6d48e77cf2186fbeebf5e71c4fedf8639f32eb4fc6402f67b6adda64fa289e4b6a19eb38e84128d817a90cdd5fab655573ccecfdd7c7a39e5bad36dae726bf5f73e7612e6f3c2d7a0ea673cf9a0f03e8c750b02f5259563b6da67fe379eece37f79ce1cd617f99267dec37ff9d91ce7bfbf8b18e8715cd65ec63223c6e667ddebf75f2e86543cbe8b6b6b6d51a3bb5afc9b65a63d41ab7ee85827d910a71e758483c9ebacf6e6b1e1f6a8e2773d0ea77ddb7e97ac2e36bf7bfda77b72fddc7a4f3476f27741ef378fdafd9e71ea5dd7c52edf0f6c99d8fedda97fc1db11e1b94736c34b9fdd762cf13d54efd58d5ae8edbca170af645caa7db9cb423d0ffba5ff38ed3607fc6b7397deb1d5385e78d927b2eb01e63e656eb716dd697abfb71d5fb666e6f8d71ebfcd08b50b02f52799cf1355a7d6fc6cafb7ba7ee8ffbcede8f9c3eed74ece8f16f1ebf5bede3b003eb981dc4b1e31ba9f01f77584e67363993d11c1cf160980132f7e941b4d6e14c04e771deb266fba103412fe71d08addbe2eda707b5de863971db3f277f8cac0327af5d36b59df3d66e8a276c72bf3900ed3e71dbe81ed4f13a4cfbf4c44dfa472d17b74f3f3e99a86ddaa3b7a9f6c354bade5cad6dc4547f99dfcd7ee8eda56def5e28d817a92cb7df52ba3fe2beb1fb323b27b3cbf83fbbf3cd9e27e1e5f4cfc17175e7bddfcfaa6da1b119c5f10b05fb2295918c8133c793f65afb618d95962e1ff7a97f9c29f638e68dbbcd1db710337eb9f3a1d5e77a7ba1e5147bfbc1fdd6bf58e2eda6e36e6f4bff9c335fcd7dcedc4bb765d1edcbf687cb3dce9cede8c787e6b8fd73cce963bf5f72387de9c9f6b3d90fb5efe676b54dd536b56c3a4f7a100af6452ac38cf9167b4eeafe6db6dd9f1bd6b8b4facef4abbdaf05fad15f9fc3ef3b7b7e95dc8fa1605fa432daed8fe1cc377b0edbfdecf49f3b67f5e39de592791eafcb39ee92e572c7cdfc9c33975deef1e6b2ef8bdb6bb723dd3fbd9de6b285b617160af6452ac4ee8710e77edd87665fd4cfd63ee863deeecf749d6e9fa9fbec7e099e23f576ccd8dbdb0c9cbb5ae2ede49ebb9c79929d4f713bd43a5a8fcfdda74cfb72b6e973e6b44baf5fb73faea4bff4faf576559be3c76eb9ade0f67284827d91f2a5e7f99c3e88f729749c9afb02e3add699cc09fd73339cc7ebb5f7df9b37a17131f3c159ceb4256db7ba433fc66b57707d6df432aee9b9205e46ddaeda95dedf8350b02f52799c7e32545be33e35c790d78ff67d1dc7a8abfe6d9dbbdbc98c6dc9c78e6fb4c2bf6606269974d600eaceb107c21e5c3d1871273b03e60da6e24f82d6a4f57f6fd1eb4cda14689bab752276dadcd4fabd5dbb5cc9edf6bad46dc94167afbfc5dd177bddedb6e3f75b6e5f24cb7927c630f70f93a6c74bf5a31a33b52d757fbc4d7d7b709ff285827d91ca8a4fbc99fdb10ee256ffb5efa36c7ffbcbc7bfebfbfc93b03fbf53f63aacc71b6a5badfbc2278b511cbf50b02f5219e938596d56b7e9bef46e33e3a9a5fd6df7afabc8b8dbec391016afa7b54ca09f13f67cd07d6fb5ddde97dc79d38edf2f561bfceddaebcedb967fbb5ea79917c95c53cbb4db07ebbefc73a66ab73d0e9dc6255e3e6d430ebd3db59cb76ffab851b7abb6a8f6aafbad7deb341f7ca1605fa43292fef6fb3069a7ddcf965efe16c5e2e5d53eb79ddf7a1cd572eef6cbeec750b02f5219493f9a5f3bb3e69bd5cfba5fedf558ebd5fbaefb5c093f5e2b346efefac2f2e6b32be7d848c7253e27a8eda9fbd331ecaabf16e333ffc9b9abcdb9c11b67bb3f5dd6639ad4f692f9defad95d26f95ddfa7e77f6b0cf3b7134bc7c9d98f267f5e5aebf5db916d53877ec899632e7bdd3eef3ebdcea4edf17d6a7fd2fe50fbaf97f1f6b1a050b02f52bedcbe36f4dc4ac7caee4ffb67c5da7fb55fe971deecd7e6effa76750ca5b7277dd5665c72cf05e16dc7bfb7595f2eabed19de7dceb89afe517da7fa28d9bff45cd169bb59a1605fa4f2e8f1b58f99a6f0b1d2e4f577a131d2fd51e0d8f1c73228de8edb6ff1b6d46dba2d6a7b7d1e3bbe110cff2efb20b44f9e99c1b53ab935784aab139dd2eb297ec0d8ed084a0725a97870fcc7b5f6a15dbb5ce9fe2407996e77bc7ebb4fe23e70d797ec4bab4fe2edb6faa725d46fa1bef075ec1babbd41f6c44efba6bbc91d0af6452acb9f13861e5f7f7ee52cdb64f765bbe5d3fbfc9384da5e32bf73c7353046491fa673a5b35118bf50b02f5219563faafd527dd33a46acfd68d7df669ce2be6e2dd36e1c433af7ab3f7e6e3febc7a7ed6856d23ea7ad4ddebee8fd358f49e660865a87bdee02fd9239e7faed48e8755beb4859fb9bd9bed5066fbdfe39d3ed2f7f1d6df63995377ef1fad3c7ebbe08cfe3646e25ffd7cb86faa28d50b02f5219697fb58ebb74ae3ae319ef9fd35fc17eb51edf96d75f163d77d3b99f7fbc94d18fa1605fa43272e7ad45f7a7db8769bbcd63ede3af55f17d6ebf5afdee6fbbd0b8151da758e6f84d78db76c7ce928c8d3546e9b815140af6452a24b79d9a7b2ecdf4b5d50fadf34b53def836d97dddfa393bb7d3fbda6da7136b4c32e366cd0dbb4de9fa9db9d3e61ce9b52fccccbda2edce3d27a8dbd57824ff6fdea4b65f78bdb150b02f523edd57667ec43fb7e6bf62f7ab3377da8db7be4fada7f97fd5af6a1cd4fe59fbe9cf9bdc71b1db938ea7bfed6cbb82eb0b8a1fdbffb8c6fba4da90fc3f3d4fc47717120af6452a4fe698696af5bddd6f4dcef1d2c51815d9476fddedf9e39b50ededffd8f18d50f8b776cc6675727a72f36ed7ac03a635788a37d00effbefc65d53af33bdb1f34f5bb7562b11ed7fabd5dbb5ceea46dae776da84fe2f5e5edb7dd276effb414ef3757defa5a5afd9165f6c9f495ddc622db4e84827d91ca0a1f80ba9f4d9fb7f637bf8fec3ec95f3efe5ddfe79f24d2f96d2da3d9eb086d5fb53ffb99f7764661fc42c1be4865d8fda84f90d6673dedfdf0fadb1e5f87759e2932ee0eeb9c646bf593bf1eab7dfe63ad76383f2bb97f60f2dae9cff1fc7e69bb5dfff794bffe84d59edcc73679f7e9b1099e33ad7677255e4f66ceeb7db7d7d76639dd3e757fb2bc6a4b680cf285827d91cab0fa2b9e5be16b5bf873dcefd7d67ee6ec77803a26ecbf6fb1ecf807972ba91f43c1be4865e5cc5ba79dd97ed2cbfbfd9ce993987bae0d3f5e2b346efefa3a50f324d0b799b169b39c6eabbadf2cafda5278fb4da1605fa44282732ae58fa5d5d7def9a5b59e36e3db64f775eb677719671dde76f2e645b80f55fbcd31e1adc71e1fbb4de99cb1c6c7598fcf5f6f46dc87d9b6b5e3f78791b649add3ccadf4b82a2e14ec8b94cf3fa6fcb9e4f4abb34f6dc6bb49bf355b7dce3bd9d7e636ec6bb1b4d6db665c72cf05e16dc7bfb7595f4689e39a8ea1ba3fd9be35c60585827d91cae38faf927bcc7afd5d688c3a1e3b863f966dc5edca8c4b49c78e6fa45ef9cf0e58dc19c941e99c3c75a72603e82ee71eb8fe7add89efdca73ad9f983d1a2d6699f1c5cf13a93c7e975269346b7d33e28bcfdc96997cdde1fdd0ebffd7a7ddec4f1f6c55e4768bb6a39b7dfbc0324e5ddeeec5f1eb58d360751d2afe9cf6a1b9dd6e90a05fb2295e58ea5e6ccb5c07824edb7fac25fc659de996f663ff563ad9384ba4f2fd76e5cc363a4b7913b26a3397ea1605fa432ec7e34e3d6fa87acb51fe63ebb1fe3fef6f6d5dabfcc3806c6dd65d69b2ca7e8f14b96f5c7cfdab65e2e69b7dd3e735f7afc3659fbdc3a1f2879e3e0cef1ecf92a340f15fb715e9b3cce3a8df8b6e4f1a13698ed7afbd7da27bfbf42e3e0de1ff3c6b4c378a5c75acefad43693dbd29fd5b2397d912714ec8b5486dd5f7ade58e3628da7eec7b48d71ffdbfdea3e26bf7f5afde18ea1cd1917b35cdaaf4659fd180af6452ac499879add766f7e98be4edb9d3cceeb3fdd17669fd4cfad7eb0fbd35db77e4cc771f3d7e76a1d3731bd4eebf794de8fd63edbed4dd9e362fdac960d8d7f9e50b02f5221b9fb6338fb618f95fe39199fec71101cdf26b53e7b7c9cb172b663d6ad7eb6fad11f8f94375f14671eeafbdd7992acc76e477a9fd56645b72fd9aebd2eaf7d2eaf2f72a9feb3daaef7df3e7e14b5ae6419eb67b56c9bf10b0905fb22e5738f29c53d4785fad59e07c1f16e52ebd5df2a94ae47fdee1e5bf63682e3e2f5bd5e2e742ed0dbf6da155c9fadcc718db7696f5fffacb69d3bafc242c1be48e5c98e6fdcbe78bfddf18cfbaacb3152fd51641fbd75bbbc3ed6cb5abf6bd6f162ffdcc3b1e31ba9f0afc4273d35d94dd93b68267b7a5bf2bb2a6b20ecc14be8410cadd34c84641dfe159313ce2408b0dbed5f9caf759f7f75fe76ed6a71f647ef736b82e87587faa3799bfdb8a40dcea436cbdab7b5facd3b401ce60fa6297b19771d096f92a7fcdb5b63915d477ba1605fa4b2dc7debbc8fd6fcb196b3fbbbc8f29993841acb644ee78e6bce18d98f0d1abdf10b05fb2295e1f4a3694f7a5cb9ed6d1d97cddbac77d338fd9df34721771c33dce5ec63373b7e76fbecc7356fb3af1a9b19df643cd5fdeef6f2c6a1b5ef6a19eb7cd56e1e2a56dfe8abe5b69b677a5dadb664fef1e0dc6ff58bb7cdd639ceef2fa5d8fefa6d09f7b992f465cefafcfe48d76bafa39850b02f52194e9be2f6a7ed76c6d3deb7e66de9e34cbfeaab4ac7f7e7cfe7bcfef1fbd11d97d6316894d88fa1605fa4f2d8c786bb8f4daaddc97df6b9d8e9e7267b39ebf6d03924ed6b6b8ebadfee93376e79e7eb16757fda0eabbf5bc754ccdd676b3fb4ec7197aed71fd70e42c1be488538fb6657da266b0e7a57466f3dd6fb3759def836257da47eb76ff7e77ada4fde1cf7fbdc618d7d5cde18d8edb2d6e9b623696378fc92c7a7cb7bed7364da1397de377fae3bcb668fdfcc7ea7fbe2b7b3b350b02f523edd267fdf4dbbf2c6b735ff73c65bd17dd1ea037fdfdbcd1b7b1ced3e75cf05d6639c77352a6dd6976837aefe39bcc3b866e64fba7cf7e7f050b02f527942e3dbea7b6f3c75bb5b73b1d018b53b766cdebac3bfb7d6efcca5a6328f1ddfc885ff6a8b2752f0a0445f42c1be485591ff0f82a52014ec8b14b05485827d912a9ff78fa1252614ec8b14165f28d817a9fe2ded398e5828d817a94ad2c1b1fba03d8a42c1be48a1777d9f5577c9fa9e6ad9489fa93195f7cc2ffa52dbf0664f552de659ca22cf488e9a7d5b7a2b60895affc6969eaa7c4b3b189dde3cd35361f1cdd6d7f554fd23fc57c1b67d1b7aaaaa502fecd879a22af379dfa9d33d157a57c653aa0000000000608411fe0100000000a838c23f00000000001547f80700000000a0e208ff0000000000541ce11f00000000808a23fc03000000005071847f00000000002a8ef00f0000000040c511fe0100000000a838c23f00000000001547f80700000000a0e208ff0000000000541ce11f00000000808a23fc03000000005071847f00000000002a8ef00f00c0009d7af5d59e0a0000a04c847f00000668f5bffe373d55c896dbbe201fb96d93f9cd38b15acefbf4f5b2c5fc9ae7e8da0bb38f0d50db386fed11f35bc82659f1e90b65d509f36b86babfd94e5dde725baf0fdeaeb6b962abf90500000c04e11f0080010a05fb221532fcf09f04fbfcf0ef04791df693b61d9155179ac7a9db93b6a8f65fb85a8ec6bf0100800121fc03003040a1605fa4420a85fff4d5f56625a1dabe2d797c68b9a6dcf0afb7a3827da757fe6df6b2ea67d34e2bf03b4f160000808121fc03003040a1605fa4423a86ff34a0ab5fd42bedade59d57fef57249287797cb0dffa92ec27fa757fe553bfcfd0100000341f80700608042c1be4885e8f09fbc5aef9409d82a54db6fa1b7c2b71dfef5cffe72d62bf1fd877ff38442b36dceba747b92f6264f06b4964d9f9c000000a523fc03003040a1605fa4423abdf29f09f5fe7d76f84f9f38482a5eaed457fecd9300c1f525affe27ffb7df190000004a47f80700608042c1be4885740afff62bf89a7ea53d27fcfbeb31ca0dff396db682be6a4bb23db52c9fff0700603008ff00000c5028d817a9908ee15fffdced67fecd7a4b79db7fbccd568057cb06027dfa6abffd33affc03003048847f0000062814ec8b5448c7f0afe857fb9bcba9cabc0bc07abcbd9cf5f85ec2bffb9838f027ebceaecb7fbc799222b82c0000280be11f0080010a05fb220500005026c23f00000374ead5577b2a0000803211fe0100000000a838c23f00000000001547f80700000000a0e208ff0000000000541ce11f00000000808a23fc03000000005071847f00000000002a8ef00f0000000040c511fe0100000000a838c23f00000000001547f80700000000a0e208ff0000000000541ce11f00000000808a23fc03000000005071847f00000000002a8ef00f0000000040c511fe0100000000a838c23f00000000001547f80700000000a0e208ff0000000000549ac8ff0ff3e288e0b06b5dac0000000049454e44ae426082, 0x89504e470d0a1a0a0000000d4948445200000414000001660806000000ddcdc9f1000000017352474200aece1ce90000000467414d410000b18f0bfc6105000000097048597300000ec300000ec301c76fa86400003d8049444154785eeddd099f1cd57d2f6ebf94bf5fc2cda26c0ef8e686e0c4be4e02d749ae626e2cc75114e3846b2736c9b52d39363206b3d858201499c5d88065c058b2c6c86c92400b5a66242421d08af6152404484842e2fcfbd4d253dd53b3f4485dd3d3fd3c7c0e9afe55757577754df59c6f9faafa500000006042ecd9b337fb093ac7eeddaf673f8d4ca00000003041c6da71832a09140000003a9c40814e2450000000e87002053a51b581c2a97d61e963b3c38d53af0a533efce1f0e15abbe29a1961e6bc2561c7a96c9eaa0dcc499ec78c45c7d2db87178619f1b9ddd59fdece9dda11163eb834647395cbef3bd6d6fc185518eef50100001d4ba04027aa2c50d8f7ecec30754aec484f09574dbd31cc9e373fcc9f775b98f9b92c5c98322dcc7fe56c367785c614286c0973e273bf7ee1c881c2b1a561f67553c3d462cbc393295735d6637b704b76c70a0914000060d21128d0892a09148ef5dd9076aaafb92d2c2de9919f5a37270d1ba6dc10961cce8a55690e144af58739f1f98f162894c93bf0e3b96f3b0814000060d21128d089da1f289c581a666661c1c2fd59adc4be9fcf483af6536e5d152a1da720500000003a9c40814ed4f640e1d8a23428f8c4bc5186f79f5d156ebb666a98f1b525615f523816165e9f76c477ec5c106ebc7a4a6d3957846bbfbc20ecc813870bc7c2aa07678669c9b4185a5c15a67deda1b0aab4e77e36ec583227dc78cd15e9bc1f9d16663ed89f8c8e6808149a3bdc59e0d0d05a0907460914faef8acb9c13fa4fac0a73a6c5e736255cf5b9c2488e533bc292bb6e0c53f3d7981d323267c98e5076da89539b1686395fbe365c91cffbb999e1a1e20a19265088ebe1da5a7dcad4da73399d1513a71ad75bf21ecc094bb6353d7ab69ee6ac3b1556dd352d79fc29574f0bb7950d490100005ad29e40e15458336f7a983e7d68ebdb95cd52995da1af5d8f7b624d983b7d6e587322bb5d2699a7aff62caa716aeddc307dde9ad23eddaec513b1fec7a7cd81c2a9b0f46b69c776cea6ac346659a070ddb4306dca9430f53f6e0bf3ef9819a6dd958d6038dd1fe65c1397fde170c5b499e1b6784e869b6f085725a321a6863903c5710e676b1df76b9379a75c7d437afe866cde29b565c7fab081c29ea561febcdae3c6dac76f481fe7b1fed237bed4980285da6b9c567b1dd7cfae3dd6ec70c39716a6a1cafe85e186f87a6a9df8695fabbdfee26bac2df3dafb1a439a7d8bb2434ba65c156eb8399ea3627698f1d138ef9470c3a234a6290b14860f13f685855f4ad74f7dbdc5f72059e615e1c6be6c995116284c9b362d7cf8a333927967ffcb0d61e19e6c3a0000306eed0c1486745e93ce75d59dda890c14e27a182570b8cc460a14d275515db87129da1c28ec0b0bae8b9dcf196161cbe746c80285d8497db4d0714d9c0dab6e8e1ddd4f84994b9aa69d88231d6af7fb78ad739c650a676b9ddd4fc44e71de51cfd53beca39d94b17d873ca48142edb9dddc7ca847ed35de1a5fe3b54de148cde9556176129ccc09f54861cf8234f4b8a6f6ba8b5b653d78b9312c89bf204daf2fae9b244cf8dcfcb0a5214ca8bd7b8f4e4b9edbb4795b1a9fdbe91d6141123414ded77c24c794d96155d3720000804b5369a010edea0bd31b3ab54da31916675386cc373418889de7b96b4fa59de8c56b1a9613eba9e6fb0df378b9e4710bd39b3ae0f15bfe7cdadcc57d23070a7159d9f28774f44bc288e2088264fefa73687e8cf435d5a7175e43f3e3a4cf77f0fee9ba6a7acd1da8cd8142d611bfa440616a58d0fc2df7a9a561665cee97970cbed105f96116b35f4cbbc1fd77c5ce6fc9726af63d96769a273a50c89feba02de1a1ebae0d5794de2f5f37736acf2cb5e5be4fd46e4f09b7ad6a5e4e6d752db9315c71cdd4307fa076a3f0fa460a13e2e3cfff786dbe8fd7a6659506b5fbc6d11053f3b0270f148604230000c0a5aa3c50483ac3790737ebdcd73bb8c5dbc5f9e2cdb4a33f1814c479d3e979e7bbfe78c9bcf97d8b81c2488f57d370bf28ebb867d393ce79bdb39eddb761fea2747afd39351dfa30e439278f954e6f0e05d2e795dfb7f87aa2f471f2f552bc6fe3f3cd547c08c678b57d84c2c219b1e37b2981c26df54e735dde799d36333d0ca0b97d2d0d093e911c12903f87c1ce778357e627a317263650a8ad9f114e5819ce9e0aa78eed08fdab9686850f162eb5597f4dc7c2922fc5db378425a33dc1fcf95c3335bdb246ede7e6432712f97cf9611ecdedd61b92f5f6e1af2d4d37fcec3d99f1f3e6d1240000c0a5aa3e50284c6be828670adfdcc70e71b1a39c8c08c83bc871beece7211df0864e77e1e7511eaf4cd229af071c4daf69c4fbc6f98bd31ad7495c6e5fedf5348419f5c719bacc7c5d24af35bf4fae1012e4eb6257fcb7343828791d63f0fefbef875ffdea5761f6ecd943daa38f3e1ace9c3993cd7979b43950888726c44eeb259c43a12c08c80385d15a120ae4a324860914b28ef384070a6581cb89fe30ff5ff2f0206ff1448b37846971f440215018765d35cb9f4fad4df9dc6d617672bf6bc3fc57b2e9b9c27c23b6fc75e58142be1e010080cb66220385a1414034d8a11eec3cc7fbc45a9c36d8712efb563e55ec340ffe3cdae3d5251df438fa206bf13994860725f7cd153af9b9c180247b1d719eecf92401439cb9f9b10b2dde3709384aa6e5e141f21af35a73f09048d77fbeee5a114383181e14c384f9f3e78737df7c339be3f26973a0505b0dcfce4c3a9aa35ee5a1b6c2967ce3da30e36b73c2d2e4dbfad10385fa70fb118d324261cf8230b5d811ee9440e1ec96ecdc07d7861b1f5c12fa771e0ba74ee5071334af9b718c50b8fea1b0231ee6503ff742d3a10df97c633d8441a00000006d537da030d8091fb5835fef94671df03835eb78ef5a3cd891bf6c8142a1339f3ff7a4033f9e40a16c3444acc5c7af0709795012ffcde62d7d9c41f5e7338c3450c8d759f97b1097319e40212a860aed0a13a2b6070ac9e520931308ce0c4b8759d98957e627c7f30f1eb33f42a0907776a72d683cc962269e1761cad553c3ec67d3959f9e43e11343bf85af89e71768e808774aa09075d0cb8398daf3490e57185c37f93914e6c4f324348b87757cf4da70c3633b4a5fdf96fbd22b60341efa903dc694db42c969196a6feb6d614a6d99d37e92dd47a00000006d5379a050ec688f7a0842d6e15e9b1f0e907698e7ae5d13fa0ac1c0580385d11e2f594e53677db0035fd2411fa9f39f4c6b7aac64197db5d73338ba2209486aaf676efd71870f02a2f2506450717af2f390e790be37e30d14a2182a3cf9e4936d0b13a2f6070a35c7fab2cb195e735b585ad2df3cb56d41b831bbbce1e0c909471ac61f2f4719438229e186e663f6f32b3714038c2cac98f2a505e9b7f2b9fc8a10c58e7069a0b025ed5c5f571e608ce81203850f7f6369d3088153b5fba40140c3ba295ee5a1e1048bf9a51fb3c31aca5e5f6134443174a9070db5791b36e3fa95230af30b140000a06d2a0d14924e76b19ece37d8896fbe9d75e86bf7a977809350a0b1433ce6406194c76b5e4eda211f6e7a76df614713c4c76d9e96df67701de48f515c5769ad18040c7d3dc3bdfed2e758589f8dcbea5c95040af15c0a3b1ebb315c917482e33900666627fa9b1d6e9c9a9f23e08a70e3a262777d94f30214c2802ba665cbbbf9867055f2cd7d6d597dc5659d0d5b1e9c963ece47a78599770cce3be59a6bc77052c6fc90822961dab76af77daca9833d92f1060af54e7ee1f5dd31334c8bc1cb946961dab4a1f7dbb7280b6ef2d7585bbf375c9d062f53efe94f8389d2d7577bb84de9151f1a0e7d38bb2fbb3c646d3d5d7d43985d7c0ec5654602050000689b76060a4967bca19575be9be66de8fcd6240142f17e433bc48d9de86868077c70fe911e6fe8b4e6ce7d1e70c4968c2c1836504897d5dc711f12160c33caa1f838c9631597930533f5e9cd2148715d348738a523273a4f458142e6d8aab0e0e61bc3d46bae483a9f6947756ab8f1ae85a17f483f74944021ba702cac7a706698515fde15e1da2fcf094bb69577f78fad7a68f00a091fbdb6f6b84bc28e9d69077be440a1d6b7deb920cccc1f67b84b2996196fa0109de80f0f7d6d5a1692c475352dcc7c7069d8577b79e9a531a70cb94ce4a94d0bc2ecebaf6d086f1e5a5578e4615e5f0c5dfaef88874d341ffa702aec5832a710fc942c331228000040dbb427502011c39086a063e2c5c0e1520e77a84ab581020000002d1328b4531ca530dc08868910476b74fee88448a0000000d0e1040a6dd64187182427809c0c69428d40010000a0c30914e84402050000800e2750a01309140000003a9c40814e2450000000e87002053a9140010000a0c30914e84402050000800eb777efbeec27e81c02050000800e77e0c0c170eedcb9ec164cbcb83deedbb73fbb353281020000c0043971e2643876ec78760b265edc1ee376391602050000800972fefcf970e4c8d1a41367a40213296e7f713b3c7af458b870e142561d99400100006002c550217e231c0f7f88e75488c7af6b5a956dcf9ebde1d0a1c3c976d84ab02550000000005a2650000000005a2650000000005a2650000000005a2650000000005a2650000000005a2650000000005a2650000000005a2650000000005a2650000000005a2650000000005a2650000000005a2650000000005a2650000000005a2650000000005a2650000000005af6a1ddbb5f0f9aa6699aa6699aa6699aa669ad34231400000080960914000000809609140000008096091400000080960914000000809609140000008096091400000080960914000000809609140000008096091400000080960914000000809609140000008096091400000080960914000000809609140000008096091400000080960914000000809609140000008096091400000080960914000000809609140000008096091400000080960914007adc9d6bcf852b7f723afc7f77bfa335b5b85ee2fa010060288102400fbb6ed199d28eb4d6d8e27a0200a0914001a047c56fdecb3acf5a7933520100a0914001a04739cca1b516d717000083040a003daaacd3ac8ddc000018245000e851651d666de40600c0208102408f2aeb306b23370000060914007a545987591bb901003048a000d0a3ca3accdac80d0080410205801e55d6611e737bf562b694321f84952b4aee335c4b96d5e27d26a8556e604ef8f0873f5c6f33161dcb2614f5873985793e7c577f566fc1e1856146edbe7306b2dbd41d5b34a3e13d48db9cda5a1f34649ef1bc076d976e27e5db10008c8f4001a0479575982fad9d0f3be2824f9c2f9936421328946beee467b71b3b84cd9dc471761a050ac3eabf6be480200d1366848587b3421ef0745ca8205000e0f2132800f4a8b20ef3a5b49f9e884bbd187e5a326dc4265028957464af5f188addbfa4f35aa8a59dd9c66fcbd3510d4db5d1081486712c2cbc7ea44ef830d393f7a018327402810200979f4001a047957598c7dd565c08a76acbdcf16ac9b4e6d670b8c40761e581924061c8211585e9c33cd6ec031fd4aa79a07136ac3c9bdcb16e4ccf6d9436d19a4386f26fcfd38ee388e1401620e443f4e72c2a09149ae649e66b1a2dd1fc188d0147dad92ebdffa411d7e538828164fd0c77bfb28e7d49ad39186a7e3f4a4640341f7ad1b8be873e463e7fbd36e43d6f319802a0e70814007a54598779bc2d199d70f642985d32ada1654141bd739f85030d8141c98885c6d10f5958d0706845b15632fd328d829850433af1c37d7b5ed6612dc89633383d9dbfa1033ae4b1f2ce67de49cec282864e6db15632bd23bfb51f45d3392cc6dac92e1d3952302408ca1fa7504b9691874743deb36cfd0e19ad5258bfc3bccff9ed3c4c18e93d2f1b250300450205801e55d6611e57cb42815307ce964fafb7b220201f5930d8d94fc283e6f3303405028da3116aad61d4427a2e87d19f4feb6d620c76f81b3b77e30b144a3b89598736ef4c367466734d1dce219de686e9a3841a93c4904e774db2fe460c15b2f7ab216c69d4bceee232675c5f5ce78def6de97b3686f5ddf83885799adeefc4640c7c0098700205801e55d6611e4f1bd2b91fb6a51dfd21871e8c307a201d99902bccd374d843f373a8df6f2ca3265a6813adb183389e406198fb947c3b9dcb3bd579abcf334ac09076bc4b3ac293dee8eb77e4c0a1265977c5d11eb59f070ab586e9c33d5ee1bd1c2e0c285b4e0c2e4a97974e2f9f0600e5040a003daaacc3dc7a2b1f7550da8639f7415a2f8405d96111a9ac3edc6110c31de2506b69c8503096e7384a9b78c5cee5780285e1a6a5f5e6b0a02144680a10a2243418ee10879ae63062a46fed278ff2d75aaf8f1626240aef5d5caf49e892d692f51b03827a1033d8d12f6bc932b21107e5ad315088b53454280920eaaf61b015df6f0068265000e851651de6d65b2b87178c6584c2300145d92886a47631fc74b8a0a2d0f270e1520f8398788d81c06087bea8291c6850e8c816358505a30fb1cf241dd95a07ba6c5a933c5c181a664c3659a7bb61bde71df1b18409a9fa7b17d761b6acbcd6f8be36bee7a5861ba1d0a0b89cecf98e387a247f4da32d17805e265000e851651de6965bf3e88211db58cea1501e3aa48730343f4e36ef892c5828cc5fd64acfcdd062ab4e59a7b5a6a9e3de7c984122efe467379b958605d937dce972d3c76eeec0e681406368908517778dfc98b9c68e72e72b5d57f96baeaf87d6c38444f63ecda93d46c3fb79fd8ca67066986da1f83c860b741ab685a660a2e13d1f4ef36b0580460205801e55d6616eb9e5a304caa695b564fe4260908d2e183242a178ee83ec3e5179d050d31014948c9a18c32886b1b44a0de9f0651dcb860e6edae16be9dbecacf339384fb68cc263251de9620739bb4f9ca779d9e9bcc5e710953c8f318c62e83843d6d5d0f760c8ba1ab37cbd174600d4d773d3f2863c8fec710bcf230d7c8aa3099adf83a1ef49c3734fb6b7c6d108a5811500140814007a545987b9d536f61332165a212048828403f17671f4411a080c1a3cac61c8210bcd0145bd352fe3f25cf5a17259a8506fa5dfee0f0602c3cfd3a41010c436675173673fffd63d6fb1a3993d4ef3f287fda6bbe979d55a43c0305934adab8640a7795a531b393c194b405430d2f3c8e4a348f2d6b8be87060af565e68fd7bcbd39dc0180510814007a54598779b2b571051a97d018cab7d800d0bb040a003daaacc33cb95a7a78c4e5187930d646b3f45bf64939f20000b8640205801e55d6619e2cadfcdc09ed6f0c2a3f770200d04b040a003daaacc3ac8ddc000018245000e851651d666de40600c0208102408f2aeb306b23370000060914007a545987591bb901003048a000d0a3ca3accdac80d0080410205801e55d661d6466e00000c122800f4a82b7f72bab4d3ac95b7b8be000018245000e85177ae3d57da71d6ca5b5c5f00000c122800f4b0eb169d29ed3c6b8d2dae2700001a0914007a5cfce6dde10fe52dae1723130000ca091400000080960914000000809609140000008096091400000080960914000000809609140000008096091400000080960914000000809609140000008096091400000080960914da68d1a24543dac2850bc3c18307ebad483da59e524fa9a7d453ea29f5947a4a3da59e524fa9a7d453dd5aef04028536fae52f7f39a4dd7efbed61e9d2a5e1d0a143492bca6beaea917a4a3da59e524fa9a7d453ea29f5947a4a3da59eead67a271028542c0f1600000060321328544ca000000040371028544ca000000040371028b46060def4307d7adae60e64c5c37d6156569b3e2f2f0e4fa0000000403710288cd5c0dc306b717e128c813077665f3854fbaf6fe6acd07738abce2b040dc31028000000d00d040a6334306f56e85b3cb76984421e2c641a4287720205000000ba8140618c92c31dea87340c84b9d3e7d6fe3f345018edb0078102000000dd40a03046c90885ecd086503fd4c108050000007a934061ac8aa30f921331c6110acea1000000406f1228b4c0551e000000202550a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e2050a89840010000806e205068d9a1d037737a983b90dd1c981ba64f9f5e6ff5fa30040a00000074830e0b1456859b3ef4a170cd2387935b871fb9267ca8763b699f7a38a4d5893530af313838b4785698b5f8507a630c040a00000074838e0a14567db3101cec7f385c1383846fae1a9c96fd3c61e26884790349a890070a79c090b4997da1182dac58b16248bbfbeebbc373cf3d178e1f3f9eb4a2bca6ae1ea9a7d453ea29f5947a4a3da59e524fa9a7d453eaa96ead77820e0a14d2d10937adce6eaebe291999d078fba6da5c13e4705f989505068381423cfc6156e8cb864e348f56f8d18f7e34a4dd74d34de185175e087bf6ec495a515e53578fd453ea29f5947a4a3da59e524fa9a7d453ea29f554b7d63b41c7060ac988844280901efe307181420c0bea231192361824d465231846e29007000000ba41e71df2901cd690860b83e74dc86e4ff4210f99c1110a0361eef4b9b5ffa78a87420c47a00000004037e8c89332a62762bc263cbc3fd60e87873fd5396142d4101c14aff230cae88448a0000000c058bd75e67cf8c1f33bc3a77fb82e69f1e758eb041d1628743f81020000006371e4d4d9f01777af0effed9bcf35b4588bd3265a879d43211f955062a24fca78990814000000188b6f2cda9a0408fff8e38130b0f764d2e2cfb116a74db44913284cf449192f17810200000063f17b372f4bc283e26884f873acc569136dc20385f46a0e636bd73cd27c5985c947a0000000c068debff841121cfceeb797669541b116a74db4c973c843971028000000309267b61e0d9f7f7843f8ed9b9e4f82837b97efcea684e4e7589bf6c0faac32719c94b1620205000000ca2cd972a47e8e84d83e724b7ac8436c7f79f7eaa4e5b7976d3b9edd6be208142a2650000000a0e8579b8f847ff8d1609070e5adcbc35dcfed0c074fbe97840c9fb86b557d5afc39d63ac104070af13087fcdc08e9cf65e74e186c4eca080000407758fcf2e1f0d907fbeb61c1476e591eee7c6647d877e24c36c7a0ddc7df4d5a273142a1620205000080deb670e3a1f099fbd7d7838478c586db9fde1ef6bc713a9b63721028544ca0000000d09b7e3e70305c77dfba7a90f03bdf5e1a6e5db23deceab0910763d511873c941fde50d61cf2000000c0e471f1830fc2e3eb0f84a9f3d7d68384dfbae9f9f09da7b6851d47dfc9e69a9c3a6b84c2ea9b92e0203da7424152ef8e4b4a0a14000000badff90b17c38275fbc3dfcc5b530f127ea3d666f7bd16b61d99dc4142ae830285c3e1e14f7d287ce89be563100e3f724df8d0a71eaecd35b90914000000bad77be72f8647d6ec0b9fbaf7a57a9010cf9170f3afb685ad87decee6ea0e1d1428a4873fdcb43abbd92c19a5e090070000003acfbbe72e841fafde17aeb9673048f8e33b5e4c2eff38d94eb638561d374261c8e10e9955dffc90110a0000007494b7df7b3f3cb86a6ff8f339abeb41c25fdcbd3adcbf624f78e39d73d95cdda923cfa1d03c4a2139dcc13914000018a713ef9e0bcbb71f4f5afc19e0529d3c7d3e090d3ef18355f520e16fe7af4dce9bf0def90bd95cddadb3028544c9951fba6064424ea0000050adf8cd61fec77ede620d603cde78f75c98ffc2ebe1cfbebfb2be4f99fed04058fc72b7f45ac7ae030385ee26500000a8ce2f361caaffc17ffdc31b9396df8ed300c6eae0c9f7c2bdcb7687abef5c51df8f7c71c1a6b0f4b563d91cbda7b34728642313e2f913863bb7c26423500000a8ce5fdd9b5eaeedf1fe035925243fc75a3c71da3b67df0f172e7e904d01182a5ee2f1b65f6f0f57dcbabc1e247ced17af84b5af9fc8e6e85d1d780e85f45c098d97894c43866e0815040a0000ed114f8cf6abcd47c2ed4f6f0f373ebe397ce6fef5c91ffef1726dcd622def18c43665f6d270e5775f081ffbde8af09777af0e53e7af0d9f7db03ffcc7cfb784bb97ee0a0b371e0aebf79c0c474e9dcd960074bbfedaeffcac855bc36f64fb89dffcd6f3e1a6bed7c22b5d76e9c74bd1418142e3551e1a0385fcc48c2e1b0900c0a0570fbf1de6bff87ad2f92f060479cb3b02afd5e6cbc59f632d760efef096e5e1b76e7abee13ea3b5183e5c73cfeaf0cf8f6e0cb73cb52d3cfcd2beb07cdbf1b0f3d8bbe1ecfb17b3470126ab65b5dfe77ffdd9a686dff9efd47ed7e348051a7550a0908e42c8aff0d01c28a4a317040a0000bd6ee5ce37c2ed4fefa81fce90b7dff9f6d2f085473626675defdb7438acdb7332fce72f5f4da6c5c31b7e3e703069f935e2efa82d2377fec2c570eaccf96404c2eb6f9c0e5b0fbd1d06f69e4c463ccc5bbe3b19defc77f7af0fffe3f6171b1eb3ac5d3bf7a5e4719fac3dd6ae63ef668f0074ba7852c57872c5fc77f9f76f5e16bebb647b1216526ed28c5088e7516808182629810200c0f83cbbf5581218143bef7ffbc375c9b1cd2b76bc91cdd5280605fff4930d0df7892dd6e2b4f178f7ecfbc9c888a75f391aee5bb1277c63d1d6f0f73fea6f38515bb17de496e5e1f30f6f484ee6b66ae79bc9fd81ce70fadc85f0e8dafdc9614ef9ef6c1cb91403c7182e32b249710e85f47087c1d10b9399400100a0354f6d3e12feb1f0ade10d8fbe9c5ca161df9b67b23946f7e48683e16b4fbe92b4f873bbc4b060f5ae37c37fbdf07af8e74736868f7ef785faf32e36a31860621d7dfb6c72e9c74ffe6055fdf732febe7effd99d2ded5b7a5d67050a89c2551eea2d0d19ba81400100606ce28910a73d909e5831b618242cdf7e3c9b3a79ec7df37458bce970b8f957db1abe052db6d891f9ea93af24876a1c7eebbdec9ec0e5b6fbf8bbe17bcfee087f74db60d8170f659af3fcaee4b290b4a6030385ee2650000018d9c20d87c2a77fb8aefec7fe640d1286f3fec50f92f333fc68d5def06f8f6d0e577f6fe8a112d7ddb72edcf5dccef0c2f637924b5b029766f3c1536176df6bc9b956f2dfb33ffddeca3077d96e576fb90402858a09140000cac5ab2f7ce5f1cdf53ff6bb2d4818491c62fdd3b5fbc3bfd45e73f35527aebc75797219cc787884d10bd09a35bb4f24a37f8abf53ffe7be75c9ef5bbcd42c97a6634fcad8ad040a000043ddf7e29ef007df5996fcb11f0f0b58fadab16c4aefb970f183f0d2ee37c31dcfec08ff6b6e7a458abcfdf64dcf27e7668897aa74ee0518def3b57dc8fffde9cb0dbf3ff15290cfbddabbfb9676e8a040a1f1b291dd4aa0000030285e9de1b30ff6d7ffe08fc3fccf9cbf904d258a679a7f6cfd81f0e5c736d74397bcfd7d6dddc513cb6d3a702a9b1b7a5bbcf4e33f144ee27ac5adcbc3779edae677a44d3aeb9087e42a0f378555d9cd6e2450000008e1f83be7c22d4bb6d5ffe8ffdc8ffa93a1c98c2c862d2f6c3f9e5cd2aef9048f7f3d6f4d32aa215e9af2e2071f64f780ee77ecedb3e1c7abf786bf2dfc4ec42ba9c4cbba1e3ee530a176eab8110a8d5777686e933f6c10280000bd2e5ec9e09373d24bb5c513a4fdf0c5d7b329b46adb917792c31fae7f7863bd2315db9f7d7f65f8e62f5f0dbfde7234bc75e67c36377497817d2793aba7142fcf3ae3271bc2a2970f25870ed17e4eca5831810200d0cbe219d5f33ffce34917371b867cd9bc7efc74f22ded3ffe7870b8776c71c8773c5ce2f1fe0361ff09d7d767723b7fe162f8e5cb871b42b47828500cd0d6be6e9453d53a2450484fc8f8a16f368d3fd8ff70b8e643dd75a246810200d08b4ebc7b2efcc7135bea1d800757eecda6d00e3b8ebe13ee5fb1a7e1fc14798b27755cb06ebf6bee33a9ec3e7e3a0924ffe2eed5f56d391ee613b773dbf2c4e98040213bd4e1530f87f2d860b4e9938b400100e8351bf6bd553fdeffe377ad0c4b5feb8d4b41768aad87de0efff5c2ebc9a5f2f28e586cf18a115f5cf07278a2ff6038ea3afc74a817b7bf915cf6b17839d52ffd6c5378fa95a3d91c4ca4090f14567d732c61411a2a74c34805810200d04b166e3c143e724b7a6582cf3fbc211996cfc4898798dcbb6c77b8ae295cf8dd9b97867f7b6c73f8c58643e18d77cf6573c3c4d8f3c6e9e452b2c5138f5e7de78ae464a4af1c7a3b9b8b4e30c181427aa8c3588282c38f5cd315a314040a0040aff8c1733beb9d81784507171ee82cc3850b1fb96579f8f727b684c59b0e3ba1239589572689a30ebef2f8e6f09bdf1a1c8d10af00f3b37507c2a9f7decfe6a4934c70a0908e3cb869757673245d724949810200d0ed8ebe7d36f9b63b7606e230e578bc3e9d6db870219e3d3f0e378f57e6102ed00ef1909c1f3cbfb3e1dc0857deba3cdcd4f79a932c4e021d11288c798482400100a0a3c5cb18fed5bd6b924ec1ff9afb527869f79bd914260be102ed164fa2f8d3b5fbc3171e69bcdce9dfddbf3eb90ceab1b79dd363b2e88c7328345fdda1c4d8ceb5d0f9040a0040b78a1dd178d2c5d831f8d79f6d0a874f39f3fa64b7a9f69edeb37457c3b1ecb1091768550c097e3e70307c71c1a6e484a0f9b6f4fbdf5916beb1686b58b9f38d6c4e2693090f14f24b438e78d8c358e69924040a004037eadf7bb2de41f8cf5fbe9a55e92603b5f7f8aee77686bf9a978e40c99b7081e19c3c7d3efcf2e5c3e1c6c73727c14171bb99f1e30de1e135fbc2a1b7048f93d9c4070a51727e84f2431fd2431d3ae10a0f8742dfcce961faf4d86685befce91cee0bb3925aadcd1bc88ac313280000dd66f5ae37eb9d843b9ed99155e966eb5e3f11eeacbdd7d7def3524327f1caefbe106e7c624b72b588232e45d9934e9fbb10966c3912bef6e42bc9f650dc3e3ef3c0fa70df8a3d61fbd177b2b999ec3a235048a4577c88e141431bc3e1109518981b662d3e54ff390d0f62c830182e0ccc9b1ee68e9229081400806e12bf95ce3b0bf1b87b7a4f0c94befbebede1cfe70c9e542fb629b397861b1e7d393cba767f721940bad7f90b17c373af1e4b46275d75c78b0ddbc1dffcd7da70f7d25dc9e133749f0e0a1426917aa03010e6ceec0b59ccd0183ad46cddba7548bbfffefbc3d34f3f1d4e9d3a95b4a2bca6ae1ea9a7d453ea29f5947a4a3d3591f5ef3ffd6abdd390870923cdafdefdf5e737ef0fdf7f7667f8dfb54e64b15319dbf48706c2032bf684570fbf3dea72d42747fdd71bf7856ffc6273f8d89d8d21c2277fb032dcbc784b58f6ca816cced470cb514fb55aef04028596e4873de4a31286060ac5c31eeebcf3ce21edab5ffd6a58b97265d8be7d7bd28af29aba7aa49e524fa9a7d453ea29f5d444d56f5bd85fef3c1447260c37bf7aaa97eaaf1c3c156efdc5fa70ddbc150d9dcdd83e75f78be15b4fac0b0b576ecee64e952d27524f4d747df5c657c3e2970f87598bb6d64fc09ab78f7d6f4598ddf75a7871fb1ba32e47fdf2d43b8140615c62b030370c8c3242a18c431e0080c92e5eee2def44fcf0c5d7b32a0c6fef9ba7c3cfd61d48aefef191a693f35d3bf7a5e490891777bc11debff841760f3ac5cbfbdf4a7ecfe349148bef5b6cf1849c5fffc52be199578e86b3ef5fccee412f11288cd1a1c5b30a61c140983b3d060acea10000f49627371cac77267ef2d2beac0a6377e2f4f9e4a47df1dbecbfbca7f1bc0b7ffafd95c971f8bfae75504fbdf77e760faa74e2dd73c9fa8fef431c75507c7f62fbf40fd725275f5db6ed7878db7bd4f3040a6356bcca43213870950700a0473cb5f948bd53f1d8fac663a361bce2c9faee5fb1275cfff0c6f03bdf5e5adfc63e72cbf230e3271b9213faadd8f1463877c137e0edf2caa1b7c3fc175e0fd31e585f5fff79cb2f0bfa44ffc1f0ba936bd244a0503181020030192d7ded58bd8311af2b0fedf0c63be7861dbd10af1af1d907fbc33d4b7785757b4e1a627f09b61f7927fc7ce0601214fcf7db1a2fed18db75f7ad4bce8d12d7f3078e42610402858a09140080c9265e1630ef683cb3f5685685f61b6ef442defe7ade9a7053df6b61e1c64361f771df9e97397ceabde4f7f67bcfec089ffb517ff8dd92f5988f428897813df6f6d9ec9e303a8142c5040a00c06432b0f764bdd311cfde0e13e5c2c50fc2ca9d6f843b9ede517a59cad8fef096e5e1f30f6f087397ed4e0e933875e67c76efde70fadc85b066f78970df8a3de18b0b3685abee68bc9c63defee8b617c23f3fb2311985b0f940e75d8a90c943a0503181020030596c3978aade0159f7fa89ac0a9d219e53210ec98f2318feef4f5f4e3ac9c54e73defee2eed5c99508e25526e2361d3bdd975b1cc513bfe1ff3ff7af4ffe8db7dbedf83b67c3a6036f25e73399b5706bb8f69e974a5f7f1c91f0f70ff627414c3cd9e2819367b225c0a51328544ca000004c063b8ebe53ef903c5deb84c064b0efc49964d8fecdbfda36ec2886d8e2d50bfee9271bc2ad4bb6251df2184cbcf1eeb96c29adf9f1ea7da58f11ebe3154763ecafbd9618e42dda7828cc5bbe3b7c63d1d6f08f3f1e089f9cb32afcf6ece74b1f33b6f8ba6f5afc5a724596edb5df6368278142c5040a0040a7dbf7e6997ae7e4d135fbb32a4c3ecda318e26885dfba69f8cef895df7d217ce681f5c925131f5abd37bcb8e38de43c0e31603b50ebe0c7d0218e70c84f54f8faf1d3f5fbc64e7f1c0111ffcd6b71faf9da733879fa7c323260db917742ffde93e185edc793aba63cbefe407870d5de70d7733bc37ffc7c4bf2d857df39f4528d652d3ed7bff9afb5e1ffd5eef7f09a7d61e3feb7922002aa2450a898400100e864474e9dad77587ef0fcceac0adde5d05bef25dffe3f397030fca0d699bff1892de1d33f5c979c9cb0d8691fa9fddecd4bc3ef7f6759f2f3cc855bb325a7e2ed58ffed11c28bd1da9fdcb922fcddfdebc3bfd79edbf79fdd991cb211cf63b2e3e8bbe1dd361cb601e32150a898400100e854f15bd4bc33336b516307097ac5dbefbd1fb61e7a3bb932c2032bf7843b9ed9918c58f8b7c73625871c4c9dbf367ce207ab921102bff1adf4f765cef3bbb27ba7e2edfc7729860a31a8f8f85d2bc35fddbb264c7b607df8c2231bc38d8f6f0edfac2df7f6a7b72727478c57aa58fbfa89e45087f78d3460921028544ca0000074a2388c3bef00c5ce0e30ba65db8e27bf337f79cfea7032bba244fc37de8e759759a5db09142a265000003a4d3cee3a0f13e231d9c0d84d7f6820f9ddb9e2d6e5c9d514e2bff176ac43b71328544ca00000749a3c4c88d7ac075a130f15facae39bebbf47b1c5dbb10edd4ea05031810200d049fef8f617eb9d2060fc0e9e7c2f6cd8f756f22ff40a8142c5040a0040a7f8eb796bea61c2bb67dfcfaa00303602858a091400804ef0f99f6ca88709bb8ebd9b550160ec040a151328000013edebbf78a51e26acdaf966560580d608142a2650000026d29dcfeca887094f0e1cccaa00d03a8142c5040a00c0447968f5de7a9870efb2dd591500c647a050318102003011fa361dae8709fff9cb57b32a008c9f40a162020500a06a2fed7e33fcdecd4b9330e1f30f6fc8aa007069040a151328000055da71f49df0f1bb562661c2b5735fcaaa0070e9040a1513280000553971fa7cf8bbfbd72761c2476e599e5501e0f21028544ca0000054e54b0b36d5cf9b0000979b40a162020500a00ab3fb5eab8709074e9cc9aa0070f908142a26500000da2d5e12320f13e2091901a01d040a1513280000edf4d8fa03f530e189fe835915002e3f8142c5040a0040bb3cffdab17a98f0fd6777665500680f8142c5040a00403bbcbcffadf047b7bd9084095f797c73560580f61128544ca000005c6e074fbe173e75ef9a244c98f6c0faac0a00ed2550a898400100b89ccebe7f31ccf8f186244cb8e69e97b22a00b49f40a162020500e072faea93af2461c21fdffe625601806a08142a265000002e973b9ed9918409bf7dd3f3e1c08933591500aa2150a898400100b81c1e5ab5370913627b69f79b591500aa2350a898400100b8547d9b0ed7c38427fa0f665500a89640a162020500e052acd97da21e26dcbb6c77560580ea09142a26500000c66bd7b177c31f7c67591226dcf2d4b6ac0a001343a05031810200301e6f9d391f3e3967551226c42b3b00c0441328544ca000008cc7671fec4fc2842f3cb231ab00c0c41228544ca00000b4ea2b8f6f4ec284ebee5b97550060e209142a265000005a71cb926d4998f0e77356870327ce645500987802858a09140080b1baefc53d4998f0d1efbe1036ec3b995501a03308145a75b82fcc9ad9170e6537c3c0dc307dfaf47a9b3b90d58721500000c662e186434998f01bb5b66cdbf1ac0a009d43a0d08a3c3c28040a8716cf0ab316d7e3855109140080d1acd8f1461226c4b670e3d8ffce00802a0914c6ec50e85b3c306484c2c0bcc1d109c5a0213a72e4c890f6e8a38f86a79e7a2abcf7de7b492bca6beaea917a4a3da59e524fa9a7bab5be79df9bf530e1c7abf766d5897b3eea29f5947a4a3da59e9aa87a271028b4aa21503814fa66ce0a7d87931b43462b7cfdeb5f1fd2bef4a52f85975e7a296cd9b2256945794d5d3d524fa9a7d453ea29f55437d64f9d395f0f13bef1b397b26aaa6cfe483da59e524fa9a7d453dd5aef04028556359f43a1281e12316fe4932838e40100184e1e267cbbefb5ac02009d4ba0d0aa86406120cc9d3eb7f6ff543cfcc149190180f1b8ea8e179330e1c62736671500e86c0285568d74958751462744020500a0d9a77fb82e09133ef3c0faf0def90b5915003a9b40a162020500a0e85f7fb6290913aeb875793872ea6c560580ce2750a898400100c8ddba645bfdbc09db8fbc93550160721028544ca00000443f5ab5b71e26ac7bfd44560580c943a05031810200f0d49623f530e1579b8f645500985c040a15132800406febdf7bb21e26cc797e57560580c947a05031810200f4aeed47dfa987095f5cb029ab02c0e42450a8984001007a53bc82431e26c4cb4302c0642750a8984001007acfe97317ea61c2d4f96bb32a004c6e02858a091400a0f7e461c2b5735fca2a0030f909142a26500080def207df59968409fff307abb20a0074078142c5040a00d03b3ef6bd154998f02777aec82a00d03d040a15132800406ff8ab7bd72461c247bffb42560180ee2250a898400100badfdf3fd89f8409bf77f3b2ac0200dd47a0503181020074b7cffd280d137ef35bcf671500e84e02858a091400a07be561426c173ff820ab0240771228544ca00000dda918269c3e7721ab0240f71228544ca00000dda718269c78f75c560580ee2650a898400100ba4b314c38f4d67b591500ba9f40a162020500e81ec53061f7f177b32a00f4068142c5040a00d01da63db0be1e266c3df476560580de2150a89840010026bf4fdcb5aa1e260cec3b995501a0b708142a26500080c96bff8933e14fee5c510f135e3d6c640200bd4ba050318102004c4e2b77be11aefcee0b4990104385636f9fcda600406f1228544ca0000093cff3af1d0bbf77f3b2244cf8bbfbd7878b1f7c904d0180de2550a898400100269727fa0f86dffcd6f34998f0ef4f6cc9aa008040a162020500983cee787a47fd7c09773db733ab02009140a162020500e87cf1e48b373cfa721224fcfecdcbc2930307b32900404ea0503181020074b6153bde087f3e67751226fccd7fad0dfd7b5d161200ca08142a26500080cef59397f6d50f71f8cae39bc3f177ce655300806602858a091400a0f39cbb7031ccee7bad1e26dcbd7457360500188e40a162020500e82cdb8ebc13a63f3490040957dcba3cfcf2e5c3d91400602402858a091400a0733cba767fb8f2d6e54998f0e91fae0b2fef7f2b9b02008c46a050318102004cbc5dc7df0d5f7e6c73fd1087590bb786b7ce9ccfa60200632150a89840010026d6e3fd07c21fdffe6212247c72ceaab0d8210e00302e02858a0914006062ec3b7126fcbf9f6fa98f4af8d6e257c3d1b7cf665301805609142a26500080ea2ddc7828fce9f7562641c2b5735f0abfde72249b02008c9740a162020500a8ceaf5f391aae7f78637d54c2779eda164e9c76ae0400b81c040a15132800407b5db8f841f8f9c0c1f09907d6d78384a9f3d786e75f3d96cd01005c0e02858a091400a03d4ebdf77ef8f1ea7de153f7aea907099fb97f7df8c58643d91c00c0e52450a8d09add27c2bfce5f92b4f8335c4ef172678faf3f10ee7a6e67f2afcb9f71b9c5fdd6bce5bb93661fc6e57629fbb097f7bf15ee5db63bfcd9f7d37324c4f60f0f0d84be4daede0000ed2450b85487fbc2ace9d3c3f4d8e60d64c5a1beb1686bfd8f9cbcc51a5c0e2b77be11fef096e50ddb57bc1deb7039d887d14ee3d987ad7bfd44123e144723c476fdc31bc2335b8f66730100ed2450b8248742dfcc59a12ffb026460def430b7245398ffe2ebc91f39577ef785f0fd6777262dfe1c6b711a5c8ab7df7b3f5c796bfa87f80d3f7d39dcbf624ff26fb2cdd5ea713a5c0afb30da692cfbb077cfbe1f761d7b373cbbf55898b9706bf868b6fde5ed63df5b91d4976d3b9e2d1500a88240e1920c84b933fb42fdc8cc81b961d6e2c1e334cf9f3f9fb4f8874efc8367f5ae37b32921f939d63e72cbb270f7f33b346ddced5f1edd906c4b5f786463b675a5e2ed588fd3cbeea769636df937c7f6615a3bda68fbb0dffdf6d2e4dfe6f6a97b5f0a773dbb3dacdc7e349c3d7baefe991bdbb973e7ea4d5d5d5d5d5dbd9bea9d46a0704986060ac5c31eaebffefaf04f5ff8e7e40f9f3ff8ceb2ac3ae8f76bb5e63f90346dbc2d1e3f5c146f97cda769e36965fbb0582b9b57d3c6d346da874d99fd5cb8fab6a5e1afe72c0b7ff9e53bc367ffe5c6e43376cd9a35f5166fe74d5d7db8fa8c19339236d6f9d5d5d5d53badde6927f817285c92914728e43ef18355c91f444b5f1bbc5c55fc39d6e270cef84793a68db77d69c1a6645bfac71f371e6f136fc77a9c5e763f4d1b6bcb8797db8769ed68a3edc316acdb9f55e0d2b9da16ed16cfab06edd289fb3081c22519db39141e5ab537f9a3e877bebd34ccee7b2d69f1e7588bd3e052bc77fe42b8facef4b09acffda83f39be3dfe1b6fc77a9c0e97c23e8c76b20fa34a0205da4da0403b0914bad118aff270eb926dc91f47c5166b7039f4ef3d19fef47b83974b8b2dde8e75b81cecc36827fb30aa2250a0dd040ab49340a1c7bd72f054f8eafd4f252dfe0c97d3f90b17c3922d47c2fffcd73b927fe36db89cecc36827fb30aa2050a0dd040ab49340011f64b49d0f32dac93e8c76b30fa39decc36837fb30daa913f76102858a2d59b22469d02eb62fdac93e8c76b37dd14ef661b49bed8b76eac47d98400100000068994001000000689940615ce2e522b32b3be46d665fad7a2906c2dcfaf2e6d66e15355e9e921e13af2432c21544c664a4ab91c46997bcfd32990dccbbf4fd4bbc6c6ebaff2a2c6b606e56ab35db58ef6adb3eacf859ec33b297b56d1f968bfb32fbb0de55c93eacd66c633dab6dfbb0e276d7c6ed4ba0302e7107d0d8e93fb478d688978d1c4dbcffdceceef1e7598bf3b73c0f1afcb1d4b32ef983ac31908a3b9c7c5bab77f87c88f5b44bfe208bdb51be8dc6ed35d99ee2be6b703fd9b85fa3a7b46b1f56dbeeeadb54711ba4e7b4671f96c9ff20f739d9bbdaf67758e3e724bdab3dfbb0c6fe6ab1af79b90914c66568a0d0b053886f6a9e06d57740f13e596d9470a0f887f7a1c57db56536ee88e831850fb2b86dd4b7adc2f636abb67de4f5a19db6dab659fc4328ce9fcc53dbae16d796d0fcc7133d67f0832c0f308bdb52baff9955df7f0dfde3a7f143aa6cff5853dfeee8396ddb8715d46a0285ded5be7d587adfbe019f933dad5dfbb0b8dcfab20a5ff6d073dab20f4bb6dbbedacfd9fddab80f13288c4bf1c32697d7e28630382dbec17163487640f91f3bc3fee1936f4465cb1628f4acfa07d9a1303030b82b287e4b57df49c47987ec30867e90356c7fa5f7a197d43fc806e21e2c53df2ee2fe67f00f9d86112e99a11f644dfbabe2364aef69eb3e2cdd3e8de2eb6dedda87d5e7f539d9dbdab50f6bd89735f61fe82d6dd9876daeddbff0d998f749db41a0302ef18d6afea5cf7604f1cdcf52a57aabed2c1adfe8d134ed78f20dc31f4bbda9fe4196fd5cd8b6f20fb2c11d44f3b6130dfd206bd8a1947ef8d14b0693f1f87361df55ff206b0c4947ff206b9cbf21c0a2f7b47b1f9628fb5ca657b4671f56dbee0adb6ad2eccb7a5365fb307febf7aab6ecc38adb6d54dbeedab50f13288c4be31b1b0dfed11c3f801aa745717a7de711dfe0a69d4d43da3464ba9d4ccf296e03f51d40e307527d9b19f583ac71fb69d8d6a292ed91ee37b81d0c6e1f0d1f48f5eda2717f57f641d6f02155d89ee2630cfda3899e50c13eace17335decfb77b3da58a7d585d598dee56f53ecc36d673dabf0f1bbaddb5eb6f3281c2b8c437a8901ec596bf89517c530bd3d237af789fc1377750fc6368b8e98d1b04bd21fee2376e0f8ddbdddc79d907d8a81f643571e7926f5fc56d35f221d69bcab689e2beabf6e13537f9008bdbdd281f643543b6d7e2f2b3d6ae0f323a53fbf7614dcb2bd92ee962edde8715f99cec49d5eec34ab63bba5b15fbb0e263b4711f2650000000005a2650000000005a2650000000005a2650000000005a2650000000005a2650000000005a2650000000005a2650000000005a2650000000005a2650000000005a2650000000005a2650000000005a2650000000005a2650000000005a2650000000005a2650000000005a2650000000005a2650000000005a2650000000005a2650000000005a2650000000005a265000800ef3dfbef9dcb81a004095040a00d061cac282b13400802a091400a0c39485056369c33b14167dfd73e1637f93b77bc2c66ccaa538bce4ebe1635f5f1c0ed77ede78dfe7c217971c4aeac59f0180ee255000800e5316168ca595cbc284fbfab3db359beeb92ca142315028122800406f1028004087290b0bc6d24a0d131e0c76fad3c0e18b5fff7a327ae1ee4d716ae38886b496499617eb5f0f77df37748442123264f74b967f6c71f862763bde67d1b1743100c0e4275000800e5316168ca595891dfd86d109430c1dc1d0709f2440c882802c1c68081d463ce4219da71e48c4658df85c0080c944a000001da62c2c184b2b53ece897cb4628d4e7e90f77d74383a8100ac440a0788843e1f698020500a0ab081400a0c394850563696562e77e2c2314063bfd69a0901fb6503c7c61c83913460d14a2e2f22ecfc9200180ce205000800e5316168ca5954a0e5918da918fe140f9288218000c73ae839647283469be3f0030a9091400a0c39485056369e5d2c0a06194421232e4a1c1d0c3121a4635349c37a1783844b6dc110385a670223eae73280040d71028004087290b0bc6d2869775feeb871e1447200c0d149ae76f186d90841169fdee258bc3174b0285fc4a0fc9edc2fc0e790080ee225000800e5316168ca501005449a000001da62c2c184b0300a8924001003a4c59583096060050258102000000d0328102000000d0328102000000d0328102000000d0a210fe7f5cadfdf87195531c0000000049454e44ae426082, '????\0JFIF\0\0H\0H\0\0??\0C\0\n\n\n		\n\Z%\Z# , #&\')*)-0-(0%()(??\0C\n\n\n\n(\Z\Z((((((((((((((((((((((((((((((((((((((((((((((((((??\0\0?\0?\"\0??\0\0\0\0\0\0\0\0\0\0\0\0\0\0??\0\0\0\0\0\0\0\0\0\0\0\0\0\0??\0\0\0\0??͂?4!?W?]?*???E!?_t?Swu??3[z=?fj}B?[?|?U??????n?qv???]??0?QS????)V?N?:??/;7+?FgbͲ?XM?6?k߇t\'7;???\n??(???}?aGb??3???=???3?? ????W??+>????as??u?:?c?`lc???m???[h???N!xj??GY??!?^i?cF̺?X޵7?8*h-?u?Y|Ƣ????S0???O???I?6?3???~Fˠz!e?3<0|???V????b?;?Y?ӯ>?\\T등???ʨ?$Q\n=&??5y?$??˒??e??V??\'??мY???Y?fe?3?N6????s?4?=??\"?N??F?lx?:??H?u?YVٰ?y?=?|WMu??2?Dx?i?2sX+?Qoҥn??<?y?6t\\???Bջ??Ia?v?=?X???NeMk?f?Ȏ?a?.!?xƕ??ޮY\Z?j?wT4\"l?i??,x?H???O?\\?5??@??nr?????g?t?͉\r?jl?n???t?9L?v???????a?⵨h?L?¹y??r?\n??/P??vQ?Q0??/%???X???KR??vu?c$?????UYG??<??F?o??V?? U??Scqn:[??EƬ?5%???ES???_D|??lc?ui?v?ιJ??\'Z?z?\raT??=?ҷ?tyi:8?*?A?j6f?????2?s˫zST?\ZjY2G?@?$j#??E?2????7??R??Ť,?m??1[?EV#?$?UG??;Mv?Ap?e?0???d?N?վ7Uga?=???0??w?uc@?U?9?۫??5???T%???4??:6?????9??ԋ\'?A4???????Y;u#m??eӴd?Х̧F5?\n&?+?#?ѭ??y\0\r??}5TB???R??CȞQ|?\0l??T??\'\r?????[$?D?)(?4V?u`??F?YR??ݔ????D}\rN5_BT?-?P??z?>.;??Ux?4??\0+\0\0\0\0\0\0\0!\"1 #2A5$4B??\0\0?ʀvuz?|Y%?\n??K???E?6B???K??0g?6?\r״?w??????E?&?BKl(?Ȋ\"??.4??C??k???ڕ?o??f?==}?h(??Q=?X\'???[2?e?????ѕ\r?i?i??l????W???ϩtơ?????]????Uh??%?XКv^???????ȔFM???:|@??3ʕ<~??d?F?~+?}S8$ȗ]!?c}?V΁?Ej????$??8?5??G+Tpה????fL???????t?|???5g]E\0?ن\n?d??9???pi\ZP??I??JŖ????r$#l˘???EM???{?$0?S??hZJF???/?s?\0?V?P??]\r???d??\Z??EB??+4?]\'Ms&?d?H?v?Y.?M!??????B?	??C?y/F6??\0?I,X??\nfN\"Өi??%Ȕɪ???p?R%?ϙ?g?\0?jF?Bg$h1L2@?ECXV???>?l?0X??eQ????ebL9???S!du*\nX??U6???H? ?si,????=S?\0???*y?Ξo%?zU?>???????ξ?{??ƀK?5?N?ɸ???I?P??4?b?ERX????H/??#??P5??Э?bc???;??grM?LPG\"՝?R??~**?|?[?h?\neX?u[?F???r/#?_?![?},\'rh?{T?b?e?6?%??\\?????Q??G??i??\n?=%n6*V??#??O`????R{Ƣ;qE???%?ۭ\'?_{@8?D\"^\0m\Z,C?I,Q??g?]\\q???[Sk?\'3k?F??M?eJ9&?ݢ7??m9z?k_N???gz??l?2?0?!h.?8????????:?Gw???;SNښz??B52?4`EȖ?????o?߳y?????????<??u	G?I,[?!\r6Oc?rC(?]??zU??Z?:ʐm??:?~@}8\\???#??E?HK??K.\'?,?1?B?/Z???`?D|Y,j`Y??A??\\?z3?$E?r+??????l????bTGb?϶?\n9?F?U#??-??=?d\n?5?)\n????Jw?ԉ@???sY!-I??EuOꥶEQV5??rK+P?U?N???5?I\0l??????VURt?^DvSUΟhc???7????/??%u,[???????S?q?IL\\?W?\nƇ?o?H???9?%&J?u?8?k-?m??$H?:x?X???}?O?v??/??W??\"qJ)R?D?pSm??vSk4%Q&]<?I(gz?*?mA????,??I=?7%????M???25ꦻ?-?7ա+? 8?M???bb?l?⎍???d?V????Bm?̲?U#?33vR?????̓k??e9?2=<??.?pG??*?8??????u?rK?d??U??̏*e?+^??qQ?U?;?j\r?<???8F|Q]i?gE,???bƒ???úZۄ:??????eZ?<??\0?rҗ?\\ܒ?aBӎ?&2\n6/a?\"u???޲?Ŵf88?j?P@?&?X?D?\\??ŪZ?\"N?t֦I?j??_?f(?Ӽ???X8???vh?_?}R-eYޔ?F????sm?#?k:6\n B???h?s?[?T5???<?? G?l?G0????? Y:?\0?\"??+?v??!*??*?^?J????zm?HХ??1i; ???#?Ø?ԇ,?	?x??25WQFXdP????S$tW?OU?o??Z????p\\k?Yi????\'?dŶnHO?RO????U?>?	<2M?Zzy?5?ՆIǝo??]q?늽R?I?4%V???auy??3y?<?q?\n_T?r0W\Z?&?8?A&?!D?	?0>%?:????$1???F??m???\0%\0\0\0\0\0\0\0\0\0!1 \"2AQ#??\0????`??\Z?v????DB???V?D???S?S??;G?Q*T?H???RQ?嘭?ͩC=>?T?hj~,??,??????ќټ?5?1???,z??3?6&?8T_?y%!Z?1S${ѐ4\Z?%???t?82>LRz?\Z*|cd4`???ɬ?Z?E???\0?y+?b??%?.p?R?3?K???㬭????Q?Y^Q?]??\'?`?c/??\0??%?ML~??a?6m?ɜ??$Ap??h?IK?%,???\'???*??I{?	??B?G????X????}?(????]?.???g?i<t?\0D?\"S?5?ʪY????j?c????\0$\0\0\0\0\0\0\0\0\0! 1A\"2Q0a??\0?????r,???4_????:?????%%ػ?\'/H?D?Q??uh??+?,???jѵ?XJ????{*?%Q?ǧm????$?1>ɒ?bx݋!??<Ye??b$??is,K?S7?٤???=?hK??j??ȣh??[?mJ?v?2??iq?????ь???-m????dĈh?4?\\?1?t	i5?0?????Ӥxݐ#????v?HՓ???J????8???????$?;[?\Z???4?H?~\r?S#:???pjj??Ye???\08\0\0\0\0\0\0\0!1\"AQ a2q#0B??R???br??3c?????\0\0???$?>?,?AQ?@!???=\ZB?????E?$dfQs????s賵??nn???jNs??ꩅ??3?d9??tf??HI?e????j?T̬afJ??9?l?y?e\n/?я?o?F4?-??5vV???????=Qa?g??E??I?-???^.?Up?}?k\r7w8?]???6?W?t???|?ʡ?<???]??	??d?{????C^??c???ɰ	????t?????̝??U?WF+?V?!?]?-?(yUt?-@??!q;???۪??C?C\Z*?UU?&?ZW???Kɛ?\"ay??\r?9?U,?q@l?+???V?????B++?UY??2Uª???w?}׻q???D??????ڋR?TL?!xguEL)?<+?????$;??`??z \nO???????}?,??bf?|)?QT@??5L*??hcﲎ??TF?????5U5????Ԫ?Mhx*??tW???+n??O?3??\Z?&??5US?i^??Z?{?KE??N\n-u?Ԅ??zj???:-	?I???	6HJ??U????w?=b{<?????R?!???E??)d:L?h??~?2?C?Ûy?B?\r?X??q?UN???7\n?QV˶AW????=?p???????QO?,?>?n?i??E\'????B??\n#??Y?C??0?Z??\\?[???C7?????nB??? m*;?\Z?0©???m?j?\r???iĒ??6??=\r?g??j????U??07m(?v????48Q1?5??%?ֲt3??Ж%???cU\"?7ب??Ǣ??TXN?y?b?[??\"????Ҩ???^??I???????8S?\r???!\Z!??H?naB?xE?S?(???Z??_	gG?#?쌾?,?	?0T???\n?%x`??c+\'u)?j?????j???w?-+U樆d??????\Z?75xr???!tF?0~??3T???O?dr4?s??????>?U?????~+,6???ӵ?۾?????3??D?̔?gXr??=??*3nS\Z緟EG?҈?.??ߢ??*[K???$J?+C@R?r?[s?2?L?[(?ϕ?/????!ޮRi?h???????۞Uk??F??Yd??e?i?\"#3?2\nn??.m?UP?3J[??e?Mi??->V???P???q???Mk[&?\"n???g]?9[???	`?7?? 4\\??\"肍???ss?v?է?iks ?7d!ð?Y[ss???f??rȨl??#?4c??j???v??F<?R?Ƒ??C5??˞F?R^G?r?T*$?T???b?M??鹩0???$??h̀??4?M????[???S/ka????\nӠO??rO????\ZR???}?\"8??i???!?v??-?>????\Z!ވ??D??2?&?\\꒯?(f?????RE\0S?7l9????ay????\"L~?[uK??na?????2#?W??)?ݩ?????ʜK/g?a$?<F?????B?b8@-??7+e??ѹ(?\Z?L?Q=~Hf?n mr??G???/Ὅ?????Tfg~\'	?????6kJ%??-Z??O???ǜ?p7?1 ?2?oY???vZ|/?9?????\0\'\0\0\0\0\0\0\0!1AQaq???????? ???\0\0?!?Q\\Y^^<?谘,??s?\Z*f;%C??\0??\r????CQaq@??.?0@C?fn?8??.d??x?e?P?W_??Jj,l?\"?}?ʍc??????M??1??`??w?F=	z??5??5M???ț?t??},<?f????=?ca[*?\0ߨ??r?o?L5ʬ??k?]q???,??M?qb??????\n^????w?(Z??_?өD?!D??a???8??]!??E?$???U?%b?d????2?TVW?V????8?qFH,???\\?!??\0D??!l??r?@??ҾY?E?w*?p}???x0??m\0??ǥ@凃X??}|???p>??R[??i?i????\0كסܠ????Ny??=?????܊??p??W?m?h???q?UAB??i% IXi{?{???M????\'yݤd\rx???]???V?um?<?????4F?39Z??\nq??۷?g?F:J׍j?h?ج9??do??֫?}??\Z???h[k??\\?u?????c?v?@??ܽ???̤b`d?Zs??\0??{????|??}?????x?D??sO?_l?[\'????p???\Zw????A?3?????\r??64?t??z?2???e?\0T?U??2U???Y???wĘ?=??B{?w\r<<??y??)z??-??\n@(6??sq?>q?y??jy??} c????o=R?????Dl%??Jl??????MPAǗ??21V?|z?P????^?.?}P???!????/?cX+?b??/?lB?Σ?Z??7??-1??\0???M?fp????G??jz???F],\Z?P???B}LLjJ,?F???Tws!??h[??q?M ?Q;??8E?Z?er?I????/7\Z??cA???U????\0ԍm?	???zpòјo??-?ڢý?}?p_???Q??Y+??\Z?F?LKs?>?3?Sp?Է(?Sn׉ns??G??#{\\0Z?c??&*bj?????yM(*%?^?n???-1O?\n??7y?0>P?ļ2\Z?1q<#???{<?ڛa?WB?U?(?K}??r?R????[?z˒?S\"???x: ?Mkl??S=n??_R??o??,???\r?d ?eO?Q]M???O????}:???b!m?x?#???\"?>? ????1Ek????\Zvg?KT?|??}?????q??????|??V<?u??c??#?O????_?8?Sר?G?J????P??%?/k??\'R5???л???.D]9?h???Gy?????`??????*?=	??p#6=??Z??e?N??:?o}?K3sC.????5??˒7?7?FY?P??\\?oP??J!????x????c~\\?ܱA??s??e1???T\'???H?O?=??fY??ט??!?1?p?U???{?5?\"C?\rÜ?????v@?~?j??h?aj?,?ۇZ??1#?Q?[?@0??Q???m?????^f\'%\\7w?????k?W??E)??0J??_N?>?e??0.z??i?6??C?/DWh???\'?8??=??IH_0?c?c?O??Tf????15? ???Ʈ?????ӎY???x??????\nD*????U?~???#?>\'?\'hxDp5?qr???A?f7?n?b.??#?J??&L?\Z;Ȃ%?E]`?%헅ڵ?m??	QYC?^%?D]\n?1???)??pl<?p0??+l??Xb?L???0*I?_?r?,?????!kz&3e=E??^???53????ئ k.?????DY,b~??[?l???W?X????5;=#???N?]?\0|`???iQ??E?L?,???wǫ?O?W??\\???c??-6O????Ne(?10??:?%????-?0?B?\\??????[T?????E<??p?-?c??%M??\0?????v`o/??? j?[???\0?f??\0???Y!`\Z?.4??Apa?a???.?Z\Z??xwԻi??m?\r??NF֮_???=?k???32__?\r??6???5=;???We6Pb??>??U??a?Q?L??2?9???|?\Z??\\_)ݭ^?n?h?~j1?K?b??\Z6ʵ??q镵Vn!??P:h?~????!??\\\"???6??y|???U?{????Т??W?\\u?a\ncLbc?K_?Ƶ?\r????OD????]CZ?Ly??৩?i?	??SP?5?\r?a???m?q?D`(b??ܞ??\0???????%?xڌ?u??Ii?o??-r????&^PL???0??Φ?v???? {S????ʨ?|???????Ġ??s~ ?????\0?g??!t/?#??fC?4Q???_?aʇ?$dh?9?~#@?v?Yl J?mp?H>܇?+?^?V?5x?\r??ocG??A?(o?#?VR??~?y?????=\n???!????|I????}??}\n???k2?Zl??????o藝U[_H;?????ݜ;?t??1?????-??????G?eu?Q????C?D???\0\0\0\0\0\0??Hi?My???\\?????????xW??\0?vk??0??C????Oq1?Љ??ΟO?Mn??\0:?2u{Í=?q??9??F??`????K?c????@EQ???!??????2?|?N?0I?H?Ic??&?lE?@0 C$????^&\n??o?2?ǽ?6+??\0 \0\0\0\0\0\0\0\0\0\0\0\0!1AQ aq????\0?,??f-?6%ZYL? d\"?(d?????I???+????Y	????99\Z??\n%?o?l%D??ǃʡ??5KĔ>ƌ]	x<??\Z?]1?&xr?/??khÚ6bz5????&?D ?`?\'??db??B\n?m?cA3CP????~?ў???q?e?????u?CX!?[l??	???Y48??T0?8?H?????Ѳ??HzE?\0?QtCi\'??[?i&???b%?^?^?}??cJ?B ?qe?辖???hx??u??p?A???Cy?sE.S\\H5`o?c??Nf?6??B{???\0\0\0\0\0\0\0\0\0\0!1A Qaq??\0?-EtT]	????\nim?]ؓ!?????v???\0!?%??1?B????\\\nd3a?P????p59?u?i?[{?5?Gq?l????kb??H^?Â?L???bE??/	*r\"??Zp???\r\\??-|-\Z?A?\\t%`Ɯ??\Z?????/qG??Z???o?Ԋ	?&?\n?B??i???Y?G??.????fԡIu҉?h8?? ???a(??\r ?A???(???\0(\0\0\0\0\0\0\0\0\0!1AQaq?? ???????0??\0\0?&?5E?\n$??c???-?X?tԔP??????7RC]n???5?#j?<P?????5??t?????Rj?\\??.?C??C?????/X;I&?<?.*???c?	?X*N??G?\n?T[A??#Y?o???P?\Z??֎???L?%????$?.?v??vh?+?O?\n???????p??X?G?`G???5$????E}??CBo`?X??\r@??Vc?v?O???b?^c???q$??;??\0w	.??x?8-}?????H\r$??v~@??c?iLW???B??7?ē>?^????p??.Z??e????L??=?s????1??L??u˛dz????S??B?9ȇ`??%˄x@XTuB?????7t?Z8\0?5;?I?h???m??????rI8?*???#$??????8CΫ??j?Ǻ+???&av#??a?	?J?̽????6،??1??0$?\0I??w?@?w^xp??_?Z???;???fEM??G??p??6???E?	\0??!??B?hrp?f\0v4U?T<N\Z\r?7?P???֫?????1???,/!k`[?м?FR????R????Y??!?{qp?e???1?6c\r?q?,ߋ?pì?N?n3??_?\"\0\0??Q??y8U???=F+???????=K?6t???	7??V>?\0.!qZ`?????Ȏ?<?+???#}?^?C(\0\0Z+?t??\0?6b??>b????T??O?/???]????t،?????\0U?W^N%?\'\Z8Z?.U?????t>]??ހ*????偤??q??4????V???v?!?検????A???~?+_?мD}???d??/?-??ƽ6??~?????S?w\0?3?ߤ\n1.\\T?=??,?b??D??m5?mi\0?(Uz?\0??p??+?֡???0?Qc;?????e????~?????{??_?f&?l|?_@=?,?U???1i\"?)k4B?>???A?\\?8??Of????f_?c?\Zմ?F7????f?0????*????0???ad??L&??*????$ՄAQ?$??#G]+״??\0?G?6?Xҳ_?n#?????j2?g??I\'??5?}?w0aBȒ?Z?&?j????D??k?dg?49??!?w???ꀆ???qp>P<rG?)???nH\Z??I??r?s3?Sc??/??}js6?5?????d?)???a-`?UO?J??la?????K???~2挚??\0sa!i????좗6?????ѭ??4?:?O?4;\"?cO?j.^m\Z??v??ƺ@s}AU?٢H\r?B?_?tj\n6O@?ϱc???SN`?[U??QT?nR:?;????v?[???*li{n?W????\\??????\ZҼ??rZ??Uv??;??W\n??_?E????2ݐ??????ibXv?6Fs?g??J??????|?????KE??ɍ??;??̯??\ZL\0??+9??X1?wdž`8D??????]&f?kɘ͸1?2&?&?~	?Z5?\0?[{g??I?%?????ˇ_?d*?l??e}?{?C???6	??#?uL?l?a-???B?`??\0*??9E&7?P?ir+@?\r???#+??bq\'??<UW)4_Z?\0???C??_kO?N>?I?y pՈ?m,3??Z?C?????V?n?`?&???????T?FE7@?K???\0??^? ?e??5?O???o??\\??;????1?e?ߴ\rlq?t=\\3??̘y`&)?, g???I$?.e?vw9?????.?F?\n??2???P?w\rD??{?4cJ??\06?I,?W0T???c6ڭ???pb????4o??e?aG???x%????&?/?f???R?Fg?:?z?L????I t+a??!vd?C?2???\0n@m	?q6?l????????ʸ\Z},q????f????\Z??{?ۨ??䓺?	???:?q????+??B???@#\0`^a`?i@??\n?????s??j???x?RZ??;h?9:?i)?A?\0o?FOD?D^???N????,??[?꨿(\ZN?k???\\?????C/^?q?mi??THG??\Z?!?tH??D?\0j????0i.H?;Z?2_Oj*?Q??k??x???u??????j??g??Ty ?C?z?F(????p1?$????U65I?v??Vg???Ή!y1?kN??/?rw??^3[V?^.X??P?l?????0}?p??)? ??j(-?P??e?Ñ???Xqعq-?(ˀb?3??????pb剤A?N?N?E?S??yZ??\0f?^???U?.mU?&CA.?璂???qX;?Bɠ?????cvY0???\0H??t̕ңc????a??I}\\?TND?\rqC>S??ҀLI3-?o??+?3??1\0???\ZWH`Vt??????:?Ć?9?3\0A/?/,?jd??Q??\0???u\r?ϓ??S?^$?Bt?x???0????6T??^b\r&\rC?\'??kbP?P?N3Vg?ԏw	`???t??d??NP????\\\0?|4v>???mLͼ??\0!\"??% 硲?2)\'?-??Y?????+???<?d??0?T?7!?F?J??7L\"jH](ٽ?\0t??????n??UE\0T^X	9\nR?{(veK??a@?!?!?????\0&?5??v??G?{?|???;d????J{B^H?`?y(???Sgu?L??!@??\\??????Y?s<???*;t???A?3Q?4?&{ɷ??\'?K???e????^???n??\0}%S??', '');
INSERT INTO `worker` (`worker_id`, `nic`, `fname`, `lname`, `email`, `contact`, `password`, `verify_token`, `created_at`, `address`, `district`, `city`, `nic_front`, `nic_back`, `prof_pic`, `status`) VALUES
(16, '967087722V', 'Mathan', 'Kaarthik', 'mathankk@gmail.com', '0763352001', '$2y$10$jWyG32dclEej8qAR6sYCPePgC.FWVBzBBWD3ifdNki4SP36HT7GBO', '0aad4dadb7288e0f9975a514e362e834', '2022-01-18 08:10:50', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`),
  ADD KEY `worker_id` (`worker_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `company_ads`
--
ALTER TABLE `company_ads`
  ADD PRIMARY KEY (`ads_id`);

--
-- Indexes for table `company_ads_request`
--
ALTER TABLE `company_ads_request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `customer_ads`
--
ALTER TABLE `customer_ads`
  ADD PRIMARY KEY (`ads_id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- Indexes for table `customer_ads_request`
--
ALTER TABLE `customer_ads_request`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `request_fk1` (`worker_id`),
  ADD KEY `request_fk2` (`ad_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `invite_company_jobs`
--
ALTER TABLE `invite_company_jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `invite_jobs`
--
ALTER TABLE `invite_jobs`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `invite_fk1` (`cus_id`),
  ADD KEY `invite_fk2` (`worker_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD KEY `adm_nic` (`adm_nic`),
  ADD KEY `cus_id` (`cus_id`),
  ADD KEY `manager_id` (`manager_id`),
  ADD KEY `reg_no` (`reg_no`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `worker_id` (`worker_id`);

--
-- Indexes for table `loguser`
--
ALTER TABLE `loguser`
  ADD PRIMARY KEY (`user_type`,`user_cat_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `cus_id` (`cus_id`),
  ADD KEY `payment_fk2` (`worker_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`rep_id`),
  ADD KEY `cus_id` (`cus_id`),
  ADD KEY `reg_no` (`reg_no`),
  ADD KEY `worker_id` (`worker_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `cus_id` (`cus_id`),
  ADD KEY `worker_id` (`worker_id`),
  ADD KEY `reg_no` (`reg_no`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `worker_id` (`worker_id`),
  ADD KEY `schedule_fk2` (`cus_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `worker_id` (`worker_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`worker_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `company_ads`
--
ALTER TABLE `company_ads`
  MODIFY `ads_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `company_ads_request`
--
ALTER TABLE `company_ads_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer_ads`
--
ALTER TABLE `customer_ads`
  MODIFY `ads_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer_ads_request`
--
ALTER TABLE `customer_ads_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invite_company_jobs`
--
ALTER TABLE `invite_company_jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invite_jobs`
--
ALTER TABLE `invite_jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `rep_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `worker`
--
ALTER TABLE `worker`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bank`
--
ALTER TABLE `bank`
  ADD CONSTRAINT `bank_ibfk_1` FOREIGN KEY (`worker_id`) REFERENCES `worker` (`worker_id`);

--
-- Constraints for table `customer_ads`
--
ALTER TABLE `customer_ads`
  ADD CONSTRAINT `customer_ads_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`);

--
-- Constraints for table `customer_ads_request`
--
ALTER TABLE `customer_ads_request`
  ADD CONSTRAINT `request_fk1` FOREIGN KEY (`worker_id`) REFERENCES `worker` (`worker_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `request_fk2` FOREIGN KEY (`ad_id`) REFERENCES `customer_ads` (`ads_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invite_jobs`
--
ALTER TABLE `invite_jobs`
  ADD CONSTRAINT `invite_fk1` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invite_fk2` FOREIGN KEY (`worker_id`) REFERENCES `worker` (`worker_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_fk2` FOREIGN KEY (`worker_id`) REFERENCES `worker` (`worker_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`),
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`reg_no`) REFERENCES `company` (`reg_no`),
  ADD CONSTRAINT `report_ibfk_3` FOREIGN KEY (`worker_id`) REFERENCES `worker` (`worker_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`worker_id`) REFERENCES `worker` (`worker_id`),
  ADD CONSTRAINT `review_ibfk_3` FOREIGN KEY (`reg_no`) REFERENCES `company` (`reg_no`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_fk1` FOREIGN KEY (`worker_id`) REFERENCES `worker` (`worker_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_fk2` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`worker_id`) REFERENCES `worker` (`worker_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
