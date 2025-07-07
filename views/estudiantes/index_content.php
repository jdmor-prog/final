<h2>Estudiantes</h2>
<a href="index.php?seccion=estudiantes&action=create" role="button">Nuevo Estudiante</a>
<table>
    <thead>
        <tr>
            <th>Nombre Completo</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($estudiantes as $e): ?>
        <tr>
            <td><?= htmlspecialchars($e['nombre_completo']) ?></td>
            <td><?= htmlspecialchars($e['email']) ?></td>
            <td>
                <a href="index.php?seccion=estudiantes&action=edit&id=<?= $e['id'] ?>">Editar</a> |
                <a href="index.php?seccion=estudiantes&action=delete&id=<?= $e['id'] ?>">Eliminar</a> |
                <a href="index.php?seccion=matriculas&action=index&id=<?= $e['id'] ?>">Ver Cursos</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>