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

//DATOS TENDEROS
$stmt = $db->query("INSERT INTO `tbltenderos` (`idTendero`, `nombre`, `ciudad`,`barrio`, `direccion`, `fkIdRol`) VALUES ('1010', 'Carlos', 'Medellin', 'Manrique','Cra 80 #41', '2');");

//DATOS CLIENTE
$stmt = $db->query("INSERT INTO `tblcliente` (`IdCliente`, `nombre`,  `ciudad`,`barrio`, `direccion`, `telefono`, `email`, `fkIdTendero`, `fkIdRol`) VALUES ('1234', 'Camilo', 'Medellin', 'Manrique', 'Cra 40', '24589633', 'carmilo@correo.com', '1010', '3');");

//DATOS GERENTE
$stmt = $db->query("INSERT INTO `tblgerente` (`IdGerente`, `nombre`, `ciudad`, `barrio`, `fkIdRol`) VALUES ('1011', 'Julio mario ', 'medellin', 'poblado', '4');");

//DATOS REPRESENTANTE
$stmt = $db->query("INSERT INTO `tblrepresentante` (`IdRepresentante`, `nombre`, `ciudad`, `barrio`, `fkIdRol`) VALUES ('1012', 'Sandra', 'Medellin', 'Centro ', '5');");
