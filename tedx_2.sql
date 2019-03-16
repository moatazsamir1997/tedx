-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2019 at 01:14 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tedx`
--

-- --------------------------------------------------------

--
-- Table structure for table `academicyear`
--

CREATE TABLE `academicyear` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parentId` int(11) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `name`, `parentId`, `createdDate`, `lastUpdatedDate`, `isdeleted`) VALUES
(1, 'end', 1, '2019-03-14 23:55:54', '2019-03-14 23:55:54', 0),
(2, 'Egypt', 1, '2019-03-14 23:55:54', '2019-03-14 23:55:54', 0);

-- --------------------------------------------------------

--
-- Table structure for table `attending`
--

CREATE TABLE `attending` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `eventId` int(11) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

CREATE TABLE `board` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `academicYearId` int(11) NOT NULL,
  `openingDate` date NOT NULL,
  `closingDate` date NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `boardsdepartments`
--

CREATE TABLE `boardsdepartments` (
  `id` int(11) NOT NULL,
  `departmentId` int(11) NOT NULL,
  `boardId` int(11) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contactnumber`
--

CREATE TABLE `contactnumber` (
  `id` int(11) NOT NULL,
  `contactNumber` varchar(255) NOT NULL,
  `contactTypeId` int(11) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contacttype`
--

CREATE TABLE `contacttype` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `conversionValue` int(255) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`id`, `name`, `conversionValue`, `createdDate`, `lastUpdatedDate`, `isDeleted`) VALUES
(1, 'egp', 18, '2019-03-05 20:50:08', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `datepurchase`
--

CREATE TABLE `datepurchase` (
  `id` int(11) NOT NULL,
  `dateTime` date NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `jobDescribtion` text NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `date` date NOT NULL,
  `eventStart` time NOT NULL,
  `eventEnd` time NOT NULL,
  `addressId` int(11) NOT NULL,
  `academicYearId` int(11) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(1) NOT NULL,
  `name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

CREATE TABLE `interests` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `physicalName` varchar(255) NOT NULL,
  `friendlyName` varchar(255) NOT NULL,
  `htmlCode` varchar(255) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manufacture`
--

CREATE TABLE `manufacture` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `addressId` int(11) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturecontactinfo`
--

CREATE TABLE `manufacturecontactinfo` (
  `id` int(11) NOT NULL,
  `manufactureId` int(11) NOT NULL,
  `contactNumberId` int(11) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethod`
--

CREATE TABLE `paymentmethod` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethodoptions`
--

CREATE TABLE `paymentmethodoptions` (
  `id` int(11) NOT NULL,
  `paymentMethodId` int(11) NOT NULL,
  `paymentOptionId` int(11) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethodoptionvalue`
--

CREATE TABLE `paymentmethodoptionvalue` (
  `id` int(11) NOT NULL,
  `paymentMethodOptionId` int(11) NOT NULL,
  `purchaseId` int(11) NOT NULL,
  `value` text NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paymentoptions`
--

CREATE TABLE `paymentoptions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dataType` varchar(20) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `currencyId` int(11) NOT NULL DEFAULT '1',
  `productTypeId` int(11) NOT NULL DEFAULT '0',
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `quantity`, `currencyId`, `productTypeId`, `createdDate`, `lastUpdatedDate`, `isDeleted`) VALUES
(1, 'ss', 50, 100, 1, 44, '2019-03-09 11:57:00', '2019-03-09 11:57:00', 0),
(2, 'mohamed', 112, 2323, 1, 47, '2019-03-09 11:57:53', '2019-03-09 11:57:53', 0),
(3, 'mohamed', 12, 100, 1, 44, '2019-03-09 11:58:47', '2019-03-09 11:58:47', 0),
(4, 'mohamed', 12, 100, 1, 44, '2019-03-09 11:59:01', '2019-03-09 11:59:01', 0),
(5, 'mohamed', 12, 100, 1, 44, '2019-03-09 11:59:38', '2019-03-09 11:59:38', 0),
(6, 'mohamed', 12, 1, 1, 44, '2019-03-09 11:59:49', '2019-03-09 11:59:49', 0),
(7, 'mohamed', 12, 1, 1, 44, '2019-03-09 12:01:35', '2019-03-09 12:01:35', 0),
(8, 'mohamed', 12, 1, 1, 44, '2019-03-09 12:01:55', '2019-03-09 12:01:55', 0),
(9, 'mohamed', 112312, 100, 1, 45, '2019-03-09 12:04:14', '2019-03-09 12:04:14', 0),
(10, 'mohamed', 112312, 100, 1, 45, '2019-03-09 12:04:56', '2019-03-09 12:04:56', 0),
(11, 'mohamed', 11212, 100, 1, 42, '2019-03-10 20:58:25', '2019-03-10 20:58:25', 0),
(12, 'mytry', 3, 100, 1, 42, '2019-03-10 20:59:34', '2019-03-10 20:59:34', 0),
(13, 'tedxProduct', 22, 22, 1, 71, '2019-03-10 21:06:38', '2019-03-10 21:06:38', 0),
(14, '', 0, 0, 1, 42, '2019-03-10 22:58:52', '2019-03-10 22:58:52', 1),
(15, 'mohamed', 33, 100, 1, 42, '2019-03-10 23:02:29', '2019-03-10 23:02:29', 0),
(16, 'mohamed', 33, 100, 1, 42, '2019-03-10 23:05:50', '2019-03-10 23:05:50', 0),
(17, 'mohamed', 66, 12, 1, 42, '2019-03-11 00:32:44', '2019-03-11 00:32:44', 0),
(18, 'mohamed', 2, 100, 1, 42, '2019-03-11 01:00:33', '2019-03-11 01:00:33', 0),
(19, 'mohamed', 22, 100, 1, 42, '2019-03-11 02:05:55', '2019-03-11 02:05:55', 0),
(20, 'mohamed', 22, 100, 1, 42, '2019-03-11 02:06:17', '2019-03-11 02:06:17', 0),
(21, 'mohamed', 22, 100, 1, 42, '2019-03-11 02:08:08', '2019-03-11 02:08:08', 0),
(22, 'mohamed', 2, 100, 1, 42, '2019-03-11 02:09:11', '2019-03-11 02:09:11', 0),
(23, 'mohamed', 2, 100, 1, 42, '2019-03-11 02:09:54', '2019-03-11 02:09:54', 0),
(24, 'mohamed', 2, 100, 1, 42, '2019-03-11 02:13:37', '2019-03-11 02:13:37', 0),
(25, 'mohamed', 1, 100, 1, 42, '2019-03-11 02:23:37', '2019-03-11 02:23:37', 0),
(26, 'mohamed', 1, 100, 1, 42, '2019-03-11 02:25:20', '2019-03-11 02:25:20', 0),
(27, 'mohamed', 0, 0, 1, 42, '2019-03-11 12:27:24', '2019-03-11 12:27:24', 0),
(28, 'mohamed', 2, 100, 1, 42, '2019-03-12 23:00:30', '2019-03-12 23:00:30', 0),
(29, 'mohamed', 12, 12, 1, 42, '2019-03-12 23:00:43', '2019-03-12 23:00:43', 0),
(30, 'mohamed', 12, 100, 1, 42, '2019-03-12 23:04:00', '2019-03-12 23:04:00', 0),
(31, 'mohamed', 12, 100, 1, 42, '2019-03-12 23:10:45', '2019-03-12 23:10:45', 0),
(32, 'mohamed', 12, 100, 1, 42, '2019-03-12 23:10:59', '2019-03-12 23:10:59', 0),
(33, '', 0, 0, 1, 42, '2019-03-14 11:42:57', '2019-03-14 11:42:57', 0);

-- --------------------------------------------------------

--
-- Table structure for table `productoptions`
--

CREATE TABLE `productoptions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dataType` varchar(255) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productoptionsvalue`
--

CREATE TABLE `productoptionsvalue` (
  `id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL,
  `productSelectedOptionsId` int(11) NOT NULL,
  `purchaseId` int(11) NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productselectedoptions`
--

CREATE TABLE `productselectedoptions` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `optionsId` int(11) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE `producttype` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parentId` int(11) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`id`, `name`, `parentId`, `createdDate`, `lastUpdatedDate`, `isDeleted`) VALUES
(42, 'again', 0, '2019-03-05 21:31:09', '0000-00-00 00:00:00', 0),
(43, 'againme', 0, '2019-03-05 21:32:58', '0000-00-00 00:00:00', 0),
(44, 'tickets', 0, '2019-03-05 21:55:45', '0000-00-00 00:00:00', 0),
(45, 'ticket', 0, '2019-03-05 21:57:49', '0000-00-00 00:00:00', 0),
(46, 'tita', 0, '2019-03-07 19:58:21', '0000-00-00 00:00:00', 0),
(47, 'moataz', 0, '2019-03-07 19:58:45', '0000-00-00 00:00:00', 0),
(48, 'moataz', 0, '2019-03-08 16:10:33', '0000-00-00 00:00:00', 0),
(49, 'bassel', 0, '2019-03-08 16:11:28', '0000-00-00 00:00:00', 0),
(50, 'bassel', 0, '2019-03-08 16:12:25', '0000-00-00 00:00:00', 0),
(51, 'bassel', 0, '2019-03-08 16:12:37', '0000-00-00 00:00:00', 0),
(52, 'xyz', 0, '2019-03-08 16:14:15', '0000-00-00 00:00:00', 0),
(53, 'cc', 0, '2019-03-08 16:26:37', '0000-00-00 00:00:00', 0),
(54, 'dd', 0, '2019-03-08 16:28:42', '0000-00-00 00:00:00', 0),
(55, 'tickets', 0, '2019-03-08 16:29:31', '0000-00-00 00:00:00', 0),
(56, '', 0, '2019-03-09 11:50:25', '0000-00-00 00:00:00', 0),
(57, 'aly', 0, '2019-03-09 11:56:48', '0000-00-00 00:00:00', 0),
(58, 'aly', 0, '2019-03-09 11:57:59', '0000-00-00 00:00:00', 0),
(59, 'aly', 0, '2019-03-09 11:58:40', '0000-00-00 00:00:00', 0),
(60, 'aly', 0, '2019-03-09 11:59:42', '0000-00-00 00:00:00', 0),
(61, 'cups', 0, '2019-03-09 12:04:05', '0000-00-00 00:00:00', 0),
(62, 'mohamed', 0, '2019-03-09 12:07:33', '0000-00-00 00:00:00', 0),
(63, 'cups', 0, '2019-03-09 12:11:47', '0000-00-00 00:00:00', 0),
(64, 'mohamed', 0, '2019-03-09 12:14:06', '0000-00-00 00:00:00', 0),
(65, 'tickets', 0, '2019-03-09 12:15:19', '0000-00-00 00:00:00', 0),
(66, 'tickets', 0, '2019-03-09 12:16:48', '0000-00-00 00:00:00', 0),
(67, 'mytry', 0, '2019-03-10 20:54:29', '0000-00-00 00:00:00', 0),
(68, 'tickets', 0, '2019-03-10 20:57:50', '0000-00-00 00:00:00', 0),
(69, 'tickets', 0, '2019-03-10 20:58:17', '0000-00-00 00:00:00', 0),
(70, 'mytishirt', 0, '2019-03-10 20:59:24', '0000-00-00 00:00:00', 0),
(71, 'tedx', 0, '2019-03-10 21:06:24', '0000-00-00 00:00:00', 0),
(72, 'tedXtishirts', 0, '2019-03-10 21:19:35', '0000-00-00 00:00:00', 0),
(73, 'bassel', 0, '2019-03-10 21:34:55', '0000-00-00 00:00:00', 0),
(74, 'bassel', 0, '2019-03-10 21:38:22', '0000-00-00 00:00:00', 0),
(75, 'bassel', 0, '2019-03-10 21:38:56', '0000-00-00 00:00:00', 0),
(76, 'bassel', 0, '2019-03-10 21:39:05', '0000-00-00 00:00:00', 0),
(77, 'bassel', 0, '2019-03-10 21:39:29', '0000-00-00 00:00:00', 0),
(78, 'bassel', 0, '2019-03-10 21:39:31', '0000-00-00 00:00:00', 0),
(79, 'bassel', 0, '2019-03-10 21:39:53', '0000-00-00 00:00:00', 0),
(80, 'bassel', 0, '2019-03-10 21:40:07', '0000-00-00 00:00:00', 0),
(81, 'bassel', 0, '2019-03-10 21:40:50', '0000-00-00 00:00:00', 0),
(82, 'bassel', 0, '2019-03-10 21:41:30', '0000-00-00 00:00:00', 0),
(83, 'bassel', 0, '2019-03-10 21:42:14', '0000-00-00 00:00:00', 0),
(84, 'bassel', 0, '2019-03-10 21:42:22', '0000-00-00 00:00:00', 0),
(85, 'bassel', 0, '2019-03-10 21:43:05', '0000-00-00 00:00:00', 0),
(86, 'bassel', 0, '2019-03-10 21:43:13', '0000-00-00 00:00:00', 0),
(87, 'bassel', 0, '2019-03-10 21:44:10', '0000-00-00 00:00:00', 0),
(88, 'bassel', 0, '2019-03-10 21:46:23', '0000-00-00 00:00:00', 0),
(89, 'bassel', 0, '2019-03-10 21:46:46', '0000-00-00 00:00:00', 0),
(90, 'bassel', 0, '2019-03-10 21:46:53', '0000-00-00 00:00:00', 0),
(91, 'bassel', 0, '2019-03-10 21:56:42', '0000-00-00 00:00:00', 0),
(92, 'tickets', 0, '2019-03-10 22:06:05', '0000-00-00 00:00:00', 0),
(93, 'tickets', 0, '2019-03-10 22:17:12', '0000-00-00 00:00:00', 0),
(94, 'tickets', 0, '2019-03-10 22:18:04', '0000-00-00 00:00:00', 0),
(95, 'tickets', 0, '2019-03-10 22:47:48', '0000-00-00 00:00:00', 0),
(96, 'tickets', 0, '2019-03-10 22:59:03', '0000-00-00 00:00:00', 0),
(97, 'tickets', 0, '2019-03-10 23:02:24', '0000-00-00 00:00:00', 0),
(98, 'tickets', 0, '2019-03-11 02:09:05', '0000-00-00 00:00:00', 0),
(99, 'tickets', 0, '2019-03-11 12:16:13', '0000-00-00 00:00:00', 0),
(100, 'tickets', 0, '2019-03-11 12:17:23', '0000-00-00 00:00:00', 0),
(101, 'tickets', 0, '2019-03-11 12:17:31', '0000-00-00 00:00:00', 0),
(102, 'zzz', 0, '2019-03-11 12:21:25', '0000-00-00 00:00:00', 0),
(103, 'zzz', 0, '2019-03-11 12:21:50', '0000-00-00 00:00:00', 0),
(104, 'zzz', 0, '2019-03-11 12:22:12', '0000-00-00 00:00:00', 0),
(105, 'zzz', 0, '2019-03-11 12:22:19', '0000-00-00 00:00:00', 0),
(106, 'cups', 0, '2019-03-11 12:24:00', '0000-00-00 00:00:00', 0),
(107, '3', 0, '2019-03-11 12:27:10', '0000-00-00 00:00:00', 0),
(108, 'tickets', 0, '2019-03-11 12:27:21', '0000-00-00 00:00:00', 0),
(109, 'tickets', 0, '2019-03-12 22:56:20', '0000-00-00 00:00:00', 0),
(110, 'tickets', 0, '2019-03-12 22:57:03', '0000-00-00 00:00:00', 0),
(111, 'tickets', 0, '2019-03-12 23:00:36', '0000-00-00 00:00:00', 0),
(112, 'tickets', 0, '2019-03-12 23:03:53', '0000-00-00 00:00:00', 0),
(113, 'tickets', 0, '2019-03-12 23:09:28', '0000-00-00 00:00:00', 0),
(114, 'tickets', 0, '2019-03-12 23:09:33', '0000-00-00 00:00:00', 0),
(115, 'tickets', 0, '2019-03-12 23:10:52', '0000-00-00 00:00:00', 0),
(116, 'tickets', 0, '2019-03-12 23:11:22', '0000-00-00 00:00:00', 0),
(117, 'mohamed', 0, '2019-03-14 11:32:43', '0000-00-00 00:00:00', 0),
(118, 'tickets', 0, '2019-03-14 11:42:46', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `datePurchaseId` int(11) NOT NULL,
  `manufactureId` int(11) NOT NULL,
  `deliveryPersonId` int(11) NOT NULL,
  `PaymentMethodId` int(11) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchasedetails`
--

CREATE TABLE `purchasedetails` (
  `id` int(11) NOT NULL,
  `purchaseId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE `registeration` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `academicYearId` int(11) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registerationdetails`
--

CREATE TABLE `registerationdetails` (
  `id` int(11) NOT NULL,
  `registerationId` int(11) NOT NULL,
  `boardId` int(11) NOT NULL,
  `departmentId` int(11) NOT NULL,
  `statusId` int(11) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `userTypeId` int(11) NOT NULL DEFAULT '1',
  `userAddressId` int(11) NOT NULL,
  `genderId` int(11) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usercontactinfo`
--

CREATE TABLE `usercontactinfo` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `contactNumberId` int(11) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userinterests`
--

CREATE TABLE `userinterests` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `interestsId` int(11) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `parentId` int(11) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`id`, `name`, `parentId`, `createdDate`, `lastUpdatedDate`, `isdeleted`) VALUES
(1, 'mohamed', 1, '2019-03-15 00:56:28', '2019-03-15 00:56:28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usertypelinks`
--

CREATE TABLE `usertypelinks` (
  `id` int(11) NOT NULL,
  `userTypeId` int(11) NOT NULL,
  `linkId` int(11) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academicyear`
--
ALTER TABLE `academicyear`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parentId` (`parentId`);

--
-- Indexes for table `attending`
--
ALTER TABLE `attending`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`,`eventId`),
  ADD KEY `eventId` (`eventId`);

--
-- Indexes for table `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`id`),
  ADD KEY `academicYearId` (`academicYearId`);

--
-- Indexes for table `boardsdepartments`
--
ALTER TABLE `boardsdepartments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departmentId` (`departmentId`),
  ADD KEY `boardId` (`boardId`);

--
-- Indexes for table `contactnumber`
--
ALTER TABLE `contactnumber`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phoneTypeId` (`contactTypeId`);

--
-- Indexes for table `contacttype`
--
ALTER TABLE `contacttype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datepurchase`
--
ALTER TABLE `datepurchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addressId` (`addressId`),
  ADD KEY `academicYearId` (`academicYearId`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interests`
--
ALTER TABLE `interests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacture`
--
ALTER TABLE `manufacture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addressId` (`addressId`);

--
-- Indexes for table `manufacturecontactinfo`
--
ALTER TABLE `manufacturecontactinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contactNumberId` (`contactNumberId`),
  ADD KEY `manufactureId` (`manufactureId`);

--
-- Indexes for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymentmethodoptions`
--
ALTER TABLE `paymentmethodoptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paymentMethodId` (`paymentMethodId`),
  ADD KEY `paymentOptionId` (`paymentOptionId`);

--
-- Indexes for table `paymentmethodoptionvalue`
--
ALTER TABLE `paymentmethodoptionvalue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchaseId` (`purchaseId`),
  ADD KEY `paymentMethodOptionId` (`paymentMethodOptionId`);

--
-- Indexes for table `paymentoptions`
--
ALTER TABLE `paymentoptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `currencyId` (`currencyId`),
  ADD KEY `productTypeId` (`productTypeId`);

--
-- Indexes for table `productoptions`
--
ALTER TABLE `productoptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productoptionsvalue`
--
ALTER TABLE `productoptionsvalue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productSelectedOptionsId` (`productSelectedOptionsId`),
  ADD KEY `purchaseId` (`purchaseId`);

--
-- Indexes for table `productselectedoptions`
--
ALTER TABLE `productselectedoptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productId` (`productId`),
  ADD KEY `optionsId` (`optionsId`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `datePurchaseId` (`datePurchaseId`),
  ADD KEY `PaymentMethodId` (`PaymentMethodId`),
  ADD KEY `manufactureId` (`manufactureId`),
  ADD KEY `deliveryPersonId` (`deliveryPersonId`);

--
-- Indexes for table `purchasedetails`
--
ALTER TABLE `purchasedetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchaseId` (`purchaseId`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `registeration`
--
ALTER TABLE `registeration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `academicYearId` (`academicYearId`);

--
-- Indexes for table `registerationdetails`
--
ALTER TABLE `registerationdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registerationId` (`registerationId`),
  ADD KEY `boardId` (`boardId`),
  ADD KEY `departmentId` (`departmentId`),
  ADD KEY `statusId` (`statusId`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userTypeId` (`userTypeId`),
  ADD KEY `userAddressId` (`userAddressId`),
  ADD KEY `id` (`id`),
  ADD KEY `genderId` (`genderId`);

--
-- Indexes for table `usercontactinfo`
--
ALTER TABLE `usercontactinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `contactNumberId` (`contactNumberId`);

--
-- Indexes for table `userinterests`
--
ALTER TABLE `userinterests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `interestsId` (`interestsId`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parentId` (`parentId`);

--
-- Indexes for table `usertypelinks`
--
ALTER TABLE `usertypelinks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userTypeId` (`userTypeId`),
  ADD KEY `linkId` (`linkId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academicyear`
--
ALTER TABLE `academicyear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attending`
--
ALTER TABLE `attending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `board`
--
ALTER TABLE `board`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `boardsdepartments`
--
ALTER TABLE `boardsdepartments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactnumber`
--
ALTER TABLE `contactnumber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacttype`
--
ALTER TABLE `contacttype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `datepurchase`
--
ALTER TABLE `datepurchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `interests`
--
ALTER TABLE `interests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manufacture`
--
ALTER TABLE `manufacture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manufacturecontactinfo`
--
ALTER TABLE `manufacturecontactinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paymentmethodoptions`
--
ALTER TABLE `paymentmethodoptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paymentmethodoptionvalue`
--
ALTER TABLE `paymentmethodoptionvalue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paymentoptions`
--
ALTER TABLE `paymentoptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `productoptions`
--
ALTER TABLE `productoptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productoptionsvalue`
--
ALTER TABLE `productoptionsvalue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productselectedoptions`
--
ALTER TABLE `productselectedoptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producttype`
--
ALTER TABLE `producttype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchasedetails`
--
ALTER TABLE `purchasedetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registeration`
--
ALTER TABLE `registeration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registerationdetails`
--
ALTER TABLE `registerationdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usercontactinfo`
--
ALTER TABLE `usercontactinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userinterests`
--
ALTER TABLE `userinterests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usertypelinks`
--
ALTER TABLE `usertypelinks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attending`
--
ALTER TABLE `attending`
  ADD CONSTRAINT `attending_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `attending_ibfk_2` FOREIGN KEY (`eventId`) REFERENCES `event` (`id`);

--
-- Constraints for table `board`
--
ALTER TABLE `board`
  ADD CONSTRAINT `board_ibfk_1` FOREIGN KEY (`academicYearId`) REFERENCES `academicyear` (`id`);

--
-- Constraints for table `boardsdepartments`
--
ALTER TABLE `boardsdepartments`
  ADD CONSTRAINT `boardsdepartments_ibfk_1` FOREIGN KEY (`boardId`) REFERENCES `board` (`id`),
  ADD CONSTRAINT `boardsdepartments_ibfk_2` FOREIGN KEY (`departmentId`) REFERENCES `department` (`id`);

--
-- Constraints for table `contactnumber`
--
ALTER TABLE `contactnumber`
  ADD CONSTRAINT `contactnumber_ibfk_1` FOREIGN KEY (`contactTypeId`) REFERENCES `contacttype` (`id`);

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`addressId`) REFERENCES `address` (`id`),
  ADD CONSTRAINT `event_ibfk_2` FOREIGN KEY (`academicYearId`) REFERENCES `academicyear` (`id`);

--
-- Constraints for table `manufacture`
--
ALTER TABLE `manufacture`
  ADD CONSTRAINT `manufacture_ibfk_2` FOREIGN KEY (`addressId`) REFERENCES `address` (`id`);

--
-- Constraints for table `manufacturecontactinfo`
--
ALTER TABLE `manufacturecontactinfo`
  ADD CONSTRAINT `manufacturecontactinfo_ibfk_1` FOREIGN KEY (`manufactureId`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `manufacturecontactinfo_ibfk_2` FOREIGN KEY (`contactNumberId`) REFERENCES `contactnumber` (`id`),
  ADD CONSTRAINT `manufacturecontactinfo_ibfk_3` FOREIGN KEY (`manufactureId`) REFERENCES `manufacture` (`id`);

--
-- Constraints for table `paymentmethodoptions`
--
ALTER TABLE `paymentmethodoptions`
  ADD CONSTRAINT `paymentmethodoptions_ibfk_1` FOREIGN KEY (`paymentMethodId`) REFERENCES `paymentmethod` (`id`),
  ADD CONSTRAINT `paymentmethodoptions_ibfk_2` FOREIGN KEY (`paymentOptionId`) REFERENCES `paymentoptions` (`id`);

--
-- Constraints for table `paymentmethodoptionvalue`
--
ALTER TABLE `paymentmethodoptionvalue`
  ADD CONSTRAINT `paymentmethodoptionvalue_ibfk_1` FOREIGN KEY (`purchaseId`) REFERENCES `purchase` (`id`),
  ADD CONSTRAINT `paymentmethodoptionvalue_ibfk_2` FOREIGN KEY (`paymentMethodOptionId`) REFERENCES `paymentmethodoptions` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`currencyId`) REFERENCES `currency` (`id`),
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`productTypeId`) REFERENCES `producttype` (`id`);

--
-- Constraints for table `productoptionsvalue`
--
ALTER TABLE `productoptionsvalue`
  ADD CONSTRAINT `productoptionsvalue_ibfk_1` FOREIGN KEY (`productSelectedOptionsId`) REFERENCES `productselectedoptions` (`id`),
  ADD CONSTRAINT `productoptionsvalue_ibfk_2` FOREIGN KEY (`purchaseId`) REFERENCES `purchase` (`id`);

--
-- Constraints for table `productselectedoptions`
--
ALTER TABLE `productselectedoptions`
  ADD CONSTRAINT `productselectedoptions_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `productselectedoptions_ibfk_2` FOREIGN KEY (`optionsId`) REFERENCES `productoptions` (`id`);

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `purchase_ibfk_2` FOREIGN KEY (`datePurchaseId`) REFERENCES `datepurchase` (`id`),
  ADD CONSTRAINT `purchase_ibfk_3` FOREIGN KEY (`PaymentMethodId`) REFERENCES `paymentmethod` (`id`),
  ADD CONSTRAINT `purchase_ibfk_4` FOREIGN KEY (`manufactureId`) REFERENCES `manufacture` (`id`),
  ADD CONSTRAINT `purchase_ibfk_5` FOREIGN KEY (`deliveryPersonId`) REFERENCES `user` (`id`);

--
-- Constraints for table `purchasedetails`
--
ALTER TABLE `purchasedetails`
  ADD CONSTRAINT `purchasedetails_ibfk_1` FOREIGN KEY (`purchaseId`) REFERENCES `purchase` (`id`),
  ADD CONSTRAINT `purchasedetails_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `product` (`id`);

--
-- Constraints for table `registeration`
--
ALTER TABLE `registeration`
  ADD CONSTRAINT `registeration_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `registeration_ibfk_2` FOREIGN KEY (`academicYearId`) REFERENCES `academicyear` (`id`);

--
-- Constraints for table `registerationdetails`
--
ALTER TABLE `registerationdetails`
  ADD CONSTRAINT `registerationdetails_ibfk_1` FOREIGN KEY (`registerationId`) REFERENCES `registeration` (`id`),
  ADD CONSTRAINT `registerationdetails_ibfk_2` FOREIGN KEY (`boardId`) REFERENCES `board` (`id`),
  ADD CONSTRAINT `registerationdetails_ibfk_3` FOREIGN KEY (`departmentId`) REFERENCES `department` (`id`),
  ADD CONSTRAINT `registerationdetails_ibfk_4` FOREIGN KEY (`statusId`) REFERENCES `status` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`userAddressId`) REFERENCES `address` (`id`),
  ADD CONSTRAINT `user_ibfk_4` FOREIGN KEY (`genderId`) REFERENCES `gender` (`id`),
  ADD CONSTRAINT `user_ibfk_6` FOREIGN KEY (`userTypeId`) REFERENCES `usertype` (`id`);

--
-- Constraints for table `usercontactinfo`
--
ALTER TABLE `usercontactinfo`
  ADD CONSTRAINT `usercontactinfo_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `usercontactinfo_ibfk_2` FOREIGN KEY (`contactNumberId`) REFERENCES `contactnumber` (`id`);

--
-- Constraints for table `userinterests`
--
ALTER TABLE `userinterests`
  ADD CONSTRAINT `userinterests_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `userinterests_ibfk_2` FOREIGN KEY (`interestsId`) REFERENCES `interests` (`id`);

--
-- Constraints for table `usertypelinks`
--
ALTER TABLE `usertypelinks`
  ADD CONSTRAINT `usertypelinks_ibfk_2` FOREIGN KEY (`linkId`) REFERENCES `links` (`id`),
  ADD CONSTRAINT `usertypelinks_ibfk_3` FOREIGN KEY (`userTypeId`) REFERENCES `usertype` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
