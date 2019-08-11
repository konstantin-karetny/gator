-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 11, 2019 at 05:02 PM
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
  `name` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `preview` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memes`
--

INSERT INTO `memes` (`id`, `src_id`, `original_id`, `type_id`, `user_id`, `name`, `body`, `description`, `preview`, `permanent`, `created_at`, `updated_at`) VALUES
(1, 1, 'apmRWwE', 3, 0, 'Gator', 'https://img-9gag-fun.9cache.com/photo/apmRWwE_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/apmRWwE_460s.jpg', 1, '2019-04-30 21:00:00', '2019-04-30 21:00:00'),
(2, 1, 'aro12AB', 3, 0, 'Sploooooosh!', 'https://img-9gag-fun.9cache.com/photo/aro12AB_460sv.mp4', 'Description', 'https://img-9gag-fun.9cache.com/photo/aro12AB_460s.jpg', 1, '2019-08-02 12:57:12', '2019-08-09 21:03:12'),
(127, 1, 'a85LqV1', 3, 0, 'When the lake doesn’t spawn', 'https://img-9gag-fun.9cache.com/photo/a85LqV1_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a85LqV1_460s.jpg', 0, '2019-08-08 04:03:26', '2019-08-08 04:03:26'),
(128, 1, 'a5Re1GV', 3, 0, 'GREEN SHIRT GUY!! THE HERO WE NEED', 'https://img-9gag-fun.9cache.com/photo/a5Re1GV_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a5Re1GV_460s.jpg', 0, '2019-08-08 04:03:26', '2019-08-08 04:03:26'),
(129, 1, 'aY7NVeq', 1, 0, 'I dare you i double dare you motherf*ucker!', 'https://img-9gag-fun.9cache.com/photo/aY7NVeq_460s.jpg', '', '', 0, '2019-08-08 04:03:26', '2019-08-08 04:03:26'),
(130, 1, 'aZ7bDZQ', 3, 0, 'The cat will swim too.', 'https://img-9gag-fun.9cache.com/photo/aZ7bDZQ_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aZ7bDZQ_460s.jpg', 0, '2019-08-08 04:03:26', '2019-08-08 04:03:26'),
(131, 1, 'aL0R12g', 3, 0, 'Shoes built to expand and grow with less fortunate children.', 'https://img-9gag-fun.9cache.com/photo/aL0R12g_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aL0R12g_460s.jpg', 0, '2019-08-08 04:03:26', '2019-08-08 04:03:26'),
(132, 1, 'a5ReXGq', 1, 0, '$1200 a month rent on his own body', 'https://img-9gag-fun.9cache.com/photo/a5ReXGq_460s.jpg', '', '', 0, '2019-08-08 04:03:26', '2019-08-08 04:03:26'),
(133, 1, 'aDgAYQO', 3, 0, 'Fight looks so real.', 'https://img-9gag-fun.9cache.com/photo/aDgAYQO_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aDgAYQO_460s.jpg', 0, '2019-08-08 04:03:26', '2019-08-08 04:03:26'),
(134, 1, 'az1ge6j', 1, 0, 'The pay is almost in any job really bad and not worth. Also dont live to work, work to live. Every boss / manager is hungry for money.', 'https://img-9gag-fun.9cache.com/photo/az1ge6j_460s.jpg', '', '', 0, '2019-08-08 04:03:26', '2019-08-08 04:03:26'),
(135, 1, 'ag53odg', 3, 0, 'I can\'t stop watching this! :))', 'https://img-9gag-fun.9cache.com/photo/ag53odg_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/ag53odg_460s.jpg', 0, '2019-08-08 04:03:26', '2019-08-08 04:03:26'),
(138, 1, 'ao5Eymw', 1, 0, 'What happens when lightning strikes a flag on a golf course', 'https://img-9gag-fun.9cache.com/photo/ao5Eymw_460s.jpg', '', '', 0, '2019-08-08 04:05:51', '2019-08-08 04:05:51'),
(139, 1, 'aPRwMjB', 1, 0, 'Boss called me during my grandfather funeral to work, even after telling her where I was the day before', 'https://img-9gag-fun.9cache.com/photo/aPRwMjB_460s.jpg', '', '', 0, '2019-08-08 04:05:51', '2019-08-08 04:05:51'),
(140, 1, 'aMY2EpX', 3, 0, 'Man saves kitty from traffic', 'https://img-9gag-fun.9cache.com/photo/aMY2EpX_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aMY2EpX_460s.jpg', 0, '2019-08-08 07:43:50', '2019-08-08 07:43:50'),
(141, 1, 'aO0KxAD', 1, 0, 'Frank in Stein', 'https://img-9gag-fun.9cache.com/photo/aO0KxAD_460s.jpg', '', '', 0, '2019-08-08 07:46:12', '2019-08-08 07:46:12'),
(142, 1, 'aO0K8Br', 1, 0, 'This would be to funny, and a source of countless memes if they will make it happen', 'https://img-9gag-fun.9cache.com/photo/aO0K8Br_460s.jpg', '', '', 0, '2019-08-08 08:03:11', '2019-08-08 08:03:11'),
(143, 1, 'aAgR0No', 3, 0, 'Narcissism at Work', 'https://img-9gag-fun.9cache.com/photo/aAgR0No_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aAgR0No_460s.jpg', 0, '2019-08-08 08:03:11', '2019-08-08 08:03:11'),
(144, 1, 'a1RvVPG', 3, 0, 'Bow down to the Tsar, you b*tch!', 'https://img-9gag-fun.9cache.com/photo/a1RvVPG_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a1RvVPG_460s.jpg', 0, '2019-08-09 09:23:44', '2019-08-09 09:23:44'),
(145, 1, 'ax7dbWL', 1, 0, 'No words', 'https://img-9gag-fun.9cache.com/photo/ax7dbWL_460s.jpg', '', '', 0, '2019-08-09 09:23:44', '2019-08-09 09:23:44'),
(146, 1, 'aKdwW7j', 3, 0, 'The pure strength of this girl', 'https://img-9gag-fun.9cache.com/photo/aKdwW7j_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aKdwW7j_460s.jpg', 0, '2019-08-09 09:23:44', '2019-08-09 09:23:44'),
(147, 1, 'an5qvvV', 1, 0, 'No more glory', 'https://img-9gag-fun.9cache.com/photo/an5qvvV_460s.jpg', '', '', 0, '2019-08-09 09:23:44', '2019-08-09 09:23:44'),
(148, 1, 'aN0rVMb', 3, 0, 'Just another Brazilian wedding...', 'https://img-9gag-fun.9cache.com/photo/aN0rVMb_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aN0rVMb_460s.jpg', 0, '2019-08-09 09:23:44', '2019-08-09 09:23:44'),
(149, 1, 'a0R865z', 1, 0, 'I always feel like that', 'https://img-9gag-fun.9cache.com/photo/a0R865z_460s.jpg', '', '', 0, '2019-08-09 09:23:44', '2019-08-09 09:23:44'),
(150, 1, 'a2Rz0QD', 3, 0, 'Seemed like a good idea at the time', 'https://img-9gag-fun.9cache.com/photo/a2Rz0QD_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a2Rz0QD_460s.jpg', 0, '2019-08-09 09:23:44', '2019-08-09 09:23:44'),
(151, 1, 'a4RK5n1', 3, 0, 'Bye, have a beautiful time!', 'https://img-9gag-fun.9cache.com/photo/a4RK5n1_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a4RK5n1_460s.jpg', 0, '2019-08-09 09:23:44', '2019-08-09 09:23:44'),
(152, 1, 'aXj043d', 3, 0, 'It\'s just raining... Oh okay', 'https://img-9gag-fun.9cache.com/photo/aXj043d_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aXj043d_460s.jpg', 0, '2019-08-09 09:23:44', '2019-08-09 09:23:44'),
(153, 1, 'az1gMRK', 1, 0, 'Except porn', 'https://img-9gag-fun.9cache.com/photo/az1gMRK_460s.jpg', '', '', 0, '2019-08-09 09:23:44', '2019-08-09 09:23:44'),
(154, 1, 'a9RbXEm', 1, 0, 'This is so me', 'https://img-9gag-fun.9cache.com/photo/a9RbXEm_460s.jpg', '', '', 0, '2019-08-09 15:25:38', '2019-08-09 15:25:38'),
(155, 1, 'ae5jx8W', 3, 0, 'I\'ve been doing it wrong this whole time, and maybe you have too', 'https://img-9gag-fun.9cache.com/photo/ae5jx8W_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/ae5jx8W_460s.jpg', 0, '2019-08-09 15:25:38', '2019-08-09 15:25:38'),
(156, 1, 'ad50eOd', 3, 0, 'Wait For It...', 'https://img-9gag-fun.9cache.com/photo/ad50eOd_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/ad50eOd_460s.jpg', 0, '2019-08-09 15:25:38', '2019-08-09 15:25:38'),
(157, 1, 'an5qEyz', 3, 0, 'OMG ...!! .... Someone\'s orange ball!!', 'https://img-9gag-fun.9cache.com/photo/an5qEyz_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/an5qEyz_460s.jpg', 0, '2019-08-09 15:25:38', '2019-08-09 15:25:38'),
(158, 1, 'a0R81bL', 3, 0, 'THE Definition of Hangry', 'https://img-9gag-fun.9cache.com/photo/a0R81bL_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a0R81bL_460s.jpg', 0, '2019-08-09 15:25:38', '2019-08-09 15:25:38'),
(159, 1, 'a7wL9Qb', 3, 0, 'Wtf is happening', 'https://img-9gag-fun.9cache.com/photo/a7wL9Qb_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a7wL9Qb_460s.jpg', 0, '2019-08-09 15:25:38', '2019-08-09 15:25:38'),
(160, 1, 'a1Rv2gR', 3, 0, 'I’ve watched this 17 times now', 'https://img-9gag-fun.9cache.com/photo/a1Rv2gR_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a1Rv2gR_460s.jpg', 0, '2019-08-09 15:25:38', '2019-08-09 15:25:38'),
(161, 1, 'awo04NB', 3, 0, 'Who needs CGI when you\'re a literal badass', 'https://img-9gag-fun.9cache.com/photo/awo04NB_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/awo04NB_460s.jpg', 0, '2019-08-09 15:25:38', '2019-08-09 15:25:38'),
(162, 1, 'a85LwE6', 1, 0, 'Accuracy 100', 'https://img-9gag-fun.9cache.com/photo/a85LwE6_460s.jpg', '', '', 0, '2019-08-09 15:28:23', '2019-08-09 15:28:23'),
(163, 1, 'a3RPWQe', 3, 0, 'How Europeans picture Americans working out', 'https://img-9gag-fun.9cache.com/photo/a3RPWQe_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a3RPWQe_460s.jpg', 0, '2019-08-09 15:28:23', '2019-08-09 15:28:23'),
(171, 1, 'aR0w2OM', 3, 0, 'Getting ready for school in America', 'https://img-9gag-fun.9cache.com/photo/aR0w2OM_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aR0w2OM_460s.jpg', 0, '2019-08-09 17:45:35', '2019-08-09 17:45:35'),
(172, 1, 'a1RvL5Y', 3, 0, 'Try a meat-free burger they said...', 'https://img-9gag-fun.9cache.com/photo/a1RvL5Y_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a1RvL5Y_460s.jpg', 0, '2019-08-09 17:45:35', '2019-08-09 17:45:35'),
(173, 1, 'a1RvLEw', 3, 0, 'What if drone\'s battery runs out?', 'https://img-9gag-fun.9cache.com/photo/a1RvLEw_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a1RvLEw_460s.jpg', 0, '2019-08-09 17:45:35', '2019-08-09 17:45:35'),
(174, 1, 'avopv4E', 3, 0, 'Teacher Proposes with his Students in the Classroom', 'https://img-9gag-fun.9cache.com/photo/avopv4E_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/avopv4E_460s.jpg', 0, '2019-08-09 17:45:35', '2019-08-09 17:45:35'),
(175, 1, 'ag532zW', 3, 0, 'Capeless hero', 'https://img-9gag-fun.9cache.com/photo/ag532zW_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/ag532zW_460s.jpg', 0, '2019-08-09 17:45:35', '2019-08-09 17:45:35'),
(176, 1, 'awo04Lr', 3, 0, 'Baranton sisters', 'https://img-9gag-fun.9cache.com/photo/awo04Lr_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/awo04Lr_460s.jpg', 0, '2019-08-09 17:45:35', '2019-08-09 17:45:35'),
(177, 1, 'am5N18V', 1, 0, 'Guarded US personnel in a secured section of a nuclear facility in Germany. Heard shots from inside. They were shooting apples off their heads out of boredom.', 'https://img-9gag-fun.9cache.com/photo/am5N18V_460s.jpg', '', '', 0, '2019-08-09 17:45:36', '2019-08-09 17:45:36'),
(178, 1, 'ax7dYj1', 1, 0, 'God is a kid with a magnifying glass', 'https://img-9gag-fun.9cache.com/photo/ax7dYj1_460s.jpg', '', '', 0, '2019-08-09 21:03:35', '2019-08-09 21:03:35'),
(179, 1, 'abrXQ6p', 1, 0, 'Video games strike again', 'https://img-9gag-fun.9cache.com/photo/abrXQ6p_460s.jpg', '', '', 0, '2019-08-09 21:12:52', '2019-08-09 21:12:52'),
(180, 1, 'aL0Rd9M', 1, 0, 'Born as a middle age alcoholic man', 'https://img-9gag-fun.9cache.com/photo/aL0Rd9M_460s.jpg', '', '', 0, '2019-08-09 21:18:46', '2019-08-09 21:18:46'),
(181, 1, 'ao5EYen', 1, 0, 'Future serial killer mode activated', 'https://img-9gag-fun.9cache.com/photo/ao5EYen_460s.jpg', '', '', 0, '2019-08-09 21:32:56', '2019-08-09 21:32:56'),
(182, 1, 'aBgROwA', 3, 0, 'Picasso drawing on glass, 1949.', 'https://img-9gag-fun.9cache.com/photo/aBgROwA_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aBgROwA_460s.jpg', 0, '2019-08-09 21:37:05', '2019-08-09 21:37:05'),
(183, 1, 'a0R8M4n', 1, 0, 'We\'ve been tricked, we\'ve been backstabbed and we\'ve been, quite possibly, bamboozled', 'https://img-9gag-fun.9cache.com/photo/a0R8M4n_460s.jpg', '', '', 0, '2019-08-09 21:40:14', '2019-08-09 21:40:14'),
(184, 1, 'a7wLpK2', 1, 0, 'Hit a blunt..', 'https://img-9gag-fun.9cache.com/photo/a7wLpK2_460s.jpg', '', '', 0, '2019-08-09 21:49:11', '2019-08-09 21:49:11'),
(185, 1, 'aBgROGQ', 3, 0, 'Good boys doing a rescue', 'https://img-9gag-fun.9cache.com/photo/aBgROGQ_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aBgROGQ_460s.jpg', 0, '2019-08-09 22:48:13', '2019-08-09 22:48:13'),
(186, 1, 'a85LK7p', 3, 0, 'He doesn\'t', 'https://img-9gag-fun.9cache.com/photo/a85LK7p_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a85LK7p_460s.jpg', 0, '2019-08-09 22:48:13', '2019-08-09 22:48:13'),
(187, 1, 'az1gYQZ', 3, 0, 'Bin collectors surprise one of their favorite customers on her 100th birthday', 'https://img-9gag-fun.9cache.com/photo/az1gYQZ_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/az1gYQZ_460s.jpg', 0, '2019-08-09 22:48:13', '2019-08-09 22:48:13'),
(188, 1, 'ae5j7wO', 3, 0, 'Excuse me sir, have you seen any pic-i-nic baskets?', 'https://img-9gag-fun.9cache.com/photo/ae5j7wO_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/ae5j7wO_460s.jpg', 0, '2019-08-09 22:48:13', '2019-08-09 22:48:13'),
(189, 1, 'az1gzXq', 3, 1, 'All girls have a friend like this', 'https://img-9gag-fun.9cache.com/photo/az1gzXq_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/az1gzXq_460s.jpg', 0, '2019-08-11 00:11:15', '2019-08-11 00:11:15'),
(190, 1, 'arovDmp', 3, 1, 'It\'s like finding a unicorn.', 'https://img-9gag-fun.9cache.com/photo/arovDmp_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/arovDmp_460s.jpg', 0, '2019-08-11 00:11:15', '2019-08-11 00:11:15'),
(191, 1, 'ag53byw', 3, 1, 'Looking in the mirror', 'https://img-9gag-fun.9cache.com/photo/ag53byw_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/ag53byw_460s.jpg', 0, '2019-08-11 00:11:15', '2019-08-11 00:11:15'),
(192, 1, 'aZ7b49W', 3, 1, 'How to summon your pokemon', 'https://img-9gag-fun.9cache.com/photo/aZ7b49W_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aZ7b49W_460s.jpg', 0, '2019-08-11 00:11:15', '2019-08-11 00:11:15'),
(193, 1, 'aGgYqYK', 3, 1, 'Deaf woman hears for the first time and boyfriend proposes', 'https://img-9gag-fun.9cache.com/photo/aGgYqYK_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aGgYqYK_460s.jpg', 0, '2019-08-11 00:11:15', '2019-08-11 00:11:15'),
(194, 1, 'aBgRbox', 3, 1, 'These humans helping out an absent stranger who left their top down at a local farmers market.', 'https://img-9gag-fun.9cache.com/photo/aBgRbox_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aBgRbox_460s.jpg', 0, '2019-08-11 00:11:15', '2019-08-11 00:11:15'),
(195, 1, 'a1Rv8LD', 1, 1, 'Wholesome nerd and jock', 'https://img-9gag-fun.9cache.com/photo/a1Rv8LD_460s.jpg', '', '', 0, '2019-08-11 00:11:15', '2019-08-11 00:11:15'),
(196, 1, 'a6Nm30b', 3, 1, 'Yesterday a Tornado completely destroyed 2 Villages in Luxemburg (Europe) Luckily nobody Died', 'https://img-9gag-fun.9cache.com/photo/a6Nm30b_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a6Nm30b_460s.jpg', 0, '2019-08-11 00:11:15', '2019-08-11 00:11:15'),
(197, 1, 'ayo7A3r', 3, 1, 'Only in Russia', 'https://img-9gag-fun.9cache.com/photo/ayo7A3r_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/ayo7A3r_460s.jpg', 0, '2019-08-11 00:11:15', '2019-08-11 00:11:15'),
(198, 1, 'a2RzVKp', 3, 1, 'High Speed Pursuit in Los Angeles', 'https://img-9gag-fun.9cache.com/photo/a2RzVKp_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a2RzVKp_460s.jpg', 0, '2019-08-11 00:14:29', '2019-08-11 00:14:29'),
(199, 1, 'a9RbeB6', 3, 1, 'Pretty certain anything lower would be impossible', 'https://img-9gag-fun.9cache.com/photo/a9RbeB6_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a9RbeB6_460s.jpg', 0, '2019-08-11 00:19:31', '2019-08-11 00:19:31'),
(200, 1, 'aXj0zGv', 3, 1, 'How to hold your girlfriends purse in public', 'https://img-9gag-fun.9cache.com/photo/aXj0zGv_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aXj0zGv_460s.jpg', 0, '2019-08-11 00:19:31', '2019-08-11 00:19:31'),
(201, 1, 'ad50MMM', 1, 1, 'Huffington Post tweet fail.', 'https://img-9gag-fun.9cache.com/photo/ad50MMM_460s.jpg', '', '', 0, '2019-08-11 00:20:02', '2019-08-11 00:20:02'),
(202, 1, 'awo0DEQ', 3, 1, 'Pupper finds the comfiest spot to lay down', 'https://img-9gag-fun.9cache.com/photo/awo0DEQ_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/awo0DEQ_460s.jpg', 0, '2019-08-11 00:26:40', '2019-08-11 00:26:40'),
(203, 1, 'ad50ME2', 1, 1, 'Zoey is a good girl', 'https://img-9gag-fun.9cache.com/photo/ad50ME2_460s.jpg', '', '', 0, '2019-08-11 00:36:13', '2019-08-11 00:36:13'),
(204, 1, 'aMY267P', 1, 1, 'Its f**king raw', 'https://img-9gag-fun.9cache.com/photo/aMY267P_460s.jpg', '', '', 0, '2019-08-11 00:40:53', '2019-08-11 00:40:53'),
(205, 1, 'aZ7bK7V', 3, 1, 'The aerodynamics of a cheeseburger', 'https://img-9gag-fun.9cache.com/photo/aZ7bK7V_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aZ7bK7V_460s.jpg', 0, '2019-08-11 00:43:19', '2019-08-11 00:43:19'),
(206, 1, 'aBgRMNN', 1, 1, 'This Is the Only Disney Live Action i Wanna See', 'https://img-9gag-fun.9cache.com/photo/aBgRMNN_460s.jpg', '', '', 0, '2019-08-11 00:44:56', '2019-08-11 00:44:56'),
(207, 1, 'am5NObv', 1, 1, 'Long before color-sensitive films were invented, Russian photographer Prokudin-Gorsky used to take 3 individual black-and-white photos, each with a filter (Red, Green, Blue) to create high-quality pictures in full color. This self portrait of him is 107 years old', 'https://img-9gag-fun.9cache.com/photo/am5NObv_460s.jpg', '', '', 0, '2019-08-11 00:46:44', '2019-08-11 00:46:44'),
(208, 1, 'am5NyR6', 3, 1, 'Behind the scenes of \"The Grand Budapest Hotel\"', 'https://img-9gag-fun.9cache.com/photo/am5NyR6_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/am5NyR6_460s.jpg', 0, '2019-08-11 01:12:20', '2019-08-11 01:12:20'),
(209, 1, 'aN0rXeb', 3, 1, 'This is how Mr. Bean turns off the light every night', 'https://img-9gag-fun.9cache.com/photo/aN0rXeb_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aN0rXeb_460s.jpg', 0, '2019-08-11 01:12:38', '2019-08-11 01:12:38'),
(210, 1, 'aEgvjBG', 1, 1, 'A lovely human a world full of not some lovely humans', 'https://img-9gag-fun.9cache.com/photo/aEgvjBG_460s.jpg', '', '', 0, '2019-08-11 01:12:38', '2019-08-11 01:12:38'),
(211, 1, 'aDgAPBB', 3, 1, 'Was scouting some summer destinations when', 'https://img-9gag-fun.9cache.com/photo/aDgAPBB_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aDgAPBB_460s.jpg', 0, '2019-08-11 01:12:39', '2019-08-11 01:12:39'),
(212, 1, 'aPRwVPR', 1, 1, 'Rockets shot from Gaza (left) are met with intercepting rockets from the Iron Dome (right). Blurring the line between science fiction and reality.', 'https://img-9gag-fun.9cache.com/photo/aPRwVPR_460s.jpg', '', '', 0, '2019-08-11 01:12:39', '2019-08-11 01:12:39'),
(213, 1, 'a9Rben0', 3, 1, 'Some leather crafting.', 'https://img-9gag-fun.9cache.com/photo/a9Rben0_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a9Rben0_460s.jpg', 0, '2019-08-11 01:12:39', '2019-08-11 01:12:39'),
(214, 1, 'aGgYr3n', 1, 1, 'Viper dogfish sharks have extendable jaws.', 'https://img-9gag-fun.9cache.com/photo/aGgYr3n_460s.jpg', '', '', 0, '2019-08-11 01:12:39', '2019-08-11 01:12:39'),
(215, 1, 'a9Rbe2o', 3, 1, 'A sweet, older gentleman', 'https://img-9gag-fun.9cache.com/photo/a9Rbe2o_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a9Rbe2o_460s.jpg', 0, '2019-08-11 01:12:39', '2019-08-11 01:12:39'),
(216, 1, 'ae5jy8v', 1, 1, 'Everybody needs a dance', 'https://img-9gag-fun.9cache.com/photo/ae5jy8v_460s.jpg', '', '', 0, '2019-08-11 01:12:39', '2019-08-11 01:12:39'),
(217, 1, 'awo09Lx', 3, 1, 'Who can relate', 'https://img-9gag-fun.9cache.com/photo/awo09Lx_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/awo09Lx_460s.jpg', 0, '2019-08-11 01:12:39', '2019-08-11 01:12:39'),
(218, 1, 'aV0z8KK', 3, 1, 'Now that\'s dirty', 'https://img-9gag-fun.9cache.com/photo/aV0z8KK_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aV0z8KK_460s.jpg', 0, '2019-08-11 01:12:39', '2019-08-11 01:12:39'),
(219, 1, 'a2Rz9Kd', 1, 1, 'At Her 18th Birthday, Her Pants Can Be As Low As She Wants', 'https://img-9gag-fun.9cache.com/photo/a2Rz9Kd_460s.jpg', '', '', 0, '2019-08-11 01:12:39', '2019-08-11 01:12:39'),
(220, 1, 'a7wL6gA', 1, 1, 'Advantages and Disadvantages', 'https://img-9gag-fun.9cache.com/photo/a7wL6gA_460s.jpg', '', '', 0, '2019-08-11 01:12:39', '2019-08-11 01:12:39'),
(221, 1, 'aMY20jx', 1, 1, 'Hope you had a rough day', 'https://img-9gag-fun.9cache.com/photo/aMY20jx_460s.jpg', '', '', 0, '2019-08-11 01:12:39', '2019-08-11 01:12:39'),
(222, 1, 'aAgRLAL', 3, 1, '35 workdays, hundreds of hours work over 3 months', 'https://img-9gag-fun.9cache.com/photo/aAgRLAL_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aAgRLAL_460s.jpg', 0, '2019-08-11 01:12:39', '2019-08-11 01:12:39'),
(223, 1, 'aKdwX5Q', 3, 1, 'The council will decide your fate', 'https://img-9gag-fun.9cache.com/photo/aKdwX5Q_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aKdwX5Q_460s.jpg', 0, '2019-08-11 01:12:39', '2019-08-11 01:12:39'),
(224, 1, 'aN0rX16', 3, 1, 'Smooth criminal', 'https://img-9gag-fun.9cache.com/photo/aN0rX16_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aN0rX16_460s.jpg', 0, '2019-08-11 01:12:39', '2019-08-11 01:12:39'),
(225, 1, 'aGgY6dK', 1, 1, 'Protests in Moscow for fair elections right now.', 'https://img-9gag-fun.9cache.com/photo/aGgY6dK_460s.jpg', '', '', 0, '2019-08-11 01:12:39', '2019-08-11 01:12:39'),
(226, 1, 'aqg9Vop', 3, 1, 'When life isn\'t working out', 'https://img-9gag-fun.9cache.com/photo/aqg9Vop_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aqg9Vop_460s.jpg', 0, '2019-08-11 01:12:39', '2019-08-11 01:12:39'),
(227, 1, 'aV0z8zO', 1, 1, 'You don\'t need StackOverflow!', 'https://img-9gag-fun.9cache.com/photo/aV0z8zO_460s.jpg', '', '', 0, '2019-08-11 01:12:39', '2019-08-11 01:12:39'),
(228, 1, 'aR0wGDQ', 3, 1, 'When you skip the tutorial...', 'https://img-9gag-fun.9cache.com/photo/aR0wGDQ_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aR0wGDQ_460s.jpg', 0, '2019-08-11 01:12:39', '2019-08-11 01:12:39'),
(229, 1, 'a1Rv8PP', 1, 1, 'Sweet gesture', 'https://img-9gag-fun.9cache.com/photo/a1Rv8PP_460s.jpg', '', '', 0, '2019-08-11 01:12:39', '2019-08-11 01:12:39'),
(230, 1, 'a85L956', 3, 1, 'Eeeeeeeeeeee', 'https://img-9gag-fun.9cache.com/photo/a85L956_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a85L956_460s.jpg', 0, '2019-08-11 01:12:39', '2019-08-11 01:12:39'),
(231, 1, 'ao5EGQx', 1, 1, 'Dnd with friends, projector and maps on inkarnate.', 'https://img-9gag-fun.9cache.com/photo/ao5EGQx_460s.jpg', '', '', 0, '2019-08-11 01:12:39', '2019-08-11 01:12:39'),
(232, 1, 'a4RKmeA', 1, 1, 'BIG BABY', 'https://img-9gag-fun.9cache.com/photo/a4RKmeA_460s.jpg', '', '', 0, '2019-08-11 01:12:39', '2019-08-11 01:12:39'),
(233, 1, 'aAgRLeg', 3, 1, 'Adapting to your environment', 'https://img-9gag-fun.9cache.com/photo/aAgRLeg_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aAgRLeg_460s.jpg', 0, '2019-08-11 01:12:40', '2019-08-11 01:12:40'),
(234, 1, 'aV0z1p2', 3, 1, 'Wind turbines are pretty big... (human for scale)', 'https://img-9gag-fun.9cache.com/photo/aV0z1p2_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aV0z1p2_460s.jpg', 0, '2019-08-11 01:12:40', '2019-08-11 01:12:40'),
(235, 1, 'a9RbeAK', 1, 1, 'Adulting sucks', 'https://img-9gag-fun.9cache.com/photo/a9RbeAK_460s.jpg', '', '', 0, '2019-08-11 01:12:40', '2019-08-11 01:12:40'),
(236, 1, 'aBgRMVO', 1, 1, 'Makes sense', 'https://img-9gag-fun.9cache.com/photo/aBgRMVO_460s.jpg', '', '', 0, '2019-08-11 01:12:40', '2019-08-11 01:12:40'),
(237, 1, 'aMY20WP', 3, 1, 'Well… the rains gotta stop somewhere', 'https://img-9gag-fun.9cache.com/photo/aMY20WP_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aMY20WP_460s.jpg', 0, '2019-08-11 01:12:40', '2019-08-11 01:12:40'),
(238, 1, 'am5NOWj', 3, 1, 'After 3 noise complaints, the Cops said they could stay if they made a half court shot.', 'https://img-9gag-fun.9cache.com/photo/am5NOWj_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/am5NOWj_460s.jpg', 0, '2019-08-11 01:12:40', '2019-08-11 01:12:40'),
(239, 1, 'aY7NBKq', 1, 1, 'Water into wine', 'https://img-9gag-fun.9cache.com/photo/aY7NBKq_460s.jpg', '', '', 0, '2019-08-11 01:12:40', '2019-08-11 01:12:40'),
(240, 1, 'aPRwVqB', 1, 1, 'Really made me smile :)', 'https://img-9gag-fun.9cache.com/photo/aPRwVqB_460s.jpg', '', '', 0, '2019-08-11 01:12:40', '2019-08-11 01:12:40'),
(241, 1, 'aO0KO0y', 1, 1, 'Who laughs last', 'https://img-9gag-fun.9cache.com/photo/aO0KO0y_460s.jpg', '', '', 0, '2019-08-11 01:12:40', '2019-08-11 01:12:40'),
(242, 1, 'aAgRq52', 1, 1, 'Kinda deep', 'https://img-9gag-fun.9cache.com/photo/aAgRq52_460s.jpg', '', '', 0, '2019-08-11 01:12:40', '2019-08-11 01:12:40'),
(243, 1, 'a1RvByG', 1, 1, 'Best game ever', 'https://img-9gag-fun.9cache.com/photo/a1RvByG_460s.jpg', '', '', 0, '2019-08-11 01:12:40', '2019-08-11 01:12:40'),
(244, 1, 'aY7NByw', 3, 1, 'Ok ... Enough of Internet for today', 'https://img-9gag-fun.9cache.com/photo/aY7NByw_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aY7NByw_460s.jpg', 0, '2019-08-11 01:12:40', '2019-08-11 01:12:40'),
(245, 1, 'avop43E', 3, 1, 'The level of zen this pupper is experiencing must be out of this world', 'https://img-9gag-fun.9cache.com/photo/avop43E_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/avop43E_460s.jpg', 0, '2019-08-11 01:12:40', '2019-08-11 01:12:40'),
(246, 1, 'aWEQeLn', 1, 1, '11/10 good boi', 'https://img-9gag-fun.9cache.com/photo/aWEQeLn_460s.jpg', '', '', 0, '2019-08-11 01:12:40', '2019-08-11 01:12:40'),
(247, 1, 'aXj0m66', 3, 1, 'The priest\'s way', 'https://img-9gag-fun.9cache.com/photo/aXj0m66_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aXj0m66_460s.jpg', 0, '2019-08-11 01:12:40', '2019-08-11 01:12:40'),
(248, 1, 'a2RzV5w', 1, 1, 'You better laugh', 'https://img-9gag-fun.9cache.com/photo/a2RzV5w_460s.jpg', '', '', 0, '2019-08-11 01:12:40', '2019-08-11 01:12:40'),
(249, 1, 'ad50rGZ', 3, 1, 'Let me just make sure this manhole is secure...', 'https://img-9gag-fun.9cache.com/photo/ad50rGZ_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/ad50rGZ_460s.jpg', 0, '2019-08-11 01:12:40', '2019-08-11 01:12:40'),
(250, 1, 'aR0w8rj', 1, 1, 'A cool story for today', 'https://img-9gag-fun.9cache.com/photo/aR0w8rj_460s.jpg', '', '', 0, '2019-08-11 01:12:40', '2019-08-11 01:12:40'),
(251, 1, 'am5NOQ4', 1, 1, '140 years ago', 'https://img-9gag-fun.9cache.com/photo/am5NOQ4_460s.jpg', '', '', 0, '2019-08-11 01:12:40', '2019-08-11 01:12:40'),
(252, 1, 'a7wLmvz', 3, 1, 'Ready, set, lift!', 'https://img-9gag-fun.9cache.com/photo/a7wLmvz_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a7wLmvz_460s.jpg', 0, '2019-08-11 01:12:40', '2019-08-11 01:12:40'),
(253, 1, 'aAgRLK0', 1, 1, 'Not today', 'https://img-9gag-fun.9cache.com/photo/aAgRLK0_460s.jpg', '', '', 0, '2019-08-11 01:12:40', '2019-08-11 01:12:40'),
(254, 1, 'ag536br', 1, 1, 'Mission impossible', 'https://img-9gag-fun.9cache.com/photo/ag536br_460s.jpg', '', '', 0, '2019-08-11 01:12:40', '2019-08-11 01:12:40'),
(255, 1, 'aEgvNpx', 3, 1, 'Baby duck reunited with siblings after being rehabbed.', 'https://img-9gag-fun.9cache.com/photo/aEgvNpx_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aEgvNpx_460s.jpg', 0, '2019-08-11 01:12:40', '2019-08-11 01:12:40'),
(256, 1, 'an5q81b', 1, 1, 'First step: Get a job', 'https://img-9gag-fun.9cache.com/photo/an5q81b_460s.jpg', '', '', 0, '2019-08-11 01:12:41', '2019-08-11 01:12:41'),
(257, 1, 'aMY2DLG', 3, 1, 'I don\'t think it was worth the shot.', 'https://img-9gag-fun.9cache.com/photo/aMY2DLG_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aMY2DLG_460s.jpg', 0, '2019-08-11 01:12:41', '2019-08-11 01:12:41'),
(258, 1, 'aV0z4dn', 1, 1, 'Every day', 'https://img-9gag-fun.9cache.com/photo/aV0z4dn_460s.jpg', '', '', 0, '2019-08-11 01:12:41', '2019-08-11 01:12:41'),
(259, 1, 'a85LQWQ', 1, 1, 'He speaks the Truth', 'https://img-9gag-fun.9cache.com/photo/a85LQWQ_460s.jpg', '', '', 0, '2019-08-11 01:12:41', '2019-08-11 01:12:41'),
(260, 1, 'avopXDb', 3, 1, 'Daily reminder to keep sunroof shut in case of typhoon', 'https://img-9gag-fun.9cache.com/photo/avopXDb_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/avopXDb_460s.jpg', 0, '2019-08-11 01:12:41', '2019-08-11 01:12:41'),
(261, 1, 'aKdwnGj', 1, 1, 'Nice way by CZECH REPUBLIC to stop people who urinate anywhere. Other countries too implement the same.', 'https://img-9gag-fun.9cache.com/photo/aKdwnGj_460s.jpg', '', '', 0, '2019-08-11 01:12:41', '2019-08-11 01:12:41'),
(262, 1, 'aBgRbRN', 1, 1, 'Squeeze', 'https://img-9gag-fun.9cache.com/photo/aBgRbRN_460s.jpg', '', '', 0, '2019-08-11 01:12:41', '2019-08-11 01:12:41'),
(263, 1, 'a6Nm33q', 1, 1, 'Classic', 'https://img-9gag-fun.9cache.com/photo/a6Nm33q_460s.jpg', '', '', 0, '2019-08-11 01:12:41', '2019-08-11 01:12:41'),
(264, 1, 'ao5EG5x', 1, 1, 'He looks excited', 'https://img-9gag-fun.9cache.com/photo/ao5EG5x_460s.jpg', '', '', 0, '2019-08-11 01:12:41', '2019-08-11 01:12:41'),
(265, 1, 'aDgArzZ', 3, 1, 'This waitress', 'https://img-9gag-fun.9cache.com/photo/aDgArzZ_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aDgArzZ_460s.jpg', 0, '2019-08-11 01:12:41', '2019-08-11 01:12:41'),
(266, 1, 'aj5YMPR', 1, 1, 'What does redstone taste like?', 'https://img-9gag-fun.9cache.com/photo/aj5YMPR_460s.jpg', '', '', 0, '2019-08-11 01:12:41', '2019-08-11 01:12:41'),
(267, 1, 'aBgRjgA', 1, 1, 'Finally giving it a try!', 'https://img-9gag-fun.9cache.com/photo/aBgRjgA_460s.jpg', '', '', 0, '2019-08-11 01:12:41', '2019-08-11 01:12:41'),
(268, 1, 'a9Rb4jZ', 3, 1, 'Kitten gets overwhelmed with kisses', 'https://img-9gag-fun.9cache.com/photo/a9Rb4jZ_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a9Rb4jZ_460s.jpg', 0, '2019-08-11 01:12:41', '2019-08-11 01:12:41'),
(269, 1, 'avopBYX', 1, 1, 'Big boned, motherf*cker', 'https://img-9gag-fun.9cache.com/photo/avopBYX_460s.jpg', '', '', 0, '2019-08-11 01:12:41', '2019-08-11 01:12:41'),
(270, 1, 'aj5Y35G', 1, 1, 'If they made a live action chess movie', 'https://img-9gag-fun.9cache.com/photo/aj5Y35G_460s.jpg', '', '', 0, '2019-08-11 01:12:41', '2019-08-11 01:12:41'),
(271, 1, 'arovr57', 3, 1, 'The power of Erosion!', 'https://img-9gag-fun.9cache.com/photo/arovr57_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/arovr57_460s.jpg', 0, '2019-08-11 01:12:41', '2019-08-11 01:12:41'),
(272, 1, 'aWEQPjn', 3, 1, 'Anna Zhilyaeva‘s 3D artwork satisfies me.', 'https://img-9gag-fun.9cache.com/photo/aWEQPjn_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aWEQPjn_460s.jpg', 0, '2019-08-11 01:12:41', '2019-08-11 01:12:41'),
(273, 1, 'a2RzAeY', 1, 1, 'Jeffrey Epstein’s prison guards calling for an ambulance (2019)', 'https://img-9gag-fun.9cache.com/photo/a2RzAeY_460s.jpg', '', '', 0, '2019-08-11 01:12:41', '2019-08-11 01:12:41'),
(274, 1, 'aL0RNZ6', 3, 1, 'Waiting for luggage', 'https://img-9gag-fun.9cache.com/photo/aL0RNZ6_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aL0RNZ6_460s.jpg', 0, '2019-08-11 01:12:41', '2019-08-11 01:12:41'),
(275, 1, 'a5ReyZO', 3, 1, 'Little rat trying to not drown.', 'https://img-9gag-fun.9cache.com/photo/a5ReyZO_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a5ReyZO_460s.jpg', 0, '2019-08-11 01:12:41', '2019-08-11 01:12:41'),
(276, 1, 'aj5YGzx', 3, 1, 'Sg1 fans', 'https://img-9gag-fun.9cache.com/photo/aj5YGzx_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aj5YGzx_460s.jpg', 0, '2019-08-11 01:12:41', '2019-08-11 01:12:41'),
(277, 1, 'aWEQdr3', 1, 1, 'Video Games don\'t cause violence', 'https://img-9gag-fun.9cache.com/photo/aWEQdr3_460s.jpg', '', '', 0, '2019-08-11 01:12:41', '2019-08-11 01:12:41'),
(278, 1, 'aKdwnLQ', 3, 1, 'Big Doggo love.', 'https://img-9gag-fun.9cache.com/photo/aKdwnLQ_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aKdwnLQ_460s.jpg', 0, '2019-08-11 01:12:42', '2019-08-11 01:12:42'),
(279, 1, 'am5NO66', 1, 1, 'I\'m 0.2% Blackanese', 'https://img-9gag-fun.9cache.com/photo/am5NO66_460s.jpg', '', '', 0, '2019-08-11 01:12:42', '2019-08-11 01:12:42'),
(280, 1, 'ap5EnMD', 1, 1, 'Waiting for the final season', 'https://img-9gag-fun.9cache.com/photo/ap5EnMD_460s.jpg', '', '', 0, '2019-08-11 01:12:42', '2019-08-11 01:12:42'),
(281, 1, 'a9RbZO0', 1, 1, 'Racism is not a one way road. We can’t babysit a race forever.', 'https://img-9gag-fun.9cache.com/photo/a9RbZO0_460s.jpg', '', '', 0, '2019-08-11 01:12:42', '2019-08-11 01:12:42'),
(282, 1, 'a0R8Dwq', 1, 1, 'This guy deserves more attention than he does', 'https://img-9gag-fun.9cache.com/photo/a0R8Dwq_460s.jpg', '', '', 0, '2019-08-11 01:12:42', '2019-08-11 01:12:42'),
(283, 1, 'ad50rb2', 1, 1, 'Finding the bright side...', 'https://img-9gag-fun.9cache.com/photo/ad50rb2_460s.jpg', '', '', 0, '2019-08-11 01:12:42', '2019-08-11 01:12:42'),
(284, 1, 'arov967', 3, 1, 'Episode II: Attack of the Fettuccini', 'https://img-9gag-fun.9cache.com/photo/arov967_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/arov967_460s.jpg', 0, '2019-08-11 01:12:42', '2019-08-11 01:12:42'),
(285, 1, 'a7wLm0A', 1, 1, 'Do you think this would work? At least a little bit?', 'https://img-9gag-fun.9cache.com/photo/a7wLm0A_460s.jpg', '', '', 0, '2019-08-11 01:12:42', '2019-08-11 01:12:42'),
(286, 1, 'a85LnQV', 1, 1, 'This timeless picture of Sharon Tate was taken more than 50 years ago', 'https://img-9gag-fun.9cache.com/photo/a85LnQV_460s.jpg', '', '', 0, '2019-08-11 01:12:42', '2019-08-11 01:12:42'),
(287, 1, 'aN0r27w', 3, 1, 'This is some shortcut Anakin, we went completely the other way!', 'https://img-9gag-fun.9cache.com/photo/aN0r27w_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aN0r27w_460s.jpg', 0, '2019-08-11 01:12:42', '2019-08-11 01:12:42'),
(288, 1, 'a9RbNvm', 1, 1, 'On dick pics', 'https://img-9gag-fun.9cache.com/photo/a9RbNvm_460s.jpg', '', '', 0, '2019-08-11 01:12:42', '2019-08-11 01:12:42'),
(289, 1, 'aXj0Gyv', 3, 1, 'Bye, bye', 'https://img-9gag-fun.9cache.com/photo/aXj0Gyv_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aXj0Gyv_460s.jpg', 0, '2019-08-11 01:12:42', '2019-08-11 01:12:42'),
(290, 1, 'aXj0QVV', 1, 1, 'Mommy look!', 'https://img-9gag-fun.9cache.com/photo/aXj0QVV_460s.jpg', '', '', 0, '2019-08-11 01:12:42', '2019-08-11 01:12:42'),
(291, 1, 'a1RvBx6', 3, 1, 'Mission Impossible', 'https://img-9gag-fun.9cache.com/photo/a1RvBx6_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a1RvBx6_460s.jpg', 1, '2019-08-11 01:13:41', '2019-08-11 01:21:43'),
(292, 1, 'arov0j5', 1, 1, 'So satisfying', 'https://img-9gag-fun.9cache.com/photo/arov0j5_460s.jpg', '', '', 0, '2019-08-11 01:44:02', '2019-08-11 01:44:02'),
(293, 1, 'ao5E6o3', 1, 1, 'Secretarybird', 'https://img-9gag-fun.9cache.com/photo/ao5E6o3_460s.jpg', '', '', 0, '2019-08-11 02:00:41', '2019-08-11 02:00:41'),
(294, 1, 'aMY27QG', 3, 1, 'A man’s head is blessed with the shine of the gods', 'https://img-9gag-fun.9cache.com/photo/aMY27QG_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aMY27QG_460s.jpg', 0, '2019-08-11 02:15:59', '2019-08-11 02:15:59'),
(295, 1, 'aDgALe7', 3, 1, 'Angry woman knocking over scooters', 'https://img-9gag-fun.9cache.com/photo/aDgALe7_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aDgALe7_460s.jpg', 0, '2019-08-11 02:19:13', '2019-08-11 02:19:13'),
(296, 1, 'ayo7w3q', 1, 1, 'You can see it in his eyes', 'https://img-9gag-fun.9cache.com/photo/ayo7w3q_460s.jpg', '', '', 0, '2019-08-11 08:09:37', '2019-08-11 08:09:37'),
(297, 1, 'aDgA9BG', 3, 1, 'Japan Escalator Etiquette', 'https://img-9gag-fun.9cache.com/photo/aDgA9BG_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aDgA9BG_460s.jpg', 0, '2019-08-11 08:09:38', '2019-08-11 08:09:38'),
(298, 1, 'ax7dKrM', 1, 1, 'I\'ll take option number four', 'https://img-9gag-fun.9cache.com/photo/ax7dKrM_460s.jpg', '', '', 0, '2019-08-11 08:09:38', '2019-08-11 08:09:38'),
(299, 1, 'a9Rb0zZ', 3, 1, 'When dad is in charge of bath time!', 'https://img-9gag-fun.9cache.com/photo/a9Rb0zZ_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a9Rb0zZ_460s.jpg', 0, '2019-08-11 08:09:38', '2019-08-11 08:09:38'),
(300, 1, 'ad50wLd', 1, 1, 'Respek wahmen', 'https://img-9gag-fun.9cache.com/photo/ad50wLd_460s.jpg', '', '', 0, '2019-08-11 08:09:38', '2019-08-11 08:09:38'),
(301, 1, 'az1gwPN', 3, 1, 'You came to the wrong neighbourhood, Karen!', 'https://img-9gag-fun.9cache.com/photo/az1gwPN_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/az1gwPN_460s.jpg', 0, '2019-08-11 08:09:38', '2019-08-11 08:09:38'),
(302, 1, 'aj5Yvpg', 3, 1, 'No ceiling tiles were harmed in the making of this video', 'https://img-9gag-fun.9cache.com/photo/aj5Yvpg_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aj5Yvpg_460s.jpg', 0, '2019-08-11 08:09:38', '2019-08-11 08:09:38'),
(303, 1, 'az1gwrm', 3, 1, 'Hype Up', 'https://img-9gag-fun.9cache.com/photo/az1gwrm_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/az1gwrm_460s.jpg', 0, '2019-08-11 08:09:38', '2019-08-11 08:09:38'),
(304, 1, 'aY7N5wm', 1, 1, 'Nope, sure wasn\'t.', 'https://img-9gag-fun.9cache.com/photo/aY7N5wm_460s.jpg', '', '', 0, '2019-08-11 08:09:38', '2019-08-11 08:09:38'),
(305, 1, 'aj5Yvvw', 3, 1, 'Talking about bad ideas...', 'https://img-9gag-fun.9cache.com/photo/aj5Yvvw_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aj5Yvvw_460s.jpg', 0, '2019-08-11 08:09:38', '2019-08-11 08:09:38'),
(306, 1, 'a3RPrG7', 1, 1, 'Epstein\'s watch', 'https://img-9gag-fun.9cache.com/photo/a3RPrG7_460s.jpg', '', '', 0, '2019-08-11 08:13:16', '2019-08-11 08:13:16'),
(307, 1, 'aO0KEz6', 3, 1, 'Inteligent guy', 'https://img-9gag-fun.9cache.com/photo/aO0KEz6_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aO0KEz6_460s.jpg', 0, '2019-08-11 08:13:16', '2019-08-11 08:13:16'),
(308, 1, 'aj5YwNQ', 1, 1, 'Canadian eatery puts tiny chairs around the little \'table\' that comes inside pizza boxes.', 'https://img-9gag-fun.9cache.com/photo/aj5YwNQ_460s.jpg', '', '', 0, '2019-08-11 08:13:16', '2019-08-11 08:13:16'),
(309, 1, 'ap5E7G9', 3, 1, 'Well... Done...', 'https://img-9gag-fun.9cache.com/photo/ap5E7G9_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/ap5E7G9_460s.jpg', 0, '2019-08-11 08:13:16', '2019-08-11 08:13:16'),
(310, 1, 'ag539PW', 3, 1, 'Pupper learning to use puppy dog eyes', 'https://img-9gag-fun.9cache.com/photo/ag539PW_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/ag539PW_460s.jpg', 0, '2019-08-11 08:13:17', '2019-08-11 08:13:17'),
(311, 1, 'aqg9Mjj', 1, 1, 'So thats why they do that leg up thing.', 'https://img-9gag-fun.9cache.com/photo/aqg9Mjj_460s.jpg', '', '', 0, '2019-08-11 08:13:17', '2019-08-11 08:13:17'),
(312, 1, 'ayo7wnW', 3, 1, 'Witness an apex predator in action', 'https://img-9gag-fun.9cache.com/photo/ayo7wnW_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/ayo7wnW_460s.jpg', 0, '2019-08-11 08:13:17', '2019-08-11 08:13:17'),
(313, 1, 'aZ7bXPX', 1, 1, 'IT guys', 'https://img-9gag-fun.9cache.com/photo/aZ7bXPX_460s.jpg', '', '', 0, '2019-08-11 08:13:17', '2019-08-11 08:13:17'),
(314, 1, 'aXj01Wb', 3, 1, 'Unlimited joy', 'https://img-9gag-fun.9cache.com/photo/aXj01Wb_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aXj01Wb_460s.jpg', 0, '2019-08-11 08:13:17', '2019-08-11 08:13:17'),
(315, 1, 'aY7N607', 3, 1, 'Good night', 'https://img-9gag-fun.9cache.com/photo/aY7N607_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aY7N607_460s.jpg', 0, '2019-08-11 08:13:17', '2019-08-11 08:13:17'),
(316, 1, 'an5qwbn', 3, 1, 'Amazing 3D print', 'https://img-9gag-fun.9cache.com/photo/an5qwbn_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/an5qwbn_460s.jpg', 0, '2019-08-11 08:13:17', '2019-08-11 08:13:17'),
(317, 1, 'abrXDBE', 1, 1, 'Lessons', 'https://img-9gag-fun.9cache.com/photo/abrXDBE_460s.jpg', '', '', 0, '2019-08-11 08:13:17', '2019-08-11 08:13:17'),
(318, 1, 'a6Nm6VL', 3, 1, 'Maybe a little over the top', 'https://img-9gag-fun.9cache.com/photo/a6Nm6VL_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a6Nm6VL_460s.jpg', 0, '2019-08-11 08:13:17', '2019-08-11 08:13:17'),
(319, 1, 'a0R8gZq', 3, 1, 'Awesome new VR', 'https://img-9gag-fun.9cache.com/photo/a0R8gZq_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a0R8gZq_460s.jpg', 0, '2019-08-11 08:13:17', '2019-08-11 08:13:17'),
(320, 1, 'aO0K57N', 1, 1, 'Nathan w pyle', 'https://img-9gag-fun.9cache.com/photo/aO0K57N_460s.jpg', '', '', 0, '2019-08-11 08:13:17', '2019-08-11 08:13:17'),
(321, 1, 'ap5EwKW', 1, 1, 'Sorry for the wall of text, I just needed to vent', 'https://img-9gag-fun.9cache.com/photo/ap5EwKW_460s.jpg', '', '', 0, '2019-08-11 08:13:18', '2019-08-11 08:13:18'),
(322, 1, 'arov0wd', 3, 1, 'Stripper magician', 'https://img-9gag-fun.9cache.com/photo/arov0wd_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/arov0wd_460s.jpg', 0, '2019-08-11 08:13:18', '2019-08-11 08:13:18'),
(323, 1, 'ao5EwZm', 3, 1, 'Cloud gets caught almost falling asleep', 'https://img-9gag-fun.9cache.com/photo/ao5EwZm_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/ao5EwZm_460s.jpg', 0, '2019-08-11 08:13:18', '2019-08-11 08:13:18'),
(324, 1, 'ad50wXj', 1, 1, '9gag right now', 'https://img-9gag-fun.9cache.com/photo/ad50wXj_460s.jpg', '', '', 0, '2019-08-11 08:13:18', '2019-08-11 08:13:18'),
(325, 1, 'aQ1PKjr', 3, 1, 'Going over a ribbed supermarket entrance with a baby stroller in slomo (0:26)', 'https://img-9gag-fun.9cache.com/photo/aQ1PKjr_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aQ1PKjr_460s.jpg', 0, '2019-08-11 08:13:18', '2019-08-11 08:13:18'),
(326, 1, 'aBgRzGQ', 1, 1, 'Oh Nintendo...', 'https://img-9gag-fun.9cache.com/photo/aBgRzGQ_460s.jpg', '', '', 0, '2019-08-11 08:13:18', '2019-08-11 08:13:18'),
(327, 1, 'a5Re3oq', 1, 1, 'No one should have to wait that long for luggage', 'https://img-9gag-fun.9cache.com/photo/a5Re3oq_460s.jpg', '', '', 0, '2019-08-11 08:13:18', '2019-08-11 08:13:18'),
(328, 1, 'aXj03Ad', 3, 1, 'This horse protects.', 'https://img-9gag-fun.9cache.com/photo/aXj03Ad_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aXj03Ad_460s.jpg', 0, '2019-08-11 08:13:18', '2019-08-11 08:13:18'),
(329, 1, 'a1Rvn92', 1, 1, 'Found it in the wild', 'https://img-9gag-fun.9cache.com/photo/a1Rvn92_460s.jpg', '', '', 0, '2019-08-11 08:13:18', '2019-08-11 08:13:18'),
(330, 1, 'aGgYvN6', 1, 1, 'Hi there', 'https://img-9gag-fun.9cache.com/photo/aGgYvN6_460s.jpg', '', '', 0, '2019-08-11 08:13:18', '2019-08-11 08:13:18'),
(331, 1, 'aGgYvjZ', 3, 1, 'Perfect.', 'https://img-9gag-fun.9cache.com/photo/aGgYvjZ_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aGgYvjZ_460s.jpg', 0, '2019-08-11 08:13:19', '2019-08-11 08:13:19'),
(332, 1, 'a3RPgWr', 1, 1, 'How convenient', 'https://img-9gag-fun.9cache.com/photo/a3RPgWr_460s.jpg', '', '', 0, '2019-08-11 08:13:19', '2019-08-11 08:13:19'),
(333, 1, 'a5Reg8L', 1, 1, 'Neck breaker', 'https://img-9gag-fun.9cache.com/photo/a5Reg8L_460s.jpg', '', '', 0, '2019-08-11 08:13:19', '2019-08-11 08:13:19'),
(334, 1, 'aMY27m1', 1, 1, 'Just adopted this little dork :)', 'https://img-9gag-fun.9cache.com/photo/aMY27m1_460s.jpg', '', '', 0, '2019-08-11 08:13:19', '2019-08-11 08:13:19'),
(335, 1, 'aR0wWrq', 1, 1, 'He kinda spitting facts', 'https://img-9gag-fun.9cache.com/photo/aR0wWrq_460s.jpg', '', '', 0, '2019-08-11 08:13:19', '2019-08-11 08:13:19'),
(336, 1, 'aV0z8dw', 1, 1, 'How an F1 driver sits in the car!', 'https://img-9gag-fun.9cache.com/photo/aV0z8dw_460s.jpg', '', '', 0, '2019-08-11 08:13:19', '2019-08-11 08:13:19'),
(337, 1, 'ae5jEmv', 3, 1, 'Whosoever holds this hammer, if he be worthy, shall possess the power of Thor', 'https://img-9gag-fun.9cache.com/photo/ae5jEmv_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/ae5jEmv_460s.jpg', 0, '2019-08-11 08:13:19', '2019-08-11 08:13:19'),
(338, 1, 'aj5Yv6Q', 3, 1, 'I can feel it comiinnng', 'https://img-9gag-fun.9cache.com/photo/aj5Yv6Q_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aj5Yv6Q_460s.jpg', 0, '2019-08-11 08:13:19', '2019-08-11 08:13:19'),
(339, 1, 'aV0z86P', 1, 1, 'Best costume idea', 'https://img-9gag-fun.9cache.com/photo/aV0z86P_460s.jpg', '', '', 0, '2019-08-11 08:13:19', '2019-08-11 08:13:19'),
(340, 1, 'aBgRzYA', 1, 1, 'On the news next week: 50,000 found dead on the coast of the artic, listed as the largest mass suicide in Russian history - they all killed them selves with kalashnikovs to the back of the head.', 'https://img-9gag-fun.9cache.com/photo/aBgRzYA_460s.jpg', '', '', 0, '2019-08-11 08:13:20', '2019-08-11 08:13:20'),
(341, 1, 'abrXoPv', 1, 1, 'Damn right', 'https://img-9gag-fun.9cache.com/photo/abrXoPv_460s.jpg', '', '', 0, '2019-08-11 08:13:20', '2019-08-11 08:13:20'),
(342, 1, 'ag539Qq', 1, 1, 'Hmmmm...', 'https://img-9gag-fun.9cache.com/photo/ag539Qq_460s.jpg', '', '', 0, '2019-08-11 08:13:20', '2019-08-11 08:13:20'),
(343, 1, 'a9RbeOW', 3, 1, 'Seems Safe! but Don\'t try this yourself!', 'https://img-9gag-fun.9cache.com/photo/a9RbeOW_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a9RbeOW_460s.jpg', 0, '2019-08-11 08:13:20', '2019-08-11 08:13:20'),
(344, 1, 'aXj03wd', 1, 1, 'Aren\'t we all on the same boat? - by Quino', 'https://img-9gag-fun.9cache.com/photo/aXj03wd_460s.jpg', '', '', 0, '2019-08-11 08:13:20', '2019-08-11 08:13:20'),
(345, 1, 'ax7dKw2', 1, 1, 'Good Student', 'https://img-9gag-fun.9cache.com/photo/ax7dKw2_460s.jpg', '', '', 0, '2019-08-11 08:13:20', '2019-08-11 08:13:20'),
(346, 1, 'a4RK8Ly', 3, 1, 'The Ultimate Charger', 'https://img-9gag-fun.9cache.com/photo/a4RK8Ly_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a4RK8Ly_460s.jpg', 0, '2019-08-11 08:13:20', '2019-08-11 08:13:20'),
(347, 1, 'a85LOjd', 1, 1, 'Childhood traumas', 'https://img-9gag-fun.9cache.com/photo/a85LOjd_460s.jpg', '', '', 0, '2019-08-11 08:13:21', '2019-08-11 08:13:21'),
(348, 1, 'aV0z8Bw', 3, 1, 'The best pirate I\'ve ever seen', 'https://img-9gag-fun.9cache.com/photo/aV0z8Bw_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aV0z8Bw_460s.jpg', 0, '2019-08-11 08:13:21', '2019-08-11 08:13:21'),
(349, 1, 'ae5jwDb', 3, 1, 'Maybe Maybe Maybe', 'https://img-9gag-fun.9cache.com/photo/ae5jwDb_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/ae5jwDb_460s.jpg', 0, '2019-08-11 08:21:04', '2019-08-11 08:21:04'),
(350, 1, 'a5Re3Dg', 3, 1, 'Now that\'s what we called a CHEF', 'https://img-9gag-fun.9cache.com/photo/a5Re3Dg_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a5Re3Dg_460s.jpg', 0, '2019-08-11 08:21:04', '2019-08-11 08:21:04'),
(351, 1, 'a7wLX0e', 3, 1, 'Teamwork', 'https://img-9gag-fun.9cache.com/photo/a7wLX0e_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a7wLX0e_460s.jpg', 0, '2019-08-11 08:25:05', '2019-08-11 08:25:05'),
(352, 1, 'az1gwKq', 1, 1, 'Tanzania oil tanker explosion', 'https://img-9gag-fun.9cache.com/photo/az1gwKq_460s.jpg', '', '', 0, '2019-08-11 08:31:13', '2019-08-11 08:31:13'),
(353, 1, 'aXj01G6', 3, 1, 'The brave ones', 'https://img-9gag-fun.9cache.com/photo/aXj01G6_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aXj01G6_460s.jpg', 0, '2019-08-11 08:34:20', '2019-08-11 08:34:20'),
(354, 1, 'ayo7wN8', 1, 1, 'Bosco Verticale in Milan, Italy. Each tower houses 900 trees', 'https://img-9gag-fun.9cache.com/photo/ayo7wN8_460s.jpg', '', '', 0, '2019-08-11 08:47:29', '2019-08-11 08:47:29'),
(355, 1, 'az1g39b', 3, 1, 'It\'s all fun and games until...', 'https://img-9gag-fun.9cache.com/photo/az1g39b_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/az1g39b_460s.jpg', 0, '2019-08-11 12:05:00', '2019-08-11 12:05:00'),
(356, 1, 'a5Re3OO', 3, 1, 'It\'s me, the Joker...', 'https://img-9gag-fun.9cache.com/photo/a5Re3OO_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a5Re3OO_460s.jpg', 0, '2019-08-11 12:05:00', '2019-08-11 12:05:00'),
(357, 1, 'ax7drWK', 1, 1, 'Accurate', 'https://img-9gag-fun.9cache.com/photo/ax7drWK_460s.jpg', '', '', 0, '2019-08-11 12:05:00', '2019-08-11 12:05:00'),
(358, 1, 'aqg9E4Z', 1, 1, 'Weird green light came on !!! should i be concerned??', 'https://img-9gag-fun.9cache.com/photo/aqg9E4Z_460s.jpg', '', '', 0, '2019-08-11 12:05:00', '2019-08-11 12:05:00'),
(359, 1, 'a85LgM6', 1, 1, 'We’ve come a long way.', 'https://img-9gag-fun.9cache.com/photo/a85LgM6_460s.jpg', '', '', 0, '2019-08-11 12:05:00', '2019-08-11 12:05:00'),
(360, 1, 'aDgA5BO', 3, 1, 'Synchronized not kicking the ball', 'https://img-9gag-fun.9cache.com/photo/aDgA5BO_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aDgA5BO_460s.jpg', 0, '2019-08-11 12:05:00', '2019-08-11 12:05:00'),
(361, 1, 'avopj5X', 1, 1, 'I can\'t?', 'https://img-9gag-fun.9cache.com/photo/avopj5X_460s.jpg', '', '', 0, '2019-08-11 12:09:57', '2019-08-11 12:09:57'),
(363, 1, 'aQ1Pj8r', 3, 1, 'This must have took a seriously long time to practice.', 'https://img-9gag-fun.9cache.com/photo/aQ1Pj8r_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aQ1Pj8r_460s.jpg', 0, '2019-08-11 12:11:58', '2019-08-11 12:11:58'),
(364, 1, 'aDgAvrN', 1, 1, 'Happened to me 3 times this week. Is there a waiter sumbag code they follow or what?', 'https://img-9gag-fun.9cache.com/photo/aDgAvrN_460s.jpg', '', '', 0, '2019-08-11 13:38:46', '2019-08-11 13:38:46'),
(365, 1, 'a85LgqO', 3, 1, 'If you have a root bamboo, you know what to do', 'https://img-9gag-fun.9cache.com/photo/a85LgqO_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a85LgqO_460s.jpg', 0, '2019-08-11 13:38:46', '2019-08-11 13:38:46'),
(366, 1, 'a3RPOjv', 3, 1, 'This bus driver gear shifting gracefully', 'https://img-9gag-fun.9cache.com/photo/a3RPOjv_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a3RPOjv_460s.jpg', 0, '2019-08-11 13:38:46', '2019-08-11 13:38:46'),
(367, 1, 'a9Rbgd6', 3, 1, 'Crying Cat', 'https://img-9gag-fun.9cache.com/photo/a9Rbgd6_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/a9Rbgd6_460s.jpg', 0, '2019-08-11 13:41:36', '2019-08-11 13:41:36'),
(368, 1, 'aEgv4bG', 3, 1, 'Live Naval Exercise', 'https://img-9gag-fun.9cache.com/photo/aEgv4bG_460sv.mp4', '', 'https://img-9gag-fun.9cache.com/photo/aEgv4bG_460s.jpg', 0, '2019-08-11 13:44:22', '2019-08-11 13:44:22');

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
(1, 1, '2019-05-01 00:00:00'),
(2, 1, '2019-08-09 00:00:00'),
(291, 1, '2019-08-11 00:00:00');

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
(27, '2019_05_14_114356_create_srcs_table', 1),
(28, '2019_08_02_093405_create_memes_table', 2),
(30, '2019_08_02_202205_create_types_table', 3),
(32, '2019_08_09_103722_create_memes_likes_table', 4);

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
  `item_url_prefix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `srcs`
--

INSERT INTO `srcs` (`id`, `user_id`, `alias`, `name`, `url`, `request_items_quantity`, `filter_min_votes`, `item_url_prefix`, `created_at`, `updated_at`) VALUES
(1, 1, 'ninegag', '9GAG', 'https://9gag.com', 10, 0, 'http://9gag.com/gag/', '2019-08-02 06:33:27', '2019-08-11 08:13:29');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=369;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
