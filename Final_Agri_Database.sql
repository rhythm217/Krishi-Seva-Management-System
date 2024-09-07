-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 06:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agri`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

CREATE TABLE `admin_register` (
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_register`
--

INSERT INTO `admin_register` (`name`, `category`, `email`, `password`, `mobile`, `address`) VALUES
('Admin', 'Government', 'Admin@gmail.com', 'Admin@5050#2023', '9429188625', 'Dehli');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `emailid` varchar(100) NOT NULL,
  `contactno` varchar(100) NOT NULL,
  `queryField` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crop`
--

CREATE TABLE `crop` (
  `crop_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `day` int(100) NOT NULL,
  `farmer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crop`
--

INSERT INTO `crop` (`crop_id`, `name`, `quantity`, `day`, `farmer_id`) VALUES
(101, 'Bajara', '500', 355, 1),
(102, 'Wheat', '100', 555, 2);

-- --------------------------------------------------------

--
-- Table structure for table `farmer_contact`
--

CREATE TABLE `farmer_contact` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Phone_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmer_contact`
--

INSERT INTO `farmer_contact` (`id`, `Name`, `Phone_no`, `email`, `Message`) VALUES
(10, 'Aman', '963', 'bittusharmashiv@gmail.com', 'I wanna to discuss about Worker Behavior\'s !!'),
(11, 'Sagar', '8523697415', 'iit2021200@iiita.ac.in', 'I wanna to discuss about Worker Behavior\'s !!');

-- --------------------------------------------------------

--
-- Table structure for table `farmer_register`
--

CREATE TABLE `farmer_register` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmer_register`
--

INSERT INTO `farmer_register` (`id`, `name`, `category`, `email`, `password`, `mobile`, `address`) VALUES
(1, 'Aman', 'Farmer', 'aman@gmail.com', '123456', '9632587412', 'Vadodara Gujarat - 390014'),
(2, 'sagar', 'Farmer', 'sagar@gmail.com', '123456', '9429188625', 'B/103');

-- --------------------------------------------------------

--
-- Table structure for table `loan_request`
--

CREATE TABLE `loan_request` (
  `id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `repay_date` date NOT NULL,
  `identification_img` varchar(255) NOT NULL,
  `status` enum('Pending','Approved','Denied') NOT NULL DEFAULT 'Pending',
  `farmer_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `machine`
--

CREATE TABLE `machine` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `dated` date NOT NULL,
  `image` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `machine`
--

INSERT INTO `machine` (`id`, `name`, `model`, `dated`, `image`) VALUES
(8, 'Tractor', 'ML5050', '2023-05-07', 'uploads/Screenshot 2022-11-06 113903.png'),
(10, 'Truck', 'ML5205', '2023-05-10', 'upload/katie-harp-Em96eDRJPD8-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `scheme`
--

CREATE TABLE `scheme` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `doc` varchar(1000) DEFAULT NULL,
  `date` date NOT NULL,
  `image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scheme`
--

INSERT INTO `scheme` (`id`, `name`, `doc`, `date`, `image`) VALUES
(14, 'Yojana', '../upload/Internship Resources.pdf.PDF', '2023-05-10', 0x2e2e2f75706c6f61642f53637265656e73686f7420323032322d31302d3034203130333230342e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `worker_approval`
--

CREATE TABLE `worker_approval` (
  `Sr_no.` int(11) NOT NULL,
  `worker_id` int(255) NOT NULL,
  `worker_name` varchar(100) NOT NULL,
  `farmer_id` int(255) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `worker_approval`
--

INSERT INTO `worker_approval` (`Sr_no.`, `worker_id`, `worker_name`, `farmer_id`, `description`) VALUES
(10, 5, 'deepanshu', 1, 'Okay I\'m going to do this.'),
(11, 3, 'Gokul', 1, 'Okay I will it for 500 Rs per Day.'),
(12, 5, 'deepanshu', 1, 'Okay I\'m going to do this.'),
(13, 5, 'deepanshu', 1, 'Okay I going to'),
(14, 5, 'Deepanshu', 2, 'Okay I\'m going to do this.'),
(15, 5, 'Deepanshu', 2, 'Okay'),
(16, 5, 'Deepanshu', 1, 'Okay I\'m going to do this.'),
(17, 5, 'Deepanshu', 2, 'Okay I\'m going to do this.'),
(18, 5, 'Deepanshu', 2, 'Okay I\'m going to do this.'),
(19, 5, 'Deepanshu', 2, 'sdfghjk');

-- --------------------------------------------------------

--
-- Table structure for table `worker_register`
--

CREATE TABLE `worker_register` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `resume` varchar(100) NOT NULL,
  `work` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `worker_register`
--

INSERT INTO `worker_register` (`id`, `name`, `email`, `password`, `address`, `contact`, `resume`, `work`, `salary`) VALUES
(4, 'Nikhil', 'sagar@gmail.com', '123456', 'Mumbai Andheri - 365895', '8469157781', 'CN Solutions - Google Drive.pdf', 'Labour Work', '1'),
(5, 'Deepanshu', 'dee@gmail.com', '111111', 'Vadodara Gujarat - 390014', '7418529634', '𝗦𝗤𝗟 𝗖𝗵𝗲𝗮𝘁 𝗦𝗵𝗲𝗲𝘁 .pdf', 'Transportation', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `worker_request`
--

CREATE TABLE `worker_request` (
  `id` int(11) NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `work` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `worker_request`
--

INSERT INTO `worker_request` (`id`, `farmer_id`, `name`, `work`, `contact`, `address`, `salary`, `date_from`, `date_to`) VALUES
(17, 1, 'Aman', 'Cultivating Work', '9632587412', 'Mumbai Andheri - 365895', '5000', '2023-05-05', '2023-05-30'),
(18, 2, 'sagar', 'Transportation Work', '9429188625', 'Mumbai Andheri - 365895', '500', '2023-05-10', '2023-05-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crop`
--
ALTER TABLE `crop`
  ADD PRIMARY KEY (`crop_id`);

--
-- Indexes for table `farmer_contact`
--
ALTER TABLE `farmer_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmer_register`
--
ALTER TABLE `farmer_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_request`
--
ALTER TABLE `loan_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `machine`
--
ALTER TABLE `machine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scheme`
--
ALTER TABLE `scheme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `worker_approval`
--
ALTER TABLE `worker_approval`
  ADD PRIMARY KEY (`Sr_no.`);

--
-- Indexes for table `worker_register`
--
ALTER TABLE `worker_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `worker_request`
--
ALTER TABLE `worker_request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farmer_contact`
--
ALTER TABLE `farmer_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `farmer_register`
--
ALTER TABLE `farmer_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loan_request`
--
ALTER TABLE `loan_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `machine`
--
ALTER TABLE `machine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `scheme`
--
ALTER TABLE `scheme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `worker_approval`
--
ALTER TABLE `worker_approval`
  MODIFY `Sr_no.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `worker_register`
--
ALTER TABLE `worker_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `worker_request`
--
ALTER TABLE `worker_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
