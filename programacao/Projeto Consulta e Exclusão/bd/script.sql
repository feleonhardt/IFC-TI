use crud;

create table Maquiagem(
	codigo int primary key auto_increment,
    nome varchar(50),
    marca varchar(50),
    data_de_validade date,
    preco decimal(10,2)
);

insert into Maquiagem values
(null, 'Batom Líquido', 'DIOR', '2019-08-21', 159.90),
(null, 'Esmalte Cremoso', 'BOURJOIS', '2022-05-03', 22.99),
(null, 'Caneta para Sobrancelha', 'KLASME', '2020-05-24', 65.00),
(null, 'Batom Hidratante', 'CLARINS', '2019-12-09', 95.80),
(null, 'Máscara para cílios', 'TALIKA', '2020-10-15', 98.50),
(null, 'Pó 3 em 1 para rosto', 'OCÉANE', '2021-04-03', 39.90),
(null, 'Caneta delineadora', 'MAYBELLINE', '2019-08-12', 35.90),
(null, 'Lápis para olhos', 'VULT', '2020-11-05', 26.95),
(null, 'Primer Matte', 'OCÉANE', '2022-03-26', 50.90),
(null, 'Paleta contorno facial', 'OCÉANE', '2023-07-03', 91.80),
(null, 'Blush', 'THE BALM', '2024-05-21', 80.99);

