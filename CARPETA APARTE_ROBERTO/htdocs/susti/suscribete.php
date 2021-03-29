<?php
include ("configuracion.php");
include ("cabeza.php");
?>
<br><br>
<div align="center">
<table>
<td>
<font face="arial" color="green"><h1>FORMULARIO DE SUSCRIPCIÓN</h1></font>
<form action="llenar.php" method="post" style="text-align: left">
				<p>Nombres: <input type="text" name="nombres" size="45"></p>
				<p>Apellido Paterno: <input type="text" name="apellido_paterno" size="45"></p>
				<p>Apellido Materno: <input type="text" name="apellido_materno" size="45"></p>
					Sexo:<p><input type="radio" value="femenino" checked name="sexo">Femenino</p>
						 <p><input type="radio" name="sexo" value="masculino">Masculino</p>
				<p>Comentarios:<br>				
					<textarea rows="6" name="comentarios" cols="52"></textarea></p>
				<p>Status: <select size="1" name="status"></p>
					<option>Estudiante</option>
					<option>Profesional</option>
					<option>Empleado</option>
					<option>Otros</option>
					</select></p>
				<p>Correo electrónico: <input type="text" name="correo_electronico" size="45"></p>	
				<p><input type="submit" value="Suscribirse"></p>
				</form>
				</td>
				</table>
</div>
<?php
include ("pie.php");
?>