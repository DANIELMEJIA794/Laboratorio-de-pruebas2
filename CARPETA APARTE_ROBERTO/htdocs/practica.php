<html>

	<head> 
		<title>Mi primera página php</title>
	<head>
	
	<body>
			<?php /* Programador: Roberto Irrazabal */
			/*Variables y concatenación*/
			$nombre='Roberto';
			$edad=19;
			$ventas=141;
			$gastos=223;
			echo "<br><b>Este es mi primer programa de php</b><hr>";
			echo 'modo de prueba'.' y '.'celso es una mierda<br>';
			echo "te voy a sacar la mierda $nombre<br>";
			print "<b>ahora si vas a ver ctmare</b> " . "Celso";
			echo $nombre ."<br>". $edad;
			/*.........................*/
			
			/*Constante*/
			define ("CONSTANTE", 2020);
			print CONSTANTE. "<br>";
			print CONSTANTE. "<br>";
			print CONSTANTE. "<br>";
			print CONSTANTE. "<br>";
			print CONSTANTE. "<br>";
			/*......................*/
			
			/*funciones y sus derivados*/
			function kachar(){
				echo "<p>Te quiero coger</p>";	
			}
			kachar();
			function suma ($x, $y){
				$s = $x + $y;
				echo '<hr><font color="red">'. $s . "</font><hr>" ;
			}
			suma ($ventas, $gastos);
		?>
	</body>
	
</html>
