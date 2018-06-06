<?php
try {
    $usuarioTendero  = $_POST['usuarioTendero'];
    $idTendero       = $_POST['idTendero'];
    $Establecimiento = $_POST['Establecimiento'];

    include "conexion.php";

    $sql       = "SELECT * FROM tblRol WHERE usuario = '" . $usuarioTendero . "'";
    $result    = mysql_query($sql, $db);
    $num_filas = mysql_num_rows($result);
    if ($num_filas > 0) {
        echo "<script> alert('NO HUBO REGISTRO | El nombre de usuario ya se encuentra registrado');location.href ='../index.php?menu=registrarTendero';</script>";
    } else {
        $sql       = "SELECT * FROM tblTenderos WHERE IdTendero = '" . $idTendero . "'";
        $result    = mysql_query($sql, $db);
        $num_filas = mysql_num_rows($result);
        if ($num_filas > 0) {
            echo "<script> alert('NO HUBO REGISTRO | Ya existe un tendero con esa identificación');location.href ='../index.php?menu=registrarTendero';</script>";
        } else {
            $sql       = "SELECT * FROM tblEstablecimiento WHERE CodEstabl = '" . $Establecimiento . "'";
            $result    = mysql_query($sql, $db);
            $num_filas = mysql_num_rows($result);
            if ($num_filas > 0) {
                $clave_tendero = $_POST['clave'];
                $idRol         = null;
                $rol           = "T";
                $sql           = "insert into tblRol (usuario,clave,rol) values ('$usuarioTendero', '$clave_tendero', '$rol')";
                $stmt          = mysql_query($sql, $db);

                if ($stmt) {
                    $sql    = "SELECT * FROM tblRol WHERE usuario =  '" . $usuarioTendero . "'";
                    $result = mysql_query($sql, $db);

                    $tbl   = mysql_fetch_array($result);
                    $idRol = $tbl["IdRol"];

                    $nombre_tendero = $_POST['nombre'];
                    $Cuidad         = $_POST['Cuidad'];
                    $Barrio         = $_POST['Barrio'];
                    $Direccion      = $_POST['Direccion'];

                    $sql  = "INSERT INTO tblTenderos VALUES('$idTendero', '$nombre_tendero', '$Cuidad', '$Barrio', '$Direccion', '$Establecimiento', '$idRol');";
                    $stmt = mysql_query($sql, $db);

                    if (!$stmt) {
                        echo "<script> alert('Error al insertar datos en la base de datos');location.href ='../index.php?menu=registrarTendero';</script>";
                    } else {
                        echo "<script> alert('Registro hecho'); location.href ='../index.php?menu=registrarTendero'; </script>";
                    }
                } else {
                    echo "<script> alert('Error al insertar tendero');location.href ='../index.php?menu=registrarTendero';</script>";
                }
            } else {
                echo "<script> alert('NO HUBO REGISTRO | No existe el establecimiento');location.href ='../index.php?menu=registrarTendero';</script>";
            }

        }

    }

} catch (Exception $e) {
    echo "<script> alert('Ocurrio un error , $e');location.href ='../index.php?menu=registrarTendero';</script>";

}
