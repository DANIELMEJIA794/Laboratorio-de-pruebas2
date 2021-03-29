<?php

include ("configuracion.php");
include ("encabezado.php");
?>

<?php
	 if (isset($_GET["termino"])) $termino = $_GET["termino"];

	$sql = "SELECT * FROM destinos WHERE nombre_hotel LIKE '%".$termino."%' OR departamento LIKE '%".$termino."%'";
	
	echo '<br>';
	echo '<h2>Buscando: <font color="#007fad">'.$termino.'</font></h2>';
	
	echo '<table width="70%">';

	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0) 
	{
		while($row=mysqli_fetch_assoc($result))
		{ 
		echo '<tr><td width="300" align="center">';
		echo '<a href="main.php?id='.$row["id"].'"><img src="imagenes/'.$row["caratula_hotel"].'"width="250"></a></td>';
		echo '<td><b>'.$row["nombre_hotel"].'</b>';
		echo '<br>';
		echo $row["departamento"];
		echo '<br>';
		echo $row["nombre_lugar"];
		echo '</td>';
		echo '</tr>';
		echo '<tr><td colspan="2">';
		echo '<hr>';
		echo '</td></tr>';
		}
	}

	else {
		echo 'No se encontraron resultados';
	}

echo '</table>';
echo '<br>';

include ("piedepagina.php");
?>
