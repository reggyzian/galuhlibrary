-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 03:48 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galuhlibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `writer_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `publisher_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `title`, `writer_id`, `category_id`, `publisher_id`, `status`) VALUES
(1, 'Buku Minta Dibanting', 2, 4, 2, 'Tersedia'),
(2, 'Dilan 1990', 7, 4, 5, 'Tersedia'),
(3, 'Sang Pemimpi', 4, 4, 2, 'Tersedia'),
(4, 'Dilan 1991', 7, 4, 5, 'Tersedia'),
(5, 'Manusia Setengah Salmon', 1, 4, 2, 'Tersedia'),
(6, 'Cinta Brontosaurus', 1, 4, 2, 'Tersedia'),
(7, 'The Hunger Games', 11, 5, 1, 'Tersedia'),
(8, 'Divergent', 12, 5, 1, 'Tersedia'),
(9, 'A Brief History of Time', 13, 1, 5, 'Tersedia'),
(10, 'Cosmos', 14, 1, 2, 'Tersedia'),
(11, 'The Magic of Reality', 15, 1, 2, 'Sedang Dipinjam'),
(12, 'Mantappu Jiwa', 3, 1, 2, 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Science'),
(4, 'Novel'),
(5, 'Fiction'),
(6, 'Romance'),
(7, 'Ensiklopedi'),
(8, 'Biografi'),
(9, 'Antologi'),
(10, 'Cergam'),
(11, 'Nomik');

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

DROP TABLE IF EXISTS `publishers`;
CREATE TABLE `publishers` (
  `publisher_id` int(11) NOT NULL,
  `publisher_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`publisher_id`, `publisher_name`) VALUES
(1, 'Erlangga'),
(2, 'Gramedia'),
(3, 'Mizan'),
(4, 'Republika'),
(5, 'Pastel Books');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transaction_id`, `user_id`, `book_id`, `start`, `end`, `status`) VALUES
(1, 2, 1, '2021-06-11', '2021-06-18', 'Sudah Dikembalikan'),
(2, 1, 2, '2021-06-11', '2021-06-18', 'Sudah Dikembalikan'),
(3, 3, 1, '2021-06-11', '2021-06-18', 'Sudah Dikembalikan'),
(4, 4, 3, '2021-06-12', '2021-06-19', 'Sudah Dikembalikan'),
(5, 1, 11, '2021-06-12', '2021-06-19', 'Belum Dikembalikan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `nama`, `alamat`, `nomor_telepon`) VALUES
(1, 'Reggy Zian Purnama', 'Bandung', '081782354456'),
(2, 'Inestia Putri Khalisha', 'Jatinangor', '081555452150'),
(3, 'Syahrul Nanda Syafrizal', 'Cikutra', '082219987754'),
(4, 'Siti Amalia Destiani', 'Bandung', '082217456552'),
(5, 'Fikri Helmi Setiawan', 'Soreang', '081154884556'),
(6, 'Deni Setiawan', 'Bojongsoang', '087665484515'),
(7, 'Hadi Ahmad', 'Jatinangor', '089630054845');

-- --------------------------------------------------------

--
-- Table structure for table `writers`
--

DROP TABLE IF EXISTS `writers`;
CREATE TABLE `writers` (
  `writer_id` int(11) NOT NULL,
  `writer_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `writers`
--

INSERT INTO `writers` (`writer_id`, `writer_name`) VALUES
(4, 'Andrea Hinata'),
(14, 'Carl Sagan'),
(6, 'Dewi Lestari'),
(9, 'Ernest Prakasa'),
(8, 'Haruki Murakami'),
(3, 'Jerome Pollin'),
(2, 'Nadhifa Allya Tsana'),
(7, 'Pidi Baiq'),
(1, 'Raditya Dika'),
(15, 'Richard Dawkins'),
(13, 'Stephen Hawknis'),
(11, 'Suzanne Collins'),
(5, 'Tere Liye'),
(12, 'Veronica Roth');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `writer_id` (`writer_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `publisher_id` (`publisher_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`writer_id`),
  ADD UNIQUE KEY `writer_name` (`writer_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `publisher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `writers`
--
ALTER TABLE `writers`
  MODIFY `writer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`writer_id`) REFERENCES `writers` (`writer_id`),
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`),
  ADD CONSTRAINT `books_ibfk_3` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`publisher_id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
