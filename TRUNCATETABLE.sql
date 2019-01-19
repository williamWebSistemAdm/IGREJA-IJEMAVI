TRUNCATE TABLE carrouses;
TRUNCATE TABLE enderecos;
TRUNCATE TABLE telefones;
TRUNCATE TABLE tipocargo_obr;
-- TRUNCATE TABLE obreiros;

INSERT INTO `carrouses` (`id`, `imagen_carousel`, `nome`, `data_hora_post`,`data_evento`) VALUES
(1, 'banner1.jpg', 'banner1', '0000-00-00', '0000-00-00'),
(2, 'banner2.jpg', 'banner2', '0000-00-00', '0000-00-00');


INSERT INTO `obreiros` (`id_obreiros`, `nome_obr`, `sobrenome_obr`, `senha_obr`, `cpf_obr`, `telefone_obr`, `sexo_obr`, `email_obr`, `endereco`, `datacad_obr`, `nascimento_obr`, `tipocargo_obr`) VALUES
-- (1, 'Administrador', ' - ', 'admin@ijemavi', '98765432109', '1', 'Mascilino', 'admin@ijemavi.com', '1', '2018-12-20', '2018-12-20', 1),
-- (2, 'José', 'Ribeiro do Nascimento', 'jr.n.admin.ijemavi', '216.038.043-15', '2', 'Masculino', 'jr.n@live.com', '2', '2019-01-05', '1958-02-16', 2),
(3, 'Marcos', 'Angelos', 'Angelos.ijemavi', '675.352.765-73', '3', 'Masculino', 'angelos@live.com', '3', '2019-01-05', '1989-08-21', 3);

INSERT INTO `enderecos` (`id_end`, `cep_end`, `estado_end`, `cidade_end`, `bairro_end`, `rua_end`, `numero_end`, `complemento_end`) VALUES
(1, '-', 'Tocantins', 'Palmas', '-', '-', '000', ''),
(2, '77050062', 'Tocantins', 'Palmas', 'Santa Helena', '12', '7', '' );


INSERT INTO `telefones` (`id_telefones`, `tel_watzap`, `tel_cel`, `tel_resid`, `id_obreiro_tel_fk`) VALUES
(1, '63984349210', '63984349210', '-', 1),
(2, '', '(63)999985118', NULL, 2);


INSERT INTO `tipocargo_obr` (`id_tipocargo_obr_fk`, `id_tipocargo`, `Perfil_cargo_obr`) VALUES
(1, 1, 'Administrador'),
(2, 2, 'Pastor Presidente');