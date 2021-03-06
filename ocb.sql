-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2017 at 10:30 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'kevin.muchiri@aiesec.net');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `cinema_id` int(11) NOT NULL,
  `ticket_no` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `id_number` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `movie_id`, `cinema_id`, `ticket_no`, `date`, `firstname`, `lastname`, `email`, `phone`, `age`, `status`, `id_number`) VALUES
(1, 1, 4, '201612031000001', '2016-12-03', 'kevin', 'muchiri', 'kevin.muchiri@aiesec.net', '0708087227', 24, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `cinemas`
--

CREATE TABLE `cinemas` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number_of_seats` int(11) NOT NULL,
  `address` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cinemas`
--

INSERT INTO `cinemas` (`id`, `name`, `number_of_seats`, `address`) VALUES
(2, 'Cinemax Nakuru', 50, 'Agricuture House'),
(3, 'Cinemax Machakos', 50, 'Mulleys Building'),
(4, 'Cinemax Nairobi', 50, 'Imax Towers');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `is_seen` int(11) NOT NULL,
  `reply` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `firstname`, `lastname`, `email`, `subject`, `message`, `date`, `is_seen`, `reply`) VALUES
(1, 'Kevin', 'Muchiri', 'kevin.muchiri@aiesec.net', 'movies', 'Great selection', '2016-12-03', 0, 'Thank you for the comment');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text,
  `preview` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `price` float(15,2) NOT NULL,
  `rating` float(2,1) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `age` varchar(30) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `description`, `preview`, `image`, `genre`, `price`, `rating`, `year`, `age`, `country`) VALUES
(1, 'Zootopia', 'Based on an animation where animals live in real life human beings ', 'previews/Zootopia_Official_US_Trailer_2.mp4', 'images/703943.jpg', 'Animation', 350.00, 3.7, 2016, '1-10', 'United States'),
(2, 'Central Intelligence', 'A comedy based on two friends who meet u at a reunion to catch a drug dealer', 'previews/Central_Intelligence_-_Official_Trailer_[HD_.mp4', 'images/4.jpg', 'Comedy', 350.00, 3.4, 2016, '14-18', 'United States'),
(3, 'Chaos', 'Action packed film starring Jason stratham fighting the bad guys', 'previews/Chaos Trailer.mp4', 'images/Jason-in-Chaos-jason-statham-14341361.jpg', 'Action', 350.00, 2.4, 2005, '18-above', 'United States');

-- --------------------------------------------------------

--
-- Table structure for table `movie_periods`
--

CREATE TABLE `movie_periods` (
  `id` int(11) NOT NULL,
  `cinema_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie_periods`
--

INSERT INTO `movie_periods` (`id`, `cinema_id`, `date`, `movie_id`) VALUES
(1, 4, '2016-12-10 10:00:00', 1),
(2, 3, '2016-12-10 14:00:00', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cinemas`
--
ALTER TABLE `cinemas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_periods`
--
ALTER TABLE `movie_periods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cinemas`
--
ALTER TABLE `cinemas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `movie_periods`
--
ALTER TABLE `movie_periods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
