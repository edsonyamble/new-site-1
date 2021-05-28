-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 18, 2017 at 09:30 AM
-- Server version: 5.6.37
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrmbdtas_v2_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc_account_name`
--

CREATE TABLE `acc_account_name` (
  `account_id` int(11) UNSIGNED NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `account_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acc_account_name`
--

INSERT INTO `acc_account_name` (`account_id`, `account_name`, `account_type`) VALUES
(1, 'Employee Salary', 0),
(2, 'Product Sale', 1),
(3, 'Agent paid', 0),
(5, 'ajkerdeal', 1),
(6, 'kalker deal', 0),
(7, 'Manager Salary ', 0),
(8, 'Product Buying', 0),
(9, 'Product  Selling', 1),
(10, 'Electricity Bill ', 0),
(11, 'Project Service Charge', 1),
(12, 'Guest Service ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `acn_account_transaction`
--

CREATE TABLE `acn_account_transaction` (
  `account_tran_id` int(11) UNSIGNED NOT NULL,
  `account_id` int(11) NOT NULL,
  `transaction_description` varchar(255) NOT NULL,
  `amount` varchar(25) NOT NULL,
  `tran_date` date NOT NULL,
  `payment_id` int(11) NOT NULL,
  `create_by_id` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acn_account_transaction`
--

INSERT INTO `acn_account_transaction` (`account_tran_id`, `account_id`, `transaction_description`, `amount`, `tran_date`, `payment_id`, `create_by_id`) VALUES
(11, 2, 'k;lk', '50000', '2017-08-28', 1235, 'Jhon  Doe'),
(12, 1, 'jhk', '20000', '2017-08-28', 45, 'Jhon  Doe'),
(13, 2, 'buying Goods', '50000', '2017-08-29', 24, 'Jhon  Doe'),
(14, 1, 'dsfdsf', '2000', '2017-08-29', 123, 'Jhon  Doe'),
(15, 1, 'fgfdg', '18000', '2017-08-29', 234, 'Jhon  Doe'),
(16, 2, 'ghj', '40000', '2017-08-30', 142, 'Jhon  Doe'),
(17, 2, 'Total product', '60000', '2017-09-07', 125, 'Jhon  Doe'),
(18, 2, 'dsfgsd', '70000', '2017-09-09', 0, 'Jhon  Doe'),
(19, 3, 'na', '5000', '2017-09-09', 0, 'Jhon  Doe'),
(20, 2, 'ghdfg', '25000', '2017-09-10', 0, 'Jhon  Doe');

-- --------------------------------------------------------

--
-- Table structure for table `award`
--

