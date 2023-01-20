-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 20, 2023 at 10:44 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scholarship`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_message`
--

DROP TABLE IF EXISTS `admin_message`;
CREATE TABLE IF NOT EXISTS `admin_message` (
  `message` varchar(300) NOT NULL,
  `mess_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_message`
--

INSERT INTO `admin_message` (`message`, `mess_date`) VALUES
('', '0000-00-00'),
('', '0000-00-00'),
('', '0000-00-00'),
('', '0000-00-00'),
('', '0000-00-00'),
('', '0000-00-00'),
('', '0000-00-00'),
('hello test', '0000-00-00'),
('how are you', '0000-00-00'),
('wonderful day', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `u_type` varchar(50) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `year` int(10) NOT NULL,
  `sem` int(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `pass`, `u_type`, `branch`, `batch`, `year`, `sem`, `email`) VALUES
('admin123', 'admin123', 'admin', 'nil', 'nil', 0, 0, 'admin@gmail.com'),
('adv54', 'hanna', 'Advisor', 'MPLAN', 'A', 2022, 2, 'farhana.arehim@gmail'),
('sch32', 'sch32', 'SCH', 'MCA', 'nill', 2022, 0, 'rehim.farhana@gmail.'),
('hod45', 'hod45', 'HOD', 'MCA', 'nill', 2022, 0, 'farhana.arehim@gmail'),
('hod39', 'afeef', 'HOD', 'MCA', 'nill', 2022, 0, 'farhana.arehim@gmail'),
('adv545', 'amal``', 'Advisor', 'CHEM', 'B', 2022, 4, 'farhana.arehim@gmail'),
('adv123', 'adv123', 'Advisor', 'MCA', 'A', 2022, 1, 'rehim.farhana@gmail.'),
('adv59', 'amal', 'Advisor', 'MTECH', 'A', 2022, 2, 'farhana.arehim@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `registration_details`
--

DROP TABLE IF EXISTS `registration_details`;
CREATE TABLE IF NOT EXISTS `registration_details` (
  `fullname` varchar(20) NOT NULL,
  `studid` varchar(20) NOT NULL,
  `rollno` int(10) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  `yoa` int(4) NOT NULL,
  `semester` int(5) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `hosteller` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `hosteladd` varchar(30) NOT NULL,
  `entrancerank` int(10) NOT NULL,
  `entrancetry` int(10) NOT NULL,
  `backpaper` varchar(100) NOT NULL,
  `gpa` varchar(100) NOT NULL,
  `fathername` varchar(20) NOT NULL,
  `fatherage` int(10) NOT NULL,
  `fatherincome` int(10) NOT NULL,
  `mothername` varchar(20) NOT NULL,
  `motherage` int(10) NOT NULL,
  `motherincome` int(10) NOT NULL,
  `sibling1name` varchar(20) NOT NULL,
  `sibling1age` int(10) NOT NULL,
  `sibling1income` int(10) NOT NULL,
  `sibling2name` varchar(20) NOT NULL,
  `sibling2age` int(10) NOT NULL,
  `sibling2income` int(10) NOT NULL,
  `bankreceipt` varchar(20) NOT NULL,
  `otherscholarship` varchar(20) NOT NULL,
  `semfee` int(10) NOT NULL,
  `hostelfee` int(10) NOT NULL,
  `examfee` int(10) NOT NULL,
  `stationaryfee` int(10) NOT NULL,
  `otherfeedetails` varchar(20) NOT NULL,
  `otherfee` int(10) NOT NULL,
  `ifsc` varchar(100) NOT NULL,
  `accno` varchar(100) NOT NULL,
  `bankbranch` varchar(50) NOT NULL,
  `selected` varchar(50) NOT NULL,
  PRIMARY KEY (`studid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_details`
--

INSERT INTO `registration_details` (`fullname`, `studid`, `rollno`, `dob`, `email`, `mobile`, `gender`, `category`, `yoa`, `semester`, `branch`, `batch`, `hosteller`, `address`, `hosteladd`, `entrancerank`, `entrancetry`, `backpaper`, `gpa`, `fathername`, `fatherage`, `fatherincome`, `mothername`, `motherage`, `motherincome`, `sibling1name`, `sibling1age`, `sibling1income`, `sibling2name`, `sibling2age`, `sibling2income`, `bankreceipt`, `otherscholarship`, `semfee`, `hostelfee`, `examfee`, `stationaryfee`, `otherfeedetails`, `otherfee`, `ifsc`, `accno`, `bankbranch`, `selected`) VALUES
('yy', '2019C4C99', 99, '0000-00-00', 'farhana.arehim@gmail', '8756536828', 'Others', 'SC/ST', 2019, 4, 'C', 'C', 'No', 'Aden , House No 31', '', 8, 1, '7', '6', 'hh', 77, 77, 'tt', 55, 77, 'vv', 55, 44, 'bb', 55, 66, 'no', 'no', 887, 55, 66, 55, 't', 44, '', '', '', 'notsel'),
('don hh', '2022C3B88', 88, '0000-00-00', 'farhana.arehim@gmail', '9973673568', 'Female', 'OBC', 2022, 3, 'C', 'B', 'Yes', 'Aden , House No 31', 'Musaliar Nagar', 8, 2, '7', '7', 'tt', 33, 33, 'hh', 88, 88, 'gg', 4, 55, 'gg', 44, 33, 'yes', 'no', 888, 44, 44, 655, 'hh', 77, '', '', '', 'notsel'),
('Mohasin', '2022C5B88', 88, '0000-00-00', 'farhana.arehim@gmail', '9446553322', 'Female', 'OBC', 2022, 5, 'C', 'B', 'No', 'dd', '', 3, 2, '3', '3', 'vv', 66, 44, 'cc', 36, 33, 'hh', 88, 77, 'gg', 66, 55, 'no', 'no', 434, 344, 23, 3341, 'u', 7, '', '', '', 'notsel'),
('Mohasin Haroon', '2022C7B88', 88, '0000-00-00', 'farhana.arehim@gmail', '9837526356', 'Male', 'Others', 2022, 7, 'C', 'B', 'No', 'Aden , House No 31', '', 8, 2, '23', '1', 'hh', 88, 666, 'vv', 55, 33, 'bb', 77, 99, 'yy', 55, 44, 'yes', 'no', 888, 444, 666, 555, 'null', 77, '', '', '', 'notsel'),
('Farhana', '2022CHEM2B44', 44, '0000-00-00', 'farhana.arehim@gmail', '9447508721', 'Female', 'OBC', 2022, 2, 'CHEM', 'B', 'No', 'Al Harmony,t square road , pac', '', 9, 2, '0', '9', 'hh', 88, 65, 'vv', 77, 99, 'hh', 77, 6, 'hh', 66, 66, 'yes', 'no', 99, 77, 88, 77, 'null', 0, '', '', '', 'notsel'),
('Farhana A', '2022CHEM3C2147', 2147, '0000-00-00', 'farhana.arehim@gmail', '8377335268', 'Male', 'SC/ST', 2022, 3, 'CHEM', 'C', 'Yes', '65sdbh', '8665fhjf', 9, 2, '5', '7', 'hh', 66, 44, 'hh', 44, 55, 'jjj', 555, 77, 'ff', 55, 66, 'yes', 'no', 88, 44, 55, 44, 'hgg', 77, '', '', '', 'notsel'),
('test', '2022CHEM4C22', 22, '0000-00-00', 'farhana.arehim@gmail', '9884753253', 'Female', 'General', 2022, 4, 'CHEM', 'C', 'Yes', 'nil', 'nil', 9, 1, '7', '8', 'tt', 44, 33, 'cdf', 55, 77, 'tt', 77, 77, 'ed', 66, 33, 'yes', 'no', 6000, 4566, 70000, 66888, 'th', 766, '', '', '', 'notsel'),
('new gg', '2022CHEM5B88', 88, '0000-00-00', 'farhana.arehim@gmail', '8373625261', 'Female', 'OBC', 2022, 5, 'CHEM', 'B', 'No', 'Aden , House No 31', '', 9, 3, '2', '4', 'vv', 66, 66, 'bb', 66, 44, 'ff', 44, 66, 'vf', 66, 66, 'no', 'yes', 88, 55, 66, 66, 'tt', 66, '', '', '', 'notsel'),
('Don', '2022CS2B45+6', 51, '0000-00-00', 'dongeevarghese44@gma', '15456456456', 'Male', 'General', 2022, 2, 'CS', 'B', 'Yes', 'gfddgfhj', 'xcvhdfh', 56, 1, '5', '5', 'fghdfh', 45, 5645, 'jkgfghj', 44, 454545, 'fhfjf', 54, 4254, 'djfjf', 45, 4545, 'yes', 'yes', 456, 156, 45, 56, '456', 456, '', '', '', ''),
('thestb hbdhv', '2022MCA2A22', 22, '0000-00-00', 'farhana.arehim@gmail', '8764538376', 'Female', 'OBC', 2022, 1, 'MCA', 'A', 'Yes', 'hgf', '877', 8, 2, '5', '7', 'tt', 55, 44, 'gg', 66, 88, 'vv', 54, 33, 'vv', 66, 77, 'yes', 'no', 763, 333, 566, 444, 'null', 66, '', '', '', ''),
('test', '2022MCA2A88', 88, '0000-00-00', 'farhana.arehim@gmail', '9447508721', 'Female', 'General', 2022, 1, 'MCA', 'A', 'No', 'Aden , House No 31', '', 3, 2, '55', '87', 'hh', 66, 44, 'cc', 45, 55, 'bs', 33, 6565, 'jh', 77, 77, 'no', 'no', 98787, 76577575, 676565, 677575, 'fvhh', 6654, '', '', '', ''),
('ajay', '2022MCA3A22', 22, '0000-00-00', 'farhana.arehim@gmail', '9876464181', 'Others', 'OBC', 2022, 1, 'MCA', 'A', 'No', 'jhgfv', 'nil', 9, 2, '1', '3', 'tt', 44, 33, 'gg', 66, 44, 'dd', 55, 33, 'dd', 55, 66, 'yes', 'yes', 77785, 443, 443, 654, 'bh', 65, '', '', '', 'selected'),
('test', '2022MCA3A77', 77, '0000-00-00', 'farhana.arehim@gmail', '9858763537', 'Male', 'OBC', 2022, 3, 'MCA', 'A', 'No', 'nn', 'nn', 9, 1, '8', '9', 'hh', 55, 33, 'cc', 44, 22, 'ff', 66, 55, 'cf', 33, 22, 'yes', 'yes', 9888, 6777, 5567, 4334, 'ff', 664, '', '', '', ''),
('tt', '2022MCA3A88', 88, '0000-00-00', 'farhana.arehim@gmail', '9447508721', 'Female', 'OBC', 2022, 3, 'MCA', 'A', 'Yes', 'uu', 'tt', 7, 1, '0', '9', 'tt', 88, 88, 'dd', 55, 55, 'gg', 66, 66, 'ff', 66, 66, 'yes', 'no', 888, 3445, 777, 65544, 'jbj', 6665, '', '', '', 'rejected'),
('Farhana', '2022MCA4A2147', 2147, '0000-00-00', 'farhana.arehim@gmail', '9447508721', 'Male', 'SC/ST', 2022, 1, 'MCA', 'A', 'Yes', 'test', 'nil', 3, 1, '2', '3', 'mnb', 87, 76, 'cvv', 65, 87, 'jhb', 44, 33, 'mhf', 77, 68, 'yes', 'no', 344, 76584, 876324, 845884, 'g', 34, '', '', '', ''),
('Mohasi', '2022MPLAN2A88', 88, '0000-00-00', 'farhana.arehim@gmail', '9887767777', 'Female', 'General', 2022, 2, 'MPLAN', 'A', 'No', 'Aden , House No 31', '', 8, 2, '9', '4', 'hh', 77, 55, 'dd', 44, 44, 'hh', 5, 3, 'g', 55, 33, 'no', 'no', 786, 55, 76, 77, 'hh', 77, '', '', '', 'selected'),
('afeef', '2022MPLAN3A203', 203, '0000-00-00', 'farhana.arehim@gmail', '9774532635', 'Male', 'General', 2022, 2, 'MPLAN', 'A', 'No', 'test', 'tkmce', 9, 1, '0', '7', 'test', 66, 6677, 'tr', 64, 6577, 'th', 19, 878, 'thg', 87, 55544, 'no', 'no', 8000, 8999, 7888, 6666, 'nil', 0, '', '', '', ''),
('ii', '2024MCA3A99', 99, '0000-00-00', 'farhana.arehim@gmail', '7473537292', 'Female', '', 2024, 3, 'MCA', 'A', 'No', 'hdhh', '', 3, 2, '887', '6', 'tt', 7, 65, 'ff', 44, 44, 'gg', 77, 77, 'null', 0, 0, 'yes', 'no', 665, 876, 765, 766, 'nsdd', 784, '', '', '', 'notsel');

-- --------------------------------------------------------

--
-- Table structure for table `to_admin`
--

DROP TABLE IF EXISTS `to_admin`;
CREATE TABLE IF NOT EXISTS `to_admin` (
  `studid` varchar(50) NOT NULL,
  `branch` text NOT NULL,
  PRIMARY KEY (`studid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `to_admin`
--

INSERT INTO `to_admin` (`studid`, `branch`) VALUES
('2022MCA2A88', 'MCA');

-- --------------------------------------------------------

--
-- Table structure for table `to_hod`
--

DROP TABLE IF EXISTS `to_hod`;
CREATE TABLE IF NOT EXISTS `to_hod` (
  `studid` varchar(50) NOT NULL,
  `branch` text NOT NULL,
  PRIMARY KEY (`studid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `to_hod`
--

INSERT INTO `to_hod` (`studid`, `branch`) VALUES
('2022MPLAN2A88', 'MPLAN'),
('2022MCA3A22', 'MCA');

-- --------------------------------------------------------

--
-- Table structure for table `to_scm`
--

DROP TABLE IF EXISTS `to_scm`;
CREATE TABLE IF NOT EXISTS `to_scm` (
  `studid` varchar(100) NOT NULL,
  `branch` text NOT NULL,
  PRIMARY KEY (`studid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `to_scm`
--

INSERT INTO `to_scm` (`studid`, `branch`) VALUES
('2022MCA2A88', 'MCA'),
('2022MCA3A22', 'MCA'),
('2022MCA4A2147', 'MCA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
