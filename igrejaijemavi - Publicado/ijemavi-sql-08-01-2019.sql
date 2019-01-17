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



-- DROP DATABASE IF EXISTS igreja68_ijemavi;
-- CREATE DATABASE IF NOT EXISTS igreja68_ijemavi;
USE igreja68_ijemavi;
--
-- Database: `ijemavi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessos_obr`
--

CREATE TABLE `endereco_igreja` (
  `id_end_igj` int(11) NOT NULL AUTO_INCREMENT,
  `cep_end_igj` varchar(45) DEFAULT NULL,
  `estado_end_igj` varchar(45) DEFAULT NULL,
  `cidade_end_igj` varchar(45) DEFAULT NULL,
  `bairro_end_igj` varchar(45) DEFAULT NULL,
  `rua_end_igj` varchar(45) DEFAULT NULL,
  `numero_end_igj` varchar(45) DEFAULT NULL,
  `complemento_end_igj` varchar(45) DEFAULT NULL,
   PRIMARY KEY (`id_end_igj`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `endereco_igreja` (`id_end_igj`, `cep_end_igj`, `estado_end_igj`, `cidade_end_igj`, `bairro_end_igj`, `rua_end_igj`, `numero_end_igj`, `complemento_end_igj`) VALUES
(1, '77062-052', 'Tocantins', 'Palmas', 'Aureny III (3)', 'Av E', 'Lt 12', '');

-- --------------------------------------------------------

-- Estrutura da tabela `carrouses`
--

CREATE TABLE `carrouses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagen_carousel` varchar(100) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `data_hora_post` varchar(45) DEFAULT NULL,
  `data_evento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carrouses`
--

INSERT INTO `carrouses` (`id`, `imagen_carousel`, `nome`, `data_hora_post`,`data_evento`) VALUES
(1, 'banner1.jpg', 'banner1', '0000-00-00', '0000-00-00'),
(2, 'banner2.jpg', 'banner2', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `devocional`
--

CREATE TABLE `devocional` (
  `id_devocional` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_dev` varchar(100) DEFAULT NULL,
  `resumo_dev` varchar(300) DEFAULT NULL,
  `data_dev` date NOT NULL,
  `texto_dev` varchar(4555) DEFAULT NULL,
  `autor_dev` varchar(100) DEFAULT NULL,
  `usuario_logado_dev` varchar(100) DEFAULT NULL,
  `foto_dev` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_devocional`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Extraindo dados da tabela `devocional`
--

INSERT INTO `devocional` (`id_devocional`, `titulo_dev`, `resumo_dev`, `data_dev`, `texto_dev`, `autor_dev`, `usuario_logado_dev`, `foto_dev`) VALUES
(1, 'Ele batizará vocês', 'Dois aspectos do batismo de Jesus são descritos com as imagens do vento e do fogo. O vento traz algo para nós (o próprio sopro de Deus) e o fogo leva embora algo de nós (o joio inútil de nossos pecados).', '2019-01-10', 'Eu batizo vocês aqui no rio para mudar essa velha vida na vida no Reino, mas o mais importante ainda está por vir: O protagonista deste drama – perante o qual sou apenas um figurante – acenderá a vida do Reino em vocês, um fogo interior, o Espírito Santo dentro de vocês, operando a mudança de dentro para fora. Ele vai limpar a casa. Fará uma varredura completa na vida de vocês. Tudo que for autêntico será posto no lugar certo, na presença de Deus; o que for contrário à verdade será jogado fora com o lixo, para ser queimado. (Mateus 3.11-12)\r\n\r\nDois aspectos do batismo de Jesus são descritos com as imagens do vento e do fogo. O vento traz algo para nós (o próprio sopro de Deus) e o fogo leva embora algo de nós (o joio inútil de nossos pecados). A debulha nem sempre é algo agradável, especialmente quando somos os grãos. Mas os resultados são bons. Quem quer ficar misturado com o joio para sempre?\r\n\r\nCompare os dois batismos.\r\n\r\nSou grato, Deus, porque me tomas com muita seriedade e trabalhas em mim com muito cuidado. Vejo-me, neste momento, lançado ao ar pela pá que usas para a debulha, peneirado e limpo pelo vento de teu Espírito, pronto para ser usado em teus celeiros. Amém.', '[Eugene H. Peterson]. Editora Ultimato.', '1 - Administrador', 'Devocional-10-01-2019--18-01-45.jpg'),
(2, 'Nosso Pai no céu', 'Vocês, orem assim: Pai nosso, que estás nos céus! Santificado seja o teu nome. (Mateus 6.9)', '2019-01-10', 'Como devemos nos dirigir a Deus? Como devemos honrar aquele para quem oramos? E como devemos nos apresentar para que ele seja gracioso e disponha-se a nos ouvir? Nenhum outro nome em lugar algum deixa uma impressão mais favorável em Deus do que o nome “Pai”. Chamá-lo de Pai é uma maneira amistosa, afetiva, profunda e sincera de nos dirigirmos a ele. Se o chamamos de Senhor, ou Deus, ou Juiz, não temos o mesmo conforto. Pois o nome Pai é instintivo e naturalmente afetivo. Essa é a razão pela qual ouvir-nos chamá-lo de Pai agrada mais a Deus e o comove a nos ouvir. Ao fazê-lo, nós nos reconhecemos como filhos de Deus, o que novamente excita o coração dele. Pois não há voz mais querida para um pai do que a do seu próprio filho.\r\n\r\nTambém é muito bom quando dizemos “no céu”. Tais palavras expressam necessidade penosa e miséria porque nós estamos na terra e Deus está no céu. Aqueles que oram: “Pai nosso que estás no céu”, e o fazem do mais profundo dos seus corações, reconhecem que eles têm um Pai e que esse Pai está no céu. Além disso, eles reconhecem que eles estão abandonados na terra e na miséria. Aqueles que oram dessa forma logo sentem um desejo sincero e ardente, assim como uma criança que vive longe da terra dos seus pais em miséria e aflição entre estrangeiros. É como se eles estivessem dizendo: “Oh, Pai, tu estás no céu. Eu sou o teu pobre filho longe de ti na terra, em miséria, em perigo, em aflição e em necessidade. Estou cercado de demônios, grandes inimigos e vários tipos de perigo”. Aqueles que oram dessa maneira permanecem com os corações puros e enaltecidos em direção a Deus. Eles conseguem orar e obter a misericórdia de Deus.', ' Retirado de Somente a Fé – Um Ano com Lutero. Editora Ultimato.', '1 - Administrador', 'Devocional-10-01-2019--19-51-54.jpg'),
(3, 'Medo de Desapontar a Deus', '“Uma pessoa pode pedir perdão só até um certo ponto,” contenda o nosso bom senso comum. Se o diabo consegue nos convencer que a graça de Deus tem limites, vamos formar a conclusão lógica. A conta ficou vazia, não temos mais acesso a Deus.', '2019-01-13', '“Uma pessoa pode pedir perdão só até um certo ponto,” contenda o nosso bom senso comum. Se o diabo consegue nos convencer que a graça de Deus tem limites, vamos formar a conclusão lógica. A conta ficou vazia, não temos mais acesso a Deus.\r\n\r\n“Tenha bom ânimo, filho; os seus pecados estão perdoados”. Jesus pronunciou estas palavras para um paraplégico em Mateus 9:2. Jesus estava pensando em nosso maior problema: pecado. Ele estava considerando o nosso medo mais profundo: o medo de desapontar a Deus. Deus não guarda lista dos nossos erros. O amor dele afasta o medo porque ele afasta o pecado! Primeira João 3:20 diz “Se o nosso coração nos condena, Deus é maior que o nosso coração, e sabe todas as coisas.”', 'Max Lucado', '1 - Administrador', 'Devocional-13-01-2019--21-50-50.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dia_culto`
--

CREATE TABLE `dia_culto` (
  `id_dia_culto` int(11) NOT NULL AUTO_INCREMENT,
  `dia_culto` varchar(45) DEFAULT NULL,
  `nome_culto` varchar(100) DEFAULT NULL,
  `hora_culto` varchar(45) DEFAULT NULL,
  `local_culto` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_dia_culto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------
-- Extraindo dados da tabela `dia_culto`
--

INSERT INTO `dia_culto` (`id_dia_culto`, `dia_culto`, `nome_culto`,`hora_culto`, `local_culto`) VALUES
(1, 'Domingo', 'Culto da Faília', '19:30h', 'Templo Sede'),
(2, 'Segunda', 'Culto Evangelístico', '19:30h', 'Templo Sede'),
(3, 'Terça', 'Culto de Ação Social', '19:30h', 'Templo Sede'),
(4, 'Quarta', 'Livre', '', 'Templo Sede'),
(5, 'Quinta', 'Culto da Vitória', '19:30h', 'Templo Sede'),
(6, 'Sexta', 'Culto das Rebecas', '19:30h', 'Templo Sede'),
(7, 'Sabado', 'Culto dos Jovens', '19:30h', 'Templo Sede');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `id_end` int(11) NOT NULL AUTO_INCREMENT,
  `cep_end` varchar(45) DEFAULT NULL,
  `estado_end` varchar(45) DEFAULT NULL,
  `cidade_end` varchar(45) DEFAULT NULL,
  `bairro_end` varchar(45) DEFAULT NULL,
  `rua_end` varchar(45) DEFAULT NULL,
  `numero_end` varchar(45) DEFAULT NULL,
  `complemento_end` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_end`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id_end`, `cep_end`, `estado_end`, `cidade_end`, `bairro_end`, `rua_end`, `numero_end`, `complemento_end`) VALUES
(1, '-', 'Tocantins', 'Palmas', '-', '-', '000', ''),
(2, '77050062', 'Tocantins', 'Palmas', 'Santa Helena', '12', '7', '' );

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

CREATE TABLE `galeria` (
  `id_galeria` int(11) NOT NULL AUTO_INCREMENT,
  `nome_img_gal` varchar(100) DEFAULT NULL,
  `nome_escolhido` varchar(100) DEFAULT NULL,
  `postador_img` varchar(70) DEFAULT NULL,
  `data_post_img` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_galeria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `obreiros`
--

CREATE TABLE `obreiros` (
  `id_obreiros` int(11) NOT NULL AUTO_INCREMENT,
  `nome_obr` varchar(100) DEFAULT NULL,
  `sobrenome_obr` varchar(45) DEFAULT NULL,
  `senha_obr` varchar(45) DEFAULT NULL,
  `cpf_obr` varchar(45) DEFAULT NULL,
  `telefone_obr` varchar(45) DEFAULT NULL,
  `sexo_obr` varchar(45) DEFAULT NULL,
  `email_obr` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `datacad_obr` date DEFAULT NULL,
  `nascimento_obr` date DEFAULT NULL,
  `tipocargo_obr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_obreiros`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `obreiros`
--

INSERT INTO `obreiros` (`id_obreiros`, `nome_obr`, `sobrenome_obr`, `senha_obr`, `cpf_obr`, `telefone_obr`, `sexo_obr`, `email_obr`, `endereco`, `datacad_obr`, `nascimento_obr`, `tipocargo_obr`) VALUES
(1, 'Administrador', ' - ', 'admin@ijemavi', '98765432109', '1', 'Mascilino', 'admin@ijemavi.com', '1', '2018-12-20', '2018-12-20', 1),
(2, 'José', 'Ribeiro do Nascimento', 'jr.n.admin.ijemavi', '216.038.043-15', '2', 'Masculino', 'jr.n@live.com', '2', '2019-01-05', '1958-02-16', 2);

-- --------------------------------------------------------

-- Estrutura da tabela `telefones`
--

CREATE TABLE `telefones` (
  `id_telefones` int(11) NOT NULL AUTO_INCREMENT,
  `tel_watzap` varchar(45) DEFAULT NULL,
  `tel_cel` varchar(45) DEFAULT NULL,
  `tel_resid` varchar(45) DEFAULT NULL,
  `id_obreiro_tel_fk` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_telefones`),
  FOREIGN KEY (id_obreiro_tel_fk) REFERENCES obreiros(id_obreiros)
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
  `id_tipocargo` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipocargo_obr_fk` int(11) DEFAULT NULL,
  `Perfil_cargo_obr` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_tipocargo`),
  FOREIGN KEY (id_tipocargo_obr_fk) REFERENCES obreiros(id_obreiros)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipocargo_obr`
--

INSERT INTO `tipocargo_obr` (`id_tipocargo_obr_fk`, `id_tipocargo`, `Perfil_cargo_obr`) VALUES
(1, 1, 'Administrador'),
(2, 2, 'Pastor Presidente');


INSERT INTO `obreiros` (`id_obreiros`, `nome_obr`, `sobrenome_obr`, `senha_obr`, `cpf_obr`, `telefone_obr`, `sexo_obr`, `email_obr`, `endereco`, `datacad_obr`, `nascimento_obr`, `tipocargo_obr`) VALUES
(3, 'Marcos', 'Angelos', 'Angelos.ijemavi', '675.352.765-73', '3', 'Masculino', 'angelos@live.com', '3', '2019-01-05', '1989-08-21', 3);

--
