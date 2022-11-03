-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2022 at 12:58 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oop_reglog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--
DROP DATABASE IF EXISTS voyager;	-- c_dimple
CREATE DATABASE voyager;	-- c_dimple
USE voyager;	-- c_dimple

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
`country` varchar(50) NOT NULL,
`phone` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
    `confirm` varchar(50) NOT NULL 
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `country`, `phone`, `email`, `password`, `confirm`) VALUES
(4, 'David', 'garcia', 'canada', '5189964545', 'david@Gmail.com', '12345', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- use oop_reglog;

-- CREATE TABLE `products` (
--   `product_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
--   `pname` varchar(100) NOT NULL,	-- c_dimple
--   `price` varchar(100) NOT NULL,
--   `quantity` varchar(255) NOT NULL,
--   `category` varchar(20) NOT NULL,
--   `discription` varchar(200) NOT NULL,	-- c_dimple
--   `image` varchar(200) NOT NULL,
--   PRIMARY KEY (`product_id`)
-- ) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4;

-- INSERT INTO products(`pname`, `price`, `quantity`, `category`, `discription`, `image`) 
-- VALUES ('Elephant Soft Toy', '12.99', '25', 'Soft Toys', 'Elephants are always loved by kids and even adults.', 'elephant.jpg'),
-- ('Wall-E', '18.99', '28', 'Action Figures', 'Wall-E is a transformer who is fighting the bad guys while looking cute', 'walle.jpg'),
-- ('Beach Doll', '18.99', '2', 'Dolls', 'This doll is just hanging out in the beach, making sand castles and swinging', 'beachdoll.jpg'), 
-- ('Plane', '30.99', '19', 'Outdoor Games', 'This plane can really fly, the dimensions have been made in such a way that one can even play catch with this.', 'plane.jpg'),
-- ('Batman', '25.99', '30', 'Action Figures', 'It is a plastic toy which is of 30cm in height and made with non-toxic materials', 'batman.jpg'),
-- ('Pikachu', '29.99', '100', 'Soft Toys', 'Pika-Pika.. This toy is one of the most famous Pokemon Character', 'pikachu.jpg'),
-- ('Art Kit', '30.99', '21', 'Outdoor Games', 'Art Kit to bring out some creativity, it has marble painting colors', 'artkit.jpg'),
-- ('Heman', '9.99', '87', 'Action Figures', 'Heman is our superhero action figure who fights evil to save the earth', 'heman.jpg'),
-- ('Mario', '11.99', '20', 'Dolls', 'Mario figure inspired from the most favourite game in the 90s.', 'mario.jpg'),
-- ('Doctor Barbie', '20.99', '28', 'Dolls', 'Not just a normal barbie doll, but this is a barbie who is given with doctor set', 'doctordoll.jpg'),
-- ('Connect 4', '24.99', '50', 'Outdoor Games', 'This a game which is great for increasing cognitive abilities of children', 'connect4.jpg');

-- CREATE TABLE `category` (
--   `category_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
--   `category` varchar(100) NOT NULL,
--  
--   PRIMARY KEY (`category_id`)
-- ) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4;
-- SELECT @@DATADIR;
-- SELECT * from products;
select *from user;

