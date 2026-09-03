<h1>Listado de clientes</h1>

<table>
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoría</th>
    </tr>

    <?php foreach ($clientes as $cliente): ?>
    <tr>
        <td><?= $cliente['nombre'] ?></td>
        <td><?= $cliente['documento'] ?></td>
        <td><?= $cliente['correo'] ?></td>
        <td><?= $cliente['telefono'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>