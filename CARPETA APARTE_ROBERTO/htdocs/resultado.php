<html>
<body>
<?php
if (isset($_REQUEST["nombres"])) $nombres = $_REQUEST["nombres"];
echo '<font size="28" color="blue">Nombres: '.$nombres.'</font><br>';

if (isset($_REQUEST["apellidos"])) $apellidos = $_REQUEST["apellidos"];
echo '<font size="28" color="green">Apellidos: '.$apellidos.'</font><br>';

if (isset($_REQUEST["tipodedocumento"])) $tipodedocumento= $_REQUEST["tipodedocumento"];
echo '<font size="28" color="red">Tipo de Documento: '.$tipodedocumento.'</font><br>';

if (isset($_REQUEST["edad"])) $edad = $_REQUEST["edad"];
echo '<font size="28" color="black">Edad: '.$edad.'</font><br>';

if (isset($_REQUEST["sexo"])) $sexo = $_REQUEST["sexo"];
echo '<font size="28" color="green">Sexo: '.$sexo.'</font><br>';

if (isset($_REQUEST["ciudad"])) $ciudad = $_REQUEST["ciudad"];
echo '<font size="28" color="green">Ciudad: '.$ciudad.'</font><br>';

if (isset($_REQUEST["genero"])) $literario = $_REQUEST["genero"];
echo '<font size="28" color="green">Género literario: '.$literario.'</font><br>';

if (isset($_REQUEST["comentario"])) $comentario = $_REQUEST["comentario"];
echo '<font size="28" color="green">Comentario: '.$comentario.'</font><br>';
?>
</body>

</html>
