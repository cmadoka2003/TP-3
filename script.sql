create database Contact;

use Contact;

CREATE TABLE Envoi(
    id INT PRIMARY KEY AUTO_INCREMENT,
    prenon VARCHAR(20),
    nom VARCHAR(20),
    email VARCHAR(30),
    agence VARCHAR(20),
    message VARCHAR(400),
);