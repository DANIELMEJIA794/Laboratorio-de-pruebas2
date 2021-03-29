<?php 
include ("encabezado.php");
include ("configuracion.php");

if(isset($_GET['codigo'])) $codigo = $_GET['codigo'];

$sql = "SELECT * FROM usuarios WHERE codigo = '$codigo' ";

echo '<table width="100%" bgcolor="#DCDCDC" cellpadding="5">';
echo '<tr><td><br>';

	$result = mysqli_query($conn, $sql);     
		if (mysqli_num_rows($result) > 0) 
		{	
			while($row = mysqli_fetch_assoc($result)){

				echo '<table bgcolor="white" align="center" width="70%" cellpadding="10" cellspacing="10">';
				echo '<tr>';
				echo '<td width="200" align="center" valign="top"><img src="imagenes/user.png" width="200"></td>';
				echo '<td width="450">';
				echo '<h2>'.$row["nombre"].' '.$row["apellido"].'</h2>';
				echo $row["codigo"].'<hr>';
				echo '<p style="text-align:justify;">'.$row["correo"].'</p></td>';	
				echo '<tr><td colspan="3"><hr></td></tr>';
				echo '</table>';
			}
		}

echo '<br></td></td>';
echo '</table>';

include ("piedepagina.php");
?>
