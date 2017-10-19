<?php
			$host = 'localhost';
			$user = 'root';
			$pass = '';
			$bd = 'BDIrene';

			sleep(1);		
			
			$categoria = $_POST['categ'];
			$nombre = $_POST['name'];
			$cantidad = $_POST['cant'];
			$precio = $_POST['prec'];
			$maxprod = $_POST['maxprod'];
			$minprod = $_POST['minprod'];
			$descripcion = $_POST['descrip'];
			$imagen = $_POST['img'];
			$fcaducidad = $_POST['fechacad'];
			
			$conn = new mysqli($host, $user, $pass);
	
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			else{
				$Exist=mysqli_select_db($conn,"BDIrene") or die ("Problemas al conectar con la bd");
				
				$nuevo_producto = mysqli_query($conn,"SELECT * FROM producto WHERE nombre='$nombre'");
				
				if(mysqli_num_rows($nuevo_producto) == 1){
					echo "Dato repetido";
				}else{
					$image = imagecreatefromjpeg('img');
					ob_start();
					imagejpeg($image);
					$jpg = ob_get_contents();
					ob_end_clean();
					
					$jpg = str_replace('##','##',mysqli_escape_string($jpg));
					
					$insert=mysqli_query($conn, "INSERT INTO producto(categoria, nombre, descripcion, imagen, cantidad, precio, max, min, fechacaducidad )
					VALUES('$categoria','$nombre','$descripcion','$jpg','$cantidad','$precio','$maxprod','$minprod','$fcaducidad')");
					
					if($insert) {
						//header("Location: ../index.php");
						echo 1;
					}else {
						//header("Location: ../producto.php");
						echo $categoria;
						echo "<br>";
						echo $nombre;
						echo "<br>";
						echo $cantidad;
						echo "<br>";
						echo $precio;
						echo "<br>";
						echo $maxprod;
						echo "<br>";
						echo $minprod;
						echo "<br>";
						echo $descripcion;
						echo "<br>";
						echo $imagen;
						echo "<br>";
						echo $fcaducidad;
						echo "<br>";
						echo 0;
					}
				}
			}
?>