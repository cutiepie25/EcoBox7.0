<?php 
include ('conex.php');
error_reporting(0);
   /* El  usuario debiò haber presionado el botòn guardar que lo trae hasta acà--> */
   if(isset($_POST['BtnGuardar'])) {

   	 /* Creamos  unas nuevas variables con el signo $, donde almacenaremos lo que trae en los formularios en name ="idusuario", por ejemplo */
        $Fecha = $_POST['Fecha'];
        $Id_usua = $_POST['Id'];
        $Id_tipotrans = $_POST['TipoTrans'];
	
	 /* Creamos la sentencia para insertar datos en la tabla  usuario, las primeras variables corresponden a las que aparecen en la estructura de la BD y despues de Values corresponde a las que creamos anteriormente */
	
     $ins= "INSERT INTO `factura`(`Id_factura`, `Id_usua`, `Fecha`, `Id_tipotrans`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]');
    
    

    
     if(mysqli_query($conexion,$ins)==TRUE) {
		echo "<script>
				alert('El registro se guardó exitosamente');
				location.href='../vista/app/Admon/usuarios.php';
					</script>";
			}else{
				"<script>
				alert('El registro no pudo ser guardado');
				location.href='../Vista/App/admin/Admin.php';
					</script>";
			}
  }

  mysqli_close($conexion);
 ?>