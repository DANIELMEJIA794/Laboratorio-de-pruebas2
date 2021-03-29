<?php 
include ("encabezado.php");
include ("configuracion.php");

if(isset($_GET['departamento'])) $departamento = $_GET['departamento'];

$sql = "SELECT * FROM destinos WHERE departamento = '$departamento' ";

echo '<table width="100%" bgcolor="#CCCEE5"><tr><td>';

$result = mysqli_query($conn, $sql);     
$row = mysqli_fetch_assoc($result);
	echo '<br>';
	echo '<table width="80%" align="center">';
		echo '<tr><td align="center"><img src="imagenes/'.$row["caratula_lugar"].'" width="600"><br>';
			echo '<p><strong>'.$row["nombre_lugar"].'</strong></p>';
			echo '</td></tr>';
			echo '<tr><td width="450"><h1>'.$row["departamento"].'</h1><hr></tr>';
			echo '<tr><td>';
			echo '<table align="center" width="90%" cellpadding="10" cellspacing="10" bgcolor="#D8F5D8"><tr><td><p style="text-align:justify;">'.$row["descripcion_lugar"].'</p></td></tr></table>';
			echo '</tr>';
			echo '<tr></tr>';
	echo '<tr><td>';

$result = mysqli_query($conn, $sql);     
	if (mysqli_num_rows($result) > 0) 
	{	
		while($row = mysqli_fetch_assoc($result)){

			echo '<table bgcolor="#D8F5D8" align="center" cellspacing="10" cellpadding="10" width="70%">';
			echo '<tr><td width="250">';
			echo '<a href="main.php?id='.$row["id"].'"><img src="imagenes/'.$row["caratula_hotel"].'" width="200"></a></td>';
			echo '<td><strong> '.$row["nombre_hotel"].'</strong><br>';
			echo 'S/ '.$row["precios"];
			echo '<br></td>';
			echo '</tr>';
			echo '</table>';

			}
		}
echo '</td></tr>';
echo '</table>';

echo '</td></tr></table>';

include ("piedepagina.php");
?>

