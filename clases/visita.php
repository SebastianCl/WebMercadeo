<?php
$IdUsuario = $_COOKIE["id_usuario"];

$sql       = "select * from tblVisita where fkIdUsuario = '" . $IdUsuario . "'";
$result    = mysql_query($sql, $db);
$num_filas = mysql_num_rows($result);

if ($num_filas > 0) {
    $row = mysql_fetch_array($result);
    setcookie("ultima_fecha", $row["fecha"], time() + 604800);

    $contVisitas = $row["contVisitas"] + 1;
    $sql         = "UPDATE tblVisita SET contVisitas = '$contVisitas', fecha = SYSDATE() WHERE fkIdUsuario = '$IdUsuario'";
    $stmt        = mysql_query($sql, $db);
} else {

    $ciudad      = $_POST['ciudad_local'];
    $contVisitas = 1;
    date_default_timezone_set("America/Mexico_City");
    $fechaConexion = date("Y-m-d | H:i:s");
    setcookie("ultima_fecha", $fechaConexion, time() + 604800);

    $sql    = "INSERT INTO `tblVisita` (`fkIdUsuario`, `fecha`, `ciudad`, `contVisitas`) VALUES ('$IdUsuario', SYSDATE(), '$ciudad', '$contVisitas');";
    $result = mysql_query($sql, $db);
}
