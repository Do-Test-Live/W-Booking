-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2022 at 02:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurents`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` int(11) NOT NULL,
  `log_text` varchar(500) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `ip` varchar(150) NOT NULL,
  `image` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(15) NOT NULL DEFAULT 'sales',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `ip`, `image`, `email`, `password`, `role`, `updated_at`) VALUES
(1, 'Monoget Saha', '27.147.190.199', 'public/images/profile/monoget.png', 'monoget1@gmail.com', '@BCD1234', 'admin', '2022-02-06 11:16:17'),
(2, 'Munna Khan', '103.107.160.134', 'public/images/avatar-01.jpg', 'munna@gmail.com', '@BCD1234', 'admin', '2022-02-10 11:09:43'),
(3, 'Syed Shifat', '103.107.161.88', 'public/images/avatar-01.jpg', 'shifat@gmail.com', '@BCD1234', 'seo', '2022-02-10 11:09:54');

-- --------------------------------------------------------

--
-- Table structure for table `billing_details`
--

CREATE TABLE `billing_details` (
  `id` int(11) NOT NULL,
  `f_name` varchar(15) NOT NULL,
  `l_name` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city` varchar(15) NOT NULL,
  `zip_code` varchar(10) NOT NULL,
  `state` varchar(5) NOT NULL,
  `id_name` varchar(15) NOT NULL,
  `id_value` varchar(20) NOT NULL,
  `preferred_schedule` varchar(1000) NOT NULL,
  `payment_type` varchar(20) NOT NULL DEFAULT 'Card',
  `transaction_number` varchar(100) NOT NULL,
  `transaction_image` varchar(200) NOT NULL,
  `attach_files` varchar(500) NOT NULL,
  `credit_card_num` varchar(20) NOT NULL,
  `exp_month` varchar(15) NOT NULL,
  `exp_year` varchar(10) NOT NULL,
  `cvv` varchar(5) NOT NULL,
  `approve` int(11) NOT NULL DEFAULT 3,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(8) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `seat_number` varchar(20) NOT NULL,
  `number` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `occasion` varchar(150) NOT NULL,
  `alergies` varchar(150) NOT NULL,
  `inserted_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(20) NOT NULL,
  `time` varchar(200) NOT NULL,
  `price` double(10,2) NOT NULL,
  `description` varchar(500) NOT NULL,
  `menu_image` varchar(150) NOT NULL,
  `product_image` varchar(150) NOT NULL,
  `extended_image` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `time`, `price`, `description`, `menu_image`, `product_image`, `extended_image`, `status`, `updated_at`) VALUES
(1, '1 LESSON PACKAGE', 'FGZDMR', '', 210.00, '1 DRIVING LESSON (Per Lesson 45min)', '', '', '', 1, '2022-07-23 10:45:38'),
(2, '2 LESSONS PACKAGE', 'BP4ISN', '', 265.00, '2 DRIVING LESSON (Per Lesson 45min)', '', '', '', 1, '2022-07-23 10:45:38'),
(3, '3 LESSONS PACKAGE', '65147S', '', 315.00, '3 DRIVING LESSON (Per Lesson 45min)', '', '', '', 1, '2022-07-23 10:45:38'),
(4, '4 LESSONS PACKAGE', '5Q4SIR', '', 370.00, '4 DRIVING LESSON (Per Lesson 45min)', '', '', '', 1, '2022-07-23 10:45:38'),
(5, '5 LESSONS PACKAGE', 'DNHD8O', '', 420.00, '5 DRIVING LESSON (Per Lesson 45min)', '', '', '', 1, '2022-07-23 10:45:38'),
(6, '10 LESSONS PACKAGE', '03AVO5', '', 685.00, '10 DRIVING LESSON (Per Lesson 45min)', '', '', '', 1, '2022-07-23 10:45:38'),
(7, '15 LESSONS PACKAGE', 'WL3AP7', '', 945.00, '15 DRIVING LESSON (Per Lesson 45min)', '', '', '', 1, '2022-07-23 10:45:38'),
(8, '20 LESSONS PACKAGE', 'GXH91G', '', 1210.00, '20 DRIVING LESSON (Per Lesson 45min)', '', '', '', 1, '2022-07-23 10:45:38'),
(9, 'Regular Road Lesson', 'DO6UY7', '', 60.00, '(45 MINUTES)', '', '', '', 1, '2022-07-23 10:45:38'),
(10, '5 Hour Class', 'HCC6U0', '', 55.00, 'PRE-LICENSING COURSE', '', '', '', 1, '2022-07-23 10:45:38'),
(11, 'Road Test Appointment', 'BRMKVF', '', 50.00, 'Appointment within 1 Week', '', '', '', 1, '2022-07-23 10:45:38'),
(12, 'Car for Road Test', 'YHXSF7', '', 185.00, 'Car with our professional instructor', '', '', '', 1, '2022-07-23 10:45:38'),
(13, 'Highway Driving Lesson', '685AVW', '', 75.00, 'MINIMUM 2 LESSON (Per Lesson 45min)', '', '', '', 1, '2022-07-23 10:45:38'),
(14, 'Due Payment', 'L5K5GH', '', 530.00, 'PRE-LICENSING COURSE', '', '', '', 1, '2022-07-23 10:45:38'),
(15, 'Rush', 'D815U8', '', 25.00, '', '', '', '', 1, '2022-07-23 10:45:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing_details`
--
ALTER TABLE `billing_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `billing_details`
--
ALTER TABLE `billing_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
