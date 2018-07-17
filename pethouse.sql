-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2018 at 11:21 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pethouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_confirmed`
--

CREATE TABLE `booking_confirmed` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fur_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `price` int(11) NOT NULL,
  `note` varchar(255) NOT NULL,
  `id_order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking_confirmed_salon`
--

CREATE TABLE `booking_confirmed_salon` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fur_name` varchar(255) NOT NULL,
  `type_salon` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `check_in` date NOT NULL,
  `note` varchar(255) NOT NULL,
  `id_order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking_hotel`
--

CREATE TABLE `booking_hotel` (
  `id` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `fur_name` varchar(255) NOT NULL,
  `addresses` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `note` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking_salon`
--

CREATE TABLE `booking_salon` (
  `id` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `fur_name` varchar(255) NOT NULL,
  `type_salon` varchar(255) NOT NULL,
  `addresses` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `check_in` date NOT NULL,
  `note` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history_hotel`
--

CREATE TABLE `history_hotel` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fur_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `price` int(11) NOT NULL,
  `note` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_hotel`
--

INSERT INTO `history_hotel` (`id`, `name`, `fur_name`, `address`, `email`, `phone`, `check_in`, `check_out`, `price`, `note`, `id_user`) VALUES
(8, 'admin', 'Kuda', 'Los Angeles', 'suluh.damar@student.umn.ac.id', '082299002222', '2018-06-26', '2018-06-27', 150000, 'ASD', 1);

-- --------------------------------------------------------

--
-- Table structure for table `history_salon`
--

CREATE TABLE `history_salon` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fur_name` varchar(255) NOT NULL,
  `type_salon` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `check_in` date NOT NULL,
  `note` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_salon`
--

INSERT INTO `history_salon` (`id`, `name`, `fur_name`, `type_salon`, `address`, `email`, `phone`, `check_in`, `note`, `id_user`) VALUES
(11, 'admin', 'Kucing', 'Bathing Pet - (IDR) 100000', 'Los Angeles', 'suluh.damar@student.umn.ac.id', '082299002222', '2018-07-04', 'ASD', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pet_category`
--

CREATE TABLE `pet_category` (
  `id_pet` int(11) NOT NULL,
  `pet_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet_category`
--

INSERT INTO `pet_category` (`id_pet`, `pet_name`) VALUES
(1, 'Dog'),
(2, 'Cat');

-- --------------------------------------------------------

--
-- Table structure for table `pricelist_salon`
--

CREATE TABLE `pricelist_salon` (
  `id` int(11) NOT NULL,
  `id_pet` int(11) NOT NULL,
  `type_salon` varchar(255) NOT NULL,
  `price_salon` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricelist_salon`
--

INSERT INTO `pricelist_salon` (`id`, `id_pet`, `type_salon`, `price_salon`) VALUES
(1, 1, 'Bathing Pet - (IDR)', 100000),
(2, 1, 'Basic Grooming - (IDR)', 120000),
(3, 1, 'Full Grooming - (IDR)', 150000),
(4, 2, 'Bathing Pet - (IDR)', 70000),
(5, 2, 'Basic Grooming - (IDR)', 100000),
(6, 2, 'Full Grooming - (IDR)', 120000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL DEFAULT '',
  `firstName` varchar(255) NOT NULL DEFAULT '',
  `lastName` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `userimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstName`, `lastName`, `email`, `password`, `phone`, `address`, `userimg`) VALUES
(1, 'admin', 'ThePetHouse', 'Admin', 'suluh.damar@student.umn.ac.id', '0192023a7bbd73250516f069df18b500', '082299002222', 'Los Angeles', 'ThePetHotel.png'),
(18, 'damaaryoung', 'Suluh', 'Damar', 'damarsuksesyes@gmail.com', '8b08cf5eb0ab5c37da119db4ef5a148f', '082299002222', 'Dasana Indah', 'foto.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_confirmed`
--
ALTER TABLE `booking_confirmed`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `booking_confirmed_salon`
--
ALTER TABLE `booking_confirmed_salon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `booking_hotel`
--
ALTER TABLE `booking_hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `booking_salon`
--
ALTER TABLE `booking_salon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_pet` (`id_pet`);

--
-- Indexes for table `history_hotel`
--
ALTER TABLE `history_hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `history_salon`
--
ALTER TABLE `history_salon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pet_category`
--
ALTER TABLE `pet_category`
  ADD PRIMARY KEY (`id_pet`);

--
-- Indexes for table `pricelist_salon`
--
ALTER TABLE `pricelist_salon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pet` (`id_pet`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_confirmed`
--
ALTER TABLE `booking_confirmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `booking_confirmed_salon`
--
ALTER TABLE `booking_confirmed_salon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `booking_hotel`
--
ALTER TABLE `booking_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `booking_salon`
--
ALTER TABLE `booking_salon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pet_category`
--
ALTER TABLE `pet_category`
  MODIFY `id_pet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pricelist_salon`
--
ALTER TABLE `pricelist_salon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_confirmed`
--
ALTER TABLE `booking_confirmed`
  ADD CONSTRAINT `booking_confirmed_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `booking_hotel` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `booking_confirmed_salon`
--
ALTER TABLE `booking_confirmed_salon`
  ADD CONSTRAINT `booking_confirmed_salon_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `booking_salon` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `booking_hotel`
--
ALTER TABLE `booking_hotel`
  ADD CONSTRAINT `booking_hotel_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `booking_salon`
--
ALTER TABLE `booking_salon`
  ADD CONSTRAINT `booking_salon_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_salon_ibfk_2` FOREIGN KEY (`id_pet`) REFERENCES `pet_category` (`id_pet`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `history_hotel`
--
ALTER TABLE `history_hotel`
  ADD CONSTRAINT `history_hotel_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `history_salon`
--
ALTER TABLE `history_salon`
  ADD CONSTRAINT `history_salon_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `pricelist_salon`
--
ALTER TABLE `pricelist_salon`
  ADD CONSTRAINT `pricelist_salon_ibfk_1` FOREIGN KEY (`id_pet`) REFERENCES `pet_category` (`id_pet`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
