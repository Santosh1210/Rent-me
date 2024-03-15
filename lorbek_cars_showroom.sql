-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2024 at 01:44 PM
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
-- Database: `lorbek_cars_showroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date_time` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `first_name`, `last_name`, `email`, `phone`, `type`, `date_time`, `status`) VALUES
(2, 'om', 'bhagwat', 'om@gmail.com', '123326542', 'Sports', '2024-01-30T17:35', 1),
(3, 'Om', 'Bhagwat', 'om@gmail.com', '9403343871', 'pickup', '2024-01-31T19:08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `carparts`
--

CREATE TABLE `carparts` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carparts`
--

INSERT INTO `carparts` (`id`, `name`, `price`, `image`, `description`) VALUES
(3, 'Rubber new Tyre', '5600', './upload/Tyres.jpg', 'This is the new tyre'),
(4, 'Steering New', '350', './upload/steering.jpeg', 'Strong steering of car');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `cond` varchar(255) NOT NULL,
  `mileage` varchar(255) NOT NULL,
  `transmission` varchar(255) NOT NULL,
  `fueltype` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `price`, `image`, `cond`, `mileage`, `transmission`, `fueltype`, `year`, `description`, `brand`) VALUES
(1, 'Mercedes Benz Car new', 45000, './upload/mercedez.jpg', '', '20', 'Automatic', 'Disel', '2023', '', 'Mercedes'),
(2, 'Yellow Ferrari 458', 90250, './upload/ferrari.jpeg', 'New', '10', 'Manual', 'Hybrid', '2022', 'This is best yellow ferrari car', 'Ferrari'),
(3, 'Black Audi Q7', 44350, './upload/audi.jpg', 'Good', '30', 'Automatic', 'Hybrid', '2020', 'Best car black audi in good condition', 'Audi'),
(4, 'BMW Sports Car updated', 78760, './upload/bmw.jpg', '', '20', 'Automatic', 'Petrol', '2023', '', 'BMW');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `loan_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `name`, `price`, `image`, `user_id`, `quantity`, `status`, `loan_id`) VALUES
(1, 'Rubber new Tyre', '5600', './upload/Tyres.jpg', '3', '1', '2', ''),
(4, 'Mercedes Benz Car new', '45000', './upload/mercedez.jpg', '3', '1', '2', ''),
(5, 'Yellow Ferrari 458', '90250', './upload/ferrari.jpeg', '3', '1', '2', ''),
(6, 'Rubber new Tyre', '5600', './upload/Tyres.jpg', '3', '1', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `phone`, `message`) VALUES
(48, 'Om Bhagwat', 'om@gmail.com', '9403343871', 'Demo enquiry'),
(49, 'Om Bhagwat', 'om@gmail.com', '9403343871', 'Demo enq'),
(50, 'a', 'a@123.com', '123456798', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `birth_date` varchar(255) NOT NULL,
  `loan_id` varchar(255) NOT NULL,
  `loan_proof` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`, `birth_date`, `loan_id`, `loan_proof`, `amount`, `status`, `user_id`) VALUES
(7, 'Om', 'Bhagwat', 'om@gmail.com', '9403343871', 'Dharangaon, Maharashtra, India', '2024-01-31', '', './upload/Screenshot__818_-removebg-preview.png', '1768', '1', '2'),
(8, 'Om', 'Bhagwat', 'om@gmail.com', '9403343871', 'Dharangaon, Maharashtra, India', '2024-01-31', '', './upload/audi.jpg', '450', '1', '2'),
(9, 'Om', 'Bhagwat', 'om@gmail.com', '9403343871', 'Dharangaon, Maharashtra, India', '2024-01-31', '', './upload/bmw.jpg', '5600', '1', '2'),
(10, 'Demo', 'User', 'demo@user.com', '9874563215', 'Demo address', '2024-02-01', '', './upload/bmw.jpg', '50600', '1', '3'),
(11, 'Demo', 'User', 'demo@user.com', '9874563215', 'Demo address', '2024-02-01', '', './upload/bmw.jpg', '95850', '1', '3');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `review_msg` varchar(255) NOT NULL,
  `carid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `email`, `review_msg`, `carid`) VALUES
(0, 'Demo User', 'demo@user.com', 'Good Car', ''),
(0, 'Demo User', 'demo@user.com', 'Good Car', ''),
(0, 'Demo User', 'demo@user.com', 'Happy car', '1'),
(0, 'Demo User', 'demo@user.com', 'Happy car', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birth_date` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `gender`, `birth_date`, `address`, `email`, `phone`, `password`, `status`) VALUES
(1, 'Admin', 'admin', 'admin', 'Male', '2024-01-31', 'Admin', 'admin@123.com', '9856412387', '$2y$10$deXt2Jrs9mJcmhiqtYb3HuVPAWZiVUdwSXnuUyNj8CRgNQhNnpYPK', 1),
(2, 'om_bhagwat', 'Om', 'Bhagwat', 'Male', '2024-01-31', 'Dharangaon, Maharashtra, India', 'om@gmail.com', '9403343871', '$2y$10$il6uSThThLa834JMab9uCupLtp7wWcOAq1w0h3Y9s1ZXRAYthB05S', 0),
(3, 'demo_user', 'Demo', 'User', 'Male', '2024-02-01', 'Demo address', 'demo@user.com', '9874563215', '$2y$10$LcThy0bvVYfH/jt30AJZnuoJGMBuzsqfo75AZuqohdJPMeBbgqe6q', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carparts`
--
ALTER TABLE `carparts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
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
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carparts`
--
ALTER TABLE `carparts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
