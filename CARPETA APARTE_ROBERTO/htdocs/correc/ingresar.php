<?php
include ("configuracion.php");
include ("cabeza.php");

echo '<font color="white">';
// --------------------------------------------------------------------

	// VARIABLES ENVIADAS Y GUARDADAS
	if (isset($_POST["pelicula"]))  $pelicula = $_POST["pelicula"]; 
	if (isset($_POST["resumen"]))  $resumen = $_POST["resumen"];
	if (isset($_POST["codigo"]))  $codigo = $_POST["codigo"]; 
		if (isset($_POST["clasificacion"]))  $clasificacion = $_POST["clasificacion"]; 
			if (isset($_POST["tipo"]))  $tipo = $_POST["tipo"]; 
	
	$nombre_foto = date("Y") . date("m") . date("d") . date("His") . '_' . $_FILES['foto']['name'];  
 
 
	// SQL - Insertar datos..

	$sql = "INSERT INTO netflix  (pelicula,resumen,portada,tipo,clasificacion) values ('".$pelicula."','".$resumen."','".$nombre_foto."','".$tipo."','".$clasificacion."')";
    
	if ($conn->query($sql) === TRUE) {
	echo "Nuevo registro creado";
		} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
		}

	// SUBIR ARCHIVO
    
   copy($_FILES['foto']['tmp_name'], "" .$nombre_foto) or die("No puede copiarse");
      


include ("pie.php");
?>