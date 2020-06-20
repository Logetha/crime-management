-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 05:13 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_crime_reporting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userlevel` varchar(50) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `userlevel`) VALUES
(1, 'thano', 'thano', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Complaint_Description` varchar(200) NOT NULL,
  `Complaint_Date` date NOT NULL,
  `Approval` varchar(15) NOT NULL DEFAULT 'NotAccepted'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`Id`, `Name`, `Email`, `Complaint_Description`, `Complaint_Date`, `Approval`) VALUES
(15, 'siva', 'siva@gmail.com', 'whgdheg', '2020-01-02', 'NotAccepted'),
(12, 'Thanogik', 'rochdanistan123@gmail.com', 'gh', '2020-01-11', 'Accepted'),
(13, 'thano', 'thanogmail.com', 'great war', '0000-00-00', 'NotAccepted');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `feedback` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedback`) VALUES
(1, 'kamal', 'thanogika95@gmail.com', 'hjk'),
(2, 'kamal', 'thanogika95@gmail.com', 'hjk'),
(3, 'Thanogika', 'rochdanistan123@gmail.com', 'hjklk'),
(4, 'Thanogika', 'rochdanistan123@gmail.com', 'hjklk'),
(7, 'Thanogika', 'thanogika@gmail.com', 'good suuport'),
(8, 'Thanogika', 'rochdanistan123@gmail.com', 'nnmm'),
(9, 'Thanogika', 'rochdanistan123@gmail.com', 'bnmm,');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `id` int(11) NOT NULL,
  `crime` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`id`, `crime`, `phone`) VALUES
(1, 'kjlm', 89),
(2, 'kjlm', 89),
(3, 'suicide attempt', 787478334),
(4, 'suicide attempt', 753256748);

-- --------------------------------------------------------

--
-- Table structure for table `police_officers`
--

CREATE TABLE `police_officers` (
  `id` int(11) NOT NULL,
  `police_name` varchar(50) NOT NULL,
  `police_mobile` int(11) NOT NULL,
  `police_address` varchar(50) NOT NULL,
  `police_email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT 'p1234',
  `userlevel` varchar(10) NOT NULL DEFAULT 'police'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police_officers`
--

INSERT INTO `police_officers` (`id`, `police_name`, `police_mobile`, `police_address`, `police_email`, `username`, `password`, `userlevel`) VALUES
(11, 'thanologan', 55, 'vgvggff', 'thanogika95@gmail.com', 'Thanogika', 'p1234', 'police'),
(12, 'thanologan', 55, 'vgvggff', 'thanogika95@gmail.com', '', 'p1234', 'police'),
(13, 'thanologan', 55, 'vgvggff', 'thanogika95@gmail.com', 'fghjk', 'p1234', 'police'),
(15, 'thulasika', 76583465, 'jaffnaa', 'thulasi@gmail.com', 'thulasi', 'p1234', 'police'),
(16, 'thanologan', 21, 'vgvggff', 'thanogika95@gmail.com', 'Thanogika', 'p1234', 'police'),
(17, 'yu', 0, 'jkk', 'jjjk', 'jkk', 'p1234', 'police'),
(18, 'thanologan', 0, 'jk', 'hhj', 'hjj', 'p1234', 'police'),
(19, 'thanologan', 0, 'vgvggff', 'thanogika95@gmail.com', 'Zxscv', 'p1234', 'police'),
(20, 'hh', 0, 'hj', 'jj', 'nj', 'p1234', 'police'),
(21, 'jk', 0, 'ccv', 'dfghjkl', 'Zxscv', 'p1234', 'police'),
(22, 'hh', 0, 'jk', 'ghjkl;', 'fghjk', 'p1234', 'police'),
(23, 'hj', 0, 'vgvggff', 'dfghjkl', 'Zxscv', 'p1234', 'police'),
(24, 'thanologan', 0, 'nm', 'hj', 'hj', 'p1234', 'police'),
(25, 'thanologan', 50, 'vgvggff', 'ghjkl;', 'Zxscv', 'p1234', 'police'),
(26, 'thanologan', 55, 'vgvggff', 'ghjkl;', 'fghjk', 'p1234', 'police');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `useremail` varchar(50) NOT NULL,
  `usermobile` int(11) NOT NULL,
  `useraddress` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `userlevel` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `useremail`, `usermobile`, `useraddress`, `username`, `password`, `userlevel`) VALUES
(6, 'kamal', 'thanogika95@gmail.com', 87867454, 'badulla', 'qwerty', 'qwerty', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `police_officers`
--
ALTER TABLE `police_officers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `police_officers`
--
ALTER TABLE `police_officers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
