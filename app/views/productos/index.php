<h1>Listado de productos</h1>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoría</th>
        <th>Proveedores</th>
    </tr>

    <?php foreach ($productos as $producto): ?>
    <tr>
        <td><?= $producto['id'] ?></td>
        <td><?= $producto['nombre'] ?></td>
        <td><?= $producto['precio'] ?></td>
        <td><?= $producto['categoria'] ?></td>
        <td><?= $producto['proveedor'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<h1>Listado de id de productos</h1>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoría</th>
    </tr>

    <tr>
        <td><?= $producto_unico['id'] ?></td>
        <td><?= $producto_unico['nombre'] ?></td>
        <td><?= $producto_unico['precio'] ?></td>
        <td><?= $producto_unico['categoria'] ?></td>
    </tr>
</table>

<h1>Categorias</h1>
<table border="1">
    <tr>
        <th>Id Categoría</th>
        <th>Nombre</th>
        <th>Descripción</th>
    </tr>

    <?php foreach ($categorias as $categoria): ?>
    <tr>
        <td><?= $categoria['id_categoria'] ?></td>
        <td><?= $categoria['nombre'] ?></td>
        <td><?= $categoria['descripcion'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
