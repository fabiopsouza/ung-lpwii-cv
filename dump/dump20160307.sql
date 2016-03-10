/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.7.11-log : Database - currículo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`currículo` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `currículo`;

/*Table structure for table `descricao` */

DROP TABLE IF EXISTS `descricao`;

CREATE TABLE `descricao` (
  `ID_DESC` int(20) NOT NULL AUTO_INCREMENT,
  `OBJETIVO` text,
  KEY `ID_DESC` (`ID_DESC`),
  CONSTRAINT `descricao_ibfk_1` FOREIGN KEY (`ID_DESC`) REFERENCES `usuario` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `descricao` */

insert  into `descricao`(`ID_DESC`,`OBJETIVO`) values (1,'TESTE');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(30) DEFAULT NULL,
  `SEXO` varchar(10) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `ESTADO_CIVIL` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `usuario` */

insert  into `usuario`(`ID`,`NOME`,`SEXO`,`EMAIL`,`ESTADO_CIVIL`) values (1,'PAULO',NULL,NULL,NULL),(2,NULL,'MASCULINO',NULL,NULL),(3,NULL,NULL,NULL,'SOLTEIRO');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
