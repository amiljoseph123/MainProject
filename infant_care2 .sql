-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2024 at 08:43 AM
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
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `cid` int(50) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `cdob` date NOT NULL,
  `cyoe` year(4) NOT NULL,
  `cclass` int(3) NOT NULL,
  `cstory` text NOT NULL,
  `cphoto` text NOT NULL,
  `sponsored` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`cid`, `cname`, `cdob`, `cyoe`, `cclass`, `cstory`, `cphoto`, `sponsored`) VALUES
(7, 'Ganesh', '2006-12-20', '2009', 1, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.', '', 1),
(8, 'Suraj', '2005-06-15', '2007', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '', 0),
(9, 'Sagar', '2006-06-14', '2008', 2, 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 0),
(11, 'Nagesh', '2005-04-08', '2009', 3, 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 0),
(13, 'umesh', '2007-06-14', '2010', 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 0),
(14, 'fazal', '2004-06-22', '2007', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tellus integer feugiat scelerisque varius morbi enim nunc faucibus a.', '', 0),
(15, 'Ujwal', '2008-09-21', '2010', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Maecenas ultricies mi eget mauris pharetra.', '', 0),
(16, 'Amith', '1998-12-23', '2004', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Maecenas ultricies mi eget mauris pharetra.', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cloth`
--

CREATE TABLE `cloth` (
  `id` int(11) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `age` int(30) NOT NULL,
  `quantity` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(88, 'DEYA', 'aads@gmail.com', 9999),
(91, 'sana', 'sana@gmail.com', 879879),
(92, 'Amil Joseph', 'emy@gmail.com', 200),
(93, 'Amil Joseph', 'emy@gmail.com', 200);

-- --------------------------------------------------------

--
-- Table structure for table `donation2`
--

CREATE TABLE `donation2` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `razorpay_payment_id` varchar(100) NOT NULL,
  `razorpay_order_id` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donation3`
--

CREATE TABLE `donation3` (
  `id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `donation_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation3`
--

INSERT INTO `donation3` (`id`, `amount`, `name`, `email`, `donation_date`) VALUES
(1, 88.00, 'Amil Joseph', 'emy@gmail.com', '2023-12-02 13:21:02'),
(2, 56.00, 'Amil Joseph', 'admin@gmail.com', '2023-12-02 13:21:36'),
(3, 200.00, 'Amil Joseph', 'kindheart@gmail.com', '2023-12-03 03:30:07'),
(4, 200.00, 'Amil Joseph', 'kindheart@gmail.com', '2023-12-03 03:31:26'),
(5, 300.00, 'niki', 'niki@gmail.com', '2023-12-03 03:35:16'),
(6, 300.00, 'niki', 'niki@gmail.com', '2023-12-03 03:39:18'),
(7, 88.00, 'sum', 'sun@gmail.com', '2023-12-03 03:39:44'),
(8, 100.00, 'abi', 'abi@gmail.com', '2023-12-03 03:43:41'),
(9, 515234.00, 'Amil Joseph', 'yuy@kjk', '2023-12-03 10:29:11'),
(10, 515234.00, 'Amil Joseph', 'yuy@kjk', '2023-12-03 10:29:25'),
(11, 515234.00, 'Amil Joseph', 'yuy@kjk', '2023-12-03 10:29:41'),
(12, 515234.00, 'Amil Joseph', 'yuy@kjk', '2023-12-03 10:33:12'),
(13, 515234.00, 'Amil Joseph', 'yuy@kjk', '2023-12-03 10:39:11'),
(14, 515234.00, 'Amil Joseph', 'yuy@kjk', '2023-12-03 10:39:23'),
(15, 515234.00, 'Amil Joseph', 'yuy@kjk', '2023-12-03 10:39:30'),
(16, 515234.00, 'Amil Joseph', 'yuy@kjk', '2023-12-03 10:40:07'),
(17, 515234.00, 'Amil Joseph', 'yuy@kjk', '2023-12-03 10:40:14'),
(18, 515234.00, 'Amil Joseph', 'yuy@kjk', '2023-12-03 10:41:49'),
(19, 100.00, 'Amil Joseph', 'amiljoseph333@gmail.com', '2023-12-03 18:28:41'),
(20, 200.00, 'Amil Joseph', 'amiljoseph333@gmail.com', '2023-12-03 18:28:53'),
(21, 30072.00, 'reny', 'emy@gmail.com', '2023-12-03 18:33:28'),
(22, 5000.00, 'Amil Joseph', 'amiljoseph333@gmail.com', '2023-12-03 18:38:36'),
(23, 333.00, 'uhuhki', 'adam@gmail.com', '2023-12-03 18:38:56'),
(24, 5000.00, 'hjh', 'admin@gmail.com', '2023-12-03 21:11:31'),
(25, 5000.00, 'hjh', 'admin@gmail.com', '2023-12-03 21:11:37'),
(26, 3000.00, 'emil', 'emy@gmail.com', '2023-12-04 10:14:25'),
(27, 3545.00, 'jifui', 'emy@gmail.com', '2023-12-04 18:28:21'),
(28, 900.00, 'aami', 'aami@gmail.com', '2023-12-09 14:38:13'),
(29, 546.00, 'gxg', 'emy@gmail.com', '2024-01-15 07:40:10'),
(30, 50.00, 'Mary', 'amil@gmail.com', '2024-01-24 06:38:41'),
(31, 5.00, 'htji', 'emy@gmail.com', '2024-01-30 03:29:19'),
(32, 300.00, 'uhdu', 'amiljjhkoseph333@gmail.com', '2024-02-01 07:20:27'),
(33, 888.00, 'bnm', 'ajnjhmil@gmail.com', '2024-02-01 16:04:47');

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
('', 'volunteer', 'dc4b56ff4967374b261a29cd4a90580d', ''),
('a@gmail.com', 'Sponsor', '021035fc653a80078840586d7720483c', ''),
('aa@gmail.com', 'Sponsor', '021035fc653a80078840586d7720483c', ''),
('abbhjbmil@gmail.com', 'volunteer', 'dc4b56ff4967374b261a29cd4a90580d', ''),
('abc123@gmail.com', 'Orphanage', 'a751156c43e6349d8eae1f392950df34', ''),
('abin@gmail.com', 'Sponsor', '875c6d36856e67e95432e15599f6e7ee', '0'),
('abinjoseph2050@gmail.com', 'volunteer', '3ce6ef8b0572865c178f431bcfa81d41', ''),
('abu@gmail.com', 'Sponsor', '875c6d36856e67e95432e15599f6e7ee', '0'),
('adam@gmail.com', 'Sponsor', 'e6e061838856bf47e1de730719fb2609', ''),
('admin@gmail.com', 'admin', 'e6e061838856bf47e1de730719fb2609', ''),
('ajoseph333@gmail.com', 'volunteer', 'dc4b56ff4967374b261a29cd4a90580d', ''),
('amala@gmail.com', 'Orphanage', '021035fc653a80078840586d7720483c', ''),
('amghgeph333@gmail.com', 'volunteer', 'dc4b56ff4967374b261a29cd4a90580d', ''),
('amhgjil@gmail.com', 'volunteer', 'dc4b56ff4967374b261a29cd4a90580d', ''),
('ami@gmail.com', 'volunteer', '021035fc653a80078840586d7720483c', ''),
('amiil@gmail.com', 'volunteer', 'dc4b56ff4967374b261a29cd4a90580d', ''),
('amil123@gmail.com', 'Sponsor', '021035fc653a80078840586d7720483c', ''),
('amil@gmail.com', 'Sponsor', '251800da8d338eb82819105d5f3c7629', ''),
('amilj33@gmail.com', 'volunteer', 'dc4b56ff4967374b261a29cd4a90580d', ''),
('amiljoseph03@gmail.com', 'volunteer', 'ec1cea513adb1d3343c5d115613b9be5', 'cf3f372f26d4796d774f9c51fda8306f'),
('amiljoseph3333@gmail.com', 'Sponsor', '021035fc653a80078840586d7720483c', ''),
('amiljoseph333@gmail.com', 'Sponsor', 'ad02ded4572e1c651f7495137461e3dc', '91e8a36be4bb08afd994a841ca78980a'),
('amiljosetftfcph333@gmail.com', 'volunteer', 'hello1234', '0'),
('amill@gmail.com', 'Sponsor', '875c6d36856e67e95432e15599f6e7ee', '0'),
('amisha@gmail.com', 'Sponsor', '875c6d36856e67e95432e15599f6e7ee', '0'),
('ammmil@gmail.com', 'volunteer', 'dc4b56ff4967374b261a29cd4a90580d', ''),
('amSSSil@gmail.com', 'volunteer', 'dc4b56ff4967374b261a29cd4a90580d', ''),
('amyil@gmail.com', 'volunteer', '021035fc653a80078840586d7720483c', ''),
('ananittarose007@gmail.com', 'volunteer', 'dc4b56ff4967374b261a29cd4a90580d', ''),
('anina@gmail.com', 'Orphanage', '875c6d36856e67e95432e15599f6e7ee', '0'),
('aninaelizebeth@gmail.com', 'volunteer', 'hello1234', '0'),
('aninaelizebethvb@gmail.com', 'volunteer', 'dc4b56ff4967374b261a29cd4a90580d', ''),
('anittarosejoseph007@gmail.com', 'volunteer', 'dc4b56ff4967374b261a29cd4a90580d', ''),
('anna@gmail.com', 'volunteer', '021035fc653a80078840586d7720483c', ''),
('anu@gmail.com', 'volunteer', '021035fc653a80078840586d7720483c', ''),
('ardra@gmail.com', 'volunteer', '021035fc653a80078840586d7720483c', ''),
('assissi123@gmail.com', 'Orphanage', '021035fc653a80078840586d7720483c', ''),
('assissi2023@gmail.com', 'Orphanage', '021035fc653a80078840586d7720483c', ''),
('assissi@gmail.com', 'Orphanage', '875c6d36856e67e95432e15599f6e7ee', '0'),
('b@gmail.com', 'Orphanage', 'f2848d121385eb85020a782f9748f6c1', ''),
('bin@gmail.com', 'Sponsor', '5bf9f926d1b43c982eed54773b05856b', ''),
('binisha1@gmail.com', 'Sponsor', 'f2848d121385eb85020a782f9748f6c1', ''),
('binisha@gmail.com', 'Sponsor', '875c6d36856e67e95432e15599f6e7ee', '0'),
('binishacb5@gmail.com', 'volunteer', 'dc4b56ff4967374b261a29cd4a90580d', ''),
('ca@gmail.com', 'volunteer', 'b95e946fc7628118cc68c5b9e5bad936', ''),
('dilna@gmail.com', 'volunteer', '3c32aff3901544dae28c7021aa22c00e', ''),
('divya@gmail.com', 'volunteer', '3c32aff3901544dae28c7021aa22c00e', ''),
('graceful@gmail.com', 'Orphanage', '82b909601e82c9991d21ce255a4b94c7', ''),
('infantcare123@gmail.com', 'Sponsor', '875c6d36856e67e95432e15599f6e7ee', '0'),
('k@gmail.com', 'Orphanage', 'dc5f0ce999ddbfe8c24b914bcf3f00e6', ''),
('ka@gmail.com', 'Orphanage', 'dc5f0ce999ddbfe8c24b914bcf3f00e6', ''),
('kindheart@gmail.com', 'Orphanage', 'dc5f0ce999ddbfe8c24b914bcf3f00e6', ''),
('laya@gmail.com', 'Sponsor', '344e42db6806a4f133c744d1b7fd18eb', ''),
('mary@gmail.com', 'volunteer', 'e47d96928633157a9101dbec37be271e', ''),
('n@gmail.com', 'Orphanage', '06893a95decf5815f64c6a5418ddf2ee', ''),
('nestf@gmail.com', 'Orphanage', '06893a95decf5815f64c6a5418ddf2ee', ''),
('niya@gmail.com', 'volunteer', '06893a95decf5815f64c6a5418ddf2ee', ''),
('popo@gmail.com', 'Sponsor', '383efc1c56851e323cdaa9d2ce76ee22', ''),
('s@gmail.com', 'Orphanage', '021035fc653a80078840586d7720483c', ''),
('shinyj@gmail.com', 'Sponsor', 's@123456', '0'),
('siya@gmail.com', 'volunteer', 'f39d0e90cca0c3f56a302354532a11df', ''),
('sobinolickal1936@gmail.com', 'volunteer', 'hello1234', '0'),
('sonia@gmail.com', 'volunteer', 'f39d0e90cca0c3f56a302354532a11df', ''),
('stmarys@gmail.com', 'Orphanage', 'f39d0e90cca0c3f56a302354532a11df', ''),
('thomasmegha6@gmail.com', 'volunteer', 'dc4b56ff4967374b261a29cd4a90580d', ''),
('v@gmail.com', 'volunteer', '1be44e2431602d4f05bfd4fce6192a84', ''),
('vimal123@gmail.com', 'volunteer', '1be44e2431602d4f05bfd4fce6192a84', ''),
('x@gmail.com', 'Sponsor', '875c6d36856e67e95432e15599f6e7ee', '0'),
('xyz@gmail.com', 'Sponsor', '742f40cbb203f3b2c879a72a2828dac1', ''),
('za@gmail.com', 'Sponsor', 'af5f08db82d8fad0e71e369091e81226', ''),
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
(23, 'Assisi Bhavan', 'AB1234', '2024-01-07', 'assissi2023@gmail.com', 2147483647, 'Kozhikode', 'Kattappana', '989998'),
(24, 'Karunya', 'KH2454', '2023-11-06', 'ka@gmail.com', 2147483647, 'Kozhikode', 'Idukki', '685507'),
(25, 'Nest12345', 'NE2456', '2023-11-26', 'nestf@gmail.com', 2147483647, 'kottayam', 'kattappana', '685508'),
(26, 'Graceful Wings', 'GG1234', '2023-12-07', 'graceful@gmail.com', 2147483647, 'Kottayam', 'Kanjirappally', '685507'),
(27, 'St Marys Trust', 'SM4556', '2023-12-06', 'stmarys@gmail.com', 2147483647, 'Thrissur', 'Chavakkad', '675345');

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
(45, 'adam john', 'adam@gmail.com', 2147483647, '234567987609'),
(46, 'Popo', 'popo@gmail.com', 2147483647, '111111111111'),
(47, 'Binish', 'bin@gmail.com', 2147483647, '789776469009'),
(49, 'Amil', 'amil123@gmail.com', 2147483647, '123456734564'),
(50, 'Laya', 'laya@gmail.com', 2147483647, '234567898765'),
(51, 'Z', 'za@gmail.com', 2147483647, '567898765234'),
(52, 'X', 'xyz@gmail.com', 2147483647, '234567898765'),
(53, 'Amil Joseph', 'aa@gmail.com', 2147483647, '567898765234');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor_child`
--

CREATE TABLE `sponsor_child` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pphone` int(40) NOT NULL,
  `aaadhar` int(40) NOT NULL,
  `district` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `marital` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sponsor_child`
--

INSERT INTO `sponsor_child` (`id`, `fname`, `lname`, `email`, `pphone`, `aaadhar`, `district`, `address`, `dob`, `marital`, `gender`, `status`) VALUES
(5, 'anina', 'eliza', 'adam@gmail.com', 2147483647, 2147483647, 'kottayam', 'Thekkummoottil(H)', '2024-01-31', 'married', 'on', 'approved'),
(6, 'ang', 'sdg', 'adam@gmail.com', 2147483647, 2147483647, 'kottayam', 'Thekkummoottil(H)', '2024-01-31', 'married', 'on', 'rejected'),
(7, 'ang', 'sdg', 'adam@gmail.com', 2147483647, 2147483647, 'kottayam', 'Thekkummoottil(H)', '2024-01-31', 'married', 'on', 'rejected'),
(25, 'Amil', 'Joseph', 'emy@gmail.com', 2147483647, 2147483647, 'kottayam', 'Thekkummoottil(H)', '2024-02-07', 'divorced', 'Male', 'approved'),
(29, 'john', 'joy', 'adam@gmail.com', 2147483647, 2147483647, 'kottayam', 'Thekkummoottil(H)', '2024-02-08', 'married', 'Male', 'approved'),
(30, 'adam', 'john', 'ada', 2147483647, 2147483647, 'Idukki', 'Thekkummoottil(H)', '2024-02-14', 'single', 'Male', 'pending'),
(31, 'Amilhgh', 'Joseph', 'hjhgjghi@gmail.com', 2147483647, 56575686, 'Idukki', 'Thekkummoottil(H)', '2024-02-16', 'married', '', 'pending'),
(32, 'Amilhgh', 'Joseph', 'hjhgjghi@gmail.com', 2147483647, 56575686, 'Idukki', 'Thekkummoottil(H)', '2024-02-16', 'married', '', 'pending'),
(33, 'Amilhgh', 'Joseph', 'hjhgjghi@gmail.com', 2147483647, 56575686, 'Idukki', 'Thekkummoottil(H)', '2024-02-16', 'married', '', 'pending'),
(34, 'hjgkkh', 'hjg', 'nestf@gmail.com', 2147483647, 2147483647, 'Idukki', 'Thekkummoottil(H)', '2024-02-04', 'single', 'Male', 'pending'),
(35, 'chinchu', 'Joseph', 'chinchu@123@gmail.com', 2147483647, 2147483647, 'kottayam', 'Thotttathilil(H)', '2024-02-14', 'single', 'Female', 'approved');

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
(269, 'zera', 'jo', 1, 'female', 'nestf@gmail.com', 'imageupload/Amil_photo.jpg'),
(270, 'Binisha', 'serr', 12, 'female', 'nestf@gmail.com', 'imageupload/Amil_photo.jpg'),
(273, 'Adfhgf', 'Jo', 5, 'male', 'nestf@gmail.com', 'imageupload/Screenshot (10).png'),
(274, 'Binisha', 'Joseph', 11, 'female', 'amiljoseph03@gmail.com', 'imageupload/Screenshot (8).png'),
(275, 'Chinchu', 'Joseph', 1, 'female', 'amiljoseph03@gmail.com', 'imageupload/Screenshot (8).png'),
(276, 'abin', 'Jo', 1, 'female', 'nestf@gmail.com', 'imageupload/Amil-Joseph.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `pp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `fname`, `username`, `password`, `pp`) VALUES
(1, '', 'uuuuu', 'amil', '$2y$10$S1N9.UN/8oC3cI1x9C0beu.5sBJ/PtQBE/Aw1aa/yted8IdcKA7GW', 'amil65c28733995d03.94926008.png'),
(2, '', 'jkdk', 'amil', '$2y$10$oXrgf9hbCucS2bICjdap6Om/7lz7/cTHVVZE47vEzT9N3A9hWjaAO', 'amil65c2878e8e1003.19452153.png'),
(3, '', 'uuuuu', 'amill', '$2y$10$jIjXhe2Kp0O0dUxUIRswXerTeThjPju.bGPJhVaQLRYLqNqgk34ze', 'amill65c289a64b0d64.10279678.png'),
(4, '', 'uuuuu', 'amil', '$2y$10$pMhAKfHkUOH8/kIMyuALQOO9NRm7Kj0uYOVqm/lctjmYYeclgrsda', 'amil65c28fcf92d0a3.89601524.png'),
(5, '', 'Amil joseph', 'amilj', '$2y$10$uoOTaI0vbkwAobC0I.um5eYj2dZCDzNKzAqpt/IXeB2CVNkSoTCrW', 'amilj65c28ffd646eb3.94688062.png'),
(6, '', 'uuuuu', 'amiljo', '$2y$10$SUF.m227g5IQBFCMCT0W/u.Jt1OH3GFHm6TKWzEIeGJRI4eD1B.TO', 'amiljo65c29037cd9e14.34654617.png'),
(7, '', 'anil', 'anil123', '$2y$10$2tzdtYeHuoQL4tfNYESGYuWwahhfZwA8j43ZInLwJ/E13R5PkYnbe', 'anil12365c2f8f6be7f79.66756269.png'),
(8, '', 'abin joseph', 'abinj', '$2y$10$mV/gm6HOwXfn/cwx0lCS2.7HsOtzb35UlkG/ZOMmDY.n2CqDUvfyq', 'abinj65c2fb95994b02.93323511.png'),
(9, '', 'anina', 'anina', '$2y$10$N0sRNrJSti3AhWZTVFMPwe//pTN3xLz8YpesazvnWgNn5KPSyot7W', 'anina65c2ff1c0bbff8.66394875.png'),
(10, '', 'zxc', 'abc', '$2y$10$YF43c.s48RSH0fHQ2Io95.ftb2FgmLxrvIYK5iEhy/g13AtAXoJcS', 'abc65c3062481dd64.52840888.png');

-- --------------------------------------------------------

--
-- Table structure for table `vapplication`
--

CREATE TABLE `vapplication` (
  `id` int(50) NOT NULL,
  `vol_id` varchar(50) NOT NULL,
  `orph_id` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vapplication`
--

INSERT INTO `vapplication` (`id`, `vol_id`, `orph_id`, `status`) VALUES
(150, 'anu@gmail.com', 'assissi2023@gmail.com', 'pending'),
(157, 'anna@gmail.com', 'assissi2023@gmail.com', 'pending'),
(159, 'assissi2023@gmail.com', 'anna@gmail.com', 'pending'),
(160, 'mary@gmail.com', 'assissi2023@gmail.com', 'pending'),
(161, 'mary@gmail.com', 'assissi2023@gmail.com', 'pending'),
(162, 'mary@gmail.com', 'assissi2023@gmail.com', 'pending'),
(163, 'divya@gmail.com', 'assissi2023@gmail.com', 'pending'),
(164, 'divya@gmail.com', 'assissi2023@gmail.com', 'pending'),
(165, 'vimal123@gmail.com', 'nestf@gmail.com', 'pending'),
(166, 'vimal123@gmail.com', 'assissi2023@gmail.com', 'pending'),
(167, 'v@gmail.com', 'assissi2023@gmail.com', 'pending'),
(168, 'v@gmail.com', 'assissi2023@gmail.com', 'pending'),
(169, 'siya@gmail.com', 'nestf@gmail.com', 'pending'),
(170, 'siya@gmail.com', 'nestf@gmail.com', 'pending');

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
  `district` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `name`, `email`, `phone`, `aadhar`, `district`, `status`) VALUES
(48, 'Joseph', 'joseph@gmail.com', 2147483647, 2147483647, 'Ernakulam', 'rejected'),
(49, 'Anina', 'anina333@gmail.com', 2147483647, 2147483647, 'Idukki', 'rejected'),
(54, 'Abbnh', 'binishacb5@gmail.com', 2147483647, 2147483647, 'Pathanamthitta', 'approved'),
(55, 'Euyhh', 'thomasmegha6@gmail.com', 2147483647, 2147483647, 'Kollam', 'approved'),
(56, 'Anitta', 'anittarosejoseph007@gmail.com', 2147483647, 2147483647, 'Thrissur', 'approved'),
(57, 'Anina', 'aninaelizebethvb@gmail.com', 2147483647, 2147483647, 'Idukki', 'approved'),
(58, 'Agyghgj', 'anjaliraj0308@gmail.com', 2147483647, 2147483647, 'Ernakulam', 'pending'),
(59, 'Amil Joseph', 'ananittarose007@gmail.com', 2147483647, 2147483647, 'Thiruvananthapuram', 'approved'),
(60, 'NBB', 'emKJKy@gmail.com', 2147483647, 2147483647, 'Thiruvananthapuram', 'pending'),
(61, 'Mary', 'amiljoiuhjdkhdkgseph333@gmail.com', 2147483647, 2147483647, 'Kozhikode', 'pending'),
(62, 'Abin Joseph', 'abinjoseph2050@gmail.com', 2147483647, 2147483647, 'Idukki', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_applications`
--

CREATE TABLE `volunteer_applications` (
  `id` int(11) NOT NULL,
  `orphanage_id` int(11) DEFAULT NULL,
  `volunteer_name` varchar(100) DEFAULT NULL,
  `volunteer_email` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cloth`
--
ALTER TABLE `cloth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation2`
--
ALTER TABLE `donation2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation3`
--
ALTER TABLE `donation3`
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
-- Indexes for table `sponsor_child`
--
ALTER TABLE `sponsor_child`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vapplication`
--
ALTER TABLE `vapplication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer_applications`
--
ALTER TABLE `volunteer_applications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cloth`
--
ALTER TABLE `cloth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `donation2`
--
ALTER TABLE `donation2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donation3`
--
ALTER TABLE `donation3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `orphanage`
--
ALTER TABLE `orphanage`
  MODIFY `o_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `s_sponsor_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `sponsor_child`
--
ALTER TABLE `sponsor_child`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vapplication`
--
ALTER TABLE `vapplication`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `volunteer_applications`
--
ALTER TABLE `volunteer_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
