-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 17, 2019 at 10:25 PM
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `afiliaciones`
--

INSERT INTO `afiliaciones` (`id`, `nombres`, `apellidos`, `titulo`, `universidad`, `graduacion`, `ciudad`, `estado`, `telefonos`, `email`, `archivo`) VALUES
(6, 'Pedro JosÃ© ', 'JimÃ©nez Lucena', 'Especialista en Cirugí Bucal y Maxilofacial', 'Universidad de Carabobo', '2017', 'Maracay', 'Aragua', '0414.470.24.94', 'pedrojjimenezl@gmail.com', 'Requisitos para optar a ser Miembro de la SVCBMF0001.pdf'),
(7, 'Elena Victoria', 'Mujica Molleja', 'Cirugia Bucal ', 'Universidad Central de Venezuela', '2013', 'caracas', 'dtto Capital ', '02126053793', 'elenavmm8@gmail.com', 'RECAUDOS SVCBM.pdf'),
(8, 'Ksenia ', 'Basov Jakovlev', 'Especialista en cirugí bucal y maxilofacial', 'Carabobo', '2017', 'Valencia', 'Carabobo', '4144793197', 'kisabas@gmail.com', 'sociedad venezolana.pdf'),
(9, 'EFRAÃN JOSÃ‰', 'GARCÃA GONÃLEZ', 'CIRUJANO BUCAL Y MAXILOFACIAL', 'UNIVERSIDAD DE CARABOBO', '2017', 'VALENCIA', 'CARABOBO', '04143463027', 'OD.EFRAIN.GARCIA@HOTMAIL.COM', 'SINTESIS CURRICULAR (1 hoja).pdf'),
(10, 'EFRAÃN JOSÃ‰', 'GARCÃA GONÃLEZ', 'CIRUJANO BUCAL Y MAXILOFACIAL', 'UNIVERSIDAD DE CARABOBO', '2017', 'VALENCIA', 'CARABOBO', '04143463027', 'OD.EFRAIN.GARCIA@HOTMAIL.COM', 'RECAUDOS DR. EFRAIN GARCIA .pdf'),
(11, 'EFRAÃN JOSÃ‰', 'GARCÃA GONÃLEZ', 'CIRUJANO BUCAL Y MAXILOFACIAL', 'UNIVERSIDAD DE CARABOBO', '2017', 'VALENCIA', 'CARABOBO', '04143463027', 'OD.EFRAIN.GARCIA@HOTMAIL.COM', 'RECAUDOS DR EFRAIN GARCIA.pdf'),
(12, 'EFRAÃN JOSÃ‰', 'GARCÃA GONÃLEZ', 'CIRUJANO BUCAL Y MAXILOFACIAL', 'UNIVERSIDAD DE CARABOBO', '2017', 'VALENCIA', 'CARABOBO', '04143463027', 'OD.EFRAIN.GARCIA@HOTMAIL.COM', 'RECAUDOS DR EFRAIN GARCIA.pdf'),
(13, 'EFRAÃN JOSÃ‰', 'GARCÃA GONÃLEZ', 'CIRUJANO BUCAL Y MAXILOFACIAL', 'UNIVERSIDAD DE CARABOBO', '2017', 'VALENCIA', 'CARABOBO', '04143463027', 'OD.EFRAIN.GARCIA@HOTMAIL.COM', 'RECAUDOS DR EFRAIN GARCIA.pdf'),
(14, 'nelcar rafael', 'zerpa adrian', 'cirujano bucal y maxilofacial', 'universidad de carabobo', '2016', 'valencia', 'carabobo', '4249156049', 'nelcarz84@gmail.com', 'resumen Curricular nelcar zerpa 1 pagina.pdf'),
(15, 'Jorge luis', 'Borges Asuaje', 'Cirugí Bucal y Maxilofacial', 'Ciudad Hospitalaria Dr. Enrique Tejera. ', '2016', 'Valencia', 'Carabobo', '4144164803', 'jorgelborgesa@gmail.com', 'requisitos para la sociedad.pdf'),
(16, 'JORGE', 'BORGES', '', '', '2016', 'Valencia', 'Carabobo', '4144164803', 'jorgelborgesa@gmail.com', 'requisitos para la sociedad.pdf'),
(17, 'ROXELYN MERCEDES', 'CRISTALINO ROJANO', 'ODONTOLOGO CIRUJANO BUCOMAXILOFACIAL', 'IVSS HOSPITAL DR DOMINGO LUCIANI', '2018', 'CARACAS', 'MIRANDA', '04246277417', 'od.roxelyncristalino@hotmail.com', 'DOCUMENTOS PARA LA SOCIEDAD 2018.pdf'),
(18, 'JORGE', 'BORGES', 'Cirugí Bucal y Maxilofacial', 'Ciudad Hospitalaria Dr. Enrique Tejera. ', '2016', 'Valencia', 'Carabobo', '4144164803', 'jorgelborgesa@gmail.com', 'requisitos para la sociedad.pdf'),
(19, 'JORGE', 'BORGES', 'Cirugí Bucal y Maxilofacial', 'Ciudad Hospitalaria Dr. Enrique Tejera. ', '2016', 'Valencia', 'Carabobo', '4144164803', 'jorgelborgesa@gmail.com', '2.pdf'),
(20, 'JORGE', 'BORGES', 'Cirugí Bucal y Maxilofacial', 'Ciudad Hospitalaria Dr. Enrique Tejera. ', '2016', 'Valencia', 'Carabobo', '', 'jorgelborgesa@gmail.com', 'requisitos para la sociedad 2.pdf'),
(21, 'JORGE', 'BORGES', 'Cirugí Bucal y Maxilofacial', 'Ciudad Hospitalaria Dr. Enrique Tejera. ', '2016', 'Valencia', 'Carabobo', '4144164803', 'jorgelborgesa@gmail.com', 'requisitos para la sociedaddd.pdf'),
(22, 'JORGE', 'BORGES', 'Cirugí Bucal y Maxilofacial', 'Ciudad Hospitalaria Dr. Enrique Tejera. ', '2016', 'Valencia', 'Carabobo', '4144164803', 'jorgelborgesa@gmail.com', 'requisitos para la sociedaddd.pdf'),
(23, 'JORGE', 'BORGES', 'Cirugí Bucal y Maxilofacial', 'Ciudad Hospitalaria Dr. Enrique Tejera. ', '2016', 'Valencia', 'Carabobo', '4144164803', 'jorgelborgesa@gmail.com', 'requisitos para la sociedaddd.pdf'),
(24, 'Anllert Irais', 'Ruiz Rangel', 'Odontóloga', 'UNERG', '2012', 'Caracas', 'Miranda', '04249142014', 'anllert.11@gmail.com', 'miembroadherente --ANLLERT RUIZ--.pdf'),
(25, 'Anllert Irais', 'Ruiz Rangel', 'Odontóloga', 'UNERG', '2012', 'Caracas', 'Miranda', '04249142014', 'anllert.11@gmail.com', 'miembroadherente --ANLLERT RUIZ--.pdf'),
(26, 'Laura Angelica', 'RamÃ­rez Alarcon', 'Cirujano Bucal ', 'La Universidad del Zulia', '2017', 'Maracaibo', 'Zulia', '0254.5610761/0416.1625640', 'lauraangelicaramirezalarcon@gmail.com', 'Titulo Laura Especialista.pdf'),
(27, 'Liseth Nathalie', 'Chacón Alvarez', 'Odontólogo', 'Universidad Santa Maria', '2017', 'Gran Caracas', 'Miranda', '0414.759.59.16', 'liseth.chacon30@gmail.com', 'Curriculum actualizado el 22-4 (Resumen).pdf'),
(28, 'Rossana Verónica', 'Rosas Nieves', 'Odontologí', 'Universidad Central de Venezuela', '2016', 'Caracas', 'Caracas', '04264860166', 'odrossanarosas@hotmail.com', 'titulo rossana odontologia.pdf'),
(29, 'Rossana Verónica', 'Rosas Nieves', 'Odontologí', 'Universidad Central de Venezuela', '2016', 'Caracas', 'Caracas', '04264860166', 'odrossanarosas@hotmail.com', 'titulo rossana odontologia.pdf'),
(30, 'Rossana Verónica', 'Rosas Nieves', 'Odontologí', 'Universidad Central de Venezuela', '2016', 'Caracas', 'Caracas', '04264860166', 'odrossanarosas@hotmail.com', 'Documento.pdf'),
(31, 'Rossana Verónica', 'Rosas Nieves', 'Odontologí', 'Universidad Central de Venezuela', '2016', 'Caracas', 'Caracas', '04264860166', 'odrossanarosas@hotmail.com', 'Documento.pdf'),
(32, 'Braulio Heriberto', 'López ArÃ©valo', 'Especialista en Cirugí Bucal y Maxilofacial', 'Universidad de Carabobo', '2017', 'Valencia', 'Carabobo', '04144169994', 'bhlabs7@gmail.com', 'Recaudos afiliación SVCBMF Braulio López.pdf'),
(33, 'Braulio Heriberto', 'López ArÃ©valo', 'Especialista en Cirugí Bucal y Maxilofacial', 'Universidad de Carabobo', '2017', 'Valencia', 'Carabobo', '04144169994', 'bhlabs7@gmail.com', 'Recaudos afiliación SVCBMF Braulio López.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `bancuadrados`
--

CREATE TABLE `bancuadrados` (
  `id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enlace` text COLLATE utf8_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bancuadrados`
--

INSERT INTO `bancuadrados` (`id`, `user_id`, `image`,  `enlace`, `target`, `titulo`, `is_active`) VALUES
(1, '1','bannerC.jpg', 'contacto', '_self', 'svcbmf', 1),
(2, '1','home_adsCuadrado.jpg',  'directorio', '_self', 'prueba', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banhorizontals`
--

CREATE TABLE `banhorizontals` (
  `id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enlace` text COLLATE utf8_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banhorizontals`
--

INSERT INTO `banhorizontals` (`id`,`user_id`, `image`, `enlace`, `target`, `titulo`, `is_active`) VALUES
(0, '1','', 'ssssss', '_blank', 'sss', 1),
(1,'1', 'bannerlargo1.jpg', 'junta-directiva-nacional', '_self', 'Junta directiva nacional svcbsmf', 1),
(2,'1', 'bannerlargo2.jpg', 'directorio', '_self', 'directorio svcbmf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banverticals`
--

CREATE TABLE `banverticals` (
  `id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enlace` text COLLATE utf8_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banverticals`
--

INSERT INTO `banverticals` (`id`, `user_id`, `image`, `enlace`, `target`, `titulo`, `is_active`) VALUES
(1, '1', 'bannerR.jpg', 'contacto', '_self', 'prueba2', 1),
(2,  '1', 'home-06.jpg', 'directorio', '_self', 'directorio de la pagina', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seo_title` varchar(255) NOT NULL,
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

INSERT INTO `blogs` (`id`, `title`, `seo_title`, `user_id`, `category_id`, `description`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(1, 'Sample blog post 1', 'sample-blog-post-1', 1, 1, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'img1.jpg', 1, 1, '2018-10-27 04:12:09'),
(2, 'Sample blog post 2', 'sample-blog-post-2', 1, 1, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'img2.jpg', 1, 1, '2018-10-27 06:12:09'),
(3, 'Sample blog post 3', 'sample-blog-post-3', 1, 2, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'img3.jpg', 0, 1, '2018-10-27 07:12:09'),
(4, 'Sample blog post 4', 'sample-blog-post-4', 1, 2, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'img4.jpg', 0, 1, '2018-10-27 09:12:09'),
(5, 'Sample blog post 5', 'sample-blog-post-5', 1, 7, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'img5.jpg', 1, 1, '2018-10-27 10:12:09'),
(7, 'prueba', '', 1, 0, 'pruebaaa', 'bannerC.jpg', 0, 1, '2019-12-13 16:35:49'),
(8, 'prueba', '', 1, 0, 'pruebaaa', 'bannerC1.jpg', 0, 1, '2019-12-13 16:35:53'),
(9, 'prueba', '', 1, 0, 'pruebaaa', 'bannerC2.jpg', 0, 1, '2019-12-13 16:35:59'),
(10, 'prueb222e§', '', 1, 0, 'asddas', 'home_adsCuadrado.jpg', 0, 1, '2019-12-13 16:37:16');

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
(1, 'Facial'),
(2, 'Wax'),
(3, 'Permanent'),
(4, 'Body'),
(5, 'Makeup'),
(6, 'Fibroblast'),
(7, 'Special');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `ciudad` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `message` text,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `ciudad`, `email`, `phone`, `message`, `created_at`) VALUES
(1, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '9999999999', 'This is test message', '2018-10-30 10:14:15'),
(2, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '4241874370', 'prueba', '2019-07-25 22:57:00'),
(3, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '4241874370', 'Prueba desde web', '2019-08-28 19:00:13'),
(4, 'Janny', 'Acosta', 'Jannyacosta@live.com', '7862602756', 'Hola somos una amiga y yo, estamos interesadas en el tratamiento para las ojeras. Agradecería se pusieran en contacto conmigo. Gracias ', '2019-09-05 20:03:11'),
(5, 'Brian', 'Williams', 'Brian@thechatinc.org', '5555555555', 'Hi,\n\nThis is Brian Williams from The Chats Inc. I have visited your website and noticed good traffic. We can convert that traffic into you client lead by equipping your website with 24-7 live chat service with live attendant availability which will increase your website conversion up to 35% and generate 3 times more leads from your visitor traffic, ensuring you don’t lose a single client visiting your website.\n\nPer Lead billing – No setup charges- Free non-qualified chats.\n\nYou can test the potential with $300 worth of free lead credit and continue if you see the results.\n\n\nIf you would like to explore this further - please reply by email and we can take it from there!\n\n\nBest,\nBrian Williams\nClient Relations\nbrian@thechatinc.org\nwww.thechatinc.org', '2019-09-20 21:05:32'),
(6, 'Scott', 'Jones', 'scott@livecallreps.org', '0000000000', 'Do You Know The Impact Missing One Business Call? Can You Imagine the number of New Customers You\'d Get if you were to stay active on your business Phone 24/7/365?\nWe At LiveCallReps.org Enable Businesses To Ensure They Never Ever Miss a Business Call Again!\nOur U.S Based Agents virtually attend your phone & professionally engage each caller in a conversation.  \nWould you like to sign up for free trial of one week?\n\nBest,\nScott Jones\nscott@livecallreps.org   \nwww.livecallreps.org', '2019-09-23 17:26:08'),
(7, 'Susette ', 'Bibi', 'susettebibi@hotmail.com', '5105868075', 'Hola, tienen clinicas que hagan Fibroblas cerca de San Francisco,CA.\nGracias ', '2019-09-24 16:34:20'),
(8, 'Aurisnelly ', 'Ramos ', 'Aramos2122@yahoo.com', '954-662-8078', 'Hi! \n\nI was interested in the fiberblast for upper lip. I was wondering how long is the recovery for this? And also, I see under the specials there is one for grand opening or first time. Is that still valid?\n\nI look forward to hearing from you,\n( text or Email  preferred)\n\nAurisnelly Ramos \n964-662-8078', '2019-10-30 21:55:28'),
(9, 'Malcolm Cordova', 'caracas', 'mercadocreativo@gmail.com', '04241874370', 'esto es una prueba', '2019-12-10 20:37:08');

-- --------------------------------------------------------

--
-- Table structure for table `cprin`
--

CREATE TABLE `cprin` (
  `id` int(11) NOT NULL,
  `imagen` text COLLATE utf8_unicode_ci NOT NULL,
  `enlace` text COLLATE utf8_unicode_ci NOT NULL,
  `orden` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cprin2`
--

CREATE TABLE `cprin2` (
  `id` int(11) NOT NULL,
  `imagen` text COLLATE utf8_unicode_ci NOT NULL,
  `enlace` text COLLATE utf8_unicode_ci NOT NULL,
  `orden` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cprin3`
--

CREATE TABLE `cprin3` (
  `id` int(11) NOT NULL,
  `imagen` text COLLATE utf8_unicode_ci NOT NULL,
  `enlace` text COLLATE utf8_unicode_ci NOT NULL,
  `orden` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cprin3`
--

INSERT INTO `cprin3` (`id`, `imagen`, `enlace`, `orden`) VALUES
(2, 'bannerlargo2.jpg', '2', 'directorios');

-- --------------------------------------------------------

--
-- Table structure for table `directorios`
--

CREATE TABLE `directorios` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `especialidad` text NOT NULL,
  `universidad` text NOT NULL,
  `ano` text NOT NULL,
  `website` text NOT NULL,
  `email` text NOT NULL,
  `direccion` text NOT NULL,
  `estado` text NOT NULL,
  `telefonos` text NOT NULL,
  `facebook` text NOT NULL,
  `instagram` varchar(255) DEFAULT 'No Posee',
  `twitter` varchar(255) DEFAULT 'No Posee',
  `linkedin` varchar(255) DEFAULT 'No Posee',
  `image` varchar(255) DEFAULT 'logo.png'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `directorios`
--

INSERT INTO `directorios` (`id`, `nombre`, `especialidad`, `universidad`, `ano`, `website`, `email`, `direccion`, `estado`, `telefonos`, `facebook`, `instagram`, `twitter`, `linkedin`, `image`) VALUES
(1, 'Abecasis Rivers, Paul Sebastian', 'Cirugía Bucomaxilofacial', 'Universidad Catolica Argentina Santa Maria de los Buenos Aires. Argentin', '2008', 'no posee', 'abecasispaul@gmail.com', 'Av. Francisco Solano, Edif. Galerias Bolivar, Torre B, Piso 3, Ofic: 36-B. Grupo Dental Acuario, Urb. Sabana Grande. Caracas -1050-', 'Distrito Capital', '+58(212)761-53.84 / 763-46.90', '', '', '', '', 'logo.png'),
(2, 'Albornoz Ríos, Elizabeth', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2010', 'no posee', 'elyalbornoz@hotmail.com', 'Av. Las Acacias con Gran Avenida, Torre Lincoln, Piso 4 Ofic. C, Plaza Venezuela. Caracas. 1050.', 'Distrito Capital', '+58(212)782-10.31 / +58(414)315-99.42.', 'no posee', 'no posee', 'no posee', 'no posee', ''),
(3, 'Alfaro, Nohemí Aída', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1991', 'no posee', 'no posee', 'Av. El Cuartel con calle Central, Nº44-24. Unidad Médico Odontológica. Urb. Urdaneta. Caracas. 1010.', 'Distrito Capital', '+58(212)872-20.53', '', '', '', '', ''),
(4, 'Allais León de Maurette, Marvis Elvira', 'Cirugí Bucomaxilofacial', 'Universidad Estadual de Campinas, Sao Paulo-Brasil / Universidad de Pernambuco, Recife-Brasil', '2005 / 2008', 'www.maxilofaciallatrinidad.com', 'marvisallais@gmail.com', 'Hospital de Clinicas Caracas. Torre Anexo. Piso 712. Consultorio 714. San Bernardino, Caracas', 'Distrito Capital', '+58(212)5747720', '', '', '', '', ''),
(5, 'Alvarez, Mariluz', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1990', 'no posee', 'luzsarak2@hotmail.com', 'Av. Libertador. Conjunto Resd. Jardín Bello Campo. Torre B, piso 1. Ofic.1-C. Urb.Chacao. Caracas. 1060. Venezuela.', 'Distrito Capital', '+58(212)264-04.81 / 264-06.77', '', '', '', '', ''),
(6, 'Andrade Guerra, Alberto', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1985', 'no posee', 'aagve@yahoo.com', 'Av. Ppal. Centro Comercial Galerías Los Naranjos. Piso 4. Nivel Oficinas II. Grupo Odontológico Galerías. Urb. Los Naranjos. Caracas. 1061. Venezuela.', 'Distrito Capital', '+58(212)985-22.20 / +58(212)985-19.69', '', '', '', '', ''),
(7, 'Arellano Pineda, Evelyn Xiomara', 'Cirugía Bucal', 'Fundación Universitaria San Martín. Santa Fé de Bogotá. Colombia', '1998', 'no posee', 'exarel@cantv.net / exarel@hotmail.com', 'Callejón Machado, Centro Profesional Oeste. piso 4. Consultorio 42. Urb. El Paraiso. Caracas. 1020. Venezuela.', 'Distrito Capital', '+58(212)483-27.73 / +58(212)482-21.19', '', '', '', '', ''),
(8, 'Argotte C., Alex', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1983', 'no posee', 'alex.argottecirugia@gmail.com', 'Av. Circunvalación del Sol. Centro Profesional Santa Paula. Torre B. Piso 7. Ofic. 708. Urb. Santa Paula. Caracas. 1061. Venezuela.', 'Distrito Capital', 'Fax:+58(212)985-07.13', '', '', '', '', ''),
(9, 'Arias Monrroy, Alberto Alonso.', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1999', 'no posee', 'guacharo34@gmail.com', 'Carretera Panaméricana. Galerías Las Américas. San Antonio de Los Altos. 1201. Edo. Miranda. Venezuela.', 'Distrito Capital', '+58(212)373-67.43 / +58(412)252-74.27', '', '', '', '', ''),
(10, 'Arispe Zuniaga, Gerardo Rafael.', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1996', 'no posee', 'gerardoarispe@hotmail.com', 'Av. La Salle. Grupo Médico Bucaral, piso 4. Consultorio Nº45. Urb. Los Caobos. Caracas. 1050. Venezuela.', 'Distrito Capital', '+58(416)631-16.79 / +58(212)781-20.42 / +58(212)781-84.02.', '', '', '', '', ''),
(11, 'Armas Carbonell, Jonathan Valentín', 'Cirugía Maxilofacial', 'Universidad Gran Mariscal de Ayacucho. ', '2008', 'no posee', 'jonathanarmas@gmail.com', 'Av. La Guairita con calle Trinidad, Centro Profesional Vizcaya. Piso 3. Ofic. 32. Urb. Colinas de Tamanaco. Caracas. 1061. DC. Venezuela.', 'Distrito Capital', '+58(212)988-05.26 / +58(424)181-97.39', '', '', '', '', ''),
(12, 'Artigas Hidrobo, Gustavo Ramón', 'Cirugía Bucal', 'La Universidad del Zulia', '2011', 'no posee', 'artigasgustavo@hotmail.com', 'Av. Principal de El Bosque, Edif. Pichincha, Piso 4, Ofic. 41. Caracas. 1060. DC. Venezuela.', 'Distrito Capital', '(:+58(212)953-78.43 / 953-30.91 / +58(412)915-80.23', '', '', '', '', ''),
(13, 'Báez Allup, Adriana.', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2008', 'no posee', 'adricbaez@gmail.com / adricbaez@hotmail.com', 'De Esq. Alcabala a Esq. Peligro. Centro Profesional Torre Alcabala. Piso 6. Consultorio 62. Parroquia La Candelaria. Caracas. 1010 DC. Venezuela.', 'Distrito Capital', '+58(212)838-59.24 / 574-68.76 / 571-58.73 / +58(414)277-32.23', '', '', '', '', ''),
(14, 'Barriuso Roldán, Julian.', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2000', 'no posee', 'jbarriusor@gmail.com', 'Av. La Estancia. Centro Ciudad Comercial Tamanaco. Primera Etapa. Piso 3. Ofic. 303. Caracas. 1064. Venezuela.', 'Distrito Capital', '+58(212)959-25.30', '', '', '', '', ''),
(15, 'Barroeta Rodríguez, Luis José', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2005', 'no posee', 'barroetaluisjose@hotmail.com', 'Av. Leonardo Da Vinci. Edif. Girasol. Piso 2. Ofic. 2A Clínica González &amp; González. Urb. Colinas de Bello Monte. Caracas D.C. 1050. Venezuela.', 'Distrito Capital', '+58(416)412-87.97 / (212)754-12.85', '', '', '', '', ''),
(16, 'Bello D., Carlos Abraham', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2002', 'no posee', 'silgilmar@cantv.net', 'Esq. Iglesia a Navarrete. Edif. El Primero. Apt.1. Maiquetía. 1160. Edo. Vargas. Venezuela.', 'Distrito Capital', '+58(212)332-74.41/ 332-68.09', '', '', '', '', ''),
(17, 'Bellorín Lípez, María Herminia', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2002', 'no posee', 'mhbellorin@hotmail.com', 'Calle Villaflor. Centro Profesional del Este. Piso 2. Ofic. 21. Clínica García-Arocha. Sabana Grande. Urb. San Antonio. Caracas. 1050. Venezuela.', 'Distrito Capital', '+58(212)761-38.83 / 762-22.95 / Fax:+58(212)762-32.57 / +58(414)333-19.76', '', '', '@mhbellorinl', '', ''),
(18, 'Caballero Arredondo, Mirna Josefina', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1993', 'no posee', 'mirnacabal@cantv.net', 'Av. Libertador. Edif. Centro Macom, piso 3. Ofic.3-B. Chacao. Caracas.1060. Venezuela.', 'Distrito Capital', '+58(212)267-03.66 / 263-77.39', '', '', '', '', ''),
(19, 'Cabello Carreño, Juan Francisco', 'Cirugía Bucomaxilofacial', 'Universidad Gran Mariscal de Ayacucho.', '2011', 'www.cmgalenoservice.com.ve', 'juanfco2811@hotmail.com', 'Av. Universidad. Centro Parque Carabobo.Torre A Piso 11. Ofic 11-02. Parque Carabobo. Caracas. DC. 1010', 'Distrito Capital', '+58(212)577-95.82 / +58(424)181-25.05', '', '', '', '', ''),
(20, 'Cabrera Gómez, Edgar Alejandro', 'Cirugía Bucomaxilofacial', 'Universidad Peruana Cayetano Heredia', '2013', 'no posee', 'edgaralejandrocabreragomez@gmail.com', 'Av. Circunvalación del Sol. Centro Profesional Santa Paula, Torre B, Piso 2, Ofic. 211. ABDental. Caracas. 1061.', 'Distrito Capital', '+58(212)985-46.66 / 985-07.13 / 987-88.49.', '', '', '', '', ''),
(21, 'Cachazo Zaccaro, Morelba', 'Cirugía Bucomaxilofacial', 'Universidad Central de Venezuela', '1981', 'no posee', 'morelbacachazo@hotmail.com', 'Av. Roosevelt. Local Adjunto, Qta. Jacira. Ofic. 7. Viajes Lesimar. Prolongación El Cortijo. Urb. Los Rosales. Caracas. 1040. Venezuela.', 'Distrito Capital', '+58(212)693-79.24 / +58(414)019-53.03', '', '', '', '', ''),
(22, 'Caico Di Simone, Vincenza María Merce', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2003', 'no posee', 'enzacaico@hotmail.com', 'Av. Libertador. Edif. Siclar. Piso 2. Ofic. 22. Consultorio Longobardi. Urb. La Florida. Caracas. 1050. Venezuela.', 'Distrito Capital', '+58(212)761-82.07 / 761-27.66', '', '', '', '', ''),
(23, 'Calderón Marval, Andrés', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2011', 'no posee', 'andresjcalderon@gmail.com / andresjose74@hotmaiil.com', 'Transversal 361 E, Centro Comercial Caracas, Nivel 2, Ofic. 20 Consultorio Odontológico Especialidades (COEM). Urb. Montalbán III Caracas. D.C. 1020.', 'Distrito Capital', '+58(212)442-10.87 / 471-36.55 / +58(416)637-50.77', '', '', '', '', ''),
(24, 'Campos Hernández, Jesús Ramón', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1990', 'no posee', 'ircampos@telcel.net.ve', 'Av. Venezuela. Policlínica Americana, piso 3. Cons. 3A. Urb. El Rosal. Caracas. 1060.', 'Distrito Capital', 'Fax: +58(212)951-65.84.', '', '', '', '', ''),
(25, 'Cardona, Silvia E.', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1990', 'no posee', 'secardona@cantv.net', 'Boulevard de Sabana Grande. Edif. Oficentro Robica, piso 1. Cons.1. Urb. Sabana Grande. Caracas. 1050.', 'Distrito Capital', 'Fax: +58(212)761-58.86 / 761-08.85', '', '', '', '', ''),
(26, 'Carías Jassir, Edgardo Andrés', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2007', 'no posee', 'edgardocarias@hotmail.com', 'Av. La Salle, Grupo Médico Bucaral, Piso 8, Consultorio 82. Urb. Los Caobos. Caracas. 1050. /Av. Fco. de Miranda con Av. El Parque. Torre Country Club. P.B. CIBUMAXI. Urb. El Bosque, Caracas, 1050.', 'Distrito Capital', '+58(212)793-06.72 / 793-58.79 / +58(414)108-92.98.', '', '', '', '', ''),
(27, 'Castro Acuña, David Enrique', 'Cirugía Bucomaxilofacial', 'Universidad El Bosque.', '2011', 'no posee', 'dr.davidcastrocomf@gmail.com', 'Av. Las Colinas, C.C. Las Colinas, Nivel Terraza Ofic. 1. CIO Las Colinas, Urb. Los Samanes, Caracas. 1061.', 'Distrito Capital', ' +58(212)945-83.13 / 945-86.32 / +58(414)315-05.82.', '', '', '', '', ''),
(28, 'Castro Pérez, José Luis', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2004', 'no posee', 'castropcb@gmail.com', 'Av. Lincoln. Centro Comercial Bello Monte. Piso 3. Ofic. J. Urb. Bello Monte. Caracas. 1050.', 'Distrito Capital', '+58(414)315-14.22 / +58(426)520-09.10', '', '', '', '', ''),
(29, 'Cedeño Martínez, José Adolfo', 'Cirugía Bucal', 'Universidad Central de Venezuela', '2002', 'no posee', 'cedeno_martinez@hotmail.com', 'Av. Avila. Edif. Santa Clara. Piso 1. Ofic. 3. Urb. Altamira Sur Caracas 1060.', 'Distrito Capital', '+58(212)261-51.86', '', '', '', '', ''),
(30, 'Cedillo Ayala, Marisabel', 'Cirugía Bucal', 'Universidad Central de Venezuela', '2004', 'no posee', 'raya13@cantv.net', 'Av. Fco. de Miranda Torre Profesional La California, Piso 10. Ofic. 10-3. Urb. La California Norte. Caracas. 1071.', 'Distrito Capital', '+58(212)271-09.78 / 271-42.78.', '', '', '', '', ''),
(31, 'Chazet Graterol, Michele Marina', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2009', '', 'cirugiabucal.ve@gmail.com / chazet75@hotmail.com', 'Av. 1era. Sur Altamira, Edif. Centro Médico Continental. Piso 4. Cons. 12. Urb. Altamira. Caracas. 1060.', 'Distrito Capital', '+58(414)339-94.95 / +58(426)520-73.32.', '', '', '', '', ''),
(32, 'Cisneros, Santiago', 'Cirugía BucoMaxilofacial', 'Universidad Central de Venezuela.', '1980', 'no posee', 'no posee', 'Esq. Monzón a Palmita. N°21. Parroquia Santa Teresa. Caracas. 1010.', 'Distrito Capital', '+58(212)482-38.85', '', '', '', '', ''),
(33, 'Colmenares González, Pablo Enrique', 'Cirugía Bucomaxilofacial', 'Universidad Gran Mariscal de Ayacucho.', '2013', 'no posee', 'pablocolmenares1@gmail.comÂ ', 'Av. José Ángel Lamas, Hospital Militar Dr. Carlos Arvelo, PB División de Odontologia Dpto. de Medicina y Cirugia Bucomaxilofacial. Urb. San Martín. Caracas.', 'Distrito Capital', '+58(424)212-75.73 / +58(426)712-49.63', '', '', '', '', ''),
(34, 'Cohen, Carlos E.', 'Cirugía Bucomaxilofacial', 'Hadassah University Hospital Jerusalen Israel.', '1999', 'no posee', 'ccohen60@hotmail.comÂ / odontologoslpg@hotmail.com', 'Av. Principal de Caurimare. Policlinica Metropolitana, piso 3. Cons. 3J. Urb. Caurimare. Caracas. 1061.', 'Distrito Capital', 'Fax: +58(212)908-05.59 / 985-75.09.', '', '', '', '', ''),
(35, 'Contreras Castellanos, Carlos Ernesto.', 'Cirugía Bucomaxilofacial', 'Universidad Nacional Autonoma de Mexico.', '2015', 'no posee', 'carlosecontrerasc@gmail.com', 'Av. Los Salias, Edif. Oficentro Picacho, Piso 3. Ofic. 3-A. San Antonio de los Altos. 1204 Edo. Miranda.', 'Distrito Capital', '+58(424)226-20.81 / +58(212)371-48.52 / +58(212)321-83.31.', '', '', '', '', ''),
(36, 'Contreras Márquez, María Virginia', 'Cirugía Bucal', 'Universidad del Zulia.', '2013', 'no posee', 'dramariavcontreras@gmail.com', 'Av. Libertador. Edif. Libertador 75, piso 9 Ofic. 9-A, Urb. La Campiña. Caracas. (frente a la Clínica Santiago de León a una cuadra de PDVSA.) ', 'Distrito Capital', '+58(212)762-43.43 /+58(212)762-31.80.', '', '', '', '', ''),
(37, 'Contreras Ravago, María Gabriela', 'Cirugía Bucomaxilofacial', 'Universidad Gran Marical de Ayacucho.', '2014', 'www.uniotoneuro.com.veÂ ', 'gabycontreras86@gmail.com', 'Av. Ppal. Sede Gerencial La Castellana, Piso 4. Ofic. 4-a , Urb. La Castellana , Caracas. 1060. Edo. Miranda.Calle Chivacoa. Urológico San Román. Anexo B Uniotoneuro. Urb. San Román. Caracas. 1061. Edo. Miranda. Venezuela. ', 'Distrito Capital', '+58(212)993-60.03 / +58(414)123-75.88 / +58(212)265-55.35', '', '', '', '', ''),
(38, 'Cordsen Guajardo, Hans Wilhelm. ', 'Cirugía Bucomaxilofacial', 'Universidad Hospital General del Oeste Dr. Jose Gregorio Hernandez.', '2009', 'www.dentalconcept.com.ve', 'hanswcmaxilofacial@hotmail.com', 'Av. La Estancia Centro Comercial Ciudad Tamanaco C.C.C.T. Torre Piramide invertida Piso 4 Ofic. 409 Urb. Chuao. Caracas. 1064. /Calle la Hoyada con Miranda. Minicentro Comercial N.K.M. Piso 1 Local 11. Dental Concept. Los Teques. 1201. Edo. Miranda.', 'Distrito Capital', '+58(212)959-84.58. / +58(414)820-97.47 / 58(212)321-51.90', '', '', '', '', ''),
(39, 'Correa Acosta-Rubio, Carlos Enrique', 'Cirugía Bucomaxilofacial', 'University of Glasgow.', '2005', 'no posee', 'dr.correa@yahoo.com', 'Av San Juan Bosco, Clínica El Ávila, Piso 8. Cons. 814. Urb. Altamira. Caracas. 1060. /Av. La Estancia Centro Comercial Ciudad Tamanaco C.C.C.T. Nivel C1. Dento Spa Laser/ Dento spa Smile Design. Urb. Chuao. Caracas. 1064. /Av. La Estancia Centro Comercial Ciudad Tamanaco C.C.C.T. Piramide invertida Piso 4. Cons 429 \"Velazquez Bilbao\" Urb. Chuao. Caracas. 1064.', 'Distrito Capital', 'Fax: +58(212)276-18.84 / 276-18.85 / +58 (416)605-88.78. / Fax: +58(212)959-70.40 / Fax: +58(212)959-95.85', '', '', '', '', ''),
(40, 'David Mitri, Bekous ', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1999', 'no posee', 'bekous_david@hotmail.com', 'Av. Francisco de Miranda con San Juan Bosco. Edif. Adriática. Mezzanina. Ofic. 1. Altamira. Caracas. 1060.', 'Distrito Capital', '+58(414)250-44.95Â / +58(212)816-48.90.', '', '', '', '', ''),
(41, 'De Armas Gatasol, Edgar Luis', 'Cirugía Bucomaxilofacial', 'Universidad Nacional Autonoma de México. México.', '2009.', 'no posee', 'dearmascmf@hotmail.com / edgarluis_dearmas@yahoo.es', 'Calle \"A\", Centro Integral Santa Rosa. Piso S. Ofic.PS 5. Urb. Santa Rosa. 1061. Caracas.', 'Distrito Capital', '+58(212)991-42.98 / 992-69.15', '', '', '', '', ''),
(42, 'De Leonardis Vichi, Dina', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2004', 'no posee', 'dinadlv@hotmail.com', 'Av. La Estancia. C.C.C.T. Torre A. Piso 3. Ofic. 303. Caracas. 1064.', 'Distrito Capital', '+58(212)740-22.48 / 740-22.47', '', '', '', '', ''),
(43, 'De Santiago Harringhton, Leixer Armando', 'Cirugía Bucomaxilofacial', 'Hospital General del Este Dr. Domingo Luciani', '2014', 'no posee', 'ladsh@hotmail.com', 'Av. Ppal de Las Mercedes. Centro Comercial Paseo Las Mercedes. Nivel 1. Consult. Dental. Urb. Las Mercedes. Caracas. 1060.', 'Distrito Capital', '+58(414)204-04.14', '', '', '', '', ''),
(44, 'Montilla Tosta, Cosme José', 'Cirugía Bucal', 'Universidad Nacional del RosarioArgentina.', '1974', 'no posee', 'cosmejmontillat@yahoo.com', 'Av. Bolívar. Edif. Renata, Mezzanina, Ofic.1, Pto. La Cruz. 6023. Edo. Anzoátegui. Venezuela.', 'Anzoategui', '+58(281)267-20.24 / Movil:+58(414)820-55.13', '', '', '', '', ''),
(45, 'Della Quijada, Audrey Joan', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2012', 'no posee', 'od.adellan@hotmail.com', 'Av. El Stadium c/ calle Bellas Artes. Edif. Santa Mariannina. PB. Local 4. Cliniortodoncia. Urb. Los Chaguaramos. Caracas. 1041. /Av. Las Repúblicas con Av. América. C.C. Terras Plaza. Torre Médica. Piso 9. Ofic. C9-G. Ortosalud. Urb. Terrazas del Club Hípico. Caracas. 1080. /Calle 9 con calle 5. Edif Genova. PB. Local 02. Grupo Smile CCS. Urb. La Urbina. Caracas. 1073.', 'Distrito Capital', '+58(414)325-55.27 / +58(212)662-44.93 / +58(212)583-90.35 / +58(212)977-29.38 / +58(212)814-27.01 / +58(212)243-84.10', '', '', '', '', ''),
(46, 'Dinatale Papa, Elio', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1997', 'no posee', 'eliodinatale@gmail.com', 'Av. Los Samanes. Instituto Clínico La Florida. Piso 2. Consultorio 6. Urb. La Florida. Caracas. 1050.', 'Distrito Capital', '+58(212)731-32.36', '', '', '', '', ''),
(47, 'Dopazo Lodeiro, Juan Ramón', 'Cirugía Bucomaxilofacial', 'Universidad de Concepción. Chile', '2007', '', 'juradolo@hotmail.com / juradolo@yahoo.com', 'Calle Bolívar, Clínica Félix Boada. Piso 3. Consultorio 301. Baruta. Caracas. Edo. Miranda. 1080.', 'Distrito Capital', '+58(212)903-02.00 / Fax:+58(212)944-34.77 / +58(414)112-32.31.', '', '', '', '', ''),
(48, 'Escovar López, Elio Vicente.', 'Cirugía Bucomaxilofacial', 'Hospital General Miguel Pérez Carreño.', '1980.', 'no posee', 'delta139@hotmail.com', 'Av. Río Caura. Centro Comercial Parque Humboldt. Mezz. Nro.17. Centro Médico Odontológico Humboldt. Urb. Prados del Este. Caracas. 1080.', 'Distrito Capital', '+58(212)979-21.64 / 975-09.07.', '', '', '', '', ''),
(49, 'Espinoza Alizo, Martha Judith.', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1995', 'no posee', 'marthaespinozaalizo@hotmail.com / mespina13@gmail.com', 'Av. Los Manguitos. entre Av. Libertador y Fco. Solano López. Torre Mega III. Piso 2. Ofic. 2-F. Urb. Las Delicias. Caracas. 1050.', 'Distrito Capital', '+58(212)761-32.71 / Fax:+58(212)762-91.74', '', '', '', '', ''),
(50, 'Fanini, Clara.', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1986', '', '', 'Av. Cajigal. Intituto Otorrinolaringología San Bernardino. Piso 4. Urb. San Bernardino. Caracas. 1010.', 'Distrito Capital', '+58(212)551-74.46 / 551-75.55 / Fax:552-29.43.', '', '', '', '', ''),
(51, 'Fermín Mago, Roberto Luis', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1992', 'no posee', 'robfermag@hotmail.com', 'Av. Francisco de Miranda. Centro Seguros La Paz. Piso 8 ala Este. Ofic. E81-E. Urb. La California Caracas. 1071. ', 'Distrito Capital', '+58(212)232-63.17 / +58(416)613-09.31', '', '', '', '', ''),
(52, 'Fernández Bello, María Carolina', 'Cirugía Bucal', 'Universidad Central de Venezuela. ', '2012', 'no posee', 'carofernandezbello@gmail.com', 'Av. Santiago de León de Caracas. PUNTO DENTAL. PB. Urb. La California Norte. Caracas. 1080. /Calle Perija entre calles California y Orinoco. Centro Comecial California Mall. Loc. PB3. Clínica Caracas Dental Spa. Urb. Las Mercedes, Caracas. 1061.', 'Distrito Capital', '+58(212)435-71.10 / +58(412)624-87.36 / +58(212)992-76.21', '', '', '', '', ''),
(53, 'Flores, Zoraida.', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1982', 'no posee', 'zflores@cantv.net', 'Callejón Machado. Edif. Centro Profesional Oeste. Piso 3. Ofic.32. Urb. El Paraiso. Caracas. 1020.', 'Distrito Capital', '+58(212)484-91.92 / +58(212)483-42.71.', '', '', '', '', ''),
(54, 'Fuenmayor Parra, Yajaira Elisa.', 'Cirugía Bucal', 'Universidad Central de Venezuela. ', '2010', 'no posee', 'fuenmayory@yahoo.com', 'Calle París, Edif. Premier, PB, Local Unico. Grupo Médico Calinor. PB. Urb. La California Norte. Caracas. 1071. Edo. Miranda.', 'Distrito Capital', '+58(212)271-64.94 +58(426)981-03.02', '', '', '', '', ''),
(55, 'Gagliardi Lugo, Antonio Fabbio.', 'Cirugía Bucomaxilofacial', 'Universidad Gran Mariscal de Ayacucho.', '2014', 'no posee', 'AGLmaxilo@gmail.com', 'Av. Ppal. Las Mercedes. Centro Profesional Las Mercedes. Piso 4. Ofic. 48. Urb. Las Mercedes. Caracas. 1050. /Av. Edison, cruce con, Cl. Neverí, Centro Comercial Los Chaguaramos, Piso 9, Ofic. 911, Zenit Dent. Urb. Los Chaguaramos. Caracas /Av. Los Samanes, con Calle Madariaga, Edif. Euro, Mezz., Local 27, Urb. El Paraiso. Caracas.', 'Distrito Capital', '+58(414)320-78.76. / +58(212)662-49.19 / +58(212)662-77.39 +58(212)481-11.10 / +58(212)484-01.89', '', '', '', '', ''),
(56, 'Galvis Pérez, Gregorio Miguel', 'Cirugía Bucal', 'Universidad Central de Venezuela. ', '2004', '', 'gregoriogalvis@gmail.com', 'Calle La Joya. Edif. Cosmos. Piso 13. Consul. 13-A. Chacao. Caracas. 1060. /Av.Venezuela. Policlinica Americana. Piso 4. Consult. 4-B. Urb. El Rosal. Caracas. 1060.', 'Distrito Capital', '+58(212)267-16.42  / +58(412)011-65.03 ', '', '', '', '', ''),
(57, 'Garaban P., Castor J.', 'Cirugía Bucal', 'Universidad Central de Venezuela.', ' 2006', 'no posee', 'castorgaraban@hotmail.comÂ ', 'Esq. Piedras a Esq. Palmita, Conjunto Residencial Palmita, Torre D, PB. Local 7. Caracas. 1010.', 'Distrito Capital', '+58(212)542-44.98', '', '', '', '', ''),
(58, 'García Brillembourg, Oscar Alejandro', 'Cirugía Bucal', 'Universidad de Valencia. España.', '2003', 'no posee', 'implantesbucales@gmail.com', 'Av. La Estancia. C.C.C.T. Torre Pirámide Invertida, Piso 6, Ofic. 601. Urb. Chuao. Caracas. 1064.', 'Distrito Capital', '+58(212)959-26.21 / 959-27.21 / +58(414)350-11.99', '', '', '', '', ''),
(59, 'García Guevara, Henry Arturo', 'Cirugía Bucomaxilofacial', 'Hospital Santa Paula, Sao Paulo. Brasil. ', '2010', 'no posee', 'henryagg@gmail.com', 'Av. Francisco de Miranda, Torre CEMICA, Piso 11 Ofic. A, Chacao, Caracas. 1060. /Av. Romulo Gallegos, Torre Saman, Piso 6. Ofic. 6A, Urb. Los Dos Caminos. Caracas. 1071.', 'Distrito Capital', '+58(412)708-12.91 / +58(412)971-46.76 / +58(212)237-45.05 / +58(212)238-22.31 / +58(412)971-46.76', '', '', '', '', ''),
(60, 'García Rodríguez, María Esther Lilia', 'Cirugía Bucomaxilofacial', 'Eberhard-Karls-Universität. Tübingen. Alemania. ', '1974', 'www.urologico.com', 'ma_esthergarcia@yahoo.es', 'Calle Chivacoa. Urológico San Román. Piso 1. Cons. N° 8. Urb. San Román. Caracas. 1060.', 'Distrito Capital', 'Fax:+58(212)991-72.73', '', '', '', '', ''),
(61, 'García-Beroes, Consuelo ', 'Cirugía Bucomaxilofacial', 'Eberhard-Karls-Universität. Tübingen. Alemania.', '1979', 'no posee', 'csgarciaberoes@cantv.net', 'Av. San Juan Bosco con 6ta. Transv. Clínica El Ávila. Piso 10. Cons. 1015. Urb. Altamira. Caracas. 1060.', 'Distrito Capital', '+58(212)276-10.85 / 261-02.75', '', '', '', '', ''),
(62, 'García Méndez, Narcisa ', 'Cirugía Bucal', 'Universidad Central de Venezuela. ', '2000.', 'no posee', 'narcisagarcia@cantv.netÂ  / narciss@cantv.netÂ / narcissa19@gmail.com', 'Av. Rómulo Gallegos. Edif. Toledo. Mezzanina 4. Centro Odontológico Horizonte. Urb. Horizonte. Caracas. 1070.', 'Distrito Capital', '+58(212)237-15.13 / 237-16.82  / +58(416)627-11.55', '', '', '', '', ''),
(63, 'García Toro, Marlin José ', 'Cirugía Bucal', 'Universidad Central de Venezuela. ', '2006', 'no posee', 'marlingarciat@hotmail.comÂ ', 'Calle Newton, Edif. Cubagua, Piso 1, Apto. Nº 5, Urb. Colinas de Bello Monte. Caracas. 1050. /Av. Casanova. Centro Comercial Único, Centro Odontológico Sonri Salud, Urb. Chacaito. Caracas. 1050.', 'Distrito Capital', '+58(212)605-38.62 / 368-24.79', '', '', '', '', ''),
(64, 'Garriga García, Erika María', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1995', 'no posee', 'emgarriga@yahoo.com', 'Av. La Estancia. C.C.C.T. Piso 5, Ofic. 502-A2. Clínica de Odontología Restauradora. Caracas. 1053.', 'Distrito Capital', '+58(212)991-97.19 / Fax:+58(212)959-89.66', '', '', '', '', ''),
(65, 'Ghanen A., Alexis', 'Cirugía Bucal', 'Universidad Central de Venezuela', '2002', 'no posee', 'al_ghanen@yahoo.com', 'Calle Negrín entre Av. Fco. Solano y Av. Libertador. Torre Alto Centro. Piso 10. Ofic. 10-C. Sabana Grande. Caracas. 1050.', 'Distrito Capital', '+58(212)763-32.16 / 761-32.94 / Fax:+58(212)763-68.81 / +58(414)240-47.09', '', '', '', '', ''),
(66, 'Giner S., Patricia', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2006', 'no posee', 'mapago@cantv.net', 'Calle C con calle M, Residencias Las Rosas Mezzanina, Ofic. C. Urb. Santa Rosa de Lima. Caracas. 1061.', 'Distrito Capital', '+58(212)992-37.20', '', '', '', '', ''),
(67, 'Gómez, Luis G. ', 'Cirugía Bucal', 'Universidad Central de Venezuela. ', '2006', 'no posee', 'lugobet2000@cantv.net', 'Av. Francisco Solano. Centro Solano Plaza I, Piso 9, PH-B. Urb. Sabana Grande. Caracas. Distrito Capital. 1050.', 'Distrito Capital', '+58(212)761-34.37 / 761-28.34', '', '', '', '', ''),
(68, 'Gómez Díaz, Albriggite. ', 'Cirugía Bucomaxilofacial', 'Universidad de Chile. Chile.', '2003.', 'no posee', 'albriggite@yahoo.com', 'Calle El Carmen, entre Av. Rómulo Gallegos y Av. Francisco de Miranda. Edif. Centro Dos Caminos. Piso 3 Ofic.3B., Los Dos Caminos, Caracas. 1071. /Hospital Miguel Pérez Carreño, Servicio de Cirugía Plástica. Servicio de Odontología.', 'Distrito Capital', '+58(212)237-08.63 / 235-94.97 / 235-37.50 / +58(414)337-47.12 / +58(416)610-34.30', '', '', '', '', ''),
(69, 'Gómez López, Julio Enrique.', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1999.', 'no posee', 'jgolo67@hotmail.com', 'Calle La Joya entre Av. Fco. de Miranda y Av. Libertador. Edif. Cosmos Piso 3. Ofic.3I. Urb. Chacao. Caracas 1060.', 'Distrito Capital', 'Fax:+58(212)265-34.01 / +58(414)231-95.19', '', '', '', '', ''),
(70, 'Gómez Medina, Marco Tulio', 'Cirugía Bucomaxilofacial', 'Universidad Gran Mariscal de Ayacucho. Hospital General del Oeste José Gregorio Hernández.', '2003.', 'no posee', 'maxilofacial@cantv.net', 'Av. Arturo Michelena, entre calle Codazzi y calle Mendez. Instituto Metropolitano de Cirugía, piso 3, consultorio 1 Urb. Santa Monica. Caracas 1047. /Av. Simón Planas, Clínica Jaimes Cordova. Urb. Santa Mónica. /Calle La Línea. Unidad Quirúrgica San Antonio. Urb. Week End, Catia La Mar. Estado Vargas.', 'Distrito Capital', '+58(212)219-31.01 / 219-32.17 / +58(414)138-91.29 / +58(212)661-34.10 /  +58(212)352-15.76 / 352-50.82', '', '', '', '', ''),
(71, 'González Barreto, Icoa-urú', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2004', 'no posee', 'icoa_uru@yahoo.es / icoauru@hotmail.com', 'Calle Norte 15. entre Esq. Peligro a Esq. Alcabala. Edif. Centro Profesional Torre Alcabala, Piso 4. Ofic. 43. Parroquia La Candelaria. Caracas. 1010. /Av. Bicentenario. Hospital Dr. Victorino Santaella Ruiz Los Teques. 1201. Edo. Miranda. Venezuela.', 'Distrito Capital', '+58(416)805-74.59 / +58(412)292-24.77 / +58(212)578-22.28 / 615-08.96', '', '', '', '', ''),
(72, 'González Carranza, Marianela ', 'Cirugía Bucomaxilofacial', 'Baylor College of Dentistry. Dallas. Texas. USA. ', '2000', 'www.dentalstar.netÂ ', 'mgonzalezccs@cantv.netÂ ', 'Av. Venezuela. Policlínica Americana Piso 5. Consultorio 5-D. Urb. El Rosal. Caracas. 1060. /Av. Principal con Av. Las Lomas. Centro Comercial Terraza. Nivel Panorama. Urb. Lomas de La Lagunita. Caracas. 1083.', 'Distrito Capital', '+58(212)992-93.04 / 963-46.33  / Fax:+58(212)963-46.33', '', '', '', '', ''),
(73, 'González de Palmero, María del Carmen', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1982', 'no posee', 'palmerogonzalez@gmail.com / maryglezve@yahoo.es / palmerogonzalez@cantv.net', 'Av. Andrés Bello. Edif. Hospital Ortopédico Infantil. Urb. Santa Rosa. Caracas. 1050. /Facultad de Odontología. Cátedra de Anatomía Humana. Piso 7. Universidad Central de Venezuela. 1040. Caracas.', 'Distrito Capital', '+58(212)578-30.86 / +58(212)605-38.35 / Fax:+58(212)241-61.17', '', '', '', '', ''),
(74, 'González Hernández, José María', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1997', 'no posee', 'chemaria1007@hotmail.com', 'Calle 8. Conj. Resd. Juan Pablo II. Grupo Médico Génesis 75. Urb. Montalbán III. Caracas. 1020.', 'Distrito Capital', '+58(212)471-10.71 / 471-25.58.', '', '', '', '', ''),
(75, 'González Vivas, Luis Fabian', 'Cirugía Bucal', 'Universidad Central de Venezuela.', ' 2012', 'no posee', 'drluisfgonzalezv@gmail.com / luisfgonzalezv@yahoo.com', 'Av. Rómulo Gallegos, Parque Deportivo Miranda (Piscina). Corporación de Salud del Edo. Miranda (Región VII). Ambulatorio Parque Miranda. Urb. Sta. Eduvigis. Caracas. 1071. /Av. Las Acacias, Edif. Torre Lincoln. Piso 4. Ofic. \"C\". Urb. Sabana Grande. Caracas. 1050. / Av. Circunvalación del Sol, Centro Profesional Santa Paula,Torre B, Piso 3, Ofic. 302. Urb. Sta. Paula - Caracas 1061.', 'Distrito Capital', '+58(416)833-40.41 / +58(212)793-04.68 / 782-10.31 / +58(212)985-53.25 / 985-11.60', '', '', '', '', ''),
(76, 'Granadillo Acosta, Karla Gabriela', 'Cirugía Bucal', 'Universidad Central de Venezuela.', ' 2012', 'no posee', 'karlagranadillo@gmail.com', 'Av. Eugenio Mendoza. Torre IASA. Piso 2. Ofic. 202. Urb. La Castellana. Caracas. 1060. Edo. Miranda. /', 'Distrito Capital', '+58(212)263-69.23 / +58(414)236-24.28', '', '', '', '', ''),
(77, 'Greco F., Jacqueline L.', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2007', 'no posee', 'liflor12@hotmail.com / oda_avila@hotmail.com', 'Av. Avila, Edif. Pan Avila Ofic. A1. Urb. San Bernardino. Caracas. 1010.', 'Distrito Capital', '+58(212)552-64.09 / +58(414)415-60.31 / +58(412)315-60.31', '', '', '', '', ''),
(78, 'Gudiño Martínez, Ronar Alejandro', 'Cirugía Bucomaxilofacial', 'Universidad Gran Mariscal de Ayacucho. Hospital General del Oeste.', '2012', 'no posee', 'maxilofacialccs@gmail.com', 'Calle Chivacoa. Urológico San Román. Anexo \"B\". Unidad de Otorrinoraringología y Cirugía Maxilofacial. Urb. San Román. Caracas. 1060.', 'Distrito Capital', '+58(212)993-60.03 / 992-10.78', '', '', '', '', ''),
(79, 'Guerrero, César A.', 'Cirugía Bucomaxilofacial', 'Texas University. Dallas. USA.', '1981', 'www.distractionosteogenesis.com', 'drcesarguerrero@gmail.com', 'Calle \"A\", Centro Integral Santa Rosa. Piso 1. Ofic.105. Urb. Santa Rosa. 1061. Caracas.', 'Distrito Capital', '+58(212)992-93.04 / 993-97.38 / 992-87.78', '', '', '', '', ''),
(80, 'Guzmán González, Alexander Rafaél', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2004', 'no posee', 'alexguzmancb@yahoo.com', 'Av. Lincoln. Centro Comercial Bello Monte. Piso 3. Ofic. 3-J. Urb. Colinas de Bello Monte. Caracas. 1050.', 'Distrito Capital', '+58(212)753-81.89 / 753-43.34 / +58(414)304-95.39 / (416)830-42.49', '', '', '', '', ''),
(81, 'Henríquez G., Mariana.', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2002.', 'no posee', 'henriquezmariana@hotmail.com', 'Calle \"A\", Centro Integral Santa Rosa. Piso 1. Ofic.105. Urb. Santa Rosa. 1061. Caracas.', 'Distrito Capital', '+58(212)992-93.04 / 993-97.38 / Fax:+58(212)992-87-78', '', '', '', '', ''),
(82, 'Hernández Ching, Sirikit. ', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2010', 'no posee', 'hernandezsirikit@yahoo.com', 'Av. Luis Roche, Edif. Helena, Piso 5, Consultorio 54, Urb. Altamira. Caracas 1060. /Av. Vollmer, Edif. Normandie, Piso 5, Consultorio 51. Urb. San Bernardino. Caracas. 1010.', 'Distrito Capital', '+58(212)286-66.16 / 287-00.17 / +58(412)990-27.19 / +58(412)990-27.19', '', '', '', '', ''),
(83, 'Hernández Lugo, María Fernanda. ', 'Cirugía Bucomaxilofacial', 'IVSS HGE ', '2015', 'no posee', 'mfhernandezlugo@gmail.com', 'Final Av. Río de Janeiro, HGE ¨Dr. Domingo Luciani. PB. Urb. El Llanito. Caracas. 1080. Edo. Miranda.', 'Distrito Capital', '+58(212)205-65.00 / +58(414)260-96.62', '', '', '', '', ''),
(84, 'Hernández Márquez, Ninoska Yohebeht', 'Cirugía Bucal', 'Universidad Central de Venezuela. ', '2001', 'no posee', 'ninoska_odonto@hotmail.com', 'Av. Loira, Centro Médico Loira. Piso 7. Consultorio 709. Urb. El Paraiso. Caracas. 1020.', 'Distrito Capital', '+58(212)405-20.89 / 405-21.11 / +58(416)518-94.88', '', '', '', '', ''),
(85, 'Hernández Romero, Rosa Josefina', 'Cirugía Bucomaxilofacial', 'Universidad Gran Mariscal de Ayacucho. Hospital General del Oeste “José Gregorio Hernández”.', '2001', 'no posee', 'maxilofacial@cantv.net', 'Av. Libertador, Edif. Jardín Bello Campo. Torre “A”, Ofic. A1-B. Urb. Bello Campo, Caracas. 1060.', 'Distrito Capital', '+58(212)263-19.15', '', '', '', '', ''),
(86, 'Hernández Suárez, Argimiro Antonio', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1996', 'no posee', 'argimiroconsulta@gmail.comÂ  /  argimirohs@hotmail.com', 'Av. Río Manapire. Clínica Leopoldo Aguerrevere. Mezzanina. Consultorio 5. Servicios Odontológicos. Parque Humboldt. Urb. Prados del Este. Caracas. 1080. /Calle Risquez. Qta. Clager. Urb. Los Chaguaramos. Caracas. 1040.', 'Distrito Capital', '+58(212)975-34.84 / 907-20.45 / +58(414)100-00.02 / Fax:+58(212)975-46.65 / +58(212)661-50.28 / 693-20.92', '', '', '', '', ''),
(87, 'Herrera Vizcaíno, Carlos Arturo', 'Cirugía Bucomaxilofacial', 'IVSS – Hospital Dr. Domingo Luciani.', '2015', 'no posee', 'carlos.herrera.vizcaino@gmail.com', 'Calle Alejandro Calvo Lairet. IVSS– Hospital Oncológico Padre Machado. Urb. Los Castaños del sector El Cementerio. Municipio Libertador Caracas.', 'Distrito Capital', '+58(416)514-17.16', '', '', '', '', ''),
(88, 'Hoyer Rodríguez, Jeanette Carolina', 'Cirugía Bucomaxilofacial', 'Universidad Puerto Rico. Puerto Rico.', '1978', 'no posee', 'jchoyer719@hotmail.com', 'Av. La Estancia. Centro Ciudad Comercial Tamanaco. Primera Etapa. Piso 2. Ofic. 203. Unidad Odontológica Cuberos Lessman. Caracas. 1064.', 'Distrito Capital', 'Fax:+58(212)959-15.23 / 959-33.84 / 693-73.12.', '', '', '', '', ''),
(89, 'Jiménez M., Jesús Miguel', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1999', 'no posee', 'jesusmigueljimenez2000@hotmail.com', 'Av. Rómulo Gallegos. Edif. Pascal. Torre B. Piso 3. Apt.32-B. Urb. Los Palos Grandes. Caracas. 1060.', 'Distrito Capital', '+58(212)285-57.05 / 285-70.61Â / Fax: +58(212)572-81.17', '', '', '', '', ''),
(90, 'Laforest Clavel, Sally Carolina', 'Cirugía Bucomaxilofacial', 'Universidad El Bosque.', '2012', 'no posee', 'dra.laforest@hotmail.com', 'Av. Panteón. Edif. Centro Clínico Profesional Caracas. Piso 6. Consultorio 613. Urb. San Bernardino. Caracas. 1010.', 'Distrito Capital', '+58(212)574-17.72. / +58(414)021-22.90', '', '', '', '', ''),
(91, 'Lamura, Angela', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1991', 'no posee', 'alamura07@gmail.com', 'Av. Casanova. Instituto Médico del Este. Piso 5. Consultorio 504. Urb. Sabana Grande. Caracas. 1050.', 'Distrito Capital', '+58(212)761-48.21 al 25 Ext. 32. / Fax:+58(212)762-45.32', '', '', '', '', ''),
(92, 'Lander Hoffmann, Alberto Enrique.', 'Cirugía Bucomaxilofacial', 'Hospital Vargas. Universidad Central de Venezuela.', '1974', 'no posee', 'aelanderh@hotmail.com', 'Av. Panteón. Edif. Centro Clínico Profesional Caracas. Piso 6. Consultorio 609. (Anexo al Hospital de Clínicas Caracas). Urb. San Bernardino. Caracas. 1010.', 'Distrito Capital', '+58(212)574-73.09 / 574-79.76', '', '', '', '', ''),
(93, 'Ledezma Bastardo, Abigail Andrés', 'Cirugía Bucomaxilofacial', 'Universidad Nacional Autónoma de México -UNAM. México.', '2003', 'no posee', 'abiledez@yahoo.com', 'Av. Río Caura, Centro Comercial Parque Humboldt, Nivel Oficinas, Ofic. 5B. Urb. Prados del Este. Caracas. 1080. /Calle Independencia, Edif. Onnis, Piso 1, Ofic. 13. Urb. Bello Campo. Caracas. 1060.', 'Distrito Capital', '+58(212)979-92.68 / 979-88.46 / 979-33.16 / +58(212)265-63.37 / 263-82.29 / 263-96.74', '', '', '', '', ''),
(94, 'León Rondón, Nelsón José', 'Cirugía Bucomaxilofacial', 'Universidad Gran Mariscal de Ayacucho. Hospital General del Oeste.', '2012', 'no posee', 'atrium.maxilofacial@gmail.com', 'Av. La Guairita con calle La Trinidad, Centro Profesional Vizcaya. Piso 3. Ofic. 32. Urb. Colinas de Tamanaco. Caracas. 1061.', 'Distrito Capital', '+58(212)988-05.26 / +58(414)123-75.55', '', '', '', '', ''),
(95, 'López Chagín, Arnoldo José.', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1994', 'no posee', 'lochar@cantv.netÂ ', 'Av. Luis Roche Resd. Taurisano. Piso 2. Consultorio: 122. Urb. Altamira Sur. Caracas. 1060', 'Distrito Capital', 'Fax:+58(212)693-31.47', '', '', '', '', ''),
(96, 'Lozada Graterol, Karin Cristina', 'Cirugía Bucomaxilofacial', 'Pontificia Universidad Javeriana. Colombia.', '2006', 'no posee', 'karylozada@gmail.com', 'Av. La Salle, Centro Médico Bucaral, Piso 8, Ofic. 85. Urb. Los Caobos. 1050. Caracas.', 'Distrito Capital', '+58(212)781-33.97', '', '', '', '', ''),
(97, 'Lozano Sanabria, Teresa Elena', 'Cirugía Bucomaxilofacial', 'Miami University. Miami, Florida, USA.', '2002', 'no posee', 'lozanotere@hotmail.com', 'Av. Circunvalación del Sol. Centro Profesional Santa Paula. Torre A. Piso 8. Ofic.89. Unidad de Cirugía Maxilofacial Santa Paula. Urb. Santa Paula. 1061. Caracas. /407 Lincoln Rd. Suite 8-A. Miami Beach. Fl. 33139. USA.', 'Distrito Capital', '+58(212)985-11.81 / 985-49.42 / 985-86.38 / +1(305)538-20.88', '', '', '', '', ''),
(98, 'Maneiro, Oswaldo', 'Cirugía Bucomaxilofacial', 'Universidad de Boston MA. USA. / Yale University. New Heaven. USA.', '1968', 'no posee', 'omaneiro@cantv.netÂ ', 'Esq. Puente Brión a Cervecería. Clínica Luis Razzetti. Parroquia La Candelaria. Caracas. 1010.', 'Distrito Capital', '+58(212)576-06.96 / Fax:+58(212)987-30.37 ', '', '', '', '', ''),
(99, 'Mansilla B, María Isabel', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2001', 'no posee', 'maryum@cantv.net', 'Av. El Paseo. Iglesia Nuestra Señora Monte Carmelo a 2 cuadras de la Estación La Bandera Urb. Los Rosales. Caracas. 1040.', 'Distrito Capital', '+58(212)693-50.05', '', '', '', '', ''),
(100, 'Martin Falovo, Ursula Yendi', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2007', 'www.cibumaxi.com', 'ursulayendi@hotmail.com', 'Av. Las Repúblicas con Av. Las Américas, Terras Plaza, Torre Médica, Piso 9, Consultorio 9G. CIBUMAXI, Sede Terrazas de Club Hípico, Urb. Terrazas de Club Hípico. Caracas. 1080.', 'Distrito Capital', '+58(212)977-29.38 / +58(416)606-45.95', '', '', '', '', ''),
(101, 'Martinez Gómez, Juan Carlos', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1998', 'www.cmdlt.edu.ve', 'juancmartinezgomez@yahoo.com', 'Av. Intercomunal La Trinidad - El Hatillo. Centro Médico Docente La Trinidad. Edif. Manuel Antonio Pulido Méndez. PB. Depart. de Odontología. Servicio de Cirugía Bucal y Maxilofacial. Urb. La Trinidad. Caracas. Apdo. Postal 80474. Caracas 1080-A. /Av. Lincoln. Centro Comercial Bello Monte. Piso 4. Ofic. 4-E. Urb. Colinas de Bello Monte. Caracas. 1050.', 'Distrito Capital', '+58(212)945-60.90 / 949-64.41 / 949-15.27 / 949-64.11 / +58(212)751-85.80 / 751-86.80', '', '', '', '', ''),
(102, 'Maurette OBrien, Paul Edward', 'Cirugí Bucomaxilofacial', 'MSc en Cirugia Bucomaxilofacial Universidad Estadual de Campinas, Sao Paulo. Brasil. / Esp, PhD en Cirugia Bucomaxilofacial Universidad de Pernambuco, Recife-Brasil.', '2005 / 2008', 'www.cmdlt.edu.ve', 'paul.maurette@cmdlt.edu.ve', 'Centro MÃ©dico Docente La Trinidad. Av. Intercomunal La Trinidad. Módulo MAPM. PB izquierda. Servicio de Cirugia Buco-Maxilofacial. Caracas, Mun Baruta, Edo. Miranda.', 'Distrito Capital', '+58(212)949-64.11(Central CMDLT) / Directo: +58(212)945-60.90 / ', '', '', '', '', ''),
(103, 'Mc Donald Jimenez, Jeanette Adelina.', 'Cirugía Bucal', 'Universidad Central de Venezuela.', ' 2000', 'no posee', 'jeanetteadel@hotmail.com', 'Av. Las Ciencias con calle Razetti. Centro Profesional Los Chaguaramos. Ofic. 6. Piso 1. Urb. Los Chaguaramos. Caracas. 1040.', 'Distrito Capital', '+58(212)693-50.43', '', '', '', '', ''),
(104, 'Medina Martinez, Adriana', 'Cirugía Bucal', 'Universidad Central de Venezuela. ', '1998', 'no posee', 'adrianamedina80@hotmail.com', 'Av. Libertador. Edif. Centro Macom. Piso 3. Ofic.3-B. Urb. Chacao. 1060. Caracas.', 'Distrito Capital', '+58(212)267-03.66 / 263-77.39 / Fax:+58(212)265-73.36', '', '', '', '', ''),
(105, 'Melillo Rosamilia. José Gregorio.', 'Cirugía Bucomaxilofacial', 'Universidad de Buenos Aires. Argentina.', '1999', 'no posee', 'jomel28@gmail.com', '2da. Avenida. Centro Comercial Uslar, Torre de Oficinas Piso 13 Ofic. 134. Montalban Caracas. 1020.', 'Distrito Capital', 'Fax +58(212)443-58.55', '', '', '', '', ''),
(106, 'Meza Espinoza, Leddy Sol', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2001', 'no posee', 'leddymeza@hotmail.com / ledmeza@cantv.net', 'Centro Especialidades, Universidad Simón Bolívar. Pabellón 1, Valle de Sartenejas, Municipio Baruta. Distrito Sucre del Estado Miranda - Apartado 89000. (al sur de la ciudad de Caracas). ', 'Distrito Capital', '+58(414)153-98.68 / (212)906-32.48', '', '', '', '', ''),
(107, 'Milhem, Isaac', 'Cirugía Bucomaxilofacial', 'Hadassah University Hospital Jerusalen. Israel.', '1994', 'no posee', 'no posee', 'Av. Panteón. Edif. Centro Clínico Profesional Caracas. Piso 7. Consultorio 712. Urb. San Bernardino. Caracas. 1010.', 'Distrito Capital', '+58(212)574-77.20 / Fax:+58(212)574-37.13', '', '', '', '', ''),
(108, 'Mizrahi Amar, Max José', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2003', 'no posee', 'maxmizrahi@cantv.net', 'Av. Francisco de Miranda, Centro Lido, Piso 8. Ofic. 82. Urb. El Rosal. Caracas. 1060.', 'Distrito Capital', '+58(212)953-90.20 / 952-54.11', '', '', '', '', ''),
(109, 'Monserratte C., Ruth, S.', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2006', 'no posee', 'ruthmonserratte@hotmail.com', 'Calle Santa Ana, Edif. Nro. 30, Local B. Urb. Prado de María. 1040. Caracas.', 'Distrito Capital', '+58(212)515-98.73', '', '', '', '', ''),
(110, 'Monserat S., Enrique', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1982', 'no posee', 'no posee', 'Facultad de Odontología. Catedra de Cirugía Bucal, piso 1. Universidad Central de Venezuela. 1040. Caracas.', 'Distrito Capital', '+58(212)605-37.69 / 976-84.10', '', '', '', '', ''),
(111, 'Montilla García, Germán Odoardo', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1981', 'no posee', 'gmontil@gmail.com', 'Av. Luis Roche. Clínica IDET. Piso 3 Sur. Cons. 14. Urb. Altamira. Caracas. 1060.', 'Distrito Capital', '+58(212)287-91.18 / +58(414)327-99.31', '', '', '', '', ''),
(112, 'Morales Díaz Del Castillo, Eduardo Emilio', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1984', 'no posee', 'emoradiaz@cantv.net / dremorales@gmail.com', 'Av. Río Caura. Centro Comercial Concresa. Piso 2. Ofic. 409. Centro Odontológico Concresa. Urb. Prados del Este. Caracas. 1080. /Av. Lecuna. Esq. Velasquez. Torre Profesional del Centro. Piso 3. Cons.303. Urb. Sta. Teresa. Caracas. 1010.', 'Distrito Capital', 'Fax:+58(212)979-35.80 / 979-82.35 / 979-63.35 / Fax:+58(212)545-73.63', '', '', '', '', ''),
(113, 'Mujica, Reinaldo', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1981', 'no posee', 'reinaldomujica@gmail.com', 'Av. Circunvalación del Sol. Centro Profesional Santa Paula. PB. Local 4. Unidad Odontológica Especializada. Urb. Santa Paula. Caracas. 1061.', 'Distrito Capital', '+58(212)985-59.62 / 986-96.23', '', '', '', '', ''),
(114, 'Müller Rodríguez, Andreina', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2004', 'no posee', 'andreina_muller@hotmail.com', 'Av. 2. Centro Comercial EUBA. Local 19. Planta Alta. Urb. Montalban II, Caracas. 1020.', 'Distrito Capital', 'Fax+58(212)442-04.79', '', '', '', '', ''),
(115, 'Navarro, Tania', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1986', 'no posee', 'navarrot8@yahoo.com', 'Av. Francisco de Miranda. Centro Seguros La Paz. Piso 5. Ofic.N52A, ala Norte. Urb. La California Norte. Caracas. 1071.', 'Distrito Capital', '+58(212)234-76.38 / 235-86.39', '', '', '', '', ''),
(116, 'Navarro Oliveros, Jennifer A.', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2009', 'no posee', 'jenavar@gmail.com / jenavar@hotmail.com', 'Av. Luis Roche, Edif. Helena Piso 5, Apto 54. Urb. Altamira. Caracas. 1060. (Frente a la Plaza Francia de Altamira). ', 'Distrito Capital', '+58(212)286-66.16 / +58(416)640-63.00 / +58(414)246-19.63', '', '', '', '', ''),
(117, 'Navas Osteicochea, Yaneth Yexmina', 'Cirugía Bucal', 'Universidad del Zulia.', '2000', 'no posee', 'camidayaneth@hotmail.com', 'Av. Páez con callejón Loyola. Policlínica de la Guardia Nacional. Urb. El Paraiso. Caracas. 1020.', 'Distrito Capital', '+58(212)482-19.61 / +58(414)301-82.12', '', '', '', '', ''),
(118, 'Obregón, Tamara', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1987', 'no posee', 'no posee', 'Av. Principal. Edif. Multicentro Macaracuay. Piso 3. Ofic.06. Urb. Macaracuay. Caracas. 1071.', 'Distrito Capital', '+58(212)256-46.68 / 256-07.10', '', '', '', '', ''),
(119, 'Olmos Bello, Richard José', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2002', 'no posee', 'richardolmos@cantv.net', 'Av. Libertador. Centro Profesional Libertador. Piso 7, Cons. 7-A Urb. Sabana Grande. Caracas. 1050.', 'Distrito Capital', '+58(212)730-24.63', '', '', '', '', ''),
(120, 'Orellana, Alejandra', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1985', 'no posee', 'aleore@gmail.com', 'Facultad de Odontología. Piso 9. Cátedra de Farmacología. Universidad Central de Venezuela. 1040. Caracas.', 'Distrito Capital', '+58(212) 605-38.48', '', '', '', '', ''),
(121, 'Ortiz Arismendis, Isidoro', 'Cirugía Bucal', 'Universidad Central de Venezuela.', ' 2006', 'no posee', 'isidoroortizarysmendys@hotmail.com', 'Calle Santa Ana, Edif. Nro. 30, Local B. Urb. Prado de María. 1040. Caracas.', 'Distrito Capital', '+58(212)515-98.73', '', '', '', '', ''),
(122, 'Pacillo Tapia, Dayana Martha María', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2008', 'no posee', 'dayanapacillo@hotmail.com', 'Calle La Cinta, Qta. Venus, Urb. Las Mercedes, Caracas, 1060.', 'Distrito Capital', '+58(212)991-11.75 / 991-64.78 / 993-64.94 / 414-44.82 / Fax:+58(212)991-58.77 / +58(414)256-90.79', '', '', '', '', ''),
(123, 'Paiva Marcano, Yajaira', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1986', 'no posee', 'ypaiva@cantv.net / ypaiva@yahoo.com / ypaiva@hotmail.com / ypaiva@gmail.com', 'Av. El Empalme con calle Mirador. Torre 18. Piso 1. Ofic.1-B. Urb. La Campiña. Caracas. 1050.', 'Distrito Capital', '+58(212)730-97.87 / 731-02.45 / 730-65.79 / Fax:+58(212)731-75.77', '', '', '', '', ''),
(124, 'Papp, Esteban Ystvan', 'Cirugía Bucomaxilofacial', 'University of Minnesota. USA.', '1982', 'no posee', 'ystvan48@gmail.com', '4ta. Av. de Los Palos Grandes entre 5ta. y 6ta. Trasv. Qta. Araguaney. Urb. Los Palos Grandes. Caracas. 1060.', 'Distrito Capital', '+58(212)285-68.18 / 283-44.60 / 284-34.13 / 0414-324.72.59', '', '', '', '', ''),
(125, 'Parra Armas, Raúl', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1995', 'no posee', 'raulparra81@hotmail.com', 'Av. Las Repúblicas con Av. América Centro Comercial Terras Plaza. Nivel P2. Sistema Integral de Salud Oral SIS. Urb. Terrazas del Club Hípico, Caracas, 1080.', 'Distrito Capital', '+58(212)976-54.69 / 975-34.48', '', '', '', '', ''),
(126, 'Pérez González, Miguel Enrique', 'Cirugía Bucal', 'Universidad Central de Venezuela.', ' 2010', 'no posee', 'miguelperezve@gmail.com', 'Av. Fco. de Miranda. C.C. Parque Cristal, Nivel Mezzanina 2. Local 3. Urb. Los Palos Grandes, Caracas 1060 Miranda.', 'Distrito Capital', '+58(212)285-05.34', '', '', '', '', ''),
(127, 'Piñero Santana, Rómulo Efraín', 'Cirugía Bucal', 'Universidad Central de Venezuela. ', '2011', 'no posee', 'reps81@gmail.com / reps81@hotmail.com', 'Av. Casanova. Torre Citi Bank. Piso 6. Ofic. 65. Especialidades Odontológicas El Recreo. Urb. El Recreo. Caracas. 1050. /Av. Francisco de miranda, Edif. EASO. Piso 6. Ofic. 6-I. Grupo Odontológico EASO. Urb. El Rosal, Caracas. 1060. /Av. San Nicolas de Bari. Centro Comercial San Nicolás de Bari. Piso 2. Ofic. 7. Centro Odontológico Nueva Casarapa. Urb. Nueva Casarapa. Guarenas. 1220. Edo. Miranda.', 'Distrito Capital', '+58(212)761-81.05 / 761-84.66 / 761-96.06 / +58(212)953-75.26 / 951-59.34 / +58(212)381-03.37 / 582-48.91', '', '', '', '', ''),
(128, 'Ramos T., Alexis', 'Cirugía Bucal', 'Universidad Central de Venezuela. / Miami University. Fl. USA. ', '1997', 'no posee', 'torrealba310@hotmail.com', 'Av. Principal con calle La Solera. Centro Comercial La Tahona. Piso 2. Local 8. Urb. La Tahona. Caracas. 1083. /Av. La Trinidad. Centro Comercial Vizcaya. Piso 4. Local 58. Urb. Sta Paula. Caracas. 1061.', 'Distrito Capital', '+58(212)941-30.53 / +58(212)985-38.06', '', '', '', '', ''),
(129, 'Ravelo, Jorge I.', 'Cirugía Bucomaxilofacial', 'Miami University. Fl. USA.', '1987', 'no posee', 'jorge.ravelo@gmail.com', 'Av. Circunvalación del Sol. Centro Profesional Santa Paula. Torre A. Piso 8. Ofic. 89. Urb. Santa Paula. Caracas. 1061.', 'Distrito Capital', 'Fax:+58(212)985-11.81 / 985-49.42 / 985-86.38', '', '', '', '', ''),
(130, 'Ravelo Loreto, José Gregorio', 'Cirugía Bucomaxilofacial', 'Universidad Nacional Autónoma de México. México.', '2008', 'no posee', 'ravelocmf@gmail.com', 'Av. Circunvalación del Sol. Centro Profesional Santa Paula. Torre A. Piso 8. Ofic. 89. Urb. Santa Paula. Caracas. 1061.', 'Distrito Capital', '+58(212)985-11.81 / 985-49.42 / 985-86.38', '', '', '', '', ''),
(132, 'Rincón Quintero, Carlos Luis.', 'Cirugía Bucomaxilofacial', 'Universidad Nacional Autónoma de México -UNAM. México.', '1999', 'www.dentalworksdigital.com / www.clinicalafloresta.com', 'carlosrinconq@gmail.com / carlosrinconq@yahoo.com', 'Av. Blandín. Centro Comercial San Ignacio. Torre Copernico. Piso 4. Ofic. 4. Urb. Chacao. Caracas. 1060. /Av. Ppal. con calle Sta. Ana. Clínica La Floresta. Piso 2. Cons. 206. Urb. La Floresta. Caracas. 1060.', 'Distrito Capital', 'Fax:+58(212)267-41.25. / +58(212)284-89.87', '', '', '', '', '');
INSERT INTO `directorios` (`id`, `nombre`, `especialidad`, `universidad`, `ano`, `website`, `email`, `direccion`, `estado`, `telefonos`, `facebook`, `instagram`, `twitter`, `linkedin`, `image`) VALUES
(133, 'Rivas O, Mauricio J.', 'Cirugía Bucal', 'Universidad Central de Venezuela.', 'Â 2006', 'no posee', 'marivas62@hotmail.com', 'Av. Las Américas, C.C. Terras Plaza, Piso 5, Consultorio 5-C Urb. Terrazas del Club Hípico, Caracas. 1080.', 'Distrito Capital', 'Fax:+58(212)978-16.96', '', '', '', '', ''),
(134, 'Rodríguez Goncalves, Alejandra', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2008', 'www.tuimplantedental.com', 'dra.alejandra.rodriguez@gmail.com / Twitter: @timplantedenta /  Facebook: Tu Implante Dental', 'Av. La Salle. Grupo Médico Bucaral, Piso 5 Oficina 53. urb. Los Caobos, cerca de Plaza Venezuela', 'Distrito Capital', '+58(0212) 782-59.89 / 324-59.89', '', '', '', '', ''),
(135, 'Rojas Acevedo, Alexei Salvador', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1998', 'no posee', 'alexeirojas38@hotmail.com', 'Av. Lazo Marti. Centro Comercial Plaza Santa Mónica. P.B. Local 18, \"Especialidades Odontologicas Plaza Santa Mónica\". Urb. Santa Mónica. Caracas. 1040.', 'Distrito Capital', '+58(212)693-85.55 / 693-07.28', '', '', '', '', ''),
(136, 'Romero Aguilar, Erika Alejandra', 'Cirugía Bucal', 'Pontificia Universidad Javeriana. Colombia.', ' 2008', 'no posee', 'dra.eriromero@gmail.com', 'Calle California Centro Comercial California Mall PB. Centro de Especialidades Gamma Dental Plus. Urb. Las Mercedes. Caracas. 1060. Edo. Miranda.', 'Distrito Capital', '+58(212)991-15.54 / 992-76.21', '', '', '', '', ''),
(137, 'Romero De Johnston, Luisa', 'Cirugía Bucomaxilofacial', 'no posee', 'no posee', 'no posee', 'ninina@cantv.net', 'no posee', 'Distrito Capital', 'no posee', '', '', '', '', ''),
(138, 'Rosal O., Lucy Thairy', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2008', 'no posee', 'thairyrosal@gmail.com', 'Av. Fco. de Miranda. Edif. Caro. Piso 3. Ofic. 33. Chacao. Caracas. 1060.', 'Distrito Capital', '+58(212)263-22.34/ 265-99.49/ 265-47.83 / +58(414)324-80.19 / +58(212)283-43.92', '', '', '', '', ''),
(139, 'Salvia DAngelo, Anna María', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1999', 'no posee', 'annama@movistar.net.ve', 'Av. Andrés Bello entre Av. Fco. de Miranda y 1ª transversal. Edif. Atlantic, Piso 8. Ofic. 1-5. Urb. Los Palos Grandes. Caracas. 1060.', 'Distrito Capital', '+58(212)286-82.29 / 286-83.73 / Fax:+58(212)283-43.92', '', '', '', '', ''),
(140, 'Sánchez, Jadwiga Thamara', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1996', 'no posee', 'jaddwigas@yahoo.com', 'Facultad de Odontología. Cátedra de Radiología. Universidad Central de Venezuela. 1040. Caracas.', 'Distrito Capital', '+58(212)605-37.80', '', '', '', '', ''),
(141, 'Schummer Gutt, Elizabeth ', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2000', 'no posee', 'eschummer@cantv.net', 'Av. Panteón. Edif.Centro Caracas. Piso 5. Consultorio 5-F. Unidad de Odontología Especializada Centro Caracas. Urb. San Bernardino. Caracas. 1010.', 'Distrito Capital', '+58(212)576-80.55 / 576-80.39', '', '', '', '', ''),
(142, 'Segall Akerman, Norberto', 'Cirugía Bucomaxilofacial', 'Hadassah University Hospital Jerusalen. Israel. ', '1995', 'no posee', 'norbertosegalla@cantv.net', 'Av. Panteón. Edif.Centro Clínico Profesional Caracas. Piso 7. Consultorio 712. Urb. San Bernardino. Caracas. 1010.', 'Distrito Capital', '+58(212)574-77.20 / Fax:+58(212)574-37.13', '', '', '', '', ''),
(143, 'Segarra Michelena, Ana', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1999', 'no posee', 'anasegarra@gmail.com', 'Av. La Salle. Grupo Médico Bucaral. Piso 8. Consultorio 82. Urb. Los Caobos. Caracas. 1050.', 'Distrito Capital', '+58(212)794-17.96 / 793-58.79 / 793-06.72', '', '', '', '', ''),
(144, 'Seijas Brunicardi, Alberto ', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1980', 'no posee', 'no posee', 'Av. Este 2 con Av. México. Edif. San Luis Rey. Instituto Policlínico. Urb. Los Caobos. Caracas. 1050.', 'Distrito Capital', '+58(212)576-04.75Â  / Fax:+58(212)576-87.30', '', '', '', '', ''),
(145, 'Sillet Aceituno, Marianella', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2002', 'no posee', 'marianellasillet@gmail.com', 'Av. Fco. de Miranda. Centro Empresarial Miranda. Piso 4 Ofic.4P. Urb. Los Ruices. Caracas. 1070. /Av. Río Caura. C. C. Parque Humboldt. Piso 1. Ofic. 7B. Urb. Prados del Este. Caracas. 1080.', 'Distrito Capital', '+58(212)614-60.93 / +58(416)608-58.71 / +58(414)108-29.90 / +58(212)979-00.79 / 979-87.57', '', '', '', '', ''),
(146, 'Simarro Toro, Dario Rafael', 'Cirugía Bucal', 'Universidad Central de Venezuela.', ' 2008', 'no posee', 'dariosimarro@gmail.com', 'Av. Fco. de Miranda. Centro Perú Torre A. Piso 6. Ofic. 62. Chacao. Caracas. 1060.', 'Distrito Capital', '+58(212)264-19.10 / +58(412)578-33.09', '', '', '', '', ''),
(147, 'Sisiruca, Pablo ', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1961', 'no posee', 'ysasisi@cantv.net', 'Calle Bolívar. Edif. Borges. Planta Baja. Apt. 1. Urb. Chacao. Caracas. 1060.', 'Distrito Capital', '+58(212)265-14.16 / 265-08.90 / Fax:+58(212)977-02.43', '', '', '', '', ''),
(148, 'Sosa Sanchez, Rafael Dario', 'Cirugía Bucal', 'Universidad Central de Venezuela.', ' 1998', 'no posee', 'sosadario@cantv.netÂ  / sosadario@hotmail.com', 'Av. Libertador con Av. Las Palmas. Edificio Araguaney. Piso 3, consultorio 3-A. Consultorio Good`5. Urb. Las Palmas. Caracas. 1050.', 'Distrito Capital', '+58(212)793-47.21 / 793.61.31', '', '', '', '', ''),
(149, 'Tenreiro Niño, Pedro Pablo', 'Cirugía Bucomaxilofacial', 'University of Pennsilvania. USA.', '1989', 'www.ceo.com.ve', 'pedroten@cantv.net', 'Av. Principal. Centro de Especialidades Odontológicas. Piso 4. Urb. Chuao. Caracas. 1061.', 'Distrito Capital', '+58(212)991-96.66 / 991-97.57 / 991-68.65', '', '', '', '', ''),
(150, 'Tovar Flores, Janiouska Lorena', 'Cirugía Bucal', 'Universidad Central de Venezuela.', ' 2011', 'no posee', 'loregym18@hotmail.com', 'Av. Fco. de Miranda con calle \"A\", Edif. Rita, PB, Centro Dental Mil Sonrisas. Urb. Los Ruices. D.C. Caracas. 1071.', 'Distrito Capital', '+58(212)232-38.62 / +58(412)583-31.81', '', '', '', '', ''),
(151, 'Tovar Mattar, Ricardo', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2003', 'no posee', 'ricardotovarm@cantv.net  / rtovarmattar@hotmail.com', 'Av. Ppal. C.C. Galerías Los Naranjos, Nivel Oficinas I, Ofic. 01-78, Dental Plus. Urb. Los Naranjos. 1070. Caracas. /Av. San Rafael de La Florida. Qta. Armonía. Urb. La Florida. 1040. Caracas. /Av. Venezuela. Policlínica Americana Piso 5. Consultorio 5-D. Urb. El Rosal. Caracas. 1060.', 'Distrito Capital', '+58(212)216-30.70 / 216-30.80 / +58(212)731-53.58 / 731-46.21 / +58(212)992-93.04  / Fax:+58(212)963-46.33', '', '', '', '', ''),
(152, 'Trevisón, Luis', 'Cirugía Bucal', 'Northwestern University. IL. Chicago USA. ', '1969', 'no posee', 'no posee', 'Av. Principal. Clínica Santa Sofía. Urb. Santa Sofía. Caracas. 1061.', 'Distrito Capital', '+58(212)981-11.01 / 985-41.22', '', '', '', '', ''),
(153, 'Troncone Ochoa, Rómulo Antonio', 'Cirugía Bucomaxilofacial', 'Universidad de Concepción. Chile.', '2008', 'no posee', 'romulotronconeochoa@hotmail.com / ratron70@hotmail.com', 'Av. Sur de Altamira, Edif. Centro Médico Continental, Piso 3, Consultorio 3-3, Urb. Altamira. Caracas. 1060. /Entre calle Bogota y Av. Libertador, Resid. Giovanna, PB, Local 2. Grupo Médico y Odontológico del Este. Urb. Los Caobos Caracas. 1040. /Av. Teresa de la Parra con calle Ramón J. Mendez, Edif. Nueva Caracas, Clinica Nueva Caracas de Santa Mónica. Urb. Santa Mónica Caracas. 1050. /Av. Principal de Los Magallanes de Catia, Edif. Clinica Nueva Caracas de Catia. Piso 2, Consultorio 2-2, Caracas. 1030.', 'Distrito Capital', '+58(212)265-82.61 / 261-48.48 / 267-41.33 / 793-40.35 / 793-37.60 / 661-35.34 / 871-85.97 / 872-16.10 / 871-93.14', '', '', '', '', ''),
(154, 'Urbina Heredia, Evelyn', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2004', 'no posee', 'evelynurbinah@hotmail.com', 'Av. La Estancia. Centro Ciudad Comercial Tamanaco. Torre A. Piso 10. Oficina 1007. Body Light Center. Caracas. 1064.', 'Distrito Capital', '+58(212)959-56.86 / 959-66.61 / 959-66.40/ 959-59.76', '', '', '', '', ''),
(155, 'Vaamonde, José Enrique', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1985', 'no posee', 'no posee', 'Facultad de Odontología. Cátedra de Cirugía. Universidad Central de Venezuela. 1040. Caracas. /Av. Rossevelt. Torre Los Rosales. Piso 2. Ofic. 2-A. (Frente a Clínica Atías). Urb. Los Rosales. 1040. Caracas.', 'Distrito Capital', '+58(212)605-37.69 / 633-26.15', '', '', '', '', ''),
(156, 'Vélez Gimón, Henrique Jorge', 'Cirugía Bucomaxilofacial', 'Santa casa de misericórdia de Sao Paolo. Brasil. ', '2000', 'no posee', 'hvelezmaxilofacial@gmail.com', 'Av. Juan de Villegas. Centro Médico de Caracas, anexo \"B\" piso 1. Cons. 1C. Urb. San Bernardino. Caracas. 1010. /Av. Panteón. Centro Profesional Clínico. piso 6. Cons. 609. San Bernardino. Caracas. 1010. Venezuela.(:+58(212)5747309/5747976.', 'Distrito Capital', 'Fax:+58(212)551-32.33 / +58(414)237-93.99', '', '', '', '', ''),
(157, 'Viamonte González, María Daniela', 'Cirugía Bucomaxilofacial', 'Universidad Gran Mariscal de Ayacucho. ', '2013', 'no posee', 'mdviamonte@gmail.com / m_daniela9@hotmail.com', 'Av. Mariscal, cruce con Av. Francisco Fajardo. Edif Centro Uno. Piso 2. Consult. 22. Urb. San Bernardino. Caracas. 1010. /Calle Manzanares. Centro Comercial Manzanares Plaza. Nivel Mirador, Local C4-06. Urb. Manzanares. Caracas. 1080. Edo. Miranda.', 'Distrito Capital', '+58(212)715-08.85 / 551-80.70 /+58(414)106-34.48 / 58(414)106-34.48 / +58(212)941-20.34 / 941-53.37', '', '', '', '', ''),
(158, 'Villegas, Tomás', 'Cirugía Bucal', 'Jefferson Medical College Philadelphia. PA. USA.', ' 1959', 'no posee', 'no posee', 'Av. Principal. Centro de Especialidades Odontológicas. piso 4 Urb. Chuao. Caracas. 1061.', 'Distrito Capital', '+58(212)991-96.66 / 991-62.54', '', '', '', '', ''),
(159, 'Virguez Martínez, Yaidilys Nathalie', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2011', 'no posee', 'yaidivir@hotmail.com', 'Av. Urdaneta con Esquina de Animas, Edif. Iberia, Piso 5. Consultorio 5F, Parroquia La Candelaria. 1010. Caracas.', 'Distrito Capital', '+58(212)562-97.01', '', '', '', '', ''),
(160, 'Vivas, Pedro', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1967', 'no posee', 'no posee', 'Av. Libertador cruce con Negrin. Edif. Libergrin Apt. 2B. Urb. Sabana Grande. Caracas. 1050.', 'Distrito Capital', '+58(212)761-44.22 / 763-30.83', '', '', '', '', ''),
(161, 'Zambrano Goméz, Juan', 'Cirugía Bucomaxilofacial', 'Universidad Central de Venezuela.', '1970', 'no posee', 'no posee', 'Av. 1ra. Edif. Coral. Piso 1. Apt.13. Urb. Los Palos Grandes. Caracas. 1060.', 'Distrito Capital', '+58(212)284-79.65', '', '', '', '', ''),
(162, 'Zamora Rapale, Hernalice Del Valle', 'Cirugía Bucomaxilofacial', 'Universidad Gran Mariscal de Ayacucho. Hospital General del Oeste “José Gregorio Hernández”.', '2004', 'no posee', 'hernalicez@hotmail.com', 'Av. Francisco Solano López cruce con Calle Los Mangos, Centro Médico Tiara V. P.B., Cons. 3, Caracas. 1040.', 'Distrito Capital', '+58(212)762-95.01 / 761-05.90 Ext.18', '', '', '', '', ''),
(163, 'Barreto A., Ana Carolina', 'Cirugía Bucomaxilofacial', 'Universidad Peruana Cayetano Heredia. Perú.', '2005', 'no posee', 'dra.anabarreto@gmail.com', 'Av. La Industria cruce con calle Colombia. Grupo Médico, Anaco, 6003. Edo. Anzoategui. /Calle 12 Sur. Clínica Odontológica SOLUDENT, El Tigre, 6050. Edo. Anzoátegui.', 'Anzoategui', '+58(282)422-24.76 / +58(282)422-10.33 / +58(282)400-20.00 / +58(283)241-66.21 / +58(283)514-67.14 / +58(283)231-61-80.', '', '', '', '', ''),
(164, 'Cabello Carreño, Juan Francisco', 'Cirugía Bucomaxilofacial', 'Universidad Gran Mariscal de Ayacucho. ', '2011', 'no posee', 'juanfco2811@hotmail.com', 'Av. Ppal. de Lecheria C.C. Anna. Piso 2. Local 30-31 Lecheria. 6016. Edo. Anzoátegui', 'Anzoategui', '+58(281)514-82.35 / +58(281)514-82.37 / +58(424)181-25.05', '', '', '', '', ''),
(165, 'Carvajal Trias, Vladimir', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1982', 'no posee', 'no posee', 'Calle 10 Unión. N°5-33. Barcelona. 6001. Edo. Anzoátegui. Venezuela.', 'Anzoategui', '+58(281)277-13.31 / +58(281)277-13.31', '', '', '', '', ''),
(166, 'Guzmán Silva , Fidel', 'Cirugía Bucomaxilofacial', 'Miami University. Fl. USA.', '1992', 'no posee', 'fguzmansilva@gmail.com', 'Calle Mariño. Centro Comercial El Peñon del Faro, Nivel 3. Local A3-9. Lechería. 6016. Edo. Anzoátegui.', 'Anzoategui', 'Fax: +58(281)286-58.45 / 286-01.02', '', '', '', '', ''),
(167, 'Hernández Tabata, Oswaldo José', 'Cirugía Bucomaxilofacial', 'Universidad Autonoma de Ciudad Juarez. México', '2009', 'no posee', 'dr_oswaldohernandez@hotmail.com', 'Av. Principal. C.C. Aventura Plaza. Nivel Comercial Local 36 - C1 CEOMAX SC. Sector El Morro. Lecheria. 6016. Edo. Anzoátegui. /Av. Principal. Centro Poliespecialistico Day Hospital Unidad de Cirugía Maxilofacial. Lecheria. 6016. Edo. Anzoátegui.', 'Anzoategui', '+58(426)583-50.60 / +58(281)281-61.25 / 280-34.05 / +58(426)583-50.60 / +58(281)419-21.52', '', '', '', '', ''),
(168, 'Inojosa Marín, Hernán José', 'Cirugía Bucomaxilofacial', 'Universidad de Pernambuco. Brasil.', ' 1978', 'no posee', 'inojosah@hotmail.com', 'Av. Intercomunal Jorge Rodríguez. Centro de Rehabilitación Bucomaxilofacial, C.C. Cristal Plaza, PB. Local 06, Sector Colinas del Neverí. Barcelona. 6001. Edo. Anzoátegui.', 'Anzoategui', 'Fax: +58(281)286-5087 / 286-93.94 / +58(414)821-04.69', '', '', '', '', ''),
(169, 'Libertella Di Benedetto, Laura Antonella', 'Cirugía Bucomaxilofacial', 'Universidad del Zulia.', '2006', 'no posee', 'laura_libertella@hotmail.com / laura.libertella@gmail.com', 'Av. Caracas, Centro Médico Zambrano. Barcelona. 6001. Edo. Anzoátegui.', 'Anzoategui', 'Fax: +58(281)270-12.28 / +58(414)811-20.40', '', '', '', '', ''),
(170, 'Maldonado A., Pablo A.', 'Cirugía Bucal', 'Universidad del Zulia.', '2005', 'no posee', 'no posee', 'Calle Arismendi cruce con Av. Bolívar, Edif. San Andrés Nº 5-57. Clínica Odontológica San Pablo. Barcelona. 6001. Edo. Anzoátegui. (Diagonal a la Noticia de Oriente). /Manzana 3. Nª 34 Servicios Odontológicos Especializados Bucal y Maxilofacial (SERODONTES). Urb. Fundación Mendoza. Etapa 1. Barcelona. 6001. Edo. Anzoátegui. /Calle Pica de Maurica. Iglesia Nuestra Señora de Guadalupe. Asociación Damas Guadalupanas. Centro de Salud Parroquial Mons. Constantino Maradei Donato. Sector Buenos Aires. Barcelona. 6001. Edo. Anzoátegui.', 'Anzoategui', '+58(281)424-42.79 / +58(414)836-62.17 / +58(281)271-36.50  /  +58(281)277-06.08', '', '', '', '', ''),
(171, 'Mata Campos, Jesús Emilio', 'Cirugía Bucal', 'Universidad Autonoma de San Luis Potosi. México.', '2007', 'no posee', 'jesusmata71@hotmail.com / jesusmata71@gmail.com', 'Calle Mariño. Centro Comercial El Peñón del Faro, Planta Baja, Local A 1-12, Sector El Peñonal, Lechería. 6016. Edo. Anzoátegui.', 'Anzoategui', '+58(426)983-56.74 / +58(414)332-35.45 / Fax:+58(281)281-41.32', '', '', '', '', ''),
(172, 'Maza Anduze, Arístides', 'Cirugía Bucal', 'Universidad del Zulia.', ' 2007', 'no posee', 'aristidesmaza@gmail.com / aristidesmaza@cantv.net', 'Av. Ppal. Centro Comercial Morro Mar, Piso 1, Local 11, Imagen Radiográfica, Lechería. 6016. Edo. Anzoátegui.', 'Distrito Capital', '+58(281)287-11.86 / +58(281)286-49.91/ 286-11.48 / 286-30.73 / Fax:+58(281)286-11.48', '', '', '', '', ''),
(173, 'Mendez Perez, Reinaldo', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2010', 'no posee', 'reinaldomendez@hotmail.com', 'Calle Juncal, Edif. Santa Rosa. PB. N° 14, Centro de Especialidades Odontológicas Méndez De Luca. Pto. La Cruz. 6023. Edo. Anzoátegui.', 'Anzoategui', '+58(281)909-65.51/ +58(281)265-20.74 / +58(414)807-60.34', '', '', '', '', ''),
(174, 'Montilla Tosta, Cosme José', 'Cirugía Bucal', 'Universidad Nacional del RosarioArgentina.', '1974', 'no posee', 'cosmejmontillat@yahoo.com', 'Av. Bolívar. Edif. Renata, Mezzanina, Ofic.1, Pto. La Cruz. 6023. Edo. Anzoátegui.', 'Distrito Capital', '+58(281)267-20.24. / +58(414)820-55.13', '', '', '', '', ''),
(175, 'Morales, Angel', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2010', 'no posee', 'kenomora@hotmail.com', 'Carrera 32. Loc. S/N. Urb. El Recreo. Barcelona 6001. Edo. Anzoátegui.', 'Anzoategui', '+58(281)275-79.03 / +58(416)480-76.79', '', '', '', '', ''),
(176, 'Padra González, José Fernando', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1992', 'no posee', 'drjpadra@hotmail.com', 'Av. Principal. Centro Comercial Coconut Center. Unidad de Rehabilitación y Cirugía Buco-Maxilar. Piso 1. Local 1-1B. Lechería. 6016. Edo. Anzoátegui.', 'Anzoategui', '+58(281)281-50.55 / Fax: +58(281)281-41.47', '', '', '', '', ''),
(177, 'Paz Núñez, Jessica Milagros', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2008', 'no posee', 'jessicapazn@gmail.com', 'Av. Country Club. Centro Comercial Caribean Country. Piso 2. Local C-11. Barcelona. 6001. Edo. Anzoátegui.', 'Anzoategui', '+58(281)416-29.18', '', '', '', '', ''),
(178, 'Pinzón, Darwin', 'Cirugía Bucomaxilofacial', 'Universidad Gran Mariscal de Ayacucho.', '2005', 'no posee', 'darwinpinzons@hotmail.com', 'Av. Principal de Lechería, Centro Empresarial Lechería Piso 6. Ofic. 610, CCOMAX: Centro Clínico Odontológico y Maxilofacial Lechería C.A., Lechería, 6016. Edo. Anzoátegui.', 'Anzoategui', '+58(281)287-41.08 / 287-41.73 / +58(424)858-09.39', '', '', '', '', ''),
(179, 'Pulgar Alcala, Hermann Miguel', 'Cirugía Bucomaxilofacial', 'Pontificia Universidad Javeriana.', '2011', 'www.hpmaxilofacial.com', 'hermannpulgar@hotmail.com', 'Av. Principal de Lechería. C.C. Aventura Plaza. INNOVA Clínica de Especialidades. Nivel Comercial, Local 13. El Morro. Lecheria. 6016 Edo. Anzoategui.', 'Anzoategui', '+58(281)281-59.01 / +58(414)381-68.28', '', '', '', '', ''),
(180, 'Rivero Mejias, Elsa', 'Cirugí Bucal', 'Universidad del Zulia. ', '2000', 'no posee', 'riverel77@yahoo.com', 'Prolongación Av. Miranda. ClÃ­nica Nro. 8-159. detrás de la sede de la Gobernación de Anzoátegui. Barcelona. 6001. Edo. Anzoátegui. /Av. Cagigal. Universidad Gran Mariscal de Ayacucho. Cátedra de Cirugí y Patologí Bucal. Barcelona. 6001. Edo. Anzoátegui. /<div>HOSPITAL \"Dr. Luis Razetti.  SERVICIO  de Cirugí Plástica y BUCOMAXILOFACIAL. Bna. </div><div>Dirección: Av. CAJIGAL.  Qta VILLA LEIVA. Primer Piso.  Portugal Arriba.</div>', 'Anzoategui', 'Fax: +58(281)277-55.43 / +58(414)818-80.84', '', '', '', '', ''),
(181, 'Rodríguez Rojas, Roldán M.', 'Cirugía Bucomaxilofacial', 'Universidad Autónoma de Ciudad Juárez. México.', '2005', 'no posee', 'roldanmr@hotmail.com', 'Av. Intercomunal. C.C. Cristal Plaza, P.B, Ofic. 6. Centro de Rehabilitación Estética y Funcional Bucomaxilofacial, Barcelona. 6001. Edo. Anzoátegui.', 'Anzoategui', '+58(281)286-50.87 / 286-93.94 / +58(414)800-86.69', '', '', '', '', ''),
(182, 'Verona Guzman, Paolo Andrea', 'Cirugía Bucomaxilofacial', 'Hospital Militar Central de Bogotá - Universidad Militar Nueva Granada.Bogotá. Colombia.', '2008', 'no posee', 'veronapaolo@hotmail.com', 'Av. Fabricio Ojeda. C.C. Los Corales. Local 5-N1. Cimax Centro de Cirugía Maxilofacial. Lechería. 6016. Edo. Anzoátegui. /Calle Mariño. C.C. El peñón del Faro. Local A3-9. GEO Grupo Especialidades Odontológicas. Lechería. 6016 Edo. Anzoátegui. /Centro Clínico Santa Ana , Av principal urbanización Caribe pto la Cruz , Edo. Anzoátegui.', 'Anzoategui', '+58(414)822-20.51 / +58(281)286-58.54 / 286-01.02 /+58(414)822-20.51 / +58(281)500-92.62 / 500-92.56 / +58(414)822-20.51', '', '', '', '', ''),
(183, 'Fandiño Liscano, José Alcides', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1990', 'no posee', 'no posee', 'Calle 7. Hospital Universitario “Dr. Luís Razetti”. Servicio de Cirugía Bucal y Maxilofacial. Área de consulta PB. Barinas. 5201. Edo. Barinas. Barinas. 5201. Edo. Barinas. /Calle Irún. Centro de Especialidades Odontológicas ”Jesús de Nazareth”. Urb. Alto Barinas Sur, Cafinca I, Barinas. 5201. Edo. Barinas.', 'Barinas', '+58(273)541-37.53 / +58(273)533-17.90', '', '', '', '', ''),
(184, 'Paredes de Matheus Nancy Coromoto', 'Cirugía Bucomaxilofacial', 'Pontificia Universidad Católica do Rio Grande do Sul Brasil. ', '1994', 'no posee', 'mnmatheus78@gmail.com / mnmatheus78@hotmail.com', 'Av. Venezuela con Av. Blonval López. Instituto de Diagnóstico Varyná, Consult. 17. Barinas. 5201. Edo. Barinas. /Calle Aramendi. Centro Clínico del Llano. Centro. Barinas. 5201. frente a la Clínica el Pilar.Edo. Barinas. /Calle Aramendi. Centro Odontológico “Saint Poul”. Centro. Barinas. 5201. Edo. Barinas.', 'Barinas', '+58(273)400-71.00 Ext. 17 / +58(414)567-04.84  / +58(273)552-44.97 / +58(414)567-04.84 / +58(273)552-49.38 / +58(414)567-04.84', '', '', '', '', ''),
(185, 'Ramírez, Héctor Alonso', 'Cirugía Bucal', 'Universidad Central de Venezuela. ', '2011', 'no posee', 'harvoo@hotmail.com / harvcb@gmail.com', 'Calle Capri. Parcela 118. Local 1. Alto Barinas Norte. Barinas. 5201. (Detrás del C. C. Doña Grazzia).Edo. Barinas. /Av. 23 de Enero. Edif. Hotel Bristol. Local 1. Clínica Odontológica Dental Relax Center. Barinas. 5201. Edo. Barinas.', 'Barinas', '+58(273)541-99.85. / +58(273)417-18.66', '', '', '', '', ''),
(186, 'Toro Sanchez, Ricardo Enrique', 'Cirugía Bucomaxilofacial', 'Universidad de Carabobo.', '2002', 'no posee', 'ricardotoro@hotmail.com', 'Av. Rondón. Esquina Calle Mérida. Hospital Privado San Juan. Piso 2. Cons. N°30. Barinas. 5201. Edo. Barinas. /Calle Aramendi entre Av. Garguera y Vuelvan Caras. Grupo Corporativo Clínica Ntra. Sra. del Pilar (GCCNSP, C.A.) Edif. Anexo. Piso 2. Consult 08. Barinas. 5201. Edo. Barinas. /Calle Cedeño. Hospital Universitario “Dr. Luís Razetti”. Servicio de Cirugía Bucal y Maxilofacial. Barinas. 5201. Edo. Barinas.', 'Barinas', '+58(273)532-50.17 Ext. 147 / +58(424)515-80.36 /+58(273)400-94.09 / +58(273)400-94.10 / +58(273)533-38.68 Ext. 516 / +58(416)441-78.77', '', '', '', '', ''),
(187, 'Zamora Ledezma, María Andreina', 'Cirugía Bucomaxilofacial', 'Hospital General del Oeste \"Dr. José Gregorio Hernández\" Los Magallanes de Catia Caracas / Universidad Gran Mariscal de Ayacucho (UGMA). ', '2011', 'no posee', 'dra.mzamorita@gmail.com', 'Av. Garguera con Calle Aramendi. Edif. Farmacia Santa Rosa. Piso 1. Consultorio 2. Barinas. 5201. Edo. Barinas. /', 'Barinas', 'Fax:+58(426)877-39.82 / +58(273)511-82.33', '', '', '', '', ''),
(188, 'Bracho de La Rosa, Eresma Isabel', 'Cirugía Bucal', 'Universidad de Carabobo.', '2001', 'no posee', 'eresma37@hotmail.comÂ ', 'Av. Táchira. Centro Comercial Cristal, piso 1. Cons.4. Punto Fijo. 4101. Edo. Falcón.', 'Falcon', '+58(269)247-15.10 / 246-44.90 / +58(416)769-33.02', '', '', '', '', ''),
(189, 'Díaz C., Omaira', 'Cirugía Bucal', 'Universidad Central de Venezuela. ', '1986', 'no posee', 'no posee', 'Av. El Paseo. Policlínica de Especialidades. Urb. Casacoima. Punto Fijo. 4101. Edo. Falcón, Venezuela.', 'Falcon', '+58(269)246-11.39 / 250-15.94 / 245-88.20 / Fax:+58(269)246-11.39 / +58(414)693-00.70', '', '', '', '', ''),
(190, 'López De León, Álvaro Javier', 'Cirugía Bucal', 'Universidad del Zulia.', ' 2001', 'no posee', 'alvarolopezdeleon@hotmail.com', 'Calle Girardot. Entre Perú y Arango. Clínica Odontológica Santa Fé. Punto Fijo. 4101. Edo. Falcón.', 'Falcon', '+58(269)246-83.68', '', '', '', '', ''),
(191, 'Martínez Coronel, Mathías Alfredo José', 'Cirugía Bucomaxilofacial', 'Universidad Nacional Autónoma de México.', '2005', 'no posee', 'dr.mathiasmartinez@cantv.netÂ ', 'Calle Churuguara. Edif. Linares, Piso 1. Centro de Especialidades Odontológicas, Coro. 4101.(Al lado de la Plaza Linares). Edo. Falcón.', 'Falcon', '+58(268)252-69.91', '', '', '', '', ''),
(192, 'Maza González, Windy Ana', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2003', 'no posee', 'no posee', 'Prolongación Av. Girardot, Centro de Odontología Especializada. Urb. Santa Inés, Punto Fijo. 4101. Edo. Falcón.', 'Falcon', '+58(269)246-61.14 / +58(414)288-88.84', '', '', '', '', ''),
(193, 'Graterol Miranda, José Gregorio', 'Cirugía Bucomaxilofacial', 'Universidad de Carabobo.', '2011', 'no posee', 'jgraterol_01@hotmail.com', 'Av. Principal. Centro de Especialidades Odontológicas y Biomédicas Rómulo Gallegos. Edif. Doña Paula. P.B. Urb. La Morera. San Juan de Los Morros. 2301. Edo. Guárico. /Calle Araure. Policlínica San Juan. Urb. Los Laureles San Juan de los Morros. 2301. Edo. Guárico. (Solo Emergencias)', 'Guarico', '+58(246)431-82.96 / +58(416)548-31.33 / +58(246)431-86.01', '', '', '', '', ''),
(194, 'Ledezma Bastardo, Abigail Andrés', 'Cirugía Bucomaxilofacial', 'Universidad Nacional Autónoma de México -UNAM. México.', '2003', 'no posee', 'abiledez@yahoo.com', 'Calle Shettino. Torre Maestro PB. Clínica de Especialidades Odontológicas. Valle de La Pascua. 2350. Edo. Guárico.', 'Guarico', '+58(235)342-34.27', '', '', '', '', ''),
(195, 'Felzani Moreno, Ricardo', 'Cirugía Bucomaxilofacial', 'Pontificia Universidad Javeriana Bogotá. Colombia.', ' 2011', 'no posee', 'felzanius@yahoo.com', 'Prolongación Av. Gonzalo Picón. Centro Los Médanos. PB. Cons. 4. Merida. 5101. Edo. Mérida.', 'Merida', '+58(274)658-91.46 / +58(414)189-79.35', '', '', '', '', ''),
(196, 'Hernández Valecillos, Manuel Eduardo', 'Cirugía Bucomaxilofacial', 'Pontificia Universidad Javeriana Bogotá. Colombia.', '2005', 'no posee', 'mehv10@yahoo.com', 'Av. Las Américas, C.C. Plaza Mayor. Piso 3. Local 17. Mérida. 5101. Edo. Mérida.', 'Merida', '+58(414)746-34.64 / +58(274)244-14.21', '', '', '', '', ''),
(197, 'Malavé V., Juan', 'Cirugía Bucomaxilofacial', 'Universidad Puerto Rico. Puerto Rico.', '19??.', 'no posee', 'no posee', 'Av. 3. N° 29-28. Instituto de Gastroenterología. Piso 2. Mérida. 5101. Edo. Mérida.', 'Merida', '+58(274)252-59.97', '', '', '', '', ''),
(198, 'Martínez Cobos, Norma Angelica', 'Cirugía Bucomaxilofacial', 'Pontificia Universidad Javeriana Bogotá. Colombia.', '1998', 'no posee', 'normangelica1@hotmail.com', 'Av. Urdaneta con transv. 51, Grupo Empresarial Senda Sol, Centro de Cirugía Oral y Maxilofacial 5101. Edo. Mérida.', 'Merida', '+58(274)240-23.72 / Fax:+58(274)262-02.51 / +58(414)746-38.12', '', '', '', '', ''),
(199, 'Molina Barreto, Manuel Alfredo', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1995', 'no posee', 'rodeo29@gmail.com', 'Av. 2 con calle 41. Edif. Oficentro El Encanto. Piso 1. Ofic. 103. Urb. El Encanto. 5101. Edo. Mérida.', 'Merida', '+58(274)263-47.44', '', '', '', '', ''),
(200, 'Morantes Heredia, María Lorena', 'Cirugía Bucal', 'Pontificia Universidad Javeriana Bogotá. Colombia.', '2006', 'no posee', 'lorenamorantes200@hotmail.com', 'Av. Domingo Peña. Edif. El Mirador. Piso 1. Ofic. 1. Urb. Paseo La Feria. 5101. Edo. Mérida.', 'Merida', '+58(274)416-69.43 / +58(414)939-32.67', '', '', '', '', ''),
(201, 'Cano, Edgar', 'Cirugía Bucal', 'Hospital Aleman. Buenos Aires. Argentina.', '1979', 'no posee', 'edgarcano@hotmail.com', 'Carrera 22 entre Pasaje Pirineo y Médica. Local 6. Urb.Barrio Obrero . San Cristobal. 5001. Edo. Táchira.', 'Tachira', '+58(276)355-05.04', '', '', '', '', ''),
(202, 'Franceschini Roa, Francisco José', 'Cirugía Bucal', 'Universidad del Zulia.', '2012', 'no posee', 'franceschini_roa@hotmail.com', 'Calle 3, Qta. Maluli, Local Nº. 20-A, Centro de Ortodoncia y Ortopedia Maxilar Delgado. Urb. Los Naranjos, San Cristóbal, 5001. Edo. Táchira.', 'Tachira', '+58(414)749-83.20', '', '', '', '', ''),
(203, 'Ramírez, Héctor Alonso', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2011', 'no posee', 'harvoo@hotmail.com / harvcb@gmail.com', 'Calle 3. No. 6-30. Clínica DR. MEDICAL. Piso 1, Consultorio 4. Urb. Santa Inés. San Cristobal. 5001.(frente a la Cruz Roja). Edo. Táchira.', 'Tachira', '+58(276)343-32.97 / +58(426)513-17.73', '', '', '', '', ''),
(204, 'Rincón Pinzón Jhoan Alexander', 'Cirugía Bucomaxilofacial', 'Universidad Nacional de Colombia. Bogotá. Colombia.', '2013', 'no posee', 'unidadcirugiamaxilofacial@gmail.com', 'Av. 5ta. Centro Médico Uribante Piso 1. Consultorio 1-03. San Cristóbal. 5001. Edo. Táchira.', 'Tachira', '+58(276)516-15.61 / +58(424)716-75.62', '', '', '', '', ''),
(205, 'Bahamondes Ulloa, Maino Alexei', 'Cirugía Bucomaxilofacial', 'Universidad Pontificia Católica. Argentina. ', '2003', 'no posee', 'mainobahamondes314@gmail.com', 'Av. Principal. Hospital Central Dr. Placido Domingo Rodriguez Rivero. Servicio de Cirugía y Traumatologia Bucomaxilofacial. San Felipe. 3201. Edo. Yaracuy.', 'Yaracuy', 'Fax:+58(414)499-00.17', '', '', '', '', ''),
(206, 'Arias Monrroy, Alberto Alonso', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1999', 'no posee', 'no posee', 'Av. Las Delicias. C.C. Paseo Las Delicias. Nivel Terraza Ofic. T1. Maracay. 2101. Edo. Aragua.', 'Aragua', '+58(412)252-74.27', '', '', '', '', ''),
(207, 'Benaim Perez, Daniel Alberto', 'Cirugía Bucomaxilofacial', 'Universidad de Carabobo.', '2015', 'no posee', 'benaim0243@gmail.com', 'calle Valencia con calle Tariba #4 Qta. CEOM Centro de Especialidades Odontológicas Maracay. Consult. 5. Urb. San Miguel. Municipio Girardot. Parroquia Madre María de San José. Maracay. 2103. Edo. Aragua. /Av. Las Delicias. Centro Comercial Paseo Las Delicias I. Nivel Terraza Ofic. #T7. Maracay. 2101. Edo. Aragua. /Av. Las Delicias Centro Comercial Europa. Piso 3. Ofic. 307. Urb. La Floresta. Maracay. 2101. Edo. Aragua.', 'Aragua', '+58(243)247-10.45 / +58(243)247-05.62 / +58(424)370-98.03 / +58(424)341-69.90 / +58(424)335-40.68 / +58(243)219-23.25 / +58(416)646-02.74', '', '', '', '', ''),
(208, 'Borjas García, Raúl ', 'Cirugía Bucomaxilofacial', 'Hospital Central de Valencia “Dr. Enrique Tejera”.', '1991', 'no posee', 'rborjas31@hotmail.com', 'Av. Sucre N°61-63 Centro Empresarial Sucre, Piso 2, Ofic. 2-B, Urb. Calicanto, Maracay. 2101. Edo. Aragua.', 'Aragua', '+58(243)237-84.45 / +58(416)643-64.68', '', '', '', '', ''),
(209, 'Contreras Márquez, María Virginia', 'Cirugía Bucal', 'Universidad del Zulia.', '2013', 'no posee', 'dramariavcontreras@gmail.com', 'Av. Principal La Arboleda con calle Araguaney, PB. Local 34, Consultorio Uldent. Urb. La Arboleda, Maracay. 2101. Edo. Aragua.', 'Aragua', '+58(243)218-94.21', '', '', '', '', ''),
(210, 'Linares Vivas, Julio José', 'Cirugía Bucomaxilofacial', 'Universidad de Carabobo.', '2013', 'no posee', 'juliojlinares@gmail.com', 'Av. Las Delicias. UNIDEMO. Unidad de Espelalidades Maxilofaciales y Ortodónticas. PB. Urb. El Toro. Maracay. 2102. Aragua.', 'Aragua', '+58(243)242-89.28 / +58(414)343-83.19', '', '', '', '', ''),
(211, 'Quintela Contreras, Antonio Javier', 'Cirugía Bucomaxilofacial', 'Hospital Central de Valencia CHET.', '2006', 'www.orthocenter.com.veÂ ', 'antonioquintela77@hotmail.comÂ  /  cedeomca@hotmail.com', 'Calle Leonardo Ruiz Pineda N 7. Centro de Especialidades Odontológicas Las Mayas. PB Local 07-A. Urb Las Mayas. El Limón. Maracay. 2105. Edo Aragua. /Av. Sucre, Centro Empresarial Sucre. PB. Local PB3, Ortho center C.a. Urb. Calicanto, Maracay. 2101. Edo. Aragua. /Av. Principal Las Delicias con Av. Casanova Godoy. Centro Médico Maracay. Piso 3 Consult. 3-13. Odontosmile C.A. Urb. El Bosque. Maracay. 2101. Edo. Aragua.', 'Aragua', '+58(414)588-13.44 / +58(243)283-06.26 / +58(243)237-18.70 / +58(414)446-52.11 / +58(243)283-43.08', '', '', '', '', ''),
(212, 'Sierra Rebolledo, Alejandro Antonio', 'Cirugía Bucal', 'Universidad de Barcelona. España.', '2003', 'no posee', 'alejosierra75@hotmail.com', 'Av. Mariño Sur Nro 69. Centro Odontologico Mariño. PB Urb. Libertad. Maracay. 2104. Aragua.', 'Aragua', '+58(243)245-98.98 / +58(414)412-53.05 / +58(414)412-53.05', '', '', '', '', ''),
(213, 'Tagliaferro Arjona, Antonio Luis', 'Cirugía Bucomaxilofacial', 'Hospital Enrique Tejera.', '1993', 'no posee', 'antoniotagliaferro@gmail.com', 'Calle López Aveledo Norte, Torre Calicanto I, Piso 4 Ofic. 4-5. Urb. Calicanto. Maracay. 2101. Edo. Aragua.', 'Aragua', '+58(243)246-70.78 / +58(414)344-56.57', '', '', '', '', ''),
(214, 'Vivas Zambrano, Mauro J.', 'Cirugía Bucomaxilofacial', 'Universidad de Carabobo.', '2003', 'no posee', 'maurovivas@cantv.net', 'Cons.: 1. 1era Transv. Edif Rincón de los Toros Piso 6. Cons. 62, Urb. Calicanto. Maracay. 2101. Edo. Aragua. /Cons.:2. Calle Pichincha. Centro Médico Cagua, Torre Anexa, Piso 4. Cons. 6. Cagua. 2101. Edo. Aragua.', 'Aragua', '+58(243)245-15.54 /245-09.23 / +58(244)396-10.34 / (416)643-38.78', '', '', '', '', ''),
(215, 'Arrieta Nava, Williams Alberto', 'Cirugía Bucomaxilofacial', 'Universidad de Buenos Aires. Argentina.', '1999', 'no posee', 'williams.arrieta@gmail.com', 'Calle Aro con Carrera Guri. Torre El Alferez. Piso 1. Ofic. 1-5. Urb. Alta Vista Sur. Pto. Ordaz. Edo. Bolivar.-8050.', 'Bolivar', '+58(286)962-54.62 / 962-16.76 / +58(416)686-08.38 / +58(414)764-82.19', '', '', '', '', ''),
(216, 'Castro Mata, Magdelin Josefina', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2008', 'no posee', 'magdelincm@hotmail.com / magdelincastro@yahoo.com', 'Av. Guayana con Av. Gumilla, Clínica Humana, Consultorio Teotiste, Piso 1, San Felix, Edo. Bolivar.', 'Bolivar', '+58(286)890-02.43 / +58(416)645-85.30', '', '', '', '', ''),
(217, 'Pernía Castro, Carolina de Los Angeles', 'Cirugía Bucomaxilofacial', 'IVSS Hospital Dr. Domingo Luciani. ', '2015', 'www.unisportmed.com', 'perniaca@hotmail.com', 'Av. Bolivia. Clinica Puerto Ordaz.Torre I. PB, Consul. Nro. 6. Puerto Ordaz. 8050. Ciudad Guayana. Edo. Bolivar.', 'Bolivar', '+58(286)316-22.63Â ', '', '', '', '', ''),
(218, 'Sanabria Gómez, Carlos Alberto', 'Cirugía Bucomaxilofacial', 'Universidad de Buenos Aires.', '2001', 'no posee', 'sanabrialuongo@hotmail.com', 'Calle Nigeria, Instituto Odontomaxilofacial IOMAX, Urb. Villa Africana. Puerto Ordaz. Edo. Bolivar.-8050.', 'Bolivar', '+58(286)961-91.11 / 961-31.22', '', '', '', '', ''),
(219, 'Castro Mata, Magdelin Josefina', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2008', 'no posee', 'magdelincm@hotmail.com / magdelincastro@yahoo.com', 'Calle Dalla Costa Nº 136, Urb. Santa Cecilia, Tucupita. 6401. Edo. Delta Amacuro.', 'Delta Amacuro', '+58(287)721-32.93 / +58(416)645-85.30', '', '', '', '', ''),
(200, 'Almeida Grau, Daniella Carolina', 'Cirugía Bucal', 'Pontificia Universidad Javeriana. Bogotá. Colombia.', ' 2009', 'no posee', 'krolalmeida@hotmail.com / daniella.almeida18@gmail.com', 'Av. La Paz con calle Cumaná. Edif.53. Piso 1. Clínica Dental Garciacasafranca. Consultorio 2. Urb. Las Avenidas. Maturín. 6201. Edo. Monagas. /Av. Fuerzas Armadas, C.C. Aconcagua, piso 1, Mi Punto Dental. Maturín, 6201. Edo. Monagas.', 'Monagas', '+58(291)896-03.84 /+58(291)642-59.40 / +58(414)160-11.21 / +58(291)644-01.89 / +58(291)896-03.84 / +58(414)160-11.21', '', '', '', '', ''),
(201, 'Mata Campos, Jesús Emilio', 'Cirugía Bucomaxilofacial', 'Universidad Autonoma de San Luis Potosi. México.', ' 2007', 'no posee', 'jesusmata71@hotmail.com / jesusmata71@gmail.com', 'Av. Luis Del Valle García, Clínica Santa Sofía, Piso 3, Consultorio 3-03, Maturín, 6201. Edo. Monagas.', 'Monagas', '+58(426)983-56.74 / +58(414)332-35.45', '', '', '', '', ''),
(202, 'Bonilla Perez, Carolina', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2000', 'www.odontovilma.comÂ ', 'carobonillap@hotmail.com', 'Prolongación Av. 4 de Mayo. Centro Profesional Atrium. Torre B. Piso 2 Ofc.224 Porlamar. 6301. Isla de Margarita. Edo. Nueva Esparta.', 'Nueva Esparta', '+58(295)263-24.43Â +58(416)627-71.51 / +58(414)395-61.80', '', '', '', '', ''),
(203, 'Castillo Rojas, Leoncio Alberto ', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1998', 'no posee', 'cordal@cantv.net', 'Calle El Colegio. C.C. Makro. Piso 1 Ofic.12. Porlamar. 6301. Isla de Margarita. Edo. Nueva Esparta.', 'Nueva Esparta', '+58(295)263-76.67', '', '', '', '', ''),
(204, 'Reyes Rodríguez, Orlando', 'Cirugía Bucomaxilofacial', 'Universidad Nacional Autónoma de México. México.', '2009', 'www.clinicanova.com.veÂ ', 'dr_reyesmaxilofacial@hotmail.com', 'Av. Bolívar. Centro Empresarial AB. Nivel Mezzanina. Local 26. Pampatar. 6301. Isla de Margarita. Edo. Nueva Esparta. Venezuela.', 'Nueva Esparta', '+58(295)2621027Â / Movil Celular +58(414)2751382', '', '', '', '', ''),
(205, 'Hernández Alezard Magleny', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2009', 'www.serviciosmediplan.comÂ ', 'gp_grupoprofesional@hotmail.com', 'Prolongación Av. 4 de Mayo. C.C. La Redoma. Centro Odontológico GP Grupo Profesional. 2a etapa, Piso 1, Local No. 83, Los Robles. 6301. Isla de Margarita. Edo. Nueva Esparta.', 'Nueva Esparta', '+58(295) 262-98.41 / 262-41.31 / 262-42.43Â  / +58(414)338-13.18', '', '', '', '', ''),
(206, 'González Quiñones, Rosa María ', 'Cirugía Bucal', 'Universidad del Zulia.', '2001', 'no posee', 'rosamgonzalezq@hotmail.com', 'Calle Sucre Centro Empresarial Chavelo. Piso 2. Cons. 2-3. Cumaná, 6101. Edo. Sucre.', 'Sucre', '+58(293)431-16.98/ +58(414)883-98.20', '', '', '', '', ''),
(207, 'González Sánchez, Alberto José', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2001', 'no posee', 'no posee', 'Calle Quebrada Honda con Independencia. Edif. Don Pablo. Piso 1. Cons. 3-A. Carupano. 6150. Edo. Sucre.', 'Sucre', '+58(294)331-50.08', '', '', '', '', ''),
(208, 'Madriz Valerio, Mariana de Los Angeles', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2011', 'no posee', 'madrizmariana@gmail.com / madrizmariana@hotmail.com', 'Av. Santa Rosa, Centro Profesional El Caserío, Planta Alta, Loc. 05. Cumaná. 6101. Edo. Sucre. /Av. Independencia, Edif. Clínico La Fe. Piso 2. Carúpano. 6150. Edo. Sucre.', 'Sucre', '+58(293)433-26.83 / +58(416)217-15.52  / +58(416)217-15.52', '', '', '', '', ''),
(209, 'Agüin Rodríguez, José', 'Cirugía Bucomaxilofacial', 'Pontifícia Universidade Católica do Río Grande do Sul (PUCRS). Porto Alegre. RS. Brasil.', '1983', 'no posee', 'no posee', 'Av.97. Unidad Odontológica Integral. Urb. San José de Tarbes 138. Piso 2. Ofic.2-6. Valencia. 2001. Edo. Carabobo.', 'Carabobo', '+58(241)824-55.26', '', '', '', '', ''),
(210, 'Alvarado Rodríguez, Eduardo José', 'Cirugía Bucomaxilofacial', 'Universidad de Carabobo.', '2001', 'no posee', 'ealvarados@hotmail.com / eduardoalvarados@yahoo.es', 'Av. Bolivar Norte Torre Valencia (cerca del Ateneo de Valencia). piso 5. Consultorio 5-2. Valencia. 2002. Edo. Carabobo. /Av. Principal Este Oeste. Centro de Especialidades Quirúrgicas Santa Barbara. Urb. La Isabelica. Valencia. 2002. Edo. Carabobo.', 'Carabobo', '+58(241)857-87.68 / +58(241)832-58.18', '', '', '', '', ''),
(211, 'Alvarez Flores, Elpídio Antonio', 'Cirugía Bucomaxilofacial', 'Universidad de CaraboboHospital Universitario Dr Angel Larralde IVSS.', '1993', 'no posee', 'elpidioalvarez@cantv.net', 'Calle Rondón con Av. 5 de Julio. N°95-49. Edif. Anexo Torre A del Centro Médico Dr. Rafael Guerra Méndez. piso 2. Consultorio 025. Valencia. 2001. Edo. Carabobo.', 'Carabobo', '+58(414)359-26.10 / +58(241)859-69.16 / Fax:+58(241)856-10.25', '', '', '', '', ''),
(212, 'Alvarez Ortega, Tonny', 'Cirugía Bucomaxilofacial', 'Universidad de Carabobo.', '2010', 'no posee', 'tonnyalvarez@gmail.com', 'Calle Rondón con Av. 5 de Julio. Centro Médico Dr. Rafaél Guerra Méndez, Torre D, Piso 6, Consultorio 612. Valencia, 2001. Edo. Carabobo.', 'Carabobo', '+58(426)545-04.95', '', '', '', '', ''),
(213, 'Castro Sanchez, Hylene Cipriana', 'Cirugía Bucomaxilofacial', 'Hospital Central de Valencia Enrique Tejera. Insalud.', '1994', 'no posee', 'hylene1@hotmail.com', 'Av. Nueva Valencia. Distribuidor Naguanagua. Sector La Florida N° 96- A-300,  Hospital Metropolitano del Norte. Piso 2 Consultorio #15. Valencia. 2002. Edo. Carabobo.', 'Carabobo', '+58(241)867-67.01 / 868-75.80 / +58(416)640-84.55 / Fax:+58(241)867-28.75', '', '', '', '', ''),
(214, 'Chirinos Farrera, Federico Daniel', 'Cirugía Bucomaxilofacial', 'Universidad de Carabobo.', '2014', 'no posee', 'fede_chirinos@hotmail.com', 'Calle 139, Nº. 104-45, Clínica El Viñedo. Urb. El Viñedo, Valencia, 2001. Edo. Carabobo.', 'Carabobo', '+58(241)300-12.16 / +58(241)824-99.61 / +58(414)422-36.33/ +58(412)220-56.90', '', '', '', '', ''),
(215, 'Cohen Eizaga, Omar', 'Cirugía Bucomaxilofacial', 'Universidad de Buenos Aires. Argentina.', '1975', 'no posee', 'omarcohen@hotmail.com / coheneizagaomar@hotmail.com / omarcohen3386@gmail.com', 'Calle Navas Spínola c/c Calle Cedeño #88-376 Maternidad del Este. PB. Consultorio 11. Valencia. 2001. Edo Carabobo.', 'Carabobo', '+58(241)859-10.55 / 859-37.74 / 859-34.46 /+58(414)433-66.95', '', '', '', '', ''),
(216, 'Delgado Bello, Carmelo José', 'Cirugía Bucomaxilofacial', 'Ciudad Hospitalaria Dr. Enrique Tejera.', '2012', 'no posee', 'cjdelgado1985@gmail.com', 'Calle Rondón. Centro Médico Guerra Mendez. Torre D. Piso 6. Consultorio 612. Valencia. 2001. Edo. Carabobo.', 'Carabobo', '+58(414)480-15.99 / +58(426)246-05.01', '', '', '', '', ''),
(217, 'Diaz Parraga, Luis Fernando', 'Cirugía Bucomaxilofacial', 'New York University. NY. USA.', '1984', 'no posee', 'topodp@gmail.com', 'Calle 153. Centro Diagnóstico La Alegría. Urb. La Alegría. Piso 2. Cons. 203. Valencia. 2001. Edo. Carabobo.', 'Carabobo', '+58(241)823-79.10Â / Fax:+58(241)823-79.46', '', '', '', '', ''),
(218, 'Eizaguirre Colombo, Juan Luis', 'Cirugía Bucomaxilofacial', 'Universidad de Carabobo.', '2009', 'no posee', 'juaneizaguirre@yahoo.com', 'Calle Rondon, Av. 5 de julio. Centro Médico \"Dr. Rafael Guerra Méndez\". Torre \"D\" Piso 6. Consultorio 612. Valencia. 2001. Edo. Carabobo.', 'Carabobo', '+58(424)413-38.88', '', '', '', '', ''),
(219, 'González Rodríguez, Luis Vicente', 'Cirugía Bucomaxilofacial', 'Pontificia Universidad Javeriana. Bogotá. Colombia.', '2006', 'no posee', 'luiscirujano@gmail.com', 'Av. 102, No. 102-223, Centro Comercial Caribean Plaza, Modulo 7, Local 157. Especialidades Odontológicas Caribean Plaza. Valencia. 2001. Edo. Carabobo.', 'Carabobo', '+58(241)821-83.40', '', '', '', '', ''),
(220, 'Guerra, Omar Del Valle', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1993', 'no posee', 'omar_guerra03@hotmail.com', 'Carretera vía Borburata-Quizandal. Hospital Naval Franscisco Isnardi Puerto Cabello Edo. Carabobo.', 'Carabobo', '+58(242)360-12.83  / Fax:+58(242)361-11.09', '', '', '', '', ''),
(221, 'Gutierrez Reyes, Jóvita Alejandra', 'Cirugía Bucal', 'Universidad del Zulia.', '2007', 'no posee', 'jgutierrez74ve@hotmail.com', 'Cl. 111. Edif. Clínica Los Colorados, Local 103-A-120. Urb. Los Colorados. Valencia. Carabobo.', 'Carabobo', '+58(414)194-63.73', '', '', '', '', ''),
(222, 'Illesca Escudero, Isabel Matilde', 'Cirugía Bucomaxilofacial', 'Universidad de Carabobo.', '2001', 'no posee', 'iillesca@hotmail.com', 'Av. Los Fundadores, Centro Clinico Los Fundadores. piso 1; consultorio No. 7, Bejuma. Edo. Carabobo. 2040. Edo. Carabobo.', 'Carabobo', '+58(249)793-45.52 / +58(416)647-75.89', '', '', '', '', ''),
(223, 'Lazo Portell, Luis Octavio', 'Cirugía Bucomaxilofacial', 'Universidad de Carabobo.', '2011', 'no posee', 'lucholazo@gmail.com', 'Av. Andrés Eloy Blanco. Centro Profesional Prebo. Piso 3. Ofic. 3-21. Urb. Prebo. Valencia. 2001. Estado Carabobo.', 'Carabobo', '+58(241)822-02.37 / +58(416)641-43.61', '', '', '', '', ''),
(224, 'López, Heriberto', 'Cirugía Bucal', 'Universidad de Carabobo.', '1992', 'no posee', 'oscarkatty@cantv.netÂ ', 'Calle Rondón. N°95-49. Centro Médico Guerra Méndez. Piso 2. Cons. 025. Valencia. 2001. Edo. Carabobo.', 'Carabobo', '+58(241)856-10.25 / 859-69.16', '', '', '', '', ''),
(225, 'López De León, Álvaro Javier', 'Cirugía Bucal', 'Universidad del Zulia.', '2001', 'no posee', 'alvarolopezdeleon@hotmail.com', 'Calle Independencia con Av. Montes de Oca. Torre Empresarial Araujo. Piso 5. Valencia. 2001. Edo. Carabobo.', 'Carabobo', '+58(241)858-77.27 / +58(414)416-33.67', '', '', '', '', ''),
(226, 'Malavé Farina, Domingo Antonio', 'Cirugía Bucomaxilofacial', 'University of Pittsburgh. PA. USA.', '1993', 'no posee', 'domingomalave@cantv.net', 'Av. Ppal. Inst. Doc. de Urología. Piso 5. Consultorio 514/516. Urb. La Viña. Valencia. 2001. Edo. Carabobo.', 'Carabobo', 'Fax:+58(241)825-29.01', '', '', '', '', ''),
(227, 'Martínez Coronel, Mathías Alfredo José', 'Cirugía Bucomaxilofacial', 'Universidad Nacional Autónoma de México. México.', '2005', 'no posee', 'dr.mathiasmartinez@cantv.netÂ ', 'Av. Carabobo, Policlínico Valencia (Clinica La Viña). Torre C, Piso 3. Cons. 317. Urb. La Viña, Valencia. 2002. Edo. Carabobo.', 'Carabobo', '+58(241)820-29.17 / +58(414)142-80.15', '', '', '', '', ''),
(228, 'Meza Briceño, Alberto José', 'Cirugía Bucal', 'CESB Faculdade INGA Sao Paulo. Brasil.', '2014', 'no posee', 'albertojmezab@gmail.comÂ ', 'Av. Cabriales. C.C. Profesional La Trigaleña, Piso 1, Consultorio Gm03 Urb. La Trigaleña, Valencia, 2001. Edo. Carabobo.', 'Carabobo', '+58(241)619-30.34/ +58(241)842-20.97 / +58(412)177-40.21', '', '', '', '', ''),
(229, 'Mora, Oscar', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1990', 'no posee', 'oscarkatty@cantv.netÂ ', 'Calle Rondón con 5 de Julio. N°95-49. Centro Médico Guerra Méndez. Piso 2. Cons. 025. edif. Anexo. Valencia. 2001. Edo. Carabobo.', 'Carabobo', '+58(241)856-10.25 / 859-69.16', '', '', '', '', ''),
(230, 'Muñoz Gelvez, Rubén Enrique', 'Cirugía Bucomaxilofacial', 'Universidad de Carabobo.', '2002', 'www.smilecare.com.ve', 'cir_bucomaxilofacial@hotmail.com / rubenmg88@hotmail.com', 'Final de la Av. Carabobo. Instituto Docente de Urología. Piso 5. Consultorios 506, 508, 510, 512. Urb. La Viña. Valencia. 2001. Edo. Carabobo. /Av. Valencia, Centro Científico Metropolitano del Norte, Piso 1, Pasillo A, Consultorio 1-4 A. Sector La Florida. Naguanagua. 2005. Edo. Carabobo. /Av. Principal, Centro Comercial Shopping Center, Piso 1. Local 271. Plaza Central. Smile Care, Urb. Prebo. Valencia. 2001. Edo. Carabobo.', 'Carabobo', '+58(241)825-29.01 / Fax:+58(241)823-39.79 / +58(414)414-78.82 / +58(241)615-67.27 / +58(241)824-01.12 ', '', '', '', '', ''),
(231, 'Nieto Briceño, Luis', 'Cirugía Bucomaxilofacial', 'Pontificia Universidad Javeriana. Bogotá. Colombia.', '2010', 'no posee', 'cmfvalencia@gmail.com', 'Av. Principal. Centro Comercial Prebo. Centro de Especialidades Prebo. Nivel 2. Local T3 y T4. Urb. Prebo. Valencia. 2001. Edo. Carabobo.', 'Carabobo', 'Fax:+58(241)821-57.51. Fax:+58(241)823-73.02 / +58(414)046-80.83 / +58(412)422-13.56', '', '', '', '', ''),
(232, 'Perdomo Bonometti, Atilio', 'Cirugía Bucomaxilofacial', 'Hospital Rawson. Buenos Aires. Argentina.', '1969', 'no posee', 'aperdomo@hotmail.com', 'Calle Rondón con 5 de Julio. Centro Médico Guerra Méndez. Valencia. 2001. Edo. Carabobo.', 'Carabobo', 'Fax:+58(241)856-11.09 / 857-04.63 / 857-08.60', '', '', '', '', ''),
(233, 'Perdomo Bonometti, José Alejandro', 'Cirugía Bucomaxilofacial', 'Hospital Rawson. Buenos Aires. Argentina.', '1974', 'no posee', 'no posee', 'Calle Rondón con 5 de Julio. Centro Médico Guerra Méndez. Valencia. 2001. Edo. Carabobo.', 'Carabobo', '(/Fax:+58(241)856-11.09 / 857-04.63 / 857-08.60', '', '', '', '', ''),
(234, 'Ramos, Glenda', 'Cirugía Bucal', 'Universidad de Carabobo.', '1991', 'no posee', 'glendaramos80@hotmail.com', 'Av. Principal. Centro Comercial Prebo. Centro de Especialidades Prebo. Nivel 2. Local T3 y T4. Urb. Prebo. Valencia. 2001. Edo. Carabobo.', 'Carabobo', '+58(241)821-57.51 / Fax:+58(241)822-73.02', '', '', '', '', ''),
(235, 'Vera Villavicencio, Omar José', 'Cirugía Bucomaxilofacial', 'Pontificia Universidad Javeriana. Bogotá. Colombia.', '2005', 'no posee', 'odonto30@hotmail.com', 'Av. Ppal. Centro Médico Guerra Mendez, Torre “D”, Consultório 401. Valencia. 2001. Edo. Carabobo.', 'Carabobo', '+58(241)857-21.59', '', '', '', '', ''),
(236, 'Villasmil Suarez, Luis Guillermo', 'Cirugía Bucomaxilofacial', 'Ciudad Hospitalaria Dr Enrique Tejera (CHET).', '2006', 'no posee', 'luisguillermovillasmil@gmail.com', 'Calle 110, Instituto de Especialidades Quirúrgicas Los Mangos IEQ. Piso 3. Consultorio 8. Urb. Los Mangos.Valencia 2001. Edo. Carabobo.', 'Carabobo', '+58(241)617-44.91 / +58(414)423-73.49', '', '', '', '', ''),
(237, 'Curiel Damiani, Luisana', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2012 / 2015', 'no posee', 'luisanacuriel@hotmail.com', '<b></b>Calle Urape. San Román, Unidad de otorrinolaringología, otoneurología, y cirugía maxilofacial. Uniotoneuro. Urológico San Román, Anexo B. Caracas.', 'Distrito Capital', '+58(212)999-05.89 / 999-05.90 / 993-60.03 / 993-24.10 / 992-19.78 / +58(416)414-20.44', '', '', '', '', ''),
(238, 'Ludo Vargas, Gabriela Jeniree', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2015', 'no posee', 'od.gabrielalugo@gmail.com', '<b></b>Av. Francisco de Miranda, Centro Perú, Torre A, Piso 9, Consultorio 99. Chacao, Caracas.<b></b><b></b>', 'Distrito Capital', '+58(212)264-78.69/ +58(426)111-05.37 / +58(412)993-04.06', '', '', '', '', ''),
(239, 'Parraga, Gabriela', 'Cirugía Bucal', 'Universidad de Barcelona. España.', '2011', 'no posee', 'gabiparraga@yahoo.com', 'Av. Venezuela del Rosal. Policlínica Américana. piso 4. cons. 4-A. Caracas.<b></b>', 'Distrito Capital', '+58(212)952-23.41â€¬', '', '', '', '', ''),
(240, 'Ortíz Villegas, María de Jesús', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2015', 'no posee', 'dra.mariaortiz85@gmail.com', ' Av. La Estancia, Centro Comercial Ciudad Tamanaco Clínica ArtDental nivel C1, ofc 05. Urbanización Chuao. / Boulevar de Sabana Grande, Edificio Don Domingo piso 2 consultorio 03. Frante al Centro Empresarial. Parroquia El Recreo.', 'Distrito Capital', '+58(212)959-08.10 / 959-16.14 / +58(212)763-04.96 /  +58(426)517-68.45 / +58(412)605-62.25', '', '', '', '', ''),
(241, 'Petit Lorusso, Carlos Luis', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2016', 'no posee', 'carlospetit@gmail.com', 'Los Teques', 'Distrito Capital', '+58(424)894-16.79', '', '', '', '', '');
INSERT INTO `directorios` (`id`, `nombre`, `especialidad`, `universidad`, `ano`, `website`, `email`, `direccion`, `estado`, `telefonos`, `facebook`, `instagram`, `twitter`, `linkedin`, `image`) VALUES
(242, 'Vargas Urbina, Fernando', 'Cirugía Bucomaxilofacial', 'Hospital General del Oeste ', '2010 / 2017', 'no posee', 'fvargasmaxilofacial@gmail.com', 'Chacao, calle La Joya, entre Av. Fco de Miranda y Av. Libertador, Edf. Cosmo, piso 4, ofic 4D, Caracas.', 'Distrito Capital', '+58(212)267-57.36 / +58(416)906-16.17', '', '', '', '', ''),
(243, 'Contreras Castellanos, Carlos', 'Cirugía Bucomaxilofacial', 'Universidad Nacional Autónoma de Mexico -UNAM. Mexico.', '2015', 'no posee', 'carlosecontrerasc@gmail.com', 'Centro Profesional Tamanaco CCCT Nivel C1 ofic 50. Caracas. / Avenida Los Oficentro Picacho Piso 3 Ofic 3 A. San Antonio de Los Altos. Edo. Miranda.', 'Distrito Capital', '+58(212)959-15.15 / 371-10.47 / +58(412)390-83.07', '', '', '', '', ''),
(244, 'Rodriguez Albornoz, Marco Antonio', 'Cirugía Bucomaxilofacial', 'no posee', '2007', 'no posee', 'Mrodriguezalbornoz@gmail.com', 'Centro Profesional Santa Paula. Caracas', 'Distrito Capital', '+58(414)123-83.81', '', '', '', '', ''),
(245, 'Rodriguez Albornoz, Marco Antonio', 'Cirugía Bucomaxilofacial', 'no posee', '2007', 'no posee', 'Mrodriguezalbornoz@gmail.com', 'Urb week end catia la mar. Edo. Vargas', 'Vargas', '+58(414)123-83.81', '', '', '', '', ''),
(246, 'Rodriguez Albornoz, Marco Antonio', 'Cirugía Bucomaxilofacial', 'no posee', '2007', 'no posee', 'Mrodriguezalbornoz@gmail.com', 'Centro comercial Bayside. Porlamar. Edo. Nueva Esparta', 'Nueva Esparta', '+58(414)123-83.81', '', '', '', '', ''),
(247, 'Speranza Bermudez, Grace del Valle', 'Cirugía Bucomaxilofacial', 'Universidad Central de Venezuela. / IVSS Hospital Universitario \"Dr. Angel Larralde\".', '2015', 'no posee', 'Speranzagrace@gmail.com', ' Puerto Cabello - Valencia. Edo. Carabobo.', 'Carabobo', '+58(412)538-69.16', '', '', '', '', ''),
(248, 'Meza Di Prizio, Mariana de Los Ángeles', 'Cirugía Bucal', 'Universidad del Zulia.', '2016', 'no posee', 'Marimedipri@gmail.com', 'Villa Colombia Clínica Puerto Ordaz. torre II piso 4 Consultorio 2.Ciudad Guayana. Puerto Ordaz. Edo. Bolívar.', 'Bolivar', '+58(414)710-69.36', '', '', '', '', ''),
(249, 'Castillo Pérez, Ysiel Patricia', 'Cirugía Bucal', 'Universidad del Zulia.', '2015', 'no posee', 'ysielcastillo@gmail.com', 'Calle 73 con Av. 15ª. Edif. Laguna de Morrocoy. Planta baja. Maracaibo. Edo. Zulia', 'Zulia', '+58(261)751-70.98 / +58(414)689-27.04', '', '', '', '', ''),
(250, 'Reyes Rodríguez, Orlando', 'Cirugía Bucomaxilofacial', 'Universidad Nacional Autónoma de México. México.', '2009', 'www.clinicamaxor.com.ve', 'clinicamaxor@gmail.com / @maxilocaracas', 'Clínica Maxor. Centro Profesional Santa Paula. Torre B, piso 1 of. 111, Santa Paula, El Cafetal, Caracas. 1060. Venezuela. /Emergencias. Clínica Santiago de León de Caracas. Av.Urdaneta, Caracas.', 'Distrito Capital', '+58(212)985-55.21 / +58(212)987-47.98  / +58(426)596-01.07', '', '', '', '', ''),
(251, 'Artigas Hidrobo, Gustavo Ramón ', 'Cirugía Bucal', 'La Universidad del Zulia', '2011', 'no posee', 'artigasgustavo@hotmail.com', 'Av. Francisco de Miranda. Centro Comercial Plaza Center. Local 3. Consultorio 3. Carora. 3050. Edo. Lara. Venezuela.', 'Lara', '+58(252)414-69.33 /+58(412)915-80.23', '', '', '', '', ''),
(252, 'Báez Guirola, Gustavo Adolfo', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2003', 'no posee', 'gustavobaez40@gmail.com', 'Av. Los Leones con Urb. El Parral. Torre Milenium, piso 10, Ofic. 10-7. Barquisimeto. 3001. Edo. Lara.', 'Lara', '+58(251)255-37.16 / +58(416)650-08.68 / +58(412)515-08.68', '', '', '', '', ''),
(253, 'Bahamondes Ulloa, Maino Alexei', 'Cirugía Bucomaxilofacial', 'Universidad Pontificia Católica Argentina.', '2003', 'no posee', 'mainobahamondes314@gmail.com', 'Av. Lara con Av. Los Leones. V Etapa. Centro Comercial Rio Lama. Torre de Oficinas Piso 4. Ofic 4-2. Parroquia Santa Rosa. Municipio Irribarren. Barquisimeto. 3001. Estado Lara.', 'Lara', '+58(414)499-00.17 / +58(251)254-77.90', '', '', '', '', ''),
(254, 'Díaz Ibarra, María Fernanda', 'Cirugía Bucal', 'Universidad Pontificia Universidad Javeriana. Bogotá-Colombia. ', '2010', 'no posee', 'mariafernanda106@hotmail.com', 'Av. Madrid entre Av. Los Leones y Av. Caracas Centro Empresarial Plaza Madrid Piso 5 Ofic.5-4. Barquisimeto. Edo. Lara.', 'Lara', '+58(414)333-74.65', '', '', '', '', ''),
(255, 'Iglesias Guanipa, Fernándo Antonio', 'Cirugía Bucomaxilofacial', 'Universidad Nacional Autónoma de Mexico.', '1998', 'no posee', 'faig@hotmail.com', 'Av. Los Comuneros. Multicentro Los Leones. Piso 1. Ofic. 1-6, Urb. El Parque. Municipio Iribarren, Barquisimeto. 3001. Edo. Lara.', 'Lara', '+58(251)255-16.64 / 254-82.35 / +58(416)651-15.66', '', '', '', '', ''),
(256, 'Linares Vivas, Julio José', 'Cirugía Bucomaxilofacial', 'Universidad de Carabobo.', '2013', 'no posee', 'juliojlinares@gmail.com', 'Av. Los Leones. Torre Inter. Piso 7. Centro Odontológico Rodríguez del Este. Barquisimeto. 3001. Edo. Lara.', 'Lara', '+58(251)253-69.70', '', '', '', '', ''),
(257, 'Zamora Ledezma, María Andreina', 'Cirugía Bucomaxilofacial', 'Hospital General del Oeste / Universidad Gran Mariscal de Ayacucho (UGMA).', '2011', 'no posee', 'dra.mzamorita@gmail.com', 'Prolongación Av. La Salle entre Av. Las Industrias y Florencio Jiménez. Hospital del Instituto Venezolano de los Seguros Sociales Dr. Pastor Oropeza Riera. Servicio de Odontología, Parroquia Juan de Villegas, Municipio Iribarren , Barquisimeto. 3001. Edo. Lara. /Carrera 17 con Calle 19. Centro de Especialidades 17.19. Módulo B, Ofic. 5. Barquisimeto. 3001. Edo. Lara. /Av. Intercomunal Barquisimeto – Cabudare con Av. La Montañita, Hospital Internacional de Barquisimeto. Urb. Las Mercedes, Cabudare. 3023. Edo. Lara.', 'Lara', '+58(251)435-51.75 / +58(426)877-39.82', '', '', '', '', ''),
(258, 'Ares Luick, Anna Victoria', 'Cirugía Bucal', 'La Universidad del Zulia.', '2006', 'no posee', 'anitaares@hotmail.com', 'Calle 76 con avenida 3Y, Torre de Consultórios Amado, piso 7, Consultorio C-42, Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(261)797-93.38 / +58(414)633-40.15', '', '', '', '', ''),
(259, 'Armas García, Jonny José', 'Cirugía Bucal', 'La Universidad del Zulia.', '2000', 'no posee', 'cirugia_jonny@hotmail.com', 'Calle 76 con Av. 8 Santa Rita. Centro Médico de Occidente. Consultorio Nº 2. Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(261)711-92.34 / +58(424)643-90.63', '', '', '', '', ''),
(260, 'Bogarín, Jorge', 'Cirugía Bucomaxilofacial', 'Universidade do São Paolo Brasil.', '1982', 'no posee', 'no posee', 'Av. 8(Santa Rita) N°86A-18, piso 2. Local 7. Centro de Rehabilitación Bucal. Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(261)721-24.22  / +58(416)666-32.33', '', '', '', '', ''),
(261, 'Cárdenas Atencio, María Alejandra', 'Cirugía Bucal', 'La Universidad del Zulia.', '2006', 'no posee', 'maleja73@gmail.com', 'Av. 16 con calle 69, C.C. Las Cascadas. Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(261)759-07.49 / +58(414)638-22.45', '', '', '', '', ''),
(262, 'Olivares Uzcátegui, Amado Enrique', 'Cirugía Bucal', 'La Universidad del Zulia.', '2013', 'no posee', 'olivares_amado@hotmail.com', 'Calle Dr Portillo. Centro Profesional Jimeno Jimenez. P.B. Maracaibo. 4001. Edo. Zulia. /calle 72 con Av. 10. Edif. de OK 101. Clínica Unibet 72. Maracaibo. 4001. Edo Zulia.', 'Zulia', '+58(424)652-98.80 / +58(424)625-88.01', '', '', '', '', ''),
(263, 'Cedeño Prieto, Alejandro David', 'Cirugía Bucal', 'La Universidad del Zulia.', '2012', 'no posee', 'alejandrocedeno@hotmail.com', 'Av. 15 con calle 67B. Edif. Delicias Plaza PB. Local # 3. Clínica Belisario Soto. Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(261)783-17.82 / 759-43.77 / 743-50.02 / +58(414)645-42.60', '', '', '', '', ''),
(264, 'Collantes Duarte, Carlos Alejandro', 'Cirugía Bucomaxilofacial', 'Universidad Nacional Autónoma de Mexico -UNAM-.', '2002', 'www.cirugiamaxilofacial.amawebs.comÂ ', 'carloscollantes01@hotmail.com', 'Av. Universidad con calle 11. Torre Paraíso, Piso 5. Consultorio 5-13, Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(261)742-85.30 / +58(414)360-10.98 / +58(414)640-03.69', '', '', '', '', ''),
(265, 'Consuegra Guzmán, Juan Miguel', 'Cirugía Bucal', 'Universidad de Santiago de Compostela. España.', '2006', 'no posee', 'drjmconsuegra@gmail.com', 'Av. 8 Santa Rita entre calles 72 y 73 Clínicas Master Dent. Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(261)798-22.55 / +58(414)362-78.83 / +58(424)675-40.09 / +58(412)790-37.43', '', '', '', '', ''),
(266, 'Erdody Montero, Gunther Hans', 'Cirugía Bucomaxilofacial', 'Universidad Nacional Autónoma de México. México.', '2009', 'no posee', 'gerdody@gmail.com', 'Ave. 12 con Ave. Universidad. Torre Promotora Paraíso. Piso 4. Consultorio 404. Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(261)717-22.99 / +58(414)165-00.21', '', '', '', '', ''),
(267, 'Franceschini Roa, Francisco José', 'Cirugía Bucal', 'La Universidad del Zulia.', '2012', 'no posee', 'franceschini_roa@hotmail.com', 'Av. 5 de Julio con 3E C.M. Padre Claret. Clínica Odontológica Álvarez Parra. Maracaibo. 4001. /Av. Intercomunal, Centro Comercial La Tropicana, Nivel PA, Local 1, Centro Clínico Dental Health, Sector Tropicana. Ciudad Ojeda. 4019.', 'Zulia', '+58(414)749-83.20 / +58(414)749-83.20', '', '', '', '', ''),
(268, 'Galué Morán, Luz Irene', 'Cirugía Bucal', 'La Universidad del Zulia.', '2006', 'no posee', 'luzgalue@hotmail.com /  luzgalue@yahoo.com', 'Av. 9b com calle 72. Especialidades Médicas Claret. Consultório Nº 4. Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(261)797-22.96 / +58(414)617-73.16', '', '', '', '', ''),
(269, 'Guillen Rivera, Gerardo José', 'Cirugía Bucomaxilofacial', 'Universidad de Puerto Rico.', '2009', 'no posee', 'geraldguillenr@hotmail.com', 'Av. 3-Y entre calles 76 y 77. Torre de Estacionamiento Policlínica Amado. Clínica Guadalupe. Local 4. Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(261)814-36.84 / 211-03.97 / +58(414)600-92.34 / +58(426)300-69.58', '', '', '', '', ''),
(270, 'Jiménez González, Mayerling Elena', 'Cirugía Bucal', 'La Universidad del Zulia.', '2008', 'no posee', 'mayerlingjimenez@yahoo.com', 'Av. 8. Sta. Rita. con calle 86A. Edif. Centro de rehabilitación bucal. Piso 5. Consult. 19 y 20. Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(414)647-31.74', '', '', '', '', ''),
(271, 'Jiménez Suárez, Norinma Elizabeth', 'Cirugía Bucomaxilofacial', 'Universidad Nacional Autónoma de México. México.', '2003', 'no posee', 'norinmajimenez@yahoo.es', 'Av. 8 Santa Rita con calle 85 # 84-126 Edif. Policlínica San Luis. Piso 3. Consultorio 3-4. Maracaibo. 4001. Edo. Zulia. (al lado de la Clínica Falcón)', 'Zulia', '+58(261)798-03.76 Ext. 141. / +58(414)618-62.84', '', '', '', '', ''),
(272, 'López Arana, Ruth Coral', 'Cirugía Bucomaxilofacial', 'Universidad Nacional Autónoma de Nicaragua.', '1985', 'no posee', 'ruthcorallopez@hotmail.com', 'Av. Principal de Amparo, Torre Consultorios, Centro Médico La Sagrada Familia. PB-3, Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(261)400-51.91 / +58(416)861-61.06 / +58(424)605-49.78', '', '', '', '', ''),
(273, 'Lozano Salas, Alfonso José', 'Cirugía Bucomaxilofacial', 'Universidad Puerto Rico. Puerto Rico.', '1983', 'no posee', 'lozanoalfonso13@gmail.com', 'Av. 3 C. Esq. Calle 67. Edif. Resd. Del Lago. Piso 2. Nro.2-3. Clínica de Cirugía Bucal y Maxilo-facial. Maracaibo. 4001. Edo. Zulia. /Av. 8. CENTRO MEDICO DE OCCIDENTE Consultorio # 24. Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(261)792-81.91 / 791-58.12 / +58(416)661-27.67 / +58(414)650-40.39', '', '', '', '', ''),
(274, 'Luengo Gotopo, María Eugenia', 'Cirugía Bucomaxilofacial', 'Hospital Central de Valencia Enrique Tejera. Insalud.', '2004', 'no posee', 'eugeluen2000@gmail.com', 'Carretera Nacional. Clinica Norte y Sur de Lagunillas PDVSA, Lagunillas. 4016. Edo. Zulia.', 'Zulia', '+58(414)412-18.85', '', '', '', '', ''),
(275, 'Maldonado Ibáñez, Carla Virginia', 'Cirugía Bucal', 'La Universidad del Zulia.', '2006', 'no posee', 'maldonado.carla@gmail.com', 'Av. 9 con calle 75. Clínica del Norte. Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(261)814-11.63 / +58(414)611-21.70 / +58(412)789-57.94', '', '', '', '', ''),
(276, 'Molina Delgado, César Orlando', 'Cirugía Bucal', 'La Universidad del Zulia.', '2002', 'no posee', 'cesaromolina@yahoo.com', 'Av. 15 Delicias con Calle 69, Clínica IZOT. Torre de Consultorios. Piso 3. Consultorio 10 A. Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(261)617-40.69 / +58(414)645-59.25', '', '', '', '', ''),
(277, 'Moncada Escorcia, Ricardo Alfonso', 'Cirugía Bucomaxilofacial', 'Universidade Federal do Ceará. Fortaleza. Brasil.', '1992', 'no posee', 'ricardomoncada@hotmail.com', 'calle 75 con Av. 8. Centro Médico de Occidente. Planta Baja. Cons. 49. Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(261)798-74.68 ext.110. / Fax:+58(261)792-94.02', '', '', '', '', ''),
(278, 'Morales H., Carmen Coromoto', 'Cirugía Bucomaxilofacial', 'Universita di Roma. Italia.', '1973', 'no posee', 'coromotomorales@latinmail.com', 'Av. 13 c/c 66 A #66-A-26. Edif. Don Edmundo. Piso 1. Apto. 1-A. Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(261)722-15.35 / 797-66.39 / +58(261)791-50.30 / +58(414)362-20.90', '', '', '', '', ''),
(279, 'Papa, Alfonsina', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1997', 'no posee', 'alfonsinapapac@yahoo.com', 'Av.58. Sector Amparo. Conj. Resd. Terraza de Maracaibo. Edif. Sta. Rita. Piso 5 Apto. C. Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(261)778-27.78 / +58(416)766-77.88', '', '', '', '', ''),
(280, 'Parra González, Sandra Lucía', 'Cirugía Bucal', 'La Universidad del Zulia.', '2005', 'no posee', 'salupago@hotmail.com', 'Av. 15 Delicias. Hospital Clinico de Maracaibo, Planta Baja, Área de Emergências. Urb. La Trinidad. Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(261)740-18.48 / +58(414)364-37.47', '', '', '', '', ''),
(281, 'Patiño Contreras, Yelitza Beatriz', 'Cirugía Bucal', 'La Universidad del Zulia.', '2010', 'no posee', 'yelab78@hotmail.com', 'Av. 3C, Edif. Hospital Coromoto, Urb. La Lago. Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(424)512-37.68 / (412)774-22.51', '', '', '', '', ''),
(282, 'Ramírez Matheus, Dubines Junior', 'Cirugía Bucomaxilofacial', 'Pontificia Universidade Católica Do Río Grande Do Sul.', '2004', 'www.odontolaser.org / www.dubinesramirez.blogspot.comÂ ', 'dubinesramirez@hotmail.com / odontolasermcbo@gmail.com', 'Av. 8 Santa Rita con calle 85 # 84-126 Edif. Policlínica San Luis. Piso 4. Consultorio 4-3. Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(261)797-41.57 / +58(261)719-79.52 / +58(414)679-38.08', '', '', '', '', ''),
(283, 'Rincón Duarte, Bernardo', 'Cirugía Bucal', 'La Universidad del Zulia.', '2006', 'no posee', 'harrisdenta2008@yahoo.com', 'Calle 86A con Av. 8 Centro de Rehabilitación Bucal. Piso 3. Consultorio 12 Hospital de Especialidades Pediatricas. Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(261)722-32.78 / +58(414)605-91.65', '', '', '', '', ''),
(284, 'Rodríguez Navarro, Hermestilia', 'Cirugía Bucal', 'La Universidad del Zulia.', '2007', 'no posee', 'otiliacastillo@hotmail.com', 'Calle 70 entre avenidas 15-B y 15-C. Consultorio Odontológico Interdental, Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(261)815-36.82 / +58(424)625-60.22', '', '', '', '', ''),
(285, 'Romero Reinoso, Luis Manuel', 'Cirugía Bucomaxilofacial', 'Universidad Nacional Autónoma de México. México.', '2004', 'no posee', 'luismatit@yahoo.com', 'Av. Bella Vista con calle 64. Torre San Lorenzo Piso 1. Instituto Odontológico San José. Maracaibo. 4001. Edo. Zulia. /Av. 5 de julio con calle 72. C.C. Tamacuary. CEOT Centro de Especialidades Odontológicas Tamacuary. Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(261)614-78.48 / +58(414)655-98.33', '', '', '', '', ''),
(286, 'Sarmiento Salas, Luis Alberto', 'Cirugía Bucal', 'La Universidad del Zulia.', '2002', 'no posee', 'sarmientoluis@cantv.net / luissarsa@yahoo.com', 'Calle 67 con Ave. 3C. Edif. Residencias del Lago. Ofic. 2-3. Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(261)791-58.52 / 792-81.91 / +58(416)560-93.15', '', '', '', '', ''),
(287, 'Suárez Araque, Yulianna', 'Cirugía Bucal', 'La Universidad del Zulia.', '2011', 'no posee', 'yulisuarez@hotmail.com', 'Calle 85 con Av.8. Santa Rita. Centro Comercial Nerilu. Local 5. Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(261)717-23.95 / +58(424)650-47.47 / +58(414)619-06.00', '', '', '', '', ''),
(288, 'Urdaneta Bolívar, María Isabel', 'Cirugía Bucal', 'La Universidad del Zulia.', '2009', 'no posee', 'mariaisabelu@hotmail.com', 'Av. 8 Santa Rita Centro Médico de Occidente. Consultorio 24. Maracaibo. 4001. Edo. Zulia. /Av. 3C esquina calle 67. Local 2 – 3. Clínica de Cirugía Bucal y Maxilofacial. Dr. Alfonso Lozano. Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(261)791-58.12', '', '', '', '', ''),
(289, 'Uzcátegui González, Ana María', 'Cirugía Bucal', 'La Universidad del Zulia.', '2013', 'no posee', 'anamu1977@gmail.com', 'Av. 16 Guajira, via a Ziruma, Hospital Universitario de Maracaibo. Maracaibo. 4001. Edo. Zulia.', 'Zulia', '+58(414)617-77.53', '', '', '', '', ''),
(290, 'Del Valle A., Sol Cristina', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1996', 'www.solcristina.com', 'solcristinadelvalle@hotmail.com / solcri@gmail.com', 'Av. J.M. Lozada. Instituto Odontológico Margarita. Urb. Sabanamar. Porlamar. 6301. Isla de Margarita. Edo. Nueva Esparta. Venezuela.', 'Nueva Esparta', '+58(295)264-77.85 /Â +58(295)264-74.50', '', '', '', '', ''),
(291, 'Maza Anduze, Arístides', 'Cirugía Bucal', 'Universidad del Zulia.', '2007', 'no posee', 'aristidesmaza@gmail.com / aristidesmaza@cantv.net', 'Av. Ppal. Centro Comercial Morro Mar, Piso 1, Local 11, Imagen Radiográfica, Lechería. 6016. Edo. Anzoátegui. Venezuela.', 'Anzoategui', '58(281)287-11.86 / +58(281)286-49.91 / 286-11.48 / 286-30.73 / Fax:+58(281)286-11.48', '', '', '', '', ''),
(292, 'Barrios Marcano, Rafael Vicente ', 'Cirugía Bucomaxilofacial', 'Hospital Central de Valencia Enrique Tejera. Insalud.', '2013', 'no posee', 'rafaelbarrios_cbmf@hotmail.com', 'Urb.  la Trigaleña. CC Trigaleña Plaza. Centro Médico Trigaleña Plaza.Piso 1.. Consultorio GM-15. Valencia, 2001. Edo. Carabobo. Venezuela.', 'Carabobo', '+58(416)642-35.33 +58(414)497-35.53', '', '', '', '', ''),
(293, 'Torres Villasana, Juan Manuel', 'Cirugía Bucomaxilofacial', 'Ciudad Hospitalaria Dr Enrique Tejera (CHET). ', '2007', 'no posee', 'drjuanmtorres@gmail.com / @drjuantorres.maxilo', 'Urb. El Viñedo av. Monseñor Adams. Centro Empresarial Talislandia pb 12. Valencia', 'Carabobo', '+58 414-045.51.71Â /  +58 0241 711-29.25', '', '', '', '', ''),
(294, 'Aoun-Nimr, George ', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '1984', 'no posee', 'aoungeo@hotmail.com', 'Calle 20 con Av.Las Palmas. Centro Profesional Arca. Ofic.1-16. Barquisimeto. 3001. Edo. Lara, Venezuela.', 'Lara', '+58(251)252-29.63 /+58(416)651-55.94.', '', '', '', '', ''),
(295, 'Heredia Morales, Néstor Alejandro', 'Cirugía Bucomaxilofacial', 'Universidad Gran Mariscal de Ayacucho UGMA. / Hospital General del Oeste ', '2014', 'www.drnestorheredia.com.ve', 'drheredianestor@gmail.com', 'Avenida Madrid entre Av. Los Leones y Av. Caracas, Centro Empresarial PlazaMadrid, Piso 7, Ofic.7-1. Parroquia Santa Rosa, Municipio Iribarren, Barquisimeto. 3001. Edo. Lara. Venezuela.', 'Lara', '+58(251) 435-55.69 / +58(414)074-79.69', '', '', '', '', ''),
(296, 'Bustamante López, Gustavo Adolfo ', 'Cirugía Bucal', 'Universidad del Zulia.', '2002', 'no posee', 'tavo238@hotmail.com / @cirugiabucal', 'Avenida Fuerzas Armadas. Nueva Clínica D\'empaire. Piso 1. Consultorio 1-14. Maracaibo. 4001. Edo. Zulia, Venezuela.', 'Zulia', '+58(261)741-63.29 / +58(414)648-36.42', '', '', '', '', ''),
(297, 'Ortiz Guzmán, Yscarlett', 'Cirugía Bucomaxilofacial', 'Universidad Gran Mariscal de Ayacucho. Hospital General del Oeste José Gregorio Hernández', '2017', 'no posee', 'yscaortiz@gmail.com', 'Avenida Circunvalación del Sol Centro Profesional Santa Paula Torre A', 'Distrito Capital', '04142638841', '', '', '', '', ''),
(298, 'Ferrer Mora, Wendy', 'Cirugía Bucal', 'Universidad del Zulia', '2016', 'no posee', 'wendycfmo@Gmail.com', 'Policlinica Maracaibo. Av 8 entre Calle 70 y 71.', 'Zulia', '0414 6458953', '', '', '', '', ''),
(299, 'Zerpa Adrián, Nelcar Rafael', 'Cirugía Bucomaxilofacial', 'Universidad de Carabobo, Instituto Venezolano de los Seguros Sociales-Hospital Universitario Dr. Angel Larralde.', '2017', 'no posee', 'nelcarz84@gmail.com / instagram: @drnelcarzerpa', 'Centro Médico Profesional piso 2 consultorio 2-7', 'Monagas', '0424 9156049', '', '', '', '', ''),
(301, 'Jiménez Lucena, Pedro José ', 'Cirugía Bucomaxilofacial', 'Universidad de Carabobo, Instituto Venezolano de los Seguros Sociales-Hospital Universitario Dr. Angel Larralde', '2017', 'no posee', 'pedrojjimenezl@gmail.com', 'Avenida Sucre Club Social Casa de los Andes Consultorio Odontológico los Andes', 'Aragua', '0414-470.24.94 /  (0243) 246-79.67', '', '', '', '', ''),
(302, 'Rodney Ortega, Henry', 'Cirugía Bucomaxilofacial', 'Univesidad de Carabobo', '2015', 'no posee', 'drhenryrodney@gamil.com', '1) Av. pichincha c/c Machado edificio Arco pb 01 Grupo Odontológico LaRod CA. 2) Av upata Clínica Nuestra Sra de Las Nieves. Ciudad Bolívar. 3) Centro Clí­nico Chilemex puerto Ordaz', 'Bolivar', '0285 634019 / 0414967293 / 04148182577', '', '', '', '', ''),
(303, 'Mujica Molleja, Elena Victoria', 'Cirugía Bucal', 'Universidad Central de Venezuela.', '2013', 'http://ciidimplantes.com', 'cidimplantes@gmail.com / elenavmm8@gmail.com', 'Centro Integral Santa Rosa piso 1 # 105 Centro Internacional de Implantes Dentales. Santa Rosa-Caracas', 'Distrito Capital', '02129939738 / 02129929304', '', '', '', '', ''),
(304, 'García Garcí­a, Josmar Carolina', 'Cirugía Bucomaxilofacial', 'Universidad Gran Mariscal de Ayacucho. Hospital General del Oeste José Gregorio Hernández', '2017', 'no posee', 'josmargarcia82@gmail.com', 'AV Venezuela c/ c El Recreo. C.C El Recreo. Torre Sur. Piso 6. Oficina 6-4. Sabana Grande.', 'Distrito Capital', '0424-171-49.66 / 0426-516.83.68 / Consultorio: 212-762.80.51/ 212-763.24.21', '', '', '', '', ''),
(305, 'Garcí­a González Efraín José', 'Cirugía Bucomaxilofacial', 'Universidad de Carabobo', '2017', 'no posee', 'dr.efrain.garcia.g@gmail.com', 'Centro Clínico La Maracaya Consul. 1 (Calle 10 de San José con 3era Av de La Maracaya #80) Maracay. Edo Aragua', 'Aragua', '0416-6749088 / 0414-3463027 Centro Clí­nico La Maracaya 0243-2351668', '', '', '', '', ''),
(306, 'Quevedo Manuel Leonardo', 'Cirugía Bucomaxilofacial', 'Ciudad Hospitalaria Dr. Enrique Tejera (CHET) Valencia.', '2012', 'no posee', 'mq5495@gmail.com / Instagram/Twitter: @manuellquevedo', '1)Divina Sonrisa Centro de Especialidades Odontologicas C.C Paseo Las industrias, local 1-38 Valencia.2)Av. Principal de La Isabelica, Vereda 11, PolÃ­nica Elohim, Sector 5, La Isabelica, Valencia3)Hospital Dr Adolfo Prince Lara Av La Paz Puerto Cabello4)Policlinica Elohim Av. Principal de La Isabelica, Vereda 11, PolÃ­nica Elohim, Sector 5, La Isabelica,', 'Carabobo', '0241-8321347 / 8321095 / 04144267447', '', '', '', '', ''),
(307, 'Golaszewski Gajos, José Bladimir', 'Cirugía Bucomaxilofacial', 'Universidad de Carabobo', '2013', 'no posee', 'jbgmaxilofacial@gmail.com', 'Hospital Metropolitano del Norte torre Anexo Piso 1 Cons 1-24. y CC Prebo Centro Odontologico Monteverde Valencia Edo Carabobo', 'Carabobo', '+58 424 498.99.38', '', '', '', '', ''),
(308, 'Sánchez Chacin, Matilce del Carmen', 'Cirugía Bucal', 'Universidad del Zulia', '2016', 'no posee', 'matiti185723262016@gmail.com / matit18_501@hotmail.com', 'Urb. La popular calle 171,vereda 10 C.C La Revolución, local No 6. San Francisco- Zulia.', 'Zulia', '(0424)630-9685', '', '', '', '', ''),
(309, 'Vivas, Mauro', 'Cirugí Bucomaxilofacial', 'Universidad de Carabobo. Hospital Universitario Dr. Angel Larralde.', '2003', 'no posee', 'maurovivas5@gmail.com', '<div>Urb. Calicanto Edificio Rincón de los Toro. Piso 6 Constitución 62. Maracay. Eda Aragua (detrás de la Maestranza Cesar Girón)</div>', 'Aragua', '0243-245.15.54  / 0416-643.38.78', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `doctores`
-- (See below for the actual view)
--
CREATE TABLE `doctores` (
`id` int(11)
,`nombre` text
,`especialidad` text
,`universidad` text
,`ano` text
,`website` text
,`email` text
,`direccion` text
,`estado` text
,`telefonos` text
,`facebook` text
,`instagram` varchar(255)
,`twitter` varchar(255)
,`linkedin` varchar(255)
,`image` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `documentos`
--

CREATE TABLE `documentos` (
  `userID` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `archivo` varchar(200) NOT NULL DEFAULT 'pdf-icon.png'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `documentos`
--

INSERT INTO `documentos` (`userID`, `titulo`, `archivo`) VALUES
(1, 'Ley ejercicio de la odontología', '273873.pdf'),
(2, 'Estatutos SVCBMF', '514625.pdf'),
(3, 'Artículos de prensa - Juicio', '703565.pdf'),
(4, 'Sentencia definitiva y resultado de apelación', '952213.pdf'),
(5, 'CARTAS APOYO A LA ESPECIALIDAD Y A LA SVCBMF', '803799.pdf'),
(6, 'PRENSA, MEDIDA CAUTELAR Y JUICIO 1', '808901.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `estatutos`
--

CREATE TABLE `estatutos` (
  `userID` int(11) NOT NULL,
  `titulo` text CHARACTER SET utf8 NOT NULL,
  `userFIle` varchar(200) NOT NULL DEFAULT 'img/pdf-icon.png'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estatutos`
--

INSERT INTO `estatutos` (`userID`, `titulo`, `userFIle`) VALUES
(61, 'Estatutos SVCBMF', '243886.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `galerias`
--

CREATE TABLE `galerias` (
  `id` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `titulo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


--
-- Dumping data for table `galerias`
--

INSERT INTO `galerias` (`id`, `image`, `titulo`) VALUES
(1, '648516.jpg', ''),
(2, '755997.jpg', ''),
(3, '754940.jpg', ''),
(4, '551509.jpg', ''),
(5, '922704.jpg', ''),
(6, '656389.jpg', ''),
(7, '553349.jpg', ''),
(8, '369054.jpg', ''),
(8, '130211.jpg', ''),
(10, '64036.jpg', ''),
(11, '427249.jpg', ''),
(12, '492140.jpg', ''),
(13, '564428.jpg', ''),
(14, '274285.jpg', ''),
(15, '487056.jpg', ''),
(16, '49065.jpg', ''),
(17, '63380.jpg', ''),
(18, '892734.jpg', ''),
(19, '405407.jpg', ''),
(20, '202780.jpg', ''),
(21, '792267.jpg', ''),
(22, '426573.jpg', ''),
(23, '674595.jpg', ''),
(24, '103917.jpg', ''),
(25, '56750.jpg', ''),
(26, '775818.jpg', ''),
(27, '583659.jpg', ''),
(28, '657382.jpg', ''),
(29, '757008.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `postgrados`
--

CREATE TABLE `postgrados` (
  `userID` int(11) NOT NULL,
  `titulo` text,
  `universidad` text,
  `estado` text,
  `ciudad` text,
  `tipoprograma` text,
  `cuposanuales` text,
  `coordinador` text,
  `comiteacademico` text,
  `direccion` text,
  `telefonos` text,
  `correo` text,
  `website` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `postgrados`
--

INSERT INTO `postgrados` (`userID`, `titulo`, `universidad`, `estado`, `ciudad`, `tipoprograma`, `cuposanuales`, `coordinador`, `comiteacademico`, `direccion`, `telefonos`, `correo`, `website`) VALUES
(72, 'Postgrado de Cirugí Bucal Universidad Central de Venezuela', 'Universidad Central de Venezuela', 'Distrito Capital', 'Caracas', 'Especialización en Cirugí Bucal', '8', 'Dra. Elizabeth Albornoz', 'Dr. JosÃ© Luis CastroDr. Alexei RojasDra. Martha EspinozaDra. Tania Navarro', 'Facultad de Odontologí Planta baja, Ciudad Universitaria de Caracas Los Chaguaramos Caracas, Venezuela. Código Postal: 1050', '0212 6053006', 'pgcg1979.so.ucv@gmail.com / elyalbornoz@hotmail.com', 'http://www.ucv.ve/odontologia'),
(66, 'Postgrado de Cirugí Bucal La Universidad del Zulia', 'La Universidad del Zulia', 'Zulia', 'Maracaibo', 'Especialización en Cirugí Bucal', '4', 'Dr. Luis Sarmiento', 'Dr. CÃ©sar molinaDr. Gunther ErdodyDra. Mayerling Jimenez', 'Edificio ciencias y salud ,División estudios para graduados, Facultad OdontologíLa Universidad del Zulia NÃºcleo de salud Maracaibo, estado Zulia cod. 4001', '0261 4127457', 'cesarmolina@yahoo.com', 'http://www.faco.luz.edu.ve/'),
(67, 'Postgrado de Cirugí Bucal y Maxilofacial Hospital General del Oeste Â¨Dr. JosÃ© Gregorio HernándezÂ¨', 'Gran Mariscal de Ayacucho', 'Distrito Capital', 'Caracas', 'Especialización en Cirugí Bucal y Maxilofacial', '4', 'Dr. Hans Cordsen', 'Dr. Hans CordsenDr. Ronar GudiÃ±oDr. Marcos RodrÃ­guez', 'Calle la Luguna, Los Magallanes de Catia, Hospital General del Oeste, Piso 1Código Postal 1030', '04126076369', 'hanswcmaxilofacial@gmail.com', 'no posee'),
(68, 'Postgrado de Cirugí Bucal y Maxilofacial Hospital General del Este Â¨Dr. Domingo LucianiÂ¨', 'no aplica', 'Distrito Capital', 'Caracas', 'Especialización en Cirugí Bucal y Maxilofacial', '4', 'Jefe de Servicio: Dr. Henrique VÃ©lez / Dr. Xavier BriceÃ±o', 'Dr. Morelba CachazoDr. Leixer de SantiagoDr. Edgar de Armas', 'Final de la avenida Rio de Janeiro sector el llanito municipio sucre PB', '0212 2056511', 'maxilofacialhdl@gmail.com', 'no posee'),
(69, 'Postgrado de Cirugí Bucomaxilofacial Hospital Militar de Caracas Â¨Dr. Carlos ArveloÂ¨', 'no aplica', 'Distrito Capital', 'Caracas', 'Especialización en Cirugí Bucomaxilofacial', '2', 'Director del Postgrado: Dr. JosÃ© Gregorio Melillo / Coordinador Docente: Dr. Josue Huartaja', 'Dr. Pablo ColmenaresDr. Yscarlet Ortiz', 'Urbanización San MartÃ­n, parroquia San Juan, Hospital Militar Servicio de Odontologí Planta Baja', '04127279515 / 04149319021', 'jomel28@gmail.com', 'no posee'),
(70, 'Postgrado de Cirugí Bucal y Maxilofacial Hospital Universitario Â¨Dr. Ãngel LarraldeÂ¨', 'Universidad de Carabobo', 'Carabobo', 'Valencia', 'Especialización en Cirugí Bucal y Maxilofacial', '4', 'Dr. RubÃ©n MuÃ±oz', 'Dr. Glenda RamosDr. RubÃ©n MuÃ±ozDr. JosÃ© Bladimir GolaszewskiDra. Grace SperanzaDr. Enzo PiÃ±a', 'Altos de Barbula, avenida Principal Hospital Universitario Ãngel Larralde Código Postal 2002', '04244174827 / 04168415949', 'postgradomaxilofacial@hotmail.com', 'no posee'),
(71, 'Postgrado de Cirugí Bucal y Maxilofacial Ciudad Hospitalaria Henrique Tejera Â¨Dr. Omar Cohen Â¨', 'no aplica', 'Carabobo', 'Valencia', 'Especialización en Cirugí Bucal y Maxilofacial', '3', 'Dra. Omaira Cohen', 'Dra. Alba FleteDr. Hermes GonzálezDr. Jorge Borges', 'Avenida Henrique tejera, Municipio Valencia Estado Carabobo Código Postal 2001', '0414.4336695 / 0414.4336696', 'no posee', 'http://postgradocbmfchet.blogspot.com');

-- --------------------------------------------------------

--
-- Table structure for table `revistas`
--

CREATE TABLE `revistas` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `archivo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `volumen` text COLLATE utf8_unicode_ci NOT NULL,
  `numero` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `revistas`
--

INSERT INTO `revistas` (`id`, `image`, `archivo`, `volumen`, `numero`, `fecha`) VALUES
(15, 'portada2011.png', 'Rev-VCBMF-11-final-OV-III-VII.pdf', '1', '1', 'Enero / Junio 2011'),
(16, 'portada-revista-svcbmf-2012.jpg', 'Tripa-Bucomaxilofacial-2012.pdf', '2', '1', 'Enero / Diciembre 2012'),
(17, 'portada2013.png', '2013.pdf', '3', '1', 'Enero / Junio 2013');

-- --------------------------------------------------------

--
-- Table structure for table `simposios`
--

CREATE TABLE `simposios` (
  `userID` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `intro` text NOT NULL,
  `parrafos` text NOT NULL,
  `userPic` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `simposios`
--

INSERT INTO `simposios` (`userID`, `titulo`, `intro`, `parrafos`, `userPic`) VALUES
(78, 'Simposio de implantologí', 'Esquema Multidiciplinario', '<img alt=\"\" src=\"http://svcbmf.net/upload/simposios/banner-version2-simposio-implantes-facebook-1.jpg\"><img alt=\"\" src=\"http://svcbmf.net/upload/simposios/banner-version2-simposio-implantes-facebook-2.jpg\">', '28085.jpg'),
(79, 'Simposio de Cirugí Ortognática', 'Conoce a los conferencistas', '<img alt=\"\" src=\"http://svcbmf.net/upload/simposios/banner-simposio-cirugia-ortognatica-facebook-1.jpg\"><img alt=\"\" src=\"http://svcbmf.net/upload/simposios/banner-simposio-cirugia-ortognatica-facebook-2.jpg\">', '370646.jpg'),
(80, 'Seminario AO manejo de las secuelas en el trauma facial', 'Certificado AO, Davos Suiza. Aval para Fellowship internacional', '<img alt=\"\" src=\"http://svcbmf.net/upload/simposios/banner-seminario-ao-trauma-facial-facebook-1.jpg\"><img alt=\"\" src=\"http://svcbmf.net/upload/simposios/banner-seminario-ao-trauma-facial-facebook-2.jpg\">', '749371.jpg'),
(81, 'Simposio de Cirugí Dentoalveolar, Radiologí y Patologí Quirurgica', 'Conoce a los conferencistas', '<img alt=\"\" src=\"http://svcbmf.net/upload/simposios/banner2-simposio-cirugia-dentoalveolar-facebook-1.jpg\"><img alt=\"\" src=\"http://svcbmf.net/upload/simposios/banner2-simposio-cirugia-dentoalveolar-facebook-2.jpg\">', '318574.jpg'),
(82, 'Simposio de Reconstructiva y DistraccÃ­on OsteogÃ©nica', 'Conoce a los conferencistas', '<img alt=\"\" src=\"http://svcbmf.net/upload/simposios/banner-simposio-reconstructiva-osteogenica-facebook-1.jpg\"><img alt=\"\" src=\"http://svcbmf.net/upload/simposios/banner-simposio-reconstructiva-osteogenica-facebook-2.jpg\">', '649115.jpg'),
(83, 'Simposio de Articulación Temporomandibular', 'Conoce a los conferencistas', '<b></b><img alt=\"\" src=\"http://svcbmf.net/upload/simposios/simposio-articulacion-temporomandibular-facebook-1.jpg\"><img alt=\"\" src=\"http://svcbmf.net/upload/simposios/simposio-articulacion-temporomandibular-facebook-2.jpg\">', '977908.jpg'),
(84, 'Simposio de Hendidura de Labio y Paladar Hendido', 'Conoce a los conferencistas', '<img alt=\"\" src=\"http://svcbmf.net/upload/simposios/banner-3-simposio-hendidura-version-facebook-1.jpg\"><img alt=\"\" src=\"http://svcbmf.net/upload/simposios/banner-3-simposio-hendidura-version-facebook-2.jpg\"><img alt=\"\" src=\"http://svcbmf.net/upload/simposios/banner-3-simposio-hendidura-version-facebook-3.jpg\">', '548303.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `talleres`
--

CREATE TABLE `talleres` (
  `userID` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `intro` text NOT NULL,
  `parrafos` text NOT NULL,
  `userPic` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `talleres`
--

INSERT INTO `talleres` (`userID`, `titulo`, `intro`, `parrafos`, `userPic`) VALUES
(73, 'Taller Teórico-Práctico: Radiologí digital y planificación de implantes con tomografí computarizada de haz cónico(Cone Bean)', 'DIctado por: Dr. Juan Carlos MartÃ­nez Gómez', '<img alt=\"\" src=\"http://www.svcbmf.net/upload/talleres/banner2-taller-radiologia-digital-web%202.jpg\"><img alt=\"\" src=\"http://www.svcbmf.net/upload/talleres/banner2-temas-taller-radiologia-digital-web%202.jpg\">', '490414.jpg'),
(78, 'Taller: Manejo de los tejidos y tÃ©cnicas de sutura protocolo en quirofano', 'Dictado por: Dra. Gabriela Lugo y Dra. Marí de JesÃºs Ortiz', '<img alt=\"\" src=\"http://www.svcbmf.net/upload/talleres/banner3-taller-sutura-1.jpg\"><img alt=\"\" src=\"http://www.svcbmf.net/upload/talleres/banner3-temas-taller-sutura-web.jpg\">', '329459.jpeg'),
(75, ' Taller de Microcirugí plástica periodontal y Peri-implantar', 'Dictado por la Dra. Ana Luisa Bernotti', '<img alt=\"\" src=\"http://www.svcbmf.net/upload/talleres/banner-taller-cirugia-peri-implantar.jpg\"><img alt=\"\" src=\"http://www.svcbmf.net/upload/talleres/banner-taller-temas-cirugia-peri-2.jpg\">', '855720.jpeg');

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
  `image` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `token`, `image`, `is_active`, `created_at`, `user_role`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Malcolm', 'Cordova', 'a1aed1a77c0916c43a4a67afe49af265', 'logo.png', 1, '2018-10-27 05:25:13', 'admin', 'mercadocreativo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `vFacebook` text COLLATE utf8_unicode_ci NOT NULL,
  `vYoutube` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `nombre`, `link`, `vFacebook`, `vYoutube`) VALUES
(83, 'Invitación para el Congreso de Cirugí Bucomaxilofacial del Dr. Hans Cordsenl', 'OpN496zp1ks', '', ''),
(85, 'Invitación para el Congreso de Cirugí Bucomaxilofacial del Dr. Dubines Ramirez', 'gcJAWcocOgs', '', ''),
(86, 'Invitación para el Congreso de Cirugí Bucomaxilofacial del Dr. Alejandro Martinez', 'hMtp70wm5Gg', '', ''),
(87, 'Invitación para el Congreso de Cirugí Bucomaxilofacial de Dra. Mariana Villarroel', 'OEWdTgimfRc', '', ''),
(89, 'Invitación para el Congreso de Cirugí Bucomaxilofacial de Dr. Esteban Papp', '7wYoC2dsXbA', '', ''),
(90, 'Invitación para el Congreso de Cirugí Bucomaxilofacial de Dr. Jorge Ravelo', 'plK2JpG5P5c', '', ''),
(91, 'Invitación para el Congreso de Cirugí Bucomaxilofacial de Dra. Sol Cristina del Valle', 'SV4ZAolsHJE', '', ''),
(92, 'Invitación para el Congreso de Cirugí Bucomaxilofacial de Dr. Ãtalo Funes', '9jzk0Zo278A', '', ''),
(93, 'Dr. Daniel Nastri de Luca Invita al XXVIII Congreso Venezolano de Cirugí Bucal y Maxilofacial', 'Z5e-rQ5SNaE', '', ''),
(94, 'Invitación del Dr. Adrian Bencini para el Congreso de Cirugí Bucomaxilofacial', 'GvMKK1RGppc', '', ''),
(95, 'Invitación al  XXVIII Congreso Venezolano de Dra.Gabriela Lugo y Dra. Maria Ortiz  ', 'uIAAAww9K9I', '', ''),
(96, 'Invitación al  XXVIII Congreso Venezolano de Dr. CÃ©sar Guerrero Barros', '9mHz1OKzaV8', '', ''),
(97, 'Video Inaugural del Congreso', 'kLoospNfW2A', '', ''),
(98, 'Agradecimiento a las casas comerciales que participaron en el Congreso', '2OpjN7phvu0', '', '');

-- --------------------------------------------------------

--
-- Structure for view `doctores`
--
DROP TABLE IF EXISTS `doctores`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `svcbmfne_svcbmf`.`doctores`  AS  select `svcbmfne_svcbmf`.`directorios`.`id` AS `id`,`svcbmfne_svcbmf`.`directorios`.`nombre` AS `nombre`,`svcbmfne_svcbmf`.`directorios`.`especialidad` AS `especialidad`,`svcbmfne_svcbmf`.`directorios`.`universidad` AS `universidad`,`svcbmfne_svcbmf`.`directorios`.`ano` AS `ano`,`svcbmfne_svcbmf`.`directorios`.`website` AS `website`,`svcbmfne_svcbmf`.`directorios`.`email` AS `email`,`svcbmfne_svcbmf`.`directorios`.`direccion` AS `direccion`,`svcbmfne_svcbmf`.`directorios`.`estado` AS `estado`,`svcbmfne_svcbmf`.`directorios`.`telefonos` AS `telefonos`,`svcbmfne_svcbmf`.`directorios`.`facebook` AS `facebook`,`svcbmfne_svcbmf`.`directorios`.`instagram` AS `instagram`,`svcbmfne_svcbmf`.`directorios`.`twitter` AS `twitter`,`svcbmfne_svcbmf`.`directorios`.`linkedin` AS `linkedin`,`svcbmfne_svcbmf`.`directorios`.`image` AS `image` from `svcbmfne_svcbmf`.`directorios` ;

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
-- Indexes for table `cprin`
--
ALTER TABLE `cprin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cprin2`
--
ALTER TABLE `cprin2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cprin3`
--
ALTER TABLE `cprin3`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;


--
-- AUTO_INCREMENT for table `directorios`
--
ALTER TABLE `directorios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=310;


--
-- AUTO_INCREMENT for table `bancuadrados`
--
ALTER TABLE `bancuadrados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


--
-- AUTO_INCREMENT for table `banhorizontals`
--
ALTER TABLE `banhorizontals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


--
-- AUTO_INCREMENT for table `banverticals`
--
ALTER TABLE `banverticals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;



--
-- AUTO_INCREMENT for table `galerias`
--
ALTER TABLE `galerias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;


  

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
