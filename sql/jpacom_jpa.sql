-- phpMyAdmin SQL Dump
-- version 2.7.0-pl2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Dec 07, 2011 at 11:58 AM
-- Server version: 5.0.18
-- PHP Version: 5.1.1
-- 
-- Database: `jpacom_jpa`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `statics_en`
-- 

CREATE TABLE `statics_en` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `statics_en`
-- 

INSERT INTO `statics_en` VALUES (1, 'Welcome', 'JPA', '							<h1 class="H1-black-font"><span class="font-title-big-black-font">W</span>elcome to Jahan Pardazesh Alborz official website!</h1>\r\n							<h2 class="H2-black-font">Web design is the process of planning and creating a website. Text, images, digital media and interactive elements are shaped by the web designer to produce the page seen on the web browser.[1] Web designers utilize markup language, most notably HTML for structure and CSS for presentation to develop pages that can be read by web browsers.As a whole, the process of web design includes conceptualization, planning, post-production, research, advertising as well as media control that is applied to the pages within the site by the designer or group of designers with a specific purpose. The site itself can be divided into its main page, also known as the home page, which cites the main objective as well as highlights of the site''s daily updates; which also contains hyperlinks that functions to direct viewers to a designated page within the site''s domain.</h2>\r\n', '', '');
INSERT INTO `statics_en` VALUES (2, 'Services-brief', 'Services-brief', '							<h1 class="H1-white-font"><span class="font-title-big-white-font">W</span>elcome to Jahan Pardazesh Alborz official website!</h1>\r\n							<h3 class="H3-white-font">Web design is the process of planning and creating a website. Text, images, digital media and interactive elements are shaped by the web designer to produce the page seen on the web browser.[1] Web designers utilize markup language, most notably HTML for structure and CSS for presentation to develop pages that can be read by web browsers.As a whole, the process of web design includes conceptualization, planning, post-production, research, advertising as well as media control that is applied to the pages within the site by the designer or group of designers with a specific purpose. The site itself can be divided into its main page, also known as the home page, which cites the main objective as well as highlights of the site''s daily updates; which also contains hyperlinks that functions to direct viewers to a designated page within the site''s domain.</h3>\r\n	', '', '');
