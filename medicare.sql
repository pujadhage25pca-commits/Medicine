-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2024 at 11:50 AM
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
-- Database: `medicare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'adminpass');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phno`, `email`, `message`) VALUES
(1, 'Dhokane Sanskruti', '9384895845', 'sanskruti@gmail.com', 'I want to buy medicines'),
(2, 'Dhokane Sanskruti', '9384895845', 'sanskruti@gmail.com', 'I want to buy medicines'),
(3, 'Dhokane Sanskruti', '9384895845', 'sanskruti@gmail.com', 'I want to buy medicines'),
(4, 'Dhokane Sanskruti', '9384895845', 'sanskruti@gmail.com', 'I want to buy medicines');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(20) NOT NULL,
  `order_id` int(20) NOT NULL,
  `med` varchar(20) NOT NULL,
  `price` int(20) NOT NULL,
  `quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `order_id`, `med`, `price`, `quantity`) VALUES
(1, 1, '0', 30, 2),
(2, 1, '0', 10, 2),
(3, 2, 'Advotim', 30, 1),
(4, 3, 'Advotim', 30, 1),
(5, 4, 'Koflet', 30, 1),
(6, 5, 'Koflet', 30, 1),
(25, 20, 'Advotim', 30, 2),
(26, 21, 'Koflet', 30, 1),
(27, 22, 'Himalaya', 15, 2),
(28, 23, 'Himalaya', 15, 2),
(29, 24, 'Advotim', 30, 1),
(30, 25, 'dettol', 70, 1),
(31, 26, 'Himalaya', 15, 1),
(32, 27, 'Sunscreen', 75, 1),
(33, 28, 'Nicip', 30, 1),
(34, 29, 'Nicip', 30, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ordermanager`
--

CREATE TABLE `ordermanager` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `addr` varchar(20) NOT NULL,
  `paymode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordermanager`
--

INSERT INTO `ordermanager` (`id`, `name`, `phno`, `addr`, `paymode`) VALUES
(1, 'Sakshi', '9384895845', 'umbre', 'COD'),
(2, 'SONAWANE SAKSHI', '8769564398', 'vambori', 'COD'),
(3, 'SONAWANE SAKSHI', '9384895845', 'devlali', 'COD'),
(4, 'shreya s', '9384895845', 'devlali', 'COD'),
(5, 'shreya s', '9384895845', 'devlali', 'COD'),
(6, 'ram', '8769564398', 'rahuri', 'COD'),
(7, 'Dhokane Sanskruti', '9322869566', 'umbre', 'COD'),
(8, 'SONAWANE SAKSHI', '9384895845', 'rahuri', 'COD'),
(9, 'SONAWANE SAKSHI', '8769564398', 'devlali', 'COD'),
(10, 'shreya s', '8769564398', 'DEOLALI', 'COD'),
(11, 'sakshi', '8769564398', 'devlali', 'COD'),
(12, 'shreya s', '9384895845', 'umbre', 'COD'),
(13, 'shreya s', '8769564398', 'hjb', 'COD'),
(14, 'Sakshi', '9384895845', 'umbre', 'COD'),
(15, 'shreya s', '8769564398', 'DEOLALI', 'COD'),
(16, 'shreya s', '9384895845', 'rahuri', 'COD'),
(17, 'shreya s', '9384895845', 'umbre', 'COD'),
(18, 'SONAWANE SAKSHI', '9384895845', 'DEOLALI', 'COD'),
(19, 'bhushan', '8769564398', 'umbre', 'COD'),
(20, 'jnhghgv', '86875', 'uyg', 'COD'),
(21, 'dfa', '9878798989', 'njhfds', 'COD'),
(22, 'asdasdsd', '9877897878', 'sdgs', 'COD'),
(23, 'SONAWANE SAKSHI', '897898769', 'addc', 'COD'),
(24, 'kavita', '9604771978', 'Umbre', 'COD'),
(25, 'kavita', '9604771978', 'Umbre', 'COD'),
(26, 'kavita', '9604771978', 'Umbre', 'COD'),
(27, 'kavita', '9604771978', 'Umbre', 'COD'),
(28, 'kavita', '9604771978', 'Umbre', 'COD'),
(29, 'kavita', '8769564398', 'devlali', 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(20) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_desc` varchar(50) NOT NULL,
  `product_image` varchar(50) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_desc`, `product_image`, `price`) VALUES
