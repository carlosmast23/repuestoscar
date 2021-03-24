<div class="row alert alert-info" role="alert">
  <h5>Repuestos</h5>
</div>
<form action="<?= base_url() ?>productos/actualizar_producto" method="post">
    <table class="table table-dark table-striped">
        <tr>
            <th>Nombre</th>
            <td>
                <input type='text' name='pro_nombre' id='pro_nombre' required value="<?= $rep_nombre ?>" class="form-control">
            </td>
        </tr>   
        <tr>
            <th>Categoria</th>
            <td>
                <?= $combo_categoria ?>
            </td>
        </tr>   
        <tr>
            <th>Descripción</th>
            <td>
                <textarea name="pro_descripcion" id="pro_descripcion" required class="form-control"><?= $rep_descripcion ?></textarea>
            </td>
        </tr>
        <tr>
            <th>Precio</th>
            <td>
                <input type='number' name='pro_precio' id='pro_precio' required value="<?= $rep_precio ?>" class="form-control col-3">
            </td>
        </tr>   
    </table>
    <input type="hidden" name="pro_id" id="pro_id" value="<?= $rep_id ?>">

    <input type="submit" value="Enviar" class="btn btn-success col-4">
</form>