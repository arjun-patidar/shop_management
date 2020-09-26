-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 04:26 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `customer_mobile` varchar(255) NOT NULL,
  `total_pay` float NOT NULL,
  `due_pay` float NOT NULL,
  `cash` float NOT NULL,
  `profileimage` varchar(255) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customer_name`, `product`, `customer_mobile`, `total_pay`, `due_pay`, `cash`, `profileimage`, `Date`) VALUES
(12, 'jayesh', 'crezy', '9981464646', 12000, 800, 400, '', '2020-09-14 10:04:54'),
(15, 'dfdsf', 'fsfsdf', '12121212121', 324, 34324, 344, '', '2020-09-13 02:53:13'),
(17, 'yyyy', '', '', 0, 0, 0, '', '2020-09-15 09:01:31'),
(18, 'sdfsdf', '', '', 0, 0, 0, '', '2020-09-15 14:08:54'),
(19, 'gfddfdf', '', '', 0, 0, 0, '', '2020-09-15 14:09:18'),
(20, 'dfgdfg', '', '', 0, 0, 0, '', '2020-09-15 14:09:21'),
(21, 'fgfdgfg', '', '', 0, 0, 0, '', '2020-09-15 14:09:24'),
(22, 'dfgdgfd', '', '', 0, 0, 0, '', '2020-09-15 14:09:27'),
(23, 'dfgdfgf', '', '', 0, 0, 0, '', '2020-09-15 14:09:29'),
(24, 'fgfdgdgf', '', '', 0, 0, 0, '', '2020-09-15 14:09:32'),
(25, 'gdfgfdgdg', '', '', 0, 0, 0, '', '2020-09-15 14:09:34'),
(26, 'fdgdfgdgdfg', '', '', 0, 0, 0, '', '2020-09-15 14:09:38'),
(27, 'gdfggd', '', '', 0, 0, 0, '', '2020-09-15 14:09:41'),
(28, 'gdfgdfgg', '', '', 0, 0, 0, '', '2020-09-15 14:09:43'),
(29, 'gs', 'hfhfh', '', 12, 32, 323, '', '2020-09-15 14:51:01'),
(30, 'a', 'b', '', 1, 2, 3, '', '2020-09-16 06:41:08'),
(31, 'b', 'a', '', 3, 2, 1, '', '2020-09-16 06:41:20'),
(32, 'm', 'x', '', 6, 2, 4, '', '2020-09-16 06:41:34'),
(33, 'rajesh', 'vikas', '3434343434', 1200, 120, 120, '', '2020-09-16 13:42:14'),
(34, ';lala patel', '', '', 0, 0, 0, '', '2020-09-16 13:43:14'),
(35, 'afas', 'he', '', 0, 0, 0, '', '2020-09-16 13:51:33'),
(36, 'daqfggggggggg', 'fasxa', '', 0, 0, 0, '', '2020-09-16 13:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `varification_key` varchar(255) NOT NULL,
  `is_email_varified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`, `varification_key`, `is_email_varified`) VALUES
(1, 'arjun', 'radhe@gmail.com', 'UTADYAIyVmYNNw==', '286ccfc00efec88c6dd3e9e38f8b3c81', ''),
(2, 'arjun', 'dsd@gmail.com', 'AwZWclgQViEJMFQ6CR1RblUyBDJTPA8IURZbQVYX', 'b2cf0e6b57e290307812f9f0cef82256', ''),
(5, 'arjun', 'patidafsrfra43@gmail.com', 'UldZfQVNA3QNNFU7CBxUa1cwBjBXOAMECk0PFV4f', 'c7f55e25f4268ad149643c5b3a0ac0c5', ''),
(6, 'arjun', 'patidafsrdfra43@gmail.com', 'BAFRdVcfAnVaY1c5AhZUawBnBjAPYAcABkFeRABB', '949cc9a03058f086f11ea4ba3489ab2d', ''),
(7, 'arjun', 'patidafdsrdfra43@gmail.com', 'V1IDJ1QcUSYLMgRqBBAFOlE2BjABblRTVxABG1UU', 'a3feee7264e6405698c4185162bbbc69', ''),
(8, 'arjun', 'patidafdwsrdfra43@gmail.com', 'VVAHI1kRB3BaYwFvVkJTbFcwATdUO1RTVRJaQFYX', '04958575e3e900365899901947366a03', ''),
(9, 'arjun', 'patisdafdwsrdfra43@gmail.com', 'AQRXc1EZB3BcZVI8UkYHOFQzBTMPYFFWCk1ZQwRF', '0939bd085c2915b938aabcb5b7a72393', ''),
(10, 'arjun', 'patisdafdrrwsrdfra43@gmail.com', 'AwYFIVgQB3APNlM9BBAGOVYxV2FSPQAHVRIPFQdG', 'c62d135d1a02baa3f3f7da80b167452c', ''),
(11, 'arjun', 'patisdafdwsrddfra43@gmail.com', 'VVBXcwVNCX4ON1U7VEAEOwViUGYGaQcAC0wBG1AR', 'de1cc103a11da1a3ce0335731a93fb53', ''),
(12, 'arjun', 'patisdafddwsrddfra43@gmail.com', 'AQQFIQRMCX4BOFM9CR0FOgViATdSPQAHURYOFF8e', '015b35313818707a29bda58ce2bcf306', ''),
(13, 'arjun', 'patidara43@gmail.com', 'BAFYfANLB3BZYFE/CBwHOAJlADYOYQ8IBEMBG1QV', '09974d0377b74ed220038dc7b429fa86', ''),
(14, 'vishal', 'a43@gmail.com', 'VzZUN1hoBjZeZA==', 'b00fb3ff99bd3909a69e92d738a68b4c', ''),
(15, 'admin', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `retailer`
--

CREATE TABLE `retailer` (
  `retailer_id` int(11) NOT NULL,
  `retailer_name` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `retailer_mobile` varchar(255) NOT NULL,
  `total_pay` varchar(255) NOT NULL,
  `due_pay` varchar(255) NOT NULL,
  `cash` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `retailer`
--

INSERT INTO `retailer` (`retailer_id`, `retailer_name`, `product`, `retailer_mobile`, `total_pay`, `due_pay`, `cash`, `date`) VALUES
(7, 'fdsfsf', 'dsfdsfdfd', '', '3454', '54545', '454', '2020-09-13 10:35:31'),
(9, '43535', '43543535', '435435', '435435', '45354', '43535', '2020-09-13 10:35:46'),
(10, '435435', '4354354', '4355', '435435', '543535', '435435', '2020-09-13 10:35:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(4, 'payal', 'ratnawatpayal15@gmail.com', '8d0bb5c6f8620e9e31d8c5694735ed3c2b4a0c6ca1f3a0bd224c950bced4b87c80860172f818209a6d643710f79520f8957c30d12bca282fa73bd1abc6ec7bb7O5QfJHmY2XQapujso/eQynF+fhmX+Nug5ThaXtxgwKA='),
(5, 'payal', 'ratnawatpayal15@gmail.com', 'c7ba4b87eee92b93c041bfda767e766e907b83286fd43a28cec7b4dbf509decae237df209c7d43da5fdea2ae4848c16a3c20c587b1b1e707802b755aa6c586a0AgUpzC4M447m1g1lEYM5qGZxYJUqPZ5rE/zeVNW5DYk='),
(7, 'arjun', 'admin', '827ccb0eea8a706c4c34a16891f84e7b'),
(8, 'rina', 'rina', '3aea9516d222934e35dd30f142fda18c'),
(9, 'radhe', 'radhe', 'fad1baf6464b5da8f87896439ca2de03'),
(10, 'arjun', 'patel', '64a43b6ca15d128ac6a0679b39bc9c07'),
(11, 'abc', 'abc', '900150983cd24fb0d6963f7d28e17f72'),
(12, 'abcd', 'abcd', 'e2fc714c4727ee9395f324cd2e7f331f'),
(13, 'acd', 'acd', '37029430cfd06ae2a279cc1e2504e7c3'),
(14, 'aj', 'ja', 'e5bb23797bfea314a3db43d07dbd6a74'),
(15, 'abc', 'abc', '900150983cd24fb0d6963f7d28e17f72'),
(16, 'dsd', 'dsf', '4ec503be252d765ea37621a629afdaa6'),
(17, 'qe', 'wew', 'ff1ccf57e98c817df1efcd9fe44a8aeb'),
(18, 'asds', 'fdf', 'f31a81e91afdcf0b84dfee82ec2fb196'),
(19, 'ere', 'ret', '5fe8937e6fadb3c23c597828aef6fcbb'),
(20, 'dsfs', 'dsfds', '0fbe1ddfbc52dffd9e79649d4e3c0b29'),
(21, 'hddkfhk', 'sfsf', '202cb962ac59075b964b07152d234b70'),
(22, 'fdg', 'dfgdfg', '59568cfe524d650b50534fce6a491638'),
(23, 'arjun', 'arjun', '7626d28b710e7f9e98d9dfbe9bf0d123'),
(24, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(25, 'dfhdf', 'hdfhdf', '7606517b6f62538f9ad5d84832bf0930'),
(26, 'gdg', 'dfgd', 'e23815365a761e4b397ce30822a2d5bb'),
(27, 'rewer', 'werewr', '92439c70a1a29967c21a3e2fdc907f7a'),
(28, 'erw', 'ewrewr', 'e130e5e618f15cee7a519d8b7b8306a0'),
(29, 'qwewq', 'wqewq', '157eb9ce33644ada6d0499c1097c4f5d'),
(30, 'dfgdg', 'dfgdf', '8d509c28896865f8640f328f30f15721'),
(31, 'fsdf', 'dsf', 'd4b2758da0205c1e0aa9512cd188002a'),
(32, 'rwere', 'werwer', '70e80311305adf2ed2c23a1455c4eb72'),
(33, 'retet', 'rett', 'cef6a08ec3b91f4dcb02bc2472b5052d'),
(34, 'retret', 'retet', 'f1ec77bdca1b30e8153fc5da88f603db'),
(35, 'rteet', 'retret', 'cf700cf4bc224bdd97931666afc3268e'),
(36, 'rete', 'retret', 'f1ec77bdca1b30e8153fc5da88f603db'),
(37, 'dfggfgg', 'dfggfg', 'c8f4837280210520857eeb259db2db6d'),
(38, 'fgdg', 'dfgdf', '8d509c28896865f8640f328f30f15721'),
(39, 'retretret', 'retret', 'f1ec77bdca1b30e8153fc5da88f603db'),
(40, 'ewtrwe', 'ewt', '026f8ab95e2f7493267fdea0fe224214'),
(41, 'jhghhg', 'ghjhg', 'e0b887b1066f2b3dd563b0a21095d7d0'),
(42, 'fdggfdgdfgd', 'fdgfgdfg', '5854ad1b38138d929b8bc40940e4fe5d'),
(43, 'retetre', 'retretrre', '3c1325af9c02d3af24c6d47984fcb9ed'),
(44, 'reer', 'werwer', '014f74ecc220c89e087f1b23963bc5fd'),
(45, 'dfss', 'fdsfd', 'd6e9c56d7f078d298ed4695d899effbe'),
(46, 'fdsfsdsds', 'dfdfddsfdsf', 'a29efb7b1c7e50ee9fee822658da8e25'),
(47, 'rtertet', 'retrt', 'ac3105ab43b7fc40b19f125ec5a46221');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `retailer`
--
ALTER TABLE `retailer`
  ADD PRIMARY KEY (`retailer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `retailer`
--
ALTER TABLE `retailer`
  MODIFY `retailer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
