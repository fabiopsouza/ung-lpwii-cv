/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.7.11-log : Database - curriculo
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

/*Table structure for table `contato` */

DROP TABLE IF EXISTS `contato`;

CREATE TABLE `contato` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `NUMERO` varchar(12) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `contato` */

/*Table structure for table `curriculo` */

DROP TABLE IF EXISTS `curriculo`;

CREATE TABLE `curriculo` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `DESCRICAO` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_DESC` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `curriculo` */

insert  into `curriculo`(`ID`,`DESCRICAO`) values (1,'TESTE');

/*Table structure for table `curso` */

DROP TABLE IF EXISTS `curso`;

CREATE TABLE `curso` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(30) NOT NULL,
  `INSTITUICAO` varchar(30) NOT NULL,
  `DURACAO` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `curso` */

/*Table structure for table `endereco` */

DROP TABLE IF EXISTS `endereco`;

CREATE TABLE `endereco` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `RUA` varchar(30) NOT NULL,
  `NUMERO` int(6) NOT NULL,
  `COMPLEMENTO` varchar(10) DEFAULT NULL,
  `CEP` varchar(10) NOT NULL,
  `BAIRRO` varchar(20) NOT NULL,
  `MUNICIPIO` varchar(20) DEFAULT NULL,
  `UF` varchar(3) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `endereco` */

/*Table structure for table `experiencia` */

DROP TABLE IF EXISTS `experiencia`;

CREATE TABLE `experiencia` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `EMPRESA` varchar(20) NOT NULL,
  `CARGO` varchar(20) NOT NULL,
  `DESCRICAO` varchar(20) NOT NULL,
  `DATAINICIO` date NOT NULL,
  `DATAFIM` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `experiencia` */

/*Table structure for table `objetivo` */

DROP TABLE IF EXISTS `objetivo`;

CREATE TABLE `objetivo` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `DESCRICAO` varchar(30) NOT NULL,
  `PRETENCAOSALARIAL` float NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `objetivo` */

/*Table structure for table `tipocontato` */

DROP TABLE IF EXISTS `tipocontato`;

CREATE TABLE `tipocontato` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `DESCRICAO` varchar(25) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tipocontato` */

/*Table structure for table `tipocurso` */

DROP TABLE IF EXISTS `tipocurso`;

CREATE TABLE `tipocurso` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `DESCRICAO` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tipocurso` */

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(30) DEFAULT NULL,
  `DATA_NASCIMENTO` date DEFAULT NULL,
  `SEXO` varchar(10) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `ESTADO_CIVIL` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `usuario` */

insert  into `usuario`(`ID`,`NOME`,`DATA_NASCIMENTO`,`SEXO`,`EMAIL`,`ESTADO_CIVIL`) values (1,'PAULO',NULL,NULL,NULL,NULL),(2,NULL,NULL,'MASCULINO',NULL,NULL),(3,NULL,NULL,NULL,NULL,'SOLTEIRO');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
