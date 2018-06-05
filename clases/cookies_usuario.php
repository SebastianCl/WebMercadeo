<?php
$result = mysql_query($sql, $db);
$tbl2   = mysql_fetch_array($result);

setcookie("id_rol", $tbl2["IdRol"], time() + 604800);
setcookie("nombre_usuario", $tbl2["nombre"], time() + 604800);
setcookie("ciudad_usuario", $tbl2["ciudad"], time() + 604800);
setcookie("barrio_usuario", $tbl2["barrio"], time() + 604800);
