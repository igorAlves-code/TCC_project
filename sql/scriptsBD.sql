create database asr default character set utf8mb4 default collate utf8mb4_bin;

use asr;

create table usuario(
	idUsuario int primary key auto_increment,
    nome varchar(50) not null,
    sobrenome varchar(50) not null,
    email varchar(100) not null,
    senha varchar(30) not null
) default charset utf8mb4;

describe professor;

create table professor(
	idUsuario int not null auto_increment, 
    disciplina varchar(30) not null,
    acesso boolean not null,
    CONSTRAINT idUsuarioPk Primary KEY usuario(idUsuario), 
	CONSTRAINT idUsuarioFk FOREIGN KEY (idUsuario) references usuario(idUsuario) 
	on update cascade 
    on delete cascade
) default charset utf8mb4;

create table coordenacao(
	idUsuario int not null auto_increment,
    CONSTRAINT idUsuarioPk Primary KEY usuario(idUsuario), 
	CONSTRAINT idUsuarioFk FOREIGN KEY (idUsuario) references usuario(idUsuario) 
	on update cascade 
    on delete cascade
) default charset utf8mb4;

create table recursos(
	idRecurso int primary key auto_increment,
	nomeRecurso varchar(30) not null
) default charset utf8mb4;

create table equipamentos(
	idRecurso int not null auto_increment,
    tipo varchar(30) not null,
    quantidade int not null,
    CONSTRAINT idRecursoPk Primary KEY recursos(idRecurso), 
	CONSTRAINT idRecursoFk FOREIGN KEY (idRecurso) references recursos(idRecurso) 
	on update cascade 
    on delete cascade
) default charset utf8mb4;

create table ambientes(
	idRecurso int not null auto_increment,
    tipo varchar(30) not null,
    CONSTRAINT idRecursoPk Primary KEY recursos(idRecurso), 
	CONSTRAINT idRecursoFk FOREIGN KEY (idRecurso) references recursos(idRecurso) 
	on update cascade 
    on delete cascade
) default charset utf8mb4;

create table agendamentos(
	idAgendamentos int primary key auto_increment,
    idUsuario int not null,
    idRecurso int not null,
    email varchar(100) not null,
    senha varchar(30) not null,
    /* Adicionar o campo motivo */
    dataRetirada datetime not null,
    dataDevolucao datetime not null,
    CONSTRAINT idUsuarioFk FOREIGN KEY (idUsuario) references usuario(idUsuario)
    on update cascade 
    on delete cascade,
	CONSTRAINT idRecursoFk FOREIGN KEY (idRecurso) references recursos(idRecurso) 
	on update cascade 
    on delete cascade
) default charset utf8mb4;

