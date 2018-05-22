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

    if ($_GET['menu'] == 'menuAdmin') {
        if (isset($_SESSION["Session"]) && $_SESSION["Session"] != null) {
            require_once 'usuarios/menuAdmin.php';
        } else {
            header("Location: index_.php");
            echo "alert('Inicie Session').";
        }
    }
    /*if ($_GET['menu'] == 'administrador') {
        if (isset($_SESSION["Session"]) && $_SESSION["Session"] != null) {
            require_once 'usuarios/administrador.php';
        } else {
            echo "alert('Inicie Session')";
            header("Location: index_.php");

        }
    }
    if ($_GET['menu'] == 'Eliminar_Ciudad') {
        if (isset($_SESSION["Session"]) && $_SESSION["Session"] != null) {
            require_once 'usuarios/Eliminar_Ciudad.php';
        } else {
            header("Location: index_.php");

            echo "<script>alert('Inicie Session').<script>";}
    }
    if ($_GET['menu'] == 'Editar_Ciudad') {
        if (isset($_SESSION["Session"]) && $_SESSION["Session"] != null) {
            require_once 'usuarios/Editar_Ciudad.php';
        } else {
            header("Location: index_.php");
        }
    }*/
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



<!--El footer definirá el bloque en donde se mostrará el contenido tipo pie de página del sitio. -->
<footer>
    <div id="footer">
        <div class="container text-center">
            <?php
include_once 'capas/footer.php';

?>
        </div>
    </div>
</footer>


</body>
</html>
