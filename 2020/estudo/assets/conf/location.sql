CREATE TABLE dados_novo (
	latitude VARCHAR(50) NOT NULL,
	longitude VARCHAR(50) NOT NULL,
	hora DATETIME NOT NULL,
	ID INT NOT NULL AUTO_INCREMENT,
	placa varchar(20) not null,
	PRIMARY KEY (ID, placa));