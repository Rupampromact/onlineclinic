-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2016 at 10:55 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `odas`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor1`
--

CREATE TABLE IF NOT EXISTS `doctor1` (
`d_id1` int(11) NOT NULL,
  `d_name1` varchar(200) NOT NULL,
  `d_email1` varchar(200) NOT NULL,
  `d_password1` varchar(200) NOT NULL,
  `d_qual1` varchar(50) NOT NULL,
  `d_city1` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor1`
--

INSERT INTO `doctor1` (`d_id1`, `d_name1`, `d_email1`, `d_password1`, `d_qual1`, `d_city1`) VALUES
(1, 'Usman', 'usman123@yahoo.com', '12345', 'nothing', 'Taxila'),
(2, 'fatima', 'm7@gmail.com', 'fatima', 'hello world', 'Rawalpindi'),
(3, 'fatima zahar', 'm7u786@gmail.com', 'fatima', 'hello world', 'Rawalpindi'),
(4, 'ali', 'ali@gmail.com', 'ali', 'ali', 'Quatta'),
(5, 'Bilal ali', 'admin@gmail.com', 'admin', 'admin', 'Quatta'),
(6, 'Usman Siddique', 'm7u786@gmail.com', 'muhammadusman', 'yo man', 'Islamabad'),
(7, 'ahmed', 'sadianoor952@yahoo.com', 'ahmed12345', 'fgfhh', 'Fasalabad');

-- --------------------------------------------------------

--
-- Table structure for table `d_answers`
--

