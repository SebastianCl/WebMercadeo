
<br><br><br><br>
<form action="clases/InsertEncuestas.php" method="post">
	<input type="submit" name="btnGuardar" value="Guardar"/><br>
<table>
<tr>
<label for="txtprimerapregunta">Consume productos cárnicos embutidos  </label>
<label for="cborespuesta"></label>
	<select multiple name="r1[]">
		<option value="SI">SI</option>
		<option value="NO">NO</option>
	</select>
	<br>
	<br>
	<label for="txtsegundapregunta"> Cuáles de los siguientes productos consume  </label>
	<label for="cborespuesta"></label>
	<select multiple name="r2[]">
		<option value="SI">SI</option>
		<option value="NO">NO</option>
	</select>
	<br>
	<br>
	<label for="txttercerapregunta">Con qué frecuencia consume estos productos  </label>
	<label for="cborespuesta"></label>
	<select multiple name="r3[]">
		<option value="">Diariamente</option>
		<option value="">Entre una y tres veces por semana. </option>
		<option value="">Entre cuatro y seis veces por semana </option>
		<option value="">Una vez al mes </option>
		<option value="">Más de una vez al mes </option>
	</select>
	<br>
	<br>
	<label for="txtprimerapregunta">Cuál es la presentación que más le gusta o le gustaría encontrar en los productos cárnicos embutidos que consume </label>
	<label for="cborespuesta"></label>
	<select multiple name="r4[]">
		<option value="">Por unidad</option>
		<option value="">250 gr (1/2 libra)</option>
		<option value="">500 gr (1 libra) </option>
		<option value="">750 gr (1 1/2 libra) </option>
		<option value="">1000 gr (1 kilo)  </option>
	</select>
	<br>
	<br>
	<label for="txtprimerapregunta">Cuál de las siguientes variables considera es la más importante para usted, a la hora de adquirir un embutido cárnico. Enumérelas de 1 a 5, donde 1 es la menos importante y 5 es la más importante  </label>
	<label for="cborespuesta"></label>
	<select multiple name="r5[]">
		<option value="">Precio</option>
		<option value="">Sabor</option>
		<option value="">Calidad</option>
		<option value="">Presentacion en Grano</option>
		<option value="">Empaque</option>
	</select>
	<br>
	<br>
	<label for="txtprimerapregunta">Seleccione el establecimiento habitual de su compra  </label>
	<label for="cborespuesta"></label>
	<select multiple name="r6[]">
		<option value="SI">SI</option>
		<option value="NO">NO</option>
	</select>
	<br>
	<br>
	<label for="txtprimerapregunta">Cuál es la forma en la que le gusta o le gustaría adquirir los productos cárnicos embutidos </label>
	<label for="cborespuesta"></label>
	<select multiple name="r7[]">
		<option value="">En el punto de compra habitual</option>
		<option value="">Domicilio, solicitado telefónicamente al punto habitual de compra</option>
		<option value="">Domicilio, solicitado a través de página web</option>
		<option value="">En almacén de cadena (grandes superficies). </option>
	</select>
	<br>
	<br>
	<label for="txtprimerapregunta">Le gustaría recibir ofertas e información de nuestra compañía, especialmente relacionada con campañas promocionales </label>
	<label for="cborespuesta"></label>
	<select multiple name="r8[]">
		<option value="SI">SI</option>
		<option value="NO">NO</option>
	</select>
</form>
