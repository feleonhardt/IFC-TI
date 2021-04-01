create database CRUD;

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


-- Exercicio 1

create table Estado(
	codigo int primary key auto_increment,
    nome varchar(45),
    sigla varchar(2)
);

insert into Estado (nome, sigla) values
('Acre', 'AC'),
('Goiás', 'GO'),
('Minas Gerais', 'MG'),
('Bahia', 'BA'),
('Paraná', 'PR'),
('Sergipe', 'SE'),
('Rio Grande do Sul', 'RS'),
('Rio de Janeiro', 'RJ'),
('Tocantins', 'TO'),
('Santa Catarina', 'SC');


-- Exercicio 2

create table Cliente(
	codigo int primary key auto_increment,
    nome varchar(45),
    email varchar(45),
    telefone varchar(20)
);

insert into Cliente (nome, email, telefone) values
('Manuela Cruz', 'manuela@trens.com.br', '92102-3447'),
('Dario Viana', 'dario@frantrip.com.br', '98415-2609'),
('Mateus Rocha', 'rocha@poço.com.br', '99106-4490'),
('Victor Benfica', 'victorb@hh.com.br', '93462-1371'),
('Mariana Costa', 'maricosta@boladorio.com', '94562-3345'),
('José Maria', 'josemaria@email.com', '93333-3333'),
('Antonio Carlos', 'antonio@email.com', '94444-4444'),
('Pedro Henrique', 'pedro@email.com', '95555-5555'),
('Augusto Cesar', 'augusto@email.com', '96666-6666'),
('Carlos Silva', 'carlos@email.com', '97777-7777');


-- Exercicio 3

create table Vendedor(
	codigo int primary key auto_increment,
    login varchar(45),
    senha varchar(45),
    nome varchar(45),
    email varchar(45),
    telefone varchar(20)
);

insert into Vendedor (login, senha, nome, email, telefone) values
('Manuela', 'manu05', 'Manuela Cruz', 'manuela@trens.com.br', '92102-3447'),
('Viana', 'd2002', 'Dario Viana', 'dario@frantrip.com.br', '98415-2609'),
('MaRocha', 'r002', 'Mateus Rocha', 'rocha@poço.com.br', '99106-4490'),
('Benfica', 'victor345', 'Victor Benfica', 'victorb@hh.com.br', '93462-1371'),
('Mari', 'costa05', 'Mariana Costa', 'maricosta@boladorio.com', '94562-3345'),
('José', 'maria11', 'José Maria', 'josemaria@email.com', '93333-3333'),
('Antonio', 'carlosAnt', 'Antonio Carlos', 'antonio@email.com', '94444-4444'),
('Pedro', 'henrique2001', 'Pedro Henrique', 'pedro@email.com', '95555-5555'),
('Augusto', '270697', 'Augusto Cesar', 'augusto@email.com', '96666-6666'),
('Carlos', 'si3109', 'Carlos Silva', 'carlos@email.com', '97777-7777');


-- Exercicio 4

create table Jogador(
	codigo int primary key auto_increment,
    nome varchar(45),
    time_nome varchar(45),
    posicao varchar(45),
    numero_gols int
);

insert into Jogador (nome, time_nome, posicao, numero_gols) values
('Lionel Messi', 'Barcelona', 'Atacante', 600),
('Cristiano Ronaldo', 'Real Madrid', 'Atacante', 654),
('Eden Hazard', 'Chelsea', 'Meia', 18),
('Diego Costa', 'Atlético de Madrid', 'Ponta de Lança', 8),
('Paul Pogba', 'Manchester United', 'Meia', 7),
('Gareth Bale', 'Real Madrid', 'Atacante', 22),
('Neymar Júnior', 'Paris Saint-Germain', 'Ponta-Esquerda', 29),
('Mario Götze', 'Borussia Dortmund', 'Meia-Atacante', 2),
('Oscar dos Santos', 'Shanghai SIPG', 'Meia', 8),
('James Rodríguez', 'Bayern de Munique', 'Meia', 8);
  
-- Exercicio 5

create table Time_futebol(
	codigo int primary key auto_increment,
    nome varchar(45),
    numero_torcedores int,
    cidade varchar(45)
);

insert into Time_futebol (nome, numero_torcedores, cidade) values
('Chelsea', 500, 'Londres'),
('Real Madrid', 700, 'São Paulo'),
('Vitória', 800, 'Cruzeiro'),
('Flamengo', 600, 'Pirajuí'),
('Grêmio', 900, 'Porto Alegre'),
('Palmeiras', 850, 'São Paulo'),
('Corinthians', 720, 'Madrid'),
('São Paulo', 910, 'São Paulo'),
('Cruzeiro', 680, 'Salvador'),
('Internacional',1000, 'Porto Alegre');


-- Exercicio 6

create table Paises(
	codigo int primary key auto_increment,
    nome varchar(45),
    sigla varchar(2),
    continente varchar(45)
);

