<?php
include ("configuracion.php");
include ("encabezado.php");
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
	$sql = "select * from c19030111 where pelicula Like '%".$palabra_buscada."%' OR resumen Like '%".$palabra_buscada."%' ";	  	
	
	echo '<table>';
	$result = mysqli_query($conn, $sql);     
	if (mysqli_num_rows($result) > 0) 
	{	
		while($row = mysqli_fetch_assoc($result))
			{
			echo '<tr>';
			echo '<td><img src="'.$row["portada"].'" width="300"><td>';		
			echo '<td valign="top"><h2><font color="white" face="arial"><strong>Película:</strong>'.$row["pelicula"].'<br>';
			
			echo '<font color="white" face="arial"><strong>Resumen:</strong>'.$row["resumen"].'</h2></td>';
			echo '<tr><td colspan="3"><hr>';
			} 
  	}	




include ("pie.php");
?>