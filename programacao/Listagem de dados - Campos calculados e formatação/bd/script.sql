use CRUD;

-- 1
create table Atletas(
	codigo int primary key auto_increment,
    nome varchar(45),
    saltoUm decimal(8,2),
    saltoDois decimal(8,2),
    saltoTres decimal(8,2)
);

insert into Atletas (nome, saltoUm, saltoDois, saltoTres) values
('Rodrigo', 4.5, 5.6, 7),
('Cristhian', 4, 5, 6),
('Michael', 5, 6, 9);


-- 2
create table Alunos(
	matricula int,
    aluno varchar(45),
    notaUm decimal(8,2),
    notaDois decimal(8,2),
    notaTres decimal(8,2)
);

insert into Alunos (matricula, aluno, notaUm, notaDois, notaTres) values
(12121243, 'Rodrigo', 4, 5, 6),
(543534323, 'Cristhian', 7, 8, 9),
(5675675, 'Michael', 1, 2, 3);


-- 3
create table Jogadores(
	codigo int primary key auto_increment,
    nome varchar(45),
    selecao varchar(45),
    gols int,
    jogos int,
    copas int
);

insert into Jogadores (nome, selecao, gols, jogos, copas) values
('Miroslav Klos', 'Alemanha', 16, 24, 4), 
('Ronaldo', 'Brasil', 15, 19, 4),
('Gerd Muller', 'Alemanha Ocidental', 14, 13, 2),
('Just Fontaine', 'França', 13, 6, 4),
('Pelé', 'Brasil', 12, 14, 4);
