<?php
include ("configuracion.php");
include ("encabezados/encabezado.php");

echo '<font color="white">';
// --------------------------------------------------------------------

	// VARIABLES ENVIADAS Y GUARDADAS
	if (isset($_REQUEST["id"]))  $id = $_REQUEST["id"]; 

	// SQL - Insertar datos..

	$sql = "DELETE FROM netflix  WHERE id= '".$id."'";
    
	if ($conn->query($sql) === TRUE) {
	echo "Registro Eliminado";
		} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
		}

	// SUBIR ARCHIVO
    
    


include ("encabezados/piedepagina.php");
?>