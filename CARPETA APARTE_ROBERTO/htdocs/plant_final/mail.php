<?php

include ("configuracion.php");
include ("encabezado.php");

if (isset($_REQUEST["correodestino"])) $correodestino = $_REQUEST["correodestino"];
if (isset($_REQUEST["mensaje"])) $mensaje = $_REQUEST["mensaje"];

$tema = "Suscripci�n a Trivago";
//$mensaje = "Pronto te avisaremos toda la informaci�n de promociones y ofertas.";
$remitente = "From: trivago@trivago.com";
$mensaje = "Gracias por suscribirte a nuestro bolet�n. �Recibir�s ofertas todos los d�as!";


mail($correodestino,$tema,$mensaje,$remitente);
mail('lizette.retuerto@unmsm.edu.pe',$tema,$mensaje,$remitente);

echo 'Su correo ha sido enviado';

include ("piedepagina.php");
?>