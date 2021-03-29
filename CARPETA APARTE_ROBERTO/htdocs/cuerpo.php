<?php
include ("estructura/configuracion.php");

?>

<table border="0" width="100%">
	<tr>
		<td>
		<p><img border="0" src="imagenes/hoteles.jpg" width="437" height="115"></p>
		<div align="center"><table border="0" width="100%" bgcolor="#FFFFFF">
				<tr>
	
<?php


$sql="select* FROM destinos Limit 0,5";
$result=mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0) {
while($row=mysqli_fetch_assoc($result)) {
echo '<td>';
echo '<br>';
echo '<br>'; 
echo '<p align="center"><img src="'.$row["caratula_hotel"].'"width="270" height="270"></p><br>';
echo '<br>'; 
echo '<b><p align="center"><font face="Arial" color="black" size="5">'.$row["nombre_hotel"].'</font></p></b>';
echo '<br>';
echo '<b><p align="center"><font face="Arial" color="black" size="5">'.$row["nombre_lugar"].'</font></p></b>';


echo '</td>';

}
}

?>		
			</tr>
		</table>
		</div>
<?php
include ("estructura/piedepagina.php");
?>