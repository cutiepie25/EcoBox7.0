<?php 
include ('conex.php');

	$Id_detallefac = $_POST['Id_detallefac'];
	$Id_factura = $_POST['Id_factura'];
	$Id_prenda = $_POST['Id_prenda'];
	$Cantidad = $_POST['Cantidad'];

    
	

$eje = $conexion -> query("UPDATE `usuarios` SET `Id_detallefac`='$Id_detallefac', `Id_factura`='$Id_factura', `Id_prenda`='$Id_prenda', `Cantidad`='$Cantidad'");


if ($eje) {
	echo "<script>
	alert('La factura ha sido Modificado');
	location.href='../vista/app/Admon/detallefactura.php';
	</script>";
}else{
	echo "<script>
	alert('La factura no pudo ser Modificado');
	location.href='../vista/app/Admon/detallefactura.php';
	</script>";
}


 ?>