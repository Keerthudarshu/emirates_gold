-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2025 at 09:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emirates`
--

-- --------------------------------------------------------

--
-- Table structure for table `diamond_bangles`
--

CREATE TABLE `diamond_bangles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diamond_bangles`
--

INSERT INTO `diamond_bangles` (`id`, `name`, `code`, `weight`, `image`, `description`) VALUES
(1, 'Diamond Bangle 1', 'DBA001', '6.50 GM', 'img/diamond_bangles/0748223195-6-1-1536x1152.jpg', 'Diamond Bangle'),
(2, 'Diamond Bangle 2', 'DBA002', '6.20 GM', 'img/diamond_bangles/143820123-3-min-1152x1536.jpg', 'Diamond Bangle'),
(3, 'Diamond Bangle 3', 'DBA003', '6.80 GM', 'img/diamond_bangles/0748208192-5-1536x1152.jpg', 'Diamond Bangle'),
(4, 'Diamond Bangle 4', 'DBA004', '7.00 GM', 'img/diamond_bangles/0748220195-6-1536x1152.jpg', 'Diamond Bangle');

-- --------------------------------------------------------

--
-- Table structure for table `diamond_bracelets`
--

CREATE TABLE `diamond_bracelets` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diamond_bracelets`
--

INSERT INTO `diamond_bracelets` (`id`, `name`, `code`, `weight`, `image`, `description`) VALUES
(1, 'Diamond Bracelet 1', 'DB001', '5.50 GM', 'img/diamond_bracelets/14482023-2-min-1152x1536.jpg', 'Diamond Bracelet'),
(2, 'Diamond Bracelet 2', 'DB002', '5.75 GM', 'img/diamond_bracelets/074091480-2-min-1152x1536.jpg', 'Diamond Bracelet'),
(3, 'Diamond Bracelet 3', 'DB003', '6.00 GM', 'img/diamond_bracelets/0748201783-2-1536x1152.jpg', 'Diamond Bracelet'),
(4, 'Diamond Bracelet 4', 'DB004', '5.80 GM', 'img/diamond_bracelets/14382211-2-min-1152x1536.jpg', 'Diamond Bracelet');

-- --------------------------------------------------------

--
-- Table structure for table `diamond_earring`
--

CREATE TABLE `diamond_earring` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diamond_earring`
--

INSERT INTO `diamond_earring` (`id`, `name`, `code`, `weight`, `image`, `description`) VALUES
(1, 'Diamond Earring 1', 'DE001', '2.10 GM', 'img/diamond_earring/14482519-1-min-1152x1536.jpg', 'Diamond Earring'),
(2, 'Diamond Earring 2', 'DE002', '2.30 GM', 'img/diamond_earring/14482859-1-min-1152x1536.jpg', 'Diamond Earring'),
(3, 'Diamond Earring 3', 'DE003', '2.00 GM', 'img/diamond_earring/074091080-9-min-1152x1536.jpg', 'Diamond Earring'),
(4, 'Diamond Earring 4', 'DE004', '2.15 GM', 'img/diamond_earring/144822414-1-min-1152x1536.jpg', 'Diamond Earring'),
(5, 'Diamond Earring 5', 'DE005', '2.25 GM', 'img/diamond_earring/144825210-1-min-1152x1536.jpg', 'Diamond Earring'),
(6, 'Diamond Earring 6', 'DE006', '2.40 GM', 'img/diamond_earring/144825510-6-min-1152x1536.jpg', 'Diamond Earring'),
(7, 'Diamond Earring 7', 'DE007', '2.35 GM', 'img/diamond_earring/0740921135-2-2-1536x1152.jpg', 'Diamond Earring'),
(8, 'Diamond Earring 8', 'DE008', '2.50 GM', 'img/diamond_earring/0748207783-4-1536x1152.jpg', 'Diamond Earring'),
(9, 'Diamond Earring 9', 'DE009', '2.45 GM', 'img/diamond_earring/07482011129-6-1536x1152.jpg', 'Diamond Earring'),
(10, 'Diamond Earring 10', 'DE010', '2.20 GM', 'img/diamond_earring/14482489-2-min-1152x1536.jpg', 'Diamond Earring');

-- --------------------------------------------------------

--
-- Table structure for table `diamond_necklaces`
--

CREATE TABLE `diamond_necklaces` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diamond_necklaces`
--

INSERT INTO `diamond_necklaces` (`id`, `name`, `code`, `weight`, `image`, `description`) VALUES
(1, 'Diamond Necklace 1', 'DN001', '10.00 GM', 'img/diamond_necklaces/07482011149-1-1536x1152.jpg', 'Diamond Necklace'),
(2, 'Diamond Necklace 2', 'DN002', '10.20 GM', 'img/diamond_necklaces/07482011214-6-1536x1152.jpg', 'Diamond Necklace'),
(3, 'Diamond Necklace 3', 'DN003', '10.10 GM', 'img/diamond_necklaces/07482021149-4-1536x1152.jpg', 'Diamond Necklace'),
(4, 'Diamond Necklace 4', 'DN004', '10.40 GM', 'img/diamond_necklaces/07482031149-4-1536x1152.jpg', 'Diamond Necklace'),
(5, 'Diamond Necklace 5', 'DN005', '10.25 GM', 'img/diamond_necklaces/07482041149-1-1536x1152.jpg', 'Diamond Necklace'),
(6, 'Diamond Necklace 6', 'DN006', '10.35 GM', 'img/diamond_necklaces/07482091204-4-1536x1152.jpg', 'Diamond Necklace'),
(7, 'Diamond Necklace 7', 'DN007', '10.50 GM', 'img/diamond_necklaces/07482101204-2-1536x1152.jpg', 'Diamond Necklace'),
(8, 'Diamond Necklace 8', 'DN008', '10.70 GM', 'img/diamond_necklaces/07482111204-8-1536x1152.jpg', 'Diamond Necklace'),
(9, 'Diamond Necklace 9', 'DN009', '10.15 GM', 'img/diamond_necklaces/14365031861-1-1536x1152.jpg', 'Diamond Necklace'),
(10, 'Diamond Necklace 10', 'DN010', '10.00 GM', 'img/diamond_necklaces/14482027-8-min-1152x1536.jpg', 'Diamond Necklace'),
(11, 'Diamond Necklace 11', 'DN011', '10.60 GM', 'img/diamond_necklaces/14482756-1-min-1536x1152.jpg', 'Diamond Necklace'),
(12, 'Diamond Necklace 12', 'DN012', '10.30 GM', 'img/diamond_necklaces/14482766-1-min-1536x1152.jpg', 'Diamond Necklace'),
(13, 'Diamond Necklace 13', 'DN013', '10.80 GM', 'img/diamond_necklaces/14482816-1-min-1-1536x1152.jpg', 'Diamond Necklace'),
(14, 'Diamond Necklace 14', 'DN014', '10.90 GM', 'img/diamond_necklaces/14482896-1-min-1536x1152.jpg', 'Diamond Necklace'),
(15, 'Diamond Necklace 15', 'DN015', '10.85 GM', 'img/diamond_necklaces/074091980-2-min-1536x1152.jpg', 'Diamond Necklace'),
(16, 'Diamond Necklace 16', 'DN016', '11.00 GM', 'img/diamond_necklaces/125820135-1-1-1380x1536.jpg', 'Diamond Necklace'),
(17, 'Diamond Necklace 17', 'DN017', '10.50 GM', 'img/diamond_necklaces/144820114-1-min-1152x1536.jpg', 'Diamond Necklace'),
(18, 'Diamond Necklace 18', 'DN018', '10.60 GM', 'img/diamond_necklaces/144820115-5-min-1536x1152.jpg', 'Diamond Necklace'),
(19, 'Diamond Necklace 19', 'DN019', '10.90 GM', 'img/diamond_necklaces/144820214-5-min-1152x1536.jpg', 'Diamond Necklace'),
(20, 'Diamond Necklace 20', 'DN020', '10.75 GM', 'img/diamond_necklaces/144820215-3-min-1536x1152.jpg', 'Diamond Necklace'),
(21, 'Diamond Necklace 21', 'DN021', '10.95 GM', 'img/diamond_necklaces/144820314-1-min-1152x1536.jpg', 'Diamond Necklace'),
(22, 'Diamond Necklace 22', 'DN022', '11.10 GM', 'img/diamond_necklaces/144821713-1-min-1152x1536.jpg', 'Diamond Necklace'),
(23, 'Diamond Necklace 23', 'DN023', '11.00 GM', 'img/diamond_necklaces/194820213-2-min-1152x1536.jpg', 'Diamond Necklace'),
(24, 'Diamond Necklace 24', 'DN024', '11.15 GM', 'img/diamond_necklaces/194820413-2-min-1152x1536.jpg', 'Diamond Necklace'),
(25, 'Diamond Necklace 25', 'DN025', '11.25 GM', 'img/diamond_necklaces/194820513-1-min-1152x1536.jpg', 'Diamond Necklace'),
(26, 'Diamond Necklace 26', 'DN026', '11.20 GM', 'img/diamond_necklaces/194820613-1-min-1152x1536.jpg', 'Diamond Necklace'),
(27, 'Diamond Necklace 27', 'DN027', '11.30 GM', 'img/diamond_necklaces/194820713-2-min-1152x1536.jpg', 'Diamond Necklace'),
(28, 'Diamond Necklace 28', 'DN028', '11.40 GM', 'img/diamond_necklaces/194823212-2-min-1152x1536.jpg', 'Diamond Necklace'),
(29, 'Diamond Necklace 29', 'DN029', '11.35 GM', 'img/diamond_necklaces/194823312-2-1536x1152.jpg', 'Diamond Necklace'),
(30, 'Diamond Necklace 30', 'DN030', '11.45 GM', 'img/diamond_necklaces/0740954135-1-1536x1152.jpg', 'Diamond Necklace'),
(31, 'Diamond Necklace 31', 'DN031', '11.50 GM', 'img/diamond_necklaces/0748207692-10-1-1536x1152.jpg', 'Diamond Necklace'),
(32, 'Diamond Necklace 32', 'DN032', '11.55 GM', 'img/diamond_necklaces/0748213192-5-1536x1152.jpg', 'Diamond Necklace'),
(33, 'Diamond Necklace 33', 'DN033', '11.60 GM', 'img/diamond_necklaces/0758206996-1-1152x1536.jpg', 'Diamond Necklace'),
(34, 'Diamond Necklace 34', 'DN034', '11.65 GM', 'img/diamond_necklaces/0758209996-1-1152x1536.jpg', 'Diamond Necklace'),
(35, 'Diamond Necklace 35', 'DN035', '11.70 GM', 'img/diamond_necklaces/0758262632-1-1152x1536.jpg', 'Diamond Necklace'),
(36, 'Diamond Necklace 36', 'DN036', '11.75 GM', 'img/diamond_necklaces/07434213692-1536x1473.jpg', 'Diamond Necklace');

-- --------------------------------------------------------

--
-- Table structure for table `diamond_pendants`
--

