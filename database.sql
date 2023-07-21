-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2023 at 08:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked_trips`
--

CREATE TABLE `booked_trips` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `persons` int(11) NOT NULL,
  `departure` date NOT NULL,
  `days` int(11) NOT NULL,
  `trip_name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked_trips`
--

INSERT INTO `booked_trips` (`id`, `user_name`, `persons`, `departure`, `days`, `trip_name`, `email`, `contact`) VALUES
(1, 'richa', 4, '2022-08-20', 6, 'Kiplings Playground Tiger', 'richa789@gmail.com', '7863540268'),
(2, 'richa', 5, '2022-10-14', 7, 'Church Tour Of South India', 'richa789@gmail.com', '7863540268'),
(4, 'richa', 6, '2022-10-08', 6, 'Devine Of Kashmir', 'richa789@gmail.com', '786543210'),
(5, 'Gracy', 4, '2022-10-08', 6, 'Luxury Backwater Tour Of Kerala', 'abcd123@gmail.com', '9862358310'),
(6, 'asdfg', 3, '2022-10-05', 3, 'Nainital With Queen Of Hills', 'dfg234@gmail.com', '7863540268');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(11) NOT NULL,
  `trip_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `duration` int(11) NOT NULL,
  `Booked` enum('yes','no') NOT NULL DEFAULT 'no',
  `Images` mediumtext NOT NULL,
  `View` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `trip_name`, `price`, `duration`, `Booked`, `Images`, `View`) VALUES
(1, 'Kiplings Playground Tiger', '9999', 10, 'yes', 'Wildlife/wildlife_tiger.jpg', 'WildlifePackage/kipling_tiger.php'),
(2, 'Lava And Neora Valley', '11999', 10, 'no', 'Wildlife/wildlie_bird.jpg', 'WildlifePackage/lavavalley.php'),
(3, 'Kaziranga Wildlife Tour', '14999', 5, 'no', 'Wildlife/wildlife_rhino.jpg', 'WildlifePackage/kaziranga.php'),
(4, 'Golden Triangle Tour', '9999', 7, 'no', 'Heritage/taj_mahal.jpg', 'HeritagePackage/goldentriangle.php'),
(5, 'Fort And Palaces Of Rajasthan', '19999', 10, 'no', 'Rajasthan/fort.jpg', 'HeritagePackage/fort.php'),
(6, 'Southern Heritage Tour', '16999', 9, 'no', 'Heritage/south.jpg', 'HeritagePackage/south.php'),
(7, 'Jagannath Dham Yatra', '9999', 7, 'no', 'Pilgrimage/temple.jpg', 'PilgrimagePackage/jagannath.php'),
(8, 'Hemkund Sahib Yatra', '10999', 7, 'no', 'Pilgrimage/hemkund_sahib.jpg', 'PilgrimagePackage/hemkundsahib.php'),
(9, 'Church Tour Of South India', '12999', 8, 'no', 'Kerala/church.jpg', 'PilgrimagePackage/church.php'),
(10, 'Nainital With Queen Of Hills', '14999', 7, 'no', 'Hill/nainital.jpg', 'HillPackage/nainital.php'),
(11, 'Manali Skiing Tour', '17999', 11, 'no', 'Himachal/skiing.jpg', 'HillPackage/manaliSkiing.php'),
(12, 'Munnar Hills Tour Package', '9999', 4, 'no', 'Kerala/munnar.jpg', 'HillPackage/munnar.php'),
(13, 'Brahmatal Trek', '10999', 6, 'no', 'Uttarakhand/trek.jpg', 'AdventurePackage/brahmataltrek.php'),
(14, 'Manali - Leh Overland Motor Bike Safari', '20999', 14, 'no', 'Himachal/bike.jpg', 'AdventurePackage/manalileh.php'),
(15, 'Shivpuri To Rishikesh River Rafting', '8999', 3, 'no', 'Uttarakhand/rafting.jpg', 'AdventurePackage/shivpuriRishikesh.php'),
(16, 'Mysore Goa Tour', '15999', 9, 'no', 'Beach/goa.jpg', 'BeachPackage/mysoreGoa.php'),
(17, 'Luxury Backwater Tour Of Kerala', '13999', 7, 'no', 'Kerala/kerala.jpg', 'BeachPackage/backwater.php'),
(18, 'Ratnagiri Beach Tour', '9999', 3, 'no', 'Beach/ratnagiri.jpg', 'BeachPackage/ratnagiri.php'),
(19, 'Rajasthan Rendezvous', '14999', 13, 'no', 'Rajasthan/rendezvous.jpg', 'RajasthanPackage/rendezvous.php'),
(20, 'Best Of Rajasthan', '14999', 11, 'no', 'Rajasthan/best.jpg', 'RajasthanPackage/best.php'),
(21, 'Shimla Toy Train Weekend Package', '9999', 3, 'no', 'Himachal/train.jpg', 'HimachalPackage/shimla.php'),
(22, 'Devine Of Kashmir', '13999', 7, 'no', 'Kashmir/divine.jpg', 'KashmirPackage/devine.php'),
(23, 'Kashmir Weekend Tour', '9999', 4, 'no', 'Kashmir/weekwnd.jpg', 'KashmirPackage/weekend.php'),
(24, 'Vaishno Devi Tour With Patnitop', '12999', 4, 'no', 'Kashmir/temple.jfif', 'KashmirPackage/vaishnodevi.php'),
(25, 'Mussoorie Rishikesh Tour', '13999', 4, 'no', 'Uttarakhand/mussoorie.jpg', 'UttarakhandPackage/mussoorie.php');

