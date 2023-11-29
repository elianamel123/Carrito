<button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".registrar_ventas">+ Nuevo</button>


<div class="modal fade registrar_ventas" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title h4" id="myLargeModalLabel">Regitro Ventas</h5>
            <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form action="Operaciones/registro_venta.php" method="POST">
                         
                         <div class="form-group row">
                             <label class="col-lg-3 col-md-3 col-sm-12"> Serie de Venta: </label>
                             <input type="number" name="serie" class="form-control col-lg-6 col-md-6 col-sm-12" 
                             required>
                         </div>
                         <div class="form-group row">
                             <label class="col-lg-3 col-md-3 col-sm-12"> Número de Venta: </label>
                             <input type="number" name="num" class="form-control col-lg-6 col-md-6 col-sm-12" 
                             required>
                         </div>
                         <div class="form-group row">
                             <label class="col-lg-3 col-md-3 col-sm-12"> Monto Total: </label>
                             <input type="number" name="monto" class="form-control col-lg-6 col-md-6 col-sm-12" 
                             required>
                         </div>
                         <div class="form-group row">
                             <label class="col-lg-3 col-md-3 col-sm-12"> Fecha Venta: </label>
                             <input type="date" name="fecha" class="form-control col-lg-4 col-md-4 col-sm-12" 
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