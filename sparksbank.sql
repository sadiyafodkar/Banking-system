-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 08:02 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
  time_zone = "+00:00";

--
-- Database: `sparksbank`
--
-- --------------------------------------------------------
--
-- Table structure for table `transaction`
--
CREATE TABLE `transaction` (
  `sno` int(5) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(9) NOT NULL,
  `datetime` date NOT NULL DEFAULT current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- --------------------------------------------------------
--
-- Table structure for table `users`
--
CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `users`
--
INSERT INTO
  `users` (`id`, `name`, `email`, `balance`)
VALUES
  (1, 'Kritik Srivasatava', 'shahenshah@gmail.com', 5000),
  (2, 'Aryan Raj', 'arajnv7@gmail.com', 6000),
  (3, 'Vivek Bhatt', 'vivekbhatt@gmail.com', 8000),
  (4, 'Chinmay Pathak', 'chinupathak@gmail.com', 5000),
  (5, 'Piyush Bhakuni', 'lousifermorningstar@gmail.com', 9000),
  (6, 'Pankaj Singh', 'pankaj@gmail.com', 6000),
  (7, 'Anurag Singh Rawat', 'anuragsingh@gmail.com', 7000),
  (8, 'Harshit Joshi', 'harshitjoshi@gmail.com', 5000),
  (9, 'Naman Khulbe', 'naman@gmail.com', 1000),
  (10, 'Tanuj Tanwal', 'tanujtanwal@gmail.com', 9000);

COMMIT;