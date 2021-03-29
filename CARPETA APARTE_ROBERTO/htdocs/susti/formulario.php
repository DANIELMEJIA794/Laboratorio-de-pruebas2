<?php
include ("configuracion.php");
include ("cabeza.php");
?>
<table  bgcolor="#DCDCDC" width="100%">
<tr><td>
<div align="center">
<table bgcolor="#D8F5D8" cellspacing="10" cellpadding="10">
<td>
<font face="arial" color="green"><h2>FORMULARIO DE INGRESO DE DATOS</h2></font>
<form action="ingresar.php" method="post" enctype="multipart/form-data" style="text-align: left">
		<p>Titulo: <input type="text" placeholder="inserte el titulo de la obra" name="titulo" size="25"></p>
		<p>Autor: <input type="text" placeholder="inserte el nombre del autor" name="autor" size="25"></p>
		<p>Año: <input type="text" placeholder="inserte el año" name="ano" size="25"></p>
		<p>Categoria: <select name="categoria"></p>
		<option value="literatura">Literatura</option>
		<option value="historia">Historia</option>
		<option value="deportes">Deportes</option>
		<option value="infantil">Infantil</option>
		</select><br>
		<p>Caratula: <input type="file" name="caratula" size=25></p>
		<p>Resumen: <br> <textarea placeholder="inserte el resumen" name="resumen" cols="50" rows="6"></textarea><br></p>
		<input type="submit" value="Ingresar Datos" size=25>
		</form>
		</td>
</tr></td>
</table>
</table>
</div>

<?php
include ("pie.php");
?>