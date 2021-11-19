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
  `article_title` varchar(250) NOT NULL,
  `article_image` varchar(500) NOT NULL,
  `article_text` varchar(5000) NOT NULL,
  `category` varchar(100) NOT NULL,
  `writer_id` int(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `article_title`, `article_image`, `article_text`, `category`, `writer_id`) VALUES
(1, 'Kant burns down', '1.png', 'A lot of market women are Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis iste, modi saepe voluptatem officia commodi in sunt id repellendus nesciunt qui ipsa aliquid rem, architecto natus illum. Iste, deleniti facere.\r\n', 'finance', 7),
(6, 'IPhones out of stock!', 'Pink Tropical Thank You Postcard.png', 'No more iPhones for students! Lorem', 'technology', 7),
(8, 'Princess', 'main_image.png', 'Hello! ', 'technology', 7),
(9, '3 Lifestyle Practices To Become A Healthier Entrepreneur', 'entrepreneur.jpeg', 'By Cooper Harris, Founder of Klickly. Google\'s \"Young Innovator\" and L\'Oréal\'s \"Digital Woman of the Year\" nominee. Featured in Forbes, Inc. and Mashable.', 'lifestyle', 7),
(10, 'Kenosha Lifestyle and Retirement Expo helps seniors plan for the future', 'students.jpg', 'Among the best things about retirement is looking ahead to what lies beyond going to work every day. Helping adults plan for that future is what took place at the Lifestyle & Retirement Expo, held Tuesday at the Parkway Chateau, 12304 75th St.\r\n', 'lifestyle', 7),
(12, 'Sprawling $30-Million Estate In The Heart Of Colorado Embraces The Outdoor Lifestyle', 'estate.jpeg', 'This 145-acre estate property outside Edwards, Colorado, is all about enjoying the great outdoors. The aspen-dotted rolling hills contain 10 miles of custom trails designed for hiking, snowshoeing and snowmobiling. Along the paths are four picnic and play areas to rest and take in the scenery. One such stop features a wooden drawbridge and a timber castle.', 'lifestyle', 7),
(18, 'Diabesity: The worse by-product of an unhealthy lifestyle', 'obesity.jpg', 'Everyone has heard about diabetes and obesity. But have you heard about Diabesity? Diabesity is a condition in which the person is suffering from both diabetes and obesity together. We know that both diabetes and obesity are deadly; they increase the chances of heart disease, stroke, kidney disease etc. Now imagine when they both happen together. How drastically they will eat up your body and make your life disease-some. The likelihood of complication gets magnified exponentially and it can drastically impact the quality and quantity of life.', 'lifestyle', 7);

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
(9, 'k', 'kojo1@gmail.com', '$2y$10$05zlYXycKjV9jXb2jK58i.FySfoHVtzBF66ld.BiZA.CJOEzpwE/S', 2022, '0541282099', 1),
(10, 'Princess', 'writer@gmail.com', '$2y$10$wxCwnQZLXYGmpO04tWcWXu92e9HVlR27asw3bsV8d/g40FhAd/4Ky', 0, '', 2),
(11, '', 'reader@gmail.com', '$2y$10$QuEAVb401O7f.RFMmvPNJeLZqWLImm6N1KZwWrweBoFeDMXo95BUC', 0, '', 1),
(12, 'papa', 'papa@gmail.com', '$2y$10$xATruWtyTRb/BQN9Wd72OOybUxdo5jlMBjDovZtlyusYd8muCg.1a', 2022, '+10541282099', 1);

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

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `invoice_no`, `order_date`, `order_status`) VALUES
(1, 1, 234, '2021-11-09', 'pending'),
(2, 12, 1706473279, '2021-11-18', 'success'),
(3, 7, 687331557, '2021-11-19', 'success'),
(4, 7, 386070657, '2021-11-19', 'success');

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
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `amt`, `customer_id`, `order_id`, `currency`, `payment_date`) VALUES
(1, 10, 12, 2, 'GHS', '2021-11-18'),
(2, 20, 12, 2, 'cedi', '0000-00-00'),
(3, 20, 12, 2, '', '2021-11-18'),
(4, 10, 7, 3, 'GHS', '2021-11-19'),
(5, 10, 7, 4, 'GHS', '2021-11-19');

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
  MODIFY `article_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
