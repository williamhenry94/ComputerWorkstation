-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jun 12, 2016 at 02:26 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workstation_setup`
--
CREATE DATABASE IF NOT EXISTS `workstation_setup` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `workstation_setup`;

-- --------------------------------------------------------

--
-- Table structure for table `adjustment_guide`
--

CREATE TABLE IF NOT EXISTS `adjustment_guide` (
  `guide_id` tinyint(4) NOT NULL,
  `question_id` varchar(100) NOT NULL,
  `guide` text NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_path` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adjustment_guide`
--

INSERT INTO `adjustment_guide` (`guide_id`, `question_id`, `guide`, `file_name`, `file_path`, `url`) VALUES
(1, '1668ef00-1116-11e6-8d7d-32d2872d4aee', 'Bend the monitor as long as 105°', 'adjusting_monitor.png', '/tools_adjustment/adjusting_monitor.png', '/picture/guide/1/21dd9d6c-fa60-11e5-b7cc-e280dbc85b6b'),
(2, '1668ef00-1116-11e6-8d7d-32d2872d4aee', 'Make sure you are comfortable with the monitor', 'adjusting_monitor.png', '/tools_adjustment/adjusting_monitor.png', '/picture/guide/2/21dd9d6c-fa60-11e5-b7cc-e280dbc85b6b');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `answer_id` varchar(100) NOT NULL,
  `question_id` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `answer` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answer_id`, `question_id`, `user_id`, `created_at`, `updated_at`, `answer`) VALUES
