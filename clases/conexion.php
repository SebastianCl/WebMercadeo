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
 */
