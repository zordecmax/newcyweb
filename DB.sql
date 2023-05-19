-- MySQL dump 10.13  Distrib 8.0.25, for Linux (x86_64)
--
-- Host: localhost    Database: bank
-- ------------------------------------------------------
-- Server version	8.0.25

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int unsigned DEFAULT NULL,
  `order` int NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,NULL,1,'Category 1','category-1','2022-06-26 12:15:08','2022-06-26 12:15:08'),(2,NULL,1,'Category 2','category-2','2022-06-26 12:15:08','2022-06-26 12:15:08');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_rows`
--

DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_rows` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int unsigned NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,0,0,0,0,0,NULL,1),(2,1,'name','text','Name',1,1,1,1,1,1,NULL,2),(3,1,'email','text','Email',1,1,1,1,1,1,NULL,3),(4,1,'password','password','Password',1,0,0,1,1,0,NULL,4),(5,1,'remember_token','text','Remember Token',0,0,0,0,0,0,NULL,5),(6,1,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,6),(7,1,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,7),(8,1,'avatar','image','Avatar',0,1,1,1,1,1,NULL,8),(9,1,'user_belongsto_role_relationship','relationship','Role',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}',10),(10,1,'user_belongstomany_role_relationship','relationship','voyager::seeders.data_rows.roles',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}',11),(11,1,'settings','hidden','Settings',0,0,0,0,0,0,NULL,12),(12,2,'id','number','ID',1,0,0,0,0,0,NULL,1),(13,2,'name','text','Name',1,1,1,1,1,1,NULL,2),(14,2,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(15,2,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(16,3,'id','number','ID',1,0,0,0,0,0,NULL,1),(17,3,'name','text','Name',1,1,1,1,1,1,NULL,2),(18,3,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(19,3,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(20,3,'display_name','text','Display Name',1,1,1,1,1,1,NULL,5),(21,1,'role_id','text','Role',1,1,1,1,1,1,NULL,9),(22,4,'id','number','ID',1,0,0,0,0,0,NULL,1),(23,4,'parent_id','select_dropdown','Parent',0,0,1,1,1,1,'{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}',2),(24,4,'order','text','Order',1,1,1,1,1,1,'{\"default\":1}',3),(25,4,'name','text','Name',1,1,1,1,1,1,NULL,4),(26,4,'slug','text','Slug',1,1,1,1,1,1,'{\"slugify\":{\"origin\":\"name\"}}',5),(27,4,'created_at','timestamp','Created At',0,0,1,0,0,0,NULL,6),(28,4,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,7),(29,5,'id','number','ID',1,0,0,0,0,0,'{}',1),(30,5,'author_id','text','Author',1,0,1,1,0,1,'{}',2),(31,5,'category_id','text','Category',0,0,1,1,1,0,'{}',3),(32,5,'title','text','Title',1,1,1,1,1,1,'{}',4),(33,5,'excerpt','text','Excerpt',0,0,1,1,1,1,'{}',5),(34,5,'body','rich_text_box','Body',1,0,1,1,1,1,'{}',6),(35,5,'image','image','Post Image',0,1,1,1,1,1,'{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}',7),(36,5,'slug','text','Slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}',8),(37,5,'meta_description','text_area','Meta Description',0,0,1,1,1,1,'{}',9),(38,5,'meta_keywords','text_area','Meta Keywords',0,0,1,1,1,1,'{}',10),(39,5,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}',11),(40,5,'created_at','timestamp','Created At',0,1,1,0,0,0,'{}',12),(41,5,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',13),(42,5,'seo_title','text','SEO Title',0,1,1,1,1,1,'{}',14),(43,5,'featured','checkbox','Featured',1,1,1,1,1,1,'{}',15),(44,6,'id','number','ID',1,0,0,0,0,0,NULL,1),(45,6,'author_id','text','Author',1,0,0,0,0,0,NULL,2),(46,6,'title','text','Title',1,1,1,1,1,1,NULL,3),(47,6,'excerpt','text_area','Excerpt',1,0,1,1,1,1,NULL,4),(48,6,'body','rich_text_box','Body',1,0,1,1,1,1,NULL,5),(49,6,'slug','text','Slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}',6),(50,6,'meta_description','text','Meta Description',1,0,1,1,1,1,NULL,7),(51,6,'meta_keywords','text','Meta Keywords',1,0,1,1,1,1,NULL,8),(52,6,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}',9),(53,6,'created_at','timestamp','Created At',1,1,1,0,0,0,NULL,10),(54,6,'updated_at','timestamp','Updated At',1,0,0,0,0,0,NULL,11),(55,6,'image','image','Page Image',0,1,1,1,1,1,NULL,12);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_types`
--

DROP TABLE IF EXISTS `data_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_types` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_types`
--

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'users','users','User','Users','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy','TCG\\Voyager\\Http\\Controllers\\VoyagerUserController','',1,0,NULL,'2022-06-26 12:15:07','2022-06-26 12:15:07'),(2,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,NULL,'2022-06-26 12:15:07','2022-06-26 12:15:07'),(3,'roles','roles','Role','Roles','voyager-lock','TCG\\Voyager\\Models\\Role',NULL,'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController','',1,0,NULL,'2022-06-26 12:15:07','2022-06-26 12:15:07'),(4,'categories','categories','Category','Categories','voyager-categories','TCG\\Voyager\\Models\\Category',NULL,'','',1,0,NULL,'2022-06-26 12:15:08','2022-06-26 12:15:08'),(5,'posts','posts','Post','Posts','voyager-news','TCG\\Voyager\\Models\\Post','TCG\\Voyager\\Policies\\PostPolicy',NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}','2022-06-26 12:15:08','2022-06-26 17:27:19'),(6,'pages','pages','Page','Pages','voyager-file-text','TCG\\Voyager\\Models\\Page',NULL,'','',1,0,NULL,'2022-06-26 12:15:08','2022-06-26 12:15:08');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_items` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int DEFAULT NULL,
  `order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,'Dashboard','','_self','voyager-boat',NULL,NULL,1,'2022-06-26 12:15:07','2022-06-26 12:15:07','voyager.dashboard',NULL),(2,1,'Media','','_self','voyager-images',NULL,NULL,5,'2022-06-26 12:15:07','2022-06-26 12:15:07','voyager.media.index',NULL),(3,1,'Users','','_self','voyager-person',NULL,NULL,3,'2022-06-26 12:15:07','2022-06-26 12:15:07','voyager.users.index',NULL),(4,1,'Roles','','_self','voyager-lock',NULL,NULL,2,'2022-06-26 12:15:07','2022-06-26 12:15:07','voyager.roles.index',NULL),(5,1,'Tools','','_self','voyager-tools',NULL,NULL,9,'2022-06-26 12:15:07','2022-06-26 12:15:07',NULL,NULL),(6,1,'Menu Builder','','_self','voyager-list',NULL,5,10,'2022-06-26 12:15:07','2022-06-26 12:15:07','voyager.menus.index',NULL),(7,1,'Database','','_self','voyager-data',NULL,5,11,'2022-06-26 12:15:07','2022-06-26 12:15:07','voyager.database.index',NULL),(8,1,'Compass','','_self','voyager-compass',NULL,5,12,'2022-06-26 12:15:07','2022-06-26 12:15:07','voyager.compass.index',NULL),(9,1,'BREAD','','_self','voyager-bread',NULL,5,13,'2022-06-26 12:15:07','2022-06-26 12:15:07','voyager.bread.index',NULL),(10,1,'Settings','','_self','voyager-settings',NULL,NULL,14,'2022-06-26 12:15:07','2022-06-26 12:15:07','voyager.settings.index',NULL),(11,1,'Categories','','_self','voyager-categories',NULL,NULL,8,'2022-06-26 12:15:08','2022-06-26 12:15:08','voyager.categories.index',NULL),(12,1,'Posts','','_self','voyager-news',NULL,NULL,6,'2022-06-26 12:15:08','2022-06-26 12:15:08','voyager.posts.index',NULL),(13,1,'Pages','','_self','voyager-file-text',NULL,NULL,7,'2022-06-26 12:15:08','2022-06-26 12:15:08','voyager.pages.index',NULL),(14,2,'HOME','/','_self',NULL,'#000000',NULL,15,'2022-07-10 06:47:25','2022-07-10 06:48:47',NULL,''),(15,2,'SERVICES','','_self',NULL,'#000000',NULL,16,'2022-07-10 06:48:57','2022-07-10 06:48:57',NULL,''),(16,2,'ABOUT US','/pages/about-us','_self',NULL,'#000000',NULL,17,'2022-07-10 06:49:05','2022-07-10 15:04:55',NULL,''),(17,2,'CONTACTS','/pages/contacts','_self',NULL,'#000000',NULL,18,'2022-07-10 06:49:12','2022-07-10 15:05:04',NULL,'');
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menus` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2022-06-26 12:15:07','2022-06-26 12:15:07'),(2,'top_menu','2022-07-10 06:47:09','2022-07-10 06:47:09');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_01_01_000000_add_voyager_user_fields',1),(4,'2016_01_01_000000_create_data_types_table',1),(5,'2016_05_19_173453_create_menu_table',1),(6,'2016_10_21_190000_create_roles_table',1),(7,'2016_10_21_190000_create_settings_table',1),(8,'2016_11_30_135954_create_permission_table',1),(9,'2016_11_30_141208_create_permission_role_table',1),(10,'2016_12_26_201236_data_types__add__server_side',1),(11,'2017_01_13_000000_add_route_to_menu_items_table',1),(12,'2017_01_14_005015_create_translations_table',1),(13,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',1),(14,'2017_03_06_000000_add_controller_to_data_types_table',1),(15,'2017_04_21_000000_add_order_to_data_rows_table',1),(16,'2017_07_05_210000_add_policyname_to_data_types_table',1),(17,'2017_08_05_000000_add_group_to_settings_table',1),(18,'2017_11_26_013050_add_user_role_relationship',1),(19,'2017_11_26_015000_create_user_roles_table',1),(20,'2018_03_11_000000_add_user_settings',1),(21,'2018_03_14_000000_add_details_to_data_types_table',1),(22,'2018_03_16_000000_make_settings_value_nullable',1),(23,'2019_08_19_000000_create_failed_jobs_table',1),(24,'2019_12_14_000001_create_personal_access_tokens_table',1),(25,'2016_01_01_000000_create_pages_table',2),(26,'2016_01_01_000000_create_posts_table',2),(27,'2016_02_15_204651_create_categories_table',2),(28,'2017_04_11_000000_alter_post_nullable_fields_table',2),(30,'2022_06_26_205021_create_orders_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'AML Compliance - Sanctions','Max','maximgrosul@gmail.com','54654654','test','2022-07-09 11:44:52','2022-07-09 11:44:52'),(2,'Banking ServicesNotary and Paralegal Services','maxim','maximgrosul@gmail.com','65465464','test 2','2022-07-09 11:48:25','2022-07-09 11:48:25'),(3,'Notary and Paralegal Services','Max','maximgrosul@gmail.com','234234','test','2022-07-10 16:00:44','2022-07-10 16:00:44'),(4,'Notary and Paralegal Services','Max','maximgrosul@gmail.com','234234','test','2022-07-10 16:01:25','2022-07-10 16:01:25'),(5,'Notary and Paralegal Services','Max','maximgrosul@gmail.com','234234','test','2022-07-10 16:01:37','2022-07-10 16:01:37'),(6,'Notary and Paralegal Services','Max','maximgrosul@gmail.com','234234','test','2022-07-10 16:04:16','2022-07-10 16:04:16'),(7,'Notary and Paralegal Services','Max','maximgrosul@gmail.com','234234','test','2022-07-10 16:07:56','2022-07-10 16:07:56'),(8,'Notary and Paralegal Services','Max','maximgrosul@gmail.com','234234','test','2022-07-10 16:08:28','2022-07-10 16:08:28'),(9,'AML Compliance - Sanctions','kostas','admin@admin.com','9899','yhkjh6tkh6t','2022-07-11 07:06:36','2022-07-11 07:06:36');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pages` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,1,'Contacts','Contacts','<p>Contacts</p>','pages/page1.jpg','contacts','Yar Meta Description','Keyword1, Keyword2','ACTIVE','2022-06-26 12:15:08','2022-07-10 14:59:18'),(2,1,'About us','About us','<p>About us</p>',NULL,'about-us','About us','About us','INACTIVE','2022-07-10 15:04:28','2022-07-10 15:04:28');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permission_role` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2022-06-26 12:15:07','2022-06-26 12:15:07'),(2,'browse_bread',NULL,'2022-06-26 12:15:07','2022-06-26 12:15:07'),(3,'browse_database',NULL,'2022-06-26 12:15:07','2022-06-26 12:15:07'),(4,'browse_media',NULL,'2022-06-26 12:15:07','2022-06-26 12:15:07'),(5,'browse_compass',NULL,'2022-06-26 12:15:07','2022-06-26 12:15:07'),(6,'browse_menus','menus','2022-06-26 12:15:07','2022-06-26 12:15:07'),(7,'read_menus','menus','2022-06-26 12:15:07','2022-06-26 12:15:07'),(8,'edit_menus','menus','2022-06-26 12:15:07','2022-06-26 12:15:07'),(9,'add_menus','menus','2022-06-26 12:15:07','2022-06-26 12:15:07'),(10,'delete_menus','menus','2022-06-26 12:15:07','2022-06-26 12:15:07'),(11,'browse_roles','roles','2022-06-26 12:15:07','2022-06-26 12:15:07'),(12,'read_roles','roles','2022-06-26 12:15:07','2022-06-26 12:15:07'),(13,'edit_roles','roles','2022-06-26 12:15:07','2022-06-26 12:15:07'),(14,'add_roles','roles','2022-06-26 12:15:07','2022-06-26 12:15:07'),(15,'delete_roles','roles','2022-06-26 12:15:07','2022-06-26 12:15:07'),(16,'browse_users','users','2022-06-26 12:15:07','2022-06-26 12:15:07'),(17,'read_users','users','2022-06-26 12:15:07','2022-06-26 12:15:07'),(18,'edit_users','users','2022-06-26 12:15:07','2022-06-26 12:15:07'),(19,'add_users','users','2022-06-26 12:15:07','2022-06-26 12:15:07'),(20,'delete_users','users','2022-06-26 12:15:07','2022-06-26 12:15:07'),(21,'browse_settings','settings','2022-06-26 12:15:07','2022-06-26 12:15:07'),(22,'read_settings','settings','2022-06-26 12:15:07','2022-06-26 12:15:07'),(23,'edit_settings','settings','2022-06-26 12:15:07','2022-06-26 12:15:07'),(24,'add_settings','settings','2022-06-26 12:15:07','2022-06-26 12:15:07'),(25,'delete_settings','settings','2022-06-26 12:15:07','2022-06-26 12:15:07'),(26,'browse_categories','categories','2022-06-26 12:15:08','2022-06-26 12:15:08'),(27,'read_categories','categories','2022-06-26 12:15:08','2022-06-26 12:15:08'),(28,'edit_categories','categories','2022-06-26 12:15:08','2022-06-26 12:15:08'),(29,'add_categories','categories','2022-06-26 12:15:08','2022-06-26 12:15:08'),(30,'delete_categories','categories','2022-06-26 12:15:08','2022-06-26 12:15:08'),(31,'browse_posts','posts','2022-06-26 12:15:08','2022-06-26 12:15:08'),(32,'read_posts','posts','2022-06-26 12:15:08','2022-06-26 12:15:08'),(33,'edit_posts','posts','2022-06-26 12:15:08','2022-06-26 12:15:08'),(34,'add_posts','posts','2022-06-26 12:15:08','2022-06-26 12:15:08'),(35,'delete_posts','posts','2022-06-26 12:15:08','2022-06-26 12:15:08'),(36,'browse_pages','pages','2022-06-26 12:15:08','2022-06-26 12:15:08'),(37,'read_pages','pages','2022-06-26 12:15:08','2022-06-26 12:15:08'),(38,'edit_pages','pages','2022-06-26 12:15:08','2022-06-26 12:15:08'),(39,'add_pages','pages','2022-06-26 12:15:08','2022-06-26 12:15:08'),(40,'delete_pages','pages','2022-06-26 12:15:08','2022-06-26 12:15:08');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int NOT NULL,
  `category_id` int DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,1,1,'BANKING SERVICES','','Loan application preparation\nAccount reconcilation\nBank document preparation\nAccount opening\nMoney transfers','<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">You don&rsquo;t need to go without preparation for any issue to the bank. We can help you to prepare in a most proper way all your applications with guarantee succession and we could be the wise eye for any of your bank&rsquo;s activity.</p>\n<ul>\n<li style=\"line-height: 108%;\">Account opening</li>\n<li style=\"line-height: 108%;\">Loan application preparation</li>\n<li style=\"line-height: 108%;\">Money transfers</li>\n<li style=\"line-height: 108%;\">Bank&rsquo;s documentation check and review.</li>\n<li style=\"line-height: 108%;\">Account reconciliation</li>\n</ul>','posts/June2022/MrZHvzfATyaZGCMO7rUY.jpg','banking-services','This is the meta description','keyword1, keyword2, keyword3','PUBLISHED',0,'2022-06-26 12:15:08','2022-07-04 10:55:38'),(2,1,1,'AML COMPLIANCE – SANCTIONS','','This is the excerpt for the sample Post','<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">Professional advices from specialist in the industry with deep experience could help you to leave with compliance and overpassed sanctions legally.</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">-Incoming and outgoing transfers</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">-New co operations and relationships</p>\n<p></p>','posts/post2.jpg','aml-compliance-sanctions','Meta Description for sample post','keyword1, keyword2, keyword3','PUBLISHED',0,'2022-06-26 12:15:08','2022-07-04 06:29:25'),(3,1,1,'CORPORATE SERVICES – CONSULTING','','This is the excerpt for the latest post','<p>&nbsp;</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">We can undertake and fulfill your obligation, duty or aims for any activity regarding the smooth running of your company.</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">-Company establishment and registration</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">-Accounts administration</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">-Staff recruitment</p>\n<p></p>','posts/post3.jpg','corporate-services-consulting','This is the meta description','keyword1, keyword2, keyword3','PUBLISHED',0,'2022-06-26 12:15:08','2022-07-04 06:29:52'),(4,1,1,'REAL ESTATE','','Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.','<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">We can provide you will all necessary advices and support to get you ready, close and finish your next deal. No hidden secrets or surprises and guarantee your safety.</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">-Due diligence for any property attracted your buying interest</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">-Sales and Purchases deals and execution</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">-Rentals</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">-Valuation</p>\n<p></p>','posts/post4.jpg','real-estate','this be a meta descript','keyword1, keyword2, keyword3','PUBLISHED',0,'2022-06-26 12:15:08','2022-07-04 06:30:10'),(5,1,1,'INVESTMENTS','','','<p>&nbsp;</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">Our 30 years experiences and knowledge and presentation in various markets and our financial background will be beneficial to your decision bath.</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">-Analysis of your ideas for potential investments</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">-Our Investment proposals</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">-Cloud investment schemes</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">-Investment with subsidies</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">-Cyprus market analysis</p>\n<p></p>',NULL,'investments','','','PUBLISHED',0,'2022-07-04 06:30:27','2022-07-04 06:30:27'),(6,1,1,'GOVERNMENTAL AUTHORITIES','','','<p>&nbsp;</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">We may have the solution for any issue, obstacle and/or dispute you may face with any governmental or semi-governmental authority. We can discuss and decide proactive action and/or road map until the solution. We can also represent you and guarantee the succeed of your issue.</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">-Land registry issues</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">-Tax authorities</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">-Urban Planning Department</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">-Municipalities, CYTA, EAC, WBO, SEAWAGE BOARD</p>\n<p></p>',NULL,'governmental-authorities','','','PUBLISHED',0,'2022-07-04 06:31:00','2022-07-04 06:31:00'),(7,1,1,'INSURANCE SERVICES','','','<p>&nbsp;</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\"><a name=\"_GoBack\"></a> No risk for our valuables in life, solutions and coverage from a reliable company in the industry</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">-Medical Health, property, car, life protection insurances</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">-Loan coverage insurance</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">-Investment schemes</p>\n<p></p>',NULL,'insurance-services','','','PUBLISHED',0,'2022-07-04 06:31:17','2022-07-04 06:31:17'),(8,1,1,'NOTARY SERVICES','','','<p>&nbsp;</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">Drafting and advising clients on all kind of agreements</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">-Will drafting and ratification</p>\n<p style=\"margin-bottom: 0.28cm; line-height: 108%;\">-Attorneys and Proxy preparation</p>\n<p></p>',NULL,'notary-services','','','PUBLISHED',0,'2022-07-04 06:31:43','2022-07-04 06:31:43');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Administrator','2022-06-26 12:15:07','2022-06-26 12:15:07'),(2,'user','Normal User','2022-06-26 12:15:07','2022-06-26 12:15:07');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'site.title','Site Title','Site Title','','text',1,'Site'),(2,'site.description','Site Description','Site Description','','text',2,'Site'),(3,'site.logo','Site Logo','','','image',3,'Site'),(4,'site.google_analytics_tracking_id','Google Analytics Tracking ID','','','text',4,'Site'),(5,'admin.bg_image','Admin Background Image','','','image',5,'Admin'),(6,'admin.title','Admin Title','Voyager','','text',1,'Admin'),(7,'admin.description','Admin Description','Welcome to Voyager. The Missing Admin for Laravel','','text',2,'Admin'),(8,'admin.loader','Admin Loader','','','image',3,'Admin'),(9,'admin.icon_image','Admin Icon Image','','','image',4,'Admin'),(10,'admin.google_analytics_client_id','Google Analytics Client ID (used for admin dashboard)','','','text',1,'Admin');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `translations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
INSERT INTO `translations` VALUES (1,'data_types','display_name_singular',5,'pt','Post','2022-06-26 12:15:08','2022-06-26 12:15:08'),(2,'data_types','display_name_singular',6,'pt','Página','2022-06-26 12:15:08','2022-06-26 12:15:08'),(3,'data_types','display_name_singular',1,'pt','Utilizador','2022-06-26 12:15:08','2022-06-26 12:15:08'),(4,'data_types','display_name_singular',4,'pt','Categoria','2022-06-26 12:15:08','2022-06-26 12:15:08'),(5,'data_types','display_name_singular',2,'pt','Menu','2022-06-26 12:15:08','2022-06-26 12:15:08'),(6,'data_types','display_name_singular',3,'pt','Função','2022-06-26 12:15:08','2022-06-26 12:15:08'),(7,'data_types','display_name_plural',5,'pt','Posts','2022-06-26 12:15:08','2022-06-26 12:15:08'),(8,'data_types','display_name_plural',6,'pt','Páginas','2022-06-26 12:15:08','2022-06-26 12:15:08'),(9,'data_types','display_name_plural',1,'pt','Utilizadores','2022-06-26 12:15:08','2022-06-26 12:15:08'),(10,'data_types','display_name_plural',4,'pt','Categorias','2022-06-26 12:15:08','2022-06-26 12:15:08'),(11,'data_types','display_name_plural',2,'pt','Menus','2022-06-26 12:15:08','2022-06-26 12:15:08'),(12,'data_types','display_name_plural',3,'pt','Funções','2022-06-26 12:15:08','2022-06-26 12:15:08'),(13,'categories','slug',1,'pt','categoria-1','2022-06-26 12:15:08','2022-06-26 12:15:08'),(14,'categories','name',1,'pt','Categoria 1','2022-06-26 12:15:08','2022-06-26 12:15:08'),(15,'categories','slug',2,'pt','categoria-2','2022-06-26 12:15:08','2022-06-26 12:15:08'),(16,'categories','name',2,'pt','Categoria 2','2022-06-26 12:15:08','2022-06-26 12:15:08'),(17,'pages','title',1,'pt','Olá Mundo','2022-06-26 12:15:08','2022-06-26 12:15:08'),(18,'pages','slug',1,'pt','ola-mundo','2022-06-26 12:15:08','2022-06-26 12:15:08'),(19,'pages','body',1,'pt','<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>','2022-06-26 12:15:08','2022-06-26 12:15:08'),(20,'menu_items','title',1,'pt','Painel de Controle','2022-06-26 12:15:08','2022-06-26 12:15:08'),(21,'menu_items','title',2,'pt','Media','2022-06-26 12:15:08','2022-06-26 12:15:08'),(22,'menu_items','title',12,'pt','Publicações','2022-06-26 12:15:08','2022-06-26 12:15:08'),(23,'menu_items','title',3,'pt','Utilizadores','2022-06-26 12:15:08','2022-06-26 12:15:08'),(24,'menu_items','title',11,'pt','Categorias','2022-06-26 12:15:08','2022-06-26 12:15:08'),(25,'menu_items','title',13,'pt','Páginas','2022-06-26 12:15:09','2022-06-26 12:15:09'),(26,'menu_items','title',4,'pt','Funções','2022-06-26 12:15:09','2022-06-26 12:15:09'),(27,'menu_items','title',5,'pt','Ferramentas','2022-06-26 12:15:09','2022-06-26 12:15:09'),(28,'menu_items','title',6,'pt','Menus','2022-06-26 12:15:09','2022-06-26 12:15:09'),(29,'menu_items','title',7,'pt','Base de dados','2022-06-26 12:15:09','2022-06-26 12:15:09'),(30,'menu_items','title',10,'pt','Configurações','2022-06-26 12:15:09','2022-06-26 12:15:09'),(31,'data_rows','display_name',29,'ru','ID','2022-06-26 17:27:19','2022-06-26 17:27:19'),(32,'data_rows','display_name',29,'el','ID','2022-06-26 17:27:19','2022-06-26 17:27:19'),(33,'data_rows','display_name',30,'ru','Author','2022-06-26 17:27:19','2022-06-26 17:27:19'),(34,'data_rows','display_name',30,'el','Author','2022-06-26 17:27:19','2022-06-26 17:27:19'),(35,'data_rows','display_name',31,'ru','Category','2022-06-26 17:27:19','2022-06-26 17:27:19'),(36,'data_rows','display_name',31,'el','Category','2022-06-26 17:27:19','2022-06-26 17:27:19'),(37,'data_rows','display_name',32,'ru','Title','2022-06-26 17:27:19','2022-06-26 17:27:19'),(38,'data_rows','display_name',32,'el','Title','2022-06-26 17:27:19','2022-06-26 17:27:19'),(39,'data_rows','display_name',42,'ru','SEO Title','2022-06-26 17:27:19','2022-06-26 17:27:19'),(40,'data_rows','display_name',42,'el','SEO Title','2022-06-26 17:27:19','2022-06-26 17:27:19'),(41,'data_rows','display_name',33,'ru','Excerpt','2022-06-26 17:27:19','2022-06-26 17:27:19'),(42,'data_rows','display_name',33,'el','Excerpt','2022-06-26 17:27:19','2022-06-26 17:27:19'),(43,'data_rows','display_name',34,'ru','Body','2022-06-26 17:27:19','2022-06-26 17:27:19'),(44,'data_rows','display_name',34,'el','Body','2022-06-26 17:27:19','2022-06-26 17:27:19'),(45,'data_rows','display_name',35,'ru','Post Image','2022-06-26 17:27:19','2022-06-26 17:27:19'),(46,'data_rows','display_name',35,'el','Post Image','2022-06-26 17:27:19','2022-06-26 17:27:19'),(47,'data_rows','display_name',36,'ru','Slug','2022-06-26 17:27:19','2022-06-26 17:27:19'),(48,'data_rows','display_name',36,'el','Slug','2022-06-26 17:27:19','2022-06-26 17:27:19'),(49,'data_rows','display_name',37,'ru','Meta Description','2022-06-26 17:27:19','2022-06-26 17:27:19'),(50,'data_rows','display_name',37,'el','Meta Description','2022-06-26 17:27:19','2022-06-26 17:27:19'),(51,'data_rows','display_name',38,'ru','Meta Keywords','2022-06-26 17:27:19','2022-06-26 17:27:19'),(52,'data_rows','display_name',38,'el','Meta Keywords','2022-06-26 17:27:19','2022-06-26 17:27:19'),(53,'data_rows','display_name',39,'ru','Status','2022-06-26 17:27:19','2022-06-26 17:27:19'),(54,'data_rows','display_name',39,'el','Status','2022-06-26 17:27:19','2022-06-26 17:27:19'),(55,'data_rows','display_name',43,'ru','Featured','2022-06-26 17:27:19','2022-06-26 17:27:19'),(56,'data_rows','display_name',43,'el','Featured','2022-06-26 17:27:19','2022-06-26 17:27:19'),(57,'data_rows','display_name',40,'ru','Created At','2022-06-26 17:27:19','2022-06-26 17:27:19'),(58,'data_rows','display_name',40,'el','Created At','2022-06-26 17:27:19','2022-06-26 17:27:19'),(59,'data_rows','display_name',41,'ru','Updated At','2022-06-26 17:27:19','2022-06-26 17:27:19'),(60,'data_rows','display_name',41,'el','Updated At','2022-06-26 17:27:19','2022-06-26 17:27:19'),(61,'data_types','display_name_singular',5,'ru','Post','2022-06-26 17:27:19','2022-06-26 17:27:19'),(62,'data_types','display_name_singular',5,'el','Post','2022-06-26 17:27:19','2022-06-26 17:27:19'),(63,'data_types','display_name_plural',5,'ru','Posts','2022-06-26 17:27:19','2022-06-26 17:27:19'),(64,'data_types','display_name_plural',5,'el','Posts','2022-06-26 17:27:19','2022-06-26 17:27:19'),(65,'posts','title',1,'ru','Lorem Ipsum Post','2022-06-26 17:30:21','2022-06-26 17:30:21'),(66,'posts','title',1,'el','Lorem Ipsum Post','2022-06-26 17:30:21','2022-06-26 17:30:21'),(67,'posts','excerpt',1,'ru','This is the excerpt for the Lorem Ipsum Post','2022-06-26 17:30:21','2022-06-26 17:30:21'),(68,'posts','excerpt',1,'el','This is the excerpt for the Lorem Ipsum Post','2022-06-26 17:30:21','2022-06-26 17:30:21'),(69,'posts','body',1,'ru','<p>This is the body of the lorem ipsum post</p>','2022-06-26 17:30:21','2022-06-26 17:30:21'),(70,'posts','body',1,'el','<p>This is the body of the lorem ipsum post</p>','2022-06-26 17:30:21','2022-06-26 17:30:21'),(71,'posts','slug',1,'ru','lorem-ipsum-post','2022-06-26 17:30:21','2022-06-26 17:30:21'),(72,'posts','slug',1,'el','lorem-ipsum-post','2022-06-26 17:30:21','2022-06-26 17:30:21'),(73,'posts','meta_description',1,'ru','This is the meta description','2022-06-26 17:30:21','2022-06-26 17:30:21'),(74,'posts','meta_description',1,'el','This is the meta description','2022-06-26 17:30:21','2022-06-26 17:30:21'),(75,'posts','meta_keywords',1,'ru','keyword1, keyword2, keyword3','2022-06-26 17:30:21','2022-06-26 17:30:21'),(76,'posts','meta_keywords',1,'el','keyword1, keyword2, keyword3','2022-06-26 17:30:21','2022-06-26 17:30:21'),(77,'posts','title',2,'ru','My Sample Post','2022-07-04 06:29:25','2022-07-04 06:29:25'),(78,'posts','title',2,'el','My Sample Post','2022-07-04 06:29:25','2022-07-04 06:29:25'),(79,'posts','excerpt',2,'ru','This is the excerpt for the sample Post','2022-07-04 06:29:25','2022-07-04 06:29:25'),(80,'posts','excerpt',2,'el','This is the excerpt for the sample Post','2022-07-04 06:29:25','2022-07-04 06:29:25'),(81,'posts','body',2,'ru','<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>','2022-07-04 06:29:25','2022-07-04 06:29:25'),(82,'posts','body',2,'el','<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>','2022-07-04 06:29:25','2022-07-04 06:29:25'),(83,'posts','slug',2,'ru','my-sample-post','2022-07-04 06:29:25','2022-07-04 06:29:25'),(84,'posts','slug',2,'el','my-sample-post','2022-07-04 06:29:25','2022-07-04 06:29:25'),(85,'posts','meta_description',2,'ru','Meta Description for sample post','2022-07-04 06:29:25','2022-07-04 06:29:25'),(86,'posts','meta_description',2,'el','Meta Description for sample post','2022-07-04 06:29:25','2022-07-04 06:29:25'),(87,'posts','meta_keywords',2,'ru','keyword1, keyword2, keyword3','2022-07-04 06:29:25','2022-07-04 06:29:25'),(88,'posts','meta_keywords',2,'el','keyword1, keyword2, keyword3','2022-07-04 06:29:25','2022-07-04 06:29:25'),(89,'posts','title',3,'ru','Latest Post','2022-07-04 06:29:52','2022-07-04 06:29:52'),(90,'posts','title',3,'el','Latest Post','2022-07-04 06:29:52','2022-07-04 06:29:52'),(91,'posts','excerpt',3,'ru','This is the excerpt for the latest post','2022-07-04 06:29:52','2022-07-04 06:29:52'),(92,'posts','excerpt',3,'el','This is the excerpt for the latest post','2022-07-04 06:29:52','2022-07-04 06:29:52'),(93,'posts','body',3,'ru','<p>This is the body for the latest post</p>','2022-07-04 06:29:52','2022-07-04 06:29:52'),(94,'posts','body',3,'el','<p>This is the body for the latest post</p>','2022-07-04 06:29:52','2022-07-04 06:29:52'),(95,'posts','slug',3,'ru','latest-post','2022-07-04 06:29:52','2022-07-04 06:29:52'),(96,'posts','slug',3,'el','latest-post','2022-07-04 06:29:52','2022-07-04 06:29:52'),(97,'posts','meta_description',3,'ru','This is the meta description','2022-07-04 06:29:52','2022-07-04 06:29:52'),(98,'posts','meta_description',3,'el','This is the meta description','2022-07-04 06:29:52','2022-07-04 06:29:52'),(99,'posts','meta_keywords',3,'ru','keyword1, keyword2, keyword3','2022-07-04 06:29:52','2022-07-04 06:29:52'),(100,'posts','meta_keywords',3,'el','keyword1, keyword2, keyword3','2022-07-04 06:29:52','2022-07-04 06:29:52'),(101,'posts','title',4,'ru','Yarr Post','2022-07-04 06:30:10','2022-07-04 06:30:10'),(102,'posts','title',4,'el','Yarr Post','2022-07-04 06:30:10','2022-07-04 06:30:10'),(103,'posts','excerpt',4,'ru','Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.','2022-07-04 06:30:10','2022-07-04 06:30:10'),(104,'posts','excerpt',4,'el','Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.','2022-07-04 06:30:10','2022-07-04 06:30:10'),(105,'posts','body',4,'ru','<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>','2022-07-04 06:30:10','2022-07-04 06:30:10'),(106,'posts','body',4,'el','<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>','2022-07-04 06:30:10','2022-07-04 06:30:10'),(107,'posts','slug',4,'ru','yarr-post','2022-07-04 06:30:10','2022-07-04 06:30:10'),(108,'posts','slug',4,'el','yarr-post','2022-07-04 06:30:10','2022-07-04 06:30:10'),(109,'posts','meta_description',4,'ru','this be a meta descript','2022-07-04 06:30:10','2022-07-04 06:30:10'),(110,'posts','meta_description',4,'el','this be a meta descript','2022-07-04 06:30:10','2022-07-04 06:30:10'),(111,'posts','meta_keywords',4,'ru','keyword1, keyword2, keyword3','2022-07-04 06:30:10','2022-07-04 06:30:10'),(112,'posts','meta_keywords',4,'el','keyword1, keyword2, keyword3','2022-07-04 06:30:10','2022-07-04 06:30:10'),(113,'menu_items','title',14,'ru','Home','2022-07-10 06:48:47','2022-07-10 06:48:47'),(114,'menu_items','title',14,'el','Home','2022-07-10 06:48:47','2022-07-10 06:48:47'),(115,'pages','title',1,'ru','Hello World','2022-07-10 14:59:18','2022-07-10 14:59:18'),(116,'pages','title',1,'el','Hello World','2022-07-10 14:59:18','2022-07-10 14:59:18'),(117,'pages','body',1,'ru','<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>','2022-07-10 14:59:18','2022-07-10 14:59:18'),(118,'pages','body',1,'el','<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>','2022-07-10 14:59:18','2022-07-10 14:59:18'),(119,'pages','slug',1,'ru','hello-world','2022-07-10 14:59:18','2022-07-10 14:59:18'),(120,'pages','slug',1,'el','hello-world','2022-07-10 14:59:18','2022-07-10 14:59:18'),(121,'menu_items','title',16,'ru','ABOUT US','2022-07-10 15:04:55','2022-07-10 15:04:55'),(122,'menu_items','title',16,'el','ABOUT US','2022-07-10 15:04:55','2022-07-10 15:04:55'),(123,'menu_items','title',17,'ru','CONTACTS','2022-07-10 15:05:04','2022-07-10 15:05:04'),(124,'menu_items','title',17,'el','CONTACTS','2022-07-10 15:05:04','2022-07-10 15:05:04');
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_roles` (
  `user_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Admin','admin@admin.com','users/default.png',NULL,'$2y$10$R8s1gNTOsA06I80WHnRiauolwZVHoOfvbKDlw6XDpXr9eEFsBs8Eu','zrn8260euvm5ThjCNOdWAJtgiasb0qhDrzU2JCpPlClt45wjJYiAq15UspMZ',NULL,'2022-06-26 12:15:08','2022-06-26 12:15:08');
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

-- Dump completed on 2022-07-16 12:53:00
