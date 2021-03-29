<?php
include("configuracion.php");
include("encabezado.php");

if (isset($_GET["id"])) $id = $_GET["id"];
if (isset($_GET["nombre_hotel"])) $nombre_hotel = $_GET["nombre_hotel"];
if (isset($_GET["departamento"])) $departamento = $_GET["departamento"];
if (isset($_GET["nombre_lugar"])) $nombre_lugar = $_GET["nombre_lugar"];
if (isset($_GET["precios"])) $precios = $_GET["precios"];
if (isset($_GET["descripcion_hotel"])) $descripcion_hotel = $_GET["descripcion_hotel"];

$sql = "update destinos SET nombre_hotel='".$nombre_hotel."', nombre_lugar='".$nombre_lugar."', descripcion_hotel='".$descripcion_hotel."', departamento='".$departamento."', precios='".$precios."' WHERE id= '".$id."'";

echo '<table width="100%" cellpadding="10">';
echo '<tr><td>';

if ($conn->query($sql) === TRUE) {
	echo 'Registro actualizado<br>';
} 

else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

echo '</td></tr>';
echo '</table>';

include("piedepagina.php");

?>