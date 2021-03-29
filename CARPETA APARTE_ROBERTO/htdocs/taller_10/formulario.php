<?php
include ("configuracion.php");
include ("encabezado.php");
?>
<font face="arial" color="green"><h1>Sugerencias</h1></font>
<form action="ingresar.php" method="post" enctype="multipart/form-data">
		
		<p>Película: <input type="text" name="pelicula"></p>
		<p>Resumen: <br> <textarea name="resumen" cols="80" rows="6"></textarea><br></p>
		<p>Portada: <input type="file" name="portada" size=25></p>
		<p>Tipo:<select name="tipo"></p>
		<option value="Pelicula">Pelicula</option>
		<option value="Serie">Serie</option>
		</select><br>
		<p>Clasificación: <select name="clasificacion"></p>
		<option value="Romántica">Romántica</option>
		<option value="Terror">Terror</option>
		<option value="Ciencia Ficción">Ciencia Ficción</option>
		</Select><br>
		<p>Codigo Alumno <input type="text" name="codigo" ></p><br>
		<p><input type="submit" value="Ingresar Datos" size=25></p>
		</form>

<?php
include ("pie.php");
?>