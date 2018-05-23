<div  class="container page-header text-center">
 <p>
 	<h2>Registro de Establecimientos</h2>
 </p>
</div>

<div class="container">

	<form action='clases/Registro_Establecimientos.php' method='post'>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-home"></span>
			</span>
					<input class="form-control" id="nombre_establecimiento" name="nombre_establecimiento" type="text" placeholder="Nombre Establecimiento" required="true">
		</div>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-lock"></span>
			</span>
					<input class="form-control" id="nit" name="nit" type="number" min="0" placeholder="NIT" required="true">
		</div>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-map-marker"></span>
			</span>
					<input class="form-control" id="ciudad" name="ciudad" type="text" placeholder="Ciudad" required="true">
		</div>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-map-marker"></span>
			</span>
					<input class="form-control" id="barrio" name="barrio" type="text" placeholder="Barrio" required="true">
		</div>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-map-marker"></span>
			</span>
					<input class="form-control" id="direccion" name="direccion" type="text" placeholder="Direccion" required="true">
		</div>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-earphone"></span>
			</span>
					<input class="form-control" id="telefono" name="telefono" type="text" placeholder="Telefono" required="true">
		</div>



	<button type="submit" class="btn btn-default btn-block">
	  <span class="glyphicon glyphicon-edit"></span> Nuevo Establecimiento
	</button>

	</form>
</div>
