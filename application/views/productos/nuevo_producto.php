<div class="row alert alert-info" role="alert">
  <h5>Repuestos</h5>
</div>
<form action="<?= base_url() ?>productos/almacenar_producto" method="post">
    <table class="table table-dark table-striped"">
        <tr>
            <th>Nombre</th>
            <td>
                <input type='text' name='pro_nombre' id='pro_nombre' required class="form-control">
            </td>
        </tr>   
        <tr>
            <th>Categoria</th>
            <td>
               <?=$combo_categoria?>
            </td>
        </tr>   
        <tr>
            <th>Descripción</th>
            <td>
                <textarea name="pro_descripcion" id="pro_descripcion" required class="form-control"></textarea>
            </td>
        </tr>
        <tr>
            <th>Precio</th>
            <td>
                <input type='number' name='pro_precio' id='pro_precio' required class="form-control col-3">
            </td>
        </tr>   
    </table>
    <input type="submit" value="Enviar" class="btn btn-success col-4">
</form>