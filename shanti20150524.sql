DROP TABLE IF EXISTS `ad_positions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ad_positions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` enum('Top Large Leaderboard Ad Box-1 (w:h-1170px:auto)','Small Rectangle Ad Box-1 (w:h-270px:190px)','Vertical Rectangle Ad Box-1 (w:h-270px:500px)','Large Rectangle Ad Box-1 (w:h-370px:155px)','Double Billboard Ad Box-1 (w:h-770px:155px)') COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('Image','Flash') COLLATE utf8_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `duration` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rate` double(10,2) DEFAULT NULL,
  `maximum_ad_limit` tinyint(4) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `sort` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ad_positions`
--

LOCK TABLES `ad_positions` WRITE;
/*!40000 ALTER TABLE `ad_positions` DISABLE KEYS */;
INSERT INTO `ad_positions` VALUES (1,'Double Billboard Ad Box-1 (w:h-770px:155px)','Flash','Test1','311',201.00,11,1,NULL,'2015-03-06 23:07:47','2015-03-07 03:28:05'),(2,'Top Large Leaderboard Ad Box-1 (w:h-1170px:auto)','Image','Test','3',20.00,1,1,NULL,'2015-03-07 03:19:39','2015-05-23 20:43:43'),(3,'Vertical Rectangle Ad Box-1 (w:h-270px:500px)','Image','Test','3',201.00,3,1,NULL,'2015-03-07 04:14:34','2015-05-23 20:43:59'),(4,'Top Large Leaderboard Ad Box-1 (w:h-1170px:auto)','Image','Test','31',20.00,11,1,NULL,'2015-03-14 04:12:17','2015-05-23 20:44:09'),(5,'Small Rectangle Ad Box-1 (w:h-270px:190px)','Image','Test','31',20.00,11,1,NULL,'2015-05-23 20:45:54','2015-05-23 20:52:39'),(6,'Small Rectangle Ad Box-1 (w:h-270px:190px)','Image','Test','31',20.00,1,1,NULL,'2015-05-23 20:46:37','2015-05-23 20:52:58');
/*!40000 ALTER TABLE `ad_positions` ENABLE KEYS */;
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
  `bnTitle` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_category`
--

LOCK TABLES `article_category` WRITE;
/*!40000 ALTER TABLE `article_category` DISABLE KEYS */;
INSERT INTO `article_category` VALUES (1,0,'Facebook FQL query sometimes providing error in response1','Facebook FQL query sometimes providing error in response1','Restaurants & Bars',1,0,'2015-03-06 07:43:08','2015-05-22 20:02:55','রেষ্টুরেন্ট ও পানশালা'),(3,0,'Tentative burger on the trendy street','Tentative burger on the trendy street','Club & Concert',1,0,'2015-03-14 03:39:30','2015-05-22 20:03:46','ক্লাব ও কনসার্ট'),(4,0,'Science & Culture','Science & Culture','Science & Culture',1,0,'2015-04-14 04:16:49','2015-05-22 20:04:04','বিজ্ঞান ও সংস্কৃতি'),(5,0,'','','Shopping',1,0,'2015-04-14 04:17:18','2015-05-22 20:04:40','কেনাকাটা'),(6,0,'','','City life',1,0,'2015-04-14 04:17:40','2015-05-22 20:04:55','শহরের জীবন'),(7,0,'','','Guides',1,0,'2015-04-14 04:18:13','2015-05-22 20:05:27','গাইড'),(8,0,'','','Museum',1,0,'2015-04-14 04:18:45','2015-04-14 04:18:45',''),(9,0,'','','Lunch',1,0,'2015-04-14 04:19:04','2015-04-14 04:19:04',''),(10,0,'','','Activities',1,0,'2015-04-14 04:19:31','2015-04-14 04:19:31',''),(11,0,'','','Brunch',1,0,'2015-04-14 04:19:55','2015-04-14 04:19:55',''),(12,0,'','','Weekend',1,0,'2015-04-14 04:20:14','2015-04-14 04:20:14',''),(13,0,'','','Child',1,0,'2015-04-14 04:20:40','2015-04-14 04:20:40',''),(14,0,'','','KICKOFF & CONFERENCE',1,0,'2015-04-14 04:21:36','2015-04-14 04:21:36',''),(15,0,'Children','Children','Children',1,0,'2015-05-02 04:46:28','2015-05-02 04:46:28',''),(16,0,'Advertising','Advertising','Advertising',1,0,'2015-05-02 04:47:05','2015-05-02 04:47:05','');
/*!40000 ALTER TABLE `article_category` ENABLE KEYS */;
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
  `media` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `featured` tinyint(1) DEFAULT NULL,
  `featured_title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `strike_price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `featured_details` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `more_from_dhaka` tinyint(1) DEFAULT NULL,
  `list_tag` tinyint(1) DEFAULT NULL,
  `editorChoice` tinyint(1) NOT NULL DEFAULT '0',
  `bnTitle` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `bnShort_detail` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `bnDetails` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `articles_article_category_id_foreign` (`article_category_id`),
  KEY `articles_address_id_foreign` (`address_id`),
  CONSTRAINT `articles_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`),
  CONSTRAINT `articles_article_category_id_foreign` FOREIGN KEY (`article_category_id`) REFERENCES `article_category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'Snoopy on the catwalk - Calvin Kelins and Swarovski','<p>Some of the world&#39;s most famous fashion designer dress cartoon character Snoopy and his sister Belle. On Tuesday, the exhibition &quot;Snoopy &amp; Belle in Fashion&quot; premiere in Stockholm. - Visitors will get the feeling that they are in the middle of a chic fashion photoshoot, said Matt Murphy, exhibition display producer.</p>\r\n','<p>Some of the world&#39;s most famous fashion designer dress cartoon character Snoopy and his sister Belle. On Tuesday, the exhibition &quot;Snoopy &amp; Belle in Fashion&quot; premiere in Stockholm. - Visitors will get the feeling that they are in the middle of a chic fashion photoshoot, said Matt Murphy, exhibition display producer.</p>\r\n\r\n<p>Some of the world&#39;s most famous fashion designer dress cartoon character Snoopy and his sister Belle. On Tuesday, the exhibition &quot;Snoopy &amp; Belle in Fashion&quot; premiere in Stockholm. - Visitors will get the feeling that they are in the middle of a chic fashion photoshoot, said Matt Murphy, exhibition display producer.</p>\r\n\r\n<p>Some of the world&#39;s most famous fashion designer dress cartoon character Snoopy and his sister Belle. On Tuesday, the exhibition &quot;Snoopy &amp; Belle in Fashion&quot; premiere in Stockholm. - Visitors will get the feeling that they are in the middle of a chic fashion photoshoot, said Matt Murphy, exhibition display producer.</p>\r\n\r\n<p>Some of the world&#39;s most famous fashion designer dress cartoon character Snoopy and his sister Belle. On Tuesday, the exhibition &quot;Snoopy &amp; Belle in Fashion&quot; premiere in Stockholm. - Visitors will get the feeling that they are in the middle of a chic fashion photoshoot, said Matt Murphy, exhibition display producer.</p>\r\n','www.pmi.com','011123628462',NULL,NULL,'10','asd','asdasd',0,1,NULL,1,2,'2015-03-07 07:44:12','2015-05-22 21:13:52','1426346126-article-1-pic-2.png',0,'test','899','766','Its a great deal!',0,0,0,'চবিতে সংঘর্ষ, দুই হল থেকে পিছু হটেছে শিবির','<p>শুক্রবার বিকেলে দুই পক্ষের মধ্যে সংঘর্ষের এক পর্যায়ে বিশ্ববিদ্যালয়ের এফ রহমান ও আলাওল হল থেকে সরে গেছে শিবির কর্মীরা। পরে হল দুটিতে অবস্থান নিয়েছে ছাত্রলীগ।</p>\r\n','<p>হাটহাজারী থানার পরিদর্শক (তদন্ত) সালাহউদ্দিন বিডিনিউজ টোয়েন্টিফোর ডটকমকে বলেন, ছাত্রলীগের কয়েকজন কর্মী বিকালে আলাওল হলের মাঠে খেলতে গেলে শিবির কর্মীরা তাদের &lsquo;উত্যক্ত&rsquo; করে।</p>\r\n\r\n<p>&ldquo;পরে এ ঘটনায় ছাত্রলীগ কর্মীরা আলাওল হলের মাঠে জড়ো হলে শিবির কর্মীরা হল দুটি ছেড়ে চলে যায়।&rdquo;</p>\r\n\r\n<p>বর্তমানে ক্যাম্পাসের পরিস্থিতি স্বাভাবিক আছে বলে জানান তিনি।</p>\r\n\r\n<p>প্রত্যক্ষদর্শী কয়েক শিক্ষার্থী জানান, ছাত্রলীগের কয়েকজন কর্মী বিকেল ৪টার দিকে আলাওল হলের মাঠে ক্রিকেট খেলতে গেলে শিবির কর্মীরা মিজানুর রহমান নামে এক ছাত্রলীগকর্মীকে হুমকি দেয়।</p>\r\n\r\n<p>এ খবর ক্যাম্পাসে ছড়িয়ে পড়লে ছাত্রলীগকর্মীরা ওই মাঠে এসে জড়ো হয়।</p>\r\n'),(2,'Snoopy on the catwalk - test','<p>Some of the world&#39;s most famous fashion designer dress cartoon character Snoopy and his sister Belle. On Tuesday, the exhibition &quot;Snoopy &amp; Belle in Fashion&quot; premiere in Stockholm. - Visitors will get the feeling that they are in the middle of a chic fashion photoshoot, said Matt Murphy, exhibition display producer.</p>\r\n','<p>Some of the world&#39;s most famous fashion designer dress cartoon character Snoopy and his sister Belle. On Tuesday, the exhibition &quot;Snoopy &amp; Belle in Fashion&quot; premiere in Stockholm. - Visitors will get the feeling that they are in the middle of a chic fashion photoshoot, said Matt Murphy, exhibition display producer.Some of the world&#39;s most famous fashion designer dress cartoon character Snoopy and his sister Belle. On Tuesday, the exhibition &quot;Snoopy &amp; Belle in Fashion&quot; premiere in Stockholm. - Visitors will get the feeling that they are in the middle of a chic fashion photoshoot, said Matt Murphy, exhibition display producer.Some of the world&#39;s most famous fashion designer dress cartoon character Snoopy and his sister Belle. On Tuesday, the exhibition &quot;Snoopy &amp; Belle in Fashion&quot; premiere in Stockholm. - Visitors will get the feeling that they are in the middle of a chic fashion photoshoot, said Matt Murphy, exhibition display producer.Some of the world&#39;s most famous fashion designer dress cartoon character Snoopy and his sister Belle. On Tuesday, the exhibition &quot;Snoopy &amp; Belle in Fashion&quot; premiere in Stockholm. - Visitors will get the feeling that they are in the middle of a chic fashion photoshoot, said Matt Murphy, exhibition display producer.Some of the world&#39;s most famous fashion designer dress cartoon character Snoopy and his sister Belle. On Tuesday, the exhibition &quot;Snoopy &amp; Belle in Fashion&quot; premiere in Stockholm. - Visitors will get the feeling that they are in the middle of a chic fashion photoshoot, said Matt Murphy, exhibition display producer.</p>\r\n','www.gmail.com','342342354',NULL,NULL,'3','Some of the world\'s most famous ','Some of the world\'s most famous ',0,1,NULL,3,3,'2015-03-14 03:44:20','2015-05-22 21:16:44','1426346079-article-1-pic-1.png',0,'','','','',0,0,0,'বদলে গেল বনকিশোর','<p>বাড়ি থেকে বের হলেই বিদ্যালয়। দেখা যায়, কিন্তু সরাসরি যাওয়া যায় না। কারণ, মাঝখানে বড়াল নদ। নদের পশ্চিম পারে খোর্দগোবিন্দপুর আর পূর্ব পারে বনকিশোর গ্রাম। বনকিশোরের ১১ যুবক এবার এই দুই গ্রামের ব্যবধান ঘুচিয়েছেন।&nbsp;</p>\r\n','<p>তাঁদের উদ্যোগে স্বেচ্ছাশ্রমে তৈরি হয়েছে সেতু। নাম &lsquo;শিক্ষা সেতু&rsquo;।<br />\r\nরাজশাহীর চারঘাট উপজেলার বনকিশোর গ্রামের স্বেচ্ছাসেবী সংগঠন স্টুডেন্টস ক্রিয়েটিভ ভেঞ্চার। ১১ জন মিলে সংগঠনটি করায় এটি &lsquo;ওরা ১১ জন&rsquo; নামেই বেশি পরিচিত। ২০০৫ সালে গড়ে তোলা হয় সংগঠনটি। গত ২৪ এপ্রিল নানা আয়োজনে হয়ে গেল তার ১০ বছর&nbsp;</p>\r\n\r\n<p>তাঁদের উদ্যোগে স্বেচ্ছাশ্রমে তৈরি হয়েছে সেতু। নাম &lsquo;শিক্ষা সেতু&rsquo;।<br />\r\nরাজশাহীর চারঘাট উপজেলার বনকিশোর গ্রামের স্বেচ্ছাসেবী সংগঠন স্টুডেন্টস ক্রিয়েটিভ ভেঞ্চার। ১১ জন মিলে সংগঠনটি করায় এটি &lsquo;ওরা ১১ জন&rsquo; নামেই বেশি পরিচিত। ২০০৫ সালে গড়ে তোলা হয় সংগঠনটি। গত ২৪ এপ্রিল নানা আয়োজনে হয়ে গেল তার ১০ বছর&nbsp;</p>\r\n'),(3,'Turkisk trerättersmiddag i city','<p>Turkisk trer&auml;ttersmiddag i city</p>\r\n','<p>Tatueringsborttagarna har br&aring;da tider. Stockholmarna vill bli kvitt delfiner och andra otrendiga tatueringar inf&ouml;r sommaren. Se h&auml;r i bildspelet hur laserblekningen g&aring;r till.<br />\r\nShopping &amp; Mode<br />\r\nNu ryker delfinerna &ndash; se tatueringarna vi vill slippa</p>\r\n\r\n<p>Sommaren n&auml;rmar sig och stockholmarna ser fram mot att b&ouml;rja lufta sina gaddningar. Om de nu inte blivit suddiga, otrendiga eller sk&auml;mmiga. Allt fler bes&ouml;ker klinker som hj&auml;lper till att ta bort o&ouml;nskade motiv.<br />\r\n&ndash; Stockholmare lasrar just nu bort latinska ordspr&aring;k s&auml;ger Leo Fred&eacute;n, tatueringsborttagare.</p>\r\n','www.gmail.com','12345671',NULL,NULL,'12','Tatueringsborttagarna har bråda tider. Stockholmarna vill bli kvitt delfiner och andra otrendiga tatueringar inför sommaren. Se här i bildspelet hur laserblekningen går till.\r\nShopping & Mode\r\nNu ryker delfinerna – se tatueringarna vi vill slippa\r\n\r\nSomma','Tatueringsborttagarna har bråda tider. Stockholmarna vill bli kvitt delfiner och andra otrendiga tatueringar inför sommaren. Se här i bildspelet hur laserblekningen går till.\r\nShopping & Mode\r\nNu ryker delfinerna – se tatueringarna vi vill slippa\r\n\r\nSomma',0,1,NULL,1,4,'2015-03-14 05:52:43','2015-05-22 21:18:24','1426341173-article-3-pic-1.png',1,'Ta smaklökarna på en resa till Ottomanska riket','150','200','Dealen gäller t.o.m. 2015-04-04 00:00',0,0,0,'আজ সম্মেলন','<p>​প্রায় ২৩ বছর পর আজ শনিবার বগুড়ার শিবগঞ্জ উপজেলা যুবলীগের ত্রিবার্ষিক সম্মেলন অনুষ্ঠিত হবে।</p>\r\n','<p>প্রায় ২৩ বছর পর আজ শনিবার বগুড়ার শিবগঞ্জ উপজেলা যুবলীগের ত্রিবার্ষিক সম্মেলন অনুষ্ঠিত হবে। উপজেলা যুবলীগের সাত-আটজনের সঙ্গে কথা বলে জানা গেছে, উপজেলা শহীদ মিনার চত্বরে আজ অনুষ্ঠিতব্য সম্মেলনে প্রধান অতিথি হিসেবে উপস্থিত থাকবেন যুবলীগের সাংগঠনিক সম্পাদক আবু আহম্মেদ নাসিম, বিশেষ অতিথি হিসেবে থাকবেন বগুড়া জেলা যুবলীগের সভাপতি মঞ্জুরুল আলম, উপজেলা আওয়ামী লীগের সভাপতি আজিজুল হক, সাধারণ সম্পাদক মোস্তাফিজার রহমান, প্রধান বক্তা হিসেবে থাকবেন জেলা যুবলীগের সাধারণ সম্পাদক সাগর কুমার রায়। সম্মেলনে যুবলীগের পদপ্রত্যাশী নেতারা বিভিন্নভাবে চেষ্টা-তদবির করছেন। শিবগঞ্জ (বগুড়া) প্রতিনিধি|</p>\r\n'),(4,'Allt om Stockholm avslöjar: Här bor Martin Beck','<p>Allt om Stockholm avsl&ouml;jar: H&auml;r bor Martin Beck</p>\r\n','<p>Allt om Stockholm avsl&ouml;jar: H&auml;r bor Martin Beck</p>\r\n','www.gmail.com','342342354',NULL,NULL,'1','Allt om Stockholm avslöjar: Här bor Martin Beck','Allt om Stockholm avslöjar: Här bor Martin Beck',0,1,NULL,1,7,'2015-03-14 23:56:01','2015-05-22 21:19:57','1426406166-article-4-pic-1.png',0,'','','','',1,0,0,'কাঁচপুরে উচ্ছেদ অভিযানে লাভবান আ.লীগ নেতারা','<p><a href=\"http://www.prothom-alo.com/bangladesh/article/535177/%E0%A6%95%E0%A6%BE%E0%A6%81%E0%A6%9A%E0%A6%AA%E0%A7%81%E0%A6%B0%E0%A7%87-%E0%A6%89%E0%A6%9A%E0%A7%8D%E0%A6%9B%E0%A7%87%E0%A6%A6-%E0%A6%85%E0%A6%AD%E0%A6%BF%E0%A6%AF%E0%A6%BE%E0%A6%A8%E0%A7%87-%E0%A6%B2%E0%A6%BE%E0%A6%AD%E0%A6%AC%E0%A6%BE%E0%A6%A8-%E0%A6%86.%E0%A6%B2%E0%A7%80%E0%A6%97-%E0%A6%A8%E0%A7%87%E0%A6%A4%E0%A6%BE%E0%A6%B0%E0%A6%BE\">কাঁচপুরে উচ্ছেদ অভিযানে লাভবান আ.লীগ নেতারা</a>&nbsp;<a href=\"http://www.prothom-alo.com/bangl','<p><a href=\"http://www.prothom-alo.com/bangladesh/article/535177/%E0%A6%95%E0%A6%BE%E0%A6%81%E0%A6%9A%E0%A6%AA%E0%A7%81%E0%A6%B0%E0%A7%87-%E0%A6%89%E0%A6%9A%E0%A7%8D%E0%A6%9B%E0%A7%87%E0%A6%A6-%E0%A6%85%E0%A6%AD%E0%A6%BF%E0%A6%AF%E0%A6%BE%E0%A6%A8%E0%A7%87-%E0%A6%B2%E0%A6%BE%E0%A6%AD%E0%A6%AC%E0%A6%BE%E0%A6%A8-%E0%A6%86.%E0%A6%B2%E0%A7%80%E0%A6%97-%E0%A6%A8%E0%A7%87%E0%A6%A4%E0%A6%BE%E0%A6%B0%E0%A6%BE\">কাঁচপুরে উচ্ছেদ অভিযানে লাভবান আ.লীগ নেতারাকাঁচপুরে উচ্ছেদ অভিযানে লাভবান আ.লীগ নেতারাকাঁচপুরে উচ্ছেদ অভিযানে লাভবান আ.লীগ নেতারাকাঁচপুরে উচ্ছেদ অভিযানে লাভবান আ.লীগ নেতারাকাঁচপুরে উচ্ছেদ অভিযানে লাভবান আ.লীগ নেতারাকাঁচপুরে উচ্ছেদ অভিযানে লাভবান আ.লীগ নেতারাকাঁচপুরে উচ্ছেদ অভিযানে লাভবান আ.লীগ নেতারাকাঁচপুরে উচ্ছেদ অভিযানে লাভবান আ.লীগ নেতারাকাঁচপুরে উচ্ছেদ অভিযানে লাভবান আ.লীগ নেতারাকাঁচপুরে উচ্ছেদ অভিযানে লাভবান আ.লীগ নেতারাকাঁচপুরে উচ্ছেদ অভিযানে লাভবান আ.লীগ নেতারা</a></p>\r\n'),(5,'Museum i Stockholm','<p><strong>Stockholm har ett fantastiskt utbud av museer. Strosa runt p&aring; egen hand, ta med familjen eller &ouml;verraska din partner. H&auml;r finns inspiration f&ouml;r alla smaker</strong></p>\r\n','<h2>G&aring; till sj&ouml;ss</h2>\r\n\r\n<p>Sj&ouml;manstatueringar, havsliv och m&auml;ngder av fartygsmodeller. P&aring; Sj&ouml;historiska kan du l&auml;ra dig mer om m&auml;nniskans historia till sj&ouml;ss. V&auml;lkommen!</p>\r\n','http://www.sjohistoriska.se/','60173939910',NULL,NULL,'3','Stockholm har ett fantastiskt utbud av museer. Strosa runt på egen hand, ta med familjen eller överraska din partner. Här finns inspiration för alla smaker','Stockholm har ett fantastiskt utbud av museer. Strosa runt på egen hand, ta med familjen eller överraska din partner. Här finns inspiration för alla smaker',0,1,NULL,1,8,'2015-03-21 02:26:22','2015-05-22 21:24:13','1426933587-Sjohistoriska.jpg',0,'','','','',0,1,0,'সার্কাসের হাতির হামলায় নিহত ৩','<p>বাগেরহাটের মোল্লারহাটে সার্কাসের হাতির হামলায় তিনজন নিহত হয়েছে। আজ শনিবার সকালে এ ঘটনা ঘটে। ভোর পাঁচটা থেকে সকাল সাড়ে সাতটা পর্যন্ত প্রায় আড়াই ঘণ্টা ধরে হাতিটি তিনটি গ্রামে ঢুকে তাণ্ডব চালায়।</p>\r\n','<p>বাগেরহাটের মোল্লারহাটে সার্কাসের হাতির হামলায় তিনজন নিহত হয়েছে। আজ শনিবার সকালে এ ঘটনা ঘটে। ভোর পাঁচটা থেকে সকাল সাড়ে সাতটা পর্যন্ত প্রায় আড়াই ঘণ্টা ধরে হাতিটি তিনটি গ্রামে ঢুকে তাণ্ডব চালায়।</p>\r\n\r\n<p>নিহত তিনজন হলেন, মনোয়ারা বেগম (৪৫), কুসুম বিশ্বাস (৬১) ও মিজানুর রহমান ফকির (৪৫)।</p>\r\n\r\n<p>পুলিশ ও এলাকাবাসীর ভাষ্য, পার্শ্ববর্তী গোপালগঞ্জ জেলার গোনারপাড়া এলাকায় ভোরে সার্কাসের হাতিকে নিয়ে মাহুত ঘুরতে বের হয়। হঠাৎ হাতিটি উত্তেজিত হয়ে পড়ে। উত্তেজিত হাতিটি মধুমতী নদী পার হয়ে মোল্লারহাটের উদয়পুর ইউনিয়নের গারপা গ্রামে ঢুকে পড়ে। ভোর সাড়ে পাঁচটার দিকে গ্রামে ঢুকে হাতিটি ভাঙচুর চালায়। এ সময় মনোয়ারা বেগমের ওপর হাতিটি হামলা চালায়। তাঁকে খুলনা মেডিকেল কলেজ হাসপাতালে নেওয়া হয়। সেখানে তিনি মারা যান।</p>\r\n'),(6,'Fotografiska varnar för sin nya utställning','<p><strong>The artist Andres Serrano exhibit on photographic. His works are so provocative that the Photographic themselves warn that minors need parental guidance and they have hired a security company that got to do a risk analysis.<br />\r\n- We have not received any threats, but we have followed the recommendations we received, says Jens Hollingby of Photographic.</strong></p>\r\n','<p>The artist Andres Serrano&#39;s career is punctuated by resurrection. His work is unconventional to say the least, and usually goes under themes such as religion, sex and death. Many of his pictures depict taboo subjects, which has created strong reactions from the audience.<br />\r\n- Andres Serrano photograph body fluids such as urine, semen, blood, and feces. He creates abstract beautiful photographs of things that are traditionally considered to be ugly. When he exhibited at Kulturen 2007 vandalized his exhibition of masked men with crowbars and axes. They distributed among flight &quot;against decadence and for a healthier culture,&quot; says Jens Hollingby, the Photographic.</p>\r\n\r\n<h3>&quot;Have hired security company&quot;</h3>\r\n\r\n<p>Between March 13 to May 17 is the turn of Photographic in Stockholm to showcase the works. Because of the incident in Lund has Photographic chosen to take steps to ensure visitors&#39; safety.<br />\r\n- We have not received any threats, but before the show, we still have hired a security firm to develop a risk analysis. The risk is considered low and we have followed the recommendations we received, says Jens Hollingby.</p>\r\n\r\n<h3>Do not want to live in censorship</h3>\r\n\r\n<p>Although the images motive is provocative to many consider Photographic it is important that they do not censor Andres Serrano visions.<br />\r\n- Throughout history, artists have been those who have been silenced first. There is nothing new. For us it&#39;s incredibly important to stand up for the role of the artist in an open democratic society. We simply do not want to live in a society where ideas and thoughts censored because of fear, says Jens Hollingby.</p>\r\n\r\n<p><strong>How crazy is the exhibition compared to your other shows?</strong><br />\r\n- I would rather describe Andres Serrano as clever than crazy. He changes our preconceptions, which is one of art&#39;s mission.</p>\r\n\r\n<p><strong>Is there a picture of a woman urinating in a man&#39;s mouth?</strong><br />\r\n- The answer to that question is yes.</p>\r\n\r\n<p><strong>What have you got for reactions from the exhibition visitors?</strong><br />\r\n- So far we have only received good responses to the exhibition. But it is clear that Andres Serrano&#39;s controversial and his art is not likely to fall all the taste.</p>\r\n\r\n<p><strong>Do you have any age restriction on the show?</strong><br />\r\n- We have no age limit but recommends that children see the show in an adult companion, says Jens Hollingby.</p>\r\n\r\n<p>LOUISE &Aring;STR&Ouml;M</p>\r\n','www.gmail.com','60173939910',NULL,NULL,'30','Konstnären Andres Serrano ställer ut på fotografiska. Hans verk är så provocerande att Fotografiska själva varnar för att minderåriga behöver vuxet sällskap och de har anlitat ett säkerhetsföretag som fått göra en riskanalys.\r\n– Vi har inte mottagit några','Konstnären Andres Serrano ställer ut på fotografiska. Hans verk är så provocerande att Fotografiska själva varnar för att minderåriga behöver vuxet sällskap och de har anlitat ett säkerhetsföretag som fått göra en riskanalys.\r\n– Vi har inte mottagit några',1,1,NULL,1,10,'2015-03-21 04:00:49','2015-05-24 06:58:16','1426939260-piss_christ.jpg',1,'great deal','111','112','Its great deal!',1,0,0,'এবার সারা দেশে পরিবহন ধর্মঘটের হুমকি','<p>ঢাকা-আরিচা-খুলনা রুটে দূরপাল্লার বাস চলাচলে ধর্মঘটের চতুর্থ দিনে সারা দেশে পরিবহন ধর্মঘটের হুমকি দিয়েছে দক্ষিণ-পশ্চিমাঞ্চল সড়ক পরিবহন মালিক শ্রমিক ঐক্য পরিষদ। আজ শনিবার দুপুরে যশোর শ্রমিক ভবনে আয়োজিত এক সংবাদ সম্মেলনে এ হুমকি দেওয়া হয়।<br />\r\n১৯ মে সকালে ফরিদপুরের মধুখালীতে ঢাকা থেকে&nbsp;</p>\r\n','<p>ঢাকা-আরিচা-খুলনা রুটে দূরপাল্লার বাস চলাচলে ধর্মঘটের চতুর্থ দিনে সারা দেশে পরিবহন ধর্মঘটের হুমকি দিয়েছে দক্ষিণ-পশ্চিমাঞ্চল সড়ক পরিবহন মালিক শ্রমিক ঐক্য পরিষদ। আজ শনিবার দুপুরে যশোর শ্রমিক ভবনে আয়োজিত এক সংবাদ সম্মেলনে এ হুমকি দেওয়া হয়।<br />\r\n১৯ মে সকালে ফরিদপুরের মধুখালীতে ঢাকা থেকে বেনাপোলগামী সোহাগ পরিবহনের একটি বাসে ডাকাতির ঘটনা ঘটে। ওই বাসের ২২ জন যাত্রীর অভিযোগের ভিত্তিতে পুলিশ ওই বাসের চালক ও সহকারীকে আটক করে এবং তাঁদের বিরুদ্ধে ডাকাতির মামলা হয়। এরপর গ্রেপ্তারকৃতদের মুক্তিসহ তিন দফা দাবিতে ২০ মে থেকে খুলনা অঞ্চলের পরিবহন মালিক ও শ্রমিকেরা অনির্দিষ্টকালে</p>\r\n'),(7,'Tentative burger on the trendy street','<p>After a visit to Burgers &amp; Beer Tasting The Council may establish the following: It fits the word junk food better than the term fast food.</p>\r\n','<p>After a visit to Burgers &amp; Beer Tasting The Council may establish the following: It fits the word junk food better than the term fast food.</p>\r\n\r\n<p>After a visit to Burgers &amp; Beer Tasting The Council may establish the following: It fits the word junk food better than the term fast food.</p>\r\n\r\n<p>After a visit to Burgers &amp; Beer Tasting The Council may establish the following: It fits the word junk food better than the term fast food.</p>\r\n\r\n<p>After a visit to Burgers &amp; Beer Tasting The Council may establish the following: It fits the word junk food better than the term fast food.</p>\r\n','www.pmi.com','011123628462',NULL,NULL,'89','After a visit to Burgers & Beer Tasting The Council may establish the following: It fits the word junk food better than the term fast food.','After a visit to Burgers & Beer Tasting The Council may establish the following: It fits the word junk food better than the term fast food.',1,1,NULL,1,11,'2015-03-22 04:04:36','2015-04-19 07:14:30','1427025888-article-2-pic-1.png',0,'','','','',0,0,0,'','',''),(10,'Key event simulation test','<p>zczxc</p>\r\n','<p>xzcxcz</p>\r\n','','',NULL,NULL,'9','zxc','xzcz',0,1,NULL,1,14,'2015-04-19 02:05:37','2015-05-23 08:17:34','1429437950-dj-danger.jpg',1,'','','','',0,0,0,'গ্যাস-সরবরাহ-লাইনে-আগুন','<p>নারায়ণগঞ্জের সিদ্ধিরগঞ্জে ২১০ মেগাওয়াট ক্ষমতাসম্পন্ন তাপবিদ্যুৎ কেন্দ্রের অভ্যন্তরে তিতাস গ্যাস ট্রান্সমিশন অ্যান্ড ডিস্ট্রিবিউশন কোম্পানি গ্যাস সরবরাহ লাইনে গতকাল শুক্রবার ভোরে অগ্নিকাণ্ডের ঘটনা ঘটেছে।</p>\r\n','<p>নারায়ণগঞ্জের সিদ্ধিরগঞ্জে ২১০ মেগাওয়াট ক্ষমতাসম্পন্ন তাপবিদ্যুৎ কেন্দ্রের অভ্যন্তরে তিতাস গ্যাস ট্রান্সমিশন অ্যান্ড ডিস্ট্রিবিউশন কোম্পানি গ্যাস সরবরাহ লাইনে গতকাল শুক্রবার ভোরে অগ্নিকাণ্ডের ঘটনা ঘটেছে। এতে পুড়ে গেছে মূল্যবান যন্ত্রপাতি। বন্ধ হয়ে গেছে গোদনাইল ও পঞ্চবটির গ্যাস সরবরাহ। তিতাসের সহকারী প্রকৌশলী মো. আজগর আগুনে আনুমানিক ৫০ লাখ টাকার ক্ষতি হয়েছে বলে দাবি করেছেন। তিনি জানান, কেন্দ্রের ভেতরে অবস্থিত তিতাসের গ্যাস সরবরাহ লাইনে গ্যাসের ওভার ফ্লো হওয়ার সময় স্পার্ক থেকে আগুন লেগে যায়। নারায়ণগঞ্জের হাজীগঞ্জ ফায়ার সার্ভিসের দুটি ও ডেমরা ফায়ার সার্ভিসের দুটি ইউনিট প্রায় এক ঘণ্টা চেষ্টা চালিয়ে আগুন নিয়ন্ত্রণে আনে। সিদ্ধিরগঞ্জ থানার এসআই জসিম উদ্দিন জানান, আগুন নেভাতে গিয়ে তিতাসের কর্মচারী অলিউল্লাহ, রিপন ও রাহুল আমিন আহত হয়েছেন। নারায়ণগঞ্জ প্রতিনিধি|</p>\r\n');
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
INSERT INTO `countries` VALUES (1,'Bangladesh','',1,0,'2015-03-06 07:41:19','2015-03-06 07:41:19');
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
  CONSTRAINT `divisions_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`)
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
-- Table structure for table `event_languages`
--

