<?php
$idRol                 = null;
$usuario_administrador = $_POST["usuario_administrador"];
$clave_administrador   = $_POST["clave_administrador"];
$rol                   = "A";

if (isset($usuario_administrador) && isset($clave_administrador)) {

    include "conexion.php";
    $sql       = "SELECT * FROM tblRol WHERE usuario = '" . $usuario_administrador . "'";
    $result    = mysql_query($sql, $db);
    $num_filas = mysql_num_rows($result);
    if ($num_filas > 0) {
        echo "<script> alert('NO HUBO REGISTRO | El nombre de usuario ya se encuentra registrado');location.href ='../index.php?menu=registrarAdministrador';</script>";
    } else {
        $idAdministrador = $_POST['idAdministrador'];
        $sql             = "SELECT * FROM tblAdministrador WHERE IdAdministrador = '" . $idAdministrador . "'";
        $result          = mysql_query($sql, $db);
        $num_filas       = mysql_num_rows($result);
        if ($num_filas > 0) {
            echo "<script> alert('NO HUBO REGISTRO | Ya existe un administrador con esa identificación');location.href ='../index.php?menu=registrarAdministrador';</script>";
        } else {
            $sql  = "insert into tblRol (usuario,clave,rol) values ('$usuario_administrador', '$clave_administrador', '$rol')";
            $stmt = mysql_query($sql, $db);

            $sql       = "SELECT * FROM tblRol WHERE usuario =  '" . $usuario_administrador . "'";
            $result    = mysql_query($sql, $db);
            $num_filas = mysql_num_rows($result);
            if ($num_filas > 0) {
                $tbl   = mysql_fetch_array($result);
                $idRol = $tbl["IdRol"];
            } else {
                echo "<script> alert('Error al insertar administrador');location.href ='../index.php?menu=registrarAdministrador';</script>";
            }

            $nombre_administrador = $_POST['nombre_administrador'];
            $Ciudad               = $_POST['ciudad'];
            $Barrio               = $_POST['barrio'];

            if (isset($idAdministrador) && isset($nombre_administrador) && isset($Ciudad) && isset($Barrio)) {

                $sql  = "INSERT INTO tblAdministrador (IdAdministrador,nombre, ciudad, barrio, fkIdRol) VALUES('$idAdministrador','$nombre_administrador','$Ciudad','$Barrio','$idRol');";
                $stmt = mysql_query($sql, $db);

                if (!$stmt) {
                    echo "<script> alert('Error al guardar administrador');location.href ='../index.php?menu=registrarAdministrador';</script>";
                } else {
                    echo "<script> alert('Registro hecho');location.href ='../index.php?menu=registrarAdministrador';</script>";
                }
            }
        }

    }

}
mysql_close($db);
