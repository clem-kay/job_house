-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2020 at 03:24 PM
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
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`id`, `username`, `password`) VALUES
(1, 'clem', '423d75b7178fe5a93f93368589496c04'),
(2, 'su', '423d75b7178fe5a93f93368589496c04');

-- --------------------------------------------------------

--
-- Table structure for table `appliedjob`
--

CREATE TABLE `appliedjob` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `freelancer_id` int(10) NOT NULL,
  `jobid` int(11) NOT NULL,
  `client_id` int(10) NOT NULL,
  `applied_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `approved` int(1) NOT NULL DEFAULT '0',
  `accepted` int(1) DEFAULT '0',
  `approved_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `paid` int(1) NOT NULL,
  `paid_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appliedjob`
--

INSERT INTO `appliedjob` (`id`, `comment`, `freelancer_id`, `jobid`, `client_id`, `applied_date`, `approved`, `accepted`, `approved_date`, `paid`, `paid_date`) VALUES
(10, 'I can do this job', 12, 13, 13, '2020-06-08 23:35:04', 1, 1, '2020-06-08 23:35:04', 0, NULL),
(11, ' I ca do that', 12, 14, 13, '2020-06-08 23:40:48', 1, 1, '2020-06-08 23:40:48', 0, NULL),
(12, ' I can do the job\r\n', 12, 15, 13, '2020-06-10 11:23:32', 1, 1, '2020-06-10 11:23:32', 0, NULL),
(13, ' I can do the job', 12, 15, 13, '2020-06-10 23:58:15', 0, 1, '2020-06-10 23:58:15', 0, NULL);

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
(4, 'Networking'),
(5, 'Design'),
(6, 'Development'),
(7, 'Writing'),
(8, 'VoiceOver'),
(9, 'Video'),
(10, 'Research'),
(11, 'Data Science'),
(12, 'Security');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(10) NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `sender` varchar(20) NOT NULL,
  `receiver` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `date`, `sender`, `receiver`, `message`) VALUES
(5, '2020-06-08 23:10:47', 'Clem75', 'John', ' Hello You there'),
(6, '2020-06-10 14:27:11', 'John', 'Clem75', ' Hello');

-- --------------------------------------------------------

--
-- Table structure for table `freview`
--

CREATE TABLE `freview` (
  `id` int(10) NOT NULL,
  `client_id` int(10) NOT NULL,
  `freelancer_id` int(10) NOT NULL,
  `stars` int(1) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freview`
--

INSERT INTO `freview` (`id`, `client_id`, `freelancer_id`, `stars`, `comment`) VALUES
(1, 13, 12, 5, 'He is very good');

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
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `closed` int(1) NOT NULL DEFAULT '0',
  `completed` int(1) NOT NULL DEFAULT '0',
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_posted`
--

INSERT INTO `job_posted` (`id`, `job_title`, `job_category`, `job_type`, `budget`, `description`, `created_date`, `closed`, `completed`, `user_id`) VALUES
(13, 'Online Development', 'Development', 'Short Term', 850, ' need a serious developer no messing around. I have a store and I want to make a site to take orders online and it must be printed to a pos printer.\r\nHome Button. A couple of pics and some info.\r\nContact us. Map and some details of the business.\r\nOrder Button. Click on the items and ordering them.\r\nWe should get the order and alarm and accept and reject the order also in the backend how much is made and how much is cash and how much is card payment.\r\nWe need to have a daily report.', '2020-06-08 23:34:24', 1, 1, 13),
(14, 'Gaming', 'Development', 'Long Term', 1500, ' Hi There\r\nLooking to build a playable games demo for an open world format type game, would need high level PC style / PS4 type 3D quality to build a playable mission within the game.\r\nMust have experience developing PS4 Games or similar quality\r\nGrand Theft Audo V is a good reference point\r\nPlease do not send mobile level quality examples', '2020-06-08 23:39:51', 1, 1, 13),
(15, 'Word Press', 'IT', 'Short Term', 850, ' I need an experienced word press freelancer who can dedicatedly, continuously work on my half completed word press website projects, and make it completed ASAP. 5 projects and 5 days, each day one project must be completed. The Freelancer needs to look for missing things on the websites which should be upgraded. He or she needs to work through any desk or any other time tracker as this is an hourly rate based project', '2020-06-09 08:04:41', 1, 0, 13),
(16, 'IT', 'IT', 'Short Term', 1200, ' need a serious developer no messing around. I have a store and I want to make a site to take orders online and it must be printed to a pos printer. Home Button. A couple of pics and some info. Contact us. Map and some details of the business. Order Button. Click on the items and ordering them. We should get the order and alarm and accept and reject the order also in the backend how much is made and how much is cash and how much is card payment. We need to have a daily report.', '2020-06-09 11:55:39', 0, 0, 13),
(17, 'Voice Over', 'VoiceOver', 'Long Term', 1500, '  I need an experienced word press freelancer who can dedicatedly, continuously work on my half completed word press website projects, and make it completed ASAP. 5 projects and 5 days, each day one project must be completed. The Freelancer needs to look for missing things on the websites which should be upgraded. He or she needs to work through any desk or any other time tracker as this is an hourly rate based project', '2020-06-10 23:38:07', 0, 0, 13),
(18, 'Video Editing', 'Video', 'Short Term', 500, '  I need an experienced word press freelancer who can dedicatedly, continuously work on my half completed word press website projects, and make it completed ASAP. 5 projects and 5 days, each day one project must be completed. The Freelancer needs to look for missing things on the websites which should be upgraded. He or she needs to work through any desk or any other time tracker as this is an hourly rate based project', '2020-06-10 23:38:42', 0, 0, 13),
(19, 'Voice Over', 'Data Science', 'Short Term', 520, '  I need an experienced word press freelancer who can dedicatedly, continuously work on my half completed word press website projects, and make it completed ASAP. 5 projects and 5 days, each day one project must be completed. The Freelancer needs to look for missing things on the websites which should be upgraded. He or she needs to work through any desk or any other time tracker as this is an hourly rate based project', '2020-06-10 23:39:01', 0, 0, 13),
(20, 'Voice Over', 'Security', 'Short Term', 4500, ' I need an experienced word press freelancer who can dedicatedly, continuously work on my half completed word press website projects, and make it completed ASAP. 5 projects and 5 days, each day one project must be completed. The Freelancer needs to look for missing things on the websites which should be upgraded. He or she needs to work through any desk or any other time tracker as this is an hourly rate based project ', '2020-06-10 23:39:18', 0, 0, 13),
(21, 'Voice Over', 'Research', 'Short Term', 785, '  I need an experienced word press freelancer who can dedicatedly, continuously work on my half completed word press website projects, and make it completed ASAP. 5 projects and 5 days, each day one project must be completed. The Freelancer needs to look for missing things on the websites which should be upgraded. He or she needs to work through any desk or any other time tracker as this is an hourly rate based project', '2020-06-10 23:39:34', 0, 0, 13),
(23, 'Website', 'IT', 'Short Term', 500, 'Wordpress Website Wordpress WebsiteWordpress WebsiteWordpress WebsiteWordpress WebsiteWordpress WebsiteWordpress WebsiteWordpress WebsiteWordpress WebsiteWordpress WebsiteWordpress WebsiteWordpress WebsiteWordpress WebsiteWordpress Website', '2020-06-12 17:00:33', 0, 0, 13);

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
(3, 'Sketches', 'http://localhost:8012/jobhouse/portfolio.php', 'I am very passionate about painting on walls', 'upload/Capture.PNG', 12),
(4, 'Programming Contract', 'http://localhost:8012/jobhouse/portfolio.php', 'I am able to program both front end and back end', 'upload/Capture2.PNG', 12);

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
(10, 'Developer', 'Ghana (Gaa', 'Accra', '0541186989', 'I would like to get nice designs', 'P.O.Box Mc 2303', 12),
(11, 'Branding Agency', 'United Kin', 'Ireland', '0541186989', 'Interested in Good Branding', 'London bridge', 13),
(12, 'Developer', 'Ghana (Gaa', 'Accra', '0501377037', 'I am in for everything good', 'P.T. 305, Accra', 14),
(13, 'Designer', 'Gambia', 'Antartica', '0541186989', 'I like to see thing working', 'P.T. 305 takoradi', 19);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(10) NOT NULL,
  `client_id` int(10) NOT NULL,
  `frelancer_id` int(10) NOT NULL,
  `stars` int(1) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `client_id`, `frelancer_id`, `stars`, `comment`) VALUES
