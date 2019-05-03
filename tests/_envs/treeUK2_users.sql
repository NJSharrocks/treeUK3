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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'nathan','nathan.sharrocks.9@googlemail.com','$2y$10$1uoNx9HVYB1RVObdTk8MJOwfHFxpZdT11AmBQ21FJYzSboGXVYtTC','tmsFHQG3Xw',NULL,NULL),(2,'Rosemarie Bailey','izboncak@example.net','$2y$10$aTaVMXjN6O9.2G0ltXw5du86bQIsPWieiyNmqook/en2A8bndJhY6','ibDLqLeYY7','2019-03-23 13:24:48','2019-03-23 13:24:48'),(3,'Prof. Wilford Auer PhD','wyman.jillian@example.com','$2y$10$wjZ2B/OO9E2hBe4GICSm2OJYvDCLUNFzC1RKX6/wbITF1MyakmFeO','YnFfXCOTvj','2019-03-23 13:24:48','2019-03-23 13:24:48'),(4,'Kendall Altenwerth','dgoodwin@example.net','$2y$10$wP15DTE9ixdBz3DF8hmyLOs/WgzroG4x8MFqd91pcdnNATxPE5T4q','5s69EtYOdW','2019-03-23 13:24:48','2019-03-23 13:24:48'),(5,'Mr. Ronny Jerde','arne17@example.com','$2y$10$W4Nf5zgaiBf33SxLAepNWe1CM4YtQLFelOtFKWOtEluos39p.5Llm','9mfL7OavlV','2019-03-23 13:24:48','2019-03-23 13:24:48'),(6,'Mrs. Sophie Schaden II','iklocko@example.net','$2y$10$FPxBWv0U0q8xBIj1DnOkleUT.m/ggJzsdjLuAv90baTOYMH2VnQpG','UeKQLCWexD','2019-03-23 13:24:48','2019-03-23 13:24:48'),(7,'Rolando Veum','bergstrom.molly@example.com','$2y$10$PSVp2vUEKuGoZXo75YaVJO0nUPdkEsTDY6pLK7lahVO4t0ZFbT7Zu','I8KQdRbpCR','2019-03-23 13:24:48','2019-03-23 13:24:48'),(8,'Salvatore Parker','marion40@example.com','$2y$10$xSXR7898bcOdkEaUIfhPt.cwus2YO1EQwAAJpo9FWynDnCsrQe1e2','e6kBkavVyk','2019-03-23 13:24:48','2019-03-23 13:24:48'),(9,'Jordyn Toy DDS','jherzog@example.org','$2y$10$Klq/ZMv/t/1moojzt7neiO.tFkJx40wuWIdUwpAlyUisR7YtlL.oK','GaygOgTL39','2019-03-23 13:24:48','2019-03-23 13:24:48'),(10,'Prof. Shaina Grady III','rod35@example.com','$2y$10$1SCyAQx8cp9e4PLDfhJUaepvnxbjhkrdOP4OubJ/ThXS4dUInF2hi','3O5C4VlAYv','2019-03-23 13:24:48','2019-03-23 13:24:48'),(11,'Beverly Quigley','zita.jenkins@example.org','$2y$10$DwsMgIyiqEIjMyzVRKclTu2zcle0I5BNZUAJkKyLdMCCv4HStMrpO','tFwrZ1F0tt','2019-03-23 13:24:48','2019-03-23 13:24:48'),(12,'Holden Hirthe DVM','stehr.abbie@example.com','$2y$10$Y8YYSRzgaA9Prh9ZRgHzcepxuN/csaIfF8K7F7uxUWZKSaY8s6Ip2','AGnclYSUz9','2019-03-23 13:24:48','2019-03-23 13:24:48'),(13,'Lavina Medhurst','oconner.kiana@example.com','$2y$10$2FrNC71E.vEoBZiAytvgteuGn5ukXU/F1GlKYM6RTrsHRGqGtWaVC','SjBigWx1A2','2019-03-23 13:24:48','2019-03-23 13:24:48'),(14,'Krystina Reynolds','hstokes@example.com','$2y$10$QgT5LjFJ3uV3Vd0YalRAVuPDSS.4UlEwlTXBdB/oTXxww9G2S4OQy','kEJ0Htlgz0','2019-03-23 13:24:48','2019-03-23 13:24:48'),(15,'Prof. Christopher Wuckert','jadyn.durgan@example.com','$2y$10$svKGXsVYz21zBQJkMKHch..yEBAKfGV5L4r14sLbQgIj4MPu4EASi','6dur8aStWn','2019-03-23 13:24:48','2019-03-23 13:24:48'),(16,'Gage Hoeger','vhirthe@example.org','$2y$10$lNg00BBk5bmdsay.8iWMM.6RxLAhK8jKCZHALL12STL9TTEyfPUly','H59zVQsUhi','2019-03-23 13:24:48','2019-03-23 13:24:48'),(17,'Samara O\'Reilly','zack.borer@example.net','$2y$10$MuNf34A4d/oa8ZLj1lF6PuRq1ePXKPoWg9SPcFKNvawDQrF0CBKiq','KRfaWJU5SA','2019-03-23 13:24:48','2019-03-23 13:24:48'),(18,'Miss Mikayla O\'Connell I','steuber.madie@example.org','$2y$10$59h7K3CoGO6pdd9DFOMvrevlg8vFYoyz3vSbjbxDOMLyzbKb/KnvC','XWmItRYqQT','2019-03-23 13:24:48','2019-03-23 13:24:48'),(19,'Salma Moen','ramiro78@example.org','$2y$10$4cF39kOuMMo0oD/eGvN0reTYTB7ovRuqpbb62N1iwk5FTn9UsxDv6','K02hHh5jop','2019-03-23 13:24:48','2019-03-23 13:24:48'),(20,'Robyn Schulist','laney24@example.net','$2y$10$whiOH6q5st/.Ygmw8FdTi.kFNgw3D9V4PwmmyS4NTdIwfRRBOiwIe','b7uXY62DFE','2019-03-23 13:24:48','2019-03-23 13:24:48'),(21,'Jackeline Johnson IV','hartmann.shakira@example.org','$2y$10$9JoeJTbMBCrwV73pxqLluOp.FxZ3g/gN6GAOUi1Q7UVoEevqBYmBW','PZHIMrnYF6','2019-03-23 13:24:48','2019-03-23 13:24:48'),(22,'Vesta Lind','henry.rowe@example.org','$2y$10$piHeOamMCZGGzhyLKcbL7ewIa.JexkFSWpMbW.x8k2GSa/4k8zMrO','0fT1HIcQmk','2019-03-23 13:24:48','2019-03-23 13:24:48'),(23,'Ms. Delores Koch DVM','ricardo27@example.com','$2y$10$hhYQgYw4Mo8LFOjzsI6IOONN63kA/Ydyfnnp4XWquP..YiPqoNT7u','McB4lCr8Zy','2019-03-23 13:24:48','2019-03-23 13:24:48'),(24,'Trenton Cormier','klind@example.com','$2y$10$kl/sNwL1sRJFOg3VTlTzxe/uiuaOWdMbvnNfqRbL/GQ57.fK8MWBa','bO1rw3c4VP','2019-03-23 13:24:48','2019-03-23 13:24:48'),(25,'Lia Barton III','mortiz@example.org','$2y$10$WYk9Eb1mpPYizCVLWlT0LuF2PN2aso91gyBH9nPn7Ng8bTcThe5p6','CijxBDMsSO','2019-03-23 13:24:48','2019-03-23 13:24:48'),(26,'Miss Minerva Powlowski','linnie.leannon@example.org','$2y$10$CyAmapBuFHPxpzOaXxtNi.IWBKp9ogviWYjl5gmN8BH9d/co5uvVy','s8HeANR1km','2019-03-23 13:24:48','2019-03-23 13:24:48'),(27,'Grayce Heidenreich','wgrimes@example.com','$2y$10$7zmVRcXBbftenuB6vxf04uxWZD9pqVxfW/fxbAr.XuQNvhQ9XAFba','UYzLitZbq8','2019-03-23 13:24:48','2019-03-23 13:24:48'),(28,'Kian Corwin IV','strosin.enrique@example.org','$2y$10$s9XblmzRjVVZt39/6dAnF.Kjg.wWPalywo458C5IXN26smlWQX2Ke','4PIFMiuuDv','2019-03-23 13:24:48','2019-03-23 13:24:48'),(29,'Mr. Jaylan Bergnaum','markus22@example.net','$2y$10$XY3eEsI36aTBvmNE6qscrepJC.5nrrnjGTZlUsJgcv7Iw51rB3bOu','wcHXjRarlK','2019-03-23 13:24:48','2019-03-23 13:24:48'),(30,'Barton Crona','durgan.layne@example.com','$2y$10$cUEydJKKdU1W46NCvj8VZegXHdoMDIo1u2QDVG0czZU4gwYYLQdMi','eOrynAUMVf','2019-03-23 13:24:48','2019-03-23 13:24:48'),(31,'Devan Lynch','lebsack.dandre@example.net','$2y$10$Ksp7VgcinXPFhM2tgG3HF.ySYHyBSJBM8a/51bj4ItEtTL.spwSOy','fcop11Rzz1','2019-03-23 13:24:48','2019-03-23 13:24:48'),(32,'Dion O\'Kon','nsteuber@example.com','$2y$10$Tv1rpr0/RIYofytJgbGJPepn/6kUw0Q//X/pV2nzUhc0itg7zasYO','Yk27PDIXkK','2019-03-23 13:24:48','2019-03-23 13:24:48'),(33,'Miss Icie Heathcote','efeeney@example.org','$2y$10$ojsjk7o05OlPRZWKv.iOoOObCzEfR7CIqDYdrUsEn4TWMeMDr93EK','VBroGe8Oq3','2019-03-23 13:24:48','2019-03-23 13:24:48'),(34,'Leila Streich','brown.hermann@example.net','$2y$10$wM0sI0bRKJJvgpzNENrzU.Y9aZNQg7yZXhDHY2CF2ZLx.EqWFKnAO','IuJMGKrdUw','2019-03-23 13:24:48','2019-03-23 13:24:48'),(35,'Ms. Evelyn Rodriguez V','amanda48@example.com','$2y$10$Co9q36I1uIPOUULyKrHCYuJVafpKuYoG6ZhOWebOLejm33IAOuVvS','tbXWUhGXTL','2019-03-23 13:24:48','2019-03-23 13:24:48'),(36,'Annabelle Heaney DVM','mclaughlin.peyton@example.org','$2y$10$SQ9srdCeqjGy5oOqzJ3fvegqrvWSnyqrS9Bx9HI69viBHyudtxLNi','g2NzKdSLeC','2019-03-23 13:24:48','2019-03-23 13:24:48'),(37,'Jordane Bernier PhD','rschaden@example.org','$2y$10$bGZSrbSL0RMCraod6TldSOmDk8Xr7zKbljt8zJaD/Xw.PATmcROTe','vJFuvovJc9','2019-03-23 13:24:48','2019-03-23 13:24:48'),(38,'Augustine Legros','rogahn.leslie@example.org','$2y$10$195xTa.lwrsXEezcRnbMjuD3Dg9xubk7LvBIPCc60Tl6W0kqqGFHC','XsLAw6sEXO','2019-03-23 13:24:48','2019-03-23 13:24:48'),(39,'Chaya Yost','cummerata.weldon@example.com','$2y$10$tIHi806Ob.82tFVHC5GMWOKaNnFTYhxm6/a.PetHrwrEtveDy5ypC','ccpxZBDLjO','2019-03-23 13:24:48','2019-03-23 13:24:48'),(40,'Wilma Rowe','sigrid37@example.net','$2y$10$O1Mv4S1eKkXaOQsYKXpX5uvTxvueH.mpqb9EU9Dzkyj3AYMgCVbfq','HwRa3kVI1l','2019-03-23 13:24:48','2019-03-23 13:24:48'),(41,'Alexys Bogan','eveline.kerluke@example.com','$2y$10$/62phQKJyrwr3oZphc6WB.OQFyxGaguHu1PgrsTP3QEx4kX5.ZKU.','GBdrDPRkq3','2019-03-23 13:24:48','2019-03-23 13:24:48'),(42,'Mr. Linwood Turcotte DDS','rgoodwin@example.net','$2y$10$a6Dt.OkFByVKrTY8YS7Gj.V1vWVwUqWM5I6PwDS8XLuUXf12zxQfS','Lub7Ct8ZfB','2019-03-23 13:24:48','2019-03-23 13:24:48'),(43,'Dr. Gina Goodwin','lebsack.joel@example.org','$2y$10$nAoni/jKn9s6Rb6CSgwSme8KCmPUTXfV5/a0mBe/5FZJL1rPDTB.W','01VizJWiRL','2019-03-23 13:24:48','2019-03-23 13:24:48'),(44,'Malvina Feil','barton.mitchell@example.com','$2y$10$lBKhDrwmZc1Y5sdRtrii/.MqITeGY5Cv7xe.iTMzMjdPXV2qeFibm','tM6UB6Oiaz','2019-03-23 13:24:48','2019-03-23 13:24:48'),(45,'Murl Toy','chanelle70@example.net','$2y$10$uK7htLWYvpFyCFNnxWvNl..j6r9pg01/yq2ak9A5PlkGKLhk1lHcq','Lv9rDlOqaf','2019-03-23 13:24:48','2019-03-23 13:24:48'),(46,'Roscoe Medhurst','brad.pfannerstill@example.org','$2y$10$.xeKtM/K4VeUD8Ej.fYrOe5CXGrOSxMHZywpjlX9BVLMb..Sk4y2K','LFx2ApAhcs','2019-03-23 13:24:48','2019-03-23 13:24:48'),(47,'Elisabeth Kreiger','daren.leffler@example.net','$2y$10$/6pUOR90HrWfxOLs1pIY9.AcR57xdKAjTWSQCgW6Tyb8n1dwkpJ0i','SP39Pp6jri','2019-03-23 13:24:48','2019-03-23 13:24:48'),(48,'Mr. Darrell Rowe IV','ireynolds@example.com','$2y$10$N.aZpDNkethid3RX9qcPROkuGdycHM9dIMjnE8TTOGtFmwZu/1Bl6','NZextdpl42','2019-03-23 13:24:48','2019-03-23 13:24:48'),(49,'Katelyn Veum','candido18@example.com','$2y$10$Lkw2qBW2y.RCKusy9j/uJuo2x8SSQYpkuBR9hJn/LdeUYdUgpYbTu','gFSdl0TZRJ','2019-03-23 13:24:48','2019-03-23 13:24:48'),(50,'Robyn Kessler IV','grady.velma@example.com','$2y$10$kQ9Q5QRcnW3XCI4Er5A1BeXWCjdup.7MNeGsIoI5gssfhO8CAXhum','rfcPageAP7','2019-03-23 13:24:48','2019-03-23 13:24:48'),(51,'Clair Hintz','vmoore@example.net','$2y$10$TB2k6WGL/A0W/VnYmkIZJedUXzR79tP2faOfv8jfBnVZ03cOheDTK','k2GctsNzMy','2019-03-23 13:24:48','2019-03-23 13:24:48');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-23 14:15:41
