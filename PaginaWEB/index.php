<?php require_once('conexion/connect.php'); ?>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Inicio de Sesi&oacute;n</title>
        <link rel="stylesheet" href="CSS/login.css">
  </head>
  <body style="background-image: url(img/logo.png)">  
  
<div class="container">
  <div id="login-form">
    <h3>Iniciar Sesi&oacute;n</h3>
    <fieldset>
      <form method="post" action="php/login.php" id="form-login">
        <input type="text" autofocus id="user" name="user" placeholder="Usuario" required autocomplete="off"> 
        <input type="password" id="pass" name="pass" placeholder="Contraseña" required autocomplete="off">  
        <input type="submit" id="dologin" name="log" value="Ingresar">
      </form>
    </fieldset>
  </div> <!-- end login-form -->

</div>
	<script type="text/javascript" src="js/jquery-1.12.3.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>	
  </body>
</html>
