<?php
$result = $db->query($sql);
if ($result->num_rows > 0) {
    $tbl2 = $result->fetch_assoc();
    setcookie("nombre_usuario", $tbl2["nombre"], time() + 604800);
    setcookie("ciudad_usuario", $tbl2["ciudad"], time() + 604800);
    setcookie("barrio_usuario", $tbl2["barrio"], time() + 604800);
}
