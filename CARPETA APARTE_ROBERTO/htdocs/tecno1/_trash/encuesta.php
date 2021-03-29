<html>
	<head>
	<title>Ejercicio de Formularios</title>
	</head>

	<body bgcolor="silver" text="navy">
	<h1>Mi primer formulario</h1>
	
    <form name="encuesta" method="GET" action="resultado.php">
	
	Nombre:<input type="text" name="Nombre" width="50" placeholder="Ponga su nombre"><br>
	Password:<input type="password" name="Password" width="50">	
	<br>Documento: 
	<select name="Documento">
	<option value=""> --- eliga su documento</option>
	<option value="DNI">DNI</option>
	<option value="Pasaporte">Pasaporte</option>
	</select>
	
	<br>Sexo:<br>
	<input type="radio" name="Sexo" value="F">Femenino<br>
	<input type="radio" name="Sexo" value="M">Masculino<br>

	<br>Intereses:<br>
	<input type="checkbox" name="intereses" value="Literatura">Literatura<br>
	<input type="checkbox" name="intereses" value="Deportes">Deporte<br>
	<input type="checkbox" name="intereses" value="Política">Política<br>	
	
	<br>Comentario<br>
	<textarea name="comentario" cols="80" rows="20"></textarea>
	
	<hr>
	<input type="submit" value=" Inscribirse">
	<input type="reset" value=" Borrar">
	</form>
	
	
	
	</body>
</html>