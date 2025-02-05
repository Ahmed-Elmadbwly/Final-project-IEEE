-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2025 at 09:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_ieee`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `about_me` text NOT NULL,
  `our_mission` text NOT NULL,
  `our_vision` text NOT NULL,
  `our_values` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `about_me`, `our_mission`, `our_vision`, `our_values`) VALUES
(1, 'We are a company that has been providing exceptional products and services since 1999. Our goal is to deliver value and quality to our customers while maintaining high standards of integrity and innovation.', 'Our mission is to inspire trust and loyalty in our customers by providing high-quality products and exceptional customer service that exceeds expectations.', 'Our vision is to become a global leader in our industry, recognized for our innovative solutions, dedication to sustainability, and commitment to excellence.', 'We value integrity, innovation, teamwork, and customer satisfaction. These principles guide our actions and decision-making every day.');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`) VALUES
(1, 'Bedroom', './assets/images/bedroom.png'),
(2, 'Matrass', './assets/images/matrass.png'),
(3, 'Outdoor', './assets/images/outdoors.png'),
(4, 'Sofa', './assets/images/product-bigsofa.png'),
(5, 'Kitchen', './assets/images/kitchen.png'),
(6, 'Living Room', './assets/images/living-room.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `discount_price` decimal(10,2) DEFAULT NULL,
  `discount_percentage` int(11) DEFAULT NULL,
  `rating` float DEFAULT 0,
  `reviews` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `discount_price`, `discount_percentage`, `rating`, `reviews`) VALUES
(1, 'Sofa', './assets/images/product-sofa.png', 500.00, 450.00, 10, 4, 38),
(2, 'Chair', './assets/images/product-chair.png', 100.00, 90.00, 15, 4.5, 20),
(3, 'Kitchen', './assets/images/kitchen.png', 250.00, 150.00, 40, 4.2, 15),
(4, 'Header', './assets/images/header-bg.jpeg', 800.00, 720.00, 13, 4.7, 25),
(5, 'Bedroom', './assets/images/bedroom.png', 50.00, 45.00, 10, 4.3, 30),
(6, 'Living-room', './assets/images/living-room.png', 1200.00, 1100.00, 8, 4.6, 18),
(7, 'Table', './assets/images/product-table.png', 300.00, 270.00, 20, 4.4, 22),
(8, 'Lamp', './assets/images/product-sofa.png', 80.00, 72.00, 30, 4.1, 14),
(9, 'TV Unit', './assets/images/product-sofa.png', 600.00, 540.00, 11, 4.5, 19),
(10, 'Bookshelf', './assets/images/product-sofa.png', 400.00, NULL, 5, 4.3, 16);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Kimberley Luna', 'nyxoho@mailinator.com', '$2y$10$BCGO6TRjEvU2rlAhdXRUheo5T2BS4TrAk./.gQdxHzPW2n.cqjK1C'),
(2, 'Ahmed Abouzaid', 'aabouzaid@gmail.com', '$2y$10$hhSThzFqA4H0LQbfUL2RWeeJFr6jQ5RQkBnqTEBYIGwelO4uCYF7m'),
(3, 'Aline Mckay', 'givazupef@mailinator.com', '$2y$10$n1jhhDhd.JnAexpDM168suVPKR9w4oztLLBDXdrsZJu4nkT9P2AYK'),
(4, 'Kathleen Rodgers', 'rosak@mailinator.com', '$2y$10$1UXo2jCIvbXJ4BHu1D8ttega80H8GhfffL6ybTM4.BQsD3Pc3bahG'),
(5, 'Nissim Everett', 'hase@mailinator.com', '$2y$10$Sx0eOQsqHymdpU1u8vfznePnY4RRfpSj3PrOKW7vngpQnqWIKnr6m');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
