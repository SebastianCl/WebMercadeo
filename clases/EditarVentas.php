<?php

include "conexion.php";
$codVenta = $_COOKIE["codV"];

if (isset($_POST['A1'])) {
    $cant = $_POST['cantA1'];
    $cp   = "A1";
    $sql  = "UPDATE tblDetalleVenta SET cantidad = '$cant' WHERE fkCodVenta = '$codVenta' AND fkCodigoPP = '$cp'";
    $stmt = mysql_query($sql, $db);

}
if (isset($_POST['A2'])) {
    $cant = $_POST['cantA2'];
    $cp   = "A2";
    $sql  = "UPDATE tblDetalleVenta SET cantidad = '$cant' WHERE fkCodVenta = '$codVenta' AND fkCodigoPP = '$cp'";
    $stmt = mysql_query($sql, $db);
}

if (isset($_POST['B1'])) {
    $cant = $_POST['cantB1'];
    $cp   = "B1";
    $sql  = "UPDATE tblDetalleVenta SET cantidad = '$cant' WHERE fkCodVenta = '$codVenta' AND fkCodigoPP = '$cp'";
    $stmt = mysql_query($sql, $db);
}
if (isset($_POST['B2'])) {
    $cant = $_POST['cantB2'];
    $cp   = "B2";
    $sql  = "UPDATE tblDetalleVenta SET cantidad = '$cant' WHERE fkCodVenta = '$codVenta' AND fkCodigoPP = '$cp'";
    $stmt = mysql_query($sql, $db);
}
if (isset($_POST['C1'])) {
    $cant = $_POST['cantC1'];
    $cp   = "C1";
    $sql  = "UPDATE tblDetalleVenta SET cantidad = '$cant' WHERE fkCodVenta = '$codVenta' AND fkCodigoPP = '$cp'";
    $stmt = mysql_query($sql, $db);
}
if (isset($_POST['C2'])) {
    $cant = $_POST['cantC2'];
    $cp   = "C2";
    $sql  = "UPDATE tblDetalleVenta SET cantidad = '$cant' WHERE fkCodVenta = '$codVenta' AND fkCodigoPP = '$cp'";
    $stmt = mysql_query($sql, $db);
}
if (isset($_POST['D1'])) {
    $cant = $_POST['cantD1'];
    $cp   = "D1";
    $sql  = "UPDATE tblDetalleVenta SET cantidad = '$cant' WHERE fkCodVenta = '$codVenta' AND fkCodigoPP = '$cp'";
    $stmt = mysql_query($sql, $db);
}
if (isset($_POST['D2'])) {
    $cant = $_POST['cantD2'];
    $cp   = "D2";
    $sql  = "UPDATE tblDetalleVenta SET cantidad = '$cant' WHERE fkCodVenta = '$codVenta' AND fkCodigoPP = '$cp'";
    $stmt = mysql_query($sql, $db);
}
if (isset($_POST['E1'])) {
    $cant = $_POST['cantE1'];
    $cp   = "E1";
    $sql  = "UPDATE tblDetalleVenta SET cantidad = '$cant' WHERE fkCodVenta = '$codVenta' AND fkCodigoPP = '$cp'";
    $stmt = mysql_query($sql, $db);
}
if (isset($_POST['E2'])) {
    $cant = $_POST['cantE2'];
    $cp   = "E2";
    $sql  = "UPDATE tblDetalleVenta SET cantidad = '$cant' WHERE fkCodVenta = '$codVenta' AND fkCodigoPP = '$cp'";
    $stmt = mysql_query($sql, $db);
}
if (isset($_POST['F1'])) {
    $cant = $_POST['cantF1'];
    $cp   = "F1";
    $sql  = "UPDATE tblDetalleVenta SET cantidad = '$cant' WHERE fkCodVenta = '$codVenta' AND fkCodigoPP = '$cp'";
    $stmt = mysql_query($sql, $db);
}
if (isset($_POST['F2'])) {
    $cant = $_POST['cantF2'];
    $cp   = "F2";
    $sql  = "UPDATE tblDetalleVenta SET cantidad = '$cant' WHERE fkCodVenta = '$codVenta' AND fkCodigoPP = '$cp'";
    $stmt = mysql_query($sql, $db);
}
if (isset($_POST['G1'])) {
    $cant = $_POST['cantG1'];
    $cp   = "G1";
    $sql  = "UPDATE tblDetalleVenta SET cantidad = '$cant' WHERE fkCodVenta = '$codVenta' AND fkCodigoPP = '$cp'";
    $stmt = mysql_query($sql, $db);
}
if (isset($_POST['G2'])) {
    $cant = $_POST['cantG2'];
    $cp   = "G2";
    $sql  = "UPDATE tblDetalleVenta SET cantidad = '$cant' WHERE fkCodVenta = '$codVenta' AND fkCodigoPP = '$cp'";
    $stmt = mysql_query($sql, $db);
}
if (!$stmt) {
    echo "<script> alert('Error al guardar los datos'); location.href ='../index.php?menu=fechaVentas';</script>";
} else {
    echo "<script> alert('Ventas actualizadas'); location.href ='../index.php?menu=fechaVentas';</script>";
}
setcookie("codV", '', time() - 604800);
