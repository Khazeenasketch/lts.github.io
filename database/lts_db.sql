-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2021 at 05:49 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lts_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `br_name` text NOT NULL,
  `br_code` int(11) NOT NULL,
  `br_manager` text NOT NULL,
  `adress` text NOT NULL,
  `city` text NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`br_name`, `br_code`, `br_manager`, `adress`, `city`, `contact`) VALUES
('dastagir branch', 2392396, 'junaid ahmed', 'Dastagir colony', 'Karachi', 332357672),
('lahore branch', 1397576096, 'javaid ahmed', 'Near airport', 'lahore', 332930568);

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE `courier` (
  `names` text NOT NULL,
  `CNIC` int(11) NOT NULL,
  `passwords` text NOT NULL,
  `salary` int(11) NOT NULL,
  `adress` text NOT NULL,
  `dp_id` int(11) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `br_codes` int(11) NOT NULL,
  `reg_no` int(11) NOT NULL,
  `parcel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courier`
--

INSERT INTO `courier` (`names`, `CNIC`, `passwords`, `salary`, `adress`, `dp_id`, `phone_no`, `dob`, `gender`, `email`, `br_codes`, `reg_no`, `parcel_id`) VALUES
('musab ahmed', 2147483647, 'archimede', 40000, 'near farzana dawakhana', 16, 331972893, '1999-02-04', 'Male', 'musab@gmail.com', 2392396, 0, 0),
('maaz rajput', 2147483647, '123456', 30000, 'kashmir road', 17, 331972892, '2002-02-04', 'Male', 'maaz@gmail.com', 2392396, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `names` text NOT NULL,
  `phone_no` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `CNIC_cus` int(11) NOT NULL,
  `email_cus` varchar(50) NOT NULL,
  `city` text NOT NULL,
  `code` int(11) NOT NULL,
  `adress` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`names`, `phone_no`, `cust_id`, `CNIC_cus`, `email_cus`, `city`, `code`, `adress`) VALUES
('Haniya Junaid', 337845677, 828314721, 2147483647, 'haniya@gmail.com', 'karachi', 2392396, 0),
('Hiba', 2147483647, 1477257070, 2147483647, 'hiba@gmail.com', 'lahore', 2392396, 0),
('Awwab Ahmed', 331781937, 1773091100, 2147483647, 'awwab@gmail.com', 'lahore', 1397576096, 0),
('Meher ', 337845616, 1955883129, 2147483647, 'Meher@gmail.com', 'karachi', 2392396, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employe`
--

CREATE TABLE `employe` (
  `names` text NOT NULL,
  `CNIC` int(11) NOT NULL,
  `passwords` text NOT NULL,
  `salary` int(11) NOT NULL,
  `adress` text NOT NULL,
  `emp_id` int(11) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `email` text NOT NULL,
  `br_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employe`
--

INSERT INTO `employe` (`names`, `CNIC`, `passwords`, `salary`, `adress`, `emp_id`, `phone_no`, `dob`, `gender`, `email`, `br_code`) VALUES
('khazeena junaid', 2147483647, 'archimede', 25000, 'R', 46, 321876398, '1999-10-05', 'Female', 'khazeena@gmail.com', 2392396),
('Iman Javaid', 2147483647, '123456', 50000, 'A-1 Kukda street', 47, 2147483647, '2000-02-06', 'Female', 'imanjavaid@gmail.com', 1397576096);

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE `parcels` (
  `parcel_id` int(11) NOT NULL,
  `statuss` text NOT NULL DEFAULT 'Parcel Recieved',
  `charges` int(11) NOT NULL,
  `br_code` int(11) NOT NULL,
  `sen_name` text NOT NULL,
  `sen_adress` text NOT NULL,
  `sen_phone` int(11) NOT NULL,
  `rec_name` text NOT NULL,
  `rec_adress` text NOT NULL,
  `rec_phone` int(11) NOT NULL,
  `weights` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `lengths` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `dp_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`parcel_id`, `statuss`, `charges`, `br_code`, `sen_name`, `sen_adress`, `sen_phone`, `rec_name`, `rec_adress`, `rec_phone`, `weights`, `height`, `lengths`, `width`, `dp_name`) VALUES
(14, 'In Transit', 600, 2392396, 'Haniya Junaid', 'R 592 Block 9 fb area Dastagir Karachi', 331637189, 'khadija', '03321645698', 0, 21, 6, 12, 6, 'musab ahmed'),
(15, 'Shipped', 1000, 2392396, 'Meher', 'House no A-1 Kukda St., Khudadad Colony', 2147483647, 'hamna', '0335178296', 0, 34, 13, 6, 23, 'maaz rajput'),
(16, 'Shipped', 1234, 1397576096, 'Awwab Ahmed', 'R 592 Block 9 fb area Dastagir Karachi', 331782519, 'umar', '0337182541', 0, 4, 56, 13, 54, 'musab ahmed'),
(17, 'Delivered', 1234, 1397576096, 'Hiba', 'Jamia Masjid Ameer muavia, A.1 plot، Block 1 Khudadad Colony, Karachi, Karachi City, Sindh', 2147483647, 'maria', '0337182541', 0, 4, 56, 13, 54, 'maaz rajput'),
(18, 'Parcel Recieved', 34678, 2392396, 'Hiba', 'malik sweets', 2147483647, 'hafsa', '123456780', 0, 41, 12, 345, 1223, 'musab ahmed');

-- --------------------------------------------------------

--
-- Table structure for table `recipient`
--

CREATE TABLE `recipient` (
  `rec_id` int(11) NOT NULL DEFAULT 123,
  `names` text NOT NULL,
  `adress` text NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipient`
--

INSERT INTO `recipient` (`rec_id`, `names`, `adress`, `phone`) VALUES
(123, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'khazeena', '$2y$10$5V1tXIww3vgH3k7i.XZxxuZjF5Z7xs5Hm4ufhRBTNmf3EuiO1U1pO', '2021-09-06 01:49:38'),
(2, 'Iman', '$2y$10$Gj/jowt.ZtTpHTorcjISI.ckNhHFfYrczLgF0rQEeKNK.MGChBo56', '2021-09-06 01:53:35');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `reg_no` int(11) NOT NULL,
  `typ` text NOT NULL,
  `city` text NOT NULL,
  `branch` int(11) NOT NULL,
  `dps_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`reg_no`, `typ`, `city`, `branch`, `dps_id`) VALUES
(752634673, 'Bike', 'Karachi', 2392396, 16),
(1563082918, 'Truck', 'Karachi', 2392396, 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`br_code`);

--
-- Indexes for table `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`dp_id`),
  ADD KEY `br_codes` (`br_codes`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cust_id`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `br_code` (`br_code`);

--
-- Indexes for table `parcels`
--
ALTER TABLE `parcels`
  ADD PRIMARY KEY (`parcel_id`);

--
-- Indexes for table `recipient`
--
ALTER TABLE `recipient`
  ADD PRIMARY KEY (`rec_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`reg_no`),
  ADD KEY `branch` (`branch`),
  ADD KEY `dps_id` (`dps_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `br_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1930232402;

--
-- AUTO_INCREMENT for table `courier`
--
ALTER TABLE `courier`
  MODIFY `dp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1955883130;

--
-- AUTO_INCREMENT for table `employe`
--
ALTER TABLE `employe`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `parcels`
--
ALTER TABLE `parcels`
  MODIFY `parcel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `reg_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1563082919;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `dps_id` FOREIGN KEY (`dps_id`) REFERENCES `courier` (`dp_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
