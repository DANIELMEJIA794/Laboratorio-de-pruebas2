<?php
include ("configuracion.php");
include ("cabeza.php");


// --------------------------------------------------------------------

	// VARIABLES ENVIADAS Y GUARDADAS (necesidad de cambios)
	if (isset($_GET["password"]))  $password = $_GET["password"]; 
	if (isset($_GET["rol"]))  $rol = $_GET["rol"]; 
	if (isset($_GET["codigo"]))  $codigo = $_GET["codigo"];	
	if (isset($_GET["nombre"]))  $nombre = $_GET["nombre"];	
	if (isset($_GET["apellido"]))  $apellido = $_GET["apellido"];	
	// SQL - Insertar datos..(necesidad de cambios)

	$sql = "INSERT INTO u19030111  (password,rol,codigo,nombre,apellido) values ('". $password."','".$rol."','".$codigo."','".$nombre."','".$apellido."')";
    
	if ($conn->query($sql) === TRUE) {
	header("Location: usuarios.php");
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
		}   

include ("pie.php");
?>