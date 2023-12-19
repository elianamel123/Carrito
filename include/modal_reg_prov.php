<button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".registrar_prooveedor">+ Nuevo</button>


<div class="modal fade registrar_prooveedor" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title h4" id="myLargeModalLabel">Regitro  - Proveedor</h5>
            <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form action="Operaciones/registrar_provedor.php" method="POST">
                        
                        <div class="form-group row">
                            <label class="col-lg-3 col-md-3 col-sm-12"> RUC: </label>
                            <input type="number" name="ruc" class="form-control col-lg-9 col-md-9 col-sm-12" 
                            required>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-md-3 col-sm-12"> Razón Social: </label>
                            <input type="text" name="razon" class="form-control col-lg-9 col-md-9 col-sm-12" 
                            required>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-md-3 col-sm-12"> Email: </label>
                            <input type="Email" name="email" class="form-control col-lg-4 col-md-4 col-sm-12" 
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
                            <label class="col-lg-3 col-md-3 col-sm-12"> Medio de Pago: </label>
                            <input type="text" name="pago" class="form-control col-lg-4 col-md-4 col-sm-12" >
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