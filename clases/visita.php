<?php
$IdUsuario = $tbl["IdRol"];

$sql       = "select * from tblVisita where fkIdUsuario = '" . $IdUsuario . "'";
$result    = mysql_query($sql, $db);
$num_filas = mysql_num_rows($result);

if ($num_filas > 0) {
    $row = mysql_fetch_array($result);
    setcookie("ultima_fecha", $row["fecha"], time() + 604800);
    setcookie("ultima_ciudad", $row["ciudad"], time() + 604800);
    $contVisitas = $row["contVisitas"] + 1;
    $ciudad      = $_POST['ciudad_local'];
    $sql         = "UPDATE tblVisita SET contVisitas = '$contVisitas', fecha = SYSDATE(), ciudad = '$ciudad' WHERE fkIdUsuario = '$IdUsuario'";
    $stmt        = mysql_query($sql, $db);
} else {
    date_default_timezone_set("America/Mexico_City");
    $fechaConexion = date("Y-m-d | H:i:s");
    setcookie("ultima_fecha", $fechaConexion, time() + 604800);
    $ciudad      = $_POST['ciudad_local'];
    setcookie("ultima_ciudad", $ciudad, time() + 604800);
    $contVisitas = 1;

    $sql    = "INSERT INTO `tblVisita` (`fkIdUsuario`, `fecha`, `ciudad`, `contVisitas`) VALUES ('$IdUsuario', SYSDATE(), '$ciudad', '$contVisitas');";
    $result = mysql_query($sql, $db);
}
