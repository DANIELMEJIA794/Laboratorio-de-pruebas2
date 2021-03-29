<?php
include ("configuracion.php");
include ("encabezados/encabezado.php");


// --------------------------------------------------------------------

	// VARIABLES ENVIADAS Y GUARDADAS
	if (isset($_POST["nombres"]))  $nombres = $_POST["nombres"]; 
	if (isset($_POST["apellidos"]))  $apellidos = $_POST["apellidos"]; 
	if (isset($_POST["resumen"]))  $resumen = $_POST["resumen"]; 
	
	$nombre_foto = date("Y") . date("m") . date("d") . date("His") . '_' . $_FILES['foto']['name'];  
 
 
	// SQL - Insertar datos..

	$sql = "INSERT INTO usuarios  (nombres,apellidos,foto) values ('".$nombres."','".$apellidos."','".$nombre_foto."')";
    
	if ($conn->query($sql) === TRUE) {
	echo "Nuevo registro creado";
		} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
		}

	// SUBIR ARCHIVO
    
   copy($_FILES['foto']['tmp_name'], "" .$nombre_foto) or die("No puede copiarse");
      


include ("encabezados/piedepagina.php");
?>