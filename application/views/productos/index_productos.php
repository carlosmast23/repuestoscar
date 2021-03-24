<div class="row alert alert-info" role="alert">
  <h5>Repuestos</h5>
</div>
<table class="table table-dark table-striped">
    <tr>
        <td colspan='5'>
            <a href='<?= base_url() ?>productos/nuevo_producto'>+ Nuevo</a>
        </td>
    </tr>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Opciones</th>
    </tr>
    <tr>
        <?= $datos ?>
    </tr>
</table>