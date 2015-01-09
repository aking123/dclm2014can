/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.6.14 : Database - dclm_sermon
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dclm_sermon` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dclm_sermon`;

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `category_id` int(2) DEFAULT NULL,
  `activity` varchar(80) DEFAULT NULL,
  `act_sht` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Table structure for table `sermon_data` */

DROP TABLE IF EXISTS `sermon_data`;

CREATE TABLE `sermon_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categ_id` int(2) DEFAULT NULL,
  `sdate` date DEFAULT NULL,
  `title` varchar(80) DEFAULT NULL,
  `categ` int(2) DEFAULT NULL,
  `desc` varchar(200) DEFAULT NULL,
  `high` varchar(200) DEFAULT NULL,
  `low` varchar(200) DEFAULT NULL,
  `audio` varchar(200) DEFAULT NULL,
  `outline` varchar(200) DEFAULT NULL,
  `status_ad` int(2) DEFAULT '1',
  `thumbs` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Table structure for table `tag` */

DROP TABLE IF EXISTS `tag`;

CREATE TABLE `tag` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(100) DEFAULT NULL,
  `nick` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
