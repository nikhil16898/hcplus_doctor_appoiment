-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2023 at 08:15 AM
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
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `doctor` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `massage` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor-appointment`
--

INSERT INTO `doctor-appointment` (`name`, `email`, `number`, `gender`, `age`, `doctor`, `address`, `massage`, `date`) VALUES
('asd', 'asd@asd', 123456, 'male', 12, 'Nikhil', 'asdadmnadbadas', 'asdad', '2023-08-01'),
('kjdsfb', 'Asah@kdfjgk', 789, 'male', 45, 'Jenil', 'sdmnfvhshf', 'sznmfbsd', '2023-08-01'),
('saklen', 'sasaxa@ass.com', 2147483647, 'male', 19, 'Raj', 'manavadar ', 'kaynay khale', '2023-08-01'),
('nayan', 'nayan@gmail.com', 789456, 'male', 19, 'Abhi', 'jgjdfgs', 'sdjhfjk', '2023-08-01'),
('riya', 'riya@gmail.com', 1234567893, 'femal', 17, 'Nikhil', 'zinzari', 'dskhfshf', '2023-08-01'),
('avani', 'avani@avani', 123, 'femal', 14, 'Nikhil', 'zinzari', 'hgcdrct7\r\n\r\n\r\n89jhgyut', '2023-08-01'),
('NIKHIL', 'nikhil@gmail.com', 2147483647, 'male', 19, 'Kartik', 'rf', 'rf', '2023-08-22'),
('daSD', 'asd@gmail.com', 87879, 'male', 45, 'Abhi', 'dsf', 'sd', '2023-08-22'),
('abhi', 'abhi@gmail.com', 2147483647, 'male', 19, 'Raj', 'asd', 'dfsa', '2023-08-24');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `img` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`img`) VALUES
('gallery/Acer_Wallpaper_04_3840x2400.jpg'),
('gallery/Acer_Wallpaper_05_3840x2400.jpg'),
('gallery/docter1.jpg'),
('gallery/docter2.jpg'),
('gallery/r2.jpg'),
('gallery/s1.jpg'),
('gallery/slider_1.jpg'),
('gallery/slider_2.jpg'),
('gallery/slider_3.jpg'),
('gallery/about.jpg'),
('gallery/footer.jpg'),
('gallery/logo.png');

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
(1, 'nikhil', 'nikhil@gmail.com', 1234567890, '123', '123', '2023-08-22'),
(2, 'asdad', 'asd@gmail.com', 456, '789', '789', '2023-08-22'),
(3, 'Abhi', 'abhi@gmail.com', 2147483647, '789', '789', '2023-08-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
