<?php
session_start();
include('conex.php');

//error_reporting(0);
//Indicamos que el documento será de tipo html y con caracteres de UTF-8:
header('Content-Type: text/html; charset=UTF-8');
//Al presionar el boton que previamente le llamamos "login", traeremos los datos del formulario:
$btninicio=$_POST['login'];
if(isset($btninicio)){
	//Traemos de los inputs los datos de usuario y contraseña:
    $Usuario=$_POST['usua'];
    $Clave=$_POST['clave'];

    $sql="SELECT Id_usua, Clave_usua, concat(Nom_usua,' ',Apellido_usua), id_tipousua from usuarios where Id_usua= $Usuario and Clave_usua = $Clave";
	

    $res=$conexion->query($sql);
    $fila=$res->fetch_row();
    
    if($fila[0]==$Usuario && $fila[1]==$Clave){

    	
    	$_SESSION['user']=$fila[0];
        $_SESSION['tipo']=$fila[3];
    	$_SESSION['usuario']=$fila[2];
    	$msj="Bienvenido ".$_SESSION['usuario']."";
			switch ($_SESSION['tipo']) {
				case '1':
					# code...
					header('location:../vista/app/Admon/usuarios.php?mensaje=$msj');
					break;
				case '2':
					# code...
					header('location:../vista/index.php?mensaje=$msj');
					break;
				default:
					# code...
					header('location:../Vista/index.php?mensaje=$msj');
					break;
			}

    }
    else{
    	echo "<script>
					alert('Usuario y/o Contraseña Incorrectos');
					location.href='../vista/index.php';
					</script>";

    
    }
}
?>
