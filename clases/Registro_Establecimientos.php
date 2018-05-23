<?php
//Archivo para las clases PHP necesarias en el sitio web

$nombre_establecimiento = $_POST['nombre_establecimiento'];
$Nit                    = $_POST['nit'];
$Ciudad                 = $_POST['ciudad'];
$Barrio                 = $_POST['barrio'];
$Direccion              = $_POST['direccion'];
$Telefono               = $_POST['telefono'];

if (isset($Nit) && isset($nombre_establecimiento) && isset($Ciudad) && isset($Barrio) && isset($Direccion) && isset($Telefono)) {
//Establecemos conexion con el servidor

    $nombre = "mercadeo";
    include "conexion.php";
    $sql    = "SELECT nit FROM tblEstablecimiento WHERE nit = '" . $Nit . "'";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        echo "<script> alert('NO HUBO REGISTRO | El NIT ya se encuentra registrado');location.href ='../index_.php?menu=registrarEstablecimiento';</script>";
    } else {
        $stmt5 = $db->prepare("insert into tblestablecimiento values(?,?,?,?,?,?);");

        $stmt5->bind_param('ssssss', $nombre_establecimiento, $Nit, $Ciudad, $Barrio, $Direccion, $Telefono);
        $stmt5->execute();

        if (!$stmt5) {
            echo "<br>Error en al insertar datos en la base de datos";
        } else {
            echo "<script> alert('Registro hecho');location.href ='../index_.php?menu=registrarEstablecimiento';</script>";
        }
    }
}
