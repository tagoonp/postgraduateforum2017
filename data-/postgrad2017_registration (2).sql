-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 07, 2016 at 05:29 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `postgrad2017_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `t5iw_accesslog`
--

CREATE TABLE `t5iw_accesslog` (
  `acs_id` int(10) UNSIGNED NOT NULL,
  `acs_lat` varchar(30) NOT NULL,
  `acs_lng` varchar(30) NOT NULL,
  `acs_ip` varchar(30) NOT NULL,
  `acs_datetime` datetime NOT NULL,
  `acs_page` varchar(100) NOT NULL,
  `acs_account` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5iw_accesslog`
--

INSERT INTO `t5iw_accesslog` (`acs_id`, `acs_lat`, `acs_lng`, `acs_ip`, `acs_datetime`, `acs_page`, `acs_account`) VALUES
(1, '7.0060742', '100.49689219999999', '::1', '2016-11-26 00:00:00', 'login', ''),
(2, '7.0060595', '100.49688569999999', '::1', '2016-11-26 00:00:00', 'login', ''),
(3, '7.00604', '100.4969701', '::1', '2016-11-26 00:00:00', 'author/index', ''),
(4, '7.0060768', '100.4968895', '::1', '2016-11-26 09:51:39', 'author/index', ''),
(5, '7.0060690999999995', '100.4969105', '::1', '2016-11-26 09:51:56', 'author/view_submission', ''),
(6, '7.0061089', '100.49683929999999', '::1', '2016-11-26 09:56:06', 'author/update_submission', 't.prappre@outlook.com'),
(7, '7.006096599999999', '100.4968523', '::1', '2016-11-26 10:04:24', 'login', ''),
(8, '7.006082999999999', '100.4969175', '::1', '2016-11-26 10:04:36', 'login', ''),
(9, '7.0060891', '100.4969119', '::1', '2016-11-26 10:04:50', 'author/userinfo', 't.prappre@outlook.com'),
(10, '7.0060812', '100.49691519999999', '::1', '2016-11-26 10:05:12', 'author/userinfo', 't.prappre@outlook.com'),
(11, '7.0060693999999994', '100.4968907', '::1', '2016-11-26 10:07:21', 'author/userinfo', 't.prappre@outlook.com'),
(12, '7.0060742', '100.4969261', '::1', '2016-11-26 10:07:58', 'author/userinfo', 't.prappre@outlook.com'),
(13, '7.006080400000001', '100.49692879999999', '::1', '2016-11-26 10:08:22', 'login', ''),
(14, '7.0060728999999995', '100.4968325', '::1', '2016-11-26 10:09:41', 'login', ''),
(16, '7.0060546', '100.4969043', '::1', '2016-11-26 10:10:58', 'staff/index', 'tagoon.p'),
(17, '7.0060794', '100.4969186', '::1', '2016-11-26 10:13:16', 'staff/index', 'tagoon.p'),
(18, '7.006087399999999', '100.4969127', '::1', '2016-11-26 10:13:44', 'staff/index', 'tagoon.p'),
(19, '7.006088399999999', '100.4969138', '::1', '2016-11-26 10:14:34', 'staff/index', 'tagoon.p'),
(20, '7.0060654', '100.4969133', '::1', '2016-11-26 10:21:54', 'staff/index', 'tagoon.p'),
(21, '6.999028', '100.49816070000001', '::1', '2016-11-26 14:35:11', 'login', ''),
(22, '6.9990632999999995', '100.49816750000001', '::1', '2016-11-27 00:29:11', 'login', ''),
(23, '6.999009099999999', '100.49822139999999', '::1', '2016-11-27 00:29:17', 'staff/index', 'tagoon.p'),
(24, '6.9990399', '100.4981523', '::1', '2016-11-27 00:31:01', 'author/view_submission', 'tagoon.p'),
(25, '6.9990311', '100.4981612', '::1', '2016-11-27 00:32:51', 'author/view_submission', 'tagoon.p'),
(26, '6.9990408', '100.498167', '::1', '2016-11-27 00:34:20', 'author/view_submission', 'tagoon.p'),
(27, '6.999047', '100.4981708', '::1', '2016-11-27 00:35:05', 'author/view_submission', 'tagoon.p'),
(28, '6.9990825', '100.49816489999999', '::1', '2016-11-27 00:37:03', 'author/view_submission', 'tagoon.p'),
(29, '6.9990575999999995', '100.49813689999999', '::1', '2016-11-27 00:37:08', 'author/view_submission', 'tagoon.p'),
(30, '6.9990283', '100.4981159', '::1', '2016-11-27 00:38:28', 'author/view_submission', 'tagoon.p'),
(31, '6.9990736', '100.4981512', '::1', '2016-11-27 00:39:46', 'author/view_submission', 'tagoon.p'),
(32, '6.9990949', '100.4981695', '::1', '2016-11-27 00:40:54', 'author/view_submission', 'tagoon.p'),
(33, '6.999054', '100.4981597', '::1', '2016-11-27 00:41:57', 'author/view_submission', 'tagoon.p'),
(34, '6.999067800000001', '100.49816469999999', '::1', '2016-11-27 00:42:01', 'staff/index', 'tagoon.p'),
(35, '6.9990483999999995', '100.49816249999999', '::1', '2016-11-27 00:46:53', 'staff/view_submission', 'tagoon.p'),
(36, '6.999074299999999', '100.49815249999999', '::1', '2016-11-27 00:47:12', 'staff/index', 'tagoon.p'),
(37, '6.9990516000000005', '100.49815869999999', '::1', '2016-11-27 00:47:38', 'staff/submittion_list', 'tagoon.p'),
(38, '6.9990397', '100.49818239999999', '::1', '2016-11-27 00:48:21', 'staff/submittion_list', 'tagoon.p'),
(39, '6.999062100000001', '100.4981523', '::1', '2016-11-27 00:50:05', 'login', ''),
(40, '6.9990483', '100.49815629999999', '::1', '2016-11-27 00:50:16', 'login', ''),
(41, '6.9990499999999995', '100.4981842', '::1', '2016-11-27 00:50:34', 'login', ''),
(42, '6.9990513000000005', '100.4981899', '::1', '2016-11-27 00:51:32', 'login', ''),
(43, '6.99903', '100.49813309999999', '::1', '2016-11-27 00:53:28', 'login', ''),
(44, '6.9990279', '100.49814740000001', '::1', '2016-11-27 00:53:39', 'author/changepassword', 'tippawan.l'),
(45, '6.9990483', '100.49819169999999', '::1', '2016-11-27 00:53:51', 'login', ''),
(46, '6.9990217999999995', '100.49819149999999', '::1', '2016-11-27 00:53:54', 'staff/index', 'tagoon.p'),
(47, '6.9990329', '100.49819719999999', '::1', '2016-11-27 00:53:58', 'author/changepassword', 'tagoon.p'),
(48, '6.9990426', '100.4981883', '::1', '2016-11-27 00:54:41', 'author/index', 'tagoon.p'),
(49, '6.9990355', '100.498178', '::1', '2016-11-27 00:55:06', 'login', ''),
(50, '6.9990518', '100.4981713', '::1', '2016-11-27 00:55:19', 'login', ''),
(51, '6.9990388999999995', '100.4981744', '::1', '2016-11-27 00:56:06', 'staff/view_submission', 'tippawan.l'),
(52, '6.999078099999999', '100.4981526', '::1', '2016-11-27 00:58:21', 'author/changepassword', 'tippawan.l'),
(53, '6.999053', '100.4981797', '::1', '2016-11-27 00:58:40', 'staff/view_submission', 'tippawan.l'),
(54, '6.9990548', '100.49818309999999', '::1', '2016-11-27 00:58:52', 'staff/index', 'tippawan.l'),
(55, '6.9990689999999995', '100.49817209999999', '::1', '2016-11-27 01:00:09', 'staff/index', 'tippawan.l'),
(56, '6.999067600000001', '100.4981533', '::1', '2016-11-27 01:02:55', 'staff/view_submission', 'tippawan.l'),
(57, '6.999105300000001', '100.4981545', '::1', '2016-11-27 01:19:20', 'staff/view_submission', 'tippawan.l'),
(58, '6.9990979', '100.4981689', '::1', '2016-11-27 01:20:38', 'staff/view_submission', 'tippawan.l'),
(59, '6.9990755', '100.4981158', '::1', '2016-11-27 01:22:09', 'staff/view_submission', 'tippawan.l'),
(60, '6.999018599999999', '100.4981281', '::1', '2016-11-27 01:23:48', 'staff/view_submission', 'tippawan.l'),
(61, '6.9991053999999995', '100.498179', '::1', '2016-11-27 01:25:35', 'staff/view_submission', 'tippawan.l'),
(62, '6.9990882999999995', '100.4981659', '::1', '2016-11-27 01:25:39', 'staff/view_submission', 'tippawan.l'),
(63, '6.999078', '100.4981782', '::1', '2016-11-27 01:26:10', 'staff/view_submission', 'tippawan.l'),
(64, '6.9990741', '100.4981741', '::1', '2016-11-27 01:27:46', 'staff/view_submission', 'tippawan.l'),
(65, '6.9990318', '100.49817139999999', '::1', '2016-11-27 01:31:43', 'staff/view_submission', 'tippawan.l'),
(66, '6.9990578999999995', '100.49814529999999', '::1', '2016-11-27 01:36:30', 'staff/view_submission', 'tippawan.l'),
(67, '6.999037599999999', '100.4981656', '::1', '2016-11-27 01:37:53', 'staff/view_submission', 'tippawan.l'),
(68, '6.9990422', '100.498181', '::1', '2016-11-27 01:38:02', 'staff/view_submission', 'tippawan.l'),
(69, '6.9990540999999995', '100.49815149999999', '::1', '2016-11-27 01:40:15', 'staff/view_submission', 'tippawan.l');

