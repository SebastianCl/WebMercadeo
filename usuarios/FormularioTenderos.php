<div  class="container page-header text-center">
 <p>
 	<h2>Registro de Tenderos</h2>
 </p>
</div>

<div class="container">

	<form action='clases/Registro_Tenderos.php' method='post'>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-copyright-mark"></span>
			</span>
					<input  class="form-control" id="idTendero" name="idTendero" type="number" min="0" placeholder="Identificacion" required="true">
		</div>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-user"></span>
			</span>
					<input class="form-control" id="usuarioTendero" name="usuarioTendero" type="text" placeholder="Nombre de usuario" required="true">
		</div>


		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-asterisk"></span>
			</span>
					<input class="form-control" id="clave" name="clave" type="password" placeholder="Contraseña" required="true">
		</div>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-user"></span>
			</span>
					<input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre Completo" required="true">
		</div>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-map-marker"></span>
			</span>
					<input class="form-control" id="Cuidad" name="Cuidad" type="text" placeholder="Cuidad" required="true">
		</div>
		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-map-marker"></span>
			</span>
					<input class="form-control" id="Barrio" name="Barrio" type="text" placeholder="Barrio" required="true">
		</div>


		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-map-marker"></span>
			</span>
					<input class="form-control" id="Direccion" name="Direccion" type="text" placeholder="Direccion" required="true">
		</div>
		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>
					<input class="form-control" id="Establecimiento" name="Establecimiento" type="text" placeholder="Establecimiento" required="true">
		</div>
		<br/>



	<button type="submit" class="btn btn-default btn-block">
	  <span class="glyphicon glyphicon-edit"></span> Enviar
	</button>

	</form>
</div>
