CREATE DATABASE  IF NOT EXISTS `SUCCULENTS_PLANT` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `SUCCULENTS_PLANT`;
-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: SUCCULENTS_PLANT
-- ------------------------------------------------------
-- Server version	8.0.22

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
-- Table structure for table `CARD`
--

DROP TABLE IF EXISTS `CARD`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `CARD` (
  `cardNO` int NOT NULL AUTO_INCREMENT,
  `cardReceivePople` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `cardContentText` varchar(45) COLLATE utf8_bin NOT NULL,
  `cardSendPople` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `FK_CARD_memberNO` int DEFAULT NULL,
  `FK_CARD_productNO` int DEFAULT NULL,
  PRIMARY KEY (`cardNO`),
  KEY `memberNO_idx` (`FK_CARD_memberNO`),
  KEY `productNO_idx` (`FK_CARD_productNO`),
  CONSTRAINT `FK_CARD_memberNO` FOREIGN KEY (`FK_CARD_memberNO`) REFERENCES `MEMBER` (`memberNO`),
  CONSTRAINT `FK_CARD_productNO` FOREIGN KEY (`FK_CARD_productNO`) REFERENCES `PRODUCT` (`productNO`)
) ENGINE=InnoDB AUTO_INCREMENT=3245764 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CARD`
--

LOCK TABLES `CARD` WRITE;
/*!40000 ALTER TABLE `CARD` DISABLE KEYS */;
INSERT INTO `CARD` VALUES (1106,'親愛的學長','希望你喜歡!','琉璃羊',1,9),(1110,'親愛的學長','送給我最親愛的學長,希望你喜歡','琉璃羊',22,3),(5343,'1','1','1',4,NULL),(5620,'123123','12312321','123213123',4,35),(3245763,'劉莉羊','生日快樂','李冠帥',4,3);
/*!40000 ALTER TABLE `CARD` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CUSTOM_PLANT`
--

DROP TABLE IF EXISTS `CUSTOM_PLANT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `CUSTOM_PLANT` (
  `customPlantNO` int NOT NULL AUTO_INCREMENT,
  `customPlantName` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `customPlantImg` varchar(80) COLLATE utf8_bin DEFAULT NULL,
  `FK_CUSTOM_PLANT_productNO_01` int DEFAULT NULL,
  `FK_CUSTOM_PLANT_productNO_02` int DEFAULT NULL,
  `FK_CUSTOM_PLANT_productNO_03` int DEFAULT NULL,
  `FK_CUSTOM_PLANT_productNO_04` int DEFAULT NULL,
  `FK_CUSTOM_PLANT_productNO_05` int DEFAULT NULL,
  `FK_CUSTOM_PLANT_productType` int DEFAULT NULL,
  `FK_CUSTOM_PLANT_memberNO` int DEFAULT NULL,
  PRIMARY KEY (`customPlantNO`),
  KEY `productNO_01_idx` (`FK_CUSTOM_PLANT_productNO_01`),
  KEY `productNO_02_idx` (`FK_CUSTOM_PLANT_productNO_02`),
  KEY `productType_idx` (`FK_CUSTOM_PLANT_productType`),
  KEY `memberNO_idx` (`FK_CUSTOM_PLANT_memberNO`),
  KEY `FK_CUSTOM_PLANT_productNO_03_idx` (`FK_CUSTOM_PLANT_productNO_03`),
  KEY `FK_CUSTOM_PLANT_productNO_04_idx` (`FK_CUSTOM_PLANT_productNO_04`),
  KEY `FK_CUSTOM_PLANT_productNO_05_idx` (`FK_CUSTOM_PLANT_productNO_05`),
  CONSTRAINT `FK_CUSTOM_PLANT_memberNO` FOREIGN KEY (`FK_CUSTOM_PLANT_memberNO`) REFERENCES `MEMBER` (`memberNO`),
  CONSTRAINT `FK_CUSTOM_PLANT_productNO_01` FOREIGN KEY (`FK_CUSTOM_PLANT_productNO_01`) REFERENCES `PRODUCT` (`productNO`),
  CONSTRAINT `FK_CUSTOM_PLANT_productNO_02` FOREIGN KEY (`FK_CUSTOM_PLANT_productNO_02`) REFERENCES `PRODUCT` (`productNO`),
  CONSTRAINT `FK_CUSTOM_PLANT_productNO_03` FOREIGN KEY (`FK_CUSTOM_PLANT_productNO_03`) REFERENCES `PRODUCT` (`productNO`),
  CONSTRAINT `FK_CUSTOM_PLANT_productNO_04` FOREIGN KEY (`FK_CUSTOM_PLANT_productNO_04`) REFERENCES `PRODUCT` (`productNO`),
  CONSTRAINT `FK_CUSTOM_PLANT_productNO_05` FOREIGN KEY (`FK_CUSTOM_PLANT_productNO_05`) REFERENCES `PRODUCT` (`productNO`),
  CONSTRAINT `FK_CUSTOM_PLANT_productType` FOREIGN KEY (`FK_CUSTOM_PLANT_productType`) REFERENCES `PRODUCT` (`productType`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CUSTOM_PLANT`
--

