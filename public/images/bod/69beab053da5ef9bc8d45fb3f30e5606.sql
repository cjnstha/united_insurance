-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2020 at 03:53 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swc8`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Capacity development', '2017-07-25 01:34:40', '2017-07-25 01:34:40'),
(2, 'Planning', '2017-07-25 01:35:48', '2017-07-25 01:35:48'),
(4, 'Meeting/workshop', '2017-07-25 01:35:58', '2017-07-25 01:35:58'),
(5, 'Research/study', '2017-07-25 01:36:17', '2017-07-25 01:36:17'),
(6, 'Dialogue/consultation', '2017-07-25 01:36:27', '2017-07-25 01:36:27'),
(7, 'Awareness', '2017-07-25 01:36:38', '2017-07-25 01:36:38'),
(8, 'Seed-grant', '2017-07-25 01:36:49', '2017-07-25 01:36:49'),
(9, 'Trust Building', '2017-07-25 01:37:02', '2017-07-25 01:37:02'),
(10, 'Outreach', '2017-07-25 01:37:13', '2017-07-25 01:37:13'),
(11, 'Media', '2017-07-25 01:37:24', '2017-07-25 01:37:24'),
(12, 'Mediation', '2017-07-25 01:37:37', '2017-07-25 01:37:37'),
(13, 'Staff orientation', '2017-07-25 01:37:48', '2017-07-25 01:37:48'),
(14, 'Legal aid', '2017-07-25 01:37:58', '2017-07-25 01:37:58'),
(15, 'test', '2019-05-31 04:01:35', '2019-05-31 04:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `approval_docs`
--

CREATE TABLE `approval_docs` (
  `id` int(11) NOT NULL,
  `approval_detail_id` int(11) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `original_document` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approval_docs`
--

INSERT INTO `approval_docs` (`id`, `approval_detail_id`, `document`, `original_document`, `created_at`, `updated_at`) VALUES
(27, 10, 'thenovagroup-Server-Info1097663190.docx', 'thenovagroup-Server-Info.docx', '2018-08-21 03:54:19', '2018-08-21 03:54:19');

-- --------------------------------------------------------

--
-- Table structure for table `assurance_letter`
--

