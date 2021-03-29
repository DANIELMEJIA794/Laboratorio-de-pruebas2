
<?php
// DATOS DE CONFIGURACION
$GLOBALS['DB_IP'] = 'localhost';
$GLOBALS['DB_USER'] = 'root';
$GLOBALS['DB_PASS'] = '';
$GLOBALS['DB_NAME'] = 'parcial';
$database  = $GLOBALS['DB_NAME'];

$mysqli = new mysqli($GLOBALS['DB_IP'], $GLOBALS['DB_USER'],$GLOBALS['DB_PASS'],$GLOBALS['DB_NAME']);

if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} 

$conn = $mysqli;

?>