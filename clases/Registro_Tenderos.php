<?php 
//Archivo para las clases PHP necesarias en el sitio web

$id = $_POST['idTendero'];
$clave = $_POST['clave'];
$nombre_tendero = $_POST['nombre'];
$Cuidad = $_POST['Cuidad'];
$Direccion = $_POST['Direccion'];
$Telefono = $_POST['Telefono'];

$Clave=$clave;

echo "$clave";
if(isset($clave) && isset($nombre_tendero) && isset($Cuidad) && isset($Direccion) && isset($Telefono)){	
//Establecemos conexion con el servidor 	
	
	$nombre="mercadeo";
	include("conexion.php");	


	$stmt5 = $db->prepare("insert into tbltenderos values(?,?,?,?,?,?);");

	$stmt5 ->bind_param('ssssss',$id,$Clave,$nombre_tendero,$Cuidad,$Direccion,$Telefono);
	$stmt5->execute();

if (!$stmt5) {
	echo "<br>Error en al insertar datos en la base de datos";
}else{
	echo "<script> alert('Registro hecho');
 			location.href ='../index_.php';
		 </script>";
}
}else{
	echo "Debe llenar todos los campos requeridos!!";
}

 ?>