create table tblProductos(
CodProducto int primary key,
nombreProducto varchar(100));


create table tblPresenProducto(
codigoPP varchar(10) primary key,
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
fkCodEstabl varchar(100),
fkIdRol int,
constraint fk_code foreign key (fkCodEstabl) references tblEstablecimiento (CodEstabl),
constraint fk_r1 foreign key (fkIdRol) references tblRol (IdRol));


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
fkIdCliente int primary key,
respuesta1 varchar(100),
respuesta2 varchar(100),
respuesta3 varchar(100),
respuesta4 varchar(100),
respuesta5 varchar(100),
respuestasabor varchar(100),
respuestacalidad varchar(100),
respuestagramos varchar(100),
respuestaempaque varchar(100),
respuesta6 varchar(100),
respuesta7 varchar(100),
respuesta8 varchar(100),
constraint fk_ec foreign key (fkIdCliente) references tblCliente (IdCliente));

create table tblVenta(
codVenta int primary key AUTO_INCREMENT,
fkIdTendero varchar(100) NOT NULL,
fecha date, 
estado bit DEFAULT 1, 
constraint fk_CT foreign key (fkIdTendero) references tblTenderos (idTendero));

create table tblDetalleVenta(
fkCodVenta int NOT NULL,
fkCodigoPP  varchar(10) NOT NULL,
cantidad int,
constraint fk_venta foreign key (fkCodVenta) references tblVenta (codVenta),
constraint fk_prep foreign key (fkCodigoPP) references tblPresenProducto (CodigoPP));

create table tblPedido(
codPedido int primary key AUTO_INCREMENT,
fkIdTendero varchar(100) NOT NULL,
fecha date, 
estado bit DEFAULT 1, 
constraint fk_CT2 foreign key (fkIdTendero) references tblTenderos (idTendero));

create table tblDetallePedido(
fkCodPedido int NOT NULL,
fkCodigoPP  varchar(10) NOT NULL,
cantidad int,
constraint fk_pedido foreign key (fkCodPedido) references tblPedido (CodPedido),
constraint fk_prep2 foreign key (fkCodigoPP) references tblPresenProducto (CodigoPP));



create table tblVisita(
fkIdUsuario int,
fecha datetime,
ciudad varchar(100),
contVisitas int,
constraint fk_vu foreign key (fkIdUsuario) references tblRol (IdRol));


