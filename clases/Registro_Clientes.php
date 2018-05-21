<?php 
//Archivo para las clases PHP necesarias en el sitio web

$idCliente = $_POST['idCliente'];
$nombre = $_POST['nombre'];
$Cuidad = $_POST['Cuidad'];
$Direccion = $_POST['Direccion'];
$Telefono = $_POST['Telefono'];
$email = $_POST['email'];





if(isset($nombre) && isset($Cuidad) && isset($Direccion) && isset($Telefono) && isset($email)){
	
//Establecemos conexion con el servidor 
	
	
	$nombre="mercadeo";
	include("conexion.php");

	


	$stmt5 = $db->prepare("insert into tblcliente values(?,?,?,?,?,?);");

	$stmt5 ->bind_param('ssssss',$idCliente,$nombre,$Cuidad,$Direccion,$Telefono,$email);
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