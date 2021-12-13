drop database if exists reservegarage;
create database reservegarage;
use reservegarage;

create table garage (
    idgarage int(3) not null auto_increment,
    nom varchar(255),
    ville varchar(255),
)