-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Jun-2023 às 20:57
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vssfeshion`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `data` datetime NOT NULL,
  `type_imagem` varchar(45) NOT NULL,
  `tmp_imagem` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id`, `name`, `email`, `password`, `cpf`, `telefone`, `data`, `type_imagem`, `tmp_imagem`) VALUES
(1, 'Vitor', 'vss7869@gmail.com', '21112004', '23456789105', '71982345671', '0000-00-00 00:00:00', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `genero` varchar(30) NOT NULL,
  `tamanho` varchar(20) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `quantidade` int(7) NOT NULL,
  `estilo_roupa` varchar(40) NOT NULL,
  `name_imagem` varchar(200) DEFAULT NULL,
  `type_imagem` varchar(30) DEFAULT NULL,
  `tmp_imagem` blob DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `administrador_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `titulo`, `descricao`, `genero`, `tamanho`, `preco`, `quantidade`, `estilo_roupa`, `name_imagem`, `type_imagem`, `tmp_imagem`, `usuario_id`, `administrador_id`) VALUES
(2, 'Cogumelandia', 'Camisa em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m, p, pp', '220.00', 99, 'camisa', '1.png', 'image/png', 0x433a5c78616d70705c746d705c706870424142302e746d70, 23, 1),
(5, 'Space', 'Camisa em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m, p, pp', '200.00', 77, 'camisa', '2.png', 'image/png', 0x433a5c78616d70705c746d705c706870313639362e746d70, NULL, 1),
(7, 'din din', 'Camisa em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m, p, pp', '210.00', 79, 'camisa', '3.png', 'image/png', 0x433a5c78616d70705c746d705c706870363735452e746d70, NULL, 1),
(8, 'Molusco', 'Camisa em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m', '190.00', 117, 'camisa', '5.png', 'image/png', 0x433a5c78616d70705c746d705c706870424245332e746d70, 23, 1),
(9, 'Rosa', 'Camisa em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m, p', '199.99', 150, 'camisa', '6.png', 'image/png', 0x433a5c78616d70705c746d705c706870434246452e746d70, NULL, 1),
(10, 'Pitagoras', 'Camisa em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m, p, pp', '190.00', 159, 'camisa', '7.png', 'image/png', 0x433a5c78616d70705c746d705c706870434432332e746d70, NULL, 1),
(11, 'Marrom', 'Camisa em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m, p, pp', '150.00', 141, 'camisa', '8.png', 'image/png', 0x433a5c78616d70705c746d705c706870354346312e746d70, NULL, 1),
(12, 'Bear', 'Camisa em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m, p, pp', '280.00', 128, 'camisa', '9.png', 'image/png', 0x433a5c78616d70705c746d705c706870353946462e746d70, NULL, 1),
(13, 'Bear Cerveja', 'Camisa em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m', '250.00', 105, 'camisa', '10.png', 'image/png', 0x433a5c78616d70705c746d705c706870313641392e746d70, NULL, 1),
(14, 'Mat', 'Camisa em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m', '220.00', 135, 'camisa', '4.png', 'image/png', 0x433a5c78616d70705c746d705c706870423531432e746d70, NULL, 1),
(15, 'Smille', 'Camisa em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m, p, pp', '210.00', 119, 'camisa', '1.png', 'image/png', 0x433a5c78616d70705c746d705c706870324246382e746d70, NULL, 1),
(16, 'Colorido', 'Camisa em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m, p', '150.00', 105, 'calca', '2.png', 'image/png', 0x433a5c78616d70705c746d705c706870324641442e746d70, NULL, 1),
(17, 'Smille', 'Camisa em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m, p, pp', '190.00', 120, 'calca', '1.png', 'image/png', 0x433a5c78616d70705c746d705c706870444130382e746d70, NULL, 1),
(18, 'Social', 'Camisa em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m, p, pp', '140.00', 105, 'calca', '3.png', 'image/png', 0x433a5c78616d70705c746d705c706870354334342e746d70, NULL, 1),
(19, 'Orelhão', 'Camisa em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m, p, pp', '190.00', 130, 'calca', '4.png', 'image/png', 0x433a5c78616d70705c746d705c706870443932312e746d70, NULL, 1),
(20, 'Black', 'Camisa em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m, p, pp', '170.00', 140, 'calca', '5.png', 'image/png', 0x433a5c78616d70705c746d705c706870454238432e746d70, NULL, 1),
(21, 'Gins Star', 'Camisa em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m, p, pp', '200.00', 125, 'calca', '7.png', 'image/png', 0x433a5c78616d70705c746d705c706870414330342e746d70, NULL, 1),
(22, 'Green', 'Calça em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m, p, pp', '120.00', 159, 'calca', '8.png', 'image/png', 0x433a5c78616d70705c746d705c706870344542452e746d70, NULL, 1),
(23, 'Cinza ', 'Calça em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m, p, pp', '140.00', 159, 'calca', '9.png', 'image/png', 0x433a5c78616d70705c746d705c706870344544392e746d70, NULL, 1),
(24, 'Mon Sol', 'Calça em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m, p, pp', '240.00', 113, 'calca', '10.png', 'image/png', 0x433a5c78616d70705c746d705c706870453443312e746d70, NULL, 1),
(25, 'Smille', 'Calça em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g', '210.00', 115, 'moleton', 'Casaco.png', 'image/png', 0x433a5c78616d70705c746d705c706870443032432e746d70, NULL, 1),
(26, 'Cueio', 'Calça em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m, p, pp', '230.00', 105, 'moleton', 'casaco1.png', 'image/png', 0x433a5c78616d70705c746d705c706870443637312e746d70, NULL, 1),
(27, 'American', 'Calça em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m, p, pp', '210.00', 95, 'moleton', 'casaco2.png', 'image/png', 0x433a5c78616d70705c746d705c706870374231462e746d70, NULL, 1),
(28, 'Social', 'Calça em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m, p, pp', '200.00', 110, 'moleton', 'casaco3.png', 'image/png', 0x433a5c78616d70705c746d705c706870464244392e746d70, NULL, 1),
(29, 'Smile Smile', 'Calça em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m, p, pp', '250.00', 110, 'moleton', 'casaco4.png', 'image/png', 0x433a5c78616d70705c746d705c706870383844372e746d70, NULL, 1),
(30, 'Buort', 'Calça em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m, p, pp', '280.00', 90, 'moleton', 'Casaco5.png', 'image/png', 0x433a5c78616d70705c746d705c706870393345462e746d70, NULL, 1),
(31, 'Bateria', 'Calça em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m, p, pp', '220.00', 110, 'moleton', 'Casaco6.png', 'image/png', 0x433a5c78616d70705c746d705c706870313431382e746d70, NULL, 1),
(32, 'Bejami', 'Calça em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m, p, pp', '270.00', 105, 'moleton', 'Casaco7.png', 'image/png', 0x433a5c78616d70705c746d705c706870393031462e746d70, NULL, 1),
(33, 'MON', 'Calça em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m, p, pp', '290.00', 105, 'moleton', 'Casaco8.png', 'image/png', 0x433a5c78616d70705c746d705c7068703344392e746d70, NULL, 1),
(34, 'SocialMo', 'Calça em ótimo estado e 100% algodão bastante confortável para festas e momentos casuais ', 'Unissex', 'gg, g, m, p, pp', '200.00', 94, 'moleton', 'Casaco9.png', 'image/png', 0x433a5c78616d70705c746d705c706870433833342e746d70, NULL, 1),
(35, 'Misture', 'Calça muito boa para caminhada', 'Unissex', 'gg, g, m, p', '212.00', 99, 'calca', '6.png', 'image/png', 0x433a5c78616d70705c746d705c706870373036462e746d70, NULL, 1),
(40, 'Moleton', 'rraefrwesfaef', 'Masculino', 'gg, g, m', '200.00', 40, 'moleton', 'WhatsApp Image 2023-03-27 at 11.47.54.jpeg', 'image/jpeg', NULL, 25, 1),
(41, 'calca marrom', 'guyftfhffkyuyfgugfufyikfvikfuyutfyhdyrhd', 'Masculino', 'm, p, pp', '100.00', 55, 'calca', 'Casacos (1).png', 'image/png', NULL, 23, 1),
(42, 'Calça Rasgada', 'Calça muito boa 100%', 'Masculino', 'gg, g, m, p, pp', '89.99', 100, 'calca', 'Casacos (1).png', 'image/png', NULL, 27, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `cpf` varchar(14) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `name_imagem` varchar(250) DEFAULT NULL,
  `type_imagem` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `name`, `email`, `password`, `created_at`, `cpf`, `telefone`, `name_imagem`, `type_imagem`) VALUES
(12, 'Vitor Silva', 'Vitão21@gmail.com', '21112004', '2023-05-22 19:03:58', '86444500609', '71991366778', NULL, NULL),
(14, 'Licia', 'lioLicia@gmail.com', '21112004', '2023-05-22 23:30:50', '14255566687', '71986751234', NULL, NULL),
(22, 'Laraisa', 'laismelo52@gmail.com', '21112004', '2023-05-23 20:54:50', '86444500508', '7199144255', 'Bike Celular Acessorios Moda Jovem Variedades (2).png', 'image/png'),
(23, 'Ramon', 'ramonChamusca@gmail.com', '21112004', '2023-05-24 14:56:07', '77788899954', '7199144234', 'download.jpg', 'image/jpeg'),
(24, 'Paulo', 'paulo@gmail.com', '21112004', '2023-05-28 12:19:12', '77788855544', '719822156621', 'download.jpg', 'image/jpeg'),
(25, 'Anildo', 'anildo@gmail.com', '21112004', '2023-06-08 09:03:55', '21234509866', '7199144234', 'WhatsApp Image 2023-03-27 at 11.47.54.jpeg', 'image/jpeg'),
(27, 'Vitor', 'vitin52@gmail.com', '21112004', '2023-06-09 17:53:44', '66677788899', '71991366245', 'download.jpg', 'image/jpeg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `tamanho` varchar(5) NOT NULL,
  `data_venda` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`id`, `usuario_id`, `produto_id`, `quantidade`, `total`, `tamanho`, `data_venda`) VALUES
(3, 25, 8, 3, '570.00', ' G', '2023-06-08 12:14:07'),
(4, 25, 12, 2, '560.00', ' M', '2023-06-08 12:19:33'),
(11, 23, 7, 1, '210.00', ' PP', '2023-06-09 18:15:10'),
(12, 23, 5, 2, '400.00', ' PP', '2023-06-09 18:24:12'),
(14, 23, 24, 2, '480.00', ' G', '2023-06-09 20:10:44'),
(16, 27, 15, 1, '210.00', ' M', '2023-06-09 20:57:38'),
(18, 27, 11, 2, '300.00', ' M', '2023-06-09 21:21:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_administrador_id` (`administrador_id`),
  ADD KEY `fk_usuario_id` (`usuario_id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_id3` (`usuario_id`),
  ADD KEY `fk_usuario_id4` (`produto_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_administrador_id` FOREIGN KEY (`administrador_id`) REFERENCES `administrador` (`id`),
  ADD CONSTRAINT `fk_usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `fk_usuario_id4` FOREIGN KEY (`produto_id`) REFERENCES `produto` (`id`),
  ADD CONSTRAINT `venda_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
