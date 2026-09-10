<h1>Listado de categorias</h1>
<table border="1">
    <tr>
        <th>Id</th> 
        <th>Nombre</th>
        <th>Descripcion</th>
    </tr>

    <?php foreach ($categorias as $categoria): ?>
    <tr>
        <td><?= $categoria['id_categoria']?> </td> 
        <td><?= $categoria['nombre']?> </td>
        <td><?= $categoria['descripcion']?> </td>
    </tr>
    <?php endforeach ?>
</table>
