-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 04:25 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kabaddi`
--

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `venue`()
    NO SQL
select * from venue$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--
-- --------------------------------------------------------


INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uname` varchar(40) NOT NULL,
  `psw` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uname`, `psw`) VALUES
('user', '123');

-- --------------------------------------------------------


--
-- Table structure for table `team_owners`
--

CREATE TABLE `team_owners`(
  `owner` varchar(40) NOT NULL,
  `team` varchar(40) NOT NULL,
  `D_O_A` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_owners`
--

INSERT INTO `team_owners` (`owner`, `team`, `D_O_A`) VALUES
('Rajesh V.Shah', 'Patna Pirates', '2014-10-21'),
('Kishore Biyani', 'Bengal Warriors', '2015-04-12'),
('Kosmik Global Media', 'Bengaluru Bulls', '2017-06-22'),
('Radha Kapoor', 'Dabang Delhi KC', '2018-05-17'),
('Gautam Adani', 'Gujarat Fortune Giants', '2016-07-23'),
('Parth Jindal', 'Haryana Steelers', '2014-11-03'),
('Abhishek Bachchan', 'Jaipur Pink Panthers', '2015-03-10'),
('Suresh Kotak', 'Puneri Paltan', '2015-02-15'),
('Nimmagadda Prasad', 'Tamil Thalaivas', '2017-01-30'),
('Srinivas Sreeramaneni', 'Telugu Titans', '2018-09-12'),
('Ronnie Screwvala', 'U Mumba', '2019-04-05'),
('Kiran Kumar Grandhi', 'UP Yoddha', '2016-06-25');

-- --------------------------------------------------------


