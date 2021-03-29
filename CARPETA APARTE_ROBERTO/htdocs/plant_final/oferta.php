<?php 
include ("configuracion.php");
include ("encabezado.php");

$sql = "SELECT * FROM destinos Order by precios ASC Limit 0,5 "; 

echo '<br>';
echo '<table width="100%" bgcolor="#CCCEE5" cellspacing="10" cellpadding="10">';
echo '<tr><td>';
echo '<h1><font face="Helvetica" color="#007fad">¡¡ OFERTAS !!</h1></font>';
echo '<h3>Los mejores precios en tu ciudad favorita...</h3>';
echo '<br>';
echo '<table bgcolor="#D8F5D8" align="center" cellspacing="10" cellpadding="10" width="70%">';
echo '<br>';

$result = mysqli_query($conn, $sql);     
    if (mysqli_num_rows($result) > 0) 
    { 
      while($row = mysqli_fetch_assoc($result))
        {
            echo '<tr>';
        	echo '<td align="center" width="200"><a href="main.php?id='.$row["id"].'"><img src="imagenes/'.$row["caratula_hotel"].'" height="150"></a></td>';
        	echo '<td><font style="font-size:24; color:red;"><strong> S/ '.$row["precios"].'</strong></font><br>';
        	echo '<strong>'.$row["nombre_hotel"].'</strong><br>';
        	echo $row["departamento"].'<br>';
        	echo '</td>';
            echo '</tr>';
        }
    }


echo '</table>';

echo '</td></tr>';
echo '</table>';


include ("piedepagina.php");