DROP TABLE IF EXISTS `event_languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `info_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `page_view_count` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `sort` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_id` int(10) unsigned NOT NULL,
  `language_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `event_languages_event_id_foreign` (`event_id`),
  KEY `event_languages_language_id_foreign` (`language_id`),
  CONSTRAINT `event_languages_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`),
  CONSTRAINT `event_languages_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_languages`
--

LOCK TABLES `event_languages` WRITE;
/*!40000 ALTER TABLE `event_languages` DISABLE KEYS */;
INSERT INTO `event_languages` VALUES (1,'i samarbete med','i samarbete med','<p>ভাষা শহীদদের জন্য বিশেষ মোনাজাতে খালেদা</p>\r\n',NULL,'ভাষা শহীদদের জন্য বিশেষ মোনাজাতে খালেদা','ভাষা শহীদদের জন্য বিশেষ মোনাজাতে খালেদা',1,NULL,1,1,'2015-03-07 07:41:43','2015-03-14 08:48:52'),(2,'Half the price of the food is best Whopper meal','Half the price of the food is best Whopper meal','<h2>Half the price of the food is best Whopper meal</h2>\r\n',NULL,'Half the price of the food is best Whopper meal','Half the price of the food is best Whopper meal',1,NULL,2,1,'2015-03-14 08:21:43','2015-03-14 08:35:18'),(3,'হাতির সেলফি!','দূর থেকে সেলফি তুলবেন, অথচ সেলফি স্টিক নিতে ভুলে গেছেন! তাহলে আশপাশে থাকা হাতির শরণাপন্ন হতে পারেন।','<p>দূর থেকে সেলফি তুলবেন, অথচ সেলফি স্টিক নিতে ভুলে গেছেন! তাহলে আশপাশে থাকা হাতির শরণাপন্ন হতে পারেন। ভ্রমণে বেড়িয়ে ইচ্ছে করে না হলেও এই হাতিই কিন্তু দূর থেকে সেলফি তুলে দিয়েছেন কানাডার ভ্যাঙ্কুভারের ক্রিশ্চিয়ান লেব্যান্সের। আর হাতির তোলা এই সেলফিকে সাইবার জগতে এখন বলা হচ্ছে &lsquo;এলফি&rsquo;।</p>\r\n',NULL,'Half the price of the food is best Whopper meal','Half the price of the food is best Whopper meal',1,NULL,3,2,'2015-03-14 08:50:50','2015-05-23 07:37:05');
/*!40000 ALTER TABLE `event_languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `info_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `entrance` enum('Free','Paid') COLLATE utf8_unicode_ci DEFAULT NULL,
  `entrance_fees` double(8,2) DEFAULT NULL,
  `opening_date` datetime DEFAULT NULL,
  `ending_date` datetime DEFAULT NULL,
  `opening_hours` time DEFAULT NULL,
  `ending_hours` time DEFAULT NULL,
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
  `media` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_minute` tinyint(1) DEFAULT NULL,
  `featured` tinyint(1) DEFAULT NULL,
  `featured_title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `strike_price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `featured_details` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bnTitle` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `bnInfo_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `bnDetails` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `events_article_category_id_foreign` (`article_category_id`),
  KEY `events_address_id_foreign` (`address_id`),
  CONSTRAINT `events_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`),
  CONSTRAINT `events_article_category_id_foreign` FOREIGN KEY (`article_category_id`) REFERENCES `article_category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,'In samarbete med','<p>ভাষা শহীদদের জন্য বিশেষ মোনাজাতে খালেদা</p>\r\n','i samarbete med','www.gmail.com','12345671','Paid',20.00,'2015-03-07 00:00:00','2015-03-14 02:00:00',NULL,NULL,'10','ভাষা শহীদদের জন্য বিশেষ মোনাজাতে খালেদা','ভাষা শহীদদের জন্য বিশেষ মোনাজাতে খালেদা',NULL,1,NULL,1,1,'2015-03-07 07:41:43','2015-05-23 20:04:58','1426351737-article-2-pic-2.png',1,0,'Ta smaklökarna på en resa till Ottomanska riket','150','200','Dealen gäller t.o.m. 2015-04-04 00:00','','',''),(2,'Half the price of the food is best Whopper meal','<h2>Half the price of the food is best Whopper meal</h2>\r\n','Half the price of the food is best Whopper meal','www.gmail.com','12345671','',0.00,'2015-03-15 00:00:00','2015-03-15 01:00:00',NULL,NULL,'7','Half the price of the food is best Whopper meal','Half the price of the food is best Whopper meal',NULL,1,NULL,3,5,'2015-03-14 08:21:43','2015-05-02 19:18:25','1426350929-article-2-pic-1.png',1,0,'Ta smaklökarna på en resa till Ottomanska riket','50','100','Dealen gäller t.o.m. 2015-04-04 00:00','','',''),(3,'Exhibition: Costume at Lydmar','<p>Half the price of the food is best Whopper meal</p>\r\n','Half the price of the food is best Whopper meal','www.gmail.com','342342354','',20.00,'2015-03-15 02:00:00','2015-03-24 00:50:00',NULL,NULL,'24','Half the price of the food is best Whopper meal','Half the price of the food is best Whopper meal',NULL,1,NULL,1,6,'2015-03-14 08:50:50','2015-05-23 20:53:57','1426351858-article-2-pic-3.png',0,1,'Ta smaklökarna på en resa till Ottomanska riket','150','200','Dealen gäller t.o.m. 2015-04-04 00:00','হাতির সেলফি!','দূর থেকে সেলফি তুলবেন, অথচ সেলফি স্টিক নিতে ভুলে গেছেন! তাহলে আশপাশে থাকা হাতির শরণাপন্ন হতে পারেন।','<p>দূর থেকে সেলফি তুলবেন, অথচ সেলফি স্টিক নিতে ভুলে গেছেন! তাহলে আশপাশে থাকা হাতির শরণাপন্ন হতে পারেন। ভ্রমণে বেড়িয়ে ইচ্ছে করে না হলেও এই হাতিই কিন্তু দূর থেকে সেলফি তুলে দিয়েছেন কানাডার ভ্যাঙ্কুভারের ক্রিশ্চিয়ান লেব্যান্সের। আর হাতির তোলা এই সেলফিকে সাইবার জগতে এখন বলা হচ্ছে &lsquo;এলফি&rsquo;।</p>\r\n');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `footer_sliders`
--

DROP TABLE IF EXISTS `footer_sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `footer_sliders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `footer_sliders`
--

LOCK TABLES `footer_sliders` WRITE;
/*!40000 ALTER TABLE `footer_sliders` DISABLE KEYS */;
INSERT INTO `footer_sliders` VALUES (1,'1-bumper480x270.png','Test',1,'2015-05-02 04:23:04','2015-05-02 04:23:04'),(2,'2-dj-danger.jpg','Test events',1,'2015-05-02 04:23:18','2015-05-02 04:23:19');
/*!40000 ALTER TABLE `footer_sliders` ENABLE KEYS */;
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
INSERT INTO `languages` VALUES (1,'English',0,1,'2015-03-06 07:41:19','2015-03-06 07:41:19'),(2,'Bengali',0,1,'2015-03-06 07:41:19','2015-03-06 07:41:19');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `local`
--

