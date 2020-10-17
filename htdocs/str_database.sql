-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 01:50 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `str_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` bigint(20) UNSIGNED NOT NULL,
  `project` bigint(20) UNSIGNED NOT NULL,
  `org` varchar(432) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cell_num` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL,
  `access` varchar(16) NOT NULL,
  `date_created` datetime NOT NULL,
  `token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='A table for user accounts';

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `project`, `org`, `first_name`, `middle_name`, `last_name`, `username`, `email`, `cell_num`, `password`, `access`, `date_created`, `token`) VALUES
(1, 3, 'Philippine Science High School - Eastern Visayas Campus', 'Shann Aurelle ', 'Graniten', 'Ripalda', 'shannadmin', 'shannuaurelleg@gmail.com', '09566809833', '$2y$10$U27Jo1UBvHe4zj3KvjnJVekdzrmYeiFLJ4XrCXfvybJ3z.uNmapR6', 'Admin', '2019-08-22 00:00:00', NULL),
(6, 1, 'Philippine Science High School - Eastern Visayas Campus', 'Shann Aurelle', 'Graniten', 'Ripalda', 'sageadmin', 'shannaurelleg@gmail.com', '09566809833', '$2y$10$UFoVNFYg/z.lpAGGFbmx.ecdOI1LZycGGAvAjIqfpO0ByVhdOVcki', 'Admin', '2019-09-23 00:00:00', NULL),
(18, 4, 'PSHS-EVC', 'Michael Sean Brian', 'Billate', 'Omisol', 'Vaccaria', 'megamanXhetahazard@gmail.com', '09182348706', '$2y$10$RE3mWMf7qSQJxDRUoVlGse9f5IL6szHnaZ0gCi8BRNEgDb3Gq3lK.', 'Admin', '2019-12-10 00:00:00', 'e8cb063860ecf00db98058245ce805fd224b387dc36ebd83e17f655dd1e02117bebf46ef438eb02fa60e79019b44de2c98bd'),
(19, 2, 'PSHS-EVC', 'Michael', 'Sean', 'Brian', 'rimfire123', 'porn@gmail.com', '09182348706', '$2y$10$2L7xXng5cpsZtxIhADe3U.EHDb0YtrcEhmiAQvqe0IpUl7.zbu4Xe', 'Admin', '2019-12-10 00:00:00', '23e1f224478532e998ac8805280e51e57bdc3ddfd878168c0243ee95596e0819cd31e7f05e50642692cea49269b570b33ad1'),
(21, 1, 'Philippine Science High School - Eastern Visayas Campus', 'Researcher', 'Dummy', 'Dummy', 'dummyresearcher', 'dummy@gmail.com', '095638387567', '$2y$10$3yJS6VhSFcpI5yVfQlXgDeT9J/JXH9pMH/JCtsykbWc0RFthW3ZRO', 'Researcher', '2020-01-24 00:00:00', 'b36c770f324bc61d429bcb3234e73169871b2193de03eb1b387822311440f19facde108e5202a7c46b19f3ace90691d5a5a2');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` tinytext NOT NULL,
  `article_title` text NOT NULL,
  `article_tagline` text NOT NULL,
  `article_content` longtext NOT NULL,
  `article_datetime` datetime NOT NULL,
  `article_edittime` datetime NOT NULL,
  `article_contributor` varchar(255) NOT NULL,
  `article_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `article_title`, `article_tagline`, `article_content`, `article_datetime`, `article_edittime`, `article_contributor`, `article_status`) VALUES
