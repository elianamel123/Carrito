<button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".registrar_producto">+ Nuevo</button>


<div class="modal fade registrar_producto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="myLargeModalLabel">Regitro - Producto</h5>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="Operaciones/registrar_producto.php" method="POST" enctype="multipart/form-data">

                    <div class="form-group row">
                        <label class="col-lg-3 col-md-3 col-sm-12"> Código: </label>
                        <input type="number" name="codigp" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-md-3 col-sm-12"> Descripción: </label>
                        <input type="text" name="Descripcion" class="form-control col-lg-9 col-md-9 col-sm-12" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-md-3 col-sm-12"> Detalle: </label>
                        <input type="text" name="Detalle" class="form-control col-lg-9 col-md-9 col-sm-12" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-md-3 col-sm-12"> Id Categoria: </label>
                        <select name="id_categoria" id="" class="form-control col-lg-4 col-md-4 col-sm-12">
                            <option value=""></option>
                            <?php
                            $b_categoria = "SELECT * FROM categoria";
                            $r_b_categoria = mysqli_query($conexion, $b_categoria);
                            while ($datos_categoria = mysqli_fetch_array($r_b_categoria)) { ?>
                                <option value="<?php echo $datos_categoria["id"]; ?>"><?php echo $datos_categoria["nombre"]; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-md-3 col-sm-12"> Precio Compra:</label>
                        <input type="number" name="Precio_Compra" class="form-control col-lg-4 col-md-4 col-sm-12">
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-md-3 col-sm-12"> Precio Venta: </label>
                        <input type="number" name="Precio_Venta" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-md-3 col-sm-12"> Stock: </label>
                        <input type="number" name="Stock" class="form-control col-lg-9 col-md-9 col-sm-12" required>
                    </div>
                  

                    <div class="form-group row">
                    <label class="col-lg-3 col-md-3 col-sm-12"> Estado: </label>
                        <select type="number"  name="estado" class="form-control col-lg-4 col-md-4 col-sm-12">
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-md-3 col-sm-12"> Imagen: </label>
                        <input type="file" name="foto" class="form-control col-lg-4 col-md-5 col-sm-12" require accept="image/*">
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-md-3 col-sm-12">id_proveedor: </label>
                        <select name="id_provedor" id="" class="form-control col-lg-4 col-md-4 col-sm-12">
                            <option value=""></option>
                            <?php
                            $b_provedor = "SELECT * FROM proveedor";
                            $r_b_provedor = mysqli_query($conexion, $b_provedor);
                            while ($datos_provedor = mysqli_fetch_array($r_b_provedor)) { ?>
                                <option value="<?php echo $datos_provedor["id"]; ?>"><?php echo $datos_provedor["ruc"]; ?></option>
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