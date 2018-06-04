<?php
//Archivo para las clases PHP necesarias en el sitio web

$nombre_establecimiento = $_POST['nombre_establecimiento'];
$codEstabl              = $_POST['codEstabl'];
$Ciudad                 = $_POST['ciudad'];
$Barrio                 = $_POST['barrio'];
$Direccion              = $_POST['direccion'];
$Telefono               = $_POST['telefono'];

if (isset($codEstabl) && isset($nombre_establecimiento) && isset($Ciudad) && isset($Barrio) && isset($Direccion) && isset($Telefono)) {
//Establecemos conexion con el servidor

    $nombre = "mercadeo";
    include "conexion.php";
    $sql    = "SELECT nombre FROM tblEstablecimiento WHERE codEstabl = '" . $codEstabl . "'";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        echo "<script> alert('NO HUBO REGISTRO | Lo sentimos, el codigo ya se encuentra registrado');location.href ='../index_.php?menu=registrarEstablecimiento';</script>";
    } else {
        $stmt5 = $db->prepare("insert into tblestablecimiento values(?,?,?,?,?,?);");

        $stmt5->bind_param('ssssss', $codEstabl, $nombre_establecimiento, $Ciudad, $Barrio, $Direccion, $Telefono);
        $stmt5->execute();

        if (!$stmt5) {
            echo "<br>Error en al insertar datos en la base de datos";
        } else {
            echo "<script> alert('Registro hecho');location.href ='../index_.php?menu=registrarEstablecimiento';</script>";
        }
    }
}
