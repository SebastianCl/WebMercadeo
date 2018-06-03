create table tblProductos(
CodProducto int primary key,
nombreProducto varchar(100));


create table tblPresenProducto(
codigoPP varchar(10),
presentacion varchar(20),
precio varchar(20),
fkCodProducto int,
constraint fk_prod foreign key (fkCodProducto) references tblProductos (CodProducto));


create table tblEstablecimiento(
codEstabl varchar(100) primary key,
nombre varchar(100),
ciudad varchar(100),
barrio varchar(100),
direccion varchar(100),
telefono varchar(100));	


create table tblRol(
IdRol INT NOT NULL AUTO_INCREMENT,
usuario varchar(20),
clave varchar(10),
rol varchar(1),
PRIMARY KEY (`IdRol`)
);


create table tblTenderos(
idTendero varchar(100) primary key,
nombre varchar(100),
ciudad varchar(100),
barrio varchar(100),
direccion varchar(100),
fkIdRol int,
fkCodEstabl varchar(100),
constraint fk_r1 foreign key (fkIdRol) references tblRol (IdRol),
constraint fk_r2 foreign key (fkCodEstabl) references tblEstablecimiento (CodEstabl));


create table tblCliente(
IdCliente int primary key,
nombre varchar(100),
ciudad varchar(100),
barrio varchar(100),
direccion varchar(100),
telefono varchar(100),
email varchar(100),
fkIdTendero varchar(100),
fkIdRol int,
constraint fk_IdT foreign key (fkIdTendero) references tblTenderos (idTendero),
constraint fk_IdR foreign key (fkIdRol) references tblRol (IdRol));


create table tblAdministrador(
IdAdministrador int primary key,
nombre varchar(100),
ciudad varchar(100),
barrio varchar(100),
fkIdRol int,
constraint fk_r3 foreign key (fkIdRol) references tblRol (IdRol));


create table tblGerente(
IdGerente int primary key,
nombre varchar(100),
ciudad varchar(100),
barrio varchar(100),
fkIdRol int,
constraint fk_r4 foreign key (fkIdRol) references tblRol (IdRol));


create table tblRepresentante(
IdRepresentante int primary key,
nombre varchar(100),
ciudad varchar(100),
barrio varchar(100),
fkIdRol int,
constraint fk_r5 foreign key (fkIdRol) references tblRol (IdRol));


create table tblEncuesta(
IdCliente int primary key,
nombre varchar(100),
respuesta1 varchar(100),
respuesta2 varchar(100),
respuesta3 varchar(100),
respuesta4 varchar(100),
respuesta5 varchar(100),
respuesta6 varchar(100),
respuesta7 varchar(100),
respuesta8 varchar(100));