-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2020 at 09:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hardwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_phase1`
--

CREATE TABLE `assign_phase1` (
  `assign_phase1_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_phase1`
--

INSERT INTO `assign_phase1` (`assign_phase1_id`, `group_id`) VALUES
(4, 10),
(5, 11),
(6, 12),
(7, 14),
(8, 17),
(9, 20),
(10, 21),
(11, 25),
(12, 26);

-- --------------------------------------------------------

--
-- Table structure for table `assign_phase2`
--

CREATE TABLE `assign_phase2` (
  `assign_phase2_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_phase2`
--

INSERT INTO `assign_phase2` (`assign_phase2_id`, `group_id`) VALUES
(4, 10),
(5, 11),
(6, 12),
(7, 14),
(8, 17),
(10, 20),
(11, 21),
(12, 25),
(13, 26);

-- --------------------------------------------------------

--
-- Table structure for table `assign_proposal`
--

CREATE TABLE `assign_proposal` (
  `assign_proposal_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_proposal`
--

INSERT INTO `assign_proposal` (`assign_proposal_id`, `group_id`) VALUES
(5, 10),
(6, 11),
(7, 12),
(8, 14),
(9, 15),
(11, 17),
(12, 18),
(13, 19),
(14, 20),
(15, 21),
(16, 25),
(17, 26);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `supervisor` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `message`, `supervisor`, `student`, `sender`) VALUES
(1, 'Hello sir', 52, 54, 'student'),
(2, 'How Are you?', 52, 54, 'student'),
(3, 'I am fine', 52, 54, 'student'),
(4, 'cxfd', 52, 54, 'student'),
(5, 'My project is ready', 52, 54, 'student'),
(6, 'Ok Come to my office tomorrow at 10am.', 52, 54, 'supervisor'),
(7, 'Ok sir', 52, 54, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `dates`
--

CREATE TABLE `dates` (
  `dates_id` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dates`
--

