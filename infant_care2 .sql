-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 11:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infant_care2`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `name`, `email`, `amount`) VALUES
(51, 'emily', 'admin@gmail.com', 10000),
(55, 'aami', 'aami@gmail.com', 200),
(56, 'Binisha', 'binisha@gmail.com', 300),
(72, 'poopi', 'uiuiou@gmail.com', 50),
(88, 'DEYA', 'aads@gmail.com', 9999);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `verify_token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `user_type`, `password`, `verify_token`) VALUES
('a@gmail.com', 'Sponsor', '021035fc653a80078840586d7720483c', ''),
('abin@gmail.com', 'Sponsor', '875c6d36856e67e95432e15599f6e7ee', '0'),
('abu@gmail.com', 'Sponsor', '875c6d36856e67e95432e15599f6e7ee', '0'),
('adam@gmail.com', 'Sponsor', 'e6e061838856bf47e1de730719fb2609', ''),
('admin@gmail.com', 'admin', 'e6e061838856bf47e1de730719fb2609', ''),
('amala@gmail.com', 'Orphanage', '021035fc653a80078840586d7720483c', ''),
('amil@gmail.com', 'Sponsor', '251800da8d338eb82819105d5f3c7629', ''),
('amiljoseph03@gmail.com', 'Sponsor', 'fb808bfb23db49b19fd2cf23e3cdf1a1', ''),
('amiljoseph333@gmail.com', 'Sponsor', '97c77b7e5746c23ec3cb4078b969b63e', ''),
('amill@gmail.com', 'Sponsor', '875c6d36856e67e95432e15599f6e7ee', '0'),
('amisha@gmail.com', 'Sponsor', '875c6d36856e67e95432e15599f6e7ee', '0'),
('amyil@gmail.com', 'volunteer', '021035fc653a80078840586d7720483c', ''),
('anina@gmail.com', 'Orphanage', '875c6d36856e67e95432e15599f6e7ee', '0'),
('anna@gmail.com', 'volunteer', '021035fc653a80078840586d7720483c', ''),
('assissi@gmail.com', 'Orphanage', '875c6d36856e67e95432e15599f6e7ee', '0'),
('b@gmail.com', 'Orphanage', 'f2848d121385eb85020a782f9748f6c1', ''),
('bin@gmail.com', 'Sponsor', '5bf9f926d1b43c982eed54773b05856b', ''),
('binisha1@gmail.com', 'Sponsor', 'f2848d121385eb85020a782f9748f6c1', ''),
('binisha@gmail.com', 'Sponsor', '875c6d36856e67e95432e15599f6e7ee', '0'),
('ca@gmail.com', 'volunteer', 'b95e946fc7628118cc68c5b9e5bad936', ''),
('infantcare123@gmail.com', 'Sponsor', '875c6d36856e67e95432e15599f6e7ee', '0'),
('kindheart@gmail.com', 'Orphanage', 'dc5f0ce999ddbfe8c24b914bcf3f00e6', ''),
('n@gmail.com', 'Orphanage', '06893a95decf5815f64c6a5418ddf2ee', ''),
('popo@gmail.com', 'Sponsor', '383efc1c56851e323cdaa9d2ce76ee22', ''),
('shinyj@gmail.com', 'Sponsor', 's@123456', '0'),
('v@gmail.com', 'volunteer', '1be44e2431602d4f05bfd4fce6192a84', ''),
('x@gmail.com', 'Sponsor', '875c6d36856e67e95432e15599f6e7ee', '0'),
('z@gmail.com', 'Sponsor', 'z@123456', ''),
('zzz@gmail.com', 'Sponsor', '875c6d36856e67e95432e15599f6e7ee', '0');

-- --------------------------------------------------------

--
-- Table structure for table `orphanage`
--

