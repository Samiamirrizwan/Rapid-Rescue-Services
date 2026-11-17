-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2024 at 12:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rapid rescue final`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `docSpecialization` varchar(255) DEFAULT NULL,
  `docId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `consultancyFees` int(11) DEFAULT NULL,
  `description` text NOT NULL,
  `appointmentDate` varchar(255) DEFAULT NULL,
  `appointmentTime` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `userStatus` int(11) DEFAULT NULL,
  `docStatus` int(11) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `contact` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `appointment`
--


-- --------------------------------------------------------

--
-- Table structure for table `docspecilization`
--

CREATE TABLE `docspecilization` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `docspecilization`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--


-- --------------------------------------------------------

--
-- Table structure for table `tblambulance`
--

CREATE TABLE `tblambulance` (
  `ID` int(11) NOT NULL,
  `AmbulanceType` varchar(250) DEFAULT NULL,
  `AmbRegNum` varchar(250) DEFAULT NULL,
  `DriverName` varchar(250) DEFAULT NULL,
  `DriverContactNumber` bigint(20) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `Status` varchar(250) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblambulance`
--


-- --------------------------------------------------------

--
-- Table structure for table `tblambulancedriver`
--

CREATE TABLE `tblambulancedriver` (
  `ID` int(11) NOT NULL,
  `AmbulanceType` varchar(250) DEFAULT NULL,
  `AmbRegNum` varchar(250) DEFAULT NULL,
  `DriverName` varchar(250) DEFAULT NULL,
  `DriverContactNumber` bigint(20) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `Status` varchar(250) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblambulancedriver`
--


-- --------------------------------------------------------

--
-- Table structure for table `tblambulancehiring`
--

CREATE TABLE `tblambulancehiring` (
  `ID` int(11) NOT NULL,
  `BookingNumber` int(10) DEFAULT NULL,
  `PatientName` varchar(250) DEFAULT NULL,
  `RelativeName` varchar(250) DEFAULT NULL,
  `RelativeConNum` bigint(11) DEFAULT NULL,
  `HiringDate` varchar(250) DEFAULT NULL,
  `HiringTime` varchar(250) DEFAULT NULL,
  `AmbulanceType` int(5) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `City` mediumtext DEFAULT NULL,
  `State` mediumtext DEFAULT NULL,
  `Message` longtext DEFAULT NULL,
  `BookingDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(250) DEFAULT NULL,
  `Status` varchar(250) DEFAULT NULL,
  `AmbulanceRegNo` varchar(250) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblambulancehiring`
--


-- --------------------------------------------------------

--
-- Table structure for table `tblambulancehiringdriver`
--

CREATE TABLE `tblambulancehiringdriver` (
  `ID` int(11) NOT NULL,
  `BookingNumber` int(10) DEFAULT NULL,
  `PatientName` varchar(250) DEFAULT NULL,
  `RelativeName` varchar(250) DEFAULT NULL,
  `RelativeConNum` bigint(11) DEFAULT NULL,
  `HiringDate` varchar(250) DEFAULT NULL,
  `HiringTime` varchar(250) DEFAULT NULL,
  `AmbulanceType` int(5) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `City` mediumtext DEFAULT NULL,
  `State` mediumtext DEFAULT NULL,
  `Message` longtext DEFAULT NULL,
  `BookingDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(250) DEFAULT NULL,
  `Status` varchar(250) DEFAULT NULL,
  `AmbulanceRegNo` varchar(250) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblambulancehiringdriver`
--


-- --------------------------------------------------------

--
-- Table structure for table `tblambulancehiringuser`
--

CREATE TABLE `tblambulancehiringuser` (
  `ID` int(11) NOT NULL,
  `BookingNumber` int(10) DEFAULT NULL,
  `PatientName` varchar(250) DEFAULT NULL,
  `RelativeName` varchar(250) DEFAULT NULL,
  `RelativeConNum` bigint(11) DEFAULT NULL,
  `HiringDate` varchar(250) DEFAULT NULL,
  `HiringTime` varchar(250) DEFAULT NULL,
  `AmbulanceType` int(5) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `City` mediumtext DEFAULT NULL,
  `State` mediumtext DEFAULT NULL,
  `Message` longtext DEFAULT NULL,
  `BookingDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(250) DEFAULT NULL,
  `Status` varchar(250) DEFAULT NULL,
  `AmbulanceRegNo` varchar(250) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblambulancehiringuser`
--


-- --------------------------------------------------------

--
-- Table structure for table `tblambulanceuser`
--

CREATE TABLE `tblambulanceuser` (
  `ID` int(11) NOT NULL,
  `AmbulanceType` varchar(250) DEFAULT NULL,
  `AmbRegNum` varchar(250) DEFAULT NULL,
  `DriverName` varchar(250) DEFAULT NULL,
  `DriverContactNumber` bigint(20) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `Status` varchar(250) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblambulanceuser`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbldriver`
--

CREATE TABLE `tbldriver` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbldriver`
--


-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` varchar(200) DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblpage`
--

(2, 'contactus', 'Contact Us', '3rd Floor, Rimm Jhim Shopping Center, Suit No 308, A-486 Allama Shabbir Ahmed Usmani Rd, Block 6 Gulshan-e-Iqbal, Karachi, Karachi City, Sindh', 'mail@RRS.com', 927894561236, '2024-09-19 08:48:44');

-- --------------------------------------------------------

--
-- Table structure for table `tblpagedriver`
--

CREATE TABLE `tblpagedriver` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` varchar(200) DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblpagedriver`
--

(2, 'contactus', 'Contact Us', '3rd Floor, Rimm Jhim Shopping Center, Suit No 308, A-486 Allama Shabbir Ahmed Usmani Rd, Block 6 Gulshan-e-Iqbal, Karachi, Karachi City, Sindh', 'mail@RRS.com', 927894561236, '2024-09-19 08:48:44');

-- --------------------------------------------------------

--
-- Table structure for table `tblpageuser`
--

CREATE TABLE `tblpageuser` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` varchar(200) DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblpageuser`
--

(2, 'contactus', 'Contact Us', '3rd Floor, Rimm Jhim Shopping Center, Suit No 308, A-486 Allama Shabbir Ahmed Usmani Rd, Block 6 Gulshan-e-Iqbal, Karachi, Karachi City, Sindh', 'mail@RRS.com', 927894561236, '2024-09-19 08:48:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbltrackinghistory`
--

CREATE TABLE `tbltrackinghistory` (
  `ID` int(10) NOT NULL,
  `BookingNumber` int(10) DEFAULT NULL,
  `AmbulanceRegNum` varchar(250) DEFAULT NULL,
  `Remark` varchar(250) DEFAULT NULL,
  `Status` varchar(250) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbltrackinghistory`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbltrackinghistorydriver`
--

CREATE TABLE `tbltrackinghistorydriver` (
  `ID` int(10) NOT NULL,
  `BookingNumber` int(10) DEFAULT NULL,
  `AmbulanceRegNum` varchar(250) DEFAULT NULL,
  `Remark` varchar(250) DEFAULT NULL,
  `Status` varchar(250) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbltrackinghistorydriver`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbltrackinghistoryuser`
--

CREATE TABLE `tbltrackinghistoryuser` (
  `ID` int(10) NOT NULL,
  `BookingNumber` int(10) DEFAULT NULL,
  `AmbulanceRegNum` varchar(250) DEFAULT NULL,
  `Remark` varchar(250) DEFAULT NULL,
  `Status` varchar(250) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbltrackinghistoryuser`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `RealName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `UserRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbluser`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `contact` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docspecilization`
--
ALTER TABLE `docspecilization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblambulance`
--
ALTER TABLE `tblambulance`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `AmbRegNum` (`AmbRegNum`);

--
-- Indexes for table `tblambulancedriver`
--
ALTER TABLE `tblambulancedriver`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `AmbRegNum` (`AmbRegNum`);

--
-- Indexes for table `tblambulancehiring`
--
ALTER TABLE `tblambulancehiring`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ablunaceid` (`AmbulanceRegNo`),
  ADD KEY `BookingNumber` (`BookingNumber`);

--
-- Indexes for table `tblambulancehiringdriver`
--
ALTER TABLE `tblambulancehiringdriver`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ablunaceid` (`AmbulanceRegNo`),
  ADD KEY `BookingNumber` (`BookingNumber`);

--
-- Indexes for table `tblambulancehiringuser`
--
ALTER TABLE `tblambulancehiringuser`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ablunaceid` (`AmbulanceRegNo`),
  ADD KEY `BookingNumber` (`BookingNumber`);

--
-- Indexes for table `tblambulanceuser`
--
ALTER TABLE `tblambulanceuser`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `AmbRegNum` (`AmbRegNum`);

--
-- Indexes for table `tbldriver`
--
ALTER TABLE `tbldriver`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpagedriver`
--
ALTER TABLE `tblpagedriver`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpageuser`
--
ALTER TABLE `tblpageuser`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbltrackinghistory`
--
ALTER TABLE `tbltrackinghistory`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `abid` (`AmbulanceRegNum`),
  ADD KEY `bid` (`BookingNumber`);

--
-- Indexes for table `tbltrackinghistorydriver`
--
ALTER TABLE `tbltrackinghistorydriver`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `abid` (`AmbulanceRegNum`),
  ADD KEY `bid` (`BookingNumber`);

--
-- Indexes for table `tbltrackinghistoryuser`
--
ALTER TABLE `tbltrackinghistoryuser`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `abid` (`AmbulanceRegNum`),
  ADD KEY `bid` (`BookingNumber`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `docspecilization`
--
ALTER TABLE `docspecilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblambulance`
--
ALTER TABLE `tblambulance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblambulancedriver`
--
ALTER TABLE `tblambulancedriver`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblambulancehiring`
--
ALTER TABLE `tblambulancehiring`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblambulancehiringdriver`
--
ALTER TABLE `tblambulancehiringdriver`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblambulancehiringuser`
--
ALTER TABLE `tblambulancehiringuser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblambulanceuser`
--
ALTER TABLE `tblambulanceuser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbldriver`
--
ALTER TABLE `tbldriver`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblpagedriver`
--
ALTER TABLE `tblpagedriver`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblpageuser`
--
ALTER TABLE `tblpageuser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbltrackinghistory`
--
ALTER TABLE `tbltrackinghistory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbltrackinghistorydriver`
--
ALTER TABLE `tbltrackinghistorydriver`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbltrackinghistoryuser`
--
ALTER TABLE `tbltrackinghistoryuser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
