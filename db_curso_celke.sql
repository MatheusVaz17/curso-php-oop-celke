-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.27-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para curso_celke
CREATE DATABASE IF NOT EXISTS `curso_celke` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `curso_celke`;

-- Copiando estrutura para tabela curso_celke.artigos
CREATE TABLE IF NOT EXISTS `artigos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(220) NOT NULL,
  `conteudo` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela curso_celke.artigos: ~5 rows (aproximadamente)
INSERT INTO `artigos` (`id`, `titulo`, `conteudo`, `created`, `modified`) VALUES
	(1, 'Artigo 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas euismod ipsum et ullamcorper ultrices. Praesent vehicula lacinia nibh eget tristique. Morbi congue orci eleifend volutpat convallis. Aliquam ultrices lobortis congue. Nulla posuere metus vel consectetur auctor. Proin varius felis ut augue fermentum, lobortis commodo dui faucibus. Praesent tincidunt orci quis auctor condimentum. Sed mollis at nisl vel congue. Donec lacinia elit orci, ut pulvinar tellus pharetra tempor. Vestibulum erat mauris, dignissim auctor hendrerit eu, suscipit eu arcu. Integer a magna nibh. Aliquam id blandit quam, in rhoncus dui. Fusce quis nisl vel ipsum dapibus elementum.', '2023-10-18 09:31:25', NULL),
	(2, 'Artigo 2', 'Quisque ac odio turpis. Donec et massa libero. Aliquam bibendum, quam sed tristique molestie, erat turpis mollis dui, sed ultricies tortor orci id nulla. Integer est nisi, volutpat ut ultricies et, commodo volutpat felis. Nullam rhoncus, dui id interdum interdum, metus nulla sagittis tortor, at sollicitudin nunc nunc in tortor. Mauris hendrerit, dui quis semper imperdiet, tellus nisi aliquam mi, sed mollis ipsum dolor nec libero. Vivamus odio lacus, suscipit id pulvinar eget, consectetur vitae dolor.', '2023-10-18 09:31:25', NULL),
	(3, 'Artigo 3', 'Proin id sollicitudin diam, ut tincidunt lacus. Duis in ante vel ante varius volutpat ac sed felis. Nullam sodales auctor gravida. Aliquam congue, nisl non pharetra malesuada, urna lacus laoreet leo, pharetra blandit nulla metus ut ligula. Donec ullamcorper nisl eget dignissim imperdiet. Nullam rutrum, ante ac facilisis ultricies, risus libero fermentum velit, a sagittis felis sapien in neque. Aenean et euismod nulla. Nam rhoncus hendrerit urna id euismod. In gravida sagittis accumsan. Phasellus sagittis metus sit amet leo auctor, porttitor lacinia lacus facilisis. Etiam tincidunt tellus eu facilisis elementum. Maecenas vel porta arcu, sed egestas nisl. In nec varius nisl. Nam eu auctor lacus. Sed vel mollis libero.', '2023-10-18 09:32:04', NULL),
	(4, 'Artigo 4', 'Nam sollicitudin, nunc a semper lacinia, est mi laoreet felis, a elementum ex felis ut libero. Nullam lobortis est metus, id ornare justo aliquam id. Aenean pretium turpis ante, in mattis nisl pulvinar ut. Mauris eu tristique sapien. Sed sit amet porta orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras tristique vestibulum arcu, a congue libero pulvinar a. Praesent eleifend orci quis aliquam egestas.', '2023-10-18 09:32:04', NULL),
	(5, 'Artigo 5', 'Maecenas placerat enim ipsum, sed facilisis enim sollicitudin quis. Nullam nec augue euismod, dapibus lorem in, tempor enim. Donec at interdum ex. Sed at lectus est. In hac habitasse platea dictumst. In mattis finibus velit, quis vulputate leo mattis sed. Praesent nec lorem dictum, aliquet elit ac, gravida elit. Quisque varius nisi id quam luctus efficitur. Nullam id nisi eleifend, porttitor purus sagittis, gravida eros. Vestibulum placerat in urna at tristique. Quisque ultrices urna enim. In consequat diam et ligula eleifend, eu tincidunt enim rutrum. Morbi et sapien at felis varius consequat eget quis elit. Pellentesque non nibh scelerisque, tempus lacus et, blandit velit. Phasellus malesuada venenatis sapien facilisis lacinia. Aenean imperdiet nibh consectetur interdum ultricies.', '2023-10-18 09:32:04', NULL);

-- Copiando estrutura para tabela curso_celke.sts_contacts_msgs
CREATE TABLE IF NOT EXISTS `sts_contacts_msgs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `subject` varchar(220) NOT NULL,
  `content` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela curso_celke.sts_contacts_msgs: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela curso_celke.sts_homes_tops
CREATE TABLE IF NOT EXISTS `sts_homes_tops` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_top` varchar(220) NOT NULL,
  `description_top` varchar(220) NOT NULL,
  `link_btn_top` varchar(220) NOT NULL,
  `txt_btn_top` varchar(44) NOT NULL,
  `image` varchar(220) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela curso_celke.sts_homes_tops: ~1 rows (aproximadamente)
INSERT INTO `sts_homes_tops` (`id`, `title_top`, `description_top`, `link_btn_top`, `txt_btn_top`, `image`, `created`, `modified`) VALUES
	(1, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porttitor turpis non nisi tristique vehicula et sed erat.', 'http://cursophp.localhost/celke/contato/', 'Contato', 'topo.jpg', '2023-10-25 11:34:35', NULL);

-- Copiando estrutura para tabela curso_celke.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela curso_celke.users: ~1 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `created`, `modified`) VALUES
	(5, 'Teste', 'teste@teste.com', '2023-07-20 10:36:18', NULL);

-- Copiando estrutura para tabela curso_celke.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela curso_celke.usuarios: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
