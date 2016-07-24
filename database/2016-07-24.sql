CREATE DATABASE  IF NOT EXISTS `pp_marroquineria` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pp_marroquineria`;
-- MySQL dump 10.13  Distrib 5.5.49, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: pp_marroquineria
-- ------------------------------------------------------
-- Server version	5.5.49-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `color`
--

DROP TABLE IF EXISTS `color`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `color` (
  `col_id` int(11) NOT NULL AUTO_INCREMENT,
  `col_descripcion` varchar(50) DEFAULT NULL,
  `col_estado` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`col_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `color`
--

LOCK TABLES `color` WRITE;
/*!40000 ALTER TABLE `color` DISABLE KEYS */;
INSERT INTO `color` VALUES (1,'NEGRO',1),(2,'VERDED',1),(3,'AZUL',1),(4,'AMARILLO',1),(5,'BLANCO',1);
/*!40000 ALTER TABLE `color` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresa`
--

DROP TABLE IF EXISTS `empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresa` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_Nit` varchar(11) NOT NULL,
  `emp_razon_social` varchar(60) NOT NULL,
  `emp_telefono` varchar(15) NOT NULL,
  `emp_direccion` varchar(60) NOT NULL,
  `ciu_id` int(11) NOT NULL,
  `emp_correo` varchar(60) NOT NULL,
  `emp_contacto` varchar(60) NOT NULL,
  `emp_telefono_contacto` varchar(11) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` VALUES (1,'15252','HHGg','HHHG','HHG',1,'HHG','hhh','HJJ@HHH.JQ'),(2,'22','TTT','TTT','TTT',1,'TGGG@QHG.DD','TTTT','tttt');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persona` (
  `per_id` int(11) NOT NULL AUTO_INCREMENT,
  `per_identificacion` varchar(11) NOT NULL,
  `per_nombres` varchar(60) NOT NULL,
  `per_apellidos` varchar(60) NOT NULL,
  `per_telefono` varchar(15) NOT NULL,
  `per_direccion` varchar(60) NOT NULL,
  `ciu_id` int(11) NOT NULL,
  `per_correo` varchar(60) NOT NULL,
  `per_fecha_nacimiento` date NOT NULL,
  `per_id_tipopersona` int(11) NOT NULL,
  PRIMARY KEY (`per_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES (1,'1','NOMBR','APELLDO','TELEFONO','DIRECCION',1,'JDHE@DDD.DE','2108-07-07',0),(2,'1','NOMBRE','APELD','DDLDJ','JSJF',1,'FFFFF@LD.GG','0555-05-05',0);
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producto` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_descripcion` varchar(50) DEFAULT NULL,
  `pro_costo` int(11) DEFAULT NULL,
  `pro_cantidad` varchar(50) DEFAULT NULL,
  `tal_id` int(11) NOT NULL,
  `col_id` int(11) NOT NULL,
  `pro_estado` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`pro_id`),
  KEY `fk_producto_talla1_idx` (`tal_id`),
  KEY `fk_producto_color1_idx` (`col_id`),
  CONSTRAINT `fk_producto_color1` FOREIGN KEY (`col_id`) REFERENCES `color` (`col_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_producto_talla1` FOREIGN KEY (`tal_id`) REFERENCES `talla` (`tal_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES (1,'nikee',90000,'89',1,5,0),(2,'masm',0,'mamma',1,2,1),(3,'masm',0,'mamma',1,2,0),(4,'masm',0,'mamma',1,2,0),(21,'dasd',0,'aasda',2,1,1);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `talla`
--

DROP TABLE IF EXISTS `talla`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `talla` (
  `tal_id` int(11) NOT NULL AUTO_INCREMENT,
  `tal_dimension` varchar(50) DEFAULT NULL,
  `tipo_producto_tip_id` int(11) NOT NULL,
  `tal_estado` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`tal_id`),
  KEY `fk_talla_tipo_producto1_idx` (`tipo_producto_tip_id`),
  CONSTRAINT `fk_talla_tipo_producto1` FOREIGN KEY (`tipo_producto_tip_id`) REFERENCES `tipo_producto` (`tip_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `talla`
--

LOCK TABLES `talla` WRITE;
/*!40000 ALTER TABLE `talla` DISABLE KEYS */;
INSERT INTO `talla` VALUES (1,'GRANDE',2,1),(2,'PEQUENO',1,1);
/*!40000 ALTER TABLE `talla` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_producto`
--

DROP TABLE IF EXISTS `tipo_producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_producto` (
  `tip_id` int(11) NOT NULL AUTO_INCREMENT,
  `tip_descripcion` varchar(50) DEFAULT NULL,
  `tip_estado` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`tip_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_producto`
--

LOCK TABLES `tipo_producto` WRITE;
/*!40000 ALTER TABLE `tipo_producto` DISABLE KEYS */;
INSERT INTO `tipo_producto` VALUES (1,'ZAPATOS',1),(2,'BOLSOS',1);
/*!40000 ALTER TABLE `tipo_producto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-24 11:19:12
