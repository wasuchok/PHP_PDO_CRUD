-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.27-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.2.0.6576
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for crud
CREATE DATABASE IF NOT EXISTS `crud` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;
USE `crud`;

-- Dumping structure for table crud.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีผู้ใช้',
  `email` varchar(255) NOT NULL COMMENT 'อีเมล',
  `password` varchar(255) NOT NULL COMMENT 'รหัสผ่าน',
  `fname` varchar(255) NOT NULL COMMENT 'ชื่อจริง',
  `lname` varchar(255) NOT NULL COMMENT 'นามสกุล',
  `role` varchar(255) NOT NULL COMMENT 'สถานะ',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dumping data for table crud.users: ~4 rows (approximately)
INSERT INTO `users` (`id`, `email`, `password`, `fname`, `lname`, `role`) VALUES
	(1, 'wasuchokop@gmail.com', '$2y$10$W6EE4TuuF.4PppQ./CWAg.DTTbo2zPDF9u7NceN4aD0EEUAVtyPnW', 'สมชาย', 'มาดี', 'member'),
	(2, 'kongok@gmail.com', '$2y$10$intnEzZbNqXbLuzI3ges2.VhUeyGFD0H6LJY7N7WhGg4ZBQ/Xn8dG', 'ก้อง', 'ห่วยไร่', 'member'),
	(3, 'numnum@gmail.com', '$2y$10$8IVK60XwH.rTAhLZ1b7yw.yBX1wlYdgo11ZT3Y4iZjScWV8CdjbpC', 'มานะ', 'อดทน', 'member'),
	(4, 'supachai@gmail.com', '$2y$10$AyBMa2x/8yIAPGrM86mqAOVHhZgW9Ao8SqKb/1/fLRdgvb7VAALH6', 'ศุภชัย', 'น้ำดี', 'member');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
