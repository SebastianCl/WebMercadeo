<?php
if (isset($_COOKIE['login1'])) {

    if (!isset($_SESSION["Session"])) {
        $_SESSION['Usuario'] = $_POST['usuario'];
        $_SESSION['Clave']   = $_POST['clave'];

        if (isset($_SESSION['Clave']) && isset($_SESSION['Clave'])) {
            $nombre = "mercadeo";
            include "conexion.php";

            $sql    = "SELECT * FROM tblRol where usuario ='" . $_SESSION['Usuario'] . "' and clave='" . $_SESSION['Clave'] . "'";
            $result = $db->query($sql);
            if ($result->num_rows > 0) {
                $tbl     = $result->fetch_assoc();
                $usuario = $tbl["usuario"];

                if (!isset($_COOKIE['$usuario'])) {
                    $fecha = date("d/m/y | H:i:s");
                    setcookie($usuario, $fecha, time() + 604800);
                }
                switch ($tbl["rol"]) {
                    case 'A':
                        $sql = "SELECT * FROM tblAdministrador WHERE fkIdRol = '" . $tbl["IdRol"] . "'";
                        include 'clases/cookies_usuario.php';
                        setcookie("rol", "A", time() + 604800);
                        header("Location: index_.php");
                        break;

                    case 'T':
                        $sql = "SELECT * FROM tblTenderos WHERE fkIdRol = '" . $tbl["IdRol"] . "'";
                        include 'clases/cookies_usuario.php';
                        setcookie("rol", "T", time() + 604800);
                        setcookie("idTendero", $tbl2["idTendero"], time() + 604800);
                        header("Location: index_.php");
                        break;

                    case 'C':
                        $sql = "SELECT * FROM tblCliente WHERE fkIdRol = '" . $tbl["IdRol"] . "'";
                        include 'clases/cookies_usuario.php';
                        setcookie("rol", "C", time() + 604800);
                        setcookie("idCliente", $tbl2["idCliente"], time() + 604800);
                        header("Location: index_.php");
                        break;
                    case 'G':
                        $sql = "SELECT * FROM tblGerente WHERE fkIdRol = '" . $tbl["IdRol"] . "'";
                        include 'clases/cookies_usuario.php';
                        setcookie("rol", "G", time() + 604800);
                        header("Location: index_.php");

                        break;
                    case 'R':
                        $sql = "SELECT * FROM tblRepresentante WHERE fkIdRol = '" . $tbl["IdRol"] . "'";
                        include 'clases/cookies_usuario.php';
                        setcookie("rol", "R", time() + 604800);
                        header("Location: index_.php");
                        break;
                }
                $_SESSION["Session"] = "Activo";
            } else {
                require_once "usuarios/denegado.php";
            }
            $db->close();
        }
    } else {
        require_once "usuarios/menuAdmin.php";
    }
//si no se ha creado, el administrador hace lo siguiente:
} else {
    if (!isset($_SESSION["Login1"])) {
        $_SESSION['Usuario'] = $_POST['usuario'];
        $_SESSION['Clave']   = $_POST['clave'];
        $ciudad_local        = $_POST['ciudad_local'];

        if (isset($_SESSION['Clave']) && isset($_SESSION['Clave'])) {
            setcookie('login1', 'ok', time() + 604800);
            setcookie("ciudadPC", $ciudad_local, time() + 604800);
            $usuario_default = "admin";
            $clave_default   = "1";

            if ($usuario_default == $_POST['usuario'] && $clave_default == $_POST['clave']) {
                require_once "usuarios/menuAdmin.php";
                header("Location: index_.php");
                $_SESSION["Login1"] = "Activo";
            } else {
                require_once "usuarios/denegado.php";
                setcookie('login1', 'ok', time() - 604800);
            }
        }

    } else {
        require_once "usuarios/menuAdmin.php";
    }

}
