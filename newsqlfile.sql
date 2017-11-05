-- MySQL dump 10.13  Distrib 5.5.55, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: amtexnetwork
-- ------------------------------------------------------
-- Server version	5.5.55-0ubuntu0.14.04.1

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
-- Table structure for table `activity_log`
--

DROP TABLE IF EXISTS `activity_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activity_log` (
  `activity_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `date` varchar(25) NOT NULL,
  `action` varchar(50) NOT NULL,
  PRIMARY KEY (`activity_log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=252 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity_log`
--

LOCK TABLES `activity_log` WRITE;
/*!40000 ALTER TABLE `activity_log` DISABLE KEYS */;
INSERT INTO `activity_log` VALUES (1,'noel.titus','2016-10-24 09:12:05','Add Class Form 6'),(2,'noel.titus','2016-10-24 09:12:58','Edit Class Form 6'),(3,'noel.titus','2016-10-24 09:15:07','Add Student aaa bbb'),(4,'noel.titus','2016-10-24 09:15:36','Updated Student aaa bbb'),(5,'noel.titus','2016-10-24 09:17:50','Add Student buel bol'),(6,'noel.titus','2016-10-24 09:23:17','Add User abdul.hemedy'),(7,'mariyappan','2017-08-20 17:03:30','Add New User test2 '),(8,'admin','2017-08-22 08:03:58','Deleted  user noel.titus'),(9,'admin','2017-08-22 08:04:12','Deleted  user abdul.hemedy'),(10,'mariyappan','2017-08-22 22:27:43','Add New User test3 '),(11,'mariyappan','2017-08-23 23:52:12','updated userdetails '),(12,'mariyappan','2017-08-23 23:56:40','updated userdetails '),(13,'mariyappan','2017-08-23 23:56:51','updated userdetails '),(14,'mariyappan','2017-08-24 00:10:04','updated userdetails '),(15,'mariyappan','2017-08-24 00:14:17','updated userdetails '),(16,'mariyappan','2017-08-24 00:14:42','updated userdetails '),(17,'mariyappan','2017-08-24 00:15:10','updated userdetails '),(18,'mariyappan','2017-09-20 01:10:03','updated userdetails '),(19,'mariyappan','2017-09-20 01:14:57','updated userdetails '),(20,'mariyappan','2017-09-23 20:09:55','Add New User newtest '),(21,'','2017-09-23 21:34:08','updated userdetails '),(22,'newtest','2017-09-23 21:38:45','updated userdetails '),(23,'mariyappan','2017-09-23 21:56:33','updated userdetails '),(24,'mariyappan','2017-09-23 22:05:44','updated userdetails '),(25,'mariyappan','2017-09-23 22:06:03','updated userdetails '),(26,'mariyappan','2017-09-23 22:07:20','updated userdetails '),(27,'mariyappan','2017-09-23 22:07:32','updated userdetails '),(28,'mariyappan','2017-09-23 22:07:46','updated userdetails '),(29,'mariyappan','2017-09-23 22:34:35','Deleted userdetails '),(30,'mariyappan','2017-09-23 22:34:49','Deleted userdetails '),(31,'mariyappan','2017-09-23 22:49:31','Deleted userdetails '),(32,'mariyappan','2017-09-23 22:51:08','Deleted userdetails '),(33,'mariyappan','2017-09-23 22:51:35','Add New User test2 '),(34,'mariyappan','2017-09-23 22:52:36','Add New User test3 '),(35,'mariyappan','2017-09-24 13:52:17','Add New department   '),(36,'mariyappan','2017-09-24 14:06:14','Add New department  The Mode '),(37,'mariyappan','2017-09-24 16:11:56','updated Department details '),(38,'mariyappan','2017-09-24 16:12:36','updated Department details '),(39,'mariyappan','2017-09-24 16:12:47','updated Department details '),(40,'mariyappan','2017-09-24 16:12:54','updated Department details '),(41,'mariyappan','2017-09-24 16:13:01','updated Department details '),(42,'mariyappan','2017-09-24 16:13:12','updated Department details '),(43,'mariyappan','2017-09-24 16:16:26','Add New department  Inventcare '),(44,'mariyappan','2017-09-24 16:17:39','updated Department details '),(45,'mariyappan','2017-09-24 16:31:04','Deleted department details '),(46,'mariyappan','2017-09-24 16:31:33','Add New department  The Mode '),(47,'mariyappan','2017-09-24 17:19:10','updated Department details '),(48,'mariyappan','2017-09-24 17:20:18','Add New department  IBIQA '),(49,'mariyappan','2017-09-24 18:51:38','Add New IP INformation 192.168.11.67 '),(50,'mariyappan','2017-09-24 19:33:46','Add New IP INformation 192.168.11.68 '),(51,'mariyappan','2017-09-24 19:41:09','Add New IP INformation 192.168.11.69 '),(52,'mariyappan','2017-09-27 00:39:39','updated IP details '),(53,'mariyappan','2017-09-27 00:42:59','updated IP details '),(54,'mariyappan','2017-09-27 00:43:19','updated IP details '),(55,'mariyappan','2017-09-27 00:43:39','updated IP details '),(56,'mariyappan','2017-09-27 00:44:13','updated IP details '),(57,'mariyappan','2017-09-27 00:44:36','updated IP details '),(58,'mariyappan','2017-09-27 00:59:36','Deleted IP details '),(59,'mariyappan','2017-09-27 01:00:07','Add New IP INformation 192.168.11.67 '),(60,'mariyappan','2017-09-27 01:04:58','updated IP details '),(61,'mariyappan','2017-09-27 01:12:31','Add New IP INformation 192.168.128.23 '),(62,'mariyappan','2017-09-27 01:13:11','Add New IP INformation 192.168.128.24 '),(63,'mariyappan','2017-09-27 01:13:36','Add New IP INformation 192.168.11.100 '),(64,'mariyappan','2017-09-27 01:14:13','Add New IP INformation 192.168.11.101 '),(65,'mariyappan','2017-09-28 00:45:22','updated IP details '),(66,'mariyappan','2017-09-28 00:50:41','updated IP details '),(67,'mariyappan','2017-09-28 00:50:55','updated IP details '),(68,'mariyappan','2017-09-28 00:52:36','updated IP details '),(69,'mariyappan','2017-09-29 10:26:04','updated IP details '),(70,'mariyappan','2017-09-29 10:28:23','updated IP details '),(71,'mariyappan','2017-09-29 10:28:30','updated IP details '),(72,'mariyappan','2017-09-29 10:31:36','updated IP details '),(73,'mariyappan','2017-09-29 12:27:11','updated IP details '),(74,'mariyappan','2017-09-29 12:27:28','updated IP details '),(75,'mariyappan','2017-09-29 12:57:08','Add New department  HR '),(76,'mariyappan','2017-09-29 12:58:21','Add New IP INformation 192.168.0.46 '),(77,'mariyappan','2017-09-29 17:40:19','Add New IP INformation 192.168.11.70 '),(78,'mariyappan','2017-09-29 17:42:00','updated IP details '),(79,'mariyappan','2017-09-29 20:24:00','Add New WiFI Details 192.168.11.129 '),(80,'mariyappan','2017-09-29 20:25:06','Add New WiFI Details 192.168.11.130 '),(81,'mariyappan','2017-09-29 20:29:22','Add New WiFI Details 192.168.11.131 '),(82,'mariyappan','2017-09-29 20:29:56','Add New WiFI Details 192.168.11.132 '),(83,'mariyappan','2017-09-29 20:32:04','updated IP details '),(84,'mariyappan','2017-09-29 20:45:16','Add New WiFI Details 192.168.11.133 '),(85,'mariyappan','2017-09-30 00:04:23','updated IP details '),(86,'mariyappan','2017-09-30 00:04:28','updated IP details '),(87,'mariyappan','2017-09-30 00:42:01','updated IP details '),(88,'mariyappan','2017-09-30 00:43:24','updated IP details '),(89,'mariyappan','2017-09-30 00:43:41','updated IP details '),(90,'mariyappan','2017-09-30 00:43:51','updated IP details '),(91,'mariyappan','2017-09-30 00:44:02','updated IP details '),(92,'mariyappan','2017-09-30 00:44:10','updated IP details '),(93,'mariyappan','2017-09-30 00:44:19','updated IP details '),(94,'mariyappan','2017-09-30 12:55:06','Deleted WIFI Information of user '),(95,'mariyappan','2017-09-30 12:55:44','Deleted WIFI Information of user '),(96,'mariyappan','2017-09-30 17:34:41','Add New department  Tech '),(97,'mariyappan','2017-09-30 17:35:32','Add New Nortel Details of Tech '),(98,'mariyappan','2017-09-30 18:10:15','updated Nortel details '),(99,'mariyappan','2017-09-30 18:10:37','updated Nortel details '),(100,'mariyappan','2017-09-30 18:11:54','updated Nortel details '),(101,'mariyappan','2017-09-30 18:12:03','updated Nortel details '),(102,'mariyappan','2017-09-30 18:12:17','updated Nortel details '),(103,'mariyappan','2017-09-30 18:12:28','updated Nortel details '),(104,'mariyappan','2017-09-30 18:14:09','updated Nortel details '),(105,'mariyappan','2017-09-30 18:14:19','updated Nortel details '),(106,'mariyappan','2017-09-30 18:16:52','Add New Nortel Details of Tech '),(107,'mariyappan','2017-09-30 18:17:44','Add New Nortel Details of Tech '),(108,'mariyappan','2017-09-30 18:18:46','updated Nortel details '),(109,'mariyappan','2017-09-30 18:19:12','updated Nortel details '),(110,'mariyappan','2017-09-30 18:19:21','updated Nortel details '),(111,'mariyappan','2017-09-30 18:19:30','updated Nortel details '),(112,'mariyappan','2017-09-30 18:19:41','updated Nortel details '),(113,'mariyappan','2017-09-30 18:20:01','updated Nortel details '),(114,'mariyappan','2017-09-30 18:30:01','Add New Nortel Details of Tech '),(115,'mariyappan','2017-09-30 18:31:29','Add New Nortel Details of Tech '),(116,'mariyappan','2017-09-30 18:32:25','Add New Nortel Details of Tech '),(117,'mariyappan','2017-09-30 21:57:29','Add New department  westdridge '),(118,'mariyappan','2017-09-30 21:58:41','Add New Printer HP Laserjet P1505n '),(119,'mariyappan','2017-09-30 22:06:56','Add New Printer HP Laserjet M1216nfh MFP '),(120,'mariyappan','2017-09-30 22:35:04','updated Printer details of  '),(121,'mariyappan','2017-09-30 22:36:06','updated Printer details of  '),(122,'mariyappan','2017-09-30 22:36:19','updated Printer details of  '),(123,'mariyappan','2017-09-30 22:36:24','updated Printer details of  '),(124,'mariyappan','2017-09-30 22:36:29','updated Printer details of  '),(125,'mariyappan','2017-09-30 22:36:35','updated Printer details of  '),(126,'mariyappan','2017-09-30 22:36:41','updated Printer details of  '),(127,'mariyappan','2017-09-30 22:36:54','updated Printer details of  '),(128,'mariyappan','2017-09-30 22:45:08','Deleted WIFI Information of HP Laserjet P1505n '),(129,'mariyappan','2017-09-30 22:45:28','Deleted WIFI Information of HP Laserjet M1216nfh M'),(130,'mariyappan','2017-09-30 22:46:01','Add New Printer HP Laserjet P1505n '),(131,'mariyappan','2017-09-30 22:46:24','Add New Printer HP Laserjet M1216nfh MFP '),(132,'mariyappan','2017-09-30 22:46:52','Add New Printer Samsung ML 2951ND '),(133,'mariyappan','2017-09-30 22:47:17','Add New Printer HP Laserjet M1216nfh MFP '),(134,'mariyappan','2017-10-01 00:02:00','Add New User  '),(135,'mariyappan','2017-10-01 00:03:56','Add New User  '),(136,'mariyappan','2017-10-01 00:13:46','Add New User  '),(137,'mariyappan','2017-10-01 00:28:09','updated emaildetails of employee 7288 '),(138,'mariyappan','2017-10-01 00:29:55','updated emaildetails of employee 7287 '),(139,'mariyappan','2017-10-01 00:30:15','updated emaildetails of employee Lakshmi chitra S '),(140,'mariyappan','2017-10-01 00:30:24','updated emaildetails of employee Lakshmi chitra S '),(141,'mariyappan','2017-10-01 00:30:30','updated emaildetails of employee Lakshmi chitra S '),(142,'mariyappan','2017-10-01 00:30:41','updated emaildetails of employee Prasanna  Karthik'),(143,'mariyappan','2017-10-01 00:30:47','updated emaildetails of employee Prasanna  Karthik'),(144,'mariyappan','2017-10-01 00:49:17','Deleted New Employee Email Details '),(145,'mariyappan','2017-10-01 00:49:22','Deleted New Employee Email Details '),(146,'mariyappan','2017-10-01 00:49:45','Add New User  '),(147,'mariyappan','2017-10-01 00:50:08','Add New User  '),(148,'mariyappan','2017-10-01 12:47:39','updated IP details '),(149,'mariyappan','2017-10-01 17:23:05','Add exit Employee Email Details  '),(150,'mariyappan','2017-10-01 17:23:24','Add exit Employee Email Details  '),(151,'mariyappan','2017-10-01 17:34:51','updated exit employee emaildetails  '),(152,'mariyappan','2017-10-01 17:34:58','updated exit employee emaildetails  '),(153,'mariyappan','2017-10-01 17:35:06','updated exit employee emaildetails  '),(154,'mariyappan','2017-10-01 17:35:12','updated exit employee emaildetails  '),(155,'mariyappan','2017-10-01 17:35:19','updated exit employee emaildetails  '),(156,'mariyappan','2017-10-01 17:35:27','updated exit employee emaildetails  '),(157,'mariyappan','2017-10-01 17:35:57','updated exit employee emaildetails  '),(158,'mariyappan','2017-10-01 17:36:04','updated exit employee emaildetails  '),(159,'mariyappan','2017-10-01 17:36:09','updated exit employee emaildetails  '),(160,'mariyappan','2017-10-01 17:36:15','updated exit employee emaildetails  '),(161,'mariyappan','2017-10-01 17:36:20','updated exit employee emaildetails  '),(162,'mariyappan','2017-10-01 17:36:27','updated exit employee emaildetails  '),(163,'mariyappan','2017-10-01 17:41:05','Deleted Exit Employee Email Details '),(164,'mariyappan','2017-10-01 17:41:11','Deleted Exit Employee Email Details '),(165,'mariyappan','2017-10-01 17:41:30','Add exit Employee Email Details  '),(166,'mariyappan','2017-10-01 17:41:45','Add exit Employee Email Details  '),(167,'mariyappan','2017-10-01 18:33:56','updated IP details '),(168,'mariyappan','2017-10-02 00:30:11','updated IP details '),(169,'mariyappan','2017-10-02 14:40:34','updated IP details '),(170,'mariyappan','2017-10-02 14:40:42','updated IP details '),(171,'mariyappan','2017-10-02 17:04:31','Add New laptop Details of Bindhu Kothandapani'),(172,'mariyappan','2017-10-02 17:21:43','Add New laptop Details of Sathya Prakash SS'),(173,'mariyappan','2017-10-02 17:27:33','Add New laptop Details of Bindhu Kothandapani'),(174,'mariyappan','2017-10-02 18:08:39','updated Laptop details of Bindhu Kothandapanii'),(175,'mariyappan','2017-10-02 18:08:57','updated Laptop details of Bindhu Kothandapani'),(176,'mariyappan','2017-10-02 18:10:21','updated Laptop details of Bindhu Kothandapani'),(177,'mariyappan','2017-10-02 18:10:51','updated Laptop details of Bindhu Kothandapani'),(178,'mariyappan','2017-10-02 18:11:08','updated Laptop details of Bindhu Kothandapani'),(179,'mariyappan','2017-10-02 18:11:37','updated Laptop details of Bindhu Kothandapani'),(180,'mariyappan','2017-10-02 18:11:54','updated Laptop details of Bindhu Kothandapani'),(181,'mariyappan','2017-10-02 18:12:54','Add New laptop Details of Sathya Prakash SS'),(182,'mariyappan','2017-10-02 20:20:23','Add New laptop Details of Gowtham Ram N'),(183,'mariyappan','2017-10-02 20:34:21','Add New laptop Details of Anchal'),(184,'mariyappan','2017-10-02 20:37:04','Add New laptop Details of Manoj Nair'),(185,'mariyappan','2017-10-02 21:26:07','Deleted Laptop Information of user Bindhu Kothanda'),(186,'mariyappan','2017-10-02 21:28:05','Add New laptop Details of Bindhu Kothandapani'),(187,'mariyappan','2017-10-02 21:28:13','Deleted Laptop Information of user Bindhu Kothanda'),(188,'mariyappan','2017-10-02 21:28:24','Deleted Laptop Information of user Manoj Nair'),(189,'mariyappan','2017-10-03 00:11:32','Add New mobile Details of  '),(190,'mariyappan','2017-10-03 00:38:23','updated Gadgets details '),(191,'mariyappan','2017-10-03 00:38:32','updated Gadgets details '),(192,'mariyappan','2017-10-03 00:38:47','updated Gadgets details '),(193,'mariyappan','2017-10-03 00:38:56','updated Gadgets details '),(194,'mariyappan','2017-10-03 00:39:04','updated Gadgets details '),(195,'mariyappan','2017-10-03 00:39:11','updated Gadgets details '),(196,'mariyappan','2017-10-03 00:39:18','updated Gadgets details '),(197,'mariyappan','2017-10-03 00:39:26','updated Gadgets details '),(198,'mariyappan','2017-10-03 00:52:47','Add New mobile Details of  '),(199,'mariyappan','2017-10-03 00:54:02','Deleted mobile Information'),(200,'mariyappan','2017-10-14 11:24:14','updated IP details '),(201,'mariyappan','2017-10-14 12:24:01','Add New Contact Details of Sankaralingam K'),(202,'mariyappan','2017-10-14 12:34:09','Add New Contact Details of Mythili P'),(203,'mariyappan','2017-10-14 13:31:01','Add New Contact Details of Mythili P'),(204,'mariyappan','2017-10-14 13:55:50','updated Contact details '),(205,'mariyappan','2017-10-14 13:56:18','updated Contact details '),(206,'mariyappan','2017-10-14 13:58:08','updated Contact details '),(207,'mariyappan','2017-10-14 13:58:15','updated Contact details '),(208,'mariyappan','2017-10-14 13:58:22','updated Contact details '),(209,'mariyappan','2017-10-14 13:58:28','updated Contact details '),(210,'mariyappan','2017-10-14 13:58:35','updated Contact details '),(211,'mariyappan','2017-10-14 13:58:40','updated Contact details '),(212,'mariyappan','2017-10-14 13:58:49','updated Contact details '),(213,'mariyappan','2017-10-14 13:58:57','updated Contact details '),(214,'mariyappan','2017-10-14 13:59:04','updated Contact details '),(215,'mariyappan','2017-10-14 13:59:11','updated Contact details '),(216,'mariyappan','2017-10-14 13:59:18','updated Contact details '),(217,'mariyappan','2017-10-14 14:00:06','Add New department  Finance '),(218,'mariyappan','2017-10-14 14:00:25','updated Contact details '),(219,'mariyappan','2017-10-14 14:45:32','Add New Contact Details of Daisy Hotwani'),(220,'mariyappan','2017-10-14 14:52:04','Deleted Contact Information of Daisy Hotwani'),(221,'mariyappan','2017-10-14 16:21:48','Add New fori wifi Details of AMTEX_WIFI_01 '),(222,'mariyappan','2017-10-14 16:23:09','Add New fori wifi Details of AMTEX_WIFI_01 '),(223,'mariyappan','2017-10-14 16:45:29','Add New fori wifi Details of AMTEX_WIFI_02 '),(224,'mariyappan','2017-10-14 17:06:22','updated Forti Wifi details AMTEX_WIFI_03 '),(225,'mariyappan','2017-10-14 17:06:33','updated Forti Wifi details AMTEX_WIFI_03 '),(226,'mariyappan','2017-10-14 17:06:42','updated Forti Wifi details AMTEX_WIFI_03 '),(227,'mariyappan','2017-10-14 17:06:50','updated Forti Wifi details AMTEX_WIFI_03 '),(228,'mariyappan','2017-10-14 17:06:57','updated Forti Wifi details AMTEX_WIFI_03 '),(229,'mariyappan','2017-10-14 17:07:05','updated Forti Wifi details AMTEX_WIFI_03 '),(230,'mariyappan','2017-10-14 17:07:14','updated Forti Wifi details AMTEX_WIFI_03 '),(231,'mariyappan','2017-10-14 17:07:21','updated Forti Wifi details AMTEX_WIFI_03 '),(232,'mariyappan','2017-10-14 17:07:29','updated Forti Wifi details AMTEX_WIFI_03 '),(233,'mariyappan','2017-10-14 17:07:36','updated Forti Wifi details AMTEX_WIFI_03 '),(234,'mariyappan','2017-10-14 17:27:56','Deleted Forti Wifi Information of AMTEX_WIFI_01'),(235,'mariyappan','2017-10-14 17:28:01','Deleted Forti Wifi Information of AMTEX_WIFI_03'),(236,'mariyappan','2017-10-14 17:28:44','Add New fori wifi Details of AMTEX_WIFI_01 '),(237,'mariyappan','2017-10-14 17:29:53','Add New fori wifi Details of AMTEX_WIFI_02 '),(238,'mariyappan','2017-10-14 21:11:08','Add New Switch Information'),(239,'mariyappan','2017-10-14 21:28:30','updated Switch details '),(240,'mariyappan','2017-10-14 21:28:36','updated Switch details '),(241,'mariyappan','2017-10-14 21:28:42','updated Switch details '),(242,'mariyappan','2017-10-14 21:28:47','updated Switch details '),(243,'mariyappan','2017-10-14 21:29:00','updated Switch details '),(244,'mariyappan','2017-10-14 21:29:29','Add New Switch Information'),(245,'mariyappan','2017-10-14 21:29:35','updated Switch details '),(246,'mariyappan','2017-10-14 21:40:16','Deleted Switch Information of '),(247,'mariyappan','2017-10-14 21:40:22','Deleted Switch Information of '),(248,'','2017-10-14 22:53:38','Add New Switch Information'),(249,'mariyappan','2017-10-15 20:01:17','updated IP details '),(250,'mariyappan','2017-10-15 20:01:47','updated IP details '),(251,'mariyappan','2017-10-15 20:13:14','updated IP details ');
/*!40000 ALTER TABLE `activity_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aprjun`
--

DROP TABLE IF EXISTS `aprjun`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aprjun` (
  `aprjun_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL,
  PRIMARY KEY (`aprjun_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aprjun`
--

LOCK TABLES `aprjun` WRITE;
/*!40000 ALTER TABLE `aprjun` DISABLE KEYS */;
INSERT INTO `aprjun` VALUES (1,1,'Form 6',250000,'half',125000,0),(2,2,'Form 6',250000,'paying',250000,250000);
/*!40000 ALTER TABLE `aprjun` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `fee` int(20) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class`
--

LOCK TABLES `class` WRITE;
/*!40000 ALTER TABLE `class` DISABLE KEYS */;
INSERT INTO `class` VALUES (1,'Form 6','Secondary',250000);
/*!40000 ALTER TABLE `class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactdetails`
--

DROP TABLE IF EXISTS `contactdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactdetails` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `localext` varchar(50) NOT NULL,
  `mobilenumber` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  PRIMARY KEY (`contact_id`),
  UNIQUE KEY `ipaddress` (`emailid`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactdetails`
--

LOCK TABLES `contactdetails` WRITE;
/*!40000 ALTER TABLE `contactdetails` DISABLE KEYS */;
INSERT INTO `contactdetails` VALUES (23,'Mythili P','CFO','mythili@amtexsystems.com','505','9841018659','Finance');
/*!40000 ALTER TABLE `contactdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL AUTO_INCREMENT,
  `departmentname` varchar(50) NOT NULL,
  `departmenthead` varchar(50) NOT NULL,
  `ipusedfrom` varchar(50) NOT NULL,
  `ipusedtill` varchar(50) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  PRIMARY KEY (`department_id`),
  UNIQUE KEY `departmentname` (`departmentname`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES (15,'Inventcare','Arul','192.168.11.86','192.168.11.125','test'),(16,'The Mode','Bala','192.168.11.67','192.168.11.85',''),(17,'IBIQA','Bindu','192.168.128.10','192.168.128.100','test'),(18,'HR','Sathya','192.168.0.45','192.168.0.55','test'),(19,'Tech','Kishore','192.168.0.0','192.168.0.44','test'),(20,'westdridge','Albin','192.168.0.110','192.168.0.120','test'),(21,'Finance','Mythili','192.168.0.10','192.168.0.15','test');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exitemployee_emaildetails`
--

DROP TABLE IF EXISTS `exitemployee_emaildetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exitemployee_emaildetails` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `emailid` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `currentstatus` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`emp_id`),
  UNIQUE KEY `emailid` (`emailid`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exitemployee_emaildetails`
--

LOCK TABLES `exitemployee_emaildetails` WRITE;
/*!40000 ALTER TABLE `exitemployee_emaildetails` DISABLE KEYS */;
INSERT INTO `exitemployee_emaildetails` VALUES (25,'sreenik@amtexsystems.com','Deleted','Deleted'),(26,'surenther@infobuild.in','Not_Deleted','Ust_password_reset');
/*!40000 ALTER TABLE `exitemployee_emaildetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fortiwifidetails`
--

DROP TABLE IF EXISTS `fortiwifidetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fortiwifidetails` (
  `fortiwifi_id` int(11) NOT NULL AUTO_INCREMENT,
  `devicename` varchar(50) NOT NULL,
  `macaddress` varchar(100) NOT NULL,
  `serialnumber` varchar(100) NOT NULL,
  `hwid` varchar(50) NOT NULL,
  `pn` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `ipaddress` varchar(100) NOT NULL,
  PRIMARY KEY (`fortiwifi_id`),
  UNIQUE KEY `ipaddress` (`ipaddress`),
  UNIQUE KEY `macaddress` (`macaddress`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fortiwifidetails`
--

LOCK TABLES `fortiwifidetails` WRITE;
/*!40000 ALTER TABLE `fortiwifidetails` DISABLE KEYS */;
INSERT INTO `fortiwifidetails` VALUES (26,'AMTEX_WIFI_01','08:5B:0E:C3:1E:9A','FP221B3X14034183','C4KJ81-01AA-0000','P10235-01-01','FAP-221B-S','192.168.0.30'),(27,'AMTEX_WIFI_02','08:5B:0E:C3:1F:2A','FP221B3X14034192','C4KJ81-01AA-0000','P10235-01-01','FAP-221B-S','192.168.0.31');
/*!40000 ALTER TABLE `fortiwifidetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ipdetails`
--

DROP TABLE IF EXISTS `ipdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ipdetails` (
  `ip_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `ipaddress` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  PRIMARY KEY (`ip_id`),
  UNIQUE KEY `ipaddress` (`ipaddress`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ipdetails`
--

LOCK TABLES `ipdetails` WRITE;
/*!40000 ALTER TABLE `ipdetails` DISABLE KEYS */;
INSERT INTO `ipdetails` VALUES (14,'test2','192.168.11.68','The Mode','Used','test'),(15,'test3','192.168.11.69','The Mode','Used','test'),(16,'test','192.168.11.67','The Mode','Used','test'),(17,'ibiqa-test','192.168.128.23','IBIQA','Used','test'),(18,'test5','192.168.128.24','IBIQA','Used','test'),(19,'test6','192.168.11.100','Inventcare','Used','test'),(20,'test10','192.168.11.101','Inventcare','Used','test'),(21,'Deepak','192.168.0.47','HR','Used','test'),(22,'test','192.168.11.70','The Mode','Free','test');
/*!40000 ALTER TABLE `ipdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `janmar`
--

DROP TABLE IF EXISTS `janmar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `janmar` (
  `janmar_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL,
  PRIMARY KEY (`janmar_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `janmar`
--

LOCK TABLES `janmar` WRITE;
/*!40000 ALTER TABLE `janmar` DISABLE KEYS */;
INSERT INTO `janmar` VALUES (1,1,'Form 6',250000,'half',125000,0),(2,2,'Form 6',250000,'paying',250000,250000);
/*!40000 ALTER TABLE `janmar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `julsep`
--

DROP TABLE IF EXISTS `julsep`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `julsep` (
  `julsep_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL,
  PRIMARY KEY (`julsep_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `julsep`
--

LOCK TABLES `julsep` WRITE;
/*!40000 ALTER TABLE `julsep` DISABLE KEYS */;
INSERT INTO `julsep` VALUES (1,1,'Form 6',250000,'half',125000,0),(2,2,'Form 6',250000,'paying',250000,0);
/*!40000 ALTER TABLE `julsep` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `laptopdetails`
--

DROP TABLE IF EXISTS `laptopdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `laptopdetails` (
  `laptop_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `laptopinfo` text NOT NULL,
  `hardwarespec` text NOT NULL,
  `purchasedate` date NOT NULL,
  `vendor` varchar(100) NOT NULL,
  `status` text,
  PRIMARY KEY (`laptop_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laptopdetails`
--

LOCK TABLES `laptopdetails` WRITE;
/*!40000 ALTER TABLE `laptopdetails` DISABLE KEYS */;
INSERT INTO `laptopdetails` VALUES (26,'Sathya Prakash SS','HR','\"Laptop Model: HP 250 G3\r\nLaptop S/N. CND4621DQD\r\nAdapter S/N. WDJBP0A1R7OQ1B\r\nBattery S/N. 6DUUP07SA7QVPR\r\nLaptop Bag: Back pack\r\n\"\r\n','\"WIN8.1-64bit OS, IntelÂ® CeleronÂ® CPU N2840@2.16GHz, 500GB HDD,\r\n4GB RAM, WIFI, DVD drive\r\n\"\r\n','2015-07-15','Arrow Technologies','Sathya Prakash Using\r\n'),(27,'Gowtham Ram N','Inventcare','Laptop Model: HP 250 G3\r\nLaptop S/N. CND4521D9P\r\nAdapter S/N. WDJBP0A1R7OQ5U\r\nBattery S/N. 6DUUP07SA7Q3CQ\r\nLaptop Bag: Back pack\r\n\r\n','WIN8.1-64bit OS, IntelÂ® CeleronÂ® \r\nCPU N2840@2.16GHz, 500GB HDD,\r\n4GB RAM, WIFI, DVD drive\r\n\r\n','2015-07-15','Arrow Technologies','Gowtham Ram N Using\r\n'),(28,'Anchal','Inventcare','Laptop Model: Acer Aspire ES1-512-C3X9\r\nLaptop S/N. NXMRWS100243913B296600\r\nSNID: 43908068166\r\nAdapter S/N. KP04503002436077A1PE01\r\nInbuilt Battery \r\nLaptop Bag: Back pack\r\n\r\n\r\n','Acer Aspire ES1-512-C3X9\r\nCDC-2840 2GB 500GB INT W8.1 15.6 Black 1 Year warranty\r\nAdditional 2GB laptop Transcend Ram - 3 year warranty\r\n\r\n\r\n\r\n','2015-08-06','Arrow Technologies','Anchal is using\r\n');
/*!40000 ALTER TABLE `laptopdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mobiledetails`
--

DROP TABLE IF EXISTS `mobiledetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mobiledetails` (
  `mobile_id` int(11) NOT NULL AUTO_INCREMENT,
  `make` varchar(50) NOT NULL,
  `serialnumber` text NOT NULL,
  `imei` text NOT NULL,
  `wifimacaddress` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `leadname` varchar(100) NOT NULL,
  `team` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  PRIMARY KEY (`mobile_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mobiledetails`
--

LOCK TABLES `mobiledetails` WRITE;
/*!40000 ALTER TABLE `mobiledetails` DISABLE KEYS */;
INSERT INTO `mobiledetails` VALUES (24,'Lenovo VIBE','Phone-SN: HZC1XXR2\r\n','Model: Lenovo P1ma40\r\nPhone-SN: HZC1XXR2\r\nPCBA-SN: 8S32000720WT105AB0BJS\r\nIMEI SIM1: 867274025436315\r\nIMEI SIM2: 867274025436323\r\n','A0:32:99:89:15:E9','Inventcare Emergency Contact','Manoj','Mode','Manoj');
/*!40000 ALTER TABLE `mobiledetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newemployee_emaildetails`
--

DROP TABLE IF EXISTS `newemployee_emaildetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newemployee_emaildetails` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `empid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  PRIMARY KEY (`emp_id`),
  UNIQUE KEY `emailid` (`emailid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newemployee_emaildetails`
--

LOCK TABLES `newemployee_emaildetails` WRITE;
/*!40000 ALTER TABLE `newemployee_emaildetails` DISABLE KEYS */;
INSERT INTO `newemployee_emaildetails` VALUES (5,'7287','Lakshmi chitra S B','Lakshmi_Chitra@infobuild.in'),(6,'7324','Prasanna  Karthikeyan','prasannak@amtexsystems.com');
/*!40000 ALTER TABLE `newemployee_emaildetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `norteldetails`
--

DROP TABLE IF EXISTS `norteldetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `norteldetails` (
  `nortel_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `ipaddress` varchar(50) NOT NULL,
  `macaddress` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL,
  `nortel_extension` int(10) NOT NULL,
  `location` varchar(100) DEFAULT NULL,
  `remarks` varchar(100) NOT NULL,
  PRIMARY KEY (`nortel_id`),
  UNIQUE KEY `ipaddress` (`ipaddress`),
  UNIQUE KEY `macadderss` (`macaddress`),
  UNIQUE KEY `nortel_extension` (`nortel_extension`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `norteldetails`
--

LOCK TABLES `norteldetails` WRITE;
/*!40000 ALTER TABLE `norteldetails` DISABLE KEYS */;
INSERT INTO `norteldetails` VALUES (26,'Board Room','10.0.2.159','00:1B:25:2F:A9:44','Tech','static',7259,'Siruseri','test'),(27,'Training Room','10.0.2.181','5C:E2:86:F4:1F:D9','Tech','static',7223,'Siruseri','test');
/*!40000 ALTER TABLE `norteldetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `octdec`
--

DROP TABLE IF EXISTS `octdec`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `octdec` (
  `octdec_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL,
  PRIMARY KEY (`octdec_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `octdec`
--

LOCK TABLES `octdec` WRITE;
/*!40000 ALTER TABLE `octdec` DISABLE KEYS */;
INSERT INTO `octdec` VALUES (1,1,'Form 6',250000,'half',125000,0),(2,2,'Form 6',250000,'paying',250000,0);
/*!40000 ALTER TABLE `octdec` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_made`
--

DROP TABLE IF EXISTS `payment_made`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment_made` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `period` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `date_of_payment` date NOT NULL,
  `receipt` int(11) NOT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_made`
--

LOCK TABLES `payment_made` WRITE;
/*!40000 ALTER TABLE `payment_made` DISABLE KEYS */;
INSERT INTO `payment_made` VALUES (1,2,'janmar',250000,'2016-10-24',23444),(2,2,'aprjun',250000,'2016-10-24',90909887);
/*!40000 ALTER TABLE `payment_made` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `printers`
--

DROP TABLE IF EXISTS `printers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `printers` (
  `printer_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `printername` varchar(50) NOT NULL,
  `ipaddress` varchar(100) NOT NULL,
  PRIMARY KEY (`printer_id`),
  UNIQUE KEY `ipaddress` (`ipaddress`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `printers`
--

LOCK TABLES `printers` WRITE;
/*!40000 ALTER TABLE `printers` DISABLE KEYS */;
INSERT INTO `printers` VALUES (15,'Albin','westdridge','HP Laserjet P1505n','192.168.0.249'),(16,'Marian Deepak','Inventcare','HP Laserjet M1216nfh MFP','192.168.0.248'),(17,'Floor Common Printer','Tech','Samsung ML 2951ND','192.168.0.10'),(18,'Kishore','Tech','HP Laserjet M1216nfh MFP','192.168.0.9');
/*!40000 ALTER TABLE `printers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `class` varchar(30) NOT NULL,
  `gfirstname` varchar(25) NOT NULL,
  `gmiddlename` varchar(25) NOT NULL,
  `glastname` varchar(25) NOT NULL,
  `rship` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL,
  `transport` varchar(60) NOT NULL,
  `route` varchar(50) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (1,'aaa','bbb','cvvv','Male','2016-10-25','bububu','Form 6','oplkk','jjj','rfrf','father','0789554433','half','yes','kijichi'),(2,'buel','bol','buel','Female','2016-10-26','stonetown','Form 6','bun','bol','buel','mother','0717884452','paying','no','');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `switchdetails`
--

DROP TABLE IF EXISTS `switchdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `switchdetails` (
  `switch_id` int(11) NOT NULL AUTO_INCREMENT,
  `switchmodel` varchar(50) NOT NULL,
  `ports` varchar(100) NOT NULL,
  `rack` varchar(100) NOT NULL,
  `remarks` text NOT NULL,
  PRIMARY KEY (`switch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `switchdetails`
--

LOCK TABLES `switchdetails` WRITE;
/*!40000 ALTER TABLE `switchdetails` DISABLE KEYS */;
INSERT INTO `switchdetails` VALUES (25,'Catalyst 2960 Series','23-Jan-00','Rack1','test');
/*!40000 ALTER TABLE `switchdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_log`
--

DROP TABLE IF EXISTS `user_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_log` (
  `user_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `login_date` varchar(50) NOT NULL,
  `logout_date` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`user_log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_log`
--

LOCK TABLES `user_log` WRITE;
/*!40000 ALTER TABLE `user_log` DISABLE KEYS */;
INSERT INTO `user_log` VALUES (1,'noel.titus','2016-10-24 09:10:07','2016-10-24 09:23:20',3),(2,'noel.titus','2016-10-24 09:11:10','2016-10-24 09:23:20',3),(3,'noel.titus','2016-10-24 09:23:04','2016-10-24 09:23:20',3),(4,'abdul.hemedy','2016-10-24 09:23:30','2016-10-24 09:36:55',4),(5,'admin','2017-08-13 00:53:22','',5),(6,'admin','2017-08-13 01:04:51','',5),(7,'admin','2017-08-13 23:20:24','',5),(8,'admin','2017-08-14 00:03:22','',5),(9,'admin','2017-08-14 00:14:01','',5),(10,'admin','2017-08-15 01:28:41','',5),(11,'admin','2017-08-15 18:30:18','',5),(12,'admin','2017-08-15 18:39:33','',5),(13,'admin','2017-08-15 21:32:30','',5),(14,'admin','2017-08-16 00:13:28','',5),(15,'admin','2017-08-19 19:11:48','',5),(16,'admin','2017-08-19 20:04:54','',5),(17,'admin','2017-08-19 23:19:14','',5),(18,'admin','2017-08-20 13:12:12','',5),(19,'admin','2017-08-20 16:54:50','',5),(20,'admin','2017-08-20 18:24:32','',5),(21,'admin','2017-08-20 19:47:20','',5),(22,'admin','2017-08-20 22:40:38','',5),(23,'admin','2017-08-21 22:17:14','',5),(24,'admin','2017-08-22 00:31:21','',5),(25,'admin','2017-08-22 00:37:20','',5),(26,'admin','2017-08-22 08:03:13','',5),(27,'admin','2017-08-22 08:17:46','',5),(28,'admin','2017-08-22 11:10:17','',5),(29,'admin','2017-08-22 11:21:58','',5),(30,'admin','2017-08-22 22:11:29','',5),(31,'admin','2017-08-23 00:00:46','',5),(32,'admin','2017-08-23 08:09:47','',5),(33,'admin','2017-08-23 08:53:12','',5),(34,'admin','2017-08-23 10:16:24','',5),(35,'admin','2017-08-23 11:25:57','',5),(36,'admin','2017-08-23 22:04:27','',5),(37,'admin','2017-08-23 22:50:55','',5),(38,'admin','2017-08-24 00:09:48','',5),(39,'admin','2017-08-24 08:59:27','',5),(40,'admin','2017-08-24 10:48:24','',5),(41,'admin','2017-08-25 19:46:49','',5),(42,'admin','2017-08-25 21:41:06','',5),(43,'admin','2017-08-25 23:28:47','',5),(44,'admin','2017-08-30 22:40:57','',5),(45,'admin','2017-08-30 23:50:00','',5),(46,'admin','2017-08-31 11:18:34','',5),(47,'admin','2017-09-01 11:26:52','',5),(48,'admin','2017-09-07 00:26:12','',5),(49,'admin','2017-09-07 01:11:09','',5),(50,'admin','2017-09-18 22:19:16','',5),(51,'admin','2017-09-19 00:32:59','',5),(52,'admin','2017-09-19 01:00:03','',5),(53,'admin','2017-09-20 00:14:10','',5),(54,'admin','2017-09-23 00:12:43','',5),(55,'admin','2017-09-23 07:45:09','',5),(56,'admin','2017-09-23 09:43:37','',5),(57,'admin','2017-09-23 16:49:21','',5),(58,'admin','2017-09-23 18:14:54','',5),(59,'admin','2017-09-23 18:15:19','',5),(60,'admin','2017-09-23 18:16:14','',5),(61,'admin','2017-09-23 18:27:09','',5),(62,'admin','2017-09-23 18:28:33','',5),(63,'admin','2017-09-23 18:52:36','',5),(64,'newtest','2017-09-23 21:35:34','',10),(65,'newtest','2017-09-23 21:36:40','',10),(66,'newtest','2017-09-23 21:37:10','',10),(67,'admin','2017-09-23 21:39:45','',5),(68,'admin','2017-09-23 21:54:35','',5),(69,'admin','2017-09-23 21:55:56','',5),(70,'admin','2017-09-23 22:06:18','',5),(71,'admin','2017-09-23 23:32:46','',5),(72,'admin','2017-09-24 11:23:41','',5),(73,'admin','2017-09-24 13:14:33','',5),(74,'admin','2017-09-24 16:10:31','',5),(75,'admin','2017-09-24 18:16:56','',5),(76,'admin','2017-09-24 19:36:34','',5),(77,'admin','2017-09-24 22:31:46','',5),(78,'admin','2017-09-26 00:16:01','',5),(79,'admin','2017-09-26 00:18:08','',5),(80,'admin','2017-09-27 00:15:30','',5),(81,'admin','2017-09-28 00:44:32','',5),(82,'admin','2017-09-29 10:24:43','',5),(83,'admin','2017-09-29 12:20:51','',5),(84,'admin','2017-09-29 16:10:41','',5),(85,'admin','2017-09-29 17:38:36','',5),(86,'admin','2017-09-29 20:18:57','',5),(87,'admin','2017-09-30 00:03:54','',5),(88,'admin','2017-09-30 12:42:05','',5),(89,'admin','2017-09-30 14:21:13','',5),(90,'admin','2017-09-30 16:12:53','',5),(91,'admin','2017-09-30 20:08:44','',5),(92,'admin','2017-09-30 20:09:40','',5),(93,'admin','2017-09-30 21:16:34','',5),(94,'admin','2017-10-01 12:41:29','',5),(95,'admin','2017-10-01 14:36:21','',5),(96,'admin','2017-10-01 16:26:16','',5),(97,'admin','2017-10-01 17:22:43','',5),(98,'admin','2017-10-01 18:33:45','',5),(99,'admin','2017-10-01 23:42:10','',5),(100,'admin','2017-10-02 00:15:52','',5),(101,'admin','2017-10-02 14:40:20','',5),(102,'admin','2017-10-02 16:29:23','',5),(103,'admin','2017-10-02 20:16:16','',5),(104,'admin','2017-10-02 21:13:30','',5),(105,'admin','2017-10-02 22:38:44','',5),(106,'admin','2017-10-02 23:49:31','',5),(107,'admin','2017-10-07 20:07:58','',5),(108,'admin','2017-10-14 10:55:17','',5),(109,'admin','2017-10-14 13:30:18','',5),(110,'admin','2017-10-14 14:42:27','',5),(111,'admin','2017-10-14 16:15:44','',5),(112,'admin','2017-10-14 17:59:33','',5),(113,'admin','2017-10-14 20:08:35','',5),(114,'admin','2017-10-14 20:09:29','',5),(115,'admin','2017-10-14 20:40:44','',5),(116,'admin','2017-10-14 21:09:22','',5),(117,'admin','2017-10-14 22:53:44','',5),(118,'admin','2017-10-15 11:45:23','',5),(119,'admin','2017-10-15 15:17:41','',5),(120,'admin','2017-10-15 17:24:33','',5),(121,'admin','2017-10-15 20:00:03','',5),(122,'admin','2017-10-17 23:47:57','',5),(123,'admin','2017-10-18 13:43:12','',5),(124,'admin','2017-10-18 23:36:48','',5),(125,'admin','2017-10-19 20:54:50','',5),(126,'admin','2017-10-19 22:00:54','',5),(127,'admin','2017-10-19 22:07:33','',5),(128,'admin','2017-10-20 00:21:18','',5),(129,'admin','2017-10-21 22:11:30','',5),(130,'admin','2017-10-22 17:44:10','',5),(131,'admin','2017-10-22 18:14:45','',5),(132,'admin','2017-10-22 23:30:51','',5),(133,'admin','2017-10-24 01:00:12','',5),(134,'admin','2017-10-25 00:15:48','',5),(135,'admin','2017-10-28 23:37:06','',5),(136,'admin','2017-10-29 00:28:54','',5),(137,'admin','2017-10-29 12:54:46','',5),(138,'mari','2017-10-31 20:46:49','',6),(139,'admin','2017-11-01 22:41:36','',5),(140,'admin','2017-11-03 23:30:34','',5),(141,'admin','2017-11-04 23:24:15','',5);
/*!40000 ALTER TABLE `user_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (5,'admin','Amtxx@TRAG','mariyappan','mariyappan','mari@amtexsystems.com','administrator'),(6,'mari','useruser','mariyappan','mariyappan','mari1@amtexsystems.com','administrator'),(7,'test','useruser','mariyappan','mariyappan','test@amtexsystems.com','administrator'),(10,'newtest','useruser','newtest','newtest','newtest@amtexsystems.com','administrator'),(11,'test2','useruser','test2','test2','test2@amtexsystems.com','administrator'),(12,'test3','useruser','test3','test3','test3@amtexsystems.com','administrator');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wifidetails`
--

DROP TABLE IF EXISTS `wifidetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wifidetails` (
  `wifi_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `ipaddress` varchar(50) NOT NULL,
  `macaddress` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  PRIMARY KEY (`wifi_id`),
  UNIQUE KEY `ipaddress` (`ipaddress`),
  UNIQUE KEY `macadderss` (`macaddress`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wifidetails`
--

LOCK TABLES `wifidetails` WRITE;
/*!40000 ALTER TABLE `wifidetails` DISABLE KEYS */;
INSERT INTO `wifidetails` VALUES (23,'Muralidaran','192.168.11.129','AC:C3:3A:61:DC:03','Inventcare','Used','test'),(25,'Bala Personal Laptop (The Mode)','192.168.11.131','c8:FF:28:FF:9F:0F','The Mode','Used','test'),(26,'Viayalakshmi mobile','192.168.11.132','48:3B:38:2F:38:CE','Inventcare','Used','test');
/*!40000 ALTER TABLE `wifidetails` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-06  1:17:26
