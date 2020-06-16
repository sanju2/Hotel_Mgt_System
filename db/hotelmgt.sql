-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 06:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelmgt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$0UeSTNhPs5TExTGMIBGFYeahGvL2FRviv7lmpdFeMAZtIkInOf3pi', 'Kgrn2VJoqP3z7BsMX4zHR6008v6jtSx5uK8dLAFFOerGypDs2cSWaSVlgX0k', '2020-02-29 01:30:57', '2020-02-29 01:30:57'),
(2, 'S.M.L.S.Silva', 'lsanjeewa18@gmail.com', NULL, '$2y$10$HJGsOHihdYVzyEXD/i4Pe.YQ6EwJ7JxyZo6G91JMJ89C8Znh5eOMq', NULL, '2020-03-05 11:16:22', '2020-03-05 11:16:22');

-- --------------------------------------------------------

--
-- Table structure for table `attendences`
--

CREATE TABLE `attendences` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendences`
--

INSERT INTO `attendences` (`id`, `type`, `name`, `date`, `count`, `created_at`, `updated_at`) VALUES
(1000, 'Kitchen Staff', 'Navodya Sathsarani', 'date', 1, '2020-03-15 03:42:17', '2020-03-15 03:42:17');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dates` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `phone`, `email`, `place`, `dates`, `created_at`, `updated_at`) VALUES
(30, 'Lasnatha', '0775094902', 'lsanjeewa947@gmail.com', 'Galle', '2', '2020-06-15 09:56:44', '2020-06-15 09:56:44');

-- --------------------------------------------------------

--
-- Table structure for table `canceltdetails`
--

