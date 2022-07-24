-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2022 at 12:52 PM
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

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_text`, `updated_at`) VALUES
(1, 'Monoget Saha IP: ::1 insert new product', '2022-07-24 10:01:34'),
(2, 'Monoget Saha IP: ::1 insert new product', '2022-07-24 10:02:58'),
(3, 'Monoget Saha IP: ::1 update product id-28', '2022-07-24 10:07:07');

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
(3, 'Syed Shifat', '103.107.161.88', 'public/images/avatar-01.jpg', 'shifat@gmail.com', '@BCD1234', 'seo', '2022-02-10 11:09:54'),
(4, 'Super Admin', '103.107.160.134', 'public/images/avatar-01.jpg', 'test@superadmin.com', '@BCD1234', 'admin', '2022-02-10 11:09:43');

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
  `price` double(10,2) NOT NULL,
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
  `price` varchar(150) NOT NULL,
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
(1, 'Burger', 'FGZDMR', '10:00 AM, 5:00 PM, 6:00 PM', '210.00, 510.00, 650.00', '1 DRIVING LESSON (Per Lesson 45min)', '', '', '', 1, '2022-07-24 07:35:41'),
(28, 'Pizza', 'S3S757CZ', '5:00 AM,6:00 PM', '7.99, 8.55', '', '', '', '', 1, '2022-07-24 10:05:13'),
(29, 'Samousa', 'A0T0RYPO', '10:00 AM, 3:00 PM', '7.99, 8.55', '', '', '', '', 1, '2022-07-24 10:02:58');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
