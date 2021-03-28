<form action="<?= base_url() ?>clientes" method="post">

    <table class="table table-dark table-striped table-bordered table-sm small">
        <tr>
         <td colspan="3">
           <select class="form-control" name="cli_estado" >
            <option value="" >Seleccione:</option>
            <option value="0">No Finalizado</option>
            <option value="2">Finalizado</option>
            <option value="3">Cancelado</option>
        </select>
    </td>
    <td> 
        <input type="submit" name="Buscar" class="btn btn-success">
    </td>
</tr>
<tr>
    <th>ID</th>
    <th>Fecha</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Email</th>
    <th>Teléfono</th>
    <th width="20%">Pedido</th>
    <th>Categoria</th>
    <th>Presupuesto</th>
    <th>Estado</th>
    <th>Opciones</th>
</tr>
<tr>
    <?= $datos ?>
</tr>
</table>
</form>
