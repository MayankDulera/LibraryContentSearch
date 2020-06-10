-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2020 at 10:13 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(10) NOT NULL,
  `name` varchar(15) DEFAULT NULL,
  `date` date NOT NULL,
  `Author_ID` int(10) DEFAULT NULL,
  `Publication_ID` int(10) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `Content` text NOT NULL,
  `Page_no` varchar(4) NOT NULL,
  `M_ID` int(10) NOT NULL,
  `keywords` text NOT NULL,
  `Institute_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `name`, `date`, `Author_ID`, `Publication_ID`, `image`, `Content`, `Page_no`, `M_ID`, `keywords`, `Institute_id`) VALUES
(8, 'AIAdvantages of', '2020-05-05', 10, 7, '', 'Many tasks can now be  handled more cheaply and efficiently by the rapidly Advancing Technology of AI.\r\n', '1', 0, 'Bussiness,Sachin Dev Duggal', 1),
(9, 'AI-Empowered Wo', '2020-04-20', 10, 7, 'magazine_images\\DAtaquest2.jpg', 'Human research is one such critical area which is core to any business and has been going  through rounds  of revolution and transformation.\r\n', '11', 58, 'AI-Empowered Workforce,Bussiness', 1),
(10, 'Data Management', '2020-05-01', 16, 7, 'magazine_images\\OpenSource2.jpg', 'Billions of sensors interact with people, homes, cities, farms, factories, workplaces, vehicles, wearables and medical devices, and beyond. The Internet of Things (IoT) is changing our lives from managing home appliances to vehicles. Devices can now advise us about what to do, when to do and where to go. Industrial applications of the IoT assist us in managing processes, and predicting faults and disasters. The IoT platforms help set and maintain parameters to refine and store data accordingly.\r\n', '53', 59, 'Data Management System  for IoT  Devices	IoT', 1),
(11, 'Blackchain Prog', '2020-05-12', 15, 7, 'magazine_images\\OpenSource1.jpg', 'Billions of sensors interact with people, homes, cities, farms, factories, workplaces, vehicles, wearables and medical devices, and beyond. The Internet of Things (IoT) is changing our lives from managing home appliances to vehicles. Devices can now advise us about what to do, when to do and where to go. Industrial applications of the IoT assist us in managing processes, and predicting faults and disasters. The IoT platforms help set and maintain parameters to refine and store data accordingly.\r\n', '47', 59, 'Blackchain Programming,Blockchain', 1),
(12, 'Old cpu with ol', '2020-05-06', 19, 7, 'magazine_images\\MaximumPc1.jpg', 'For the gaming how many vram you need so it depends om the game some work with 1gb and some work with 2gb or 4 gb. If you run good game so get at least 6gb of vram.the mid range and high range gpu are all fine.\r\n', '55', 60, 'Old cpu with old features,Hardware', 1),
(13, 'Linux file syst', '2020-05-12', 20, 7, 'magazine_images\\Muximum2.jpg', 'Microsoft has introduced exFat filesystem. It is used in linux. The fat32 file system was before this is fat64 and size is 512 perabytes. For any case format the system this will used for storage if you have dual boot system you will easily share files between two os.\r\n', '15', 60, 'Linux file system,linux,Alex Campbell', 2),
(14, 'How e-governanc', '2020-05-05', 21, 7, 'magazine_images\\ExpresComputer2.jpg', 'Telangana is one of the leading states in India for implementing e-governance projects. There is a plethora of initiatives rolled out for citizen empowerment as well as the smooth running of the various government departments in the state\r\n', '54', 61, 'How e-governance projects are empowering citizens in Telangana,E-governance projects', 2),
(37, 'Myself', '2020-05-16', 22, 7, '', 'sfaf', '19', 58, 'nano , technology', 1);

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `Author_ID` int(10) NOT NULL,
  `Name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`Author_ID`, `Name`) VALUES
(9, 'Sachin Dev Duggal'),
(10, 'Mohua Sengupta'),
(11, 'Aman Singh'),
(12, 'Ranjan Kumar'),
(13, 'Veera Swamy Arava'),
(14, 'Jasmeet Bhatia'),
(15, 'Nitesh Soni'),
(16, 'Deepshikha Shukla'),
(17, 'Neetesh Mehrota'),
(18, 'Mohua Sengupta'),
(19, 'Jarred Walton'),
(20, 'Alex'),
(21, 'venkateshwar rao'),
(22, 'Rama Devi Lanka');

-- --------------------------------------------------------

--
-- Table structure for table `institute`
--

CREATE TABLE `institute` (
  `Institute_id` int(10) NOT NULL,
  `I_Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `institute`
--

INSERT INTO `institute` (`Institute_id`, `I_Name`) VALUES
(1, 'Institute of Technology'),
(2, 'Institute Of Management');

-- --------------------------------------------------------

--
-- Table structure for table `magazine`
--

CREATE TABLE `magazine` (
  `M_ID` int(10) NOT NULL,
  `M_Name` varchar(20) NOT NULL,
  `Publication_ID` int(10) NOT NULL,
  `Institute_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `magazine`
--

INSERT INTO `magazine` (`M_ID`, `M_Name`, `Publication_ID`, `Institute_id`) VALUES
(58, 'DataQuest', 7, 1),
(59, 'OpenSource', 7, 1),
(60, 'Maximum Pc ', 7, 2),
(61, 'Express computer', 7, 2),
(62, 'Express Computer', 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `Publication_ID` int(10) NOT NULL,
  `P_Name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`Publication_ID`, `P_Name`) VALUES
(7, 'A CyberMedia Publica');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(10) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `ContactNumber` int(10) NOT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Name`, `Email`, `ContactNumber`, `Password`) VALUES
(19, 'Rohan Pandya', 'Rohanpandya77@gmail.com', 2147483647, 'c916d142f0dc7f9389653a164f1d4e9d'),
(25, 'Ashish Bhatia', 'ashish123@gmail.com', 2147483647, '7945ff32978d89dc5ecdc23a44251700'),
(26, 'Vivek Soni', 'viveksoni123@gmail.com', 788899966, '8a09052c9601178c546f1ee513920cf2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `Author_ID` (`Author_ID`),
  ADD KEY `Author_ID_2` (`Author_ID`),
  ADD KEY `Publication_ID` (`Publication_ID`),
  ADD KEY `M_ID` (`M_ID`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`Author_ID`);

--
-- Indexes for table `institute`
--
ALTER TABLE `institute`
  ADD PRIMARY KEY (`Institute_id`);

--
-- Indexes for table `magazine`
--
ALTER TABLE `magazine`
  ADD PRIMARY KEY (`M_ID`);

--
-- Indexes for table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`Publication_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `Author_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `institute`
--
ALTER TABLE `institute`
  MODIFY `Institute_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `magazine`
--
ALTER TABLE `magazine`
  MODIFY `M_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `publication`
--
ALTER TABLE `publication`
  MODIFY `Publication_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`Publication_ID`) REFERENCES `publication` (`Publication_ID`),
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`Author_ID`) REFERENCES `author` (`Author_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
