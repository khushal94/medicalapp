-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 12, 2021 at 06:24 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mps`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambulance_bookings`
--

CREATE TABLE `ambulance_bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` int(10) NOT NULL,
  `first_time` tinyint(1) DEFAULT 0,
  `covid_symptoms` tinyint(1) DEFAULT 0,
  `date` date NOT NULL,
  `time_start` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_end` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visited` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `user_id`, `doctor_id`, `first_time`, `covid_symptoms`, `date`, `time_start`, `time_end`, `visited`, `status`, `description`, `created_at`, `updated_at`) VALUES
(32, 21, 23, NULL, NULL, '2021-05-28', '11:47', NULL, '1', 0, 'test', '2021-05-28 06:17:11', '2021-07-12 10:53:49');

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

CREATE TABLE `billings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `payment_mode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `billing_items`
--

CREATE TABLE `billing_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `billing_id` bigint(20) UNSIGNED NOT NULL,
  `invoice_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minimum_amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startingdate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endingdate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `name`, `code`, `category`, `discount_amount`, `discount_type`, `minimum_amount`, `startingdate`, `endingdate`, `image`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Happy Hours', 'happydeal', 'nurse-visit', '1000', 'A', '2000', '28/05/2021', '29/05/2021', 'coupons/june/IMG1622561791.jpg', 0, '2021-05-28 07:31:00', '2021-07-11 08:56:53'),