CREATE TABLE `diamond_pendants` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diamond_pendants`
--

INSERT INTO `diamond_pendants` (`id`, `name`, `code`, `weight`, `image`, `description`) VALUES
(1, 'Diamond Pendant 1', 'DP001', '1.50 GM', 'img/diamond_pemdant/07482161005-2-1536x1152.jpg', 'Diamond Pendant'),
(2, 'Diamond Pendant 2', 'DP002', '1.65 GM', 'img/diamond_pemdant/144820514-2-min-1536x1152.jpg', 'Diamond Pendant'),
(3, 'Diamond Pendant 3', 'DP003', '1.70 GM', 'img/diamond_pemdant/144820714-4-min-1536x1152.jpg', 'Diamond Pendant'),
(4, 'Diamond Pendant 4', 'DP004', '1.80 GM', 'img/diamond_pemdant/144820814-2-min-1536x1152.jpg', 'Diamond Pendant'),
(5, 'Diamond Pendant 5', 'DP005', '1.55 GM', 'img/diamond_pemdant/144822513-1-min-1152x1536.jpg', 'Diamond Pendant'),
(6, 'Diamond Pendant 6', 'DP006', '1.60 GM', 'img/diamond_pemdant/145821416-1-1152x1536.jpg', 'Diamond Pendant'),
(7, 'Diamond Pendant 7', 'DP007', '1.75 GM', 'img/diamond_pemdant/0748206591-1-1536x1152.jpg', 'Diamond Pendant'),
(8, 'Diamond Pendant 8', 'DP008', '1.90 GM', 'img/diamond_pemdant/0748212594-5-1536x1152.jpg', 'Diamond Pendant'),
(9, 'Diamond Pendant 9', 'DP009', '1.60 GM', 'img/diamond_pemdant/0758205656-1-1152x1536.jpg', 'Diamond Pendant'),
(10, 'Diamond Pendant 10', 'DP010', '1.55 GM', 'img/diamond_pemdant/07365402667-2-1536x1152.jpg', 'Diamond Pendant'),
(11, 'Diamond Pendant 11', 'DP011', '1.70 GM', 'img/diamond_pemdant/07382102007-3-1536x1152.jpg', 'Diamond Pendant'),
(12, 'Diamond Pendant 12', 'DP012', '1.85 GM', 'img/diamond_pemdant/07482121005-2-1536x1152.jpg', 'Diamond Pendant'),
(13, 'Diamond Pendant 13', 'DP013', '1.65 GM', 'img/diamond_pemdant/07482141005-1-1536x1152.jpg', 'Diamond Pendant');

-- --------------------------------------------------------

--
-- Table structure for table `diamond_rings`
--

CREATE TABLE `diamond_rings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diamond_rings`
--

INSERT INTO `diamond_rings` (`id`, `name`, `code`, `weight`, `image`, `description`) VALUES
(1, 'Diamond Ring 1', 'DR001', '2.50 GM', 'img/diamond_ring/07365172667-1-1536x1152.jpg', 'Diamond Ring'),
(2, 'Diamond Ring 2', 'DR002', '3.10 GM', 'img/diamond_ring/074090479-8-min-1152x1536.jpg', 'Diamond Ring'),
(3, 'Diamond Ring 3', 'DR003', '2.80 GM', 'img/diamond_ring/0740933135-2-1536x1152.jpg', 'Diamond Ring'),
(4, 'Diamond Ring 4', 'DR004', '3.45 GM', 'img/diamond_ring/0748201595-1-1536x1152.jpg', 'Diamond Ring'),
(5, 'Diamond Ring 5', 'DR005', '3.00 GM', 'img/diamond_ring/0748202599-min-1338x1536.jpg', 'Diamond Ring');

-- --------------------------------------------------------

--
-- Table structure for table `gold_bangles`
--

CREATE TABLE `gold_bangles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gold_bangles`
--

INSERT INTO `gold_bangles` (`id`, `name`, `code`, `weight`, `image`, `description`) VALUES
(1, 'Gold Bangle 1', 'GB001', '5.20 GM', 'img/gold_ring/07434201862-1480x1536.jpg', 'Gold Bangle'),
(2, 'Gold Bangle 2', 'GB002', '4.392 GM', 'img/gold_ring/07665021239-ring-4.392-10.jpg', 'Gold Bangle'),
(3, 'Gold Bangle 3', 'GB003', '4.462 GM', 'img/gold_ring/07665021242ring-4.462-11.jpg', 'Gold Bangle'),
(4, 'Gold Bangle 4', 'GB004', '4.192 GM', 'img/gold_ring/07665041242ring-4.192-12-1.jpg', 'Gold Bangle'),
(5, 'Gold Bangle 5', 'GB005', '3 GM', 'img/gold_ring/07665061242ring-3-R2.jpg', 'Gold Bangle'),
(6, 'Gold Bangle 6', 'GB006', '3 GM', 'img/gold_ring/07665081239-ring-3.jpg', 'Gold Bangle'),
(7, 'Gold Bangle 7', 'GB007', '3.181 GM', 'img/gold_ring/07665081242-ring-3.181-4.jpg', 'Gold Bangle'),
(8, 'Gold Bangle 8', 'GB008', '2.644 GM', 'img/gold_ring/07665131242ring-2.644-5.jpg', 'Gold Bangle'),
(9, 'Gold Bangle 9', 'GB009', '4.292 GM', 'img/gold_ring/07665141242-ring-4.292-6.jpg', 'Gold Bangle'),
(10, 'Gold Bangle 10', 'GB010', '3.062 GM', 'img/gold_ring/07665161242rings-3.062-7.jpg', 'Gold Bangle'),
(11, 'Gold Bangle 11', 'GB011', '--', 'img/gold_ring/074340140-min-1446x1536.jpg', 'Gold Bangle'),
(12, 'Gold Bangle 12', 'GB012', '--', 'img/gold_ring/074340753-min-1360x1536.jpg', 'Gold Bangle'),
(13, 'Gold Bangle 13', 'GB013', '--', 'img/gold_ring/074820776-min.jpg', 'Gold Bangle'),
(14, 'Gold Bangle 14', 'GB014', '--', 'img/gold_ring/074821035-min-1430x1536.jpg', 'Gold Bangle'),
(15, 'Gold Bangle 15', 'GB015', '--', 'img/gold_ring/075340161-1-scaled-1-1152x1536.jpg', 'Gold Bangle'),
(16, 'Gold Bangle 16', 'GB016', '4.392 GM', 'img/gold_ring/076650239ring-4.392-8.jpg', 'Gold Bangle'),
(17, 'Gold Bangle 17', 'GB017', '6 GM', 'img/gold_ring/163508286-6gm4gm-R1.jpg', 'Gold Bangle'),
(18, 'Gold Bangle 18', 'GB018', '--', 'img/gold_ring/0718217108-min-1288x1536.jpg', 'Gold Bangle'),
(19, 'Gold Bangle 19', 'GB019', '--', 'img/gold_ring/0738201668-1302x1536.jpg', 'Gold Bangle'),
(20, 'Gold Bangle 20', 'GB020', '--', 'img/gold_ring/0743402100-min-1536x1349.jpg', 'Gold Bangle'),
(21, 'Gold Bangle 21', 'GB021', '--', 'img/gold_ring/0743405147-min-1529x1536.jpg', 'Gold Bangle'),
(22, 'Gold Bangle 22', 'GB022', '--', 'img/gold_ring/0743406104-1357x1536.jpg', 'Gold Bangle'),
(23, 'Gold Bangle 23', 'GB023', '--', 'img/gold_ring/0743406147-min-1536x1407.jpg', 'Gold Bangle'),
(24, 'Gold Bangle 24', 'GB024', '--', 'img/gold_ring/0743419165-1536x1403.jpg', 'Gold Bangle'),
(25, 'Gold Bangle 25', 'GB025', '--', 'img/gold_ring/0748201274-1536x1503.jpg', 'Gold Bangle'),
(26, 'Gold Bangle 26', 'GB026', '--', 'img/gold_ring/0748202222-1536x1521.jpg', 'Gold Bangle'),
(27, 'Gold Bangle 27', 'GB027', '--', 'img/gold_ring/0748202599-1536x1318.jpg', 'Gold Bangle'),
(28, 'Gold Bangle 28', 'GB028', '--', 'img/gold_ring/0748206641-min-1392x1536.jpg', 'Gold Bangle'),
(29, 'Gold Bangle 29', 'GB029', '--', 'img/gold_ring/0748209151-1411x1536.jpg', 'Gold Bangle'),
(30, 'Gold Bangle 30', 'GB030', '--', 'img/gold_ring/0748238487-min-1456x1536.jpg', 'Gold Bangle'),
(31, 'Gold Bangle 31', 'GB031', '5.43 GM', 'img/gold_ring/0765101242ring-5.43-2-9.jpg', 'Gold Bangle'),
(32, 'Gold Bangle 32', 'GB032', '--', 'img/gold_ring/07234011837-.jpg', 'Gold Bangle'),
(33, 'Gold Bangle 33', 'GB033', '--', 'img/gold_ring/07234013195-1404x1536.jpg', 'Gold Bangle'),
(34, 'Gold Bangle 34', 'GB034', '--', 'img/gold_ring/07234052359-1395x1536.jpg', 'Gold Bangle'),
(35, 'Gold Bangle 35', 'GB035', '--', 'img/gold_ring/07234124425-1536x1448.jpg', 'Gold Bangle'),
(36, 'Gold Bangle 36', 'GB036', '--', 'img/gold_ring/07282091118-1431x1536.jpg', 'Gold Bangle'),
(37, 'Gold Bangle 37', 'GB037', '--', 'img/gold_ring/07282111118.jpg', 'Gold Bangle'),
(38, 'Gold Bangle 38', 'GB038', '--', 'img/gold_ring/07282131118-1253x1536.jpg', 'Gold Bangle'),
(39, 'Gold Bangle 39', 'GB039', '--', 'img/gold_ring/07282211118-1300x1536.jpg', 'Gold Bangle'),
(40, 'Gold Bangle 40', 'GB040', '--', 'img/gold_ring/07282251118-1414x1536.jpg', 'Gold Bangle'),
(41, 'Gold Bangle 41', 'GB041', '--', 'img/gold_ring/07282251377-1494x1536.jpg', 'Gold Bangle'),
(42, 'Gold Bangle 42', 'GB042', '--', 'img/gold_ring/07282261799-1503x1536.jpg', 'Gold Bangle'),
(43, 'Gold Bangle 43', 'GB043', '--', 'img/gold_ring/07282311377-1536x1518.jpg', 'Gold Bangle'),
(44, 'Gold Bangle 44', 'GB044', '--', 'img/gold_ring/07334056252-1218x1536.jpg', 'Gold Bangle'),
(45, 'Gold Bangle 45', 'GB045', '--', 'img/gold_ring/07434081960-1536x1532.jpg', 'Gold Bangle'),
(46, 'Gold Bangle 46', 'GB046', '--', 'img/gold_ring/07434198346-scaled-1-1152x1536.jpg', 'Gold Bangle');

-- --------------------------------------------------------

--
-- Table structure for table `gold_bracelets`
--

CREATE TABLE `gold_bracelets` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gold_bracelets`
--

