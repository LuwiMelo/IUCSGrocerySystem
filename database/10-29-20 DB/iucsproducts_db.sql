-- phpMyAdmin SQL Dump
-- version 4.6.5-dev
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2020 at 08:35 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iucsproducts_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblformtransactions`
--

CREATE TABLE `tblformtransactions` (
  `TransactionID` int(11) NOT NULL,
  `TransactionDetails` longtext,
  `TransactionDate` datetime DEFAULT NULL,
  `TransactionUserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblproductcategories`
--

CREATE TABLE `tblproductcategories` (
  `ProductCategoryID` int(11) NOT NULL,
  `ProductCategoryName` varchar(45) DEFAULT NULL,
  `ProductCategoryDescription` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblproductcategories`
--

INSERT INTO `tblproductcategories` (`ProductCategoryID`, `ProductCategoryName`, `ProductCategoryDescription`) VALUES
(1, 'Canned Goods/Noodles', NULL),
(2, 'Coffee/Sugar/Salt/Powdered Beverages', NULL),
(3, 'Dairy Products/Bread/Spreads', NULL),
(4, 'Laundry/Bathroom', NULL),
(5, 'Milk(Evap,Condensed,Powdered)', NULL),
(6, 'Oil/Condiments', NULL),
(7, 'Shampoo/Conditioner/Soap', NULL),
(8, 'Personal Hygiene', ''),
(9, 'Rice', ''),
(10, 'Household', ''),
(11, 'Candies and Snackss', 'Candies and Snackss');

-- --------------------------------------------------------

--
-- Table structure for table `tblproducts`
--

CREATE TABLE `tblproducts` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(45) DEFAULT NULL,
  `ProductDetails` longtext,
  `ProductCategoryID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblproducts`
--

