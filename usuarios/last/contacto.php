
<!-- Nota: Lista de iconos de Bootstrap 
 https://www.w3schools.com/icons/bootstrap_icons_glyphicons.asp
-->
<div  class="container page-header text-center">
 <p>
 	<h2>Formulario de Contacto</h2>
 </p> 
</div>

<div class="container">
	
	<form action='clases/insertar_contacto.php' method='post'>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>			
					<input class="form-control" id="nombres" name="nombres" type="text" placeholder="Nombres" required="true">		
		</div>		


		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>			
					<input class="form-control" id="apellidos" name="apellidos" type="text" placeholder="Apellidos" required="true">		
		</div>		

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-envelope"></span>
			</span>			
					<input class="form-control" id="email" name="email" type="email" placeholder="Email" required="true">	
		</div>		

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-pencil"></span>
			</span>			
				<textarea class="form-control" id="comentarios" name="comentarios" rows="5" placeholder="Comentarios" required="true">	</textarea>
		</div>				


	<button type="submit" class="btn btn-default btn-block">
	  <span class="glyphicon glyphicon-send"></span> Enviar 
	</button>

	</form>		
</div>


