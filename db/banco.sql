CREATE DATABASE gatos;

CREATE TABLE gato (
    id_gato int PRIMARY KEY AUTO_INCREMENT,
    nome varchar(255) NOT NULL,
    foto longblob,
    descricao text
)