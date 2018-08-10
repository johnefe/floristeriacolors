-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2018 at 11:52 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donvictorio`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `titulo`, `descripcion`, `imagen`, `created_at`, `updated_at`) VALUES
(2, 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '27local.jpg', '2017-03-17 22:37:43', '2018-08-09 12:26:28'),
(3, 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit amet', '34tulipanes.jpg', '2017-04-03 21:17:49', '2018-08-09 12:26:34');

-- --------------------------------------------------------

--
-- Table structure for table `best_seller_products`
--

CREATE TABLE `best_seller_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `best_seller_products`
--

INSERT INTO `best_seller_products` (`id`, `product_id`, `created_at`, `updated_at`) VALUES
(27, 18, '2017-05-10 02:59:20', '2017-05-10 02:59:20'),
(28, 8, '2017-05-10 02:59:56', '2017-05-10 02:59:56'),
(29, 9, '2017-05-10 03:00:13', '2017-05-10 03:00:13'),
(30, 10, '2017-05-10 03:03:05', '2017-05-10 03:03:05'),
(32, 5, '2017-05-10 03:03:24', '2017-05-10 03:03:24'),
(33, 21, '2017-06-18 20:14:54', '2017-06-18 20:14:54');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `fecha_compra` date NOT NULL,
  `fecha_entrega` date NOT NULL,
  `mensaje` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `de` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `para` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `observacion` longtext COLLATE utf8mb4_unicode_ci,
  `was_payed` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `client_id`, `fecha_compra`, `fecha_entrega`, `mensaje`, `de`, `para`, `direccion`, `created_at`, `updated_at`, `observacion`, `was_payed`) VALUES
