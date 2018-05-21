<div  class="container page-header text-center">
 <p>
 	<h2>Registro de Tenderos</h2>
 </p> 
</div>

<div class="container">
	
	<form action='clases/Registro_Tenderos.php' method='post'>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-user"></span>	
			</span>		
					<input  class="form-control" id="idTendero" name="idTendero" type="text" placeholder="Identificacion" required="true">		
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-lock"></span>
			</span>		
					<input class="form-control" id="clave" name="clave" type="password" placeholder="Contraseña" >			
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>			
					<input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre Completo" required="true">		
		</div>		

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>			
					<input class="form-control" id="Cuidad" name="Cuidad" type="text" placeholder="Cuidad">		
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>			
					<input class="form-control" id="Direccion" name="Direccion" type="text" placeholder="Direccion" required="true">		
		</div>		

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>			
					<input class="form-control" id="Telefono" name="Telefono" type="text" placeholder="Telefono">		
		</div>	

			

	<button type="submit" class="btn btn-default btn-block">
	  <span class="glyphicon glyphicon-send"></span> Enviar 
	</button>

	</form>		
</div>

