-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2021 at 07:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kase3bo`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(12) NOT NULL,
  `article_title` varchar(100) NOT NULL,
  `article_image` varchar(200) NOT NULL,
  `article_text` varchar(2000) NOT NULL,
  `category` varchar(100) NOT NULL,
  `writer_id` int(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `article_title`, `article_image`, `article_text`, `category`, `writer_id`) VALUES
(1, 'Kant burns down', 'building.jpg', 'A lot of market women are Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis iste, modi saepe voluptatem officia commodi in sunt id repellendus nesciunt qui ipsa aliquid rem, architecto natus illum. Iste, deleniti facere.\r\n', 'finance', 1),
(2, 'New Good', 'pic01.jpg\r\n', '', 'finance', 1),
(3, 'New Good', 'pic02.jpg\r\n', '', 'finance', 1),
(4, 'New Good', 'pic03.jpg\r\n', '', 'finance', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_pass` varchar(150) NOT NULL,
  `customer_class` int(4) NOT NULL,
  `customer_contact` varchar(15) NOT NULL,
  `user_role` int(11) DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_class`, `customer_contact`, `user_role`) VALUES
(1, 'princess', 'adwoaasante@gmail.com', '$2y$10$6UK602czm3pOD2i.JO/dSe0QlIz15CSGekRjt5xJYxFDXigUxz9oi', 2022, '0541282099', 2),
(2, 'user@gmail.com', 'adwoaasante88@gmail.com', '$2y$10$8fHlo1TBjMn8J0H5oenJ.Or3DHIXFbgaVyxIK65ol0svKreYYCGiS', 2022, '0541282099', 2),
(5, 'c@d.e', 'c@d.e', '$2y$10$aojqpbOSCxDAClefta86d.8Wg9srnic23BmQfBUhR2k8Rlnqy757O', 2022, '0541282099', 2),
(6, 'c@d.e', 'b@d.e', '$2y$10$rsXRKDiqXODb8QyTDnRRoud2whYsrgGKhYahdGzXPD.Y9uKzy1ESW', 2022, '0541282099', 1),
(7, 'Princess', 'admin@gmail.com', '$2y$10$BKF4/cYfHhdFFbEQTR2GpODG6RL9duDMobqrfzTy40S7klpkYinKG', 2022, '0541282099', 3),
(8, 'k', 'kojo@gmail.com', '$2y$10$2sA5mpoTDj8zdWoYu9rxcehqcQKgHwJ72o7wo9gB9P.2cqYP07h2C', 2022, '0541282099', 3),
(9, 'k', 'kojo1@gmail.com', '$2y$10$05zlYXycKjV9jXb2jK58i.FySfoHVtzBF66ld.BiZA.CJOEzpwE/S', 2022, '0541282099', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(12) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `amt` double NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `currency` text NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `writer_id` (`writer_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_email` (`customer_email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `customer_id_2` (`customer_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `order_id` (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `writer` FOREIGN KEY (`writer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