CREATE TABLE `canceltdetails` (
  `id` int(11) NOT NULL,
  `to` varchar(256) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `canceltdetails`
--

INSERT INTO `canceltdetails` (`id`, `to`, `phone`, `created_at`, `updated_at`) VALUES
(5, 'My Idea was changed', '0775094902', '2020-06-11', '2020-06-11'),
(6, 'My mind change', '0775094902', '2020-06-14', '2020-06-14'),
(7, 'My Idea Was Changed', '0775094902', '2020-06-14', '2020-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `cat_name`, `created_at`, `updated_at`) VALUES
(1, 'Cakes', '2020-03-02 03:05:46', '2020-03-02 03:05:46'),
(2, 'Desserts', '2020-03-02 03:05:50', '2020-03-02 03:05:50'),
(3, 'Burgers', '2020-03-02 03:05:57', '2020-03-02 03:05:57'),
(4, 'Beverages', '2020-03-02 03:06:02', '2020-03-02 03:06:02');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fname`, `lname`, `mname`, `gender`, `dob`, `nic`, `email`, `phone`, `address`, `contact`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'lasantha', 'sanjeewa', '', '', '', NULL, NULL, '0775094902', NULL, '', '2020-05-18 21:44:07', '2020-05-18 21:44:07', NULL),
(2, 'lasantha', 'sanjeewa', '', '', '', NULL, NULL, '0775094902', NULL, '', '2020-05-18 22:01:42', '2020-05-18 22:01:42', NULL),
(3, 'lasantha', 'sanjeewa', '', '', '', NULL, NULL, '0775094902', NULL, '', '2020-05-19 03:25:12', '2020-05-19 03:25:12', NULL),
(4, 'navodya', 'sathsarani', '', '', '', NULL, NULL, '0705608259', NULL, '', '2020-05-23 02:59:24', '2020-05-23 02:59:24', NULL),
(5, 'navodya', 'sathsarani', '', '', '', NULL, NULL, '0710747770', NULL, '', '2020-05-23 05:46:15', '2020-05-23 05:46:15', NULL),
(6, 'navodya', 'sathsarani', '', '', '', NULL, NULL, '0710747770', NULL, '', '2020-05-23 05:46:25', '2020-05-23 05:46:25', NULL),
(7, 'navodya', 'sathsarani', '', '', '', NULL, NULL, '0710747770', NULL, '', '2020-05-23 05:46:49', '2020-05-23 05:46:49', NULL),
(8, 'navodya', 'sathsarani', 'pavithra', 'female', '2020-05-01', NULL, 'navodya@gmail.com', NULL, 'gcchch', '0714568925', '2020-05-29 07:56:24', '2020-05-29 07:56:24', NULL),
(9, 'navodya', 'sathsarani', 'pavithra', 'female', '2020-05-01', NULL, 'navodya@gmail.com', NULL, 'hhchc', '0714568925', '2020-05-29 07:56:56', '2020-05-29 07:56:56', NULL),
(10, 'dhdh', 'yt', 'ddddddddddd', 'male', '2020-04-29', NULL, 'navodya@gmail.com', NULL, 'gdfgd', '0714568925', '2020-05-29 07:57:44', '2020-05-29 07:57:44', NULL),
(11, 'navodya', 'sathsarani', 'pavithra', 'male', '2020-05-01', NULL, 'navodya@gmail.com', NULL, 'jghhghf', '0714568925', '2020-05-29 08:02:30', '2020-05-29 08:02:30', NULL),
(12, 'navodya', 'sathsarani', 'pavithra', 'female', '2020-05-01', NULL, 'navodya@gmail.com', NULL, 'czdgzfz', '0714568925', '2020-05-29 08:49:45', '2020-05-29 08:49:45', NULL),
(13, 'navodya', 'sathsarani', 'pavithra', 'female', '2020-05-01', NULL, 'navodya@gmail.com', NULL, 'czdgzfz', '0714568925', '2020-05-29 09:01:52', '2020-05-29 09:01:52', NULL),
(14, 'navodya', 'sathsarani', 'pavithra', 'male', '2020-05-30', NULL, 'navodya@gmail.com', NULL, 'mgjghv', '0714568925', '2020-05-29 09:02:56', '2020-05-29 09:02:56', NULL),
(15, 'navodya', 'sathsarani', 'pavithra', 'male', '2020-05-30', NULL, 'navodya@gmail.com', NULL, 'mgjghv', '0714568925', '2020-05-29 09:03:48', '2020-05-29 09:03:48', NULL),
(16, 'navodya', 'sathsarani', 'pavithra', 'male', '2020-05-01', NULL, 'navodya@gmail.com', NULL, 'jhfhfh', '0714568925', '2020-05-29 09:05:18', '2020-05-29 09:05:18', NULL),
(17, 'fdfax', 'sathsarani', 'pavithra', 'male', '2020-05-01', NULL, 'navodya@gmail.com', NULL, 'jhfhgj', '0714568925', '2020-05-29 09:07:59', '2020-05-29 09:07:59', NULL),
(18, 'navodya', 'sathsarani', 'pavithra', 'male', '2020-05-01', NULL, 'navodya@gmail.com', NULL, 'gzgzz', '0714568925', '2020-05-29 09:16:45', '2020-05-29 09:16:45', NULL),
(19, 'navodya', 'sathsarani', 'pavithra', 'male', '2020-05-01', NULL, 'admin@gmail.com', NULL, 'zdgdg', '0714568925', '2020-05-29 09:20:22', '2020-05-29 09:20:22', NULL),
(20, 'navodya', 'sathsarani', 'pavithra', 'male', '2020-05-30', NULL, 'navodya@gmail.com', NULL, 'vvzv', '0714568925', '2020-05-29 09:24:33', '2020-05-29 09:24:33', NULL),
(21, 'navodya', 'sathsarani', 'pavithra', 'male', '2020-05-01', NULL, 'navodya@gmail.com', NULL, 'khjg', '0714568925', '2020-05-29 09:42:38', '2020-05-29 09:42:38', NULL),
(22, 'navodya', 'sathsarani', 'pavithra', 'male', '2020-05-01', NULL, 'navodya@gmail.com', NULL, 'ffsfs', '0714568925', '2020-05-29 10:09:13', '2020-05-29 10:09:13', NULL),
(23, 'dsfsdf', 'dfgds', 'dfsd', 'male', '1996-06-07', NULL, 'rwerwer@gmail.com', NULL, 'ergerterter', '0775094902', '2020-05-31 00:34:50', '2020-05-31 00:34:50', NULL),
(24, 'dsfsdf', 'dfgds', 'dfsd', 'male', '1996-06-07', NULL, 'rwerwer@gmail.com', NULL, 'ergerterter', '0775094902', '2020-05-31 00:38:20', '2020-05-31 00:38:20', NULL),
(25, 'dsfsdf', 'dfgds', 'dfsd', 'male', '1996-06-07', NULL, 'rwerwer@gmail.com', NULL, 'ergerterter', '0775094902', '2020-05-31 00:39:16', '2020-05-31 00:39:16', NULL),
(26, 'dasd', 'asASa', 'dsadsa', 'male', '1996-02-03', NULL, 'fsdfsdf@dfgfdg.com', NULL, 'gdfgvdgsdgsd', '7677476543', '2020-05-31 00:58:06', '2020-05-31 00:58:06', NULL),
(27, 'dsfsd', 'sffsd', 'dsfsd', 'male', '1996-07-01', NULL, 'ddffsd@ggdff.com', NULL, 'fdvdsffsdfds', '0766654321', '2020-05-31 01:12:05', '2020-05-31 01:12:05', NULL),
(28, 'fsdfsd', 'dsdfsd', 'dsdfsdfsd', 'male', '1996-01-07', NULL, 'fsdfsdf@gmail.com', NULL, 'nbcbhfghdfhdtbc cb c', '43534554322', '2020-05-31 01:48:12', '2020-05-31 01:48:12', NULL),
(29, 'fsdfsd', 'dsdfsd', 'dsdfsdfsd', 'male', '1996-01-07', NULL, 'fsdfsdf@gmail.com', NULL, 'nbcbhfghdfhdtbc cb c', '43534554322', '2020-05-31 01:48:13', '2020-05-31 01:48:13', NULL),
(30, 'gdfg', 'dfgdfg', 'fdgdfg', 'male', '1996-08-09', NULL, 'lsanjeewa947@gmail.com', NULL, 'dfgfdsgsgsg', '0775094902', '2020-05-31 01:55:59', '2020-05-31 01:55:59', NULL),
(31, 'dasdsa', 'dasdas', 'ddasd', 'male', '1996-07-02', NULL, 'gsvsd@gmail.com', NULL, 'dgdfgfgfggfgfd', '0745654346', '2020-05-31 02:05:36', '2020-05-31 02:05:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `delete_employees`
--

CREATE TABLE `delete_employees` (
  `empid` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tp` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delete_employees`
--

INSERT INTO `delete_employees` (`empid`, `name`, `email`, `tp`, `created_at`, `updated_at`) VALUES
(1002, 'nayani', 'pavithra@gmail.com', 776543212, '2020-03-13 04:21:41', '2020-03-13 04:21:41'),
(1003, 'Pavithra Piumi', 'pavithra@gmail.com', 710757770, '2020-03-17 10:46:34', '2020-03-17 10:46:34');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NIC` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `salary` int(11) DEFAULT NULL,
  `joindate` date DEFAULT NULL,
  `tp` int(11) DEFAULT NULL,
  `tp2` int(11) DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attendence` int(11) DEFAULT NULL,
  `remark` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `type`, `image`, `name`, `gender`, `NIC`, `Address`, `DOB`, `admin`, `salary`, `joindate`, `tp`, `tp2`, `Email`, `attendence`, `remark`, `created_at`, `updated_at`) VALUES
(1000, 'Kitchen Staff', '1583432938.jpeg', 'Navodya Sathsarani', 'Female', '968202715v', 'kurunegala', '1996-11-15', 0, 20000, '2020-01-03', 710747770, NULL, 'navodya@gmail.com', NULL, NULL, '2020-03-05 12:58:58', '2020-03-05 12:58:58'),
(1001, 'Room Service', '1583433113.jfif', 'Tharindu Jayasinghe', 'Male', '968542351v', 'Rabukpotha', '1996-12-12', 0, 15000, '2020-02-03', 718563245, NULL, 'tharindu@gmail.com', NULL, NULL, '2020-03-05 13:01:53', '2020-03-05 13:01:53'),
(1004, 'Waitress', '1584461994.jfif', 'Kumari Perera', 'Female', '964502715v', 'Anuradhapura', '1995-11-12', 0, 15000, '2019-12-01', 710757770, NULL, 'kumari@gmail.com', NULL, NULL, '2020-03-17 10:49:54', '2020-03-17 10:49:54');

-- --------------------------------------------------------

--
-- Table structure for table `emp_salaries`
--

CREATE TABLE `emp_salaries` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emp_salaries`
--

INSERT INTO `emp_salaries` (`id`, `type`, `name`, `month`, `salary`, `created_at`, `updated_at`) VALUES
(1000, 'Kitchen Staff', 'Navodya Sathsarani', 'Mar', 5600, '2020-03-13 05:34:06', '2020-03-13 05:34:06'),
(1001, 'Room Service', 'Tharindu Jayasinghe', 'Mar', 4800, '2020-03-13 05:34:11', '2020-03-13 05:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `estaffs`
--

CREATE TABLE `estaffs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expenditures`
--

CREATE TABLE `expenditures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `e_m_salaries`
--

CREATE TABLE `e_m_salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e_m_salaries`
--

INSERT INTO `e_m_salaries` (`id`, `month`, `salary`, `created_at`, `updated_at`) VALUES
(1, 'Mar', 10400, '2020-03-13 02:45:28', '2020-03-13 02:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `text`, `created_at`, `updated_at`) VALUES
(3, 'lasantha', 'lsanjeewa947@gmail.com', 'it is very good web site', '2020-04-27 12:28:50', '2020-04-27 12:28:50'),
(4, 'lhgsg', 'lsanjeewa947@gmail.com', 'It is good website', '2020-05-31 23:13:42', '2020-05-31 23:13:42'),
(5, 'lasantha', 'lsanjeewa947@gmail.com', 'It is good web site', '2020-06-14 06:14:18', '2020-06-14 06:14:18');

-- --------------------------------------------------------

--
-- Table structure for table `fooditems`
--

CREATE TABLE `fooditems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `itemname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calorie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fooditems`
--

INSERT INTO `fooditems` (`id`, `itemname`, `price`, `calorie`, `image`, `cat_id`, `description`, `created_at`, `updated_at`) VALUES
(15, 'Coke', '350', '500cl', '1590760619.jfif', '4', 'You can get 10% off from our special offer in this week', '2020-05-22 03:19:11', '2020-05-29 08:26:59'),
(16, 'Sprite', '400', '550cl', '1590760627.jpeg', '4', 'One bottle enough for one person at a time.Energized drink.', '2020-05-22 03:19:40', '2020-05-29 08:27:07'),
(18, 'Fanta', '400', '500cl', '1590760635.jfif', '4', 'Fanta has 10% offer in this week', '2020-05-22 03:22:17', '2020-05-29 08:27:15'),
(19, 'Pepci', '300', '150cl', '1592118402.png', '4', 'You can get 10% off from our special offer in this week', '2020-06-14 01:36:42', '2020-06-14 01:36:42'),
(20, 'Choco love rose cake', '800', '900cl', '1592118484.jfif', '1', 'choco love rose cake....Specially for your loved once', '2020-06-14 01:38:04', '2020-06-14 01:38:04'),
(21, 'divine cake', '900', '1000cl', '1592118520.jfif', '1', 'Divine cake with cherries', '2020-06-14 01:38:40', '2020-06-14 01:38:40'),
(22, 'Happy birthday cake', '900', '1000cl', '1592118560.jfif', '1', 'For your loved ones birthday', '2020-06-14 01:39:20', '2020-06-14 01:39:20'),
(23, 'Pineapple cake', '700', '800cl', '1592118594.jpg', '1', 'Made using fresh pineapples', '2020-06-14 01:39:54', '2020-06-14 01:39:54'),
(24, 'chocolate and mint cake', '600', '700cl', '1592118649.jpg', '2', 'Chocolate and mint taste added for this cake...only from our hotel in badulla', '2020-06-14 01:40:49', '2020-06-14 01:40:49'),
(25, 'creme brulee', '800', '1000cl', '1592118715.jfif', '2', 'cremee cake.....newly introduce one', '2020-06-14 01:41:55', '2020-06-14 01:41:55'),
(26, 'No bake cheese cake', '900', '1000cl', '1592118766.jfif', '2', 'No bake cheese cake...From a special recipe', '2020-06-14 01:42:46', '2020-06-14 01:42:46'),
(27, 'Pancake', '400', '500cl', '1592118792.jfif', '2', 'Pancakes different from other\'s ones', '2020-06-14 01:43:12', '2020-06-14 01:43:12'),
(28, 'Red velvet cake', '800', '900cl', '1592118817.jfif', '2', 'Red velvet tasty dessert', '2020-06-14 01:43:37', '2020-06-14 01:43:37'),
(29, 'Cheese burger', '600', '900cl', '1592118859.jfif', '3', 'Cheese burger.....', '2020-06-14 01:44:19', '2020-06-14 01:44:19'),
(30, 'Hamburger', '700', '800cl', '1592118939.jfif', '3', 'Hamburger....', '2020-06-14 01:45:39', '2020-06-14 01:45:39'),
(31, 'Smash burger', '800', '900cl', '1592118968.jfif', '3', 'Smash burger....', '2020-06-14 01:46:08', '2020-06-14 01:46:08'),
(32, 'Vegan burger', '400', '500cl', '1592118998.jfif', '3', 'For vegetarians', '2020-06-14 01:46:38', '2020-06-14 01:46:38');

-- --------------------------------------------------------

--
-- Table structure for table `foodorders`
--

CREATE TABLE `foodorders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orders` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foodorders`
--

INSERT INTO `foodorders` (`id`, `Name`, `Address`, `orders`, `phoneNumber`, `created_at`, `updated_at`) VALUES
(1, 'Navodya', 'kurunegala', 'pancake 1, Coke 1', '710747770', '2020-05-06 09:11:31', '2020-05-06 09:11:31');

-- --------------------------------------------------------

--
-- Table structure for table `guides`
--

CREATE TABLE `guides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guidequalifications` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobileno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conpassword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guides`
--

INSERT INTO `guides` (`id`, `first_name`, `last_name`, `dob`, `gender`, `guidequalifications`, `nic`, `mobileno`, `email`, `username`, `password`, `conpassword`, `image`, `created_at`, `updated_at`) VALUES
(14, 'Lasantha', 'Sanjeewa', '1996-07-01', 'Male', 'Unhggda hdh', '961832322v', '0775094902', 'lsanjeewa947@gmail.com', 'lasantha', '123456', '123456', '1590989636.png', '2020-06-01 00:03:56', '2020-06-01 00:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `incomes`
--

CREATE TABLE `incomes` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(11) NOT NULL,
  `Requesting_date` date NOT NULL,
  `leaving_date` date DEFAULT NULL,
  `nof_days` int(11) DEFAULT NULL,
  `leve_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `Requesting_date`, `leaving_date`, `nof_days`, `leve_type`, `created_at`, `updated_at`) VALUES
(2, '2020-03-14', '2020-03-15', 3, 'Casual', '2020-03-13 05:18:21', '2020-03-13 05:18:21'),
(3, '2020-03-14', '2020-03-17', 3, 'Medical', '2020-03-13 05:18:24', '2020-03-13 05:18:24');

-- --------------------------------------------------------

--
-- Table structure for table `leave_types`
--

CREATE TABLE `leave_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `leve_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allow_leaves` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `memployees`
--

CREATE TABLE `memployees` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memployees`
--

INSERT INTO `memployees` (`id`, `type`, `name`, `day`, `month`, `created_at`, `updated_at`) VALUES
(1000, 'Kitchen Staff', 'Navodya Sathsarani', '13', 'Mar', '2020-03-13 02:44:58', '2020-03-13 02:44:58'),
(1001, 'Room Service', 'Tharindu Jayasinghe', '13', 'Mar', '2020-03-13 02:45:01', '2020-03-13 02:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_08_27_135123_create_customers_table', 1),
(5, '2019_12_20_141618_create_guides_table', 1),
(6, '2019_12_24_142943_create_feedback_table', 1),
(7, '2019_12_28_121532_create_booking_table', 1),
(8, '2020_01_10_044837_create_admins_table', 1),
(9, '2020_01_15_180959_create__guide_profile_table', 1),
(10, '2019_08_27_111118_create_room_types_table', 2),
(11, '2019_08_27_112147_create_rooms_table', 2),
(12, '2019_08_27_140720_create_reserves_table', 2),
(13, '2019_11_14_190505_create_fooditems_table', 2),
(14, '2019_12_07_105344_create_news_table', 2),
(15, '2019_12_30_150639_create_cats_table', 2),
(16, '2019_12_30_172314_create_category_table', 2),
(17, '2020_01_15_022258_create_foodorders_table', 2),
(18, '2020_03_02_072829_create_tour_type_table', 3),
(19, '2020_03_02_073123_create_tours_table', 3),
(20, '2020_03_02_073305_create_treserves_table', 3),
(21, '2020_04_04_000000_create_user_follower_table', 4),
(22, '2020_06_08_185336_create_posts_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `Description`, `created_at`, `updated_at`) VALUES
(1, 'You can get 10% offer for all the room booking in June month.......', '2020-05-29 08:35:19', '2020-05-29 08:35:19');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('lsanjeewa947@gmail.com', '$2y$10$Vcbjx3Mz8jZQI9J0rkImvOQum9TObFla5LFmnBLs2OyG0LTCAjDAS', '2020-04-28 03:20:28'),
('greenmount049@gmail.com', '$2y$10$FYhAO6aGBa/K.slyio0XG.MMVeXmiIYF7eoA.Y4opsOJZSCTfz35C', '2020-04-28 03:23:29');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports_visnas`
--

CREATE TABLE `reports_visnas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `date` date NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requested_leaves`
--

CREATE TABLE `requested_leaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `eid` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Requesting_date` date DEFAULT NULL,
  `leaving_date` date DEFAULT NULL,
  `nof_days` int(11) DEFAULT NULL,
  `leve_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requested_leaves`
--

INSERT INTO `requested_leaves` (`id`, `eid`, `name`, `Requesting_date`, `leaving_date`, `nof_days`, `leve_type`, `created_at`, `updated_at`) VALUES
(1, 2, 'Navodya Sathsarani', '2020-03-14', '2020-03-15', 3, 'Casual', '2020-03-13 05:09:09', '2020-03-13 05:09:09'),
(2, 3, 'Navodya Sathsarani', '2020-03-14', '2020-03-17', 3, 'Medical', '2020-03-13 05:16:43', '2020-03-13 05:16:43');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(10) UNSIGNED NOT NULL,
  `flag` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `rooms` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `checkin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkout` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

CREATE TABLE `reserves` (
  `id` int(10) UNSIGNED NOT NULL,
  `cid` int(10) UNSIGNED NOT NULL,
  `room_no` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `resereved_date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reserves`
--

INSERT INTO `reserves` (`id`, `cid`, `room_no`, `t_id`, `resereved_date_time`, `check_in`, `check_out`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 4, 4, 1, '2020-05-23 13:59:24', '2020-05-26', '2020-05-31', '2020-05-23 08:29:24', '2020-05-23 08:29:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `floor` int(11) NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `floor`, `availability`, `status`, `description`, `t_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, 'Good condition', 1, '2020-05-19 02:56:54', '2020-05-19 02:56:54', NULL),
(2, 1, 1, 1, 'double ac rom', 2, '2020-05-19 02:57:07', '2020-05-19 02:57:07', NULL),
(3, 2, 1, 1, 'jkh', 3, '2020-05-29 08:10:05', '2020-05-29 08:10:05', NULL),
(4, 2, 0, 1, 'kjhj', 1, '2020-05-29 08:10:54', '2020-05-29 08:10:54', NULL),
(5, 3, 1, 1, 'jhj', 2, '2020-05-29 08:11:30', '2020-05-29 08:11:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `room_types`
--

CREATE TABLE `room_types` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL DEFAULT 0,
  `available` int(11) NOT NULL DEFAULT 0,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base_price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_types`
--

INSERT INTO `room_types` (`id`, `name`, `total`, `available`, `description`, `base_price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Dulex room', 0, 0, 'single rom', 5000, '2020-05-19 02:56:18', '2020-05-19 02:56:18', NULL),
(2, 'Suite room', 0, 0, 'Double room', 3000, '2020-05-19 02:56:35', '2020-05-19 02:56:35', NULL),
(3, 'Standard room', 0, 0, 'hhj', 7500, '2020-05-29 08:09:08', '2020-05-29 08:09:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` int(11) NOT NULL,
  `place` int(11) NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tour_types`
--

CREATE TABLE `tour_types` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL DEFAULT 0,
  `available` int(11) NOT NULL DEFAULT 0,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base_price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_types`
--

INSERT INTO `tour_types` (`id`, `name`, `total`, `available`, `description`, `base_price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Galle', 0, 0, 'galle all areas', 10000, '2020-03-16 12:51:11', '2020-03-16 12:51:11', NULL),
(2, 'Badulla', 0, 0, 'Badullla alla araeas', 12000, '2020-03-16 12:51:48', '2020-03-16 12:51:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `treserves`
--

CREATE TABLE `treserves` (
  `id` int(10) UNSIGNED NOT NULL,
  `cid` int(10) UNSIGNED NOT NULL,
  `tour_no` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `resereved_date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'Lasantha', 'lsanjeewa18@gmail.com', NULL, '$2y$10$xKSq7ZHH46A.mJAG7KFhUOTTdM8ozz0ATSojlOuJhy1tyqFG6ymWq', NULL, '2020-06-15 10:41:32', '2020-06-15 10:41:32'),
(11, 'Navodya', 'navodya@gmail.com', NULL, '$2y$10$0jHg5EtXu8STeZ3bXLmvRe0fMABgwiL/iyyyqdmTw4ol4AiRGf1mK', NULL, '2020-06-15 10:42:09', '2020-06-15 10:42:09'),
(12, 'Tharindu', 'tharindu@gmail.com', NULL, '$2y$10$zjiUQASWVkEUgwLWk2Qm4ePOq3jA68tv3D3s/6j1Tlul91WKvITx.', NULL, '2020-06-15 10:43:28', '2020-06-15 10:43:28'),
(13, 'Sinidu', 'sinidu@gmail.com', NULL, '$2y$10$kCHNof7ZtVbdGQDGUhOLLOyoD9QYLcRasr5guEDtr1TSe07B4eLZm', NULL, '2020-06-15 10:44:23', '2020-06-15 10:44:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_follower`
--

CREATE TABLE `user_follower` (
  `id` int(10) UNSIGNED NOT NULL,
  `following_id` bigint(20) UNSIGNED NOT NULL,
  `follower_id` bigint(20) UNSIGNED NOT NULL,
  `accepted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `attendences`
--
ALTER TABLE `attendences`
  ADD PRIMARY KEY (`id`,`type`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `canceltdetails`
--
ALTER TABLE `canceltdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delete_employees`
--
ALTER TABLE `delete_employees`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_salaries`
--
ALTER TABLE `emp_salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estaffs`
--
ALTER TABLE `estaffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenditures`
--
ALTER TABLE `expenditures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_m_salaries`
--
ALTER TABLE `e_m_salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fooditems`
--
ALTER TABLE `fooditems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodorders`
--
ALTER TABLE `foodorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guides`
--
ALTER TABLE `guides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`,`Requesting_date`);

--
-- Indexes for table `leave_types`
--
ALTER TABLE `leave_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memployees`
--
ALTER TABLE `memployees`
  ADD PRIMARY KEY (`id`,`type`,`day`,`month`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports_visnas`
--
ALTER TABLE `reports_visnas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requested_leaves`
--
ALTER TABLE `requested_leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reserves_cid_foreign` (`cid`),
  ADD KEY `reserves_room_no_foreign` (`room_no`),
  ADD KEY `reserves_t_id_foreign` (`t_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rooms_t_id_foreign` (`t_id`);

--
-- Indexes for table `room_types`
--
ALTER TABLE `room_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tours_t_id_foreign` (`t_id`);

--
-- Indexes for table `tour_types`
--
ALTER TABLE `tour_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treserves`
--
ALTER TABLE `treserves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `treserves_cid_foreign` (`cid`),
  ADD KEY `treserves_tour_no_foreign` (`tour_no`),
  ADD KEY `treserves_t_id_foreign` (`t_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_follower`
--
ALTER TABLE `user_follower`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_follower_following_id_index` (`following_id`),
  ADD KEY `user_follower_follower_id_index` (`follower_id`),
  ADD KEY `user_follower_accepted_at_index` (`accepted_at`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `canceltdetails`
--
ALTER TABLE `canceltdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;

--
-- AUTO_INCREMENT for table `estaffs`
--
ALTER TABLE `estaffs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expenditures`
--
ALTER TABLE `expenditures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `e_m_salaries`
--
ALTER TABLE `e_m_salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fooditems`
--
ALTER TABLE `fooditems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `foodorders`
--
ALTER TABLE `foodorders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `guides`
--
ALTER TABLE `guides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `leave_types`
--
ALTER TABLE `leave_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports_visnas`
--
ALTER TABLE `reports_visnas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requested_leaves`
--
ALTER TABLE `requested_leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reserves`
--
ALTER TABLE `reserves`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `treserves`
--
ALTER TABLE `treserves`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_follower`
--
ALTER TABLE `user_follower`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_t_id_foreign` FOREIGN KEY (`t_id`) REFERENCES `room_types` (`id`);

--
-- Constraints for table `tours`
--
ALTER TABLE `tours`
  ADD CONSTRAINT `tours_t_id_foreign` FOREIGN KEY (`t_id`) REFERENCES `tour_types` (`id`);

--
-- Constraints for table `treserves`
--
ALTER TABLE `treserves`
  ADD CONSTRAINT `treserves_cid_foreign` FOREIGN KEY (`cid`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `treserves_t_id_foreign` FOREIGN KEY (`t_id`) REFERENCES `tour_types` (`id`),
  ADD CONSTRAINT `treserves_tour_no_foreign` FOREIGN KEY (`tour_no`) REFERENCES `tours` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
