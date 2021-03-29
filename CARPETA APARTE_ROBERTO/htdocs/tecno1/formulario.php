<?php
include ("configuracion.php");
include ("encabezados/encabezado.php");
?>
<font face="arial" color="white">
<h1>Sugerencia</h1>
<form action="ingresar.php" method="post"  enctype="multipart/form-data" >
Pelicula: <input type="text" name="pelicula"><br>
Resumen: <input type="text" name="resumen"><br>
Portada: <input type="file" name="foto" size=25><br>
Tipo<select name="tipo">
<option value="Pelicula">Pelicula</option>
<option value="Serie">Serie</option>
</select><br>
Clasificación<select name="clasificacion">
<option value="Romántica">Romántica</option>
<option value="Terror">Terror</option>
<option value="Ciencia Ficción">Ciencia Ficción</option>
</select><br>
Codigo Alumno <input type="text" name="codigo" value="02924342"><br>
<p><input type="submit" value="Ingresar Datos" size=25>
</form>
</font>


<?php
include ("encabezados/piedepagina.php");
?>