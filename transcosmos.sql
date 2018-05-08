-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2018 at 01:15 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transcosmos`
--

-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

CREATE TABLE `cvs` (
  `id` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `identity_number` varchar(100) NOT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `blood_type` varchar(100) DEFAULT NULL,
  `birth_place` varchar(100) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `marriage_status` varchar(100) DEFAULT NULL,
  `religion` varchar(100) DEFAULT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `address` text,
  `city` varchar(100) DEFAULT NULL,
  `postal_code` varchar(100) DEFAULT NULL,
  `mobile_number` varchar(100) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `toefl_type` varchar(100) DEFAULT NULL,
  `certificate` varchar(255) DEFAULT NULL,
  `score` varchar(100) DEFAULT NULL,
  `toefl_institution` varchar(100) DEFAULT NULL,
  `first_position` varchar(100) DEFAULT NULL,
  `second_position` varchar(100) DEFAULT NULL,
  `expected_salary` varchar(100) DEFAULT NULL,
  `portfolio` varchar(255) DEFAULT NULL,
  `unique_code` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cvs`
--

INSERT INTO `cvs` (`id`, `id_member`, `full_name`, `identity_number`, `gender`, `blood_type`, `birth_place`, `birth_date`, `marriage_status`, `religion`, `nationality`, `address`, `city`, `postal_code`, `mobile_number`, `photo`, `toefl_type`, `certificate`, `score`, `toefl_institution`, `first_position`, `second_position`, `expected_salary`, `portfolio`, `unique_code`, `created_at`, `updated_at`) VALUES
(1, 2, 'iswanto', '12345', 'male', 'a', 'jakarta', '1988-01-01', 'merit', 'katolik', 'wni', 'jakarta raya', 'Jakarta, Indonesia', '12345', '123456', '20171210080853.jpg', 'toefl', 'D:\\xampp\\tmp\\phpCA07.tmp', '2.0', 'IEL', 'design', 'design1', '1jt', '20171210080853.pdf', '', '2017-12-10 08:08:53', '2017-12-10 08:08:53'),
(2, 2, 'iswanto', '12345', 'male', 'a', 'jakarta', '1988-01-01', 'merit', 'katolik', 'wni', 'jakarta raya', 'Jakarta, Indonesia', '12345', '123456', '20171210080900.jpg', 'toefl', 'D:\\xampp\\tmp\\phpE324.tmp', '2.0', 'IEL', 'design', 'design1', '1jt', '20171210080900.pdf', '', '2017-12-10 08:09:00', '2017-12-10 08:09:00'),
(3, 2, 'iswanto', '12345', 'male', 'a', 'jakarta', '1988-01-01', 'merit', 'katolik', 'wni', 'jakarta raya', 'West Java, Indonesia', '12345', '123456', '20171210081026.jpg', 'toefl', 'D:\\xampp\\tmp\\php353D.tmp', '2.0', 'IEL', 'design', 'design1', '1jt', '20171210081026.pdf', '', '2017-12-10 08:10:26', '2017-12-10 08:10:26'),
(4, 2, 'iswanto', '12345', 'male', 'a', 'jakarta', '1988-01-01', 'merit', 'katolik', 'wni', 'jakarta raya', 'West Java, Indonesia', '12345', '123456', '20171210081116.jpg', 'toefl', 'D:\\xampp\\tmp\\phpF96F.tmp', '2.0', 'IEL', 'design', 'design1', '1jt', '20171210081116.pdf', '', '2017-12-10 08:11:16', '2017-12-10 08:11:16'),
(5, 2, 'iswanto', '12345', 'male', 'a', 'jakarta', '1988-01-01', 'merit', 'katolik', 'wni', 'jakarta raya', 'West Java, Indonesia', '12345', '123456', '20171210081125.jpg', 'toefl', 'D:\\xampp\\tmp\\php1CAE.tmp', '2.0', 'IEL', 'design', 'design1', '1jt', '20171210081125.pdf', '', '2017-12-10 08:11:25', '2017-12-10 08:11:25'),
(6, 2, 'iswanto', '1234455', 'male', 'a', 'jakasrta', '2010-10-10', 'undefined', 'undefined', 'wni', 'testtttttasdasdasdasd', 'East Java, Indonesia', '12121', '0812121212', '20171226014707.jpg', 'toefl', '20171226014707.pdf', '2.3', 'asd', 'design', 'qa1', '11jt', '', '5a41f06b2b108', '2017-12-26 13:47:07', '2017-12-26 13:47:07'),
(7, 2, 'iswanto', '1234455', 'male', 'a', 'jakasrta', '2010-10-10', 'undefined', 'undefined', 'wni', 'testtttttasdasdasdasd', 'East Java, Indonesia', '12121', '0812121212', '20171226014820.jpg', 'toefl', '20171226014820.pdf', '2.3', 'asd', 'design', 'qa1', '11jt', '', '5a41f0b470970', '2017-12-26 13:48:20', '2017-12-26 13:48:20'),
(8, 2, 'iswanto', '1234455', 'male', 'a', 'jakasrta', '2010-10-10', 'undefined', 'undefined', 'wni', 'testtttttasdasdasdasd', 'East Java, Indonesia', '12121', '0812121212', '20171226014859.jpg', 'toefl', '20171226014859.pdf', '2.3', 'asd', 'design', 'qa1', '11jt', '', '5a41f0dbbc47c', '2017-12-26 13:48:59', '2017-12-26 13:48:59'),
(9, 2, 'iswanto', '1234455', 'male', 'a', 'jakasrta', '2010-10-10', 'undefined', 'undefined', 'wni', 'testtttttasdasdasdasd', 'East Java, Indonesia', '12121', '0812121212', '20171226014917.jpg', 'toefl', '20171226014917.pdf', '2.3', 'asd', 'design', 'qa1', '11jt', '', '5a41f0edd0679', '2017-12-26 13:49:17', '2017-12-26 13:49:17'),
(10, 2, 'iswanto', '1234455', 'male', 'a', 'jakasrta', '2010-10-10', 'undefined', 'undefined', 'wni', 'testtttttasdasdasdasd', 'East Java, Indonesia', '12121', '0812121212', '20171226020451.jpg', 'toefl', '20171226020451.pdf', '2.3', 'asd', 'design', 'qa1', '11jt', '', '5a41f493acfbc', '2017-12-26 14:04:51', '2017-12-26 14:04:51'),
(11, 2, 'iswanto', '1234455', 'male', 'a', 'jakasrta', '2010-10-10', 'undefined', 'undefined', 'wni', 'testtttttasdasdasdasd', 'East Java, Indonesia', '12121', '0812121212', '20171226020555.jpg', 'toefl', '20171226020555.pdf', '2.3', 'asd', 'design', 'qa1', '11jt', '', '5a41f4d3a968c', '2017-12-26 14:05:55', '2017-12-26 14:05:55'),
(12, 2, 'iswanto', '1234455', 'male', 'a', 'jakasrta', '2010-10-10', 'undefined', 'undefined', 'wni', 'testtttttasdasdasdasd', 'East Java, Indonesia', '12121', '0812121212', '20171226020656.jpg', 'toefl', '20171226020656.pdf', '2.3', 'asd', 'design', 'qa1', '11jt', '', '5a41f5101e3c7', '2017-12-26 14:06:56', '2017-12-26 14:06:56'),
(13, 2, 'iswanto', '1234455', 'male', 'a', 'jakasrta', '2010-10-10', 'undefined', 'undefined', 'wni', 'testtttttasdasdasdasd', 'East Java, Indonesia', '12121', '0812121212', '20171226020737.jpg', 'toefl', '20171226020737.pdf', '2.3', 'asd', 'design', 'qa1', '11jt', '', '5a41f5395728c', '2017-12-26 14:07:37', '2017-12-26 14:07:37'),
(14, 2, 'iswanto', '1234455', 'male', 'a', 'jakasrta', '2010-10-10', 'undefined', 'undefined', 'wni', 'testtttttasdasdasdasd', 'East Java, Indonesia', '12121', '0812121212', '20171226022238.jpg', 'toefl', '20171226022238.pdf', '2.3', 'asd', 'design', 'qa1', '11jt', '', '5a41f8bec3b8f', '2017-12-26 14:22:38', '2017-12-26 14:22:38'),
(15, 2, 'iswanto', '1234455', 'male', 'a', 'jakasrta', '2010-10-10', 'undefined', 'undefined', 'wni', 'testtttttasdasdasdasd', 'East Java, Indonesia', '12121', '0812121212', '20171226022526.jpg', 'toefl', '20171226022526.pdf', '2.3', 'asd', 'design', 'qa1', '11jt', '', '5a41f966a9f3a', '2017-12-26 14:25:26', '2017-12-26 14:25:26'),
(16, 2, 'iswanto', '1234455', 'male', 'a', 'jakasrta', '2010-10-10', 'undefined', 'undefined', 'wni', 'testtttttasdasdasdasd', 'East Java, Indonesia', '12121', '0812121212', '20171226022600.jpg', 'toefl', '20171226022600.pdf', '2.3', 'asd', 'design', 'qa1', '11jt', '', '5a41f98805047', '2017-12-26 14:26:00', '2017-12-26 14:26:00'),
(17, 2, 'xxx', '1212', 'male', 'a', 'sadasd', '2000-01-01', 'undefined', 'undefined', 'wni', 'xxxxxxxxxxxxxxxxxxxxxxxxx', 'East Java, Indonesia', '11111', '081111111111', '20171226052308.jpg', 'toefl', '20171226052308.pdf', '2.3', 'asdasd', 'design', 'qa1', '11jt', '', '5a42230c37a9c', '2017-12-26 17:23:08', '2017-12-26 17:23:08'),
(18, 2, 'xxx', '1212', 'male', 'a', 'sadasd', '2000-01-01', 'undefined', 'undefined', 'wni', 'xxxxxxxxxxxxxxxxxxxxxxxxx', 'East Java, Indonesia', '11111', '081111111111', '20171226052351.jpg', 'toefl', '20171226052351.pdf', '2.3', 'asdasd', 'design', 'qa1', '11jt', '', '5a422337a1217', '2017-12-26 17:23:51', '2017-12-26 17:23:51'),
(19, 2, 'xxx', '1212', 'male', 'a', 'sadasd', '2000-01-01', 'undefined', 'undefined', 'wni', 'xxxxxxxxxxxxxxxxxxxxxxxxx', 'East Java, Indonesia', '11111', '081111111111', '20171226052420.jpg', 'toefl', '20171226052420.pdf', '2.3', 'asdasd', 'design', 'qa1', '11jt', '', '5a422354ce97b', '2017-12-26 17:24:20', '2017-12-26 17:24:20'),
(20, 2, 'xxx', '1212', 'male', 'a', 'sadasd', '2000-01-01', 'undefined', 'undefined', 'wni', 'xxxxxxxxxxxxxxxxxxxxxxxxx', 'East Java, Indonesia', '11111', '081111111111', '20171226052507.jpg', 'toefl', '20171226052507.pdf', '2.3', 'asdasd', 'design', 'qa1', '11jt', '', '5a422383757db', '2017-12-26 17:25:07', '2017-12-26 17:25:07'),
(21, 2, 'xxx', '1212', 'male', 'a', 'sadasd', '2000-01-01', 'undefined', 'undefined', 'wni', 'xxxxxxxxxxxxxxxxxxxxxxxxx', 'East Java, Indonesia', '11111', '081111111111', '20171226052626.jpg', 'toefl', '20171226052626.pdf', '2.3', 'asdasd', 'design', 'qa1', '11jt', '', '5a4223d2b269d', '2017-12-26 17:26:26', '2017-12-26 17:26:26'),
(22, 2, 'xxx', '1212', 'male', 'a', 'sadasd', '2000-01-01', 'undefined', 'undefined', 'wni', 'xxxxxxxxxxxxxxxxxxxxxxxxx', 'East Java, Indonesia', '11111', '081111111111', '20171226052634.jpg', 'toefl', '20171226052634.pdf', '2.3', 'asdasd', 'design', 'qa1', '11jt', '', '5a4223da051b8', '2017-12-26 17:26:34', '2017-12-26 17:26:34'),
(23, 2, 'xxx', '1212', 'male', 'a', 'sadasd', '2000-01-01', 'undefined', 'undefined', 'wni', 'xxxxxxxxxxxxxxxxxxxxxxxxx', 'East Java, Indonesia', '11111', '081111111111', '20171226052801.jpg', 'toefl', '20171226052801.pdf', '2.3', 'asdasd', 'design', 'qa1', '11jt', '', '5a422431abc9f', '2017-12-26 17:28:01', '2017-12-26 17:28:01'),
(24, 2, 'x', '1111', 'male', 'a', 'sadsa', '2000-01-01', 'undefined', 'undefined', 'wni', 'asdasdasdasd', 'East Java, Indonesia', '11111', '08188188111', '20171227063001.jpg', 'toefl', '20171227063001.pdf', '2.3', 'asd', 'design', 'design1', '6jt', '', '5a42db79ebeef', '2017-12-27 06:30:01', '2017-12-27 06:30:01'),
(25, 2, 'x', '1111', 'male', 'a', 'sadsa', '2000-01-01', 'undefined', 'undefined', 'wni', 'asdasdasdasd', 'East Java, Indonesia', '11111', '08188188111', '20171227063120.jpg', 'toefl', '20171227063120.pdf', '2.3', 'asd', 'design', 'design1', '6jt', '', '5a42dbc83c223', '2017-12-27 06:31:20', '2017-12-27 06:31:20'),
(26, 2, 'rudi', '1212121212', 'male', 'a', 'asdad', '2000-01-01', 'undefined', 'undefined', 'wni', 'asdasdsadasasdasd', 'East Java, Indonesia', '22333', '333333333333', '20171227063452.jpg', 'toefl', '20171227063452.pdf', '2.3', 'asdasda', 'design', 'design1', '6jt', '', '5a42dc9ce5b90', '2017-12-27 06:34:52', '2017-12-27 06:34:52'),
(27, 2, 'rudi', '1212121212', 'male', 'a', 'asdad', '2000-01-01', 'undefined', 'undefined', 'wni', 'asdasdsadasasdasd', 'East Java, Indonesia', '22333', '333333333333', '20171227064001.jpg', 'toefl', '20171227064001.pdf', '2.3', 'asdasda', 'design', 'design1', '6jt', '', '5a42ddd19fc4f', '2017-12-27 06:40:01', '2017-12-27 06:40:01'),
(28, 2, 'rudi', '1212121212', 'male', 'a', 'asdad', '2000-01-01', 'undefined', 'undefined', 'wni', 'asdasdsadasasdasd', 'East Java, Indonesia', '22333', '333333333333', '20171227064137.jpg', 'toefl', '20171227064137.pdf', '2.3', 'asdasda', 'design', 'design1', '6jt', '', '5a42de31744dd', '2017-12-27 06:41:37', '2017-12-27 06:41:37'),
(29, 2, 'rudi', '1212121212', 'male', 'a', 'asdad', '2000-01-01', 'undefined', 'undefined', 'wni', 'asdasdsadasasdasd', 'East Java, Indonesia', '22333', '333333333333', '20171227064239.jpg', 'toefl', '20171227064239.pdf', '2.3', 'asdasda', 'design', 'design1', '6jt', '', '5a42de6f3d146', '2017-12-27 06:42:39', '2017-12-27 06:42:39'),
(30, 2, 'rudi', '1212121212', 'male', 'a', 'asdad', '2000-01-01', 'undefined', 'undefined', 'wni', 'asdasdsadasasdasd', 'East Java, Indonesia', '22333', '333333333333', '20171227064247.jpg', 'toefl', '20171227064247.pdf', '2.3', 'asdasda', 'design', 'design1', '6jt', '', '5a42de77ab648', '2017-12-27 06:42:47', '2017-12-27 06:42:47'),
(31, 2, 'rudi', '1212121212', 'male', 'a', 'asdad', '2000-01-01', 'undefined', 'undefined', 'wni', 'asdasdsadasasdasd', 'East Java, Indonesia', '22333', '333333333333', '20171227065136.jpg', 'toefl', '20171227065136.pdf', '2.3', 'asdasda', 'design', 'design1', '6jt', '', '5a42e088c9edd', '2017-12-27 06:51:36', '2017-12-27 06:51:36'),
(32, 2, 'budi', '12121212', 'male', 'a', 'asdsad', '2000-01-01', 'undefined', 'undefined', 'wni', 'asdsadasdasdasdasd', 'East Java, Indonesia', '22222', '222222222', '20171227070651.jpg', 'toefl', '20171227070651.pdf', '2', 'asdsadasd', 'design', 'qa1', '1jt', '', '5a42e41b77ee3', '2017-12-27 07:06:51', '2017-12-27 07:06:51'),
(33, 2, 'budi', '12121212', 'male', 'a', 'asdsad', '2000-01-01', 'undefined', 'undefined', 'wni', 'asdsadasdasdasdasd', 'East Java, Indonesia', '22222', '222222222', '20171227070722.jpg', 'toefl', '20171227070722.pdf', '2', 'asdsadasd', 'design', 'qa1', '1jt', '', '5a42e43a3856b', '2017-12-27 07:07:22', '2017-12-27 07:07:22'),
(34, 2, 'budi', '12121212', 'male', 'a', 'asdsad', '2000-01-01', 'undefined', 'undefined', 'wni', 'asdsadasdasdasdasd', 'East Java, Indonesia', '22222', '222222222', '20171227070742.jpg', 'toefl', '20171227070742.pdf', '2', 'asdsadasd', 'design', 'qa1', '1jt', '', '5a42e44e6e1a9', '2017-12-27 07:07:42', '2017-12-27 07:07:42'),
(35, 2, 'budi', '12121212', 'male', 'a', 'asdsad', '2000-01-01', 'undefined', 'undefined', 'wni', 'asdsadasdasdasdasd', 'East Java, Indonesia', '22222', '222222222', '20171227070742.jpg', 'toefl', '20171227070742.pdf', '2', 'asdsadasd', 'design', 'qa1', '1jt', '', '5a42e44ebc96d', '2017-12-27 07:07:42', '2017-12-27 07:07:42'),
(36, 2, 'budi', '12121212', 'male', 'a', 'asdsad', '2000-01-01', 'undefined', 'undefined', 'wni', 'asdsadasdasdasdasd', 'East Java, Indonesia', '22222', '222222222', '20171227070807.jpg', 'toefl', '20171227070807.pdf', '2', 'asdsadasd', 'design', 'qa1', '1jt', '', '5a42e46792fb1', '2017-12-27 07:08:07', '2017-12-27 07:08:07'),
(37, 2, 'assadasdas', '22222', 'male', 'a', 'asd', '2000-01-01', 'undefined', 'undefined', 'wni', 'asdasdaasdsadasdas', 'East Java, Indonesia', '33333', '23333333', '20171227070953.jpg', 'toefl', '20171227070953.pdf', '2', 'a', 'design', 'design1', '6jt', '', '5a42e4d1', '2017-12-27 07:09:53', '2017-12-27 07:09:53');

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` int(11) NOT NULL,
  `id_cv` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `grade` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `major` varchar(100) DEFAULT NULL,
  `focused_major` varchar(100) DEFAULT NULL,
  `gpa` varchar(100) DEFAULT NULL,
  `diploma` varchar(255) DEFAULT NULL,
  `gpa_transcript` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `id_cv`, `id_member`, `grade`, `city`, `name`, `major`, `focused_major`, `gpa`, `diploma`, `gpa_transcript`, `created_at`, `updated_at`) VALUES
(1, 11, 2, 'S1,s3', 'c,asd', 'a,b', 'd,asd', 'b,c', '2.3,3.3', 'C:\\fakepath\\636347250245691607.pdf,C:\\fakepath\\Materi.pdf', NULL, '2017-12-26 14:05:55', '2017-12-26 14:05:55'),
(2, 13, 2, 'S1,s3', 'c,asd', 'a,b', 'd,asd', 'b,c', '2.3,3.3', '', '', '2017-12-26 14:07:37', '2017-12-26 14:07:37'),
(3, 14, 2, 'S1,s3', 'c,asd', 'a,b', 'd,asd', 'b,c', '2.3,3.3', '', '', '2017-12-26 14:22:38', '2017-12-26 14:22:38'),
(4, 15, 2, 'grader%5B%5D=S1&grader%5B%5D=s3', 'c,asd', 'a,b', 'd,asd', 'b,c', '2.3,3.3', '', '', '2017-12-26 14:25:26', '2017-12-26 14:25:26'),
(5, 16, 2, 'grader%5B%5D=S1&grader%5B%5D=s3', 'c,asd', 'a,b', 'd,asd', 'b,c', '2.3,3.3', '', '', '2017-12-26 14:26:00', '2017-12-26 14:26:00'),
(6, 21, 2, 's2', 'asd', 'asd', 'asd', 'asd', '3.2', '', '', '2017-12-26 17:26:27', '2017-12-26 17:26:27'),
(7, 22, 2, 'D3', 'asd', 'asd', 'asd', 'asd', '2.3', '', '', '2017-12-26 17:26:34', '2017-12-26 17:26:34'),
(8, 22, 2, 's2', 'asd', 'asd', 'asd', 'asd', '3.2', '', '', '2017-12-26 17:26:34', '2017-12-26 17:26:34'),
(9, 26, 2, 'S1', 'a', 'a', 'a', 'a', '2.3', '20171227063453.pdf', '20171227063453.pdf', '2017-12-27 06:34:53', '2017-12-27 06:34:53'),
(10, 26, 2, 's1', 'b', 'b', 'b', 'b', '1.2', '20171227063454.pdf', '20171227063454.pdf', '2017-12-27 06:34:54', '2017-12-27 06:34:54'),
(11, 31, 2, 'S1', 'a', 'a', 'a', 'a', '2.3', '20171227065137.pdf', '20171227065137.pdf', '2017-12-27 06:51:37', '2017-12-27 06:51:37'),
(12, 31, 2, 's1', 'b', 'b', 'b', 'b', '1.2', '20171227065138.pdf', '20171227065138.pdf', '2017-12-27 06:51:38', '2017-12-27 06:51:38'),
(13, 32, 2, 'S2', 'a', 'a', 'a', 'a', '2.3', '20171227070651.pdf', '20171227070651.pdf', '2017-12-27 07:06:51', '2017-12-27 07:06:51'),
(14, 32, 2, 's3', 'b', 'b', 'b', 'ad', '2.3', '20171227070652.pdf', '20171227070652.pdf', '2017-12-27 07:06:52', '2017-12-27 07:06:52'),
(15, 33, 2, 'S2', 'a', 'a', 'a', 'a', '2.3', '20171227070722.pdf', '20171227070722.pdf', '2017-12-27 07:07:22', '2017-12-27 07:07:22'),
(16, 33, 2, 's3', 'b', 'b', 'b', 'ad', '2.3', '20171227070723.pdf', '20171227070723.pdf', '2017-12-27 07:07:23', '2017-12-27 07:07:23'),
(17, 34, 2, 'S2', 'a', 'a', 'a', 'a', '2.3', '20171227070743.pdf', '20171227070743.pdf', '2017-12-27 07:07:43', '2017-12-27 07:07:43'),
(18, 35, 2, 'S2', 'a', 'a', 'a', 'a', '2.3', '20171227070743.pdf', '20171227070743.pdf', '2017-12-27 07:07:43', '2017-12-27 07:07:43'),
(19, 35, 2, 's3', 'b', 'b', 'b', 'ad', '2.3', '20171227070743.pdf', '20171227070743.pdf', '2017-12-27 07:07:43', '2017-12-27 07:07:43'),
(20, 34, 2, 's3', 'b', 'b', 'b', 'ad', '2.3', '20171227070744.pdf', '20171227070744.pdf', '2017-12-27 07:07:44', '2017-12-27 07:07:44'),
(21, 36, 2, 'S2', 'a', 'a', 'a', 'a', '2.3', '20171227070807.pdf', '20171227070807.pdf', '2017-12-27 07:08:07', '2017-12-27 07:08:07'),
(22, 37, 2, 'S1', 'e', 'b', 'd', 'c', '3.3', '20171227070954.pdf', '20171227070954.pdf', '2017-12-27 07:09:54', '2017-12-27 07:09:54');

-- --------------------------------------------------------

--
-- Table structure for table `interviews`
--

CREATE TABLE `interviews` (
  `id_interview` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `interview_date` datetime NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile_phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `mobile_phone`, `email`, `password`, `role`, `created_at`, `updated_at`, `remember_token`) VALUES
(2, 'iswanto', '081807191508', 'x@x.com', '$2y$10$WrNpvAqz/pDEpY/dx75gFu/ALFVL74Anls1Jw8rc6QKcgN/BOXOzS', 'Member', '2017-12-10 06:56:33', '2017-12-10 07:16:57', 'j6Mxj7UdgzudhtVWk9VJ1ZqnC4QV9j6hE2J2NHzF8zSTs9n05hJ6TCCubla8'),
(3, 'admin', '081807191508', 'admin@admin.com', '$2y$10$WrNpvAqz/pDEpY/dx75gFu/ALFVL74Anls1Jw8rc6QKcgN/BOXOzS', 'Admin', NULL, NULL, 'w2Gd3rgo3EUwJMzZsxUOi9Hb39iPZOwOIEBKFa76ITfKeYbBBmnKmqRKwoTT');

-- --------------------------------------------------------

--
-- Table structure for table `multiple_choices`
--

CREATE TABLE `multiple_choices` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `question` text NOT NULL,
  `answer_a` text NOT NULL,
  `answer_b` text NOT NULL,
  `answer_c` text NOT NULL,
  `answer_d` text NOT NULL,
  `answer` varchar(100) NOT NULL,
  `feedback` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `multiple_choices`
--

INSERT INTO `multiple_choices` (`id`, `category`, `question`, `answer_a`, `answer_b`, `answer_c`, `answer_d`, `answer`, `feedback`, `created_at`, `updated_at`) VALUES
(2, 'Coding', 'g2', 'g2', 'g1', 'g3', 'g4', 'a', 'g2', '2018-02-11 04:23:20', '2018-02-11 04:28:20'),
(4, 'Design', 'ddd', 'dda', 'dd', 'dd', 'dd', 'b', 'dd', '2018-02-11 04:24:34', '2018-02-11 04:24:34'),
(5, 'QA', 'qa', 'asd', 'asd', 'asd', 'asd', 'c', 'asd', '2018-02-11 04:24:50', '2018-02-11 04:24:50'),
(6, 'Analytic', 'aaaa', 'aa', 'aa', 'aaa', 'aaa', 'd', 'aaa', '2018-02-11 04:25:01', '2018-02-11 04:25:01'),
(7, 'Coding', 'asd', 'asd', 'aasdasdasd', 'asdasd', 'asd', 'b', 'asd', '2018-02-11 04:29:30', '2018-02-11 04:29:30'),
(8, 'Coding', 'r', 'r4', 'asd', 'asdasd', 'asdasd', 'a', 'r3', '2018-02-11 06:45:20', '2018-02-11 06:45:29');

-- --------------------------------------------------------

--
-- Table structure for table `practices`
--

CREATE TABLE `practices` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `practices`
--

INSERT INTO `practices` (`id`, `category`, `file`, `created_at`, `updated_at`) VALUES
(1, 'undefined', '20180211044024.sql', '2018-02-11 04:40:24', '2018-02-11 04:40:24'),
(2, 'Coding', '20180211044212.sql', '2018-02-11 04:42:12', '2018-02-11 04:42:12');

-- --------------------------------------------------------

--
-- Table structure for table `quizs`
--

CREATE TABLE `quizs` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `intro` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `minute` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `id_cv` int(11) NOT NULL,
  `test_date` date NOT NULL,
  `score` decimal(5,2) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `id_cv`, `test_date`, `score`, `created_at`, `updated_at`) VALUES
(2, 37, '2018-02-11', '0.00', '2018-02-11 07:14:06', '2018-02-11 07:14:06');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_results`
--
CREATE TABLE `v_results` (
`name` varchar(100)
,`email` varchar(100)
,`mobile_phone` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `id_cv` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `place` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `year_in` int(11) DEFAULT NULL,
  `year_out` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `id_cv`, `id_member`, `place`, `position`, `year_in`, `year_out`, `created_at`, `updated_at`) VALUES
