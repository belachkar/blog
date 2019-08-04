CREATE DATABASE  IF NOT EXISTS `ocr` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `ocr`;
-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: localhost    Database: ocr
-- ------------------------------------------------------
-- Server version	8.0.17

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
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `idComment` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `comment` text COLLATE utf8mb4_general_ci NOT NULL,
  `date_comment` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idComment`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Blog comments';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,2,'Mathieu','Preum\'s','2017-09-24 17:12:30'),(2,2,'Sam','Quelqu\'un a un avis là-dessus ? Je ne sais pas quoi en penser.','2017-09-24 17:21:34'),(8,1,'Jojo','C\'est moi !\r\nC\'est vrai, c\'est bien toi!','2019-08-04 01:33:58'),(9,2,'Mathieu','Retest\r\nEncore','2017-10-27 11:46:50'),(10,2,'Sam','tu testes quoi ?','2017-10-27 15:44:14'),(11,2,'Belachkar','C\'est intéressant','2019-08-03 03:37:54'),(12,1,'Belachkar',':):):):)::Ce blog est magnifique::):):):):):):):):):):):))\r\n:):):):):):):):):):)::Whao::):):):):):):):):):):):):):):))\r\n:):):):):):):):):):):):):):):):):):):):):):)):):):):):):))\r\nIl mérite des applaudissement qu\'est ce que vous en dite.)\r\n:):):):):):):):):):):):):):):):):):):):):):):):):):):):)))','2019-08-04 01:31:34'),(13,1,'Michael Jackson','Je recommande ce blog! ?','2019-08-04 01:50:02'),(14,5,'David geta','Kotlin ⁂⁂⁂⁂⁂⁂⁂⁂⁂⁂ Kotlin⁂⁂⁂⁂⁂ Kotlinniltok ⁂⁂⁂⁂⁂\r\n⁂ Kotlin ⁂⁂⁂⁂⁂⁂⁂ Kotlin ⁂⁂⁂⁂⁂ Kotlin ⁂ Kotlin ⁂⁂⁂⁂\r\n⁂⁂ Kotlin ⁂⁂⁂⁂⁂ Kotlin ⁂⁂⁂⁂⁂ Kotlin ⁂⁂⁂ Kotlin ⁂⁂⁂\r\n⁂⁂⁂ Kotlin ⁂⁂⁂ Kotlin ⁂⁂⁂⁂⁂ Kotlin ⁂⁂⁂⁂⁂ Kotlin ⁂⁂\r\n⁂⁂⁂⁂ Kotlin ⁂ Kotlin ⁂⁂⁂⁂⁂ Kotlin ⁂⁂⁂⁂⁂⁂⁂ Kotlin ⁂\r\n⁂⁂⁂⁂⁂ Kotlinniltok ⁂⁂⁂⁂⁂Kotlin ⁂⁂⁂⁂⁂⁂⁂⁂⁂⁂ Kotlin⁂','2019-08-04 02:10:55'),(15,4,'Thomas adison','ੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱ\r\nੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱ JS THE BEST LANGUAGE ੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱ\r\nੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱ\r\nੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱੱ','2019-08-04 02:17:12'),(16,3,'Bob Marley','And it\'s fire ????????????????????\r\nNo woman no cry ??‍♀️??‍♀️??‍♀️??‍♀️??‍♀️??‍♀️??‍♀️??‍♀️??‍♀️??‍♀️??‍♀️??‍♀️??‍♀️??‍♀️??‍♀️\r\nOld pirats, yesthay rob I ???????????','2019-08-04 02:29:13');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `idPost` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `content` text COLLATE utf8mb4_general_ci NOT NULL,
  `date_creation` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idPost`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Blog posts';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Bienvenue sur mon blog !','Je vous souhaite à toutes et à tous la bienvenue sur mon blog qui parlera de... PHP bien sûr !','2017-09-18 16:28:41'),(2,'Le PHP à la conquête du monde !','C\'est officiel, l\'éléPHPant a annoncé à la radio hier soir \"J\'ai l\'intention de conquérir le monde !\".\r\nIl a en outre précisé que le monde serait à sa botte en moins de temps qu\'il n\'en fallait pour dire \"éléPHPant\". Pas dur, ceci dit entre nous...','2017-09-20 16:28:41'),(3,'Python','Python has been a growing programming language and it shows no signs of disappearing. You’ll find it in web applications, desktop apps, network servers, machine learning, media tools and more.\r\n\r\nYou might find Python useful for back-end services and API’s, if you’re in security or Site Reliability Engineering. Python-based web development framework like Django, Pyramid and Turbo Gear have found more and more popularity.\r\n\r\nIn the end, it’s a good choice for beginner developers to learn Python, as it’s high-level and easy to read and comprehend language. Python stats according to PYPL site. There’s a great aricle on courses for ethical hackers for programming language. Go and check it out.','2019-08-04 00:37:30'),(4,'JAVASCRIPT','JavaScript is the most popular language according to Stack OverFlow. More than half of all developers use JavaScript. It’s vital to front-end development and increasingly relevant to back-end development. And it’s rapidly expanding into areas like game development and the (IOT) Internet of things. JavaScript stats according to Stack OverFlow survey for 2018.','2019-08-04 00:58:17'),(5,'KOTLIN','Kotlin is the second most loved and wanted a programming language in 2018 Stack OverFlow survey. Kotlin language is originally developed by JetBrains. It is fully inter-operable with Java and comes with no limitations. It can be used almost everywhere Java is used today: for server-side development, Android Apps, and much more.\r\n\r\nAndroid developer has also been using Kotlin language from some time and loved the most. In 2017 Google announced that, Kotlin is now the official language for Android development. Kotlin works great with all existing Java libraries and frameworks and runs with same level of performance as with Java.','2019-08-04 00:58:59');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-04  3:35:41
