<?php
$nombre = "mercadeo";
include "clases/conexion.php";

$fecha     = date('Y-m-j');
$fecha_3   = strtotime('-3 day', strtotime($fecha));
$fecha_3   = date('Y-m-j', $fecha_3);
$idTendero = $_COOKIE["idTendero"];
echo "<script>alert('$fecha_3');</script>";
$sql    = "SELECT * FROM tblVenta WHERE fecha >= '$fecha_3' AND fkIdTendero = '$idTendero'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        echo $row["codVenta"] . "|";
        echo $row["fecha"];
        echo "<br/>";
    }
}
