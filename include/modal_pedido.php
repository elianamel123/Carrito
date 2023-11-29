<button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".registrar_pedido">+ Nuevo</button>


<div class="modal fade registrar_pedido" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title h4" id="myLargeModalLabel">Regitro pedido</h5>
            <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form action="Operaciones/registro_pedido.php" method="POST">
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12"> Fecha/Hora Pedido: </label>
                                <input type="datetime-local" name="fecha_p" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12"> Fecha Entrega: </label>
                                <input type="date" name="Fecha_e" class="form-control col-lg-4 col-md-4 col-sm-12" 
                                required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12"> Metodo Pago: </label>
                                <input type="text" name="metodo_p" class="form-control col-lg-9 col-md-9 col-sm-12" 
                                required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12"> Monto: </label>
                                <input type="step" name="monto" class="form-control col-lg-4 col-md-4 col-sm-12" 
                                required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12"> Comprobate de Pago: </label>
                                <input type="text" name="comprobate" class="form-control col-lg-9 col-md-9 col-sm-12" 
                                required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12"> Estado: </label>
                                <input type="text" name="estado" class="form-control col-lg-9 col-md-9 col-sm-12" 
                                required>
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