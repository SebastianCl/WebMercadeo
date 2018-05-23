<?php
//Archivo para las clases PHP necesarias en el sitio web
$idRol           = null;
$usuario_cliente = $_POST["usuario_cliente"];
$clave_cliente   = $_POST["clave_cliente"];
$rol             = "C";

if (isset($usuario_cliente) && isset($clave_cliente)) {
    $nombre = "mercadeo";
    include "conexion.php";
    $sql    = "SELECT * FROM tblRol WHERE usuario = '" . $usuario_cliente . "'";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        echo "<script> alert('NO HUBO REGISTRO | El nombre de usuario ya se encuentra registrado');location.href ='../index_.php?menu=registrarCliente';</script>";
    } else {
        if ($_COOKIE["rol"] == 'A') {
            $tendero = $_POST['CodTendero'];
            $sql     = "SELECT * FROM tblTenderos WHERE idTendero = '" . $tendero . "'";
            $result  = $db->query($sql);
            if (!$result->num_rows > 0) {
                echo "<script> alert('NO HUBO REGISTRO | El TENDERO no existe');location.href ='../index_.php?menu=registrarCliente';</script>";
            }

        } else {
            $tendero = $_COOKIE["idTendero"];
        }
        $stmt = $db->prepare("insert into tblRol values (?,?,?,?)");
        $stmt->bind_param('isss', $idRol, $usuario_cliente, $clave_cliente, $rol);
        $stmt->execute();

    }

    $sql    = "SELECT * FROM tblRol WHERE usuario =  '" . $usuario_cliente . "'";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        $tbl   = $result->fetch_assoc();
        $idRol = $tbl["IdRol"];
    }

    $idCliente      = $_POST['idCliente'];
    $nombre_cliente = $_POST['nombre_cliente'];
    $Ciudad         = $_POST['ciudad'];
    $Barrio         = $_POST['barrio'];
    $Direccion      = $_POST['direccion'];
    $Telefono       = $_POST['telefono'];
    $email          = $_POST['email'];

    if (isset($idCliente) && isset($nombre_cliente) && isset($Ciudad) && isset($Barrio) && isset($Direccion) && isset($Telefono) && isset($email)) {

        $stmt5 = $db->prepare("insert into tblcliente values(?,?,?,?,?,?,?,?,?);");

        $stmt5->bind_param('ssssssssi', $idCliente, $nombre_cliente, $Ciudad, $Barrio, $Direccion, $Telefono, $email, $tendero, $idRol);
        $stmt5->execute();

        if (!$stmt5) {
            echo "<br>Error en al insertar datos en la base de datos";
        } else {
            echo "<script> alert('Registro hecho');
            location.href ='../index_.php?menu=registrarCliente';
         </script>";
        }
    }

}
