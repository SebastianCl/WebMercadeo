<?php

try {

    include "conexion.php";

    $idTendero = $_COOKIE["idTendero"];
    $sql       = "SELECT fecha FROM tblVenta WHERE fkIdTendero = '$idTendero' ORDER BY fecha DESC";
    $result    = mysql_query($sql, $db);
    $rowF      = mysql_fetch_array($result);
    $fechaT    = $rowF['fecha'];
    date_default_timezone_set("America/Mexico_City");
    $fechaA = date("Y-m-d");
    //$fechaA    = str_replace("/", "-", $fechaA);
    echo ("<script>alert('$fechaA | $fechaT')</script>");
    if ($fechaT == $fechaA) {
        echo "<script> alert('Ya haz realizado el reporte de ventas diario');location.href ='../index.php?menu=registrarVentas';</script>";
    } else {
        $sql    = "INSERT INTO `tblVenta` (`codVenta`, `fkIdTendero`, `fecha`) VALUES (NULL, $idTendero, SYSDATE())";
        $result = mysql_query($sql, $db);
        if ($result) {
            $sql       = "SELECT codVenta FROM tblVenta WHERE estado = '1' ";
            $result    = mysql_query($sql, $db);
            $num_filas = mysql_num_rows($result);
            if ($num_filas > 0) {
                $row      = mysql_fetch_array($result);
                $codVenta = $row['codVenta'];

                if (isset($_POST['A1'])) {
                    $cantA1 = $_POST['cantA1'];
                    $cp     = "A1";
                    $sql    = "INSERT INTO tblDetalleVenta VALUES ('$codVenta', '$cp', '$cantA1');";
                    $stmt   = mysql_query($sql, $db);

                }
                if (isset($_POST['A2'])) {
                    $cantA2 = $_POST['cantA2'];
                    $cp     = "A2";
                    $sql    = "INSERT INTO tblDetalleVenta VALUES ('$codVenta', '$cp', '$cantA2');";
                    $stmt   = mysql_query($sql, $db);
                }
                if (isset($_POST['B1'])) {
                    $cantB1 = $_POST['cantB1'];
                    $cp     = "B1";
                    $sql    = "INSERT INTO tblDetalleVenta VALUES ('$codVenta', '$cp', '$cantB1');";
                    $stmt   = mysql_query($sql, $db);
                }
                if (isset($_POST['B2'])) {
                    $cantB2 = $_POST['cantB2'];
                    $cp     = "B2";
                    $sql    = "INSERT INTO tblDetalleVenta VALUES ('$codVenta', '$cp', '$cantB2');";
                    $stmt   = mysql_query($sql, $db);
                }
                if (isset($_POST['C1'])) {
                    $cantC1 = $_POST['cantC1'];
                    $cp     = "C1";
                    $sql    = "INSERT INTO tblDetalleVenta VALUES ('$codVenta', '$cp', '$cantC1');";
                    $stmt   = mysql_query($sql, $db);
                }
                if (isset($_POST['C2'])) {
                    $cantC2 = $_POST['cantC2'];
                    $cp     = "C2";
                    $sql    = "INSERT INTO tblDetalleVenta VALUES ('$codVenta', '$cp', '$cantC2');";
                    $stmt   = mysql_query($sql, $db);
                }
                if (isset($_POST['D1'])) {
                    $cantD1 = $_POST['cantD1'];
                    $cp     = "D1";
                    $sql    = "INSERT INTO tblDetalleVenta VALUES ('$codVenta', '$cp', '$cantD1');";
                    $stmt   = mysql_query($sql, $db);
                }
                if (isset($_POST['D2'])) {
                    $cantD2 = $_POST['cantD2'];
                    $cp     = "D2";
                    $sql    = "INSERT INTO tblDetalleVenta VALUES ('$codVenta', '$cp', '$cantD2');";
                    $stmt   = mysql_query($sql, $db);
                }
                if (isset($_POST['E1'])) {
                    $cantE1 = $_POST['cantE1'];
                    $cp     = "E1";
                    $sql    = "INSERT INTO tblDetalleVenta VALUES ('$codVenta', '$cp', '$cantE1');";
                    $stmt   = mysql_query($sql, $db);
                }
                if (isset($_POST['E2'])) {
                    $cantE2 = $_POST['cantE2'];
                    $cp     = "E2";
                    $sql    = "INSERT INTO tblDetalleVenta VALUES ('$codVenta', '$cp', '$cantE2');";
                    $stmt   = mysql_query($sql, $db);
                }
                if (isset($_POST['F1'])) {
                    $cantF1 = $_POST['cantF1'];
                    $cp     = "F1";
                    $sql    = "INSERT INTO tblDetalleVenta VALUES ('$codVenta', '$cp', '$cantF1');";
                    $stmt   = mysql_query($sql, $db);
                }
                if (isset($_POST['F2'])) {
                    $cantF2 = $_POST['cantF2'];
                    $cp     = "F2";
                    $sql    = "INSERT INTO tblDetalleVenta VALUES ('$codVenta', '$cp', '$cantF2');";
                    $stmt   = mysql_query($sql, $db);
                }
                if (isset($_POST['G1'])) {
                    $cantG1 = $_POST['cantG1'];
                    $cp     = "G1";
                    $sql    = "INSERT INTO tblDetalleVenta VALUES ('$codVenta', '$cp', '$cantG1');";
                    $stmt   = mysql_query($sql, $db);
                }
                if (isset($_POST['G2'])) {
                    $cantG2 = $_POST['cantG2'];
                    $cp     = "G2";
                    $sql    = "INSERT INTO tblDetalleVenta VALUES ('$codVenta', '$cp', '$cantG2');";
                    $stmt   = mysql_query($sql, $db);
                }
                if (!$stmt) {
                    echo "<script> alert('Error al guardar los datos'); location.href ='../index.php?menu=registrarVentas';</script>";
                } else {
                    echo "<script> alert('Ventas Registradas'); location.href ='../index.php?menu=registrarVentas';</script>";
                }
                $sql    = "UPDATE `tblVenta` SET `estado` = b'0' WHERE `tblVenta`.`estado` = '1';";
                $result = mysql_query($sql, $db);
            } else {
                echo "<script> alert('Error, no se pudo registrar las ventas'); location.href ='../index.php?menu=registrarVentas';</script>";
            }

        } else {
            echo "<script> alert('Error al registrar la venta');location.href ='../index.php?menu=registrarVentas';</script>";
        }
    }
    mysql_close($db);
} catch (Exception $e) {

    echo "<script> alert('Ocurrio un error , $e');location.href ='../index.php?menu=registrarVentas';</script>";

}
