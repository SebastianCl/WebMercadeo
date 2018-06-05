<?php
$IdUsuario = $_COOKIE["IdRol"];

$sql       = "select * from tblVisita where fkIdUsuario = '" . $IdUsuario . "'";
$result    = mysql_query($sql, $db);
$num_filas = mysql_num_rows($result);
echo "<script> alert('1');</script>";
if (!$num_filas > 0) {
    $ciudad      = $_COOKIE["ultima_ciudad"];
    $contVisitas = 1;
    date_default_timezone_set("America/Mexico_City");
    $fechaConexion = date("Y-m-d | H:i:s");
    setcookie("ultima_fecha", $fechaConexion, time() + 604800);
    echo "<script> alert('2');</script>";
    $sql    = "insert into tblVisita values ('$IdUsuario', NOW(),'$ciudad','$contVisitas')";
    $result = mysql_query($sql, $db);
    if (!$result) {
        echo "<script> alert('Error al registrar visita');</script>";
    } else {
        echo "<script> alert('ELSE');</script>";
    }

} else {
    $row           = mysql_fetch_array($result);
    $contVisitas   = $row["contVisitas"] + 1;
    $ciudad        = $_COOKIE["ultima_ciudad"];
    $fechaConexion = $row["fecha"];
    setcookie("ultima_fecha", $fechaConexion, time() + 604800);
}
