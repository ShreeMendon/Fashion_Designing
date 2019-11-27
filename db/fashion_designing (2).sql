-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2019 at 03:14 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion_designing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `repeatPassword` varchar(100) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updationDate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `repeatPassword`, `creationDate`, `updationDate`) VALUES
(1, 'shree', '123', '123', '2019-11-01 02:53:24', '2019-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(225) NOT NULL,
  `categoryDescription` longtext NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updationDate` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(1, 'WomensCollections', '', '2019-11-20 03:50:32', ''),
(2, 'MensCollections', '', '2019-11-20 04:01:27', ''),
(3, 'JewelleryCollections', '', '2019-11-20 04:00:27', ''),
(4, 'BeautyCollections', '', '2019-11-20 04:00:26', '');

-- --------------------------------------------------------

--
-- Table structure for table `itemdetails`
--

CREATE TABLE `itemdetails` (
  `id` int(11) NOT NULL,
  `itemcategoryid` int(11) NOT NULL,
  `itemSubCategoryid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `color` varchar(30) NOT NULL,
  `meterial` varchar(50) NOT NULL,
  `deliverydetails` varchar(500) NOT NULL,
  `size` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL,
  `ActiveFlag` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemdetails`
--

INSERT INTO `itemdetails` (`id`, `itemcategoryid`, `itemSubCategoryid`, `name`, `price`, `image`, `color`, `meterial`, `deliverydetails`, `size`, `description`, `ActiveFlag`) VALUES
(1, 1, 1, 'Deep red thread and gota embroidered velvet leheng', '36,835', 'images/ww1.jpg', 'Red', 'Velvet', ' Within India:7 weeks,International:8 weeks', 'S-M-L-XS', 'The sending details will be shared with you through email for you to track.', 1),
(2, 1, 2, 'Bridal Yellow thread and gota embroidered velvet l', '35,678', 'images/w4.jpg', 'Yellow', 'Velvet', ' Within India:7 weeks,International:8 weeks', 'S-M-L-XS', 'The sending details will be shared with you through email for you to track.', 1),
(3, 1, 3, 'Bridal Red thread and gota embroidered velvet lehe', '39,876', 'images/w2.jpg', 'Red', 'Velvet', ' Within India:7 weeks,International:8 weeks', 'S-M-L-XS', 'The sending details will be shared with you through email for you to track.', 1),
(4, 2, 1, 'Exclusive Red Color Designer Sherwani Set Store D', '34,564', 'images/m1.jpg', 'Red', 'Velvet', 'Within India:7 weeks,International:8 weeks', 'S-M-L-XL-XXL', 'your garment will come wrapped in butter paper, and further packaged and boxed carefully to ensure that your garment reaches you in perfect condition.', 1),
(5, 2, 2, 'Exclusive Black Color Designer Sherwani Set Store ', '34,564', 'images/m2.jpg', 'Black', 'Velvet', 'Within India:7 weeks,International:8 weeks', 'S-M-L-XL-XXL', 'your garment will come wrapped in butter paper, and further packaged and boxed carefully to ensure that your garment reaches you in perfect condition.', 1),
(7, 3, 1, 'Jewel India Bollywood Traditional Wedding Party-we', '15.98', 'images/j1.jpg', '', 'Ghungroo Design Indian Bahubali Boho Ethnic Party ', 'Within India:7 weeks,International:8 weeks', '', 'The sending details will be shared with you through email for you to trcck.', 1),
(8, 3, 2, 'Jewel India Bollywood Traditional Wedding Party-we', '15.98', 'images/j2.jpg', '', 'Ghungroo Design Indian Bahubali Boho Ethnic Party ', 'Within India:7 weeks,International:8 weeks', '', 'The sending details will be shared with you through email for you to trcck.', 1),
(9, 3, 3, 'Jewel India Bollywood Traditional Wedding Party-we', '15.98', 'images/j3.jpg', '', 'Ghungroo Design Indian Bahubali Boho Ethnic Party ', 'Within India:7 weeks,International:8 weeks', '', 'The sending details will be shared with you through email for you to trcck.', 1),
(10, 4, 1, 'The glossy LIT Nail Enamels ', '368', 'images/b1.jpg', '', 'The glossy LIT Nail Enamels by Glamour promise sup', 'Within India:7 weeks,International:8 weeks', '', '1.Sport a fresh manicure with every swipe\r\n2.Flawless texture\r\n3.Ultra long-lasting formula\r\n4.Super solid colour payoff\r\n5.Contoured applicator for easy application', 1),
(11, 4, 2, 'The glossy LIT Lips Enamels ', '368', 'images/b2.jpg', '', 'The glossy LIT Lips Enamels by Glamour promise sup', 'Within India:7 weeks,International:8 weeks', '', '1.Sport a fresh manicure with every swipe\r\n2.Flawless texture\r\n3.Ultra long-lasting formula\r\n4.Super solid colour payoff\r\n5.Contoured applicator for easy application', 1),
(12, 4, 3, 'The  LIT Face Foundation ', '368', 'images/b3.jpg', '', 'The LIT Face foundation by Glamour promise super l', 'Within India:7 weeks,International:8 weeks', '', '1.Sport a fresh manicure with every swipe\r\n2.Flawless texture\r\n3.Ultra long-lasting formula\r\n4.Super solid colour payoff\r\n5.Contoured applicator for easy application', 1),
(27, 1, 0, 'saree', '250', '3.jpg', 'red', 'cotton', 'Within India:7 weeks,International:8 weeks', 'L', 'szzfdgvbjnm', 1),
(28, 2, 0, 'sherwani', '56678', 'm5.jpg', 'black', 'velve', 'Within India:7 weeks,International:8 weeks', 'XXL', 'Exclusive Men Sherwani Set', 1),
(29, 2, 0, 'sherwani', '56678', 'm5.jpg', 'black', 'velve', 'Within India:7 weeks,International:8 weeks', 'XXL', 'Exclusive Men Sherwani Set', 1),
(30, 2, 0, 'sherwani', '56678', 'm4.jpg', 'black', 'cotton', 'Within India:7 weeks,International:8 weeks', 'XXL', 'sherwani', 1),
(31, 1, 0, 'Bridal Lehenga', '6469', '112_6188337e-dc66-465d-a262-f2f80b983176_1024x1024@2x.jpg', 'red', 'cotton', 'Within India:7 weeks,International:8 weeks', 'S', 'Bridal Lehenga', 1),
(32, 1, 0, 'saree', '8562', 'Everything You Need To Know About Nose Rings.jpg', 'red', 'nylon', 'Within India:7 weeks,International:8 weeks', 'S', 'Bridal Red Saree', 1),
(33, 1, 0, 'shree', '45679', '#sonakshisinha #actresses #bollywood #sonakshi #sinha.jpg', 'red', 'nylon', 'Within India:7 weeks,International:8 weeks', 'M', 'sedrfghjiop', 1),
(34, 1, 0, 'shree', '45679', 'images/#sonakshisinha #actresses #bollywood #sonakshi #sinha (1).jpg', 'red', 'nylon', 'Within India:7 weeks,International:8 weeks', 'M', 'sedrfghjiop', 1),
(35, 1, 0, 'shree', '45679', 'images/656315Dq8qInWR.jpg', 'red', 'nylon', 'Within India:7 weeks,International:8 weeks', 'M', 'sedrfghjiop', 1),
(36, 1, 0, 'shree', '45679', 'images/45.jpg', 'red', 'nylon', 'Within India:7 weeks,International:8 weeks', 'M', 'sedrfghjiop', 1),
(37, 1, 0, 'shree', '45679', 'images/45.jpg', 'red', 'nylon', 'Within India:7 weeks,International:8 weeks', 'M', 'sedrfghjiop', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `cardName` varchar(50) NOT NULL,
  `cardNo` bigint(20) NOT NULL,
  `expMonth` int(11) NOT NULL,
  `expYear` int(11) NOT NULL,
  `cvv` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `lid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `cardName`, `cardNo`, `expMonth`, `expYear`, `cvv`, `pid`, `lid`) VALUES
