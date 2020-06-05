-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2020 at 02:48 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'IT'),
(2, 'Photography'),
(3, 'Animation'),
(4, 'Networking');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(10) NOT NULL,
  `date` date DEFAULT NULL,
  `sender` varchar(20) NOT NULL,
  `receiver` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `date`, `sender`, `receiver`, `message`) VALUES
(1, NULL, '', '', ' lskjlkjlwrkjtlkejrlt'),
(2, NULL, 'suraj44', 'amos', ' dfsgdfg'),
(3, NULL, 'suraj44', 'suraj44', ' jhgjhgjhgjhgldhjv');

-- --------------------------------------------------------

--
-- Table structure for table `job_posted`
--

CREATE TABLE `job_posted` (
  `id` int(11) NOT NULL,
  `job_title` varchar(20) NOT NULL,
  `job_category` varchar(30) NOT NULL,
  `job_type` varchar(20) NOT NULL,
  `budget` int(10) NOT NULL,
  `description` text NOT NULL,
  `created_date` varchar(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_posted`
--

INSERT INTO `job_posted` (`id`, `job_title`, `job_category`, `job_type`, `budget`, `description`, `created_date`, `user_id`) VALUES
(1, 'gfdh', 'IT', 'Short Term', 2345, ' rdgfbvmg,', '0000-00-00', 2),
(2, 'Animation for a comp', 'Animation', 'Long Term', 2000, ' sjfghskjfdg;bsjfkdngsdfgas/fldakflakds;flak;dsfadsfadf fasdf', '0000-00-00', 2),
(3, 'kbmgkh', 'IT', 'Long Term', 562, ' nvmbvnbklm bvchgjknmbhjkln jhk', '0000-00-00', 2),
(4, 'lhjkjbm', 'IT', 'Short Term', 7898, ' nhjhnvghjmnbvcfghjkmvghjk', '9', 2);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(10) NOT NULL,
  `sender_user` varchar(10) NOT NULL,
  `receiver_username` varchar(10) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `links` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `img_path` varchar(20) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `links`, `description`, `img_path`, `user_id`) VALUES
(1, 'Web Designer', 'http://localhost:8012/jobhouse/portfolio.php', ' sdlfksgjslkdfjglksjdlfkg', '', 3),
(2, 'kjshgkjh', 'kjhkjh', 'kjhkjhk ', 'upload/IMG_20190617_', 3);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(10) NOT NULL,
  `headline` varchar(30) NOT NULL,
  `country` varchar(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `summary` text NOT NULL,
  `address` text NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `headline`, `country`, `city`, `phone`, `summary`, `address`, `userid`) VALUES
(1, 'fghdfgh', '', '', '', '', '', 5),
(2, 'Developer', 'Afghanista', 'Kjhkjhkjh', '+233 50 137 7037', 'gkjagfs,jbdfg.kjbsdf.kgb.sfdgsdfgsdfg', 'sdfgsdfgsdfgsdfgsfdfsgsdvzxcvsefd', 6),
(3, 'lkjlkjlkj', 'United Sta', 'lkjalsdkjfl', 'lkjlkj', 'lkjlkj', 'lkjlkj', 3),
(4, 'sdfgsdfg', 'United Sta', 'sdfg', '0541186989', 'sdfgsdfg', 'sfdgsdfg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `verified` int(11) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `verified`, `usertype`, `date`, `code`) VALUES
(1, 'clem75', '423d75b7178fe5a93f93368589496c04', 'clement', 'koomson', 'ckoomson75@gmail.com', 0, '', '2020-06-05 10:24:04', '115415'),
(2, 'amos', '423d75b7178fe5a93f93368589496c04', 'amos', 'koomosn', 'ckoomson75@gmail.com', 1, 'client', '2020-06-05 10:24:04', '142865'),
(3, 'suraj44', '423d75b7178fe5a93f93368589496c04', 'Clement', 'Koomson', 'ckoomson75@gmail.com', 1, 'freelancer', '2020-06-05 10:24:04', '188825'),
(4, 'john35', '423d75b7178fe5a93f93368589496c04', 'John', 'Koomson', 'ckoomson75@gmail.com', 1, 'freelancer', '2020-06-05 10:24:04', '84815'),
(5, 'cle', '423d75b7178fe5a93f93368589496c04', 'clement', 'koomosn', 'ckoomson75@gmail.com', 0, 'client', '2020-06-05 10:24:04', '181405'),
(6, 'jebo', '423d75b7178fe5a93f93368589496c04', 'John', 'Jebp', 'ckoomson75@gmail.com', 1, 'client', '2020-06-05 10:24:04', '30645'),
(7, 'swift', '423d75b7178fe5a93f93368589496c04', 'clement', 'koomson', 'ckoomson75@gmail.com', 1, 'freelancer', '2020-06-05 10:24:04', '243505ed8d0c4ba700');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_posted`
--
ALTER TABLE `job_posted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_posted`
--
ALTER TABLE `job_posted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
