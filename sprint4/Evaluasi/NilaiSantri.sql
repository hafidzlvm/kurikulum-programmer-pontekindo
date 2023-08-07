-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: localhost    Database: NilaiSantri
-- ------------------------------------------------------
-- Server version	8.0.33-0ubuntu0.22.04.4

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `NilaiSantri`
--

DROP TABLE IF EXISTS `NilaiSantri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `NilaiSantri` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `nilai` int NOT NULL,
  `divisi` enum('multimedia','marketer','programmer') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `NilaiSantri`
--

LOCK TABLES `NilaiSantri` WRITE;
/*!40000 ALTER TABLE `NilaiSantri` DISABLE KEYS */;
INSERT INTO `NilaiSantri` VALUES (1,'faqih',84,'programmer'),(2,'hanif',78,'programmer'),(3,'danu',90,'programmer'),(4,'syifa',77,'programmer'),(5,'dimas',83,'programmer'),(6,'syekha',84,'multimedia'),(7,'ervan',93,'multimedia'),(8,'irsyad',79,'multimedia'),(9,'alka',82,'multimedia'),(10,'fauzan',80,'multimedia'),(12,'abdur',86,'marketer'),(13,'sule',100,'marketer'),(14,'alfin',100,'marketer'),(15,'royyan',89,'marketer');
/*!40000 ALTER TABLE `NilaiSantri` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-04 14:50:05
