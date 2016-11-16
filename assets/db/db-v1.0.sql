CREATE DATABASE  IF NOT EXISTS `single-page` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `single-page`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: single-page
-- ------------------------------------------------------
-- Server version	5.7.14-log

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
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `frase` varchar(450) DEFAULT NULL,
  PRIMARY KEY (`id_banner`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banner`
--

LOCK TABLES `banner` WRITE;
/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
INSERT INTO `banner` VALUES (1,'Seja a mudança <br />que o mundo precisa!'),(2,'Veja a mudança <br />que precisamos!'),(3,'Sinta a mudança <br />que eles precisam!'),(4,'Tenha a mudança <br />que todoo mundo precisa!');
/*!40000 ALTER TABLE `banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'wefwerf','ewrgwerhgwerh','weyue4t6juéo wpfgjpreterng 435043  w34gi-tbkgbçgb.gbç bnç bvspd tposerpfdçbnwelçflk  '),(2,'why984 65 654ty 651y',' r6ty51t6 y4*/ ','ty* /y*/ ty */ry/ */ *04ty*4y 0* 849y 49y 40949th40h tyhrrty ty hrty rty  9840 ty 9y48ty  yt40'),(3,'ergreg','ergerg','ergergererg'),(4,'ergerg','ergergergwefwe','werg6er6 6e6re66e4 6e6 611 54er41 '),(5,'6541644651 rt','rtrthrth ','reth ert htr tr@@@@@@@@@@@@@@@@@@ rrrrrrrrrrrrfe'),(6,'ergerg','ergrgwvwvvv','vvvvwe651b6trbtrb4198trb. 0tf,b ,,r'),(7,'tyjty','tyjty','jtyj984ty9j87yuj98 / r/tr/ tr //* th*r/7t4 21332 r12t0 00000000!@##$%¨&*()_+_)(*&¨%$#@!!!\'\"\"\"gfe   <,>;?Ç^~]}]´´{{{ªº°'),(8,'4g','gg4r','ergg4g'),(9,'6468468','168104','60468 jkvhbbkij'),(10,'wqefer','rwegth','wgtherg4658be');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagens`
--

DROP TABLE IF EXISTS `imagens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagens` (
  `id_imagens` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `caminho` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_imagens`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagens`
--

LOCK TABLES `imagens` WRITE;
/*!40000 ALTER TABLE `imagens` DISABLE KEYS */;
INSERT INTO `imagens` VALUES (1,'slide_1','assets/img/slide_1.jpg'),(2,'slide_2','assets/img/slide_2.jpg'),(3,'slide_3','assets/img/slide_3.jpg'),(4,'slide_4','assets/img/slide_4.jpg');
/*!40000 ALTER TABLE `imagens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `texto`
--

DROP TABLE IF EXISTS `texto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `texto` (
  `id_texto` int(11) NOT NULL,
  `texto` varchar(500) DEFAULT NULL,
  `tag` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_texto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `texto`
--

LOCK TABLES `texto` WRITE;
/*!40000 ALTER TABLE `texto` DISABLE KEYS */;
INSERT INTO `texto` VALUES (1,'Environmental protection is a practice of protecting the natural environment on individual, organisation controlled or governmental levels, for the benefit of both the environment and humans.','Protect'),(2,'The natural environment encompasses all living things and non-living things occurring naturally. The term is most often applied to the Earth or some part of Earth. This environment encompasses the interaction of all living species, climate, weather, and natural resources that affect human survival and economic activity. ','Environment'),(3,'To connect children and their families to nature and to each other through time spent learning, playing and volunteering outdoors.','Family'),(4,'Nature, in the broadest sense, is the natural, physical, or material world or universe. \"Nature\" can refer to the phenomena of the physical world, and also to life in general. The study of nature is a large part of science.','About');
/*!40000 ALTER TABLE `texto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-09 18:40:56