DROP TABLE IF EXISTS `local`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `local` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `local`
--

LOCK TABLES `local` WRITE;
/*!40000 ALTER TABLE `local` DISABLE KEYS */;
INSERT INTO `local` VALUES (1,'2015-05-08 10:24:50','2015-05-08 10:24:50',NULL,'Jinzhu'),(2,NULL,NULL,NULL,'Mujibur');
/*!40000 ALTER TABLE `local` ENABLE KEYS */;
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
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2015_02_20_055845_create_roles_table',1),('2015_02_20_060314_users_roles_foreign_key',1),('2015_02_20_103332_create_article_category_table',1),('2015_02_21_095928_create_languages_table',1),('2015_02_21_101746_create_article_categories_language_table',1),('2015_02_21_180601_create_countries_table',1),('2015_02_21_180602_create_divisions_table',1),('2015_02_21_180603_create_districts_table',1),('2015_02_21_180604_create_thanas_table',1),('2015_02_21_180606_create_addresses_table',1),('2015_02_21_180614_create_articles_table',1),('2015_02_25_125158_create_article_languages_table',1),('2015_02_28_062115_add_language_id_article_languages_table',1),('2015_02_28_160541_create-events-table',1),('2015_02_28_162147_create-event-languages-table',1),('2015_03_06_155658_create_ad_positions_table',2),('2015_03_06_165521_create_ads_table',3),('2015_03_14_130054_add_media_to_articles_table',4),('2015_03_14_154619_add_media_to_events_table',5),('2015_03_15_072439_add_extra_flag_articles_table',6),('2015_04_19_052034_create_tags_table',7),('2015_04_19_060137_add_field_bangaTag_Tags_table',8),('2015_04_19_103857_add_editor_choice_articles_table',9),('2015_04_26_161326_create_footer_sliders_table',10),('2015_05_23_034726_add_bnTitle_to_articles',11),('2015_05_23_035204_add_bnTitle_to_events',12),('2015_05_23_035442_add_bnTitle_to_article_category',13),('2015_05_24_042111_add_position_ads_table',14);
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
INSERT INTO `roles` VALUES (1,'Administrator','admin','2015-03-06 07:41:19','2015-03-06 07:41:19'),(2,'Moderator','moderate','2015-03-06 07:41:19','2015-03-06 07:41:19'),(3,'User','user','2015-03-06 07:41:19','2015-03-06 07:41:19');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tagBengali` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tags_tag_unique` (`tag`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'restaurants1','2015-04-19 00:53:22','2015-04-19 01:09:26','restaurants1'),(2,'Bars','2015-04-19 01:24:51','2015-04-19 01:24:51','Bars'),(3,'Museum','2015-04-19 01:25:15','2015-04-19 01:25:15','Museum');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Mujibur Rahman','mujib.rahman.bd@gmail.com','$2y$10$IYZzxdxtIusvB/wycroX0.v0WeSB2cWhJalvQ4A6YNkOCjteANbQy','Mr.','','','','','','','','','','',1,1,'','zeoLfR5ubCrQInV2mX6E4QSdFwsafEpFSvYByKnFnjrgep3Bas1Wt3ZGSFNE','2015-03-06 07:41:19','2015-03-14 03:30:31');
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

