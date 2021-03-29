<?php
include ("configuracion.php");
include ("cabeza.php");


// --------------------------------------------------------------------

	// VARIABLES ENVIADAS Y GUARDADAS (necesidad de cambios)
	if (isset($_POST["titulo"]))  $titulo = $_POST["titulo"]; 
	if (isset($_POST["autor"]))  $autor = $_POST["autor"]; 
	if (isset($_POST["ano"]))  $ano = $_POST["ano"]; 
	if (isset($_POST["categoria"]))  $categoria = $_POST["categoria"];
	if (isset($_POST["resumen"]))  $resumen = $_POST["resumen"];	
	
	
	//es nenesario que se modifique
	$nombre_caratula = date("Y") . date("m") . date("d") . date("His") . '_' . $_FILES['caratula']['name'];  
 
 
	// SQL - Insertar datos..(necesidad de cambios)

	$sql = "INSERT INTO l19030111  (titulo,autor,ano,categoria,resumen,caratula) values ('". $titulo."','".$autor."','".$ano."','".$categoria."','".$resumen."','".$nombre_caratula."')";
    
	if ($conn->query($sql) === TRUE) {
	echo '<font color="black">Nuevo registro creado</font>';
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
		}

	// SUBIR ARCHIVO presto de cambio
    
   copy($_FILES['caratula']['tmp_name'], "" .$nombre_caratula) or die("No puede copiarse");
      


include ("pie.php");
?>