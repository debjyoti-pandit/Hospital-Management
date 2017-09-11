-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2017 at 07:31 PM
-- Server version: 5.6.23
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `type` varchar(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `name`, `type`, `description`, `date`, `status`) VALUES
(3, 'SBI', 'Credit Card', 'qwerty', '2017-07-16', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` text NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `address` varchar(100) NOT NULL,
  `doa` date DEFAULT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `blood_group` varchar(3) NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `firstname`, `lastname`, `sex`, `address`, `doa`, `dob`, `mobile`, `phone`, `blood_group`, `status`) VALUES
(6, 'admin@demo.com', '123', 'admin', 'demo', 'Male', 'Andal', NULL, '1996-09-10', '8436476635', '', 'A+', '');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `dfee` float NOT NULL,
  `bfee` float NOT NULL,
  `path` float NOT NULL,
  `medi` float NOT NULL,
  `hoscharge` float NOT NULL,
  `labtestfee` float NOT NULL,
  `doa` date NOT NULL,
  `status` varchar(8) NOT NULL,
  `total` float NOT NULL,
  `bedcost` int(11) NOT NULL,
  `paid` float NOT NULL,
  `due` float NOT NULL,
  `dod` date DEFAULT NULL,
  `description` varchar(200) NOT NULL,
  `doccost` float NOT NULL,
  `bedtype` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `email`, `dname`, `dfee`, `bfee`, `path`, `medi`, `hoscharge`, `labtestfee`, `doa`, `status`, `total`, `bedcost`, `paid`, `due`, `dod`, `description`, `doccost`, `bedtype`) VALUES
(7, 'asd@asd.asd', 'Dr.Xyx', 0, 12000, 0, 0, 0, 0, '2017-07-26', 'active', 12000, 2000, 0, 0, '2017-07-31', 'uiuiu', 0, '1stFloor-NonAc'),
(9, 'asd@asd.asd', 'Dr.Xyx', 0, 6000, 0, 0, 2000, 0, '2017-07-30', 'inactive', 8000, 3000, 8000, 0, '2017-07-20', '123', 0, '1stFloor-AC'),
(10, 'amaymishra11@gmail.com', 'Dr.ABC', 800, 8000, 0, 0, 2000, 0, '2017-07-31', 'inactive', 10800, 4000, 10800, 0, '2017-08-04', 'potty', 400, '2ndFloor-AC');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `pid` int(30) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `problem` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `pid`, `pname`, `dname`, `doctor`, `problem`, `date`) VALUES
(6, 71, 'dev', 'Orthopedics', 'Dr', 'Fracture', '2017-07-17'),
(7, 71, 'dev', 'General', 'Dr.Xyx', 'qweasd', '2017-07-17'),
(8, 71, 'dev', 'General', 'Dr.ABC', 'qwerry', '2017-07-19'),
(9, 71, 'dev', 'Gynaecology', 'zzz', 'qwerty', '2017-07-19'),
(10, 74, 'ravi', 'Microbilogy', 'Dr.ABC', 'asdf', '2017-07-18'),
(11, 75, 'fuck', 'Microbilogy', 'Dr.ABC', 'yuuyyuyu', '2017-07-15'),
(12, 76, 'Amay', 'Microbilogy', 'Dr.ABC', 'I am just being born', '0000-00-00'),
(22, 76, 'Amay', 'Neonatal', 'zzz', 'qqq', '2017-07-31'),
(23, 76, 'Amay', 'Neonatal', 'Dr.ABC', 'q', '2017-07-31'),
(24, 76, 'Amay', 'Neonatal', 'Dr.ABC', 'zzzz', '2017-07-31'),
(25, 76, 'Amay', 'Orthopedics', 'zzz', 'qqq', '2017-07-31'),
(26, 76, 'Amay', 'Neurology', 'Dr.ABC', 'qqq', '2017-07-26'),
(27, 76, 'Amay', 'Neurology', 'Dr.ABC', 'qqq', '2017-07-25'),
(28, 76, 'Amay', 'Microbilogy', 'Dr.ABC', 'a', '2017-07-31'),
(29, 76, 'Amay', 'Microbilogy', 'zzz', 'aa', '2017-07-31'),
(30, 76, 'Amay', 'General', 'Dr.ABC', 'dadad', '2017-08-01'),
(31, 76, 'Amay', 'General', 'Dr.ABC', 'adadad', '2017-08-01'),
(32, 76, 'Amay', 'General', '', '', '0000-00-00'),
(33, 75, 'fuck', 'General', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

CREATE TABLE `bed` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `charge` varchar(5) NOT NULL,
  `capacity` varchar(3) NOT NULL,
  `avail` int(11) NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bed`
--

INSERT INTO `bed` (`id`, `type`, `description`, `charge`, `capacity`, `avail`, `status`) VALUES
(3, '1stFloor-AC', '', '3000', '10', 6, 'active'),
(4, '1stFloor-NonAc', 'qwerty', '2000', '21', 21, 'active'),
(5, '2ndFloor-AC', 'qwert', '4000', '23', 23, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `birth`
--

CREATE TABLE `birth` (
  `id` int(11) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `tob` time NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `death`
--

CREATE TABLE `death` (
  `id` int(11) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `dod` date NOT NULL,
  `tob` time NOT NULL,
  `title` varchar(30) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `status` varchar(8) NOT NULL,
  `sex` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dname`, `description`, `status`) VALUES
(10, 'General', 'qwerty', 'active'),
(11, 'Gynaecology', 'qwerty', 'active'),
(12, 'Microbilogy', 'qwerty', 'active'),
(13, 'Neonatal', 'qwerty', 'active'),
(14, 'Orthopedics', 'qwerty', 'active'),
(15, 'Neurology', 'qwerty', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `sex` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `blood_group` varchar(3) NOT NULL,
  `address` int(100) DEFAULT NULL,
  `designation` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `specialist` varchar(30) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `doj` date NOT NULL,
  `fee` int(11) NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `email`, `mobile`, `phone`, `sex`, `dob`, `blood_group`, `address`, `designation`, `department`, `specialist`, `qualification`, `doj`, `fee`, `status`) VALUES
(2, 'Dr.Xyx', 'xyz@xyz.com', '1234567890', '', 'Male', '1979-06-19', 'O+', 0, 'Doctor', 'Neurology', 'Nerve', 'MBBS', '2017-07-01', 0, 'active'),
(3, 'Dr.ABC', 'abc@abc.com', '1234567890', '', 'Female', '2011-06-07', 'AB-', 0, 'Sub Doctor', 'Orthopedics', 'Bone', 'PhD', '2017-07-01', 400, 'active'),
(4, 'zzz', 'zzz@zzz.com', '1234567890', '', 'Male', '2017-07-10', 'AB+', 0, 'qq', 'Gynaecology', 'qqqq', 'qqqq', '2017-08-05', 500, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `blood_group` varchar(3) NOT NULL,
  `address` varchar(100) NOT NULL,
  `role` varchar(15) NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `lname`, `fname`, `email`, `sex`, `dob`, `mobile`, `blood_group`, `address`, `role`, `status`) VALUES
(2, 'qwerty', 'qwerty', 'aaaa@aa.com', 'Male', '2012-01-09', '1234567890', 'AB-', 'qwerty', 'Nurse', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `enquiry` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `sdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `mobile`, `enquiry`, `date`, `status`, `sdate`) VALUES
(3, 'Debjyoti Pandit', 'debjyotipandit35@gmail.com', '8435476635', 'qwerty', '2017-07-16', 'Completed', '2017-07-18'),
(4, 'dev', 'dev@123.com', '8436476635', 'iuiuiuiuiui', '2017-07-16', 'Completed', '2017-07-18'),
(5, 'Ravi Teja', 'ravi@gmail.com', '1234567890', 'qwerty', '2017-07-17', 'Completed', '2017-07-31'),
(6, 'wewewe', 'qwerty@aasasa.jhjh', 'klklk', 'lklkl', '2017-07-14', 'Pending', '0000-00-00'),
(7, 'fdd', 'uyuyuy@ffdfd.jhj', 'ddffd', 'dfdfdf', '0032-03-04', 'Pending', '0000-00-00'),
(9, 'Amay', 'amaymishra11@gmail.com', '9804428226', 'Library', '0000-00-00', 'Pending', '0000-00-00'),
(10, 'Amay', 'amaymishra11@gmail.com', '9804428226', 'jdisaskds\r\n', '2017-08-01', 'Completed', '2017-08-01'),
(13, 'Amay', 'amaymishra11@gmail.com', '9804428226', '123', '2017-08-01', 'Pending', '0000-00-00'),
(15, 'Amay', 'amaymishra11@gmail.com', '9804428226', '123456', '2017-08-01', 'Pending', '0000-00-00'),
(16, 'Amay', 'amaymishra11@gmail.com', '9804428226', '1234567', '2017-08-01', 'Pending', '0000-00-00'),
(17, 'Debjyoti', 'qwerty@jhjhjh.com', '111', '111', '2017-08-30', 'Pending', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `credit` float DEFAULT NULL,
  `debit` float DEFAULT NULL,
  `date` date NOT NULL,
  `reason` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `pid`, `credit`, `debit`, `date`, `reason`) VALUES
(22, 1, NULL, 2000, '2017-07-14', '1stFloor - Non Ac type bed purchased'),
(23, 1, 222, NULL, '2017-07-10', 'qwerty'),
(24, 71, 2000, NULL, '2017-07-15', 'Bed Assigned'),
(25, 0, NULL, 3000, '2017-07-15', '1stFloor-AC type bed purchased'),
(26, 0, NULL, 3000, '2017-07-16', '1stFloor-AC type bed purchased'),
(27, 0, NULL, 3000, '2017-07-16', '1stFloor-AC type bed purchased'),
(28, 71, 4000, NULL, '2017-07-14', 'Bed Assigned'),
(30, 73, 3000, NULL, '2017-07-18', 'Bed Assigned'),
(31, 0, 2000, NULL, '2017-07-16', 'Invoice-71'),
(34, 74, 560, NULL, '2017-07-17', 'Invoice'),
(35, 0, NULL, 3000, '2017-07-17', '1stFloor-AC type bed purchased'),
(36, 0, NULL, 3000, '2017-07-17', '1stFloor-AC type bed purchased'),
(37, 0, NULL, 2000, '2017-07-15', 'Maintainence of Hospital'),
(38, 71, 4000, NULL, '2017-07-31', 'Bed Assigned'),
(39, 71, 1234, NULL, '2017-07-31', 'Invoice'),
(40, 71, 1111, NULL, '2017-07-31', 'Invoice'),
(41, 71, 8888, NULL, '2017-08-02', 'Invoice'),
(42, 71, 3000, NULL, '2017-07-31', 'Bed Assigned'),
(43, 71, 400, NULL, '0000-00-00', 'Invoice'),
(44, 71, 1500, NULL, '2017-07-31', 'Invoice'),
(45, 71, 0, NULL, '2017-07-31', 'Invoice'),
(46, 0, NULL, 3000, '2017-07-31', '1stFloor-AC type bed purchased'),
(47, 0, NULL, 4000, '2017-07-31', '2ndFloor-AC type bed purchased'),
(48, 0, NULL, 9000, '2017-07-18', 'Equipments'),
(49, 71, 3500, NULL, '2017-08-01', 'Invoice'),
(50, 75, 3000, NULL, '2017-07-31', 'Bed Assigned'),
(51, 75, 5000, NULL, '2017-07-31', 'Invoice'),
(52, 75, 200, NULL, '2017-08-01', 'Invoice'),
(53, 75, 600, NULL, '2017-08-01', 'Invoice'),
(54, 75, 2200, NULL, '2017-08-02', 'Invoice'),
(57, 76, 2000, NULL, '2017-08-01', 'Invoice'),
(59, 76, 11000, NULL, '2017-08-01', 'Invoice');

-- --------------------------------------------------------

--
-- Table structure for table `operation`
--

CREATE TABLE `operation` (
  `id` int(11) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `doo` date NOT NULL,
  `title` varchar(30) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paid`
--

CREATE TABLE `paid` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paid`
--

INSERT INTO `paid` (`id`, `pid`, `aid`, `paid`, `date`) VALUES
(1, 71, 4, 300, '0000-00-00'),
(2, 71, 2, 1234, '0000-00-00'),
(3, 71, 1, 111, '2017-07-18'),
(4, 71, 2, 1111, '2017-07-31'),
(5, 71, 2, 8888, '2017-08-02'),
(6, 71, 5, 400, '0000-00-00'),
(7, 71, 5, 1500, '2017-07-31'),
(8, 71, 5, 0, '2017-07-31'),
(9, 71, 5, 3500, '2017-08-01'),
(10, 75, 9, 5000, '2017-07-31'),
(11, 75, 9, 200, '2017-08-01'),
(12, 75, 9, 600, '2017-08-01'),
(13, 75, 9, 2200, '2017-08-02'),
(14, 76, 11, 2000, '2017-08-01'),
(15, 76, 10, -200, '2017-07-31'),
(16, 76, 10, 11000, '2017-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` text NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` date DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `blood_group` varchar(3) NOT NULL,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `email`, `password`, `firstname`, `lastname`, `sex`, `address`, `dob`, `mobile`, `phone`, `blood_group`, `status`) VALUES
(71, 'dev@123.com', '123', 'dev', 'jyoti', '', 'qwerty', '1996-09-10', '8436476635', '', 'A+', NULL),
(72, 'qwerty@dgjsdj.com', '', 'p', 'q', 'Male', 'popopopopop', NULL, '1234567890', NULL, 'A-', 'Admitted'),
(73, 'niketraj712@gmail.com', '', 'niket', 'raj', 'Male', 'patna', NULL, '8972102592', NULL, 'B+', 'Admitted'),
(74, 'ravi@asdf.vbnm.io', '1234', 'ravi', 'teja', 'Male', 'qwerty', '2004-06-01', '1234567890', '1234567890', 'A-', NULL),
(75, 'asd@asd.asd', '', 'fuck', 'knkn', 'Male', 'qq', NULL, 'q', NULL, 'A-', NULL),
(76, 'amaymishra11@gmail.com', '123456', 'Amay', 'Mishra', 'Male', 'Hadia', '0000-00-00', '9804428226', '0332549380', 'B+', NULL),
(77, 'admin@demo.com', '123', '', '', '', '', '0000-00-00', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(100) NOT NULL,
  `payto` varchar(10) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `date`, `description`, `payto`, `amount`, `status`) VALUES
(6, 'Salary', '2017-07-11', 'qwert', 'abc', '30000', 'Paid'),
(7, 'Maintainence of Hospital', '2017-07-15', 'qwerty', 'qwerty', '2000', 'Paid'),
(8, 'Equipments', '2017-07-18', 'lk', 'iuu', '9000', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `adays` varchar(9) NOT NULL,
  `stime` time NOT NULL,
  `etime` time NOT NULL,
  `pptime` time NOT NULL,
  `serial` varchar(15) NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `dname`, `adays`, `stime`, `etime`, `pptime`, `serial`, `status`) VALUES
(5, 'Dr', 'Monday', '00:00:00', '14:30:00', '00:00:10', 'Sequential', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` text NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`) VALUES
(116, 'dev@123.com', '123', 'Patient'),
(117, 'admin@demo.com', '123', 'Admin'),
(118, 'zzz@zzz.com', '123', 'Doctor'),
(119, 'niketraj712@gmail.com', 'niket712', 'Patient'),
(120, 'nick&12@gmail.com', '123', 'Doctor'),
(121, 'nick712@gmail.com', '1234', 'Doctor'),
(122, 'ravi@asdf.vbnm.io', '1234', 'Patient'),
(123, 'asd@asd.asd', '123', 'Patient'),
(124, 'qqq@qqq.qqq', '123', 'Receptionists'),
(125, 'amaymishra11@gmail.com', '123456', 'Patient');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bed`
--
ALTER TABLE `bed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `birth`
--
ALTER TABLE `birth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `death`
--
ALTER TABLE `death`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dname` (`dname`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operation`
--
ALTER TABLE `operation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paid`
--
ALTER TABLE `paid`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pid` (`pid`),
  ADD KEY `aid` (`aid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `bed`
--
ALTER TABLE `bed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `birth`
--
ALTER TABLE `birth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `death`
--
ALTER TABLE `death`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `operation`
--
ALTER TABLE `operation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `paid`
--
ALTER TABLE `paid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `paid`
--
ALTER TABLE `paid`
  ADD CONSTRAINT `paid_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `patient` (`id`),
  ADD CONSTRAINT `paid_ibfk_2` FOREIGN KEY (`aid`) REFERENCES `admission` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
