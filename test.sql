-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2023 at 03:28 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `logid` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `idcard` text NOT NULL,
  `contactnumber` text NOT NULL,
  `address` varchar(250) NOT NULL,
  `position` enum('Punong Barangay','Sangguniang Barangay Member','Barangay Secretary','Barangay Treasurer','SK Chairman') NOT NULL,
  `acctype` varchar(150) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `timestamp` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`logid`, `fname`, `mname`, `lname`, `email`, `password`, `idcard`, `contactnumber`, `address`, `position`, `acctype`, `status`, `timestamp`) VALUES
(1000022, 'Arman', 'Gerona', 'Grona', 'arman@gmail.com', '12345678', 'images/icons8-user-50.png', '09187224851', 'Zone 1  Bulan Sorsogon', 'SK Chairman', 'administrator', 1, '2023-01-04 15:49:23'),
(1000024, 'Andrian', 'Lactao', 'Elemento', 'andrianelemento41@gmail.com', '12345678', 'images/icons8-user-50.png', '09109366801', 'Bulan Sorsogon', 'Sangguniang Barangay Member', 'administrator', 1, '2023-01-04 15:49:29'),
(1000025, 'ANDRO', 'G.', 'PORRAS', 'andro@gmail.com', '24681357', 'images/icons8-user-50.png', '91093668010', 'Bulan Sorsogon', 'Sangguniang Barangay Member', 'staff', 1, '2023-01-04 15:49:37'),
(1000026, 'Lebron', 'James', 'James', 'james@gmail.com', '12345678', 'images/icons8-user-50.png', '91093668010', 'Bulan', 'Sangguniang Barangay Member', 'administrator', 1, '2023-01-07 20:37:46');

-- --------------------------------------------------------

--
-- Table structure for table `audit_logs`
--

CREATE TABLE `audit_logs` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `action` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_croatian_ci DEFAULT NULL,
  `ip_address` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_croatian_ci DEFAULT NULL,
  ` timestamp` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `officials`
--

