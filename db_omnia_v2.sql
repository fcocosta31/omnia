-- MySQL dump 10.16  Distrib 10.2.12-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: db_omnia
-- ------------------------------------------------------
-- Server version	10.2.12-MariaDB

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
-- Table structure for table `app_users`
--

DROP TABLE IF EXISTS `app_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `app_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lotacao_id` int(11) DEFAULT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `matricula` int(11) NOT NULL,
  `nome` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C250282492FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_C2502824A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_C2502824C05FB297` (`confirmation_token`),
  KEY `IDX_C25028247E27C2B8` (`lotacao_id`),
  CONSTRAINT `FK_C25028247E27C2B8` FOREIGN KEY (`lotacao_id`) REFERENCES `lotacao` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app_users`
--

LOCK TABLES `app_users` WRITE;
/*!40000 ALTER TABLE `app_users` DISABLE KEYS */;
INSERT INTO `app_users` VALUES (1,13,'fcocosta31','fcocosta31','fcocosta31@gmail.com','fcocosta31@gmail.com',1,NULL,'$2y$13$0aEWZ68IOqkL/S/VEtCNKOW6YN4xiIZRRJ.5fjEak6Ou7TSi4sm06','2018-07-26 05:45:01',NULL,NULL,'a:1:{i:0;s:10:\"ROLE_ADMIN\";}',83069,'Francisco de Araújo Costa'),(2,13,'brunobezerra','brunobezerra','brunobezerrabatista@gmail.com','brunobezerrabatista@gmail.com',1,NULL,'$2y$13$9Ofl5oXxdaly5q0UEff.FeXuGBYqkbt7Ai91HQz19IncH97wiCisa','2018-07-20 03:50:41',NULL,NULL,'a:1:{i:0;s:10:\"ROLE_ADMIN\";}',999991,'Bruno Bezerra Batista'),(3,2,'fancopgm','fancopgm','fancopgm@hotmail.com','fancopgm@hotmail.com',1,NULL,'$2y$13$df3MYuY6XmoWvgzEyaxFq.BKD/Risd6G9e8k9MrF9sOwvqr6Kd7OW','2018-07-20 06:59:57',NULL,NULL,'a:1:{i:0;s:8:\"ROLE_CGR\";}',999992,'Marcelo Fanco Damasceno Dos Santos'),(4,12,'georgianunesadv','georgianunesadv','georgianunesadv@hotmail.com','georgianunesadv@hotmail.com',1,NULL,'$2y$13$6TimCj4W5f/cv4/3pcgX3e95E/JVuSLpR4glS7DTr0mkyTYAQhO.m','2018-07-24 06:17:23',NULL,NULL,'a:1:{i:0;s:8:\"ROLE_CGR\";}',999993,'Geórgia Ferreira Nunes Martins'),(5,11,'ricardodealmeidasantos','ricardodealmeidasantos','ricardodealmeidasantos@hotmail.com','ricardodealmeidasantos@hotmail.com',1,NULL,'$2y$13$W3FXvr1CIbz7ffhuwbdp/.SzDGVirDZCbTi0JzZcKea3YeZI3b4bG','2018-07-24 06:18:30',NULL,NULL,'a:1:{i:0;s:8:\"ROLE_CGR\";}',999994,'Ricardo de Almeida Santos'),(6,3,'mjunior','mjunior','mamedejunior@hotmail.com','mamedejunior@hotmail.com',1,NULL,'$2y$13$4SUoozx9uou/77IzZlsWouexPgg41QKq6G4gC2KOG9sDForm84y9q','2018-07-25 06:36:20',NULL,NULL,'a:1:{i:0;s:10:\"ROLE_CHESP\";}',999995,'MAMEDE RODRIGUES DE SOUSA JUNIOR');
/*!40000 ALTER TABLE `app_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ato`
--

DROP TABLE IF EXISTS `ato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipodeato_id` int(11) DEFAULT NULL,
  `tipodeprocesso_id` int(11) DEFAULT NULL,
  `lotacao_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `emissao` date NOT NULL,
  `assunto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numerodoprocesso` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_200AB83EBA03B330` (`tipodeato_id`),
  KEY `IDX_200AB83E59E842C5` (`tipodeprocesso_id`),
  KEY `IDX_200AB83E7E27C2B8` (`lotacao_id`),
  KEY `IDX_200AB83EA76ED395` (`user_id`),
  CONSTRAINT `FK_200AB83E59E842C5` FOREIGN KEY (`tipodeprocesso_id`) REFERENCES `tipodeprocesso` (`id`),
  CONSTRAINT `FK_200AB83E7E27C2B8` FOREIGN KEY (`lotacao_id`) REFERENCES `lotacao` (`id`),
  CONSTRAINT `FK_200AB83EA76ED395` FOREIGN KEY (`user_id`) REFERENCES `app_users` (`id`),
  CONSTRAINT `FK_200AB83EBA03B330` FOREIGN KEY (`tipodeato_id`) REFERENCES `tipodeato` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ato`
