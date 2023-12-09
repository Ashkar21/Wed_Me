-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2023 at 04:09 PM
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
  `textdata` text NOT NULL,
  `preftype` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `bio_hobby`
--

INSERT INTO `bio_hobby` (`id`, `username`, `hobbies`, `food_preference`, `drinking`, `smoking`, `bio`, `textdata`, `preftype`) VALUES
(1, 'neraj@gmail.com', 'coding', 'non veg', 'yes', 'yes', 'hi I am a fullstack developer', '', 0),
(2, 'francis@gmail.com', 'x', 'x', 'x', 'x', 'x', '', 0),
(3, 'athul@gmail.com', 'x', 'x', 'x', 'x', 'x', '', 0),
(4, 'anju@gmail.com', 'x', 'x', 'x', 'x', 'x', '', 0),
(5, 'divya@gmail.com', 'x', 'x', 'x', 'x', 'x', '', 0),
(6, 'nandana@gmail.com', 'x', 'x', 'x', 'x', 'x', '', 0),
(7, 'nikhil@gmail.com', 'x', 'x', 'x', 'x', 'x', '', 0),
(8, 'nivin@gmail.com', 'x', 'x', 'x', 'x', 'x', '', 0),
(9, 'radhika@gmail.com', 'Acting', 'veg', 'Yes', 'Yes', 'qqqqqqqqqqqqqqqqqq', 'hobbies_Acting food_preference_veg drinking_Yes smoking_Yes', 1),
(10, 'katrina@gmail.com', '', '', '', '', '', '', 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

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
(9, 'nandana@gmail.com', 'athul@gmail.com', 0),
(11, 'neraj@gmail.com', 'nandana@gmail.com', 0),
(12, 'divya@gmail.com', 'neraj@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `senderid` varchar(50) NOT NULL,
  `receiverid` varchar(50) NOT NULL,
  `message` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `senderid`, `receiverid`, `message`, `time`) VALUES
(60, 'neraj@gmail.com', 'divya@gmail.com', 'how are you', '2023-04-18 15:57:07'),
(61, 'neraj@gmail.com', 'divya@gmail.com', 'hello', '2023-04-18 15:57:11'),
(62, 'neraj@gmail.com', 'divya@gmail.com', 'how is it', '2023-04-18 15:57:22'),
(78, 'divya@gmail.com', 'neraj@gmail.com', 'helloooo', '2023-04-18 17:21:53'),
(72, 'neraj@gmail.com', 'nandana@gmail.com', 'hiii', '2023-04-18 16:19:28'),
(77, 'divya@gmail.com', 'neraj@gmail.com', 'helloooo', '2023-04-18 17:20:43'),
(75, 'neraj@gmail.com', 'divya@gmail.com', 'nice', '2023-04-18 17:15:02'),
(76, 'divya@gmail.com', 'neraj@gmail.com', 'ooho', '2023-04-18 17:16:15'),
(79, 'nandana@gmail.com', 'neraj@gmail.com', 'hi', '2023-04-21 15:59:50'),
(80, 'nandana@gmail.com', 'neraj@gmail.com', 'how are you', '2023-04-21 15:59:56');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `partner_preference`
--

INSERT INTO `partner_preference` (`id`, `username`, `age`, `height`, `marital_status`, `physical_status`, `eating_habit`, `drink_habit`, `smoking`, `religion`, `caste`, `star`, `dosham`, `education`, `emp_status`, `designation`, `annual_income`, `state`, `district`, `family_type`, `family_value`, `fathers_occup`, `mother_occup`, `textdata`, `preftype`) VALUES
(1, 'neraj@gmail.com', 20, 5, 'unmarried', 'nil', 'nil', 'no', 'no', 'nil', 'nil', 'nil', 'nil', 'pg', 'nil', 'nil', 'nil', 'kerala', 'kollam', 'nuclear', 'moderate', 'nil', 'nil', 'unmarried vegeterian no_drink no_smoking white Government', 0),
(2, 'francis@gmail.com', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'unmarried non-vegeterian no_drink no_smoking any_color Government', 0),
(3, 'athul@gmail.com', 23, 180, 'unmarried', 'Well body', 'Non-veg', 'No', 'No', 'Hindu', 'Nair', 'Atham', 'No', 'PG', 'Govt', 'SD', '800000', 'Kerala', 'Kollam', 'joint', 'modern', 'employed', 'House Wife', 'marital_status_unmarried physical_status_Wellbody eating_habit_Non-veg drink_habit_No smoking_No religion_Hindu caste_Nair star_Atham dosham_No education_PG emp_status_Govt occupation_SD annual_income_800000 state_Kerala district_Kollam family_type_joint family_value_modern fathers_occup_employed mother_occup_HouseWife ', 0),
(4, 'anju@gmail.com', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'unmarried non-vegeterian no_drink no_smoking any_color Government', 0),
(5, 'divya@gmail.com', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'unmarried non-vegeterian no_drink no_smoking any_color Government', 0),
(6, 'nandana@gmail.com', 25, 155, 'unmarried', 'Well body', 'Non-veg', 'No', 'No', 'Hindu', 'Nair', 'Uthradam', 'No', 'PG', 'Govt', 'SD', '800000', 'aaaa', 'Kollam', 'Rich', 'Ortho', 'employed', 'House Wife', 'unmarried Well body Non-veg No No Hindu Nair Uthradam No PG Govt SD 800000 aaaa Kollam Rich Ortho employed House Wife ', 0),
(7, 'nikhil@gmail.com', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(8, 'nivin@gmail.com', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(9, 'radhika@gmail.com', 23, 180, 'unmarried', 'Well body', 'Veg', 'Yes', 'Yes', 'Hindu', 'Ezhava', 'Atham', 'No', 'PG', 'Private', 'Content Creator', '800000', 'Maharashtra', 'Mumbai', 'joint', 'modern', 'employed', 'House Wife', 'marital_status_unmarried physical_status_Wellbody eating_habit_Veg drink_habit_Yes smoking_Yes religion_Hindu caste_Ezhava star_Atham dosham_No education_PG emp_status_Private occupation_ContentCreator annual_income_800000 state_Maharashtra district_Mumbai family_type_joint family_value_modern fathers_occup_employed mother_occup_HouseWife ', 0),
(10, 'katrina@gmail.com', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0);

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
  `textdata` text NOT NULL,
  `preftype` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `profession_education`
--

INSERT INTO `profession_education` (`id`, `username`, `emp_type`, `occupation`, `income`, `work_location`, `highest_qualification`, `qual_in_details`, `university`, `college`, `textdata`, `preftype`) VALUES
(1, 'neraj@gmail.com', 'Government', 'fire force', 0, '', 'msc', 'cyber security', 'ktu', '', '', 0),
(2, 'francis@gmail.com', '', '', 0, '', '', '', '', '', '', 0),
(3, 'athul@gmail.com', '', '', 0, '', '', '', '', '', '', 0),
(4, 'anju@gmail.com', '', '', 0, '', '', '', '', '', '', 0),
(5, 'divya@gmail.com', '', '', 0, '', '', '', '', '', '', 0),
(6, 'nandana@gmail.com', '', '', 0, '', '', '', '', '', '', 0),
(7, 'nikhil@gmail.com', '', '', 0, '', '', '', '', '', '', 0),
(8, 'nivin@gmail.com', '', '', 0, '', '', '', '', '', '', 0),
(9, 'radhika@gmail.com', 'Freelancer', 'Content Creator', 500000, '', 'PG', 'MCA', 'Kerala University', '', 'emp_type_Freelancer occupation_ContentCreator income_500000 highest_qualification_PG', 0),
(10, 'katrina@gmail.com', '', '', 0, '', '', '', '', '', '', 0);

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
  `textdata` text NOT NULL,
  `preftype` int(11) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`login_id`, `username`, `created`, `fname`, `lname`, `dob`, `gender`, `marital_status`, `email`, `phno`, `address`, `district`, `state`, `pincode`, `religion`, `caste`, `star`, `raashi`, `suddha_jadakam`, `family_status`, `family_type`, `family_value`, `height`, `weight`, `skin_color`, `physical_status`, `photo`, `textdata`, `preftype`) VALUES
(2, 'francis@gmail.com', 'Parents', 'Francis', 'Francis', '2000-06-22', 'Male', 'Unmarried', 'francis@gmail.com', '8547470685', '0', '', '', 0, '', '', '', '', '', '', '', '', 0, 0, '', '', 'photo/8547470685.jpg', '', 0),
(1, 'neraj@gmail.com', 'Self', 'Neraj ', 'Lal', '2000-10-09', 'Male', 'Unmarried', 'neraj@gmail.com', '8547470675', 'lal bhavan Mukkoodu p.o Mulavana', 'trivandrum', 'Kerala', 691502, 'nil', 'nil', 'nil', 'nil', 'nil', 'Lower Class', 'Joint', 'Orthodox', 5, 50, 'neutrally', 'None', 'photo/8547470675.jpg', '', 0),
(3, 'athul@gmail.com', 'Relative', 'Athul', 'Athul', '2000-10-24', 'Male', 'Unmarried', 'athul@gmail.com', '8547470695', '0', '', '', 0, '', '', '', '', '', '', '', '', 0, 0, '', '', 'photo/8547470695.jpg', '', 0),
(4, 'anju@gmail.com', 'Self', 'Anju', 'Anju', '2000-06-13', 'Female', 'Unmarried', 'anju@gmail.com', '8547470665', '0', '', '', 0, '', '', '', '', '', '', '', '', 0, 0, '', '', 'photo/8547470665.jpg', '', 0),
(5, 'divya@gmail.com', 'Parents', 'Divya', 'Divya', '2000-03-19', 'Female', 'Unmarried', 'divya@gmail.com', '8547470615', '0', '', '', 0, '', '', '', '', '', '', '', '', 0, 0, '', '', 'photo/8547470615.jpg', '', 0),
(6, 'nandana@gmail.com', 'Relative', 'nandana', 'nandana', '2000-03-01', 'Female', 'Unmarried', 'nandana@gmail.com', '8547470625', 'sssssssssssss', 'Kollam', 'Kerala', 691012, 'Hindu', 'Nair', 'Uthradam', 'Scorpio', 'Y', 'Lower Class', 'Nuclear', 'Traditional', 155, 55, 'fair', 'None', 'photo/8547470625.jpg', '', 0),
(7, 'nikhil@gmail.com', 'Self', 'Nikhil Anand', 'Nikhil Anand', '1990-10-16', 'Male', '0', 'nikhil@gmail.com', '8888888888', '0', '', '', 0, '', '', '', '', '', '', '', '', 0, 0, '', '', 'photo/8888888888.jpg', '', 0),
(8, 'nivin@gmail.com', 'Parents', 'Nivin Pauly', 'Nivin Pauly', '1996-01-31', 'Male', '0', 'nivin@gmail.com', '1234567898', '0', '', '', 0, '', '', '', '', '', '', '', '', 0, 0, '', '', 'photo/1234567898.jpg', '', 0),
(9, 'radhika@gmail.com', 'Sibling', 'Radhika Apte', 'Radhika Apte', '1991-01-07', 'Female', 'Widow / Widower', 'radhika@gmail.com', '7979797996', 'aaaxxxxx', 'Mumbai', 'Maharashtra', 111111, 'Hindu', 'Ezhava', 'Thiruvathira', 'Scorpio', 'Y', 'Lower Class', 'Nuclear', 'Liberal', 180, 85, 'black', 'None', 'photo/7979797996.jpeg', 'religion_Hindu religion_Hindu caste_Ezhava star_Thiruvathira raashi_Scorpio suddha_jadakam_Y family_status_LowerClass family_type_Nuclear annual_income_ state_Maharashtra district_Mumbai family_type_Nuclear family_value_Liberal skin_color_black physical_status_None ', 0),
(10, 'katrina@gmail.com', 'Relative', 'Katrina Kaif', 'Katrina Kaif', '1985-10-22', 'Female', 'Separated', 'katrina@gmail.com', '9922222222', '0', '', '', 0, '', '', '', '', '', '', '', '', 0, 0, '', '', 'photo/9922222222.jpg', '', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

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
(7, 'admin@gmail.com', 'Admin123@', 'admin', 1, 1, 0),
(8, 'nikhil@gmail.com', 'Nikhil@123', 'user', 1, 0, 0),
(9, 'nivin@gmail.com', 'Password@123', 'user', 1, 0, 0),
(10, 'radhika@gmail.com', 'Radhika@123', 'user', 1, 1, 0),
(11, 'katrina@gmail.com', 'Password@123', 'user', 0, 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`uid`, `created_by`, `name`, `gender`, `dob`, `marital_sts`, `hname`, `sname`, `city`, `pincode`, `phno`, `email`, `profile_pic`) VALUES
(1, 'Self', 'Neraj Lal', 'Male', '2000-10-09', 'Unmarried', 'neraj bhavan', 'kundara', 'kollam', 691503, '8547470675', 'neraj@gmail.com', 'photo/8547470675.jpg'),
(2, 'Parents', 'Francis', 'Male', '2000-06-22', 'Unmarried', 'francis nivas', 'Ilampalloor', 'kollam', 691503, '8547470685', 'francis@gmail.com', 'photo/8547470685.jpg'),
(3, 'Relative', 'Athul', 'Male', '2000-10-24', 'Unmarried', 'athul bhavan', 'puthoor', 'kollam', 691503, '8547470695', 'athul@gmail.com', 'photo/8547470695.jpg'),
(4, 'Self', 'Anju', 'Female', '2000-06-13', 'Unmarried', 'Anju bhavan', 'Vellimon', 'kollam', 691503, '8547470665', 'anju@gmail.com', 'photo/8547470665.jpg'),
(5, 'Parents', 'Divya', 'Female', '2000-03-19', 'Unmarried', 'divya nivas', 'keralapuram', 'kollam', 691503, '8547470615', 'divya@gmail.com', 'photo/8547470615.jpg'),
(6, 'Relative', 'nandana', 'Female', '2000-03-01', 'Unmarried', 'nandanam', 'mavelikara', 'alappuzha', 691504, '8547470625', 'nandana@gmail.com', 'photo/8547470625.jpg'),
(7, 'Self', 'Nikhil Anand', 'Male', '1990-10-16', '0', 'Nikhil house', 'Nikhil house', 'Nikhil city', 888888, '8888888888', 'nikhil@gmail.com', 'photo/8888888888.jpg'),
(8, 'Parents', 'Nivin Pauly', 'Male', '1996-01-31', '0', 'Nivin house', 'Nivin street', 'Nivin city', 778899, '1234567898', 'nivin@gmail.com', 'photo/1234567898.jpg'),
(9, 'Sibling', 'Radhika Apte', 'Female', '1991-01-07', 'Widow / Widower', 'Radhika ', 'Radhika ', 'Radhika ', 787878, '7979797996', 'radhika@gmail.com', 'photo/7979797996.jpeg'),
(10, 'Relative', 'Katrina Kaif', 'Female', '1985-10-22', 'Separated', 'KatrinaHousename ', 'KatrinaHousename ', 'KatrinaHousename ', 222222, '9922222222', 'katrina@gmail.com', 'photo/9922222222.jpg');

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
('nandana@gmail.com', 'unmarried Well body Non-veg No No Hindu Nair Uthradam No PG Govt SD 800000 aaaa Kollam Rich Ortho employed House Wife ', '0'),
('athul@gmail.com', 'marital_status_unmarried physical_status_Wellbody eating_habit_Non-veg drink_habit_No smoking_No religion_Hindu caste_Nair star_Atham dosham_No education_PG emp_status_Govt occupation_SD annual_income_800000 state_Kerala district_Kollam family_type_joint family_value_modern fathers_occup_employed mother_occup_HouseWife ', '0'),
('radhika@gmail.com', 'marital_status_unmarried physical_status_Wellbody eating_habit_Veg drink_habit_Yes smoking_Yes religion_Hindu caste_Ezhava star_Atham dosham_No education_PG emp_status_Private occupation_ContentCreator annual_income_800000 state_Maharashtra district_Mumbai family_type_joint family_value_modern fathers_occup_employed mother_occup_HouseWife ', '0');
