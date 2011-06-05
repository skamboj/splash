-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 184.168.194.11
-- Generation Time: Jun 04, 2011 at 06:15 PM
-- Server version: 5.0.91
-- PHP Version: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `splashuser`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `attributevalues`
--

CREATE TABLE `attributevalues` (
  `id` int(10) NOT NULL auto_increment,
  `attribute_id` int(10) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `attribute_id` (`attribute_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `charities`
--

CREATE TABLE `charities` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `url` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `charities_attributes`
--

CREATE TABLE `charities_attributes` (
  `charity_id` int(10) NOT NULL,
  `attribute_id` int(10) NOT NULL,
  `attributevalue_id` int(10) NOT NULL,
  KEY `charity_id` (`charity_id`),
  KEY `attribute_id` (`attribute_id`),
  KEY `attributevalue_id` (`attributevalue_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL auto_increment,
  `fb_id` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_attributes`
--

CREATE TABLE `users_attributes` (
  `user_id` int(10) NOT NULL,
  `attribute_id` int(10) NOT NULL,
  `value` varchar(255) NOT NULL,
  KEY `user_id` (`user_id`),
  KEY `attribute_id` (`attribute_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_charities`
--

CREATE TABLE `users_charities` (
  `user_id` int(10) NOT NULL,
  `charity_id` int(10) NOT NULL,
  KEY `user_id` (`user_id`),
  KEY `charity_id` (`charity_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
