-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 29, 2011 at 10:34 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `jpacom_jpa`
--

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `start` int(11) NOT NULL COMMENT 'timestamp',
  `end` int(11) NOT NULL COMMENT 'timestamp',
  `departmentId` int(11) NOT NULL,
  `packId` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `puzzle_id` text NOT NULL,
  `site_url` text NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `name`, `start`, `end`, `departmentId`, `packId`, `price`, `puzzle_id`, `site_url`, `description`) VALUES
(1, 'JayKish', 0, 1325153792, 1, 1, 25000000, 'sample-work-1', 'http://jk-petro-oil.com/', 'The official website of the biggest company in oil and photochemistry industry. This website includes graphic level 2, Tracking system, 22 static pages and follows W3C XHTML Strict, the most strict and the best standard in the world.');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `statics_en`
--

INSERT INTO `statics_en` (`id`, `name`, `title`, `body`, `description`, `keywords`) VALUES
(1, 'Welcome', 'JPA', '							<h1 class="H1-black-font"><span class="font-title-big-black-font">W</span>elcome to Jahan Pardazesh Alborz official website!</h1>\r\n							<h2 class="H2-black-font">Web design is the process of planning and creating a website. Text, images, digital media and interactive elements are shaped by the web designer to produce the page seen on the web browser.[1] Web designers utilize markup language, most notably HTML for structure and CSS for presentation to develop pages that can be read by web browsers.As a whole, the process of web design includes conceptualization, planning, post-production, research, advertising as well as media control that is applied to the pages within the site by the designer or group of designers with a specific purpose. The site itself can be divided into its main page, also known as the home page, which cites the main objective as well as highlights of the site''s daily updates; which also contains hyperlinks that functions to direct viewers to a designated page within the site''s domain.</h2>\r\n', '', ''),
(2, 'Services-brief', 'Services-brief', '							<h1 class="H1-white-font"><span class="font-title-big-white-font">W</span>elcome to Jahan Pardazesh Alborz official website!</h1>\r\n							<h3 class="H3-white-font">Web design is the process of planning and creating a website. Text, images, digital media and interactive elements are shaped by the web designer to produce the page seen on the web browser.[1] Web designers utilize markup language, most notably HTML for structure and CSS for presentation to develop pages that can be read by web browsers.As a whole, the process of web design includes conceptualization, planning, post-production, research, advertising as well as media control that is applied to the pages within the site by the designer or group of designers with a specific purpose. The site itself can be divided into its main page, also known as the home page, which cites the main objective as well as highlights of the site''s daily updates; which also contains hyperlinks that functions to direct viewers to a designated page within the site''s domain.</h3>\r\n	', '', '');