INSERT INTO `gold_bracelets` (`id`, `name`, `code`, `weight`, `image`, `description`) VALUES
(1, 'Gold Bracelets 1', 'GBR001', '5.20 GM', 'img/gold_ring/07434201862-1480x1536.jpg', 'Gold Bracelets'),
(2, 'Gold Bracelets 2', 'GBR002', '4.392 GM', 'img/gold_ring/07665021239-ring-4.392-10.jpg', 'Gold Bracelets'),
(3, 'Gold Bracelets 3', 'GBR003', '4.462 GM', 'img/gold_ring/07665021242ring-4.462-11.jpg', 'Gold Bracelets'),
(4, 'Gold Bracelets 4', 'GBR004', '4.192 GM', 'img/gold_ring/07665041242ring-4.192-12-1.jpg', 'Gold Bracelets'),
(5, 'Gold Bracelets 5', 'GBR005', '3 GM', 'img/gold_ring/07665061242ring-3-R2.jpg', 'Gold Bracelets'),
(6, 'Gold Bracelets 6', 'GBR006', '3 GM', 'img/gold_ring/07665081239-ring-3.jpg', 'Gold Bracelets'),
(7, 'Gold Bracelets 7', 'GBR007', '3.181 GM', 'img/gold_ring/07665081242-ring-3.181-4.jpg', 'Gold Bracelets'),
(8, 'Gold Bracelets 8', 'GBR008', '2.644 GM', 'img/gold_ring/07665131242ring-2.644-5.jpg', 'Gold Bracelets'),
(9, 'Gold Bracelets 9', 'GBR009', '4.292 GM', 'img/gold_ring/07665141242-ring-4.292-6.jpg', 'Gold Bracelets'),
(10, 'Gold Bracelets 10', 'GBR010', '3.062 GM', 'img/gold_ring/07665161242rings-3.062-7.jpg', 'Gold Bracelets'),
(11, 'Gold Bracelets 11', 'GBR011', '--', 'img/gold_ring/074340140-min-1446x1536.jpg', 'Gold Bracelets'),
(12, 'Gold Bracelets 12', 'GBR012', '--', 'img/gold_ring/074340753-min-1360x1536.jpg', 'Gold Bracelets'),
(13, 'Gold Bracelets 13', 'GBR013', '--', 'img/gold_ring/074820776-min.jpg', 'Gold Bracelets'),
(14, 'Gold Bracelets 14', 'GBR014', '--', 'img/gold_ring/074821035-min-1430x1536.jpg', 'Gold Bracelets'),
(15, 'Gold Bracelets 15', 'GBR015', '--', 'img/gold_ring/075340161-1-scaled-1-1152x1536.jpg', 'Gold Bracelets'),
(16, 'Gold Bracelets 16', 'GBR016', '4.392 GM', 'img/gold_ring/076650239ring-4.392-8.jpg', 'Gold Bracelets'),
(17, 'Gold Bracelets 17', 'GBR017', '6 GM', 'img/gold_ring/163508286-6gm4gm-R1.jpg', 'Gold Bracelets'),
(18, 'Gold Bracelets 18', 'GBR018', '--', 'img/gold_ring/0718217108-min-1288x1536.jpg', 'Gold Bracelets'),
(19, 'Gold Bracelets 19', 'GBR019', '--', 'img/gold_ring/0738201668-1302x1536.jpg', 'Gold Bracelets'),
(20, 'Gold Bracelets 20', 'GBR020', '--', 'img/gold_ring/0743402100-min-1536x1349.jpg', 'Gold Bracelets'),
(21, 'Gold Bracelets 21', 'GBR021', '--', 'img/gold_ring/0743405147-min-1529x1536.jpg', 'Gold Bracelets'),
(22, 'Gold Bracelets 22', 'GBR022', '--', 'img/gold_ring/0743406104-1357x1536.jpg', 'Gold Bracelets'),
(23, 'Gold Bracelets 23', 'GBR023', '--', 'img/gold_ring/0743406147-min-1536x1407.jpg', 'Gold Bracelets'),
(24, 'Gold Bracelets 24', 'GBR024', '--', 'img/gold_ring/0743419165-1536x1403.jpg', 'Gold Bracelets'),
(25, 'Gold Bracelets 25', 'GBR025', '--', 'img/gold_ring/0748201274-1536x1503.jpg', 'Gold Bracelets'),
(26, 'Gold Bracelets 26', 'GBR026', '--', 'img/gold_ring/0748202222-1536x1521.jpg', 'Gold Bracelets'),
(27, 'Gold Bracelets 27', 'GBR027', '--', 'img/gold_ring/0748202599-1536x1318.jpg', 'Gold Bracelets'),
(28, 'Gold Bracelets 28', 'GBR028', '--', 'img/gold_ring/0748206641-min-1392x1536.jpg', 'Gold Bracelets'),
(29, 'Gold Bracelets 29', 'GBR029', '--', 'img/gold_ring/0748209151-1411x1536.jpg', 'Gold Bracelets'),
(30, 'Gold Bracelets 30', 'GBR030', '--', 'img/gold_ring/0748238487-min-1456x1536.jpg', 'Gold Bracelets'),
(31, 'Gold Bracelets 31', 'GBR031', '5.43 GM', 'img/gold_ring/0765101242ring-5.43-2-9.jpg', 'Gold Bracelets'),
(32, 'Gold Bracelets 32', 'GBR032', '--', 'img/gold_ring/07234011837-.jpg', 'Gold Bracelets'),
(33, 'Gold Bracelets 33', 'GBR033', '--', 'img/gold_ring/07234013195-1404x1536.jpg', 'Gold Bracelets'),
(34, 'Gold Bracelets 34', 'GBR034', '--', 'img/gold_ring/07234052359-1395x1536.jpg', 'Gold Bracelets'),
(35, 'Gold Bracelets 35', 'GBR035', '--', 'img/gold_ring/07234124425-1536x1448.jpg', 'Gold Bracelets'),
(36, 'Gold Bracelets 36', 'GBR036', '--', 'img/gold_ring/07282091118-1431x1536.jpg', 'Gold Bracelets'),
(37, 'Gold Bracelets 37', 'GBR037', '--', 'img/gold_ring/07282111118.jpg', 'Gold Bracelets'),
(38, 'Gold Bracelets 38', 'GBR038', '--', 'img/gold_ring/07282131118-1253x1536.jpg', 'Gold Bracelets'),
(39, 'Gold Bracelets 39', 'GBR039', '--', 'img/gold_ring/07282211118-1300x1536.jpg', 'Gold Bracelets'),
(40, 'Gold Bracelets 40', 'GBR040', '--', 'img/gold_ring/07282251118-1414x1536.jpg', 'Gold Bracelets'),
(41, 'Gold Bracelets 41', 'GBR041', '--', 'img/gold_ring/07282251377-1494x1536.jpg', 'Gold Bracelets'),
(42, 'Gold Bracelets 42', 'GBR042', '--', 'img/gold_ring/07282261799-1503x1536.jpg', 'Gold Bracelets'),
(43, 'Gold Bracelets 43', 'GBR043', '--', 'img/gold_ring/07282311377-1536x1518.jpg', 'Gold Bracelets'),
(44, 'Gold Bracelets 44', 'GBR044', '--', 'img/gold_ring/07334056252-1218x1536.jpg', 'Gold Bracelets'),
(45, 'Gold Bracelets 45', 'GBR045', '--', 'img/gold_ring/07434081960-1536x1532.jpg', 'Gold Bracelets'),
(46, 'Gold Bracelets 46', 'GBR046', '--', 'img/gold_ring/07434198346-scaled-1-1152x1536.jpg', 'Gold Bracelets');

-- --------------------------------------------------------

--
-- Table structure for table `gold_chain`
--

CREATE TABLE `gold_chain` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gold_chain`
--

INSERT INTO `gold_chain` (`id`, `name`, `code`, `weight`, `image`, `description`) VALUES
(1, 'Gold Chain 1', 'GC001', '5.20 GM', 'img/gold_ring/07434201862-1480x1536.jpg', 'Gold Chain'),
(2, 'Gold Chain 2', 'GC002', '4.392 GM', 'img/gold_ring/07665021239-ring-4.392-10.jpg', 'Gold Chain'),
(3, 'Gold Chain 3', 'GC003', '4.462 GM', 'img/gold_ring/07665021242ring-4.462-11.jpg', 'Gold Chain'),
(4, 'Gold Chain 4', 'GC004', '4.192 GM', 'img/gold_ring/07665041242ring-4.192-12-1.jpg', 'Gold Chain'),
(5, 'Gold Chain 5', 'GC005', '3 GM', 'img/gold_ring/07665061242ring-3-R2.jpg', 'Gold Chain'),
(6, 'Gold Chain 6', 'GC006', '3 GM', 'img/gold_ring/07665081239-ring-3.jpg', 'Gold Chain'),
(7, 'Gold Chain 7', 'GC007', '3.181 GM', 'img/gold_ring/07665081242-ring-3.181-4.jpg', 'Gold Chain'),
(8, 'Gold Chain 8', 'GC008', '2.644 GM', 'img/gold_ring/07665131242ring-2.644-5.jpg', 'Gold Chain'),
(9, 'Gold Chain 9', 'GC009', '4.292 GM', 'img/gold_ring/07665141242-ring-4.292-6.jpg', 'Gold Chain'),
(10, 'Gold Chain 10', 'GC010', '3.062 GM', 'img/gold_ring/07665161242rings-3.062-7.jpg', 'Gold Chain'),
(11, 'Gold Chain 11', 'GC011', '--', 'img/gold_ring/074340140-min-1446x1536.jpg', 'Gold Chain'),
(12, 'Gold Chain 12', 'GC012', '--', 'img/gold_ring/074340753-min-1360x1536.jpg', 'Gold Chain'),
(13, 'Gold Chain 13', 'GC013', '--', 'img/gold_ring/074820776-min.jpg', 'Gold Chain'),
(14, 'Gold Chain 14', 'GC014', '--', 'img/gold_ring/074821035-min-1430x1536.jpg', 'Gold Chain'),
(15, 'Gold Chain 15', 'GC015', '--', 'img/gold_ring/075340161-1-scaled-1-1152x1536.jpg', 'Gold Chain'),
(16, 'Gold Chain 16', 'GC016', '4.392 GM', 'img/gold_ring/076650239ring-4.392-8.jpg', 'Gold Chain'),
(17, 'Gold Chain 17', 'GC017', '6 GM', 'img/gold_ring/163508286-6gm4gm-R1.jpg', 'Gold Chain'),
(18, 'Gold Chain 18', 'GC018', '--', 'img/gold_ring/0718217108-min-1288x1536.jpg', 'Gold Chain'),
(19, 'Gold Chain 19', 'GC019', '--', 'img/gold_ring/0738201668-1302x1536.jpg', 'Gold Chain'),
(20, 'Gold Chain 20', 'GC020', '--', 'img/gold_ring/0743402100-min-1536x1349.jpg', 'Gold Chain'),
(21, 'Gold Chain 21', 'GC021', '--', 'img/gold_ring/0743405147-min-1529x1536.jpg', 'Gold Chain'),
(22, 'Gold Chain 22', 'GC022', '--', 'img/gold_ring/0743406104-1357x1536.jpg', 'Gold Chain'),
(23, 'Gold Chain 23', 'GC023', '--', 'img/gold_ring/0743406147-min-1536x1407.jpg', 'Gold Chain'),
(24, 'Gold Chain 24', 'GC024', '--', 'img/gold_ring/0743419165-1536x1403.jpg', 'Gold Chain'),
(25, 'Gold Chain 25', 'GC025', '--', 'img/gold_ring/0748201274-1536x1503.jpg', 'Gold Chain'),
(26, 'Gold Chain 26', 'GC026', '--', 'img/gold_ring/0748202222-1536x1521.jpg', 'Gold Chain'),
(27, 'Gold Chain 27', 'GC027', '--', 'img/gold_ring/0748202599-1536x1318.jpg', 'Gold Chain'),
(28, 'Gold Chain 28', 'GC028', '--', 'img/gold_ring/0748206641-min-1392x1536.jpg', 'Gold Chain'),
(29, 'Gold Chain 29', 'GC029', '--', 'img/gold_ring/0748209151-1411x1536.jpg', 'Gold Chain'),
(30, 'Gold Chain 30', 'GC030', '--', 'img/gold_ring/0748238487-min-1456x1536.jpg', 'Gold Chain'),
(31, 'Gold Chain 31', 'GC031', '5.43 GM', 'img/gold_ring/0765101242ring-5.43-2-9.jpg', 'Gold Chain'),
(32, 'Gold Chain 32', 'GC032', '--', 'img/gold_ring/07234011837-.jpg', 'Gold Chain'),
(33, 'Gold Chain 33', 'GC033', '--', 'img/gold_ring/07234013195-1404x1536.jpg', 'Gold Chain'),
(34, 'Gold Chain 34', 'GC034', '--', 'img/gold_ring/07234052359-1395x1536.jpg', 'Gold Chain'),
(35, 'Gold Chain 35', 'GC035', '--', 'img/gold_ring/07234124425-1536x1448.jpg', 'Gold Chain'),
(36, 'Gold Chain 36', 'GC036', '--', 'img/gold_ring/07282091118-1431x1536.jpg', 'Gold Chain'),
(37, 'Gold Chain 37', 'GC037', '--', 'img/gold_ring/07282111118.jpg', 'Gold Chain'),
(38, 'Gold Chain 38', 'GC038', '--', 'img/gold_ring/07282131118-1253x1536.jpg', 'Gold Chain'),
(39, 'Gold Chain 39', 'GC039', '--', 'img/gold_ring/07282211118-1300x1536.jpg', 'Gold Chain'),
(40, 'Gold Chain 40', 'GC040', '--', 'img/gold_ring/07282251118-1414x1536.jpg', 'Gold Chain'),
(41, 'Gold Chain 41', 'GC041', '--', 'img/gold_ring/07282251377-1494x1536.jpg', 'Gold Chain'),
(42, 'Gold Chain 42', 'GC042', '--', 'img/gold_ring/07282261799-1503x1536.jpg', 'Gold Chain'),
(43, 'Gold Chain 43', 'GC043', '--', 'img/gold_ring/07282311377-1536x1518.jpg', 'Gold Chain'),
(44, 'Gold Chain 44', 'GC044', '--', 'img/gold_ring/07334056252-1218x1536.jpg', 'Gold Chain'),
(45, 'Gold Chain 45', 'GC045', '--', 'img/gold_ring/07434081960-1536x1532.jpg', 'Gold Chain'),
(46, 'Gold Chain 46', 'GC046', '--', 'img/gold_ring/07434198346-scaled-1-1152x1536.jpg', 'Gold Chain');

-- --------------------------------------------------------

--
-- Table structure for table `gold_earring`
--

CREATE TABLE `gold_earring` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gold_earring`
--