(2, 'Super Deals', 'deals', NULL, '3000', 'A', '10000', '25/06/2021', '26/06/2021', 'coupons/june/IMG1622561768.png', 0, '2021-06-01 10:03:49', '2021-06-01 10:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`patient`)),
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `speciality` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `availability` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `is_available` tinyint(1) NOT NULL DEFAULT 0,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `user_id`, `name`, `email`, `phone`, `birthday`, `gender`, `city`, `state`, `country`, `lat`, `long`, `description`, `patient`, `rating`, `speciality`, `experience`, `availability`, `registration`, `qualification`, `image`, `address`, `is_featured`, `is_available`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 29, 'PANKAJ', 'pankaj@gmail.com', '555435', '02/02/1998', 'Male', 'Udaipur', 'Rajasthan', 'India', '4535', '43534', 'gdfgfd', NULL, NULL, 'Oncology', '4', NULL, '123123123', 'Mbbs', 'doctors/may/IMG.jpg', '435fdgf', 0, 0, 0, '2021-05-28 07:22:33', '2021-07-07 09:34:50'),
(2, 23, 'John Doe', 'johndoe@gmail.com', '9785558555', '05/29/2021', 'Male', 'Udaipur', 'Rajasthan', 'India', NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet mauris enim. Donec sed consectetur augue. Cras venenatis vel mi sit amet varius. Vivamus sollicitudin sollicitudin blandit. Donec bibendum felis elit. Pellentesque ac vestibulum ex. Quisque sed egestas metus. Suspendisse faucibus erat nisl, eget venenatis arcu fringilla a. Ut tristique justo vel ligula ultricies, quis efficitur risus auctor. Donec fringilla vestibulum nisl. Vestibulum hendrerit interdum urna ac dictum. Sed laoreet justo sapien, in placerat nibh varius non. Mauris rhoncus imperdiet diam tempor iaculis. Cras sollicitudin malesuada posuere. Praesent lacus diam, venenatis vel consectetur id, lacinia eget sem.\r\n\r\nDonec interdum diam sit amet dolor suscipit mattis. Suspendisse in turpis mi. Morbi aliquet, ante in finibus facilisis, ligula ante tincidunt arcu, nec viverra nunc risus a metus. Ut sollicitudin, risus sed aliquet ultrices, justo nisl tempor turpis, in ultricies ante turpis eu magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ornare mi magna, ultrices ultricies nisi imperdiet sed. Proin ac consectetur velit, vitae facilisis purus. Suspendisse vestibulum purus sodales, hendrerit ex ullamcorper, scelerisque metus. In nec auctor lacus. Phasellus luctus urna quam, eu sollicitudin enim vulputate ut. Etiam in erat viverra, vulputate nisl cursus, porta neque. Nunc odio nulla, sollicitudin nec sem eu, placerat venenatis quam. Nullam dignissim dolor id vestibulum pharetra. Aenean fringilla, libero sit amet suscipit consectetur, turpis turpis vulputate tortor, in vulputate ipsum mauris et lacus. Maecenas semper porttitor nibh eu rhoncus. Curabitur egestas augue turpis, ac fringilla purus dignissim at.\r\n\r\nMorbi fermentum neque ut luctus porttitor. Nullam et quam dolor. Sed molestie diam eu leo elementum, in tempus magna tincidunt. Aliquam aliquet quam in lacus aliquam sodales. Nunc lobortis, purus id tempor feugiat, magna sapien tristique arcu, quis posuere magna eros et elit. Mauris sit amet leo felis. Morbi a nibh congue, semper dolor quis, scelerisque tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam gravida pretium leo, quis consequat lacus ultricies et. Suspendisse euismod iaculis laoreet. Curabitur ut laoreet diam.', '211', '4', 'Cardiologist', '4', NULL, NULL, NULL, 'may/IMG.png', 'Udaipur', 0, 0, 1, '2021-05-28 02:00:36', '2021-05-28 02:00:36'),
(3, 24, 'William Albert', 'william@gmail.com', '9785558551', '05/29/2021', 'Male', 'Udaipur', 'Rajasthan', 'India', NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet mauris enim. Donec sed consectetur augue. Cras venenatis vel mi sit amet varius. Vivamus sollicitudin sollicitudin blandit. Donec bibendum felis elit. Pellentesque ac vestibulum ex. Quisque sed egestas metus. Suspendisse faucibus erat nisl, eget venenatis arcu fringilla a. Ut tristique justo vel ligula ultricies, quis efficitur risus auctor. Donec fringilla vestibulum nisl. Vestibulum hendrerit interdum urna ac dictum. Sed laoreet justo sapien, in placerat nibh varius non. Mauris rhoncus imperdiet diam tempor iaculis. Cras sollicitudin malesuada posuere. Praesent lacus diam, venenatis vel consectetur id, lacinia eget sem.\r\n\r\nDonec interdum diam sit amet dolor suscipit mattis. Suspendisse in turpis mi. Morbi aliquet, ante in finibus facilisis, ligula ante tincidunt arcu, nec viverra nunc risus a metus. Ut sollicitudin, risus sed aliquet ultrices, justo nisl tempor turpis, in ultricies ante turpis eu magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ornare mi magna, ultrices ultricies nisi imperdiet sed. Proin ac consectetur velit, vitae facilisis purus. Suspendisse vestibulum purus sodales, hendrerit ex ullamcorper, scelerisque metus. In nec auctor lacus. Phasellus luctus urna quam, eu sollicitudin enim vulputate ut. Etiam in erat viverra, vulputate nisl cursus, porta neque. Nunc odio nulla, sollicitudin nec sem eu, placerat venenatis quam. Nullam dignissim dolor id vestibulum pharetra. Aenean fringilla, libero sit amet suscipit consectetur, turpis turpis vulputate tortor, in vulputate ipsum mauris et lacus. Maecenas semper porttitor nibh eu rhoncus. Curabitur egestas augue turpis, ac fringilla purus dignissim at.\r\n\r\nMorbi fermentum neque ut luctus porttitor. Nullam et quam dolor. Sed molestie diam eu leo elementum, in tempus magna tincidunt. Aliquam aliquet quam in lacus aliquam sodales. Nunc lobortis, purus id tempor feugiat, magna sapien tristique arcu, quis posuere magna eros et elit. Mauris sit amet leo felis. Morbi a nibh congue, semper dolor quis, scelerisque tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam gravida pretium leo, quis consequat lacus ultricies et. Suspendisse euismod iaculis laoreet. Curabitur ut laoreet diam.', '652', '3', 'General surgery', '4', NULL, NULL, NULL, 'may/IMG.png', 'Udaipur', 0, 0, 1, '2021-05-28 02:01:31', '2021-05-28 02:01:31'),
(4, 25, 'Robbin Dicasto', 'robbin@gmail.com', '9785558552', '05/29/2021', 'Male', 'Udaipur', 'Rajasthan', 'India', NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet mauris enim. Donec sed consectetur augue. Cras venenatis vel mi sit amet varius. Vivamus sollicitudin sollicitudin blandit. Donec bibendum felis elit. Pellentesque ac vestibulum ex. Quisque sed egestas metus. Suspendisse faucibus erat nisl, eget venenatis arcu fringilla a. Ut tristique justo vel ligula ultricies, quis efficitur risus auctor. Donec fringilla vestibulum nisl. Vestibulum hendrerit interdum urna ac dictum. Sed laoreet justo sapien, in placerat nibh varius non. Mauris rhoncus imperdiet diam tempor iaculis. Cras sollicitudin malesuada posuere. Praesent lacus diam, venenatis vel consectetur id, lacinia eget sem.\r\n\r\nDonec interdum diam sit amet dolor suscipit mattis. Suspendisse in turpis mi. Morbi aliquet, ante in finibus facilisis, ligula ante tincidunt arcu, nec viverra nunc risus a metus. Ut sollicitudin, risus sed aliquet ultrices, justo nisl tempor turpis, in ultricies ante turpis eu magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ornare mi magna, ultrices ultricies nisi imperdiet sed. Proin ac consectetur velit, vitae facilisis purus. Suspendisse vestibulum purus sodales, hendrerit ex ullamcorper, scelerisque metus. In nec auctor lacus. Phasellus luctus urna quam, eu sollicitudin enim vulputate ut. Etiam in erat viverra, vulputate nisl cursus, porta neque. Nunc odio nulla, sollicitudin nec sem eu, placerat venenatis quam. Nullam dignissim dolor id vestibulum pharetra. Aenean fringilla, libero sit amet suscipit consectetur, turpis turpis vulputate tortor, in vulputate ipsum mauris et lacus. Maecenas semper porttitor nibh eu rhoncus. Curabitur egestas augue turpis, ac fringilla purus dignissim at.\r\n\r\nMorbi fermentum neque ut luctus porttitor. Nullam et quam dolor. Sed molestie diam eu leo elementum, in tempus magna tincidunt. Aliquam aliquet quam in lacus aliquam sodales. Nunc lobortis, purus id tempor feugiat, magna sapien tristique arcu, quis posuere magna eros et elit. Mauris sit amet leo felis. Morbi a nibh congue, semper dolor quis, scelerisque tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam gravida pretium leo, quis consequat lacus ultricies et. Suspendisse euismod iaculis laoreet. Curabitur ut laoreet diam.', '635', '5', 'General surgery', '4', NULL, NULL, NULL, 'may/IMG.png', 'Udaipur', 0, 0, 1, '2021-05-28 02:02:17', '2021-05-28 02:02:17'),
(5, 26, 'James William', 'james@gmail.com', '9785558553', '05/28/2021', 'Male', 'Udaipur', 'Rajasthan', 'India', NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet mauris enim. Donec sed consectetur augue. Cras venenatis vel mi sit amet varius. Vivamus sollicitudin sollicitudin blandit. Donec bibendum felis elit. Pellentesque ac vestibulum ex. Quisque sed egestas metus. Suspendisse faucibus erat nisl, eget venenatis arcu fringilla a. Ut tristique justo vel ligula ultricies, quis efficitur risus auctor. Donec fringilla vestibulum nisl. Vestibulum hendrerit interdum urna ac dictum. Sed laoreet justo sapien, in placerat nibh varius non. Mauris rhoncus imperdiet diam tempor iaculis. Cras sollicitudin malesuada posuere. Praesent lacus diam, venenatis vel consectetur id, lacinia eget sem.\r\n\r\nDonec interdum diam sit amet dolor suscipit mattis. Suspendisse in turpis mi. Morbi aliquet, ante in finibus facilisis, ligula ante tincidunt arcu, nec viverra nunc risus a metus. Ut sollicitudin, risus sed aliquet ultrices, justo nisl tempor turpis, in ultricies ante turpis eu magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ornare mi magna, ultrices ultricies nisi imperdiet sed. Proin ac consectetur velit, vitae facilisis purus. Suspendisse vestibulum purus sodales, hendrerit ex ullamcorper, scelerisque metus. In nec auctor lacus. Phasellus luctus urna quam, eu sollicitudin enim vulputate ut. Etiam in erat viverra, vulputate nisl cursus, porta neque. Nunc odio nulla, sollicitudin nec sem eu, placerat venenatis quam. Nullam dignissim dolor id vestibulum pharetra. Aenean fringilla, libero sit amet suscipit consectetur, turpis turpis vulputate tortor, in vulputate ipsum mauris et lacus. Maecenas semper porttitor nibh eu rhoncus. Curabitur egestas augue turpis, ac fringilla purus dignissim at.\r\n\r\nMorbi fermentum neque ut luctus porttitor. Nullam et quam dolor. Sed molestie diam eu leo elementum, in tempus magna tincidunt. Aliquam aliquet quam in lacus aliquam sodales. Nunc lobortis, purus id tempor feugiat, magna sapien tristique arcu, quis posuere magna eros et elit. Mauris sit amet leo felis. Morbi a nibh congue, semper dolor quis, scelerisque tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam gravida pretium leo, quis consequat lacus ultricies et. Suspendisse euismod iaculis laoreet. Curabitur ut laoreet diam.', '965', '5', 'General surgery', '4', NULL, NULL, NULL, 'may/IMG.png', 'Udaipur', 0, 0, 1, '2021-05-28 02:03:02', '2021-05-28 02:03:02');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trade_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `generic_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_sell` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manufacturer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_origin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uses` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alternate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `side_effect` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direction_use` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `therapeutic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`id`, `trade_name`, `generic_name`, `note`, `rate`, `type_sell`, `manufacturer`, `country_origin`, `salt`, `uses`, `alternate`, `side_effect`, `direction_use`, `therapeutic`, `created_at`, `updated_at`) VALUES
(1, 'Abraxane', 'albumin-bound paclitaxel', 'Albumin Bound Paclitaxel', '3000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-01 03:27:39', '2021-06-02 04:54:06'),
(2, 'Combiflam Tablet', 'combiflam-tablet', 'Prescription Required', '400', '20 tablets in 1 strip', 'Sanofi India  Ltd', 'India', 'Ibuprofen (400mg) + Paracetamol (325mg).', 'Pain relief,Fever.', 'Pyreflam 400 mg/325 mg Tablet,Fenceta 400mg/325mg Tablet,Flexon Tablet,Cincofen 400 mg/325 mg Tablet,Rubigesic P 400 mg/325 mg Tablet,', 'Heartburn,Indigestion,Nausea,Stomach pain,', 'Take this medicine in the dose and duration as advised by your physician. Swallow it as a whole. Do not chew, crush or break it. Combiflam Tablet is to be taken with food.', 'PAIN ANALGESICS', '2021-06-14 06:24:03', '2021-06-14 06:31:16'),
(3, 'Cremaffin Plus  Refreshing Sugar Free Syrup', 'Cremaffin Plus  Refreshing Sugar Free Syrup', 'Prescription Required', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-16 10:45:03', '2021-06-16 10:45:03'),
(4, 'Clavam 625 Tablet', 'Clavam 625 Tablet', 'Prescription Required', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-16 10:45:03', '2021-06-16 10:45:03'),
(5, 'Cefix 200 Tablet', 'Cefix 200 Tablet', 'Prescription Required', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-16 10:45:03', '2021-06-16 10:45:03'),
(6, 'Cyclopam Tablet', 'Cyclopam Tablet', 'Prescription Required', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-16 10:45:03', '2021-06-16 10:45:03'),
(7, 'Ceftum 500mg Tablet', 'Ceftum 500mg Tablet', 'Prescription Required', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-16 10:45:03', '2021-06-16 10:45:03'),
(8, 'Candid-B Cream', 'Candid-B Cream', 'Prescription Required', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-16 10:45:03', '2021-06-16 10:45:03'),
(9, 'Cheston Cold Tablet', 'Cheston Cold Tablet', 'N', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-16 10:45:03', '2021-06-16 10:45:03'),
(10, 'Clexane 40mg Injection', 'Clexane 40mg Injection', 'N', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-16 10:45:03', '2021-06-16 10:45:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `labbooking`
--

CREATE TABLE `labbooking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_paid` tinyint(1) DEFAULT 0,
  `test_data` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `package_selected` tinyint(1) DEFAULT 0,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `labbooking`
--

INSERT INTO `labbooking` (`id`, `user_id`, `payment_id`, `is_paid`, `test_data`, `package_id`, `package_selected`, `status`, `created_at`, `updated_at`) VALUES
(1, 21, NULL, 0, '[{\"id\":1,\"test_name\":\"Lipid Profile\",\"rate\":999,\"comment\":\"The lipid panel is a group of tests used to evaluate cardiac risk. It includes cholesterol and triglyceride levels.\",\"created_at\":\"2021-06-03T11:45:27.000000Z\",\"updated_at\":\"2021-06-03T11:45:27.000000Z\"},{\"id\":2,\"test_name\":\"Complete Blood Count\",\"rate\":999,\"comment\":\"This test, also known as a CBC, is the most common blood test performed. It measures the types and numbers of cells in the blood, including red and white blood cells and platelets. This test is used to determine general health status, screen for disorders and evaluate nutritional status. It can help evaluate symptoms such as weakness, fatigue and bruising, and can help diagnose conditions such as anemia, leukemia, malaria and infection.\",\"created_at\":\"2021-06-03T11:45:40.000000Z\",\"updated_at\":\"2021-06-03T11:45:40.000000Z\"}]', NULL, 0, 'pending', '2021-06-04 08:07:32', '2021-06-04 08:07:32'),
(2, 21, NULL, 0, '[{\"id\":1,\"test_name\":\"Lipid Profile\",\"rate\":999,\"comment\":\"The lipid panel is a group of tests used to evaluate cardiac risk. It includes cholesterol and triglyceride levels.\",\"created_at\":\"2021-06-03T11:45:27.000000Z\",\"updated_at\":\"2021-06-03T11:45:27.000000Z\"}]', NULL, 0, 'pending', '2021-06-04 08:10:06', '2021-06-04 08:10:06'),
(3, 21, NULL, 0, '[{\"id\":1,\"test_name\":\"Lipid Profile\",\"rate\":999,\"comment\":\"The lipid panel is a group of tests used to evaluate cardiac risk. It includes cholesterol and triglyceride levels.\",\"created_at\":\"2021-06-03T11:45:27.000000Z\",\"updated_at\":\"2021-06-03T11:45:27.000000Z\"}]', NULL, 0, 'pending', '2021-06-04 08:10:31', '2021-06-04 08:10:31'),
(4, 21, NULL, 0, NULL, 4, 1, 'pending', '2021-06-04 08:22:45', '2021-06-04 08:22:45'),
(5, 21, NULL, 0, NULL, NULL, 1, 'pending', '2021-06-12 07:59:48', '2021-06-12 07:59:48'),
(6, 21, NULL, 0, '[{\"id\":1,\"test_name\":\"Lipid Profile\",\"rate\":999,\"comment\":\"The lipid panel is a group of tests used to evaluate cardiac risk. It includes cholesterol and triglyceride levels.\",\"created_at\":\"2021-06-03T11:45:27.000000Z\",\"updated_at\":\"2021-06-03T11:45:27.000000Z\"}]', NULL, 0, 'pending', '2021-06-12 07:59:48', '2021-06-12 07:59:48'),
(7, 21, NULL, 0, NULL, NULL, 1, 'pending', '2021-06-12 08:05:14', '2021-06-12 08:05:14'),
(8, 21, NULL, 0, '[{\"id\":1,\"test_name\":\"Lipid Profile\",\"rate\":999,\"comment\":\"The lipid panel is a group of tests used to evaluate cardiac risk. It includes cholesterol and triglyceride levels.\",\"created_at\":\"2021-06-03T11:45:27.000000Z\",\"updated_at\":\"2021-06-03T11:45:27.000000Z\"}]', NULL, 0, 'pending', '2021-06-12 08:05:14', '2021-06-12 08:05:14'),
(9, 21, NULL, 0, '[{\"id\":1,\"test_name\":\"Lipid Profile\",\"rate\":999,\"comment\":\"The lipid panel is a group of tests used to evaluate cardiac risk. It includes cholesterol and triglyceride levels.\",\"created_at\":\"2021-06-03T06:15:27.000000Z\",\"updated_at\":\"2021-06-03T06:15:27.000000Z\"}]', NULL, 0, 'pending', '2021-06-17 11:01:35', '2021-06-17 11:01:35'),
(10, 21, NULL, 0, NULL, NULL, 1, 'pending', '2021-06-17 11:01:35', '2021-06-17 11:01:35');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2020_09_18_180127_create_doctors_table', 1),
(223, '2019_08_19_000000_create_failed_jobs_table', 2),
(224, '2020_09_10_000506_create_drugs_table', 2),
(225, '2020_09_10_103451_create_prescriptions_table', 2),
(226, '2020_09_10_154523_create_prescription_drugs_table', 2),
(227, '2020_09_14_174033_create_patients_table', 2),
(228, '2020_09_16_095938_create_settings_table', 2),
(229, '2020_09_16_230135_create_tests_table', 2),
(230, '2020_09_16_230830_create_prescription_tests_table', 2),
(231, '2020_09_18_010549_create_appointments_table', 2),
(232, '2020_09_19_164615_create_billings_table', 2),
(233, '2020_09_19_180540_create_billing_items_table', 2),
(234, '2021_05_24_142537_create_nurses_table', 2),
(235, '2021_05_24_143111_create_doctors_table', 2),
(236, '2021_05_25_115628_create_coupon_table', 2),
(237, '2021_05_27_131552_create_ratings_table', 2),
(238, '2021_05_27_132225_create_labbooking_table', 2),
(239, '2021_05_27_132231_create_nursebooking_table', 2),
(240, '2021_05_28_075815_create_speciality_table', 2),
(243, '2021_05_29_120818_add_image_column_to_patients', 3),
(244, '2021_05_29_120940_add_image_column_to_nurses', 3),
(245, '2021_06_01_143434_create_orders_table', 4),
(246, '2021_06_01_150356_add_featured_column_to_doctors', 5),
(247, '2021_06_01_150954_add_image_column_to_coupons', 6),
(250, '2021_06_02_143347_create_orders_table', 7),
(251, '2021_06_02_154722_add_rate_column_to_drugs', 8),
(253, '2021_06_06_045706_create_package_table', 9),
(256, '2021_06_06_144821_create_nursebooking_table', 10),
(258, '2021_06_07_154312_add_address_column_to_nursebooking', 11),
(261, '2021_06_14_175339_create_payments_table', 12),
(262, '2021_06_17_151626_create_ambulance_booking_table', 13),
(267, '2021_06_17_152215_create_ambulance_bookings_table', 14),
(268, '2021_06_18_160322_create_labbookings_table', 14),
(269, '2021_06_18_165721_add_extra_column_prescriptions', 15),
(270, '2021_06_18_170534_add_rate_column_tests', 16),
(271, '2021_06_27_103748_add_age_to_patients', 17),
(273, '2021_07_04_152420_add_extra_column_to_doctors', 18),
(274, '2021_07_05_054622_add_spec_column_to_nurses', 19),
(275, '2021_07_06_063049_add_category_column_to_coupons', 20),
(276, '2021_07_12_152141_add_status_to_ambulancebookings', 21),
(277, '2021_07_12_152213_add_status_to_nursebookings', 22),
(278, '2021_07_12_152311_add_status_to_appointments', 22);

-- --------------------------------------------------------

--
-- Table structure for table `nursebooking`
--

CREATE TABLE `nursebooking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nurse_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visit_date` date NOT NULL,
  `visit_time` time NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nursebooking`
--

INSERT INTO `nursebooking` (`id`, `nurse_id`, `patient_id`, `visit_date`, `visit_time`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '2021-06-21', '01:33:00', 'Centre for Health Informatics (CHI)\r\nNational Institute of Health and Family Welfare\r\nBaba Gang Nath Marg, Munirka, New Delhi-110067.', 0, '2021-06-06 23:17:27', '2021-07-12 10:41:59');

-- --------------------------------------------------------

--
-- Table structure for table `nurses`
--

CREATE TABLE `nurses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`patient`)),
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `availability` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nurses`
--

INSERT INTO `nurses` (`id`, `user_id`, `name`, `email`, `birthday`, `phone`, `gender`, `city`, `state`, `country`, `lat`, `long`, `description`, `patient`, `rating`, `address`, `qualification`, `availability`, `image`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 28, 'HARSHA', 'harsha@gmail.com', '12/28/2020', '454354345', 'Female', 'Udaipur', 'Rajasthan', 'India', '34324', '423423', 'gdfgdfg', NULL, NULL, 'fgfdgfd', 'Bsc', NULL, 'nurses/july/IMG28.jpg', 0, '2021-05-28 06:27:12', '2021-07-05 23:59:00'),
(3, 25, 'Jasvender', 'Jas@gmail.com', '05/02/2021', '45435345', 'Male', 'Udaipur', 'Rajasthan', 'India', '321321', '32321', 'dsad', NULL, NULL, 'vgfv', NULL, NULL, NULL, 1, '2021-05-27 10:26:30', '2021-05-27 10:26:30'),
(4, 31, 'Lady Harriet Acland', 'nurse@gmail.com', '03/10/1992', '9988779967', 'Female', 'Udaipur', 'Rajasthan', 'India', '434', '3432', 'Nursing is a profession within the health care sector focused on the care of individuals, families, and communities so they may attain, maintain, or recover optimal health and quality of life. Nurses may be differentiated from other health care providers by their approach to patient care, training, and scope of practice. Nurses practice in many specialties with differing levels of prescription authority. Nurses comprise the largest component of most healthcare environments;[1][2] but there is evidence of international shortages of qualified nurses.[3] Many nurses provide care within the ordering scope of physicians, and this traditional role has shaped the public image of nurses as care providers. Nurse practitioners are however permitted by most jurisdictions to practice independently in a variety of settings. Since the postwar period, nurse education has undergone a process of diversification towards advanced and specialized credentials, and many of the traditional regulations and provider roles are changing.', NULL, NULL, 'Govardhan Vilas', NULL, NULL, 'nurses/june/IMG1622902418.jpg', 0, '2021-06-05 08:43:38', '2021-06-05 08:43:38');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `medicines` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Is_paid` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `medicines`, `payment_id`, `type`, `status`, `Is_paid`, `created_at`, `updated_at`) VALUES
(2, 21, '[{\"id\":1,\"trade_name\":\"Paracetamol IP 500mg\",\"generic_name\":\"Paracetamol IP 500mg\",\"pharma\":\"Sun Pharmacy PVT LTD\",\"type\":\"Tablet\",\"rate\":12.5}]', NULL, NULL, 'Pending', 0, '2021-05-31 07:46:20', '2021-07-12 10:49:14');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lab_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lab_test_ids` int(11) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `name`, `description`, `lab_name`, `lab_test_ids`, `image`, `rate`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'UdaipurMed Shield', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut aliquet neque. Mauris pellentesque turpis et eros porta, non sagittis lorem suscipit. Cras ut massa aliquam, facilisis risus eget, dictum quam. Donec molestie maximus metus, a blandit lorem convallis et. Integer scelerisque egestas molestie. Ut accumsan, est ac mollis auctor, orci leo cursus ligula, et varius ex nisi in lectus. Duis sed ligula vitae odio dapibus sagittis. Phasellus blandit venenatis felis, a malesuada est posuere ac.\r\n\r\nCurabitur erat mi, euismod eget egestas vitae, imperdiet sit amet urna. Nullam at dictum libero. Suspendisse potenti. Donec consectetur accumsan enim eu venenatis. Aenean quis mauris erat. Donec lacus quam, scelerisque id velit eget, gravida faucibus dolor. Pellentesque faucibus semper nisl, eu venenatis tortor placerat non. Nam tempus lacinia lobortis.\r\n\r\nDonec venenatis, nunc in convallis blandit, ipsum velit facilisis erat, sed blandit ex velit sed erat. Curabitur odio velit, congue sed purus vel, porttitor pulvinar augue. Maecenas pulvinar tempor arcu, non facilisis lectus. Phasellus blandit nec magna et hendrerit. Pellentesque nec nibh id tellus semper interdum. Sed lobortis, ligula quis sodales luctus, mi lectus posuere sapien, vel hendrerit libero arcu a erat. Nulla interdum nibh massa, nec finibus sem accumsan sed. Suspendisse maximus lacus tempus pulvinar varius. Nam mollis erat lectus, ut posuere mi fermentum bibendum. Suspendisse cursus venenatis lorem, sit amet porttitor libero vestibulum at.', 'HealthCare Labs', NULL, 'package/sample.jpg', '999', 1, '2021-06-04 00:39:07', '2021-06-04 00:39:07'),
(2, 'UdaipurMed CovidCare', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut aliquet neque. Mauris pellentesque turpis et eros porta, non sagittis lorem suscipit. Cras ut massa aliquam, facilisis risus eget, dictum quam. Donec molestie maximus metus, a blandit lorem convallis et. Integer scelerisque egestas molestie. Ut accumsan, est ac mollis auctor, orci leo cursus ligula, et varius ex nisi in lectus. Duis sed ligula vitae odio dapibus sagittis. Phasellus blandit venenatis felis, a malesuada est posuere ac.\r\n\r\nCurabitur erat mi, euismod eget egestas vitae, imperdiet sit amet urna. Nullam at dictum libero. Suspendisse potenti. Donec consectetur accumsan enim eu venenatis. Aenean quis mauris erat. Donec lacus quam, scelerisque id velit eget, gravida faucibus dolor. Pellentesque faucibus semper nisl, eu venenatis tortor placerat non. Nam tempus lacinia lobortis.\r\n\r\nDonec venenatis, nunc in convallis blandit, ipsum velit facilisis erat, sed blandit ex velit sed erat. Curabitur odio velit, congue sed purus vel, porttitor pulvinar augue. Maecenas pulvinar tempor arcu, non facilisis lectus. Phasellus blandit nec magna et hendrerit. Pellentesque nec nibh id tellus semper interdum. Sed lobortis, ligula quis sodales luctus, mi lectus posuere sapien, vel hendrerit libero arcu a erat. Nulla interdum nibh massa, nec finibus sem accumsan sed. Suspendisse maximus lacus tempus pulvinar varius. Nam mollis erat lectus, ut posuere mi fermentum bibendum. Suspendisse cursus venenatis lorem, sit amet porttitor libero vestibulum at.', 'HealthCare Labs', NULL, 'package/sample1.jpg', '1299', 1, '2021-06-04 00:39:07', '2021-06-04 00:39:07'),
(3, 'UdaipurMed DiabCare', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut aliquet neque. Mauris pellentesque turpis et eros porta, non sagittis lorem suscipit. Cras ut massa aliquam, facilisis risus eget, dictum quam. Donec molestie maximus metus, a blandit lorem convallis et. Integer scelerisque egestas molestie. Ut accumsan, est ac mollis auctor, orci leo cursus ligula, et varius ex nisi in lectus. Duis sed ligula vitae odio dapibus sagittis. Phasellus blandit venenatis felis, a malesuada est posuere ac.\r\n\r\nCurabitur erat mi, euismod eget egestas vitae, imperdiet sit amet urna. Nullam at dictum libero. Suspendisse potenti. Donec consectetur accumsan enim eu venenatis. Aenean quis mauris erat. Donec lacus quam, scelerisque id velit eget, gravida faucibus dolor. Pellentesque faucibus semper nisl, eu venenatis tortor placerat non. Nam tempus lacinia lobortis.\r\n\r\nDonec venenatis, nunc in convallis blandit, ipsum velit facilisis erat, sed blandit ex velit sed erat. Curabitur odio velit, congue sed purus vel, porttitor pulvinar augue. Maecenas pulvinar tempor arcu, non facilisis lectus. Phasellus blandit nec magna et hendrerit. Pellentesque nec nibh id tellus semper interdum. Sed lobortis, ligula quis sodales luctus, mi lectus posuere sapien, vel hendrerit libero arcu a erat. Nulla interdum nibh massa, nec finibus sem accumsan sed. Suspendisse maximus lacus tempus pulvinar varius. Nam mollis erat lectus, ut posuere mi fermentum bibendum. Suspendisse cursus venenatis lorem, sit amet porttitor libero vestibulum at.', 'HealthCare Labs', NULL, 'package/sample2.jpg', '599', 1, '2021-06-04 00:39:07', '2021-06-04 00:39:07'),
(4, 'UdaipurMed KidneyLiverCare', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut aliquet neque. Mauris pellentesque turpis et eros porta, non sagittis lorem suscipit. Cras ut massa aliquam, facilisis risus eget, dictum quam. Donec molestie maximus metus, a blandit lorem convallis et. Integer scelerisque egestas molestie. Ut accumsan, est ac mollis auctor, orci leo cursus ligula, et varius ex nisi in lectus. Duis sed ligula vitae odio dapibus sagittis. Phasellus blandit venenatis felis, a malesuada est posuere ac.\r\n\r\nCurabitur erat mi, euismod eget egestas vitae, imperdiet sit amet urna. Nullam at dictum libero. Suspendisse potenti. Donec consectetur accumsan enim eu venenatis. Aenean quis mauris erat. Donec lacus quam, scelerisque id velit eget, gravida faucibus dolor. Pellentesque faucibus semper nisl, eu venenatis tortor placerat non. Nam tempus lacinia lobortis.\r\n\r\nDonec venenatis, nunc in convallis blandit, ipsum velit facilisis erat, sed blandit ex velit sed erat. Curabitur odio velit, congue sed purus vel, porttitor pulvinar augue. Maecenas pulvinar tempor arcu, non facilisis lectus. Phasellus blandit nec magna et hendrerit. Pellentesque nec nibh id tellus semper interdum. Sed lobortis, ligula quis sodales luctus, mi lectus posuere sapien, vel hendrerit libero arcu a erat. Nulla interdum nibh massa, nec finibus sem accumsan sed. Suspendisse maximus lacus tempus pulvinar varius. Nam mollis erat lectus, ut posuere mi fermentum bibendum. Suspendisse cursus venenatis lorem, sit amet porttitor libero vestibulum at.', 'HealthCare Labs', NULL, 'package/sample3.jpg', '2299', 1, '2021-06-04 00:39:07', '2021-06-04 00:39:07'),
(5, 'Summer', 'Description', 'Amolak', 1, 'package/IMG1622956400.jpg', '4000', 1, '2021-06-05 23:43:20', '2021-06-06 00:15:37');

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
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `user_id`, `birthday`, `age`, `phone`, `gender`, `blood`, `address`, `image`, `weight`, `height`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 30, '01/14/1997', NULL, '565645646', 'Male', 'A+', 'rdtrtr', 'patients/may/IMG.jpg', '70', '176', 0, '2021-05-29 08:40:34', '2021-06-06 06:33:19'),
(2, 21, '05/06/2069', NULL, '9785559658', 'Male', 'B+', 'test', NULL, '82', '5.11', 1, '2021-05-27 20:14:28', '2021-06-06 06:47:38');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forpayment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commission` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `advices` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_created` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`id`, `user_id`, `doctor_id`, `reference`, `advices`, `image`, `order_created`, `created_at`, `updated_at`) VALUES
(3, 21, '23', 'no', 'No need of last medicine for now', 'prescription/sample.jpg', 0, '2021-06-16 14:21:55', NULL),
(4, 21, '23', 'no', 'No need of last medicine for now', 'prescription/sample.jpg', 0, '2021-06-16 14:21:59', NULL),
(5, 21, '23', 'no', 'No need of last medicine for now', 'prescription/sample.jpg', 0, '2021-06-21 14:22:01', NULL),
(6, 21, '23', 'no', 'No need of last medicine for now', 'prescription/sample.jpg', 0, '2021-06-17 14:22:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prescription_drugs`
--

CREATE TABLE `prescription_drugs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prescription_id` bigint(20) UNSIGNED NOT NULL,
  `drug_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `strength` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dose` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drug_advice` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescription_tests`
--

CREATE TABLE `prescription_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prescription_id` bigint(20) UNSIGNED NOT NULL,
  `test_id` bigint(20) UNSIGNED NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `speciality`
--

CREATE TABLE `speciality` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `speciality`
--

INSERT INTO `speciality` (`id`, `name`, `icon`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Diagnostic imaging', 'Diagnostic imaging', 0, '2021-05-28 05:31:16', '2021-05-28 07:35:19'),
(2, 'Cardiologist', 'heart-outline', 0, '2021-05-29 00:04:53', '2021-05-29 00:04:53'),
(3, 'Eyes', 'eye-outline', 0, '2021-05-29 00:05:18', '2021-05-29 00:05:18'),
(4, 'Pediatrician', 'accessibility-outline', 0, '2021-05-29 00:05:34', '2021-05-29 00:05:34'),
(5, 'Physician', 'people-outline', 0, '2021-05-29 00:05:51', '2021-05-29 00:05:51'),
(6, 'General Surgeon', 'cut-outline', 0, '2021-05-29 00:06:08', '2021-05-29 00:06:08'),
(7, 'Dermatologist', 'dermatologist', 0, '2021-06-12 10:29:50', '2021-06-12 10:29:50');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `test_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `comment` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `test_name`, `rate`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Antibody Coombs Test', '0', 'Not everyone\'s red blood cells are alike. Your immune system will make antibodies if it finds ones that don\'t match yours. They\'re keyed to specific areas on the outside of the cell. Some of these antibodies are related to your blood type.', '2021-06-04 10:15:50', '2021-06-04 10:15:50'),
(2, 'MRI', '999', 'An MRI (magnetic resonance imaging) lets your doctor see the organs, bones, and tissues inside your body without having to do surgery. This test can help diagnose a disease or injury.', '2021-06-06 06:12:52', '2021-06-18 11:41:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'patient',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kushal', 'doctor@gmail.com', NULL, '$2y$10$wAhPhOWOWNhNDCd4CbEVfe1LyFqgp9KGdefDJp65tV8HyhXbpfjwC', 'admin', 'fWd2nyoyAbe9BXuvTOUCh30qJ2I93akziDMTSSFUmPQGa2TQgLyDc08Sfs44', NULL, NULL),
(3, 'Jasvender Singh', 'Jasvender@gmail.com', NULL, '$2y$10$BzV0oWnELnlapb5vKUPxc.MXd7mqW88WlAcUxkrRXWZPRmuxEQl6.', 'patient', NULL, '2021-05-24 08:59:38', '2021-05-24 08:59:38'),
(4, 'Jasvender Singh', 'Jasp@gmail.com', NULL, '$2y$10$If.US3ORQxLCDx4anagOiOx/0cgRPwN4fy6gkgi3jXLibfHDKI0Be', 'doctor', NULL, '2021-05-24 11:06:35', '2021-05-24 11:06:35'),
(5, 'Jasvender Singh', 'Jasven@gmail.com', NULL, '$2y$10$u0S.3BmnlMIP0yuMVuWtGeaeHkodFkZl68K17Dq.g5tDmoSHHf0j6', 'doctor', NULL, '2021-05-24 11:09:47', '2021-05-24 11:09:47'),
(21, 'KHUSHAL YADAV', 'khushal.cornice@gmail.com', NULL, '$2y$10$8cjCch7P.hinSn8S40588u6.2o.ITYJ5a5B6KHCu0fyoPZ9J9NLJu', 'patient', NULL, '2021-05-28 01:44:28', '2021-06-01 01:40:03'),
(23, 'John Doe', 'johndoe@gmail.com', NULL, '$2y$10$uSIGzeLeUWpIdczuAS7tM.Bz3bxNHFUXNeAig5xkrKXl3JTgKlSbC', 'doctor', NULL, '2021-05-28 02:00:36', '2021-05-28 02:00:36'),
(24, 'William Albert', 'william@gmail.com', NULL, '$2y$10$rek9MyRm4S9pYCMtyi4vfuCrpD7m1iuUhPBUGyDDLjIAIPPcu2/l.', 'doctor', NULL, '2021-05-28 02:01:31', '2021-05-28 02:01:31'),
(25, 'Robbin Dicasto', 'robbin@gmail.com', NULL, '$2y$10$UDWKG5D5CvPWG8ScSsE0h.WpoDY9UV3md75QHn9qGqwU987jDPEcq', 'doctor', NULL, '2021-05-28 02:02:17', '2021-05-28 02:02:17'),
(26, 'Jasvender', 'jas@gmail.com', NULL, '$2y$10$RbrvWTFL6cdP..3rIEW7T.j.QPP2FDxPNwJtPLU4LR0I14e.dcL8W', 'doctor', NULL, '2021-05-28 03:11:36', '2021-05-28 03:11:36'),
(28, 'HARSHA', 'harsha@gmail.com', NULL, '$2y$10$O/.i3ZNvRR3Thy2wvXYn9.c7UE8RpL2e4AvP7bHWxeWX3NGBJEUru', 'nurse', NULL, '2021-05-28 06:27:12', '2021-05-29 07:37:45'),
(29, 'PANKAJ', 'pankaj@gmail.com', NULL, '$2y$10$LpTUTuqFA9LZN03Laj47W.iJfHgcYoSFIZbnfYXz.TZVsf7VL91ui', 'doctor', NULL, '2021-05-28 07:22:33', '2021-07-05 23:57:44'),
(30, 'HIMANSHU', 'himanshu@gmail.com', NULL, '$2y$10$0OoUL26NgrYq/ax/k4NbzeKAbAxxWzJCMYM6DDGrWWyaEqbPy/bfC', 'patient', NULL, '2021-05-29 08:40:34', '2021-06-06 06:33:19'),
(31, 'Lady Harriet Acland', 'nurse@gmail.com', NULL, '$2y$10$vWo8.LuE5W1L46Ba/jCmneuXK3jzdUynz8.He9IH/bMsYKwoznEo2', 'nurse', NULL, '2021-06-05 08:43:38', '2021-06-05 08:43:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ambulance_bookings`
--
ALTER TABLE `ambulance_bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ambulance_bookings_user_id_foreign` (`user_id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_user_id_foreign` (`user_id`);

--
-- Indexes for table `billings`
--
ALTER TABLE `billings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `billings_user_id_foreign` (`user_id`);

--
-- Indexes for table `billing_items`
--
ALTER TABLE `billing_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `billing_items_billing_id_foreign` (`billing_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctors_user_id_foreign` (`user_id`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labbooking`
--
ALTER TABLE `labbooking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `labbooking_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nursebooking`
--
ALTER TABLE `nursebooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nurses`
--
ALTER TABLE `nurses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nurses_user_id_foreign` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patients_user_id_foreign` (`user_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prescriptions_user_id_foreign` (`user_id`);

--
-- Indexes for table `prescription_drugs`
--
ALTER TABLE `prescription_drugs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prescription_drugs_prescription_id_foreign` (`prescription_id`),
  ADD KEY `prescription_drugs_drug_id_foreign` (`drug_id`);

--
-- Indexes for table `prescription_tests`
--
ALTER TABLE `prescription_tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prescription_tests_prescription_id_foreign` (`prescription_id`),
  ADD KEY `prescription_tests_test_id_foreign` (`test_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speciality`
--
ALTER TABLE `speciality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ambulance_bookings`
--
ALTER TABLE `ambulance_bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `billings`
--
ALTER TABLE `billings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `billing_items`
--
ALTER TABLE `billing_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `labbooking`
--
ALTER TABLE `labbooking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=279;

--
-- AUTO_INCREMENT for table `nursebooking`
--
ALTER TABLE `nursebooking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nurses`
--
ALTER TABLE `nurses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `prescription_drugs`
--
ALTER TABLE `prescription_drugs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescription_tests`
--
ALTER TABLE `prescription_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `speciality`
--
ALTER TABLE `speciality`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ambulance_bookings`
--
ALTER TABLE `ambulance_bookings`
  ADD CONSTRAINT `ambulance_bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `billings`
--
ALTER TABLE `billings`
  ADD CONSTRAINT `billings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `billing_items`
--
ALTER TABLE `billing_items`
  ADD CONSTRAINT `billing_items_billing_id_foreign` FOREIGN KEY (`billing_id`) REFERENCES `billings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `labbooking`
--
ALTER TABLE `labbooking`
  ADD CONSTRAINT `labbooking_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nurses`
--
ALTER TABLE `nurses`
  ADD CONSTRAINT `nurses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD CONSTRAINT `prescriptions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `prescription_drugs`
--
ALTER TABLE `prescription_drugs`
  ADD CONSTRAINT `prescription_drugs_drug_id_foreign` FOREIGN KEY (`drug_id`) REFERENCES `drugs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `prescription_drugs_prescription_id_foreign` FOREIGN KEY (`prescription_id`) REFERENCES `prescriptions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `prescription_tests`
--
ALTER TABLE `prescription_tests`
  ADD CONSTRAINT `prescription_tests_prescription_id_foreign` FOREIGN KEY (`prescription_id`) REFERENCES `prescriptions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `prescription_tests_test_id_foreign` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
