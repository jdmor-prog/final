<h2>Listado de Usuarios</h2>
<a href="index.php?seccion=usuarios&action=create" role="button">Nuevo Usuario</a>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $u): ?>
        <tr>
            <td><?= htmlspecialchars($u['nombre']) ?></td>
            <td><?= htmlspecialchars($u['email']) ?></td>
            <td>
                <a href="index.php?seccion=usuarios&action=edit&id=<?= $u['id'] ?>">Editar</a> |
                <a href="index.php?seccion=usuarios&action=delete&id=<?= $u['id'] ?>">Eliminar</a> |
                <a href="index.php?seccion=perfiles&action=edit&id=<?= $u['id'] ?>">Perfil</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>