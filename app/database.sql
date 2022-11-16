create database crud_infra;
use crud_infra;

create table personas (id int AUTO_INCREMENT,nombre VARCHAR(255) NOT NULL,apellido VARCHAR(255) NOT NULL,usuario VARCHAR(255) NOT NULL,PRIMARY KEY (id));