CREATE DATABASE IF NOT EXISTS sistema_login;

USE sistema_login;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Usuario de prueba
INSERT INTO usuarios (usuario, password)
VALUES ('admin', SHA2('1234', 256));