<div class="row alert alert-info" role="alert">
  <h5>Categorias</h5>
</div>
<form action="<?= base_url() ?>categorias/actualizar_categoria" method="post">
    <table class="table table-dark table-striped">
        <tr>
            <th>Nombre</th>
            <td>
                <input type='text' name='cat_nombre' id='cat_nombre' required value="<?= $cat_nombre ?>" class="form-control">
            </td>
        </tr>   
        <tr>
            <th>Descripción</th>
            <td>
                <textarea name="cat_descripcion" id="cat_descripcion" required class="form-control"><?= $cat_descripcion ?></textarea>
            </td>
        </tr>
    </table>
    <input type="hidden" name="cat_id" id="cat_id" value="<?= $cat_id ?>">
    <input type="submit" value="Enviar" class="btn btn-success col-4">
</form>