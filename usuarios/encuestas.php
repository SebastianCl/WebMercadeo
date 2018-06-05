<div  class="container page-header text-center">
 <p>
 	<h3>Encuesta Cliente</h3>
 </p>
</div>

<div class="container">

<form action='clases/InsertarEncuestas.php'  method='post'>

		<div>
		1. Consume productos cárnicos embutidos:
		<select class="form-control" onchange="Ocultar(this);" name="txtrespuesta1" >
			<option>Si</option>
			<option>No</option>
		</select>

		</div>	<br><br>
		<div class="frm" id="frm">

			<div>
				2. Cuáles de los siguientes productos consume: 
				<select class="form-control" name="respuesta2">
					<option>Chorizo</option>
					<option>Mortadela</option>
					<option>Salami</option>
					<option>Costilla</option>
					<option>Salchicha</option>
					<option>Salchichón </option>
				</select>
		    </div>	<br><br>
		    <div>
				3. Con qué frecuencia consume estos productos:
				<select class="form-control" name="respuesta3">
					<option>Diariamente</option>
					<option>Entre una y tres veces por semana</option>
					<option>Entre cuatro y seis veces por semana</option>
					<option>Una vez al mes</option>
					<option>Más de una vez al mes</option>
				
				</select>
		    </div><br><br>
		    <div>
				4. Cuál es la presentación que más le gusta o le gustaría encontrar en los productos cárnicos embutidos que consume: 
				<select class="form-control" name="respuesta4">
					<option>Por unidad.</option>
					<option>250 gr (1/2 libra) </option>
					<option>500 gr (1 libra) </option>
					<option>750 gr (1 1/2 libra) </option>
					<option>1000 gr (1 kilo)  </option>
				
				</select>
		    </div><br>
		     <div>
		     			<div style="border: 1px solid #000; padding: 10px;">
				5. Cuál de las siguientes variables considera es la más importante para usted, a la hora de adquirir un embutido cárnico. Enumérelas de 1 a 5, donde 1 es la menos importante y 5 es la más importante.
					<br><br>		
						<label> Precio </label><input type="number" min="1" max="5" name="respuesta5">
						<label> Sabor </label><input type="number" min="1" max="5" name="respuestasabor">
						<label> Calidad </label><input type="number" min="1" max="5" name="respuestacalidad">
						<label> Presentación en gramos </label><input type="number" min="1" max="5" name="respuestagramos">
						<label> Empaque </label><input type="number" min="1" max="5" name="respuestaempaque">

				</div>	
		    </div><br><br>
		    <div>
				6. Seleccione el establecimiento habitual de su compra. 
				 <select class="form-control" id="ddlCiudad" name="respuesta6">
				 		<option>Medellin - sede uno</option>
				 		<option>Medellin - sede Dos</option>
				 		<option>Bogota - sede uno</option>
				 		<option>Bogota - sede Dos</option>
				 </select>
				</div>
			<br><br>
				<div>
				7. Cuál es la forma en la que le gusta o le gustaría adquirir los productos cárnicos embutidos
				<select class="form-control" name="respuesta7">
					<option>En el punto de compra habitual.</option>
					<option> Domicilio, solicitado telefónicamente al punto habitual de compra </option>
					<option>Domicilio, solicitado a través de página web </option>
					<option>En almacén de cadena (grandes superficies) </option>

				</select>

		    </div>
		    <br><br>
		     <div>
				8. Le gustaría recibir ofertas e información de nuestra compañía, especialmente relacionada con campañas promocionales: 
				<select class="form-control" name="respuesta8">
				<option>Si</option>
				<option>No</option>
				</select>
				<br><br>
				<input type="submit" value="Ingresar" name="btnIngresarF" class="btn btn-success btn-block">
		    </div>
			<br><br>
</form>

