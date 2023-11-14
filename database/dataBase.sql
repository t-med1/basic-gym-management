CREATE DATABASE gestion_gym;
use gestion_gym;
CREATE table member(
    numM int primary KEY AUTO_INCREMENT,
    nomcompletM varchar(60),
	emailM varchar(9000),
	passM varchar(20),
    cvvM varchar(30),
    cardM int,
    dateDebut date
);
CREATE TABLE commentaire(
    numCom int primary key AUTO_INCREMENT,
    usercomment varchar (500),
    emailcomment varchar(50),
    commentaireC varchar(1888)
    
);
CREATE TABLE admins(
    numAd int PRIMARY key AUTO_INCREMENT,
    nameAd varchar(30),
    emailAd varchar(900),
    passAd varchar(900)
    ville varchar (60),
    phone int
);
create table Coach(
    numCoa int PRIMARY KEY,
    nomCoa varchar(60),
    prenomCoa varchar(60),
    dateDebut date,
    dateFin date,
    roleCoa varchar(30)
);
CREATE TABLE images (
  idIm INT PRIMARY KEY auto_increment,
  nomIm TEXT NOT NULL,
  dataIm BLOB NOT NULL
);

insert into member values
(1,"Med Telaj","med.telaj404@gmai.com","medmedtelaj",1299,1245763489,now()),
(2,"Imad Haouat","imad.haouat@gmail.com","imadhaouat123",9856,8731096539,now());

-- insert into commentaire values
-- (1,"Bonjour je veux voir la localisation exact"),
-- (2,"Merci de votre service"),
-- (3,"Un bon Service Et de bon Qualite");

insert into admins values
(default,"Telaj Med","telaj.med@gmail.com","telaj123","FES",620963627);
