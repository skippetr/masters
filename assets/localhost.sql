-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 20, 2017 at 10:00 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=``@`%` PROCEDURE `AddGeometryColumn` (`catalog` VARCHAR(64), `t_schema` VARCHAR(64), `t_name` VARCHAR(64), `geometry_column` VARCHAR(64), `t_srid` INT)  begin
  set @qwe= concat('ALTER TABLE ', t_schema, '.', t_name, ' ADD ', geometry_column,' GEOMETRY REF_SYSTEM_ID=', t_srid); PREPARE ls from @qwe; execute ls; deallocate prepare ls; end$$

CREATE DEFINER=``@`%` PROCEDURE `DropGeometryColumn` (`catalog` VARCHAR(64), `t_schema` VARCHAR(64), `t_name` VARCHAR(64), `geometry_column` VARCHAR(64))  begin
  set @qwe= concat('ALTER TABLE ', t_schema, '.', t_name, ' DROP ', geometry_column); PREPARE ls from @qwe; execute ls; deallocate prepare ls; end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1487396456),
('m140209_132017_init', 1487396459),
('m140403_174025_create_account_table', 1487396460),
('m140504_113157_update_tables', 1487396460),
('m140504_130429_create_token_table', 1487396460),
('m140830_171933_fix_ip_field', 1487396461),
('m140830_172703_change_account_table_name', 1487396461),
('m141222_110026_update_ip_field', 1487396461),
('m141222_135246_alter_username_length', 1487396461),
('m150614_103145_update_social_account_table', 1487396461),
('m150623_212711_fix_username_notnull', 1487396461),
('m151218_234654_add_timezone_to_profile', 1487396461),
('m160929_103127_add_last_login_at_to_user_table', 1487396461);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `public_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_id` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci,
  `timezone` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `technic` int(3) DEFAULT NULL,
  `city` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `name`, `public_email`, `gravatar_email`, `gravatar_id`, `location`, `website`, `bio`, `timezone`, `technic`, `city`) VALUES
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Иванов Иван Иванович', NULL, NULL, NULL, NULL, NULL, 'Мастер по ремонту стиральных машин', NULL, 1, 34),
(13, 'Конорейка Петр Васильевич', NULL, NULL, NULL, NULL, NULL, 'Мастер по ремонту стиральных машин', NULL, 1, 25);

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` int(11) NOT NULL,
  `code` int(3) NOT NULL,
  `name` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `code`, `name`) VALUES
(1, 23, 'Краснодар'),
(5, 26, 'Ставрополь'),
(6, 27, 'Хабаровск'),
(7, 29, 'Архангельск'),
(8, 32, 'Брянск'),
(9, 33, 'Владимир'),
(10, 34, 'Волгоград'),
(11, 36, 'Воронеж'),
(12, 37, 'Иваново'),
(13, 38, 'Иркутск'),
(14, 39, 'Калининград'),
(15, 40, 'Калуга'),
(16, 42, 'Кемерово'),
(17, 43, 'Киров'),
(18, 44, 'Кострома'),
(19, 46, 'Курск'),
(20, 47, 'Ленинградская область'),
(21, 48, 'Липецк'),
(22, 50, 'Московская область'),
(23, 51, 'Мурманкс'),
(24, 53, 'Новгород'),
(25, 54, 'Новосибирск'),
(26, 55, 'Омск'),
(27, 56, 'Оренбург'),
(28, 57, 'Орел'),
(29, 58, 'Пенза'),
(30, 59, 'Пермь'),
(31, 60, 'Псков'),
(32, 61, 'Ростов'),
(33, 62, 'Рязань'),
(34, 63, 'Самара'),
(35, 64, 'Саратов'),
(36, 65, 'Сахалин'),
(37, 67, 'Смоленск'),
(38, 68, 'Тамбов'),
(39, 69, 'Тверь'),
(40, 70, 'Томск'),
(41, 71, 'Тула'),
(42, 72, 'Тюмень'),
(43, 73, 'Ульяновск'),
(44, 74, 'Челябинск'),
(45, 76, 'Ярославль'),
(47, 77, 'Москва'),
(48, 78, 'Санкт-Петербург'),
(49, 82, 'Республика Крым'),
(50, 92, 'Севастополь');

-- --------------------------------------------------------

--
-- Table structure for table `social_account`
--

CREATE TABLE `social_account` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `code` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `technics`
--

CREATE TABLE `technics` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `technics`
--

INSERT INTO `technics` (`id`, `name`) VALUES
(1, 'Стиральная машина'),
(2, 'Водонагреватель'),
(5, 'Холодильник'),
(6, 'Посудомоечная машина');

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `user_id` int(11) NOT NULL,
  `code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registration_ip` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `flags` int(11) NOT NULL DEFAULT '0',
  `last_login_at` int(11) DEFAULT NULL,
  `type` int(2) NOT NULL,
  `rate` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password_hash`, `auth_key`, `confirmed_at`, `unconfirmed_email`, `blocked_at`, `registration_ip`, `created_at`, `updated_at`, `flags`, `last_login_at`, `type`, `rate`) VALUES
