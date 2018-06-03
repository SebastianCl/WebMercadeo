<!DOCTYPE html>
<html>

<head>
    <title> Mercadeo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style >

</style>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

<header>
<?php session_start();
require 'capas/header.php';
?>
</header>

<section>
    <div class="container">

    <?php
require_once 'capas/header.php';
if (isset($_GET['menu'])) {

    if ($_GET['menu'] == 'inicio') {
        require_once 'capas/bienvenido.php';
    }

    if ($_GET['menu'] == 'ingreso') {
        require_once 'usuarios/ingresar.php';
    }

    if ($_GET['menu'] == 'form_ingreso') {
        require_once 'clases/ingreso.php';
    }

    if ($_GET['menu'] == 'registros') {
        require_once 'usuarios/registros.php';
    }
    if ($_GET['menu'] == 'registrarEstablecimiento') {
        require_once 'usuarios/FormularioEstablecimientos.php';
    }
    if ($_GET['menu'] == 'registrarTendero') {
        require_once 'usuarios/FormularioTenderos.php';
    }
    if ($_GET['menu'] == 'registrarCliente') {
        require_once 'usuarios/FormularioCliente.php';
    }
    if ($_GET['menu'] == 'registrarGerente') {
        require_once 'usuarios/FormularioGerente.php';
    }
    if ($_GET['menu'] == 'registrarAdministrador') {
        require_once 'usuarios/FormularioAdministrador.php';
    }

    if ($_GET['menu'] == 'registrarRepresentante') {
        require_once 'usuarios/FormularioRepresentante.php';
    }

    if ($_GET['menu'] == 'consultas') {
        require_once 'usuarios/consultas.php';
    }
    if ($_GET['menu'] == 'consultarEstablecimiento') {
        require_once 'usuarios/consulta_establecimientos.php';
    }
    if ($_GET['menu'] == 'consultarTendero') {
        require_once 'usuarios/consulta_tenderos.php';
    }

    if ($_GET['menu'] == 'consultarCliente') {
        require_once 'usuarios/consulta_clientes.php';
    }
    if ($_GET['menu'] == 'consultarTendero') {
        require_once 'usuarios/consulta_tenderos.php';
    }
    if ($_GET['menu'] == 'consultarGerente') {
        require_once 'usuarios/consulta_gerentes.php';
    }
    if ($_GET['menu'] == 'consultarRepresentante') {
        require_once 'usuarios/consulta_representantes.php';
    }

    if ($_GET['menu'] == 'consultarAdministrador') {
        require_once 'usuarios/consulta_administradores.php';
    }

    if ($_GET['menu'] == 'consultarProductos') {
        require_once 'usuarios/consulta_productos.php';
    }

    if ($_GET['menu'] == 'encuesta') {
        require_once 'usuarios/encuestas.php';
    }

    if ($_GET['menu'] == 'menuAdmin') {
        if (isset($_SESSION["Session"]) && $_SESSION["Session"] != null) {
            require_once 'usuarios/menuAdmin.php';
        } else {
            header("Location: index_.php");
            echo "alert('Inicie Session').";
        }
    }
    if ($_GET['menu'] == 'menuTendero') {
        if (isset($_SESSION["Session"]) && $_SESSION["Session"] != null) {
            require_once 'usuarios/menuTendero.php';
        } else {
            header("Location: index_.php");
            echo "alert('Inicie Session').";
        }
    }
    if ($_GET['menu'] == 'cerrar') {
        require_once 'clases/cerrar.php';
        header("Location: index_.php");
    }
    if ($_GET['menu'] == 'crearBD') {
        include_once "clases/crearBD.php";
        include_once "clases/CreaTablaBD.php";
        include_once "clases/llenarBD.php";
        require_once 'clases/cerrar.php';
        header("Location: index_.php");
    }
}
//si menu no esta definido
else {
    require_once 'capas/bienvenido.php';
}

?>

    </div>

</section>




</body>
</html>