INSERT INTO `gold_earring` (`id`, `name`, `code`, `weight`, `image`, `description`) VALUES
(1, 'Gold Earring 1', 'GE001', '5.20 GM', 'img/gold_ring/07434201862-1480x1536.jpg', 'Gold Earring'),
(2, 'Gold Earring 2', 'GE002', '4.392 GM', 'img/gold_ring/07665021239-ring-4.392-10.jpg', 'Gold Earring'),
(3, 'Gold Earring 3', 'GE003', '4.462 GM', 'img/gold_ring/07665021242ring-4.462-11.jpg', 'Gold Earring'),
(4, 'Gold Earring 4', 'GE004', '4.192 GM', 'img/gold_ring/07665041242ring-4.192-12-1.jpg', 'Gold Earring'),
(5, 'Gold Earring 5', 'GE005', '3 GM', 'img/gold_ring/07665061242ring-3-R2.jpg', 'Gold Earring'),
(6, 'Gold Earring 6', 'GE006', '3 GM', 'img/gold_ring/07665081239-ring-3.jpg', 'Gold Earring'),
(7, 'Gold Earring 7', 'GE007', '3.181 GM', 'img/gold_ring/07665081242-ring-3.181-4.jpg', 'Gold Earring'),
(8, 'Gold Earring 8', 'GE008', '2.644 GM', 'img/gold_ring/07665131242ring-2.644-5.jpg', 'Gold Earring'),
(9, 'Gold Earring 9', 'GE009', '4.55 GM', 'img/gold_ring/07665141242-ring-4.55-6.jpg', 'Gold Earring'),
(10, 'Gold Earring 10', 'GE010', '3.54 GM', 'img/gold_ring/07665151242ring-3.54-7.jpg', 'Gold Earring'),
(11, 'Gold Earring 11', 'GE011', '5.22 GM', 'img/gold_ring/07665161242ring-5.22-8.jpg', 'Gold Earring'),
(12, 'Gold Earring 12', 'GE012', '2.9 GM', 'img/gold_ring/07665171242ring-2.9-9.jpg', 'Gold Earring'),
(13, 'Gold Earring 13', 'GE013', '3.33 GM', 'img/gold_ring/07665181242ring-3.33-10.jpg', 'Gold Earring'),
(14, 'Gold Earring 14', 'GE014', '3.5 GM', 'img/gold_ring/07665191242ring-3.5-11.jpg', 'Gold Earring'),
(15, 'Gold Earring 15', 'GE015', '3.7 GM', 'img/gold_ring/07665201242ring-3.7-12.jpg', 'Gold Earring'),
(16, 'Gold Earring 16', 'GE016', '4.11 GM', 'img/gold_ring/07665211242ring-4.11-13.jpg', 'Gold Earring'),
(17, 'Gold Earring 17', 'GE017', '4.8 GM', 'img/gold_ring/07665221242ring-4.8-14.jpg', 'Gold Earring'),
(18, 'Gold Earring 18', 'GE018', '3.5 GM', 'img/gold_ring/07665231242ring-3.5-15.jpg', 'Gold Earring'),
(19, 'Gold Earring 19', 'GE019', '3.81 GM', 'img/gold_ring/07665241242ring-3.81-16.jpg', 'Gold Earring'),
(20, 'Gold Earring 20', 'GE020', '3.92 GM', 'img/gold_ring/07665251242ring-3.92-17.jpg', 'Gold Earring'),
(21, 'Gold Earring 21', 'GE021', '4.2 GM', 'img/gold_ring/07665261242ring-4.2-18.jpg', 'Gold Earring'),
(22, 'Gold Earring 22', 'GE022', '4.5 GM', 'img/gold_ring/07665271242ring-4.5-19.jpg', 'Gold Earring'),
(23, 'Gold Earring 23', 'GE023', '2.9 GM', 'img/gold_ring/07665281242ring-2.9-20.jpg', 'Gold Earring'),
(24, 'Gold Earring 24', 'GE024', '3.2 GM', 'img/gold_ring/07665291242ring-3.2-21.jpg', 'Gold Earring'),
(25, 'Gold Earring 25', 'GE025', '3.6 GM', 'img/gold_ring/07665301242ring-3.6-22.jpg', 'Gold Earring'),
(26, 'Gold Earring 26', 'GE026', '3.1 GM', 'img/gold_ring/07665311242ring-3.1-23.jpg', 'Gold Earring'),
(27, 'Gold Earring 27', 'GE027', '3.5 GM', 'img/gold_ring/07665321242ring-3.5-24.jpg', 'Gold Earring'),
(28, 'Gold Earring 28', 'GE028', '4.0 GM', 'img/gold_ring/07665331242ring-4.0-25.jpg', 'Gold Earring'),
(29, 'Gold Earring 29', 'GE029', '4.1 GM', 'img/gold_ring/07665341242ring-4.1-26.jpg', 'Gold Earring'),
(30, 'Gold Earring 30', 'GE030', '3.4 GM', 'img/gold_ring/07665351242ring-3.4-27.jpg', 'Gold Earring'),
(31, 'Gold Earring 31', 'GE031', '3.6 GM', 'img/gold_ring/07665361242ring-3.6-28.jpg', 'Gold Earring'),
(32, 'Gold Earring 32', 'GE032', '3.9 GM', 'img/gold_ring/07665371242ring-3.9-29.jpg', 'Gold Earring'),
(33, 'Gold Earring 33', 'GE033', '4.2 GM', 'img/gold_ring/07665381242ring-4.2-30.jpg', 'Gold Earring'),
(34, 'Gold Earring 34', 'GE034', '3.7 GM', 'img/gold_ring/07665391242ring-3.7-31.jpg', 'Gold Earring'),
(35, 'Gold Earring 35', 'GE035', '4.1 GM', 'img/gold_ring/07665401242ring-4.1-32.jpg', 'Gold Earring'),
(36, 'Gold Earring 36', 'GE036', '3.8 GM', 'img/gold_ring/07665411242ring-3.8-33.jpg', 'Gold Earring'),
(37, 'Gold Earring 37', 'GE037', '3.5 GM', 'img/gold_ring/07665421242ring-3.5-34.jpg', 'Gold Earring'),
(38, 'Gold Earring 38', 'GE038', '4.3 GM', 'img/gold_ring/07665431242ring-4.3-35.jpg', 'Gold Earring'),
(39, 'Gold Earring 39', 'GE039', '3.6 GM', 'img/gold_ring/07665441242ring-3.6-36.jpg', 'Gold Earring'),
(40, 'Gold Earring 40', 'GE040', '4.4 GM', 'img/gold_ring/07665451242ring-4.4-37.jpg', 'Gold Earring'),
(41, 'Gold Earring 41', 'GE041', '4.2 GM', 'img/gold_ring/07665461242ring-4.2-38.jpg', 'Gold Earring'),
(42, 'Gold Earring 42', 'GE042', '3.6 GM', 'img/gold_ring/07665471242ring-3.6-39.jpg', 'Gold Earring'),
(43, 'Gold Earring 43', 'GE043', '3.2 GM', 'img/gold_ring/07665481242ring-3.2-40.jpg', 'Gold Earring'),
(44, 'Gold Earring 44', 'GE044', '4.5 GM', 'img/gold_ring/07665491242ring-4.5-41.jpg', 'Gold Earring'),
(45, 'Gold Earring 45', 'GE045', '4.3 GM', 'img/gold_ring/07665501242ring-4.3-42.jpg', 'Gold Earring'),
(46, 'Gold Earring 46', 'GE046', '4.1 GM', 'img/gold_ring/07665511242ring-4.1-43.jpg', 'Gold Earring');

-- --------------------------------------------------------

--
-- Table structure for table `gold_haarams`
--