-- Dump completed on 2015-05-24 23:15:08

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addresses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `thana_id` int(10) unsigned NOT NULL,
  `district_id` int(10) unsigned NOT NULL,
  `division_id` int(10) unsigned NOT NULL,
  `country_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `addresses_thana_id_foreign` (`thana_id`),
  KEY `addresses_district_id_foreign` (`district_id`),
  KEY `addresses_division_id_foreign` (`division_id`),
  KEY `addresses_country_id_foreign` (`country_id`),
  CONSTRAINT `addresses_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  CONSTRAINT `addresses_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`),
  CONSTRAINT `addresses_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`),
  CONSTRAINT `addresses_thana_id_foreign` FOREIGN KEY (`thana_id`) REFERENCES `thanas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
INSERT INTO `addresses` VALUES (1,'20 mohini mohon das lane',1,204,22,2,1,'2015-03-07 07:41:43','2015-03-14 08:48:52'),(2,'20 mohini mohon das lane',1,205,22,2,1,'2015-03-07 07:44:12','2015-05-22 21:13:52'),(3,'Gulshan, dupidi tower',1,188,20,2,1,'2015-03-14 03:44:20','2015-05-22 21:16:44'),(4,'20 mohini mohon das lane',1,166,17,1,1,'2015-03-14 05:52:43','2015-05-22 21:18:24'),(5,'Sutrapur, kusai lama1',1,318,37,4,1,'2015-03-14 08:21:42','2015-03-14 08:35:18'),(6,'Lydmar Hotel',1,182,19,2,1,'2015-03-14 08:50:50','2015-05-23 07:37:04'),(7,'Gulshan, dupidi tower',1,182,19,2,1,'2015-03-14 23:56:01','2015-05-22 21:19:56'),(8,'9/A, Dhanmondi, Dhaka',1,199,21,2,1,'2015-03-21 02:26:22','2015-05-22 21:24:12'),(9,'9/A, Dhanmondi, Dhaka',1,181,19,2,1,'2015-03-21 03:58:12','2015-03-21 03:58:12'),(10,'9/A, Dhanmondi, Dhaka',1,224,24,2,1,'2015-03-21 04:00:49','2015-05-23 06:44:36'),(11,'20 mohini mohon das lane',1,266,29,3,1,'2015-03-22 04:04:36','2015-04-19 02:38:01'),(14,'9/A, Dhanmondi, Dhaka',1,58,3,1,1,'2015-04-19 02:05:37','2015-05-22 21:35:54');
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;
--
-- Table structure for table `ads`
--

DROP TABLE IF EXISTS `ads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `short_desc` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_paid` tinyint(4) DEFAULT NULL,
  `is_lifetime` tinyint(4) DEFAULT NULL,
  `is_pending` tinyint(4) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `sort` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ad_position_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `position` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ads_ad_position_id_foreign` (`ad_position_id`),
  KEY `ads_user_id_foreign` (`user_id`),
  CONSTRAINT `ads_ad_position_id_foreign` FOREIGN KEY (`ad_position_id`) REFERENCES `ad_positions` (`id`),
  CONSTRAINT `ads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ads`
