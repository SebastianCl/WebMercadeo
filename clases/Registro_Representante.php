<?php
$idRol                 = null;
$usuario_representante = $_POST["usuario_representante"];
$clave_representante   = $_POST["clave_representante"];
$rol                   = "R";

if (isset($usuario_representante) && isset($clave_representante)) {

    include "conexion.php";
    $sql       = "SELECT * FROM tblRol WHERE usuario = '" . $usuario_representante . "'";
    $result    = mysql_query($sql, $db);
    $num_filas = mysql_num_rows($result);
    if ($num_filas > 0) {
        echo "<script> alert('NO HUBO REGISTRO | El nombre de usuario ya se encuentra registrado');location.href ='../index.php?menu=registrarRepresentante';</script>";
    } else {

        $idRepresentante = $_POST['idrepresentante'];
        $sql             = "SELECT * FROM tblrepresentante WHERE IdRepresentante = '" . $idRepresentante . "'";
        $result          = mysql_query($sql, $db);
        $num_filas       = mysql_num_rows($result);
        if ($num_filas > 0) {
            echo "<script> alert('NO HUBO REGISTRO | Ya existe un representante con esa identificación');location.href ='../index.php?menu=registrarRepresentante';</script>";
        } else {
            $sql  = "insert into tblRol (usuario,clave,rol) values ('$usuario_representante', '$clave_representante', '$rol')";
            $stmt = mysql_query($sql, $db);

            $sql       = "SELECT * FROM tblRol WHERE usuario =  '" . $usuario_gerente . "'";
            $result    = mysql_query($sql, $db);
            $num_filas = mysql_num_rows($result);
            if ($num_filas > 0) {
                $tbl   = mysql_fetch_array($result);
                $idRol = $tbl["IdRol"];
            } else {
                echo "<script> alert('Error al insertar representante');location.href ='../index.php?menu=registrarRepresentante';</script>";
            }
            $nombre_representante = $_POST['nombre_representante'];
            $Ciudad               = $_POST['ciudad'];
            $Barrio               = $_POST['barrio'];

            if (isset($idRepresentante) && isset($nombre_representante) && isset($Ciudad) && isset($Barrio)) {

                $sql  = "INSERT INTO tblRepresentante VALUES('$idRepresentante', '$nombre_representante', '$Ciudad', '$Barrio', '$idRol');";
                $stmt = mysql_query($sql, $db);

                if (!$stmt) {
                    echo "<script> alert('Error al insertar datos en la base de datos');location.href ='../index.php?menu=registrarRepresentante';</script>";
                } else {
                    echo "<script> alert('Registro hecho');location.href ='../index.php?menu=registrarRepresentante';</script>";
                }
            }
        }

    }

}
