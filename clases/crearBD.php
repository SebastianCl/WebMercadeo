<?php
include "conexion.php";

$nombre = "mercadeo";
$stm2   = $db->query("create database $nombre collate utf8_spanish_ci");

if (!$stm2) {
echo "<script> alert('Base de Datos creada');location.href ='../index_.php';</script>";
} else {
echo "<script> alert('Error al crear Base de Datos');location.href ='../index_.php';</script>";
}
