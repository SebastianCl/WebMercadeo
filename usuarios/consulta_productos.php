<div  class="container page-header text-center">
 <p>
  <h2>Listado de Productos</h2>
 </p>
</div>
<div class="container">
<div class="table-responsive">
  <table class=" table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
      </tr>
    </thead>
    <tbody>
<?php
$nombre = "mercadeo";
include "clases/conexion.php";

$sql       = "select * from tblProductos";
$result    = mysql_query($sql, $db);
$num_filas = mysql_num_rows($result);
if ($num_filas > 0) {

    while ($row = mysql_fetch_array($result)) {
        ?>
        <tr>
          <td> <?php echo $row["CodProducto"] ?></td>
          <td> <?php echo $row["nombreProducto"] ?></td>
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
