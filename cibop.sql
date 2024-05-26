-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2021 at 10:10 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cibop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `secret_passowrd` varchar(100) DEFAULT '9Xwt3ve0475456'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `user_name`, `password`, `secret_passowrd`) VALUES
(1, 'afzaal', '475456', '9Xwt3ve0475456');

-- --------------------------------------------------------

--
-- Table structure for table `court_record`
--

CREATE TABLE `court_record` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `p_cnic` varchar(15) NOT NULL,
  `p_address` varchar(255) NOT NULL,
  `p_gender` varchar(10) NOT NULL,
  `pmobile` varchar(20) NOT NULL,
  `opp_name` varchar(255) NOT NULL,
  `opp_address` varchar(255) NOT NULL,
  `opp_gender` varchar(10) NOT NULL,
  `opp_cnic` varchar(20) NOT NULL,
  `omobile` varchar(20) NOT NULL,
  `lawyer` varchar(255) NOT NULL,
  `alligation` varchar(255) NOT NULL,
  `court_address` varchar(255) NOT NULL,
  `case_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `court_record`
--

INSERT INTO `court_record` (`id`, `name`, `father_name`, `p_cnic`, `p_address`, `p_gender`, `pmobile`, `opp_name`, `opp_address`, `opp_gender`, `opp_cnic`, `omobile`, `lawyer`, `alligation`, `court_address`, `case_no`) VALUES
(2, '', '', '34602', '', '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `criminal_record`
--

CREATE TABLE `criminal_record` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `cnic` bigint(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` int(10) NOT NULL,
  `jurm` varchar(255) NOT NULL,
  `case_date` date NOT NULL,
  `station` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `identity_mark` varchar(255) NOT NULL,
  `criminal_status` varchar(255) NOT NULL,
  `case_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `criminal_record`
--

INSERT INTO `criminal_record` (`id`, `name`, `father_name`, `cnic`, `gender`, `mobile_no`, `address`, `age`, `jurm`, `case_date`, `station`, `photo`, `identity_mark`, `criminal_status`, `case_status`) VALUES
(5, 'Afzaal Javaid', 'javaid ahmad', 34602, '', '03497462877', 'village chawindavillage chawindavillage chawindavillage chawindavillage chawindavillage chawinda', 18, 'Murder', '2020-02-17', 'sialkot', '', 'Cut mark on nose', 'vj', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `family_tree_childs_info`
--

CREATE TABLE `family_tree_childs_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `dd` varchar(255) NOT NULL,
  `cnic` varchar(255) NOT NULL,
  `father_cnic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family_tree_childs_info`
--

INSERT INTO `family_tree_childs_info` (`id`, `name`, `dob`, `dd`, `cnic`, `father_cnic`) VALUES
(58, 'javaid', '0043-03-05', '0005-03-05', '3255515', '3460298503051'),
(59, 'javaid', '0043-03-05', '0005-03-05', '35', '3460298503051'),
(60, 'Khurram', '1999-01-01', '', '768762752', '34602987654321'),
(61, 'Haseeb', '97653-07-09', '', '7263487528739', '34602987654321');

-- --------------------------------------------------------

--
-- Table structure for table `family_tree_parents_info`
--

