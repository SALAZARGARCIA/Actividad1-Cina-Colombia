-- MySQL Script generated by MySQL Workbench
-- Tue Jan 30 08:06:40 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema cine_colombia
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema cine_colombia
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `cine_colombia` DEFAULT CHARACTER SET utf8 ;
USE `cine_colombia` ;




-- -----------------------------------------------------
-- Table `cine_colombia`.`Persona`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cine_colombia`.`Persona` (
  `Nombre_Usuario` INT NOT NULL COMMENT 'Nombre con el que el cliente se resgistra ',
  `Nombre_Persona` VARCHAR(45) NOT NULL COMMENT 'Nombre de la persona',
  `Apellido_Persona` VARCHAR(45) NOT NULL COMMENT 'Apellido con el esta registrada lapersona',
  `contrasena` VARCHAR(500) NOT NULL,
  `Cantidad_puntos` INT NULL DEFAULT NULL COMMENT 'cantidad de puntos que acumula el cliente',
  PRIMARY KEY (`Nombre_Usuario`))
ENGINE = InnoDB;


