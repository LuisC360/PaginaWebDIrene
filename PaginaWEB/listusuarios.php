<?php require_once('conexion/connect.php'); ?>
<?php //include('php/seguridad.php'); ?>

<html >
  <head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
        <link rel="stylesheet" href="CSS/tabla.css"> 
		
  </head>
  <body style="background-image: url(img/logo.png)">  
  
<div class="datagrid">
	<table>
		<caption>Empleados</caption>
	<thead>
	<tr align=center>
		<th><strong>Nombres</strong></th>
		<th><strong>Apellido Paterno</strong></th>
		<th><strong>Apellido Materno</strong></th>
		<th><strong>Tipo Usuario</strong></th>
		<th><strong>Nick</strong></th>
		<th><strong>E-Mail</strong></th>
		<th><strong>      </strong></th>
		<th><strong>      </strong></th>
	</tr></thead>
	
	<tbody>
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
						$QUERY=mysqli_query($conn, "SELECT nombre, apPaterno, apMaterno, tipo, usuario, email 
						FROM empleado ORDER BY nombre" );
						
						echo "<tr class=\"alt\">";
						while($result=mysqli_fetch_row ( $QUERY)){	
								echo "<td>".$result[0]."</td>";
								echo "<td>".$result[1]."</td>";
								echo "<td>".$result[2]."</td>";
								if($result[3]=0){
									echo "<td>";
									echo "Administrador";
									echo "</td>";
								}if($result[3]=1){
									echo "<td>";
									echo "Capturista";
									echo "</td>";
								}else{
									echo "<td>";
									echo "Usuario";
									echo "</td>";
								}
								echo "<td>".$result[4]."</td>";
								echo "<td>".$result[5]."</td>";
								
						}
						echo "</tr> ";
					}	
				}
		?>
		
	</tbody>
	</table>
</div>
	<script type="text/javascript" src="js/jquery-1.12.3.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>