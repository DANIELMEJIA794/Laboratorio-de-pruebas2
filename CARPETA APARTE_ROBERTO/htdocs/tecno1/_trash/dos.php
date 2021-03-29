<HTML>
<BODY>
<?php
if (isset($_POST["edad"])) $edad_forms = $_POST["edad"];
if (isset($_POST["password"])) $password = $_POST["password"];

echo '<font size="20" color="red">Edad: '.$edad_forms.'</font>';
echo '<font size="20" color="blue">Password:'.$password.'</font>';




?>
</BODY>
</HTML>
