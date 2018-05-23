<?php
//Archivo para las clases PHP necesarias en el sitio web
$idRol           = null;
$usuario_representante = $_POST["usuario_representante"];
$clave_representante   = $_POST["clave_representante"];
$rol             = "R";

if (isset($usuario_representante) && isset($clave_representante)) 
{
    $nombre = "mercadeo";
    include "conexion.php";
    $sql    = "SELECT * FROM tblRol WHERE usuario = '" . $usuario_representante . "'";
    $result = $db->query($sql);
    if ($result->num_rows > 0) 
    {
        echo "<script> alert('NO HUBO REGISTRO | El nombre de usuario ya se encuentra registrado');location.href ='../index_.php?menu=registrarRepresentante';</script>";
    } else {

        $stmt = $db->prepare("insert into tblRol values (?,?,?,?)");
        $stmt->bind_param('isss', $idRol, $usuario_representante, $clave_representante, $rol);
        $stmt->execute();
    }

    $sql    = "SELECT * FROM tblRol WHERE usuario =  '" . $usuario_representante . "'";
    $result = $db->query($sql);
    if ($result->num_rows > 0) 
    {
        $tbl   = $result->fetch_assoc();
        $idRol = $tbl["IdRol"];
    }

    $idRepresentante      = $_POST['idrepresentante'];
    $nombre_representante = $_POST['nombre_representante'];
    $Ciudad               = $_POST['ciudad'];
    $Barrio               = $_POST['barrio'];
    

    if (isset($idRepresentante) && isset($nombre_representante) && isset($Ciudad) && isset($Barrio)) 
    {

        $stmt5 = $db->prepare("insert into tblrepresentante values(?,?,?,?,?);");

        $stmt5->bind_param('ssssi', $idRepresentante, $nombre_representante, $Ciudad, $Barrio, $idRol);
        $stmt5->execute();

        if (!$stmt5) {
            echo "<br>Error en al insertar datos en la base de datos";
        } else {
            echo "<script> alert('Registro hecho');
            location.href ='../index_.php?menu=registrarGerente';
         </script>";
        }
    }

}