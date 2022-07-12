CREATE DATABASE bibliotheque ;
USE bibliotheque;

CREATE TABLE USER
(numuser INTEGER AUTO_INCREMENT PRIMARY KEY, 
nom  VARCHAR(30), 
prenom  VARCHAR(30), 
age INTEGER ,
num_telephone INTEGER, 
adresse VARCHAR(100));


CREATE TABLE DICTIONNER 
( 
editeur VARCHAR(30) references VOLUME (auteur),
num_seriedect INTEGER PRIMARY KEY
);

CREATE TABLE LIVRE 
(
id_livre INTEGER PRIMARY KEY ,
auteur VARCHAR(30) references VOLUME (auteur),
categorie VARCHAR(30),
image INTEGER,
titre Varchar(30) PRIMARY KEY 
);
