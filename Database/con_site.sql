-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2023 at 02:09 PM
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
-- Database: `con_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl_user`
--

CREATE TABLE `admin_tbl_user` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_pass` varchar(50) NOT NULL,
  `a_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `a_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tbl_user`
--

INSERT INTO `admin_tbl_user` (`a_id`, `a_name`, `a_pass`, `a_date`, `a_image`) VALUES
(1, 'admin', 'admin@123', '2023-09-21 12:09:11', '2023 Sep 16images.png');

-- --------------------------------------------------------

--
-- Table structure for table `balance_tbl`
--

CREATE TABLE `balance_tbl` (
  `b_id` int(11) NOT NULL,
  `br_id` int(11) NOT NULL,
  `b_amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `branch_staff`
--

CREATE TABLE `branch_staff` (
  `bs_id` int(11) NOT NULL,
  `br_id` int(11) NOT NULL,
  `bs_name` varchar(100) NOT NULL,
  `bs_doj` varchar(100) NOT NULL,
  `bs_address` varchar(300) NOT NULL,
  `bs_num` int(12) NOT NULL,
  `bs_post` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `branch_user`
--

CREATE TABLE `branch_user` (
  `br_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `b_pass` varchar(50) NOT NULL,
  `b_site` varchar(50) NOT NULL,
  `b_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `party_tbl`
--

CREATE TABLE `party_tbl` (
  `par_id` int(11) NOT NULL,
  `br_id` int(11) NOT NULL,
  `par_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `pos_id` int(11) NOT NULL,
  `br_id` int(11) NOT NULL,
  `pos_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `pro_id` int(11) NOT NULL,
  `br_id` int(11) NOT NULL,
  `pro_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_tbl`
--

CREATE TABLE `purchase_tbl` (
  `p_id` int(11) NOT NULL,
  `br_id` int(11) NOT NULL,
  `site_name` varchar(50) NOT NULL,
  `party_name` varchar(100) NOT NULL,
  `p_name` varchar(80) NOT NULL,
  `p_quantity` int(11) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_bill` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `s_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `s_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `used_product`
--

CREATE TABLE `used_product` (
  `up_id` int(11) NOT NULL,
  `br_id` int(11) NOT NULL,
  `up_name` varchar(50) NOT NULL,
  `up_quantity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl_user`
--
ALTER TABLE `admin_tbl_user`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `balance_tbl`
--
ALTER TABLE `balance_tbl`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `test` (`br_id`);

--
-- Indexes for table `branch_staff`
--
ALTER TABLE `branch_staff`
  ADD PRIMARY KEY (`bs_id`),
  ADD KEY `aidssss` (`br_id`);

--
-- Indexes for table `branch_user`
--
ALTER TABLE `branch_user`
  ADD PRIMARY KEY (`br_id`),
  ADD KEY `aids` (`a_id`);

--
-- Indexes for table `party_tbl`
--
ALTER TABLE `party_tbl`
  ADD PRIMARY KEY (`par_id`),
  ADD KEY `test12` (`br_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`pos_id`),
  ADD KEY `br_od3` (`br_id`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `br_id1` (`br_id`);

--
-- Indexes for table `purchase_tbl`
--
ALTER TABLE `purchase_tbl`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `aidss` (`br_id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `aidsss` (`a_id`);

--
-- Indexes for table `used_product`
--
ALTER TABLE `used_product`
  ADD PRIMARY KEY (`up_id`),
  ADD KEY `br_id` (`br_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl_user`
--
ALTER TABLE `admin_tbl_user`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `balance_tbl`
--
ALTER TABLE `balance_tbl`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branch_staff`
--
ALTER TABLE `branch_staff`
  MODIFY `bs_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branch_user`
--
ALTER TABLE `branch_user`
  MODIFY `br_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `party_tbl`
--
ALTER TABLE `party_tbl`
  MODIFY `par_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `pos_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_tbl`
--
ALTER TABLE `purchase_tbl`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `used_product`
--
ALTER TABLE `used_product`
  MODIFY `up_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `balance_tbl`
--
ALTER TABLE `balance_tbl`
  ADD CONSTRAINT `test` FOREIGN KEY (`br_id`) REFERENCES `branch_user` (`br_id`);

--
-- Constraints for table `branch_staff`
--
ALTER TABLE `branch_staff`
  ADD CONSTRAINT `aidssss` FOREIGN KEY (`br_id`) REFERENCES `branch_user` (`br_id`);

--
-- Constraints for table `branch_user`
--
ALTER TABLE `branch_user`
  ADD CONSTRAINT `aids` FOREIGN KEY (`a_id`) REFERENCES `admin_tbl_user` (`a_id`);

--
-- Constraints for table `party_tbl`
--
ALTER TABLE `party_tbl`
  ADD CONSTRAINT `test12` FOREIGN KEY (`br_id`) REFERENCES `branch_user` (`br_id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `br_od3` FOREIGN KEY (`br_id`) REFERENCES `branch_user` (`br_id`);

--
-- Constraints for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD CONSTRAINT `br_id1` FOREIGN KEY (`br_id`) REFERENCES `branch_user` (`br_id`);

--
-- Constraints for table `purchase_tbl`
--
ALTER TABLE `purchase_tbl`
  ADD CONSTRAINT `aidss` FOREIGN KEY (`br_id`) REFERENCES `branch_user` (`br_id`);

--
-- Constraints for table `site`
--
ALTER TABLE `site`
  ADD CONSTRAINT `aidsss` FOREIGN KEY (`a_id`) REFERENCES `admin_tbl_user` (`a_id`);

--
-- Constraints for table `used_product`
--
ALTER TABLE `used_product`
  ADD CONSTRAINT `br_id` FOREIGN KEY (`br_id`) REFERENCES `branch_user` (`br_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
