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
                        <input type="number" name="serie_venta" class="form-control col-lg-6 col-md-6 col-sm-12" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-md-3 col-sm-12"> Número de Venta: </label>
                        <input type="number" name="numero_venta" class="form-control col-lg-6 col-md-6 col-sm-12" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-md-3 col-sm-12"> Fecha Venta: </label>
                        <input type="date" name="fecha_hora_venta" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-md-3 col-sm-12"> Monto Total: </label>
                        <input type="number" name="monto_total" class="form-control col-lg-6 col-md-6 col-sm-12" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-md-3 col-sm-12"> Id Cliente: </label>
                        <select name="id_cliente" id="" class="form-control col-lg-4 col-md-4 col-sm-12">
                            <option value=""></option>
                            <?php
                            $b_cliente = "SELECT * FROM cliente";
                            $r_b_cliente = mysqli_query($conexion, $b_cliente);
                            while ($datos_cliente = mysqli_fetch_array($r_b_cliente)) { ?>
                                <option value="<?php echo $datos_cliente["id"]; ?>"><?php echo $datos_cliente["ruc_dni"]; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-md-3 col-sm-12"> Id Usuario: </label>
                        <select name="id_usuario" id="" class="form-control col-lg-4 col-md-4 col-sm-12">
                            <option value=""></option>
                            <?php
                            $b_usuario = "SELECT * FROM usuario";
                            $r_b_usuario = mysqli_query($conexion, $b_usuario);
                            while ($datos_usuario = mysqli_fetch_array($r_b_usuario)) { ?>
                                <option value="<?php echo $datos_usuario["id"]; ?>"><?php echo $datos_usuario["dni"]; ?></option>
                            <?php } ?>
                        </select>

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