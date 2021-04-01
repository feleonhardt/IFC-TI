use CRUD;

-- Marcas

create table Marca(
	codigo int auto_increment primary key,
    descricao varchar(45) not null
);

insert into Marca (descricao) values 
('LG'),
('SONY'),
('APPLE'),
('POSITIVO'),
('MICROSOFT'),
('ORACLE'),
('TOTVS'),
('NOKIA'),
('IFC'),
('SAMSUNG');

insert into Marca (descricao) values ('LUCAS');