INSERT INTO `dates` (`dates_id`, `startdate`, `enddate`) VALUES
(2, '2020-01-02', '2020-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `evaluate_phase1`
--

CREATE TABLE `evaluate_phase1` (
  `evaluate_phase1_id` int(11) NOT NULL,
  `ph1_marks` int(3) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `marker` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluate_phase1`
--

INSERT INTO `evaluate_phase1` (`evaluate_phase1_id`, `ph1_marks`, `remarks`, `marker`, `user_id`, `group_id`) VALUES
(5, 82, 'evaluated', 0, 0, 11),
(15, 95, 'Excellent', 0, 0, 12),
(16, 95, 'excellent', 0, 0, 14),
(17, 90, 'Good', 0, 0, 17),
(18, 80, 'good', 0, 0, 20),
(19, 90, 'pass', 0, 0, 21),
(20, 70, 'Normal', 0, 54, 25),
(21, 90, 'mm', 0, 57, 26),
(22, 80, 'zz', 0, 58, 26),
(23, 70, 'za', 0, 59, 26);

-- --------------------------------------------------------

--
-- Table structure for table `evaluate_phase2`
--

CREATE TABLE `evaluate_phase2` (
  `evaluate_phase2_id` int(11) NOT NULL,
  `ph2_marks` int(3) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `marker` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluate_phase2`
--

INSERT INTO `evaluate_phase2` (`evaluate_phase2_id`, `ph2_marks`, `remarks`, `marker`, `user_id`, `group_id`) VALUES
(5, 80, 'ok', 0, 0, 10),
(36, 75, 'pass', 0, 0, 11),
(37, 75, 'ok', 0, 0, 12),
(38, 75, 'ok', 0, 0, 14),
(39, 80, 'Good', 0, 0, 17),
(40, 85, 'good', 0, 0, 20),
(41, 80, 'good', 0, 0, 21),
(47, 90, 'Very good', 0, 54, 25),
(48, 55, 'fdt', 1, 57, 26),
(49, 66, 'fgd', 1, 58, 26),
(50, 78, 'bj', 1, 59, 26);

-- --------------------------------------------------------

--
-- Table structure for table `evaluate_proposal`
--

CREATE TABLE `evaluate_proposal` (
  `evaluate_proposal_id` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `marker` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluate_proposal`
--

INSERT INTO `evaluate_proposal` (`evaluate_proposal_id`, `status`, `remarks`, `marker`, `group_id`) VALUES
(14, 'Approved', 'ok', 0, 10),
(15, 'Approved', 'yes approved', 0, 11),
(16, 'Approved', 'good', 0, 12),
(17, 'Approved', 'good', 0, 14),
(18, 'Approved', 'Great', 0, 15),
(21, 'Approved', 'approved', 0, 17),
(30, 'Reject', 'fsdf', 0, 18),
(31, 'Approved', 'good', 0, 19),
(33, 'Approved', 'approved', 0, 20),
(34, 'Approved', 'Approved', 0, 21),
(39, 'Approved', 'Good Work keep it up', 0, 25),
(42, 'Approved', 'sss', 0, 26);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `domain` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `username`, `email`, `contact`, `domain`, `date_created`) VALUES
(7, 'Humayuon', 'humayuon@cuilahore.edu.pk', 2145698745, 'Web development', '2020-04-12 16:21:16'),
(8, 'Hamad', 'hamad@cuilahore.edu.pk', 3060423229, 'Web development', '2020-04-12 16:21:31'),
(9, 'Bilal', 'bilal@cuilahore.edu.pk', 3164484336, 'Machine learning', '2020-04-12 16:21:56'),
(10, 'Omer', 'omer@cuilahore.edu.pk', 3060423224, 'Web development', '2020-04-12 16:22:14'),
(11, 'Abid', 'abid@cuilahore.edu.pk', 3254987546, 'Machine learning', '2020-04-12 16:22:28'),
(12, 'Mohammad Mohsin', 'mohammad@cuilahore.edu.pk', 3060423229, 'Web development', '2020-04-12 16:22:57'),
(14, 'Sabeen Amjad', 'sabeenamjad@cuilahore.edu.pk', 3212564789, 'Web development', '2020-05-11 20:52:53'),
(15, 'Fareeha', 'fareeha@cuilahore.edu.pk', 3213213216, 'AI', '2020-05-14 12:09:41'),
(16, 'Qasim', 'qasim@cuilahore.edu.pk', 3202365478, 'Web development', '2020-05-14 13:10:02'),
(17, 'talkan', 'talkan@gmail.com', 3003652954, 'web', '2020-06-07 14:37:38');

-- --------------------------------------------------------

--
-- Table structure for table `groupp`
--

CREATE TABLE `groupp` (
  `group_id` int(11) NOT NULL,
  `project_title` varchar(50) NOT NULL,
  `project_description` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groupp`
--

INSERT INTO `groupp` (`group_id`, `project_title`, `project_description`, `date_created`, `user_id`) VALUES
(10, 'FYP management system', 'This is fyp management system', '2020-05-10 01:26:49', 26),
(11, 'Online education', 'online education for university students', '2020-05-10 01:37:32', 31),
(12, 'ABC', 'abc', '2020-05-10 15:07:15', 33),
(13, 'Online medical system', 'get online facilities', '2020-05-10 15:54:19', 34),
(14, 'World Cup', 'abssd', '2020-05-10 16:44:05', 35),
(15, 'XYZ', 'xyz project', '2020-05-11 19:53:01', 36),
(17, 'Hospital management system', 'XYZ', '2020-05-11 21:42:04', 42),
(18, 'Online Transport System', 'Get online tickets', '2020-05-13 18:27:46', 45),
(19, 'Online transaction', 'abc', '2020-05-13 23:20:57', 46),
(20, 'Test', 'test', '2020-05-14 11:58:34', 47),
(21, 'Air trafic system', 'xyz', '2020-05-14 13:19:59', 50),
(22, 'Covid', 'Corona Virus', '2020-06-07 15:07:52', 53),
(23, 'dfssdfgesrd', 'dsfaasdf', '2020-06-07 15:50:37', 56),
(24, 'gdfg', 'dhdf', '2020-06-07 15:51:21', 55),
(25, 'Revision', 'My project is for Revision', '2020-06-07 15:51:48', 54),
(26, 'sss', 'sss', '2020-06-13 18:59:54', 57);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `group_id`, `user_id`, `date_added`) VALUES
(12, 10, 26, '2020-05-10 01:26:49'),
(13, 11, 31, '2020-05-10 01:37:32'),
(14, 11, 32, '2020-05-10 01:37:56'),
(15, 12, 33, '2020-05-10 15:07:15'),
(16, 13, 34, '2020-05-10 15:54:19'),
(17, 14, 35, '2020-05-10 16:44:05'),
(18, 15, 36, '2020-05-11 19:53:01'),
(22, 17, 42, '2020-05-11 21:42:04'),
(23, 17, 43, '2020-05-11 21:42:39'),
(24, 17, 44, '2020-05-11 21:43:01'),
(25, 18, 45, '2020-05-13 18:27:46'),
(26, 19, 46, '2020-05-13 23:20:57'),
(27, 20, 47, '2020-05-14 11:58:34'),
(28, 21, 50, '2020-05-14 13:20:00'),
(29, 21, 51, '2020-05-14 13:21:00'),
(30, 22, 53, '2020-06-07 15:07:52'),
(31, 23, 56, '2020-06-07 15:50:37'),
(32, 24, 55, '2020-06-07 15:51:21'),
(33, 25, 54, '2020-06-07 15:51:48'),
(34, 26, 57, '2020-06-13 18:59:54'),
(35, 26, 58, '2020-06-13 19:00:50'),
(36, 26, 59, '2020-06-13 19:01:05');

-- --------------------------------------------------------

--
-- Table structure for table `phase1`
--

CREATE TABLE `phase1` (
  `phase1_id` int(11) NOT NULL,
  `upload_file` blob NOT NULL,
  `date_uploaded` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phase1`
--

INSERT INTO `phase1` (`phase1_id`, `upload_file`, `date_uploaded`, `user_id`) VALUES
(4, 0x5068617365312e646f6378, '2020-05-10 01:29:59', 26),
(5, 0x436f64696e67205374616e6461726420616e642047756964656c696e65732e646f6378202831292e646f6378, '2020-05-10 01:40:53', 31),
(6, 0x616263207068617365312e646f6378, '2020-05-10 15:11:31', 33),
(7, 0x5068617365312e646f6378, '2020-05-10 16:49:55', 35),
(8, 0x426c6f672041737369676e6d656e742e646f6378, '2020-05-11 21:48:02', 42),
(9, 0x464131362d4253452d3035372d425f41332e646f6378, '2020-05-13 23:24:07', 46),
(10, 0x5068617365312e646f6378, '2020-05-14 12:04:59', 47),
(11, 0x616263207068617365312e646f6378, '2020-05-14 13:29:23', 50),
(12, 0x47656e6572616c20507572706f736520436f6d707574696e67204f6e204750552e646f6378, '2020-06-13 16:37:01', 54),
(13, 0x47656e6572616c20507572706f736520436f6d707574696e67204f6e204750552e646f6378, '2020-06-13 19:04:50', 57);

-- --------------------------------------------------------

--
-- Table structure for table `phase1dates`
--

CREATE TABLE `phase1dates` (
  `phase1dates_id` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phase1dates`
--

INSERT INTO `phase1dates` (`phase1dates_id`, `startdate`, `enddate`) VALUES
(1, '2020-02-02', '2020-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `phase2`
--

CREATE TABLE `phase2` (
  `phase2_id` int(11) NOT NULL,
  `upload_file` blob NOT NULL,
  `date_uploaded` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phase2`
--

INSERT INTO `phase2` (`phase2_id`, `upload_file`, `date_uploaded`, `user_id`) VALUES
(4, 0x5068617365322e646f6378, '2020-05-10 01:31:53', 26),
(5, 0x464131362d4253452d3232392d5a696e6e65657261207761686565642e646f6378, '2020-05-10 02:13:30', 31),
(6, 0x616263207068617365322e646f6378, '2020-05-10 15:46:54', 33),
(7, 0x5068617365322e646f6378, '2020-05-10 16:51:31', 35),
(8, 0x50502e646f6378, '2020-05-11 21:49:45', 42),
(9, 0x616263207068617365322e646f6378, '2020-05-14 12:07:14', 47),
(10, 0x616263207068617365322e646f6378, '2020-05-14 13:31:00', 50),
(11, 0x47656e6572616c20507572706f736520436f6d707574696e67204f6e204750552e646f6378, '2020-06-13 17:30:21', 54),
(12, 0x47656e6572616c20507572706f736520436f6d707574696e67204f6e204750552e646f6378, '2020-06-13 19:18:30', 57);

-- --------------------------------------------------------

--
-- Table structure for table `phase2dates`
--

CREATE TABLE `phase2dates` (
  `phase2dates_id` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phase2dates`
--

INSERT INTO `phase2dates` (`phase2dates_id`, `startdate`, `enddate`) VALUES
(1, '2020-03-02', '2020-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `proposal_id` int(11) NOT NULL,
  `upload_file` varchar(50) NOT NULL,
  `date_uploaded` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`proposal_id`, `upload_file`, `date_uploaded`, `user_id`) VALUES
(10, 'Practical-3.docx', '2020-05-10 01:27:26', 26),
(11, 'Practical-3.docx', '2020-05-10 01:38:32', 31),
(12, 'Practical-3.docx', '2020-05-10 15:08:20', 33),
(13, 'Practical-3.docx', '2020-05-10 16:45:50', 35),
(17, 'Practical-3.docx', '2020-05-11 21:44:24', 42),
(19, 'Assignment 2 CSE348 Data Security and Encryption D', '2020-05-13 22:37:04', 45),
(20, 'Assignment 2 CSE348 Data Security and Encryption D', '2020-05-13 23:21:29', 46),
(21, 'abc proposal.docx', '2020-05-14 11:59:04', 47),
(22, 'abc proposal.docx', '2020-05-14 13:23:32', 50),
(23, 'General Purpose Computing On GPU.docx', '2020-06-13 16:24:00', 54),
(24, 'General Purpose Computing On GPU.docx', '2020-06-13 19:01:24', 57);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `access` int(1) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `username`, `email`, `password`, `access`, `date_created`) VALUES
(1, 'admin', 'admin@cuilahore.edu.pk', '1234', 5, '2019-07-29 09:12:17'),
(17, 'Humayuon', 'humayuon@cuilahore.edu.pk', '1122', 1, '2020-04-12 16:23:20'),
(18, 'Mohammad Mohsin', 'mohammad@cuilahore.edu.pk', '1122', 3, '2020-04-12 16:24:33'),
(19, 'Omer', 'omer@cuilahore.edu.pk', '1122', 3, '2020-04-12 16:24:54'),
(20, 'Hamad', 'hamad@cuilahore.edu.pk', '1122', 4, '2020-04-12 16:25:16'),
(26, 'Bisma Ahmad', 'bisma@cuilahore.edu.pk', '1234', 2, '2020-05-07 17:49:26'),
(31, 'Zinneera Waheed', 'zinneerawaheed@cuilahore.edu.pk', '1234', 2, '2020-05-10 01:36:27'),
(32, 'Fatima', 'fatima@cuilahore.edu.pk', '1234', 2, '2020-05-10 01:37:56'),
(33, 'Zoha Bilal', 'zohabilal@cuilahore.edu.pk', '1234', 2, '2020-05-10 15:06:46'),
(34, 'Ahmad', 'ahmad@cuilahore.edu.pk', '1234', 2, '2020-05-10 15:52:45'),
(35, 'Aqib', 'aqib@cuilahore.edu.pk', '1234', 2, '2020-05-10 16:43:08'),
(36, 'Saira', 'saira@cuilahore.edu.pk', '1234', 2, '2020-05-11 19:48:44'),
(41, 'Sabeen Amjad', 'sabeenamjad@cuilahore.edu.pk', '1122', 3, '2020-05-11 21:33:40'),
(42, 'Momina', 'momina@cuilahore.edu.pk', '1234', 2, '2020-05-11 21:41:01'),
(43, 'Arzu', 'arzu@cuilahore.edu.pk', '1234', 2, '2020-05-11 21:42:39'),
(44, 'Anam', 'anam@cuilahore.edu.pk', '1234', 2, '2020-05-11 21:43:01'),
(45, 'Haris', 'haris@cuilahore.edu.pk', '1234', 2, '2020-05-13 18:26:36'),
(46, 'Ali', 'ali@cuilahore.edu.pk', '1234', 2, '2020-05-13 23:20:14'),
(47, 'Falak', 'falak@cuilahore.edu.pk', '1234', 2, '2020-05-14 11:57:02'),
(48, 'Fareeha', 'fareeha@cuilahore.edu.pk', '1122', 4, '2020-05-14 12:10:14'),
(49, 'Qasim', 'qasim@cuilahore.edu.pk', '1122', 3, '2020-05-14 13:11:04'),
(50, 'Mehwish', 'mehwish@cuilahore.edu.pk', '1234', 2, '2020-05-14 13:16:14'),
(51, 'Farah', 'farah@cuilahore.edu.pk', '1234', 2, '2020-05-14 13:21:00'),
(52, 'talkan', 'talkan@gmail.com', '1234', 3, '2020-06-07 14:37:54'),
(53, 'sohail', 'sohail@gmail.com', '1234', 2, '2020-06-07 15:02:32'),
(54, 'moeez', 'moeez@gmail.com', '1234', 2, '2020-06-07 15:49:44'),
(55, 'raheel', 'raheed@gmail.com', '1234', 2, '2020-06-07 15:49:59'),
(56, 'adeel', 'adeel@gmail.com', '1234', 2, '2020-06-07 15:50:15'),
(57, 'farah', 'farah@gmail.com', '1234', 2, '2020-06-13 18:59:17'),
(58, 'sumbul', 'sumbul@gmail.com', '1234', 2, '2020-06-13 19:00:50'),
(59, 'fatima', 'fatima@gmail.com', '1234', 2, '2020-06-13 19:01:05');

-- --------------------------------------------------------

--
-- Table structure for table `select_supervisor`
--

CREATE TABLE `select_supervisor` (
  `id` int(11) NOT NULL,
  `supervisor_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `select_supervisor`
--

INSERT INTO `select_supervisor` (`id`, `supervisor_id`, `group_id`, `user_id`) VALUES
(1, 0, 10, 26),
(2, 0, 11, 31),
(3, 0, 12, 33),
(4, 0, 13, 34),
(5, 0, 14, 35),
(6, 0, 15, 36),
(7, 0, 18, 45),
(8, 0, 19, 46),
(9, 0, 20, 47),
(10, 0, 21, 50),
(12, 52, 22, 53),
(13, 52, 23, 56),
(15, 52, 25, 54),
(16, 49, 24, 55);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `username`, `email`, `contact`, `date_created`) VALUES
(16, 'Bisma Ahmad', 'bisma@cuilahore.edu.pk', 3215678952, '2020-05-07 17:48:05'),
(21, 'Zinneera Waheed', 'zinneerawaheed@cuilahore.edu.pk', 3212545454, '2020-05-10 01:35:32'),
(22, 'Fatima', 'fatima@cuilahore.edu.pk', 3045612879, '2020-05-10 01:36:01'),
(23, 'Zoha Bilal', 'zohabilal@cuilahore.edu.pk', 3254987546, '2020-05-10 15:06:15'),
(24, 'Ahmad', 'ahmad@cuilahore.edu.pk', 3254987546, '2020-05-10 15:52:13'),
(25, 'Aqib', 'aqib@cuilahore.edu.pk', 3164484336, '2020-05-10 16:39:38'),
(26, 'Saira', 'saira@cuilahore.edu.pk', 3254987546, '2020-05-11 19:47:36'),
(31, 'Momina', 'momina@cuilahore.edu.pk', 3215647854, '2020-05-11 21:34:06'),
(32, 'Arzu', 'arzu@cuilahore.edu.pk', 3124567894, '2020-05-11 21:34:31'),
(33, 'Maham', 'maham@cuilahore.edu.pk', 3060423224, '2020-05-11 21:34:47'),
(34, 'Anam', 'anam@cuilahore.edu.pk', 3215469874, '2020-05-11 21:35:04'),
(35, 'Haris', 'haris@cuilahore.edu.pk', 3212312321, '2020-05-13 18:25:48'),
(36, 'Ali', 'ali@cuilahore.edu.pk', 3030303032, '2020-05-13 23:19:47'),
(37, 'Falak', 'falak@cuilahore.edu.pk', 3060423229, '2020-05-14 11:56:12'),
(38, 'Farah', 'farah@cuilahore.edu.pk', 3215256478, '2020-05-14 13:13:26'),
(39, 'Mehwish', 'mehwish@cuilahore.edu.pk', 3215647895, '2020-05-14 13:14:46'),
(40, 'sohail', 'sohail@gmail.com', 3003652954, '2020-06-07 14:53:53'),
(41, 'moeez', 'moeez@gmail.com', 3002156858, '2020-06-07 14:55:14'),
(42, 'raheel', 'raheed@gmail.com', 3003652954, '2020-06-07 15:47:39'),
(43, 'adeel', 'adeel@gmail.com', 3003652954, '2020-06-07 15:49:29'),
(44, 'farah', 'farah@gmail.com', 12345678951, '2020-06-13 18:57:39'),
(45, 'fatima', 'fatima@gmail.com', 12345678998, '2020-06-13 18:58:07'),
(46, 'sumbul', 'sumbul@gmail.com', 22222222222, '2020-06-13 18:58:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_phase1`
--
ALTER TABLE `assign_phase1`
  ADD PRIMARY KEY (`assign_phase1_id`),
  ADD KEY `FK` (`group_id`) USING BTREE;

--
-- Indexes for table `assign_phase2`
--
ALTER TABLE `assign_phase2`
  ADD PRIMARY KEY (`assign_phase2_id`),
  ADD KEY `FK` (`group_id`) USING BTREE;

--
-- Indexes for table `assign_proposal`
--
ALTER TABLE `assign_proposal`
  ADD PRIMARY KEY (`assign_proposal_id`),
  ADD KEY `FK` (`group_id`) USING BTREE;

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supervisor` (`supervisor`),
  ADD KEY `student` (`student`);

--
-- Indexes for table `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`dates_id`);

--
-- Indexes for table `evaluate_phase1`
--
ALTER TABLE `evaluate_phase1`
  ADD PRIMARY KEY (`evaluate_phase1_id`),
  ADD KEY `FK` (`group_id`) USING BTREE,
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `evaluate_phase2`
--
ALTER TABLE `evaluate_phase2`
  ADD PRIMARY KEY (`evaluate_phase2_id`),
  ADD KEY `FK` (`group_id`) USING BTREE,
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `evaluate_proposal`
--
ALTER TABLE `evaluate_proposal`
  ADD PRIMARY KEY (`evaluate_proposal_id`),
  ADD UNIQUE KEY `FK` (`group_id`) USING BTREE;

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `groupp`
--
ALTER TABLE `groupp`
  ADD PRIMARY KEY (`group_id`),
  ADD KEY `FK` (`user_id`) USING BTREE;

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `FK` (`group_id`) USING BTREE,
  ADD KEY `FK1` (`user_id`) USING BTREE;

--
-- Indexes for table `phase1`
--
ALTER TABLE `phase1`
  ADD PRIMARY KEY (`phase1_id`),
  ADD KEY `FK` (`user_id`) USING BTREE;

--
-- Indexes for table `phase1dates`
--
ALTER TABLE `phase1dates`
  ADD PRIMARY KEY (`phase1dates_id`);

--
-- Indexes for table `phase2`
--
ALTER TABLE `phase2`
  ADD PRIMARY KEY (`phase2_id`),
  ADD KEY `FK` (`user_id`) USING BTREE;

--
-- Indexes for table `phase2dates`
--
ALTER TABLE `phase2dates`
  ADD PRIMARY KEY (`phase2dates_id`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`proposal_id`),
  ADD KEY `FK` (`user_id`) USING BTREE;

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `select_supervisor`
--
ALTER TABLE `select_supervisor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK` (`group_id`) USING BTREE,
  ADD KEY `Fk1` (`user_id`) USING BTREE,
  ADD KEY `supervisor_id` (`supervisor_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_phase1`
--
ALTER TABLE `assign_phase1`
  MODIFY `assign_phase1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `assign_phase2`
--
ALTER TABLE `assign_phase2`
  MODIFY `assign_phase2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `assign_proposal`
--
ALTER TABLE `assign_proposal`
  MODIFY `assign_proposal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dates`
--
ALTER TABLE `dates`
  MODIFY `dates_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `evaluate_phase1`
--
ALTER TABLE `evaluate_phase1`
  MODIFY `evaluate_phase1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `evaluate_phase2`
--
ALTER TABLE `evaluate_phase2`
  MODIFY `evaluate_phase2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `evaluate_proposal`
--
ALTER TABLE `evaluate_proposal`
  MODIFY `evaluate_proposal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `groupp`
--
ALTER TABLE `groupp`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `phase1`
--
ALTER TABLE `phase1`
  MODIFY `phase1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `phase1dates`
--
ALTER TABLE `phase1dates`
  MODIFY `phase1dates_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `phase2`
--
ALTER TABLE `phase2`
  MODIFY `phase2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `phase2dates`
--
ALTER TABLE `phase2dates`
  MODIFY `phase2dates_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `proposal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `select_supervisor`
--
ALTER TABLE `select_supervisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assign_phase1`
--
ALTER TABLE `assign_phase1`
  ADD CONSTRAINT `assign_phase1_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groupp` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `assign_phase2`
--
ALTER TABLE `assign_phase2`
  ADD CONSTRAINT `assign_phase2_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groupp` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `assign_proposal`
--
ALTER TABLE `assign_proposal`
  ADD CONSTRAINT `assign_proposal_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groupp` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `evaluate_phase1`
--
ALTER TABLE `evaluate_phase1`
  ADD CONSTRAINT `evaluate_phase1_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groupp` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `evaluate_phase1_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `register` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `evaluate_phase2`
--
ALTER TABLE `evaluate_phase2`
  ADD CONSTRAINT `evaluate_phase2_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groupp` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `evaluate_phase2_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `register` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `evaluate_proposal`
--
ALTER TABLE `evaluate_proposal`
  ADD CONSTRAINT `evaluate_proposal_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groupp` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `groupp`
--
ALTER TABLE `groupp`
  ADD CONSTRAINT `groupp_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `register` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groupp` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `member_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `register` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phase1`
--
ALTER TABLE `phase1`
  ADD CONSTRAINT `phase1_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `register` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phase2`
--
ALTER TABLE `phase2`
  ADD CONSTRAINT `phase2_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `register` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `proposal`
--
ALTER TABLE `proposal`
  ADD CONSTRAINT `proposal_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `register` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `select_supervisor`
--
ALTER TABLE `select_supervisor`
  ADD CONSTRAINT `select_supervisor_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `register` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `select_supervisor_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `groupp` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
