create database exercicio_alunos;
use exercicio_alunos;

create table alunos(
matricula int primary key auto_increment,
nome varchar(100),
nota1 double,
nota2 double,
nota3 double
);

insert into alunos (nome, nota1, nota2, nota3) values 
('Felipe', 10, 8, 5),
('João', 3, 5, 8),
('Maria', 10, 10, 10),
('Claudia', 5, 5, 5),
('Bruno', 7, 8, 6);

select * from alunos;
SELECT *, round(((nota1+nota2+nota3)/3),1) as media FROM alunos WHERE round(((nota1+nota2+nota3)/3),1) <= '5.3';
SELECT *, round(((nota1+nota2+nota3)/3),1) as media FROM alunos;

