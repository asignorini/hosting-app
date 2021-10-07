-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 07-10-2021 a las 15:40:54
-- Versión del servidor: 5.7.33
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hosting`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

CREATE TABLE `articles` (
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `article_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_text` varchar(2500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article_image_alt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`article_id`, `created_at`, `updated_at`, `article_title`, `article_description`, `article_text`, `article_image`, `article_image_alt`, `category_id`, `user_id`) VALUES
(12, '2021-10-07 17:59:06', '2021-10-07 17:59:06', 'Nombre de dominio web ¿Qué es y cómo elegir el tuyo?', 'Cuando arrancamos con un proyecto web para nuestro negocio o marca una de las decisiones más importantes a tomar es sin lugar a dudas la elección de un nombre de dominio web.', '¿Qué es un nombre de dominio web?\r\nAntes de nada vamos a contarte qué es para que tengas más claro qué es lo que necesitas y vas a adquirir para tu proyecto.\r\n\r\nUn dominio en sí mismo no es más que el nombre que le das a tu proyecto en internet, principalmente a tu sitio web (aunque también a emails).\r\n\r\nLa anatomía de un dominio de internet se compone de:\r\n\r\nmidominio.com > nombre\r\nmidominio.com > extensión\r\nTécnicamente un dominio es la asignación de un nombre a las DNS de un nodo de IPs bajo las que se conectan en la red y tienen acceso a tu web todo tipo de equipos, máquinas y sistemas.\r\n\r\nPor tanto, un nombre de dominio es el nombre específico y único para todo un sitio web, de tal modo que cualquier página lo contiene en su URL.\r\n\r\nAl mismo tiempo nos sirve para tener acceso en internet a diferentes tipos de contenido como puede ser el caso de un post de un blog como este que lees, una landing page, una página de venta de un producto de un ecommerce o un email corporativo.\r\n\r\nEstos son algunos algunos ejemplos de su utilización:\r\n\r\nhttps://midominio.com > URL de la home de una web\r\nhttps://midominio.com/post > URL del post de un blog\r\nhttps://landing-page.midominio.com > URL de una landing page mediante subdominio (hablaremos más adelante)\r\nmicorreo@midominio.com', '1633618746.jpg', 'dominio web', 3, 1),
(13, '2021-10-07 18:04:31', '2021-10-07 18:04:31', '¿Cómo optimizar imágenes para web?', 'Da igual el tipo de web que tengas, es un hecho que cada vez utilizamos y subimos más imágenes a nuestras webs, es una tendencia al alza imparable.', '¿Cuándo se considera que una imagen está optimizada?\r\nUna imagen optimizada es esa que tanto su peso como su tamaño son los necesarios y correctos para ser mostrada en diversos tamaños de pantalla de diferentes dispositivos.\r\n\r\nO lo que es lo mismo, una imagen optimizada debe mostrarse correctamente en cualquier tipo de dispositivo.\r\n\r\nLa forma de optimizar las imágenes se basa en dos tareas clave a realizar:\r\n\r\nReducción de su tamaño: ajustar su tamaño al máximo que se va a mostrar pantalla\r\nReducción de su peso: comprimir el archivo sin que sea perceptible una pérdida de calidad en su visualización\r\nTenemos que tener en cuenta que también afectan al peso los formatos del propio archivo.\r\n\r\nLos más comunes en web son los siguientes:\r\n\r\njpg\r\npng\r\ngif\r\nwebp\r\nsvg\r\nPor otro lado tenemos que tener en cuenta que este proceso es totalmente relativo dependiendo del propio uso que vayamos a hacer de las imágenes y dónde se muestren.\r\n\r\nPor ejemplo, no es el mismo uso el de una imagen que vamos a utilizar en el slider del encabezado principal de una web a ancho completo que el de la imagen interna de un post como este mismo que estás leyendo ahora mismo.\r\n\r\nEvidentemente, la imagen del slider debe tener un mayor tamaño para que se muestre correctamente y por tanto también será inevitable que pese más.\r\n\r\nSi la imagen de ese slider tiene el ancho máximo al que se va a mostrar, tiene un formato apropiado, y se ha comprimido al máximo posible su peso, la tendremos optimizada.\r\n\r\nEn cambio, una imagen como la del post si no la reducimos de tamaño al ancho del propio blog en el que se muestra, y esta es mayor, aunque la comprimamos y el peso final sea muy inferior a la imagen del slider, esa imagen no va a estar optimizada.\r\n\r\nPor tanto, no se trata de obtener el menor peso posible en todo caso.', '1633619071.jpg', 'optimizacion de imagenes', 1, 1),
(14, '2021-10-07 18:08:04', '2021-10-07 18:08:04', 'Forzar https:// desde cPanel', 'Hoy traemos la forma mas sencilla de pasar todo nuestro tráfico de nuestro dominio forzando a correr por https://', 'Cuando realizamos una instalación de WordPress, si lo hacemos con Softaculous (incluido en todos nuestros planes de Hosting) siempre podemos seleccionar el protocolo seguro https:// , de hecho siempre va marcado por defecto, aunque siempre puede elegir instalar con o sin 3 W, pero siempre bajo protocolo seguro https://.\r\n\r\nUna vez tenemos instalado nuestro WordPress bajo protocolo seguro https://, iremos a nuestro cPanel, a la sección de Dominios y haremos clic en el icono de Dominios.\r\n\r\nPanel de dominios\r\nUna vez dentro del panel de Dominios veremos listados los dominios y si el forzado por https:// está activado, normalmente está desactivado o apagado como podemos ver en la imagen siguiente.\r\n\r\nPanel para activar https\r\nSimplemente tenemos que hacer clic en el activador de Apagado para que directamente se quede activado y encendido la redirección por https:// para toda nuestra web.\r\n\r\nhttps activado\r\nDe esta forma tan sencilla y rápida, habremos forzado desde cPanel que nuestra web ahora corra por protocolo seguro https://.', '1633619284.png', 'cpanel', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`category_id`, `created_at`, `updated_at`, `category_name`) VALUES
(1, NULL, NULL, 'Tutoriales'),
(2, NULL, NULL, 'Servidores'),
(3, NULL, NULL, 'Informacion'),
(4, NULL, NULL, 'Tecnologia'),
(5, NULL, NULL, 'Hosting');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2021_09_20_163552_create_categories_table', 1),
(5, '2021_09_20_170241_create_articles_table', 1),
(6, '2021_10_05_221626_create_users_table', 1),
(7, '2021_10_05_232418_add_category_id_column_to_articles_table', 1),
(8, '2021_10_05_232938_add_user_id_column_to_articles_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'alessandro.signorini@davinci.edu.ar', '$2y$10$67Ap1.45a8Qgwlw4u1rT1.U/PJpflFoAMEdupdTvaP0Xe.8cvzdDS', NULL, '2021-10-07 02:08:28', '2021-10-07 02:08:28'),
(2, 'otro@usuario.com', '$2y$10$gpzk79mf5aVdaxHn4Wr3ZOltdIBtoDzBs9PPEf4k.QUo1XKatXk4C', NULL, '2021-10-07 02:08:28', '2021-10-07 02:08:28');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `articles_category_id_foreign` (`category_id`),
  ADD KEY `articles_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`),
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
