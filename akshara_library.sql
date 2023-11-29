-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 09:44 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akshara_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `availability` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `new_release` int(11) NOT NULL DEFAULT 0,
  `featured` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `cat_id`, `book_name`, `image1`, `image2`, `description`, `availability`, `user_id`, `new_release`, `featured`) VALUES
(1, 3, 'The Hobbit', '1700304346.jpg', '17003043461.jpg', 'test desc', 1, 11, 1, 1),
(2, 7, 'Pride and Prejudice', '1700304384.jpg', '17003043841.jpg', 'test desc', 1, 11, 1, 1),
(3, 6, 'Steve Jobs', '1700304475.jpg', '17003044751.jpg', 'test dec', 1, 11, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `status`) VALUES
(1, 'Architecture ', 1),
(2, 'Art ', 1),
(3, 'Action ', 1),
(6, 'Biography & Autobiographyy', 1),
(7, 'Fiction', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` text NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `phone`, `address`, `role`, `created_at`, `updated_at`) VALUES
(1, 'aks', 'akshay@gmail.com', '$2y$10$C6gLaT7j6YwV8f.TyzJ42OfE1dMX86/U2qUG2rktPYUVCK6xV5wJu', 2147483647, 'testt', 0, '2023-11-12 15:15:25', '2023-11-12 15:15:25'),
(2, 'test', 'test@gmail.com', '$2y$10$k61WmMGD99WNBuZTEYHePuXBCCQY/GCakVWtcAgAlJ4AJu04W.mfu', 2147483647, 'test address', 0, '2023-11-13 17:37:03', '2023-11-13 17:37:03'),
(3, 'test1', 'test1@gmail.com', '$2y$10$7tIXDOcRPCLiZ72jmKpm5eda251JSlbrENSmU5ZSPBCZzIfwCAmHy', 2147483647, 'test1 address', 0, '2023-11-13 17:44:38', '2023-11-13 17:44:38'),
(4, 'testaksharalibrary', 'akshara@gmail.com', '$2y$10$n5.qHXZiYTPH7D/FWuwZa.dibdnC7iBk8xrf3Epsab/4QK/BS6WXK', 2147483647, 'test address', 0, '2023-11-14 19:09:55', '2023-11-14 19:09:55'),
(5, 'new reg', 'newreg@gmail.com', '$2y$10$H1.OUt9vxJNrMj0mZV7rCe2atZ/36KKqPo.r1ZrpbTQVq8nntuXLm', 2147483647, 'test address', 0, '2023-11-15 18:17:42', '2023-11-15 18:17:42'),
(6, 'test3', 'test3@gmail.com', '$2y$10$Pw.C0G.rqEvdpTM6/cETN.v31rGzrtYjwgQ.T8kL9eDKHwmUwMwE.', 2147483647, 'address', 0, '2023-11-15 19:54:13', '2023-11-15 19:54:13'),
(8, 'test4', 'sdgsdgQ@gmail.com', '$2y$10$401Hw9oaDKCY29870ZeclOcWQNcQ7TiHmTN3vv2MJwLXoXPxNYpnC', 2147483647, 'dfshdsfh', 0, '2023-11-15 23:23:24', '2023-11-15 23:23:44'),
(9, 'rahu', 'rahu@gmail.com', '$2y$10$XPaBs2cVVxrZpzKwT1kpwOWDUFgW1CGwBMUxsdPXlNuv0t0wUTIUi', 1234, 'drgdg', 0, '2023-11-15 23:25:03', '2023-11-15 23:25:03'),
(10, 'testnew', 'newtest@gmail.com', '$2y$10$Bpnw/x.nocyCVA6KaHGjwup8.F4eNIUN4Ah2M.yOeJ3rXC3nFvXQi', 1232125623, 'test address\r\ntest address\r\ntest address\r\ntest address', 1, '2023-11-17 23:24:30', '2023-11-21 14:10:34'),
(11, 'checkname', 'checkname@gmail.com', '$2y$10$38DiXTwYFilDFaCl2B4kHu4oOQTbC5IgfdnAhOJV2R5MRhsOjHz3K', 1235658954, 'test address\r\ntest', 0, '2023-11-18 15:17:08', '2023-11-18 15:17:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
