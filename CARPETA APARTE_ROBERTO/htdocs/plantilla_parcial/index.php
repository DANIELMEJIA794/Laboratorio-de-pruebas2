<?php
include ("configuracion.php");
include ("encabezado.php");
?>

<table><tr><td><img src="http://unmsm.asterisk.education/filegator/19030111/web/plantilla_parcial/batman.jpg"></td></tr></table>
<table><tr><td><img src="http://unmsm.asterisk.education/filegator/19030111/web/plantilla_parcial/titseries.png"></td></tr></table>
<?php
//Necesidad de cambiar la columna
 $sql = "select * from c19030111 Order by id DESC Limit 0,5  ";	
	
	echo '<center>';
	echo '<table>';
	echo '<tr><td>';
		

		echo '<table cellspacing="7" cellpadding="9">';
			echo '<tr>';		
	$result = mysqli_query($conn, $sql);     
	if (mysqli_num_rows($result) > 0) 
	{	
		while($row = mysqli_fetch_assoc($result))
			{//necesita de cambios según las variables consignadas
			echo '<td>';
			echo '<a href="ver.php?id='.$row["id"].'">';
		    echo '<img src="'.$row["portada"].'"width="250">';
			echo '</a>';
			echo '<br>';
		} 
  	}	
			echo '</tr>';
			echo '</table>';
	
		echo '</tr>';
	echo '</table>';
	echo '</center>';
		

include ("pie.php");
?>