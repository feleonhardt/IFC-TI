SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `agenda` ;
CREATE SCHEMA IF NOT EXISTS `agenda` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `agenda` ;

-- -----------------------------------------------------
-- Table `agenda`.`usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `agenda`.`usuario` ;

CREATE  TABLE IF NOT EXISTS `agenda`.`usuario` (
  `usu_id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `usu_nome` VARCHAR(45) NOT NULL ,
  `usu_email` VARCHAR(45) NOT NULL ,
  `usu_senha` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`usu_id`) ,
  UNIQUE INDEX `usu_id_UNIQUE` (`usu_id` ASC) ,
  UNIQUE INDEX `usu_email_UNIQUE` (`usu_email` ASC) )
ENGINE = InnoDB
COMMENT = '										';


-- -----------------------------------------------------
-- Table `agenda`.`contato`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `agenda`.`contato` ;

CREATE  TABLE IF NOT EXISTS `agenda`.`contato` (
  `cont_id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `cont_nome` VARCHAR(45) NOT NULL ,
  `cont_data_nascimento` DATE NOT NULL ,
  `cont_sexo` VARCHAR(1) NULL ,
  `cont_obs` TEXT NULL ,
  PRIMARY KEY (`cont_id`) ,
  UNIQUE INDEX `cont_id_UNIQUE` (`cont_id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `agenda`.`operadora`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `agenda`.`operadora` ;

CREATE  TABLE IF NOT EXISTS `agenda`.`operadora` (
  `op_id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `op_codigo` DECIMAL(2) NOT NULL ,
  `op_nome` VARCHAR(20) NOT NULL ,
  PRIMARY KEY (`op_id`) ,
  UNIQUE INDEX `op_id_UNIQUE` (`op_id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `agenda`.`telefone`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `agenda`.`telefone` ;

CREATE  TABLE IF NOT EXISTS `agenda`.`telefone` (
  `tel_id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `tel_ddd` DECIMAL(2) NOT NULL ,
  `tel_numero` DECIMAL(8) NOT NULL ,
  `operadora_op_id` INT UNSIGNED NOT NULL ,
  `contato_cont_id` INT UNSIGNED NOT NULL ,
  PRIMARY KEY (`tel_id`) ,
  UNIQUE INDEX `tel_id_UNIQUE` (`tel_id` ASC) ,
  INDEX `fk_telefone_operadora_idx` (`operadora_op_id` ASC) ,
  INDEX `fk_telefone_contato1_idx` (`contato_cont_id` ASC) ,
  CONSTRAINT `fk_telefone_operadora`
    FOREIGN KEY (`operadora_op_id` )
    REFERENCES `agenda`.`operadora` (`op_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_telefone_contato1`
    FOREIGN KEY (`contato_cont_id` )
    REFERENCES `agenda`.`contato` (`cont_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `agenda`.`estado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `agenda`.`estado` ;

CREATE  TABLE IF NOT EXISTS `agenda`.`estado` (
  `est_id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `est_nome` VARCHAR(45) NOT NULL ,
  `est_sigla` VARCHAR(2) NOT NULL ,
  PRIMARY KEY (`est_id`) ,
  UNIQUE INDEX `est_id_UNIQUE` (`est_id` ASC) ,
  UNIQUE INDEX `est_nome_UNIQUE` (`est_nome` ASC) ,
  UNIQUE INDEX `est_sigla_UNIQUE` (`est_sigla` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `agenda`.`cidade`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `agenda`.`cidade` ;

CREATE  TABLE IF NOT EXISTS `agenda`.`cidade` (
  `cid_id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `cid_nome` VARCHAR(45) NOT NULL ,
  `estado_est_id` INT UNSIGNED NOT NULL ,
  PRIMARY KEY (`cid_id`) ,
  UNIQUE INDEX `cid_id_UNIQUE` (`cid_id` ASC) ,
  INDEX `fk_cidade_estado1_idx` (`estado_est_id` ASC) ,
  CONSTRAINT `fk_cidade_estado1`
    FOREIGN KEY (`estado_est_id` )
    REFERENCES `agenda`.`estado` (`est_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `agenda`.`endereco`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `agenda`.`endereco` ;

CREATE  TABLE IF NOT EXISTS `agenda`.`endereco` (
  `end_id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `end_lagradouro` VARCHAR(45) NOT NULL ,
  `end_bairro` VARCHAR(45) NOT NULL ,
  `end_numero` VARCHAR(4) NOT NULL ,
  `end_complemento` VARCHAR(45) NULL ,
  `cidade_cid_id` INT UNSIGNED NOT NULL ,
  `contato_cont_id` INT UNSIGNED NOT NULL ,
  PRIMARY KEY (`end_id`) ,
  UNIQUE INDEX `end_id_UNIQUE` (`end_id` ASC) ,
  INDEX `fk_endereco_cidade1_idx` (`cidade_cid_id` ASC) ,
  INDEX `fk_endereco_contato1_idx` (`contato_cont_id` ASC) ,
  CONSTRAINT `fk_endereco_cidade1`
    FOREIGN KEY (`cidade_cid_id` )
    REFERENCES `agenda`.`cidade` (`cid_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_endereco_contato1`
    FOREIGN KEY (`contato_cont_id` )
    REFERENCES `agenda`.`contato` (`cont_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `agenda`.`email`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `agenda`.`email` ;

CREATE  TABLE IF NOT EXISTS `agenda`.`email` (
  `email_id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `email_email` VARCHAR(45) NOT NULL ,
  `contato_cont_id` INT UNSIGNED NOT NULL ,
  PRIMARY KEY (`email_id`) ,
  UNIQUE INDEX `email_id_UNIQUE` (`email_id` ASC) ,
  INDEX `fk_email_contato1_idx` (`contato_cont_id` ASC) ,
  CONSTRAINT `fk_email_contato1`
    FOREIGN KEY (`contato_cont_id` )
    REFERENCES `agenda`.`contato` (`cont_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `agenda` ;
USE `agenda`;

DELIMITER $$

USE `agenda`$$
DROP TRIGGER IF EXISTS `agenda`.`usuario_senha_insert` $$
USE `agenda`$$


CREATE TRIGGER `usuario_BINS` BEFORE INSERT ON usuario FOR EACH ROW
-- Edit trigger body code below this line. Do not edit lines above this one
SET NEW.usu_senha = PASSWORD(NEW.usu_senha);

$$


USE `agenda`$$
DROP TRIGGER IF EXISTS `agenda`.`usuario_senha_update` $$
USE `agenda`$$


CREATE TRIGGER `usuario_senha_update` BEFORE UPDATE ON usuario FOR EACH ROW
-- Edit trigger body code below this line. Do not edit lines above this one
SET NEW.usu_senha = PASSWORD(NEW.usu_senha)
$$


DELIMITER ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
