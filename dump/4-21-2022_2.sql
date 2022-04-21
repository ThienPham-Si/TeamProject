CREATE DATABASE  IF NOT EXISTS `Theme_Park_Database` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `Theme_Park_Database`;
-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: team6database.cerk6mugrkdv.us-east-1.rds.amazonaws.com    Database: Theme_Park_Database
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
SET @MYSQLDUMP_TEMP_LOG_BIN = @@SESSION.SQL_LOG_BIN;
SET @@SESSION.SQL_LOG_BIN= 0;

--
-- GTID state at the beginning of the backup 
--

SET @@GLOBAL.GTID_PURGED=/*!80000 '+'*/ '';

--
-- Table structure for table `Notifications`
--

DROP TABLE IF EXISTS `Notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Notifications` (
  `employee_to_notify` int DEFAULT NULL,
  `table_to_check` varchar(50) DEFAULT NULL,
  `checked` tinyint(1) DEFAULT '0',
  `notification_number` int NOT NULL AUTO_INCREMENT,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `sn` int DEFAULT '0',
  PRIMARY KEY (`notification_number`)
) ENGINE=InnoDB AUTO_INCREMENT=181 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Notifications`
--

LOCK TABLES `Notifications` WRITE;
/*!40000 ALTER TABLE `Notifications` DISABLE KEYS */;
INSERT INTO `Notifications` VALUES (2,'maintaince_tickets',1,1,0,1),(3,'park_events',1,2,0,2),(1,'maintaince_tickets',1,3,0,3),(1,'maintaince_tickets',1,4,0,4),(1,'maintaince_tickets',1,5,0,5),(2,'maintaince_tickets',1,6,0,6),(2,'maintaince_tickets',1,7,0,7),(1,'maintaince_tickets',1,8,0,8),(1,'maintaince_tickets',1,9,0,9),(1,'maintaince_tickets',1,10,0,10),(2,'maintaince_tickets',1,11,0,11),(1,'maintaince_tickets',1,12,0,12),(1,'maintaince_tickets',1,13,0,13),(1,'maintaince_tickets',1,14,1,14),(1,'maintaince_tickets',1,15,0,15),(1,'maintaince_tickets',1,16,0,16),(1,'maintaince_tickets',1,17,0,17),(1,'maintaince_tickets',1,18,0,18),(1,'maintaince_tickets',1,19,0,19),(2,'maintaince_tickets',1,20,0,20),(1,'maintaince_tickets',1,21,0,21),(2,'maintaince_tickets',1,22,0,22),(2,'maintaince_tickets',1,23,0,23),(3,'maintaince_tickets',1,24,0,24),(2,'maintaince_tickets',1,25,0,25),(2,'maintaince_tickets',1,26,0,26),(2,'park_events',1,27,0,27),(3,'maintaince_tickets',1,28,0,28),(3,'maintaince_tickets',1,29,0,29),(NULL,'park_events',1,30,1,30),(2,'park_events',1,31,0,31),(2,'park_events',1,32,0,32),(NULL,'park_events',1,33,1,33),(2,'park_events',1,34,0,34),(2,'park_events',1,35,0,35),(2,'park_events',1,36,0,36),(2,'park_events',1,37,0,37),(2,'park_events',1,38,0,38),(NULL,'park_events',1,39,1,39),(2,'park_events',1,40,0,40),(2,'park_events',1,41,0,41),(2,'park_events',1,42,0,42),(2,'park_events',1,43,0,43),(2,'park_events',1,44,0,44),(2,'park_events',1,45,0,45),(2,'park_events',1,46,0,46),(2,'park_events',1,47,0,47),(2,'park_events',1,48,0,48),(2,'park_events',1,49,0,49),(2,'park_events',1,50,0,50),(2,'park_events',1,51,0,51),(2,'park_events',1,52,0,52),(2,'park_events',1,53,0,53),(2,'park_events',1,54,0,54),(2,'park_events',1,55,0,55),(2,'park_events',1,56,0,56),(2,'park_events',1,57,0,57),(3,'park_events',1,58,0,58),(3,'park_events',1,59,0,59),(3,'park_events',1,60,0,60),(3,'park_events',1,61,0,61),(2,'park_events',1,62,0,62),(3,'park_events',1,63,0,63),(3,'park_events',1,64,0,64),(2,'park_events',1,65,0,65),(2,'park_events',1,66,0,66),(3,'park_events',1,67,0,67),(2,'park_events',1,68,0,68),(2,'park_events',1,69,0,69),(2,'park_events',1,70,0,70),(3,'park_events',1,71,0,71),(2,'park_events',1,72,0,72),(3,'park_events',1,73,0,73),(2,'park_events',1,74,0,74),(3,'park_events',1,75,0,75),(3,'park_events',1,76,0,76),(2,'park_events',1,77,0,77),(3,'park_events',1,78,0,78),(2,'park_events',1,79,0,79),(2,'park_events',1,80,0,80),(3,'park_events',1,81,0,81),(3,'park_events',1,82,0,82),(2,'park_events',1,83,0,1),(3,'park_events',1,84,0,84),(3,'park_events',1,85,0,2),(2,'park_events',1,86,0,86),(2,'park_events',1,87,0,87),(2,'park_events',1,88,0,88),(3,'park_events',1,89,0,89),(3,'park_events',1,90,0,2),(2,'park_events',1,91,0,91),(3,'park_events',1,92,0,92),(2,'park_events',1,93,0,93),(2,'park_events',1,94,0,94),(3,'park_events',1,95,0,95),(2,'park_events',1,96,0,3),(2,'maintaince_tickets',1,97,0,1),(1,'maintaince_tickets',1,98,0,2),(1,'maintaince_tickets',1,99,0,2),(2,'maintaince_tickets',1,100,0,4),(4,'maintaince_tickets',1,101,0,4),(3,'maintaince_tickets',1,102,0,2),(3,'maintaince_tickets',1,103,0,6),(0,'maintaince_tickets',1,104,0,2),(1,'maintaince_tickets',1,105,0,1),(1,'maintaince_tickets',1,106,0,4),(2,'maintaince_tickets',1,107,0,3),(2,'maintaince_tickets',1,108,0,2),(1,'maintaince_tickets',1,109,0,4),(2,'maintaince_tickets',1,110,0,2),(1,'maintaince_tickets',1,111,0,3),(2,'maintaince_tickets',1,112,0,6),(2,'maintaince_tickets',1,113,0,1),(1,'maintaince_tickets',1,114,0,1),(1,'maintaince_tickets',1,115,0,1),(2,'maintaince_tickets',1,116,0,1),(2,'maintaince_tickets',1,117,0,3),(1,'maintaince_tickets',1,118,0,3),(1,'maintaince_tickets',1,119,0,1),(2,'maintaince_tickets',1,120,0,4),(1,'maintaince_tickets',1,121,0,4),(3,'maintaince_tickets',1,122,0,4),(4,'maintaince_tickets',1,123,0,7),(4,'maintaince_tickets',1,124,0,11),(1,'maintaince_tickets',1,125,0,1),(2,'maintaince_tickets',1,126,0,1),(2,'maintaince_tickets',1,127,0,3),(1,'maintaince_tickets',1,128,0,1),(2,'maintaince_tickets',1,129,0,3),(1,'maintaince_tickets',1,130,0,1),(1,'maintaince_tickets',1,131,0,3),(2,'maintaince_tickets',1,132,0,1),(1,'maintaince_tickets',1,133,0,3),(3,'maintaince_tickets',1,134,0,1),(2,'maintaince_tickets',1,135,0,1),(1,'maintaince_tickets',1,136,0,1),(2,'maintaince_tickets',1,137,0,1),(2,'maintaince_tickets',1,138,0,2),(1,'maintaince_tickets',1,139,0,2),(1,'maintaince_tickets',1,140,0,1),(1,'maintaince_tickets',1,141,0,5),(1,'maintaince_tickets',1,142,0,6),(3,'maintaince_tickets',1,143,0,6),(2,'maintaince_tickets',1,144,0,1),(1,'maintaince_tickets',1,145,0,1),(1,'maintaince_tickets',1,146,0,3),(4,'maintaince_tickets',1,147,0,1),(1,'maintaince_tickets',1,148,0,5),(1,'maintaince_tickets',1,149,0,3),(2,'maintaince_tickets',1,150,0,7),(1,'maintaince_tickets',1,151,0,2),(2,'maintaince_tickets',1,152,0,9),(1,'maintaince_tickets',1,153,0,5),(4,'maintaince_tickets',1,154,0,11),(1,'maintaince_tickets',1,155,0,2),(2,'maintaince_tickets',1,156,0,13),(1,'maintaince_tickets',1,157,0,7),(2,'maintaince_tickets',1,158,0,15),(1,'maintaince_tickets',1,159,0,4),(1,'maintaince_tickets',1,160,0,17),(2,'maintaince_tickets',1,161,0,9),(2,'maintaince_tickets',1,162,0,19),(1,'maintaince_tickets',1,163,0,4),(2,'maintaince_tickets',1,164,0,21),(1,'maintaince_tickets',1,165,0,11),(1,'maintaince_tickets',1,166,0,23),(2,'maintaince_tickets',1,167,0,6),(1,'maintaince_tickets',1,168,0,25),(3,'maintaince_tickets',1,169,0,13),(4,'maintaince_tickets',1,170,0,27),(NULL,'maintaince_tickets',1,171,0,0),(NULL,'maintaince_tickets',1,172,0,0),(1,'maintaince_tickets',1,173,0,1),(3,'maintaince_tickets',1,174,0,1),(4,'maintaince_tickets',1,175,0,3),(3,'maintaince_tickets',1,176,0,1),(4,'maintaince_tickets',1,177,0,1),(1,'maintaince_tickets',0,178,0,1),(4,'maintaince_tickets',1,179,0,2),(1,'maintaince_tickets',1,180,0,2);
/*!40000 ALTER TABLE `Notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carnival_games`
--

DROP TABLE IF EXISTS `carnival_games`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `carnival_games` (
  `id` int NOT NULL AUTO_INCREMENT,
  `carnival_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carnival_location` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carnival_description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hours_of_operation` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost_per_round` int DEFAULT NULL,
  `currently_in_operation` tinyint(1) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carnival_games`
