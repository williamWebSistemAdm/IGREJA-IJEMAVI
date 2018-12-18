-- MySQL Script generated by MySQL Workbench
-- Mon Dec 17 23:48:56 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema ijemavi
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ijemavi
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ijemavi` DEFAULT CHARACTER SET utf8 ;
USE `ijemavi` ;

-- -----------------------------------------------------
-- Table `ijemavi`.`obreiros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ijemavi`.`obreiros` (
  `id_obreiros` INT(11) NOT NULL AUTO_INCREMENT,
  `nome_obr` VARCHAR(100) NOT NULL,
  `sobrenome_obr` VARCHAR(45) NOT NULL,
  `senha_obr` VARCHAR(45) NOT NULL,
  `cpf_obr` VARCHAR(45) NOT NULL,
  `telefone_obr` VARCHAR(45) NOT NULL,
  `sexo_obr` VARCHAR(45) NOT NULL,
  `email_obr` VARCHAR(45) NOT NULL,
  `endereco` VARCHAR(45) NULL DEFAULT NULL,
  `datacad_obr` DATE NOT NULL,
  `nascimento_obr` DATE NOT NULL,
  `tipocargo_obr` VARCHAR(45) NOT NULL,
  `foto_obreiro` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id_obreiros`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ijemavi`.`acessos_obr`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ijemavi`.`acessos_obr` (
  `id_qtd_acessos_obr` INT(11) NOT NULL AUTO_INCREMENT,
  `data_acesso_obr` DATE NULL DEFAULT NULL,
  `acessou_obr` VARCHAR(45) NULL DEFAULT NULL,
  `id_obreiro_qtd_acessos` INT(11) NOT NULL,
  PRIMARY KEY (`id_qtd_acessos_obr`),
  INDEX `fk_acessos_obr_obreiros1_idx` (`id_obreiro_qtd_acessos` ASC),
  CONSTRAINT `fk_acessos_obr_obreiros1`
    FOREIGN KEY (`id_obreiro_qtd_acessos`)
    REFERENCES `ijemavi`.`obreiros` (`id_obreiros`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ijemavi`.`carrouses`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ijemavi`.`carrouses` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `imagen_carousel` VARCHAR(100) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `id_obreiro_carousel_fk` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_carrouses_obreiros_idx` (`id_obreiro_carousel_fk` ASC),
  CONSTRAINT `fk_carrouses_obreiros`
    FOREIGN KEY (`id_obreiro_carousel_fk`)
    REFERENCES `ijemavi`.`obreiros` (`id_obreiros`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ijemavi`.`devocional`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ijemavi`.`devocional` (
  `id_devocional` INT(11) NOT NULL AUTO_INCREMENT,
  `data_dev` DATE NOT NULL,
  `texto_dev` VARCHAR(45) NOT NULL,
  `descricao_dev` VARCHAR(45) NOT NULL,
  `foto_dev` VARCHAR(45) NULL DEFAULT NULL,
  `id_obreiro_dev_fk` INT(11) NOT NULL,
  PRIMARY KEY (`id_devocional`),
  INDEX `fk_devocional_obreiros1_idx` (`id_obreiro_dev_fk` ASC),
  CONSTRAINT `fk_devocional_obreiros1`
    FOREIGN KEY (`id_obreiro_dev_fk`)
    REFERENCES `ijemavi`.`obreiros` (`id_obreiros`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ijemavi`.`dia_culto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ijemavi`.`dia_culto` (
  `id_dia_culto` INT(11) NOT NULL AUTO_INCREMENT,
  `dia_semana_culto` VARCHAR(45) NOT NULL,
  `nome_culto` VARCHAR(100) NOT NULL,
  `hora_culto` VARCHAR(45) NOT NULL,
  `id_obreiro_diaculto_fk` INT(11) NOT NULL,
  PRIMARY KEY (`id_dia_culto`),
  INDEX `fk_dia_culto_obreiros1_idx` (`id_obreiro_diaculto_fk` ASC),
  CONSTRAINT `fk_dia_culto_obreiros1`
    FOREIGN KEY (`id_obreiro_diaculto_fk`)
    REFERENCES `ijemavi`.`obreiros` (`id_obreiros`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ijemavi`.`enderecos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ijemavi`.`enderecos` (
  `id_end` INT(11) NOT NULL AUTO_INCREMENT,
  `cep_end` VARCHAR(45) NULL DEFAULT NULL,
  `estado_end` VARCHAR(45) NULL DEFAULT NULL,
  `cidade_end` VARCHAR(45) NULL DEFAULT NULL,
  `bairro_end` VARCHAR(45) NULL DEFAULT NULL,
  `rua_end` VARCHAR(45) NULL DEFAULT NULL,
  `numero_end` VARCHAR(45) NULL DEFAULT NULL,
  `complemento_end` VARCHAR(45) NULL DEFAULT NULL,
  `id_obreiro_end_fk` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_end`),
  INDEX `fk_enderecos_obreiros1_idx` (`id_obreiro_end_fk` ASC),
  CONSTRAINT `fk_enderecos_obreiros1`
    FOREIGN KEY (`id_obreiro_end_fk`)
    REFERENCES `ijemavi`.`obreiros` (`id_obreiros`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ijemavi`.`galeria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ijemavi`.`galeria` (
  `id_galeria` INT(11) NOT NULL AUTO_INCREMENT,
  `imagen_galeria` VARCHAR(100) NOT NULL,
  `nome_img_galeria` VARCHAR(100) NOT NULL,
  `id_obreiro_gal_fk` INT(11) NOT NULL,
  PRIMARY KEY (`id_galeria`),
  INDEX `fk_galeria_obreiros1_idx` (`id_obreiro_gal_fk` ASC),
  CONSTRAINT `fk_galeria_obreiros1`
    FOREIGN KEY (`id_obreiro_gal_fk`)
    REFERENCES `ijemavi`.`obreiros` (`id_obreiros`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ijemavi`.`telefones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ijemavi`.`telefones` (
  `id_telefones` INT(11) NOT NULL AUTO_INCREMENT,
  `tel_watzap` VARCHAR(45) NULL DEFAULT NULL,
  `tel_cel` VARCHAR(45) NULL DEFAULT NULL,
  `tel_resid` VARCHAR(45) NULL DEFAULT NULL,
  `id_obreiro_tel_fk` INT(11) NOT NULL,
  PRIMARY KEY (`id_telefones`),
  INDEX `fk_telefones_obreiros1_idx` (`id_obreiro_tel_fk` ASC),
  CONSTRAINT `fk_telefones_obreiros1`
    FOREIGN KEY (`id_obreiro_tel_fk`)
    REFERENCES `ijemavi`.`obreiros` (`id_obreiros`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ijemavi`.`registro_alteracoes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ijemavi`.`registro_alteracoes` (
  `id_registro_alteracoes` INT(11) NOT NULL AUTO_INCREMENT,
  `id_registro_alt_obreiros_fk` INT(11) NOT NULL,
  `id_registro_alt_carrouses_fk` INT(11) NOT NULL,
  `id_registro_alt_enderecos_fk` INT(11) NOT NULL,
  `id_registro_alt_galeria_fk` INT(11) NOT NULL,
  `id_registro_alt_diaculto_fk` INT(11) NOT NULL,
  `id_registro_alt_devocional_fk` INT(11) NOT NULL,
  `id_registro_alt_telefones_fk` INT(11) NOT NULL,
  `registro_historico` VARCHAR(45) NOT NULL,
  `data_registro_alteracoes` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`id_registro_alteracoes`),
  INDEX `fk_registro_alteracoes_telefones1_idx` (`id_registro_alt_telefones_fk` ASC),
  INDEX `fk_registro_alteracoes_devocional1_idx` (`id_registro_alt_devocional_fk` ASC),
  INDEX `fk_registro_alteracoes_dia_culto1_idx` (`id_registro_alt_diaculto_fk` ASC),
  INDEX `fk_registro_alteracoes_galeria1_idx` (`id_registro_alt_galeria_fk` ASC),
  INDEX `fk_registro_alteracoes_enderecos1_idx` (`id_registro_alt_enderecos_fk` ASC),
  INDEX `fk_registro_alteracoes_carrouses1_idx` (`id_registro_alt_carrouses_fk` ASC),
  INDEX `fk_registro_alteracoes_obreiros1_idx` (`id_registro_alt_obreiros_fk` ASC),
  CONSTRAINT `fk_registro_alteracoes_carrouses1`
    FOREIGN KEY (`id_registro_alt_carrouses_fk`)
    REFERENCES `ijemavi`.`carrouses` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_registro_alteracoes_devocional1`
    FOREIGN KEY (`id_registro_alt_devocional_fk`)
    REFERENCES `ijemavi`.`devocional` (`id_devocional`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_registro_alteracoes_dia_culto1`
    FOREIGN KEY (`id_registro_alt_diaculto_fk`)
    REFERENCES `ijemavi`.`dia_culto` (`id_dia_culto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_registro_alteracoes_enderecos1`
    FOREIGN KEY (`id_registro_alt_enderecos_fk`)
    REFERENCES `ijemavi`.`enderecos` (`id_end`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_registro_alteracoes_galeria1`
    FOREIGN KEY (`id_registro_alt_galeria_fk`)
    REFERENCES `ijemavi`.`galeria` (`id_galeria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_registro_alteracoes_obreiros1`
    FOREIGN KEY (`id_registro_alt_obreiros_fk`)
    REFERENCES `ijemavi`.`obreiros` (`id_obreiros`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_registro_alteracoes_telefones1`
    FOREIGN KEY (`id_registro_alt_telefones_fk`)
    REFERENCES `ijemavi`.`telefones` (`id_telefones`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
