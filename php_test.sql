-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2026 at 04:08 PM
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
-- Database: `php_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `supplier_code` varchar(20) DEFAULT NULL,
  `supplier_name` varchar(100) DEFAULT NULL,
  `address1` varchar(200) DEFAULT NULL,
  `address2` varchar(200) DEFAULT NULL,
  `address3` varchar(200) DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `vat_reg_no` varchar(50) DEFAULT NULL,
  `currency` int(11) DEFAULT NULL,
  `pay_mode` int(11) DEFAULT NULL,
  `contact_person` varchar(100) DEFAULT NULL,
  `mobile_no` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `svat_reg_no` varchar(50) DEFAULT NULL,
  `origin` varchar(100) DEFAULT NULL,
  `pay_term` varchar(50) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `supplier_code`, `supplier_name`, `address1`, `address2`, `address3`, `country`, `website`, `vat_reg_no`, `currency`, `pay_mode`, `contact_person`, `mobile_no`, `phone`, `email`, `fax`, `svat_reg_no`, `origin`, `pay_term`, `is_active`, `created_at`) VALUES
(1, 'S0001', 'Adithya Rosayru', 'No.15, Yakkala Rd, Gampaha', '', '0', 1, '', '', 1, NULL, 'Adithya Rosayru', '0709992929', '0332299009', 'adithya@gmail.com', '', '', 'Local', '30 Days', 1, '2026-02-20 14:44:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
