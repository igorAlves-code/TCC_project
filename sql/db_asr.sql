-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08-Nov-2022 às 06:24
-- Versão do servidor: 8.0.27
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_asr`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamentos`
--

DROP TABLE IF EXISTS `agendamentos`;
CREATE TABLE IF NOT EXISTS `agendamentos` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `userId` bigint UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recurso` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ambiente` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start` date NOT NULL,
  `retirada` int NOT NULL,
  `devolucao` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `agendamentos_userid_foreign` (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `agendamentos`
--

INSERT INTO `agendamentos` (`id`, `userId`, `title`, `recurso`, `ambiente`, `start`, `retirada`, `devolucao`, `created_at`, `updated_at`) VALUES
(1, 13, 'Gabriel Souza', 'Datashow Epson', 'Laboratório de Informática 3', '2022-11-10', 6, 7, '2022-11-08 11:51:34', '2022-11-08 11:51:34'),
(2, 13, 'Gabriel Souza', 'Datashow Epson', 'Laboratório de Informática 3', '2022-11-15', 6, 7, '2022-11-08 11:51:34', '2022-11-08 11:51:34'),
(3, 13, 'Gabriel Souza', 'Datashow Epson', 'Laboratório de Informática 1', '2022-11-14', 7, 9, '2022-11-08 09:18:10', '2022-11-08 09:18:10'),
(4, 13, 'Gabriel Souza', 'Notebook Lenovo', 'Laboratório de Informática 2', '2022-11-24', 3, 3, '2022-11-08 09:18:21', '2022-11-08 09:18:21'),
(5, 13, 'Gabriel Souza', 'Datashow Epson', 'Laboratório de Informática 1', '2022-11-25', 7, 7, '2022-11-08 09:18:28', '2022-11-08 09:18:28'),
(6, 13, 'Gabriel Souza', 'Datashow Epson', 'Laboratório de Química 2', '2022-11-16', 6, 7, '2022-11-08 09:18:40', '2022-11-08 09:18:40');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ambiente`
--

