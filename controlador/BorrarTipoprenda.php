<?php
include ('conex.php');
header( 'Content-Type: text/html; charset=UTF-8'); 
session_start(); 
error_reporting(0); 

$id = $_REQUEST['id'];

	
			

			$del = $conexion -> query("DELETE FROM tipo_prenda WHERE Id_tipoprenda= '$id' ");
				if ($del) {
					echo "<script>
					
					alert('Se ha borrado correctamente');
						location.href='../vista/app/Admon/Tipoprenda.php#imprime?Result=1';
					</script>";
				}else{
					echo "<script>
					alert('El registro no pudo ser eliminado');
					location.href='../vista/app/Admon/Tipoprenda.php';
					</script>";

				}


		