-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2016 at 11:16 AM
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
(175, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '5sjukjec6tm0bqfqrnd2o7nho1', 3),
(176, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'tjkqrce5025ankmvc34oc5hdr0', 0),
(177, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'k493c9k2kjtdo8s003h1760l20', 0),
(178, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '12uv4n3ptjc35b13smt3165lm3', 0),
(179, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'jrbql76k26b46qabe85mit3nk3', 0),
(180, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'c1ui4d5teup8k9p7ntpd64r375', 0),
(181, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'qu5mlitgfo2fenrhmqa10na6r1', 0),
(182, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'i8k4ojq3vjbjvq07eb334lk5j6', 0),
(183, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', '0l4e1h5454ara8s2o2ckme0l66', 0),
(184, 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', 't.prappre@outlook.com', 'obqjdahmo5aeqp71po6bn024l6', 0);

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
(1, 'PGF17-1-1-1', 'A protitype of Multi-center data collection system.', '1', '1', '', '', 0, '2016-11-17 17:34:05', '1', '8cji7u2nm36u32bfna2alkpq04', 'N', 'tagoon.p@gmail.com'),
(2, 'PGF17-2-2-1', 'Validation of the Prognostic Value of Histologic Scoring Systems in Primary Sclerosing Cholangitis; An International Cohort Study.', '2', '1', 'Assist. Prof.Tagoon Prappre', '<p>Histologic scoring systems specific for primary sclerosing cholangitis (PSC) are not validated. We recently determined the applicability and prognostic value of three histological scoring systems in a single PSC cohort. The aim of this study was to validate their prognostic utility and reproducibility, across a multicenter PSC cohort. Liver biopsies from PSC patients were collected across 7 European centers. Histologic scoring was performed using the Nakanuma, Ishak, and Ludwig scoring systems. Biopsies were independently scored by six liver pathologists for interobserver agreement. The prognostic value of clinical, biochemical, and all three histologic scoring systems on predicting composite endpoint 1: PSC related death and liver transplantation, 2: liver transplantation, and 3: liver related events, was assessed using uni-and multivariable Cox proportional hazards modeling. 119 PSC patients were identified, the median follow-up was 142 months. During follow-up 31 patients died (20 PSC related deaths), 31 underwent liver transplantation, 35 experienced one or more liver related events. All three staging systems were independent predictors of endpoints 2 and 3; Nakanuma HR 3.16 (95%CI 1.49-6.68), HR 2.05 (95%CI 1.17-3.57); Ishak: HR 1.55 (95%CI 1.10-2.18), HR 1.43 (95%CI 1.10-1.85); Ludwig: HR 2.62 (95%CI 1.19-5.80), HR2.06 (95%CI 1.09-3.89), respectively. Only the Nakanuma staging system was independently associated with endpoint 1: HR 2.14 (95%CI 1.22-3.77). Interobserver agreement was moderate for Nakanuma stage (&kappa;=0.56), and substantial for Nakanuma component fibrosis (&kappa;=0.67), Ishak stage (&kappa;=0.64) and Ludwig stage (&kappa;=0.62)...</p>\r\n', 230, '2016-11-25 05:15:25', '1', 'b6iacbt5qd01jane57lj5g5vj3', 'N', 't.prappre@outlook.com'),
(3, 'PGF17-3-2-3', 'asd', '2', '3', 'Assist. Prof.Tagoon Prappre', '<p>asd</p>\r\n', 1, '2016-11-25 10:37:45', '1', '5sjukjec6tm0bqfqrnd2o7nho1', 'N', 't.prappre@outlook.com');

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
('t.prappre@outlook.com', '59adb543cfa6d19204ccf05dcb3537d7', 't.prappre@outlook.com', '2016-11-25', 'kBcjxJCUo15eS0B2Q5Pn', 'Y', 'Y', 3),
('tagoon.p@gmail.com', '17506b92e18d83526acdf8c235233a51', 'tagoon.p@gmail.com', '2016-11-17', '', 'Y', 'Y', 3),
('tagoon.p@psu.ac.th', '464286fe26406f728ac431b2c2a6c425', 'tagoon.p@psu.ac.th', '2016-11-18', '', 'Y', 'Y', 2);

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
  `reg_type` enum('Thai','Inter','NA') NOT NULL DEFAULT 'NA',
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5iw_userinformation`
--

INSERT INTO `t5iw_userinformation` (`user_id`, `par_type`, `prefix_id`, `fname`, `lname`, `university`, `status`, `status_other`, `address`, `country_id`, `tel`, `halal`, `vegie`, `nobeef`, `noseafood`, `accommodation`, `accommodation_other`, `arr_date`, `arr_time`, `dept_date`, `dept_time`, `travel`, `travel_other`, `reg_type`, `username`) VALUES
(2, '1', 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', '2', '-', '-', 'TH', '0935761088', 'N', 'N', 'N', 'N', '99', '-', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '99', '-', 'Thai', 'tagoon.p@gmail.com'),
(3, '2', 'Mr.', 'Tagoon', 'Staff', '', '99', '-', '', 'TH', '', 'N', 'N', 'N', 'N', '99', '-', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '99', '-', 'NA', 'tagoon.p@psu.ac.th'),
(11, '1', 'Assist. Prof.', 'Tagoon', 'Prappre', 'Epidemiology Unit, Faculty of Medicine, Prince of Songkla University.', '3', '-', '103 Kanhcanawanich Road, HatYai, Songkla, Thailand 90110', 'TH', '09351231231', 'N', 'Y', 'N', 'N', '1', '-', '2016-11-30', '05:06:00', '2016-11-30', '06:06:00', '1', '-', 'Inter', 't.prappre@outlook.com');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `t5iw_author`
--
ALTER TABLE `t5iw_author`
  MODIFY `auid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;
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
-- AUTO_INCREMENT for table `t5iw_submission`
--
ALTER TABLE `t5iw_submission`
  MODIFY `submission_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t5iw_transection`
--
ALTER TABLE `t5iw_transection`
  MODIFY `tr_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t5iw_userinformation`
--
ALTER TABLE `t5iw_userinformation`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
