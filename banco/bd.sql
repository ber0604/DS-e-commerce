-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema ecommerce
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ecommerce
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ecommerce` DEFAULT CHARACTER SET utf8mb4 ;
USE `ecommerce` ;

-- -----------------------------------------------------
-- Table `ecommerce`.`generos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ecommerce`.`generos` (
  `id` TINYINT UNSIGNED NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ecommerce`.`filmes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ecommerce`.`filmes` (
  `id` TINYINT(4) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `endereco` VARCHAR(300) NOT NULL,
  `id_generos` TINYINT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_generosfilmes_idx` (`id_generos` ASC) VISIBLE,
  CONSTRAINT `fk_generosfilmes`
    FOREIGN KEY (`id_generos`)
    REFERENCES `ecommerce`.`generos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ecommerce`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ecommerce`.`users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(50) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  `trn_date` DATETIME NOT NULL,
  `cpf` TINYINT(11) NOT NULL,
  `telefone` TINYINT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ecommerce`.`users_filmes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ecommerce`.`users_filmes` (
  `users_id` INT(11) NOT NULL,
  `filmes_id` TINYINT(4) NOT NULL,
  `data` DATETIME NULL,
  PRIMARY KEY (`users_id`, `filmes_id`),
  INDEX `fk_users_has_filmes_filmes1_idx` (`filmes_id` ASC) VISIBLE,
  INDEX `fk_users_has_filmes_users_idx` (`users_id` ASC) VISIBLE,
  CONSTRAINT `fk_users_has_filmes_users`
    FOREIGN KEY (`users_id`)
    REFERENCES `ecommerce`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_filmes_filmes1`
    FOREIGN KEY (`filmes_id`)
    REFERENCES `ecommerce`.`filmes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
