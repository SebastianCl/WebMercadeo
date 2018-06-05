<div  class="container page-header text-center">
 <p>
  <h2>Listado de Tenderos</h2>
 </p>
</div>
<div class="container">
<div class="table-responsive">
  <table class=" table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Ciudad</th>
        <th>Barrio</th>
        <th>Direccion</th>
      </tr>
    </thead>
    <tbody>
<?php

include "clases/conexion.php";

$sql       = "select * from  tblTenderos";
$result    = mysql_query($sql, $db);
$num_filas = mysql_num_rows($result);
if ($num_filas > 0) {

    while ($row = mysql_fetch_array($result)) {
        ?>
        <tr>
          <td> <?php echo $row["idTendero"] ?></td>
          <td> <?php echo $row["nombre"] ?></td>
          <td> <?php echo $row["ciudad"] ?></td>
          <td> <?php echo $row["barrio"] ?></td>
          <td> <?php echo $row["direccion"] ?></td>
        </tr>
<?php
}
} else {?>
    <p>No hay registros...</p>
<?php }?>
  </tbody>
  </table>
</div>
</div>
