-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 02:36 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e7gzly`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'omar', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `complain_id` int(11) NOT NULL,
  `complain_title` text NOT NULL,
  `complain_message` text NOT NULL,
  `user_name` text NOT NULL,
  `user_email` text NOT NULL,
  `user_phone` text NOT NULL,
  `complain_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`complain_id`, `complain_title`, `complain_message`, `user_name`, `user_email`, `user_phone`, `complain_date`) VALUES
(1, 'hi', 'helo', 'mayar', 'mayar@gmail.com', '01150621354', '2023-05-21 08:59:29pm');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL,
  `orders_date` date NOT NULL,
  `reserve_date` date NOT NULL,
  `orders_total` text NOT NULL,
  `no_people` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `partner_id` int(11) NOT NULL,
  `partner_name` text NOT NULL,
  `partner_email` text NOT NULL,
  `partner_password` text NOT NULL,
  `partner_category` text NOT NULL,
  `partner_address` text NOT NULL,
  `partner_menu` text NOT NULL,
  `partner_phone` text NOT NULL,
  `partner_img1` text NOT NULL,
  `partner_img2` text NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`partner_id`, `partner_name`, `partner_email`, `partner_password`, `partner_category`, `partner_address`, `partner_menu`, `partner_phone`, `partner_img1`, `partner_img2`, `admin_id`) VALUES
(5, 'Dahab', 'info@dahab.com', '12345', 'Cafe', 'nasr city', '9c53714d-45a2-4185-86b0-2d38a98635ce.jpg', '123422', '71wPGTSsQqL._AC_SX679_.jpg', '61bNMX7LO-L._AC_UL330_SR330,330_.jpg', 1),
(6, 'Bazoka', 'info@bazoka.com', '1234', 'Fried Chicken', 'maadi', 'clipart-cutlery-128x128-304a.png', '122', '61bNMX7LO-L._AC_UL330_SR330,330_.jpg', '9c53714d-45a2-4185-86b0-2d38a98635ce.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `partner_service`
--

CREATE TABLE `partner_service` (
  `partner_service_id` int(11) NOT NULL,
  `partner_service_cost` text NOT NULL,
  `partner_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner_service`
--

INSERT INTO `partner_service` (`partner_service_id`, `partner_service_cost`, `partner_id`, `service_id`) VALUES
(1, '100', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`) VALUES
(1, 'Business Dinner'),
(2, 'Couple Date'),
(3, 'Birthday Party'),
(4, 'Family Outing');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_email` text NOT NULL,
  `user_phone` text NOT NULL,
  `user_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_phone`, `user_password`) VALUES
(1, 'mayar', 'mayar@gmail.com', '01150621354', '00000');

-- --------------------------------------------------------

--
-- Table structure for table `user_service`
--

CREATE TABLE `user_service` (
  `user_service_id` int(11) NOT NULL,
  `user_service_people` int(11) NOT NULL,
  `user_service_send_date` date NOT NULL,
  `user_service_date` text NOT NULL,
  `user_service_details` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_service`
--

INSERT INTO `user_service` (`user_service_id`, `user_service_people`, `user_service_send_date`, `user_service_date`, `user_service_details`, `user_id`, `service_id`) VALUES
(1, 4, '2023-05-22', '05/22/2023 2:07 PM', 'dinner for our company', 1, 1),
(2, 3, '2023-05-22', '05/22/2023 2:33 PM', 'a', 1, 1),
(3, 3, '2023-05-22', '05/22/2023 2:33 PM', 'a', 1, 1),
(4, 3, '2023-05-22', '05/22/2023 2:33 PM', 'a', 1, 1),
(5, 43, '2023-05-22', '06/08/2023 2:57 PM', '23', 1, 1),
(6, 43, '2023-05-22', '06/08/2023 2:57 PM', '23', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`complain_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`partner_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `partner_service`
--
ALTER TABLE `partner_service`
  ADD PRIMARY KEY (`partner_service_id`),
  ADD KEY `partner_id` (`partner_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_service`
--
ALTER TABLE `user_service`
  ADD PRIMARY KEY (`user_service_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_service_ibfk_1` (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `complain_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `partner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `partner_service`
--
ALTER TABLE `partner_service`
  MODIFY `partner_service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_service`
--
ALTER TABLE `user_service`
  MODIFY `user_service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `service` (`service_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `partner`
--
ALTER TABLE `partner`
  ADD CONSTRAINT `partner_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `partner_service`
--
ALTER TABLE `partner_service`
  ADD CONSTRAINT `partner_service_ibfk_1` FOREIGN KEY (`partner_id`) REFERENCES `partner` (`partner_id`),
  ADD CONSTRAINT `partner_service_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `service` (`service_id`);

--
-- Constraints for table `user_service`
--
ALTER TABLE `user_service`
  ADD CONSTRAINT `user_service_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `service` (`service_id`),
  ADD CONSTRAINT `user_service_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
