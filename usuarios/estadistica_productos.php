<div  class="container page-header text-center">
  <p>
  <h2>Listado de Productos</h2>
 </p>
</div>
<div class="table-responsive">

<table class="table table-bordered">
  <tr>
    <th>Codigo</th>
    <th>Producto</th>
    <th>Presentacion</th>
  </tr>

  <tr>
    <td>A1</td>
    <td>Chorizo</td>
    <td>300 GR</td>
  </tr>

  <tr>
    <td>A2</td>
    <td>Chorizo</td>
    <td>500 GR</td>
  </tr>

  <tr>
    <td>B1</td>
    <td>Mortadelza</td>
    <td>250 GR</td>
  </tr>

  <tr>
    <td>B2</td>
    <td>Mortadela</td>
    <td>500 GR</td>
  </tr>

  <tr>
    <td>C1</td>
    <td>Salami</td>
    <td>50 GR</td>
  </tr>

  <tr>
    <td>C2</td>
    <td>Salami</td>
    <td>150 GR</td>
  </tr>

  <tr>
    <td>D1</td>
    <td>Costilla</td>
    <td>500 GR</td>
  </tr>

  <tr>
    <td>D2</td>
    <td>Costilla</td>
    <td>1000 GR</td>
  </tr>

  <tr>
    <td>E1</td>
    <td>Morcilla</td>
    <td>250 GR</td>
  </tr>

  <tr>
    <td>E2</td>
    <td>Morcilla</td>
    <td>500 GR</td>
  </tr>

  <tr>
    <td>F1</td>
    <td>Salchicha</td>
    <td>250 GR</td>
  </tr>

  <tr>
    <td>F1</td>
    <td>Salchicha</td>
    <td>500 GR</td>
  </tr>

  <tr>
    <td>G1</td>
    <td>Salchichon</td>
    <td>250 GR</td>
  </tr>

  <tr>
    <td>G1</td>
    <td>Salchichon</td>
    <td>500 GR</td>
  </tr>

</table>


  <table class=" table table-bordered">
    <thead>
       <p>
  <h2>VENTAS DE TODOS LOS PRODUCTOS</h2>
 </p>
      <tr>
        <th>Codigo</th>
        <th>Cantidad</th>
      </tr>
    </thead>
    <tbody>
<?php

//VENTAS DE TODOS LOS PRODUCTOS
include "clases/conexion.php";

$sql    = "SELECT * from tblDetalleVenta";
$result = mysql_query($sql, $db);

$sql1    = "SELECT * FROM tblProductos";
$result1 = mysql_query($sql1, $db);

$num_filas = mysql_num_rows($result);

if ($num_filas > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>
        <tr>
          <td> <?php echo $row["fkCodigoPP"] ?></td>
          <td> <?php echo $row["cantidad"] ?></td>
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


<div class="container">
<div class="table-responsive">
  <table class=" table table-bordered">
    <thead>
       <p>
  <h2>PRODUCTO MAS VENDIDO</h2>
 </p>
      <tr>
        <th>Codigo</th>
        <th>Cantidad</th>
      </tr>
    </thead>
    <tbody>
<?php

//PRODUCTO MAS VENDIDO

$sql       = "SELECT * FROM tblDetalleVenta ORDER BY cantidad DESC LIMIT 1";
$result    = mysql_query($sql, $db);
$num_filas = mysql_num_rows($result);

if ($num_filas > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>
        <tr>
          <td> <?php echo $row["fkCodigoPP"] ?></td>
          <td> <?php echo $row["cantidad"] ?></td>

<?php
}
} else {?>
    <p>No hay registros...</p>
<?php }?>
  </tbody>
  </table>
</div>
</div>

<div class="container">
<div class="table-responsive">
  <table class=" table table-bordered">
    <thead>
       <p>
  <h2>PRESENTACION MAS VENDIDA</h2>
 </p>
      <tr>
        <th>Codigo</th>
        <th>Cantidad</th>
        <th>Presentacion</th>

      </tr>
    </thead>
    <tbody>
<?php

//PRESENTACION MAS VENDIDA

