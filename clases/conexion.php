<?php

$Namedb = "id6070810_mercadeo";
$user   = "id6070810_merca";
$server = "localhost";
$passdb = "123456";

$db = mysql_connect($server, $user, $passdb) or die("No se puedo conectar " . mysql_error());
mysql_select_db($Namedb, $db) or die("No se ha conectado " . mysql_error());
