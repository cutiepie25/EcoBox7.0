<?php
include('Menu.php');
?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Usuarios</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                       
                        <div class="col-md-12 align-self-end card-header py-3 justify-content-end">
                            <button class="btn btn-sm bg-gradient-primary offset-md-10 col-md-2 " data-toggle="modal" data-target="#exampleModal">Nuevo Usuario</button>
                        </div>
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    
                                <thead class="thead-dark">
                              <th style="width: 20rem" ><center>Identificación usuario</center></th>
                              <th style="width: 20rem" ><center>Tipo de documento</center></th>
                              <th style="width: 20rem" ><center>Tipo de usuario</center></th>
                              <th style="width: 20rem" ><center>Nombre usuario</center></th>
                              <th style="width: 20rem" ><center>Apellido </center></th>
                              <th style="width: 20rem" ><center>Fecha de nacimiento</center></th>
                              <th style="width: 20rem" ><center>Dirección </center></th>
                              <th style="width: 20rem" ><center>Celular </center></th>
                              <th style="width: 20rem" ><center>Correo </center></th>
                              <th style="width: 20rem" ><center>Clave </center></th>
                              <th style="width: 5rem" ><center>Eliminar</center> </th>
                              <th style="width: 5rem" ><center>Modificar</center> </th>
                              
                          </thead>
                                    <?php 
                          include( '../../../controlador/conex.php'); 
                          $cons = $conexion -> query("SELECT * FROM usuarios");
                          while ($row = $cons -> fetch_row()) {
                           
                         ?>

                        <tr>
                          <td><?php echo ''.$row[0].''; ?></td>
                          <td><?php echo ''.$row[1].''; ?></td>
                          <td><?php echo ''.$row[2].''; ?></td>
                          <td><?php echo ''.$row[3].''; ?></td>
                          <td><?php echo ''.$row[4].''; ?></td>
                          <td><?php echo ''.$row[5].''; ?></td>
                          <td><?php echo ''.$row[6].''; ?></td>
                          <td><?php echo ''.$row[7].''; ?></td>
                          <td><?php echo ''.$row[8].''; ?></td>
                          <td><?php echo ''.$row[9].''; ?></td>
                         
                       <!--Eliminar (función de CRUD, botón e ícono-->
                           <td> <center><button type="submit" class="btn-outline-success btn-sm"  value="Eliminar" name="BorrarUsuarios" onclick="location='../../../controlador/BorrarUsuarios.php?id=<?php echo ''.$row[0].'' ?>'" ><i class="fa-solid fa-trash"><span class="oi oi-x"></span></button></center></td>

                      <!--Modificar (función de CRUD, botón e ícono)-->
                           <td> <center><button type="submit" class="btn-outline-success btn-sm"  value="Modificar" name="Modificarusua" onclick="location='../../../controlador/Modificarusua.php?id=<?php echo ''.$row[0].'' ?>'" ><i class="fa-solid fa-pen-to-square"></i> <span class="oi oi-x"></span></button></center></td>

                        
                             
                        </tr>
                        <?php } ?>
                               
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- MODAL DE USUARIO -->
    <!-- Button trigger modal -->
 
   
   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="../../../controlador/GuardarUsuario.php">
            <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputNombre4">Tipo Documento</label>
                    <select class="form-control" name="TipoDoc" required>
                        <!-- Realizamos  una consulta a la tabla Tipo Documento para que me llene el Select-->
                      <?php  
                        include( '../../../controlador/conex.php'); 
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT `Id_tipodoc`, `Descrip_tipodoc` FROM `tipo_doc`";
                          $eje = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($row = $eje->fetch_row()){
                            echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                          }
                        ?>
                  </select>
                  </div>
                  <div class="form-group col-md-6">
                  <label for="inputApellidos4">Tipo de Usuario</label>
                  <select class="form-control" name="TipoUsua" required>
                        <!-- Realizamos  una consulta a la tabla Tipo Documento para que me llene el Select-->
                      <?php  
                        include( '../../../controlador/conex.php'); 
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT `Id_tipousua`, `Descrip_tipousua` FROM `tipo_usua`";
                          $eje = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($row = $eje->fetch_row()){
                            echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                          }
                        ?>
                  </select>
                  </div>
                </div>
            <div class="form-group">
                  <label for="inputDirección2">Identificación</label>
                  <input type="number" class="form-control" Name="Identificacion" >
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputNombre4">Nombre</label>
                    <input type="Text" class="form-control" name="Nombre">
                  </div>
                  <div class="form-group col-md-6">
                  <label for="inputApellidos4">Apellidos</label>
                    <input type="Text" class="form-control" name="Apellidos">
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputFechaNacimiento">Fecha Nacimiento</label>
                  <input type="date" class="form-control" name="Fecha" >
                </div>
                <div class="form-group">
                  <label for="inputDirección2">Dirección</label>
                  <input type="text" class="form-control" Name="Direccion" >
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCelular">Celular</label>
                    <input type="Number" class="form-control" name="Celular">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputCelular">Correo</label>
                    <input type="Email" class="form-control" name="Correo">
                  </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="inputCelular">Contraseña</label>
                      <input type="password" class="form-control" name="Clave_usua">
                    </div>
                    </div>
                
                
              <!--Guardar (función de CRUD, botón e ícono)-->    
              <div class="col-md-12 justify-content-center mt-5">
                  <center><button type="submit" class="btn btn-primary"  name="BtnGuardar" >Guardar</button>
                   <button type="reset" class="btn btn-primary"  name="BtnLimpiar" >Limpiar</button></center> <br>
             </div> 
              </form>
        </div>
        
      </div>
    </div>
  </div>
  
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>