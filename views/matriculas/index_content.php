<h2>Cursos Inscritos</h2>
<a href="index.php?seccion=matriculas&action=form&id=<?= htmlspecialchars($_GET['id']) ?>" role="button">Inscribir a más cursos</a>

<table>
    <thead>
        <tr>
            <th>Título del Curso</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($cursos as $c): ?>
        <tr>
            <td><?= htmlspecialchars($c['titulo']) ?></td>
            <td>
                <a href="index.php?seccion=matriculas&action=desinscribir&id=<?= htmlspecialchars($_GET['id']) ?>&curso_id=<?= $c['id'] ?>">Quitar inscripción</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>