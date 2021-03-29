<?php
include ("configuracion.php");
include ("cabeza.php");


// --------------------------------------------------------------------

	// VARIABLES ENVIADAS Y GUARDADAS (necesidad de cambios)
	if (isset($_POST["nombre_hotel"]))  $nombre_hotel = $_POST["nombre_hotel"]; 
	if (isset($_POST["departamento"]))  $departamento = $_POST["departamento"]; 
	if (isset($_POST["nombre_lugar"]))  $nombre_lugar = $_POST["nombre_lugar"]; 
	if (isset($_POST["precios"]))  $precios = $_POST["precios"];
	if (isset($_POST["descripcion_hotel"]))  $descripcion_hotel = $_POST["descripcion_hotel"];	
	if (isset($_POST["descripcion_lugar"]))  $descripcion_lugar = $_POST["descripcion_lugar"];
	
	//es nenesario que se modifique
	$ubicacion_hotel = date("Y") . date("m") . date("d") . date("His") . '_' . $_FILES['ubicacion_hotel']['name'];  
	$caratula_hotel = date("Y") . date("m") . date("d") . date("His") . '_' . $_FILES['caratula_hotel']['name'];  
	$caratula_lugar = date("Y") . date("m") . date("d") . date("His") . '_' . $_FILES['caratula_lugar']['name'];  
	// SQL - Insertar datos..(necesidad de cambios)

	$sql = "INSERT INTO destinos  (nombre_hotel,departamento,nombre_lugar,precios,descripcion_hotel,descripcion_lugar,ubicacion_hotel,caratula_hotel,caratula_lugar) values ('". $nombre_hotel."','".$departamento."','".$nombre_lugar."','".$precios."','".$descripcion_hotel."','".$descripcion_lugar."','".$ubicacion_hotel."','".$caratula_hotel."','".$caratula_lugar."')";
    
	if ($conn->query($sql) === TRUE) {
	echo '<font color="black">Nuevo registro creado</font>';
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
		}

	// SUBIR ARCHIVO presto de cambio
    
	copy($_FILES['ubicacion_hotel']['tmp_name'], "" .$ubicacion_hotel) or die("No puede copiarse");
    copy($_FILES['caratula_hotel']['tmp_name'], "" .$caratula_hotel) or die("No puede copiarse");
	copy($_FILES['caratula_lugar']['tmp_name'], "" .$caratula_lugar) or die("No puede copiarse");

include ("pie.php");
?>