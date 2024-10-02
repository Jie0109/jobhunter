-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 02:10 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobhunter`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `aid` int(9) NOT NULL,
  `userid` int(9) DEFAULT NULL,
  `resume` int(9) DEFAULT NULL,
  `jobid` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`aid`, `userid`, `resume`, `jobid`) VALUES
(500000013, 100000002, 400000005, 200000010);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(9) NOT NULL,
  `cname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`) VALUES
(300000002, 'Systems Analyst'),
(300000003, 'Database Administrator'),
(300000004, 'Software Engineer'),
(300000005, 'Business Analyst'),
(300000006, 'Computer Support Specialist'),
(300000007, 'IT Coordinator'),
(300000008, 'Cybersecurity'),
(300000009, 'Software Architect'),
(300000010, 'Web Developer'),
(300000011, 'Data Scientist'),
(300000012, 'Software Developer'),
(300000013, 'Network Engineer'),
(300000014, 'Network Administrator'),
(300000015, 'User Experience Designer'),
(300000016, 'Cloud Engineer'),
(300000017, 'Information Security Analyst'),
(300000018, 'IT Technician'),
(300000019, 'Computer and Information System Manager'),
(300000020, 'Computer Programmer'),
(300000021, 'IT Security Specialist'),
(300000022, 'QA Analyst'),
(300000023, 'Sales Engineer'),
(300000024, 'IT Support');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `logo_path` varchar(255) DEFAULT NULL,
  `company_address` varchar(255) DEFAULT NULL,
  `contact_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employers_uploads`
--

CREATE TABLE `employers_uploads` (
  `id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `resume_id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(100) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `logo_path` varchar(255) DEFAULT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_description` text DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `degree_requirements` text DEFAULT NULL,
  `date_posted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jid` int(9) NOT NULL,
  `jname` varchar(255) DEFAULT NULL,
  `jtype` varchar(255) DEFAULT NULL,
  `jcate` varchar(255) DEFAULT NULL,
  `jadd` varchar(255) DEFAULT NULL,
  `jminsalary` float DEFAULT NULL,
  `jmaxsalary` float DEFAULT NULL,
  `jlevel` varchar(255) DEFAULT NULL,
  `jexp` varchar(255) DEFAULT NULL,
  `jemail` varchar(255) DEFAULT NULL,
  `jphone` varchar(255) DEFAULT NULL,
  `jtime` varchar(255) DEFAULT NULL,
  `jdesc` varchar(255) DEFAULT NULL,
  `jlogo` varchar(255) DEFAULT NULL,
  `jcomname` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `posted` int(9) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jid`, `jname`, `jtype`, `jcate`, `jadd`, `jminsalary`, `jmaxsalary`, `jlevel`, `jexp`, `jemail`, `jphone`, `jtime`, `jdesc`, `jlogo`, `jcomname`, `time`, `posted`, `status`) VALUES
(200000002, 'Software Developer', 'Full Time', 'Software Engineer', '12345 EG', 2500, 3000, 'Diploma', '2 Year', 'liyuguangjie@gmail.com', '60182929876', '12hr per day', 'testsetset', '666.png', 'Infineon', '2024-06-04 01:36:29', 100000001, 'Online'),
(200000003, 'Business Analyst', 'Part Time', 'Business Analyst', 'JB, 666', 2500, 3000, 'Diploma', '2 Year', '123123@gmail.com', '01158892164', '7hours, and 6 day a week', 'test', 'depositphotos_449066958-stock-photo-financial-accounting-logo-financial-logo.jpg', 'Texas', '2024-06-04 01:42:57', 100000001, 'Online'),
(200000004, 'Network Engineer', 'Full Time', 'Network Engineer', 'sb,kl', 2500, 3000, 'Degree', '2 Year', 'sb@gmail.com', '60123456789', '3pm-10pm', 'data communication', '123123123123.jpeg', 'Starbucks', '2024-06-04 19:11:39', 100000004, 'Online'),
(200000005, 'Security IT', 'Part Time', 'Cybersecurity', '123, singapore', 5000, 6000, 'Degree', '3 Year', 'mmm@gmail.com', '60123123123', '9am-10pm', 'network security prof', '123123.png', 'MnM', '2024-06-04 19:16:50', 100000004, 'Online'),
(200000008, 'Software Developer', 'Full Time', 'Computer Programmer', '666,CHiina', 3500, 4500, 'Degree', '3 Year', 'wzry@gmail.com', '601234564564', '12pm-10pm', 'creative, design, leader', 'wzry.jpg', 'WZRY', '2024-06-05 23:16:15', 100000001, 'Online'),
(200000009, 'IT Tech', 'Full Time', 'IT Technician', '123,w3', 800, 1000, 'Diploma', '1 Year', 'w3@gmail.com', '60123456789', '7hours, and 6 day a week', 'w3', 'w3.png', 'W3Schools', '2024-06-06 00:29:20', 100000001, 'Online'),
(200000010, 'IT Admin', 'Part Time', 'IT Coordinator', '213.wqe', 2300, 2800, 'None', '1 Year', 'liyuguangjie@gmail.com', '612312312312', '9am-10pm', '123123', 'ccccc.jpg', 'CoC', '2024-06-06 17:39:18', 100000001, 'Online');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `rid` int(9) NOT NULL,
  `uids` int(9) DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`rid`, `uids`, `resume`, `type`) VALUES
(400000005, 100000002, 'Course Structure.pdf', 'pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pw` varchar(255) DEFAULT NULL,
  `mode` varchar(255) DEFAULT NULL,
  `place` varchar(255) DEFAULT NULL,
  `salary` float DEFAULT NULL,
  `ocup` varchar(255) DEFAULT NULL,
  `otp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `pw`, `mode`, `place`, `salary`, `ocup`, `otp`) VALUES
(100000001, 'guangjie', 'liyuguangjie@gmail.com', '123123', NULL, 'com', NULL, NULL, NULL, '172159'),
(100000002, 'yf', '123@gmail.com', '123123', '$2y$10$pOOls7jnqf9qZanB/HCM9O/e3avHX9Hjy1qQ48YvUGDI6CoNFFSqq', 'user', 'Melaka', 3500, 'Student', NULL),
(100000003, 'rex', 'jie@gmail.com', '123123', '$2y$10$V4leOpnpO7lB/Vr/3tFjS..AWW4K8zZrq11qkp8dgyzefKjwWdCBO', 'user', 'Johor Bahru', 3000, 'Web Designer', NULL),
(100000004, 'gege', 'gege@gmail.com', '123123', '$2y$10$ZAb7yGF/em6tCN/qs/.bZeNbEgrmtK39KaHqYwNb1IysRRo7RVSfS', 'user', NULL, NULL, NULL, NULL),
(100000005, 'ts', '12@gmail.com', '123123', '$2y$10$p3C6bC9TXKd9ZJwObX2LEeRUireitdqwrw6rNvbAosO.WSnDYHsGm', 'com', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_uploads`
--

