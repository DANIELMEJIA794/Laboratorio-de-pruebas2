<?php
include ("configuracion.php");
include ("cabeza.php");

if (isset($_REQUEST["id"])) $id = $_REQUEST["id"]; 



 $sql = "select * from l19030111 WHERE id = '".$id."'";	
	

echo '<table width="100%" bgcolor="#DCDCDC" cellpadding="5">';
echo '<tr><td><br>';

	$result = mysqli_query($conn, $sql);     
		if (mysqli_num_rows($result) > 0) 
		{	
			while($row = mysqli_fetch_assoc($result)){

				echo '<table bgcolor="white" align="center" width="80%" cellpadding="10" cellspacing="10">';
				echo '<tr>';
				echo '<td width="300" valign="top" align="center"><img src="'.$row["caratula"].'" width="300">';
				echo '</td>';
				echo '<td width="450">';
				echo '<h2>'.$row["titulo"].'</h2><hr>';
				echo '<p><font size="4"><b> Autor: </b></font>'.$row["autor"].'<br><br><font size="4"><b>Año:</b></font> '.$row["ano"].'</p><hr>';
				echo '<font size="4"><b>Descripción:</b></font><br><p style="text-align:justify;">'.$row["resumen"].'</p></td>';	
				echo '<td><table cellpadding="10" bgcolor="" width="100%">';
				echo '<tr><td bgcolor="#D8F5D8" lign="center" valign="top"><p><strong>Sucríbete a nuestro boletín mensual</strong></p>
				<form action="mail.php" method="post">
						<input type="text" name="correodestino" placeholder="Escribe tu correo..." size="35"> <button class="button">Enviar</button></form></td></tr>';
				echo '</table></td></tr>';
				echo '</table>';
			}
		}

echo '<br></td></td>';
echo '</table>';
	


include ("pie.php");
?>