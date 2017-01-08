-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 08, 2017 at 04:37 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `morsql`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(50) NOT NULL,
  `loginid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contactno` int(12) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `courses` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `picname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `loginid`, `password`, `contactno`, `emailid`, `gender`, `courses`, `district`, `picname`) VALUES
('ed', '1', 'c4ca4238a0b923820dcc509a6f75849b', 1234567890, 'qw@gmail.com', 'female', '.net', 'Khorda', 'Screenshot from 2016-09-25 19:33:51.png'),
('asd', 'asd', '7815696ecbf1c96e6894b779456d330e', 0, 'asd', 'female', '.net', 'Angul', 'Screenshot from 2016-09-25 19:33:51.png'),
('q', 'q', '7694f4a66316e53c8cdd9d9954bd611d', 0, '', 'male', 'java', 'Khorda', 'mysql.png'),
('qwerty', 'qwerty', 'd8578edf8458ce06fbc5bb76a58c5ca4', 1234567890, 'qw@gmail.com', 'female', 'android', 'Angul', 'git.png'),
('RITESH', 'ritesh', 'f4a13757ff626da555b27c9c1f82a01b', 1234567890, 'qw@gmail.com', 'male', 'php,android', 'Puri', 'git.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`loginid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
