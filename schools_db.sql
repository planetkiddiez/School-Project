-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2023 at 11:24 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schools_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `class_id` varchar(255) NOT NULL,
  `school_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `class` varchar(500) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `class_id`, `school_id`, `user_id`, `class`, `date`) VALUES
(1, '5X6ELNtr6uMXuVq8iJ33SKyx21Rcf1iEHptGe896h5SLdIBu6QyxWzia6YI', 'Qx5fJuf27ye95oAR5VOX8noNovLtvaHVkLSdWsZRayIT30HMmBuMYjiUoj', 'hDTCJDnggzqzU93zxkzvSNykn9I31SsSI2E5co9eQCXrUzv81L1xXT1aW9', 'Education', '2022-09-22 12:55:16');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `school` varchar(255) NOT NULL,
  `school_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `school`, `school_id`, `user_id`, `date`) VALUES
(3, 'Aguda Grammer School', 'NUv4Fj4H3tpBOSAeJoooF5TmIUaXsoZVge437xL7CtG1vvSIgMFtL7q', 'hDTCJDnggzqzU93zxkzvSNykn9I31SsSI2E5co9eQCXrUzv81L1xXT1aW9', '2022-07-04 05:23:53'),
(4, 'Community High School', 'Qx5fJuf27ye95oAR5VOX8noNovLtvaHVkLSdWsZRayIT30HMmBuMYjiUoj', 'hDTCJDnggzqzU93zxkzvSNykn9I31SsSI2E5co9eQCXrUzv81L1xXT1aW9', '2022-08-12 18:37:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `school_id` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `firstname`, `lastname`, `email`, `password`, `image`, `gender`, `school_id`, `rank`, `date`) VALUES
(1, 'hDTCJDnggzqzU93zxkzvSNykn9I31SsSI2E5co9eQCXrUzv81L1xXT1aW9', 'Marry', 'Jane', 'marry@view.com', '$2y$10$b.iA5vaOBZFvvUK/B0CJ9u8RxpFy9rP/Ib2u6Xaw9fmWucMgCDRFu', '', 'Female', 'Qx5fJuf27ye95oAR5VOX8noNovLtvaHVkLSdWsZRayIT30HMmBuMYjiUoj', 'super_admin', '2022-06-11 20:00:36'),
(2, '82qBfUZK80itG0JETl0IKv7aT9rokjqoNeLVh8WxTYXxRxC9uj8TshJu', 'Remmedy', 'Mond', 'Rem@gmail.com', '$2y$10$PqJOuSI5nGz27ACuLxjF0OTdfnb5s1mbi2u3u7.ogYXBTKGuVEZF.', '', 'Male', '', 'super_admin', '2022-06-19 11:27:16'),
(3, 'KdR4FryB3IsUy0ursmcfGqg4HGZHoUcQ0ZhMrTDLHnmLmCnYuFvoWTV', 'May', 'Back', 'back@gmail.com', '$2y$10$Gt2.ZZqpABEzB4vg7.FboOPndnH9UZ2gkj1fSrDODu0dK1NtD/f.a', '', 'Male', 'Qx5fJuf27ye95oAR5VOX8noNovLtvaHVkLSdWsZRayIT30HMmBuMYjiUoj', 'admin', '2022-08-15 09:22:37'),
(4, 'pXRN1LUmFpidtFpKW3MFHfmLuSGCSKNkhnEkZGh7ELRIl3cQkRpLMVuKoD', 'Amaray', 'Jones', 'amaray@yahoo.com', '$2y$10$Lv6wubmYVAyIpF5nWVX22.FmiqD4ie8BbU/bSkgsz85BSDzORPjme', '', 'Female', 'Qx5fJuf27ye95oAR5VOX8noNovLtvaHVkLSdWsZRayIT30HMmBuMYjiUoj', 'reception', '2022-09-10 22:13:46'),
(5, 'uoH4GX7rQ0KlJN6eiXmtUEi3OZo2cm1zBq0IBj0mVM6Wu828tg6qmTdYc2', 'Vibe', 'Peters', 'vibe@yahoo.com', '$2y$10$/2OaFl23fLpk91yTi2zYY.sKm7.Pd1/V9iX1oDcQVSmWlefwoMIdW', '', 'Male', 'Qx5fJuf27ye95oAR5VOX8noNovLtvaHVkLSdWsZRayIT30HMmBuMYjiUoj', 'lecturer', '2022-09-10 22:16:06'),
(6, 'HxHugsRSe6J3AdtIxyc2S5DaWN1WS5yfBo99QgXGFRovt4eLide764jGkAUY', 'Maria', 'James', 'maria@gmail.com', '$2y$10$zIXLTwo8S5qo7ZaMRD0yNerdZ3yrdoTQXEix6JFNdDufuuDkNNcf.', '', 'Female', 'Qx5fJuf27ye95oAR5VOX8noNovLtvaHVkLSdWsZRayIT30HMmBuMYjiUoj', 'student', '2022-09-22 11:19:56'),
(7, 'emoIcM4DMqLfaFDu5xizvokeIONoUaay1roIUEy2tlDiEYj9CUYJGOBUn', 'Caric', 'Manbi', 'caric@gmail.com', '$2y$10$dBcsGuhX01dL/RPN7BZ90eENoOY0n9v2DOmWL3HbJqP.Y.fX4M.MK', '', 'Male', 'Qx5fJuf27ye95oAR5VOX8noNovLtvaHVkLSdWsZRayIT30HMmBuMYjiUoj', 'student', '2022-09-22 11:20:47'),
(8, 'An6leGOFRN813t3kHot6fnTIKMCEEeUBS8Z2SvcBA0CEjoNtdFmumFGc', 'Ziny', 'Roseh', 'ziny@gmail.com', '$2y$10$KfU3H524z2ug7WSwFaOni.l0HNkpOA7Gk4IzAQ4LTdlqMMxVUnV7q', '', 'Female', 'Qx5fJuf27ye95oAR5VOX8noNovLtvaHVkLSdWsZRayIT30HMmBuMYjiUoj', 'student', '2022-09-22 11:21:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `school_id` (`school_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `class` (`class`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school` (`school`),
  ADD KEY `school_id` (`school_id`),
  ADD KEY `date` (`date`),
  ADD KEY `date_2` (`date`),
  ADD KEY `user_url` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `firstname` (`firstname`),
  ADD KEY `lastname` (`lastname`),
  ADD KEY `gender` (`gender`),
  ADD KEY `school_id` (`school_id`),
  ADD KEY `rank` (`rank`),
  ADD KEY `date` (`date`),
  ADD KEY `date_2` (`date`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
