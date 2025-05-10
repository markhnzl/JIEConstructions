-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2025 at 10:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `text1`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'markhanzel', 'mama@gmail.com', '$2y$10$7RET9xVOTlaZq5Efjy39LuAOaIeq1BIM3WLvuLG.h0Nc4AHkqyj9C'),
(2, '', '', '$2y$10$haTK.xJw9wcTqBOa4WjocuhvmPrL1WNivfNvyFmFmzBxZ.79jptY6'),
(3, 'markiplier', 'markhanzel@gmail.com', '$2y$10$zepz687Cr6lBkKUgsxqPC.vpzmKk.2Bmpms0tl0Tu2x5dkdM3Sb9u'),
(4, 'Shashe', 'shashemami@gmail.com', '$2y$10$/NBvEcCXap5b5EnFOhqAQ.ACl0JUUgt.XwIDaXvX3OOEoDKg7MX4C'),
(5, 'Sherryme Salvadora', 'sherrymesalvadora@gmail.com', '$2y$10$AJXI3obMIQkTPgMhC/QZ5OE44F2..ddqEpIH4U90PKla7Te9xe3QW'),
(6, 'Mark Hanzel Raymundo', 'hanzelraymundo@gmail.com', '$2y$10$ulpaOMAxdXaKHQ.vBBo2qePa8a688FfeWRLZEaQsVSdrOpRwHSWhy'),
(7, 'raj', 'raj@gmail.com', '$2y$10$qWq2acS1pmUOvtrg4gKf7eC3wQy.NDfiX1kn3yXFAKc/zwto29.Pu'),
(8, 'Atasha Manzano', 'atasha@gmail.com', '$2y$10$dgrLqMsb55kraBruzFSOfuhMEmlRuZqWukmzsRLix.IjgWesUbBaW'),
(9, 'Dina Raymundo', 'dinaraymundo@gmail.com', '$2y$10$/x5VXyMByWpVulowoldyLuKS0D0WYrP5tz5.8k/T.YjG.iQli5UAG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
