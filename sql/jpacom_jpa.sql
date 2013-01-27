-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 27, 2013 at 07:30 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `jpacom_jpa`
--

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 NOT NULL,
  `direction` text NOT NULL,
  `index` int(11) NOT NULL,
  `name_en` text NOT NULL,
  `abbr` text NOT NULL,
  `first_letter` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `direction`, `index`, `name_en`, `abbr`, `first_letter`) VALUES
(1, 'English', 'ltr', 1, 'English', 'en', 1),
(2, 'فارسی', 'rtl', 2, 'Persian', 'pe', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE IF NOT EXISTS `menu_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 NOT NULL,
  `link` text CHARACTER SET utf8 NOT NULL,
  `language_id` int(11) NOT NULL,
  `index` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `title`, `link`, `language_id`, `index`) VALUES
(1, 'Home', '/', 1, 1),
(2, 'Network', '/network/', 1, 2),
(3, 'Web Design', '/webdesign/', 1, 3),
(4, 'About', '/about/', 1, 4),
(5, 'Contact', '/contact/', 1, 5),
(6, 'صفحه اصلی', '/', 2, 1),
(7, 'شبکه', '/network/', 2, 2),
(8, 'طراحی وب', '/webdesign/', 2, 3),
(9, 'درباره ما', '/about/', 2, 4),
(10, 'تماس با ما', '/contact/', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `start` int(11) NOT NULL COMMENT 'timestamp',
  `end` int(11) NOT NULL COMMENT 'timestamp',
  `department` text NOT NULL,
  `pack` text NOT NULL,
  `price` int(11) NOT NULL,
  `puzzle_id` text NOT NULL,
  `site_url` text NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `name`, `start`, `end`, `department`, `pack`, `price`, `puzzle_id`, `site_url`, `description`) VALUES
(1, 'JayKish', 0, 1325153792, 'Web Design Team', 'Small Business', 25000000, 'sample-work-1', 'http://jk-petro-oil.com/', 'The official website of the biggest company in oil and photochemistry industry. This website includes graphic level 2, Tracking system, 22 static pages and follows W3C XHTML Strict, the most strict and the best standard in the world.');

-- --------------------------------------------------------

--
-- Table structure for table `statics_en`
--

CREATE TABLE IF NOT EXISTS `statics_en` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `statics_en`
--

INSERT INTO `statics_en` (`id`, `name`, `title`, `body`, `description`, `keywords`) VALUES
(1, 'Welcome', 'Welcome to Jahan Pardazesh Alborz', '<p>Web design is the process of planning and creating a website. Text, images, digital media and interactive elements are shaped by the web designer to produce the page seen on the web browser.[1] Web designers utilize markup language, most notably HTML for structure and CSS for presentation to develop pages that can be read by web browsers.As a whole, the process of web design includes conceptualization, planning, post-production, research, advertising as well as media control that is applied to the pages within the site by the designer or group of designers with a specific purpose. The site itself can be divided into its main page, also known as the home page, which cites the main objective as well as highlights of the site''s daily updates; which also contains hyperlinks that functions to direct viewers to a designated page within the site''s domain.</p>\r\n', '', ''),
(2, 'Network-Services', 'Network-Services', '<p>Welcome to Jahan Pardazesh Alborz INC. Network-Services Welcome to Jahan Pardazesh Alborz INC. Network-Services Welcome to Jahan Pardazesh Alborz INC. Network-Services Welcome to Jahan Pardazesh Alborz INC. Network-Services Welcome to Jahan Pardazesh Alborz INC. Network-Services Welcome to Jahan Pardazesh Alborz INC. Network-Services Welcome to Jahan Pardazesh Alborz INC. Network-Services Welcome to Jahan Pardazesh Alborz INC. Network-Services Welcome to Jahan Pardazesh Alborz INC. Network-Services Welcome to Jahan Pardazesh Alborz INC. Network-Services Welcome to Jahan Pardazesh Alborz INC. Network-Services</p>', '', ''),
(3, 'Security', 'Security', '<p>Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security Security </p>', '', ''),
(4, 'Wireless-Services', 'Wireless-Services', '<p>Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services Wireless-Services</p> ', '', ''),
(5, 'Network Infrastructure', 'Network Infrastructure ', '<p>Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure Network Infrastructure </p>', '', ''),
(6, 'virtualization', 'virtualization ', '<p>virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization virtualization </p>', '', ''),
(7, 'Web Design', 'Web Design ', '<p>Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design Web Design</p> ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `statics_pe`
--

CREATE TABLE IF NOT EXISTS `statics_pe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `body` text CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `keywords` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `statics_pe`
--

INSERT INTO `statics_pe` (`id`, `name`, `title`, `body`, `description`, `keywords`) VALUES
(1, 'Welcome', 'به شرکت جهان پردازش البرز خوش آمدید', '<p>با ما به بی نهایت فکر کنید.\r\nشرکت جهان پردازش البرز پیشرو در خدمات شبکه، سخت افزار و نرم افزار. با ما به بی نهایت فکر کنید.\r\nشرکت جهان پردازش البرز پیشرو در خدمات شبکه، سخت افزار و نرم افزار. با ما به بی نهایت فکر کنید.\r\nشرکت جهان پردازش البرز پیشرو در خدمات شبکه، سخت افزار و نرم افزار. با ما به بی نهایت فکر کنید.\r\nشرکت جهان پردازش البرز پیشرو در خدمات شبکه، سخت افزار و نرم افزار. با ما به بی نهایت فکر کنید.\r\nشرکت جهان پردازش البرز پیشرو در خدمات شبکه، سخت افزار و نرم افزار. با ما به بی نهایت فکر کنید.\r\nشرکت جهان پردازش البرز پیشرو در خدمات شبکه، سخت افزار و نرم افزار. با ما به بی نهایت فکر کنید.\r\nشرکت جهان پردازش البرز پیشرو در خدمات شبکه، سخت افزار و نرم افزار. با ما به بی نهایت فکر کنید.\r\nشرکت جهان پردازش البرز پیشرو در خدمات شبکه، سخت افزار و نرم افزار. با ما به بی نهایت فکر کنید.\r\nشرکت جهان پردازش البرز پیشرو در خدمات شبکه، سخت افزار و نرم افزار. با ما به بی نهایت فکر کنید.\r\nشرکت جهان پردازش البرز پیشرو در خدمات شبکه، سخت افزار و نرم افزار. با ما به بی نهایت فکر کنید.\r\nشرکت جهان پردازش البرز پیشرو در خدمات شبکه، سخت افزار و نرم افزار.</p>', '', ''),
(2, 'Network-Services', 'سرویس شبکه', '<p>پیسش از طراحی فیزیکی شبکه در ابتدا و با رعایت اصول مدیریتی می بایست خواسته ها وانتظارات از شبکه مورد توجه قرار گیرد.به طورمثال برای داشتن شبکه ای کارا و پویا به چه سرویس هایی نیاز داریم؟ چه منابعی باید در دسترس قرار گیرد؟ این شبکه چه خدماتی ارائه می دهد؟ برای تامین سرویس ها و خدمات مورد نیاز چه اقداماتی می بایست انجام گیرد؟</p>', '', ''),
(3, 'Security', 'امنیت', '<p>با گسترش روز افزون جایگاه شبکه های کامپیوتری در چرخه ی کسب و کار سازمانی ضرورت توجه به امنیت اطلاعات بیش از پیش احساس می شود. طراحی مناسب و پشتیبانی لحظه ای با استفاده از راهکارهای مطمئن و استاندارد به وسیله ی نیروهای متخصص ضریب امنیت اطلاعات را تا حد زیادی بالا می برد.</p>', '', ''),
(4, 'Wireless-Services', 'سرویس بدون سیم', '<p>طراحی و پیاده شازی شبکه های وایرلس: استفاده ا شبکه های بی سیم به دلیل مزایای بی شمار آن روز بروز در حال افزایش است. این شبکه ها در قالب های مختلف بسته به نوع نیاز طبقه بندی می شوند که به طور مثال می توان از شبکه های محلی بی سیم(WLAN)  ، شبکه های شهری بی سیم (WMAN) ارتباطات Point to Point  و .. نام برد.</p>', '', ''),
(5, 'Network-Infrastructure', 'شبکه', '<p>امروزه شبکه هاي کامپیوتری  به جزء لاينفک سازمانها مبدل گرديده است و حتی می توان از آن ها به عنوان رگ های حیاتی چرخه ی سازمانی نام برد. طراحي و اجراي اين شبکه ها نیازمند درک و شناخت صحیح از استاندارد ها و تجهیزات مورد استفاده در این بستر می باشد تا با طراحی صحیح ، بستر مناسب برای تسریع فعالیت های بدون وقفه ی سازمانی فراهم آید.</p>', '', ''),
(6, 'Virtualization', 'مجازی سازی', '<p>مجازی سازی راه کاری نرم افزاری است که امکان اشتراک سخت افزار برای استفاده ی هم زمان چند نرم افزار کاربردی و سیستم عامل(Machine) بر روی یک کامپیوتر(Host) را فراهم می آورد. این فناوری در کاهش هزینه های سازمانی و مدیریت  متمرکز سرویس دهنده ها ی شبکه کمک به سزایی به مدیریت فناوری اطلاعات (CIO) می نماید. </p>', '', ''),
(7, 'Web-Design', 'طراحی وب', '<p>وبسایت یکی از موثر ترین و ارزان ترین روش های تبلیغات و ارتباط با مشتری است. همچنین یک وب سایت مناسب می تواند جلوه کار یک شرکت را تا حد زیادی بالا ببرد. تیم طراحی وب شرکت جهان پردازش البرز مفتخر به ارایه ی سرویس طراحی وب حرفه ای می باشد.  تمامی وب سایت های طراحی شده توسط این تیم از بالاترین استاندارد های جهانی بر خوردارند.</p>', '', '');