('5df334333f05f', 'Li Europan lingues', 'here we go', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu commun paroles.', '2019-12-13 02:48:19', '0000-00-00 00:00:00', 'Michael Omisol', 'Active'),
('5df334872a916', 'Li Europan lingues', 'asd', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu commun paroles.', '2019-12-13 02:49:43', '0000-00-00 00:00:00', 'Michael Omisol', 'Active'),
('5df334de9943a', 'Li Europan lingues', 'asd', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu commun paroles.', '2019-12-13 02:51:10', '0000-00-00 00:00:00', 'Michael Omisol', 'Active'),
('5df3350bac8b0', 'Li Europan lingues', 'asda', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu commun paroles.', '2019-12-13 02:51:55', '0000-00-00 00:00:00', 'Michael Omisol', 'Active'),
('5df3352065aef', 'Li Europan lingues', 'asdasd', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu commun paroles.', '2019-12-13 02:52:16', '0000-00-00 00:00:00', 'Michael Omisol', 'Active'),
('5df335270ddf2', 'Li Europan lingues', 'asdasd', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu commun paroles.', '2019-12-13 02:52:23', '0000-00-00 00:00:00', 'Michael Omisol', 'Active'),
('5df3352e02abc', 'Li Europan lingues', 'lkjlkjl', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu commun paroles.', '2019-12-13 02:52:30', '0000-00-00 00:00:00', 'Michael Omisol', 'Active'),
('5df3353566573', 'Li Europan lingues', 'kljlkj', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu commun paroles.', '2019-12-13 02:52:37', '0000-00-00 00:00:00', 'Michael Omisol', 'Active'),
('5df3354461399', 'Li Europan lingues', '6546546', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu commun paroles.', '2019-12-13 02:52:52', '0000-00-00 00:00:00', 'Michael Omisol', 'Active'),
('5df33550eae7f', 'Li Europan lingues', 'ghfhgfgh', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu commun paroles.', '2019-12-13 02:53:04', '0000-00-00 00:00:00', 'Michael Omisol', 'Active'),
('5df3355a17eca', 'Li Europan lingues', 'yutuytuy', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu commun paroles.', '2019-12-13 02:53:14', '0000-00-00 00:00:00', 'Michael Omisol', 'Active'),
('5df4340737202', 'Li Europan lingues', 'ALRIGHTY', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu commun paroles.', '2019-12-14 08:59:51', '0000-00-00 00:00:00', 'Michael Omisol', 'Active'),
('5df43d0188387', 'Li Europan lingues', 'STILL MY HEART IS BLAZING', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu commun paroles.', '2019-12-14 09:38:09', '0000-00-00 00:00:00', 'Michael Omisol', 'Active'),
('5df43fb97598d', 'Li Europan lingues', 'asd', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu commun paroles.', '2019-12-14 09:49:45', '0000-00-00 00:00:00', 'Michael Omisol', 'Active'),
('5df43fe6eb7a0', 'Li Europan lingues', 'asd', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu commun paroles.', '2019-12-14 09:50:30', '0000-00-00 00:00:00', 'Michael Omisol', 'Active'),
('5df4402ea651c', 'Li Europan lingues', 'STILL MY HEART IS BLAZING', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu commun paroles.', '2019-12-14 09:51:42', '0000-00-00 00:00:00', 'Michael Omisol', 'Active'),
('5df440544596a', 'Li Europan lingues', 'STILL MY HEART IS BLAZING', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu commun paroles.', '2019-12-14 09:52:20', '0000-00-00 00:00:00', 'Michael Omisol', 'Active'),
('5df44083ed453', 'Before the moon&#39;s domination', 'still', '<p><strong>I want us to meet again.</strong></p>', '2019-12-14 09:53:07', '2020-01-06 01:39:10', 'Michael Omisol', 'Active'),
('5e1eaaff21ff9', 'asdsad', 'asd', 'asdasd', '2020-01-15 02:02:39', '2020-01-15 02:02:39', 'Ripalda, Shann Aurelle Graniten', 'Active'),
('5e1eab16556c9', 'asdsad', 'asd', 'asdasd', '2020-01-15 02:03:02', '2020-01-15 02:03:02', 'Ripalda, Shann Aurelle Graniten', 'Active'),
('5e1eb03d26aef', 'a', 's', '<p><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABgCAIAAAAip+O/AAAFXElEQVR42u2bT0xcVRTGH6j8S0ObEUwIYAnFkAZDkIaaxoJglGYwtoZIF5hoYtRoWxemaePCTaPphp2LGtPGdsUC40QNlpZEIUCDQoqEFBsMRVSUVJBUKh1QEO98X+Z5Onfe+AYmwvDuWXw5ufPNfec3c9+79743k9LV1WVFi9ra2qjt3d3dm8qfYgAMgAEwAAZgXQCrq6sJPHBdXZ3lLhL1wRkA1UVKip1nZGQoLSgoiFH61NSU0sXFxagwBiAeAJYuiy4uLrZfnZiYsMuN/SphiGEA3AHI0mtqaqKW5RQ6TE9Pj40Rbz3JD7C2y5nf71fa2Nhot8/OzkZgjI+PR7y3pKQkovScnBw7DwQCSjs6OuKqx3sAHDzNzc1WeDAMDw8rraiosHMZHB5ymDGknzkHXmtrqxVtmjMA4cjMzLTCg4fDRh5eIjmFk5/DyWkgGYC7AeSQ4IEJI09KfUEhL6/SPzAwEOHxEoD7iYNL5fr6eit8oZQXRAnjBkAWrQcvwbK2BMzEngCIHXyXU8jT2gBEewOXDzx9JYB7GB1AFq3nwWDQACD0wcMD6DCyUB2Jywp5cnOocJGnA8gF9tYFcDORcQGnA8iD6duaeAGYc5PEcLPVNACJAHATTkPdqwAyDIABSG6AeCcyvYi1AcipSl46ZTjdAPYSAEuXt2+dph4JIG+lSJjOzk7r7oWDLJH96EhyOjMA7gBYqL71YbtenAFwBmC4eXQnyyWYftl1Wq7FjoTtBzYpgPsbW4cxnbXxbZqfg0oWujYAfpyHoUdcPPzzBsAL27crbUHuW1mx2z+ALkDfWlj4TyQ9dmVnKz2O/DXoMvr/FfkJ6Kvt7Z4HeL2wUOkZ5L8sLSm9H/mH0EHo2fR0298E/UR71OfPzVUaQP4V/I+Lfl7S+j/Cj6+tzfMAb5aVKX0b+dU7d5TuRv45dAj6flaW7U+FXoEuwM94TLRfg/8n5HugDVr/70Cbz5/f0gCxJ7KPjx1T+i5azkKP47TjrfFPhf/E/Lydfybas+Fn/AW9DzoP/6BwHoI+CT+P9QqUH9xTp097EoDxzcmTVvhrvenzKd2B/Bp0F/SJuTnb3w5Ng/rgZ/wJzYfOwX8DOfVhaCr8PNZ16IuXLlnrXAslPcCXp05Z4VMwF5dCnoh/QP0sd2YmVC7yy9BC4WesiP5n4Gfwgd426LPCz6O8gcuotwEYvS2hxUReXp7Sv9HCxw/PQ6enp20AFrQTSr8e9DO+gGZC84X/5XPnYtSzVQDW9nObrjOhhUU1Wh6AcsPJk/s74Xf68ZP+ELYX+tDBg3HV41WAKxcuKH1atBcVFSnlpMUpjT+AmpyctD05op1+GV9D8x2OawDC0XL0qNJHkD8I5cWU25dtooUTG7cyPtED2/fCP6f1/xH8VU1NBsDhDe9hWcFJjQtoLpdLS0vtFku0j42NRfRwC/oo/Le0/gPwlzc0eAYg3h+a3oMlQKUGMDo6GhWgDJshGbehP8J/W+s/Df5qbQgl7Je7SQzw/WBo+/FMebkV3nQzeGtqZGREaYbWvhd+5vLGyw34I2/FqMED/w/I9xw4YABE/Iwv/bnK0PBJE+3cpgwNDdkt8tVK+OkJivbrwh/U/Fzo7d63zwCImMWi4FBVldJ7RTuHwcjgvxt0+WoV/MvIl0S79C9p/t+Q7xQXgK0L4H4iu4mF8bf9/Va0k7VafN0SoB9+AiyLdulf1vy/I98htpcJmImTHoBx+eJFu0TeouL2smb/ftuTKvx9fX0RJVqanz3wRO+FPz0rK8JvAMKx6f4MagAMwDoBEvt33P/fbwA22m8ANtpvADban/QA/wAWl7+qYdC6CgAAAABJRU5ErkJggg==\" /></p>', '2020-01-15 02:25:01', '2020-01-15 02:41:15', 'Ripalda, Shann Aurelle Graniten', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `datasets`
--

CREATE TABLE `datasets` (
  `SubmissionID` varchar(255) NOT NULL,
  `ScientificName` varchar(255) NOT NULL,
  `Orderr` varchar(255) NOT NULL,
  `Class` varchar(255) NOT NULL,
  `Genus` varchar(255) NOT NULL,
  `Species` varchar(255) NOT NULL,
  `SpeciesEpithet` varchar(255) NOT NULL,
  `Subspecies` varchar(255) NOT NULL,
  `Collector` varchar(255) NOT NULL,
  `CollectorID` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `YearOfCollection` varchar(255) NOT NULL,
  `MonthOfCollection` varchar(255) NOT NULL,
  `DayOfCollection` varchar(255) NOT NULL,
  `GPSLocation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datasets`
--

INSERT INTO `datasets` (`SubmissionID`, `ScientificName`, `Orderr`, `Class`, `Genus`, `Species`, `SpeciesEpithet`, `Subspecies`, `Collector`, `CollectorID`, `Location`, `YearOfCollection`, `MonthOfCollection`, `DayOfCollection`, `GPSLocation`) VALUES
('1-1', 'Oedipus oedipus', 'MILF Hunter', 'Legendary', 'Humanoid', 'Homo', 'Homoerectur', 'Ano Ito', 'Michael', '14-064-2018', 'Cotabato', '2019', 'April', '14', 'SOMETHWERE');

-- --------------------------------------------------------

--
-- Table structure for table `edit_datasets`
--

CREATE TABLE `edit_datasets` (
  `SubmissionID` varchar(255) NOT NULL,
  `ScientificName` varchar(255) NOT NULL,
  `Orderr` varchar(255) NOT NULL,
  `Class` varchar(255) NOT NULL,
  `Genus` varchar(255) NOT NULL,
  `Species` varchar(255) NOT NULL,
  `SpeciesEpithet` varchar(255) NOT NULL,
  `Subspecies` varchar(255) NOT NULL,
  `Collector` varchar(255) NOT NULL,
  `CollectorID` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `YearOfCollection` varchar(255) NOT NULL,
  `MonthOfCollection` varchar(255) NOT NULL,
  `DayOfCollection` varchar(255) NOT NULL,
  `GPSLocation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edit_datasets`
--

INSERT INTO `edit_datasets` (`SubmissionID`, `ScientificName`, `Orderr`, `Class`, `Genus`, `Species`, `SpeciesEpithet`, `Subspecies`, `Collector`, `CollectorID`, `Location`, `YearOfCollection`, `MonthOfCollection`, `DayOfCollection`, `GPSLocation`) VALUES
('1-1', '', '', '', 'asdasd', '', '', '', '', '', '', '', 'asdasd', '', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `filelist`
--

CREATE TABLE `filelist` (
  `field1` int(11) NOT NULL,
  `field2` varchar(255) NOT NULL,
  `field3` varchar(255) NOT NULL,
  `field4` varchar(255) NOT NULL,
  `field5` varchar(255) NOT NULL,
  `field6` varchar(255) NOT NULL,
  `field7` varchar(255) NOT NULL,
  `field8` datetime NOT NULL,
  `statusreport` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filelist`
--

INSERT INTO `filelist` (`field1`, `field2`, `field3`, `field4`, `field5`, `field6`, `field7`, `field8`, `statusreport`) VALUES
(28, '1', 'sageadmin', '2020-01-22', 'Anemometer.docx', 'Admin', 'Shann AurelleGranitenRipalda', '2020-01-22 05:13:41', 'pending'),
(29, '1', 'sageadmin', '2020-01-22', 'STRv.5.3.2.zip', 'Admin', 'Shann AurelleGranitenRipalda', '2020-01-22 05:19:29', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `filepaths`
--

CREATE TABLE `filepaths` (
  `ancestor` bigint(20) UNSIGNED NOT NULL,
  `descendant` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filepaths`
--

INSERT INTO `filepaths` (`ancestor`, `descendant`) VALUES
(1, 1),
(1, 2),
(2, 2),
(2, 3),
(3, 3),
(1, 3),
(2, 4),
(3, 4),
(1, 4),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `file_id` bigint(20) UNSIGNED NOT NULL,
  `project` bigint(20) UNSIGNED NOT NULL,
  `author` bigint(20) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `file_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `project`, `author`, `date_created`, `date_modified`, `file_name`) VALUES
(1, 4, 1, '2019-08-22 00:00:00', '2019-08-22 00:00:00', 'testfile.php'),
(2, 4, 1, '2019-08-22 00:00:00', '2019-08-22 00:00:00', 'tulips.jpeg'),
(3, 4, 1, '2019-08-26 00:00:00', '2019-08-26 00:00:00', 'alean.jpeg'),
(4, 4, 1, '2019-08-26 00:00:00', '2019-08-26 00:00:00', 'test.txt');

-- --------------------------------------------------------

--
-- Table structure for table `ip`
--

CREATE TABLE `ip` (
  `address` varchar(16) COLLATE utf8_bin NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ip`
--

INSERT INTO `ip` (`address`, `timestamp`) VALUES
('::1', '2020-01-24 09:20:18'),
('::1', '2020-01-24 09:22:23'),
('::1', '2020-01-24 09:23:04');

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `org_id` bigint(20) UNSIGNED NOT NULL,
  `org_name` varchar(255) DEFAULT NULL,
  `org_members` bigint(20) NOT NULL,
  `date_joined` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='A table for affiliated organizations';

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`org_id`, `org_name`, `org_members`, `date_joined`) VALUES
(1, 'Philippine Science High School - Eastern Visayas Campus', 50, '2018-08-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_head` varchar(255) NOT NULL,
  `project_members` bigint(20) NOT NULL,
  `project_desc` text NOT NULL,
  `access_type` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `project_head`, `project_members`, `project_desc`, `access_type`) VALUES
(1, 'Project 1', 'Carlo Chris Apurillo', 15, 'This project serves to study the relationship between the vegetation from the land and the sea.', 'Researcher'),
(2, 'Project 2', 'Janeth Morata Fuentes', 12, 'This study explores the characteristics of the water samples from four sites namely: Lake Danao, Kalanggaman Island, Cuatro Islas, and San Pedro Bay ', 'Researcher'),
(3, 'Project 3', 'Anariza Gozon', 12, 'This study focuses on the relationship between the geoomorphical characteristics of the Binahaan River system to its surrounding vegetation', 'Researcher'),
(4, 'Project 4', 'Rolex Emmanuel Padilla', 6, 'This study aims to provide a website for collecting results and presenting valuable data from the BiVER Program', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

CREATE TABLE `submissions` (
  `account` bigint(20) UNSIGNED NOT NULL,
  `project` bigint(20) UNSIGNED NOT NULL,
  `researcher` varchar(532) NOT NULL,
  `organization` varchar(532) NOT NULL,
  `submission` varchar(532) NOT NULL,
  `submit_date` datetime NOT NULL,
  `status` varchar(8) NOT NULL,
  `access` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submissions`
--

INSERT INTO `submissions` (`account`, `project`, `researcher`, `organization`, `submission`, `submit_date`, `status`, `access`) VALUES
(2313144, 1, 'Shann', 'adadasdsa', 'fefegehrh.pkp', '2019-12-11 00:00:00', 'pending', 'Researcher'),
(31312313, 1231421421, 'safsafasafafs', 'safasffaf', 'afasfsafs', '2019-12-11 00:00:00', 'Pending', 'Researcher'),
(312141241, 4, 'sasfagavafa', 'asffasfsafasfasf', 'seggag.txt', '2019-12-11 00:00:00', 'pending', 'Researcher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`),
  ADD KEY `WORKSFOR` (`project`),
  ADD KEY `org` (`org`);

--
-- Indexes for table `filelist`
--
ALTER TABLE `filelist`
  ADD PRIMARY KEY (`field1`);

--
-- Indexes for table `filepaths`
--
ALTER TABLE `filepaths`
  ADD KEY `ancestor` (`ancestor`),
  ADD KEY `descendant` (`descendant`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`file_id`),
  ADD KEY `project` (`project`),
  ADD KEY `author` (`author`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`org_id`),
  ADD UNIQUE KEY `org_id_2` (`org_id`),
  ADD KEY `org_id` (`org_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`),
  ADD UNIQUE KEY `project_id_2` (`project_id`),
  ADD KEY `project_name` (`project_name`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `submissions`
--
ALTER TABLE `submissions`
  ADD PRIMARY KEY (`account`),
  ADD KEY `project` (`project`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `filelist`
--
ALTER TABLE `filelist`
  MODIFY `field1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `file_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `org_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `WORKSFOR` FOREIGN KEY (`project`) REFERENCES `projects` (`project_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `filepaths`
--
ALTER TABLE `filepaths`
  ADD CONSTRAINT `BELONGSTO` FOREIGN KEY (`ancestor`) REFERENCES `files` (`file_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `OWNS` FOREIGN KEY (`descendant`) REFERENCES `files` (`file_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `ISFOR` FOREIGN KEY (`project`) REFERENCES `projects` (`project_id`),
  ADD CONSTRAINT `PLACEDBY` FOREIGN KEY (`author`) REFERENCES `accounts` (`account_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
