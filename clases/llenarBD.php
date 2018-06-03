<?php
$nombre = "mercadeo";
include "conexion.php";

//DATOS ROL
$stmt = $db->query("INSERT INTO `tblrol` (`IdRol`, `usuario`, `clave`, `rol`) VALUES ('1', 'admin', '1', 'A');");
$stmt = $db->query("INSERT INTO `tblrol` (`IdRol`, `usuario`, `clave`, `rol`) VALUES ('2', 'tendero1', '1', 'T');");
$stmt = $db->query("INSERT INTO `tblrol` (`IdRol`, `usuario`, `clave`, `rol`) VALUES ('3', 'cliente1', '1', 'C');");
$stmt = $db->query("INSERT INTO `tblrol` (`IdRol`, `usuario`, `clave`, `rol`) VALUES ('4', 'gerente1', '1', 'G');");
$stmt = $db->query("INSERT INTO `tblrol` (`IdRol`, `usuario`, `clave`, `rol`) VALUES ('5', 'representante1', '1', 'R');");

//DATOS ADMINISTRADOR
$stmt = $db->query("INSERT INTO `tbladministrador` (`IdAdministrador`, `nombre`, `ciudad`,`barrio`, `fkIdRol`) VALUES ('1','Gerley','Medellin', 'San Cristobal', '1');");

//DATOS DE ESTABLECIMIENTO
$stmt = $db->query("INSERT INTO `tblEstablecimiento` (`CodEstabl`, `nombre`, `ciudad`,`barrio`, `direccion`, `telefono`) VALUES ('0987', 'Mercadenia', 'Medellin', 'Manrique','Cra 80 #41', '0987');");
//DATOS TENDEROS
$stmt = $db->query("INSERT INTO `tbltenderos` (`idTendero`, `nombre`, `ciudad`,`barrio`, `direccion`, `fkIdRol`,`fkCodEstabl`) VALUES ('1010', 'Carlos', 'Medellin', 'Manrique','Cra 80 #41', '2','0987');");

//DATOS CLIENTE
$stmt = $db->query("INSERT INTO `tblcliente` (`IdCliente`, `nombre`,  `ciudad`,`barrio`, `direccion`, `telefono`, `email`, `fkIdTendero`, `fkIdRol`) VALUES ('1234', 'Camilo', 'Medellin', 'Manrique', 'Cra 40', '24589633', 'carmilo@correo.com', '1010', '3');");

//DATOS GERENTE
$stmt = $db->query("INSERT INTO `tblgerente` (`IdGerente`, `nombre`, `ciudad`, `barrio`, `fkIdRol`) VALUES ('1011', 'Julio mario ', 'Medellín', 'Poblado', '4');");

//DATOS REPRESENTANTE
$stmt = $db->query("INSERT INTO `tblrepresentante` (`IdRepresentante`, `nombre`, `ciudad`, `barrio`, `fkIdRol`) VALUES ('1012', 'Sandra', 'Medellin', 'Centro ', '5');");

//DATOS PRODUCTOS
$stmt = $db->query("INSERT INTO `tblproductos` (`CodProducto`, `nombreProducto`) VALUES ('01', 'Chorizo');");

$stmt = $db->query("INSERT INTO `tblproductos` (`CodProducto`, `nombreProducto`) VALUES ('02', 'Mortadela');");

$stmt = $db->query("INSERT INTO `tblproductos` (`CodProducto`, `nombreProducto`) VALUES ('03', 'Salami');");

$stmt = $db->query("INSERT INTO `tblproductos` (`CodProducto`, `nombreProducto`) VALUES ('04', 'Costilla');");

$stmt = $db->query("INSERT INTO `tblproductos` (`CodProducto`, `nombreProducto`) VALUES ('05', 'Morcilla');");

$stmt = $db->query("INSERT INTO `tblproductos` (`CodProducto`, `nombreProducto`) VALUES ('06', 'Salchicha');");

$stmt = $db->query("INSERT INTO `tblproductos` (`CodProducto`, `nombreProducto`) VALUES ('07', 'Salchichon');");

//DATOS PRESENTACIÓN PRODUCTO
$stmt = $db->query("INSERT INTO `tblpresenproducto` (`codigoPP`,`presentacion`, `precio`, `fkCodProducto`) VALUES ('A1','300 gr', '4000', '01');");

$stmt = $db->query("INSERT INTO `tblpresenproducto` (`codigoPP`,`presentacion`, `precio`, `fkCodProducto`) VALUES ('A2','500 gr', '5300', '01');");

$stmt = $db->query("INSERT INTO `tblpresenproducto` (`codigoPP`,`presentacion`, `precio`, `fkCodProducto`) VALUES ('B1','250 gr', '3500', '02');");

$stmt = $db->query("INSERT INTO `tblpresenproducto` (`codigoPP`,`presentacion`, `precio`, `fkCodProducto`) VALUES ('B2','500 gr', '6000', '02');");

$stmt = $db->query("INSERT INTO `tblpresenproducto` (`codigoPP`,`presentacion`, `precio`, `fkCodProducto`) VALUES ('C1','50 gr', '4000', '03');");

$stmt = $db->query("INSERT INTO `tblpresenproducto` (`codigoPP`,`presentacion`, `precio`, `fkCodProducto`) VALUES ('C2','150 gr', '10000', '03');");

$stmt = $db->query("INSERT INTO `tblpresenproducto` (`codigoPP`,`presentacion`, `precio`, `fkCodProducto`) VALUES ('D1','500 gr', '10000', '04');");

$stmt = $db->query("INSERT INTO `tblpresenproducto` (`codigoPP`,`presentacion`, `precio`, `fkCodProducto`) VALUES ('D2','1000 gr', '18000', '04');");

$stmt = $db->query("INSERT INTO `tblpresenproducto` (`codigoPP`,`presentacion`, `precio`, `fkCodProducto`) VALUES ('E1','250 gr', '3000', '05');");

$stmt = $db->query("INSERT INTO `tblpresenproducto` (`codigoPP`,`presentacion`, `precio`, `fkCodProducto`) VALUES ('E2','500 gr', '5500', '05');");

$stmt = $db->query("INSERT INTO `tblpresenproducto` (`codigoPP`,`presentacion`, `precio`, `fkCodProducto`) VALUES ('F1','250 gr', '4000', '06');");

$stmt = $db->query("INSERT INTO `tblpresenproducto` (`codigoPP`,`presentacion`, `precio`, `fkCodProducto`) VALUES ('F2','500 gr', '7500', '06');");

$stmt = $db->query("INSERT INTO `tblpresenproducto` (`codigoPP`,`presentacion`, `precio`, `fkCodProducto`) VALUES ('G1','250 gr', '3000', '07');");

$stmt = $db->query("INSERT INTO `tblpresenproducto` (`codigoPP`,`presentacion`, `precio`, `fkCodProducto`) VALUES ('G2','500 gr', '5500', '07');");
