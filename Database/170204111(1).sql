-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2020 at 10:07 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `170204111`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `useradmin` text,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `useradmin`, `password`) VALUES
(6, 'shweta', 'shweta');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Id` int(50) NOT NULL,
  `Name` text,
  `Author` text NOT NULL,
  `publication` varchar(100) NOT NULL,
  `Catagory` varchar(50) DEFAULT NULL,
  `Price` varchar(50) DEFAULT NULL,
  `description` varchar(50) NOT NULL,
  `createdate` datetime(6) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Id`, `Name`, `Author`, `publication`, `Catagory`, `Price`, `description`, `createdate`, `quantity`, `img`) VALUES
(151, 'Computer Science', 'Richard Morgan', 'Onnoprokash', 'Academic Books', '100', 'This book is about microprocessor and visual basis', '2020-09-05 13:37:34.728658', '200', '1ac.jpg'),
(152, 'Php for absolute begginers', 'Jason', 'Onnoprokash', 'Academic Books', '500', 'This book is about learning from beginning php', '2020-09-16 10:00:00.000648', '200', '2ac.jpg'),
(153, 'Programming php', 'Kalvin', 'Onnoprokash', 'Academic Books', '400', 'This book is about learning php', '2020-09-02 17:29:30.626626', '200', '3ac.jpg'),
(154, 'CSS and HTML web design', 'Kalvin', 'Onnoprokash', 'Academic Books', '600', 'This book is about learning from beginning HTML AN', '2020-09-10 13:39:39.697603', '200', '4ac.jpg'),
(155, 'Truth about html5', 'Jason', 'Onnoprokash', 'Academic Books', '700', 'Truth about html5', '2020-09-02 17:00:00.720000', '200', '5ac.jpg'),
(156, 'Php for the web', 'Kalvin', 'Onnoprokash', 'Academic Books', '700', 'Php about Web', '2020-09-09 12:26:47.759798', '195', '10ac.jpg'),
(157, 'Tin Goyenda', 'Rokib Hasan', 'Batighor Prokashoni', 'Adventure', '200', 'This book is aboutadventure', '2020-09-06 11:18:00.000000', '195', '1adv.jpg'),
(163, 'Sharlock Homess', 'Conal Doyle', 'Panjeree Publication', 'Adventure', '200', 'Sharlock Homes Adventure stories', '2020-09-16 12:18:00.000000', '200', '6adv.jpg'),
(164, 'Anna Frank', 'Anna Frank', 'Panjeree Publication', 'Biography', '300', 'A biography of a girl name Anna Frank', '2020-09-01 16:43:40.825434', '200', '1bio.jpg'),
(165, 'Cleopetra', 'Henri Raider', 'Panjeree Publication', 'Biography', '200', 'Ceopetra Biography', '2020-09-10 00:39:45.949903', '0', '2bio.jpg'),
(166, 'Karagarer Rojonamocha', 'Sekh Mujibur Rahman', 'Adorsho', 'Biography', '400', 'Sekh Mujibar Rahman own writing story while in pri', '2020-09-06 15:18:00.000000', '200', '3bio.jpg'),
(167, 'Fokir Lalon Shah', 'Soktinath Jha', 'Somoy Prokashon', 'Biography', '200', 'Fokir Lalon shah story', '2020-09-24 15:18:00.000000', '100', '4bio.jpg'),
(168, 'Nelson Mendela', 'Nelson Mendela', 'Prothoma Prokashon', 'Biography', '200', 'Nelson mendela Biography', '2020-09-06 09:18:00.000000', '200', '5bio.jpg'),
(169, 'Gandhi Manosh', 'Mohashweta debi', 'Batighor Prokashoni', 'Biography', '200', 'Gandhiji Biography', '2020-09-06 15:18:00.000000', '300', '6bio.jpg'),
(193, 'Horror Seven', 'Anish Das Basu', 'Panjeree Publication', 'Horror', '200', 'This is  a story by Anish Das Basu', '2020-09-16 11:00:00.000000', '0', '1horror.jpg'),
(194, 'Sera Bhoot', 'Anish Das Basu', 'Panjeree Publication', 'Horror', '400', 'This is  a story by Anish Das Basu', '2020-09-02 19:43:48.000747', '0', '2horror.jpg'),
(195, 'Oloukik o voutik golpo', 'Bivutivushon Bandapadhyay', 'Panjeree Publication', 'Horror', '400', 'This is  a story by Bivutivushon Bondopaddhay', '2020-09-16 17:00:48.700762', '0', '3horror.jpg'),
(196, 'Amar Priyo Voutik Golpo', 'Humayun Ahmed', 'Panjeree Publication', 'Horror', '200', 'This is  a story by Humayun Ahmed', '2020-09-16 10:39:44.739645', '200', '4horror.jpg'),
(197, 'GosaiBaganerBhoot', 'Sirshendu Mukkhopadhyay', 'Panjeree Publication', 'Horror', '100', 'This is  a story by Sirshendu Mukkhopaddhay', '2020-09-08 07:29:23.395918', '185', '5horror.jpg'),
(198, 'Hazar Bochor Dhore', 'Jahir Rayhan', 'Panjeree Publication', 'Top Rated Books', '200', 'This are the top rated books', '2020-09-06 04:18:00.000000', '100', '1trp.jpg'),
(199, 'Podda Nodir Majhi', 'Manik Bongopaddhay', 'Panjeree Publication', 'Top Rated Books', '200', 'This are the top rated books', '2020-09-06 08:18:00.000000', '100', '2trp.jpg'),
(200, 'Ami e Misir Ali', 'Humayun Ahmed', 'Panjeree Publication', 'Top Rated Books', '200', 'This are the top rated books', '2020-09-06 20:18:00.000000', '100', '3trp.jpg'),
(201, 'Bangla vashar byakaron', 'Nobom Doshom', 'Panjeree Publication', 'Top Rated Books', '200', 'This are the top rated books', '2020-09-06 15:34:00.000000', '100', '4trp.jpg'),
(202, 'Sukumar Somogro', 'Sukumar Ray', 'Panjeree Publication', 'Top Rated Books', '200', 'This are the top rated books', '2020-09-06 12:18:00.000000', '100', '5trp.jpg'),
(203, 'Ekjon Mayaboti', 'Humayun Ahmed', 'Panjeree Publication', 'Top Rated Books', '200', 'This are the top rated books', '2020-09-06 12:18:00.000000', '100', '6trp.jpg'),
(204, 'Tituni ebong Tituni', 'Md. Jafar Iqbal', 'Onnoprokash', 'Book Fair Books', '300', 'This are the Book Fair Books', '2020-09-10 11:00:00.000000', '100', '1fair.jpg'),
(205, 'Kobi', 'Tarasongkar Bandapadhyay', 'Onnoprokash', 'Book Fair Books', '300', 'This are the Book Fair Books', '2020-09-25 00:00:00.000000', '100', '2fair.jpg'),
(206, 'Sonar Bangla', 'Narayan Bongopadhyay', 'Onnoprokash', 'Book Fair Books', '300', 'This are the Book Fair Books', '2020-09-02 08:00:00.000000', '100', '3fair.jpg'),
(207, 'Cyclone', 'Md. Jafar Iqbal', 'Onnoprokash', 'Book Fair Books', '300', 'This are the Book Fair Books', '2020-09-05 15:00:00.000000', '100', '4fair.jpg'),
(208, 'English Grammer In Use', 'Rymond Murphy', 'Onnoprokash', 'Book Fair Books', '300', 'This are the Book Fair Books', '2020-09-10 14:29:00.000000', '100', '5fair.jpg'),
(209, 'Begginer''s English', 'Cindy', 'Onnoprokash', 'Book Fair Books', '300', 'This are the Book Fair Books', '2020-09-10 14:43:00.000000', '50', '6fair.jpg'),
(210, 'Dekha na dekha', 'Humayun Ahmed', 'Adorsho', 'New Published Books', '400', 'This are the New Published Books', '2020-09-03 15:42:00.000000', '200', '1new.jpg'),
(211, 'Moner Manush', 'Sunil Gangopaddhay', 'Adorsho', 'New Published Books', '400', 'This are the New Published Books', '2020-09-09 15:23:00.000000', '200', '2new.jpg'),
(212, 'Sei Somoy', 'Sunil Gangopadhyay', 'Adorsho', 'New Published Books', '400', 'This are the New Published Books', '2020-09-09 00:00:00.000000', '200', '3new.jpg'),
(213, 'Journey Of inspiration', 'Sunil Pandey', 'Adorsho', 'New Published Books', '400', 'This are the New Published Books', '2020-09-04 13:00:00.000000', '200', '4new.jpg'),
(214, 'Moddho Juger Varotiyo Sohor', 'Aniruddho Ray', 'Adorsho', 'New Published Books', '400', 'This are the New Published Books', '2020-09-09 10:32:00.000000', '200', '5new.jpg'),
(215, 'Rich Dad Poor Dad', 'Robert', 'Adorsho', 'New Published Books', '400', 'This are the New Published Books', '2020-09-09 12:31:00.000000', '195', '6new.jpg'),
(216, 'Jibanu', 'Rupok Saha', 'Prothoma Prokashon', 'Drama', '100', 'This is  a Drama Story', '2020-09-02 10:00:00.000000', '100', '1dra.jpg'),
(217, 'Koriolenas', 'William Shakespeare', 'Prothoma Prokashon', 'Drama', '100', 'This is  a Drama Story', '2020-09-18 11:00:00.000000', '100', '2dra.jpg'),
(218, 'Hazar Bochor Dhore', 'Jahir Rayhan', 'Prothoma Prokashon', 'Drama', '100', 'This is  a Drama Story', '2020-09-11 15:00:00.000000', '90', '3dra.jpg'),
(219, 'Fotik Ghosh', 'Shirshendu Mukhopadhyay ', 'Prothoma Prokashon', 'Drama', '100', 'This is  a Drama Story', '2020-09-05 15:00:00.000000', '0', '4dra.jpg'),
(220, 'Those Days', 'Sunil Gangopadhyay', 'Prothoma Prokashon', 'Drama', '100', 'This is  a Drama Story', '2020-09-03 10:00:00.000000', '0', '5dra.jpg'),
(222, 'Botku Babur Choshma', 'Shirshendu Mukhopadhyay ', 'Panjeree Publication', 'kids', '100', 'This is a Kids Book', '2020-09-04 16:00:00.000700', '100', '1kids.jpg'),
(223, 'Pagla Dasu', 'Sukumar Ray', 'Panjeree Publication', 'kids', '100', 'This is a Kids Book', '2020-09-04 18:00:00.000000', '97', '2kids.jpg'),
(224, 'Volu Jokhon Raja Holo', 'Shirshendu Mukhopadhyay ', 'Panjeree Publication', 'kids', '100', 'This is a Kids Book', '2020-09-17 14:32:31.481466', '100', '3kids.jpg'),
(225, 'Pachjon Dustu Chele', 'Sumonto Aslam', 'Panjeree Publication', 'kids', '100', 'This is a Kids Book', '2020-09-23 18:43:00.000000', '95', '4kids.jpg'),
(226, 'Kakababu o chondondossu', 'Sunil Gangopadhyay', 'Panjeree Publication', 'kids', '100', 'This is a Kids Book', '2020-09-09 00:00:35.000590', '200', '5kids.jpg'),
(227, 'Kishor Kolpobiggan Somogro', 'Sunil Gangopadhyay', 'Panjeree Publication', 'kids', '100', 'This is a Kids Book', '2020-09-02 09:00:33.000000', '200', '6kids.jpg'),
(228, 'Kakababu o ek chhoddobeshi', 'Sunil Gangopadhyay', 'Panjeree Publication', 'kids', '100', 'This is a Kids Book', '2020-09-04 20:00:45.000762', '100', '7kids.jpg'),
(229, 'Rupelstick skin', 'Unknown', 'Adorsho', 'Fairytale', '100', 'This is a Fairy Tale', '2020-09-09 15:00:00.000000', '0', '1fairy.jpg'),
(230, 'Arobbo Rojoni', 'Unknown', 'Adorsho', 'Fairytale', '100', 'This is a Fairy Tale', '0000-00-00 00:00:00.000000', '200', '2fairy.jpg'),
(231, 'The Wild Swins', 'Hans', 'Adorsho', 'Fairytale', '100', 'This is a Fairy Tale', '2020-09-09 12:00:00.000000', '192', '3fairy.jpg'),
(232, '25 desher Ruokotha', 'Hannan', 'Adorsho', 'Fairytale', '100', 'This is a Fairy Tale', '2020-09-02 14:00:00.647639', '200', '4fairy.jpg'),
(233, 'Trioura jatir Upokotha', 'Golam', 'Adorsho', 'Fairytale', '100', 'This is a Fairy Tale', '2020-09-09 13:00:00.000000', '185', '5fairy.jpg'),
(234, 'The Flower maiden', '', 'Adorsho', 'Fairytale', '100', 'This is a Fairy Tale', '2020-09-09 17:00:00.000000', '180', '6fairy.jpg'),
(235, 'Thakumar Jhuli', 'Dakshinaranjan Mitra Majumder', 'Adorsho', 'Fairytale', '100', 'This is a Fairy Tale', '2020-09-03 12:00:00.000000', '190', '7fairy.jpg'),
(236, 'Osuvo Songket', 'Mahbub Hossain', 'Panjeree Publication', 'Horror', '100', 'This is  a story by Mahbub Hossain', '2020-09-07 10:30:00.598590', '200', '6horror.jpg'),
(237, 'Serina', 'Md. Jafar Iqbal', 'Batighor Prokashoni', 'Fiction', '200', 'This is  a story by Jafar Iqbal', '2020-09-01 13:00:00.000000', '75', '1fic.jpg'),
(238, 'Science Fiction Somogro', 'Humayun Ahmed', 'Batighor Prokashoni', 'Fiction', '200', 'This is  a story by Jafar Iqbal', '2020-09-08 18:00:00.000000', '100', '2fic.jpg'),
(239, 'Keplar Tutubi', 'Md. Jafar Iqbal', 'Batighor Prokashoni', 'Fiction', '200', 'This is  a story by Jafar Iqbal', '2020-09-03 18:00:00.000000', '100', '3fic.jpg'),
(240, 'Animan', 'Md. Jafar Iqbal', 'Batighor Prokashoni', 'Fiction', '200', 'This is  a story by Jafar Iqbal', '2020-09-18 18:52:00.000000', '90', '4fic.jpg'),
(241, 'Obissasyo sundor prithibi', 'Md. Jafar Iqbal', 'Batighor Prokashoni', 'Fiction', '200', 'This is  a story by Jafar Iqbal', '2020-09-02 20:00:00.000000', '40', '5fic.jpg'),
(242, 'Onuron Golok', 'Md. Jafar Iqbal', 'Batighor Prokashoni', 'Fiction', '200', 'This is  a story by Jafar Iqbal', '2020-09-03 17:00:00.000000', '60', '6fic.jpg'),
(243, 'Koyantam Mechanix', 'Md. Jafar Iqbal', 'Batighor Prokashoni', 'Fiction', '200', 'This is  a story by Jafar Iqbal', '2020-09-10 20:00:00.000000', '85', '7fic.jpg'),
(244, 'Sundor Journal', 'Narayan', 'Prothoma Prokashon', 'Journal', '300', 'This is a Journal', '2020-09-03 18:00:00.000000', '200', '1jour.jpg'),
(245, 'Rohosso Potrika', 'Kazi anyar', 'Prothoma Prokashon', 'Journal', '300', 'This is a Journal', '2020-09-03 15:42:00.000000', '195', '2jour.jpg'),
(246, 'Ekjon Mayaboti', 'Humayun Ahmed', 'Prothoma Prokashon', 'Journal', '300', 'This is a Journal', '2020-09-03 16:00:00.000000', '0', '3jour.jpg'),
(247, 'Uronchondi', 'Sunil Gangopadhyay', 'Prothoma Prokashon', 'Journal', '300', 'This is a Journal', '2020-09-03 20:00:00.000000', '200', '4jour.jpg'),
(248, 'Chader Pahar', 'Bivutivushon Bandapadhyay', 'Prothoma Prokashon', 'Journal', '300', 'This is a Journal', '2020-09-19 13:00:00.000000', '165', '5jour.jpg'),
(249, 'Tara Porichiti', 'Abdul', 'Prothoma Prokashon', 'Journal', '300', 'This is a Journal', '2020-09-02 00:00:00.000000', '195', '6jour.jpg'),
(250, 'Ami ke', 'Dada Vogoban', 'Onnoprokash', 'Religion Books', '500', 'This is a Religion Book', '0000-00-00 00:00:00.000000', '200', '1rel.jpg'),
(251, 'Somrat Ashok', 'Doipayon', 'Onnoprokash', 'Religion Books', '500', 'This is a Religion Book', '2020-09-03 13:00:00.000000', '200', '2rel.jpg'),
(252, 'Atto Songskar', '', 'Onnoprokash', 'Religion Books', '500', 'This is a Religion Book', '2020-09-24 20:52:00.935928', '200', '3rel.jpg'),
(253, 'Ramadaner Proshtutir Jonno 8 ti tips', '', 'Onnoprokash', 'Religion Books', '500', 'This is a Religion Book', '2020-09-03 15:00:00.000000', '200', '4rel.jpg'),
(254, 'Quran Teaching made Simple for Woman', '', 'Onnoprokash', 'Religion Books', '500', 'This is a Religion Book', '2020-09-13 13:00:00.000000', '195', '5rel.jpg'),
(255, 'Ekatturer Diary', 'Sufiya Kamal', 'Somoy Prokashon', 'Diary', '200', 'This Book is about Diary', '2020-09-02 13:00:00.000000', '0', '1dia.jpg'),
(256, 'Diary of  Wimpy Kid part 1', 'Melidown', 'Somoy Prokashon', 'Diary', '200', 'This Book is about Diary', '2020-09-16 13:00:00.000000', '200', '2dia.jpg'),
(257, 'Baghar Ashchorjo Diary', 'Rita Basu', 'Somoy Prokashon', 'Diary', '200', 'This Book is about Diary', '2020-09-19 16:00:00.787787', '200', '3dia.jpg'),
(258, 'Prison Diaries', 'Seikh Mujibur Rahman', 'Somoy Prokashon', 'Diary', '200', 'This Book is about Diary', '2020-09-25 15:00:00.000000', '195', '5dia.jpg'),
(259, 'Anna Frank er Diary', 'Anna Frank', 'Somoy Prokashon', 'Diary', '200', 'This Book is about Diary', '0000-00-00 00:00:00.000000', '185', '7dia.jpg'),
(260, 'Diary of  Wimpy Kid part 2', 'Melidown', 'Somoy Prokashon', 'Diary', '200', 'This Book is about Diary', '2020-09-08 09:00:00.000000', '190', '8dia.jpg'),
(261, 'Sanchita', 'Kazi Nazrul  Islam', 'Adorsho', 'Poetry', '600', 'This is  a Poetry Book', '2020-09-11 09:00:00.000000', '200', '1poetry.jpg'),
(262, 'Ruposhi Bangla', 'Jibonanondo Dash', 'Adorsho', 'Poetry', '600', 'This is  a Poetry Book', '2020-09-02 11:00:00.000000', '200', '2poetry.jpg'),
(263, '100 kobita', 'Nirmelendu Gun', 'Adorsho', 'Poetry', '600', 'This is  a Poetry Book', '2020-09-17 18:00:00.000818', '200', '3poetry.jpg'),
(264, 'Shestho Kobita', 'Jibonanondo Dash', 'Adorsho', 'Poetry', '600', 'This is  a Poetry Book', '2020-09-03 17:00:00.000000', '190', '4poetry.jpg'),
(265, 'Bishad Sindhu', 'Mir Mosarraf Hossain', 'Adorsho', 'Poetry', '600', 'This is  a Poetry Book', '2020-09-03 13:00:00.000000', '195', '5poetry.jpg'),
(266, 'Satkahan', 'Samaresh Majumdar', 'Somoy Prokashon', 'Travel Books', '700', 'This is a Travel Book', '2020-09-04 19:00:00.000000', '200', '1travel.jpg'),
(267, 'Ek jibone Onk Golpo', 'Samaresh Majumdar', 'Somoy Prokashon', 'Travel Books', '700', 'This is a Travel Book', '2020-09-03 16:00:00.000000', '200', '2travel.jpg'),
(268, 'Chad Manush Asan', 'Samaresh Majumdar', 'Somoy Prokashon', 'Travel Books', '700', 'This is a Travel Book', '2020-09-03 13:00:00.000000', '200', '3travel.jpg'),
(269, 'Onno Rokom Vromon', 'Samaresh Majumdar', 'Somoy Prokashon', 'Travel Books', '700', 'This is a Travel Book', '2020-09-17 19:00:00.000000', '200', '4travel.jpg'),
(270, 'Japan Jatri', 'Rabindranath Tagore', 'Somoy Prokashon', 'Travel Books', '700', 'This is a Travel Book', '2020-09-02 17:00:00.000000', '195', '7travel.jpg'),
(271, 'Samaresh 101', 'Samaresh Majumdar', 'Somoy Prokashon', 'Travel Books', '700', 'This is a Travel Book', '2020-09-05 14:00:00.000000', '200', '6travel.jpg'),
(272, 'Ekjon Mayaboti', 'Humayun Ahmed', 'Somoy Prokashon', 'Romance', '100', 'This is a beeautiful Book', '2020-09-09 13:00:00.000000', '200', '1rom.jpg'),
(273, 'Diner sheshe', 'Humayun Ahmed', 'Somoy Prokashon', 'Romance', '100', 'This is a beeautiful Book', '2020-09-04 17:00:00.000000', '200', '2rom.jpg'),
(274, 'Dighir Jole', 'Humayun Ahmed', 'Somoy Prokashon', 'Romance', '100', 'This is a beeautiful Book', '2020-09-03 15:00:00.000000', '200', '3rom.jpg'),
(275, 'Moyurakkhi', 'Humayun Ahmed', 'Somoy Prokashon', 'Romance', '100', 'This is a beeautiful Book', '2020-09-08 13:00:00.000000', '200', '4rom.jpg'),
(278, 'Lilaboti', 'Humayun Ahmed', 'Somoy Prokashon', 'Romance', '100', 'This is a beeautiful Book', '2020-09-04 00:00:00.000000', '195', '5rom.jpg'),
(279, 'Bristy o meghomala', 'Humayun Ahmed', 'Somoy Prokashon', 'Romance', '100', 'This is a beeautiful Book', '2020-09-18 17:00:00.000000', '200', '6rom.jpg'),
(290, 'Physics 1st Part', 'Md. Jafar Iqbal', 'Bangla Academy', 'Text Book', '800', 'This is a Text Book', '2020-09-28 15:00:00.000000', '200', '1text.jpg'),
(291, 'ICT', 'Asadujjaman', 'Bangla Academy', 'Text Book', '800', 'This is a Text Book', '2020-09-25 12:00:00.000000', '200', '2text.jpg'),
(292, 'Bangla Sohayika', 'Prosanto Bandapaddhay', 'Bangla Academy', 'Text Book', '800', 'This is a Text Book', '2020-09-11 18:00:00.803779', '200', '3text.jpg'),
(293, 'Chemistry', 'Soroj Kanti', 'Bangla Academy', 'Text Book', '800', 'This is a Text Book', '2020-09-03 15:00:00.000000', '200', '4text.jpg'),
(294, 'Physics 2nd part', 'Topon Kumar', 'Bangla Academy', 'Text Book', '800', 'This is a Text Book', '2020-09-01 16:00:00.000000', '200', '5text.jpg'),
(295, 'Korel Draw', '', 'Bangla Academy', 'Art', '200', 'This is an Art Book', '2020-09-18 16:00:00.000000', '200', '1art.jpg'),
(296, 'Ruposhi Bangla', 'Jibonanondo Dash', 'Ononna', 'Art', '200', 'This is an Art Book', '2020-09-04 17:00:00.000000', '195', '2art.jpg'),
(297, 'Microsoft Word', '', 'Bangla Academy', 'Art', '200', 'This is an Art Book', '2020-09-04 16:00:00.000000', '200', '3art.jpg'),
(298, 'Computer Histry', 'Khairul', 'Ononna', 'Art', '200', 'This is an Art Book', '2020-09-10 11:00:00.000000', '200', '4art.jpg'),
(299, 'Shishu Bichitra', '', 'Bangla Academy', 'Art', '200', 'This is an Art Book', '2020-09-08 10:00:00.000000', '200', '5art.jpg'),
(300, 'Nonte Fonte', 'Narayon Debnath', 'Ononna', 'Comics', '300', 'This is a comic Book', '2020-09-09 16:36:00.000662', '200', '1com.jpg'),
(301, 'Americay Tintin', '', 'Ononna', 'Comics', '300', 'This is a comic Book', '2020-09-09 17:00:47.000928', '200', '2com.jpg'),
(302, 'Asterics Goth Dossu', '', 'Ononna', 'Comics', '300', 'This is a comic Book', '2020-09-03 16:00:49.803834', '200', '3com.jpg'),
(303, 'Gopal Varer 111', '', 'Ononna', 'Comics', '300', 'This is a comic Book', '2020-09-01 20:00:00.865834', '200', '4com.jpg'),
(304, 'Batul The great', 'Narayon Debnath', 'Ononna', 'Comics', '300', 'This is a comic Book', '2020-09-18 17:00:00.405000', '169', '5com.jpg'),
(308, 'HTML 4.01', '', 'Bangla Academy', 'Top Rated Books', '200', 'This is an academic book', '2020-09-06 15:18:00.000000', '200', '8ac.jpg'),
(314, 'The Adventure Guide', 'Jason', 'Panjeree Publication', 'Adventure', '200', 'This book is about Adventure Guide', '2020-09-09 15:00:00.000000', '200', '5adv.jpg'),
(316, 'Kakababu Bonan Choshikari', 'Sunil Gangopadhyay', 'Batighor Prokashoni', 'Adventure', '400', 'Kakababu Adventure', '2020-09-03 15:18:00.000000', '0', '2adv.jpg'),
(317, 'Gogol Omnibash', 'Samaresh Basu', 'Batighor Prokashoni', 'Adventure', '100', 'This book is about a kid', '2020-09-17 11:18:00.000000', '200', '3adv.jpg'),
(318, 'Adventure of Hackelberi Fin', 'Mark Toyen', 'Onnoprokash', 'Adventure', '300', 'This book is about Adventure of hakelberi fin', '2020-09-19 10:18:00.000000', '200', '4adv.jpg'),
(319, 'Uponnash', 'Samaresh Majumdar', 'Bangla Academy', 'Book Fair Books', '1000', 'This is  a story by Samaresh Majumdar', '2020-09-19 14:44:00.000000', '200', '7fair.jpg'),
(320, 'The Jungle Book', 'World Disney', 'Bangla Academy', 'Adventure', '200', 'Jungle Book Adventure Story', '2020-09-19 14:45:00.000000', '200', '7adv.jpg'),
(321, 'Adventure Somogro', 'Himadri Kishor Das', 'Ononna', 'Adventure', '100', 'The amazing adventure story', '2020-09-19 14:46:00.000000', '200', '8adv.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Id` int(50) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `img` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `id` int(50) NOT NULL,
  `about` varchar(200) NOT NULL,
  `members` varchar(50) NOT NULL,
  `name1` text NOT NULL,
  `name2` text NOT NULL,
  `id1` varchar(50) NOT NULL,
  `id2` varchar(50) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`id`, `about`, `members`, `name1`, `name2`, `id1`, `id2`, `img1`, `description`) VALUES
