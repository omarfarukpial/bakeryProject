-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 10:04 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `fid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `fcategory` varchar(50) NOT NULL,
  `fingradient` varchar(200) NOT NULL,
  `ingID` varchar(255) NOT NULL,
  `fprice` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`fid`, `fname`, `fcategory`, `fingradient`, `ingID`, `fprice`) VALUES
(1, 'Black Forest', 'cake', 'Flour = 0.6 kg<br>Oil = 0.2 liter<br>', '1 0.6 2 0.2 ', '113.10'),
(2, 'Vanila Cake', 'cake', 'Flour = 1 kg<br>Oil = 0.8 liter<br>', '1 1 2 0.8 ', '306.80');

-- --------------------------------------------------------

--
-- Table structure for table `foodshowcase`
--

CREATE TABLE `foodshowcase` (
  `id` int(11) NOT NULL,
  `fid` varchar(50) NOT NULL,
  `fquantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodshowcase`
--

INSERT INTO `foodshowcase` (`id`, `fid`, `fquantity`) VALUES
(1, '1', 25),
(2, '2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `id` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `fquantity` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`id`, `fid`, `fquantity`, `status`, `time`) VALUES
(1, 2, 2, 'accept', '2023-01-13 01:48:18');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `unit`) VALUES
(1, 'Flour', 'kg'),
(2, 'Oil', 'liter');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_history`
--

CREATE TABLE `purchase_history` (
  `id` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `amount` decimal(6,2) NOT NULL,
  `unit_type` varchar(10) NOT NULL,
  `tprice` decimal(8,2) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_history`
--

INSERT INTO `purchase_history` (`id`, `pname`, `amount`, `unit_type`, `tprice`, `date`) VALUES
(1, 'Flour', '10.00', 'kg', '800.00', '2023-01-13'),
(2, 'Flour', '5.00', 'kg', '400.00', '2023-01-13'),
(3, 'Oil', '10.00', 'liter', '1950.00', '2023-01-13'),
(4, 'Flour', '2.00', 'kg', '160.00', '2023-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `sell_history`
--

CREATE TABLE `sell_history` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `fquantity` int(11) NOT NULL,
  `fprice` decimal(8,2) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sell_history`
--

INSERT INTO `sell_history` (`id`, `fname`, `fquantity`, `fprice`, `date`) VALUES
(1, 'Vanila Cake', 2, '613.60', '2023-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `pid` varchar(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pquantity` decimal(8,2) NOT NULL,
  `type` varchar(10) NOT NULL,
  `tprice` decimal(8,2) NOT NULL,
  `uprice` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `pid`, `pname`, `pquantity`, `type`, `tprice`, `uprice`) VALUES
(1, '1', 'Flour', '0.00', 'kg', '0.00', '80.00'),
(2, '2', 'Oil', '3.40', 'liter', '663.00', '195.00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `name`, `phone`, `password`) VALUES
(1, 'pial@gmail.com', 'pial', 'Omar Faruk Pial', '01718206845', 'Pial7425'),
(2, 'admin@gmail.com', 'admin', 'Admin', '01711001122', 'Admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `foodshowcase`
--
ALTER TABLE `foodshowcase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_history`
--
ALTER TABLE `purchase_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell_history`
--
ALTER TABLE `sell_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `foodshowcase`
--
ALTER TABLE `foodshowcase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ordertable`
--
ALTER TABLE `ordertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase_history`
--
ALTER TABLE `purchase_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sell_history`
--
ALTER TABLE `sell_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
