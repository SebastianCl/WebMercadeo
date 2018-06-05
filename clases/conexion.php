<?php
$server = "localhost";
$user   = "root";
$clave  = "";

if (!isset($nombre)) {
    $nombre = "";
}

$db = new MySQLi($server, $user, $clave, $nombre);

/*if ($db->connect_error) {
die("Error" . $db->connect_errno . " " . $db->connect_error);
} else {
echo 'se conecto';
}
DB Name = id6070810_mercadeo
DB User = id6070810_merca
DB Host = localhost

$Namedb = "id6070810_mercadeo";
$user   = "id6070810_merca";
$server = "localhost";
$passdb = "123456";

$db = mysql_connect($server, $user, $passdb) or die("No se puedo conectar " . mysql_error());
mysql_select_db($Namedb, $db) or die("No se ha conectado " . mysql_error());
 */