--

LOCK TABLES `carnival_games` WRITE;
/*!40000 ALTER TABLE `carnival_games` DISABLE KEYS */;
INSERT INTO `carnival_games` VALUES (1,'Ball and Bucket Toss','Jellyland','A twist on the popular game - fight off the bucket-shaped slimes of Jellyland by tossing paintballs. The bigger the boss, the better the prize!','10:00 am - 8:00 pm',2,1,0),(2,'Balloon And Dart','Cakeland','Toss lollipops into cotton candy balloons and win a stuffed lollipop!','10:00 am - 8:00 pm',2,1,0),(3,'Bottle Stand','Cakeland','Bowling with water bottles for pins and cupcake themed stress balls!','8:00 am - 8:00 pm',2,1,0),(4,'Bulldozer','Cakeland','Players \"bulldoze\" the icing on cakes using a toy bulldozer. At the end of the game, you can eat your cake~','10:00 am - 8:00 pm',4,0,0),(5,'Capture the spot','Swampland','An arcade game - a fun twist on capture the flag!','11:00 am - 8:00 pm',5,1,0),(6,'Crazy Bike','Cakeland','A 2-player arcade game where players design their own bikes and compete in a race.','10:00 am - 9:00 pm',4,0,1),(7,'Cross Bow Target Shoot','Cakeland','Practice your archery skills here! Players shoot arrows at cakes with targets on them. If the player can land on the target, the cake is theirs!','9:00 am - 7:00 pm',5,0,0),(8,'Duck Pond','Swampland','Select a duck to determine your prize!','10:00 am - 7:00 pm',1,1,1),(9,'Ladder Climb','Waferland','The popular carnival game is finally here! Players climb a rope ladder - but can you make it to the top?','9:00 am - 7:00 pm',2,0,0),(10,'Ping-pong Ball and Fishbowl','Cakeland','Play ping-pong with a fishbowl (with stuffed fishes) on the table. If the ball falls in, it\'s game over. Rest assured - no fishes are harmed when playing the game.','9:00 am - 7:00 pm',4,1,0),(11,'Shooting Gallery','Lollipopland','Point happy meeting medical right heart with. Easy rich religious central west design. Sport today kind speech TV.','9 am - 8 pm',2,1,0),(12,'Water Gun','Cakeland','Time for some splashing fun!','9:00 am - 7:00 pm',5,0,1),(13,'Duck Pond','Swampland','Pick a duck to reveal your prize!','10:00 am - 8:00 pm',0,1,1),(14,'Car-amel Apple','Cakeland','Race against the apples to win a caramel apple!','10:00 am - 8:00 pm',0,1,0);
/*!40000 ALTER TABLE `carnival_games` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `current_age` int DEFAULT NULL,
  `gender` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit_card` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_visit` datetime DEFAULT NULL,
  `VIP_status` tinyint(1) DEFAULT NULL,
  `hours_spent` int DEFAULT NULL,
  `user_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'Jennifer','David','Perkins','26730 Day Coves\nNew Shaneburgh, CA 61233','1992-05-29 00:00:00',79,'1','+1-248-934-3035x0390','hallthomas@example.net','3549363572005118','2022-03-10 00:00:00',1,53,'davidmoore','XK&n8(Tk_I',0),(2,'Bonnie','Kimberly','Rose','5398 Marissa Street Apt. 185\nElizabethfort, WI 40991','1997-05-27 00:00:00',64,'0','5058874818','maryhughes@example.com','4394078453364913','2022-02-24 00:00:00',1,27,'jacobevans','#k6C5Brn@d',0),(3,'Laura','Chen','Suarez','82190 Austin View\nEugeneland, AL 92941','1990-08-24 00:00:00',50,'0','337-261-2242','gabrielle68@example.org','501813190904','2022-03-05 00:00:00',1,49,'erika13',')L5T7ErYzQ',0),(4,'John','Williams','Stewart','6523 Chelsea Wall Suite 692\nSotomouth, IA 05617','1945-11-06 00:00:00',36,'0','547.464.0467x743','fdavenport@example.org','4113050857116','2022-03-23 00:00:00',1,54,'ijohnson','XdpH5gLf3^',0),(5,'Robert','Lee','Huynh','8111 Ronald Branch\nWestbury, NH 22033','1934-07-30 00:00:00',28,'1','001-315-685-3371x382','wendybailey@example.net','4265409899796531','2022-02-17 00:00:00',1,43,'bradley47',')TSrPIFPi7',0),(6,'Colleen','Galvan','Smith','471 Taylor Rue Suite 734\nNew Douglasberg, OH 16772','2018-01-14 00:00:00',64,'0','213.849.2325x710','rtanner@example.net','4870276231576542','2022-02-04 00:00:00',0,52,'smithpatrick','wq#EfHra_7',0),(8,'Elizabeth','Ryan','Hopkins','96307 Nelson Radial Apt. 275\nNew Seanburgh, RI 91374','2007-11-29 00:00:00',72,'1','6834437351','christianlewis@example.org','213185825840053','2022-02-04 00:00:00',0,50,'tyler55','7s&9BxAf#9',0),(9,'Nicole','Allen','Saunders','795 Joshua Circle Apt. 888\nLake Lisastad, WV 36142','1967-01-11 00:00:00',21,'1','073.720.1349x5984','cshannon@example.net','4472193077249708','2022-01-05 00:00:00',1,59,'murphyjoseph','!DU@lYbcl9',0),(10,'Keith','Smith','Mcgee','2009 Christopher Highway\nMosstown, CO 58063','1988-01-24 00:00:00',33,'1','320-395-0751','karidecker@example.com','213127417733783','2022-01-26 00:00:00',0,56,'stephanieramos','6n+f1BD!4)',0),(11,'Brianna','Hamilton','Ford','71583 Barbara View Apt. 253\nHowardfurt, VT 69138','1955-06-30 00:00:00',52,'0','8918504897','staceyrivers@example.net','2246738107178837','2022-03-22 00:00:00',0,47,'lrodriguez','V#74p2Rvs^',0),(12,'Mary','Weber','Wright','43234 Emily Square\nMyersshire, ME 49185','1944-04-01 00:00:00',83,'0','553.290.9547','waltergerald@example.com','586701406264','2022-01-18 00:00:00',0,58,'baileyconnie','1rl0A#r$C)',0),(13,'Kenneth','White','Colon','191 James Estates\nSouth Jason, ID 04003','1967-07-31 00:00:00',69,'0','464.243.1974x92376','perezaaron@example.org','3560710293046900','2022-02-25 00:00:00',1,2,'gcollins','9ydEVd1d)c',0),(14,'Thomas','Porter','Morgan','9663 Webb Overpass\nJimenezmouth, DE 63083','1930-05-13 00:00:00',16,'1','570.715.2017x254','joycekrystal@example.org','3524205830397762','2022-02-09 00:00:00',0,17,'william89','O@MLdeNj#3',0),(15,'Kimberly','Crosby','Blake','91448 Richardson Drives\nMorganland, MO 29343','1992-08-28 00:00:00',86,'1','001-572-202-6682x441','paul87@example.net','180037612589550','2022-03-15 00:00:00',0,11,'htran','Y%6S8Bu5gR',0),(16,'Kaitlin','Murray','Weaver','PSC 9507, Box 6700\nAPO AP 24019','1973-09-10 00:00:00',69,'1','558-444-3096','wruiz@example.org','4207763294824012','2022-03-21 00:00:00',1,31,'patrickchris','uTQG5Hy6k#',0),(17,'Lauren','Tucker','Turner','38310 Laura Wells Suite 737\nDixonfurt, OH 23567','1917-04-13 00:00:00',53,'1','+1-652-755-6527x1156','robert20@example.com','4177898925986511','2022-03-19 00:00:00',1,32,'karen14','XdD8T#qL)X',0),(18,'David','Mcknight','Adkins','000 Thomas Falls Suite 885\nParkerville, IN 50419','1984-10-04 00:00:00',28,'0','001-067-609-2192x020','bbrown@example.com','4725325046580442','2022-02-01 00:00:00',1,10,'ggriffith','!b2sXyG)W+',0),(19,'Steve','Arias','Reid','4200 Morales Inlet\nPort Ryanside, AR 97555','1956-05-17 00:00:00',64,'0','+1-467-899-0935x272','fbaker@example.com','30323415669019','2022-03-19 00:00:00',0,19,'dray','@5U8IrbwM8',0),(20,'Kendra','Ramos','Maldonado','40406 Long Forks\nSmithport, AR 57399','1919-04-14 00:00:00',74,'0','+1-211-997-7920x623','robert21@example.net','3546832116309445','2022-02-05 00:00:00',1,26,'mcdowellrebecca','+%hjvTGxi6',0),(21,'Christine','Maxwell','Larson','63009 Veronica Drives Apt. 922\nNorth Carolchester, AZ 25981','1941-02-26 00:00:00',46,'1','(017)098-3532x0136','sbailey@example.net','4130913229203483','2022-03-21 00:00:00',0,26,'kbailey','#23OTyio#p',0),(22,'Kevin','Valdez','Patel','774 Rachael Ranch\nCrawfordton, VA 94679','1984-03-23 00:00:00',66,'0','001-557-325-6768','dsutton@example.net','6596462262163685','2022-01-16 00:00:00',0,37,'hebertjoseph','CtF8tYraz&',0),(23,'Jose','Hardin','Randall','653 Jordan Via Suite 005\nHornefurt, IA 85425','1965-12-01 00:00:00',64,'1','2253542638','xanderson@example.net','3572104303942223','2022-03-26 00:00:00',0,28,'lopezdeborah','*ECrYtwgo6',0),(24,'Christopher','Edwards','Hicks','742 Morris Springs Apt. 347\nWendyberg, RI 81624','1970-05-28 00:00:00',76,'1','001-101-736-3233x329','taylor87@example.net','377801925695286','2022-02-02 00:00:00',0,30,'ryanadams','3n*qF8Flvs',0),(25,'Joshua','Evans','Becker','04001 Christina Crest\nEast Bryanstad, LA 51044','1913-05-27 00:00:00',59,'1','455.596.7066x6254','weavermisty@example.com','3530394062333133','2022-02-07 00:00:00',0,26,'barnesrenee','+v37Zrr@!9',0),(26,'Michael','Harris','Harris','PSC 0912, Box 6551\nAPO AE 49745','1914-02-03 00:00:00',41,'0','106-384-1228x267','kim33@example.com','5463344456111864','2022-03-30 00:00:00',1,10,'gomezjessica','1*V@9WKa#%',0),(27,'Kevin','Baker','Lee','0358 Garcia Pines\nWest Sharon, WI 97004','1964-03-01 00:00:00',42,'0','001-795-792-4705','veronicaortiz@example.com','501810729035','2022-04-03 00:00:00',0,38,'kcollins','$lmA6Mpu3_',0),(28,'Melissa','Morris','Paul','005 Tanya Stream\nWest Suzanne, MO 11428','1999-05-13 00:00:00',36,'1','855-500-8068','opatel@example.net','180073677131350','2022-02-11 00:00:00',0,52,'thomaslori','$7OcrgCVD2',0);
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dining`
--

DROP TABLE IF EXISTS `dining`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dining` (
  `id` int NOT NULL AUTO_INCREMENT,
  `dining_type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_hour` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `close_hour` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operational_status` tinyint(1) DEFAULT NULL,
  `locations` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dining`
--

LOCK TABLES `dining` WRITE;
/*!40000 ALTER TABLE `dining` DISABLE KEYS */;
INSERT INTO `dining` VALUES (1,'American','08:00','22:00',1,'3',0),(2,'Italian','08:00','23:00',1,'4',0);
/*!40000 ALTER TABLE `dining` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `drinks`
--

DROP TABLE IF EXISTS `drinks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `drinks` (
  `drink_num` int NOT NULL AUTO_INCREMENT,
  `drink_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` decimal(5,2) NOT NULL,
  `menu_id` int DEFAULT NULL,
  `drink_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_sold` int DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`drink_num`),
  KEY `menu_id` (`menu_id`),
  CONSTRAINT `drinks_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drinks`
--

LOCK TABLES `drinks` WRITE;
/*!40000 ALTER TABLE `drinks` DISABLE KEYS */;
/*!40000 ALTER TABLE `drinks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employees` (
  `employee_id` int NOT NULL,
  `ssn` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `phone_num` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salery_biweekly` decimal(8,2) DEFAULT NULL,
  `first_name` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_name` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_contact_person` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ec_relation` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ec_phone_num` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hours` int NOT NULL,
  `supervisor_id` int DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `employee_role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`employee_id`),
  KEY `supervisor_id` (`supervisor_id`),
  CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`supervisor_id`) REFERENCES `employees` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (0,'113-67-2731','1982-02-18','675-182-8192','306 Larsen Corner Suite 591\nEa',2891.00,'Helen','Green','Nguyen','Anita Browning','Mother','2147483647',38,NULL,0,'Maintenance'),(1,'007-61-8093','1929-01-25','+1-841-488-4530','1332 Chelsea Pines\nNew Stephen',2862.00,'Erica','Ortega','Stephens','Shawn Williams','Sister','001-955-509-6672x937',71,NULL,0,'Ride Operator'),(2,'572-72-7687','1910-05-12','001-936-436-5873x831','514 Susan Garden\nLevineview, L',4635.00,'Emily','Watts','Cummings','Christine Wood','Brother','771-112-6102x149',13,NULL,0,'Event Coordinator'),(3,'314-44-3809','1939-03-09','(981)863-6285x74206','916 Barbara Camp Suite 041\nTam',2433.00,'Mark','Wells','Wilson','Bailey Hall','Son','8986157233',11,NULL,0,'Dining'),(4,'434-22-1012','1986-08-10','001-918-300-6384x136','490 Brian Burgs Apt. 073\nJenni',2569.00,'Heather','Maynard','Davis','Joshua Benson','Sister','297.792.0361',67,NULL,0,'Hotels'),(5,'209-71-8449','2010-09-27','+1-280-133-2937x5037','9634 Morgan Ridge\nMichellefurt',2280.00,'Jose','Tran','Burnett','Wanda Allen','Son','(285)930-6614x7876',17,NULL,0,'Admin');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `food` (
  `food_num` int NOT NULL AUTO_INCREMENT,
  `food_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `food_type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` decimal(5,2) NOT NULL,
  `menu_id` int DEFAULT NULL,
  `total_sold` int DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`food_num`),
  KEY `menu_id` (`menu_id`),
  CONSTRAINT `food_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `food`
--

LOCK TABLES `food` WRITE;
/*!40000 ALTER TABLE `food` DISABLE KEYS */;
/*!40000 ALTER TABLE `food` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotel_rooms`
--

DROP TABLE IF EXISTS `hotel_rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hotel_rooms` (
  `hotel_id` int NOT NULL,
  `room_num` int NOT NULL,
  `room_type` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupied` tinyint(1) DEFAULT NULL,
  `need_cleaning` tinyint(1) DEFAULT NULL,
  `customer_id` int DEFAULT NULL,
  `cost_per_day` decimal(6,2) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`hotel_id`,`room_num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotel_rooms`
--

LOCK TABLES `hotel_rooms` WRITE;
/*!40000 ALTER TABLE `hotel_rooms` DISABLE KEYS */;
INSERT INTO `hotel_rooms` VALUES (0,1,'single',0,0,0,120.00,0),(0,2,'single',0,0,0,120.00,0),(0,3,'single',0,0,0,120.00,0),(0,4,'single',0,0,0,120.00,0),(0,5,'single',0,0,0,120.00,0),(0,6,'single',1,0,3,120.00,0),(0,7,'single',1,0,6,120.00,0),(0,8,'single',1,0,8,120.00,0),(0,9,'single',1,0,8,120.00,0),(0,10,'single',0,0,0,120.00,0),(0,11,'double',0,0,0,225.00,0),(0,12,'double',1,0,9,225.00,0),(0,13,'double',0,0,0,225.00,0),(0,14,'double',1,0,2,225.00,0),(0,15,'double',1,0,2,225.00,0),(1,1,'single',1,0,4,85.00,0),(1,2,'single',1,0,3,85.00,0),(1,3,'single',0,0,0,85.00,0),(1,4,'double',1,0,18,105.00,0),(1,5,'double',1,0,4,105.00,0),(1,6,'double',1,0,3,105.00,0),(1,7,'double',1,0,2,105.00,0),(1,8,'double',1,0,2,105.00,0),(1,9,'double',0,0,0,105.00,0),(1,10,'double',0,0,0,105.00,0),(1,11,'double',0,0,0,105.00,0),(1,12,'double',0,0,0,105.00,0),(1,13,'double',0,0,0,105.00,0),(1,14,'double',1,0,4,105.00,0),(1,15,'double',1,0,4,105.00,0),(1,16,'double',1,0,4,105.00,0),(1,17,'double',1,0,2,105.00,0);
/*!40000 ALTER TABLE `hotel_rooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hotels` (
  `hotel_id` int NOT NULL,
  `hotel_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_num` int NOT NULL,
  `supervisor` int NOT NULL,
  `sales_per_month` int DEFAULT NULL,
  `expense_per_month` int DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`hotel_id`),
  KEY `supervisor` (`supervisor`),
  KEY `location_num` (`location_num`),
  CONSTRAINT `hotels_ibfk_1` FOREIGN KEY (`supervisor`) REFERENCES `employees` (`employee_id`),
  CONSTRAINT `hotels_ibfk_2` FOREIGN KEY (`location_num`) REFERENCES `locations` (`location_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotels`
--

LOCK TABLES `hotels` WRITE;
/*!40000 ALTER TABLE `hotels` DISABLE KEYS */;
INSERT INTO `hotels` VALUES (0,'Lofts at the Park',4,5,859400,235000,0),(1,'Cambridge Stays',5,4,803000,431500,0);
/*!40000 ALTER TABLE `hotels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_list`
--

DROP TABLE IF EXISTS `item_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `item_list` (
  `item_id` int NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `num_of_item` int DEFAULT NULL,
  PRIMARY KEY (`item_id`),
  UNIQUE KEY `item_name` (`item_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_list`
--

LOCK TABLES `item_list` WRITE;
/*!40000 ALTER TABLE `item_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `item_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `locations` (
  `location_id` int NOT NULL AUTO_INCREMENT,
  `location` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`location_id`),
  UNIQUE KEY `location` (`location`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (1,'Cakeland',0),(2,'Disneyland',0),(3,'Sugarland',0),(4,'Waferland',0),(5,'Lollipopland',0),(6,'Jellyland',0),(7,'Swampland',0);
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maintaince_tickets`
--

DROP TABLE IF EXISTS `maintaince_tickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `maintaince_tickets` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ride_id` int DEFAULT NULL,
  `date_opened` datetime DEFAULT NULL,
  `date_closed` datetime DEFAULT NULL,
  `ticket_discription` varchar(3000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost_of_repair` int DEFAULT NULL,
  `attraction_type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ticket_status` tinyint(1) DEFAULT NULL,
  `employee_to_notify` int DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `ride_id` (`ride_id`),
  CONSTRAINT `maintaince_tickets_ibfk_1` FOREIGN KEY (`ride_id`) REFERENCES `rides` (`ride_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maintaince_tickets`
--

LOCK TABLES `maintaince_tickets` WRITE;
/*!40000 ALTER TABLE `maintaince_tickets` DISABLE KEYS */;
INSERT INTO `maintaince_tickets` VALUES (1,5,'2022-04-19 00:00:00','2022-04-21 19:40:06','Need new chair',2000,'ride',1,2,0),(2,9,'2022-04-21 00:00:00','2022-04-21 00:00:00','The aliens disappeared, need replacement',400,'ride',1,1,0),(3,6,'2022-04-19 00:00:00','2022-04-21 19:40:06','Monthly maintenance',400,'ride',1,1,0),(4,11,'2022-04-23 00:00:00','2022-04-21 19:40:06','The fog machine makes weird noises',350,'ride',1,2,0),(6,17,'2022-04-19 00:00:00','2022-04-21 19:40:06','Frog #14 needs repaint\r\n',105,'event',1,2,1),(7,17,'2022-04-19 00:00:00','2022-04-21 19:40:06','Frog #14 needs repaint\r\n',105,'event',1,1,0),(8,8,'2022-04-19 00:00:00','2022-04-21 19:40:06','Speakers are not playing sound',750,'ride',1,2,0),(10,1,'2022-04-19 00:00:00','2022-04-21 19:40:06','Power loss',2200,'ride',1,1,0),(11,6,'2022-04-19 00:00:00','2022-04-21 19:40:06','Need wasp nest removed',200,'game',1,1,1),(12,14,'2022-04-19 00:00:00','2022-04-21 19:40:06','Need new lenses',5250,'game',1,2,1),(13,7,'2022-04-19 00:00:00','2022-04-21 21:12:46','Torn fabric on obstical 2',300,'ride',1,1,0),(14,5,'2022-04-19 00:00:00','2022-04-21 21:12:46','Worn beak pads',550,'ride',1,3,0),(15,7,'2022-04-19 00:00:00','2022-04-21 19:40:06','Motor out on obstical 4',800,'ride',1,4,0),(16,7,'2022-04-19 00:00:00','2022-04-21 21:12:46','Motor out on obstical 5',800,'ride',1,4,0),(17,6,'2022-04-21 00:00:00','2022-04-21 00:00:00','Flickering light at end of ride',20,'ride',0,3,0),(18,6,'2022-04-21 00:00:00','2022-04-21 00:00:00','Flickering light  middle  of ride',25,'ride',0,4,0);
/*!40000 ALTER TABLE `maintaince_tickets` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`team_6_member`@`%`*/ /*!50003 TRIGGER `maintenance_creation` AFTER INSERT ON `maintaince_tickets` FOR EACH ROW INSERT INTO Theme_Park_Database.Notifications SET
employee_to_notify = (SELECT employee_to_notify FROM maintaince_tickets WHERE id = LAST_INSERT_ID()),
table_to_check = "maintaince_tickets" */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`team_6_member`@`%`*/ /*!50003 TRIGGER `maintenance_datetime` BEFORE UPDATE ON `maintaince_tickets` FOR EACH ROW BEGIN
	IF (OLD.ticket_status = 0 AND NEW.ticket_status = 1) THEN
    		SET NEW.date_closed = NOW();
	END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`team_6_member`@`%`*/ /*!50003 TRIGGER `maintenance_update` AFTER UPDATE ON `maintaince_tickets` FOR EACH ROW BEGIN

INSERT INTO Theme_Park_Database.Notifications(employee_to_notify, table_to_check)

values (new.employee_to_notify, "maintaince_tickets");

end */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menus` (
  `menu_id` int NOT NULL,
  `where_id` int NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`menu_id`),
  KEY `where_id` (`where_id`),
  CONSTRAINT `menus_ibfk_1` FOREIGN KEY (`where_id`) REFERENCES `dining` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `park_events`
--

DROP TABLE IF EXISTS `park_events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `park_events` (
  `event_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_id` int NOT NULL AUTO_INCREMENT,
  `capacity` int NOT NULL,
  `event_coordinator` int NOT NULL,
  `is_cancelled` tinyint(1) DEFAULT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `location` int NOT NULL,
  `event_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`event_id`),
  KEY `event_coordinator` (`event_coordinator`),
  KEY `location` (`location`),
  CONSTRAINT `park_events_ibfk_1` FOREIGN KEY (`event_coordinator`) REFERENCES `employees` (`employee_id`),
  CONSTRAINT `park_events_ibfk_2` FOREIGN KEY (`location`) REFERENCES `locations` (`location_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `park_events`
--

LOCK TABLES `park_events` WRITE;
/*!40000 ALTER TABLE `park_events` DISABLE KEYS */;
INSERT INTO `park_events` VALUES ('Frog and Toad Read a Story','Storytime with Frog and Toad ',3,25,2,0,'10:00:00','10:30:00',0,7,'2022-04-10 10:00:00'),('Sarah\'s Birthday','Birthday Party for Sarah Blankinship',4,20,2,0,'14:00:00','18:00:00',0,4,'2022-04-25 12:11:23'),('Cinderella\'s Castle Lego Event','Build Cinderella\'s Castle with Legos! Open to ages 4 & up.',5,30,3,0,'13:00:00','16:00:00',0,2,'2022-04-20 12:11:23'),('Candy Land Parade','Join King Kandy, Princess Frostine, Lord Licorice and others for a Candy Land themed parade!',6,100,2,0,'16:00:00','18:00:00',0,3,'2022-05-10 12:11:23');
/*!40000 ALTER TABLE `park_events` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`team_6_member`@`%`*/ /*!50003 TRIGGER `event_creation` AFTER INSERT ON `park_events` FOR EACH ROW INSERT INTO Theme_Park_Database.Notifications SET
employee_to_notify = (SELECT event_coordinator from park_events WHERE event_id = LAST_INSERT_ID()),
table_to_check = "park_events" */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`team_6_member`@`%`*/ /*!50003 TRIGGER `event_update` AFTER UPDATE ON `park_events` FOR EACH ROW BEGIN

INSERT INTO Theme_Park_Database.Notifications(employee_to_notify, table_to_check)

values (new.event_coordinator, "park_events");

end */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `rainouts`
--

DROP TABLE IF EXISTS `rainouts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rainouts` (
  `date_of_rainout` date NOT NULL,
  `number_of_cancelled_events` int DEFAULT NULL,
  `number_of_closed_rides` int DEFAULT NULL,
  `revenue_earned` decimal(10,2) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`date_of_rainout`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rainouts`
--

LOCK TABLES `rainouts` WRITE;
/*!40000 ALTER TABLE `rainouts` DISABLE KEYS */;
INSERT INTO `rainouts` VALUES ('2022-03-15',3,2,1500.00,0),('2022-04-01',4,5,2300.00,0),('2022-04-02',2,4,2700.00,0),('2022-04-07',1,1,3500.00,0),('2022-04-16',4,1,3200.00,0),('2022-04-17',4,5,2000.00,0),('2022-04-20',1,1,5300.00,0);
/*!40000 ALTER TABLE `rainouts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reports`
--

DROP TABLE IF EXISTS `reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reports` (
  `report_id` int NOT NULL AUTO_INCREMENT,
  `total_customers` int DEFAULT NULL,
  `ride_maintaince` int DEFAULT NULL,
  `most_popular_ride` varchar(30) DEFAULT NULL,
  `total_ride` int DEFAULT NULL,
  `rainouts` int DEFAULT NULL,
  `report_date` date DEFAULT NULL,
  PRIMARY KEY (`report_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reports`
--

LOCK TABLES `reports` WRITE;
/*!40000 ALTER TABLE `reports` DISABLE KEYS */;
/*!40000 ALTER TABLE `reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ride_stats`
--

DROP TABLE IF EXISTS `ride_stats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ride_stats` (
  `ride_id` int DEFAULT NULL,
  `times_ran` int DEFAULT NULL,
  `ride_stats_id` int NOT NULL,
  `month_year` datetime DEFAULT NULL,
  PRIMARY KEY (`ride_stats_id`),
  KEY `ride_id` (`ride_id`),
  CONSTRAINT `ride_stats_ibfk_1` FOREIGN KEY (`ride_id`) REFERENCES `rides` (`ride_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ride_stats`
--

LOCK TABLES `ride_stats` WRITE;
/*!40000 ALTER TABLE `ride_stats` DISABLE KEYS */;
INSERT INTO `ride_stats` VALUES (1,10,1,'2022-04-04 00:00:00'),(5,11,5,'2022-04-04 00:00:00'),(6,12,6,'2022-04-04 00:00:00'),(7,12,7,'2022-04-04 00:00:00'),(8,12,8,'2022-04-04 00:00:00'),(9,12,9,'2022-04-04 00:00:00'),(10,15,10,'2022-04-04 00:00:00'),(12,12,11,'2022-04-04 00:00:00'),(12,12,12,'2022-04-04 00:00:00'),(13,20,13,'2022-04-04 00:00:00'),(14,20,14,'2022-04-04 00:00:00'),(15,9,15,'2022-04-04 00:00:00'),(17,11,17,'2022-04-04 00:00:00'),(18,12,18,'2022-04-04 00:00:00'),(19,21,19,'2022-04-04 00:00:00'),(26,25,26,'2022-04-04 00:00:00'),(29,25,29,'2022-04-04 00:00:00');
/*!40000 ALTER TABLE `ride_stats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rides`
--

DROP TABLE IF EXISTS `rides`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rides` (
  `ride_id` int NOT NULL AUTO_INCREMENT,
  `ride_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ride_description` varchar(3000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `times_broken_down` int DEFAULT NULL,
  `number_of_riders` int DEFAULT NULL,
  `min_height_inches` int DEFAULT NULL,
  `currently_in_operation` tinyint(1) DEFAULT NULL,
  `date_first_opened` datetime NOT NULL,
  `ride_capacity` int DEFAULT NULL,
  `ride_speed` int DEFAULT NULL,
  `ride_duration` int DEFAULT NULL,
  `distance_travelled` int DEFAULT NULL,
  `operation_hours` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operator_employee_id` int DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `time_ran_this_month` int DEFAULT NULL,
  `ride_stats_id` int DEFAULT NULL,
  PRIMARY KEY (`ride_id`),
  UNIQUE KEY `ride_name` (`ride_name`),
  KEY `ride_stats_id` (`ride_stats_id`),
  CONSTRAINT `rides_ibfk_1` FOREIGN KEY (`ride_stats_id`) REFERENCES `ride_stats` (`ride_stats_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rides`
--

LOCK TABLES `rides` WRITE;
/*!40000 ALTER TABLE `rides` DISABLE KEYS */;
INSERT INTO `rides` VALUES (1,'Carrot Carousel','A carrot themed ride - delicious!',1,5,45,1,'2022-04-05 00:00:00',10,50,5,10,'10:00 am - 10:00 pm','Cakeland',5,0,NULL,1),(5,'Medusa','The ride is the longest coaster in Northern California at 3,937 feet (1,200 m) long and is notable as having one of the largest vertical loops in the world at',5,32,60,1,'2022-04-06 00:34:09',50,200,12,2550,'11:00 am - 8:00 pm','Disneyland',3,0,NULL,5),(6,'Zipper','Fight religious race establish. Imagine movie them modern think stock recently into. Describe town might husband face. Fall but issue fire food girl. Dark husband writer serve.',1,74,40,1,'2022-04-06 00:59:21',93,6,11,531,'9 am - 7 pm','Sugarland',2,0,NULL,6),(7,'Wipeout','Assume oil effort little kid ever of. Wrong artist police television something administration teacher. Throw above finish effort food another similar whole.',2,210,54,1,'2022-04-06 01:00:05',60,8,11,1283,'9:00 am - 9:00 pm','Waferland',1,0,NULL,7),(8,'Waltzer','Ago street pretty check. Grow among thing son wish later discuss deep. Indicate page professor other then pick from.',2,67,56,0,'2022-04-06 01:00:12',72,1,7,4039,'8 am - 5 pm','Waferland',4,0,NULL,8),(9,'UFO','Issue task can specific popular to benefit. Management affect factor small why my show. How suffer everybody call year eat if.',2,74,47,1,'2022-04-06 01:00:17',71,4,8,1145,'11 am - 8 pm','Sugarland',4,0,NULL,9),(10,'UltraMax','Two soon really of scene. Follow skill green song media us side.',1,35,46,0,'2022-04-06 01:00:24',99,4,13,3827,'8 am - 9 pm','Lollipopland',4,0,NULL,10),(11,'Twist','Listen something she dark notice either see them. Myself rock only majority run. Act race claim. High difference the like prove consumer.',3,50,55,1,'2022-04-06 01:01:03',105,5,12,2867,'9 am - 9 pm','Jellyland',3,0,NULL,11),(12,'Turbo Drop','Tough no finally international study. Work rather election result at left.',6,37,51,1,'2022-04-06 01:02:27',117,4,8,5130,'10 am - 5 pm','Waferland',2,0,NULL,12),(13,'Topple Tower','Despite above minute pull. Face already push bring require fund. Your season own nearly car above public. Establish discover fight while any.',7,60,46,1,'2022-04-06 01:02:50',75,1,9,3408,'11:00 am - 6:00 pm','Jellyland',2,0,NULL,13),(14,'Top Scan','Management include high camera. Second improve history employee administration over meeting. Evening where myself billion. Threat join oil company test.',6,77,50,0,'2022-04-06 01:03:04',88,5,5,4669,'11 am - 9 pm','Jellyland',1,0,NULL,14),(15,'Teacups','Every name not main people across. Direction indeed follow international serve knowledge start. Collection issue someone happen baby. Relate as only sound continue figure.',6,69,60,0,'2022-04-06 01:03:57',94,8,15,3874,'10 am - 7 pm','Waferland',2,0,NULL,15),(17,'Frog Coaster','Join Frog and Toad as they go hiking at the swamp. Don\'t forget your fishing hook!',0,106,0,1,'2022-04-07 00:00:00',15,10,3,1,'10:00 am - 5:00 pm','Swampland',1,0,NULL,17),(18,'Teacup Whirl','Join the Mad Hatter and the March Hare for teatime! Don\'t accidentally bite your teacup!',0,130,0,1,'2022-04-07 00:00:00',15,5,3,0,'10:00 am - 5:00 pm','Cakeland',2,0,NULL,18),(19,'Slippery Slopes','Travel through the Wafer Mountains at an exhilarating speed!',0,10,50,0,'2022-04-07 00:00:00',10,100,10,17,'10:00 am - 8:00 pm','Waferland',1,0,NULL,19),(26,'Kit Kat Carousel','Enjoy our cat and candy themed carousel. Grab a free Kit Kat on your way out!',0,100,40,1,'2022-04-12 00:00:00',10,1,5,0,'9:00 am - 8:30 pm','Cakeland',2,0,NULL,26),(29,'Spirited Away','You die when you ride',0,132,5,1,'2022-04-17 00:00:00',21,1564,1,1564,'8:00 am - 8:00 pm','Waferland',NULL,0,NULL,29);
/*!40000 ALTER TABLE `rides` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tickets` (
  `pass_id` int NOT NULL AUTO_INCREMENT,
  `type_of_pass` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `season_or_day` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `source_of_pass` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost_of_pass` decimal(6,2) NOT NULL,
  `valid_from` datetime NOT NULL,
  `valid_until` datetime NOT NULL,
  `pass_description` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_in` tinyint(1) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `date_check_in` datetime DEFAULT NULL,
  PRIMARY KEY (`pass_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tickets`
--

LOCK TABLES `tickets` WRITE;
/*!40000 ALTER TABLE `tickets` DISABLE KEYS */;
INSERT INTO `tickets` VALUES (1,'','day','',0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,1,0,'2022-04-04 00:00:00'),(2,'','day','',0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,1,0,'2022-04-04 00:00:00'),(3,'','day','',0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,1,0,'2022-04-04 00:00:00'),(4,'','day','',0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,1,0,'2022-04-04 00:00:00'),(5,'','day','',0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,1,0,'2022-04-04 00:00:00'),(6,'','day','',0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,1,0,'2022-04-04 00:00:00'),(7,'','day','',0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,1,0,'2022-04-04 00:00:00'),(8,'','day','',0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,1,0,'2022-04-04 00:00:00'),(9,'','day','',0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,1,0,'2022-04-04 00:00:00'),(10,'','day','',0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,1,0,'2022-03-27 00:00:00'),(11,'','day','',0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,1,0,'2022-03-27 00:00:00'),(12,'','day','',0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,1,0,'2022-03-27 00:00:00'),(13,'','day','',0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,1,0,'2022-03-27 00:00:00');
/*!40000 ALTER TABLE `tickets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_login`
--

DROP TABLE IF EXISTS `user_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) DEFAULT 'user',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_login`
--

LOCK TABLES `user_login` WRITE;
/*!40000 ALTER TABLE `user_login` DISABLE KEYS */;
INSERT INTO `user_login` VALUES (1,'admin','1234567','admin','2022-04-13 20:37:24',0),(2,'employee','1234567','user','2022-04-13 20:37:56',0),(3,'sid','$2y$10$aSz69CDwu/6pQmJ2vcuZJ.WG8i4uo52ojGSGgM4WfLV66Cq/.7Ez6','admin','2022-04-18 20:35:39',0),(4,'user123','$2y$10$id8/BpLZzD4jZoSzSlxdbufy/SB2cUC4cjOGiTFbyXZ5bm.B9WHly','user','2022-04-13 22:07:09',0),(5,'admin1','$2y$10$67i4f2jj9jghNTPZoqJCJ.UA6cREa8YbGWDdkEiG.u6dKh6qnuRWC','admin','2022-04-18 20:37:00',0);
/*!40000 ALTER TABLE `user_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'Theme_Park_Database'
--

--
-- Dumping routines for database 'Theme_Park_Database'
--
SET @@SESSION.SQL_LOG_BIN = @MYSQLDUMP_TEMP_LOG_BIN;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-21 17:46:26
