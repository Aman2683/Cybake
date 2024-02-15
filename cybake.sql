-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2022 at 05:41 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cybake`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `admin` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `id` int(100) NOT NULL,
  `cat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `cat`) VALUES
(1, 'Birthday Cake'),
(3, 'Aniversary Cake');

-- --------------------------------------------------------

--
-- Table structure for table `designorder`
--

CREATE TABLE `designorder` (
  `id` int(100) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `flavour` varchar(100) NOT NULL,
  `kg` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `orderdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `message` varchar(1000) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `deliver` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designorder`
--

INSERT INTO `designorder` (`id`, `pid`, `type`, `flavour`, `kg`, `date`, `orderdate`, `message`, `userid`, `status`, `deliver`) VALUES
(2, '3', 'Birthday Cake', 'Venila Flavour', '2', '2022-08-17', '2022-08-15 15:00:49', '2345yggfszxcvb', 'deepthi@gmail.com', 'Accepted', 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`id`, `name`, `email`, `message`) VALUES
(1, 'arvin', 'arvin@gmail.com', 'Nut agri'),
(2, 'deepthi', 'deepthi@gmail.com', 'cghcfg');

-- --------------------------------------------------------

--
-- Table structure for table `flavour`
--

CREATE TABLE `flavour` (
  `id` int(100) NOT NULL,
  `flavour` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flavour`
--

INSERT INTO `flavour` (`id`, `flavour`) VALUES
(1, 'Venila Flavour'),
(2, 'Kivi Flavour'),
(4, 'Black Forest');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `flavour` varchar(100) NOT NULL,
  `halfkg` varchar(100) NOT NULL,
  `onekg` varchar(100) NOT NULL,
  `descr` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `cat`, `flavour`, `halfkg`, `onekg`, `descr`, `image`) VALUES
(1, 'Birthday Cake', 'Black Forest', '355', '655', 'so sweety. delisoues', 'black.jpg'),
(3, 'Birthday Cake', 'Venila Flavour', '400', '850', 'so sweety. delisoues', 'Birthday Cakecake-2.jpg'),
(4, 'Aniversary Cake', 'Kivi Flavour', '300', '850', ' nbb', 'Aniversary Cakecake-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `snackorder`
--

CREATE TABLE `snackorder` (
  `oid` int(100) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `deliver` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `snackorder`
--

INSERT INTO `snackorder` (`oid`, `pid`, `qty`, `userid`, `date`, `status`, `deliver`) VALUES
(6, '2', '1', 'deepthi@gmail.com', '2022-08-13', 'Accepted', 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `snacks`
--

CREATE TABLE `snacks` (
  `id` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `descr` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `snacks`
--

INSERT INTO `snacks` (`id`, `type`, `name`, `price`, `descr`, `image`) VALUES
(1, 'Desserts', 'Cool Cake', '70', 'so sweety. delisoues', 'Dessertsoffer.jpg'),
(2, 'Desserts', 'cup cake', '50', 'so sweety. delisoues', 'Dessertshero.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `semail` varchar(100) NOT NULL,
  `sphone` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `desig` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `sname`, `semail`, `sphone`, `gender`, `address`, `desig`) VALUES
(1, 'deepthi rai', 'deepthi@gmail.com', '7894561235', 'Female', 'Manglore', 'sales');

-- --------------------------------------------------------

--
-- Table structure for table `userreg`
--

CREATE TABLE `userreg` (
  `id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `phone` varchar(1000) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userreg`
--

INSERT INTO `userreg` (`id`, `name`, `address`, `city`, `pincode`, `landmark`, `phone`, `gender`, `email`, `password`) VALUES
(1, 'arvin', 'madanthyar', 'machibna', '574221', 'fancy', '8529637418', 'male', 'arvin@gmail.com', '123'),
(2, 'deepthi', 'manglore', 'manglore', '574001', 'school sacred heart', '6677889999', 'female', 'deepthi@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designorder`
--
ALTER TABLE `designorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flavour`
--
ALTER TABLE `flavour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snackorder`
--
ALTER TABLE `snackorder`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `snacks`
--
ALTER TABLE `snacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userreg`
--
ALTER TABLE `userreg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `designorder`
--
ALTER TABLE `designorder`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `flavour`
--
ALTER TABLE `flavour`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `snackorder`
--
ALTER TABLE `snackorder`
  MODIFY `oid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `snacks`
--
ALTER TABLE `snacks`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userreg`
--
ALTER TABLE `userreg`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
