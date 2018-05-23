<div  class="container page-header text-center">
 <p>
  <h2>Listado de Administradores</h2>
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
      </tr>
    </thead>
    <tbody>
<?php
$nombre = "mercadeo";
include "clases/conexion.php";

$sql    = "SELECT * FROM tblAdministrador";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
          <td> <?php echo $row["IdAdministrador"] ?></td>
          <td> <?php echo $row["nombre"] ?></td>
          <td> <?php echo $row["ciudad"] ?></td>
          <td> <?php echo $row["barrio"] ?></td>
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
