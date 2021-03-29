<?php
include ("configuracion.php");
include ("encabezados/encabezado.php");

echo '<font color="white">';
// --------------------------------------------------------------------

	// VARIABLES ENVIADAS Y GUARDADAS
	if (isset($_GET["id"]))  $id = $_GET["id"]; 
	if (isset($_GET["pelicula"])) $pelicula = $_GET["pelicula"]; 
if (isset($_GET["resumen"])) $resumen = $_GET["resumen"]; 



	// SQL - Insertar datos..

	$sql = "UPDATE  netflix  SET pelicula='".$pelicula."',resumen='".$resumen."' WHERE id= '".$id."'";
    
	if ($conn->query($sql) === TRUE) {
	echo "Registro Actualizado";
		} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
		}

	// SUBIR ARCHIVO
    
    


include ("encabezados/piedepagina.php");
?>