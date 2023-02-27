-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 25, 2023 at 08:17 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `provincial_affairs`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `state_id` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `state_id` (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=506 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `state_id`) VALUES
(1, 'آذرشهر', 1),
(2, 'اسکو', 1),
(3, 'اهر', 1),
(4, 'بستان آباد', 1),
(5, 'بناب', 1),
(6, 'تبریز', 1),
(7, 'جلفا', 1),
(8, 'چار اویماق', 1),
(9, 'سراب', 1),
(10, 'شبستر', 1),
(11, 'عجبشیر', 1),
(12, 'کلیبر', 1),
(13, 'مراغه', 1),
(14, 'مرند', 1),
(15, 'ملکان', 1),
(16, 'میانه', 1),
(17, 'ورزقان', 1),
(18, 'هریس', 1),
(19, 'هشترود', 1),
(20, 'ارومیه', 2),
(21, 'اشنویه', 2),
(22, 'بوکان', 2),
(23, 'پیر انشهر', 2),
(24, 'تکاب', 2),
(25, 'چالدران', 2),
(26, 'خوی', 2),
(27, 'سردشت', 2),
(28, 'سلماس', 2),
(29, 'شاهین دژ', 2),
(30, 'ماکو', 2),
(31, 'مهاباد', 2),
(32, 'میاندوآب', 2),
(33, 'نقده', 2),
(34, 'اردبیل', 3),
(35, 'بیله سوار', 3),
(36, 'پارس آباد', 3),
(37, 'خلخال', 3),
(38, 'کوثر', 3),
(39, 'گرمی', 3),
(40, 'مشکین شهر', 3),
(41, 'نمین', 3),
(42, 'نیر', 3),
(43, 'آران و بیدگل', 4),
(44, 'اردستان', 4),
(45, 'اصفهان', 4),
(46, 'برخوار و میمه', 4),
(47, 'تیران و کرون', 4),
(48, 'چادگان', 4),
(49, 'خمینی شهر', 4),
(50, 'خوانسار', 4),
(51, 'سمیرم', 4),
(52, 'شاهین شهر و میمه', 4),
(53, 'شهر رضا', 4),
(54, 'سمیرم سفلی', 4),
(55, 'فریدن', 4),
(56, 'فریدون شهر', 4),
(57, 'فلاورجان', 4),
(58, 'کاشان', 4),
(59, 'گلپایگان', 4),
(60, 'لنجان', 4),
(61, 'مبارکه', 4),
(62, 'نائین', 4),
(63, 'نجف آباد', 4),
(64, 'نطنز', 4),
(65, 'ساوجبلاق', 5),
(66, 'کرج', 5),
(67, 'نظرآباد', 5),
(68, 'طالقان', 5),
(69, 'آبدانان', 6),
(70, 'ایلام', 6),
(71, 'ایوان', 6),
(72, 'دره شهر', 6),
(73, 'دهلران', 6),
(74, 'شیران و چرداول', 6),
(75, 'مهران', 6),
(76, 'بوشهر', 7),
(77, 'تنگستان', 7),
(78, 'جم', 7),
(79, 'دشتستان', 7),
(80, 'دشتی', 7),
(81, 'دیر', 7),
(82, 'دیلم', 7),
(83, 'کنگان', 7),
(84, 'گناوه', 7),
(85, 'اسلام شهر', 8),
(86, 'پاکدشت', 8),
(87, 'تهران', 8),
(88, 'دماوند', 8),
(89, 'رباط کریم', 8),
(90, 'ری', 8),
(91, 'شمیرانات', 8),
(92, 'شهریار', 8),
(93, 'فیروزکوه', 8),
(94, 'ورامین', 8),
(95, 'اردل', 9),
(96, 'بروجن', 9),
(97, 'شهرکرد', 9),
(98, 'فارسان', 9),
(99, 'کوهرنگ', 9),
(100, 'لردگان', 9),
(101, 'بیرجند', 10),
(102, 'درمیان', 10),
(103, 'سرایان', 10),
(104, 'سر بیشه', 10),
(105, 'فردوس', 10),
(106, 'قائن', 10),
(107, 'نهبندان', 10),
(108, 'بردسکن', 11),
(109, 'بجستان', 11),
(110, 'تایباد', 11),
(111, 'تحت جلگه', 11),
(112, 'تربت جام', 11),
(113, 'تربت حیدریه', 11),
(114, 'چناران', 11),
(115, 'جغتای', 11),
(116, 'جوین', 11),
(117, 'خلیل آباد', 11),
(118, 'خواف', 11),
(119, 'درگز', 11),
(120, 'رشتخوار', 11),
(121, 'زاوه', 11),
(122, 'سبزوار', 11),
(123, 'سرخس', 11),
(124, 'فریمان', 11),
(125, 'قوچان', 11),
(126, 'طرقبه و شاندیز', 11),
(127, 'کاشمر', 11),
(128, 'کلات', 11),
(129, 'گناباد', 11),
(130, 'مشهد', 11),
(131, 'مه ولات', 11),
(132, 'نیشابور', 11),
(133, 'اسفراین', 12),
(134, 'بجنورد', 12),
(135, 'جاجرم', 12),
(136, 'شیروان', 12),
(137, 'فاروج', 12),
(138, 'مانه و سملقان', 12),
(139, 'آبادان', 13),
(140, 'امیدیه', 13),
(141, 'اندیمشک', 13),
(142, 'اهواز', 13),
(143, 'ایذه', 13),
(144, 'باغ ملک', 13),
(145, 'بندرماهشهر', 13),
(146, 'بهبهان', 13),
(147, 'خرمشهر', 13),
(148, 'دزفول', 13),
(149, 'دشت آزادگان', 13),
(150, 'رامشیر', 13),
(151, 'رامهرمز', 13),
(152, 'شادگان', 13),
(153, 'شوش', 13),
(154, 'شوشتر', 13),
(155, 'گتوند', 13),
(156, 'لالی', 13),
(157, 'مسجد سلیمان', 13),
(158, 'هندیجان', 13),
(159, 'ابهر', 14),
(160, 'ایجرود', 14),
(161, 'خدابنده', 14),
(162, 'خرمدره', 14),
(163, 'زنجان', 14),
(164, 'طارم', 14),
(165, 'ماه نشان', 14),
(166, 'دامغان', 15),
(167, 'سمنان', 15),
(168, 'شاهرود', 15),
(169, 'گرمسار', 15),
(170, 'مهدی شهر', 15),
(171, 'ایرانشهر', 16),
(172, 'چابهار', 16),
(173, 'خاش', 16),
(174, 'دلگان', 16),
(175, 'زابل', 16),
(176, 'زاهدان', 16),
(177, 'زهک', 16),
(178, 'سراوان', 16),
(179, 'سرباز', 16),
(180, 'کنارک', 16),
(181, 'نیکشهر', 16),
(182, 'آباده', 17),
(183, 'ارسنجان', 17),
(184, 'استهبان', 17),
(185, 'اقلید', 17),
(186, 'بوانات', 17),
(187, 'پاسارگاد', 17),
(188, 'جهرم', 17),
(189, 'خرم بید', 17),
(190, 'خنج', 17),
(191, 'داراب', 17),
(192, 'زرین دشت', 17),
(193, 'سپیدان', 17),
(194, 'شیراز', 17),
(195, 'فراشبند', 17),
(196, 'فسا', 17),
(197, 'فیروزآباد', 17),
(198, 'قیر و کارزین', 17),
(199, 'کازرون', 17),
(200, 'لارستان', 17),
(201, 'لامرد', 17),
(202, 'مرودشت', 17),
(203, 'ممسنی', 17),
(204, 'مهر', 17),
(205, 'نی ریز', 17),
(206, 'آبیک', 18),
(207, 'البرز', 18),
(208, 'بوئین زهرا', 18),
(209, 'تاکستان', 18),
(210, 'قزوین', 18),
(211, 'قم', 19),
(212, 'بانه', 20),
(213, 'بیجار', 20),
(214, 'دیواندره', 20),
(215, 'سروآباد', 20),
(216, 'سقز', 20),
(217, 'سنندج', 20),
(218, 'قروه', 20),
(219, 'کامیاران', 20),
(220, 'مریوان', 20),
(221, 'بافت', 21),
(222, 'بردسیر', 21),
(223, 'بم', 21),
(224, 'جیرفت', 21),
(225, 'راور', 21),
(226, 'رفسنجان', 21),
(227, 'رودبار جنوب', 21),
(228, 'زرند', 21),
(229, 'سیرجان', 21),
(230, 'شهر بابک', 21),
(231, 'عنبرآباد', 21),
(232, 'قلعه گنج', 21),
(233, 'کرمان', 21),
(234, 'کوهبنان', 21),
(235, 'کهنوج', 21),
(236, 'منوجان', 21),
(237, 'اسلام آباد غرب', 22),
(238, 'پاوه', 22),
(239, 'ثلاث باباجانی', 22),
(240, 'جوانرود', 22),
(241, 'دالاهو', 22),
(242, 'روانسر', 22),
(243, 'سر پل ذهاب', 22),
(244, 'سنقر', 22),
(245, 'صحنه', 22),
(246, 'قصر شیرین', 22),
(247, 'کرمانشاه', 22),
(248, 'کنگاور', 22),
(249, 'گیلان غرب', 22),
(250, 'هرسین', 22),
(251, 'بویر احمد', 23),
(252, 'بهمئی', 23),
(253, 'دنا', 23),
(254, 'کهگیلویه', 23),
(255, 'گچساران', 23),
(256, 'آزادشهر', 24),
(257, 'آق قلا', 24),
(258, 'بندر گز', 24),
(259, 'بندر ترکمن', 24),
(261, 'علی آباد', 24),
(262, 'کرد کوی', 24),
(263, 'کلاله', 24),
(264, 'گرگان', 24),
(265, 'گنبد کاووس', 24),
(266, 'مینو دشت', 24),
(267, 'آستارا', 25),
(268, 'آستانه اشرفیه', 25),
(269, 'املش', 25),
(270, 'بندر انزلی', 25),
(271, 'رشت', 25),
(272, 'رضوانشهر', 25),
(273, 'رودبار', 25),
(274, 'رودسر', 25),
(275, 'سیاهکل', 25),
(276, 'شفت', 25),
(277, 'صومعه سرا', 25),
(278, 'طوالش', 25),
(279, 'فومن', 25),
(280, 'لاهیجان', 25),
(281, 'لنگرود', 25),
(282, 'ماسال', 25),
(283, 'ازنا', 26),
(284, 'الیگودرز', 26),
(285, 'بروجرد', 26),
(286, 'پلدختر', 26),
(287, 'خرم آباد', 26),
(288, 'دورود', 26),
(289, 'لامرد', 17),
(290, 'مرودشت', 17),
(291, 'ممسنی', 17),
(292, 'مهر', 17),
(293, 'نی ریز', 17),
(294, 'آبیک', 18),
(295, 'البرز', 18),
(296, 'بوئین زهرا', 18),
(297, 'تاکستان', 18),
(298, 'قزوین', 18),
(300, 'بانه', 20),
(301, 'بیجار', 20),
(302, 'دیواندره', 20),
(303, 'سروآباد', 20),
(304, 'سقز', 20),
(305, 'سنندج', 20),
(306, 'قروه', 20),
(307, 'کامیاران', 20),
(308, 'مریوان', 20),
(309, 'بافت', 21),
(310, 'بردسیر', 21),
(311, 'بم', 21),
(312, 'جیرفت', 21),
(313, 'راور', 21),
(314, 'رفسنجان', 21),
(315, 'رودبار جنوب', 21),
(316, 'زرند', 21),
(317, 'سیرجان', 21),
(318, 'شهر بابک', 21),
(319, 'عنبرآباد', 21),
(320, 'قلعه گنج', 21),
(321, 'کرمان', 21),
(322, 'کوهبنان', 21),
(323, 'کهنوج', 21),
(324, 'منوجان', 21),
(325, 'اسلام آباد غرب', 22),
(326, 'پاوه', 22),
(327, 'ثلاث باباجانی', 22),
(328, 'جوانرود', 22),
(329, 'دالاهو', 22),
(330, 'روانسر', 22),
(331, 'سر پل ذهاب', 22),
(332, 'سنقر', 22),
(333, 'صحنه', 22),
(334, 'قصر شیرین', 22),
(335, 'کرمانشاه', 22),
(336, 'کنگاور', 22),
(337, 'گیلان غرب', 22),
(338, 'هرسین', 22),
(339, 'بویر احمد', 23),
(340, 'بهمئی', 23),
(341, 'دنا', 23),
(342, 'کهگیلویه', 23),
(343, 'گچساران', 23),
(344, 'آزادشهر', 24),
(345, 'آق قلا', 24),
(346, 'بندر گز', 24),
(347, 'بندر ترکمن', 24),
(348, 'رامیان', 24),
(349, 'علی آباد', 24),
(350, 'کرد کوی', 24),
(351, 'کلاله', 24),
(352, 'گرگان', 24),
(353, 'گنبد کاووس', 24),
(354, 'مینو دشت', 24),
(355, 'آستارا', 25),
(356, 'آستانه اشرفیه', 25),
(357, 'املش', 25),
(358, 'بندر انزلی', 25),
(359, 'رشت', 25),
(360, 'رضوانشهر', 25),
(361, 'رودبار', 25),
(362, 'رودسر', 25),
(363, 'سیاهکل', 25),
(364, 'شفت', 25),
(365, 'صومعه سرا', 25),
(366, 'طوالش', 25),
(367, 'فومن', 25),
(368, 'لاهیجان', 25),
(369, 'لنگرود', 25),
(370, 'ماسال', 25),
(371, 'ازنا', 26),
(372, 'الیگودرز', 26),
(373, 'بروجرد', 26),
(374, 'پلدختر', 26),
(375, 'خرم آباد', 26),
(376, 'دورود', 26),
(377, 'دلفان', 26),
(378, 'سلسله', 26),
(379, 'کوهدشت', 26),
(380, 'الشتر', 26),
(381, 'نورآباد', 26),
(382, 'آمل', 27),
(383, 'بابل', 27),
(384, 'بابلسر', 27),
(385, 'بهشهر', 27),
(386, 'تنکابن', 27),
(387, 'جویبار', 27),
(388, 'چالوس', 27),
(389, 'رامسر', 27),
(390, 'ساری', 27),
(391, 'سوادکوه', 27),
(392, 'قائم شهر', 27),
(393, 'گلوگاه', 27),
(394, 'محمود آباد', 27),
(395, 'نکا', 27),
(396, 'نور', 27),
(397, 'نوشهر', 27),
(398, 'فریدونکنار', 27),
(399, 'آشتیان', 28),
(400, 'اراک', 28),
(401, 'تفرش', 28),
(402, 'خمین', 28),
(403, 'دلیجان', 28),
(404, 'زرندیه', 28),
(405, 'ساوه', 28),
(406, 'شازند', 28),
(407, 'کمیجان', 28),
(408, 'محلات', 28),
(409, 'بندرعباس', 29),
(410, 'میناب', 29),
(411, 'بندر لنگه', 29),
(412, 'رودان-دهبارز', 29),
(413, 'جاسک', 29),
(414, 'قشم', 29),
(415, 'حاجی آباد', 29),
(416, 'ابوموسی', 29),
(417, 'بستک', 29),
(418, 'گاوبندی', 29),
(419, 'خمیر', 29),
(420, 'اسدآباد', 30),
(421, 'بهار', 30),
(422, 'تویسرکان', 30),
(423, 'رزن', 30),
(424, 'کبودر آهنگ', 30),
(425, 'ملایر', 30),
(426, 'نهاوند', 30),
(427, 'همدان', 30),
(428, 'ابرکوه', 31),
(429, 'اردکان', 31),
(430, 'بافق', 31),
(431, 'تفت', 31),
(432, 'خاتم', 31),
(433, 'صدوق', 31),
(434, 'طبس', 31),
(435, 'مهریز', 31),
(436, 'میبد', 31),
(437, 'یزد', 31),
(438, 'یاسوج', 23),
(439, 'دهدشت', 23),
(440, 'لیکک', 23),
(441, 'تالش', 25),
(442, 'شهداد', 21),
(443, 'ماهان', 21),
(444, 'انار', 21),
(445, 'هشتگرد', 5),
(446, 'فردیس', 5),
(447, 'محمدشهر', 5),
(448, 'کمالشهر', 5),
(449, 'خورموج', 7),
(450, 'برازجان', 7),
(451, 'تسوج', 1),
(452, 'قیدار', 14),
(453, 'هیدج', 14),
(454, 'صائین قلعه', 14),
(455, 'بسطام', 15),
(456, 'سرابله', 6),
(457, 'ماهدشت', 5),
(458, 'حصارک', 5),
(459, 'اشتهارد', 5),
(460, 'ریگان', 21),
(461, 'زهکلوت', 21),
(462, 'سرابله', 6),
(463, 'دلوار', 7),
(464, 'سرخه', 15),
(465, 'هیرمند', 16),
(466, 'بزمان', 16),
(467, 'انزلی', 25),
(468, 'آستانه اشرفیه', 25),
(469, 'احمدآباد', 31),
(470, 'اشکذر', 31),
(471, 'بهاباد', 31),
(472, 'هرات', 31),
(473, 'چیذر', 8),
(476, 'قمصر', 4),
(477, 'برزک', 4),
(478, 'نراق', 4),
(479, 'خان ببین', 24),
(480, 'انبارالوم', 24),
(481, 'خلیل شهر', 27),
(482, 'رستمکلا', 27),
(483, 'شیرگاه', 27),
(484, 'کلاردشت', 27),
(485, 'گتاب', 27),
(486, 'بشاگرد', 29),
(487, 'پارسیان', 29),
(488, 'سندرک', 29),
(489, 'سیریک', 29),
(490, 'مریانج', 30),
(491, 'قروه درگزین', 30),
(492, 'فامنین', 30),
(493, 'درگزین', 30),
(494, 'چایپاره', 2),
(495, 'آوج', 18),
(496, 'اندیکا', 13),
(497, 'جعفریه', 19),
(498, 'سجاس', 14),
(501, 'کمال آباد', 5),
(502, 'هشتگرد (ساوجبلاغ)', 5),
(503, 'فرخ شهر', 9),
(504, 'کیان', 9),
(505, 'هفشجان', 9);

