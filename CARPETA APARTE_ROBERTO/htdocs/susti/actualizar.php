<?php 
include("cabeza.php");
include ("configuracion.php");
if(isset($_REQUEST["id"])) $id = $_REQUEST["id"];

$sql = "select * from l19030111 WHERE id = '".$id."'";

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
				<img src="'.$row["caratula"].'" width="300">
			</td>
			<td>
				<form method="get" action="modificar.php">
					<br><p>Titulo<br> <input type="text" name="titulo" value="'.$row["titulo"].'"></p>
					<p>ID <input type="hidden" name="id" value="'.$row["id"].'"></p>
					<p>Autor<br><input type="text" name="autor" value="'.$row["autor"].'"></p>
					<p>Año<br><input type="text" name="ano" value="'.$row["ano"].'"></p>
					<p>Resumen<br> <textarea rows="8" cols="50" name="resumen">'.$row["resumen"].'</textarea></p>
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
			
include ("pie.php");
?>