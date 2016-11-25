-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2016 at 03:19 AM
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
(1, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'm6t9ociap8rbl8s19gldkopgo7', 0),
(2, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'tv44u4iavchrk1vc4socg44o00', 0),
(3, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'sj487ijnvu5alsja1v75hlsvp5', 0),
(4, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '503t0osrtat1oud31bhd4s4120', 0),
(5, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '9o860tfvoarnjd6hrumu9r3ba0', 0),
(6, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'i6o307em0qav3s2vd8copi7mk1', 0),
(7, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '77gdtjl9frhao310s6rcl644q0', 0),
(8, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'b3l42etielhmaqctv9vqidean5', 0),
(9, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'qsp1avkhhn8tpil0sksti8ojg7', 0),
(10, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'fa212co88bcj79d67058jn4277', 0),
(11, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'hf3of8gclrbbf59sr7ff88iae0', 0),
(12, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'cdlvc3l14uu2h9qghdl3nrcmj4', 0),
(13, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'fq8smldtfd9vn02vt8ofqocjb6', 0),
(14, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'f9trik1p7c1h9udgo8r8vo12t1', 0),
(15, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '6a7c3iv1dj8fkm5sq39m37e822', 0),
(16, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'teu9d50jis19lu7b7ru7jpifr3', 0),
(17, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'llubaaga7tbhr48ol5e8jgq6n6', 0),
(18, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'ubgdnfr29740r856opc0vtm6v5', 0),
(19, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'p78dl1484vn82bo63k0ig6jcf0', 0),
(20, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '25mmt3bqoungg8kptk1gk23hq4', 0),
(21, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '7762bkqd15ug67jj2q4j31n1u6', 0),
(22, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'bo6dgp016t76ogk6drggelsgq2', 0),
(23, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'dtv2mm0ufc1ht62tloej8udso7', 0),
(24, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'uuumgii8a4negj5lm8ql3ch6c0', 0),
(25, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'q3r4ksig6nn9anj9ut1v9drcr3', 0),
(26, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '185ptnuce15cmio9rhggcel6p7', 0),
(27, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'a8eaphrkb8lmqc3trqelp1sma5', 0),
(28, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '850cjbfelcmpt2u7smg58u56r3', 0),
(29, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'pt87j3g506q78fs6t9hto5skv5', 0),
(30, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'p0ujdashgsf8bigi6qq18nn2d7', 0),
(31, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'lvdmdio4uiregi7kqn8k02m1f6', 0),
(32, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'sg62rks147prbr8rce569vdg51', 0),
(33, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '2hqvji90a4nlkkhv829kpt42p5', 0),
(34, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '9tg1r58hvlk7u0d7imsa09ukv7', 0),
(35, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'ejoss0e50oe3t0l2su0d54s6e4', 0),
(36, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'mfjn5418ahiaq97nkvt37rkq51', 0),
(37, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '4v67g8as5jtldnf5jq63u6h8m2', 0),
(38, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'aag82g85isugtro0ujknn6a6r3', 0),
(39, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'pqkj5a6tppg5e190u662i4qi16', 0),
(40, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '5b6mosie0s873lfuen594spoc0', 0),
(41, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'ql9q8kclr8c2k11ahgtaovdj76', 0),
(42, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'gm8j5s67avf1the16cpvkebla4', 0),
(43, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '5disd8l2bahc9m619661b0u760', 0),
(44, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '9uvk2m2vgcqcmtmrom1pdl6bp5', 0),
(45, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'i7qe4c541ko6oten8gb8nsknr7', 0),
(46, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'aig952nr39j8v3mgo0ccq5j1b5', 0),
(47, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '6pd06mfnp6eadu0hd93i1c6af1', 0),
(48, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'ud4nl1bk45na6355eeg99h4h33', 0),
(49, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '7no2a3a6g1du8prq5vi8ogmn13', 0),
(50, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'emkfmuuvusgs3tv80v83deu324', 0),
(51, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '0l6kqee29bt3o4cc00fg57vva6', 0),
(52, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'm6vl522ka05cddqm67i8l4p572', 0),
(53, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'nt4304mecinlugkv0dct8dj9o5', 0),
(54, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '41hoqf0hp1l9egmil1657a8685', 0),
(55, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'r90lfh6ombjdfkrlcj7vki58t0', 0),
(56, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'h0tc6v7vr9bmjbj67pupvmbno3', 0),
(57, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'gvum9oaqolsjomkkc3nstek282', 0),
(58, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'pgsfr00kkvghhe4vorm0ltar97', 0),
(59, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'r055nflqnk96dtnfat4sbd2ui3', 0),
(60, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'bsdalb993eo2ikqt5aecmn9055', 0),
(61, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'fs8es9nmot666um7vrdm3v5af2', 0),
(62, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'mv4bj5falhcsb045fak42984a5', 0),
(63, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '1tkrfvm3idtv2v5bnvmeerfek2', 0),
(64, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '0oq6uukrig7b7hor6jfpv29s32', 0),
(65, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'ah5i6ohr1n1p6lfgmub2gpui12', 0),
(66, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '9ja16guf3s8k117iq0etargsd1', 0),
(67, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '86t6odokcqud6r9t7be894jv31', 0),
(68, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'ckmcbrt1qjnclf1lleac2nirj3', 0),
(69, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '0qrgfvi6itmi3mn98ciko3gtt0', 0),
(70, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'pkhieve52cfub6o79okvn5u793', 0),
(71, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'ldf7c0vhu2b9tk7um4krf1prd7', 0),
(72, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'dgnee8mbsrai7tslphr3v3q003', 0),
(73, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'bu47ned5n7jrf53kar1ipgm797', 0),
(74, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '72ajrdoldkmeb1b0p9ibha3vm3', 0),
(75, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'o3ds6f5nnnjktlec093sd41rj1', 0),
(76, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'lmuu7v91qiq0qcsn0rbm65scj3', 0),
(77, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '00lldef8ld4d6r6otbbl9o3n53', 0),
(78, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'hdt47qkjk0noqogjr3r4dssbt2', 0),
(79, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'qkcjo88sa5rtiqh1543j00mih2', 0),
(80, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'oc2iqgaj4vggta5rhpdf0hv9f3', 0),
(81, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'ft6qmqoacs5d26d2ueba13tln0', 0),
(82, 'Mr.', 'Nattina', 'Wichaidith', 'asd', 'nattina.vi@gmail.com', 'ft6qmqoacs5d26d2ueba13tln0', 0),
(83, 'Ms.', 'asda', 'sda', 'asd', 'sd@gmail.com', 'ft6qmqoacs5d26d2ueba13tln0', 0),
(84, 'Ms.', 'asda', 'sd', 'asd', 'asd@gmail.com', 'ft6qmqoacs5d26d2ueba13tln0', 0),
(85, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '2cqvh3mr6itt6449um9uja3v11', 0),
(86, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'gtnm27q5pg38g5b4151j6reb33', 0),
(87, 'Ms.', 'asd', 'asd', 'asd', 'as@gmail.com', 'gtnm27q5pg38g5b4151j6reb33', 0),
(88, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '5ihp3499ejubl6cnaikqa08ct4', 0),
(89, 'Mr.', 'asda', 'asd', 'asd', 'asd@gmail.com', '5ihp3499ejubl6cnaikqa08ct4', 0),
(90, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'nean6i7oinu6a62q3b5ge078r0', 0),
(91, 'Mrs.', 'asd', 'asd', 'asd', 'asd@gmail.com', 'nean6i7oinu6a62q3b5ge078r0', 0),
(92, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'ooa2caj9m01m8g566q415pdln3', 0),
(93, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'rfgi33cn9klkvvnbat3f2b4vn5', 0),
(94, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'q1ebi9isk0r59o99mblseevrh7', 0),
(95, 'Ms.', 'asd', 'asd', '123', 'asd@gmail.com', 'q1ebi9isk0r59o99mblseevrh7', 0),
(96, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'mugrfm0t0h6s51s2cllaeu02h4', 0),
(99, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '5t6ieb53jvjdofjh4gr2jo7i24', 0),
(100, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'l8qhbs8nd2sda390avtqmhqjv5', 0),
(101, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'q1ivklm4ofucae7n9vk9ained6', 0),
(102, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', '4e8nb2n11v9raj2tmghtlb1bp3', 0),
(103, 'Mr.', 'Tagoon', 'Prappre', 'Epidemiology Unit, PSU', 'tagoon.p@gmail.com', 'c1b466po88untukvq7rlt8dtq6', 0),
(104, 'Assist. Prof.', 'adad', 'asd', 'ad', 't.prappre@outlook.com', 'objo62ciucc5o9rv8eaqagv7q6', 0),
(105, 'Ms.', 'ee', 'eee', 'asd', 'twsdf@asd.com', 'objo62ciucc5o9rv8eaqagv7q6', 0);

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
('t.prappre@outlook.com', '3b7c3b0761a2c8ebc805a1b75a8550b5', 't.prappre@outlook.com', '2016-11-25', 'kBcjxJCUo15eS0B2Q5Pn', '', 'N', 3),
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
(11, '1', 'Assist. Prof.', 'adad', 'asd', 'ad', '3', '-', 'asd', 'DZ', '09351231231', 'N', 'Y', 'N', 'N', '1', '-', '2016-11-30', '05:06:00', '2016-11-30', '06:06:00', '1', '-', 'Inter', 't.prappre@outlook.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t5iw_author`
--
ALTER TABLE `t5iw_author`
  ADD PRIMARY KEY (`auid`);

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
-- AUTO_INCREMENT for table `t5iw_author`
--
ALTER TABLE `t5iw_author`
  MODIFY `auid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
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
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
