-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 19, 2019 at 06:52 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `svcbmfne_SVCBMF`
--

-- --------------------------------------------------------

--
-- Table structure for table `afiliaciones`
--

CREATE TABLE `afiliaciones` (
  `id` int(11) NOT NULL,
  `nombres` text NOT NULL,
  `apellidos` text NOT NULL,
  `titulo` text NOT NULL,
  `universidad` text NOT NULL,
  `graduacion` text NOT NULL,
  `ciudad` text NOT NULL,
  `estado` text NOT NULL,
  `telefonos` text NOT NULL,
  `email` text NOT NULL,
  `archivo` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `afiliaciones`
--

INSERT INTO `afiliaciones` (`id`, `nombres`, `apellidos`, `titulo`, `universidad`, `graduacion`, `ciudad`, `estado`, `telefonos`, `email`, `archivo`, `created_at`) VALUES
(1, 'Pedro José', 'Jiménez Lucena', 'Especialista en Cirugía Bucal y Maxilofacial', 'Universidad de Carabobo', '2017', 'Maracay', 'Aragua', '123456', 'pedrojjimenezl@gmail.com', 'Documento.pdf', '0000-00-00 00:00:00'),
(2, 'Malcolm', 'Cordova', 'acs', 'ads', 'asd', 'caracas', 'Distrito Federal', '04241874370', 'mercadocreativo@gmail.com', 'texto_galeria_Gala.pdf', '2019-12-19 17:31:52'),
(3, 'assas', 'sasad', 'sadsass', 'sasaas', 'asassa', 'saas', 'ass', 'sasa', 'asasas', 'CotizacionWebconBlog.pdf', '2019-12-19 17:37:33'),
(4, 'sadasd', 'dasasf', 'sfdfsd', 'fdsadf', 'sdfsdad', 'fdsfs', 'sfsd', 'dfsdf', 'sfdfd', 'Chuleta-SEO-2_1.pdf', '2019-12-19 18:14:05');

-- --------------------------------------------------------

--
-- Table structure for table `bancuadrados`
--

CREATE TABLE `bancuadrados` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `target` varchar(255) DEFAULT NULL,
  `enlace` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bancuadrados`
--

INSERT INTO `bancuadrados` (`id`, `image`, `titulo`, `target`, `enlace`, `is_active`, `created_at`) VALUES
(2, 'Instagram-51.jpg', 'titulo', '_blank', 'sda', 1, '2019-12-18 01:58:15'),
(3, 'Lossimpsons-750x420.jpg', 'titulo', '_blank', 'enlace', 1, '2019-12-18 02:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `banhorizontals`
--

CREATE TABLE `banhorizontals` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `target` varchar(255) DEFAULT NULL,
  `enlace` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banhorizontals`
--

INSERT INTO `banhorizontals` (`id`, `image`, `titulo`, `target`, `enlace`, `is_active`, `created_at`) VALUES
(1, 'mia1-750x420.jpg', 'titulo', '_self', 'enlace', 0, '2018-10-30 10:14:15'),
(2, '5bcceb9bc9dbc-750x4202.jpeg', 'titulo', '_self', 'enlace', 1, '2019-12-18 02:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `banverticals`
--

CREATE TABLE `banverticals` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `target` varchar(255) DEFAULT NULL,
  `enlace` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banverticals`
--

INSERT INTO `banverticals` (`id`, `image`, `titulo`, `target`, `enlace`, `is_active`, `created_at`) VALUES
(3, 'rihanna-super-bowl.jpg', 'titulo', '_self', 'enlace', 1, '2019-12-18 02:29:19'),
(4, 'Lossimpsons-750x420.jpg', 'da', '_self', 'dsa', 1, '2019-12-18 02:29:35'),
(5, '1502227838_136767_1502227940_noticia_normal-750x420.jpg', 'asd', '_blank', 'ad', 1, '2019-12-19 03:53:33');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `user_id`, `category_id`, `description`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(1, 'Sample blog post 1', 1, 1, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'noticia_normal-1132x670-750x4201.jpg', 1, 1, '2018-10-27 04:12:09'),
(2, 'Sample blog post 2', 1, 1, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'img2.jpg', 1, 1, '2018-10-27 06:12:09'),
(3, 'Sample blog post 3', 1, 2, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'img3.jpg', 0, 1, '2018-10-27 07:12:09'),
(4, 'Sample blog post 4', 1, 2, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'img4.jpg', 0, 1, '2018-10-27 09:12:09'),
(5, 'Sample blog post 5', 1, 7, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'img5.jpg', 1, 1, '2018-10-27 10:12:09'),
(6, 'Sample blog post 6', 1, 7, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'mia1-750x4202.jpg', 0, 1, '2018-10-27 12:12:09'),
(7, 'ad', 1, 0, '<p>asdasds</p>', '1502227838_136767_1502227940_noticia_normal-750x4202.jpg', 1, 1, '2019-12-19 03:38:06');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'Technology'),
(2, 'Design'),
(3, 'Culture'),
(4, 'Business'),
(5, 'Politics'),
(6, 'Opinion'),
(7, 'Science'),
(8, 'Health'),
(9, 'Style'),
(10, 'Travel');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `message` text,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`) VALUES
(1, 'Ujjwal Gaur', 'demoang@rsgitech.com', '9999999999', 'This is test message', '2018-10-30 10:14:15');

-- --------------------------------------------------------

--
-- Table structure for table `directorios`
--

CREATE TABLE `directorios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `especialidad` varchar(255) DEFAULT NULL,
  `universidad` varchar(255) DEFAULT NULL,
  `ano` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `ciudad` varchar(255) NOT NULL,
  `telefonos` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `directorios`
--

INSERT INTO `directorios` (`id`, `nombre`, `especialidad`, `universidad`, `ano`, `website`, `email`, `direccion`, `estado`, `ciudad`, `telefonos`, `facebook`, `instagram`, `twitter`, `linkedin`, `image`, `created_at`) VALUES
(2, 'Malcolm Cordova', 'as', 'das', 'as', 'ads', 'mercadocreativo@gmail.com', '<p>adsasd</p>', 'Distrito Federal', 'caracas', '04241874370', 'asd', 'asd', 'das', 'ads', 'rihanna-super-bowl.jpg', '2019-12-18 00:41:54'),
(3, 'dsffdf', 'fsddfs', 'sfd', 'fsd', 'sfd', 'sdf', '<p>sdf</p>', 'sfd', '', 'fsd', 'sfd', 'fsd', 'fsd', 'fsd', 'logo2.png', '2019-12-18 00:45:27'),
(4, 'prueeeba', 'prueeeba', 'prueeeba', 'prueeeba', 'prueeeba', 'prueeeba', '<p>prueeeba</p>', 'prueeeba', '', 'prueeeba', 'prueeeba', 'prueeeba', 'prueeeba', 'prueeeba', 'logo21.png', '2019-12-18 00:47:36');

-- --------------------------------------------------------

--
-- Stand-in structure for view `doctores`
-- (See below for the actual view)
--
CREATE TABLE `doctores` (
`id` int(11)
,`nombre` varchar(255)
,`especialidad` varchar(255)
,`universidad` varchar(255)
,`ano` varchar(255)
,`website` varchar(255)
,`email` varchar(255)
,`direccion` varchar(255)
,`estado` varchar(255)
,`ciudad` varchar(255)
,`telefonos` varchar(255)
,`facebook` varchar(255)
,`instagram` varchar(255)
,`twitter` varchar(255)
,`linkedin` varchar(255)
,`image` varchar(255)
,`created_at` datetime
);

-- --------------------------------------------------------

--
-- Table structure for table `documentos`
--

CREATE TABLE `documentos` (
  `id` int(11) NOT NULL,
  `archivo` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `documentos`
--

INSERT INTO `documentos` (`id`, `archivo`, `titulo`, `created_at`) VALUES
(1, 'archivo', 'titulo', '2018-10-30 10:14:15');

-- --------------------------------------------------------

--
-- Table structure for table `galerias`
--

CREATE TABLE `galerias` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galerias`
--

INSERT INTO `galerias` (`id`, `image`, `titulo`, `created_at`) VALUES
(1, 'Lossimpsons-750x420.jpg', 'slug', '2018-10-30 10:14:15'),
(2, 'rihanna-super-bowl.jpg', 'rihaja', '2019-12-18 02:55:49'),
(3, '5bcceb9bc9dbc-750x4202.jpeg', 'yupiii', '2019-12-19 03:34:01');

-- --------------------------------------------------------

--
-- Table structure for table `revistas`
--

CREATE TABLE `revistas` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `archivo` varchar(255) DEFAULT NULL,
  `volumen` varchar(255) DEFAULT NULL,
  `numero` varchar(255) DEFAULT NULL,
  `fecha` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `revistas`
--

INSERT INTO `revistas` (`id`, `image`, `archivo`, `volumen`, `numero`, `fecha`, `created_at`) VALUES
(1, '78884.jpg', NULL, '1', '2', '24/08/2000', '2018-10-30 10:14:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `image` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `token`, `is_active`, `created_at`, `image`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Malcolm', 'Cordova', 'a1aed1a77c0916c43a4a67afe49af265', 1, '2018-10-27 05:25:13', 'logo1.png', 'admin');

-- --------------------------------------------------------

--
-- Structure for view `doctores`
--
DROP TABLE IF EXISTS `doctores`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `svcbmfne_svcbmf`.`doctores`  AS  select `svcbmfne_svcbmf`.`directorios`.`id` AS `id`,`svcbmfne_svcbmf`.`directorios`.`nombre` AS `nombre`,`svcbmfne_svcbmf`.`directorios`.`especialidad` AS `especialidad`,`svcbmfne_svcbmf`.`directorios`.`universidad` AS `universidad`,`svcbmfne_svcbmf`.`directorios`.`ano` AS `ano`,`svcbmfne_svcbmf`.`directorios`.`website` AS `website`,`svcbmfne_svcbmf`.`directorios`.`email` AS `email`,`svcbmfne_svcbmf`.`directorios`.`direccion` AS `direccion`,`svcbmfne_svcbmf`.`directorios`.`estado` AS `estado`,`svcbmfne_svcbmf`.`directorios`.`ciudad` AS `ciudad`,`svcbmfne_svcbmf`.`directorios`.`telefonos` AS `telefonos`,`svcbmfne_svcbmf`.`directorios`.`facebook` AS `facebook`,`svcbmfne_svcbmf`.`directorios`.`instagram` AS `instagram`,`svcbmfne_svcbmf`.`directorios`.`twitter` AS `twitter`,`svcbmfne_svcbmf`.`directorios`.`linkedin` AS `linkedin`,`svcbmfne_svcbmf`.`directorios`.`image` AS `image`,`svcbmfne_svcbmf`.`directorios`.`created_at` AS `created_at` from `svcbmfne_svcbmf`.`directorios` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `afiliaciones`
--
ALTER TABLE `afiliaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bancuadrados`
--
ALTER TABLE `bancuadrados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banhorizontals`
--
ALTER TABLE `banhorizontals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banverticals`
--
ALTER TABLE `banverticals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `directorios`
--
ALTER TABLE `directorios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galerias`
--
ALTER TABLE `galerias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `revistas`
--
ALTER TABLE `revistas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `afiliaciones`
--
ALTER TABLE `afiliaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bancuadrados`
--
ALTER TABLE `bancuadrados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banhorizontals`
--
ALTER TABLE `banhorizontals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banverticals`
--
ALTER TABLE `banverticals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `directorios`
--
ALTER TABLE `directorios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galerias`
--
ALTER TABLE `galerias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `revistas`
--
ALTER TABLE `revistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
