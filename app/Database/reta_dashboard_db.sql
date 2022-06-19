DROP DATABASE reta_camada;
CREATE DATABASE reta_camada
USE reta_camada;
-- GRANT ALL ON reta_camada.* TO 'username'@'localhost' IDENTIFIED BY 'password';

CREATE TABLE Role (
    ID INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(128),
    PRIMARY KEY(ID)
);

CREATE TABLE Candidate (
    ID INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(128),
    age INT(3) UNSIGNED,
    date_of_application DATE,
    roleID INT UNSIGNED,
    PRIMARY KEY(ID),
    FOREIGN KEY(roleID) REFERENCES Role(ID) 
);