<div class="row alert alert-info" role="alert">
  <h5>Categorias</h5>
</div>
<form action="<?= base_url() ?>categorias/almacenar_categoria" method="post">
    <table class="table table-dark table-striped"">
        <tr>
            <th>Nombre</th>
            <td>
                <input type='text' name='cat_nombre' id='cat_nombre' required class="form-control">
            </td>
        </tr>   
        <tr>
            <th>Descripción</th>
            <td>
                <textarea name="cat_descripcion" id="cat_descripcion" required class="form-control"></textarea>
            </td>
        </tr>
    </table>
    <input type="submit" value="Enviar" class="btn btn-success col-4">
</form>