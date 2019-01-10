-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Jan-2019 às 21:17
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ijemavi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessos_obr`
--

CREATE TABLE `endereco_igreja` (
  `id_end_igj` int(11) NOT NULL,
  `cep_end_igj` varchar(45) DEFAULT NULL,
  `estado_end_igj` varchar(45) DEFAULT NULL,
  `cidade_end_igj` varchar(45) DEFAULT NULL,
  `bairro_end_igj` varchar(45) DEFAULT NULL,
  `rua_end_igj` varchar(45) DEFAULT NULL,
  `numero_end_igj` varchar(45) DEFAULT NULL,
  `complemento_end_igj` varchar(45) DEFAULT NULL,
   PRIMARY KEY (`id_end_igj`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessos_obr`
--

CREATE TABLE `acessos_obr` (
  `id_qtd_acessos_obr` int(11) NOT NULL,
  `data_acesso_obr` date DEFAULT NULL,
  `acessou_obr` varchar(45) DEFAULT NULL,
  `id_obreiro_qtd_acessos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrouses`
--

CREATE TABLE `carrouses` (
  `id` int(11) NOT NULL,
  `imagen_carousel` varchar(100) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `data_hora_post` date NOT NULL,
  `id_obreiro_carousel_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carrouses`
--

INSERT INTO `carrouses` (`id`, `imagen_carousel`, `nome`, `data_hora_post`, `id_obreiro_carousel_fk`) VALUES
(1, 'slide1.jpg', 'Curso um', '0000-00-00', 1),
(2, 'slide2.jpg', 'Curso dois', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `devocional`
--

CREATE TABLE `devocional` (
  `id_devocional` int(11) NOT NULL,
  `titulo_dev` varchar(100) NOT NULL,
  `resumo_dev` varchar(300) NOT NULL,
  `data_dev` date NOT NULL,
  `texto_dev` varchar(4555) NOT NULL,
  `autor_dev` varchar(100) NOT NULL,
  `usuario_logado_dev` varchar(100) DEFAULT NULL,
  `foto_dev` varchar(45) DEFAULT NULL,
  `id_obreiro_dev_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dia_culto`
--

CREATE TABLE `dia_culto` (
  `id_dia_culto` int(11) NOT NULL,
  `dia_culto` varchar(45) DEFAULT NULL,
  `local_culto` varchar(45) DEFAULT NULL,
  `nome_culto` varchar(100) DEFAULT NULL,
  `hora_culto` varchar(45) DEFAULT NULL,
  `id_obreiro_diaculto_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `id_end` int(11) NOT NULL,
  `cep_end` varchar(45) DEFAULT NULL,
  `estado_end` varchar(45) DEFAULT NULL,
  `cidade_end` varchar(45) DEFAULT NULL,
  `bairro_end` varchar(45) DEFAULT NULL,
  `rua_end` varchar(45) DEFAULT NULL,
  `numero_end` varchar(45) DEFAULT NULL,
  `complemento_end` varchar(45) DEFAULT NULL,
  `id_obreiro_end_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id_end`, `cep_end`, `estado_end`, `cidade_end`, `bairro_end`, `rua_end`, `numero_end`, `complemento_end`, `id_obreiro_end_fk`) VALUES
(1, '-', 'Tocantins', 'Palmas', '-', '-', '000', '', 1),
(2, '77050062', 'Tocantins', 'Palmas', 'Santa Helena', '12', '7', NULL, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

CREATE TABLE `galeria` (
  `id_galeria` int(11) NOT NULL,
  `img_galeria` varchar(100) NOT NULL,
  `nome_img_galeria` varchar(100) NOT NULL,
  `postador_img` varchar(70) DEFAULT NULL,
  `data_post_img` varchar(20) DEFAULT NULL,
  `id_obreiro_gal_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `obreiros`
--

CREATE TABLE `obreiros` (
  `id_obreiros` int(11) NOT NULL,
  `nome_obr` varchar(100) NOT NULL,
  `sobrenome_obr` varchar(45) NOT NULL,
  `senha_obr` varchar(45) NOT NULL,
  `cpf_obr` varchar(45) NOT NULL,
  `telefone_obr` varchar(45) DEFAULT NULL,
  `sexo_obr` varchar(45) NOT NULL,
  `email_obr` varchar(45) NOT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `datacad_obr` date NOT NULL,
  `nascimento_obr` date NOT NULL,
  `tipocargo_obr` int(11) DEFAULT NULL,
  `foto_obreiro` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `obreiros`
--

INSERT INTO `obreiros` (`id_obreiros`, `nome_obr`, `sobrenome_obr`, `senha_obr`, `cpf_obr`, `telefone_obr`, `sexo_obr`, `email_obr`, `endereco`, `datacad_obr`, `nascimento_obr`, `tipocargo_obr`, `foto_obreiro`) VALUES
(1, 'Administrador', ' - ', 'admin@ijemavi', '98765432109', '1', 'm', 'admin@ijemavi.com', '1', '2018-12-20', '2018-12-20', 1, NULL),
(2, 'José', 'Ribeiro do Nascimento', 'jr.n.admin.ijemavi', '216.038.043-15', '2', 'Masculino', 'jr.n@live.com', '2', '2019-01-05', '1958-02-16', 2, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `registro_alteracoes`
--

CREATE TABLE `registro_alteracoes` (
  `id_registro_alteracoes` int(11) NOT NULL,
  `id_registro_alt_obreiros_fk` int(11) NOT NULL,
  `id_registro_alt_carrouses_fk` int(11) NOT NULL,
  `id_registro_alt_enderecos_fk` int(11) NOT NULL,
  `id_registro_alt_galeria_fk` int(11) NOT NULL,
  `id_registro_alt_diaculto_fk` int(11) NOT NULL,
  `id_registro_alt_devocional_fk` int(11) NOT NULL,
  `id_registro_alt_telefones_fk` int(11) NOT NULL,
  `registro_historico` varchar(45) NOT NULL,
  `data_registro_alteracoes` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefones`
--

CREATE TABLE `telefones` (
  `id_telefones` int(11) NOT NULL,
  `tel_watzap` varchar(45) DEFAULT NULL,
  `tel_cel` varchar(45) DEFAULT NULL,
  `tel_resid` varchar(45) DEFAULT NULL,
  `id_obreiro_tel_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `telefones`
--

INSERT INTO `telefones` (`id_telefones`, `tel_watzap`, `tel_cel`, `tel_resid`, `id_obreiro_tel_fk`) VALUES
(1, '63984349210', '63984349210', '-', 1),
(2, '', '(63)999985118', NULL, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipocargo_obr`
--

CREATE TABLE `tipocargo_obr` (
  `id_tipocargo_obr_fk` int(11) DEFAULT NULL,
  `id_tipocargo` int(11) NOT NULL,
  `Perfil_cargo_obr` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipocargo_obr`
--

INSERT INTO `tipocargo_obr` (`id_tipocargo_obr_fk`, `id_tipocargo`, `Perfil_cargo_obr`) VALUES
(1, 1, 'Administrador'),
(2, 2, 'Pastor Presidente');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acessos_obr`
--
ALTER TABLE `acessos_obr`
  ADD PRIMARY KEY (`id_qtd_acessos_obr`),
  ADD KEY `fk_acessos_obr_obreiros1_idx` (`id_obreiro_qtd_acessos`);

--
-- Indexes for table `carrouses`
--
ALTER TABLE `carrouses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_carrouses_obreiros_idx` (`id_obreiro_carousel_fk`);

--
-- Indexes for table `devocional`
--
ALTER TABLE `devocional`
  ADD PRIMARY KEY (`id_devocional`),
  ADD KEY `fk_devocional_obreiros1_idx` (`id_obreiro_dev_fk`);

--
-- Indexes for table `dia_culto`
--
ALTER TABLE `dia_culto`
  ADD PRIMARY KEY (`id_dia_culto`),
  ADD KEY `fk_dia_culto_obreiros1_idx` (`id_obreiro_diaculto_fk`);

--
-- Indexes for table `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`id_end`),
  ADD KEY `fk_enderecos_obreiros1_idx` (`id_obreiro_end_fk`);

--
-- Indexes for table `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id_galeria`),
  ADD KEY `fk_galeria_obreiros1_idx` (`id_obreiro_gal_fk`);

--
-- Indexes for table `obreiros`
--
ALTER TABLE `obreiros`
  ADD PRIMARY KEY (`id_obreiros`);

--
-- Indexes for table `registro_alteracoes`
--
ALTER TABLE `registro_alteracoes`
  ADD PRIMARY KEY (`id_registro_alteracoes`),
  ADD KEY `fk_registro_alteracoes_telefones1_idx` (`id_registro_alt_telefones_fk`),
  ADD KEY `fk_registro_alteracoes_devocional1_idx` (`id_registro_alt_devocional_fk`),
  ADD KEY `fk_registro_alteracoes_dia_culto1_idx` (`id_registro_alt_diaculto_fk`),
  ADD KEY `fk_registro_alteracoes_galeria1_idx` (`id_registro_alt_galeria_fk`),
  ADD KEY `fk_registro_alteracoes_enderecos1_idx` (`id_registro_alt_enderecos_fk`),
  ADD KEY `fk_registro_alteracoes_carrouses1_idx` (`id_registro_alt_carrouses_fk`),
  ADD KEY `fk_registro_alteracoes_obreiros1_idx` (`id_registro_alt_obreiros_fk`);

--
-- Indexes for table `telefones`
--
ALTER TABLE `telefones`
  ADD PRIMARY KEY (`id_telefones`),
  ADD KEY `fk_telefones_obreiros1_idx` (`id_obreiro_tel_fk`);

--
-- Indexes for table `tipocargo_obr`
--
ALTER TABLE `tipocargo_obr`
  ADD PRIMARY KEY (`id_tipocargo`),
  ADD KEY `fk_tipocargo_obr_obreiros1_idx` (`id_tipocargo_obr_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acessos_obr`
--
ALTER TABLE `acessos_obr`
  MODIFY `id_qtd_acessos_obr` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carrouses`
--
ALTER TABLE `carrouses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `devocional`
--
ALTER TABLE `devocional`
  MODIFY `id_devocional` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dia_culto`
--
ALTER TABLE `dia_culto`
  MODIFY `id_dia_culto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `id_end` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id_galeria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `obreiros`
--
ALTER TABLE `obreiros`
  MODIFY `id_obreiros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registro_alteracoes`
--
ALTER TABLE `registro_alteracoes`
  MODIFY `id_registro_alteracoes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `telefones`
--
ALTER TABLE `telefones`
  MODIFY `id_telefones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tipocargo_obr`
--
ALTER TABLE `tipocargo_obr`
  MODIFY `id_tipocargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `acessos_obr`
--
ALTER TABLE `acessos_obr`
  ADD CONSTRAINT `fk_acessos_obr_obreiros1` FOREIGN KEY (`id_obreiro_qtd_acessos`) REFERENCES `obreiros` (`id_obreiros`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `devocional`
--
ALTER TABLE `devocional`
  ADD CONSTRAINT `fk_devocional_obreiros1` FOREIGN KEY (`id_obreiro_dev_fk`) REFERENCES `obreiros` (`id_obreiros`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `dia_culto`
--
ALTER TABLE `dia_culto`
  ADD CONSTRAINT `fk_dia_culto_obreiros1` FOREIGN KEY (`id_obreiro_diaculto_fk`) REFERENCES `obreiros` (`id_obreiros`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `fk_enderecos_obreiros1` FOREIGN KEY (`id_obreiro_end_fk`) REFERENCES `obreiros` (`id_obreiros`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `galeria`
--
ALTER TABLE `galeria`
  ADD CONSTRAINT `fk_galeria_obreiros1` FOREIGN KEY (`id_obreiro_gal_fk`) REFERENCES `obreiros` (`id_obreiros`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `registro_alteracoes`
--
ALTER TABLE `registro_alteracoes`
  ADD CONSTRAINT `fk_registro_alteracoes_carrouses1` FOREIGN KEY (`id_registro_alt_carrouses_fk`) REFERENCES `carrouses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_registro_alteracoes_devocional1` FOREIGN KEY (`id_registro_alt_devocional_fk`) REFERENCES `devocional` (`id_devocional`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_registro_alteracoes_dia_culto1` FOREIGN KEY (`id_registro_alt_diaculto_fk`) REFERENCES `dia_culto` (`id_dia_culto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_registro_alteracoes_enderecos1` FOREIGN KEY (`id_registro_alt_enderecos_fk`) REFERENCES `enderecos` (`id_end`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_registro_alteracoes_galeria1` FOREIGN KEY (`id_registro_alt_galeria_fk`) REFERENCES `galeria` (`id_galeria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_registro_alteracoes_obreiros1` FOREIGN KEY (`id_registro_alt_obreiros_fk`) REFERENCES `obreiros` (`id_obreiros`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_registro_alteracoes_telefones1` FOREIGN KEY (`id_registro_alt_telefones_fk`) REFERENCES `telefones` (`id_telefones`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `telefones`
--
ALTER TABLE `telefones`
  ADD CONSTRAINT `fk_telefones_obreiros1` FOREIGN KEY (`id_obreiro_tel_fk`) REFERENCES `obreiros` (`id_obreiros`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tipocargo_obr`
--
ALTER TABLE `tipocargo_obr`
  ADD CONSTRAINT `fk_tipocargo_obr_obreiros1` FOREIGN KEY (`id_tipocargo_obr_fk`) REFERENCES `obreiros` (`id_obreiros`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
