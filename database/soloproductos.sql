CREATE DATABASE  IF NOT EXISTS `socialtruek_db3` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `socialtruek_db3`;
-- MySQL dump 10.16  Distrib 10.1.38-MariaDB, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: socialtruek_db3
-- ------------------------------------------------------
-- Server version	10.1.38-MariaDB

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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date` date NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `value` int(11) NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `products_user_id_foreign` (`user_id`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'2019-11-26 05:28:08','2019-11-26 05:28:08','2019-11-26','Fiat Palio Essence 1.6 MT 16v. 5Ptas.','Un vehículo totalmente renovado, con una linea exterior más atractiva, mayor espacio interior tanto para pasajeros como equipaje y con mayor equipamiento tanto de confort como de seguridad. ',2900,'Mh0oKRWsC0cwNdmx7xEdj7Pm9tfpw0RUK1XFkn6i.jpeg','ExD4wY7ysppMEGubHYMcHGIOG61zFVncCL5vIjT7.jpeg','B5b1dwCCfrqQIGrUPAJFep8SapPd9OiDfHNDptiH.jpeg',1,1),(2,'2019-11-26 13:15:14','2019-11-26 13:15:14','2019-11-26','Peugeot 208 1.6 5P ALLURE','Impecable de mecánica. Todos los service al día. Kilometraje 100% real y comprobable. Nunca tuvo un choque. Todo original. Muy buen estado interior y exterior',6590,'DgxI5PIhgmluHhSZb1nz9N6oJDWyjHmGVBO2k2kB.jpeg','pj1mbjqcfettMgNcKZf93jnnwWxZgEN33qbfgnEo.jpeg','rtop0Mfdu7vNZcABCTLeF5TCJ1MtuHdg03EFHxRY.jpeg',1,1),(3,'2019-11-26 13:17:19','2019-11-26 13:17:19','2019-11-26','Honda HR-V 1.8 Lx 2wd Cvt','Vehículo listo para transferir. Papeles al día. Cuero original Honda. Primera mano. Todos los service oficiales hechos',8750,'gCYfv1KaC1PLA43tC0cFTu1anXuafbqnoBZloTca.jpeg','6zKm0hJGV7MjC1C5GKAaNWZArRmBowsOVEOkMWk2.jpeg','6fam7jrWAofp7B4PdZvgMhuP48DjXfjfWLrkVXEh.jpeg',1,1),(4,'2019-11-26 13:19:17','2019-11-26 13:19:17','2019-11-26','Toyota Corolla 1.8 Xli Mt 136cv','Vehículo inmaculado. 50.000 km. Cubiertas nuevas. Asientos de cuero. Levanta vidrios eléctricos en las 4 puertas. Cierre centralizado. Alarma. Vtv y verificación policial recién hecha. Todo al día. Listo para transferir. Excelente estado general y del motor. Vale cada centavo.',4300,'IdkNRXsuSIh4gWSQCc8efsKOKXDfLKQLaicPwYE1.jpeg','ADrnQrtrKNnrabekXyhiY7Ew93GSZNecuf9oI7xI.jpeg','8XMSZHsMVFmeHedvQ3TAS3oSdqAKt08jDcY0CVz4.jpeg',1,1),(5,'2019-11-26 16:21:31','2019-11-26 16:21:31','2019-11-26','Peugeot Partner 1.4 Furgon Confort','Peugeot Partner 1.4 Furgon Confort',4300,'7QnG89WhXBitqFRzANVsrrEmEqY6ntGsc4zjO7Qh.jpeg','PylQG338MK7jeSiNpC4WbDagoEoDpQdQzciwJ8Rw.jpeg','4pwMSdE4teFNoHHHxTjDyEtl654R1J4eyT3mhpVf.jpeg',1,1),(6,'2019-11-26 16:22:51','2019-11-26 16:22:51','2019-11-26','Kia Sportage 2.0 Ex At 154cv 4x2','Kia Sportage 2.0 Ex At 154cv 4x2',9860,'rUPYbjfNlke0CrGK9ilOHYCyB28GqQetrVMulKMP.jpeg','PwPRDDq6o759Wcz7gpobe0CeOdBq2Zgberl8btcI.jpeg','PVOQLv9fLzOzmnyv3qntK4AACFOYOT9ZXw0f5cT2.jpeg',1,1),(7,'2019-11-26 16:26:27','2019-11-26 16:26:27','2019-11-26','Chevrolet Spin 1.8 Ltz 7as 105cv','Chevrolet Spin 1.8 Ltz 7as 105cv',5750,'MdcTTWEW3CcKp0ujuE26CMZMvrQ3eEtAZ5HA1z0x.jpeg','AV0GYL9XLCF901duieWt6nCXUchmPukZ5ZAXaDSX.jpeg','Sul6r2P0TzdXSNQb9N9S4m2uCrH2ztulDYyOcb17.jpeg',1,1),(8,'2019-11-26 19:06:55','2019-11-26 19:06:55','2019-11-26','Chevrolet Onix 1.4LS JOY+ 98cv','Impecable de mecánica. Todos los service al día. Kilometraje 100% real y comprobable Nunca tuvo un choque. Todo original. Muy buen estado interior y exterior',4150,'p43sSazws5TO4NI0G56fG1rAGSEo8xesa8ldO4Hn.jpeg','2sWORZqD74dklhJPnFK8vMblFf7wFGhaxyC3qlqg.jpeg','CUas1cV4U1Qz4JaGZrH3mEhvR7DdzhtOt1Wpq51r.jpeg',1,1),(9,'2019-11-29 17:17:13','2019-11-29 17:17:13','2019-11-29','Balanza Digital','balanza digital de precisión de hasta 1 gramo',2,'I996gnomvFtX6nNq8Sgd41vYkeG3N1xsEUIZNkcP.jpeg','dRW9xuzInGFMDqbRbPSYd0CT71wnsHAFSvzpKZt7.jpeg','KIl8Iwgsb9YDN6j03BLHFZRU1jfoemO7S9hTq1ui.jpeg',5,2),(10,'2019-11-29 17:30:06','2019-11-29 17:30:06','2019-11-29','Vivienda multifamiliar','vivienda espaciosa para varias familias',2800,'dqNfcB2Uwhp2YJlJ3WbYMg1f3WZmhmCFSyEb3fu3.jpeg','i5S5dVGtjXt2ilqcpAfm8Ny96Fge8ffinoDSpmMR.jpeg','pCPLamNeRqzOVcE2gVfgAGcCRud8LlOvA1KExH8e.jpeg',2,2),(11,'2019-11-29 17:34:46','2019-11-29 17:34:46','2019-11-29','TEG Independencia','juego de estrategia de guerra mas famoso del mundo',10,'1W47LF25h00OeQ6R1D1r8aoesLmC7GBvjNG8ao1e.jpeg','s7lZFmAFu0UWp8xLJaEYyI4y83NAzYWdxDwKFB13.jpeg','RGOMA6xILdZJZvBt9tpO5GhSQ7D1ABBlF3XjHXvg.jpeg',7,3),(12,'2019-11-29 17:36:41','2019-11-29 17:36:41','2019-11-29','Uno','juego de cartas mas divertido del mundo',3,'XsSyuVQkwkKrqtbUfPk8H6XVRfML1JhbuWJoZFQx.jpeg','wMYchVgZHktXN5w5Ii4c8TAAwf7kdyBfIADLPVNa.jpeg','osn7d5rzl8IPTkoVKz84uaPZyJ5Q3Vd0LwcnE2z3.jpeg',7,3),(13,'2019-11-29 17:40:11','2019-11-29 17:40:11','2019-11-29','Amoladora angular','amoladora angular marca DeWalt',120,'0lHhT2Z7Qk4473rdZvHi7MgOX5Jg9nYLLIecByqu.jpeg','XH96NpGp3boGeBXFKMdt4OdhuRc3l1wsRJuEb5O0.jpeg','048eiTVw5MQSpfsV0u8gyazYEb0tvpw9WXoCaIOr.jpeg',4,4),(14,'2019-11-29 17:42:39','2019-11-29 17:42:39','2019-11-29','POP movie Marty Mcfly','muñero de coleccion del personaje Marty Mcfly de la saga Back To te Future.',5,'o8f2oVnF7L0mUnWOf2sfzLI23BslFpbTS4MerTB9.jpeg','MJGI9Iqy8ddQQkpOqUsowFdmUHpV3UfzbfN1XnWs.jpeg','eO32DHmSFd6ROPOpzuRMyf9nI9vCiok8I44PTHki.jpeg',7,4);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-29 13:07:23
