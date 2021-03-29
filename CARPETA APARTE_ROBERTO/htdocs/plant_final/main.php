<?php 
include ("encabezado.php");
include ("configuracion.php");

if(isset($_GET['id'])) 
$id = $_GET['id'];

$sql = "SELECT * FROM destinos WHERE id = '$id' ";

echo '<table width="100%" bgcolor="#DCDCDC" cellpadding="5">';
echo '<tr><td><br>';

	$result = mysqli_query($conn, $sql);     
		if (mysqli_num_rows($result) > 0) 
		{	
			while($row = mysqli_fetch_assoc($result)){

				echo '<table bgcolor="white" align="center" width="80%" cellpadding="10" cellspacing="10">';
				echo '<tr>';
				echo '<td width="300" valign="top" align="center"><img src="imagenes/'.$row["caratula_hotel"].'" width="300">';
				echo '</td>';
				echo '<td width="450">';
				echo '<h2>'.$row["nombre_hotel"].'</h2><hr>';
				echo '<p>'.$row["nombre_lugar"].'<br>'.$row["departamento"].'</p><hr>';
				echo '<p style="text-align:justify;">'.$row["descripcion_hotel"].'</p></td>';	
				
				echo '<td><table cellpadding="10" bgcolor="" width="100%">';
				echo '<tr><td bgcolor="#D8F5D8"><p><strong>Precio</strong></p><p><font color="#347234" size="5"><strong>S/ '.$row["precios"].'</strong></font> / noche</p></td></tr>';
				echo '<tr><td align="center"><button class="button">Reservar</button></td></tr>';
				echo '</table></td></tr>';

				echo '<tr><td colspan="3"><hr><strong>Ubicación</strong></td></tr>';
				echo '<tr><td colspan="3" align="center"><img src="imagenes/'.$row["ubicacion_hotel"].'"></td></tr>';
				echo '</table>';
			}
		}

echo '<br></td></td>';
echo '</table>';

include ("piedepagina.php");
?>
