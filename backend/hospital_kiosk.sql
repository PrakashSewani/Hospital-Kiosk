-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 05:50 PM
-- Server version: 10.4.11-MariaDB-log
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_kiosk`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `id` int(11) NOT NULL,
  `department` varchar(10) NOT NULL,
  `uid` varchar(10) NOT NULL,
  `date_of_visit` date NOT NULL,
  `reason_for_visit` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`id`, `department`, `uid`, `date_of_visit`, `reason_for_visit`) VALUES
(1, 'A2', '1234', '2022-04-22', 'hello'),
(2, 'A2', '1234', '2022-04-21', 'hello'),
(3, 'G2', '0987', '2022-04-21', 'hello'),
(4, 'G2', '0987', '2022-04-21', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `id` int(11) NOT NULL,
  `appointment_no` int(11) NOT NULL,
  `date_of_check_up` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `name`, `email`, `contact_no`, `message`) VALUES
(1, 'MAyur', 'ms@gmail.com', '1234567890', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `docters`
--

CREATE TABLE `docters` (
  `id` int(10) NOT NULL,
  `docter_name` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `rate_of_visit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `docters`
--

INSERT INTO `docters` (`id`, `docter_name`, `department`, `rate_of_visit`) VALUES
(1, 'Dr. Thirupathi Rao Periyala', 'A2', 1500),
(2, 'Dr. Purushothaman D', 'C1', 1700),
(3, 'Dr. Poosha Darbha', 'D1', 2000),
(4, 'Dr. Santhosh Babu M R', 'E2', 1000),
(5, 'Dr. Jagdish Deshpande', 'G2', 900),
(6, 'Dr. Mohammed Abdul Khuddus', 'H6', 950),
(7, 'Dr. Deepak Arora', 'O4', 1500),
(8, 'Dr. Neelam', 'GY', 3000),
(9, 'Dr. Raja Muthiah Natarajan', 'CP', 3000),
(10, 'Dr. Sukumari Karunakaran', 'RD', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'S5833', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `pathology`
--

CREATE TABLE `pathology` (
  `id` int(11) NOT NULL,
  `test_id` varchar(50) NOT NULL,
  `uid` varchar(10) NOT NULL,
  `date_of_test` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pathology`
--

INSERT INTO `pathology` (`id`, `test_id`, `uid`, `date_of_test`) VALUES
(1, 'Iron studies', '1234', '2022-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `patient_table`
--

CREATE TABLE `patient_table` (
  `id` int(11) NOT NULL,
  `uid` varchar(10) NOT NULL,
  `patient_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_table`
--

INSERT INTO `patient_table` (`id`, `uid`, `patient_name`) VALUES
(1, 'S5833', 'MAyur');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `uid` varchar(10) NOT NULL,
  `reports_status` varchar(20) NOT NULL,
  `report_link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `uid`, `reports_status`, `report_link`) VALUES
(1, 'S5833', 'done', 'https://drive.google.com/file/d/19Ji2qDJrcCcRBUspbhqE7wvIaT3W-D4i/view?usp=sharing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docters`
--
ALTER TABLE `docters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pathology`
--
ALTER TABLE `pathology`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_table`
--
ALTER TABLE `patient_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `docters`
--
ALTER TABLE `docters`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pathology`
--
ALTER TABLE `pathology`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient_table`
--
ALTER TABLE `patient_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