INSERT INTO `tblproducts` (`ProductID`, `ProductName`, `ProductDetails`, `ProductCategoryID`) VALUES
(1, 'Nescafe Creamylatte', '', 2),
(2, 'Nescafe Original', '', 2),
(3, 'Nescafe Brown', '', 2),
(4, 'Nescafe Classic 2 for 1', '', 2),
(5, 'Primera White Sugar', '', 2),
(6, 'Nesfood White Sugar', '', 2),
(7, 'Blanea Twin', '', 2),
(8, 'GT Twin', '', 2),
(9, 'Nescafe White Twin', '', 2),
(10, 'Bear Brand Swak', '', 5),
(11, 'Alaska Evap', '', 5),
(12, 'Cowbell Condensed', '', 5),
(13, 'Jersey Condensed', '', 5),
(14, 'Miton Oil', '', 6),
(15, 'Golden Fiesta Oil', '', 6),
(16, 'Frito Plus Oil', '', 6),
(17, 'Minola Palm Oil', '', 6),
(18, 'Datu Toyo', '', 6),
(19, 'Silver Swan Toyo', '', 6),
(20, 'Datu Vinegar', '', 6),
(21, 'Silver Swan Vinegar', '', 6),
(22, 'Ligo Red', '', 1),
(23, 'Ligo Green', '', 1),
(24, 'Mega Green', '', 1),
(25, 'Mega Red', '', 1),
(26, 'Youngs Town Red', '', 1),
(27, 'Youngs Town Green', '', 1),
(28, '1m Beef', '', 1),
(29, '1m Oki', '', 1),
(30, '1m Canton-All Flavvor', '', 1),
(31, 'Nissin Ramen', '', 1),
(32, 'Argentina Corned Beef', '', 1),
(33, 'CDO Karne Norte', '', 1),
(34, 'Sunsilk Green', '', 7),
(35, 'Sunsilk Pink', '', 7),
(36, 'Clear Pink', '', 7),
(37, 'Creamsilk Pink', '', 7),
(38, 'Rejoice Shampoo', '', 7),
(39, 'Pantene Hairfall', '', 7),
(40, 'Pantene 5 minute', '', 7),
(41, 'Surf Powder Red', '', 4),
(42, 'Surf Powder Pink', '', 4),
(43, 'Tide Powder', '', 4),
(44, 'Downy Antibac', '', 4),
(45, 'Del Fabcon', '', 4),
(46, 'Quezo', '', 3),
(47, 'Eden Cheese', '', 3),
(48, 'Marg. Cheezie', '', 3),
(49, 'OK Cheese', '', 3),
(50, 'Alaska Powder', '', 5),
(51, 'Bear Brand Powder', '', 5),
(52, 'Milo', '', 2),
(53, 'Coffee Mate', '', 2),
(54, 'Ludys Peanut Butter', '', 3),
(55, 'Lilys Peanut Butter', '', 3),
(56, 'Ladys Choice Sandwich Spread', '', 3),
(57, 'Ladys Choice Mayonnaise', '', 3),
(58, 'Bestfoods Sandwich Spread', '', 3),
(59, 'Bestfoods Mayonnaise', '', 3),
(60, 'Brown Sugar', '', 2),
(61, 'White Sugar', '', 2),
(62, 'Century Corned Tuna', '', 1),
(63, 'Philips Meatloaf', '', 1),
(64, 'Argentina Meatloaf', '', 1),
(65, 'Purefoods Corned Beef', '', 1),
(66, 'Colgate Toothpaste', '', 8),
(67, 'Close up Toothpaste', '', 8),
(68, 'Zonrox', '', 4),
(69, 'Modess With Wings', '', 8),
(70, 'Modess Without Wings', '', 8),
(71, 'Whisper', '', 8),
(72, 'Palmolive', '', 7),
(73, 'Safeguard Soap', '', 7),
(74, 'Dove Soap', '', 7),
(75, 'Greencross 40% Alcohol', '', 8),
(76, 'Greencross 70% Alcohol', '', 8),
(77, 'Casino Alcohol', '', 8),
(78, 'Iodized Salt', '', 2),
(79, 'Cheez Whiz Plain', '', 3),
(80, 'Cheez Whi Pimiento', '', 3),
(81, 'Jade Tissue', '', 4),
(82, 'Femme Tissue', '', 4),
(83, 'Olay Soap', '', 7),
(84, 'Del Monte Tomato Sauce', '', 6),
(85, 'Dinorado Rice', '', 9),
(86, 'Liberty Rice', '', 9),
(87, 'Organic Dinorado Rice', '', 9),
(88, 'Angelica Rice', '', 9),
(89, 'Jasmin Rice', '', 9),
(90, 'Lysol Big', '', 4),
(91, 'Feminine Unsented Facial Tissue', '', 8),
(92, 'Tisyu Coreless Negosyo Pack', '', 8),
(93, 'Surf Powder', '', 4),
(94, 'Baygon Spray Big Bottle', '', 10),
(95, 'Apollo Muriatic Acid', '', 10),
(96, 'Lysol Spray', '', 10),
(97, 'Zonrox', '', 10),
(98, 'Domex', '', 4),
(99, 'testproduct6', '', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tblproductxuom`
--

CREATE TABLE `tblproductxuom` (
  `ProductXUOMProductID` int(11) NOT NULL,
  `ProductXUOMUOMID` int(11) NOT NULL,
  `ProductXUOMSupplierID` int(11) NOT NULL,
  `Price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblproductxuom`
--

INSERT INTO `tblproductxuom` (`ProductXUOMProductID`, `ProductXUOMUOMID`, `ProductXUOMSupplierID`, `Price`) VALUES
(1, 23, 1, 29.3),
(2, 23, 1, 29.3),
(3, 23, 1, 29.3),
(4, 1, 1, 67.2),
(5, 2, 1, 14.85),
(5, 3, 1, 29.65),
(6, 2, 1, 15.4),
(6, 3, 1, 30.7),
(7, 17, 1, 9.5),
(8, 17, 1, 9.05),
(9, 17, 1, 9.05),
(10, 24, 1, 16.45),
(11, 4, 1, 10.9),
(11, 5, 1, 24.95),
(12, 5, 1, 18.9),
(12, 6, 1, 28.55),
(13, 7, 1, 29.35),
(14, 8, 1, 25.45),
(15, 8, 1, 31.55),
(16, 8, 1, 20.1),
(17, 8, 1, 25),
(18, 9, 1, 15.9),
(19, 9, 1, 12.85),
(20, 10, 1, 12.85),
(21, 10, 1, 13),
(22, 11, 1, 16.55),
(23, 11, 1, 16.75),
(24, 11, 1, 16.05),
(25, 11, 1, 16.4),
(26, 11, 1, 16),
(27, 11, 1, 16),
(28, 17, 1, 7.25),
(29, 17, 1, 7.25),
(30, 17, 1, 11.15),
(31, 17, 1, 10.4),
(32, 14, 1, 30.7),
(32, 15, 1, 34.95),
(32, 16, 1, 50.5),
(33, 14, 1, 25.7),
(33, 15, 1, 29.65),
(33, 16, 1, 42.65),
(34, 26, 1, 46.65),
(35, 26, 1, 46.65),
(36, 26, 1, 48.85),
(37, 26, 1, 58.25),
(38, 26, 1, 50.2),
(39, 26, 1, 50.3),
(40, 26, 1, 49.85),
(41, 27, 1, 56),
(42, 27, 1, 56),
(43, 27, 1, 102.3),
(43, 28, 1, 52.15),
(44, 28, 1, 27.4),
(45, 29, 1, 20.6),
(46, 20, 1, 44.95),
(46, 21, 1, 34.7),
(47, 22, 1, 48.1),
(48, 22, 1, 43.6),
(49, 17, 1, 36.95),
(50, 30, 1, 83.25),
(50, 35, 1, 28),
(50, 36, 1, 412.35),
(51, 14, 1, 49.55),
(51, 31, 1, 106),
(51, 37, 1, 277.35),
(51, 38, 1, 366.5),
(52, 32, 1, 63.2),
(52, 39, 1, 26.7),
(52, 40, 1, 170.55),
(52, 41, 1, 272.55),
(53, 33, 1, 32.45),
(53, 35, 1, 15.8),
(53, 42, 1, 84.25),
(54, 34, 1, 74.95),
(54, 43, 1, 109.15),
(55, 33, 1, 67.95),
(55, 64, 1, 125.95),
(55, 65, 1, 165),
(56, 44, 1, 127.45),
(56, 46, 1, 27.95),
(57, 46, 1, 26.55),
(57, 72, 1, 75.1),
(58, 46, 1, 18.85),
(58, 72, 1, 48.2),
(59, 72, 1, 78.6),
(60, 2, 1, 11.7),
(60, 3, 1, 23.4),
(61, 2, 1, 14.85),
(61, 3, 1, 29.65),
(61, 41, 1, 59.3),
(62, 11, 1, 31.15),
(63, 14, 1, 20.3),
(63, 20, 1, 26.2),
(64, 48, 1, 27.7),
(64, 49, 1, 12.85),
(65, 14, 1, 63.4),
(65, 50, 1, 88.15),
(66, 51, 1, 103.45),
(66, 52, 1, 72),
(66, 53, 1, 37.25),
(67, 51, 1, 100.9),
(67, 52, 1, 73),
(67, 53, 1, 34.5),
(68, 8, 1, 12.4),
(68, 54, 1, 19.15),
(69, 55, 1, 34.7),
(69, 57, 1, 43.55),
(70, 56, 1, 34.7),
(70, 58, 1, 46.25),
(71, 59, 1, 34.75),
(72, 35, 1, 21.15),
(72, 60, 1, 29.95),
(72, 61, 1, 12),
(73, 62, 1, 37.95),
(73, 63, 1, 27.35),
(73, 66, 1, 47.1),
(73, 67, 1, 16.4),
(74, 1, 1, 24.85),
(74, 49, 1, 43.9),
(75, 68, 1, 13.55),
(75, 69, 1, 22.55),
(75, 70, 1, 51.5),
(76, 68, 1, 16.35),
(76, 69, 1, 26.6),
(76, 70, 1, 64.8),
(77, 69, 1, 35.1),
(77, 70, 1, 38.65),
(78, 41, 1, 18.95),
(78, 48, 1, 5.65),
(78, 49, 1, 2.95),
(78, 71, 1, 10.4),
(79, 60, 1, 38.15),
(80, 60, 1, 40.05),
(81, 68, 1, 6.6),
(82, 68, 1, 7.5),
(83, 67, 1, 61.65),
(84, 20, 1, 19.15),
(84, 60, 1, 15.35),
(84, 63, 1, 9.9),
(85, 73, 1, 332.8),
(86, 73, 1, 312),
(87, 73, 1, 353.6),
(88, 73, 1, 291.2),
(88, 74, 1, 116.6),
(89, 73, 1, 353.6),
(89, 74, 1, 141.45),
(90, 70, 1, 467.75),
(91, 75, 1, 24.2),
(92, 75, 1, 45.4),
(93, 76, 1, 209.25),
(94, 70, 1, 304.55),
(95, 77, 1, 88.25),
(96, 78, 1, 267.75),
(97, 79, 1, 65.55),
(98, 77, 1, 159.25),
(99, 57, 1, 66.66),
(99, 68, 1, 77.77);

-- --------------------------------------------------------

--
-- Table structure for table `tblsuppliers`
--

CREATE TABLE `tblsuppliers` (
  `SupplierID` int(11) NOT NULL,
  `SupplierName` varchar(50) NOT NULL,
  `SupplierDetails` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblsuppliers`
--

INSERT INTO `tblsuppliers` (`SupplierID`, `SupplierName`, `SupplierDetails`) VALUES
(1, 'Emilus Supermart', ''),
(2, 'SM Supermarket', ''),
(3, 'Malvar\'s Supermarket', 'Malvar\'s');

-- --------------------------------------------------------

--
-- Table structure for table `tbltakehomepaythreshold`
--

CREATE TABLE `tbltakehomepaythreshold` (
  `ThresholdEmployeeID` varchar(30) NOT NULL,
  `ThresholdDate` date NOT NULL,
  `ThresholdPercentage` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbltakehomepaythreshold`
--

INSERT INTO `tbltakehomepaythreshold` (`ThresholdEmployeeID`, `ThresholdDate`, `ThresholdPercentage`) VALUES
(' 1996-0011 ', '2019-01-08', '97%'),
(' 1997-0020 ', '2019-01-08', '96%'),
(' 1998-0025 ', '2019-01-08', '122%'),
(' 1998-0026 ', '2019-01-08', '100%'),
(' 2000-0000 ', '2019-01-08', '104%'),
(' 2002-0039 ', '2019-01-08', '94%'),
(' 2002-0043 ', '2019-01-08', '93%'),
(' 2002-0044 ', '2019-01-08', '114%'),
(' 2002-0045 ', '2019-01-08', '119%'),
(' 2003-0048 ', '2019-01-08', '92%'),
(' 2003-0049 ', '2019-01-08', '121%'),
(' 2006-0062 ', '2019-01-08', '47%'),
(' 2006-0065 ', '2019-01-08', '77%'),
(' 2006-0067 ', '2019-01-08', '99%'),
(' 2006-0068 ', '2019-01-08', '56%'),
(' 2010-0094 ', '2019-01-08', '113%'),
(' 2011-0101 ', '2019-01-08', '111%'),
(' 2013-0114 ', '2019-01-08', '116%'),
(' 2013-0115 ', '2019-01-08', '116%'),
(' 2013-0118 ', '2019-01-08', '121%'),
(' 2013-0121 ', '2019-01-08', '111%'),
(' 2014-0126 ', '2019-01-08', '101%'),
(' 2014-0128 ', '2019-01-08', '101%'),
(' 2014-0131 ', '2019-01-08', '123%'),
(' 2014-0134 ', '2019-01-08', '116%'),
(' 2014-0135 ', '2019-01-08', '113%'),
(' 2014-0137 ', '2019-01-08', '89%'),
(' 2014-0139 ', '2019-01-08', '90%'),
(' 2014-0140 ', '2019-01-08', '81%'),
(' 2015-0141 ', '2019-01-08', '125%'),
(' 2015-0142 ', '2019-01-08', '88%'),
(' 2015-0143 ', '2019-01-08', '111%'),
(' 2015-0146 ', '2019-01-08', '85%'),
(' 2015-0147 ', '2019-01-08', '123%'),
(' 2015-0149 ', '2019-01-08', '70%'),
(' 2015-0150 ', '2019-01-08', '112%'),
(' 2015-0152 ', '2019-01-08', '118%'),
(' 2015-0153 ', '2019-01-08', '107%'),
(' 2015-0156 ', '2019-01-08', '103%'),
(' 2016-0158 ', '2019-01-08', '116%'),
(' 2016-0160 ', '2019-01-08', '118%'),
(' 2016-0164 ', '2019-01-08', '74%'),
(' 2016-0166 ', '2019-01-08', '119%'),
(' 2017-0167 ', '2019-01-08', '102%'),
(' 2017-0168 ', '2019-01-08', '114%'),
(' 2017-0169 ', '2019-01-08', '116%'),
(' 2017-0170 ', '2019-01-08', '119%'),
(' 2017-0171 ', '2019-01-08', '93%'),
(' 2017-0172 ', '2019-01-08', '119%'),
(' 2017-0173 ', '2019-01-08', '119%'),
(' 2017-0174 ', '2019-01-08', '116%'),
(' 2017-0175 ', '2019-01-08', '110%'),
(' 2017-0176 ', '2019-01-08', '113%'),
(' 2017-0177 ', '2019-01-08', '116%'),
(' 2017-0178 ', '2019-01-08', '116%'),
(' 2017-0179 ', '2019-01-08', '117%'),
(' 2017-0180 ', '2019-01-08', '72%'),
(' 2017-0181 ', '2019-01-08', '114%'),
(' 2018-0182 ', '2019-01-08', '112%'),
(' 2018-0183 ', '2019-01-08', '114%'),
(' 2018-0184 ', '2019-01-08', '127%'),
(' 2018-0185 ', '2019-01-08', '118%'),
(' 2018-0186 ', '2019-01-08', '86%'),
(' 2018-0187 ', '2019-01-08', '115%'),
(' 2018-0188 ', '2019-01-08', '120%'),
(' 2018-0189 ', '2019-01-08', '111%'),
(' 2018-0190 ', '2019-01-08', '121%'),
(' 2018-0191 ', '2019-01-08', '120%'),
(' 2018-0192 ', '2019-01-08', '114%'),
(' 2018-0193 ', '2019-01-08', '110%'),
(' 2018-0194 ', '2019-01-08', '110%'),
(' 2018-0195 ', '2019-01-08', '110%'),
(' 2018-0196 ', '2019-01-08', '110%'),
('1991-0004', '2019-01-08', '120%'),
('1993-0006', '2019-01-08', '90%'),
('1996-0010', '2019-01-08', '40%'),
('2018-0197', '2019-01-08', '118%'),
('2018-0198', '2019-01-08', '115%'),
('99999', '2019-01-15', '100');

-- --------------------------------------------------------

--
-- Table structure for table `tbltransactiondetails`
--

CREATE TABLE `tbltransactiondetails` (
  `TransactionDetailID` int(11) NOT NULL,
  `TransactionDetailProductID` int(11) DEFAULT NULL,
  `TransactionDetailUOMID` int(11) DEFAULT NULL,
  `TransactionDetailQuantity` int(11) DEFAULT NULL,
  `TransactionDetailTransactionID` int(11) DEFAULT NULL,
  `TransactionDetailsPricePerUnit` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblunitofmeasurement`
--

CREATE TABLE `tblunitofmeasurement` (
  `UOMID` int(11) NOT NULL,
  `UOMName` varchar(45) DEFAULT NULL,
  `UOMDescription` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblunitofmeasurement`
--

INSERT INTO `tblunitofmeasurement` (`UOMID`, `UOMName`, `UOMDescription`) VALUES
(1, '50g', NULL),
(2, '1/4', NULL),
(3, '1/2', NULL),
(4, '140ml', NULL),
(5, '370ml', NULL),
(6, '300ml', ''),
(7, '390g', ''),
(8, '250ml', ''),
(9, '350ml', ''),
(10, '30ml', ''),
(11, '155g', ''),
(13, '1 pack', ''),
(14, '150g', ''),
(15, '175g', ''),
(16, '260g', ''),
(17, 'Regular', ''),
(18, '27ml', ''),
(19, '20ml', ''),
(20, '200g', ''),
(21, '145g', ''),
(22, '165g', ''),
(23, '5+1', ''),
(24, '2 for 1', ''),
(26, '11 + 1', ''),
(27, '12 + 2', ''),
(28, '6 + 1 ', ''),
(29, '6 + 2 ', ''),
(30, '330g', ''),
(31, '320g', ''),
(32, '220g', ''),
(33, '170g', ''),
(34, '224g', ''),
(35, '80g', ''),
(36, '1.7kg', ''),
(37, '900g', ''),
(38, '1.2kg', ''),
(39, '88g', ''),
(40, '600g', ''),
(41, '1kg', ''),
(42, '450g', ''),
(43, '364g', ''),
(44, '1 pouch - 470ml', ''),
(45, '470ml', ''),
(46, '80ml', ''),
(47, '220ml', ''),
(48, '250g', ''),
(49, '100g', ''),
(50, '210g', ''),
(51, '214g', ''),
(52, '181g', ''),
(53, '1 sachet', ''),
(54, '500ml', ''),
(55, '1 long wings 8 pads', ''),
(56, '1 non-wing 8 pads', ''),
(57, '1 All nights 4 pads', ''),
(58, '1 Sulit pack 12 pads', ''),
(59, '1 Regular 8 pads', ''),
(60, '115g', ''),
(61, '55g', ''),
(62, '135g', ''),
(63, '90g', ''),
(64, '296g', ''),
(65, '504g', ''),
(66, '1 Jumbo', ''),
(67, '60g', ''),
(68, '1 Small', ''),
(69, '1 Medium', ''),
(70, '1 Big', ''),
(71, '500g', ''),
(72, '1 pouch - 220ml', ''),
(73, '5 kg', '5 kilogramss'),
(74, '2kg', ''),
(75, '2 Ply', ''),
(76, '2200G', ''),
(77, '1L', ''),
(78, '510G', ''),
(79, '1892ml', ''),
(80, '70g', '70 gramss');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `UserID` int(11) NOT NULL,
  `UserUsername` varchar(45) NOT NULL,
  `UserPassword` varchar(45) NOT NULL,
  `UserFirstName` varchar(45) NOT NULL,
  `UserLastName` varchar(45) NOT NULL,
  `UserMiddleName` varchar(45) NOT NULL,
  `UserUserTypeID` int(11) DEFAULT NULL,
  `PositionLevel` int(11) DEFAULT NULL,
  `UserEmployeeID` varchar(30) NOT NULL,
  `UserEmployeeSalary` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`UserID`, `UserUsername`, `UserPassword`, `UserFirstName`, `UserLastName`, `UserMiddleName`, `UserUserTypeID`, `PositionLevel`, `UserEmployeeID`, `UserEmployeeSalary`) VALUES
(1, 'IUCSAdmin', 'IUCSAdmin', 'IUCS', 'Admin', '', 1, 0, '2018-0196', 0),
(2, 'Employee1', 'Employee1', 'IUCS ', 'Employee ', '', 2, 0, '2018-0196', 0),
(3, 'Employee2', 'Employee2', 'IUCS', 'Employee 2', '', 2, 0, '2018-0196', 0),
(4, '20180196', 'louiemelo', 'Louie', 'Melo', '', 2, 0, '2018-0196', 13000),
(5, 'Rowell Acuna', '2017-0169', 'Rowell', 'Acuna', '', 2, 0, '2017-0169', 0),
(6, 'Shirley Aurelio', 'shirleyaurelio', 'Shirley', 'Aurelio', '', 2, 1, '2006-0062', 0),
(7, 'Josefa Rizalina Bautista', '2002-0039', 'Josefa Rizalina', 'Bautista', '', 2, 1, '2002-0039', 0),
(8, 'Kevin Borreros', '2017-0170', 'Kevin', 'Borreros', '', 2, 0, '2017-0170', 0),
(9, 'Miraflor Caimen', 'miraflorcaimen', 'Miraflor', 'Caimen', '', 2, 1, '2000-0000', 0),
(10, 'Japhet Camerino', '2018-0184', 'Japhet', 'Camerino', '', 2, 0, '2018-0184', 0),
(11, 'Glenn De Guzman', '2016-0158', 'Glenn', 'De Guzman', '', 2, 0, '2016-0158', 0),
(12, 'Reynalo Dela Pena', '2003-0048', 'Reynaldo', 'Dela Pena', '', 2, 0, '2003-0048', 0),
(13, 'Neslie Ann Dela Cruz', 'iloveGod12', 'Neslie Ann', 'Dela Cruz', '', 2, 0, '2015-0156', 0),
(14, 'Angelette Dominguez', 'angelettedominguez', 'Angelette', 'Dominguez', '', 2, 1, '1996-0010', 0),
(15, 'Armil Fajardo', '2014-0131', 'Armil', 'Fajardo', '', 2, 0, '2014-0131', 0),
(16, 'Camille Audrene Gamayon', 'gamayon818000', 'Camille Audrene', 'Gamayon', '', 2, 0, '2018-0188', 0),
(17, 'Sharon Lasquete', 'sharonlasquete', 'Sharon ', 'Lasquete', '', 2, 1, '1997-0020', 0),
(19, 'Francisco Ogania', '2006-0065', 'Francisco', 'Ogania', '', 2, 0, '2006-0065', 0),
(20, 'Maria Teresa Pasiona', '1998-0025', 'Maria Teresa', 'Pasiona', '', 2, 0, '1998-0025', 0),
(21, 'Mary Ivy Recosana', '2006-0067', 'Mary Ivy', 'Recosana', '', 2, 0, '2006-0067', 0),
(22, 'Alden Ribon', 'aldenribon', 'Alden', 'Ribon', '', 2, 1, '2003-0049', 0),
(23, 'Rose Vidamo', 'rosevidamo', 'Rose', 'Vidamo', '', 2, 1, '1998-0026', 0),
(24, 'Ermelito Villanueva', '2002-0045', 'Ermelito', 'Villanueva', '', 2, 0, '2002-0045', 0),
(25, 'Erwin Yumang', '2006-0068', 'Erwin', 'Yumang', '', 2, 0, '2006-0068', 0),
(26, 'Kristine Abad', '2014-0140', 'Kristine', 'Abad', '', 2, 0, '2014-0140', 0),
(27, 'Wilson Amparo', '2018-0183', 'Wilson', 'Amparo', '', 2, 0, '2018-0183', 0),
(28, 'Lani Arizobal', '2015-0142 \n', 'Lani', 'Arizobal', '', 2, 0, '2015-0142 \n', 0),
(29, 'Erlinda Callueng', '2014-0128', 'Erlinda', 'Callueng', '', 2, 0, '2014-0128', 0),
(30, 'Deserie Closa', '2011-0101', 'Deserie', 'Closa', '', 2, 0, '2011-0101', 0),
(31, 'Ivy Bless De Los Santos', '2002-0043', 'Ivy Bless', 'De Los Santos', '', 2, 0, '2002-0043', 0),
(32, 'Joan Del Mundo', '2017-0174', 'Joan', 'Del Mundo', '', 2, 0, '2017-0174', 0),
(33, 'Sanijoy Forcado', '2010-0094', 'Sanijoy', 'Forcado', '', 2, 0, '2010-0094', 0),
(34, 'Jesebelle Francisco', '2015-0146', 'Jesebelle', 'Francisco', '', 2, 0, '2015-0146', 0),
(35, 'Sarah Jane Habac', '2017-0167', 'Sarah Jane', 'Habac', '', 2, 0, '2017-0167', 0),
(36, 'John Emery Jayona', '2013-0118', 'John Emery', 'Jayona', '', 2, 0, '2013-0118', 0),
(37, 'Jennie Marcial', '2015-0153', 'Jennie', 'Marcial', '', 2, 0, '2015-0153', 0),
(38, 'Maria Lorraine Ople', 'marialorraineople', 'Maria Lorraine', 'Ople', '', 2, 1, '2014-0134', 0),
(39, 'Arlene Ordonez', '2002-0044', 'Arlene', 'Ordonez', '', 2, 0, '2002-0044', 0),
(40, 'Marivic Palomares', '2014-0135', 'Marivic', 'Palomares', '', 2, 0, '2014-0135', 0),
(41, 'Regina Pingol', '1993-0006', 'Regina', 'Pingol', '', 2, 0, '1993-0006', 0),
(42, 'Relyn Recentes', '2014-0137', 'Relyn', 'Recentes', '', 2, 0, '2014-0137', 0),
(43, 'Rannielei Remulla', '2018-0192', 'Rannielei', 'Remulla', '', 2, 0, '2018-0192', 0),
(44, 'Lorie May Imarga', '2013-0121', 'Lorie May', 'Imarga', '', 2, 0, '2013-0121', 0),
(45, 'Annabella Tupas', 'annabellatupas', 'Annabella', 'Tupas', '', 2, 1, '1996-0011', 0),
(46, 'Abigiel Ybanez', '2014-0139', 'Abigiel', 'Ybanez', '', 2, 0, '2014-0139', 0),
(48, 'Jose Bayani Bantok', 'josebayanibantok', 'Jose Bayani', 'Bantok', '', 2, 1, '2014-0126', 0),
(49, 'Joshua Daniel Bautisa', 'joshuadanielbautista', 'Joshua Daniel', 'Bautista', '', 2, 1, '2015-0141', 0),
(50, 'Richelle Bergado', '2015-0143', 'Richelle', 'Bergado', '', 2, 0, '2015-0143', 0),
(51, 'May Calimag', '2018-0194', 'May', 'Calimag', '', 2, 0, '2018-0194', 0),
(53, 'Noriza Castigon', '2017-0172', 'Noriza', 'Castigon', '', 2, 0, '2017-0172', 0),
(54, 'Jenica Celis', '2015-0152', 'Jenica', 'Celis', '', 2, 0, '2015-0152', 0),
(55, 'Phoebe Kates Cortel', '2013-0115', 'Phoebe Kates', 'Cortel', '', 2, 0, '2013-0115', 0),
(56, 'Maria Theresa Dela Torre', '2018-0186', 'Maria Theresa', 'Dela Torre', '', 2, 0, '2018-0186', 0),
(60, 'Jonathan Habac', 'jonathanhabac', 'Jonathan', 'Habac', '', 2, 1, '2016-0166', 0),
(61, 'Maria Katrina Lacay', '2018-0195', 'Maria Katrina', 'Lacay', '', 2, 0, '2018-0195', 0),
(63, 'Emelia Maguddayao', '2015-0147', 'Emelia', 'Maguddayao', '', 2, 0, '2015-0147', 0),
(64, 'Jerard Noel Martinez', '2017-0178', 'Jerard Noel', 'Martinez', '', 2, 0, '2017-0178', 0),
(65, 'Joramie Masalta', '2018-0189', 'Joramie', 'Masalta', '', 2, 0, '2018-0189', 0),
(66, 'Jodi Anne Mendoza', '2017-0173', 'Jodi Anne', 'Mendoza', '', 2, 0, '2017-0173', 0),
(67, 'Israel Monzon', '2016-0160', 'Israel', 'Monzon', '', 2, 0, '2016-0160', 0),
(68, 'Kimberly Ann Monzon', '2017-0179', 'Kimberly Ann', 'Monzon', '', 2, 0, '2017-0179', 0),
(69, 'Myrna Munoz', '2017-0175', 'Myrna', 'Munoz', '', 2, 0, '2017-0175', 0),
(70, 'Joshua Joachim Pagaduan', '2017-0168', 'Joshua Joachim', 'Pagaduan', '', 2, 0, '2017-0168', 0),
(71, 'Jordan Ravanes', '2017-0177', 'Jordan', 'Ravanes', '', 2, 0, '2017-0177', 0),
(72, 'Paula Angelina Reyes', '2015-0150', 'Paula Angeline', 'Reyes', '', 2, 0, '2015-0150', 0),
(73, 'Samantha Eujay Saprid', '2018-0193', 'Samantha Eujay', 'Saprid', '', 2, 0, '2018-0193', 0),
(74, 'Jeralyn Ayuban', '2017-0171', 'Jeralyn', 'Ayuban', '', 2, 0, '2017-0171', 0),
(75, 'Francis Banaga', 'francisbanaga', 'Francis', 'Banaga', '', 2, 1, '2013-0114', 0),
(77, 'Bernardo Llano', '2016-0164', 'Bernardo', 'Llano', '', 2, 0, '2016-0164', 0),
(79, 'Graciela Naranjo', '2018-0190', 'Graciela', 'Naranjo', '', 2, 0, '2018-0190', 0),
(80, 'Kristine Realica', '2015-0149', 'Kristine', 'Realica', '', 2, 0, '2015-0149', 0),
(81, 'Sherry Mae Tiquez', 'march312012', 'Sherry Mae', 'Tiquez', '', 2, 0, '2017-0180', 0),
(82, 'Hilda Trupel', '2017-0176', 'Hilda', 'Trupel', '', 2, 0, '2017-0176', 0),
(83, 'Janelyn Yumang', '1991-0004', 'Janelyn', 'Yumang', '', 2, 0, '1991-0004', 0),
(84, 'Ferdinand Costelo', '2017-0181', 'Ferdinand', 'Costelo', '', 2, 0, '2017-0181', 0),
(85, 'Jaime Dominguez', '2018-0187', 'Jaime', 'Dominguez', '', 2, 0, '2018-0187', 0),
(86, 'Jessica Gustilo', '2018-0182', 'Jessica', 'Gustilo', '', 2, 0, '2018-0182', 0),
(89, 'Mananito Pagusan', '2018-0191', 'Mananito', 'Pagusan', '', 2, 0, '2018-0191', 0),
(90, 'Wendel Paradero', '2018-0198', 'Wendel', 'Paradero', '', 2, 0, '2018-0198', 0),
(91, 'Jimmy Santos', '2018-0185', 'Jimmy', 'Santos', '', 2, 0, '2018-0185', 0),
(92, 'Benjamin Sornet', '2018-0197', 'Benjamin', 'Sornet', '', 2, 0, '2018-0197', 0),
(93, 'TestUserName', 'password', 'TestFirstName', 'TestLastName', '', 2, 0, 'TestEmployeeID', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblusertypes`
--

CREATE TABLE `tblusertypes` (
  `UserTypeID` int(11) NOT NULL,
  `UserTypeName` varchar(45) DEFAULT NULL,
  `UserTypeDetails` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblusertypes`
--

INSERT INTO `tblusertypes` (`UserTypeID`, `UserTypeName`, `UserTypeDetails`) VALUES
(1, 'Admin', 'Admin'),
(2, 'Users', 'Users');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblformtransactions`
--
ALTER TABLE `tblformtransactions`
  ADD PRIMARY KEY (`TransactionID`),
  ADD KEY `TransactionUserID_idx` (`TransactionUserID`);

--
-- Indexes for table `tblproductcategories`
--
ALTER TABLE `tblproductcategories`
  ADD PRIMARY KEY (`ProductCategoryID`);

--
-- Indexes for table `tblproducts`
--
ALTER TABLE `tblproducts`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `ProductCategoryID_idx` (`ProductCategoryID`);

--
-- Indexes for table `tblproductxuom`
--
ALTER TABLE `tblproductxuom`
  ADD PRIMARY KEY (`ProductXUOMProductID`,`ProductXUOMUOMID`),
  ADD KEY `ProductXUOMUOMID_idx` (`ProductXUOMUOMID`);

--
-- Indexes for table `tblsuppliers`
--
ALTER TABLE `tblsuppliers`
  ADD PRIMARY KEY (`SupplierID`);

--
-- Indexes for table `tbltakehomepaythreshold`
--
ALTER TABLE `tbltakehomepaythreshold`
  ADD PRIMARY KEY (`ThresholdEmployeeID`,`ThresholdDate`);

--
-- Indexes for table `tbltransactiondetails`
--
ALTER TABLE `tbltransactiondetails`
  ADD PRIMARY KEY (`TransactionDetailID`),
  ADD KEY `TransactionDetailProductID_idx` (`TransactionDetailProductID`),
  ADD KEY `TransactionDetailUOMID_idx` (`TransactionDetailUOMID`),
  ADD KEY `TransactionDetailTransactionID_idx` (`TransactionDetailTransactionID`);

--
-- Indexes for table `tblunitofmeasurement`
--
ALTER TABLE `tblunitofmeasurement`
  ADD PRIMARY KEY (`UOMID`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `UserUserTypeID_idx` (`UserUserTypeID`);

--
-- Indexes for table `tblusertypes`
--
ALTER TABLE `tblusertypes`
  ADD PRIMARY KEY (`UserTypeID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblformtransactions`
--
ALTER TABLE `tblformtransactions`
  ADD CONSTRAINT `TransactionUserID` FOREIGN KEY (`TransactionUserID`) REFERENCES `tblusers` (`UserID`) ON UPDATE CASCADE;

--
-- Constraints for table `tblproducts`
--
ALTER TABLE `tblproducts`
  ADD CONSTRAINT `ProductCategoryID` FOREIGN KEY (`ProductCategoryID`) REFERENCES `tblproductcategories` (`ProductCategoryID`) ON UPDATE CASCADE;

--
-- Constraints for table `tblproductxuom`
--
ALTER TABLE `tblproductxuom`
  ADD CONSTRAINT `ProductXUOMProductID` FOREIGN KEY (`ProductXUOMProductID`) REFERENCES `tblproducts` (`ProductID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ProductXUOMUOMID` FOREIGN KEY (`ProductXUOMUOMID`) REFERENCES `tblunitofmeasurement` (`UOMID`) ON UPDATE CASCADE;

--
-- Constraints for table `tbltransactiondetails`
--
ALTER TABLE `tbltransactiondetails`
  ADD CONSTRAINT `TransactionDetailProductID` FOREIGN KEY (`TransactionDetailProductID`) REFERENCES `tblproducts` (`ProductID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `TransactionDetailTransactionID` FOREIGN KEY (`TransactionDetailTransactionID`) REFERENCES `tblformtransactions` (`TransactionID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `TransactionDetailUOMID` FOREIGN KEY (`TransactionDetailUOMID`) REFERENCES `tblunitofmeasurement` (`UOMID`) ON UPDATE CASCADE;

--
-- Constraints for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD CONSTRAINT `UserUserTypeID` FOREIGN KEY (`UserUserTypeID`) REFERENCES `tblusertypes` (`UserTypeID`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
