<?php
if (!isset($_SESSION["Session"])) {
    $_SESSION['Usuario'] = $_POST['usuario'];
    $_SESSION['Clave']   = $_POST['clave'];

    if (isset($_SESSION['Clave']) && isset($_SESSION['Clave'])) {

        include "conexion.php";

        $sql = "SELECT * FROM tblRol where usuario ='" . $_SESSION['Usuario'] . "' and clave='" . $_SESSION['Clave'] . "'";

        $result = mysql_query($sql, $db);
        $tbl    = mysql_fetch_array($result);
        if ($tbl["usuario"] == $_POST['usuario']) {
            setcookie("id_usuario", $tbl["IdRol"], time() + 604800);
            switch ($tbl["rol"]) {
                case 'A':
                    $sql = "SELECT * FROM tblAdministrador WHERE fkIdRol = '" . $tbl["IdRol"] . "'";
                    include "clases/cookies_usuario.php";
                    setcookie("rol", "A", time() + 604800);
                    include 'clases/visita.php';
                    $ciu = $row["ciudad"];
                    switch ($ciu) {
                           case 'Medellin':
                               header("Location: index.php?menu=ofertaMedellin");
                                break;
                           case 'Bogota':
                                header("Location: index.php?menu=ofertaBogota");
                                break;
                           case 'Cali':
                               header("Location: index.php?menu=ofertaCali");
                               break;
                           
                           default:
                               header("Location: index.php");
                               break;
                       }   
                    
                    break;

                case 'T':
                    $sql = "SELECT * FROM tblTenderos WHERE fkIdRol = '" . $tbl["IdRol"] . "'";
                    include 'clases/cookies_usuario.php';
                    setcookie("rol", "T", time() + 604800);
                    setcookie("idTendero", $tbl2["idTendero"], time() + 604800);
                    setcookie("CodEstabl", $tbl2["fkCodEstabl"], time() + 604800);
                    include 'clases/visita.php';
                    header("Location: index.php");
                    break;

                case 'C':
                    $sql = "SELECT * FROM tblCliente WHERE fkIdRol = '" . $tbl["IdRol"] . "'";
                    include 'clases/cookies_usuario.php';
                    setcookie("rol", "C", time() + 604800);
                    $idCliente = $tbl2["IdCliente"];
                    setcookie("idCliente", $tbl2["IdCliente"], time() + 604800);
                    setcookie("emailCliente", $tbl2["email"], time() + 604800);
                    include 'clases/visita.php';
                    $ciu = $row["ciudad"];
                    switch ($ciu) {
                           case 'Medellin':
                               header("Location: index.php?menu=ofertaMedellin");
                                break;
                           case 'Bogota':
                                header("Location: index.php?menu=ofertaBogota");
                                break;
                           case 'Cali':
                               header("Location: index.php?menu=ofertaCali");
                               break;
                           
                           default:
                               header("Location: index.php");
                               break;
                       }
                    break;
                case 'G':
                    $sql = "SELECT * FROM tblGerente WHERE fkIdRol = '" . $tbl["IdRol"] . "'";
                    include 'clases/cookies_usuario.php';
                    setcookie("rol", "G", time() + 604800);
                    include 'clases/visita.php';
                    $ciu = $row["ciudad"];
                    switch ($ciu) {
                           case 'Medellin':
                               header("Location: index.php?menu=ofertaMedellin");
                                break;
                           case 'Bogota':
                                header("Location: index.php?menu=ofertaBogota");
                                break;
                           case 'Cali':
                               header("Location: index.php?menu=ofertaCali");
                               break;
                           
                           default:
                               header("Location: index.php");
                               break;
                       }

                    break;
                case 'R':
                    $sql = "SELECT * FROM tblRepresentante WHERE fkIdRol = '" . $tbl["IdRol"] . "'";
                    include 'clases/cookies_usuario.php';
                    setcookie("rol", "R", time() + 604800);
                    include 'clases/visita.php';
                    $ciu = $row["ciudad"];
                    switch ($ciu) {
                           case 'Medellin':
                               header("Location: index.php?menu=ofertaMedellin");
                                break;
                           case 'Bogota':
                                header("Location: index.php?menu=ofertaBogota");
                                break;
                           case 'Cali':
                               header("Location: index.php?menu=ofertaCali");
                               break;
                           
                           default:
                               header("Location: index.php");
                               break;
                       }
                    break;
            }

            $_SESSION["Session"] = "Activo";
        } else {
            require_once "usuarios/denegado.php";
        }
        mysql_close($db);
    }
} else {
    require_once "usuarios/menuAdmin.php";
}
