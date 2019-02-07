-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2013 at 02:31 AM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `fp_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` varchar(32) NOT NULL,
  `content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `content`) VALUES
('content_header', 'Test Content & More Content'),
('content_maincontent', '<p><strong>Test &amp; Test</strong></p>'),
('content_quote', '<p>"Quote here... Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\n<p><strong>Quisque magna enim, placerat a molestie sed, imperdiet vitae felis. Mauris tempor rutrum nibh, sed hendrerit lectus scelerisque id."</strong></p>'),
('content_attribution', '<b>~ John Smith</b>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '281ff8a6813d0eab69b165aa7417d811');
