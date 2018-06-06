<?php

$nombre_establecimiento = $_POST['nombre_establecimiento'];
$codEstabl              = $_POST['codEstabl'];
$Ciudad                 = $_POST['ciudad'];
$Barrio                 = $_POST['barrio'];
$Direccion              = $_POST['direccion'];
$Telefono               = $_POST['telefono'];

if (isset($codEstabl) && isset($nombre_establecimiento) && isset($Ciudad) && isset($Barrio) && isset($Direccion) && isset($Telefono)) {

    include "conexion.php";
    $sql       = "SELECT nombre FROM tblEstablecimiento WHERE codEstabl = '" . $codEstabl . "'";
    $result    = mysql_query($sql, $db);
    $num_filas = mysql_num_rows($result);
    if ($num_filas > 0) {
        echo "<script> alert('NO HUBO REGISTRO | Lo sentimos, el codigo ya se encuentra registrado');location.href ='../index.php?menu=registrarEstablecimiento';</script>";
    } else {
        $sql  = "INSERT INTO tblEstablecimiento VALUES ('$codEstabl', '$nombre_establecimiento', '$Ciudad', '$Barrio', '$Direccion', '$Telefono');";
        $stmt = mysql_query($sql, $db);

        if (!$stmt) {
            echo "<script> alert('Error en al insertar datos en la base de datos');location.href ='../index.php?menu=registrarEstablecimiento';</script>";
        } else {
            $sql  = "INSERT INTO tblStock VALUES ('$codEstabl','100','100','100','100','100','100','100','100','100','100','100','100','100','100')";
            $stmt = mysql_query($sql, $db);
            if ($stmt) {
                echo "<script> alert('Registro hecho');location.href ='../index.php?menu=registrarEstablecimiento';</script>";
            } else {
                echo "<script> alert('Registro hecho | Falla en el stock');location.href ='../index.php?menu=registrarEstablecimiento';</script>";
            }

        }
    }
}
mysql_close($db);