CREATE TABLE `orphanage` (
  `o_id` int(255) NOT NULL,
  `o_name` varchar(255) NOT NULL,
  `o_govtid` varchar(255) NOT NULL,
  `o_edate` date NOT NULL,
  `o_email` varchar(255) NOT NULL,
  `o_phone` int(10) NOT NULL,
  `o_district` varchar(255) NOT NULL,
  `o_city` varchar(255) NOT NULL,
  `o_pincode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orphanage`
--

INSERT INTO `orphanage` (`o_id`, `o_name`, `o_govtid`, `o_edate`, `o_email`, `o_phone`, `o_district`, `o_city`, `o_pincode`) VALUES
(9, 'Assisi Bhavan', 'AS1234', '2023-10-19', 'assissi@gmail.com', 2147483647, 'Kozhikode', 'Kattappana', '567577'),
(10, 'Pratheeksha Bhavan', 'PS1234', '2023-10-28', 'p@gmail.com', 2147483647, 'Wayanad', 'Idukki', '685507'),
(12, 'Caree', 'GF1234', '2023-10-13', 'caree@gmail.com', 2147483647, 'Kozhikode', 'Kattappana', '989998'),
(15, 'Bethlehem', 'BE3456', '2023-11-26', 'b@gmail.com', 2147483647, 'Alappuzha', 'Idukki', '685507'),
(16, 'Amala', 'AM2345', '2023-12-01', 'amala@gmail.com', 2147483647, 'Kannur', 'Idukki', '685507'),
(17, 'Nest Foundation', 'NH4333', '2023-12-01', 'n@gmail.com', 2147483647, 'Kozhikode', 'Idukki', '685507');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE `sponsor` (
  `s_sponsor_id` int(255) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `s_phone` int(10) NOT NULL,
  `s_aadhar` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sponsor`
--

INSERT INTO `sponsor` (`s_sponsor_id`, `s_name`, `s_email`, `s_phone`, `s_aadhar`) VALUES
(1, 'emil', 'emil@gmail.com', 790251473, '234567898765'),
(9, 'BINISH', 'binisha@gmail.com', 2147483647, '567898765234'),
(10, 'Amil Joseph', 'amilx@gmail.com', 2147483647, '234567898765'),
(15, 'Binisha', 'infantcare123@gmail.com', 2147483647, '567898765234'),
(21, 'Akash', 'akash@gmail.com', 2147483647, '757865444444'),
(43, 'amil', 'a@gmail.com', 790251473, '234567898765'),
(44, 'Binisha', 'binisha1@gmail.com', 2147483647, '123456734564'),
(45, 'Adam John', 'adam@gmail.com', 2147483647, '234567987609'),
(46, 'Popo', 'popo@gmail.com', 2147483647, '111111111111'),
(47, 'Binish', 'bin@gmail.com', 2147483647, '789776469009');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(30) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `age` int(30) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `orpanage_id` varchar(200) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `firstname`, `lastname`, `age`, `gender`, `orpanage_id`, `photo`) VALUES
(179, 'Amil', 'Joseph', 3, 'female', 'kindheart@gmail.com', 'imageupload/images.jpg'),
(180, 'Binisha', 'CB', 6, 'female', 'kindheart@gmail.com', 'imageupload/c1.jpg'),
(181, 'Abin', 'Joseph', 4, 'male', 'kindheart@gmail.com', 'imageupload/images (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(70) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `aadhar` int(12) NOT NULL,
  `district` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `name`, `email`, `phone`, `aadhar`, `district`) VALUES
(1, 'Anna', 'anna@gmail.com', 2147483647, 2147483647, ''),
(2, 'Amy', 'amyil@gmail.com', 2147483647, 0, ''),
(3, 'A', 'ca@gmail.com', 2147483647, 2147483647, 'Thiruvananthapuram'),
(4, 'Vamika', 'v@gmail.com', 2147483647, 2147483647, 'Thiruvananthapuram');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `orphanage`
--
ALTER TABLE `orphanage`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`s_sponsor_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `orphanage`
--
ALTER TABLE `orphanage`
  MODIFY `o_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `s_sponsor_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
