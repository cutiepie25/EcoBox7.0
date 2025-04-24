<?php 
include ('conex.php');
header ( 'Content-Type: text/html; charset=UTF-8');
error_reporting (0);
$id = $_GET ['id'];

$sql="SELECT usuarios.Id_usua, tipo_doc.Descrip_tipodoc, tipo_usua.Descrip_tipousua, usuarios.Nom_usua, usuarios.Apellido_usua, usuarios.Fecha_nac, usuarios.Direcc_usua, Usuarios.Cel_usua, usuarios.Correo_usua, usuarios.Clave_usua 
from usuarios
INNER JOIN tipo_doc on usuarios.Id_tipodoc= tipo_doc.Id_tipodoc
INNER JOIN tipo_usua on usuarios.Id_tipousua= tipo_usua.Id_tipousua WHERE usuarios. Id_usua='$id'";

$eje= $conexion-> query ($sql); 
while ($row= $eje -> fetch_row ()) {

?>

<html>
  <body>
    
<section class="container">

  <div class="card mt-4">
    <div class="row mt-4">
      <div class="col-md-3">
        <center><img src="../../Publico/Media/img/product3.jpg" class="card1" width="200" height="200"> <br><br>
            <h5 class="card-title">Modificar Usuarios</h5> </center>     
      </div>
        <div class="col-md-7">
          <Form  method="POST"  action="../../../Control/Actualizausua.php">
             <div class="row">
                 <div class="row">
			                <div class="form-group col-md-5">
			                   <label for="exampleFormControlSelect1">Tipo Documento</label>
			                  <select class="form-control"  name="TipoDoc">
			                      <?php  
			                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
			                           $sql1 = "SELECT * from tipodocumento";
			                          $eje1 = $conexion->query($sql1);
			                          # Mostramos a través de un ciclo todas las opciones válidas:
			                          while($row1 = $eje1->fetch_row()){
			                            echo '<option value="'.$row1[0].'">'.$row1[1].'</option>';
			                          }
			                        ?>
			                  </select>
			                </div>
			               <div class="form-group col-md-1">
			                   <div class="input-group">
			                  		  <input type="hidden" class="form-control" name="idusuario" value="<?php echo $row[0] ?>">     
			                     </div> 
			                </div>
            
		                <div class="form-group col-md-5">
		                  <label for="exampleFormControlSelect1">Tipo de Usuario</label>
		                  <select class="form-control" name="TipoUsua">
		                    <?php  
		                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
		                          $sql2 = "SELECT * from tipousuario";
		                          $eje2 = $conexion->query($sql2);
		                          # Mostramos a través de un ciclo todas las opciones válidas:
		                          while($row2 = $eje2->fetch_row()){
		                            echo '<option value="'.$row2[0].'">'.$row2[1].'</option>';
		                          }
		                        ?>
		                  </select>
		                </div>
              </div>
             <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleFormControlInput1">Nombres</label>
                  <input type="text" name="NombUsua" class="form-control" value="<?php echo $row[3] ?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleFormControlInput1">Apellidos</label>
                  <input type="text" name="ApellUsua" class="form-control" value="<?php echo $row[4] ?>">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-2">
                  <label for="exampleFormControlSelect1">Género</label>
                  <select class="form-control" type="text" name="GeneUsu" value="<?php echo $row[5] ?>">
                          <option>F</option>
                          <option>M</option>
                  </select>
                </div>
                 <div class="form-group col-md-5">
                  <label for="exampleFormControlInput1">Fecha Nacimiento</label>
                  <input type="date" name="FechaNac" class="form-control" value="<?php echo $row[6] ?>" >
                </div>
                 <div class="form-group col-md-5">
                  <label for="exampleFormControlInput1">Contraseña</label>
                  <input type="password" name="PassUsua" class="form-control" placeholder="Contraseña" value="<?php echo $row[7] ?>">
                </div>
             </div>
             <div class="row">
                <div class="form-group col-md-12">
                  <label for="exampleFormControlInput1">Dirección</label>
                  <input type="text" name="DirUsua" class="form-control" placeholder="Dirección" value="<?php echo $row[8] ?>">
                </div>                 
             </div>
             <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleFormControlInput1">Celular</label>
                  <input type="text" name="CeluUsua" class="form-control" placeholder="Celular" value="<?php echo $row[9] ?>">
                </div>
                 <div class="form-group col-md-6">
                  <label for="exampleFormControlInput1">E-mail</label>
                  <input type="mail" name="CorreoUsua" class="form-control" placeholder="Correo Electrónico" value="<?php echo $row[10] ?>">
                </div>
             </div>
             <br> <hr>
              <div class="col-md-12 justify-content-center">
                  <center><button type="submit" class="btn btn-primary"  name="BtnModifica" >Modificar</button></center> <br>
             </div> 
       </form>
        </div>
    </div> 
    </div>
    <br><hr>


 </section>
</body>
</html>
<?php } ?>



