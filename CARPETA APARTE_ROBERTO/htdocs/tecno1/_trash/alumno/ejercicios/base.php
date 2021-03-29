<?PHP

$GLOBALS['DB_IP'] = 'localhost';
$GLOBALS['DB_USER'] = 'root';
$GLOBALS['DB_PASS'] = '';
$GLOBALS['DB_NAME'] = 'biblioteca';
$database  = $GLOBALS['DB_NAME'];

$mysqli = new mysqli($GLOBALS['DB_IP'], $GLOBALS['DB_USER'],$GLOBALS['DB_PASS'],$GLOBALS['DB_NAME']);

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
			echo '<img src="'.$row["portada"].'" width="100">';		
			echo 'Titulo:'.$row["titulo"].'<br>';
			echo 'Autor:'.$row["autor"].'<br>';
			echo '<hr>';
			} 
  	}	


?>




