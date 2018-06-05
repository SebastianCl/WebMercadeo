<?php
$idRol           = null;
$usuario_cliente = $_POST["usuario_cliente"];
$clave_cliente   = $_POST["clave_cliente"];
$rol             = "C";

if (isset($usuario_cliente) && isset($clave_cliente)) {

    include "conexion.php";
    if ($_COOKIE["rol"] == 'A') {
        $tendero   = $_POST['CodTendero'];
        $sql       = "SELECT * FROM tblTenderos WHERE IdTendero = '" . $tendero . "'";
        $result    = mysql_query($sql, $db);
        $num_filas = mysql_num_rows($result);
        if (!$num_filas > 0) {
            echo "<script> alert('NO HUBO REGISTRO | El TENDERO no existe');location.href ='../index.php?menu=registrarCliente';</script>";
            mysql_close($db);
        }
    } else {
        $tendero = $_COOKIE["idTendero"];
    }

    $sql       = "SELECT * FROM tblRol WHERE usuario = '" . $usuario_cliente . "'";
    $result    = mysql_query($sql, $db);
    $num_filas = mysql_num_rows($result);
    if ($num_filas > 0) {
        echo "<script> alert('NO HUBO REGISTRO | El nombre de usuario ya se encuentra registrado');location.href ='../index.php?menu=registrarCliente';</script>";
    } else {

        $idCliente = $_POST['idCliente'];
        $sql       = "SELECT * FROM tblCliente WHERE IdCliente = '" . $idCliente . "'";
        $result    = mysql_query($sql, $db);
        $num_filas = mysql_num_rows($result);
        if ($num_filas > 0) {
            echo "<script> alert('NO HUBO REGISTRO | Ya existe un cliente con esa identificación');location.href ='../index.php?menu=registrarCliente';</script>";
        } else {

            $sql  = "insert into tblRol (usuario,clave,rol) values ('$usuario_cliente', '$clave_cliente', '$rol')";
            $stmt = mysql_query($sql, $db);

            $sql       = "SELECT * FROM tblRol WHERE usuario =  '" . $usuario_cliente . "'";
            $result    = mysql_query($sql, $db);
            $num_filas = mysql_num_rows($result);
            if ($num_filas > 0) {
                $tbl   = mysql_fetch_array($result);
                $idRol = $tbl["IdRol"];
            } else {
                echo "<script> alert('Error al insertar cliente');location.href ='../index.php?menu=registrarCliente';</script>";
            }

            $nombre_cliente = $_POST['nombre_cliente'];
            $Ciudad         = $_POST['ciudad'];
            $Barrio         = $_POST['barrio'];
            $Direccion      = $_POST['direccion'];
            $Telefono       = $_POST['telefono'];
            $email          = $_POST['email'];

            if (isset($idCliente) && isset($nombre_cliente) && isset($Ciudad) && isset($Barrio) && isset($Direccion) && isset($Telefono) && isset($email)) {

                $sql  = "INSERT INTO tblCliente (IdCliente,nombre,ciudad,barrio, direccion,telefono,email,fkIdTendero,fkIdRol) VALUES ('$idCliente','$nombre_cliente', '$Ciudad', '$Barrio', '$Direccion', '$Telefono', '$email', '$tendero', '$idRol');";
                $stmt = mysql_query($sql, $db);

                if (!$stmt) {
                    echo "<script> alert('Error al guardar cliente');location.href ='../index.php?menu=registrarCliente';</script>";
                } else {
                    $para   = "sebastiancardona176745@correo.itm.edu.co";
                    $asunto = "Bienvenido - " . $nombre_cliente;
                    $header = "From: " . $email;
                    $cuerpo = "BIENVENIDO A NUESTRO CANAL
                                Nombre: $nombre_cliente \n
                                Ciudad: $Ciudad \n
                                Barrio: $Barrio \n
                                Direccion: $Direccion \n
                                Telefono: $Telefono \n
                                usuario: $usuario_cliente \n
                                clave: $clave_cliente";

                    if (mail($para, $asunto, $cuerpo, $header)) {
                        echo "<script> alert('Registro hecho'); location.href ='../index.php?menu=registrarCliente';</script>";
                    } else {
                        echo "<script> alert('Registro hecho | Email no enviado'); location.href ='../index.php?menu=registrarCliente';</script>";
                    }

                }
            }

        }

    }

}
mysql_close($db);