CREATE TABLE IF NOT EXISTS `d_answers` (
  `ques_id` int(11) NOT NULL,
`ans_id` int(11) NOT NULL,
  `ans_answer` varchar(200) NOT NULL,
  `ans_d_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_answers`
--

INSERT INTO `d_answers` (`ques_id`, `ans_id`, `ans_answer`, `ans_d_id`) VALUES
(12, 8, 'to ja na saly', 1),
(14, 10, 'you never worys', 3),
(14, 11, 'its work fine', 3),
(14, 12, 'i am your doctor', 3),
(12, 13, '#usman_ali behave your self admin here', 3),
(13, 15, 'yes ', 3),
(10, 16, 'Your question is not showinh yet', 3),
(14, 18, 'hey', 3),
(14, 19, 'how', 3),
(14, 20, 'bye', 3),
(14, 21, 'what', 3),
(12, 22, 'ku waja', 3),
(15, 26, 'no problem dude', 2),
(15, 27, 'its not just a big prblem', 2),
(14, 28, 'so waht admin', 2),
(17, 29, 'hey you need colcalte', 4),
(18, 30, 'dvdsf', 2),
(18, 31, 'fdsfsd', 2),
(21, 32, 'abc', 1),
(21, 33, 'cde', 1),
(21, 34, 'asd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `d_setnot`
--

CREATE TABLE IF NOT EXISTS `d_setnot` (
`s_no` int(11) NOT NULL,
  `d_id12` int(11) NOT NULL,
  `d_date1` int(11) NOT NULL,
  `d_start1` int(11) NOT NULL,
  `d_end1` int(11) NOT NULL,
  `month_s` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_setnot`
--

INSERT INTO `d_setnot` (`s_no`, `d_id12`, `d_date1`, `d_start1`, `d_end1`, `month_s`) VALUES
(1, 2, 6, 6, 7, 5),
(3, 5, 12, 12, 10, 5),
(4, 6, 6, 6, 7, 6),
(5, 7, 6, 6, 9, 6);

-- --------------------------------------------------------

--
-- Table structure for table `free_patient`
--

CREATE TABLE IF NOT EXISTS `free_patient` (
`p_id` int(11) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `p_email` varchar(30) NOT NULL,
  `p_mob` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `free_patient`
--

INSERT INTO `free_patient` (`p_id`, `p_name`, `p_email`, `p_mob`) VALUES
(1, 'ali', 'ali@yahoo.com', '0307-4356789'),
(2, 'usman', 'usman83496@gmail.com', '0307-5230948'),
(3, 'fatima', 'fatima@gmail.com', '0231-8765437'),
(4, 'fatima wsgduw', 'sadianoor952@yahoo.com', '0307-5230948'),
(5, 'fatima zahra', 'fatimazahra@gmail.com', '03337834509'),
(94, 'ali', 'ali@gmail.com', '0321-34453434'),
(95, 'usman', 'usman83496@gmail.com', '0307-5230948'),
(96, 'bilal', 'usman83496@gmail.com', '0307-5230948'),
(97, 'usman', 'usman83496@gmail.com', '0307-5230948'),
(98, 'usman', 'usman83496@gmail.com', '0307-5230948'),
(99, 'mohsin', 'mohsin@gmail.com', '0231-8765437'),
(100, 'awais khan', 'awais@gmail.com', '0321-4561468'),
(101, 'Seher Siddique', 'seher@yahoo.com', 'seher'),
(102, 'Haris Ali', 'haris@yahoo.com', '0321-34344242'),
(103, 'Usman Siddique', 'usman@gmail.com', '0321-456789'),
(104, 'ali raza', 'ali@gmail.com', '0321-2345678'),
(105, 'ali', 'ali@gmail.com', '1234576'),
(106, 'qasim', 'qasim@gmail.com', '12345632453'),
(107, 'nobody', 'nobody@gmail.com', '23456'),
(108, 'asd', 'sadianoor952@yahoo.com', '876543'),
(109, 'awais', 'awais@gmail.com', '765435678'),
(110, 'khan', 'khan@gmail.com', '12345632453'),
(111, 'qasim', 'qasim@gmail.com', '23465'),
(112, 'ali', 'ali@gmail.com', '345');

-- --------------------------------------------------------

--
-- Table structure for table `p_patient1`
--

CREATE TABLE IF NOT EXISTS `p_patient1` (
`p_id1` int(11) NOT NULL,
  `p_name1` varchar(200) NOT NULL,
  `p_email1` varchar(50) NOT NULL,
  `p_mob1` varchar(20) NOT NULL,
  `p_adrs1` varchar(30) NOT NULL,
  `p_cnic1` varchar(30) NOT NULL,
  `p_gender` varchar(15) NOT NULL,
  `p_pass1` varchar(123) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_patient1`
--

INSERT INTO `p_patient1` (`p_id1`, `p_name1`, `p_email1`, `p_mob1`, `p_adrs1`, `p_cnic1`, `p_gender`, `p_pass1`) VALUES
(1, 'fatima zahar', 'm7u786@gmail.com', '0307-5230948', 'taxila', '23475654321', 'Female', '12345'),
(2, 'Maria Siddique', 'maria@gmail.com', '0327-343545355', 'no thing', '12324543231', 'Female', 'maria'),
(3, 'Ali raza', 'ali@gmail.com', '0321-3454535t', 'ndonf fhesoidfho hfiow', '32323232323', 'male', 'ali'),
(4, 'admin', 'admin@gmail.com', '12345678', 'admin', '654324567', 'male', 'admin'),
(5, 'Usman Siddique', 'usman@yahoo.com', '0307-5064448', 'yes it was not decided', '1234523452345', 'male', 'usman1'),
(6, 'ahmed', 'ahmed@gmail.com', '1232465', 'fgfnghf', '324567', 'male', 'ahmed');

-- --------------------------------------------------------

--
-- Table structure for table `p_ques`
--

CREATE TABLE IF NOT EXISTS `p_ques` (
  `q_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_ques`
--

INSERT INTO `p_ques` (`q_id`, `p_id`) VALUES
(2, 2),
(3, 3),
(4, 4),
(8, 5),
(9, 6),
(10, 95),
(11, 98),
(12, 99),
(13, 100),
(14, 101),
(15, 102),
(16, 103),
(17, 104),
(18, 105),
(19, 106),
(21, 110),
(22, 111),
(23, 112);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
`qus_id` int(11) NOT NULL,
  `qus_question` varchar(200) NOT NULL,
  `qus_type` int(11) NOT NULL,
  `qus_time` varchar(20) NOT NULL,
  `qus_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qus_id`, `qus_question`, `qus_type`, `qus_time`, `qus_date`) VALUES
(12, 'mujy foj main jana hy ', 3, '08:38:15', '0000-00-00'),
(13, 'hey i am usman i am 14 year old and i want to marry with a girl what i do', 5, '19:32:42', '0000-00-00'),
(14, 'this is a test question and i just want to test what is this and how its work and how to ask a qustion here .\r\nthis is a test question and i just want to test what is this and how its work and how to ', 6, '08:44:17', '0000-00-00'),
(15, 'if i have a ear desisi a then what i do and how to do', 6, '20:12:38', '0000-00-00'),
(16, 'hey i am usman', 4, '09:45:31', '0000-00-00'),
(17, ' hey a have a teeth problem suggest me a paste\r\n', 2, '04:01:46', '0000-00-00'),
(18, 'i am student', 4, '06:58:43', '0000-00-00'),
(20, '&lt;script&gt;alert(&quot;hello&quot;);&lt;/script&gt;', 1, '07:33:59', '0000-00-00'),
(21, ' \r\nplease confirm my appointment of tomarrow at 1 pm...', 1, '07:37:13', '0000-00-00'),
(22, ' \r\n&lt;script&gt;alert(&quot;hello&quot;);&lt;/script&gt;', 1, '07:38:49', '0000-00-00'),
(23, ' \r\ni am pat', 1, '08:29:38', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `q_types`
--

CREATE TABLE IF NOT EXISTS `q_types` (
`type_id` int(11) NOT NULL,
  `type_name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `q_types`
--

INSERT INTO `q_types` (`type_id`, `type_name`) VALUES
(1, 'skin specialist '),
(2, 'dentist'),
(3, 'bone specialist'),
(4, 'eyes specialist'),
(5, 'heart surgeon'),
(6, 'ears specialist');

-- --------------------------------------------------------

--
-- Table structure for table `set_break`
--

CREATE TABLE IF NOT EXISTS `set_break` (
  `doc_id` int(11) NOT NULL,
  `start_time_d` int(11) NOT NULL,
  `end_time_d` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `set_break`
--

INSERT INTO `set_break` (`doc_id`, `start_time_d`, `end_time_d`) VALUES
(1, 12, 24),
(2, 16, 23),
(3, 18, 20),
(4, 10, 14),
(4, 10, 14),
(5, 11, 13),
(7, 8, 21);

-- --------------------------------------------------------

--
-- Table structure for table `s_doctors`
--

CREATE TABLE IF NOT EXISTS `s_doctors` (
`d_id` int(11) NOT NULL,
  `d_name` varchar(20) NOT NULL,
  `d_address` varchar(50) NOT NULL,
  `d_qualification` varchar(100) NOT NULL,
  `d_email` varchar(30) NOT NULL,
  `d_password` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_doctors`
--

INSERT INTO `s_doctors` (`d_id`, `d_name`, `d_address`, `d_qualification`, `d_email`, `d_password`) VALUES
(1, 'usman ali', 'taxila', 'MBBS', 'usman83496@gmail.com', 'ali'),
(2, 'fatima', 'jhang', 'bse', 'fatima@gmail.com', 'fatima'),
(3, 'admin', 'admin', 'admin', 'admin@gmail.com', 'admin'),
(4, 'usman', 'usman', 'usman', 'usman@yahoo.com', 'usman'),
(5, 'fatima', 'fatima', 'fatima', 'fatima@gmail.com', 'fatima');

-- --------------------------------------------------------

--
-- Table structure for table `take_apont`
--

CREATE TABLE IF NOT EXISTS `take_apont` (
`serial_no` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `a_month` int(11) NOT NULL,
  `a_date` int(11) NOT NULL,
  `a_time` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `take_apont`
--

INSERT INTO `take_apont` (`serial_no`, `doctor_id`, `patient_id`, `a_month`, `a_date`, `a_time`) VALUES
(1, 1, 1, 5, 6, '12'),
(2, 1, 1, 5, 6, '1'),
(4, 3, 3, 5, 7, '2'),
(5, 4, 2, 5, 11, '5'),
(6, 2, 4, 5, 8, '14'),
(8, 4, 5, 6, 8, '0'),
(9, 6, 5, 6, 6, '6'),
(10, 6, 6, 8, 1, '0'),
(12, 1, 4, 6, 6, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor1`
--
ALTER TABLE `doctor1`
 ADD PRIMARY KEY (`d_id1`);

--
-- Indexes for table `d_answers`
--
ALTER TABLE `d_answers`
 ADD PRIMARY KEY (`ans_id`);

--
-- Indexes for table `d_setnot`
--
ALTER TABLE `d_setnot`
 ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `free_patient`
--
ALTER TABLE `free_patient`
 ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `p_patient1`
--
ALTER TABLE `p_patient1`
 ADD PRIMARY KEY (`p_id1`);

--
-- Indexes for table `p_ques`
--
ALTER TABLE `p_ques`
 ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
 ADD PRIMARY KEY (`qus_id`);

--
-- Indexes for table `q_types`
--
ALTER TABLE `q_types`
 ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `s_doctors`
--
ALTER TABLE `s_doctors`
 ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `take_apont`
--
ALTER TABLE `take_apont`
 ADD PRIMARY KEY (`serial_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor1`
--
ALTER TABLE `doctor1`
MODIFY `d_id1` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `d_answers`
--
ALTER TABLE `d_answers`
MODIFY `ans_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `d_setnot`
--
ALTER TABLE `d_setnot`
MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `free_patient`
--
ALTER TABLE `free_patient`
MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `p_patient1`
--
ALTER TABLE `p_patient1`
MODIFY `p_id1` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
MODIFY `qus_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `q_types`
--
ALTER TABLE `q_types`
MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `s_doctors`
--
ALTER TABLE `s_doctors`
MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `take_apont`
--
ALTER TABLE `take_apont`
MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
