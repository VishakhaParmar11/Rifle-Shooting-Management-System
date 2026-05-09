-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2026 at 02:35 PM
-- Server version: 10.11.15-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsams_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activity`
--

CREATE TABLE `tbl_activity` (
  `id` int(15) NOT NULL,
  `title_of_activity` varchar(50) NOT NULL,
  `activity_desc` varchar(90) NOT NULL,
  `post_date` varchar(20) NOT NULL,
  `activity_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_activity`
--

INSERT INTO `tbl_activity` (`id`, `title_of_activity`, `activity_desc`, `post_date`, `activity_photo`) VALUES
(1, '15 th August', 'This Is Most Beautiful Activity Of AKS  Academy', '03/10/2024', 'image/activity_photo/picture32.jpg'),
(2, 'Seminar For Shooting', 'This Seminar Was Held To Give Information About Shooting And Its Benefits To All The Shoot', '03/10/2024', 'image/activity_photo/picture9.jpg'),
(3, 'Compitition', 'A Competition Was Set Up Among All The Shooters In The Academy.', '03/10/2024', 'image/activity_photo/picture3.jpg'),
(4, 'Health Activity', 'This Is A Healthy Activity For All Shooters.', '03/10/2024', 'image/activity_photo/picture33.jpg'),
(5, 'Activity-5', 'Celebrate 3 rd Anniversary Of AKS Academy.', '03/10/2024', 'image/activity_photo/picture24.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `id` int(11) NOT NULL,
  `roll` int(11) NOT NULL,
  `attend` varchar(255) NOT NULL,
  `att_time` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`id`, `roll`, `attend`, `att_time`) VALUES
(1, 143, 'absent', '2019-01-16'),
(2, 2, 'present', '2019-01-16'),
(3, 3, 'absent', '2019-01-16'),
(4, 4, 'absent', '2019-01-16'),
(5, 5, 'present', '2019-01-16'),
(6, 6, 'present', '2019-01-16'),
(7, 7, 'absent', '2019-01-16'),
(9, 1, 'present', '2019-01-17'),
(10, 2, 'present', '2019-01-17'),
(11, 3, 'absent', '2019-01-17'),
(12, 4, 'absent', '2019-01-17'),
(13, 5, 'present', '2019-01-17'),
(14, 6, 'absent', '2019-01-17'),
(15, 7, 'present', '2019-01-17'),
(31, 6, 'absent', '2019-01-18'),
(30, 5, 'absent', '2019-01-18'),
(29, 4, 'present', '2019-01-18'),
(28, 3, 'present', '2019-01-18'),
(27, 2, 'present', '2019-01-18'),
(26, 1, 'present', '2019-01-18'),
(32, 7, 'present', '2019-01-18'),
(33, 143, 'present', '2023-12-26'),
(34, 2, 'absent', '2023-12-26'),
(35, 3, 'present', '2023-12-26'),
(36, 4, 'absent', '2023-12-26'),
(37, 5, 'present', '2023-12-26'),
(38, 6, 'present', '2023-12-26'),
(39, 7, 'present', '2023-12-26'),
(40, 115, '', '0000-00-00'),
(41, 1, 'present', '2023-12-29'),
(42, 2, 'present', '2023-12-29'),
(43, 3, 'absent', '2023-12-29'),
(44, 4, 'present', '2023-12-29'),
(45, 5, 'absent', '2023-12-29'),
(46, 6, 'present', '2023-12-29'),
(47, 7, 'present', '2023-12-29'),
(48, 115, 'absent', '2023-12-29'),
(49, 1, 'present', '2023-12-31'),
(50, 2, 'present', '2023-12-31'),
(51, 3, 'present', '2023-12-31'),
(52, 4, 'present', '2023-12-31'),
(53, 5, 'present', '2023-12-31'),
(54, 6, 'absent', '2023-12-31'),
(55, 7, 'present', '2023-12-31'),
(56, 115, 'present', '2023-12-31'),
(57, 1, 'absent', '2024-02-07'),
(58, 2, 'absent', '2024-02-07'),
(59, 3, 'absent', '2024-02-07'),
(60, 4, 'absent', '2024-02-07'),
(61, 5, 'absent', '2024-02-07'),
(62, 6, 'absent', '2024-02-07'),
(63, 7, 'absent', '2024-02-07'),
(64, 115, 'present', '2024-02-07'),
(65, 115, 'present', '2024-02-19'),
(66, 10, '', '0000-00-00'),
(67, 10, 'present', '2024-03-06'),
(68, 115, 'present', '2024-03-06'),
(69, 132, 'present', '2024-03-09'),
(70, 115, 'present', '2024-03-09'),
(71, 1, '', '0000-00-00'),
(72, 2, '', '0000-00-00'),
(73, 3, '', '0000-00-00'),
(74, 4, '', '0000-00-00'),
(75, 5, '', '0000-00-00'),
(76, 6, '', '0000-00-00'),
(77, 7, '', '0000-00-00'),
(78, 8, '', '0000-00-00'),
(79, 9, '', '0000-00-00'),
(80, 10, '', '0000-00-00'),
(81, 1, 'present', '2024-03-10'),
(82, 2, 'present', '2024-03-10'),
(83, 3, 'present', '2024-03-10'),
(84, 4, 'present', '2024-03-10'),
(85, 5, 'present', '2024-03-10'),
(86, 6, 'present', '2024-03-10'),
(87, 7, 'present', '2024-03-10'),
(88, 8, 'present', '2024-03-10'),
(89, 9, 'present', '2024-03-10'),
(90, 10, 'present', '2024-03-10'),
(91, 1, 'present', '2024-03-11'),
(92, 2, 'present', '2024-03-11'),
(93, 3, 'present', '2024-03-11'),
(94, 4, 'present', '2024-03-11'),
(95, 5, 'present', '2024-03-11'),
(96, 6, 'present', '2024-03-11'),
(97, 7, 'absent', '2024-03-11'),
(98, 8, 'absent', '2024-03-11'),
(99, 9, 'present', '2024-03-11'),
(100, 10, 'present', '2024-03-11'),
(101, 12, '', '0000-00-00'),
(102, 1, 'present', '2024-03-17'),
(103, 2, 'present', '2024-03-17'),
(104, 3, 'present', '2024-03-17'),
(105, 4, 'present', '2024-03-17'),
(106, 5, 'present', '2024-03-17'),
(107, 6, 'present', '2024-03-17'),
(108, 7, 'present', '2024-03-17'),
(109, 8, 'present', '2024-03-17'),
(110, 9, 'present', '2024-03-17'),
(111, 10, 'present', '2024-03-17'),
(112, 12, 'present', '2024-03-17'),
(113, 150, '', '0000-00-00'),
(114, 1, 'present', '2026-03-21'),
(115, 2, 'absent', '2026-03-21'),
(116, 3, 'present', '2026-03-21'),
(117, 4, 'present', '2026-03-21'),
(118, 5, 'present', '2026-03-21'),
(119, 6, 'absent', '2026-03-21'),
(120, 7, 'present', '2026-03-21'),
(121, 8, 'present', '2026-03-21'),
(122, 9, 'absent', '2026-03-21'),
(123, 10, 'absent', '2026-03-21'),
(124, 12, 'present', '2026-03-21'),
(125, 150, 'present', '2026-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_awards`
--

