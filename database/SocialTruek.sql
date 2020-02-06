CREATE DATABASE  IF NOT EXISTS `socialtruek` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `socialtruek`;
-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: socialtruek
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.8-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `pass` varchar(252) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'Eric','Mena','menaericdaniel@gmail.com','92856678','$2y$10$sv8OSgFJWNUvf0YPC9VJROALXbeFeBgb7XFa94aPTU9nq/GHjUxAu');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'autos'),(2,'inmuebles'),(3,'hogar'),(4,'herramientas'),(5,'libros'),(6,'juguetes'),(7,'rodados'),(8,'celulares'),(9,'otros');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `codigo`
--

DROP TABLE IF EXISTS `codigo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `codigo` (
  `codigo` varchar(256) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `codigo`
--

LOCK TABLES `codigo` WRITE;
/*!40000 ALTER TABLE `codigo` DISABLE KEYS */;
INSERT INTO `codigo` VALUES ('$2y$10$.j3TIDHwrzo8np4lOOa3j.csKio9Yx8NygYjiA8UVY/C/i425tw1S'),('$2y$10$y9Bo63dN0jQuWjnRO1XQZO248vIzTW0DuWY2VI66C2DrtFm.hmhXS');
/*!40000 ALTER TABLE `codigo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` int(11) NOT NULL,
  `val_product` decimal(1,1) DEFAULT NULL,
  `fecha_posteo` datetime NOT NULL,
  `foto1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario_id_idx` (`usuario_id`),
  KEY `fk_categoria_id_idx` (`categoria_id`),
  CONSTRAINT `fk_categoria_id` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'Peugeot Partner 1.4 Furgon Confort','Peugeot Partner 1.4 Furgon Confort',4300,NULL,'2019-10-29 11:25:03','5db8137fc84a8.jpg','5db8137fc8513.jpg','5db8137fc8568.jpg',1,1),(2,'Kia Sportage 2.0 Ex At 154cv 4x2','Kia Sportage 2.0 Ex At 154cv 4x2',9860,NULL,'2019-10-29 13:20:24','5db82e885b577.jpg','5db82e885b5c0.jpg','5db82e885b603.jpg',1,2),(3,'Chevrolet Spin 1.8 Ltz 7as 105cv','Chevrolet Spin 1.8 Ltz 7as 105cv',5750,NULL,'2019-10-29 13:25:30','5db82fba81201.jpg','5db82fba81281.jpg','5db82fba812f6.jpg',1,3),(4,'Chevrolet Onix 1.4LS JOY+ 98cv','Impecable de mecánica. Todos los service al día.\nKilometraje 100% real y comprobable\nNunca tuvo un choque. Todo original. Muy buen estado interior y exterior',4150,NULL,'2019-11-01 13:06:11','5dbc1fb390bb4.jpg','5dbc1fb390c62.jpg','5dbc1fb390cd3.jpg',1,4),(5,'Toyota Corolla 1.8 Xli Mt 136cv ','Vehículo inmaculado. 50.000 km. Cubiertas nuevas. Asientos de cuero. Levanta vidrios eléctricos en las 4 puertas. Cierre centralizado. Alarma. Vtv y verificación policial recién hecha. Todo al día. Listo para transferir. Excelente estado general y del motor. Vale cada centavo.',4300,NULL,'2019-11-01 13:08:15','5dbc202f74712.jpg','5dbc202f747e4.jpg','5dbc202f74872.jpg',1,5),(6,'Honda HR-V 1.8 Lx 2wd Cvt','Vehículo listo para transferir. Papeles al día. Cuero original Honda. Primera mano. Todos los service oficiales hechos',8750,0.0,'2019-11-01 13:10:26','5dbc20b29e776.jpg','5dbc20b29e868.jpg','5dbc20b29e907.jpg',1,6),(7,'Peugeot 208 1.6 5P ALLURE','Impecable de mecánica. Todos los service al día. Kilometraje 100% real y comprobable. Nunca tuvo un choque. Todo original. Muy buen estado interior y exterior ',6590,0.0,'2019-11-01 13:12:06','5dbc2116cedc3.jpg','5dbc2116ceeae.jpg','5dbc2116cef44.jpg',1,7),(8,'Fiat Palio Essence 1.6 MT 16v. 5Ptas.','Un vehículo totalmente renovado, con una linea exterior más atractiva, mayor espacio interior tanto para pasajeros como equipaje y con mayor equipamiento tanto de confort como de seguridad. ',2900,NULL,'2019-11-01 13:15:10','5dbc21ce10c93.jpg','5dbc21ce10d2c.jpg','5dbc21ce10db1.jpg',1,8),(9,'Salon de Eventos','Amplio salón para usos múltiples',5900,NULL,'2019-11-01 17:15:34','5dbc5a2649e3d.jpg','5dbc5a2649eaa.jpg','5dbc5a2649efb.jpg',2,1),(10,'Casa de Lujo','Mansión de estilo academicista frances de principios de siglo XVIII',7000,NULL,'2019-11-01 17:21:57','5dbc5ba5334bd.jpg','5dbc5ba53352d.jpg','5dbc5ba53357d.jpg',2,2),(11,'Vivienda multifamiliar','Vivienda especial para varios grupos familiares con espaciosos ambientes',2800,NULL,'2019-11-04 21:40:27','5dc08cbbc7975.jpg','5dc08cbbd3d65.jpg','5dc08cbbd46bf.jpg',2,2),(12,'PH a estrenar','Espectacular PH a estrenar ideal para pajeras. cocina, habitación baño, comedor y lavadero.',3600,NULL,'2019-11-04 21:45:31','5dc08deb24524.jpg','5dc08deb25241.jpg','5dc08deb25bb6.jpg',2,2),(13,'Departamento 2 ambientes','Departamento dos ambientes. buena localizacion, cocina comedor con amueblamiento incluido y balcon con vista a la calle.',2700,NULL,'2019-11-04 21:49:24','5dc08ed4bbce9.jpg','5dc08ed4bc871.jpg','5dc08ed4bd098.jpg',2,2),(14,'Propiedad de lujo','Inmueble creado específicamente para albergar organizaciones, academias, institutos o escuelas.',2500,NULL,'2019-11-04 21:51:57','5dc08f6d143c1.jpg','5dc08f6d1aacb.jpg','5dc08f6d1c2ef.jpg',2,2),(15,'Propiedad Horizontal','Propiedad apta para mediano grupo familiar. Este inmueble cuenta con cocina, comedor, 3 habitaciones y jardín frontal.',7300,NULL,'2019-11-04 21:55:26','5dc0903ea27de.jpg','5dc0903eaace5.jpg','5dc0903eab7d3.jpg',2,2),(16,'Casa dos Platas','Propiedad de dos plantas para grandes grupos familiartes. PB cocina y comedor con baños de servicio y lavadero. PA, dormitorios y playrooms.',2200,NULL,'2019-11-04 21:59:39','5dc0913b00f92.jpg','5dc0913b01afd.jpg','5dc0913b02451.jpg',2,2),(17,'Martillo de Carpintero','Martillo de carpintero. Diferentes versiones. mango de madera y sacaclavos.',2,NULL,'2019-11-04 22:10:47','5dc093d755b54.jpg','5dc093d756480.jpg','5dc093d756be9.jpg',4,2),(18,'Percutora BOSH','Percutora marca BOSH de altisima calidad. viene con estuche, mechas de diferente medida y mango estabilizador.',120,NULL,'2019-11-05 03:09:23','5dc0d9d35180d.jpg','5dc0d9d3524c5.jpg','5dc0d9d352e04.jpg',4,2),(19,'Sierra electrica BOSH','Sierra electrica BOSH. Este instrumento es ideal para trabajos sobre madera. Su dientes comen cualquier tipo de madera. Viene con estuche y con funda para la hoja',110,NULL,'2019-11-05 03:11:46','5dc0da625c47e.jpg','5dc0da625cc27.jpg','5dc0da625d27e.jpg',4,2),(20,'Juego de Llaves ','Set de tubos y llaves de gran calidad. Este estuche cuenta con llaves ingles, francesas y llaves tubo de direfentes medidas.',50,NULL,'2019-11-05 03:13:49','5dc0dadd9feec.jpg','5dc0dadda0701.jpg','5dc0dadda0fb2.jpg',4,2),(21,'Amoladora angular','Amoladora angural de increible durabilidad. Viene con disco lijador, de vidia y para cortar metales. Este instrumento se puede utilizar para diferentes tareas, tales como, cortar madera, metal o lijar.',28,NULL,'2019-11-05 03:16:03','5dc0db6366015.jpg','5dc0db6366c6d.jpg','5dc0db63676e0.jpg',4,2),(22,'Nivel Laser DeWalt','Este intrumento es util para trabajos de pintureria o mampostería. con este artefacto de gran utilidad usted dejara esas incomodas mangueras para poder trabajar de una forma mas eficiente y rapida. ',100,NULL,'2019-11-05 03:18:32','5dc0dbf807d75.jpg','5dc0dbf80864e.jpg','5dc0dbf808cdf.jpg',4,2),(23,'Lijadora Orbital DeWalt','Lijadora orbital. Este artefacto es de gran durabilidad. Se puede utilizar tanto en paredes, maderas, metales, chapas o plastico.',39,NULL,'2019-11-05 03:20:30','5dc0dc6eb7c1d.jpg','5dc0dc6eb8417.jpg','5dc0dc6eb8ae7.jpg',4,2),(24,'Balanza Digital','Balanza digital de marca china. Cuenta con diferentes medidas de peso, tara y puede pesar con una pensicion de hasta un gramo',2,NULL,'2019-11-05 03:23:10','5dc0dd0e7bf52.jpeg','5dc0dd0e7c857.jpg','5dc0dd0e7d6ad.jpg',3,2),(25,'Cacerola Electrica Oster','- Función de sofrito que le permite sofreír alimentos antes de preparar el arroz\r\n- Tapa de vidrio refractario, con orificio de salida de exceso de vapor\r\n- Asa fría al tacto\r\n- Tapa con anillo de acero inoxidable\r\n- Olla interior removible de aluminio con recubrimiento antiadherente capacidad 12 tazas (2.2 l)\r\n- Control térmico automático\r\n- Origen China',79,NULL,'2019-11-05 03:25:22','5dc0dd929e8af.jpg','5dc0dd929f279.jpg','5dc0dd929fb97.jpg',3,2),(26,'Heladera Whrilpool','- Heladera dos fríos,dos puertas,con freezer,con Dispenser\r\n- Volumen útil:328 litros.\r\n- Sistema Cycle Defrost.\r\n- Freezer independiente con estante divisor.\r\n- Temperatura freezer:\r\n- 18º.\r\n- Provista de cubeteras para hielo.\r\n- Descongelamiento automático.\r\n- Luz interior.\r\n- Regulador de temperatura.\r\n- Rejilla superior con espacio para recipientes verticales.\r\n- Estantes de acero de alta resistencia.\r\n- Deposito individual multiuso para resguardar alimentos frescos.\r\n- Balcones desmontables.',430,NULL,'2019-11-05 03:27:32','5dc0de141957d.jpg','5dc0de1419e00.jpg','5dc0de141a481.jpg',3,2),(27,'lavarropas Automatico LG','Este innovador electrodoméstico logrará que la tarea de lavado diario sea más que sencilla. Su diseño eficaz permitirá dejar tu ropa impecable sin dañarla, optimizar tiempo y evitar los residuos de jabón.\r\n\r\nTecnología para tu hogar\r\nSu panel está idealmente diseñado para brindar una operación más cómoda y funcional. Con su display led integrado podrás visualizar el tiempo necesario para la finalización del aseo de tus prendas.',250,NULL,'2019-11-05 03:29:45','5dc0de997516f.jpg','5dc0de9975b6a.jpg','5dc0de9976486.jpg',3,2),(28,'Juego de Vajilla de 16 piezas','Ahora tu hogar puede ser fiel a tu estilo personal. Combina colores y estilos en tu menaje de cocina y mesa, de forma que la originalidad y la funcionalidad sean los protagonistas de tu día a día.',100,NULL,'2019-11-05 03:31:42','5dc0df0ec437e.jpg','5dc0df0ec4cf0.jpg','5dc0df0ec54f7.jpg',3,2),(29,'Cocina Longvie','COCINA A GAS - LONGVIE\r\nMODELO: 13231BF - 56CM BLANCA\r\nCARACTERÍSTICAS:\r\nEficiencia energética AA.\r\nMultigas.\r\nHorno QuickClean.\r\n4 hornallas de tres diferentes potencias para optimizar su uso.\r\nPlancha enlozada.\r\nPuerta con visor de doble vidrio templado.\r\nParrilla-Grill independiente: extraíble, con 3 posiciones y asadera. De potente calor por radiación, permite',200,NULL,'2019-11-05 03:33:52','5dc0df90ab100.jpg','5dc0df90ab91a.jpg','5dc0df90ac109.jpg',3,2),(30,'Microondas Samsung','Variedad de funciones y programas\r\nPosee la función de descongelamiento automático, que calcula el tiempo necesario y la potencia según el tipo de alimento o según el peso. Para destacar, este microondas cuenta con diferentes niveles de cocción y 6 programas, lo que te posibilitará disfrutar todas tus comidas con mínimo esfuerzo y máximo sabor.',50,NULL,'2019-11-05 03:35:34','5dc0dff677309.jpg','5dc0dff677c6e.jpg','5dc0dff67846b.jpg',3,2),(31,'La odisea de Homero','Título del libro: La Odisea\r\nAutor: Homero\r\nIdioma: Español\r\nEditorial: DEL FONDO\r\nFormato: Papel\r\nGénero del libro: Literatura y ficción\r\nTipo de narración: Novela\r\n',3,NULL,'2019-11-05 03:39:18','5dc0e0d629def.jpg','5dc0e0d62ac9c.jpg','5dc0e0d62b4bf.jpg',5,2),(32,'Appetites de Anthony Bourdain','Título del libro:\r\nAppetites\r\nAutor:\r\nAnthony Bourdain\r\nIdioma:\r\nEspañol\r\nEditorial:\r\nPlaneta\r\nFormato:\r\nPapel\r\nCubierta:\r\nBlanda\r\nGénero del libro:\r\nRecreación, hobbies y oficios\r\nSubgéneros:\r\nGastronomía\r\nISBN:\r\n9789504959397\r\nNúmero de páginas:\r\n304',9,NULL,'2019-11-05 03:42:06','5dc0e17e00baa.jpg','5dc0e17e013c9.jpg','5dc0e17e01b49.jpg',5,2),(33,'It','El libro que inspiró a la película homónima. ¿Quién o qué mutila y mata a los niños de un pequeño pueblo norteamericano? ¿Por qué llega cíclicamente el horror a Derry en forma d e un payaso siniestro que va sembrando la destrucción a su paso? Esto es lo que se proponen averiguar los protagonistas de esta novela. Tras veintisiete años de tranquilidad y lejanía una antigua promesa infantil les hace volver al lugar en el que vivieron su infancia y juventud como una terrible pesadilla. Regresan a Derry para enfrentarse con su pasado y enterrar definitivamente laamenaza que los amargó durante su niñez. Saben que pueden morir, pero son conscientes de que no conocerán la paz hasta que aquella cosa sea destruida para siempre. La crítica ha dicho... «Insuperable.» La Vanguardia',3,NULL,'2019-11-05 03:44:26','5dc0e20aab869.jpg','5dc0e20aac0c4.jpg','5dc0e20aac8f5.jpg',5,2),(34,'Enciclopedia Larousse Ilustrado','Título del libro\r\nDICCIONARIO ESCOLAR LAROUSSE. NUEVA EDICION\r\nIdioma\r\nEspañol\r\nEditorial\r\nLAROUSSE\r\nFormato\r\nPapel\r\nGénero del libro\r\nDiccionarios y enciclopedias\r\nISBN\r\n9786072102903',10,NULL,'2019-11-05 03:48:27','5dc0e2fb62e67.jpg','5dc0e2fb636e2.jpg','5dc0e2fb75cef.jpg',5,2),(35,'Santa Biblia','El libro mas importante de la historia que cambien el destino de la humanidad y de la religion',2,NULL,'2019-11-05 03:49:47','5dc0e34b824fb.jpg','5dc0e34b830bf.jpg','5dc0e34b83b59.jpg',5,2),(36,'Las mil y una curiosidades sobre buenos aires','Una guia de turismo de la ciudad de Buenos Aires cuenta las historias mas curiosas y mas intrigantes sobre una de las ciudades mas importantes del mundo',3,NULL,'2019-11-05 03:52:08','5dc0e3d853d05.jpg','5dc0e3d85452c.jpg','5dc0e3d854d2d.jpg',5,2),(37,'Night Circus','Este libro cuenta la historia de dos jovenes y adolecentes magos que deben hacer hasta lo imposible para salvar la vida de un magico circo.',3,NULL,'2019-11-05 03:53:52','5dc0e440865e9.jpg','5dc0e44087085.jpg','5dc0e440878d3.jpg',5,2),(38,'El poder esta dentro de ti','Auto ayuda para poder encontrar dentro de uno mismo las herramientas para poder sobrepasar los problemas que nos presenta la vida',2,NULL,'2019-11-05 03:55:12','5dc0e490c8dd6.jpg','5dc0e490c9625.jpg','5dc0e490c9dbd.jpg',5,2),(39,'Muñeco Buzz LighYear','LLEGARON LOS MUÑECOS DE TOY STORY QUE ESTABAS ESPERANDO, LLEVALO CONTIGO A TODOS LADOS.\r\nMATERIAL SUAVE Y ESPONJOSO. TAMAÑO 40 CMS APROXIMADAMENTE.\r\nEDAD: 3+ AÑOS',100,NULL,'2019-11-05 03:58:01','5dc0e539e66b7.jpg','5dc0e539e6ea3.jpg','5dc0e539e7521.jpg',6,2),(40,'Aviones de Juguete','Varias clases de aviones para hacer volar la imaginacion de los mas pequeños',3,NULL,'2019-11-05 03:59:21','5dc0e589e89e9.jpg','5dc0e589e9515.jpg','5dc0e589e9bac.jpg',6,2),(41,'Oso iteractivo parlante ','Osos con botones intecativos escondidos en las extemidades de los muñecos para fomentar la curiosidad de los bebes',2,NULL,'2019-11-05 04:01:20','5dc0e6004fc48.jpg','5dc0e60050514.jpg','5dc0e60050b88.jpg',6,7),(42,'POP movie Marty Mcfly','Muñeco de coleccion de Marty Mcfly de la saga de Volver al Futuro.',70,NULL,'2019-11-05 04:02:53','5dc0e65d0d778.jpg','5dc0e65d0e204.jpg','5dc0e65d0ea58.jpg',6,9),(43,'Monopoly Varias Versiones','Aprende a convertirte en un perfecto hombre de negocios con este famosisimo juego de mesa.',180,NULL,'2019-11-05 04:04:38','5dc0e6c6a2528.jpg','5dc0e6c6a2f46.jpg','5dc0e6c6a379c.jpg',6,2),(44,'Autos Hot Wheels','Colecciona los autos mas increibles para usar en tus pistas de carreras!',100,NULL,'2019-11-05 04:05:59','5dc0e71713bd3.jpg','5dc0e717143d3.jpg','5dc0e71714b9c.jpg',6,2),(45,'Uno','juegos de cartas para la diversión y la agilidad de toda la familia ',5,NULL,'2019-11-05 04:07:38','5dc0e77a860e9.jpg','5dc0e77a86be8.jpg','5dc0e77a87765.jpg',6,2),(46,'TEG Independencia','Animate a armar tu ejercito con el juego de estrategia y guerra mas famoso del mundo entero',26,NULL,'2019-11-05 04:08:56','5dc0e7c8db373.jpg','5dc0e7c8dbb9f.jpg','5dc0e7c8dc255.jpg',6,2),(47,'Bicicleta Mountain Bike Fire Bird Rod.26','• Cuadro: Acero Hi-ten Y\r\n• Colores disponibles:\r\no Negro con rojo\r\no Amarillo con negro\r\no Verde con negro\r\no Azul con negro\r\n• Sistema de cambios: Power\r\n• Frenos: V-Brake\r\n• Horquilla: Suspension Fast\r\n• Llantas: doble pared\r\n• Cubiertas: MTB 26\"\r\n• Pedales: FEIMIN negros\r\n• Cadena: Taya\r\n• Caño de asiento: con grampa\r\n• Asiento: MTB acolchado',140,NULL,'2019-11-05 04:14:12','5dc0e9049429d.jpg','5dc0e90494a75.jpg','5dc0e904952ea.jpg',7,2),(48,'Bicicleta R26 Fire Bird Black Shimano','Detalle de componentes:\r\n• Cuadro: Aluminio hidroformado 6061\r\n• Horquilla: Suspension Fast R26\r\n• Sistema de cambios: Shimano Tourney de 21 velocidades\r\n• Manijas de cambio Shimano Rapid Fire\r\n• Piñón: 7 velocidades\r\n• Pata de cambio: Shimano Tourney\r\n• Plato/Palanca: Firebird\r\n• Frenos: V-Brake\r\n• Caja de dirección integrada\r\n• Caño de asiento: FireBird con collar de cierre\r\n• Asiento: MTB acolchado\r\n• Puños: FireBird de goma\r\n• Llantas: de aluminio doble pared con cierre rápido\r\n• Cámaras: R26\" con válvula pico de auto\r\n• Cubiertas: DSH R26\"\r\nPeso : 12 kilos',100,NULL,'2019-11-05 04:16:01','5dc0e9713e259.jpg','5dc0e971402a5.jpg','5dc0e97140942.jpg',7,2),(49,'Bicicleta Moma Bike Peak','La marca número uno de Argentina ahora puede ser tuya. La tecnología y diseño de su cuadro, alto estándar de componentes y estricto control de calidad, hacen de MOMA la marca favorita tanto para uso urbano, freestyle, mountain bike o ruta.',500,NULL,'2019-11-05 04:18:44','5dc0ea14878d5.jpg','5dc0ea1488246.jpg','5dc0ea1488b1f.jpg',7,2),(50,'Bicicleta Troya niño','Bicicleta para ñiño con frento shimano y cuadro de aluminio. viene con casco de seguridad',80,NULL,'2019-11-05 04:21:13','5dc0eaa9d474b.jpg','5dc0eaa9d52ae.jpg','5dc0eaa9d5b30.jpg',7,2),(51,'Bicicleta Electrica','Chasis Monocasco en acero\r\nPotencia 5000 watt\r\nMotor Trimove PWT, sin escobillas, C.C.\r\nBatería Litio ion 30ah\r\nCeldas espaciales de alta descarga\r\nFrenos Sistema Hidráulico\r\nDisco 203mm delantero\r\nDisco 203mm trasero\r\nSuspensión delantera Horquilla doble cristo, regulable Magnesio y Aluminio eje 20mm\r\nSuspensión trasera Amortiguador hidráulico Regulable en compresión y rebote\r\nTracción Trasera\r\nTransmisión Cadena piñón corona\r\nLimitador de velocidad modo urbano',3000,NULL,'2019-11-05 04:22:44','5dc0eb0463b2d.jpg','5dc0eb046472b.jpg','5dc0eb046a897.jpg',7,2),(52,'triciclo Moma',' Tipo: Triciclo a pedal.\r\no Modelo: Moma\r\no Edad: 3 - 6 años.\r\no Peso máximo: 50 Kg.\r\no Incluye calcos decorativas.\r\no Diseño robusto y versátil.\r\no Fácil de manejar sobre todo tipo de terrenos.\r\no Relación de pedaleo ideal para realizar ascensos sin demasiado esfuerzo.\r\no Tren delantero adaptable a distintos terrenos y obstáculos evitando riesgos.\r\no Manoplas ergonómicas para mayor comodidad.\r\no Medidas: 47x76x42 cm.\r\no Peso: 7,2 Kg.',85,NULL,'2019-11-05 04:24:46','5dc0eb7e4045a.jpg','5dc0eb7e40d89.jpg','5dc0eb7e417e6.jpg',7,2),(53,'Monopatin Scooter','Monopatin para uso en zonas urbanas. Otro medio de trasporte para ayudar al medio ambiente.',47,NULL,'2019-11-05 04:26:18','5dc0ebda1daf5.jpg','5dc0ebda228be.jpg','5dc0ebda2a425.jpg',7,2),(54,'Cuatriciclo Yamaha YFZ 450 ','Yamaha yfz 450 inyeccion... Impecable estado siempre uso recreativo en la arena no conoce la tierra... Todo original nada cambiado hasta su transmisión es la original de fábrica. Solo cambios estéticos... Titular... Puedo tomar alguna permuta de mi interés.',768,NULL,'2019-11-05 04:28:06','5dc0ec46622cb.jpg','5dc0ec4662cb9.jpg','5dc0ec4663474.jpg',7,2),(55,' Iphone 5','IPhone 5s 16 giga 4G Nuevos Sellados Libres de fabrica OEM\r\nÚnicamente color SPACE GRAY \r\nEnvios gratis a todo el país por mercadoenvios (correo argentino)',200,NULL,'2019-11-05 04:38:45','5dc0eec562562.jpg','5dc0eec562dd4.jpg','5dc0eec5635a4.jpg',8,2),(56,'Huawei GW','Bateria tipoPolimero de Litio\r\nCapacidad batería3000 Amperios hora\r\nCámara de fotos: cámaraApertura ƒ / 2.0, Enfoque automático, Geoetiquetado, HDR\r\nResolución cámara de fotos13 Megapíxeles\r\nResolución cámara de fotos (alto)3120 Píxeles\r\nResolución cámara de fotos (ancho)4160 Píxeles\r\nResolución cámara de fotos secundaria8 Megapíxeles\r\nTipo de Flash: LED\r\nZoomDigital\r\nConexion: ConectividadBluetooth 4.0 con A2DP, Punto de acceso WiFi, Wi-Fi 802.11 b/g/n\r\nConectividad datosEDGE, GPRS, HSPA+, LTE\r\nConectores: Jack 3,5 mm para auriculares, Micro USB 2.0\r\nDiseño:\r\nDimensiones (alto)154.3 Milímetros\r\nDimensiones (ancho)77 Milímetros\r\nDimensiones (profundidad)8.45 Milímetros\r\nPeso: 168 Gr\r\nG',54,NULL,'2019-11-05 04:40:40','5dc0ef382da97.jpg','5dc0ef383b9a1.jpg','5dc0ef3841434.jpg',8,2),(57,'Xaiomi Mi 8','Acabado en degradado con efecto espejo.\r\nUn solo color no es suficiente. Tu smartphone cambia de color con la elegancia propia de una pintura impresionista. El resultado es el azul aurora y el negro medianoche, colores creados para dar rienda suelta a tu imaginación. Cristal 2.5D con un marco metálico en degradado.\r\n\r\nPantalla de 6,26\".\r\nLa misma calidad impresionante de fotos con un notch un 45% más pequeño.\r\n\r\nCámara selfie de Sony de 24MP.\r\nLa cámara frontal gracias a sus píxeles de 1,8 μm es capaz de detectar las diferentes escenas y ajustar la iluminación con IA, lo que te permitirá hacer grandes fotos de día y de noche.',160,NULL,'2019-11-05 04:42:36','5dc0efac8f4e2.jpg','5dc0efac8fd6d.jpg','5dc0efac909bb.jpg',8,2),(58,'Motorola E5','Procesador de alto rendimiento\r\nSu potente procesador y memoria RAM, te permitirán ejecutar aplicaciones y realizar múltiples tareas al mismo tiempo. Su sistema operativo Android 8.0 te resultará eficiente e intuitivo.\r\n\r\nConexión ilimitada y mega batería\r\nCon su tecnología 4G podrás conectarte a todas las redes rápidamente. Además, gracias a su cargador rápido, navegarás día y noche sin interrupciones.\r\n\r\nFotos increíbles\r\nCon su cámara de 13 MP y su enfoque láser, capturarás momentos únicos con alta definición y detalle. Con el flash de la cámara delantera sacarás divertidas y luminosas selfies.\r\n\r\nDiseño, más pantalla y más definición\r\nSu diseño estilizado y sus dimensiones, te permitirán un agarre cómodo para chatear y escribir rápidamente.\r\nCon su amplia pantalla Max Vision, podrás mirar películas y jugar en alta definición, sin perderte los detalles.',100,NULL,'2019-11-05 04:44:37','5dc0f02537704.jpg','5dc0f02537fce.jpg','5dc0f0253876d.jpg',8,2),(59,'Samsung J2','Disfrutá más con una pantalla amplia:\r\nCon un diseño que destaca, el Galaxy J2 Core cuenta con una increíble pantalla qHD de 5\" que ofrece mayor cobertura y mejor experiencia de visualización. Además, cuenta con una variedad de llamativos colores con la parte trasera brillante, ideal para aquellos que quieren marcar la diferencia.\r\n\r\nOptimizado para entregar el mejor rendimiento:\r\nDisfrutá de una experiencia eficiente y sin interrupciones con el Android™ Oreo™ (edición Go) que le entrega un mejor rendimiento a tu smartphone. El Galaxy J2 Core está optimizado para funcionar con apps Go y mantenerte siempre un paso adelante.\r\n',80,NULL,'2019-11-05 04:46:45','5dc0f0a5f12fb.jpg','5dc0f0a5f1cdf.jpg','5dc0f0a5f248e.jpg',8,2),(60,'Xaiomi Red Mi Go','Este Xiaomi Redmi GO es un móvil bastante ligero, con cuerpo de plástico y un tamaño algo más pequeño de lo normal a estas alturas. La parte trasera está muy despejada al no contar con el lector de huellas, para desbloquear este móvil tan básico tendremos que confiar en las tradicionales contraseñas ya que tampoco contamos con reconocimiento facial.',80,NULL,'2019-11-05 04:49:21','5dc0f14146e99.jpg','5dc0f14147799.jpg','5dc0f1414819d.jpg',8,2),(61,'Xaiomi Red Mi 7','PANTALLA\r\n6,26\" HD+ 19:9\r\n1520 x 720 píxeles\r\nGorilla Glass 5\r\n\r\nPROCESADOR\r\nSnapdragon: 632\r\nGPU Adreno: 506\r\n\r\nRAM: 2 / 3 / 4 GB\r\nALMACENAMIENTO: 16 / 32 / 64 GB + microSD\r\n',120,NULL,'2019-11-05 04:52:21','5dc0f1f55409d.jpg','5dc0f1f554c50.jpg','5dc0f1f5553c1.jpg',8,2),(62,'Iphone 7','• Pantalla Retina HD\r\n• Pantalla Multi-Touch con tecnología IPS\r\n• Pantalla panorámica de 4.7 pulgadas (en diagonal) retroiluminada por LED\r\n• Resolución de 1.334 por 750 a 326 p/p\r\n• Chip A10 Fusion con arquitectura de 64 bits\r\n• Coprocesador de movimiento M10 integrado\r\n• Nueva cámara iSight de 12 Mpx\r\n• Grabación de vídeo en 4K (3.840 por 2.160) a 30 f/s\r\n• Grabación de vídeo en 1080p HD a 30 o 60 f/s\r\n• CÁMARA FACETIME HD: Fotos de 7 megapíxeles\r\n• TOUCH ID\r\n• Bandas LTE\r\n• Wi-Fi 802.11a/b/g/n/ac con MIMO\r\n• Tecnología inalámbrica Bluetooth 4.2\r\n• NFC\r\n• Videollamadas FaceTime vía Wi-Fi o red móvil\r\n• Asistente SIRI7.',400,NULL,'2019-11-05 04:54:19','5dc0f26ba8f31.jpg','5dc0f26ba977e.jpg','5dc0f26ba9f9b.jpg',8,2),(63,'Tv Panasonic Viera 50\' Plasma 3d Hd Full + 7 Lentes Activos ','Tiene un panel de 600Hz y una relación de contraste nativo de 5,000,000: 1, más el filtro Infinite Black Pro. En términos de calidad de imagen, es absolutamente impresionante.\r\nPerfecta visión desde cualquier ángulo (se ve en una de las fotos). ',220,NULL,'2019-11-06 11:25:59','5dc29fb7155d8.jpg','5dc29fb71563a.jpg','5dc29fb715688.jpg',3,1),(64,'Generador Hy9000le-3 Hyundai ','Generador HYUNDAI HY 9000 LE-3\r\nHeavy Duty Generator\r\nModelo: HY 9000 LE-3\r\nMarca: Hyundai\r\nPanel Digital\r\nMaterial: Metalico\r\nTipo de alimentación: Nafta\r\nSalida de Corriente:\r\n• Trifásica AC 380 V\r\n• Bifásica AC 220 V\r\nHX 420\r\nMotor: 16 HP\r\nMétodo de arranque: Manual/Arranque Eléctrico Simple\r\nPotencia máxima: 8.0kw\r\nFrecuencia: 50Hz\r\nEstado: Excelente. Muy poco uso',550,NULL,'2019-11-07 08:45:59','5dc3cbb7c135f.jpg','5dc3cbb7c13ea.jpg','5dc3cbb7c1447.jpg',4,1),(65,' Torno Paralelo Lavore 200x1000','FUNCIONA TODO.\r\nACTUALMENTE EN USO.\r\nDESGASTES GENERALES.',900,NULL,'2019-11-07 09:03:09','5dc3cfbd2cbab.jpg','5dc3cfbd2cc1a.jpg','5dc3cfbd2cc6d.jpg',4,1);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `truekes`
--

DROP TABLE IF EXISTS `truekes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `truekes` (
  `id` int(11) NOT NULL,
  `id_producto_1` int(11) NOT NULL,
  `id_producto_2` int(11) NOT NULL,
  `fecha_trueke` datetime NOT NULL,
  `trueke` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_producto_1_UNIQUE` (`id_producto_1`),
  UNIQUE KEY `id_producto_2_UNIQUE` (`id_producto_2`),
  CONSTRAINT `fk_producto_1` FOREIGN KEY (`id_producto_1`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_producto_2` FOREIGN KEY (`id_producto_2`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `truekes`
--

LOCK TABLES `truekes` WRITE;
/*!40000 ALTER TABLE `truekes` DISABLE KEYS */;
/*!40000 ALTER TABLE `truekes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(512) NOT NULL,
  `fecha` date NOT NULL,
  `sexo` char(1) DEFAULT NULL,
  `avatar` varchar(512) DEFAULT NULL,
  `perfil` varchar(512) DEFAULT NULL,
  `val_user` decimal(1,1) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `celular` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Eric','Mena','menaericdaniel@gmail.com','$2y$10$VRKeOkfsuinefaFkA2t7..cW8SDDN3wXO8Ak4MR3t66ilFu2.Ssmm','1976-03-03','h','perfilHombre.png ',NULL,NULL,'General Pico #10631, barrio El Libertador, Loma Hermosa, Buenos Aires',1147394347,1134016800),(2,'Alexis','Veiga','veigalexis16@gmail.com','$2y$10$3gtsuupd4fz1DCXayxRPS.mEtGKiwdytD8cUq1TNAkPiUzDjhRUfO','1994-04-28','h','avatar01.png ','',NULL,NULL,NULL,NULL),(3,'Marcos','Palladini','marcospalladini3@gmail.com','$2y$10$Kk9ydNTYHoDj4FhclFKSuOEgIyzJl84wy.PML2ELouCaZm5mnmTzi','1988-03-14','h','avatar19.png ','',NULL,NULL,NULL,NULL),(4,'Brenda','Ruiz','brendaruiz@gmail.com','$2y$10$.PWAolL1hKNF/jerOkan..m5zqc9UfI1YVuHytZCc2u6.UnzTXD6a','1993-12-21','m','avatar10.png ','',NULL,NULL,NULL,NULL),(5,'Micaela','Padilla','micaela@gmail.com','$2y$10$imD8p62zM6FXlmMU7yuEWeYjE9Vfx7/ndpTTDpB92WCAfxy0z8sLW','1989-10-21','m','perfilMujer.png ','',NULL,NULL,NULL,NULL),(6,'Sabrina','Molina','sabrina@gmail.com','$2y$10$5JK7XOIwF0vIyIsvxomM/ef1w6iqFdNuUStYjNGVk9Zax8JV88o.i','1959-04-14','m','avatar02.png ','',NULL,NULL,NULL,NULL),(7,'Osvaldo','Medina','osvaldo@gmail.com','$2y$10$l6jvEKjL2OrhAGQ0iGp9yel8UJ9/TF7KN.oA3fz.bYb9TOdom0J1C','1987-05-23','h','avatar03.png ',NULL,NULL,NULL,NULL,NULL),(8,'Diego','Fuentes','diego@gmail.com','$2y$10$DqQhygDaDUvZovhzsRWpbuISW9tcV5lZZpP/VwsA4MeP4rejkG.dy','1986-12-12','h','avatar13.png ',NULL,NULL,NULL,NULL,NULL),(9,'Mariano','Toledo','mariano@gmail.com','$2y$10$GihWS/gm.Du2/P0TYpLpPu6kOIKcU3MAB.mlRp8SuVTaQ/xwWX8Ly','1990-08-15','h','avatar14.png ',NULL,NULL,NULL,NULL,NULL),(10,'Sandra','Perez','sandra@gmail.com','$2y$10$2Gi3ouFohMkMgv339g4BEuEbmLJbH.2VJiUwuQl1D/XLp9KnmlCBK','1967-05-04','m','avatar15.png ',NULL,NULL,NULL,NULL,NULL),(11,'Gloria','Sanchez','gloria@gmail.com','$2y$10$i9ZIRMwpiDIJaJV7c49.eO5zFo8RjyDAy7xURYN8CINjWVobL8JvS','1983-07-31','m','avatar17.png ',NULL,NULL,NULL,NULL,NULL),(12,'Rosa','Garcia','rosa@gmail.com','$2y$10$WJEYoUEN9hYKKmqUS9JVtOxQAYLJ8w3IpJU7vxD6fZldS9ZlynJ8O','1946-04-13','m','avatar04.png ',NULL,NULL,NULL,NULL,NULL),(13,'Ana','Guzman','ana@gmail.com','$2y$10$84lvinyTlmpweVWgFaiCceeoRL2Yxx7CK6wczY85Yu1ylB2mF9hX6','1968-10-26','m','avatar16.png ',NULL,NULL,NULL,NULL,NULL),(14,'Franco','Devita','franco@gmail.com','$2y$10$eb9rtcFdj39l3GtyFN3vAeBV.CiL2Uyf9UKeKMdfOTGCkfOcbA1HW','1967-12-03','h','avatar22.png ',NULL,NULL,NULL,NULL,NULL),(15,'Santiago','Zambrano','santiago@gmail.com','$2y$10$WbCmjCicOseTe.NCO1Ujlexo0pxgb8l6E/E6buDG3tCBmP4k5W1Tu','1999-03-02','h','perfilDesconocido.png ',NULL,NULL,NULL,NULL,NULL),(16,'Nicolas','Gonzalez','nicolas@gmail.com','$2y$10$p8.Jzmvd6JytqS.b5meav.EgIyGiadBVuDVGkmpDRx7BhR3cf7TUO','1978-04-26','h','perfilDesconocido.png ',NULL,NULL,NULL,NULL,NULL),(17,'Julio','Lopez','julio@gmail.com','$2y$10$QYV9Gy8IA0tqsSUSLma2mOdIHqD/nFAz0A2xM/0CZ/L0WdL2cE6DC','1978-08-15','h','perfilDesconocido.png ',NULL,NULL,NULL,NULL,NULL),(18,'Eric','Mena','menaeric@hotmail.com','$2y$10$r9g.MlXqvP3o7RH.g2nzgepasUEubcuEylNepVFdR6woCGn7ZHLAK','1976-03-03','h','perfilDesconocido.png ',NULL,NULL,NULL,NULL,NULL),(19,'Micaela','Gomez','mica@gmail.com','$2y$10$3hkqvmIDx8EGXbCs90gmyObSySFY4LAACv/f72byGKhjZ1WOf4nmG','1978-10-12','i','perfilDesconocido.png ',NULL,NULL,NULL,NULL,NULL),(20,'Jose','Retamal','jose@gmail.com','$2y$10$TWjQlikyERr1Iq4WMdhRkutYPIdASpn9ld2gMa0ZYIKkm4nU6r/bm','1968-10-14','i','perfilDesconocido.png',NULL,NULL,NULL,NULL,NULL),(21,'Manuel','Rodriguez','manuel@gmail.com','$2y$10$SpxSNpQ5TU4eF4OJGHDDI.gp2rE26/wGtwY3uIkNti2UCtsjWD5zO','1978-11-20','h','perfilDesconocido.png',NULL,NULL,NULL,NULL,NULL),(22,'Claudio','Cáceres','claudio@gmail.com','$2y$10$Sji9paHBTsUekp41ubTIL.6DdYSObJQTVV3Mxe3jjfeq7le.lhNz6','1978-11-20','h','perfilDesconocido.png',NULL,NULL,NULL,NULL,NULL),(23,'Eduardo','Zelada','eduardo@gmail.com','$2y$10$p8OqYrUNZ.HeDb1YR0612O.TZOqTVsDZAzkzI.QTTfdhzp8CXvE1O','1962-11-28','h','perfilDesconocido.png',NULL,NULL,NULL,NULL,NULL),(24,'German','Ojeda','german@gmail.com','$2y$10$SlTOwZB4bLjG2ZQ5PKX4Y.mAUSWcExBlzMJABTt8WSZISKvOTCdua','1956-12-15','h','perfilDesconocido.png',NULL,NULL,NULL,NULL,NULL),(25,'Nicanor','Garcia','nicanor@gmail.com','$2y$10$mvcNb.RwhQgn55zu0mKNv.gFDPuJxrquQiNspzjpzQtgG0ym03eqG','1987-06-15','h','perfilDesconocido.png',NULL,NULL,NULL,NULL,NULL),(26,'Magdalena','Fuentes','magdalena@gmail.com','$2y$10$Zv1omQjCZPQ8I12wcnFpZu1yZs6An.Drhm19ueHccfjV3NgSKgy52','1976-12-30','m','perfilDesconocido.png','',NULL,NULL,NULL,NULL),(27,'Gerardo','Morales','gerardo@gmail.com','$2y$10$qBnBdcxpz.8YLWGrCVRHe.vECGeFIQ4QFDYwWM2LvYWoBlEPHI.Fy','1979-08-15','h','avatar01.png ',NULL,NULL,NULL,NULL,NULL),(28,'Marcelo','Longobardi','marcelo@gmail.com','$2y$10$pxpSCT5Z7h4q2HICIViZWeseFktvncAaXSstAoOmEjuIWW6alcOAS','1963-12-26','h','perfilDesconocido.png',NULL,NULL,NULL,NULL,NULL),(29,'Omar','Fernandez','omar@fermandez.com','$2y$10$83dHwwsZJGXRhJJUiaY1OuO31FNbMMFJACFgzKigu1AUwAtiyL62S','1986-06-23','h','perfilDesconocido.png',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-11 21:53:38
