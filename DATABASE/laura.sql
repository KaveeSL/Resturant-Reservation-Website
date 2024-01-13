-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 13, 2024 at 09:02 AM
-- Server version: 8.0.31
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laura`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(18, 'Main Meals', NULL, '2023-07-18 22:24:18', '2023-07-18 22:25:56'),
(11, 'Pizza', '', '2023-07-03 20:13:20', '2023-07-08 20:47:17'),
(10, 'Beverages', '', '2023-07-03 20:13:11', '2023-07-08 20:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` varchar(50) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_code` varchar(10) DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_image`, `product_code`, `qty`, `brand`, `category`, `created_at`, `updated_at`) VALUES
(24, 'Tandoori Chicken Pizza', '3800', '64a310b200965_pizza-tandoori-chicken.jpg', '01', 0, '', 'Pizza', '2023-07-03 20:16:34', '2023-07-09 15:43:52'),
(25, 'Cheese Lovers    Pizza', '2650', '64a310bb75cba_Cheese-lover.jpeg', '02', 0, 'Veg', 'Pizza', '2023-07-03 20:18:13', '2023-07-04 00:17:19'),
(26, 'Super Supreme Pizza', '6800', '64a310c5517ee_Screenshot 2023-07-03 234705.png', '03', 0, 'Non Veg', 'Pizza', '2023-07-03 20:49:09', '2023-07-04 00:17:27'),
(27, 'Chicken Fried Rice', '850', '64a2e82f53458_chicken_fried_rice00032a-1200x1200-1.jpg', '04', 0, 'Non Veg', 'Main Meals', '2023-07-03 20:54:31', '2023-07-04 00:17:33'),
(29, 'Chicken Kottu', '580', '64a2e868838e0_shutterstock_1050903170.jpg', '06', 0, 'Non Veg', 'Main Meals', '2023-07-03 20:55:28', '2023-07-04 00:17:47'),
(30, 'Chocolate Milkshake', '430', '64a2e8908221f_coffee-milkshake-square.jpg', '07', 0, 'Non-alco', 'Beverages', '2023-07-03 20:56:08', '2023-07-04 00:19:19'),
(31, 'Strawberry Milkshake', '550', '64a2e8b1959aa_How-to-Make-a-Milkshake-Square.jpg', '07', 0, 'Non-alco', 'Beverages', '2023-07-03 20:56:41', '2023-07-04 00:19:24'),
(32, 'Lime Juice', '280', '64a2e8cd625d0_lime-juice-limeade-d.jpeg', '07', 0, 'Non-alco', 'Beverages', '2023-07-03 20:57:09', '2023-07-04 00:19:29'),
(37, 'Prawns Fried Noodles', '850', '64aab9b8275c8_64a2e84b65c1e_Hong-Kong-Pan-Fried-Noodles-thumbnail-500x375.jpg', '09', NULL, NULL, 'Main Meals', '2023-07-09 19:14:24', NULL),
(39, 'chicken biryani', '890', '64b53e1d42ea5_chicken-hyderabadi-biryani-01.jpg', '010', NULL, NULL, 'Main Meals', '2023-07-17 18:41:57', NULL),
(40, 'Watermelon Mojito', '650', '64b53ee556463_2584502_bradf_watermelon_ginger_mojitos_110_1-61ea61129cf24b11ad286371baa6f88a-5ee252630fa54cb6ac381e474ed33519.jpg', '011', NULL, NULL, 'Beverages', '2023-07-17 18:45:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

DROP TABLE IF EXISTS `table`;
CREATE TABLE IF NOT EXISTS `table` (
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `guests` int NOT NULL,
  `number` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table`
--

INSERT INTO `table` (`name`, `email`, `date`, `time`, `guests`, `number`) VALUES
('Inoka Amarasinghe', '11@gmail.com', '2023-07-06', '13:17:00', 4, '0'),
('Inoka Amarasinghe', '11@gmail.com', '2023-07-06', '13:17:00', 4, '0'),
('nanayakkara', 'nana@gmail.com', '2023-07-04', '18:01:00', 2, '0772456787'),
('nanayakkara', 'nana@gmail.com', '2023-07-04', '18:01:00', 2, '0772456787'),
('manu', '11222@gmail.com', '2023-06-30', '01:17:00', 2, '0772456787'),
('pamidu', 'pami@gmail.com', '2023-07-04', '16:12:00', 2, '080735721');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `user_type` varchar(5) DEFAULT 'user',
  `reg_date` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `full_name`, `email`, `address`, `city`, `phone`, `user_type`, `reg_date`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', NULL, NULL, NULL, 'admin', '2023-06-11 01:30:03'),
(2, 'oshan', '1234', 'Oshan', 'oshan@gmail.com', NULL, NULL, NULL, 'user', '2023-06-11 01:31:53'),
(3, 'vikum', '5678', 'bhashitha', 'vikum@gmail.com', NULL, NULL, NULL, 'user', '2023-06-11 03:38:42'),
(23, 'Savith', '9101', 'Olitha', 'Savith@gmail.com', NULL, NULL, NULL, 'user', '2023-06-11 03:42:14'),
(25, 'Danisha', '1111', 'vishvani', 'rodrigo@gmail.com', NULL, NULL, NULL, 'user', '2023-06-11 03:44:48'),
(26, 'pulni', '2222', 'wijebandara', 'percy@gmail.com', NULL, NULL, NULL, 'user', '2023-06-11 03:45:18'),
(31, 'ino', '111', 'Inoka Amarasinghe', '11@gmail.com', NULL, NULL, NULL, 'user', '2023-07-08 20:43:02'),
(32, 'Kaveesha_Nanayakkara', '123', 'Kaveesha Nanayakkara', 'k@gmail.com', NULL, NULL, NULL, 'user', '2023-07-09 17:07:45'),
(34, 'kk', '123', 'kk', 'kk@gmail.com', 'kk', 'll', '78787899', 'admin', '0000-00-00 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
