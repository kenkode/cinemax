-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2016 at 08:35 AM
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
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'wangoken2@gmail.com');

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
(1, 5, 2, '201611115000001', '2016-11-11', 'Kennedy', 'Wango', 'wangoken2@gmail.com', '0725145304', 26, 1, NULL),
(2, 1, 1, '201611111000002', '2016-11-11', 'Samson', 'Wachira', 'ken.wango@lixnet.net', '0725145304', 26, 1, '27781190'),
(3, 5, 2, '201611115000003', '2016-11-11', 'skeww', 'ken', 'skewws@gmail.com', '0725145304', 26, 1, NULL),
(4, 1, 1, '201611111000004', '2016-11-11', 'Kennedy', 'Wachira', 'wangoken2@gmail.com', '0725145304', 26, 1, NULL),
(5, 5, 2, '201611115000005', '2016-11-11', 'Kennedy', 'Wachira', 'skewws@gmail.com', '0725145304', 26, 1, NULL),
(6, 1, 1, '201611261000006', '2016-11-26', 'Kelvin', 'Muchiri', 'kevin.muchiri@aiesec.net', '0708123231', 23, 1, '12321312');

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
(1, 'Cinema 1', 60, 'Located on Kenkode Building, along Moi Ave Street,Nairobi'),
(2, 'Cinema 2', 60, '123, Nairobi'),
(3, 'Cinema 3', 60, NULL),
(4, 'Cinema 4', 60, NULL);

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
(1, 'Kennedy', 'Wango', 'wangoken2@gmail.com', 'Rate Movie', 'Great sites, Great Movies, Great Services', '2016-10-27', 0, NULL);

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
(1, 'Friday the 13th', 'Friday the 13th (franchise) ... The franchise mainly focuses on the fictional character Jason Voorhees, who drowned as a boy at Camp Crystal Lake due to the negligence of the camp staff and later revenges every Friday the 13th by killing people.', 'previews/---Friday_The_13th_-_Official_Trailer_[HD_-_YouTub.mp4', 'images/645600.jpg', 'Horror', 3000.00, 4.5, 2005, '18-above', 'United States'),
(5, 'Zootopia', 'From the largest elephant to the smallest shrew, the city of Zootopia is a mammal metropolis where various animals live and thrive. When Judy Hopps (Ginnifer Goodwin) becomes the first rabbit to join the police force, she quickly learns how tough it is to enforce the law. Determined to prove herself, Judy jumps at the opportunity to solve a mysterious case. Unfortunately, that means working with Nick Wilde (Jason Bateman), a wily fox who makes her job even harder.', 'previews/Zootopia_Official_US_Trailer_2.mp4', 'images/703943.jpg', 'Animation', 1500.00, 4.5, 2016, '1-10', 'Kenya'),
(6, 'Chaos', 'A veteran detective is teamed with a rookie cop when they are sent to negotiate with a bunch of criminals holding a bank hostage. It transpires that a master thief has planted a computer virus that will drain funds from the bank`s accounts. The detective faces a race against time to catch the thief and stop the randomly evolving computer virus, which models its behavior on the bewildering principles of chaos theory.', 'previews/Chaos Trailer.mp4', 'images/Jason-in-Chaos-jason-statham-14341361.jpg', 'Action', 2800.00, 0.9, 2009, '14-18', 'United States'),
(7, 'Central Intelligence', 'Bullied as a teen for being overweight, Bob Stone (Dwayne Johnson) shows up to his high school reunion looking fit and muscular. While there, he finds Calvin Joyner (Kevin Hart), a fast-talking accountant who misses his glory days as a popular athlete. Stone is now a lethal CIA agent who needs Calvin`s number skills to help him save the compromised U.S. spy satellite system. Together, the former classmates encounter shootouts, espionage and double-crosses while trying to prevent worldwide chaos.', 'previews/Central_Intelligence_-_Official_Trailer_[HD_.mp4', 'images/4.jpg', 'Comedy', 3500.00, 0.9, 2016, '10-14', 'United States'),
(8, 'Tarzan', 'Tarzan, having acclimated to life in London, is called back to his former home in the jungle to investigate the activities at a mining encampment.', 'previews/---THE_LEGEND_OF_TARZAN_-_Official_Trailer_2.mp4', 'images/5.jpg', 'Drama', 2000.00, 0.0, 0, NULL, NULL);

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
(1, 1, '2016-11-30 21:00:00', 1),
(3, 2, '2016-10-26 12:00:00', 5),
(6, 4, '2016-11-13 12:00:00', 8),
(7, 2, '2016-11-30 00:00:00', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `movie_periods`
--
ALTER TABLE `movie_periods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
