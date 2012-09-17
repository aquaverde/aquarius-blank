-- Aquarius() SQL dump aquarius on localhost


-- Table `cache_dirs`: structure 
DROP TABLE IF EXISTS `cache_dirs`;
CREATE TABLE `cache_dirs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `cache_dirs`: 4 rows / 2 fields 
INSERT INTO `cache_dirs` VALUES
  (1, "download")
, (2, "pictures/header")
, (3, "pictures/richtext")
, (4, "pictures/content")
;

-- Table `content`: structure 
DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `node_id` int(11) NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lg` char(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cache_title` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cache_fields` text COLLATE utf8_unicode_ci,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_node_lg` (`node_id`,`lg`),
  KEY `active_index` (`active`),
  KEY `node_id` (`node_id`),
  FULLTEXT KEY `title` (`cache_title`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `content`: 26 rows / 6 fields 
INSERT INTO `content` VALUES
  (1, 1, "de", "aquarius-cms.ch", null, 1)
, (8, 9, "de", "Home", null, 1)
, (14, 15, "de", "Basic", null, 1)
, (15, 16, "de", "404", null, 1)
, (15, 17, "fr", "404", null, 1)
, (16, 18, "de", "Kontaktformular", null, 1)
, (16, 19, "fr", "Formulaire de contact", null, 1)
, (8, 20, "fr", "Accueil", null, 1)
, (1, 21, "fr", "aquarius-cms.ch", null, 1)
, (14, 22, "fr", "Basic", null, 1)
, (17, 23, "de", "Impressum", null, 1)
, (17, 24, "fr", "Impressum", null, 1)
, (18, 25, "de", "News", null, 1)
, (19, 26, "de", "News 1, 22.09.2011", null, 1)
, (20, 27, "de", "News 2, 23.09.2011", null, 1)
, (18, 28, "fr", "News", null, 1)
, (20, 29, "fr", "News 2, 23.09.2011", null, 1)
, (19, 30, "fr", "News 1, 22.09.2011", null, 1)
, (21, 31, "de", "Kontakt", null, 1)
, (21, 32, "fr", "Contact", null, 1)
, (22, 33, "de", "Carousel", null, 1)
, (23, 34, "de", "Gallery", null, 1)
, (23, 40, "fr", "Gallery", null, 1)
, (22, 39, "fr", "Carousel", null, 1)
, (24, 37, "de", "Karte", null, 1)
, (24, 38, "fr", "Carte", null, 1)
;

-- Table `content_field`: structure 
DROP TABLE IF EXISTS `content_field`;
CREATE TABLE `content_field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `weight` int(11) NOT NULL,
  `value` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contentid` (`content_id`),
  KEY `weight_index` (`weight`),
  KEY `name_index` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=20077 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `content_field`: 731 rows / 5 fields 
INSERT INTO `content_field` VALUES
  (164, 1, "title2", 0, "")
, (2, 1, "title2", 0, "")
, (3, 1, "htmltitle", 0, "")
, (4, 1, "metadescription", 0, "")
, (5, 1, "metakeywords", 0, "")
, (7, 1, "title2", 0, "")
, (8, 1, "htmltitle", 0, "")
, (9, 1, "metadescription", 0, "")
, (10, 1, "metakeywords", 0, "")
, (154, 1, "title2", 0, "")
, (155, 1, "htmltitle", 0, "")
, (156, 1, "metadescription", 0, "")
, (157, 1, "metakeywords", 0, "")
, (159, 1, "title2", 0, "")
, (222, 1, "title2", 0, "")
, (161, 1, "metadescription", 0, "")
, (162, 1, "metakeywords", 0, "")
, (1271, 1, "metadescription", 0, "")
, (166, 1, "metadescription", 0, "")
, (167, 1, "metakeywords", 0, "")
, (228, 1, "title2", 0, "")
, (225, 1, "metadescription", 0, "")
, (226, 1, "metakeywords", 0, "")
, (839, 1, "title2", 0, "")
, (1225, 1, "title2", 0, "")
, (232, 1, "metadescription", 0, "")
, (233, 1, "metakeywords", 0, "")
, (5018, 1, "footer_city", 0, "")
, (4999, 1, "footer_phone", 0, "")
, (1682, 1, "title2", 0, "")
, (843, 1, "metadescription", 0, "")
, (844, 1, "metakeywords", 0, "")
, (845, 1, "googleanalytics", 0, "")
, (1234, 1, "title2", 0, "")
, (1229, 1, "metadescription", 0, "")
, (1259, 1, "title2", 0, "")
, (1231, 1, "googleanalytics", 0, "")
, (1238, 1, "metadescription", 0, "")
, (1268, 1, "title2", 0, "")
, (1240, 1, "googleanalytics", 0, "")
, (1263, 1, "metadescription", 0, "")
, (1276, 1, "title2", 0, "")
, (1265, 1, "googleanalytics", 0, "")
, (1966, 1, "title2", 0, "")
, (1273, 1, "googleanalytics", 0, "")
, (1279, 1, "metadescription", 0, "")
, (1280, 1, "metakeywords", 0, "")
, (1281, 1, "googleanalytics", 0, "")
, (1687, 1, "googleanalytics", 0, "")
, (1686, 1, "metakeywords", 0, "")
, (1685, 1, "metadescription", 0, "")
, (4998, 1, "footer_city", 0, "")
, (1976, 1, "title2", 0, "")
, (2005, 1, "title2", 0, "")
, (1971, 1, "metadescription", 0, "")
, (1972, 1, "metakeywords", 0, "")
, (1973, 1, "googleanalytics", 0, "")
, (2015, 1, "title2", 0, "")
, (1981, 1, "metadescription", 0, "")
, (1982, 1, "metakeywords", 0, "")
, (1983, 1, "googleanalytics", 0, "")
, (2025, 1, "title2", 0, "")
, (2274, 1, "title2", 0, "")
, (2010, 1, "metadescription", 0, "")
, (2011, 1, "metakeywords", 0, "")
, (2012, 1, "googleanalytics", 0, "")
, (2020, 1, "metadescription", 0, "")
, (2021, 1, "metakeywords", 0, "")
, (2022, 1, "googleanalytics", 0, "")
, (2030, 1, "metadescription", 0, "")
, (2031, 1, "metakeywords", 0, "")
, (2032, 1, "googleanalytics", 0, "")
, (2283, 1, "title2", 0, "")
, (2291, 1, "title2", 0, "")
, (2279, 1, "metadescription", 0, "")
, (2280, 1, "metakeywords", 0, "")
, (2281, 1, "googleanalytics", 0, "")
, (2540, 1, "title2", 0, "")
, (2287, 1, "metadescription", 0, "")
, (2288, 1, "metakeywords", 0, "")
, (2289, 1, "googleanalytics", 0, "")
, (2619, 1, "title2", 0, "")
, (2296, 1, "metadescription", 0, "")
, (2297, 1, "metakeywords", 0, "")
, (2298, 1, "googleanalytics", 0, "")
, (5008, 1, "footer_city", 0, "")
, (2545, 1, "metadescription", 0, "")
, (2546, 1, "metakeywords", 0, "")
, (2547, 1, "googleanalytics", 0, "")
, (4952, 1, "googleanalytics", 0, "")
, (4996, 1, "footer_address", 0, "")
, (2632, 1, "title2", 0, "")
, (3267, 1, "title2", 0, "")
, (2628, 1, "metadescription", 0, "")
, (2629, 1, "metakeywords", 0, "")
, (2630, 1, "googleanalytics", 0, "")
, (2645, 1, "title2", 0, "")
, (3252, 1, "title2", 0, "")
, (2641, 1, "metadescription", 0, "")
, (2642, 1, "metakeywords", 0, "")
, (2643, 1, "googleanalytics", 0, "")
, (5009, 1, "footer_phone", 0, "")
, (2654, 1, "metadescription", 0, "")
, (2655, 1, "metakeywords", 0, "")
, (2656, 1, "googleanalytics", 0, "")
, (3260, 1, "metadescription", 0, "")
, (3261, 1, "metakeywords", 0, "")
, (3262, 1, "googleanalytics", 0, "")
, (3279, 1, "title2", 0, "")
, (3275, 1, "metadescription", 0, "")
, (3277, 1, "googleanalytics", 0, "")
, (3291, 1, "title2", 0, "")
, (3303, 1, "title2", 0, "")
, (3289, 1, "googleanalytics", 0, "")
, (4994, 1, "footer_name", 0, "")
, (4954, 1, "title2", 0, "")
, (3301, 1, "googleanalytics", 0, "")
, (3324, 1, "title2", 0, "")
, (4283, 1, "title2", 0, "")
, (3313, 1, "googleanalytics", 0, "")
, (4993, 1, "title2", 0, "")
, (4942, 1, "title2", 0, "")
, (3334, 1, "googleanalytics", 0, "")
, (5023, 1, "googleanalytics", 0, "")
, (5022, 1, "metakeywords", 0, "")
, (5021, 1, "metadescription", 0, "")
, (5020, 1, "htmltitle", 0, "")
, (4981, 1, "title2", 0, "")
, (4293, 1, "googleanalytics", 0, "")
, (5019, 1, "footer_phone", 0, "")
, (5013, 1, "googleanalytics", 0, "")
, (5017, 1, "footer_address", 0, "")
, (5015, 1, "title2", 0, "")
, (5016, 1, "footer_name", 0, "")
, (5003, 1, "googleanalytics", 0, "")
, (5007, 1, "footer_address", 0, "")
, (5005, 1, "title2", 0, "")
, (5006, 1, "footer_name", 0, "")
, (4991, 1, "googleanalytics", 0, "")
, (5302, 1, "title2", 0, "")
, (4964, 1, "googleanalytics", 0, "")
, (13979, 1, "footer_login", 0, "")
, (5288, 1, "title2", 0, "")
, (5343, 1, "title2", 0, "")
, (5311, 1, "title2", 0, "")
, (5291, 1, "htmltitle", 0, "")
, (5292, 1, "metadescription", 0, "")
, (5293, 1, "metakeywords", 0, "")
, (5294, 1, "googleanalytics", 0, "")
, (5320, 1, "title2", 0, "")
, (5306, 1, "htmltitle", 0, "")
, (5307, 1, "metadescription", 0, "")
, (5308, 1, "metakeywords", 0, "")
, (5309, 1, "googleanalytics", 0, "")
, (5422, 1, "title2", 0, "")
, (5315, 1, "htmltitle", 0, "")
, (5316, 1, "metadescription", 0, "")
, (5317, 1, "metakeywords", 0, "")
, (5318, 1, "googleanalytics", 0, "")
, (5631, 1, "title2", 0, "")
, (5324, 1, "htmltitle", 0, "")
, (5325, 1, "metadescription", 0, "")
, (5326, 1, "metakeywords", 0, "")
, (5327, 1, "googleanalytics", 0, "")
, (5346, 1, "htmltitle", 0, "")
, (5347, 1, "metadescription", 0, "")
, (5348, 1, "metakeywords", 0, "")
, (5349, 1, "googleanalytics", 0, "")
, (5639, 1, "title2", 0, "")
, (5426, 1, "metadescription", 0, "")
, (5427, 1, "metakeywords", 0, "")
, (5428, 1, "googleanalytics", 0, "")
, (6257, 1, "title2", 0, "")
, (5635, 1, "metadescription", 0, "")
, (5636, 1, "metakeywords", 0, "")
, (5637, 1, "googleanalytics", 0, "")
, (6338, 1, "title2", 0, "")
, (5643, 1, "metadescription", 0, "")
, (5644, 1, "metakeywords", 0, "")
, (5645, 1, "googleanalytics", 0, "")
, (7841, 1, "metakeywords", 0, "")
, (6261, 1, "metadescription", 0, "")
, (6262, 1, "metakeywords", 0, "")
, (6263, 1, "googleanalytics", 0, "")
, (7691, 1, "title2", 0, "")
, (6343, 1, "metadescription", 0, "")
, (6344, 1, "metakeywords", 0, "")
, (6345, 1, "googleanalytics", 0, "")
, (13995, 1, "metakeywords", 0, "")
, (7817, 1, "metadescription", 0, "")
, (7840, 1, "metadescription", 0, "")
, (7855, 1, "metadescription", 0, "")
, (14004, 1, "footer_popup_width", 0, "")
, (7699, 1, "metadescription", 0, "")
, (7700, 1, "metakeywords", 0, "")
, (7701, 1, "googleanalytics", 0, "")
, (7809, 1, "title2", 0, "")
, (7870, 1, "metadescription", 0, "")
, (7818, 1, "metakeywords", 0, "")
, (7819, 1, "googleanalytics", 0, "")
, (9918, 1, "metakeywords", 0, "")
, (7832, 1, "title2", 0, "")
, (7842, 1, "googleanalytics", 0, "")
, (7847, 1, "title2", 0, "")
, (7856, 1, "metakeywords", 0, "")
, (7857, 1, "googleanalytics", 0, "")
, (7862, 1, "title2", 0, "")
, (9917, 1, "metadescription", 0, "")
, (7871, 1, "metakeywords", 0, "")
, (7872, 1, "googleanalytics", 0, "")
, (9907, 1, "title2", 0, "")
, (11128, 1, "metadescription", 0, "")
, (13957, 1, "footer_login", 0, "")
, (12360, 1, "googleanalytics", 0, "")
, (13994, 1, "metadescription", 0, "")
, (14008, 1, "footer_popup_height", 0, "")
, (11802, 1, "metakeywords", 0, "")
, (11801, 1, "metadescription", 0, "")
, (13983, 1, "footer_popup_width", 0, "")
, (9919, 1, "googleanalytics", 0, "")
, (11830, 1, "metadescription", 0, "")
, (11118, 1, "title2", 0, "")
, (11129, 1, "metakeywords", 0, "")
, (11130, 1, "googleanalytics", 0, "")
, (11791, 1, "title2", 0, "")
, (12035, 1, "metadescription", 0, "")
, (12359, 1, "metakeywords", 0, "")
, (11820, 1, "title2", 0, "")
, (12358, 1, "metadescription", 0, "")
, (11803, 1, "googleanalytics", 0, "")
, (11831, 1, "metakeywords", 0, "")
, (11832, 1, "googleanalytics", 0, "")
, (13027, 1, "metakeywords", 0, "")
, (12028, 1, "title2", 0, "")
, (13973, 1, "metadescription", 0, "")
, (13026, 1, "metadescription", 0, "")
, (13987, 1, "footer_popup_height", 0, "")
, (12036, 1, "metakeywords", 0, "")
, (12037, 1, "googleanalytics", 0, "")
, (13852, 1, "metakeywords", 0, "")
, (12351, 1, "title2", 0, "")
, (13851, 1, "metadescription", 0, "")
, (13019, 1, "title2", 0, "")
, (13975, 1, "googleanalytics", 0, "")
, (13953, 1, "googleanalytics", 0, "")
, (13952, 1, "metakeywords", 0, "")
, (13028, 1, "googleanalytics", 0, "")
, (14013, 1, "title2", 0, "")
, (13844, 1, "title2", 0, "")
, (13974, 1, "metakeywords", 0, "")
, (13853, 1, "googleanalytics", 0, "")
, (13857, 1, "footer_login", 0, "")
, (13944, 1, "title2", 0, "")
, (13992, 1, "title2", 0, "")
, (14000, 1, "footer_login", 0, "")
, (13996, 1, "googleanalytics", 0, "")
, (13951, 1, "metadescription", 0, "")
, (13970, 1, "title2", 0, "")
, (14668, 1, "metadescription", 0, "")
, (14018, 1, "metadescription", 0, "")
, (14019, 1, "metakeywords", 0, "")
, (14020, 1, "googleanalytics", 0, "")
, (16792, 1, "googleanalytics", 0, "")
, (16775, 1, "googleanalytics", 0, "")
, (16758, 1, "googleanalytics", 0, "")
, (16741, 1, "googleanalytics", 0, "")
, (16724, 1, "googleanalytics", 0, "")
, (16707, 1, "googleanalytics", 0, "")
, (16185, 1, "googleanalytics", 0, "")
, (16690, 1, "googleanalytics", 0, "")
, (16689, 1, "metakeywords", 0, "")
, (16217, 1, "metadescription", 0, "")
, (16218, 1, "metakeywords", 0, "")
, (16219, 1, "googleanalytics", 0, "")
, (16688, 1, "metadescription", 0, "")
, (16673, 1, "googleanalytics", 0, "")
, (16656, 1, "googleanalytics", 0, "")
, (16639, 1, "googleanalytics", 0, "")
, (15142, 1, "metakeywords", 0, "")
, (16638, 1, "metakeywords", 0, "")
, (16622, 1, "googleanalytics", 0, "")
, (16621, 1, "metakeywords", 0, "")
, (16620, 1, "metadescription", 0, "")
, (16637, 1, "metadescription", 0, "")
, (16605, 1, "googleanalytics", 0, "")
, (16183, 1, "metadescription", 0, "")
, (16591, 1, "googleanalytics", 0, "")
, (16577, 1, "googleanalytics", 0, "")
, (14310, 1, "metadescription", 0, "")
, (14311, 1, "metakeywords", 0, "")
, (14312, 1, "googleanalytics", 0, "")
, (16563, 1, "googleanalytics", 0, "")
, (16562, 1, "metakeywords", 0, "")
, (16561, 1, "metadescription", 0, "")
, (15141, 1, "metadescription", 0, "")
, (14389, 1, "metadescription", 0, "")
, (14390, 1, "metakeywords", 0, "")
, (14391, 1, "googleanalytics", 0, "")
, (15112, 1, "googleanalytics", 0, "")
, (15119, 1, "metadescription", 0, "")
, (14490, 1, "metadescription", 0, "")
, (14491, 1, "metakeywords", 0, "")
, (14492, 1, "googleanalytics", 0, "")
, (14516, 1, "metadescription", 0, "")
, (14517, 1, "metakeywords", 0, "")
, (14518, 1, "googleanalytics", 0, "")
, (14529, 1, "googleanalytics", 0, "")
, (15104, 1, "footer", 0, "")
, (14540, 1, "googleanalytics", 0, "")
, (15143, 1, "googleanalytics", 0, "")
, (14657, 1, "metadescription", 0, "")
, (14658, 1, "metakeywords", 0, "")
, (14659, 1, "googleanalytics", 0, "")
, (14669, 1, "metakeywords", 0, "")
, (14670, 1, "googleanalytics", 0, "")
, (16411, 1, "googleanalytics", 0, "")
, (16410, 1, "metakeywords", 0, "")
, (16394, 1, "googleanalytics", 0, "")
, (16393, 1, "metakeywords", 0, "")
, (16392, 1, "metadescription", 0, "")
, (16409, 1, "metadescription", 0, "")
, (15126, 1, "footer", 0, "")
, (15117, 1, "footer", 0, "")
, (14772, 1, "googleanalytics", 0, "")
, (14785, 1, "googleanalytics", 0, "")
, (15135, 1, "footer", 0, "")
, (14798, 1, "googleanalytics", 0, "")
, (15111, 1, "metakeywords", 0, "")
, (15110, 1, "metadescription", 0, "")
, (15120, 1, "metakeywords", 0, "")
, (16329, 1, "googleanalytics", 0, "")
, (16328, 1, "metakeywords", 0, "")
, (16327, 1, "metadescription", 0, "")
, (16312, 1, "googleanalytics", 0, "")
, (16311, 1, "metakeywords", 0, "")
, (16295, 1, "googleanalytics", 0, "")
, (16281, 1, "googleanalytics", 0, "")
, (16310, 1, "metadescription", 0, "")
, (16267, 1, "googleanalytics", 0, "")
, (15130, 1, "googleanalytics", 0, "")
, (15129, 1, "metakeywords", 0, "")
, (16253, 1, "googleanalytics", 0, "")
, (16252, 1, "metakeywords", 0, "")
, (16251, 1, "metadescription", 0, "")
, (16236, 1, "googleanalytics", 0, "")
, (16235, 1, "metakeywords", 0, "")
, (16234, 1, "metadescription", 0, "")
, (16202, 1, "googleanalytics", 0, "")
, (16201, 1, "metakeywords", 0, "")
, (16200, 1, "metadescription", 0, "")
, (15128, 1, "metadescription", 0, "")
, (15121, 1, "googleanalytics", 0, "")
, (18969, 1, "metakeywords", 0, "")
, (18949, 1, "metadescription", 0, "")
, (15528, 1, "metadescription", 0, "")
, (15529, 1, "metakeywords", 0, "")
, (15530, 1, "googleanalytics", 0, "")
, (15545, 1, "metadescription", 0, "")
, (15546, 1, "metakeywords", 0, "")
, (15547, 1, "googleanalytics", 0, "")
, (15562, 1, "metadescription", 0, "")
, (15563, 1, "metakeywords", 0, "")
, (15564, 1, "googleanalytics", 0, "")
, (15579, 1, "metadescription", 0, "")
, (15580, 1, "metakeywords", 0, "")
, (15581, 1, "googleanalytics", 0, "")
, (16184, 1, "metakeywords", 0, "")
, (15966, 1, "metadescription", 0, "")
, (15967, 1, "metakeywords", 0, "")
, (15968, 1, "googleanalytics", 0, "")
, (15983, 1, "metadescription", 0, "")
, (15984, 1, "metakeywords", 0, "")
, (15985, 1, "googleanalytics", 0, "")
, (16000, 1, "metadescription", 0, "")
, (16001, 1, "metakeywords", 0, "")
, (16002, 1, "googleanalytics", 0, "")
, (16017, 1, "metadescription", 0, "")
, (16018, 1, "metakeywords", 0, "")
, (16019, 1, "googleanalytics", 0, "")
, (16870, 1, "googleanalytics", 0, "")
, (16989, 1, "googleanalytics", 0, "")
, (17006, 1, "googleanalytics", 0, "")
, (18968, 1, "metadescription", 0, "")
, (17171, 1, "metadescription", 0, "")
, (17172, 1, "metakeywords", 0, "")
, (17173, 1, "googleanalytics", 0, "")
, (17190, 1, "googleanalytics", 0, "")
, (17207, 1, "googleanalytics", 0, "")
, (17224, 1, "googleanalytics", 0, "")
, (18967, 1, "htmltitle", 0, "")
, (17537, 1, "googleanalytics", 0, "")
, (17554, 1, "googleanalytics", 0, "")
, (17571, 1, "googleanalytics", 0, "")
, (18932, 1, "metadescription", 0, "")
, (18984, 1, "googleanalytics", 0, "")
, (18983, 1, "metakeywords", 0, "")
, (18982, 1, "metadescription", 0, "")
, (18981, 1, "htmltitle", 0, "")
, (18980, 1, "copyright", 0, "")
, (18979, 1, "company", 0, "")
, (18970, 1, "googleanalytics", 0, "")
, (18977, 1, "googleanalytics", 0, "")
, (18976, 1, "metakeywords", 0, "")
, (18975, 1, "metadescription", 0, "")
, (18974, 1, "htmltitle", 0, "")
, (18973, 1, "copyright", 0, "")
, (18972, 1, "company", 0, "")
, (18950, 1, "metakeywords", 0, "")
, (18951, 1, "googleanalytics", 0, "")
, (18934, 1, "googleanalytics", 0, "")
, (18933, 1, "metakeywords", 0, "")
, (18237, 1, "googleanalytics", 0, "")
, (18254, 1, "googleanalytics", 0, "")
, (18273, 1, "googleanalytics", 0, "")
, (18290, 1, "googleanalytics", 0, "")
, (18907, 1, "metakeywords", 0, "")
, (18908, 1, "googleanalytics", 0, "")
, (18906, 1, "metadescription", 0, "")
, (18966, 1, "copyright", 0, "")
, (18965, 1, "company", 0, "")
, (18891, 1, "googleanalytics", 0, "")
, (18890, 1, "metakeywords", 0, "")
, (18889, 1, "metadescription", 0, "")
, (19839, 1, "title", 0, "")
, (19206, 1, "title2", 0, "")
, (19207, 1, "htmltitle", 0, "")
, (19208, 1, "metadescription", 0, "")
, (19209, 1, "metakeywords", 0, "")
, (19210, 1, "urltitle", 0, "")
, (19959, 15, "menu_position", 0, "")
, (19311, 16, "text", 0, "")
, (19310, 16, "title2", 0, "")
, (19309, 16, "title", 0, "")
, (19270, 16, "htmltitle", 0, "")
, (19271, 16, "metakeywords", 0, "")
, (19272, 16, "metadescription", 0, "")
, (19273, 16, "urltitle", 0, "")
, (19277, 16, "htmltitle", 0, "")
, (19278, 16, "metakeywords", 0, "")
, (19279, 16, "metadescription", 0, "")
, (19280, 16, "urltitle", 0, "")
, (19284, 16, "htmltitle", 0, "")
, (19285, 16, "metadescription", 0, "")
, (19286, 16, "metakeywords", 0, "")
, (19287, 16, "urltitle", 0, "")
, (19318, 17, "text", 0, "")
, (19317, 17, "title2", 0, "")
, (19316, 17, "title", 0, "")
, (19291, 17, "htmltitle", 0, "")
, (19292, 17, "metadescription", 0, "")
, (19293, 17, "metakeywords", 0, "")
, (19294, 17, "urltitle", 0, "")
, (19298, 17, "htmltitle", 0, "")
, (19299, 17, "metadescription", 0, "")
, (19300, 17, "metakeywords", 0, "")
, (19301, 17, "urltitle", 0, "")
, (19305, 17, "htmltitle", 0, "")
, (19306, 17, "metadescription", 0, "")
, (19307, 17, "metakeywords", 0, "")
, (19308, 17, "urltitle", 0, "")
, (19312, 16, "htmltitle", 0, "")
, (19313, 16, "metadescription", 0, "")
, (19314, 16, "metakeywords", 0, "")
, (19315, 16, "urltitle", 0, "")
, (19319, 17, "htmltitle", 0, "")
, (19320, 17, "metadescription", 0, "")
, (19321, 17, "metakeywords", 0, "")
, (19322, 17, "urltitle", 0, "")
, (19584, 18, "email_confirmation_sender", 0, "")
, (19324, 18, "title2", 0, "")
, (19325, 18, "htmltitle", 0, "")
, (19326, 18, "metakeywords", 0, "")
, (19327, 18, "metadescription", 0, "")
, (19328, 18, "urltitle", 0, "")
, (19330, 18, "title2", 0, "")
, (19331, 18, "htmltitle", 0, "")
, (19332, 18, "metakeywords", 0, "")
, (19333, 18, "metadescription", 0, "")
, (19334, 18, "urltitle", 0, "")
, (19565, 18, "email_subject", 0, "")
, (19581, 19, "email_thanx", 0, "")
, (19340, 18, "email_confirmation_sender", 0, "")
, (19341, 18, "email_confirmation_subject", 0, "")
, (19342, 18, "email_confirmation_text", 0, "")
, (19343, 18, "htmltitle", 0, "")
, (19344, 18, "metadescription", 0, "")
, (19345, 18, "metakeywords", 0, "")
, (19346, 18, "urltitle", 0, "")
, (19583, 19, "send_confirmation_mail", 0, "")
, (19580, 19, "email_subject", 0, "")
, (19579, 19, "target_email", 0, "")
, (19562, 18, "title", 0, "")
, (19578, 18, "target_email", 0, "")
, (19354, 18, "email_confirmation_sender", 0, "")
, (19355, 19, "email_confirmation_sender", 0, "")
, (19356, 19, "email_confirmation_subject", 0, "")
, (19357, 19, "email_confirmation_text", 0, "")
, (19358, 19, "htmltitle", 0, "")
, (19359, 19, "metadescription", 0, "")
, (19360, 19, "metakeywords", 0, "")
, (19361, 19, "urltitle", 0, "")
, (19577, 19, "title", 0, "")
, (19369, 18, "email_confirmation_sender", 0, "")
, (19370, 19, "email_confirmation_sender", 0, "")
, (19371, 19, "email_confirmation_subject", 0, "")
, (19372, 19, "email_confirmation_text", 0, "")
, (19373, 19, "htmltitle", 0, "")
, (19374, 19, "metadescription", 0, "")
, (19375, 19, "metakeywords", 0, "")
, (19376, 19, "urltitle", 0, "")
, (19566, 18, "email_thanx", 0, "")
, (19384, 18, "email_confirmation_sender", 0, "")
, (19385, 19, "email_confirmation_sender", 0, "")
, (19386, 18, "email_confirmation_subject", 0, "")
, (19387, 18, "email_confirmation_text", 0, "")
, (19388, 18, "htmltitle", 0, "")
, (19389, 18, "metadescription", 0, "")
, (19390, 18, "metakeywords", 0, "")
, (19391, 18, "urltitle", 0, "")
, (19652, 20, "title", 0, "")
, (19393, 20, "htmltitle", 0, "")
, (19394, 20, "metadescription", 0, "")
, (19395, 20, "metakeywords", 0, "")
, (19396, 20, "urltitle", 0, "")
, (19398, 20, "htmltitle", 0, "")
, (19399, 20, "metadescription", 0, "")
, (19400, 20, "metakeywords", 0, "")
, (19401, 20, "urltitle", 0, "")
, (19403, 1, "htmltitle", 0, "")
, (19404, 1, "metadescription", 0, "")
, (19405, 1, "metakeywords", 0, "")
, (19406, 1, "googleanalytics", 0, "")
, (19845, 21, "title", 0, "")
, (19408, 21, "htmltitle", 0, "")
, (19409, 21, "metadescription", 0, "")
, (19410, 21, "metakeywords", 0, "")
, (19411, 1, "googleanalytics", 0, "")
, (19412, 21, "googleanalytics", 0, "")
, (19414, 21, "htmltitle", 0, "")
, (19415, 21, "metadescription", 0, "")
, (19416, 21, "metakeywords", 0, "")
, (19417, 1, "googleanalytics", 0, "")
, (19418, 21, "googleanalytics", 0, "")
, (19958, 15, "text", 0, "")
, (19434, 22, "title2", 0, "")
, (19427, 22, "title2", 0, "")
, (19433, 22, "title", 0, "")
, (19429, 22, "htmltitle", 0, "")
, (19430, 22, "metakeywords", 0, "")
, (19431, 22, "metadescription", 0, "")
, (19432, 22, "urltitle", 0, "")
, (19435, 22, "text", 0, "")
, (19436, 22, "htmltitle", 0, "")
, (19437, 22, "metakeywords", 0, "")
, (19438, 22, "metadescription", 0, "")
, (19439, 22, "urltitle", 0, "")
, (19960, 22, "menu_position", 0, "")
, (19910, 26, "text", 0, "")
, (19905, 27, "text", 0, "")
, (19900, 28, "menu_position", 0, "")
, (19897, 24, "menu_position", 0, "")
, (19896, 23, "menu_position", 0, "")
, (19895, 23, "text", 0, "")
, (19894, 23, "title", 0, "")
, (19462, 24, "title2", 0, "")
, (19455, 24, "title2", 0, "")
, (19461, 24, "title", 0, "")
, (19457, 24, "htmltitle", 0, "")
, (19458, 24, "metakeywords", 0, "")
, (19459, 24, "metadescription", 0, "")
, (19460, 24, "urltitle", 0, "")
, (19463, 24, "text", 0, "")
, (19464, 24, "htmltitle", 0, "")
, (19465, 24, "metakeywords", 0, "")
, (19466, 24, "metadescription", 0, "")
, (19467, 24, "urltitle", 0, "")
, (19899, 25, "menu_position", 0, "")
, (19898, 25, "title", 0, "")
, (19909, 26, "summary", 0, "")
, (19908, 30, "date", 0, "")
, (19906, 26, "title", 0, "")
, (19904, 27, "summary", 0, "")
, (19903, 29, "date", 0, "")
, (19901, 27, "title", 0, "")
, (19510, 28, "title", 0, "")
, (19505, 28, "title2", 0, "")
, (19506, 28, "htmltitle", 0, "")
, (19507, 28, "metadescription", 0, "")
, (19508, 28, "metakeywords", 0, "")
, (19509, 28, "urltitle", 0, "")
, (19511, 28, "title2", 0, "")
, (19512, 28, "htmltitle", 0, "")
, (19513, 28, "metadescription", 0, "")
, (19514, 28, "metakeywords", 0, "")
, (19515, 28, "urltitle", 0, "")
, (19523, 29, "text", 0, "")
, (19902, 27, "date", 0, "")
, (19520, 29, "title", 0, "")
, (19531, 30, "text", 0, "")
, (19907, 26, "date", 0, "")
, (19528, 30, "title", 0, "")
, (19582, 18, "send_confirmation_mail", 0, "")
, (19539, 18, "email_confirmation_sender", 0, "")
, (19540, 19, "email_confirmation_sender", 0, "")
, (19541, 18, "email_confirmation_subject", 0, "")
, (19542, 18, "email_confirmation_text", 0, "")
, (19543, 18, "htmltitle", 0, "")
, (19544, 18, "metadescription", 0, "")
, (19545, 18, "metakeywords", 0, "")
, (19546, 18, "urltitle", 0, "")
, (19554, 18, "email_confirmation_sender", 0, "")
, (19555, 19, "email_confirmation_sender", 0, "")
, (19556, 19, "email_confirmation_subject", 0, "")
, (19557, 19, "email_confirmation_text", 0, "")
, (19558, 19, "htmltitle", 0, "")
, (19559, 19, "metadescription", 0, "")
, (19560, 19, "metakeywords", 0, "")
, (19561, 19, "urltitle", 0, "")
, (19569, 18, "email_confirmation_sender", 0, "")
, (19570, 19, "email_confirmation_sender", 0, "")
, (19571, 18, "email_confirmation_subject", 0, "")
, (19572, 18, "email_confirmation_text", 0, "")
, (19573, 18, "htmltitle", 0, "")
, (19574, 18, "metadescription", 0, "")
, (19575, 18, "metakeywords", 0, "")
, (19576, 18, "urltitle", 0, "")
, (19585, 19, "email_confirmation_sender", 0, "")
, (19586, 19, "email_confirmation_subject", 0, "")
, (19587, 19, "email_confirmation_text", 0, "")
, (19588, 19, "htmltitle", 0, "")
, (19589, 19, "metadescription", 0, "")
, (19590, 19, "metakeywords", 0, "")
, (19591, 19, "urltitle", 0, "")
, (19740, 32, "title2", 0, "")
, (19605, 32, "title2", 0, "")
, (20036, 37, "email", 0, "")
, (20037, 38, "email", 0, "")
, (20039, 38, "latLng_x", 0, "")
, (19624, 32, "htmltitle", 0, "")
, (19625, 32, "metadescription", 0, "")
, (19626, 32, "metakeywords", 0, "")
, (19627, 32, "urltitle", 0, "")
, (19629, 32, "title2", 0, "")
, (20034, 37, "fax", 0, "")
, (20035, 38, "fax", 0, "")
, (20043, 38, "menu_position", 0, "")
, (19648, 32, "htmltitle", 0, "")
, (19649, 32, "metadescription", 0, "")
, (19650, 32, "metakeywords", 0, "")
, (19651, 32, "urltitle", 0, "")
, (19653, 20, "text", 0, "")
, (19654, 20, "htmltitle", 0, "")
, (19655, 20, "metadescription", 0, "")
, (19656, 20, "metakeywords", 0, "")
, (19657, 20, "urltitle", 0, "")
, (19866, 20, "menu_position", 0, "")
, (19865, 9, "menu_position", 0, "")
, (19864, 9, "text", 0, "")
, (19863, 9, "title", 0, "")
, (20032, 37, "phone", 0, "")
, (20033, 38, "phone", 0, "")
, (20075, 34, "menu_position", 0, "")
, (20076, 40, "menu_position", 0, "")
, (19690, 32, "title2", 0, "")
, (19765, 32, "title2", 0, "")
, (20042, 37, "menu_position", 0, "")
, (20030, 37, "city", 0, "")
, (20031, 38, "city", 0, "")
, (19953, 34, "title", 0, "")
, (19710, 32, "htmltitle", 0, "")
, (19711, 32, "metadescription", 0, "")
, (19712, 32, "metakeywords", 0, "")
, (19713, 32, "urltitle", 0, "")
, (20040, 37, "latLng_y", 0, "")
, (20041, 38, "latLng_y", 0, "")
, (20029, 38, "street", 0, "")
, (20038, 37, "latLng_x", 0, "")
, (20028, 37, "street", 0, "")
, (20027, 38, "company", 0, "")
, (20025, 38, "text", 0, "")
, (20074, 40, "pictures", 1, "")
, (20061, 33, "menu_position", 0, "")
, (19937, 33, "text", 0, "")
, (20058, 39, "pictures", 0, "")
, (19764, 32, "title", 0, "")
, (19883, 32, "phone", 0, "")
, (20026, 37, "company", 0, "")
, (20005, 37, "text", 0, "")
, (20004, 37, "title", 0, "")
, (19936, 33, "title", 0, "")
, (19760, 32, "htmltitle", 0, "")
, (19761, 32, "metadescription", 0, "")
, (19762, 32, "metakeywords", 0, "")
, (19763, 32, "urltitle", 0, "")
, (19766, 32, "text", 0, "")
, (19877, 32, "company", 0, "")
, (19879, 32, "street", 0, "")
, (19881, 32, "city", 0, "")
, (20071, 34, "pictures", 0, "")
, (20024, 38, "title", 0, "")
, (19887, 32, "email", 0, "")
, (19889, 32, "latLng_x", 0, "")
, (19891, 32, "latLng_y", 0, "")
, (19957, 15, "title", 0, "")
, (19785, 32, "htmltitle", 0, "")
, (19786, 32, "metadescription", 0, "")
, (19787, 32, "metakeywords", 0, "")
, (19788, 32, "urltitle", 0, "")
, (20072, 40, "pictures", 0, "")
, (20070, 40, "title", 0, "")
, (20073, 34, "pictures", 1, "")
, (19885, 32, "fax", 0, "")
, (20045, 31, "menu_position", 0, "")
, (20046, 32, "menu_position", 0, "")
, (20062, 39, "menu_position", 0, "")
, (20060, 39, "pictures", 1, "")
, (20059, 33, "pictures", 1, "")
, (20056, 39, "text", 0, "")
, (20057, 33, "pictures", 0, "")
, (20055, 39, "title", 0, "")
, (20044, 31, "title", 0, "")
, (19840, 1, "htmltitle", 0, "")
, (19841, 1, "metadescription", 0, "")
, (19842, 1, "metakeywords", 0, "")
, (19843, 1, "googleanalytics", 0, "")
, (19844, 21, "googleanalytics", 0, "")
, (19846, 21, "htmltitle", 0, "")
, (19847, 21, "metadescription", 0, "")
, (19848, 21, "metakeywords", 0, "")
, (19849, 1, "googleanalytics", 0, "")
, (19850, 21, "googleanalytics", 0, "")
;

-- Table `content_field_value`: structure 
DROP TABLE IF EXISTS `content_field_value`;
CREATE TABLE `content_field_value` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_field_id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `content_field_id` (`content_field_id`),
  KEY `value_index` (`value`(8)),
  FULLTEXT KEY `value` (`value`)
) ENGINE=MyISAM AUTO_INCREMENT=12353 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `content_field_value`: 117 rows / 4 fields 
INSERT INTO `content_field_value` VALUES
  (12103, 19839, "0", "aquarius-cms.ch")
, (11926, 19309, "0", "404")
, (11927, 19310, "0", "Die gewünschte Seite konnte nicht gefunden werden.")
, (11928, 19311, "0", "<p>\r\n    Das von Ihnen gesuchte Dokument wurde möglicherweise umbenannt, verschoben oder gelöscht.</p>\r\n<p>\r\n    <a href=\"aquarius-node:8\">Zur Einstiegseite</a></p>\r\n")
, (12041, 19566, "0", "Das Formular wurde erfolgreich verschickt. Vielen Dank für Ihre Anfrage.")
, (11929, 19316, "0", "404")
, (11930, 19317, "0", "Page introuvable ")
, (11931, 19318, "0", "<p>\r\n    La page demandée n\'existe plus ou n\'a jamais existé sous cette adresse.</p>\r\n<p>\r\n    <a href=\"aquarius-node:8\">Consulter la page d\'accueil</a></p>\r\n")
, (12049, 19582, "0", "0")
, (12040, 19565, "0", "Kontaktformular")
, (12045, 19578, "0", "test@aquaverde.ch")
, (12046, 19579, "0", "test@aquaverde.ch")
, (12047, 19580, "0", "Formulaire de contact")
, (12048, 19581, "0", "Le formulaire a été envoyé avec succès. Merci pour votre demande.")
, (12037, 19562, "0", "Kontaktformular")
, (12055, 19652, "0", "Accueil")
, (12105, 19845, "0", "aquarius-cms.ch")
, (11969, 19433, "0", "Basic")
, (11970, 19435, "0", "<p>\r\n    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n")
, (12150, 19894, "0", "Impressum")
, (12151, 19895, "0", "<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n")
, (11977, 19461, "0", "Impressum")
, (11978, 19463, "0", "<p>\r\n    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n")
, (12156, 19900, "0", "main")
, (12164, 19908, "0", "1316642400")
, (12165, 19909, "0", "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")
, (12166, 19910, "0", "<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n")
, (12162, 19906, "0", "News 1")
, (12160, 19904, "0", "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")
, (12161, 19905, "0", "<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n")
, (12159, 19903, "0", "1316728800")
, (12157, 19901, "0", "News 2")
, (12006, 19510, "0", "News")
, (12011, 19520, "0", "News 2")
, (12158, 19902, "0", "1316728800")
, (12014, 19523, "0", "<p>\r\n    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n")
, (12019, 19528, "0", "News 1")
, (12163, 19907, "0", "1316642400")
, (12022, 19531, "0", "<p>\r\n    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n")
, (12044, 19577, "0", "Formulaire de contact")
, (12050, 19583, "0", "0")
, (12056, 19653, "0", "<p>\r\n    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n")
, (12121, 19865, "0", "main")
, (12067, 19764, "0", "Contact")
, (12068, 19766, "0", "<p>\r\n    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n")
, (12141, 19885, "0", "032 322 99 80")
, (12139, 19883, "0", "032 322 99 80")
, (12137, 19881, "0", "2502 Bienne")
, (12135, 19879, "0", "Falkenstrasse 44")
, (12326, 20059, "legend", "Milkyway 2")
, (12327, 20060, "file", "milkyway2.jpg")
, (12328, 20060, "legend", "Milkyway 2")
, (12330, 20062, "0", "main")
, (12350, 20074, "legend", "Andromeda 2")
, (12345, 20072, "file", "andromeda.jpg")
, (12346, 20072, "legend", "Andromeda 1")
, (12347, 20073, "file", "andromeda.jpg")
, (12348, 20073, "legend", "Andromeda 2")
, (12133, 19877, "0", "aquaverde")
, (12323, 20058, "file", "milkyway.jpg")
, (12324, 20058, "legend", "Milkyway 1")
, (12325, 20059, "file", "milkyway2.jpg")
, (12306, 20046, "0", "main")
, (12104, 19840, "0", "aquarius-cms")
, (12106, 19846, "0", "aquarius-cms")
, (12120, 19864, "0", "<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n")
, (12119, 19863, "0", "Home")
, (12122, 19866, "0", "main")
, (12154, 19898, "0", "News")
, (12155, 19899, "0", "main")
, (12143, 19887, "0", "test@aquaverde.ch")
, (12145, 19889, "0", "47.140187")
, (12147, 19891, "0", "7.243773")
, (12304, 20044, "0", "Kontakt")
, (12305, 20045, "0", "main")
, (12152, 19896, "0", "footer")
, (12153, 19897, "0", "footer")
, (12218, 19958, "0", "<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud <a href=\"aquarius-node:18\">exercitation</a> ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<ul>\r\n	<li>\r\n		Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>\r\n	<li>\r\n		sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>\r\n	<li>\r\n		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>\r\n	<li>\r\n		Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>\r\n</ul>\r\n")
, (12217, 19957, "0", "Basic")
, (12220, 19960, "0", "main")
, (12219, 19959, "0", "main")
, (12320, 20056, "0", "<p>\r\n	Carousel Example</p>\r\n")
, (12319, 20055, "0", "Carousel")
, (12193, 19937, "0", "<p>\r\n	Carousel Example</p>\r\n")
, (12192, 19936, "0", "Carousel")
, (12322, 20057, "legend", "Milkyway 1")
, (12321, 20057, "file", "milkyway.jpg")
, (12329, 20061, "0", "main")
, (12342, 20070, "0", "Gallery")
, (12349, 20074, "file", "andromeda.jpg")
, (12344, 20071, "legend", "Andromeda 1")
, (12211, 19953, "0", "Gallery")
, (12343, 20071, "file", "andromeda.jpg")
, (12351, 20075, "0", "main")
, (12352, 20076, "0", "main")
, (12295, 20035, "0", "032 322 99 80")
, (12293, 20033, "0", "032 322 99 80")
, (12291, 20031, "0", "2502 Bienne")
, (12265, 20005, "0", "<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n")
, (12264, 20004, "0", "Karte")
, (12289, 20029, "0", "Falkenstrasse 44")
, (12287, 20027, "0", "aquaverde")
, (12286, 20026, "0", "aquaverde")
, (12288, 20028, "0", "Falkenstrasse 44")
, (12290, 20030, "0", "2502 Bienne")
, (12292, 20032, "0", "032 322 99 80")
, (12294, 20034, "0", "032 322 99 80")
, (12296, 20036, "0", "test@aquaverde.ch")
, (12298, 20038, "0", "47.140187")
, (12300, 20040, "0", "7.243773")
, (12302, 20042, "0", "main")
, (12285, 20025, "0", "<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n")
, (12284, 20024, "0", "Carte")
, (12297, 20037, "0", "test@aquaverde.ch")
, (12299, 20039, "0", "47.140187")
, (12301, 20041, "0", "7.243773")
, (12303, 20043, "0", "main")
;

-- Table `content_mapping`: structure 
DROP TABLE IF EXISTS `content_mapping`;
CREATE TABLE `content_mapping` (
  `mapping_id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lg` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `unique_node_lg` (`mapping_id`,`lg`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `content_mapping`: 0 rows / 5 fields 

-- Table `content_mapping_field`: structure 
DROP TABLE IF EXISTS `content_mapping_field`;
CREATE TABLE `content_mapping_field` (
  `content_mapping_id` int(11) NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `element` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_change` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `unique_node_lg` (`content_mapping_id`,`element`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `content_mapping_field`: 0 rows / 5 fields 

-- Table `content_search`: structure 
DROP TABLE IF EXISTS `content_search`;
CREATE TABLE `content_search` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lg` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `query` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `query` (`query`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `content_search`: 0 rows / 4 fields 

-- Table `cron`: structure 
DROP TABLE IF EXISTS `cron`;
CREATE TABLE `cron` (
  `type` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `start_run` bigint(20) NOT NULL,
  `end_run` bigint(20) NOT NULL,
  PRIMARY KEY (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `cron`: 1 rows / 3 fields 
INSERT INTO `cron` VALUES
  ("daily", 1347872688, 1347872688)
;

-- Table `directory_properties`: structure 
DROP TABLE IF EXISTS `directory_properties`;
CREATE TABLE `directory_properties` (
  `directory_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resize_type` enum('w','m','h') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'w',
  `max_size` int(5) DEFAULT NULL,
  `th_size` int(4) DEFAULT NULL,
  `alt_size` int(4) DEFAULT NULL,
  PRIMARY KEY (`directory_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `directory_properties`: 0 rows / 5 fields 

-- Table `dynform`: structure 
DROP TABLE IF EXISTS `dynform`;
CREATE TABLE `dynform` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `node_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `node_id` (`node_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `dynform`: 1 rows / 2 fields 
INSERT INTO `dynform` VALUES
  (2, 16)
;

-- Table `dynform_block`: structure 
DROP TABLE IF EXISTS `dynform_block`;
CREATE TABLE `dynform_block` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dynform_id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `weight` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `dynform_id` (`dynform_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `dynform_block`: 2 rows / 4 fields 
INSERT INTO `dynform_block` VALUES
  (1, 1, "Adresse", 10)
, (2, 2, "Kontaktformular", 10)
;

-- Table `dynform_block_data`: structure 
DROP TABLE IF EXISTS `dynform_block_data`;
CREATE TABLE `dynform_block_data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `block_id` int(10) unsigned NOT NULL,
  `lg` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `dynform_block_data`: 1 rows / 4 fields 
INSERT INTO `dynform_block_data` VALUES
  (4, 2, "fr", "Formulaire de contact")
;

-- Table `dynform_entry`: structure 
DROP TABLE IF EXISTS `dynform_entry`;
CREATE TABLE `dynform_entry` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dynform_id` int(11) NOT NULL,
  `lg` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL,
  `submitnodetitle` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `dynform_id` (`dynform_id`),
  KEY `lg` (`lg`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `dynform_entry`: 5 rows / 5 fields 
INSERT INTO `dynform_entry` VALUES
  (46, 2, "de", "2012-09-17 11:52:56", "Kontaktformular")
, (47, 2, "de", "2012-09-17 12:03:12", "Kontaktformular")
, (48, 2, "de", "2012-09-17 14:24:58", "Kontaktformular")
, (49, 2, "de", "2012-09-17 14:26:39", "Kontaktformular")
, (50, 2, "de", "2012-09-17 14:27:13", "Kontaktformular")
;

-- Table `dynform_entry_data`: structure 
DROP TABLE IF EXISTS `dynform_entry_data`;
CREATE TABLE `dynform_entry_data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `name` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `entry_id` (`entry_id`),
  KEY `field_id` (`field_id`)
) ENGINE=MyISAM AUTO_INCREMENT=144 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `dynform_entry_data`: 35 rows / 5 fields 
INSERT INTO `dynform_entry_data` VALUES
  (109, 46, 9, "Name", "")
, (110, 46, 10, "Vorname", "")
, (111, 46, 11, "Strasse, Nr.", "")
, (112, 46, 12, "PLZ/Ort", "")
, (113, 46, 13, "Telefon", "")
, (114, 46, 14, "E-Mail", "")
, (115, 46, 15, "Mitteilung", "")
, (116, 47, 9, "Name", "")
, (117, 47, 10, "Vorname", "")
, (118, 47, 11, "Strasse, Nr.", "")
, (119, 47, 12, "PLZ/Ort", "")
, (120, 47, 13, "Telefon", "")
, (121, 47, 14, "E-Mail", "")
, (122, 47, 15, "Mitteilung", "")
, (123, 48, 9, "Name", "")
, (124, 48, 10, "Vorname", "")
, (125, 48, 11, "Strasse, Nr.", "")
, (126, 48, 12, "PLZ/Ort", "")
, (127, 48, 13, "Telefon", "")
, (128, 48, 14, "E-Mail", "")
, (129, 48, 15, "Mitteilung", "")
, (130, 49, 9, "Name", "")
, (131, 49, 10, "Vorname", "")
, (132, 49, 11, "Strasse, Nr.", "")
, (133, 49, 12, "PLZ/Ort", "")
, (134, 49, 13, "Telefon", "")
, (135, 49, 14, "E-Mail", "")
, (136, 49, 15, "Mitteilung", "")
, (137, 50, 9, "Name", "")
, (138, 50, 10, "Vorname", "")
, (139, 50, 11, "Strasse, Nr.", "")
, (140, 50, 12, "PLZ/Ort", "")
, (141, 50, 13, "Telefon", "")
, (142, 50, 14, "E-Mail", "")
, (143, 50, 15, "Mitteilung", "")
;

-- Table `dynform_field`: structure 
DROP TABLE IF EXISTS `dynform_field`;
CREATE TABLE `dynform_field` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `block_id` int(10) unsigned NOT NULL DEFAULT '0',
  `type` int(11) NOT NULL,
  `name` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `weight` int(11) NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `num_lines` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `dynform_field`: 15 rows / 8 fields 
INSERT INTO `dynform_field` VALUES
  (1, 1, 1, "Name", 10, 1, 0, 0)
, (2, 1, 1, "Vorname", 20, 1, 0, 0)
, (3, 1, 1, "Adresse", 30, 0, 0, 0)
, (4, 1, 1, "PLZ", 40, 0, 0, 0)
, (5, 1, 1, "Ort", 50, 0, 0, 0)
, (6, 1, 1, "tel", 60, 0, 0, 0)
, (7, 1, 7, "E-Mail", 70, 1, 0, 0)
, (8, 1, 2, "Mitteilungen", 80, 0, 0, 0)
, (9, 2, 1, "Name", 10, 1, 0, 0)
, (10, 2, 1, "Vorname", 20, 1, 0, 0)
, (11, 2, 1, "Strasse, Nr.", 30, 0, 0, 0)
, (12, 2, 1, "PLZ/Ort", 40, 0, 0, 0)
, (13, 2, 1, "Telefon", 50, 0, 0, 0)
, (14, 2, 7, "E-Mail", 60, 1, 0, 0)
, (15, 2, 2, "Mitteilung", 70, 0, 0, 0)
;

-- Table `dynform_field_data`: structure 
DROP TABLE IF EXISTS `dynform_field_data`;
CREATE TABLE `dynform_field_data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `field_id` int(10) unsigned NOT NULL DEFAULT '0',
  `lg` char(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `name` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `options` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `field_id` (`field_id`),
  KEY `lg` (`lg`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `dynform_field_data`: 37 rows / 5 fields 
INSERT INTO `dynform_field_data` VALUES
  (1, 1, "de", "Name", "")
, (2, 1, "fr", "Name", "")
, (3, 2, "de", "Vorname", "")
, (4, 2, "fr", "Vorname", "")
, (5, 3, "de", "Adresse", "")
, (6, 3, "fr", "Adresse", "")
, (7, 4, "de", "PLZ", "")
, (8, 4, "fr", "PLZ", "")
, (9, 5, "de", "Ort", "")
, (10, 5, "fr", "Ort", "")
, (11, 6, "de", "tel", "")
, (12, 6, "fr", "tel", "")
, (13, 7, "de", "E-Mail", "")
, (14, 7, "fr", "E-Mail", "")
, (15, 8, "de", "Mitteilungen", "")
, (16, 8, "fr", "Mitteilungen", "")
, (17, 9, "de", "Name", "")
, (18, 9, "fr", "Nom", "")
, (19, 9, "en", "Name", "")
, (20, 10, "de", "Vorname", "")
, (21, 10, "fr", "Prénom", "")
, (22, 10, "en", "Vorname", "")
, (23, 11, "de", "Strasse, Nr.", "")
, (24, 11, "fr", "Rue, Nr.", "")
, (25, 11, "en", "Strasse, Nr.", "")
, (26, 12, "de", "PLZ/Ort", "")
, (27, 12, "fr", "NPA/Lieu", "")
, (28, 12, "en", "PLZ/Ort", "")
, (29, 13, "de", "Telefon", "")
, (30, 13, "fr", "Téléphone", "")
, (31, 13, "en", "Telefon", "")
, (32, 14, "de", "E-Mail", "")
, (33, 14, "fr", "E-Mail", "")
, (34, 14, "en", "E-Mail", "")
, (35, 15, "de", "Mitteilung", "")
, (36, 15, "fr", "Communication", "")
, (37, 15, "en", "Mitteilung", "")
;

-- Table `dynform_field_type`: structure 
DROP TABLE IF EXISTS `dynform_field_type`;
CREATE TABLE `dynform_field_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `default_template` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `template` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `dynform_field_type`: 8 rows / 4 fields 
INSERT INTO `dynform_field_type` VALUES
  (1, "Singleline", "df_singleline", "")
, (2, "Multiline", "df_multiline", "")
, (3, "Checkbox", "df_checkbox", "")
, (4, "Pulldown", "df_pulldown", "")
, (5, "Radiobutton", "df_radiobutton", "")
, (6, "Text", "df_text", "")
, (7, "Email", "df_email", "")
, (8, "Number", "df_number", "")
;

-- Table `dynform_settings`: structure 
DROP TABLE IF EXISTS `dynform_settings`;
CREATE TABLE `dynform_settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `keyword` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `dynform_settings`: 0 rows / 3 fields 

-- Table `fe_address`: structure 
DROP TABLE IF EXISTS `fe_address`;
CREATE TABLE `fe_address` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `firma` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `fe_address`: 0 rows / 11 fields 

-- Table `fe_groups`: structure 
DROP TABLE IF EXISTS `fe_groups`;
CREATE TABLE `fe_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `fe_groups`: 0 rows / 3 fields 

-- Table `fe_groups2user`: structure 
DROP TABLE IF EXISTS `fe_groups2user`;
CREATE TABLE `fe_groups2user` (
  `user_id` int(11) NOT NULL DEFAULT '0',
  `group_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`,`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `fe_groups2user`: 0 rows / 2 fields 

-- Table `fe_restrictions`: structure 
DROP TABLE IF EXISTS `fe_restrictions`;
CREATE TABLE `fe_restrictions` (
  `node_id` int(11) NOT NULL DEFAULT '0',
  `group_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`node_id`,`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `fe_restrictions`: 0 rows / 2 fields 

-- Table `fe_user_address`: structure 
DROP TABLE IF EXISTS `fe_user_address`;
CREATE TABLE `fe_user_address` (
  `fe_user_id` int(11) NOT NULL,
  `fe_address_id` int(11) NOT NULL,
  PRIMARY KEY (`fe_user_id`,`fe_address_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `fe_user_address`: 0 rows / 2 fields 

-- Table `fe_users`: structure 
DROP TABLE IF EXISTS `fe_users`;
CREATE TABLE `fe_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `fe_users`: 0 rows / 4 fields 

-- Table `fieldgroup`: structure 
DROP TABLE IF EXISTS `fieldgroup`;
CREATE TABLE `fieldgroup` (
  `fieldgroup_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visibility_level` smallint(6) NOT NULL DEFAULT '2',
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`fieldgroup_id`),
  KEY `visibility_level` (`visibility_level`),
  KEY `weight` (`weight`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `fieldgroup`: 9 rows / 5 fields 
INSERT INTO `fieldgroup` VALUES
  (1, "main", "tab_main", 2, 10)
, (2, "goog", "Google Maps", 2, 50)
, (3, "extended", "tab_extended", 2, 80)
, (4, "SEO", "Metadaten", 2, 90)
, (5, "pictures", "Bilder/Dateien", 2, 30)
, (6, "Formular", "Formular", 2, 20)
, (13, "background", "Hintergrundbild", 2, 70)
, (11, "gallery", "Galerie", 2, 40)
, (14, "address", "Adresse", 2, 60)
;

-- Table `fieldgroup_entry`: structure 
DROP TABLE IF EXISTS `fieldgroup_entry`;
CREATE TABLE `fieldgroup_entry` (
  `fieldgroup_entry_id` int(11) NOT NULL AUTO_INCREMENT,
  `fieldgroup_id` int(11) NOT NULL,
  `selector` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`fieldgroup_entry_id`)
) ENGINE=MyISAM AUTO_INCREMENT=317 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `fieldgroup_entry`: 37 rows / 3 fields 
INSERT INTO `fieldgroup_entry` VALUES
  (303, 2, "latLng_*")
, (287, 3, "archive")
, (286, 3, "award_picture")
, (190, 4, "htmltitle")
, (189, 4, "meta*")
, (188, 4, "urltitle")
, (285, 3, "background")
, (169, 5, "mp3")
, (168, 5, "picture*")
, (284, 3, "booking")
, (283, 3, "code")
, (316, 6, "*greet*")
, (282, 3, "dynform")
, (315, 6, "*mail*")
, (314, 6, "*subject*")
, (313, 6, "*thanx*")
, (170, 5, "flash*")
, (171, 5, "file*")
, (191, 4, "googleanalytics")
, (281, 3, "googlemaps")
, (280, 3, "new")
, (279, 3, "option*")
, (255, 11, "gallery_files")
, (278, 3, "point*")
, (277, 3, "pointing_thema")
, (276, 3, "push*")
, (296, 13, "background")
, (275, 3, "template")
, (288, 3, "*publish*")
, (305, 2, "gmap*")
, (304, 2, "googlemaps_url")
, (297, 14, "street")
, (298, 14, "phone")
, (299, 14, "fax")
, (300, 14, "company")
, (301, 14, "city")
, (302, 14, "*mail*")
;

-- Table `fieldgroup_selection`: structure 
DROP TABLE IF EXISTS `fieldgroup_selection`;
CREATE TABLE `fieldgroup_selection` (
  `fieldgroup_selection_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_standard` tinyint(1) NOT NULL,
  PRIMARY KEY (`fieldgroup_selection_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `fieldgroup_selection`: 3 rows / 3 fields 
INSERT INTO `fieldgroup_selection` VALUES
  (1, "Standard tabs", 0)
, (2, "Simple", 0)
, (3, "Dynform", 0)
;

-- Table `fieldgroup_selection_entry`: structure 
DROP TABLE IF EXISTS `fieldgroup_selection_entry`;
CREATE TABLE `fieldgroup_selection_entry` (
  `fieldgroup_selection_entry_id` int(11) NOT NULL AUTO_INCREMENT,
  `fieldgroup_selection_id` int(11) NOT NULL,
  `fieldgroup_id` int(11) NOT NULL,
  PRIMARY KEY (`fieldgroup_selection_entry_id`),
  UNIQUE KEY `fieldgroup_selection_id` (`fieldgroup_selection_id`,`fieldgroup_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `fieldgroup_selection_entry`: 10 rows / 3 fields 
INSERT INTO `fieldgroup_selection_entry` VALUES
  (1, 1, 1)
, (2, 1, 2)
, (4, 1, 4)
, (13, 1, 13)
, (11, 1, 11)
, (16, 3, 1)
, (14, 1, 3)
, (15, 1, 14)
, (17, 3, 6)
, (18, 3, 4)
;

-- Table `form`: structure 
DROP TABLE IF EXISTS `form`;
CREATE TABLE `form` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `template` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort_by` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort_reverse` tinyint(1) NOT NULL DEFAULT '0',
  `fall_through` enum('none','all','category','box','parent') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'none',
  `show_in_menu` tinyint(1) NOT NULL DEFAULT '1',
  `fieldgroup_selection_id` int(11) DEFAULT NULL,
  `permission_level` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `show_in_menu` (`show_in_menu`),
  KEY `fieldgroup_selection_id` (`fieldgroup_selection_id`)
) ENGINE=MyISAM AUTO_INCREMENT=249 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `form`: 15 rows / 9 fields 
INSERT INTO `form` VALUES
  (101, "Home", "home", "", 0, "", 1, 0, 0)
, (112, "Root", "", "", 0, "all", 1, 1, 0)
, (247, "Contact", "contact", "", 0, "", 1, 1, 0)
, (156, "Fall through all", "", "", 0, "all", 0, 1, 0)
, (159, "Hide in Menu", "", "", 0, "parent", 0, 0, 0)
, (163, "Dynform_node", "contactform", "", 0, "", 1, 3, 0)
, (236, "News", "news", "date", 1, "parent", 0, 1, 0)
, (166, "Sitemap", "sitemap", "", 0, "none", 1, null, 0)
, (245, "404", "not_found", "", 0, "", 0, 0, 0)
, (237, "News overview", "news_overview", "", 0, "", 1, 1, 0)
, (208, "Basic", "basic", "", 0, "", 1, 1, 0)
, (242, "Download overview", "download.tpl", "", 0, "", 1, 1, 0)
, (243, "Download", "", "", 0, "parent", 0, 1, 0)
, (244, "Search", "search", "", 0, "", 0, 1, 0)
, (248, "Carousel", "carousel", "", 0, "", 1, 1, 0)
;

-- Table `form_field`: structure 
DROP TABLE IF EXISTS `form_field`;
CREATE TABLE `form_field` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `sup1` int(11) NOT NULL DEFAULT '0',
  `sup2` int(11) NOT NULL DEFAULT '0',
  `sup3` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `sup4` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `weight` int(10) unsigned NOT NULL DEFAULT '50',
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'ef',
  `form_id` int(10) unsigned NOT NULL DEFAULT '0',
  `multi` tinyint(1) NOT NULL DEFAULT '0',
  `language_independent` tinyint(1) NOT NULL DEFAULT '0',
  `add_to_title` tinyint(1) NOT NULL DEFAULT '0',
  `permission_level` int(11) NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_name_fid` (`name`,`form_id`),
  KEY `name` (`name`),
  KEY `weight` (`weight`),
  KEY `type` (`type`),
  KEY `form_id` (`form_id`),
  KEY `language_independent` (`language_independent`)
) ENGINE=MyISAM AUTO_INCREMENT=1798 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `form_field`: 105 rows / 14 fields 
INSERT INTO `form_field` VALUES
  (1083, "urltitle", "", 0, 0, "", "", 140, "urltitle", 163, 0, 0, 0, 2)
, (750, "metakeywords", "", 2, 0, "", "", 220, "mle", 112, 0, 0, 0, 1)
, (749, "metadescription", "", 5, 0, "", "", 210, "mle", 112, 0, 0, 0, 1)
, (748, "htmltitle", "", 3, 0, "", "", 200, "ef", 112, 0, 0, 0, 1)
, (1741, "urltitle", "", 0, 0, "", "", 230, "urltitle", 244, 0, 0, 0, 2)
, (1060, "email_confirmation_text", "", 0, 0, "", "", 90, "ef", 163, 0, 0, 0, 2)
, (827, "title", "", 0, 0, "", "", 0, "ef", 101, 0, 0, 0, 2)
, (1772, "metakeywords", "", 0, 0, "", "", 220, "mle", 247, 0, 0, 0, 2)
, (833, "title", "", 0, 0, "", "", 0, "ef", 112, 0, 0, 0, 2)
, (1021, "title", "", 0, 0, "", "", 10, "ef", 159, 0, 0, 0, 2)
, (1016, "title", "", 0, 0, "", "", 10, "ef", 156, 0, 0, 0, 2)
, (1771, "metadescription", "", 0, 0, "", "", 210, "mle", 247, 0, 0, 0, 2)
, (1059, "email_confirmation_subject", "", 0, 0, "", "", 80, "ef", 163, 0, 0, 0, 2)
, (1679, "date", "", 0, 0, "", "", 5, "date", 236, 0, 1, 1, 2)
, (1042, "title", "", 0, 0, "", "", 10, "ef", 163, 0, 0, 0, 2)
, (1742, "title2", "", 0, 0, "", "", 15, "ef", 244, 0, 0, 0, 2)
, (1739, "title", "", 0, 0, "", "", 10, "ef", 244, 0, 0, 0, 2)
, (1056, "email_thanx", "", 0, 0, "", "", 50, "mle", 163, 0, 0, 0, 2)
, (1055, "email_subject", "", 0, 0, "", "", 40, "ef", 163, 0, 0, 0, 2)
, (1054, "target_email", "", 0, 0, "", "", 30, "ef", 163, 0, 1, 0, 2)
, (1740, "metakeywords", "", 0, 0, "", "", 220, "mle", 244, 0, 0, 0, 2)
, (1057, "send_confirmation_mail", "", 0, 0, "", "", 60, "checkbox", 163, 0, 1, 0, 2)
, (1058, "email_confirmation_sender", "", 0, 0, "", "", 70, "ef", 163, 0, 1, 0, 2)
, (1065, "title", "", 0, 0, "", "", 10, "ef", 166, 0, 0, 0, 2)
, (1066, "title2", "", 0, 0, "", "", 20, "ef", 166, 0, 0, 0, 2)
, (1777, "text", "", 0, 0, "", "", 20, "rte", 101, 0, 0, 0, 2)
, (1280, "googleanalytics", "", 0, 0, "", "", 300, "code", 112, 0, 1, 0, 1)
, (1077, "urltitle", "", 0, 0, "", "", 100, "ef", 166, 0, 0, 0, 1)
, (1758, "text", "", 120, 0, "", "", 20, "rte", 163, 0, 0, 0, 2)
, (1759, "title", "", 0, 0, "", "", 10, "ef", 247, 0, 0, 0, 2)
, (1760, "title2", "", 0, 0, "", "", 20, "ef", 247, 0, 0, 0, 2)
, (1761, "company", "", 0, 0, "", "", 30, "ef", 247, 0, 1, 0, 2)
, (1762, "street", "", 0, 0, "", "", 40, "ef", 247, 0, 1, 0, 2)
, (1763, "city", "", 0, 0, "", "", 50, "ef", 247, 0, 1, 0, 2)
, (1764, "phone", "", 0, 0, "", "", 60, "ef", 247, 0, 1, 0, 2)
, (1765, "fax", "", 0, 0, "", "", 70, "ef", 247, 0, 1, 0, 2)
, (1251, "htmltitle", "", 0, 0, "", "", 200, "ef", 101, 0, 0, 0, 2)
, (1252, "metadescription", "", 0, 0, "", "", 210, "mle", 101, 0, 0, 0, 2)
, (1253, "metakeywords", "", 0, 0, "", "", 220, "mle", 101, 0, 0, 0, 2)
, (1254, "urltitle", "", 0, 0, "", "", 230, "urltitle", 101, 0, 0, 0, 2)
, (1767, "latLng_x", "", 0, 0, "", "", 100, "ef", 247, 0, 1, 0, 2)
, (1768, "latLng_y", "", 0, 0, "", "", 110, "ef", 247, 0, 1, 0, 2)
, (1272, "htmltitle", "", 0, 0, "", "", 100, "ef", 163, 0, 0, 0, 2)
, (1273, "metadescription", "", 0, 0, "", "", 110, "mle", 163, 0, 0, 0, 2)
, (1274, "metakeywords", "", 0, 0, "", "", 120, "mle", 163, 0, 0, 0, 2)
, (1776, "text", "", 0, 0, "", "", 25, "rte", 247, 0, 0, 0, 2)
, (1770, "htmltitle", "", 0, 0, "", "", 200, "ef", 247, 0, 0, 0, 2)
, (1663, "text", "", 0, 0, "", "", 40, "rte", 236, 0, 0, 0, 2)
, (1664, "title", "", 0, 0, "", "", 1, "ef", 236, 0, 0, 1, 2)
, (1716, "metadescription", "", 0, 0, "", "", 210, "mle", 242, 0, 0, 0, 2)
, (1769, "googlemaps_url", "", 2, 0, "", "", 120, "code", 247, 0, 1, 0, 2)
, (1756, "urltitle", "", 0, 0, "", "", 230, "urltitle", 245, 0, 0, 0, 2)
, (1754, "metadescription", "", 0, 0, "", "", 210, "mle", 245, 0, 0, 0, 2)
, (1755, "metakeywords", "", 0, 0, "", "", 220, "mle", 245, 0, 0, 0, 2)
, (1684, "htmltitle", "", 0, 0, "", "", 200, "ef", 237, 0, 0, 0, 2)
, (1685, "metadescription", "", 0, 0, "", "", 210, "mle", 237, 0, 0, 0, 2)
, (1442, "title2", "", 0, 0, "", "", 15, "ef", 156, 0, 0, 0, 2)
, (1748, "title2", "", 0, 0, "", "", 15, "ef", 245, 0, 0, 0, 2)
, (1749, "text", "", 0, 0, "", "", 40, "rte", 245, 0, 0, 0, 2)
, (1747, "title", "", 0, 0, "", "", 10, "ef", 245, 0, 0, 0, 2)
, (1720, "metakeywords", "", 0, 0, "", "", 220, "mle", 242, 0, 0, 0, 2)
, (1721, "urltitle", "", 0, 0, "", "", 230, "urltitle", 242, 0, 0, 0, 2)
, (1718, "text", "", 0, 0, "", "", 40, "rte", 242, 0, 0, 0, 2)
, (1719, "title", "", 0, 0, "", "", 10, "ef", 242, 0, 0, 0, 2)
, (1717, "htmltitle", "", 0, 0, "", "", 200, "ef", 242, 0, 0, 0, 2)
, (1390, "metadescription", "", 0, 0, "", "", 210, "mle", 208, 0, 0, 0, 1)
, (1391, "htmltitle", "", 0, 0, "", "", 200, "ef", 208, 0, 0, 0, 2)
, (1393, "text", "", 0, 0, "", "", 40, "rte", 208, 0, 0, 0, 2)
, (1394, "title", "", 0, 0, "", "", 1, "ef", 208, 0, 0, 0, 2)
, (1396, "metakeywords", "", 0, 0, "", "", 205, "mle", 208, 0, 0, 0, 1)
, (1397, "urltitle", "", 0, 0, "", "", 230, "urltitle", 208, 0, 0, 0, 1)
, (1400, "title2", "", 0, 0, "", "", 15, "ef", 208, 0, 0, 0, 2)
, (1686, "metakeywords", "", 0, 0, "", "", 220, "mle", 237, 0, 0, 0, 2)
, (1687, "urltitle", "", 0, 0, "", "", 230, "urltitle", 237, 0, 0, 0, 2)
, (1673, "title", "", 0, 0, "", "", 10, "ef", 237, 0, 0, 0, 2)
, (1676, "title2", "", 0, 0, "", "", 15, "ef", 237, 0, 0, 0, 2)
, (1722, "title2", "", 0, 0, "", "", 15, "ef", 242, 0, 0, 0, 2)
, (1766, "email", "", 0, 0, "", "", 80, "ef", 247, 0, 1, 0, 2)
, (1753, "htmltitle", "", 0, 0, "", "", 200, "ef", 245, 0, 0, 0, 2)
, (1745, "pictures", "", 0, 0, "pictures/content", "", 50, "file", 208, 1, 1, 0, 2)
, (1728, "title", "", 0, 0, "", "", 10, "ef", 243, 0, 0, 0, 2)
, (1738, "text", "", 0, 0, "", "", 40, "rte", 244, 0, 0, 0, 2)
, (1734, "files", "", 0, 0, "download", "", 20, "file", 243, 1, 0, 0, 2)
, (1736, "metadescription", "", 0, 0, "", "", 210, "mle", 244, 0, 0, 0, 2)
, (1737, "htmltitle", "", 0, 0, "", "", 200, "ef", 244, 0, 0, 0, 2)
, (1773, "urltitle", "", 0, 0, "", "", 230, "urltitle", 247, 0, 0, 0, 2)
, (1779, "picture_header", "", 0, 0, "pictures/header", "", 320, "file", 112, 1, 1, 0, 2)
, (1780, "picture_header", "", 0, 0, "pictures/header", "", 240, "file", 101, 1, 1, 0, 2)
, (1781, "picture_header", "", 0, 0, "pictures/header", "", 240, "file", 237, 1, 1, 0, 2)
, (1782, "picture_header", "", 0, 0, "pictures/header", "", 240, "file", 247, 1, 1, 0, 2)
, (1783, "menu_position", "Menu Position", 0, 0, "none=,main=main,meta=meta,footer=footer", "", 250, "sf", 101, 0, 1, 0, 1)
, (1784, "menu_position", "Menu Position", 0, 0, "none=,main=main,meta=meta,footer=footer", "", 240, "sf", 208, 0, 1, 0, 2)
, (1785, "menu_position", "Menu Position", 0, 0, "none=,main=main,meta=meta,footer=footer", "", 250, "sf", 237, 0, 1, 0, 2)
, (1786, "menu_position", "Menu position", 0, 0, "none=,main=main,meta=meta,footer=footer", "", 250, "sf", 247, 0, 1, 0, 2)
, (1787, "summary", "Summary", 0, 0, "", "", 35, "mle", 236, 0, 0, 0, 2)
, (1788, "metadescription", "", 0, 0, "", "", 210, "mle", 248, 0, 0, 0, 1)
, (1789, "htmltitle", "", 0, 0, "", "", 200, "ef", 248, 0, 0, 0, 2)
, (1790, "text", "", 0, 0, "", "", 40, "rte", 248, 0, 0, 0, 2)
, (1791, "title", "", 0, 0, "", "", 1, "ef", 248, 0, 0, 0, 2)
, (1792, "metakeywords", "", 0, 0, "", "", 205, "mle", 248, 0, 0, 0, 1)
, (1793, "urltitle", "", 0, 0, "", "", 230, "urltitle", 248, 0, 0, 0, 1)
, (1794, "title2", "", 0, 0, "", "", 15, "ef", 248, 0, 0, 0, 2)
, (1795, "pictures", "", 0, 0, "pictures/header", "", 50, "file", 248, 1, 1, 0, 2)
, (1796, "menu_position", "Menu Position", 0, 0, "none=,main=main,meta=meta,footer=footer", "", 240, "sf", 248, 0, 1, 0, 2)
, (1797, "menu_position", "Menu position", 0, 0, "none=,main=main,meta=meta,footer=footer", "", 25, "sf", 156, 0, 1, 0, 0)
;

-- Table `journal`: structure 
DROP TABLE IF EXISTS `journal`;
CREATE TABLE `journal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_change` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `content_id` (`content_id`),
  KEY `user_id` (`user_id`),
  KEY `last_change` (`last_change`)
) ENGINE=MyISAM AUTO_INCREMENT=2052 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `journal`: 27 rows / 4 fields 
INSERT INTO `journal` VALUES
  (2025, 15, 16, 1347874569)
, (2026, 9, 16, 1347874573)
, (2027, 9, 16, 1347874824)
, (2028, 9, 16, 1347874870)
, (2029, 15, 16, 1347874875)
, (2030, 25, 16, 1347874880)
, (2031, 31, 16, 1347875242)
, (2032, 23, 16, 1347875617)
, (2033, 25, 16, 1347875717)
, (2034, 27, 16, 1347876046)
, (2035, 26, 16, 1347876099)
, (2036, 15, 16, 1347876148)
, (2037, 15, 16, 1347876163)
, (2038, 33, 16, 1347882252)
, (2039, 33, 16, 1347882335)
, (2040, 33, 16, 1347882653)
, (2041, 33, 16, 1347882837)
, (2042, 34, 16, 1347883261)
, (2043, 34, 16, 1347883333)
, (2044, 34, 16, 1347883396)
, (2045, 34, 16, 1347883456)
, (2046, 15, 16, 1347884998)
, (2047, 37, 16, 1347885097)
, (2048, 38, 16, 1347885102)
, (2049, 31, 16, 1347885195)
, (2050, 39, 16, 1347891051)
, (2051, 40, 16, 1347891059)
;

-- Table `languages`: structure 
DROP TABLE IF EXISTS `languages`;
CREATE TABLE `languages` (
  `lg` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `weight` int(10) unsigned NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`lg`),
  KEY `weight` (`weight`),
  KEY `active` (`active`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci PACK_KEYS=0;

-- Table `languages`: 3 rows / 4 fields 
INSERT INTO `languages` VALUES
  ("de", "Deutsch", 1, 1)
, ("fr", "Français", 2, 1)
, ("en", "English", 3, 0)
;

-- Table `message`: structure 
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `message`: 0 rows / 2 fields 

-- Table `modules`: structure 
DROP TABLE IF EXISTS `modules`;
CREATE TABLE `modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `short` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `modules`: 19 rows / 4 fields 
INSERT INTO `modules` VALUES
  (4, "dynform", "Dynform Modul", 1)
, (13, "sqlInput", "Sql Input Modul", 0)
, (14, "agenda", "Agenda Modul", 0)
, (15, "archiver", "Archiver Modul", 1)
, (16, "custom_templates", "Custom templates in backend", 0)
, (18, "fe_user_management", "Frontend User Management", 0)
, (19, "field_rename", "Rename content fields", 0)
, (20, "global_legend_file", "File legends per file", 0)
, (21, "langdomains", "Change domain based on language", 0)
, (22, "mailform", "Form mailer", 0)
, (23, "maps", "Google Maps Modul", 0)
, (24, "maps_xml", "Load extern maps-xml", 0)
, (25, "newsletter", "Newsletter Modul", 0)
, (26, "shop", "Shop Modul", 0)
, (27, "sitemapxml", "Generate sitemap.xml", 0)
, (28, "subsites", "Manage URL for subsites", 0)
, (29, "tableexport", "Tableexport Modul", 0)
, (30, "persistent_login", "persistent_login", 0)
, (31, "url_fudging", "url_fudging", 0)
;

-- Table `node`: structure 
DROP TABLE IF EXISTS `node`;
CREATE TABLE `node` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(10) unsigned NOT NULL,
  `form_id` int(10) unsigned DEFAULT NULL,
  `childform_id` int(10) unsigned DEFAULT NULL,
  `contentform_id` int(10) unsigned DEFAULT NULL,
  `box_depth` int(10) unsigned NOT NULL DEFAULT '0',
  `weight` int(10) unsigned NOT NULL DEFAULT '10',
  `access_restricted` tinyint(1) NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_change` int(10) unsigned DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `title` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cache_active` tinyint(1) DEFAULT NULL,
  `cache_childform_id` int(11) DEFAULT NULL,
  `cache_contentform_id` int(11) DEFAULT NULL,
  `cache_form_id` int(11) DEFAULT NULL,
  `cache_depth` int(11) DEFAULT NULL,
  `cache_box_depth` int(11) DEFAULT NULL,
  `cache_access_restricted_node_id` int(11) DEFAULT NULL,
  `cache_left_index` int(11) DEFAULT NULL,
  `cache_right_index` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `cache_left_index` (`cache_left_index`,`cache_right_index`),
  KEY `parent_id` (`parent_id`),
  KEY `form_id` (`form_id`),
  KEY `childform_id` (`childform_id`),
  KEY `contentform_id` (`contentform_id`),
  KEY `box_depth` (`box_depth`),
  KEY `weight` (`weight`),
  KEY `access_restricted` (`access_restricted`),
  KEY `active` (`active`),
  KEY `cache_active` (`cache_active`),
  KEY `cache_childform_id` (`cache_childform_id`),
  KEY `cache_contentform_id` (`cache_contentform_id`),
  KEY `cache_form_id` (`cache_form_id`),
  KEY `cache_depth` (`cache_depth`),
  KEY `cache_box_depth` (`cache_box_depth`),
  KEY `cache_access_restricted_node_id` (`cache_access_restricted_node_id`),
  KEY `cache_left_index_2` (`cache_left_index`),
  KEY `cache_right_index` (`cache_right_index`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `node`: 13 rows / 22 fields 
INSERT INTO `node` VALUES
  (1, "root", 0, 112, 208, 208, 1, 10, 0, "0000-00-00 00:00:00", 1316683154, 1, "aquarius-cms.ch", 1, 208, 208, 112, 0, 1, 0, 0, 24)
, (8, "home", 1, 101, 0, 0, 0, 10, 0, "0000-00-00 00:00:00", 1300962169, 1, "Home", 1, 208, 208, 101, 1, 0, 0, 1, 1)
, (14, "", 1, 0, 0, 0, 0, 30, 0, "0000-00-00 00:00:00", 1316696704, 1, "Basic", 1, 208, 208, 208, 1, 0, 0, 3, 3)
, (15, "not_found", 1, 245, 0, 0, 0, 100, 0, "0000-00-00 00:00:00", 1316683189, 0, "404", 0, 208, 208, 245, 1, 0, 0, 23, 23)
, (16, null, 21, 163, null, null, 0, 20, 0, "0000-00-00 00:00:00", null, 1, "Kontaktformular", 1, 208, 163, 163, 2, 0, 0, 16, 16)
, (17, "impressum", 1, 0, 0, 0, 0, 90, 0, "0000-00-00 00:00:00", 1316696729, 1, "Impressum", 1, 208, 208, 208, 1, 0, 0, 21, 21)
, (18, "news", 1, 237, 0, 236, 1, 60, 0, "0000-00-00 00:00:00", 1316696711, 1, "News", 1, 208, 236, 237, 1, 1, 0, 5, 9)
, (19, null, 18, null, null, null, 0, 10, 0, "0000-00-00 00:00:00", null, 1, "News 1", 1, 208, 236, 236, 2, 0, 0, 6, 6)
, (20, null, 18, null, null, null, 0, 20, 0, "0000-00-00 00:00:00", null, 1, "News 2", 1, 208, 236, 236, 2, 0, 0, 8, 8)
, (21, "contact", 1, 156, 0, 163, 1, 70, 0, "0000-00-00 00:00:00", 1316696720, 1, "Kontakt", 1, 208, 163, 156, 1, 1, 0, 15, 19)
, (22, null, 1, 248, null, null, 0, 65, 0, "0000-00-00 00:00:00", null, 1, "Carousel", 1, 208, 208, 248, 1, 0, 0, 11, 11)
, (23, null, 1, null, null, null, 0, 68, 0, "0000-00-00 00:00:00", null, 1, "Gallery", 1, 208, 208, 208, 1, 0, 0, 13, 13)
, (24, "contact", 21, 247, 0, 0, 0, 10, 0, "0000-00-00 00:00:00", 1347885123, 1, "Karte", 1, 208, 163, 247, 2, 0, 0, 18, 18)
;

-- Table `update_log`: structure 
DROP TABLE IF EXISTS `update_log`;
CREATE TABLE `update_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` int(10) unsigned NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `module` text COLLATE utf8_unicode_ci NOT NULL,
  `success` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `update_log`: 10 rows / 5 fields 
INSERT INTO `update_log` VALUES
  (2, 1316529362, "2011.05.06 add permission fields to user table.sql", "core", null)
, (4, 1316677225, "2011 Create dynform tables.sql", "dynform", null)
, (7, 1317038830, "***install_de.sql", "core", null)
, (8, 1317038832, "2011.07.04 add password_salt field for backend users.sql", "core", null)
, (9, 1328021367, "*** 02_Install_Blank_Website.sql", "core", 1)
, (10, 1328021370, "2011.10.06 add success column to update_log table.sql", "core", 0)
, (11, 1328021370, "2011.12.06 additional indexing for content_field_value and journal tables.sql", "core", 1)
, (12, 1328021371, "2011.10.04 index dynform tables.sql", "dynform", 1)
, (13, 1347872669, "*** example content.sql", "core", 1)
, (14, 1347872674, "2012.07.16 add content field cache.sql", "core", 1)
;

-- Table `users`: structure 
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `adminLanguage` enum('de','fr','en') COLLATE utf8_unicode_ci NOT NULL,
  `defaultLanguage` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `activation_permission` tinyint(1) NOT NULL DEFAULT '1',
  `delete_permission` tinyint(1) NOT NULL DEFAULT '1',
  `copy_permission` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `password` (`password`),
  KEY `active` (`active`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- Table `users2languages`: structure 
DROP TABLE IF EXISTS `users2languages`;
CREATE TABLE `users2languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `lg` char(2) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_lg_user` (`userId`,`lg`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `users2languages`: 0 rows / 3 fields 

-- Table `users2modules`: structure 
DROP TABLE IF EXISTS `users2modules`;
CREATE TABLE `users2modules` (
  `userId` int(11) NOT NULL,
  `moduleId` int(11) NOT NULL,
  PRIMARY KEY (`userId`,`moduleId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `users2modules`: 0 rows / 2 fields 

-- Table `users2nodes`: structure 
DROP TABLE IF EXISTS `users2nodes`;
CREATE TABLE `users2nodes` (
  `userId` int(11) NOT NULL,
  `nodeId` int(11) NOT NULL,
  PRIMARY KEY (`userId`,`nodeId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `users2nodes`: 0 rows / 2 fields 

-- Table `wording`: structure 
DROP TABLE IF EXISTS `wording`;
CREATE TABLE `wording` (
  `lg` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `translation` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`keyword`,`lg`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table `wording`: 21 rows / 3 fields 
INSERT INTO `wording` VALUES
  ("de", "back home", "Zurück zur Homepage")
, ("fr", "back home", "Retour à la page d\'acceil")
, ("en", "back home", "back home")
, ("de", "Grössere Kartenansicht anzeigen", "Grössere Kartenansicht anzeigen")
, ("fr", "Grössere Kartenansicht anzeigen", "Agrandir la carte")
, ("en", "Grössere Kartenansicht anzeigen", "Grössere Kartenansicht anzeigen")
, ("de", "please_fill_in_required_fields", "Füllen Sie bitte die Pflichtsfelder aus.")
, ("fr", "please_fill_in_required_fields", "Veuillez compléter les champs requis.")
, ("en", "please_fill_in_required_fields", "please_fill_in_required_fields")
, ("de", "these_fields_must_be_filled_in", "Bitte füllen.")
, ("fr", "these_fields_must_be_filled_in", "Champs requis")
, ("en", "these_fields_must_be_filled_in", "these_fields_must_be_filled_in")
, ("de", "reset", "Reset")
, ("fr", "reset", "Réinitialiser")
, ("en", "reset", "reset")
, ("de", "send", "Absenden")
, ("fr", "send", "Envoyer")
, ("en", "send", "send")
, ("de", "View details", "View details")
, ("fr", "View details", "View details")
, ("en", "View details", "View details")
;
