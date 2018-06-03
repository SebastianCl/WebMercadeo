<?php
$idRol           = null;
$usuario_gerente = $_POST["usuario_gerente"];
$clave_gerente   = $_POST["clave_gerente"];
$rol             = "G";

if (isset($usuario_gerente) && isset($clave_gerente)) {
    $nombre = "mercadeo";
    include "conexion.php";
    $sql    = "SELECT * FROM tblRol WHERE usuario = '" . $usuario_gerente . "'";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        echo "<script> alert('NO HUBO REGISTRO | El nombre de usuario ya se encuentra registrado');location.href ='../index_.php?menu=registrarGerente';</script>";
    } else {

        $idGerente = $_POST['idGerente'];
        $sql       = "SELECT * FROM tblGerente WHERE IdGerente = '" . $idGerente . "'";
        $result    = $db->query($sql);
        if ($result->num_rows > 0) {
            echo "<script> alert('NO HUBO REGISTRO | Ya existe un gerente con esa identificación');location.href ='../index_.php?menu=registrarGerente';</script>";
        } else {

            $stmt = $db->prepare("insert into tblRol values (?,?,?,?)");
            $stmt->bind_param('isss', $idRol, $usuario_gerente, $clave_gerente, $rol);
            $stmt->execute();
            $sql    = "SELECT * FROM tblRol WHERE usuario =  '" . $usuario_gerente . "'";
            $result = $db->query($sql);
            if ($result->num_rows > 0) {
                $tbl   = $result->fetch_assoc();
                $idRol = $tbl["IdRol"];
            }

            $nombre_gerente = $_POST['nombre_gerente'];
            $Ciudad         = $_POST['ciudad'];
            $Barrio         = $_POST['barrio'];

            if (isset($idGerente) && isset($nombre_gerente) && isset($Ciudad) && isset($Barrio)) {

                $stmt5 = $db->prepare("insert into tblGerente values(?,?,?,?,?);");

                $stmt5->bind_param('ssssi', $idGerente, $nombre_gerente, $Ciudad, $Barrio, $idRol);
                $stmt5->execute();

                if (!$stmt5) {
                    echo "<br>Error en al insertar datos en la base de datos";
                } else {
                    echo "<script> alert('Registro hecho');location.href ='../index_.php?menu=registrarGerente';</script>";
                }
            }
        }

    }

}