insert into Paises (nome, sigla, continente) values
('Alemanha', 'DE', 'Europa'),
('França', 'FR', 'Europa'),
('Canadá', 'CA', 'América do Norte'),
('Peru', 'PE', 'América do Sul'),
('Portugal', 'PT', 'Europa'),
('Síria', 'SY', 'Ásia'),
('Grécia', 'GR', 'Europa'),
('Estados Unidos', 'US', 'América do Norte'),
('Suécia', 'SE', 'Europa'),
('Noruega', 'NO', 'Europa');


-- Exercicio 7

create table Aluno(
	codigo int primary key auto_increment,
    nome varchar(45),
    data_nascimento date,
    curso varchar(45)
);

insert into Aluno (nome, data_nascimento, curso) values
('Júlia Isabeli Krambeck', '2002-03-26', 'Engenharia Civil'),
('Katia Krambeck', '1972-07-03', 'Pedagogia'),
('Daiane Carl', '2002-08-12', 'Ciências Biológicas'),
('Daniele Borba Voigt', '2002-04-21', 'História'),
('Edilson Krambeck', '1971-08-07', 'Ciências Contábeis'),
('Rian Dziuba', '2001-01-12', 'Ciência da Computação'),
('Anne Jeremias', '1988-03-28', 'Matemática'),
('Marcela Verga', '1970-05-20', 'Administração'),
('Lucas Eduardo', '2002-04-26', 'Gastronomia'),
('Bruna Carolini Krambeck', '1997-08-21', 'Ciências Contábeis');


-- Exercicio 8 

create table Funcionario(
	codigo int primary key auto_increment,
    nome varchar(45),
    salario decimal(18,2),
    data_admissao date
);

insert into Funcionario (nome, salario, data_admissao) values
('Katia', 2500.50, '2018-02-18'),
('Bruna', 1200, '2017-01-20'),
('Edilson', 2800.90, '2018-02-25'),
('Karina', 2600.90, '2016-02-17'),
('Luiza', 1100, '2000-01-10'),
('Carolina', 2450, '2018-02-17'),
('Poliana', 2550, '2018-02-16'),
('Neura', 3000, '1997-01-01'),
('Paulo', 3100, '1998-12-31'),
('Klayton', 2300, '2007-03-25');


-- Exercicio 9

create table Carro(
	codigo int primary key auto_increment,
    ano_fabricacao int,
    data_venda date,
    valor decimal(18,2)
);

insert into Carro (ano_fabricacao, data_venda, valor) values
(2017, '2018-02-18', 25990),
(2018, '2018-05-20', 33700),
(2009, '2013-03-26', 15000),
(1997, '2001-08-07', 10000),
(2015, '2016-08-21', 50000),
(2007, '2014-07-03', 28550),
(2016, '2018-04-26', 40900),
(2011, '2011-12-31', 25560),
(1972, '1997-03-28', 12460),
(1987, '1980-02-05', 14530);

-- Exercicio 10

create table Enchente(
	codigo int primary key auto_increment,
    data_dia date,
    nivel_rio decimal(18,2)
);

insert into Enchente (data_dia, nivel_rio) values
('2011-09-08', 7.6),
('2011-09-08', 9.86),
('2011-09-08', 10.98),
('2011-09-08', 11.60),
('2011-09-09', 12.60),
('2011-09-09', 11.94),
('2011-09-10', 10.04),
('2011-09-10', 09.41),
('2011-09-11', 8.52),
('2011-09-11', 7.98);


-- Exercicio 11

create table Jogo(
	codigo int primary key auto_increment,
    ano_lancamento int,
    classificacao varchar(45)
);

insert into Jogo (ano_lancamento, classificacao) values
(2018, 'Ação-Aventura'),
(2018, 'Sobrevivência'),
(2019, 'Ação-aventura e sobrevivência'),
(2017, 'Ação'),
(2009, 'Multiplayer online battle arena'),
(2010, 'Multijogador massivo'),
(2015, 'Jogo de tiro tático'),
(2016, 'Tiro em primeira pessoa'),
(2014, 'Arcade'),
(2005, 'Jogo eletrônico de ação e aventura');

-- Exercicio 12

create table Computador(
	codigo int primary key auto_increment,
    fabricante varchar(45),
    processador varchar(25),
    memoria varchar(25),
    hd varchar(25)
);

insert into Computador (fabricante, processador, memoria, hd) values
('Easypc', 'Intel Core I7', '8GB', '500 GB'),
('3Green', 'Intel Core I7', '8GB DDR4', '2TB'),
('Neologic', 'Intel Core I7-4790', '4GB', '500GB'),
('Premium', 'Intel Core I7', '8GB', '500GB'),
('Easypc', 'Intel Core I7', '8GB', '480GB'),
('Easypc', 'Intel Core I7', '16GB', '480GB'),
('Easypc', 'Intel Core I7', '8GB', '120GB'),
('Neologic', 'Intel Core I7-4790', '8GB', '1TB'),
('Neologic', 'Intel I7-4790', '4GB', '1TB'),
('Easypc', 'Intel Core I7', '8GB', '1TB');