(1, 13, 12, 5, 'He is too good'),
(2, 13, 12, 1, 'ghghgg');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `jobid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `client_id`, `jobid`, `amount`, `date`) VALUES
(1, 13, 13, 850, '2020-06-11 10:01:04'),
(2, 13, 13, 850, '2020-06-11 10:03:21'),
(3, 13, 14, 1500, '2020-06-11 10:37:48'),
(4, 13, 14, 1500, '2020-06-11 10:38:30'),
(5, 13, 15, 1063, '2020-06-11 10:56:15');

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
  `email` varchar(200) NOT NULL,
  `verified` int(11) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `verified`, `usertype`, `date`, `code`) VALUES
(12, 'Clem75', '423d75b7178fe5a93f93368589496c04', 'Clement', 'Koomson', 'ckoomson75@gmail.com', 1, 'freelancer', '2020-06-08 22:04:41', '121005edeb5f9af0a5'),
(13, 'John', '423d75b7178fe5a93f93368589496c04', 'John', 'Koomson', 'jkoomson75@gmail.com', 1, 'client', '2020-06-08 22:57:53', '132695edec2715c667'),
(14, 'Edwin', '423d75b7178fe5a93f93368589496c04', 'Edwin', 'Akwandoh', 'eakwandoh@gmail.com', 1, 'client', '2020-06-11 21:23:36', '238765ee2a0d86a713'),
(15, 'amos', '423d75b7178fe5a93f93368589496c04', 'amos', 'koomson', 'amoskoomson75@yahoo.com', 1, 'client', '2020-06-12 06:23:15', '164225ee31f5386584'),
(16, 'amos', '423d75b7178fe5a93f93368589496c04', 'amos', 'koomson', 'akoomson75@gmail.com', 1, 'freelancer', '2020-06-12 09:55:58', '123456754'),
(19, 'andrew', '423d75b7178fe5a93f93368589496c04', 'Andrew', 'Mensah', 'anmensah@gmail.com', 1, 'freelancer', '2020-06-12 16:09:36', '156715ee3a8c0cb596');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appliedjob`
--
ALTER TABLE `appliedjob`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `freview`
--
ALTER TABLE `freview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_posted`
--
ALTER TABLE `job_posted`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
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
-- AUTO_INCREMENT for table `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appliedjob`
--
ALTER TABLE `appliedjob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `freview`
--
ALTER TABLE `freview`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_posted`
--
ALTER TABLE `job_posted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job_posted`
--
ALTER TABLE `job_posted`
  ADD CONSTRAINT `job_posted_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `useraccount` (`id`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `useraccount` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