CREATE TABLE `tbl_awards` (
  `id` int(15) NOT NULL,
  `title_of_award` varchar(50) NOT NULL,
  `award_desc` varchar(90) NOT NULL,
  `post_date` varchar(20) NOT NULL,
  `award_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_awards`
--

INSERT INTO `tbl_awards` (`id`, `title_of_award`, `award_desc`, `post_date`, `award_photo`) VALUES
(1, 'National Award', 'Prachi Sharma Has Won A National Award.                                                   ', '03/10/2024', 'image/award_photo/pic7.jpg'),
(2, 'State Level Award ', 'Shlock Maheta Has Won A State Level Award.                                                ', '03/10/2024', 'image/award_photo/pic9.jpg'),
(3, 'District Level Award', '  Dhruvi Prabtani Has Won A District Level Award.                                         ', '03/10/2024', 'image/award_photo/pic8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_us`
--

CREATE TABLE `tbl_contact_us` (
  `id` int(10) NOT NULL,
  `user_id` int(100) NOT NULL,
  `cont_name` varchar(50) NOT NULL,
  `cont_desc` varchar(90) NOT NULL,
  `post_date` varchar(20) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_contact_us`
--

INSERT INTO `tbl_contact_us` (`id`, `user_id`, `cont_name`, `cont_desc`, `post_date`) VALUES
(1, 0, 'nn', 'des', 'current_timestamp()'),
(2, 0, 'shlock', 'hi', '2024-03-08 03:01:24'),
(3, 143, 'shlock', 'hihihi', '2024-03-08 03:03:11'),
(4, 122, 'Niya Dodiya', 'hello', '2024-03-09 15:48:04'),
(5, 1, 'Mahesh Chauhan', 'Hello', '2024-03-10 21:01:42'),
(6, 1, 'Mahesh Chauhan', 'When will the match of this week be played?', '2024-03-18 17:11:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `id` int(15) NOT NULL,
  `user_id` int(15) NOT NULL,
  `feed_name` varchar(50) NOT NULL,
  `feed_desc` varchar(90) NOT NULL,
  `post_date` varchar(20) NOT NULL,
  `feed_rate` int(10) NOT NULL,
  `feed_photo` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `user_id`, `feed_name`, `feed_desc`, `post_date`, `feed_rate`, `feed_photo`, `status`) VALUES
(1, 1, 'Mahesh Chauhan', 'Very nice work for your AKS academy and many facilities provide to users.', '03/10/2024', 5, '', 1),
(2, 2, 'Priya Makwana', 'Good...nice your AKS academy website and please enter new updated for your academy.', '03/10/2024', 4, '', 0),
(3, 3, 'Shlock Maheta', 'Osm and Great your AKS academy...nice shooting videos and images.', '03/10/2024', 3, '', 0),
(4, 4, 'Aastha Dodiya', 'Good Your AKS academy and very usable...', '03/10/2024', 2, '', 0),
(5, 5, 'Rudraksh Dave', 'Excellent AKS academy...very easily understand to your website and secure.', '03/10/2024', 5, '', 0),
(6, 6, 'Vanshika Parmar', 'Keep making new and new website like this...it is very osm AKS academy...', '03/10/2024', 5, '', 0),
(7, 7, 'Avinash Sachdev', 'Very nice activity celebrate in your AKS Academy.', '03/10/2024', 4, '', 0),
(8, 8, 'Vishva Rathod', 'Very nice work for your AKS academy.', '03/10/2024', 3, '', 0),
(9, 9, 'Krishika Solanki', 'Many Facilities provide by shooters good...', '03/10/2024', 5, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallary`
--

CREATE TABLE `tbl_gallary` (
  `id` int(15) NOT NULL,
  `title_of_gallary` varchar(50) NOT NULL,
  `gallary_desc` varchar(90) NOT NULL,
  `post_date` varchar(20) NOT NULL,
  `gallary_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_gallary`
--

INSERT INTO `tbl_gallary` (`id`, `title_of_gallary`, `gallary_desc`, `post_date`, `gallary_photo`) VALUES
(1, 'AKS Academy', 'This Image Is AKS Academy.', '03/10/2024', 'image/gallary_photo/picture27.jpg'),
(2, '15th August', ' 15 th August Celebrate In AKS Academy.', '03/10/2024', 'image/gallary_photo/picture7.jpg'),
(3, 'Practice', ' Shooters Practice For Playing In Academy.', '03/10/2024', 'image/gallary_photo/picture31.jpg'),
(4, 'Walther LG400', 'This Gun Is Used For All Shooter In AKS Academy.', '03/10/2024', 'image/gallary_photo/walther LG400.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gun`
--

CREATE TABLE `tbl_gun` (
  `id` int(15) NOT NULL,
  `title_of_gun` varchar(50) NOT NULL,
  `gun_desc` varchar(100) NOT NULL,
  `post_date` varchar(10) NOT NULL,
  `gun_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_gun`
--

INSERT INTO `tbl_gun` (`id`, `title_of_gun`, `gun_desc`, `post_date`, `gun_photo`) VALUES
(1, 'Air Pistol', 'The air pistol gun is a compact and lightweight firearm that utilizes compressed air to propel ', '03/10/2024', 'image/gun_photo/air pistol.png'),
(2, 'Alpha Pistol', 'The Alpha Pistol is a compact, semi-automatic firearm. It boasts a sleek design and lightweight fram', '11/02/2023', 'image/gun_photo/alpha pistol.png'),
(3, 'Walther LG400', 'Walther LG400 is a precision air rifle designed for competitive shooting.', '12/25/2023', 'image/gun_photo/walther LG400.png'),
(4, 'Short Gun', 'The gun has a smoothbore barrel or a series of rifled tubes called \"chokes.\"The gun has a smoothbore', '12/25/2023', 'image/gun_photo/short gun.png'),
(5, 'Walther', 'The Walther PPK is a classic and iconic handgun known for its compact size and reliability.', '01/05/2024', 'image/gun_photo/walther.png'),
(6, 'Feinwerkbau', 'Feinwerkbau is a German manufacturer of precision air rifles and air pistols.\r\n\r\n', '03/10/2024', 'image/gun_photo/picture1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_medal`
--

CREATE TABLE `tbl_medal` (
  `id` int(15) NOT NULL,
  `title_of_medal` varchar(50) NOT NULL,
  `medal_desc` varchar(90) NOT NULL,
  `post_date` varchar(20) NOT NULL,
  `medal_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_medal`
--

INSERT INTO `tbl_medal` (`id`, `title_of_medal`, `medal_desc`, `post_date`, `medal_photo`) VALUES
(1, 'Gold Medal', 'Mahesh Chauhan Has Won A Gold Medal.', '03/10/2024', 'image/medal_photo/pic10.jpg'),
(2, 'Silver Medal', 'Vishva Rathod Has Won A Silver Medal.', '03/10/2024', 'image/medal_photo/pic8.jpg'),
(3, 'Bronch Medal', 'Vansh Parmar Has Won A Bronch Medal.', '03/10/2024', 'image/medal_photo/pic9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(15) NOT NULL,
  `title_of_news` varchar(50) NOT NULL,
  `news_desc` varchar(90) NOT NULL,
  `post_date` varchar(20) NOT NULL,
  `news_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `title_of_news`, `news_desc`, `post_date`, `news_photo`) VALUES
(1, 'Match-1', 'Hello All Shooters Your First Match Is 12th April In Rajkot.', '03/10/2024 ', 'image/news_photo/img12.jpg'),
(2, 'Match - 2', 'Hello All Shooters Your First Match Is 25th June In Baroda.', '03/10/2024 ', 'image/news_photo/picture4.jpg'),
(15, 'Win Academy', 'Hello All Shooter ! The First Rank Of Our Academy Has Come In Gujarat.123', '03/11/2024', 'image/news_photo/picture27.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paymant`
--

CREATE TABLE `tbl_paymant` (
  `id` int(15) NOT NULL,
  `user_gmail` varchar(100) NOT NULL,
  `fees` int(100) NOT NULL,
  `buy_date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_paymant`
--

INSERT INTO `tbl_paymant` (`id`, `user_gmail`, `fees`, `buy_date`, `status`) VALUES
(1, 'niya@gmail.com', 5000, '2023-12-31', 'success'),
(2, 'niya@gmail.com', 5000, '2023-12-31', 'success'),
(3, 'niya@gmail.com', 5000, '2023-12-31', 'success'),
(4, 'niya@gmail.com', 5000, '2023-12-31', 'success'),
(5, 'niya@gmail.com', 5000, '2023-12-31', 'success'),
(6, 'niya@gmail.com', 5000, '2023-12-31', 'success'),
(7, 'niya@gmail.com', 5000, '2023-12-31', 'success'),
(8, 'niya@gmail.com', 5000, '2023-12-31', 'success'),
(9, 'niya@gmail.com', 5000, '2023-12-31', 'success'),
(10, 'niya@gmail.com', 5000, '2023-12-31', 'success'),
(11, 'niya@gmail.com', 5000, '2023-12-31', 'success'),
(12, 'niya@gmail.com', 5000, '2023-12-31', 'success'),
(24, 'shlock@gmail.com', 5000, '2024-02-29', 'success'),
(25, 'vani@gmail.com', 15000, '2024-02-29', 'success'),
(26, 'mahesh@gmail.com', 5000, '2024-03-09', 'success'),
(27, 'priya@gmail.com', 10000, '2024-03-09', 'success'),
(28, 'shlock@gmail.com', 0, '2024-03-09', 'success'),
(29, 'shlock@gmail.com', 15000, '2024-03-09', 'success'),
(30, 'aastha@gmail.com', 10000, '2024-03-09', 'success'),
(31, 'rudra@gmail.com', 5000, '2024-03-09', 'success'),
(32, 'vanshika@gmail.com', 15000, '2024-03-09', 'success'),
(33, 'avinash@gmail.com', 10000, '2024-03-09', 'success'),
(34, 'avinash@gmail.com', 10000, '2024-03-09', 'pending'),
(35, 'vishva@gmail.com', 5000, '2024-03-09', 'success'),
(36, 'krishika@gmail.com', 5000, '2024-03-10', 'success'),
(37, 'krishika@gmail.com', 5000, '2024-03-10', 'success'),
(38, 'krishika@gmail.com', 5000, '2024-03-10', 'success'),
(39, 'krishika@gmail.com', 5000, '2024-03-10', 'success'),
(40, 'krishika@gmail.com', 5000, '2024-03-10', 'success'),
(41, 'krishika@gmail.com', 5000, '2024-03-10', 'success'),
(42, 'krishika@gmail.com', 5000, '2024-03-10', 'success'),
(43, 'krishika@gmail.com', 5000, '2024-03-10', 'success'),
(44, 'vansh@gmail.com', 15000, '2024-03-10', 'success'),
(45, 'vansh@gmail.com', 10000, '2024-03-11', 'success'),
(46, 'vansh@gmail.com', 10000, '2024-03-11', 'success'),
(47, 'vishu@gmail.com', 5000, '2024-03-11', 'success'),
(48, 'jalpa@gmail.com', 10000, '2024-03-17', 'pending'),
(49, 'jalpa@gmail.com', 10000, '2024-03-17', 'pending'),
(50, 'jalpa@gmail.com', 10000, '2024-03-17', 'pending'),
(51, 'jalpa@gmail.com', 10000, '2024-03-17', 'pending'),
(52, 'viraj@gmail.com', 10000, '2024-03-18', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `photo` varchar(200) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone_no` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `description` varchar(90) NOT NULL,
  `post_date` varchar(20) NOT NULL,
  `height` int(10) NOT NULL,
  `weight` int(10) NOT NULL,
  `age` int(10) NOT NULL,
  `gun_selection` varchar(50) NOT NULL,
  `hand_selection` varchar(50) NOT NULL,
  `fees` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(10) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`id`, `username`, `gender`, `dob`, `photo`, `address`, `phone_no`, `email`, `description`, `post_date`, `height`, `weight`, `age`, `gun_selection`, `hand_selection`, `fees`, `password`, `status`, `role`) VALUES
(1, 'Mahesh Chauhan', 'Male', '1998-04-11', 'upload/img1.png', 'Bhavnagar', '2356328997', 'mahesh@gmail.com', '', '03/09/2024', 7, 65, 27, 'Walther LG400', 'Righty', '5000', 'mahesh@12345', 1, 'user'),
(2, 'Priya Makwana', 'Female', '2001-06-04', 'upload/img11.jpeg', 'Ahemdabad', '8000252556', 'priya@gmail.com', '', '03/09/2024', 5, 55, 24, 'Air Pistol', 'Lefty', '10000', 'priya@123', 1, 'user'),
(3, 'Shlock Maheta', 'Male', '2003-09-04', 'upload/img8.jpg', 'Gandhinagar', '8958895889', 'shlock@gmail.com', '', '03/09/2024', 6, 70, 22, 'Walther', 'Righty', '15000', 'shlock@123', 1, 'user'),
(4, 'Aastha Dodiya', 'Female', '2008-11-11', 'upload/img12.png', 'Mumbai', '7865954574', 'aastha@gmail.com', '', '03/09/2024', 4, 59, 17, 'Short Gun', 'Lefty', '10000', 'aastha@123', 1, 'user'),
(5, 'Rudraksh Dave', 'Male', '2004-03-29', 'upload/img5.png', 'Baroda', '5652326585', 'rudra@gmail.com', '', '03/09/2024', 8, 72, 21, 'Alpha Pistol', 'Righty', '5000', 'rudra@123', 0, 'user'),
(6, 'Vanshika Parmar', 'Female', '2009-10-20', 'upload/img6.jpeg', 'Surat', '4525124525', 'vanshika@gmail.com', '', '03/09/2024', 5, 70, 16, 'Walther LG400', 'Lefty', '15000', 'vani@123', 0, 'user'),
(7, 'Avinash Sachdev', 'Male', '1995-12-25', 'upload/picture5.png', 'Aanand', '7586982545', 'avinash@gmail.com', '', '03/09/2024', 6, 69, 28, 'Short Gun', 'Righty', '10000', 'sachdev@123', 0, 'user'),
(8, 'Vishva Rathod', 'Female', '1885-04-25', 'upload/img13.jpeg', 'Mahesana', '8000252578', 'vishva@gmail.com', '', '03/09/2024', 5, 78, 32, 'Alpha Pistol', 'Hand Criteria', '5000', 'vishva@123', 0, 'user'),
(9, 'Krishika Rathod', 'Female', '2012-05-10', 'upload/img14.jpeg', 'Morbi', '3652451225', 'krishika@gmail.com', '', '03/10/2024', 7, 58, 15, 'Guns Type', 'Lefty', '5000', 'krishu@123', 0, 'user'),
(10, 'Vansh Borisagar', 'Male', '2005-07-27', 'upload/img2.jpeg', 'palitana', '3652451225', 'vansh@gmail.com', '', '03/11/2024', 5, 47, 18, 'Short Gun', 'Righty', '10000', 'vansh@123', 0, 'user'),
(142, 'Vishakha Parmar', 'Female', '2024-02-01', 'upload/img9.png', 'Gandhinagar', '7575757575', 'vishu@gmail.com', 'How Are You ?', '02/20/2024', 0, 0, 0, '', '', '', 'vishu@1234', 1, 'admin'),
(165, 'Hetal Parmar', 'Female', '2003-10-20', 'upload/img10.png', 'Surat', '9999999999', 'hetu@gmail.com', 'Hello Student', '03/11/2024', 0, 0, 0, '', '', '', 'hetu@123', 0, 'admin'),
(168, 'jalpa parmar', 'Female', '2024-03-15', 'upload/img11.jpeg', 'palitana', '8585858585', 'jalpa@gmail.com', '', '03/17/2024', 5, 45, 25, 'Air Pistol', 'Righty', '10000', 'jalpa@123', 0, 'user'),
(169, 'jalpa parmar', 'Female', '2024-03-15', 'upload/img11.jpeg', 'palitana', '8585858585', 'jalpa@gmail.com', '', '03/17/2024', 5, 45, 25, 'Air Pistol', 'Righty', '10000', 'jalpa@123', 0, 'user'),
(171, 'jalpa parmar', 'Female', '2024-03-15', 'upload/img11.jpeg', 'palitana', '8585858585', 'jalpa@gmail.com', '', '03/17/2024', 5, 45, 25, 'Air Pistol', 'Righty', '10000', 'jalpa@123', 0, 'user'),
(174, 'Viraj Rathod', 'Male', '2000-10-20', 'upload/img3.jpg', 'Morbi', '8585858585', 'viraj@gmail.com', '', '03/18/2024', 7, 56, 25, 'Short Gun', 'Righty', '10000', 'viraj@123', 0, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `name`, `roll`) VALUES
(12, 'Mahesh Chauhan', 1),
(13, 'Priya Makwana', 2),
(14, 'Shlock Maheta', 3),
(15, 'Aastha Dodiya', 4),
(16, 'Rudraksh Dave', 5),
(17, 'Vanshika Parmar', 6),
(18, 'Avinash Sachdev', 7),
(19, 'Vishva Rathod', 8),
(20, 'Krishika Solanki', 9),
(21, 'Vansh Borisagar', 10),
(22, 'jalpa parmar', 12),
(23, 'Aman Sinha', 150);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_activity`
--
ALTER TABLE `tbl_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_awards`
--
ALTER TABLE `tbl_awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallary`
--
ALTER TABLE `tbl_gallary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gun`
--
ALTER TABLE `tbl_gun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_medal`
--
ALTER TABLE `tbl_medal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_paymant`
--
ALTER TABLE `tbl_paymant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_activity`
--
ALTER TABLE `tbl_activity`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `tbl_awards`
--
ALTER TABLE `tbl_awards`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `tbl_gallary`
--
ALTER TABLE `tbl_gallary`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_gun`
--
ALTER TABLE `tbl_gun`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_medal`
--
ALTER TABLE `tbl_medal`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_paymant`
--
ALTER TABLE `tbl_paymant`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