(172, 16, '2018-07-25', '1969-12-31', 'Un verdadero amigo como tú puede ver el dolor en mis ojos, mientras que los demás se dejan engañar por mi sonrisa.', 'jhon frey', 'camila', 'morasurco', '2018-07-25 21:41:04', '2018-07-31 13:11:12', 'que la entrega de este ramo de flores se despues de las 7 pm muchas gracias', 2),
(183, 16, '2018-07-26', '1969-12-31', 'Felicidades, hoy has alcanzado un escalón más en tu vida, uno muy significativo, tal vez el más grande para ti, hoy es día de festejar, de gozar, tal como lo soñaste todo este tiempo, te feli', 'jhon frey', 'camila', 'morasurco', '2018-07-26 13:33:42', '2018-07-31 13:10:24', 'entregar despues de las 2 de la tarde', 0),
(184, 16, '2018-07-26', '1969-12-31', 'Tener un millón de amigos no es una maravilla, una maravilla es tener un amigo que esté contigo, cuando millones están en tu contra.', 'jhon frey', 'camila', 'morasurco', '2018-07-26 16:13:56', '2018-07-26 16:13:56', 'no', 1),
(185, 12, '2018-08-08', '1969-12-31', 'no', 's', 'camila', 'morasurco', '2018-08-08 22:42:19', '2018-08-08 22:42:19', 'no', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_type_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `category_type_id`) VALUES
(2, 'Arreglos Florales', '2017-02-13 02:47:17', '2017-03-02 02:56:18', 1),
(3, 'Diseños', '2017-02-13 02:47:27', '2017-02-13 02:47:27', 1),
(4, 'Frutas', '2017-02-13 02:47:37', '2017-02-13 02:47:37', 1),
(5, 'Margaritas', '2017-02-13 02:47:53', '2017-02-13 02:47:53', 1),
(6, 'Rosas', '2017-02-13 02:48:03', '2017-02-13 02:48:03', 1),
(7, 'Globos', '2017-03-20 18:08:17', '2017-03-20 18:08:17', 2),
(8, 'Osos', '2017-03-20 18:08:42', '2017-03-20 18:08:42', 2),
(9, 'Chocolates', '2017-03-20 18:08:47', '2017-03-20 18:08:47', 2),
(10, 'Vinos', '2017-03-20 18:08:51', '2017-03-20 18:08:51', 2),
(11, 'Arreglos Fuera de serie', '2017-04-01 01:50:32', '2017-04-01 01:50:32', 1),
(12, 'arreglos especiales', '2017-04-20 03:40:11', '2017-04-20 03:40:11', 1),
(13, 'Funebres', '2017-04-25 03:59:35', '2017-04-25 03:59:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category_types`
--

CREATE TABLE `category_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_types`
--

INSERT INTO `category_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Normal', NULL, NULL),
(2, 'Detalles', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `ciudad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombres` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellidos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexo` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `identificacion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `nombres`, `apellidos`, `sexo`, `direccion`, `celular`, `fecha_nacimiento`, `created_at`, `updated_at`, `user_id`, `identificacion`) VALUES
(1, 'Jorge', 'Viveros', 'M', 'calle 12a #41a - 74 Villa sanrafael', '3805576', '1991-11-08', '2017-03-30 01:42:52', '2017-04-04 21:50:17', 1, '1085292951'),
(2, 'Janeh', 'Arcos', 'F', 'calle 12a #41a - 74 Villa sanrafael', '3117201267', '1967-09-23', '2017-03-31 23:09:55', '2017-03-31 23:09:55', 3, '27103411'),
(4, 'NICOLAS', 'Viveros', 'M', 'calle 12a #DFDF DF', '3113805576', NULL, '2017-04-05 22:59:24', '2017-04-05 22:59:59', 5, NULL),
(5, 'jhon frey', 'diaz', NULL, NULL, '7228315', NULL, '2017-04-20 04:09:38', '2017-04-20 04:09:38', 7, '11111'),
(6, 'Soyla Marina', 'Hernandes Guerrero', 'F', 'tequendama casa 8', '3003796149', '2017-04-21', '2017-04-21 21:25:33', '2017-04-21 21:25:33', 9, '27070746'),
(7, 'floristeria', 'df', 'F', 'dfdf', '211', '2017-04-22', '2017-04-22 03:09:36', '2017-04-22 03:09:36', 10, '103484'),
(8, 'manuel antiono', 'juaspezan', NULL, NULL, '311775666', NULL, '2017-07-30 01:52:09', '2017-07-30 01:52:09', 11, '87514240'),
(9, 'Jose', 'Betancur', NULL, NULL, '+34647871868', NULL, '2017-09-18 13:00:05', '2017-09-18 13:07:17', 12, '1075088541'),
(10, 'Raul', 'Salas Gomez', NULL, NULL, '0032489589609', NULL, '2017-10-10 17:28:08', '2017-10-10 17:28:08', 13, '591 9925758'),
(11, 'Jonathan  camilo', 'Zambrano santacruz', NULL, NULL, '+541136870903', NULL, '2017-12-14 15:11:47', '2017-12-14 15:11:47', 14, '1085263532'),
(12, 's', 's', NULL, NULL, '121212', NULL, '2018-02-19 06:24:42', '2018-02-19 06:24:42', 2, '112121212'),
(13, 'Violeta Lucia', 'AlarcÃ³n Montenegro', NULL, NULL, '3156422136', NULL, '2018-04-05 17:13:39', '2018-04-05 17:13:39', 17, '1085271464'),
(14, 'Freddy', 'Delgado', NULL, NULL, '3178951433', NULL, '2018-05-11 01:20:45', '2018-05-11 01:20:45', 19, '1085268353'),
(15, 'Caterin Andrea', 'Silva', NULL, NULL, '3184207929', NULL, '2018-05-15 20:50:35', '2018-05-15 20:50:35', 20, '27087165'),
(16, 'jhon frey', 'diaz', 'M', 'los laureles', '3173187766', NULL, '2018-07-24 12:48:01', '2018-07-26 13:44:02', 6, '1122783238');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'rojo', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'rosa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'amarillo', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'morado', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'azul', '2018-08-09 12:48:01', '2018-08-09 12:48:01'),
(7, 'verde', '2018-08-09 16:24:41', '2018-08-09 16:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `datas`
--

CREATE TABLE `datas` (
  `id` int(10) UNSIGNED NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ciudad` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre` varchar(100) CHARACTER SET big5 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `datas`
--

INSERT INTO `datas` (`id`, `direccion`, `telefono`, `celular`, `email`, `ciudad`, `created_at`, `updated_at`, `facebook`, `youtube`, `pinterest`, `instagram`, `nombre`) VALUES
(1, 'Calle 19- 31 81 Las cuadras', '7290041', '3183072264', 'rosasdonvictorio@gmail.com', 'Pasto', NULL, '2018-08-08 22:32:13', 'https://www.facebook.com/Floristeria-Colors-826542960800106/?fref=ts', 'https://twitter.com/', 'https://co.pinterest.com', 'https://www.instagram.com/?hl=es', 'Rosas Don Victorio');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(10) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `precio` int(11) NOT NULL,
  `cart_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tamano` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `cantidad`, `product_id`, `precio`, `cart_id`, `created_at`, `updated_at`, `tamano`) VALUES
(241, 1, 4, 50000, 172, '2018-07-25 21:41:04', '2018-07-25 21:41:04', 'Mediano'),
(249, 1, 4, 50000, 183, '2018-07-26 13:33:42', '2018-07-26 13:33:42', 'Mediano'),
(250, 1, 9, 75000, 183, '2018-07-26 13:33:42', '2018-07-26 13:33:42', 'Mediano'),
(251, 1, 9, 75000, 184, '2018-07-26 16:13:56', '2018-07-26 16:13:56', 'Mediano'),
(252, 1, 4, 50000, 184, '2018-07-26 16:13:57', '2018-07-26 16:13:57', 'Mediano'),
(253, 1, 16, 30000, 184, '2018-07-26 16:13:57', '2018-07-26 16:13:57', 'sinTamaño'),
(254, 1, 9, 75000, 185, '2018-08-08 22:42:19', '2018-08-08 22:42:19', 'Mediano');

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
(3, '2017_02_06_113551_create_categories_table', 1),
(4, '2017_02_06_115819_create_clients_table', 1),
(5, '2017_02_06_115903_create_cities_table', 1),
(6, '2017_02_06_120115_create_occasions_table', 1),
(7, '2017_02_06_120508_create_products_table', 1),
(8, '2017_02_06_121124_create_prices_table', 1),
(9, '2017_02_06_121220_create_product_occasions_table', 1),
(10, '2017_02_06_121426_create_carts_table', 1),
(11, '2017_02_06_122535_create_details_table', 1),
(12, '2017_02_06_143602_create_points_table', 1),
(13, '2017_02_28_221803_edit_table_clients_nulleable', 1),
(14, '2017_02_28_224937_edit_table_products_description_long', 1),
(15, '2017_02_28_231945_create_datas_table', 1),
(16, '2017_02_28_232041_create_videos_table', 1),
(17, '2017_02_28_232131_create_articles_table', 1),
(18, '2017_03_02_172826_create_category_types_table', 1),
(19, '2017_03_02_173151_add_category_types_to_categories_table', 1),
(21, '2017_03_27_161832_add_isadmin_to_users_table', 2),
(22, '2017_03_29_110352_create_sliders_table', 3),
(23, '2017_03_29_221044_add_social_media_to_datas_table', 4),
(24, '2017_03_29_221132_add_identificacion_to_clients_table', 4),
(27, '2017_03_30_115155_create_popular_products_table', 5),
(28, '2017_03_30_115234_create_best_seller_products_table', 5),
(29, '2017_03_31_175410_add_descripcion_nulleable_to_productss_table', 6),
(30, '2017_04_03_180036_delete_foreign_key_to_carts_table', 7),
(31, '2017_04_03_181011_delete_foreign_key_to_details_table', 8),
(32, '2017_04_03_181435_add_tamano_to_details_table', 9),
(33, '2017_04_06_145046_add_was_payed_to_carts_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `occasions`
--

CREATE TABLE `occasions` (
  `id` int(10) UNSIGNED NOT NULL,
  `ocasion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `occasions`
--

INSERT INTO `occasions` (`id`, `ocasion`, `created_at`, `updated_at`) VALUES
(1, 'Dia de la madre', '2017-03-17 15:23:46', '2017-03-17 15:23:46'),
(2, 'Dia del padre', '2017-03-17 16:48:18', '2017-03-17 16:48:18'),
(3, 'Amor y amistad', '2017-04-01 01:56:40', '2017-04-01 01:56:40'),
(4, 'Dia de la mujer', '2017-04-20 03:41:01', '2017-04-20 03:41:01');

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
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `cart_id` int(10) UNSIGNED DEFAULT NULL,
  `puntos` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`id`, `client_id`, `cart_id`, `puntos`, `created_at`, `updated_at`) VALUES
