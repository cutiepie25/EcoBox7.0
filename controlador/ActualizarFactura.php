<?php 
include ('conex.php');

	$Id_factura = $_POST['Id_factura'];
	$Id_Usua = $_POST['Id_Usua'];
	$Fecha = $_POST['Fecha'];
	$Id_tipotrans = $_POST['Id_tipotrans'];

    
	

$eje = $conexion -> query("UPDATE `usuarios` SET 'Id_factura'='$Id_factura', 'Id_Usua'='$Id_Usua', 'Fecha'='$Fecha', 'Id_tipotrans'='$Id_tipotrans'");


if ($eje) {
	echo "<script>
	alert('La factura ha sido Modificado');
	location.href='../vista/app/Admon/Factura.php';
	</script>";
}else{
	echo "<script>
	alert('La factura no pudo ser Modificado');
	location.href='../vista/app/Admon/Factura.php';
	</script>";
}


 ?>