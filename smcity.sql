-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 02, 2018 at 10:37 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nvs`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommodation_plan_one`
--

CREATE TABLE `accommodation_plan_one` (
  `id` int(11) NOT NULL,
  `policy_name` varchar(255) NOT NULL,
  `policy_price` double NOT NULL,
  `sum_insured` double NOT NULL,
  `rate` double NOT NULL,
  `perils_rate_1_3` double NOT NULL,
  `perils_rate_1_4` double NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accommodation_plan_one`
--

INSERT INTO `accommodation_plan_one` (`id`, `policy_name`, `policy_price`, `sum_insured`, `rate`, `perils_rate_1_3`, `perils_rate_1_4`, `image`) VALUES
(1, 'BURGLARY', 87, 0, 0, 0, 0, 'icons8-burglary-100.png'),
(2, 'MONEY', 87, 0, 0, 0, 0, 'icons8-coins-filled-100.png'),
(3, 'GLASS BREAKAGE', 87, 0, 0, 0, 0, 'icons8-fragile-100.png'),
(4, 'PUBLIC LIABILITY', 87, 0, 0, 0, 0, 'icons8-public-100.png'),
(5, 'EMPLOYERS LIABILITY', 87, 0, 0, 0, 0, 'icons8-name-tag-100.png');

-- --------------------------------------------------------

--
-- Table structure for table `accommodation_plan_two`
--

CREATE TABLE `accommodation_plan_two` (
  `id` int(11) NOT NULL,
  `policy_name` varchar(255) NOT NULL,
  `policy_price` double NOT NULL,
  `sum_insured` double NOT NULL,
  `rate` double NOT NULL,
  `perils_rate_1_3` double NOT NULL,
  `perils_rate_1_4` double NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accommodation_plan_two`
--

INSERT INTO `accommodation_plan_two` (`id`, `policy_name`, `policy_price`, `sum_insured`, `rate`, `perils_rate_1_3`, `perils_rate_1_4`, `image`) VALUES
(1, 'BURGLARY', 170, 0, 0, 0, 0, 'icons8-burglary-100.png'),
(2, 'MONEY', 170, 0, 0, 0, 0, 'icons8-coins-filled-100.png'),
(3, 'GLASS BREAKAGE', 170, 0, 0, 0, 0, 'icons8-fragile-100.png'),
(4, 'PUBLIC LIABILITY', 170, 0, 0, 0, 0, 'icons8-public-100.png'),
(5, 'EMPLOYERS LIABILITY', 170, 0, 0, 0, 0, 'icons8-name-tag-100.png'),
(6, 'FIRE-1102-C1A', 169, 0, 0, 0, 0, 'icons8-fires-100.png');

-- --------------------------------------------------------

--
-- Table structure for table `administrative_plan_one`
--

CREATE TABLE `administrative_plan_one` (
  `id` int(11) NOT NULL,
  `policy_name` varchar(255) NOT NULL,
  `policy_price` double NOT NULL,
  `sum_insured` double NOT NULL,
  `rate` double NOT NULL,
  `perils_rate_1_3` double NOT NULL,
  `perils_rate_1_4` double NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrative_plan_one`
--

INSERT INTO `administrative_plan_one` (`id`, `policy_name`, `policy_price`, `sum_insured`, `rate`, `perils_rate_1_3`, `perils_rate_1_4`, `image`) VALUES
(2, 'MONEY', 87, 0, 0, 0, 0, 'icons8-coins-filled-100.png'),
(3, 'GLASS BREAKAGE', 87, 0, 0, 0, 0, 'icons8-fragile-100.png'),
(4, 'PUBLIC LIABILITY', 87, 0, 0, 0, 0, 'icons8-public-100.png'),
(5, 'EMPLOYERS LIABILITY', 87, 0, 0, 0, 0, 'icons8-name-tag-100.png'),
(6, 'FIRE-1204-C1A', 12433, 0, 0, 0, 0, 'icons8-fires-100.png');

-- --------------------------------------------------------

--
-- Table structure for table `administrative_plan_two`
--

CREATE TABLE `administrative_plan_two` (
  `id` int(11) NOT NULL,
  `policy_name` varchar(255) NOT NULL,
  `policy_price` double NOT NULL,
  `sum_insured` double NOT NULL,
  `rate` double NOT NULL,
  `perils_rate_1_3` double NOT NULL,
  `perils_rate_1_4` double NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrative_plan_two`
--

INSERT INTO `administrative_plan_two` (`id`, `policy_name`, `policy_price`, `sum_insured`, `rate`, `perils_rate_1_3`, `perils_rate_1_4`, `image`) VALUES
(1, 'ALL RISK', 250, 0, 0, 0, 0, 'icons8-low-priority-100.png'),
(2, 'MONEY', 150, 0, 0, 0, 0, 'icons8-coins-filled-100.png'),
(3, 'GLASS BREAKAGE', 150, 0, 0, 0, 0, 'icons8-fragile-100.png'),
(4, 'PUBLIC LIABILITY', 250, 0, 0, 0, 0, 'icons8-public-100.png'),
(5, 'EMPLOYERS LIABILITY', 250, 0, 0, 0, 0, 'icons8-name-tag-100.png'),
(6, 'FIRE-1204-C1A', 87, 0, 0, 0, 0, 'icons8-fires-100.png');

-- --------------------------------------------------------

--
-- Table structure for table `contractor_plan_one`
--

CREATE TABLE `contractor_plan_one` (
  `id` int(11) NOT NULL,
  `policy_name` varchar(255) NOT NULL,
  `policy_price` double NOT NULL,
  `sum_insured` double NOT NULL,
  `rate` double NOT NULL,
  `perils_rate_1_3` double NOT NULL,
  `perils_rate_1_4` double NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contractor_plan_one`
--

INSERT INTO `contractor_plan_one` (`id`, `policy_name`, `policy_price`, `sum_insured`, `rate`, `perils_rate_1_3`, `perils_rate_1_4`, `image`) VALUES
(1, 'Mobile Plant & Equipment Insurance', 50000, 0, 0, 0, 0, 'icons8-colosseum-filled-100.png'),
(2, 'All Risk Insurance', 75000, 0, 0, 0, 0, 'icons8-low-priority-100.png');

-- --------------------------------------------------------

--
-- Table structure for table `contractor_plan_two`
--

CREATE TABLE `contractor_plan_two` (
  `id` int(11) NOT NULL,
  `policy_name` varchar(255) NOT NULL,
  `policy_price` double NOT NULL,
  `sum_insured` double NOT NULL,
  `rate` double NOT NULL,
  `perils_rate_1_3` double NOT NULL,
  `perils_rate_1_4` double NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contractor_plan_two`
--

INSERT INTO `contractor_plan_two` (`id`, `policy_name`, `policy_price`, `sum_insured`, `rate`, `perils_rate_1_3`, `perils_rate_1_4`, `image`) VALUES
(0, 'Mobile Plant & Equipment Insurance', 50000, 0, 0, 0, 0, ''),
(0, 'All Risk Insurance', 127500, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `industry_name` varchar(255) NOT NULL,
  `number_employees` varchar(255) NOT NULL,
  `due_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`id`, `customer_name`, `customer_phone`, `industry_name`, `number_employees`, `due_date`) VALUES
(3, 'omar', '01161177870', 'admin', 'one_to_five', '2018-03-01 16:06:37'),
(4, 'Ahmed', '0116117697', 'admin', 'one_to_five', '2018-03-01 16:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `event_management_plan_one`
--

CREATE TABLE `event_management_plan_one` (
  `id` int(11) NOT NULL,
  `policy_name` varchar(255) NOT NULL,
  `policy_price` double NOT NULL,
  `sum_insured` double NOT NULL,
  `rate` double NOT NULL,
  `perils_rate_1_3` double NOT NULL,
  `perils_rate_1_4` double NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_management_plan_one`
--

INSERT INTO `event_management_plan_one` (`id`, `policy_name`, `policy_price`, `sum_insured`, `rate`, `perils_rate_1_3`, `perils_rate_1_4`, `image`) VALUES
(1, 'Mobile Plant & Equipment Insurance', 50000, 0, 0, 0, 0, 'icons8-colosseum-filled-100.png'),
(2, 'All Risk Insurance', 75000, 0, 0, 0, 0, 'icons8-low-priority-100.png');

-- --------------------------------------------------------

--
-- Table structure for table `event_management_plan_two`
--

CREATE TABLE `event_management_plan_two` (
  `id` int(11) NOT NULL,
  `policy_name` varchar(255) NOT NULL,
  `policy_price` double NOT NULL,
  `sum_insured` double NOT NULL,
  `rate` double NOT NULL,
  `perils_rate_1_3` double NOT NULL,
  `perils_rate_1_4` double NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_management_plan_two`
--

INSERT INTO `event_management_plan_two` (`id`, `policy_name`, `policy_price`, `sum_insured`, `rate`, `perils_rate_1_3`, `perils_rate_1_4`, `image`) VALUES
(1, 'Mobile Plant & Equipment Insurance', 50000, 0, 0, 0, 0, 'icons8-colosseum-filled-100.png'),
(2, 'All Risk Insurance', 127500, 0, 0, 0, 0, 'icons8-low-priority-100.png');

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` int(11) NOT NULL,
  `industry_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `industry_name`) VALUES
(1, 'ADMINISTRATIVE SERVICE '),
(2, 'FOOD AND ACCOMONDATION'),
(3, 'RETAIL'),
(4, 'CONTRACTORS'),
(5, 'REAL ESTATE'),
(6, 'Event Management Industry '),
(7, 'Manufacturers');

-- --------------------------------------------------------

--
-- Table structure for table `list_accommodation`
--

CREATE TABLE `list_accommodation` (
  `id` int(11) NOT NULL,
  `business_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_accommodation`
--

INSERT INTO `list_accommodation` (`id`, `business_name`) VALUES
(1, 'Cafes'),
(2, 'Beauty Saloon'),
(3, 'Cake Shop'),
(4, 'Consulting Firm'),
(5, 'Clothing Retailers'),
(6, 'Travel Agencies');

-- --------------------------------------------------------

--
-- Table structure for table `list_administrative`
--

CREATE TABLE `list_administrative` (
  `id` int(11) NOT NULL,
  `business_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_administrative`
--

INSERT INTO `list_administrative` (`id`, `business_name`) VALUES
(1, 'Travel Agencies'),
(2, 'Architect Office'),
(3, 'Law Firms'),
(4, 'Accounting Firms');

-- --------------------------------------------------------

--
-- Table structure for table `list_contractor`
--

CREATE TABLE `list_contractor` (
  `id` int(11) NOT NULL,
  `business_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_contractor`
--

INSERT INTO `list_contractor` (`id`, `business_name`) VALUES
(1, 'Construction Equipment Insurance ');

-- --------------------------------------------------------

--
-- Table structure for table `list_event_management`
--

CREATE TABLE `list_event_management` (
  `id` int(11) NOT NULL,
  `business_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_event_management`
--

INSERT INTO `list_event_management` (`id`, `business_name`) VALUES
(1, 'Event Organizer');

-- --------------------------------------------------------

--
-- Table structure for table `list_manufacturers`
--

CREATE TABLE `list_manufacturers` (
  `id` int(11) NOT NULL,
  `business_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_manufacturers`
--

INSERT INTO `list_manufacturers` (`id`, `business_name`) VALUES
(1, 'Sme manufacturers ');

-- --------------------------------------------------------

--
-- Table structure for table `list_real_estate`
--

CREATE TABLE `list_real_estate` (
  `id` int(11) NOT NULL,
  `business_model` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_real_estate`
--

INSERT INTO `list_real_estate` (`id`, `business_model`) VALUES
(1, 'Budget Hotels');

-- --------------------------------------------------------

--
-- Table structure for table `list_retail`
--

CREATE TABLE `list_retail` (
  `id` int(11) NOT NULL,
  `business_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_retail`
--

INSERT INTO `list_retail` (`id`, `business_name`) VALUES
(1, 'Cafes'),
(2, 'Beauty Saloon'),
(3, 'Cake Shop'),
(4, 'Consulting Firm'),
(5, 'Clothing Retailers'),
(6, 'Travel Agencies');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers_plan_one`
--

CREATE TABLE `manufacturers_plan_one` (
  `id` int(11) NOT NULL,
  `policy_name` varchar(255) NOT NULL,
  `policy_price` double NOT NULL,
  `sum_insured` double NOT NULL,
  `rate` double NOT NULL,
  `perils_rate_1_3` double NOT NULL,
  `perils_rate_1_4` double NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturers_plan_one`
--

INSERT INTO `manufacturers_plan_one` (`id`, `policy_name`, `policy_price`, `sum_insured`, `rate`, `perils_rate_1_3`, `perils_rate_1_4`, `image`) VALUES
(1, 'FIDELITY GUARANTEE', 0, 0, 0, 0, 0, 'icons8-guarantee-filled-100.png'),
(2, 'FIRE INSURANCE', 0, 0, 0, 0, 0, 'icons8-fires-100.png');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers_plan_two`
--

CREATE TABLE `manufacturers_plan_two` (
  `id` int(11) NOT NULL,
  `policy_name` varchar(255) NOT NULL,
  `policy_price` double NOT NULL,
  `sum_insured` double NOT NULL,
  `rate` double NOT NULL,
  `perils_rate_1_3` double NOT NULL,
  `perils_rate_1_4` double NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturers_plan_two`
--

INSERT INTO `manufacturers_plan_two` (`id`, `policy_name`, `policy_price`, `sum_insured`, `rate`, `perils_rate_1_3`, `perils_rate_1_4`, `image`) VALUES
(1, 'ALL RISK', 0, 0, 0, 0, 0, 'icons8-guarantee-filled-100.png'),
(2, 'FIDELITY GUARANTEE', 0, 0, 0, 0, 0, 'icons8-fires-100.png');

-- --------------------------------------------------------

--
-- Table structure for table `real_estate_plan_one`
--

CREATE TABLE `real_estate_plan_one` (
  `id` int(11) NOT NULL,
  `policy_name` varchar(255) NOT NULL,
  `policy_price` float NOT NULL,
  `sum_insured` double NOT NULL,
  `rate` double NOT NULL,
  `perils_rate_1_3` double NOT NULL,
  `perils_rate_1_4` double NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `real_estate_plan_one`
--

INSERT INTO `real_estate_plan_one` (`id`, `policy_name`, `policy_price`, `sum_insured`, `rate`, `perils_rate_1_3`, `perils_rate_1_4`, `image`) VALUES
(1, 'FIRE CON LOSS', 185, 0, 0, 0, 0, 'icons8-fires-100.png'),
(2, 'MONEY', 185, 0, 0, 0, 0, 'icons8-coins-filled-100.png'),
(3, 'BURLGARY', 185, 0, 0, 0, 0, 'icons8-burglary-100.png'),
(4, 'GLASS', 185, 0, 0, 0, 0, 'icons8-fragile-100.png'),
(5, 'FIDELITY GUARANTEE', 185, 0, 0, 0, 0, 'icons8-guarantee-filled-100.png'),
(6, 'ALL RISKS', 185, 0, 0, 0, 0, 'icons8-low-priority-100.png'),
(7, 'PUBLIC LIABILITY', 185, 0, 0, 0, 0, 'icons8-public-100.png'),
(8, 'PERSONAL ACCIDENT', 185, 0, 0, 0, 0, 'icons8-crashed-car-100.png'),
(9, 'FIRE-1202-C1A', 3899.6, 0, 0, 0, 0, 'icons8-fires-100.png');

-- --------------------------------------------------------

--
-- Table structure for table `real_estate_plan_two`
--

CREATE TABLE `real_estate_plan_two` (
  `id` int(11) NOT NULL,
  `policy_name` varchar(255) NOT NULL,
  `policy_price` double NOT NULL,
  `sum_insured` double NOT NULL,
  `rate` double NOT NULL,
  `perils_rate_1_3` double NOT NULL,
  `perils_rate_1_4` double NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `real_estate_plan_two`
--

INSERT INTO `real_estate_plan_two` (`id`, `policy_name`, `policy_price`, `sum_insured`, `rate`, `perils_rate_1_3`, `perils_rate_1_4`, `image`) VALUES
(1, 'FIRE CON LOSS', 344.5, 0, 0, 0, 0, 'icons8-fires-100.png'),
(2, 'MONEY', 344.5, 0, 0, 0, 0, 'icons8-coins-filled-100.png'),
(3, 'BURLGARY', 344.5, 0, 0, 0, 0, 'icons8-burglary-100.png'),
(4, 'GLASS', 344.5, 0, 0, 0, 0, 'icons8-fragile-100.png'),
(5, 'FIDELITY GUARANTEE', 344.5, 0, 0, 0, 0, 'icons8-guarantee-filled-100.png'),
(6, 'ALL RISKS', 344.5, 0, 0, 0, 0, 'icons8-low-priority-100.png'),
(7, 'PUBLIC LIABILITY', 344.5, 0, 0, 0, 0, 'icons8-public-100.png'),
(8, 'PERSONAL ACCIDENT', 344.5, 0, 0, 0, 0, 'icons8-crashed-car-100.png'),
(9, 'FIRE', 3968, 0, 0, 0, 0, 'icons8-fires-100.png');

-- --------------------------------------------------------

--
-- Table structure for table `retail_plan_one`
--

CREATE TABLE `retail_plan_one` (
  `id` int(11) NOT NULL,
  `policy_name` varchar(255) NOT NULL,
  `policy_price` double NOT NULL,
  `sum_insured` double NOT NULL,
  `rate` double NOT NULL,
  `perils_rate_1_3` double NOT NULL,
  `perils_rate_1_4` double NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retail_plan_one`
--

INSERT INTO `retail_plan_one` (`id`, `policy_name`, `policy_price`, `sum_insured`, `rate`, `perils_rate_1_3`, `perils_rate_1_4`, `image`) VALUES
(1, 'BURGLARY', 87, 0, 0, 0, 0, 'icons8-burglary-100.png'),
(2, 'MONEY', 87, 0, 0, 0, 0, 'icons8-coins-filled-100.png'),
(3, 'GLASS BREAKAGE', 87, 0, 0, 0, 0, 'icons8-fragile-100.png'),
(4, 'PUBLIC LIABILITY', 87, 0, 0, 0, 0, 'icons8-public-100.png'),
(5, 'EMPLOYERS LIABILITY', 87, 0, 0, 0, 0, 'icons8-name-tag-100.png');

-- --------------------------------------------------------

--
-- Table structure for table `retail_plan_two`
--

CREATE TABLE `retail_plan_two` (
  `id` int(11) NOT NULL,
  `policy_name` varchar(255) NOT NULL,
  `policy_price` double NOT NULL,
  `sum_insured` double NOT NULL,
  `rate` double NOT NULL,
  `perils_rate_1_3` double NOT NULL,
  `perils_rate_1_4` double NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retail_plan_two`
--

INSERT INTO `retail_plan_two` (`id`, `policy_name`, `policy_price`, `sum_insured`, `rate`, `perils_rate_1_3`, `perils_rate_1_4`, `image`) VALUES
(2, 'MONEY', 170, 0, 0, 0, 0, 'icons8-coins-filled-100.png'),
(3, 'GLASS BREAKAGE', 170, 0, 0, 0, 0, 'icons8-fragile-100.png'),
(4, 'EMPLOYERS LIABILITY', 87, 0, 0, 0, 0, 'EMPLOYERS LIABILITY'),
(5, 'PUBLIC LIABILITY', 87, 0, 0, 0, 0, 'icons8-public-100.png'),
(6, 'BURGLARY', 87, 0, 0, 0, 0, 'icons8-burglary-100.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(5, 'admin', '$2y$12$mwwua4CBFXrHilQaNbbU4egPi8pUJlernu9ebZ.avSWlrAp4JXZKi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accommodation_plan_one`
--
ALTER TABLE `accommodation_plan_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accommodation_plan_two`
--
ALTER TABLE `accommodation_plan_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `administrative_plan_one`
--
ALTER TABLE `administrative_plan_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `administrative_plan_two`
--
ALTER TABLE `administrative_plan_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contractor_plan_one`
--
ALTER TABLE `contractor_plan_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_management_plan_one`
--
ALTER TABLE `event_management_plan_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_management_plan_two`
--
ALTER TABLE `event_management_plan_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_accommodation`
--
ALTER TABLE `list_accommodation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_administrative`
--
ALTER TABLE `list_administrative`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_contractor`
--
ALTER TABLE `list_contractor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_event_management`
--
ALTER TABLE `list_event_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_manufacturers`
--
ALTER TABLE `list_manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_real_estate`
--
ALTER TABLE `list_real_estate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_retail`
--
ALTER TABLE `list_retail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturers_plan_one`
--
ALTER TABLE `manufacturers_plan_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturers_plan_two`
--
ALTER TABLE `manufacturers_plan_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `real_estate_plan_one`
--
ALTER TABLE `real_estate_plan_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `real_estate_plan_two`
--
ALTER TABLE `real_estate_plan_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `retail_plan_one`
--
ALTER TABLE `retail_plan_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `retail_plan_two`
--
ALTER TABLE `retail_plan_two`
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
-- AUTO_INCREMENT for table `accommodation_plan_one`
--
ALTER TABLE `accommodation_plan_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `accommodation_plan_two`
--
ALTER TABLE `accommodation_plan_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `administrative_plan_one`
--
ALTER TABLE `administrative_plan_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `administrative_plan_two`
--
ALTER TABLE `administrative_plan_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contractor_plan_one`
--
ALTER TABLE `contractor_plan_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event_management_plan_one`
--
ALTER TABLE `event_management_plan_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_management_plan_two`
--
ALTER TABLE `event_management_plan_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `list_accommodation`
--
ALTER TABLE `list_accommodation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `list_administrative`
--
ALTER TABLE `list_administrative`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `list_contractor`
--
ALTER TABLE `list_contractor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `list_event_management`
--
ALTER TABLE `list_event_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `list_manufacturers`
--
ALTER TABLE `list_manufacturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `list_real_estate`
--
ALTER TABLE `list_real_estate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `list_retail`
--
ALTER TABLE `list_retail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `manufacturers_plan_one`
--
ALTER TABLE `manufacturers_plan_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manufacturers_plan_two`
--
ALTER TABLE `manufacturers_plan_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `real_estate_plan_one`
--
ALTER TABLE `real_estate_plan_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `real_estate_plan_two`
--
ALTER TABLE `real_estate_plan_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `retail_plan_one`
--
ALTER TABLE `retail_plan_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `retail_plan_two`
--
ALTER TABLE `retail_plan_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
