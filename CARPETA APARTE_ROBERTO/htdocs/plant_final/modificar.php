<?php 
include ("encabezado.php");
include ("configuracion.php");

if (isset($_REQUEST["id"])) $id = $_REQUEST["id"];

$sql = "select * from destinos WHERE id = '$id' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
	{
 while($row = mysqli_fetch_array($result))
 		{
	echo '<table width="100%" bgcolor="#d1d2e7" cellpadding="10" cellspacing="10">
	<tr><td>
	<h1><font face="Helvetica" color="#007fad">Modificar datos</font></h1>
	<table bgcolor="#D8F5D8" align="center" width="80%" cellpadding="10">
		<tr>
			<td width="300" valign="top">
				<img src="'.$row["caratula_hotel"].'" width="300">
			</td>
			<td>
				<form method="get" action="modificar2.php">
					<p>Nombre del hotel<br> <input type="text" name="nombre_hotel" value="'.$row["nombre_hotel"].'"></p>
					<p>ID <input type="hidden" name="id" value="'.$row["id"].'"></p>
					<p>Ciudad<br><input type="text" name="departamento" value="'.$row["departamento"].'"></p>
					<p>Lugar turístico<br><input type="text" name="nombre_lugar" value="'.$row["nombre_lugar"].'"></p>
					<p>Precio<br> <input type="text" name="precios" value="'.$row["precios"].'"></p>
					<p>Descripción<br> <textarea rows="8" cols="50" name="descripcion_hotel">'.$row["descripcion_hotel"].'</textarea></p>
					<button class="button" type="submit" name="submit">Actualizar</button>
				</form>
			</td>
		</tr>
	</table>
	<br><br>


	</td></tr>
	</table>';

}
}

include ("piedepagina.php");
?>