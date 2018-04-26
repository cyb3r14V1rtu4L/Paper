-- MySQL dump 10.16  Distrib 10.2.14-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: xmf_casillas
-- ------------------------------------------------------
-- Server version	10.2.14-MariaDB-10.2.14+maria~stretch

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `xmf_partidos`
--

DROP TABLE IF EXISTS `xmf_partidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xmf_partidos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` text DEFAULT NULL,
  `formula` text DEFAULT NULL,
  `is_coalicion` tinyint(1) NOT NULL DEFAULT 0,
  `has_parent` tinyint(1) NOT NULL DEFAULT 0,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `is_funcionario` tinyint(1) NOT NULL DEFAULT 0,
  `funcionario_name` char(55) DEFAULT NULL,
  `funcionario_lastname` char(55) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `bloque` int(11) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COMMENT='INFORMACION PARTIDOS';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xmf_partidos`
--

LOCK TABLES `xmf_partidos` WRITE;
/*!40000 ALTER TABLE `xmf_partidos` DISABLE KEYS */;
INSERT INTO `xmf_partidos` VALUES (1,'PAN-PRD-MC','pan',0,0,NULL,1,'name','lastname','','2018-04-02 14:02:07','2018-04-02 14:02:07',1,1),(2,'PRI-PVE-PANAL','pri',0,0,NULL,1,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',1,2),(3,'PAN-PRD-MC','prd',0,0,NULL,1,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',1,3),(4,'PRI-PVE-PANAL','pve',0,0,NULL,1,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',2,4),(5,'PT-MORENA-PES','pt',0,0,NULL,1,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',2,5),(6,'PAN-PRD-MC','mc',0,0,NULL,1,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',2,6),(7,'PRI-PVE-PANAL','panal',0,0,NULL,1,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',3,7),(8,'PT-MORENA-PES','morena',0,0,NULL,1,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',3,8),(9,'PT-MORENA-PES','pes',0,0,NULL,1,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',3,9),(10,'PAN-PRD-MC','pan_prd_mc',1,0,NULL,0,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',NULL,NULL),(11,'PAN-PRD-MC','pan_prd',1,1,10,0,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',NULL,NULL),(12,'PAN-PRD-MC','pan_mc',1,1,10,0,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',NULL,NULL),(13,'PAN-PRD-MC','prd_mc',1,1,10,0,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',NULL,NULL),(14,'PRI-PVE-PANAL','pri_pve_panal',1,0,NULL,0,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',NULL,NULL),(15,'PRI-PVE-PANAL','pri_pve',1,1,14,0,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',NULL,NULL),(16,'PRI-PVE-PANAL','pri_panal',1,1,14,0,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',NULL,NULL),(17,'PRI-PVE-PANAL','pve_panal',1,1,14,0,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',NULL,NULL),(18,'Presidente','',0,0,NULL,1,'name','lastname','','2018-04-02 14:02:07','2018-04-02 14:02:07',4,1),(19,'Secretario','',0,0,NULL,1,'name','lastname','','2018-04-02 14:02:07','2018-04-02 14:02:07',4,2),(20,'Escrutador1','',0,0,NULL,1,'name','lastname','','2018-04-02 14:02:07','2018-04-02 14:02:07',5,3),(21,'Escrutador2','',0,0,NULL,1,'name','lastname','','2018-04-02 14:02:07','2018-04-02 14:02:07',5,4),(22,'Suplente1','',0,0,NULL,1,'name','lastname','','2018-04-02 14:02:07','2018-04-02 14:02:07',6,5),(23,'Suplente2','',0,0,NULL,1,'name','lastname','','2018-04-02 14:02:07','2018-04-02 14:02:07',6,6),(24,'Suplente3','',0,0,NULL,1,'name','lastname','','2018-04-02 14:02:07','2018-04-02 14:02:07',6,7),(25,'Secretario II',NULL,0,0,0,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(26,'Escrutador III',NULL,0,0,0,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(27,'PT-MORENA-PES','pt_morena_pes',1,0,NULL,0,'','','','2018-04-17 20:10:46','2018-04-17 20:10:46',NULL,NULL),(28,'PT-MORENA-PES','morena_pes',1,1,27,0,'','','','2018-04-17 20:16:57','2018-04-17 20:16:57',NULL,NULL),(29,'PT-MORENA-PES','pt_morena',1,1,27,0,'','','','2018-04-17 20:20:15','2018-04-17 20:20:15',NULL,NULL),(30,'PT-MORENA-PES','pt_pes',1,1,27,0,'','','','2018-04-17 20:23:06','2018-04-17 20:23:06',NULL,NULL),(31,'Margarita Zavala','margarita_zavala',0,0,0,0,'','','','2018-04-17 21:14:21','2018-04-17 21:14:21',NULL,NULL),(32,'Bronco','bronco',0,0,0,0,'','','','2018-04-17 21:14:29','2018-04-17 21:14:29',NULL,NULL),(33,'Votos Nulos','votos_nulos',0,0,0,0,'','','','2018-04-17 21:14:35','2018-04-17 21:14:35',NULL,NULL),(34,'No Registrados','no_registrados',0,0,0,0,'','','','2018-04-17 21:14:39','2018-04-17 21:14:39',NULL,NULL);
/*!40000 ALTER TABLE `xmf_partidos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-26 10:14:42
