-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: treeUK2
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.04.2

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
-- Table structure for table `woodlands`
--

DROP TABLE IF EXISTS `woodlands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `woodlands` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longitude_and_latitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `woodlands`
--

LOCK TABLES `woodlands` WRITE;
/*!40000 ALTER TABLE `woodlands` DISABLE KEYS */;
INSERT INTO `woodlands` VALUES (1,'quia','176.90587','Quasi qui iste modi omnis veritatis enim culpa nulla. Officiis ullam et qui eos pariatur. Quis rerum minima odio quas nemo dolor officia.','2019-03-23 13:24:48','2019-03-23 13:24:48'),(2,'velit','-62.102367','Nihil itaque quidem veniam quis sed repudiandae. Occaecati odio placeat aut dolores magni. Et exercitationem ea voluptas sint. Nulla blanditiis deleniti non modi sed libero. Error molestiae perspiciatis blanditiis sit dolore.','2019-03-23 13:24:48','2019-03-23 13:24:48'),(3,'facere','-13.049813','Quis rem id eum commodi voluptas. Ea dolor sunt repellat alias et. Nisi veniam numquam ut beatae unde eum odio quibusdam.','2019-03-23 13:24:48','2019-03-23 13:24:48'),(4,'omnis','81.74699','Eum cumque inventore porro sapiente placeat. Iusto eos sequi rerum ipsa libero quas.','2019-03-23 13:24:48','2019-03-23 13:24:48'),(5,'voluptatem','-100.06341','Non sit qui corrupti incidunt. Quibusdam eaque voluptas corrupti et eum dolorem. Dolorem deleniti quis quia iure voluptates.','2019-03-23 13:24:48','2019-03-23 13:24:48');
/*!40000 ALTER TABLE `woodlands` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-23 14:15:42
