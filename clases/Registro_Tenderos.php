<?php
try {
    $usuarioTendero  = $_POST['usuarioTendero'];
    $idTendero       = $_POST['idTendero'];
    $Establecimiento = $_POST['Establecimiento'];

    $nombre = "mercadeo";
    include "conexion.php";

    $sql    = "SELECT * FROM tblRol WHERE usuario = '" . $usuarioTendero . "'";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        echo "<script> alert('NO HUBO REGISTRO | El nombre de usuario ya se encuentra registrado');location.href ='../index_.php?menu=registrarTendero';</script>";
    } else {
        $sql    = "SELECT * FROM tbltenderos WHERE IdTendero = '" . $idTendero . "'";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            echo "<script> alert('NO HUBO REGISTRO | Ya existe un tendero con esa identificación');location.href ='../index_.php?menu=registrarTendero';</script>";
        } else {
            $sql    = "SELECT * FROM tblEstablecimiento WHERE CodEstabl = '" . $Establecimiento . "'";
            $result = $db->query($sql);
            if ($result->num_rows > 0) {
                $clave = $_POST['clave'];
                $idRol = null;
                $rol   = "T";
                $stmt  = $db->prepare("insert into tblRol values (?,?,?,?)");
                $stmt->bind_param('isss', $idRol, $usuarioTendero, $clave, $rol);
                $stmt->execute();
                $sql    = "SELECT * FROM tblRol WHERE usuario =  '" . $usuarioTendero . "'";
                $result = $db->query($sql);
                if ($result->num_rows > 0) {
                    $tbl   = $result->fetch_assoc();
                    $idRol = $tbl["IdRol"];
                }
                $nombre_tendero = $_POST['nombre'];
                $Cuidad         = $_POST['Cuidad'];
                $Barrio         = $_POST['Barrio'];
                $Direccion      = $_POST['Direccion'];
                $stmt           = $db->prepare("insert into tbltenderos values(?,?,?,?,?,?,?);");

                $stmt->bind_param('sssssis', $idTendero, $nombre_tendero, $Cuidad, $Barrio, $Direccion, $idRol, $Establecimiento);
                $stmt->execute();

                if (!$stmt) {
                    echo "<br>Error en al insertar datos en la base de datos";
                } else {
                    echo "<script> alert('Registro hecho'); location.href ='../index_.php?menu=registrarTendero'; </script>";
                }
            } else {
                echo "<script> alert('NO HUBO REGISTRO | No existe el establecimiento');location.href ='../index_.php?menu=registrarTendero';</script>";
            }

        }

    }

} catch (Exception $e) {
    echo "<script> alert('Ocurrio un error , $e');location.href ='../index_.php?menu=registrarTendero';</script>";

}
