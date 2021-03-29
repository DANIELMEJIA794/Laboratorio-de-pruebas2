<?php 
session_start();
?>

<html>
	<head>
	<meta charset="utf-8"/>
	<meta name="description" content="Universidad Nacional Mayor San Marcos"/>
	<meta name="keywords" content="univesidad, Peru, university"/>
	<meta name="author" content="Celso Gonzales" />
	<meta name="copyright" content="Propietario del copyright" />
	<meta name="robots" content="index"/>
	<meta http-equiv="cache-control" content="no-cache"/>
	<meta http-equiv="expires" content="300000"/>
	<meta http-equiv="expires" content="Sat, 07 Feb 2016 00:00:00 GMT"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Trivago</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/form.css">

<style>
  body {
    font-family: Arial;
  }

  a:link {
  color: black;
  }
  a:visited {
  color: black;
  }

  input {
    padding: 8px 20px;
    margin: 0px 0;
    box-sizing: border-box;
   }

  .button {
    background:#007fad;
    color:white;
    border:1px solid #007fad;
    height:34px;
    padding:8px 20px;
    font-size:15px;
    font-family:Helvetica;
    }
  
  .button2 {
     border-radius:2em;
     background:#007fad;
     color:white;
     border:1px solid #007fad;
     height:30px;
     padding:6px 15px;
     font-size:15px;
     font-family:Helvetica;
    }
  }
  .navbar {
    overflow: hidden;
    background-color: white;
    font-family: Arial, Helvetica, sans-serif;
    float: right;
  }

  .navbar a {
    float: left;
    font-size: 16px;
    color: black;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
  }

  .dropdown {
    float: left;
    overflow: hidden;
  }

  .dropdown .dropbtn {
    cursor: pointer;
    font-size: 16px;  
    border: none;
    outline: none;
    color: black;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
  }

  .navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
    background-color: #eaeaea;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 160px;
    box-shadow: 0px 14px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }

  .dropdown-content a:hover {
    background-color:#ddd;
  }

  .show {
    display: block;
  }

    * {box-sizing: border-box;}
    .mySlides {display: none;}
    img {vertical-align: middle;}

    .slideshow mySlides fade {
      max-width: 560px;
      max-height: 560px;
      position: center;
      margin: auto;
    }
     
    /* Slideshow container */
    .slideshow-container {
      position: relative;
      margin-right: 50px;
      margin-left:50px
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 25px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
      font-family: Helvetica;
      -webkit-text-stroke: 1px black;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }

    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {font-size: 11px}
    }
    .logo{
      height:70px;
    }
    .mySlides img{
      width:100%
    }
</style>
</head>

<body>

<table cellpadding="5" width="100%">
   <tr>
     <td width="170"><a href="index.php"><img src="imagenes/trivago.png" height="80"></a></td>
     <td><hr style="width: 1px; height: 60px; display: inline-block;"></td>
     <td align="left">
       <p><font color="#DF7401" size="4" face="Helvetica"><strong>Todas las mejores ofertas de las páginas de reservas en un solo lugar</strong></font></p>
      </td>
      <td width="200" align="center" valign="bottom">
        <?php
          if (isset($_SESSION['codigo'])) {
            echo '<font size="2"> ¡Bienvenido, <strong>' . $_SESSION['nombre'] .'</strong>!<br></font><br>';
          }
        ?>
      </td>
   </tr>
</table>
<table width="100%" cellspacing="0" cellpadding="0">
   <tr>
    <td width="50"></td>
    <td width="700">  
        <form action="buscar.php" method="get">
        <input type="text" size="45" name="termino" placeholder="Ingrese su destino...">
        <button class="button" type="submit"><b>Buscar</b></button>
        </form>
    </td>
    <td width="500">
      <div class="navbar">
           <a href="index.php">Inicio</a>

          <div class="dropdown">
          <button class="dropbtn" onclick="myFunction('1')">Departamentos
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content" id="1">
            <a href="departamento.php?departamento=huanuco">Huánuco</a>
            <a href="departamento.php?departamento=cusco">Cusco</a>
            <a href="departamento.php?departamento=amazonas">Amazonas</a>
            <a href="departamento.php?departamento=arequipa">Arequipa</a>
          </div>
         </div>
          
          <a href="oferta.php">Ofertas</a>

          <div class="dropdown">  
            <button class="dropbtn" onclick="myFunction('2')">Menú
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content" id="2">
            <a href="form_signup.php">Registrarse</a>
            <a href="form_login.php">Iniciar sesión</a>
            <a href="logout.php">Cerrar sesión</a>
            <a href="perfil.php">Perfil</a>
            <a href="reporte.php">Reporte</a>
            <a href="ingresar.php">Ingresar</a>'
'
          </div>
         </div>
         
      </div>
    </td>
  </tr>
  <tr>
    <td colspan="3"><hr></td>
  </tr>
</table>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction(x) {
  document.getElementById(x).classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>