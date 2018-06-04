<div  class="container page-header text-center">
 <p>
 	<h2>Edición de Ventas</h2>
 </p>
</div>
<h4>Seleccione los productos que ha vendido y especifique la cantidad</h4>
<div class="container">

	<form action='clases/EditarVentas.php' method='post'>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-ok"></span>
			</span>
					<input type="checkbox" name="A1" value="A1"> Chorizo 300 gr<br/>
					<input id="cantA1" name="cantA1" type="number" placeholder="Ingrese la cantidad vendida" required="true" min="0" value="0">

			<span class="input-group-addon">
				<span class="glyphicon glyphicon-ok"></span>
			</span>
					<input type="checkbox" name="A2" value="A2"> Chorizo 500 gr<br/>
					<input id="cantA2" name="cantA2" type="number" placeholder="Ingrese la cantidad vendida" required="true" min="0"  value="0">
		</div>
		<br>
		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-ok"></span>
			</span>
					<input type="checkbox" name="B1" value="B1"> Mortadela 250 gr<br/>
					<input id="cantB1" name="cantB1" type="number" placeholder="Ingrese la cantidad vendida" required="true" min="0"  value="0">

			<span class="input-group-addon">
				<span class="glyphicon glyphicon-ok"></span>
			</span>
					<input type="checkbox" name="B2" value="B2"> Mortadela 500 gr<br/>
					<input id="cantB2" name="cantB2" type="number" placeholder="Ingrese la cantidad vendida" required="true" min="0"  value="0">
		</div>
		<br>
		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-ok"></span>
			</span>
					<input type="checkbox" name="C1" value="C1"> Salami 50 gr<br/>
					<input id="cantC1" name="cantC1" type="number" placeholder="Ingrese la cantidad vendida" required="true" min="0"  value="0">

			<span class="input-group-addon">
				<span class="glyphicon glyphicon-ok"></span>
			</span>
					<input type="checkbox" name="C2" value="C2"> Salami 150 gr<br/>
					<input id="cantC2" name="cantC2" type="number" placeholder="Ingrese la cantidad vendida" required="true" min="0"  value="0">
		</div>
		<br>
		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-ok"></span>
			</span>
					<input type="checkbox" name="D1" value="D1"> Costilla 500 gr<br/>
					<input id="cantD1" name="cantD1" type="number" placeholder="Ingrese la cantidad vendida" required="true" min="0"  value="0">

			<span class="input-group-addon">
				<span class="glyphicon glyphicon-ok"></span>
			</span>
					<input type="checkbox" name="D2" value="D2"> Costilla 1000 gr<br/>
					<input id="cantD2" name="cantD2" type="number" placeholder="Ingrese la cantidad vendida" required="true" min="0"  value="0">
		</div>
		<br>
		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-ok"></span>
			</span>
					<input type="checkbox" name="E1" value="E1"> Morcilla 250 gr<br/>
					<input id="cantE1" name="cantE1" type="number" placeholder="Ingrese la cantidad vendida" required="true" min="0"  value="0">

			<span class="input-group-addon">
				<span class="glyphicon glyphicon-ok"></span>
			</span>
					<input type="checkbox" name="E2" value="E2"> Morcilla 500 gr<br/>
					<input id="cantE2" name="cantE2" type="number" placeholder="Ingrese la cantidad vendida" required="true" min="0"  value="0">
		</div>
		<br>
		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-ok"></span>
			</span>
					<input type="checkbox" name="F1" value="F1"> Salchicha 250 gr<br/>
					<input id="cantF1" name="cantF1" type="number" placeholder="Ingrese la cantidad vendida" required="true" min="0"  value="0">

			<span class="input-group-addon">
				<span class="glyphicon glyphicon-ok"></span>
			</span>
					<input type="checkbox" name="F2" value="F2"> Salchicha 500 gr<br/>
					<input id="cantF2" name="cantF2" type="number" placeholder="Ingrese la cantidad vendida" required="true" min="0"  value="0">
		</div>
		<br>
		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-ok"></span>
			</span>
					<input type="checkbox" name="G1" value="G1"> Salchichón 250 gr<br/>
					<input id="cantG1" name="cantG1" type="number" placeholder="Ingrese la cantidad vendida" required="true" min="0"  value="0">

			<span class="input-group-addon">
				<span class="glyphicon glyphicon-ok"></span>
			</span>
					<input type="checkbox" name="G2" value="G2"> Salchichón 500 gr<br/>
					<input id="cantG2" name="cantG2" type="number" placeholder="Ingrese la cantidad vendida" required="true" min="0"  value="0">
		</div>
	<br/>
	<button type="submit" class="btn btn-danger btn-block">
	  <span class="glyphicon glyphicon-edit"></span> Registrar venta
	</button>

	</form>
</div>
<div  class="container page-header text-center">
 <p>
 	<h2>Actualizar registro</h2>
 </p>
</div>
