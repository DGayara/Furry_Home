-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2025 at 04:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furry_friends`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `pet_name` varchar(50) NOT NULL,
  `pet_id` varchar(30) NOT NULL,
  `living_type` varchar(50) NOT NULL,
  `ownership` varchar(20) NOT NULL,
  `landlord_approval` varchar(10) NOT NULL,
  `fence_yard` varchar(10) NOT NULL,
  `household` text NOT NULL,
  `owned_pets` varchar(10) NOT NULL,
  `caretaker` varchar(100) NOT NULL,
  `pet_time` varchar(20) NOT NULL,
  `alone_time` int(11) NOT NULL,
  `vacation_plans` text NOT NULL,
  `adoption_reasons` text NOT NULL,
  `veterinarian` varchar(10) NOT NULL,
  `vet_details` varchar(255) NOT NULL,
  `requirement` text NOT NULL,
  `agreement1` tinyint(1) NOT NULL,
  `agreement2` tinyint(1) NOT NULL,
  `agreement3` tinyint(1) NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `user_id`, `name`, `phone`, `email`, `address`, `zipcode`, `pet_name`, `pet_id`, `living_type`, `ownership`, `landlord_approval`, `fence_yard`, `household`, `owned_pets`, `caretaker`, `pet_time`, `alone_time`, `vacation_plans`, `adoption_reasons`, `veterinarian`, `vet_details`, `requirement`, `agreement1`, `agreement2`, `agreement3`, `submitted_at`) VALUES
(1, 7, 'Dinuri Gayara', '0774582541', 'ddd34@gmail.com', 'No:12,Kekanadura,Matara.', '88100', 'Buddy', '002', 'apartment', 'own', 'yes', 'yes', 'No', 'yes', 'dffhdu', 'indoors', 0, 'sddgfgkfgjgr rnkerjo3ieijdfjc', 'adfvhjk mkiyttr', 'yes', '-', '-', 1, 1, 1, '2025-04-20 15:45:41'),
(2, 7, 'ddd ', '0714532789', 'ddd34@gmail.com', 'No:12,jaya road,weerawila,Hambanthota.', '82110', 'Max', '001', 'house', 'own', 'yes', 'yes', 'one child', 'yes', '-', 'outdoors', 3, 'afahshasjk mvkkioeiue nnjfhdisisoalamc nfjdhfdjwaskdddkalsk,ada', 'sddggfg gbghopsssvsdaddv', 'no', '-', 'sdhsajks dnidwoieowoepqowkvndbquwifjcv dfnjwhdiqwjwod', 1, 1, 1, '2025-04-21 14:00:05'),
(3, 7, 'ddd ', '0714532789', 'ddd34@gmail.com', 'No:12,jaya road,weerawila,Hambanthota.', '82110', 'Max', '001', 'house', 'own', 'yes', 'yes', 'one child', 'yes', '-', 'outdoors', 3, 'afahshasjk mvkkioeiue nnjfhdisisoalamc nfjdhfdjwaskdddkalsk,ada', 'sddggfg gbghopsssvsdaddv', 'no', '-', 'sdhsajks dnidwoieowoepqowkvndbquwifjcv dfnjwhdiqwjwod', 1, 1, 1, '2025-04-21 14:00:22'),
(4, 7, 'ddd ', '0714532789', 'ddd34@gmail.com', 'No:12,jaya road,weerawila,Hambanthota.', '82110', 'Thumper', '010', 'house', 'own', 'yes', 'yes', 'one child', 'yes', '-', 'indoors', 1, 'sdfghjkkk njkkoopop', 'qewtuopgh bhyuupknbsvferwwiksdndbdk', 'yes', '-', 'csaqto bfdsaerynh nbvcxswwryik', 1, 1, 1, '2025-04-21 14:09:35'),
(5, 7, 'ddd ', '0714532789', 'ddd34@gmail.com', 'No:12,jaya road,weerawila,Hambanthota.', '82110', 'Neko', '008', 'house', 'own', 'yes', 'yes', 'one child', 'yes', '-', 'outdoors', 1, 'sdggolp nkok', 'ccghikpooutew bggfsaw', 'yes', '-', '-', 1, 1, 1, '2025-04-21 14:32:02');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `submitted` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `submitted`) VALUES
(1, 'Dinuri', 'ddd34@gmail.com', 'pet adoption', 'daffhbjnmxcyr njdnsjmk,loewoeuuyeduv bfhdjsiuiiasajgysfyutshiauoc', '2025-04-19 17:48:56'),
(2, 'ddd', 'ddd34@gmail.com', 'hbjhasjkak', 'qnjdkkcosk mnkcdjfoipdowpoewwy', '2025-04-21 13:55:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Dinu', 'dgayara11@gmail.com', '$2y$10$72cbFGRtBgUgt1QgRSauwel'),
(2, 'Dinu', 'dgayara11@gmail.com', '$2y$10$l3eZYeb0qVHlfZfdjzeQRed'),
(3, 'sanuu', 'sanu16@gmail.com', '$2y$10$2Iaxc713mzl52UnDYCICr.6'),
(4, 'mani', 'mani98@gmail.com', '$2y$10$4lIg9CG71hXGxPVFa5ciB.7'),
(5, 'aaa', 'aaa12@gmail.com', '$2y$10$yK90lVxzXSrhsmnTtZ0ZSOy'),
(6, '', '', '$2y$10$kLK20XtvFz02G7SWgGbcu.AJCxtPb8Z/EqQkT1lX1BPh70UL7f9Yy'),
(7, 'ddd', 'ddd34@gmail.com', '$2y$10$oF9ypsmEL.Ar/ZYDwZ0v4.C8l8gFP0iUffOvu4puNbWKGKUiGqimG'),
(8, 'Lisa', 'lisa54@gmail.com', '$2y$10$2c80Y6.OB6vkQ4xShUPU.OVcfovc3sux1/7OhgKESQxNpuxr2X/Fm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
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
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
