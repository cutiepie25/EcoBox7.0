<?php
include('Menu.php');
?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Fecha factura</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                       
                        <div class="col-md-12 align-self-end card-header py-3 justify-content-end">
                            <button class="btn btn-sm bg-gradient-primary offset-md-10 col-md-2 " data-toggle="modal" data-target="#exampleModal">Establecer fecha factura</button>
                        </div>
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    
                                <thead class="thead-dark">
                              <th style="width: 10rem" ><center>Id factura</center></th>
                              <th style="width: 20rem" ><center>Id Usuario</center></th>
                              <th style="width: 5rem" ><center>Fecha</center> </th>
                              <th style="width: 10rem" ><center>Id Tipo transacción</center> </th>
                              <th style="width: 5rem" ><center>Eliminar</center> </th>
                              <th style="width: 5rem" ><center>Modificar</center> </th>
                          </thead>
                                    <?php 
                          include( '../../../controlador/conex.php'); 
                          $cons = $conexion -> query("SELECT * FROM factura");
                          while ($row = $cons -> fetch_row()) {
                           
                         ?>

                        <tr>
                          <td><?php echo ''.$row[0].''; ?></td>
                          <td><?php echo ''.$row[1].''; ?></td>
                          <td><?php echo ''.$row[2].''; ?></td>
                          <td><?php echo ''.$row[3].''; ?></td>

                       <!--Botón eliminar -->  
                           <td> <center><button type="submit" class="btn-outline-success btn-sm"  value="Eliminar" name="BorrarFactura" onclick="location='../../../controlador/BorrarFactura.php?id=<?php echo ''.$row[0].'' ?>'" ><i class="fa-solid fa-trash"></i><span class="oi oi-x"></span></button></center></td>
                           
                        <!--Botón modificar -->   
                           <td> <center><button type="submit" class="btn-outline-success btn-sm"  value="Eliminar" name="ModificarFactura" onclick="location='../../../controlador/ActualizarFactura.php?id=<?php echo ''.$row[0].'' ?>'" ><i class="fa-solid fa-pen-to-square"></i><span class="oi oi-x"></span></button></center></td>

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
          <h5 class="modal-title" id="exampleModalLabel">Establecer fecha Factura</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form method="POST" action="../../../controlador/GuardarFactura.php">
        <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputNombre4">Fecha</label>
                    <input type="date" class="form-control" name="Fecha">
                  </div>
            </div>

            <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputNombre4">Usuario</label>
                    <select class="form-control" name="Id" required>
                    <?php  
                        include( '../../../controlador/conex.php'); 
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT `Id_factura`, `Id_usua`, `Fecha`, `Id_tipotrans` FROM `factura`";
                          $eje = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($row = $eje->fetch_row()){
                            echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                          }
                        ?>
                        </select>
                  </div>
            </div>

            <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputNombre4">Tipo de transacción</label>
                    <select class="form-control" name="TipoTrans" required>
                    <?php  
                        include( '../../../controlador/conex.php'); 
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT `Id_factura`, `Id_usua`, `Fecha`, `Id_tipotrans` FROM `factura`";
                          $eje = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($row = $eje->fetch_row()){
                            echo '<option value="'.$row[0].'">'.$row[3].'</option>';
                          }
                        ?>
                        </select>
                  </div>
            </div>
                
              <center><button type="submit" class="btn btn-primary">Guardar</button></center> 
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