-- --------------------------------------------------------

--
-- Table structure for table `education_year_info`
--

DROP TABLE IF EXISTS `education_year_info`;
CREATE TABLE IF NOT EXISTS `education_year_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subject` varchar(10) COLLATE utf8mb4_persian_ci NOT NULL,
  `active` char(1) COLLATE utf8mb4_persian_ci NOT NULL DEFAULT '1',
  `adder` int NOT NULL,
  `added_date` varchar(25) COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_education_year_info_users` (`adder`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT='اطلاعات سال تحصیلی';

-- --------------------------------------------------------

--
-- Table structure for table `gauges_info`
--

DROP TABLE IF EXISTS `gauges_info`;
CREATE TABLE IF NOT EXISTS `gauges_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `edu_id` int NOT NULL,
  `gauge_id` int NOT NULL,
  `gauge_grade` float NOT NULL,
  `report` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'گزارش اقدامات بر اساس کاربرگ فعالیت',
  `index_num` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'شماره نامه مستندات',
  `index_date` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'تاریخ نامه مستندات',
  `index_file_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci COMMENT 'فایل مستندات',
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci COMMENT 'توضیحات',
  `approved` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL DEFAULT '0' COMMENT 'تایید شده',
  `approver` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'کاربر تایید کننده',
  `approve_date` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'تاریخ تایید',
  `approve_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci COMMENT 'توضیحات تاییدیه',
  `adder` int NOT NULL,
  `added_date` varchar(25) COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_gauges_info_education_year_info` (`edu_id`),
  KEY `fk_gauges_info_gauge_options` (`gauge_id`),
  KEY `fk_gauges_info_users` (`adder`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT='اطلاعات اصلی ثبت شده';

-- --------------------------------------------------------

--
-- Table structure for table `gauge_options`
--

DROP TABLE IF EXISTS `gauge_options`;
CREATE TABLE IF NOT EXISTS `gauge_options` (
  `id` int NOT NULL AUTO_INCREMENT,
  `parent_id` int NOT NULL,
  `subject` varchar(500) COLLATE utf8mb4_persian_ci NOT NULL,
  `factor` int NOT NULL COMMENT 'ضریب موضوع',
  `status` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'نام و ارزش امتیاز',
  `help` text COLLATE utf8mb4_persian_ci COMMENT 'راهنما',
  `repetable` char(1) COLLATE utf8mb4_persian_ci NOT NULL DEFAULT '0' COMMENT 'قابل تکرار باشد یا خیر',
  `active` char(1) COLLATE utf8mb4_persian_ci NOT NULL DEFAULT '1',
  `adder` int NOT NULL,
  `added_date` varchar(25) COLLATE utf8mb4_persian_ci NOT NULL,
  `editor` int DEFAULT NULL,
  `edited_date` varchar(25) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_gauge_options_wisdom_index_options` (`parent_id`),
  KEY `fk_gauge_options_users` (`adder`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT='جدول سنجه ها';

-- --------------------------------------------------------

--
-- Table structure for table `log_provincial_affairs`
--

DROP TABLE IF EXISTS `log_provincial_affairs`;
CREATE TABLE IF NOT EXISTS `log_provincial_affairs` (
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `macro_index_options`
--

DROP TABLE IF EXISTS `macro_index_options`;
CREATE TABLE IF NOT EXISTS `macro_index_options` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subject` varchar(500) COLLATE utf8mb4_persian_ci NOT NULL,
  `status` char(1) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'برای استان باشد یا مدرسه؟\nاستان: 1\nمدرسه: 2\nستاد: 3',
  `active` char(1) COLLATE utf8mb4_persian_ci NOT NULL DEFAULT '1',
  `adder` int NOT NULL,
  `added_date` varchar(25) COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_macro_index_options_users` (`adder`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT='جدول موضوعات کلان';

--
-- Dumping data for table `macro_index_options`
--

INSERT INTO `macro_index_options` (`id`, `subject`, `status`, `active`, `adder`, `added_date`) VALUES
(1, 'برنامه ریزی و نظارت پژوهش', '1', '1', 1, '1401/12/3 07:52:01'),
(2, 'زیرساخت های پژوهشی', '1', '1', 1, '1401/12/4 09:54:15'),
(3, 'آموزش پژوهش', '1', '1', 1, '1401/12/4 09:55:05'),
(4, 'فعالیت های پژوهشی', '1', '1', 1, '1401/12/4 09:55:36'),
(5, 'فرهنگ سازی پژوهش', '1', '1', 1, '1401/12/4 10:01:10'),
(6, 'حمایت و پشتیبانی', '1', '1', 1, '1401/12/4 10:01:28'),
(7, 'منابع انسانی و مالی', '1', '1', 1, '1401/12/4 10:01:57'),
(8, 'ارتباطات و تعاملات با ستاد و مدارس', '1', '1', 1, '1401/12/4 10:02:22'),
(9, 'سایر فعالیت ها مبتنی بر خلاقیت ها و نوآوری ها', '1', '1', 1, '1401/12/4 10:02:59');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subject` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `link` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `icon` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `access` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `Is_Parent` tinyint NOT NULL,
  `childs` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `subject`, `link`, `icon`, `access`, `Is_Parent`, `childs`) VALUES
(1, 'صفحه اصلی', 'panel.php', 'fa-home', '1|2|3', 0, NULL),
(2, 'آمار و گزارشات', '#', 'fa-bar-chart', '3', 1, NULL),
(3, 'کاتالوگ های استان', 'state_catalogs.php', 'fa-toggle-on', '3', 0, NULL),
(4, 'کاتالوگ های واحد پژوهشی', 'unit_catalogs.php', 'fa-toggle-on', '3', 0, NULL),
(5, 'مدیریت کاربران', 'user_manager.php', 'fa-users', '3', 0, NULL),
(6, 'خروج', 'logout.php', 'fa-sign-out', '1|2|3', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`) VALUES
(1, 'آذربایجان شرقی'),
(2, 'آذربایجان غربی'),
(3, 'اردبیل'),
(4, 'اصفهان'),
(5, 'البرز'),
(6, 'ایلام'),
(7, 'بوشهر'),
(8, 'تهران'),
(9, 'چهارمحال و بختیاری'),
(10, 'خراسان جنوبی'),
(11, 'خراسان رضوی'),
(12, 'خراسان شمالی'),
(13, 'خوزستان'),
(14, 'زنجان'),
(15, 'سمنان'),
(16, 'سیستان و بلوچستان'),
(17, 'فارس'),
(18, 'قزوین'),
(19, 'قم'),
(20, 'کردستان'),
(21, 'کرمان'),
(22, 'کرمانشاه'),
(23, 'کهگیلویه و بویراحمد'),
(24, 'گلستان'),
(25, 'گیلان'),
(26, 'لرستان'),
(27, 'مازندران'),
(28, 'مرکزی'),
(29, 'هرمزگان'),
(30, 'همدان'),
(31, 'یزد');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `family` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `national_code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_persian_ci NOT NULL,
  `phone` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `address` text COLLATE utf8mb4_persian_ci,
  `state` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `unit` varchar(200) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `type` int NOT NULL COMMENT 'نوع کاربری\r\nمدرسه:1\r\nاستان:2\r\nستاد:3',
  `approved` int NOT NULL DEFAULT '1',
  `position` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'سمت',
  `contract_method` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'نوع قرارداد',
  `adder` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `added_date` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `editor` int DEFAULT NULL,
  `edited_date` varchar(25) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT='جدول کاربران';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `family`, `national_code`, `gender`, `phone`, `address`, `state`, `city`, `unit`, `type`, `approved`, `position`, `contract_method`, `adder`, `added_date`, `editor`, `edited_date`) VALUES
(1, 'test', '$argon2i$v=19$m=65536,t=4,p=1$VFV1bzE1TzdwcWpSdnR5SQ$cvTqQYRtzK2OiJqx2OLtZ6ea1lAllZf345XRTSw3X/g', 'محمد', 'عاشوری', '371714941', '', '09398888226', 'ستاد جمکران', 'قم', NULL, NULL, 3, 1, 'کارشناس سامانه', NULL, '1', '1401', NULL, NULL),
(2, 'test2', '$argon2i$v=19$m=65536,t=4,p=1$dnJGM1REZFZZNEtuMkFhUw$Ayr+c9pSJxqjwMUsAH/b9frW1sU7iSRIAmhgE1ZWhds', 'ali', 'alavi', 'test2', 'مرد', '6546464464', 'اردبیل کوچه 2', '3', '', 'سید رضی', 1, 1, NULL, NULL, '1', '1401/12/2 13:22:23', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wisdom_index_options`
--

DROP TABLE IF EXISTS `wisdom_index_options`;
CREATE TABLE IF NOT EXISTS `wisdom_index_options` (
  `id` int NOT NULL AUTO_INCREMENT,
  `parent_id` int NOT NULL,
  `subject` varchar(500) COLLATE utf8mb4_persian_ci NOT NULL,
  `active` char(1) COLLATE utf8mb4_persian_ci DEFAULT '1',
  `adder` int NOT NULL,
  `added_date` varchar(25) COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_wisdom_index_options_macro_index_options` (`parent_id`),
  KEY `fk_wisdom_index_options_users` (`adder`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT='جدول موضوعات خرد';

--
-- Dumping data for table `wisdom_index_options`
--

INSERT INTO `wisdom_index_options` (`id`, `parent_id`, `subject`, `active`, `adder`, `added_date`) VALUES
(1, 1, 'داشتن چشم انداز و پیشنهاد برنامه‌های کوتاه مدت و برخورداری از برش استانی پژوهش بر مبنای سند جامع برای استان', '1', 1, '1401/12/3 08:01:52'),
(2, 1, 'پیشنهاد اصلاح مقررات، آیین نامه ها، دستورالعمل ها، استانداردها و شاخص پژوهشی', '1', 1, '1401/12/3 08:03:08'),
(3, 1, 'تهیه و تنظیم گزارش عملکرد پژوهشی به صورت دوره ای و موردی', '1', 1, '1401/12/3 09:24:38'),
(4, 1, 'تهیه، تنظیم و پیشنهاد برنامه و بودجه سالانه پژوهشی حوزه علمیه استان و توزیع اعتبارات بر اساس برنامه مصوب', '1', 1, '1401/12/4 09:53:36'),
(5, 1, 'شورای پژوهش استان', '1', 1, '1401/12/4 09:53:45'),
(6, 1, 'نظارت بر اجرای آیین نامه ها و دستورالعمل های ابلاغی ستاد', '1', 1, '1401/12/4 09:53:59'),
(7, 2, 'تاسیس پژوهش سراها، واحدهای پژوهشی (گروه پژوهشی، مرکز پژوهشی، پژوهشکده، موسسه پژوهشی و پژوهشگاه)، انجمن‌، قطب علمی، کرسی آزاد اندیشی، نشریه', '1', 1, '1401/12/4 09:54:58'),
(8, 3, 'نظارت و برگزاری دوره ها و کارگاه‌های پژوهشی برای طلاب و اساتید و کادر مدارس', '1', 1, '1401/12/4 09:55:16'),
(9, 4, 'کمیته‌های آزاداندیشی و انجمن‌های علمی', '1', 1, '1401/12/4 10:00:04'),
(10, 4, 'پروژه های پژوهشی سالیانه استان', '1', 1, '1401/12/4 10:00:10'),
(11, 4, 'تشکیل نمایشگاه پژوهشی از فعالیت‌ها ودستاوردهای پژوهشی استان‌ها', '1', 1, '1401/12/4 10:00:17'),
(12, 4, 'فعالیت های پژوهشی (جشنواره علامه حلی، مجلات استانی،همایش کتاب سال حوزه )', '1', 1, '1401/12/4 10:00:27'),
(13, 4, 'نشریه استانی', '1', 1, '1401/12/4 10:00:35'),
(14, 4, 'نشست علمی', '1', 1, '1401/12/4 10:00:39'),
(15, 5, 'بزرگداشت آیین هفته پژوهش و بزرگداشت هفته کتاب', '1', 1, '1401/12/4 10:01:18'),
(16, 6, 'شناسایی آثار و محصولات پژوهشی پژوهشگران شامل پایان نامه، کتاب ، طرح پژوهشی ،مقاله و معرفی به ستاد به منظور حمایت مادی و معنوی', '1', 1, '1401/12/4 10:01:42'),
(17, 6, 'شناسایی و ساماندهی پژوهشگران و منابع انسانی پژوهش', '1', 1, '1401/12/4 10:01:47'),
(18, 7, 'تامین منابع انسانی (جذب و بکارگیری معاونان، کتابداران و همکاران پژوهش)', '1', 1, '1401/12/4 10:02:07'),
(19, 8, 'تعاملات و ارتباطات برون حوزوی', '1', 1, '1401/12/4 10:02:30'),
(20, 8, 'تعاملات و ارتباطات با ستاد', '1', 1, '1401/12/4 10:02:34'),
(21, 8, 'تعاملات و ارتباطات با واحدهای آموزشی تابعه و بازدید از واحدهای آموزشی', '1', 1, '1401/12/4 10:02:37'),
(22, 9, 'خلاقیت ها و ابتکارات و دیگر اقدامات پژوهشی', '1', 1, '1401/12/4 10:03:12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
