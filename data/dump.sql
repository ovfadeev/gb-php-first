-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.38-log - MySQL Community Server (GPL)
-- Операционная система:         Win64
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных gb-php
DROP DATABASE IF EXISTS `gb-php`;
CREATE DATABASE IF NOT EXISTS `gb-php` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `gb-php`;

-- Дамп структуры для таблица gb-php.basket
DROP TABLE IF EXISTS `basket`;
CREATE TABLE IF NOT EXISTS `basket` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) DEFAULT NULL,
  `products` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы gb-php.basket: ~0 rows (приблизительно)
DELETE FROM `basket`;
/*!40000 ALTER TABLE `basket` DISABLE KEYS */;
/*!40000 ALTER TABLE `basket` ENABLE KEYS */;

-- Дамп структуры для таблица gb-php.catalog_category
DROP TABLE IF EXISTS `catalog_category`;
CREATE TABLE IF NOT EXISTS `catalog_category` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `parent_id` int(255) DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы gb-php.catalog_category: ~10 rows (приблизительно)
DELETE FROM `catalog_category`;
/*!40000 ALTER TABLE `catalog_category` DISABLE KEYS */;
INSERT INTO `catalog_category` (`id`, `parent_id`, `name`, `code`) VALUES
	(1, 0, 'Man', 'man'),
	(2, 0, 'Woman', 'woman'),
	(3, 0, 'Kid', 'kid'),
	(4, 0, 'Accoseriese', 'accoseriese'),
	(5, 1, 'Accessories', 'accessories'),
	(6, 1, 'Bags', 'bags'),
	(7, 1, 'Denim', 'denim'),
	(8, 1, 'Hoodies & Sweatshirts', 'hoodies-and-sweatshirts'),
	(9, 1, 'Jackets & Coats', 'jakets-and-coats'),
	(10, 1, 'Pants', 'pants');
/*!40000 ALTER TABLE `catalog_category` ENABLE KEYS */;

-- Дамп структуры для таблица gb-php.catalog_products
DROP TABLE IF EXISTS `catalog_products`;
CREATE TABLE IF NOT EXISTS `catalog_products` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `category_id` int(255) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `status` int(255) DEFAULT NULL,
  `view` int(255) DEFAULT NULL,
  `count` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы gb-php.catalog_products: ~2 rows (приблизительно)
DELETE FROM `catalog_products`;
/*!40000 ALTER TABLE `catalog_products` DISABLE KEYS */;
INSERT INTO `catalog_products` (`id`, `category_id`, `name`, `image`, `description`, `price`, `status`, `view`, `count`) VALUES
	(1, 5, 'Футболка', '/images/product1.jpg', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 200, NULL, 0, 10),
	(2, 5, 'футболка', '/images/product1.jpg', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 250, NULL, 0, 10);
/*!40000 ALTER TABLE `catalog_products` ENABLE KEYS */;

-- Дамп структуры для таблица gb-php.reviews
DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы gb-php.reviews: ~0 rows (приблизительно)
DELETE FROM `reviews`;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;

-- Дамп структуры для таблица gb-php.subscribe
DROP TABLE IF EXISTS `subscribe`;
CREATE TABLE IF NOT EXISTS `subscribe` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы gb-php.subscribe: ~2 rows (приблизительно)
DELETE FROM `subscribe`;
/*!40000 ALTER TABLE `subscribe` DISABLE KEYS */;
INSERT INTO `subscribe` (`id`, `email`) VALUES
	(1, '123@123.ru'),
	(2, '123123@123.ru');
/*!40000 ALTER TABLE `subscribe` ENABLE KEYS */;

-- Дамп структуры для таблица gb-php.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `f_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `l_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_register` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_date_auth` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы gb-php.users: ~1 rows (приблизительно)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `login`, `password`, `email`, `f_name`, `l_name`, `date_register`, `last_date_auth`) VALUES
	(3, 'test', '$2y$10$AyeQcmxfth1Jza6T/b4UqOeMB47Gn0jKwVgHzWSLRiPReVDQJldsK', 'test@test.ru', 'test', 'test', '2018-03-11 16:12:25', '2018-03-18 13:10:55'),
	(4, 'test2', '$2y$10$/LeT/FKgsq3lW4Z3fHT/0ePQLnJc3uEmcn3sNg/M1mWKWwvzzrlpy', 'test@test.ru', 'test', 'test', '2018-03-11 16:18:35', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
