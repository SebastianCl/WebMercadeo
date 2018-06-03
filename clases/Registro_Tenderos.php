<?php
//Archivo para las clases PHP necesarias en el sitio web

$id              = $_POST['idTendero'];
$clave           = $_POST['clave'];
$nombre_tendero  = $_POST['nombre'];
$Cuidad          = $_POST['Cuidad'];
$Direccion       = $_POST['Direccion'];
$Telefono        = $_POST['Telefono'];
$Establecimiento = $_POST['Establecimiento'];

$Clave = $clave;

echo "$clave";
if (isset($clave) && isset($nombre_tendero) && isset($Cuidad) && isset($Direccion) && isset($Telefono) && isset($Establecimiento)) {

    $nombre = "mercadeo";
    include "conexion.php";
    $sql    = "SELECT * FROM tblEstablecimiento WHERE CodEstabl = '" . $Establecimiento . "'";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        $stmt5 = $db->prepare("insert into tbltenderos values(?,?,?,?,?,?,?);");

        $stmt5->bind_param('sssssss', $id, $Clave, $nombre_tendero, $Cuidad, $Direccion, $Telefono, $Establecimiento);
        $stmt5->execute();

        if (!$stmt5) {
            echo "<br>Error en al insertar datos en la base de datos";
        } else {
            echo "<script> alert('Registro hecho');	location.href ='../index_.php'; </script>";
        }
    } else {
        echo "<script> alert('NO HUBO REGISTRO | No existe el establecimiento');location.href ='../index_.php?menu=registrarTendero';</script>";
    }

}
