<?php

$_SESSION["Session"] = null;
if (isset($_COOKIE["emailCliente"])) {
    setcookie("emailCliente", "", time() - 604800);
}
if (isset($_COOKIE["barrio_usuario"])) {
    setcookie("barrio_usuario", "", time() - 604800);
}
if (isset($_COOKIE["ciudad_usuario"])) {
    setcookie("ciudad_usuario", "", time() - 604800);
}
if (isset($_COOKIE["nombre_usuario"])) {
    setcookie("nombre_usuario", "", time() - 604800);
}
if (isset($_COOKIE["rol"])) {
    setcookie("rol", "", time() - 604800);
}
if (isset($_COOKIE["ultima_ciudad"])) {
    setcookie("ultima_ciudad", "", time() - 604800);
}
if (isset($_COOKIE["ultima_fecha"])) {
    setcookie("ultima_fecha", "", time() - 604800);
}
if (isset($_COOKIE["id_usuario"])) {
    setcookie("id_usuario", "", time() - 604800);
}
if (isset($_COOKIE["idCliente"])) {
    setcookie("idCliente", "", time() - 604800);
}
header("Location: index.php");
