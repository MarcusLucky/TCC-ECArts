create database cadastro;

use cadastro;

create table usuarios (
	codigo int not null primary key auto_increment,
	name varchar(40) not null,
    email varchar(40) not null,
    password varchar(50) not null
);