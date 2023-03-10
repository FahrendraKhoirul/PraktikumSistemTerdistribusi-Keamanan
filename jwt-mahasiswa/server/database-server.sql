/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 10.1.38-MariaDB : Database - serviceserver
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`serviceserver` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `serviceserver`;

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `nim` char(8) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`nim`,`nama`) values 
('13650123','Rahma Dita'),
('13650126','Santi Sanata'),
('13650125','Ahmad Ridho'),
('14650009','Ana Safitri'),
('14650011','Ratna'),
('15650123','Ahmad Syafi\'i ');

/*Table structure for table `pengguna` */

DROP TABLE IF EXISTS `pengguna`;

CREATE TABLE `pengguna` (
  `id_pengguna` char(20) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `pin` char(40) DEFAULT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `pengguna` */

insert  into `pengguna`(`id_pengguna`,`nama`,`pin`) values 
('111','AHMAD',SHA('222'));

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
