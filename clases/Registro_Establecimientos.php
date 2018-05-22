<?php 
//Archivo para las clases PHP necesarias en el sitio web

$nombre = $_POST['nombre_establecimiento'];
$Nit = $_POST['nit'];
$Cuidad = $_POST['cuidad'];
$Barrio = $_POST['barrio'];
$Direccion = $_POST['direccion'];
$Telefono = $_POST['telefono'];


if(isset($nombre) && isset($Cuidad) && isset($Barrio) && isset($Direccion) && isset($Telefono)){	
//Establecemos conexion con el servidor 
	
	$nombre="mercadeo";
	include("conexion.php");


	$stmt5 = $db->prepare("insert into tblestablecimiento values(?,?,?,?,?,?);");

	$stmt5 ->bind_param('ssssss',$nombre,$Nit,$Cuidad,$Barrio,$Direccion,$Telefono);
	$stmt5->execute();

	if (!$stmt5) {
		echo "<br>Error en al insertar datos en la base de datos";
	}else{
		echo "<script> alert('Registro hecho');location.href ='../index_.php';</script>";
	}
}

 ?>