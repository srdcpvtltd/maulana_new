-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 25, 2024 at 07:29 AM
-- Server version: 10.11.7-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u910011159_mlu`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `state_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `slug`, `code`, `state_id`, `created_at`, `updated_at`) VALUES
(1, 'North and Middle Andaman', NULL, NULL, 32, NULL, NULL),
(2, 'South Andaman', NULL, NULL, 32, NULL, NULL),
(3, 'Nicobar', NULL, NULL, 32, NULL, NULL),
(4, 'Adilabad', NULL, NULL, 1, NULL, NULL),
(5, 'Anantapur', NULL, NULL, 1, NULL, NULL),
(6, 'Chittoor', NULL, NULL, 1, NULL, NULL),
(7, 'East Godavari', NULL, NULL, 1, NULL, NULL),
(8, 'Guntur', NULL, NULL, 1, NULL, NULL),
(9, 'Hyderabad', NULL, NULL, 1, NULL, NULL),
(10, 'Kadapa', NULL, NULL, 1, NULL, NULL),
(11, 'Karimnagar', NULL, NULL, 1, NULL, NULL),
(12, 'Khammam', NULL, NULL, 1, NULL, NULL),
(13, 'Krishna', NULL, NULL, 1, NULL, NULL),
(14, 'Kurnool', NULL, NULL, 1, NULL, NULL),
(15, 'Mahbubnagar', NULL, NULL, 1, NULL, NULL),
(16, 'Medak', NULL, NULL, 1, NULL, NULL),
(17, 'Nalgonda', NULL, NULL, 1, NULL, NULL),
(18, 'Nellore', NULL, NULL, 1, NULL, NULL),
(19, 'Nizamabad', NULL, NULL, 1, NULL, NULL),
(20, 'Prakasam', NULL, NULL, 1, NULL, NULL),
(21, 'Rangareddi', NULL, NULL, 1, NULL, NULL),
(22, 'Srikakulam', NULL, NULL, 1, NULL, NULL),
(23, 'Vishakhapatnam', NULL, NULL, 1, NULL, NULL),
(24, 'Vizianagaram', NULL, NULL, 1, NULL, NULL),
(25, 'Warangal', NULL, NULL, 1, NULL, NULL),
(26, 'West Godavari', NULL, NULL, 1, NULL, NULL),
(27, 'Anjaw', NULL, NULL, 3, NULL, NULL),
(28, 'Changlang', NULL, NULL, 3, NULL, NULL),
(29, 'East Kameng', NULL, NULL, 3, NULL, NULL),
(30, 'Lohit', NULL, NULL, 3, NULL, NULL),
(31, 'Lower Subansiri', NULL, NULL, 3, NULL, NULL),
(32, 'Papum Pare', NULL, NULL, 3, NULL, NULL),
(33, 'Tirap', NULL, NULL, 3, NULL, NULL),
(34, 'Dibang Valley', NULL, NULL, 3, NULL, NULL),
(35, 'Upper Subansiri', NULL, NULL, 3, NULL, NULL),
(36, 'West Kameng', NULL, NULL, 3, NULL, NULL),
(37, 'Barpeta', NULL, NULL, 2, NULL, NULL),
(38, 'Bongaigaon', NULL, NULL, 2, NULL, NULL),
(39, 'Cachar', NULL, NULL, 2, NULL, NULL),
(40, 'Darrang', NULL, NULL, 2, NULL, NULL),
(41, 'Dhemaji', NULL, NULL, 2, NULL, NULL),
(42, 'Dhubri', NULL, NULL, 2, NULL, NULL),
(43, 'Dibrugarh', NULL, NULL, 2, NULL, NULL),
(44, 'Goalpara', NULL, NULL, 2, NULL, NULL),
(45, 'Golaghat', NULL, NULL, 2, NULL, NULL),
(46, 'Hailakandi', NULL, NULL, 2, NULL, NULL),
(47, 'Jorhat', NULL, NULL, 2, NULL, NULL),
(48, 'Karbi Anglong', NULL, NULL, 2, NULL, NULL),
(49, 'Karimganj', NULL, NULL, 2, NULL, NULL),
(50, 'Kokrajhar', NULL, NULL, 2, NULL, NULL),
(51, 'Lakhimpur', NULL, NULL, 2, NULL, NULL),
(52, 'Marigaon', NULL, NULL, 2, NULL, NULL),
(53, 'Nagaon', NULL, NULL, 2, NULL, NULL),
(54, 'Nalbari', NULL, NULL, 2, NULL, NULL),
(55, 'North Cachar Hills', NULL, NULL, 2, NULL, NULL),
(56, 'Sibsagar', NULL, NULL, 2, NULL, NULL),
(57, 'Sonitpur', NULL, NULL, 2, NULL, NULL),
(58, 'Tinsukia', NULL, NULL, 2, NULL, NULL),
(59, 'Araria', NULL, NULL, 4, NULL, NULL),
(60, 'Aurangabad', NULL, NULL, 4, NULL, NULL),
(61, 'Banka', NULL, NULL, 4, NULL, NULL),
(62, 'Begusarai', NULL, NULL, 4, NULL, NULL),
(63, 'Bhagalpur', NULL, NULL, 4, NULL, NULL),
(64, 'Bhojpur', NULL, NULL, 4, NULL, NULL),
(65, 'Buxar', NULL, NULL, 4, NULL, NULL),
(66, 'Darbhanga', NULL, NULL, 4, NULL, NULL),
(67, 'Purba Champaran', NULL, NULL, 4, NULL, NULL),
(68, 'Gaya', NULL, NULL, 4, NULL, NULL),
(69, 'Gopalganj', NULL, NULL, 4, NULL, NULL),
(70, 'Jamui', NULL, NULL, 4, NULL, NULL),
(71, 'Jehanabad', NULL, NULL, 4, NULL, NULL),
(72, 'Khagaria', NULL, NULL, 4, NULL, NULL),
(73, 'Kishanganj', NULL, NULL, 4, NULL, NULL),
(74, 'Kaimur', NULL, NULL, 4, NULL, NULL),
(75, 'Katihar', NULL, NULL, 4, NULL, NULL),
(76, 'Lakhisarai', NULL, NULL, 4, NULL, NULL),
(77, 'Madhubani', NULL, NULL, 4, NULL, NULL),
(78, 'Munger', NULL, NULL, 4, NULL, NULL),
(79, 'Madhepura', NULL, NULL, 4, NULL, NULL),
(80, 'Muzaffarpur', NULL, NULL, 4, NULL, NULL),
(81, 'Nalanda', NULL, NULL, 4, NULL, NULL),
(82, 'Nawada', NULL, NULL, 4, NULL, NULL),
(83, 'Patna', NULL, NULL, 4, NULL, NULL),
(84, 'Purnia', NULL, NULL, 4, NULL, NULL),
(85, 'Rohtas', NULL, NULL, 4, NULL, NULL),
(86, 'Saharsa', NULL, NULL, 4, NULL, NULL),
(87, 'Samastipur', NULL, NULL, 4, NULL, NULL),
(88, 'Sheohar', NULL, NULL, 4, NULL, NULL),
(89, 'Sheikhpura', NULL, NULL, 4, NULL, NULL),
(90, 'Saran', NULL, NULL, 4, NULL, NULL),
(91, 'Sitamarhi', NULL, NULL, 4, NULL, NULL),
(92, 'Supaul', NULL, NULL, 4, NULL, NULL),
(93, 'Siwan', NULL, NULL, 4, NULL, NULL),
(94, 'Vaishali', NULL, NULL, 4, NULL, NULL),
(95, 'Pashchim Champaran', NULL, NULL, 4, NULL, NULL),
(96, 'Bastar', NULL, NULL, 35, NULL, NULL),
(97, 'Bilaspur', NULL, NULL, 35, NULL, NULL),
(98, 'Dantewada', NULL, NULL, 35, NULL, NULL),
(99, 'Dhamtari', NULL, NULL, 35, NULL, NULL),
(100, 'Durg', NULL, NULL, 35, NULL, NULL),
(101, 'Jashpur', NULL, NULL, 35, NULL, NULL),
(102, 'Janjgir-Champa', NULL, NULL, 35, NULL, NULL),
(104, 'Koriya', NULL, NULL, 35, NULL, NULL),
(105, 'Kanker', NULL, NULL, 35, NULL, NULL),
(106, 'Kawardha', NULL, NULL, 35, NULL, NULL),
(107, 'Mahasamund', NULL, NULL, 35, NULL, NULL),
(108, 'Raigarh', NULL, NULL, 35, NULL, NULL),
(109, 'Rajnandgaon', NULL, NULL, 35, NULL, NULL),
(110, 'Raipur', NULL, NULL, 35, NULL, NULL),
(111, 'Surguja', NULL, NULL, 35, NULL, NULL),
(112, 'Diu', NULL, NULL, 29, NULL, NULL),
(113, 'Daman', NULL, NULL, 29, NULL, NULL),
(114, 'Central Delhi', NULL, NULL, 25, NULL, NULL),
(115, 'East Delhi', NULL, NULL, 25, NULL, NULL),
(116, 'New Delhi', NULL, NULL, 25, NULL, NULL),
(117, 'North Delhi', NULL, NULL, 25, NULL, NULL),
(118, 'North East Delhi', NULL, NULL, 25, NULL, NULL),
(119, 'North West Delhi', NULL, NULL, 25, NULL, NULL),
(120, 'South Delhi', NULL, NULL, 25, NULL, NULL),
(121, 'South West Delhi', NULL, NULL, 25, NULL, NULL),
(122, 'West Delhi', NULL, NULL, 25, NULL, NULL),
(123, 'North Goa', NULL, NULL, 26, NULL, NULL),
(124, 'South Goa', NULL, NULL, 26, NULL, NULL),
(125, 'Ahmedabad', NULL, NULL, 5, NULL, NULL),
(126, 'Amreli District', NULL, NULL, 5, NULL, NULL),
(127, 'Anand', NULL, NULL, 5, NULL, NULL),
(128, 'Banaskantha', NULL, NULL, 5, NULL, NULL),
(129, 'Bharuch', NULL, NULL, 5, NULL, NULL),
(130, 'Bhavnagar', NULL, NULL, 5, NULL, NULL),
(131, 'Dahod', NULL, NULL, 5, NULL, NULL),
(132, 'The Dangs', NULL, NULL, 5, NULL, NULL),
(133, 'Gandhinagar', NULL, NULL, 5, NULL, NULL),
(134, 'Jamnagar', NULL, NULL, 5, NULL, NULL),
(135, 'Junagadh', NULL, NULL, 5, NULL, NULL),
(136, 'Kutch', NULL, NULL, 5, NULL, NULL),
(137, 'Kheda', NULL, NULL, 5, NULL, NULL),
(138, 'Mehsana', NULL, NULL, 5, NULL, NULL),
(139, 'Narmada', NULL, NULL, 5, NULL, NULL),
(140, 'Navsari', NULL, NULL, 5, NULL, NULL),
(141, 'Patan', NULL, NULL, 5, NULL, NULL),
(142, 'Panchmahal', NULL, NULL, 5, NULL, NULL),
(143, 'Porbandar', NULL, NULL, 5, NULL, NULL),
(144, 'Rajkot', NULL, NULL, 5, NULL, NULL),
(145, 'Sabarkantha', NULL, NULL, 5, NULL, NULL),
(146, 'Surendranagar', NULL, NULL, 5, NULL, NULL),
(147, 'Surat', NULL, NULL, 5, NULL, NULL),
(148, 'Vadodara', NULL, NULL, 5, NULL, NULL),
(149, 'Valsad', NULL, NULL, 5, NULL, NULL),
(150, 'Ambala', NULL, NULL, 6, NULL, NULL),
(151, 'Bhiwani', NULL, NULL, 6, NULL, NULL),
(152, 'Faridabad', NULL, NULL, 6, NULL, NULL),
(153, 'Fatehabad', NULL, NULL, 6, NULL, NULL),
(154, 'Gurgaon', NULL, NULL, 6, NULL, NULL),
(155, 'Hissar', NULL, NULL, 6, NULL, NULL),
(156, 'Jhajjar', NULL, NULL, 6, NULL, NULL),
(157, 'Jind', NULL, NULL, 6, NULL, NULL),
(158, 'Karnal', NULL, NULL, 6, NULL, NULL),
(159, 'Kaithal', NULL, NULL, 6, NULL, NULL),
(160, 'Kurukshetra', NULL, NULL, 6, NULL, NULL),
(161, 'Mahendragarh', NULL, NULL, 6, NULL, NULL),
(162, 'Mewat', NULL, NULL, 6, NULL, NULL),
(163, 'Panchkula', NULL, NULL, 6, NULL, NULL),
(164, 'Panipat', NULL, NULL, 6, NULL, NULL),
(165, 'Rewari', NULL, NULL, 6, NULL, NULL),
(166, 'Rohtak', NULL, NULL, 6, NULL, NULL),
(167, 'Sirsa', NULL, NULL, 6, NULL, NULL),
(168, 'Sonepat', NULL, NULL, 6, NULL, NULL),
(169, 'Yamuna Nagar', NULL, NULL, 6, NULL, NULL),
(170, 'Palwal', NULL, NULL, 6, NULL, NULL),
(171, 'Bilaspur', NULL, NULL, 7, NULL, NULL),
(172, 'Chamba', NULL, NULL, 7, NULL, NULL),
(173, 'Hamirpur', NULL, NULL, 7, NULL, NULL),
(174, 'Kangra', NULL, NULL, 7, NULL, NULL),
(175, 'Kinnaur', NULL, NULL, 7, NULL, NULL),
(176, 'Kulu', NULL, NULL, 7, NULL, NULL),
(177, 'Lahaul and Spiti', NULL, NULL, 7, NULL, NULL),
(178, 'Mandi', NULL, NULL, 7, NULL, NULL),
(179, 'Shimla', NULL, NULL, 7, NULL, NULL),
(180, 'Sirmaur', NULL, NULL, 7, NULL, NULL),
(181, 'Solan', NULL, NULL, 7, NULL, NULL),
(182, 'Una', NULL, NULL, 7, NULL, NULL),
(183, 'Anantnag', NULL, NULL, 8, NULL, NULL),
(184, 'Badgam', NULL, NULL, 8, NULL, NULL),
(185, 'Bandipore', NULL, NULL, 8, NULL, NULL),
(186, 'Baramula', NULL, NULL, 8, NULL, NULL),
(187, 'Doda', NULL, NULL, 8, NULL, NULL),
(188, 'Jammu', NULL, NULL, 8, NULL, NULL),
(189, 'Kargil', NULL, NULL, 8, NULL, NULL),
(190, 'Kathua', NULL, NULL, 8, NULL, NULL),
(191, 'Kupwara', NULL, NULL, 8, NULL, NULL),
(192, 'Leh', NULL, NULL, 8, NULL, NULL),
(193, 'Poonch', NULL, NULL, 8, NULL, NULL),
(194, 'Pulwama', NULL, NULL, 8, NULL, NULL),
(195, 'Rajauri', NULL, NULL, 8, NULL, NULL),
(196, 'Srinagar', NULL, NULL, 8, NULL, NULL),
(197, 'Samba', NULL, NULL, 8, NULL, NULL),
(198, 'Udhampur', NULL, NULL, 8, NULL, NULL),
(199, 'Bokaro', NULL, NULL, 34, NULL, NULL),
(200, 'Chatra', NULL, NULL, 34, NULL, NULL),
(201, 'Deoghar', NULL, NULL, 34, NULL, NULL),
(202, 'Dhanbad', NULL, NULL, 34, NULL, NULL),
(203, 'Dumka', NULL, NULL, 34, NULL, NULL),
(204, 'Purba Singhbhum', NULL, NULL, 34, NULL, NULL),
(205, 'Garhwa', NULL, NULL, 34, NULL, NULL),
(206, 'Giridih', NULL, NULL, 34, NULL, NULL),
(207, 'Godda', NULL, NULL, 34, NULL, NULL),
(208, 'Gumla', NULL, NULL, 34, NULL, NULL),
(209, 'Hazaribagh', NULL, NULL, 34, NULL, NULL),
(210, 'Koderma', NULL, NULL, 34, NULL, NULL),
(211, 'Lohardaga', NULL, NULL, 34, NULL, NULL),
(212, 'Pakur', NULL, NULL, 34, NULL, NULL),
(213, 'Palamu', NULL, NULL, 34, NULL, NULL),
(214, 'Ranchi', NULL, NULL, 34, NULL, NULL),
(215, 'Sahibganj', NULL, NULL, 34, NULL, NULL),
(216, 'Seraikela and Kharsawan', NULL, NULL, 34, NULL, NULL),
(217, 'Pashchim Singhbhum', NULL, NULL, 34, NULL, NULL),
(218, 'Ramgarh', NULL, NULL, 34, NULL, NULL),
(219, 'Bidar', NULL, NULL, 9, NULL, NULL),
(220, 'Belgaum', NULL, NULL, 9, NULL, NULL),
(221, 'Bijapur', NULL, NULL, 9, NULL, NULL),
(222, 'Bagalkot', NULL, NULL, 9, NULL, NULL),
(223, 'Bellary', NULL, NULL, 9, NULL, NULL),
(224, 'Bangalore Rural District', NULL, NULL, 9, NULL, NULL),
(225, 'Bangalore Urban District', NULL, NULL, 9, NULL, NULL),
(226, 'Chamarajnagar', NULL, NULL, 9, NULL, NULL),
(227, 'Chikmagalur', NULL, NULL, 9, NULL, NULL),
(228, 'Chitradurga', NULL, NULL, 9, NULL, NULL),
(229, 'Davanagere', NULL, NULL, 9, NULL, NULL),
(230, 'Dharwad', NULL, NULL, 9, NULL, NULL),
(231, 'Dakshina Kannada', NULL, NULL, 9, NULL, NULL),
(232, 'Gadag', NULL, NULL, 9, NULL, NULL),
(233, 'Gulbarga', NULL, NULL, 9, NULL, NULL),
(234, 'Hassan', NULL, NULL, 9, NULL, NULL),
(235, 'Haveri District', NULL, NULL, 9, NULL, NULL),
(236, 'Kodagu', NULL, NULL, 9, NULL, NULL),
(237, 'Kolar', NULL, NULL, 9, NULL, NULL),
(238, 'Koppal', NULL, NULL, 9, NULL, NULL),
(239, 'Mandya', NULL, NULL, 9, NULL, NULL),
(240, 'Mysore', NULL, NULL, 9, NULL, NULL),
(241, 'Raichur', NULL, NULL, 9, NULL, NULL),
(242, 'Shimoga', NULL, NULL, 9, NULL, NULL),
(243, 'Tumkur', NULL, NULL, 9, NULL, NULL),
(244, 'Udupi', NULL, NULL, 9, NULL, NULL),
(245, 'Uttara Kannada', NULL, NULL, 9, NULL, NULL),
(246, 'Ramanagara', NULL, NULL, 9, NULL, NULL),
(247, 'Chikballapur', NULL, NULL, 9, NULL, NULL),
(248, 'Yadagiri', NULL, NULL, 9, NULL, NULL),
(249, 'Alappuzha', NULL, NULL, 10, NULL, NULL),
(250, 'Ernakulam', NULL, NULL, 10, NULL, NULL),
(251, 'Idukki', NULL, NULL, 10, NULL, NULL),
(252, 'Kollam', NULL, NULL, 10, NULL, NULL),
(253, 'Kannur', NULL, NULL, 10, NULL, NULL),
(254, 'Kasaragod', NULL, NULL, 10, NULL, NULL),
(255, 'Kottayam', NULL, NULL, 10, NULL, NULL),
(256, 'Kozhikode', NULL, NULL, 10, NULL, NULL),
(257, 'Malappuram', NULL, NULL, 10, NULL, NULL),
(258, 'Palakkad', NULL, NULL, 10, NULL, NULL),
(259, 'Pathanamthitta', NULL, NULL, 10, NULL, NULL),
(260, 'Thrissur', NULL, NULL, 10, NULL, NULL),
(261, 'Thiruvananthapuram', NULL, NULL, 10, NULL, NULL),
(262, 'Wayanad', NULL, NULL, 10, NULL, NULL),
(263, 'Alirajpur', NULL, NULL, 11, NULL, NULL),
(264, 'Anuppur', NULL, NULL, 11, NULL, NULL),
(265, 'Ashok Nagar', NULL, NULL, 11, NULL, NULL),
(266, 'Balaghat', NULL, NULL, 11, NULL, NULL),
(267, 'Barwani', NULL, NULL, 11, NULL, NULL),
(268, 'Betul', NULL, NULL, 11, NULL, NULL),
(269, 'Bhind', NULL, NULL, 11, NULL, NULL),
(270, 'Bhopal', NULL, NULL, 11, NULL, NULL),
(271, 'Burhanpur', NULL, NULL, 11, NULL, NULL),
(272, 'Chhatarpur', NULL, NULL, 11, NULL, NULL),
(273, 'Chhindwara', NULL, NULL, 11, NULL, NULL),
(274, 'Damoh', NULL, NULL, 11, NULL, NULL),
(275, 'Datia', NULL, NULL, 11, NULL, NULL),
(276, 'Dewas', NULL, NULL, 11, NULL, NULL),
(277, 'Dhar', NULL, NULL, 11, NULL, NULL),
(278, 'Dindori', NULL, NULL, 11, NULL, NULL),
(279, 'Guna', NULL, NULL, 11, NULL, NULL),
(280, 'Gwalior', NULL, NULL, 11, NULL, NULL),
(281, 'Harda', NULL, NULL, 11, NULL, NULL),
(282, 'Hoshangabad', NULL, NULL, 11, NULL, NULL),
(283, 'Indore', NULL, NULL, 11, NULL, NULL),
(284, 'Jabalpur', NULL, NULL, 11, NULL, NULL),
(285, 'Jhabua', NULL, NULL, 11, NULL, NULL),
(286, 'Katni', NULL, NULL, 11, NULL, NULL),
(287, 'Khandwa', NULL, NULL, 11, NULL, NULL),
(288, 'Khargone', NULL, NULL, 11, NULL, NULL),
(289, 'Mandla', NULL, NULL, 11, NULL, NULL),
(290, 'Mandsaur', NULL, NULL, 11, NULL, NULL),
(291, 'Morena', NULL, NULL, 11, NULL, NULL),
(292, 'Narsinghpur', NULL, NULL, 11, NULL, NULL),
(293, 'Neemuch', NULL, NULL, 11, NULL, NULL),
(294, 'Panna', NULL, NULL, 11, NULL, NULL),
(295, 'Rewa', NULL, NULL, 11, NULL, NULL),
(296, 'Rajgarh', NULL, NULL, 11, NULL, NULL),
(297, 'Ratlam', NULL, NULL, 11, NULL, NULL),
(298, 'Raisen', NULL, NULL, 11, NULL, NULL),
(299, 'Sagar', NULL, NULL, 11, NULL, NULL),
(300, 'Satna', NULL, NULL, 11, NULL, NULL),
(301, 'Sehore', NULL, NULL, 11, NULL, NULL),
(302, 'Seoni', NULL, NULL, 11, NULL, NULL),
(303, 'Shahdol', NULL, NULL, 11, NULL, NULL),
(304, 'Shajapur', NULL, NULL, 11, NULL, NULL),
(305, 'Sheopur', NULL, NULL, 11, NULL, NULL),
(306, 'Shivpuri', NULL, NULL, 11, NULL, NULL),
(307, 'Sidhi', NULL, NULL, 11, NULL, NULL),
(308, 'Singrauli', NULL, NULL, 11, NULL, NULL),
(309, 'Tikamgarh', NULL, NULL, 11, NULL, NULL),
(310, 'Ujjain', NULL, NULL, 11, NULL, NULL),
(311, 'Umaria', NULL, NULL, 11, NULL, NULL),
(312, 'Vidisha', NULL, NULL, 11, NULL, NULL),
(313, 'Ahmednagar', NULL, NULL, 12, NULL, NULL),
(314, 'Akola', NULL, NULL, 12, NULL, NULL),
(315, 'Amrawati', NULL, NULL, 12, NULL, NULL),
(316, 'Aurangabad', NULL, NULL, 12, NULL, NULL),
(317, 'Bhandara', NULL, NULL, 12, NULL, NULL),
(318, 'Beed', NULL, NULL, 12, NULL, NULL),
(319, 'Buldhana', NULL, NULL, 12, NULL, NULL),
(320, 'Chandrapur', NULL, NULL, 12, NULL, NULL),
(321, 'Dhule', NULL, NULL, 12, NULL, NULL),
(322, 'Gadchiroli', NULL, NULL, 12, NULL, NULL),
(323, 'Gondiya', NULL, NULL, 12, NULL, NULL),
(324, 'Hingoli', NULL, NULL, 12, NULL, NULL),
(325, 'Jalgaon', NULL, NULL, 12, NULL, NULL),
(326, 'Jalna', NULL, NULL, 12, NULL, NULL),
(327, 'Kolhapur', NULL, NULL, 12, NULL, NULL),
(328, 'Latur', NULL, NULL, 12, NULL, NULL),
(329, 'Mumbai City', NULL, NULL, 12, NULL, NULL),
(330, 'Mumbai suburban', NULL, NULL, 12, NULL, NULL),
(331, 'Nandurbar', NULL, NULL, 12, NULL, NULL),
(332, 'Nanded', NULL, NULL, 12, NULL, NULL),
(333, 'Nagpur', NULL, NULL, 12, NULL, NULL),
(334, 'Nashik', NULL, NULL, 12, NULL, NULL),
(335, 'Osmanabad', NULL, NULL, 12, NULL, NULL),
(336, 'Parbhani', NULL, NULL, 12, NULL, NULL),
(337, 'Pune', NULL, NULL, 12, NULL, NULL),
(338, 'Raigad', NULL, NULL, 12, NULL, NULL),
(339, 'Ratnagiri', NULL, NULL, 12, NULL, NULL),
(340, 'Sindhudurg', NULL, NULL, 12, NULL, NULL),
(341, 'Sangli', NULL, NULL, 12, NULL, NULL),
(342, 'Solapur', NULL, NULL, 12, NULL, NULL),
(343, 'Satara', NULL, NULL, 12, NULL, NULL),
(344, 'Thane', NULL, NULL, 12, NULL, NULL),
(345, 'Wardha', NULL, NULL, 12, NULL, NULL),
(346, 'Washim', NULL, NULL, 12, NULL, NULL),
(347, 'Yavatmal', NULL, NULL, 12, NULL, NULL),
(348, 'Bishnupur', NULL, NULL, 13, NULL, NULL),
(349, 'Churachandpur', NULL, NULL, 13, NULL, NULL),
(350, 'Chandel', NULL, NULL, 13, NULL, NULL),
(351, 'Imphal East', NULL, NULL, 13, NULL, NULL),
(352, 'Senapati', NULL, NULL, 13, NULL, NULL),
(353, 'Tamenglong', NULL, NULL, 13, NULL, NULL),
(354, 'Thoubal', NULL, NULL, 13, NULL, NULL),
(355, 'Ukhrul', NULL, NULL, 13, NULL, NULL),
(356, 'Imphal West', NULL, NULL, 13, NULL, NULL),
(357, 'East Garo Hills', NULL, NULL, 14, NULL, NULL),
(358, 'East Khasi Hills', NULL, NULL, 14, NULL, NULL),
(359, 'Jaintia Hills', NULL, NULL, 14, NULL, NULL),
(360, 'Ri-Bhoi', NULL, NULL, 14, NULL, NULL),
(361, 'South Garo Hills', NULL, NULL, 14, NULL, NULL),
(362, 'West Garo Hills', NULL, NULL, 14, NULL, NULL),
(363, 'West Khasi Hills', NULL, NULL, 14, NULL, NULL),
(364, 'Aizawl', NULL, NULL, 15, NULL, NULL),
(365, 'Champhai', NULL, NULL, 15, NULL, NULL),
(366, 'Kolasib', NULL, NULL, 15, NULL, NULL),
(367, 'Lawngtlai', NULL, NULL, 15, NULL, NULL),
(368, 'Lunglei', NULL, NULL, 15, NULL, NULL),
(369, 'Mamit', NULL, NULL, 15, NULL, NULL),
(370, 'Saiha', NULL, NULL, 15, NULL, NULL),
(371, 'Serchhip', NULL, NULL, 15, NULL, NULL),
(372, 'Dimapur', NULL, NULL, 16, NULL, NULL),
(373, 'Kohima', NULL, NULL, 16, NULL, NULL),
(374, 'Mokokchung', NULL, NULL, 16, NULL, NULL),
(375, 'Mon', NULL, NULL, 16, NULL, NULL),
(376, 'Phek', NULL, NULL, 16, NULL, NULL),
(377, 'Tuensang', NULL, NULL, 16, NULL, NULL),
(378, 'Wokha', NULL, NULL, 16, NULL, NULL),
(379, 'Zunheboto', NULL, NULL, 16, NULL, NULL),
(380, 'Angul', NULL, NULL, 17, NULL, NULL),
(381, 'Boudh', NULL, NULL, 17, NULL, NULL),
(382, 'Bhadrak', NULL, NULL, 17, NULL, NULL),
(383, 'Bolangir', NULL, NULL, 17, NULL, NULL),
(384, 'Bargarh', NULL, NULL, 17, NULL, NULL),
(385, 'Baleswar', NULL, NULL, 17, NULL, NULL),
(386, 'Cuttack', NULL, NULL, 17, NULL, NULL),
(387, 'Debagarh', NULL, NULL, 17, NULL, NULL),
(388, 'Dhenkanal', NULL, NULL, 17, NULL, NULL),
(389, 'Ganjam', NULL, NULL, 17, NULL, NULL),
(390, 'Gajapati', NULL, NULL, 17, NULL, NULL),
(391, 'Jharsuguda', NULL, NULL, 17, NULL, NULL),
(392, 'Jajapur', NULL, NULL, 17, NULL, NULL),
(393, 'Jagatsinghpur', NULL, NULL, 17, NULL, NULL),
(394, 'Khordha', NULL, NULL, 17, NULL, NULL),
(395, 'Kendujhar', NULL, NULL, 17, NULL, NULL),
(396, 'Kalahandi', NULL, NULL, 17, NULL, NULL),
(397, 'Kandhamal', NULL, NULL, 17, NULL, NULL),
(398, 'Koraput', NULL, NULL, 17, NULL, NULL),
(399, 'Kendrapara', NULL, NULL, 17, NULL, NULL),
(400, 'Malkangiri', NULL, NULL, 17, NULL, NULL),
(401, 'Mayurbhanj', NULL, NULL, 17, NULL, NULL),
(402, 'Nabarangpur', NULL, NULL, 17, NULL, NULL),
(403, 'Nuapada', NULL, NULL, 17, NULL, NULL),
(404, 'Nayagarh', NULL, NULL, 17, NULL, NULL),
(405, 'Puri', NULL, NULL, 17, NULL, NULL),
(406, 'Rayagada', NULL, NULL, 17, NULL, NULL),
(407, 'Sambalpur', NULL, NULL, 17, NULL, NULL),
(408, 'Subarnapur', NULL, NULL, 17, NULL, NULL),
(409, 'Sundargarh', NULL, NULL, 17, NULL, NULL),
(410, 'Karaikal', NULL, NULL, 27, NULL, NULL),
(411, 'Mahe', NULL, NULL, 27, NULL, NULL),
(412, 'Puducherry', NULL, NULL, 27, NULL, NULL),
(413, 'Yanam', NULL, NULL, 27, NULL, NULL),
(414, 'Amritsar', NULL, NULL, 18, NULL, NULL),
(415, 'Bathinda', NULL, NULL, 18, NULL, NULL),
(416, 'Firozpur', NULL, NULL, 18, NULL, NULL),
(417, 'Faridkot', NULL, NULL, 18, NULL, NULL),
(418, 'Fatehgarh Sahib', NULL, NULL, 18, NULL, NULL),
(419, 'Gurdaspur', NULL, NULL, 18, NULL, NULL),
(420, 'Hoshiarpur', NULL, NULL, 18, NULL, NULL),
(421, 'Jalandhar', NULL, NULL, 18, NULL, NULL),
(422, 'Kapurthala', NULL, NULL, 18, NULL, NULL),
(423, 'Ludhiana', NULL, NULL, 18, NULL, NULL),
(424, 'Mansa', NULL, NULL, 18, NULL, NULL),
(425, 'Moga', NULL, NULL, 18, NULL, NULL),
(426, 'Mukatsar', NULL, NULL, 18, NULL, NULL),
(427, 'Nawan Shehar', NULL, NULL, 18, NULL, NULL),
(428, 'Patiala', NULL, NULL, 18, NULL, NULL),
(429, 'Rupnagar', NULL, NULL, 18, NULL, NULL),
(430, 'Sangrur', NULL, NULL, 18, NULL, NULL),
(431, 'Ajmer', NULL, NULL, 19, NULL, NULL),
(432, 'Alwar', NULL, NULL, 19, NULL, NULL),
(433, 'Bikaner', NULL, NULL, 19, NULL, NULL),
(434, 'Barmer', NULL, NULL, 19, NULL, NULL),
(435, 'Banswara', NULL, NULL, 19, NULL, NULL),
(436, 'Bharatpur', NULL, NULL, 19, NULL, NULL),
(437, 'Baran', NULL, NULL, 19, NULL, NULL),
(438, 'Bundi', NULL, NULL, 19, NULL, NULL),
(439, 'Bhilwara', NULL, NULL, 19, NULL, NULL),
(440, 'Churu', NULL, NULL, 19, NULL, NULL),
(441, 'Chittorgarh', NULL, NULL, 19, NULL, NULL),
(442, 'Dausa', NULL, NULL, 19, NULL, NULL),
(443, 'Dholpur', NULL, NULL, 19, NULL, NULL),
(444, 'Dungapur', NULL, NULL, 19, NULL, NULL),
(445, 'Ganganagar', NULL, NULL, 19, NULL, NULL),
(446, 'Hanumangarh', NULL, NULL, 19, NULL, NULL),
(447, 'Juhnjhunun', NULL, NULL, 19, NULL, NULL),
(448, 'Jalore', NULL, NULL, 19, NULL, NULL),
(449, 'Jodhpur', NULL, NULL, 19, NULL, NULL),
(450, 'Jaipur', NULL, NULL, 19, NULL, NULL),
(451, 'Jaisalmer', NULL, NULL, 19, NULL, NULL),
(452, 'Jhalawar', NULL, NULL, 19, NULL, NULL),
(453, 'Karauli', NULL, NULL, 19, NULL, NULL),
(454, 'Kota', NULL, NULL, 19, NULL, NULL),
(455, 'Nagaur', NULL, NULL, 19, NULL, NULL),
(456, 'Pali', NULL, NULL, 19, NULL, NULL),
(457, 'Pratapgarh', NULL, NULL, 19, NULL, NULL),
(458, 'Rajsamand', NULL, NULL, 19, NULL, NULL),
(459, 'Sikar', NULL, NULL, 19, NULL, NULL),
(460, 'Sawai Madhopur', NULL, NULL, 19, NULL, NULL),
(461, 'Sirohi', NULL, NULL, 19, NULL, NULL),
(462, 'Tonk', NULL, NULL, 19, NULL, NULL),
(463, 'Udaipur', NULL, NULL, 19, NULL, NULL),
(464, 'East Sikkim', NULL, NULL, 20, NULL, NULL),
(465, 'North Sikkim', NULL, NULL, 20, NULL, NULL),
(466, 'South Sikkim', NULL, NULL, 20, NULL, NULL),
(467, 'West Sikkim', NULL, NULL, 20, NULL, NULL),
(468, 'Ariyalur', NULL, NULL, 21, NULL, NULL),
(469, 'Chennai', NULL, NULL, 21, NULL, NULL),
(470, 'Coimbatore', NULL, NULL, 21, NULL, NULL),
(471, 'Cuddalore', NULL, NULL, 21, NULL, NULL),
(472, 'Dharmapuri', NULL, NULL, 21, NULL, NULL),
(473, 'Dindigul', NULL, NULL, 21, NULL, NULL),
(474, 'Erode', NULL, NULL, 21, NULL, NULL),
(475, 'Kanchipuram', NULL, NULL, 21, NULL, NULL),
(476, 'Kanyakumari', NULL, NULL, 21, NULL, NULL),
(477, 'Karur', NULL, NULL, 21, NULL, NULL),
(478, 'Madurai', NULL, NULL, 21, NULL, NULL),
(479, 'Nagapattinam', NULL, NULL, 21, NULL, NULL),
(480, 'The Nilgiris', NULL, NULL, 21, NULL, NULL),
(481, 'Namakkal', NULL, NULL, 21, NULL, NULL),
(482, 'Perambalur', NULL, NULL, 21, NULL, NULL),
(483, 'Pudukkottai', NULL, NULL, 21, NULL, NULL),
(484, 'Ramanathapuram', NULL, NULL, 21, NULL, NULL),
(485, 'Salem', NULL, NULL, 21, NULL, NULL),
(486, 'Sivagangai', NULL, NULL, 21, NULL, NULL),
(487, 'Tiruppur', NULL, NULL, 21, NULL, NULL),
(488, 'Tiruchirappalli', NULL, NULL, 21, NULL, NULL),
(489, 'Theni', NULL, NULL, 21, NULL, NULL),
(490, 'Tirunelveli', NULL, NULL, 21, NULL, NULL),
(491, 'Thanjavur', NULL, NULL, 21, NULL, NULL),
(492, 'Thoothukudi', NULL, NULL, 21, NULL, NULL),
(493, 'Thiruvallur', NULL, NULL, 21, NULL, NULL),
(494, 'Thiruvarur', NULL, NULL, 21, NULL, NULL),
(495, 'Tiruvannamalai', NULL, NULL, 21, NULL, NULL),
(496, 'Vellore', NULL, NULL, 21, NULL, NULL),
(497, 'Villupuram', NULL, NULL, 21, NULL, NULL),
(498, 'Dhalai', NULL, NULL, 22, NULL, NULL),
(499, 'North Tripura', NULL, NULL, 22, NULL, NULL),
(500, 'South Tripura', NULL, NULL, 22, NULL, NULL),
(501, 'West Tripura', NULL, NULL, 22, NULL, NULL),
(502, 'Almora', NULL, NULL, 33, NULL, NULL),
(503, 'Bageshwar', NULL, NULL, 33, NULL, NULL),
(504, 'Chamoli', NULL, NULL, 33, NULL, NULL),
(505, 'Champawat', NULL, NULL, 33, NULL, NULL),
(506, 'Dehradun', NULL, NULL, 33, NULL, NULL),
(507, 'Haridwar', NULL, NULL, 33, NULL, NULL),
(508, 'Nainital', NULL, NULL, 33, NULL, NULL),
(509, 'Pauri Garhwal', NULL, NULL, 33, NULL, NULL),
(510, 'Pithoragharh', NULL, NULL, 33, NULL, NULL),
(511, 'Rudraprayag', NULL, NULL, 33, NULL, NULL),
(512, 'Tehri Garhwal', NULL, NULL, 33, NULL, NULL),
(513, 'Udham Singh Nagar', NULL, NULL, 33, NULL, NULL),
(514, 'Uttarkashi', NULL, NULL, 33, NULL, NULL),
(515, 'Agra', NULL, NULL, 23, NULL, NULL),
(516, 'Allahabad', NULL, NULL, 23, NULL, NULL),
(517, 'Aligarh', NULL, NULL, 23, NULL, NULL),
(518, 'Ambedkar Nagar', NULL, NULL, 23, NULL, NULL),
(519, 'Auraiya', NULL, NULL, 23, NULL, NULL),
(520, 'Azamgarh', NULL, NULL, 23, NULL, NULL),
(521, 'Barabanki', NULL, NULL, 23, NULL, NULL),
(522, 'Badaun', NULL, NULL, 23, NULL, NULL),
(523, 'Bagpat', NULL, NULL, 23, NULL, NULL),
(524, 'Bahraich', NULL, NULL, 23, NULL, NULL),
(525, 'Bijnor', NULL, NULL, 23, NULL, NULL),
(526, 'Ballia', NULL, NULL, 23, NULL, NULL),
(527, 'Banda', NULL, NULL, 23, NULL, NULL),
(528, 'Balrampur', NULL, NULL, 23, NULL, NULL),
(529, 'Bareilly', NULL, NULL, 23, NULL, NULL),
(530, 'Basti', NULL, NULL, 23, NULL, NULL),
(531, 'Bulandshahr', NULL, NULL, 23, NULL, NULL),
(532, 'Chandauli', NULL, NULL, 23, NULL, NULL),
(533, 'Chitrakoot', NULL, NULL, 23, NULL, NULL),
(534, 'Deoria', NULL, NULL, 23, NULL, NULL),
(535, 'Etah', NULL, NULL, 23, NULL, NULL),
(536, 'Kanshiram Nagar', NULL, NULL, 23, NULL, NULL),
(537, 'Etawah', NULL, NULL, 23, NULL, NULL),
(538, 'Firozabad', NULL, NULL, 23, NULL, NULL),
(539, 'Farrukhabad', NULL, NULL, 23, NULL, NULL),
(540, 'Fatehpur', NULL, NULL, 23, NULL, NULL),
(541, 'Faizabad', NULL, NULL, 23, NULL, NULL),
(542, 'Gautam Buddha Nagar', NULL, NULL, 23, NULL, NULL),
(543, 'Gonda', NULL, NULL, 23, NULL, NULL),
(544, 'Ghazipur', NULL, NULL, 23, NULL, NULL),
(545, 'Gorkakhpur', NULL, NULL, 23, NULL, NULL),
(546, 'Ghaziabad', NULL, NULL, 23, NULL, NULL),
(547, 'Hamirpur', NULL, NULL, 23, NULL, NULL),
(548, 'Hardoi', NULL, NULL, 23, NULL, NULL),
(549, 'Mahamaya Nagar', NULL, NULL, 23, NULL, NULL),
(550, 'Jhansi', NULL, NULL, 23, NULL, NULL),
(551, 'Jalaun', NULL, NULL, 23, NULL, NULL),
(552, 'Jyotiba Phule Nagar', NULL, NULL, 23, NULL, NULL),
(553, 'Jaunpur District', NULL, NULL, 23, NULL, NULL),
(554, 'Kanpur Dehat', NULL, NULL, 23, NULL, NULL),
(555, 'Kannauj', NULL, NULL, 23, NULL, NULL),
(556, 'Kanpur Nagar', NULL, NULL, 23, NULL, NULL),
(557, 'Kaushambi', NULL, NULL, 23, NULL, NULL),
(558, 'Kushinagar', NULL, NULL, 23, NULL, NULL),
(559, 'Lalitpur', NULL, NULL, 23, NULL, NULL),
(560, 'Lakhimpur Kheri', NULL, NULL, 23, NULL, NULL),
(561, 'Lucknow', NULL, NULL, 23, NULL, NULL),
(562, 'Mau', NULL, NULL, 23, NULL, NULL),
(563, 'Meerut', NULL, NULL, 23, NULL, NULL),
(564, 'Maharajganj', NULL, NULL, 23, NULL, NULL),
(565, 'Mahoba', NULL, NULL, 23, NULL, NULL),
(566, 'Mirzapur', NULL, NULL, 23, NULL, NULL),
(567, 'Moradabad', NULL, NULL, 23, NULL, NULL),
(568, 'Mainpuri', NULL, NULL, 23, NULL, NULL),
(569, 'Mathura', NULL, NULL, 23, NULL, NULL),
(570, 'Muzaffarnagar', NULL, NULL, 23, NULL, NULL),
(571, 'Pilibhit', NULL, NULL, 23, NULL, NULL),
(572, 'Pratapgarh', NULL, NULL, 23, NULL, NULL),
(573, 'Rampur', NULL, NULL, 23, NULL, NULL),
(574, 'Rae Bareli', NULL, NULL, 23, NULL, NULL),
(575, 'Saharanpur', NULL, NULL, 23, NULL, NULL),
(576, 'Sitapur', NULL, NULL, 23, NULL, NULL),
(577, 'Shahjahanpur', NULL, NULL, 23, NULL, NULL),
(578, 'Sant Kabir Nagar', NULL, NULL, 23, NULL, NULL),
(579, 'Siddharthnagar', NULL, NULL, 23, NULL, NULL),
(580, 'Sonbhadra', NULL, NULL, 23, NULL, NULL),
(581, 'Sant Ravidas Nagar', NULL, NULL, 23, NULL, NULL),
(582, 'Sultanpur', NULL, NULL, 23, NULL, NULL),
(583, 'Shravasti', NULL, NULL, 23, NULL, NULL),
(584, 'Unnao', NULL, NULL, 23, NULL, NULL),
(585, 'Varanasi', NULL, NULL, 23, NULL, NULL),
(586, 'Birbhum', NULL, NULL, 24, NULL, NULL),
(587, 'Bankura', NULL, NULL, 24, NULL, NULL),
(588, 'Bardhaman', NULL, NULL, 24, NULL, NULL),
(589, 'Darjeeling', NULL, NULL, 24, NULL, NULL),
(590, 'Dakshin Dinajpur', NULL, NULL, 24, NULL, NULL),
(591, 'Hooghly', NULL, NULL, 24, NULL, NULL),
(592, 'Howrah', NULL, NULL, 24, NULL, NULL),
(593, 'Jalpaiguri', NULL, NULL, 24, NULL, NULL),
(594, 'Cooch Behar', NULL, NULL, 24, NULL, NULL),
(595, 'Kolkata', NULL, NULL, 24, NULL, NULL),
(596, 'Malda', NULL, NULL, 24, NULL, NULL),
(597, 'Midnapore', NULL, NULL, 24, NULL, NULL),
(598, 'Murshidabad', NULL, NULL, 24, NULL, NULL),
(599, 'Nadia', NULL, NULL, 24, NULL, NULL),
(600, 'North 24 Parganas', NULL, NULL, 24, NULL, NULL),
(601, 'South 24 Parganas', NULL, NULL, 24, NULL, NULL),
(602, 'Purulia', NULL, NULL, 24, NULL, NULL),
(603, 'Uttar Dinajpur', NULL, NULL, 24, NULL, NULL),
(604, 'Bhubaneswar', NULL, NULL, 17, NULL, NULL),
(605, 'Kamrup', NULL, NULL, 2, NULL, NULL),
(606, 'Korba', NULL, NULL, 35, NULL, NULL),
(607, 'Manimajra', NULL, NULL, 31, NULL, NULL),
(608, 'Behlana', NULL, NULL, 31, NULL, NULL),
(609, 'Chandigarh', NULL, NULL, 31, NULL, NULL),
(610, 'Daria', NULL, NULL, 31, NULL, NULL),
(611, 'Khuda Alisher', NULL, NULL, 31, NULL, NULL),
(612, 'Mauli Jagran', NULL, NULL, 31, NULL, NULL),
(613, 'Purba Medinipur', NULL, NULL, 24, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `college_courses`
--

CREATE TABLE `college_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `college_profile_id` bigint(20) UNSIGNED DEFAULT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `seats` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `college_courses`
--

INSERT INTO `college_courses` (`id`, `user_id`, `college_profile_id`, `course_id`, `seats`, `created_at`, `updated_at`) VALUES
(61, 739, 49, 13, '30', '2024-04-24 06:37:39', '2024-04-24 06:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `college_profiles`
--

CREATE TABLE `college_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `college_name` varchar(255) DEFAULT NULL,
  `principal_name` varchar(255) DEFAULT NULL,
  `state_id` bigint(20) UNSIGNED DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `year_of_establishment` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `certificate` varchar(255) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `college_profiles`
--

INSERT INTO `college_profiles` (`id`, `phone`, `college_name`, `principal_name`, `state_id`, `city_id`, `district`, `year_of_establishment`, `address`, `certificate`, `document`, `user_id`, `created_at`, `updated_at`) VALUES
(49, '7605926564', 'Srdc Pvt Ltd', 'Debendra Sahoo', 17, 380, 'Bhadrak', '2020', '325, Baramunda, Bhubaneswar', NULL, '/uploaded_files/BANK GUARANTEE.pdf', 739, '2024-04-24 06:37:39', '2024-04-24 06:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'India', NULL, NULL),
(2, 'Others', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(13, 'LLB', '2024-04-23 10:43:09', '2024-04-23 10:43:09');

-- --------------------------------------------------------

--
-- Table structure for table `document_categories`
--

CREATE TABLE `document_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_required` tinyint(1) NOT NULL DEFAULT 1,
  `file_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `document_categories`
--

INSERT INTO `document_categories` (`id`, `name`, `created_at`, `updated_at`, `is_required`, `file_type`) VALUES
(1, '10th Marksheet', '2024-04-23 15:45:42', '2024-04-23 15:45:42', 1, 'pdf,jpg');

-- --------------------------------------------------------

--
-- Table structure for table `entrance_fees`
--

CREATE TABLE `entrance_fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_name` varchar(255) DEFAULT NULL,
  `exam_fee` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `entrance_fees`
--

INSERT INTO `entrance_fees` (`id`, `exam_name`, `exam_fee`, `created_at`, `updated_at`) VALUES
(1, 'LL.B. 3 Years', '1', '2023-05-18 04:28:31', '2023-05-18 04:28:31'),
(2, 'B.A. LL.B. (Honours) 5 Years', '1', '2023-05-18 04:28:39', '2023-05-18 04:28:39');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `term` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `attendance_required` varchar(255) DEFAULT NULL,
  `is_back_paper` tinyint(1) DEFAULT 0,
  `date` date DEFAULT NULL,
  `form_start_date` date DEFAULT NULL,
  `form_last_date` date DEFAULT NULL,
  `form_fee` double(8,2) DEFAULT NULL,
  `late_fee` double(8,2) DEFAULT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `semester_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `point` varchar(255) DEFAULT NULL,
  `mark_from` varchar(255) DEFAULT NULL,
  `mark_upto` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade_categories`
--

CREATE TABLE `grade_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `mark` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(27, '2014_10_12_000000_create_users_table', 1),
(28, '2023_03_26_062230_create_countries_table', 1),
(29, '2023_03_26_062519_create_states_table', 1),
(30, '2023_03_26_062713_create_cities_table', 1),
(31, '2023_03_26_204648_create_roles_table', 1),
(32, '2023_03_26_205548_create_courses_table', 1),
(33, '2023_03_26_210326_create_semesters_table', 1),
(34, '2023_03_26_210754_create_subjects_table', 1),
(35, '2023_03_27_131454_create_college_profiles_table', 1),
(36, '2023_03_27_184112_create_college_courses_table', 1),
(37, '2023_04_01_001729_create_student_profiles_table', 1),
(38, '2023_04_01_002015_create_student_profile_addresses_table', 1),
(39, '2023_04_03_123928_create_teacher_profiles_table', 1),
(40, '2023_04_04_215711_create_student_attendances_table', 1),
(41, '2023_04_07_191112_create_exams_table', 2),
(42, '2023_04_09_213243_add_forced_allow_exam_column_to_student_attendances', 3),
(43, '2023_04_09_231810_add_phone_field_to_teacher_profiles', 3),
(44, '2023_04_17_124254_create_grade_categories_table', 4),
(45, '2023_04_17_124308_create_grades_table', 4),
(46, '2023_04_25_054555_create_police_stations_table', 4),
(47, '2023_04_27_202930_create_student_academic_qualifications_table', 4),
(48, '2023_04_27_212013_add_fields_to_student_profile_addresses', 4),
(49, '2023_04_27_213518_add_fields_to_student_profiles', 4),
(50, '2023_04_28_040730_create_document_categories_table', 4),
(51, '2023_04_28_045201_create_student_documents_table', 4),
(52, '2023_04_30_203804_add_police_station_column_to_student_profile_addresses', 4),
(53, '2023_05_03_220601_add_required_field_in_document_categories', 4),
(54, '2023_05_05_210024_add_step_column_to_users', 4),
(55, '2023_05_09_195951_create_payment_histories_table', 5),
(56, '2023_05_10_075301_create_entrance_fees_table', 5),
(57, '2023_05_10_081152_add_entrance_fee_id_column_to_users', 5);

-- --------------------------------------------------------

--
-- Table structure for table `payment_histories`
--

CREATE TABLE `payment_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `token_id` longtext DEFAULT NULL,
  `txn_init_final` longtext DEFAULT NULL,
  `track_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `police_stations`
--

CREATE TABLE `police_stations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'College', NULL, NULL),
(3, 'Student', '2023-08-05 20:30:55', '2023-08-05 20:30:55'),
(4, 'Teacher', '2023-08-07 11:43:55', '2023-08-07 11:43:55'),
(5, 'Prospect', '2024-04-23 15:28:14', '2024-04-23 15:28:14');

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `name`, `course_id`, `created_at`, `updated_at`) VALUES
(24, 'I', 13, '2024-04-23 10:43:23', '2024-04-23 10:43:23');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'ANDHRA PRADESH', 1, NULL, NULL),
(2, 'ASSAM', 1, NULL, NULL),
(3, 'ARUNACHAL PRADESH', 1, NULL, NULL),
(4, 'BIHAR', 1, NULL, NULL),
(5, 'GUJRAT', 1, NULL, NULL),
(6, 'HARYANA', 1, NULL, NULL),
(7, 'HIMACHAL PRADESH', 1, NULL, NULL),
(8, 'JAMMU & KASHMIR', 1, NULL, NULL),
(9, 'KARNATAKA', 1, NULL, NULL),
(10, 'KERALA', 1, NULL, NULL),
(11, 'MADHYA PRADESH', 1, NULL, NULL),
(12, 'MAHARASHTRA', 1, NULL, NULL),
(13, 'MANIPUR', 1, NULL, NULL),
(14, 'MEGHALAYA', 1, NULL, NULL),
(15, 'MIZORAM', 1, NULL, NULL),
(16, 'NAGALAND', 1, NULL, NULL),
(17, 'ORISSA', 1, NULL, NULL),
(18, 'PUNJAB', 1, NULL, NULL),
(19, 'RAJASTHAN', 1, NULL, NULL),
(20, 'SIKKIM', 1, NULL, NULL),
(21, 'TAMIL NADU', 1, NULL, NULL),
(22, 'TRIPURA', 1, NULL, NULL),
(23, 'UTTAR PRADESH', 1, NULL, NULL),
(24, 'WEST BENGAL', 1, NULL, NULL),
(25, 'DELHI', 1, NULL, NULL),
(26, 'GOA', 1, NULL, NULL),
(27, 'PONDICHERY', 1, NULL, NULL),
(28, 'LAKSHDWEEP', 1, NULL, NULL),
(29, 'DAMAN & DIU', 1, NULL, NULL),
(30, 'DADRA & NAGAR', 1, NULL, NULL),
(31, 'CHANDIGARH', 1, NULL, NULL),
(32, 'ANDAMAN & NICOBAR', 1, NULL, NULL),
(33, 'UTTARANCHAL', 1, NULL, NULL),
(34, 'JHARKHAND', 1, NULL, NULL),
(35, 'CHHATTISGARH', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_academic_qualifications`
--

CREATE TABLE `student_academic_qualifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_of_exam` varchar(255) DEFAULT NULL,
  `name_of_board` varchar(255) DEFAULT NULL,
  `attended_school` varchar(255) DEFAULT NULL,
  `passing_year` varchar(255) DEFAULT NULL,
  `total_marks` varchar(255) DEFAULT NULL,
  `marks` varchar(255) DEFAULT NULL,
  `percentage` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_academic_qualifications`
--

INSERT INTO `student_academic_qualifications` (`id`, `name_of_exam`, `name_of_board`, `attended_school`, `passing_year`, `total_marks`, `marks`, `percentage`, `user_id`, `created_at`, `updated_at`) VALUES
(10, '+2', 'CHSE', 'KKL', '2003', '500', '300', '60', 742, '2024-04-25 05:49:59', '2024-04-25 05:49:59'),
(11, '+3', 'CHSE', 'KKL', '2003', '600', '200', '60', 742, '2024-04-25 05:49:59', '2024-04-25 05:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `student_attendances`
--

CREATE TABLE `student_attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `month` varchar(255) DEFAULT NULL,
  `total_days` int(11) DEFAULT NULL,
  `attended_days` int(11) DEFAULT NULL,
  `college_id` bigint(20) UNSIGNED DEFAULT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `semester_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `teacher_id` bigint(20) UNSIGNED DEFAULT NULL,
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `forced_allow_exam` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_documents`
--

CREATE TABLE `student_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_profiles`
--

CREATE TABLE `student_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `fathers_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `enrollment_year` varchar(255) DEFAULT NULL,
  `roll_number` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `semester_id` bigint(20) UNSIGNED DEFAULT NULL,
  `college_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `mother_first_name` varchar(255) DEFAULT NULL,
  `mother_middle_name` varchar(255) DEFAULT NULL,
  `mother_last_name` varchar(255) DEFAULT NULL,
  `father_first_name` varchar(255) DEFAULT NULL,
  `father_middle_name` varchar(255) DEFAULT NULL,
  `father_last_name` varchar(255) DEFAULT NULL,
  `guardian_first_name` varchar(255) DEFAULT NULL,
  `guardian_middle_name` varchar(255) DEFAULT NULL,
  `guardian_last_name` varchar(255) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `alternative_phone` varchar(255) DEFAULT NULL,
  `caste` varchar(255) DEFAULT NULL,
  `aadhar_no` varchar(255) DEFAULT NULL,
  `security_question` varchar(255) DEFAULT NULL,
  `persons_with_disability` varchar(255) DEFAULT '0',
  `ex_service_man` varchar(255) DEFAULT '0',
  `religion` varchar(255) DEFAULT NULL,
  `other_nationality_1` varchar(255) DEFAULT NULL,
  `other_nationality_2` varchar(255) DEFAULT NULL,
  `mother_tongue` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_profiles`
--

INSERT INTO `student_profiles` (`id`, `phone`, `fathers_name`, `mother_name`, `blood_group`, `date_of_birth`, `gender`, `nationality`, `enrollment_year`, `roll_number`, `user_id`, `course_id`, `semester_id`, `college_id`, `created_at`, `updated_at`, `first_name`, `middle_name`, `last_name`, `mother_first_name`, `mother_middle_name`, `mother_last_name`, `father_first_name`, `father_middle_name`, `father_last_name`, `guardian_first_name`, `guardian_middle_name`, `guardian_last_name`, `day`, `month`, `year`, `alternative_phone`, `caste`, `aadhar_no`, `security_question`, `persons_with_disability`, `ex_service_man`, `religion`, `other_nationality_1`, `other_nationality_2`, `mother_tongue`) VALUES
(691, '7008124707', NULL, NULL, NULL, NULL, 'Male', 'Indian', NULL, NULL, 742, NULL, NULL, NULL, '2024-04-25 05:49:59', '2024-04-25 05:49:59', 'Debendra', 'ku', 'Sahoo', 'S', NULL, 'a', 'PK', NULL, 's', 'aaa', 'aaa', 'aaa', '1', '3', '1992', '7666666', 'General', '123443211234', NULL, '1', '1', 'Hindu', NULL, NULL, 'odia');

-- --------------------------------------------------------

--
-- Table structure for table `student_profile_addresses`
--

CREATE TABLE `student_profile_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  `pin` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `state_id` bigint(20) UNSIGNED DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `student_profile_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `premise_name` varchar(255) DEFAULT NULL,
  `plot_no` varchar(255) DEFAULT NULL,
  `locality` varchar(255) DEFAULT NULL,
  `sub_locality` varchar(255) DEFAULT NULL,
  `village` varchar(255) DEFAULT NULL,
  `post_office` varchar(255) DEFAULT NULL,
  `police_station_id` bigint(20) UNSIGNED DEFAULT NULL,
  `police_station` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_profile_addresses`
--

INSERT INTO `student_profile_addresses` (`id`, `landmark`, `address`, `town`, `pin`, `type`, `country_id`, `state_id`, `city_id`, `user_id`, `student_profile_id`, `created_at`, `updated_at`, `premise_name`, `plot_no`, `locality`, `sub_locality`, `village`, `post_office`, `police_station_id`, `police_station`) VALUES
(1355, 'mrf', NULL, NULL, '751003', 'Temparory', 1, 1, NULL, 742, 691, '2024-04-25 05:49:59', '2024-04-25 05:49:59', '325', '325', 'baramunda', 'bb', 'vlg', 'po', NULL, 'pol'),
(1356, 'mrf', NULL, NULL, '751003', 'Permenant', 1, 1, NULL, 742, 691, '2024-04-25 05:49:59', '2024-04-25 05:49:59', '325', '325', 'baramunda', 'bb', 'vlg', 'po', NULL, 'pol');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `semester_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `code`, `type`, `course_id`, `semester_id`, `created_at`, `updated_at`) VALUES
(6, 'English', 'EN-01', 'Theory', 13, 24, '2024-04-23 10:43:46', '2024-04-23 10:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_profiles`
--

CREATE TABLE `teacher_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `college_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_profiles`
--

INSERT INTO `teacher_profiles` (`id`, `user_id`, `college_id`, `created_at`, `updated_at`, `phone`) VALUES
(3, 741, 739, '2024-04-24 07:37:37', '2024-04-24 07:37:37', '7008124707');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_verified` varchar(255) NOT NULL DEFAULT '0',
  `is_active` varchar(255) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `steps` int(11) DEFAULT 1,
  `entrance_fee_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `image`, `is_verified`, `is_active`, `remember_token`, `created_at`, `updated_at`, `steps`, `entrance_fee_id`) VALUES
(1, 'Admin', 'admin@mail.com', NULL, '$2y$10$SqtejkgRFXJMh6CB9snIUuotHqO3dMr5kjUjrFrbO9KzzLpuxT69i', 1, '/uploaded_images/profiles/191681005001.jfif', '0', '0', NULL, '2023-04-05 11:28:54', '2023-04-05 11:28:54', 1, NULL),
(739, 'SRDC Pvt Ltd', 'college@mail.com', NULL, '$2y$10$y.AwvyXECWIGv7mFt/0KSOAVNYqp8YAfcErOt89HqdMd0zHRVu/Gu', 2, '/uploaded_images/profiles/571713940659.png', '1', '1', NULL, '2024-04-24 06:37:39', '2024-04-24 06:38:10', 1, NULL),
(741, 'Debendra Kumar Sahoo', 'debendra@srdcindia.co.in', NULL, '$2y$10$JXJZ.aMqg2UI76eUL9VTfuez9iSadIkXuL8uNgjjlTNEWWjddHSgS', 4, '/uploaded_images/profiles/571713944257.jpg', '1', '1', NULL, '2024-04-24 07:37:37', '2024-04-24 07:37:54', 1, NULL),
(742, 'Debendra Kumar Sahoo', 'debendraster@gmail.com', NULL, '$2y$10$tiJ8BwAr3Xk4/aNHpkXpfeIKqTxBIoM20QGAiGJ2KCqLLIbVp2PBu', 3, NULL, '1', '1', NULL, '2024-04-25 05:45:09', '2024-04-25 06:01:52', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_state_id_foreign` (`state_id`);

--
-- Indexes for table `college_courses`
--
ALTER TABLE `college_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `college_courses_user_id_foreign` (`user_id`),
  ADD KEY `college_courses_college_profile_id_foreign` (`college_profile_id`),
  ADD KEY `college_courses_course_id_foreign` (`course_id`);

--
-- Indexes for table `college_profiles`
--
ALTER TABLE `college_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `college_profiles_state_id_foreign` (`state_id`),
  ADD KEY `college_profiles_city_id_foreign` (`city_id`),
  ADD KEY `college_profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_categories`
--
ALTER TABLE `document_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entrance_fees`
--
ALTER TABLE `entrance_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exams_semester_id_foreign` (`semester_id`),
  ADD KEY `exams_subject_id_foreign` (`subject_id`),
  ADD KEY `exams_course_id_foreign` (`course_id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grades_category_id_foreign` (`category_id`);

--
-- Indexes for table `grade_categories`
--
ALTER TABLE `grade_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_histories`
--
ALTER TABLE `payment_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_histories_user_id_foreign` (`user_id`);

--
-- Indexes for table `police_stations`
--
ALTER TABLE `police_stations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `semesters_course_id_foreign` (`course_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_country_id_foreign` (`country_id`);

--
-- Indexes for table `student_academic_qualifications`
--
ALTER TABLE `student_academic_qualifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_academic_qualifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `student_attendances`
--
ALTER TABLE `student_attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_attendances_college_id_foreign` (`college_id`),
  ADD KEY `student_attendances_course_id_foreign` (`course_id`),
  ADD KEY `student_attendances_semester_id_foreign` (`semester_id`),
  ADD KEY `student_attendances_subject_id_foreign` (`subject_id`),
  ADD KEY `student_attendances_teacher_id_foreign` (`teacher_id`),
  ADD KEY `student_attendances_student_id_foreign` (`student_id`);

--
-- Indexes for table `student_documents`
--
ALTER TABLE `student_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_documents_document_category_id_foreign` (`document_category_id`),
  ADD KEY `student_documents_user_id_foreign` (`user_id`);

--
-- Indexes for table `student_profiles`
--
ALTER TABLE `student_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_profiles_user_id_foreign` (`user_id`),
  ADD KEY `student_profiles_course_id_foreign` (`course_id`),
  ADD KEY `student_profiles_semester_id_foreign` (`semester_id`),
  ADD KEY `student_profiles_college_id_foreign` (`college_id`);

--
-- Indexes for table `student_profile_addresses`
--
ALTER TABLE `student_profile_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_profile_addresses_country_id_foreign` (`country_id`),
  ADD KEY `student_profile_addresses_state_id_foreign` (`state_id`),
  ADD KEY `student_profile_addresses_city_id_foreign` (`city_id`),
  ADD KEY `student_profile_addresses_user_id_foreign` (`user_id`),
  ADD KEY `student_profile_addresses_student_profile_id_foreign` (`student_profile_id`),
  ADD KEY `student_profile_addresses_police_station_id_foreign` (`police_station_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjects_course_id_foreign` (`course_id`),
  ADD KEY `subjects_semester_id_foreign` (`semester_id`);

--
-- Indexes for table `teacher_profiles`
--
ALTER TABLE `teacher_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_profiles_user_id_foreign` (`user_id`),
  ADD KEY `teacher_profiles_college_id_foreign` (`college_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_entrance_fee_id_foreign` (`entrance_fee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=614;

--
-- AUTO_INCREMENT for table `college_courses`
--
ALTER TABLE `college_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `college_profiles`
--
ALTER TABLE `college_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `document_categories`
--
ALTER TABLE `document_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `entrance_fees`
--
ALTER TABLE `entrance_fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grade_categories`
--
ALTER TABLE `grade_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `payment_histories`
--
ALTER TABLE `payment_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `police_stations`
--
ALTER TABLE `police_stations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `student_academic_qualifications`
--
ALTER TABLE `student_academic_qualifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student_attendances`
--
ALTER TABLE `student_attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student_documents`
--
ALTER TABLE `student_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_profiles`
--
ALTER TABLE `student_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=692;

--
-- AUTO_INCREMENT for table `student_profile_addresses`
--
ALTER TABLE `student_profile_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1357;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teacher_profiles`
--
ALTER TABLE `teacher_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=743;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `college_courses`
--
ALTER TABLE `college_courses`
  ADD CONSTRAINT `college_courses_college_profile_id_foreign` FOREIGN KEY (`college_profile_id`) REFERENCES `college_profiles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `college_courses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `college_courses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `college_profiles`
--
ALTER TABLE `college_profiles`
  ADD CONSTRAINT `college_profiles_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `college_profiles_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `college_profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `exams_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `college_courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exams_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exams_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `grade_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payment_histories`
--
ALTER TABLE `payment_histories`
  ADD CONSTRAINT `payment_histories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `semesters`
--
ALTER TABLE `semesters`
  ADD CONSTRAINT `semesters_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_academic_qualifications`
--
ALTER TABLE `student_academic_qualifications`
  ADD CONSTRAINT `student_academic_qualifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_attendances`
--
ALTER TABLE `student_attendances`
  ADD CONSTRAINT `student_attendances_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_attendances_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `college_courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_attendances_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_attendances_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_attendances_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_attendances_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_documents`
--
ALTER TABLE `student_documents`
  ADD CONSTRAINT `student_documents_document_category_id_foreign` FOREIGN KEY (`document_category_id`) REFERENCES `document_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_documents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_profiles`
--
ALTER TABLE `student_profiles`
  ADD CONSTRAINT `student_profiles_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_profiles_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `college_courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_profiles_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_profile_addresses`
--
ALTER TABLE `student_profile_addresses`
  ADD CONSTRAINT `student_profile_addresses_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_profile_addresses_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_profile_addresses_police_station_id_foreign` FOREIGN KEY (`police_station_id`) REFERENCES `police_stations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_profile_addresses_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_profile_addresses_student_profile_id_foreign` FOREIGN KEY (`student_profile_id`) REFERENCES `student_profiles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_profile_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subjects_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teacher_profiles`
--
ALTER TABLE `teacher_profiles`
  ADD CONSTRAINT `teacher_profiles_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `teacher_profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_entrance_fee_id_foreign` FOREIGN KEY (`entrance_fee_id`) REFERENCES `entrance_fees` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
