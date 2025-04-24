<?php
include ('conex.php');
header( 'Content-Type: text/html; charset=UTF-8'); 
session_start(); 
error_reporting(0); 

$id = $_REQUEST['id'];

	
			

			$del = $conexion -> query("DELETE FROM `usuarios` WHERE `Id_usua` = '$id' ");
				if ($del) {
					echo "<script>
					
					alert('Se ha borrado correctamente');
						location.href='../vista/app/Admon/usuarios.php#imprime?Result=1';
					</script>";
				}else{
					echo "<script>
					alert('El registro no pudo ser eliminado');
					location.href='../vista/app/Admon/usuarios.php';
					</script>";

				}


		
 ?>