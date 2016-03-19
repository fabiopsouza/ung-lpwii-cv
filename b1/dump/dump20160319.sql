/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.7.10-log : Database - curriculo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`curriculo` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;

USE `curriculo`;

/*Table structure for table `estado_civil` */

DROP TABLE IF EXISTS `estado_civil`;

CREATE TABLE `estado_civil` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `DESCRICAO` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `estado_civil` */

insert  into `estado_civil`(`ID`,`DESCRICAO`) values (1,'Casado(a)'),(2,'Solteiro(a)'),(3,'Divorciado(a)');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(255) NOT NULL,
  `SEXO` char(1) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `ID_ESTADO_CIVIL` int(10) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk` (`ID_ESTADO_CIVIL`),
  CONSTRAINT `fk` FOREIGN KEY (`ID_ESTADO_CIVIL`) REFERENCES `estado_civil` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

/*Data for the table `usuario` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
