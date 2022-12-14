
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


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



INSERT INTO `user` (`id`, `fname`, `lname`, `country`, `phone`, `email`, `password`, `confirm`) VALUES
(4, 'David', 'garcia', 'canada', '5189964545', 'david@Gmail.com', '12345', '12345');


ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;


CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_fname` varchar(50) NOT NULL,
  `ad_lname` varchar(50) NOT NULL,
`ad_phone` int(10) NOT NULL,
  `ad_email` varchar(50) NOT NULL,
  `ad_password` varchar(50) NOT NULL,
    `ad_confirm` varchar(50) NOT NULL 
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `admin` (`ad_id`, `ad_fname`, `ad_lname`, `ad_phone`, `ad_email`, `ad_password`, `ad_confirm`) VALUES
(4, 'Ross', 'Geller', '5189964545', 'david@Gmail.com', '12345', '12345');


ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL
    
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `contact` (`id`, `fname`, `lname`, `email`, `message`) VALUES
(4, 'David', 'garcia','david@Gmail.com', 'nk');

ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
`address` varchar(150) NOT NULL,
`country` varchar(50) NOT NULL,
`zip` varchar(50) NOT NULL,
`phone` int(10) NOT NULL,
  `email` varchar(50) NOT NULL
  );
  ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

drop table if exists travelstories;
CREATE TABLE `travelstories` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `image` longblob NOT NULL,
  `traveltitle` varchar(255) NOT NULL,
  `traveldisc` varchar(255) NOT NULL,
  `travelspec` varchar(255) NOT NULL,
  `postby` varchar(255) NOT NULL,
  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4;

SELECT * FROM travelstories;

CREATE TABLE `products` (
  `pr_id` int(11) unsigned NOT NULL AUTO_INCREMENT ,
  `pr_title` varchar(50) NOT NULL,
  `pr_place` varchar(50) NOT NULL,
  `pr_cost` double NOT NULL,
  `pr_details` varchar(500) NOT NULL,
  `image` longblob NOT NULL,
   PRIMARY KEY (`pr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- INSERT INTO `products` (`pr_id`, `pr_title`, `pr_place`, `pr_cost`, `pr_details`, `pr_image`) VALUES
-- (2, 'Maldives - Awesome place', 'Maldives', 255, 'Maldives', 'img/product/maldives.jpg');
-- (2, 'MICROSOFT Surface Pro 4 & Typecover - 128 GB', 799, 'images/2.jpg'),
-- (3, 'DELL Inspiron 15 5000 15.6', 599, 'images/3.jpg'),
-- (4, 'LENOVO Ideapad 320s-14IKB 14\" Laptop - Grey', 399, 'images/4.jpg'),
-- (5, 'ASUS Transformer Mini T102HA 10.1\" 2 in 1 - Silver', 549.99, 'images/5.jpg'),
-- (6, 'DELL Inspiron 15 5000 15', 449.99, 'images/6.jpg');

ALTER TABLE `products`
  ADD PRIMARY KEY (`pr_id`);

ALTER TABLE `products`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

drop table newsletter;
CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL
 
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

SELECT * FROM newsletter;


select *from user;
select * from admin;
select * from contact;
select * from checkout;
select * from products;

