-- MySQL dump 10.13  Distrib 5.5.54, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: takumi
-- ------------------------------------------------------
-- Server version	5.5.54-0ubuntu0.14.04.1

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
-- Table structure for table `Education`
--

DROP TABLE IF EXISTS `Education`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Education` (
  `Category` varchar(255) DEFAULT NULL,
  `School_Name` varchar(50) DEFAULT NULL,
  `Address` varchar(80) DEFAULT NULL,
  `Year_Graduated` varchar(255) DEFAULT NULL,
  `ProfileID` int(11) DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`),
  KEY `ProfileID` (`ProfileID`),
  CONSTRAINT `Education_ibfk_1` FOREIGN KEY (`ProfileID`) REFERENCES `profile` (`ProfileID`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Education`
--

LOCK TABLES `Education` WRITE;
/*!40000 ALTER TABLE `Education` DISABLE KEYS */;
INSERT INTO `Education` VALUES ('Elementary','Cabancalan National High School','Cabancalan, Mandaue City','0',20,7),('High School','CITE Technical Institue','San Jose, Cebu City','0',20,8),('College','','','0',20,9),('High School','Manila Science High School','Taft Ave, Ermita, Manila, Metro Manila','1989/03',80,32),('College','University of Santo Tomas','EspaÃ±a Street, Sampaloc Manila','1993/03',80,33),('High School','æ˜Ÿç¨œé«˜ç­‰å­¦æ ¡','çŸ³å·çœŒé‡‘æ²¢å¸‚å°å‚ç”ºå—ï¼’ï¼ï¼–','2003/03',76,34),('College','é‡‘æ²¢å¤§å­¦','çŸ³å·çœŒé‡‘æ²¢å¸‚è§’é–“ç”º','2007/03',76,35),('High School','æ±æ´‹é«˜ç­‰å­¦æ ¡','æ±äº¬éƒ½åƒä»£ç”°åŒºä¸‰å´Žç”ºï¼‘ï¼ï¼”ï¼ï¼‘ï¼–','2006/03',77,36),('College','æ—©ç¨²ç”°å¤§å­¦','æ±äº¬éƒ½æ–°å®¿åŒºæˆ¸å¡šç”ºï¼‘ä¸ç›®ï¼‘ï¼ï¼”','2012/03',77,37),('High School','Oita HIgh School','Yonozu Kora, Saiki-shi, Oita','2010-03',78,38),('College','University of Tokyo','7-3-1 Hongo, Bunkyo-ku, Tokyo','2014-03',78,39),('High School','Cebu City National Science High School','Salvador Street, Labangon, Cebu City','2008/03',79,40),('College','University of the Philippines Diliman','Diliman Quezon City','2012/03',79,41),('High School','Apas National High School','Omega St, Apas, Cebu City, 6000 Cebu','1993-03',81,42),('College','University of San Carlos','P. del Rosario Street Cebu City','1997-03',81,43),('High School','Kanazawa Nishi High School','Uneda Higashi, Kanazawa, Ishikawa','2003-03',191,44),('College','Nagoya Designer Gakuin','5-1-3 Sakae, Nagoya, Aichi','2005-03',191,45);
/*!40000 ALTER TABLE `Education` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hobbies`
--

DROP TABLE IF EXISTS `hobbies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hobbies` (
  `Hobbies` varchar(90) DEFAULT NULL,
  `ProfileID` int(11) DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`),
  KEY `ProfileID` (`ProfileID`),
  CONSTRAINT `hobbies_ibfk_1` FOREIGN KEY (`ProfileID`) REFERENCES `profile` (`ProfileID`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hobbies`
--

LOCK TABLES `hobbies` WRITE;
/*!40000 ALTER TABLE `hobbies` DISABLE KEYS */;
INSERT INTO `hobbies` VALUES ('Photography',20,7),('Collecting Toy Cars',20,8),('Playing Music',20,9),('Dance',80,43),('Mobile Game',80,44),('Baseball',80,45),('éŸ³æ¥½é‘‘è³ž',76,46),('ãƒ†ãƒ‹ã‚¹',76,47),('æ•£æ­©',76,48),('æ˜ ç”»é‘‘è³ž',77,49),('æ–™ç†',77,50),('æµ·å¤–æ—…è¡Œ',77,51),('Soccer',78,52),('Traveling',78,53),('Hiking',78,54),('Bascketball',79,55),('Eating',79,56),('Stamp Collecting',79,57),('Cooking',81,58),('Badminton',81,59),('Listening to music',81,60),('Listening to music',191,61),('Traveling',191,62),('Photography ',191,63);
/*!40000 ALTER TABLE `hobbies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personalinfo`
--

DROP TABLE IF EXISTS `personalinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personalinfo` (
  `Selfintroduction` text,
  `Life_Goal` text,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ProfileID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ProfileID` (`ProfileID`),
  CONSTRAINT `personalinfo_ibfk_1` FOREIGN KEY (`ProfileID`) REFERENCES `profile` (`ProfileID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personalinfo`
--

LOCK TABLES `personalinfo` WRITE;
/*!40000 ALTER TABLE `personalinfo` DISABLE KEYS */;
INSERT INTO `personalinfo` VALUES ('I\'m a very strict yet very flexible person. I love things about technologies, computers, airplanes. Recently I am very much interested with Artificial Intelligence and Augmented Reality. I always read and study about things that I like.','I want to be a Pokemon Master',3,20),('I am a dedicated person with a family of four. I enjoy reading, and the knowledge and perspective that my reading gives me has strengthened my teaching skills and presentation abilities. I have been successful at raising a family, and I attribute this success to my ability to plan, schedule, and handle many different tasks at once. This flexibility will help me in the classroom, where there are many different personalities and learning styles.','I will visit Machu Pichu ,Great wall of China and Yakushima.',15,80),('ç§ã¯ã‚ˆãè©±ã—ã‹ã‘ã‚„ã™ã„ã¨äººã‹ã‚‰è¨€ã‚ã‚Œã¾ã™ã€‚å­ä¾›ã®æ™‚ã¯ä»Šã¨ã¯çœŸé€†ã§äººè¦‹çŸ¥ã‚ŠãŒæ¿€ã—ãæ–°ã—ã„äººã¨ä¼šã†ã®ãŒå„„åŠ«ã§ã—ãŸã€‚å­¦ç”Ÿæ™‚ä»£ã¯æ–°å­¦æœŸã®ã‚¯ãƒ©ã‚¹æ›¿ãˆã®åº¦ã«ãªã‹ãªã‹å‹é”ã‚‚ã§ããªã‹ã£ãŸã®ã§ãã®é ƒã¯å‘¨ã‚Šã«å¤§äººã—ã„ã€æš—ã„ã¨ã„ã†å°è±¡ã‚’ä¸Žãˆã¦ã„ãŸã¨æ€ã„ã¾ã™ã€‚ã—ã‹ã—å¤§å­¦ã«å…¥ã£ãŸæ™‚1äººã®å‹äººã¨å‡ºä¼šã£ã¦ç§ã¯å¤‰ã‚ã‚Šã¾ã—ãŸã€‚å½¼å¥³ã¯ã¨ã¦ã‚‚æ˜Žã‚‹ãå…ƒæ°—ã§å‘¨ã‚Šã‚‚æ˜Žã‚‹ãã—ã¦ãã‚Œã¾ã™ã€‚å½“æ™‚ã®ç§ã«ã¯å°‘ã—ã†ã‚‹ã•ã„ãªã¨ã„ã†å°è±¡ãŒã‚ã‚Šè‹¦æ‰‹ã ã£ãŸã®ã§ã™ãŒå½¼å¥³ã¨ãšã£ã¨ä¸€ç·’ã«å±…ãŸã‚‰æ®µã€…ã¨æ„ŸåŒ–ã•ã‚Œã„ã¤ã®é–“ã«ã‹è‡ªåˆ†ã‚‚å½¼å¥³ã¨åŒã˜ã‚ˆã†ã«æ˜Žã‚‹ã„æ€§æ ¼ã«ãªã£ã¦ã„ã¾ã—ãŸã€‚æ˜”ã¯æ±ºã—ã¦ãªã‹ã£ãŸã®ã«ä»Šã§ã¯é“ç«¯ã§è¦‹çŸ¥ã‚‰ã¬äººã«é“ã‚’èžã‹ã‚ŒãŸã‚Šã™ã‚‹ã“ã¨ã‚‚å¢—ãˆã¾ã—ãŸã€‚é«˜æ ¡ã®æ™‚ã®å‹äººã¯ä»Šã®ç§ã‚’è¦‹ã¦ã€Œå¤‰ã‚ã£ãŸã­ï¼ã€ã¨è¨€ã†ã»ã©ã§ã™ã€‚å½¼å¥³ã¨å‡ºä¼šã£ã¦ãªã‘ã‚Œã°ç§ã®äººç”Ÿæš—ã„ã¾ã¾ã§ã—ãŸã€‚äººã¨ã®å‡ºä¼šã„ã¯äººç”Ÿã‚’å¤‰ãˆã‚‹ã»ã©å¤§åˆ‡ãªäº‹ã ã¨ã„ã†ã“ã¨ã‚’å­¦ã³ã¾ã—ãŸã€‚ã“ã‚Œã‹ã‚‰ã‚‚äººã¨ã®å‡ºä¼šã„ã‚’å¤§åˆ‡ã«ã—ãªãŒã‚‰ä»•äº‹ã«åŠ±ã‚“ã§ã„ããŸã„ã¨æ€ã£ã¦ã„ã¾ã™ã€‚','äººææ´¾é£ä¼šç¤¾ã‚’çµŒå–¶ã—ã¦ã€æ—¥æœ¬ã®é›‡ç”¨ã‚’æ‹¡å¤§ã™ã‚‹ã“ã¨ã§ã™ã€‚',16,76),('ç§ãŒèª°ã«ã‚‚è² ã‘ãªã„ã¨è‡ªè² ã§ãã‚‹ã®ãŒã€ä»•äº‹ã‚’ã‚„ã‚ŠæŠœãåŠ›ã§ã™ã€‚å‰è·ã§ã¯ã€é«˜ç´šã‚¹ãƒ†ãƒ¼ã‚­ãƒ¬ã‚¹ãƒˆãƒ©ãƒ³ã§ãƒ›ãƒ¼ãƒ«ã¨ã—ã¦åƒã„ã¦ã„ã¾ã—ãŸã€‚é«˜ç´šã¨è¨€ã†ãŸã‚ã«ã¯ã€æ–™ç†ã®è³ªã ã‘ã§ãªãã€ãŠå®¢æ§˜ã¨ç›´æŽ¥æŽ¥ã™ã‚‹å¾“æ¥­å“¡ãŒè³ªã®é«˜ã„ã‚µãƒ¼ãƒ“ã‚¹ã‚’ã™ã‚‹å¿…è¦ãŒã‚ã‚‹ã¨è€ƒãˆã¾ã—ãŸã€‚ãŠå®¢æ§˜ã®æ³¨æ–‡ã‚’ã¨ã‚Šã€æ–™ç†ã‚’é‹ã¹ã¯çµ‚ã‚ã‚Šã¨ã„ã†ã ã‘ã§ãªãã€å¸¸ã«ãŠå®¢æ§˜ã®æ§˜å­ã‚’æ°—ã«ã‹ã‘ã€è‡ªåˆ†ã®æ‹…å½“ã—ãŸãŠå®¢æ§˜ãŒãŠåº—ã‹ã‚‰å¸°ã‚‰ã‚Œã‚‹ã¾ã§ã€ç§ã®ä»•äº‹ã¯çµ‚ã‚ã‚‰ãªã„ã¨è€ƒãˆã¾ã™ã€‚æœ¬å½“ã®æ„å‘³ã§ã®ç§ã®ä»•äº‹ã§ã‚ã‚‹ã€ãŠå®¢æ§˜ã‚’æ¥½ã—ã¾ã›ã‚‹ã“ã¨ãŒã§ãã‚‹ã‚ˆã†ã€æ–™ç†ã‚„é£²ã¿ç‰©ã®çŸ¥è­˜ãªã©ã‚’èº«ã«ã¤ã‘ã¾ã—ãŸã€‚å¾¡ç¤¾ã§ã¯åƒãã“ã¨ã®è²¬ä»»ã‚’æŒã¡ã€ç¤¾å“¡ã®ä¸€å“¡ã¨ã—ã¦è‡ªåˆ†ã®ä»•äº‹ã‚’ã—ã£ã‹ã‚Šã¨æˆã—é‚ã’ã‚‹ã“ã¨ãŒã§ãã‚‹ã‚ˆã†ã€å…¨åŠ›ã‚’å°½ãã•ã›ã¦ã„ãŸã ãã¾ã™ã€‚ã¾ãŸã€ä¸­é€”åŠç«¯ãªæ°—æŒã¡ã§ä»•äº‹ã‚’å®Œæˆã•ã›ã‚‹ã®ã§ã¯ãªãã€å¸¸ã«å‘ä¸Šã§ãã‚‹ã“ã¨ã¯ãªã„ã‹ã¨è‡ªå•ã™ã‚‹ã“ã¨ã§ã€æœ¬å½“ã®æ„å‘³ã§ã®è‡ªåˆ†ã®ä»•äº‹ã‚’ã‚„ã‚ŠæŠœãã¾ã™ã€‚','å¹¸ã›ãªå®¶åº­ã‚’ç¯‰ããŸã„ï¼ãã—ã¦ã€å°†æ¥ã¯ãƒãƒªå³¶ã§æš®ã‚‰ã—ãŸã„ã€‚',17,77),('My name is Kaita and I am from Chennai. I am currently studying Finance and Economics at Hong Kong University. I was raised in Bengalu and when I was 18 I moved to Hong Kong to take my university study. Last year I went to London to join the school\'s exchange program. During my exchange I went backpacking with other backpackers from all over the world to other countries across Europe. It was a fun experience. I think I have been fortunate enough to be able to live in different parts of the world and thus be able to broaden my horizon.','I want to become a certified scuba diver.',18,78),('I am Jiko Miguel, Basically I am from Bihar.I belongs to Vaishali District.I am belongs to a family where discipline does matter.My father is in police department and my mother is housewife. I have 2 brother and 2 sister.','I want to sell one billion books by the year 2020.',19,79),('People find me to be an upbeat, self-motivated team player with excellent communication skills. For the past several years I have worked in lead qualification, telemarketing, and customer service in the technology industry. My experience includes successfully calling people in director-level positions of technology departments and developing viable leads. I have a track record of maintaining a consistent call and activity volume and consistently achieving the top 10 percent in sales, and I can do the same thing for your company.','I want to take one of my sons to the Olympics.',20,81),('I am an ambitious person. I set a main goal and make steps to achieve it. I am hungry for ways to improve myself to grow. I love living in a tropical country because I am sensitive to cold. I found delicious fruits in Cebu especially, indian mango and lanzones. In my free time, I usually go to a coffee shop to relax myself. I liked playing with my niece when I was in Japan. She is naughty as a boy.','I want to travel all over the world.',21,191);
/*!40000 ALTER TABLE `personalinfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile` (
  `ProfileID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) DEFAULT NULL,
  `Address_in_Cebu` varchar(165) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `Email_Address` varchar(30) DEFAULT NULL,
  `Mobile_Number` varchar(13) DEFAULT NULL,
  `Favorite_Food` varchar(60) DEFAULT NULL,
  `Favorite_Color` varchar(60) DEFAULT NULL,
  `Favorite_Place` varchar(60) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `background` varchar(255) DEFAULT NULL,
  `background_mid` varchar(255) DEFAULT NULL,
  `background_right` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ProfileID`)
) ENGINE=InnoDB AUTO_INCREMENT=193 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile`
--

LOCK TABLES `profile` WRITE;
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
INSERT INTO `profile` VALUES (20,'Ryan Dupay','Banilad Mandaue City','1989-02-13','ryandupay@gmail.com','9287413411','Yakitori','Blue Green','Tokyo, Japan','uploads/Ryan Dupay (2).jpg','uploads/18809403_429628047418169_2289837362613583872_n.jpg','uploads/16789160_1672979716334894_8358383550633869312_n.jpg','uploads/15538432_582666895277421_7958841387540021248_n.jpg'),(76,'æœ¨æ‘ã€€ç¥ä¸€','çŸ³å·çœŒé‡‘æ²¢å¸‚æ¾æ‘1-2','1984-07-12','yuichi1989@gmail.com','81346877085','ã‚«ãƒ¬ãƒ¼','ã‚°ãƒªãƒ¼ãƒ³','å…¼å…­åœ’','uploads/kimu.jpg','uploads/spain.jpg','uploads/spain4.jpg','uploads/spain3.jpg'),(77,'å®‰é”ã€€çŽ²å¥ˆ','æ±äº¬éƒ½åƒä»£ç”°åŒºä¸¸ã®å†…1-9-1','1987-03-03','tomotomo33@yahoo.co.jp','09032784627','ã‚¢ã‚¤ã‚¹','ã‚ªãƒ¬ãƒ³ã‚¸','æ±äº¬ã‚¹ã‚«ã‚¤ãƒ„ãƒªãƒ¼','uploads/girl.jpg','uploads/cat1.jpg','uploads/cat2.jpg','uploads/cat3.jpg'),(78,'Keita Minami','Motomachi, Biei-cho Kamikawa-gun, Hokkaido','1993-06-24','hokkaido_love@gmail.com','81260257338','Ramen','Light Blue','New York','uploads/keita.jpg','uploads/soccer2.gif','uploads/soccer.jpg','uploads/soccer3.png'),(79,'Jiko Miguel','F. Cabahug St., Mabolo, Cebu','1990-08-15','jiko12chan@yahoo.com','09943766743','Fried chicken ','Black','Oslob','uploads/animal.jpg','uploads/animal2.jpg','uploads/animal3.jpg','uploads/animal4.jpg'),(80,'Abenn Sala','Santiago Street corner B. Valdez, Makati City, Manila','1970-01-25','superstar@gmail.com','09967398811','Piaya','Purple','Boracay','uploads/holga.jpg','uploads/holga2.jpg','uploads/holga4.jpg','uploads/holga6.jpg'),(81,'Apple Joy Delgado Lumogdang','Banilad Cebu City','1974-07-07','msjoyisme@yahoo.com','639976542487','Mango','Pink','Ayala mall','uploads/japan.jpg','uploads/japan2.jpg','uploads/japan3.jpg','uploads/japan4.jpg'),(89,'ã‚','sansiani','1984-04-04','mukku_04@yahoo.co.jp','840234002',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(91,'12345','Los angeles, California','1988-08-08','John@gmail.com','09943766721',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(93,'YYYY','Santiago Street corner B. Valdez and Singian Streets, Makati City, Manila, Japan','1984-04-02','niyvyh@gmail.com','21873571357',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(94,'Apple Joy Debbbbbu','Santiago Street corner B. Valdez and Singian Streets, Makati City, Manila, Japan','1999-02-04','hok_love@gmail.com','31298368291',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(95,'BUbiuub','ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã','2017-08-07','kkkm@yahoo.co.jp','361294698',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(96,'nonnoini','nonoiini','2018-07-01','nodneinin@gmail.com','32149641842',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(97,'Sarane','Banilad Cebu City','2018-07-01','sarane@gmail.com','09976547823',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(98,'Nnondfd','Kanazawa','2017-08-08','yuichi1989iebfbebfef@gmail.com','7626609077',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(99,'nbdnvnsdonvo','Kansacdoods','1984-03-26','yuichi1989gfiebfbebf@gmail.com','362916498',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(101,'A','Kanazawa, Japan','1985-01-01','muku777@yahoo.co.jp','09932938846',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(102,'Ryan Dupay 1','Banilad Mandaue City 1','1985-01-01','ryan_dupay@1.com','1234567890',NULL,NULL,NULL,'uploads/01_Request-002.png','uploads/Intro.jpg','uploads/birds_nature_forest-18196.jpg','uploads/deer_minimalism_vector_background_nature_93845_1920x1080.jpg'),(103,'Ryan Dupay 100','Banilad Mandaue City 1','1985-01-01','ryan_dupay@2.com','12354334563',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(104,'Ryan Dupay 2','Banilad Mandaue City','1985-01-01','ryan2@ryan.com','09123456782',NULL,NULL,NULL,'uploads/01_Request-003.png','uploads/triangle_minimalism_lightning_veins_94394_1920x1080.jpg','uploads/scene4.jpg','uploads/minimalism_aircraft_flight_74406_1920x1080.jpg'),(105,'Ryan Dupay 3','Banilad Mandaue City','1985-01-01','ryan3@ryan.com','09123456783',NULL,NULL,NULL,'uploads/01_Bug-008.png','uploads/Scene3.jpg','uploads/67152030-fast-wallpapers.jpg','uploads/photographer_minimalism_photo_74519_1920x1080.jpg'),(106,'Ryan Dupay 4','Banilad Mandaue City','1985-01-01','ryan4@ryan.com','09123456784',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(107,'Ryan Dupay 5','Banilad Mandaue City','1985-01-01','ryan5@ryan.com','09123456785',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(108,'Ryan Dupay 6','Banilad Mandaue City','1985-01-01','ryan6@ryan.com','09123456786',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(109,'Ryan Dupay 7','Banilad Mandaue City','1985-01-07','ryan7@ryan.com','09123456787',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(110,'Ryan Dupay 8','Banilad Mandaue City','1985-01-08','ryan8@ryan.com','09123456788',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(111,'Ryan Dupay 9','Banilad Mandaue City','1985-01-09','ryan9@ryan.com','09123456789',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(112,'Ryan Dupay 10','Banilad Mandaue City','1985-01-10','ryan10@ryan.com','09123456710',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(113,'Ryan Dupay 11','Banilad Mandaue City','1985-01-11','ryan11@ryan.com','09123456711',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(114,'Ryan Dupay 12','Banilad Mandaue City','1985-01-12','ryan12@ryan.com','09123456712',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(115,'Ryan Dupay 13','Banilad Mandaue City','1985-01-13','ryan13@ryan.com','09123456713',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(116,'Ryan Dupay 14','Banilad Mandaue City','1985-01-14','ryan14@ryan.com','09123456714',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(117,'Ryan Dupay 15','Banilad Mandaue City','1985-01-15','ryan15@ryan.com','09123456715',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(118,'Ryan Dupay 16','Banilad Mandaue City','1985-01-16','ryan16@ryan.com','09123456716',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(119,'Ryan Dupay 17','Banilad Mandaue City','1985-01-17','ryan17@ryan.com','09123456717',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(120,'Ryan Dupay 18','Banilad Mandaue City','1985-01-18','ryan18@ryan.com','09123456718',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(121,'Ryan Dupay 19','Banilad Mandaue City','1985-01-19','ryan19@ryan.com','09123456719',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(122,'Ryan Dupay 20','Banilad Mandaue City','1985-01-20','ryan20@ryan.com','09123456720',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(123,'Ryan Dupay 21','Banilad Mandaue City','1985-01-21','ryan21@ryan.com','09123456721',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(124,'Ryan Dupay 22','Banilad Mandaue City','1985-01-22','ryan22@ryan.com','09123456722',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(125,'Ryan Dupay 23','Banilad Mandaue City','1985-01-23','ryan23@ryan.com','09123456723',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(126,'Ryan Dupay 24','Banilad Mandaue City','1985-01-24','ryan24@ryan.com','09123456724',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(127,'Ryan Dupay 25','Banilad Mandaue City','1985-01-25','ryan25@ryan.com','09123456725',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(128,'Ryan Dupay 26','Banilad Mandaue City','1985-01-26','ryan26@ryan.com','09123456726',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(129,'Ryan Dupay 27','Banilad Mandaue City','1985-01-27','ryan27@ryan.com','09123456727',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(130,'Ryan Dupay 28','Banilad Mandaue City','1985-01-28','ryan28@ryan.com','09123456728',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(131,'Ryan Dupay 29','Banilad Mandaue City','1985-01-29','ryan29@ryan.com','09123456729',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(132,'Ryan Dupay 30','Banilad Mandaue City','1985-01-30','ryan30@ryan.com','09123456730',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(133,'Ryan Dupay 31','Banilad Mandaue City','1985-01-31','ryan31@ryan.com','09123456731',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(134,'Ryan Dupay 32','Banilad Mandaue City','1985-01-01','ryan32@ryan.com','09123456732',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(135,'Ryan Dupay 33','Banilad Mandaue City','1985-01-02','ryan33@ryan.com','09123456733',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(136,'Ryan Dupay 34','Banilad Mandaue City','1985-01-03','ryan34@ryan.com','09123456734',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(137,'Ryan Dupay 35','Banilad Mandaue City','1985-01-04','ryan35@ryan.com','09123456735',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(138,'Ryan Dupay 36','Banilad Mandaue City','1985-01-05','ryan36@ryan.com','09123456736',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(139,'Ryan Dupay 37','Banilad Mandaue City','1985-01-06','ryan37@ryan.com','09123456737',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(140,'Ryan Dupay 38','Banilad Mandaue City','1985-01-07','ryan38@ryan.com','09123456738',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(141,'Ryan Dupay 39','Banilad Mandaue City','1985-01-08','ryan39@ryan.com','09123456739',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(142,'Ryan Dupay 40','Banilad Mandaue City','1985-01-09','ryan40@ryan.com','09123456740',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(143,'Ryan Dupay 41','Banilad Mandaue City','1985-01-10','ryan41@ryan.com','09123456741',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(144,'Ryan Dupay 42','Banilad Mandaue City','1985-01-11','ryan42@ryan.com','09123456742',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(145,'Ryan Dupay 43','Banilad Mandaue City','1985-01-12','ryan43@ryan.com','09123456743',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(146,'Ryan Dupay 44','Banilad Mandaue City','1985-01-13','ryan44@ryan.com','09123456744',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(147,'Ryan Dupay 45','Banilad Mandaue City','1985-01-14','ryan45@ryan.com','09123456745',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(148,'Ryan Dupay 46','Banilad Mandaue City','1985-01-15','ryan46@ryan.com','09123456746',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(149,'Ryan Dupay 47','Banilad Mandaue City','1985-01-16','ryan47@ryan.com','09123456747',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(150,'Ryan Dupay 48','Banilad Mandaue City','1985-01-17','ryan48@ryan.com','09123456748',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(151,'Ryan Dupay 49','Banilad Mandaue City','1985-01-18','ryan49@ryan.com','09123456749',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(152,'Ryan Dupay 50','Banilad Mandaue City','1985-01-19','ryan50@ryan.com','09123456750',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(153,'Ryan Dupay 51','Banilad Mandaue City','1985-01-20','ryan51@ryan.com','09123456751',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(154,'Ryan Dupay 52','Banilad Mandaue City','1985-01-21','ryan52@ryan.com','09123456752',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(155,'Ryan Dupay 53','Banilad Mandaue City','1985-01-22','ryan53@ryan.com','09123456753',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(156,'Ryan Dupay 54','Banilad Mandaue City','1985-01-23','ryan54@ryan.com','09123456754',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(157,'Ryan Dupay 55','Banilad Mandaue City','1985-01-24','ryan55@ryan.com','09123456755',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(158,'Ryan Dupay 56','Banilad Mandaue City','1985-01-25','ryan56@ryan.com','09123456756',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(159,'Ryan Dupay 57','Banilad Mandaue City','1985-01-26','ryan57@ryan.com','09123456757',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(160,'Ryan Dupay 58','Banilad Mandaue City','1985-01-27','ryan58@ryan.com','09123456758',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(161,'Ryan Dupay 59','Banilad Mandaue City','1985-01-28','ryan59@ryan.com','09123456759',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(162,'Ryan Dupay 60','Banilad Mandaue City','1985-01-29','ryan60@ryan.com','09123456760',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(163,'Ryan Dupay 61','Banilad Mandaue City','1985-01-30','ryan61@ryan.com','09123456761',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(164,'Ryan Dupay 62','Banilad Mandaue City','1985-01-31','ryan62@ryan.com','09123456762',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(165,'Ryan Dupay 63','Banilad Mandaue City','1985-01-01','ryan63@ryan.com','09123456763',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(166,'Ryan Dupay 64','Banilad Mandaue City','1985-01-02','ryan64@ryan.com','09123456764',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(167,'Ryan Dupay 65','Banilad Mandaue City','1985-01-03','ryan65@ryan.com','09123456765',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(168,'Ryan Dupay 66','Banilad Mandaue City','1985-01-04','ryan66@ryan.com','09123456766',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(171,'Paul Smith','Toky','1985-01-01','p@co','0995',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(172,'Keita Minami 1','Motomachi, Biei-cho Kamikawa-gun, Hokkaido','1993-06-24','hokkaido_love1@gmail.com','11260257338',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(173,'æœ¨æ‘ã€€ç¥ä¸€ 1','çŸ³å·çœŒé‡‘æ²¢å¸‚æ¾æ‘1-2','1984-07-12','yuichi19891@gmail.com','11346877085',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(174,'å®‰é”ã€€çŽ²å¥ˆ 1','æ±äº¬éƒ½åƒä»£ç”°åŒºä¸¸ã®å†…1-9-1 ','1987-03-03','tomotomo331@yahoo.co.jp','19032784627',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(175,'Jiko Miguel 1','F. Cabahug St., Mabolo, Cebu','1990-08-15','jiko12chan1@yahoo.com','19943766743',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(176,'Abenn Sala 1','Santiago Street corner B. Valdez, Makati City, Manila','1970-01-25','superstar1@gmail.com','19967398811',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(177,'Apple Joy Delgado Lumogdang 1','Banilad Cebu City','1974-07-07','msjoyisme1@yahoo.com','139976542487',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(178,'Abenn Sala 1Abenn Sala 1Abenn ','teste','1985-01-01','test1@53drgsr.con','235423452345',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(179,'askdfhlashdflkajshldkfjhalksjd','sldfkjghlskdjgh','1990-01-01','test1@test1.com','098765312',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(180,'ã‚«ãƒ„ã‚ª#$%^&*()*&^%$ã‚«ãƒ„ã‚','tetasdfaskih 1','1985-01-01','test2@test1.com','0678912315',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(181,'r','qqwerfawrg5qa35gq','1985-01-01','test3@asdfasdf.com','5674893',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(182,'d1','F. Cabahug St., Mabolo, Cebu','1990-08-15','jiko12chan2@yahoo.com','29943766743',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(183,'Shinji Wada','Toyama, Japan','1985-01-01','apple','09967324654',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(184,'Abenn Sala 1222','11111111111111111111111111111111412345rleirghowierhgio345foi3qu4hof87h','1985-01-01','1@gmail.com','3567347345634',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(185,'d11234','11111111111111111111111111111111412345rleirghowierhgio345foi3qu4hof87hq34 boqiwu','1990-08-15','jiko12chan22@yahoo.com','29943766722',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(186,'Abenn Sala 1222234','1111','1985-01-01','12@gmail.com','3567347345612',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(187,'eqwreawerfw34t5','11111111111111111111111111111111412345rleirghowierhgio345foi3qu4hof87hq34 boqiwu','0000-00-00','test23@test1.com','06781912315',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(188,'d11234rtsdg','1111234wt ert','1990-01-31','asdgasdg@gmail.com','2222222222222',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(189,'Abenn Sala 122223445','1111','1985-01-01','asdg@gmail.com','111',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(191,'Takumi Miyamoto','Banilad, Cebu City','1984-04-07','mukku_0407@yahoo.co.jp','0762660470','Sushi','Yellow ','21st century museum ','uploads/TAKUMI_photo.jpg','uploads/sample2.jpg','uploads/sample4.jpg','uploads/sample7.jpg');
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sns`
--

DROP TABLE IF EXISTS `sns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sns` (
  `ProfileID` int(11) DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `instagram` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ProfileID` (`ProfileID`),
  CONSTRAINT `sns_ibfk_1` FOREIGN KEY (`ProfileID`) REFERENCES `profile` (`ProfileID`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sns`
--

LOCK TABLES `sns` WRITE;
/*!40000 ALTER TABLE `sns` DISABLE KEYS */;
INSERT INTO `sns` VALUES (20,5,'https://www.instagram.com/ryandupay/','https://twitter.com/ryandupay','https://www.facebook.com/ryan.dupay'),(80,17,'https://www.instagram.com/coldplay/','https://twitter.com/herbieyamaguchi','https://www.facebook.com/abenn.sala'),(76,18,'https://www.instagram.com/sade/','https://twitter.com/SadeOfficial','https://www.facebook.com/shinji.wada.50'),(77,19,'https://www.instagram.com/oasis/','https://twitter.com/mamamilk_info','https://www.facebook.com/rena.adachi.10'),(78,20,'https://www.instagram.com/katyperry/','https://twitter.com/fatbellybella','https://www.facebook.com/keita.minami.5'),(79,21,'https://www.instagram.com/selenagomez/','https://twitter.com/missjillscott','https://www.facebook.com/jikogwapo'),(81,22,'https://www.instagram.com/maxwell/','https://twitter.com/_MAXWELL_','https://www.facebook.com/applejoy.d.lumogdang?ref='),(191,23,'https://www.instagram.com/mukku_0407/','https://twitter.com/photo_mukku','https://www.facebook.com/takumi.miyamoto.9');
/*!40000 ALTER TABLE `sns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `work_experience`
--

DROP TABLE IF EXISTS `work_experience`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `work_experience` (
  `Name_of_company` varchar(50) DEFAULT NULL,
  `Position` varchar(30) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `ProfileID` int(11) DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`),
  KEY `ProfileID` (`ProfileID`),
  CONSTRAINT `work_experience_ibfk_1` FOREIGN KEY (`ProfileID`) REFERENCES `profile` (`ProfileID`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `work_experience`
--

LOCK TABLES `work_experience` WRITE;
/*!40000 ALTER TABLE `work_experience` DISABLE KEYS */;
INSERT INTO `work_experience` VALUES ('NEC Telecom Software Philippines','SeniorSoftware Tester','2008-06-16','2016-07-15',20,5),('Framgia Philippines','QA Manager','2016-08-22','0000-00-00',20,6),('Spotify','Accountant','1993-05-09','1999-03-12',80,29),('2GO Philippines','Accountant','2000-05-06','2010-10-25',80,30),('ãƒˆãƒ¨ã‚¿è‡ªå‹•è»Šæ ªå¼ä¼šç¤¾','å–¶æ¥­','2007-04-07','2013-07-16',76,31),('å‘³ã®ç´ æ ªå¼ä¼šç¤¾','å–¶æ¥­','2013-09-01','2015-06-24',76,32),('æ ªå¼ä¼šç¤¾NTTãƒ‰ã‚³ãƒ¢','çµŒç†','2012-04-01','2012-08-30',77,33),('æ ªå¼ä¼šç¤¾ã‚ªãƒªã‚¨ãƒ³ã‚¿ãƒ«ãƒ©ãƒ³ãƒ‰','ä¼ç”»é–‹ç™º','2012-09-01','2014-03-17',77,34),('Sony Corporation','Sales staff','2014-04-01','2015-03-16',78,35),('Panasonic Corporation','Sales manager','2015-04-01','2016-05-28',78,36),('Amazon.com Inc.','QA enginner ','2012-07-04','2014-12-31',79,37),('GMA Network, Inc.','Project manager','2015-03-14','2017-01-30',79,38),('BlackBerry Limited','Secretary','1998-02-10','2006-05-30',81,39),('Asia United Bank','Japanese HR Associate','2007-07-01','2014-12-31',81,40),('Real Great English Corporation','English school staff','2014-01-01','2016-08-15',191,41),('LearningLitz Inc.','Japanese language instructor','2016-08-16','2016-04-16',191,42);
/*!40000 ALTER TABLE `work_experience` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-15  6:12:36
