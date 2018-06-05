<?php
$idRol           = null;
$usuario_gerente = $_POST["usuario_gerente"];
$clave_gerente   = $_POST["clave_gerente"];
$rol             = "G";

if (isset($usuario_gerente) && isset($clave_gerente)) {

    include "conexion.php";
    $sql       = "SELECT * FROM tblRol WHERE usuario = '" . $usuario_gerente . "'";
    $result    = mysql_query($sql, $db);
    $num_filas = mysql_num_rows($result);
    if ($num_filas > 0) {
        echo "<script> alert('NO HUBO REGISTRO | El nombre de usuario ya se encuentra registrado');location.href ='../index.php?menu=registrarGerente';</script>";
    } else {

        $idGerente = $_POST['idGerente'];
        $sql       = "SELECT * FROM tblGerente WHERE IdGerente = '" . $idGerente . "'";
        $result    = mysql_query($sql, $db);
        $num_filas = mysql_num_rows($result);
        if ($num_filas > 0) {
            echo "<script> alert('NO HUBO REGISTRO | Ya existe un gerente con esa identificación');location.href ='../index.php?menu=registrarGerente';</script>";
        } else {

            $sql  = "insert into tblRol (usuario,clave,rol) values ('$usuario_gerente', '$clave_gerente', '$rol')";
            $stmt = mysql_query($sql, $db);

            $sql       = "SELECT * FROM tblRol WHERE usuario =  '" . $usuario_gerente . "'";
            $result    = mysql_query($sql, $db);
            $num_filas = mysql_num_rows($result);
            if ($num_filas > 0) {
                $tbl   = mysql_fetch_array($result);
                $idRol = $tbl["IdRol"];
            } else {
                echo "<script> alert('Error al insertar gerente');location.href ='../index.php?menu=registrarGerente';</script>";
            }

            $nombre_gerente = $_POST['nombre_gerente'];
            $Ciudad         = $_POST['ciudad'];
            $Barrio         = $_POST['barrio'];

            if (isset($idGerente) && isset($nombre_gerente) && isset($Ciudad) && isset($Barrio)) {

                $sql  = "INSERT INTO tblGerente VALUES('$idGerente', '$nombre_gerente', '$Ciudad', '$Barrio', '$idRol');";
                $stmt = mysql_query($sql, $db);

                if (!$stmt) {
                    echo "<br>Error en al insertar datos en la base de datos";
                } else {
                    echo "<script> alert('Registro hecho');location.href ='../index.php?menu=registrarGerente';</script>";
                }
            }
        }

    }

}
mysql_close($db);
