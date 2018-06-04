
<div  class="container page-header text-center">
 <p>
 	<br>
 	<h2>Ingreso</h2>
 </p>
</div>

<div class="container">

	<form action='?menu=form_ingreso' method='post'>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-user"></span>
			</span>
					<input  class="form-control" id="usuario" name="usuario" type="text" placeholder="Usuario" required="true">
		</div>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-asterisk"></span>
			</span>
					<input class="form-control" id="clave" name="clave" type="password" placeholder="Contraseña" required="true">
		</div>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-map-marker"></span>
			</span>
					<input class="form-control" id="ciudad_local" name="ciudad_local" type="text" placeholder="Ciudad Local"required="true">
		</div>

	<button type="submit" class="btn btn-default btn-block">
	  <span class="glyphicon glyphicon-send"></span> Enviar
	</button>

	</form>
</div>
