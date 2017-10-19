<?php
			$host = 'localhost';
			$user = 'root';
			$pass = '';
			$bd = 'BDIrene';

			sleep(1);		
			
			$nombre = $_POST['name'];
			
			$conn = new mysqli($host, $user, $pass);

			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			else{
				$Exist=mysqli_select_db($conn,"bdirene") or die ("Problemas al conectar con la bd");
				
				$nueva_categoria = mysqli_query($conn,"SELECT nomCategoria FROM categoria WHERE nomCategoria='$nombre'");
				
				if(mysqli_num_rows($nueva_categoria)>0){
					echo 0;
				}else {
					$insert = mysqli_query($conn,"INSERT INTO categoria( nomCategoria ) VALUES ('$nombre')");
					
					if($insert) {
						header("Location: ../index.php");
						echo 1;
					}else {
						header("Location: ../categoria.php");
						echo 0;
					}
				}
			}
?>