CREATE DATABASE Inventario_Patrimonial;

USE Inventario_Patrimonial;

CREATE TABLE usuarios(
	codigo int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome varchar(45) NOT NULL,
    nome_usuario varchar(45) NOT NULL,
    email varchar (55) NOT NULL,
    senha varchar(15) NOT NULL
);


CREATE TABLE unidades(
	codigo int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome varchar(45) NOT NULL
);

CREATE TABLE locais(
	codigo int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	sala varchar(45) NOT NULL,
    codSala int NOT NULL,
    FOREIGN KEY (codSala) REFERENCES unidades(codigo)
);

CREATE TABLE bens(
	codigo int NOT NULL AUTO_INCREMENT,
    codigoBarra int NOT NULL,
    nome varchar(45) NOT NULL,
    sala varchar(45) NOT NULL,
    estado_uso varchar(45) NOT NULL,
    alocado int NOT NULL,
    observacao varchar(100),
	codigoLocal int,
    PRIMARY KEY (codigo, codigoBarra),
    foreign key (codigoLocal) references locais(codigo)
);

insert into usuarios(nome, nome_usuario, email, senha) values
('felipe', 'felipe', 'feleonha@hotmail', 'felipe');

select * from usuarios;

SELECT * from usuarios where nome_usuario = 'felipe' and senha = md5('felipe');











