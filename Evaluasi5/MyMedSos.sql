-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: localhost    Database: MyMedSos
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
-- Table structure for table `Profil`
--

DROP TABLE IF EXISTS `Profil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Profil` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nickname` varchar(255) DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  `id_profil_detail` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_profil_detail` (`id_profil_detail`),
  KEY `fk_user` (`id_user`),
  CONSTRAINT `fk_profil_detail` FOREIGN KEY (`id_profil_detail`) REFERENCES `Profil_Detail` (`id`),
  CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `User` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Profil`
--

LOCK TABLES `Profil` WRITE;
/*!40000 ALTER TABLE `Profil` DISABLE KEYS */;
INSERT INTO `Profil` VALUES (1,'Roy',1,1),(2,'Pis',2,2),(3,'bandar mie',3,3),(4,'jubah agung',4,4),(5,'juara 1 kelas',5,5),(6,'pen',6,6),(7,'bos cilacap',7,7),(8,'nomor 7 quinta',8,8),(9,'luthfi',9,9),(10,'leeee_meneng_koo!!',10,10);
/*!40000 ALTER TABLE `Profil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Profil_Detail`
--

DROP TABLE IF EXISTS `Profil_Detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Profil_Detail` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Fullname` varchar(255) DEFAULT NULL,
  `Address` text,
  `Phone_Number` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Profil_Detail`
--

LOCK TABLES `Profil_Detail` WRITE;
/*!40000 ALTER TABLE `Profil_Detail` DISABLE KEYS */;
INSERT INTO `Profil_Detail` VALUES (1,'Farros Royyan','Karawang','019238324324'),(2,'Muhammad Hafidz','Pontianak','1204872344'),(3,'Zaenal Abidin','Purbalingga','34597243413'),(4,'Nanda Cristoper','Bekasi','03458243242'),(5,'Evan Etenia Sandy','Tegal','2450843753'),(6,'Pendi Pratama','BumiAyu','825725702432'),(7,'Ghulam Haidar Shabir','Cilacap','3249543853'),(8,'Maechel Alantra','Cilacap','49504352423'),(9,'Luthfi Dwi Nugroho','Cilacap','4325894345'),(10,'Sulaiman Hanafi','Ajibarang','58403453453');
/*!40000 ALTER TABLE `Profil_Detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `User` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Username` (`Username`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
INSERT INTO `User` VALUES (1,'roy.anss','karawangdong@gmail.com','main_sini'),(2,'hfdzz','masihdipantau@gmail.com','terdampar_di_jawa'),(3,'zen.zenn','hobikujalan2@gmail.com','jangan_lupa_refreshing'),(4,'nandzz','jalanjalankebekasi@gmail.com','cakepp'),(5,'epan','sahabatjalanninjaku@gmail.com','UIMtujuan.ku'),(6,'pendi','yuhgass@gmail.com','dolan.yuh'),(7,'shabir','shbr@gmail.com','yuh.ring.umahe.nyong'),(8,'alan','hehe4siuuuuu@gmail.com','siuu123'),(9,'luthfi','syuuut@gmail.com','okeehh'),(10,'sule.nicee','nngumah@gmail.com','nyng.enteni.kiee');
/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-12 13:32:15
