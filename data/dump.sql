-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.38-log - MySQL Community Server (GPL)
-- Операционная система:         Win32
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

-- Дамп структуры для таблица gb-php.s_basket
DROP TABLE IF EXISTS `s_basket`;
CREATE TABLE IF NOT EXISTS `s_basket` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) DEFAULT NULL,
  `products` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы gb-php.s_basket: ~0 rows (приблизительно)
DELETE FROM `s_basket`;
/*!40000 ALTER TABLE `s_basket` DISABLE KEYS */;
/*!40000 ALTER TABLE `s_basket` ENABLE KEYS */;

-- Дамп структуры для таблица gb-php.s_catalog_category
DROP TABLE IF EXISTS `s_catalog_category`;
CREATE TABLE IF NOT EXISTS `s_catalog_category` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `parent_id` int(255) DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='\r\n';

-- Дамп данных таблицы gb-php.s_catalog_category: ~10 rows (приблизительно)
DELETE FROM `s_catalog_category`;
/*!40000 ALTER TABLE `s_catalog_category` DISABLE KEYS */;
INSERT INTO `s_catalog_category` (`id`, `parent_id`, `name`, `code`) VALUES
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
/*!40000 ALTER TABLE `s_catalog_category` ENABLE KEYS */;

-- Дамп структуры для таблица gb-php.s_catalog_products
DROP TABLE IF EXISTS `s_catalog_products`;
CREATE TABLE IF NOT EXISTS `s_catalog_products` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `category_id` int(255) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_small` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_slider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `status` int(255) DEFAULT NULL,
  `view` int(255) DEFAULT NULL,
  `count` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы gb-php.s_catalog_products: ~15 rows (приблизительно)
DELETE FROM `s_catalog_products`;
/*!40000 ALTER TABLE `s_catalog_products` DISABLE KEYS */;
INSERT INTO `s_catalog_products` (`id`, `category_id`, `name`, `image`, `image_small`, `image_slider`, `description`, `price`, `status`, `view`, `count`) VALUES
	(1, 5, 'Футболка', '/images/product1.jpg', '/images/product-cart-small.jpg', '/images/productslide1.jpg', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 200, 1, 0, 10),
	(2, 5, 'футболка', '/images/product1.jpg', '/images/product-cart-small.jpg', '/images/productslide1.jpg', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 250, 1, 0, 10),
	(3, 5, 'футболка', '/images/product1.jpg', '/images/product-cart-small.jpg', '/images/productslide1.jpg', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 250, 1, 0, 10),
	(4, 5, 'футболка', '/images/product1.jpg', '/images/product-cart-small.jpg', '/images/productslide1.jpg', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 250, 1, 0, 10),
	(5, 5, 'футболка', '/images/product1.jpg', '/images/product-cart-small.jpg', '/images/productslide1.jpg', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 250, 1, 0, 10),
	(6, 5, 'футболка', '/images/product1.jpg', '/images/product-cart-small.jpg', '/images/productslide1.jpg', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 250, 2, 0, 10),
	(7, 5, 'футболка', '/images/product1.jpg', '/images/product-cart-small.jpg', '/images/productslide1.jpg', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 250, 2, 0, 10),
	(8, 5, 'футболка', '/images/product1.jpg', '/images/product-cart-small.jpg', '/images/productslide1.jpg', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 250, 2, 0, 10),
	(9, 5, 'футболка', '/images/product1.jpg', '/images/product-cart-small.jpg', '/images/productslide1.jpg', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 250, 2, 0, 10),
	(10, 5, 'футболка', '/images/product1.jpg', '/images/product-cart-small.jpg', '/images/productslide1.jpg', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 250, 2, 0, 10),
	(11, 5, 'футболка', '/images/product1.jpg', '/images/product-cart-small.jpg', '/images/productslide1.jpg', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 250, 0, 0, 10),
	(12, 5, 'футболка', '/images/product1.jpg', '/images/product-cart-small.jpg', '/images/productslide1.jpg', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 250, 0, 0, 10),
	(13, 5, 'футболка', '/images/product1.jpg', '/images/product-cart-small.jpg', '/images/productslide1.jpg', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 250, 0, 0, 10),
	(14, 5, 'футболка', '/images/product1.jpg', '/images/product-cart-small.jpg', '/images/productslide1.jpg', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 250, 0, 0, 10),
	(15, 5, 'футболка', '/images/product1.jpg', '/images/product-cart-small.jpg', '/images/productslide1.jpg', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 250, 0, 0, 10);
/*!40000 ALTER TABLE `s_catalog_products` ENABLE KEYS */;

-- Дамп структуры для таблица gb-php.s_catalog_size
DROP TABLE IF EXISTS `s_catalog_size`;
CREATE TABLE IF NOT EXISTS `s_catalog_size` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `value` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы gb-php.s_catalog_size: ~0 rows (приблизительно)
DELETE FROM `s_catalog_size`;
/*!40000 ALTER TABLE `s_catalog_size` DISABLE KEYS */;
/*!40000 ALTER TABLE `s_catalog_size` ENABLE KEYS */;

-- Дамп структуры для таблица gb-php.s_reviews
DROP TABLE IF EXISTS `s_reviews`;
CREATE TABLE IF NOT EXISTS `s_reviews` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы gb-php.s_reviews: ~3 rows (приблизительно)
DELETE FROM `s_reviews`;
/*!40000 ALTER TABLE `s_reviews` DISABLE KEYS */;
INSERT INTO `s_reviews` (`id`, `user_id`, `product_id`, `name`, `text`) VALUES
	(1, 3, 0, 'Иван Иванов', 'Vestibulum quis porttitor dui! Quisque viverra nun'),
	(2, 3, 0, 'Иван Иванов', 'Vestibulum quis porttitor dui! Quisque viverra nun'),
	(3, 0, 0, 'Пётр Петров', 'Vestibulum quis porttitor dui! Quisque viverra nun');
/*!40000 ALTER TABLE `s_reviews` ENABLE KEYS */;

-- Дамп структуры для таблица gb-php.s_subscribe
DROP TABLE IF EXISTS `s_subscribe`;
CREATE TABLE IF NOT EXISTS `s_subscribe` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы gb-php.s_subscribe: ~2 rows (приблизительно)
DELETE FROM `s_subscribe`;
/*!40000 ALTER TABLE `s_subscribe` DISABLE KEYS */;
INSERT INTO `s_subscribe` (`id`, `email`) VALUES
	(1, '123@123.ru'),
	(2, '123123@123.ru');
/*!40000 ALTER TABLE `s_subscribe` ENABLE KEYS */;

-- Дамп структуры для таблица gb-php.s_users
DROP TABLE IF EXISTS `s_users`;
CREATE TABLE IF NOT EXISTS `s_users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `f_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `l_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_register` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_date_auth` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы gb-php.s_users: ~2 rows (приблизительно)
DELETE FROM `s_users`;
/*!40000 ALTER TABLE `s_users` DISABLE KEYS */;
INSERT INTO `s_users` (`id`, `login`, `password`, `email`, `f_name`, `l_name`, `image`, `address`, `date_register`, `last_date_auth`) VALUES
	(3, 'test', '$2y$10$AyeQcmxfth1Jza6T/b4UqOeMB47Gn0jKwVgHzWSLRiPReVDQJldsK', 'test@test.ru', 'test', 'test', '/images/reviews.jpg', 'Москва', '2018-03-11 16:12:25', '2018-03-18 13:10:55');
/*!40000 ALTER TABLE `s_users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
