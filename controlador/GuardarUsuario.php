<?php 
include ('conex.php');
error_reporting(0);
   /* El  usuario debiò haber presionado el botòn guardar que lo trae hasta acà--> */
   if(isset($_POST['BtnGuardar'])) {

   	 /* Creamos  unas nuevas variables con el signo $, donde almacenaremos lo que trae en los formularios en name ="idusuario", por ejemplo */
        $Id_usua = $_POST['Identificacion'];
        $Tipo_doc = $_POST['TipoDoc'];
        $Tipo_usua = $_POST['TipoUsua'];
        $Nom_usua = $_POST['Nombre'];
        $Apellido_usua = $_POST['Apellidos'];
        $Fecha_nac= $_POST['Fecha '];
        $Direcc_usua = $_POST['Direccion'];
        $Cel = $_POST['Celular'];
        $Correo_usua = $_POST['Correo'];
        $Clave_usua= $_POST ['Clave_usua'];

	
	 /* Creamos la sentencia para insertar datos en la tabla  usuario, las primeras variables corresponden a las que aparecen en la estructura de la BD y despues de Values corresponde a las que creamos anteriormente */
	
     $ins= "INSERT INTO `usuarios`(`Id_usua`, `Id_tipodoc`, `Id_tipousua`, `Nom_usua`, `Apellido_usua`, `Fecha_nac`, `Direcc_usua`, `Cel_usua`, `Correo_usua`, `Clave_usua`)  VALUES ('$Id_usua',' $Tipo_doc',' $Tipo_usua',' $Nom_usua',' $Apellido_usua','$Fecha_nac','$Direcc_usua',' $Cel','$Correo_usua','$Clave_usua')";
    
    

    
     if(mysqli_query($conexion,$ins)==TRUE) {
		echo "<script>
				alert('El registro se guardó exitosamente');
				location.href='../vista/app/Admon/usuarios.php'
					</script>";
			}else{
				"<script>
				alert('El registro no pudo ser guardado');
				location.href='../vista/app/Admon/usuarios.php';
					</script>";
			}
  }

  mysqli_close($conexion);
 ?>