<?php
include ('conex.php');
header( 'Content-Type: text/html; charset=UTF-8'); 
session_start(); 
error_reporting(0); 

$id = $_REQUEST['id'];

	
			

			$del = $conexion -> query("DELETE FROM tipo_usua WHERE Id_tipousua = '$id' ");
				if ($del) {
					echo "<script>
					
					alert('Se ha borrado correctamente');
						location.href='../vista/app/Admon/Tipousua.php#imprime?Result=1';
					</script>";
				}else{
					echo "<script>
					alert('El registro no pudo ser eliminado');
					location.href='../vista/app/Admon/Tipousua.php';
					</script>";

				}


		
 ?>