DROP TABLE IF EXISTS `ambiente`;
CREATE TABLE IF NOT EXISTS `ambiente` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomeAmbiente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoAmbiente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantidadeAmbiente` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ambiente_nomeambiente_unique` (`nomeAmbiente`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `ambiente`
--

INSERT INTO `ambiente` (`id`, `nomeAmbiente`, `tipoAmbiente`, `quantidadeAmbiente`, `created_at`, `updated_at`) VALUES
(1, 'Laboratório de Informática 1', 'Laboratório de Informática', 1, '2022-11-03 18:22:37', '2022-11-03 18:22:37'),
(2, 'Laboratório de Informática 2', 'Laboratório de Informática', 1, '2022-11-07 19:43:13', '2022-11-07 19:43:13'),
(3, 'Laboratório de Informática 3', 'Laboratório de Informática', 1, '2022-11-07 19:43:19', '2022-11-07 19:43:19'),
(4, 'Laboratório de Informática 4', 'Laboratório de Informática', 1, '2022-11-07 19:43:26', '2022-11-07 19:43:26'),
(5, 'Laboratório de Química 1', 'Laboratório de Química', 1, '2022-11-07 19:43:41', '2022-11-07 19:43:41'),
(6, 'Laboratório de Química 2', 'Laboratório de Química', 1, '2022-11-07 19:43:54', '2022-11-07 19:43:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamento`
--

DROP TABLE IF EXISTS `equipamento`;
CREATE TABLE IF NOT EXISTS `equipamento` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomeEquipamento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoEquipamento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantidadeEquipamento` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `equipamento_nomeequipamento_unique` (`nomeEquipamento`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `equipamento`
--

INSERT INTO `equipamento` (`id`, `nomeEquipamento`, `tipoEquipamento`, `quantidadeEquipamento`, `created_at`, `updated_at`) VALUES
(1, 'Notebook Positivo', 'Notebook', 5, '2022-11-03 18:22:45', '2022-11-07 19:44:28'),
(2, 'Datashow Epson', 'Datashow', 3, '2022-11-07 19:44:07', '2022-11-07 19:45:56'),
(3, 'Notebook Lenovo', 'Notebook', 10, '2022-11-07 19:44:21', '2022-11-07 19:44:21'),
(4, 'Datashow Favin', 'Datashow', 2, '2022-11-07 19:45:48', '2022-11-07 19:45:48');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_18_033606_create_enviroments_table', 1),
(6, '2022_10_21_002438_create_equipments_table', 1),
(7, '2022_10_28_212229_create_agendamento_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('gabrielsouzat2005@outlook.com', '$2y$10$uh6CrnJbWJD1Kbo0NTnFvuXGnuHXPwE9g8J89yhV0pQ7rckYhMAt6', '2022-11-08 09:05:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sobrenome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disciplina` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `acesso` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `sobrenome`, `email`, `email_verified_at`, `password`, `disciplina`, `admin`, `acesso`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pattie', 'Silva', 'myrtice15@example.net', '2022-11-03 18:00:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'filo', 1, 0, 'KAEGonbmKG', '2022-11-03 18:00:43', '2022-11-03 18:00:43'),
(3, 'Stefan', 'Silva', 'bwalter@example.net', '2022-11-03 18:00:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'filo', 0, 0, 'ISCkP4hRQC', '2022-11-03 18:00:43', '2022-11-03 18:00:43'),
(5, 'Reyes', 'Silva', 'sanford12@example.net', '2022-11-03 18:00:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'filo', 1, 0, 'KY7WltIBVnQc9CigM8wB12YsG2vDfNDF1qgCzMVIfXnZzJ34hglW1ooOBtOy', '2022-11-03 18:00:43', '2022-11-03 18:00:43'),
(6, 'Miller', 'Silva', 'pcartwright@example.com', '2022-11-03 18:01:37', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'geo', 0, 1, '1PUC0OfsYl', '2022-11-03 18:01:37', '2022-11-03 18:01:37'),
(7, 'Bethel', 'Silva', 'titus.auer@example.net', '2022-11-03 18:01:37', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'geo', 1, 1, 'r7Xu37o2yX', '2022-11-03 18:01:37', '2022-11-03 18:01:37'),
(8, 'Karl', 'Silva', 'virginie.hermiston@example.com', '2022-11-03 18:01:37', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'geo', 1, 0, 'aW37kIIUGQ', '2022-11-03 18:01:37', '2022-11-03 18:01:37'),
(9, 'Rosemarie', 'Silva', 'blick.jaylin@example.com', '2022-11-03 18:01:37', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'geo', 0, 1, 'LZpOwWXpFn', '2022-11-03 18:01:37', '2022-11-03 18:01:37'),
(10, 'Bartholome', 'Silva', 'gkonopelski@example.com', '2022-11-03 18:01:37', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'geo', 0, 0, 'RUXAnoyz9h', '2022-11-03 18:01:37', '2022-11-03 18:01:37'),
(13, 'Gabriel', 'Souza', 'gabrielsouzat2005@outlook.com', '2022-11-07 17:19:35', '$2y$10$mXu51XCGunWDardTKNbB1.cWphPT0nLz55LKMnEpyoTdmz..3UDgm', NULL, 1, 0, 'N2NrjUFkrrsz0kHOfCMJBbqqxZLPaocrUYv7IePSx5gG3iGt4nZxMurCm4wI', '2022-11-03 18:51:46', '2022-11-07 19:42:01'),
(16, 'Gabriel', 'Silva', 'gabrielsouzat2005@gmail.com', '2022-11-07 17:24:08', '$2y$10$KaDcbOn8F6X/prNQ1rMlqOyO6w.OA5A0tWUBXcq35zAZ7FZghe5t.', 'Matemática', 0, 0, '0dDBhYtC2d6EWMLcayi3fd5UI7pEFdG8GeNaBXbglQMMZwBJw07cptrCDfW4', '2022-11-03 19:00:36', '2022-11-07 17:24:08');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD CONSTRAINT `agendamentos_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