-- --------------------------------------------------------

--
-- Table structure for table `plantrip`
--

CREATE TABLE `plantrip` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `travel_date` date NOT NULL,
  `duration_of_stay` date NOT NULL,
  `persons` int(11) NOT NULL,
  `description` text NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plantrip`
--

INSERT INTO `plantrip` (`id`, `user_name`, `email`, `contact`, `travel_date`, `duration_of_stay`, `persons`, `description`, `country`) VALUES
(1, 'richa', 'richa789@gmail.com', '786543210', '2022-08-24', '2022-08-30', 4, 'qwe rtyu ioplk jhfgs', 'India'),
(2, 'chirayu', 'chirayu1000@gmail.com', '7029583931', '2022-08-25', '2022-09-03', 6, 'bsnm ndmklg msjry hfjksl asmdnj clkito cbvnmhjsk aewrtudi nbmkcjd ', 'India'),
(3, 'angad', 'angad2007@gmail.com', '8048267772', '2022-09-10', '2022-09-16', 2, 'qwe tyuu iioo asd f ghhjj xcvbn mmcxz ', 'India'),
(4, 'gracy', 'gracymitra@gmail.com', '9632147850', '2022-10-07', '2022-10-14', 2, 'ghjkbnm', 'India'),
(5, 'deepshi', 'dhingra19@gmail.com', '9873222440', '2022-10-28', '2022-11-04', 4, 'sdfgagjtyeqs', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` enum('male','female') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `phone`, `email`, `password`, `gender`) VALUES
(1, 'gracy', '9862358310', 'abcd123@gmail.com', 'abc#12', 'female'),
(2, 'richa', '786543210', 'richa789@gmail.com', 'ri#78', 'female'),
(4, 'asdfg', '7863540268', 'dfg234@gmail.com', '234@asd', 'male'),
(5, 'test', '8546320985', 'test3456@gmail.com', '345#test', 'male'),
(6, 'test2', '6893450128', 'test200@gmail.com', '2#$test', 'male'),
(7, 'test3', '9827361923', 'testte300@gmail.com', 'test@#3', 'female'),
(8, 'test4', '8745009929', 'test42@gmail.com', 'test4#3', 'male'),
(9, 'test5', '6709994302', 'test5@gmail.com', 'test67#0', 'female'),
(10, 'test6', '9988805429', 'test5429@gmail.com', 'test#$5', 'male'),
(11, 'test7', '8889999001', 'test888@gmail.com', 't88@99', 'male'),
(12, 'test8', '7411472456', 'test#741@gmail.com', 't74$1', 'male'),
(13, 'test9', '9512332101', 'test951@gmail.com', 'test#951', 'female'),
(14, 'test10', '9513572684', 'test684@gmail.com', 'test$10', 'female'),
(15, 'test11', '8426624800', 'test00@gmail.com', 'test8426', 'male'),
(16, 'test12', '7777324600', 'test777@gmail.com', 't@#77', 'male'),
(17, 'deepshi', '9873222440', 'dhingra19@gmail.com', 'deepshi#19', 'female'),
(18, 'navdeep', '8540000999', 'kaur31@gmail.com', 'kaur#31', 'female'),
(19, 'tashu', '8776660000', 'tashu14@gmail.com', 'tashu#14', 'female'),
(20, 'ishita', '7755550221', 'ishita16@gmail.com', 'ishita#16', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked_trips`
--
ALTER TABLE `booked_trips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plantrip`
--
ALTER TABLE `plantrip`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `phone_2` (`phone`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked_trips`
--
ALTER TABLE `booked_trips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `plantrip`
--
ALTER TABLE `plantrip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
