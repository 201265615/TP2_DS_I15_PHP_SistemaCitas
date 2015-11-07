-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema ProyectoII
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `ProyectoII` ;

-- -----------------------------------------------------
-- Schema ProyectoII
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ProyectoII` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `ProyectoII` ;

-- -----------------------------------------------------
-- Table `ProyectoII`.`Usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ProyectoII`.`Usuarios` ;

CREATE TABLE IF NOT EXISTS `ProyectoII`.`Usuarios` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `NombreCompleto` VARCHAR(50) NOT NULL,
  `Telefono` VARCHAR(10) NOT NULL,
  `CorreoElectronico` VARCHAR(50) NOT NULL,
  `Contrasena` VARCHAR(100) NOT NULL,
  `Activo` TINYINT(1) NOT NULL DEFAULT 1,
  `FechaRegistro` DATETIME NOT NULL DEFAULT now(),
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ProyectoII`.`Doctores`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ProyectoII`.`Doctores` ;

CREATE TABLE IF NOT EXISTS `ProyectoII`.`Doctores` (
  `idDoctor` INT NOT NULL AUTO_INCREMENT,
  `NombreCompleto` VARCHAR(100) NOT NULL,
  `EspecialidadMedica` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idDoctor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ProyectoII`.`HorariosDoctor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ProyectoII`.`HorariosDoctor` ;

CREATE TABLE IF NOT EXISTS `ProyectoII`.`HorariosDoctor` (
  `idHorarioDoctor` INT NOT NULL AUTO_INCREMENT,
  `FechaHoraInicio` DATETIME NOT NULL,
  `FechaHoraFin` DATETIME NOT NULL,
  `Doctores_idDoctor` INT NOT NULL,
  `Disponible` TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idHorarioDoctor`),
  INDEX `fk_HorariosDoctor_Doctores_idx` (`Doctores_idDoctor` ASC),
  CONSTRAINT `fk_HorariosDoctor_Doctores`
    FOREIGN KEY (`Doctores_idDoctor`)
    REFERENCES `ProyectoII`.`Doctores` (`idDoctor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ProyectoII`.`Citas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ProyectoII`.`Citas` ;

CREATE TABLE IF NOT EXISTS `ProyectoII`.`Citas` (
  `idCita` INT NOT NULL AUTO_INCREMENT,
  `Activo` TINYINT(1) NOT NULL DEFAULT 1,
  `Usuarios_idUsuario` INT NOT NULL,
  `HorariosDoctor_idHorarioDoctor` INT NOT NULL,
  PRIMARY KEY (`idCita`),
  INDEX `fk_Citas_Usuarios1_idx` (`Usuarios_idUsuario` ASC),
  INDEX `fk_Citas_HorariosDoctor1_idx` (`HorariosDoctor_idHorarioDoctor` ASC),
  CONSTRAINT `fk_Citas_Usuarios1`
    FOREIGN KEY (`Usuarios_idUsuario`)
    REFERENCES `ProyectoII`.`Usuarios` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Citas_HorariosDoctor1`
    FOREIGN KEY (`HorariosDoctor_idHorarioDoctor`)
    REFERENCES `ProyectoII`.`HorariosDoctor` (`idHorarioDoctor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;






-- --------------------------------------------
-- --------------- TRIGGERS -------------------
-- --------------------------------------------

CREATE TRIGGER trg_AI_CambiarEstadoHorario_NO_Disponible
AFTER INSERT ON Citas FOR EACH ROW
UPDATE HorariosDoctor SET Disponible = 0 WHERE idHorarioDoctor = NEW.HorariosDoctor_idHorarioDoctor;



CREATE TRIGGER trg_BD_CambiarEstadoHorario_SI_Disponible
BEFORE DELETE ON Citas FOR EACH ROW
UPDATE HorariosDoctor SET Disponible = 1 WHERE idHorarioDoctor = OLD.HorariosDoctor_idHorarioDoctor;
