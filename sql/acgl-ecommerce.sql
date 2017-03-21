-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2017 at 10:53 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acgl-ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `picture`) VALUES
(1, 'Asus Zenbook UX303', '300.25', 'ASUS ZenBook series represents the essence of ASUS design spirit, and UX303 takes this to another level of sophistication with fresh and gorgeous new colors including Smoky Brown, Icicle Gold and Rose Gold.', 'laptop_asus_zenbook_ux303.jpg'),
(2, 'Dell XPS 15', '123.99', 'Our smallest 15.6" (38.1cm) laptop packs powerhouse performance and a stunning InfinityEdge display — all in our most powerful XPS laptop.', 'laptop_dell_xps_15.jpg'),
(3, 'HP Spectre 13', '321.10', 'This featherweight 13-inch diagonal laptop weighs just 2.45 pounds.', 'laptop_hp_spectre_13.jpg'),
(4, 'Raspberry Pi Case', '899.99', 'Some case shistsith', 'raspberry_pi_case.jpg'),
(5, 'Raspberry Pi Model B+', '999.99', 'The main raspberry pi board', 'raspberry_pi_model_b_plus.jpg'),
(6, 'Raspberry Pi Zero', '123.55', 'Smaller board for raspberry pi', 'raspberry_pi_zero.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(11, 'admin', 'admin', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `id_user` int(11) NOT NULL,
  `id_products` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD KEY `id_products` (`id_products`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
