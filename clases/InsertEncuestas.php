<?php

try {
    $idCliente      = $_POST['idCliente'];
    $nombre_cliente = $_POST['nombre_cliente'];
    $respuesta1     = $_POST['cborespuesta'];
    $respuesta2     = $_POST['respuesta2'];
    $respuesta3     = $_POST['respuesta3'];
    $respuesta4     = $_POST['respuesta4'];
    $respuesta5     = $_POST['respuesta5'];
    $respuesta6     = $_POST['respuesta6'];
    $respuesta7     = $_POST['respuesta7'];
    $respuesta8     = $_POST['respuesta8'];

    if (isset($idCliente) && isset($nombre_cliente) && isset($respuesta1) && isset($respuesta2) && isset($respuesta3) && isset($respuesta4) && isset($respuesta5) && isset($respuesta6) && isset($respuesta7) && isset($respuesta8)) {

        $stmt5 = $db->prepare("insert into tblEncuesta values(?,?,?,?,?,?,?,?,?,?);");

        $stmt5->bind_param('isssssssss', $idCliente, $nombre_cliente, $respuesta1, $respuesta2, $respuesta3, $respuesta4, $respuesta5, $respuesta6, $respuesta7, $respuesta8);
        $stmt5->execute();

        if (!$stmt5) {
            echo "<br>Error en al guardar la encuesta";
        } else {
            echo "<script> alert('Registro hecho');
            location.href ='../index_.php';
         </script>";
        }
    }

} catch (Exception $e) {

    echo "<script> alert('Ocurrio un error inesperado');
            location.href ='../index_.php';
         </script>";

}
