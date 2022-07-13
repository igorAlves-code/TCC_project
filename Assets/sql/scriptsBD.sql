create database asr default character set utf8mb4 default collate utf8mb4_bin;

use asr;

create table usuario(
	id_usuario int primary key auto_increment,
    nome varchar(50) not null,
    sobrenome varchar(50) not null,
    email varchar(100) not null,
    senha varchar(30) not null
) default charset utf8mb4;


create table professor(
	id_usuario int not null auto_increment, 
    disciplina varchar(30) not null,
    CONSTRAINT id_usuario_pk Primary KEY usuario(id_usuario), 
	CONSTRAINT id_usuario_fk FOREIGN KEY (id_usuario) references usuario(id_usuario) 
	on update cascade 
    on delete cascade
) default charset utf8mb4;

create table coordenacao(
	id_usuario int not null auto_increment,
    CONSTRAINT id_usuario_pk Primary KEY usuario(id_usuario), 
	CONSTRAINT id_usuario_fk FOREIGN KEY (id_usuario) references usuario(id_usuario) 
	on update cascade 
    on delete cascade
) default charset utf8mb4;

create table mensagens(
	id_mensagens int auto_increment primary key,
	id_usuario int not null,
    texto varchar(150) not null,
	CONSTRAINT id_usuario_fk FOREIGN KEY (id_usuario) references usuario(id_usuario) 
	on update cascade 
    on delete cascade
) default charset utf8mb4;

create table recursos(
	id_recurso int primary key auto_increment,
	nome_recurso varchar(30) not null
) default charset utf8mb4;

create table equipamentos(
	id_recurso int not null auto_increment,
    tipo varchar(30) not null,
    quantidade int not null,
    CONSTRAINT id_recurso_pk Primary KEY recursos(id_recurso), 
	CONSTRAINT id_recurso_fk FOREIGN KEY (id_recurso) references recursos(id_recurso) 
	on update cascade 
    on delete cascade
) default charset utf8mb4;

create table ambientes(
	id_recurso int not null auto_increment,
    tipo varchar(30) not null,
    CONSTRAINT id_recurso_pk Primary KEY recursos(id_recurso), 
	CONSTRAINT id_recurso_fk FOREIGN KEY (id_recurso) references recursos(id_recurso) 
	on update cascade 
    on delete cascade
) default charset utf8mb4;

create table agendamentos(
	id_agendamentos int primary key auto_increment,
    id_usuario int not null,
    id_recurso int not null,
    email varchar(100) not null,
    senha varchar(30) not null,
    data_retirada datetime not null,
    data_devolucao datetime not null,
    CONSTRAINT id_usuario_fk FOREIGN KEY (id_usuario) references usuario(id_usuario)
    on update cascade 
    on delete cascade,
	CONSTRAINT id_recurso_fk FOREIGN KEY (id_recurso) references recursos(id_recurso) 
	on update cascade 
    on delete cascade
) default charset utf8mb4;