CREATE TABLE `gold_haarams` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gold_haarams`
--

INSERT INTO `gold_haarams` (`id`, `name`, `code`, `weight`, `image`, `description`) VALUES
(47, 'Gold Haaram 1', 'GH001', '5.20 GM', 'img/gold_ring/07434201862-1480x1536.jpg', 'Gold Haaram'),
(48, 'Gold Haaram 2', 'GH002', '4.392 GM', 'img/gold_ring/07665021239-ring-4.392-10.jpg', 'Gold Haaram'),
(49, 'Gold Haaram 3', 'GH003', '4.462 GM', 'img/gold_ring/07665021242ring-4.462-11.jpg', 'Gold Haaram'),
(50, 'Gold Haaram 4', 'GH004', '4.192 GM', 'img/gold_ring/07665041242ring-4.192-12-1.jpg', 'Gold Haaram'),
(51, 'Gold Haaram 5', 'GH005', '3 GM', 'img/gold_ring/07665061242ring-3-R2.jpg', 'Gold Haaram'),
(52, 'Gold Haaram 6', 'GH006', '3 GM', 'img/gold_ring/07665081239-ring-3.jpg', 'Gold Haaram'),
(53, 'Gold Haaram 7', 'GH007', '3.181 GM', 'img/gold_ring/07665081242-ring-3.181-4.jpg', 'Gold Haaram'),
(54, 'Gold Haaram 8', 'GH008', '2.644 GM', 'img/gold_ring/07665131242ring-2.644-5.jpg', 'Gold Haaram'),
(55, 'Gold Haaram 9', 'GH009', '3.244 GM', 'img/gold_ring/07665141242ring-3.244-6.jpg', 'Gold Haaram'),
(56, 'Gold Haaram 10', 'GH010', '2.744 GM', 'img/gold_ring/07665151239-ring-2.744-7.jpg', 'Gold Haaram'),
(57, 'Gold Haaram 11', 'GH011', '3.395 GM', 'img/gold_ring/07665151242-ring-3.395-8.jpg', 'Gold Haaram'),
(58, 'Gold Haaram 12', 'GH012', '3.011 GM', 'img/gold_ring/07665161242ring-3.011-9.jpg', 'Gold Haaram'),
(59, 'Gold Haaram 13', 'GH013', '3.623 GM', 'img/gold_ring/07665171239ring-3.623-14.jpg', 'Gold Haaram'),
(60, 'Gold Haaram 14', 'GH014', '4.112 GM', 'img/gold_ring/07665181239ring-4.112-15.jpg', 'Gold Haaram'),
(61, 'Gold Haaram 15', 'GH015', '3.424 GM', 'img/gold_ring/07665201239-ring-3.424-16.jpg', 'Gold Haaram'),
(62, 'Gold Haaram 16', 'GH016', '3.354 GM', 'img/gold_ring/07665211242ring-3.354-17.jpg', 'Gold Haaram'),
(63, 'Gold Haaram 17', 'GH017', '3.681 GM', 'img/gold_ring/07665221242ring-3.681-18.jpg', 'Gold Haaram'),
(64, 'Gold Haaram 18', 'GH018', '3.872 GM', 'img/gold_ring/07665231242ring-3.872-19.jpg', 'Gold Haaram'),
(65, 'Gold Haaram 19', 'GH019', '3.462 GM', 'img/gold_ring/07665241239ring-3.462-20.jpg', 'Gold Haaram'),
(66, 'Gold Haaram 20', 'GH020', '3.993 GM', 'img/gold_ring/07665261242ring-3.993-21.jpg', 'Gold Haaram'),
(67, 'Gold Haaram 21', 'GH021', '2.91 GM', 'img/gold_ring/07665271242ring-2.91-22.jpg', 'Gold Haaram'),
(68, 'Gold Haaram 22', 'GH022', '2.731 GM', 'img/gold_ring/07665281239-ring-2.731-23.jpg', 'Gold Haaram'),
(69, 'Gold Haaram 23', 'GH023', '2.922 GM', 'img/gold_ring/07665281242ring-2.922-24.jpg', 'Gold Haaram'),
(70, 'Gold Haaram 24', 'GH024', '2.621 GM', 'img/gold_ring/07665291239ring-2.621-25.jpg', 'Gold Haaram'),
(71, 'Gold Haaram 25', 'GH025', '2.821 GM', 'img/gold_ring/07665291242ring-2.821-26.jpg', 'Gold Haaram'),
(72, 'Gold Haaram 26', 'GH026', '2.951 GM', 'img/gold_ring/07665301242ring-2.951-27.jpg', 'Gold Haaram'),
(73, 'Gold Haaram 27', 'GH027', '2.692 GM', 'img/gold_ring/07665321242ring-2.692-28.jpg', 'Gold Haaram'),
(74, 'Gold Haaram 28', 'GH028', '2.631 GM', 'img/gold_ring/07665331239ring-2.631-29.jpg', 'Gold Haaram'),
(75, 'Gold Haaram 29', 'GH029', '3.931 GM', 'img/gold_ring/07665351239ring-3.931-30.jpg', 'Gold Haaram'),
(76, 'Gold Haaram 30', 'GH030', '3.512 GM', 'img/gold_ring/07665361242ring-3.512-31.jpg', 'Gold Haaram'),
(77, 'Gold Haaram 31', 'GH031', '3.312 GM', 'img/gold_ring/07665381242ring-3.312-32.jpg', 'Gold Haaram'),
(78, 'Gold Haaram 32', 'GH032', '3.402 GM', 'img/gold_ring/07665391239ring-3.402-33.jpg', 'Gold Haaram'),
(79, 'Gold Haaram 33', 'GH033', '3.662 GM', 'img/gold_ring/07665401242ring-3.662-34.jpg', 'Gold Haaram'),
(80, 'Gold Haaram 34', 'GH034', '3.541 GM', 'img/gold_ring/07665411239ring-3.541-35.jpg', 'Gold Haaram'),
(81, 'Gold Haaram 35', 'GH035', '2.742 GM', 'img/gold_ring/07665431239ring-2.742-36.jpg', 'Gold Haaram'),
(82, 'Gold Haaram 36', 'GH036', '3.01 GM', 'img/gold_ring/07665441242ring-3.01-37.jpg', 'Gold Haaram'),
(83, 'Gold Haaram 37', 'GH037', '2.941 GM', 'img/gold_ring/07665451242ring-2.941-38.jpg', 'Gold Haaram'),
(84, 'Gold Haaram 38', 'GH038', '2.921 GM', 'img/gold_ring/07665461242ring-2.921-39.jpg', 'Gold Haaram'),
(85, 'Gold Haaram 39', 'GH039', '2.881 GM', 'img/gold_ring/07665471242ring-2.881-40.jpg', 'Gold Haaram'),
(86, 'Gold Haaram 40', 'GH040', '3.912 GM', 'img/gold_ring/07665481242ring-3.912-41.jpg', 'Gold Haaram'),
(87, 'Gold Haaram 41', 'GH041', '3.841 GM', 'img/gold_ring/07665491242ring-3.841-42.jpg', 'Gold Haaram'),
(88, 'Gold Haaram 42', 'GH042', '3.681 GM', 'img/gold_ring/07665501242ring-3.681-43.jpg', 'Gold Haaram'),
(89, 'Gold Haaram 43', 'GH043', '3.811 GM', 'img/gold_ring/07665511242ring-3.811-44.jpg', 'Gold Haaram'),
(90, 'Gold Haaram 44', 'GH044', '3.601 GM', 'img/gold_ring/07665521242ring-3.601-45.jpg', 'Gold Haaram'),
(91, 'Gold Haaram 45', 'GH045', '3.821 GM', 'img/gold_ring/07665531242ring-3.821-46.jpg', 'Gold Haaram');

-- --------------------------------------------------------

--
-- Table structure for table `gold_kadaas`
--

CREATE TABLE `gold_kadaas` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gold_kadaas`
--

INSERT INTO `gold_kadaas` (`id`, `name`, `code`, `weight`, `image`, `description`) VALUES
(47, 'Gold Kadaas 1', 'GK001', '5.20 GM', 'img/gold_ring/07434201862-1480x1536.jpg', 'Gold Kadaas'),
(48, 'Gold Kadaas 2', 'GK002', '4.392 GM', 'img/gold_ring/07665021239-ring-4.392-10.jpg', 'Gold Kadaas'),
(49, 'Gold Kadaas 3', 'GK003', '4.462 GM', 'img/gold_ring/07665021242ring-4.462-11.jpg', 'Gold Kadaas'),
(50, 'Gold Kadaas 4', 'GK004', '4.192 GM', 'img/gold_ring/07665041242ring-4.192-12-1.jpg', 'Gold Kadaas'),
(51, 'Gold Kadaas 5', 'GK005', '3 GM', 'img/gold_ring/07665061242ring-3-R2.jpg', 'Gold Kadaas'),
(52, 'Gold Kadaas 6', 'GK006', '3 GM', 'img/gold_ring/07665081239-ring-3.jpg', 'Gold Kadaas'),
(53, 'Gold Kadaas 7', 'GK007', '3.181 GM', 'img/gold_ring/07665081242-ring-3.181-4.jpg', 'Gold Kadaas'),
(54, 'Gold Kadaas 8', 'GK008', '2.644 GM', 'img/gold_ring/07665131242ring-2.644-5.jpg', 'Gold Kadaas'),
(55, 'Gold Kadaas 9', 'GK009', '5.20 GM', 'img/gold_ring/1-2.jpg', 'Gold Kadaas'),
(56, 'Gold Kadaas 10', 'GK010', '4.392 GM', 'img/gold_ring/2-2.jpg', 'Gold Kadaas'),
(57, 'Gold Kadaas 11', 'GK011', '4.462 GM', 'img/gold_ring/3-1.jpg', 'Gold Kadaas'),
(58, 'Gold Kadaas 12', 'GK012', '4.192 GM', 'img/gold_ring/4-2.jpg', 'Gold Kadaas'),
(59, 'Gold Kadaas 13', 'GK013', '3 GM', 'img/gold_ring/5-2.jpg', 'Gold Kadaas'),
(60, 'Gold Kadaas 14', 'GK014', '3 GM', 'img/gold_ring/6-2.jpg', 'Gold Kadaas'),
(61, 'Gold Kadaas 15', 'GK015', '3.181 GM', 'img/gold_ring/7-2.jpg', 'Gold Kadaas'),
(62, 'Gold Kadaas 16', 'GK016', '2.644 GM', 'img/gold_ring/8-2.jpg', 'Gold Kadaas'),
(63, 'Gold Kadaas 17', 'GK017', '5.20 GM', 'img/gold_ring/9-2.jpg', 'Gold Kadaas'),
(64, 'Gold Kadaas 18', 'GK018', '4.392 GM', 'img/gold_ring/10-2.jpg', 'Gold Kadaas'),
(65, 'Gold Kadaas 19', 'GK019', '4.462 GM', 'img/gold_ring/11-2.jpg', 'Gold Kadaas'),
(66, 'Gold Kadaas 20', 'GK020', '4.192 GM', 'img/gold_ring/12-2.jpg', 'Gold Kadaas'),
(67, 'Gold Kadaas 21', 'GK021', '3 GM', 'img/gold_ring/13-2.jpg', 'Gold Kadaas'),
(68, 'Gold Kadaas 22', 'GK022', '3 GM', 'img/gold_ring/14-2.jpg', 'Gold Kadaas'),
(69, 'Gold Kadaas 23', 'GK023', '3.181 GM', 'img/gold_ring/15-2.jpg', 'Gold Kadaas'),
(70, 'Gold Kadaas 24', 'GK024', '2.644 GM', 'img/gold_ring/16-2.jpg', 'Gold Kadaas'),
(71, 'Gold Kadaas 25', 'GK025', '5.20 GM', 'img/gold_ring/17-2.jpg', 'Gold Kadaas'),
(72, 'Gold Kadaas 26', 'GK026', '4.392 GM', 'img/gold_ring/18-2.jpg', 'Gold Kadaas'),
(73, 'Gold Kadaas 27', 'GK027', '4.462 GM', 'img/gold_ring/19-2.jpg', 'Gold Kadaas'),
(74, 'Gold Kadaas 28', 'GK028', '4.192 GM', 'img/gold_ring/20-2.jpg', 'Gold Kadaas'),
(75, 'Gold Kadaas 29', 'GK029', '3 GM', 'img/gold_ring/21-2.jpg', 'Gold Kadaas'),
(76, 'Gold Kadaas 30', 'GK030', '3 GM', 'img/gold_ring/22-2.jpg', 'Gold Kadaas'),
(77, 'Gold Kadaas 31', 'GK031', '3.181 GM', 'img/gold_ring/23-2.jpg', 'Gold Kadaas'),
(78, 'Gold Kadaas 32', 'GK032', '2.644 GM', 'img/gold_ring/24-2.jpg', 'Gold Kadaas'),
(79, 'Gold Kadaas 33', 'GK033', '5.20 GM', 'img/gold_ring/25-2.jpg', 'Gold Kadaas'),
(80, 'Gold Kadaas 34', 'GK034', '4.392 GM', 'img/gold_ring/26-2.jpg', 'Gold Kadaas'),
(81, 'Gold Kadaas 35', 'GK035', '4.462 GM', 'img/gold_ring/27-2.jpg', 'Gold Kadaas'),
(82, 'Gold Kadaas 36', 'GK036', '4.192 GM', 'img/gold_ring/28-2.jpg', 'Gold Kadaas'),
(83, 'Gold Kadaas 37', 'GK037', '3 GM', 'img/gold_ring/29-2.jpg', 'Gold Kadaas'),
(84, 'Gold Kadaas 38', 'GK038', '3 GM', 'img/gold_ring/30-2.jpg', 'Gold Kadaas'),
(85, 'Gold Kadaas 39', 'GK039', '3.181 GM', 'img/gold_ring/31-2.jpg', 'Gold Kadaas'),
(86, 'Gold Kadaas 40', 'GK040', '2.644 GM', 'img/gold_ring/32-2.jpg', 'Gold Kadaas'),
(87, 'Gold Kadaas 41', 'GK041', '3 GM', 'img/gold_ring/33-2.jpg', 'Gold Kadaas'),
(88, 'Gold Kadaas 42', 'GK042', '3.1 GM', 'img/gold_ring/34-2.jpg', 'Gold Kadaas'),
(89, 'Gold Kadaas 43', 'GK043', '3.5 GM', 'img/gold_ring/35-2.jpg', 'Gold Kadaas'),
(90, 'Gold Kadaas 44', 'GK044', '4 GM', 'img/gold_ring/36-2.jpg', 'Gold Kadaas'),
(91, 'Gold Kadaas 45', 'GK045', '4.25 GM', 'img/gold_ring/37-2.jpg', 'Gold Kadaas'),
(92, 'Gold Kadaas 46', 'GK046', '4.5 GM', 'img/gold_ring/38-2.jpg', 'Gold Kadaas');

