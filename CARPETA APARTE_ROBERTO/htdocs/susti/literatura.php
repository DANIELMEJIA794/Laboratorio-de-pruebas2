<?php
include ("configuracion.php");
include ("cabeza.php");

if (isset($_REQUEST["categoria"])) $categoria = $_REQUEST["categoria"]; 
 $sql = "select * from l19030111 WHERE categoria = '".$categoria."'";	

echo '<table width="100%" bgcolor="#DCDCDC"><tr><td>';
	echo '<tr><td><br><br>';
$result = mysqli_query($conn, $sql);     
	if (mysqli_num_rows($result) > 0) 
	{	
		while($row = mysqli_fetch_assoc($result)){

			echo '<table bgcolor="#D8F5D8" align="center" cellspacing="10" cellpadding="10" width="70%">';
			echo '<tr><td width="250">';
			echo '<a href="ver.php?id='.$row["id"].'"><img src="'.$row["caratula"].'" width="200"></a></td>';
			echo '<td><strong>Título:</strong> '.$row["titulo"].'<br><br>';
			echo '<b>Autor:</b> '.$row["autor"].'<br><br>';
			echo '<b>Año:</b> '.$row["ano"];
			echo '<br></td>';
			echo '</tr>';
			echo '<tr><td colspan="2"><hr></td></tr>';
			echo '</table>';
			}
		}
echo '<br><br></td></tr>';
echo '</table>';

echo '</td></tr></table>';

include ("pie.php");
?>

