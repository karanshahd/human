-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: human
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

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
-- Table structure for table `da`
--

DROP TABLE IF EXISTS `da`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `da` (
  `diseasename` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `count` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `da`
--

LOCK TABLES `da` WRITE;
/*!40000 ALTER TABLE `da` DISABLE KEYS */;
INSERT INTO `da` VALUES ('Swine Flu','Pune','4'),('Swine Flu','Mumbai','2'),('Swine Flu','Surat','1'),('Swine Flu','Bangalore','2'),('Cardiac Arrest','Pune','11'),('Cardiac Arrest','Mumbai','8'),('Cardiac Arrest','Surat','5'),('Cardiac Arrest','Bangalore','1'),('Dengue','Pune','0'),('Dengue','Mumbai','0'),('Dengue','Surat','2'),('Dengue','Bangalore','1'),('Fractured Hand','Pune','3'),('Fractured Hand','Mumbai','8'),('Fractured Hand','Surat','6'),('Fractured Hand','Bangalore','7'),('Dementia','Pune','2'),('Dementia','Mumbai','0'),('Dementia','Surat','0'),('Dementia','Bangalore','8'),('Diabetes','Pune','2'),('Diabetes','Mumbai','3'),('Diabetes','Surat','0'),('Diabetes','Bangalore','4'),('Stroke','Pune','1'),('Stroke','Mumbai','1'),('Stroke','Surat','0'),('Stroke','Bangalore','0'),('Arrhythmia','Pune','1'),('Arrhythmia','Mumbai','1'),('Arrhythmia','Surat','0'),('Arrhythmia','Bangalore','0'),('High blood pressure','Pune','0'),('High blood pressure','Mumbai','1'),('High blood pressure','Surat','0'),('High blood pressure','Bangalore','0');
/*!40000 ALTER TABLE `da` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dalcohol`
--

DROP TABLE IF EXISTS `dalcohol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dalcohol` (
  `diseasename` varchar(50) DEFAULT NULL,
  `alcohol` varchar(50) DEFAULT NULL,
  `count` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dalcohol`
--

LOCK TABLES `dalcohol` WRITE;
/*!40000 ALTER TABLE `dalcohol` DISABLE KEYS */;
INSERT INTO `dalcohol` VALUES ('Swine Flue','Yes','7'),('Swine Flu','No','2'),('Cardiac Arrest','Yes','29'),('Cardiac Arrest','No','3'),('dengue','Yes','1'),('dengue','No','2'),('Fractured Hand','Yes','21'),('Fractured Hand','No','3'),('Dementia','Yes','7'),('Dementia','No','3'),('Diabetes','Yes','5'),('Diabetes','No','4'),('Stroke','Yes','2'),('Stroke','No','0'),('Arrhythmia','Yes','0'),('Arrhythmia','No','2'),('High blood pressure','Yes','1'),('High blood pressure','No','0');
/*!40000 ALTER TABLE `dalcohol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ddiet`
--

DROP TABLE IF EXISTS `ddiet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ddiet` (
  `diseasename` varchar(50) DEFAULT NULL,
  `diet` varchar(50) DEFAULT NULL,
  `count` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ddiet`
--

LOCK TABLES `ddiet` WRITE;
/*!40000 ALTER TABLE `ddiet` DISABLE KEYS */;
INSERT INTO `ddiet` VALUES ('Swine Flue','Non-vegeterian','6'),('Swine Flu','Vegeterian','3'),('Cardiac Arrest','Non-vegeterian','19'),('Cardiac Arrest','Vegeterian','13'),('dengue','Non-vegeterian','1'),('dengue','Vegeterian','2'),('Fractured Hand','Non-vegeterian','8'),('Fractured Hand','Vegeterian','16'),('Dementia','Non-vegeterian','9'),('Dementia','Vegeterian','1'),('Diabetes','Non-vegeterian','7'),('Diabetes','Vegeterian','2'),('Stroke','Non-vegeterian','0'),('Stroke','Vegeterian','2'),('Arrhythmia','Non-vegeterian','2'),('Arrhythmia','Vegeterian','0'),('High blood pressure','Non-vegeterian','1'),('High blood pressure','Vegeterian','0');
/*!40000 ALTER TABLE `ddiet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ddoc`
--

DROP TABLE IF EXISTS `ddoc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ddoc` (
  `diseasename` varchar(50) DEFAULT NULL,
  `doctor` varchar(50) DEFAULT NULL,
  `count` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ddoc`
--

LOCK TABLES `ddoc` WRITE;
/*!40000 ALTER TABLE `ddoc` DISABLE KEYS */;
INSERT INTO `ddoc` VALUES ('Swine Flu','Basil Shaikh','0'),('Swine Flu','Karan Shah','0'),('Swine Flu','Mobin','0'),('Swine Flu','Prashant','0'),('Swine Flu','Kering','7'),('Swine Flu','Ammar','2'),('Cardiac Arrest','Basil Shaikh','1'),('Cardiac Arrest','Karan Shah','23'),('Cardiac Arrest','Mobin','0'),('Cardiac Arrest','Prashant','0'),('Cardiac Arrest','Kering','0'),('Cardiac Arrest','Ammar','0'),('dengue','Basil Shaikh','0'),('dengue','Karan Shah','0'),('dengue','Mobin','0'),('dengue','Prashant','3'),('dengue','Kering','0'),('dengue','Ammar','0'),('Fractured Hand','Basil Shaikh','0'),('Fractured Hand','Karan Shah','0'),('Fractured Hand','Mobin','24'),('Fractured Hand','Prashant','0'),('Fractured Hand','Kering','0'),('Fractured Hand','Ammar','0'),('Dementia','Basil Shaikh','10'),('Dementia','Karan Shah','0'),('Dementia','Mobin','0'),('Dementia','Prashant','0'),('Dementia','Kering','0'),('Dementia','Ammar','0'),('Diabetes','Basil Shaikh','0'),('Diabetes','Karan Shah','0'),('Diabetes','Mobin','0'),('Diabetes','Prashant','0'),('Diabetes','Kering','0'),('Diabetes','Ammar','9'),('Stroke','Basil Shaikh','0'),('Stroke','Karan Shah','2'),('Stroke','Mobin','0'),('Stroke','Prashant','0'),('Stroke','Kering','0'),('Stroke','Ammar','0'),('Arrhythmia','Basil Shaikh','1'),('Arrhythmia','Karan Shah','0'),('Arrhythmia','Mobin','0'),('Arrhythmia','Prashant','0'),('Arrhythmia','Kering','0'),('Arrhythmia','Ammar','0'),('High blood pressure','Basil Shaikh','1'),('High blood pressure','Karan Shah','0'),('High blood pressure','Mobin','0'),('High blood pressure','Prashant','0'),('High blood pressure','Kering','0'),('High blood pressure','Ammar','0');
/*!40000 ALTER TABLE `ddoc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dg`
--

DROP TABLE IF EXISTS `dg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dg` (
  `diseasename` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `count` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dg`
--

LOCK TABLES `dg` WRITE;
/*!40000 ALTER TABLE `dg` DISABLE KEYS */;
INSERT INTO `dg` VALUES ('Swine Flu','Male','7'),('Swine Flu','Female','2'),('dengue','Male','0'),('Dengue','Male','3'),('Dengue','Female','0'),('Fractured Hand','Male','13'),('Fractured Hand','Female','11'),('Dementia','Male','4'),('Dementia','Female','6'),('Diabetes','Male','9'),('Diabetes','Female','0'),('Cardiac Arrest','Male','8'),('Cardiac Arrest','Female','17'),('Stroke','Female','2'),('Stroke','Male','0'),('Arrhythmia','Male','0'),('Arrhythmia','Female','2'),('High blood pressure','Male','0'),('High blood pressure','Female','1');
/*!40000 ALTER TABLE `dg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dh`
--

DROP TABLE IF EXISTS `dh`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dh` (
  `diseasename` varchar(50) DEFAULT NULL,
  `hospital` varchar(50) DEFAULT NULL,
  `count` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dh`
--

LOCK TABLES `dh` WRITE;
/*!40000 ALTER TABLE `dh` DISABLE KEYS */;
INSERT INTO `dh` VALUES ('Swine Flu','Sancheti','9'),('Swine Flu','Ruby','0'),('Swine Flu','Jehangir','0'),('Cardiac Arrest','Sancheti','0'),('Cardiac Arrest','Ruby','24'),('Cardiac Arrest','Jehangir','0'),('dengue','Sancheti','0'),('dengue','Ruby','0'),('dengue','Jehangir','3'),('Fractured Hand','Sancheti','0'),('Fractured Hand','Ruby','0'),('Fractured Hand','Jehangir','24'),('Dementia','Sancheti','0'),('Dementia','Ruby','10'),('Dementia','Jehangir','0'),('Diabetes','Sancheti','9'),('Diabetes','Ruby','0'),('Diabetes','Jehangir','0'),('Stroke','Sancheti','0'),('Stroke','Ruby','2'),('Stroke','Jehangir','0'),('Arrhythmia','Sancheti','0'),('Arrhythmia','Ruby','2'),('Arrhythmia','Jehangir','0'),('High blood pressure','Sancheti','0'),('High blood pressure','Ruby','1'),('High blood pressure','Jehangir','0');
/*!40000 ALTER TABLE `dh` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diseasecount`
--

DROP TABLE IF EXISTS `diseasecount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diseasecount` (
  `diseasename` varchar(50) DEFAULT NULL,
  `count` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diseasecount`
--

LOCK TABLES `diseasecount` WRITE;
/*!40000 ALTER TABLE `diseasecount` DISABLE KEYS */;
INSERT INTO `diseasecount` VALUES ('Swine Flu','9'),('Cardiac Arrest','24'),('dengue','3'),('Fractured Hand','24'),('Dementia','10'),('Diabetes','9'),('Stroke','2'),('Arrhythmia','2'),('High blood pressure','1');
/*!40000 ALTER TABLE `diseasecount` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dtobacco`
--

DROP TABLE IF EXISTS `dtobacco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dtobacco` (
  `diseasename` varchar(50) DEFAULT NULL,
  `tobacco` varchar(50) DEFAULT NULL,
  `count` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dtobacco`
--

LOCK TABLES `dtobacco` WRITE;
/*!40000 ALTER TABLE `dtobacco` DISABLE KEYS */;
INSERT INTO `dtobacco` VALUES ('Swine Flue','Yes','5'),('Swine Flu','No','4'),('Cardiac Arrest','Yes','20'),('Cardiac Arrest','No','10'),('Swine Flu','Yes','7'),('dengue','Yes','2'),('dengue','No','1'),('Fractured Hand','Yes','10'),('Fracture Hand','No','13'),('l','Yes','10'),('Fracture Hand','No','13'),('Dementia','Yes','2'),('Dementia','No','8'),('Diabetes','Yes','5'),('Diabetes','No','4'),('Stroke','Yes','0'),('Stroke','No','2'),('Arrhythmia','Yes','2'),('Arrhythmia','No','0'),('High blood Pressure','Yes','0'),('High blood pressure','No','1');
/*!40000 ALTER TABLE `dtobacco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blood`
--

DROP TABLE IF EXISTS `blood`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blood` (
  `bloodgroup` varchar(50) DEFAULT NULL,
  `count` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blood`
--

LOCK TABLES `blood` WRITE;
/*!40000 ALTER TABLE `blood` DISABLE KEYS */;
INSERT INTO `blood` VALUES ('A','11'),('AB','8'),('B','23'),('0','42');
/*!40000 ALTER TABLE `blood` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-05  1:37:18
