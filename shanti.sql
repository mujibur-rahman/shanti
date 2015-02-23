-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: shanti
-- ------------------------------------------------------
-- Server version	5.5.37-0ubuntu0.13.10.1

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
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `address` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `thana_id` int(10) unsigned NOT NULL,
  `district_id` int(10) unsigned NOT NULL,
  `division_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `address_thana_id_foreign` (`thana_id`),
  KEY `address_district_id_foreign` (`district_id`),
  KEY `address_division_id_foreign` (`division_id`),
  CONSTRAINT `address_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `district` (`id`),
  CONSTRAINT `address_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `division` (`id`),
  CONSTRAINT `address_thana_id_foreign` FOREIGN KEY (`thana_id`) REFERENCES `thana` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address`
--

LOCK TABLES `address` WRITE;
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
/*!40000 ALTER TABLE `address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_categories_language`
--

DROP TABLE IF EXISTS `article_categories_language`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_categories_language` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_view_count` int(11) NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isactive` tinyint(1) NOT NULL,
  `sort` tinyint(4) NOT NULL,
  `article_category_id` int(10) unsigned NOT NULL,
  `language_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `article_categories_language_article_category_id_foreign` (`article_category_id`),
  KEY `article_categories_language_language_id_foreign` (`language_id`),
  CONSTRAINT `article_categories_language_article_category_id_foreign` FOREIGN KEY (`article_category_id`) REFERENCES `article_category` (`id`),
  CONSTRAINT `article_categories_language_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_categories_language`
--

LOCK TABLES `article_categories_language` WRITE;
/*!40000 ALTER TABLE `article_categories_language` DISABLE KEYS */;
INSERT INTO `article_categories_language` VALUES (2,0,'ভাষা শহীদদের জন্য বিশেষ মোনাজাতে খালেদাভাষা শহীদদের জন্য বিশেষ মোনাজাতে খালেদাভাষা শহীদদের জন্য বিশেষ মোনাজাতে খালেদা','ভাষা শহীদদের জন্য বিশেষ মোনাজাতে খালেদাভাষা শহীদদের জন্য বিশেষ মোনাজাতে খালেদাভাষা শহীদদের জন্য বিশেষ মোনাজাতে খালেদাভাষা শহীদদের জন্য বিশেষ মোনাজাতে খালেদাভাষা শহীদদের জন্য বিশেষ মোনাজাতে খালেদা','ভাষা শহীদ',1,0,6,1,'2015-02-21 08:08:46','2015-02-21 20:34:45');
/*!40000 ALTER TABLE `article_categories_language` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_category`
--

DROP TABLE IF EXISTS `article_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_view_count` int(11) NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isactive` tinyint(1) NOT NULL,
  `sort` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_category`
--

LOCK TABLES `article_category` WRITE;
/*!40000 ALTER TABLE `article_category` DISABLE KEYS */;
INSERT INTO `article_category` VALUES (6,0,'Facebook FQL query sometimes providing error in response1Facebook FQL query sometimes providing error in response11','Facebook FQL query sometimes providing error in response1Facebook FQL query sometimes providing error in response1Facebook FQL query sometimes providing error in response11','Restaurants',1,0,'2015-02-21 08:08:46','2015-02-21 20:34:45');
/*!40000 ALTER TABLE `article_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_languages`
--

DROP TABLE IF EXISTS `article_languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `short_detail` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `page_view_count` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `sort` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `article_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `article_languages_article_id_foreign` (`article_id`),
  CONSTRAINT `article_languages_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_languages`
--

LOCK TABLES `article_languages` WRITE;
/*!40000 ALTER TABLE `article_languages` DISABLE KEYS */;
/*!40000 ALTER TABLE `article_languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `short_detail` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `entrance` enum('Free','Paid') COLLATE utf8_unicode_ci DEFAULT NULL,
  `opening_hours` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_view_count` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_reviewing` tinyint(4) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `sort` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `article_category_id` int(10) unsigned NOT NULL,
  `address_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `articles_article_category_id_foreign` (`article_category_id`),
  KEY `articles_address_id_foreign` (`address_id`),
  CONSTRAINT `articles_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`),
  CONSTRAINT `articles_article_category_id_foreign` FOREIGN KEY (`article_category_id`) REFERENCES `article_category` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flag_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `sort` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'Bangladesh','',1,100,'2015-01-31 16:00:00','2015-01-31 16:00:00');
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `districts`
--

DROP TABLE IF EXISTS `districts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `districts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `division_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `districts_division_id_foreign` (`division_id`),
  CONSTRAINT `districts_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `districts`
--

LOCK TABLES `districts` WRITE;
/*!40000 ALTER TABLE `districts` DISABLE KEYS */;
INSERT INTO `districts` VALUES (1,'Dhaka',1,1,'2013-07-04 09:15:00','0000-00-00 00:00:00'),(2,'Faridpur',1,1,'2013-07-04 09:15:00','0000-00-00 00:00:00'),(3,'Gazipur',1,1,'2013-07-04 09:15:00','0000-00-00 00:00:00'),(4,'Gopalganj',1,1,'2013-07-04 09:15:00','0000-00-00 00:00:00'),(5,'Jamalpur',1,1,'2013-07-04 09:15:00','0000-00-00 00:00:00'),(6,'Kishoreganj',1,1,'2013-07-04 09:15:00','0000-00-00 00:00:00'),(7,'Madaripur',1,1,'2013-07-04 09:15:00','0000-00-00 00:00:00'),(8,'Manikganj',1,1,'2013-07-04 09:15:00','0000-00-00 00:00:00'),(9,'Munshiganj',1,1,'2013-07-04 09:15:00','0000-00-00 00:00:00'),(10,'Mymensingh',1,1,'2013-07-04 09:15:00','0000-00-00 00:00:00'),(11,'Narayanganj',1,1,'2013-07-04 09:15:00','0000-00-00 00:00:00'),(12,'Netrokona',1,1,'2013-07-04 09:15:00','0000-00-00 00:00:00'),(13,'Rajbari',1,1,'2013-07-04 09:15:00','0000-00-00 00:00:00'),(14,'Shariatpur',1,1,'2013-07-04 09:15:00','0000-00-00 00:00:00'),(15,'Sherpur',1,1,'2013-07-04 09:15:00','0000-00-00 00:00:00'),(16,'Tangail',1,1,'2013-07-04 09:15:00','0000-00-00 00:00:00'),(17,'Narsingdi',1,1,'2013-07-04 09:15:00','0000-00-00 00:00:00'),(18,'Bogra',1,2,'2013-07-04 10:35:00','0000-00-00 00:00:00'),(19,'Joypurhat',1,2,'2013-07-04 10:35:00','0000-00-00 00:00:00'),(20,'Naogaon',1,2,'2013-07-04 10:35:00','0000-00-00 00:00:00'),(21,'Natore',1,2,'2013-07-04 10:35:00','0000-00-00 00:00:00'),(22,'Nawabganj',1,2,'2013-07-04 10:35:00','0000-00-00 00:00:00'),(23,'Pabna',1,2,'2013-07-04 10:35:00','0000-00-00 00:00:00'),(24,'Rajshahi',1,2,'2013-07-04 10:35:00','0000-00-00 00:00:00'),(25,'Sirajganj',1,2,'2013-07-04 10:35:00','0000-00-00 00:00:00'),(26,'Dinajpur',1,3,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(27,'Gaibandha',1,3,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(28,'Kurigram',1,3,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(29,'Lalmonirhat',1,3,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(30,'Nilphamari',1,3,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(31,'Panchagarh',1,3,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(32,'Rangpur',1,3,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(33,'Thakurgaon',1,3,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(34,'Barguna',1,4,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(35,'Barisal',1,4,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(36,'Bhola',1,4,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(37,'Jhalokati',1,4,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(38,'Patuakhali',1,4,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(39,'Pirojpur',1,4,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(40,'Bandarban',1,5,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(41,'Brahmanbaria',1,5,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(42,'Chandpur',1,5,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(43,'Chittagong',1,5,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(44,'Comilla',1,5,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(45,'Cox\'s Bazar',1,5,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(46,'Feni',1,5,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(47,'Khagrachari',1,5,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(48,'Lakshmipur',1,5,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(49,'Noakhali',1,5,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(50,'Rangamati',1,5,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(51,'Habiganj',1,6,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(52,'Maulvibazar',1,6,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(53,'Sunamganj',1,6,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(54,'Sylhet',1,6,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(55,'Bagerhat',1,7,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(56,'Chuadanga',1,7,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(57,'Jessore',1,7,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(58,'Jhenaidah',1,7,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(59,'Khulna',1,7,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(60,'Kushtia',1,7,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(61,'Magura',1,7,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(62,'Meherpur',1,7,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(63,'Narail',1,7,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(64,'Satkhira',1,7,'2013-07-04 10:42:00','0000-00-00 00:00:00'),(65,'Narshingdi',1,1,'2014-11-06 04:03:37','0000-00-00 00:00:00'),(66,'keranigonj',1,1,'2014-11-06 04:03:38','0000-00-00 00:00:00'),(67,'Nilphamary',1,3,'2014-11-06 04:03:46','0000-00-00 00:00:00'),(68,'Sreemangal',1,6,'2014-11-06 04:03:49','0000-00-00 00:00:00'),(70,'Gallamari',1,7,'2014-11-06 04:03:51','0000-00-00 00:00:00'),(71,'Companigonj',1,5,'2014-11-06 04:03:54','0000-00-00 00:00:00'),(72,'Panchlaish',1,5,'2014-11-06 04:03:54','0000-00-00 00:00:00'),(73,'Panba',1,2,'2014-11-06 04:04:13','0000-00-00 00:00:00'),(74,'Borguna',1,4,'2014-11-06 04:04:48','0000-00-00 00:00:00'),(75,'Chapainawabganj',1,2,'2014-11-06 04:05:27','0000-00-00 00:00:00'),(76,'Rajbari Sadar',1,1,'2014-11-10 04:46:21','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `districts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `divisions`
--

DROP TABLE IF EXISTS `divisions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `divisions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `country_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `divisions_country_id_foreign` (`country_id`),
  CONSTRAINT `divisions_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `divisions`
--

LOCK TABLES `divisions` WRITE;
/*!40000 ALTER TABLE `divisions` DISABLE KEYS */;
INSERT INTO `divisions` VALUES (1,'Dhaka',1,1,'2013-07-03 16:00:00','0000-00-00 00:00:00'),(2,'Rajshahi',1,1,'2013-07-03 16:00:00','0000-00-00 00:00:00'),(3,'Rangpur',1,1,'2013-07-04 07:10:00','0000-00-00 00:00:00'),(4,'Barisal',1,1,'2013-07-04 07:12:00','0000-00-00 00:00:00'),(5,'Chittagong',1,1,'2013-07-03 16:00:00','0000-00-00 00:00:00'),(6,'Sylhet',1,1,'2013-07-03 16:00:00','0000-00-00 00:00:00'),(7,'Khulna',1,1,'2013-07-04 07:10:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `divisions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort` tinyint(4) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (1,'Bengali',0,1,'2015-02-21 02:15:58','2015-02-21 02:15:58'),(2,'Swedish',0,1,'2015-02-21 02:15:58','2015-02-21 02:15:58');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2015_02_20_055845_create_roles_table',1),('2015_02_20_060314_users_roles_foreign_key',1),('2015_02_20_103332_create_article_category_table',2),('2015_02_21_095928_create_languages_table',3),('2015_02_21_101746_create_article_categories_language_table',4),('2015_02_21_173857_create_address_table',11),('2015_02_21_180614_create_articles_table',12),('2015_02_21_182446_create_article_languages_table',13),('2015_02_22_093427_create_divisions_table',14),('2015_02_22_094530_create_districts_table',15),('2015_02_22_100120_create_thanas_table',16),('2015_02_22_100955_create_countries_table',17);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administrator','admin','2015-02-19 23:14:47','2015-02-19 23:14:47'),(2,'Moderator','moderate','2015-02-19 23:14:47','2015-02-19 23:14:47'),(3,'User','user','2015-02-19 23:14:47','2015-02-19 23:14:47');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `thanas`
--

DROP TABLE IF EXISTS `thanas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `thanas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `district_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `thanas_district_id_foreign` (`district_id`),
  CONSTRAINT `thanas_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=627 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `thanas`
--

LOCK TABLES `thanas` WRITE;
/*!40000 ALTER TABLE `thanas` DISABLE KEYS */;
INSERT INTO `thanas` VALUES (1,'Adabor',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(2,'Badda',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(3,'Bangsal',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(4,'Bimanbandar',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(5,'Cantonment',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(6,'Chowkbazar',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(7,'Dakshin khan',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(8,'Darus Salam',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(9,'Demra',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(10,'Dhamrai',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(11,'Dhanmondi',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(12,'Dohar',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(13,'Gendaria',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(14,'Gulshan',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(15,'Hazaribagh',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(16,'Jatrabari',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(17,'Kadamtali',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(18,'Kafrul',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(19,'Kalabagan',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(20,'Kamrangirchar',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(21,'Keraniganj',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(22,'Khilgaon',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(23,'Khilkhet',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(24,'Kotwali',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(25,'Lalbagh',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(26,'Mirpur',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(27,'Mohammadpur',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(28,'Motijheel',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(29,'Nawabganj',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(30,'Newmarket',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(31,'Pallabi',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(32,'Paltan',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(33,'Ramna',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(34,'Rampura',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(35,'Sabujbagh',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(36,'Savar',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(37,'Shah Ali',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(38,'Shahbag',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(39,'Sher-E-Bangla Nagar',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(40,'Shyampur',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(41,'Sutrapur',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(42,'Tejgaon',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(43,'Mohakhali',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(44,'Tejgaon Industrial Area',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(45,'Turag',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(46,'Uttara',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(47,'Uttar Khan',1,1,'2013-07-04 09:18:00','0000-00-00 00:00:00'),(48,'Alfadanga',1,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(49,'Bhanga',1,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(50,'Boalmari',1,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(51,'Charbhadrasan',1,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(52,'Faridpur Sadar',1,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(53,'Madhukhali',1,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(54,'Nagarkanda',1,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(55,'Sadarpur',1,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(56,'Saltha',1,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(57,'Gazipur Sadar',1,3,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(58,'Kaliakair',1,3,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(59,'Kaliganj',1,3,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(60,'Kapasia',1,3,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(61,'Tongi Upazila',1,3,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(62,'Sreepur',1,3,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(63,'Gopalganj Sadar',1,4,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(64,'Kashiani',1,4,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(65,'Kotalipara',1,4,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(66,'Muksudpur',1,4,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(67,'Tungipara',1,4,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(68,'Baksiganj',1,5,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(69,'Dewanganj',1,5,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(70,'Islampur',1,5,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(71,'Jamalpur Sadar',1,5,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(72,'Madarganj',1,5,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(73,'Melandaha',1,5,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(74,'Sarishabari',1,5,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(75,'Astagram',1,6,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(76,'Bajitpur',1,6,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(77,'Bhairab',1,6,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(78,'Hossainpur',1,6,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(79,'Itna',1,6,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(80,'Karimganj',1,6,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(81,'Katiadi',1,6,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(82,'Kishoreganj Sadar',1,6,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(83,'Kuliarchar',1,6,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(84,'Mithamain',1,6,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(85,'Nikli',1,6,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(86,'Pakundia',1,6,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(87,'Tarail',1,6,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(88,'Rajoir',1,7,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(89,'Madaripur Sadar',1,7,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(90,'Kalkini',1,7,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(91,'Shibchar',1,7,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(92,'Daulatpur',1,8,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(93,'Ghior',1,8,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(94,'Harirampur',1,8,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(95,'Manikgonj Sadar',1,8,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(96,'Saturia',1,8,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(97,'Shivalaya',1,8,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(98,'Singair',1,8,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(99,'Gazaria',1,9,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(100,'Lohajang',1,9,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(101,'Munshiganj Sadar',1,9,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(102,'Sirajdikhan',1,9,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(103,'Sreenagar',1,9,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(104,'Tongibari',1,9,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(105,'Bhaluka',1,10,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(106,'Dhobaura',1,10,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(107,'Fulbaria',1,10,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(108,'Gaffargaon',1,10,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(109,'Gauripur',1,10,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(110,'Haluaghat',1,10,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(111,'Ishwarganj',1,10,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(112,'Mymensingh Sadar',1,10,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(113,'Muktagachha',1,10,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(114,'Nandail',1,10,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(115,'Phulpur',1,10,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(116,'Trishal',1,10,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(117,'Araihazar',1,11,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(118,'Bandar',1,11,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(119,'Narayanganj Sadar',1,11,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(120,'Rupganj',1,11,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(121,'Sonargaon',1,11,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(122,'Fatullah',1,11,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(123,'Siddhirganj',1,11,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(124,'Atpara',1,12,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(125,'Barhatta',1,12,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(126,'Durgapur',1,12,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(127,'Khaliajuri',1,12,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(128,'Kalmakanda',1,12,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(129,'Kendua',1,12,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(130,'Madan',1,12,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(131,'Mohanganj',1,12,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(132,'Netrokona Sadar',1,12,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(133,'Purbadhala',1,12,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(134,'Baliakandi',1,13,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(135,'Goalandaghat',1,13,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(136,'Pangsha',1,13,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(137,'Rajbari Sadar',1,13,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(138,'Kalukhali',1,13,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(139,'Bhedarganj',1,14,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(140,'Damudya',1,14,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(141,'Gosairhat',1,14,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(142,'Naria',1,14,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(143,'Shariatpur Sadar',1,14,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(144,'Zanjira',1,14,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(145,'Sakhipur',1,14,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(146,'Jhenaigati',1,15,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(147,'Nakla',1,15,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(148,'Nalitabari',1,15,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(149,'Sherpur Sadar',1,15,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(150,'Sreebardi',1,15,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(151,'Gopalpur',1,16,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(152,'Basail',1,16,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(153,'Bhuapur',1,16,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(154,'Delduar',1,16,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(155,'Ghatail',1,16,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(156,'Kalihati',1,16,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(157,'Madhupur',1,16,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(158,'Mirzapur',1,16,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(159,'Nagarpur',1,16,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(160,'Sakhipur',1,16,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(161,'Dhanbari',1,16,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(162,'Tangail Sadar',1,16,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(163,'Narsingdi Sadar',1,17,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(164,'Belabo',1,17,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(165,'Monohardi',1,17,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(166,'Palash',1,17,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(167,'Raipura',1,17,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(168,'Shibpur',1,17,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(169,'Adamdighi',1,18,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(170,'Bogra Sadar',1,18,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(171,'Dhunat',1,18,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(172,'Dupchanchia',1,18,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(173,'Gabtali',1,18,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(174,'Kahaloo',1,18,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(175,'Nandigram',1,18,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(176,'Sariakandi',1,18,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(177,'Sahajanpur',1,18,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(178,'Sherpur',1,18,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(179,'Shibganj',1,18,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(180,'Sonatala',1,18,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(181,'Akkelpur',1,19,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(182,'Joypurhat Sadar',1,19,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(183,'Kalai',1,19,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(184,'Khetlal',1,19,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(185,'Panchbibi',1,19,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(186,'Atrai',1,20,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(187,'Badalgachhi',1,20,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(188,'Manda',1,20,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(189,'Dhamoirhat',1,20,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(190,'Mohadevpur',1,20,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(191,'Naogaon Sadar',1,20,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(192,'Niamatpur',1,20,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(193,'Patnitala',1,20,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(194,'Porsha',1,20,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(195,'Raninagar',1,20,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(196,'Sapahar',1,20,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(197,'Bagatipara',1,21,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(198,'Baraigram',1,21,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(199,'Gurudaspur',1,21,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(200,'Lalpur',1,21,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(201,'Natore Sadar',1,21,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(202,'Singra',1,21,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(203,'Bholahat',1,22,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(204,'Gomastapur',1,22,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(205,'Nachole',1,22,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(206,'Nawabganj Sadar',1,22,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(207,'Shibganj',1,22,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(208,'Atgharia',1,23,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(209,'Bera',1,23,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(210,'Bhangura',1,23,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(211,'Chatmohar',1,23,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(212,'Faridpur',1,23,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(213,'Ishwardi',1,23,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(214,'Pabna Sadar',1,23,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(215,'Santhia',1,23,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(216,'Sujanagar',1,23,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(217,'Bagha',1,24,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(218,'Bagmara',1,24,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(219,'Charghat',1,24,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(220,'Durgapur',1,24,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(221,'Godagari',1,24,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(222,'Mohanpur',1,24,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(223,'Paba',1,24,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(224,'Puthia',1,24,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(225,'Tanore',1,24,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(226,'Belkuchi',1,25,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(227,'Chauhali',1,25,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(228,'Kamarkhanda',1,25,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(229,'Kazipur',1,25,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(230,'Raiganj',1,25,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(231,'Shahjadpur',1,25,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(232,'Sirajganj Sadar',1,25,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(233,'Tarash',1,25,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(234,'Ullahpara',1,25,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(235,'Birampur',1,26,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(236,'Birganj',1,26,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(237,'Biral',1,26,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(238,'Bochaganj',1,26,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(239,'Chirirbandar',1,26,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(240,'Phulbari',1,26,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(241,'Ghoraghat',1,26,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(242,'Hakimpur',1,26,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(243,'Kaharole',1,26,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(244,'Khansama',1,26,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(245,'Dinajpur Sadar',1,26,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(246,'Nawabganj',1,26,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(247,'Parbatipur',1,26,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(248,'Phulchhari',1,27,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(249,'Gaibandha Sadar',1,27,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(250,'Gobindaganj',1,27,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(251,'Palashbari',1,27,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(252,'Sadullapur',1,27,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(253,'Sughatta',1,27,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(254,'Sundarganj',1,27,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(255,'Bhurungamari',1,28,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(256,'Char Rajibpur',1,28,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(257,'Chilmari',1,28,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(258,'Phulbari',1,28,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(259,'Kurigram Sadar',1,28,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(260,'Nageshwari',1,28,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(261,'Rajarhat',1,28,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(262,'Raomari',1,28,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(263,'Ulipur',1,28,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(264,'Aditmari',1,29,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(265,'Hatibandha',1,29,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(266,'Kaliganj',1,29,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(267,'Lalmonirhat Sadar',1,29,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(268,'Patgram',1,29,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(269,'Dimla',1,30,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(270,'Domar',1,30,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(271,'Jaldhaka',1,30,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(272,'Kishoreganj',1,30,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(273,'Nilphamari Sadar',1,30,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(274,'Saidpur',1,30,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(275,'Atwari',1,31,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(276,'Boda',1,31,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(277,'Debiganj',1,31,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(278,'Panchagarh Sadar',1,31,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(279,'Tetulia',1,31,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(280,'Badarganj',1,32,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(281,'Gangachhara',1,32,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(282,'Kaunia',1,32,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(283,'Rangpur Sadar',1,32,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(284,'Mithapukur',1,32,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(285,'Pirgachha',1,32,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(286,'Pirganj',1,32,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(287,'Taraganj',1,32,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(288,'Baliadangi',1,33,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(289,'Haripur',1,33,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(290,'Pirganj',1,33,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(291,'Ranisankail',1,33,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(292,'Thakurgaon Sadar',1,33,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(293,'Amtali',1,34,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(294,'Bamna',1,34,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(295,'Barguna Sadar',1,34,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(296,'Betagi',1,34,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(297,'Patharghata',1,34,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(298,'Taltoli',1,34,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(299,'Agailjhara',1,35,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(300,'Babuganj',1,35,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(301,'Bakerganj',1,35,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(302,'Banaripara',1,35,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(303,'Gaurnadi',1,35,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(304,'Hizla',1,35,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(305,'Barisal Sadar',1,35,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(306,'Mehendiganj',1,35,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(307,'Muladi',1,35,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(308,'Wazirpur',1,35,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(309,'Bhola Sadar',1,36,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(310,'Burhanuddin',1,36,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(311,'Char Fasson',1,36,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(312,'Daulatkhan',1,36,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(313,'Lalmohan',1,36,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(314,'Manpura',1,36,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(315,'Tazumuddin',1,36,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(316,'Jhalokati Sadar',1,37,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(317,'Kathalia',1,37,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(318,'Nalchity',1,37,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(319,'Rajapur',1,37,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(320,'Bauphal',1,38,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(321,'Dasmina',1,38,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(322,'Galachipa',1,38,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(323,'Kalapara',1,38,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(324,'Mirzaganj',1,38,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(325,'Patuakhali Sadar',1,38,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(326,'Rangabali',1,38,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(327,'Dumki',1,38,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(328,'Bhandaria',1,39,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(329,'Kawkhali',1,39,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(330,'Mathbaria',1,39,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(331,'Nazirpur',1,39,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(332,'Pirojpur Sadar',1,39,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(333,'Nesarabad (Swarupkati)',1,39,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(334,'Zianagor',1,39,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(335,'Ali Kadam',1,40,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(336,'Bandarban Sadar',1,40,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(337,'Lama',1,40,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(338,'Naikhongchhari',1,40,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(339,'Rowangchhari',1,40,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(340,'Ruma',1,40,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(341,'Thanchi',1,40,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(342,'Akhaura',1,41,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(343,'Bancharampur',1,41,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(344,'Brahmanbaria Sadar',1,41,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(345,'Kasba',1,41,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(346,'Nabinagar',1,41,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(347,'Nasirnagar',1,41,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(348,'Sarail',1,41,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(349,'Ashuganj',1,41,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(350,'Bijoynagar',1,41,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(351,'Chandpur Sadar',1,42,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(352,'Faridganj',1,42,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(353,'Haimchar',1,42,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(354,'Haziganj',1,42,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(355,'Kachua',1,42,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(356,'Matlab',1,42,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(357,'Matlob Uttar',1,42,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(358,'Shahrasti',1,42,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(359,'Anwara',1,43,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(360,'Banshkhali',1,43,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(361,'Boalkhali',1,43,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(362,'Chandanaish',1,43,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(363,'Fatikchhari',1,43,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(364,'Hathazari',1,43,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(365,'Lohagara',1,43,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(366,'Mirsharai',1,43,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(367,'Patiya',1,43,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(368,'Rangunia',1,43,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(369,'Raozan',1,43,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(370,'Sandwip',1,43,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(371,'Satkania',1,43,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(372,'Sitakunda',1,43,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(373,'Barura',1,44,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(374,'Brahmanpara',1,44,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(375,'Burichong',1,44,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(376,'Chandina',1,44,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(377,'Chauddagram',1,44,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(378,'Daudkandi',1,44,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(379,'Debidwar',1,44,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(380,'Homna',1,44,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(381,'Laksham',1,44,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(382,'Muradnagar',1,44,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(383,'Nangalkot',1,44,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(384,'Comilla Sadar',1,44,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(385,'Meghna',1,44,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(386,'Titas',1,44,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(387,'Monohargonj',1,44,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(388,'Sadar South',1,44,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(389,'Bangodda',1,44,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(390,'-',1,44,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(391,'Chakaria',1,45,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(392,'Cox\'s Bazar Sadar',1,45,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(393,'Kutubdia',1,45,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(394,'Maheshkhali',1,45,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(395,'Ramu',1,45,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(396,'Teknaf',1,45,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(397,'Ukhia',1,45,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(398,'Pekua',1,45,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(399,'Chagalnaiya',1,46,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(400,'Daganbhuiyan',1,46,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(401,'Feni Sadar',1,46,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(402,'Parshuram',1,46,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(403,'Sonagazi',1,46,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(404,'Fulgazi',1,46,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(405,'Dighinala',1,47,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(406,'Khagrachhari',1,47,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(407,'Lakshmichhari',1,47,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(408,'Mahalchhari',1,47,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(409,'Manikchhari',1,47,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(410,'Matiranga',1,47,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(411,'Panchhari',1,47,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(412,'Ramgarh',1,47,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(413,'Lakshmipur Sadar',1,48,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(414,'Raipur',1,48,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(415,'Ramganj',1,48,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(416,'Ramgati',1,48,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(417,'Komolnagar',1,48,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(418,'Begumganj',1,49,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(419,'Noakhali Sadar',1,49,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(420,'Chatkhil',1,49,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(421,'Companiganj',1,49,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(422,'Hatiya',1,49,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(423,'Senbagh',1,49,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(424,'Sonaimuri',1,49,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(425,'Subarnachar',1,49,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(426,'Kabirhat',1,49,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(427,'Bagaichhari',1,50,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(428,'Barkal',1,50,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(429,'Kawkhali (Betbunia)',1,50,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(430,'Belaichhari',1,50,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(431,'Kaptai',1,50,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(432,'Juraichhari',1,50,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(433,'Langadu',1,50,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(434,'Mannerchar',1,50,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(435,'Rajasthali',1,50,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(436,'Rangamati Sadar',1,50,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(437,'Ajmiriganj',1,51,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(438,'Bahubal',1,51,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(439,'Baniyachong',1,51,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(440,'Chunarughat',1,51,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(441,'Habiganj Sadar',1,51,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(442,'Lakhai',1,51,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(443,'Madhabpur',1,51,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(444,'Nabiganj',1,51,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(445,'Barlekha',1,52,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(446,'Kamalganj',1,52,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(447,'Kulaura',1,52,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(448,'Maulvibazar Sadar',1,52,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(449,'Rajnagar',1,52,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(450,'Sreemangal',1,52,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(451,'Juri',1,52,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(452,'Bishwamvarpur',1,53,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(453,'Chhatak',1,53,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(454,'Derai',1,53,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(455,'Dharampasha',1,53,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(456,'Dowarabazar',1,53,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(457,'Jagannathpur',1,53,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(458,'Jamalganj',1,53,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(459,'Sullah',1,53,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(460,'Sunamganj Sadar',1,53,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(461,'Tahirpur',1,53,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(462,'South Sunamganj',1,53,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(463,'Balaganj',1,54,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(464,'Beanibazar',1,54,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(465,'Bishwanath',1,54,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(466,'Companigonj',1,54,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(467,'Fenchuganj',1,54,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(468,'Golapganj',1,54,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(469,'Gowainghat',1,54,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(470,'Jaintiapur',1,54,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(471,'Kanaighat',1,54,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(472,'Sylhet Sadar',1,54,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(473,'Zakiganj',1,54,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(474,'South Shurma',1,54,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(475,'Bagerhat Sadar',1,55,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(476,'Chitalmari',1,55,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(477,'Fakirhat',1,55,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(478,'Kachua',1,55,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(479,'Mollahat',1,55,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(480,'Mongla',1,55,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(481,'Morrelganj',1,55,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(482,'Rampal',1,55,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(483,'Sarankhola',1,55,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(484,'Alamdanga',1,56,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(485,'Chuadanga Sadar',1,56,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(486,'Damurhuda',1,56,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(487,'Jibannagar',1,56,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(488,'Abhaynagar',1,57,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(489,'Bagherpara',1,57,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(490,'Chaugachha',1,57,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(491,'Jhikargachha',1,57,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(492,'Keshabpur',1,57,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(493,'Jessore Sadar',1,57,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(494,'Manirampur',1,57,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(495,'Sharsha',1,57,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(496,'Harinakunda',1,58,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(497,'Jhenaidah Sadar',1,58,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(498,'Kaliganj',1,58,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(499,'Kotchandpur',1,58,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(500,'Maheshpur',1,58,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(501,'Shailkupa',1,58,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(502,'Batiaghata',1,59,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(503,'Dacope',1,59,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(504,'Dumuria',1,59,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(505,'Dighalia',1,59,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(506,'Koyra',1,59,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(507,'Paikgachha',1,59,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(508,'Phultala',1,59,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(509,'Rupsha',1,59,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(510,'Terokhada',1,59,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(511,'Khulna Sadar',1,59,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(512,'Boyra',1,59,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(513,'Bheramara',1,60,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(514,'Daulatpur',1,60,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(515,'Khoksa',1,60,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(516,'Kumarkhali',1,60,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(517,'Kushtia Sadar',1,60,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(518,'Mirpur',1,60,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(519,'Shekhpara',1,60,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(520,'Magura Sadar',1,61,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(521,'Mohammadpur',1,61,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(522,'Shalikha',1,61,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(523,'Sreepur',1,61,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(524,'Gangni',1,62,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(525,'Meherpur Sadar',1,62,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(526,'Mujibnagar',1,62,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(527,'Kalia',1,63,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(528,'Lohagara',1,63,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(529,'Narail Sadar',1,63,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(530,'Naragati',1,63,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(531,'Assasuni',1,64,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(532,'Debhata',1,64,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(533,'Kalaroa',1,64,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(534,'Kaliganj',1,64,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(535,'Satkhira Sadar',1,64,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(536,'Shyamnagar',1,64,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(537,'Tala',1,64,'2013-08-13 10:50:00','0000-00-00 00:00:00'),(538,'Double Mooring',1,43,'2014-05-12 10:30:00','0000-00-00 00:00:00'),(539,'Kotwali',1,43,'2014-05-14 08:23:00','0000-00-00 00:00:00'),(540,'Shahporan',1,54,'2014-05-14 10:27:00','0000-00-00 00:00:00'),(541,'Baizid Bostami',1,43,'2014-06-14 16:00:00','0000-00-00 00:00:00'),(542,'Panachlish',1,43,'2014-06-14 16:00:00','0000-00-00 00:00:00'),(543,'Pahartoli',1,43,'2014-06-14 16:00:00','0000-00-00 00:00:00'),(544,'Banani',1,1,'2014-06-15 16:00:00','0000-00-00 00:00:00'),(545,'Karnafuly',1,43,'2014-06-22 16:00:00','0000-00-00 00:00:00'),(546,'Chandgaon',1,43,'2014-08-03 16:00:00','0000-00-00 00:00:00'),(547,'Pahartali',1,43,'2014-08-03 16:00:00','0000-00-00 00:00:00'),(548,'Panchlais',1,43,'2014-08-03 16:00:00','0000-00-00 00:00:00'),(549,'Bandar',1,43,'2014-08-03 16:00:00','0000-00-00 00:00:00'),(550,'Halishohor',1,43,'2014-08-03 16:00:00','0000-00-00 00:00:00'),(551,'Bakoliya',1,43,'2014-08-03 16:00:00','0000-00-00 00:00:00'),(552,'Patenga',1,43,'2014-08-03 16:00:00','0000-00-00 00:00:00'),(553,'Khulshi',1,43,'2014-08-03 16:00:00','0000-00-00 00:00:00'),(554,'Bondor',1,43,'2014-08-03 16:00:00','0000-00-00 00:00:00'),(555,'Akbor Sha',1,43,'2014-08-03 16:00:00','0000-00-00 00:00:00'),(556,'EPZ',1,43,'2014-08-03 16:00:00','0000-00-00 00:00:00'),(557,'Chowkbazar',1,43,'2014-08-03 16:00:00','0000-00-00 00:00:00'),(558,'Jorargonj',1,43,'2014-08-03 16:00:00','0000-00-00 00:00:00'),(559,'Mugdapara',1,1,'2014-08-19 16:00:00','0000-00-00 00:00:00'),(560,'Sahajahanpur',1,1,'2014-08-23 16:00:00','0000-00-00 00:00:00'),(561,'Sonadanga',1,59,'2014-09-01 16:00:00','0000-00-00 00:00:00'),(562,'Khanjahan Ali',1,59,'2014-10-01 16:00:00','0000-00-00 00:00:00'),(563,'Naya Paltan',1,1,'2014-11-06 04:03:32','0000-00-00 00:00:00'),(564,'Wari',1,1,'2014-11-06 04:03:35','0000-00-00 00:00:00'),(565,'Basabo',1,1,'2014-11-06 04:03:36','0000-00-00 00:00:00'),(566,'Bhelanagar',1,65,'2014-11-06 04:03:37','0000-00-00 00:00:00'),(567,'Joydevpur',1,3,'2014-11-06 04:03:40','0000-00-00 00:00:00'),(568,'Ashulia',1,1,'2014-11-06 04:03:40','0000-00-00 00:00:00'),(569,'Madanpur',1,11,'2014-11-06 04:03:40','0000-00-00 00:00:00'),(570,'Agrabad',1,43,'2014-11-06 04:03:41','0000-00-00 00:00:00'),(571,'Khatungonj',1,43,'2014-11-06 04:03:41','0000-00-00 00:00:00'),(572,'Nasirabad',1,43,'2014-11-06 04:03:41','0000-00-00 00:00:00'),(573,'Jublee Road',1,43,'2014-11-06 04:03:42','0000-00-00 00:00:00'),(574,'Laldighirpar',1,54,'2014-11-06 04:03:43','0000-00-00 00:00:00'),(575,'Zindabazar',1,54,'2014-11-06 04:03:43','0000-00-00 00:00:00'),(576,'Boalia',1,24,'2014-11-06 04:03:44','0000-00-00 00:00:00'),(577,'Boro Bazar Sarak',1,64,'2014-11-06 04:03:45','0000-00-00 00:00:00'),(578,'Chowmuhuni',1,49,'2014-11-06 04:03:45','0000-00-00 00:00:00'),(579,'Feni',1,46,'2014-11-06 04:03:46','0000-00-00 00:00:00'),(580,'Maulvibazar',1,52,'2014-11-06 04:03:48','0000-00-00 00:00:00'),(581,'Moulvibazar',1,68,'2014-11-06 04:03:49','0000-00-00 00:00:00'),(582,'Gallamari',1,70,'2014-11-06 04:03:51','0000-00-00 00:00:00'),(583,'Payrachattar',1,32,'2014-11-06 04:03:52','0000-00-00 00:00:00'),(585,'Muradpur',1,72,'2014-11-06 04:03:54','0000-00-00 00:00:00'),(586,'Lohagora',1,43,'2014-11-06 04:03:54','0000-00-00 00:00:00'),(588,'Chittagong Sadar',1,43,'2014-11-06 04:03:55','0000-00-00 00:00:00'),(590,'Rajshai Sadar',1,24,'2014-11-06 04:03:59','0000-00-00 00:00:00'),(592,'Companigonj',1,49,'2014-11-06 04:04:05','0000-00-00 00:00:00'),(593,'Omarpur',1,54,'2014-11-06 04:04:07','0000-00-00 00:00:00'),(594,'Golapgonj',1,54,'2014-11-06 04:04:10','0000-00-00 00:00:00'),(596,'Siddirgonj',1,11,'2014-11-06 04:04:12','0000-00-00 00:00:00'),(598,'Parbotipur',1,26,'2014-11-06 04:04:19','0000-00-00 00:00:00'),(600,'Jurain',1,1,'2014-11-06 04:04:22','0000-00-00 00:00:00'),(601,'Elenga',1,16,'2014-11-06 04:04:30','0000-00-00 00:00:00'),(603,'Pulhat',1,26,'2014-11-06 04:04:33','0000-00-00 00:00:00'),(604,'Haragacha',1,32,'2014-11-06 04:04:34','0000-00-00 00:00:00'),(605,'Vatara',1,1,'2014-11-06 04:04:35','0000-00-00 00:00:00'),(606,'Bahaddarhat',1,56,'2014-11-06 04:04:35','0000-00-00 00:00:00'),(607,'Kesobpur',1,64,'2014-11-06 04:04:44','0000-00-00 00:00:00'),(608,'Benapole',1,57,'2014-11-06 04:04:46','0000-00-00 00:00:00'),(609,'Eidgaon',1,45,'2014-11-06 04:04:48','0000-00-00 00:00:00'),(610,'Ramgong',1,48,'2014-11-06 04:04:57','0000-00-00 00:00:00'),(612,'Torki',1,35,'2014-11-06 04:04:58','0000-00-00 00:00:00'),(613,'Doulatpur',1,59,'2014-11-06 04:05:00','0000-00-00 00:00:00'),(615,'Bakshigonj',1,5,'2014-11-06 04:05:03','0000-00-00 00:00:00'),(617,'Airport',1,1,'2014-11-06 04:05:07','0000-00-00 00:00:00'),(618,'Hajigonj',1,42,'2014-11-06 04:05:13','0000-00-00 00:00:00'),(620,'Dhupchanchia',1,18,'2014-11-06 04:05:15','0000-00-00 00:00:00'),(621,'Abhoynagar',1,57,'2014-11-06 04:05:17','0000-00-00 00:00:00'),(623,'Chapainawabganj Sadar',1,75,'2014-11-06 04:05:27','0000-00-00 00:00:00'),(625,'Jalalabad',1,43,'2014-11-09 01:54:10','0000-00-00 00:00:00'),(626,'Sonapur Sadar',1,49,'2014-11-09 16:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `thanas` ENABLE KEYS */;
UNLOCK TABLES;

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
  `title` enum('Mr.','Mrs.','Ms.','Miss.') COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `middlename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `postal` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `isactive` tinyint(1) NOT NULL,
  `sort` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (4,'mujibur rahman','mujib.rahman.bd@gmail.com','$2y$10$NFQfALR9kCEUj/BcVoAQQ.RUnUXSO5s9RwQNJVwLtcGkC2dqoKH1O','Mr.','mujibur rahman','Rahman','Khan','','male','BD','Dhaka','Dhaka','Sutrapur','123456',1,1,'','axmRuiR1zh3AbxsFxgwHShIFYuyLAc29Eg0QCo2p6JzJUO9R6vuGBesBBbt0','2015-02-19 23:48:21','2015-02-22 01:27:41'),(5,'Mithila','mujib.rahman.bd1@gmail.com','$2y$10$6npQxgCfcaNQesgY1.ced.KzlHVQakbFGERfBuix6S/QPhgPxorQC','Mr.','Mithila','Afia','Rahman','','female','BD','Dhaka','Dhaka','Sutrapur','123456',2,1,'',NULL,'2015-02-20 01:12:46','2015-02-20 01:12:46');
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

-- Dump completed on 2015-02-22 23:53:27
