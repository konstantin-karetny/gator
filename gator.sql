-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 09, 2019 at 05:58 PM
-- Server version: 8.0.15
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gator`
--

-- --------------------------------------------------------

--
-- Table structure for table `memes`
--

CREATE TABLE `memes` (
  `id` int(10) UNSIGNED NOT NULL,
  `src_id` int(11) NOT NULL,
  `original_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `preview` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `added` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memes`
--

INSERT INTO `memes` (`id`, `src_id`, `original_id`, `type_id`, `user_id`, `name`, `body`, `description`, `preview`, `added`, `created_at`, `updated_at`) VALUES
(1, 1, 'aro12AB', 3, 1, 'Sploooooosh!', 'https://img-9gag-fun.9cache.com/photo/aro12AB_460sv.mp4', 'Description', 'https://img-9gag-fun.9cache.com/photo/aro12AB_460s.jpg', 1, '2019-08-02 15:57:12', '2019-08-09 14:13:46'),
(31, 1, 'a0Rv2oZ', 1, 1, 'It really do be like that', 'https://img-9gag-fun.9cache.com/photo/a0Rv2oZ_460s.jpg', '', '', 1, '2019-08-05 08:13:10', '2019-08-09 10:29:50'),
(32, 1, 'aN0mN23', 3, 1, 'Toddlers have great moves', 'https://img-9gag-fun.9cache.com/photo/aN0mN23_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aN0mN23_460s.jpg', 1, '2019-08-05 08:13:10', '2019-08-09 10:29:51'),
(33, 1, 'aDgRy97', 3, 1, 'Wait a little bit for the bro moment', 'https://img-9gag-fun.9cache.com/photo/aDgRy97_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aDgRy97_460s.jpg', 1, '2019-08-05 08:13:10', '2019-08-09 10:29:51'),
(34, 1, 'a5Rp4yy', 3, 1, 'Liquid Nitrogen mixed with 1500 Ping Pong Balls', 'https://img-9gag-fun.9cache.com/photo/a5Rp4yy_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a5Rp4yy_460s.jpg', 1, '2019-08-05 08:13:10', '2019-08-09 10:29:52'),
(35, 1, 'aMYegeW', 3, 1, 'Poor little fella', 'https://img-9gag-fun.9cache.com/photo/aMYegeW_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aMYegeW_460s.jpg', 1, '2019-08-05 08:13:10', '2019-08-09 10:29:52'),
(36, 1, 'aV0jpRv', 1, 1, 'Things get better tomorrow maybe?', 'https://img-9gag-fun.9cache.com/photo/aV0jpRv_460s.jpg', '', '', 1, '2019-08-05 08:13:11', '2019-08-09 10:29:53'),
(37, 1, 'aV0jyVn', 3, 1, 'This is a $1200 torch, throws light upto 900 metres ahead, 53000 lumens', 'https://img-9gag-fun.9cache.com/photo/aV0jyVn_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aV0jyVn_460s.jpg', 1, '2019-08-05 08:13:11', '2019-08-09 10:29:54'),
(38, 1, 'a3Rv6v5', 1, 1, 'The father was adopted', 'https://img-9gag-fun.9cache.com/photo/a3Rv6v5_460s.jpg', '', '', 1, '2019-08-05 08:13:11', '2019-08-09 10:29:54'),
(39, 1, 'a85dgNV', 3, 1, 'What level is this ?', 'https://img-9gag-fun.9cache.com/photo/a85dgNV_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a85dgNV_460s.jpg', 1, '2019-08-05 08:13:11', '2019-08-09 10:29:55'),
(40, 1, 'aQ16w8K', 1, 1, 'Send me the weirdest images saved to your device', 'https://img-9gag-fun.9cache.com/photo/aQ16w8K_460s.jpg', '', '', 1, '2019-08-05 09:06:38', '2019-08-09 10:29:55'),
(41, 1, 'aDgRBxZ', 3, 1, 'Musician: \"So, Which instrument do you play?\" Me : \"Ship Horn\"', 'https://img-9gag-fun.9cache.com/photo/aDgRBxZ_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aDgRBxZ_460s.jpg', 1, '2019-08-05 09:06:38', '2019-08-09 10:29:56'),
(42, 1, 'aR06nWA', 1, 1, 'The RGB looks that great.', 'https://img-9gag-fun.9cache.com/photo/aR06nWA_460s.jpg', '', '', 1, '2019-08-05 09:06:38', '2019-08-09 10:29:56'),
(43, 1, 'aV0jG4n', 1, 1, 'She’s not wrong.', 'https://img-9gag-fun.9cache.com/photo/aV0jG4n_460s.jpg', '', '', 1, '2019-08-05 09:06:38', '2019-08-09 10:29:56'),
(44, 1, 'avo23Ad', 1, 1, 'Bird lovers start a family.', 'https://img-9gag-fun.9cache.com/photo/avo23Ad_460s.jpg', '', '', 1, '2019-08-05 09:06:38', '2019-08-09 10:29:56'),
(45, 1, 'aEgdLD9', 1, 1, 'No but like seriously how', 'https://img-9gag-fun.9cache.com/photo/aEgdLD9_460s.jpg', '', '', 1, '2019-08-05 09:06:38', '2019-08-09 10:29:56'),
(46, 1, 'aL06YRv', 1, 1, 'Sunset in Guilin', 'https://img-9gag-fun.9cache.com/photo/aL06YRv_460s.jpg', '', '', 1, '2019-08-05 09:06:38', '2019-08-09 10:29:57'),
(47, 1, 'awoNRxB', 1, 1, 'Benefits of Public Transport (Expectations vs. Reality)', 'https://img-9gag-fun.9cache.com/photo/awoNRxB_460s.jpg', '', '', 1, '2019-08-05 09:06:38', '2019-08-09 10:29:57'),
(48, 1, 'aqg4qOZ', 1, 1, 'It\'s the guns, stupid!', 'https://img-9gag-fun.9cache.com/photo/aqg4qOZ_460s.jpg', '', '', 1, '2019-08-05 09:06:39', '2019-08-09 10:29:57'),
(49, 1, 'am5q3Do', 3, 1, 'Omni-directional treadmill for virtual reality', 'https://img-9gag-fun.9cache.com/photo/am5q3Do_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/am5q3Do_460s.jpg', 1, '2019-08-05 09:06:39', '2019-08-09 10:29:57'),
(50, 1, 'aEgdr1O', 1, 1, 'Regular Russian BBQ', 'https://img-9gag-fun.9cache.com/photo/aEgdr1O_460s.jpg', '', '', 1, '2019-08-05 09:06:39', '2019-08-09 10:29:58'),
(51, 1, 'a6NrAvm', 1, 1, 'Shame on you', 'https://img-9gag-fun.9cache.com/photo/a6NrAvm_460s.jpg', '', '', 1, '2019-08-05 09:06:39', '2019-08-09 10:29:59'),
(52, 1, 'ae5Kvrj', 3, 1, 'Feeding the frog', 'https://img-9gag-fun.9cache.com/photo/ae5Kvrj_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/ae5Kvrj_460s.jpg', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:00'),
(53, 1, 'a7wvzPA', 1, 1, 'He is not wrong', 'https://img-9gag-fun.9cache.com/photo/a7wvzPA_460s.jpg', '', '', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:00'),
(54, 1, 'az17N4b', 1, 1, 'Remember this?', 'https://img-9gag-fun.9cache.com/photo/az17N4b_460s.jpg', '', '', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:01'),
(55, 1, 'ad5yEwV', 1, 1, 'Uma Thurman & daughter Maya Hawke', 'https://img-9gag-fun.9cache.com/photo/ad5yEwV_460s.jpg', '', '', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:01'),
(56, 1, 'aV0jAZO', 3, 1, 'What is this witchcraft?!', 'https://img-9gag-fun.9cache.com/photo/aV0jAZO_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aV0jAZO_460s.jpg', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:01'),
(57, 1, 'aDgRBAG', 1, 1, 'Trannies aren’t gay', 'https://img-9gag-fun.9cache.com/photo/aDgRBAG_460s.jpg', '', '', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:02'),
(58, 1, 'aAgBjqd', 1, 1, 'The airport in Vienna has a miniature model of every plane that has landed or departed from it', 'https://img-9gag-fun.9cache.com/photo/aAgBjqd_460s.jpg', '', '', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:02'),
(59, 1, 'aKd4QQ1', 3, 1, 'Best trade ever.', 'https://img-9gag-fun.9cache.com/photo/aKd4QQ1_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aKd4QQ1_460s.jpg', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:02'),
(60, 1, 'a85dRV6', 1, 1, 'It’s all fecal', 'https://img-9gag-fun.9cache.com/photo/a85dRV6_460s.jpg', '', '', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:03'),
(61, 1, 'aWEBwqZ', 1, 1, 'Long distance relationship is killing me', 'https://img-9gag-fun.9cache.com/photo/aWEBwqZ_460s.jpg', '', '', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:03'),
(62, 1, 'ag5rW7x', 1, 1, 'He\'s done it again! Credits: Low Cost Cosplay', 'https://img-9gag-fun.9cache.com/photo/ag5rW7x_460s.jpg', '', '', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:03'),
(63, 1, 'ax7Eqe1', 3, 1, 'The ultimate kitchen tool', 'https://img-9gag-fun.9cache.com/photo/ax7Eqe1_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/ax7Eqe1_460s.jpg', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:04'),
(64, 1, 'a6NrP1R', 3, 1, 'Birb gathering donations for the American Eagle Foundation.', 'https://img-9gag-fun.9cache.com/photo/a6NrP1R_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a6NrP1R_460s.jpg', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:05'),
(65, 1, 'ad5yEjM', 3, 1, 'Storm the booty like the beaches of Normandy', 'https://img-9gag-fun.9cache.com/photo/ad5yEjM_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/ad5yEjM_460s.jpg', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:06'),
(66, 1, 'ad5yG19', 1, 1, 'The color of power', 'https://img-9gag-fun.9cache.com/photo/ad5yG19_460s.jpg', '', '', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:07'),
(67, 1, 'ae5Knbp', 1, 1, 'Now that\'s confusing.', 'https://img-9gag-fun.9cache.com/photo/ae5Knbp_460s.jpg', '', '', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:07'),
(68, 1, 'aKd4QGb', 3, 1, 'Nature finds a way', 'https://img-9gag-fun.9cache.com/photo/aKd4QGb_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aKd4QGb_460s.jpg', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:08'),
(69, 1, 'aDgRKKZ', 3, 1, 'What a noob', 'https://img-9gag-fun.9cache.com/photo/aDgRKKZ_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aDgRKKZ_460s.jpg', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:08'),
(70, 1, 'aqg4PKv', 1, 1, ' \"Rob? Tsk tsk tsk. That\'s a naughty word. We never rob. We just sort of borrow a bit from those who can afford it.\"', 'https://img-9gag-fun.9cache.com/photo/aqg4PKv_460s.jpg', '', '', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:09'),
(71, 1, 'aKd4oyN', 3, 1, 'Did you know? Not only are cats a liquid, cats conduct electricity.', 'https://img-9gag-fun.9cache.com/photo/aKd4oyN_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aKd4oyN_460s.jpg', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:09'),
(72, 1, 'aO0oLz2', 3, 1, 'Weapon of choice.', 'https://img-9gag-fun.9cache.com/photo/aO0oLz2_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aO0oLz2_460s.jpg', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:10'),
(73, 1, 'a85dxYd', 3, 1, 'Humor that doesn\'t fade with age.', 'https://img-9gag-fun.9cache.com/photo/a85dxYd_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a85dxYd_460s.jpg', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:11'),
(74, 1, 'a85dxxY', 1, 1, 'Murica right now', 'https://img-9gag-fun.9cache.com/photo/a85dxxY_460s.jpg', '', '', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:12'),
(75, 1, 'abr3NME', 1, 1, 'Amen brothers', 'https://img-9gag-fun.9cache.com/photo/abr3NME_460s.jpg', '', '', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:12'),
(76, 1, 'a9RjxG1', 1, 1, 'Trick the system', 'https://img-9gag-fun.9cache.com/photo/a9RjxG1_460s.jpg', '', '', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:13'),
(77, 1, 'ae5K8Bb', 1, 1, 'Best game ever for me! :) I\'ve been playing it ever since it was released in 1998 but it\'s still a perfect game!', 'https://img-9gag-fun.9cache.com/photo/ae5K8Bb_460s.jpg', '', '', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:13'),
(78, 1, 'avo2KmW', 3, 1, 'The Simpsons', 'https://img-9gag-fun.9cache.com/photo/avo2KmW_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/avo2KmW_460s.jpg', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:14'),
(79, 1, 'aBg9BZD', 3, 1, 'Rhinos give sleeping lions a wake up call', 'https://img-9gag-fun.9cache.com/photo/aBg9BZD_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aBg9BZD_460s.jpg', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:15'),
(80, 1, 'a1Rp3p2', 1, 1, 'FBI trap', 'https://img-9gag-fun.9cache.com/photo/a1Rp3p2_460s.jpg', '', '', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:15'),
(81, 1, 'a9Rjg20', 1, 1, 'Omelette du fromage!!', 'https://img-9gag-fun.9cache.com/photo/a9Rjg20_460s.jpg', '', '', 1, '2019-08-05 09:06:39', '2019-08-09 10:30:16'),
(82, 1, 'a85dgB6', 1, 1, 'Sophisticated', 'https://img-9gag-fun.9cache.com/photo/a85dgB6_460s.jpg', '', '', 1, '2019-08-05 09:06:40', '2019-08-09 10:30:16'),
(83, 1, 'aDgA0XB', 3, 1, 'You seeing this', 'https://img-9gag-fun.9cache.com/photo/aDgA0XB_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aDgA0XB_460s.jpg', 1, '2019-08-06 02:09:28', '2019-08-09 10:30:17'),
(84, 1, 'a0R89OB', 3, 1, 'This Peruvian chef’s face as people from his own village choose Gordon Ramsay’s dish over his in a blind taste test', 'https://img-9gag-fun.9cache.com/photo/a0R89OB_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a0R89OB_460s.jpg', 1, '2019-08-06 02:09:28', '2019-08-09 10:30:17'),
(85, 1, 'aAgRVLg', 1, 1, 'I would like to know', 'https://img-9gag-fun.9cache.com/photo/aAgRVLg_460s.jpg', '', '', 1, '2019-08-06 02:09:28', '2019-08-09 10:30:17'),
(86, 1, 'ae5jNPv', 1, 1, 'Lifespans of the animal kingdom', 'https://img-9gag-fun.9cache.com/photo/ae5jNPv_460s.jpg', '', '', 1, '2019-08-06 02:09:28', '2019-08-09 10:30:18'),
(87, 1, 'ayo75Yr', 1, 1, 'Humble yourself.', 'https://img-9gag-fun.9cache.com/photo/ayo75Yr_460s.jpg', '', '', 1, '2019-08-06 02:09:28', '2019-08-09 10:30:18'),
(88, 1, 'ag53yGx', 1, 1, 'Who says no to that :>', 'https://img-9gag-fun.9cache.com/photo/ag53yGx_460s.jpg', '', '', 1, '2019-08-06 02:09:28', '2019-08-09 10:30:18'),
(89, 1, 'ao5Ezp0', 3, 1, 'That\'s the end, till next week!', 'https://img-9gag-fun.9cache.com/photo/ao5Ezp0_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/ao5Ezp0_460s.jpg', 1, '2019-08-06 02:09:28', '2019-08-09 10:30:19'),
(90, 1, 'ao5Ezzx', 1, 1, 'Odd Parents, Fairyly Odd Parents', 'https://img-9gag-fun.9cache.com/photo/ao5Ezzx_460s.jpg', '', '', 1, '2019-08-06 02:09:28', '2019-08-09 10:30:19'),
(91, 1, 'aZ7bbyV', 1, 1, 'Fairy tea parties are always on the table.', 'https://img-9gag-fun.9cache.com/photo/aZ7bbyV_460s.jpg', '', '', 1, '2019-08-06 02:09:28', '2019-08-09 10:30:20'),
(92, 1, 'a9Rbb1m', 1, 1, 'Installing Tinder as a female - Day one experience summed up', 'https://img-9gag-fun.9cache.com/photo/a9Rbb1m_460s.jpg', '', '', 1, '2019-08-06 02:09:28', '2019-08-09 10:30:20'),
(93, 1, 'a2RzzWE', 1, 1, 'You won’t disturb my human anymore', 'https://img-9gag-fun.9cache.com/photo/a2RzzWE_460s.jpg', '', '', 1, '2019-08-06 02:09:28', '2019-08-09 10:30:21'),
(94, 1, 'ax7dEp1', 3, 1, 'Literally a snake', 'https://img-9gag-fun.9cache.com/photo/ax7dEp1_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/ax7dEp1_460s.jpg', 1, '2019-08-06 02:09:29', '2019-08-09 10:30:21'),
(95, 1, 'az1ggRZ', 1, 1, 'Woman playing pinball (1978)', 'https://img-9gag-fun.9cache.com/photo/az1ggRZ_460s.jpg', '', '', 1, '2019-08-06 02:09:29', '2019-08-09 10:30:22'),
(96, 1, 'aPRwwbg', 1, 1, 'Funny, cuz it\'s true.', 'https://img-9gag-fun.9cache.com/photo/aPRwwbg_460s.jpg', '', '', 1, '2019-08-06 02:09:29', '2019-08-09 10:30:22'),
(97, 1, 'ax7EpBK', 3, 1, '...and then it folded', 'https://img-9gag-fun.9cache.com/photo/ax7EpBK_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/ax7EpBK_460s.jpg', 1, '2019-08-06 02:09:29', '2019-08-09 10:30:23'),
(98, 1, 'az1g7jq', 1, 1, 'We all went through this', 'https://img-9gag-fun.9cache.com/photo/az1g7jq_460s.jpg', '', '', 1, '2019-08-06 02:09:29', '2019-08-09 10:30:23'),
(99, 1, 'a6NrWEq', 1, 1, 'Too much dota Bois lmao', 'https://img-9gag-fun.9cache.com/photo/a6NrWEq_460s.jpg', '', '', 1, '2019-08-06 02:09:29', '2019-08-09 10:30:23'),
(100, 1, 'aV0zzwv', 1, 1, 'You’re breathtaking', 'https://img-9gag-fun.9cache.com/photo/aV0zzwv_460s.jpg', '', '', 1, '2019-08-06 02:09:29', '2019-08-09 10:30:24'),
(101, 1, 'am5Nq74', 3, 1, 'Meanwhile in Brazil...', 'https://img-9gag-fun.9cache.com/photo/am5Nq74_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/am5Nq74_460s.jpg', 1, '2019-08-06 02:09:29', '2019-08-09 10:30:25'),
(102, 1, 'awoNqNR', 1, 1, 'This pretty much sums up all slavic nations....', 'https://img-9gag-fun.9cache.com/photo/awoNqNR_460s.jpg', '', '', 1, '2019-08-06 02:09:29', '2019-08-09 10:30:25'),
(103, 1, 'aEgdevo', 3, 1, 'Guy is eating a Tarantula', 'https://img-9gag-fun.9cache.com/photo/aEgdevo_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aEgdevo_460s.jpg', 1, '2019-08-06 02:09:29', '2019-08-09 10:30:26'),
(104, 1, 'a3Rvonv', 1, 1, 'Unexpectedly wholesome', 'https://img-9gag-fun.9cache.com/photo/a3Rvonv_460s.jpg', '', '', 1, '2019-08-06 02:09:29', '2019-08-09 10:30:27'),
(105, 1, 'aqg94wL', 1, 1, 'Goosfraba.....', 'https://img-9gag-fun.9cache.com/photo/aqg94wL_460s.jpg', '', '', 1, '2019-08-06 02:09:29', '2019-08-09 10:30:27'),
(106, 1, 'ax7EpW2', 1, 1, 'Leaves from the vine...', 'https://img-9gag-fun.9cache.com/photo/ax7EpW2_460s.jpg', '', '', 1, '2019-08-06 02:09:29', '2019-08-09 10:30:27'),
(107, 1, 'a85dPKd', 1, 1, 'Cringe overloading', 'https://img-9gag-fun.9cache.com/photo/a85dPKd_460s.jpg', '', '', 1, '2019-08-06 02:09:29', '2019-08-09 10:30:27'),
(108, 1, 'aQ16Yrw', 1, 1, 'Stay positive ya’ll.', 'https://img-9gag-fun.9cache.com/photo/aQ16Yrw_460s.jpg', '', '', 1, '2019-08-06 02:09:29', '2019-08-09 10:30:28'),
(109, 1, 'ae5KoxB', 1, 1, 'This is beyond science', 'https://img-9gag-fun.9cache.com/photo/ae5KoxB_460s.jpg', '', '', 1, '2019-08-06 02:09:29', '2019-08-09 10:30:28'),
(110, 1, 'aAgBn32', 3, 1, 'Anime intro / Anime outro', 'https://img-9gag-fun.9cache.com/photo/aAgBn32_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aAgBn32_460s.jpg', 1, '2019-08-06 02:09:29', '2019-08-09 10:30:29'),
(111, 1, 'aY7j897', 3, 1, '@beeple_crap (ig)', 'https://img-9gag-fun.9cache.com/photo/aY7j897_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aY7j897_460s.jpg', 1, '2019-08-06 02:09:29', '2019-08-09 10:30:30'),
(112, 1, 'abr3P48', 3, 1, 'I believe i can fly..', 'https://img-9gag-fun.9cache.com/photo/abr3P48_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/abr3P48_460s.jpg', 1, '2019-08-06 02:09:29', '2019-08-09 10:30:31'),
(113, 1, 'ag5rRq6', 1, 1, 'You are special!', 'https://img-9gag-fun.9cache.com/photo/ag5rRq6_460s.jpg', '', '', 1, '2019-08-06 02:09:29', '2019-08-09 10:30:31'),
(114, 1, 'aV0jn72', 1, 1, 'Im so disappointed..', 'https://img-9gag-fun.9cache.com/photo/aV0jn72_460s.jpg', '', '', 1, '2019-08-06 02:09:29', '2019-08-09 10:30:32'),
(115, 1, 'a0RvmLL', 1, 1, 'Remember this', 'https://img-9gag-fun.9cache.com/photo/a0RvmLL_460s.jpg', '', '', 1, '2019-08-06 02:09:29', '2019-08-09 10:30:32'),
(116, 1, 'az17NOz', 1, 1, 'America right now', 'https://img-9gag-fun.9cache.com/photo/az17NOz_460s.jpg', '', '', 1, '2019-08-06 02:09:29', '2019-08-09 10:30:32'),
(117, 1, 'a5Rpmmy', 3, 1, '\"The Artillery Truck is Useless\"', 'https://img-9gag-fun.9cache.com/photo/a5Rpmmy_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a5Rpmmy_460s.jpg', 1, '2019-08-06 02:09:29', '2019-08-09 10:30:34'),
(118, 1, 'aO0o64r', 3, 1, 'Don’t care how old still gold', 'https://img-9gag-fun.9cache.com/photo/aO0o64r_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aO0o64r_460s.jpg', 1, '2019-08-06 02:09:29', '2019-08-09 10:30:35'),
(119, 1, 'am5qDE2', 1, 1, 'I can imagine the headlines... “gamers take up arms to play real life FPS after their games were taken away”', 'https://img-9gag-fun.9cache.com/photo/am5qDE2_460s.jpg', '', '', 1, '2019-08-06 02:09:29', '2019-08-09 10:30:35'),
(120, 1, 'aR065r7', 1, 1, 'It be like dat...', 'https://img-9gag-fun.9cache.com/photo/aR065r7_460s.jpg', '', '', 1, '2019-08-06 02:09:29', '2019-08-09 10:30:36'),
(121, 1, 'aqg438P', 1, 1, 'Argument', 'https://img-9gag-fun.9cache.com/photo/aqg438P_460s.jpg', '', '', 1, '2019-08-06 02:09:30', '2019-08-09 10:30:36'),
(122, 1, 'aAgBWEE', 1, 1, 'God I wish it was me', 'https://img-9gag-fun.9cache.com/photo/aAgBWEE_460s.jpg', '', '', 1, '2019-08-06 02:09:30', '2019-08-09 10:30:36'),
(123, 1, 'aPR6NdV', 1, 1, 'Or blame video games?', 'https://img-9gag-fun.9cache.com/photo/aPR6NdV_460s.jpg', '', '', 1, '2019-08-06 02:09:30', '2019-08-09 10:30:36'),
(124, 1, 'ae5KoAq', 1, 1, 'Vladimir Ilyich Lenin: \'Power to the Soviets\', rally for revolution - 1917', 'https://img-9gag-fun.9cache.com/photo/ae5KoAq_460s.jpg', '', '', 1, '2019-08-06 02:09:30', '2019-08-09 10:30:37'),
(125, 1, 'a85dPwd', 1, 1, 'Great picture of Davide Basile: Phoenix shaped magma eruption', 'https://img-9gag-fun.9cache.com/photo/a85dPwd_460s.jpg', '', '', 1, '2019-08-06 02:09:30', '2019-08-09 10:30:37'),
(126, 1, 'ao5mBpe', 1, 1, 'Stay as far as you can from them please!', 'https://img-9gag-fun.9cache.com/photo/ao5mBpe_460s.jpg', '', '', 1, '2019-08-06 02:09:30', '2019-08-09 10:30:38'),
(127, 1, 'a85LqV1', 3, 1, 'When the lake doesn’t spawn', 'https://img-9gag-fun.9cache.com/photo/a85LqV1_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a85LqV1_460s.jpg', 0, '2019-08-08 07:03:26', '2019-08-08 07:03:26'),
(128, 1, 'a5Re1GV', 3, 1, 'GREEN SHIRT GUY!! THE HERO WE NEED', 'https://img-9gag-fun.9cache.com/photo/a5Re1GV_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a5Re1GV_460s.jpg', 0, '2019-08-08 07:03:26', '2019-08-08 07:03:26'),
(129, 1, 'aY7NVeq', 1, 1, 'I dare you i double dare you motherf*ucker!', 'https://img-9gag-fun.9cache.com/photo/aY7NVeq_460s.jpg', '', '', 0, '2019-08-08 07:03:26', '2019-08-08 07:03:26'),
(130, 1, 'aZ7bDZQ', 3, 1, 'The cat will swim too.', 'https://img-9gag-fun.9cache.com/photo/aZ7bDZQ_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aZ7bDZQ_460s.jpg', 0, '2019-08-08 07:03:26', '2019-08-08 07:03:26'),
(131, 1, 'aL0R12g', 3, 1, 'Shoes built to expand and grow with less fortunate children.', 'https://img-9gag-fun.9cache.com/photo/aL0R12g_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aL0R12g_460s.jpg', 0, '2019-08-08 07:03:26', '2019-08-08 07:03:26'),
(132, 1, 'a5ReXGq', 1, 1, '$1200 a month rent on his own body', 'https://img-9gag-fun.9cache.com/photo/a5ReXGq_460s.jpg', '', '', 0, '2019-08-08 07:03:26', '2019-08-08 07:03:26'),
(133, 1, 'aDgAYQO', 3, 1, 'Fight looks so real.', 'https://img-9gag-fun.9cache.com/photo/aDgAYQO_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aDgAYQO_460s.jpg', 0, '2019-08-08 07:03:26', '2019-08-08 07:03:26'),
(134, 1, 'az1ge6j', 1, 1, 'The pay is almost in any job really bad and not worth. Also dont live to work, work to live. Every boss / manager is hungry for money.', 'https://img-9gag-fun.9cache.com/photo/az1ge6j_460s.jpg', '', '', 0, '2019-08-08 07:03:26', '2019-08-08 07:03:26'),
(135, 1, 'ag53odg', 3, 1, 'I can\'t stop watching this! :))', 'https://img-9gag-fun.9cache.com/photo/ag53odg_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/ag53odg_460s.jpg', 0, '2019-08-08 07:03:26', '2019-08-08 07:03:26'),
(138, 1, 'ao5Eymw', 1, 1, 'What happens when lightning strikes a flag on a golf course', 'https://img-9gag-fun.9cache.com/photo/ao5Eymw_460s.jpg', '', '', 0, '2019-08-08 07:05:51', '2019-08-08 07:05:51'),
(139, 1, 'aPRwMjB', 1, 1, 'Boss called me during my grandfather funeral to work, even after telling her where I was the day before', 'https://img-9gag-fun.9cache.com/photo/aPRwMjB_460s.jpg', '', '', 0, '2019-08-08 07:05:51', '2019-08-08 07:05:51'),
(140, 1, 'aMY2EpX', 3, 1, 'Man saves kitty from traffic', 'https://img-9gag-fun.9cache.com/photo/aMY2EpX_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aMY2EpX_460s.jpg', 0, '2019-08-08 10:43:50', '2019-08-08 10:43:50'),
(141, 1, 'aO0KxAD', 1, 1, 'Frank in Stein', 'https://img-9gag-fun.9cache.com/photo/aO0KxAD_460s.jpg', '', '', 0, '2019-08-08 10:46:12', '2019-08-08 10:46:12'),
(142, 1, 'aO0K8Br', 1, 1, 'This would be to funny, and a source of countless memes if they will make it happen', 'https://img-9gag-fun.9cache.com/photo/aO0K8Br_460s.jpg', '', '', 0, '2019-08-08 11:03:11', '2019-08-08 11:03:11'),
(143, 1, 'aAgR0No', 3, 1, 'Narcissism at Work', 'https://img-9gag-fun.9cache.com/photo/aAgR0No_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aAgR0No_460s.jpg', 0, '2019-08-08 11:03:11', '2019-08-08 11:03:11'),
(144, 1, 'a1RvVPG', 3, 1, 'Bow down to the Tsar, you b*tch!', 'https://img-9gag-fun.9cache.com/photo/a1RvVPG_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a1RvVPG_460s.jpg', 0, '2019-08-09 12:23:44', '2019-08-09 12:23:44'),
(145, 1, 'ax7dbWL', 1, 1, 'No words', 'https://img-9gag-fun.9cache.com/photo/ax7dbWL_460s.jpg', '', '', 0, '2019-08-09 12:23:44', '2019-08-09 12:23:44'),
(146, 1, 'aKdwW7j', 3, 1, 'The pure strength of this girl', 'https://img-9gag-fun.9cache.com/photo/aKdwW7j_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aKdwW7j_460s.jpg', 0, '2019-08-09 12:23:44', '2019-08-09 12:23:44'),
(147, 1, 'an5qvvV', 1, 1, 'No more glory', 'https://img-9gag-fun.9cache.com/photo/an5qvvV_460s.jpg', '', '', 0, '2019-08-09 12:23:44', '2019-08-09 12:23:44'),
(148, 1, 'aN0rVMb', 3, 1, 'Just another Brazilian wedding...', 'https://img-9gag-fun.9cache.com/photo/aN0rVMb_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aN0rVMb_460s.jpg', 0, '2019-08-09 12:23:44', '2019-08-09 12:23:44'),
(149, 1, 'a0R865z', 1, 1, 'I always feel like that', 'https://img-9gag-fun.9cache.com/photo/a0R865z_460s.jpg', '', '', 0, '2019-08-09 12:23:44', '2019-08-09 12:23:44'),
(150, 1, 'a2Rz0QD', 3, 1, 'Seemed like a good idea at the time', 'https://img-9gag-fun.9cache.com/photo/a2Rz0QD_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a2Rz0QD_460s.jpg', 0, '2019-08-09 12:23:44', '2019-08-09 12:23:44'),
(151, 1, 'a4RK5n1', 3, 1, 'Bye, have a beautiful time!', 'https://img-9gag-fun.9cache.com/photo/a4RK5n1_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a4RK5n1_460s.jpg', 0, '2019-08-09 12:23:44', '2019-08-09 12:23:44'),
(152, 1, 'aXj043d', 3, 1, 'It\'s just raining... Oh okay', 'https://img-9gag-fun.9cache.com/photo/aXj043d_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aXj043d_460s.jpg', 0, '2019-08-09 12:23:44', '2019-08-09 12:23:44'),
(153, 1, 'az1gMRK', 1, 1, 'Except porn', 'https://img-9gag-fun.9cache.com/photo/az1gMRK_460s.jpg', '', '', 0, '2019-08-09 12:23:44', '2019-08-09 12:23:44');

-- --------------------------------------------------------

--
-- Table structure for table `memes_likes`
--

CREATE TABLE `memes_likes` (
  `meme_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memes_likes`
--

INSERT INTO `memes_likes` (`meme_id`, `user_id`, `created_at`) VALUES
(1, 1, '2019-08-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(24, '2014_10_12_000000_create_users_table', 1),
(25, '2014_10_12_100000_create_password_resets_table', 1),
(26, '2019_05_11_220259_create_posts_table', 1),
(27, '2019_05_14_114356_create_srcs_table', 1),
(28, '2019_08_02_093405_create_memes_table', 2),
(30, '2019_08_02_202205_create_types_table', 3),
(31, '2019_08_09_103722_create_memes_likes_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `src_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `original_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `srcs`
--

CREATE TABLE `srcs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `request_items_quantity` smallint(5) NOT NULL,
  `filter_min_votes` smallint(5) UNSIGNED NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `srcs`
