<form action="<?= base_url() ?>clientes/actualizar_cliente" method="post">
    <table class="table table-dark table-striped">
       <tr>
        <th>Solicitud # </th>
        <td>
            <?=$cli_id?>
        </td>
    </tr> 
    <tr>
        <th>Nombres</th>
        <td>
            <?=$cli_nombres?>
        </td>
        <th>Apellidos</th>
        <td>
            <?=$cli_apellidos?>
        </td>
    </tr>      
    <tr>
        <th>Email</th>
        <td>
            <?=$cli_email?>
        </td>
        <th>Teléfono</th>
        <td>
            <?=$cli_telefono?>
        </td>
    </tr>   
    <tr>
        <th>Pedido</th>
        <td>
            <?=$cli_pedido?>
        </td>
        <th>Fecha</th>
        <td>
            <?=$cli_fecha?>
        </td>
    </tr>  
    <tr>
        <th>Repuestos</th>
            <td>
                <?= $combo_repuestos ?>
            </td>
        </tr> 
    <tr>
        <th>Estado</th>
        <td>
            <select class="form-control" name="cli_estado" required>
                <option value="" >Seleccione:</option>
                <option value="0" <?php  if($cli_estado==1) echo "selected";?> >No Finalizado</option>
                <option value="2" <?php if($cli_estado==2) echo "selected";?> >Finalizado</option>
                <option value="3" <?php if($cli_estado==3) echo "selected";?> >Cancelado</option>
            </select>
        </td>
    </tr>
    <tr>
        <th>Descripción</th>
        <td>
            <textarea name='cli_respuesta' id='cli_respuesta' required class="form-control" placeholder="Descripción detalle del pedido"></textarea>
        </td>
    </tr> 
    <tr>
        <th>Presupuesto</th>
        <td>
        <input type='number' name='cli_presupuesto' id='cli_presupuesto' required class="form-control col-3"  placeholder="0">
        </td>
    </tr>    
</table>
<input type="hidden" name="cli_id" id="cli_id" value="<?= $cli_id ?>">
<input type="submit" value="Enviar" class="btn btn-success col-4">
</form>