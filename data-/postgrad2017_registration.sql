-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2016 at 01:21 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

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
-- Table structure for table `t5iw_submission`
--

CREATE TABLE `t5iw_submission` (
  `submission_id` int(10) UNSIGNED NOT NULL,
  `id` varchar(20) NOT NULL,
  `title` text NOT NULL,
  `presentation_type` enum('1','2','99') NOT NULL DEFAULT '99',
  `topic_group` enum('1','2','3','4','5','6','7','99') NOT NULL DEFAULT '99',
  `submit_date_time` datetime NOT NULL,
  `stage` enum('1','2','3','4','5','99') NOT NULL DEFAULT '1',
  `sess_id` varchar(200) NOT NULL,
  `sending_status` enum('N','Y') NOT NULL DEFAULT 'N',
  `delete_status` enum('N','Y') NOT NULL DEFAULT 'N',
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5iw_submission`
--

INSERT INTO `t5iw_submission` (`submission_id`, `id`, `title`, `presentation_type`, `topic_group`, `submit_date_time`, `stage`, `sess_id`, `sending_status`, `delete_status`, `username`) VALUES
(1, 'PGF17-1-1-1', 'A protitype of Multi-center data collection system.', '1', '1', '2016-11-17 17:34:05', '1', '8cji7u2nm36u32bfna2alkpq04', 'Y', 'N', 'tagoon.p@gmail.com');

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
('tagoon.p@gmail.com', '17506b92e18d83526acdf8c235233a51', 'tagoon.p@gmail.com', '2016-11-17', '', 'Y', 'Y', 3),
('tagoon.p@psu.ac.th', '464286fe26406f728ac431b2c2a6c425', 'tagoon.p@psu.ac.th', '2016-11-18', '', 'Y', 'Y', 2);

-- --------------------------------------------------------

--
-- Table structure for table `t5iw_userinformation`
--

CREATE TABLE `t5iw_userinformation` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `prefix_id` varchar(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `university` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `country_id` varchar(10) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `halal` enum('N','Y') NOT NULL DEFAULT 'N',
  `reg_type` enum('Thai','Inter','NA') NOT NULL DEFAULT 'NA',
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5iw_userinformation`
--

INSERT INTO `t5iw_userinformation` (`user_id`, `prefix_id`, `fname`, `lname`, `university`, `address`, `country_id`, `tel`, `halal`, `reg_type`, `username`) VALUES
(2, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', '-', 'TH', '0935761088', 'N', 'Thai', 'tagoon.p@gmail.com'),
(3, 'Mr.', 'Tagoon', 'Staff', '', '', 'TH', '', 'N', 'NA', 'tagoon.p@psu.ac.th');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `t5iw_submission`
--
ALTER TABLE `t5iw_submission`
  MODIFY `submission_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t5iw_transection`
--
ALTER TABLE `t5iw_transection`
  MODIFY `tr_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t5iw_userinformation`
--
ALTER TABLE `t5iw_userinformation`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
