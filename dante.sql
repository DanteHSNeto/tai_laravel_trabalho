-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para tai_laravel_trabalho_hand
CREATE DATABASE IF NOT EXISTS `tai_laravel_trabalho_hand` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */;
USE `tai_laravel_trabalho_hand`;

-- Copiando estrutura para tabela tai_laravel_trabalho_hand.adultos
CREATE TABLE IF NOT EXISTS `adultos` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) COLLATE utf8mb4_bin NOT NULL,
  `inclinacao` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `tamanho` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `espacamento` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `pressao` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `pingando` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `cruzando` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Copiando dados para a tabela tai_laravel_trabalho_hand.adultos: 0 rows
/*!40000 ALTER TABLE `adultos` DISABLE KEYS */;
/*!40000 ALTER TABLE `adultos` ENABLE KEYS */;

-- Copiando estrutura para tabela tai_laravel_trabalho_hand.jovem
CREATE TABLE IF NOT EXISTS `jovem` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) COLLATE utf8mb4_bin NOT NULL,
  `inclinacao` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `tamanho` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `espacamento` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `pressao` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `pingando` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `cruzando` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Copiando dados para a tabela tai_laravel_trabalho_hand.jovem: 1 rows
/*!40000 ALTER TABLE `jovem` DISABLE KEYS */;
INSERT INTO `jovem` (`id`, `nome`, `inclinacao`, `tamanho`, `espacamento`, `pressao`, `pingando`, `cruzando`, `created_at`, `updated_at`) VALUES
	(2, 'ed', 'esquerdo', 'grande', 'grande', 'forte', 'direto', 'longo', '2019-11-19 14:23:39', '2019-11-19 14:23:39');
/*!40000 ALTER TABLE `jovem` ENABLE KEYS */;

-- Copiando estrutura para tabela tai_laravel_trabalho_hand.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela tai_laravel_trabalho_hand.migrations: 0 rows
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Copiando estrutura para tabela tai_laravel_trabalho_hand.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela tai_laravel_trabalho_hand.users: 0 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
