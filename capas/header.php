
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
<!-------------------------------------------------------------------------------------------------------->
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

if (!isset($_SESSION["Session"]) && !isset($_SESSION["Login1"])) {?>
					<a href="?menu=ingreso"><span class="glyphicon glyphicon-log-in"></span>
						Ingresar
					</a>
							<?PHP }?>
				</li>
<!-------------------------------------------------------------------------------------------------------->
	<li>
		<?php

if ($_COOKIE["rol"] == "A" && isset($_SESSION["Session"])) {?>
		<a href="?menu=menuAdmin"><span class="glyphicon glyphicon-tasks"></span>
			Menu
		</a>
		<?PHP }?>
	</li>

<!-------------------------------------------------------------------------------------------------------->

	<li>
		<?php

if (isset($_SESSION["Session"])) {
    ?>
		<a href="#"><span class="glyphicon glyphicon-time"></span>
		<?PHP
echo $_COOKIE["admin"]; ?>
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
	<li>
		<?php

if (isset($_SESSION["Login1"])) {?>
		<a href="#"><span class="glyphicon glyphicon-user"></span>
			Administrador
		</a>
		<?PHP }?>
	</li>

<!-------------------------------------------------------------------------------------------------------->
	<li>
		<?php

if (isset($_SESSION["Login1"])) {?>
		<a href="?menu=crearBD"><span class="glyphicon glyphicon-user"></span>
			Crear Base de datos
		</a>
		<?PHP }?>
	</li>
<!-------------------------------------------------------------------------------------------------------->



			</ul>
	</div>
</nav>