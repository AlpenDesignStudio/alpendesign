-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `alpendesign` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `alpendesign`;

DROP TABLE IF EXISTS `notice`;
CREATE TABLE `notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notice_date` date NOT NULL,
  `headline` varchar(45) NOT NULL,
  `notice` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `notice` (`id`, `notice_date`, `headline`, `notice`) VALUES
(3,	'2018-02-02',	'Notice Of Annual General Meeting Of The Compa',	'ADSL is hereby submitting Notice of Annual General Meeting of Company scheduled to be held on Tuesda');

-- 2018-02-26 06:37:33
