CREATE DATABASE cadastro;

USE cadastro;

CREATE TABLE usuario(
	id INT AUTO_INCREMENT,
	cpf VARCHAR(14) PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    nascimento DATE NOT NULL,
    email VARCHAR(150) NOT NULL,
    senha VARCHAR(20) NOT NULL
) default charset utf8mb4