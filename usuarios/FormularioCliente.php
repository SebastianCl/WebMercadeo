<div  class="container page-header text-center">
 <p>
 	<h2>Registro de Clientes</h2>
 </p>
</div>

<div class="container">

	<form action='clases/Registro_Clientes.php' method='post'>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-user"></span>
			</span>
					<input  class="form-control" id="usuario_cliente" name="usuario_cliente" type="text" placeholder="Nombre de usuario" required="true">
		</div>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-asterisk"></span>
			</span>
					<input  class="form-control" id="clave_cliente" name="clave_cliente" type="password" placeholder="Clave" required="true">
		</div>


		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-copyright-mark"></span>
			</span>
					<input  class="form-control" id="idCliente" name="idCliente" type="number" min="0" placeholder="Identificacion" required="true">
		</div>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-user"></span>
			</span>
					<input class="form-control" id="nombre_cliente" name="nombre_cliente" type="text 	" placeholder="Nombre" required="true">
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

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-envelope"></span>
			</span>
					<input class="form-control" id="email" name="email" type="email" placeholder="Email" required="true">
		</div>

		<?php
if (isset($_COOKIE["rol"]) && $_COOKIE["rol"] == "A") {
    echo '		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-user"></span>
			</span>
					<input class="form-control" id="CodTendero" name="CodTendero" type="text" placeholder="Codigo Tendero"required="true">
		</div>	';
}?>




	<button type="submit" class="btn btn-default btn-block">
	  <span class="glyphicon glyphicon-edit"></span> Nuevo Cliente
	</button>

	</form>
</div>

