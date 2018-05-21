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
					<input  class="form-control" id="idCliente" name="idCliente" type="text" placeholder="Identificacion" required="true">		
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-lock"></span>
			</span>		
					<input class="form-control" id="nombre" name="nombre" type="password" placeholder="Nombre" >			
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
					<input class="form-control" id="direccion" name="direccion" type="text" placeholder="Direccion">		
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>			
					<input class="form-control" id="telefono" name="telefono" type="text" placeholder="Telefono" required="true">		
		</div>		

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>			
					<input class="form-control" id="email" name="email" type="email" placeholder="Email"required="true">		
		</div>	

		

			

	<button type="submit" class="btn btn-default btn-block">
	  <span class="glyphicon glyphicon-send"></span> Enviar 
	</button>

	</form>		
</div>

