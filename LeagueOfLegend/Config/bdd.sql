CREATE DATABASE  IF NOT EXISTS `ewan` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `ewan`;
-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: 10.10.51.252    Database: ewan
-- ------------------------------------------------------
-- Server version	8.0.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `champions`
--

DROP TABLE IF EXISTS `champions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `champions` (
  `championId` int NOT NULL AUTO_INCREMENT,
  `championNom` varchar(255) DEFAULT NULL,
  `championRole` int DEFAULT NULL,
  PRIMARY KEY (`championId`),
  KEY `championRole` (`championRole`),
  CONSTRAINT `champions_ibfk_1` FOREIGN KEY (`championRole`) REFERENCES `roles` (`RoleId`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `champions`
--

LOCK TABLES `champions` WRITE;
/*!40000 ALTER TABLE `champions` DISABLE KEYS */;
INSERT INTO `champions` VALUES (1,'Gnar',1),(2,'Olaf',1),(3,'Nunu et Willump',2),(4,'Viego',2),(5,'Ahri',3),(6,'Neeko',3),(7,'Kai\'sa',4),(8,'Samira',4),(9,'Nautilus',5),(10,'Senna',5);
/*!40000 ALTER TABLE `champions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `champions_objets`
--

DROP TABLE IF EXISTS `champions_objets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `champions_objets` (
  `championObjetId` int NOT NULL AUTO_INCREMENT,
  `championId` int DEFAULT NULL,
  `objetId` int DEFAULT NULL,
  PRIMARY KEY (`championObjetId`),
  KEY `championId` (`championId`),
  KEY `objetId` (`objetId`),
  CONSTRAINT `champions_objets_ibfk_1` FOREIGN KEY (`championId`) REFERENCES `champions` (`championId`),
  CONSTRAINT `champions_objets_ibfk_2` FOREIGN KEY (`objetId`) REFERENCES `objets` (`objetId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `champions_objets`
--

LOCK TABLES `champions_objets` WRITE;
/*!40000 ALTER TABLE `champions_objets` DISABLE KEYS */;
/*!40000 ALTER TABLE `champions_objets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipes`
--

DROP TABLE IF EXISTS `equipes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `equipes` (
  `equipeId` int NOT NULL AUTO_INCREMENT,
  `equipeNom` varchar(255) DEFAULT NULL,
  `utilisateurId` int DEFAULT NULL,
  `top` int DEFAULT NULL,
  `jungle` int DEFAULT NULL,
  `mid` int DEFAULT NULL,
  `adc` int DEFAULT NULL,
  `support` int DEFAULT NULL,
  PRIMARY KEY (`equipeId`),
  KEY `utilisateurId` (`utilisateurId`),
  KEY `top` (`top`),
  KEY `jungle` (`jungle`),
  KEY `mid` (`mid`),
  KEY `adc` (`adc`),
  KEY `support` (`support`),
  CONSTRAINT `equipes_ibfk_1` FOREIGN KEY (`utilisateurId`) REFERENCES `utilisateurs` (`utilisateurId`),
  CONSTRAINT `equipes_ibfk_2` FOREIGN KEY (`top`) REFERENCES `champions` (`championId`),
  CONSTRAINT `equipes_ibfk_3` FOREIGN KEY (`jungle`) REFERENCES `champions` (`championId`),
  CONSTRAINT `equipes_ibfk_4` FOREIGN KEY (`mid`) REFERENCES `champions` (`championId`),
  CONSTRAINT `equipes_ibfk_5` FOREIGN KEY (`adc`) REFERENCES `champions` (`championId`),
  CONSTRAINT `equipes_ibfk_6` FOREIGN KEY (`support`) REFERENCES `champions` (`championId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipes`
--

LOCK TABLES `equipes` WRITE;
/*!40000 ALTER TABLE `equipes` DISABLE KEYS */;
INSERT INTO `equipes` VALUES (1,'mon équipe',7,1,4,5,7,9),(2,'aze',7,5,5,5,5,5),(3,'aze',7,5,5,5,5,5),(4,'er',7,5,5,5,5,5),(5,'er',7,5,5,5,5,5),(6,'aaa',7,5,5,5,5,5);
/*!40000 ALTER TABLE `equipes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `objets`
--

DROP TABLE IF EXISTS `objets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `objets` (
  `objetId` int NOT NULL AUTO_INCREMENT,
  `objetNom` varchar(255) DEFAULT NULL,
  `objetRarete` int DEFAULT NULL,
  PRIMARY KEY (`objetId`),
  KEY `objetRarete` (`objetRarete`),
  CONSTRAINT `objets_ibfk_1` FOREIGN KEY (`objetRarete`) REFERENCES `raretes` (`RareteId`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `objets`
--

LOCK TABLES `objets` WRITE;
/*!40000 ALTER TABLE `objets` DISABLE KEYS */;
INSERT INTO `objets` VALUES (1,'Affliction de Liandry',1),(2,'Arc-bouclier immortel',1),(3,'Ceinture-roquette Hextech',1),(4,'Chant de guerre de Shurelya',1),(5,'Créateur de failles',1),(6,'Éclipse',1),(7,'Épée vespérale de Draktharr',1),(8,'Estropieur',1),(9,'Éviscérateur',1),(10,'Force de la trinité',1);
/*!40000 ALTER TABLE `objets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `raretes`
--

DROP TABLE IF EXISTS `raretes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `raretes` (
  `RareteId` int NOT NULL AUTO_INCREMENT,
  `RareteNom` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`RareteId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `raretes`
--

LOCK TABLES `raretes` WRITE;
/*!40000 ALTER TABLE `raretes` DISABLE KEYS */;
INSERT INTO `raretes` VALUES (1,'Objet de départ'),(2,'Composant'),(3,'Objet épique'),(4,'Objet légendaire'),(5,'Objet mythique'),(6,'Relique'),(7,'Consommable');
/*!40000 ALTER TABLE `raretes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `RoleId` int NOT NULL AUTO_INCREMENT,
  `RoleNom` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`RoleId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Top'),(2,'Jungle'),(3,'Mid'),(4,'Adc'),(5,'Support');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `utilisateurs` (
  `utilisateurId` int NOT NULL AUTO_INCREMENT,
  `utilisateurPseudo` varchar(255) DEFAULT NULL,
  `utilisateurEmail` varchar(255) DEFAULT NULL,
  `utilisateurNom` varchar(255) DEFAULT NULL,
  `utilisateurPrenom` varchar(255) DEFAULT NULL,
  `utilisateurMdp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`utilisateurId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateurs`
--

LOCK TABLES `utilisateurs` WRITE;
/*!40000 ALTER TABLE `utilisateurs` DISABLE KEYS */;
INSERT INTO `utilisateurs` VALUES (1,'EwanR','210427@site.Asty-moulin.be','Ewan','Ramsamy','rien'),(2,'Crystal0024','210303@site.Asty-moulin.be','Simon','Archambeau','rien'),(3,'Techno','210300@site.Asty-moulin.be','Benjamin','Theismann','rien'),(4,'0Rhin0','210469@site.Asty-moulin.be','Romane','Grootaers','rien'),(5,'Sentenzadorval','200198@site.Asty-moulin.be','Gabriel','Tarnus','rien'),(7,'test','test@gmail.com','test','test','test1234');
/*!40000 ALTER TABLE `utilisateurs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'ewan'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-16 11:56:10
