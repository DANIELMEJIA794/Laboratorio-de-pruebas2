<?php
include ("configuracion.php");
include ("encabezados/encabezado.php");
?>

<form action="ingresar.php" method="post"  enctype="multipart/form-data" >

<input type="text" name="pelicula">
<input type=file name=portada size=25>
	
	

<input type="submit" value="Ingresar">

</form>
<?php
include ("encabezados/piedepagina.php");
?>