-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 01:40 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `misc`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `catName`, `status`, `created_at`, `updated_at`) VALUES
(8, 'JAVA SCRIPT', 1, '2019-08-10 09:48:55', '2019-08-14 01:29:34'),
(9, 'PYHON', 1, '2019-08-11 10:04:55', '2019-08-13 08:07:48'),
(10, 'CSS', 1, '2019-08-11 10:05:40', '2019-08-16 02:47:49'),
(11, 'HTML', 1, '2019-08-11 10:07:18', '2019-08-13 08:07:42'),
(12, 'JAVA', 0, '2019-08-11 10:11:37', '2019-08-16 02:48:02'),
(13, 'PHP', 1, '2019-08-11 10:44:45', '2019-08-13 09:25:32'),
(18, 'CSHARP', 0, '2019-08-14 01:27:42', '2019-08-16 02:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seen` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `body`, `seen`, `created_at`, `updated_at`) VALUES
(23, 'Amzad Hossain', 'amzad_hossain8@outlook.com', 'fw', 'Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.', 1, '2019-08-17 09:29:28', '2019-08-18 21:37:30'),
(24, 'Hossain', 'amzad_hossain8@outlook.com', 'dfdsafdsf', 'Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.', 1, '2019-08-17 09:29:46', '2019-08-18 21:37:30'),
(26, 'gracious', 'f8.com.bd@gmail.com', 'fdfsa', 'Do you have any questions?', 1, '2019-08-17 09:31:45', '2019-08-18 22:15:05'),
(28, 'Amzad Hossain Foisal', 'f8.com.bd@gmail.com', 'fdfdfsfs', 'Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.', 1, '2019-08-17 11:18:46', '2019-08-18 21:37:30'),
(30, 'Amzad Hossain', 'amzad1044@gmail.com', 'message', 'Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.', 1, '2019-08-17 23:53:38', '2019-08-18 21:59:35'),
(31, 'Gracious', 'gracious.zad@protonmail.com', 'discuss', 'Our team will come back to you within a matter of hours to help you. Our team will come back to you within a matter of hours to help you. Our team will come back to you within a matter of hours to help you. Our team will come back to you within a matter of hours to help you.', 1, '2019-08-18 07:16:10', '2019-08-18 21:37:30'),
(35, 'Zad', 'gracious.zad@protonmail.com', 'testing', 'Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 1, '2019-08-18 21:38:00', '2019-08-18 22:03:41'),
(36, 'hehe', 'gracious.zad@protonmail.com', 'heehh', 'heheheheh', 1, '2019-08-18 22:55:54', '2019-08-18 22:56:03'),
(37, 'efe', 'gracious.zad@protonmail.com', 'fefe', 'fefeeeeeeeeeeeee', 1, '2019-08-19 08:56:58', '2019-08-19 08:57:33'),
(39, 'dfdsfd', 'amzad_hossain8@outlook.com', 'egege', 'gegege', 1, '2019-08-30 11:04:35', '2019-08-30 11:05:02'),
(40, 'admin', 'foisal@gmail.com', 'egege', 'fdsfsfsf', 0, '2020-05-20 05:38:35', '2020-05-20 05:38:35');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fname`, `lname`, `email`, `password`, `phone`, `created_at`, `updated_at`) VALUES
(6, 'Foisal', 'Hossain', 'f8.com.bd@gmail.com', '$2y$10$FUfkk04zQx34DVxwv4ek8ePHABnMPGJKpvUvnZtk9wngV/Yavpn36', '01627335800', '2019-08-17 03:41:34', '2019-08-17 03:41:34'),
(7, 'Amzad', 'Hossain', 'amzad_hossain8@outlook.com', '$2y$10$C4W7J5Qi0innSi/g5l2Qleiq7j0AM2L1etCB53AUbQL2ImukTbWmq', NULL, '2019-08-17 03:45:48', '2019-08-17 03:45:48'),
(8, 'khan', 'hossain', 'amzad@gmail.com', '$2y$10$i6qmAfA6US6QGgPtCFVegOskdJgtVDcVxHwwtIQQUowTtpKWnmgFi', NULL, '2019-08-17 03:55:04', '2019-08-17 03:55:04'),
(9, 'admin', 'admin', 'admin@gmail.com', '$2y$10$vy1nWFG9sJR/e7j1v2QJ.urWGOpRTfqTuPTfjKWxcLN/NJpJV2he2', NULL, '2019-08-17 03:57:47', '2019-08-17 03:57:47'),
(10, 'Foisal', 'Hossain', 'amzad1044@gmail.com', '$2y$10$2HFFStRwPbP1VOi8mjW4E.sxIfv/kfJ4E3We9pVCHtuxQbcSaBlFS', '1627335800', '2019-08-17 23:53:10', '2019-08-17 23:53:10'),
(12, 'Gracious', 'grac', 'gracious.zad@protonmail.com', '$2y$10$p2p/n8W23KiRtKDYlN.m0OdJtU.vse0mtkzU9j24EeSN.Hca8TzXC', NULL, '2019-08-18 21:32:56', '2019-08-18 21:32:56'),
(14, 'Foisal', 'hossain', 'foisal@gmail.com', '$2y$10$QJ/0moOdmtx2EjWCTLMnmet0W/4Lrup2KuFTqiRUtNC1mqorme1RW', '01627335800', '2020-05-20 05:38:23', '2020-05-20 05:38:23'),
(15, 'Foisal', 'hossain', 'foisal@gmail.com', '$2y$10$jNw/JYws6xWl3fgB6t0iqOEyZaLAo1tKP.AuvzDJVkFUjNBCcEgNi', '01627335800', '2020-05-20 05:38:23', '2020-05-20 05:38:23'),
(16, 'new', 'dfsfs', 'new@gmail.com', '$2y$10$MgB.BEhixRZQC3Ez4/xH8uzRNfFtVIK.5hKZdDAqD2cqZkzUOYGOW', '01865742256', '2020-05-20 05:40:01', '2020-05-20 05:40:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_11_144019_create_categories_table', 2),
(4, '2019_08_11_144246_create_categories_table', 3),
(5, '2019_08_13_142027_create_posts_table', 4),
(6, '2019_08_14_132238_create_pages_table', 5),
(7, '2019_08_16_150421_create_customers_table', 6),
(8, '2019_08_17_143253_create_contacts_table', 7),
(9, '2019_08_18_041931_create_sents_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `editor1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `editor1`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Service', '<p>This guide will walk you through the decisions you need to make when customizing your development environment for working with Python.This guide will walk you through the decisions you need to make when customizing your development environment for working</p>\r\n\r\n<p>with Python.This guide will walk you through the decisions you need to make when customizing your development environment for working with Python.This guide will walk you through the decisions you need to make when customizing your development environment for working with Python.</p>', 1, '2019-08-14 07:45:07', '2019-08-19 09:53:07'),
(6, 'About', '<p>This guide will walk you through the decisions you need to make when customizing your development environment for working with Python.This guide will walk you through the decisions you need to make when customizing your development environment for working with Python.This guide will walk you through the decisions you need to make when customizing your development environment for working with Python.This guide will walk you through the decisions you need to make when customizing your development environment for working with Python.This guide will walk you through the decisions you need to make when customizing your development environment for working with Python.This guide will walk you through the decisions you need to make when customizing your development environment for working with Python.This guide will walk you through the decisions you need to make when customizing your development environment for working with Python.This guide will walk you through the decisions you need to make when customizing your development environment for working with Python.</p>', 1, '2019-08-19 09:23:19', '2019-08-19 09:23:19');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catId` int(11) NOT NULL,
  `editor1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT 0,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `catId`, `editor1`, `status`, `tags`, `image`, `username`, `created_at`, `updated_at`) VALUES
(17, 'Javascript Newsletter', 8, '<p>Javascript newsletter is a comprehensive summary of the day&#39;s most important blog posts and news articles from the best Javascript websites on the web, and delivered to your email inbox each morning. To subscribe, simply provide us with your email address.Doing blogger outreach or influencer marketing and want to connect with new influencers in niche markets? Improve your outreach by connecting with thousands of authority bloggers and social media influencers in your domain area. Feedspot media database has over 100k Influential Bloggers in over 1500 niche categories.</p>', 1, 'Js', 'PostImages/blogs_to_follow1.png', 'Amzad Hossain', '2019-08-15 07:56:32', '2019-08-15 07:56:32'),
(18, 'Reddit - JavaScript', 8, '<p>David Walsh is Mozilla&#39;s senior web developer, and the core developer for the MooTools Javascript Framework. David&#39;s blog reflects his skills in HTML/5, JS and CSS, and offers a ton of engaging advice and insight into front-end technologies. Even more obvious is his passion for open source contribution and trial-and-error development, making his blog one of the most honest and engaging around.David Walsh is Mozilla&#39;s senior web developer, and the core developer for the MooTools Javascript Framework. David&#39;s blog reflects his skills in HTML/5, JS and CSS, and offers a ton of engaging advice and insight into front-end technologies. Even more obvious is his passion for open source contribution and trial-and-error development, making his blog one of the most honest and engaging around.</p>', 1, 'Javascript', 'PostImages/1_H-25KB7EbSHjv70HXrdl6w.png', 'Fosial Hossain', '2019-08-15 07:58:30', '2019-08-16 02:50:07'),
(20, 'PHP Newsletter', 13, '<p>PHP newsletter is a comprehensive summary of the day&#39;s most important blog posts and news articles from the best PHP websites on the web, and delivered to your email inbox each morning. To subscribe, simply provide us with your email addressPHP newsletter is a comprehensive summary of the day&#39;s most important blog posts and news articles from the best PHP websites on the web, and delivered to your email inbox each morning. To subscribe, simply provide us with your email addressPHP newsletter is a comprehensive summary of the day&#39;s most important blog posts and news articles from the best PHP websites on the web, and delivered to your email inbox each morning. To subscribe, simply provide us with your email addressPHP newsletter is a comprehensive summary of the day&#39;s most important blog posts and news articles from the best PHP websites on the web, and delivered to your email inbox each morning. To subscribe, simply provide us with your email address</p>', 1, 'php', 'PostImages/php-trends.jpg', 'Fosial Hossain', '2019-08-15 08:02:32', '2019-08-15 08:02:32'),
(21, 'PHP Blogs', 13, '<p>Planet PHP Blog covers all PHP news in one place. A close to complete list of all important PHP related weblogsPlanet PHP Blog covers all PHP news in one place. A close to complete list of all important PHP related weblogsPlanet PHP Blog covers all PHP news in one place. A close to complete list of all important PHP related weblogsPlanet PHP Blog covers all PHP news in one place. A close to complete list of all important PHP related weblogsPlanet PHP Blog covers all PHP news in one place. A close to complete list of all important PHP related weblogsPlanet PHP Blog covers all PHP news in one place. A close to complete list of all important PHP related weblogs</p>', 1, 'php', 'PostImages/php_banner.png', 'Fosial Hossain', '2019-08-15 08:03:25', '2019-08-15 23:35:27'),
(22, 'Java Blogs 2019', 12, '<p>Oracle is the most renowned name in the Java industry that offers a fully integrated and comprehensive stack of platform services and cloud applications. Oracle blog is is the platform where you can get the latest updates and insights on Java SE and Java OpenJDK. Among the multiple categories, JavaIoT&nbsp;covers the articles on the latest Java technology for small devices and security in payment, IoT etc.Oracle is the most renowned name in the Java industry that offers a fully integrated and comprehensive stack of platform services and cloud applications. Oracle blog is is the platform where you can get the latest updates and insights on Java SE and Java OpenJDK. Among the multiple categories, JavaIoT&nbsp;covers the articles on the latest Java technology for small devices and security in payment, IoT etc.</p>', 0, 'Java', 'PostImages/1_E4CO83SmCCrvRrge7U3Ahw.jpeg', 'Fosial Hossain', '2019-08-15 08:05:08', '2019-08-16 00:27:50'),
(23, 'Javaworld', 12, '<p>This is one of the top Java blogs that contains in-depth resources on this programming language including learning resources, glossaries, latest news and reviews related to tools &amp; applications and many more. You can even use this blog for finding the latest updates regarding java as a career option. JAVAWORLD is owned by IDC (International Data Group), the leading media technology company.This is one of the top Java blogs that contains in-depth resources on this programming language including learning resources, glossaries, latest news and reviews related to tools &amp; applications and many more. You can even use this blog for finding the latest updates regarding java as a career option. JAVAWORLD is owned by IDC (International Data Group), the leading media technology company.</p>', 1, 'java', 'PostImages/Java-logo-png.png', 'Fosial Hossain', '2019-08-15 08:14:28', '2019-08-15 08:14:28'),
(24, 'HTML For Absolute Beginners', 11, '<p>A simple introduction to HTML and step-by-step guide to creating your first HTML page.A simple introduction to HTML and step-by-step guide to creating your first HTML page.A simple introduction to HTML and step-by-step guide to creating your first HTML page.A simple introduction to HTML and step-by-step guide to creating your first HTML page.A simple introduction to HTML and step-by-step guide to creating your first HTML page.A simple introduction to HTML and step-by-step guide to creating your first HTML page.</p>', 1, 'html', 'PostImages/1_28-1lYrYTQoLhi87mllgBw.png', 'Fosial Hossain', '2019-08-15 08:16:32', '2019-08-15 23:47:25'),
(25, 'C# interview', 18, '<p>PRAGIM is known for placements in major IT companies. Major MNC&#39;s visit PRAGIM campus every week for interviews.You can contact our old students who are placed with in 1 week of completing their Training and are getting a salary ranging from Rs. 25,000 to Rs.50,000PRAGIM is known for placements in major IT companies. Major MNC&#39;s visit PRAGIM campus every week for interviews.You can contact our old students who are placed with in 1 week of completing their Training and are getting a salary ranging from Rs. 25,000 to Rs.50,000</p>', 1, 'csharp', 'PostImages/15-Best-Ways-to-Learn-C-Sharp_785.png', 'Fosial Hossain', '2019-08-15 08:19:44', '2019-08-15 08:19:44'),
(26, 'An Effective Python', 9, '<p>This guide will walk you through the decisions you need to make when customizing your development environment for working with Python.This guide will walk you through the decisions you need to make when customizing your development environment for working with Python.This guide will walk you through the decisions you need to make when customizing your development environment for working with Python.This guide will walk you through the decisions you need to make when customizing your development environment for working with Python.</p>', 1, 'Python', 'PostImages/2167996_0e41_3.jpg', 'Fosial Hossain', '2019-08-15 08:21:17', '2019-08-15 08:21:17'),
(27, 'Python page', 9, '<p>This guide will walk you through the decisions you need to make when customizing your development environment for working with Python.This guide will walk you through the decisions you need to make when customizing your development environment for working with Python.This guide will walk you through the decisions you need to make when customizing your development environment for working with Python.This guide will walk you through the decisions you need to make when customizing your development environment for working with Python.</p>', 0, 'Python', 'PostImages/data-science-with-python-training-course-15.jpg', 'Fosial Hossain', '2019-08-15 08:22:32', '2019-08-16 02:44:53'),
(28, 'Html page', 11, '<p><strong>HTML</strong>&nbsp;is the standard markup language for creating Web pages.&nbsp;<strong>HTML</strong>&nbsp;stands for Hyper Text Markup Language.&nbsp;<strong>HTML</strong>&nbsp;describes the structure of a Web page.&nbsp;<strong>HTML</strong>&nbsp;consists of a series of elements.&nbsp;<strong>HTML</strong>elements tell the browser how to display the content.<strong>HTML</strong>&nbsp;is the standard markup language for creating Web pages.&nbsp;<strong>HTML</strong>&nbsp;stands for Hyper Text Markup Language.&nbsp;<strong>HTML</strong>&nbsp;describes the structure of a Web page.&nbsp;<strong>HTML</strong>&nbsp;consists of a series of elements.&nbsp;<strong>HTML</strong>elements tell the browser how to display the content.<strong>HTML</strong>&nbsp;is the standard markup language for creating Web pages.&nbsp;<strong>HTML</strong>&nbsp;stands for Hyper Text Markup Language.&nbsp;<strong>HTML</strong>&nbsp;describes the structure of a Web page.&nbsp;<strong>HTML</strong>&nbsp;consists of a series of elements.&nbsp;<strong>HTML</strong>elements tell the browser how to display the content.<strong>HTML</strong>&nbsp;is the standard markup language for creating Web pages.&nbsp;<strong>HTML</strong>&nbsp;stands for Hyper Text Markup Language.&nbsp;<strong>HTML</strong>&nbsp;describes the structure of a Web page.&nbsp;<strong>HTML</strong>&nbsp;consists of a series of elements.&nbsp;<strong>HTML</strong>elements tell the browser how to display the content.<strong>HTML</strong>&nbsp;is the standard markup language for creating Web pages.&nbsp;<strong>HTML</strong>&nbsp;stands for Hyper Text Markup Language.&nbsp;<strong>HTML</strong>&nbsp;describes the structure of a Web page.&nbsp;<strong>HTML</strong>&nbsp;consists of a series of elements.&nbsp;<strong>HTML</strong>elements tell the browser how to display the content.</p>', 0, 'html', 'PostImages/html-illustration.png', 'Fosial Hossain', '2019-08-15 23:51:37', '2019-08-19 09:03:48');

-- --------------------------------------------------------

--
-- Table structure for table `sents`
--

CREATE TABLE `sents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frommail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `editor1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sents`
--

INSERT INTO `sents` (`id`, `name`, `subject`, `frommail`, `editor1`, `created_at`, `updated_at`) VALUES
(14, 'Amzad Hossain', 'amzad1044@gmail.com', 'amzad1044@gmail.com', '<p>Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</p>', '2019-08-17 23:53:56', '2019-08-17 23:53:56'),
(15, 'gracious', 'f8.com.bd@gmail.com', 'f8.com.bd@gmail.com', '<p>have any questionshave any questionshave any questionshave any questions&nbsp;have any questions&nbsp;have any questionshave any questionshave any questionshave any questions&nbsp;have any questions&nbsp;have any questionshave any questionshave any questionshave any questions&nbsp;have any questions</p>', '2019-08-18 00:00:09', '2019-08-18 00:00:09'),
(16, 'Gracious', 'gracious.zad@protonmail.com', 'gracious.zad@protonmail.com', '<p>within a matter of hours to help youwithin a matter of hours to help you</p>', '2019-08-18 07:17:03', '2019-08-18 07:17:03'),
(17, 'Amzad Hossain Foisal', 'f8.com.bd@gmail.com', 'f8.com.bd@gmail.com', '<p>fffffffffffffffffffffffffff</p>', '2019-08-18 09:59:12', '2019-08-18 09:59:12'),
(18, 'fdfd', 'amzad_hossain8@outlook.com', 'amzad_hossain8@outlook.com', '<p>replydddddddddddddddd</p>', '2019-08-19 09:05:30', '2019-08-19 09:05:30'),
(19, 'dfdsfd', 'amzad_hossain8@outlook.com', 'amzad_hossain8@outlook.com', '<p>eggeg</p>', '2019-08-30 11:05:17', '2019-08-30 11:05:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fosial Hossain', 'foisal@gmail.com', 1, NULL, '$2y$10$GwiXlEIC8acWcWJqsOsnEeDIZx3jqs0FfpbGiqD5jd/eX.LgYmMp2', NULL, '2019-08-10 10:25:52', '2019-08-10 10:25:52'),
(6, 'Amzad Hossain', 'amzad@gmail.com', 2, NULL, '$2y$10$C6LZZ0TJtdPTUqoKBaA3teta1ivI8ReVuaqwlELX6xIGhHL8xMldC', NULL, '2019-08-15 07:28:47', '2019-08-15 07:28:47'),
(7, 'Hossain', 'hossain@gmail.com', 1, NULL, '$2y$10$Ewp5SDwX3GgaxPPJfRQUeOyyQQUOa.RhTTXuPK3CNLXEl6B7.SIJy', NULL, '2019-08-16 08:42:06', '2019-08-16 08:42:06'),
(8, 'Gracious', 'gracious.zad@protonmail.com', 1, NULL, '$2y$10$MIzk31iKsDt1VOzbLwzd9erRSmhzgxniCSEgTBT2c/5rLycevHeoK', NULL, '2019-08-18 22:55:29', '2019-08-18 22:55:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sents`
--
ALTER TABLE `sents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sents`
--
ALTER TABLE `sents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
