
<div  class="container page-header text-center">
 <p>
 	<h2>Modiciaciones</h2>
 </p>
</div>
<h4>Registros disponibles</h4>
<br/>
<div class="container">

	<form action='clases/redireccionar.php' method='post'>
		<?php
$nombre = "mercadeo";
include "clases/conexion.php";

$fecha     = date('Y-m-j');
$fecha_3   = strtotime('-3 day', strtotime($fecha));
$fecha_3   = date('Y-m-j', $fecha_3);
$idTendero = $_COOKIE["idTendero"];
$sql       = "SELECT * FROM tblVenta WHERE fecha >= '$fecha_3' AND fkIdTendero = '$idTendero'";
$result    = $db->query($sql);
$fr        = 0;
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $fechaRegistro = $row['fecha'];
        $codVenta      = $row['codVenta'];
        setcookie("codV", $codVenta, time() + 604800);
        $fr++;
        echo '
				<div class="input - group">
					<input type="radio" value="' . $codVenta . '" name="fr' . $fr . '"> Fecha de registro: ' . $fechaRegistro . ' <br/>
				</div> <br/> ';
    }
    echo '<br/><br/>
			<button type="submit" class="btn btn-default">
			  <span class="glyphicon glyphicon-edit"></span> Editar venta
			</button>';
} else {
    echo "<p>No hay registro de ventas disponible para ser editados</p>";
}
?>

	</form>
</div>