(1, 16, 183, 125, '2018-07-31 13:07:37', '2018-07-31 13:07:37'),
(2, 16, 183, 125, '2018-07-31 13:08:41', '2018-07-31 13:08:41'),
(3, 16, 183, 125, '2018-07-31 13:09:22', '2018-07-31 13:09:22'),
(4, 16, 183, 125, '2018-07-31 13:10:24', '2018-07-31 13:10:24'),
(5, 16, 172, 50, '2018-07-31 13:11:12', '2018-07-31 13:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `popular_products`
--

CREATE TABLE `popular_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `popular_products`
--

INSERT INTO `popular_products` (`id`, `product_id`, `created_at`, `updated_at`) VALUES
(18, 18, '2017-05-10 03:02:12', '2017-05-10 03:02:12'),
(19, 8, '2017-05-10 03:02:18', '2017-05-10 03:02:18'),
(21, 12, '2017-05-10 03:02:26', '2017-05-10 03:02:26'),
(22, 17, '2017-05-10 03:02:29', '2017-05-10 03:02:29'),
(23, 9, '2017-05-10 03:02:42', '2017-05-10 03:02:42'),
(24, 21, '2017-06-18 20:15:34', '2017-06-18 20:15:34');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` int(10) UNSIGNED NOT NULL,
  `tamano` varchar(191) CHARACTER SET utf8mb4 NOT NULL,
  `precio` int(11) NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `tamano`, `precio`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'Mediano', 50000, 4, '2017-03-17 17:05:08', '2017-03-17 17:05:08'),