CREATE TABLE `family_tree_parents_info` (
  `id` int(11) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `father_cnic` varchar(255) NOT NULL,
  `father_dob` varchar(255) NOT NULL,
  `father_dd` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `mother_cnic` varchar(255) NOT NULL,
  `mother_dob` varchar(255) NOT NULL,
  `mother_ddd` varchar(255) NOT NULL,
  `family_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family_tree_parents_info`
--

INSERT INTO `family_tree_parents_info` (`id`, `father_name`, `father_cnic`, `father_dob`, `father_dd`, `mother_name`, `mother_cnic`, `mother_dob`, `mother_ddd`, `family_address`) VALUES
(23, 'afzaal', '3460298503051', '0054-04-06', '0064-06-04', 'balqees', '45', '0004-06-05', '0006-06-04', 'village dogranwalivillage dogranwalivillage dogranwalivillage dogranwali'),
(24, 'Afzaal', '34602987654321', '2020-07-16', '', 'Sana Malik', '3460289764512', '2020-07-16', '', 'gasj sjhcvs cwvj');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `feedback_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `email`, `feedback`, `feedback_date`) VALUES
(1, 'afzaaljavaid47@gmai', 'Send', '0000-00-00'),
(2, 'afzaaljavaid47@gmail.com', 'Send', '0000-00-00'),
(3, 'afzaaljavaid47@gmai', 'hys,chvsx', '0000-00-00'),
(4, 'afzaaljavaid475456@gmail.com', 'Good work', '0000-00-00'),
(5, 'afzaaljavaid47@gmai', 's bk s', '0000-00-00'),
(6, 'afzaaljavaid47@gmail.com', 'scbslhucvs,j slhvs,', '0000-00-00'),
(7, 'afzaaljavaid47@gmail.com', 'by', '0000-00-00'),
(8, 'afzaaljavaid47@gmail.com', 'scvsjvc,', '0000-00-00'),
(9, 'afzaaljavaid475456@gmail.com', 'people\r\n', '0000-00-00'),
(10, 'afzaaljavaid475456@gmail.com', 'criianl', '0000-00-00'),
(11, 'afzaaljavaid47@gmail.com', 'coury', '0000-00-00'),
(12, 'afzaaljavaid47@gmail.com', 'phone', '0000-00-00'),
(13, 'afzaaljavaid475456@gmail.com', 'good', '0000-00-00'),
(14, 'afzaaljavaid47@gmail.com', 'Good', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `message_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_name`, `email`, `message`, `message_date`) VALUES
(1, 'Afzaal Javaid', 'asmunni96@gmail.com', 'hy', '0000-00-00'),
(2, 'Afzaal Javaid', 'afzaaljavaid47@gmail.com', 'hy', '02-06-2020'),
(3, 'Afzaal Javaid', 'asmunni96@gmail.com', 'hy', '02-06-2020'),
(4, 'Afzaal Javaid', 'adandevelopers786@gmail.com', 'hy ', '02-06-2020');

-- --------------------------------------------------------

--
-- Table structure for table `people_record`
--

CREATE TABLE `people_record` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `person_cnic` bigint(13) NOT NULL,
  `father_cnic` bigint(13) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `age` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `temporary_address` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  `identity_mark` varchar(255) NOT NULL,
  `extra_remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people_record`
--

INSERT INTO `people_record` (`id`, `name`, `father_name`, `person_cnic`, `father_cnic`, `mobile_number`, `gender`, `age`, `email`, `city`, `temporary_address`, `permanent_address`, `photo`, `identity_mark`, `extra_remarks`) VALUES
(6, 'Afzaal Javaid', '', 3460298503051, 0, '', '', 18, '', '', 'Village: Dogranwali Tehsil : Pasrur District : Sialkot P/O: Khas', 'Village: Dogranwali Tehsil : Pasrur District : Sialkot P/O: Khas', '', '', 'nice gay'),
(7, 'Afzaal Javaid', '', 34602985030511, 0, '', '', 18, '', '', 'Village: Dogranwali Tehsil : Pasrur District : Sialkot P/O: Khas', 'Village: Dogranwali Tehsil : Pasrur District : Sialkot P/O: Khas', '', '', 'nice gay'),
(8, 'Afzaal javaid', 'javaid ahmad', 0, 346027654631, '03434413701', 'Male', 20, 'test@gmail.com', 'SIALKOT', 'village: Dogranwali Tehsil: Pasrur District : Sialkot p/o: Khas', 'village: Dogranwali Tehsil: Pasrur District : Sialkot p/o: Khas', 'IMG_20181120_140350.jpg', 'cut mark on nose', 'no ');

-- --------------------------------------------------------

--
-- Table structure for table `phone_book`
--

CREATE TABLE `phone_book` (
  `name` varchar(255) NOT NULL,
  `cnic` varchar(20) NOT NULL,
  `home_phone` varchar(20) NOT NULL,
  `work_phone` varchar(20) NOT NULL,
  `cell_phone` varchar(20) NOT NULL,
  `fax` bigint(20) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zipcode` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone_book`
--

INSERT INTO `phone_book` (`name`, `cnic`, `home_phone`, `work_phone`, `cell_phone`, `fax`, `state`, `city`, `zipcode`, `address`, `gender`) VALUES
('svdv', '', '', '', '42104', 0, '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `date`) VALUES
(1, 'afzaaljavaid47@gmail.com', '02-06-2020'),
(2, 'adandevelopers786@gmail.com', '02-06-2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `court_record`
--
ALTER TABLE `court_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criminal_record`
--
ALTER TABLE `criminal_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `family_tree_childs_info`
--
ALTER TABLE `family_tree_childs_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `family_tree_parents_info`
--
ALTER TABLE `family_tree_parents_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people_record`
--
ALTER TABLE `people_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `court_record`
--
ALTER TABLE `court_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `criminal_record`
--
ALTER TABLE `criminal_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `family_tree_childs_info`
--
ALTER TABLE `family_tree_childs_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `family_tree_parents_info`
--
ALTER TABLE `family_tree_parents_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `people_record`
--
ALTER TABLE `people_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
