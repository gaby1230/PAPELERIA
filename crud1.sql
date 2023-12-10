create database CRUD;
use CRUD;

create table person(
	id_producto int not null auto_increment primary key,
	nombre varchar(100) not null,
	piezas int(100) not null,
	precio int(100) not null,
	total int(100) not null,
	created_at datetime not null
);