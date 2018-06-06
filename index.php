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
    if ($_GET['menu'] == 'Estadistica') {
        require_once 'usuarios/estadistica_productos.php';
    }

    if ($_GET['menu'] == 'encuesta') {
        include "clases/conexion.php";
        $idCliente = $_COOKIE["idCliente"];
        $sql       = "select fkIdCliente from tblEncuesta where fkIdCliente = '" . $idCliente . "'";
        $result    = mysql_query($sql, $db);
        $num_filas = mysql_num_rows($result);
        if (!$num_filas > 0) {
            mysql_close($db);
            require_once 'usuarios/encuestas.php';
        } else {
            mysql_close($db);
            echo "<script> alert('Ya has realizado la encuesta');location.href ='../index.php';</script>";
        }

    }
    if ($_GET['menu'] == 'pedido') {
        require_once 'usuarios/FormularioPedido.php';
    }
    if ($_GET['menu'] == 'registrarVentas') {
        require_once 'usuarios/FormularioVentas.php';
    }
    if ($_GET['menu'] == 'fechaVentas') {
        require_once 'usuarios/FormularioFechas.php';
    }
    if ($_GET['menu'] == 'editarVenta') {
        require_once 'usuarios/FormularioEditarVenta.php';
    }
    if ($_GET['menu'] == 'registrarPedido') {
        require_once 'usuarios/FormularioPedido.php';
    }

    if ($_GET['menu'] == 'menuAdmin') {
        if (isset($_SESSION["Session"]) && $_SESSION["Session"] != null) {
            require_once 'usuarios/menuAdmin.php';
        } else {
            header("Location: index.php");
            echo "alert('Inicie Session').";
        }
    }
    if ($_GET['menu'] == 'menuTendero') {
        if (isset($_SESSION["Session"]) && $_SESSION["Session"] != null) {
            require_once 'usuarios/menuTendero.php';
        } else {
            header("Location: index.php");
            echo "alert('Inicie Session').";
        }
    }
    if ($_GET['menu'] == 'cerrar') {
        require_once 'clases/cerrar.php';
        header("Location: index.php");
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
