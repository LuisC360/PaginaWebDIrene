<?php
			$host = 'localhost';
			$user = 'root';
			$pass = '';
			$bd = 'BDIrene';

			sleep(1);		
			
			$tipo = $_POST['tipo'];
			$nombre = $_POST['name'];
			$apP = $_POST['apP'];
			$apM = $_POST['apM'];
			$calle = $_POST['calle'];
			$num = $_POST['num'];
			$col = $_POST['col'];
			$telefono = $_POST['tel'];
			$mail = $_POST['mail'];
			$usuario = $_POST['user'];
			$password = md5($_POST['pass']);
			
			$conn = new mysqli($host, $user, $pass);

			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			else{
				$Exist=mysqli_select_db($conn,"bdirene") or die ("Problemas al conectar con la bd");
				
				$nuevo_usuario = mysqli_query($conn,"SELECT usuario FROM empleado WHERE usuario='$usuario'");
				
				if(mysqli_num_rows($nuevo_usuario)>0){
					echo 0;
				}else {
					$insert = mysqli_query($conn,"INSERT INTO empleado(tipo, nombre, apPaterno, apMaterno,
					calle, numero, colonia, telefono, email, usuario, password ) 
					VALUES ('$tipo','$nombre','$apP','$apM','$calle','$num','$col','$telefono','$mail','$usuario','$password')");
					
					if($insert) {
						header("Location: ../index.php");
						echo 1;
					}else {
						header("Location: ../registro.php");
						echo 0;
					}
				}
			}
?>