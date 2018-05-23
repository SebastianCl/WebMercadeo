<div  class="container page-header text-center">
 <p>
 	<h2>Registrar Representante</h2>
 </p>
</div>

<div class="container">

	<form action='clases/Registro_Representante.php' method='post'>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-user"></span>
			</span>
					<input  class="form-control" id="usuario_representante" name="usuario_representante" type="text" placeholder="Usuario del representante" required="true">
		</div>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-asterisk"></span>
			</span>
					<input  class="form-control" id="clave_representante" name="clave_representante" type="password" placeholder="Clave" required="true">
		</div>


		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-copyright-mark"></span>
			</span>
					<input  class="form-control" id="idrepresentante" name="idrepresentante" type="number" min="0" placeholder="Identificacion" required="true">
		</div>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-user"></span>
			</span>
					<input class="form-control" id="nombre_representante" name="nombre_representante" type="text 	" placeholder="Nombre" required="true">
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



	<button type="submit" class="btn btn-default btn-block">
	  <span class="glyphicon glyphicon-edit"></span> Crear Gerente
	</button>

	</form>
</div>
