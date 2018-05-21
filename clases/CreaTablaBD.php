<?php

$nombre = "mercadeo";
include "conexion.php";

$stmt1 = $db->query("
create table tblProductos(
CodProducto int primary key,
nombreProducto varchar(100));");

$stmt2 = $db->query("
create table tblPresenProducto(
presentacion varchar(20),
precio varchar(20),
fkCodProducto int,
constraint fk_prod foreign key (fkCodProducto) references tblProductos (CodProducto));");

$stmt3 = $db->query("
create table tblEstablecimiento(
nombre varchar(100),
nit varchar(100) primary key,
ciudad varchar(100),
barrio varchar(100),
direccion varchar(100),
telefono varchar(100));	");

$stmt4 = $db->query("
create table tblRol(
IdRol int primary key,
usuario varchar(20),
clave varchar(10),
rol varchar(1)
);");

$stmt5 = $db->query("
create table tblTenderos(
idTendero varchar(100) primary key,
nombre varchar(100),
ciudad varchar(100),
barrio varchar(100),
direccion varchar(100),
fkIdRol int,
constraint fk_r1 foreign key (fkIdRol) references tblRol (IdRol));");

$stmt6 = $db->query("
create table tblCliente(
IdCliente int primary key,
nombre varchar(100),
ciudad varchar(100),
barrio varchar(100),
direccion varchar(100),
telefono varchar(100),
email varchar(100),
fkIdTendero varchar(100),
constraint fk_pro foreign key (fkIdTendero) references tblTenderos (idTendero),
fkIdRol int,
constraint fk_r2 foreign key (fkIdRol) references tblRol (IdRol));");

$stmt7 = $db->query("
create table tblAdministrador(
IdAdministrador int primary key,
nombre varchar(100),
ciudad varchar(100),
barrio varchar(100),
fkIdRol int,
constraint fk_r3 foreign key (fkIdRol) references tblRol (IdRol));");

$stmt8 = $db->query("
create table tblGerente(
IdGerente int primary key,
nombre varchar(100),
ciudad varchar(100),
barrio varchar(100),
fkIdRol int,
constraint fk_r4 foreign key (fkIdRol) references tblRol (IdRol));");

$stmt9 = $db->query("
create table tblRepresentante(
IdRepresentante int primary key,
nombre varchar(100),
ciudad varchar(100),
barrio varchar(100),
fkIdRol int,
constraint fk_r5 foreign key (fkIdRol) references tblRol (IdRol));");

if (!$stmt1 || !$stmt2) {
    echo " Error en crear tabla.";
} else {
    echo "tabla creada";
}
