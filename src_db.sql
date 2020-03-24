-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2019 at 02:54 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `src_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Sirname` varchar(30) NOT NULL,
  `Mtitle` varchar(30) NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `Firstname`, `Sirname`, `Mtitle`, `Phone`, `Password`, `Email`) VALUES
(1, 'Patrick', 'Mvuma', 'Mr', '265999107724', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `Title` varchar(300) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Size` decimal(10,0) DEFAULT NULL,
  `content` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inorg`
--

CREATE TABLE `inorg` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `Phone` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(300) NOT NULL,
  `year` varchar(10) NOT NULL,
  `pname` varchar(1000) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` decimal(10,0) NOT NULL,
  `content` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) UNSIGNED NOT NULL,
  `province` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `province`, `fname`, `sname`, `email`, `password`, `role`, `image`, `idno`, `address`, `mobile`, `userid`) VALUES
(1, 'Masheast', 'Gabriel', 'Musodza', 'admin@admin.com', '0192023a7bbd73250516f069df18b500', 'Admin', 'uploads/images/default.png', '48-134787V48', '797 fairview crescent  winston park marondera', '0263334343434', '5d94589564e27'),
(2, 'Masheast', 'Justin', 'Chigu', 'jc@gmail.com', '0192023a7bbd73250516f069df18b500', 'Reg', 'uploads/images/user_login_man-512.png', '48-134787V48', '234 Mbuya Nehanda Street Cherutombo', '07726626262', '5d9477e221b5f');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(11) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sportcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `player` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `fname`, `sname`, `sportcode`, `image`, `idno`, `province`, `address`, `mobile`, `dob`, `player`) VALUES
(1, 'tendai', 'Musodza', '2', 'uploads/images/user_login_man-512.png', '48-134787V48', 'Masheast', '797 fairview crescent  winston park mutoko', '07726626262', '2007-07-29', '5dbac7b36b12b');

-- --------------------------------------------------------

--
-- Table structure for table `profilepictures`
--

CREATE TABLE `profilepictures` (
  `id` int(11) NOT NULL,
  `ids` varchar(30) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `type` varchar(30) NOT NULL,
  `Size` decimal(10,0) NOT NULL,
  `content` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sportcode`
--

CREATE TABLE `sportcode` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sportcode`
--

INSERT INTO `sportcode` (`id`, `title`) VALUES
(2, 'Football'),
(3, 'Netball'),
(4, 'Chess'),
(5, 'Darts'),
(7, 'Boxing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(300) NOT NULL,
  `Sirname` varchar(300) NOT NULL,
  `Mtitle` varchar(30) NOT NULL,
  `Rank` varchar(30) NOT NULL,
  `Department` varchar(300) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `Staffid` varchar(300) NOT NULL,
  `Online` varchar(300) NOT NULL,
  `Picname` varchar(1000) NOT NULL,
  `Time` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volunteer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `title`, `fname`, `sname`, `email`, `category`, `image`, `idno`, `address`, `mobile`, `dob`, `volunteer`) VALUES
(1, 'MR', 'Jonathan', 'Nhunzvi', 'gmusodza@kacee.co.zw', 'vip', 'uploads/images/3.jpg', '44-434434k89', '797 fairview crescentsa winston park marondera', '07729219291', '07729219291', '10'),
(2, 'MS', 'Taurai ', 'Masora', 'admin@263lyrics.com', 'athlete', 'uploads/images/user_login_man-512.png', '74747474kk', '797 fairview crescentsa winston park marondera', '07729219291', '2019-09-04', '10'),
(3, 'MRS', 'jkjkjjjk', 'klkkklkk', 'gabrielmusodza@gmail.com', 'athlete', 'uploads/images/cort.png', '48-134787V48', '797 fairview crescent  winston park marondera', '99090999999', '2019-09-05', '5d856eed0e8ad');

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`id`, `title`, `description`) VALUES
(1, 'Zone 8', 'ahahbdhabdahba haahbahhha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inorg`
--
ALTER TABLE `inorg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profilepictures`
--
ALTER TABLE `profilepictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sportcode`
--
ALTER TABLE `sportcode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inorg`
--
ALTER TABLE `inorg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profilepictures`
--
ALTER TABLE `profilepictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sportcode`
--
ALTER TABLE `sportcode`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