-- --------------------------------------------------------

--
-- Table structure for table `t5iw_author`
--

CREATE TABLE `t5iw_author` (
  `auid` int(10) UNSIGNED NOT NULL,
  `au_prefix` varchar(100) NOT NULL,
  `au_fname` varchar(200) NOT NULL,
  `au_lname` varchar(200) NOT NULL,
  `au_department` varchar(255) NOT NULL,
  `au_email` varchar(200) NOT NULL,
  `au_sess_id` varchar(200) NOT NULL,
  `au_submission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5iw_author`
--

INSERT INTO `t5iw_author` (`auid`, `au_prefix`, `au_fname`, `au_lname`, `au_department`, `au_email`, `au_sess_id`, `au_submission_id`) VALUES
(145, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '8qsp5r0717nqedjko6s1a2fod4', 0),
(146, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'b6iacbt5qd01jane57lj5g5vj3', 2),
(148, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'qc681ek8j6pggoaka6e4dm7la7', 0),
(149, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'k9t510fjnjp5lqqtptu032tkh1', 0),
(150, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'attfe47b7u3u3n4v5nlef8ngq4', 0),
(151, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '01439i3h8d59s79q6pqfle5is2', 0),
(152, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'a34g9hbjh529kj2ucm6i6k68k2', 0),
(153, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '5hhg8fcor0m74bbnk3id1ga161', 0),
(154, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'jeu30afglao1pak7r9qf76vaf1', 0),
(155, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'v812nojbrf6n7qb3phdmk3am51', 0),
(156, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '15g5vr3un3v05eedrea67s92v7', 0),
(157, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'veep1o2cj1pdon5hmeqfqieb27', 0),
(158, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'k3vnq0h0vpe0qs6u3afqttai91', 0),
(159, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '9c6gsr00aqh7fki7nm3kp712c7', 0),
(160, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'gmi66aciid2himtdtfc39ghuf0', 0),
(161, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '0mtntssqmt3se8toufpcml54j2', 0),
(162, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'ncktthd8b2e3foqva8mh1o82s0', 0),
(163, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'kjp74ok2qe43kgag3h7ves9u94', 0),
(168, 'Assist. Prof.', 'Sangsuree', 'Vasupongaiya', 'Faculty of Engineering, Prince of Songkla University.', 'svasupongiya@gmail.com', 'b6iacbt5qd01jane57lj5g5vj3', 2),
(169, 'Assoc. Prof.', 'Tippawan', 'Liabsutrakul', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University', 'ltippawa@yahoo.com', 'b6iacbt5qd01jane57lj5g5vj3', 2),
(171, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'dts53hm4hqtbjd7dl9vovo3eg7', 0),
(172, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'bmk9u5i2erv7u7hbm846vl6k94', 0),
(173, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'rhq1hsb8kjcv1draml5b7svq83', 0),
(174, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'vr8kt7ac3ok2lr8laqgrjeqns2', 0),
(176, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'tjkqrce5025ankmvc34oc5hdr0', 0),
(177, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'k493c9k2kjtdo8s003h1760l20', 0),
(178, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '12uv4n3ptjc35b13smt3165lm3', 0),
(179, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'jrbql76k26b46qabe85mit3nk3', 0),
(180, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'c1ui4d5teup8k9p7ntpd64r375', 0),
(181, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'qu5mlitgfo2fenrhmqa10na6r1', 0),
(182, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'i8k4ojq3vjbjvq07eb334lk5j6', 0),
(183, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '0l4e1h5454ara8s2o2ckme0l66', 0),
(184, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'obqjdahmo5aeqp71po6bn024l6', 0),
(185, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '2jq3mrialef0dc3in9v8j2i5s6', 0),
(186, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'vt95e0d0dp002p6lok5b1nqck2', 3),
(187, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '49shfhl44reqiove2jh3vs86k4', 4),
(188, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'ta7cb1tu3a4gs2vjnggh77ofg4', 0),
(189, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '32hruulbc94i3apes679064rd2', 0),
(190, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'ao32nojj1atmeod0u7b45eiho0', 0),
(191, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '2g34ofviesnum5n7euqddsjni7', 0),
(192, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'kvb88c427le4fjvtp24bmdm9m0', 0),
(193, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'k5fkitca35uhvkbk33mo5udld2', 0),
(194, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '7p7n4l4fr1j9kmkl1qeengoio7', 0),
(195, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '743o0bt9rmin2drsbtjjab9rq5', 0),
(196, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'q05nfhn443fa3bl860cc5j1120', 0),
(197, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '941fn414jq2o3d745tsu01bsq7', 5),
(198, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '00pqt0l50d60doa3sli7cgvrf3', 0),
(199, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '4n3dhpm3n1o220o0gmr47boap3', 0),
(200, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'q9kb25hqqnsu7r9run24r2bo54', 0),
(201, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'mtr84qflr49i8tauas6j451lq2', 0),
(202, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'tvqaks0bpndlhg04p4ct317121', 0),
(203, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '9htivv4mp2up1kvudl29t63ul5', 0),
(204, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'k1ipit4t42hs77o1dv21v9hf27', 0),
(205, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'ak0qs05etlsgmqcnal2cq52e53', 0),
(206, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '7ausa31k6k31l440jg9bpl1oe1', 0),
(207, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'bdvju8ei8obbptsp7tvp6bofj1', 0),
(208, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'tsqmfs34280pcg1au98j64ao73', 0),
(209, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '4g0h1ljfo3ksj0a5q2suhecb32', 0),
(210, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '195q79mjvsr52amec5likddg15', 0),
(211, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'rk7hoau8nujuois508moiuasg1', 0),
(212, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'crstgin2k7jalkvjrfp5po75g0', 0),
(213, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '4hpiqto50i1hav53qsas00du75', 0),
(214, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 't8ijbjqm93h9q57aehuj2ef2d3', 0),
(215, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '8bl1mapqjhu4h8hmldgq6v2ua0', 0),
(216, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'eadmol75tresl0co354kfkj8q5', 0),
(217, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'hjhjs11975groj7ichmkgsa4d6', 0),
(218, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '8f7jngt02f35jrrivadfbaos50', 0),
(219, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '869q5sa776banofprd21137pl0', 0),
(220, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'li1addp44hj9d22g26ohi6m5c2', 0),
(221, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'om8k8s465gksosvhuotjdcasu3', 0),
(222, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'd29liiu7eoth1cbkba38ine9l0', 0),
(223, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'c9vm1co0ghe58l08ga1doidm45', 0),
(224, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'iuaf6q1bpk9qngml9p313pm774', 0),
(225, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '919lofcar7har2iobia640v5v5', 0),
(226, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'p8edab365ci8bjfqf1tgtsqrf3', 0),
(227, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'hgdcosvu5b48d1ea06iq10lh84', 0),
(228, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'p105h642niec8eg1gl8o5uq121', 0),
(229, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'e6qblmabho4gvd8bkmss4s9df3', 0),
(230, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 't3e71dtk269sb2i3njdehc4bb2', 0),
(231, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'fol12rg3hmpsish4ie8pu0mst2', 0),
(232, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'b2grlfcjro2ji0a58iio29t4q3', 0),
(233, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '622cd45uugtic9k9os740tv6k5', 0),
(234, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'cv3o51s2v37484tgbpihiplf75', 0),
(235, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'f3pin69cagribdofeu3g1dg9q7', 0),
(236, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'jvmqqmveenai10s3s3itiudlp6', 0),
(237, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'ndtk1gi35mcck4oimh09ri5ts1', 0),
(238, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'epqnb70le4nmoq1v25m2ekup01', 0),
(239, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'uiegj3vp9lp98647j1ba763tq0', 0),
(240, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'kbrla9c9atv3246cnkj64nd0l0', 0),
(241, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'na95vc7j9820r0cv5886ecn8d5', 0),
(242, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '05tvs6jh0hpun375iurm7t4l83', 0),
(243, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '64jkd7idiirskjd31b0g4hm9d5', 0),
(244, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'l6v18sjfkcp5akjtflckpctpp4', 0),
(245, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '6or6vu3k66a6ha4uf4p6v7hb83', 0),
(246, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '3fkhtdfbo0chesa3o3tbmejqu1', 0),
(247, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'pcgcm07on3nnmpgjqmdlmluvp7', 0),
(248, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '921b9ps84vcol866lgt3ado1k1', 0),
(249, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'rpn3th2956stjja6smjnlulgp5', 0),
(250, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'c2ls7gg556tqn40sf3gdiutlm4', 0),
(251, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '2k6oeisap613e79mi8ki4pas02', 0),
(252, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '1d009dn8ajfbvrn6irkdtg2v80', 0),
(253, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'jeprnvij15dgjj6g35so8cddb6', 0),
(254, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'a6k7vcp3kskfkkmrrr78udp5n6', 0),
(255, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'ctm76lmt3gfdpfkdm4sikptuu7', 0),
(256, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'cj6nm9it8m0vlm0ach6ulqj0e5', 0),
(257, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'l41qt9v024aun1m2d27b0pj5u1', 0),
(258, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '01pfv9scbavd4frtsb4idlhe35', 0),
(259, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '2it4thtuvb9c4a1io3uav77bl7', 0),
(260, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'soqlvm0nci5030las14ijnepv7', 0),
(261, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '8135jdlmaslvi636lag7ogl7p7', 0),
(262, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'i3p5vjq8ugsuj6qg0euhn53er7', 0),
(263, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'jnf9b82r0bh1pekr6r63s04pn4', 0),
(264, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'qj0l70olugc43ml2ekd948rf75', 0),
(265, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '2ke3b63rqh7rf7pdpougq3itr7', 0),
(266, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'h4gv7c204ndlpvgb9mpthpugm0', 0),
(267, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'mv8pkmgmvu1r1aqos8g4rocl72', 0),
(268, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'eemtdk63acron5ibp951esbr76', 6),
(269, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'sfemn8vduch0p4b81kqomogma7', 0),
(270, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '9q3j0ual56je90n50h49vdigq6', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t5iw_category`
--

CREATE TABLE `t5iw_category` (
  `cat_id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5iw_category`
--

INSERT INTO `t5iw_category` (`cat_id`, `cat_name`) VALUES
(1, 'Universal health coverage'),
(2, 'Health workforce and finance'),
(3, 'Primary health care'),
(4, 'Health equity'),
(5, 'Policy integration for sustainable development'),
(6, 'Health systems for sustainable development'),
(7, 'Health in sustainable development goals'),
(99, 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `t5iw_countries`
--

CREATE TABLE `t5iw_countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5iw_countries`
--

INSERT INTO `t5iw_countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democratic People''s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People''s Democratic Republic'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jamahiriya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Federated States of'),
(144, 'MD', 'Moldova, Republic of'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Antilles'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federation'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Principe'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia South Sandwich Islands'),
(202, 'ES', 'Spain'),
(203, 'LK', 'Sri Lanka'),
(204, 'SH', 'St. Helena'),
(205, 'PM', 'St. Pierre and Miquelon'),
(206, 'SD', 'Sudan'),
(207, 'SR', 'Suriname'),
(208, 'SJ', 'Svalbard and Jan Mayen Islands'),
(209, 'SZ', 'Swaziland'),
(210, 'SE', 'Sweden'),
(211, 'CH', 'Switzerland'),
(212, 'SY', 'Syrian Arab Republic'),
(213, 'TW', 'Taiwan'),
(214, 'TJ', 'Tajikistan'),
(215, 'TZ', 'Tanzania, United Republic of'),
(216, 'TH', 'Thailand'),
(217, 'TG', 'Togo'),
(218, 'TK', 'Tokelau'),
(219, 'TO', 'Tonga'),
(220, 'TT', 'Trinidad and Tobago'),
(221, 'TN', 'Tunisia'),
(222, 'TR', 'Turkey'),
(223, 'TM', 'Turkmenistan'),
(224, 'TC', 'Turks and Caicos Islands'),
(225, 'TV', 'Tuvalu'),
(226, 'UG', 'Uganda'),
(227, 'UA', 'Ukraine'),
(228, 'AE', 'United Arab Emirates'),
(229, 'GB', 'United Kingdom'),
(230, 'US', 'United States'),
(231, 'UM', 'United States minor outlying islands'),
(232, 'UY', 'Uruguay'),
(233, 'UZ', 'Uzbekistan'),
(234, 'VU', 'Vanuatu'),
(235, 'VA', 'Vatican City State'),
(236, 'VE', 'Venezuela'),
(237, 'VN', 'Vietnam'),
(238, 'VG', 'Virgin Islands (British)'),
(239, 'VI', 'Virgin Islands (U.S.)'),
(240, 'WF', 'Wallis and Futuna Islands'),
(241, 'EH', 'Western Sahara'),
(242, 'YE', 'Yemen'),
(243, 'ZR', 'Zaire'),
(244, 'ZM', 'Zambia'),
(245, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `t5iw_fileupload`
--

CREATE TABLE `t5iw_fileupload` (
  `fid` int(10) UNSIGNED NOT NULL,
  `filename` text NOT NULL,
  `sess_id` varchar(200) NOT NULL,
  `user_upload` varchar(200) NOT NULL,
  `date_upload` date NOT NULL,
  `submission_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5iw_fileupload`
--

INSERT INTO `t5iw_fileupload` (`fid`, `filename`, `sess_id`, `user_upload`, `date_upload`, `submission_id`) VALUES
(41, 'submission-upload-2016-11-17-17-34-03-FyZvWH.docx', '8cji7u2nm36u32bfna2alkpq04', 'tagoon.p@gmail.com', '2016-11-17', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t5iw_presentation_type`
--

CREATE TABLE `t5iw_presentation_type` (
  `pr_id` int(10) UNSIGNED NOT NULL,
  `pr_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5iw_presentation_type`
--

INSERT INTO `t5iw_presentation_type` (`pr_id`, `pr_name`) VALUES
(1, 'Oral presentation'),
(2, 'Poster presentation'),
(99, 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `t5iw_readmark`
--

CREATE TABLE `t5iw_readmark` (
  `r_id` int(10) UNSIGNED NOT NULL,
  `r_submission_id` int(11) NOT NULL,
  `r_by` varchar(150) NOT NULL,
  `r_status` enum('N','Y') NOT NULL DEFAULT 'N',
  `r_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5iw_readmark`
--

INSERT INTO `t5iw_readmark` (`r_id`, `r_submission_id`, `r_by`, `r_status`, `r_datetime`) VALUES
(1, 2, 'tippawan.l', 'Y', '2016-11-27 01:29:10'),
(3, 4, 'tippawan.l', 'N', '2016-11-27 02:07:17'),
(4, 2, 'tagoon.p', 'N', '2016-11-28 06:11:44');

-- --------------------------------------------------------

--
-- Table structure for table `t5iw_reject`
--

CREATE TABLE `t5iw_reject` (
  `re_id` int(10) UNSIGNED NOT NULL,
  `re_submission_id` int(11) NOT NULL,
  `re_by` varchar(150) NOT NULL,
  `re_datetime` datetime NOT NULL,
  `re_msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t5iw_submission`
--

CREATE TABLE `t5iw_submission` (
  `submission_id` int(10) UNSIGNED NOT NULL,
  `id` varchar(20) NOT NULL,
  `title` text NOT NULL,
  `presentation_type` enum('1','2','99') NOT NULL DEFAULT '99',
  `topic_group` enum('1','2','3','4','5','6','7','99') NOT NULL DEFAULT '99',
  `presenter_name` varchar(255) NOT NULL,
  `abstract` text NOT NULL,
  `word_count` int(11) NOT NULL,
  `submit_date_time` datetime NOT NULL,
  `stage` enum('1','2','3','4','5','99') NOT NULL DEFAULT '1',
  `sess_id` varchar(200) NOT NULL,
  `delete_status` enum('N','Y') NOT NULL DEFAULT 'N',
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5iw_submission`
--

INSERT INTO `t5iw_submission` (`submission_id`, `id`, `title`, `presentation_type`, `topic_group`, `presenter_name`, `abstract`, `word_count`, `submit_date_time`, `stage`, `sess_id`, `delete_status`, `username`) VALUES
(2, 'PGF17-2-2-1', 'Validation of the Prognostic Value of Histologic Scoring Systems in Primary Sclerosing Cholangitis; An International Cohort Study.', '2', '1', 'Assist. Prof.Tagoon Prappre', '<p>Histologic scoring systems specific for primary sclerosing cholangitis (PSC) are not validated. We recently determined the applicability and prognostic value of three histological scoring systems in a single PSC cohort. The aim of this study was to validate their prognostic utility and reproducibility, across a multicenter PSC cohort. Liver biopsies from PSC patients were collected across 7 European centers. Histologic scoring was performed using the Nakanuma, Ishak, and Ludwig scoring systems. Biopsies were independently scored by six liver pathologists for interobserver agreement. The prognostic value of clinical, biochemical, and all three histologic scoring systems on predicting composite endpoint 1: PSC related death and liver transplantation, 2: liver transplantation, and 3: liver related events, was assessed using uni-and multivariable Cox proportional hazards modeling. 119 PSC patients were identified, the median follow-up was 142 months. During follow-up 31 patients died (20 PSC related deaths), 31 underwent liver transplantation, 35 experienced one or more liver related events. All three staging systems were independent predictors of endpoints 2 and 3; Nakanuma HR 3.16 (95%CI 1.49-6.68), HR 2.05 (95%CI 1.17-3.57); Ishak: HR 1.55 (95%CI 1.10-2.18), HR 1.43 (95%CI 1.10-1.85); Ludwig: HR 2.62 (95%CI 1.19-5.80), HR2.06 (95%CI 1.09-3.89), respectively. Only the Nakanuma staging system was independently associated with endpoint 1: HR 2.14 (95%CI 1.22-3.77). Interobserver agreement was moderate for Nakanuma stage (&kappa;=0.56), and substantial for Nakanuma component fibrosis (&kappa;=0.67), Ishak stage (&kappa;=0.64) and Ludwig stage (&kappa;=0.62)...</p>\r\n', 230, '2016-11-25 05:15:25', '1', 'b6iacbt5qd01jane57lj5g5vj3', 'N', 't.prappre@outlook.com'),
(3, 'PGF17-3-1-3', 'ddasdasd', '1', '3', 'Assist. Prof.Tagoon Prappre', '<p>asd asd</p>\r\n', 2, '2016-11-25 14:59:17', '1', 'vt95e0d0dp002p6lok5b1nqck2', 'Y', 't.prappre@outlook.com'),
(4, 'PGF17-4-1-3', 'asd', '1', '3', 'Assist. Prof.Tagoon Prappre', '<p>asd</p>\r\n', 1, '2016-11-25 15:00:52', '1', '49shfhl44reqiove2jh3vs86k4', 'Y', 't.prappre@outlook.com'),
(5, 'PGF17-5-1-1', 'Optical Algorithms at Satellite Wavelengths for Total Suspended Matter in Tropical Coastal Waters.', '1', '1', 'Mr.Tagoon Prappre', '<p>Is it possible to derive accurately Total Suspended Matter concentration or its proxy, turbidity, from remote sensing data in tropical coastal lagoon waters? To investigate this question, hyperspectral remote sensing reflectance, turbidity and chlorophyll pigment concentration were measured in three coral reef lagoons. The three sites enabled us to get data over very diverse environments: oligotrophic and sediment-poor waters in the southwest lagoon of New Caledonia, eutrophic waters in the Cienfuegos Bay (Cuba), and sediment-rich waters in the Laucala Bay. In this paper, optical algorithms for turbidity are presented per site based on 113 stations in New Caledonia, 24 stations in Cuba and 56 stations in Fiji. Empirical algorithms are tested at satellite wavebands useful to coastal applications. Global algorithms are also derived for the merged data set (193 stations). The performances of global and local regression algorithms are compared. The best one-band algorithms on all the measurements are obtained at 681 nm using either a polynomial or a power model. The best two-band algorithms are obtained with R412/R620, R443/R670 and R510/R681. Two three-band algorithms based on Rrs620.Rrs681/Rrs412&nbsp;also give fair regression statistics. Finally, we propose a global algorithm based on one or three bands: turbidity is first calculated from Rrs681 and then, if &lt; 1 FTU, it is recalculated using an algorithm based on Rrs620.Rrs681/Rrs412. On our data set, this algorithm is suitable for the 0.2-25 FTU turbidity range and for the three sites sampledThis shows that defining global empirical turbidity algorithms in tropical coastal waters is at reach ad.</p>\r\n', 250, '2016-11-27 11:04:38', '1', '941fn414jq2o3d745tsu01bsq7', 'Y', 't.prappre@outlook.com'),
(6, 'PGF17-6-1-4', 'Exosomal long noncoding RNA CRNDE-h as a novel serum-based biomarker for diagnosis and prognosis of colorectal cancer.', '1', '4', 'Mr.Tagoon Prappre', '<p>Cancer-secreted long non-coding RNAs (lncRNAs) are emerging mediators of&nbsp;cancer-host cross talk. The aim of our study was to illustrate the clinical significance of the lncRNA CRNDE-h in exosomes purified from the serum of patients with colorectal&nbsp;cancer&nbsp;(CRC). The study was divided into four parts: (1) The exosome isolated methods and lncRNA detected methods which accurately and reproducibly measure CRC-related exosomal CRNDE-h in serum were optimized in preliminary pilot stage; (2) The stability of exosomal CRNDE-h was evaluated systematically; (3) The origin of exosomal CRNDE-h was explorated in vitro and in vivo; (4) The diagnostic and prognostic value of exosomal CRNDE-h for CRC were validated in 468 patients. In pilot study, our results indicated that exosomal CRNDE-h was detectable and stable in serum of CRC patients, and derived from tumor cells. Then, the increased expression of exosomal CRNDE-h was successfully validated in 148 CRC patients when compared with colorectal benign disease patients and healthy donors. Exosomal CRNDE-h level significantly correlated with CRC regional lymph node metastasis (P = 0.019) and distant metastasis (P = 0.003). Moreover, at the cut-off value of 0.020 exosomal CRNDE-h level of serum, the area under ROC curve distinguishing CRC from colorectal benign disease patients and healthy donors was 0.892, with 70.3% sensitivity and 94.4% specificity, which was superior to carcinoembryogenic antigen. In addition, high exosomal CRNDE-h level has a lower overall survival rates than that for low groups (34.6% vs. 68.2%, P &lt; 0.001). In conclusion, detection of lncRNA CRNDE-h in exosome shed a a.</p>\r\n', 248, '2016-11-28 05:10:20', '1', 'eemtdk63acron5ibp951esbr76', 'Y', 't.prappre@outlook.com');

-- --------------------------------------------------------

--
-- Table structure for table `t5iw_transection`
--

CREATE TABLE `t5iw_transection` (
  `tr_id` int(10) UNSIGNED NOT NULL,
  `tr_status` enum('1','2','3','4','5','99') NOT NULL DEFAULT '99',
  `tr_comment` text NOT NULL,
  `tr_by` varchar(200) NOT NULL,
  `tr_date` date NOT NULL,
  `tr_submission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5iw_transection`
--

INSERT INTO `t5iw_transection` (`tr_id`, `tr_status`, `tr_comment`, `tr_by`, `tr_date`, `tr_submission_id`) VALUES
(1, '1', '', 'tagoon.p@gmail.com', '2016-11-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t5iw_useraccount`
--

CREATE TABLE `t5iw_useraccount` (
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `regdate` date NOT NULL,
  `sid` varchar(200) NOT NULL,
  `activate_status` enum('N','Y') NOT NULL DEFAULT 'N',
  `active_status` enum('N','Y') NOT NULL DEFAULT 'N',
  `account_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5iw_useraccount`
--

INSERT INTO `t5iw_useraccount` (`username`, `password`, `email`, `regdate`, `sid`, `activate_status`, `active_status`, `account_type`) VALUES
('saina.seeyong@gmail.com', '131f8daaa29978ca10513d8024416c6d', 'saina.seeyong@gmail.com', '2016-11-27', 'KuThqXzk1DhVgUQ4iEaC', 'N', 'N', 3),
('t.prappre@outlook.com', '59adb543cfa6d19204ccf05dcb3537d7', 't.prappre@outlook.com', '2016-11-25', 'kBcjxJCUo15eS0B2Q5Pn', 'Y', 'Y', 3),
('tagoon.p', '59adb543cfa6d19204ccf05dcb3537d7', 'tagoon.p@psu.ac.th', '2016-11-18', '', 'Y', 'Y', 2),
('tagoon.p@gmail.com', '59adb543cfa6d19204ccf05dcb3537d7', 'tagoon.p@gmail.com', '2016-11-27', 'Z0TWH1l27qzJV35Q8EXO', 'Y', 'Y', 3),
('tippawan.l', '40eb7c697e324828d70d5d8f9c0bdc73', 'ltippawa@yahoo.com', '2016-11-27', '', 'Y', 'Y', 2);

-- --------------------------------------------------------

--
-- Table structure for table `t5iw_userinformation`
--

CREATE TABLE `t5iw_userinformation` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `par_type` enum('1','2','99') NOT NULL DEFAULT '99',
  `prefix_id` varchar(20) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `university` varchar(255) NOT NULL,
  `status` enum('1','2','3','4','99') NOT NULL DEFAULT '99',
  `status_other` varchar(200) NOT NULL DEFAULT '-',
  `address` text NOT NULL,
  `country_id` varchar(10) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `halal` enum('N','Y') NOT NULL DEFAULT 'N',
  `vegie` enum('N','Y') NOT NULL DEFAULT 'N',
  `nobeef` enum('N','Y') NOT NULL DEFAULT 'N',
  `noseafood` enum('N','Y') NOT NULL DEFAULT 'N',
  `accommodation` enum('1','2','99') NOT NULL DEFAULT '99',
  `accommodation_other` varchar(200) NOT NULL DEFAULT '-',
  `arr_date` date NOT NULL,
  `arr_time` time NOT NULL,
  `dept_date` date NOT NULL,
  `dept_time` time NOT NULL,
  `travel` enum('1','2','3','4','99') NOT NULL DEFAULT '99',
  `travel_other` varchar(150) NOT NULL DEFAULT '-',
  `reg_type` enum('1','2','NA') NOT NULL DEFAULT 'NA',
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5iw_userinformation`
--

INSERT INTO `t5iw_userinformation` (`user_id`, `par_type`, `prefix_id`, `fname`, `lname`, `university`, `status`, `status_other`, `address`, `country_id`, `tel`, `halal`, `vegie`, `nobeef`, `noseafood`, `accommodation`, `accommodation_other`, `arr_date`, `arr_time`, `dept_date`, `dept_time`, `travel`, `travel_other`, `reg_type`, `username`) VALUES
(3, '1', 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', '3', ' value=', '103 Kanhcanawanich Road, HatYai, Songkla, Thailand 90110', 'TH', '09351231231', 'N', 'Y', 'Y', 'N', '99', 'Centara grand Hat Yai Hotal', '2016-11-30', '05:06:00', '2016-11-30', '06:06:00', '1', '-', '2', 'tagoon.p'),
(11, '1', 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', '2', '-', '103 Kanhcanawanich Road, HatYai, Songkla, Thailand 90110', 'TH', '09351231231', 'N', 'Y', 'Y', 'N', '99', 'Centara grand Hat Yai Hotal', '2016-11-30', '05:06:00', '2016-11-30', '06:06:00', '1', '-', '2', 't.prappre@outlook.com'),
(12, '2', 'Assoc. Prof.', 'Tippawan', 'Liabsutrakul', 'PSU', '3', '-', '', 'TH', '', 'N', 'N', 'Y', 'N', '99', '-', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '99', '-', 'NA', 'tippawan.l'),
(13, '2', 'Ms.', 'Saina', 'Seeyong', 'Epidemiology Unit, PSU', '99', 'Staff', 'Epidemiology Unit, PSU', 'TH', '074451165', 'Y', 'N', 'N', 'N', '99', '-', '2016-11-01', '00:00:00', '2016-11-30', '00:00:00', '4', '-', '1', 'saina.seeyong@gmail.com'),
(14, '2', 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', '99', 'Staff', 'Epidemiology Unit, PSU', 'TH', '0935761099', 'N', 'N', 'Y', 'Y', '99', 'W Apartment', '2016-11-27', '01:01:00', '2016-11-28', '01:02:00', '4', '-', '1', 'tagoon.p@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t5iw_accesslog`
--
ALTER TABLE `t5iw_accesslog`
  ADD PRIMARY KEY (`acs_id`);

--
-- Indexes for table `t5iw_author`
--
ALTER TABLE `t5iw_author`
  ADD PRIMARY KEY (`auid`);

--
-- Indexes for table `t5iw_category`
--
ALTER TABLE `t5iw_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `t5iw_countries`
--
ALTER TABLE `t5iw_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t5iw_fileupload`
--
ALTER TABLE `t5iw_fileupload`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `t5iw_presentation_type`
--
ALTER TABLE `t5iw_presentation_type`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `t5iw_readmark`
--
ALTER TABLE `t5iw_readmark`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `t5iw_reject`
--
ALTER TABLE `t5iw_reject`
  ADD PRIMARY KEY (`re_id`);

--
-- Indexes for table `t5iw_submission`
--
ALTER TABLE `t5iw_submission`
  ADD PRIMARY KEY (`submission_id`);

--
-- Indexes for table `t5iw_transection`
--
ALTER TABLE `t5iw_transection`
  ADD PRIMARY KEY (`tr_id`);

--
-- Indexes for table `t5iw_useraccount`
--
ALTER TABLE `t5iw_useraccount`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `t5iw_userinformation`
--
ALTER TABLE `t5iw_userinformation`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t5iw_accesslog`
--
ALTER TABLE `t5iw_accesslog`
  MODIFY `acs_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `t5iw_author`
--
ALTER TABLE `t5iw_author`
  MODIFY `auid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;
--
-- AUTO_INCREMENT for table `t5iw_category`
--
ALTER TABLE `t5iw_category`
  MODIFY `cat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `t5iw_countries`
--
ALTER TABLE `t5iw_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;
--
-- AUTO_INCREMENT for table `t5iw_fileupload`
--
ALTER TABLE `t5iw_fileupload`
  MODIFY `fid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `t5iw_presentation_type`
--
ALTER TABLE `t5iw_presentation_type`
  MODIFY `pr_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `t5iw_readmark`
--
ALTER TABLE `t5iw_readmark`
  MODIFY `r_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t5iw_reject`
--
ALTER TABLE `t5iw_reject`
  MODIFY `re_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t5iw_submission`
--
ALTER TABLE `t5iw_submission`
  MODIFY `submission_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `t5iw_transection`
--
ALTER TABLE `t5iw_transection`
  MODIFY `tr_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t5iw_userinformation`
--
ALTER TABLE `t5iw_userinformation`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