(11, 'test', 'hsker@ya.ru', '$2y$12$b8k3b3kB.9fpEMmNE.l32O0BtGN.W47GZUsK9K0i650VegcUxjace', 'NqFgZ7mBgupBF44IsKS_bUp-gfs9i9NN', 1487400350, NULL, NULL, '::1', 1487400323, 1487400323, 0, NULL, 0, NULL),
(12, 'qwe', 'qwe@qwe.ru', '$2y$12$lDP7som6gKaDQ04CGx6oGuDQDiIczoEhrreQHUj6DvAcFGPfy8GbK', 'YJ34K8rJ09E4h1GCF53zWwwnQw7nODP6', 1487443988, NULL, NULL, '::1', 1487443968, 1487443968, 0, 1487584837, 1, 1),
(13, 'qwe1', 'qwe1@qwe1.ru', '$2y$12$vkOuKvvTzx3gYgTwUUw54.DKRQjCIRdZQD9j2DpN.lsFkGgqlbDBK', 'FyqQQBbT8dpRYZ2tN8Q5utM7otBbzuBl', 1487444133, NULL, NULL, '::1', 1487444110, 1487444110, 0, NULL, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `zakaz`
--

CREATE TABLE `zakaz` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `method` int(2) DEFAULT NULL,
  `description` text,
  `file` tinytext,
  `timestamp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zakaz`
--

INSERT INTO `zakaz` (`id`, `name`, `email`, `city`, `method`, `description`, `file`, `timestamp`) VALUES
(40, 'qwe', 'qwe@qwe.ru', 'qwe', NULL, '', '/var/www/html/yii-test/uploads/map111.png', NULL),
(41, 'qwe@qwe.ru', 'qwe@qwe.ru', 'qwe', NULL, '', '/var/www/html/yii-test/uploads/map111.png', 1487591542),
(42, 'qwe', 'qwe@qwe.ru', 'qwe', NULL, '', NULL, 1487592885),
(43, 'qwe@qwe.ru', 'qwe@qwe.ru', 'qwe@qwe.ru', NULL, '', NULL, 1487592964),
(44, 'qwe@qwe.ru', 'qwe@qwe.ru', 'qwe@qwe.ru', NULL, '', '/var/www/html/yii-test/uploads/map111.png', 1487592982),
(45, 'qwe', 'qwe@qwe.ru', 'qwe', NULL, '', NULL, 1487593707),
(46, 'qwe', 'qwe@qwe.ru', 'qwe', 2, '', NULL, 1487594063);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_account`
--
ALTER TABLE `social_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_unique` (`provider`,`client_id`),
  ADD UNIQUE KEY `account_unique_code` (`code`),
  ADD KEY `fk_user_account` (`user_id`);

--
-- Indexes for table `technics`
--
ALTER TABLE `technics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD UNIQUE KEY `token_unique` (`user_id`,`code`,`type`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_unique_username` (`username`),
  ADD UNIQUE KEY `user_unique_email` (`email`);

--
-- Indexes for table `zakaz`
--
ALTER TABLE `zakaz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `social_account`
--
ALTER TABLE `social_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `technics`
--
ALTER TABLE `technics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `zakaz`
--
ALTER TABLE `zakaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `fk_user_profile` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `social_account`
--
ALTER TABLE `social_account`
  ADD CONSTRAINT `fk_user_account` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `token`
--
ALTER TABLE `token`
  ADD CONSTRAINT `fk_user_token` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