--

LOCK TABLES `ads` WRITE;
/*!40000 ALTER TABLE `ads` DISABLE KEYS */;
INSERT INTO `ads` VALUES (2,'2-2-right-add-1.png','asas','<p>asasas</p>\r\n','2015-03-14 00:00:00','2015-03-31 00:00:00','www.gmail.com','asas','asas',1,1,1,1,NULL,2,1,'2015-03-07 03:19:39','2015-05-23 20:43:43','Top-Right'),(3,'3-right-add-2.png','asa','<p>sasa</p>\r\n','2015-03-12 00:00:00','2015-08-07 00:00:00','www.gmail.com1','as','as',1,1,0,1,NULL,3,1,'2015-03-07 04:14:34','2015-05-23 20:44:00','Top-Right'),(4,'4-right-add-3.png','Test','<p><a href=\"http://www.alltomstockholm.se/guider/article4122074.aos\">Det finns ingen konstform eller annan underh&aring;llning som ger dig s&aring; mycket skratt f&ouml;r pengarna, s&auml;ger M&aring;rten Andersson. </a></p>\r\n','2015-03-14 00:00:00','2015-03-21 00:00:00','www.gmail.com',' Det finns ingen konstform eller annan underhållning som ger dig så mycket skratt för pengarna, säger Mårten Andersson. ',' Det finns ingen konstform eller annan underhållning som ger dig så mycket skratt för pengarna, säger Mårten Andersson. ',0,1,0,1,NULL,4,1,'2015-03-14 04:12:17','2015-05-23 20:44:10','Top-Right'),(5,'5-3rdcol-add-1.png','aa','<p>aa</p>\r\n','2015-05-24 00:00:00','2015-05-24 00:00:00','http://www.sjohistoriska.se/','','',0,0,0,1,NULL,5,1,'2015-05-23 20:45:54','2015-05-23 20:52:39','Bottom-Right'),(6,'6-3rdcol-add-3.png','xzZ','<p>zxz</p>\r\n','2015-05-24 00:00:00','2015-05-24 00:00:00','www.gmail.com','','',0,0,0,1,NULL,6,1,'2015-05-23 20:46:37','2015-05-23 20:52:58','Bottom-Right');
/*!40000 ALTER TABLE `ads` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_categories_language`
--

LOCK TABLES `article_categories_language` WRITE;
/*!40000 ALTER TABLE `article_categories_language` DISABLE KEYS */;
INSERT INTO `article_categories_language` VALUES (1,0,'রেষ্টুরেন্ট ও পানশালা','রেষ্টুরেন্ট ও পানশালা','রেষ্টুরেন্ট ও পানশালা',1,0,1,1,'2015-03-06 07:43:08','2015-05-22 20:02:56'),(2,0,'রেষ্টুরেন্ট ও পানশালা','রেষ্টুরেন্ট ও পানশালা','রেষ্টুরেন্ট ও পানশালা',1,0,1,1,'2015-03-07 07:42:47','2015-05-22 20:02:56'),(3,0,'ক্লাব ও কনসার্ট','ক্লাব ও কনসার্ট','ক্লাব ও কনসার্ট',1,0,3,1,'2015-03-14 03:39:31','2015-05-22 20:03:46'),(4,0,'বিজ্ঞান ও সংস্কৃতি','বিজ্ঞান ও সংস্কৃতি','বিজ্ঞান ও সংস্কৃতি',1,0,4,1,'2015-04-14 04:16:49','2015-05-22 20:04:05'),(5,0,'কেনাকাটা','কেনাকাটা','কেনাকাটা',1,0,5,1,'2015-04-14 04:17:18','2015-05-22 20:04:40'),(6,0,'','','শহরের জীবন',1,0,6,1,'2015-04-14 04:17:40','2015-05-22 20:04:55'),(7,0,'','','গাইড',1,0,7,1,'2015-04-14 04:18:13','2015-05-22 20:05:27'),(8,0,'','','Museum',1,0,8,1,'2015-04-14 04:18:45','2015-04-14 04:18:45'),(9,0,'','','Lunch',1,0,9,1,'2015-04-14 04:19:04','2015-04-14 04:19:04'),(10,0,'','','Activities',1,0,10,1,'2015-04-14 04:19:32','2015-04-14 04:19:32'),(11,0,'','','Brunch',1,0,11,1,'2015-04-14 04:19:55','2015-04-14 04:19:55'),(12,0,'','','Weekend',1,0,12,1,'2015-04-14 04:20:15','2015-04-14 04:20:15'),(13,0,'','','Child',1,0,13,1,'2015-04-14 04:20:40','2015-04-14 04:20:40'),(14,0,'','','KICKOFF & CONFERENCE',1,0,14,1,'2015-04-14 04:21:36','2015-04-14 04:21:36'),(15,0,'Children','Children','Children',1,0,15,1,'2015-05-02 04:46:29','2015-05-02 04:46:29'),(16,0,'Advertising','Advertising','Advertising',1,0,16,1,'2015-05-02 04:47:05','2015-05-02 04:47:05');
/*!40000 ALTER TABLE `article_categories_language` ENABLE KEYS */;
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
  `language_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `article_languages_article_id_foreign` (`article_id`),
  KEY `article_languages_language_id_foreign` (`language_id`),
  CONSTRAINT `article_languages_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  CONSTRAINT `article_languages_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_languages`
