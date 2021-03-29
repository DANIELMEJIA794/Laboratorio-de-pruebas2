<?php
include ("configuracion.php");
include ("cabeza.php");

?>
	<table border="1" bgcolor="#DCDCDC" width="100%" align="center" cellpadding="10">
	<tr><td><h1><font face="Helvetica" color="#007fad"> Modificar datos</font></h1></td></tr>
	<tr><td>

		<table border="1" bgcolor="#D8F5D8" align="center" width="70%" cellpadding="10">
			<tr>

<?php

$sql = "select * from l19030111 ";	
	
	$result = mysqli_query($conn, $sql);     
	if (mysqli_num_rows($result) > 0) 
	{	
		while($row = mysqli_fetch_assoc($result))
			{
				echo'<td width="150"><img src="'.$row["caratula"]. '"width="150"></td>';
				echo '<td width="250">'.$row["titulo"] .'</td>';
				echo '<td width="150">'.$row["autor"].'</td>';
				echo '<td align="center"><a href="actualizar.php?id='.$row["id"].'"><img src="actualizar.png" height="30" width="30"></a>
					<a href="borrar.php?id='.$row["id"].'"><img src="BORRAR.png" height="30" width="30"></a>';
				echo '</td>';
				echo '</tr>';
				echo '<tr width="2"><td colspan="4"><hr></td></tr>';
			}
		}
		echo '</table>';
		echo '</td></tr>';
echo '</table>';
include ("pie.php");
?>