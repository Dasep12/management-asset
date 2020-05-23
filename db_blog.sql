/*
SQLyog Enterprise - MySQL GUI v7.14 
MySQL - 5.7.15-log : Database - db_blog
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_blog` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `db_blog`;

/*Table structure for table `m_siswa` */

DROP TABLE IF EXISTS `m_siswa`;

CREATE TABLE `m_siswa` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `angkatan` varchar(4) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `m_siswa` */

insert  into `m_siswa`(`id`,`angkatan`,`nama`,`nim`,`jurusan`) values (1,'2016','Ahmad Munawir','1503','IPA'),(2,'2016','Ahmad Syaifudin','1504','IPA'),(3,'2016','Ahmad Zainuri Yusuf','1505','IPA'),(4,'2016','Alma Fitriani','1506','IPA'),(5,'2016','Ana Triseptiani','1507','IPA'),(6,'2016','Dandi Arif Hidayah','1508','IPA'),(7,'2016','Dwi Nurhalimah','1509','IPA'),(8,'2016','Eka Zahro\'ul Maulidiyah','1510','IPA'),(9,'2016','Elliyana Septianingsih','1511','IPA'),(10,'2016','Handi Zakaria','1512','IPA'),(11,'2016','Irfan Hamdani','1513','IPA'),(12,'2016','Kembar Khusaini','1514','IPA'),(13,'2016','Khofifah','1515','IPA'),(14,'2016','Khoiron Nawawi','1516','IPA'),(15,'2016','Lailatul Badriyah','1517','IPA'),(16,'2016','Lia Agustin','1518','IPA'),(17,'2016','Lulu Munfarida','1519','IPA'),(18,'2016','Lutfiatun Nikmah','1520','IPA'),(19,'2016','Mutamimah','1521','IPA'),(20,'2016','Nita Andriani','1522','IPA'),(21,'2016','Reski Hardiansyah','1523','IPA'),(22,'2016','Sefti Nurbaiti','1524','IPA'),(23,'2016','Torik Lianda Rahman','1525','IPA'),(24,'2016','Winarto','1526','IPA');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
