<?php

$_SESSION["Session"] = null;
if (isset($_COOKIE["emailCliente"])) {
    setcookie("emailCliente", "", time() - 604800);
}
header("Location: index.php");
