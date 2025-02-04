-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2025 at 05:20 PM
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
(2, 'Chair', './assets/images/product-chair.png', 100.00, 90.00, 10, 4.5, 20),
(3, 'Kitchen', './assets/images/kitchen.png', 250.00, NULL, NULL, 4.2, 15),
(4, 'Header', './assets/images/header-bg.jpeg', 800.00, 720.00, 10, 4.7, 25),
(5, 'Bedroom', './assets/images/bedroom.png', 50.00, 45.00, 10, 4.3, 30),
(6, 'Living-room', './assets/images/living-room.png', 1200.00, 1100.00, 8, 4.6, 18);

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
(4, 'Kathleen Rodgers', 'rosak@mailinator.com', '$2y$10$1UXo2jCIvbXJ4BHu1D8ttega80H8GhfffL6ybTM4.BQsD3Pc3bahG');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
