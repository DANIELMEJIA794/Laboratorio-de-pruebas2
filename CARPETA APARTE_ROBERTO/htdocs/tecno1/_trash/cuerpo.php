
<?php
/* Programador: Celso Gonzales 
   Es el cuerpo de la pagina
*/ 

/* Variable */
$cantidad = '1120202';


/* ........................... */

function ventas_totales ($x, $y)
{
  	$s = $x + $y;
  	echo '<hr><font color="red">'.$s.'</font><hr>';
}


$ventas=5566564;

ventas_totales ($ventas,$cantidad);





echo 'Este es mi primer programa de PHP<hr>'; 
echo 'Modo de prueba'.' y '.$cantidad.' publicaciones'; 
?>