(4, 'Unico', 24000, 15, '2017-03-21 02:14:43', '2017-03-21 02:14:43'),
(5, 'Grande', 75000, 4, '2017-03-25 18:04:46', '2017-03-25 18:04:46'),
(7, 'Mediano', 75000, 9, '2017-03-30 16:38:27', '2017-03-30 16:38:27'),
(11, 'Normal', 30000, 16, '2017-03-31 23:54:17', '2017-03-31 23:54:17'),
(12, 'Pequeño', 30000, 18, '2017-04-01 01:52:50', '2017-04-20 04:04:06'),
(13, 'Mediano', 45000, 18, '2017-04-01 01:55:30', '2017-04-20 04:03:32'),
(16, 'Grande', 60000, 18, '2017-04-20 04:04:56', '2017-04-20 04:04:56'),
(26, 'Mediano', 50000, 21, '2017-06-18 20:16:39', '2017-06-18 20:16:39'),
(27, 'Mediano', 50000, 8, '2017-06-18 20:28:18', '2017-06-18 20:28:18');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `nombre`, `descripcion`, `imagen`, `category_id`, `created_at`, `updated_at`) VALUES
(4, 'Florero Rosas', 'La combinación de estilo cla¡sico y presencia sobria de este florero de vidrio, enaltece el amor que expresan las rosas rojas.', '5340arreglo final 13.jpg', 6, '2017-02-13 03:12:58', '2017-04-01 01:48:53'),
(5, 'Rosas Artificiales', 'La combinación de estilo cla¡sico y presencia sobria de este florero de vidrio, enaltece el amor que expresan las rosas rojas.', '42463arreglo final 11.jpg', 6, '2017-02-13 03:15:27', '2018-08-06 19:52:42'),
(6, 'Rosas Varios Colores', 'La combinación de estilo cla¡sico y presencia sobria de este florero de vidrio, enaltece el amor que expresan las rosas rojas.', '2312arreglo final 9.jpg', 6, '2017-02-13 03:16:10', '2018-08-06 19:52:23'),
(7, 'Arreglo rosas naranjas', 'La combinación de estilo cla¡sico y presencia sobria de este florero de vidrio, enaltece el amor que expresan las rosas rojas.', '1258arreglo final 8.jpg', 2, '2017-02-13 03:16:49', '2018-08-06 19:52:12'),
(8, 'Arreglo Exotico', 'La combinación de estilo cla¡sico y presencia sobria de este florero de vidrio, enaltece el amor que expresan las rosas rojas.', '5529arreglo final 2.jpg', 6, '2017-02-13 03:17:35', '2018-08-06 19:51:55'),
(9, 'Rosas Jarron Estampado', 'La combinación de estilo cla¡sico y presencia sobria de este florero de vidrio, enaltece el amor que expresan las rosas rojas.', '15arreglo final 4.jpg', 6, '2017-02-13 03:18:21', '2017-02-13 03:18:21'),
(10, 'Oso de margaritas', 'La combinación de estilo cla¡sico y presencia sobria de este florero de vidrio, enaltece el amor que expresan las rosas rojas.', '4234arreglo final 16.jpg', 5, '2017-02-13 03:19:15', '2018-08-06 19:51:42'),
(11, 'Rosas en Jarron importado', 'La combinación de estilo cla¡sico y presencia sobria de este florero de vidrio, enaltece el amor que expresan las rosas rojas.', '193640arreglo final 13.jpg', 6, '2017-02-13 03:23:48', '2018-08-06 19:51:19'),
(12, 'Rosas en jarrón impresionista', 'La combinación de estilo cla¡sico y presencia sobria de este florero de vidrio, enaltece el amor que expresan las rosas rojas.', '310arreglo final 1.jpg', 6, '2017-02-13 03:24:30', '2018-08-06 19:51:03'),
(13, 'Arreglo Exotico', 'Prueba arreglo florar', '29arreglo final 2.jpg', 2, '2017-03-02 05:46:19', '2017-03-31 23:43:13'),
(14, 'Globo Corazon', 'Globo', '4753globo-de-fiesta-de-feliz-cumpleanos_l.jpg', 7, '2017-03-21 01:41:39', '2018-08-06 19:50:47'),
(15, 'Globo Cumpleaños', 'Globo Cumpleaños', '3553globo-de-fiesta-de-feliz-cumpleanos_l.jpg', 7, '2017-03-21 01:52:49', '2018-08-06 19:50:35'),
(16, 'Chocolates Corazon', 'Chocolates cambioss', '1449chocolates.jpg', 9, '2017-03-21 01:56:09', '2018-08-06 19:50:14'),
(17, 'Arreglo Casual', 'Arreglo con ...', '412arreglo final 9.jpg', 2, '2017-03-31 22:51:51', '2018-08-06 19:50:04'),
(18, 'Arreglo te conquistare', 'Arreglo glorar elaborado con lirios y ...', '5543arreglo final 7.jpg', 11, '2017-04-01 01:52:12', '2018-08-06 19:49:55'),
(19, 'Eres el amor de mi vida', 'La combinación de estilo cla¡sico y presencia sobria de este florero de vidrio, enaltece el amor que expresan las rosas rojas.', '5814arreglo final 5.jpg', 2, '2017-04-20 03:53:55', '2018-08-06 19:49:11'),
(21, 'nuevo', 'Hermoso arreglo floral  especial para la mujer que amas', '483arreglo final 11.jpg', 12, '2017-04-20 15:45:50', '2018-08-06 19:48:49');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `color_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`id`, `product_id`, `color_id`, `created_at`, `updated_at`) VALUES
(12, 7, 1, '2018-08-10 21:47:04', '2018-08-10 21:47:04'),
(13, 13, 1, '2018-08-10 21:47:06', '2018-08-10 21:47:06'),
(14, 17, 1, '2018-08-10 21:47:08', '2018-08-10 21:47:08'),
(15, 19, 1, '2018-08-10 21:47:10', '2018-08-10 21:47:10'),
(16, 10, 1, '2018-08-10 21:47:12', '2018-08-10 21:47:12'),
(17, 4, 1, '2018-08-10 21:47:16', '2018-08-10 21:47:16'),
(18, 5, 1, '2018-08-10 21:47:18', '2018-08-10 21:47:18'),
(19, 6, 1, '2018-08-10 21:47:19', '2018-08-10 21:47:19'),
(20, 8, 1, '2018-08-10 21:47:21', '2018-08-10 21:47:21'),
(21, 9, 1, '2018-08-10 21:47:23', '2018-08-10 21:47:23'),
(22, 11, 1, '2018-08-10 21:47:24', '2018-08-10 21:47:24'),
(23, 12, 1, '2018-08-10 21:47:26', '2018-08-10 21:47:26'),
(24, 18, 1, '2018-08-10 21:47:28', '2018-08-10 21:47:28'),
(25, 7, 6, '2018-08-10 21:47:46', '2018-08-10 21:47:46'),
(26, 13, 6, '2018-08-10 21:47:48', '2018-08-10 21:47:48'),
(27, 17, 6, '2018-08-10 21:47:50', '2018-08-10 21:47:50'),
(28, 19, 6, '2018-08-10 21:47:51', '2018-08-10 21:47:51'),
(29, 10, 6, '2018-08-10 21:47:53', '2018-08-10 21:47:53'),
(30, 4, 6, '2018-08-10 21:47:55', '2018-08-10 21:47:55'),
(31, 5, 6, '2018-08-10 21:47:56', '2018-08-10 21:47:56'),
(32, 6, 6, '2018-08-10 21:47:59', '2018-08-10 21:47:59'),
(33, 8, 6, '2018-08-10 21:48:01', '2018-08-10 21:48:01'),
(34, 9, 6, '2018-08-10 21:48:03', '2018-08-10 21:48:03'),
(35, 11, 6, '2018-08-10 21:48:06', '2018-08-10 21:48:06'),
(36, 12, 6, '2018-08-10 21:48:08', '2018-08-10 21:48:08'),
(37, 18, 6, '2018-08-10 21:48:10', '2018-08-10 21:48:10'),
(38, 21, 6, '2018-08-10 21:48:14', '2018-08-10 21:48:14');

-- --------------------------------------------------------

--
-- Table structure for table `product_occasions`
--

CREATE TABLE `product_occasions` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `occasion_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_occasions`
--

INSERT INTO `product_occasions` (`id`, `product_id`, `occasion_id`, `created_at`, `updated_at`) VALUES
(1, 4, 1, '2017-03-17 17:01:40', '2017-03-17 17:01:40'),
(2, 5, 1, NULL, NULL),
(4, 8, 1, NULL, NULL),
(5, 10, 1, NULL, NULL),
(6, 11, 1, NULL, NULL),
(7, 13, 1, NULL, NULL),
(8, 12, 2, NULL, NULL),
(9, 14, 1, NULL, NULL),
(10, 14, 2, NULL, NULL),
(11, 15, 2, NULL, NULL),
(12, 16, 1, NULL, NULL),
(13, 7, 2, '2017-04-17 22:11:18', '2017-04-17 22:11:18'),
(15, 4, 2, '2017-04-18 21:37:04', '2017-04-18 21:37:04'),
(16, 6, 2, '2017-04-18 21:37:21', '2017-04-18 21:37:21'),
(17, 18, 4, '2017-04-20 03:41:44', '2017-04-20 03:41:44'),
(20, 13, 4, '2017-04-20 03:41:58', '2017-04-20 03:41:58'),
(21, 17, 4, '2017-04-20 03:42:00', '2017-04-20 03:42:00'),
(23, 4, 4, '2017-04-21 07:44:47', '2017-04-21 07:44:47'),
(24, 5, 4, '2017-04-21 07:44:52', '2017-04-21 07:44:52'),
(26, 17, 1, '2017-04-21 07:45:07', '2017-04-21 07:45:07'),
(27, 7, 1, '2017-04-21 07:45:08', '2017-04-21 07:45:08'),
(28, 13, 2, '2017-04-21 07:45:14', '2017-04-21 07:45:14'),
(29, 17, 2, '2017-04-21 07:45:16', '2017-04-21 07:45:16'),
(31, 7, 3, '2017-04-21 07:45:23', '2017-04-21 07:45:23'),
(32, 13, 3, '2017-04-21 07:45:24', '2017-04-21 07:45:24'),
(33, 17, 3, '2017-04-21 07:45:25', '2017-04-21 07:45:25'),
(35, 4, 3, '2017-04-21 07:45:28', '2017-04-21 07:45:28'),
(36, 19, 1, '2018-08-09 16:26:34', '2018-08-09 16:26:34'),
(37, 6, 1, '2018-08-09 16:26:37', '2018-08-09 16:26:37'),
(38, 9, 1, '2018-08-09 16:26:40', '2018-08-09 16:26:40'),
(39, 12, 1, '2018-08-09 16:26:44', '2018-08-09 16:26:44'),
(40, 19, 3, '2018-08-10 20:58:51', '2018-08-10 20:58:51'),
(41, 19, 2, '2018-08-10 21:12:42', '2018-08-10 21:12:42'),
(42, 10, 2, '2018-08-10 21:15:56', '2018-08-10 21:15:56');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `ruta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `ruta`, `nombre`, `descripcion`, `imagen`, `created_at`, `updated_at`) VALUES
(1, '1', 'feliz dia de las madres', 'Lorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ips', '5130banneri03_02.jpg', NULL, '2017-06-18 20:32:51'),
(2, '1', 'feliz dia del amor y la amistad', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus ratione, commodi, hic quas harum aliquam quos nostrum culpa totam quidem rerum!', '5242banneri03_01.jpg', NULL, '2017-06-18 20:33:52'),
(3, '1', 'Cumpleañoss', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus ratione, commodi, hic quas harum aliquam quos nostrum culpa totam quidem reru', '5sanvalentin2016.jpg', NULL, '2017-06-18 20:35:05'),
(4, '2', 'bienvenido', 'Somos la Floristeria más importante de la Ciudad', 'local.jpg', NULL, '2018-08-08 22:00:19'),
(5, '2', 'bievenido', 'Creamos las mejores decoraciones, para momentos especiales', 'tulipanes.jpg', NULL, '2018-08-08 21:30:11'),
(6, '2', 'bienvenido', 'Ahora tus compras las puedes hacer Online', '59pasto.jpg', NULL, '2018-08-08 21:16:23'),
(7, '3', 'EL ÁRBOL ES VIDA, Y EN LOS ARBOLES MEMORALES PERMANECERAN VIVOS SUS RECUERDOS.', 'La perdida de un ser querido siempre marcará nuestras vidas y  dejarán un vacio que nadie podrá ocupar. En muchas ocasiones se decide guardar las cenizas de ese ser querido que se adelanto a la partida y tenerlas siempre cerca; En Floristería Colors pensando siempre en nuestros clientes, ofrece el servicio de árboles memorales, donde las personas pueden apadrinar un arbol bonsai en el cual depositaran las cenizas de sus seres queridos siendo esta una forma diferente de recordarlos.', 'local.jpg', NULL, '2018-08-08 21:59:44'),
(8, '3', 'EL ÁRBOL ES VIDA, Y EN LOS ARBOLES MEMORALES PERMANECERAN VIVOS SUS RECUERDOS.', 'La perdida de un ser querido siempre marcará nuestras vidas y  dejarán un vacio que nadie podrá ocupar. En muchas ocasiones se decide guardar las cenizas de ese ser querido que se adelanto a la partida y tenerlas siempre cerca; En Floristería Colors pensando siempre en nuestros clientes, ofrece el servicio de árboles memorales, donde las personas pueden apadrinar un arbol bonsai en el cual depositaran las cenizas de sus seres queridos siendo esta una forma diferente de recordarlos.', 'tulipanes.jpg', NULL, '2018-08-08 21:58:59'),
(9, '3', 'EL ÁRBOL ES VIDA, Y EN LOS ARBOLES MEMORALES PERMANECERAN VIVOS SUS RECUERDOS.', 'La perdida de un ser querido siempre marcará nuestras vidas y  dejarán un vacio que nadie podrá ocupar. En muchas ocasiones se decide guardar las cenizas de ese ser querido que se adelanto a la partida y tenerlas siempre cerca; En Floristería Colors pensando siempre en nuestros clientes, ofrece el servicio de árboles memorales, donde las personas pueden apadrinar un arbol bonsai en el cual depositaran las cenizas de sus seres queridos siendo esta una forma diferente de recordarlos.', 'pasto.jpg', NULL, '2018-08-08 21:58:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'jorge.innovus@gmail.com', '$2y$10$TuljeSLq7n8KGzxbqyTyCOF0hQhvaaryAujJmqAOCB4TxIkJR5tVW', 'u0BLitCRuyK2jyfEWGsYnFiRCQWHyLf2vOmG4Z9bGe5AVNH7JUDyR3AAyZKI', '2017-03-21 16:33:55', '2017-03-21 16:33:55', 0),
(2, 'admin@admin.com', '$2y$10$8Zgc9fN.IRi6D.d74i4sf.JOkOinSc1yjxhaj1tEQaF3YmE9u4Yhe', 'muq1UeTCbZwlsDZNfVflNvdoeJWjWYUk117Z6nuCG0eAyjSP9emTQeE6dPuP', '2017-03-27 20:35:15', '2017-03-27 20:35:15', 1),
(3, 'janetharcossilva@gmail.com', '$2y$10$PC/5hqL1d1Qp8bkoQEd4CeiFF6fIQOynqa2VzWRVlLHwsM9lnD6bO', NULL, '2017-03-31 22:57:10', '2017-03-31 22:57:10', 0),
(4, 'jer10son@hotmail.com', '$2y$10$dQ0dmUSh3qau/BDHoTfHDuaODUNLID7R4GYmGtarDSmHAQfS45Xie', NULL, '2017-04-04 21:54:27', '2017-04-04 21:54:27', 0),
(5, 'prueba@prueba.com', '$2y$10$0JwkMT9Ce9u7TXl9OBgOFeSptoRvccPlf.nPicrsaeZjt.uYB6M6e', NULL, '2017-04-05 22:58:53', '2017-04-05 22:58:53', 0),
(6, 'jotaefe006@gmail.com', '$2y$10$zunfWrf/f2j2sD9ZSk3jQ.1irvB370scKjL.m0QsM6.P.2oNEBBe6', 'EzvBnotlTdd5jkKJmjhgWSByafRkmKmUI6y7VGpTU5ED6v6dAL4UitDVmaTr', '2017-04-19 02:45:12', '2017-04-19 02:45:12', 0),
(7, 'jotaefe006@gamil.com', '$2y$10$lTY806QWFr1oTnZBL0caOORrlDuVI62DAb0.k/9w//LJFYJi0QEjm', NULL, '2017-04-20 04:07:28', '2017-04-20 04:07:28', 0),
(8, 'mjuaspuezan@hotmail.com', '$2y$10$IMI75QNLaIsmWZC1VrCAR.2M2VmwWpjfG58/.vWvEDKV2LwyGN.ym', NULL, '2017-04-21 01:34:48', '2017-04-21 01:34:48', 0),
(9, 'soylamarina17@gmail.com', '$2y$10$b9NDSAmqG9VFncPYRjE5j.xDfKsLdieVTA3CJpz/2nLPWuEndacfy', NULL, '2017-04-21 21:22:16', '2017-04-21 21:22:16', 0),
(10, 'floristeriacolors@gmail.com', '$2y$10$NROMt4UtdcfpnJ5JnmdDG.qW946LVALdgYJg63CQZFdelll/EIPsa', 'JMcbVk8Uoy04Gu2cw3qHEzJ0NczFVewby4jpAb9bDXbHTklzh2lzpLc33J91', '2017-04-22 03:09:00', '2017-04-22 03:09:00', 0),
(11, 'mjuaspuezan@gmail.com', '$2y$10$9QZ16B6fW80Ckno0XGEXQOJ/dehwh8e8dbRJXtyXWkHEwpp2T2DAe', NULL, '2017-07-30 01:49:03', '2017-07-30 01:49:03', 0),
(12, 'jwilliam19@hotmail.com', '$2y$10$8z11mM4f1A1qTTjNOfIWEO9NF0TKi/sA5GwiFeQ7w6/giw.tMiJhC', NULL, '2017-09-18 11:41:40', '2017-09-18 11:41:40', 0),
(13, 'rasago4@gmail.com', '$2y$10$VyutBpBdthePtLFKsKsPIu14kkCk4LDt48l5vWgdtanAPVDKpckLK', NULL, '2017-10-10 17:18:01', '2017-10-10 17:18:01', 0),
(14, 'nohemi_pialejo@hotmail.es', '$2y$10$vgUXwEfg97U7qQCj9yWYP.7B.tHgl2AgvVD2GYQTQsSkikwlfD2E2', NULL, '2017-12-14 14:48:31', '2017-12-14 14:48:31', 0),
(15, 'stephaniead12@gmail.com', '$2y$10$uGq2Zp41SUeT8Teayw2BVuoWT5Aji5T32HXqW4QAzCgVKEQUwWHX6', NULL, '2018-02-10 11:04:42', '2018-02-10 11:04:42', 0),
(16, 'jotaefe006@hotmail.com', '$2y$10$iz.7u6/FGX4t8e.1N16fdO4nyzsVTcQL5s0uIt8Aiq4rzesuF1FPi', NULL, '2018-02-19 06:25:46', '2018-02-19 06:25:46', 0),
(17, 'elhovi@hotmail.com', '$2y$10$e9BVKwEUZszIKuz2ZHRozeGi5KbbLaCFRglmCvrNOmYg8UKT86XgW', '5WAjZYAA1BsYNUJinr0wv8bdPN9XONNIC47nxj2xOk53TulD9eNJuHJOeDgT', '2018-04-05 17:05:00', '2018-04-05 17:05:00', 0),
(18, 'lisamaria21@hotmail.com', '$2y$10$HosvZm.qDksbl5RIgx2o3.PlZeoxm5/oSGBuoddCeFOOkwR5lKeiS', NULL, '2018-04-06 17:54:15', '2018-04-06 17:54:15', 0),
(19, 'freddydelgado9@hotmail.com', '$2y$10$COWnWCTzH11I6eckH5TcRe.dNOllXGxOoC7XjrqIcYVbroisrKYJi', NULL, '2018-05-11 01:10:03', '2018-05-11 01:10:03', 0),
(20, 'ambar_al@yahoo.es', '$2y$10$Z5zfHRVxapdR.hDewoLXseHdpjCFBFDercGI//uQlT22erOQPWN1u', NULL, '2018-05-15 20:43:24', '2018-05-15 20:43:24', 0),
(22, 'pc_systemjf@hotmail.com', '$2y$10$QQNpkh26RG8Dlxv.DhVkUOWBNnKPvvO5Kzjn6wyT0.kKgd6q8Z1s6', 'LZwACLMvvq95BPaUNLgqERtMx8Yz6V69Z4U9JpdWPYpgWzCo3yBSm9m5BhD8', '2018-07-19 23:57:31', '2018-07-19 23:57:31', 0),
(23, 'superusuario@admin.com', '$2y$10$8Zgc9fN.IRi6D.d74i4sf.JOkOinSc1yjxhaj1tEQaF3YmE9u4Yhe', 'wqX3W6BEWiucfY8IWr15joQkyVwO8hehtvSIe2jAknXbrjWSsbLRYjDwzX9C', '2018-07-27 20:09:58', '2018-07-27 20:09:58', 0);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruta` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `link`, `ruta`, `created_at`, `updated_at`) VALUES
(1, 'https://www.youtube.com/embed/1o0qS9muB0E', 'ayuda', NULL, '2017-04-22 03:18:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `best_seller_products`
--
ALTER TABLE `best_seller_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `best_seller_products_product_id_unique` (`product_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_client_id_foreign` (`client_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_category_type_id_foreign` (`category_type_id`);

--
-- Indexes for table `category_types`
--
ALTER TABLE `category_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clients_user_id_foreign` (`user_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datas`
--
ALTER TABLE `datas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `details_product_id_foreign` (`product_id`),
  ADD KEY `details_cart_id_foreign` (`cart_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `occasions`
--
ALTER TABLE `occasions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `points_client_id_foreign` (`client_id`),
  ADD KEY `points_cart_id_foreign` (`cart_id`);

--
-- Indexes for table `popular_products`
--
ALTER TABLE `popular_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `popular_products_product_id_unique` (`product_id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prices_product_id_foreign` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_occasions`
--
ALTER TABLE `product_occasions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_occasions_product_id_foreign` (`product_id`),
  ADD KEY `product_occasions_occasion_id_foreign` (`occasion_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `best_seller_products`
--
ALTER TABLE `best_seller_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `category_types`
--
ALTER TABLE `category_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `datas`
--
ALTER TABLE `datas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `occasions`
--
ALTER TABLE `occasions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `popular_products`
--
ALTER TABLE `popular_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `product_occasions`
--
ALTER TABLE `product_occasions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `best_seller_products`
--
ALTER TABLE `best_seller_products`
  ADD CONSTRAINT `best_seller_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_category_type_id_foreign` FOREIGN KEY (`category_type_id`) REFERENCES `category_types` (`id`);

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `details_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`),
  ADD CONSTRAINT `details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `points`
--
ALTER TABLE `points`
  ADD CONSTRAINT `points_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`),
  ADD CONSTRAINT `points_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

--
-- Constraints for table `popular_products`
--
ALTER TABLE `popular_products`
  ADD CONSTRAINT `popular_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `prices`
--
ALTER TABLE `prices`
  ADD CONSTRAINT `prices_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `product_occasions`
--
ALTER TABLE `product_occasions`
  ADD CONSTRAINT `product_occasions_occasion_id_foreign` FOREIGN KEY (`occasion_id`) REFERENCES `occasions` (`id`),
  ADD CONSTRAINT `product_occasions_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
