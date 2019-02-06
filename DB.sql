
drop database if exists dbpromocion;

create database dbpromocion;

use dbpromocion;

create table paquete_promo(
 idpaquete int auto_increment primary key,
 descripcion varchar(50) NOT NULL,
 duracion int not null,
 activo int not null default 0
);

create table promocion(
 idpromocion int not null,
 idproducto int not null,
 costo float not null,
 idpaquete int not null,
 constraint fk_paquete_pr foreign key (idpaquete) references paquete_promo(idpaquete)


);