/*
SQLyog Ultimate v11.5 (64 bit)
MySQL - 10.1.31-MariaDB : Database - demo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`demo` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `demo`;

/*Table structure for table `demo_encuesta` */

DROP TABLE IF EXISTS `demo_encuesta`;

CREATE TABLE `demo_encuesta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(22) NOT NULL,
  `apellido` varchar(22) NOT NULL,
  `lugares_conocidos` text NOT NULL,
  `lugares_conocer` text NOT NULL,
  `transporte` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

/*Data for the table `demo_encuesta` */

insert  into `demo_encuesta`(`id`,`nombre`,`apellido`,`lugares_conocidos`,`lugares_conocer`,`transporte`) values (1,'JOSE','MARTINEZ','MEXICO,PERU,SANTIAGO,BOGOTA','BARCELONA,MADRID,PARIS,LONDRES','Avión'),(2,'JOSE','MARTINEZ','MEXICO,PERU,SANTIAGO,BOGOTA','BARCELONA,MADRID,PARIS,LONDRES','Avión'),(3,'JOSE','MARTINEZ','MEXICO,PERU,SANTIAGO,BOGOTA','BARCELONA,MADRID,PARIS,LONDRES','Avión'),(4,'JOSE','MARTINEZ','MEXICO,PERU,SANTIAGO,BOGOTA','BARCELONA,MADRID,PARIS,LONDRES','Avión'),(5,'JOSE','MARTINEZ','MEXICO,PERU,SANTIAGO,BOGOTA','BARCELONA,MADRID,PARIS,LONDRES','Avión'),(6,'JOSE','MARTINEZ','MEXICO,PERU,SANTIAGO,BOGOTA','BARCELONA,MADRID,PARIS,LONDRES','Avión'),(7,'JOSE','MARTINEZ','MEXICO,PERU,SANTIAGO,BOGOTA','BARCELONA,MADRID,PARIS,LONDRES','Avión'),(8,'JOSE','MARTINEZ','MEXICO,PERU,SANTIAGO,BOGOTA','BARCELONA,MADRID,PARIS,LONDRES','Avión'),(9,'JOSE','MARTINEZ','MEXICO,PERU,SANTIAGO,BOGOTA','BARCELONA,MADRID,PARIS,LONDRES','Avión'),(10,'JOSE','MARTINEZ','MEXICO,PERU,SANTIAGO,BOGOTA','BARCELONA,MADRID,PARIS,LONDRES','Avión'),(11,'JOSE','MARTINEZ','MEXICO,PERU,SANTIAGO,BOGOTA','BARCELONA,MADRID,PARIS,LONDRES','Avión'),(12,'JOSE','MARTINEZ','MEXICO,PERU,SANTIAGO,BOGOTA','BARCELONA,MADRID,PARIS,LONDRES','Avión'),(13,'JOSE','MARTINEZ','MEXICO,PERU,SANTIAGO,BOGOTA','BARCELONA,MADRID,PARIS,LONDRES','Avión'),(14,'JOSE','MARTINEZ','MEXICO,PERU,SANTIAGO,BOGOTA','BARCELONA,MADRID,PARIS,LONDRES','Avión'),(15,'JOSE','MARTINEZ','MEXICO,PERU,SANTIAGO,BOGOTA','BARCELONA,MADRID,PARIS,LONDRES','Avión'),(16,'JOSE','MARTINEZ','MEXICO,PERU,SANTIAGO,BOGOTA','BARCELONA,MADRID,PARIS,LONDRES','Avión'),(17,'JOSE','MARTINEZ','MEXICO,PERU,SANTIAGO,BOGOTA','BARCELONA,MADRID,PARIS,LONDRES','Avión'),(18,'JOSE','MARTINEZ','MEXICO,PERU,SANTIAGO,BOGOTA','BARCELONA,MADRID,PARIS,LONDRES','Avión'),(19,'JOSE','MARTINEZ','MEXICO,PERU,SANTIAGO,BOGOTA','BARCELONA,MADRID,PARIS,LONDRES','Avión'),(20,'JOSE','MARTINEZ','MEXICO,PERU,SANTIAGO,BOGOTA','BARCELONA,MADRID,PARIS,LONDRES','Avión'),(21,'JOSE','MARTINEZ','MEXICO,PERU,SANTIAGO,BOGOTA','BARCELONA,MADRID,PARIS,LONDRES','Avión'),(22,'JOSE','MARTINEZ','MEXICO,PERU,SANTIAGO,BOGOTA','BARCELONA,MADRID,PARIS,LONDRES','Avión'),(23,'JOSE','MARTINEZ','MEXICO,PERU,SANTIAGO,BOGOTA','BARCELONA,MADRID,PARIS,LONDRES','Avión'),(24,'dasdadasd','dasd','dasd','dasd','Avión'),(25,'dasdadasd','dasd','dasd','dasd','Avión'),(26,'dasddasd','dsad','dasd','dasd','Tren'),(27,'dasddasd','dsad','dasd','dasd','Tren'),(28,'dasddasd','dsad','dasd','dasd','Tren'),(29,'dasddasd','dsad','dasd','dasd','Tren'),(30,'dasddasd','dsad','dasd','dasd','Tren'),(31,'dasddasd','dsad','dasd','dasd','Tren'),(32,'dasddasd','dsad','dasd','dasd','Tren'),(33,'dasddasd','dsad','dasd','dasd','Tren'),(34,'dasddasd','dsad','dasd','dasd','Tren'),(35,'dasddasd','dsad','dasd','dasd','Tren'),(36,'teasd','dasd','dasd','asda','Tren'),(37,'teasd','dasd','dasd','asda','Tren'),(38,'teasd','dasd','dasd','asda','Tren'),(39,'dasd','dasd','dasda','dasda','Tren'),(40,'dasdasd','dsadas','dasdasd','dasd','Avión'),(41,'dasdasd','dsadas','dasdasd','dasd',''),(42,'dasdasd','dsadas','dasdasd','dasd',''),(43,'dasdas','dasdasd','dasda','dasda','Tren');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