CREATE TABLE `assurance_letter` (
  `id` int(11) NOT NULL,
  `approval_detail_id` int(11) NOT NULL,
  `document` varchar(225) NOT NULL,
  `orignal_document` varchar(225) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assurance_letter`
--

INSERT INTO `assurance_letter` (`id`, `approval_detail_id`, `document`, `orignal_document`, `updated_at`, `created_at`) VALUES
(4, 10, 'widbsxbashbxha1514472326.docx', 'widbsxbashbxha.docx', '2018-08-21 03:54:20', '2018-08-21 03:54:20');

-- --------------------------------------------------------

--
-- Table structure for table `checklistmgmt`
--

CREATE TABLE `checklistmgmt` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checklistmgmt`
--

INSERT INTO `checklistmgmt` (`id`, `title`, `description`, `updated_at`, `created_at`) VALUES
(3, 'Tax Clearance', 'Tax Clearance', '2018-06-28 06:21:16', '2018-06-11 11:14:43'),
(4, 'Aid Management Platform', 'Aid Management Platform', '2018-06-11 11:15:24', '2018-06-11 11:15:24'),
(5, 'VDC Agreement Paper', 'VDC Agreement Paper', '2018-06-11 11:16:04', '2018-06-11 11:16:04'),
(6, 'Project Agreement', 'Project Agreement', '2018-06-11 11:16:22', '2018-06-11 11:16:22'),
(7, 'English/Nepali Summary Sheet', 'English/Nepali Summary Sheet', '2018-06-11 11:16:52', '2018-06-11 11:16:52'),
(8, 'Audit Report', 'sdcs', '2018-06-11 11:17:31', '2018-06-11 11:17:31'),
(9, 'General Agreement', 'sdcj', '2018-06-11 11:18:06', '2018-06-11 11:18:06'),
(10, 'PAN Registration', 'PAN Registration', '2018-06-11 11:18:21', '2018-06-11 11:18:21'),
(11, 'qwqwqwqw', 'dfgdfg', '2019-06-03 11:55:09', '2019-06-03 11:54:45');

-- --------------------------------------------------------

--
-- Table structure for table `country_director`
--

CREATE TABLE `country_director` (
  `id` int(11) NOT NULL,
  `general_agreement_id` varchar(225) NOT NULL,
  `cd_name` varchar(225) DEFAULT NULL,
  `cd_nation` varchar(255) DEFAULT NULL,
  `cd_citizenship` varchar(255) DEFAULT NULL,
  `cd_citizenship_doc` varchar(255) DEFAULT NULL,
  `cd_passport` varchar(255) DEFAULT NULL,
  `cd_passport_doc` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country_director`
--

INSERT INTO `country_director` (`id`, `general_agreement_id`, `cd_name`, `cd_nation`, `cd_citizenship`, `cd_citizenship_doc`, `cd_passport`, `cd_passport_doc`, `created_at`, `updated_at`) VALUES
(5, '5', 'Rumus Bajracharya', 'Åland Islands', '1060/00913', 'cd_citizenship_doc-1563433733Document.docx', '23456564345', 'cd_passport_doc-1563433733Document.docx', '2019-07-18 01:23:53', '2019-07-18 01:23:53'),
(6, '6', 'my name', 'Afghanistan', 'cd_citizenship', '', 'cd_passport', '', '2019-09-16 01:06:12', '2019-09-16 01:06:12'),
(7, '7', 'my name', 'Afghanistan', 'cd_citizenship', '', 'cd_passport', '', '2019-09-16 02:19:33', '2019-09-16 02:19:33'),
(8, '8', 'my name', 'Afghanistan', 'cd_citizenship', '', 'cd_passport', '', '2019-09-16 02:19:42', '2019-09-16 02:19:42'),
(9, '9', 'cd_name', 'Afghanistan', 'cd_citizenship', '', 'cd_passport', '', '2019-09-16 02:26:07', '2019-09-16 02:26:07'),
(10, '10', 'cd_name', 'Afghanistan', 'cd_citizenship', '', 'cd_passport', '', '2019-09-16 23:32:53', '2019-09-16 23:32:53'),
(11, '11', NULL, 'Algeria', NULL, '', NULL, '', '2020-03-16 23:20:20', '2020-03-16 23:20:20'),
(12, '12', NULL, 'Afghanistan', NULL, '', NULL, '', '2020-03-17 00:50:43', '2020-03-17 00:50:43'),
(13, '13', NULL, 'Afghanistan', NULL, '', NULL, '', '2020-03-17 01:09:04', '2020-03-17 01:09:04'),
(14, '14', NULL, 'Afghanistan', NULL, '', NULL, '', '2020-03-17 01:12:44', '2020-03-17 01:12:44'),
(15, '15', NULL, 'Afghanistan', NULL, '', NULL, '', '2020-03-17 01:20:43', '2020-03-17 01:20:43'),
(16, '16', NULL, 'Albania', '123123123123', '', NULL, '', '2020-03-17 15:01:49', '2020-03-17 15:01:49');

-- --------------------------------------------------------

--
-- Table structure for table `currency_mgmt`
--

CREATE TABLE `currency_mgmt` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `symbol` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currency_mgmt`
--

INSERT INTO `currency_mgmt` (`id`, `title`, `symbol`, `created_at`, `updated_at`) VALUES
(1, 'NPR', 'रु', '2018-05-15 10:25:51', '2018-05-15 10:25:51'),
(2, 'USD', '\0$', '2018-05-15 07:09:08', '2018-05-15 07:09:08'),
(4, 'AUD', 'A$', '2018-05-22 10:34:09', '2018-05-22 10:34:33'),
(6, 'IND', '₹', '2018-05-22 10:36:08', '2018-05-22 10:36:08'),
(7, 'CNY', '¥', '2018-05-22 10:36:55', '2019-06-03 12:14:20');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `zone_id` int(20) DEFAULT NULL,
  `district_id` int(20) DEFAULT NULL,
  `vdc` varchar(255) DEFAULT NULL,
  `population` varchar(255) NOT NULL,
  `hdi` float DEFAULT NULL,
  `poverty_in` float DEFAULT NULL,
  `vdc_detail` varchar(250) NOT NULL,
  `original_vdc_detail` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `district_id` int(10) UNSIGNED NOT NULL,
  `cbs_code` varchar(222) NOT NULL,
  `district_name` varchar(100) NOT NULL,
  `district_headquarter` varchar(100) NOT NULL,
  `zone_id` int(10) UNSIGNED NOT NULL,
  `state_id` int(10) UNSIGNED NOT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `district_id`, `cbs_code`, `district_name`, `district_headquarter`, `zone_id`, `state_id`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 1, '', 'Ilam', 'Ilam', 1, 1, '26.9', '87.9333333', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(2, 2, '', 'Jhapa', 'Chandragadhi', 1, 1, '26.63982', '87.8942451', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(3, 3, '', 'Panchthar', 'Phidim', 1, 1, '27.2036401', '87.8156715', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(4, 4, '', 'Taplejung', 'Taplejung', 1, 1, '27.35', '87.6666667', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(5, 5, '', 'Dang Deukhuri', 'Ghorahi', 2, 5, '28', '82.2666667', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(6, 6, '', 'Pyuthan', 'Pyuthan Khalanga', 2, 5, '28.1', '82.8666667', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(7, 7, '', 'Rolpa', 'Liwang', 2, 5, '28.3815621', '82.6483442', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(8, 8, '', 'Rukum (eastern part)', 'Musikot', 2, 5, '28.7434423', '82.4752757', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(9, 9, '', 'Salyan', 'Salyan Khalanga', 2, 6, '28.28', '83.79', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(10, 10, '', 'Bhaktapur', 'Bhaktapur', 3, 3, '27.673031', '85.427856', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(11, 11, '', 'Dhading', 'Dhading Besi', 3, 3, '27.8666667', '84.9166667', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(12, 12, '', 'Kathmandu', 'Kathmandu', 3, 3, '27.702871', '85.318244', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(13, 13, '', 'Kavrepalanchok', 'Dhulikhel', 3, 3, '27.525942', '85.56121', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(14, 14, '', 'Lalitpur', 'Patan', 3, 3, '27.5419673', '85.3342973', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(15, 15, '', 'Nuwakot', 'Bidur', 3, 3, '27.97', '83.06', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(16, 16, '', 'Rasuwa', 'Dhunche', 3, 3, '27.083333', '86.433333', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(17, 17, '', 'Sindhupalchok', 'Chautara', 3, 3, '27.9512034', '85.684578', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(18, 18, '', 'Dolpa', 'Dolpa', 4, 6, '28.998686', '82.816437', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(19, 19, '', 'Humla', 'Simikot', 4, 6, '29.9666667', '81.8333333', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(20, 20, '', 'Jumla', 'Jumla Khalanga', 4, 6, '29.2752778', '82.1833333', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(21, 21, '', 'Kalikot', 'Kalikot', 4, 6, '29.15', '81.6166667', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(22, 22, '', 'Mugu', 'Gamgadhi', 4, 6, '29.8666667', '82.6166667', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(23, 23, '', 'Khotang', 'Diktel', 5, 1, '27.2317177', '86.8220341', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(24, 24, '', 'Okhaldhunga', 'Okhaldhunga', 5, 1, '27.3166667', '86.5', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(25, 25, '', 'Saptari', 'Rajbiraj', 5, 2, '26.6172621', '86.7013894', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(26, 26, '', 'Siraha', 'Siraha', 5, 2, '26.656031', '86.208847', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(27, 27, '', 'Solukhumbu', 'Salleri', 5, 1, '27.7909733', '86.6611083', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(28, 28, '', 'Udayapur', 'Gaighat', 5, 1, '27.57', '82.9', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(29, 29, '', 'Bhojpur', 'Bhojpur', 6, 1, '27.1666667', '87.05', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(30, 30, '', 'Dhankuta', 'Dhankuta', 6, 1, '26.9833333', '87.3333333', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(31, 31, '', 'Morang', 'Biratnagar', 6, 1, '26.6799002', '87.460397', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(32, 32, '', 'Sankhuwasabha', 'Khandbari', 6, 1, '27.6141916', '87.1422895', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(33, 33, '', 'Sunsari', 'Inaruwa', 6, 1, '26.6275522', '87.1821709', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(34, 34, '', 'Terhathum', 'Manglung', 6, 1, '27.198391', '87.5000082', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(35, 35, '', 'Bara', 'Kalaiya', 7, 2, '27.0333333', '85', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(36, 36, '', 'Chitwan', 'Bharatpur', 7, 3, '27.529131', '84.3542049', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(37, 37, '', 'Makwanpur', 'Hetauda', 7, 3, '27.3730012', '85.1894045', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(38, 38, '', 'Parsa', 'Birgunj', 7, 2, '26.8833333', '85.6333333', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(39, 39, '', 'Rautahat', 'Gaur', 7, 2, '26.57', '86.53', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(40, 40, '', 'Baitadi', 'Baitadi', 8, 7, '29.5185787', '80.4688061', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(41, 41, '', 'Dadeldhura', 'Dadeldhura', 8, 7, '29.2992006', '80.5875862', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(42, 42, '', 'Darchula', 'Darchula', 8, 7, '29.83', '80.55', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(43, 43, '', 'Kanchanpur', 'Mahendara Nagar', 8, 7, '28.2', '82.166667', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(44, 44, '', 'Gorkha', 'Gorkha', 9, 4, '28', '84.6333333', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(45, 45, '', 'Kaski', 'Pokhara', 9, 4, '28.28236', '83.866028', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(46, 46, '', 'Lamjung', 'Bensi Sahar', 9, 4, '28.2765491', '84.3542049', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(47, 47, '', 'Manang', 'Chame', 9, 4, '28.6666667', '84.0166667', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(48, 48, '', 'Syangja', 'Syangja', 9, 4, '28.1046333', '83.8791074', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(49, 49, '', 'Tanahu', 'Damauli', 9, 4, '27.944705', '84.2278796', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(50, 50, '', 'Dhanusa', 'Janakpur', 10, 2, '26.8350474', '86.0121573', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(51, 51, '', 'Dholkha', 'Charikot', 10, 3, '27.7784288', '86.1751759', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(52, 52, '', 'Mahottari', 'Jaleswor', 10, 2, '26.8761922', '85.80766', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(53, 53, '', 'Ramechhap', 'Manthali', 10, 3, '27.3333333', '86.0833333', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(54, 54, '', 'Sarlahi', 'Malangwa', 10, 2, '27.0084093', '85.520024', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(55, 55, '', 'Sindhuli', 'Sindhuli Madhi', 10, 3, '27.2568824', '85.971322', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(56, 56, '', 'Arghakhanchi', 'Sandhikharka', 11, 5, '28.0008333', '83.2466667', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(57, 57, '', 'Gulmi', 'Tamghas', 11, 5, '28.088934', '83.2934086', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(58, 58, '', 'Kapilvastu', 'Taulihawa', 11, 5, '27.5434407', '83.0549312', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(59, 59, '', 'Nawalparasi (east of Bardaghat Susta)', 'Parasi', 11, 4, '27.6498409', '83.8897057', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(60, 60, '', 'Palpa', 'Tansen', 11, 5, '27.8666667', '83.55', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(61, 61, '', 'Rupandehi', 'Bhairahawa', 11, 5, '27.6264239', '83.3789389', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(62, 62, '', 'Achham', 'Mangalsen', 12, 7, '29.05', '81.3', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(63, 63, '', 'Bajhang', 'Chainpur', 12, 7, '29.55', '81.2', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(64, 64, '', 'Bajura', 'Martadi', 12, 7, '29.4469444', '81.4866667', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(65, 65, '', 'Doti', 'Dipayal', 12, 7, '29.266667', '80.983333', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(66, 66, '', 'Kailali', 'Dhangadhi', 12, 7, '28.6833333', '80.6', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(67, 67, '', 'Banke', 'Nepalgunj', 13, 5, '28.05', '81.6166667', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(68, 68, '', 'Bardiya', 'Gulariya', 13, 5, '28.8166667', '80.4833333', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(69, 69, '', 'Dailekh', 'Dullu', 13, 6, '28.8375', '81.7077778', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(70, 70, '', 'Jajarkot', 'Khalanga', 13, 6, '28.73', '82.22', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(71, 71, '', 'Surkhet', 'Surkhet', 13, 6, '28.6', '81.6333333', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(72, 72, '', 'Baglung', 'Baglung', 14, 4, '28.2666667', '83.6', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(73, 73, '', 'Mustang', 'Jomsom', 14, 4, '28.9985065', '83.8473015', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(74, 74, '', 'Myagdi', 'Beni', 14, 4, '28.611176', '83.5070203', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(75, 75, '', 'Parbat', 'Kusma', 14, 4, '28.178049', '83.6986568', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(77, 77, '', 'All District Selected', '', 15, 0, NULL, NULL, '2017-09-01 19:45:11', '2017-09-01 19:45:11'),
(78, 78, '', 'Nawalparasi (west of Bardaghat Susta)', 'Parasi', 11, 5, '27.6498409', '83.8897057', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(79, 79, '', 'Rukum (western part)', 'Musikot', 2, 6, '28.7434423', '82.4752757', '2017-07-12 05:02:52', '2017-07-12 05:02:52');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `document` varchar(225) DEFAULT NULL,
  `orignal_document` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `project_id`, `document`, `orignal_document`, `created_at`, `updated_at`) VALUES
(119, 74, '002-Activity-Completion-Template_201607201276987407.docx', '002-Activity-Completion-Template_20160720.docx', '2018-05-29 13:50:03', '2018-05-29 13:50:03'),
(120, 75, '002-Activity-Completion-Template_201607201059955226.docx', '002-Activity-Completion-Template_20160720.docx', '2018-05-29 14:00:45', '2018-05-29 14:00:45'),
(121, 76, 'feedback-changed-requirement1773638962.docx', 'feedback-changed-requirement.docx', '2018-05-29 14:12:50', '2018-05-29 14:12:50'),
(122, 76, 'feedback-changed1697956667.docx', 'feedback-changed.docx', '2018-05-29 14:12:50', '2018-05-29 14:12:50'),
(123, 76, 'feedback-changed-requirement265161680917463.docx', 'feedback-changed-requirement26516.docx', '2018-05-29 14:12:51', '2018-05-29 14:12:51'),
(124, 79, 'feedback-changed-requirement1121564817.docx', 'feedback-changed-requirement.docx', '2018-06-19 06:18:28', '2018-06-19 06:18:28'),
(125, 79, 'feedback-changed888278369.docx', 'feedback-changed.docx', '2018-06-19 06:18:28', '2018-06-19 06:18:28'),
(126, 79, 'feedback-changed-requirement265161465171131.docx', 'feedback-changed-requirement26516.docx', '2018-06-19 06:18:28', '2018-06-19 06:18:28'),
(127, 80, 'feedback-changed-requirement900787777.docx', 'feedback-changed-requirement.docx', '2018-06-19 06:19:11', '2018-06-19 06:19:11'),
(128, 80, 'feedback-changed1664740138.docx', 'feedback-changed.docx', '2018-06-19 06:19:11', '2018-06-19 06:19:11'),
(129, 80, 'feedback-changed-requirement265161895333411.docx', 'feedback-changed-requirement26516.docx', '2018-06-19 06:19:11', '2018-06-19 06:19:11'),
(130, 81, 'feedback-changed-requirement50857114.docx', 'feedback-changed-requirement.docx', '2018-06-19 06:19:55', '2018-06-19 06:19:55'),
(131, 81, 'feedback-changed702468400.docx', 'feedback-changed.docx', '2018-06-19 06:19:55', '2018-06-19 06:19:55'),
(132, 81, 'feedback-changed-requirement265161689877775.docx', 'feedback-changed-requirement26516.docx', '2018-06-19 06:19:56', '2018-06-19 06:19:56'),
(133, 82, 'feedback-changed-requirement880627509.docx', 'feedback-changed-requirement.docx', '2018-06-19 06:20:37', '2018-06-19 06:20:37'),
(134, 82, 'feedback-changed1333280125.docx', 'feedback-changed.docx', '2018-06-19 06:20:37', '2018-06-19 06:20:37'),
(135, 82, 'feedback-changed-requirement265161596768130.docx', 'feedback-changed-requirement26516.docx', '2018-06-19 06:20:37', '2018-06-19 06:20:37'),
(136, 83, 'feedback-changed-requirement34037155.docx', 'feedback-changed-requirement.docx', '2018-06-19 06:21:10', '2018-06-19 06:21:10'),
(137, 83, 'feedback-changed1794949601.docx', 'feedback-changed.docx', '2018-06-19 06:21:10', '2018-06-19 06:21:10'),
(138, 83, 'feedback-changed-requirement265161889032253.docx', 'feedback-changed-requirement26516.docx', '2018-06-19 06:21:10', '2018-06-19 06:21:10'),
(139, 84, 'feedback-changed-requirement1380433846.docx', 'feedback-changed-requirement.docx', '2018-06-19 06:23:20', '2018-06-19 06:23:20'),
(140, 84, 'feedback-changed569026103.docx', 'feedback-changed.docx', '2018-06-19 06:23:20', '2018-06-19 06:23:20'),
(141, 84, 'feedback-changed-requirement265161738346034.docx', 'feedback-changed-requirement26516.docx', '2018-06-19 06:23:20', '2018-06-19 06:23:20'),
(143, 87, 'thenovagroup-Server-Info788453939.docx', 'thenovagroup-Server-Info.docx', '2018-07-02 03:05:13', '2018-07-02 03:05:13'),
(144, 87, 'widbsxbashbxha1556950712.docx', 'widbsxbashbxha.docx', '2018-07-02 03:05:13', '2018-07-02 03:05:13'),
(145, 89, 'thenovagroup-Server-Info1085844777.docx', 'thenovagroup-Server-Info.docx', '2018-07-03 00:24:14', '2018-07-03 00:24:14'),
(146, 91, 'thenovagroup-Server-Info122695728.docx', 'thenovagroup-Server-Info.docx', '2018-08-22 04:58:16', '2018-08-22 04:58:16'),
(147, 92, 'thenovagroup-Server-Info1781938675.docx', 'thenovagroup-Server-Info.docx', '2018-08-22 22:54:38', '2018-08-22 22:54:38');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `donor_name` varchar(225) DEFAULT NULL,
  `donor_type` varchar(250) NOT NULL,
  `country` varchar(225) DEFAULT NULL,
  `headquarter_per_dis` int(10) UNSIGNED NOT NULL,
  `headquarter_per_lgu` varchar(250) NOT NULL,
  `headquarter_per_wardno` varchar(50) NOT NULL,
  `headquarter_temp_dis` varchar(250) NOT NULL,
  `headquarter_temp_lgu` varchar(250) NOT NULL,
  `headquarter_temp_wardno` varchar(50) NOT NULL,
  `contact_person` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `designation` varchar(250) NOT NULL,
  `phone_no` varchar(250) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `project_id`, `donor_name`, `donor_type`, `country`, `headquarter_per_dis`, `headquarter_per_lgu`, `headquarter_per_wardno`, `headquarter_temp_dis`, `headquarter_temp_lgu`, `headquarter_temp_wardno`, `contact_person`, `email`, `designation`, `phone_no`, `updated_at`, `created_at`) VALUES
(53, NULL, 'donor_name', 'individual', 'Åland Islands', 1, 'municipality', '1', '2', 'municipality', '1', 'donor_contact_person', NULL, '', '1234567890', '2019-10-02 04:34:31', '2019-10-02 04:34:31'),
(54, NULL, 'donor_name', 'individual', 'Åland Islands', 1, 'municipality', '1', '2', 'municipality', '1', 'donor_contact_person', NULL, '', '1234567890', '2019-10-02 05:26:56', '2019-10-02 05:26:56'),
(55, NULL, 'donor_name', 'individual', 'Åland Islands', 1, 'municipality', '3', '2', 'municipality', '12', 'donor_contact_person', NULL, '', '1234567890', '2019-10-02 05:27:30', '2019-10-02 05:27:30'),
(56, NULL, 'sajina', 'individual', 'Afghanistan', 1, 'municipality', '234', '2', 'municipality', '34', 'safasdf', NULL, '', '32424234', '2019-11-14 03:45:04', '2019-11-14 03:45:04');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_report`
--

CREATE TABLE `evaluation_report` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `document` varchar(225) DEFAULT NULL,
  `orignal_document` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation_report`
--

INSERT INTO `evaluation_report` (`id`, `project_id`, `document`, `orignal_document`, `created_at`, `updated_at`) VALUES
(21, 92, 'widbsxbashbxha1502681986.docx', 'widbsxbashbxha.docx', '2018-08-22 22:54:38', '2018-08-22 22:54:38');

-- --------------------------------------------------------

--
-- Table structure for table `expartiate`
--

CREATE TABLE `expartiate` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `name` varchar(225) DEFAULT NULL,
  `designation` varchar(225) DEFAULT NULL,
  `from_month` varchar(225) DEFAULT NULL,
  `from_year` varchar(225) DEFAULT NULL,
  `to_month` varchar(225) DEFAULT NULL,
  `to_year` varchar(225) DEFAULT NULL,
  `dependant_no` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expartiate`
--

INSERT INTO `expartiate` (`id`, `project_id`, `name`, `designation`, `from_month`, `from_year`, `to_month`, `to_year`, `dependant_no`, `created_at`, `updated_at`) VALUES
(34, 92, 'Bahadur', 'Manager', 'March', '1999', 'May', '2005', 2, '2018-08-23 00:58:00', '2018-08-23 00:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `front_users`
--

CREATE TABLE `front_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `front_users`
--

INSERT INTO `front_users` (`id`, `name`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'Manish', 'manish@gmail.com', '$2y$10$H3cyQMR/rYmhqYzVdjz4c.FZFXn4.tlAfKDFN/kWj1DwUTHKGaXNq', 1, NULL, '2020-03-10 21:33:51', '2020-03-11 08:29:19'),
(10, 'Sijan', 'sijan@gmail.com', '$2y$10$a8rHpIAz9xDsPbAWG0RNqOt1Bg7gCJ5Dqwx/KhACyr9a8g2LfIQNy', 1, NULL, '2020-03-10 21:55:52', '2020-03-11 08:31:24');

-- --------------------------------------------------------

--
-- Table structure for table `general_agreement`
--

CREATE TABLE `general_agreement` (
  `id` int(11) NOT NULL,
  `ingo_id` int(11) DEFAULT NULL,
  `user_id` varchar(225) DEFAULT NULL,
  `ga_code` varchar(225) DEFAULT NULL,
  `finance_grant` int(11) DEFAULT NULL,
  `commodity_grant` int(11) DEFAULT NULL,
  `sw_recco_date` date DEFAULT NULL,
  `time_bound` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `nepalculture` varchar(50) DEFAULT NULL,
  `rules_n_regulation` varchar(50) DEFAULT NULL,
  `crime_fraud` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_agreement`
--

INSERT INTO `general_agreement` (`id`, `ingo_id`, `user_id`, `ga_code`, `finance_grant`, `commodity_grant`, `sw_recco_date`, `time_bound`, `qualification`, `experience`, `nepalculture`, `rules_n_regulation`, `crime_fraud`, `created_at`, `updated_at`) VALUES
(16, 20, '2', 'GA-UTaHgK', 12000, 12000, '2020-04-03', '2020-04-03 00:00:00', NULL, NULL, 'yes', 'no', 'yes', '2020-03-17 15:01:49', '2020-03-17 15:01:49');

-- --------------------------------------------------------

--
-- Table structure for table `general_agreement_docs`
--

CREATE TABLE `general_agreement_docs` (
  `id` int(11) NOT NULL,
  `ga_id` varchar(255) NOT NULL,
  `cof` varchar(255) DEFAULT NULL,
  `by_laws` varchar(255) DEFAULT NULL,
  `financial_commitment` varchar(255) DEFAULT NULL,
  `concept_paper` varchar(255) DEFAULT NULL,
  `draft_agreement` varchar(255) DEFAULT NULL,
  `letter_authorization` varchar(255) DEFAULT NULL,
  `biodata` varchar(255) DEFAULT NULL,
  `covering_letter` varchar(255) DEFAULT NULL,
  `funding_sources` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_agreement_docs`
--

INSERT INTO `general_agreement_docs` (`id`, `ga_id`, `cof`, `by_laws`, `financial_commitment`, `concept_paper`, `draft_agreement`, `letter_authorization`, `biodata`, `covering_letter`, `funding_sources`, `created_at`, `updated_at`) VALUES
(5, '5', 'cof-1563433733Document.docx', 'by_laws-1563433733Document.docx', 'financial_commitment-1563433733Document.docx', 'concept_paper-1563433733Document.docx', 'draft_agreement-1563433733Document.docx', 'letter_authorization-1563433733Document.docx', 'biodata-1563433733Document.docx', 'covering_letter-1563433733Document.docx', 'funding_sources-1563433733Document.docx', '2019-07-18 01:23:53', '2019-07-18 01:23:53'),
(6, '6', '', '', '', '', '', '', '', '', '', '2019-09-16 01:06:12', '2019-09-16 01:06:12'),
(7, '7', '', '', '', '', '', '', '', '', '', '2019-09-16 02:19:33', '2019-09-16 02:19:33'),
(8, '8', '', '', '', '', '', '', '', '', '', '2019-09-16 02:19:42', '2019-09-16 02:19:42'),
(9, '9', '', '', '', '', '', '', '', '', '', '2019-09-16 02:26:07', '2019-09-16 02:26:07'),
(10, '10', '', '', '', '', '', '', '', '', '', '2019-09-16 23:32:53', '2019-09-16 23:32:53'),
(11, '11', '', '', '', '', '', '', '', '', '', '2020-03-16 23:20:21', '2020-03-16 23:20:21'),
(12, '12', '', '', '', '', '', '', '', '', '', '2020-03-17 00:50:43', '2020-03-17 00:50:43'),
(13, '13', '', '', '', '', '', '', '', '', '', '2020-03-17 01:09:04', '2020-03-17 01:09:04'),
(14, '14', '', '', '', '', '', '', '', '', '', '2020-03-17 01:12:44', '2020-03-17 01:12:44'),
(15, '15', '', '', '', '', '', '', '', '', '', '2020-03-17 01:20:43', '2020-03-17 01:20:43'),
(16, '16', '', '', '', '', '', '', '', '', '', '2020-03-17 15:01:49', '2020-03-17 15:01:49');

-- --------------------------------------------------------

--
-- Table structure for table `general_agreement_renew`
--

CREATE TABLE `general_agreement_renew` (
  `id` int(11) NOT NULL,
  `general_agreement_id` varchar(225) DEFAULT NULL,
  `evaluation_report` varchar(255) DEFAULT NULL,
  `ga_draft` varchar(255) DEFAULT NULL,
  `audit_draft` varchar(255) DEFAULT NULL,
  `commitment_letter` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_agreement_renew`
--

INSERT INTO `general_agreement_renew` (`id`, `general_agreement_id`, `evaluation_report`, `ga_draft`, `audit_draft`, `commitment_letter`, `created_at`, `updated_at`) VALUES
(5, '5', 'evaluation_report-1563433733Document.docx', 'ga_draft-1563433733Document.docx', 'audit_draft-1563433733Document.docx', 'commitment_letter-1563433733Document.docx', '2019-07-18 01:23:53', '2019-07-18 01:23:53'),
(6, '6', '', '', '', '', '2019-09-16 01:06:12', '2019-09-16 01:06:12'),
(7, '7', '', '', '', '', '2019-09-16 02:19:33', '2019-09-16 02:19:33'),
(8, '8', '', '', '', '', '2019-09-16 02:19:42', '2019-09-16 02:19:42'),
(9, '9', '', '', '', '', '2019-09-16 02:26:07', '2019-09-16 02:26:07'),
(10, '10', '', '', '', '', '2019-09-16 23:32:53', '2019-09-16 23:32:53'),
(11, '11', '', '', '', '', '2020-03-16 23:20:21', '2020-03-16 23:20:21'),
(12, '12', '', '', '', '', '2020-03-17 00:50:44', '2020-03-17 00:50:44'),
(13, '13', '', '', '', '', '2020-03-17 01:09:04', '2020-03-17 01:09:04'),
(14, '14', '', '', '', '', '2020-03-17 01:12:44', '2020-03-17 01:12:44'),
(15, '15', '', '', '', '', '2020-03-17 01:20:43', '2020-03-17 01:20:43'),
(16, '16', '', '', '', '', '2020-03-17 15:01:49', '2020-03-17 15:01:49');

-- --------------------------------------------------------

--
-- Table structure for table `general_agreement_theme`
--

CREATE TABLE `general_agreement_theme` (
  `id` int(11) NOT NULL,
  `general_agreement_id` varchar(225) DEFAULT NULL,
  `theme_id` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_agreement_theme`
--

INSERT INTO `general_agreement_theme` (`id`, `general_agreement_id`, `theme_id`, `created_at`, `updated_at`) VALUES
(12, '5', '1', '2019-07-18 01:23:53', '2019-07-18 01:23:53'),
(13, '5', '2', '2019-07-18 01:23:53', '2019-07-18 01:23:53'),
(14, '5', '3', '2019-07-18 01:23:53', '2019-07-18 01:23:53'),
(15, '6', '1', '2019-09-16 01:06:12', '2019-09-16 01:06:12'),
(16, '7', '1', '2019-09-16 02:19:33', '2019-09-16 02:19:33'),
(17, '8', '1', '2019-09-16 02:19:42', '2019-09-16 02:19:42'),
(18, '9', '1', '2019-09-16 02:26:07', '2019-09-16 02:26:07'),
(19, '10', '1', '2019-09-16 23:32:53', '2019-09-16 23:32:53'),
(20, '11', '1', '2020-03-16 23:20:20', '2020-03-16 23:20:20'),
(21, '12', NULL, '2020-03-17 00:50:43', '2020-03-17 00:50:43'),
(22, '13', NULL, '2020-03-17 01:09:04', '2020-03-17 01:09:04'),
(23, '14', NULL, '2020-03-17 01:12:44', '2020-03-17 01:12:44'),
(24, '15', NULL, '2020-03-17 01:20:43', '2020-03-17 01:20:43'),
(25, '16', '1', '2020-03-17 15:01:49', '2020-03-17 15:01:49'),
(26, '16', '2', '2020-03-17 15:01:49', '2020-03-17 15:01:49');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tagline` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(350) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_desc` text COLLATE utf8_unicode_ci,
  `meta_keyword` text COLLATE utf8_unicode_ci,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `title`, `tagline`, `meta_title`, `meta_desc`, `meta_keyword`, `email`, `logo`, `favicon`, `created_at`, `updated_at`) VALUES
(10, 'Ministry of Women, Children and Senior Citizen', NULL, NULL, NULL, NULL, 'admin@3hammers.com', 'NiHeK-EVZNy-nepal-govt.png', 'afTff-JQ4My-EVZNy-nepal-govt.png', '2017-07-13 05:13:05', '2018-06-08 05:00:10');

-- --------------------------------------------------------

--
-- Table structure for table `import_approval_detail`
--

CREATE TABLE `import_approval_detail` (
  `id` int(11) NOT NULL,
  `ministry_id` int(11) NOT NULL,
  `pre_approval_date` date NOT NULL,
  `organization_name` varchar(255) DEFAULT NULL,
  `goods_detail_name` varchar(255) DEFAULT NULL,
  `bill_currency` varchar(225) NOT NULL,
  `bill_amount` varchar(225) NOT NULL,
  `new_bill_currency` varchar(225) NOT NULL,
  `new_bill_amount` varchar(225) NOT NULL,
  `custom_exemption` varchar(225) DEFAULT NULL,
  `vat_exemption` varchar(225) DEFAULT NULL,
  `import_approval_exemption` varchar(225) DEFAULT NULL,
  `import_approval` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `import_approval_detail`
--

INSERT INTO `import_approval_detail` (`id`, `ministry_id`, `pre_approval_date`, `organization_name`, `goods_detail_name`, `bill_currency`, `bill_amount`, `new_bill_currency`, `new_bill_amount`, `custom_exemption`, `vat_exemption`, `import_approval_exemption`, `import_approval`, `created_at`, `updated_at`) VALUES
(10, 0, '2018-08-27', 'wefe', 'wcdwedwe', '1', '12312', '2', '123123', NULL, 'on', 'on', NULL, '2018-08-21 03:54:19', '2018-08-21 05:26:24'),
(11, 2, '2020-10-03', 'test', 'test', '1', '1500', '6', '15000', NULL, NULL, NULL, NULL, '2020-03-17 09:48:22', '2020-03-17 09:48:22'),
(12, 2, '2020-10-03', 'test', 'test', '1', '1500', '6', '15000', NULL, NULL, NULL, NULL, '2020-03-17 09:49:18', '2020-03-17 09:49:18');

-- --------------------------------------------------------

--
-- Table structure for table `ingo`
--

CREATE TABLE `ingo` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `address` varchar(225) DEFAULT NULL,
  `contact_no` varchar(225) DEFAULT NULL,
  `contact_person` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `estd_date` date DEFAULT NULL,
  `close_date` date DEFAULT NULL,
  `staff_number` int(11) DEFAULT NULL,
  `vat_no` bigint(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingo`
--

INSERT INTO `ingo` (`id`, `user_id`, `name`, `address`, `contact_no`, `contact_person`, `email`, `estd_date`, `close_date`, `staff_number`, `vat_no`, `created_at`, `updated_at`) VALUES
(1, 1, 'New World Society (NWS)', 'New York', '2142343243', 'Mr John doe', 'admin@3hammers.com', '2018-06-19', '0000-00-00', 23, NULL, '2018-06-08 02:33:53', '2018-06-08 02:34:35'),
(2, 1, 'Go1 over all live sites and confirm they are working', 'New York', '234234', 'Mr John doe', 'admin@3hammers.com', '2018-06-12', '0000-00-00', 23, NULL, '2018-06-14 05:04:15', '2018-07-04 05:34:33'),
(3, 1, 'IMF', 'New York', '234234234234', 'Kshitiz Dhakal', 'kshitiz.dhakal.100@gmail.com', '2018-08-05', '2026-06-24', 23, NULL, '2018-08-23 01:17:45', '2018-08-23 01:18:45'),
(5, 1, 'Example of Ingo', 'Basantapur, Freak street', '9841238769', 'Pratibha F. Kunwar', 'prati.kunwar@gmail.com', '1994-08-12', '2017-04-20', 21349, NULL, '2019-09-16 00:27:11', '2019-09-16 00:28:59'),
(18, 9, 'Manish', '5,Lalitpur,Lalitpur,Imadol,lalitpur,7', '9841414178', NULL, 'manish@gmail.com', '2020-03-02', NULL, NULL, NULL, '2020-03-10 21:33:51', '2020-03-10 21:33:51'),
(19, 10, 'Sijan', '6,Lalitpur,Lalitpur,Sundhara,10', '9841414178', NULL, 'sijan@gmail.com', '2020-03-06', NULL, NULL, NULL, '2020-03-10 21:55:52', '2020-03-10 21:55:52'),
(20, 2, 'Manish', '3,Lalitpur,Lalitpur,Imadol,lalitpur,7', '9841414178', NULL, 'manish12@gmail.com', '2020-01-29', NULL, NULL, NULL, '2020-03-17 12:16:23', '2020-03-17 12:16:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2020_02_18_034745_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ministry`
--

CREATE TABLE `ministry` (
  `id` int(11) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ministry`
--

INSERT INTO `ministry` (`id`, `name`, `updated_at`, `created_at`) VALUES
(2, 'Ministry of Food', '2018-08-21 01:42:31', '2018-08-21 01:42:31'),
(3, 'Ministry of Women and Children', '2018-08-21 01:42:49', '2018-08-21 01:42:49'),
(4, 'Ministry of Education', '2018-08-21 01:43:03', '2018-08-21 01:43:03');

-- --------------------------------------------------------

--
-- Table structure for table `ministry_approval_docs`
--

CREATE TABLE `ministry_approval_docs` (
  `id` int(11) NOT NULL,
  `approval_detail_id` int(11) NOT NULL,
  `document` varchar(225) NOT NULL,
  `orignal_document` varchar(225) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ministry_approval_docs`
--

INSERT INTO `ministry_approval_docs` (`id`, `approval_detail_id`, `document`, `orignal_document`, `updated_at`, `created_at`) VALUES
(1, 9, 'thenovagroup-Server-Info1396679588.docx', 'thenovagroup-Server-Info.docx', '2018-08-21 03:50:17', '2018-08-21 03:50:17'),
(2, 10, 'thenovagroup-Server-Info466677584.docx', 'thenovagroup-Server-Info.docx', '2018-08-21 03:54:19', '2018-08-21 03:54:19'),
(3, 10, 'widbsxbashbxha520336111.docx', 'widbsxbashbxha.docx', '2018-08-21 03:54:19', '2018-08-21 03:54:19');

-- --------------------------------------------------------

--
-- Table structure for table `ministry_documents`
--

CREATE TABLE `ministry_documents` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `ministry_documents` varchar(255) DEFAULT NULL,
  `orignal_ministry_documents` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ministry_documents`
--

INSERT INTO `ministry_documents` (`id`, `project_id`, `ministry_documents`, `orignal_ministry_documents`, `created_at`, `updated_at`) VALUES
(8, 74, 'ministry-002-Activity-Completion-Template_201607201846530972.docx', 'ministry-002-Activity-Completion-Template_20160720.docx', '2018-05-29 13:50:03', '2018-05-29 13:50:03'),
(9, 75, 'ministry-002-Activity-Completion-Template_201607201718438618.docx', 'ministry-002-Activity-Completion-Template_20160720.docx', '2018-05-29 14:00:45', '2018-05-29 14:00:45'),
(10, 76, 'ministry-feedback-changed-requirement868168823.docx', 'ministry-feedback-changed-requirement.docx', '2018-05-29 14:12:50', '2018-05-29 14:12:50'),
(11, 76, 'ministry-feedback-changed1985319369.docx', 'ministry-feedback-changed.docx', '2018-05-29 14:12:50', '2018-05-29 14:12:50'),
(12, 76, 'ministry-feedback-changed-requirement26516398158183.docx', 'ministry-feedback-changed-requirement26516.docx', '2018-05-29 14:12:50', '2018-05-29 14:12:50'),
(13, 79, 'ministry-feedback-changed1493736513.docx', 'ministry-feedback-changed.docx', '2018-06-19 06:18:27', '2018-06-19 06:18:27'),
(14, 79, 'ministry-feedback-changed-requirement2651677855341.docx', 'ministry-feedback-changed-requirement26516.docx', '2018-06-19 06:18:28', '2018-06-19 06:18:28'),
(15, 80, 'ministry-feedback-changed1771950771.docx', 'ministry-feedback-changed.docx', '2018-06-19 06:19:10', '2018-06-19 06:19:10'),
(16, 80, 'ministry-feedback-changed-requirement26516233149281.docx', 'ministry-feedback-changed-requirement26516.docx', '2018-06-19 06:19:10', '2018-06-19 06:19:10'),
(17, 81, 'ministry-feedback-changed1213432693.docx', 'ministry-feedback-changed.docx', '2018-06-19 06:19:55', '2018-06-19 06:19:55'),
(18, 81, 'ministry-feedback-changed-requirement26516680899714.docx', 'ministry-feedback-changed-requirement26516.docx', '2018-06-19 06:19:55', '2018-06-19 06:19:55'),
(19, 82, 'ministry-feedback-changed1128142445.docx', 'ministry-feedback-changed.docx', '2018-06-19 06:20:37', '2018-06-19 06:20:37'),
(20, 82, 'ministry-feedback-changed-requirement265161795530511.docx', 'ministry-feedback-changed-requirement26516.docx', '2018-06-19 06:20:37', '2018-06-19 06:20:37'),
(21, 83, 'ministry-feedback-changed1686792453.docx', 'ministry-feedback-changed.docx', '2018-06-19 06:21:10', '2018-06-19 06:21:10'),
(22, 83, 'ministry-feedback-changed-requirement26516786559766.docx', 'ministry-feedback-changed-requirement26516.docx', '2018-06-19 06:21:10', '2018-06-19 06:21:10'),
(23, 84, 'ministry-feedback-changed1898626743.docx', 'ministry-feedback-changed.docx', '2018-06-19 06:23:20', '2018-06-19 06:23:20'),
(24, 84, 'ministry-feedback-changed-requirement26516734111091.docx', 'ministry-feedback-changed-requirement26516.docx', '2018-06-19 06:23:20', '2018-06-19 06:23:20'),
(26, 87, 'ministry-thenovagroup-Server-Info1540909075.docx', 'ministry-thenovagroup-Server-Info.docx', '2018-07-02 03:05:13', '2018-07-02 03:05:13'),
(27, 91, 'ministry-widbsxbashbxha1667558964.docx', 'ministry-widbsxbashbxha.docx', '2018-08-22 04:58:16', '2018-08-22 04:58:16'),
(28, 92, 'ministry-thenovagroup-Server-Info309933437.docx', 'ministry-thenovagroup-Server-Info.docx', '2018-08-22 22:54:38', '2018-08-22 22:54:38');

-- --------------------------------------------------------

--
-- Table structure for table `misc_districts`
--

CREATE TABLE `misc_districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `province_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `cbs_code` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `misc_districts`
--

INSERT INTO `misc_districts` (`id`, `province_id`, `name`, `cbs_code`, `created_at`, `updated_at`) VALUES
(1, 4, 'Kathmandu', '306', '2018-03-04 19:53:05', '2018-03-04 19:53:05'),
(2, 4, 'Lalitpur', '308', '2018-03-04 19:53:15', '2018-03-04 19:53:15'),
(3, 4, 'Bhaktapur', '307', '2018-03-04 19:53:23', '2018-03-20 17:34:30'),
(4, 4, 'Sindhupalchok', '302', '2018-03-20 17:28:29', '2018-06-21 05:10:41'),
(5, 1, 'Bhojpur', '106', '2018-03-20 17:32:58', '2018-03-20 17:32:58'),
(6, 1, 'Dhankuta', '107', '2018-03-20 17:33:18', '2018-03-20 17:33:18'),
(7, 3, 'Bara', '207', '2018-03-20 17:34:40', '2018-03-20 17:34:40'),
(8, 3, 'Dhanusha', '203', '2018-03-20 17:35:07', '2018-03-20 17:35:07'),
(9, 1, 'Taplejung', '101', '2018-03-21 12:43:21', '2018-03-21 12:43:21'),
(10, 1, 'Panchthar', '109', '2018-03-21 12:46:47', '2018-03-21 12:46:47'),
(11, 1, 'Ilam', '110', '2018-03-21 12:47:15', '2018-03-21 12:47:15'),
(12, 1, 'Jhapa', '111', '2018-03-21 12:47:54', '2018-03-21 12:47:54'),
(13, 1, 'Morang', '112', '2018-03-21 12:48:24', '2018-03-21 12:48:24'),
(14, 1, 'Sunsari', '113', '2018-03-21 12:48:53', '2018-03-21 12:48:53'),
(16, 1, 'Terhathum', '108', '2018-03-21 12:50:04', '2018-03-21 12:50:04'),
(17, 1, 'Sankhuwasabha', '102', '2018-03-21 12:50:52', '2018-03-21 12:50:52'),
(19, 1, 'Solukhumbu', '302', '2018-03-21 12:51:39', '2018-03-21 12:51:39'),
(20, 1, 'Okhaldhunga', '104', '2018-03-21 12:52:00', '2018-03-21 12:52:00'),
(21, 1, 'Khotang', '105', '2018-03-21 12:52:17', '2018-03-21 12:52:17'),
(22, 1, 'Udayapur', '114', '2018-03-21 12:54:44', '2018-03-21 12:54:44'),
(23, 3, 'Saptari', '201', '2018-03-21 12:55:09', '2018-03-21 12:55:09'),
(24, 3, 'Siraha', '202', '2018-03-21 12:55:32', '2018-03-21 12:55:32'),
(25, 3, 'Mahottari', '204', '2018-03-21 12:57:18', '2018-03-21 12:57:18'),
(26, 3, 'Sarlahi', '205', '2018-03-21 12:58:02', '2018-03-21 12:58:02'),
(27, 3, 'Rautahat', '206', '2018-03-21 12:58:36', '2018-03-21 12:58:36'),
(28, 3, 'Parsa', '208', '2018-03-21 12:58:58', '2018-03-21 12:58:58'),
(29, 4, 'Sindhuli', '311', '2018-03-21 13:00:10', '2018-03-21 13:00:10'),
(30, 4, 'Ramechhap', '310', '2018-03-21 13:00:55', '2018-03-21 13:00:55'),
(31, 4, 'Dolakha', '301', '2018-03-21 13:01:22', '2018-03-21 13:01:22'),
(32, 4, 'Kavrepalanchowk', '309', '2018-03-21 13:02:14', '2018-03-21 13:02:14'),
(33, 4, 'Nuwakot', '305', '2018-03-21 13:02:49', '2018-03-21 13:02:49'),
(34, 4, 'Rasuwa', '303', '2018-03-21 13:03:19', '2018-03-21 13:03:19'),
(35, 4, 'Dhading', '304', '2018-03-21 13:04:18', '2018-03-21 13:04:18'),
(36, 4, 'Makwanpur', '312', '2018-03-21 13:04:48', '2018-03-21 13:04:48'),
(37, 4, 'Chitwan', '313', '2018-03-21 13:05:14', '2018-03-21 13:05:14'),
(38, 5, 'Gorkha', '401', '2018-03-21 13:05:53', '2018-03-21 13:05:53'),
(39, 5, 'Lamjung', '406', '2018-03-21 13:06:17', '2018-03-21 13:06:17'),
(40, 5, 'Tanahu', '407', '2018-03-21 13:06:56', '2018-03-21 13:06:56'),
(41, 5, 'Syangja', '409', '2018-03-21 13:07:52', '2018-03-21 13:07:52'),
(42, 5, 'Kaski', '405', '2018-03-21 13:08:09', '2018-03-21 13:08:09'),
(43, 5, 'Manang', '402', '2018-03-21 13:08:33', '2018-03-21 13:08:33'),
(44, 5, 'Mustang', '403', '2018-03-21 13:08:51', '2018-03-21 13:08:51'),
(45, 5, 'Myagdi', '404', '2018-03-21 13:09:14', '2018-03-21 13:09:14'),
(46, 5, 'Parbat', '410', '2018-03-21 13:09:31', '2018-03-21 13:09:31'),
(47, 5, 'Baglung', '411', '2018-03-21 13:09:56', '2018-03-21 13:09:56'),
(48, 5, 'Barbaghat Susta Purwa Nawalparasi', '', '2018-03-21 13:16:35', '2018-03-21 13:16:35'),
(49, 6, 'Barbaghat Susta Pachim Nawalparasi', '', '2018-03-21 13:17:16', '2018-03-21 13:17:16'),
(50, 6, 'Gulmi', '504', '2018-03-21 13:17:56', '2018-03-21 13:17:56'),
(51, 6, 'Palpa', '506', '2018-03-21 13:18:15', '2018-03-21 13:18:15'),
(52, 6, 'Rupandehi', '508', '2018-03-21 13:18:43', '2018-03-21 13:18:43'),
(53, 6, 'Kapilvastu', '509', '2018-03-21 13:19:23', '2018-03-21 13:19:23'),
(54, 6, 'Argakhanchi', '505', '2018-03-21 13:19:48', '2018-03-21 13:19:48'),
(55, 6, 'Pyuthan', '503', '2018-03-21 13:20:06', '2018-03-21 13:20:06'),
(56, 6, 'Rolpa', '502', '2018-03-21 13:20:27', '2018-03-21 13:20:27'),
(57, 6, 'Purwa Rukum', '', '2018-03-21 13:24:42', '2018-03-21 13:24:42'),
(58, 7, 'Pchhim Rukum', '', '2018-03-21 13:25:10', '2018-03-21 13:25:10'),
(59, 6, 'Dang', '510', '2018-03-21 13:25:27', '2018-03-21 13:25:27'),
(60, 6, 'Banke', '511', '2018-03-21 13:25:44', '2018-03-21 13:25:44'),
(61, 6, 'Bardiya', '512', '2018-03-21 13:26:04', '2018-03-21 13:26:04'),
(62, 7, 'Salyan', '609', '2018-03-21 13:26:21', '2018-03-21 13:26:21'),
(63, 7, 'Surkhet', '610', '2018-03-21 13:26:38', '2018-03-21 13:26:38'),
(64, 7, 'Dailekh', '606', '2018-03-21 13:26:57', '2018-03-21 13:26:57'),
(65, 7, 'Jajarkot', '607', '2018-03-21 13:27:51', '2018-03-21 13:27:51'),
(66, 7, 'Dolpa', '601', '2018-03-21 13:28:08', '2018-03-21 13:28:08'),
(67, 7, 'Jumla', '604', '2018-03-21 13:28:29', '2018-03-21 13:28:29'),
(68, 7, 'Kalikot', '605', '2018-03-21 13:28:47', '2018-03-21 13:28:47'),
(69, 7, 'Mugu', '602', '2018-03-21 13:29:10', '2018-03-21 13:29:10'),
(70, 7, 'Humla', '603', '2018-03-21 13:29:29', '2018-03-21 13:29:29'),
(71, 8, 'Bajura', '701', '2018-03-21 13:29:47', '2018-03-21 13:29:47'),
(72, 8, 'Bajhang', '702', '2018-03-21 13:30:05', '2018-03-21 13:30:05'),
(73, 8, 'Achham', '707', '2018-03-21 13:30:25', '2018-03-21 13:30:25'),
(74, 8, 'Doti', '706', '2018-03-21 13:30:48', '2018-03-21 13:30:48'),
(75, 8, 'Kailali', '708', '2018-03-21 13:31:06', '2018-03-21 13:31:06'),
(76, 8, 'Kanchanpur', '709', '2018-03-21 13:31:27', '2018-03-21 13:31:27'),
(77, 8, 'Dadeldhura', '705', '2018-03-21 13:31:53', '2018-03-21 13:31:53'),
(78, 8, 'Baitadi', '704', '2018-03-21 13:32:11', '2018-03-21 13:32:11'),
(79, 8, 'Darchula', '703', '2018-03-21 13:32:34', '2018-03-21 13:32:34');

-- --------------------------------------------------------

--
-- Table structure for table `misc_lgus`
--

CREATE TABLE `misc_lgus` (
  `id` int(10) UNSIGNED NOT NULL,
  `district_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `misc_lgus`
--

INSERT INTO `misc_lgus` (`id`, `district_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Badikhel', '2018-03-04 19:54:10', '2018-03-06 19:42:45'),
(2, 1, 'Chandanpur', '2018-03-04 19:54:19', '2018-03-06 19:43:23'),
(5, 2, 'Dalchoki', '2018-03-06 19:43:37', '2018-03-06 19:43:37'),
(6, 2, 'Godawari', '2018-03-06 19:43:59', '2018-03-06 19:43:59'),
(7, 14, 'Bhokaraha', '2018-03-20 17:29:41', '2018-03-21 13:49:58'),
(8, 14, 'Harinagara', '2018-03-20 17:37:27', '2018-03-21 13:50:26'),
(9, 14, 'Dewangunj', '2018-03-20 17:38:01', '2018-03-21 13:50:52'),
(10, 23, 'Surunga', '2018-03-20 17:38:19', '2018-03-21 13:51:22'),
(11, 23, 'Mahadewa', '2018-03-20 17:39:30', '2018-03-21 13:51:56'),
(12, 23, 'Dakneshowri', '2018-03-20 17:39:57', '2018-03-21 13:52:56'),
(13, 23, 'Bodebarsaien', '2018-03-21 13:55:34', '2018-03-21 13:55:34'),
(14, 24, 'Arnama', '2018-03-21 13:57:12', '2018-03-21 13:57:12'),
(15, 24, 'Bishnupur', '2018-03-21 13:58:59', '2018-03-21 13:58:59'),
(16, 24, 'Bariyarpatti', '2018-03-21 13:59:35', '2018-03-21 13:59:35'),
(17, 8, 'Mukhiyapatti', '2018-03-21 14:01:23', '2018-03-21 14:01:23'),
(18, 8, 'Mushaharniya', '2018-03-21 14:01:45', '2018-03-21 14:01:45'),
(19, 8, 'Bideha', '2018-03-21 14:03:47', '2018-03-21 14:03:47'),
(20, 8, 'Batteshwor', '2018-03-21 14:04:43', '2018-03-21 14:04:43'),
(21, 25, 'Aaurahi', '2018-03-21 14:05:08', '2018-03-21 14:05:08'),
(22, 25, 'Lauharpatti', '2018-03-21 14:05:29', '2018-03-21 14:05:29'),
(23, 25, 'Eakdara', '2018-03-21 14:05:56', '2018-03-21 14:05:56'),
(24, 26, 'Chandranagar', '2018-03-21 14:06:40', '2018-03-21 14:06:40'),
(25, 26, 'Parsa', '2018-03-21 14:07:17', '2018-03-21 14:07:17'),
(26, 26, 'Haripurwa', '2018-03-21 14:07:45', '2018-03-21 14:07:45'),
(27, 27, 'Debahigonahi', '2018-03-21 15:40:56', '2018-03-21 15:40:56'),
(28, 27, 'Madhavnarayan', '2018-03-21 15:43:03', '2018-03-21 15:43:03'),
(29, 27, 'Yamunamai', '2018-03-21 15:43:46', '2018-03-21 15:43:46'),
(30, 48, 'Pratappur', '2018-03-21 15:45:57', '2018-03-21 15:45:57'),
(31, 48, 'Palinandan', '2018-03-21 15:46:22', '2018-03-21 15:46:22'),
(32, 49, 'Madhyabindu', '2018-03-21 15:47:54', '2018-03-21 15:47:54'),
(33, 49, 'Kawaswoti', '2018-03-21 15:48:21', '2018-03-21 15:48:21'),
(34, 52, 'Gaidahawa', '2018-03-21 15:52:35', '2018-03-21 15:52:35'),
(35, 52, 'Kotahimai', '2018-03-21 15:52:56', '2018-03-21 15:52:56'),
(36, 52, 'Siddharthanagar', '2018-03-21 15:53:16', '2018-03-21 15:53:16'),
(37, 53, 'Siddharthanagar', '2018-03-21 15:53:49', '2018-03-21 15:53:49'),
(38, 53, 'Maharajgunj', '2018-03-21 15:54:10', '2018-03-21 15:54:10'),
(39, 53, 'Mayadevi', '2018-03-21 15:56:03', '2018-03-21 15:56:03'),
(40, 59, 'Tulsipur', '2018-03-21 15:56:34', '2018-03-21 15:56:34'),
(41, 59, 'Lamahi', '2018-03-21 15:56:53', '2018-03-21 15:56:53'),
(42, 59, 'Gadawa', '2018-03-21 15:57:18', '2018-03-21 15:57:18');

-- --------------------------------------------------------

--
-- Table structure for table `misc_provinces`
--

CREATE TABLE `misc_provinces` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `misc_provinces`
--

INSERT INTO `misc_provinces` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Province No. 1', '2018-03-04 19:50:19', '2018-03-21 12:35:55'),
(3, 'Province No. 2', '2018-03-04 19:51:16', '2018-03-21 12:36:13'),
(4, 'Province No. 3', '2018-03-20 16:46:19', '2018-03-21 12:36:25'),
(5, 'Province No. 4', '2018-03-21 12:32:19', '2018-03-21 12:32:19'),
(6, 'Province No. 5', '2018-03-21 12:32:46', '2018-03-21 12:32:46'),
(7, 'Province No. 6', '2018-03-21 12:33:03', '2018-03-21 12:34:58'),
(8, 'Province No. 7', '2018-03-21 12:34:21', '2018-03-21 12:34:21');

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `ngo_name` varchar(255) NOT NULL,
  `ngo_address` varchar(300) NOT NULL,
  `ngo_contact_no` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `established_date` varchar(50) NOT NULL,
  `primary_project` varchar(250) NOT NULL,
  `funded_by` varchar(250) DEFAULT NULL,
  `ngo_theme` varchar(225) NOT NULL,
  `dist_working` varchar(255) NOT NULL,
  `ngo_staff` varchar(255) NOT NULL,
  `vat_no` bigint(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`id`, `project_id`, `user_id`, `ngo_name`, `ngo_address`, `ngo_contact_no`, `email`, `established_date`, `primary_project`, `funded_by`, `ngo_theme`, `dist_working`, `ngo_staff`, `vat_no`, `created_at`, `updated_at`) VALUES
(90, NULL, 0, 'first ngo edited', 'address of first ngo', '9841234567', 'first_ngo@example.com', '2019-09-02', 'first ngo project', 'International organization', '', '', '', NULL, '2019-09-24 23:52:12', '2019-09-25 00:18:52');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view_users', 'web', '2020-02-18 20:37:13', '2020-02-18 20:37:13'),
(2, 'add_users', 'web', '2020-02-18 20:37:14', '2020-02-18 20:37:14'),
(3, 'edit_users', 'web', '2020-02-18 20:37:14', '2020-02-18 20:37:14'),
(4, 'delete_users', 'web', '2020-02-18 20:37:14', '2020-02-18 20:37:14'),
(5, 'view_roles', 'web', '2020-02-18 20:37:14', '2020-02-18 20:37:14'),
(6, 'add_roles', 'web', '2020-02-18 20:37:14', '2020-02-18 20:37:14'),
(7, 'edit_roles', 'web', '2020-02-18 20:37:14', '2020-02-18 20:37:14'),
(8, 'delete_roles', 'web', '2020-02-18 20:37:14', '2020-02-18 20:37:14'),
(9, 'view_ngos', 'web', '2020-02-23 09:29:44', '2020-02-23 09:29:44'),
(10, 'add_ngos', 'web', '2020-02-23 09:30:23', '2020-02-23 09:30:23'),
(11, 'edit_ngos', 'web', '2020-02-23 09:30:31', '2020-02-23 09:30:31'),
(12, 'delete_ngos', 'web', '2020-02-23 09:30:43', '2020-02-23 09:30:43'),
(13, 'view_projects', 'web', '2020-02-23 09:31:12', '2020-02-23 09:31:12'),
(14, 'add_projects', 'web', '2020-02-23 09:31:19', '2020-02-23 09:31:19'),
(15, 'edit_projects', 'web', '2020-02-23 09:31:26', '2020-02-23 09:31:26'),
(16, 'delete_projects', 'web', '2020-02-23 09:31:35', '2020-02-23 09:31:35'),
(17, 'view_prostats', 'web', '2020-02-23 09:32:13', '2020-02-23 09:32:13'),
(18, 'add_prostats', 'web', '2020-02-23 09:32:21', '2020-02-23 09:32:21'),
(19, 'edit_prostats', 'web', '2020-02-23 09:32:28', '2020-02-23 09:32:28'),
(20, 'delete_prostats', 'web', '2020-02-23 09:32:37', '2020-02-23 09:32:37'),
(21, 'view_activitys', 'web', '2020-02-23 09:33:04', '2020-02-23 09:33:04'),
(22, 'add_activitys', 'web', '2020-02-23 09:33:13', '2020-02-23 09:33:13'),
(23, 'edit_activitys', 'web', '2020-02-23 09:33:19', '2020-02-23 09:33:19'),
(24, 'delete_activitys', 'web', '2020-02-23 09:33:29', '2020-02-23 09:33:29'),
(25, 'view_settings', 'web', '2020-02-23 09:42:20', '2020-02-23 09:42:20'),
(26, 'add_settings', 'web', '2020-02-23 09:42:40', '2020-02-23 09:42:40'),
(27, 'edit_settings', 'web', '2020-02-23 09:42:46', '2020-02-23 09:42:46'),
(28, 'delete_settings', 'web', '2020-02-23 09:42:54', '2020-02-23 09:42:54'),
(29, 'view_miscellaneous_provinces', 'web', '2020-02-23 09:43:36', '2020-02-23 09:43:36'),
(30, 'add_miscellaneous_provinces', 'web', '2020-02-23 09:43:43', '2020-02-23 09:43:43'),
(31, 'edit_miscellaneous_provinces', 'web', '2020-02-23 09:43:55', '2020-02-23 09:43:55'),
(32, 'delete_miscellaneous_provinces', 'web', '2020-02-23 09:44:20', '2020-02-23 09:44:20'),
(33, 'view_miscellaneous_districts', 'web', '2020-02-23 09:44:42', '2020-02-23 09:44:42'),
(34, 'add_miscellaneous_districts', 'web', '2020-02-23 09:44:49', '2020-02-23 09:44:49'),
(35, 'edit_miscellaneous_districts', 'web', '2020-02-23 09:44:59', '2020-02-23 09:44:59'),
(36, 'delete_miscellaneous_districts', 'web', '2020-02-23 09:45:07', '2020-02-23 09:45:07'),
(37, 'view_miscellaneous_lgus', 'web', '2020-02-23 09:45:36', '2020-02-23 09:45:36'),
(38, 'add_miscellaneous_lgus', 'web', '2020-02-23 09:45:45', '2020-02-23 09:45:45'),
(39, 'edit_miscellaneous_lgus', 'web', '2020-02-23 09:45:51', '2020-02-23 09:45:51'),
(40, 'delete_miscellaneous_lgus', 'web', '2020-02-23 09:45:59', '2020-02-23 09:45:59'),
(41, 'view_checklistmgmts', 'web', '2020-02-23 09:46:22', '2020-02-23 09:46:22'),
(42, 'add_checklistmgmts', 'web', '2020-02-23 09:46:31', '2020-02-23 09:46:31'),
(43, 'edit_checklistmgmts', 'web', '2020-02-23 09:46:38', '2020-02-23 09:46:38'),
(44, 'delete_checklistmgmts', 'web', '2020-02-23 09:46:44', '2020-02-23 09:46:44'),
(45, 'view_currencymgmts', 'web', '2020-02-23 09:47:07', '2020-02-23 09:47:07'),
(46, 'add_currencymgmts', 'web', '2020-02-23 09:47:15', '2020-02-23 09:47:15'),
(47, 'edit_currencymgmts', 'web', '2020-02-23 09:47:24', '2020-02-23 09:47:24'),
(48, 'delete_currencymgmts', 'web', '2020-02-23 09:47:34', '2020-02-23 09:47:34'),
(49, 'view_visareccomendations', 'web', '2020-02-23 09:48:18', '2020-02-23 09:48:18'),
(50, 'add_visareccomendations', 'web', '2020-02-23 09:48:27', '2020-02-23 09:48:27'),
(51, 'edit_visareccomendations', 'web', '2020-02-23 09:48:34', '2020-02-23 09:48:34'),
(52, 'delete_visareccomendations', 'web', '2020-02-23 09:48:41', '2020-02-23 09:48:41'),
(53, 'view_importapprovals', 'web', '2020-02-23 09:49:10', '2020-02-23 09:49:10'),
(54, 'add_importapprovals', 'web', '2020-02-23 09:49:20', '2020-02-23 09:49:20'),
(55, 'edit_importapprovals', 'web', '2020-02-23 09:49:27', '2020-02-23 09:49:27'),
(56, 'delete_importapprovals', 'web', '2020-02-23 09:49:35', '2020-02-23 09:49:35'),
(57, 'view_generalagreements', 'web', '2020-02-23 09:49:58', '2020-02-23 09:49:58'),
(58, 'add_generalagreements', 'web', '2020-02-23 09:50:04', '2020-02-23 09:50:04'),
(59, 'edit_generalagreements', 'web', '2020-02-23 09:50:14', '2020-02-23 09:50:14'),
(60, 'delete_generalagreements', 'web', '2020-02-23 09:50:23', '2020-02-23 09:50:23'),
(61, 'view_ingos', 'web', '2020-02-23 09:50:54', '2020-02-23 09:50:54'),
(62, 'add_ingos', 'web', '2020-02-23 09:51:00', '2020-02-23 09:51:00'),
(63, 'edit_ingos', 'web', '2020-02-23 09:51:10', '2020-02-23 09:51:10'),
(64, 'delete_ingos', 'web', '2020-02-23 09:51:19', '2020-02-23 09:51:19'),
(65, 'view_projectreports', 'web', '2020-02-23 09:51:37', '2020-02-23 09:51:37'),
(66, 'add_projectreports', 'web', '2020-02-23 09:51:45', '2020-02-23 09:51:45'),
(67, 'edit_projectreports', 'web', '2020-02-23 09:51:52', '2020-02-23 09:51:52'),
(68, 'delete_projectreports', 'web', '2020-02-23 09:51:59', '2020-02-23 09:51:59'),
(69, 'view_thematic-activity-searches', 'web', '2020-02-23 09:52:18', '2020-02-23 09:52:18'),
(70, 'add_thematic-activity-searches', 'web', '2020-02-23 09:54:25', '2020-02-23 09:54:25'),
(71, 'edit_thematic-activity-searches', 'web', '2020-02-23 09:56:03', '2020-02-23 09:56:03'),
(72, 'delete_thematic-activity-searches', 'web', '2020-02-23 09:56:11', '2020-02-23 09:56:11'),
(73, 'view_address-budget-reports', 'web', '2020-02-23 09:56:42', '2020-02-23 09:56:42'),
(74, 'add_address-budget-reports', 'web', '2020-02-23 09:56:48', '2020-02-23 09:56:48'),
(75, 'edit_address-budget-reports', 'web', '2020-02-23 09:56:56', '2020-02-23 09:56:56'),
(76, 'delete_address-budget-reports', 'web', '2020-02-23 09:57:05', '2020-02-23 09:57:05'),
(77, 'view_expatiate-stay-reports', 'web', '2020-02-23 09:57:50', '2020-02-23 09:57:50'),
(78, 'add_expatiate-stay-reports', 'web', '2020-02-23 09:58:00', '2020-02-23 09:58:00'),
(79, 'edit_expatiate-stay-reports', 'web', '2020-02-23 09:58:07', '2020-02-23 09:58:07'),
(80, 'delete_expatiate-stay-reports', 'web', '2020-02-23 09:58:21', '2020-02-23 09:58:21'),
(81, 'view_activity-budget-reports', 'web', '2020-02-23 09:58:49', '2020-02-23 09:58:49'),
(82, 'add_activity-budget-reports', 'web', '2020-02-23 09:58:56', '2020-02-23 09:58:56'),
(83, 'edit_activity-budget-reports', 'web', '2020-02-23 09:59:03', '2020-02-23 09:59:03'),
(84, 'delete_activity-budget-reports', 'web', '2020-02-23 09:59:13', '2020-02-23 09:59:13'),
(85, 'view_theme-budget-reports', 'web', '2020-02-23 09:59:40', '2020-02-23 09:59:40'),
(86, 'add_theme-budget-reports', 'web', '2020-02-23 09:59:55', '2020-02-23 09:59:55'),
(87, 'edit_theme-budget-reports', 'web', '2020-02-23 10:00:02', '2020-02-23 10:00:02'),
(88, 'delete_theme-budget-reports', 'web', '2020-02-23 10:00:14', '2020-02-23 10:00:14'),
(89, 'view_coverage-detail-reports', 'web', '2020-02-23 10:00:37', '2020-02-23 10:00:37'),
(90, 'add_coverage-detail-reports', 'web', '2020-02-23 10:00:43', '2020-02-23 10:00:43'),
(91, 'edit_coverage-detail-reports', 'web', '2020-02-23 10:00:53', '2020-02-23 10:00:53'),
(92, 'delete_coverage-detail-reports', 'web', '2020-02-23 10:01:00', '2020-02-23 10:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_photos`
--

CREATE TABLE `product_photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `general_agreement_id` int(11) NOT NULL,
  `project_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_duration` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingo_name` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sw_date` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rewards` text COLLATE utf8mb4_unicode_ci,
  `amendment_date` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amendment_amount` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration_from_year` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration_from_month` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration_to_year` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration_to_month` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_status` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_budget_currency` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_budget_amount` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `technical_grant_currency` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `technical_grant_amount` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commodity_grant_currency` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commodity_grant_amount` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finance_grant_currency` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finance_grant_amount` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `administrative_cost_currency` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `administrative_cost_amount` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `programme_cost_currency` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `programme_cost_amount` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_total_budget_amount` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_technical_grant_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_commodity_grant_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_finance_grant_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_administrative_cost_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_programme_cost_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_total_budget_currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_technical_grant_currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_commodity_grant_currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_finance_grant_currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_administrative_cost_currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_programme_cost_currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hardware_percentage` int(11) DEFAULT NULL,
  `software_percentage` int(11) NOT NULL,
  `pre_app_letter_date` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_checklist` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `user_id`, `general_agreement_id`, `project_code`, `project_name`, `project_duration`, `ingo_name`, `sw_date`, `rewards`, `amendment_date`, `amendment_amount`, `duration_from_year`, `duration_from_month`, `duration_to_year`, `duration_to_month`, `project_status`, `total_budget_currency`, `total_budget_amount`, `technical_grant_currency`, `technical_grant_amount`, `commodity_grant_currency`, `commodity_grant_amount`, `finance_grant_currency`, `finance_grant_amount`, `administrative_cost_currency`, `administrative_cost_amount`, `programme_cost_currency`, `programme_cost_amount`, `new_total_budget_amount`, `new_technical_grant_amount`, `new_commodity_grant_amount`, `new_finance_grant_amount`, `new_administrative_cost_amount`, `new_programme_cost_amount`, `new_total_budget_currency`, `new_technical_grant_currency`, `new_commodity_grant_currency`, `new_finance_grant_currency`, `new_administrative_cost_currency`, `new_programme_cost_currency`, `hardware_percentage`, `software_percentage`, `pre_app_letter_date`, `document_checklist`, `created_at`, `updated_at`) VALUES
(7, 2, 16, 'PA-oYEit4', 'ChildCare', '5', '20', '21/03/2020', 'NA', '18/04/2020', '12000', NULL, NULL, NULL, NULL, 'New', '1', '36000', '1', '12000', '1', '12000', '1', '12000', '1', '12000', '1', '12000', '360', '120', '120', '120', '120', '120', '2', '2', '2', '2', '2', '2', 12, 12, '19/03/2020', '4,8', '2020-03-17 15:12:07', '2020-03-17 15:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `projectstatus`
--

CREATE TABLE `projectstatus` (
  `id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `project_code` varchar(50) NOT NULL,
  `act_type` varchar(255) DEFAULT NULL,
  `act_others` varchar(255) DEFAULT NULL,
  `out_put` varchar(255) DEFAULT NULL,
  `planned_date` date DEFAULT NULL,
  `pb_total` varchar(255) DEFAULT NULL,
  `province_id` varchar(255) DEFAULT NULL,
  `lgu_id` varchar(255) DEFAULT NULL,
  `district_id` varchar(255) DEFAULT NULL,
  `unitQ` varchar(255) DEFAULT NULL,
  `t_target` varchar(255) DEFAULT NULL,
  `comp_before` varchar(255) DEFAULT NULL,
  `target_yr` varchar(255) DEFAULT NULL,
  `remaining` varchar(255) DEFAULT NULL,
  `p_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2020-02-18 20:37:21', '2020-02-18 20:37:21'),
(2, 'User', 'web', '2020-02-19 09:57:58', '2020-02-19 09:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(13, 2),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(17, 2),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ICDovg71pvWIiVW5IVYJLj79YGHlL6yvaDSlnkxU', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:54.0) Gecko/20100101 Firefox/54.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSjdhRGZPMkFMemNSOU45NW9rV1p0UEF4ZVJ5aExSSFMzamNmV0x3aiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3Qvc3VzYW4vcHVibGljL2hvbWUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1499749691),
('Q0tApVowE5hfFMMc3ywCuU6kAxCqnOESF6Q9KiJ3', 1, '192.168.0.23', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:54.0) Gecko/20100101 Firefox/54.0', 'ZXlKcGRpSTZJbmxyZWxCek9VcDRSRFExYVdSS1RsbzFTV052YzJjOVBTSXNJblpoYkhWbElqb2lNVTlDVG5VMWFtRkNkVkJNV1ZZcllVUkZZV2RaZVU5SVUxZExVamxQU25wUGIzRXJXazk0WVROb2FqSjJSWGhGV0RFeU5VNTZkV2RWYjFWUE1Gd3ZLemRrVURsamNXVjBNM1E1UkU0MlIwOVBhMlprV25ZNVJXMVhOV1EwUWxKQ09XcG1Ra05zUzJSRk5VdFZhbTAxWkhkTWFFUnRaRlF6YzBJMVVFVjFSMk5VVmpKMFRrRjNVa3NyVkVKRE1sZHFSWGcyVVdKbVJqUndNMnd6TUVKNlJFUjNOWHBSZDJkalJXeHRLMlF3VFhoeU1UWXhjRGx4VDJwSFVqZEtXR2xUY25rNE5YSnJTVTUwVGxSWlZWcEdWak00WWxWWWEwdzBNelJZWTBZNVZrZzVVek5PV0RnM1hDOXNTWEpFTVZ3dmVISlNhWGx3Y25sTWFFbHNkWHByUkhSelVIRjBUelozWTBaQ04zSTJRVWxXTUUxTE1XMVNWMlpaYjNkRk9IRnpkSGxRYmtSYUsxbExjM1JDV2xrck9VMXdiMFZFUzJSaVRGd3ZjMmhQWkVWSVhDOTBkbVJDWVU0MVUxTTRkRUZVWkZkV1RsTjVWRzltZDFKamNGVlRlVzByTWxGbVJEVm9iVlE0TlVWM1FrVlJjRkZWYzNkd2VuQjRZemhyYjNCS2QySklNM1JHWjBKa1YwaG9hMUZZYlZwTmJqaG1NRU1yVkhNeWVVMHJkMFExYUVacWRHOVVPRU56U0hWWGFESmtORWRXZGxVeVNEaEphak4yYlV0cGJEaG9hbk41UkRaSlZGTktaVEpUZVRBd1hDOUdSWG8wUTBsUGEyWTFURU01ZFdOeVZFWldOazQyWTNCY0wxZDVhMlJuT1V0bVlsSk1aM1p5YnpoeVYyZE5aMnREYnpabUlpd2liV0ZqSWpvaU9HWmtNbUppTkRoallUaG1aalU1WTJVMU1EQmhPRGsxTkRNMU1XWmtaalUxTWpOaU5qUXlNamMwT1RJM1pEYzNNakl6TnpRME5XWTFNelF4T1RJM1pTSjk=', 1499747864);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `staff_designation` varchar(225) NOT NULL,
  `staff_number` varchar(225) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `project_id`, `staff_designation`, `staff_number`, `created_at`, `updated_at`) VALUES
(99, 75, 'sdcsdcsdcs', '123213', '2018-05-29', '2018-05-29'),
(100, 75, '123123', '1232131', '2018-05-29', '2018-05-29'),
(103, 76, 'dsdsdcsd', '232', '2018-05-29', '2018-05-29'),
(104, 76, 'wdewdwed', '23423423', '2018-05-29', '2018-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `state_id` int(10) UNSIGNED NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state_id`, `state_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Province No.1', '2018-01-18 11:12:23', '2018-01-18 11:12:23'),
(2, 2, 'Province No.2', '2018-01-18 11:12:23', '2018-01-18 11:12:23'),
(3, 3, 'Province No.3', '2018-01-18 11:12:37', '2018-01-18 11:12:37'),
(4, 4, 'Province No.4', '2018-01-18 11:12:37', '2018-01-18 11:12:37'),
(5, 5, 'Province No.5', '2018-01-18 11:12:50', '2018-01-18 11:12:50'),
(6, 6, 'Province No.6', '2018-01-18 11:12:50', '2018-01-18 11:12:50'),
(7, 7, 'Province No.7', '2018-01-18 11:12:59', '2018-01-18 11:12:59');

-- --------------------------------------------------------

--
-- Table structure for table `swc_activities`
--

CREATE TABLE `swc_activities` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `subject_type` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `admin_name` varchar(50) DEFAULT NULL,
  `approve` tinyint(4) NOT NULL DEFAULT '0',
  `ammend` tinyint(4) NOT NULL DEFAULT '0',
  `terminate` tinyint(4) NOT NULL DEFAULT '0',
  `comment` varchar(255) DEFAULT NULL,
  `terminated_at` timestamp NULL DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Women', '2018-06-15 06:30:15', '2018-06-15 00:45:15'),
(2, 'Children', '2018-06-15 06:30:29', '2018-06-15 00:45:29'),
(3, 'Senior Citizens', '2018-06-15 06:30:41', '2018-06-15 00:45:41'),
(5, 'Disabled People', '2018-06-15 06:30:57', '2018-06-15 00:45:57'),
(6, 'Education', '2018-06-15 06:31:10', '2018-06-15 00:46:10'),
(7, 'Environment', '2018-06-15 06:31:23', '2018-06-15 00:46:23'),
(8, 'Health', '2018-06-15 06:31:37', '2018-06-15 00:46:37'),
(9, 'Agriculture', '2019-05-30 01:36:14', '2019-06-09 23:19:33'),
(10, 'new', '2019-05-31 00:35:54', '2019-05-31 00:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@3hammers.com', 0, '2020-02-18 20:37:21', '$2y$10$mCRLUTQ22rmbj1w/eQMGue6Y3aizUjDP/aixJr6YfWks5CEg2SCFi', 'Rcw4o58azwjRsg9NxqJIcNnNutMdAKZx97pDAP1IiG7E1VU9okPuVBxXVbu3', '2020-02-18 20:37:21', '2020-02-19 10:19:52'),
(2, 'Manish', 'manish12@gmail.com', 1, NULL, '$2y$10$nqpudg1GYOkNzykDJe4O4O/o.Aw6468skXA9ndQ1gUVv0N8/5lDQy', NULL, '2020-03-17 12:16:23', '2020-03-17 12:18:00');

-- --------------------------------------------------------

--
-- Table structure for table `visa_date_range`
--

CREATE TABLE `visa_date_range` (
  `id` int(11) NOT NULL,
  `visa_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `date_from` varchar(255) DEFAULT NULL,
  `date_to` varchar(255) DEFAULT NULL,
  `dependent_name` varchar(255) DEFAULT NULL,
  `relationship` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visa_date_range`
--

INSERT INTO `visa_date_range` (`id`, `visa_id`, `name`, `position`, `date_from`, `date_to`, `dependent_name`, `relationship`, `created_at`, `updated_at`) VALUES
(27, '3', 'Rumus', 'Developer', '2018-05-28', '2018-06-07', 'Nothing', 'Nothing', '2018-05-29 14:07:37', '2018-05-29 14:07:37'),
(28, '3', 'Pratik', 'Student', '2018-05-28', '2018-06-08', 'No one', 'No one', '2018-05-29 14:07:37', '2018-05-29 14:07:37'),
(29, '4', 'sdfsdf', 'dfsdf', '2018-06-05', '2018-06-09', 'sfdsdf', 'sdfsdf', '2018-05-29 14:07:46', '2018-05-29 14:07:46'),
(30, '4', 'sdfsdf', 'sdfsdf', '2018-05-26', '2018-06-08', 'sdfsdf', 'sdfsdf', '2018-05-29 14:07:46', '2018-05-29 14:07:46'),
(31, '5', 'Pratik', 'Student11', '2018-05-28', '2018-06-08', 'No one11', 'No one11', '2018-05-29 14:07:57', '2018-05-29 14:07:57');

-- --------------------------------------------------------

--
-- Table structure for table `visa_recommendation`
--

CREATE TABLE `visa_recommendation` (
  `id` int(11) NOT NULL,
  `general_agreement_id` varchar(255) DEFAULT NULL,
  `ingo_id` int(11) NOT NULL,
  `project_id` varchar(255) DEFAULT NULL,
  `exp_name` varchar(255) DEFAULT NULL,
  `person_name` varchar(225) DEFAULT NULL,
  `relation` varchar(225) DEFAULT NULL,
  `recco_from` varchar(225) DEFAULT NULL,
  `recco_to` varchar(225) DEFAULT NULL,
  `sw_date` varchar(225) DEFAULT NULL,
  `hm_date` varchar(225) DEFAULT NULL,
  `visa_date` varchar(225) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visa_recommendation`
--

INSERT INTO `visa_recommendation` (`id`, `general_agreement_id`, `ingo_id`, `project_id`, `exp_name`, `person_name`, `relation`, `recco_from`, `recco_to`, `sw_date`, `hm_date`, `visa_date`, `updated_at`, `created_at`) VALUES
(14, '1', 3, '92', '34', 'Kshitiz Dhakal', 'Child', '2018-08-06', '2018-08-15', '2018-07-31', '2018-08-14', '2018-08-07', '2018-08-23 01:58:04', '2018-08-23 07:43:04'),
(15, '5', 19, '1', 'test', 'test', 'Spouse', '11/03/2020', '16/03/2020', '25/03/2020', '11/03/2020', '11/03/2020', '2020-03-17 09:37:34', '2020-03-17 09:37:34');

-- --------------------------------------------------------

--
-- Table structure for table `work_details`
--

CREATE TABLE `work_details` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `ngo` varchar(255) NOT NULL,
  `province_id` varchar(255) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `lgu_id` int(11) DEFAULT NULL,
  `ward` int(11) DEFAULT NULL,
  `activity` varchar(225) DEFAULT NULL,
  `activity_main` int(11) NOT NULL,
  `w_detail` varchar(225) DEFAULT NULL,
  `unit` varchar(225) DEFAULT NULL,
  `unit_cost` varchar(225) DEFAULT NULL,
  `total_cost` varchar(225) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_details`
--

INSERT INTO `work_details` (`id`, `project_id`, `ngo`, `province_id`, `district_id`, `lgu_id`, `ward`, `activity`, `activity_main`, `w_detail`, `unit`, `unit_cost`, `total_cost`, `updated_at`, `created_at`) VALUES
(23, 92, 'First NGO', '7', 6, 1, 6, 'swxwec', 5, '2,3,5,6,7', '23', '23', '23', '2018-08-23 00:58:00', '2018-08-27 06:47:16'),
(24, 92, 'First NGO', '7', 6, 1, 6, 'sdcsdcsdc', 4, '2,3,4,5', '24234', '2342', '234234', '2018-08-28 05:52:27', '2018-08-28 05:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `id` int(10) UNSIGNED NOT NULL,
  `zone_id` int(10) UNSIGNED NOT NULL,
  `zone_name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`id`, `zone_id`, `zone_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mechi', '2017-07-12 04:59:25', '2017-07-12 04:59:25'),
(2, 2, 'Rapti', '2017-07-12 04:59:25', '2017-07-12 04:59:25'),
(3, 3, 'Bagmati', '2017-07-12 04:59:25', '2017-07-12 04:59:25'),
(4, 4, 'Karnali', '2017-07-12 04:59:25', '2017-07-12 04:59:25'),
(5, 5, 'Sagarmatha', '2017-07-12 04:59:25', '2017-07-12 04:59:25'),
(6, 6, 'Koshi', '2017-07-12 04:59:25', '2017-07-12 04:59:25'),
(7, 7, 'Narayani', '2017-07-12 04:59:25', '2017-07-12 04:59:25'),
(8, 8, 'Mahakali', '2017-07-12 04:59:25', '2017-07-12 04:59:25'),
(9, 9, 'Gandaki', '2017-07-12 04:59:25', '2017-07-12 04:59:25'),
(10, 10, 'Janakpur', '2017-07-12 04:59:25', '2017-07-12 04:59:25'),
(11, 11, 'Lumbini', '2017-07-12 04:59:25', '2017-07-12 04:59:25'),
(12, 12, 'Seti', '2017-07-12 04:59:25', '2017-07-12 04:59:25'),
(13, 13, 'Bheri', '2017-07-12 04:59:25', '2017-07-12 04:59:25'),
(14, 14, 'Dhawalagiri', '2017-07-12 04:59:25', '2017-07-12 04:59:25'),
(15, 15, 'National', '2017-09-01 19:32:49', '2017-09-01 19:32:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approval_docs`
--
ALTER TABLE `approval_docs`
  ADD PRIMARY KEY (`id`) KEY_BLOCK_SIZE=10;

--
-- Indexes for table `assurance_letter`
--
ALTER TABLE `assurance_letter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checklistmgmt`
--
ALTER TABLE `checklistmgmt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_director`
--
ALTER TABLE `country_director`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency_mgmt`
--
ALTER TABLE `currency_mgmt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zone_id` (`zone_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `district_id` (`headquarter_per_dis`);

--
-- Indexes for table `evaluation_report`
--
ALTER TABLE `evaluation_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expartiate`
--
ALTER TABLE `expartiate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_users`
--
ALTER TABLE `front_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_agreement`
--
ALTER TABLE `general_agreement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_agreement_docs`
--
ALTER TABLE `general_agreement_docs`
  ADD PRIMARY KEY (`id`) KEY_BLOCK_SIZE=11;

--
-- Indexes for table `general_agreement_renew`
--
ALTER TABLE `general_agreement_renew`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_agreement_theme`
--
ALTER TABLE `general_agreement_theme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `import_approval_detail`
--
ALTER TABLE `import_approval_detail`
  ADD PRIMARY KEY (`id`) KEY_BLOCK_SIZE=10;

--
-- Indexes for table `ingo`
--
ALTER TABLE `ingo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ministry`
--
ALTER TABLE `ministry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ministry_approval_docs`
--
ALTER TABLE `ministry_approval_docs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ministry_documents`
--
ALTER TABLE `ministry_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misc_districts`
--
ALTER TABLE `misc_districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `province_id` (`province_id`);

--
-- Indexes for table `misc_lgus`
--
ALTER TABLE `misc_lgus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `district_id` (`district_id`);

--
-- Indexes for table `misc_provinces`
--
ALTER TABLE `misc_provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`ngo_name`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_photos`
--
ALTER TABLE `product_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_photos_product_id_foreign` (`product_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `projects_project_code_unique` (`project_code`),
  ADD UNIQUE KEY `projects_project_name_unique` (`project_name`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `projectstatus`
--
ALTER TABLE `projectstatus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `swc_activities`
--
ALTER TABLE `swc_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visa_date_range`
--
ALTER TABLE `visa_date_range`
  ADD PRIMARY KEY (`id`) KEY_BLOCK_SIZE=10;

--
-- Indexes for table `visa_recommendation`
--
ALTER TABLE `visa_recommendation`
  ADD PRIMARY KEY (`id`) KEY_BLOCK_SIZE=10;

--
-- Indexes for table `work_details`
--
ALTER TABLE `work_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `approval_docs`
--
ALTER TABLE `approval_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `assurance_letter`
--
ALTER TABLE `assurance_letter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `checklistmgmt`
--
ALTER TABLE `checklistmgmt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `country_director`
--
ALTER TABLE `country_director`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `currency_mgmt`
--
ALTER TABLE `currency_mgmt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;
--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `evaluation_report`
--
ALTER TABLE `evaluation_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `expartiate`
--
ALTER TABLE `expartiate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `front_users`
--
ALTER TABLE `front_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `general_agreement`
--
ALTER TABLE `general_agreement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `general_agreement_docs`
--
ALTER TABLE `general_agreement_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `general_agreement_renew`
--
ALTER TABLE `general_agreement_renew`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `general_agreement_theme`
--
ALTER TABLE `general_agreement_theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `import_approval_detail`
--
ALTER TABLE `import_approval_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `ingo`
--
ALTER TABLE `ingo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `ministry`
--
ALTER TABLE `ministry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ministry_approval_docs`
--
ALTER TABLE `ministry_approval_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ministry_documents`
--
ALTER TABLE `ministry_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `misc_districts`
--
ALTER TABLE `misc_districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `misc_lgus`
--
ALTER TABLE `misc_lgus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `misc_provinces`
--
ALTER TABLE `misc_provinces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_photos`
--
ALTER TABLE `product_photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `projectstatus`
--
ALTER TABLE `projectstatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `swc_activities`
--
ALTER TABLE `swc_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `visa_date_range`
--
ALTER TABLE `visa_date_range`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `visa_recommendation`
--
ALTER TABLE `visa_recommendation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `work_details`
--
ALTER TABLE `work_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_ibfk_1` FOREIGN KEY (`zone_id`) REFERENCES `zones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `misc_districts`
--
ALTER TABLE `misc_districts`
  ADD CONSTRAINT `misc_districts_ibfk_1` FOREIGN KEY (`province_id`) REFERENCES `misc_provinces` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `misc_lgus`
--
ALTER TABLE `misc_lgus`
  ADD CONSTRAINT `misc_lgus_ibfk_1` FOREIGN KEY (`district_id`) REFERENCES `misc_districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_photos`
--
ALTER TABLE `product_photos`
  ADD CONSTRAINT `product_photos_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
