-- Criação do banco de dados
CREATE DATABASE bd_login;

-- Seleciona o banco de dados
USE bd_login;

-- Criação da tabela
CREATE TABLE login (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

SELECT * FROM login;

insert into login(usuario, senha) values ('admin', 'farid123')