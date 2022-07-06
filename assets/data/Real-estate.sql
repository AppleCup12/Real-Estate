-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 04:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real-estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(5) NOT NULL,
  `admin_img` varchar(200) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `ad_name` varchar(200) NOT NULL,
  `ad_lname` varchar(200) NOT NULL,
  `admin_date` varchar(200) NOT NULL,
  `admin_gender` varchar(200) NOT NULL,
  `admin_tel` varchar(200) NOT NULL,
  `admin_status` varchar(200) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_password` varchar(200) NOT NULL,
  `admin_home` varchar(200) NOT NULL,
  `admin_distric` varchar(200) NOT NULL,
  `admin_village` varchar(200) NOT NULL,
  `admin_uid` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_img`, `admin_name`, `ad_name`, `ad_lname`, `admin_date`, `admin_gender`, `admin_tel`, `admin_status`, `admin_email`, `admin_password`, `admin_home`, `admin_distric`, `admin_village`, `admin_uid`) VALUES
(1, '1214402.jpg', 'Admin-01', 'ທ້າວ ອັກຄະສັນ', 'ພົມສັງຂານ', '2001-04-28', 'ຊາຍ', '2095188702', 'Admin', 'peun955@gmail.com', '123', 'ນາທ່ອນ', 'ນາຊາຍທອງ', 'ນະຄອນຫຼວງ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ad_money_setting`
--

CREATE TABLE `ad_money_setting` (
  `ad_sm_id` int(5) NOT NULL,
  `ad_sm` varchar(200) NOT NULL,
  `ad_sm_uid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ad_money_setting`
--

INSERT INTO `ad_money_setting` (`ad_sm_id`, `ad_sm`, `ad_sm_uid`) VALUES
(8, '140000', 'List_money_CSN'),
(9, '150000', 'List_money_CSN'),
(10, '160000', 'List_money_CSN'),
(11, '170000', 'List_money_CSN'),
(12, '180000', 'List_money_CSN'),
(15, '26000', 'List_money'),
(16, '32000', 'List_money'),
(17, '15000', 'List_money'),
(18, '18000', 'List_money'),
(19, '24000', 'List_money'),
(22, '511', 'List_money_THB'),
(23, '530', 'List_money_THB'),
(24, '481', 'List_money_THB'),
(25, '457', 'List_money_THB'),
(26, '441', 'List_money_THB'),
(27, '438', 'List_money_THB'),
(28, '150000', 'List_money_CSN'),
(29, '18000', 'List_money'),
(30, '481', 'money_real_time_THB'),
(31, '1000000', 'money_real_time_CSN'),
(32, '24000', 'money_real_time');

-- --------------------------------------------------------

--
-- Table structure for table `ad_typepost`
--

CREATE TABLE `ad_typepost` (
  `AM_type_id` int(5) NOT NULL,
  `AM_img` varchar(200) NOT NULL,
  `AM_type` varchar(200) NOT NULL,
  `AM_uid_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ad_typepost`
--

INSERT INTO `ad_typepost` (`AM_type_id`, `AM_img`, `AM_type`, `AM_uid_type`) VALUES
(6, 'nastuh-abootalebi-yWwob8kwOCk-unsplash.jpg', 'ອັອບຟິດ', 'one-type'),
(8, 'marcio-sousa-1XV9IYxuins-unsplash.jpg', 'ບ້ານພັກຕາກອາກາດ', 'two-type'),
(9, 'francesca-tosolini-tHkJAMcO3QE-unsplash.jpg', 'ອະພາດເມັ້ນ', 'three-type'),
(10, 'andy-holmes-f6eWKcd8_dA-unsplash.jpg', 'ບ້ານດ່ຽວ', 'flow-type'),
(11, 'mark-chaves-WQysERfYbog-unsplash.jpg', 'ຣີສອດ', 'fly-type'),
(12, 'krists-luhaers-YhC216tAYAg-unsplash.jpg', 'ຫ້ອງ Studio', 'zero-type'),
(16, 'gate-wat-pha-that-luang-vientiane-laos.jpg', 'ນະຄອນຫຼວງ', 'one_dis'),
(17, 'golden-pagoda-pagoda-wat-pha-that-luang-vientiane.jpg', 'C-name', 'two_dis'),
(20, 'gate-wat-pha-that-luang-vientiane-laos.jpg', 'ວຽງຈັນ', 'three_dis'),
(21, 'golden-pagoda-pagoda-wat-pha-that-luang-vientiane.jpg', 'C-name4', 'flow_dis');

-- --------------------------------------------------------

--
-- Table structure for table `ad_typetext`
--

CREATE TABLE `ad_typetext` (
  `Ad_text_id` int(5) NOT NULL,
  `ad_text` varchar(100) NOT NULL,
  `ad_text_are` varchar(200) NOT NULL,
  `ad_uid_text` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ad_typetext`
--

INSERT INTO `ad_typetext` (`Ad_text_id`, `ad_text`, `ad_text_are`, `ad_uid_text`) VALUES
(2, 'ລາຍການໜ້າສົນໃຈ', 'ຂໍ້ມູນໂດຍປະມານ ທ່ານສາມາຄົ່ນຫາລາຍການທີ່ໜ້າສົນໃຈໄດ້ໃນນະທີ່ເລືອກເລີຍ', 'Bottom'),
(4, 'ຂໍ້ມູນແຂວງ', 'ໜ້າສົນໃຈ', 'about-distr'),
(5, 'ປະເພດລາຍການໜ້າສົນໃຈ', 'ເຮົາໃດ້ຄົ້ນຫາທີ່ໜ້າສົນໃຈແກ່ທ່ານ ທ່ານຍັງສາມາດຄົ່ນຕາມສະໄຕຣ໌ຂອງທ່ານໄດ້ເລີຍທີ່ນີ້ ເລືອກເລີຍ', 'Top');

-- --------------------------------------------------------

--
-- Table structure for table `already_paid`
--

CREATE TABLE `already_paid` (
  `ap_id` int(5) NOT NULL,
  `ap_money` varchar(200) NOT NULL,
  `ap_money_KIP` varchar(200) NOT NULL,
  `ap_uid` varchar(200) NOT NULL,
  `user_uid` int(1) NOT NULL,
  `ap_curdate` varchar(20) NOT NULL,
  `ap_cirtime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `already_paid`
--

INSERT INTO `already_paid` (`ap_id`, `ap_money`, `ap_money_KIP`, `ap_uid`, `user_uid`, `ap_curdate`, `ap_cirtime`) VALUES
(2, '509', '256000', 'already_paid', 4, '2022-06-25', '16:22:21'),
(3, '509', '256000', 'already_paid', 4, '2022-06-25', '16:34:00'),
(5, '509', '256000', 'already_paid', 4, '2022-06-25', '17:25:39'),
(6, '527', '265000\r\n', 'already_paid', 4, '2022-06-25', '17:57:47'),
(7, '994', '500000', 'already_paid', 4, '2022-06-25', '18:51:24'),
(8, '994', '560000', 'already_paid', 4, '2022-06-25', '18:51:54'),
(9, '994', '500000', 'already_paid', 4, '2022-06-25', '18:53:54'),
(10, '140', '70300', 'already_paid', 4, '2022-06-25', '18:54:26'),
(11, '994', '500000', 'already_paid', 4, '2022-06-25', '18:59:35'),
(14, '998', '502000', 'already_paid', 4, '2022-06-25', '19:48:28'),
(15, '998', '480000', 'already_paid', 6, '2022-06-25', '23:59:28'),
(16, '848', '480000', 'already_paid', 6, '2022-06-26', '00:07:18'),
(17, '998', '72000', 'already_paid', 6, '2022-06-26', '00:12:27'),
(18, '936', '480000', 'already_paid', 6, '2022-06-26', '00:14:47'),
(19, '998', '7000', 'already_paid', 6, '2022-06-26', '00:25:30'),
(20, '998', '7000', 'already_paid', 6, '2022-06-26', '00:26:21'),
(21, '998', '70000', 'already_paid', 6, '2022-06-26', '00:27:20'),
(22, '1500', '7000', 'already_paid', 6, '2022-06-26', '00:29:44'),
(23, '10400', '50000', 'already_paid', 6, '2022-06-26', '00:33:46'),
(24, '146', '70000', 'already_paid', 6, '2022-06-26', '00:34:51'),
(25, '998', '480000', 'already_paid_time', 6, '2022-06-26', '00:35:42'),
(26, '998', '480000', 'already_paid', 4, '2022-06-26', '19:52:24'),
(27, '60', '29000', 'already_paid', 4, '2022-06-27', '01:28:45'),
(28, '998', '480000', 'already_paid', 4, '2022-06-27', '19:04:59'),
(29, '170', '82000', 'already_paid', 4, '2022-06-27', '19:05:24'),
(30, '998', '480000', 'already_paid', 4, '2022-06-27', '23:06:17'),
(31, '998', '480000', 'already_paid', 4, '2022-06-28', '01:54:37'),
(32, '761', '366010', 'already_paid', 4, '2022-06-28', '01:55:45'),
(33, '443', '213000', 'already_paid_time', 4, '2022-06-30', '22:19:20');

-- --------------------------------------------------------

--
-- Table structure for table `am-dcm-category`
--

CREATE TABLE `am-dcm-category` (
  `dcm_category_id` int(5) NOT NULL,
  `dcm_category` varchar(200) NOT NULL,
  `dcm_category_uid` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `am-dcm-category`
--

INSERT INTO `am-dcm-category` (`dcm_category_id`, `dcm_category`, `dcm_category_uid`) VALUES
(1, 'ຄອນໂດ', 1),
(2, 'ບ້ານດ່ຽວ', 1),
(3, 'ຣີສອດ', 1),
(4, 'ທີ່ດີນເປົ່າ', 1),
(10, 'ອະພາດເມັ້ນ', 1),
(11, 'ບ້ານພັກຕາກອາກາດ', 1),
(12, 'ອັອບຟິດ', 1),
(13, 'ຫ້ອງ Studio', 1);

-- --------------------------------------------------------

--
-- Table structure for table `am-dcm-distric`
--

CREATE TABLE `am-dcm-distric` (
  `dcm_distric_id` int(5) NOT NULL,
  `dcm_distric` varchar(200) NOT NULL,
  `dcm_distric_uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `am-dcm-distric`
--

INSERT INTO `am-dcm-distric` (`dcm_distric_id`, `dcm_distric`, `dcm_distric_uid`) VALUES
(16, 'C-name', 1),
(17, 'ນະຄອນຫຼວງ', 1),
(18, 'ວຽງຈັນ', 1),
(19, 'C-name4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `am-dcm-home`
--

CREATE TABLE `am-dcm-home` (
  `dcm_home_id` int(5) NOT NULL,
  `dcm_home` varchar(200) NOT NULL,
  `dcm_home_uid` int(1) NOT NULL,
  `village_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `am-dcm-home`
--

INSERT INTO `am-dcm-home` (`dcm_home_id`, `dcm_home`, `dcm_home_uid`, `village_id`) VALUES
(40, 'H-name1', 1, 43),
(41, 'ນາທ່ອນ', 1, 44),
(42, 'ດົງໂດກ', 1, 45),
(43, 'ດົງນາໂຊກ', 1, 45),
(44, 'ໜ່ອງພະຍາ', 1, 45),
(45, 'ຕານມີໄຊ', 1, 45),
(46, 'ນາຂ່າ', 1, 44),
(47, 'ຫົວຂົ່ວ', 1, 44),
(48, 'ອິໄລ ເໜືອ', 1, 44),
(49, 'ອິໄລ ໃຕ້', 1, 44),
(50, 'ນ້ຳເຢັນ ເໜືອ', 1, 44),
(51, 'ນ້ຳເຢັນ ໃຕ້', 1, 44),
(52, 'ນາງຢາງ', 1, 44),
(53, 'ສົງເປືອຍ', 1, 44),
(54, 'ກາງແສ່ນ', 1, 44),
(55, 'ນ້ຳກ້ຽງ', 1, 44),
(56, 'ນາຊາຍ', 1, 44);

-- --------------------------------------------------------

--
-- Table structure for table `am-dcm-village`
--

CREATE TABLE `am-dcm-village` (
  `dcm_village_id` int(5) NOT NULL,
  `dcm_village` varchar(200) NOT NULL,
  `dcm_village_uid` int(1) NOT NULL,
  `distric_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `am-dcm-village`
--

INSERT INTO `am-dcm-village` (`dcm_village_id`, `dcm_village`, `dcm_village_uid`, `distric_id`) VALUES
(43, 'V-name3', 1, 16),
(44, 'ນາຊາຍທອງ', 1, 17),
(45, 'ໄຊທານີ', 1, 17),
(46, 'ໄຊເສດຖາ', 1, 17);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `cm_id` int(5) NOT NULL,
  `cm_name` varchar(200) NOT NULL,
  `cm_uid` int(1) NOT NULL,
  `user_uid` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`cm_id`, `cm_name`, `cm_uid`, `user_uid`) VALUES
(2, 'ດີ', 1, 0),
(3, 'ດີຍ່ຽມ', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `footer_admin`
--

CREATE TABLE `footer_admin` (
  `fm_id` int(5) NOT NULL,
  `link_fackbook` varchar(200) NOT NULL,
  `link_twitter` varchar(200) NOT NULL,
  `link_yiutube` varchar(200) NOT NULL,
  `link_instagram` varchar(200) NOT NULL,
  `link_google` varchar(200) NOT NULL,
  `about` varchar(200) NOT NULL,
  `about_us` int(1) NOT NULL,
  `fm_uid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `footer_admin`
--

INSERT INTO `footer_admin` (`fm_id`, `link_fackbook`, `link_twitter`, `link_yiutube`, `link_instagram`, `link_google`, `about`, `about_us`, `fm_uid`) VALUES
(5, '#', '#', '#', '#', '#', '#', 1, 'about_us'),
(12, 'https://www.facebook.com/profile.php?id=100012618940519', '', 'https://www.youtube.com/channel/UChpvuKk_HyJWGayjsvB9oYw', '', 'http://localhost/Real-Estate/', 'About', 0, 'about');

-- --------------------------------------------------------

--
-- Table structure for table `message_real`
--

CREATE TABLE `message_real` (
  `ms_id` int(5) NOT NULL,
  `msaage` varchar(200) NOT NULL,
  `real_uid` int(1) NOT NULL,
  `user_uid` int(11) NOT NULL,
  `ms_uid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message_real`
--

INSERT INTO `message_real` (`ms_id`, `msaage`, `real_uid`, `user_uid`, `ms_uid`) VALUES
(1, 'ມີການເຄືອນໄຫວ່ Tel', 16, 4, 'tel'),
(2, 'ມີການເຄືອນໄຫວ່ Email', 16, 4, 'mail'),
(3, 'ມີການເຄືອນໄຫວ່ Tel', 16, 4, 'tel'),
(4, 'ມີການເຄືອນໄຫວ່ Email', 16, 4, 'mail'),
(5, 'ມີການເຄືອນໄຫວ່ Tel', 9, 4, 'tel'),
(6, 'ມີການເຄືອນໄຫວ່ Email', 9, 4, 'mail'),
(7, 'ມີການເຄືອນໄຫວ່ Email', 9, 4, 'mail'),
(8, 'ມີການເຄືອນໄຫວ່ Tel', 9, 4, 'tel'),
(9, 'ມີການເຄືອນໄຫວ່ Email', 9, 4, 'mail'),
(10, 'ມີການເຄືອນໄຫວ່ Email', 9, 4, 'mail'),
(11, 'ມີການເຄືອນໄຫວ່ Email', 9, 4, 'mail'),
(12, 'ມີການເຄືອນໄຫວ່ Email', 20, 4, 'mail'),
(13, 'ມີການເຄືອນໄຫວ່ Email', 20, 4, 'mail'),
(14, 'ມີການເຄືອນໄຫວ່ Email', 19, 4, 'mail'),
(15, 'ມີການເຄືອນໄຫວ່ Email', 19, 4, 'mail'),
(16, 'ມີການເຄືອນໄຫວ່ Email', 19, 4, 'mail'),
(17, 'ມີການເຄືອນໄຫວ່ Email', 19, 4, 'mail'),
(18, 'ມີການເຄືອນໄຫວ່ Email', 19, 4, 'mail'),
(19, 'ມີການເຄືອນໄຫວ່ Email', 19, 4, 'mail'),
(20, 'ມີການເຄືອນໄຫວ່ Email', 19, 4, 'mail'),
(21, 'ມີການເຄືອນໄຫວ່ Email', 19, 4, 'mail'),
(22, 'ມີການເຄືອນໄຫວ່ Email', 19, 4, 'mail'),
(23, 'ມີການເຄືອນໄຫວ່ Email', 19, 4, 'mail'),
(24, 'ມີການເຄືອນໄຫວ່ Email', 5, 4, 'mail'),
(25, 'ມີການເຄືອນໄຫວ່ Email', 5, 4, 'mail'),
(26, 'ມີການເຄືອນໄຫວ່ Email', 5, 4, 'mail'),
(27, 'ມີການເຄືອນໄຫວ່ Email', 5, 4, 'mail'),
(28, 'ມີການເຄືອນໄຫວ່ Email', 5, 4, 'mail'),
(29, 'ມີການເຄືອນໄຫວ່ Email', 5, 4, 'real_time_mail'),
(30, 'ມີການເຄືອນໄຫວ່ Tel', 5, 4, 'tel'),
(31, 'ມີການເຄືອນໄຫວ່ Tel', 5, 4, 'tel'),
(32, 'ມີການເຄືອນໄຫວ່ Tel', 2, 6, 'real_time_tel');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `new_id` int(5) NOT NULL,
  `new_email` varchar(200) NOT NULL,
  `new_uid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`new_id`, `new_email`, `new_uid`) VALUES
(1, 'peun955@gmail.com', 'Newsletter'),
(2, 'Jiphay7@gmail.com', 'Newsletter');

-- --------------------------------------------------------

--
-- Table structure for table `real-curdate`
--

CREATE TABLE `real-curdate` (
  `cur_id` int(5) NOT NULL,
  `curdate_in` varchar(200) NOT NULL,
  `time_in` varchar(200) NOT NULL,
  `curdate_out` varchar(200) NOT NULL,
  `time_out` varchar(200) NOT NULL,
  `real_uid` int(1) NOT NULL,
  `user_uid` int(5) NOT NULL,
  `curendate` date NOT NULL,
  `curentime` time NOT NULL,
  `payment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `real-curdate`
--

INSERT INTO `real-curdate` (`cur_id`, `curdate_in`, `time_in`, `curdate_out`, `time_out`, `real_uid`, `user_uid`, `curendate`, `curentime`, `payment`) VALUES
(36, '2022-07-01', '00:34', '2022-07-03', '00:00', 19, 4, '2022-07-01', '00:34:21', 'ຍັງບໍ່ມີຂໍ້ມູນເງີນ'),
(37, '2022-07-01', '00:35', '2022-07-03', '00:00', 16, 4, '2022-07-01', '00:34:30', 'ຍັງບໍ່ມີຂໍ້ມູນເງີນ'),
(38, '2022-07-01', '00:35', '2022-07-03', '00:00', 9, 4, '2022-07-01', '00:34:38', 'ຍັງບໍ່ມີຂໍ້ມູນເງີນ');

-- --------------------------------------------------------

--
-- Table structure for table `real-document`
--

CREATE TABLE `real-document` (
  `real_id` int(5) NOT NULL,
  `real_img` varchar(200) NOT NULL,
  `r_radio` varchar(20) NOT NULL,
  `real_type` varchar(200) NOT NULL,
  `real_project` varchar(200) NOT NULL,
  `real_bprice` varchar(2000) NOT NULL,
  `real_currency` varchar(20) NOT NULL,
  `real_distric` varchar(200) NOT NULL,
  `real_village` varchar(200) NOT NULL,
  `real_home` varchar(200) NOT NULL,
  `real_bedroom` varchar(200) NOT NULL,
  `real_bathroom` varchar(200) NOT NULL,
  `real_floor` varchar(200) NOT NULL,
  `real_width` varchar(200) NOT NULL,
  `real_height` varchar(200) NOT NULL,
  `real_checkbox` varchar(200) NOT NULL,
  `real_about_laos` varchar(200) NOT NULL,
  `about_laos` varchar(200) NOT NULL,
  `real_about_english` varchar(200) NOT NULL,
  `about_english` varchar(200) NOT NULL,
  `real_time` varchar(200) NOT NULL,
  `real_tel` varchar(200) NOT NULL,
  `real_uid` int(6) NOT NULL,
  `real_curdate` varchar(100) NOT NULL,
  `user_uid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `real-document`
--

INSERT INTO `real-document` (`real_id`, `real_img`, `r_radio`, `real_type`, `real_project`, `real_bprice`, `real_currency`, `real_distric`, `real_village`, `real_home`, `real_bedroom`, `real_bathroom`, `real_floor`, `real_width`, `real_height`, `real_checkbox`, `real_about_laos`, `about_laos`, `real_about_english`, `about_english`, `real_time`, `real_tel`, `real_uid`, `real_curdate`, `user_uid`) VALUES
(1, 'pexels-pixabay-259588.jpeg', 'ເຊົ່າ', 'ບ້ານດ່ຽວ', '', '350000000', 'LAK', 'ນະຄອນຫຼວງ', 'ໜອງໜ່ຽວ', 'ຕາດມີໄຊ', '4', '2', '2', '45', '40', 'ຕິດຕໍ່ຫາເຮົາ, ', 'ບ້ານຈັດສັນ ຕິດທາງໃຫຍ້', '', '', '', '2022-05-25 02:18:37', '2095188702', 1, '2022-06-28', 6),
(2, 'pexels-pixabay-164558.jpeg', 'ຂາຍ', 'ທີ່ດີນ', '', '3000', 'USD', 'ນະຄອນຫຼວງ', 'ໜອງໜ່ຽວ', 'ຕາດມີໄຊ', '4', '2', '1', '60', '75', 'ຕິດຕໍ່ຫາເຮົາ, ', 'ດີນເປົ່າ ເຮັດສ່ວນ ປູກເຮືອນໄດ້', '', '', '', '2022-05-25 02:30:00', '2095188702', 2, '2022-06-28', 6),
(3, 'pexels-binyamin-mellish-1396122.jpeg', 'ເຊົ່າ', 'ຄອນໂດມິນຽມ', '', '20000000', 'LAK', 'ນະຄອນຫຼວງ', 'ໜອງໜ່ຽວ', 'ຕາດມີໄຊ', '3', '2', '1', '10', '10', 'ຕິດຕໍ່ຫາເຮົາ, ', 'ບ້ານຈັດສັນLaos', '', '', '', '2022-05-25 02:46:37', '2095188702', 2, '2022-06-28', 6),
(5, 'pexels-binyamin-mellish-106399.jpeg', 'ເຊົ່າ', 'ບ້ານດ່ຽວ', '', '345000000', 'LAK', 'ນະຄອນຫຼວງ', 'ໜອງໜ່ຽວ', 'ຕາດມີໄຊ', '4', '3', '1', '10', '10', 'ຕິດຕໍ່ຫາເຮົາ, ', '345345', '', '', '', '2022-05-26 01:23:17', '2095188702', 2, '2022-06-28', 6),
(6, '4638222.png', 'ຂາຍ', 'ບ້ານດ່ຽວ', 'ໂຄງການ', '33500000', '', 'ນະຄອນຫຼວງ', 'ໜອງໜ່ຽວ', 'ຕາດມີໄຊ', '6', '6', '2', '15', '15', 'ຕິດຕໍ່ຫາເຮົາ, ', 'ພີມລາວ', '', '', '', '2022-05-26 02:16:16', '2095188702', 0, '2022-06-07', 6),
(7, 'macos-monterey-2560x1440-wwdc-2021-5k-23424.jpeg', 'ເຊົ່າ', 'ບ້ານດ່ຽວ', '', '4654', '', 'ນະຄອນຫຼວງ', 'ໜອງໜ່ຽວ', 'ຕາດມີໄຊ', '6', '3', '2', '10', '10', 'ຕິດຕໍ່ຫາເຮົາ, ', 'dfgsfdjgldf', '', '', '', '2022-05-26 02:17:33', '', 0, '2022-06-07', 6),
(8, 'IMG20200702113246.jpg', 'ຂາຍ', 'ບ້ານດ່ຽວ', 'ໂຄງການ', '450000', '', 'ນະຄອນຫຼວງ', 'ໜອງໜ່ຽວ', 'ຕາດມີໄຊ', '5', '2', '3', '15', '15', 'ຕິດຕໍ່ຫາເຮົາ, ', 'about laos', '', 'English', '', '2022-05-26 15:07:03', '2095188702', 0, '2022-06-07', 6),
(9, 'pexels-expect-best-323780.jpeg', 'ຂາຍ', 'ຄອນໂດມິນຽມ', '', '125000000', 'LAK', 'C-name', 'V-name3', 'H-name1', '2', '2', '1', '54', '65', 'ຕິດຕໍ່ຫາເຮົາ, ', 'ຄອນໂດ ໜ້າສົນໃຈ', '', '', '', '2022-05-27 02:28:09', '2095188702', 2, '2022-07-01', 4),
(10, 'macos-monterey-2560x1440-dark-wwdc-2021-5k-23425.jpeg', 'ເຊົ່າ', 'ບ້ານດ່ຽວ', '', '40000', '', 'C-name', 'V-name3', 'H-name1', '2', '2', '1', '46', '34', 'ຟິດເນັດ, ຫ້ອງສະມຸດ, ທີ່ຈອດລົດ, ສະໜາມເດັກນ້ອຍ, ສະໜາມເທັນນິດ, ລະບົບໄວ-ໄຟ, ຕິດຕໍ່ຫາເຮົາ, ', 'ບ້ານຈັດສັນLaos min', '', '', '', '2022-06-02 02:14:46', '2095188702', 0, '2022-06-08', 6),
(11, 'pexels-tamil-king-3214064.jpeg', 'ເຊົ່າ', 'ບ້ານພັກຕາກອາກາດ', 'ໂຄງການ', '34000000', 'LAK', 'C-name', 'V-name3', 'H-name1', '3', '2', '1', '220', '120', 'ຕິດຕໍ່ຫາເຮົາ, ', 'ບ້ານຈັດສັນ ຕິດທາງໃຫຍ້', '', '', '', '2022-06-02 17:52:15', '2095188702', 2, '2022-06-15', 1),
(12, 'IMG20200702113246.jpg', 'ຂາຍ', 'ບ້ານດ່ຽວ', '', '300000000', '', 'C-name', 'V-name3', 'H-name1', '4', '4', '1', '230', '220', 'ຕິດຕໍ່ຫາເຮົາ, ', 'ບ້ານຈັດສັນLaos About', '', '', '', '2022-06-08 09:26:19', '2095188702', 0, '', 6),
(13, 'IMG20200702113246.jpg', 'ຂາຍ', 'ບ້ານດ່ຽວ', '', '300000000', '', 'C-name', 'V-name3', 'H-name1', '4', '4', '1', '230', '220', 'ຕິດຕໍ່ຫາເຮົາ, ', 'ບ້ານຈັດສັນLaos About', '', '', '', '2022-06-08 09:26:39', '2095188702', 0, '2022-06-08', 6),
(15, 'pexels-binyamin-mellish-1396122.jpeg', 'ຂາຍ', 'ບ້ານດ່ຽວ', 'C', '560000000', 'LAK', '<text style=', '<text style=', '<text style=', '2', '1', '1', '10', '10', 'ຕິດຕໍ່ຫາເຮົາ, ', 'about - Laos', '', '', '', '2022-06-15 14:25:32', '2095188702', 0, '2022-06-25', 4),
(16, 'roberto-nickson-so3wgJLwDxo-unsplash.jpg', 'ຂາຍ', 'ບ້ານພັກຕາກອາກາດ', '', '550000000', 'LAK', 'C-name', 'V-name3', 'H-name1', '3', '4', '2', '40', '60', 'ຕິດຕໍ່ຫາເຮົາ, ', ' ບ້ານຕາກອາກາດ ຕິດພູເຂົາ', '', '', '', '2022-06-15 14:41:32', '2099432070', 2, '2022-07-01', 4),
(17, 'nastuh-abootalebi-yWwob8kwOCk-unsplash.jpg', 'ຂາຍ', 'ອັອບຟິດ', '', '2500', 'USD', 'C-name', 'V-name3', 'H-name1', '5', '2', '2', '30', '60', 'ຕິດຕໍ່ຫາເຮົາ, ', 'office', '', '', '', '2022-06-15 15:12:39', '2095188702', 0, '2022-06-25', 4),
(18, 'golden-pagoda-pagoda-wat-pha-that-luang-vientiane.jpg', 'ຂາຍ', 'ຫ້ອງ Studio', 'ໂຄງການ', '350000000', 'LAK', '<!--  -->\n<style>\n @import url(\'https://fonts.googleapis.com/css2?family=Noto+Sans+Lao:wght@500&display=swap\');\n  *{\n    font-family: \'Noto Sans Lao\', sans-serif;\n  }\n</style>\n\nນະຄອນຫຼວງ', '<!--  -->\r\n<style>\r\n @import url(\'https://fonts.googleapis.com/css2?family=Noto+Sans+Lao:wght@500&display=swap\');\r\n  *{\r\n    font-family: \'Noto Sans Lao\', sans-serif;\r\n  }\r\n</style>\r\n\r\nໄຊທານີ', '<!--  -->\r\n<style>\r\n @import url(\'https://fonts.googleapis.com/css2?family=Noto+Sans+Lao:wght@500&display=swap\');\r\n  *{\r\n    font-family: \'Noto Sans Lao\', sans-serif;\r\n  }\r\n</style>\r\n\r\nດົງໂດກ', '5', '4', '2', '60', '70', 'ລະບົບຮັກສາຄວາມປອດໄພ, ຕິດຕໍ່ຫາເຮົາ, ', 'ບ້ານຈັດສັນLaos', '', '', '', '2022-06-26 04:38:08', '2095188702', 0, '', 4),
(19, '2051617.jpg', 'ເຊົ່າ', 'ຫ້ອງ Studio', 'ໂຄງການ', '350000000', 'LAK', 'ນະຄອນຫຼວງ', 'ນາຊາຍທອງ', 'ນ້ຳເຢັນ ເໜືອ', '5', '3', '2', '70', '70', 'ຕິດຕໍ່ຫາເຮົາ, ', 'ບ້ານຈັດສັນLaos', '', '', '', '2022-06-26 05:02:47', '2095188702', 2, '2022-07-01', 4),
(20, '1214402.jpg', 'ຂາຍ', 'ອັອບຟິດ', 'ໂຄງການ', '125000000', 'LAK', 'C-name', 'V-name3', 'H-name1', '5', '5', '5', '50', '50', 'ຕິດຕໍ່ຫາເຮົາ, ', 'ບ້ານຈັດສັນLaos', '', '', '', '2022-06-26 05:06:55', '2095188702', 1, '2022-07-01', 4),
(21, '2051617.jpg', 'ເຊົ່າ', 'ບ້ານດ່ຽວ', '', '33500000', 'LAK', 'ນະຄອນຫຼວງ', 'ນາຊາຍທອງ', 'ນາຂ່າ', '4', '4', '4', '40', '40', 'ສ່ວນນ້ອຍ, ລະບົບຮັກສາຄວາມປອດໄພ, ຕິດຕໍ່ຫາເຮົາ, ', 'ບ້ານຈັດສັນLaos', '', '', '', '2022-06-27 23:41:20', '2095188702', 1, '2022-06-28', 10),
(22, 'golden-pagoda-pagoda-wat-pha-that-luang-vientiane.jpg', 'ເຊົ່າ', 'ຄອນໂດ', 'ໂຄງການ', '350000000', 'LAK', 'ນະຄອນຫຼວງ', 'ນາຊາຍທອງ', 'ນາງຢາງ', '4', '4', '3', '40', '40', 'ຫ້ອງສະມຸດ, ສະລ່ອຍນ້ຳ, ຕິດຕໍ່ຫາເຮົາ, ', 'ບ້ານຈັດສັນ ຕິດທາງໃຫຍ້', '', '', '', '2022-06-30 19:54:39', '2095188702', 1, '2022-07-01', 4);

-- --------------------------------------------------------

--
-- Table structure for table `real_balance`
--

CREATE TABLE `real_balance` (
  `Balance_id` int(5) NOT NULL,
  `Bl_amount` varchar(200) NOT NULL,
  `user_uid` int(5) NOT NULL,
  `Bl_realtime` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `real_balance`
--

INSERT INTO `real_balance` (`Balance_id`, `Bl_amount`, `user_uid`, `Bl_realtime`) VALUES
(34, '341000', 10, '2022-06-27 23:45:42'),
(35, '648000', 6, '2022-06-28 00:32:54'),
(39, '216000', 4, '2022-06-30 21:06');

-- --------------------------------------------------------

--
-- Table structure for table `real_paymoney`
--

CREATE TABLE `real_paymoney` (
  `paymn_id` int(5) NOT NULL,
  `pay_money` varchar(200) NOT NULL,
  `pay_mn_hour` varchar(200) NOT NULL,
  `real_uid` int(1) NOT NULL,
  `user_uid` int(1) NOT NULL,
  `pay_curdate` varchar(200) NOT NULL,
  `pay_uid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `real_paymoney`
--

INSERT INTO `real_paymoney` (`paymn_id`, `pay_money`, `pay_mn_hour`, `real_uid`, `user_uid`, `pay_curdate`, `pay_uid`) VALUES
(21, '24000', '0', 3, 6, '2022-06-25 23:59:06', ''),
(22, '24000', '0', 2, 6, '2022-06-25 23:59:06', ''),
(23, '24000', '0', 1, 6, '2022-06-25 23:59:06', ''),
(39, '48000', '9.591', 21, 10, '2022-06-27 23:42:43', 'payment'),
(40, '24000', '9.591', 21, 10, '2022-06-27 23:43:04', 'payment'),
(41, '24000', '9.591', 21, 10, '2022-06-27 23:43:57', 'payment'),
(42, '24000', '0', 21, 10, '2022-06-27 23:45:42', ''),
(43, '48000', '0', 21, 10, '2022-06-28 00:29:50', 'payment'),
(44, '144000', '0', 21, 10, '2022-06-28 00:31:02', 'real_pay'),
(45, '24000', '0', 5, 6, '2022-06-28 00:32:18', 'payment'),
(46, '264000', '0', 2, 6, '2022-06-28 00:32:54', ''),
(47, '144000', '0', 3, 6, '2022-06-28 00:33:04', 'payment'),
(48, '144000', '0', 5, 6, '2022-06-28 00:33:07', 'real_pay'),
(53, '18000', '', 0, 0, '2022-06-29 16:45:45', 'real_pay'),
(54, '18000', '', 0, 0, '2022-06-29 16:45:50', 'real_pay'),
(55, '18000', '', 0, 0, '2022-06-29 16:45:55', 'real_pay'),
(56, '36000', '', 0, 0, '2022-06-30 16:47:53', 'real_pay'),
(57, '18000', '', 0, 0, '2022-06-30 16:48:00', 'real_pay'),
(58, '18000', '', 0, 0, '2022-06-30 16:48:00', 'real_pay'),
(59, '18000', '', 0, 0, '2022-06-30 16:48:00', 'real_pay'),
(111, '48000', '', 22, 4, '2022-07-01 00:31', 'payment'),
(112, '24000', '', 20, 4, '2022-07-01 00:31', 'payment'),
(113, '48000', '', 19, 4, '2022-07-01 00:31', 'real_pay'),
(114, '24000', '', 22, 1, '2022-07-02 21:45', 'payment'),
(115, '24000', '', 20, 1, '2022-07-02 21:45', 'real_pay');

-- --------------------------------------------------------

--
-- Table structure for table `real_upload`
--

CREATE TABLE `real_upload` (
  `upload_id` int(5) NOT NULL,
  `upload_mg` varchar(2000) NOT NULL,
  `user_uid_up` int(5) NOT NULL,
  `real_id_up` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `real_upload`
--

INSERT INTO `real_upload` (`upload_id`, `upload_mg`, `user_uid_up`, `real_id_up`) VALUES
(1, 'AHJZ6595.JPG', 6, 5),
(2, 'AJAR3194.JPG', 6, 5),
(3, 'AXHS7614.JPG', 6, 5),
(4, 'BALE0372.JPG', 6, 5),
(5, 'BEGU2246.JPG', 6, 5),
(7, 'AXHS7614.JPG', 6, 7),
(8, 'BALE0372.JPG', 6, 7),
(9, 'BEGU2246.JPG', 6, 7),
(10, 'BJNW1720.JPG', 6, 7),
(11, 'BOBN3345.JPG', 6, 7),
(12, 'BXAL2340.JPG', 6, 7),
(23, 'macos-big-sur-2560x1440-dark-wwdc-2020-22655.jpeg', 6, 8),
(24, 'macos-big-sur-2560x1440-wwdc-2020-4k-22654.jpeg', 6, 8),
(25, 'macos-monterey-2560x1440-dark-wwdc-2021-5k-23425.jpeg', 6, 8),
(26, 'macos-monterey-2560x1440-wwdc-2021-5k-23424.jpeg', 6, 8),
(27, 'macos-monterey-2560x1440-dark-wwdc-2021-5k-23425.jpeg', 6, 6),
(28, 'macos-monterey-2560x1440-wwdc-2021-5k-23424.jpeg', 6, 6),
(33, 'macos-big-sur-2560x1440-dark-wwdc-2020-22655.jpeg', 6, 2),
(34, 'macos-big-sur-2560x1440-wwdc-2020-4k-22654.jpeg', 6, 2),
(35, 'macos-monterey-2560x1440-dark-wwdc-2021-5k-23425.jpeg', 6, 2),
(36, 'macos-monterey-2560x1440-wwdc-2021-5k-23424.jpeg', 6, 2),
(37, 'macos-big-sur-2560x1440-dark-wwdc-2020-22655.jpeg', 6, 1),
(38, 'macos-big-sur-2560x1440-wwdc-2020-4k-22654.jpeg', 6, 1),
(39, 'macos-monterey-2560x1440-dark-wwdc-2021-5k-23425.jpeg', 6, 1),
(40, 'macos-monterey-2560x1440-wwdc-2021-5k-23424.jpeg', 6, 1),
(41, 'macos-big-sur-2560x1440-dark-wwdc-2020-22655.jpeg', 4, 9),
(42, 'macos-big-sur-2560x1440-wwdc-2020-4k-22654.jpeg', 4, 9),
(43, 'macos-monterey-2560x1440-dark-wwdc-2021-5k-23425.jpeg', 4, 9),
(44, 'macos-monterey-2560x1440-wwdc-2021-5k-23424.jpeg', 4, 9),
(45, 'img.png', 6, 3),
(46, 'Screen Shot 2022-02-07 at 11.08.36.png', 6, 3),
(47, 'Screen Shot 2022-02-07 at 11.09.49.png', 6, 3),
(48, 'Screen Shot 2022-02-07 at 11.12.07.png', 6, 3),
(49, 'Screen Shot 2022-02-09 at 23.29.35.png', 6, 3),
(50, 'Screen Shot 2022-02-15 at 22.31.31.png', 6, 3),
(100, 'macos-big-sur-2560x1440-dark-wwdc-2020-22655.jpeg', 6, 10),
(101, 'macos-big-sur-2560x1440-wwdc-2020-4k-22654.jpeg', 6, 10),
(102, 'macos-monterey-2560x1440-dark-wwdc-2021-5k-23425.jpeg', 6, 10),
(103, 'macos-monterey-2560x1440-wwdc-2021-5k-23424.jpeg', 6, 10),
(104, 'IMG20200702113347.jpg', 1, 11),
(105, 'IMG20200702113916.jpg', 1, 11),
(106, 'IMG20200702113925.jpg', 1, 11),
(107, 'IMG20200702113937.jpg', 1, 11),
(108, 'IMG20200702113246.jpg', 6, 12),
(109, 'IMG20200702113342_19.jpg', 6, 12),
(110, 'IMG20200702113347.jpg', 6, 12),
(111, 'IMG20200702113916.jpg', 6, 12),
(112, 'IMG20200702113925.jpg', 6, 12),
(113, 'IMG20200702113937.jpg', 6, 12),
(114, 'IMG20200702113246.jpg', 6, 13),
(115, 'IMG20200702113342_19.jpg', 6, 13),
(116, 'IMG20200702113347.jpg', 6, 13),
(117, 'IMG20200702113916.jpg', 6, 13),
(118, 'IMG20200702113925.jpg', 6, 13),
(119, 'IMG20200702113937.jpg', 6, 13),
(120, 'pexels-pixabay-259588.jpeg', 4, 15),
(121, 'andrea-davis-44f42VRbGQg-unsplash.jpg', 4, 16),
(122, 'francesca-tosolini-tHkJAMcO3QE-unsplash.jpg', 4, 16),
(123, 'mark-chaves-WQysERfYbog-unsplash.jpg', 4, 16),
(124, 'nastuh-abootalebi-yWwob8kwOCk-unsplash.jpg', 4, 17),
(125, '1214402.jpg', 4, 18),
(126, '2051617.jpg', 4, 18),
(127, '1214402.jpg', 4, 19),
(128, '2051617.jpg', 4, 19),
(129, '2051617.jpg', 4, 20),
(130, '1214402.jpg', 10, 21),
(131, 'gate-wat-pha-that-luang-vientiane-laos.jpg', 4, 22);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `user_img` varchar(2000) NOT NULL,
  `user_name` varchar(2000) NOT NULL,
  `name` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `user_date` varchar(200) NOT NULL,
  `user_status` varchar(200) NOT NULL,
  `user_gender` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_tel` varchar(12) NOT NULL,
  `user_home` varchar(200) NOT NULL,
  `user_distric` varchar(200) NOT NULL,
  `user_vilage` varchar(200) NOT NULL,
  `user_uid` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_img`, `user_name`, `name`, `lname`, `user_date`, `user_status`, `user_gender`, `user_email`, `user_password`, `user_tel`, `user_home`, `user_distric`, `user_vilage`, `user_uid`) VALUES
(1, 'Screen Shot 2022-02-07 at 11.08.36.png', 'Users', 'Users', '', '', 'Users', 'ເພດ', 'Users@gmail.com', '123', '', '', '', '', 1),
(2, '', 'Users_01', '', '', '', 'Users', '', '', '1234', '', '', '', '', 1),
(3, '', 'users-03', 'admin', 'Lance', '', '', '', '', '123', '', '', '', '', 1),
(4, '1214402.jpg', 'Users-04', 'User-apple', 'phomsuncan', '', 'Users', 'ຊາຍ', 'Admin_001@gmail.com', '123', '2095188702', '', '', '', 1),
(5, '', '$user_name', '$name', '', '', 'Users', '', '', '', '', '', '', '', 1),
(6, 'macos-monterey-2560x1440-wwdc-2021-5k-23424.jpeg', 'Users-5', 'Apple-5', 'lname', '2022-05-10', 'Users', 'ຊາຍ', 'user-5@gmail.com', '123', '2095188702', 'home5', 'distric5', 'village5', 1),
(7, 'Screen Shot 2022-02-07 at 10.49.13.png', 'Users-6', 'name6', 'lanme6', '', 'Users', '', '', '123', '', '', '', '', 1),
(8, 'IMG_2777_polarr.JPEG', 'Users-7', 'User', '', '', 'Users', '', '', '123', '', '', '', '', 1),
(9, 'macos-monterey-2560x1440-wwdc-2021-5k-23424.jpeg', 'Users-8', 'User-apple-phomsungcan', '', '', 'Users', '', '', '123', '', '', '', '', 1),
(10, 'macos-monterey-2560x1440-wwdc-2021-5k-23424.jpeg', 'Users-9', 'name', '', '', 'Users', 'ຊາຍ', '', '123', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_like`
--

CREATE TABLE `user_like` (
  `like_id` int(5) NOT NULL,
  `cound_like` varchar(200) NOT NULL,
  `user_uid_k` int(1) NOT NULL,
  `real_uid_k` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_like`
--

INSERT INTO `user_like` (`like_id`, `cound_like`, `user_uid_k`, `real_uid_k`) VALUES
(1, 'Cound-like', 4, 20),
(2, 'Cound-like', 4, 19),
(3, 'Cound-like', 4, 11),
(4, 'Cound-like', 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_save`
--

CREATE TABLE `user_save` (
  `save_id` int(5) NOT NULL,
  `cound_save` varchar(200) NOT NULL,
  `user_uid` int(1) NOT NULL,
  `real_uid` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_save`
--

INSERT INTO `user_save` (`save_id`, `cound_save`, `user_uid`, `real_uid`) VALUES
(1, 'Cound-Save', 4, 20),
(3, 'Cound-Save', 4, 19),
(4, 'Cound-Save', 4, 16),
(5, 'Cound-Save', 6, 19),
(6, 'Cound-Save', 4, 11),
(7, 'Cound-Save', 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_view`
--

CREATE TABLE `user_view` (
  `view_id` int(5) NOT NULL,
  `View` varchar(200) NOT NULL,
  `user_uid` int(5) NOT NULL,
  `real_uid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_view`
--

INSERT INTO `user_view` (`view_id`, `View`, `user_uid`, `real_uid`) VALUES
(1, '5', 4, 20),
(2, '2', 4, 19),
(3, '3', 4, 16),
(4, '2', 4, 11),
(5, '2', 4, 2),
(6, '2', 4, 5),
(7, '1', 4, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `ad_money_setting`
--
ALTER TABLE `ad_money_setting`
  ADD PRIMARY KEY (`ad_sm_id`);

--
-- Indexes for table `ad_typepost`
--
ALTER TABLE `ad_typepost`
  ADD PRIMARY KEY (`AM_type_id`);

--
-- Indexes for table `ad_typetext`
--
ALTER TABLE `ad_typetext`
  ADD PRIMARY KEY (`Ad_text_id`);

--
-- Indexes for table `already_paid`
--
ALTER TABLE `already_paid`
  ADD PRIMARY KEY (`ap_id`);

--
-- Indexes for table `am-dcm-category`
--
ALTER TABLE `am-dcm-category`
  ADD PRIMARY KEY (`dcm_category_id`);

--
-- Indexes for table `am-dcm-distric`
--
ALTER TABLE `am-dcm-distric`
  ADD PRIMARY KEY (`dcm_distric_id`);

--
-- Indexes for table `am-dcm-home`
--
ALTER TABLE `am-dcm-home`
  ADD PRIMARY KEY (`dcm_home_id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `am-dcm-village`
--
ALTER TABLE `am-dcm-village`
  ADD PRIMARY KEY (`dcm_village_id`),
  ADD KEY `distric_id` (`distric_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cm_id`);

--
-- Indexes for table `footer_admin`
--
ALTER TABLE `footer_admin`
  ADD PRIMARY KEY (`fm_id`);

--
-- Indexes for table `message_real`
--
ALTER TABLE `message_real`
  ADD PRIMARY KEY (`ms_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`new_id`);

--
-- Indexes for table `real-curdate`
--
ALTER TABLE `real-curdate`
  ADD PRIMARY KEY (`cur_id`);

--
-- Indexes for table `real-document`
--
ALTER TABLE `real-document`
  ADD PRIMARY KEY (`real_id`);

--
-- Indexes for table `real_balance`
--
ALTER TABLE `real_balance`
  ADD PRIMARY KEY (`Balance_id`);

--
-- Indexes for table `real_paymoney`
--
ALTER TABLE `real_paymoney`
  ADD PRIMARY KEY (`paymn_id`);

--
-- Indexes for table `real_upload`
--
ALTER TABLE `real_upload`
  ADD PRIMARY KEY (`upload_id`),
  ADD KEY `real_id_up` (`real_id_up`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_like`
--
ALTER TABLE `user_like`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `user_save`
--
ALTER TABLE `user_save`
  ADD PRIMARY KEY (`save_id`);

--
-- Indexes for table `user_view`
--
ALTER TABLE `user_view`
  ADD PRIMARY KEY (`view_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ad_money_setting`
--
ALTER TABLE `ad_money_setting`
  MODIFY `ad_sm_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `ad_typepost`
--
ALTER TABLE `ad_typepost`
  MODIFY `AM_type_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ad_typetext`
--
ALTER TABLE `ad_typetext`
  MODIFY `Ad_text_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `already_paid`
--
ALTER TABLE `already_paid`
  MODIFY `ap_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `am-dcm-category`
--
ALTER TABLE `am-dcm-category`
  MODIFY `dcm_category_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `am-dcm-distric`
--
ALTER TABLE `am-dcm-distric`
  MODIFY `dcm_distric_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `am-dcm-home`
--
ALTER TABLE `am-dcm-home`
  MODIFY `dcm_home_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `am-dcm-village`
--
ALTER TABLE `am-dcm-village`
  MODIFY `dcm_village_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `cm_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `footer_admin`
--
ALTER TABLE `footer_admin`
  MODIFY `fm_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `message_real`
--
ALTER TABLE `message_real`
  MODIFY `ms_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `new_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `real-curdate`
--
ALTER TABLE `real-curdate`
  MODIFY `cur_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `real-document`
--
ALTER TABLE `real-document`
  MODIFY `real_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `real_balance`
--
ALTER TABLE `real_balance`
  MODIFY `Balance_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `real_paymoney`
--
ALTER TABLE `real_paymoney`
  MODIFY `paymn_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `real_upload`
--
ALTER TABLE `real_upload`
  MODIFY `upload_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_like`
--
ALTER TABLE `user_like`
  MODIFY `like_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_save`
--
ALTER TABLE `user_save`
  MODIFY `save_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_view`
--
ALTER TABLE `user_view`
  MODIFY `view_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `am-dcm-home`
--
ALTER TABLE `am-dcm-home`
  ADD CONSTRAINT `AM-dcm-home_ibfk_1` FOREIGN KEY (`village_id`) REFERENCES `am-dcm-village` (`dcm_village_id`);

--
-- Constraints for table `am-dcm-village`
--
ALTER TABLE `am-dcm-village`
  ADD CONSTRAINT `AM-dcm-village_ibfk_1` FOREIGN KEY (`distric_id`) REFERENCES `am-dcm-distric` (`dcm_distric_id`);

--
-- Constraints for table `real_upload`
--
ALTER TABLE `real_upload`
  ADD CONSTRAINT `real_upload_ibfk_1` FOREIGN KEY (`real_id_up`) REFERENCES `real-document` (`real_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