--

LOCK TABLES `article_languages` WRITE;
/*!40000 ALTER TABLE `article_languages` DISABLE KEYS */;
INSERT INTO `article_languages` VALUES (1,'চবিতে সংঘর্ষ, দুই হল থেকে পিছু হটেছে শিবির','<p>শুক্রবার বিকেলে দুই পক্ষের মধ্যে সংঘর্ষের এক পর্যায়ে বিশ্ববিদ্যালয়ের এফ রহমান ও আলাওল হল থেকে সরে গেছে শিবির কর্মীরা। পরে হল দুটিতে অবস্থান নিয়েছে ছাত্রলীগ।</p>\r\n','<p>হাটহাজারী থানার পরিদর্শক (তদন্ত) সালাহউদ্দিন বিডিনিউজ টোয়েন্টিফোর ডটকমকে বলেন, ছাত্রলীগের কয়েকজন কর্মী বিকালে আলাওল হলের মাঠে খেলতে গেলে শিবির কর্মীরা তাদের &lsquo;উত্যক্ত&rsquo; করে।</p>\r\n\r\n<p>&ldquo;পরে এ ঘটনায় ছাত্রলীগ কর্মীরা আলাওল হলের মাঠে জড়ো হলে শিবির কর্মীরা হল দুটি ছেড়ে চলে যায়।&rdquo;</p>\r\n\r\n<p>বর্তমানে ক্যাম্পাসের পরিস্থিতি স্বাভাবিক আছে বলে জানান তিনি।</p>\r\n\r\n<p>প্রত্যক্ষদর্শী কয়েক শিক্ষার্থী জানান, ছাত্রলীগের কয়েকজন কর্মী বিকেল ৪টার দিকে আলাওল হলের মাঠে ক্রিকেট খেলতে গেলে শিবির কর্মীরা মিজানুর রহমান নামে এক ছাত্রলীগকর্মীকে হুমকি দেয়।</p>\r\n\r\n<p>এ খবর ক্যাম্পাসে ছড়িয়ে পড়লে ছাত্রলীগকর্মীরা ওই মাঠে এসে জড়ো হয়।</p>\r\n',NULL,'asdasd','sadsda',1,NULL,1,'2015-03-07 07:44:12','2015-05-22 21:13:52',2),(2,'বদলে গেল বনকিশোর','<p>বাড়ি থেকে বের হলেই বিদ্যালয়। দেখা যায়, কিন্তু সরাসরি যাওয়া যায় না। কারণ, মাঝখানে বড়াল নদ। নদের পশ্চিম পারে খোর্দগোবিন্দপুর আর পূর্ব পারে বনকিশোর গ্রাম। বনকিশোরের ১১ যুবক এবার এই দুই গ্রামের ব্যবধান ঘুচিয়েছেন।&nbsp;</p>\r\n','<p>তাঁদের উদ্যোগে স্বেচ্ছাশ্রমে তৈরি হয়েছে সেতু। নাম &lsquo;শিক্ষা সেতু&rsquo;।<br />\r\nরাজশাহীর চারঘাট উপজেলার বনকিশোর গ্রামের স্বেচ্ছাসেবী সংগঠন স্টুডেন্টস ক্রিয়েটিভ ভেঞ্চার। ১১ জন মিলে সংগঠনটি করায় এটি &lsquo;ওরা ১১ জন&rsquo; নামেই বেশি পরিচিত। ২০০৫ সালে গড়ে তোলা হয় সংগঠনটি। গত ২৪ এপ্রিল নানা আয়োজনে হয়ে গেল তার ১০ বছর&nbsp;</p>\r\n\r\n<p>তাঁদের উদ্যোগে স্বেচ্ছাশ্রমে তৈরি হয়েছে সেতু। নাম &lsquo;শিক্ষা সেতু&rsquo;।<br />\r\nরাজশাহীর চারঘাট উপজেলার বনকিশোর গ্রামের স্বেচ্ছাসেবী সংগঠন স্টুডেন্টস ক্রিয়েটিভ ভেঞ্চার। ১১ জন মিলে সংগঠনটি করায় এটি &lsquo;ওরা ১১ জন&rsquo; নামেই বেশি পরিচিত। ২০০৫ সালে গড়ে তোলা হয় সংগঠনটি। গত ২৪ এপ্রিল নানা আয়োজনে হয়ে গেল তার ১০ বছর&nbsp;</p>\r\n',NULL,'Some of the world\'s most famous ','Some of the world\'s most famous ',1,NULL,2,'2015-03-14 03:44:20','2015-05-22 21:16:44',2),(3,'আজ সম্মেলন','<p>​প্রায় ২৩ বছর পর আজ শনিবার বগুড়ার শিবগঞ্জ উপজেলা যুবলীগের ত্রিবার্ষিক সম্মেলন অনুষ্ঠিত হবে।</p>\r\n','<p>প্রায় ২৩ বছর পর আজ শনিবার বগুড়ার শিবগঞ্জ উপজেলা যুবলীগের ত্রিবার্ষিক সম্মেলন অনুষ্ঠিত হবে। উপজেলা যুবলীগের সাত-আটজনের সঙ্গে কথা বলে জানা গেছে, উপজেলা শহীদ মিনার চত্বরে আজ অনুষ্ঠিতব্য সম্মেলনে প্রধান অতিথি হিসেবে উপস্থিত থাকবেন যুবলীগের সাংগঠনিক সম্পাদক আবু আহম্মেদ নাসিম, বিশেষ অতিথি হিসেবে থাকবেন বগুড়া জেলা যুবলীগের সভাপতি মঞ্জুরুল আলম, উপজেলা আওয়ামী লীগের সভাপতি আজিজুল হক, সাধারণ সম্পাদক মোস্তাফিজার রহমান, প্রধান বক্তা হিসেবে থাকবেন জেলা যুবলীগের সাধারণ সম্পাদক সাগর কুমার রায়। সম্মেলনে যুবলীগের পদপ্রত্যাশী নেতারা বিভিন্নভাবে চেষ্টা-তদবির করছেন। শিবগঞ্জ (বগুড়া) প্রতিনিধি|</p>\r\n',NULL,'Tatueringsborttagarna har bråda tider. Stockholmarna vill bli kvitt delfiner och andra otrendiga tatueringar inför sommaren. Se här i bildspelet hur laserblekningen går till.\r\nShopping & Mode\r\nNu ryker delfinerna – se tatueringarna vi vill slippa\r\n\r\nSomma','Tatueringsborttagarna har bråda tider. Stockholmarna vill bli kvitt delfiner och andra otrendiga tatueringar inför sommaren. Se här i bildspelet hur laserblekningen går till.\r\nShopping & Mode\r\nNu ryker delfinerna – se tatueringarna vi vill slippa\r\n\r\nSomma',1,NULL,3,'2015-03-14 05:52:43','2015-05-22 21:18:24',2),(4,'কাঁচপুরে উচ্ছেদ অভিযানে লাভবান আ.লীগ নেতারা','<p><a href=\"http://www.prothom-alo.com/bangladesh/article/535177/%E0%A6%95%E0%A6%BE%E0%A6%81%E0%A6%9A%E0%A6%AA%E0%A7%81%E0%A6%B0%E0%A7%87-%E0%A6%89%E0%A6%9A%E0%A7%8D%E0%A6%9B%E0%A7%87%E0%A6%A6-%E0%A6%85%E0%A6%AD%E0%A6%BF%E0%A6%AF%E0%A6%BE%E0%A6%A8%E0%A7%87-%E0%A6%B2%E0%A6%BE%E0%A6%AD%E0%A6%AC%E0%A6%BE%E0%A6%A8-%E0%A6%86.%E0%A6%B2%E0%A7%80%E0%A6%97-%E0%A6%A8%E0%A7%87%E0%A6%A4%E0%A6%BE%E0%A6%B0%E0%A6%BE\">কাঁচপুরে উচ্ছেদ অভিযানে লাভবান আ.লীগ নেতারা</a>&nbsp;<a href=\"http://www.prothom-alo.com/bangl','<p><a href=\"http://www.prothom-alo.com/bangladesh/article/535177/%E0%A6%95%E0%A6%BE%E0%A6%81%E0%A6%9A%E0%A6%AA%E0%A7%81%E0%A6%B0%E0%A7%87-%E0%A6%89%E0%A6%9A%E0%A7%8D%E0%A6%9B%E0%A7%87%E0%A6%A6-%E0%A6%85%E0%A6%AD%E0%A6%BF%E0%A6%AF%E0%A6%BE%E0%A6%A8%E0%A7%87-%E0%A6%B2%E0%A6%BE%E0%A6%AD%E0%A6%AC%E0%A6%BE%E0%A6%A8-%E0%A6%86.%E0%A6%B2%E0%A7%80%E0%A6%97-%E0%A6%A8%E0%A7%87%E0%A6%A4%E0%A6%BE%E0%A6%B0%E0%A6%BE\">কাঁচপুরে উচ্ছেদ অভিযানে লাভবান আ.লীগ নেতারাকাঁচপুরে উচ্ছেদ অভিযানে লাভবান আ.লীগ নেতারাকাঁচপুরে উচ্ছেদ অভিযানে লাভবান আ.লীগ নেতারাকাঁচপুরে উচ্ছেদ অভিযানে লাভবান আ.লীগ নেতারাকাঁচপুরে উচ্ছেদ অভিযানে লাভবান আ.লীগ নেতারাকাঁচপুরে উচ্ছেদ অভিযানে লাভবান আ.লীগ নেতারাকাঁচপুরে উচ্ছেদ অভিযানে লাভবান আ.লীগ নেতারাকাঁচপুরে উচ্ছেদ অভিযানে লাভবান আ.লীগ নেতারাকাঁচপুরে উচ্ছেদ অভিযানে লাভবান আ.লীগ নেতারাকাঁচপুরে উচ্ছেদ অভিযানে লাভবান আ.লীগ নেতারাকাঁচপুরে উচ্ছেদ অভিযানে লাভবান আ.লীগ নেতারা</a></p>\r\n',NULL,'Allt om Stockholm avslöjar: Här bor Martin Beck','Allt om Stockholm avslöjar: Här bor Martin Beck',1,NULL,4,'2015-03-14 23:56:01','2015-05-22 21:19:57',2),(5,'সার্কাসের হাতির হামলায় নিহত ৩','<p>বাগেরহাটের মোল্লারহাটে সার্কাসের হাতির হামলায় তিনজন নিহত হয়েছে। আজ শনিবার সকালে এ ঘটনা ঘটে। ভোর পাঁচটা থেকে সকাল সাড়ে সাতটা পর্যন্ত প্রায় আড়াই ঘণ্টা ধরে হাতিটি তিনটি গ্রামে ঢুকে তাণ্ডব চালায়।</p>\r\n','<p>বাগেরহাটের মোল্লারহাটে সার্কাসের হাতির হামলায় তিনজন নিহত হয়েছে। আজ শনিবার সকালে এ ঘটনা ঘটে। ভোর পাঁচটা থেকে সকাল সাড়ে সাতটা পর্যন্ত প্রায় আড়াই ঘণ্টা ধরে হাতিটি তিনটি গ্রামে ঢুকে তাণ্ডব চালায়।</p>\r\n\r\n<p>নিহত তিনজন হলেন, মনোয়ারা বেগম (৪৫), কুসুম বিশ্বাস (৬১) ও মিজানুর রহমান ফকির (৪৫)।</p>\r\n\r\n<p>পুলিশ ও এলাকাবাসীর ভাষ্য, পার্শ্ববর্তী গোপালগঞ্জ জেলার গোনারপাড়া এলাকায় ভোরে সার্কাসের হাতিকে নিয়ে মাহুত ঘুরতে বের হয়। হঠাৎ হাতিটি উত্তেজিত হয়ে পড়ে। উত্তেজিত হাতিটি মধুমতী নদী পার হয়ে মোল্লারহাটের উদয়পুর ইউনিয়নের গারপা গ্রামে ঢুকে পড়ে। ভোর সাড়ে পাঁচটার দিকে গ্রামে ঢুকে হাতিটি ভাঙচুর চালায়। এ সময় মনোয়ারা বেগমের ওপর হাতিটি হামলা চালায়। তাঁকে খুলনা মেডিকেল কলেজ হাসপাতালে নেওয়া হয়। সেখানে তিনি মারা যান।</p>\r\n',NULL,'Stockholm har ett fantastiskt utbud av museer. Strosa runt på egen hand, ta med familjen eller överraska din partner. Här finns inspiration för alla smaker','Stockholm har ett fantastiskt utbud av museer. Strosa runt på egen hand, ta med familjen eller överraska din partner. Här finns inspiration för alla smaker',1,NULL,5,'2015-03-21 02:26:22','2015-05-22 21:24:13',2),(6,'এবার সারা দেশে পরিবহন ধর্মঘটের হুমকি','<p>ঢাকা-আরিচা-খুলনা রুটে দূরপাল্লার বাস চলাচলে ধর্মঘটের চতুর্থ দিনে সারা দেশে পরিবহন ধর্মঘটের হুমকি দিয়েছে দক্ষিণ-পশ্চিমাঞ্চল সড়ক পরিবহন মালিক শ্রমিক ঐক্য পরিষদ। আজ শনিবার দুপুরে যশোর শ্রমিক ভবনে আয়োজিত এক সংবাদ সম্মেলনে এ হুমকি দেওয়া হয়।<br />\r\n১৯ মে সকালে ফরিদপুরের মধুখালীতে ঢাকা থেকে&nbsp;</p>\r\n','<p>ঢাকা-আরিচা-খুলনা রুটে দূরপাল্লার বাস চলাচলে ধর্মঘটের চতুর্থ দিনে সারা দেশে পরিবহন ধর্মঘটের হুমকি দিয়েছে দক্ষিণ-পশ্চিমাঞ্চল সড়ক পরিবহন মালিক শ্রমিক ঐক্য পরিষদ। আজ শনিবার দুপুরে যশোর শ্রমিক ভবনে আয়োজিত এক সংবাদ সম্মেলনে এ হুমকি দেওয়া হয়।<br />\r\n১৯ মে সকালে ফরিদপুরের মধুখালীতে ঢাকা থেকে বেনাপোলগামী সোহাগ পরিবহনের একটি বাসে ডাকাতির ঘটনা ঘটে। ওই বাসের ২২ জন যাত্রীর অভিযোগের ভিত্তিতে পুলিশ ওই বাসের চালক ও সহকারীকে আটক করে এবং তাঁদের বিরুদ্ধে ডাকাতির মামলা হয়। এরপর গ্রেপ্তারকৃতদের মুক্তিসহ তিন দফা দাবিতে ২০ মে থেকে খুলনা অঞ্চলের পরিবহন মালিক ও শ্রমিকেরা অনির্দিষ্টকালে</p>\r\n',NULL,'','',1,NULL,6,'2015-03-21 04:00:49','2015-05-23 06:44:36',2),(7,'Tentative burger on the trendy street','<p>After a visit to Burgers &amp; Beer Tasting The Council may establish the following: It fits the word junk food better than the term fast food.</p>\r\n','<p>After a visit to Burgers &amp; Beer Tasting The Council may establish the following: It fits the word junk food better than the term fast food.</p>\r\n',NULL,'After a visit to Burgers & Beer Tasting The Council may establish the following: It fits the word junk food better than the term fast food.','After a visit to Burgers & Beer Tasting The Council may establish the following: It fits the word junk food better than the term fast food.',1,NULL,7,'2015-03-22 04:04:36','2015-04-19 02:38:02',2),(10,'গ্যাস-সরবরাহ-লাইনে-আগুন','<p>নারায়ণগঞ্জের সিদ্ধিরগঞ্জে ২১০ মেগাওয়াট ক্ষমতাসম্পন্ন তাপবিদ্যুৎ কেন্দ্রের অভ্যন্তরে তিতাস গ্যাস ট্রান্সমিশন অ্যান্ড ডিস্ট্রিবিউশন কোম্পানি গ্যাস সরবরাহ লাইনে গতকাল শুক্রবার ভোরে অগ্নিকাণ্ডের ঘটনা ঘটেছে।</p>\r\n','<p>নারায়ণগঞ্জের সিদ্ধিরগঞ্জে ২১০ মেগাওয়াট ক্ষমতাসম্পন্ন তাপবিদ্যুৎ কেন্দ্রের অভ্যন্তরে তিতাস গ্যাস ট্রান্সমিশন অ্যান্ড ডিস্ট্রিবিউশন কোম্পানি গ্যাস সরবরাহ লাইনে গতকাল শুক্রবার ভোরে অগ্নিকাণ্ডের ঘটনা ঘটেছে। এতে পুড়ে গেছে মূল্যবান যন্ত্রপাতি। বন্ধ হয়ে গেছে গোদনাইল ও পঞ্চবটির গ্যাস সরবরাহ। তিতাসের সহকারী প্রকৌশলী মো. আজগর আগুনে আনুমানিক ৫০ লাখ টাকার ক্ষতি হয়েছে বলে দাবি করেছেন। তিনি জানান, কেন্দ্রের ভেতরে অবস্থিত তিতাসের গ্যাস সরবরাহ লাইনে গ্যাসের ওভার ফ্লো হওয়ার সময় স্পার্ক থেকে আগুন লেগে যায়। নারায়ণগঞ্জের হাজীগঞ্জ ফায়ার সার্ভিসের দুটি ও ডেমরা ফায়ার সার্ভিসের দুটি ইউনিট প্রায় এক ঘণ্টা চেষ্টা চালিয়ে আগুন নিয়ন্ত্রণে আনে। সিদ্ধিরগঞ্জ থানার এসআই জসিম উদ্দিন জানান, আগুন নেভাতে গিয়ে তিতাসের কর্মচারী অলিউল্লাহ, রিপন ও রাহুল আমিন আহত হয়েছেন। নারায়ণগঞ্জ প্রতিনিধি|</p>\r\n',NULL,'zxczxc','xc',1,NULL,10,'2015-04-19 02:05:37','2015-05-22 21:35:54',2);
/*!40000 ALTER TABLE `article_languages` ENABLE KEYS */;
UNLOCK TABLES;
--
-- Table structure for table `article_tag`
--

DROP TABLE IF EXISTS `article_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `article_tag_article_id_foreign` (`article_id`),
  KEY `article_tag_tag_id_foreign` (`tag_id`),
  CONSTRAINT `article_tag_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  CONSTRAINT `article_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_tag`
--

LOCK TABLES `article_tag` WRITE;
/*!40000 ALTER TABLE `article_tag` DISABLE KEYS */;
INSERT INTO `article_tag` VALUES (13,7,1,'2015-04-19 02:38:02','2015-04-19 02:38:02'),(14,7,2,'2015-04-19 02:38:02','2015-04-19 02:38:02');
/*!40000 ALTER TABLE `article_tag` ENABLE KEYS */;
UNLOCK TABLES;