CREATE TABLE `officials` (
  `officialid` int(11) NOT NULL,
  `position` enum('Punong Barangay','Sangguniang Barangay Member','Barangay Secretary','Barangay Treasurer','SK Chairman') NOT NULL,
  `lastname` text NOT NULL,
  `middlename` text NOT NULL,
  `firstname` text NOT NULL,
  `gender` text NOT NULL,
  `birthdate` text NOT NULL,
  `civilstatus` text NOT NULL,
  `address` text NOT NULL,
  `idcard` text NOT NULL,
  `contact` text NOT NULL,
  `termyears` text NOT NULL,
  `yearstarted` text NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officials`
--

INSERT INTO `officials` (`officialid`, `position`, `lastname`, `middlename`, `firstname`, `gender`, `birthdate`, `civilstatus`, `address`, `idcard`, `contact`, `termyears`, `yearstarted`, `status`) VALUES
(1000000, 'Punong Barangay', 'PORRAS', 'G.', 'ANDRO', 'Male', '1998-12-01', 'Single', '123 Zone 1 Sorsogon', '../images/Smith Fret John/id123.png', '09321528419', '3', '2022', 0),
(1000002, 'Sangguniang Barangay Member', 'GICARO QUINAGUTAN', 'G.', 'MA. CORAZON ', 'Female', '2022-12-30', 'Single', 'bulan', '../images/Orias Lactao Leonisa/4497cfeeeb1702bbbb290cf7ecedfe92.jpg', '9109366801', '3', '2020', 0),
(1000003, 'Punong Barangay', 'PORRAS ', 'O.', 'ANDRES ', 'Male', '2022-12-30', 'Married', 'Purok 2', '../images/PORRAS  O. ANDRES /[Download] Kakashi Wallpapers HD, 4K.jpeg', '09109736601', '3', '2020', 0),
(1000004, 'Sangguniang Barangay Member', 'GRANTOS', 'G.', 'LOUIE', 'Male', '2022-12-31', 'Single', 'Purok 3', '../images/GRANTOS G. LOUIE/ceb982abc7923a9072b05b0ca469f946.jpg', '09109466802', '3', '2020', 0),
(1000005, 'Sangguniang Barangay Member', 'SAILANI ', 'G.', 'MA. SAILANI ', 'Male', '2022-12-31', 'Married', 'Purok 4', '../images/SAILANI  G. MA. SAILANI /icons8-person-female-50.png', '9109366801', '3', '2023', 0),
(1000006, 'Sangguniang Barangay Member', 'ENTERIA JR. FRIVALDO', 'H.', 'VICENTE', 'Male', '2022-12-31', 'Married', 'Purok 5', '../images/ENTERIA JR. FRIVALDO H. VICENTE/icons8-user-50.png', '9109366801', '3', '2020', 0),
(1000007, 'Sangguniang Barangay Member', 'ESTOPA', 'B. ', 'FELIPE', 'Male', '2022-12-31', 'Married', 'Purok 2', '../images/ESTOPA B.  FELIPE/icons8-user-50.png', '9109366801', '3', '2023', 0),
(1000008, 'Sangguniang Barangay Member', 'ASAULA', 'G.', 'RAMIR', 'Male', '2022-12-31', 'Married', 'Purok 3', '../images/ASAULA G. RAMIR/icons8-user-50.png', '9109366801', '3', '2023', 0),
(1000010, 'Barangay Treasurer', 'JHANET', 'Y.', 'FUNTILAR', 'Female', '2022-12-31', 'Married', 'Purok 2', '../images/JHANET Y. FUNTILAR/icons8-person-female-50.png', '9109366801', '3', '2020', 1),
(1000011, 'SK Chairman', ' NINEO', 'H.', 'CAECZAR ', 'Male', '2023-01-31', 'Single', 'Zone 1  Bulan Sorsogon', '../images/ NINEO H. CAECZAR /icons8-user-50.png', '09187224851', '2', '2022', 0),
(1000014, 'Sangguniang Barangay Member', 'James', 'James', 'Lebron', 'Male', '2023-01-06', 'Single', 'Bulan', '../images/James James Lebron/icons8-user-50.png', '9109366801', '3', '2022', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registerd_users`
--

CREATE TABLE `registerd_users` (
  `id` int(250) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registerd_users`
--

INSERT INTO `registerd_users` (`id`, `username`, `firstname`, `lastname`, `email`, `password`, `image`, `date`) VALUES
(1, 'Elements', 'Andrian', 'Elemento', 'elemento@gmail.com', '24681357', 'crop_image.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `user_type` varchar(255) CHARACTER SET utf8mb4 NOT NULL DEFAULT 'normal_user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `username`, `email`, `password`, `user_type`) VALUES
(1, 'admin', 'andrianelemento08@gmail.com', '', ''),
(2, 'admin', 'admin2@gmail.com', 'admin', 'normal_user'),
(3, 'admin', 'staff@gmail.com', 'admin', 'normal_user'),
(4, 'admin3', 'admin3@gmail.com', 'admin3', 'normal_user'),
(5, 'Andrian', 'andrian@gmail.com', 'Andrian', 'normal_user'),
(6, '', '', '', 'normal_user'),
(7, '', '', '', 'normal_user'),
(8, '', '', '', 'normal_user');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `reportid` tinyint(4) NOT NULL,
  `incident` text CHARACTER SET utf8mb4 NOT NULL,
  `incidentplace` text NOT NULL,
  `complainant` text CHARACTER SET utf8mb4 NOT NULL,
  `complainee` text CHARACTER SET utf8mb4 NOT NULL,
  `witness1` text CHARACTER SET utf8mb4 NOT NULL,
  `witness2` text CHARACTER SET utf8mb4 NOT NULL,
  `narrative` text CHARACTER SET utf8mb4 NOT NULL,
  `dateandtime` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`reportid`, `incident`, `incidentplace`, `complainant`, `complainee`, `witness1`, `witness2`, `narrative`, `dateandtime`, `status`) VALUES
(1, 'Nahabgabas', 'Bulan', 'Juan dela Cruz', 'Boy lado', 'Boy Tapang ', 'Boy Loko', 'Parahagbas k niyog', '2023-01-06 21:34:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `residentid` int(11) NOT NULL,
  `lastname` text NOT NULL,
  `middlename` text NOT NULL,
  `firstname` text NOT NULL,
  `gender` text CHARACTER SET utf8mb4 NOT NULL,
  `birthdate` text CHARACTER SET utf8mb4 NOT NULL,
  `civilstatus` text CHARACTER SET utf8mb4 NOT NULL,
  `address` text CHARACTER SET utf8mb4 NOT NULL,
  `idcard` text NOT NULL,
  `contact` text CHARACTER SET utf8mb4 NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`residentid`, `lastname`, `middlename`, `firstname`, `gender`, `birthdate`, `civilstatus`, `address`, `idcard`, `contact`, `status`) VALUES
(1, 'Elemento', 'orias', 'Andrian', 'Male', '2023-01-06', 'Single', 'masbate', '../images/Elemento orias Andrian/.trashed-1633409431-pexels-eunhyuk-ahn-2894230 - Copy.jpg', '9109366801', 1),
(2, 'James', 'James', 'Lebron', 'Male', '2023-01-06', 'Single', 'Bulan', '../images/James James Lebron/icons8-user-50.png', '9109366801', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sql_injection`
--

CREATE TABLE `sql_injection` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sql_injection`
--

INSERT INTO `sql_injection` (`id`, `username`, `password`, `user_type`) VALUES
(1, 'admin', 'admin', 'administrator'),
(4, 'andrian', 'elemento', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `users_account`
--

CREATE TABLE `users_account` (
  `id` int(10) NOT NULL,
  `username` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `user_type` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_account`
--

INSERT INTO `users_account` (`id`, `username`, `email`, `password`, `user_type`, `time`) VALUES
(1, 'admin', 'andrianelemento08@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2022-12-22 22:59:25'),
(2, 'admin', 'andrianelemento08@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'user', '2022-12-22 23:00:29'),
(3, 'admin1', 'admin1@gmail.com', 'e00cf25ad42683b3df678c61f42c6bda', 'user', '2022-12-22 23:05:30'),
(4, 'Andrian ELemento', 'andrianelemento41@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2022-12-22 23:27:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`logid`);

--
-- Indexes for table `audit_logs`
--
ALTER TABLE `audit_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officials`
--
ALTER TABLE `officials`
  ADD PRIMARY KEY (`officialid`);

--
-- Indexes for table `registerd_users`
--
ALTER TABLE `registerd_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`reportid`);

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`residentid`);

--
-- Indexes for table `sql_injection`
--
ALTER TABLE `sql_injection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_account`
--
ALTER TABLE `users_account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `logid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000027;

--
-- AUTO_INCREMENT for table `audit_logs`
--
ALTER TABLE `audit_logs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `officials`
--
ALTER TABLE `officials`
  MODIFY `officialid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000015;

--
-- AUTO_INCREMENT for table `registerd_users`
--
ALTER TABLE `registerd_users`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `reportid` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `residentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sql_injection`
--
ALTER TABLE `sql_injection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_account`
--
ALTER TABLE `users_account`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
