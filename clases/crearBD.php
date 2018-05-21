<?php
include "conexion.php";

$nombre = "mercadeo";
$stm2   = $db->query("create database $nombre collate utf8_spanish_ci");

/*if (!$stm2) {
echo " Error en crear bd.";
} else {
echo " base de datos creada";
}*/
