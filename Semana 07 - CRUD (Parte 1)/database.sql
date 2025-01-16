-- Active: 1735959435146@@127.0.0.1@3306@crud_web2
CREATE
    DATABASE CRUD_WEB2;

USE
    CRUD_WEB2;

CREATE TABLE Usuarios
(
    id    INT AUTO_INCREMENT NOT NULL,
    nome  VARCHAR(255)       NOT NULL,
    email VARCHAR(255)       NOT NULL,
    senha VARCHAR(255)       NOT NULL,

    PRIMARY KEY (id)
);

ALTER TABLE Usuarios
    ADD CONSTRAINT UC_Email UNIQUE (email);

INSERT INTO Usuarios (nome, email, senha)
VALUES ('teste', 'teste@email.com', '123456');