drop database if exists newcenter;
create database newcenter;
use newcenter;


create table famille (
    idfamille int(3) not null auto_increment,
    nom varchar(50),
    prenomenfant varchar(250),
    membre varchar(50),
    adresse varchar(255),
    email varchar(255),
    primary key (idfamille)
);

create table salle (
    idsalle int(3) not null auto_increment,
    nom varchar(50),
    categorie varchar(255),
    primary key (idsalle)
);


create table rdv (
    idrdv int(3) not null auto_increment,
    adresse varchar(50),
    daterdv date,
    horaire time,
    idfamille int(3)  not null,
    primary key (idrdv),
    foreign key(idfamille) references famille(idfamille)
);



create table acheteur (
    idacheteur int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    adresse varchar(255),
    email varchar(255),
    primary key (idacheteur)
);


create table jouet(
    idjouet int(3) not null auto_increment,
    libelle varchar(50),
    marque varchar(250),
    prix int(2),
    trancheage int(2),
    cote int(2),
    categorie varchar(250),
    idfamille int(3) not null,
    idacheteur int(3) not null,
    primary key(idjouet),
    foreign key(idfamille) references famille(idfamille),
    foreign key(idacheteur) references acheteur(idacheteur)
);

insert into famille values (null, "Lum", "Noelia",2 , "12 rue Vincennes","lum@gmail.com"),
(null, "Koala", "Kumo",3 ,"10 avenue Momatre", "koala@yahoo.fr");

insert into salle values (null, "salle 1a", "figurines"),
(null, "salle 2b", "jeux vidéo");

insert into rdv values(null, "1 avenu jaures", "2021-12-10", "12:30", 1),
(null, "1 rue paris", "2021-12-12", "12:00", 2);

insert into acheteur values(null, "Bojack", "Denis", "120 avenue Roche", "bojack@gmail.com"),
(null, "Freeks", "Don", "124 avenue Paris", "freeks@gmail.com");

/*insert into enfant values (null, "Lum", "Noah", "9ans", 1, 1),
(null, "Koala", "Loic", "10ans", 2, 2);*/

insert into jouet values(null, "Mickey Tokyo Revengers","toonamie", 10 ,10 , 4, "figurine", 1, 1),
(null , "Fifa 21", "ea sport", 25, 12, 5, "jeux video", 2, 2);

/*
create view enfants_parents as (
    select e.idenfant, e.nom, e.prenom, e.age, e.tel, e.adresse, 
    p.prenom  as parent
    from enfant e, parent p
    where e.idparent= p.idparent
);*/



create view jouet_enfant as (
    select j.idjouet, j.libelle, j.cote,
    f.prenomenfant  as enfant
    from jouet j, famille f
    where j.idfamille = f.idfamille
);

create table user (
    iduser int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    email varchar(50),
    mdp varchar(255),
    role enum ("admin", "user"),
    primary key (iduser)
);

insert into user values (null, "Mustapha", "Gabriel", "a@gmail.com", "123", "admin"),
(null, "Muha", "Giel", "ako@gmail.com", "123", "user");