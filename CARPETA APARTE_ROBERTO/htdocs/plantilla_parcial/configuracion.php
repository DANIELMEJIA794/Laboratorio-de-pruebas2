
<?php
// DATOS DE CONFIGURACION (necesario de cambios)
$GLOBALS['DB_IP'] = 'localhost';
$GLOBALS['DB_USER'] = 'usuario_unmsm';
$GLOBALS['DB_PASS'] = '12345';
$GLOBALS['DB_NAME'] = 'tecnounmsm';
$database  = $GLOBALS['DB_NAME'];

$mysqli = new mysqli($GLOBALS['DB_IP'], $GLOBALS['DB_USER'],$GLOBALS['DB_PASS'],$GLOBALS['DB_NAME']);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$conn =$mysqli;
?>
