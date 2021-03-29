<?php 
include ("encabezado.php");
include ("configuracion.php");
?>

<table width="100%" align="center" bgcolor="#DCDCDC" cellpadding="10">
	<tr><td>
	<h1><font face="Helvetica" color="#007fad">Ingresar datos</font></h1>
	<table bgcolor="white" align="center" width="60%" cellpadding="10" cellspacing="10">
		<tr>
			<td>
				<form method="post" action="ingresar2.php" enctype="multipart/form-data">
					<p><b>Nombre del hotel:</b><br> <input type="text" name="nombre_hotel" placeholder="inserte el nombre del hotel" size=37></p>
					<p><b>Ubicación del hotel: </b><br><input type="file" name="ubicacion_hotel" size=25></p>
					<p><b>Portada del hotel:</b> <br><input type="file" name="caratula_hotel" size=25></p>
					<p><b>Departamento: </b><select name="departamento"></p>
						<option value="Huánuco">Huánuco</option>
						<option value="Amazonas">Amazonas</option>
						<option value="Arequipa">Arequipa</option>
						<option value="Chachapoyas">Chachapoyas</option>
						</select><br>
					<p><b>Lugar turístico:</b><br><input type="text" name="nombre_lugar" placeholder="inserte el nombre del lugar turístico" size=37></p>
					<p><b>Portada del lugar turístico:</b> <br><input type="file" name="caratula_lugar" size=25></p>
					<p><b>Precio </b><br> <input type="text" name="precios" placeholder="inserte el precio"></p>
					<p><b>Descripción del hotel </b><br> <textarea name="descripcion_hotel" cols="80" placeholder="inserte la descripción del hotel" rows="6"></textarea><br></p>
					<p><b>Descripción del lugar </b><br> <textarea name="descripcion_lugar" placeholder="inserte la descripción del lugar turístico" cols="80" rows="6"></textarea><br></p>
					<button class="button" type="submit" name="submit">Enviar</button>
				</form>
			</td>
		</tr>
	</table>


</td></tr>
</table>

<?php
include ("piedepagina.php");
?>