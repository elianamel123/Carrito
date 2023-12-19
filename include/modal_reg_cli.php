<button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".registrar_cliente">+ Nuevo</button>


<div class="modal fade registrar_cliente" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title h4" id="myLargeModalLabel">Regitro - Cliente</h5>
            <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form action="Operaciones/registrar_cliente.php" method="POST" >

<div class="form-group row">
    <label class="col-lg-3 col-md-3 col-sm-12"> Ruc y/o Dni: </label>
    <input type="number" name="ruc_dni" class="form-control col-lg-4 col-md-4 col-sm-12" 
    required>
</div>

<div class="form-group row">
    <label class="col-lg-3 col-md-3 col-sm-12"> Razón Social: </label>
    <input type="text" name="razon" class="form-control col-lg-9 col-md-9 col-sm-12" 
    required>
</div>
<div class="form-group row">
    <label class="col-lg-3 col-md-3 col-sm-12"> Telefono: </label>
    <input type="number" name="telefono" class="form-control col-lg-4 col-md-4 col-sm-12" 
    required>
</div>
<div class="form-group row">
    <label class="col-lg-3 col-md-3 col-sm-12"> Correo: </label>
    <input type="Email" name="correo" class="form-control col-lg-4 col-md-4 col-sm-12" 
    required>
</div>
<div class="form-group row">
    <label class="col-lg-3 col-md-3 col-sm-12"> Dirección: </label>
    <input type="text" name="direccion" class="form-control col-lg-9 col-md-9 col-sm-12" 
    required>
</div>
<div class="form-group row">
    <label class="col-lg-3 col-md-3 col-sm-12"> Dirección Envío: </label>
    <input type="text" name="direccion_envio" class="form-control col-lg-9 col-md-9 col-sm-12" 
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