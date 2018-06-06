<?php
$CodEstabl = $_COOKIE["CodEstabl"];
$sw        = false;

if (isset($_POST['A1'])) {
    $cantA1    = $_POST['cantA1'];
    $cp        = "A1";
    $sql       = "SELECT $cp FROM tblStock WHERE fkCodEstabl = '$CodEstabl' ";
    $stmt      = mysql_query($sql, $db);
    $row       = mysql_fetch_array($stmt);
    $cantStock = $row["$cp"];
    if ($cantA1 > $cantStock) {
        $sw = false;
        echo "<script> alert('NO HUBO REGISTRO | No tienes suficiente Chorizo 300 gr');location.href ='../index.php?menu=registrarVentas';</script>";
    } else {
        $sw = true;
    }
}

if (isset($_POST['A2'])) {
    $cantA2    = $_POST['cantA2'];
    $sql       = "SELECT $cp FROM tblStock WHERE fkCodEstabl = '$CodEstabl' ";
    $stmt      = mysql_query($sql, $db);
    $row       = mysql_fetch_array($stmt);
    $cantStock = $row["$cp"];

    if ($cantA2 > $cantStock) {
        $sw = false;
        echo "<script> alert('NO HUBO REGISTRO | No tienes suficiente Chorizo 500 gr');location.href ='../index.php?menu=registrarVentas';</script>";
    } else {
        $sw = true;
    }
}
if (isset($_POST['B1'])) {
    $cantB1    = $_POST['cantB1'];
    $cp        = "B1";
    $sql       = "SELECT $cp FROM tblStock WHERE fkCodEstabl = '$CodEstabl' ";
    $stmt      = mysql_query($sql, $db);
    $row       = mysql_fetch_array($stmt);
    $cantStock = $row["$cp"];

    if ($cantB1 > $cantStock) {
        $sw = false;
        echo "<script> alert('NO HUBO REGISTRO | No tienes suficiente Mortadela 250 gr');location.href ='../index.php?menu=registrarVentas';</script>";
    } else {
        $sw = true;
    }
}
if (isset($_POST['B2'])) {
    $cantB2    = $_POST['cantB2'];
    $cp        = "B2";
    $sql       = "SELECT $cp FROM tblStock WHERE fkCodEstabl = '$CodEstabl' ";
    $stmt      = mysql_query($sql, $db);
    $row       = mysql_fetch_array($stmt);
    $cantStock = $row["$cp"];

    if ($cantB2 > $cantStock) {
        $sw = false;
        echo "<script> alert('NO HUBO REGISTRO | No tienes suficiente Mortadela 500 gr');location.href ='../index.php?menu=registrarVentas';</script>";
    } else {
        $sw = true;
    }
}
if (isset($_POST['C1'])) {
    $cantC1    = $_POST['cantC1'];
    $cp        = "C1";
    $sql       = "SELECT $cp FROM tblStock WHERE fkCodEstabl = '$CodEstabl' ";
    $stmt      = mysql_query($sql, $db);
    $row       = mysql_fetch_array($stmt);
    $cantStock = $row["$cp"];

    if ($cantC1 > $cantStock) {
        $sw = false;
        echo "<script> alert('NO HUBO REGISTRO | No tienes suficiente Salami 50 gr');location.href ='../index.php?menu=registrarVentas';</script>";
    } else {
        $sw = true;
    }
}
if (isset($_POST['C2'])) {
    $cantC2    = $_POST['cantC2'];
    $cp        = "C2";
    $sql       = "SELECT $cp FROM tblStock WHERE fkCodEstabl = '$CodEstabl' ";
    $stmt      = mysql_query($sql, $db);
    $row       = mysql_fetch_array($stmt);
    $cantStock = $row["$cp"];

    if ($cantC2 > $cantStock) {
        $sw = false;
        echo "<script> alert('NO HUBO REGISTRO | No tienes suficiente Salami 150 gr');location.href ='../index.php?menu=registrarVentas';</script>";
    } else {
        $sw = true;
    }
}
if (isset($_POST['D1'])) {
    $cantD1    = $_POST['cantD1'];
    $cp        = "D1";
    $sql       = "SELECT $cp FROM tblStock WHERE fkCodEstabl = '$CodEstabl' ";
    $stmt      = mysql_query($sql, $db);
    $row       = mysql_fetch_array($stmt);
    $cantStock = $row["$cp"];

    if ($cantD1 > $cantStock) {
        $sw = false;
        echo "<script> alert('NO HUBO REGISTRO | No tienes suficiente Costilla 500 gr');location.href ='../index.php?menu=registrarVentas';</script>";
    } else {
        $sw = true;
    }
}
if (isset($_POST['D2'])) {
    $cantD2    = $_POST['cantD2'];
    $cp        = "D2";
    $sql       = "SELECT $cp FROM tblStock WHERE fkCodEstabl = '$CodEstabl' ";
    $stmt      = mysql_query($sql, $db);
    $row       = mysql_fetch_array($stmt);
    $cantStock = $row["$cp"];

    if ($cantD2 > $cantStock) {
        $sw = false;
        echo "<script> alert('NO HUBO REGISTRO | No tienes suficiente Costilla 1000 gr');location.href ='../index.php?menu=registrarVentas';</script>";
    } else {
        $sw = true;
    }
}
if (isset($_POST['E1'])) {
    $cantE1    = $_POST['cantE1'];
    $cp        = "E1";
    $sql       = "SELECT $cp FROM tblStock WHERE fkCodEstabl = '$CodEstabl' ";
    $stmt      = mysql_query($sql, $db);
    $row       = mysql_fetch_array($stmt);
    $cantStock = $row["$cp"];

    if ($cantE1 > $cantStock) {
        $sw = false;
        echo "<script> alert('NO HUBO REGISTRO | No tienes suficiente Morcilla 250 gr');location.href ='../index.php?menu=registrarVentas';</script>";
    } else {
        $sw = true;
    }
}
if (isset($_POST['E2'])) {
    $cantE2    = $_POST['cantE2'];
    $cp        = "E2";
    $sql       = "SELECT $cp FROM tblStock WHERE fkCodEstabl = '$CodEstabl' ";
    $stmt      = mysql_query($sql, $db);
    $row       = mysql_fetch_array($stmt);
    $cantStock = $row["$cp"];

    if ($cantE2 > $cantStock) {
        $sw = false;
        echo "<script> alert('NO HUBO REGISTRO | No tienes suficiente Morcilla 500 gr');location.href ='../index.php?menu=registrarVentas';</script>";
    } else {
        $sw = true;
    }
}
if (isset($_POST['F1'])) {
    $cantF1    = $_POST['cantF1'];
    $cp        = "F1";
    $sql       = "SELECT $cp FROM tblStock WHERE fkCodEstabl = '$CodEstabl' ";
    $stmt      = mysql_query($sql, $db);
    $row       = mysql_fetch_array($stmt);
    $cantStock = $row["$cp"];

    if ($cantF1 > $cantStock) {
        $sw = false;
        echo "<script> alert('NO HUBO REGISTRO | No tienes suficiente Salchicha 250 gr');location.href ='../index.php?menu=registrarVentas';</script>";
    } else {
        $sw = true;
    }
}
if (isset($_POST['F2'])) {
    $cantF2    = $_POST['cantF2'];
    $cp        = "F2";
    $sql       = "SELECT $cp FROM tblStock WHERE fkCodEstabl = '$CodEstabl' ";
    $stmt      = mysql_query($sql, $db);
    $row       = mysql_fetch_array($stmt);
    $cantStock = $row["$cp"];

    if ($cantF2 > $cantStock) {
        $sw = false;
        echo "<script> alert('NO HUBO REGISTRO | No tienes suficiente Salchicha 500 gr');location.href ='../index.php?menu=registrarVentas';</script>";
    } else {
        $sw = true;
    }
}
if (isset($_POST['G1'])) {
    $cantG1    = $_POST['cantG1'];
    $cp        = "G1";
    $sql       = "SELECT $cp FROM tblStock WHERE fkCodEstabl = '$CodEstabl' ";
    $stmt      = mysql_query($sql, $db);
    $row       = mysql_fetch_array($stmt);
    $cantStock = $row["$cp"];

    if ($cantG1 > $cantStock) {
        $sw = false;
        echo "<script> alert('NO HUBO REGISTRO | No tienes suficiente Salchichón 250 gr');location.href ='../index.php?menu=registrarVentas';</script>";
    } else {
        $sw = true;
    }
}
if (isset($_POST['G2'])) {
    $cantG2    = $_POST['cantG2'];
    $cp        = "G2";
    $sql       = "SELECT $cp FROM tblStock WHERE fkCodEstabl = '$CodEstabl' ";
    $stmt      = mysql_query($sql, $db);
    $row       = mysql_fetch_array($stmt);
    $cantStock = $row["$cp"];

    if ($cantG2 > $cantStock) {
        $sw = false;
        echo "<script> alert('NO HUBO REGISTRO | No tienes suficiente Salchichón 500 gr');location.href ='../index.php?menu=registrarVentas';</script>";
    } else {
        $sw = true;
    }
}
