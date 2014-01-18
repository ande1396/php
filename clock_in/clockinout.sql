CREATE DATABASE  IF NOT EXISTS `clockinout` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `clockinout`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: clockinout
-- ------------------------------------------------------
-- Server version	5.5.24-log

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
-- Table structure for table `clocks`
--

DROP TABLE IF EXISTS `clocks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `clockintime` datetime DEFAULT NULL,
  `clockouttime` datetime DEFAULT NULL,
  `note` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_clocks_students_idx` (`student_id`),
  CONSTRAINT `fk_clocks_students` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clocks`
--

LOCK TABLES `clocks` WRITE;
/*!40000 ALTER TABLE `clocks` DISABLE KEYS */;
INSERT INTO `clocks` VALUES (1,1,'2013-11-05 03:58:15','2013-11-06 10:21:09','Heyyyyy','2013-11-05 03:58:15','2013-11-06 09:58:15'),(2,1,'2013-11-03 10:25:16','2013-11-04 12:19:15','First Time here','2013-11-03 10:25:16','2013-11-03 10:25:16'),(3,2,'2013-11-03 11:22:35','2013-11-03 11:54:22','Please Work','2013-11-03 11:26:35','2013-11-03 11:26:35'),(4,3,'2013-11-03 11:21:54','2013-11-03 11:55:03','Only one way to go','2013-11-03 11:21:54','2013-11-03 11:28:54'),(8,10,'2014-01-15 15:30:51','2014-01-15 16:02:20','Here We goooo','2014-01-15 15:30:51','2014-01-15 15:30:51'),(11,6,'2014-01-15 16:03:15','2014-01-15 16:03:30','Danner is checking out','2014-01-15 16:03:15','2014-01-15 16:03:15'),(12,8,'2014-01-15 16:20:40','2014-01-15 16:20:54','DONE FOR GOOD!','2014-01-15 16:20:40','2014-01-15 16:20:40'),(13,11,'2014-01-15 16:23:00','2014-01-15 16:23:17','Michael, done','2014-01-15 16:23:00','2014-01-15 16:23:00'),(14,1,'2014-01-15 19:08:09','2014-01-15 19:08:20','BYEEEE','2014-01-15 19:08:09','2014-01-15 19:08:09'),(15,12,'2014-01-15 19:08:26','2014-01-15 19:08:41','I, QUIT!','2014-01-15 19:08:26','2014-01-15 19:08:26'),(16,3,'2014-01-15 19:13:47','2014-01-16 09:51:03','Long day','2014-01-15 19:13:47','2014-01-15 19:13:47'),(17,13,'2014-01-16 10:01:02','2014-01-16 10:01:25','23','2014-01-16 10:01:02','2014-01-16 10:01:02'),(18,1,'2014-01-16 10:07:30','2014-01-16 10:07:56','no comment','2014-01-16 10:07:30','2014-01-16 10:07:30'),(19,1,'2014-01-16 13:25:40','2014-01-16 13:25:49','','2014-01-16 13:25:40','2014-01-16 13:25:40'),(20,2,'2014-01-17 17:39:10','2014-01-17 17:39:22','Im always alst','2014-01-17 17:39:10','2014-01-17 17:39:10');
/*!40000 ALTER TABLE `clocks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (1,'Rod','Ranger','2013-11-02 09:56:27','2013-11-02 09:56:27'),(2,'Steve','Smith','2013-11-02 09:56:41','2013-11-02 09:56:41'),(3,'Gerald','Gombere','2013-11-02 09:56:54','2013-11-02 09:56:54'),(4,'Ken','Dann','2013-11-02 10:39:48','2013-11-02 10:39:48'),(5,'Bob','Bobby','2013-11-02 10:40:02','2013-11-02 10:40:02'),(6,'Danner','Bred','2013-11-02 10:40:11','2013-11-02 10:40:11'),(7,'Tim','Timmy','2013-11-02 10:40:21','2013-11-02 10:40:21'),(8,'Ash','Madis','2013-11-02 10:40:36','2013-11-02 10:40:36'),(9,'Dan','Pop','2013-11-02 10:40:44','2013-11-02 10:40:44'),(10,'Gordon','Rewd','2013-11-02 10:41:10','2013-11-02 10:41:10'),(11,'Michael','Johners','2014-01-15 16:22:55','2014-01-15 16:22:55'),(12,'Brett','Farve','2014-01-15 19:08:03','2014-01-15 19:08:03'),(13,'Michael','Jordan','2014-01-16 10:00:57','2014-01-16 10:00:57'),(19,'Jamie','James','2014-01-16 12:01:46','2014-01-16 12:01:46'),(20,'Bubba','Rodb','2014-01-16 12:03:36','2014-01-16 12:03:36'),(21,'Derrick','Carr','2014-01-16 12:04:24','2014-01-16 12:04:24'),(22,'Tommy','Towers','2014-01-16 13:37:22','2014-01-16 13:37:22');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-01-17 17:43:13