--

LOCK TABLES `ato` WRITE;
/*!40000 ALTER TABLE `ato` DISABLE KEYS */;
/*!40000 ALTER TABLE `ato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ausencia`
--

DROP TABLE IF EXISTS `ausencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ausencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipoausencia_id` int(11) DEFAULT NULL,
  `employeeausencia_id` int(11) DEFAULT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dataini` date DEFAULT NULL,
  `datafim` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4B573FB9204C663` (`tipoausencia_id`),
  KEY `IDX_4B573FB9B55749F` (`employeeausencia_id`),
  CONSTRAINT `FK_4B573FB9204C663` FOREIGN KEY (`tipoausencia_id`) REFERENCES `tipoausencia` (`id`),
  CONSTRAINT `FK_4B573FB9B55749F` FOREIGN KEY (`employeeausencia_id`) REFERENCES `employee` (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ausencia`
--

LOCK TABLES `ausencia` WRITE;
/*!40000 ALTER TABLE `ausencia` DISABLE KEYS */;
/*!40000 ALTER TABLE `ausencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargo`
--

DROP TABLE IF EXISTS `cargo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cargo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargo`
--

LOCK TABLES `cargo` WRITE;
/*!40000 ALTER TABLE `cargo` DISABLE KEYS */;
/*!40000 ALTER TABLE `cargo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cidade`
--

DROP TABLE IF EXISTS `cidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cidade` (
  `codigo` int(11) NOT NULL,
  `ufid` int(11) DEFAULT NULL,
  `uf` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `IDX_6A98335CCF1F4D8F` (`ufid`),
  CONSTRAINT `FK_6A98335CCF1F4D8F` FOREIGN KEY (`ufid`) REFERENCES `estado` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cidade`
--

LOCK TABLES `cidade` WRITE;
/*!40000 ALTER TABLE `cidade` DISABLE KEYS */;
/*!40000 ALTER TABLE `cidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classificacao`
--

DROP TABLE IF EXISTS `classificacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classificacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classificacao`
--

LOCK TABLES `classificacao` WRITE;
/*!40000 ALTER TABLE `classificacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `classificacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departamento`
--

DROP TABLE IF EXISTS `departamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamento`
--

LOCK TABLES `departamento` WRITE;
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documento`
--

DROP TABLE IF EXISTS `documento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) DEFAULT NULL,
  `ausencia_id` int(11) DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B6B12EC78C03F15C` (`employee_id`),
  KEY `IDX_B6B12EC760C93433` (`ausencia_id`),
  CONSTRAINT `FK_B6B12EC760C93433` FOREIGN KEY (`ausencia_id`) REFERENCES `ausencia` (`id`),
  CONSTRAINT `FK_B6B12EC78C03F15C` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documento`
--

LOCK TABLES `documento` WRITE;
/*!40000 ALTER TABLE `documento` DISABLE KEYS */;
/*!40000 ALTER TABLE `documento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `matricula` int(11) NOT NULL,
  `cpf` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `classificacao_id` int(11) DEFAULT NULL,
  `cargo_id` int(11) DEFAULT NULL,
  `cidade_id` int(11) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `escolaridade_id` int(11) DEFAULT NULL,
  `estadocivil_id` int(11) DEFAULT NULL,
  `cidadenatu_id` int(11) DEFAULT NULL,
  `estadonatu_id` int(11) DEFAULT NULL,
  `estadorg_id` int(11) DEFAULT NULL,
  `estadoeleitor_id` int(11) DEFAULT NULL,
  `departamento_id` int(11) DEFAULT NULL,
  `orgao_id` int(11) DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `endereco` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bairro` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cep` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mae` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `especializacoes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datanascimento` date DEFAULT NULL,
  `sexo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cnh` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categoria` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orgaoemissor` varchar(140) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dataemissao` date DEFAULT NULL,
  `pispasep` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oab` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ctps` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seriectps` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cermil` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seriecertmil` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titulo` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `secao` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zona` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banco` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agencia` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `conta` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cedido` tinyint(1) NOT NULL,
  `dataposse` date DEFAULT NULL,
  PRIMARY KEY (`matricula`,`cpf`),
  KEY `IDX_5D9F75A11AB36034` (`classificacao_id`),
  KEY `IDX_5D9F75A1813AC380` (`cargo_id`),
  KEY `IDX_5D9F75A19586CC8` (`cidade_id`),
  KEY `IDX_5D9F75A19F5A440B` (`estado_id`),
  KEY `IDX_5D9F75A1E99A6E1D` (`escolaridade_id`),
  KEY `IDX_5D9F75A1D2D890D2` (`estadocivil_id`),
  KEY `IDX_5D9F75A19F88B3CC` (`cidadenatu_id`),
  KEY `IDX_5D9F75A1E674B18F` (`estadonatu_id`),
  KEY `IDX_5D9F75A1DCCC32BF` (`estadorg_id`),
  KEY `IDX_5D9F75A1A807600E` (`estadoeleitor_id`),
  KEY `IDX_5D9F75A15A91C08D` (`departamento_id`),
  KEY `IDX_5D9F75A15CF83614` (`orgao_id`),
  CONSTRAINT `FK_5D9F75A11AB36034` FOREIGN KEY (`classificacao_id`) REFERENCES `classificacao` (`id`),
  CONSTRAINT `FK_5D9F75A15A91C08D` FOREIGN KEY (`departamento_id`) REFERENCES `departamento` (`id`),
  CONSTRAINT `FK_5D9F75A15CF83614` FOREIGN KEY (`orgao_id`) REFERENCES `orgao` (`id`),
  CONSTRAINT `FK_5D9F75A1813AC380` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`),
  CONSTRAINT `FK_5D9F75A19586CC8` FOREIGN KEY (`cidade_id`) REFERENCES `cidade` (`codigo`),
  CONSTRAINT `FK_5D9F75A19F5A440B` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id`),
  CONSTRAINT `FK_5D9F75A19F88B3CC` FOREIGN KEY (`cidadenatu_id`) REFERENCES `cidade` (`codigo`),
  CONSTRAINT `FK_5D9F75A1A807600E` FOREIGN KEY (`estadoeleitor_id`) REFERENCES `estado` (`id`),
  CONSTRAINT `FK_5D9F75A1D2D890D2` FOREIGN KEY (`estadocivil_id`) REFERENCES `estadocivil` (`id`),
  CONSTRAINT `FK_5D9F75A1DCCC32BF` FOREIGN KEY (`estadorg_id`) REFERENCES `estado` (`id`),
  CONSTRAINT `FK_5D9F75A1E674B18F` FOREIGN KEY (`estadonatu_id`) REFERENCES `estado` (`id`),
  CONSTRAINT `FK_5D9F75A1E99A6E1D` FOREIGN KEY (`escolaridade_id`) REFERENCES `escolaridade` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `escolaridade`
--

DROP TABLE IF EXISTS `escolaridade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `escolaridade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `escolaridade`
--

LOCK TABLES `escolaridade` WRITE;
/*!40000 ALTER TABLE `escolaridade` DISABLE KEYS */;
/*!40000 ALTER TABLE `escolaridade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uf` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado`
--

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estadocivil`
--

DROP TABLE IF EXISTS `estadocivil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estadocivil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estadocivil`
--

LOCK TABLES `estadocivil` WRITE;
/*!40000 ALTER TABLE `estadocivil` DISABLE KEYS */;
/*!40000 ALTER TABLE `estadocivil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lotacao`
--

DROP TABLE IF EXISTS `lotacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lotacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lotacao`
--

LOCK TABLES `lotacao` WRITE;
/*!40000 ALTER TABLE `lotacao` DISABLE KEYS */;
INSERT INTO `lotacao` VALUES (2,'Corregedoria Geral'),(3,'Procuradoria Fiscal'),(4,'Procuradoria Judicial'),(5,'Procuradoria Licitações'),(6,'Procuradoria Patrimonial'),(7,'Procuradoria Administrativa'),(8,'Divisão de Administração Interna'),(9,'Divisão Financeira'),(10,'Chefia de Gabinete'),(11,'Procuradoria Geral Adjunta'),(12,'Procuradoria Geral'),(13,'Divisão de Tecnologia da Informação');
/*!40000 ALTER TABLE `lotacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lotacao_tiposdeato`
--

DROP TABLE IF EXISTS `lotacao_tiposdeato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lotacao_tiposdeato` (
  `lotacao_id` int(11) NOT NULL,
  `tipo_de_ato_id` int(11) NOT NULL,
  PRIMARY KEY (`lotacao_id`,`tipo_de_ato_id`),
  KEY `IDX_A7FE7F957E27C2B8` (`lotacao_id`),
  KEY `IDX_A7FE7F957DC12D4E` (`tipo_de_ato_id`),
  CONSTRAINT `FK_A7FE7F957DC12D4E` FOREIGN KEY (`tipo_de_ato_id`) REFERENCES `tipodeato` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_A7FE7F957E27C2B8` FOREIGN KEY (`lotacao_id`) REFERENCES `lotacao` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lotacao_tiposdeato`
--

LOCK TABLES `lotacao_tiposdeato` WRITE;
/*!40000 ALTER TABLE `lotacao_tiposdeato` DISABLE KEYS */;
INSERT INTO `lotacao_tiposdeato` VALUES (3,1),(3,2),(3,3),(3,4),(3,6),(3,7),(3,8),(3,9),(3,10),(3,11),(3,12),(3,13),(4,1),(4,2),(4,3),(4,4),(4,5),(4,7),(4,8),(4,9),(4,10),(4,11),(4,12),(4,13),(4,14),(4,15),(4,16),(4,17),(5,1),(5,2),(5,3),(5,4),(5,8),(5,9),(5,10),(5,11),(5,13),(6,1),(6,2),(6,3),(6,4),(6,8),(6,9),(6,10),(6,11),(6,13),(6,18),(7,1),(7,2),(7,3),(7,4),(7,8),(7,9),(7,10),(7,11),(7,13);
/*!40000 ALTER TABLE `lotacao_tiposdeato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lotacao_tiposdeprocesso`
--

DROP TABLE IF EXISTS `lotacao_tiposdeprocesso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lotacao_tiposdeprocesso` (
  `lotacao_id` int(11) NOT NULL,
  `tipo_de_processo_id` int(11) NOT NULL,
  PRIMARY KEY (`lotacao_id`,`tipo_de_processo_id`),
  KEY `IDX_3C8715957E27C2B8` (`lotacao_id`),
  KEY `IDX_3C8715955405895B` (`tipo_de_processo_id`),
  CONSTRAINT `FK_3C8715955405895B` FOREIGN KEY (`tipo_de_processo_id`) REFERENCES `tipodeprocesso` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_3C8715957E27C2B8` FOREIGN KEY (`lotacao_id`) REFERENCES `lotacao` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lotacao_tiposdeprocesso`
--

LOCK TABLES `lotacao_tiposdeprocesso` WRITE;
/*!40000 ALTER TABLE `lotacao_tiposdeprocesso` DISABLE KEYS */;
INSERT INTO `lotacao_tiposdeprocesso` VALUES (3,1),(3,2),(3,3),(3,15),(4,1),(4,2),(4,3),(4,15),(5,12),(5,13),(5,14),(5,15),(6,1),(6,2),(6,3),(6,15),(7,4),(7,5),(7,6),(7,7),(7,8),(7,9),(7,10),(7,11),(7,15);
/*!40000 ALTER TABLE `lotacao_tiposdeprocesso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orgao`
--

DROP TABLE IF EXISTS `orgao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orgao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orgao`
--

LOCK TABLES `orgao` WRITE;
/*!40000 ALTER TABLE `orgao` DISABLE KEYS */;
/*!40000 ALTER TABLE `orgao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `printer`
--

DROP TABLE IF EXISTS `printer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `printer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `local` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `printer`
--

LOCK TABLES `printer` WRITE;
/*!40000 ALTER TABLE `printer` DISABLE KEYS */;
INSERT INTO `printer` VALUES (1,'Administração Interna','10.10.1.14'),(2,'Procuradoria Patrimonial','10.10.1.12'),(3,'Procuradoria Judicial','10.10.1.11'),(4,'Financeiro','10.10.1.2'),(5,'Chefia de Gabinete','10.10.1.9'),(6,'Procuradoria Fiscal (Assessoria 1)','10.10.1.5'),(7,'Procuradoria Fiscal (Assessoria 2)','10.10.1.7'),(8,'Procuradoria Fiscal (Procuradores)','10.10.1.27'),(10,'Procuradoria de Licitações','10.10.1.3'),(11,'Corregedoria Geral','10.10.1.13'),(12,'Procuradoria Administrativa','10.10.1.8'),(13,'Procuradoria Judicial (Anexo)','10.10.1.18');
/*!40000 ALTER TABLE `printer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipoausencia`
--

DROP TABLE IF EXISTS `tipoausencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipoausencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipoausencia`
--

LOCK TABLES `tipoausencia` WRITE;
/*!40000 ALTER TABLE `tipoausencia` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipoausencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipodeato`
--

DROP TABLE IF EXISTS `tipodeato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipodeato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `peso` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipodeato`
--

LOCK TABLES `tipodeato` WRITE;
/*!40000 ALTER TABLE `tipodeato` DISABLE KEYS */;
INSERT INTO `tipodeato` VALUES (1,'Pareceres',1),(2,'Despacho de mero expediente',1),(3,'Despacho Circunstanciado',1),(4,'Termo de ratificação',1),(5,'Petição inicial',1),(6,'Petição judicial',1),(7,'Recursos',1),(8,'Memorando',1),(9,'Ofício',1),(10,'Participação em audiências',1),(11,'Participação em reuniões administrativas',1),(12,'Sustentação oral',1),(13,'Outros (especificar)',1),(14,'Contestação',1),(15,'Informações e MS',1),(16,'Embargos à execução',1),(17,'Contrarrazões',1),(18,'Elaboração de minuta de ato normativo',1),(19,'Relatório de PAD',1);
/*!40000 ALTER TABLE `tipodeato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipodeprocesso`
--

DROP TABLE IF EXISTS `tipodeprocesso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipodeprocesso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `peso` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipodeprocesso`
--

LOCK TABLES `tipodeprocesso` WRITE;
/*!40000 ALTER TABLE `tipodeprocesso` DISABLE KEYS */;
INSERT INTO `tipodeprocesso` VALUES (1,'Mandados judiciais recebidos',0),(2,'Publicações com prazo',0),(3,'Processos administrativos',0),(4,'Posse, convocação e acúmulo de cargos',0),(5,'Abonos',0),(6,'Licenças e estabilidade gestacional',0),(7,'Aposentadorias e revisões de aposentadorias',0),(8,'Revisão de enquadramento e mudança de nível',0),(9,'Especiais (especificar)',0),(10,'Exoneração e pagamento de direitos',0),(11,'Averbação/Desaverbação de tempo de serviço',0),(12,'Licitação',0),(13,'Contratos',0),(14,'Convênio',0),(15,'Outros (especificar)',0);
/*!40000 ALTER TABLE `tipodeprocesso` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-26  9:59:35