('5728a4ac9a9bf7.09079198', '1668ef00-1116-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:16:28', 'No'),
('5728a4ac9a9bf7.09079198', '2f527c80-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:16:28', 'No'),
('5728a4ac9a9bf7.09079198', '2f528446-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:16:28', 'No'),
('5728a4ac9a9bf7.09079198', '2f5289be-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:16:28', 'No'),
('5728a4ac9a9bf7.09079198', '2f529332-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:16:28', 'No'),
('5728a4ac9a9bf7.09079198', '3467b2e2-1112-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:16:28', 'No'),
('5728a4ac9a9bf7.09079198', '3467b8be-1112-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:16:28', 'No'),
('5728a4ac9a9bf7.09079198', '3fcdb43e-1111-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:16:28', 'No'),
('5728a4ac9a9bf7.09079198', '3fcdbbd2-1111-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:16:28', 'No'),
('5728a4ac9a9bf7.09079198', '4e37bf4c-1111-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:16:28', 'No'),
('5728a4ac9a9bf7.09079198', '4e37c51e-1111-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:16:28', 'No'),
('5728a4ac9a9bf7.09079198', '6cfefab4-110f-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:16:28', 'No'),
('5728a4ac9a9bf7.09079198', '6cff0482-110f-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:16:28', 'No'),
('5728a4ac9a9bf7.09079198', '6cff093c-110f-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:16:28', 'No'),
('5728a4ac9a9bf7.09079198', '6cff101c-110f-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:16:28', 'No'),
('5728a4ac9a9bf7.09079198', '8d12556c-110f-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:16:28', 'No'),
('5728a4ac9a9bf7.09079198', '8d125b8e-110f-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:16:28', 'No'),
('5728a4ac9a9bf7.09079198', 'c8287aea-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:16:28', 'No'),
('5728a4ac9a9bf7.09079198', 'c8288292-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:16:28', 'No'),
('5728a4ac9a9bf7.09079198', 'f068bb64-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:16:28', 'No'),
('5728a4ac9a9bf7.09079198', 'f068c1ea-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:16:28', 'No'),
('5728a4e99c0897.22916802', '1668ef00-1116-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:17:29', 'Yes'),
('5728a4e99c0897.22916802', '2f527c80-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:17:29', 'Yes'),
('5728a4e99c0897.22916802', '2f528446-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:17:29', 'Yes'),
('5728a4e99c0897.22916802', '2f5289be-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:17:29', 'No'),
('5728a4e99c0897.22916802', '2f529332-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:17:29', 'No'),
('5728a4e99c0897.22916802', '3467b2e2-1112-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:17:29', 'No'),
('5728a4e99c0897.22916802', '3467b8be-1112-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:17:29', 'No'),
('5728a4e99c0897.22916802', '3fcdb43e-1111-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:17:29', 'Yes'),
('5728a4e99c0897.22916802', '3fcdbbd2-1111-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:17:29', 'Yes'),
('5728a4e99c0897.22916802', '4e37bf4c-1111-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:17:29', 'Yes'),
('5728a4e99c0897.22916802', '4e37c51e-1111-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:14:08', '2016-05-03 03:17:29', ''),
('5728a4e99c0897.22916802', '6cfefab4-110f-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:17:07', '2016-05-03 03:17:29', 'No'),
('5728a4e99c0897.22916802', '6cff0482-110f-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:17:07', '2016-05-03 03:17:29', 'No'),
('5728a4e99c0897.22916802', '6cff093c-110f-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:17:07', '2016-05-03 03:17:29', 'Yes'),
('5728a4e99c0897.22916802', '6cff101c-110f-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:17:07', '2016-05-03 03:17:29', 'Yes'),
('5728a4e99c0897.22916802', '8d12556c-110f-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:17:07', '2016-05-03 03:17:29', 'Yes'),
('5728a4e99c0897.22916802', '8d125b8e-110f-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:17:07', '2016-05-03 03:17:29', 'No'),
('5728a4e99c0897.22916802', 'c8287aea-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:17:07', '2016-05-03 03:17:29', 'No'),
('5728a4e99c0897.22916802', 'c8288292-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:17:07', '2016-05-03 03:17:29', 'No'),
('5728a4e99c0897.22916802', 'f068bb64-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:17:07', '2016-05-03 03:17:29', 'Yes'),
('5728a4e99c0897.22916802', 'f068c1ea-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:17:07', '2016-05-03 03:17:29', 'No'),
('57299b08adee95.11642452', '1668ef00-1116-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:17:07', '2016-05-03 20:47:36', 'Yes'),
('57299c2fae02b8.17265244', '1668ef00-1116-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:17:07', '2016-05-03 20:52:31', 'Yes'),
('57299c75862381.54728254', '1668ef00-1116-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:17:07', '2016-05-03 20:53:41', 'Yes'),
('57299d0625f540.44696668', '1668ef00-1116-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:17:07', '2016-05-03 20:56:06', 'Yes'),
('5729b9c5b46ce2.94080146', '1668ef00-1116-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:17:07', '2016-05-03 22:58:45', 'No'),
('5729b9c5b46ce2.94080146', '2f527c80-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:17:07', '2016-05-03 22:58:45', 'No'),
('5729b9c5b46ce2.94080146', '2f528446-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:17:07', '2016-05-03 22:58:45', 'No'),
('5729b9c5b46ce2.94080146', '2f5289be-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:17:07', '2016-05-03 22:58:45', 'No'),
('5729b9c5b46ce2.94080146', '2f529332-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:17:07', '2016-05-03 22:58:45', 'No'),
('5729b9c5b46ce2.94080146', '3467b2e2-1112-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:17:07', '2016-05-03 22:58:45', 'No'),
('5729b9c5b46ce2.94080146', '3467b8be-1112-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:20:07', '2016-05-03 22:58:45', 'No'),
('5729b9c5b46ce2.94080146', '3fcdb43e-1111-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:20:07', '2016-05-03 22:58:45', 'No'),
('5729b9c5b46ce2.94080146', '3fcdbbd2-1111-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:20:07', '2016-05-03 22:58:45', 'No'),
('5729b9c5b46ce2.94080146', '4e37bf4c-1111-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:20:07', '2016-05-03 22:58:45', 'No'),
('5729b9c5b46ce2.94080146', '4e37c51e-1111-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:20:07', '2016-05-03 22:58:45', 'No'),
('5729b9c5b46ce2.94080146', '6cfefab4-110f-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:20:07', '2016-05-03 22:58:45', 'No'),
('5729b9c5b46ce2.94080146', '6cff0482-110f-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:20:07', '2016-05-03 22:58:45', 'No'),
('5729b9c5b46ce2.94080146', '6cff093c-110f-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:20:07', '2016-05-03 22:58:45', 'No'),
('5729b9c5b46ce2.94080146', '6cff101c-110f-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:20:07', '2016-05-03 22:58:45', 'Yes'),
('5729b9c5b46ce2.94080146', '8d12556c-110f-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:20:07', '2016-05-03 22:58:45', 'Yes'),
('5729b9c5b46ce2.94080146', '8d125b8e-110f-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:20:07', '2016-05-03 22:58:45', 'Yes'),
('5729b9c5b46ce2.94080146', 'c8287aea-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:20:07', '2016-05-03 22:58:45', 'Yes'),
('5729b9c5b46ce2.94080146', 'c8288292-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:20:07', '2016-05-03 22:58:45', 'Yes'),
('5729b9c5b46ce2.94080146', 'f068bb64-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:20:07', '2016-05-03 22:58:45', 'Yes'),
('5729b9c5b46ce2.94080146', 'f068c1ea-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 12:20:07', '2016-05-03 22:58:45', 'Yes'),
('572ffd05ad1530.15217024', '1668ef00-1116-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 16:59:17', '2016-05-08 16:59:17', 'Yes'),
('572ffd05ad1530.15217024', '2f527c80-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 16:59:17', '2016-05-08 16:59:17', 'Yes'),
('572ffd05ad1530.15217024', '2f528446-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 16:59:17', '2016-05-08 16:59:17', 'Yes'),
('572ffd05ad1530.15217024', '2f5289be-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 16:59:17', '2016-05-08 16:59:17', 'Yes'),
('572ffd05ad1530.15217024', '2f529332-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 16:59:17', '2016-05-08 16:59:17', 'Yes'),
('572ffd05ad1530.15217024', '3467b2e2-1112-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 16:59:17', '2016-05-08 16:59:17', 'Yes'),
('572ffd05ad1530.15217024', '3467b8be-1112-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 16:59:17', '2016-05-08 16:59:17', 'No'),
('572ffd05ad1530.15217024', '3fcdb43e-1111-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 16:59:17', '2016-05-08 16:59:17', 'No'),
('572ffd05ad1530.15217024', '3fcdbbd2-1111-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 16:59:17', '2016-05-08 16:59:17', 'No'),
('572ffd05ad1530.15217024', '4e37bf4c-1111-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 16:59:17', '2016-05-08 16:59:17', 'No'),
('572ffd05ad1530.15217024', '4e37c51e-1111-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 16:59:17', '2016-05-08 16:59:17', 'No'),
('572ffd05ad1530.15217024', '6cfefab4-110f-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 16:59:17', '2016-05-08 16:59:17', 'No'),
('572ffd05ad1530.15217024', '6cff0482-110f-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 16:59:17', '2016-05-08 16:59:17', 'No'),
('572ffd05ad1530.15217024', '6cff093c-110f-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 16:59:17', '2016-05-08 16:59:17', 'No'),
('572ffd05ad1530.15217024', '6cff101c-110f-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 16:59:17', '2016-05-08 16:59:17', 'No'),
('572ffd05ad1530.15217024', '8d12556c-110f-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 16:59:17', '2016-05-08 16:59:17', 'No'),
('572ffd05ad1530.15217024', '8d125b8e-110f-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 16:59:17', '2016-05-08 16:59:17', 'Yes'),
('572ffd05ad1530.15217024', 'c8287aea-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 16:59:17', '2016-05-08 16:59:17', 'Yes'),
('572ffd05ad1530.15217024', 'c8288292-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 16:59:17', '2016-05-08 16:59:17', 'Yes'),
('572ffd05ad1530.15217024', 'f068bb64-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 16:59:17', '2016-05-08 16:59:17', 'Yes'),
('572ffd05ad1530.15217024', 'f068c1ea-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-05-08 16:59:17', '2016-05-08 16:59:17', 'Yes'),
('575283074d7536.34487043', '1668ef00-1116-11e6-8d7d-32d2872d4aee', 's4412906', '2016-06-03 21:39:04', '2016-06-03 21:39:04', 'Yes'),
('575283074d7536.34487043', '2f527c80-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-06-03 21:40:17', '2016-06-03 21:40:17', 'Yes'),
('575283074d7536.34487043', '2f528446-1110-11e6-8d7d-32d2872d4aee', 's4412906', '2016-06-03 21:41:35', '2016-06-03 21:41:35', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `answer_form`
--

CREATE TABLE IF NOT EXISTS `answer_form` (
  `answer_id` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `completed_at` timestamp NULL DEFAULT NULL,
  `location` varchar(100) NOT NULL,
  `help` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer_form`
--

INSERT INTO `answer_form` (`answer_id`, `user_id`, `created_at`, `updated_at`, `completed_at`, `location`, `help`) VALUES
('5728a4ac9a9bf7.09079198', 's4412906', '2016-05-09 02:38:13', NULL, NULL, 'Toowong', 0),
('5728a4e99c0897.22916802', 's4412906', '2016-05-09 02:38:18', NULL, NULL, 'Toowong', 0),
('57299b08adee95.11642452', 's4412906', '2016-05-09 02:38:19', NULL, NULL, 'Toowong', 0),
('57299c2fae02b8.17265244', 's4412906', '2016-05-09 02:38:24', NULL, NULL, 'Indooroopilly', 0),
('57299c75862381.54728254', 's4412906', '2016-05-09 02:38:41', NULL, NULL, 'St.lucia', 0),
('57299d0625f540.44696668', 's4412906', '2016-05-09 02:38:37', NULL, NULL, 'St.lucia', 0),
('5729b9c5b46ce2.94080146', 's4412906', '2016-05-09 02:38:31', NULL, NULL, 'Indooroopilly', 0),
('572ffd05ad1530.15217024', 's4412906', '2016-05-09 02:59:17', NULL, NULL, 'toowong', 0),
('5732ea8f40a030.36136145', 's4412906', '2016-05-11 08:17:19', NULL, NULL, 'st.lucia', 0),
('5732eac2cd7fa4.18115894', 's4412906', '2016-05-11 08:18:10', NULL, NULL, 'st.lucia', 0),
('5732eb1426c454.93574098', 's4412906', '2016-05-11 08:19:32', NULL, NULL, 'st.lucia', 0),
('575283074d7536.34487043', 's4412906', '2016-06-04 07:38:55', NULL, NULL, 'BEL', 1),
('575283103e7cb0.87184066', 's4412906', '2016-06-04 07:28:16', NULL, NULL, 'NULL', 0),
('57528344310e34.18560559', 's4412906', '2016-06-04 07:29:08', NULL, NULL, 'NULL', 0),
('5752835d5fe5a0.96333391', 's4412906', '2016-06-04 07:29:33', NULL, NULL, 'NULL', 0),
('57528368e90f26.52642974', 's4412906', '2016-06-04 07:29:44', NULL, NULL, 'NULL', 0),
('5752838c00dac8.13214483', 's4412906', '2016-06-04 07:30:20', NULL, NULL, 'NULL', 0),
('575283a6bb7411.07737737', 's4412906', '2016-06-04 07:30:46', NULL, NULL, 'NULL', 0),
('575283ba766ac4.51989491', 's4412906', '2016-06-04 07:31:06', NULL, NULL, 'NULL', 0),
('575284c77cf379.42144741', 's4412906', '2016-06-04 07:35:35', NULL, NULL, 'NULL', 0),
('575285be0f9d96.18413407', 's4412906', '2016-06-04 07:39:42', NULL, NULL, 'NULL', 0),
('57528612ed01c6.51572737', 's4412906', '2016-06-04 07:41:06', NULL, NULL, 'NULL', 0),
('5752862f268622.85092267', 's4412906', '2016-06-04 07:41:35', NULL, NULL, 'NULL', 0),
('57528649a71786.31537695', 's4412906', '2016-06-04 07:42:01', NULL, NULL, 'NULL', 0),
('575286a72cbce3.65660316', 's4412906', '2016-06-04 07:43:35', NULL, NULL, 'NULL', 0),
('575286d1dd1308.05590049', 's4412906', '2016-06-04 07:44:17', NULL, NULL, 'NULL', 0),
('575287015b3b67.66316887', 's4412906', '2016-06-04 07:45:05', NULL, NULL, 'NULL', 0),
('57528739633a60.88538536', 's4412906', '2016-06-04 07:46:01', NULL, NULL, 'NULL', 0),
('575287471e3c70.96590605', 's4412906', '2016-06-04 07:46:15', NULL, NULL, 'NULL', 0),
('57528767a87585.05321954', 's4412906', '2016-06-04 07:46:47', NULL, NULL, 'NULL', 0),
('575287984da1d3.86601820', 's4412906', '2016-06-04 07:47:36', NULL, NULL, 'NULL', 0),
('575287cd20b5d7.65019230', 's4412906', '2016-06-04 07:48:29', NULL, NULL, 'NULL', 0),
('575287ec63b566.31205975', 's4412906', '2016-06-04 07:49:00', NULL, NULL, 'NULL', 0),
('575288085439f9.59862665', 's4412906', '2016-06-04 07:49:28', NULL, NULL, 'NULL', 0),
('575288784ca329.66570375', 's4412906', '2016-06-04 07:51:20', NULL, NULL, 'NULL', 0),
('57528904802485.24292795', 's4412906', '2016-06-04 07:53:40', NULL, NULL, 'NULL', 0),
('575289b9d3f4a1.44331655', 's4412906', '2016-06-04 07:56:41', NULL, NULL, 'NULL', 0),
('57528a03d828f6.97691192', 's4412906', '2016-06-04 07:57:55', NULL, NULL, 'NULL', 0),
('57528a35739af4.98668329', 's4412906', '2016-06-04 07:58:45', NULL, NULL, 'NULL', 0),
('57528a4ca5a516.33701723', 's4412906', '2016-06-04 07:59:08', NULL, NULL, 'NULL', 0),
('57528b8b7a04c9.33840951', 's4412906', '2016-06-04 08:04:27', NULL, NULL, 'NULL', 0),
('57528c0b53feb5.45289224', 's4412906', '2016-06-04 08:06:35', NULL, NULL, 'NULL', 0),
('57528c3377bd80.70659761', 's4412906', '2016-06-04 08:07:15', NULL, NULL, 'NULL', 0),
('57528c7f4a4295.15735491', 's4412906', '2016-06-04 08:08:31', NULL, NULL, 'NULL', 0),
('57528cb89e30c3.57894835', 's4412906', '2016-06-04 08:09:28', NULL, NULL, 'NULL', 0),
('57528cfa619b70.60523212', 's4412906', '2016-06-04 08:10:34', NULL, NULL, 'NULL', 0),
('57528e63b04ec1.30878117', 's4412906', '2016-06-04 08:16:35', NULL, NULL, 'NULL', 0),
('57528e7055f9f4.11881444', 's4412906', '2016-06-04 08:16:48', NULL, NULL, 'NULL', 0),
('57529eaf2838c8.15588853', 's4412906', '2016-06-04 09:26:07', NULL, NULL, 'NULL', 0),
('5752aa7c669739.87695712', 's4412906', '2016-06-04 10:16:28', NULL, NULL, 'NULL', 0),
('5752ace1962135.43005842', 's4412906', '2016-06-04 10:26:41', NULL, NULL, 'NULL', 0),
('5752ad16d7ed19.71742985', 's4412906', '2016-06-04 10:27:34', NULL, NULL, 'NULL', 0),
('5752ad232ae757.70194699', 's4412906', '2016-06-04 10:27:47', NULL, NULL, 'NULL', 0),
('57553c4e872544.12561723', 's4412906', '2016-06-06 09:03:10', NULL, NULL, 'NULL', 0),
('57553c5e6dbb23.35331119', 's4412906', '2016-06-06 09:03:26', NULL, NULL, 'NULL', 0),
('57553c6d967ec2.05437158', 's4412906', '2016-06-06 09:03:41', NULL, NULL, 'NULL', 0),
('57553ee79ac6e4.18019271', 's4412906', '2016-06-06 09:14:15', NULL, NULL, 'NULL', 0),
('57553fd85c8819.77632933', 's4412906', '2016-06-06 09:18:16', NULL, NULL, 'NULL', 0),
('5755405770d772.19043192', 's4412906', '2016-06-06 09:20:23', NULL, NULL, 'NULL', 0),
('5757c3eb42e4c5.33622369', 's4412906', '2016-06-08 07:06:19', NULL, NULL, 'NULL', 0),
('5757c5c07d43e0.04837291', 's4412906', '2016-06-08 07:14:08', NULL, NULL, 'NULL', 0),
('5757c5fc5be547.00554388', 's4412906', '2016-06-08 07:15:08', NULL, NULL, 'NULL', 0),
('5757c620c8a3a6.66226954', 's4412906', '2016-06-08 07:15:44', NULL, NULL, 'NULL', 0),
('5757c6348f6304.07179367', 's4412906', '2016-06-08 07:16:04', NULL, NULL, 'NULL', 0),
('5757c64aca9309.22268138', 's4412906', '2016-06-08 07:16:26', NULL, NULL, 'NULL', 0),
('5757c654b1e339.67156329', 's4412906', '2016-06-08 07:16:36', NULL, NULL, 'NULL', 0),
('5757c666e63af2.83574469', 's4412906', '2016-06-08 07:16:54', NULL, NULL, 'NULL', 0),
('5757c66ec6ee63.12389748', 's4412906', '2016-06-08 07:17:02', NULL, NULL, 'NULL', 0),
('5758e6728f6d61.28979667', 's4412906', '2016-06-09 03:45:54', NULL, NULL, 'NULL', 0);

-- --------------------------------------------------------

--
-- Table structure for table `area_issues`
--

CREATE TABLE IF NOT EXISTS `area_issues` (
  `body_part` varchar(20) NOT NULL,
  `body_name` varchar(100) NOT NULL,
  `filename` varchar(200) DEFAULT NULL,
  `filepath` varchar(200) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area_issues`
--

INSERT INTO `area_issues` (`body_part`, `body_name`, `filename`, `filepath`, `url`) VALUES
('head', 'Headaches / Eye strain', NULL, NULL, NULL),
('lowerBack1', 'Lower Back', NULL, NULL, NULL),
('lowerBack2', 'Lower Back/ Hips/ Legs', NULL, NULL, NULL),
('neck', 'Neck', NULL, NULL, NULL),
('shoulder', 'Shoulder', NULL, NULL, NULL),
('upperBack', 'Upper Back/Both Shoulders', NULL, NULL, NULL),
('wrist1H', 'Wrist (mousing hand only)', NULL, NULL, NULL),
('wrist2H', 'Wrist (both)', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `area_issues_exercises`
--

CREATE TABLE IF NOT EXISTS `area_issues_exercises` (
  `body_part` varchar(20) NOT NULL,
  `exercise_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area_issues_exercises`
--

INSERT INTO `area_issues_exercises` (`body_part`, `exercise_id`) VALUES
('neck', '81afb572-0e10-11e6-870c-138e902713e8'),
('shoulder', '81afb572-0e10-11e6-870c-138e902713e8'),
('shoulder', '81afc972-0e10-11e6-870c-138e902713e8'),
('wrist2H', '81afc972-0e10-11e6-870c-138e902713e8');

-- --------------------------------------------------------

--
-- Table structure for table `assessment_question`
--

CREATE TABLE IF NOT EXISTS `assessment_question` (
  `tool_name` varchar(100) NOT NULL,
  `question_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessment_question`
--

INSERT INTO `assessment_question` (`tool_name`, `question_id`) VALUES
('monitor', '1668ef00-1116-11e6-8d7d-32d2872d4aee'),
('monitor', '2f527c80-1110-11e6-8d7d-32d2872d4aee'),
('monitor', '2f528446-1110-11e6-8d7d-32d2872d4aee'),
('monitor', '2f5289be-1110-11e6-8d7d-32d2872d4aee'),
('monitor', '2f529332-1110-11e6-8d7d-32d2872d4aee'),
('office environment & work habit', '3467b2e2-1112-11e6-8d7d-32d2872d4aee'),
('office environment & work habit', '3467b8be-1112-11e6-8d7d-32d2872d4aee'),
('keyboard', '3fcdb43e-1111-11e6-8d7d-32d2872d4aee'),
('mouse', '3fcdb43e-1111-11e6-8d7d-32d2872d4aee'),
('work surface', '3fcdb43e-1111-11e6-8d7d-32d2872d4aee'),
('keyboard', '3fcdbbd2-1111-11e6-8d7d-32d2872d4aee'),
('mouse', '3fcdbbd2-1111-11e6-8d7d-32d2872d4aee'),
('work surface', '3fcdbbd2-1111-11e6-8d7d-32d2872d4aee'),
('keyboard', '4e37bf4c-1111-11e6-8d7d-32d2872d4aee'),
('mouse', '4e37bf4c-1111-11e6-8d7d-32d2872d4aee'),
('work surface', '4e37bf4c-1111-11e6-8d7d-32d2872d4aee'),
('keyboard', '4e37c51e-1111-11e6-8d7d-32d2872d4aee'),
('mouse', '4e37c51e-1111-11e6-8d7d-32d2872d4aee'),
('work surface', '4e37c51e-1111-11e6-8d7d-32d2872d4aee'),
('chair', '6cfefab4-110f-11e6-8d7d-32d2872d4aee'),
('chair', '6cff0482-110f-11e6-8d7d-32d2872d4aee'),
('chair', '6cff093c-110f-11e6-8d7d-32d2872d4aee'),
('chair', '6cff101c-110f-11e6-8d7d-32d2872d4aee'),
('chair', '8d12556c-110f-11e6-8d7d-32d2872d4aee'),
('chair', '8d125b8e-110f-11e6-8d7d-32d2872d4aee'),
('monitor', 'c8287aea-1110-11e6-8d7d-32d2872d4aee'),
('monitor', 'c8288292-1110-11e6-8d7d-32d2872d4aee'),
('document', 'f068bb64-1110-11e6-8d7d-32d2872d4aee'),
('telephone', 'f068bb64-1110-11e6-8d7d-32d2872d4aee'),
('document', 'f068c1ea-1110-11e6-8d7d-32d2872d4aee'),
('telephone', 'f068c1ea-1110-11e6-8d7d-32d2872d4aee');

-- --------------------------------------------------------

--
-- Table structure for table `exercises`
--

CREATE TABLE IF NOT EXISTS `exercises` (
  `exercise_id` varchar(100) NOT NULL,
  `time` int(11) NOT NULL,
  `warning` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exercises`
--

INSERT INTO `exercises` (`exercise_id`, `time`, `warning`) VALUES
('81afb572-0e10-11e6-870c-138e902713e8', 5, NULL),
('81afc972-0e10-11e6-870c-138e902713e8', 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exercises_instrutions`
--

CREATE TABLE IF NOT EXISTS `exercises_instrutions` (
  `instruction_id` varchar(100) NOT NULL,
  `repitition` int(11) NOT NULL,
  `filename` varchar(100) DEFAULT NULL,
  `filepath` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `instruction` text NOT NULL,
  `exercise_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exercises_instrutions`
--

INSERT INTO `exercises_instrutions` (`instruction_id`, `repitition`, `filename`, `filepath`, `url`, `instruction`, `exercise_id`) VALUES
('b50956c6-0e10-11e6-870c-138e902713e8', 5, NULL, NULL, NULL, 'rotate your neck to left and right', '81afb572-0e10-11e6-870c-138e902713e8'),
('b5096706-0e10-11e6-870c-138e902713e8', 5, NULL, NULL, NULL, 'move your shoulder to back and forth', '81afb572-0e10-11e6-870c-138e902713e8'),
('b5097912-0e10-11e6-870c-138e902713e8', 5, NULL, NULL, NULL, 'try to rotate your shoulder', '81afc972-0e10-11e6-870c-138e902713e8');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` varchar(100) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `question`) VALUES
('1668ef00-1116-11e6-8d7d-32d2872d4aee', 'If you are using a laptop, elevate the laptop to align the top with eye level and use external keyboard and mouse. Consider use of an external full-sized monitor as well. '),
('2f527c80-1110-11e6-8d7d-32d2872d4aee', 'Position your monitor(s) so the top is in line with or slightly below eye level. '),
('2f528446-1110-11e6-8d7d-32d2872d4aee', 'Position the monitor(s) directly in front of the body to minimise neck twisting.'),
('2f5289be-1110-11e6-8d7d-32d2872d4aee', 'Position the monitor(s) approximately an arm’s length away.'),
('2f529332-1110-11e6-8d7d-32d2872d4aee', 'If you are using 2 monitors equally (both all the time) centre the monitors to the keyboard/mouse to minimise neck twisting and position them so they are the same height and distance from you.\nIf one monitor is used more frequently than the other, centralise the main monitor and place the secondary monitor directly beside but slightly off-centre. '),
('3467b2e2-1112-11e6-8d7d-32d2872d4aee', 'Take frequent, short breaks (e.g. 2 minutes every 30) from seated work throughout the day. '),
('3467b8be-1112-11e6-8d7d-32d2872d4aee', 'Alternate your work activities throughout the day to avoid static and repetitive postures.'),
('3fcdb43e-1111-11e6-8d7d-32d2872d4aee', 'Position your keyboard close to the edge of the desk to minimise forward reaching but slightly forward to provide enough space to rest forearms on the desk during typing breaks. '),
('3fcdbbd2-1111-11e6-8d7d-32d2872d4aee', 'Position your mouse directly beside your keyboard to avoid shoulder strain. If right arm is held away from the body during mousing tasks, consider use of a compact keyboard (without numeric pad) to keep right arm closer. Request assistance from your local WHSC for a compact keyboard.'),
('4e37bf4c-1111-11e6-8d7d-32d2872d4aee', 'Place regularly used items within easy reach.'),
('4e37c51e-1111-11e6-8d7d-32d2872d4aee', 'Close the feet on your keyboard (if applicable) so it is flat on the desk and minimises awkward wrist postures.'),
('6cfefab4-110f-11e6-8d7d-32d2872d4aee', 'Adjust seat height to align elbows to desk height. (you may need a colleague to check this height for you)'),
('6cff0482-110f-11e6-8d7d-32d2872d4aee', 'Adjust backrest height (if applicable) to align contour of chair with curve in lower back.'),
('6cff093c-110f-11e6-8d7d-32d2872d4aee', 'Adjust the backrest angle (or recline tension) to encourage a comfortable upright seated posture. '),
('6cff101c-110f-11e6-8d7d-32d2872d4aee', 'If your feet are not fully supported on the floor, consider use of a footrest if you do not already have one.\r\nRequest assistance from your local WHSC for a footrest (or use a ream of copier paper). '),
('8d12556c-110f-11e6-8d7d-32d2872d4aee', 'If your chair has armrests, lower them so they do not restrict access to the desk and so they do not force shoulder elevation. If this is not possible contact your WHSC who may be able to have the armrests removed'),
('8d125b8e-110f-11e6-8d7d-32d2872d4aee', 'Adjust the seat length (if applicable) to provide enough thigh support but to avoid compression on the back of the knees. 2-3 finger spaces between back of knees and edge of seat is optimal. '),
('c8287aea-1110-11e6-8d7d-32d2872d4aee', 'If you wear progressive lenses or bifocals, can you view the monitor(s) without tilting your head backward in an awkward position? Consider dedicated computer glasses to avoid awkward neck postures with progressives or bifocal lenses.'),
('c8288292-1110-11e6-8d7d-32d2872d4aee', 'Position monitor(s) perpendicularly to windows or large light sources if possible.'),
('f068bb64-1110-11e6-8d7d-32d2872d4aee', 'If you regularly view hard copy documents during computer work, request use of a document holder to minimise awkward neck postures when referring to paper documents.  '),
('f068c1ea-1110-11e6-8d7d-32d2872d4aee', 'If you use your telephone frequently or for extended periods while using your computer, use a telephone headset. Request through Voice Operations in ITS.');

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE IF NOT EXISTS `solutions` (
  `solution_id` varchar(100) NOT NULL,
  `solution` text NOT NULL,
  `body_part` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`solution_id`, `solution`, `body_part`) VALUES
('07dfdcd0-0ddf-11e6-870c-138e902713e8', 'Ensure monitor(s) at optimal height (top of monitor slightly below eye level)', 'neck'),
('07dfe6e4-0ddf-11e6-870c-138e902713e8', 'Do you use multiple monitors?<br><ul><li>Use both equally? Centralise monitors to minimise twisting</li><li>Use one more than the other? Main monitor should be centrally located and secondary monitor directly beside</li></ul>', 'neck'),
('07dfebda-0ddf-11e6-870c-138e902713e8', 'Frequent use of paper documents or text books? Consider use of adocument holder', 'neck'),
('07dff030-0ddf-11e6-870c-138e902713e8', 'Do you wear bifocals or progressive lenses? Can dedicated computer glasses used for computer work?', 'neck'),
('4b8a074c-0deb-11e6-870c-138e902713e8', 'Monitor(s) should be arm’s length away', 'head'),
('4b8a2506-0deb-11e6-870c-138e902713e8', 'Ensure monitor(s) at optimal height (top of monitor slightly below eye level)', 'head'),
('4b8a3582-0deb-11e6-870c-138e902713e8', 'Reposition/tilt monitor to minimise glare from windows or overhead lights', 'head'),
('4b8a42de-0deb-11e6-870c-138e902713e8', 'Lighting in work area- Is overhead lighting too bright or dim for your needs?', 'head'),
('4b8a4d24-0deb-11e6-870c-138e902713e8', 'Check your eye glasses prescription, it may need to be updated', 'head'),
('70b08a6e-0deb-11e6-870c-138e902713e8', 'Adjust brightness/contrast settings', 'head'),
('7b4cfd5a-0dea-11e6-870c-138e902713e8', 'Avoid ‘planting’ hand on desk/mouse pad and pivoting during mouse work. Turn cushioned mouse pad around, avoid wrist rests', 'wrist1H'),
('7b4d0674-0dea-11e6-870c-138e902713e8', 'Try mousing with other hand', 'wrist1H'),
('7b4d0cb4-0dea-11e6-870c-138e902713e8', 'Consider vertical mouse', 'wrist1H'),
('b0f2ca5a-0de7-11e6-870c-138e902713e8', 'If mousing arm held away from body - consider compact keyboard', 'shoulder'),
('bbd4e18c-0de8-11e6-870c-138e902713e8', 'Ensure elbows aligned to desk height- adjust chair if needed', 'upperBack'),
('bbd4fc76-0de8-11e6-870c-138e902713e8', 'Lumbar contour of chair should be aligned to lumbar curve', 'lowerBack1'),
('bbd5142c-0de8-11e6-870c-138e902713e8', 'Backrest angle should facilitate comfortable upright seated posture', 'lowerBack1'),
('bbd5221e-0de8-11e6-870c-138e902713e8', 'Footrest needed if feet not fully supported on floor', 'lowerBack1'),
('bbd52d40-0de8-11e6-870c-138e902713e8', 'Postural variation - take breaks from seated work every 30 minutes', 'lowerBack1'),
('e5a0b724-0de9-11e6-870c-138e902713e8', 'Forward seat tilt might alleviate discomfort- consider tilting seat or use of wedge seat cushion', 'lowerBack2'),
('e5a0c232-0de9-11e6-870c-138e902713e8', 'Are there 2-3 finger spaces between edge of seat and back of knees? Adjust seat slide or swap for chair with longer/short seat if needed', 'lowerBack2'),
('e5a0ca3e-0de9-11e6-870c-138e902713e8', 'Footrest needed if feet not fully supported on floor', 'lowerBack2'),
('f49c75c8-0dea-11e6-870c-138e902713e8', 'Keyboard angled? Close feet on keyboard to flatten', 'wrist2H'),
('f49c7dde-0dea-11e6-870c-138e902713e8', 'Consider low profile keyboard', 'wrist2H'),
('f49c836a-0dea-11e6-870c-138e902713e8', 'Avoid wrist rests', 'wrist2H'),
('f49c882e-0dea-11e6-870c-138e902713e8', 'Ensure space on desk to rest wrists/forearms', 'wrist2H');

-- --------------------------------------------------------

--
-- Table structure for table `target_component`
--

CREATE TABLE IF NOT EXISTS `target_component` (
  `body_part` varchar(20) NOT NULL,
  `tool_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `target_component`
--

INSERT INTO `target_component` (`body_part`, `tool_name`) VALUES
('lowerBack1', 'backrest angle'),
('lowerBack1', 'backrest height'),
('upperBack', 'desk height'),
('neck', 'document'),
('upperBack', 'elbow height'),
('lowerBack1', 'footrest'),
('lowerBack2', 'footrest'),
('head', 'glasses'),
('neck', 'glasses'),
('shoulder', 'keyboard'),
('wrist2H', 'keyboard'),
('head', 'lighting'),
('head', 'monitor'),
('neck', 'monitor'),
('shoulder', 'mouse'),
('wrist1H', 'mouse'),
('lowerBack2', 'seat angle'),
('lowerBack2', 'seat length'),
('neck', 'telephone');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE IF NOT EXISTS `tools` (
  `tool_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`tool_name`) VALUES
('backrest angle'),
('backrest height'),
('chair'),
('desk'),
('desk height'),
('document'),
('elbow height'),
('footrest'),
('glasses'),
('keyboard'),
('laptop'),
('lighting'),
('monitor'),
('mouse'),
('office environment & work habit'),
('seat angle'),
('seat length'),
('telephone'),
('work surface');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(100) NOT NULL,
  `personel_id` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `personel_id`) VALUES
('william.hidayat@gmail.com', 's4412906');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adjustment_guide`
--
ALTER TABLE `adjustment_guide`
  ADD PRIMARY KEY (`guide_id`,`question_id`),
  ADD KEY `fk_adjustment_guide` (`question_id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answer_id`,`user_id`,`question_id`),
  ADD KEY `fk_answers_users` (`user_id`),
  ADD KEY `fk_answers_questions` (`question_id`);

--
-- Indexes for table `answer_form`
--
ALTER TABLE `answer_form`
  ADD PRIMARY KEY (`answer_id`,`user_id`),
  ADD KEY `fk_answer_form_users` (`user_id`);

--
-- Indexes for table `area_issues`
--
ALTER TABLE `area_issues`
  ADD PRIMARY KEY (`body_part`);

--
-- Indexes for table `area_issues_exercises`
--
ALTER TABLE `area_issues_exercises`
  ADD PRIMARY KEY (`body_part`,`exercise_id`),
  ADD KEY `fk_area_issues_exercises_exercises` (`exercise_id`);

--
-- Indexes for table `assessment_question`
--
ALTER TABLE `assessment_question`
  ADD PRIMARY KEY (`tool_name`,`question_id`),
  ADD KEY `fk_assessment_questions` (`question_id`);

--
-- Indexes for table `exercises`
--
ALTER TABLE `exercises`
  ADD PRIMARY KEY (`exercise_id`);

--
-- Indexes for table `exercises_instrutions`
--
ALTER TABLE `exercises_instrutions`
  ADD PRIMARY KEY (`instruction_id`,`exercise_id`),
  ADD KEY `fk_instruction_exrecises` (`exercise_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`solution_id`,`body_part`),
  ADD KEY `fk_solutions_area_issues` (`body_part`);

--
-- Indexes for table `target_component`
--
ALTER TABLE `target_component`
  ADD PRIMARY KEY (`body_part`,`tool_name`),
  ADD KEY `fk_target_component_tools` (`tool_name`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`tool_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`personel_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adjustment_guide`
--
ALTER TABLE `adjustment_guide`
  MODIFY `guide_id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `adjustment_guide`
--
ALTER TABLE `adjustment_guide`
  ADD CONSTRAINT `fk_adjustment_guide_question` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `fk_answers_questions` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_answer_form` FOREIGN KEY (`answer_id`, `user_id`) REFERENCES `answer_form` (`answer_id`, `user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `answer_form`
--
ALTER TABLE `answer_form`
  ADD CONSTRAINT `fk_answer_form_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`personel_id`);

--
-- Constraints for table `area_issues_exercises`
--
ALTER TABLE `area_issues_exercises`
  ADD CONSTRAINT `fk_area_issues_exercises` FOREIGN KEY (`body_part`) REFERENCES `area_issues` (`body_part`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_area_issues_exercises_exercises` FOREIGN KEY (`exercise_id`) REFERENCES `exercises` (`exercise_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `assessment_question`
--
ALTER TABLE `assessment_question`
  ADD CONSTRAINT `fk_assessment_questions` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_assessment_question_tools` FOREIGN KEY (`tool_name`) REFERENCES `tools` (`tool_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exercises_instrutions`
--
ALTER TABLE `exercises_instrutions`
  ADD CONSTRAINT `fk_instruction_exrecises` FOREIGN KEY (`exercise_id`) REFERENCES `exercises` (`exercise_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `solutions`
--
ALTER TABLE `solutions`
  ADD CONSTRAINT `fk_solutions_area_issues` FOREIGN KEY (`body_part`) REFERENCES `area_issues` (`body_part`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `target_component`
--
ALTER TABLE `target_component`
  ADD CONSTRAINT `fk_target_component_area_issues` FOREIGN KEY (`body_part`) REFERENCES `area_issues` (`body_part`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_target_component_tools` FOREIGN KEY (`tool_name`) REFERENCES `tools` (`tool_name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
