
<div class="row alert alert-info" role="alert">
  <h5>Categorias</h5>
</div>
<table class="table table-dark table-striped">
    <tr>
<td colspan='4'>
<a href='<?=base_url()?>categorias/nuevo_categoria'>+ Nuevo</a>
</td>
    </tr>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Opciones</th>
    </tr>
    <tr>
        <?=$datos?>
    </tr>
</table>