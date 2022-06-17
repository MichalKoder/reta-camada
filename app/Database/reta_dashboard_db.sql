CREATE DATABASE reta_camada
USE reta_camada;
GRANT ALL ON reta_camada.* TO 'username'@'localhost' IDENTIFIED BY 'password';

CREATE TABLE Candidate (
    ID INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(128),
    age INT(3) UNSIGNED,
    date_of_application DATE,
    role VARCHAR(128),
    PRIMARY KEY(ID)
);