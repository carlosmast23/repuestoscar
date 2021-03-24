<form action="<?= base_url() ?>clientes/almacenar_cliente" method="post">
    <table>
        <tr>
            <th>CI/RUC</th>
            <td>
                <input type='text' name='cli_cedula' id='cli_cedula' required>
            </td>
        </tr>   
        <tr>
            <th>Nombres</th>
            <td>
                <input type='text' name='cli_nombres' id='cli_nombres' required>
            </td>
        </tr>   
        <tr>
            <th>Apellidos</th>
            <td>
                <input type='text' name='cli_apellidos' id='cli_apellidos' required>
            </td>
        </tr>   
        <tr>
            <th>Email</th>
            <td>
                <input type='text' name='cli_email' id='cli_email' required>
            </td>
        </tr>   
        <tr>
            <th>Dirección</th>
            <td>
                <input type='text' name='cli_direccion' id='cli_direccion' required>
            </td>
        </tr>   
        <tr>
            <th>Teléfono</th>
            <td>
                <input type='text' name='cli_telefono' id='cli_telefono' required>
            </td>
        </tr>   
         
    </table>
    <input type="submit" value="Enviar class="btn btn-success col-4">
</form>