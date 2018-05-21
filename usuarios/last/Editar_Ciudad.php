<div  class="container page-header text-center">
 <p>
 	<h2>Editar Ciudad</h2>
 </p> 
</div>

<div class="container">
	
	<form action='clases/Editar_ciudad.php' method='post'>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-user"></span>	
			</span>		
					<input  class="form-control" id="id" name="id" type="text" placeholder="Id de la ciudad" required="true">		
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-lock"></span>
			</span>		
					<input class="form-control" id="Ciudad" name="Ciudad" type="text" placeholder="Ingrese la Ciudad" >			
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>			
					<input class="form-control" id="Pais" name="Pais" type="text" placeholder="Ingrese el pais" required="true">		
		</div>		

		<button type="submit" class="btn btn-default btn-block">
	  		<span class="glyphicon glyphicon-send"></span> Editar 
		</button>

	</form>		
</div>