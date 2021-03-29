<?php
include ("configuracion.php");
include ("cabeza.php");


// --------------------------------------------------------------------

	// VARIABLES ENVIADAS Y GUARDADAS (necesidad de cambios)
	if (isset($_POST["password"]))  $password = $_POST["password"]; 
	if (isset($_POST["rol"]))  $rol = $_POST["rol"]; 
	if (isset($_POST["codigo"]))  $codigo = $_POST["codigo"];	
	
 
	// SQL - Insertar datos..(necesidad de cambios)

	$sql = "INSERT INTO u19030111  (pelicula,resumen,tipo,clasificacion,codigo,portada) values ('". $pelicula."','".$resumen."','".$tipo."','".$clasificacion."','".$codigo."','".$nombre_portada."')";
    
	if ($conn->query($sql) === TRUE) {
	echo '<font color="white">Nuevo registro creado</font>';
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
		}   

include ("pie.php");
?>