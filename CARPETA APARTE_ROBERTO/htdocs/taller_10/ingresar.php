<?php
include ("configuracion.php");
include ("encabezado.php");


// --------------------------------------------------------------------

	// VARIABLES ENVIADAS Y GUARDADAS (necesidad de cambios)
	if (isset($_POST["pelicula"]))  $pelicula = $_POST["pelicula"]; 
	if (isset($_POST["resumen"]))  $resumen = $_POST["resumen"]; 
	if (isset($_POST["tipo"]))  $tipo = $_POST["tipo"]; 
	if (isset($_POST["clasificacion"]))  $clasificacion = $_POST["clasificacion"];
	if (isset($_POST["codigo"]))  $codigo = $_POST["codigo"];	
	
	
	//es nenesario que se modifique
	$nombre_portada = date("Y") . date("m") . date("d") . date("His") . '_' . $_FILES['portada']['name'];  
 
 
	// SQL - Insertar datos..(necesidad de cambios)

	$sql = "INSERT INTO c19030111  (pelicula,resumen,tipo,clasificacion,codigo,portada) values ('". $pelicula."','".$resumen."','".$tipo."','".$clasificacion."','".$codigo."','".$nombre_portada."')";
    
	if ($conn->query($sql) === TRUE) {
	echo '<font color="white">Nuevo registro creado</font>';
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
		}

	// SUBIR ARCHIVO presto de cambio
    
   copy($_FILES['portada']['tmp_name'], "" .$nombre_portada) or die("No puede copiarse");
      


include ("pie.php");
?>