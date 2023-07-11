-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table btcfrosh.referral
DROP TABLE IF EXISTS `referral`;
CREATE TABLE IF NOT EXISTS `referral` (
  `_refId` int(11) NOT NULL AUTO_INCREMENT,
  `_user` int(11) NOT NULL DEFAULT 0,
  `_from` int(11) NOT NULL DEFAULT 0,
  `_level` varchar(50) NOT NULL DEFAULT '0',
  `_percent` varchar(50) NOT NULL DEFAULT '0',
  `_amount` varchar(50) NOT NULL DEFAULT '0',
  `_date` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`_refId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table btcfrosh.referral: ~0 rows (approximately)

-- Dumping structure for table btcfrosh._admin
DROP TABLE IF EXISTS `_admin`;
CREATE TABLE IF NOT EXISTS `_admin` (
  `A_Id` int(11) NOT NULL AUTO_INCREMENT,
  `A_Username` varchar(50) DEFAULT NULL,
  `A_Password` varchar(250) DEFAULT NULL,
  `TRN` varchar(250) DEFAULT NULL,
  `BTC` varchar(250) DEFAULT NULL,
  `ETH` varchar(250) DEFAULT NULL,
  `USDT` varchar(250) DEFAULT NULL,
  `BNB` varchar(250) DEFAULT NULL,
  `Timestamp` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`A_Id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table btcfrosh._admin: ~1 rows (approximately)
INSERT INTO `_admin` (`A_Id`, `A_Username`, `A_Password`, `TRN`, `BTC`, `ETH`, `USDT`, `BNB`, `Timestamp`) VALUES
	(2, 'Admin', '$2y$10$CO4U5taeNul2k.flm4k6Juhq/0i/C6ViBFp74suqoEiAW.ptykLSG', 'TCPmd7GSquJyb8GE9odhy8SspXj58GMpVS', 'bc1q93kzz6nrvkmwxkm4vvk4jjrckd9jzpwgat3kjj', '0xBe650F09ad9349Ff8CACD60f9880f3A3d2A0D688', '0x1fdc6924664e880729e9c771cd998FD1AA673F33', '0xBe650F09ad9349Ff8CACD60f9880f3A3d2A0D688', '2022-10-18 17:56:37');

-- Dumping structure for table btcfrosh._history
DROP TABLE IF EXISTS `_history`;
CREATE TABLE IF NOT EXISTS `_history` (
  `hId` int(11) NOT NULL AUTO_INCREMENT,
  `hUser` int(11) NOT NULL DEFAULT 0,
  `hTrx` int(11) NOT NULL DEFAULT 0,
  `hAmt` int(11) NOT NULL DEFAULT 0,
  `hGateway` varchar(50) DEFAULT NULL,
  `hLink` varchar(150) DEFAULT NULL,
  `hStatus` enum('Pending','Approved') DEFAULT 'Pending',
  `hDate` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`hId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table btcfrosh._history: ~0 rows (approximately)

-- Dumping structure for table btcfrosh._plan
DROP TABLE IF EXISTS `_plan`;
CREATE TABLE IF NOT EXISTS `_plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `_planName` varchar(25) DEFAULT NULL,
  `_return` varchar(25) DEFAULT NULL,
  `_day` varchar(25) DEFAULT NULL,
  `_minAmt` varchar(15) DEFAULT NULL,
  `_maxAmt` varchar(15) DEFAULT NULL,
  `_status` enum('A','D') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table btcfrosh._plan: ~3 rows (approximately)
INSERT INTO `_plan` (`id`, `_planName`, `_return`, `_day`, `_minAmt`, `_maxAmt`, `_status`) VALUES
	(1, 'Silver Plan', '3', '6', '150', '50000', 'A'),
	(2, 'Gold Plan', '8', '30', '50000', '100000', 'A'),
	(5, 'Diamond Plan', '10', '60', '100000', '1000000', 'A');

-- Dumping structure for table btcfrosh._plantrx
DROP TABLE IF EXISTS `_plantrx`;
CREATE TABLE IF NOT EXISTS `_plantrx` (
  `_pId` int(11) NOT NULL AUTO_INCREMENT,
  `_planId` int(11) NOT NULL DEFAULT 0,
  `_amt` int(11) NOT NULL DEFAULT 0,
  `_date` varchar(20) DEFAULT NULL,
  `_trx` varchar(10) DEFAULT NULL,
  `_name` varchar(50) DEFAULT NULL,
  `_user` int(11) DEFAULT NULL,
  `_stts` enum('A','C') DEFAULT 'A',
  PRIMARY KEY (`_pId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table btcfrosh._plantrx: ~0 rows (approximately)

-- Dumping structure for table btcfrosh._ticket
DROP TABLE IF EXISTS `_ticket`;
CREATE TABLE IF NOT EXISTS `_ticket` (
  `_tId` int(11) NOT NULL AUTO_INCREMENT,
  `_tSubject` varchar(50) DEFAULT NULL,
  `_tMessage` text DEFAULT NULL,
  `_tReply` text DEFAULT NULL,
  `_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`_tId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table btcfrosh._ticket: ~0 rows (approximately)

-- Dumping structure for table btcfrosh._users
DROP TABLE IF EXISTS `_users`;
CREATE TABLE IF NOT EXISTS `_users` (
  `_uId` int(11) NOT NULL AUTO_INCREMENT,
  `_fName` varchar(50) DEFAULT NULL,
  `_lName` varchar(50) DEFAULT NULL,
  `_country` varchar(100) DEFAULT NULL,
  `_uPhone` varchar(15) DEFAULT NULL,
  `_uEmail` varchar(50) DEFAULT NULL,
  `_userName` varchar(50) DEFAULT NULL,
  `_uPassword` varchar(50) DEFAULT NULL,
  `_Pic` varchar(50) DEFAULT NULL,
  `_addr` varchar(50) DEFAULT NULL,
  `_state` varchar(30) DEFAULT NULL,
  `_zip` varchar(15) DEFAULT NULL,
  `_city` varchar(20) DEFAULT NULL,
  `_uStatus` enum('New','Active','Suspended') DEFAULT 'Active',
  `_regTime` timestamp NULL DEFAULT current_timestamp(),
  `_depositBal` float DEFAULT 0,
  `_interestBal` float NOT NULL DEFAULT 0,
  `_totalInvest` float NOT NULL DEFAULT 0,
  `_totalBal` float DEFAULT 0,
  `_totalWithdraw` float NOT NULL DEFAULT 0,
  `_referralEarn` float NOT NULL DEFAULT 0,
  `_otp` varchar(10) DEFAULT NULL,
  `_otpExpiry` varchar(20) DEFAULT NULL,
  `_referredMe` varchar(50) DEFAULT NULL,
  `_firstDeposit` enum('Y','N') DEFAULT 'Y',
  PRIMARY KEY (`_uId`),
  UNIQUE KEY `_uId` (`_userName`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table btcfrosh._users: ~1 rows (approximately)
INSERT INTO `_users` (`_uId`, `_fName`, `_lName`, `_country`, `_uPhone`, `_uEmail`, `_userName`, `_uPassword`, `_Pic`, `_addr`, `_state`, `_zip`, `_city`, `_uStatus`, `_regTime`, `_depositBal`, `_interestBal`, `_totalInvest`, `_totalBal`, `_totalWithdraw`, `_referralEarn`, `_otp`, `_otpExpiry`, `_referredMe`, `_firstDeposit`) VALUES
	(1, 'Victor', 'Okafor', 'Nigeria', '23409014292469', 'okaffskido@gmail.com', 'vic', 'Me@11111', NULL, NULL, NULL, NULL, NULL, 'Active', '2023-07-10 09:53:10', 0, 0, 0, 0, 0, 0, '937387', '2023-07-11', '', 'Y');

-- Dumping structure for table btcfrosh._withdraw
DROP TABLE IF EXISTS `_withdraw`;
CREATE TABLE IF NOT EXISTS `_withdraw` (
  `wId` int(11) NOT NULL AUTO_INCREMENT,
  `wUser` int(11) NOT NULL DEFAULT 0,
  `wAmt` int(11) NOT NULL DEFAULT 0,
  `wAddr` varchar(250) DEFAULT NULL,
  `wWallet` varchar(250) DEFAULT NULL,
  `wStatus` enum('Approved','Pending') DEFAULT 'Pending',
  `wTime` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`wId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table btcfrosh._withdraw: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
