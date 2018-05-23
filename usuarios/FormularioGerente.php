<div  class="container page-header text-center">
 <p>
 	<h2>Registrar Gerente</h2>
 </p>
</div>

<div class="container">

	<form action='clases/Registro_Gerente.php' method='post'>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-user"></span>
			</span>
					<input  class="form-control" id="usuario_gerente" name="usuario_gerente" type="text" placeholder="Nombre de usuario" required="true">
		</div>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-asterisk"></span>
			</span>
					<input  class="form-control" id="clave_gerente" name="clave_gerente" type="password" placeholder="Clave" required="true">
		</div>


		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-copyright-mark"></span>
			</span>
					<input  class="form-control" id="idGerente" name="idGerente" type="number" min="0" placeholder="Identificacion" required="true">
		</div>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-user"></span>
			</span>
					<input class="form-control" id="nombre_gerente" name="nombre_gerente" type="text 	" placeholder="Nombre" required="true">
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
