<?php
include ("configuracion.php");
include ("cabeza.php");
// VARIABLES necesario de cambios
//if (isset($_REQUEST["termino"])) $palabra_buscada = $_REQUEST["termino"]; // Metodo Get
if (isset($_POST["termino"])) $palabra_buscada = $_POST["termino"]; // Metodo Post

// FUNCIONES
function verpalabra($palabra_buscada) {
echo '<h1><font color="red">'.$palabra_buscada.'</font></h1>';
}
// --------------------------------------------------------------------

verpalabra($palabra_buscada);

// --------------------------------------------------------------------
	$sql = "select * from l19030111 where titulo Like '%".$palabra_buscada."%' OR autor Like '%".$palabra_buscada."%'";	  	
	
	echo '<table>';
	$result = mysqli_query($conn, $sql);     
	if (mysqli_num_rows($result) > 0) 
	{	
		while($row = mysqli_fetch_assoc($result))
			{
			echo '<tr>';
			echo '<td><img src="'.$row["caratula"].'" width="300"><td>';		
			echo '<td valign="middle"><font color="black" face="arial" size="4"><p><strong>Título:</strong>'.$row["titulo"].'</p>';
			echo '<p><strong>Autor:</strong>'.$row["autor"].'</p>';
			echo '<p><strong>Año:</strong>'.$row["ano"].'</p>';
			echo '<p><strong>Categoria:</strong>'.$row["categoria"].'</p>';
			echo '<p><strong>Resumen:</strong>'.$row["resumen"].'</p>';
			echo '<tr><td colspan="3"><hr></font>';
			echo '</font>';
			} 
  	}
   echo '</table>';	
include ("pie.php");
?>