<?php
if (isset($_POST["fr1"]) || isset($_POST["fr2"]) || isset($_POST["fr3"])) {
    echo "<script>location.href ='../index.php?menu=editarVenta';</script>";
} else {
    echo "<script>location.href ='../index.php?menu=fechaVentas';</script>";
}