-- --------------------------------------------------------

--
-- Table structure for table `gold_mangalsutra`
--

CREATE TABLE `gold_mangalsutra` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gold_mangalsutra`
--

INSERT INTO `gold_mangalsutra` (`id`, `name`, `code`, `weight`, `image`, `description`) VALUES
(47, 'Gold Mangalsutra 1', 'GM001', '5.20 GM', 'img/gold_ring/07434201862-1480x1536.jpg', 'Gold Mangalsutra'),
(48, 'Gold Mangalsutra 2', 'GM002', '4.392 GM', 'img/gold_ring/07665021239-ring-4.392-10.jpg', 'Gold Mangalsutra'),
(49, 'Gold Mangalsutra 3', 'GM003', '4.462 GM', 'img/gold_ring/07665021242ring-4.462-11.jpg', 'Gold Mangalsutra'),
(50, 'Gold Mangalsutra 4', 'GM004', '4.192 GM', 'img/gold_ring/07665041242ring-4.192-12-1.jpg', 'Gold Mangalsutra'),
(51, 'Gold Mangalsutra 5', 'GM005', '3 GM', 'img/gold_ring/07665061242ring-3-R2.jpg', 'Gold Mangalsutra'),
(52, 'Gold Mangalsutra 6', 'GM006', '3 GM', 'img/gold_ring/07665081239-ring-3.jpg', 'Gold Mangalsutra'),
(53, 'Gold Mangalsutra 7', 'GM007', '3.181 GM', 'img/gold_ring/07665081242-ring-3.181-4.jpg', 'Gold Mangalsutra'),
(54, 'Gold Mangalsutra 8', 'GM008', '2.644 GM', 'img/gold_ring/07665131242ring-2.644-5.jpg', 'Gold Mangalsutra'),
(55, 'Gold Mangalsutra 9', 'GM009', '2.844 GM', 'img/gold_ring/07665161242ring-2.844-6.jpg', 'Gold Mangalsutra'),
(56, 'Gold Mangalsutra 10', 'GM010', '2.816 GM', 'img/gold_ring/07665181239-ring-2.816-7.jpg', 'Gold Mangalsutra'),
(57, 'Gold Mangalsutra 11', 'GM011', '2.648 GM', 'img/gold_ring/07665201242ring-2.648-8.jpg', 'Gold Mangalsutra'),
(58, 'Gold Mangalsutra 12', 'GM012', '2.768 GM', 'img/gold_ring/07665221239-ring-2.768-9.jpg', 'Gold Mangalsutra'),
(59, 'Gold Mangalsutra 13', 'GM013', '4.392 GM', 'img/gold_ring/07665021239-ring-4.392-10.jpg', 'Gold Mangalsutra'),
(60, 'Gold Mangalsutra 14', 'GM014', '4.462 GM', 'img/gold_ring/07665021242ring-4.462-11.jpg', 'Gold Mangalsutra'),
(61, 'Gold Mangalsutra 15', 'GM015', '4.192 GM', 'img/gold_ring/07665041242ring-4.192-12-1.jpg', 'Gold Mangalsutra'),
(62, 'Gold Mangalsutra 16', 'GM016', '3 GM', 'img/gold_ring/07665061242ring-3-R2.jpg', 'Gold Mangalsutra'),
(63, 'Gold Mangalsutra 17', 'GM017', '3 GM', 'img/gold_ring/07665081239-ring-3.jpg', 'Gold Mangalsutra'),
(64, 'Gold Mangalsutra 18', 'GM018', '3.181 GM', 'img/gold_ring/07665081242-ring-3.181-4.jpg', 'Gold Mangalsutra'),
(65, 'Gold Mangalsutra 19', 'GM019', '2.644 GM', 'img/gold_ring/07665131242ring-2.644-5.jpg', 'Gold Mangalsutra'),
(66, 'Gold Mangalsutra 20', 'GM020', '2.844 GM', 'img/gold_ring/07665161242ring-2.844-6.jpg', 'Gold Mangalsutra'),
(67, 'Gold Mangalsutra 21', 'GM021', '2.816 GM', 'img/gold_ring/07665181239-ring-2.816-7.jpg', 'Gold Mangalsutra'),
(68, 'Gold Mangalsutra 22', 'GM022', '2.648 GM', 'img/gold_ring/07665201242ring-2.648-8.jpg', 'Gold Mangalsutra'),
(69, 'Gold Mangalsutra 23', 'GM023', '2.768 GM', 'img/gold_ring/07665221239-ring-2.768-9.jpg', 'Gold Mangalsutra'),
(70, 'Gold Mangalsutra 24', 'GM024', '4.392 GM', 'img/gold_ring/07665021239-ring-4.392-10.jpg', 'Gold Mangalsutra'),
(71, 'Gold Mangalsutra 25', 'GM025', '4.462 GM', 'img/gold_ring/07665021242ring-4.462-11.jpg', 'Gold Mangalsutra'),
(72, 'Gold Mangalsutra 26', 'GM026', '4.192 GM', 'img/gold_ring/07665041242ring-4.192-12-1.jpg', 'Gold Mangalsutra'),
(73, 'Gold Mangalsutra 27', 'GM027', '3 GM', 'img/gold_ring/07665061242ring-3-R2.jpg', 'Gold Mangalsutra'),
(74, 'Gold Mangalsutra 28', 'GM028', '3 GM', 'img/gold_ring/07665081239-ring-3.jpg', 'Gold Mangalsutra'),
(75, 'Gold Mangalsutra 29', 'GM029', '3.181 GM', 'img/gold_ring/07665081242-ring-3.181-4.jpg', 'Gold Mangalsutra'),
(76, 'Gold Mangalsutra 30', 'GM030', '2.644 GM', 'img/gold_ring/07665131242ring-2.644-5.jpg', 'Gold Mangalsutra'),
(77, 'Gold Mangalsutra 31', 'GM031', '2.844 GM', 'img/gold_ring/07665161242ring-2.844-6.jpg', 'Gold Mangalsutra'),
(78, 'Gold Mangalsutra 32', 'GM032', '2.816 GM', 'img/gold_ring/07665181239-ring-2.816-7.jpg', 'Gold Mangalsutra'),
(79, 'Gold Mangalsutra 33', 'GM033', '2.648 GM', 'img/gold_ring/07665201242ring-2.648-8.jpg', 'Gold Mangalsutra'),
(80, 'Gold Mangalsutra 34', 'GM034', '2.768 GM', 'img/gold_ring/07665221239-ring-2.768-9.jpg', 'Gold Mangalsutra'),
(81, 'Gold Mangalsutra 35', 'GM035', '4.392 GM', 'img/gold_ring/07665021239-ring-4.392-10.jpg', 'Gold Mangalsutra'),
(82, 'Gold Mangalsutra 36', 'GM036', '4.462 GM', 'img/gold_ring/07665021242ring-4.462-11.jpg', 'Gold Mangalsutra'),
(83, 'Gold Mangalsutra 37', 'GM037', '4.192 GM', 'img/gold_ring/07665041242ring-4.192-12-1.jpg', 'Gold Mangalsutra'),
(84, 'Gold Mangalsutra 38', 'GM038', '3 GM', 'img/gold_ring/07665061242ring-3-R2.jpg', 'Gold Mangalsutra'),
(85, 'Gold Mangalsutra 39', 'GM039', '3 GM', 'img/gold_ring/07665081239-ring-3.jpg', 'Gold Mangalsutra'),
(86, 'Gold Mangalsutra 40', 'GM040', '3.181 GM', 'img/gold_ring/07665081242-ring-3.181-4.jpg', 'Gold Mangalsutra'),
(87, 'Gold Mangalsutra 41', 'GM041', '2.644 GM', 'img/gold_ring/07665131242ring-2.644-5.jpg', 'Gold Mangalsutra'),
(88, 'Gold Mangalsutra 42', 'GM042', '2.844 GM', 'img/gold_ring/07665161242ring-2.844-6.jpg', 'Gold Mangalsutra'),
(89, 'Gold Mangalsutra 43', 'GM043', '2.816 GM', 'img/gold_ring/07665181239-ring-2.816-7.jpg', 'Gold Mangalsutra'),
(90, 'Gold Mangalsutra 44', 'GM044', '2.648 GM', 'img/gold_ring/07665201242ring-2.648-8.jpg', 'Gold Mangalsutra'),
(91, 'Gold Mangalsutra 45', 'GM045', '2.768 GM', 'img/gold_ring/07665221239-ring-2.768-9.jpg', 'Gold Mangalsutra'),
(92, 'Gold Mangalsutra 46', 'GM046', '5.20 GM', 'img/gold_ring/07434201862-1480x1536.jpg', 'Gold Mangalsutra');

-- --------------------------------------------------------

--
-- Table structure for table `gold_necklaces`
--

CREATE TABLE `gold_necklaces` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gold_necklaces`
--

