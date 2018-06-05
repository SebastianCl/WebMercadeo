<?php
$idRol                 = null;
$usuario_administrador = $_POST["usuario_administrador"];
$clave_administrador   = $_POST["clave_administrador"];
$rol                   = "A";

if (isset($usuario_administrador) && isset($clave_administrador)) {
    $nombre = "mercadeo";
    include "conexion.php";
    $sql    = "SELECT * FROM tblRol WHERE usuario = '" . $usuario_administrador . "'";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        echo "<script> alert('NO HUBO REGISTRO | El nombre de usuario ya se encuentra registrado');location.href ='../index_.php?menu=registrarAdministrador';</script>";
    } else {
        $idAdministrador = $_POST['idAdministrador'];
        $sql             = "SELECT * FROM tbladministrador WHERE IdAdministrador = '" . $idAdministrador . "'";
        $result          = $db->query($sql);
        if ($result->num_rows > 0) {
            echo "<script> alert('NO HUBO REGISTRO | Ya existe un administrador con esa identificación');location.href ='../index_.php?menu=registrarAdministrador';</script>";
        } else {
            $stmt = $db->prepare("insert into tblRol values (?,?,?,?)");
            $stmt->bind_param('isss', $idRol, $usuario_administrador, $clave_administrador, $rol);
            $stmt->execute();
            $sql    = "SELECT * FROM tblRol WHERE usuario =  '" . $usuario_administrador . "'";
            $result = $db->query($sql);
            if ($result->num_rows > 0) {
                $tbl   = $result->fetch_assoc();
                $idRol = $tbl["IdRol"];
            }

            $nombre_administrador = $_POST['nombre_administrador'];
            $Ciudad               = $_POST['ciudad'];
            $Barrio               = $_POST['barrio'];

            if (isset($idAdministrador) && isset($nombre_administrador) && isset($Ciudad) && isset($Barrio)) {

                $stmt5 = $db->prepare("insert into tbladministrador values(?,?,?,?,?);");

                $stmt5->bind_param('ssssi', $idAdministrador, $nombre_administrador, $Ciudad, $Barrio, $idRol);
                $stmt5->execute();

                if (!$stmt5) {
                    echo "<br>Error en al insertar datos en la base de datos";
                } else {
                    echo "<script> alert('Registro hecho');location.href ='../index_.php?menu=registrarAdministrador';</script>";
                }
            }
        }

    }

}