-- Exercicio 13

create table Predio(
	codigo int primary key auto_increment,
    nome varchar(45),
    numero_salas int,
    numero_andares int
);

insert into Predio (nome, numero_salas, numero_andares) values
('San José', 20, 5),
('Aquabela', 10, 5),
('Marbella', 12, 3),
('San Remo', 28, 7),
('Ocean Front', 8, 2),
('Abody Tech', 10, 5),
('Casa del Mar', 12, 4),
('Bernini', 16, 4),
('Gardênia', 18, 6),
('Aloha', 15, 5);


-- Exercicio 14

create table Bicicleta(
	codigo int primary key auto_increment,
    fabricante varchar(45),
    numero_marchas int,
    formacao_quadro varchar(45)
);

insert into Bicicleta (fabricante, numero_marchas, formacao_quadro) values
('Bridgestone', 18, 'Quadros Diamante'),
('Merlin', 30, 'Penny-Farthing'),
('Kross', 21, 'Jackson_Fleet'),
('Hoffmann', 24, 'GT'),
('Kestrel', 18, 'Specialized'),
('Caloi', 30, 'Proflex_355'),
('Scott', 24, 'Quadro Y'),
('Santa Cruz', 18, 'Quadro Full Diamante'),
('Kikos', 21, 'Quadros Diamante'),
('Stroll', 27, 'Penny-Farthing');


-- Exercicio 15

create table Email(
	codigo int primary key auto_increment,
    origem varchar(45),
    destino varchar(45),
    assunto varchar(45),
    data_dia date
);

insert into Email (origem, destino, assunto, data_dia) values
('krambeckjulia@gmail.com', 'daianecarl@hotmail.com', 'Trabalho de Engenharia', '2018-04-26'),
('daianecarl@hotmail.com', 'krambeckjulia@gmail.com', 'Resenha', '2018-05-15'),
('krambeckjulia@gmail.com', 'daniborbavoigt@gmail.com', 'Slide Geo', '2018-05-05'),
('daniborbavoigt@gmail.com', 'krambeckjulia@gmail.com', 'Apresentação Biologia', '2018-04-29'),
('krambeckjulia@gmail.com', 'riandziuba@gmail.com', 'Resumo Hardware', '2018-04-26'),
('krambeckjulia@gmail.com', 'krambeckkatia@gmail.com', 'Imprimir', '2018-05-24'),
('marcela.leite@ifc.edu.br', 'krambeckjulia@gmail.com', 'Projeto', '2018-05-23'),
('krambeckjulia@gmail.com', 'nara.curvello@gmail.com', 'Prova', '2018-05-04'),
('krambeckjulia@gmail.com', 'yuri_gracietti@hotmail.com', 'Resumo', '2018-04-24'),
('riandziuba@gmail.com', 'krambeckjulia@gmail.com', 'Dia da Língua', '2018-05-01');


-- Exercicio 16

create table Escola(
	codigo int primary key auto_increment,
    nome varchar(45),
    cidade varchar(45),
    numero_alunos int,
    nome_diretora varchar(45)
);

insert into Escola (nome, cidade, numero_alunos, nome_diretora) values
('Unidavi', 'Rio do Sul', 5000, 'Angela'),
('Colégio Luterano Rui Barbosa', 'Marechal Cândido Rondon', 1500, 'Carlos'),
('Instituto Federal Catarinense', 'Rio do Sul', 3000, 'Ricardo'),
('Pedro Américo', 'Agrolândia', 1000, 'Ivete'),
('Doutor Hermann Blumenau', 'Trombudo Central', 700, 'Ezenilda'),
('Paulo Cordeiro', 'Rio do Sul', 500, 'Sei lá quem'),
('Paulo Zimmerman', 'Rio do Sul', 500, 'Josefina'),
('Henrique Fontes', 'Rio do Sul', 750, 'Fernandinho'),
('Instituto Maria Auxiliadora', 'Rio do Sul', 800, 'Jorge'),
('Dom Bosco', 'Rio do Sul', 850, 'Maria');


-- Exercicio 17

create table Esporte(
	codigo int primary key auto_increment,
    nome varchar(45),
    numero_praticantes int
);

insert into Esporte (nome, numero_praticantes) values
('Vôlei', 24),
('Basquete', 10),
('Handebol', 28),
('Futebol de campo', 22),
('Rugby', 30),
('Tênis de mesa', 2),
('Futebol de salão', 12),
('Beisebol', 18),
('Frescobol', 4),
('Softbol', 18);

SELECT * FROM Aluno WHERE dataNasc = date('2002-03-26') ORDER BY dataNasc;