(1, 'Paracetamol', 'Pain reliever', 'images/para.jpg', 5),
(2, 'Advotim', 'it is an eye lubricant or artificial tears used to', 'images/advotim.jpg', 50),
(3, 'Omee', 'used to treat ulcers in the stomach and intestine', 'images/omee.jpg', 30),
(4, 'Cofsils', 'cough syrup', 'images/cofsils.jpg', 30),
(5, 'Koflet', 'Herbal cough syrup', 'images/koflet.jpg', 30),
(6, 'Nicip', 'Pain reliever and anti-inflammatory', 'images/nicip.jpg', 30),
(7, 'Nodard', 'antacid for indigestion', 'images/nodard.jpg', 30),
(8, 'Dermet-gb', 'gastrointestinal medication', 'images/drmet-gb.jpg', 30),
(9, 'Neomac', 'veternary antibiotic', 'images/neomac.jpg', 30),
(10, 'Anoxocare', 'veternary calming supplement', 'images/anxo.jpg', 30),
(11, 'Pirosion', 'veternary antacid', 'images/piro.jpg', 30),
(12, 'Amox-s', 'veternary antibiotic', 'images/amox.jpg', 30),
(13, 'Abhayarishta', '', 'images/i2.jpg', 100),
(14, 'Amritarishta', '', 'images/i3.jpg', 110),
(15, 'Aragvadharishta', '', 'images/i8.jpg', 100),
(16, 'Aravindasava', '', 'images/i5.jpg', 100),
(17, 'Dettol', '', 'images/de.jpg', 70),
(18, 'whisper', '', 'images/p1.jpg', 48),
(19, 'colgate', '', 'images/c.jpg', 20),
(20, 'harpic', '', 'images/h.jpg', 40),
(21, 'vaseline', '', 'images/v.jpg', 10),
(22, 'everyuth', '', 'images/ever2.jpg', 70),
(23, 'himalaya', '', 'images/h1.jpg', 15),
(24, 'sunscreen', '', 'images/s.jpg', 75);

-- --------------------------------------------------------

--
-- Table structure for table `product_size_variation`
--

CREATE TABLE `product_size_variation` (
  `variation_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `quantity_in_stock` int(20) NOT NULL,
  `expiry` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_size_variation`
--

INSERT INTO `product_size_variation` (`variation_id`, `product_id`, `quantity_in_stock`, `expiry`) VALUES
(1, 1, 20, '2024-05-31'),
(2, 2, 20, '2024-05-05'),
(3, 3, 20, '2024-05-05'),
(4, 4, 20, '2024-05-05'),
(5, 5, 20, '2024-05-05'),
(6, 6, 20, '2024-05-05'),
(7, 7, 20, '2024-05-05'),
(8, 8, 20, '2024-05-05'),
(9, 9, 20, '2024-05-05'),
(10, 10, 20, '2024-05-05'),
(11, 11, 20, '2024-08-14'),
(12, 12, 20, '2024-05-05'),
(13, 13, 20, '2024-10-28'),
(14, 14, 20, '2024-11-21'),
(15, 15, 20, '2024-05-05'),
(16, 16, 20, '2024-05-05'),
(17, 17, 20, '2024-09-22'),
(18, 18, 20, '2024-12-23'),
(19, 19, 20, '2024-05-05'),
(20, 20, 20, '2024-07-14'),
(21, 21, 20, '2026-03-21'),
(22, 22, 20, '2025-09-22'),
(23, 23, 20, '2024-05-05'),
(24, 24, 20, '2028-03-28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `addr` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `phno`, `email`, `addr`) VALUES
(1, 'sakshi', '$2y$10$5pO9zWVJI.JOgaYYawxGAOGp2nypSElZjawOgdINIr.IHBZybSV/O', '9384895845', 's@gmail.com', ''),
(2, 'sanskruti', '$2y$10$uQ5FwPSw7n9aXX5GaiHTG.aygFZ2449lOL9LSHwCixDDmuPtDfPhi', '8459263231', 'sanskruti@gmail.com', ''),
(3, 'kavita', '$2y$10$X9I6iLS15DO1QHAO/XaEFe.LC5KAMKhiUG.EGlNWZtJXFOkh0c7N2', '9604771978', 'kavita@gmail.com', 'Umbre');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderdetails` (`order_id`);

--
-- Indexes for table `ordermanager`
--
ALTER TABLE `ordermanager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_size_variation`
--
ALTER TABLE `product_size_variation`
  ADD PRIMARY KEY (`variation_id`),
  ADD KEY `product_size_variation` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `ordermanager`
--
ALTER TABLE `ordermanager`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `product_size_variation`
--
ALTER TABLE `product_size_variation`
  MODIFY `variation_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails` FOREIGN KEY (`order_id`) REFERENCES `ordermanager` (`id`);

--
-- Constraints for table `product_size_variation`
--
ALTER TABLE `product_size_variation`
  ADD CONSTRAINT `product_size_variation` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
