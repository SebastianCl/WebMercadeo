
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">

		</div>
			<!-- Botones a la izquierda, en la barra de navegación. -->
			<ul class="nav navbar-nav">
<!-------------------------------------------------------------------------------------------------------->
				<li li class="active">
					<a class="navbar-brand" href="?menu=inicio">
					<span class="glyphicon glyphicon-apple" aria-hidden="true" ></span>
					Inicio
					</a>
				</li>
<!------------------------------------------------------------------------------------------------------->
				<li li class="active">
						<?php

if (isset($_SESSION["Session"])) {
    ?>
						<a href="#"><span class="glyphicon glyphicon-info-sign"></span>
							<?php
echo "Ciudad Local: " . $_COOKIE["ultima_ciudad"];
    ?>
						</a>
						<?PHP }?>
					</li>
<!---------------------------------------------------------------------------------------------------->
				<li>
						<?php

if (isset($_SESSION["Session"])) {
    ?>
						<a href="?menu=inicio"><span class="glyphicon glyphicon-info-sign"></span>
							<?php
echo $_COOKIE["nombre_usuario"] . " | " . $_COOKIE["ciudad_usuario"] . " | " . $_COOKIE["barrio_usuario"];
    ?>
						</a>
						<?PHP }?>
					</li>
<!-------------------------------------------------------------------------------------------------------->
			</ul>

			<!-- Botones a la derecha, en la barra de navegación. -->
			<ul class="nav navbar-nav navbar-right">

<!-------------------------------------------------------------------------------------------------------->
				<li>
					<?php

if (!isset($_SESSION["Session"])) {?>
					<a href="?menu=ingreso"><span class="glyphicon glyphicon-log-in"></span>
						Ingresar
					</a>
							<?PHP }?>
				</li>
<!-------------------------------------------------------------------------------------------------------->
	<li>
		<?php

if (isset($_COOKIE["rol"]) && $_COOKIE["rol"] == "A" && isset($_SESSION["Session"])) {?>
		<a href="?menu=menuAdmin"><span class="glyphicon glyphicon-tasks"></span>
			Menu
		</a>
		<?PHP }?>
	</li>

<!-------------------------------------------------------------------------------------------------------->
	<li>
		<?php

if (isset($_COOKIE["rol"]) && $_COOKIE["rol"] == "C" && isset($_SESSION["Session"])) {?>
		<a href="?menu=consultarProductos"><span class="glyphicon glyphicon-th-list"></span>
			Productos
		</a>
		<?PHP }?>
	</li>

<!-------------------------------------------------------------------------------------------------------->
	<li>
		<?php

if (isset($_COOKIE["rol"]) && $_COOKIE["rol"] == "C" && isset($_SESSION["Session"])) {

    ?>
		<a href="?menu=encuesta"><span class="glyphicon glyphicon-list-alt"></span>
			Encuesta
		</a>
		<?PHP }
?>
	</li>

<!-------------------------------------------------------------------------------------------------------->
	<li>
		<?php

if (isset($_COOKIE["rol"]) && $_COOKIE["rol"] == "T" && isset($_SESSION["Session"])) {?>
		<a href="?menu=menuTendero"><span class="glyphicon glyphicon-tasks"></span>
			Menu
		</a>
		<?PHP }?>
	</li>
<!-------------------------------------------------------------------------------------------------------->

	<li>
		<?php

if (isset($_COOKIE["rol"]) && ($_COOKIE["rol"] == "G" || $_COOKIE["rol"] == "R") && isset($_SESSION["Session"])) {?>
		<a href="?menu=Estadistica"><span class="glyphicon glyphicon-list-alt"></span>
			Estadistica
		</a>
		<?PHP }?>
	</li>
<!---------------------------------------------------------------------------------------------------->

	<li>
		<?php

if (isset($_SESSION["Session"])) {
    ?>
		<a href="#"><span class="glyphicon glyphicon-time"></span>
		<?PHP
echo $_COOKIE["ultima_fecha"];
    ?>
		</a>
		<?PHP }?>
	</li>



<!-------------------------------------------------------------------------------------------------------->

		<li>
			<?php

if (isset($_SESSION["Session"])) {
    ?>
		<a href="#"><span class="glyphicon glyphicon-user"></span>
			<?php

    switch ($_COOKIE["rol"]) {
        case 'A':
            echo "Administrador";
            break;
        case 'T':
            echo "Tendero";
            break;
        case 'C':
            echo "Cliente";
            break;
        case 'G':
            echo "Gerente";
            break;
        case 'R':
            echo "Representante";
            break;
    }
    ?>
		</a>
		<?PHP }?>
		</li>
<!-------------------------------------------------------------------------------------------------------->

	<li>
		<?php

if (isset($_SESSION["Session"])) {?>
	<a href="?menu=cerrar"><span class="glyphicon glyphicon-off"></span>
		Cerrar Session
	</a>
	<?PHP }?>
	</li>
<!-------------------------------------------------------------------------------------------------------->



			</ul>
	</div>
</nav>