--

INSERT INTO `srcs` (`id`, `user_id`, `alias`, `name`, `url`, `request_items_quantity`, `filter_min_votes`, `favicon`, `created_at`, `updated_at`) VALUES
(1, 1, 'ninegag', '9gag', 'https://9gag.com', 10, 0, 'https://assets-9gag-fun.9cache.com/s/fab0aa49/deda323611ca8f5cb81c52136e6b0948fad550c6/static/dist/core/img/favicon.ico', '2019-08-02 06:33:27', '2019-08-08 14:02:09');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `alias` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `alias`) VALUES
(1, 'image'),
(2, 'text'),
(3, 'video');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@email.com', 'admin@email.com', NULL, '$2y$10$K4.ffDUI3Hitv/YGPRzUtufaCiZh4yysEoaoAT85kqWOQiffCj9VK', NULL, '2019-08-02 06:32:55', '2019-08-02 06:32:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `memes`
--
ALTER TABLE `memes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memes_likes`
--
ALTER TABLE `memes_likes`
  ADD KEY `memes_likes_meme_id_user_id_index` (`meme_id`,`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `srcs`
--
ALTER TABLE `srcs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `srcs_user_id_index` (`user_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
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
-- AUTO_INCREMENT for table `memes`
--
ALTER TABLE `memes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `srcs`
--
ALTER TABLE `srcs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