(1, 'About Us', 'Members', 'Shweta Bhattacharjee', 'Umma Salma Anika', '17-02-04-111', '17-02-04-113', 'icon-4.png', 'In Online Book store customer can purchase books online.Online Bookstore can be useful to sell books on the internet.Customers can purchase or get all books without going through a bookstore.\n\nIn our Online Book store  customer can purchase books online.Here Customers can browse the catalogue by the catagories.Through a web browser the customers can search for a book by its name,author or catagories.Users can add to the shopping cart and finally purchase the books.They can also update the shopping cart by changing quantity and remove books from cart.When the user clicks on the Add to cart button,the items will add in the cart.Customer can go to the cart and continue his procedure to buy a desired book.They can buy multiple books.When the user clicks on check out button,he will follow the another step to place his order by giving his infomation like phone number,email,address etc.Customer Can create accounts in the bookstore.Each account contails customer profile information:Name,email,phone number,birthdate,gender.After log in,user can edit profile information and profile picture.They can also change password after log in.They can make their own account and log in any time,and log out also.Customer can also contact to the Admin by sending message.We have an option for search on every page.The user can search any book there.\nThere is also an option for logout after user sign in.When user clicks on it ,they will log out from their profile\n\n\n\n\nAdmin can login into the system using his username and password from database,Admin can do:\n\n*insert any books(Upload new books frequently).\n*Remove books\n*See all books\n*Search books by catagories and find all information\n*See All User list,details and can remove\n*Can see customer message\n*View sales and information about book and buyer\n*Logout from the Account');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(50) NOT NULL,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phonenumber` varchar(100) DEFAULT NULL,
  `msg` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `firstName`, `lastName`, `email`, `phonenumber`, `msg`) VALUES
(6, 't', 'j', 'christinajessy111@gmail.com', '01723', 'dh'),
(7, 'parna', 'shweta', 'christinajessy111@gmail.com', '0122', 'hi'),
(8, 't', 'j', 'j', 'h', 'j'),
(16, 'parna', 'shweta', 'christinajessy111@gmail.com', 'pragya@gmail.com', 'm .'),
(17, 't', 'j', 'christinajessy111@gmail.com', '01', 'm'),
(18, 't', 'shweta', 'christinajessy111@gmail.com', 'pragya@gmail.com', 'j,b'),
(19, 'parna', 'shweta', 'christinajessy111@gmail.com', 'shweta', 'mn'),
(22, 'parna', 'shweta', 'christinajessy111@gmail.com', '01', 'm'),
(25, 'parna', 'shweta', 'christinajessy111@gmail.com', '01', 'jy'),
(27, 'parna', 'shweta', 'christinajessy111@gmail.com', 'shweta', 'm'),
(28, 'parna', 'shweta', 'christinajessy111@gmail.com', 'shweta', 'hb'),
(29, 'Parna', 'shweta', 'pragya@gmail.com', '01', 'ok,success'),
(30, 'parna', 'shweta', 'pragya@gmail.com', 'shweta', 'jb'),
(31, 'parna', 'shweta', 'kishor@gmail.com', 'aa', 'hvj'),
(32, 'parna', 'shweta', 'christinajessy111@gmail.com', 'pragya@gmail.com', '.,'),
(33, 'parna', 'shweta', 'pragya@gmail.com', 'shweta', 'mn '),
(34, 'parna', 'shweta', 'pragya@gmail.com', 'shweta', 'mn '),
(35, 'parna', 'shweta', 'pragya@gmail.com', 'shweta', 'mn '),
(36, 'parna', 'shweta', 'pragya@gmail.com', 'shweta', 'mn '),
(37, 'parna', 'shweta', 'pragya@gmail.com', 'shweta', 'mn '),
(38, 'parna', 'shweta', 'christinajessy1211@gmail.com', 'pragya@gmail.com', 'fg'),
(39, 'parna', 'shweta', 'christinajessy111@gmail.com', '01', ' n'),
(40, 'parna', 'shweta', 'christinajessy111@gmail.com', 'anika', ',n '),
(41, 'parna', 'shweta', 'christinajessy111@gmail.com', 'pragya@gmail.com', 'am s'),
(42, 'Adrita', 'Pragya', 'pragya@gmail.com', '01728148699', 'I have a problem'),
(43, 'Adrita', 'Pragya', 'pragya@gmail.com', '01726590233', 'I am facing some problem in loggin in');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Id` int(11) NOT NULL,
  `OrderId` varchar(100) NOT NULL,
  `BookId` varchar(100) NOT NULL,
  `BookName` text NOT NULL,
  `CustomerName` text NOT NULL,
  `CustomerCity` text NOT NULL,
  `Payment` varchar(100) NOT NULL,
  `CustomerAddress` longtext NOT NULL,
  `CustomerPhn` varchar(100) NOT NULL,
  `CustomerEmail` varchar(100) NOT NULL,
  `Code` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Id`, `OrderId`, `BookId`, `BookName`, `CustomerName`, `CustomerCity`, `Payment`, `CustomerAddress`, `CustomerPhn`, `CustomerEmail`, `Code`) VALUES
(1, '285', '155', 'Truth about html5', 'shweta', 'Dhaka', 'Cash', 'siddheswari', '01', 'christinajessy111@gmail.com', 2020),
(2, '285', '264', 'Shestho Kobita', 'shweta', 'Dhaka', 'Cash', 'siddheswari', '01', 'christinajessy111@gmail.com', 2020),
(4, '286', '156', 'Php for the web', 'shweta', 'Dhaka', 'Cash', 'siddheswari', '01', 'christinajessy111@gmail.com', 2020),
(5, '286', '245', 'Rohosso Potrika', 'shweta', 'Dhaka', 'Cash', 'siddheswari', '01', 'christinajessy111@gmail.com', 2020),
(6, '286', '296', 'Ruposhi Bangla', 'shweta', 'Dhaka', 'Cash', 'siddheswari', '01', 'christinajessy111@gmail.com', 2020),
(7, '287', '259', 'Anna Frank er Diary', 'shweta', 'Dhaka', 'Rocket', 'siddheswari', '0172889900', 'anika@gmail.com', 2020),
(8, '287', '260', 'Diary of  Wimpy Kid part 2', 'shweta', 'Dhaka', 'Rocket', 'siddheswari', '0172889900', 'anika@gmail.com', 2020),
(10, '288', '259', 'Anna Frank er Diary', 'shweta', 'dhaka', 'Cash', 'siddheswari', '01728899000', 'christinajessy111@gmail.com', 0),
(11, '1', '248', 'Chader Pahar', 'Pragya', 'dhaka', 'Cash', 'siddheswari', '01978148699', 'pragya@gmail.com', 2020),
(12, '1', '270', 'Japan Jatri', 'Pragya', 'dhaka', 'Cash', 'siddheswari', '01978148699', 'pragya@gmail.com', 2020),
(14, '2', '233', 'Trioura jatir Upokotha', 'Adrita', 'dhaka', 'bKash', 'tangail', '01978148699', 'adrita@gmail.com', 2020),
(15, '2', '249', 'Tara Porichiti', 'Adrita', 'dhaka', 'bKash', 'tangail', '01978148699', 'adrita@gmail.com', 2020),
(17, '3', '157', 'Tin Goyenda', 'Shweta', 'Dhaka', 'bKash', 'baily road', '01978148699', 'shweta@gmail.com', 12345678);

-- --------------------------------------------------------

--
-- Table structure for table `selling`
--

CREATE TABLE `selling` (
  `orderId` int(50) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `bid` varchar(100) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `name1` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `payment` varchar(200) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phn` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `code` varchar(11) DEFAULT NULL,
  `Id_fk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phonenumber` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phonenumber`, `password`, `birthdate`, `gender`, `img`, `status`) VALUES
(121, 'shweta', 'christinajessy111@gmail.com', 'christinajessy111@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2020-01-31', 'female', 'userpic/121hr.png ', 'Active'),
(122, 'pragya@gmail.com', 'pragya@gmail.com', '01', '25d55ad283aa400af464c76d713c07ad', '2020-01-31', 'female', 'userpic/122kid1.jpeg ', 'Active'),
(124, 'pragya@gmail.com', 'pragyae3@gmail.com', '01', 'd4dc86f22f862cfd6afbe8f412f9c956', '2020-01-31', 'female', 'userpic/124hr.png ', 'Active'),
(125, 'shweta', 'christinajessy1111@gmail.com', '01', '4207e1e6e3809688a8b9ed1b2c1b7faa', '2020-01-31', 'female', 'userpic/125course-img-4.jpg ', 'Active'),
(126, 'shweta', 'christinajessy1211@gmail.com', '01', '25d55ad283aa400af464c76d713c07ad', '2020-01-31', 'female', 'userpic/126course-img-5.jpg ', 'Active'),
(127, 'shweta', 'tandra@gmail.com', '01', 'c392bafe5f3941d3e5fea0c563ca3de2', '2020-01-31', 'female', 'userpic/127kakababu.jpeg ', 'Active'),
(128, 'pragya@gmail.com', 'christinajessy1011@gmail.com', 'pragya@gmail.com', 'd4dc86f22f862cfd6afbe8f412f9c956', '2020-01-31', 'female', 'userpic/128 ', 'Active'),
(129, 'shweta', 'shweta12@gmail.com', '01', '25d55ad283aa400af464c76d713c07ad', '2020-07-30', 'female', 'userpic/12986272427_256699515300722_8000404168315502592_n.jpg ', 'Active'),
(130, 'shweta', 'shweta111@gmail.com', '01', '25d55ad283aa400af464c76d713c07ad', '2020-09-02', 'female', 'userpic/13086272427_256699515300722_8000404168315502592_n.jpg ', 'Active'),
(131, 'shweta', 'christinajessy0@gmail.com', '01978148699', 'e311dd5fd4cdbba780ea0d0062df7788', '2020-08-27', 'female', 'userpic/131course-img-4.jpg ', 'Active'),
(133, 'kishor@gmail.com', 'kishorbatayon@gmail.com', '018299933000', '25d55ad283aa400af464c76d713c07ad', '2020-09-04', 'female', 'userpic/133passcover2.jpeg ', 'Active'),
(134, 'kishorbatayon1@gmail.com', 'kishorbatayon1@gmail.com', '00000000000', '2c82da8cb5fd4f8c03017f4f7aa6361b', '2020-09-05', 'female', 'userpic/134background1.jpg ', 'Active'),
(135, 'kishorbatayon1@gmail.com', 'kishor2@gmail.com', '01', '2c82da8cb5fd4f8c03017f4f7aa6361b', '2020-09-05', 'female', 'userpic/135course-img-4.jpg ', 'Active'),
(136, 'Shweta', 'shwetaparna111@gmail.com', '1111111111111', 'e8ed7a7fbe8a488466a7e33353395066', '2020-09-06', 'female', 'userpic/136passcover.jpeg ', 'Active'),
(137, 'Shweta Parna', 'shwetaparna555@gmail.com', '01978148699', '4207e1e6e3809688a8b9ed1b2c1b7faa', '2020-02-08', 'female', 'userpic/137home.jpg ', 'Active'),
(138, 'Anika', '170204113@aust.edu', '01837890289', '56385788cac4b539a61194dbd11a4607', '2020-09-19', 'female', 'userpic/138back.jpg ', 'Active'),
(139, 'Shweta Bhattacharjee', '170204111@aust.edu', '01728148699', '4207e1e6e3809688a8b9ed1b2c1b7faa', '2020-09-19', 'female', 'userpic/139background1.jpg ', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `selling`
--
ALTER TABLE `selling`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=323;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;
--
-- AUTO_INCREMENT for table `description`
--
ALTER TABLE `description`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `selling`
--
ALTER TABLE `selling`
  MODIFY `orderId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
