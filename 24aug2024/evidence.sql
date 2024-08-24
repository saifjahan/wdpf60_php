-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3310
-- Generation Time: Aug 24, 2024 at 01:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evidence`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_book`
--

CREATE TABLE `log_book` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `event` enum('insert','update','delete') NOT NULL,
  `event_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_book`
--

INSERT INTO `log_book` (`id`, `product_name`, `event`, `event_time`) VALUES
(1, 'HHFUE', 'insert', '2024-08-24 06:52:23'),
(2, 'HHFUE', 'update', '2024-08-24 07:01:03'),
(3, 'hp pinter', 'delete', '2024-08-24 07:01:09');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `address`, `contact_no`) VALUES
(1, 'sony', 'dhaka66/a', '123456789'),
(2, 'singar', 'polton', '12345678910'),
(3, 'philiph', 'uttora10/a', '1234567888'),
(5, 'hp', 'dhanondi', '12345678910');

--
-- Triggers `manufacturer`
--
DELIMITER $$
CREATE TRIGGER `Manufacturer_Delete` AFTER DELETE ON `manufacturer` FOR EACH ROW DELETE  FROM product
WHERE product.manufacturer_id = old.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer_bk`
--

CREATE TABLE `manufacturer_bk` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer_bk`
--

INSERT INTO `manufacturer_bk` (`id`, `name`, `address`, `contact_no`) VALUES
(1, 'sony', 'dhaka66/a', '123456789'),
(2, 'singar', 'polton', '12345678910'),
(3, 'philiph', 'uttora10/a', '1234567888'),
(4, 'otobi', 'cummila', '123548790'),
(5, 'hp', 'dhanondi', '12345678910');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `manufacturer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `manufacturer_id`) VALUES
(1, ' sony refegeretor 19\'\'c', 40000, 1),
(2, 'singer tv 30\'\' ', 25000, 2),
(3, 'philiph ac1.5ton', 60000, 3),
(6, 'sony', 2000, 2);

--
-- Triggers `product`
--
DELIMITER $$
CREATE TRIGGER `product_delete` AFTER DELETE ON `product` FOR EACH ROW INSERT INTO log_book VALUES(NULL,old.name,"delete",now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `product_insert` AFTER INSERT ON `product` FOR EACH ROW INSERT INTO log_book VALUES(NULL,new.name, "Insert", NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `product_update` AFTER UPDATE ON `product` FOR EACH ROW INSERT INTO log_book VALUES(NULL,old.name,"update",now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `products_above_10000_price`
-- (See below for the actual view)
--
CREATE TABLE `products_above_10000_price` (
`id` int(11)
,`name` varchar(50)
,`price` int(5)
,`manufacturer_id` int(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_above_5000_price`
-- (See below for the actual view)
--
CREATE TABLE `product_above_5000_price` (
`id` int(11)
,`name` varchar(50)
,`price` int(5)
,`manufacturer_id` int(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `product_bk`
--

CREATE TABLE `product_bk` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `manufacturer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_bk`
--

INSERT INTO `product_bk` (`id`, `name`, `price`, `manufacturer_id`) VALUES
(1, ' sony refegeretor 19\'\'c', 40000, 1),
(2, 'singer tv 30\'\' ', 25000, 2),
(3, 'philiph ac1.5ton', 60000, 3),
(4, 'otobi table', 5000, 4),
(5, 'hp pinter', 3000, 5);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_list`
-- (See below for the actual view)
--
CREATE TABLE `product_list` (
`id` int(11)
,`Product Name` varchar(50)
,`price` int(5)
,`Manufacturer Name` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `products_above_10000_price`
--
DROP TABLE IF EXISTS `products_above_10000_price`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `products_above_10000_price`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `name`, `product`.`price` AS `price`, `product`.`manufacturer_id` AS `manufacturer_id` FROM `product` WHERE `product`.`price` > 1000010000  ;

-- --------------------------------------------------------

--
-- Structure for view `product_above_5000_price`
--
DROP TABLE IF EXISTS `product_above_5000_price`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_above_5000_price`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `name`, `product`.`price` AS `price`, `product`.`manufacturer_id` AS `manufacturer_id` FROM `product` WHERE `product`.`price` > 50005000  ;

-- --------------------------------------------------------

--
-- Structure for view `product_list`
--
DROP TABLE IF EXISTS `product_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_list`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `Product Name`, `product`.`price` AS `price`, `manufacturer`.`name` AS `Manufacturer Name` FROM (`manufacturer` join `product`) WHERE `manufacturer`.`id` = `product`.`manufacturer_id``manufacturer_id`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_book`
--
ALTER TABLE `log_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturer_bk`
--
ALTER TABLE `manufacturer_bk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_bk`
--
ALTER TABLE `product_bk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_book`
--
ALTER TABLE `log_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `manufacturer_bk`
--
ALTER TABLE `manufacturer_bk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_bk`
--
ALTER TABLE `product_bk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
