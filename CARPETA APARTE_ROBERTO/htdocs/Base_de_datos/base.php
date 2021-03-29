<html>
<head>
</head>
<body background="fondo.jpg">
<div align="left"><img src="UNMSM.png" width="600"></div>
<?PHP
$GLOBALS['DB_IP'] = 'localhost';
$GLOBALS['DB_USER'] = 'root';
$GLOBALS['DB_PASS'] = '';
$GLOBALS['DB_NAME'] = 'biblioteca';
$database  = $GLOBALS['DB_NAME'];
$Nombre_de_la_base_de_datos='<u><b>Biblioteca </b></u>';

$mysqli = new mysqli($GLOBALS['DB_IP'], $GLOBALS['DB_USER'],$GLOBALS['DB_PASS'],$GLOBALS['DB_NAME']);
echo '<p align="left"><font size="40" color="BE391A">'. $Nombre_de_la_base_de_datos. '</font></p>';
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$conn =$mysqli;
	$sql = "select * from libros ";	
	$result = mysqli_query($conn, $sql);     
	if (mysqli_num_rows($result) > 0) 
	{	
		while($row = mysqli_fetch_assoc($result))
			{
			echo '<div align="center"><img src="' .$row["Portada"]. '" width="340"></div>';
			echo '<p align="center"><font size="5" color="161617"><b>Titulo:</b></font> ' .'<font size="5" color="1A099F">'.'<b>'.$row["Título"].'</b>'. '</font></p>';
			echo '<p align="center"><font size="5" color="161617"><b>Autor:</b></font> ' .'<font size="5" color="1A099F">' .'<b>'.$row["Autor"].'</b>'. '</font></p>';
			echo '<p align="center"><font size="5" color="161617"><b>Alumno:</b></font> ' .'<font size="5" color="1A099F">' .'<b>'.$row["Alumno"].'</b>'. '</font></p>';
			echo '<hr>';
			} 
  	}	
?>
</body>
</html>



