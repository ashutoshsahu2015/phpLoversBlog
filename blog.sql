-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2018 at 08:18 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'News'),
(2, 'Events'),
(3, 'Tutorials'),
(4, 'Misc');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `category`, `title`, `body`, `author`, `tags`, `date`) VALUES
(1, 2, 'International PHP Conference 2017', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, dolor, reiciendis! Qui quis nostrum magni natus autem est atque architecto quisquam facilis. Maiores at libero est! Suscipit perferendis nobis aspernatur, totam eos culpa, sint debitis labore quos voluptates facere explicabo itaque quas vitae nihil vero, minus, provident error repellendus reprehenderit. A reiciendis, vero, perferendis, tempore ratione est labore delectus enim numquam ab quia suscipit perspiciatis! Laborum, nihil? Inventore, veritatis deleniti vitae, soluta dolorum repudiandae rem? Unde quo, tenetur explicabo necessitatibus nemo nisi? Id asperiores eum sequi laudantium repellendus necessitatibus, veritatis laborum error, fugiat earum, quaerat quis consequuntur praesentium accusantium consectetur ratione officia, numquam obcaecati! Iste sequi quaerat, totam dolorum rerum. Commodi officia, iste voluptatem, alias sunt suscipit vitae. Necessitatibus, praesentium?</p>\r\n            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla corrupti, commodi tempore voluptatibus perferendis error quam numquam blanditiis eveniet. Harum illo autem recusandae consequuntur laboriosam architecto, fuga sit nobis ducimus, impedit eos sunt repellat suscipit doloremque necessitatibus quaerat deserunt laborum.</p>', 'Ashutosh Sahu', 'php,php event', '2018-04-08 04:20:09'),
(2, 1, 'PHP 5.6.0 Beta Released ', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, dolor, reiciendis! Qui quis nostrum magni natus autem est atque architecto quisquam facilis. Maiores at libero est! Suscipit perferendis nobis aspernatur, totam eos culpa, sint debitis labore quos voluptates facere explicabo itaque quas vitae nihil vero, minus, provident error repellendus reprehenderit. A reiciendis, vero, perferendis, tempore ratione est labore delectus enim numquam ab quia suscipit perspiciatis! Laborum, nihil? Inventore, veritatis deleniti vitae, soluta dolorum repudiandae rem? Unde quo, tenetur explicabo necessitatibus nemo nisi? Id asperiores eum sequi laudantium repellendus necessitatibus, veritatis laborum error, fugiat earum, quaerat quis consequuntur praesentium accusantium consectetur ratione officia, numquam obcaecati! Iste sequi quaerat, totam dolorum rerum. Commodi officia, iste voluptatem, alias sunt suscipit vitae. Necessitatibus, praesentium?</p>\r\n            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla corrupti, commodi tempore voluptatibus perferendis error quam numquam blanditiis eveniet. Harum illo autem recusandae consequuntur laboriosam architecto, fuga sit nobis ducimus, impedit eos sunt repellat suscipit doloremque necessitatibus quaerat deserunt laborum.</p>', 'Ashutosh Sahu', 'php,php release', '2018-04-08 04:20:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