$sql1      = "SELECT * FROM tblDetalleVenta ORDER BY Cantidad DESC LIMIT 1 ";
$result1   = mysql_query($sql1, $db);
$num_filas = mysql_num_rows($result1);

if ($num_filas > 0) {
    while ($row1 = mysql_fetch_array($result1)) {
        ?>
        <tr>
          <td> <?php echo $row1["fkCodigoPP"] ?></td>
          <td> <?php echo $row1["cantidad"] ?></td>
        <?php
}
}
$sql       = "SELECT * FROM tblPresenProducto ORDER BY presentacion DESC LIMIT 1";
$result    = mysql_query($sql, $db);
$num_filas = mysql_num_rows($result);

if ($num_filas > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>
            <td> <?php echo $row["presentacion"] ?></td>
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


<div class="container">
<div class="table-responsive">
  <table class=" table table-bordered">
    <thead>
       <p>
  <h2>PRODUCTO MENOS VENDIDO</h2>
 </p>
      <tr>
        <th>Codigo</th>
        <th>Cantidad</th>
      </tr>
    </thead>
    <tbody>
<?php

//PRODUCTO MENOS VENDIDO

$sql       = "SELECT * FROM tblDetalleVenta ORDER BY cantidad ASC LIMIT 1";
$result    = mysql_query($sql, $db);
$num_filas = mysql_num_rows($result);

if ($num_filas > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>
        <tr>
          <td> <?php echo $row['fkCodigoPP'] ?></td>
          <td> <?php echo $row['cantidad'] ?></td>
<?php
}
} else {?>
    <p>No hay registros...</p>
<?php }?>
  </tbody>
  </table>
</div>
</div>


<div class="container">
<div class="table-responsive">
  <table class=" table table-bordered">
    <thead>
       <p>
  <h2>PRESENTACION MENOS VENDIDO</h2>
 </p>
      <tr>
        <th>Codigo</th>
        <th>Presentacion</th>
        <th>Cantidad</th>
      </tr>
    </thead>
    <tbody>
<?php

//PRESENTACION MENOS VENDIDO

$sql1      = "SELECT * FROM tblDetalleVenta ORDER BY cantidad ASC LIMIT 1 ";
$result1   = mysql_query($sql, $db);
$num_filas = mysql_num_rows($result1);

if ($num_filas > 0) {
    while ($row1 = mysql_fetch_array($result1)) {
        ?>
        <tr>
          <td> <?php echo $row1["fkCodigoPP"] ?></td>
          <td> <?php echo $row1["cantidad"] ?></td>
        <?php
}
}
$sql       = "SELECT * FROM tblPresenProducto ORDER BY presentacion DESC LIMIT 1";
$result    = mysql_query($sql, $db);
$num_filas = mysql_num_rows($result);

if ($num_filas > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>
            <td> <?php echo $row["presentacion"] ?></td>
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


<div class="container">
<div class="table-responsive">
  <table class="table table-bordered">
    <thead>
       <p>
   <h2>TOTAL VENTAS</h2>
 </p>
      <tr>
        <th>Codigo</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Total</th>

      </tr>
    </thead>
    <tbody>
<?php

//TOTAL VENTAS

$sql       = "SELECT * FROM tblPresenProducto";
$result    = mysql_query($sql, $db);
$num_filas = mysql_num_rows($result);

$sql1       = "SELECT * from tblDetalleVenta ORDER BY cantidad DESC LIMIT 1";
$result1    = mysql_query($sql1, $db);
$num_filas1 = mysql_num_rows($result1);

if ($num_filas > 0) {
    if ($num_filas1 > 0) {
        while ($row = mysql_fetch_array($result)) {
            while ($row1 = mysql_fetch_array($result1)) {
                ?>
        <tr>
          <td> <?php echo $row1["fkCodigoPP"]; ?></td>
          <td> <?php echo $row["precio"] ?></td>
          <td> <?php echo $row1["cantidad"] ?></td>
           <td> <?php echo $row1["cantidad"] * $row["precio"] ?></td>
        </tr>
        <?php
}
        }
    }
} else {?>
    <p>No hay registros...</p>
<?php }?>
  </tbody>
  </table>
</div>
</div>