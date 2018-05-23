<div  class="container page-header text-center">
 <p>
  <h2>Listado de Establecimientos</h2>
 </p>
</div>
<div class="container">
<div class="table-responsive">
  <table class=" table table-bordered">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>NIT</th>
        <th>Ciudad</th>
        <th>Barrio</th>
        <th>Direccion</th>
        <th>Telefono</th>
      </tr>
    </thead>
    <tbody>
<?php
$nombre = "mercadeo";
include "clases/conexion.php";

$sql    = "SELECT * FROM tblEstablecimiento";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
          <td> <?php echo $row["nombre"] ?></td>
          <td> <?php echo $row["nit"] ?></td>
          <td> <?php echo $row["ciudad"] ?></td>
          <td> <?php echo $row["barrio"] ?></td>
          <td> <?php echo $row["direccion"] ?></td>
          <td> <?php echo $row["telefono"] ?></td>
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
