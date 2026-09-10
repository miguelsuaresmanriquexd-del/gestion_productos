<h1>Listado de productos</h1>
<table border="1">
    <tr>
        <th>Id</th> <!-- Agregado -->
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoría</th>
        <th>Proveedores</th>
    </tr>

    <?php foreach ($productos as $producto): ?>
    <tr>
        <td><?= $producto['id'] ?></td> <!-- Agregado -->
        <td><?= $producto['nombre'] ?></td>
        <td><?= $producto['precio'] ?></td>
        <td><?= $producto['categoria'] ?></td>
        <td><?= $producto['proveedor'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

