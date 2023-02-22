-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 09:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `journal`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `pincode` int(11) NOT NULL,
  `city` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `fname`, `mname`, `lname`, `address`, `country`, `dob`, `pincode`, `city`, `gender`, `username`, `password`) VALUES
(1, 'venky', 's', 'magnur', 'pune', 'India', '2023-02-20', 413005, 'pune', 'male', 'venky@gmail.com', 'vv'),
(2, 'shweta', 's', 'selokar', 'pune', 'India', '2023-02-20', 21542, 'pune', 'female', 'shweta@gmail.com', 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `configration_reviwer_tbl`
--

CREATE TABLE `configration_reviwer_tbl` (
  `confg_id` int(11) NOT NULL,
  `Auth_id` int(11) NOT NULL,
  `Revi_id` int(11) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `configration_reviwer_tbl`
--

INSERT INTO `configration_reviwer_tbl` (`confg_id`, `Auth_id`, `Revi_id`, `Status`) VALUES
(1, 1, 1, '0'),
(2, 2, 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tbl`
--

CREATE TABLE `feedback_tbl` (
  `fb_id` int(11) NOT NULL,
  `reviewer_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `massage` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback_tbl`
--

INSERT INTO `feedback_tbl` (`fb_id`, `reviewer_id`, `author_id`, `massage`, `status`) VALUES
(1, 1, 1, 'demo', ''),
(2, 1, 1, 'demo', '');

-- --------------------------------------------------------

--
-- Table structure for table `file_mst_tbl`
--

CREATE TABLE `file_mst_tbl` (
  `File_id` int(11) NOT NULL,
  `Auth_id` int(11) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `Subject_Name` varchar(50) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Artical` varchar(50) NOT NULL,
  `keyward` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviewer`
--

CREATE TABLE `reviewer` (
  `reviewer_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `pincode` int(11) NOT NULL,
  `city` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviewer`
--

INSERT INTO `reviewer` (`reviewer_id`, `fname`, `mname`, `lname`, `address`, `country`, `dob`, `pincode`, `city`, `gender`, `username`, `password`) VALUES
(1, 'harshad', 'h', 'dhole', 'pandarpur', 'India', '2023-02-20', 0, '', 'male', 'harshad@gmail.com', 'hh');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fname`, `mname`, `lname`, `address`, `country`, `role`, `dob`, `pincode`, `city`, `gender`, `username`, `password`) VALUES
(2, 'venkatesh', 'shrinivas', 'imagnur', 'solapur', 'india', 'admin', '2000-09-06', '413005', 'solapur', 'male', 'admin@gmail.com', 'admin'),
(3, 'hdgqiu', 'giugi', 'ugiu', 'giugi', 'Uganda', 'author', '2022-09-30', 'giugh', 'iugi', 'male', 'lihoi@gmail.com', 'vv'),
(5, 'akhwdki', 'guhgo', 'uhoi', 'hoih', 'Oman', 'author', '2022-10-09', 'jh', 'lih', 'male', 'venky@gmail.com', 'vv'),
(6, 'iuho', 'ihpihj', 'piojhp', 'oijpo', 'Jamaica', 'author', '2022-09-24', 'jp', 'ojp', 'male', 'poj@gmail.com', 'vv'),
(9, 'venkat', 'shrinivas', 'magnur', 'pune', 'India', 'reviewer', '2022-11-15', '416005', 'pune', 'male', 'vyankat@gmail.com', 'admin'),
(10, 'shweta', 'suresh', 'selokar', 'nagpur', 'India', 'reviewer', '2000-01-01', '', '', 'female', 'shwetaselokar@gmail.', 'shweta'),
(11, 'venky', 'shrinivas', 'magnur', 'pune', 'INDIA', 'reviewer', '06-09-20000', '413005', 'pune', 'male', 'venky@gmail.com', 'admin'),
(13, 'adf', 'ef', 'hjuhf', 'juyfu', 'Yemen', 'reviewer', '2022-12-03', '2165', '6554', 'transgender', 'hoj@gmail.com', 'vv'),
(14, 'kjgi', 'ugoiuh', 'ouho', 'ih', 'Oman', 'reviewer', '2022-12-11', '64', 'khfujyg', 'male', 'khgiu@gmail.com', 'vv'),
(15, 'kugo', 'ughouh', 'oih', 'oihoiho', 'Afghanistan', 'reviewer', '2022-12-22', '45', 'jgio', 'female', 'kjg@gmail.com', 'vv'),
(16, '200', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `configration_reviwer_tbl`
--
ALTER TABLE `configration_reviwer_tbl`
  ADD PRIMARY KEY (`confg_id`),
  ADD KEY `Auth_id` (`Auth_id`),
  ADD KEY `Revi_id` (`Revi_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  ADD PRIMARY KEY (`fb_id`),
  ADD KEY `reviewer_id` (`reviewer_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `file_mst_tbl`
--
ALTER TABLE `file_mst_tbl`
  ADD PRIMARY KEY (`File_id`),
  ADD KEY `Auth_id` (`Auth_id`);

--
-- Indexes for table `reviewer`
--
ALTER TABLE `reviewer`
  ADD PRIMARY KEY (`reviewer_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `configration_reviwer_tbl`
--
ALTER TABLE `configration_reviwer_tbl`
  MODIFY `confg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `file_mst_tbl`
--
ALTER TABLE `file_mst_tbl`
  MODIFY `File_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviewer`
--
ALTER TABLE `reviewer`
  MODIFY `reviewer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `configration_reviwer_tbl`
--
ALTER TABLE `configration_reviwer_tbl`
  ADD CONSTRAINT `configration_reviwer_tbl_ibfk_1` FOREIGN KEY (`Auth_id`) REFERENCES `author` (`author_id`),
  ADD CONSTRAINT `configration_reviwer_tbl_ibfk_2` FOREIGN KEY (`Revi_id`) REFERENCES `reviewer` (`reviewer_id`);

--
-- Constraints for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  ADD CONSTRAINT `feedback_tbl_ibfk_1` FOREIGN KEY (`reviewer_id`) REFERENCES `reviewer` (`reviewer_id`),
  ADD CONSTRAINT `feedback_tbl_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`);

--
-- Constraints for table `file_mst_tbl`
--
ALTER TABLE `file_mst_tbl`
  ADD CONSTRAINT `file_mst_tbl_ibfk_1` FOREIGN KEY (`Auth_id`) REFERENCES `author` (`author_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
