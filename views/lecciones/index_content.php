<h2>Lecciones del Curso</h2>
<a href="index.php?seccion=lecciones&action=create&id=<?= htmlspecialchars($_GET['id']) ?>" role="button">Nueva Lección</a>
<table>
    <thead>
        <tr>
            <th>Título</th>
            <th>Contenido</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($lecciones as $l): ?>
        <tr>
            <td><?= htmlspecialchars($l['titulo']) ?></td>
            <td><?= htmlspecialchars($l['contenido']) ?></td>
            <td>
                <a href="index.php?seccion=lecciones&action=edit&id=<?= $l['id'] ?>">Editar</a> |
                <a href="index.php?seccion=lecciones&action=delete&id=<?= $l['id'] ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>