CREATE TABLE `users_uploads` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(100) NOT NULL,
  `file_size` int(11) NOT NULL,
  `upload_date` datetime NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `document` tinyint(1) DEFAULT 0,
  `video` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `jobid` (`jobid`),
  ADD KEY `resume` (`resume`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_email` (`email`);

--
-- Indexes for table `employers_uploads`
--
ALTER TABLE `employers_uploads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employer_id` (`employer_id`),
  ADD KEY `resume_id` (`resume_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jid`),
  ADD KEY `posted` (`posted`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `uids` (`uids`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_email` (`email`);

--
-- Indexes for table `users_uploads`
--
ALTER TABLE `users_uploads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `aid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=500000014;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300000025;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employers_uploads`
--
ALTER TABLE `employers_uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200000012;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `rid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=400000014;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000006;

--
-- AUTO_INCREMENT for table `users_uploads`
--
ALTER TABLE `users_uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicant`
--
ALTER TABLE `applicant`
  ADD CONSTRAINT `applicant_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `applicant_ibfk_2` FOREIGN KEY (`jobid`) REFERENCES `job` (`jid`),
  ADD CONSTRAINT `applicant_ibfk_3` FOREIGN KEY (`resume`) REFERENCES `resume` (`rid`);

--
-- Constraints for table `employers_uploads`
--
ALTER TABLE `employers_uploads`
  ADD CONSTRAINT `employers_uploads_ibfk_1` FOREIGN KEY (`employer_id`) REFERENCES `employers` (`id`),
  ADD CONSTRAINT `employers_uploads_ibfk_2` FOREIGN KEY (`resume_id`) REFERENCES `users_uploads` (`id`);

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`posted`) REFERENCES `users` (`id`);

--
-- Constraints for table `resume`
--
ALTER TABLE `resume`
  ADD CONSTRAINT `resume_ibfk_1` FOREIGN KEY (`uids`) REFERENCES `users` (`id`);

--
-- Constraints for table `users_uploads`
--
ALTER TABLE `users_uploads`
  ADD CONSTRAINT `users_uploads_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
