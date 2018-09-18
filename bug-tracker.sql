-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 17, 2018 at 06:36 PM
-- Server version: 5.6.38
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bug-tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `RightsID` int(11) NOT NULL,
  `Group` varchar(32) NOT NULL,
  `Action` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `RightsID`, `Group`, `Action`) VALUES
(1, 100, 'Team Leader', 'C'),
(3, 100, 'Team Leader', 'U'),
(4, 100, 'Team Leader', 'D'),
(5, 101, 'Team Leader', 'C'),
(7, 101, 'Team Leader', 'D'),
(8, 101, 'Team Leader', 'in work'),
(9, 101, 'Team Leader', 'in test'),
(10, 101, 'Tester', 'C'),
(12, 101, 'Tester', 'in test'),
(14, 101, 'Programmer', 'in work'),
(15, 102, 'Team Leader', 'in work'),
(16, 102, 'Team Leader', 'in test'),
(17, 102, 'Programmer', 'in work'),
(18, 102, 'Tester', 'in test'),
(19, 101, 'Team Leader', 'closed'),
(20, 101, 'Team Leader', 'open'),
(21, 102, 'Team Leader', 'closed'),
(22, 102, 'Team Leader', 'open'),
(23, 101, 'Tester', 'closed'),
(24, 102, 'Tester', 'closed');

-- --------------------------------------------------------

--
-- Table structure for table `reg_table_main`
--

CREATE TABLE `reg_table_main` (
  `id` int(20) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `roleOf` varchar(11) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reg_table_main`
--

INSERT INTO `reg_table_main` (`id`, `first_name`, `last_name`, `roleOf`, `user_name`, `user_password`, `email`) VALUES
(14, 'Arkadiy', 'Onohin', 'Team Leader', '1', 'c81e728d9d4c2f636f067f89cc14862c', '123123123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `reg_table_role`
--

CREATE TABLE `reg_table_role` (
  `id` int(11) NOT NULL,
  `role` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reg_table_role`
--

INSERT INTO `reg_table_role` (`id`, `role`) VALUES
(1, 'Programmer'),
(2, 'Tester'),
(3, 'Team Leader');

-- --------------------------------------------------------

--
-- Table structure for table `table_of_tasks_main`
--

CREATE TABLE `table_of_tasks_main` (
  `id` int(11) NOT NULL,
  `github_link` varchar(32) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL,
  `status` varchar(11) NOT NULL,
  `assignet_to` varchar(32) NOT NULL,
  `project_name` int(11) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_of_tasks_main`
--

INSERT INTO `table_of_tasks_main` (`id`, `github_link`, `start_time`, `end_time`, `status`, `assignet_to`, `project_name`, `description`) VALUES
(1, '123451112', '2018-08-19 08:23:03', '0000-00-00 00:00:00', 'in work', '1', 1, '[value-5]1234'),
(3, '[value-2]', '2018-08-29 05:11:26', '0000-00-00 00:00:00', 'in work', '[value-6]', 1, '[value-8]'),
(5, '123123123', '2018-09-16 14:16:40', '0000-00-00 00:00:00', 'in test', '2', 1, 'asdasda'),
(8, '123123', '2018-09-16 16:07:23', '0000-00-00 00:00:00', 'closed', '1', 7, '123123123'),
(9, 'test', '2018-09-16 16:08:03', '0000-00-00 00:00:00', 'open', '1', 1, 'test2');

-- --------------------------------------------------------

--
-- Table structure for table `table_of_tasks_project-name`
--

CREATE TABLE `table_of_tasks_project-name` (
  `id` int(11) NOT NULL,
  `project_name` varchar(32) NOT NULL,
  `assignet_to` varchar(32) NOT NULL,
  `members` varchar(320) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_of_tasks_project-name`
--

INSERT INTO `table_of_tasks_project-name` (`id`, `project_name`, `assignet_to`, `members`) VALUES
(1, 'Garden Scape', '1', '1,2,4,5,2'),
(6, 'Gavrilkino', '4444', '4444'),
(7, '123', '1', '1,123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_table_main`
--
ALTER TABLE `reg_table_main`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `reg_table_role`
--
ALTER TABLE `reg_table_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_of_tasks_main`
--
ALTER TABLE `table_of_tasks_main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_of_tasks_project-name`
--
ALTER TABLE `table_of_tasks_project-name`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `project_name` (`project_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `reg_table_main`
--
ALTER TABLE `reg_table_main`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `table_of_tasks_main`
--
ALTER TABLE `table_of_tasks_main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `table_of_tasks_project-name`
--
ALTER TABLE `table_of_tasks_project-name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
