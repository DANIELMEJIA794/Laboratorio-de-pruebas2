<html>
<head>
	<title>Base de datos</title>
	<?php
	include ("cabeza_java.php");
	if (isset($_REQUEST["termino"])) $palabra_buscada = $_REQUEST["termino"];
	function verpalabra($palabra_buscada) {
	echo '<h1>Este es el termino a buscar: <font color="red">'.$palabra_buscada.'</font></h1>';
}
	?>
<?php
verpalabra($palabra_buscada);
$sql = "select * bibliotecas where Autor Like '%".$palabra_buscada."%'";	
	echo '<table>';
	$result = mysqli_query($conn, $sql);     
	if (mysqli_num_rows($result) > 0) 
	{	
		while($row = mysqli_fetch_assoc($result))
			{
			echo '<tr>';
			echo '<td><img src="imagenes/'.$row["Portada"].'" width="100">.'
			echo '<td valign="top"><strong>Titulo:</strong>'.$row["Título"].'<br>'
			echo '<strong>Resumen:</strong>'.$row["Alumno"].'</td>';
			echo '<tr><td colspan="3"><hr>';
			} 
  	}	
	include ("pie_java.php")
	
?>