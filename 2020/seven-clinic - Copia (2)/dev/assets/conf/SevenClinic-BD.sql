CREATE DATABASE SevenClinic;

USE SevenClinic;

CREATE TABLE usuarios (
id INT NOT NULL AUTO_INCREMENT,
nome VARCHAR(200) NOT NULL,
email VARCHAR(100) NOT NULL,
senha VARBINARY(128) NOT NULL,
PRIMARY KEY (id)
);