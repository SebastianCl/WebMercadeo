<?php

try {
    $nombre = "mercadeo";
    include "conexion.php";

    $idTendero = $_COOKIE["idTendero"];
    $sql       = "SELECT fecha FROM tblventa WHERE fkIdTendero = '$idTendero' ORDER BY fecha DESC";
    $result    = $db->query($sql);
    $rowF      = $result->fetch_assoc();
    $fechaT    = $rowF['fecha'];
    date_default_timezone_set("America/Mexico_City");
    $fechaA = date("Y-m-d");
    //$fechaA    = str_replace("/", "-", $fechaA);
    echo ("<script>alert('$fechaA | $fechaT')</script>");
    if ($fechaT == $fechaA) {
        echo "<script> alert('Ya haz realizado el reporte de ventas diario');location.href ='../index_.php?menu=registrarVentas';</script>";
    } else {
        $sql    = "INSERT INTO `tblVenta` (`codVenta`, `fkIdTendero`, `fecha`) VALUES (NULL, $idTendero, SYSDATE())";
        $result = $db->query($sql);
        if ($result) {
            $sql    = "SELECT codVenta FROM tblVenta WHERE estado = '1' ";
            $result = $db->query($sql);
            if ($result->num_rows > 0) {
                $row      = $result->fetch_assoc();
                $codVenta = $row['codVenta'];

                if (isset($_POST['A1'])) {
                    $cantA1 = $_POST['cantA1'];
                    $stmt   = $db->prepare("insert into tblDetalleVenta values(?,?,?);");
                    $cp     = "A1";
                    $stmt->bind_param('isi', $codVenta, $cp, $cantA1);
                    $stmt->execute();
                }
                if (isset($_POST['A2'])) {
                    $cantA2 = $_POST['cantA2'];
                    $stmt   = $db->prepare("insert into tblDetalleVenta values(?,?,?);");
                    $cp     = "A2";
                    $stmt->bind_param('isi', $codVenta, $cp, $cantA2);
                    $stmt->execute();
                }
                if (isset($_POST['B1'])) {
                    $cantB1 = $_POST['cantB1'];
                    $stmt   = $db->prepare("insert into tblDetalleVenta values(?,?,?);");
                    $cp     = "B1";
                    $stmt->bind_param('isi', $codVenta, $cp, $cantB1);
                    $stmt->execute();
                }
                if (isset($_POST['B2'])) {
                    $cantB2 = $_POST['cantB2'];
                    $stmt   = $db->prepare("insert into tblDetalleVenta values(?,?,?);");
                    $cp     = "B2";
                    $stmt->bind_param('isi', $codVenta, $cp, $cantB2);
                    $stmt->execute();
                }
                if (isset($_POST['C1'])) {
                    $cantC1 = $_POST['cantC1'];
                    $stmt   = $db->prepare("insert into tblDetalleVenta values(?,?,?);");
                    $cp     = "C1";
                    $stmt->bind_param('isi', $codVenta, $cp, $cantC1);
                    $stmt->execute();
                }
                if (isset($_POST['C2'])) {
                    $cantC2 = $_POST['cantC2'];
                    $stmt   = $db->prepare("insert into tblDetalleVenta values(?,?,?);");
                    $cp     = "C2";
                    $stmt->bind_param('isi', $codVenta, $cp, $cantC2);
                    $stmt->execute();
                }
                if (isset($_POST['D1'])) {
                    $cantD1 = $_POST['cantD1'];
                    $stmt   = $db->prepare("insert into tblDetalleVenta values(?,?,?);");
                    $cp     = "D1";
                    $stmt->bind_param('isi', $codVenta, $cp, $cantD1);
                    $stmt->execute();
                }
                if (isset($_POST['D2'])) {
                    $cantD2 = $_POST['cantD2'];
                    $stmt   = $db->prepare("insert into tblDetalleVenta values(?,?,?);");
                    $cp     = "D2";
                    $stmt->bind_param('isi', $codVenta, $cp, $cantD2);
                    $stmt->execute();
                }
                if (isset($_POST['E1'])) {
                    $cantE1 = $_POST['cantE1'];
                    $stmt   = $db->prepare("insert into tblDetalleVenta values(?,?,?);");
                    $cp     = "E1";
                    $stmt->bind_param('isi', $codVenta, $cp, $cantE1);
                    $stmt->execute();
                }
                if (isset($_POST['E2'])) {
                    $cantE2 = $_POST['cantE2'];
                    $stmt   = $db->prepare("insert into tblDetalleVenta values(?,?,?);");
                    $cp     = "E2";
                    $stmt->bind_param('isi', $codVenta, $cp, $cantE2);
                    $stmt->execute();
                }
                if (isset($_POST['F1'])) {
                    $cantF1 = $_POST['cantF1'];
                    $stmt   = $db->prepare("insert into tblDetalleVenta values(?,?,?);");
                    $cp     = "F1";
                    $stmt->bind_param('isi', $codVenta, $cp, $cantF1);
                    $stmt->execute();
                }
                if (isset($_POST['F2'])) {
                    $cantF2 = $_POST['cantF2'];
                    $stmt   = $db->prepare("insert into tblDetalleVenta values(?,?,?);");
                    $cp     = "F2";
                    $stmt->bind_param('isi', $codVenta, $cp, $cantF2);
                    $stmt->execute();
                }
                if (isset($_POST['G1'])) {
                    $cantG1 = $_POST['cantG1'];
                    $stmt   = $db->prepare("insert into tblDetalleVenta values(?,?,?);");
                    $cp     = "G1";
                    $stmt->bind_param('isi', $codVenta, $cp, $cantG1);
                    $stmt->execute();
                }
                if (isset($_POST['G2'])) {
                    $cantG2 = $_POST['cantG2'];
                    $stmt   = $db->prepare("insert into tblDetalleVenta values(?,?,?);");
                    $cp     = "G2";
                    $stmt->bind_param('isi', $codVenta, $cp, $cantG2);
                    $stmt->execute();
                }
                if (!$stmt) {
                    echo "<script> alert('Error al guardar los datos'); location.href ='../index_.php?menu=registrarVentas';</script>";
                } else {
                    echo "<script> alert('Ventas Registradas'); location.href ='../index_.php?menu=registrarVentas';</script>";
                }
                $sql    = "UPDATE `tblVenta` SET `estado` = b'0' WHERE `tblVenta`.`estado` = '1';";
                $result = $db->query($sql);

            } else {
                echo "<script> alert('Error, no se pudo registrar las ventas'); location.href ='../index_.php?menu=registrarVentas';</script>";
            }

        } else {
            echo "<script> alert('Error al registrar la venta');location.href ='../index_.php?menu=registrarVentas';</script>";
        }
    }

} catch (Exception $e) {

    echo "<script> alert('Ocurrio un error , $e');location.href ='../index_.php?menu=registrarVentas';</script>";

}
