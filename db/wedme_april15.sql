-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2023 at 02:02 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wedme`
--

-- --------------------------------------------------------

--
-- Table structure for table `bio_hobby`
--

CREATE TABLE IF NOT EXISTS `bio_hobby` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `hobbies` varchar(500) NOT NULL,
  `food_preference` varchar(200) NOT NULL,
  `drinking` varchar(200) NOT NULL,
  `smoking` varchar(200) NOT NULL,
  `bio` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `bio_hobby`
--

INSERT INTO `bio_hobby` (`id`, `username`, `hobbies`, `food_preference`, `drinking`, `smoking`, `bio`) VALUES
(1, 'neraj@gmail.com', 'playing football,watching movies', 'anything', 'no', 'no', 'hi I am a backend developer'),
(2, 'francis@gmail.com', 'x', 'x', 'x', 'x', 'x'),
(3, 'athul@gmail.com', 'x', 'x', 'x', 'x', 'x'),
(4, 'anju@gmail.com', 'x', 'x', 'x', 'x', 'x'),
(5, 'divya@gmail.com', 'x', 'x', 'x', 'x', 'x'),
(6, 'nandana@gmail.com', 'x', 'x', 'x', 'x', 'x');

-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

CREATE TABLE IF NOT EXISTS `interest` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `my_id` varchar(100) NOT NULL,
  `ur_id` varchar(100) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `interest`
--

INSERT INTO `interest` (`id`, `my_id`, `ur_id`, `status`) VALUES
(1, 'neraj@gmail.com', 'divya@gmail.com', 2),
(2, 'divya@gmail.com', 'francis@gmail.com', 0),
(3, 'francis@gmail.com', 'anju@gmail.com', 0),
(4, 'anju@gmail.com', 'neraj@gmail.com', 0),
(5, 'nandana@gmail.com', 'neraj@gmail.com', 0),
(8, 'nandana@gmail.com', 'francis@gmail.com', 0),
(9, 'nandana@gmail.com', 'athul@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `partner_preference`
--

CREATE TABLE IF NOT EXISTS `partner_preference` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `height` int(5) NOT NULL,
  `marital_status` varchar(100) NOT NULL,
  `physical_status` varchar(100) NOT NULL,
  `eating_habit` varchar(200) NOT NULL,
  `drink_habit` varchar(200) NOT NULL,
  `smoking` varchar(200) NOT NULL,
  `religion` varchar(200) NOT NULL,
  `caste` varchar(200) NOT NULL,
  `star` varchar(200) NOT NULL,
  `dosham` varchar(500) NOT NULL,
  `education` varchar(100) NOT NULL,
  `emp_status` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `annual_income` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `family_type` varchar(100) NOT NULL,
  `family_value` varchar(100) NOT NULL,
  `fathers_occup` varchar(100) NOT NULL,
  `mother_occup` varchar(100) NOT NULL,
  `textdata` text NOT NULL,
  `preftype` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `partner_preference`
--

INSERT INTO `partner_preference` (`id`, `username`, `age`, `height`, `marital_status`, `physical_status`, `eating_habit`, `drink_habit`, `smoking`, `religion`, `caste`, `star`, `dosham`, `education`, `emp_status`, `designation`, `annual_income`, `state`, `district`, `family_type`, `family_value`, `fathers_occup`, `mother_occup`, `textdata`, `preftype`) VALUES
(1, 'neraj@gmail.com', 20, 5, 'unmarried', 'nil', 'nil', 'no', 'no', 'nil', 'nil', 'nil', 'nil', 'pg', 'nil', 'nil', 'nil', 'kerala', 'kollam', 'nuclear', 'moderate', 'nil', 'nil', 'unmarried vegeterian no_drink no_smoking white Government', 0),
(2, 'francis@gmail.com', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'unmarried non-vegeterian no_drink no_smoking any_color Government', 0),
(3, 'athul@gmail.com', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'unmarried non-vegeterian no_drink no_smoking any_color Government', 0),
(4, 'anju@gmail.com', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'unmarried non-vegeterian no_drink no_smoking any_color Government', 0),
(5, 'divya@gmail.com', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'unmarried non-vegeterian no_drink no_smoking any_color Government', 0),
(6, 'nandana@gmail.com', 25, 155, 'unmarried', 'Well body', 'Non-veg', 'No', 'No', 'Hindu', 'Nair', 'Uthradam', 'No', 'PG', 'Govt', 'SD', '800000', 'aaaa', 'Kollam', 'Rich', 'Ortho', 'employed', 'House Wife', 'unmarried Well body Non-veg No No Hindu Nair Uthradam No PG Govt SD 800000 aaaa Kollam Rich Ortho employed House Wife ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `profession_education`
--

CREATE TABLE IF NOT EXISTS `profession_education` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `emp_type` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `income` int(10) NOT NULL,
  `work_location` varchar(500) NOT NULL,
  `highest_qualification` varchar(100) NOT NULL,
  `qual_in_details` varchar(200) NOT NULL,
  `university` varchar(100) NOT NULL,
  `college` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `profession_education`
--

INSERT INTO `profession_education` (`id`, `username`, `emp_type`, `occupation`, `income`, `work_location`, `highest_qualification`, `qual_in_details`, `university`, `college`) VALUES
(1, 'neraj@gmail.com', 'Private', 'project management', 0, '', 'mca', 'master in computer application', 'kerala university', ''),
(2, 'francis@gmail.com', '', '', 0, '', '', '', '', ''),
(3, 'athul@gmail.com', '', '', 0, '', '', '', '', ''),
(4, 'anju@gmail.com', '', '', 0, '', '', '', '', ''),
(5, 'divya@gmail.com', '', '', 0, '', '', '', '', ''),
(6, 'nandana@gmail.com', '', '', 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `login_id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `created` varchar(50) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `marital_status` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `district` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pincode` int(10) NOT NULL,
  `religion` varchar(200) NOT NULL,
  `caste` varchar(200) NOT NULL,
  `star` varchar(200) NOT NULL,
  `raashi` varchar(200) NOT NULL,
  `suddha_jadakam` varchar(200) NOT NULL,
  `family_status` varchar(100) NOT NULL,
  `family_type` varchar(100) NOT NULL,
  `family_value` varchar(200) NOT NULL,
  `height` int(10) NOT NULL,
  `weight` int(10) NOT NULL,
  `skin_color` varchar(100) NOT NULL,
  `physical_status` varchar(100) NOT NULL,
  `photo` varchar(500) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`login_id`, `username`, `created`, `fname`, `lname`, `dob`, `gender`, `marital_status`, `email`, `phno`, `address`, `district`, `state`, `pincode`, `religion`, `caste`, `star`, `raashi`, `suddha_jadakam`, `family_status`, `family_type`, `family_value`, `height`, `weight`, `skin_color`, `physical_status`, `photo`) VALUES
(2, 'francis@gmail.com', 'Parents', 'Francis', 'Francis', '2000-06-22', 'Male', 'Unmarried', 'francis@gmail.com', '8547470685', '0', '', '', 0, '', '', '', '', '', '', '', '', 0, 0, '', '', 'photo/8547470685.jpg'),
(1, 'neraj@gmail.com', 'Self', 'Neraj Lal', 'Neraj Lal', '2000-10-09', 'Male', 'Unmarried', 'neraj@gmail.com', '8547470675', 'neraj bhavan', 'kollam', 'Kerala', 691503, 'nil', 'nil', 'nil', 'nil', 'nil', 'Lower Class', 'Nuclear', 'Moderate', 5, 50, 'neutral', 'None', 'photo/8547470675.jpg'),
(3, 'athul@gmail.com', 'Relative', 'Athul', 'Athul', '2000-10-24', 'Male', 'Unmarried', 'athul@gmail.com', '8547470695', '0', '', '', 0, '', '', '', '', '', '', '', '', 0, 0, '', '', 'photo/8547470695.jpg'),
(4, 'anju@gmail.com', 'Self', 'Anju', 'Anju', '2000-06-13', 'Female', 'Unmarried', 'anju@gmail.com', '8547470665', '0', '', '', 0, '', '', '', '', '', '', '', '', 0, 0, '', '', 'photo/8547470665.jpg'),
(5, 'divya@gmail.com', 'Parents', 'Divya', 'Divya', '2000-03-19', 'Female', 'Unmarried', 'divya@gmail.com', '8547470615', '0', '', '', 0, '', '', '', '', '', '', '', '', 0, 0, '', '', 'photo/8547470615.jpg'),
(6, 'nandana@gmail.com', 'Relative', 'nandana', 'nandana', '2000-03-01', 'Female', 'Unmarried', 'nandana@gmail.com', '8547470625', 'sssssssssssss', 'Kollam', 'Kerala', 691012, 'Hindu', 'Nair', 'Uthradam', 'Scorpio', 'Y', 'Lower Class', 'Nuclear', 'Traditional', 155, 55, 'fair', 'None', 'photo/8547470625.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `login_id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` varchar(20) NOT NULL,
  `user_status` int(10) NOT NULL,
  `plan_status` int(3) NOT NULL,
  `otp_code` int(20) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `username`, `password`, `type`, `user_status`, `plan_status`, `otp_code`) VALUES
(1, 'neraj@gmail.com', 'Neraj123@', 'user', 1, 1, 0),
(2, 'francis@gmail.com', 'Francis123@', 'user', 1, 1, 0),
(3, 'athul@gmail.com', 'Athul123@', 'user', 1, 0, 0),
(4, 'anju@gmail.com', 'Anju123@', 'user', 1, 0, 0),
(5, 'divya@gmail.com', 'Divya123@', 'user', 1, 1, 0),
(6, 'nandana@gmail.com', 'Nandana123@', 'user', 1, 1, 0),
(7, 'admin@gmail.com', 'Admin123@', 'admin', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE IF NOT EXISTS `tbl_message` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `incoming_msg_id` int(30) NOT NULL,
  `outgoing_msg_id` int(30) NOT NULL,
  `text_message` varchar(50) NOT NULL,
  `curr_date` date NOT NULL,
  `curr_time` time NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_message`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `created_by` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `marital_sts` varchar(50) NOT NULL,
  `hname` varchar(500) NOT NULL,
  `sname` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `pincode` int(10) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `profile_pic` varchar(200) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`uid`, `created_by`, `name`, `gender`, `dob`, `marital_sts`, `hname`, `sname`, `city`, `pincode`, `phno`, `email`, `profile_pic`) VALUES