(4, 'Rupay', 989898, 6565, 6565, 123, 1, 12),
(5, 'Rupay', 852, 4120, 52, 852, 1, 12),
(6, 'Rupay', 52, 85, 852, 852, 1, 12),
(7, 'Rupay', 52, 85, 852, 852, 1, 12),
(8, 'Rupay', 74185209633333741, 41, 41, 252, 1, 12),
(9, 'Rupay', 74185209633333741, 41, 41, 252, 1, 12),
(10, 'Rupay', 74185209633333741, 41, 41, 252, 1, 12),
(11, 'Rupay', 74185209633333741, 41, 41, 252, 1, 12),
(12, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(13, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(14, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(15, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(16, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(17, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(18, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(19, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(20, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(21, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(22, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(23, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(24, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(25, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(26, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(27, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(28, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(29, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(30, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(31, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(32, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(33, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(34, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(35, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(36, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(37, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(38, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(39, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(40, 'Rupay', 852963741963, 11, 22, 456, 1, 12),
(41, 'Rupay', 741852963123, 11, 22, 357, 1, 12),
(42, 'Rupay', 741852963123, 11, 22, 357, 1, 12),
(43, 'Rupay', 741852963123, 11, 22, 357, 1, 12),
(44, 'Rupay', 741852963123, 11, 22, 357, 1, 12),
(45, 'Rupay', 741852963123, 11, 22, 357, 1, 12),
(46, 'Rupay', 741185229633, 2, 22, 963, 1, 12),
(47, 'Rupay', 741852963852, 12, 23, 465, 1, 12),
(48, 'Rupay', 741852963852, 12, 23, 465, 1, 12),
(49, 'Rupay', 741852963, 6, 24, 564, 1, 12),
(50, 'Rupay', 741852963, 6, 24, 564, 1, 12),
(51, 'Rupay', 741852963417, 5, 2020, 365, 1, 12),
(52, 'Rupay', 741852963123, 11, 2020, 859, 1, 12),
(53, 'Rupay', 741852963123, 11, 2020, 859, 1, 12),
(54, 'Rupay', 741852963123, 11, 2020, 859, 1, 12),
(55, 'Rupay', 741852963123, 11, 2020, 859, 1, 12),
(56, 'Rupay', 741852963123, 11, 2020, 859, 1, 12),
(57, 'Rupay', 741852963123, 11, 2020, 859, 1, 12),
(58, 'Rupay', 741852963123, 11, 2020, 859, 1, 12),
(59, 'Rupay', 741852963123, 11, 2020, 859, 1, 12),
(60, 'Rupay', 741852963123, 11, 2020, 859, 1, 12),
(61, 'Rupay', 741852963123, 11, 2020, 859, 1, 12),
(62, 'Rupay', 741852963123, 11, 2020, 859, 1, 12),
(63, 'Rupay', 741852963123, 11, 2020, 859, 1, 12),
(64, 'Rupay', 741852963, 12, 22, 963, 1, 12),
(65, 'Rupay', 741852963, 12, 22, 963, 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `subcategory` varchar(225) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updationDate` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `categoryid`, `subcategory`, `creationDate`, `updationDate`) VALUES
(1, 1, 'Bridallehenga', '2019-11-20 03:11:28', ''),
(2, 1, 'Bridallehenga', '2019-11-16 03:50:29', ''),
(3, 1, 'Bridallehenga', '2019-11-20 07:03:23', ''),
(4, 2, 'Mens Sherwani', '2019-11-05 22:54:13', ''),
(5, 2, 'Mens Sherwani', '2019-11-18 04:08:35', ''),
(6, 2, 'Mens Sherwani', '2019-11-08 13:06:26', ''),
(7, 3, 'jewellery Jumka set', '2019-11-22 08:59:38', ''),
(8, 3, 'jewellery necklace set', '2019-11-11 08:04:16', ''),
(9, 3, 'jewellery earing set', '2019-11-12 03:56:12', ''),
(10, 4, 'Nail Enamels', '2019-11-14 00:58:29', ''),
(11, 4, 'Lipstic', '2019-11-11 04:43:35', ''),
(12, 4, 'Face Foundation', '2019-11-07 04:02:35', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `repeatPassword` varchar(100) NOT NULL,
  `shippingAddress` longtext NOT NULL,
  `shippingState` varchar(100) NOT NULL,
  `shippingCity` varchar(100) NOT NULL,
  `shippingPincode` int(11) NOT NULL,
  `size` varchar(10) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `repeatPassword`, `shippingAddress`, `shippingState`, `shippingCity`, `shippingPincode`, `size`, `regDate`, `pid`) VALUES
(12, 'shree', 'shree@gmail.com', '123', '123', 'mangalore', 'karnataka', 'mangalore', 574241, 'S', '2019-11-27 13:07:41', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itemdetails`
--
ALTER TABLE `itemdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `itemdetails`
--
ALTER TABLE `itemdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