LOCK TABLES `CUSTOM_PLANT` WRITE;
/*!40000 ALTER TABLE `CUSTOM_PLANT` DISABLE KEYS */;
INSERT INTO `CUSTOM_PLANT` VALUES (19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(29,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(43,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(49,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `CUSTOM_PLANT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FAVORITE`
--

DROP TABLE IF EXISTS `FAVORITE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `FAVORITE` (
  `FK_FAVORITE_memberNO` int NOT NULL,
  `FK_FAVORITE_productNO` int NOT NULL,
  PRIMARY KEY (`FK_FAVORITE_memberNO`,`FK_FAVORITE_productNO`),
  KEY `FK_FAVORITE_productNO_idx` (`FK_FAVORITE_productNO`),
  CONSTRAINT `FK_FAVORITE_memberNO` FOREIGN KEY (`FK_FAVORITE_memberNO`) REFERENCES `MEMBER` (`memberNO`),
  CONSTRAINT `FK_FAVORITE_productNO` FOREIGN KEY (`FK_FAVORITE_productNO`) REFERENCES `PRODUCT` (`productNO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FAVORITE`
--

LOCK TABLES `FAVORITE` WRITE;
/*!40000 ALTER TABLE `FAVORITE` DISABLE KEYS */;
/*!40000 ALTER TABLE `FAVORITE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `HANDCLASS`
--

DROP TABLE IF EXISTS `HANDCLASS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `HANDCLASS` (
  `handClassNO` int NOT NULL AUTO_INCREMENT,
  `handClassName` varchar(20) COLLATE utf8_bin NOT NULL,
  `handClassContent` varchar(300) COLLATE utf8_bin NOT NULL,
  `handClassPrice` varchar(10) COLLATE utf8_bin NOT NULL,
  `handClassDate` varchar(300) COLLATE utf8_bin NOT NULL,
  `handClassPeople` int NOT NULL,
  `handClassPic` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `handClassAfternoonNight` int DEFAULT NULL,
  `handClassNowPeople` int DEFAULT NULL,
  `FK_HANDCLASS_memberNO` int DEFAULT NULL,
  `FK_HANDCLASS_productType` int DEFAULT NULL,
  PRIMARY KEY (`handClassNO`),
  KEY `memberNO_idx` (`FK_HANDCLASS_memberNO`),
  KEY `productType_idx` (`FK_HANDCLASS_productType`),
  CONSTRAINT `FK_HANDCLASS_memberNO` FOREIGN KEY (`FK_HANDCLASS_memberNO`) REFERENCES `MEMBER` (`memberNO`),
  CONSTRAINT `FK_HANDCLASS_productType` FOREIGN KEY (`FK_HANDCLASS_productType`) REFERENCES `PRODUCT` (`productType`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `HANDCLASS`
--

LOCK TABLES `HANDCLASS` WRITE;
/*!40000 ALTER TABLE `HANDCLASS` DISABLE KEYS */;
INSERT INTO `HANDCLASS` VALUES (1,'手捏陶器 + 多肉組盆','1.從盆器設計、釉色挑選、多肉種植，每一個步驟都可以參與製作。\n2.教你怎麼玩多肉！當季的當然最健康最好養。3.從介質挑選及介紹、多肉植物脫盆到組盆，\n每一個細節都是自己親手參與','2800','2021/04/08,2021/04/12,2021/04/24',10,'HandMake_01.png',NULL,0,NULL,NULL),(2,'諧意繪泥 & 療癒植栽','1.透過漸層水泥盆器的製作，介紹基本色彩原理、水泥調色與配色技巧。\r\n2.凝固完之後的拆模小技巧一次學會。3.從介質挑選及介紹、多肉植物脫盆到組盆，\r\n每一個細節都是自己親手參與,','3000','2021/04/01,2021/04/11,2021/04/28',15,'HandMake_02.png',NULL,0,NULL,NULL),(3,'室內多肉照顧課','1.傳授大家如何在「室內」種好多肉，植物專門養護課程。2.家裡沒有大陽台卻也想好好種多肉的你，\n不管你是新手或是已經種植多肉一段時間，其實可以種的品種超多的喔。\n3.除了知識補給之外，老師現場教學兩種上板教學：木板與水泥板，室內多肉除了「盆植」之外，\n「懸掛型」的種植方式也很合適喔！','2800','2021/04/02,2021/04/03,2021/04/16',10,'HandMake_03.png',NULL,0,NULL,NULL);
/*!40000 ALTER TABLE `HANDCLASS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `KNOWLEDGE`
--

DROP TABLE IF EXISTS `KNOWLEDGE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `KNOWLEDGE` (
  `knowledgeNO` int NOT NULL AUTO_INCREMENT,
  `knowledgeType` int NOT NULL,
  `knowledgeOutPic` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `knowledgeTitle` varchar(45) COLLATE utf8_bin NOT NULL,
  `knowledgeContent01` text COLLATE utf8_bin NOT NULL,
  `knowledgeContent02` text COLLATE utf8_bin,
  `knowledgeContent03` text COLLATE utf8_bin,
  `knowledgeContentPic01` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `knowledgeContentPic02` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `knowledgeContentPic03` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`knowledgeNO`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `KNOWLEDGE`
--

LOCK TABLES `KNOWLEDGE` WRITE;
/*!40000 ALTER TABLE `KNOWLEDGE` DISABLE KEYS */;
INSERT INTO `KNOWLEDGE` VALUES (1,1,'blog_01.png','植物教學＆養護介紹','植物照顧與養護絕對是一門學問，基礎上會學習「陽光、空氣、水」的交互作用，進階版的學習會帶到「溫度、介質、肥料、疫病、蟲害」等等，閱讀這篇文章之後，可以幫助你建立關於植物照顧的基礎概念，跟著我們一起探索植物照顧的技巧、感受植物健康開心的生長吧！','陽光：絕大多數植物都需要日照，以進行「光合作用」維生。不同植物之間對於光照的需求差異很大，不過概括來說，多數多肉植物、水生植物、果樹植物是比較耐曬的，觀葉植物、雨林植物、蘭花會是比較耐陰的。空氣：多數植物都喜歡通風的環境，因為植物生長在大自然之中的環境裡本身就是通風的居多，就算是熱帶雨林的高濕度環境，也是「維持高濕度的通風狀態」；而植物也透過葉片上的氣孔進行「呼吸作用」，如果葉片上有積灰塵也建議將它拭去，幫助植物進行交換二氧化碳與氧氣的流通。水：土乾才澆水是多數植物照顧的天條，除了難以耐受乾燥的植物才需要持續維持濕潤，多數植物循這個技巧就對了，只是土乾的速度會跟介質輸水程度與環境通風度做交互作用。','溫度：根據植物原生地所處的溫度，來安排與設計環境的溫度，台灣處於亞熱帶與熱帶氣候之間，很多植物都可以生長得很不錯，而關於溫度，除了日間的溫度之外，講究的話也會需要關注夜間的溫度唷！不同植物對冬天的忍受度也會有差異，這也需要注意。介質：多數植物都喜歡通風性佳的土壤，因為根部除了吸水之外也需要呼吸空氣唷，不同的介質也有不同的營養成分與特質，搭配自己的澆水頻率高低也可以調整介質的酥鬆程度。如果想了解多肉植物介質也可以看這一篇多肉專用介質介紹。肥料：氮磷鉀三元素是多數植物經常都會有需要的營養成分，在生長季節來到的時候適量的添加是絕對有幫助的，當植物休眠時則可以減少比重甚至是完全不添加。肥料也有分液態肥以及固體肥。病蟲害：植物在自然界也會遇到病蟲害，植物都有屬於自己的一套抵禦措施，不過若是植株本身比較虛弱，就會更難抵抗。針對病蟲害，其實多數人不太會遇到，如果遇到了，狀況不嚴重的話可以先用物理性的方式移除害蟲，用牙刷刷掉他們，如果是病害狀況，建議走訪住家附近的農藥行討論用藥的對策，農藥行會給予依狀況與環境不等的建議。','blog_01_1.png','blog_01_2.png','blog_01_3.png'),(2,2,'blog_02.png','春天限定的多肉','第一種春天多肉：子持蓮華，小巧可愛的蓮座狀葉盤是其魅力所在。種在組盆的最底下，像一朵朵藍色玫瑰般精緻。原產地於北海道與青森，從小型蓮座狀葉盤伸出走莖，並於前端發出子株，把子株切下來很簡單就能繁殖，也很容易形成群生株。此外，也會從葉盤中心伸出花莖，綻放白色花朵！（來看看他開花的樣子）不過瓦松屬的多肉，開花即全株死亡，看到他這麼漂亮的樣子也成為絕響！若要防止子持蓮華開花後死亡，可以對他進行「砍頭」處理，一一將花苞剪掉，阻止他們開花。','第二種春天多肉：虹之玉，圓形葉片連綴叢生，一般在夏季會是鮮綠色，但從秋季到冬季這段期間會變得紅通通的，表面光滑有光澤感，就像珠寶般閃耀光芒。只有在春天這個季節，從紅色漸層到青綠色，像是季節限定的魔幻顏色！他還有一個小名叫「耳墜草」，虹之玉的葉子長度大約只有 1~2mm ，如果你見到和他們很相似，葉子卻比它們大一倍左右的植物，應該就是他們的近親「乙女心」了。最適生長溫度是 10-32℃ 之間；氣溫低過 4℃ ，或高過 33℃ 時會進入休眠，停止生長喔！來看更多多肉牆上的虹之玉！','紅花團扇最棒的觀賞價值就是他大片的葉狀莖，一團一團的向上堆疊生長，要讓他長得越來越多，充足的陽光是絕對必要的條件，夏天就盡量曬太陽也沒問題，在保持通風有日照處種植，每週給水一次，水量澆多。若想繁殖他，建議在夏天，可戴手套將其中一片摘除，種進多肉專用土，正常給水，約 3-4 週發根後就算繁殖成功啦！','blog_02_1.png','blog_02_2.png','blog_02_3.png'),(3,2,'blog_03.png','多肉圖鑑：銀之鈴','你喜歡翠綠小巧像豌豆一樣可愛的綠之鈴，那你也必定要認識他的好朋友「銀之鈴」，許多人會因為他們的中文名稱很像，加上大小雷同，而認為是同科屬的姐妹，到底他們倆有什麼關係呢？這個謎題我們繼續看下去來解答。把銀之鈴帶回家種植後，細細的欣賞他後發現，怎麼每片葉子上都有細緻的白粉啊？他們的作用是什麼的？這些白粉是多肉植物的防曬機制，尤其是厚葉型的多肉，看起來越肥嫩的越容易有白粉，而你知道這些白粉掉了就不會再長回來囉！所以欣賞就好，別因為貪玩把白粉摸掉，可會影響觀賞價值呢！','第一張圖片是綠之鈴，他是菊科千里光屬，小名又叫佛珠。綠之鈴的葉子像是一顆顆綠色青豆長在匍匐莖上，每顆大小約 0.5-0.8 公分大，形狀圓圓的，在末端凸起一小點，形狀像迷你版的綠色水蜜桃，精緻又小巧可愛。第二張圖片就是今日的主角銀之鈴，他是景天科銀波錦屬的多肉，反而熊童子才是他的親戚，和熊熊一樣，他也有尖尖小爪子，不過他是「單片單爪」，邊緣也會畫上淡淡的紅線，葉面撲上細緻的白粉（綠之鈴沒有白粉喔），層層堆疊、多頭群生的模樣看起來更是討喜！這樣你分的出來他們兩個的不同了嗎？','帶回家後，將盆內的土換成多肉植物專用土，並且讓他在生長季（入秋開始到夏天來臨前）正常行光合作用，聽起來是件再正常不過的事，但確實是最重要的！在生長季曬太陽、強健多肉的基底，也會更好渡夏，若是生長季都是在室內生長，植株不夠健康也不易度過夏天，所以曬太陽是基本條件喔！','blog_03_1.png','blog_03_2.png','blog_03_3.png'),(4,2,'blog_04.png','植物圖鑑：斑葉卡利薩','為夾竹桃科假虎刺屬，假虎刺屬的植物外型雷同，擁有翠綠色油亮的小葉，莖上帶刺，灌木矮叢狀（地植可達 1.5 公尺高，故有人也把他當成人行道、公園的造景植物）。而本篇介紹的斑葉卡利薩，光滑的葉面色彩更為豐富，奶油黃與深綠色相間，葉子間距緊湊的生長，亦有枝條寫意，作為盆景也相當合適。什麼是「斑葉」？斑葉，顧名思義就是葉子上有「斑」，而這個斑呢，就是原本綠色的葉子上出現了不同顏色的變化，也有人說「變異」「出錦」，斑葉植物的產生是機率問題，自然發生的現象，因為有了顏色有了看頭，也有更多的不確定性（斑的分佈位置、大小），因此有些斑葉植物的價格也跟著水漲船高。斑葉固然好看，但全斑的葉子反而更難照顧，因為沒有葉綠素，無法正常行光合作用，也無法在烈日下生存呀！','環境：照顧好斑葉卡利薩不是件難事，首先最要注意的是，他不是一品可以放在暗無天日的室內植物，明亮有自然採光的空間是最基本的環境，若想要放在戶外種植當然沒問題，他可是很耐曬的呢！澆水頻率：斑葉卡利薩愛喝水嗎？這也要取決於環境的通風程度，若是種植戶外，很通風的環境，一週澆水 2-3 次也可以，每次澆的量多（盆器底部孔洞透水出來），他就能長得滿好的喔，室內種植的情況，建議 1-2 週澆水一次即可。','土的選擇：要用什麼土來種呢？在台灣這個潮濕悶熱的環境，我們會建議除了保水的泥炭土或培養土外，混合 1/3 – 1/4 的多肉專用土來種植，以顆粒介質為基底可以讓根部避免長時間的悶濕。','blog_04_1.png','blog_04_2.png','blog_04_3.png'),(5,1,'blog_05.png','多肉圖鑑：桃太郎','桃太郎最讓人愛不釋手的樣子就是他緊密的蓮座外型，葉面鋪上一層薄薄的細緻白粉，整體葉色淺粉綠，葉緣從底部漸層上來的粉紅外框、淡淡的柔柔的，到最頂端一抹討喜的紅尖點，每片葉子規律的生長著，光是這樣欣賞她美麗的樣貌，就足夠迷人了！','這次挑選的盆器有兩種，圖一為土口 TOOCO 的凝雪盆，這件盆器作品著重在白色的細節，如同凝固的雪一樣不均勻的灑落在山稜線上，不同的厚度堆疊出不同層次的白。淺色系的白盆、帶點弧度的圓潤外型，和桃太郎給人的觀感相互輝映。第二種盆器是米口・陶的皮丘盆，同樣選的是米白的釉色，皮丘盆的特色是他底部有三隻尖尖的腳（剛好和桃太郎的葉尖有上下對稱的效果），明顯感覺得出來這樣的搭配讓盆器多了一份動態的童趣感。','種植環境：照顧好桃太郎不是件難事，首先最要注意的是，他不是一品可以放在暗無天日的室內植物，明亮有自然採光的空間是最基本的環境，但是若能夠種植在通風的戶外環境絕對是最適合的！有足夠的光照量才能讓花型維持同樣的美麗。澆水頻率：桃太郎愛喝水嗎？這也要取決於環境的通風程度，保持大原則，土乾才澆水。若是種植戶外，很通風的環境，一週澆水 1-2 次也可以，每次澆的量多（盆器底部孔洞透水出來）。從秋天開始種植桃太郎最適合了，一路會美到明年 6 月喔！土的選擇：要用什麼土來種呢？將桃太郎太回家後，將裡面原有的土全部換成多肉專用土來種植，以顆粒介質為基底可以桃太郎長得更好喔！','blog_05_1.png','blog_05_2.png','blog_05_3.png');
/*!40000 ALTER TABLE `KNOWLEDGE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MEMBER`
--

DROP TABLE IF EXISTS `MEMBER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `MEMBER` (
  `memberNO` int NOT NULL AUTO_INCREMENT,
  `memberType` int DEFAULT NULL,
  `memberAccount` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `memberPassword` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `memberName` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `memberCellPhone` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `memberAddress` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `memberPhoto` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `memberStatus` int DEFAULT NULL,
  `memberBirthday` date DEFAULT NULL,
  `memberDate` date DEFAULT NULL,
  PRIMARY KEY (`memberNO`),
  UNIQUE KEY `memberAccount_UNIQUE` (`memberAccount`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MEMBER`
--

LOCK TABLES `MEMBER` WRITE;
/*!40000 ALTER TABLE `MEMBER` DISABLE KEYS */;
INSERT INTO `MEMBER` VALUES (1,1,'aqwe@gmail.com','uwq457745','蘇帥政','0924096142','新北市',NULL,1,'1989-02-01','2021-03-01'),(2,1,'qweqqd@gmail.com','mhyyt124123','江美璿','0921123432','桃園市',NULL,1,'1998-04-01','2021-03-01'),(3,1,'rjrj@gmail.com','dfkiu657','莊酷麟','0938347924','新北市',NULL,1,'1993-07-01','2021-03-02'),(4,1,'sgfdhb@gmail.com','ouiutkt123','李冠帥','0909877654','台北市',NULL,1,'1987-09-01','2021-03-02'),(5,1,'dcewgng@gmail.com','awiutl4563','黃型閎','0922324123','桃園市',NULL,1,'1993-10-01','2021-03-03'),(6,1,'aqwrlii@gmail.com','sghyuri124658','林培帥','0943555677','新北市',NULL,1,'1995-01-01','2021-03-03'),(7,1,'qwevd@gmail.com','gnsfilk34234','陳型輝','0954995336','新北市',NULL,1,'1992-12-01','2021-03-04'),(8,1,'dgolib@gmail.com','asd123','陳智高','0912312323','新北市',NULL,1,'1993-05-01','2021-03-04'),(9,1,'qwrdvds@gmail.com','sgrjtei3436','施周杰倫','0935987654','新北市',NULL,1,'1992-03-01','2021-03-05'),(10,1,'wrtrhkukuy@gmail.com','smtukd12323','林美娟','0936765432','新北市',NULL,1,'1991-01-01','2021-03-05'),(11,0,'scplant','scplantG',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(12,1,'scplant@gmail.com','123sadqdw','王莉美','0987654321','fafsdfsaf',NULL,1,NULL,'2021-03-18'),(16,1,'sdqw@gmail.com','qwqe12','黃大天','0912332112','新北',NULL,1,NULL,'2021-03-19'),(17,1,'123sad@gamil.com','qse13213','黃小天','0932112323','新北',NULL,1,NULL,'2021-03-19'),(18,1,'112sadq@gmail.com','aae123123','黃少天','0987123324','新北',NULL,1,NULL,'2021-03-19'),(19,1,'poed@gmail.com','1234','林培哲','0987338950','桃園市',NULL,1,NULL,'2021-03-19'),(20,1,'koko@gmail.com','1234','林培哲','0987338950','桃園市',NULL,1,NULL,'2021-03-19'),(22,1,'dog@gmail.com','1234','劉黎羊','0987654356','桃園市',NULL,1,NULL,'2021-03-19'),(24,1,'12345@gmail.com','1234','lisa','0909877654','新台五路一段33-1號9樓',NULL,1,NULL,'2021-03-19'),(25,1,'123456@gmail.com','4567','john','0909877654','新台五路一段33-1號9樓',NULL,1,NULL,'2021-03-19'),(26,1,'1234567@gmail.com','9090','brain','0909899876','新台五路一段33-1號9樓',NULL,1,NULL,'2021-03-19'),(27,1,'qweqwe@gmail.com','3451','劉的華','0928573933','dsafdsaf',NULL,1,NULL,'2021-03-19');
/*!40000 ALTER TABLE `MEMBER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ORDER`
--

DROP TABLE IF EXISTS `ORDER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ORDER` (
  `orderNO` int NOT NULL AUTO_INCREMENT,
  `orderTotal` int DEFAULT NULL,
  `orderName` varchar(45) COLLATE utf8_bin NOT NULL,
  `orderCellPhone` varchar(45) COLLATE utf8_bin NOT NULL,
  `orderAddress` varchar(50) COLLATE utf8_bin NOT NULL,
  `orderDate` date DEFAULT NULL,
  `orderMethod` int DEFAULT NULL,
  `orderCreditNO` bigint DEFAULT NULL,
  `orderBank` bigint DEFAULT NULL,
  `orderAccunt` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `orderPayStatus` tinyint DEFAULT NULL,
  `orederStatus` int DEFAULT NULL,
  `FK_ORDER_memberNO` int DEFAULT NULL,
  PRIMARY KEY (`orderNO`),
  KEY `FK_ORDER_memberNO>MENBER_idx` (`FK_ORDER_memberNO`),
  CONSTRAINT `FK_ORDER_memberNO` FOREIGN KEY (`FK_ORDER_memberNO`) REFERENCES `MEMBER` (`memberNO`)
) ENGINE=InnoDB AUTO_INCREMENT=1616141439 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ORDER`
--

LOCK TABLES `ORDER` WRITE;
/*!40000 ALTER TABLE `ORDER` DISABLE KEYS */;
INSERT INTO `ORDER` VALUES (1615880213,NULL,'李冠帥','0911432567','新北市','2021-03-01',1,NULL,NULL,'123412341234',2,2,4),(1615880222,NULL,'黃智高','09851234689','新北市','2021-03-03',2,NULL,556655665566,NULL,2,2,8),(1615880245,NULL,'莊酷麟','0938347924','新北市','2021-03-05',2,NULL,778877887788,NULL,1,1,3),(1615970996,350,'黃智高','0985123468','新北市','2021-03-17',NULL,NULL,NULL,NULL,1,NULL,8),(1615971144,400,'黃智高','0985123468','新北市','2021-03-17',NULL,NULL,NULL,NULL,1,NULL,8),(1615977011,5600,'黃智高','0912312323','新北市','2021-03-17',NULL,NULL,NULL,NULL,1,NULL,8),(1615982409,1660,'黃智高','0912312323','新北市','2021-03-17',NULL,NULL,NULL,NULL,1,NULL,8),(1615982546,1660,'黃智高','0912312323','新北市','2021-03-17',NULL,NULL,NULL,NULL,1,NULL,8),(1615982766,1660,'黃智高','0912312323','新北市','2021-03-17',NULL,NULL,NULL,NULL,1,NULL,8),(1616048539,8750,'陳智高','0912312323','新北市','2021-03-18',NULL,NULL,NULL,NULL,1,NULL,8),(1616049014,10410,'陳智高','0912312323','新北市','2021-03-18',NULL,NULL,NULL,NULL,1,NULL,8),(1616050913,7840,'陳智高','0912312323','新北市','2021-03-18',NULL,NULL,NULL,NULL,1,NULL,8),(1616066621,14000,'陳智高','0912312323','新北市','2021-03-18',NULL,NULL,NULL,NULL,1,NULL,8),(1616068153,5600,'李冠帥','0911432567','新北市','2021-03-18',NULL,NULL,NULL,NULL,1,NULL,4),(1616068569,20,'李冠帥','0911432567','新北市','2021-03-18',NULL,NULL,NULL,NULL,1,NULL,4),(1616068637,10060,'李冠帥','0911432567','新北市','2021-03-18',NULL,NULL,NULL,NULL,1,NULL,4),(1616072414,2800,'1','1231231234','新台五路','2021-03-18',NULL,NULL,NULL,NULL,1,NULL,12),(1616125817,2360,'莊酷麟','0938347924','新北市','2021-03-19',NULL,NULL,NULL,NULL,1,NULL,3),(1616129572,1660,'李冠帥','0909877654','台北市','2021-03-19',NULL,NULL,NULL,NULL,1,NULL,4),(1616129776,350,'黃少天','0987123324','新北','2021-03-19',NULL,NULL,NULL,NULL,1,NULL,18),(1616135114,2800,'黃型閎','0922324123','桃園市','2021-03-19',NULL,NULL,NULL,NULL,1,NULL,5),(1616141432,5850,'蘇帥政','0921345678','新北市','2021-03-19',NULL,NULL,NULL,NULL,1,NULL,1),(1616141438,5950,'劉黎羊','0987654356','桃園市','2021-03-19',NULL,NULL,NULL,NULL,1,NULL,22);
/*!40000 ALTER TABLE `ORDER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ORDER_DETAIL`
--

DROP TABLE IF EXISTS `ORDER_DETAIL`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ORDER_DETAIL` (
  `orderDetailNO` int NOT NULL AUTO_INCREMENT,
  `FK_ORDER_DETAIL_orderNO` int DEFAULT NULL,
  `orderCard` tinyint NOT NULL,
  `FK_ORDER_DETAIL_cardNO` int DEFAULT NULL,
  `FK_ORDER_DETAIL_productNO` int DEFAULT NULL,
  `FK_ORDER_DETAIL_customPlantNO` int DEFAULT NULL,
  `FK_ORDER_DETAIL_handClassNO` int DEFAULT NULL,
  `HDNO` int DEFAULT NULL,
  `number` int DEFAULT NULL,
  `handClassDate` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `handClassPrice` int DEFAULT NULL,
  `handClassName` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`orderDetailNO`),
  KEY `productNO_idx` (`FK_ORDER_DETAIL_productNO`),
  KEY `customPlantNO_idx` (`FK_ORDER_DETAIL_customPlantNO`),
  KEY `classNO_idx` (`FK_ORDER_DETAIL_handClassNO`),
  KEY `cardNO_idx` (`FK_ORDER_DETAIL_cardNO`),
  KEY `FK_ORDER_DETAIL_orderNO_idx` (`FK_ORDER_DETAIL_orderNO`),
  CONSTRAINT `FK_ORDER_DETAIL_cardNO` FOREIGN KEY (`FK_ORDER_DETAIL_cardNO`) REFERENCES `CARD` (`cardNO`),
  CONSTRAINT `FK_ORDER_DETAIL_customPlantNO` FOREIGN KEY (`FK_ORDER_DETAIL_customPlantNO`) REFERENCES `CUSTOM_PLANT` (`customPlantNO`),
  CONSTRAINT `FK_ORDER_DETAIL_handClassNO` FOREIGN KEY (`FK_ORDER_DETAIL_handClassNO`) REFERENCES `HANDCLASS` (`handClassNO`),
  CONSTRAINT `FK_ORDER_DETAIL_orderNO` FOREIGN KEY (`FK_ORDER_DETAIL_orderNO`) REFERENCES `ORDER` (`orderNO`),
  CONSTRAINT `FK_ORDER_DETAIL_productNO` FOREIGN KEY (`FK_ORDER_DETAIL_productNO`) REFERENCES `PRODUCT` (`productNO`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ORDER_DETAIL`
--

LOCK TABLES `ORDER_DETAIL` WRITE;
/*!40000 ALTER TABLE `ORDER_DETAIL` DISABLE KEYS */;
INSERT INTO `ORDER_DETAIL` VALUES (2,1615880222,0,NULL,7,NULL,2,NULL,NULL,'0',0,'0'),(3,1615880222,0,NULL,11,NULL,1,NULL,NULL,'0',0,'0'),(4,1615880245,0,NULL,NULL,NULL,2,NULL,2,'0',0,'0'),(5,1615971144,0,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL),(6,1615971144,0,NULL,16,NULL,NULL,NULL,1,NULL,NULL,NULL),(7,1615977011,0,NULL,NULL,NULL,NULL,2,2,'2021/04/01',NULL,'諧意繪泥 & 療癒植栽'),(8,1615982409,0,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL),(9,1615982409,0,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL),(10,1615982546,0,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL),(12,1615982766,0,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL),(13,1615982766,0,NULL,NULL,19,NULL,NULL,1,NULL,NULL,NULL),(14,1616048539,0,NULL,NULL,NULL,NULL,3,3,'2021/04/03',NULL,'室內多肉照顧課'),(15,1616048539,0,NULL,2,NULL,NULL,NULL,1,NULL,NULL,NULL),(16,1616049014,0,NULL,NULL,NULL,NULL,2,3,'2021/04/11',NULL,'諧意繪泥 & 療癒植栽'),(17,1616049014,0,NULL,1,NULL,NULL,NULL,1,NULL,NULL,NULL),(18,1616049014,0,NULL,NULL,38,NULL,NULL,1,NULL,NULL,NULL),(19,1616050913,0,NULL,NULL,NULL,NULL,3,2,'2021/04/02',NULL,'室內多肉照顧課'),(20,1616050913,0,NULL,23,NULL,NULL,NULL,1,NULL,NULL,NULL),(21,1616050913,0,NULL,NULL,20,NULL,NULL,1,NULL,NULL,NULL),(22,1616066621,0,NULL,NULL,NULL,NULL,2,5,'2021/04/28',2800,'諧意繪泥 & 療癒植栽'),(23,1616068153,0,NULL,NULL,NULL,NULL,1,2,'2021/04/08',2800,'手捏陶器 + 多肉組盆'),(24,1616068569,0,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL),(25,1616068569,1,5620,35,NULL,NULL,NULL,1,NULL,NULL,NULL),(26,1616068637,0,NULL,NULL,NULL,NULL,3,3,'2021/04/02',2800,'室內多肉照顧課'),(27,1616068637,0,NULL,NULL,49,NULL,NULL,1,NULL,NULL,NULL),(28,1616072414,0,NULL,NULL,NULL,NULL,3,1,'2021/04/02',2800,'室內多肉照顧課'),(29,1616125817,0,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL),(30,1616125817,0,NULL,1,NULL,NULL,NULL,2,NULL,NULL,NULL),(31,1616125817,0,NULL,NULL,29,NULL,NULL,1,NULL,NULL,NULL),(32,1616129572,0,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL),(33,1616129572,1,5343,NULL,43,NULL,NULL,1,NULL,NULL,NULL),(34,1616129776,0,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL),(35,1616129776,0,NULL,3,NULL,NULL,NULL,1,NULL,NULL,NULL),(36,1616135114,0,NULL,NULL,NULL,NULL,3,1,'2021/04/02',2800,'室內多肉照顧課'),(37,1616141432,0,NULL,NULL,NULL,NULL,2,2,'2021/04/11',2800,'諧意繪泥 & 療癒植栽'),(38,1616141432,1,1106,9,NULL,NULL,NULL,1,NULL,NULL,NULL),(39,1616141438,0,NULL,NULL,NULL,NULL,3,2,'2021/04/03',2800,'室內多肉照顧課'),(40,1616141438,1,1110,3,NULL,NULL,NULL,1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `ORDER_DETAIL` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PRODUCT`
--

DROP TABLE IF EXISTS `PRODUCT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `PRODUCT` (
  `productNO` int NOT NULL AUTO_INCREMENT,
  `productType` int NOT NULL,
  `productName` varchar(45) COLLATE utf8_bin NOT NULL,
  `productSize` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `productDes` varchar(400) COLLATE utf8_bin NOT NULL,
  `productPrice` varchar(45) COLLATE utf8_bin NOT NULL,
  `productNumber` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `productStatus` int DEFAULT NULL,
  `productImg01` varchar(80) COLLATE utf8_bin DEFAULT NULL,
  `productImg02` varchar(80) COLLATE utf8_bin DEFAULT NULL,
  `productImg03` varchar(80) COLLATE utf8_bin DEFAULT NULL,
  `productImg04` varchar(80) COLLATE utf8_bin DEFAULT NULL,
  `plantLive` int DEFAULT NULL,
  `productHot` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `productNew` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `productCutstoms` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`productNO`),
  KEY `IDX_PRODUCT_productType` (`productType`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PRODUCT`
--

LOCK TABLES `PRODUCT` WRITE;
/*!40000 ALTER TABLE `PRODUCT` DISABLE KEYS */;
INSERT INTO `PRODUCT` VALUES (1,1,'姬朧','5 x 5 x 6 (H)','小巧可愛的紅色葉形，是可食用的多肉植物「朧月」的交種，是一種很受歡迎的多肉植物，鮮豔的顏色非常適合當作組合盆栽的一份子，很適合入門唷，繁殖的時間點一樣是在春秋兩季，天氣太熱的時候千千萬萬不要急喔。','999','99',1,'ss_A01_1.png','ss_A01_2.png','ss_A01_3.png',NULL,2,NULL,NULL,NULL),(2,1,'銀月','5 x 5 x 6 (H)','銀月的絨毛撥開以後露出了綠色的葉子~白色絨毛的作用是保護植株抵抗強烈的光照和水分的流失。','350','99',1,'ss_A02_1.png','ss_A02_2.png','ss_A02_3.png',NULL,3,NULL,NULL,NULL),(3,1,'白牡丹','10 x 10 x 3 (H)','我們心中多肉界的貴妃「白牡丹」，景天科擬石蓮屬，若種植超過一年以上，每一片葉子都像是手掌般的大，大型石蓮花，建議入手時間是每年的秋天，從秋天開始種到隔年的夏天來臨前，成長速度是有目共睹的！太陽曬得多葉形會往上且圓潤，若缺光的表現是葉形往下細長形。若想要他越來越大可以每年秋天幫他換盆，是多肉界的乖寶寶喔！','350','99',1,'ss_A03_1.png','ss_A03_2.png','ss_A03_3.png',NULL,2,NULL,NULL,NULL),(4,1,'若綠','2 x 2 x 12 (H)','具有生長速度快，適應性強，容易繁殖的特點。都說多肉長快了「徒長」就不美觀，但是若綠生長的就是快。可作為多肉盆景的配角，非常不錯的。若綠需要陽光充足和涼爽、乾燥的環境，耐半陰，怕水澇，忌悶熱潮濕。具有冷涼季節生長，夏季高溫休眠的習性。','350','99',1,'ss_A04_1.png','ss_A04_2.png','ss_A04_3.png',NULL,2,NULL,NULL,NULL),(5,1,'錦鈴殿','5 x 5 x 6 (H)','葉基本為長圓筒形，下部很長的一段幾乎為圓柱形，上部稍寬、稍扁平，近卵圓形，葉長2.5～5厘米，寬1～2厘米，葉背面圓凸，正面較平，頂端葉緣有波浪形皺紋，表皮無毛，有光澤，葉色灰綠有暗紫色斑點。 花序高25厘米，花筒圓柱形，長1厘米，上部綠色，下部紫色，花冠5裂，紫色，邊緣白色，異花授粉。','350','99',1,'ss_A05_1.png','ss_A05_2.png','ss_A05_3.png',NULL,3,NULL,NULL,NULL),(6,1,'八寶景天','10 x 10 x 5 (H)','八寶景天的葉片是長圓形的，也有少數是卵狀長圓形，葉片邊緣有鋸齒但無毛，大概在5～9月時開花，開出來的花朵呈寬披針形白、粉紅色。它平時需擺放在陽光下養護，而在冬季可耐零下20℃！','250','99',1,'ss_A06_1.png','ss_A06_2.png','ss_A06_3.png',NULL,3,NULL,NULL,NULL),(7,2,'短毛丸','5 x 5 x 3 (H)','刺座毛毛小小的仙人掌，短毛丸又稱草球，他算是很好辨認的仙人掌，球體綠色圓筒形，棱排列整齊，棱上規律的刺座（濃密的白色附屬物），短刺灰褐。仙人掌愛好者都可以擁有的一品，也很適合做多肉組盆。','350','99',1,'ss_B01_1.png','ss_B01_2.png','ss_B01_3.png',NULL,1,NULL,NULL,NULL),(8,2,'大統領','5 x 5 x 8 (H)','大統領開的紫紅色的大花可是讓他榮登受歡迎品種之一，加上頂端紅色向內生長的刺是辨認他的好方法，原產地為墨西哥，我們的經驗值是這類的仙人掌都喜歡在乾燥與通風的環境下生存，不怕烈日高溫，更不會有渡夏收盆的煩惱啦！','350','99',1,'ss_B02_1.png','ss_B02_2.png','ss_B02_3.png',NULL,2,NULL,NULL,NULL),(9,2,'緋花玉','5 x 5 x 3 (H)','開花是最大的吸引人之處，緋花玉開花非常漂亮，花色多為紅色或玫瑰紅色（也是有白花），裸萼球屬很容易從花上来辨認。他的子房和花筒上生長有寬而鈍的鳞片（如第一張圖）。病蟲非常少，喜歡會開大紅花的仙人掌，別錯過這品。緋花玉為扁球狀，在購買時可以選擇刺軟且外彎形，在種植時不易被刺到!','250','99',1,'ss_B03_1.png','ss_B03_2.png','ss_B03_3.png',NULL,2,NULL,NULL,NULL),(10,2,'英冠玉','5 x 5 x 8 (H)','英冠玉是一種仙人掌科，南國玉屬的多年生多肉植物。英冠玉喜歡生長在溫暖又乾燥且陽光比較充足的環境中，每年的六月份到七月份的時候開花，花朵呈鵝黃色，格外的漂亮，看起來清新美麗。英冠玉原生長在南美巴西高原等地區，養護比較簡單，而且開花也非常容易，非常深受仙人掌愛好者們的喜愛。','350','99',1,'ss_B04_1.png','ss_B04_2.png','ss_B04_3.png',NULL,2,NULL,NULL,NULL),(11,2,'杜威丸','5 x 5 x 3 (H)','中鉤刺小仙人掌，刺座上有長長的主刺倒鉤，外圍長滿一圈細軟的白刺，這是杜威丸的正字標記。可別小看這些倒鉤的刺，種植時千萬要注意，若是穿著寬鬆的上衣、褲子，細紗容易被勾住呢，這品仙人掌小編認為還是純用眼睛欣賞就好，沒事千萬別碰碰他呢！','350','99',1,'ss_B05_1.png','ss_B05_2.png','ss_B05_3.png',NULL,2,NULL,NULL,NULL),(12,2,'金手指','2 x 2 x 8 (H)','原本是向上生長像手指頭一根一根的，綴化後生長點連成一條線，彎彎曲曲的像是大腦的模樣，很特別吧！綴化 ( crist ) 是植物「形態」的一種變異現象。當植物受到不明原因的外界刺激（澆水、日照、溫度、藥物、氣候突變等皆有可能）後，其頂端的生長點異常分生、加倍，形成多個生長點，這些生長點橫向發展連成一條線，最終形成扇形或雞冠狀。','350','99',1,'ss_B06_1.png','ss_B06_2.png','ss_B06_3.png',NULL,2,NULL,NULL,NULL),(13,2,'白烏帽子','10 x 2 x 10 (H)','喜歡多肉植物的你，你一定看過白烏帽子，因為他真的太可愛了， 扁平的外型，若是上頭長了兩個小側芽，就像米老鼠般可愛。在日本又稱白烏帽子為「白桃扇」，台灣會叫他米老鼠，因為他的花期很短，盛開時只有一天，所以非常難得能看到他真正開花。','350','99',1,'ss_B07_1.png','ss_B07_2.png','ss_B07_3.png',NULL,3,NULL,NULL,NULL),(14,2,'白獅子','5 x 5 x 3 (H)','規律感濃厚的淺綠仙人掌，小時植株成球狀，越長大會越高成柱狀，植齡愈高，稜數通常愈多。顏色為較淺綠或翠綠色，成株之生長點有叢生之白毛，相當易長子球而成多頭群生。從上方看刺座相當規律呈圓形放射狀，非常漂亮！','400','99',1,'ss_B08_1.png','ss_B08_2.png','ss_B08_3.png',NULL,1,NULL,NULL,NULL),(15,3,'波露','10 x 10 x 15 (H)','但知道波露的人確實不多，波露也被稱為綾錦，葉片肉質，三角形先端銳尖，深綠色，表面及葉緣有白色小刺。總狀花序，花橘紅色，是一種不錯的家庭養殖植物。','250','99',1,'ss_C01_1.png','ss_C01_2.png','ss_C01_3.png',NULL,2,NULL,NULL,NULL),(16,3,'龍城','2 x 2 x 15 (H)','龍城是一種精巧別致的小型多肉植物，株形秀美挺拔，猶如綠色小塔，非常有特色，可盆栽點綴陽台、窗台、桌案等處，自然高雅，頗受人們喜愛。群生植株布置溫室沙漠植物景觀，效果也很好。','400','99',1,'ss_C02_1.png','ss_C02_2.png','ss_C02_3.png',NULL,3,NULL,NULL,NULL),(18,3,'九輪塔','15 x 15 x 15 (H)','九輪塔又名霜百合，莖軸極短，不向高處生長。葉片肥厚，先端向內側彎曲，呈輪狀抱莖，整個植株呈柱狀，葉面白粒成行排列。平時是深綠色，在陽光下會慢慢變成紫紅色。','350','99',1,'ss_C04_1.png','ss_C04_2.png','ss_C04_3.png',NULL,2,NULL,NULL,NULL),(19,3,'鬼切丸','2 x 2 x 12 (H)','鬼切丸喜歡溫暖、陽光充足的環境，能夠耐高溫，但怕寒冷，不能耐陰，對積水敏感。雖然有耐旱性格，但在陽光下過於曝曬也會停止生長。對土壤的要求喜疏鬆肥沃、排水良好、富含有機質的沙土。一般用煤渣、園土、河沙混合栽培。','350','99',1,'ss_C05_1.png','ss_C05_2.png','ss_C05_3.png',NULL,3,NULL,NULL,NULL),(20,4,'特葉玉蝶','10 x 10 x 5 (H)','玉蝶的每片葉型皆相當精緻，圓弧形的寬葉型、在最上方長出一小點尖尖的巧思！仔細看像朵白色的蓮花，太美了！而特葉玉蝶是在 1986 年培育出來的園藝種，因少見的葉面反向生長很受到大家喜愛！','250','99',1,'ss_D01_1.png','ss_D01_2.png','ss_D01_3.png',NULL,3,NULL,NULL,NULL),(21,4,'綠之鈴','2 x 2 x 8 (H)','圓圓小小的的可愛模樣，末端翹起尖尖的頭是正字標記，看到每顆小豌豆底下都有片半透明的小細節嗎？這是「窗」，主要是綠之鈴行光合作用的部分喔，很愛喝水但是卻不喜歡有太陽直射，最建議的種植環境是散光處、樹蔭下，夏天的直射陽光容易讓他瞬間乾掉，這點要特別注意喔！','400','99',1,'ss_D02_1.png','ss_D02_2.png','ss_D02_3.png																				',NULL,2,NULL,NULL,NULL),(22,5,'巴哥陶偶','7 x 4 x 5 (H)','醜萌界的代表，無辜的雙眼與捲捲尾巴，惹人憐愛，底部有裂痕，及交接處有一些小裂痕，不介意者在下單觸感部分光滑部分粗糙，手工捏製，獨一無二，您可以通過以適合手掌的可愛尺寸並排排列它們來創建一個可愛的空間。','50','99',1,'dd_01_1.png','dd_01_2.png','dd_01_3.png',NULL,0,NULL,NULL,NULL),(23,5,'鬧脾氣摩艾石像','5 x 5 x 6 (H)','鬧脾氣摩艾：「就是阿~真是令人生氣～！((鼓鼓...」--情緒就像天氣，生氣就如同一場雷雨，要先灑灑雨水打打雷，才能讓烏雲散去、雨過天晴。面對心理的情緒請不要假裝忽視它唷~人生總是有很多無奈的事情，老闆壓榨、情侶爭執、費盡心思的創作概念被人直接取用...嘖嘖！別憋著自己了~就是因為生氣所以更要爭氣！！ 鬧脾氣摩艾陪你一起忿忿不平～！','580','99',1,'dd_02_1.png','dd_02_2.png','dd_02_3.png',NULL,0,NULL,NULL,NULL),(24,5,'歐式路燈','5x 5 x 7 (H)','選用直立路燈或是彎彎路燈，搭配著小裝飾慢慢一邊種植一邊佈置，夜晚開啟小燈會照亮你的多肉叢林唷! 成品的路燈叢林多肉微景觀多既是美美的多肉園林，晚上可以開啟小小夜燈。好好照顧多肉植物，讓盆栽療癒身心吧!','350','99',1,'dd_03_1.png','dd_03_2.png','dd_03_3.png',NULL,0,NULL,NULL,NULL),(25,5,'水泥仙人掌','5 x 6 x 4 (H)','真設計水泥多肉植栽-鸞鳳玉（不是發糕！），以城市植人最高境界之「植物殺手」為創作需求導向，而延伸出的全水泥仿真設計盆栽，可以當作「純擺飾」、「擴香石」、「紙鎮」…等多功能用途。不須澆水即可擁有的仿真植感。','450','99',1,'dd_04_1.png','dd_04_2.png','dd_04_3.png',NULL,0,NULL,NULL,NULL),(26,5,'冒煙的小房子','7 x 4 x 3 (H)','煙囪裡冒出一股煙的白色小房子，靈感來自到西班牙南部的旅行。您可以通過以適合手掌的可愛尺寸並排排列它們來創建一個可愛的空間。','350','99',1,'dd_05_1.png','dd_05_2.png','dd_05_3.png',NULL,0,NULL,NULL,NULL),(27,5,'木製鯉魚旗','4 x 2 x 10 (H)','活用木頭原有的天然色彩加以組合，充分發輝木頭本身的質地與觸感，並以自然塗料的無著色潤飾方式製成的室內鯉魚旗。鯉魚旗的部分特地以充滿立體感的圓滾滾可愛身軀呈現，上端的風車則是做成能轉動的可動式設計。','450','99',1,'dd_06_1.png','dd_06_2.png','dd_06_3.png',NULL,0,NULL,NULL,NULL),(28,6,'白色世界','10 x 10 x 10 (H)','不論栽種綠色植物，多肉植物，擺放在桌上，陽台都能提升氣氛，水泥盆之特性，透氣且易排水，底部有開排水孔，每各盆都獨一無二，水泥有他獨特的氣孔，時而粗礦龜裂時而細緻光滑，跟我一樣喜歡水泥盆的朋友，不可錯過的作品。','550','99',1,'pp_01_1.png','pp_01_2.png','pp_01_3.png',NULL,0,NULL,NULL,NULL),(29,6,'雙色鑽石','15 x 15 x 20 (H)','盆器邊緣做內倒角設計，並以特殊媒材顏料搭配水泥的色調與質地，讓盆器擁有兩種紋理，像是水泥與白花崗岩的結合，更突顯了水泥的質感與特性。','680','99',1,'pp_02_1.png','pp_02_2.png','pp_02_2.png',NULL,0,NULL,NULL,NULL),(30,6,'小公寓','10 x 10 x 5 (H)','使用水泥為做盆的基礎材料，加上彩色的小磁磚，一盆盆的多肉公寓油然而生。生活其實一直都是很忙碌地在度過，當在遇到低潮時，看著陽台那小小的多肉植物園，其實真的會讓心情放鬆很多。','650','99',1,'pp_03_1.png','pp_03_2.png','pp_03_3.png',NULL,0,NULL,NULL,NULL),(31,6,'手拉坏半瓷','12 x 12 x 15 (H)','從揉土開始，每一件作品都是經由雙手拉坯或陶板成形，個個都留有獨特的手作溫度，能感受到手感溫潤的厚薄設計。跟翻模量產厚薄均一的器皿不同，一個個拉坯的作品可以近似卻無法完全複製，件件是孤品。這是人類手的限制，卻也是價值所在。拉坯完成的坯體，經歷800度素燒後，來到陶瓷器的「衣服」——釉藥。獨門不外傳的釉藥配方，經歷多次實驗改良，最終在1200度以上高溫燒成，作品通過層層考驗與淘汰後，來到了世上...','750','99',1,'pp_04_1.png','pp_04_2.png','pp_04_3.png',NULL,0,NULL,NULL,NULL),(32,6,'金色陛下','0 x 10 x 15 (H)','運用金色特殊媒材，讓原本冷調的水泥盆器在陽光下，自然散發出璀璨耀眼的光芒，當轉動不同角度，即可看到不同的色澤變化，象徵一份光芒與希望。使用特殊媒材顏料上色，仍會保留水泥紋理的斑駁感，並非無暇的光滑表面。','750','99',1,'pp_05_1.png','pp_05_2.png','pp_05_3.png',NULL,0,NULL,NULL,NULL),(33,6,'雙層鮮奶油','112 x 12 x 15 (H)','運用雙色水泥創造蛋糕的奶油層次，分有原味與鮮奶油口味，搭配療癒的仙人掌或多肉植物，就像可口的小圓蛋糕 ，讓自己創造一個可愛的蛋糕盆栽吧！每個小圓蛋糕的鮮奶油分佈無法相同，每款色調都只有一個。','550','99',1,'pp_06_1.png','pp_06_2.png','pp_06_3.png',NULL,0,NULL,NULL,NULL),(34,8,'幸福青鳥','10 x 10 (H)','一份禮物中扮演重要角色之一的肯定是卡片，然而傳統花禮的祝賀卡片總跳脫不出大紅大紫的告示感，我們為了這件事情特別為我們網路花店的祝賀卡片定義了一身新衣，提供客製化卡片服務，讓心內話能夠以更美好的姿態傳遞到收禮人心中。每購買一樣多肉產品，就會送一張客製化禮卡。而「客製化卡片」這項服務也是深受大家喜愛的，從每一句大家想要祝福的話就知道送禮人的用心。','20','99',1,'card_01.png','','',NULL,0,NULL,NULL,NULL),(35,8,'綠意盎然','10 x 10 (H)','一份禮物中扮演重要角色之一的肯定是卡片，然而傳統花禮的祝賀卡片總跳脫不出大紅大紫的告示感，我們為了這件事情特別為我們網路花店的祝賀卡片定義了一身新衣，提供客製化卡片服務，讓心內話能夠以更美好的姿態傳遞到收禮人心中。每購買一樣多肉產品，就會送一張客製化禮卡。而「客製化卡片」這項服務也是深受大家喜愛的，從每一句大家想要祝福的話就知道送禮人的用心。','20','99',1,'card_02.png','','',NULL,0,NULL,NULL,NULL),(36,8,'小草黃了','10 x 10 (H)','一份禮物中扮演重要角色之一的肯定是卡片，然而傳統花禮的祝賀卡片總跳脫不出大紅大紫的告示感，我們為了這件事情特別為我們網路花店的祝賀卡片定義了一身新衣，提供客製化卡片服務，讓心內話能夠以更美好的姿態傳遞到收禮人心中。每購買一樣多肉產品，就會送一張客製化禮卡。而「客製化卡片」這項服務也是深受大家喜愛的，從每一句大家想要祝福的話就知道送禮人的用心。','20','99',1,'card_03.png','','',NULL,0,NULL,NULL,NULL),(37,8,'銀色大地','10 x 10 (H)','一份禮物中扮演重要角色之一的肯定是卡片，然而傳統花禮的祝賀卡片總跳脫不出大紅大紫的告示感，我們為了這件事情特別為我們網路花店的祝賀卡片定義了一身新衣，提供客製化卡片服務，讓心內話能夠以更美好的姿態傳遞到收禮人心中。每購買一樣多肉產品，就會送一張客製化禮卡。而「客製化卡片」這項服務也是深受大家喜愛的，從每一句大家想要祝福的話就知道送禮人的用心。','20','99',1,'card_04.png','','',NULL,0,NULL,NULL,NULL);
/*!40000 ALTER TABLE `PRODUCT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `RETURN_QUESTION`
--

DROP TABLE IF EXISTS `RETURN_QUESTION`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `RETURN_QUESTION` (
  `returnQuesNO` int NOT NULL,
  `returnQuesDate` datetime DEFAULT NULL,
  `returnQues_status` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `FK_RETURN_QUESTION_memberNO` int DEFAULT NULL,
  PRIMARY KEY (`returnQuesNO`),
  KEY `memberNO_idx` (`FK_RETURN_QUESTION_memberNO`),
  CONSTRAINT `FK_RETURN_QUESTION_memberNO` FOREIGN KEY (`FK_RETURN_QUESTION_memberNO`) REFERENCES `MEMBER` (`memberNO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RETURN_QUESTION`
--

LOCK TABLES `RETURN_QUESTION` WRITE;
/*!40000 ALTER TABLE `RETURN_QUESTION` DISABLE KEYS */;
/*!40000 ALTER TABLE `RETURN_QUESTION` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `RETURN_QUESTION_DETAIL`
--

DROP TABLE IF EXISTS `RETURN_QUESTION_DETAIL`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `RETURN_QUESTION_DETAIL` (
  `returnQuesDetailNO` int NOT NULL,
  `returnQuesDetail_article` varchar(100) COLLATE utf8_bin NOT NULL,
  `returnQuesDetail_reply` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `FK_RETURN_QUESTION_DETAIL_returnQuesNO` int DEFAULT NULL,
  PRIMARY KEY (`returnQuesDetailNO`),
  KEY `FK_RETURN_QUESTION_DETAIL_returnQuesNO_idx` (`FK_RETURN_QUESTION_DETAIL_returnQuesNO`),
  CONSTRAINT `FK_RETURN_QUESTION_DETAIL_returnQuesNO` FOREIGN KEY (`FK_RETURN_QUESTION_DETAIL_returnQuesNO`) REFERENCES `RETURN_QUESTION` (`returnQuesNO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RETURN_QUESTION_DETAIL`
--

LOCK TABLES `RETURN_QUESTION_DETAIL` WRITE;
/*!40000 ALTER TABLE `RETURN_QUESTION_DETAIL` DISABLE KEYS */;
/*!40000 ALTER TABLE `RETURN_QUESTION_DETAIL` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-19 17:36:54
