-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 08:12 AM
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
-- Database: `hcplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `date`) VALUES
(1, 'NIKHIL', 'nikhil@gmail.com', '', '', '2023-09-12'),
(2, 'NIKHIL', 'nikhil@gmail.com', '', '', '2023-09-12'),
(3, 'NIKHIL', 'nikhil@gmail.com', '', '', '2023-09-12'),
(4, 'NIKHIL', 'nikhil@gmail.com', '', '', '2023-09-12'),
(5, 'NIKHIL', 'nikhil@gmail.com', '', '', '2023-09-12'),
(6, 'NIKHIL', 'nikhil@gmail.com', '', '', '2023-09-12'),
(7, 'NIKHIL', 'nikhil@gmail.com', '', '', '2023-09-12'),
(8, 'NIKHIL', 'nikhil@gmail.com', '', '', '2023-09-12'),
(9, 'NIKHIL', 'nikhil@gmail.com', '', '', '2023-09-12'),
(10, 'NIKHIL', 'nikhil@gmail.com', '', '', '2023-09-12');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(5) NOT NULL,
  `dnm` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dimg` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `detail` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor-appointment`
--

CREATE TABLE `doctor-appointment` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` int(10) NOT NULL,
  `blood_group` varchar(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `doctor` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `massage` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor-appointment`
--

INSERT INTO `doctor-appointment` (`id`, `name`, `email`, `number`, `blood_group`, `gender`, `age`, `doctor`, `address`, `massage`, `date`, `status`) VALUES
(1, 'NIKHIL', 'nikhil@gmail.com', 2147483647, 'B', 'Male', 18, 'Nikhil', 'asd', 'we', '2023-09-08', 'pending'),
(2, 'abhi', 'abhi@gmail.com', 456, 'B+', 'Male', 21, 'Abhi', 'asc', 'zcz', '2023-09-08', 'pending'),
(6, 'NIKHIL', 'abhi@gmail.com', 45678, 'A+', 'Male', 54, 'Abhi', 'sac', 's\r\n', '2023-09-08', 'pending'),
(8, 'raj', 'nikhil@gmail.com', 5, 'B', 'Male', 19, 'Nikhil', 'dcs', 'dcds', '2023-09-09', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `img` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `img`) VALUES
(1, 'gallery/Acer_Wallpaper_04_3840x2400.jpg'),
(2, 'gallery/Acer_Wallpaper_05_3840x2400.jpg'),
(3, 'gallery/docter1.jpg'),
(4, 'gallery/docter2.jpg'),
(5, 'gallery/r2.jpg'),
(6, 'gallery/s1.jpg'),
(7, 'gallery/slider_1.jpg'),
(8, 'gallery/slider_2.jpg'),
(9, 'gallery/slider_3.jpg'),
(10, 'gallery/about.jpg'),
(11, 'gallery/footer.jpg'),
(12, 'gallery/logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_number` int(10) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `confirm` varchar(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `mobile_number`, `pwd`, `confirm`, `date`) VALUES
(1, 'nikhil', 'nikhil@gmail.com', 7892, '123', '123', '2023-09-08'),
(2, 'abhi', 'abhi@gmail.com', 7544, '123', '123', '2023-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `supper_login`
--

CREATE TABLE `supper_login` (
  `id` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supper_login`
--

INSERT INTO `supper_login` (`id`, `email`, `pwd`, `date`) VALUES
(1, 'nikhil@gmail.com', 'nikhil', '2023-09-07'),
(2, 'abhi@gmail.com', 'abhi', '2023-09-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor-appointment`
--
ALTER TABLE `doctor-appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `supper_login`
--
ALTER TABLE `supper_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor-appointment`
--
ALTER TABLE `doctor-appointment`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supper_login`
--
ALTER TABLE `supper_login`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor-appointment`
--
ALTER TABLE `doctor-appointment`
  ADD CONSTRAINT `email` FOREIGN KEY (`email`) REFERENCES `signup` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
