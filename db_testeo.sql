CREATE DATABASE IF NOT EXISTS testeo
USE testeo

CREATE table IF NOT EXISTS lista(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255)
);

INSERT INTO lista(nombre)
VALUES ('Juan'), ('Pedro'), ('Maria'), ('Ana'), ('Luis'), ('Jose');