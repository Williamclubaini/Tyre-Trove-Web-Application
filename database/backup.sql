-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 10:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;
--
CREATE DATABASE `tyretrove`;
--
-- --------------------------------------------------------
--
-- Table structure for table `about_tbl`
--
CREATE TABLE `about_tbl` (
  `id` int(11) NOT NULL,
  `about_us` varchar(500) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Dumping data for table `about_tbl`
--
INSERT INTO `about_tbl` (`id`, `about_us`)
VALUES (
    1,
    'We are a trusted supplier and distributor of Motorcycles, different brands of Tyres and Motor vehicle accessories as well as operating a Tyre Fitment Centre where we offer Tyre fitting, Wheel Balancing and Wheel Alignment and furthermore, provide servicing of Motor vehicles and Motorcycles with genuine service and spare.\r\n\r\nWe provides its services to different organizations, both private and public and is well known for our inclusive pricing structure.'
  );
-- --------------------------------------------------------
--
-- Table structure for table `appointments_tbl`
--
CREATE TABLE `appointments_tbl` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `visit_day` varchar(13) NOT NULL,
  `servicing` varchar(255) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Dumping data for table `appointments_tbl`
--
INSERT INTO `appointments_tbl` (
    `id`,
    `user_id`,
    `vehicle`,
    `visit_day`,
    `servicing`,
    `problem`,
    `status`,
    `Date`
  )
VALUES (
    1,
    3,
    'Car',
    'Monday',
    'Engine',
    'Engine',
    'Pending',
    '2022-04-01 15:21:40'
  ),
  (
    2,
    3,
    'Car',
    'Monday',
    'Engine',
    'Products',
    'Pending',
    '2022-04-01 16:22:54'
  ),
  (
    3,
    2,
    'Bus',
    'Thursday',
    'Engine',
    '$this->windowLocation(\'index.php?page=settings\');',
    'Approved',
    '2022-04-11 14:42:28'
  );
-- --------------------------------------------------------
--
-- Table structure for table `contact_us_tbl`
--
CREATE TABLE `contact_us_tbl` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Dumping data for table `contact_us_tbl`
--
INSERT INTO `contact_us_tbl` (`id`, `fullname`, `email`, `subject`, `message`)
VALUES (
    1,
    'Benson Mwamadi',
    'lubainiwcn@gmail.com',
    'JOB APPLICATION',
    'JOB APPLICATION'
  ),
  (
    2,
    'Benson Mwamadi',
    'lubainiwcn@gmail.com',
    'Database Administrator Position',
    'Database Administrator Position'
  );
-- --------------------------------------------------------
--
-- Table structure for table `faq_tbl`
--
CREATE TABLE `faq_tbl` (
  `id` int(20) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(355) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Dumping data for table `faq_tbl`
--
INSERT INTO `faq_tbl` (`id`, `question`, `answer`)
VALUES (
    1,
    ' What are other functions of users for this application?',
    'Users can be able to create their own account, can be able to change password and delete their account.'
  ),
  (
    2,
    'Is my sensitive data secure?',
    'Our users are allowed to use strong and unique passwords and registration will take place: \r\nthis will help to prevent hackers from hacking users account and also hard to easily access users account. We also use Password encryption to completely block hackers from cracking this passwords. Our methods of password encryption will remain undisclosed.'
  ),
  (
    3,
    'What are payment methods Tyre Trove offers?',
    'All our payment that are offered are elaborated in the following page <b>Features > payment methods </b> in our website\'s footer. Please click the link to see our payment methods.'
  ),
  (
    4,
    'Can I be able to buy two or more items at a time?',
    'We are using a shopping cart system which give you the ability to add more and more items in it without limit.'
  ),
  (
    14,
    'Is it safe to come directly and purchase to us?',
    'This question is not answered yet. Please bear with us will soon reply to your question'
  ),
  (
    15,
    'What are other functions of users for this application?',
    'This question is not answered yet. Please bear with us will soon reply to your question'
  );
-- --------------------------------------------------------
--
-- Table structure for table `loginattempts_tbl`
--
CREATE TABLE `loginattempts_tbl` (
  `id` int(11) NOT NULL,
  `attempt` int(4) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
-- --------------------------------------------------------
--
-- Table structure for table `products_tbl`
--
CREATE TABLE `products_tbl` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(128) NOT NULL,
  `price` double(10, 2) NOT NULL,
  `quantity` int(13) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Dumping data for table `products_tbl`
--
INSERT INTO `products_tbl` (`id`, `image`, `name`, `price`, `quantity`)
VALUES (1, '1.png', 'VX Car Fan', 800000.00, 9),
  (2, '2.png', 'Oil Pipes', 875000.00, 25),
  (3, '8.png', 'Yamaha motorcycle', 520000.00, 287),
  (4, '13.png', 'Battery 21VH', 400000.00, 0),
  (5, '10.png', 'Generator', 600000.00, 499),
  (6, '5.png', 'Hilux Brakes', 450000.00, 98),
  (
    7,
    '4.png',
    'Vida HV Benz Car-brakes',
    700000.00,
    7
  ),
  (
    8,
    '12.png',
    'White small battery',
    520000.00,
    12
  );
-- --------------------------------------------------------
--
-- Table structure for table `purchase_records_tbl`
--
CREATE TABLE `purchase_records_tbl` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` double(10, 3) NOT NULL,
  `quantity` int(13) NOT NULL,
  `cost` double(10, 2) NOT NULL,
  `payment_method` varchar(20) NOT NULL,
  `credit_card_name` varchar(50) NOT NULL,
  `expiry_date` varchar(50) NOT NULL,
  `cardNumber` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Dumping data for table `purchase_records_tbl`
--
INSERT INTO `purchase_records_tbl` (
    `id`,
    `user_id`,
    `product_name`,
    `price`,
    `quantity`,
    `cost`,
    `payment_method`,
    `credit_card_name`,
    `expiry_date`,
    `cardNumber`,
    `date`
  )
VALUES (
    1,
    2,
    'Oil Pipes',
    875000.000,
    16,
    14000000.00,
    'on',
    'William C Lubaini',
    '2022-04-26',
    'aa54c31a8b04dcd47e5573ea07b3c886',
    '2022-04-11 10:49:21'
  ),
  (
    2,
    2,
    'VX Car Fan',
    800000.000,
    3,
    2400000.00,
    'on',
    'William C Lubaini',
    '2022-04-26',
    'aa54c31a8b04dcd47e5573ea07b3c886',
    '2022-04-11 10:49:21'
  ),
  (
    3,
    2,
    'Yamaha motorcycle',
    520000.000,
    1,
    520000.00,
    'on',
    'William C Lubaini',
    '2022-04-26',
    'aa54c31a8b04dcd47e5573ea07b3c886',
    '2022-04-11 10:49:21'
  ),
  (
    4,
    2,
    'Yamaha motorcycle',
    520000.000,
    200,
    99999999.99,
    'credit card',
    'William C Lubaini',
    '2022-04-26',
    '880d81abdaea388cbf62ebf518bd4966',
    '2022-04-11 14:31:13'
  ),
  (
    5,
    2,
    'Battery 21VH',
    400000.000,
    8,
    3200000.00,
    'credit card',
    'William C Lubaini',
    '2022-04-26',
    '880d81abdaea388cbf62ebf518bd4966',
    '2022-04-11 14:31:14'
  );
-- --------------------------------------------------------
--
-- Table structure for table `shipping_tbl`
--
CREATE TABLE `shipping_tbl` (
  `id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(50) NOT NULL,
  `postal_code` varchar(50) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Dumping data for table `shipping_tbl`
--
INSERT INTO `shipping_tbl` (
    `id`,
    `customer_id`,
    `city`,
    `state`,
    `postal_code`,
    `Date`
  )
VALUES (
    1,
    2,
    'Blantyre',
    'Biwi',
    '1234DCV',
    '2022-04-11 10:49:49'
  ),
  (
    2,
    2,
    'Blantyre',
    'Chitawira',
    'Phekani Road',
    '2022-04-11 14:33:14'
  );
-- --------------------------------------------------------
--
-- Table structure for table `users_tbl`
--
CREATE TABLE `users_tbl` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` int(10) NOT NULL,
  `registerDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Dumping data for table `users_tbl`
--
INSERT INTO `users_tbl` (
    `id`,
    `firstname`,
    `lastname`,
    `contact`,
    `email`,
    `location`,
    `password`,
    `usertype`,
    `registerDate`
  )
VALUES (
    1,
    'Ernest',
    'Matewere',
    '+265884657373',
    'ernestmatewere@gmail.com',
    'Blantyre',
    '66ae5e9d7811b5d3c80cd16e95870c01',
    0,
    '2022-03-06 10:50:48'
  ),
  (
    2,
    'William C.',
    'Lubaini',
    '0992263424',
    'lubainiwcn@gmail.com',
    'Biwi',
    '59b71f541c9c7d77a1f9f69ef1bf15ea',
    1,
    '2022-04-11 09:37:12'
  ),
  (
    3,
    'William',
    'Lubaini',
    '0992263424',
    'lubainiwc@codewriter.co.mw',
    'Biwi',
    '59b71f541c9c7d77a1f9f69ef1bf15ea',
    1,
    '2022-04-11 09:37:12'
  ),
  (
    4,
    'William',
    'William',
    '0992234343',
    'lubainiwc@gmail.com',
    'biwi',
    '59b71f541c9c7d77a1f9f69ef1bf15ea',
    1,
    '2022-04-11 09:37:12'
  ),
  (
    5,
    'Martha',
    'Thawi',
    '0993223123',
    'matrage@gmail.com',
    'Biwi',
    '59b71f541c9c7d77a1f9f69ef1bf15ea',
    1,
    '2022-04-11 09:37:12'
  );
--
-- Indexes for dumped tables
--
--
-- Indexes for table `about_tbl`
--
ALTER TABLE `about_tbl`
ADD PRIMARY KEY (`id`);
--
-- Indexes for table `appointments_tbl`
--
ALTER TABLE `appointments_tbl`
ADD PRIMARY KEY (`id`);
--
-- Indexes for table `contact_us_tbl`
--
ALTER TABLE `contact_us_tbl`
ADD PRIMARY KEY (`id`);
--
-- Indexes for table `faq_tbl`
--
ALTER TABLE `faq_tbl`
ADD PRIMARY KEY (`id`);
--
-- Indexes for table `loginattempts_tbl`
--
ALTER TABLE `loginattempts_tbl`
ADD PRIMARY KEY (`id`);
--
-- Indexes for table `products_tbl`
--
ALTER TABLE `products_tbl`
ADD PRIMARY KEY (`id`);
--
-- Indexes for table `purchase_records_tbl`
--
ALTER TABLE `purchase_records_tbl`
ADD PRIMARY KEY (`id`);
--
-- Indexes for table `shipping_tbl`
--
ALTER TABLE `shipping_tbl`
ADD PRIMARY KEY (`id`);
--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `about_tbl`
--
ALTER TABLE `about_tbl`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 2;
--
-- AUTO_INCREMENT for table `appointments_tbl`
--
ALTER TABLE `appointments_tbl`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 4;
--
-- AUTO_INCREMENT for table `contact_us_tbl`
--
ALTER TABLE `contact_us_tbl`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 3;
--
-- AUTO_INCREMENT for table `faq_tbl`
--
ALTER TABLE `faq_tbl`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 16;
--
-- AUTO_INCREMENT for table `loginattempts_tbl`
--
ALTER TABLE `loginattempts_tbl`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products_tbl`
--
ALTER TABLE `products_tbl`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 10;
--
-- AUTO_INCREMENT for table `purchase_records_tbl`
--
ALTER TABLE `purchase_records_tbl`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 6;
--
-- AUTO_INCREMENT for table `shipping_tbl`
--
ALTER TABLE `shipping_tbl`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 3;
--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 6;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;