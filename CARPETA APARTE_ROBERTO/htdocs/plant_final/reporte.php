
<?php
include ("configuracion.php");
include ("encabezado.php");
?>

<table bgcolor="#d1d2e7" width="100%" align="center" cellpadding="10">
	<tr><td><h1><font face="Helvetica" color="#007fad"> Modificar datos</font></h1></td></tr>
	<tr><td>

		<table bgcolor="#D8F5D8" align="center" width="70%" cellpadding="10">
			<tr>

<?php

$sql = "select * from destinos ";	
	
	$result = mysqli_query($conn, $sql);     
	if (mysqli_num_rows($result) > 0) 
	{	
		while($row = mysqli_fetch_assoc($result))
			{
				echo'<td width="150"><img src="imagenes/'.$row["caratula_hotel"]. '"width="150"></td>';
				echo '<td width="250">'.$row["nombre_hotel"] .'</td>';
				echo '<td width="150">'.$row["departamento"].'</td>';
				echo '<td width="150">S/ '.$row["precios"].'</td>';
				echo '<td align="center"><a href="modificar.php?id='.$row["id"].'"><img src="imagenes/actualizar.png" height="30" width="30"></a>
					<a href="borrar.php?id='.$row["id"].'"><img src="imagenes/borrar.png" height="30" width="30"></a>';
				echo '</td>';
				echo '</tr>';


			}
		}
		echo '</table>';
		echo '<br>';
	echo '</td></tr>';
echo '</table>';
echo '<br>';

include ("piedepagina.php");
?>