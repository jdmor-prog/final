<h2>Cursos</h2>
<a href="index.php?seccion=cursos&action=create" role="button">Nuevo Curso</a>
<table>
    <thead>
        <tr>
            <th>Título</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($cursos as $c): ?>
        <tr>
            <td><?= htmlspecialchars($c['titulo']) ?></td>
            <td>
                <a href="index.php?seccion=cursos&action=edit&id=<?= $c['id'] ?>">Editar</a> |
                <a href="index.php?seccion=cursos&action=delete&id=<?= $c['id'] ?>">Eliminar</a> |
                <a href="index.php?seccion=lecciones&action=index&id=<?= $c['id'] ?>">Ver Lecciones</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>