CREATE TABLE `award` (
  `award_id` int(11) NOT NULL,
  `award_name` varchar(50) NOT NULL,
  `aw_description` varchar(200) NOT NULL,
  `awr_gift_item` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `employee_id` int(11) NOT NULL,
  `awarded_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `award`
--

INSERT INTO `award` (`award_id`, `award_name`, `aw_description`, `awr_gift_item`, `date`, `employee_id`, `awarded_by`) VALUES
(3, 'bast employee ', 'bast employee ', 'price ', '2017-09-09', 2017, 'ceo'),
(5, 'glasgo ward', 'This is glasgo ward fgyty nfg tyuty tfu tyu tyuty utyuty utryut', 'watchhfgh', '2017-08-01', 3598875, 'Tanzil'),
(6, 'gyhrdg', 'fdghdrg', 'ghf', '2017-09-06', 123456, 'ghf'),
(7, 'PriceMoney', 'gfh', 'gfhfg', '2017-09-10', 123456, 'gfh'),
(9, 'testbd', 'sdfsd', 'Mobile', '2017-09-03', 123456, 'Bdtask'),
(10, 'Best Employee Sept-2017', 'Lorem ipsum nagata oragam likaser nigata managa hurman kalinga nakaja.', 'Mobile', '2017-09-22', 123456, 'S M Tarek');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_basic_info`
--

CREATE TABLE `candidate_basic_info` (
  `can_id` varchar(20) NOT NULL,
  `first_name` varchar(11) CHARACTER SET latin1 DEFAULT NULL,
  `last_name` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `alter_phone` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `present_address` varchar(100) CHARACTER SET latin1 NOT NULL,
  `parmanent_address` varchar(100) CHARACTER SET latin1 NOT NULL,
  `picture` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidate_basic_info`
--

INSERT INTO `candidate_basic_info` (`can_id`, `first_name`, `last_name`, `email`, `phone`, `alter_phone`, `present_address`, `parmanent_address`, `picture`) VALUES
('150073610425S', 'Rinku ', 'Thandar Mill', 'tr@bdtask.com', '3456789098', '3345678987', '98/A, East Lackx view,West Nkhali', '98/A, East Lackx view,West Nkhali', './application/modules/circularprocess/assets/images/2017-07-22/cha1.jpg'),
('150073627021S', 'Rex ', 'Mattins', 'rax@bdtask.com', '762345678', '876543456', 'South Ferri Ghat,Padma River,Chandpur', 'South Ferri Ghat,Padma River,Chandpur', './application/modules/circularprocess/assets/images/2017-07-22/hum.jpg'),
('150073648921S', 'Michael ', 'Jerad ', 'mic@bdtask.com', '234567890', '234567890', '231,East Patalipur,Sonamuri', '231,East Patalipur,Sonamuri', './application/modules/circularprocess/assets/images/2017-07-22/por1.jpg'),
('150073689333S', 'Rishab ', 'Pant', 'pant@bdtask.com', '987654323456', '976544564567', 'South Ferri Ghat,Padma River,Chandpur', 'South Ferri Ghat,Padma River,Chandpur', './application/modules/circularprocess/assets/images/2017-07-22/hum1.jpg'),
('150078881074S', 'Mr', 'Kabir', 'kabir@gmail.com', '01955110016', '01730164623', 'Mirpur', 'Shariatpur', './application/modules/circularprocess/assets/images/2017-07-23/3.jpg'),
('150080778404S', 'Tory', 'Burhan', 'tory@bdtask.com', '123456789078', '876543456789', 'South Ferri Ghat,Padma River,Chandpur', '231,East Patalipur,Sonamuri', './application/modules/circularprocess/assets/images/2017-09-09/chr.jpg'),
('150521663946S', 'SUMCH', 'TAREK', 'abcd@gmail.com', '2699692249', '2699692249', '1939 ELLIS AVENUE\r\nApt 1', '1939 ELLIS AVENUE\r\nApt 1', './application/modules/circularprocess/assets/images/2017-09-13/mer.jpg'),
('150527823957S', 'Harun ', 'Ur Rashid', 'harun@gmail.com', '01621815163', '14645541', 'dfsgdfg', 'dfgsdfg', './application/modules/circularprocess/assets/images/2017-09-13/3.jpg'),
('15052827942S', 'Abu', 'Ali', 'abu@gmail.com', '0123457896', '2647895632', 'dhaka', 'dhaka', './application/modules/circularprocess/assets/images/2017-09-13/dea.jpg'),
('150529876111S', 'Imran', 'Hasan', 'imran@gmail.com', '0921239916', '14645541', 'dsfdsf', 'sdfsdfsdf', './application/modules/circularprocess/assets/images/2017-09-13/2.jpg'),
('150530073394S', 'Hannan', 'Ur Rashid', 'admin@example.com', '1251', '14645541', 'dsf', 'sdfsdaf', NULL),
('150530166732S', 'js', 'sdf', 'j@gmail.com', '01621815163', '', '', '', NULL),
('150530315209S', 'SUMCH', 'TAREK', 'sumchtarek@gmail.com', '2699692249', '2699692249', '1939 ELLIS Avenue', '1939 ELLIS Avenue', NULL),
('150540281899S', 'Handy', 'Ercel', 'han@bdtask.com', '77853567899', '77564738900', '231,East Patalipur,Sonamuri', '231,East Patalipur,Sonamuri', './application/modules/circularprocess/assets/images/2017-09-14/sui.jpg'),
('150540405402S', 'Yun Min', 'Kin', 'yan@bdtask.com', '98765433567', '87654456789', 'South Ferri Ghat,Padma River,Chandpur', 'South Ferri Ghat,Padma River,Chandpur', './application/modules/circularprocess/assets/images/2017-09-14/bow.jpg'),
('150540570798S', 'Nadal ', 'Al Gouri', 'nad@gmail.com', '234567890', '234567890', '98/A, East Lackx view,West Nkhali', '98/A, East Lackx view,West Nkhali', './application/modules/circularprocess/assets/images/2017-09-14/tie.jpg'),
('150549777054S', 'Zara ', 'Mixav', 'zara@bdtask.com', '987654323456', '98763456789', '231,East Patalipur,Sonamuri', '231,East Patalipur,Sonamuri', './application/modules/circularprocess/assets/images/2017-09-15/dol.jpg'),
('150549790009S', 'Jimmi ', 'Sutarland', 'jimi@bdtask.com', '75434567890', '63456789067', '98/A, East Lackx view,West Nkhali', '98/A, East Lackx view,West Nkhali', './application/modules/circularprocess/assets/images/2017-09-15/eye.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_education_info`
--

CREATE TABLE `candidate_education_info` (
  `can_edu_id` int(11) NOT NULL,
  `can_id` varchar(30) NOT NULL,
  `degree_name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `university_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `cgp` varchar(30) CHARACTER SET latin1 NOT NULL,
  `comments` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sequencee` varchar(255) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidate_education_info`
--

INSERT INTO `candidate_education_info` (`can_edu_id`, `can_id`, `degree_name`, `university_name`, `cgp`, `comments`, `sequencee`) VALUES
(7, '150072625687S', 'MSC', 'National University', '3.30', 'fghfghfgh', NULL),
(8, '150072625687S', 'Bsc', 'fgh', 'fgh', 'fghfghfgh', NULL),
(9, '150072625687S', 'ff', 'fgh', 'fgh', 'fghfghfgh', NULL),
(47, '150073627021S', 'kkkkkkkkkk', 'University Of Mosco', '3.45', 'Lorem ipsum dolor sit amet, consectetur adipiscing', NULL),
(48, '150073627021S', 'Diploma in International Relat', 'University Of Mosco', '3.45', 'Lorem ipsum dolor sit amet, consectetur adipiscing', NULL),
(49, '150073627021S', 'Diploma in International Relat', 'University Of Mosco', '3.45', 'Lorem ipsum dolor sit amet, consectetur adipiscing', NULL),
(50, '150073627021S', 'Goood88', 'Nordan', '3', 'Lorem ipsum dolor sit amet, consectetur adipiscing', NULL),
(51, '150073627021S', 'MSceeeeeeeeee', 'National University', '3.30', 'Lorem ipsum dolor sit amet, consectetur adipiscing', NULL),
(52, '150073627021S', 'MMMMMMMMM', 'National University', '3.30', 'Lorem ipsum dolor sit amet, consectetur adipiscing', NULL),
(53, '150073627021S', 'hhhhhhhhhh', 'df', '3.30', 'Lorem ipsum dolor sit amet, consectetur adipiscing', NULL),
(57, '150080778404S', 'MBA', 'Dhaka University', '3.45', 'lorem ipasd orgat tugan rtuedr', NULL),
(58, '150080778404S', 'BBA', 'University Of South Amishapara', '3.47', 'lorem ipasd orgat tugan rtuedr', NULL),
(59, '150080778404S', 'B.Sc', 'Jaghonath University', '4', 'lorem ipasd orgat tugan rtuedr', NULL),
(60, '150527823957S', 'M.Sc', 'North Sauth', '4', 'sdfsdf', NULL),
(61, '150527823957S', 'B.Sc', 'Jaghonath University', 'First Class', 'sdfsdf', NULL),
(62, '150527823957S', 'H.Sc', 'Sayed Abul Hossain College', '4', 'sdfsdf', NULL),
(63, '15052827942S', 'Bsc in Csc', 'Stanford University', '3.50', 'na', NULL),
(64, '15052827942S', '', '', '', 'na', NULL),
(65, '15052827942S', '', '', '', 'na', NULL),
(66, '150529876111S', 'M.Sc', 'Jaghonath University', 'First Class', 'Nice', NULL),
(67, '150529876111S', 'B.Sc', 'Jaghonath University', 'First Class', 'Nice', NULL),
(68, '150529876111S', 'H.Sc', 'Sayed Abul Hossain College', '4', 'Nice', NULL),
(69, '15053001258S', 'H.Sc', 'Sayed Abul Hossain College', '4', 'rty', NULL),
(70, '15053001258S', '', '', '', 'rty', NULL),
(71, '15053001258S', '', '', '', 'rty', NULL),
(72, '150530073394S', 'ssc', 'Sayed Abul Hossain College', '4', 'sdfsdf', NULL),
(73, '150530073394S', '', '', '', 'sdfsdf', NULL),
(74, '150530073394S', '', '', '', 'sdfsdf', NULL),
(75, '150530166732S', 'H.Sc', 'Sayed Abul Hossain College', '', '', NULL),
(76, '150530166732S', '', '', '', '', NULL),
(77, '150530166732S', '', '', '', '', NULL),
(78, '150530315209S', 'fdsdgf', 'dfgsdfdsgdfsg', '43', 'dfgf', NULL),
(79, '150530315209S', '', '', '', 'dfgf', NULL),
(80, '150530315209S', '', '', '', 'dfgf', NULL),
(81, '150540281899S', 'MSc', 'Noakhali University Of Science & Technology', '3.45', '', NULL),
(82, '150540281899S', 'BSc', 'University Of Hazimarket Science & Technology ', '3.60', '', NULL),
(83, '150540281899S', 'PhD', 'University Of South Carolina', '3.45', '', NULL),
(84, '150540405402S', 'BBA', 'University Of South Carolina', '3.47', '', NULL),
(85, '150540405402S', 'MBA', 'University Of Mosco', '3.50', '', NULL),
(86, '150540405402S', '', '', '', '', NULL),
(87, '150540570798S', 'PhD', 'University Of South Carolina', '3.60', '', NULL),
(88, '150540570798S', 'MBA', 'University Of Hazimarket Science & Technology ', '3.60', '', NULL),
(89, '150540570798S', 'BSc', 'Noakhali University Of Science & Technology', '3.47', '', NULL),
(90, '150549777054S', 'MBA', 'University Of South Amishapara', '3.60', '', NULL),
(91, '150549777054S', 'BBA', 'University Of Mosco', '3.45', '', NULL),
(92, '150549777054S', '', '', '', '', NULL),
(93, '150549790009S', 'MSc', 'University Of Hazimarket Science & Technology ', '3.60', '', NULL),
(94, '150549790009S', 'BSc', 'University Of South Carolina', '3.45', '', NULL),
(95, '150549790009S', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_interview`
--

CREATE TABLE `candidate_interview` (
  `can_int_id` int(11) NOT NULL,
  `can_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `job_adv_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `interview_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `interviewer_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `interview_marks` varchar(50) CHARACTER SET latin1 NOT NULL,
  `written_total_marks` varchar(50) CHARACTER SET latin1 NOT NULL,
  `mcq_total_marks` varchar(50) CHARACTER SET latin1 NOT NULL,
  `total_marks` varchar(30) NOT NULL,
  `recommandation` varchar(50) CHARACTER SET latin1 NOT NULL,
  `selection` varchar(50) CHARACTER SET latin1 NOT NULL,
  `details` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidate_interview`
--

INSERT INTO `candidate_interview` (`can_int_id`, `can_id`, `job_adv_id`, `interview_date`, `interviewer_id`, `interview_marks`, `written_total_marks`, `mcq_total_marks`, `total_marks`, `recommandation`, `selection`, `details`) VALUES
(2, '14995956377771L', 'management', '2017-07-23', 'ceo', '50', '100', '50', '200', 'na', 'ok', 'uyyh'),
(3, '150073610425S', 'Junior Executive ', '2017-07-27', 'Michele Kusu', '78', '70', '89', '237', 'Yes', 'ok', 'Lorem ipsum dolor sit amet, consectetur adipiscing'),
(4, '150073648921S', 'Junior Software Developer', '2017-07-28', 'Niranjan Khan Bin Latif', '50', '60', '70', '180', 'No', 'No', 'Lorem ipsum dolor sit amet, consectetur adipiscing'),
(5, '150078881074S', 'Chief Executive', '2017-07-23', 'MR', '25', '25', '20', '70', 'ewr', 'ok', 'ghfg'),
(6, '150073689333S', 'Lead Programmar Manager', '2017-07-17', 'MR', '10', '26', '23', '59', 'ewr', 'ok', 'sdfsdf'),
(7, '150527823957S', 'Senior Executive', '2017-09-13', 'Isahaq', '25', '45', '20', '90', 'sdfsdf', 'ok', 'sdfsdf'),
(8, '15052827942S', 'HR Admin', '2017-09-14', 'ceo', '40', '100', '60', '200', 'na', 'ok', 'na'),
(9, '150529876111S', 'Senior Executive', '2017-09-13', 'Isahaq', '20', '45', '20', '85', 'sdfsdf', 'ok', 'dfgdfg'),
(10, '150540405402S', 'Junior Software Developer', '2017-09-18', 'Michele Kusu', '78', '70', '70', '237', 'Yes', 'ok', ''),
(11, '150540281899S', 'Senior Executive', '2017-09-20', 'Niranjan Khan Latif', '50', '60', '70', '180', 'No', 'No', ''),
(12, '150549777054S', 'Senior Executive', '2017-09-27', 'Tim Cook', '78', '70', '89', '237', 'Yes', 'ok', 'Lorem ipsum dolor sit amet, consectetur adipiscing'),
(13, '150549790009S', 'Senior Executive', '2017-09-19', 'Michele Kusu', '50', '90', '89', '229', 'Yes', 'ok', 'Lorem ipsum dolor sit amet, consectetur adipiscing'),
(14, '150540570798S', 'Senior Executive', '2017-09-20', 'UY Kun Shan', '80', '70', '70', '220', 'Yes', 'ok', '');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_selection`
--

CREATE TABLE `candidate_selection` (
  `can_sel_id` int(11) NOT NULL,
  `can_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `employee_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pos_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `selection_terms` varchar(50) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidate_selection`
--

INSERT INTO `candidate_selection` (`can_sel_id`, `can_id`, `employee_id`, `pos_id`, `selection_terms`) VALUES
(1, '150073610425S', 'STD897', 'Junior Executive ', 'Lorem ipsum dolor sit amet, consectetur adipiscing'),
(3, '150078881074S', 'TRE654', 'Chief Executive', 'Lorem ipsum dolor sit amet, consectetur.'),
(4, '150527823957S', 'YTR982', 'Senior Executive', 'Lorem ipsum dolor sit'),
(7, '150540405402S', 'QR1234', 'Junior Software Developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing'),
(8, '150529876111S', 'RTY123', 'Senior Executive', 'Lorem ipsum dolor sit amet, consectetur adipiscing'),
(9, '15052827942S', 'YUT234', 'HR Admin', 'Lorem ipsum dolor sit amet, consectetur adipiscing'),
(10, '150540570798S', 'YTR987', 'Senior Executive', 'Lorem ipsum dolor sit amet, consectetur adipiscing'),
(11, '150549790009S', 'OIT876', 'Senior Executive', 'Lorem ipsum dolor sit amet, consectetur adipiscing'),
(12, '150549777054S', 'MIT908', 'Senior Executive', 'Lorem ipsum dolor sit amet, consectetur adipiscing'),
(13, '150073689333S', 'RTS098', 'Lead Programmar Manager', 'Lorem ipsum dolor sit amet, consectetur adipiscing');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_shortlist`
--

CREATE TABLE `candidate_shortlist` (
  `can_short_id` int(11) NOT NULL,
  `can_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `job_adv_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `date_of_shortlist` varchar(50) CHARACTER SET latin1 NOT NULL,
  `interview_date` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidate_shortlist`
--

INSERT INTO `candidate_shortlist` (`can_short_id`, `can_id`, `job_adv_id`, `date_of_shortlist`, `interview_date`) VALUES
(5, '150073610425S', 'Junior Executive ', '2017-07-22', '29-07-2017'),
(7, '150073648921S', 'Junior Software Developer', '2017-07-22', '26-07-2017'),
(8, '150073689333S', 'Lead OOOOOOOOOO', '2017-07-22', '27-07-2017'),
(9, '150527823957S', 'Senior Executive', '2017-09-13', '2017-09-16'),
(10, '15052827942S', 'HR Admin', '2017-09-13', '21-09-2017'),
(11, '150529876111S', 'Senior Executive', '2017-09-13', '2017-09-13'),
(12, '150540281899S', 'Senior Executive', '2017-09-14', '2017-09-22'),
(13, '150540405402S', 'Junior Software Developer', '2017-09-14', '2017-09-18'),
(14, '150080778404S', 'Senior Executive', '2017-09-15', '2017-09-28'),
(15, '150073627021S', 'Senior Executive', '2017-09-15', '2017-09-20'),
(16, '150540570798S', 'Senior Executive', '2017-09-15', '2017-09-19'),
(17, '150549790009S', 'Senior Executive', '2017-09-15', '2017-09-29'),
(18, '150549777054S', 'Senior Executive', '2017-09-15', '2017-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_workexperience`
--

CREATE TABLE `candidate_workexperience` (
  `can_workexp_id` int(11) NOT NULL,
  `can_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `company_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `working_period` varchar(50) CHARACTER SET latin1 NOT NULL,
  `duties` varchar(30) CHARACTER SET latin1 NOT NULL,
  `supervisor` varchar(50) CHARACTER SET latin1 NOT NULL,
  `sequencee` varchar(10) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidate_workexperience`
--

INSERT INTO `candidate_workexperience` (`can_workexp_id`, `can_id`, `company_name`, `working_period`, `duties`, `supervisor`, `sequencee`) VALUES
(1, '150072625687S', 'Infostystem', '07/22/2017 - 07/22/2017', 'Senior Programmar', 'sdfsdf', ''),
(2, '150072625687S', 'sdf', '07/22/2017 - 07/22/2017', 'dsfsd', 'fsdf', ''),
(3, '150072625687S', 'sdf', '07/22/2017 - 07/22/2017', 'sdfsdf', 'dsfsdf', ''),
(4, '150073610425S', 'ELIASH & ASSOCIATES', '03/22/2017 - 07/22/2017', '500', 'Mira Chetarjee ', ''),
(5, '150073610425S', '', '07/22/2017 - 07/22/2017', '', '', ''),
(6, '150073610425S', '', '07/22/2017 - 07/22/2017', '', '', ''),
(7, '150073627021S', 'UTY BANG', '07/22/2017 - 07/22/2017', '670', 'Murat Rodriguaz', ''),
(8, '150073627021S', 'MEDI LIVE', '07/22/2017 - 07/22/2017', '5000', 'Nicola Ogastin', ''),
(9, '150073627021S', '', '07/22/2017 - 07/22/2017', '', '', ''),
(10, '150073648921S', 'BDTASK', '01/22/2017 - 07/22/2017', '5000', 'Murat Rodriguaz', ''),
(11, '150073648921S', 'ELIASH & ASSOCIATES', '07/22/2017 - 07/22/2017', '700', 'Murad Zadran', ''),
(12, '150073648921S', '', '07/22/2017 - 07/22/2017', '', '', ''),
(19, '150073689333S', 'Michle Co.', '01/22/2017 - 07/22/2017', 'Executive', 'Murad Zadran', ''),
(20, '150073689333S', 'Motiur Verities Ltd ', '07/22/2016 - 07/22/2016', 'Junior Executive', 'Mira Chetarjee ', ''),
(21, '150073689333S', 'Innovedious', '07/22/2017 - 07/22/2017', 'Juniour Programmar', 'dfsdf', ''),
(22, '150527823957S', 'Innovedious', '2017-02-16-2018', 'Juniour Programmar', 'dfsdf', ''),
(23, '150527823957S', 'Pingbd', '2017-05454', 'senior Programmar', 'Safifq', ''),
(24, '150527823957S', 'Infinity', '2017-05454', 'Lead programmar', 'sakib', ''),
(25, '15052827942S', 'Harbingers Systems', '2011', 'HR', 'Morris Alon', ''),
(26, '15052827942S', '', '', '', '', ''),
(27, '15052827942S', '', '', '', '', ''),
(28, '150529876111S', 'Miaky', '2017-02-16-2018', 'Juniour Programmar', 'sadasd', ''),
(29, '150529876111S', 'Innovedious', '2017-05454', 'senior Programmar', 'sadasd', ''),
(30, '150529876111S', 'Pingbd', '2017-02-16-2018', 'Lead programmar', 'sadasd', ''),
(31, '15053001258S', 'Innovedious', '2017-02-16-2018', 'Juniour Programmar', 'dfsdf', ''),
(32, '15053001258S', '', '', '', '', ''),
(33, '15053001258S', '', '', '', '', ''),
(34, '150530073394S', 'Innovedious', '2017-02-16-2018', 'Juniour Programmar', 'sdfsdf', ''),
(35, '150530073394S', '', '', '', '', ''),
(36, '150530073394S', '', '', '', '', ''),
(37, '150530166732S', '', '', '', '', ''),
(38, '150530166732S', '', '', '', '', ''),
(39, '150530166732S', '', '', '', '', ''),
(40, '150530315209S', 'fgdfg', 'fdgdfg', 'fdsg', 'dfgds', ''),
(41, '150530315209S', '', '', '', '', ''),
(42, '150530315209S', '', '', '', '', ''),
(43, '150540281899S', 'Motiur Verities Ltd ', '07/22/2015 - 07/22/2016', 'Senior Executive', 'Murad Zadran', ''),
(44, '150540281899S', 'Khanpan Mixatu Ltd', '07/22/2016 - 07/22/2016', 'Executive', 'Nicola Ogastin', ''),
(45, '150540281899S', '', '', '', '', ''),
(46, '150540405402S', 'BIX Corp.', '07/22/2017 - 07/22/2017', 'Marketing Head', 'Murat Rodriguaz', ''),
(47, '150540405402S', '', '', '', '', ''),
(48, '150540405402S', '', '', '', '', ''),
(49, '150540570798S', 'VIRT Ltd', '07/22/2016 - 07/22/2016', 'Senior Executive', 'Miraz Dehlovi', ''),
(50, '150540570798S', '', '', '', '', ''),
(51, '150540570798S', '', '', '', '', ''),
(52, '150549777054S', 'ELIASH & ASSOCIATES', '07/22/2017 - 09/22/2017', 'Senior Executive', 'Tim Nixaloski', ''),
(53, '150549777054S', '', '', '', '', ''),
(54, '150549777054S', '', '', '', '', ''),
(55, '150549790009S', 'TIM TAXO Ltd', '07/22/2017 - 09/22/2017', 'Executive', 'Mira Chetarjee ', ''),
(56, '150549790009S', '', '', '', '', ''),
(57, '150549790009S', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `department_name`) VALUES
(2, 'IT Department'),
(6, 'HRM'),
(7, 'Creative Design'),
(8, 'SDLC Section '),
(9, 'Project Analysis'),
(10, 'Networking '),
(11, 'Project Development'),
(12, 'Testing & Application ');

-- --------------------------------------------------------

--
-- Table structure for table `employee_history`
--

CREATE TABLE `employee_history` (
  `emp_his_id` int(11) NOT NULL,
  `employee_id` varchar(30) NOT NULL,
  `pos_id` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(32) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `alter_phone` varchar(30) NOT NULL,
  `present_address` varchar(100) NOT NULL,
  `parmanent_address` varchar(100) NOT NULL,
  `picture` text NOT NULL,
  `degree_name` varchar(30) NOT NULL,
  `university_name` varchar(50) NOT NULL,
  `cgp` varchar(30) NOT NULL,
  `passing_year` varchar(30) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `working_period` varchar(30) NOT NULL,
  `duties` varchar(30) NOT NULL,
  `supervisor` varchar(30) NOT NULL,
  `signature` text NOT NULL,
  `is_admin` int(2) NOT NULL DEFAULT '0',
  `dept_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee_history`
--

INSERT INTO `employee_history` (`emp_his_id`, `employee_id`, `pos_id`, `first_name`, `last_name`, `email`, `phone`, `alter_phone`, `present_address`, `parmanent_address`, `picture`, `degree_name`, `university_name`, `cgp`, `passing_year`, `company_name`, `working_period`, `duties`, `supervisor`, `signature`, `is_admin`, `dept_id`) VALUES
(164, '123456', 'Junior Software Developer', 'Hm', 'Isahaq', 'hmisahaq@yahoo.com', '01955110016', '01730164623', 'Mohammadpur Dhaka, ', 'Madaripur', './application/modules/employee/assets/images/2017-08-30/pro.png', 'M.Sc', 'National university', 'First class', '2013', 'Bdtask', '06/01/2017 - 07/28/2017', 'junior Programmar', 'Humayun', '', 0, 2),
(165, '123456', 'Junior Software Developer', 'Hm', 'Isahaq', 'hmisahaq@yahoo.com', '01955110016', '01730164623', 'Mohammadpur Dhaka, ', 'Madaripur', './application/modules/employee/assets/images/2017-08-30/pro.png', 'Honour\'s', 'National University', 'First Class', '2012', 'Infostystem', '07/23/2017 - 07/23/2017', 'Senior Programmar', 'Shamim', '', 0, 2),
(166, '123456', 'Junior Software Developer', 'Hm', 'Isahaq', 'hmisahaq@yahoo.com', '01955110016', '01730164623', 'Mohammadpur Dhaka, ', 'Madaripur', './application/modules/employee/assets/images/2017-08-30/pro.png', '', '', '', '', '', '', '', '', '', 0, 2),
(167, '3598875', 'Chief Executive', 'Hannan', 'Molla', 'hannan@gmail.com', '74765431', '35665', 'Dhanmondi 12,', 'Barishal', './application/modules/employee/assets/images/2017-09-07/chr.jpg', 'M.Sc', 'Jaghonath University', 'First Class', '2004', 'Innovedious', '2017-05454', 'Juniour Programmar', 'dfsdf', '', 0, 2),
(168, '3598875', 'Chief Executive', 'Hannan', 'Molla', 'hannan@gmail.com', '74765431', '35665', 'Dhanmondi 12,', 'Barishal', './application/modules/employee/assets/images/2017-09-07/chr.jpg', 'B.Sc', 'Jaghonath University', 'First Class', '2006', '', '', '', '', '', 0, 2),
(169, '3598875', 'Chief Executive', 'Hannan', 'Molla', 'hannan@gmail.com', '74765431', '35665', 'Dhanmondi 12,', 'Barishal', './application/modules/employee/assets/images/2017-09-07/chr.jpg', '', '', '', '', '', '', '', '', '', 0, 2),
(173, '4324', 'Chief Executive', 'shafullah', 'Rahman', 'hab@gmail.com', '34234', '0157895468', '234234', 'dfg', './application/modules/employee/assets/images/2017-08-30/145.jpg', 'H.S.C', 'National University', '3', '21321', 'Infostystem', '07/23/2017 - 07/23/2017', 'Senior Programmar', 'Isahaq', '', 0, 3),
(174, '4324', 'Chief Executive', 'shafullah', 'Rahman', 'hab@gmail.com', '34234', '0157895468', '234234', 'dfg', './application/modules/employee/assets/images/2017-08-30/145.jpg', '', '', '', '', '', '', '', '', '', 0, 3),
(175, '4324', 'Chief Executive', 'shafullah', 'Rahman', 'hab@gmail.com', '34234', '0157895468', '234234', 'dfg', './application/modules/employee/assets/images/2017-08-30/145.jpg', '', '', '', '', '', '', '', '', '', 0, 3),
(176, '4324', 'Chief Executive', 'shafullah', 'Rahman', 'hab@gmail.com', '34234', '0157895468', '234234', 'dfg', './application/modules/employee/assets/images/2017-08-30/145.jpg', '', '', '', '', '', '', '', '', '', 0, 3),
(177, '4324', 'Chief Executive', 'shafullah', 'Rahman', 'hab@gmail.com', '34234', '0157895468', '234234', 'dfg', './application/modules/employee/assets/images/2017-08-30/145.jpg', '', '', '', '', '', '', '', '', '', 0, 3),
(207, '2017ali', 'Junior Software Developer', 'Md', 'ali', 'ali@gmail.com', '01678985463', '01299981526', '     Dhaka,Bangladesh', '     dhaka', './application/modules/employee/assets/images/2017-09-12/6.png', 'Bsc in Csc', 'Stanford University', '3.5', '2010', 'brac', '2011', 'Davaloper', 'Morris Alon', '', 0, 3),
(208, '2017ali', 'Junior Software Developer', 'Md', 'ali', 'ali@gmail.com', '01678985463', '01299981526', '     Dhaka,Bangladesh', '     dhaka', './application/modules/employee/assets/images/2017-09-12/6.png', 'M.Sc', 'National University', '4', '2012', 'Innovedious', '2017-05454', 'Juniour Programmar', 'dfsdf', '', 0, 3),
(209, '2017ali', 'Junior Software Developer', 'Md', 'ali', 'ali@gmail.com', '01678985463', '01299981526', '     Dhaka,Bangladesh', '     dhaka', './application/modules/employee/assets/images/2017-09-12/6.png', 'H.Sc', 'Jaghonath University', 'First Class', '2004', 'bdtask', '2017-05454', 'Juniour Programmar', 'dfsdf', '', 0, 3),
(210, '2017ali', 'Junior Software Developer', 'Md', 'ali', 'ali@gmail.com', '01678985463', '01299981526', '     Dhaka,Bangladesh', '     dhaka', './application/modules/employee/assets/images/2017-09-12/6.png', 'B.Sc', 'Jaghonath University', 'First Class', '2006', 'Innovedious', '2017-05454', 'Juniour Programmar', 'dfsdf', '', 0, 3),
(211, '2017ali', 'Junior Software Developer', 'Md', 'ali', 'ali@gmail.com', '01678985463', '01299981526', '     Dhaka,Bangladesh', '     dhaka', './application/modules/employee/assets/images/2017-09-12/6.png', '', '', '', '', '', '', '', '', '', 0, 3),
(212, '2017ali', 'Junior Software Developer', 'Md', 'ali', 'ali@gmail.com', '01678985463', '01299981526', '     Dhaka,Bangladesh', '     dhaka', './application/modules/employee/assets/images/2017-09-12/6.png', '', '', '', '', '', '', '', '', '', 0, 3),
(213, '2017ali', 'Junior Software Developer', 'Md', 'ali', 'ali@gmail.com', '01678985463', '01299981526', '     Dhaka,Bangladesh', '     dhaka', './application/modules/employee/assets/images/2017-09-12/6.png', '', '', '', '', '', '', '', '', '', 0, 3),
(214, '2017ali', 'Junior Software Developer', 'Md', 'ali', 'ali@gmail.com', '01678985463', '01299981526', '     Dhaka,Bangladesh', '     dhaka', './application/modules/employee/assets/images/2017-09-12/6.png', '', '', '', '', '', '', '', '', '', 0, 3),
(222, '001122', 'Senior Executive', 'Harun ', 'Ur Rashid', 'harun@gmail.com', '01621815163', '14645541', '  dfsgdfg', '  dfgsdfg', './application/modules/circularprocess/assets/images/2017-09-13/3.jpg', 'M.Sc', 'North Sauth', '4', '2013', 'Infinity', '2017-05454', 'Lead programmar', 'sakib', '', 0, 3),
(223, '001122', 'Senior Executive', 'Harun ', 'Ur Rashid', 'harun@gmail.com', '01621815163', '14645541', '  dfsgdfg', '  dfgsdfg', './application/modules/circularprocess/assets/images/2017-09-13/3.jpg', 'B.Sc', 'Jaghonath University', 'First Class', '2012', 'Infinity', '2017-05454', 'Lead programmar', 'sakib', '', 0, 3),
(224, '001122', 'Senior Executive', 'Harun ', 'Ur Rashid', 'harun@gmail.com', '01621815163', '14645541', '  dfsgdfg', '  dfgsdfg', './application/modules/circularprocess/assets/images/2017-09-13/3.jpg', 'H.Sc', 'Sayed Abul Hossain College', '4', '2008', 'Infinity', '2017-05454', 'Lead programmar', 'sakib', '', 0, 3),
(225, '001122', 'Senior Executive', 'Harun ', 'Ur Rashid', 'harun@gmail.com', '01621815163', '14645541', '  dfsgdfg', '  dfgsdfg', './application/modules/circularprocess/assets/images/2017-09-13/3.jpg', 'ssc', 'Taker hat High School', '4', '2006', 'Miaky', '2017-02-16-2018', 'sdf', 'sdf', '', 0, 3),
(226, 'abu17', 'HR Admin', 'Abu', 'Ali', 'abu@gmail.com', '0123457896', '2647895632', 'dhaka', 'dhaka', './application/modules/circularprocess/assets/images/2017-09-13/dea.jpg', 'Bsc in Csc', 'Stanford University', '3.50', '', '', '', '', '', '', 0, 0),
(227, 'abu17', 'HR Admin', 'Abu', 'Ali', 'abu@gmail.com', '0123457896', '2647895632', 'dhaka', 'dhaka', './application/modules/circularprocess/assets/images/2017-09-13/dea.jpg', '', '', '', '', '', '', '', '', '', 0, 0),
(228, 'abu17', 'HR Admin', 'Abu', 'Ali', 'abu@gmail.com', '0123457896', '2647895632', 'dhaka', 'dhaka', './application/modules/circularprocess/assets/images/2017-09-13/dea.jpg', '', '', '', '', '', '', '', '', '', 0, 0),
(232, 'JK987', 'Senior Executive', 'Johan', 'Kabir', 'jh@bdtask.com', '7656789567', '862345675678', 'South Ferri Ghat,Padma River,Chandpur', '231,East Patalipur,Sonamuri', './application/modules/employee/assets/images/2017-09-14/sui.jpg', 'MSc', 'Dhaka University', '3.45', '2012', 'ELIASH & ASSOCIATES', '07/22/2017 - 07/22/2017', '700', 'Mira Chetarjee ', '', 0, 8),
(233, 'JK987', 'Senior Executive', 'Johan', 'Kabir', 'jh@bdtask.com', '7656789567', '862345675678', 'South Ferri Ghat,Padma River,Chandpur', '231,East Patalipur,Sonamuri', './application/modules/employee/assets/images/2017-09-14/sui.jpg', '', '', '', '', '', '', '', '', '', 0, 8),
(234, 'JK987', 'Senior Executive', 'Johan', 'Kabir', 'jh@bdtask.com', '7656789567', '862345675678', 'South Ferri Ghat,Padma River,Chandpur', '231,East Patalipur,Sonamuri', './application/modules/employee/assets/images/2017-09-14/sui.jpg', '', '', '', '', '', '', '', '', '', 0, 8),
(235, 'STD8972456236', 'Chief Executive', 'Minox ', 'Nawab', 'min@bdtask.com', '3123456789', '23456788', '231,East Patalipur,Sonamuri', '98/A, East Lackx view,West Nkhali', './application/modules/employee/assets/images/2017-09-14/tie.jpg', 'MSc', 'University Of South Amishapara', '3.50', '2009', 'Times24', '08/01/2017 - 09/07/2017', '', 'Murat Rodriguaz', '', 0, 10),
(236, 'STD8972456236', 'Chief Executive', 'Minox ', 'Nawab', 'min@bdtask.com', '3123456789', '23456788', '231,East Patalipur,Sonamuri', '98/A, East Lackx view,West Nkhali', './application/modules/employee/assets/images/2017-09-14/tie.jpg', '', '', '', '', '', '', '', '', '', 0, 10),
(237, 'STD8972456236', 'Chief Executive', 'Minox ', 'Nawab', 'min@bdtask.com', '3123456789', '23456788', '231,East Patalipur,Sonamuri', '98/A, East Lackx view,West Nkhali', './application/modules/employee/assets/images/2017-09-14/tie.jpg', '', '', '', '', '', '', '', '', '', 0, 10),
(238, 'JR5rt648', 'Chief Operation Officer ', 'Justin ', 'Trudeax', 'juk@bdtask.com', '1733135505759', '987654321', '98/A, East Lackx view,West Nkhali', 'South Ferri Ghat,Padma River,Chandpur', './application/modules/employee/assets/images/2017-09-14/bow.jpg', 'PhD', 'University Of Hazimarket Science & Technology ', '3.60', '2006', 'BDTASK CAR', '07/22/2017 - 07/22/2017', '', 'Tim Nixaloski', '', 0, 9),
(239, 'JR5rt648', 'Chief Operation Officer ', 'Justin ', 'Trudeax', 'juk@bdtask.com', '1733135505759', '987654321', '98/A, East Lackx view,West Nkhali', 'South Ferri Ghat,Padma River,Chandpur', './application/modules/employee/assets/images/2017-09-14/bow.jpg', '', '', '', '', '', '', '', '', '', 0, 9),
(240, 'JR5rt648', 'Chief Operation Officer ', 'Justin ', 'Trudeax', 'juk@bdtask.com', '1733135505759', '987654321', '98/A, East Lackx view,West Nkhali', 'South Ferri Ghat,Padma River,Chandpur', './application/modules/employee/assets/images/2017-09-14/bow.jpg', '', '', '', '', '', '', '', '', '', 0, 9),
(241, 'QR1234', 'Junior Software Developer', 'Yun Min', 'Kin', 'yan@bdtask.com', '98765433567', '87654456789', 'South Ferri Ghat,Padma River,Chandpur', 'South Ferri Ghat,Padma River,Chandpur', './application/modules/circularprocess/assets/images/2017-09-14/bow.jpg', 'BBA', 'University Of South Carolina', '3.47', '', '', '', '', '', '', 0, 0),
(242, 'QR1234', 'Junior Software Developer', 'Yun Min', 'Kin', 'yan@bdtask.com', '98765433567', '87654456789', 'South Ferri Ghat,Padma River,Chandpur', 'South Ferri Ghat,Padma River,Chandpur', './application/modules/circularprocess/assets/images/2017-09-14/bow.jpg', 'MBA', 'University Of Mosco', '3.50', '', '', '', '', '', '', 0, 0),
(243, 'QR1234', 'Junior Software Developer', 'Yun Min', 'Kin', 'yan@bdtask.com', '98765433567', '87654456789', 'South Ferri Ghat,Padma River,Chandpur', 'South Ferri Ghat,Padma River,Chandpur', './application/modules/circularprocess/assets/images/2017-09-14/bow.jpg', '', '', '', '', '', '', '', '', '', 0, 0),
(250, 'YUT234', 'HR Admin', 'Abu', 'Ali', 'abu@gmail.com', '0123457896', '2647895632', ' dhaka', ' dhaka', './application/modules/employee/assets/images/2017-09-15/man.png', 'Bsc in Csc', 'Stanford University', '3.50', '', 'ELIASH & ASSOCIATES', '07/22/2017 - 07/22/2017', 'Senior Executive', 'Mira Chetarjee ', '', 0, 2),
(251, 'YUT234', 'HR Admin', 'Abu', 'Ali', 'abu@gmail.com', '0123457896', '2647895632', ' dhaka', ' dhaka', './application/modules/employee/assets/images/2017-09-15/man.png', 'MSc', 'University Of Hazimarket Science & Technology ', '3.60', '2012', '', '', '', '', '', 0, 2),
(252, 'YUT234', 'HR Admin', 'Abu', 'Ali', 'abu@gmail.com', '0123457896', '2647895632', ' dhaka', ' dhaka', './application/modules/employee/assets/images/2017-09-15/man.png', '', '', '', '', '', '', '', '', '', 0, 2),
(253, 'RTY123', 'Senior Executive', 'Imran', 'Hasan', 'imran@gmail.com', '0921239916', '14645541', '98/A, East Lackx view,West Nkhali', 'South Ferri Ghat,Padma River,Chandpur', './application/modules/employee/assets/images/2017-09-15/148.jpg', 'M.Sc', 'Jaghonath University', 'First Class', '', 'Pingbd', '2017-02-16-2018', 'Lead programmar', 'sadasd', '', 0, 2),
(254, 'RTY123', 'Senior Executive', 'Imran', 'Hasan', 'imran@gmail.com', '0921239916', '14645541', '98/A, East Lackx view,West Nkhali', 'South Ferri Ghat,Padma River,Chandpur', './application/modules/employee/assets/images/2017-09-15/148.jpg', 'B.Sc', 'Jaghonath University', 'First Class', '', 'Pingbd', '2017-02-16-2018', 'Lead programmar', 'sadasd', '', 0, 2),
(255, 'RTY123', 'Senior Executive', 'Imran', 'Hasan', 'imran@gmail.com', '0921239916', '14645541', '98/A, East Lackx view,West Nkhali', 'South Ferri Ghat,Padma River,Chandpur', './application/modules/employee/assets/images/2017-09-15/148.jpg', 'H.Sc', 'Sayed Abul Hossain College', '4', '', 'Pingbd', '2017-02-16-2018', 'Lead programmar', 'sadasd', '', 0, 2),
(256, 'YTR987', 'Senior Executive', 'Nadal ', 'Al Gouri', 'nad@gmail.com', '234567890', '234567890', '98/A, East Lackx view,West Nkhali', '98/A, East Lackx view,West Nkhali', './application/modules/circularprocess/assets/images/2017-09-14/tie.jpg', 'PhD', 'University Of South Carolina', '3.60', '', '', '', '', '', '', 0, 0),
(257, 'YTR987', 'Senior Executive', 'Nadal ', 'Al Gouri', 'nad@gmail.com', '234567890', '234567890', '98/A, East Lackx view,West Nkhali', '98/A, East Lackx view,West Nkhali', './application/modules/circularprocess/assets/images/2017-09-14/tie.jpg', 'MBA', 'University Of Hazimarket Science & Technology ', '3.60', '', '', '', '', '', '', 0, 0),
(258, 'YTR987', 'Senior Executive', 'Nadal ', 'Al Gouri', 'nad@gmail.com', '234567890', '234567890', '98/A, East Lackx view,West Nkhali', '98/A, East Lackx view,West Nkhali', './application/modules/circularprocess/assets/images/2017-09-14/tie.jpg', 'BSc', 'Noakhali University Of Science & Technology', '3.47', '', '', '', '', '', '', 0, 0),
(259, 'OIT876', 'Senior Executive', 'Jimmi ', 'Sutarland', 'jimi@bdtask.com', '75434567890', '63456789067', '98/A, East Lackx view,West Nkhali', '98/A, East Lackx view,West Nkhali', './application/modules/circularprocess/assets/images/2017-09-15/eye.jpg', 'MSc', 'University Of Hazimarket Science & Technology ', '3.60', '', '', '', '', '', '', 0, 0),
(260, 'OIT876', 'Senior Executive', 'Jimmi ', 'Sutarland', 'jimi@bdtask.com', '75434567890', '63456789067', '98/A, East Lackx view,West Nkhali', '98/A, East Lackx view,West Nkhali', './application/modules/circularprocess/assets/images/2017-09-15/eye.jpg', 'BSc', 'University Of South Carolina', '3.45', '', '', '', '', '', '', 0, 0),
(261, 'OIT876', 'Senior Executive', 'Jimmi ', 'Sutarland', 'jimi@bdtask.com', '75434567890', '63456789067', '98/A, East Lackx view,West Nkhali', '98/A, East Lackx view,West Nkhali', './application/modules/circularprocess/assets/images/2017-09-15/eye.jpg', '', '', '', '', '', '', '', '', '', 0, 0),
(262, 'MIT908', 'Senior Executive', 'Zara ', 'Mixav', 'zara@bdtask.com', '987654323456', '98763456789', '231,East Patalipur,Sonamuri', '231,East Patalipur,Sonamuri', './application/modules/circularprocess/assets/images/2017-09-15/dol.jpg', 'MBA', 'University Of South Amishapara', '3.60', '', '', '', '', '', '', 0, 0),
(263, 'MIT908', 'Senior Executive', 'Zara ', 'Mixav', 'zara@bdtask.com', '987654323456', '98763456789', '231,East Patalipur,Sonamuri', '231,East Patalipur,Sonamuri', './application/modules/circularprocess/assets/images/2017-09-15/dol.jpg', 'BBA', 'University Of Mosco', '3.45', '', '', '', '', '', '', 0, 0),
(264, 'MIT908', 'Senior Executive', 'Zara ', 'Mixav', 'zara@bdtask.com', '987654323456', '98763456789', '231,East Patalipur,Sonamuri', '231,East Patalipur,Sonamuri', './application/modules/circularprocess/assets/images/2017-09-15/dol.jpg', '', '', '', '', '', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee_performance`
--

CREATE TABLE `employee_performance` (
  `emp_per_id` int(11) NOT NULL,
  `employee_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `note` varchar(50) CHARACTER SET latin1 NOT NULL,
  `date` varchar(50) CHARACTER SET latin1 NOT NULL,
  `note_by` varchar(50) CHARACTER SET latin1 NOT NULL,
  `number_of_star` varchar(50) CHARACTER SET latin1 NOT NULL,
  `status` varchar(50) CHARACTER SET latin1 NOT NULL,
  `updated_by` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee_performance`
--

INSERT INTO `employee_performance` (`emp_per_id`, `employee_id`, `note`, `date`, `note_by`, `number_of_star`, `status`, `updated_by`) VALUES
(7, 'TGD987', 'good', '2017-09-09', 'Jhon  Doe', '5', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Jhon  Doe'),
(8, 'UYT675', 'Lorem ipsum dolor sit amet, consectetur adipiscing', '2017-09-09', 'Jhon  Doe', '2', 'Good', 'Jhon  Doe'),
(9, 'QR1234', 'Lorem ipsum dolor sit amet, consectetur adipiscing', '2017-09-22', 'Jhon  Doe', '3', 'Excellent ', ''),
(10, 'RTY123', 'Lorem ipsum dolor sit amet, consectetur adipiscing', '2017-09-18', 'Jhon  Doe', '4', 'Very Excellent ', ''),
(11, 'QR1234', 'Lorem ipsum dolor sit amet, consectetur adipiscing', '2017-09-26', 'Jhon  Doe', '4', 'Excellent ', ''),
(12, 'JR5rt648', 'Lorem ipsum dolor sit amet, consectetur adipiscing', '2017-09-28', 'Jhon  Doe', '3', 'Nice ', ''),
(13, 'MIT908', 'Lorem ipsum dolor sit amet, consectetur adipiscing', '2017-09-26', 'Jhon  Doe', '4', 'Excellent ', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee_position`
--

CREATE TABLE `employee_position` (
  `emp_pos_id` int(10) UNSIGNED NOT NULL,
  `employee_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `first_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `position_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `position_details` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee_salary_payment`
--

CREATE TABLE `employee_salary_payment` (
  `emp_sal_pay_id` int(11) NOT NULL,
  `employee_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `total_salary` varchar(50) CHARACTER SET latin1 NOT NULL,
  `total_working_minutes` varchar(50) CHARACTER SET latin1 NOT NULL,
  `working_period` varchar(50) CHARACTER SET latin1 NOT NULL,
  `payment_due` varchar(50) CHARACTER SET latin1 NOT NULL,
  `payment_date` varchar(50) CHARACTER SET latin1 NOT NULL,
  `paid_by` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee_salary_payment`
--

INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES
(13, '3598875', '8,328.00', '722.78', '2', 'paid', '09-09-2017', 'Jhon  Doe'),
(21, '3598875', '8,328.00', '722.78', '2', '', '', ''),
(22, '123456', '0.00', '373.67', '4', '', '', ''),
(23, '2017ali', '8,051.00', '0.00', '0', '', '', ''),
(24, '4324', '0.00', '1,099.03', '5', '', '', ''),
(25, '3598875', '8,328.00', '0.00', '0', 'paid', '12-09-2017', 'Jhon  Doe'),
(26, '123456', '0.00', '0.00', '0', 'paid', '', 'Jhon  Doe'),
(27, 'abu17', '0.00', '0.00', '0', '', '', ''),
(28, '3598875', '3,320.00', '839.32', '5', '', '', ''),
(29, '001122', '0.00', '0.00', '0', '', '', ''),
(30, '123456', '0.00', '373.93', '4', '', '', ''),
(31, 'RTY123', '0.00', '0.00', '1', '', '', ''),
(32, 'JK987', '114,298.00', '0.00', '1', '', '', ''),
(33, 'JR5rt648', '13,998.00', '0.00', '1', '', '', ''),
(34, '2017ali', '1,040.00', '0.00', '0', '', '', ''),
(35, 'STD8972456236', '0.00', '0.00', '1', '', '', ''),
(36, '4324', '13,761.00', '1,206.00', '7', '', '', ''),
(37, 'QR1234', '52,000.00', '0.00', '0', '', '', ''),
(38, 'abu17', '0.00', '0.00', '0', '', '', ''),
(39, '3598875', '3,320.00', '839.32', '5', '', '', ''),
(40, '001122', '0.00', '0.00', '0', '', '', ''),
(41, '123456', '0.00', '373.93', '4', '', '', ''),
(42, 'RTY123', '0.00', '0.00', '1', '', '', ''),
(43, 'OIT876', '0.00', '0.00', '0', '', '', ''),
(44, 'JK987', '114,298.00', '0.00', '1', '', '', ''),
(45, 'JR5rt648', '13,998.00', '0.00', '1', '', '', ''),
(46, '2017ali', '1,040.00', '0.00', '0', '', '', ''),
(47, 'STD8972456236', '55,300.00', '0.00', '1', '', '', ''),
(48, 'YTR987', '0.00', '0.00', '0', '', '', ''),
(49, '4324', '13,761.00', '1,206.00', '7', '', '', ''),
(50, 'QR1234', '52,000.00', '0.00', '0', '', '', ''),
(51, 'MIT908', '0.00', '0.00', '0', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee_salary_setup`
--

CREATE TABLE `employee_salary_setup` (
  `e_s_s_id` int(11) UNSIGNED NOT NULL,
  `employee_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `sal_type` varchar(30) NOT NULL,
  `salary_type_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `amount` varchar(30) CHARACTER SET latin1 NOT NULL,
  `create_date` date DEFAULT NULL,
  `update_date` datetime(6) DEFAULT NULL,
  `update_id` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee_salary_setup`
--

INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`) VALUES
(90, '3598875', 'monthly', '5', '12000', '2017-09-09', NULL, ''),
(91, '3598875', 'monthly', '6', '3000', '2017-09-09', NULL, ''),
(92, '3598875', 'monthly', '10', '5000', '2017-09-09', NULL, ''),
(93, '3598875', 'monthly', '15', '20', '2017-09-09', NULL, ''),
(94, '3598875', 'monthly', '16', '20', '2017-09-09', NULL, ''),
(95, '3598875', 'monthly', '11', '10000', '2017-09-09', NULL, ''),
(96, '3598875', 'monthly', '12', '500', '2017-09-09', NULL, ''),
(97, '3598875', 'monthly', '13', '1200', '2017-09-09', NULL, ''),
(98, '3598875', 'monthly', '17', '12', '2017-09-09', NULL, ''),
(99, '2017ali', 'monthly', '5', '500', '2017-09-09', NULL, ''),
(100, '2017ali', 'monthly', '6', '120', '2017-09-09', NULL, ''),
(101, '2017ali', 'monthly', '10', '5000', '2017-09-09', NULL, ''),
(102, '2017ali', 'monthly', '15', '500', '2017-09-09', NULL, ''),
(103, '2017ali', 'monthly', '16', '23', '2017-09-09', NULL, ''),
(104, '2017ali', 'monthly', '18', '2000', '2017-09-09', NULL, ''),
(105, '2017ali', 'monthly', '11', '50', '2017-09-09', NULL, ''),
(106, '2017ali', 'monthly', '12', '20', '2017-09-09', NULL, ''),
(107, '2017ali', 'monthly', '13', '10', '2017-09-09', NULL, ''),
(108, '2017ali', 'monthly', '17', '12', '2017-09-09', NULL, ''),
(109, '4324', 'monthly', '5', '6788', '2017-09-11', NULL, ''),
(110, '4324', 'monthly', '6', '565', '2017-09-11', NULL, ''),
(111, '4324', 'monthly', '15', '6543', '2017-09-11', NULL, ''),
(112, '4324', 'monthly', '11', '65', '2017-09-11', NULL, ''),
(113, '4324', 'monthly', '12', '65', '2017-09-11', NULL, ''),
(114, '4324', 'monthly', '13', '5', '2017-09-11', NULL, ''),
(115, 'JR5rt648', 'monthly', '5', '12000', '2017-09-15', NULL, ''),
(116, 'JR5rt648', 'monthly', '6', '2000', '2017-09-15', NULL, ''),
(117, 'JR5rt648', 'monthly', '15', '', '2017-09-15', NULL, ''),
(118, 'JR5rt648', 'monthly', '19', '', '2017-09-15', NULL, ''),
(119, 'JR5rt648', 'monthly', '11', '', '2017-09-15', NULL, ''),
(120, 'JR5rt648', 'monthly', '12', '', '2017-09-15', NULL, ''),
(121, 'JR5rt648', 'monthly', '13', '2%', '2017-09-15', NULL, ''),
(122, 'QR1234', 'monthly', '5', '56000', '2017-09-15', NULL, ''),
(123, 'QR1234', 'monthly', '6', '4000', '2017-09-15', NULL, ''),
(124, 'QR1234', 'monthly', '15', '', '2017-09-15', NULL, ''),
(125, 'QR1234', 'monthly', '19', '2000', '2017-09-15', NULL, ''),
(126, 'QR1234', 'monthly', '11', '10000', '2017-09-15', NULL, ''),
(127, 'QR1234', 'monthly', '12', '', '2017-09-15', NULL, ''),
(128, 'QR1234', 'monthly', '13', '', '2017-09-15', NULL, ''),
(129, 'JK987', 'monthly', '5', '120000', '2017-09-15', NULL, ''),
(130, 'JK987', 'monthly', '6', '2000', '2017-09-15', NULL, ''),
(131, 'JK987', 'monthly', '15', '', '2017-09-15', NULL, ''),
(132, 'JK987', 'monthly', '19', '2300', '2017-09-15', NULL, ''),
(133, 'JK987', 'monthly', '11', '10000', '2017-09-15', NULL, ''),
(134, 'JK987', 'monthly', '12', '', '2017-09-15', NULL, ''),
(135, 'JK987', 'monthly', '13', '2%', '2017-09-15', NULL, ''),
(136, 'STD8972456236', 'weekly', '5', '45000', '2017-09-15', NULL, ''),
(137, 'STD8972456236', 'weekly', '6', '2000', '2017-09-15', NULL, ''),
(138, 'STD8972456236', 'weekly', '15', '6000', '2017-09-15', NULL, ''),
(139, 'STD8972456236', 'weekly', '19', '2300', '2017-09-15', NULL, ''),
(140, 'STD8972456236', 'weekly', '11', '', '2017-09-15', NULL, ''),
(141, 'STD8972456236', 'weekly', '12', '', '2017-09-15', NULL, ''),
(142, 'STD8972456236', 'weekly', '13', '', '2017-09-15', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `employee_sal_pay_type`
--

CREATE TABLE `employee_sal_pay_type` (
  `emp_sal_pay_type_id` int(11) UNSIGNED NOT NULL,
  `payment_period` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee_sal_pay_type`
--

INSERT INTO `employee_sal_pay_type` (`emp_sal_pay_type_id`, `payment_period`) VALUES
(2, 'test'),
(4, 'monthly'),
(5, 'weekly'),
(6, 'hourly');

-- --------------------------------------------------------

--
-- Table structure for table `emp_attendance`
--

CREATE TABLE `emp_attendance` (
  `att_id` int(10) UNSIGNED NOT NULL,
  `employee_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `sign_in` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `sign_out` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `staytime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emp_attendance`
--

INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES
(211, '4324', '2017-08-30', '05:28:59 pm', '11:45:43 am', '05:43:16'),
(212, '123456', '2017-08-30', '05:58:17 pm', '11:45:26 am', '06:12:51'),
(213, '4324', '2017-08-30', '05:58:23 pm', '09:52:43 am', '08:05:40'),
(215, '4324', '2017-08-31', '10:07:08', '11:49:04 am', '01:41:56'),
(217, '123456', '2017-08-31', '12:28:57', '12:29:02 pm', '00:00:05'),
(218, '123456', '2017-09-07', '09:41:12', '09:41:37 am', '00:00:25'),
(219, '4324', '2017-09-07', '09:41:19', '09:41:27 am', '00:00:08'),
(222, '3598875', '2017-09-09', '12:32:14', '03:47:46', '03:15:32'),
(223, '4324', '2017-09-09', '12:32:48', '03:20:50 pm', '02:48:02'),
(225, '123456', '2017-09-10', '12:04:03', '12:04:38 pm', '00:00:35'),
(226, '4324', '2017-09-10', '12:05:35', '01:52:24 pm', '01:46:49'),
(227, '3598875', '2017-09-10', '12:06:15', '01:52:35 pm', '01:46:20'),
(241, '4324', '2017-09-12', '01:59:29 pm', '01:59:38 pm', '00:00:09'),
(242, '3598875', '2017-09-12', '02:40:11 pm', '02:41:04 pm', '00:00:53'),
(243, '3598875', '2017-09-12', '07:12:30 pm', '10:16:28 am', '08:56:02'),
(244, '3598875', '2017-09-14', '05:55:07 pm', '05:55:39 pm', '00:00:32'),
(245, 'JK987', '2017-09-15', '11:45:46 pm', NULL, NULL),
(246, 'STD8972456236', '2017-09-15', '11:46:00 pm', NULL, NULL),
(247, 'JR5rt648', '2017-09-15', '11:46:10 pm', NULL, NULL),
(248, 'RTY123', '2017-09-16', '12:27:52 am', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_date` date NOT NULL,
  `total_events` int(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_date`, `total_events`) VALUES
('2017-08-02', 2),
('2017-08-19', 2),
('2017-08-21', 2),
('2017-08-23', 1),
('2017-10-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `eventsss`
--

CREATE TABLE `eventsss` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `color` varchar(7) NOT NULL DEFAULT '#3a87ad',
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `allDay` varchar(50) NOT NULL DEFAULT 'true'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event_detail`
--

CREATE TABLE `event_detail` (
  `idevent` int(11) NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `event` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_detail`
--

INSERT INTO `event_detail` (`idevent`, `event_date`, `event_time`, `event`) VALUES
(3, '2017-08-19', '02:11:13', 'good'),
(4, '2017-10-12', '01:05:00', 'Hi'),
(6, '2017-08-02', '02:02:00', 'gfdfg'),
(7, '2017-08-19', '03:05:00', 'Hello alamin'),
(10, '2017-08-21', '01:02:00', 'hj'),
(11, '2017-08-21', '01:02:00', 'teas'),
(13, '2017-08-02', '01:03:00', 'how'),
(14, '2017-08-23', '03:03:00', 'how are you');

-- --------------------------------------------------------

--
-- Table structure for table `grand_loan`
--

CREATE TABLE `grand_loan` (
  `loan_id` int(11) NOT NULL,
  `employee_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `permission_by` varchar(30) CHARACTER SET latin1 NOT NULL,
  `loan_details` varchar(30) CHARACTER SET latin1 NOT NULL,
  `amount` varchar(30) CHARACTER SET latin1 NOT NULL,
  `interest_rate` varchar(30) CHARACTER SET latin1 NOT NULL,
  `installment` varchar(30) CHARACTER SET latin1 NOT NULL,
  `installment_period` varchar(30) CHARACTER SET latin1 NOT NULL,
  `repayment_amount` varchar(30) CHARACTER SET latin1 NOT NULL,
  `date_of_approve` varchar(30) CHARACTER SET latin1 NOT NULL,
  `repayment_start_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `created_by` varchar(30) CHARACTER SET latin1 NOT NULL,
  `updated_by` varchar(30) CHARACTER SET latin1 NOT NULL,
  `loan_status` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grand_loan`
--

INSERT INTO `grand_loan` (`loan_id`, `employee_id`, `permission_by`, `loan_details`, `amount`, `interest_rate`, `installment`, `installment_period`, `repayment_amount`, `date_of_approve`, `repayment_start_date`, `created_by`, `updated_by`, `loan_status`) VALUES
(13, '123456', 'Bdtask', 'example', '50000', '10', '2517', '24', '60417.00', '2017-09-09', '2017-09-20', '', '', '1'),
(14, '4324', '4324', 'dsfasfd', '30000', '15', '1641', '24', '39375.00', '2017-09-09', '2017-09-21', '', '', '1'),
(15, '2017ali', 'ceo', 'na', '50000', '10', '517', '500', '258333.00', '2017-09-09', '2017-09-09', '', '', '1'),
(16, '2017ali', 'bdtask', 'sdfsdf', '60000', '10', '3021', '24', '72500.00', '2017-09-10', '2017-09-20', '', '', '1'),
(17, 'QR1234', 'Nux Kar ', 'Lorem ipsum dolor sit amet, co', '450000', '2%', 'NaN', '50000', 'NaN', '2017-09-18', '2017-09-30', '', '', '1'),
(18, 'STD8972456236', 'Bixo Martin', 'Lorem ipsum dolor sit amet, co', '3000', '2', '19', '209', '4055.00', '2017-09-23', '2017-10-27', '', '', '1'),
(19, 'OIT876', 'Tim Bix', 'Lorem ipsum dolor sit amet, co', '23000', '5', '11644', '2', '23288.00', '2017-09-22', '2017-09-29', '', '', '1'),
(20, 'YTR987', 'Birt Barizz', 'Lorem ipsum dolor sit amet, co', '100000', '4', '14667', '7', '102667.00', '2017-09-27', '2017-10-19', '', '', '0'),
(21, 'OIT876', 'Jur Nikaxortov', 'Lorem ipsum nigata organ uhrt ', '23000', '2', '5788', '4', '23153.00', '2017-09-16', '2017-09-16', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `job_advertisement`
--

CREATE TABLE `job_advertisement` (
  `job_adv_id` int(10) UNSIGNED NOT NULL,
  `pos_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `adv_circular_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `circular_dadeline` varchar(30) CHARACTER SET latin1 NOT NULL,
  `adv_file` tinytext CHARACTER SET latin1 NOT NULL,
  `adv_details` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job_advertisement`
--

INSERT INTO `job_advertisement` (`job_adv_id`, `pos_id`, `adv_circular_date`, `circular_dadeline`, `adv_file`, `adv_details`) VALUES
(1, 'Pk', '09-07-2017', '09-07-2017', '0', 'dsfdsf'),
(2, 'Pk', '10-07-2017', '10-07-2017', './application/modules/circularprocess/assets/images/2017-07-10/Exa1.pdf', 'dfgsdf');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `phrase` varchar(100) NOT NULL,
  `english` varchar(255) NOT NULL,
  `bangla` text,
  `spanish` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `spanish`) VALUES
(2, 'login', 'Login', NULL, NULL),
(3, 'email', 'Email Address', NULL, NULL),
(4, 'password', 'Password', NULL, NULL),
(5, 'reset', 'Reset', NULL, NULL),
(6, 'dashboard', 'Dashboard', NULL, NULL),
(7, 'home', 'Home', NULL, NULL),
(8, 'profile', 'Profile', NULL, NULL),
(9, 'profile_setting', 'Profile Setting', NULL, NULL),
(10, 'firstname', 'First Name', NULL, NULL),
(11, 'lastname', 'Last Name', NULL, NULL),
(12, 'about', 'About', NULL, NULL),
(13, 'preview', 'Preview', NULL, NULL),
(14, 'image', 'Image', NULL, NULL),
(15, 'save', 'Save', NULL, NULL),
(16, 'upload_successfully', 'Upload Successfully!', NULL, NULL),
(17, 'user_added_successfully', 'User Added Successfully!', NULL, NULL),
(18, 'please_try_again', 'Please Try Again...', NULL, NULL),
(19, 'inbox_message', 'Inbox Messages', NULL, NULL),
(20, 'sent_message', 'Sent Message', NULL, NULL),
(21, 'message_details', 'Message Details', NULL, NULL),
(22, 'new_message', 'New Message', NULL, NULL),
(23, 'receiver_name', 'Receiver Name', NULL, NULL),
(24, 'sender_name', 'Sender Name', NULL, NULL),
(25, 'subject', 'Subject', NULL, NULL),
(26, 'message', 'Message', NULL, NULL),
(27, 'message_sent', 'Message Sent!', NULL, NULL),
(28, 'ip_address', 'IP Address', NULL, NULL),
(29, 'last_login', 'Last Login', NULL, NULL),
(30, 'last_logout', 'Last Logout', NULL, NULL),
(31, 'status', 'Status', NULL, NULL),
(32, 'delete_successfully', 'Delete Successfully!', NULL, NULL),
(33, 'send', 'Send', NULL, NULL),
(34, 'date', 'Date', NULL, NULL),
(35, 'action', 'Action', NULL, NULL),
(36, 'sl_no', 'SL No.', NULL, NULL),
(37, 'are_you_sure', 'Are You Sure ? ', NULL, NULL),
(38, 'application_setting', 'Application Setting', NULL, NULL),
(39, 'application_title', 'Application Title', NULL, NULL),
(40, 'address', 'Address', NULL, NULL),
(41, 'phone', 'Phone', NULL, NULL),
(42, 'favicon', 'Favicon', NULL, NULL),
(43, 'logo', 'Logo', NULL, NULL),
(44, 'language', 'Language', NULL, NULL),
(45, 'left_to_right', 'Left To Right', NULL, NULL),
(46, 'right_to_left', 'Right To Left', NULL, NULL),
(47, 'footer_text', 'Footer Text', NULL, NULL),
(48, 'site_align', 'Application Alignment', NULL, NULL),
(49, 'welcome_back', 'Welcome Back!', NULL, NULL),
(50, 'please_contact_with_admin', 'Please Contact With Admin', NULL, NULL),
(51, 'incorrect_email_or_password', 'Incorrect Email/Password', NULL, NULL),
(52, 'select_option', 'Select Option', NULL, NULL),
(53, 'ftp_setting', 'Data Synchronize [FTP Setting]', NULL, NULL),
(54, 'hostname', 'Host Name', NULL, NULL),
(55, 'username', 'User Name', NULL, NULL),
(56, 'ftp_port', 'FTP Port', NULL, NULL),
(57, 'ftp_debug', 'FTP Debug', NULL, NULL),
(58, 'project_root', 'Project Root', NULL, NULL),
(59, 'update_successfully', 'Update Successfully', NULL, NULL),
(60, 'save_successfully', 'Save Successfully!', NULL, NULL),
(61, 'delete_successfully', 'Delete Successfully!', NULL, NULL),
(62, 'internet_connection', 'Internet Connection', NULL, NULL),
(63, 'ok', 'Ok', NULL, NULL),
(64, 'not_available', 'Not Available', NULL, NULL),
(65, 'available', 'Available', NULL, NULL),
(66, 'outgoing_file', 'Outgoing File', NULL, NULL),
(67, 'incoming_file', 'Incoming File', NULL, NULL),
(68, 'data_synchronize', 'Data Synchronize', NULL, NULL),
(69, 'unable_to_upload_file_please_check_configuration', 'Unable to upload file! please check configuration', NULL, NULL),
(70, 'please_configure_synchronizer_settings', 'Please configure synchronizer settings', NULL, NULL),
(71, 'download_successfully', 'Download Successfully', NULL, NULL),
(72, 'unable_to_download_file_please_check_configuration', 'Unable to download file! please check configuration', NULL, NULL),
(73, 'data_import_first', 'Data Import First', NULL, NULL),
(74, 'data_import_successfully', 'Data Import Successfully!', NULL, NULL),
(75, 'unable_to_import_data_please_check_config_or_sql_file', 'Unable to import data! please check configuration / SQL file.', NULL, NULL),
(76, 'download_data_from_server', 'Download Data from Server', NULL, NULL),
(77, 'data_import_to_database', 'Data Import To Database', NULL, NULL),
(79, 'data_upload_to_server', 'Data Upload to Server', NULL, NULL),
(80, 'please_wait', 'Please Wait...', NULL, NULL),
(81, 'ooops_something_went_wrong', ' Ooops something went wrong...', NULL, NULL),
(82, 'module_permission_list', 'Module Permission List', NULL, NULL),
(83, 'user_permission', 'User Permission', NULL, NULL),
(84, 'add_module_permission', 'Add Module Permission', NULL, NULL),
(85, 'module_permission_added_successfully', 'Module Permission Added Successfully!', NULL, NULL),
(86, 'update_module_permission', 'Update Module Permission', NULL, NULL),
(87, 'download', 'Download', NULL, NULL),
(88, 'module_name', 'Module Name', NULL, NULL),
(89, 'create', 'Create', NULL, NULL),
(90, 'read', 'Read', NULL, NULL),
(91, 'update', 'Update', NULL, NULL),
(92, 'delete', 'Delete', NULL, NULL),
(93, 'module_list', 'Module List', NULL, NULL),
(94, 'add_module', 'Add Module', NULL, NULL),
(95, 'directory', 'Module Direcotory', NULL, NULL),
(96, 'description', 'Description', NULL, NULL),
(97, 'image_upload_successfully', 'Image Upload Successfully!', NULL, NULL),
(98, 'module_added_successfully', 'Module Added Successfully', NULL, NULL),
(99, 'inactive', 'Inactive', NULL, NULL),
(100, 'active', 'Active', NULL, NULL),
(101, 'user_list', 'User List', NULL, NULL),
(102, 'see_all_message', 'See All Messages', NULL, NULL),
(103, 'setting', 'Setting', NULL, NULL),
(104, 'logout', 'Logout', NULL, NULL),
(105, 'admin', 'Admin', NULL, NULL),
(106, 'add_user', 'Add User', NULL, NULL),
(107, 'user', 'User', NULL, NULL),
(108, 'module', 'Module', NULL, NULL),
(109, 'new', 'New', NULL, NULL),
(110, 'inbox', 'Inbox', NULL, NULL),
(111, 'sent', 'Sent', NULL, NULL),
(112, 'synchronize', 'Synchronize', NULL, NULL),
(113, 'data_synchronizer', 'Data Synchronizer', NULL, NULL),
(114, 'module_permission', 'Module Permission', NULL, NULL),
(115, 'backup_now', 'Backup Now!', NULL, NULL),
(116, 'restore_now', 'Restore Now!', NULL, NULL),
(117, 'backup_and_restore', 'Backup and Restore', NULL, NULL),
(118, 'captcha', 'Captcha Word', NULL, NULL),
(119, 'database_backup', 'Database Backup', NULL, NULL),
(120, 'restore_successfully', 'Restore Successfully', NULL, NULL),
(121, 'backup_successfully', 'Backup Successfully', NULL, NULL),
(122, 'filename', 'File Name', NULL, NULL),
(123, 'file_information', 'File Information', NULL, NULL),
(124, 'size', 'size', NULL, NULL),
(125, 'backup_date', 'Backup Date', NULL, NULL),
(126, 'overwrite', 'Overwrite', NULL, NULL),
(127, 'invalid_file', 'Invalid File!', NULL, NULL),
(128, 'invalid_module', 'Invalid Module', NULL, NULL),
(129, 'remove_successfully', 'Remove Successfully!', NULL, NULL),
(130, 'install', 'Install', NULL, NULL),
(131, 'uninstall', 'Uninstall', NULL, NULL),
(132, 'tables_are_not_available_in_database', 'Tables are not available in database.sql', NULL, NULL),
(133, 'no_tables_are_registered_in_config', 'No tables are registerd in config.php', NULL, NULL),
(134, 'enquiry', 'Enquiry', NULL, NULL),
(135, 'read_unread', 'Read/Unread', NULL, NULL),
(136, 'enquiry_information', 'Enquiry Information', NULL, NULL),
(137, 'user_agent', 'User Agent', NULL, NULL),
(138, 'checked_by', 'Checked By', NULL, NULL),
(139, 'new_enquiry', 'New Enquiry', NULL, NULL),
(140, 'crud', 'Crud', NULL, NULL),
(141, 'view', 'View', NULL, NULL),
(142, 'name', 'Name', NULL, NULL),
(143, 'add', 'Address', NULL, NULL),
(144, 'ph', 'Phone', NULL, NULL),
(145, 'cid', 'SL No', NULL, NULL),
(146, 'view_atn', 'AttendanceView', NULL, NULL),
(147, 'mang', 'Employemanagement', NULL, NULL),
(148, 'designation', 'Designation', NULL, NULL),
(149, 'test', 'Test', NULL, NULL),
(150, 'sl', 'SL', NULL, NULL),
(151, 'bdtask', 'BDTASK', NULL, NULL),
(152, 'practice', 'Practice', NULL, NULL),
(153, 'branch_name', 'Branch Name', NULL, NULL),
(154, 'chairman_name', 'Chairman', NULL, NULL),
(155, 'b_photo', 'Photo', NULL, NULL),
(156, 'b_address', 'Address', NULL, NULL),
(157, 'position', 'Position', NULL, NULL),
(158, 'advertisement', 'Advertisement', NULL, NULL),
(159, 'position_name', 'Position', NULL, NULL),
(160, 'position_details', 'Details', NULL, NULL),
(161, 'circularprocess', 'Recruitment', NULL, NULL),
(162, 'pos_id', 'Position', NULL, NULL),
(163, 'adv_circular_date', 'Publish Date', NULL, NULL),
(164, 'circular_dadeline', 'Dadeline', NULL, NULL),
(165, 'adv_file', 'Documents', NULL, NULL),
(166, 'adv_details', 'Details', NULL, NULL),
(167, 'attendance', 'Attendance', NULL, NULL),
(168, 'employee', 'Employee', NULL, NULL),
(169, 'emp_id', 'Employee Name', NULL, NULL),
(170, 'sign_in', 'Sign In', NULL, NULL),
(171, 'sign_out', 'Sign Out', NULL, NULL),
(172, 'staytime', 'Stay Time', NULL, NULL),
(173, 'abc', '1', NULL, NULL),
(174, 'first_name', 'First Name', NULL, NULL),
(175, 'last_name', 'Last Name', NULL, NULL),
(176, 'alter_phone', 'Alternative Phone', NULL, NULL),
(177, 'present_address', 'Present Address', NULL, NULL),
(178, 'parmanent_address', 'Parmenent Address', NULL, NULL),
(179, 'candidateinfo', 'Candidate Info', NULL, NULL),
(180, 'add_advertisement', 'Add Advertisement', NULL, NULL),
(181, 'advertisement_list', 'Manage Advertisement ', NULL, NULL),
(182, 'candidate_basic_info', 'Candidate Information', NULL, NULL),
(183, 'can_basicinfo_list', 'Manage Candidate', NULL, NULL),
(184, 'add_canbasic_info', 'Add New Candidate', NULL, NULL),
(185, 'candidate_education_info', 'Candidate Educational Info', NULL, NULL),
(186, 'can_educationinfo_list', 'Candidate Edu Info list', NULL, NULL),
(187, 'add_edu_info', 'Add Educational Info', NULL, NULL),
(188, 'can_id', 'Candidate Id', NULL, NULL),
(189, 'degree_name', 'Obtained Degree', NULL, NULL),
(190, 'university_name', 'University', NULL, NULL),
(191, 'cgp', 'CGPA', NULL, NULL),
(192, 'comments', 'Comments', NULL, NULL),
(193, 'signature', 'Signature', NULL, NULL),
(194, 'candidate_workexperience', 'Candidate Work Experience', NULL, NULL),
(195, 'can_workexperience_list', 'Work Experience list', NULL, NULL),
(196, 'add_can_experience', 'Add Work Experience', NULL, NULL),
(197, 'company_name', 'Company Name', NULL, NULL),
(198, 'working_period', 'Working Period', NULL, NULL),
(199, 'duties', 'Duties', NULL, NULL),
(200, 'supervisor', 'Supervisor', NULL, NULL),
(201, 'candidate_workexpe', 'Candidate Work Experience', NULL, NULL),
(202, 'candidate_shortlist', 'Candidate Shortlist', NULL, NULL),
(203, 'shortlist_view', 'Manage Shortlist', NULL, NULL),
(204, 'add_shortlist', 'Add Shortlist', NULL, NULL),
(205, 'date_of_shortlist', 'Shortlist Date', NULL, NULL),
(206, 'interview_date', 'Interview Date', NULL, NULL),
(207, 'submit', 'Submit', NULL, NULL),
(208, 'candidate_id', 'Your ID', NULL, NULL),
(209, 'job_adv_id', 'Job Position', NULL, NULL),
(210, 'sequence', 'Sequence', NULL, NULL),
(211, 'candidate_interview', 'Interview', NULL, NULL),
(212, 'interview_list', 'Interview list', NULL, NULL),
(213, 'add_interview', 'Add interview', NULL, NULL),
(214, 'interviewer_id', 'Interviewer', NULL, NULL),
(215, 'interview_marks', 'Viva Marks', NULL, NULL),
(216, 'written_total_marks', 'Written Total Marks', NULL, NULL),
(217, 'mcq_total_marks', 'MCQ Total Marks', NULL, NULL),
(218, 'recommandation', 'Recommandation', NULL, NULL),
(219, 'selection', 'Selection', NULL, NULL),
(220, 'details', 'Details', NULL, NULL),
(221, 'candidate_selection', 'Candidate Selection', NULL, NULL),
(222, 'selection_list', 'Selection List', NULL, NULL),
(223, 'add_selection', 'Add Selection', NULL, NULL),
(224, 'employee_id', 'Employee Id', NULL, NULL),
(225, 'position_id', '1', NULL, NULL),
(226, 'selection_terms', 'Selection Terms', NULL, NULL),
(227, 'total_marks', 'Total Marks', NULL, NULL),
(228, 'photo', 'Picture', NULL, NULL),
(229, 'your_id', 'Your ID', NULL, NULL),
(230, 'change_image', 'Change Photo', NULL, NULL),
(231, 'picture', 'Photograph', NULL, NULL),
(232, 'ad', 'Add', NULL, NULL),
(233, 'write_y_p_info', 'Write Your Persoanal Information', NULL, NULL),
(234, 'emp_position', 'Employee Position', NULL, NULL),
(235, 'add_pos', 'Add Position', NULL, NULL),
(236, 'list_pos', 'List of Position', NULL, NULL),
(237, 'emp_salary_stup', 'Employee Salary SetUp', NULL, NULL),
(238, 'add_salary_stup', 'Add Salary Setup', NULL, NULL),
(239, 'list_salarystup', 'List of Salary Setup', NULL, NULL),
(240, 'emp_sal_name', 'Salary Name', NULL, NULL),
(241, 'emp_sal_type', 'Salary Type', NULL, NULL),
(242, 'emp_performance', 'Employee Performance', NULL, NULL),
(243, 'add_performance', 'Add Performance', NULL, NULL),
(244, 'list_performance', 'List of Performance', NULL, NULL),
(245, 'note', 'Note', NULL, NULL),
(246, 'note_by', 'Note By', NULL, NULL),
(247, 'number_of_star', 'Number of Star', NULL, NULL),
(248, 'updated_by', 'Updated By', NULL, NULL),
(249, 'emp_sal_payment', 'Manage Employee Salary', NULL, NULL),
(250, 'add_payment', 'Add Payment', NULL, NULL),
(251, 'list_payment', 'List of payment', NULL, NULL),
(252, 'total_salary', 'Total Salary', NULL, NULL),
(253, 'total_working_minutes', 'Working Hour', NULL, NULL),
(254, 'payment_due', 'Payment Type', NULL, NULL),
(255, 'payment_date', 'Date', NULL, NULL),
(256, 'paid_by', 'Paid By', NULL, NULL),
(257, 'view_employee_payment', 'Employee Payment List', NULL, NULL),
(258, 'sal_payment_type', 'Salary Payment Type', NULL, NULL),
(259, 'add_payment_type', 'Add Payment Type', NULL, NULL),
(260, 'list_payment_type', 'List of Payment Type', NULL, NULL),
(261, 'payment_period', 'Payment Period', NULL, NULL),
(262, 'payment_type', 'Payment Type', NULL, NULL),
(263, 'time', 'Punch Time', NULL, NULL),
(264, 'shift', 'Shift', NULL, NULL),
(265, 'location', 'Location', NULL, NULL),
(266, 'logtype', 'Log Type', NULL, NULL),
(267, 'branch', 'Location', NULL, NULL),
(268, 'student', 'Students', NULL, NULL),
(269, 'csv', 'CSV', NULL, NULL),
(270, 'save_successfull', 'Your Data Save Successfully', NULL, NULL),
(271, 'successfully_updated', 'Your Data Successfully Updated', NULL, NULL),
(272, 'atn_form', 'Attendance Form', NULL, NULL),
(273, 'atn_report', 'Attendance Reports', NULL, NULL),
(274, 'end_date', 'To', NULL, NULL),
(275, 'start_date', 'From', NULL, NULL),
(276, 'done', 'Done', NULL, NULL),
(277, 'employee_id_se', 'Write Employee Id or name here ', NULL, NULL),
(278, 'attendance_repor', 'Attendance Report', NULL, NULL),
(279, 'e_time', 'End Time', NULL, NULL),
(280, 's_time', 'Start Time', NULL, NULL),
(281, 'atn_datewiserer', 'Date Wise Report', NULL, NULL),
(282, 'atn_report_id', 'Date And Id base Report', NULL, NULL),
(283, 'atn_report_time', 'Date And Time report', NULL, NULL),
(284, 'payroll', 'Payroll', NULL, NULL),
(285, 'loan', 'Loan', NULL, NULL),
(286, 'loan_grand', 'GrandLoan', NULL, NULL),
(287, 'add_loan', 'Add Loan', NULL, NULL),
(288, 'loan_list', 'List of Loan', NULL, NULL),
(289, 'loan_details', 'Loan Details', NULL, NULL),
(290, 'amount', 'Amount', NULL, NULL),
(291, 'interest_rate', 'Interest Percentage', NULL, NULL),
(292, 'installment_period', 'Installment Period', NULL, NULL),
(293, 'repayment_amount', 'Repayment Total', NULL, NULL),
(294, 'date_of_approve', 'Approve Date', NULL, NULL),
(295, 'repayment_start_date', 'Repayment From', NULL, NULL),
(296, 'permission_by', 'Permitted By', NULL, NULL),
(297, 'grand', 'Grand', NULL, NULL),
(298, 'installment', 'Installment', NULL, NULL),
(299, 'loan_status', 'status', NULL, NULL),
(300, 'installment_period_m', 'Installment Period in Month', NULL, NULL),
(301, 'successfully_inserted', 'Your loan Successfully Granted', NULL, NULL),
(302, 'loan_installment', 'Loan Installment', NULL, NULL),
(303, 'add_installment', 'Add Installment', NULL, NULL),
(304, 'installment_list', 'List of Installment', NULL, NULL),
(305, 'loan_id', 'Loan No', NULL, NULL),
(306, 'installment_amount', 'Installment Amount', NULL, NULL),
(307, 'payment', 'Payment', NULL, NULL),
(308, 'received_by', 'Receiver', NULL, NULL),
(309, 'installment_no', 'Install No', NULL, NULL),
(310, 'notes', 'Notes', NULL, NULL),
(311, 'paid', 'Paid', NULL, NULL),
(312, 'loan_report', 'Loan Report', NULL, NULL),
(313, 'e_r_id', 'Enter Your Employee ID', NULL, NULL),
(314, 'leave', 'Leave', NULL, NULL),
(315, 'add_leave', 'Add Leave', NULL, NULL),
(316, 'list_leave', 'List of Leave', NULL, NULL),
(317, 'dayname', 'Weekly Leave Day', NULL, NULL),
(318, 'holiday', 'Holiday', NULL, NULL),
(319, 'list_holiday', 'List of Holidays', NULL, NULL),
(320, 'no_of_days', 'Number of Days', NULL, NULL),
(321, 'holiday_name', 'Holiday Name', NULL, NULL),
(322, 'set', 'SET', NULL, NULL),
(323, 'tax', 'Tax', NULL, NULL),
(324, 'tax_setup', 'Tax Setup', NULL, NULL),
(325, 'add_tax_setup', 'Add Tax Setup', NULL, NULL),
(326, 'list_tax_setup', 'List of Tax setup', NULL, NULL),
(327, 'tax_collection', 'Tax collection', NULL, NULL),
(328, 'start_amount', 'Start Amount', NULL, NULL),
(329, 'end_amount', 'End Amount', NULL, NULL),
(330, 'rate', 'Tax Rate', NULL, NULL),
(331, 'date_start', 'Date Start', NULL, NULL),
(332, 'amount_tax', 'Tax Amount', NULL, NULL),
(333, 'collection_by', 'Collection By', NULL, NULL),
(334, 'date_end', 'Date End', NULL, NULL),
(335, 'income_net_period', 'Income  Net period', NULL, NULL),
(336, 'default_amount', 'Default Amount', NULL, NULL),
(337, 'add_sal_type', 'Add Salary Type', NULL, NULL),
(338, 'list_sal_type', 'Salary Type List', NULL, NULL),
(339, 'salary_type_setup', 'Salary Type Setup', NULL, NULL),
(340, 'salary_setup', 'Salary SetUp', NULL, NULL),
(341, 'add_sal_setup', 'Add Salary Setup', NULL, NULL),
(342, 'list_sal_setup', 'Salary Setup List', NULL, NULL),
(343, 'salary_type_id', 'Salary Type', NULL, NULL),
(344, 'salary_generate', 'Salary Generate', NULL, NULL),
(345, 'add_sal_generate', 'Generate Now', NULL, NULL),
(346, 'list_sal_generate', 'Generated Salary List', NULL, NULL),
(347, 'gdate', 'Generate Date', NULL, NULL),
(348, 'start_dates', 'Start Date', NULL, NULL),
(349, 'generate', 'Generate ', NULL, NULL),
(350, 'successfully_saved_saletup', ' Set up Successfull', NULL, NULL),
(351, 's_date', 'Start Date', NULL, NULL),
(352, 'e_date', 'End Date', NULL, NULL),
(353, 'salary_payable', 'Payable Salary', NULL, NULL),
(354, 'tax_manager', 'Tax', NULL, NULL),
(355, 'generate_by', 'Generate By', NULL, NULL),
(356, 'successfully_paid', 'Successfully Paid', NULL, NULL),
(357, 'direct_empl', ' Employee', NULL, NULL),
(358, 'add_emp_info', 'Add New Employee', NULL, NULL),
(359, 'new_empl_pos', 'Add New Employee Position', NULL, NULL),
(360, 'manage', 'Manage Position', NULL, NULL),
(361, 'ad_advertisement', 'ADD POSITION', NULL, NULL),
(362, 'moduless', 'Modules', NULL, NULL),
(363, 'next', 'Next', NULL, NULL),
(364, 'finish', 'Finish', NULL, NULL),
(365, 'request', 'Request', NULL, NULL),
(366, 'successfully_saved', 'Your Data Successfully Saved', NULL, NULL),
(367, 'sal_type', 'Salary Type', NULL, NULL),
(368, 'sal_name', 'Salary Name', NULL, NULL),
(369, 'leave_application', 'Leave Application', NULL, NULL),
(370, 'apply_strt_date', 'Application Start Date', NULL, NULL),
(371, 'apply_end_date', 'Application End date', NULL, NULL),
(372, 'leave_aprv_strt_date', 'Approve Start Date', NULL, NULL),
(373, 'leave_aprv_end_date', 'Approved End Date', NULL, NULL),
(374, 'num_aprv_day', 'Aproved Day', NULL, NULL),
(375, 'reason', 'Reason', NULL, NULL),
(376, 'approve_date', 'Approved Date', NULL, NULL),
(377, 'leave_type', 'Leave Type', NULL, NULL),
(378, 'apply_hard_copy', 'Application Hard Copy', NULL, NULL),
(379, 'approved_by', 'Approved By', NULL, NULL),
(380, 'notice', 'Notice Board', NULL, NULL),
(381, 'noticeboard', 'Notice Board', NULL, NULL),
(382, 'notice_descriptiion', 'Description', NULL, NULL),
(383, 'notice_date', 'Notice Date', NULL, NULL),
(384, 'notice_type', 'Notice Type', NULL, NULL),
(385, 'notice_by', 'Notice By', NULL, NULL),
(386, 'notice_attachment', 'Attachment', NULL, NULL),
(387, 'account_name', 'Account Name', NULL, NULL),
(388, 'account_type', 'Account Type', NULL, NULL),
(389, 'account_id', 'Account Name', NULL, NULL),
(390, 'transaction_description', 'Description', NULL, NULL),
(391, 'payment_id', 'Payment', NULL, NULL),
(392, 'create_by_id', 'Created By', NULL, NULL),
(393, 'account', 'Account', NULL, NULL),
(394, 'account_add', 'Add Account', NULL, NULL),
(395, 'account_transaction', 'Transaction', NULL, NULL),
(396, 'award', 'Award', NULL, NULL),
(397, 'new_award', 'New Award', NULL, NULL),
(398, 'award_name', 'Award Name', NULL, NULL),
(399, 'aw_description', 'Award Description', NULL, NULL),
(400, 'awr_gift_item', 'Gift Item', NULL, NULL),
(401, 'awarded_by', 'Award By', NULL, NULL),
(402, 'employee_name', 'Employee Name', NULL, NULL),
(403, 'employee_list', 'Atn List', NULL, NULL),
(404, 'department', 'Department', NULL, NULL),
(405, 'department_name', 'Department Name ', NULL, NULL),
(406, 'clockout', 'ClockOut', NULL, NULL),
(407, 'se_account_id', 'Select Account Name', NULL, NULL),
(408, 'app_date', 'Apply Date', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `leave_apply`
--

CREATE TABLE `leave_apply` (
  `leave_appl_id` int(11) NOT NULL,
  `employee_id` varchar(20) NOT NULL,
  `apply_strt_date` varchar(20) NOT NULL,
  `apply_end_date` varchar(20) NOT NULL,
  `leave_aprv_strt_date` varchar(20) NOT NULL,
  `leave_aprv_end_date` varchar(20) NOT NULL,
  `num_aprv_day` varchar(15) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `apply_hard_copy` text,
  `apply_date` varchar(20) NOT NULL,
  `approve_date` varchar(20) NOT NULL,
  `approved_by` varchar(30) NOT NULL,
  `leave_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_apply`
--

INSERT INTO `leave_apply` (`leave_appl_id`, `employee_id`, `apply_strt_date`, `apply_end_date`, `leave_aprv_strt_date`, `leave_aprv_end_date`, `num_aprv_day`, `reason`, `apply_hard_copy`, `apply_date`, `approve_date`, `approved_by`, `leave_type`) VALUES
(10, 123456, '2017-09-07', '2017-09-21', '2017-09-07', '2017-09-19', '12', 'Marriage', '0', '2017-09-07', '2017-09-07', 'pingbd', 'dfsdf'),
(11, 3598875, '2017-09-09', '2017-09-21', '2017-09-09', '2017-09-20', '11', 'Festival', '0', '2017-09-09', '2017-09-09', 'Bdtask', 'df');



-- --------------------------------------------------------

--
-- Table structure for table `loan_installment`
--

CREATE TABLE `loan_installment` (
  `loan_inst_id` int(11) NOT NULL,
  `employee_id` varchar(21) CHARACTER SET latin1 NOT NULL,
  `loan_id` varchar(21) CHARACTER SET latin1 NOT NULL,
  `installment_amount` varchar(20) CHARACTER SET latin1 NOT NULL,
  `payment` varchar(20) CHARACTER SET latin1 NOT NULL,
  `date` varchar(20) CHARACTER SET latin1 NOT NULL,
  `received_by` varchar(20) CHARACTER SET latin1 NOT NULL,
  `installment_no` varchar(20) CHARACTER SET latin1 NOT NULL DEFAULT '1',
  `notes` varchar(80) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loan_installment`
--

INSERT INTO `loan_installment` (`loan_inst_id`, `employee_id`, `loan_id`, `installment_amount`, `payment`, `date`, `received_by`, `installment_no`, `notes`) VALUES
(5, '123456', '13', '2517', '2517', '2017-09-21', 'sdf', '1', 'sdfsdf\"'),
(6, '4324', '14', '1563', '1563', '2017-09-09', 'dfgdsfg', '1', 'dfgdfg'),
(7, '2017ali', '2', '500', '2000', '2017-09-09', 'malak', 'NaN', 'na'),
(8, 'OIT876', '19', '11644', '12000', '2017-09-16', 'Nix Korbin', '1', 'Lorem ipsum miguna orbata hikuga maxi loretna mingula naxiba ortana.'),
(9, 'YTR987', '20', '14667', '15000', '2017-09-16', 'Mark Zebin Patel', '5', 'Lorem ipsum miguna orbata hikuga maxi loretna mingula naxiba ortana.'),
(10, 'QR1234', '17', '12000', '12000', '2017-09-17', 'Yan Tun ', '2', 'Lorem ipsum miguna orbata hikuga maxi loretna mingula naxiba ortana.'),
(11, 'STD8972456236', '18', '19', '45000', '50000', 'Migual Rodriguaze', '6', 'Lorem ipsum miguna orbata hikuga maxi loretna mingula naxiba ortana.'),
(12, 'YTR987', '20', '14667', '15000', '2017-09-16', 'Xaviar Kotinho', '6', 'Lorem ipsum miguna orbata hikuga maxi loretna mingula naxiba ortana.');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL,
  `sender_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=unseen, 1=seen, 2=delete',
  `receiver_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=unseen, 1=seen, 2=delete'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `sender_id`, `receiver_id`, `subject`, `message`, `datetime`, `sender_status`, `receiver_status`) VALUES
(1, 2, 1, 'TEST', '<p>Â TEST</p>', '2017-02-07 00:00:00', 0, 2),
(3, 26, 3, 'TEST', '<p>receiver_id<strong></strong></p>', '2017-02-07 00:00:00', 0, 1),
(10, 2, 17, 'TEST', '<p>bbjkjhjh</p>', '2017-02-07 11:34:41', 0, 0),
(11, 2, 1, 'morning', '<p>sadefsdasdaff</p>', '2017-07-19 06:57:36', 1, 1),
(12, 2, 7, 'hi', '<p>fgdfg</p>', '2017-07-23 10:08:55', 1, 0),
(13, 2, 1, 'Salary report', '<p>Please send me salary report.....</p>', '2017-07-23 02:01:04', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text,
  `image` varchar(255) NOT NULL,
  `directory` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES
(39, 'attendance Details ', 'Simple attendance processing System', 'application/modules/attendance/assets/images/thumbnail.jpg', 'attendance', 1),
(40, 'Employee circulation processing System', 'Simple circulation processing System', 'application/modules/circularprocess/assets/images/thumbnail.jpg', 'circularprocess', 1),
(41, 'Employee Details ', 'Simple hrm processing System', 'application/modules/employee/assets/images/thumbnail.jpg', 'employee', 1),
(42, 'Leave Details ', 'Simple leave processing System', 'application/modules/leave/assets/images/thumbnail.jpg', 'leave', 1),
(43, 'Loan Details ', 'Simple loan processing System', 'application/modules/loan/assets/images/thumbnail.jpg', 'loan', 1),
(44, 'TAX Details ', 'Simple tax processing System', 'application/modules/tax/assets/images/thumbnail.jpg', 'tax', 1),
(46, 'Payroll Details ', 'Simple payroll processing System', 'application/modules/payroll/assets/images/thumbnail.jpg', 'payroll', 1),
(48, 'Account', 'Account information', 'application/modules/account/assets/images/thumbnail.jpg', 'account', 1),
(49, 'Notice Details ', 'Simple Notice', 'application/modules/noticeboard/assets/images/thumbnail.jpg', 'noticeboard', 1),
(50, 'Award Details ', 'Simple Award', 'application/modules/award/assets/images/thumbnail.jpg', 'award', 1);

-- --------------------------------------------------------

--
-- Table structure for table `module_permission`
--

CREATE TABLE `module_permission` (
  `id` int(11) NOT NULL,
  `fk_module_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `create` tinyint(1) DEFAULT NULL,
  `read` tinyint(1) DEFAULT NULL,
  `update` tinyint(1) DEFAULT NULL,
  `delete` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `module_permission`
--

INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES
(5, 39, 3, 1, 1, 1, 1),
(6, 40, 3, 0, 0, 0, 0),
(7, 41, 3, 0, 1, 1, 1),
(8, 42, 3, 0, 0, 0, 0),
(9, 43, 3, 0, 1, 1, 0),
(10, 44, 3, 0, 0, 0, 0),
(21, 39, 1, 1, 1, 1, 1),
(22, 40, 1, 0, 0, 0, 0),
(23, 41, 1, 0, 0, 0, 0),
(24, 42, 1, 0, 0, 0, 0),
(25, 43, 1, 0, 0, 0, 0),
(26, 44, 1, 0, 0, 0, 0),
(27, 46, 1, 0, 0, 0, 0),
(28, 48, 1, 1, 1, 1, 0),
(29, 49, 1, 0, 0, 0, 0),
(30, 50, 1, 0, 0, 0, 0),
(31, 48, 10, 1, 0, 0, 0),
(32, 39, 10, 0, 0, 0, 0),
(33, 50, 10, 0, 0, 0, 0),
(34, 40, 10, 0, 0, 0, 0),
(35, 41, 10, 0, 0, 0, 0),
(36, 42, 10, 0, 0, 1, 0),
(37, 43, 10, 0, 0, 0, 0),
(38, 49, 10, 0, 0, 0, 0),
(39, 46, 10, 0, 0, 0, 0),
(40, 44, 10, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notice_board`
--

CREATE TABLE `notice_board` (
  `notice_id` int(11) NOT NULL,
  `notice_descriptiion` text NOT NULL,
  `notice_date` date NOT NULL,
  `notice_type` varchar(50) NOT NULL,
  `notice_by` varchar(50) NOT NULL,
  `notice_attachment` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice_board`
--

INSERT INTO `notice_board` (`notice_id`, `notice_descriptiion`, `notice_date`, `notice_type`, `notice_by`, `notice_attachment`) VALUES
(2, 'Attention Please It is a large for Describe our notice', '2017-08-25', 'Salary', 'sdfdsf', './application/modules/noticeboard/assets/images/2017-08-16/Exa.pdf'),
(3, 'good', '2017-08-22', 'Testing Notice', 'sdf', './application/modules/noticeboard/assets/images/2017-08-22/Exa.pdf'),
(4, 'sdf', '2017-08-22', 'Second test', 'Isahq', '0'),
(5, 'dsfdsf', '2017-08-21', 'Vacaition holiday', 'sdfsdf', './application/modules/noticeboard/assets/images/2017-08-22/Exa1.pdf'),
(6, 'Holy Eid ul Azha', '2017-08-23', 'Leave', 'Isahaq', '0'),
(7, 'sdfsdf', '2017-08-23', 'Eid Ul Azha', 'Khan', '0'),
(8, 'sdfsaf', '2017-08-16', 'Vacaition holiday', 'ewr', ''),
(9, 'sdfdsfsdf', '2017-08-28', 'Eid Ul Azha Holiday', 'SAkir', './application/modules/noticeboard/assets/images/2017-08-29/Exa2.pdf'),
(10, 'sdfsdf', '2017-08-29', 'Jamtul Bidha', 'sakib', './application/modules/noticeboard/assets/images/2017-08-29/Exa1.pdf'),
(11, 'dfdsf', '2017-08-29', 'Summer vacation', 'Mizan', './application/modules/noticeboard/assets/images/2017-08-29/Exa.pdf'),
(12, 'Our office will be open at 7', '2017-09-07', 'Office Open', 'bdtask', './application/modules/noticeboard/assets/images/2017-09-07/Exa.pdf'),
(13, 'asdfsdaf', '2017-09-09', 'Test Notice', 'Bdtask', './application/modules/noticeboard/assets/images/2017-09-09/Exa.pdf'),
(15, 'Tomorrow will be held National Liberation  dayfghgfg ghj ghjghj', '2017-09-10', 'Govt Holidayf', 'Isahaqg', './application/modules/noticeboard/assets/images/2017-09-10/Exa.pdf'),
(16, 'hjgd gnmdfgbdjs bhjhfgb jfd bxcjhv', '2017-09-11', 'attendance', 'tanzil', '0'),
(17, 'xdfdf', '2017-09-12', 'Test Notice', 'dsf', NULL),
(18, 'fghfh', '2017-09-05', 'Govt Holiday', 'Bdtask', './application/modules/noticeboard/assets/images/2017-09-12/1.jpg'),
(19, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lobortis ultrices maximus.', '2017-09-22', 'New Salary Increment', 'Zariv Rixona', './application/modules/noticeboard/assets/images/2017-09-15/Acc.png'),
(20, 'Lorem ipsum oragn ligur wqrt astri minuq tarzan okapal', '2017-09-16', 'New Salary Increment', 'Zariv Rixona', './application/modules/noticeboard/assets/images/2017-09-16/cct.png');

-- --------------------------------------------------------

--
-- Table structure for table `payroll_holiday`
--

CREATE TABLE `payroll_holiday` (
  `payrl_holi_id` int(11) UNSIGNED NOT NULL,
  `holiday_name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `start_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `end_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `no_of_days` varchar(30) CHARACTER SET latin1 NOT NULL,
  `created_by` varchar(30) CHARACTER SET latin1 NOT NULL,
  `updated_by` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payroll_holiday`
--

INSERT INTO `payroll_holiday` (`payrl_holi_id`, `holiday_name`, `start_date`, `end_date`, `no_of_days`, `created_by`, `updated_by`) VALUES
(7, 'Pohela Bayshak', '2017-07-20', '2017-07-25', '7', '', ''),
(8, 'summer vacation', '2017-07-23', '2017-07-30', '7', '', ''),
(10, 'Ramadan', '2017-07-01', '2017-07-25', '24', '', ''),
(11, 'Eid Ul Azha', '2017-08-30', '2017-09-05', '6', '', ''),
(12, 'Independence Day', '2017-09-16', '2017-09-13', '3', '', ''),
(13, 'Black Friday ', '2017-09-29', '2017-09-30', '1', '', ''),
(14, 'Winter Vacation', '2017-09-18', '2017-09-25', '7', '', ''),
(15, 'Republic Day', '2017-09-20', '2017-09-21', '1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `payroll_tax_collection`
--

CREATE TABLE `payroll_tax_collection` (
  `tax_coll_id` int(11) UNSIGNED NOT NULL,
  `employee_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `date_start` varchar(30) CHARACTER SET latin1 NOT NULL,
  `amount_tax` varchar(30) CHARACTER SET latin1 NOT NULL,
  `collection_by` varchar(30) CHARACTER SET latin1 NOT NULL,
  `date_end` varchar(30) CHARACTER SET latin1 NOT NULL,
  `income_net_period` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payroll_tax_setup`
--

CREATE TABLE `payroll_tax_setup` (
  `tax_setup_id` int(11) UNSIGNED NOT NULL,
  `start_amount` varchar(30) CHARACTER SET latin1 NOT NULL,
  `end_amount` varchar(30) CHARACTER SET latin1 NOT NULL,
  `rate` varchar(30) CHARACTER SET latin1 NOT NULL,
  `status` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payroll_tax_setup`
--

INSERT INTO `payroll_tax_setup` (`tax_setup_id`, `start_amount`, `end_amount`, `rate`, `status`) VALUES
(1, '1', '5000', '10', ''),
(2, '2000', '3000', '10', ''),
(3, '3000', '3500', '12', ''),
(4, '3500', '4200', '12', ''),
(5, '4000', '4500', '20', ''),
(7, '2000', '5500', '10', ''),
(8, '01', '200000', '10%', ''),
(9, '200001', '500000', '12%', '');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `pos_id` int(11) NOT NULL,
  `position_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `position_details` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`pos_id`, `position_name`, `position_details`) VALUES
(5, 'Senior Executive', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor quam eu maximus pulvinar.'),
(6, 'Chief Executive', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor quam eu maximus pulvinar.'),
(7, 'Junior Software Developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor quam eu maximus pulvinar.'),
(8, 'Lead Programmer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor quam eu maximus pulvinar.'),
(9, 'HR Admin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor quam eu maximus pulvinar.'),
(10, 'Chief Information Officer  ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor quam eu maximus pulvinar.'),
(11, 'Chief Operation Officer ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor quam eu maximus pulvinar.'),
(12, 'Chief Executive Officer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor quam eu maximus pulvinar.'),
(13, 'SEO', 'Manage'),
(14, ' Programmer', 'developing');

-- --------------------------------------------------------

--
-- Table structure for table `salary_setup_header`
--

CREATE TABLE `salary_setup_header` (
  `s_s_h_id` int(11) UNSIGNED NOT NULL,
  `employee_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `salary_payable` varchar(30) CHARACTER SET latin1 NOT NULL,
  `absent_deduct` varchar(30) CHARACTER SET latin1 NOT NULL,
  `tax_manager` varchar(30) CHARACTER SET latin1 NOT NULL,
  `status` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salary_setup_header`
--

INSERT INTO `salary_setup_header` (`s_s_h_id`, `employee_id`, `salary_payable`, `absent_deduct`, `tax_manager`, `status`) VALUES
(1, '5001', 'monthly', '1', '1', ''),
(2, '1234bd', 'monthly', '1', '1', ''),
(3, '1235', 'weekly', '1', '1', ''),
(4, '20021', 'monthly', '1', '1', ''),
(5, '100001', 'monthly', '1', '1', ''),
(6, '3598875', 'monthly', '1', '0', ''),
(7, '2017ali', 'monthly', '1', '1', ''),
(8, '4324', 'monthly', '1', '1', ''),
(9, 'JR5rt648', 'monthly', '1', '1', ''),
(10, 'QR1234', 'monthly', '1', '1', ''),
(11, 'JK987', 'monthly', '1', '1', ''),
(12, 'STD8972456236', 'monthly', '1', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `salary_sheet_generate`
--

CREATE TABLE `salary_sheet_generate` (
  `ssg_id` int(11) UNSIGNED NOT NULL,
  `employee_id` varchar(20) NOT NULL,
  `name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `gdate` varchar(20) DEFAULT NULL,
  `start_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `end_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `generate_by` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salary_sheet_generate`
--

INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES
(13, '3598875', 'September', '2017-09-09', '2017-09-01', '2017-09-30', 'Jhon  Doe'),
(14, '123456', 'September', '2017-09-09', '2017-09-01', '2017-09-30', 'Jhon  Doe'),
(15, '2017ali', 'September', '2017-09-09', '2017-09-01', '2017-09-30', 'Jhon  Doe'),
(16, '4324', 'September', '2017-09-09', '2017-09-01', '2017-09-30', 'Jhon  Doe'),
(17, '3598875', 'feb', '2017-09-09', '2017-09-01', '2017-09-16', 'Jhon  Doe'),
(18, '123456', 'feb', '2017-09-09', '2017-09-01', '2017-09-16', 'Jhon  Doe'),
(19, '2017ali', 'feb', '2017-09-09', '2017-09-01', '2017-09-16', 'Jhon  Doe'),
(20, '4324', 'feb', '2017-09-09', '2017-09-01', '2017-09-16', 'Jhon  Doe'),
(21, '3598875', 'Md ali', '2017-09-09', '2017-09-09', '2017-09-30', 'Jhon  Doe'),
(22, '123456', 'Md ali', '2017-09-09', '2017-09-09', '2017-09-30', 'Jhon  Doe'),
(23, '2017ali', 'Md ali', '2017-09-09', '2017-09-09', '2017-09-30', 'Jhon  Doe'),
(24, '4324', 'Md ali', '2017-09-09', '2017-09-09', '2017-09-30', 'Jhon  Doe'),
(25, '3598875', 'MH dental', '2017-09-09', '2017-09-30', '2017-10-05', 'Jhon  Doe'),
(26, '123456', 'MH dental', '2017-09-09', '2017-09-30', '2017-10-05', 'Jhon  Doe'),
(27, '2017ali', 'MH dental', '2017-09-09', '2017-09-30', '2017-10-05', 'Jhon  Doe'),
(28, '4324', 'MH dentals', '2017-09-09', '2017-09-30', '2017-10-05', 'Jhon  Doe'),
(29, 'abu17', 'Rob Nixaro', '2017-09-15', '2017-09-16', '2017-09-30', 'Jhon  Doe'),
(30, '3598875', 'Rob Nixaro', '2017-09-15', '2017-09-16', '2017-09-30', 'Jhon  Doe'),
(31, '001122', 'Rob Nixaro', '2017-09-15', '2017-09-16', '2017-09-30', 'Jhon  Doe'),
(32, '123456', 'Rob Nixaro', '2017-09-15', '2017-09-16', '2017-09-30', 'Jhon  Doe'),
(33, 'RTY123', 'Rob Nixaro', '2017-09-15', '2017-09-16', '2017-09-30', 'Jhon  Doe'),
(34, 'JK987', 'Rob Nixaro', '2017-09-15', '2017-09-16', '2017-09-30', 'Jhon  Doe'),
(35, 'JR5rt648', 'Rob Nixaro', '2017-09-15', '2017-09-16', '2017-09-30', 'Jhon  Doe'),
(36, '2017ali', 'Rob Nixaro', '2017-09-15', '2017-09-16', '2017-09-30', 'Jhon  Doe'),
(37, 'STD8972456236', 'Rob Nixaro', '2017-09-15', '2017-09-16', '2017-09-30', 'Jhon  Doe'),
(38, '4324', 'Rob Nixaro', '2017-09-15', '2017-09-16', '2017-09-30', 'Jhon  Doe'),
(39, 'QR1234', 'Rob Nixaro', '2017-09-15', '2017-09-16', '2017-09-30', 'Jhon  Doe'),
(40, 'abu17', 'Justin Trudeax', '2017-09-16', '2017-09-16', '2017-09-30', 'Jhon  Doe'),
(41, '3598875', 'Justin Trudeax', '2017-09-16', '2017-09-16', '2017-09-30', 'Jhon  Doe'),
(42, '001122', 'Justin Trudeax', '2017-09-16', '2017-09-16', '2017-09-30', 'Jhon  Doe'),
(43, '123456', 'Justin Trudeax', '2017-09-16', '2017-09-16', '2017-09-30', 'Jhon  Doe'),
(44, 'RTY123', 'Justin Trudeax', '2017-09-16', '2017-09-16', '2017-09-30', 'Jhon  Doe'),
(45, 'OIT876', 'Justin Trudeax', '2017-09-16', '2017-09-16', '2017-09-30', 'Jhon  Doe'),
(46, 'JK987', 'Justin Trudeax', '2017-09-16', '2017-09-16', '2017-09-30', 'Jhon  Doe'),
(47, 'JR5rt648', 'Justin Trudeax', '2017-09-16', '2017-09-16', '2017-09-30', 'Jhon  Doe'),
(48, '2017ali', 'Justin Trudeax', '2017-09-16', '2017-09-16', '2017-09-30', 'Jhon  Doe'),
(49, 'STD8972456236', 'Justin Trudeax', '2017-09-16', '2017-09-16', '2017-09-30', 'Jhon  Doe'),
(50, 'YTR987', 'Justin Trudeax', '2017-09-16', '2017-09-16', '2017-09-30', 'Jhon  Doe'),
(51, '4324', 'Justin Trudeax', '2017-09-16', '2017-09-16', '2017-09-30', 'Jhon  Doe'),
(52, 'QR1234', 'Justin Trudeax', '2017-09-16', '2017-09-16', '2017-09-30', 'Jhon  Doe'),
(53, 'MIT908', 'Justin Trudeax', '2017-09-16', '2017-09-16', '2017-09-30', 'Jhon  Doe');

-- --------------------------------------------------------

--
-- Table structure for table `salary_type`
--

CREATE TABLE `salary_type` (
  `salary_type_id` int(10) UNSIGNED NOT NULL,
  `sal_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `emp_sal_type` varchar(50) CHARACTER SET latin1 NOT NULL,
  `default_amount` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salary_type`
--

INSERT INTO `salary_type` (`salary_type_id`, `sal_name`, `emp_sal_type`, `default_amount`, `status`) VALUES
(5, 'Basic', '1', '10', ''),
(6, 'Medical', '1', '10000', ''),
(11, 'Loan', '0', '1200', ''),
(12, 'Provident fund', '0', '200', ''),
(13, 'Bima', '0', '1000', ''),
(15, 'House Rent', '1', '50', ''),
(19, 'Extra Hour ', '1', '1000', '');

-- --------------------------------------------------------

--
-- Table structure for table `sampledata`
--

CREATE TABLE `sampledata` (
  `brand` varchar(30) NOT NULL,
  `dealer_name` varchar(30) NOT NULL,
  `authorized` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact_no` varchar(30) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `fax` varchar(30) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `website_addr` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `address` text,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `favicon` varchar(100) DEFAULT NULL,
  `language` varchar(100) DEFAULT NULL,
  `site_align` varchar(50) DEFAULT NULL,
  `footer_text` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `title`, `address`, `email`, `phone`, `logo`, `favicon`, `language`, `site_align`, `footer_text`) VALUES
(2, 'Human Resource Management', '98 Green Road, Farmgate, Dhaka-1215.', 'abcd@gmail.com', '0123456789', 'assets/img/icons/2017-07-22/HRM.png', 'assets/img/icons/2017-04-03/m.png', 'english', 'LTR', '2017Â©Copyright');

-- --------------------------------------------------------

--
-- Table structure for table `synchronizer_setting`
--

CREATE TABLE `synchronizer_setting` (
  `id` int(11) NOT NULL,
  `hostname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `port` varchar(10) NOT NULL,
  `debug` varchar(10) NOT NULL,
  `project_root` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `synchronizer_setting`
--

INSERT INTO `synchronizer_setting` (`id`, `hostname`, `username`, `password`, `port`, `debug`, `project_root`) VALUES
(8, '70.35.198.244', 'spreadcargo', 'SpreadShorob1@', '21', 'true', './public_html/');

-- --------------------------------------------------------

--
-- Table structure for table `tablename`
--

CREATE TABLE `tablename` (
  `id` int(11) NOT NULL,
  `empName` varchar(100) DEFAULT NULL,
  `empAddress` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `about` text,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `password_reset_token` varchar(20) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `last_logout` datetime DEFAULT NULL,
  `ip_address` varchar(14) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_admin` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `about`, `email`, `password`, `password_reset_token`, `image`, `last_login`, `last_logout`, `ip_address`, `status`, `is_admin`) VALUES
(1, 'John', 'Doe', 'TEST', 'john@doe.com', '827ccb0eea8a706c4c34a16891f84e7b', '', './assets/img/user/images41.jpg', '2017-09-11 09:05:21', '2017-09-11 09:06:14', '27.147.175.112', 1, 0),
(2, 'Jhon ', 'Doe', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'admin@example.com', '827ccb0eea8a706c4c34a16891f84e7b', '', './assets/img/user/profile_img1.png', '2017-09-16 07:39:01', '2017-09-11 09:30:25', '118.179.160.12', 1, 1),
(3, 'Tahia ', 'Duke', 'Test', 'tahia@example.com', '827ccb0eea8a706c4c34a16891f84e7b', '', './assets/img/user/download13.jpg', '2017-04-10 14:00:29', '2017-04-09 14:01:46', '::1', 1, 0),
(7, 'abs', 'link', 'm ,mn,.m', 'abs@yahoo.com', '202cb962ac59075b964b07152d234b70', '', './assets/img/user/images_(3)2.jpg', NULL, NULL, NULL, 1, 0),
(9, 'HM', 'Isahaq', 'heessee', 'hmisahaq@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', './assets/img/user/61.png', '2017-08-28 07:21:50', '2017-08-28 07:35:12', '::1', 1, 0),
(10, 'gg', 'tt', NULL, 'jahed@example.com', 'e10adc3949ba59abbe56e057f20f883e', '', './application/modules/employee/assets/images/2017-08-26/32.jpg', '2017-08-26 11:49:15', '2017-08-26 12:08:32', '::1', 1, 0),
(11, '', '', NULL, '', 'd41d8cd98f00b204e9800998ecf8427e', '', NULL, NULL, NULL, NULL, 1, 0),
(12, '', '', NULL, '', 'd41d8cd98f00b204e9800998ecf8427e', '', NULL, NULL, NULL, NULL, 1, 0),
(13, '', '', NULL, '', 'd41d8cd98f00b204e9800998ecf8427e', '', NULL, NULL, NULL, NULL, 1, 0),
(16, 'Yeasin', 'Murad', 'na', 'murad@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', './assets/img/user/images_(2).jpg', NULL, NULL, NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `weekly_holiday`
--

CREATE TABLE `weekly_holiday` (
  `wk_id` int(11) NOT NULL,
  `dayname` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `weekly_holiday`
--

INSERT INTO `weekly_holiday` (`wk_id`, `dayname`) VALUES
(10, 'Satarday'),
(20, 'Friday'),
(23, 'Friday,Satarday,Sunday');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc_account_name`
--
ALTER TABLE `acc_account_name`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `acn_account_transaction`
--
ALTER TABLE `acn_account_transaction`
  ADD PRIMARY KEY (`account_tran_id`);

--
-- Indexes for table `award`
--
ALTER TABLE `award`
  ADD PRIMARY KEY (`award_id`);

--
-- Indexes for table `candidate_basic_info`
--
ALTER TABLE `candidate_basic_info`
  ADD PRIMARY KEY (`can_id`);

--
-- Indexes for table `candidate_education_info`
--
ALTER TABLE `candidate_education_info`
  ADD PRIMARY KEY (`can_edu_id`);

--
-- Indexes for table `candidate_interview`
--
ALTER TABLE `candidate_interview`
  ADD PRIMARY KEY (`can_int_id`);

--
-- Indexes for table `candidate_selection`
--
ALTER TABLE `candidate_selection`
  ADD PRIMARY KEY (`can_sel_id`);

--
-- Indexes for table `candidate_shortlist`
--
ALTER TABLE `candidate_shortlist`
  ADD PRIMARY KEY (`can_short_id`);

--
-- Indexes for table `candidate_workexperience`
--
ALTER TABLE `candidate_workexperience`
  ADD PRIMARY KEY (`can_workexp_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `employee_history`
--
ALTER TABLE `employee_history`
  ADD PRIMARY KEY (`emp_his_id`);

--
-- Indexes for table `employee_performance`
--
ALTER TABLE `employee_performance`
  ADD PRIMARY KEY (`emp_per_id`);

--
-- Indexes for table `employee_salary_payment`
--
ALTER TABLE `employee_salary_payment`
  ADD PRIMARY KEY (`emp_sal_pay_id`);

--
-- Indexes for table `employee_salary_setup`
--
ALTER TABLE `employee_salary_setup`
  ADD PRIMARY KEY (`e_s_s_id`);

--
-- Indexes for table `emp_attendance`
--
ALTER TABLE `emp_attendance`
  ADD PRIMARY KEY (`att_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_date`);

--
-- Indexes for table `eventsss`
--
ALTER TABLE `eventsss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_detail`
--
ALTER TABLE `event_detail`
  ADD PRIMARY KEY (`idevent`),
  ADD KEY `event_date` (`event_date`);

--
-- Indexes for table `grand_loan`
--
ALTER TABLE `grand_loan`
  ADD PRIMARY KEY (`loan_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_apply`
--
ALTER TABLE `leave_apply`
  ADD PRIMARY KEY (`leave_appl_id`);

--
-- Indexes for table `loan_installment`
--
ALTER TABLE `loan_installment`
  ADD PRIMARY KEY (`loan_inst_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_permission`
--
ALTER TABLE `module_permission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_module_id` (`fk_module_id`),
  ADD KEY `fk_user_id` (`fk_user_id`);

--
-- Indexes for table `notice_board`
--
ALTER TABLE `notice_board`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `payroll_holiday`
--
ALTER TABLE `payroll_holiday`
  ADD PRIMARY KEY (`payrl_holi_id`);

--
-- Indexes for table `payroll_tax_collection`
--
ALTER TABLE `payroll_tax_collection`
  ADD PRIMARY KEY (`tax_coll_id`);

--
-- Indexes for table `payroll_tax_setup`
--
ALTER TABLE `payroll_tax_setup`
  ADD PRIMARY KEY (`tax_setup_id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`pos_id`);

--
-- Indexes for table `salary_setup_header`
--
ALTER TABLE `salary_setup_header`
  ADD PRIMARY KEY (`s_s_h_id`);

--
-- Indexes for table `salary_sheet_generate`
--
ALTER TABLE `salary_sheet_generate`
  ADD PRIMARY KEY (`ssg_id`);

--
-- Indexes for table `salary_type`
--
ALTER TABLE `salary_type`
  ADD PRIMARY KEY (`salary_type_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `synchronizer_setting`
--
ALTER TABLE `synchronizer_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weekly_holiday`
--
ALTER TABLE `weekly_holiday`
  ADD PRIMARY KEY (`wk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acc_account_name`
--
ALTER TABLE `acc_account_name`
  MODIFY `account_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `acn_account_transaction`
--
ALTER TABLE `acn_account_transaction`
  MODIFY `account_tran_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `award`
--
ALTER TABLE `award`
  MODIFY `award_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `candidate_education_info`
--
ALTER TABLE `candidate_education_info`
  MODIFY `can_edu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `candidate_interview`
--
ALTER TABLE `candidate_interview`
  MODIFY `can_int_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `candidate_selection`
--
ALTER TABLE `candidate_selection`
  MODIFY `can_sel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `candidate_shortlist`
--
ALTER TABLE `candidate_shortlist`
  MODIFY `can_short_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `candidate_workexperience`
--
ALTER TABLE `candidate_workexperience`
  MODIFY `can_workexp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `employee_history`
--
ALTER TABLE `employee_history`
  MODIFY `emp_his_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;
--
-- AUTO_INCREMENT for table `employee_performance`
--
ALTER TABLE `employee_performance`
  MODIFY `emp_per_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `employee_salary_payment`
--
ALTER TABLE `employee_salary_payment`
  MODIFY `emp_sal_pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `employee_salary_setup`
--
ALTER TABLE `employee_salary_setup`
  MODIFY `e_s_s_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
--
-- AUTO_INCREMENT for table `emp_attendance`
--
ALTER TABLE `emp_attendance`
  MODIFY `att_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;
--
-- AUTO_INCREMENT for table `eventsss`
--
ALTER TABLE `eventsss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event_detail`
--
ALTER TABLE `event_detail`
  MODIFY `idevent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `grand_loan`
--
ALTER TABLE `grand_loan`
  MODIFY `loan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=409;
--
-- AUTO_INCREMENT for table `leave_apply`
--
ALTER TABLE `leave_apply`
  MODIFY `leave_appl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `loan_installment`
--
ALTER TABLE `loan_installment`
  MODIFY `loan_inst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `module_permission`
--
ALTER TABLE `module_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `notice_board`
--
ALTER TABLE `notice_board`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `payroll_holiday`
--
ALTER TABLE `payroll_holiday`
  MODIFY `payrl_holi_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `payroll_tax_collection`
--
ALTER TABLE `payroll_tax_collection`
  MODIFY `tax_coll_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payroll_tax_setup`
--
ALTER TABLE `payroll_tax_setup`
  MODIFY `tax_setup_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `pos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `salary_setup_header`
--
ALTER TABLE `salary_setup_header`
  MODIFY `s_s_h_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `salary_sheet_generate`
--
ALTER TABLE `salary_sheet_generate`
  MODIFY `ssg_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `salary_type`
--
ALTER TABLE `salary_type`
  MODIFY `salary_type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `synchronizer_setting`
--
ALTER TABLE `synchronizer_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `weekly_holiday`
--
ALTER TABLE `weekly_holiday`
  MODIFY `wk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
