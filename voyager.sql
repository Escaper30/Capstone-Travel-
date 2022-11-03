
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


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


select *from user;
select * from admin;

