<?php require_once('conexion/connect.php'); ?>
<?php //include('php/seguridad.php'); ?>

<html >
  <head>
    <meta charset="UTF-8">
    <title>Registro de Categoria</title>
        <link rel="stylesheet" href="CSS/login.css">   
		
  </head>
  <body style="background-image: url(img/logo.png)">  
  
<div class="container">
  <div id="login-form">
    <h3>Registrar Categoria</h3>
    <fieldset>
      <form method="post" action="php/registrarCate.php" id="form-login">
			<br></br>
		<input type="text" autofocus id="name" name="name" placeholder="Nombre Categoria" required autocomplete="off"> 
        <input type="submit" name="doreg" id="doreg" value="Ingresar">
		</form>
	</fieldset>
	<table>
		<tr align=center>
		<th><strong>ID_Categoria</strong></th>
		<th><strong>Nombre</strong></th>
	</tr></thead>
		<?php
				$host = 'localhost';
				$user = 'root';
				$pass = '';
				$bd = 'BDIrene';
				
				$conn = new mysqli($host, $user, $pass);
				
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				else{
					$Exist=mysqli_select_db($conn,$bd) or die ("Problemas al conectar con la bd");
					
					if($Exist)
					{
						$QUERY=mysqli_query($conn, "SELECT ID_Categoria, nomCategoria  FROM categoria ORDER BY nomCategoria" );
						
						while($result=mysqli_fetch_array($QUERY,MYSQLI_BOTH)){	
						echo "<tr class=\"alt\">";				
						echo "<td>".$result[0]."</td>";
						echo "<td>".$result[1]."</td>";
						echo "</tr> ";
						}
							
					}
				}
		?>
		</table>
      
   
  </div> <!-- end login-form -->

</div>
	<script type="text/javascript" src="js/jquery-1.12.3.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>
