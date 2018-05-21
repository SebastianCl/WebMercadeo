<div  class="container page-header text-center">
 <p>
 	<h2>Registro de Establecimientos</h2>
 </p>
</div>

<div class="container">

	<form action='clases/Registro_Establecimiento.php' method='post'>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-user"></span>
			</span>
					<input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre Establecimiento" required="true">
		</div>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-lock"></span>
			</span>
					<input class="form-control" id="nit" name="nit" type="password" placeholder="Nit" >
		</div>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>
					<input class="form-control" id="cuidad" name="cuidad" type="text" placeholder="Cuidad" required="true">
		</div>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>
					<input class="form-control" id="barrio" name="barrio" type="text" placeholder="Barrio">
		</div>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>
					<input class="form-control" id="direccion" name="direccion" type="text" placeholder="Direccion" required="true">
		</div>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>
					<input class="form-control" id="telefono" name="telefono" type="text" placeholder="Telefono">
		</div>



	<button type="submit" class="btn btn-default btn-block">
	  <span class="glyphicon glyphicon-send"></span> Enviar
	</button>

	</form>
</div>