INSERT INTO `gold_necklaces` (`id`, `name`, `code`, `weight`, `image`, `description`) VALUES
(1, 'Gold Necklace 1', 'GN001', '5.20 GM', 'img/gold_ring/07434201862-1480x1536.jpg', 'Gold Necklace'),
(2, 'Gold Necklace 2', 'GN002', '4.392 GM', 'img/gold_ring/07665021239-ring-4.392-10.jpg', 'Gold Necklace'),
(3, 'Gold Necklace 3', 'GN003', '4.462 GM', 'img/gold_ring/07665021242ring-4.462-11.jpg', 'Gold Necklace'),
(4, 'Gold Necklace 4', 'GN004', '4.192 GM', 'img/gold_ring/07665041242ring-4.192-12-1.jpg', 'Gold Necklace'),
(5, 'Gold Necklace 5', 'GN005', '3 GM', 'img/gold_ring/07665061242ring-3-R2.jpg', 'Gold Necklace'),
(6, 'Gold Necklace 6', 'GN006', '3 GM', 'img/gold_ring/07665081239-ring-3.jpg', 'Gold Necklace'),
(7, 'Gold Necklace 7', 'GN007', '3.181 GM', 'img/gold_ring/07665081242-ring-3.181-4.jpg', 'Gold Necklace'),
(8, 'Gold Necklace 8', 'GN008', '2.644 GM', 'img/gold_ring/07665131242ring-2.644-5.jpg', 'Gold Necklace'),
(9, 'Gold Necklace 9', 'GN009', '3.244 GM', 'img/gold_ring/07665141242ring-3.244-6.jpg', 'Gold Necklace'),
(10, 'Gold Necklace 10', 'GN010', '2.744 GM', 'img/gold_ring/07665151239-ring-2.744-7.jpg', 'Gold Necklace'),
(11, 'Gold Necklace 11', 'GN011', '3.395 GM', 'img/gold_ring/07665151242-ring-3.395-8.jpg', 'Gold Necklace'),
(12, 'Gold Necklace 12', 'GN012', '3.011 GM', 'img/gold_ring/07665161242ring-3.011-9.jpg', 'Gold Necklace'),
(13, 'Gold Necklace 13', 'GN013', '3.623 GM', 'img/gold_ring/07665171239ring-3.623-14.jpg', 'Gold Necklace'),
(14, 'Gold Necklace 14', 'GN014', '4.112 GM', 'img/gold_ring/07665181239ring-4.112-15.jpg', 'Gold Necklace'),
(15, 'Gold Necklace 15', 'GN015', '3.424 GM', 'img/gold_ring/07665201239-ring-3.424-16.jpg', 'Gold Necklace'),
(16, 'Gold Necklace 16', 'GN016', '3.354 GM', 'img/gold_ring/07665211242ring-3.354-17.jpg', 'Gold Necklace'),
(17, 'Gold Necklace 17', 'GN017', '3.681 GM', 'img/gold_ring/07665221242ring-3.681-18.jpg', 'Gold Necklace'),
(18, 'Gold Necklace 18', 'GN018', '3.872 GM', 'img/gold_ring/07665231242ring-3.872-19.jpg', 'Gold Necklace'),
(19, 'Gold Necklace 19', 'GN019', '3.462 GM', 'img/gold_ring/07665241239ring-3.462-20.jpg', 'Gold Necklace'),
(20, 'Gold Necklace 20', 'GN020', '3.993 GM', 'img/gold_ring/07665261242ring-3.993-21.jpg', 'Gold Necklace'),
(21, 'Gold Necklace 21', 'GN021', '2.91 GM', 'img/gold_ring/07665271242ring-2.91-22.jpg', 'Gold Necklace'),
(22, 'Gold Necklace 22', 'GN022', '2.731 GM', 'img/gold_ring/07665281239-ring-2.731-23.jpg', 'Gold Necklace'),
(23, 'Gold Necklace 23', 'GN023', '2.922 GM', 'img/gold_ring/07665281242ring-2.922-24.jpg', 'Gold Necklace'),
(24, 'Gold Necklace 24', 'GN024', '2.621 GM', 'img/gold_ring/07665291239ring-2.621-25.jpg', 'Gold Necklace'),
(25, 'Gold Necklace 25', 'GN025', '2.821 GM', 'img/gold_ring/07665291242ring-2.821-26.jpg', 'Gold Necklace'),
(26, 'Gold Necklace 26', 'GN026', '2.951 GM', 'img/gold_ring/07665301242ring-2.951-27.jpg', 'Gold Necklace'),
(27, 'Gold Necklace 27', 'GN027', '2.692 GM', 'img/gold_ring/07665321242ring-2.692-28.jpg', 'Gold Necklace'),
(28, 'Gold Necklace 28', 'GN028', '2.631 GM', 'img/gold_ring/07665331239ring-2.631-29.jpg', 'Gold Necklace'),
(29, 'Gold Necklace 29', 'GN029', '3.931 GM', 'img/gold_ring/07665351239ring-3.931-30.jpg', 'Gold Necklace'),
(30, 'Gold Necklace 30', 'GN030', '3.512 GM', 'img/gold_ring/07665361242ring-3.512-31.jpg', 'Gold Necklace'),
(31, 'Gold Necklace 31', 'GN031', '3.312 GM', 'img/gold_ring/07665381242ring-3.312-32.jpg', 'Gold Necklace'),
(32, 'Gold Necklace 32', 'GN032', '3.402 GM', 'img/gold_ring/07665391239ring-3.402-33.jpg', 'Gold Necklace'),
(33, 'Gold Necklace 33', 'GN033', '3.662 GM', 'img/gold_ring/07665401242ring-3.662-34.jpg', 'Gold Necklace'),
(34, 'Gold Necklace 34', 'GN034', '3.541 GM', 'img/gold_ring/07665411239ring-3.541-35.jpg', 'Gold Necklace'),
(35, 'Gold Necklace 35', 'GN035', '2.742 GM', 'img/gold_ring/07665431239ring-2.742-36.jpg', 'Gold Necklace'),
(36, 'Gold Necklace 36', 'GN036', '3.01 GM', 'img/gold_ring/07665441242ring-3.01-37.jpg', 'Gold Necklace'),
(37, 'Gold Necklace 37', 'GN037', '2.941 GM', 'img/gold_ring/07665451242ring-2.941-38.jpg', 'Gold Necklace'),
(38, 'Gold Necklace 38', 'GN038', '2.921 GM', 'img/gold_ring/07665461242ring-2.921-39.jpg', 'Gold Necklace'),
(39, 'Gold Necklace 39', 'GN039', '2.881 GM', 'img/gold_ring/07665471242ring-2.881-40.jpg', 'Gold Necklace'),
(40, 'Gold Necklace 40', 'GN040', '3.912 GM', 'img/gold_ring/07665481242ring-3.912-41.jpg', 'Gold Necklace'),
(41, 'Gold Necklace 41', 'GN041', '3.841 GM', 'img/gold_ring/07665491242ring-3.841-42.jpg', 'Gold Necklace'),
(42, 'Gold Necklace 42', 'GN042', '3.681 GM', 'img/gold_ring/07665501242ring-3.681-43.jpg', 'Gold Necklace'),
(43, 'Gold Necklace 43', 'GN043', '3.811 GM', 'img/gold_ring/07665511242ring-3.811-44.jpg', 'Gold Necklace'),
(44, 'Gold Necklace 44', 'GN044', '3.601 GM', 'img/gold_ring/07665521242ring-3.601-45.jpg', 'Gold Necklace'),
(45, 'Gold Necklace 45', 'GN045', '3.821 GM', 'img/gold_ring/07665531242ring-3.821-46.jpg', 'Gold Necklace');

-- --------------------------------------------------------

--
-- Table structure for table `gold_pendants`
--

CREATE TABLE `gold_pendants` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gold_pendants`
--

INSERT INTO `gold_pendants` (`id`, `name`, `code`, `weight`, `image`, `description`) VALUES
(46, 'Gold Pendant 1', 'GP001', '5.20 GM', 'img/gold_ring/07434201862-1480x1536.jpg', 'Gold Pendant'),
(47, 'Gold Pendant 2', 'GP002', '4.392 GM', 'img/gold_ring/07665021239-ring-4.392-10.jpg', 'Gold Pendant'),
(48, 'Gold Pendant 3', 'GP003', '4.462 GM', 'img/gold_ring/07665021242ring-4.462-11.jpg', 'Gold Pendant'),
(49, 'Gold Pendant 4', 'GP004', '4.192 GM', 'img/gold_ring/07665041242ring-4.192-12-1.jpg', 'Gold Pendant'),
(50, 'Gold Pendant 5', 'GP005', '3 GM', 'img/gold_ring/07665061242ring-3-R2.jpg', 'Gold Pendant'),
(51, 'Gold Pendant 6', 'GP006', '3 GM', 'img/gold_ring/07665081239-ring-3.jpg', 'Gold Pendant'),
(52, 'Gold Pendant 7', 'GP007', '3.181 GM', 'img/gold_ring/07665081242-ring-3.181-4.jpg', 'Gold Pendant'),
(53, 'Gold Pendant 8', 'GP008', '2.644 GM', 'img/gold_ring/07665131242ring-2.644-5.jpg', 'Gold Pendant'),
(54, 'Gold Pendant 9', 'GP009', '4.392 GM', 'img/gold_ring/07665141239-ring-4.392-6.jpg', 'Gold Pendant'),
(55, 'Gold Pendant 10', 'GP010', '3.178 GM', 'img/gold_ring/07665161242-ring-3.178-7.jpg', 'Gold Pendant'),
(56, 'Gold Pendant 11', 'GP011', '3.122 GM', 'img/gold_ring/07665201242-ring-3.122-8.jpg', 'Gold Pendant'),
(57, 'Gold Pendant 12', 'GP012', '4.392 GM', 'img/gold_ring/07665211239-ring-4.392-9.jpg', 'Gold Pendant'),
(58, 'Gold Pendant 13', 'GP013', '2.544 GM', 'img/gold_ring/07665241242-ring-2.544-13.jpg', 'Gold Pendant'),
(59, 'Gold Pendant 14', 'GP014', '3.192 GM', 'img/gold_ring/07665301242-ring-3.192-14.jpg', 'Gold Pendant'),
(60, 'Gold Pendant 15', 'GP015', '2.492 GM', 'img/gold_ring/07665311242-ring-2.492-15.jpg', 'Gold Pendant'),
(61, 'Gold Pendant 16', 'GP016', '2.982 GM', 'img/gold_ring/07665321242-ring-2.982-16.jpg', 'Gold Pendant'),
(62, 'Gold Pendant 17', 'GP017', '2.578 GM', 'img/gold_ring/07665341242-ring-2.578-17.jpg', 'Gold Pendant'),
(63, 'Gold Pendant 18', 'GP018', '2.882 GM', 'img/gold_ring/07665351242-ring-2.882-18.jpg', 'Gold Pendant'),
(64, 'Gold Pendant 19', 'GP019', '3.681 GM', 'img/gold_ring/07665361242-ring-3.681-19.jpg', 'Gold Pendant'),
(65, 'Gold Pendant 20', 'GP020', '2.985 GM', 'img/gold_ring/07665371242-ring-2.985-20.jpg', 'Gold Pendant'),
(66, 'Gold Pendant 21', 'GP021', '2.982 GM', 'img/gold_ring/07665381242-ring-2.982-21.jpg', 'Gold Pendant'),
(67, 'Gold Pendant 22', 'GP022', '3.002 GM', 'img/gold_ring/07665391242-ring-3.002-22.jpg', 'Gold Pendant'),
(68, 'Gold Pendant 23', 'GP023', '3.131 GM', 'img/gold_ring/07665401242-ring-3.131-23.jpg', 'Gold Pendant'),
(69, 'Gold Pendant 24', 'GP024', '2.844 GM', 'img/gold_ring/07665411242-ring-2.844-24.jpg', 'Gold Pendant'),
(70, 'Gold Pendant 25', 'GP025', '3.081 GM', 'img/gold_ring/07665421242-ring-3.081-25.jpg', 'Gold Pendant'),
(71, 'Gold Pendant 26', 'GP026', '3.178 GM', 'img/gold_ring/07665431242-ring-3.178-26.jpg', 'Gold Pendant'),
(72, 'Gold Pendant 27', 'GP027', '3.102 GM', 'img/gold_ring/07665441242-ring-3.102-27.jpg', 'Gold Pendant'),
(73, 'Gold Pendant 28', 'GP028', '2.879 GM', 'img/gold_ring/07665451242-ring-2.879-28.jpg', 'Gold Pendant'),
(74, 'Gold Pendant 29', 'GP029', '2.925 GM', 'img/gold_ring/07665461242-ring-2.925-29.jpg', 'Gold Pendant'),
(75, 'Gold Pendant 30', 'GP030', '3.275 GM', 'img/gold_ring/07665471242-ring-3.275-30.jpg', 'Gold Pendant'),
(76, 'Gold Pendant 31', 'GP031', '2.986 GM', 'img/gold_ring/07665481242-ring-2.986-31.jpg', 'Gold Pendant'),
(77, 'Gold Pendant 32', 'GP032', '2.975 GM', 'img/gold_ring/07665491242-ring-2.975-32.jpg', 'Gold Pendant'),
(78, 'Gold Pendant 33', 'GP033', '3.098 GM', 'img/gold_ring/07665501242-ring-3.098-33.jpg', 'Gold Pendant'),
(79, 'Gold Pendant 34', 'GP034', '3.000 GM', 'img/gold_ring/07665511242-ring-3.000-34.jpg', 'Gold Pendant'),
(80, 'Gold Pendant 35', 'GP035', '2.942 GM', 'img/gold_ring/07665521242-ring-2.942-35.jpg', 'Gold Pendant'),
(81, 'Gold Pendant 36', 'GP036', '3.180 GM', 'img/gold_ring/07665531242-ring-3.180-36.jpg', 'Gold Pendant'),
(82, 'Gold Pendant 37', 'GP037', '2.853 GM', 'img/gold_ring/07665541242-ring-2.853-37.jpg', 'Gold Pendant'),
(83, 'Gold Pendant 38', 'GP038', '2.953 GM', 'img/gold_ring/07665551242-ring-2.953-38.jpg', 'Gold Pendant'),
(84, 'Gold Pendant 39', 'GP039', '2.970 GM', 'img/gold_ring/07665561242-ring-2.970-39.jpg', 'Gold Pendant'),
(85, 'Gold Pendant 40', 'GP040', '3.025 GM', 'img/gold_ring/07665571242-ring-3.025-40.jpg', 'Gold Pendant'),
(86, 'Gold Pendant 41', 'GP041', '3.101 GM', 'img/gold_ring/07665581242-ring-3.101-41.jpg', 'Gold Pendant'),
(87, 'Gold Pendant 42', 'GP042', '2.954 GM', 'img/gold_ring/07665591242-ring-2.954-42.jpg', 'Gold Pendant'),
(88, 'Gold Pendant 43', 'GP043', '3.100 GM', 'img/gold_ring/07665601242-ring-3.100-43.jpg', 'Gold Pendant'),
(89, 'Gold Pendant 44', 'GP044', '3.086 GM', 'img/gold_ring/07665611242-ring-3.086-44.jpg', 'Gold Pendant'),
(90, 'Gold Pendant 45', 'GP045', '3.002 GM', 'img/gold_ring/07665621242-ring-3.002-45.jpg', 'Gold Pendant'),
(91, 'Gold Pendant 46', 'GP046', '3.180 GM', 'img/gold_ring/07665631242-ring-3.180-46.jpg', 'Gold Pendant');

-- --------------------------------------------------------

--
-- Table structure for table `gold_ring`
--

CREATE TABLE `gold_ring` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gold_ring`
--

