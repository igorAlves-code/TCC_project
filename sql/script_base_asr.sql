create database asr default character set utf8mb4 default collate utf8mb4_bin;

use asr;

create table professor(
	idProfessor int primary key auto_increment,
	nome varchar(50) not null,
    sobrenome varchar(50) not null,
    email varchar(100) not null,
    senha varchar(30) not null,
    disciplina varchar(30) not null,
    acesso int not null
) default charset utf8mb4;

create table coordenador(
	idCoordenador int primary key auto_increment,
    nome varchar(50) not null,
    sobrenome varchar(50) not null,
    email varchar(100) not null,
    senha varchar(30) not null
) default charset utf8mb4;

create table equipamento(
	idEquipamento int primary key auto_increment,
    nomeEquipamento varchar(30) not null,
    tipoEquipamento varchar(30) not null,
    quantidadeEquipamento int not null
) default charset utf8mb4;

create table ambiente(
	idAmbiente int primary key auto_increment,
    nomeAmbiente varchar(30) not null,
    tipoAmbiente varchar(30) not null,
    quantidadeAmbiente int not null
) default charset utf8mb4;

create table agendamento(
	idAgendamento int primary key auto_increment,
    idProfessor int not null,
    idCoordenador int not null,
    idAmbiente int not null,
    idEquipamento int not null,
    email varchar(100) not null,
    senha varchar(30) not null,
    motivo varchar(250) not null,
    dataRetirada datetime not null,
    dataDevolucao datetime not null,
    CONSTRAINT idProfessor_AgendamentoFk FOREIGN KEY (idProfessor) references professor(idProfessor)
    on update no action 
    on delete cascade,
    CONSTRAINT idCoordenador_AgendamentoFk FOREIGN KEY (idCoordenador) references coordenador(idCoordenador)
    on update no action 
    on delete cascade,
	CONSTRAINT idEquipamento_AgendamentoFk FOREIGN KEY (idEquipamento) references equipamento(idEquipamento) 
	on update no action 
    on delete cascade,
    CONSTRAINT idAmbiente_AgendamentoFk FOREIGN KEY (idAmbiente) references ambiente(idAmbiente)
    on update no action 
    on delete cascade
) default charset utf8mb4;

/* STORED PROCEDURES */

-- USUÁRIO - COORDENAÇÃO E PROFESSORES 

-- RECURSOS - EQUIPAMENTOS E AMBIENTES

	-- Equipamentos
		-- Insert
		DELIMITER $$
		CREATE DEFINER=`root`@`localhost` PROCEDURE `cadastraEquipamento`(INOUT `nome` VARCHAR(30) CHARSET utf8mb4, INOUT `tipo` VARCHAR(30) CHARSET utf8mb4, INOUT `quantidade` INT)
		BEGIN
			INSERT INTO equipamento(nomeEquipamento, tipoEquipamento, quantidadeEquipamento) VALUES (nome, tipo, quantidade);
		END$$
		DELIMITER ;
    
		-- Update
		DELIMITER $$
		CREATE DEFINER=`root`@`localhost` PROCEDURE `editaEquipamento`(INOUT `id` INT, INOUT `nome` VARCHAR(30) CHARSET utf8mb4, INOUT `tipo` VARCHAR(30) CHARSET utf8mb4, INOUT `quantidade` INT)
		BEGIN
			UPDATE equipamento SET nomeEquipamento = nome, tipoEquipamento = tipo, quantidadeEquipamento = quantidade WHERE idEquipamento = id;
		END$$
		DELIMITER ;
		
        -- Delete
		DELIMITER $$
		CREATE DEFINER=`root`@`localhost` PROCEDURE `excluiEquipamento`(INOUT `id` INT)
		BEGIN
			DELETE FROM equipamento WHERE idEquipamento = id;
		END$$
		DELIMITER ;
        
        -- Select (Geral)
		DELIMITER $$
		CREATE DEFINER=`root`@`localhost` PROCEDURE `visualizaEquipamento`()
		BEGIN
			SELECT * FROM equipamento;
		END$$
		DELIMITER ;
        
        -- Select (Filtro por tipo)
		DELIMITER $$
		CREATE DEFINER=`root`@`localhost` PROCEDURE `filtroTipoEquipamento`(INOUT `tipo` VARCHAR(30) CHARSET utf8mb4)
		BEGIN
			SELECT * FROM equipamento WHERE tipoEquipamento = tipo;
		END$$
		DELIMITER ;

	-- Ambiente
		-- Insert
		DELIMITER $$
		CREATE DEFINER=`root`@`localhost` PROCEDURE `cadastraAmbiente`(INOUT `nome` VARCHAR(30) CHARSET utf8mb4, INOUT `tipo` VARCHAR(30) CHARSET utf8mb4, INOUT `quantidade` INT)
		BEGIN
			INSERT INTO ambiente(nomeAmbiente, tipoAmbiente, quantidadeAmbiente) VALUES (nome, tipo, quantidade);
		END$$
		DELIMITER ;
    
		-- Update
		DELIMITER $$
		CREATE DEFINER=`root`@`localhost` PROCEDURE `editaAmbiente`(INOUT `id` INT, INOUT `nome` VARCHAR(30) CHARSET utf8mb4, INOUT `tipo` VARCHAR(30) CHARSET utf8mb4, INOUT `quantidade` INT)
		BEGIN
			UPDATE ambiente SET nomeAmbiente = nome, tipoAmbiente = tipo, quantidadeAmbiente = quantidade WHERE idAmbiente = id;
		END$$
		DELIMITER ;
		
        -- Delete
		DELIMITER $$
		CREATE DEFINER=`root`@`localhost` PROCEDURE `excluiAmbiente`(INOUT `id` INT)
		BEGIN
			DELETE FROM ambiente WHERE idAmbiente = id;
		END$$
		DELIMITER ;
        
        -- Select (Geral)
		DELIMITER $$
		CREATE DEFINER=`root`@`localhost` PROCEDURE `visualizaAmbiente`()
		BEGIN
			SELECT * FROM ambiente;
		END$$
		DELIMITER ;
        
        -- Select (Filtro por tipo)
		DELIMITER $$
		CREATE DEFINER=`root`@`localhost` PROCEDURE `filtroTipoAmbiente`(INOUT `tipo` VARCHAR(30) CHARSET utf8mb4)
		BEGIN
			SELECT * FROM ambiente WHERE tipoAmbiente = tipo;
		END$$
		DELIMITER ;

-- AGENDAMENTOS