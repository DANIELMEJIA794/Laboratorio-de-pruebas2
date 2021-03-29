<?php
include ("cabeza.php");
/*Mi primera página php, Roberto Irrazabal*/
?>
	<tr>
		<td>
		<h2><br>FICHA DE INSCRIPCIÓN</h2>
<table border="0" width="0%">
	<tr>
	    <form method="POST" action= "resultado.php"> 
		<td width="128" valign="top">Nombre</td>
		<td><p><input type="text" name="nombres" size="60"></p></td>
	</tr>
	<tr>
		<td width="128" valign="top">Apellidos </td>
		<td><input type="text" name="apellidos" size="60"></td>
	</tr>
	<tr>
		<td width="128" valign="top">Tipo de Documento</td>
		<td><p><select size="1" name="tipodedocumento">
			<option>DNI</option>
			<option selected>Carnet de extranjeria</option>
			<option>Pasaporte</option>
			</select></p></td>
	</tr>
	<tr>
		<td width="2" valign="top">Edad</td>
		<td><p><input type="text" name="edad" size="5" tabindex="2"></p></td>
	</tr>
	<tr>
		<td width="128" valign="top">Sexo</td>
		<td><p><input type="radio" name="sexo" value="Femenino" >Femenino</p>
			<p><input type="radio" name="sexo" value="Masculino">Masculino</p></td>
	</tr>
	<tr>
		<td width="128" valign="top">Ciudad</td>
		<td><p><select size="1" name="ciudad">
			<option>Lima</option>
			<option>Huancayo</option>
			<option>Chimbote</option>
			<option>Chiclayo</option>
			<option>Iquitos</option>
			<option>Trujillo</option>
			<option>Callao</option>
			<option>Tacna</option>
			</select></p></td>
	</tr>
	<tr>
		<td width="128" valign="top">Género literario</td>
		<td>
			<p><input type="checkbox" name="genero" value="Dramático">Dramático</p>
			<p><input type="checkbox" name="genero" value="Narrativo">Narrativo</p>
			<p><input type="checkbox" name="genero" value="Lírico">Lírico </p>
		</td>
	</tr>
	<tr>
		<td width="128" valign="top">Comentario</td>
		<td><p><textarea rows="5" name="comentario" cols="49"></textarea></p>
		</td>
	</tr>
	<tr>
		<td width="128" valign="top"></td>
		<td>
			<p align="left"><input type="button" value="ENVIAR" name="ENVIAR"></p>
		</form>
		</td>
	</tr>
</table>
		</td>
	</tr>
</table>
<?php
include ("pie.php");
?>