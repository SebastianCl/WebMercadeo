<?php
$respuesta1  = $_POST["txtrespuesta1"];
$respuesta2  = $_POST["respuesta2"];
$respuesta3  = $_POST["respuesta3"];
$respuesta4  = $_POST["respuesta4"];
$respuesta5  = $_POST["respuesta5"];
$respuesta51 = $_POST["respuestasabor"];
$respuesta52 = $_POST["respuestacalidad"];
$respuesta53 = $_POST["respuestagramos"];
$respuesta54 = $_POST["respuestaempaque"];
$respuesta6  = $_POST["respuesta6"];
$respuesta7  = $_POST["respuesta7"];
$respuesta8  = $_POST["respuesta8"];
$idCliente   = $_COOKIE["idCliente"];
$email       = $_COOKIE["emailCliente"];

if (isset($respuesta1) && isset($respuesta2) && isset($respuesta3) && isset($respuesta4) && isset($respuesta5) && isset($respuesta51) && isset($respuesta52) && isset($respuesta53) && isset($respuesta54) && isset($respuesta6) && isset($respuesta7) && isset($respuesta8)) {

    include "conexion.php";
    $sql  = "insert into tblEncuesta values ('$idCliente','$respuesta1','$respuesta2','$respuesta3','$respuesta4','$respuesta5','$respuesta51','$respuesta52','$respuesta53','$respuesta54','$respuesta6','$respuesta7','$respuesta8');";
    $stmt = mysql_query($sql, $db);

    if (!$stmt) {
        echo "<script> alert('Error al guardar la encuesta');location.href ='../index.php';</script>";
    } else {
        $para   = "sebastiancardona176745@correo.itm.edu.co";
        $asunto = "Gracias";
        $header = "From: " . $email;
        $cuerpo = "Gracias por realizar la encuesta.
                    Disfruta de un bono del 20% de descuento en la próxima compra de productos cárnicos embutidos de la compañía en tu proxima compra.";

        if (mail($para, $asunto, $cuerpo, $header)) {
            echo "<script> alert('Registro hecho');location.href ='../index.php';</script>";
        } else {
            echo "<script> alert('Registro hecho | Email no enviado'); location.href ='../index.php';</script>";
        }
        setcookie("emailCliente", "", time() - 604800);

    }
    mysql_close($db);
}
