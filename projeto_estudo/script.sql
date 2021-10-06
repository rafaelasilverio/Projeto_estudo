CREATE database estudo;
use estudo;

CREATE TABLE `alunos` (
	`codigo` INT(11) NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(100) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`ra` VARCHAR(15) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`email` VARCHAR(20) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`turma` INT(11) NULL DEFAULT NULL,
	PRIMARY KEY (`codigo`) USING BTREE,
	INDEX `FK_alunos_turmas` (`turma`) USING BTREE,
	CONSTRAINT `FK_alunos_turmas` FOREIGN KEY (`turma`) REFERENCES `estudo`.`turmas` (`codigo`) ON UPDATE CASCADE ON DELETE CASCADE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=3
;
CREATE TABLE `turmas` (
	`codigo` INT(11) NOT NULL AUTO_INCREMENT,
	`descricao` VARCHAR(150) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	PRIMARY KEY (`codigo`) USING BTREE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=4
;

