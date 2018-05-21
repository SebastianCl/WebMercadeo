<div  class="container page-header text-center">
 <p>
 	<h2>Listado de ciudades</h2>
 </p> 
</div>
<div class="container">
<div class="table-responsive">
  <table class=" table table-bordered">
  	<thead>
  		<tr>
  			<th>ID</th>
  			<th>City</th>
  			<th>Country</th>
  		</tr>
  	</thead>
  	<tbody>
<?php 
$nombre="db_evaluacion4";
//include("conexion.php");


$sql = "SELECT id, ciudad, Pais FROM ciudades";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>
        <tr>
        	<td> <?php echo $row["id"] ?></td>
        	<td> <?php echo $row["ciudad"] ?></td>
        	<td> <?php echo $row["Pais"] ?></td>
        </tr>
<?php 
    }
} else { ?>
    <p>No hay registros...</p>
<?php } ?>
	</tbody>
	</table>
</div>
</div>