--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `player_id` decimal(4,0) NOT NULL,
  `playername` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `no_of_matches` decimal(3,0) NOT NULL,
  `player_type` varchar(20) NOT NULL,
  `raid_points` decimal(5,0) NOT NULL,
  `tackle_points` decimal(3,0) NOT NULL,
  `highest_raid_points` varchar(10) NOT NULL,
  `highest_tackle_points` varchar(10) NOT NULL,
  `team_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`player_id`, `playername`, `dob`, `no_of_matches`, `player_type`,`raid_points`,`tackle_points`,`highest_raid_points`, `highest_tackle_points`, `team_name`) VALUES
('1001', 'Pradeep Narwal', '1990-05-10', '131', 'Raider', '1348', '15', '31', '02', 'UP Yoddha'),
('1002', 'Maninder Singh', '1993-10-17', '101', 'Raider', '993', '27', '23', '03', 'Bengal Warriors'),
('1003', 'Pawan Kumar Sehrawat', '1995-11-25', '104', 'Raider', '986', '45', '34', '04', 'Bengaluru Bulls'),
('1004', 'Deepak Niwas Hodda', '1990-07-11', '140', 'Allrounder', '973', '173', '19', '06', 'Jaipur Pink Panthers'),
('1005', 'Rahul Chaudhari', '1990-03-07', '129', 'Raider', '968', '45','23', '04', 'Puneri Paltan'),
('1006', 'Ajay Thakur', '1987-02-05', '120', 'Raider', '794', '56', '17', '03', 'Dabang Delhi KC'),
('1007', 'Rohit Kumar', '1992-09-29', '99', 'Raider', '682', '78', '32', '05', 'Telugu Titans'),
('1008', 'Naveen Kumar', '1998-12-23', '62', 'Raider', '673', '17','31', '02', 'Dabang Delhi KC'),
('1009', 'Rishank Devadiga', '1993-05-19', '122', 'Raider', '625', '64','27', '03', 'Bengal Warriors'),
('1010', 'Sachin Tanwar', '1996-02-14', '86', 'Raider', '605', '50', '19', '03', 'Patna Pirates'),
('1011', 'Manjeet Chillar', '1982-02-12', '111', 'Defender', '350', '326', '11', '09', 'Dabang Delhi KC'),
('1012', 'Ravinder Pahal', '1990-08-13', '115', 'Defender', '43', '312', '03', '08', 'Gujarat Fortune Giants'),
('1013', 'Sandeep Narwal', '1993-07-13', '128', 'Allrounder', '311', '288',  '12', '07', 'Dabang Delhi KC'),
('1014', 'Fazel Attrachali', '1991-03-20', '106', 'Defender', '37', '298', '03', '10', 'U Mumba'),
('1015', 'Surjeet Narwal', '1991-01-04', '97', 'Defender', '43', '270', '04', '11', 'Tamil Thalaivas'),
('1016', 'Dharamraj Cherlathan', '1980-02-21', '119', 'Allrounder', '143', '235', '08', '06', 'Jaipur Pink Panthers'),
('1017', 'Surendra Nada', '1993-08-17', '98', 'Defender', '34', '267', '02', '09', 'Haryana Steelers'),
('1018', 'Girish Maruti Ernak', '1997-04-11', '109', 'Defender', '18',  '254','02', '10', 'Gujarat Fortune Giants'),
('1019', 'Meraj Sheykh', '1995-12-11', '87', 'Allrounder', '311', '154', '12', '06', 'Haryana Steelers'),
('1020', 'Rajesh Narwal', '1996-02-12', '103', 'Allrounder', '285', '120', '13', '06', 'Tamil Thalaivas'),
('1021', 'Monu Goyat', '1992-06-19', '73', 'Raider', '475', '15', '20', '01', 'Patna Pirates'),
('1022', 'Jang Kun Lee', '1990-03-23', '106', 'Raider', '471', '10', '21', '01', 'Haryana Steelers'),
('1023', 'Siddharth Sirish Desai', '1995-04-04', '43', 'Raider', '471', '30', '29', '02', 'Telugu Titans'),
('1024', 'Sukesh Hedge', '1994-07-12', '100', 'Raider', '413', '40', '16', '03', 'U Mumba'),
('1025', 'Vishal Bharadhwaj', '1996-01-07', '72', 'Defender', '26', '204', '03', '08', 'Tamil Thalaivas'),
('1026', 'Rohit Gulia', '1996-07-27', '56', 'Allrounder', '176', '79','09', '05', 'Haryana Steelers'),
('1027', 'Mohit Chillar', '1992-08-02', '96', 'Defender', '24', '265', '02', '08', 'UP Yoddha'),
('1028', 'Mohammad Nabibaksh', '1994-01-29', '70', 'Allrounder', '61', '189', '14', '06', 'Bengaluru Bulls'),
('1029', 'Jaideep Kumar', '1995-10-11', '73', 'Defender', '16', '199','01', '12', 'UP Yoddha'),
('1030', 'Jeeva Kumar', '1989-02-23', '110', 'Defender', '36', '235',  '04', '07', 'Bengaluru Bulls');



--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `match_number` decimal(3,0) NOT NULL,
  `date` date NOT NULL,
  `team_1` varchar(40) NOT NULL,
  `team_2` varchar(40) NOT NULL,
  `venue`  varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`match_number`, `date`, `team_1`, `team_2`, `venue`) VALUES
('1', '2022-1-20', 'Bengaluru Bulls', 'Bengal Warriors', 'Netaji Indoor Stadium'),
('2', '2022-1-21', 'Gujarat Fortune Giants', 'Haryana Steelers', 'Thyagraj Sports Complex'),
('3', '2022-1-22', 'Bengal Warriors', 'UP Yoddha', 'Babu Banarasi Das Stadium'),
('4', '2022-1-23', 'Patna Pirates', 'Puneri Paltan', 'Patliputra Sports Complex'),
('5', '2022-1-24', 'U Mumba', 'Telugu Titans', 'Dome NSCI SVP Stadium'),
('6', '2022-1-25', 'Jaipur Pink Panthers', 'Tamil Thalaivas', 'Sawai Mansingh Indoor Stadium'),
('7', '2022-1-26', 'UP Yoddha', 'Haryana Steelers', 'Motilal Nehru School of Sports'),
('8', '2022-1-27', 'Telugu Titans', 'Bengaluru Bulls', 'Kanteerava Indoor Stadium'),
('9', '2022-1-28', 'Bengal warriors', 'Jaipur Pink Panthers', 'Netaji Indoor Stadium'),
('10', '2022-1-29', 'Puneri Paltan', 'Dabang Delhi KC', 'Shree Shiv Chhatrapati Sports Complex'),
('11', '2022-1-30', 'Haryana Steelers', 'Gujarat Fortune Giants', 'EKA Arena'),
('12', '2022-1-31', 'Telugu Titans', 'Patna Pirates', 'Gachibowli Indoor Stadium'),
('13', '2022-2-01', 'Tamil Thalaivas', 'U Mumba', 'Jawarlal Nehru Stadium'),
('14', '2022-2-02', 'Bengaluru Bulls', 'Dabang Delhi KC', 'Thyagraj Sports Complex'),
('15', '2022-2-03', 'UP Yoddha', 'Jaipur Pink Panthers', 'Babu Banarasi Das Indoor Stadium'),
('16', '2022-2-04', 'Gujarat Fortune Giants', 'Tamil Thalaivas', 'EKA Arean'),
('17', '2022-2-05', 'Patna Pirates', 'Tamil Thalaivas', 'Jawarlal Nehru Stadium'),
('18', '2022-2-06', 'Puneri Paltan', 'Bengal Warriors', 'Shree Shiv Chhatrapati Sports Complex'),
('19', '2022-2-07', 'U Mumba', 'Haryana Steelers', 'Dome NSCI SVP Stadium'),
('20', '2022-2-08', 'Telugu Titans', 'UP Yoddha', 'Gachibowli Indoor Stadium'),
('21', '2022-2-09', 'Dabang Delhi KC', 'Gujarat Fortune Giants', 'Thyagraj Sports Complex'),
('22', '2022-2-10', 'Jaipur Pink Panthers', 'Patna Pirates', 'Sawai Mansingh Indoor Stadium'),
('23', '2022-2-11', 'Bengaluru Bulls', 'Telugu Titans', 'Kanteerava Indoor Stadium'),
('24', '2022-2-12', 'Haryana Steelers', 'Puneri Paltan', 'Motilal Nehru School of Sports'),
('25', '2022-2-13', 'U Mumba', 'Dabang Delhi KC', 'Dome NSCI SVP Stadium'),
('26', '2022-2-14', 'Bengal Warriors', 'Gujarat Fortune Giants', 'Netaji Indoor Stadium'),
('27', '2022-2-15', 'Tamil Thalaivas', 'Bengaluru Bulls', 'Jawarlal Nehru Stadium'),
('28', '2022-2-16', 'UP Yoddha', 'Patna Pirates', 'Patliputra Sports Complex'),
('29', '2022-2-17', 'Puneri Paltan', 'U Mumba', 'Shree Shiv Chhatrapati Sports Complex'),
('30', '2022-2-18', 'Dabang Delhi KC', 'Jaipur Pink Panthers', 'Sawai Mansingh Indoor Stadium');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `venue_name` varchar(50) NOT NULL,
  `capacity` decimal(6,0) NOT NULL,
  `DOI` date NOT NULL,
  `city` varchar(40) NOT NULL,
  `home_team` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`venue_name`, `capacity`, `DOI`, `city`, `home_team`) VALUES
('Netaji Indoor Stadium', '12000', '2010-05-11', 'Kolkata', 'Bengal Warriors'),
('Sawai Mansingh Indoor Stadium', '4000', '2014-09-21', 'Jaipur', 'Jaipur Pink Panthers'),
('Motilal Nehru School of Sports', '5000', '2015-01-05', 'Sonepat', 'Haryana Steelers'),
('Kanteerava Indoor Stadium', '4000', '2013-11-29', 'Bengaluru', 'Bengaluru Bulls'),
('EKA Arena', '4500', '2015-03-17', 'Ahmedabad', 'Gujarat Fortune Giants'),
('Shree Shiv Chhatrapati Sports Complex', '4400', '2014-09-10', 'Pune', 'Puneri Paltan'),
('Thyagraj Sports Complex', '4410', '2016-10-13', 'New Delhi', 'Dabang Delhi KC'),
('Jawaharlal Nehru Stadium', '6000', '2014-04-15', 'Chennai', 'Tamil Thalaivas'),
('Gachibowli Indoor Stadium', '5500', '2016-02-22', 'Hyderabad', 'Telugu Titans'),
('Dome NSCI SVP Stadium', '5400', '2012-08-30', 'Mumbai', 'U Mumba'),
('Babu Banarasi Das Indoor Stadium', '6000', '2011-09-15', 'Lucknow', 'UP Yoddha'),
('Patliputra Sports Complex', '20000', '2016-12-27', 'Patna', 'Patna Pirates');



-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_name` varchar(30) NOT NULL,
  `owner_name` varchar(30) NOT NULL,
  `captain_id` varchar(30) NOT NULL,
  `coach_name` varchar(30) NOT NULL,
  `no_of_matches` varchar(30) NOT NULL,
  `no_of_matches_won` varchar(30) NOT NULL,
  `no_of_titles_won` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_name`, `owner_name`, `captain_id`, `coach_name`,`no_of_matches`, `no_of_matches_won`, `no_of_titles_won`) VALUES
('Jaipur Pink Panthers', 'Abhishek Bachchan', '1004', 'Sanjeev Baliyan', '148', '64', '1'),
('Patna Pirates', 'Rajesh V.Shah', '1021', 'Ram Mehar Singh', '158', '87', '3'),
('UP Yoddha', 'Kiran Kumar Grandhi', '1001', 'Jasveer Singh', '95', '42', '0'),
('U Mumba', 'Ronnie Screwvala', '1014', 'Rajguru Subramanian', '153', '88', '1'),
('Telugu Titans', 'Srinivas Sreeramaneni', '1023', 'Jagadeesh Kumble', '148', '52', '0'),
('Bengal Warriors', 'Kishore Biyani', '1002', 'BC Ramesh', '151', '68', '1'),
('Haryana Steelers', 'Parth Jindal', '1017', 'Rakesh Kumar', '90', '42', '0'),
('Tamil Thalaivas', 'Nimmagadda Prasad', '1015', 'J Uday Kumar', '88', '20', '0'),
('Gujarat Fortuen Giants', 'Gautam Adani', '1012', 'Manpreet Singh', '94', '51', '0'),
('Bengaluru Bulls', 'Kosmik Global Media', '1003', 'Randhir Singh Sehrawat', '154', '72', '1'),
('Puneri Paltan', 'Suresh Kotak', '1005', 'Anup Kumar', '151', '62', '0'),
('Dabang Delhi KC', 'Radha Kapoor', '1008', 'Krishan Kumar Hooda', '150', '61', '1'),
('Raichur Rockerz', 'Radha Kapoor', '1008', 'Krishan Kumar Hooda', '150', '61', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uname`);