INSERT INTO `gold_ring` (`id`, `name`, `code`, `weight`, `image`, `description`) VALUES
(1, 'Gold Ring 1', 'GR001', '5.20 GM', 'img/gold_ring/07434201862-1480x1536.jpg', 'Gold Ring'),
(2, 'Gold Ring 2', 'GR002', '4.392 GM', 'img/gold_ring/07665021239-ring-4.392-10.jpg', 'Gold Ring'),
(3, 'Gold Ring 3', 'GR003', '4.462 GM', 'img/gold_ring/07665021242ring-4.462-11.jpg', 'Gold Ring'),
(4, 'Gold Ring 4', 'GR004', '4.192 GM', 'img/gold_ring/07665041242ring-4.192-12-1.jpg', 'Gold Ring'),
(5, 'Gold Ring 5', 'GR005', '3 GM', 'img/gold_ring/07665061242ring-3-R2.jpg', 'Gold Ring'),
(6, 'Gold Ring 6', 'GR006', '3 GM', 'img/gold_ring/07665081239-ring-3.jpg', 'Gold Ring'),
(7, 'Gold Ring 7', 'GR007', '3.181 GM', 'img/gold_ring/07665081242-ring-3.181-4.jpg', 'Gold Ring'),
(8, 'Gold Ring 8', 'GR008', '2.644 GM', 'img/gold_ring/07665131242ring-2.644-5.jpg', 'Gold Ring'),
(9, 'Gold Ring 9', 'GR009', '4.292 GM', 'img/gold_ring/07665141242-ring-4.292-6.jpg', 'Gold Ring'),
(10, 'Gold Ring 10', 'GR010', '3.062 GM', 'img/gold_ring/07665161242rings-3.062-7.jpg', 'Gold Ring'),
(11, 'Gold Ring 11', 'GR011', '--', 'img/gold_ring/074340140-min-1446x1536.jpg', 'Gold Ring'),
(12, 'Gold Ring 12', 'GR012', '--', 'img/gold_ring/074340753-min-1360x1536.jpg', 'Gold Ring'),
(13, 'Gold Ring 13', 'GR013', '--', 'img/gold_ring/074820776-min.jpg', 'Gold Ring'),
(14, 'Gold Ring 14', 'GR014', '--', 'img/gold_ring/074821035-min-1430x1536.jpg', 'Gold Ring'),
(15, 'Gold Ring 15', 'GR015', '--', 'img/gold_ring/075340161-1-scaled-1-1152x1536.jpg', 'Gold Ring'),
(16, 'Gold Ring 16', 'GR016', '4.392 GM', 'img/gold_ring/076650239ring-4.392-8.jpg', 'Gold Ring'),
(17, 'Gold Ring 17', 'GR017', '6 GM', 'img/gold_ring/163508286-6gm4gm-R1.jpg', 'Gold Ring'),
(18, 'Gold Ring 18', 'GR018', '--', 'img/gold_ring/0718217108-min-1288x1536.jpg', 'Gold Ring'),
(19, 'Gold Ring 19', 'GR019', '--', 'img/gold_ring/0738201668-1302x1536.jpg', 'Gold Ring'),
(20, 'Gold Ring 20', 'GR020', '--', 'img/gold_ring/0743402100-min-1536x1349.jpg', 'Gold Ring'),
(21, 'Gold Ring 21', 'GR021', '--', 'img/gold_ring/0743405147-min-1529x1536.jpg', 'Gold Ring'),
(22, 'Gold Ring 22', 'GR022', '--', 'img/gold_ring/0743406104-1357x1536.jpg', 'Gold Ring'),
(23, 'Gold Ring 23', 'GR023', '--', 'img/gold_ring/0743406147-min-1536x1407.jpg', 'Gold Ring'),
(24, 'Gold Ring 24', 'GR024', '--', 'img/gold_ring/0743419165-1536x1403.jpg', 'Gold Ring'),
(25, 'Gold Ring 25', 'GR025', '--', 'img/gold_ring/0748201274-1536x1503.jpg', 'Gold Ring'),
(26, 'Gold Ring 26', 'GR026', '--', 'img/gold_ring/0748202222-1536x1521.jpg', 'Gold Ring'),
(27, 'Gold Ring 27', 'GR027', '--', 'img/gold_ring/0748202599-1536x1318.jpg', 'Gold Ring'),
(28, 'Gold Ring 28', 'GR028', '--', 'img/gold_ring/0748206641-min-1392x1536.jpg', 'Gold Ring'),
(29, 'Gold Ring 29', 'GR029', '--', 'img/gold_ring/0748209151-1411x1536.jpg', 'Gold Ring'),
(30, 'Gold Ring 30', 'GR030', '--', 'img/gold_ring/0748238487-min-1456x1536.jpg', 'Gold Ring'),
(31, 'Gold Ring 31', 'GR031', '5.43 GM', 'img/gold_ring/0765101242ring-5.43-2-9.jpg', 'Gold Ring'),
(32, 'Gold Ring 32', 'GR032', '--', 'img/gold_ring/07234011837-.jpg', 'Gold Ring'),
(33, 'Gold Ring 33', 'GR033', '--', 'img/gold_ring/07234013195-1404x1536.jpg', 'Gold Ring'),
(34, 'Gold Ring 34', 'GR034', '--', 'img/gold_ring/07234052359-1395x1536.jpg', 'Gold Ring'),
(35, 'Gold Ring 35', 'GR035', '--', 'img/gold_ring/07234124425-1536x1448.jpg', 'Gold Ring'),
(36, 'Gold Ring 36', 'GR036', '--', 'img/gold_ring/07282091118-1431x1536.jpg', 'Gold Ring'),
(37, 'Gold Ring 37', 'GR037', '--', 'img/gold_ring/07282111118.jpg', 'Gold Ring'),
(38, 'Gold Ring 38', 'GR038', '--', 'img/gold_ring/07282131118-1253x1536.jpg', 'Gold Ring'),
(39, 'Gold Ring 39', 'GR039', '--', 'img/gold_ring/07282211118-1300x1536.jpg', 'Gold Ring'),
(40, 'Gold Ring 40', 'GR040', '--', 'img/gold_ring/07282251118-1414x1536.jpg', 'Gold Ring'),
(41, 'Gold Ring 41', 'GR041', '--', 'img/gold_ring/07282251377-1494x1536.jpg', 'Gold Ring'),
(42, 'Gold Ring 42', 'GR042', '--', 'img/gold_ring/07282261799-1503x1536.jpg', 'Gold Ring'),
(43, 'Gold Ring 43', 'GR043', '--', 'img/gold_ring/07282311377-1536x1518.jpg', 'Gold Ring'),
(44, 'Gold Ring 44', 'GR044', '--', 'img/gold_ring/07334056252-1218x1536.jpg', 'Gold Ring'),
(45, 'Gold Ring 45', 'GR045', '--', 'img/gold_ring/07434081960-1536x1532.jpg', 'Gold Ring'),
(46, 'Gold Ring 46', 'GR046', '--', 'img/gold_ring/07434198346-scaled-1-1152x1536.jpg', 'Gold Ring');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gold_bangles`
--
ALTER TABLE `gold_bangles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gold_bracelets`
--
ALTER TABLE `gold_bracelets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gold_chain`
--
ALTER TABLE `gold_chain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gold_earring`
--
ALTER TABLE `gold_earring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gold_haarams`
--
ALTER TABLE `gold_haarams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gold_kadaas`
--
ALTER TABLE `gold_kadaas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gold_mangalsutra`
--
ALTER TABLE `gold_mangalsutra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gold_necklaces`
--
ALTER TABLE `gold_necklaces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gold_pendants`
--
ALTER TABLE `gold_pendants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gold_ring`
--
ALTER TABLE `gold_ring`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gold_bangles`
--
ALTER TABLE `gold_bangles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `gold_bracelets`
--
ALTER TABLE `gold_bracelets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `gold_chain`
--
ALTER TABLE `gold_chain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `gold_earring`
--
ALTER TABLE `gold_earring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `gold_haarams`
--
ALTER TABLE `gold_haarams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `gold_kadaas`
--
ALTER TABLE `gold_kadaas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `gold_mangalsutra`
--
ALTER TABLE `gold_mangalsutra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `gold_necklaces`
--
ALTER TABLE `gold_necklaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `gold_pendants`
--
ALTER TABLE `gold_pendants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `gold_ring`
--
ALTER TABLE `gold_ring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
