-- NOVO DB

create database db_asr default character set utf8mb4 default collate utf8mb4_unicode_ci;

use db_asr;

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
    idAmbiente int null,
    idEquipamento int null,
    email varchar(100) not null,
    senha varchar(30) not null,
	dataAgendada datetime not null,
    aulaRetirada varchar not null,
    aulaDevolucao varchar not null,
    CONSTRAINT idProfessor_AgendamentoFk FOREIGN KEY (idProfessor) references professor(idProfessor)
    on update no action 
    on delete cascade,
	CONSTRAINT idEquipamento_AgendamentoFk FOREIGN KEY (idEquipamento) references equipamento(idEquipamento) 
	on update no action 
    on delete cascade,
    CONSTRAINT idAmbiente_AgendamentoFk FOREIGN KEY (idAmbiente) references ambiente(idAmbiente)
    on update no action 
    on delete cascade
) default charset utf8mb4;