--
-- Indexes for table `team_owners`
--
ALTER TABLE `team_owners`
  ADD PRIMARY KEY (`owner`,`team`),
  ADD KEY `owner` (`owner`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`player_id`),
  ADD KEY `team_name` (`team_name`);
--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`match_number`),
  ADD KEY `venue` (`venue`);
--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`venue_name`,`city`),
  ADD KEY `home_team`(`home_team`);
--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_name`),
  ADD KEY `captain_id` (`captain_id`);

--
-- Constraints for dumped tables
--


--
-- Constraints for table `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player_ibfk_1` FOREIGN KEY (`team_name`) REFERENCES `team` (`team_name`) ON DELETE CASCADE;


--
-- Constraints for table `venue`
--
ALTER TABLE `venue`
  ADD CONSTRAINT `venue_ibfk_1` FOREIGN KEY (`home_team`) REFERENCES `team` (`team_name`) ON DELETE CASCADE;

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_ibfk_1` FOREIGN KEY (`venue`) REFERENCES `venue` (`venue_name`) ON DELETE CASCADE;

--
-- Constraints for table `team_owners`
--
ALTER TABLE `team_owners`
  ADD CONSTRAINT `team_owners_ibfk_1` FOREIGN KEY (`owner`) REFERENCES `team` (`owner_name`) ON DELETE CASCADE;

--
-- Constraints for table `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `team_ibfk_1` FOREIGN KEY (`captain_name`) REFERENCES `player` (`playername`) ON DELETE CASCADE;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;





