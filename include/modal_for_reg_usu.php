
<button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".registrar">+ Nuevo</button>


<div class="modal fade registrar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title h4" id="myLargeModalLabel">Large modal</h5>
                                                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <form action="Operaciones/registrar_usuario.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12"> DNI: </label>
                                <input type="number" name="dni" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12"> Apellidos y Nombres: </label>
                                <input type="text" name="nombre" class="form-control col-lg-9 col-md-9 col-sm-12" 
                                required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12"> Correo: </label>
                                <input type="Emai" name="email" class="form-control col-lg-9 col-md-9 col-sm-12" 
                                required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12"> Telefono: </label>
                                <input type="number" name="telefono" class="form-control col-lg-4 col-md-4 col-sm-12" 
                                required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12"> Dirección: </label>
                                <input type="text" name="direc" class="form-control col-lg-9 col-md-9 col-sm-12" 
                                required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12"> Fecha Nacimiento: </label>
                                <input type="date" name="fecha" class="form-control col-lg-4 col-md-4 col-sm-12" >
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-10 col-sm-12"> Rol: </label>
                               <select name="rol" id="" class="form-control col-lg-4 col-md-4 col-sm-12">
                                <option value=""></option>
                                <?php 
                                $b_roles = "SELECT * FROM roles";
                                $r_b_roles = mysqli_query($conexion, $b_roles);
                                while ($datos_roles = mysqli_fetch_array($r_b_roles)) {?>
                                    <option value="<?php echo $datos_roles ["id"];?>"><?php echo $datos_roles ["nombre"];?></option>
                                <?php }?>
                               
                               
                               </select>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12"> Foto: </label>
                                <input type="file" name="foto" class="form-control col-lg-4 col-md-4 col-sm-12" 
                                require accept="image/*">
                            </div>

                            <div class="form-group row">
                            <label class="col-lg-3 col-md-3 col-sm-12"></label>
                                <button type="submit" class="btn btn-success">Guardar

                                </button>

                            </div>
                        </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>