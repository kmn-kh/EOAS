-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 07:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `departmen`
--

-- --------------------------------------------------------

--
-- Table structure for table `al_data`
--

CREATE TABLE `al_data` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `al_data`
--

INSERT INTO `al_data` (`id`, `title`, `content`) VALUES
(7, 'ចំណេះដឹងមូលដ្ឋានដែលបេក្ខជនត្រូវចេះសម្រាប់ទៅសិក្សាមុខជំនាញនេះ​ ៖', ' ⬩  គីមី​វិទ្យា\r\n ⬩  ជីវវិទ្យា '),
(8, 'សិក្សាដើម្បីទទួលបានសញ្ញាបត្ររងលើមុខជំនាញនេះ៖មានរយះពេល ៖', ' ⬩  មានរយៈពេល ២ឆ្នាំ យ៉ាងតិច ៦០ ក្រេឌីត'),
(9, 'ចំណេះដឹង​ និងបំណិនដែលនិស្សិតទទួលបានក្រោយពីបញ្ចប់ការសិក្សារយះពេល២ឆ្នាំ៖', ' ⬩  ចេះចិញ្ចឹមសត្វស្លាប\r\n ⬩  ចេះចិញ្ចឹមជ្រូក\r\n ⬩  ចេះចិញ្ចឹមគោ ក្របី\r\n ⬩  ចេះជ្រើសរើស និងបង្កាត់ពូជសត្វ\r\n ⬩  អាចគ្រប់គ្រងកាកសំណល់ និងបរិស្ថានក្នុងកសិដ្ឋាន\r\n ⬩  ចេះត្រួតពិនិត្យគុណភាពវត្ថុធាតុដើមរបស់ចំណីសត្វ\r\n ⬩  ចេះលាយចំណីតាមវិធីសាស្រ្តត្រឹមត្រូវ\r\n ⬩  អាចប្រើ និងជួសជុលថែទាំឧបករណ៍ និងទ្រុង\r\n ⬩  អាចគ្រប់គ្រងផ្នែកផលិត និងទីផ្សារ\r\n ⬩  មានបច្ចេកទេសចិញ្ចឹមនិងការលាយចំណីសត្'),
(10, 'អង្គភាពឬមូលដ្ឋានដែលអ្នកសិក្សាចប់មុខជំនាញនេះអាចទៅបម្រើការងារ ៖', ' ⬩  ជាអ្នកបច្ចេកទេសចិញ្ចឹមសត្វនៅតាមក្រសួង ក្រុមហ៊ុន អង្គការក្រៅរដ្ឋាភិបាលនិងស្ថាប័នផ្សេងៗ ដែលពាក់ព័ន្ធ\r\n ⬩  ក្លាយជាអ្នកបច្ចេកទេសផលិតចំណីសត្វនៅតាមក្រុមហ៊ុន\r\n ⬩  ជាម្ចាស់អាជីវកម្មចំណីសត្វឬបើកកសិដ្ឋានចិញ្ចឹមសត្វផ្ទាល់ខ្លួនក្នុងការផ្គត់ផ្គង់សាច់ និងពូជសត្វតាមតម្រូវការទីផ្សារ ។\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `al_videobutton`
--

CREATE TABLE `al_videobutton` (
  `id` int(11) NOT NULL,
  `first` varchar(255) DEFAULT NULL,
  `second` varchar(255) DEFAULT NULL,
  `third` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `al_videobutton`
--

INSERT INTO `al_videobutton` (`id`, `first`, `second`, `third`) VALUES
(225, 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok', 'https://www.youtube.com/embed/7cF3bvQqRxA?si=GG4McOxNf5gHXlzE', 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok'),
(226, 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok', 'https://www.youtube.com/embed/7cF3bvQqRxA?si=GG4McOxNf5gHXlzE', 'https://www.youtube.com/embed/5haYloOK8Mo?si=j1rdD50wgHfB7xa_'),
(227, 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok', 'https://www.youtube.com/embed/7cF3bvQqRxA?si=GG4McOxNf5gHXlzE', 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok');

-- --------------------------------------------------------

--
-- Table structure for table `al_vidtop`
--

CREATE TABLE `al_vidtop` (
  `id` int(11) NOT NULL,
  `video_top` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `al_vidtop`
--

INSERT INTO `al_vidtop` (`id`, `video_top`) VALUES
(301, 'https://www.youtube.com/embed/arXQuineYz8?si=fKTsRzojEqNEm0Zt');

-- --------------------------------------------------------

--
-- Table structure for table `com_data`
--

CREATE TABLE `com_data` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `com_data`
--

INSERT INTO `com_data` (`id`, `title`, `content`) VALUES
(1, 'លក្ខខណ្ឌនៃការចូលរៀន', '– មានសញ្ញាបត្របច្ចេកទេស និងវិជ្ជាជីវៈ៣ (កម្រិត៤) ឬ\r\n\r\n– ប្រឡងធ្លាក់មធ្យមសិក្សាទុតិយភូមិ ឬ\r\n\r\n– មានវិញ្ញាបនបត្រថ្នាក់ឆ្នាំសិក្សាមូលដ្ឋាន​ ឬ\r\n\r\n– មានសញ្ញាបត្រដែលមានតម្លៃស្មើ'),
(24, 'សមត្ថភាពផ្នែកវិជ្ជាជីវៈដែលរំពឹងទុក', '១. ប្រើប្រាស់ភាសាសម្រាប់ទំនាក់ទំនងការងារ\r\n\r\n២. ប្រើប្រាស់ប្រព័ន្ធប្រតិបត្តិកុំព្យូទ័រ និងកម្មវិធីសម្រាប់ការងាររដ្ឋបាល\r\n\r\n៣. រចនាក្រាហ្វិក និងកាត់តវិឌីអូដោយប្រើប្រាស់កម្មវិធីកុំព្យូទ័រ\r\n\r\n៤. ដំឡើងកុំព្យូទ័រ កម្មវិធីកុំព្យូទ័រ និងការថែទាំ\r\n\r\n៥. ដំឡើងប្រព័ន្ធបណ្តាញអ៊ីនធើណេត និងការថែទាំបណ្តាញ\r\n\r\n៦. អភិវឌ្ឍគេហទំព័រ និងគ្រប់គ្រងប្រព័ន្ធទិន្នន័យ\r\n\r\n៧. សរសេរកូដសម្រាប់បញ្ជាលើឧបករណ៍ IoTs'),
(29, 'ឱកាសការងារ', '១. បុគ្គលិកបង្រៀនទាក់ទងនឹងកុំព្យូទ័រទាំងផ្នែករដ្ឋ និងឯកជន\r\n\r\n២. ជាអ្នកបច្ចេកទេស IT ក្នុងអង្គភាពរដ្ឋ និងឯកជន\r\n\r\n៣. ជាអ្នកដំឡើង ថែទាំប្រព័ន្ធបណ្តាញកុំព្យូទ័រ និងអ៊ីនធើណេត\r\n\r\n៤. ជាអ្នកអភិវឌ្ឍកម្មវិធីកុំព្យូទ័រ និងបង្កើតគេហទំព័រ\r\n\r\n៥. ជាអ្នកអភិវឌ្ឍន៍ប្រព័ន្ធឆ្លាតវ័យបញ្ជាដោយស្វ័យប្រវត្តិ\r\n\r\n៦. ប្រកបអាជីពផ្ទាល់ខ្លួន បន្តការសិក្សាទាំងក្នុង និងក្រៅប្រទេស');

-- --------------------------------------------------------

--
-- Table structure for table `com_videobutton`
--

CREATE TABLE `com_videobutton` (
  `id` int(11) NOT NULL,
  `first` varchar(255) DEFAULT NULL,
  `second` varchar(255) DEFAULT NULL,
  `third` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `com_videobutton`
--

INSERT INTO `com_videobutton` (`id`, `first`, `second`, `third`) VALUES
(225, 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok', 'https://www.youtube.com/embed/7cF3bvQqRxA?si=GG4McOxNf5gHXlzE', 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok'),
(226, 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok', 'https://www.youtube.com/embed/7cF3bvQqRxA?si=GG4McOxNf5gHXlzE', 'https://www.youtube.com/embed/5haYloOK8Mo?si=j1rdD50wgHfB7xa_'),
(227, 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok', 'https://www.youtube.com/embed/7cF3bvQqRxA?si=GG4McOxNf5gHXlzE', 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok');

-- --------------------------------------------------------

--
-- Table structure for table `com_vidtop`
--

CREATE TABLE `com_vidtop` (
  `id` int(11) NOT NULL,
  `video_top` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `com_vidtop`
--

INSERT INTO `com_vidtop` (`id`, `video_top`) VALUES
(301, 'https://www.youtube.com/embed/arXQuineYz8?si=fKTsRzojEqNEm0Zt');

-- --------------------------------------------------------

--
-- Table structure for table `el_data`
--

CREATE TABLE `el_data` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `el_data`
--

INSERT INTO `el_data` (`id`, `title`, `content`) VALUES
(6, 'ចំណេះដឹងមូលដ្ឋានដែលបេក្ខេជនត្រូវចេះសម្រាប់ទៅសិក្សាមុខជំនាញនេះ ៖', ' ⬩  រូបវិទ្យា\r\n ⬩  ភាសាអង់គ្លេស\r\n ⬩  គណិតវិទ្យា'),
(7, 'ការសិក្សាដើម្បីទទួលបានសញ្ញាបត្របរិញ្ញាបត្ររងលើមុខជំនាញនេះ', ' ⬩  មានរយៈពេល ២ ឆ្នាំ យ៉ាងតិច ៦០ ក្រេឌីត'),
(8, 'ចំណេះដឹង និងបំណិនដែលនិស្សិតទទួលបានក្រោយពីបញ្ចប់ការសិក្សារយៈពេល ២ ឆ្នាំ៖', ' ⬩  អាចជួសជុលឧបករណ៍ប្រើប្រាស់អគ្គិសនីបាន\r\n ⬩  អាចដំឡើងឧបករណ៍ និងប្រព័ន្ធបណ្តាញអគ្គិសនីបាន\r\n ⬩  អាចវិភាគ និងដោះស្រាយបញ្ហាប្រព័ន្ធអគ្គិសនីបាន\r\n ⬩  អាចគូសប្លង់ប្រព័ន្ធអគ្គីសនីក្នុងអាគារនិងរោងចក្របាន\r\n ⬩  អាចបំពាក់សម្ភារបរិក្ខារត្រជាក់ និងម៉ាស៊ីនត្រជាក់បាន\r\n ⬩  អាចជួសជុល និងការបញ្ជាម៉ូទ័រអគ្គិសនីបាន'),
(9, 'អង្គភាព ឬមូលដ្ឋានដែលអ្នកសិក្សាចប់មុខជំនាញនេះអាចទៅបម្រើការងារ៖', ' ⬩  អ្នកគូសប្លង់ប្រព័ន្ធអគ្គីសនី\r\n ⬩  បុគ្គលិកទទួលខុសត្រូវផ្នែកជួសជុល​ និងថែទាំប្រព័ន្ធអគ្គិសនី\r\n ⬩  បុគ្គលិកគ្រប់គ្រងប្រព័ន្ធអគ្គិសនី​ និងបញ្ជាម៉ូទ័រ\r\n ⬩  បង្កើតអាជីវផ្ទាល់ខ្នួន');

-- --------------------------------------------------------

--
-- Table structure for table `el_videobutton`
--

CREATE TABLE `el_videobutton` (
  `id` int(11) NOT NULL,
  `first` varchar(255) DEFAULT NULL,
  `second` varchar(255) DEFAULT NULL,
  `third` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `el_videobutton`
--

INSERT INTO `el_videobutton` (`id`, `first`, `second`, `third`) VALUES
(225, 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok', 'https://www.youtube.com/embed/7cF3bvQqRxA?si=GG4McOxNf5gHXlzE', 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok'),
(226, 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok', 'https://www.youtube.com/embed/7cF3bvQqRxA?si=GG4McOxNf5gHXlzE', 'https://www.youtube.com/embed/5haYloOK8Mo?si=j1rdD50wgHfB7xa_'),
(227, 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok', 'https://www.youtube.com/embed/7cF3bvQqRxA?si=GG4McOxNf5gHXlzE', 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok');

-- --------------------------------------------------------

--
-- Table structure for table `el_vidtop`
--

CREATE TABLE `el_vidtop` (
  `id` int(11) NOT NULL,
  `video_top` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `el_vidtop`
--

INSERT INTO `el_vidtop` (`id`, `video_top`) VALUES
(301, 'https://www.youtube.com/embed/arXQuineYz8?si=fKTsRzojEqNEm0Zt');

-- --------------------------------------------------------

--
-- Table structure for table `food_data`
--

CREATE TABLE `food_data` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_data`
--

INSERT INTO `food_data` (`id`, `title`, `content`) VALUES
(8, 'ចំណេះដឹងមូលដ្ឋានដែលបេក្ខជនត្រូវចេះសម្រាប់ទៅសិក្សាមុខជំនាញនេះ ៖', ' ⬩  ជីវវិទ្យា\r\n ⬩  គីមីវិទ្យា\r\n ⬩  គណិតវិទ្យា'),
(9, 'ការសិក្សាដើម្បីទទួលបានសញ្ញាបត្របរិញ្ញាបត្ររងលើមុខជំនាញនេះ', ' ⬩  មានរយៈពេល ២ ឆ្នាំ យ៉ាងតិច ៦០ ក្រេឌីត'),
(10, 'ចំណេះដឹង និងបំណិនដែលនិស្សិតទទួលបានក្រោយពីបញ្ចប់ការសិក្សារយៈពេល ២ ឆ្នាំ៖', ' ⬩  កែច្នៃអាហារដោយកម្មវីធីផ្សេងៗ\r\n ⬩  កែច្នៃអាហារតាមប្រភេទរបស់ផលិតផល\r\n ⬩  វិភាគគុណភាពផលិតផលអាហារ\r\n ⬩  គ្រប់គ្រងគុណភាពផលិតផលអាហារ\r\n ⬩  ផលិតអាហារស្របតាមមាត្រដ្ឋានគុណភាព\r\n ⬩  អនុវត្តន៍តាមគោលការណ៍វិធីសាស្រ្តដែលល្អក្នុងការផលិត​(GMP)'),
(11, 'អង្គភាព ឬមូលដ្ឋានដែលអ្នកសិក្សាចប់មុខជំនាញនេះអាចទៅបម្រើការងារ៖', ' ⬩  អ្នកវិភាគគុណភាពក្នុងរោងចក្រផលិតអាហារកែច្នៃ\r\n ⬩  បុគ្គលិកទទួលខុសត្រូវផ្នែកផលិតអាហារ\r\n ⬩  បុគ្គលិកគ្រប់គ្រងគុណភាពអាហារ\r\n ⬩  បង្កើតអាជីវកម្មផ្ទាល់ខ្នួន');

-- --------------------------------------------------------

--
-- Table structure for table `food_videobutton`
--

CREATE TABLE `food_videobutton` (
  `id` int(11) NOT NULL,
  `first` varchar(255) DEFAULT NULL,
  `second` varchar(255) DEFAULT NULL,
  `third` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_videobutton`
--

INSERT INTO `food_videobutton` (`id`, `first`, `second`, `third`) VALUES
(225, 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok', 'https://www.youtube.com/embed/7cF3bvQqRxA?si=GG4McOxNf5gHXlzE', 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok'),
(226, 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok', 'https://www.youtube.com/embed/7cF3bvQqRxA?si=GG4McOxNf5gHXlzE', 'https://www.youtube.com/embed/5haYloOK8Mo?si=j1rdD50wgHfB7xa_'),
(227, 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok', 'https://www.youtube.com/embed/7cF3bvQqRxA?si=GG4McOxNf5gHXlzE', 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok');

-- --------------------------------------------------------

--
-- Table structure for table `food_vidtop`
--

CREATE TABLE `food_vidtop` (
  `id` int(11) NOT NULL,
  `video_top` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_vidtop`
--

INSERT INTO `food_vidtop` (`id`, `video_top`) VALUES
(301, 'https://www.youtube.com/embed/arXQuineYz8?si=fKTsRzojEqNEm0Zt');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `youtube_name` varchar(255) DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `facebook_name` varchar(255) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `home` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `youtube_name`, `youtube_link`, `facebook_name`, `facebook_link`, `home`, `phone_number`, `image1`, `image2`, `image3`) VALUES
(1, 'youtube', 'http://www.youtube.com/@lexiesky1994', 'fackbook', 'http://www.youtube.com/@lexiesky1994', 'KOMPONG', '09834876441', 'qrcode1.jpg', 'qrcode1.jpg', 'qrcode1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `k_name` varchar(255) DEFAULT NULL,
  `eng_name` varchar(255) DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `k_name`, `eng_name`, `image1`, `image2`) VALUES
(1, 'វិទ្យាស្ថានបច្ចេកវិទ្យាកំពង់ស្ពឺ', 'Kampong Speu Institute of Technology', 'Ksit.png', 'T.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `macha_data`
--

CREATE TABLE `macha_data` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `macha_data`
--

INSERT INTO `macha_data` (`id`, `title`, `content`) VALUES
(7, 'ចំណេះដឹងមូលដ្ឋានដែលបេក្ខជនត្រូវចេះសម្រាប់មុខជំនាញនេះ ៖', ' ⬩  គណិតវិទ្យា\r\n ⬩  រូបវិទ្យា'),
(8, 'ការសិក្សាដើម្បីទទួលបានសញ្ញាបត្ររងលើមុខជំនាញនេះ ៖', ' ⬩  សិក្សារយៈពេល ២ ឆ្នាំ និងមានចំនួនក្រេឌីតសរុប ៦២ ក្រេឌីត'),
(9, 'ចំណេះដឹង និងបំណិនដែលនិស្សិតទទួលបានក្រោយពីបញ្ចប់ការសិក្សារយៈពេល ២ឆ្នាំ ៖', ' ⬩  ជួសជុលម៉ាស៊ីនចំហេះក្នុង (ម៉ាស៊ីនកាត់ស្មៅ, ម៉ាស៊ីនម៉ាស៊ូត, ម៉ាស៊ីនម៉ូតូ Honda និង ម៉ាស៊ីនត្រាក់ទ័រ)\r\n ⬩  គូស និងអានគំនូរបច្ចេកទេសមេកានិច\r\n ⬩  ប្រើប្រាស់ម៉ាស៊ីនក្រឡឹង\r\n ⬩  ផ្សារអគ្គិសនីលោហៈ\r\n ⬩  រចនាប្លង់ និងដំឡើងប្រព័ន្ធទឹកក្នុង និងក្រៅអគារ\r\n ⬩  ដំឡើងម៉ាស៊ីនត្រជាក់ខ្នាតតូច\r\n ⬩  ប្រើប្រាស់ឧបករណ៍រង្វាស់មេកានិច\r\n ⬩  ជួសជុល និងថែទាំឧបករណ៍ប្រើប្រាស់មេកានិច\r\n ⬩  រៀបចំ និងគ្រប់គ្រងអង្គភាព (សហគ្រាស និងប្រព័ន្ធម៉ាស៊ីនក្នុងឧស្សាហកម្ម)'),
(10, 'អង្គភាព ឬមូលដ្ឋានដែលអ្នកសិក្សាចប់មុខជំនាញនេះអាចយកទៅបម្រើការងារ ៖', ' ⬩  ជាងជួសជុលម៉ាស៊ីន(ទូទៅ) ជាងក្រឡឹង ជាងផ្សារ ជាងដំឡើងប្រព័ន្ធទឹក និងជាងដំឡើង\r\nម៉ាស៊ីនត្រជាក់\r\n ⬩  បុគ្គលិកក្របខណ្ឌរដ្ឋគ្រប់ក្រសួង ស្ថាប័នពាក់ព័ន្ធ\r\n ⬩  បុគ្គលិកគ្រប់គ្រងប្រព័ន្ធមេកានិចក្នុងបណ្ដាសហគ្រាស និងក្រុមហ៊ុននានា\r\n ⬩  ម្ចាស់អាជីវកម្មផ្ទាល់ខ្លួន\r\n ⬩  បុគ្គលដែលអាចបន្តរៀនថ្នាក់បរិញ្ញាបត្រក្នុងជំនាញស្របឬជំនាញផ្សេងដែលមានចំនួនក្រេឌីតតិចជាង\r\nឬប្រហាក់ប្រហែល');

-- --------------------------------------------------------

--
-- Table structure for table `macha_videobutton`
--

CREATE TABLE `macha_videobutton` (
  `id` int(11) NOT NULL,
  `first` varchar(255) DEFAULT NULL,
  `second` varchar(255) DEFAULT NULL,
  `third` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `macha_videobutton`
--

INSERT INTO `macha_videobutton` (`id`, `first`, `second`, `third`) VALUES
(225, 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok', 'https://www.youtube.com/embed/7cF3bvQqRxA?si=GG4McOxNf5gHXlzE', 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok'),
(226, 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok', 'https://www.youtube.com/embed/7cF3bvQqRxA?si=GG4McOxNf5gHXlzE', 'https://www.youtube.com/embed/5haYloOK8Mo?si=j1rdD50wgHfB7xa_'),
(227, 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok', 'https://www.youtube.com/embed/7cF3bvQqRxA?si=GG4McOxNf5gHXlzE', 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok');

-- --------------------------------------------------------

--
-- Table structure for table `macha_vidtop`
--

CREATE TABLE `macha_vidtop` (
  `id` int(11) NOT NULL,
  `video_top` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `macha_vidtop`
--

INSERT INTO `macha_vidtop` (`id`, `video_top`) VALUES
(301, 'https://www.youtube.com/embed/arXQuineYz8?si=fKTsRzojEqNEm0Zt');

-- --------------------------------------------------------

--
-- Table structure for table `plant_data`
--

CREATE TABLE `plant_data` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plant_data`
--

INSERT INTO `plant_data` (`id`, `title`, `content`) VALUES
(6, 'ចំណេះដឹងមូលដ្ឋានដែលបេក្ខេជនត្រូវចេះសម្រាប់ទៅសិក្សាមុខជំនាញនេះ ៖', ' ⬩  គណិតវិទ្យា\r\n ⬩  ជីវវិទ្យា\r\n ⬩  គីមីវិទ្យា'),
(7, 'ការសិក្សាដើម្បីទទួលបានសញ្ញាបត្របរិញ្ញាបត្ររងលើមុខជំនាញនេះ ៖', ' ⬩  មានរយៈពេល ២ ឆ្នាំ យ៉ាងតិច ៦០ ក្រេឌីត'),
(8, 'ចំណេះដឹង និងបំណិនដែលនិស្សិតទទួលបានក្រោយពីបញ្ចប់ការសិក្សារយៈពេល ២ ឆ្នាំ៖', ' ⬩  អាចប្រើប្រាស់ផលិតផលផ្ន្នែកកសិកម្មនិងដោះស្រាយបញ្ហាការដាំដុះបាន\r\n ⬩  អាចដាំ និងពង្រីកពូជរុក្ខជាតិបាន\r\n ⬩  ចេះប្រើបច្ចេកវិទ្យាទំនើប ក្នុងការដាំដុះលើវិស័យកសិកម្ម\r\n ⬩  អាចគ្រប់គ្រងដី និងទឹកដើម្បីដាំដុះដំណាំ\r\n ⬩  ចេះថែទាំ និងការពារដំណាំ\r\n ⬩  ចេះប្រើប្រាស់ និងថែទាំឧបករណ៍ និងសម្ភារៈរោងបណ្តុះ\r\n ⬩  ចេះគ្រប់គ្រងកសិផល និងទីផ្សារ\r\n ⬩  អាចផ្សព្វផ្សាយអំពីកសិកម្ម'),
(9, 'អង្គភាព ឬមូលដ្ឋានដែលអ្នកសិក្សាចប់មុខជំនាញនេះអាចទៅបម្រើការងារ៖', ' ⬩  ជាអ្នកបច្ចេកទេសកសិកម្មនៅតាមក្រសួង ក្រុមហ៊ុន អង្គការក្រៅរដ្ឋាភិបាលនិងស្ថាប័នផ្សេងៗ ដែលពាក់ព័ន្ធនឹងកសិកម្ម\r\n ⬩  ជាម្ចាស់អាជីវកម្មឬបើកកសិដ្ឋានផ្ទាល់ខ្លួនក្នុងការផ្គត់ផ្គង់កសិផលបន្លែ ផ្លែឈើ និងពូជកូនឈើសម្រាប់ទីផ្សារ។');

-- --------------------------------------------------------

--
-- Table structure for table `plant_videobutton`
--

CREATE TABLE `plant_videobutton` (
  `id` int(11) NOT NULL,
  `first` varchar(255) DEFAULT NULL,
  `second` varchar(255) DEFAULT NULL,
  `third` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plant_videobutton`
--

INSERT INTO `plant_videobutton` (`id`, `first`, `second`, `third`) VALUES
(225, 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok', 'https://www.youtube.com/embed/7cF3bvQqRxA?si=GG4McOxNf5gHXlzE', 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok'),
(226, 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok', 'https://www.youtube.com/embed/7cF3bvQqRxA?si=GG4McOxNf5gHXlzE', 'https://www.youtube.com/embed/5haYloOK8Mo?si=j1rdD50wgHfB7xa_'),
(227, 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok', 'https://www.youtube.com/embed/7cF3bvQqRxA?si=GG4McOxNf5gHXlzE', 'https://www.youtube.com/embed/1-vFeDwW5WA?si=crP6Y7QYrmaaKsok');

-- --------------------------------------------------------

--
-- Table structure for table `plant_vidtop`
--

CREATE TABLE `plant_vidtop` (
  `id` int(11) NOT NULL,
  `video_top` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plant_vidtop`
--

INSERT INTO `plant_vidtop` (`id`, `video_top`) VALUES
(301, 'https://www.youtube.com/embed/arXQuineYz8?si=fKTsRzojEqNEm0Zt');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id`, `img`) VALUES
(6, '1.jpg'),
(7, '2.jpg'),
(9, '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `table_form`
--

CREATE TABLE `table_form` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `sex` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `parent_number` varchar(12) NOT NULL,
  `end_of_highschool` varchar(200) NOT NULL,
  `level_study` varchar(200) NOT NULL,
  `place_exambacll` varchar(200) NOT NULL,
  `number_room` int(10) NOT NULL,
  `number_table` int(10) NOT NULL,
  `img_student` varchar(255) NOT NULL,
  `birth_certificate` varchar(255) NOT NULL,
  `img_score` varchar(255) NOT NULL,
  `certificate` varchar(255) NOT NULL,
  `latang` varchar(255) NOT NULL,
  `department` varchar(200) NOT NULL,
  `date_bacll` date NOT NULL,
  `num_certificate` int(20) NOT NULL,
  `skill_one` varchar(255) NOT NULL,
  `skill_two` varchar(255) NOT NULL,
  `num_personal` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `table_form`
--

INSERT INTO `table_form` (`id`, `first_name`, `last_name`, `sex`, `dob`, `address`, `phone`, `parent_number`, `end_of_highschool`, `level_study`, `place_exambacll`, `number_room`, `number_table`, `img_student`, `birth_certificate`, `img_score`, `certificate`, `latang`, `department`, `date_bacll`, `num_certificate`, `skill_one`, `skill_two`, `num_personal`) VALUES
(352, 'ហុឹម', 'សៅសាវី2', 'female', '2004-06-20', 'ភូមិអូរអង្គុំ ឃុំអមលាំង ស្រុកថ្ពង ខេត្តកំពង់ស្ពឺ', '097 432 5735', '088 969 5391', 'Toukmeas', 'បរិញ្ញាបត្រ ', 'ជាសុីម', 11, 325, '1.jpg', '2.jpg', '4.jpg', '', 'HOEM SAVSAVY', 'បច្ចេកវិទ្យាអាហារ ', '2022-12-05', 987654321, 'វិទ្យាសាស្រ្តដំណាំ', 'វិទ្យាសាស្រ្តកុំព្យូទ័រ', 11),
(353, 'fd', 'df', 'male', '2024-04-01', 'dfd', 'df', '343', '34534', 'មធ្យមសិក្សាទុយភូមិ ', 'ASA', 34, 353, 'show data.png', 'Screenshot 2024-04-23 102409.png', 'Screenshot 2024-04-23 102409.png', 'Screenshot 2024-04-23 100246.png', 'fd', 'បច្ចេកវិទ្យាអាហារ ', '2024-04-04', 35435, '34534', '345', 34534),
(354, 'fg', 'gg', 'male', '2024-04-06', 'afafx', '0987654', '4234', 'ADASD', 'មធ្យមសិក្សាទុយភូមិ ', 'sfs', 0, 353, 'Screenshot 2024-04-23 103231.png', 'Screenshot 2024-04-22 011605.png', 'Screenshot 2024-04-23 103231.png', 'show data.png', 'sfafas', 'វិទ្យាសាស្រ្តដំណាំ', '2024-04-03', 35435, 'sa', 'DSSD', 34534),
(355, 'fg', 'gg', 'male', '2024-04-17', 'sas', '08989', '0987654', 'Toukmeas', 'បរិញ្ញាបត្រ ', 'ASA', 34, 353, 'show data.png', 'Screenshot 2024-04-23 100246.png', 'Screenshot 2024-04-23 103231.png', 'Screenshot 2024-04-22 011628.png', 'sfafas', '9+3 ', '2024-04-01', 35435, 'sa', 'DSSD', 34534);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `al_data`
--
ALTER TABLE `al_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `al_videobutton`
--
ALTER TABLE `al_videobutton`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `al_vidtop`
--
ALTER TABLE `al_vidtop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `com_data`
--
ALTER TABLE `com_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `com_videobutton`
--
ALTER TABLE `com_videobutton`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `com_vidtop`
--
ALTER TABLE `com_vidtop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `el_data`
--
ALTER TABLE `el_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `el_videobutton`
--
ALTER TABLE `el_videobutton`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `el_vidtop`
--
ALTER TABLE `el_vidtop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_data`
--
ALTER TABLE `food_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_videobutton`
--
ALTER TABLE `food_videobutton`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_vidtop`
--
ALTER TABLE `food_vidtop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `macha_data`
--
ALTER TABLE `macha_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `macha_videobutton`
--
ALTER TABLE `macha_videobutton`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `macha_vidtop`
--
ALTER TABLE `macha_vidtop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plant_data`
--
ALTER TABLE `plant_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plant_videobutton`
--
ALTER TABLE `plant_videobutton`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plant_vidtop`
--
ALTER TABLE `plant_vidtop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_form`
--
ALTER TABLE `table_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `al_data`
--
ALTER TABLE `al_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `al_videobutton`
--
ALTER TABLE `al_videobutton`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT for table `al_vidtop`
--
ALTER TABLE `al_vidtop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=306;

--
-- AUTO_INCREMENT for table `com_data`
--
ALTER TABLE `com_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `com_videobutton`
--
ALTER TABLE `com_videobutton`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT for table `com_vidtop`
--
ALTER TABLE `com_vidtop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;

--
-- AUTO_INCREMENT for table `el_data`
--
ALTER TABLE `el_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `el_videobutton`
--
ALTER TABLE `el_videobutton`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT for table `el_vidtop`
--
ALTER TABLE `el_vidtop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;

--
-- AUTO_INCREMENT for table `food_data`
--
ALTER TABLE `food_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `food_videobutton`
--
ALTER TABLE `food_videobutton`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT for table `food_vidtop`
--
ALTER TABLE `food_vidtop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `macha_data`
--
ALTER TABLE `macha_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `macha_videobutton`
--
ALTER TABLE `macha_videobutton`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT for table `macha_vidtop`
--
ALTER TABLE `macha_vidtop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;

--
-- AUTO_INCREMENT for table `plant_data`
--
ALTER TABLE `plant_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `plant_videobutton`
--
ALTER TABLE `plant_videobutton`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT for table `plant_vidtop`
--
ALTER TABLE `plant_vidtop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `table_form`
--
ALTER TABLE `table_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=356;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