(1, 33, 2, '2000', 'b', 2003, 2000, '2017-12-27 07:07:23', '2017-12-27 07:07:23'),
(2, 35, 2, '2000', 'b', 2003, 2000, '2017-12-27 07:07:44', '2017-12-27 07:07:44'),
(3, 35, 2, '2000', 'b', 2003, 2000, '2017-12-27 07:07:44', '2017-12-27 07:07:44'),
(4, 34, 2, '2000', 'b', 2003, 2000, '2017-12-27 07:07:45', '2017-12-27 07:07:45'),
(5, 34, 2, '2000', 'b', 2003, 2000, '2017-12-27 07:07:45', '2017-12-27 07:07:45'),
(6, 37, 2, 'r', 'r', 2000, 2001, '2017-12-27 07:09:54', '2017-12-27 07:09:54'),
(7, 37, 2, 's', 'y', 2002, 2003, '2017-12-27 07:09:54', '2017-12-27 07:09:54');

-- --------------------------------------------------------

--
-- Structure for view `v_results`
--
DROP TABLE IF EXISTS `v_results`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_results`  AS  select `c`.`name` AS `name`,`c`.`email` AS `email`,`c`.`mobile_phone` AS `mobile_phone` from ((`results` `a` join `cvs` `b` on((`a`.`id_cv` = `b`.`id`))) join `members` `c` on((`c`.`id` = `b`.`id_member`))) where (`a`.`score` > 0) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interviews`
--
ALTER TABLE `interviews`
  ADD PRIMARY KEY (`id_interview`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multiple_choices`
--
ALTER TABLE `multiple_choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practices`
--
ALTER TABLE `practices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quizs`
--
ALTER TABLE `quizs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cvs`
--
ALTER TABLE `cvs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `interviews`
--
ALTER TABLE `interviews`
  MODIFY `id_interview` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `multiple_choices`
--
ALTER TABLE `multiple_choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `practices`
--
ALTER TABLE `practices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `quizs`
--
ALTER TABLE `quizs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
