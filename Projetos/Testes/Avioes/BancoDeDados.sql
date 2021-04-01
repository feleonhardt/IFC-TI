create database avioes;

use avioes;

create table avioes(
	id int primary key auto_increment,
	modelo varchar(100) not null,
    fabricante varchar(100) not null,
    capacidadeMaxPassageiros int not null,
	alcance int not null
);

insert into avioes(modelo, fabricante, capacidadeMaxPassageiros, alcance) values
	('A300', 'Airbus', 270, 5371),
    ('A310', 'Airbus', 280, 12192),
    ('A318', 'Airbus', 132, 6000),
    ('A320', 'Airbus', 220, 6100),
    ('A320neo', 'Airbus', 240, 7800),
    ('A321', 'Airbus', 220, 5600),
    ('A330', 'Airbus', 475, 12300),
    ('A330neo', 'Airbus', 440, 12130),
    ('A340', 'Airbus', 380, 16700),
    ('A350', 'Airbus', 350, 15300),
    ('A380', 'Airbus', 853, 15200);

select * from avioes;