<h1>Listado de clientes</h1>
<table border="1">
    <tr>
        <th>Id</th> <!-- Agregado -->
        <th>Nombre</th>
        <th>Documento</th>
        <th>Correo</th>
        <th>Teléfono</th>
    </tr>

    <?php foreach ($clientes as $cliente): ?>
    <tr>
        <td><?= $cliente['id'] ?></td> <!-- Agregado -->
        <td><?= $cliente['nombre'] ?></td>
        <td><?= $cliente['documento'] ?></td>
        <td><?= $cliente['correo'] ?></td>
        <td><?= $cliente['telefono'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