(1, 'Self', 'Neraj Lal', 'Male', '2000-10-09', 'Unmarried', 'neraj bhavan', 'kundara', 'kollam', 691503, '8547470675', 'neraj@gmail.com', 'photo/8547470675.jpg'),
(2, 'Parents', 'Francis', 'Male', '2000-06-22', 'Unmarried', 'francis nivas', 'Ilampalloor', 'kollam', 691503, '8547470685', 'francis@gmail.com', 'photo/8547470685.jpg'),
(3, 'Relative', 'Athul', 'Male', '2000-10-24', 'Unmarried', 'athul bhavan', 'puthoor', 'kollam', 691503, '8547470695', 'athul@gmail.com', 'photo/8547470695.jpg'),
(4, 'Self', 'Anju', 'Female', '2000-06-13', 'Unmarried', 'Anju bhavan', 'Vellimon', 'kollam', 691503, '8547470665', 'anju@gmail.com', 'photo/8547470665.jpg'),
(5, 'Parents', 'Divya', 'Female', '2000-03-19', 'Unmarried', 'divya nivas', 'keralapuram', 'kollam', 691503, '8547470615', 'divya@gmail.com', 'photo/8547470615.jpg'),
(6, 'Relative', 'nandana', 'Female', '2000-03-01', 'Unmarried', 'nandanam', 'mavelikara', 'alappuzha', 691504, '8547470625', 'nandana@gmail.com', 'photo/8547470625.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trainingdata`
--

CREATE TABLE IF NOT EXISTS `trainingdata` (
  `username` varchar(100) NOT NULL,
  `textdata` text NOT NULL,
  `label` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainingdata`
--

INSERT INTO `trainingdata` (`username`, `textdata`, `label`) VALUES
('', 'unmarried vegeterian no_drink no_smoking white Government', '1'),
('', 'unmarried non-vegeterian no_drink no_smoking white Government', '2'),
('', 'unmarried non-vegeterian no_drink no_smoking any_color Government', '3'),
('', 'second_marriage vegeterian no_drink no_smoking white Government', '5'),
('', 'second_marriage non-vegeterian no_drink no_smoking any_color Government', '4'),
('nandana@gmail.com', 'unmarried Well body Non-veg No No Hindu Nair Uthradam No PG Govt SD 800000 aaaa Kollam Rich Ortho employed House Wife ', '0');
